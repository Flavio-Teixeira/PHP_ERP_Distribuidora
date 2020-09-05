<?php
  /**
  * Object to be used when returning results
  */
  class DSObject
  {
  }

  class ServerFunctionExecutor
  {
    public $className='';
    public $connectionInfo=array();

    public $host='';
    public $port='';
    public $dsContext='';
    public $restContext='';
    public $cacheContext='';
    public $isHttpS=false;

    public $authentication='';

    /**
    * Class for executing methods from the class hosted at the specified address/port
    * @param string $className The name of the class on the server methods will be invoked on
    * @param array $connectionInfo A map of key/value pairs with required connection info. Currently supported properties are as follows:
    *       - "host" (host to connect to)
    *       - "port" (port on the host to connect on)
    *       - "authentication" (optional base64 encoded user:password pair, encoded as a single string, including the colon)
    *       - "pathPrefix" (optional URL segment to place after the host/port but before the REST url segments.)
    *       - "dscontext" (what to put in the URL for datasnap. If not specified, defaults to 'datasnap' ... as in /datasnap/rest/)
    *       - "restcontext" (what to put in the URL for rest. If not specified, defaults to 'rest' ... as in /datasnap/rest/)
    */
    function __construct($className, $connectionInfo)
    {
      $this->connectionInfo = $connectionInfo;

      //if host or port aren't given in the connectionInfo then they are taken from the current URL
      $this->host = getConnectionHost($connectionInfo);
      $this->port = getConnectionPort($connectionInfo);
      $this->dsContext = getDSContext($connectionInfo); //should be empty string, or end with a '/'
      $this->restContext = getRestContext($connectionInfo); //should be empty string, or end with a '/'
      $this->cacheContext = getCacheContext($connectionInfo); //must not be empty, defaults to 'cache/'
      $this->isHttpS = getIsHTTPS($connectionInfo); //true or false
      $this->className = $className;

      //optional string which is a base64 encrypted user/password pair of format: "user:password"
      //(the pair itself, including the ':', must be encoded as a single string.)
      $this->authentication = (($connectionInfo == array()) || ($connectionInfo['authentication'] == '')) ? '': $connectionInfo['authentication'];
    }


    /**
    * This function uses the connection info of this class to construct a URL to the server cache. Note that this URL is only
    * meaningful URLSuffix is also specified (pointing to a single parameter in the cache) or includeSessionId is false and the
    * URLSuffix is later added.
    * @param string $URLSuffix This is the partial URL value which would be returned from a server method returning a complex data type as application/rest
    * @param boolean $includeSessionId [optional - defaults to false] true to include the session ID in the URL,
    *           false if you will set the session ID later in the request header or url.
    */
    function getCacheURL($URLSuffix, $includeSessionId)
    {
      global $__SessionID__;

      if (($URLSuffix != '') && (is_array($URLSuffix)))
      {
        return '';
      }

      if ($includeSessionId == '')
      {
        $includeSessionId = false;
      }

      $url = $this->getURLPrefix(false) . $this->cacheContext;
      $hasParams = false;

      if ($URLSuffix != '')
      {
        $URLSuffix .= '';

        if (strpos($URLSuffix,'/')===0)
        {
          $URLSuffix=substr($URLSuffix,1);
        }

        if (strpos($URLSuffix,'cache/')===0)
        {
          $URLSuffix=substr($URLSuffix,6);
        }

        if (strpos($URLSuffix,'cache/')===0)
        {
          $URLSuffix=substr($URLSuffix,6);
        }

        $url .= $URLSuffix;

        $hasParams = (strpos($URLSuffix,'?') > 0);
      }

      if ($includeSessionId && ($__SessionID__ != ''))
      {
        $url .= ($hasParams ? '&' : '?');
        $url .= 'sid=' . encodeURIComponent($__SessionID__);
      }

      return($url);
    }

    /**
    * Returns the REST URL up to and including the "datasnap/rest/"
    * @param boolean $includeRest true to include the rest context string (whatever it is) false to stop after datasnap. Defaults to true.
    */
    function getURLPrefix($includeRest=true)
    {
      //optionally using the "pathPrefix" property which could be contributed through connectionInfo
      $pathPrefix = '';
      if (($this->connectionInfo != array()) && ($this->connectionInfo['pathPrefix'] != ''))
      {
        $pathPrefix = '/' . $this->connectionInfo['pathPrefix'];
      }

      $portString = isValidPort($this->port) ? ':' . $this->port : '';

      $dsAndRestSegments = '/' . $this->dsContext;

      if ($includeRest)
      {
        $dsAndRestSegments .= $this->restContext;
      }

      $httpPrefix = $this->isHttpS ? 'https://' : 'http://';

      return $httpPrefix . encodeURIComponent($this->host) . $portString . $pathPrefix . $dsAndRestSegments;
    }

    /**
    * This function returns the request URL for the specified method with the given parameters, where the first
    * item of the array is the request URL and the second item is the request content (or null if no content.)
    * null will be returned if invalid parameters are passed in.
    * @param string $methodName the name of the method in the class to invoke
    * @param string $requestType must be one of: GET, POST, PUT, DELETE
    * @param array $params an array of parameter values to pass into the method, or a single parameter value
    * @param array $requestFilters JSON Object containing pairs of key/value filters to add to the request (filters such as ss.r, for example.)
    * @return array an array of length 2 where the first item is the string url and the second is the content to attach to the body (which may be null)
    */
    function getMethodURL($methodName, $requestType, $params, $requestFilters)
    {
      if ($methodName == '')
      {
        return '';
      }

      $requestType = validateRequestType($requestType);

      //optionally using the "pathPrefix" property which could be contributed through connectionInfo
      $pathPrefix = '';
      if (($this->connectionInfo != array()) && ($this->connectionInfo['pathPrefix'] != ''))
      {
         $pathPrefix = '/' . $this->connectionInfo['pathPrefix'];
      }

      $portString = isValidPort(this.port) ? ':' . $this->port : '';

      $dsAndRestSegments = '/' . $this->dsContext . $this->restContext;

      $url = $this->getURLPrefix() . encodeURIComponent($this->className) . '/' . encodeURIComponent($methodName) . '/';

      $paramToSend = '';

      if(is_array($params))
      {
        $arrLen = count($params);
        for ($x = 0; $x < $arrLen; $x++)
        {
      	  $param = $params[$x];
          if (($x == $arrLen - 1) && ($requestType != "GET") && ($requestType != "DELETE"))
          {
            //if this isn't GET or DELETE then the last parameter is put as the content of the request instead of as part of the URL
            $paramToSend = $param;
          }
          else
          {
            $url .= encodeURIComponent($param) . '/';
          }
        }
      }
      else
      {
        if ($requestType == "GET" || $requestType == "DELETE")
        {
          $url .= $this->encodeURIComponent($params) . '/';
        }
        else
        {
          $paramToSend = $params;
        }
      }

      //if request filters are specified, then add them to the URL
      if ($requestFilters != array())
      {
        $doneOne = false;
        //TODO:
        /*
        for (var key in requestFilters)
        {
          if (requestFilters.hasOwnProperty(key))
          {
            var propPrefix = doneOne ? "&" : "?";
            doneOne = true;

            var propVal = requestFilters[key];

            url += propPrefix + encodeURIComponent(key);

            if (propVal != null)
            {
              url += "=" + encodeURIComponent(propVal);
            }
          }
        }
        */
      }

      return array($url, $paramToSend);
    }

    /**
    * This function executes the given method with the specified parameters and then
    * notifies the callback when a response is received.
    * @param string $url the url to invoke
    * @param mixed $contentParam the parameter to pass through the content of the request (or null)
    * @param string $requestType must be one of: GET, POST, PUT, DELETE
    * @param callback An optioanl function with two parameters, the response object, the request's status (IE: 200) and the specified 'owner'
    *                 The object will be an array, which can contain string, numeric, JSON array or JSON object types.
    * @param boolean $hasResult true if a result from the server call is expected, false to ignore any result returned.
    *                  This is an optional parameter and defaults to 'true'
    * @param string $accept The string value to set for the Accept header of the HTTP request, or null to set as application/json
    * @return mixed if callback in null then this function will return the result that would have
    *         otherwise been passed to the callback
    */
    function executeMethodURL($url, $contentParam, $requestType, $callback, $hasResult, $accept)
    {
      //TODO: Check to remove these comparisons and use default parameter values
      if ($hasResult == '')
      {
        $hasResult = true;
      }

      $requestType = validateRequestType($requestType);

      $request = curl_init();
      //$request = getXmlHttpObject();

      //async is only true if there is a callback that can be notified on completion
      //$useCallback = ($callback != '');
      curl_setopt($request, CURLOPT_URL, $url);
      //TODO: Set the request type depending on $requestType
      //request.open(requestType, url, useCallback);

      //TODO: Remove the callback thing
      /*
      if ($useCallback)
      {
        request.onreadystatechange = function() {
          if (request.readyState == 4)
          {
            //the callback will be notified the execution finished even if there is no expected result
            JSONResult = hasResult ? parseHTTPResponse(request) : null;
            callback(JSONResult, request.status, owner);
          }
        };
      }
      */

      $headers=array();

      if($contentParam != '')
      {
        //$contentParam = contentParam.toJSONString();
        $contentParam = json_encode($contentParam);
      }

      $caccept=($accept == '' ? 'application/json' : $accept);
      $headers[]='Accept: '.$caccept;
      $headers[]='Content-Type: text/xml; charset=utf-8';
      $headers[]='If-Modified-Since: Mon, 1 Oct 1990 05:00:00 GMT';

      if($__SessionID__ != null)
      {
        $headers[]='Pragma: dssession='.$__SessionID__;
      }

      if ($this->authentication != '')
      {
        $headers[]='Authorization: Basic '.$this->authentication;
      }
      curl_setopt($request,CURLOPT_HTTPHEADER,$headers);
      curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

      //request.send(contentParam);
      //TODO: If request method is POST, send the contentparam information
      //curl_setopt($request, CURLOPT_POSTFIELDS,$contentParam);
      $results=curl_exec($request);


      return(parseHTTPResponse($results));
    }


    /**
    * This function executes the given method with the specified parameters and then
    * notifies the callback when a response is received.
    * @param string $methodName the name of the method in the class to invoke
    * @param string $requestType must be one of: GET, POST, PUT, DELETE
    * @param array $params an array of parameter values to pass into the method, or a single parameter value
    * @param callback An optioanl function with two parameters, the response object, the request's status (IE: 200) and the specified 'owner'
    *                 The object will be an array, which can contain string, numeric, JSON array or JSON object types.
    * @param boolean $hasResult true if a result from the server call is expected, false to ignore any result returned.
    *                  This is an optional parameter and defaults to 'true'
    * @param array $requestFilters JSON Object containing pairs of key/value filters to add to the request (filters such as ss.r, for example.)
    * @param string $accept The string value to set for the Accept header of the HTTP request, or null to set application/json
    * @return mixed if callback in null then this function will return the result that would have
    *         otherwise been passed to the callback
    */
    function executeMethod($methodName, $requestType, $params, $callback, $hasResult, $requestFilters, $accept)
    {
      $url = $this->getMethodURL($methodName, $requestType, $params, $requestFilters);
      return($this->executeMethodURL($url[0], $url[1], $requestType, $callback, $hasResult, $accept));
    }


}

