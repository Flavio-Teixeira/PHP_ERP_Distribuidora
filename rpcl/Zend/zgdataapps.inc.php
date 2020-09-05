<?php

/**
 * Zend/zgdataapps.inc.php
 * 
 * Defines Zend Framework Google Apps component.
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
use_unit("Zend/framework/library/Zend/Gdata/Gapps.php");

/**
 * Component to manage Google Apps service.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.gdata.gapps.html Zend Framework Documentation
 */
class ZGDataApps extends Component
{

   // Zend Google Apps

   /**
    * Zend Framework Google Apps instance.
    *
    * @var      Zend_Gdata_Gapps
    */
   private $_gapps = null;

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Domain

   /**
    * Fully qualified domain.
    *
    * For example: 'foo.example.com'.
    *
    * @var      string
    */
   protected $_domain = '';

   /**
    * Getter method for {@link $_domain}.
    *
    * @return   string  {@link $_domain}
    */
   function getDomain()    {return $this->_domain;}

   /**
    * Setter method for {@link $_domain}.
    *
    * @param    string  $value
    */
   function setDomain($value)    {$this->_domain = $value;}

   /**
    * Getter for {@link $_domain}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDomain()    {return '';}

   // On Authentication

   /**
    * Event triggered for user authentication against Google Apps service.
    * 
    * This event is triggered as soon as this component is {@link loaded() loaded}.
    *
    * This property should either contain the name of the function to be run when the event is
    * triggered (without brackets), or be set to null.
    *
    * If the name of a function is provided, such a function should expect the following key-value
    * pairs in the parameters array, passed to the function as its second parameter:
    * <ul>
    *   <li><b>service</b>: {@link Zend_Gdata_Gapps::AUTH_SERVICE_NAME}.</li>
    *   <li><b>url</b>: {@link Zend_Gdata_Gapps::APPS_BASE_FEED_URI}.</li>
    *   <li><b>appname</b>: {@link $_applicationname}.</li>
    * </ul>
    *
    * It is also expected to return a boolean value. If true is returned, component will attempt to
    * initialize {@link $_gapps} with available data. If false is returned, {@link $_gapps} will be
    * set to null instead.
    *
    * @var      string
    */
   protected $_onauthentication = null;

   /**
    * Getter method for {@link $_onauthentication}.
    *
    * @return   string  {@link $_onauthentication}
    */
   function getOnAuthentication()    {return $this->_onauthentication;}

   /**
    * Setter method for {@link $_onauthentication}.
    *
    * @param    string  $value
    */
   function setOnAuthentication($value)    {$this->_onauthentication = $value;}

   /**
    * Getter for {@link $_onauthentication}’s default value.
    *
    * @return   string  Null
    */
   function defaultOnAuthentication()    {return null;}

   // Application Name

   /**
    * Name of your application.
    *
    * @var      string
    */
   protected $_applicationname = '';

   /**
    * Getter method for {@link $_applicationname}.
    *
    * @return   string  {@link $_applicationname}
    */
   function getApplicationName()    {return $this->_applicationname;}

   /**
    * Setter method for {@link $_applicationname}.
    *
    * @param    string  $value
    */
   function setApplicationName($value)    {$this->_applicationname = $value;}

