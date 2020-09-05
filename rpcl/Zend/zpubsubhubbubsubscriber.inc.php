<?php

/**
 * Zend/zpubsubhubbubsubscriber.inc.php
 * 
 * Defines Zend Framework PubSubHubBub Subscriber component.
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
use_unit("Zend/framework/library/Zend/Feed/Pubsubhubbub/Subscriber.php");
use_unit("Zend/framework/library/Zend/Feed/Pubsubhubbub/Model/Subscription.php");
use_unit("Zend/framework/library/Zend/Db.php");

// Verification Methods

/**
 * Asynchronous verification.
 * 
 * @const       vmAsync
 */
define('vmAsync','vmAsync');

/**
 * Synchronous verification.
 * 
 * @const       vmSync
 */
define('vmSync','vmSync');

// Database Adapters

/**
 * PDO MySQL database adapter.
 * 
 * @const       dbaPdoMysql
 */
define('dbaPdoMysql','dbaPdoMysql');

/**
 * PDO MS SQL database adapter.
 * 
 * @const       dbaPdoMssql
 */
define('dbaPdoMssql','dbaPdoMssql');

/**
 * PDO PDO OCI database adapter.
 * 
 * @const       dbaPdoOci
 */
define('dbaPdoOci','dbaPdoOci');

/**
 * PDO PostgreSQL database adapter.
 * 
 * @const       dbaPdoPgsql
 */
define('dbaPdoPgsql','dbaPdoPgsql');

/**
 * PDO SQLite database adapter.
 * 
 * @const       dbaPdoSqlite
 */
define('dbaPdoSqlite','dbaPdoSqlite');

/**
 * Improved MySQL database adapter.
 * 
 * @const       dbaMysqli
 */
define('dbaMysqli','dbaMysqli');

/**
 * OCI 8 database adapter.
 * 
 * @const       dbaOci8
 */
define('dbaOci8','dbaOci8');

/**
 * Subscriber storage settings.
 *
 * @package ZendFramework
 *
 * @internal
 */
class ZStorageSubscriber extends Persistent
{

    // Owner

   /**
    * Owner.
    *
    * @var      ZStorage
    */
   protected $ZStorage=null;

   /**
    * {@inheritdoc}
    *
    * @return   ZStorage
    */
   function readOwner()
   {
      return($this->ZStorage);
   }

   // Constructor

   /**
    * Class constructor.
    *
    * @param    ZStorage        $aowner {@link ZFile Owner}.
    */
   function __construct($aowner)
   {
      parent::__construct();

      $this->ZStorage=$aowner;
   }

   // Database Host

   /**
    * Database server address.
    *
    * @var      string
    */
   protected $_dbhost='';

   /**
    * Getter method for {@link $_dbhost}.
    *
    * @return   string  {@link $_dbhost}
    */
   function getDBHost() { return $this->_dbhost; }

   /**
    * Setter method for {@link $_dbhost}.
    *
    * @param    string  $value
    */
   function setDBHost($value) { $this->_dbhost=$value; }

   /**
    * Getter for {@link $_dbhost}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDBHost() { return ''; }

   // Database Username

   /**
    * Username of a database user.
    *
    * @var      string
    */
   protected $_dbusername='';

   /**
    * Getter method for {@link $_dbusername}.
    *
    * @return   string  {@link $_dbusername}
    */
   function getDBUsername() { return $this->_dbusername; }

   /**
    * Setter method for {@link $_dbusername}.
    *
    * @param    string  $value
    */
   function setDBUsername($value) { $this->_dbusername=$value; }

   /**
    * Getter for {@link $_dbusername}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDBUsername() { return ''; }

   // Database Password

   /**
    * User password.
    *
    * @var      string
    */
   protected $_dbpassword='';

   /**
    * Getter method for {@link $_dbpassword}.
    *
    * @return   string  {@link $_dbpassword}
    */
   function getDBPassword() { return $this->_dbpassword; }

   /**
    * Setter method for {@link $_dbpassword}.
    *
    * @param    string  $value
    */
   function setDBPassword($value) { $this->_dbpassword=$value; }

