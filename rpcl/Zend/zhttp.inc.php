<?php

/**
 * Zend/zhttp.inc.php
 * 
 * Defines Zend Framework HTTP component.
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
use_unit("Zend/framework/library/Zend/Http/Client.php");
use_unit("Zend/framework/library/Zend/Http/Cookie.php");

// SSL Transport Layers

/**
 * SSL.
 * 
 * @const       stSSL
 */
define('stSSL', 'stSSL');

/**
 * SSL 2.
 * 
 * @const       stSSLv2
 */
define('stSSLv2', 'stSSLv2');

/**
 * SSL 3.
 * 
 * @const       stSSLv3
 */
define('stSSLv3', 'stSSLv3');

/**
 * TLS.
 * 
 * @const       stTLS
 */
define('stTLS', 'stTLS');

// Client Adapters

/**
 * Socket.
 * 
 * @const       caSocket
 */
define('caSocket', 'caSocket');

/**
 * Proxy.
 * 
 * @const       caProxy
 */
define('caProxy', 'caProxy');

/**
 * Curl.
 * 
 * @const       caCurl
 */
define('caCurl', 'caCurl');

/**
 * Base class for the different options classes for {@link ZHttp} objects.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.http.html Zend Framework Documentation
 */
class ZHttpOptions extends Persistent
{

    // Owner

   /**
    * Owner.
    *
    * @var      ZHttp
    */
   protected $ZHttp = null;

   /**
    * {@inheritdoc}
    *
    * @return   ZHttp
    */
   function readOwner()
   {
      return ($this->ZHttp);
   }

   // Constructor

   /**
    * Class constructor.
    *
    * @param    ZHttp   $aowner {@link ZHttp Owner}.
    */
   function __construct($aowner)
   {
      parent::__construct();

      $this->ZHttp = $aowner;
   }
}

/**
 * Socket options for {@link ZHttp} objects.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.http.client.adapters.html#zend.http.client.adapters.socket Zend Framework Documentation
 */
class ZHttpAdapterSocketOptions extends ZHttpOptions
{

   // Persistent

   /**
    * Whether or not to use persistent TCP connections.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_persistent = 'false';

   /**
    * Getter method for {@link $_persistent}.
    *
    * @return   string  {@link $_persistent}
    */
   function getPersistent()    {return $this->_persistent;}

   /**
    * Setter method for {@link $_persistent}.
    *
    * @param    string  $value
    */
   function setPersistent($value)    {$this->_persistent = $value;}

   /**
    * Getter for {@link $_persistent}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultPersistent()    {return 'false';}

   // SSL Transport

   /**
    * SSL transport layer.
    *
    * Possible values are: {@link stSSL}, {@link stSSLv2}, {@link stSSLv3}, or {@link stTLS}.
    *
    * @var      string
    */
   protected $_ssltransport = stSSL;

   /**
    * Getter method for {@link $_ssltransport}.
    *
    * @return   string  {@link $_ssltransport}
    */
   function getSSLTransport()    {return $this->_ssltransport;}

   /**
    * Setter method for {@link $_ssltransport}.
    *
    * @param    string  $value
    */
   function setSSLTransport($value)    {$this->_ssltransport = $value;}

   /**
    * Getter for {@link $_ssltransport}’s default value.
    *
    * @return   string  {@link stSSL}
    */
   function defaultSSLTransport()    {return stSSL;}

   // SSL Certificate

   /**
    * Path to a PEM-encoded SSL certificate.
    *
    * @var      string
    */
   protected $_sslcert = '';

   /**
    * Getter method for {@link $_sslcert}.
    *
    * @return   string  {@link $_sslcert}
    */
   function getSSLCert()    {return $this->_sslcert;}

   /**
    * Setter method for {@link $_sslcert}.
    *
    * @param    string  $value
    */
   function setSSLCert($value)    {$this->_sslcert = $value;}

