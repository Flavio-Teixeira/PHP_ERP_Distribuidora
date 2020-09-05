<?php

/**
 * Zend/zgdatadocs.inc.php
 * 
 * Defines Zend Framework Google Docs component.
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
use_unit("Zend/framework/library/Zend/Gdata/Docs.php");
use_unit("Zend/framework/library/Zend/Gdata/Docs/Query.php");

// Document Projections

/**
 * Document full projection.
 * 
 * @const       pdFull
 */
define('pdFull', 'pdFull');

/**
 * Document composite projection.
 * 
 * @const       pdComposite
 */
define('pdComposite', 'pdComposite');

/**
 * Document basic projection.
 * 
 * @const       pcBasic
 */
define('pdBasic', 'pdBasic');

/**
 * Component to manage Google Docs service.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.gdata.docs.html Zend Framework Documentation
 */
class ZGDataDocs extends Component
{

   // Zend Google Docs

   /**
    * Zend Framework Google Docs instance.
    *
    * @var      Zend_Gdata_Docs
    */
   private $_docs = null;

   // Visibility

   /**
    * Whether user is or not authenticated.
    *
    * It can be either 'public' (not authenticated) or 'private' (authenticated).
    *
    * @var      string
    */
   private $_visibility = 'public';

   // Application Name

   /**
    * Name of your application.
    *
    * @var      string
    */
   protected $_applicationname = '';

   /**
    * Getter method for {@link $_applicationname}.
    *
    * @return   string  {@link $_applicationname}
    */
   function getApplicationName()    {return $this->_applicationname;}

   /**
    * Setter method for {@link $_applicationname}.
    *
    * @param    string  $value
    */
   function setApplicationName($value)    {$this->_applicationname = $value;}

   /**
    * Getter for {@link $_applicationname}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultApplicationName()    {return '';}

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      if($this->_onauthentication != null)
      {

         $aux = $this->callEvent('onauthentication', array('service'=>Zend_Gdata_Docs::AUTH_SERVICE_NAME, 'url'=>Zend_Gdata_Docs::DOCUMENTS_LIST_FEED_URI,'appname'=>$this->_applicationname));

         if($aux)
         {
            $this->_docs = new Zend_Gdata_Docs($aux,$this->_applicationname);
            $this->_visibility = 'private';
         }
         else
         {
            $this->_docs = new Zend_Gdata_Docs(null,$this->_applicationname);
            $this->_visibility = 'public';
         }
      }
      else
      {
         $this->_docs = new Zend_Gdata_Docs(null,$this->_applicationname);
         $this->_visibility = 'public';
      }
   }

   // Documents Projection

   /**
    * Amount and format of the data to be retrieved from the server.
    *
    * @var      string
    */
   protected $_projectiondocuments = pdFull;

   /**
    * Getter method for {@link $_projectiondocuments}.
    *
    * @return   string  {@link $_projectiondocuments}
    */
   function getProjectionDocuments()    {return $this->_projectiondocuments;}

   /**
    * Setter method for {@link $_projectiondocuments}.
    *
    * @param    string  $value
    */
   function setProjectionDocuments($value)    {$this->_projectiondocuments = $value;}

   /**
    * Getter for {@link $_projectiondocuments}’s default value.
    *
    * @return   string  pdFull
    */
   function defaultProjectionDocuments()    {return pdFull;}

   // On Authentication

   /**
    * Event triggered for user authentication against Google Docs service.
    * 
    * This event is triggered as soon as this component is {@link loaded() loaded}.
    *
    * This property should either contain the name of the function to be run when the event is
    * triggered (without brackets), or be set to null.
    *
    * If the name of a function is provided, such a function should expect the following key-value
    * pairs in the parameters array, passed to the function as its second parameter:
    * <ul>
    *   <li><b>service</b>: {@link Zend_Gdata_Docs::AUTH_SERVICE_NAME}.</li>
    *   <li><b>url</b>: {@link Zend_Gdata_Docs::DOCUMENTS_LIST_FEED_URI}.</li>
    *   <li><b>appname</b>: {@link $_applicationname}.</li>
    * </ul>
    *
    * It is also expected to return a boolean value. If true is returned, component will initialize
    * {@link $_docs} and set {@link $_visibility} to 'private'. If false is returned,
    * {@link $_docs} will also be initialized, but {@link $_visibility} will be set to 'public'
    * instead.
    *
    * @var      string
    */
   protected $_onauthentication = null;

   /**
    * Getter method for {@link $_onauthentication}.
    *
    * @return   string  {@link $_onauthentication}
    */
   function getOnAuthentication()    {return $this->_onauthentication;}

   /**
    * Setter method for {@link $_onauthentication}.
    *
    * @param    string  $value
    */
   function setOnAuthentication($value)    {$this->_onauthentication = $value;}

