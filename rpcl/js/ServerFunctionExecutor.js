$$SessionID$$ = (typeof($$SessionID$$) != "undefined") ? $$SessionID$$ : null;

/*
 * Class for executing methods from the class hosted at the specified address/port
 * @param className The name of the class on the server methods will be invoked on
 * @param connectionInfo a map of key/value pairs with required connection info. Currently supported properties are as follows:
 *       - "host" (host to connect to)
 *       - "port" (port on the host to connect on)
 *       - "authentication" (optional base64 encoded user:password pair, encoded as a single string, including the colon)
 *       - "pathPrefix" (optional URL segment to place after the host/port but before the REST url segments.)
 *       - "dscontext" (what to put in the URL for datasnap. If not specified, defaults to 'datasnap' ... as in /datasnap/rest/)
 *       - "restcontext" (what to put in the URL for rest. If not specified, defaults to 'rest' ... as in /datasnap/rest/) 
 * @param owner an optional parameter: another JavaScript object which owns this executor. This value will be passed 
 *         to the callback provided in the executeMethod call, if any.
 */
function ServerFunctionExecutor(className, connectionInfo, owner)
{
  this.connectionInfo = connectionInfo;
  //if host or port aren't given in the connectionInfo then they are taken from the current URL
  this.host = getConnectionHost(connectionInfo);
  this.port = getConnectionPort(connectionInfo);
  this.dsContext = getDSContext(connectionInfo); //should be empty string, or end with a '/'
  this.restContext = getRestContext(connectionInfo); //should be empty string, or end with a '/'
  this.cacheContext = getCacheContext(connectionInfo); //must not be empty, defaults to 'cache/'
  this.isHttpS = getIsHTTPS(connectionInfo); //true or false
  this.className = className;
  
  //optional string which is a base64 encrypted user/password pair of format: "user:password"
  //(the pair itself, including the ':', must be encoded as a single string.)
  this.authentication = (connectionInfo == null || connectionInfo.authentication == null) ? null : connectionInfo.authentication;
  this.owner = owner;

  /*
   * This function uses the connection info of this class to construct a URL to the server cache. Note that this URL is only
   * meaningful URLSuffix is also specified (pointing to a single parameter in the cache) or includeSessionId is false and the
   * URLSuffix is later added.
   * @param URLSuffix This is the partial URL value which would be returned from a server method returning a complex data type as application/rest
   * @param includeSessionId [optional - defaults to false] true to include the session ID in the URL,
   *           false if you will set the session ID later in the request header or url.
   */
  this.getCacheURL = function(URLSuffix, includeSessionId) {
    if (URLSuffix != null && isArray(URLSuffix))
    {
      return null;
    }
    
    if (includeSessionId == null)
    {
      includeSessionId = false;
    }

    var url = this.getURLPrefix(false) + this.cacheContext;
    var hasParams = false;
    
    if (URLSuffix != null)
    {
      URLSuffix += "";
      if (URLSuffix.indexOf("/") == 0)
      {
        URLSuffix = URLSuffix.substring(1);
      }
      if (URLSuffix.indexOf("cache/") == 0)
      {
        URLSuffix = URLSuffix.substring(6);
      }
      url += URLSuffix;
      
      hasParams = URLSuffix.indexOf("?") > -1;
    }
    
    if (includeSessionId && ($$SessionID$$ != null))
    {
      url += (hasParams ? "&" : "?");
      url += "sid=" + encodeURIComponent($$SessionID$$);
    }
    
    return url;  
  }
  
  /*
   * Returns the REST URL up to and including the "datasnap/rest/"
   * @param includeRest true to include the rest context string (whatever it is) false to stop after datasnap. Defaults to true.
   */
  this.getURLPrefix = function(includeRest) {
    if (includeRest == null)
    {
      includeRest = true;
    }
    //optionally using the "pathPrefix" property which could be contributed through connectionInfo
    var pathPrefix = '';
    if (this.connectionInfo != null && this.connectionInfo.pathPrefix != null && this.connectionInfo.pathPrefix != '')
    {
       pathPrefix = '/' + this.connectionInfo.pathPrefix;
    }
    
    var portString = isValidPort(this.port) ? ":" + this.port : "";
    
    var dsAndRestSegments = "/" + this.dsContext;
    
    if (includeRest)
    {
      dsAndRestSegments += this.restContext;  
    }
    
    var httpPrefix = this.isHttpS ? "https://" : "http://";
    
    return httpPrefix + encodeURIComponent(this.host) + portString + pathPrefix + dsAndRestSegments;
  }

  /*
   * This function returns the request URL for the specified method with the given parameters, where the first
   * item of the array is the request URL and the second item is the request content (or null if no content.)
   * null will be returned if invalid parameters are passed in.
   * @param methodName the name of the method in the class to invoke
   * @param requestType must be one of: GET, POST, PUT, DELETE
   * @param params an array of parameter values to pass into the method, or a single parameter value
   * @param requestFilters JSON Object containing pairs of key/value filters to add to the request (filters such as ss.r, for example.)
   * @return an array of length 2 where the first item is the string url and the second is the content to attach to the body (which may be null)
   */
  this.getMethodURL = function(methodName, requestType, params, requestFilters) {
    if (methodName == null)
    {
      return null;
    }
    
    requestType = validateRequestType(requestType);
    
    //optionally using the "pathPrefix" property which could be contributed through connectionInfo
    var pathPrefix = '';
    if (this.connectionInfo != null && this.connectionInfo.pathPrefix != null && this.connectionInfo.pathPrefix != '')
    {
       pathPrefix = '/' + this.connectionInfo.pathPrefix;
    }
    
    var portString = isValidPort(this.port) ? ":" + this.port : "";
    
    var dsAndRestSegments = "/" + this.dsContext + this.restContext;
    
    var url = this.getURLPrefix() + encodeURIComponent(this.className) + "/" + encodeURIComponent(methodName) + "/";
                          
    var paramToSend = null;

    if(isArray(params))
    {
      var arrLen = params.length;
      for (x = 0; x < arrLen; x++) 
      {
      	var param = params[x];
        if ((x == arrLen - 1) && (requestType != "GET") && (requestType != "DELETE"))
        {
          //if this isn't GET or DELETE then the last parameter is put as the content of the request instead of as part of the URL
          paramToSend = param;
        }
        else
        {
          url += encodeURIComponent(param) + "/";
        }
      }
    }
    else
    {
      if (requestType == "GET" || requestType == "DELETE")
      {
        url += encodeURIComponent(params) + "/";
      }
      else
      {
        paramToSend = params;
      }
    }
    
    //if request filters are specified, then add them to the URL
    if (requestFilters != null)
    {
      var doneOne = false;
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
    }
    
    return [url, paramToSend];
  };
  
    /*
   * This function executes the given method with the specified parameters and then
   * notifies the callback when a response is received.
   * @param url the url to invoke
   * @param contentParam the parameter to pass through the content of the request (or null)
   * @param requestType must be one of: GET, POST, PUT, DELETE
   * @param callback An optioanl function with three parameters, the response object, the request's status (IE: 200) and the specified 'owner'
   *                 The object will be an array, which can contain string, numeric, JSON array or JSON object types.
   * @param hasResult true if a result from the server call is expected, false to ignore any result returned.
   *                  This is an optional parameter and defaults to 'true'
   * @param accept The string value to set for the Accept header of the HTTP request, or null to set as application/json
   * @return if callback in null then this function will return the result that would have 
   *         otherwise been passed to the callback
   */
  this.executeMethodURL = function(url, contentParam, requestType, callback, hasResult, accept) {
    if (hasResult == null)
    {
      hasResult = true;
    }
    
    requestType = validateRequestType(requestType);

    var request = getXmlHttpObject();

    //async is only true if there is a callback that can be notified on completion
    var useCallback = (callback != null);
    request.open(requestType, url, useCallback);

    if (useCallback)
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

    if(contentParam != null)
    {
      contentParam = contentParam.toJSONString();
    }

    request.setRequestHeader("Accept", (accept == null ? "application/json" : accept));
    request.setRequestHeader("Content-Type", "text/plain;charset=UTF-8");
    request.setRequestHeader("If-Modified-Since", "Mon, 1 Oct 1990 05:00:00 GMT");
    if($$SessionID$$ != null)
    {
      request.setRequestHeader("Pragma", "dssession=" + $$SessionID$$);
    }
    if (this.authentication != null)
    {
      request.setRequestHeader("Authorization", "Basic " + this.authentication);
    }
    request.send(contentParam);

    //if a callback wasn't used then simply return the result.
    //otherwise, return nothing because this function will finish executing before
    //the server call returns, so the result text will be empty until it is passed to the callback
    if (hasResult && !useCallback)
    {
      return parseHTTPResponse(request);
    }
  };

  /*
   * This function executes the given method with the specified parameters and then
   * notifies the callback when a response is received.
   * @param methodName the name of the method in the class to invoke
   * @param requestType must be one of: GET, POST, PUT, DELETE
   * @param params an array of parameter values to pass into the method, or a single parameter value
   * @param callback An optioanl function with two parameters, the response object, the request's status (IE: 200) and the specified 'owner'
   *                 The object will be an array, which can contain string, numeric, JSON array or JSON object types.
   * @param hasResult true if a result from the server call is expected, false to ignore any result returned.
   *                  This is an optional parameter and defaults to 'true'
   * @param requestFilters JSON Object containing pairs of key/value filters to add to the request (filters such as ss.r, for example.)
   * @param accept The string value to set for the Accept header of the HTTP request, or null to set application/json
   * @return if callback in null then this function will return the result that would have 
   *         otherwise been passed to the callback
   */
  this.executeMethod = function(methodName, requestType, params, callback, hasResult, requestFilters, accept) {
    var url = this.getMethodURL(methodName, requestType, params, requestFilters);    
    return this.executeMethodURL(url[0], url[1], requestType, callback, hasResult, accept);
  };
  
  /*
   * Closes the session on the server with the ID held by $$SessionID$$
   */
  this.closeSession = function() {
    if ($$SessionID$$ == null) {
      return false;
    }
    var url = this.getURLPrefix() + "CloseSession/";
    var result = this.executeMethodURL(url, null, "GET", null, true, null);
    
    $$SessionID$$ = null;
    
    return result; 
  };
}

