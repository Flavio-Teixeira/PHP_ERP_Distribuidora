<?php

/**
 * Zend/zgdatahealth.inc.php
 * 
 * Defines Zend Framework Google Health component.
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
use_unit("Zend/framework/library/Zend/Gdata/Health.php");
use_unit("Zend/framework/library/Zend/Gdata/Health/Query.php");

/**
 * Component to access Google Health service profile.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.gdata.health.html Zend Framework Documentation
 */
class ZGDataHealth extends Component
{

   // Zend Framework Google Health

   /**
    * Zend Framework Google Health instance.
    *
    * @var      Zend_Gdata_Health
    */
   private $_health = null;

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

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

   // Sandbox

   /**
    * Whether or not to use h9 service (Developer Sandbox).
    *
    * If set to false ('false'), Health service (production) will be used instead.
    *
    * @var      string
    */
   protected $_sandbox = 'true';

   /**
    * Getter method for {@link $_sandbox}.
    *
    * @return   string  {@link $_sandbox}
    */
   function getSandbox()    {return $this->_sandbox;}

   /**
    * Setter method for {@link $_sandbox}.
    *
    * @param    string  $value
    */
   function setSandbox($value)    {$this->_sandbox = $value;}

   /**
    * Getter for {@link $_sandbox}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultSandbox()    {return 'true';}

   // Private Key File

   /**
    * Path to private key file.
    *
    * It is used to encrypt communications with Health services, and is only necessary when
    * {@link $_sandbox} is set to false ('false').
    *
    * @var      string
    */
   protected $_privatekeyfile = '';

   /**
    * Getter method for {@link $_privatekeyfile}.
    *
    * @return   string  {@link $_privatekeyfile}
    */
   function getPrivateKeyFile()    {return $this->_privatekeyfile;}

   /**
    * Setter method for {@link $_privatekeyfile}.
    *
    * @param    string  $value
    */
   function setPrivateKeyFile($value)    {$this->_privatekeyfile = $value;}

