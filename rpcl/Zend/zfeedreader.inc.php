<?php

/**
 * Zend/zfeedreader.inc.php
 * 
 * Defines Zend Framework Feed Reader component.
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
use_unit("Zend/framework/library/Zend/Feed/Reader.php");

// Source Type

/**
 * Source is a string.
 * 
 * @const       stString
 */
define('stString', 'stString');

/**
 * Source is a file.
 * 
 * @const       stFile
 */
define('stFile', 'stFile');

/**
 * Source is a URL.
 * 
 * @const       stURL
 */
define('stURL', 'stURL');

/**
 * Component to manage information retrieved from feeds.
 *
 * Supports Atom and RSS feeds, on any version.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.feed.reader.html Zend Framework Documentation
 */
class ZFeedReader extends Component
{
   /**
    * Zend Framework Feed Reader instance.
    *
    * @var      Zend_Feed_Reader
    */
   private $_feed = null;

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Source Type

   /**
    * Type of source used to retrieve the feed.
    *
    * @var      string
    */
   protected $_sourcetype = stURL;

   /**
    * Getter method for {@link $_sourcetype}.
    *
    * @return   string  {@link $_sourcetype}
    */
   function getSourceType()    {return $this->_sourcetype;}

   /**
    * Setter method for {@link $_sourcetype}.
    *
    * @param    string  $value
    */
   function setSourceType($value)    {$this->_sourcetype = $value;}

   /**
    * Getter for {@link $_sourcetype}’s default value.
    *
    * @return   string  stURL
    */
   function defaultSourceType()    {return stURL;}

   // Source URL

   /**
    * Source URL.
    *
    * Ignored unless {@link $_sourcetype} is set ot {@link stURL}.
    *
    * @var      string
    */
   protected $_sourceurl = '';

   /**
    * Getter method for {@link $_sourceurl}.
    *
    * @return   string  {@link $_sourceurl}
    */
   function getSourceUrl()    {return $this->_sourceurl;}

   /**
    * Setter method for {@link $_sourceurl}.
    *
    * @param    string  $value
    */
   function setSourceUrl($value)    {$this->_sourceurl = $value;}

   /**
    * Getter for {@link $_sourceurl}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSourceUrl()    {return '';}

   // Source Filename

   /**
    * Source file path.
    *
    * Ignored unless {@link $_sourcetype} is set ot {@link stFile}.
    *
    * @var      string
    */
   protected $_sourcefilename = '';

   /**
    * Getter method for {@link $_sourcefilename}.
    *
    * @return   string  {@link $_sourcefilename}
    */
   function getSourceFilename()    {return $this->_sourcefilename;}

   /**
    * Setter method for {@link $_sourcefilename}.
    *
    * @param    string  $value
    */
   function setSourceFilename($value)    {$this->_sourcefilename = $value;}

   /**
    * Getter for {@link $_sourcefilename}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSourceFilename()    {return '';}

   // Source String

   /**
    * Source string.
    *
    * Ignored unless {@link $_sourcetype} is set ot {@link stString}.
    *
    * @var      string
    */
   protected $_sourcestring = '';

   /**
    * Getter method for {@link $_sourcestring}.
    *
    * @return   string  {@link $_sourcestring}
    */
   function getSourceString()    {return $this->_sourcestring;}

   /**
    * Setter method for {@link $_sourcestring}.
    *
    * @param    string  $value
    */
   function setSourceString($value)    {$this->_sourcestring = $value;}

   /**
    * Getter for {@link $_sourcestring}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSourceString()    {return '';}

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      $this->createFeed();
   }

   /**
    * Generator for {@link $_feed}.
    *
    * Generates a {@link Zend_Feed_Reader Zend Framework Feed Reader} object from those properties
    * set for this {@link ZFeedReader} instance (or defaults), and saves it to {@link $_feed}.
    */
   function createFeed()
   {
      switch($this->_sourcetype)
      {
         case stString:
            $this->_feed = Zend_Feed_Reader::importString($this->_sourcestring);
            break;
         case stFile:
            $this->_feed = Zend_Feed_Reader::importFile($this->_sourcefilename);
            break;
         case stURL:
            $this->_feed = Zend_Feed_Reader::import($this->_sourceurl);
            break;
      }
   }

   // Other Methods

   /**
    * Returns a unique ID associated with this feed.
    *
    * @return   string
    */
   function findIdFeed()
   {
      return $this->_feed->getId();
   }

