<?php

/**
 * Zend/zopenidconsumerstoragedb.inc.php
 * 
 * Defines Zend Framework OpenID Consumer Database Storage component.
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
use_unit("controls.inc.php");
use_unit("extctrls.inc.php");
use_unit("Zend/zcommon/zopenidconsumerstorage.inc.php");
require_once('Zend/Db/Adapter/Pdo/Mysql.php');
require_once('Zend/Db/Adapter/Pdo/Mssql.php');
require_once('Zend/Db/Adapter/Pdo/Pgsql.php');
require_once("Zend/OpenId/Consumer/Storage.php");

/**
 * Subclass of {@link Zend_OpenId_Consumer_Storage} to ease its configuration.
 *
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.openid.consumer.html#zend.openid.consumer.storage Zend Framework Documentation
 */
class OpenIdConsumerStorageDB extends Zend_OpenId_Consumer_Storage
{
   /**
    * Database.
    *
    * It should be an instance of a child class of {@link Zend_Db_Adapter}.
    *
    * @var      Zend_Db_Adapter
    */
   private $_db;

   /**
    * Table to work with associations.
    *
    * @var      string
    */
   private $_association_table;

   /**
    * Table to cache discovery information.
    *
    * @var      string
    */
   private $_discovery_table;

   /**
    * Table to check whether the response is unique.
    *
    * @var      string
    */
   private $_nonce_table;

   /**
    * Class constructor.
    *
    * It initializes the database storage.
    *
    * @param    Zend_Db_Adapter $db                     Value for {@link $_db}.
    * @param    string          $association_table      Optional value for {@link $_association_table},
    *                                                   it defaults to 'association'.
    * @param    string          $discovery_table        Optional value for {@link $_discovery_table},
    *                                                   it defaults to 'discovery'.
    * @param    string          $nonce_table            Optional value for {@link $_nonce_table},
    *                                                   it defaults to 'nonce'.
    */
   public function __construct($db, $association_table = "association", $discovery_table = "discovery", $nonce_table = "nonce")
   {
      $this->_db = $db;
      $this->_association_table = $association_table;
      $this->_discovery_table = $discovery_table;
      $this->_nonce_table = $nonce_table;
      $tables = $this->_db->listTables();

      // If the associations table doesn't exist, create it
      if( ! in_array($association_table, $tables))
      {
         $this->_db->getConnection()->exec(
         "create table $association_table (" .
         " url     varchar(256) not null primary key," .
         " handle  varchar(256) not null," .
         " macFunc char(16) not null," .
         " secret  varchar(256) not null," .
         " expires timestamp" .
         ")");
      }

      // If the discovery table doesn't exist, create it
      if( ! in_array($discovery_table, $tables))
      {
         $this->_db->getConnection()->exec(
         "create table $discovery_table (" .
         " id      varchar(256) not null primary key," .
         " realId  varchar(256) not null," .
         " server  varchar(256) not null," .
         " version float," .
         " expires timestamp" .
         ")");
      }

      // If the nonce table doesn't exist, create it
      if( ! in_array($nonce_table, $tables))
      {
         $this->_db->getConnection()->exec(
         "create table $nonce_table (" .
         " nonce   varchar(256) not null primary key," .
         " created timestamp default current_timestamp" .
         ")");
      }
   }

   /**
    * Stores association information.
    *
    * This method always returns true.
    *
    * @param    string  $url            OpenID server URL.
    * @param    string  $handle         Association handle.
    * @param    string  $macFunc        HMAC function ('sha1' or 'sha256').
    * @param    string  $secret         Shared secret.
    * @param    long    $expires        Expiration UNIX time.
    * @return   boolean
    */
   public function addAssociation($url, $handle, $macFunc, $secret, $expires)
   {
      $expires = date('c', $expires);
      $table = $this->_association_table;
      $secret = base64_encode($secret);
      $this->_db->insert($table, array(
                                       'url'=>$url,
                                       'handle'=>$handle,
                                       'macFunc'=>$macFunc,
                                       'secret'=>$secret,
                                       'expires'=>$expires,
                                       ));
      return true;
   }