//************* object-less functions *****************************
/**
 * Returns the host as given in the connectionInfo JSON Object if it exists, otherwise
 * returns the host of the current URL.
 * @param array $connectionInfo JSON Object containing connection information
 */
function getConnectionHost($connectionInfo)
{
  if (($connectionInfo != array()) && ($connectionInfo['host'] != ''))
  {
    return $connectionInfo['host'];
  }

  $host = 'localhost';
  $hostAndPort = $_SERVER['HTTP_HOST'];
  if ($hostAndPort != 'localhost')
  {
    if (strpos($hostAndPort,':')!==false)
    {
      $splits=explode(':',$hostAndPort,2);
      $host = $splits[0];
    }
    else
    {
      $host = $hostAndPort;
    }
  }
  return $host;
}

/**
 * Returns the port as given in the connectionInfo JSON Object if it exists, otherwise
 * returns the port of the current URL, if specified. Otherwise, returns null.
 * @param array $connectionInfo JSON Object containing connection information
 */
function getConnectionPort($connectionInfo)
{
  if (($connectionInfo != array()) && ($connectionInfo['port'] != ''))
  {
    return $connectionInfo['port'];
  }

  $port= '';
  $hostAndPort = $_SERVER['HTTP_HOST'];
  if ($hostAndPort != 'localhost')
  {
    if (strpos($hostAndPort,':')!==false)
    {
      $splits=explode(':',$hostAndPort,2);
      $port = $splits[1];
    }
  }
  return $port;
}

