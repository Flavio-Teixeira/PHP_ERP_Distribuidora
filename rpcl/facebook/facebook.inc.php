<?php

/**
 * facebook/facebook.inc.php
 * 
 * Defines main Facebook components.
 *
 * This file is part of the RPCL project.
 *
 * Copyright (c) 2011 Embarcadero Technologies, Inc.
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
 * @package     Facebook
 * @copyright   2011 Embarcadero Technologies, Inc.
 * @license     http://www.gnu.org/licenses/lgpl-2.1.txt LGPL
 * 
 */

/**
 * Include RPCL common file and necessary units.
 */
require_once("rpcl/rpcl.inc.php");
use_unit("forms.inc.php");
use_unit("stdctrls.inc.php");
use_unit('facebook/sdk/src/facebook.php');

/**
 * Global variable to hold an FBApplication object.
 *
 * This global variable holds an FBApplication object (only one can be used at a given time).
 * @global FBApplication $fbapplication
 */
global $fbapplication;

// Render Methods

/**
 * IFrame render method.
 *
 * @const       rmIFrame
 */
define('rmIFrame', 'rmIFrame');

/**
 * FBML render method.
 *
 * @deprecated {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       rmFBML
 */
define('rmFBML', 'rmFBML');

/**
 * Returns an XML attribute-value association using a string for boolean value.
 *
 * This function is given an attribute as a string, plus a value as a boolean, and it returns an
 * XML attribute-value associationa string like “ <name>="<value>" ”, surrounded by white spaces,
 * where <name> is the attribute string and <value> the string representation of the actual boolean
 * value, that is, "true" or "false".
 *
 * @param       string  $name   Attribute name.
 * @param       bool    $value  Attribute value.
 * @return      string          String containing XML attribute-value association.
 * @internal
 */
function getBooleanAttribute($name, $value)
{
   if($value)
      $result = ' ' . $name . '="true" ';else
      $result = ' ' . $name . '="false" ';
   return ($result);
}

/**
 * Returns an XML attribute-value association using "1" or "0" for boolean value.
 *
 * This function is given an attribute as a string, plus a value as a boolean, and it returns an
 * XML attribute-value associationa string like “ <name>="<value>" ”, surrounded by white spaces,
 * where <name> is the attribute string and <value> the numeric representation of the actual boolean
 * value, that is, "1" (true) or "0" (false).
 *
 * @param       string  $name   Attribute name.
 * @param       bool    $value  Attribute value.
 * @return      string          String containing XML attribute-value association.
 * @internal
 */
function getBooleanIntegerAttribute($name, $value)
{
   if($value)
      $result = ' ' . $name . '="1" ';else
      $result = ' ' . $name . '="0" ';
   return ($result);
}

/**
 * Returns an XML attribute-value association for an attribute with a string value.
 *
 * This function is given an attribute and a value, both as strings, and it returns an XML
 * attribute-value associationa string like “ <name>="<value>" ”, surrounded by white spaces, where
 * <name> is the attribute and <value> the value.
 *
 * If the value is an empty string, the function will also return an empty string.
 *
 * @param       string  $name   Attribute name
 * @param       bool    $value  Attribute value
 * @return      string          String containing XML attribute-value association, empty string if
 *                              value’s is empty too.
 * @internal
 */
function getStringAttribute($name, $value)
{
   if($value != '')
      $result = ' ' . $name . '="' . $value . '" ';else
      $result = '';
   return ($result);
}

/**
 * Returns an XML attribute-value association for an attribute with a string value.
 *
 * This function is given an attribute and a value, both as strings, and it returns an XML
 * attribute-value associationa string like “ <name>="<value>" ”, surrounded by white spaces, where
 * <name> is the attribute and <value> the value.
 *
 * @param       string  $name   Attribute name.
 * @param       bool    $value  Attribute value.
 * @return      string          String containing XML attribute-value association.
 * @internal
 */
function getString($name, $value)
{
   return (' ' . $name . '="' . $value . '" ');
}

/**
 * Component to hold and manage common data of a Facebook application.
 * 
 * @package Facebook
 */
class FBApplication extends Component
{
   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);

      global $fbapplication;

      $fbapplication = $this;
   }

  /**
   * Creates a {@link Facebook} object and stores it in {@link _facebook} property.
   */
   function createFacebook()
   {
      // TODO: Validate properties.
      $options = array();
      $options['appId'] = $this->_applicationid;
      $options['secret'] = $this->_applicationsecret;
      if($this->_usecookies)
         $options['cookie'] = true;
      if($this->_cookiedomain != '')
         $options['domain'] = $this->_cookiedomain;
      // Create our Application instance.
      $this->_facebook = new Facebook($options);

   }

   /**
    * Redirect user to an URL.
    *
    * This function prints redirection code and stops script generation right after that.
    *
    * @param	string	$url
    */
   function goToRedirectUri($url)
   {

      if($this->_rendermethod==rmFBML)
      {
          echo '<fb:redirect url="' . $url. '"/>';
          exit();
      }
      else
      {

          echo "<script type='text/javascript'>top.location.href = '$url';</script>";
          exit();
      }
   }

   /**
    * Get User ID
    * 
    * This function returns user ID. If user was not connected yet, this will take them to login
    * page, and once they are logged in, redirect them back to current script.
    *
    * This function is actually an alias for {@link requireLoggedUser()}.
    *
    * @return	string	User ID.
    */
   function UserID()
   {
      $user_id = $this->requireLoggedUser();
      return $user_id;
   }

   /**
    * Get User ID
    * 
    * This function returns user ID. If user was not connected yet, this will take them to login
    * page, and once they are logged in, redirect them back to current script.
    *
    * @return	string	User ID.
    */
   function requireLoggedUser()
   {

      // Get the UID of connected user, 0 if user is not connected.
      $session = $this->_facebook->getUser();

      // If user was not connected, redirect them to login page, so they log in and are redirected
      // back to current script.
      if($session == 0)
      {

         $connect=array("canvas"=>1, 'fbconnect'=>0,'redirect_uri'=>$this->_redirecturi);
         if(count($this->_permissions)!=0)
         {
            $connect['scope']=implode(',',$this->_permissions);
         }
         $url = $this->_facebook->getLoginUrl($connect);

         if($this->_rendermethod==rmFBML)
         {
             echo '<fb:redirect url="' . $url . '"/>';
             exit();
         }
         else
         {
            // echo '<fb:redirect url="' . $url . '"/>';
            echo "<script type='text/javascript'>top.location.href = '$url';</script>";
            //redirect($url);
            exit();
         }
      }
      return $session;
   }

   /**
    * Call Facebook Graph API.
    *
    * This function is used to call Facebook Graph API with access token already included in the
    * call.
    *
    * Its only parameter must be a string indicating what kind of information should be retrieved.
    * Check {@link http://developers.facebook.com/docs/reference/api Graph API Facebook
    * Documentation} to find out what this string can contain, plus what you can expect from the
    * resulting array.
    *
    * You might find {@link http://developers.facebook.com/docs/reference/php/facebook-api
    * Facebook::api Documentation} also useful.
    *
    * @param    string  $text   String representation of the object to be accessed. For example:
    *                           "/me".
    * @return   array   Array containing requested information.
    */
   function api($text)
   {
      return $this->_facebook->api($text,array('access_token'=>$this->_facebook->getAccessToken()));
   }

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      parent::loaded();
      $this->createFacebook();
      //$this->UserID();
   }
   
   // Facebook Instance

   /**
    * {@link http://developers.facebook.com/docs/reference/php#facebook_object Facebook object}.
    *
    * This variable holds working
    * {@link http://developers.facebook.com/docs/reference/php#facebook_object Facebook object}. The
    * whole components is built around this object.
    *
    * @var      Facebook
    */
   protected $_facebook = null;

   /**
    * Getter method for {@link $_facebook}.
    *
    * @return   Facebook        {@link $_facebook}
    */
   function readFacebook()    {return $this->_facebook;}

   /**
    * Setter method for {@link $_facebook}.
    *
    * @param    Facebook        $value
    */
   function writeFacebook($value)    {$this->_facebook = $value;}

   /**
    * Getter for {@link $_facebook}’s default value.
    *
    * @return   Facebook        Null value
    */
   function defaultFacebook()    {return null;}

   // Application ID

   /**
    * Application ID.
    *
    * This variable holds the ID of your application.
    *
    * @var      string
    */
   protected $_applicationid = '';

   /**
    * Getter method for {@link $_applicationid}.
    *
    * @return   string  {@link $_applicationid}
    */
   function getApplicationID()    {return $this->_applicationid;}

   /**
    * Setter method for {@link $_applicationid}.
    *
    * @param    string  $value
    */
   function setApplicationID($value)    {$this->_applicationid = $value;}

   /**
    * Getter for {@link $_applicationid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultApplicationID()    {return '';}

   // Application Secret

   /**
    * Application secret.
    *
    * This variable holds the secret of your application.
    *
    * @var      string
    */
   protected $_applicationsecret = '';

   /**
    * Getter method for {@link $_applicationsecret}.
    *
    * @return   string  {@link $_applicationsecret}
    */
   function getApplicationSecret()    {return $this->_applicationsecret;}

   /**
    * Setter method for {@link $_applicationsecret}.
    *
    * @param    string  $value
    */
   function setApplicationSecret($value)    {$this->_applicationsecret = $value;}

   /**
    * Getter for {@link $_applicationid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultApplicationSecret()    {return '';}

   // Use Cookies

   /**
    * Whether cookies are to be used or not.
    *
    * This variable controls whether cookies are ('1') or not ('0') to be used.
    *
    * @var      string
    */
   protected $_usecookies = '1';

   /**
    * Getter method for {@link $_usecookies}.
    *
    * @return   string  {@link $_usecookies}
    */
   function getUseCookies()    {return $this->_usecookies;}

   /**
    * Setter method for {@link $_usecookies}.
    *
    * @param    string  $value
    */
   function setUseCookies($value)    {$this->_usecookies = $value;}

   /**
    * Getter for {@link $_usecookies}’s default value.
    *
    * @return   string  '1'
    */
   function defaultUseCookies()    {return '1';}

   // Cookie Domain

   /**
    * Domain name to be used with cookies.
    *
    * @var      string
    */
   protected $_cookiedomain = '';

   /**
    * Getter method for {@link $_cookiedomain}.
    *
    * @return   string  {@link $_cookiedomain}
    */
   function getCookieDomain()    {return $this->_cookiedomain;}

   /**
    * Setter method for {@link $_cookiedomain}.
    *
    * @param    string  $value
    */
   function setCookieDomain($value)    {$this->_cookiedomain = $value;}

   /**
    * Getter for {@link $_cookiedomain}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultCookieDomain()    {return '';}

   // Render Method

   /**
    * Render method to be used.
    *
    * @see      rmIFrame, rmFBML
    *
    * @var      string
    */
   protected $_rendermethod = rmIFrame;

   /**
    * Getter method for {@link $_rendermethod}.
    *
    * @return   string  {@link $_rendermethod}
    */
   function getRenderMethod()    {return $this->_rendermethod;}

   /**
    * Setter method for {@link $_rendermethod}.
    *
    * @param    string  $value
    */
   function setRenderMethod($value)    {$this->_rendermethod = $value;}

   /**
    * Getter for {@link $_rendermethod}’s default value.
    *
    * @return   string  {@link rmIFrame}
    */
   function defaultRenderMethod()    {return rmIFrame;}

   // Redirect URI

   /**
    * URI to redirect users to.
    *
    * @var      string
    */
   protected $_redirecturi = '';

   /**
    * Getter method for {@link $_redirecturi}.
    *
    * @return   string  {@link $_redirecturi}
    */
   function getRedirectUri()    {return $this->_redirecturi;}

   /**
    * Setter method for {@link $_redirecturi}.
    *
    * @param    string  $value
    */
   function setRedirectUri($value)    {$this->_redirecturi = $value;}

   /**
    * Getter for {@link $_redirecturi}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultRedirectUri()    {return '';}

   // Canvas URL

   /**
    * Canvas URL.
    *
    * @var      string
    */
   protected $_canvasurl='';

   /**
    * Getter method for {@link $_canvasurl}.
    *
    * @return   string  {@link $_canvasurl}
    */
   function getCanvasUrl() { return $this->_canvasurl; }

   /**
    * Setter method for {@link $_canvasurl}.
    *
    * @param    string  $value
    */
   function setCanvasUrl($value) { $this->_canvasurl=$value; }

   /**
    * Getter for {@link $_canvasurl}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultCanvasUrl() { return ''; }

   // Permissions

   /**
    * Permissions.
    *
    * @var      array
    */
   protected $_permissions=array();

   /**
    * Getter method for {@link $_permissions}.
    *
    * @return   array   {@link $_permissions}
    */
   function getPermissions() { return $this->_permissions; }

   /**
    * Setter method for {@link $_permissions}.
    *
    * @param    array   $value
    */
   function setPermissions($value) { $this->_permissions=$value; }

   /**
    * Getter for {@link $_permissions}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultPermissions() { return array(); }
}

/**
 * Persistent parent class for permission rules.
 * 
 * @package     Facebook
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBPermissionRule extends Persistent
{
   /**
    * Owner.
    *
    * @var      FBPermission
    */
   public $_control = null;

   /**
    * Tag.
    *
    * @var      string
    */
   public $_tag = '';

   /**
    * {@inheritdoc}
    *
    * @return   FBPermission
    */
   function readOwner()
   {
      return ($this->_control);
   }

   /**
    * Function to render the beginning of the permission rule, if any.
    */
   function renderbegin()
   {

   }

   /**
    * Function to render the end of the permission rule, if any.
    *
    * @return   string  FBML code to be rendered at the end.
    */
   function renderend()
   {
      if($this->_tag != '')
         return ('</fb:' . $this->_tag . '>');
      else
         return ('');
   }
}

/**
 * Permission rule to deal with different user agents (web browsers).
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/user-agent Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBUserAgent extends FBPermissionRule
{

   // Includes String

   /**
    * Included user agents.
    *
    * A comma-separated list of strings to be tested for inclusion against the HTTP request’s
    * user-agent string.
    * 
    * @link     http://developers.facebook.com/docs/reference/fbml/user-agent Facebook Documentation
    * @var      string
    */
   protected $_includes = '';

   /**
    * Getter method for {@link $_includes}.
    *
    * @return   string  {@link $_includes}
    */
   function getIncludes()    {return $this->_includes;}

   /**
    * Setter method for {@link $_includes}.
    *
    * @param    string  $value
    */
   function setIncludes($value)    {$this->_includes = $value;}

   /**
    * Getter for {@link $_includes}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultIncludes()    {return '';}

   // Excludes String

   /**
    * Excluded user agents.
    *
    * A comma-separated list of strings to be tested for exclusion against the HTTP request’s
    * user-agent string. Takes precedence over {@link $_includes}.
    * 
    * @link     http://developers.facebook.com/docs/reference/fbml/user-agent Facebook Documentation
    * @var      string
    */
   protected $_excludes = '';

   /**
    * Getter method for {@link $_excludes}.
    *
    * @return   string  {@link $_excludes}
    */
   function getExcludes()    {return $this->_excludes;}

   /**
    * Setter method for {@link $_excludes}.
    *
    * @param    string  $value
    */
   function setExcludes($value)    {$this->_excludes = $value;}

   /**
    * Getter for {@link $_excludes}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultExcludes()    {return '';}

   // Other Methods

   /**
    * Function to render the beginning of the permission rule, if any.
    *
    * @return   string  FBML code to be rendered at the beginning.
    */
   function renderbegin()
   {
      // Prepare initial tag.
      $this->_tag = 'user-agent';
      $result = '<fb:' . $this->_tag . ' ';
      $result .= getStringAttribute('includes', $this->_includes);
      $result .= getStringAttribute('excludes', $this->_excludes);
      $result .= '>';

      // If tag has attributes.
      if($result != '<fb:' . $this->_tag . ' >')
         return ($result);
      else
      {
         $this->_tag = '';
         return ('');
      }
   }
}


// Privacy Settings for IfCanSee class.

/**
 * Search privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wSearch
 */
define('wSearch', 'wSearch');

/**
 * Profile privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wProfile
 */
define('wProfile', 'wProfile');

/**
 * Friends privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wFriends
 */
define('wFriends', 'wFriends');

/**
 * Not Limited privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wNot_limited
 */
define('wNot_limited', 'wNot_limited');

/**
 * Online privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wOnline
 */
define('wOnline', 'wOnline');

/**
 * Status Updates privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wStatusupdates
 */
define('wStatusupdates', 'wStatusupdates');

/**
 * Wall privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wWall
 */
define('wWall', 'wWall');

/**
 * Groups privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wGroups
 */
define('wGroups', 'wGroups');

/**
 * Photos of Me privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wPhotosofme
 */
define('wPhotosofme', 'wPhotosofme');

/**
 * Notes privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wNotes
 */
define('wNotes', 'wNotes');

/**
 * Feed privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wFeed
 */
define('wFeed', 'wFeed');

/**
 * Contact privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wContact
 */
define('wContact', 'wContact ');

/**
 * Email privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wEmail
 */
define('wEmail', 'wEmail');

/**
 * Aim privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wAim
 */
define('wAim', 'wAim');

/**
 * Cell privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wCell
 */
define('wCell', 'wCell');

/**
 * Phone privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wPhone
 */
define('wPhone', 'wPhone');

/**
 * Mailbox privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wMailbox
 */
define('wMailbox', 'wMailbox');

/**
 * Address privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wAddress
 */
define('wAddress', 'wAddress');

/**
 * Basic privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wBasic
 */
define('wBasic', 'wBasic');

/**
 * Education privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wEducation
 */
define('wEducation', 'wEducation');

/**
 * Professional privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wProfessional
 */
define('wProfessional', 'wProfessional ');

/**
 * Personal privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wPersonal
 */
define('wPersonal', 'wPersonal');

/**
 * Seasonal privacy setting.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       wSeasonal
 */
define('wSeasonal', 'wSeasonal');


/**
 * Permission rule to deal with what current user can see about a given user.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBIfCanSee extends FBPermissionRule
{

   // Target User ID

   /**
    * Target user ID, a privacy setting of whom will be checked against current user permissions.
    * 
    * @var      string
    */
   protected $_userid = '';

   /**
    * Getter method for {@link $_userid}.
    *
    * @return   string  {@link $_userid}
    */
   function getUserID()    {return $this->_userid;}

   /**
    * Setter method for {@link $_userid}.
    *
    * @param    string  $value
    */
   function setUserID($value)    {$this->_userid = $value;}

   /**
    * Getter for {@link $_userid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserID()    {return '';}

   // Privacy Setting

   /**
    * Privacy settings of target user to be checked against current user permissions.
    * 
    * @var      string
    */
   protected $_what = wSearch;

   /**
    * Getter method for {@link $_what}.
    *
    * @return   string  {@link $_what}
    */
   function getWhat()    {return $this->_what;}

   /**
    * Setter method for {@link $_what}.
    *
    * @param    string  $value
    */
   function setWhat($value)    {$this->_what = $value;}

   /**
    * Getter for {@link $_what}’s default value.
    *
    * @return   string  {@link wSearch}
    */
   function defaultWhat()    {return wSearch;}

   // Other Methods

   /**
    * Function to render the beginning of the permission rule, if any.
    *
    * @return   string  FBML code to be rendered at the beginning.
    */
   function renderbegin()
   {
      // Prepare initial tag.
      $this->_tag = 'if-can-see';
      $result = '<fb:' . $this->_tag . ' ';
      if($this->_userid != '')
      {
         $what = strtolower(substr($this->_what, 1, strlen($this->_what)));
         $result .= getStringAttribute('uid', $this->_userid);
         $result .= getStringAttribute('what', $what);
      }
      $result .= '>';

      // If tag has attributes.
      if($result != '<fb:' . $this->_tag . ' >')
         return ($result);
      else
      {
         $this->_tag = '';
         return ('');
      }
   }
}