   /**
    * Getter for {@link $_onauthentication}’s default value.
    *
    * @return   string  Null
    */
   function defaultOnAuthentication()    {return null;}

   /**
    * Retrieves the list of user documents.
    * 
    * If {@link $_docs} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get a {@link Zend_Gdata_Docs_DocumentListFeed list} of current
    * user {@link Zend_Gdata_Docs_DocumentListEntry documents}.
    *
    * @return   boolean|Zend_Gdata_Docs_DocumentListFeed
    */
   function retrieveDocumentsList()
   {
      if($this->_docs != null)
      {
         return $this->_docs->getDocumentListFeed();
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a document.
    * 
    * If {@link $_docs} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Docs_DocumentListEntry} for
    * requested document.
    *
    * @param    string  $id_document    Document identifier.
    * @param    string  $doc_type       Document type.
    * @return   boolean|Zend_GData_Docs_DocumentListEntry
    */
   function retrieveDocument($id_document, $doc_type)
   {
      if($this->_docs!=null)
      {
       return $this->_docs->getDoc($id_document,$doc_type);
      }
      else
      {
          return false;
      }
   }

   /**
    * Creates a new folder.
    * 
    * If {@link $_docs} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry} for new folder.
    *
    * @param    string  $folderName     Folder name.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function createFolder($folderName)
   {
      if($this->_docs != null)
      {
         return $this->_docs->createFolder($folderName);
      }
      else
      {
         return false;
      }
   }

   /**
    * Uploads a document to Google Docs.
    * 
    * If {@link $_docs} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry} for uploaded        
    * document.
    *
    * @param    string  $filename       Path to document file.
    * @param    string  $title          Document title.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function uploadDocument($filename, $title)
   {
      if($this->_docs != null)
      {
         $filenameParts = explode('.', $filename);
         $fileExtension = end($filenameParts);

         $newDocument = $this->_docs->uploadFile($filename, $title, Zend_Gdata_Docs::lookupMimeType($fileExtension));
         return $newDocument;
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves user word documents (as opposed to spreadsheets or presentations).
    * 
    * If {@link $_docs} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Docs_DocumentListFeed}.
    *
    * @return boolean|Zend_Gdata_Docs_DocumentListFeed
    */
   function retrieveWordDocuments()
   {
      if($this->_docs != null)
      {
         return $this->_docs->getDocumentListFeed(Zend_Gdata_Docs::DOCUMENTS_LIST_FEED_URI . '/-/document');
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves user spreadsheets.
    * 
    * If {@link $_docs} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Docs_DocumentListFeed}.
    *
    * @return boolean|Zend_Gdata_Docs_DocumentListFeed
    */
   function retrieveSpreadsheetDocuments()
   {
      if($this->_docs != null)
      {
         return $this->_docs->getDocumentListFeed(Zend_Gdata_Docs::DOCUMENTS_LIST_FEED_URI . '/-/spreadsheet');
      }
      else
      {
         return false;
      }

   }

   /**
    * Retrieves user presentations.
    * 
    * If {@link $_docs} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Docs_DocumentListFeed}.
    *
    * @return boolean|Zend_Gdata_Docs_DocumentListFeed
    */
   function retrievePresentationDocuments()
   {
      if($this->_docs != null)
      {
         return $this->_docs->getDocumentListFeed(Zend_Gdata_Docs::DOCUMENTS_LIST_FEED_URI . '/-/presentation');
      }
      else
      {
         return false;
      }

   }

   /**
    * Searches documents.
    *
    * Search criteria is defined through the {@link $params} array in the call, where the following
    * key-value pairs can be defined:
    * <ul>
    *   <li><b>title</b>: Document title (string).</li>
    *   <li><b>titleExact</b>: Whether the title must be or not an exact match (boolean).</li>
    *   <li><b>query</b>: Text to search within files.</li>
    * </ul>
    * 
    * If {@link $_docs} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Docs_DocumentListFeed}.
    *
    * @param    array   $params Search criteria.
    * @return boolean|Zend_Gdata_Docs_DocumentListFeed
    */
   function searchDocument($params)
   {
      if($this->_docs != null)
      {
         $query = new Zend_Gdata_Docs_Query();

         $query->setVisibility($this->_visibility);

         $projection = '';
         switch($this->_projectiondocuments)
         {
            case pdFull:
               $projection = 'full';
               break;
            case pdComposite:
               $projection = 'composite';
               break;
            case pdBasic:
               $projection = 'basic';
               break;
         }
         $query->setProjection($projection);

         if(isset($params['title']))
         {
            $query->setTitle($params['title']);
         }

         if(isset($params['titleExact']))
         {
            $query->setTitleExact($params['titleExact']);
         }

         if(isset($params['query']))
         {
            $query->setQuery($params['query']);
         }

         return $this->_docs->getDocumentListFeed($query);
      }
      else
      {
         return false;
      }
   }
}

?>