/**
 * Returns the URL segment to use in the rest URL in place of 'datasnap/'
 * If the connectionInfo object has a "dscontext" defined then that is used (suffixed with '/' if not empty string)
 * otherwise the default value of "datasnap/" is used.
* @param array $connectionInfo JSON Object containing connection information
 */
function getDSContext($connectionInfo)
{
  if (($connectionInfo != array()) && ($connectionInfo['dscontext'] != ''))
  {
    $result = trim($connectionInfo['dscontext']);
    if ($result == '')
    {
      return '';
    }
    return $result.'/';
  }
  return 'datasnap/';
}

/**
 * Returns the URL segment to use in the rest URL in place of 'rest/'
 * If the connectionInfo object has a "restcontext" defined then that is used (suffixed with '/' if not empty string)
 * otherwise the default value of "rest/" is used.
* @param array $connectionInfo JSON Object containing connection information
 */
function getRestContext($connectionInfo)
{
  if (($connectionInfo != array()) && ($connectionInfo['restcontext'] != ''))
  {
    $result = trim($connectionInfo['restcontext']);
    if ($result == '')
    {
      return '';
    }
    return $result.'/';
  }
  return 'rest/';
}

/**
 * Returns the URL segment to use in the rest URL in place of 'cache/'
 * If the connectionInfo object has a "cachecontext" defined then that is used (suffixed with '/' if not empty string)
 * otherwise the default value of "rest/" is used.
* @param array $connectionInfo JSON Object containing connection information
 */