   /**
    * Gets association information for a given URL.
    *
    * You must also pass <b>by reference</b> the other association variables, which will hold retrieved
    * data.
    *
    * The method returns true if given association was found and did not expire. It will return
    * false otherwise.
    *
    * @param    string  $url            OpenID server URL.
    * @param    string  $handle         Association handle.
    * @param    string  $macFunc        HMAC function ('sha1' or 'sha256').
    * @param    string  $secret         Shared secret.
    * @param    long    $expires        Expiration UNIX time.
    * @return   boolean
    */
   public function getAssociation($url, &$handle, &$macFunc, &$secret, &$expires)
   {
      $table = $this->_association_table;
      $this->_db->delete($table, $this->_db->quoteInto('expires < ?', time()));
      $select = $this->_db->select()->from($table, array('handle', 'macFunc', 'secret', 'expires'))->where('url = ?', $url);
      $res = $this->_db->fetchRow($select);

      if(is_array($res))
      {
         $handle = $res['handle'];
         $macFunc = $res['macFunc'];
         $secret = base64_decode($res['secret']);
         $expires = $res['expires'];
         return true;
      }
      return false;
   }

   /**
    * Gets association information for a given association handle.
    *
    * You must also pass <b>by reference</b> the other association variables, which will hold
    * retrieved data.
    *
    * The method returns true if given association was found and did not expire. It will return
    * false otherwise.
    *
    * @param    string  $handle         Association handle.
    * @param    string  $url            OpenID server URL.
    * @param    string  $macFunc        HMAC function ('sha1' or 'sha256').
    * @param    string  $secret         Shared secret.
    * @param    long    $expires        Expiration UNIX time.
    * @return   boolean
    */
   public function getAssociationByHandle($handle, &$url, &$macFunc, &$secret, &$expires)
   {
      $table = $this->_association_table;
      $this->_db->delete($table, $this->_db->quoteInto('expires < ?', time()));
      $select = $this->_db->select()->from($table, array('url', 'macFunc', 'secret', 'expires'))->where('handle = ?', $handle);
      $res = $this->_db->fetchRow($select);

      if(is_array($res))
      {
         $url = $res['url'];
         $macFunc = $res['macFunc'];
         $secret = base64_decode($res['secret']);
         $expires = $res['expires'];
         return true;
      }
      return false;
   }

   /**
    * Deletes association data for a given URL.
    *
    * It always returns true.
    *
    * @param    string  $url    OpenID server URL.
    * @return   boolean
    */
   public function delAssociation($url)
   {
      $table = $this->_association_table;
      $this->_db->query("delete from $table where url = '$url'");
      return true;
   }

   /**
    * Stores discovered information.
    *
    * This method always returns true.
    *
    * @param    string  $id             Identity.
    * @param    string  $realId         Discovered identity URL.
    * @param    string  $server         Discovered OpenID server URL.
    * @param    float   $version        Discovered OpenID protocol version.
    * @param    long    $expires        Expiration UNIX time.
    * @return   boolean
    */
   public function addDiscoveryInfo($id, $realId, $server, $version, $expires)
   {
      $expires = date('c', $expires);
      $table = $this->_discovery_table;
      $this->_db->insert($table, array(
                                       'id'=>$id,
                                       'realId'=>$realId,
                                       'server'=>$server,
                                       'version'=>$version,
                                       'expires'=>$expires,
                                       ));

      return true;
   }

   /**
    * Gets discovery information for a given identity.
    *
    * You must also pass <b>by reference</b> the other discovery variables, which will hold retrieved data.
    *
    * The method returns true if given discovery was found, false otherwise.
    *
    * @param    string  $id             Identity.
    * @param    string  $realId         Discovered identity URL.
    * @param    string  $server         Discovered OpenID server URL.
    * @param    float   $version        Discovered OpenID protocol version.
    * @param    long    $expires        Expiration UNIX time.
    * @return   boolean
    */
   public function getDiscoveryInfo($id, &$realId, &$server, &$version, &$expires)
   {
      $table = $this->_discovery_table;
      $this->_db->delete($table, $this->_db->quoteInto('expires < ?', time()));
      $select = $this->_db->select()->from($table, array('realId', 'server', 'version', 'expires'))->where('id = ?', $id);
      $res = $this->_db->fetchRow($select);

      if(is_array($res))
      {
         $realId = $res['realId'];
         $server = $res['server'];
         $version = $res['version'];
         $expires = $res['expires'];
         return true;
      }
      return false;
   }

