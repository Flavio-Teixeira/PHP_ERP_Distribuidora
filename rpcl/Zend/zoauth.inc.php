<?php

/**
 * Zend/zoauth.inc.php
 * 
 * Defines Zend Framework OAuth component.
 *
 * This file is part of the RPCL project.
 *
 * Copyright (c) 2004-2011 Embarcadero Technologies, Inc.
 *
 * Check out AUTHORS file for a complete list of project contributors.
 *
 * LICENSE:
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307
 * USA
 * 
 * @package     ZendFramework
 * @copyright   2004-2011 Embarcadero Technologies, Inc.
 * @license     http://www.gnu.org/licenses/lgpl-2.1.txt LGPL
 * 
 */

/**
 * Include RPCL common file and necessary units.
 */
require_once("rpcl/rpcl.inc.php");
use_unit("classes.inc.php");
use_unit("Zend/framework/library/Zend/Oauth/Consumer.php");
use_unit("Zend/framework/library/Zend/Crypt/Rsa.php");
use_unit("Zend/framework/library/Zend/Crypt/Rsa/Key/Private.php");
use_unit("Zend/framework/library/Zend/Crypt/Rsa/Key/Public.php");

// Signature Methods

/**
 * HMAC-SHA1.
 * 
 * @const       smHMAC_SHA1
 */
define('smHMAC_SHA1', 'smHMAC_SHA1');

/**
 * HMAC-SHA256.
 * 
 * @const       smHMAC_SHA256
 */
define('smHMAC_SHA256', 'smHMAC_SHA256');

/**
 * RSA-SHA1.
 * 
 * @const       smRSA_SHA1
 */
define('smRSA_SHA1', 'smRSA_SHA1');

/**
 * PLAINTEXT.
 * 
 * @const       smPLAINTEXT
 */
define('smPLAINTEXT', 'smPLAINTEXT');

// Request Methods

/**
 * POST.
 * 
 * @const       rmPOST
 */
define('rmPOST', 'rmPOST');

/**
 * GET.
 * 
 * @const       rmGET
 */
define('rmGET', 'rmGET');

// Request Scheme

/**
 * Header request scheme.
 * 
 * @const       rsSchemeHeader
 */
define('rsSchemeHeader', 'rsSchemeHeader');

/**
 * PostBody request scheme.
 * 
 * @const       rsSchemePostBody
 */
define('rsSchemePostBody', 'rsSchemePostBody');

/**
 * QueryString request scheme.
 * 
 * @const       rsSchemeQueryString
 */
define('rsSchemeQueryString', 'rsSchemeQueryString');

/**
 * Component to implement OAuth services.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.oauth.html Zend Framework Documentation
 */
class ZOAuth extends Component
{

   /**
    * Zend Framework OAuth Consumer instance.
    *
    * @var      Zend_Oauth_Consumer
    */
   private $_consumer = null;

   /**
    * Zend Framework OAuth settings.
    *
    * @var      array
    */
   private $_config = null;

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Callback URL

   /**
    * Callback URL.
    *
    * URI third-party web service should request from your server when sending information.
    *
    * @var      string
    */
   protected $_callbackurl = '';

   /**
    * Getter method for {@link $_callbackurl}.
    *
    * @return   string  {@link $_callbackurl}
    */
   function getCallbackUrl()    {return $this->_callbackurl;}

   /**
    * Setter method for {@link $_callbackurl}.
    *
    * @param    string  $value
    */
   function setCallbackUrl($value)    {$this->_callbackurl = $value;}

   /**
    * Getter for {@link $_callbackurl}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultCallbackUrl()    {return '';}

   // Site URL

   /**
    * Site URL.
    *
    * Base URI of third-party web service OAuth API endpoints. When this property is set, the
    * following properties will get new default values based on this base URL:
    * <ul>
    *   <li><b>{@link $_requesttokenurl}</b>: {@link $_siteurl}.'/request_token'.</li>
    *   <li><b>{@link $_accesstokenurl}</b>: {@link $_siteurl}.'/access_token'.</li>
    *   <li><b>{@link $_authorizeurl}</b>: {@link $_siteurl}.'/authorize'.</li>
    * </ul>
    *
    * If the third-party web service follows this convention for endpoints URL naming, you will not
    * need to manually set those three properties.
    *
    * @var      string
    */
   protected $_siteurl = '';

