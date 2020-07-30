<?php

/**
 * Zend/zmarkup.inc.php
 * 
 * Defines Zend Framework Markup component.
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
use_unit('Zend/framework/library/Zend/Markup.php');
use_unit('Zend/framework/library/Zend/Markup/Renderer/RendererAbstract.php');

// Markup Parsers

/**
 * BBCode.
 *
 * @link http://framework.zend.com/manual/en/zend.markup.parsers.html#zend.markup.parsers.bbcode Zend Framework Documentation
 * @link http://en.wikipedia.org/wiki/BBCode Wikipedia
 * 
 * @const       mpBBCode
 */
define('mpBBCode', 'mpBBCode');

/**
 * Textile.
 *
 * @link http://framework.zend.com/manual/en/zend.markup.parsers.html#zend.markup.parsers.textile Zend Framework Documentation
 * @link http://en.wikipedia.org/wiki/Textile_%28markup_language%29 Wikipedia
 * 
 * @const       mpTextile
 */
define('mpTextile', 'mpTextile');

/**
 * Component to convert text in a given markup language to HTML.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.markup.html Zend Framework Documentation
 */
class ZMarkup extends Component
{

   /**
    * Zend Framework Markup instance.
    *
    * @var      Zend_Markup
    */
   protected $_markup = null;

   /**
    * Interface to a dataset to be used from this component.
    *
    * You must also setup {@link $_datafield}.
    *
    * @var      Datasource
    */
   protected $_datasource = null;

   /**
    * Name of the column from {@link $_datasource} to be parsed by this component.
    *
    * @var      string
    */
   protected $_datafield = "";

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Markup Parser

   /**
    * Markup parser.
    *
    * Possible values are {@link mpBBCode} and {@link mpTextile}.
    *
    * @var      string
    */
   protected $_markupparser = mpBBCode;

   /**
    * Getter method for {@link $_markupparser}.
    *
    * @return   string  {@link $_markupparser}
    */
   function getMarkupParser()    {return $this->_markupparser;}

   /**
    * Setter method for {@link $_markupparser}.
    *
    * @param    string  $value
    */
   function setMarkupParser($value)    {$this->_markupparser = $value;}

   /**
    * Getter for {@link $_markupparser}’s default value.
    *
    * @return   string  {@link mpBBCode}
    */
   function defaultMarkupParser()    {return mpBBCode;}

   // Data Field.

   /**
    * Getter method for {@link $_datafield}.
    *
    * @return   string  {@link $_datafield}
    */
   function readDataField()
   {
      return $this->_datafield;
   }

   /**
    * Setter method for {@link $_datafield}.
    *
    * @param    string  $value
    */
   function writeDataField($value)
   {
      $this->_datafield = $value;
   }

   /**
    * Getter for {@link $_datafield}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDataField()
   {
      return "";
   }

   /**
    * Getter method for {@link $_datafield}.
    *
    * @return   string  {@link $_datafield}
    */
   function getDataField()
   {
      return $this->readDataField();
   }

   /**
    * Setter method for {@link $_datafield}.
    *
    * @param    string  $value
    */
   function setDataField($value)
   {
      $this->writeDataField($value);
   }

   // Data Source

   /**
    * Getter method for {@link $_datasource}.
    *
    * @return   Datasource      {@link $_datasource}
    */
   function readDataSource()
   {
      return $this->_datasource;
   }

   /**
    * Setter method for {@link $_datasource}.
    *
    * @param    Datasource      $value
    */
   function writeDataSource($value)
   {
      $this->_datasource = $this->fixupProperty($value);
   }

   /**
    * Getter for {@link $_datasource}’s default value.
    *
    * @return   Datasource      Null
    */
   function defaultDataSource()
   {
      return null;
   }

   /**
    * Getter method for {@link $_datasource}.
    *
    * @return   Datasource      {@link $_datasource}
    */
   function getDataSource()
   {
      return $this->readDataSource();
   }

   /**
    * Setter method for {@link $_datasource}.
    *
    * @param    Datasource      $value
    */
   function setDataSource($value)
   {
      $this->writeDataSource($value);
   }

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      parent::loaded();
      // call writeDataSource() since setDataSource() might not be implemented by the sub-class
      $this->writeDataSource($this->_datasource);
   }

   /**
    * Generator for {@link $_markup}.
    *
    * Generates a {@link Zend_Markup} instance with provided settings, and saves it to
    * {@link $_markup}.
    */
   function _createRender()
   {
      if($this->_markup == null)
      {
         switch($this->_markupparser)
         {
            case mpBBCode:
               $parser = 'BBCode';
               break;
            case mpTextile:
               $parser = 'Textile';
               break;
         }

         $this->_markup = Zend_Markup::factory($parser);

      }
   }

   /**
    * Adds a new markup element to be parsed and rendered.
    *
    * @link http://framework.zend.com/manual/en/zend.markup.renderers.html#zend.markup.renderers.add Zend Framework Documentation
    *
    * @param    string  $name           Element name. For example, if you set it to 'foo', and you
    *                                   previously set {@link $_markupparser} to {@link mpBBCode},
    *                                   anything parsed between '[foo]' and '[/foo]' will be
    *                                   considered to be an instance of this element.
    * @param    array   $options        Options to replace.
    * @param    string  $type           Optional. Type to replacement. It defaults to {@link Zend_Markup_Renderer_RendererAbstract::TYPE_REPLACE}. 
    */
   function addMarkup($name, $options, $type = Zend_Markup_Renderer_RendererAbstract::TYPE_REPLACE)
   {
      $this->_createRender();
      if($name != '' && is_array($options) && count($options) > 0)
      {
         $this->_markup->addMarkup($name, $type, $options);
      }
   }

   /**
    * Renders given text from chosen {@link $_markupparser markup} into HTML.
    *
    * If {@link $_datafield} is properly set, optional {@link $text} parameter will be ignored.
    *
    * @param    string  $text   Optional. Text to render.
    * @return   string
    */
   function render($text='')
   {
      $this->_createRender();

      if($this->hasValidDataField())
      {
         //The value to show on the field is the one from the table
         $text = $this->readDataFieldValue();

         // dump no hidden fields since the label is read-only
      }

      return $this->_markup->render($text);
   }
}

?>