   /**
    * Deletes discovery data for a given identity.
    *
    * It always returns true.
    *
    * @param    string  $id     Identity.
    * @return   boolean
    */
   public function delDiscoveryInfo($id)
   {
      $table = $this->_discovery_table;
      $this->_db->delete($table, $this->_db->quoteInto('id = ?', $id));
      return true;
   }

   /**
    * Checks if OpenID response nonce is unique or not.
    *
    * The method will return true if response nonce is unique, false otherwise.
    *
    * @param    string  $provider       OpenID OP Endpoint from authentication response.
    * @param    string  $nonce          OpenID Response Nonce field from authentication response.
    * @return   boolean
    */
   public function isUniqueNonce($provider, $nonce)
   {
      $table = $this->_nonce_table;
      try
      {
         $ret = $this->_db->insert($table, array(
                                                 'nonce'=>$nonce,

                                                 ));
      }catch(Zend_Db_Statement_Exception$e)
      {
         return false;
      }
      return true;
   }

   /**
    * Removes data from {@link $_nonce_table} older than given date.
    *
    * If no date is passed, all data will be deleted.
    *
    * It always returns true.
    *
    * @param    mixed   $date   Optional date.
    * @return   boolean
    */
   public function purgeNonces($date = null)
   {
      $table = $this->_nonce_table;
      if($date == null)
      {
         $this->_db->delete($table);
      }
      else
      {
        $date = date('c', $date);
        $this->_db->delete($table, $this->_db->quoteInto('expires < ?', $date));
      }

      return true;
   }
}

/**
 * Interface to generate an instance of {@link OpenIdConsumerStorageDB}.
 *
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.openid.consumer.html#zend.openid.consumer.storage Zend Framework Documentation
 */
class ZOpenIdConsumerStorageDB extends ZOpenIdConsumerStorage
{

   // Variables.

   /**
    * Storage Database.
    *
    * It should be an instance of a child class of {@link Zend_Db_Adapter}.
    *
    * @var      Zend_Db_Adapter
    *
    * @internal
    */
   protected $_storage = '';

   /**
    * Database driver name.
    *
    * Possible values are: 'mysql', 'sqlserver', or 'postgre'.
    *
    * @var      string
    */
   protected $_drivername = "";

   /**
    * Database name.
    *
    * @var      string
    */
   protected $_databasename = "";

   /**
    * Database server address.
    *
    * @var      string
    */
   protected $_host = "";

   /**
    * Username to access database.
    *
    * @var      string
    */
   protected $_username = "";

   /**
    * User password.
    *
    * @var      string
    */
   protected $_userpassword = "";

   /**
    * Database adapter.
    *
    * @var      string
    */
   protected $_dbadapter = null;        // TODO: consider deleting this variable, it seems it is not used anywhere.

   /**
    * Table to work with associations.
    *
    * @var      string
    */
   protected $_associationtable = "association";

   /**
    * Table to cache discovery information.
    *
    * @var      string
    */
   protected $_discoverytable = "discovery";

   /**
    * Table to check whether the response is unique.
    *
    * @var      string
    */
   protected $_noncetable = "nonce";

   /**
    * Server port where database is reachable.
    *
    * @var      string
    */
   protected $_port = '';

   // Driver Name

   /**
    * Getter method for {@link $_drivername}.
    *
    * @return   string  {@link $_drivername}
    */
   function getDriverName()    {return $this->_drivername;}

   /**
    * Setter method for {@link $_drivername}.
    *
    * @param    string  $value
    */
   function setDriverName($value)    {$this->_drivername = $value;}

   /**
    * Getter for {@link $_drivername}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDriverName()    {return "";}

   // Database Name

   /**
    * Getter method for {@link $_databasename}.
    *
    * @return   string  {@link $_databasename}
    */
   function getDatabaseName()    {return $this->_databasename;}