/**
 * Permission rule to deal with what photos current user can see.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/if-can-see-photo Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBIfCanSeePhoto extends FBPermissionRule
{

   // Photo ID

   /**
    * Photo ID.
    * 
    * @var      string
    */
   protected $_photoid = '';

   /**
    * Getter method for {@link $_photoid}.
    *
    * @return   string  {@link $_photoid}
    */
   function getPhotoID()    {return $this->_photoid;}

   /**
    * Setter method for {@link $_photoid}.
    *
    * @param    string  $value
    */
   function setPhotoID($value)    {$this->_photoid = $value;}

   /**
    * Getter for {@link $_photoid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultPhotoID()    {return '';}

   // User ID

   /**
    * User ID.
    * 
    * @var      string
    */
   protected $_userid = '';

   /**
    * Getter method for {@link $_userid}.
    *
    * @return   string  {@link $_userid}
    */
   function getUserID()    {return $this->_userid;}

   /**
    * Setter method for {@link $_userid}.
    *
    * @param    string  $value
    */
   function setUserID($value)    {$this->_userid = $value;}

   /**
    * Getter for {@link $_userid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserID()    {return '';}

   // Other Methods

   /**
    * Function to render the beginning of the permission rule, if any.
    *
    * @return   string  FBML code to be rendered at the beginning.
    */
   function renderbegin()
   {
      // Prepare initial tag.
      $this->_tag = 'if-can-see-photo';
      $result = '<fb:' . $this->_tag . ' ';
      $result .= getStringAttribute('pid', $this->_photoid);
      $result .= getStringAttribute('uid', $this->_userid);
      $result .= '>';

      // If tag has attributes.
      if($result != '<fb:' . $this->_tag . ' >')
         return ($result);
      else
      {
         $this->_tag = '';
         return ('');
      }
   }
}

/**
 * Permission rule to display content only if current user is friends with given user.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/if-is-friends-with-viewer Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBIfIsFriendsWithViewer extends FBPermissionRule
{

   // User ID

   /**
    * User ID.
    * 
    * @var      string
    */
   protected $_userid = '';

   /**
    * Getter method for {@link $_userid}.
    *
    * @return   string  {@link $_userid}
    */
   function getUserId()    {return $this->_userid;}

   /**
    * Setter method for {@link $_userid}.
    *
    * @param    string  $value
    */
   function setUserId($value)    {$this->_userid = $value;}

   /**
    * Getter for {@link $_userid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserId()    {return '';}

   // Include Self

   /**
    * Whether this rule should be set to true when given user is current user, or not.
    *
    * This property is set to true ('1') by default, which means this rule will be true if given
    * user is current user. If you want this rule to apply only to user’s friends, but not to the
    * user themself, set this property to false ('0').
    * 
    * @var      string
    */
   protected $_includeself = '1';

   /**
    * Getter method for {@link $_includeself}.
    *
    * @return   string  {@link $_includeself}
    */
   function getIncludeSelf()    {return $this->_includeself;}

   /**
    * Setter method for {@link $_includeself}.
    *
    * @param    string  $value
    */
   function setIncludeSelf($value)    {$this->_includeself = $value;}

   /**
    * Getter for {@link $_includeself}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultIncludeSelf()    {return '1';}

   // Other Methods

   /**
    * Function to render the beginning of the permission rule, if any.
    *
    * @return   string  FBML code to be rendered at the beginning.
    */
   function renderbegin()
   {
      // Prepare initial tag.
      $this->_tag = 'if-is-friends-with-viewier';
      $result = '<fb:' . $this->_tag . ' ';
      $result .= getStringAttribute('uid', $this->_userid);
      $result .= getBooleanAttribute('includeself', $this->_includeself);
      $result .= '>';

      // If tag has attributes.
      if($result != '<fb:' . $this->_tag . ' >')
         return ($result);
      else
      {
         $this->_tag = '';
         return ('');
      }
   }
}

/**
 * Member user role.
 * 
 * @link        http://developers.facebook.com/docs/reference/fbml/if-is-group-member Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       rMember
 */
define('rMember', 'rMember');

/**
 * Officer user role.
 * 
 * @link        http://developers.facebook.com/docs/reference/fbml/if-is-group-member Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       rOfficer
 */
define('rOfficer', 'rOfficer');

/**
 * Administrator user role.
 * 
 * @link        http://developers.facebook.com/docs/reference/fbml/if-is-group-member Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       rAdmin
 */
define('rAdmin', 'rAdmin');


/**
 * Permission rule to deal with which groups current user belongs too, including their role in them.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/if-is-group-member Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBIfIsGroupMember extends FBPermissionRule
{

   // Group ID

   /**
    * Group ID.
    * 
    * @var      string
    */
   protected $_groupid = '';

   /**
    * Getter method for {@link $_groupid}.
    *
    * @return   string  {@link $_groupid}
    */
   function getGroupID()    {return $this->_groupid;}

   /**
    * Setter method for {@link $_groupid}.
    *
    * @param    string  $value
    */
   function setGroupID($value)    {$this->_groupid = $value;}

   /**
    * Getter for {@link $_groupid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultGroupID()    {return '';}

   // User ID

   /**
    * User ID.
    * 
    * @var      string
    */
   protected $_userid = '';

   /**
    * Getter method for {@link $_userid}.
    *
    * @return   string  {@link $_userid}
    */
   function getUserId()    {return $this->_userid;}

   /**
    * Setter method for {@link $_userid}.
    *
    * @param    string  $value
    */
   function setUserId($value)    {$this->_userid = $value;}

   /**
    * Getter for {@link $_userid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserId()    {return '';}

   // Role

   /**
    * Role.
    * 
    * @var      string
    */
   protected $_role = rMember;

   /**
    * Getter method for {@link $_role}.
    *
    * @return   string  {@link $_role}
    */
   function getRole()    {return $this->_role;}

   /**
    * Setter method for {@link $_role}.
    *
    * @param    string  $value
    */
   function setRole($value)    {$this->_role = $value;}

   /**
    * Getter for {@link $_role}’s default value.
    *
    * @return   string  {@link rMember}
    */
   function defaultRole()    {return rMember;}

   // Other Methods

   /**
    * Function to render the beginning of the permission rule, if any.
    *
    * @return   string  FBML code to be rendered at the beginning.
    */
   function renderbegin()
   {
      // Prepare initial tag.
      $this->_tag = 'if-is-group-member';
      $result = '<fb:' . $this->_tag . ' ';
      $result .= getStringAttribute('gid', $this->_groupid);
      $result .= getStringAttribute('uid', $this->_userid);
      $role = strtolower(substr($this->_role, 1, strlen($this->_role)));
      $result .= getStringAttribute('role', $role);
      $result .= '>';

      // If tag has attributes.
      if($result != '<fb:' . $this->_tag . ' >')
         return ($result);
      else
      {
         $this->_tag = '';
         return ('');
      }
   }
}

/**
 * Permission rule to display content only if current user is part of the network.
 * 
 * @package     Facebook
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBIsInNetwork extends FBPermissionRule
{

   // Network ID

   /**
    * Network ID.
    * 
    * @var      string
    */
   protected $_networkid = '';

   /**
    * Getter method for {@link $_networkid}.
    *
    * @return   string  {@link $_networkid}
    */
   function getNetworkId()    {return $this->_networkid;}

   /**
    * Setter method for {@link $_networkid}.
    *
    * @param    string  $value
    */
   function setNetworkId($value)    {$this->_networkid = $value;}

   /**
    * Getter for {@link $_networkid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultNetworkId()    {return '';}

   // User ID

   /**
    * User ID.
    * 
    * @var      string
    */
   protected $_userid = '';

   /**
    * Getter method for {@link $_userid}.
    *
    * @return   string  {@link $_userid}
    */
   function getUserId()    {return $this->_userid;}

   /**
    * Setter method for {@link $_userid}.
    *
    * @param    string  $value
    */
   function setUserId($value)    {$this->_userid = $value;}

   /**
    * Getter for {@link $_userid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserId()    {return '';}

   // Other Methods

   /**
    * Function to render the beginning of the permission rule, if any.
    *
    * @return   string  FBML code to be rendered at the beginning.
    */
   function renderbegin()
   {
      // Prepare initial tag.
      $this->_tag = 'is-in-network';
      $result = '<fb:' . $this->_tag . ' ';
      $result .= getStringAttribute('network', $this->_networkid);
      $result .= getStringAttribute('uid', $this->_userid);
      $result .= '>';

      // If tag has attributes.
      if($result != '<fb:' . $this->_tag . ' >')
         return ($result);
      else
      {
         $this->_tag = '';
         return ('');
      }
   }
}

/**
 * Permission rule to display or not content depending of current user’s age, location or content type.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/restricted-to Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBRestrictedTo extends FBPermissionRule
{

   // Age

   /**
    * Age or age range that can see the content.
    * 
    * You can specify multiple age ranges, separate each entry with a comma. For example, '10,20,30'
    * would only display the content for people who is 10, 20 or 30 years old.
    * 
    * You can also use plus (+) and minus (-) to restrict content to that age or older/younger. For
    * example, '18+' would mean 18 or older, while '29-' would mean younger than 30.
    * 
    * You can also specify a range of ages, like 16-25, so anyone between the ages of 16 and 25
    * (inclusive) can see the content.
    * 
    * Finally, you can specify multiple age ranges. For example, you could use '29-,40+' to exclude
    * people in their 30s.
    * 
    * Specified ages must be integers. If a floating point number is passed, only the integer part
    * will be taken into account. For example, 17.9 will be treated as 17.
    * 
    * @var      string
    */
   protected $_age = '';

   /**
    * Getter method for {@link $_age}.
    *
    * @return   string  {@link $_age}
    */
   function getAge()    {return $this->_age;}

   /**
    * Setter method for {@link $_age}.
    *
    * @param    string  $value
    */
   function setAge($value)    {$this->_age = $value;}

   /**
    * Getter for {@link $_age}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultAge()    {return '';}

   // Location

   /**
    * Location.
    *
    * This is a {@link http://www.iso.org/iso/iso-3166-1_decoding_table.html ISO 3166} country code.
    * Make sure you use rpeferred value. For example, 'uk' is a valid code for United Kingdom, but
    * you should use its preferred value instead, 'gb'.
    * 
    * @var      string
    */
   protected $_location = '';

   /**
    * Getter method for {@link $_location}.
    *
    * @return   string  {@link $_location}
    */
   function getLocation()    {return $this->_location;}

   /**
    * Setter method for {@link $_location}.
    *
    * @param    string  $value
    */
   function setLocation($value)    {$this->_location = $value;}

   /**
    * Getter for {@link $_location}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultLocation()    {return '';}

   // Type

   /**
    * Type.
    *
    * Content type users can restrict. You can only specify 'alcohol', and if you do, content will
    * be only displayed to those users that allow such a content.
    * 
    * @var      string
    */
   protected $_type = '';

   /**
    * Getter method for {@link $_type}.
    *
    * @return   string  {@link $_type}
    */
   function getType()    {return $this->_type;}

   /**
    * Setter method for {@link $_type}.
    *
    * @param    string  $value
    */
   function setType($value)    {$this->_type = $value;}

   /**
    * Getter for {@link $_type}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultType()    {return '';}

// TODO: Implement the property below:
//    protected $_agedistribution = array();
//    function getAgeDistribution()    {return $this->_agedistribution;}
//    function setAgeDistribution($value)    {$this->_agedistribution = $value;}
//    function defaultAgeDistribution()    {return array();}

   // Other Methods

   /**
    * Function to render the beginning of the permission rule, if any.
    *
    * @return   string  FBML code to be rendered at the beginning.
    */
   function renderbegin()
   {
      $this->_tag = 'restricted-to';
      $result = '<fb:' . $this->_tag . ' ';
      $result .= getStringAttribute('age', $this->_age);
      $result .= getStringAttribute('location', $this->_location);
      // TODO: agedistribution (see code above)
      $result .= getStringAttribute('type', $this->_type);
      $result .= '>';
      if($result != '<fb:' . $this->_tag . ' >')
         return ($result);
      else
      {
         $this->_tag = '';
         return ('');
      }
   }
}


/**
 * Permission rule to display content only if current user has granted full permissions to the
 * application.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/visible-to-app-users Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBVisibleToAppUsers extends FBPermissionRule
{

   // Enabled

   /**
    * Whether this permission rule is enabled or disabled.
    *
    * It can be set either to true ('1') or to false ('0'). It defaults to false ('0'), which means
    * you have to explicitly enable this property for this permission rule to work.
    * 
    * @var      string
    */
   protected $_enable = '0';

   /**
    * Getter method for {@link $_enable}.
    *
    * @return   string  {@link $_enable}
    */
   function getEnable()    {return $this->_enable;}

   /**
    * Setter method for {@link $_enable}.
    *
    * @param    string  $value
    */
   function setEnable($value)    {$this->_enable = $value;}

   /**
    * Getter for {@link $_enable}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultEnable()    {return '0';}

   // Background Color

   /**
    * Background color.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    * 
    * @var      string
    */
   protected $_bgcolor = '';

   /**
    * Getter method for {@link $_bgcolor}.
    *
    * @return   string  {@link $_bgcolor}
    */
   function getBgColor()    {return $this->_bgcolor;}

   /**
    * Setter method for {@link $_bgcolor}.
    *
    * @param    string  $value
    */
   function setBgColor($value)    {$this->_bgcolor = $value;}

   /**
    * Getter for {@link $_bgcolor}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultBgColor()    {return '';}

   // Other Methods

   /**
    * Function to render the beginning of the permission rule, if any.
    *
    * @return   string  FBML code to be rendered at the beginning.
    */
   function renderbegin()
   {
      if($this->_enable)
      {
         $this->_tag = 'visible-to-app-users';
         $result = '<fb:' . $this->_tag . ' ';
         $result .= getStringAttribute('bgcolor', $this->_bgcolor);
         $result .= '>';
         return ($result);
      }
      else
      {
         $this->_tag = '';
         return ('');
      }
   }
}

/**
 * Permission rule to display content on a user’s or {@link http://www.facebook.com/business/?pages
 * Facebook Page}’s profile only if current user is a friend of that user or a fan of that Facebook
 * page.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/visible-to-connection Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBVisibleToConnection extends FBPermissionRule
{

   // Enabled

   /**
    * Whether this permission rule is enabled or disabled.
    *
    * It can be set either to true ('1') or to false ('0'). It defaults to false ('0'), which means
    * you have to explicitly enable this property for this permission rule to work.
    * 
    * @var      string
    */
   protected $_enable = '0';

   /**
    * Getter method for {@link $_enable}.
    *
    * @return   string  {@link $_enable}
    */
   function getEnable()    {return $this->_enable;}

   /**
    * Setter method for {@link $_enable}.
    *
    * @param    string  $value
    */
   function setEnable($value)    {$this->_enable = $value;}

   /**
    * Getter for {@link $_enable}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultEnable()    {return '0';}

   // Background Color

   /**
    * Background Color.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    * 
    * @var      string
    */
   protected $_bgcolor = '';

   /**
    * Getter method for {@link $_bgcolor}.
    *
    * @return   string  {@link $_bgcolor}
    */
   function getBgColor()    {return $this->_bgcolor;}

   /**
    * Setter method for {@link $_bgcolor}.
    *
    * @param    string  $value
    */
   function setBgColor($value)    {$this->_bgcolor = $value;}

   /**
    * Getter for {@link $_bgcolor}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultBgColor()    {return '';}

   // Other Methods

   /**
    * Function to render the beginning of the permission rule, if any.
    *
    * @return   string  FBML code to be rendered at the beginning.
    */
   function renderbegin()
   {
      if($this->_enable)
      {
         $this->_tag = 'visible-to-connection';
         $result = '<fb:' . $this->_tag . ' ';
         $result .= getStringAttribute('bgcolor', $this->_bgcolor);
         $result .= '>';
         return ($result);
      }
      else
      {
         $this->_tag = '';
         return ('');
      }
   }
}

/**
 * Permission rule to display content on an user’s profile only if current user is a friend of that
 * user.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/visible-to-friends Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBVisibleToFriends extends FBPermissionRule
{

   // Enabled

   /**
    * Whether this permission rule is enabled or disabled.
    *
    * This is set to false ('0') by default, which means you have to explicitly enable this property
    * for this permission rule to work.
    * 
    * @var      string
    */
   protected $_enable = '0';

   /**
    * Getter method for {@link $_enable}.
    *
    * @return   string  {@link $_enable}
    */
   function getEnable()    {return $this->_enable;}

   /**
    * Setter method for {@link $_enable}.
    *
    * @param    string  $value
    */
   function setEnable($value)    {$this->_enable = $value;}

   /**
    * Getter for {@link $_enable}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultEnable()    {return '0';}

   // Background Color

   /**
    * Background Color.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    * 
    * @var      string
    */
   protected $_bgcolor = '';

   /**
    * Getter method for {@link $_bgcolor}.
    *
    * @return   string  {@link $_bgcolor}
    */
   function getBgColor()    {return $this->_bgcolor;}

   /**
    * Setter method for {@link $_bgcolor}.
    *
    * @param    string  $value
    */
   function setBgColor($value)    {$this->_bgcolor = $value;}

   /**
    * Getter for {@link $_bgcolor}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultBgColor()    {return '';}

   // Other Methods

   /**
    * Function to render the beginning of the permission rule, if any.
    *
    * @return   string  FBML code to be rendered at the beginning.
    */
   function renderbegin()
   {
      if($this->_enable)
      {
         $this->_tag = 'visible-to-friends';
         $result = '<fb:' . $this->_tag . ' ';
         $result .= getStringAttribute('bgcolor', $this->_bgcolor);
         $result .= '>';
         return ($result);
      }
      else
      {
         $this->_tag = '';
         return ('');
      }
   }
}