function getCacheContext($connectionInfo)
{
  $defaultValue='cache/';
  if (($connectionInfo != array()) && ($connectionInfo['cachecontext'] != ''))
  {
    $result = trim($connectionInfo['cachecontext']);
    if ($result == '')
    {
      return $defaultvalue;
    }
    return $result.'/';
  }
  return $defaultValue;
}

/**
 * Checks the connection info to see if there is a boolean value set for a 'https' property. If there is, this
 * function returns that value. Otherwise, it bases its result on the document's current URL.
 * @param array $connectionInfo JSON Object containing connection information
 */
function getIsHTTPS($connectionInfo)
{
  if (($connectionInfo != array()) && ($connectionInfo['https'] != ''))
  {
    return($connectionInfo['https']===true);
  }
  return($_SERVER['HTTPS']=='on');
}

  /**
  * Returns the specified request type (in uppercase) if it is one of the valid types, 'GET' otherwise.
  */
  function validateRequestType($requestType)
  {
    if ($requestType == '')
    {
      $requestType = 'GET';
    }
    else
    {
      $requestType = strtoupper($requestType);
      if (($requestType != 'GET') && ($requestType != 'POST') && ($requestType != 'PUT') && ($requestType != 'DELETE'))
      {
        $requestType = 'GET';
      }
    }
    return $requestType;
  }


  //PHP implementation of Javascript encodeURIComponent
  function encodeURIComponent($str)
  {
    $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
    return strtr(rawurlencode($str), $revert);
  }

/**
 * Checks if the given port is valid.
 * @param string $port the port (can be a number or a string.)
 * @return true if the port is valid, false otherwise
 */
function isValidPort($port)
{
  if ($port == '')
  {
    return false;
  }
  else if (is_numeric($port))
  {
    return true;
  }
}


/**
 * Tries to get the session ID from the Pragma header field of the given request/response object
 * If successful, will set the value of the $$SessionID$$ variable accordingly.
 * @param request the response from the http request
 */
function parseSessionID($request)
{
  if ($request != '')
  {
    //TODO:
    /*
    //pragma may store the Session ID value to use in future calls
    $pragmaStr = request.getResponseHeader("Pragma");

    if (pragmaStr != null)
    {
      //Header looks like this, if set: Pragma: dssession=$$SessionID$$
      var sessKey = "dssession=";
      var sessIndx = pragmaStr.indexOf("dssession=");
      var commaIndx = pragmaStr.indexOf(",", sessIndx);

      if (sessIndx > -1)
      {
        commaIndx = commaIndx < 0 ? pragmaStr.length: commaIndx;
        sessIndx = sessIndx + sessKey.length;
        $$SessionID$$ = pragmaStr.substr(sessIndx, (commaIndx - sessIndx));
      }
    }
   */
  }
}

/*
 * This is given an http request's response object and parses the content to return a JSON result.
 * @param request the response from the http request
 * @return the result returned by this function can be one of:
 *         - JSON array of return (out/inout) parameters and the result object that was wrapped in the response
 *         - any JSON value (if the server passes back a response not in the {"result":[...]} format)
 *         - null
 */
function parseHTTPResponse($request)
{
  parseSessionID($request);

  if ($request != '')
  {
    $responseText = $request;
    if ($responseText!='')
    {
      $JSONResultWrapper = json_decode($responseText);

      //TODO:
      /*
      //handle session timeouts (status = 403) and other session and authorization related errors
      if (request.status == 403)
      {
        if (JSONResultWrapper != null && JSONResultWrapper.SessionExpired != null)
        {
          //the session is no longer valid, so clear the stored session ID
          //a new session will be creates the next time the user invokes a server function
          $$SessionID$$ = null;
        }
      }
      */
      //all other results (including other errors)
      return($JSONResultWrapper);
    }
  }
  return('');
}


//************* object-less functions *****************************

?>