   /**
    * Getter for {@link $_privatekeyfile}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultPrivateKeyFile()    {return '';}

   // On Authentication

   /**
    * Event triggered for user authentication against Google Health service.
    * 
    * This event is triggered as soon as this component is {@link loaded() loaded}.
    *
    * This property should either contain the name of the function to be run when the event is
    * triggered (without brackets), or be set to null.
    *
    * If the name of a function is provided, such a function should expect the following key-value
    * pairs in the parameters array, passed to the function as its second parameter:
    * <ul>
    *   <li><b>service</b>: {@link Zend_Gdata_Health::HEALTH_SERVICE_NAME}.</li>
    *   <li><b>url</b>: 'https://www.google.com/health/feeds'.</li>
    *   <li><b>authSub</b>: 'https://www.google.com/health/authsub'.</li>
    *   <li><b>privateKey</b>: {@link $_privatekeyfile}. This pair is only present if {@link $_sandbox} is set to false ('false').</li>
    *   <li><b>appname</b>: {@link $_applicationname}.</li>
    * </ul>
    *
    * It is also expected to return a boolean value. If true is returned, component will initialize
    * {@link $_health}. Else, it will do nothing.
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

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      if($this->_onauthentication != null)
      {
         if($this->_sandbox == 'true' || $this->_sandbox == 1)
         {
            $aux = $this->callEvent('onauthentication', array('service'=>Zend_Gdata_Health::H9_SANDBOX_SERVICE_NAME, 'url'=>'https://www.google.com/h9/feeds', 'authSub'=>'https://www.google.com/h9/authsub','appname'=>$this->_applicationname));
         }
         else
         {
            $aux = $this->callEvent('onauthentication', array('service'=>Zend_Gdata_Health::HEALTH_SERVICE_NAME, 'url'=>'https://www.google.com/health/feeds', 'authSub'=>'https://www.google.com/health/authsub', 'privateKey'=>$this->_privatekeyfile,'appname'=>$this->_applicationname));
         }

         if($aux)
         {
            if($this->_sandbox == 'true' || $this->_sandbox == 1)
            {
               $this->_health = new Zend_Gdata_Health($aux, $this->_applicationname, true);

            }
            else
            {
               $this->_health = new Zend_Gdata_Health($aux,$this->_applicationname);
            }

         }
      }
   }

   /**
    * Retrieves a user health profile.
    *
    * Only parameter is a key-value array with the following optional pairs:
    * <ul>
    *   <li><b>profileID</b>: Profile identifier (string).</li>
    *   <li><b>digest</b>: Whether or not to return content of all entries into a single CCR entry (boolean).</li>
    *   <li><b>grouped</b>: Whether or not to return a count of results per group (boolean).</li>
    *   <li><b>max_results_group</b>: Maximum number of groups to be retrieved (integer).</li>
    *   <li><b>max_results_in_group</b>: Maximum number of records to be retrieved from each group (integer).</li>
    *   <li><b>start_index_group</b>: Retrieves only items whose group ranking is at least given value (integer).</li>
    *   <li><b>start_index_in_group</b>: Is a 1-based index of the records to be retrieved from each group.</li>
    *   <li><b>category</b>: CCR category (string).</li>
    *   <li><b>name_category</b>: Item category (string).</li>
    * </ul>
    * 
    * If {@link $_health} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Health_ProfileFeed}.
    * 
    * @param    array   $params Parameters.
    * @return   boolean|Zend_Gdata_Health_ProfileFeed
    */
   function retrieveProfile($params)
   {
      if($this->_health != null)
      {
         $query = new Zend_Gdata_Health_Query();

         if(isset($params['profileID']))
         {
            $this->_health->setProfileID($params['profileID']);
            $url = Zend_Gdata_Health::CLIENTLOGIN_PROFILE_FEED_URI . '/' . $params['profileID'];
         }
         if(isset($params['digest']))
         {
            $query->setDigest($params['digest']);
         }

         if(isset($params['grouped']))
         {
            $query->setGrouped($params['grouped']);
         }

         if(isset($params['start_index_group']))
         {
            $query->setStartIndexGroup($params['start_index_group']);
         }

         if(isset($params['start_index_in_group']))
         {
            $query->setStartIndexInGroup($params['start_index_in_group']);
         }

         if(isset($params['max_result_in_group']))
         {
            $query->setMaxResultInGroup($params['max_result_in_group']);
         }

         if(isset($params['max_results_group']))
         {
            $query->setMaxResultsGroup($params['max_results_group']);
         }

         if(isset($params['category']))
         {
            $name=null;
            if(isset($params['name_category']))
            {
                $name=$params['name_category'];
            }
            $query->setCategory($params['category'],$name);
         }

         $string = $query->getQueryString();
         if($string != '')
         {
            $url .= $string;
            return $this->_health->getHealthProfileFeed($url);
         }
         else
         {
            return $this->_health->getHealthProfileFeed();
         }

      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves user health profiles.
    * 
    * If {@link $_health} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Health_ProfileListFeed}.
    *
    * @return boolean|Zend_Gdata_Health_ProfileListFeed
    */
   function retrieveProfileList()
   {
      if($this->_health != null)
      {
         return $this->_health->getHealthProfileListFeed();
      }
      else
      {
         return false;
      }
   }

   /**
    * Sends a notice to a profile.
    * 
    * If {@link $_health} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Health_ProfileEntry}.
    *
    * @param    string  $profileID      Profile identifier.
    * @param    string  $subject        Notice subject.
    * @param    string  $body           Notice body.
    * @param    string  $ccr            Notice CCR.
    * @return   boolean|Zend_Gdata_Health_ProfileEntry
    */
   function sendHealthNotice($profileID, $subject, $body, $ccr = '')
   {
      if($this->_health != null)
      {
         $this->_health->setProfileID($profileID);
         if($ccr == '')
         {

            return $this->_health->sendHealthNotice($subject, $body);
         }
         else
         {
            return $this->_health->sendHealthNotice($subject, $body, 'html', $ccr);
         }
      }
      else
      {
         return false;
      }
   }
}

?>