   /**
    * Returns the title of the feed.
    *
    * @return   string
    */
   function findTitleFeed()
   {
      return $this->_feed->getTitle();
   }

   /**
    * Returns the text description of the feed.
    *
    * @return   string
    */
   function findDescriptionFeed()
   {
      return $this->_feed->getDescription();
   }

   /**
    * Returns the URI to a webpage that contains the information on the feed.
    *
    * @return   string
    */
   function findLinkFeed()
   {
      return $this->_feed->getLink();
   }

   /**
    * Returns the URI of this feed, which may be the same as the URI used to import the feed.
    *
    * @return   string
    */
   function findFeedLinkFeed()
   {
      return $this->_feed->getFeedLink();
   }

   /**
    * Returns an array with information on feed authors.
    *
    * @return   array
    */
   function findAuthorsFeed()
   {
      return $this->_feed->getAuthors();
   }

   /**
    * Returns either the first known author or the one with the specified index.
    *
    * @param    integer $index  Author index (first is 0).
    * @return   array
    */
   function findAuthor($index = 0)
   {
      return $this->_feed->getAuthor($index);
   }

   /**
    * Returns the date on which this feed was created.
    *
    * @return   string
    */
   function findDateCreatedFeed()
   {
      return $this->_feed->getDateCreated()->toString();
   }

   /**
    * Returns the date on which this feed was last modified.
    *
    * @return   string
    */
   function findDateModifiedFeed()
   {
      return $this->_feed->getDateModified()->toString();
   }

   /**
    * Returns the date on which this feed was last build.
    *
    * @return   string
    */
   function findLastBuildDateFeed()
   {
      return $this->_feed->getLastBuildDate()->toString();
   }

   /**
    * Returns the {@link http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes ISO 639-1 code} for
    * the language of the feed.
    *
    * @return   string
    */
   function findLanguageFeed()
   {
      return $this->_feed->getLanguage();
   }

   /**
    * Returns the generator of the feed.
    *
    * @return   ZGeneratorOptions
    */
   function findGeneratorFeed()
   {
      return $this->_feed->getGenerator();
   }

   /**
    * Returns any copyright notice associated with the feed.
    *
    * @return   string
    */
   function findCopyrightFeed()
   {
      return $this->_feed->getCopyright();
   }

   /**
    * Returns an array of all Hub Server URI endpoints which are advertised by the feed for use with
    * the Pubsubhubbub Protocol, allowing subscriptions to the feed for real-time updates.
    *
    * @return   array
    */
   function findHubsFeed()
   {
      return $this->_feed->getHubs();
   }
   /**
    * Returns a Zend_Feed_Reader_Collection_Category object containing the details of any categories
    * associated with the overall feed.
    *
    * @return   array
    */
   function findCategoriesFeed()
   {
      return $this->_feed->getCategories();
   }

   /**
    * Returns an array containing data relating to any feed image or logo.
    *
    * @return   array
    */
   function findImageFeed()
   {
      return $this->_feed->getImage();
   }

   /**
    * Returns the type of feed.
    *
    * The type will be a static class constant, such as <tt>Zend_Feed_Reader::TYPE_ATOM_03</tt> if
    * feed is Atom version 3. For a list of these constants, check
    * {@link http://framework.zend.com/apidoc/core/ Zend Framework API Documentation}.
    *
    * @return   integer
    */
   function findTypeFeed()
   {
      return $this->_feed->getType();
   }

   /**
    * Returns a count of the entries or items this feed contains.
    *
    * @return   integer
    */
   function findCountFeed()
   {
      return $this->_feed->count();
   }

   /**
    * Returns the encoding of the source XML document.
    *
    * @return   string
    */
   function findEncodingFeed()
   {
      return $this->_feed->getEncoding();
   }

   /**
    * Resets the entry index to 0.
    *
    */
   function rewindFeed()
   {
      $this->_feed->rewind();
   }

   /**
    * Returns current index key.
    *
    * @return integer
    */
   function findKeyFeed()
   {
      return $this->_feed->key();
   }

   /**
    * Get entry in position defined by given key.
    *
    * @param    integer         $key    Entry number.
    * @return   integer|Object
    */
   function _getEntryPosition($key)
   {
      while($key != $this->_feed->key())
      {
         $this->_feed->next();
      }
      if($this->_feed->valid())
      {
         $aux = $this->_feed->current();
      }
      else
      {
         $aux = 0;
      }
      $this->_feed->rewind();
      return $aux;
   }