   /**
    * Getter method for {@link $_siteurl}.
    *
    * @return   string  {@link $_siteurl}
    */
   function getSiteUrl()    {return $this->_siteurl;}

   /**
    * Setter method for {@link $_siteurl}.
    *
    * @param    string  $value
    */
   function setSiteUrl($value)    {$this->_siteurl = $value;}

   /**
    * Getter for {@link $_siteurl}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSiteUrl()    {return '';}

   // Consumer Key

   /**
    * Consumer key.
    *
    * This key is retrieved from the third-party web service when your application is registered for
    * OAuth access.
    *
    * @var      string
    */
   protected $_consumerkey = '';

   /**
    * Getter method for {@link $_consumerkey}.
    *
    * @return   string  {@link $_consumerkey}
    */
   function getConsumerKey()    {return $this->_consumerkey;}

   /**
    * Setter method for {@link $_consumerkey}.
    *
    * @param    string  $value
    */
   function setConsumerKey($value)    {$this->_consumerkey = $value;}

   /**
    * Getter for {@link $_consumerkey}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultConsumerKey()    {return '';}

   // Consumer Secret

   /**
    * Consumer secret.
    *
    * This secret is retrieved from the third-party web service when your application is registered
    * for OAuth access.
    *
    * @var      string
    */
   protected $_consumersecret = '';

   /**
    * Getter method for {@link $_consumersecret}.
    *
    * @return   string  {@link $_consumersecret}
    */
   function getConsumerSecret()    {return $this->_consumersecret;}

   /**
    * Setter method for {@link $_consumersecret}.
    *
    * @param    string  $value
    */
   function setConsumerSecret($value)    {$this->_consumersecret = $value;}

   /**
    * Getter for {@link $_consumersecret}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultConsumerSecret()    {return '';}

   // Signature Method

   /**
    * Signature method for secure connections.
    *
    * Possible values are: {@link smHMAC_SHA1}, {@link smHMAC_SHA256}, {@link smPLAINTEXT}, or
    * {@link smRSA_SHA1}.
    *
    * @var      string
    */
   protected $_signaturemethod = smHMAC_SHA1;

   /**
    * Getter method for {@link $_signaturemethod}.
    *
    * @return   string  {@link $_signaturemethod}
    */
   function getSignatureMethod()    {return $this->_signaturemethod;}

   /**
    * Setter method for {@link $_signaturemethod}.
    *
    * @param    string  $value
    */
   function setSignatureMethod($value)    {$this->_signaturemethod = $value;}

   /**
    * Getter for {@link $_signaturemethod}’s default value.
    *
    * @return   string  {@link smHMAC_SHA1}
    */
   function defaultSignatureMethod()    {return smHMAC_SHA1;}

   // RSA Private Key

   /**
    * RSA private key file path.
    *
    * Path to the .pem file with the RSA private key.
    *
    * @var      string
    */
   protected $_rsaprivatekey = '';

   /**
    * Getter method for {@link $_rsaprivatekey}.
    *
    * @return   string  {@link $_rsaprivatekey}
    */
   function getRSAPrivateKey()    {return $this->_rsaprivatekey;}

   /**
    * Setter method for {@link $_rsaprivatekey}.
    *
    * @param    string  $value
    */
   function setRSAPrivateKey($value)    {$this->_rsaprivatekey = $value;}

   /**
    * Getter for {@link $_rsaprivatekey}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultRSAPrivateKey()    {return '';}

   // RSA Public Key

   /**
    * RSA public key file path.
    *
    * Path to the .pem file with the RSA public key.
    *
    * @var      string
    */
   protected $_rsapublickey = '';

