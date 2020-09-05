<?php

/**
 * Zend/zcommon/zcommon.inc.php
 * 
 * Defines Zend Framework shared code.
 *
 * This file is used to start the Zend Framework session <b>before</b> the RPCL session starts, so
 * there is no need to change the Zend Framework source code, and their components work properly.
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

// Define Zend Framework session if it was not defined already.
if (!defined('ZSESSION'))
{
   define('ZSESSION',1);

   use_unit('Zend/framework/library/Zend/Session.php');

   if (isset($_SESSION))
   {
      $save=Zend_Session::$_unitTestEnabled;
      Zend_Session::$_unitTestEnabled=true;
   }

   Zend_Session::start(true); // attempt auto-start (throws exception if strict option set)

   if (isset($save))
   {
      Zend_Session::$_unitTestEnabled=$save;
   }
}
?>