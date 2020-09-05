<?php

/**
 * Zend/zjsonserver.inc.php
 * 
 * Defines Zend Framework JSON-RPC Server component.
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
use_unit("Zend/framework/library/Zend/Json/Server.php");

// Envelop Types

/**
 * JSON-RPC version 1.
 * 
 * @const       etJSONRPCv1
 */
define('etJSONRPCv1', 'etJSONRPCv1');

/**
 * JSON-RPC version 2.
 * 
 * @const       etJSONRPCv2
 */
define('etJSONRPCv2', 'etJSONRPCv2');

/**
 * Component implementing JSON-RPC Server.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.json.server.html Zend Framework Documentation
 */
class ZJsonServer extends Component
{

   /**
    * Zend Framework JSON-RPC Server instance.
    *
    * @var      Zend_Json_Server
    */
   private $_server = null;

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Target

   /**
    * URL end-point for the service.
    *
    * @var      string
    */
   protected $_target = '';

   /**
    * Getter method for {@link $_target}.
    *
    * @return   string  {@link $_target}
    */
   function getTarget()    {return $this->_target;}

   /**
    * Setter method for {@link $_target}.
    *
    * @param    string  $value
    */
   function setTarget($value)    {$this->_target = $value;}

   /**
    * Getter for {@link $_target}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultTarget()    {return '';}

   // Envelop Type

   /**
    * Type of envelope to be used when accessing the service.
    *
    * @var      string
    */
   protected $_envelopetype = etJSONRPCv1;

   /**
    * Getter method for {@link $_envelopetype}.
    *
    * @return   string  {@link $_envelopetype}
    */
   function getEnvelopeType()    {return $this->_envelopetype;}

   /**
    * Setter method for {@link $_envelopetype}.
    *
    * @param    string  $value
    */
   function setEnvelopeType($value)    {$this->_envelopetype = $value;}

   /**
    * Getter for {@link $_envelopetype}’s default value.
    *
    * @return   string  {@link etJSONRPCv1}
    */
   function defaultEnvelopeType()    {return etJSONRPCv1;}

   // Dojo Compatibility

   /**
    * Whether or not should the Service Mapping Description should be compatible with Dojo toolkit.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_dojocompatible = 'false';

   /**
    * Getter method for {@link $_dojocompatible}.
    *
    * @return   string  {@link $_dojocompatible}
    */
   function getDojoCompatible()    {return $this->_dojocompatible;}

   /**
    * Setter method for {@link $_dojocompatible}.
    *
    * @param    string  $value
    */
   function setDojoCompatible($value)    {$this->_dojocompatible = $value;}

   /**
    * Getter for {@link $_dojocompatible}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultDojoCompatible()    {return 'false';}

   // Auto Emit Response

   /**
    * Whether or not the server should automatically give out the response and all headers.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_autoemitresponse = 'true';

   /**
    * Getter method for {@link $_autoemitresponse}.
    *
    * @return   string  {@link $_autoemitresponse}
    */
   function getAutoEmitResponse()    {return $this->_autoemitresponse;}

   /**
    * Setter method for {@link $_autoemitresponse}.
    *
    * @param    string  $value
    */
   function setAutoEmitResponse($value)    {$this->_autoemitresponse = $value;}

   /**
    * Getter for {@link $_autoemitresponse}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultAutoEmitResponse()    {return 'true';}

   // Description

   /**
    * Service description.
    *
    * @var      string
    */
   protected $_description = '';

   /**
    * Getter method for {@link $_description}.
    *
    * @return   string  {@link $_description}
    */
   function getDescription()    {return $this->_description;}

   /**
    * Setter method for {@link $_description}.
    *
    * @param    string  $value
    */
   function setDescription($value)    {$this->_description = $value;}

   /**
    * Getter for {@link $_description}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDescription()    {return '';}

   // Content Type

   /**
    * Content MIME type for the requests.
    *
    * @var      string
    */
   protected $_contenttype = 'application/json';

   /**
    * Getter method for {@link $_contenttype}.
    *
    * @return   string  {@link $_contenttype}
    */
   function getContentType()    {return $this->_contenttype;}

   /**
    * Setter method for {@link $_contenttype}.
    *
    * @param    string  $value
    */
   function setContentType($value)    {$this->_contenttype = $value;}

   /**
    * Getter for {@link $_contenttype}’s default value.
    *
    * @return   string  'application/json'
    */
   function defaultContentType()    {return 'application/json';}

   // Class

   /**
    * Class or object to attach to the server.
    *
    * All public methods of that item will be exposed as JSON-RPC methods.
    *
    * @var      string
    */
   protected $_class = '';

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
    * @return   string  Empty string
    */
   function defaultClass()    {return '';}

   /**
    * Getter method for {@link $_server}.
    *
    * @return   Zend_Json_Server        {@link $_server}
    */
   function returnJsonServer()
   {
      return $this->_server;
   }

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      $this->_server = new Zend_Json_Server();

      $this->_server->setClass($this->_class);

      if($this->_target != '')
         $this->_server->setTarget($this->_target);

      switch($this->_envelopetype)
      {
         case etJSONRPCv1:
            $this->_server->setEnvelope(Zend_Json_Server_Smd::ENV_JSONRPC_1);
            break;

         case etJSONRPCv2:
            $this->_server->setEnvelope(Zend_Json_Server_Smd::ENV_JSONRPC_2);
            break;

      }

      if($this->_dojocompatible == 1 || $this->_dojocompatible == 'true')
      {
         $this->_server->setDojoCompatible(true);
      }
      else
      {
          $this->_server->setDojoCompatible(false);
      }

      if($this->_autoemitresponse == 1 || $this->_autoemitresponse == 'true')
      {
         $this->_server->setAutoEmitResponse(true);
      }
      else
      {
         $this->_server->setAutoEmitResponse(false);
      }

      if($this->_description != '')
         $this->_server->setDescription($this->_description);

      if($this->_contenttype != '')
      {
         $this->_server->setContentType($this->_contenttype);
      }

      if('GET' == $_SERVER['REQUEST_METHOD'])
      {

         $smd = $this->_server->getServiceMap();

         header('Content-Type: application/json');

         echo $smd;

         return;

      }

      $this->_server->handle();

   }
}

?>