   /**
    * Getter method for {@link $_rsapublickey}.
    *
    * @return   string  {@link $_rsapublickey}
    */
   function getRSAPublicKey()    {return $this->_rsapublickey;}

   /**
    * Setter method for {@link $_rsapublickey}.
    *
    * @param    string  $value
    */
   function setRSAPublicKey($value)    {$this->_rsapublickey = $value;}

   /**
    * Getter for {@link $_rsapublickey}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultRSAPublicKey()    {return '';}

   // Other Parameters

   /**
    * Additional parameters for {@link Zend_Oauth_Consumer::__construct()}.
    *
    * You can use this array of key-value pairs to set any parameter you want to pass to {@link Zend_Oauth_Consumer::__construct()}
    * that you can not set through a property of {@link ZOAuth}.
    *
    * @var      array
    */
   protected $_otherparameters = array();

   /**
    * Getter method for {@link $_otherparameters}.
    *
    * @return   array   {@link $_otherparameters}
    */
   function getOtherParameters()    {return $this->_otherparameters;}

   /**
    * Setter method for {@link $_otherparameters}.
    *
    * @param    array   $value
    */
   function setOtherParameters($value)    {$this->_otherparameters = $value;}

   /**
    * Getter for {@link $_otherparameters}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultOtherParameters()    {return array();}

   // Request Scheme

   /**
    * Request scheme.
    *
    * Possible values are: {@link rsSchemeHeader}, {@link rsSchemePostBody}, or
    * {@link rsSchemeQueryString}.
    *
    * @var      string
    */
   protected $_requestscheme = rsSchemeHeader;

   /**
    * Getter method for {@link $_requestscheme}.
    *
    * @return   string  {@link $_requestscheme}
    */
   function getRequestScheme()    {return $this->_requestscheme;}

   /**
    * Setter method for {@link $_requestscheme}.
    *
    * @param    string  $value
    */
   function setRequestScheme($value)    {$this->_requestscheme = $value;}

   /**
    * Getter for {@link $_requestscheme}’s default value.
    *
    * @return   string  {@link rsSchemeHeader}
    */
   function defaultRequestScheme()    {return rsSchemeHeader;}

   // Request Method

   /**
    * Request Method.
    *
    * Possible values are {@link rmPOST} and {@link rmGET}.
    *
    * @var      string
    */
   protected $_requestmethod = rmPOST;

   /**
    * Getter method for {@link $_requestmethod}.
    *
    * @return   string  {@link $_requestmethod}
    */
   function getRequestMethod()    {return $this->_requestmethod;}

   /**
    * Setter method for {@link $_requestmethod}.
    *
    * @param    string  $value
    */
   function setRequestMethod($value)    {$this->_requestmethod = $value;}

   /**
    * Getter for {@link $_requestmethod}’s default value.
    *
    * @return   string  {@link rmPOST}
    */
   function defaultRequestMethod()    {return rmPOST;}

   // OAuth Version

   /**
    * OAuth protocol version.
    *
    * @link http://en.wikipedia.org/wiki/OAuth Wikipedia
    *
    * @var      string
    */
   protected $_oauthversion = '1.0';

   /**
    * Getter method for {@link $_oauthversion}.
    *
    * @return   string  {@link $_oauthversion}
    */
   function getOAuthVersion()    {return $this->_oauthversion;}

   /**
    * Setter method for {@link $_oauthversion}.
    *
    * @param    string  $value
    */
   function setOAuthVersion($value)    {$this->_oauthversion = $value;}

   /**
    * Getter for {@link $_oauthversion}’s default value.
    *
    * @return   string  '1.0'
    */
   function defaultOAuthVersion()    {return '1.0';}

   // Request Token URL

   /**
    * Request token URL.
    *
    * You do not need to set this property as long as you set {@link $_siteurl} and request token
    * URL is {@link $_siteurl}.'/request_token'.
    *
    * @var      string
    */
   protected $_requesttokenurl = '';