   /**
    * Getter for {@link $_dbpassword}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDBPassword() { return ''; }

   // Database Name

   /**
    * Database name.
    *
    * @var      string
    */
   protected $_dbname='';

   /**
    * Getter method for {@link $_dbname}.
    *
    * @return   string  {@link $_dbname}
    */
   function getDBName() { return $this->_dbname; }

   /**
    * Setter method for {@link $_dbname}.
    *
    * @param    string  $value
    */
   function setDBName($value) { $this->_dbname=$value; }

   /**
    * Getter for {@link $_dbname}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDBName() { return ''; }

   // Database Adapter

   /**
    * Database adapter.
    *  
    * Possible values are: {@link dbaMysqli}, {@link dbaOci8}, {@link dbaPdoMssql},
    * {@link dbaPdoMysql}, {@link dbaPdoOci}, {@link dbaPdoPgsql}, {@link dbaPdoSqlite}.
    *
    * @var      string
    */
   protected $_dbadapter=dbaPdoMysql;

   /**
    * Getter method for {@link $_dbadapter}.
    *
    * @return   string  {@link $_dbadapter}
    */
   function getDBAdapter() { return $this->_dbadapter; }

   /**
    * Setter method for {@link $_dbadapter}.
    *
    * @param    string  $value
    */
   function setDBAdapter($value) { $this->_dbadapter=$value; }

   /**
    * Getter for {@link $_dbadapter}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDBAdapter() { return dbaPdoMysql; }

}

/**
 * Component to connect to a PubSubHubBub publisher to get topic updates.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.feed.pubsubhubbub.introduction.html#zend.feed.pubsubhubbub.zend.feed.pubsubhubbub.subscriber Zend Framework Documentation
 */
class ZPubSubHubBubSubscriber extends Component
{

   /**
    * Zend Framework PubSubHubBub Subscriber instance.
    *
    * @internal
    *
    * @var      Zend_Feed_Pubsubhubbub_Subscriber
    */
   private $_subscriber=null;

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);