   /**
    * Getter for {@link $_sslcert}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSSLCert()    {return '';}

   // SSL Passphrase

   /**
    * Passphrase for the SSL certificate file.
    *
    * @var      string
    */
   protected $_sslpassphrase = '';

   /**
    * Getter method for {@link $_sslpassphrase}.
    *
    * @return   string  {@link $_sslpassphrase}
    */
   function getSSLPassphrase()    {return $this->_sslpassphrase;}

   /**
    * Setter method for {@link $_sslpassphrase}.
    *
    * @param    string  $value
    */
   function setSSLPassphrase($value)    {$this->_sslpassphrase = $value;}

   /**
    * Getter for {@link $_sslpassphrase}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSSLPassphrase()    {return '';}

   // SSL Usage Context

   /**
    * Whether or not connections under a proxy can use SSL even if the proxy itself does not use it.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_sslusecontext = 'false';

   /**
    * Getter method for {@link $_sslusecontext}.
    *
    * @return   string  {@link $_sslusecontext}
    */
   function getSSLUseContext()    {return $this->_sslusecontext;}

   /**
    * Setter method for {@link $_sslusecontext}.
    *
    * @param    string  $value
    */
   function setSSLUseContext($value)    {$this->_sslusecontext = $value;}

   /**
    * Getter for {@link $_sslusecontext}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultSSLUseContext()    {return 'false';}

   /**
    * Returns an array with settings for this adapter.
    *
    * @return   array
    */
   function returnConfig()
   {
      $data = array();

      if($this->_persistent == 1 || $this->_persistent == 'true')
      {
         $data['persistent'] = TRUE;
      }
      else
      {
         $data['persistent'] = FALSE;
      }

      switch($this->_ssltransport)
      {
         case stSSL:
            $data['ssltransport'] = 'ssl';
            break;
         case stSSLv2:
            $data['ssltransport'] = 'sslv2';
            break;
         case stSSLv3:
            $data['ssltransport'] = 'sslv3';
            break;
         case stTLS:
            $data['ssltransport'] = 'tls';
            break;
      }

      if($this->_sslcert != '')
      {
         $data['sslcert'] = $this->_sslcert;
      }

      if($this->_sslpassphrase != '')
      {
         $data['sslpassphrase'] = $this->_sslpassphrase;
      }

      if($this->_sslusecontext != '')
      {
         $data['sslusecontext'] = $this->_sslusecontext;
      }

      $data['adapter'] = 'Zend_Http_Client_Adapter_Socket';

      return $data;
   }
}

/**
 * Proxy options for {@link ZHttp} objects.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.http.client.adapters.html#zend.http.client.adapters.proxy Zend Framework Documentation
 */
class ZHttpAdapterProxyOptions extends ZHttpOptions
{

   // Host

   /**
    * Proxy server address,
    *
    * @var      string
    */
   protected $_host = '';

   /**
    * Getter method for {@link $_host}.
    *
    * @return   string  {@link $_host}
    */
   function getHost()    {return $this->_host;}

   /**
    * Setter method for {@link $_host}.
    *
    * @param    string  $value
    */
   function setHost($value)    {$this->_host = $value;}

   /**
    * Getter for {@link $_host}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultHost()    {return '';}

   // Port

   /**
    * Proxy server TPC port.
    *
    * @var      integer
    */
   protected $_port = 8080;

   /**
    * Getter method for {@link $_port}.
    *
    * @return   integer {@link $_port}
    */
   function getPort()    {return $this->_port;}

   /**
    * Setter method for {@link $_port}.
    *
    * @param    integer $value
    */
   function setPort($value)    {$this->_port = $value;}

   /**
    * Getter for {@link $_port}’s default value.
    *
    * @return   integer 8080
    */
   function defaultPort()    {return 8080;}

   // Proxy Username

   /**
    * Proxy username (if required).
    *
    * @var      string
    */
   protected $_user = '';

   /**
    * Getter method for {@link $_user}.
    *
    * @return   string  {@link $_user}
    */
   function getUser()    {return $this->_user;}

