<?php

/**
 * Zend/zrestclient.inc.php
 * 
 * Defines Zend Framework REST Client component.
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
use_unit("Zend/framework/library/Zend/Rest/Client.php");

/**
 * Component to generate a REST client.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.rest.client.html Zend Framework Documentation
 */
class ZRestClient extends Component
{

   /**
    * Zend Framework REST Client instance.
    *
    * @var      Zend_Rest_Client
    */
   private $_client = null;

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // URI

   /**
    * REST server URI.
    *
    * @var      string
    */
   protected $_uri = '';

   /**
    * Getter method for {@link $_uri}.
    *
    * @return   string  {@link $_uri}
    */
   function getURI()    {return $this->_uri;}

   /**
    * Setter method for {@link $_uri}.
    *
    * @param    string  $value
    */
   function setURI($value)    {$this->_uri = $value;}

   /**
    * Getter for {@link $_uri}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultURI()    {return '';}

   /**
    * Executes a method using GET.
    *
    * @param    string  $method Method name.
    * @param    array   $params Parameters to be passed to the method. Arrays should containt
    *                   key-value pairs, where each key is a parameter name, and its value the
    *                   actual parameter.
    * @return   Zend_Rest_Client_Response
    */
   function executeGet($method, $params)
   {
      $this->_client->$method();
      foreach($params as $name=>$param)
      {
         $this->_client->$name($param);
      }
      return $this->_client->get();
   }

   /**
    * Executes a method using PUT.
    *
    * @param    string  $method Method name.
    * @param    array   $params Parameters to be passed to the method. Arrays should containt
    *                   key-value pairs, where each key is a parameter name, and its value the
    *                   actual parameter.
    * @return   Zend_Rest_Client_Response
    */
   function executePut($method,$params)
   {
      $this->_client->$method();
      foreach($params as $name=>$param)
      {
         $this->_client->$name($param);
      }
      return $this->_client->put();
   }

   /**
    * Executes a method using POST.
    *
    * @param    string  $method Method name.
    * @param    array   $params Parameters to be passed to the method. Arrays should containt
    *                   key-value pairs, where each key is a parameter name, and its value the
    *                   actual parameter.
    * @return   Zend_Rest_Client_Response
    */
   function executePost($method,$params)
   {
      $this->_client->$method();
      foreach($params as $name=>$param)
      {
         $this->_client->$name($param);
      }
      return $this->_client->post();
   }

   /**
    * Executes a method using DELETE.
    *
    * @param    string  $method Method name.
    * @param    array   $params Parameters to be passed to the method. Arrays should containt
    *                   key-value pairs, where each key is a parameter name, and its value the
    *                   actual parameter.
    * @return   Zend_Rest_Client_Response
    */
   function executeDelete($method,$params)
   {
      $this->_client->$method();
      foreach($params as $name=>$param)
      {
         $this->_client->$name($param);
      }
      return $this->_client->delete();
   }

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      $this->_client = new Zend_Rest_Client($this->_uri);
   }
}

?>
