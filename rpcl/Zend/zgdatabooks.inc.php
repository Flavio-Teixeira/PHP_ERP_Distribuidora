<?php

/**
 * Zend/zgdatabooks.inc.php
 *
 * Defines Zend Framework Google Books component.
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
use_unit("Zend/framework/library/Zend/Gdata/Books.php");
use_unit("Zend/framework/library/Zend/Gdata/Books/VolumeQuery.php");

/**
 * Component to manage Google Books service.
 *
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.gdata.books.html Zend Framework Documentation
 */
class ZGDataBooks extends Component
{

   // Zend Google Books

   /**
    * Zend Framework Google Books instance.
    *
    * @var      Zend_Gdata_Books
    */
   private $_books = null;

   // Visibility

   /**
    * Whether user is or not authenticated.
    *
    * It can be either 'public' (not authenticated) or 'private' (authenticated).
    *
    * @var      string
    */
   private $_visibility = 'public';

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // On Authentication

   /**
    * Event triggered for user authentication against Google Books service.
    *
    * This event is triggered as soon as this component is {@link loaded() loaded}.
    *
    * This property should either contain the name of the function to be run when the event is
    * triggered (without brackets), or be set to null.
    *
    * If the name of a function is provided, such a function should expect the following key-value
    * pairs in the parameters array, passed to the function as its second parameter:
    * <ul>
    *   <li><b>service</b>: {@link Zend_Gdata_Books::AUTH_SERVICE_NAME}.</li>
    *   <li><b>url</b>: {@link Zend_Gdata_Books::VOLUME_FEED_URI}.</li>
    *   <li><b>appname</b>: {@link $_applicationname}.</li>
    * </ul>
    *
    * It is also expected to return a boolean value. If true is returned, component will initialize
    * {@link $_books} and set {@link $_visibility} to 'private'. If false is returned, {@link $_books}
    * will also be initialized, but {@link $_visibility} will be set to 'public' instead.
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

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      if($this->_onauthentication != null)
      {

         $aux = $this->callEvent('onauthentication', array('service'=>Zend_Gdata_Books::AUTH_SERVICE_NAME, 'url'=>Zend_Gdata_Books::VOLUME_FEED_URI,'appname'=>$this->_applicationname));

         if($aux)
         {
            $this->_books = new Zend_Gdata_Books($aux,$this->_applicationname);
            $this->_visibility = 'private';
         }
         else
         {
            $this->_books = new Zend_Gdata_Books(null,$this->_applicationname);
            $this->_visibility = 'public';
         }
      }
      else
      {
         $this->_books = new Zend_Gdata_Books(null,$this->_applicationname);
         $this->_visibility = 'public';
      }
   }

   /**
    * Searches books.
    *
    * Search criteria is defined through the {@link $params} array in the call, where the following
    * key-value pairs can be defined:
    * <ul>
    *   <li><b>user</b>: User identifier (string) whose collection will be searched.</li>
    *   <li><b>search</b>: Text to look for (string).</li>
    *   <li><b>minViewability</b>: Book visibility level (string). It can be set to 'none',
    *                              'partial_view' or 'full_view'.</li>
    *   <li><b>startIndex</b>: Position of the result in the search that should be first in returned
    *                          results (integer). All results before it in the search will be skipped in
    *                          returned results.</li>
    *   <li><b>maxResults</b>: Maximum amount of results to be returned.</li>
    * </ul>
    *
    * If {@link $_books} is not set (is null), this method will return a boolean value, false.
    *
    * Else, it will return a {@link Zend_Gdata_Books_VolumeFeed collection} of matching
    * {@link Zend_Gdata_Books_VolumeEntry volumes}.
    *
    * @param    array           $params         Key-value pairs to be used as search criteria.
    * @return   boolean|Zend_Gdata_Books_VolumeFeed
    */
   function searchBooks($params)
   {
      if($this->_books != null)
      {
         if(isset($params['user']))
         {
            $text = 'http://www.google.com/books/feeds/users/' . $params['user'] . '/collections/library/volumes';
            $query = $this->_books->newVolumeQuery($text);
         }
         else
         {
            $query = new Zend_Gdata_Books_VolumeQuery();
         }
         if(isset($params['search']))
         {
            $query->setQuery($params['search']);
         }

         if(isset($params['minViewability']))
         {
            $query->setMinViewability($params['minViewability']);
         }

         if(isset($params['startIndex']))
         {
            $query->setStartIndex($params['startIndex']);
         }

         if(isset($params['maxResults']))
         {
            $query->setMaxResults($params['maxResults']);
         }

         $result = $this->_books->getVolumeFeed($query);
         return $result;
      }
      else
      {

         return false;
      }
   }

