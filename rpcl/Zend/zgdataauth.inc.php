<?php

/**
 * Zend/zgdataauth.inc.php
 * 
 * Defines Zend Framework Google Authentication component.
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
use_unit("Zend/framework/library/Zend/Gdata/ClientLogin.php");
use_unit("Zend/framework/library/Zend/Gdata/AuthSub.php");

/**
 * Component to access services protected by a user’s Google or Google Apps (hosted) account.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.gdata.authsub.html     Zend Framework Documentation
 * @link        http://code.google.com/apis/accounts/docs/AuthForWebApps.html   Google Documentation
 */
class ZGDataAuth extends Component
{

   // Tokens

   /**
    * Main token.
    *
    * @var      string
    */
   private $_token = null;

   /**
    * Session token.
    *
    * Generated from {@link $_token}.
    *
    * @var      string
    */
   private $_sessiontoken = null;

   /**
    * Login token.
    *
    * @var      string
    */
   private $_logintoken = null;

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Google Mail

   /**
    * Email address.
    *
    * @var      string
    */
   protected $_googleemail = '';

   /**
    * Getter method for {@link $_googleemail}.
    *
    * @return   string  {@link $_googleemail}
    */
   function getGoogleEmail()    {return $this->_googleemail;}

   /**
    * Setter method for {@link $_googleemail}.
    *
    * @param    string  $value
    */
   function setGoogleEmail($value)    {$this->_googleemail = $value;}

   /**
    * Getter for {@link $_googleemail}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultGoogleEmail()    {return '';}

   // Google Password

   /**
    * Password.
    *
    * @var      string
    */
   protected $_googlepassword = '';

   /**
    * Getter method for {@link $_googlepassword}.
    *
    * @return   string  {@link $_googlepassword}
    */
   function getGooglePassword()    {return $this->_googlepassword;}

   /**
    * Setter method for {@link $_googlepassword}.
    *
    * @param    string  $value
    */
   function setGooglePassword($value)    {$this->_googlepassword = $value;}

   /**
    * Getter for {@link $_googlepassword}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultGooglePassword()    {return '';}

   // Use ClientLogin

   /**
    * Whether or not to use ClientLogin authentication instead of AuthSub.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @link     http://framework.zend.com/manual/en/zend.gdata.clientlogin.html Zend Framework Documentation
    * @link     http://code.google.com/apis/accounts/AuthForInstalledApps.html  Google Documentation
    *
    * @var      string
    */
   protected $_useclientlogin = 'false';

   /**
    * Getter method for {@link $_useclientlogin}.
    *
    * @return   string  {@link $_useclientlogin}
    */
   function getUseClientLogin()    {return $this->_useclientlogin;}

   /**
    * Setter method for {@link $_useclientlogin}.
    *
    * @param    string  $value
    */
   function setUseClientLogin($value)    {$this->_useclientlogin = $value;}

   /**
    * Getter for {@link $_useclientlogin}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultUseClientLogin()    {return 'false';}

   // Redirection URL

   /**
    * Redirection URL.
    *
    * URL where user will be taken to after a successful authentication.
    *
    * @var      string
    */
   protected $_urlredirect = '';

   /**
    * Getter method for {@link $_urlredirect}.
    *
    * @return   string  {@link $_urlredirect}
    */
   function getURLRedirect()    {return $this->_urlredirect;}

   /**
    * Setter method for {@link $_urlredirect}.
    *
    * @param    string  $value
    */
   function setURLRedirect($value)    {$this->_urlredirect = $value;}

   /**
    * Getter for {@link $_urlredirect}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultURLRedirect()    {return '';}

   // Timeout

   /**
    * Time to wait for Google Services before giving up (in seconds).
    *
    * @var      integer
    */
   protected $_timeout = 240;

   /**
    * Getter method for {@link $_timeout}.
    *
    * @return   integer {@link $_timeout}
    */
   function getTimeout()    {return $this->_timeout;}

   /**
    * Setter method for {@link $_timeout}.
    *
    * @param    integer $value
    */
   function setTimeout($value)    {$this->_timeout = $value;}

