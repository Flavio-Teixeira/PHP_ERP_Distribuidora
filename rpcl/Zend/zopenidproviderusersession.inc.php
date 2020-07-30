<?php

/**
 * Zend/zopenidproviderusersession.inc.php
 * 
 * Defines Zend Framework OpenID Provider User Session component.
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
use_unit("Zend/zcommon/zopenidprovideruser.inc.php");
require_once("Zend/OpenId/Provider/User/Session.php");

/**
* Create User object used to save session users.
*
*/
class ZOpenIdProviderUserSession extends ZOpenIdProviderUser
{

   // Class constructor.

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Create User

   /**
    * Returns an instance of {@link Zend_OpenId_Provider_User_Session}.
    *
    * @return    Zend_OpenId_Provider_User_Session
    */
   function CreateUser()
   {
      $namespace = new Zend_Session_Namespace();
      $session = new Zend_OpenId_Provider_User_Session($namespace);

      return $session;
   }

}

?>