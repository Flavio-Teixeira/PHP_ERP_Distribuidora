<?php

/**
 * Zend/zopenidconsumerstoragefile.inc.php
 * 
 * Defines Zend Framework OpenID Consumer File Storage component.
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
use_unit("Zend/framework/library/Zend/OpenId/Consumer/Storage/File.php");
use_unit("Zend/zcommon/zopenidconsumerstorage.inc.php");

/**
 * Interface to generate an instance of {@link Zend_OpenId_Consumer_Storage_File}.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.openid.consumer.html#zend.openid.consumer.storage Zend Framework Documentation
 */
class ZOpenIdConsumerStorageFile extends ZOpenIdConsumerStorage
{

   // Class constructor.

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Destination Path

   /**
    * Path to the directory where files will be stored.
    *
    * @var      string
    */
   protected $_destinationpath = '';

   /**
    * Getter method for {@link $_destinationpath}.
    *
    * @return   string  {@link $_destinationpath}
    */
   function getDestinationPath()    {return $this->_destinationpath;}

   /**
    * Setter method for {@link $_destinationpath}.
    *
    * @param    string  $value
    */
   function setDestinationPath($value)    {$this->_destinationpath = $value;}

   /**
    * Getter for {@link $_destinationpath}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDestinationPath()    {return '';}

   /**
    * Returns an instance of {@link Zend_OpenId_Consumer_Storage_File} generated from provided settings.
    *
    * @return    Zend_OpenId_Consumer_Storage_File
    */
   function CreateStorage()
   {
      $dir = null;
      if($this->_destinationpath != '')
      {
         $dir = $this->_destinationpath;
      }
      $storage = new Zend_OpenId_Consumer_Storage_File($dir);

      return $storage;
   }
}

?>