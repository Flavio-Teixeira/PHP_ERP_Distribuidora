<?php

/**
 * Zend/zopenidconsumer.inc.php
 * 
 * Defines Zend Framework OpenID Consumer component.
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
use_unit("Zend/framework/library/Zend/OpenId/Consumer.php");
use_unit("Zend/framework/library/Zend/OpenId/Extension/Sreg.php");

// Field Status

/**
 * Optional field.
 * 
 * @const       srcOptional
 */
define('srcOptional', 'srcOptional');

/**
 * Required field.
 * 
 * @const       srcRequired
 */
define('srcRequired', 'srcRequired');

/**
 * Disabled field.
 * 
 * @const       srcDisable
 */
define('srcDisable', 'srcDisable');

/**
 * Registration data for {@link ZOpenIdConsumer} to request to the OpenID provider.
 *
 * @package     ZendFramework
 */
class ConsumerSimpleRegistrationOptions extends Persistent
{

   // Owner

   /**
    * Owner.
    *
    * @var      ZOpenIdConsumer
    */
   protected $oisro = null;

   /**
    * {@inheritdoc}
    *
    * @return   ZOpenIdConsumer
    */
   function readOwner()
   {
      return ($this->oisro);
   }

   // Constructor

   /**
    * Class constructor.
    *
    * @param    ZOpenIdConsumer $aowner {@link ZOpenIdConsumer Owner}.
    */
   function __construct($aowner)
   {
      parent::__construct();

      $this->oisro = $aowner;
   }

   // Nickname

   /**
    * Nickname.
    *
    * Possible values are: {@link srcDisable}, {@link srcOptional}, or {@link srcRequired}.
    *
    * @var      string
    */
   protected $_nickname = srcDisable;

   /**
    * Getter method for {@link $_nickname}.
    *
    * @return   string  {@link $_nickname}
    */
   function getNickname()    {return $this->_nickname;}

   /**
    * Setter method for {@link $_nickname}.
    *
    * @param    string  $value
    */
   function setNickname($value)    {$this->_nickname = $value;}

   /**
    * Getter for {@link $_nickname}’s default value.
    *
    * @return   string  {@link srcDisable}
    */
   function defaultNickname()    {return srcDisable;}

   // Email

   /**
    * Email address.
    *
    * Possible values are: {@link srcDisable}, {@link srcOptional}, or {@link srcRequired}.
    *
    * @var      string
    */
   protected $_email = srcDisable;

   /**
    * Getter method for {@link $_email}.
    *
    * @return   string  {@link $_email}
    */
   function getEmail()    {return $this->_email;}

   /**
    * Setter method for {@link $_email}.
    *
    * @param    string  $value
    */
   function setEmail($value)    {$this->_email = $value;}

   /**
    * Getter for {@link $_email}’s default value.
    *
    * @return   string  {@link srcDisable}
    */
   function defaultEmail()    {return srcDisable;}

   // Fullname.

   /**
    * Full name.
    *
    * Possible values are: {@link srcDisable}, {@link srcOptional}, or {@link srcRequired}.
    *
    * @var      string
    */
   protected $_fullname = srcDisable;

   /**
    * Getter method for {@link $_fullname}.
    *
    * @return   string  {@link $_fullname}
    */
   function getFullName()    {return $this->_fullname;}

   /**
    * Setter method for {@link $_fullname}.
    *
    * @param    string  $value
    */
   function setFullName($value)    {$this->_fullname = $value;}

   /**
    * Getter for {@link $_fullname}’s default value.
    *
    * @return   string  {@link srcDisable}
    */
   function defaultFullName()    {return srcDisable;}

   // Birthday

   /**
    * Birthday.
    *
    * Possible values are: {@link srcDisable}, {@link srcOptional}, or {@link srcRequired}.
    *
    * @var      string
    */
   protected $_dateofbirth = srcDisable;

   /**
    * Getter method for {@link $_dateofbirth}.
    *
    * @return   string  {@link $_dateofbirth}
    */
   function getDateOfBirth()    {return $this->_dateofbirth;}

   /**
    * Setter method for {@link $_dateofbirth}.
    *
    * @param    string  $value
    */
   function setDateOfBirth($value)    {$this->_dateofbirth = $value;}

   /**
    * Getter for {@link $_dateofbirth}’s default value.
    *
    * @return   string  {@link srcDisable}
    */
   function defaultDateOfBirth()    {return srcDisable;}

   // Gender

   /**
    * Gender.
    *
    * Possible values are: {@link srcDisable}, {@link srcOptional}, or {@link srcRequired}.
    *
    * @var      string
    */
   protected $_gender = srcDisable;