/*
 * Returns the host as given in the connectionInfo JSON Object if it exists, otherwise
 * returns the host of the current URL.
 * @param connectionInfo JSON Object containing connection information
 */
function getConnectionHost(connectionInfo)
{
  if (connectionInfo != null && connectionInfo.host != null && connectionInfo.host != '')
  {
    return connectionInfo.host;      
  }
  var host = "localhost";
  var hostAndPort = location.host;
  if (hostAndPort != "localhost")
  {
    if (hostAndPort.indexOf(":") > -1)
    {
      var splits = hostAndPort.split(":", 2);
      host = splits[0];
    }
    else
    {
      host = hostAndPort;
    }
  }
  return host;
}

/*
 * Returns the port as given in the connectionInfo JSON Object if it exists, otherwise
 * returns the port of the current URL, if specified. Otherwise, returns null.
 * @param connectionInfo JSON Object containing connection information
 */
function getConnectionPort(connectionInfo)
{
  if (connectionInfo != null && connectionInfo.port != null && connectionInfo.port != '')
  {
    return connectionInfo.port;      
  }
  var port = null;
  var hostAndPort = location.host;
  if (hostAndPort != "localhost" && hostAndPort.indexOf(":") > -1)
  {
    var splits = hostAndPort.split(":", 2);
    port = splits[1];
  }
  return port;
}

