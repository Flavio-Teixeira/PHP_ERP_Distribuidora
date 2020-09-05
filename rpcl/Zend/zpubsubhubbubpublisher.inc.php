<?php

/**
 * Zend/zpubsubhubbubpublisher.inc.php
 * 
 * Defines Zend Framework PubSubHubBub Publisher component.
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
use_unit("Zend/framework/library/Zend/Feed/Pubsubhubbub/Publisher.php");

/**
 * Component to implement a PubSubHubBub publisher.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.feed.pubsubhubbub.introduction.html#zend.feed.pubsubhubbub.zend.feed.pubsubhubbub.publisher Zend Framework Documentation
 */
class ZPubSubHubBubPublisher extends Component
{

   /**
    * Zend Framework PubSubHubBub Publisher instance.
    *
    * @internal
    *
    * @var      Zend_Feed_Pubsubhubbub_Publisher
    */
   private $_publisher=null;

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Hubs URLs

   /**
    * Hubs URLs.
    *
    * These URLs will be notified about topics updates through an HTTP POST request containing the
    * URI or the updated topic.
    *
    * @see $_updatetopicurls
    *
    * @var      array
    */
   protected $_hubsurls=array();

   /**
    * Getter method for {@link $_hubsurls}.
    *
    * @return   array   {@link $_hubsurls}
    */
   function getHubsUrls() { return $this->_hubsurls; }

   /**
    * Setter method for {@link $_hubsurls}.
    *
    * @param    array   $value
    */
   function setHubsUrls($value) { $this->_hubsurls=$value; }

   /**
    * Getter for {@link $_hubsurls}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultHubsUrls() { return array(); }

   // Topics URLs

   /**
    * Topics URLs.
    *
    * These URLs will point to the source feeds (RSS, Atom…) for the topics.
    *
    * @var      array
    */
   protected $_updatetopicurls=array();

   /**
    * Getter method for {@link $_title}.
    *
    * @return   array   {@link $_title}
    */
   function getUpdateTopicUrls() { return $this->_updatetopicurls; }

   /**
    * Setter method for {@link $_title}.
    *
    * @param    array   $value
    */
   function setUpdateTopicUrls($value) { $this->_updatetopicurls=$value; }

   /**
    * Getter for {@link $_title}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultUpdateTopicUrls() { return array(); }

   // Parameters

   /**
    * Parameters.
    *
    * This key-value pairs will be added to the URL used during the call to Hub servers about topic
    * updates.
    *
    * @var      array
    */
   protected $_parameters=array();

   /**
    * Getter method for {@link $_title}.
    *
    * @return   array  {@link $_title}
    */
   function getParameters() { return $this->_parameters; }

   /**
    * Setter method for {@link $_title}.
    *
    * @param    array  $value
    */
   function setParameters($value) { $this->_parameters=$value; }

   /**
    * Getter for {@link $_title}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultParameters() { return array(); }

   /**
    * Initialize {@link $_publisher}.
    *
    * @internal
    */
   function _createPublisher()
   {
      $this->_publisher=new Zend_Feed_Pubsubhubbub_Publisher;

      if(count($this->_hubsurls)!=0)
         $this->_publisher->addHubUrls($this->_hubsurls);
      if(count($this->_updatetopicurls)!=0)
         $this->_publisher->addUpdatedTopicUrls($this->_updatetopicurls);
      if(count($this->_parameters)!=0)
         $this->_publisher->setParameters($parameters);
   }

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      $this->_createPublisher();
   }

   /**
    * Notifies all Hub servers about changes.
    */
   function notifyAll()
   {
      $this->_publisher->notifyAll();
   }

   /**
    * Returns a boolean indicator of whether the notifications to Hub servers were (all) successful.
    *
    * If any notification failed, this method will return false.
    *
    * @return   boolean
    */
   function isSuccess()
   {
      return $this->_publisher->isSuccess();
   }

    /**
    * Returns an array with occurred errors.
    *
    * This arrays will have key-value pairs with the following information:
    * <ul>
    *   <li><b>response</b>: {@link Zend_Http_Response} object from the error.</li>
    *   <li><b>hubURL</b>: Hub server URL whose notification failed.</li>
    * </ul>
    *
    * @return   array
    */
   function findErrors()
   {
      return $this->_publisher->getErrors();
   }

}

?>