   /**
    * Getter for {@link $_timeout}’s default value.
    *
    * @return   integer 4 minutes (240)
    */
   function defaultTimeout()    {return 240;}

   // CAPTCHA Token

   /**
    * CAPTCHA token.
    *
    * Might be used when {@link $_useclientlogin working with ClientLogin}.
    *
    * @var      string
    */
   protected $_captchatoken = null;

   /**
    * Getter method for {@link $_captchatoken}.
    *
    * @return   string  {@link $_captchatoken}
    */
   function readCaptchaToken()    {return $this->_captchatoken;}

   /**
    * Setter method for {@link $_captchatoken}.
    *
    * @param    string  $value
    */
   function writeCaptchaToken($value)    {$this->_captchatoken = $value;}

   /**
    * Getter for {@link $_captchatoken}’s default value.
    *
    * @return   string  Null
    */
   function defaultCaptchaToken()    {return null;}

   // CAPTCHA String

   /**
    * CAPTCHA string.
    *
    * Might be used when {@link $_useclientlogin working with ClientLogin}.
    *
    * @var      string
    */
   protected $_captchastring = null;

   /**
    * Getter method for {@link $_captchastring}.
    *
    * @return   string  {@link $_captchastring}
    */
   function readCaptchaString()    {return $this->_captchastring;}

   /**
    * Setter method for {@link $_captchastring}.
    *
    * @param    string  $value
    */
   function writeCaptchaString($value)    {$this->_captchastring = $value;}

   /**
    * Getter for {@link $_captchastring}’s default value.
    *
    * @return   string  Null
    */
   function defaultCaptchaString()    {return null;}

   /**
    * {@inheritdoc}
    */
   function serialize()
   {
      parent::serialize();

      $owner = $this->readOwner();
      if($owner != null)
      {
         $prefix = $owner->readNamePath() . "." . $this->_name . ".GDataAuth.";

         // Save the differents tokens
         $_SESSION[$prefix . 'token'] = $this->_token;
         $_SESSION[$prefix . 'sessionToken'] = $this->_sessiontoken;
         $_SESSION[$prefix . 'loginToken'] = $this->_logintoken;
      }
   }

   /**
    * {@inheritdoc}
    */
   function unserialize()
   {
      parent::unserialize();

      $owner = $this->readOwner();

      if($owner != null)
      {
         $prefix = $owner->readNamePath() . "." . $this->_name . ".GDataAuth.";

         if(isset($_SESSION[$prefix . 'sessionToken']))
         {
            $this->_sessiontoken = $_SESSION[$prefix . 'sessionToken'];
         }

         if(isset($_SESSION[$prefix . 'loginToken']))
         {
            $this->_logintoken = $_SESSION[$prefix . 'loginToken'];
         }

         if(isset($_SESSION[$prefix . 'token']))
         {
            $this->_token = $_SESSION[$prefix . 'token'];
         }

         // If retrieve token, save the token to generate session token.
         if(isset($_GET['token']))
         {
            $token = $_GET['token'];

            if($token != '')
            {
               $this->_token = $token;
            }
         }
      }
   }