   /**
    * Returns a unique ID for given entry or current one if none is specified.
    *
    * @param    integer         $key    Entry number.
    * @return   string
    */
   function findIdEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getId();
      }
      else
      {
         return $aux;
      }
   }

   /**
    * Returns the title of given entry or current one if none is specified.
    *
    * @param    integer         $key    Entry number.
    * @return   string
    */
   function findTitleEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getTitle();
      }
      else
      {
         return $aux;
      }
   }

   /**
    * Returns a description of given entry or current one if none is specified.
    *
    * @param    integer         $key    Entry number.
    * @return   string
    */
   function findDescriptionEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getDescription();
      }
      else
      {
         return $aux;
      }
   }

   /**
    * Returns a URL to the HTML version of given entry or current one if none is specified.
    *
    * @param    integer         $key    Entry number.
    * @return   string
    */
   function findLinkEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);

      if($aux != 0)
      {
         return $aux->getLink();
      }
      else
      {
         return $aux;
      }
   }

   /**
    * Returns the permanent link to given entry or current one if none is specified.
    *
    * @param    integer         $key    Entry number.
    * @return   string
    */
   function findPermaLinkEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getPermaLink();
      }
      else
      {
         return $aux;
      }
   }

   /**
    * Returns an array with information on authors of given entry or current one if none is
    * specified.
    *
    * @param    integer         $key    Entry number.
    * @return   array
    */
   function findAuthorsEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getAuthors();
      }
      else
      {
         return $aux;
      }
   }

   /**
    * For given entry or current one if none is specified, returns either the first known author or
    * the one with the specified index.
    *
    * @param    integer         $key    Entry number.
    * @param    integer         $index  Author index (first is 0).
    * @return   array
    */
   function findAuthorEntry($key = 0, $index = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getAuthor($index);
      }
      else
      {
         return $aux;
      }
   }

   /**
    * Returns creation date for given entry or current one if none is specified.
    *
    * @param    integer         $key    Entry number.
    * @return   string
    */
   function findDateCreatedEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getDateCreated()->toString();
      }
      else
      {
         return $aux;
      }
   }

   /**
    * Returns last modification date for given entry or current one if none is specified.
    *
    * @param    integer         $key    Entry number.
    * @return   string
    */
   function findDateModifiedEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getDateModified()->toString();
      }
      else
      {
         return $aux;
      }
   }

   /**
    * Returns the content of given entry or current one if none is specified.
    *
    * @param    integer         $key    Entry number.
    * @return   string
    */
   function findContentEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getContent();
      }
      else
      {
         return $aux;
      }

   }

   /**
    * For given entry or current one if none is specified, returns an array countaining the value of
    * all attributes from a multimedia <enclosure>.
    *
    * @param    integer         $key    Entry number.
    * @return   array
    */
   function findEnclosureEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getEnclosure();
      }
      else
      {
         return $aux;
      }
   }

   /**
    * Returns the number of comments made at the time the feed was last generated on given entry or
    * current one if none is specified.
    *
    * @param    integer         $key    Entry number.
    * @return   integer
    */
   function findCommentCountEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getCommentCount();
      }
      else
      {
         return $aux;
      }
   }

   /**
    * Returns a URI pointing to the HTML page where comments can be made for given entry or current
    * one if none is specified.
    *
    * @param    integer         $key    Entry number.
    * @return   string
    */
   function findCommentLinkEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getCommentLink();
      }
      else
      {
         return $aux;
      }
   }

   /**
    * Returns a URI pointing to a feed of all comments for given entry or current one if none is
    * specified.
    *
    * @param    integer         $key    Entry number.
    * @return   string
    */
   function findCommentFeedLinkEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getCommentFeedLink();
      }
      else
      {
         return $aux;
      }
   }

   /**
    * Returns a {@link Zend_Feed_Reader_Collection_Category} object containing the details of any
    * categories associated with given entry or current one if none is specified.
    *
    * @param    integer         $key    Entry number.
    * @return   array
    */
   function findCategoriesEntry($key = 0)
   {
      $aux = $this->_getEntryPosition($key);
      if($aux != 0)
      {
         return $aux->getCategories();
      }
      else
      {
         return $aux;
      }
   }
}
?>