   /**
    * Getter method for {@link $_gender}.
    *
    * @return   string  {@link $_gender}
    */
   function getGender()    {return $this->_gender;}

   /**
    * Setter method for {@link $_gender}.
    *
    * @param    string  $value
    */
   function setGender($value)    {$this->_gender = $value;}

   /**
    * Getter for {@link $_gender}’s default value.
    *
    * @return   string  {@link srcDisable}
    */
   function defaultGender()    {return srcDisable;}

   // Postal Code

   /**
    * Postal code.
    *
    * Possible values are: {@link srcDisable}, {@link srcOptional}, or {@link srcRequired}.
    *
    * @var      string
    */
   protected $_postcode = srcDisable;

   /**
    * Getter method for {@link $_postcode}.
    *
    * @return   string  {@link $_postcode}
    */
   function getPostcode()    {return $this->_postcode;}

   /**
    * Setter method for {@link $_postcode}.
    *
    * @param    string  $value
    */
   function setPostcode($value)    {$this->_postcode = $value;}

   /**
    * Getter for {@link $_postcode}’s default value.
    *
    * @return   string  {@link srcDisable}
    */
   function defaultPostcode()    {return srcDisable;}

   // Country

   /**
    * Country.
    *
    * Possible values are: {@link srcDisable}, {@link srcOptional}, or {@link srcRequired}.
    *
    * @var      string
    */
   protected $_country = srcDisable;

   /**
    * Getter method for {@link $_country}.
    *
    * @return   string  {@link $_country}
    */
   function getCountry()    {return $this->_country;}

   /**
    * Setter method for {@link $_country}.
    *
    * @param    string  $value
    */
   function setCountry($value)    {$this->_country = $value;}

   /**
    * Getter for {@link $_country}’s default value.
    *
    * @return   string  {@link srcDisable}
    */
   function defaultCountry()    {return srcDisable;}

   // Language

   /**
    * Language.
    *
    * Possible values are: {@link srcDisable}, {@link srcOptional}, or {@link srcRequired}.
    *
    * @var      string
    */
   protected $_language = srcDisable;

   /**
    * Getter method for {@link $_language}.
    *
    * @return   string  {@link $_language}
    */
   function getLanguage()    {return $this->_language;}

   /**
    * Setter method for {@link $_language}.
    *
    * @param    string  $value
    */
   function setLanguage($value)    {$this->_language = $value;}

   /**
    * Getter for {@link $_language}’s default value.
    *
    * @return   string  {@link srcDisable}
    */
   function defaultLanguage()    {return srcDisable;}

   // Timezone

   /**
    * Timezone.
    *
    * Possible values are: {@link srcDisable}, {@link srcOptional}, or {@link srcRequired}.
    *
    * @var      string
    */
   protected $_timezone = srcDisable;

   /**
    * Getter method for {@link $_timezone}.
    *
    * @return   string  {@link $_timezone}
    */
   function getTimezone()    {return $this->_timezone;}

   /**
    * Setter method for {@link $_timezone}.
    *
    * @param    string  $value
    */
   function setTimezone($value)    {$this->_timezone = $value;}

   /**
    * Getter for {@link $_timezone}’s default value.
    *
    * @return   string  {@link srcDisable}
    */
   function defaultTimezone()    {return srcDisable;}

   /**
    * Returns registration data to request to OpenID provider.
    *
    * If no field is enabled, by setting it to either {@link srcOptional} or {@link srcRequired}
    * values, this method will return null.
    *
    * @return   Zend_OpenId_Extension_Sreg
    */
   function returnOptions()
   {
      $data = array();

      switch($this->_nickname)
      {
         case srcOptional:
            $data['nickname'] = false;
            break;

         case srcRequired:
            $data['nickname'] = true;
            break;
      }

      switch($this->_email)
      {
         case srcOptional:
            $data['email'] = false;
            break;

         case srcRequired:
            $data['email'] = true;
            break;
      }

      switch($this->_fullname)
      {
         case srcOptional:
            $data['fullname'] = false;
            break;

         case srcRequired:
            $data['fullname'] = true;
            break;
      }

      switch($this->_dateofbirth)
      {
         case srcOptional:
            $data['dob'] = false;
            break;

         case srcRequired:
            $data['dob'] = true;
            break;
      }

      switch($this->_gender)
      {
         case srcOptional:
            $data['gender'] = false;
            break;

         case srcRequired:
            $data['gender'] = true;
            break;
      }

      switch($this->_postcode)
      {
         case srcOptional:
            $data['postcode'] = false;
            break;

         case srcRequired:
            $data['postcode'] = true;
            break;
      }

      switch($this->_country)
      {
         case srcOptional:
            $data['country'] = false;
            break;

         case srcRequired:
            $data['country'] = true;
            break;
      }

      switch($this->_language)
      {
         case srcOptional:
            $data['language'] = false;
            break;

         case srcRequired:
            $data['language'] = true;
            break;
      }

      switch($this->_timezone)
      {
         case srcOptional:
            $data['timezone'] = false;
            break;

         case srcRequired:
            $data['timezone'] = true;
            break;
      }

      if(count($data) != 0)
      {
         return new Zend_OpenId_Extension_Sreg($data, null, 1.1);
      }
      else
      {
         return null;
      }
   }
}