   /**
    * Getter for {@link $_applicationname}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultApplicationName()    {return '';}

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      if($this->_onauthentication != null)
      {

         $aux = $this->callEvent('onauthentication', array('service'=>Zend_Gdata_Gapps::AUTH_SERVICE_NAME, 'url'=>Zend_Gdata_Gapps::APPS_BASE_FEED_URI, 'appname'=>$this->_applicationname));
         if($aux)
         {
            try
            {
               $this->_gapps = new Zend_Gdata_Gapps($aux, $this->_domain, $this->_applicationname);

            }
            catch(Zend_Gdata_App_Exception$e)
            {
               print_r($e->getMessage());
               exit();
            }
         }
         else
         {
            $this->_gapps = null;
         }
      }
   }

   /**
    * Creates a new user entry and send it to the Google Apps servers.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set but an error occurs during user creation, an string with the description of such an
    * error will be returned instead.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Gapps_UserEntry}.
    *
    * @param    string  $username               New user login name.
    * @param    string  $givenName              New user first name.
    * @param    string  $familyName             New user last name.
    * @param    string  $password               New user password, in plain text. It can also be a
    *                                           SHA-1 digest as long as the fifth parameter used
    *                                           when calling this method, {@link $passwordHashFunction},
    *                                           is set to 'SHA-1'.
    * @param    string  $passwordHashFunction   Optional. If {@link $password} is a SHA-1 digest
    *                                           instead of a plain text password, set this parameter
    *                                           to 'SHA-1'.
    * @param    string  $quota                  Optional. New user quota limit, in MB. For example: 
    *                                           '120'.
    * @return   boolean|string|Zend_Gdata_Gapps_UserEntry
    */
   function createUser($username, $givenName, $familyName, $password, $passwordHashFunction = null, $quota = null)
   {
      if($this->_gapps != null)
      {
         try
         {
            return $this->_gapps->createUser($username, $givenName, $familyName, $password, $passwordHashFunction, $quota);
         }
         catch(Zend_Gdata_Gapps_ServiceException$e)
         {
            if($e->hasError(Zend_Gdata_Gapps_Error::ENTITY_EXISTS))
            {
               return "User already exists!";
            }
            else
            {
               $text = '';
               foreach($e->getErrors() as $error)
               {
                  $text .= "Error encountered: {$error->getReason()} ({$error->getErrorCode()})\n";
               }
               return $text;
            }
         }
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves an user.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set but user does not exist, you will get a null value.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Gapps_UserEntry}.
    *
    * @param    string  $username                       User login name.
    * @return   boolean|Zend_Gdata_Gapps_UserEntry
    */
   function retrieveUser($username)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveUser($username);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves all users in the current domain.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false.
    *
    * Else, it will return a {@link Zend_Gdata_Gapps_UserFeed collection} of all
    * {@link Zend_Gdata_Gapps_UserEntry users} in the domain.
    *
    * If you call this method on a domain with many users, it will take a significant amount of time
    * to process the data. On large domains, you should take the necessary measures to avoid
    * timeouts.
    *
    * @return   boolean|Zend_Gdata_Gapps_UserFeed
    */
   function retrieveAllUsers()
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveAllUsers();
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a page of users in alphabetical order, starting with given user.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false.
    *
    * Else, it will return a {@link Zend_Gdata_Gapps_UserFeed collection} of all
    * {@link Zend_Gdata_Gapps_UserEntry users} in the domain from given user position, in alphabetical
    * order.
    *
    * If no argument is passed, this method will return the same value as a call to
    * {@link retrieveAllUsers()}.
    *
    * @param    string  $startUsername  Optional. First user login name.
    * @return   boolean|Zend_Gdata_Gapps_UserFeed
    */
   function retrievePageOfUsers($startUsername = null)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrievePageOfUsers($startUsername);
      }
      else
      {
         return false;
      }
   }

   /**
    * Modifies user data.
    *
    * The following keys for key-value pairs are supported on the {@link $params} array:
    * <ul>
    *   <li><b>username</b>: Login name (string).</li>
    *   <li><b>password</b>: Password in plain text (string). It can also be a SHA-1 digest as
    *                        long as <b>hash_function_name</b> is set to 'SHA-1'.</li>
    *   <li><b>hash_function_name</b>: Hash function used for password encryption, if any (string).</li>
    *   <li><b>administrator</b>: Whether this user is an administrator or not (boolean).</li>
    *   <li><b>change_password_next_login</b>: Whether or not user should be forced to change their
    *                                          password next time they log in (boolean).</li>
    *   <li><b>suspended</b>: Whether user is suspended or not (boolean).</li>
    *   <li><b>name</b>: First name (string).</li>
    *   <li><b>family_name</b>: Last name (string).</li>
    *   <li><b>quota</b>: Quota limit, in MB (string). For example: '120'.</li>
    * </ul>
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set but an error occurs during user modification, an string with the description of such an
    * error will be returned instead.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Gapps_UserEntry} for
    * modified user.
    *
    * @param    string  $username       User login name.
    * @param    array   $params         Key-value pairs to be set on given user.
    * @return   boolean|string|Zend_Gdata_Gapps_UserEntry
    */
   function modifyUser($username, $params)
   {
      if($this->_gapps != null)
      {
         $userEntry = $this->retrieveUser($username);
         $user = new Zend_Gdata_Gapps_UserEntry();
         $login = $userEntry->getLogin();

         if(isset($params['username']))
         {
            $login->setUsername($params['username']);
         }

         if(isset($params['password']))
         {
            $login->setPassword($params['password']);
         }

         if(isset($params['hash_function_name']))
         {
            $login->setHashFunctionName($params['hash_function_name']);
         }

         if(isset($params['administrator']))
         {
            $login->setAdmin($params['administrator']);
         }

         if(isset($params['change_password_next_login']))
         {
            $login->setChangePasswordAtNextLogin($params['change_password_next_login']);
         }

         if(isset($params['suspended']))
         {
            $login->setSuspended($params['suspended']);
         }

         $userEntry->setLogin($login);

         $name = $userEntry->getName();
         if(isset($params['name']))
         {
            $name->setGivenName($params['name']);
         }

         if(isset($params['family_name']))
         {
            $name->setFamilyName($params['family_name']);
         }

         $userEntry->setName($name);
         if(isset($params['quota']))
         {
            $userEntry->setQuota(new Zend_Gdata_Gapps_Extension_Quota($params['quota']));
         }

         try
         {
            return $userEntry->save();
         }
         catch(Zend_Gdata_Gapps_ServiceException$e)
         {
            if($e->hasError(Zend_Gdata_Gapps_Error::ENTITY_EXISTS))
            {
               return "User already exists!";
            }
            else
            {
               $text = '';
               foreach($e->getErrors() as $error)
               {
                  $text .= "Error encountered: {$error->getReason()} ({$error->getErrorCode()})\n";
               }
               return $text;
            }
         }

      }
      else
      {
         return false;
      }
   }

   /**
    * Marks given user as suspended.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_UserEntry}
    * for modified user.
    *
    * @param    string  $username                       User login name.
    * @return   boolean|Zend_Gdata_Gapps_UserEntry
    */
   function suspendUser($username)
   {

      if($this->_gapps != null)
      {
         return $this->_gapps->suspendUser($username);
      }
      else
      {
         return false;
      }
   }

   /**
    * Unmarks given user as suspended.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_UserEntry}
    * for modified user.
    *
    * @param    string  $username                       User login name.
    * @return   boolean|Zend_Gdata_Gapps_UserEntry
    */
   function restoreUser($username)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->restoreUser($username);
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes given user.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set, it will return nothing (void).
    *
    * @param    string  $username       User login name.
    * @return   boolean|void
    */
   function deleteUser($username)
   {
      if($this->_gapps != null)
      {
         $user = $this->retrieveUser($username);
         return $user->delete();
      }
      else
      {
         return false;
      }
   }

   /**
    * Creates a nickname for given user.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set but an error occurs during nickname creation, an string with the description of such an
    * error will be returned instead.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Gapps_NicknameEntry} for
    * given user.
    *
    * @param    string  $username       User login name.
    * @param    string  $nickname       New user nickname.
    * @return   boolean|string|Zend_Gdata_Gapps_NicknameEntry
    */
   function createNickname($username, $nickname)
   {
      if($this->_gapps != null)
      {
         try
         {
            return $this->_gapps->createNickname($username, $nickname);
         }
         catch(Zend_Gdata_Gapps_ServiceException$e)
         {
            if($e->hasError(Zend_Gdata_Gapps_Error::ENTITY_EXISTS))
            {
               return "Nickname already exists!";
            }
            else
            {
               $text = '';
               foreach($e->getErrors() as $error)
               {
                  $text .= "Error encountered: {$error->getReason()} ({$error->getErrorCode()})\n";
               }
               return $text;
            }
         }
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves given nickname.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_NicknameEntry}
    * for given nickname.
    *
    * @param    string  $nickname       Nickname.
    * @return   boolean|Zend_Gdata_Gapps_NicknameEntry
    */
   function retrieveNickname($nickname)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveNickname($nickname);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves all nicknames associated with given user.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_NicknameFeed}
    * containing nicknames for given user, or null if no nickname is set for the user.
    *
    * @param    string  $username       User login name.
    * @return   boolean|Zend_Gdata_Gapps_NicknameFeed
    */
   function retrieveNicknamesbyUsername($username)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveNicknames($username);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves all nicknames in the current domain.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false.
    *
    * Else, it will return a {@link Zend_Gdata_Gapps_NicknameFeed collection} of all
    * {@link Zend_Gdata_Gapps_NicknameEntry nicknames} in the domain.
    *
    * If you call this method on a domain with many nickname, it will take a significant amount of
    * time to process the data. On large domains, you should take the necessary measures to avoid
    * timeouts.
    *
    * @return   boolean|Zend_Gdata_Gapps_NicknameFeed
    */
   function retrieveAllNicknames()
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveAllNicknames();
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a page of nicknames in alphabetical order, starting with given nickname.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false.
    *
    * Else, it will return a {@link Zend_Gdata_Gapps_NicknameFeed collection} of all
    * {@link Zend_Gdata_Gapps_NicknameEntry nicknames} in the domain from given nickname position, in
    * alphabetical order.
    *
    * If no argument is passed, this method will return the same value as a call to
    * {@link retrieveAllNicknames()}.
    *
    * @param    string  $startNickname  Optional. First nickname.
    * @return   boolean|Zend_Gdata_Gapps_NicknameFeed
    */
   function retrievePageOfNicknames($startNickname = null)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrievePageOfNicknames($startNickname);
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes given nickname.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set, it will return nothing (void).
    *
    * @param    string  $nickname       Nickname.
    * @return   boolean|void
    */
   function deleteNickname($nickname)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->deleteNickname($nickname);
      }
      else
      {
         return false;
      }
   }

   /**
    * Creates a new mailing list.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set but an error occurs during mailing list creation, an string with the description of
    * such an error will be returned instead.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Gapps_EmailListEntry}.
    *
    * @deprecated       Groups should be used instead.
    * @see              createGroup()
    *
    * @param    string  $listName       Mailing list name.
    * @return   boolean|string|Zend_Gdata_Gapps_EmailListEntry
    */
   function createEmailList($listName)
   {
      if($this->_gapps != null)
      {
         try
         {
            return $this->_gapps->createEmailList($listName);
         }
         catch(Zend_Gdata_Gapps_ServiceException$e)
         {
            if($e->hasError(Zend_Gdata_Gapps_Error::ENTITY_EXISTS))
            {
               return "EmailList already exists!";
            }
            else
            {
               $text = '';
               foreach($e->getErrors() as $error)
               {
                  $text .= "Error encountered: {$error->getReason()} ({$error->getErrorCode()})\n";
               }
               return $text;
            }
         }
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves all mailing lists associated with given user.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_EmailListFeed}
    * containing mailing lists given user is subscribed to, or null in case user is not subscribed
    * to any mailing list.
    *
    * @deprecated       Groups should be used instead.
    * @see              retrieveGroups()
    *
    * @param    string  $username       User login name.
    * @return   boolean|Zend_Gdata_Gapps_EmailListFeed
    */
   function retrieveEmailLists($username)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveEmailLists($username);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves all mailing lists in the current domain.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false.
    *
    * Else, it will return a {@link Zend_Gdata_Gapps_EmailListFeed collection} of all
    * {@link Zend_Gdata_Gapps_EmailListEntry nicknames} in the domain.
    *
    * If you call this method on a domain with many mailing lists, it will take a significant amount
    * of time to process the data. On large domains, you should take the necessary measures to avoid
    * timeouts.
    *
    * @deprecated       Groups should be used instead.
    * @see              retrieveAllGroups()
    *
    * @return   boolean|Zend_Gdata_Gapps_EmailListFeed
    */
   function retrieveAllEmailLists()
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveAllEmailLists();
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a page of mailing lists in alphabetical order, starting with given mailing list.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false.
    *
    * Else, it will return a {@link Zend_Gdata_Gapps_EmailListFeed collection} of all
    * {@link Zend_Gdata_Gapps_EmailListEntry mailing lists} in the domain from given mailing list
    * position, in alphabetical order.
    *
    * If no argument is passed, this method will return the same value as a call to
    * {@link retrieveAllEmailLists()}.
    *
    * @deprecated       Groups should be used instead.
    * @see              retrievePageOfGroups()
    *
    * @param    string  $startEmailListName     Optional. First mailing list.
    * @return   boolean|Zend_Gdata_Gapps_EmailListFeed
    */
   function retrievePageOfEmailLists($startEmailListName = null)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrievePageOfEmailLists($startEmailListName = null);
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes given mailing list.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set, it will return nothing (void).
    *
    * @deprecated       Groups should be used instead.
    * @see              deleteGroup()
    *
    * @param    string  $emailList      Mailing list.
    * @return   boolean|void
    */
   function deleteEmailList($emailList)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->deleteEmailList($emailList);
      }
      else
      {
         return false;
      }
   }

   /**
    * Adds a recipient to a mailing list.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set but an error occurs during the association between recipient and mailing list, a
    * string with the description of such an error will be returned instead.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Gapps_EmailListRecipientEntry}
    * for given recipient.
    *
    * @deprecated       Groups should be used instead.
    * @see              addMemberToGroup()
    *
    * @param    string  $recipientAddress       Recipient address.
    * @param    string  $emailList              Mailing list name.
    * @return   boolean|string|Zend_Gdata_Gapps_EmailListRecipientEntry
    */
   function addRecipientToEmailList($recipientAddress, $emailList)
   {
      if($this->_gapps != null)
      {
         try
         {
            return $this->_gapps->addRecipientToEmailList($recipientAddress, $emailList);
         }
         catch(Zend_Gdata_Gapps_ServiceException$e)
         {
            if($e->hasError(Zend_Gdata_Gapps_Error::ENTITY_EXISTS))
            {
               return "Recipient already exists into emaillist!";
            }
            else
            {
               $text = '';
               foreach($e->getErrors() as $error)
               {
                  $text .= "Error encountered: {$error->getReason()} ({$error->getErrorCode()})\n";
               }
               return $text;
            }
         }
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves all recipients associated with given mailing list.
    *
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_EmailListRecipientFeed}
    * containing {@link Zend_Gdata_Gapps_EmailListRecipientEntry recipients} for given mailing list,
    * or null if no recipient is set.
    *
    * @deprecated       Groups should be used instead.
    * @see              retrieveAllMembers()
    *
    * @param    string  $emailList      Mailing list name.
    * @return   boolean|Zend_Gdata_Gapps_EmailListRecipientFeed
    */
   function retrieveAllRecipients($emailList)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveAllRecipients($emailList);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a page of mailing list recipients in alphabetical order, starting with given
    * recipient.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false.
    *
    * Else, it will return a {@link Zend_Gdata_Gapps_EmailListRecipientFeed collection} of all
    * {@link Zend_Gdata_Gapps_EmailListRecipientEntry recipients} in the domain from given recipient
    * position, in alphabetical order.
    *
    * If {@link $startRecipient} argument is not passed, this method will return the same value as a
    * call to {@link retrieveAllRecipients()}.
    *
    * @deprecated       Groups should be used instead.
    * @see              retrievePageOfMembers()
    *
    * @param    string  $emailList      Mailing list name.
    * @param    string  $startRecipient Optional. First recipient mail address.
    * @return   boolean|Zend_Gdata_Gapps_EmailListRecipientFeed
    */
   function retrievePageOfRecipients($emailList, $startRecipient = null)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrievePageOfRecipients($emailList, $startRecipient);
      }
      else
      {
         return false;
      }
   }
   /**
    * Removes given recipient from given mailing list.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set, it will return nothing (void).
    *
    * @deprecated       Groups should be used instead.
    * @see              removeMemberFromGroup()
    *
    * @param    string  $recipientAddress       Recipient mail address.
    * @param    string  $emailList              Mailing list name.
    * @return   boolean|void
    */
   function removeRecipientFromEmailList($recipientAddress, $emailList)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->removeRecipientFromEmailList($recipientAddress, $emailList);
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes {@link Zend_Gdata_Gapps} instance.
    *
    * Sets {@link $_gapps} to null.
    */
   function deleteObject()
   {
      $this->_gapps = null;
   }

   /**
    * Creates a new group.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_GroupEntry}
    * for created group.
    *
    * @param    string  $groupId                Group unique identifier.
    * @param    string  $title                  Group name.
    * @param    string  $description            Group description.
    * @param    string  $emailPermission        Group subscription permission.
    * @return   boolean|Zend_Gdata_Gapps_GroupEntry
    */
   function createGroup($groupId, $title, $description=null, $emailPermission=null)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->createGroup($groupId, $title, $description, $emailPermission);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a group.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_GroupEntry}
    * for given group identifier.
    *
    * @param    string  $groupId        Group identifier.
    * @return   boolean|Zend_Gdata_Gapps_GroupEntry
    */
   function retrieveGroup($groupId)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveGroup($groupId);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves all groups in the current domain.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false.
    *
    * Else, it will return a {@link Zend_Gdata_Gapps_GroupFeed collection} of all
    * {@link Zend_Gdata_Gapps_GroupEntry groups} in the domain.
    *
    * If you call this method on a domain with many groups, it will take a significant amount of
    * time to process the data. On large domains, you should take the necessary measures to avoid
    * timeouts.
    *
    * @return   boolean|Zend_Gdata_Gapps_GroupFeed
    */
   function retrieveAllGroups()
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveAllGroups();
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes a group.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set, it will return nothing (void).
    *
    * @param    string  $groupId        Group identifier.
    * @return   boolean|void
    */
   function deleteGroup($groupId)
   {
      if($this->_gapps != null)
      {
         $group= $this->retrieveGroup($groupId);
         return $group->delete();
      }
      else
      {
         return false;
      }
   }

   /**
    * Checks if given user or group is member of given group.
    * 
    * If {@link $_gapps} is not set (is null) or given user or group is not member of given group,
    * this method will return false. Else, it will return true.
    *
    * @param    string  $memberId       Member or group identifier.
    * @param    string  $groupId        Group identifier.
    * @return   boolean
    */
   function isMember($memberId, $groupId)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->isMember($memberId, $groupId);
      }
      else
      {
         return false;
      }
   }

   /**
    * Adds a group member.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. 
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Gapps_MemberEntry} for
    * given member.
    *
    * @param    string  $recipientAddress       Email address, member identifier, or group identifier.
    * @param    string  $groupId                Target group identifier.
    * @return   boolean|Zend_Gdata_Gapps_MemberEntry
    */
   function addMemberToGroup($recipientAddress, $groupId)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->addMemberToGroup($recipientAddress, $groupId);
      }
      else
      {
         return false;
      }
   }

   /**
    * Removes a group member.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set, it will return nothing (void).
    *
    * @param    string  $memberId       Member or group identifier.
    * @param    string  $groupId        Group identifier.
    * @return   boolean|void
    */
   function removeMemberFromGroup($memberId, $groupId)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->removeMemberFromGroup($memberId, $groupId);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves all members of given group.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_MemberFeed}
    * containing {@link Zend_Gdata_Gapps_MemberEntry members} of given group, or null if group has
    * no members.
    *
    * @param    string  $groupId        Group identifier.
    * @return   boolean|Zend_Gdata_Gapps_MemberFeed
    */
   function retrieveAllMembers($groupId)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveAllMembers($groupId);
      }
      else
      {
         return false;
      }
   }

   /**
    * Adds given email address as given group’s owner.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_OwnerEntry}
    * for given owner.
    *
    * @param    string  $email          Owner’s email address.
    * @param    string  $groupId        Group identifier.
    * @return   boolean|Zend_Gdata_Gapps_OwnerEntry
    */
   function addOwnerToGroup($email, $groupId)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->addOwnerToGroup($email, $groupId);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves all owners of given group.
    *
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_OwnerFeed}
    * containing {@link Zend_Gdata_Gapps_OwnerEntry owners} of given group.
    *
    * @param    string  $groupId        Group identifier.
    * @return   boolean|Zend_Gdata_Gapps_OwnerFeed
    */
   function retrieveGroupOwners($groupId)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveGroupOwners($groupId);
      }
      else
      {
         return false;
      }
   }

   /**
    * Checks whether given email address is an owner of given group or not.
    * 
    * If {@link $_gapps} is not set (is null) or given email address does not belong to an owner of
    * given group, this method will return false. Else, it will return true.
    *
    * @param    string  $email          Email address.
    * @param    string  $groupId        Group identifier.
    * @return   boolean
    */
   function isOwner($email, $groupId)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->isOwner($email, $groupId);
      }
      else
      {
         return false;
      }
   }

   /**
    * Removes given email address as owner of given group.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set, it will return nothing (void).
    *
    * @param    string  $email          Email address.
    * @param    string  $groupId        Group identifier.
    * @return   boolean|void
    */
   function removeOwnerFromGroup($email, $groupId)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->removeOwnerFromGroup($email, $groupId);
      }
      else
      {
         return false;
      }
   }

   /**
    * Modifies group data.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_GroupEntry}
    * for modified group.
    *
    * Group identifier can not be modified.
    *
    * @param    string  $groupId                Group identifier.
    * @param    string  $groupName              Group name.
    * @param    string  $description            Group description.
    * @param    string  $emailPermission        Group subscription permission.
    * @return   boolean|Zend_Gdata_Gapps_GroupEntry
    */
   function updateGroup($groupId, $groupName = null, $description = null, $emailPermission = null)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->updateGroup($groupId, $groupName, $description, $emailPermission);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves all groups given user is member of.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false. If it
    * is set and everything works, you will get an instance of {@link Zend_Gdata_Gapps_GroupFeed}
    * containing groups given user is member of, or null in case user is not a member of any group.
    *
    * @param    string  $memberId       User login name.
    * @param    boolean $directOnly     Optional. If true, only groups user is directly member of
    *                                   will be considered.
    * @return   boolean|Zend_Gdata_Gapps_GroupFeed
    */
   function retrieveGroups($memberId, $directOnly = null)
   {

      if($this->_gapps != null)
      {
         return $this->_gapps->retrieveGroups($memberId, $directOnly);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a page of groups in alphabetical order, starting with given group.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false.
    *
    * Else, it will return a {@link Zend_Gdata_Gapps_GroupFeed collection} of all
    * {@link Zend_Gdata_Gapps_GroupEntry groups} in the domain from given group position, in
    * alphabetical order.
    *
    * If no argument is passed, this method will return the same value as a call to
    * {@link retrieveAllGroups()}.
    *
    * @param    string  $startGroup     Optiona. First group.
    * @return   boolean|Zend_Gdata_Gapps_GroupFeed
    * @throws   Zend_Gdata_App_Exception
    * @throws   Zend_Gdata_App_HttpException
    * @throws   Zend_Gdata_Gapps_ServiceException
    */
   function retrievePageOfGroups($startGroup = null)
   {
      if($this->_gapps != null)
      {
         return $this->_gapps->retrievePageOfGroups($startGroup);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a page of group members in alphabetical order, starting with given member.
    * 
    * If {@link $_gapps} is not set (is null), this method will return a boolean value, false.
    *
    * Else, it will return a {@link Zend_Gdata_Gapps_MemberFeed collection} of all
    * {@link Zend_Gdata_Gapps_MemberEntry members} in the domain from given member position, in 
    * alphabetical order.
    *
    * If {@link $startMember} argument is not passed, this method will return the same value as a
    * call to {@link retrieveAllMembers()}.
    *
    * @param    string  $groupId        Group identifier.
    * @param    string  $startMember    Optiona. First member email address.
    * @return   boolean|Zend_Gdata_Gapps_MemberFeed
    */
   function retrievePageOfMembers($groupId, $startMember = null)
   {
      if($this->_gapps != null)
      {

         return $this->_gapps->retrievePageOfMembers($groupId, $startMember);
      }
      else
      {
         return false;
      }
   }
}

?>