/**
 * Permission rule to display content on a user’s profile only if current user is profile’s owner.
 * 
 * @package     Facebook
 * @link        developers.facebook.com/docs/reference/fbml/visible-to-owner Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBVisibleToOwner extends FBPermissionRule
{

   // Enabled

   /**
    * Whether this permission rule is enabled or disabled.
    *
    * It can be set either to true ('1') or to false ('0'). It defaults to false ('0'), which means
    * you have to explicitly enable this property for this permission rule to work.
    * 
    * @var      string
    */
   protected $_enable = '0';

   /**
    * Getter method for {@link $_enable}.
    *
    * @return   string  {@link $_enable}
    */
   function getEnable()    {return $this->_enable;}

   /**
    * Setter method for {@link $_enable}.
    *
    * @param    string  $value
    */
   function setEnable($value)    {$this->_enable = $value;}

   /**
    * Getter for {@link $_enable}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultEnable()    {return '0';}

   // Background Color

   /**
    * Background Color.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    * 
    * @var      string
    */
   protected $_bgcolor = '';

   /**
    * Getter method for {@link $_bgcolor}.
    *
    * @return   string  {@link $_bgcolor}
    */
   function getBgColor()    {return $this->_bgcolor;}

   /**
    * Setter method for {@link $_bgcolor}.
    *
    * @param    string  $value
    */
   function setBgColor($value)    {$this->_bgcolor = $value;}

   /**
    * Getter for {@link $_bgcolor}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultBgColor()    {return '';}

   // Other Methods

   /**
    * Function to render the beginning of the permission rule, if any.
    *
    * @return   string  FBML code to be rendered at the beginning.
    */
   function renderbegin()
   {
      if($this->_enable)
      {
         $this->_tag = 'visible-to-owner';
         $result = '<fb:' . $this->_tag . ' ';
         $result .= getStringAttribute('bgcolor', $this->_bgcolor);
         $result .= '>';
         return ($result);
      }
      else
      {
         $this->_tag = '';
         return ('');
      }
   }
}


// Sections for $_ifsectionnotadded property in FBPermission class.

/**
 * No section.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-section-not-added Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       sNone
 */
define('sNone', 'sNone');

/**
 * Profile section.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-section-not-added Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       sProfile
 */
define('sProfile', 'sProfile');

/**
 * Information section.
 *
 * @link        http://developers.facebook.com/docs/reference/fbml/if-section-not-added Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 * 
 * @const       sInfo
 */
define('sInfo', 'sInfo');


/**
 * Permission component.
 *
 * This components lets you set restrictions that must match in order for its child components to be
 * rendered.
 * 
 * @package     Facebook
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBPermission extends Component
{

   // Beginning and End

   /**
    * Text to be placed at the beginning of the components when it is rendered.
    * 
    * @var string
    */
   protected $_begin = '';

   /**
    * Text to be placed at the end of the components when it is rendered.
    * 
    * @var string
    */
   protected $_end = '';

   // If Condition

   /**
    * Whether the content should be displayed or not.
    *
    * This property lets you explicitly set whether the contents of this components should be
    * rendered or not. This way, you can code your own logic to take that decision, and then set
    * this property to true ('1') or false ('0') depending on the result of your logic.
    *
    * This property can be used to hide certain content, but such content will still be in the
    * rendered code, so make sure the content is already privacy-controlled.
    *
    * @link     http://developers.facebook.com/docs/reference/fbml/if Facebook Documentation
    * @var      string
    */
   protected $_ifcondition = '1';

   /**
    * Getter method for {@link $_ifcondition}.
    *
    * @return   string  {@link $_ifcondition}
    */
   function getIfCondition()    {return $this->_ifcondition;}

   /**
    * Setter method for {@link $_ifcondition}.
    *
    * @param    string  $value
    */
   function setIfCondition($value)    {$this->_ifcondition = $value;}

   /**
    * Getter for {@link $_ifcondition}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultIfCondition()    {return '1';}

   // Mobile

   /**
    * If the content should be displayed only on mobile devices.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_mobile = '0';

   /**
    * Getter method for {@link $_mobile}.
    *
    * @return   string  {@link $_mobile}
    */
   function getMobile()    {return $this->_mobile;}

   /**
    * Setter method for {@link $_mobile}.
    *
    * @param    string  $value
    */
   function setMobile($value)    {$this->_mobile = $value;}

   /**
    * Getter for {@link $_mobile}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultMobile()    {return '0';}

   // User Agent

   /**
    * User agent permission rule.
    * 
    * @var      FBUserAgent
    */
   protected $_useragent = null;

   /**
    * Getter method for {@link $_useragent}.
    *
    * @return   FBUserAgent     {@link $_useragent}
    */
   function getUserAgent()    {return $this->_useragent;}

   /**
    * Setter method for {@link $_useragent}.
    *
    * @param    FBUserAgent     $value
    */
   function setUserAgent($value)    {if(is_object($value))           $this->_useragent = $value;}

   /**
    * Getter for {@link $_useragent}’s default value.
    *
    * @return   FBUserAgent     Null
    */
   function defaultUserAgent()    {return null;}

   // If Can See

   /**
    * Permission rule based on what user can see.
    * 
    * @var      FBIfCanSee
    */
   protected $_ifcansee = null;

   /**
    * Getter method for {@link $_ifcansee}.
    *
    * @return   FBIfCanSee      {@link $_ifcansee}
    */
   function getIfCanSee()    {return $this->_ifcansee;}

   /**
    * Setter method for {@link $_ifcansee}.
    *
    * @param    FBIfCanSee      $value
    */
   function setIfCanSee($value)    {if(is_object($value))           $this->_ifcansee = $value;}

   /**
    * Getter for {@link $_ifcansee}’s default value.
    *
    * @return   FBIfCanSee      Null
    */
   function defaultIfCanSee()    {return null;}

   // If Can See Photo

   /**
    * Permission rule based on user’s permission to see a given photo.
    * 
    * @var      FBIfCanSeePhoto
    */
   protected $_ifcanseephoto = null;

   /**
    * Getter method for {@link $_ifcanseephoto}.
    *
    * @return   FBIfCanSeePhoto {@link $_ifcanseephoto}
    */
   function getIfCanSeePhoto()    {return $this->_ifcanseephoto;}

   /**
    * Setter method for {@link $_ifcanseephoto}.
    *
    * @param    FBIfCanSeePhoto $value
    */
   function setIfCanSeePhoto($value)    {if(is_object($value))           $this->_ifcanseephoto = $value;}

   /**
    * Getter for {@link $_ifcanseephoto}’s default value.
    *
    * @return   FBIfCanSeePhoto Null
    */
   function defaultIfCanSeePhoto()    {return null;}

   // If Is App User

   /**
    * If a given user is also user of your application.
    *
    * To set this restriction, fill the property with the ID of the user.
    *
    * @link     http://developers.facebook.com/docs/reference/fbml/if-is-app-user/ Facebook Documentation
    * @var      string
    */
   protected $_ifisappuser = '';

   /**
    * Getter method for {@link $_ifisappuser}.
    *
    * @return   string  {@link $_ifisappuser}
    */
   function getIfIsAppUser()    {return $this->_ifisappuser;}

   /**
    * Setter method for {@link $_ifisappuser}.
    *
    * @param    string  $value
    */
   function setIfIsAppUser($value)    {$this->_ifisappuser = $value;}

   /**
    * Getter for {@link $_ifisappuser}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultIfIsAppUser()    {return '';}

   // If Is Friends With Viewer

   /**
    * Permission rule based on users friendship or lack of.
    * 
    * @var      FBIfIsFriendsWithViewer
    */
   protected $_ifisfriendswithviewer = null;

   /**
    * Getter method for {@link $_ifisfriendswithviewer}.
    *
    * @return   FBIfIsFriendsWithViewer {@link $_ifisfriendswithviewer}
    */
   function getIfIsFriendsWithViewer()    {return $this->_ifisfriendswithviewer;}

   /**
    * Setter method for {@link $_ifisfriendswithviewer}.
    *
    * @param    FBIfIsFriendsWithViewer $value
    */
   function setIfIsFriendsWithViewer($value)    {if(is_object($value))           $this->_ifisfriendswithviewer = $value;}

   /**
    * Getter for {@link $_ifisfriendswithviewer}’s default value.
    *
    * @return   FBIfIsFriendsWithViewer Null
    */
   function defaultIfIsFriendsWithViewer()    {return null;}

   // If Is Group Member

   /**
    * Permission rule based on group membership.
    * 
    * @var      FBIfIsGroupMember
    */
   protected $_ifisgroupmember = null;

   /**
    * Getter method for {@link $_ifisgroupmember}.
    *
    * @return   FBIfIsGroupMember       {@link $_ifisgroupmember}
    */
   function getIfIsGroupMember()    {return $this->_ifisgroupmember;}

   /**
    * Setter method for {@link $_ifisgroupmember}.
    *
    * @param    FBIfIsGroupMember       $value
    */
   function setIfIsGroupMember($value)    {if(is_object($value))           $this->_ifisgroupmember = $value;}

   /**
    * Getter for {@link $_ifisgroupmember}’s default value.
    *
    * @return   FBIfIsGroupMember       Null
    */
   function defaultIfIsGroupMember()    {return null;}

   // If Is User

   /**
    * If current user is a given user.
    *
    * To set this restriction, fill the property with the ID of the user.
    *
    * @link     http://developers.facebook.com/docs/reference/fbml/if-is-user/ Facebook Documentation
    * @var      string
    */
   protected $_ifisuser = '';

   /**
    * Getter method for {@link $_ifisuser}.
    *
    * @return   string  {@link $_ifisuser}
    */
   function getIfIsUser()    {return $this->_ifisuser;}

   /**
    * Setter method for {@link $_ifisuser}.
    *
    * @param    string  $value
    */
   function setIfIsUser($value)    {$this->_ifisuser = $value;}

   /**
    * Getter for {@link $_ifisuser}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultIfIsUser()    {return '';}

   // If Is Verified

   /**
    * If current user is or not verified.
    *
    * Enable this restriction with true ('1') or disable it with false ('0').
    *
    * @link     http://developers.facebook.com/docs/reference/fbml/if-is-verified/ Facebook Documentation
    * @var      string
    */
   protected $_ifisverified = '0';

   /**
    * Getter method for {@link $_ifisverified}.
    *
    * @return   string  {@link $_ifisverified}
    */
   function getIfIsVerified()    {return $this->_ifisverified;}

   /**
    * Setter method for {@link $_ifisverified}.
    *
    * @param    string  $value
    */
   function setIfIsVerified($value)    {$this->_ifisverified = $value;}

   /**
    * Getter for {@link $_ifisverified}’s default value.
    *
    * @return   string  Disabled ('0')
    */
   function defaultIfIsVerified()    {return '0';}

   // Is In Network

   /**
    * Permission rule based on network membership.
    * 
    * @var      FBIsInNetwork
    */
   protected $_isinnetwork = null;

   /**
    * Getter method for {@link $_isinnetwork}.
    *
    * @return   FBIsInNetwork   {@link $_isinnetwork}
    */
   function getIsInNetwork()    {return $this->_isinnetwork;}

   /**
    * Setter method for {@link $_isinnetwork}.
    *
    * @param    FBIsInNetwork   $value
    */
   function setIsInNetwork($value)    {if(is_object($value))           $this->_isinnetwork = $value;}

   /**
    * Getter for {@link $_isinnetwork}’s default value.
    *
    * @return   FBIsInNetwork   Null
    */
   function defaultIsInNetwork()    {return null;}

   // User

   /**
    * Hides content to users that were blocked by a givne user.
    *
    * To set this restriction, fill the property with the ID of the user.
    *
    * @link     http://developers.facebook.com/docs/reference/fbml/user/ Facebook Documentation
    * @var      string
    */
   protected $_userid = '';

   /**
    * Getter method for {@link $_userid}.
    *
    * @return   string  {@link $_userid}
    */
   function getUserId()    {return $this->_userid;}

   /**
    * Setter method for {@link $_userid}.
    *
    * @param    string  $value
    */
   function setUserId($value)    {$this->_userid = $value;}

   /**
    * Getter for {@link $_userid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserId()    {return '';}

   // Is 18 Plus

   /**
    * Shows content only to users who are 18 years old, or older.
    *
    * Enable this restriction with true ('1') or disable it with false ('0').
    *
    * @link     http://developers.facebook.com/docs/reference/fbml/18-plus/ Facebook Documentation
    * @var      string
    */
   protected $_is18plus = '0';

   /**
    * Getter method for {@link $_is18plus}.
    *
    * @return   string  {@link $_is18plus}
    */
   function getIs18Plus()    {return $this->_is18plus;}

   /**
    * Setter method for {@link $_is18plus}.
    *
    * @param    string  $value
    */
   function setIs18Plus($value)    {$this->_is18plus = $value;}

   /**
    * Getter for {@link $_is18plus}’s default value.
    *
    * @return   string  Disabled ('0')
    */
   function defaultIs18Plus()    {return '0';}

   // Is 21 Plus

   /**
    * Shows content only to users who are 21 years old, or older.
    *
    * Enable this restriction with true ('1') or disable it with false ('0').
    *
    * @link     http://developers.facebook.com/docs/reference/fbml/21-plus/ Facebook Documentation
    * @var      string
    */
   protected $_is21plus = '0';

   /**
    * Getter method for {@link $_is21plus}.
    *
    * @return   string  {@link $_is21plus}
    */
   function getIs21Plus()    {return $this->_is21plus;}

   /**
    * Setter method for {@link $_is21plus}.
    *
    * @param    string  $value
    */
   function setIs21Plus($value)    {$this->_is21plus = $value;}

   /**
    * Getter for {@link $_is21plus}’s default value.
    *
    * @return   string  Disabled ('0')
    */
   function defaultIs21Plus()    {return '0';}

   // Restricted To

   /**
    * Permission rule based on user’s age, location or content type.
    * 
    * @var      FBRestrictedTo
    */
   protected $_restrictedto = null;

   /**
    * Getter method for {@link $_restrictedto}.
    *
    * @return   FBRestrictedTo  {@link $_restrictedto}
    */
   function getRestrictedTo()    {return $this->_restrictedto;}

   /**
    * Setter method for {@link $_restrictedto}.
    *
    * @param    FBRestrictedTo  $value
    */
   function setRestrictedTo($value)    {if(is_object($value))           $this->_restrictedto = $value;}

   /**
    * Getter for {@link $_restrictedto}’s default value.
    *
    * @return   FBRestrictedTo  Null
    */
   function defaultRestrictedTo()    {return null;}

   // Visible To App Users

   /**
    * Permission rule based on application permissions granted by current user.
    * 
    * @var      FBVisibleToAppUsers
    */
   protected $_visibletoappusers = null;

   /**
    * Getter method for {@link $_visibletoappusers}.
    *
    * @return   FBVisibleToAppUsers     {@link $_visibletoappusers}
    */
   function getVisibleToAppUsers()    {return $this->_visibletoappusers;}

   /**
    * Setter method for {@link $_visibletoappusers}.
    *
    * @param    FBVisibleToAppUsers     $value
    */
   function setVisibleToAppUsers($value)    {if(is_object($value))           $this->_visibletoappusers = $value;}

   /**
    * Getter for {@link $_visibletoappusers}’s default value.
    *
    * @return   FBVisibleToAppUsers     Null
    */
   function defaultVisibleToAppUsers()    {return null;}

   // Visible To Connection

   /**
    * Permission rule based on current user’s connection to a profile.
    * 
    * @var      FBVisibleToConnection
    */
   protected $_visibletoconnection = null;

   /**
    * Getter method for {@link $_visibletoconnection}.
    *
    * @return   FBVisibleToConnection   {@link $_visibletoconnection}
    */
   function getVisibleToConnection()    {return $this->_visibletoconnection;}

   /**
    * Setter method for {@link $_visibletoconnection}.
    *
    * @param    FBVisibleToConnection   $value
    */
   function setVisibleToConnection($value)    {if(is_object($value))           $this->_visibletoconnection = $value;}

   /**
    * Getter for {@link $_visibletoconnection}’s default value.
    *
    * @return   FBVisibleToConnection   Null
    */
   function defaultVisibleToConnection()    {return null;}

   // Visible To Friends

   /**
    * Permission rule based on current user’s friendship with another user.
    * 
    * @var      FBVisibleToFriends
    */
   protected $_visibletofriends = null;

   /**
    * Getter method for {@link $_visibletofriends}.
    *
    * @return   FBVisibleToFriends      {@link $_visibletofriends}
    */
   function getVisibleToFriends()    {return $this->_visibletofriends;}

   /**
    * Setter method for {@link $_visibletofriends}.
    *
    * @param    FBVisibleToFriends      $value
    */
   function setVisibleToFriends($value)    {if(is_object($value))           $this->_visibletofriends = $value;}

   /**
    * Getter for {@link $_visibletofriends}’s default value.
    *
    * @return   FBVisibleToFriends      Null
    */
   function defaultVisibleToFriends()    {return null;}

   // Visible To Owner

   /**
    * Permission rule to display content in current user’s profile only to them.
    * 
    * @var      FBVisibleToOwner
    */
   protected $_visibletoowner = null;

   /**
    * Getter method for {@link $_visibletoowner}.
    *
    * @return   FBVisibleToOwner        {@link $_visibletoowner}
    */
   function getVisibleToOwner()    {return $this->_visibletoowner;}

   /**
    * Setter method for {@link $_visibletoowner}.
    *
    * @param    FBVisibleToOwner        $value
    */
   function setVisibleToOwner($value)    {if(is_object($value))           $this->_visibletoowner = $value;}

   /**
    * Getter for {@link $_visibletoowner}’s default value.
    *
    * @return   FBVisibleToOwner        Null
    */
   function defaultVisibleToOwner()    {return null;}

   // If Section Not Added

   /**
    * Display if current user has not added a given section to their profile.
    *
    * You can set this property to different values:
    * <ul>
    *   <li>{@link sNone}: disables this restriction.</li>
    *   <li>{@link sProfile}: applies restriction when user has not added a condensed profile box to their profile.</li>
    *   <li>{@link sInfo}: applies restriction when user has not added an info section to their profile.</li>
    * </ul>
    *
    * @link     http://developers.facebook.com/docs/reference/fbml/if-is-verified/ Facebook Documentation
    * @var      string
    */
   protected $_ifsectionnotadded = sNone;

   /**
    * Getter method for {@link $_ifsectionnotadded}.
    *
    * @return   string  {@link $_ifsectionnotadded}
    */
   function getIfSectionNotAdded()    {return $this->_ifsectionnotadded;}

   /**
    * Setter method for {@link $_ifsectionnotadded}.
    *
    * @param    string  $value
    */
   function setIfSectionNotAdded($value)    {$this->_ifsectionnotadded = $value;}

   /**
    * Getter for {@link $_ifsectionnotadded}’s default value.
    *
    * @return   string  {@link sNone}
    */
   function defaultIfSectionNotAdded()    {return sNone;}