      $this->_storage=new ZStorageSubscriber($this);
   }

   /**
    * Returns an instance of {@link Zend_Feed_Pubsubhubbub_Model_Subscription} which uses
    * {@link $_storage} settings for the database adapter.
    *
    * @return   Zend_Feed_Pubsubhubbub_Model_Subscription
    *  
    * @internal
    */
   function _createStorage()
   {
      $adapter='';

      switch($this->_storage->getDBAdapter())
      {
         case dbaPdoMysql:
               $adapter='Pdo_Mysql';
               break;
         case dbaPdoMssql:
               $adapter='Pdo_Mssql';
               break;
         case dbaPdoOci:
               $adapter='Pdo_Oci';
               break;
         case dbaPdoPgsql:
               $adapter='Pdo_Pgsql';
               break;
         case dbaPdoSqlite:
               $adapter='Pdo_Sqlite';
               break;
         case dbaMysqli:
               $adapter='Mysqli';
               break;
         case dbaOci8:
               $adapter='Oracle';
               break;
      }

      $data=array();

      $data['host']=$this->_storage->getDBHost();
      $data['username']=$this->_storage->getDBUsername();
      $data['password']=$this->_storage->getDBPassword();
      $data['dbname']=$this->_storage->getDBName();
      $db=Zend_Db::factory($adapter,$data);

      Zend_Db_Table::setDefaultAdapter($db);

      return new Zend_Feed_Pubsubhubbub_Model_Subscription;
   }

   /**
    * Generator for {@link $_subscriber}.
    *
    * Generates a Zend Framework PubSubHubBub Subscriber from those properties set for this
    * {@link ZPubSubHubBubSubscriber} instance (or defaults), and saves it to {@link $_subscriber}.
    *
    * @internal
    */
   function _createSubscriber()
   {

      $data=array();

      if(count($this->_hubsurls)!=0)
      {
         $data['hubUrls']=$this->_hubsurls;
      }

      if(count($this->_parameters)!=0)
      {
         $data['parameters']=$this->_parameters;
      }

      if($this->_urltopic!='')
      {
         $data['topicUrl']=$this->_urltopic;
      }

      if($this->_urlcallback!='')
      {
         $data['callbackUrl']=$this->_urlcallback;
      }

      $data['leaseSeconds']=$this->_leaseseconds;

      $method='';

      switch($this->_verificationmethod)
      {
         case vmAsync:
            $method='async';
            break;
         case vmSync:
            $method='sync';
            break;
      }

      $data['preferredVerificationMode']=$method;

      if(count($this->_authentications)!=0)
      {
         $data['authentications']=$this->_authentications;
      }

      if($this->_usedpathparameter==0)
      {
         $data['usePathParameter']=false;
      }
      else
      {
         $data['usePathParameter']=true;
      }

      $data['storage']=$this->_createStorage();

      $this->_subscriber=new Zend_Feed_Pubsubhubbub_Subscriber($data);

   }

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      $this->_createSubscriber();
   }

   // Storage

   /**
    * Storage options.
    *
    * @var      ZStorageSubscriber
    */
   protected $_storage=null;

   /**
    * Getter method for {@link $_storage}.
    *
    * @return   ZStorageSubscriber      {@link $_storage}
    */
   function getStorage() { return $this->_storage; }

   /**
    * Setter method for {@link $_storage}.
    *
    * @param    ZStorageSubscriber      $value
    */
   function setStorage($value) { if(is_object($value)){$this->_storage=$value;} }

   /**
    * Getter for {@link $_storage}’s default value.
    *
    * @return   ZStorageSubscriber      Null
    */
   function defaultStorage() { return null; }

   // Hubs URLs

   /**
    * Hubs URLs.
    *
    * Subscriber will be notified about topics updates on these Hubs.
    *
    * @var      array
    */
   protected $_hubsurls=array();

   /**
    * Getter method for {@link $_hubsurls}.
    *
    * @return   array   {@link $_hubsurls}
    */
   function getHubsUrls() { return $this->_hubsurls; }

   /**
    * Setter method for {@link $_hubsurls}.
    *
    * @param    array   $value
    */
   function setHubsUrls($value) { $this->_hubsurls=$value; }

   /**
    * Getter for {@link $_hubsurls}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultHubsUrls() { return array(); }

   // Parameters

   /**
    * Parameters.
    *
    * This key-value pairs will be added to the URL used during (un)subscription request to Hubs.
    *
    * @var      array
    */
   protected $_parameters=array();

   /**
    * Getter method for {@link $_parameters}.
    *
    * @return   string  {@link $_parameters}
    */
   function getParameters() { return $this->_parameters; }

   /**
    * Setter method for {@link $_parameters}.
    *
    * @param    string  $value
    */
   function setParameters($value) { $this->_parameters=$value; }

   /**
    * Getter for {@link $_parameters}’s default value.
    *
    * @return   string  Empty array
    */
   function defaultParameters() { return array(); }

   // Topics URLs

   /**
    * Topics URLs.
    *
    * These URLs will point to the source feeds (RSS, Atom…) for the topics subscriber wants to be
    * notified about.
    *
    * @var      array
    */
   protected $_urltopic='';

   /**
    * Getter method for {@link $_urltopic}.
    *
    * @return   string  {@link $_urltopic}
    */
   function getUrlTopic() { return $this->_urltopic; }

   /**
    * Setter method for {@link $_urltopic}.
    *
    * @param    string  $value
    */
   function setUrlTopic($value) { $this->_urltopic=$value; }

   /**
    * Getter for {@link $_urltopic}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUrlTopic() { return ''; }

   // Callback URL

   /**
    * URL Hub servers must use when communicationg with this subscriber.
    *
    * @var      string
    */
   protected $_urlcallback='';

   /**
    * Getter method for {@link $_urlcallback}.
    *
    * @return   string  {@link $_urlcallback}
    */
   function getUrlCallback() { return $this->_urlcallback; }

   /**
    * Setter method for {@link $_urlcallback}.
    *
    * @param    string  $value
    */
   function setUrlCallback($value) { $this->_urlcallback=$value; }

   /**
    * Getter for {@link $_urlcallback}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUrlCallback() { return ''; }

   // Lease Seconds

   /**
    * Subscription active time (in seconds).
    *
    * @var      integer
    */
   protected $_leaseseconds=2592000;

   /**
    * Getter method for {@link $_case}.
    *
    * @return   integer {@link $_case}
    */
   function getLeaseSeconds() { return $this->_leaseseconds; }

   /**
    * Setter method for {@link $_case}.
    *
    * @param    integer $value
    */
   function setLeaseSeconds($value) { $this->_leaseseconds=$value; }

   /**
    * Getter for {@link $_case}’s default value.
    *
    * @return   integer 30 days (2592000)
    */
   function defaultLeaseSeconds() { return 2592000; }

   // Verification Method

   /**
    * Verification method of choice.
    *
    * Posible values are {@link vmAsync} or {@link vmSync}.
    *
    * @var      string
    */
   protected $_verificationmethod=vmAsync;

   /**
    * Getter method for {@link $_verificationmethod}.
    *
    * @return   string  {@link $_verificationmethod}
    */
   function getVerificationMethod() { return $this->_verificationmethod; }

   /**
    * Setter method for {@link $_verificationmethod}.
    *
    * @param    string  $value
    */
   function setVerificationMethod($value) { $this->_verificationmethod=$value; }

   /**
    * Getter for {@link $_verificationmethod}’s default value.
    *
    * @return   string  {@link vmAsync}
    */
   function defaultVerificationMethod() { return vmAsync; }

   // Authentications

   /**
    * Authentication credentials for HTTP Basic authentication, if required by specific Hubs.
    *
    * Arrays should contain key-value pairs, where each key is a Hub URL, and its value a simple
    * array with login information in two values: username and password.
    *
    * @var      array
    */
   protected $_authentications=array();

   /**
    * Getter method for {@link $_authentications}.
    *
    * @return   string  {@link $_authentications}
    */
   function getAuthentications() { return $this->_authentications; }

   /**
    * Setter method for {@link $_authentications}.
    *
    * @param    string  $value
    */
   function setAuthentications($value) { $this->_authentications=$value; }

   /**
    * Getter for {@link $_authentications}’s default value.
    *
    * @return   string  Empty array
    */
   function defaultAuthentications() { return array(); }

   // User Path Parameter

   /**
    * Whether or not to append subscription identifier to the path of the {@link $_urlcallback}.
    *
    * @var      boolean
    */
   protected $_usedpathparameter=false;

   /**
    * Getter method for {@link $_usedpathparameter}.
    *
    * @return   string  {@link $_usedpathparameter}
    */
   function getUsedPathParameter() { return $this->_usedpathparameter; }

   /**
    * Setter method for {@link $_usedpathparameter}.
    *
    * @param    string  $value
    */
   function setUsedPathParameter($value) { $this->_usedpathparameter=$value; }

   /**
    * Getter for {@link $_usedpathparameter}’s default value.
    *
    * @return   string  False
    */
   function defaultUsedPathParameter() { return false; }

   /**
    * Subscribe to one or more Hub Servers using the stored Hub URLs for the given Topic URL (RSS or
    * Atom feed)
    */
   function subscribeAll()
   {
      $this->_subscriber->subscribeAll();
   }

   /**
    * Unsubscribe from one or more Hub Servers using the stored Hub URLs for the given Topic URL
    * (RSS or Atom feed).
   */
   function unsubscribeAll()
   {
      $this->_subcriber->unsubscribeAll();
   }

   /**
    * Returns a boolean indicator of whether the notifications to Hub servers were (all) successful.
    *
    * If any notification failed, this method will return false.
    *
    * @return   boolean
    */
   function isSuccess()
   {
      return $this->_subscriber->isSuccess();
   }

    /**
    * Returns an array with occurred errors.
    *
    * This arrays will have key-value pairs with the following information:
    * <ul>
    *   <li><b>response</b>: {@link Zend_Http_Response} object from the error.</li>
    *   <li><b>hubURL</b>: Hub server URL whose notification failed.</li>
    * </ul>
    *
    * @return   array
    */
   function findErrors()
   {
      return $this->_subscriber->getErrors();
   }
}

?>