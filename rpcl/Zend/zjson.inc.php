<?php

/**
 * Zend/zjson.inc.php
 * 
 * Defines Zend Framework JSON component.
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
use_unit("Zend/framework/library/Zend/Json.php");

// Encoders (and Decoders)

/**
 * PHP.
 * 
 * @const       edPHP
 */
define('edPHP', 'edPHP');

/**
 * Zend Framework.
 * 
 * @const       edZend
 */
define('edZend', 'edZend');

/**
 * Component that provides methods to encode and decode JSON.
 *
 * When JSON PHP extension is enabled, this component uses it. When it is disabled, this component
 * uses a Zend Framework implementation. That way, you will always be able to encode and decode 
 * JSON.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.json.html Zend Framework Documentation
 */
class ZJson extends Component
{

   // Implementation

   /**
    * JSON encode and decode implementation to be used.
    *
    * @var      string
    */
   protected $_encoderdecoder = edPHP;

   /**
    * Getter method for {@link $_encoderdecoder}.
    *
    * @return   string  {@link $_encoderdecoder}
    */
   function getEncoderDecoder()    {return $this->_encoderdecoder;}

   /**
    * Setter method for {@link $_encoderdecoder}.
    *
    * @param    string  $value
    */
   function setEncoderDecoder($value)    {$this->_encoderdecoder = $value;}

   /**
    * Getter for {@link $_encoderdecoder}’s default value.
    *
    * @return   string  {@link edPHP}
    */
   function defaultEncoderDecoder()    {return edPHP;}

   // Class constructor.

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Loaded.

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      if($this->_encoderdecoder == edPHP)
      {
         Zend_Json::$useBuiltinEncoderDecoder = false;
      }
      else
      {
         Zend_Json::$useBuiltinEncoderDecoder = true;
      }
   }

   /**
    * Decodes a JSON-encoded string.
    *
    * @param    string  $encodedValue           JSON code.
    * @param    int     $objectDecodeType       Optional flag to choose output format, either an
    *                                           array (1, default) or an object (0).
    * @return   array|Object
    */
   function decode($encodedValue, $objectDecodeType = 1)
   {
      return Zend_Json::decode($encodedValue, $objectDecodeType);
   }

   /**
    * Returns given object encoded in JSON.
    *
    * NOTE: Object should not contain cycles; the JSON does not allow object reference.
    *
    * NOTE: Only public variables will be encoded.
    *
    * NOTE: Encoding native JavaScript expressions is possible using Zend_Json_Expr. You can enable
    * this by setting <tt>$options['enableJsonExprFinder'] = true</tt>.
    *
    * Use 'indent' option to select indentation string - by default it's a tab. Set
    * <tt>$optionsPretty['indent']</tt> to use.
    *
    * @param    mixed   $value          Value to be encoded.
    * @param    boolean $cycleCheck     Optional. Whether or not to check for object recursion. It
    *                                   is off (false) by default.
    * @param    array   $options        Optional additional parameters.
    * @param    boolean $prettyprint    Optional. Whether to return a pretty-print JSON string or
    *                                   not (default).
    * @param    array   $optionsPretty  Optional encoding options for Pretty Print, used when you
    *                                   pass true for {@link $prettyprint}.
    * @return   string
    */
   function encode($value, $cycleCheck = false, $options = array(), $prettyprint = false, $optionsPretty = array())
   {
      $json = Zend_Json::encode($value, $cycleCheck, $options);
      if($prettyprint)
      {
         $output = Zend_Json::prettyPrint($json, $optionsPretty);
         return $output;
      }
      else
      {
         return $json;
      }
   }

   /**
    * Converts an XML string into a JSON string and returns it.
    *
    * NOTE: Encoding native JavaScript expressions via Zend_Json_Expr is not possible.
    *
    * @param    string  $xml                    XML string.
    * @param    boolean $ignoreXmlAttributes    Optional. Whether or not to include XML attributes
    *                                           in the output JSON string. They are included by
    *                                           default.
    * @return   mixed
    * @throws   Zend_Json_Exception     Input is not an XML string.
    */
   function fromXml($xml, $ignoreXmlAttributes = true)
   {
      return Zend_Json::fromXml($xml, $ignoreXmlAttributes);
   }
}

?>