// TODO: Implement the properties below:
//    protected $_orpermission = null;
// 
//    function getORPermission()    {return $this->_orpermission;}
//    function setORPermission($value)    {if(is_object($value))           $this->_orpermission = $value;}
//    function defaultORPermission()    {return null;}
// 
//    protected $_andpermission = null;
// 
//    function getANDPermission()    {return $this->_andpermission;}
//    function setANDPermission($value)    {if(is_object($value))           $this->_andpermission = $value;}
//    function defaultANDPermission()    {return null;}
   
   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);

      $this->_useragent = new FBUserAgent();
      $this->_useragent->_control = $this;

      $this->_ifcansee = new FBIfCanSee();
      $this->_ifcansee->_control = $this;

      $this->_ifcanseephoto = new FBIfCanSeePhoto();
      $this->_ifcanseephoto->_control = $this;

      $this->_ifisfriendswithviewer = new FBIfIsFriendsWithViewer();
      $this->_ifisfriendswithviewer->_control = $this;

      $this->_ifisgroupmember = new FBIfIsGroupMember();
      $this->_ifisgroupmember->_control = $this;

      $this->_isinnetwork = new FBIsInNetwork();
      $this->_isinnetwork->_control = $this;

      $this->_restrictedto = new FBRestrictedTo();
      $this->_restrictedto->_control = $this;

      $this->_visibletoappusers = new FBVisibleToAppUsers();
      $this->_visibletoappusers->_control = $this;

      $this->_visibletoconnection = new FBVisibleToConnection();
      $this->_visibletoconnection->_control = $this;

      $this->_visibletofriends = new FBVisibleToFriends();
      $this->_visibletofriends->_control = $this;

      $this->_visibletoowner = new FBVisibleToOwner();
      $this->_visibletoowner->_control = $this;
   }

   /**
    * Prepares {@link $_begin} and {@link $_end} properties, filling them with the proper content to
    * later rendered.
    */
   function render()
   {
      // Empty properties, so they can be filled from scratch.
      $this->_begin = '';
      $this->_end = '';

      //fb:if
      $this->_begin .= '<fb:if value="' . $this->_ifcondition . '">';
      $this->_end = '</fb:if>' . $this->_end;

      //fb:mobile
      if($this->_mobile)
      {
         $this->_begin .= '<fb:mobile>';
         $this->_end = '</fb:mobile>' . $this->_end;
      }

      $this->_begin .= $this->_useragent->renderbegin();
      $this->_end = $this->_useragent->renderend() . $this->_end;

      $this->_begin .= $this->_ifcansee->renderbegin();
      $this->_end = $this->_ifcansee->renderend() . $this->_end;

      $this->_begin .= $this->_ifcanseephoto->renderbegin();
      $this->_end = $this->_ifcanseephoto->renderend() . $this->_end;

      if($this->_ifisappuser != '')
      {
         $this->_begin .= '<fb:if-is-app-user uid="' . $this->_ifisappuser . '">';
         $this->_end = '</fb:if-is-app-user>' . $this->_end;
      }

      $this->_begin .= $this->_ifisfriendswithviewer->renderbegin();
      $this->_end = $this->_ifisfriendswithviewer->renderend() . $this->_end;

      $this->_begin .= $this->_ifisgroupmember->renderbegin();
      $this->_end = $this->_ifisgroupmember->renderend() . $this->_end;

      if($this->_ifisuser != '')
      {
         $this->_begin .= '<fb:if-is-user uid="' . $this->_ifisuser . '">';
         $this->_end = '</fb:if-is-user>' . $this->_end;
      }

      if($this->_ifisverified)
      {
         $this->_begin .= '<fb:if-is-verified>';
         $this->_end = '</fb:if-is-verified>' . $this->_end;
      }

      $this->_begin .= $this->_isinnetwork->renderbegin();
      $this->_end = $this->_isinnetwork->renderend() . $this->_end;

      if($this->_userid != '')
      {
         $this->_begin .= '<fb:user uid="' . $this->_userid . '">';
         $this->_end = '</fb:user>' . $this->_end;
      }

      if($this->_is18plus)
      {
         $this->_begin .= '<fb:18-plus>';
         $this->_end = '</fb:18-plus>' . $this->_end;
      }

      if($this->_is21plus)
      {
         $this->_begin .= '<fb:21-plus>';
         $this->_end = '</fb:21-plus>' . $this->_end;
      }

      if($this->_ifsectionnotadded != sNone)
      {
         $section = strtolower(substr($this->_ifsectionnotadded, 1, strlen($this->_ifsectionnotadded)));
         $this->_begin .= '<fb:if-section-not-added section="' . $section . '">';
         $this->_end = '</fb:if-section-not-added>' . $this->_end;
      }

      $this->_begin .= $this->_restrictedto->renderbegin();
      $this->_end = $this->_restrictedto->renderend() . $this->_end;

      $this->_begin .= $this->_visibletoappusers->renderbegin();
      $this->_end = $this->_visibletoappusers->renderend() . $this->_end;

      $this->_begin .= $this->_visibletoconnection->renderbegin();
      $this->_end = $this->_visibletoconnection->renderend() . $this->_end;

      $this->_begin .= $this->_visibletofriends->renderbegin();
      $this->_end = $this->_visibletofriends->renderend() . $this->_end;

      $this->_begin .= $this->_visibletoowner->renderbegin();
      $this->_end = $this->_visibletoowner->renderend() . $this->_end;

   }

   /**
    * Calls {@link render()} to prepare both {@link $_begin} and {@link $_end} properties, and
    * prints the former.
    */
   function renderBegin()
   {
      $this->render();
      echo $this->_begin;
   }

   /**
    * Prints {@link $_end} properties.
    *
    * This method assumes that the content of {@link $_end} has been already rendered. That content
    * is rendered when you call {@link renderBegin()}, which you probably called before calling this
    * method, but you can always call {@link render()} to get {@link $_end} (and {@link $_begin})
    * rendered if for some reason you will not call {@link renderBegin()} before.
    */
   function renderEnd()
   {
      echo $this->_end;
   }
}

/**
 * Base class for Facebook visual components (also known as controls).
 * 
 * @package     Facebook
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBControl extends Control
{

   /**
    * URL of an image that represents the control.
    *
    * This image will be used on design time. It does not affect the final render of the control.
    *
    * @var      string
    */
   protected $_image = '';

   /**
    * Whether {@link $_image} is ot not an icon.
    *
    * A graphical editor can render image diferently depending on it being an icon or a normal  
    * image. This only matters at design time, it will not affect the final render of the control.
    *
    * @var      boolean
    */
   protected $_iconic = false;

   /**
    * Renders the control at design time.
    *
    * For non-visual components, this method renders components image. When they are icons, that is,
    * {@link $_iconic} is set to true, image is rendered inside a table with dotted borders. Else,
    * it is rendered as a plain image.
    *
    * @see      dumpContents()
    *
    * @internal
    */
   function dumpDesignContents()
   {
      if($this->_iconic)
      {
         echo "<table width=\"$this->Width\" style=\"border: 1px dotted #000000\" height=\"$this->Height\"><tr><td align=\"center\" valign=\"center\"><img src=\"$this->_image\"></td></tr></table>";
      }
      else
         echo "<img src=\"$this->_image\" />";
   }

   /**
    * {@inheritdoc}
    *
    * This method works for both design time and runtime. On design time, it will print control
    * image (see {@link dumpDesignContents()}), and on runtime it will print corresponding FBML
    * code.
    */
   function dumpContents()
   {
      if(($this->ControlState & csDesigning) == csDesigning)
      {
         $this->dumpDesignContents();
      }
      else
      {
         global $fbapplication;

         if($fbapplication->RenderMethod == rmIFrame)
         {

            $this->dumpFBCode();
         }
         else
         {
            $this->renderPermissionBegin();
            $this->dumpFBMLCode();
            $this->renderPermissionEnd();
         }
      }
   }

   // Permission

   /**
    * Permission component with rules to be applied to the control.
    * 
    * @var      FBPermission
    */
   protected $_permission = null;

   /**
    * Getter method for {@link $_permission}.
    *
    * @return   string  {@link $_permission}
    */
   function getPermission()    {return $this->_permission;}

   /**
    * Setter method for {@link $_permission}.
    *
    * @param    FBPermission    $value
    */
   function setPermission($value)    {$this->_permission = $this->fixupProperty($value);}

   /**
    * Getter for {@link $_permission}’s default value.
    *
    * @return   FBPermission    Null
    */
   function defaultPermission()    {return null;}

   /**
    * Prints permissions’ beginning.
    *
    * This method prints the initial tags of those permissions applied to this control.
    */
   function renderPermissionBegin()
   {
      if($this->_permission != null)
      {
         $this->_permission->renderBegin();
      }
   }

   /**
    * Prints permissions’ end.
    *
    * This method prints the end tags of those permissions applied to this control.
    */
   function renderPermissionEnd()
   {
      if($this->_permission != null)
      {
         $this->_permission->renderEnd();
      }
   }

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      parent::loaded();
      $this->_permission = $this->fixupProperty($this->_permission);
   }

   /**
    * Prints the control code for IFrame render method.
    *
    * {@link dumpContents()} already calls this method when needed, you do not have to do it
    * manually.
    */
   function dumpFBCode()
   {
      ?>
<fb:serverFbml width="<?php echo $this->Width;?>" height="<?php echo $this->Height;?>">
    <script type="text/fbml">
      <fb:fbml>
      <?php
      $this->dumpFBMLCode();
      ?>
      </fb:fbml>
    </script>
  </fb:serverFbml>
      <?php

   }
}

/**
 * Renders a CAPTCHA on your canvas page, inside a form.
 *
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/captcha/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBCaptcha extends FBControl
{
   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/captcha.gif';
      $this->Width = 314;
      $this->Height = 208;
      $this->ControlStyle = 'csFixedWidth=1';
      $this->ControlStyle = 'csFixedHeight=1';
   }

   // Show Always

   /**
    * Whether the CAPTCHA should be shown to anyone or just to unverified users.
    *
    * Set this to true ('1') if you want it to be displayed even for verified users, else set it
    * to false ('0'), which is its default value.
    * 
    * @var      string
    */
   protected $_showalways = '0';

   /**
    * Getter method for {@link $_showalways}.
    *
    * @return   string  {@link $_showalways}
    */
   function getShowAlways()    {return $this->_showalways;}

   /**
    * Setter method for {@link $_showalways}.
    *
    * @param    string  $value
    */
   function setShowAlways($value)    {$this->_showalways = $value;}

   /**
    * Getter for {@link $_showalways}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultShowAlways()    {return '0';}

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo '<fb:captcha ';
      echo getBooleanAttribute('showalways', $this->_showalways);
      echo ' />';
   }
}

/**
 * Renders a predictive friend selector input for a given person.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/friend-selector/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBFriendSelector extends FBControl
{
   function dumpFormItems()
   {
      echo '<input type="hidden" name="' . $this->Name . '_idname" value="">';
   }

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo "<fb:friend-selector ";
      echo getStringAttribute('uid', $this->_userid);
      echo getString('name', $this->Name);
      if($this->_idname != '')
         echo getStringAttribute('idname', $this->_idname);
      else
         echo getStringAttribute('idname', $this->Name . '_idname');
      echo getBooleanAttribute('include_me', $this->_includeme);
      echo getStringAttribute('exclude_ids', $this->_excludeids);
      echo getBooleanAttribute('include_lists', $this->_includelists);
      echo getStringAttribute('prefill_id', $this->_prefillid);
      echo "/>";
   }

   // User

   /**
    * ID of the user whose friends will be features in the friends selector.
    *
    * Current user will be used by default.
    * 
    * @var      string
    */
   protected $_userid = '';

   /**
    * Getter method for {@link $_userid}.
    *
    * @return   string  {@link $_userid}
    */
   function getUserID()    {return $this->_userid;}

   /**
    * Setter method for {@link $_userid}.
    *
    * @param    string  $value
    */
   function setUserID($value)    {$this->_userid = $value;}

   /**
    * Getter for {@link $_userid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserID()    {return '';}

   // Selected Friend Hidden Field Name

   /**
    * Name of the hidden field that will contain the ID of the selected friend.
    *
    * If no value is set, a default name will be used instead.
    *
    * @var      string
    */
   protected $_idname = '';

   /**
    * Getter method for {@link $_idname}.
    *
    * @return   string  {@link $_idname}
    */
   function getIDName()    {return $this->_idname;}

   /**
    * Setter method for {@link $_idname}.
    *
    * @param    string  $value
    */
   function setIDName($value)    {$this->_idname = $value;}

   /**
    * Getter for {@link $_idname}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultIDName()    {return '';}

   // Include Me.

   /**
    * Whether or not to include current user between the choices.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * @var      string
    */
   protected $_includeme = '0';

   /**
    * Getter method for {@link $_includeme}.
    *
    * @return   string  {@link $_includeme}
    */
   function getIncludeMe()    {return $this->_includeme;}

   /**
    * Setter method for {@link $_includeme}.
    *
    * @param    string  $value
    */
   function setIncludeMe($value)    {$this->_includeme = $value;}

   /**
    * Getter for {@link $_includeme}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultIncludeMe()    {return '0';}

   // Exclude IDs

   /**
    * A comma-separated list of IDs of users to be excluded from the selector.
    * 
    * @var      string
    */
   protected $_excludeids = '';

   /**
    * Getter method for {@link $_excludeids}.
    *
    * @return   string  {@link $_excludeids}
    */
   function getExcludeIDs()    {return $this->_excludeids;}

   /**
    * Setter method for {@link $_excludeids}.
    *
    * @param    string  $value
    */
   function setExcludeIDs($value)    {$this->_excludeids = $value;}

   /**
    * Getter for {@link $_excludeids}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultExcludeIDs()    {return '';}

   // Include Lists

   /**
    * Whether or not should friend lists be included as choices.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_includelists = '0';

   /**
    * Getter method for {@link $_includelists}.
    *
    * @return   string  {@link $_includelists}
    */
   function getIncludeLists()    {return $this->_includelists;}

   /**
    * Setter method for {@link $_includelists}.
    *
    * @param    string  $value
    */
   function setIncludeLists($value)    {$this->_includelists = $value;}

   /**
    * Getter for {@link $_includelists}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultIncludeLists()    {return '0';}

   // preinit()

   /**
    * {@inheritdoc}
    */
   function preinit()
   {
      parent::preinit();
      $fname = $this->Name . '_idname';
      global $input;

      $prefillid = $input->$fname;
      if(is_object($prefillid))
      {
         $this->_prefillid = $prefillid->asInteger();
         $this->_selecteduserid = $this->_prefillid;
      }

      $fname = $this->Name;
      global $input;

      $username = $input->$fname;
      if(is_object($username))
      {
         $this->_selectedusername = $username->asString();
      }

   }

   // Selected User ID

   /**
    * Selected user ID.
    * 
    * @var      string
    */
   protected $_selecteduserid = '';

   /**
    * Getter method for {@link $_selecteduserid}.
    *
    * @return   string  {@link $_selecteduserid}
    */
   function readSelectedUserID()    {return $this->_selecteduserid;}

   /**
    * Setter method for {@link $_selecteduserid}.
    *
    * @param    string  $value
    */
   function writeSelectedUserID($value)    {$this->_selecteduserid = $value;}

   /**
    * Getter for {@link $_selecteduserid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSelectedUserID()    {return '';}

   // Selected User Name.

   /**
    * Selected user name.
    * 
    * @var      string
    */
   protected $_selectedusername = '';

   /**
    * Getter method for {@link $_selectedusername}.
    *
    * @return   string  {@link $_selectedusername}
    */
   function readSelectedUserName()    {return $this->_selectedusername;}

   /**
    * Setter method for {@link $_selectedusername}.
    *
    * @param    string  $value
    */
   function writeSelectedUserName($value)    {$this->_selectedusername = $value;}

   /**
    * Getter for {@link $_selectedusername}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSelectedUserName()    {return '';}

   // Prefill ID

   /**
    * ID of a user to be predefined choice in the selector.
    * 
    * @var      string
    */
   protected $_prefillid = '';

   /**
    * Getter method for {@link $_prefillid}.
    *
    * @return   string  {@link $_prefillid}
    */
   function getPrefillID()    {return $this->_prefillid;}

   /**
    * Setter method for {@link $_prefillid}.
    *
    * @param    string  $value
    */
   function setPrefillID($value)    {$this->_prefillid = $value;}

   /**
    * Getter for {@link $_prefillid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultPrefillID()    {return '';}

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/friendselector.gif';
      $this->Width = 153;
      $this->Height = 22;
      $this->ControlStyle = 'csFixedWidth=1';
      $this->ControlStyle = 'csFixedHeight=1';
   }
}

// Picture Sizes

/**
 * Thumbnail, 50px wide.
 *
 * @const       psThumb
 */
define('psThumb', 'psThumb');

/**
 * Small size, 100px wide.
 *
 * @const       psSmall
 */
define('psSmall', 'psSmall');

/**
 * Normal size, 200px wide.
 *
 * @const       psNormal
 */
define('psNormal', 'psNormal');

/**
 * Square, 50px by 50px.
 *
 * @const       psSquare
 */
define('psSquare', 'psSquare');