/*
 * Checks the connection info to see if there is a boolean value set for a 'https' property. If there is, this
 * function returns that value. Otherwise, it bases its result on the document's current URL. 
 */
function getIsHTTPS(connectionInfo)
{
  if (connectionInfo != null && connectionInfo.https != null && connectionInfo.https != '')
  {
    return connectionInfo.https === true;      
  }
  
  return location.protocol == 'https:'; 
}

/*
 * Returns the URL segment to use in the rest URL in place of 'datasnap/'
 * If the connectionInfo object has a "dscontext" defined then that is used (suffixed with '/' if not empty string)
 * otherwise the default value of "datasnap/" is used. 
 */
function getDSContext(connectionInfo)
{
  if (connectionInfo != null && connectionInfo.dscontext != null)
  {
    var result = connectionInfo.dscontext.trim();
    if (result == '')
    {
      return "";
    }
    return result + "/";
  }
  return "datasnap/";
}

/*
 * Returns the URL segment to use in the rest URL in place of 'rest/'
 * If the connectionInfo object has a "restcontext" defined then that is used (suffixed with '/' if not empty string)
 * otherwise the default value of "rest/" is used. 
 */
function getRestContext(connectionInfo)
{
  if (connectionInfo != null && connectionInfo.restcontext != null)
  {
    var result = connectionInfo.restcontext.trim();
    if (result == '')
    {
      return "";
    }
    return result + "/";     
  }
  return "rest/";
}

