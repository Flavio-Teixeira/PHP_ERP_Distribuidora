<?php

/**
 * Zend/zauthdigest.inc.php
 * 
 * Defines Zend Framework Authentication Digest adapter.
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
use_unit("Zend/zcommon/zauthadapter.inc.php");
use_unit("Zend/framework/library/Zend/Auth/Adapter/Digest.php");

/**
 * {@link ZAuthAdapter Adapter} for authentication through digest.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.auth.adapter.digest.html Zend Framework Documentation
 */
class ZAuthDigest extends ZAuthAdapter
{

        // Filename

        /**
         * Filename.
         *
         * Name of the file which contains login information for all users.
         *
         * Each line in the file should contain authentication information following the syntax 
         * below (password is encrypted):
         *
         * Username:Realm Name:fde17b91c3a510ecbaf7dbd37f59d4f8
         *
         * Notice that you can user whitespaces, and that values are separated by colons (:).
         *
         * @var string
         */
        protected $_filename="";

        /**
         * Getter method for {@link $_filename}.
         *
         * @return   string  {@link $_filename}
         */
        function getFileName() { return $this->_filename; }

        /**
         * Setter method for {@link $_filename}.
         *
         * @param    string  $value
         */
        function setFileName($value) { $this->_filename=$value; }

        /**
         * Getter for {@link $_filename}’s default value.
         *
         * @return   string  Empty string
         */
        function defaultFileName() { return ""; }

        /*protected $_realm="";

        function getUserRealm() { return $this->_realm; }
        function setUserRealm($value) { $this->_realm=$value; }
        function defaultUserRealm() { return ""; }*/

        /**
         * {@inheritdoc}
         * 
         * Returns true if user is properly authenticated with given information, false otherwise.
         *
         * @return      boolean
         */
        function Authenticate($auth, $username, $password, $realm)
        {
                if($this->_filename!="")
                {
                        $adapter = new Zend_Auth_Adapter_Digest($this->_filename, $realm, $username, $password);

                        $result = $auth->authenticate($adapter);

                        if($result->IsValid())
                        {
                                return true;
                        }
                        else
                        {
                                return false;
                        }
                }
                else
                        return null;
        }

        /**
         * {@inheritdoc}
         */
        function __construct($aowner=null)
        {
                //Calls inherited constructor
                parent::__construct($aowner);

        }
}


?>