/**
 * Renders given user’s profile picture.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/profile-pic/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBProfilePic extends FBControl
{

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo "<fb:profile-pic ";
      echo getStringAttribute('uid', $this->_userid);
      switch($this->_size)
      {
         case psThumb: $size = 't';break;
         case psSmall: $size = 's';break;
         case psNormal: $size = 'n';break;
         case psSquare: $size = 'q';break;
      }
      echo getStringAttribute('size', $size);
      echo getBooleanAttribute('linked', $this->_linked);
      echo getStringAttribute('facebook-logo', $this->_addlogo);
      if($this->_usewidth)
         echo getStringAttribute('width', $this->_width);
      if($this->_useheight)
         echo getStringAttribute('height', $this->_height);
      echo "/>";
   }

   // User

   /**
    * ID of the user whose picture will be displayed.
    * 
    * @var      string
    */
   protected $_userid = '';

   /**
    * Getter method for {@link $_userid}.
    *
    * @return   string  {@link $_userid}
    */
   function getUserID()    {return $this->_userid;}

   /**
    * Setter method for {@link $_userid}.
    *
    * @param    string  $value
    */
   function setUserID($value)    {$this->_userid = $value;}

   /**
    * Getter for {@link $_userid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserID()    {return '';}

   // Picture Size

   /**
    * The size picture should be displayed in, to be chosen from predefined values.
    *
    * Possible values are: {@link psThumb}, {@link psSmall}, {@link psNormal}, or {@link psSquare}.
    *
    * If predefined values does not suit you well, you can always set {@link $_usewidth} and
    * {@link $_useheight} to true ('1') instead, so custom values for dimensions are not ignored.
    * 
    * @var      string
    */
   protected $_size = 'psThumb';

   /**
    * Getter method for {@link $_size}.
    *
    * @return   string  {@link $_size}
    */
   function getSize()    {return $this->_size;}

   /**
    * Setter method for {@link $_size}.
    *
    * @param    string  $value
    */
   function setSize($value)    {$this->_size = $value;}

   /**
    * Getter for {@link $_size}’s default value.
    *
    * @return   string   {@link psThumb}
    */
   function defaultSize()    {return 'psThumb';}

   // Linked

   /**
    * Whether the picture should link or not to user’s profile.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_linked = '1';

   /**
    * Getter method for {@link $_linked}.
    *
    * @return   string  {@link $_linked}
    */
   function getLinked()    {return $this->_linked;}

   /**
    * Setter method for {@link $_linked}.
    *
    * @param    string  $value
    */
   function setLinked($value)    {$this->_linked = $value;}

   /**
    * Getter for {@link $_userid}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultLinked()    {return '1';}

   // Facebook Logo

   /**
    * Whether Facebook logo should be included with user’s picture or not.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * This can only be used with Facebook Connect.
    *
    * @var      string
    */
   protected $_addlogo = '0';

   /**
    * Getter method for {@link $_addlogo}.
    *
    * @return   string  {@link $_addlogo}
    */
   function getAddLogo()    {return $this->_addlogo;}

   /**
    * Setter method for {@link $_addlogo}.
    *
    * @param    string  $value
    */
   function setAddLogo($value)    {$this->_addlogo = $value;}

   /**
    * Getter for {@link $_addlogo}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultAddLogo()    {return '0';}

   // Width.

   /**
    * Whether or not custom width should be used to display the picture.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * @var      string
    */
   protected $_usewidth = '1';

   /**
    * Getter method for {@link $_usewidth}.
    *
    * @return   string  {@link $_usewidth}
    */
   function getUseWidth()    {return $this->_usewidth;}

   /**
    * Setter method for {@link $_usewidth}.
    *
    * @param    string  $value
    */
   function setUseWidth($value)    {$this->_usewidth = $value;}

   /**
    * Getter for {@link $_usewidth}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultUseWidth()    {return '1';}

   // Height.

   /**
    * Whether or not custom height should be used to display the picture.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * @var      string
    */
   protected $_useheight = '1';

   /**
    * Getter method for {@link $_useheight}.
    *
    * @return   string  {@link $_useheight}
    */
   function getUseHeight()    {return $this->_useheight;}

   /**
    * Setter method for {@link $_useheight}.
    *
    * @param    string  $value
    */
   function setUseHeight($value)    {$this->_useheight = $value;}

   /**
    * Getter for {@link $_useheight}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultUseHeight()    {return '1';}

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_iconic = true;
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/profilepic.png';
      $this->Width = 100;
      $this->Height = 200;
   }
}

/**
 * Displays given user’s name.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/name/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBUserName extends FBControl
{

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo "<fb:name ";
      echo getStringAttribute('uid', $this->_userid);
      echo getBooleanAttribute('firstnameonly', $this->_firstnameonly);
      echo getBooleanAttribute('linked', $this->_linked);
      echo getBooleanAttribute('lastnameonly', $this->_lastnameonly);
      echo getBooleanAttribute('possessive', $this->_possesive);
      echo getBooleanAttribute('reflexive', $this->_reflexive);
      echo getBooleanAttribute('shownetwork', $this->_shownetwork);
      echo getBooleanAttribute('useyou', $this->_useyou);
      echo getBooleanAttribute('capitalize', $this->_capitalize);
      echo getStringAttribute('subjectid', $this->_subjectid);
      echo getStringAttribute('ifcantsee', $this->_ifcantsee);
      echo "/>";
   }

   // User

   /**
    * ID of the user whose name will be displayed.
    * 
    * @var      string
    */
   protected $_userid = '';

   /**
    * Getter method for {@link $_userid}.
    *
    * @return   string  {@link $_userid}
    */
   function getUserID()    {return $this->_userid;}

   /**
    * Setter method for {@link $_userid}.
    *
    * @param    string  $value
    */
   function setUserID($value)    {$this->_userid = $value;}

   /**
    * Getter for {@link $_userid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUserID()    {return '';}

   // First Name Only

   /**
    * Whether or not first name should be the only part printed.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_firstnameonly = '0';

   /**
    * Getter method for {@link $_firstnameonly}.
    *
    * @return   string  {@link $_firstnameonly}
    */
   function getFirstNameOnly()    {return $this->_firstnameonly;}

   /**
    * Setter method for {@link $_firstnameonly}.
    *
    * @param    string  $value
    */
   function setFirstNameOnly($value)    {$this->_firstnameonly = $value;}

   /**
    * Getter for {@link $_firstnameonly}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultFirstNameOnly()    {return '0';}

   // Linked

   /**
    * Whether the name should link or not to user’s profile.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_linked = '1';

   /**
    * Getter method for {@link $_linked}.
    *
    * @return   string  {@link $_linked}
    */
   function getLinked()    {return $this->_linked;}

   /**
    * Setter method for {@link $_linked}.
    *
    * @param    string  $value
    */
   function setLinked($value)    {$this->_linked = $value;}

   /**
    * Getter for {@link $_linked}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultLinked()    {return '1';}

   // Last Name Only

   /**
    * Whether or not last name should be the only part printed.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_lastnameonly = '0';

   /**
    * Getter method for {@link $_lastnameonly}.
    *
    * @return   string  {@link $_lastnameonly}
    */
   function getLastNameOnly()    {return $this->_lastnameonly;}

   /**
    * Setter method for {@link $_lastnameonly}.
    *
    * @param    string  $value
    */
   function setLastNameOnly($value)    {$this->_lastnameonly = $value;}

   /**
    * Getter for {@link $_lastnameonly}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultLastNameOnly()    {return '0';}

   // Possesive

   /**
    * Whether or not name should be a possesive.
    *
    * For example, Jane’s instead of Jane.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_possesive = '0';

   /**
    * Getter method for {@link $_possesive}.
    *
    * @return   string  {@link $_possesive}
    */
   function getPossesive()    {return $this->_possesive;}

   /**
    * Setter method for {@link $_possesive}.
    *
    * @param    string  $value
    */
   function setPossesive($value)    {$this->_possesive = $value;}

   /**
    * Getter for {@link $_possesive}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultPossesive()    {return '0';}

   // Reflexive

   /**
    * Whether or not "yourself" should be printed when user matchs current user.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * This only applies when {@link $_useyou} is true ('1').
    * 
    * @var      string
    */
   protected $_reflexive = '0';

   /**
    * Getter method for {@link $_reflexive}.
    *
    * @return   string  {@link $_reflexive}
    */
   function getReflexive()    {return $this->_reflexive;}

   /**
    * Setter method for {@link $_reflexive}.
    *
    * @param    string  $value
    */
   function setReflexive($value)    {$this->_reflexive = $value;}

   /**
    * Getter for {@link $_reflexive}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultReflexive()    {return '0';}

   // Show Network

   /**
    * Whether or not user’s main educational network should be displayed.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_shownetwork = '0';

   /**
    * Getter method for {@link $_shownetwork}.
    *
    * @return   string  {@link $_shownetwork}
    */
   function getShowNetwork()    {return $this->_shownetwork;}

   /**
    * Setter method for {@link $_shownetwork}.
    *
    * @param    string  $value
    */
   function setShowNetwork($value)    {$this->_shownetwork = $value;}

   /**
    * Getter for {@link $_shownetwork}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultShowNetwork()    {return '0';}

   // Use You

   /**
    * Whether or not "you" should be printed when user matchs current user.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_useyou = '1';

   /**
    * Getter method for {@link $_useyou}.
    *
    * @return   string  {@link $_useyou}
    */
   function getUseYou()    {return $this->_useyou;}

   /**
    * Setter method for {@link $_useyou}.
    *
    * @param    string  $value
    */
   function setUseYou($value)    {$this->_useyou = $value;}

   /**
    * Getter for {@link $_useyou}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultUseYou()    {return '1';}

   // If Can’t See

   /**
    * Text to be printed when current user can not access specified user.
    * 
    * @var      string
    */
   protected $_ifcantsee = '';

   /**
    * Getter method for {@link $_ifcantsee}.
    *
    * @return   string  {@link $_ifcantsee}
    */
   function getIfCantSee()    {return $this->_ifcantsee;}

   /**
    * Setter method for {@link $_ifcantsee}.
    *
    * @param    string  $value
    */
   function setIfCantSee($value)    {$this->_ifcantsee = $value;}

   /**
    * Getter for {@link $_ifcantsee}’s default value.
    *
    * @return   string  Text
    */
   function defaultIfCantSee()    {return '';}

   // Capitalize

   /**
    * Whether or not "you" text should be capitalize when specified user is current user.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_capitalize = '0';

   /**
    * Getter method for {@link $_capitalize}.
    *
    * @return   string  {@link $_capitalize}
    */
   function getCapitalize()    {return $this->_capitalize;}

   /**
    * Setter method for {@link $_capitalize}.
    *
    * @param    string  $value
    */
   function setCapitalize($value)    {$this->_capitalize = $value;}

   /**
    * Getter for {@link $_capitalize}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultCapitalize()    {return '0';}

   // Subject ID

   /**
    * ID of the user who is subject in a sentence where {@link $_userid}) is the object.
    * 
    * @var      string
    */
   protected $_subjectid = '';

   /**
    * Getter method for {@link $_subjectid}.
    *
    * @return   string  {@link $_subjectid}
    */
   function getSubjectID()    {return $this->_subjectid;}

   /**
    * Setter method for {@link $_subjectid}.
    *
    * @param    string  $value
    */
   function setSubjectID($value)    {$this->_subjectid = $value;}

   /**
    * Getter for {@link $_subjectid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSubjectID()    {return '';}

   // Font

   /**
    * Getter method for {@link $_font}.
    *
    * @return   string  {@link $_font}
    */
   function getFont()    {return $this->readfont();}

   /**
    * Setter method for {@link $_font}.
    *
    * @param    string  $value
    */
   function setFont($value)     {$this->writefont($value);}

   /**
    * Renders the control at design time.
    *
    * This method renders {@link $_userid} or, if {@link $_userid} is empty, a message asking you to
    * fill that property. You can do so with {@link setUserID()}.
    *
    * @internal
    */
   function dumpDesignContents()
   {
      if($this->_userid == '')
         echo 'Fill UserID property';
      else
         echo $this->_userid;
   }

   /**
    * {@inheritdoc}
    */
   function dumpContents()
   {
      $style = $this->Font->FontString;
      echo '<div style="' . $style . '">';
      parent::dumpContents();
      echo '</div>';
   }

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->Width = 100;
      $this->Height = 20;
   }
}


/**
 * Displays a discussion board with a unique identifier.
 *
 * Facebook handles pagination, topic display, posting and storage.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/board/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBBoard extends FBControl
{

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo "<fb:board ";
      echo getStringAttribute('xid', $this->_xid);
      echo getBooleanAttribute('canpost', $this->_canpost);
      echo getBooleanAttribute('candelete', $this->_candelete);
      echo getBooleanAttribute('canmark', $this->_canmark);
      echo getBooleanAttribute('cancreatetopic', $this->_cancreatetopic);
      echo getStringAttribute('numtopics', $this->_numtopics);
      echo getStringAttribute('callbackurl', $this->_callbackurl);
      echo getStringAttribute('returnurl', $this->_returnurl);
      echo '/>';
      if($this->_title != '')        {echo '<fb:title>' . $this->_title . '</fb:title>';}
      echo "</fb:board>";

   }

   // ID

   /**
    * Unique identifier for the board.
    *
    * It can only contain alphanumeric characters (Aa-Zz, 0-9), hyphens (-) and underscores (_).
    * 
    * @var      string
    */
   protected $_xid = '';

   /**
    * Getter method for {@link $_xid}.
    *
    * @return   string  {@link $_xid}
    */
   function getXid()    {return $this->_xid;}

   /**
    * Setter method for {@link $_xid}.
    *
    * @param    string  $value
    */
   function setXid($value)    {$this->_xid = $value;}

   /**
    * Getter for {@link $_xid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultXid()    {return '';}

   // Can Post

   /**
    * Whether current user can post on the board.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_canpost = '1';

   /**
    * Getter method for {@link $_canpost}.
    *
    * @return   string  {@link $_canpost}
    */
   function getCanPost()    {return $this->_canpost;}

   /**
    * Setter method for {@link $_canpost}.
    *
    * @param    string  $value
    */
   function setCanPost($value)    {$this->_canpost = $value;}

   /**
    * Getter for {@link $_canpost}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultCanPost()    {return '1';}

   // Can Delete

   /**
    * Whether current user can delete topics from the board.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_candelete = '0';

   /**
    * Getter method for {@link $_candelete}.
    *
    * @return   string  {@link $_candelete}
    */
   function getCanDelete()    {return $this->_candelete;}

   /**
    * Setter method for {@link $_candelete}.
    *
    * @param    string  $value
    */
   function setCanDelete($value)    {$this->_candelete = $value;}

   /**
    * Getter for {@link $_candelete}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultCanDelete()    {return '0';}

   // Can Mark

   /**
    * Whether current user can mark topics from the board as relevant or irrelevant.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_canmark = '0';

   /**
    * Getter method for {@link $_canmark}.
    *
    * @return   string  {@link $_canmark}
    */
   function getCanMark()    {return $this->_canmark;}

   /**
    * Setter method for {@link $_canmark}.
    *
    * @param    string  $value
    */
   function setCanMark($value)    {$this->_canmark = $value;}

   /**
    * Getter for {@link $_canmark}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultCanMark()    {return '0';}

   // Can Create a Topic

   /**
    * Whether current user can create new topics on the board.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_cancreatetopic = '1';

   /**
    * Getter method for {@link $_cancreatetopic}.
    *
    * @return   string  {@link $_cancreatetopic}
    */
   function getCanCreateTopic()    {return $this->_cancreatetopic;}

   /**
    * Setter method for {@link $_cancreatetopic}.
    *
    * @param    string  $value
    */
   function setCanCreateTopic($value)    {$this->_cancreatetopic = $value;}

   /**
    * Getter for {@link $_cancreatetopic}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultCanCreateTopic()    {return '1';}

   // Number of Topics

   /**
    * Maximum amount of topics to be displayed in the box.
    * 
    * @var      int
    */
   protected $_numtopics = 3;

   /**
    * Getter method for {@link $_numtopics}.
    *
    * @return   int     {@link $_numtopics}
    */
   function getNumTopics()    {return $this->_numtopics;}

   /**
    * Setter method for {@link $_numtopics}.
    *
    * @param    int     $value
    */
   function setNumTopics($value)    {$this->_numtopics = $value;}

   /**
    * Getter for {@link $_numtopics}’s default value.
    *
    * @return   int     3
    */
   function defaultNumTopics()    {return 3;}

   // Callback URL

   /**
    * URL to refetch this settings.
    *
    * It defaults to current page.
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
    * @return   string  Empty string (current URL)
    */
   function defaultCallbackUrl()    {return '';}

   // Return URL

   /**
    * URL where user is taken after hitting <b>Back</b> link.
    *
    * It defaults to current page.
    * 
    * @var      string
    */
   protected $_returnurl = '';

   /**
    * Getter method for {@link $_returnurl}.
    *
    * @return   string  {@link $_returnurl}
    */
   function getReturnUrl()    {return $this->_returnurl;}

   /**
    * Setter method for {@link $_returnurl}.
    *
    * @param    string  $value
    */
   function setReturnUrl($value)    {$this->_returnurl = $value;}

   /**
    * Getter for {@link $_returnurl}’s default value.
    *
    * @return   string  Empty string (current URL)
    */
   function defaultReturnUrl()    {return '';}

   // Title

   /**
    * Board title.
    *
    * This property is optional. If it contains an empty string, title just does not show up.
    * 
    * @var      string
    */
   protected $_title = '';

   /**
    * Getter method for {@link $_title}.
    *
    * @return   string  {@link $_title}
    */
   function getTitle()    {return $this->_title;}

   /**
    * Setter method for {@link $_title}.
    *
    * @param    string  $value
    */
   function setTitle($value)    {$this->_title = $value;}

   /**
    * Getter for {@link $_title}’s default value.
    *
    * @return   string  Empty string (no title)
    */
   function defaultTitle()    {return '';}

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/board.png';
      $this->_iconic = true;
      $this->Width = 153;
      $this->Height = 87;
   }

}

// Button Styles

/**
 * On Facebook style.
 *
 * @const       sbOnFacebook
 */
define('sbOnFacebook', 'sbOnFacebook');

/**
 * Outside Facebook style (blue).
 *
 * @const       sbOnFacebook
 */
define('sbOffFacebook', 'sbOffFacebook');

/**
 * Renders a button that lets users bookmark your application or Facebook Connect website.
 *
 * When users click this button, a link to your application is displayed on their profile.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/bookmark/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBBookmark extends FBControl
{

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo '<fb:bookmark ';
      switch($this->_styleButton)
      {
         case sbOnFacebook: echo getString('type', 'on-facebook');break;
         case sbOffFacebook: echo getString('type', 'off-facebook');break;
      }
      echo "></fb:bookmark>";
   }

   // Button Style

   /**
    * Type of button.
    *
    * Style to be used for the button.
    * 
    * @var      string
    */
   protected $_styleButton = sbOnFacebook;

   /**
    * Getter method for {@link $_styleButton}.
    *
    * @return   string  {@link $_styleButton}
    */
   function getStyleButton()    {return $this->_styleButton;}

   /**
    * Setter method for {@link $_styleButton}.
    *
    * @param    string  $value
    */
   function setStyleButton($value)    {$this->_styleButton = $value;}

   /**
    * Getter for {@link $_styleButton}’s default value.
    *
    * @return   string  {@link sbOnFacebook}
    */
   function defaultStyleButton()    {return sbOnFacebook;}

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/bookmark.png';
      $this->Width = 118;
      $this->Height = 22;
      $this->ControlStyle = 'csFixedWidth=1';
      $this->ControlStyle = 'csFixedHeight=1';
   }
}

