<?php

/**
 * Zend/zauthdb.inc.php
 * 
 * Defines Zend Framework Authentication Database adapter.
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
use_unit("Zend/zcommon/zcommon.inc.php");
use_unit("classes.inc.php");
use_unit("controls.inc.php");
use_unit("extctrls.inc.php");
require_once('Zend/Db/Adapter/Pdo/Mysql.php');
require_once('Zend/Db/Adapter/Pdo/Mssql.php');
require_once('Zend/Db/Adapter/Pdo/Pgsql.php');
require_once('Zend/Auth/Adapter/DbTable.php');

use_unit("Zend/zcommon/zauthadapter.inc.php");

/**
 * {@link ZAuthAdapter Adapter} for authentication against a database.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.auth.adapter.dbtable.html Zend Framework Documentation
 */
class ZAuthDB extends ZAuthAdapter
{

   // Properties

   /**
    * Driver name.
    *
    * Name of the driver for the database management system to be used.
    *
    * @var string
    */
   protected $_drivername = "";

   /**
    * Database name.
    *
    * @var string
    */
   protected $_databasename = "";

   /**
    * Host name or address.
    *
    * @var string
    */
   protected $_host = "";

   /**
    * Username.
    *
    * @var string
    */
   protected $_username = "";

   /**
    * Password.
    *
    * @var string
    */
   protected $_userpassword = "";

   /**
    * SQL Function to be applied to the {@link $_userpassword password} before it is compared to the
    * one stored in the database.
    *
    * The function should be a proper call, where the password user typed should be replaced with an
    * interrogation sign, "?". For example: "MD5(?)".
    *
    * Note these functions are specific to the underlying DBMS. Check the documentation for yours to
    * find out which functions you can use.
    *
    * @var string
    */
   protected $_passwordfunction = "";

   /**
    * User table.
    *
    * Name of the table where login information for users is stored (username, password and realm).
    *
    * @var string
    */
   protected $_usertable = "";

   /**
    * Username field.
    *
    * @var string
    */
   protected $_usernamefieldname = "";

   /**
    * Password field.
    *
    * @var string
    */
   protected $_userpasswordfieldname = "";

   /**
    * Database adapter.
    *
    * Instance of a {@link Zend_Db_Adapter_Abstract database adapter}, like
    * {@link Zend_Db_Adapter_Pdo_Mysql} or {@link Zend_Db_Adapter_Pdo_Pssql}.
    *
    * @var string
    */
   protected $_dbadapter = null;

   /**
    * Realm field.
    *
    * @var string
    */
   protected $_realmfieldname = "";

   /**
    * Port.
    *
    * The port for the {@link $_host host} where DBMS can be accessed. For example, if your database
    * can be accessed from localhost:5432, "5432" would be the port.
    *
    * @var string
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

   // Password Function

   /**
    * Getter method for {@link $_passwordfunction}.
    *
    * @return   string  {@link $_passwordfunction}
    */
   function getPasswordFunction()    {return $this->_passwordfunction;}

   /**
    * Setter method for {@link $_passwordfunction}.
    *
    * @param    string  $value
    */
   function setPasswordFunction($value)    {$this->_passwordfunction = $value;}

   /**
    * Getter for {@link $_passwordfunction}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultPasswordFunction()    {return "";}

   // User Table

   /**
    * Getter method for {@link $_usertable}.
    *
    * @return   string  {@link $_usertable}
    */
   function getUserTable()    {return $this->_usertable;}

   /**
    * Setter method for {@link $_usertable}.
    *
    * @param    string  $value
    */
   function setUserTable($value)    {$this->_usertable = $value;}

   /**
    * Getter for {@link $_usertable}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserTable()    {return "";}

   // Username Field

   /**
    * Getter method for {@link $_usernamefieldname}.
    *
    * @return   string  {@link $_usernamefieldname}
    */
   function getUserNameFieldName()    {return $this->_usernamefieldname;}

   /**
    * Setter method for {@link $_usernamefieldname}.
    *
    * @param    string  $value
    */
   function setUserNameFieldName($value)    {$this->_usernamefieldname = $value;}

   /**
    * Getter for {@link $_usernamefieldname}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserNameFieldName()    {return "";}

   // Password Field

   /**
    * Getter method for {@link $_userpasswordfieldname}.
    *
    * @return   string  {@link $_userpasswordfieldname}
    */
   function getUserPasswordFieldName()    {return $this->_userpasswordfieldname;}

   /**
    * Setter method for {@link $_userpasswordfieldname}.
    *
    * @param    string  $value
    */
   function setUserPasswordFieldName($value)    {$this->_userpasswordfieldname = $value;}

   /**
    * Getter for {@link $_userpasswordfieldname}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultuserPasswordFieldName()    {return "";}

   // Realm Field

   /**
    * Getter method for {@link $_realmfieldname}.
    *
    * @return   string  {@link $_realmfieldname}
    */
   function getUserRealmFieldName()    {return $this->_realmfieldname;}

   /**
    * Setter method for {@link $_realmfieldname}.
    *
    * @param    string  $value
    */
   function setUserRealmFieldName($value)    {$this->_realmfieldname = $value;}

   /**
    * Getter for {@link $_realmfieldname}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserRealmFieldName()    {return "";}

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

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      // Calls inherited constructor.
      parent::__construct($aowner);
   }

   /**
    * Create a database adapter with provided information.
    *
    * @return   Zend_Db_Adapter_Abstract
    */
   protected function CreateAdapter()
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
            $this->_dbadapter = new Zend_Db_Adapter_Pdo_Mysql($options);
            break;
         case 'sqlserver':
            $this->_dbadapter = new Zend_Db_Adapter_Pdo_Mssql($options);
            break;
         case 'postgre':
            $this->_dbadapter = new Zend_Db_Adapter_Pdo_Pssql($options);
            break;
      }

      $authAdapter = new Zend_Auth_Adapter_DbTable($this->_dbadapter, $this->_usertable, $this->_usernamefieldname, $this->_userpasswordfieldname, $this->_passwordfunction);

      return $authAdapter;
   }

   /**
    * {@inheritdoc}
    * 
    * Returns true if user is properly authenticated with given information, false otherwise.
    *
    * @return   boolean
    */
   function Authenticate($auth, $username, $password, $realm)
   {

      if($username != "")
      {
         // Get database adapter.
         $authAdapter = $this->CreateAdapter();

         // Set it up.
         $authAdapter->setIdentity($username)
         ->setCredential($password);

         $result = $auth->authenticate($authAdapter);

         if($result->IsValid())
         {
            $data = $authAdapter->getResultRowObject(array($this->_realmfieldname));

            if($realm == $data->{$this->_realmfieldname})
            {
               return true;
            }
            else
            {
               return false;
            }
         }
         else
            return false;
      }
      else
         return false;
   }

}


?>