   /**
    * Authenticates user against Google Services.
    *
    * Parameters array must include the following key-value pairs:
    * <ul>
    *   <li><b>service</b>: Google service (string).</li>
    *   <li><b>url</b>: Service authentication URL (string).</li>
    *   <li><b>appname</b>: Name of your application (string).</li>
    * </ul>
    *
    * If {@link $_token main} and {@link $_sessiontoken session} tokens are not set, authentication
    * URL will be returned.
    *
    * If tokens are set but authentication fails, a boolean value will be returned, false.
    *
    * If tokens are set and authentication is successful, an instance of {@link Zend_Gdata_HttpClient}
    * will be returned.
    *
    * @param    array   $params Parameters.
    * @return   boolean|string|Zend_Gdata_HttpClient
    */
   function createAuthentication($params)
   {
      $service = '';
      $urlservice = '';
      $authSub = '';
      $privateKey = '';
      $appname = '';
      $timeout = $this->_timeout;
      if(isset($params['service']))
      {
         $service = $params['service'];
      }

      if(isset($params['url']))
      {
         $urlservice = $params['url'];
      }

      if(isset($params['authSub']))
      {
         $authSub = $params['authSub'];
      }

      if(isset($params['privateKey']))
      {
         $privateKey = $params['privateKey'];
      }

      if(isset($params['appname']))
      {
         $appname = $params['appname'];
      }

      if($service != '' && $urlservice != '')
      {
         //Used with AuthSub authentication
         if($this->_useclientlogin == 0)
         {
            if($this->_token == null && $this->_sessiontoken == null)
            {

               $url = $this->_urlredirect;
               if($authSub != '')
                  $googleURI = Zend_Gdata_AuthSub::getAuthSubTokenUri($url, $urlservice, 0, 1, $authSub);
               else
                  $googleURI = Zend_Gdata_AuthSub::getAuthSubTokenUri($url, $urlservice, 0, 1);
               return $googleURI;

            }
            else
            {
               if($this->_token != null && $this->_sessiontoken == null)
               {
                  if($privateKey != '')
                  {

                     $client = new Zend_Gdata_HttpClient();

                     $client->setAuthSubPrivateKeyFile($privateKey, null, true);

                     $this->_sessiontoken = Zend_Gdata_AuthSub::getAuthSubSessionToken($this->_token, $client);

                     $client->setAuthSubToken($this->_sessiontoken);
                     $client->setConfig(array('timeout'=>$timeout));
                     return $client;

                  }
                  else
                  {

                     $this->_sessiontoken = Zend_Gdata_AuthSub::getAuthSubSessionToken($this->_token);
                     $client = Zend_Gdata_AuthSub::getHttpClient($this->_sessiontoken);
                     $client->setConfig(array('timeout'=>$timeout));
                     return $client;

                  }
               }
               elseif($this->_sessiontoken != null)
               {

                  $client = Zend_Gdata_AuthSub::getHttpClient($this->_sessiontoken);
                  $client->setConfig(array('timeout'=>$timeout));
                  return $client;

               }
               else
               {
                  return false;
               }
            }
         }
         //Used with ClientLogin authentication
         else
         {
            if($this->_logintoken != '')
            {
               $client = new Zend_Gdata_HttpClient();
               $client->setClientLoginToken($this->_logintoken);
               $client->setConfig(array('timeout'=>$timeout));
               return $client;
            }
            else
            {
               if($this->_googleemail != '' && $this->_googlepassword != '')
               {

                  $login = Zend_Gdata_ClientLogin::getHttpClient($this->_googleemail, $this->_googlepassword, $service, null, $appname, $this->_captchatoken, $this->_captchastring);
                  $login->setConfig(array('timeout'=>$timeout));
                  $this->_logintoken = $login->getClientLoginToken();
                  return $login;

               }
               else
               {
                  return false;
               }
            }
         }
      }
      else
      {
         return false;
      }
   }

   /**
    * Destroys the session.
    *
    * Should be only when not {@link $_useclientlogin working with ClientLogin}.
    *
    * This will return false if {@link $_owner component owner} is not set.
    *
    * @return   boolean
    */
   function revokeAuthentication()
   {
      $owner = $this->readOwner();
      if($owner != null)
      {
         $prefix = $owner->readNamePath() . "." . $this->_name . ".GDataAuth.";

         if(isset($_SESSION[$prefix . 'sessionToken']))
         {
            $exit = Zend_Gdata_AuthSub::AuthSubRevokeToken($_SESSION[$prefix . 'sessionToken']);
         }
         else
         {
            $exit = true;
         }
         if($exit)
         {
            unset($_SESSION[$prefix . 'token']);
            unset($_SESSION[$prefix . 'sessionToken']);
            unset($_SESSION[$prefix . 'loginToken']);
         }
         return $exit;
      }
      else
      {
         return false;
      }
   }
}

?>