/*
 * Returns the URL segment to use in the rest URL in place of 'cache/'
 * If the connectionInfo object has a "cachecontext" defined then that is used (suffixed with '/' if not empty string)
 * otherwise the default value of "rest/" is used. 
 */
function getCacheContext(connectionInfo)
{
  var defaultValue = "cache/";
  if (connectionInfo != null && connectionInfo.cachecontext != null)
  {
    var result = connectionInfo.cachecontext.trim();
    if (result == '')
    {
      return defaultValue;
    }
    return result + "/";     
  }
  return defaultValue;
}

/*
 * Returns the specified request type (in uppercase) if it is one of the valid types, 'GET' otherwise.
 */
function validateRequestType(requestType)
{
  if (requestType == null)
  {
    requestType = "GET";
  }
  else
  {
    requestType = requestType.toUpperCase();
    if (requestType != "GET" && requestType != "POST" && requestType != "PUT" && requestType != "DELETE")
    {
      requestType = "GET";
    }
  }
  return requestType;
}

/*
 * Tries to get the session ID from the Pragma header field of the given request/response object
 * If successful, will set the value of the $$SessionID$$ variable accordingly.
 * @param request the response from the http request
 */
function parseSessionID(request)
{
  if (request != null)
  {
    //pragma may store the Session ID value to use in future calls
    var pragmaStr = request.getResponseHeader("Pragma");
    
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
function parseHTTPResponse(request)
{
  parseSessionID(request);
  
  if (request != null && request.responseText != null)
  {
    var responseText = request.responseText;
    if (responseText.length > 0 )
    {
      var JSONResultWrapper = null;
        
      try
      {
        JSONResultWrapper = responseText.parseJSON();
      }
      catch(e)
      {
        JSONResultWrapper = responseText;
      }

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
      //all other results (including other errors)
      return JSONResultWrapper;
    }
  }
  return null;
}

/*
 * Function which returns true if the given object is an array, false otherwise
 * @param obj The object to check if it is an array or not
 * @return true if obj is an array, false otherwise
 */
function isArray(obj) 
{
  return !(obj == null || (obj.constructor.toString().indexOf("Array") == -1));
}

/* 
 * Checks if the given port is valid.
 * @param the port (can be a number or a string.)
 * @return true if the port is valid, false otherwise
 */
function isValidPort(port)
{
  if (port == null)
  {
    return false;
  }
  else if (typeof port === typeof 1)
  {
    return (null !== port) && isFinite(port);
  }
  else if (typeof port == 'string')
  {
    if (port.length > 0)
    {
      var ValidChars = "0123456789";
      var Char;
      for (i = 0; i < port.length; i++) 
      { 
        Char = port.charAt(i); 
        if (ValidChars.indexOf(Char) == -1) 
        {
          return false;
        }
      }
      return true;
    }
  }
  return false;
}

/*
 * Returns the appropriate request object based on the current browser.
 * @return the appropriate request object or null if none could be created
 */
function getXmlHttpObject()
{
  if (typeof(XMLHttpRequest)  === "undefined")
  {
    XMLHttpRequest = function() {
      try 
      { 
        return new ActiveXObject("Msxml2.XMLHTTP.6.0");
      }
      catch(e) {}
      try
      {
        return new ActiveXObject("Msxml2.XMLHTTP.3.0");
      }
      catch(e) {}
      try
      {
        return new ActiveXObject("Msxml2.XMLHTTP");
      }
      catch(e) {}
      try
      {
        return new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch(e)
      {
        throw new Error("This browser does not support XMLHttpRequest.");
      }
    };
  }
  return new XMLHttpRequest();
}

if (!String.prototype.trim)
{
  String.prototype.trim = function() { return this.replace(/^\s+|\s+$/, ''); };
}