/**
 * Lets your users initiate Facebook Chat with their friends from within your application.
 *
 * This tag renders a list of current user's friends on your canvas page. When user selects a
 * friend, a Facebook Chat window opens, which can display a pre-populated message in the text
 * field.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/chat-invite/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
Class FBChatInvite extends FBControl
{

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo '<fb:chat-invite ';
      echo getStringAttribute('msg', $this->_message);
      echo getBooleanAttribute('condensed', $this->_condensed);
      echo getStringAttribute('exclude_ids', $this->_excludeids);
      echo '></fb:chat-invite>';
   }

   // Message

   /**
    * Default message.
    *
    * Message to be sent to the friend by default along with the chat invite.
    *
    * You can only use plain text for the message. URL will be automatically formatted, nonetheless.
    * 
    * @var      string
    */
   protected $_message = '';

   /**
    * Getter method for {@link $_message}.
    *
    * @return   string  {@link $_message}
    */
   function getMessage()    {return $this->_message;}

   /**
    * Setter method for {@link $_message}.
    *
    * @param    string  $value
    */
   function setMessage($value)    {$this->_message = $value;}

   /**
    * Getter for {@link $_message}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultMessage()    {return '';}

   // Condensed

   /**
    * Whether list items should be condensed or not.
    *
    * Set this to true ('1') if you want items to display user names only. Set it to false ('0') to
    * display also their picture.
    * 
    * @var      string
    */
   protected $_condensed = '0';

   /**
    * Getter method for {@link $_condensed}.
    *
    * @return   string  {@link $_condensed}
    */
   function getCondensed()    {return $this->_condensed;}

   /**
    * Setter method for {@link $_condensed}.
    *
    * @param    string  $value
    */
   function setCondensed($value)    {$this->_condensed = $value;}

   /**
    * Getter for {@link $_condensed}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultCondensed()    {return '0';}

   // Exclude IDs

   /**
    * A comma-separated list of IDs of users to be excluded from the list.
    * 
    * @var      string
    */
   protected $_excludeids = '';

   /**
    * Getter method for {@link $_excludeids}.
    *
    * @return   string  {@link $_excludeids}
    */
   function getExcludeIDs()    {return $this->_excludeids;}

   /**
    * Setter method for {@link $_excludeids}.
    *
    * @param    string  $value
    */
   function setExcludeIDs($value)    {$this->_excludeids = $value;}

   /**
    * Getter for {@link $_excludeids}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultExcludeIDs()    {return '';}

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/chat-invite.png';
      $this->Width = 212;
      $this->Height = 337;
      $this->ControlStyle = 'csFixedWidth=1';
      $this->ControlStyle = 'csFixedHeight=1';
   }
}

/**
 * Displays a set of comments for a unique identifier.
 *
 * Facebook handles posting, drawing, and see all page.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/comments/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBComments extends FBControl
{

   // ID

   /**
    * Unique identifier for the set of comments.
    *
    * It can only contain alphanumeric characters (Aa-Zz, 0-9), hyphens (-), percent (%), period
    * (.), and underscores (_). In fact, any value returned by {@link urlencode()} would be valid.
    * 
    * @var      string
    */
   protected $_xid = '';

   /**
    * Getter method for {@link $_xid}.
    *
    * @return   string  {@link $_xid}
    */
   function getXid()    {return $this->_xid;}

   /**
    * Setter method for {@link $_xid}.
    *
    * @param    string  $value
    */
   function setXid($value)    {$this->_xid = $value;}

   /**
    * Getter for {@link $_xid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultXid()    {return '';}

   // Can Post

   /**
    * Whether current user can post on this comment set.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_canpost = '1';

   /**
    * Getter method for {@link $_canpost}.
    *
    * @return   string  {@link $_canpost}
    */
   function getCanPost()    {return $this->_canpost;}

   /**
    * Setter method for {@link $_canpost}.
    *
    * @param    string  $value
    */
   function setCanPost($value)    {$this->_canpost = $value;}

   /**
    * Getter for {@link $_canpost}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultCanPost()    {return '1';}

   // Can Delete

   /**
    * Whether current user can delete any post on this comment set.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * Any user visiting that user's profile where the comment appears can delete comments made to it
    * (so, avoid using this property unless this is the intended functionality).
    * 
    * @var      string
    */
   protected $_candelete = '0';

   /**
    * Getter method for {@link $_candelete}.
    *
    * @return   string  {@link $_candelete}
    */
   function getCanDelete()    {return $this->_candelete;}

   /**
    * Setter method for {@link $_candelete}.
    *
    * @param    string  $value
    */
   function setCanDelete($value)    {$this->_candelete = $value;}

   /**
    * Getter for {@link $_candelete}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultCanDelete()    {return '0';}

   // Number of posts

   /**
    * Maximum amount of posts to be displayed.
    *
    * If set to 0, no comment will be displayed. This might render useful for moderation purposses.
    * 
    * @var      int
    */
   protected $_numposts = 10;

   /**
    * Getter method for {@link $_numposts}.
    *
    * @return   int     {@link $_numposts}
    */
   function getNumPosts()    {return $this->_numposts;}

   /**
    * Setter method for {@link $_numposts}.
    *
    * @param    int     $value
    */
   function setNumPosts($value)    {$this->_numposts = $value;}

   /**
    * Getter for {@link $_numposts}’s default value.
    *
    * @return   int  10
    */
   function defaultNumPosts()    {return 10;}

   // Callback URL

   /**
    * URL to refetch this settings.
    *
    * It defaults to current page.
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
    * @return   string  Empty string (current URL)
    */
   function defaultCallbackUrl()    {return '';}

   // Return URL

   /**
    * URL where user is taken after hitting <b>Back</b> link.
    *
    * It defaults to current page.
    * 
    * @var      string
    */
   protected $_returnurl = '';

   /**
    * Getter method for {@link $_returnurl}.
    *
    * @return   string  {@link $_returnurl}
    */
   function getReturnUrl()    {return $this->_returnurl;}

   /**
    * Setter method for {@link $_returnurl}.
    *
    * @param    string  $value
    */
   function setReturnUrl($value)    {$this->_returnurl = $value;}

   /**
    * Getter for {@link $_returnurl}’s default value.
    *
    * @return   string  Empty string (current URL)
    */
   function defaultReturnUrl()    {return '';}

   // Show Form

   /**
    * Whether a form for inline posting should be displayed or not.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * If it is set to true ('1') and form is hence displayed, when users enter a comment, they
    * will not be redirected to a see-all page after posting. Current page will be refreshed
    * instead.
    * 
    * @var      string
    */
   protected $_showform = '1';

   /**
    * Getter method for {@link $_showform}.
    *
    * @return   string  {@link $_showform}
    */
   function getShowForm()    {return $this->_showform;}

   /**
    * Setter method for {@link $_showform}.
    *
    * @param    string  $value
    */
   function setShowForm($value)    {$this->_showform = $value;}

   /**
    * Getter for {@link $_showform}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultShowForm()    {return '1';}

   // Condensed

   /**
    * ID of an user to be sent a notification upon someone posting a comment
    *
    * Only one user can be defined.
    * 
    * @var      string
    */
   protected $_sendnotificationuid = '';

   /**
    * Getter method for {@link $_sendnotificationuid}.
    *
    * @return   string  {@link $_sendnotificationuid}
    */
   function getSendNotificationUid()    {return $this->_sendnotificationuid;}

   /**
    * Setter method for {@link $_sendnotificationuid}.
    *
    * @param    string  $value
    */
   function setSendNotificationUid($value)    {$this->_sendnotificationuid = $value;}

   /**
    * Getter for {@link $_sendnotificationuid}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSendNotificationUid()    {return '';}

   // Include Me.

   /**
    * Whether or not to publish a Feed story when the comment gets posted.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * The comment must be at least 5 words in length in order to be published to Feed.
    *
    * The comment can be published to a user's Feed only if the user checks "Post comment to my
    * Facebook profile" option.
    *
    * @var      string
    */
   protected $_publishfeed = '0';

   /**
    * Getter method for {@link $_publishfeed}.
    *
    * @return   string  {@link $_publishfeed}
    */
   function getPublishFeed()    {return $this->_publishfeed;}

   /**
    * Setter method for {@link $_publishfeed}.
    *
    * @param    string  $value
    */
   function setPublishFeed($value)    {$this->_publishfeed = $value;}

   /**
    * Getter for {@link $_publishfeed}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultPublishFeed()    {return '0';}

   // Simple.

   /**
    * Whether to remove rounded box around the text area or not.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * This can be used to allow greater customization.
    *
    * @var      string
    */
   protected $_simple = '0';

   /**
    * Getter method for {@link $_simple}.
    *
    * @return   string  {@link $_simple}
    */
   function getSimple()    {return $this->_simple;}

   /**
    * Setter method for {@link $_simple}.
    *
    * @param    string  $value
    */
   function setSimple($value)    {$this->_simple = $value;}

   /**
    * Getter for {@link $_simple}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultSimple()    {return '0';}

   // Reverse.

   /**
    * Whether to reverse the order of comments and comment area or not.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * This can be used to allow greater customization.
    *
    * @var      string
    */
   protected $_reverse = '0';

   /**
    * Getter method for {@link $_reverse}.
    *
    * @return   string  {@link $_reverse}
    */
   function getReverse()    {return $this->_reverse;}

   /**
    * Setter method for {@link $_reverse}.
    *
    * @param    string  $value
    */
   function setReverse($value)    {$this->_reverse = $value;}

   /**
    * Getter for {@link $_reverse}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultReverse()    {return '0';}

   // Title

   /**
    * Title for the set of comments.
    *
    * This property is optional. If it contains an empty string, title just does not show up.
    * 
    * @var      string
    */
   protected $_title = '';

   /**
    * Getter method for {@link $_title}.
    *
    * @return   string  {@link $_title}
    */
   function getTitle()    {return $this->_title;}

   /**
    * Setter method for {@link $_title}.
    *
    * @param    string  $value
    */
   function setTitle($value)    {$this->_title = $value;}

   /**
    * Getter for {@link $_title}’s default value.
    *
    * @return   string  Empty string (no title)
    */
   function defaultTitle()    {return '';}

   // Print

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {

      echo '<fb:comments ';
      echo getStringAttribute('xid', $this->_xid);
      echo getBooleanAttribute('canpost', $this->_canpost);
      echo getBooleanAttribute('candelete', $this->_candelete);
      echo getStringAttribute('numposts', $this->_numposts);
      echo getStringAttribute('callbackurl', $this->_callbackurl);
      echo getStringAttribute('returnurl', $this->_returnurl);
      echo getBooleanAttribute('showform', $this->_showform);
      echo getStringAttribute('send_notification_uid', $this->_sendnotificationuid);
      echo getBooleanAttribute('publish_feed', $this->_publishfeed);
      echo getBooleanAttribute('simple', $this->_simple);
      echo getBooleanAttribute('reverse', $this->_reverse);
      echo '>';

      if($this->_title != '')
      {
         echo '<fb:title>' . $this->_title . '</fb:title>';
      }

      echo '</fb:comments>';
   }

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/comments.gif';
      $this->Width = 153;
      $this->Height = 22;
      //        $this->ControlStyle='csFixedWidth=1';
      //        $this->ControlStyle='csFixedHeight=1';
   }

}

/**
 * Renders an application-specific News Feed.
 * 
 * The News Feed displays recent application stories about current user's friends.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/feed/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBFeed extends FBControl
{

   // Title

   /**
    * News Feed title.
    * 
    * @var      string
    */
   protected $_title = 'News Feed';

   /**
    * Getter method for {@link $_title}.
    *
    * @return   string  {@link $_title}
    */
   function getTitle()    {return $this->_title;}

   /**
    * Setter method for {@link $_title}.
    *
    * @param    string  $value
    */
   function setTitle($value)    {$this->_title = $value;}

   /**
    * Getter for {@link $_title}’s default value.
    *
    * @return   string  'News Feed'
    */
   function defaultTitle()    {return 'News Feed';}

   // Number of stories

   /**
    * Maximum amount of stories to be displayed on the News Feed.
    * 
    * @var      int
    */
   protected $_numberstories = 5;

   /**
    * Getter method for {@link $_numberstories}.
    *
    * @return   int     {@link $_numberstories}
    */
   function getNumberStories()    {return $this->_numberstories;}

   /**
    * Setter method for {@link $_numberstories}.
    *
    * @param    int     $value
    */
   function setNumberStories($value)    {$this->_numberstories = $value;}

   /**
    * Getter for {@link $_numberstories}’s default value.
    *
    * @return   int  5
    */
   function defaultNumberStories()    {return 5;}

   /**
    * {@inheritdoc}
    */
   function dumpContents()
   {
      if(($this->ControlState & csDesigning) == csDesigning)
      {
         echo "<table width=\"$this->Width\" style=\"border: 1px solid #8496ba\" height=\"$this->Height\"><tr><td align=\"left\" valign=\"top\"><img src=\"$this->_image\"></td></tr></table>";
      }
      else
         parent::dumpContents();
   }

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo '<fb:feed ';
      echo getStringAttribute('title', $this->_title);
      echo getStringAttribute('max', $this->_numberstories);
      echo '/>';
   }

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/feed.png';
      $this->Width = 545;
      $this->Height = 195;
   }
}

/**
 * Renders a multi-friend form entry field like the one used in the message composer.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/multi-friend-input/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBMultiFriendInput extends FBControl
{

   // Border Color

   /**
    * Background Color.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    * 
    * @var      string
    */
   protected $_bordercolor = '#8496ba';

   /**
    * Getter method for {@link $_bordercolor}.
    *
    * @return   string  {@link $_bordercolor}
    */
   function getBorderColor()    {return $this->_bordercolor;}

   /**
    * Setter method for {@link $_bordercolor}.
    *
    * @param    string  $value
    */
   function setBorderColor($value)    {$this->_bordercolor = $value;}

   /**
    * Getter for {@link $_bordercolor}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultBorderColor()    {return '';}

   // Include Me.

   /**
    * Whether or not to include current user between the choices.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * @var      string
    */
   protected $_includeme = '0';

   /**
    * Getter method for {@link $_includeme}.
    *
    * @return   string  {@link $_includeme}
    */
   function getIncludeMe()    {return $this->_includeme;}

   /**
    * Setter method for {@link $_includeme}.
    *
    * @param    string  $value
    */
   function setIncludeMe($value)    {$this->_includeme = $value;}

   /**
    * Getter for {@link $_includeme}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultIncludeMe()    {return '0';}

   // Maximum Number of People

   /**
    * Maximum amount of people that can be selected.
    * 
    * @var      int
    */
   protected $_maxnumberpeople = 20;

   /**
    * Getter method for {@link $_maxnumberpeople}.
    *
    * @return   int     {@link $_maxnumberpeople}
    */
   function getMaxNumberPeople()    {return $this->_maxnumberpeople;}

   /**
    * Setter method for {@link $_maxnumberpeople}.
    *
    * @param    int     $value
    */
   function setMaxNumberPeople($value)    {$this->_maxnumberpeople = $value;}

   /**
    * Getter for {@link $_maxnumberpeople}’s default value.
    *
    * @return   int  20
    */
   function defaultMaxNumberPeople()    {return 20;}

   // Exclude IDs

   /**
    * A comma-separated list of IDs of users to be excluded from the form.
    * 
    * @var      string
    */
   protected $_excludeids = '';

   /**
    * Getter method for {@link $_excludeids}.
    *
    * @return   string  {@link $_excludeids}
    */
   function getExcludeIDs()    {return $this->_excludeids;}

   /**
    * Setter method for {@link $_excludeids}.
    *
    * @param    string  $value
    */
   function setExcludeIDs($value)    {$this->_excludeids = $value;}

   /**
    * Getter for {@link $_excludeids}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultExcludeIDs()    {return '';}

   // Prefill IDs

   /**
    * A comma-separated list of IDs of users to pre-populate the form with.
    * 
    * @var      string
    */
   protected $_prefillids = '';

   /**
    * Getter method for {@link $_prefillids}.
    *
    * @return   string  {@link $_prefillids}
    */
   function getPrefillIDs()    {return $this->_prefillids;}

   /**
    * Setter method for {@link $_prefillids}.
    *
    * @param    string  $value
    */
   function setPrefillIDs($value)    {$this->_prefillids = $value;}

   /**
    * Getter for {@link $_prefillids}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultPrefillIDs()    {return '';}

   // Prefill Locked

   /**
    * Whether to prevent editing of pre-populated IDs or not.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_prefilllocked = '0';

   /**
    * Getter method for {@link $_prefilllocked}.
    *
    * @return   string  {@link $_prefilllocked}
    */
   function getPrefillLocked()    {return $this->_prefilllocked;}

   /**
    * Setter method for {@link $_prefilllocked}.
    *
    * @param    string  $value
    */
   function setPrefillLocked($value)    {$this->_prefilllocked = $value;}

   /**
    * Getter for {@link $_prefilllocked}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultPrefillLocked()    {return '0';}

   // Name.

   /**
    * Name for the array of selected users.
    *
    * This defaults to 'ids' for the first instance of this control, and to
    * 'fb_multi_friend_input_ids<b><i>n</i></b>' for all by the first.
    *
    * In general, you should include name attributes if you include more than one instance of this
    * control in a single page.
    * 
    * @var      string
    */
   protected $_namearrayusers = '';

   /**
    * Getter method for {@link $_namearrayusers}.
    *
    * @return   string  {@link $_namearrayusers}
    */
   function getNameArrayUsers()    {return $this->_namearrayusers;}

   /**
    * Setter method for {@link $_namearrayusers}.
    *
    * @param    string  $value
    */
   function setNameArrayUsers($value)    {$this->_namearrayusers = $value;}

   /**
    * Getter for {@link $_namearrayusers}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultNameArrayUsers()    {return '';}

   /**
    * {@inheritdoc}
    */
   function dumpContents()
   {
      if(($this->ControlState & csDesigning) == csDesigning)
      {
         echo "<table width=\"$this->Width\" style=\"border: 1px solid #8496ba\" height=\"$this->Height\"><tr><td align=\"center\" valign=\"center\"></td></tr></table>";
      }
      else
         parent::dumpContents();
   }

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo '<fb:multi-friend-input ';
      echo getStringAttribute('width', $this->_width . 'px');
      echo getStringAttribute('border_color', $this->_bordercolor);
      echo getBooleanAttribute('include_me', $this->_includeme);
      echo getStringAttribute('max', $this->_maxnumberpeople);
      echo getStringAttribute('exclude_ids', $this->_excludeids);
      echo getStringAttribute('prefill_ids', $this->_prefillids);
      echo getBooleanAttribute('prefill_locked', $this->_prefilllocked);
      echo getBooleanAttribute('name', $this->_namearrayusers);
      echo '/>';

   }

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/multifriendinput.gif';
      $this->Width = 350;
      $this->Height = 25;
      $this->ControlStyle = 'csFixedHeight=1';
   }

}

// Share Button Types

/**
 * Count Box share button type.
 *
 * @const       fsbBoxCount
 */
define('fsbBoxCount', 'fsbBoxCount');

/**
 * Count Button share button type.
 *
 * @const       fsbButtonCount
 */
define('fsbButtonCount', 'fsbButtonCount');

/**
 * Button share button type.
 *
 * @const       fsbButton
 */
define('fsbButton', 'fsbButton');

/**
 * Icon share button type.
 *
 * @const       fsbIcon
 */
define('fsbIcon', 'fsbIcon');

/**
 * Link Icon share button type.
 *
 * @const       fsbIconLink
 */
define('fsbIconLink', 'fsbIconLink');

// Share Button Classes

/**
 * Share Button for a specified URL.
 *
 * @const       sbcUrl
 */
define('sbcUrl', 'sbcUrl');

/**
 * Share Button for some specified data.
 *
 * @const       sbcMeta
 */
define('sbcMeta', 'sbcMeta');


/**
 * Renders a standard Share button in a canvas page for the specified URL or content.
 * 
 * @package     Facebook
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 *
 */