/**
 * Component to authenticate user through OpenID.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.openid.consumer.html Zend Framework Documentation
 */
class ZOpenIdConsumer extends Component
{

   /**
    * Zend Framework OpenID Consumer instance.
    *
    * @var      Zend_OpenId_Consumer
    */
   private $_consumer = null;

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_simpleregistrationoptions = new ConsumerSimpleRegistrationOptions($this);
   }

   // Next URL

   /**
    * URL that performs the third step of OpenID authentication.
    *
    * Check {@link http://framework.zend.com/manual/en/zend.openid.consumer.html#zend.openid.consumer.authentication Zend Framework Documentation}
    * for additional information.
    *
    * @var      string
    */
   protected $_nexturl = '';

   /**
    * Getter method for {@link $_nexturl}.
    *
    * @return   string  {@link $_nexturl}
    */
   function getNextUrl()    {return $this->_nexturl;}

   /**
    * Setter method for {@link $_nexturl}.
    *
    * @param    string  $value
    */
   function setNextUrl($value)    {$this->_nexturl = $value;}

   /**
    * Getter for {@link $_nexturl}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultNextUrl()    {return '';}

   // OnIdentify

   /**
    * Event to set a valid OpenID identity (username) for authentication.
    * 
    * This event is <b>triggered</b> upon component load.
    *
    * This property should either contain the name of the function to be run when the event is
    * triggered (without brackets), or be set to null.
    *
    * The event should then return the identity user will log in with on their OpenID provider.
    *
    * @var      string
    */
   protected $_onidentify = null;

   /**
    * Getter method for {@link $_onidentify}.
    *
    * @return   string  {@link $_onidentify}
    */
   function getOnIdentify()    {return $this->_onidentify;}

   /**
    * Setter method for {@link $_onidentify}.
    *
    * @param    string  $value
    */
   function setOnIdentify($value)    {$this->_onidentify = $value;}

   /**
    * Getter for {@link $_onidentify}’s default value.
    *
    * @return   string  Null
    */
   function defaultOnIdentify()    {return null;}

   // Immediate Login

   /**
    * Whether to call {@link Zend_OpenId_Consumer::login()} ('true') when logging in or to call
    * {@link Zend_OpenId_Consumer::check()} ('false') instead.
    *
    * @var      string
    */
   protected $_inmediatelogin = 'true';

   /**
    * Getter method for {@link $_inmediatelogin}.
    *
    * @return   string  {@link $_inmediatelogin}
    */
   function getInmediateLogin()    {return $this->_inmediatelogin;}

   /**
    * Setter method for {@link $_inmediatelogin}.
    *
    * @param    string  $value
    */
   function setInmediateLogin($value)    {$this->_inmediatelogin = $value;}

   /**
    * Getter for {@link $_inmediatelogin}’s default value.
    *
    * @return   string  Login with {@link Zend_OpenId_Consumer::login()} ('true')
    */
   function defaultInmediateLogin()    {return 'true';}

   // Status

   /**
    * Authentication status.
    *
    * Possible values are: 'cancel', 'valid', or 'invalid'.
    *
    * @var      string
    */
   protected $_status = '';

   /**
    * Getter method for {@link $_status}.
    *
    * @return   string  {@link $_status}
    */
   function readstatus()    {return $this->_status;}

   /**
    * Setter method for {@link $_status}.
    *
    * @param    string  $value
    */
   function writestatus($value)    {$this->_status = $value;}

   /**
    * Getter for {@link $_status}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultstatus()    {return '';}

   // Simple registration Options

   /**
    * Fields to request from the OpenID provider.
    *
    * @var      ConsumerSimpleRegistrationOptions
    */
   protected $_simpleregistrationoptions = null;

   /**
    * Getter method for {@link $_simpleregistrationoptions}.
    *
    * @return   ConsumerSimpleRegistrationOptions       {@link $_simpleregistrationoptions}
    */
   function getSimpleRegistrationOptions()    {return $this->_simpleregistrationoptions;}

   /**
    * Setter method for {@link $_simpleregistrationoptions}.
    *
    * @param    ConsumerSimpleRegistrationOptions       $value
    */
   function setSimpleRegistrationOptions($value)    {if(is_object($value))        {$this->_simpleregistrationoptions = $value;}}

   /**
    * Getter for {@link $_simpleregistrationoptions}’s default value.
    *
    * @return   ConsumerSimpleRegistrationOptions       Null
    */
   function defaultSimpleRegistrationOptions()    {return null;}

   // Simple Registration Data

   /**
    * Fields to request from the OpenID provider.
    *
    * @var      array
    */
   protected $_simpleregistrationdata = array();

   /**
    * Getter method for {@link $_simpleregistrationdata}.
    *
    * @return   array   {@link $_simpleregistrationdata}
    */
   function readSimpleRegistrationData()    {return $this->_simpleregistrationdata;}

   /**
    * Setter method for {@link $_simpleregistrationdata}.
    *
    * @param    array   $value
    */
   function writeSimpleRegistrationData($value)    {$this->_simpleregistrationdata = $value;}

   /**
    * Getter for {@link $_simpleregistrationdata}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultSimpleRegistrationData()    {return array();}

   // Generator Name

   /**
    * OpenID Consumer Storage.
    *
    * @var      ZOpenIdConsumerStorage
    */
   protected $_openidconsumerstorage = null;

   /**
    * Getter method for {@link $_openidconsumerstorage}.
    *
    * @return   ZOpenIdConsumerStorage  {@link $_openidconsumerstorage}
    */
   function getOpenIdConsumerStorage()    {return $this->_openidconsumerstorage;}

   /**
    * Setter method for {@link $_openidconsumerstorage}.
    *
    * @param    ZOpenIdConsumerStorage  $value
    */
   function setOpenIdConsumerStorage($value)    {$this->_openidconsumerstorage = $this->fixupProperty($value);}

   /**
    * Getter for {@link $_openidconsumerstorage}’s default value.
    *
    * @return   ZOpenIdConsumerStorage  Null
    */
   function defaultOpenIdConsumerStorage()    {return null;}

   // Loaded

   /**
    * {@inheritdoc}
    *
    * @throws    Exception      These are the possible causes for such an exception:
    *                           <ul>
    *                             <li>OpenID provider identifier was not defined.</li>
    *                             <li>You must define {@link $_onidentify} event.</li>
    *                             <li>OpenID consumer storage was not defined.</li>
    *                           </ul>
    */
   function loaded()
   {
      parent::loaded();
      $this->setOpenIdConsumerStorage($this->_openidconsumerstorage);

      if($this->_openidconsumerstorage != null)
      {

         if($this->_onidentify != null)
         {
            $name = $this->callEvent('onidentify', array());
            $options = $this->_simpleregistrationoptions->returnOptions();

            if($name != '')
            {
               $storage = $this->_openidconsumerstorage->CreateStorage();
               $this->_consumer = new Zend_OpenId_Consumer($storage);
               if( ! isset($_GET['openid_mode']))
               {
                  if($this->_inmediatelogin == 'true' || $this->_inmediatelogin == 1)
                  {
                     print_r($this->_consumer->login($name, $this->_nexturl, null, $options));
                  }
                  else
                  {
                     print_r($this->_consumer->check($name, $this->_nexturl, null, $options));
                  }
               }
               else
               {
                  switch($_GET['openid_mode'])
                  {
                     case 'cancel':
                        $this->_status = 'cancel';
                        break;
                     case 'id_res':
                        if(isset($_GET['openid_user_setup_url']))
                        {
                           $url = $_GET['openid_user_setup_url'];
                           Zend_OpenId::redirect($url);
                        }

                        if($this->_consumer->verify($_GET, $id, $options))
                        {
                           $this->_status = 'valid';

                           if(isset($options))
                           {
                              $this->_simpleregistrationdata = $options->getProperties();
                           }
                        }
                        else
                        {
                           $this->_status = 'invalid';
                        }

                        break;
                     case 'setup_needed':
                        $url = $_GET['openid_user_setup_url'];
                        Zend_OpenId::redirect($url);
                        break;
                  }
               }
            }
            else
            {
               throw new Exception('Define your id of OpenId provider');
            }
         }
         else
         {
            throw new Exception('OnIdentify is needed for OpenId Consumer to work');
         }
      }
      else
      {
         throw new Exception('An storage is needed for OpenId Consumer to work');
      }
   }

   /**
    * Returns any error occurred during OpenID authentication.
    *
    * @return   array
    */
   function returnError()
   {
      return $this->_consumer->getError();
   }
}

?>