   /**
    * Setter method for {@link $_databasename}.
    *
    * @param    string  $value
    */
   function setDatabaseName($value)    {$this->_databasename = $value;}

   /**
    * Getter for {@link $_databasename}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDatabaseName()    {return "";}

   // Host

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
   function defaultHost()    {return "";}

   // Username

   /**
    * Getter method for {@link $_username}.
    *
    * @return   string  {@link $_username}
    */
   function getUserName()    {return $this->_username;}

   /**
    * Setter method for {@link $_username}.
    *
    * @param    string  $value
    */
   function setUserName($value)    {$this->_username = $value;}

   /**
    * Getter for {@link $_username}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserName()    {return "";}

   // Password

   /**
    * Getter method for {@link $_userpassword}.
    *
    * @return   string  {@link $_userpassword}
    */
   function getUserPassword()    {return $this->_userpassword;}

   /**
    * Setter method for {@link $_userpassword}.
    *
    * @param    string  $value
    */
   function setUserPassword($value)    {$this->_userpassword = $value;}

   /**
    * Getter for {@link $_userpassword}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserPassword()    {return "";}

   // Association Table

   /**
    * Getter method for {@link $_associationtable}.
    *
    * @return   string  {@link $_associationtable}
    */
   function getAssociationTable()    {return $this->_associationtable;}

   /**
    * Setter method for {@link $_associationtable}.
    *
    * @param    string  $value
    */
   function setAssociationTable($value)    {$this->_associationtable = $value;}

   /**
    * Getter for {@link $_associationtable}’s default value.
    *
    * @return   string  'association'
    */
   function defaultAssociationTable()    {return "association";}

   // Discovery Table

   /**
    * Getter method for {@link $_discoverytable}.
    *
    * @return   string  {@link $_discoverytable}
    */
   function getDiscoveryTable()    {return $this->_discoverytable;}

   /**
    * Setter method for {@link $_discoverytable}.
    *
    * @param    string  $value
    */
   function setDiscoveryTable($value)    {$this->_discoverytable = $value;}

   /**
    * Getter for {@link $_discoverytable}’s default value.
    *
    * @return   string  'discovery'
    */
   function defaultDiscoveryTable()    {return "discovery";}

   // Nonce Table

   /**
    * Getter method for {@link $_noncetable}.
    *
    * @return   string  {@link $_noncetable}
    */
   function getNonceTable()    {return $this->_noncetable;}

   /**
    * Setter method for {@link $_noncetable}.
    *
    * @param    string  $value
    */
   function setNonceTable($value)    {$this->_noncetable = $value;}

   /**
    * Getter for {@link $_noncetable}’s default value.
    *
    * @return   string  'nonce'
    */
   function defaultNonceTable()    {return "nonce";}

   // Port

   /**
    * Getter method for {@link $_port}.
    *
    * @return   string  {@link $_port}
    */
   function getPort()    {return $this->_port;}

   /**
    * Setter method for {@link $_port}.
    *
    * @param    string  $value
    */
   function setPort($value)    {$this->_port = $value;}

   /**
    * Getter for {@link $_port}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultPort()    {return '';}

   // Class constructor.

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   /**
   * Returns an instance of {@link OpenIdConsumerStorageDB} generated from provided settings.
   *
   * @return    OpenIdConsumerStorageDB
   */
   public function CreateStorage()
   {


      $options = array(
                       'host'=>$this->_host,
                       'username'=>$this->_username,
                       'password'=>$this->_userpassword,
                       'dbname'=>$this->_databasename
                       );
      if($this->_port!='')
      {
          $options['port']=$this->_port;
      }


      switch($this->_drivername)
      {
         case 'mysql':
            $this->_storage = new Zend_Db_Adapter_Pdo_Mysql($options);
            break;
         case 'sqlserver':
            $this->_storage = new Zend_Db_Adapter_Pdo_Mssql($options);
            break;
         case 'postgre':
            $this->_storage = new Zend_Db_Adapter_Pdo_Pssql($options);
            break;
      }

      $openIdStorage = new OpenIdConsumerStorageDB($this->_storage, $this->_associationtable, $this->_discoverytable, $this->_noncetable);

      return $openIdStorage;
   }
}

?>