class FBShareButton extends FBControl
{

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/share-button.png';
      $this->Width = 60;
      $this->Height = 22;
      $this->ControlStyle = 'csFixedWidth=1';
      $this->ControlStyle = 'csFixedHeight=1';
   }

   // FBML

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      global $fbapplication;

      if($fbapplication->RenderMethod == rmIFrame)
      {
         echo '<fb:share-button ';
         echo getString('class', 'url');
         echo getStringAttribute('href', $this->_href);
         switch($this->_type)
         {
            case fsbBoxCount: echo getString('type', 'box_count');break;
            case fsbButtonCount: echo getString('type', 'button_count');break;
            case fsbButton: echo getString('type', 'button');break;
            case fsbIcon: echo getString('type', 'icon');break;
            case fsbIconLink: echo getString('type', 'icon_link');break;
         }

         echo '></fb:share-button>';
      }
      else
      {
         echo '<fb:share-button ';
         switch($this->_class)
         {
            case sbcUrl:
               echo getString('class', 'url');
               echo getStringAttribute('href', $this->_href);
               break;
            case sbcMeta:
               echo getString('class', 'meta');
               echo getStringAttribute('link', $this->_link);
               echo getStringAttribute('meta', $this->_meta);
               break;
         }
         echo '/>';
      }

   }

   // Class

   /**
    * Class of the button to be rendered.
    *
    * This determines the behavior of the button.
    *
    * Possible values are: {@link sbcUrl}, or {@link sbcMeta}.
    * 
    * @var      string
    */
   protected $_class = sbcUrl;

   /**
    * Getter method for {@link $_class}.
    *
    * @return   string  {@link $_class}
    */
   function getClass()    {return $this->_class;}

   /**
    * Setter method for {@link $_class}.
    *
    * @param    string  $value
    */
   function setClass($value)    {$this->_class = $value;}

   /**
    * Getter for {@link $_class}’s default value.
    *
    * @return   string  {@link sbcUrl}
    */
   function defaultClass()    {return sbcUrl;}

   // HREF

   /**
    * URL to be shared.
    *
    * This property is only used when {@link $_class} is set to {@link sbcUrl}.
    * 
    * @var      string
    */
   protected $_href = '';

   /**
    * Getter method for {@link $_href}.
    *
    * @return   string  {@link $_href}
    */
   function getHref()    {return $this->_href;}

   /**
    * Setter method for {@link $_href}.
    *
    * @param    string  $value
    */
   function setHref($value)    {$this->_href = $value;}

   /**
    * Getter for {@link $_href}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultHref()    {return '';}

   // Metadata

   /**
    * Metadata about shared item.
    *
    * This property is only used when {@link $_class} is set to {@link sbcMeta}.
    * 
    * @var      string
    */
   protected $_meta = '';

   /**
    * Getter method for {@link $_meta}.
    *
    * @return   string  {@link $_meta}
    */
   function getMeta()    {return $this->_meta;}

   /**
    * Setter method for {@link $_meta}.
    *
    * @param    string  $value
    */
   function setMeta($value)    {$this->_meta = $value;}

   /**
    * Getter for {@link $_meta}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultMeta()    {return '';}

   // Link

   /**
    * URL to content for the shared item.
    *
    * This could like, for example, to an thumbnail (image).
    *
    * This property is only used when {@link $_class} is set to {@link sbcMeta}.
    * 
    * @var      string
    */
   protected $_link = '';

   /**
    * Getter method for {@link $_link}.
    *
    * @return   string  {@link $_link}
    */
   function getLink()    {return $this->_link;}

   /**
    * Setter method for {@link $_link}.
    *
    * @param    string  $value
    */
   function setLink($value)    {$this->_link = $value;}

   /**
    * Getter for {@link $_link}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultLink()    {return '';}

   // Type

   /**
    * Type of the button to be rendered.
    *
    * This only determines the way the button is rendered, it does not affect its behavior.
    *
    * Possible values are: {@link fsbBoxCount}, {@link fsbButton}, {@link fsbButtonCount},
    * {@link fsbIcon}, or {@link fsbIconLink}.
    * 
    * @var      string
    */
   protected $_type = fsbIconLink;

   /**
    * Getter method for {@link $_type}.
    *
    * @return   string  {@link $_type}
    */
   function getType()    {return $this->_type;}

   /**
    * Setter method for {@link $_type}.
    *
    * @param    string  $value
    */
   function setType($value)    {$this->_type = $value;}

   /**
    * Getter for {@link $_type}’s default value.
    *
    * @return   string  {@link fsbIconLink}
    */
   function defaultType()    {return fsbIconLink;}
}

// Alignment

/**
 * Left alignment.
 *
 * @const       fbaLeft
 */
define('fbaLeft', 'fbaLeft');

/**
 * Right alignment.
 *
 * @const       fbaRight
 */
define('fbaRight', 'fbaRight');

/**
 * Top alignment.
 *
 * @const       fbaTop
 */
define('fbaTop', 'fbaTop');

/**
 * Bottom alignment.
 *
 * @const       fbaBottom
 */
define('fbaBottom', 'fbaBottom');

/**
 * Top left alignment.
 *
 * @const       fbaTopLeft
 */
define('fbaTopLeft', 'fbaTopLeft');

/**
 * Top right alignment.
 *
 * @const       fbaTopRight
 */
define('fbaTopRight', 'fbaTopRight');

/**
 * Bottom left alignment.
 *
 * @const       fbaBottomLeft
 */
define('fbaBottomLeft', 'fbaBottomLeft');

/**
 * Bottom right alignment.
 *
 * @const       fbaBottomRight
 */
define('fbaBottomRight', 'fbaBottomRight');


/**
 * Renders a Flash-based FLV player that can stream arbitrary FLV (video/audio) files on the page.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/flv/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBFlv extends FBControl
{

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/flash.png';
      $this->_iconic = true;
      $this->Width = 200;
      $this->Height = 150;

   }

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo '<fb:flv ';
      echo getStringAttribute('src', $this->_src);
      echo getStringAttribute('title', $this->_title);
      switch($this->_scale)
      {
         case fbsShowAll: echo getString('scale', 'showall');break;
         case fbsNoBorder: echo getString('scale', 'noborder');break;
         case fbsExactFit: echo getString('scale', 'exactfit');break;
      }
      echo getStringAttribute('img', $this->_imagemovie);
      switch($this->_align)
      {
         case fbaLeft: echo getString('align', 'l');break;
         case fbaRight: echo getString('align', 'r');break;
         case fbaTop: echo getString('align', 't');break;
         case fbaBottom: echo getString('align', 'b');break;
      }

      switch($this->_salign)
      {
         case fbaLeft: echo getString('salign', 'l');break;
         case fbaRight: echo getString('salign', 'r');break;
         case fbaTop: echo getString('salign', 't');break;
         case fbaBottom: echo getString('salign', 'b');break;
      }
      echo getStringAttribute('color', $this->_color);
      echo '/>';
   }

   // Source

   /**
    * Absolute URL to the FLV file.
    * 
    * @var      string
    */
   protected $_src = '';

   /**
    * Getter method for {@link $_src}.
    *
    * @return   string  {@link $_src}
    */
   function getSrc()    {return $this->_src;}

   /**
    * Setter method for {@link $_src}.
    *
    * @param    string  $value
    */
   function setSrc($value)    {$this->_src = $value;}

   /**
    * Getter for {@link $_src}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSrc()    {return '';}

   // Title

   /**
    * Title for the video.
    *
    * The title will be displayed in the control bar for the movie.
    * 
    * @var      string
    */
   protected $_title = '';

   /**
    * Getter method for {@link $_title}.
    *
    * @return   string  {@link $_title}
    */
   function getTitle()    {return $this->_title;}

   /**
    * Setter method for {@link $_title}.
    *
    * @param    string  $value
    */
   function setTitle($value)    {$this->_title = $value;}

   /**
    * Getter for {@link $_title}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultTitle()    {return '';}

   // Scale

   /**
    * Scaling method for the movie inside the container.
    *
    * Possible values are: {@link fbsShowAll}, {@link fbsNoBorder}, or {@link fbsExactFit}.
    * 
    * @var      string
    */
   protected $_scale = fbsShowAll;

   /**
    * Getter method for {@link $_scale}.
    *
    * @return   string  {@link $_scale}
    */
   function getScale()    {return $this->_scale;}

   /**
    * Setter method for {@link $_scale}.
    *
    * @param    string  $value
    */
   function setScale($value)    {$this->_scale = $value;}

   /**
    * Getter for {@link $_scale}’s default value.
    *
    * @return   string  {@link fbsShowAll}
    */
   function defaultScale()    {return fbsShowAll;}

   // Movie Preview Image

   /**
    * Absolute URL to an image to be displayed under the <b>Play</b> button before the movie starts.
    * 
    * @var      string
    */
   protected $_imagemovie = '';

   /**
    * Getter method for {@link $_imagemovie}.
    *
    * @return   string  {@link $_imagemovie}
    */
   function getImageMovie()    {return $this->_imagemovie;}

   /**
    * Setter method for {@link $_imagemovie}.
    *
    * @param    string  $value
    */
   function setImageMovie($value)    {$this->_imagemovie = $value;}

   /**
    * Getter for {@link $_imagemovie}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultImageMovie()    {return '';}

   // Alignment

   /**
    * Alignment of the FLV file within the container.
    *
    * Possible values are: {@link fbaBottom}, {@link fbaBottomLeft}, {@link fbaBottomRight},
    * {@link fbaCenter}, {@link fbaLeft}, {@link fbaRight}, {@link fbaTop}, {@link fbaTopLeft}, or
    * {@link fbaTopRight}.
    * 
    * @var      string
    */
   protected $_align = fbaLeft;

   /**
    * Getter method for {@link $_align}.
    *
    * @return   string  {@link $_align}
    */
   function getAlign()    {return $this->_align;}

   /**
    * Setter method for {@link $_align}.
    *
    * @param    string  $value
    */
   function setAlign($value)    {$this->_align = $value;}

   /**
    * Getter for {@link $_align}’s default value.
    *
    * @return   string  {@link fbaLeft}
    */
   function defaultAlign()    {return fbaLeft;}

   // Scaled Alignment

   /**
    * Alignment of the scaled FLV file within the container, based on its width and height.
    *
    * Possible values are: {@link fbaBottom}, {@link fbaBottomLeft}, {@link fbaBottomRight},
    * {@link fbaCenter}, {@link fbaLeft}, {@link fbaRight}, {@link fbaTop}, {@link fbaTopLeft}, or
    * {@link fbaTopRight}.
    * 
    * @var      string
    */
   protected $_salign = fbaLeft;

   /**
    * Getter method for {@link $_salign}.
    *
    * @return   string  {@link $_salign}
    */
   function getSalign()    {return $this->_salign;}

   /**
    * Setter method for {@link $_salign}.
    *
    * @param    string  $value
    */
   function setSalign($value)    {$this->_salign = $value;}

   /**
    * Getter for {@link $_align}’s default value.
    *
    * @return   string  {@link fbaLeft}
    */
   function defaultSalign()    {return fbaLeft;}

   // Background Color

   /**
    * Background Color.
    *
    * This is the color of the background while the movie is playing.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    * 
    * @var      string
    */
   protected $_color = '#000000';

   /**
    * Getter method for {@link $_color}.
    *
    * @return   string  {@link $_color}
    */
   function getColor()    {return $this->_color;}

   /**
    * Setter method for {@link $_color}.
    *
    * @param    string  $value
    */
   function setColor($value)    {$this->_color = $value;}

   /**
    * Getter for {@link $_color}’s default value.
    *
    * @return   string  Black ('#000000')
    */
   function defaultColor()    {return '#000000';}
}

// Scrolling

/**
 * Scrollbars are always displayed, even if they are not needed.
 *
 * @const       fisYes
 */
define('fisYes', 'fisYes');

/**
 * Scrollbars are never displayed, even if they are needed.
 *
 * @const       fisNo
 */
define('fisNo', 'fisNo');

/**
 * Scrollbars are displayed if needed.
 *
 * @const       fisAuto
 */
define('fisAuto', 'fisAuto');


/**
 * Iframe element.
 * 
 * This cannot be used on a profile page, neither on application tabs nor on profile boxes. Also, 
 * you cannot use FBML inside an iframe, you must use XFBML tags instead.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/iframe/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBIframe extends FBControl
{

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/iframe.gif';
      $this->Width = 153;
      $this->Height = 22;
   }

   // Source

   /**
    * URL to the page to be displayed inside the iframe.
    *
    * Signed GET parameters are appended to the URL to prove that the frame was loaded through
    * Facebook, as described in the forms section. These parameters also include one named
    * <tt>fb_sig_in_iframe</tt> to indicate this context.
    * 
    * @var      string
    */
   protected $_src = '';

   /**
    * Getter method for {@link $_src}.
    *
    * @return   string  {@link $_src}
    */
   function getSrc()    {return $this->_src;}

   /**
    * Setter method for {@link $_src}.
    *
    * @param    string  $value
    */
   function setSrc($value)    {$this->_src = $value;}

   /**
    * Getter for {@link $_src}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSrc()    {return '';}

   // Smart Size

   /**
    * Smart size.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * If set to true ('1'), iframe size is smartly set to fit the remaining space on the page and
    * disables the outer scrollbars.
    *
    * If you include more than one smartsizing iframe, they automatically distribute the size
    * appropriately.
    * 
    * @var      string
    */
   protected $_smartsize = '0';

   /**
    * Getter method for {@link $_smartsize}.
    *
    * @return   string  {@link $_smartsize}
    */
   function getSmartSize()    {return $this->_smartsize;}

   /**
    * Setter method for {@link $_smartsize}.
    *
    * @param    string  $value
    */
   function setSmartSize($value)    {$this->_smartsize = $value;}

   /**
    * Getter for {@link $_smartsize}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultSmartSize()    {return '0';}

   // Border

   /**
    * Whether or not to display a border around the iframe.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_frameborder = '0';

   /**
    * Getter method for {@link $_frameborder}.
    *
    * @return   string  {@link $_frameborder}
    */
   function getFrameBorder()    {return $this->_frameborder;}

   /**
    * Setter method for {@link $_frameborder}.
    *
    * @param    string  $value
    */
   function setFrameBorder($value)    {$this->_frameborder = $value;}

   /**
    * Getter for {@link $_frameborder $_frameborder’s} default value.
    *
    * @return   string  False ('0')
    */
   function defaultFrameBorder()    {return '0';}

   // Scrolling

   /**
    * Scrolling.
    *
    * This determines whether the iframe should display or not scrollbars.
    *
    * Possible values are: {@link fisAuto}, {@link fisNo}, or {@link fisYes}.
    * 
    * @var      string
    */
   protected $_scrolling = fisYes;

   /**
    * Getter method for {@link $_scrolling}.
    *
    * @return   string  {@link $_scrolling}
    */
   function getScrolling()    {return $this->_scrolling;}

   /**
    * Setter method for {@link $_scrolling}.
    *
    * @param    string  $value
    */
   function setScrolling($value)    {$this->_scrolling = $value;}

   /**
    * Getter for {@link $_scrolling}’s default value.
    *
    * @return   string  {@link fisYes}
    */
   function defaultScrolling()    {return fisYes;}

   // Style

   /**
    * Style.
    *
    * Inline CSS style definition to be applied to the iframe.
    * 
    * @var      string
    */
   protected $_style = '';

   /**
    * Getter method for {@link $_style}.
    *
    * @return   string  {@link $_style}
    */
   function getStyle()    {return $this->_style;}

   /**
    * Setter method for {@link $_style}.
    *
    * @param    string  $value
    */
   function setStyle($value)    {$this->_style = $value;}

   /**
    * Getter for {@link $_style}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultStyle()    {return '';}

   // Resizable

   /**
    * Whether iframe should be resizable through JavaScript API or not.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * If you set this property to true ('1'), you must specify a name for this iframe.
    *
    * This option cannot be used when {@link $_smartsize} is enabled.
    * 
    * @var      string
    */
   protected $_resizable = '0';

   /**
    * Getter method for {@link $_resizable}.
    *
    * @return   string  {@link $_resizable}
    */
   function getResizable()    {return $this->_resizable;}

   /**
    * Setter method for {@link $_resizable}.
    *
    * @param    string  $value
    */
   function setResizable($value)    {$this->_resizable = $value;}

   /**
    * Getter for {@link $_resizable}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultResizable()    {return '0';}

   // Include Facebook Signature

   /**
    * Whether credential information should be sent to the webpage in the iframe or not.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * Setting this to false ('0') when iframe displays an external webpage prevents prevent webpage
    * owners from stealing private information.
    * 
    * @var      string
    */
   protected $_includefbsig = '1';

   /**
    * Getter method for {@link $_includefbsig}.
    *
    * @return   string  {@link $_includefbsig}
    */
   function getIncludeFBSig()    {return $this->_includefbsig;}

   /**
    * Setter method for {@link $_includefbsig}.
    *
    * @param    string  $value
    */
   function setIncludeFBSig($value)    {$this->_includefbsig = $value;}

   /**
    * Getter for {@link $_includefbsig}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultIncludeFBSig()    {return '1';}

   /**
    * {@inheritdoc}
    */
   function dumpContents()
   {
      if(($this->ControlState & csDesigning) == csDesigning)
      {
         echo "<table width=\"$this->Width\" style=\"border: 1px solid #000000\" height=\"$this->Height\"><tr><td align=\"center\" valign=\"center\" style=\"font-family:Verdana; font-size: 11px;\">$this->_src</td></tr></table>";
      }
      else
      {
         parent::dumpContents();
      }
   }

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo '<fb:iframe ';
      echo getStringAttribute('src', $this->_src);
      echo getBooleanAttribute('smartsize', $this->_smartsize);
      echo getBooleanIntegerAttribute('frameborder', $this->_frameborder);

      switch($this->_scrolling)
      {
         case fisYes: echo getString('scrolling', 'yes');break;
         case fisNo: echo getString('scrolling', 'no');break;
         case fisAuto: echo getString('scrolling', 'auto');break;
      }

      echo getStringAttribute('style', $this->_style);
      echo getString('width', $this->Width);
      echo getString('height', $this->Height);
      echo getBooleanAttribute('resizable', $this->_resizable);
      echo getString('name', $this->_name);
      echo getBooleanAttribute('include_fb_sig', $this->_includefbsig);
      echo '/>';
   }

}


/**
 * Renders a Flash-based audio player.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/mp3/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBMp3 extends FBControl
{

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/mp3.gif';
      $this->ControlStyle = 'csFixedHeight=1';
      $this->Width = 313;
      $this->Height = 29;
   }

   // Source

   /**
    * Absolute URL to the audio file.
    * 
    * @var      string
    */
   protected $_src = '';

   /**
    * Getter method for {@link $_src}.
    *
    * @return   string  {@link $_src}
    */
   function getSrc()    {return $this->_src;}

   /**
    * Setter method for {@link $_src}.
    *
    * @param    string  $value
    */
   function setSrc($value)    {$this->_src = $value;}

   /**
    * Getter for {@link $_src}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSrc()    {return '';}

   // Title

   /**
    * Title for the song.
    * 
    * @var      string
    */
   protected $_title = '';

   /**
    * Getter method for {@link $_title}.
    *
    * @return   string  {@link $_title}
    */
   function getTitle()    {return $this->_title;}

   /**
    * Setter method for {@link $_title}.
    *
    * @param    string  $value
    */
   function setTitle($value)    {$this->_title = $value;}

   /**
    * Getter for {@link $_title}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultTitle()    {return '';}

   // Artist

   /**
    * The name of the artist performing the song.
    * 
    * @var      string
    */
   protected $_artist = '';

   /**
    * Getter method for {@link $_artist}.
    *
    * @return   string  {@link $_artist}
    */
   function getArtist()    {return $this->_artist;}

   /**
    * Setter method for {@link $_artist}.
    *
    * @param    string  $value
    */
   function setArtist($value)    {$this->_artist = $value;}

   /**
    * Getter for {@link $_artist}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultArtist()    {return '';}

   // Album

   /**
    * Title of the album
.
    * 
    * @var      string
    */
   protected $_album = '';

   /**
    * Getter method for {@link $_album}.
    *
    * @return   string  {@link $_album}
    */
   function getAlbum()    {return $this->_album;}

   /**
    * Setter method for {@link $_album}.
    *
    * @param    string  $value
    */
   function setAlbum($value)    {$this->_album = $value;}

   /**
    * Getter for {@link $_album}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultAlbum()    {return '';}

   /**
    * {@inheritdoc}
    */
   function dumpContents()
   {
      if(($this->ControlState & csDesigning) == csDesigning)
      {

         ?>
<table width="<?php echo $this->Width;?>" height="<?php echo $this->Height;?>" cellpadding="0" cellspacing="0" border="0">
<tr>
<td width="68"><img src="<?php echo RPCL_HTTP_PATH;?>/facebook/images/mp3_left.png"></td>
<td background="<?php echo RPCL_HTTP_PATH;?>/facebook/images/mp3_center.png">&nbsp;</td>
<td width="34"><img src="<?php echo RPCL_HTTP_PATH;?>/facebook/images/mp3_right.png"></td>
</tr>
</table>
         <?php
      }
      else
         parent::dumpContents();
   }

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo '<fb:mp3 ';
      echo getStringAttribute('src', $this->_src);
      echo getStringAttribute('title', $this->_title);
      echo getStringAttribute('artist', $this->_artist);
      echo getStringAttribute('album', $this->_album);
      echo getString('width', $this->Width);
      echo getString('height', $this->Height);
      echo "></fb:mp3>";
   }

}


