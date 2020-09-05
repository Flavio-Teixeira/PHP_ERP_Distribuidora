<?php

/**
 * Zend/zregistry.inc.php
 * 
 * Defines Zend Framework Registry component.
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
use_unit("Zend/framework/library/Zend/Registry.php");

// Registry Types

/**
 * Object.
 * 
 * @const       trObject
 */
define("trObject", "trObject");

/**
 * Array.
 * 
 * @const       trArray
 */
define("trArray", "trArray");

/**
 * Component to manage a registry, a container for storing objects and values in the space of the
 * application. This is an alternative to PHP global storage.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.registry.html Zend Framework Documentation
 */
class ZRegistry extends Component
{

   // Registry Type

   /**
    * Type of registry {@link toArray()} should return.
    *
    * Possible values are {@link trArray} and {@link trObject}.
    *
    * @var      string
    */
   protected $_typeregistry = trArray;

   /**
    * Getter method for {@link $_typeregistry}.
    *
    * @return   string  {@link $_typeregistry}
    */
   function getTypeRegistry()    {return $this->_typeregistry;}

   /**
    * Setter method for {@link $_typeregistry}.
    *
    * @param    string  $value
    */
   function setTypeRegistry($value)    {$this->_typeregistry = $value;}

   /**
    * Getter for {@link $_typeregistry}’s default value.
    *
    * @return   string  {@link trArray}
    */
   function defaultTypeRegistry()    {return trArray;}

   // Class constructor.

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);

      if($this->_typeregistry == trObject)
      {
         Zend_Registry::_unsetInstance();
         $registry = new Zend_Registry(array(), ArrayObject::ARRAY_AS_PROPS);
         Zend_Registry::setInstance($registry);
      }
   }

   /**
    * Adds a value to the registry.
    *
    * @param    string  $name   Identifier for the value in the registry.
    * @param    string  $value  Value to be stored.
    */
   function addToRegistry($name, $value)
   {
      Zend_Registry::set($name, $value);
   }

   /**
    * Retrieves a value from the registry.
    *
    * If registry has no value for given identifier, an empty string will be retuned instead.
    *
    * @param    string  $name   Value identifier.
    * @return   mixed|string
    */
   function retrieveFromRegistry($name)
   {
      if(Zend_Registry::isRegistered($name))
      {
         return Zend_Registry::get($name);
      }
      else
      {
         return '';
      }
   }

   /**
    * Returns registry values as an array or an object, depending on {@link $_typeregistry} value.
    *
    * @return   array|Object
    */
   function toArray()
   {
      return Zend_Registry::getInstance();
   }

   /**
    * Clears the instance of the registry.
    */
   function unsetInstance()
   {
      Zend_Registry::_unsetInstance();
   }

   /**
    * Checks if given identifier is already registered for a value.
    *
    * @param    string  $name   Value identifier.
    * @return   boolean
    */
   function isRegistered($name)
   {
      return Zend_Registry::isRegistered($name);
   }

}

?>