   /**
    * Setter method for {@link $_user}.
    *
    * @param    string  $value
    */
   function setUser($value)    {$this->_user = $value;}

   /**
    * Getter for {@link $_user}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUser()    {return '';}

   // Proxy Password

   /**
    * Proxy password (if required).
    *
    * @var      string
    */
   protected $_password = '';

   /**
    * Getter method for {@link $_password}.
    *
    * @return   string  {@link $_password}
    */
   function getPassword()    {return $this->_password;}

   /**
    * Setter method for {@link $_password}.
    *
    * @param    string  $value
    */
   function setPassword($value)    {$this->_password = $value;}

   /**
    * Getter for {@link $_password}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultPassword()    {return '';}

   // Proxy HTTP Authentication

   /**
    * Proxy HTTP authentication.
    *
    * @var      string
    */
   protected $_auth = Zend_Http_Client::AUTH_BASIC;

   /**
    * Getter method for {@link $_auth}.
    *
    * @return   string  {@link $_auth}
    */
   function readAuth()    {return $this->_auth;}

   /**
    * Setter method for {@link $_auth}.
    *
    * @param    string  $value
    */
   function writeAuth($value)    {$this->_auth = $value;}

   /**
    * Getter for {@link $_auth}’s default value.
    *
    * @return   string  {@link Zend_Http_Client::AUTH_BASIC}
    */
   function defaultAuth()    {return Zend_Http_Client::AUTH_BASIC;}

   /**
    * Returns an array with settings for this adapter.
    *
    * @return   array
    */
   function returnConfig()
   {
      $data = array();

      if($this->_host != '')
      {
         $data['proxy_host'] = $this->_host;
      }

      if($this->_port != '')
      {
         $data['proxy_port'] = $this->_port;
      }

      if($this->_user != '')
      {
         $data['proxy_user'] = $this->_user;
      }

      if($this->_password != '')
      {
         $data['proxy_pass'] = $this->_password;
      }

      if($this->_auth != '')
      {
         $data['proxy_auth'] = $this->_auth;
      }

      $data['adapter'] = 'Zend_Http_Client_Adapter_Proxy';

      return $data;
   }
}

/**
 * cURL options for {@link ZHttp} objects.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.http.client.adapters.html#zend.http.client.adapters.curl Zend Framework Documentation
 */
class ZHttpAdapterCurlOptions extends ZHttpOptions
{

   // Options

   /**
    * Options.
    *
    * @var      array
    */
   protected $_options = array();

   /**
    * Getter method for {@link $_options}.
    *
    * @return   array   {@link $_options}
    */
   function getOptions()    {return $this->_options;}

   /**
    * Setter method for {@link $_options}.
    *
    * @param    array   $value
    */
   function setOptions($value)    {$this->_options = $value;}

   /**
    * Getter for {@link $_options}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultOptions()    {return array();}

   /**
    * Returns an array with settings for this adapter.
    *
    * @return   array
    */
   function returnConfig()
   {
      $data = array();

      $data['curloptions'] = $this->_options;

      $data['adapter'] = 'Zend_Http_Client_Adapter_Curl';

      return $data;
   }
}

/**
 * Component to perform HTTP requests and manage responses.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.http.client.html Zend Framework Documentation
 */
class ZHttp extends Component
{