/**
 * Microsoft Silverlight control.
 * 
 * On profile pages, an image will appear at first. User must click it for the control to be
 * actually displayed (replacing the image). On canvas pages, on the other hand, the control is
 * directly rendered.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/silverlight/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBSilverlight extends FBControl
{

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/silverlight.png';
      $this->_iconic = true;
      $this->Width = 200;
      $this->Height = 150;

   }

   // Source

   /**
    * URL to the Silverlight control.
    * 
    * @var      string
    */
   protected $_silverlightsrc = '';

   /**
    * Getter method for {@link $_silverlightsrc}.
    *
    * @return   string  {@link $_silverlightsrc}
    */
   function getSilverlightSrc()    {return $this->_silverlightsrc;}

   /**
    * Setter method for {@link $_silverlightsrc}.
    *
    * @param    string  $value
    */
   function setSilverlightSrc($value)    {$this->_silverlightsrc = $value;}

   /**
    * Getter for {@link $_silverlightsrc}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSilverlightSrc()    {return '';}

   // Image Source

   /**
    * URL to the image to be displayed instead of the Silverlight control in profile pages.
    *
    * Users must click the image for it to be replaced with the Silverlight control.
    *
    * Only GIF and JPEG formats are supported.
    *
    * Default image is transparent, which renders Silverlight control unusable on profile pages.
    * 
    * @var      string
    */
   protected $_imagesrc = '';

   /**
    * Getter method for {@link $_imagesrc}.
    *
    * @return   string  {@link $_imagesrc}
    */
   function getImageSrc()    {return $this->_imagesrc;}

   /**
    * Setter method for {@link $_imagesrc}.
    *
    * @param    string  $value
    */
   function setImageSrc($value)    {$this->_imagesrc = $value;}

   /**
    * Getter for {@link $_imagesrc}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultImageSrc()    {return '';}

   // Image Style

   /**
    * Image Style.
    *
    * Inline CSS style definition to be applied to the image.
    * 
    * @var      string
    */
   protected $_imagestyle = '';

   /**
    * Getter method for {@link $_imagestyle}.
    *
    * @return   string  {@link $_imagestyle}
    */
   function getImageStyle()    {return $this->_imagestyle;}

   /**
    * Setter method for {@link $_imagestyle}.
    *
    * @param    string  $value
    */
   function setImageStyle($value)    {$this->_imagestyle = $value;}

   /**
    * Getter for {@link $_imagestyle}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultImageStyle()    {return '';}

   // Image Class

   /**
    * Class attribute of the image.
    * 
    * @var      string
    */
   protected $_imageclass = '';

   /**
    * Getter method for {@link $_imageclass}.
    *
    * @return   string  {@link $_imageclass}
    */
   function getImageClass()    {return $this->_imageclass;}

   /**
    * Setter method for {@link $_imageclass}.
    *
    * @param    string  $value
    */
   function setImageClass($value)    {$this->_imageclass = $value;}

   /**
    * Getter for {@link $_imageclass}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultImageClass()    {return '';}

   // Background Color

   /**
    * Background Color.
    *
    * This is the background color for the Silverlight control.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    * 
    * @var      string
    */
   protected $_swfbgcolor = '';

   /**
    * Getter method for {@link $_swfbgcolor}.
    *
    * @return   string  {@link $_swfbgcolor}
    */
   function getSwfBgColor()    {return $this->_swfbgcolor;}

   /**
    * Setter method for {@link $_swfbgcolor}.
    *
    * @param    string  $value
    */
   function setSwfBgColor($value)    {$this->_swfbgcolor = $value;}

   /**
    * Getter for {@link $_swfbgcolor}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSwfBgColor()    {return '';}

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo '<fb:silverlight ';
      echo getStringAttribute('silverlightsrc', $this->_silverlightsrc);
      echo getStringAttribute('imgsrc', $this->_imagesrc);
      echo getStringAttribute('imgstyle', $this->_imagestyle);
      echo getStringAttribute('imgclass', $this->_imageclass);
      echo getStringAttribute('swfbgcolor', $this->_swfbgcolor);
      echo getString('width', $this->Width);
      echo getString('height', $this->Height);
      echo '/>';
   }
}

// Shockwave Flash Quality

/**
 * Best quality.
 *
 * @const       fsqBest
 */
define('fsqBest', 'fsqBest');

/**
 * High quality.
 *
 * @const       fsqHigh
 */
define('fsqHigh', 'fsqHigh');

/**
 * Medium quality.
 *
 * @const       fsqMedium
 */
define('fsqMedium', 'fsqMedium');

/**
 * Low quality.
 *
 * @const       fsqLow
 */
define('fsqLow', 'fsqLow');

// Scaling Methods

/**
 * Display the whole movie, overriding container dimensions, while maintaining the original aspect
 * ratio of the container.
 *
 * @const       fbsShowAll
 */
define('fbsShowAll', 'fbsShowAll');

/**
 * Movie fills the container, without distortion but possibly with some cropping, while maintaining
 * the original aspect ratio of the container.
 *
 * @const       fbsNoBorder
 */
define('fbsNoBorder', 'fbsNoBorder');

/**
 * Movie dimensions match container dimensions, which may result in distortion.
 *
 * @const       fbsExactFit
 */
define('fbsExactFit', 'fbsExactFit');

// Opacity

/**
 * SWF is layered together with other HTML elements on the web page. Its background color is
 * transparent. HTML elements beneath it are visible through any transparent areas, with alpha
 * blending. Performance is worse than with {@link fbwWindow}.
 *
 * @const       fbwTransparent
 */
define('fbwTransparent', 'fbwTransparent');

/**
 * SWF is layered together with other HTML elements on the web page. It hides everything behind it.
 * Performance is worse than with {@link fbwWindow}.
 *
 * @const       fbwOpaque
 */
define('fbwOpaque', 'fbwOpaque');

/**
 * SWF plays in its own rectangle on a web page. You cannot explicitly specify if its content
 * appears above or below other HTML elements on the same web page.
 *
 * @const       fbwWindow
 */
define('fbwWindow', 'fbwWindow');


/**
 * Shockwave Flash Object.
 * 
 * On profile pages, an image will appear at first. User must click it for the object to be
 * actually displayed (replacing the image). On canvas pages, on the other hand, the object is
 * directly rendered.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/fbml/swf/ Facebook Documentation
 * @deprecated  {@link http://developers.facebook.com/docs/reference/fbml Facebook deprecated FBML}
 */
class FBSwf extends FBControl
{

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_image = RPCL_HTTP_PATH . '/facebook/images/flash.png';
      $this->_iconic = true;
      $this->Width = 200;
      $this->Height = 150;

   }

   /**
    * Prints the FBML code for the control.
    */
   function dumpFBMLCode()
   {
      echo '<fb:swf ';
      echo getString('height', $this->Height);
      echo getString('width', $this->Width);
      echo getStringAttribute('swfsrc', $this->_swfsrc);
      echo getStringAttribute('imgsrc', $this->_imagesrc);
      echo getStringAttribute('imgstyle', $this->_imagestyle);
      echo getStringAttribute('imgclass', $this->_imageclass);
      echo getStringAttribute('flashvars', $this->_flashvars);
      //TODO: Check here for #color or color
      echo getStringAttribute('swfbgcolor', $this->_swfbgcolor);
      echo getBooleanAttribute('waitforclick', $this->_waitforclick);
      switch($this->_salign)
      {
         case fbaTop: echo getString('salign', 't');break;
         case fbaBottom: echo getString('salign', 'b');break;
         case fbaLeft: echo getString('salign', 'l');break;
         case fbaRight: echo getString('salign', 'r');break;
         case fbaTopLeft: echo getString('salign', 'tl');break;
         case fbaTopRight: echo getString('salign', 'tr');break;
         case fbaBottomLeft: echo getString('salign', 'bl');break;
         case fbaBottomRight: echo getString('salign', 'br');break;
      }
      echo getBooleanAttribute('loop', $this->_loop);
      switch($this->_quality)
      {
         case fsqBest: echo getString('quality', 'best');break;
         case fsqHigh: echo getString('quality', 'high');break;
         case fsqMedium: echo getString('quality', 'medium');break;
         case fsqLow: echo getString('quality', 'low');break;
      }
      switch($this->_scale)
      {
         case fbsShowAll: echo getString('scale', 'showall');break;
         case fbsNoBorder: echo getString('scale', 'noborder');break;
         case fbsExactFit: echo getString('scale', 'exactfit');break;
      }
      switch($this->_align)
      {
         case fbaLeft: echo getString('align', 'left');break;
         case fbaRight: echo getString('align', 'right');break;
         case fbaCenter: echo getString('align', 'center');break;
      }
      switch($this->_wmode)
      {
         case fbwTransparent: echo getString('wmode', 'transparent');break;
         case fbwOpaque: echo getString('wmode', 'opaque');break;
         case fbwWindow: echo getString('wmode', 'window');break;
         // TODO: Add missing opacity options (direct and gpu). See http://kb2.adobe.com/cps/127/tn_12701.html.
      }
      echo '/>';

   }

   // Source

   /**
    * Absolute URL to the Flash object.
    * 
    * @var      string
    */
   protected $_swfsrc = '';

   /**
    * Getter method for {@link $_swfsrc}.
    *
    * @return   string  {@link $_swfsrc}
    */
   function getSwfSrc()    {return $this->_swfsrc;}

   /**
    * Setter method for {@link $_swfsrc}.
    *
    * @param    string  $value
    */
   function setSwfSrc($value)    {$this->_swfsrc = $value;}

   /**
    * Getter for {@link $_swfsrc}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSwfSrc()    {return '';}

   // Image Source

   /**
    * URL to the image to be displayed instead of the Flash object in profile pages.
    *
    * Users must click the image for it to be replaced with the Flash object.
    *
    * Only GIF and JPEG formats are supported.
    *
    * Default image is transparent, which renders Flash object unusable on profile pages if no
    * height or width parameters are set.
    * 
    * @var      string
    */
   protected $_imagesrc = '';

   /**
    * Getter method for {@link $_imagesrc}.
    *
    * @return   string  {@link $_imagesrc}
    */
   function getImageSrc()    {return $this->_imagesrc;}

   /**
    * Setter method for {@link $_imagesrc}.
    *
    * @param    string  $value
    */
   function setImageSrc($value)    {$this->_imagesrc = $value;}

   /**
    * Getter for {@link $_imagesrc}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultImageSrc()    {return '';}

   // Image Style

   /**
    * Image Style.
    *
    * Inline CSS style definition to be applied to the image.
    * 
    * @var      string
    */
   protected $_imagestyle = '';

   /**
    * Getter method for {@link $_imagestyle}.
    *
    * @return   string  {@link $_imagestyle}
    */
   function getImageStyle()    {return $this->_imagestyle;}

   /**
    * Setter method for {@link $_imagestyle}.
    *
    * @param    string  $value
    */
   function setImageStyle($value)    {$this->_imagestyle = $value;}

   /**
    * Getter for {@link $_imagestyle}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultImageStyle()    {return '';}

   // Image Class

   /**
    * Class attribute of the image.
    * 
    * @var      string
    */
   protected $_imageclass = '';

   /**
    * Getter method for {@link $_imageclass}.
    *
    * @return   string  {@link $_imageclass}
    */
   function getImageClass()    {return $this->_imageclass;}

   /**
    * Setter method for {@link $_imageclass}.
    *
    * @param    string  $value
    */
   function setImageClass($value)    {$this->_imageclass = $value;}

   /**
    * Getter for {@link $_imageclass}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultImageClass()    {return '';}

   // Variables

   /**
    * URL-encoded Flash variables.
    * 
    * @var      string
    */
   protected $_flashvars = '';

   /**
    * Getter method for {@link $_flashvars}.
    *
    * @return   string  {@link $_flashvars}
    */
   function getFlashVars()    {return $this->_flashvars;}

   /**
    * Setter method for {@link $_flashvars}.
    *
    * @param    string  $value
    */
   function setFlashVars($value)    {$this->_flashvars = $value;}

   /**
    * Getter for {@link $_flashvars}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultFlashVars()    {return '';}

   // Background Color

   /**
    * Background Color.
    *
    * This is the background color for the Flash object. It is transparent by default.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    * 
    * @var      string
    */
   protected $_swfbgcolor = '';

   /**
    * Getter method for {@link $_swfbgcolor}.
    *
    * @return   string  {@link $_swfbgcolor}
    */
   function getSwfBgColor()    {return $this->_swfbgcolor;}

   /**
    * Setter method for {@link $_swfbgcolor}.
    *
    * @param    string  $value
    */
   function setSwfBgColor($value)    {$this->_swfbgcolor = $value;}

   /**
    * Getter for {@link $_swfbgcolor}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSwfBgColor()    {return '';}

   // Include Self

   /**
    * Whether to wait for user to click to play, or to autoplay the Flash object.
    *
    * It can be set either to true ('1') or to false ('0').
    *
    * False ('0') will not work on profile pages, except after an AJAX call.
    * 
    * @var      string
    */
   protected $_waitforclick = '1';

   /**
    * Getter method for {@link $_waitforclick}.
    *
    * @return   string  {@link $_waitforclick}
    */
   function getWaitForClick()    {return $this->_waitforclick;}

   /**
    * Setter method for {@link $_waitforclick}.
    *
    * @param    string  $value
    */
   function setWaitForClick($value)    {$this->_waitforclick = $value;}

   /**
    * Getter for {@link $_includeself}’s default value.
    *
    * @return   string  True ('1')
    */
   function defaultWaitForClick()    {return '1';}

   // Scaled Alignment

   /**
    * Alignment of the scaled Flash object file within the container, based on its width and height.
    *
    * Possible values are: {@link fbaBottom}, {@link fbaBottomLeft}, {@link fbaBottomRight},
    * {@link fbaCenter}, {@link fbaLeft}, {@link fbaRight}, {@link fbaTop}, {@link fbaTopLeft}, or
    * {@link fbaTopRight}.
    * 
    * @var      string
    */
   protected $_salign = fbaLeft;

   /**
    * Getter method for {@link $_salign}.
    *
    * @return   string  {@link $_salign}
    */
   function getSalign()    {return $this->_salign;}

   /**
    * Setter method for {@link $_salign}.
    *
    * @param    string  $value
    */
   function setSalign($value)    {$this->_salign = $value;}

   /**
    * Getter for {@link $_align}’s default value.
    *
    * @return   string  {@link fbaLeft}
    */
   function defaultSalign()    {return fbaLeft;}

   // Smart Size

   /**
    * Whether or not to play the Flash object continuously.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
   protected $_loop = '0';

   /**
    * Getter method for {@link $_loop}.
    *
    * @return   string  {@link $_loop}
    */
   function getLoop()    {return $this->_loop;}

   /**
    * Setter method for {@link $_loop}.
    *
    * @param    string  $value
    */
   function setLoop($value)    {$this->_loop = $value;}

   /**
    * Getter for {@link $_loop}’s default value.
    *
    * @return   string  False ('0')
    */
   function defaultLoop()    {return '0';}

   // Quality

   /**
    * Quality Flash object should be displayed with.
    *
    * Possible values are: {@link fsqBest}, {@link fsqHigh}, {@link fsqMedium}, or {@link fsqLow}.
    * 
    * @var      string
    */
   protected $_quality = fsqBest;

   /**
    * Getter method for {@link $_quality}.
    *
    * @return   string  {@link $_quality}
    */
   function getQuality()    {return $this->_quality;}

   /**
    * Setter method for {@link $_quality}.
    *
    * @param    string  $value
    */
   function setQuality($value)    {$this->_quality = $value;}

   /**
    * Getter for {@link $_quality}’s default value.
    *
    * @return   string  {@link fsqBest}
    */
   function defaultQuality()    {return fsqBest;}

   // Scale

   /**
    * Scaling method for the Flash object inside the container.
    *
    * Possible values are: {@link fbsShowAll}, {@link fbsNoBorder}, or {@link fbsExactFit}.
    * 
    * @var      string
    */
   protected $_scale = fbsShowAll;

   /**
    * Getter method for {@link $_scale}.
    *
    * @return   string  {@link $_scale}
    */
   function getScale()    {return $this->_scale;}

   /**
    * Setter method for {@link $_scale}.
    *
    * @param    string  $value
    */
   function setScale($value)    {$this->_scale = $value;}

   /**
    * Getter for {@link $_scale}’s default value.
    *
    * @return   string  {@link fbsShowAll}
    */
   function defaultScale()    {return fbsShowAll;}

   // Alignment

   /**
    * Alignment of the Flash object within the container.
    *
    * Possible values are: {@link fbaBottom}, {@link fbaBottomLeft}, {@link fbaBottomRight},
    * {@link fbaCenter}, {@link fbaLeft}, {@link fbaRight}, {@link fbaTop}, {@link fbaTopLeft}, or
    * {@link fbaTopRight}.
    * 
    * @var      string
    */
   protected $_align = fbaLeft;

   /**
    * Getter method for {@link $_align}.
    *
    * @return   string  {@link $_align}
    */
   function getAlign()    {return $this->_align;}

   /**
    * Setter method for {@link $_align}.
    *
    * @param    string  $value
    */
   function setAlign($value)    {$this->_align = $value;}

   /**
    * Getter for {@link $_align}’s default value.
    *
    * @return   string  {@link fbaLeft}
    */
   function defaultAlign()    {return fbaLeft;}

   // Window Mode

   /**
    * Window mode to display the Flash object with.
    *
    * Possible values are: {@link fbwOpaque}, {@link fbwTransparent}, or {@link fbwWindow}.
    * 
    * @var      string
    */
   protected $_wmode = fbwTransparent;

   /**
    * Getter method for {@link $_wmode}.
    *
    * @return   string  {@link $_wmode}
    */
   function getWMode()    {return $this->_wmode;}

   /**
    * Setter method for {@link $_wmode}.
    *
    * @param    string  $value
    */
   function setWMode($value)    {$this->_wmode = $value;}

   /**
    * Getter for {@link $_wmode}’s default value.
    *
    * @return   string  {@link fbwTransparent}
    */
   function defaultWMode()    {return fbwTransparent;}
}
?>