   /**
    * Getter method for {@link $_requesttokenurl}.
    *
    * @return   string  {@link $_requesttokenurl}
    */
   function getRequestTokenUrl()    {return $this->_requesttokenurl;}

   /**
    * Setter method for {@link $_requesttokenurl}.
    *
    * @param    string  $value
    */
   function setRequestTokenUrl($value)    {$this->_requesttokenurl = $value;}

   /**
    * Getter for {@link $_requesttokenurl}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultRequestTokenUrl()    {return '';}

   // Access Token URL

   /**
    * Access token URL.
    *
    * You do not need to set this property as long as you set {@link $_siteurl} and access token
    * URL is {@link $_siteurl}.'/access_token'.
    *
    * @var      string
    */
   protected $_accesstokenurl = '';

   /**
    * Getter method for {@link $_accesstokenurl}.
    *
    * @return   string  {@link $_accesstokenurl}
    */
   function getAccessTokenUrl()    {return $this->_accesstokenurl;}

   /**
    * Setter method for {@link $_accesstokenurl}.
    *
    * @param    string  $value
    */
   function setAccessTokenUrl($value)    {$this->_accesstokenurl = $value;}

   /**
    * Getter for {@link $_accesstokenurl}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultAccessTokenUrl()    {return '';}

   // Authorize URL

   /**
    * Authorize URL.
    *
    * You do not need to set this property as long as you set {@link $_siteurl} and request token
    * URL is {@link $_siteurl}.'/authorize'.
    *
    * @var      string
    */
   protected $_authorizeurl = '';

   /**
    * Getter method for {@link $_authorizeurl}.
    *
    * @return   string  {@link $_authorizeurl}
    */
   function getAuthorizeUrl()    {return $this->_authorizeurl;}

   /**
    * Setter method for {@link $_authorizeurl}.
    *
    * @param    string  $value
    */
   function setAuthorizeUrl($value)    {$this->_authorizeurl = $value;}

   /**
    * Getter for {@link $_authorizeurl}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultAuthorizeUrl()    {return '';}

   // Realm

   /**
    * OAuth Realm.
    *
    * @var      string
    */
   protected $_realm = '';

   /**
    * Getter method for {@link $_realm}.
    *
    * @return   string  {@link $_realm}
    */
   function getRealm()    {return $this->_realm;}

   /**
    * Setter method for {@link $_realm}.
    *
    * @param    string  $value
    */
   function setRealm($value)    {$this->_realm = $value;}