   /**
    * Zend Framework HTTP instance.
    *
    * @var      Zend_Http_Client
    */
   private $_client = null;

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);

      $this->_adaptersocketoptions = new ZHttpAdapterSocketOptions($this);
      $this->_adapterproxyoptions = new ZHttpAdapterProxyOptions($this);
      $this->_adaptercurloptions = new ZHttpAdapterCurlOptions($this);
   }

   // Maximum Redirects

   /**
    * Maximum amount of redirects to be followed.
    *
    * @var      integer
    */
   protected $_maxredirects = 5;

   /**
    * Getter method for {@link $_maxredirects}.
    *
    * @return   integer {@link $_maxredirects}
    */
   function getMaxRedirects()    {return $this->_maxredirects;}

   /**
    * Setter method for {@link $_maxredirects}.
    *
    * @param    integer $value
    */
   function setMaxRedirects($value)    {$this->_maxredirects = $value;}

   /**
    * Getter for {@link $_maxredirects}’s default value.
    *
    * @return   integer False ('false')
    */
   function defaultMaxRedirects()    {return 5;}

   // Strict

   /**
    * Whether or not to validate header names.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_strict = 'true';

   /**
    * Getter method for {@link $_strict}.
    *
    * @return   string  {@link $_strict}
    */
   function getStrict()    {return $this->_strict;}

   /**
    * Setter method for {@link $_strict}.
    *
    * @param    string  $value
    */
   function setStrict($value)    {$this->_strict = $value;}

   /**
    * Getter for {@link $_strict}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultStrict()    {return 'true';}

   // Strict Redirects

   /**
    * Whether or not to strictly follow the RFC when redirecting.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_strictredirects = 'false';

   /**
    * Getter method for {@link $_strictredirects}.
    *
    * @return   string  {@link $_strictredirects}
    */
   function getStrictRedirects()    {return $this->_strictredirects;}

   /**
    * Setter method for {@link $_strictredirects}.
    *
    * @param    string  $value
    */
   function setStrictRedirects($value)    {$this->_strictredirects = $value;}

   /**
    * Getter for {@link $_strictredirects}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultStrictRedirects()    {return 'false';}

   // User Agent

   /**
    * User agent identifier string (included in request headers).
    *
    * @var      string
    */
   protected $_useragent = 'Zend_Http_Client';

   /**
    * Getter method for {@link $_useragent}.
    *
    * @return   string  {@link $_useragent}
    */
   function getUserAgent()    {return $this->_useragent;}

   /**
    * Setter method for {@link $_useragent}.
    *
    * @param    string  $value
    */
   function setUserAgent($value)    {$this->_useragent = $value;}

   /**
    * Getter for {@link $_useragent}’s default value.
    *
    * @return   string  'Zend_Http_Client'
    */
   function defaultUserAgent()    {return 'Zend_Http_Client';}

   // Timeout

   /**
    * Connection timeout (in seconds).
    *
    * @var      integer
    */
   protected $_timeout = 10;

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
    * @return   integer 10
    */
   function defaultTimeout()    {return 10;}

   // HTTP Version

   /**
    * HTTP protocol version to be used.
    *
    * @var      string
    */
   protected $_httpversion = '1.1';

   /**
    * Getter method for {@link $_httpversion}.
    *
    * @return   string  {@link $_httpversion}
    */
   function getHttpVersion()    {return $this->_httpversion;}

   /**
    * Setter method for {@link $_httpversion}.
    *
    * @param    string  $value
    */
   function setHttpVersion($value)    {$this->_httpversion = $value;}

   /**
    * Getter for {@link $_httpversion}’s default value.
    *
    * @return   string  '1.1'
    */
   function defaultHttpVersion()    {return '1.1';}

   // Keep Alive

   /**
    * Whether or not to enable keep-alive connections with the server.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * Enabling this feature can render useful in certain situations, and it might improve
    * performance if several consecutive requests are performed on the same server .
    *
    * @var      string
    */
   protected $_keepalive = 'false';

   /**
    * Getter method for {@link $_keepalive}.
    *
    * @return   string  {@link $_keepalive}
    */
   function getKeepAlive()    {return $this->_keepalive;}

   /**
    * Setter method for {@link $_keepalive}.
    *
    * @param    string  $value
    */
   function setKeepAlive($value)    {$this->_keepalive = $value;}

   /**
    * Getter for {@link $_keepalive}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultKeepAlive()    {return 'false';}

   // Store Response

   /**
    * Whether or not to store last response for later retrieval with {@link returnLastResponse()}.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * If set to false ('false'), {@link returnLastResponse()} will return null.
    *
    * @var      string
    */
   protected $_storeresponse = 'true';

   /**
    * Getter method for {@link $_storeresponse}.
    *
    * @return   string  {@link $_storeresponse}
    */
   function getStoreResponse()    {return $this->_storeresponse;}

   /**
    * Setter method for {@link $_storeresponse}.
    *
    * @param    string  $value
    */
   function setStoreResponse($value)    {$this->_storeresponse = $value;}

   /**
    * Getter for {@link $_storeresponse}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultStoreResponse()    {return 'true';}

   // Encode Cookies

   /**
    * Whether or not to pass the cookie value through {@link urlencode()} and {@link urldecode()} functions.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * Enabling this feature ('true') can break support with some web servers, while disabling it
    * ('false') limits the range of values the cookies can contain.
    *
    * @var      string
    */
   protected $_encodecookies = 'true';

   /**
    * Getter method for {@link $_encodecookies}.
    *
    * @return   string  {@link $_encodecookies}
    */
   function getEncodeCookies()    {return $this->_encodecookies;}

   /**
    * Setter method for {@link $_encodecookies}.
    *
    * @param    string  $value
    */
   function setEncodeCookies($value)    {$this->_encodecookies = $value;}

   /**
    * Getter for {@link $_encodecookies}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultEncodeCookies()    {return 'true';}

   // URI

   /**
    * Target URI.
    *
    * @var      string
    */
   protected $_uri = '';

   /**
    * Getter method for {@link $_uri}.
    *
    * @return   string  {@link $_uri}
    */
   function getUri()    {return $this->_uri;}

   /**
    * Setter method for {@link $_uri}.
    *
    * This method must be used to change the URI <b>before</b> {@link ZHttp} component is {@link loaded()
    * loaded}. Else it is useless.
    *
    * @see changeUri()
    *
    * @param    string  $value
    */
   function setUri($value)    {$this->_uri = $value;}

   /**
    * Getter for {@link $_uri}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUri()    {return '';}

   // Client Adapter

   /**
    * Client adapter.
    *
    * Possible values are: {@link caSocket}, {@link caProxy}, or {@link caCurl}.
    *
    * @var      string
    */
   protected $_clientadapter = caSocket;

   /**
    * Getter method for {@link $_clientadapter}.
    *
    * @return   string  {@link $_clientadapter}
    */
   function getClientAdapter()    {return $this->_clientadapter;}

   /**
    * Setter method for {@link $_clientadapter}.
    *
    * @param    string  $value
    */
   function setClientAdapter($value)    {$this->_clientadapter = $value;}

   /**
    * Getter for {@link $_clientadapter}’s default value.
    *
    * @return   string  {@link caSocket}
    */
   function defaultClientAdapter()    {return caSocket;}

   // Use Numbers

   /**
    * Whether or not should the client internally store all sent and received cookies, and resend them automatically on subsequent requests.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      boolean
    */
   protected $_cookiesstickiness = false;

   /**
    * Getter method for {@link $_cookiesstickiness}.
    *
    * @return   boolean {@link $_cookiesstickiness}
    */
   function getCookiesStickiness()    {return $this->_cookiesstickiness;}

   /**
    * Setter method for {@link $_cookiesstickiness}.
    *
    * @param    boolean $value
    */
   function setCookiesStickiness($value)    {$this->_cookiesstickiness = $value;}

   /**
    * Getter for {@link $_cookiesstickiness}’s default value.
    *
    * @return   boolean False
    */
   function defaultCookiesStickiness()    {return false;}

   // Socket Adapter Options

   /**
    * Socket adapter options.
    *
    * @var      ZHttpAdapterSocketOptions
    */
   protected $_adaptersocketoptions = null;

   /**
    * Getter method for {@link $_adaptersocketoptions}.
    *
    * @return   ZHttpAdapterSocketOptions       {@link $_adaptersocketoptions}
    */
   function getAdapterSocketOptions()    {return $this->_adaptersocketoptions;}

   /**
    * Setter method for {@link $_adaptersocketoptions}.
    *
    * @param    ZHttpAdapterSocketOptions       $value
    */
   function setAdapterSocketOptions($value)    {$this->_adaptersocketoptions = $value;}

   /**
    * Getter for {@link $_adaptersocketoptions}’s default value.
    *
    * @return   ZHttpAdapterSocketOptions       Null
    */
   function defaultAdapterSocketOptions()    {return null;}

   // Proxy Adapter Options

   /**
    * Proxy adapter options.
    *
    * @var      ZHttpAdapterProxyOptions
    */
   protected $_adapterproxyoptions = null;

   /**
    * Getter method for {@link $_adapterproxyoptions}.
    *
    * @return   ZHttpAdapterProxyOptions        {@link $_adapterproxyoptions}
    */
   function getAdapterProxyOptions()    {return $this->_adapterproxyoptions;}

   /**
    * Setter method for {@link $_adapterproxyoptions}.
    *
    * @param    ZHttpAdapterProxyOptions        $value
    */
   function setAdapterProxyOptions($value)    {$this->_adapterproxyoptions = $value;}

   /**
    * Getter for {@link $_adapterproxyoptions}’s default value.
    *
    * @return   ZHttpAdapterProxyOptions        Null
    */
   function defaultAdapterProxyOptions()    {return null;}

   // cURL Adapter Options

   /**
    * cURL adapter options.
    *
    * @var      ZHttpAdapterCurlOptions
    */
   protected $_adaptercurloptions = null;

   /**
    * Getter method for {@link $_adaptercurloptions}.
    *
    * @return   ZHttpAdapterCurlOptions {@link $_adaptercurloptions}
    */
   function getAdapterCurlOptions()    {return $this->_adaptercurloptions;}

   /**
    * Setter method for {@link $_adaptercurloptions}.
    *
    * @param    ZHttpAdapterCurlOptions $value
    */
   function setAdapterCurlOptions($value)    {$this->_adaptercurloptions = $value;}

   /**
    * Getter for {@link $_adaptercurloptions}’s default value.
    *
    * @return   ZHttpAdapterCurlOptions Null
    */
   function defaultAdapterCurlOptions()    {return null;}

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      $data = array();

      if($this->_maxredirects != '')
      {
         $data['maxredirects'] = $this->_maxredirects;
      }

      if($this->_strict == 1 || $this->_strict == 'true')
      {
         $data['strict'] = true;
      }
      else
      {
         $data['strict'] = false;
      }

      if($this->_strictredirects == 1 || $this->_strictredirects == 'true')
      {
         $data['strictredirects'] = true;
      }
      else
      {
         $data['strictredirects'] = false;
      }

      if($this->_useragent != '')
      {
         $data['useragent'] = $this->_useragent;
      }

      if($this->_timeout != '')
      {
         $data['timeout'] = $this->_timeout;
      }

      if($this->_httpversion != '')
      {
         $data['httpversion'] = $this->_httpversion;
      }

      if($this->_keepalive == 1 || $this->_keepalive == 'true')
      {
         $data['keepalive'] = true;
      }
      else
      {
         $data['keepalive'] = false;
      }

      if($this->_storeresponse == 1 || $this->_storeresponse == 'true')
      {
         $data['storeresponse'] = true;
      }
      else
      {
         $data['storeresponse'] = false;
      }

      if($this->_encodecookies == 1 || $this->_encodecookies == 'true')
      {
         $data['encodecookies'] = true;
      }
      else
      {
         $data['encodecookies'] = false;
      }

      $adapter = array();
      switch($this->_clientadapter)
      {
         case caSocket:
            $adapter = $this->_adaptersocketoptions->returnConfig();
            break;

         case caProxy:
            $adapter = $this->_adapterproxyoptions->returnConfig();
            break;

         case caCurl:
            $adapter = $this->_adaptercurloptions->returnConfig();
            break;
      }

      $data = array_merge($data, $adapter);

      if($this->_uri != '')
      {
         $uri = $this->_uri;
      }
      else
      {
         $uri = null;
      }

      $this->_client = new Zend_Http_Client($uri, $data);

      if($this->_cookiesstickiness == 'true' || $this->_cookiesstickiness == 1)
      {
         $this->_client->setCookieJar();

      }
   }

   // POST Parameters

   /**
    * Sets POST parameters.
    *
    * Parameters should be provided as an array of key-value pairs.
    *
    * This method must be used <b>after</b> {@link ZHttp} component is {@link loaded() loaded}.
    *
    * @param    array   $data   Parameters.
    */
   function addParametersPost($data)
   {
      if($this->_client != null)
      {
         $this->_client->setParameterPost($data);
      }
   }

   // GET Parameters

   /**
    * Sets GET parameters.
    *
    * Parameters should be provided as an array of key-value pairs.
    *
    * This method must be used <b>after</b> {@link ZHttp} component is {@link loaded() loaded}.
    *
    * @param    array   $data   Parameters.
    */
   function addParametersGet($data)
   {
      if($this->_client != null)
      {
         $this->_client->setParameterGet($data);
      }
   }

   /**
    * Modifies existing URI.
    *
    * This method must be used to change the URI <b>after</b> {@link ZHttp} component is {@link
    * loaded() loaded}. Else it is useless.
    *
    * @see setUri()
    *
    * @param    string  $uri    URI.
    */
   function changeUri($uri)
   {
      if($this->_client != null)
      {
         $this->_client->setUri($uri);
      }
   }

   /**
    * Executes the request.
    *
    * @param    string  $method Connection method, either 'GET' or 'POST'.
    * @return   Zend_Http_Response
    * @throws   Zend_Http_Client_Exception
    */
   function executeRequest($method = 'GET')
   {
      if($this->_client != null)
      {
         return $this->_client->request($method);
      }
   }

   /**
    * Returns last response.
    *
    * This will only work if {@link $_storeresponse} is enabled ('true').
    *
    * This method must be used <b>after</b> {@link ZHttp} component is {@link loaded() loaded}, else
    * it will return a boolean value, false.
    *
    * @return   boolean|Zend_Http_Response
    */
   function returnLastResponse()
   {
      if($this->_client != null)
      {
         return $this->_client->getLastResponse();
      }
      else
      {
         return false;
      }
   }

   /**
    * Returns last request.
    *
    * This method must be used <b>after</b> {@link ZHttp} component is {@link loaded() loaded}, else
    * it will return a boolean value, false.
    *
    * @return   boolean|string
    */
   function returnLastRequest()
   {
      if($this->_client != null)
      {
         return $this->_client->getLastRequest();
      }
      else
      {
         return false;
      }
   }

   /**
    * Adds a cookie to the request.
    *
    * This method must be used <b>after</b> {@link ZHttp} component is {@link loaded() loaded}.
    *
    * @param    string  $name           Cookie name.
    * @param    string  $value          Cookie value.
    * @param    string  $domain         Cookie domain.
    * @param    string  $expires        Cookie expiration date. Optional.
    * @param    string  $path           Cookie path. Optional, defaults to '/'.
    * @param    boolean $secure         Whether cookie should be secure or not (default). Optional.
    */
   function addCookie($name, $value, $domain, $expires = null, $path = '/', $secure = false)
   {
      if($this->_client != null)
      {
         $cookies = new Zend_Http_Cookie($name, $value, $domain, $expires, $path, $secure);
         $this->_client->setCookie($cookies);
      }
   }

   /**
    * Adds headers to the request.
    *
    * This method must be used <b>after</b> {@link ZHttp} component is {@link loaded() loaded}.
    *
    * @param    array   $array  Headers as key-value pairs.
    */
   function addHeaders($array)
   {
      if($this->_client != null)
      {
         $this->_client->setHeaders($array);
      }
   }

   /**
    * Adds authentication information to the request.
    *
    * This method must be used <b>after</b> {@link ZHttp} component is {@link loaded() loaded}.
    *
    * @param    string  $user           Username.
    * @param    sTring  $password       Password.
    */
   function addAuthHTTP($user, $password)
   {
      if($this->_client != null)
      {
         $this->_client->setAuth($user, $password);
      }
   }

   /**
    * Sets HTTP client’s cookie jar.
    *
    * A cookie jar is an object that holds and maintains cookies across HTTP requests and responses.
    *
    * Only parameter is {@link $cookiejar}, and it can be set to <b>true</b> to create a new cookie,
    * <b>false</b> to disable, or it can be set to an existing {@link Zend_Http_CookieJar cookie
    * jar}.
    *
    * This method must be used <b>after</b> {@link ZHttp} component is {@link loaded() loaded}.
    * 
    * @param    boolean|Zend_Http_CookieJar     $cookiejar      See method documentation for additional information.
    *
    */
   function addCookieJar($cookiejar)
   {
      if($this->_client != null)
      {
         $this->_client->setCookieJar($cookiejar);
      }
   }

   /**
    * Returns current cookie jar, or null if there is none.
    *
    * This method must be used <b>after</b> {@link ZHttp} component is {@link loaded() loaded}.
    *
    * @return   null|Zend_Http_CookieJar
    */
   function retrieveCookieJar()
   {
      if($this->_client != null)
      {
         return $this->_client->getCookieJar();
      }
   }

   /**
    * Resets parameters.
    *
    * This method must be used <b>after</b> {@link ZHttp} component is {@link loaded() loaded}.
    *
    * @param    boolean $all    Whether to clear all headers or only 'Content-length' and
    *                           'Content-type' (default). Optional.
    */
   function clearParameters($all = false)
   {
      if($this->_client != null)
      {
         $this->_client->resetParameters($all);
      }
   }

   /**
    * Returns data streaming.
    *
    * You do not have to run {@link executeRequest()} if you use this method.
    *
    * @param    string  $filename       Path to a file where streaming should be saved to.
    */
   function returnDataStreaming($filename)
   {
      if($this->_client != null)
      {
         $this->_client->setStream($filename)->request('GET');
      }
   }

   /**
    * Sends data streaming.
    *
    * You do not have to run {@link executeRequest()} if you use this method.
    *
    * @param    string  $data   Data.
    * @param    string  $ctype  Data MIME type.
    */
   function sendDataStreaming($data, $ctype)
   {
      if($this->_client != null)
      {
         $this->_client->setRawData($data, $ctype)->request('PUT');
      }
   }

   /**
    * Uploads files.
    *
    * You do not have to run {@link executeRequest()} if you use this method.
    *
    * This method must be used <b>after</b> {@link ZHttp} component is {@link loaded() loaded}.
    *
    * Only parameter is expected to be an array where each item is also an array with the following
    * key-value pairs:
    * <ul>
    *   <li><b>filename</b>: Path to the file (string).</li>
    *   <li><b>formname</b>: Target filename (string). For example, 'example.torrent'.</li>
    *   <li><b>data</b>: File data (string).</li>
    *   <li><b>ctype</b>: File MIME type (string).</li>
    * </ul>
    *
    * @param    array   $files  Files data.
    */
   function addFileToUpload($files)
   {
      if($this->_client != null)
      {
         foreach($files as $file)
         {
            $this->_client->setFileUpload($file['filename'], $file['formname'], $file['data'], $file['ctype']);

         }
         $this->_client->request('POST');
      }
   }

   /**
    * Sends data using RAW POST.
    *
    * You do not have to run {@link executeRequest()} if you use this method.
    *
    * This method must be used <b>after</b> {@link ZHttp} component is {@link loaded() loaded}.
    *
    * @param    string  $data   Data.
    * @param    string  $ctype  Data MIME type.
    */
   function addRawPOSTData($data, $ctype)
   {
      if($this->_client != null)
      {
         $this->_client->setRawData($data, $ctype)->request('POST');
      }
   }
}

?>