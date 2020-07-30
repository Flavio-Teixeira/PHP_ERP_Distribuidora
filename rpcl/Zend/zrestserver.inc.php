<?php

/**
 * Zend/zrestserver.inc.php
 * 
 * Defines Zend Framework REST Server component.
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
use_unit("Zend/framework/library/Zend/Rest/Server.php");

/**
 * Component to generate a REST server.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.rest.server.html Zend Framework Documentation
 */
class ZRestServer extends Component
{

   /**
    * Zend Framework REST Server instance.
    *
    * @var      Zend_Rest_Server
    */
   private $_server = null;

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // URI

   /**
    * Class used to generate the REST server.
    *
    * @var      string
    */
   protected $_class='';

   /**
    * Getter method for {@link $_class}.
    *
    * @return   string  {@link $_class}
    */
   function getClass() { return $this->_class; }

   /**
    * Setter method for {@link $_class}.
    *
    * @param    string  $value
    */
   function setClass($value) { $this->_class=$value; }

   /**
    * Getter for {@link $_class}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultClass() { return ''; }

   // Encoding

   /**
    * XML character encoding.
    *
    * @var      string
    */
   protected $_encoding='UTF-8';

   /**
    * Getter method for {@link $_encoding}.
    *
    * @return   string  {@link $_encoding}
    */
   function getEncoding() { return $this->_encoding; }

   /**
    * Setter method for {@link $_encoding}.
    *
    * @param    string  $value
    */
   function setEncoding($value) { $this->_encoding=$value; }

   /**
    * Getter for {@link $_encoding}’s default value.
    *
    * @return   string  'UTF-8'
    */
   function defaultEncoding() { return 'UTF-8'; }

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      $this->_server = new Zend_Rest_Server();

      if($this->_class != '')
         $this->_server->setClass($this->_class);

      if($this->_encoding!='')
         $this->_server->setEncoding($this->_encoding);

      $this->_server->handle();
   }
}

?>