   /**
    * Getter for {@link $_realm}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultRealm()    {return '';}

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      $this->_config = array();

      $this->_config['callbackUrl'] = $this->_callbackurl;
      if($this->_siteurl != '')
         $this->_config['siteUrl'] = $this->_siteurl;

      if($this->_accesstokenurl != '')
      {
         $this->_config['accessTokenUrl'] = $this->_accesstokenurl;
      }

      if($this->_authorizeurl != '')
      {
         $this->_config['authorizeUrl'] = $this->_authorizeurl;
      }

      if($this->_requesttokenurl != '')
      {
         $this->_config['requestTokenUrl'] = $this->_requesttokenurl;
      }

      $this->_config['consumerKey'] = $this->_consumerkey;
      $this->_config['consumerSecret'] = $this->_consumersecret;

      if($this->_rsaprivatekey != '')
      {

         $fileprivate = file_get_contents($this->_rsaprivatekey);
         $keyprivate = new Zend_Crypt_Rsa_Key_Private($fileprivate);
         $this->_config['rsaPrivateKey'] = $keyprivate;
      }

      if($this->_rsapublickey != '')
      {
         $filepublic = file_get_contents($this->_rsapublickey);
         $keypublic = new Zend_Crypt_Rsa_Key_Public($filepublic);
         $this->_config['rsaPublicKey'] = $keypublic;
      }

      if(is_array($this->_otherparameters))
         $this->_config = array_merge($this->_config, $this->_otherparameters);

      switch($this->_signaturemethod)
      {
         case smHMAC_SHA1:
            $this->_config['signatureMethod'] = 'HMAC-SHA1';
            break;
         case smHMAC_SHA256:
            $this->_config['signatureMethod'] = 'HMAC-SHA256';
            break;
         case smRSA_SHA1:
            $this->_config['signatureMethod'] = 'RSA-SHA1';
            break;
         case smPLAINTEXT:
            $this->_config['signatureMethod'] = 'PLAINTEXT';
            break;
      }

      switch($this->_requestscheme)
      {
         case rsSchemeHeader:
            $this->_config['requestScheme'] = Zend_Oauth::REQUEST_SCHEME_HEADER;
            break;
         case rsSchemePostBody:
            $this->_config['requestScheme'] = Zend_Oauth::REQUEST_SCHEME_POSTBODY;
            break;
         case rsSchemeQueryString:
            $this->_config['requestScheme'] = Zend_Oauth::REQUEST_SCHEME_QUERYSTRING;
            break;
      }

      if($this->_realm != '')
      {
         $this->_config['realm'] = $this->_realm;
      }

      $this->_consumer = new Zend_Oauth_Consumer($this->_config);

      if(isset($_GET['oauth_token']))
      {
         $this->_accessToken();
      }
      else
      {
         $this->_requestToken();
      }

   }

   /**
    * Gets an unauthorized request token from the third-party web service, and redirects user to the
    * OAuth API of that third-party service, so user can authorize the request token.
    *
    * This method is called from {@link loaded()}, and you will rarely call it yourself manually.
    *
    * @internal 
    */
   function _requestToken()
   {
      $token = $this->_consumer->getRequestToken();
      $this->_consumer->redirect();
   }

   /**
    * Gets an access token from the third-party web service.
    *
    * This method is called from {@link loaded()}, and you will rarely call it yourself manually.
    *
    * @internal 
    */
   function _accessToken()
   {
      $owner = $this->readOwner();
      if($owner != null)
      {
         $prefix = $owner->readNamePath() . "." . $this->_name . ".GZOAuth.";

         if(isset($_GET['oauth_token']) && isset($_SESSION[$prefix . 'REQUEST_TOKEN']))
         {
            $token = $this->_consumer->getAccessToken($_GET, unserialize($_SESSION[$prefix . 'REQUEST_TOKEN']));

            $_SESSION[$prefix . 'ACCESS_TOKEN'] = serialize($token);

            $_SESSION[$prefix . 'REQUEST_TOKEN'] = null;
         }
      }
   }

   /**
    * Performs an action against the third-party web service OAuth API.
    *
    * This method will only work in an access token has been already retrieved. Else, it will return
    * false.
    *
    * @param    string  $uri            URI to call.
    * @param    array   $parameters     Array with key-value pairs to be used as parameters in the
    *                                   call to the {@link $uri}.
    * @return   boolean|Zend_Http_Response
    */
   function executeAction($uri, $parameters)
   {
      $owner = $this->readOwner();
      if($owner != null)
      {
         $prefix = $owner->readNamePath() . "." . $this->_name . ".GZOAuth.";

         if(isset($_SESSION[$prefix . 'ACCESS_TOKEN']))
         {
            $token = unserialize($_SESSION[$prefix . 'ACCESS_TOKEN']);

            $client = $token->getHttpClient($this->_config);
            $client->setUri($uri);
            if($this->_requestmethod == rmPOST)
            {
               $client->setMethod(Zend_Http_Client::POST);

               foreach($parameters as $parameter=>$value)
               {
                  $client->setParameterPost($parameter, $value);
               }
            }
            else
            {
               $client->setMethod(Zend_Http_Client::GET);
               foreach($parameters as $parameter=>$value)
               {
                  $client->setParameterGet($parameter, $value);
               }
            }
            $response = $client->request();
            return $response;
         }
         else
         {
            return false;
         }
      }
      else
      {
         return false;
      }
   }
}

?>