   /**
    * Adds a rating to a book.
    *
    * If {@link $_books} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Books_VolumeEntry} for
    * rated book.
    *
    * @param    string|Zend_Gdata_Books_VolumeEntry     $id_volume      Book identifier or
    *                                                                   {@link Zend_Gdata_Books_VolumeEntry volume object}.
    * @param    integer                                 $rating         Book rating.
    * @return   boolean|Zend_Gdata_Books_VolumeEntry
    */
   function addRating($id_volume, $rating)
   {
      if($this->_books != null)
      {
         if($id_volume instanceof Zend_Gdata_Books_VolumeEntry)
         {
            $id_aux = $id_volume->id->text;
            $id_parts = explode('/', $id_aux);
            $id = end($id_parts);
         }
         else
         {
            if(strpos($id_volume, '/'))
            {
               $id_parts = explode('/', $id_volume);
               $id = end($id_parts);
            }
            else
            {
               $id = $id_volume;
            }
         }
         $entry = new Zend_Gdata_Books_VolumeEntry();
         $entry->setId(new Zend_Gdata_App_Extension_Id($id));
         $ratingobject = new Zend_Gdata_Extension_Rating();
         $ratingobject->setValue($rating);
         $entry->setRating($ratingobject);

         return $this->_books->insertVolume($entry, Zend_Gdata_Books::MY_ANNOTATION_FEED_URI);
      }
      else
      {
         return false;
      }
   }

   // TODO: add methods to retrieve rating minimum and maximum values.

   /**
    * Adds a review to a book.
    *
    * If {@link $_books} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Books_VolumeEntry} for
    * reviewed book.
    *
    * @param    string|Zend_Gdata_Books_VolumeEntry     $id_volume      Book identifier or
    *                                                                   {@link Zend_Gdata_Books_VolumeEntry volume object}.
    * @param    string                                  $text           Book review.
    * @return   boolean|Zend_Gdata_Books_VolumeEntry
    */
   function addReview($id_volume, $text)
   {
      if($this->_books != null)
      {
         if($id_volume instanceof Zend_Gdata_Books_VolumeEntry)
         {
            $entry = $id_volume;
         }
         else
         {
            if(strpos($id_volume, '/'))
            {
               $id_parts = explode('/', $id_volume);
               $id = end($id_parts);
               $entry = $this->_books->getVolumeEntry($id);
            }
            else
            {
               $entry = $this->_books->getVolumeEntry($id_volume);
            }
         }

         $review = new Zend_Gdata_Books_Extension_Review();
         $review->setText($text);
         $entry->setReview($review);
         $rating = new Zend_Gdata_Extension_Rating();
         $rating->setValue('1');
         $entry->setRating($rating);

         $this->_books->insertVolume($entry, $entry->getAnnotationLink()->href);

      }
      else
      {
         return false;
      }
   }

   /**
    * Adds labels to a book.
    *
    * If {@link $_books} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Books_VolumeEntry} for
    * labeled book.
    *
    * @param    string|Zend_Gdata_Books_VolumeEntry     $id_volume      Book identifier or
    *                                                                   {@link Zend_Gdata_Books_VolumeEntry volume object}.
    * @param    string                                  $labels         Labels.
    *
    * @return   boolean|Zend_Gdata_Books_VolumeEntry
    */
   function addLabels($id_volume, $labels)
   {
      if($this->_books != null)
      {
         if($id_volume instanceof Zend_Gdata_Books_VolumeEntry)
         {
            $entry = $id_volume;
            $url = $id_volume->getId()->getText();
         }
         else
         {
            if(strpos($id_volume, '/'))
            {
               $id_parts = explode('/', $id_volume);
               $id = end($id_parts);
               $entry = $this->_books->getVolumeEntry($id);
               $url = $id_volume;
            }
            else
            {
               $entry = $this->_books->getVolumeEntry($id_volume);
               $url = $entry->getId()->getText();
            }
         }

         $category = new Zend_Gdata_App_Extension_Category('rated', 'http://schemas.google.com/books/2008/labels', $labels);
         $entry->setCategory(array($category));
         return $this->_books->insertVolume($entry, $entry->getAnnotationLink()->href);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves volumes where user has annotations.
    *
    * If {@link $_books} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get a {@link Zend_Gdata_Books_VolumeFeed collection} of
    * {@link Zend_Gdata_Books_VolumeEntry volumes} with user annotations.
    *
    * @return   boolean|Zend_Gdata_Books_VolumeFeed
    */
   function retrieveAllAnnotations()
   {
      if($this->_books != null)
      {
         return $this->_books->getUserAnnotationFeed();
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes a book from user library.
    *
    * If {@link $_books} is not set (is null), this method will return a boolean value, false. If it
    * is set, it will return nothing (void).
    *
    * @param    string|Zend_Gdata_Books_VolumeEntry     $id_volume      Book identifier or
    *                                                                   {@link Zend_Gdata_Books_VolumeEntry volume object}.
    * @return   boolean|void
    */
   function deleteVolume($id_volume)
   {
      if($this->_books != null)
      {
         if($id_volume instanceof Zend_Gdata_Books_VolumeEntry)
         {
            $entry = $id_volume;
         }
         else
         {
            if(strpos($id_volume, '/'))
            {
               $id_parts = explode('/', $id_volume);
               $id = end($id_parts);
               $entry = $this->_books->getVolumeEntry($id);
            }
            else
            {
               $id = $id_volume;
               $entry = $this->_books->getVolumeEntry($id);
            }
         }

         return $this->_books->deleteVolume($entry);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves books from user library.
    *
    * If {@link $_books} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get a {@link Zend_Gdata_Books_VolumeFeed collection} of
    * {@link Zend_Gdata_Books_VolumeEntry volumes} from user library.
    *
    * @return   boolean|Zend_Gdata_Books_VolumeFeed
    */
   function retrieveUserLibrary()
   {
      if($this->_books != null)
      {
         return $this->_books->getUserLibraryFeed();
      }
      else
      {
         return false;
      }
   }
}

?>