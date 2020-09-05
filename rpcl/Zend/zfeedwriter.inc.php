<?php

/**
 * Zend/zfeedwriter.inc.php
 * 
 * Defines Zend Framework Feed Writer component.
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
use_unit("Zend/framework/library/Zend/Feed/Writer/Feed.php");

// Feed Types

/**
 * RSS.
 * 
 * @const       tfRSS
 */
define('tfRSS', 'tfRSS');

/**
 * Atom.
 * 
 * @const       tfAtom
 */
define('tfAtom', 'tfAtom');

/**
 * Options for {@link ZFeedWriter} objects.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.feed.writer.html Zend Framework Documentation
 */
class ZGeneratorOptions extends Persistent
{

    // Owner

   /**
    * Owner.
    *
    * @var      ZFeedWriter
    */
   protected $ZGenerator = null;

   /**
    * {@inheritdoc}
    *
    * @return   ZFeedWriter
    */
   function readOwner()
   {
      return ($this->ZGenerator);
   }

   // Constructor

   /**
    * Class constructor.
    *
    * @param    ZFeedWriter     $aowner {@link $ZFeedWriter Owner}.
    */
   function __construct($aowner)
   {
      parent::__construct();

      $this->ZGenerator = $aowner;
   }

   // Generator Name

   /**
    * Generator name.
    *
    * @var      string
    */
   protected $_namegenerator = '';

   /**
    * Getter method for {@link $_namegenerator}.
    *
    * @return   string  {@link $_namegenerator}
    */
   function getNameGenerator()    {return $this->_namegenerator;}

   /**
    * Setter method for {@link $_namegenerator}.
    *
    * @param    string  $value
    */
   function setNameGenerator($value)    {$this->_namegenerator = $value;}

   /**
    * Getter for {@link $_namegenerator}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultNameGenerator()    {return '';}

   // Generator Version

   /**
    * Generator version.
    *
    * @var      string
    */
   protected $_versiongenerator = '';

   /**
    * Getter method for {@link $_versiongenerator}.
    *
    * @return   string  {@link $_versiongenerator}
    */
   function getVersionGenerator()    {return $this->_versiongenerator;}

   /**
    * Setter method for {@link $_versiongenerator}.
    *
    * @param    string  $value
    */
   function setVersionGenerator($value)    {$this->_versiongenerator = $value;}

   /**
    * Getter for {@link $_versiongenerator}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultVersionGenerator()    {return '';}

   // Generator URI

   /**
    * Generator URI.
    *
    * @var      string
    */
   protected $_urigenerator = '';

   /**
    * Getter method for {@link $_urigenerator}.
    *
    * @return   string  {@link $_urigenerator}
    */
   function getURIGenerator()    {return $this->_urigenerator;}

   /**
    * Setter method for {@link $_urigenerator}.
    *
    * @param    string  $value
    */
   function setURIGenerator($value)    {$this->_urigenerator = $value;}

   /**
    * Getter for {@link $_urigenerator}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultURIGenerator()    {return '';}

   /**
    * Return an array with information on the generator.
    *
    * This are the key-value pairs you can expect:
    * <ul>
    *   <li><b>name</b>: {@link $_namegenerator Generator name}.</li>
    *   <li><b>version</b>: {@link $_versiongenerator Generator version}.</li>
    *   <li><b>uri</b>: {@link $_urigenerator Generator URI}.</li>
    * </ul>
    *
    * Some of them might not be defined.
    *
    * @return   array
    */
   function findGenerator()
   {
      $data = array();

      if($this->_namegenerator != '')
      {
         $data['name'] = $this->_namegenerator;
      }

      if($this->_versiongenerator != '')
      {
         $data['version'] = $this->_versiongenerator;
      }

      if($this->_urigenerator != '')
      {
         $data['uri'] = $this->_urigenerator;
      }

      return $data;
   }
}

/**
 * Component to generate feeds.
 *
 * Supports Atom and RSS feeds, on any version.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.feed.writer.html Zend Framework Documentation
 */
class ZFeedWriter extends Component
{
   /**
    * Zend Framework Feed Writer instance.
    *
    * @var      Zend_Feed_Writer_Feed
    */
   private $_feed = null;

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_generator = new ZGeneratorOptions($this);
   }

   // Feed ID

   /**
    * Unique ID for the feed.
    *
    * @var      string
    */
   protected $_idfeed = '';

   /**
    * Getter method for {@link $_idfeed}.
    *
    * @return   string  {@link $_idfeed}
    */
   function getIdFeed()    {return $this->_idfeed;}

   /**
    * Setter method for {@link $_idfeed}.
    *
    * @param    string  $value
    */
   function setIdFeed($value)    {$this->_idfeed = $value;}

   /**
    * Getter for {@link $_idfeed}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultIdFeed()    {return '';}

   // Feed Title

   /**
    * Feed title.
    *
    * @var      string
    */
   protected $_titlefeed = '';

   /**
    * Getter method for {@link $_titlefeed}.
    *
    * @return   string  {@link $_titlefeed}
    */
   function getTitleFeed()    {return $this->_titlefeed;}

   /**
    * Setter method for {@link $_titlefeed}.
    *
    * @param    string  $value
    */
   function setTitleFeed($value)    {$this->_titlefeed = $value;}

   /**
    * Getter for {@link $_titlefeed}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultTitleFeed()    {return '';}

   // Feed Description

   /**
    * Feed description.
    *
    * @var      string
    */
   protected $_descriptionfeed = '';

   /**
    * Getter method for {@link $_descriptionfeed}.
    *
    * @return   string  {@link $_descriptionfeed}
    */
   function getDescriptionFeed()    {return $this->_descriptionfeed;}

   /**
    * Setter method for {@link $_descriptionfeed}.
    *
    * @param    string  $value
    */
   function setDescriptionFeed($value)    {$this->_descriptionfeed = $value;}

   /**
    * Getter for {@link $_descriptionfeed}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDescriptionFeed()    {return '';}

   // Feed Authors

   /**
    * Feed authorship data.
    *
    * @var      array
    */
   protected $_authorsfeed = array();

   /**
    * Getter method for {@link $_authorsfeed}.
    *
    * @return   array   {@link $_authorsfeed}
    */
   function getAuthorsFeed()    {return $this->_authorsfeed;}

   /**
    * Setter method for {@link $_authorsfeed}.
    *
    * @param    array   $value
    */
   function setAuthorsFeed($value)    {$this->_authorsfeed = $value;}

   /**
    * Getter for {@link $_authorsfeed}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultAuthorsFeed()    {return array();}

   // Feed Link

   /**
    * URI to a webpage that contains the information on the feed.
    *
    * @var      string
    */
   protected $_linkfeed = '';

   /**
    * Getter method for {@link $_linkfeed}.
    *
    * @return   string  {@link $_linkfeed}
    */
   function getLinkFeed()    {return $this->_linkfeed;}

   /**
    * Setter method for {@link $_linkfeed}.
    *
    * @param    string  $value
    */
   function setLinkFeed($value)    {$this->_linkfeed = $value;}

   /**
    * Getter for {@link $_linkfeed}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultLinkFeed()    {return '';}

   // Feed Links

   /**
    * Links to XML feeds with the same content as this one.
    *
    * The links can point either to this feed itself, or to one with the same content but in a
    * different feed format.
    *
    * @var      array
    */
   protected $_feedlinksfeed = array();

   /**
    * Getter method for {@link $_feedlinksfeed}.
    *
    * @return   array   {@link $_feedlinksfeed}
    */
   function getFeedLinksFeed()    {return $this->_feedlinksfeed;}

   /**
    * Setter method for {@link $_feedlinksfeed}.
    *
    * @param    array   $value
    */
   function setFeedLinksFeed($value)    {$this->_feedlinksfeed = $value;}

   /**
    * Getter for {@link $_feedlinksfeed}’s default value.
    *
    * @return   array   Empty string
    */
   function defaultFeedLinksFeed()    {return '';}

   // Feed Creation Date

   /**
    * Feed creation date.
    *
    * This property is generally only applicable to Atom, where it represents the date the resource
    * described by an Atom 1.0 document was created.
    *
    * If a string is passed, it must be a UNIX timestamp. You can generate one with <tt>date()</tt>
    * PHP function, which without parameters returns current timestamp.
    *
    * @var      string|ZDate|Zend_Date
    */
   protected $_datecreatedfeed = '';

   /**
    * Getter method for {@link $_datecreatedfeed}.
    *
    * @return   string|ZDate|Zend_Date  {@link $_datecreatedfeed}
    */
   function getDateCreatedFeed()    {return $this->_datecreatedfeed;}

   /**
    * Setter method for {@link $_datecreatedfeed}.
    *
    * @param    string|ZDate|Zend_Date  $value
    */
   function setDateCreatedFeed($value)    {$this->_datecreatedfeed = $value;}

   /**
    * Getter for {@link $_datecreatedfeed}’s default value.
    *
    * @return   string|ZDate|Zend_Date  Empty string
    */
   function defaultDateCreatedFeed()    {return '';}

   // Feed Last Modification Date

   /**
    * Feed last modification date.
    *
    * If a string is passed, it must be a UNIX timestamp. You can generate one with <tt>date()</tt>
    * PHP function, which without parameters returns current timestamp.
    *
    * @var      string|ZDate|Zend_Date
    */
   protected $_datemodifiedfeed = '';

   /**
    * Getter method for {@link $_datemodifiedfeed}.
    *
    * @return   string|ZDate|Zend_Date  {@link $_datemodifiedfeed}
    */
   function getDateModifiedFeed()    {return $this->_datemodifiedfeed;}

   /**
    * Setter method for {@link $_datemodifiedfeed}.
    *
    * @param    string|ZDate|Zend_Date  $value
    */
   function setDateModifiedFeed($value)    {$this->_datemodifiedfeed = $value;}

   /**
    * Getter for {@link $_datemodifiedfeed}’s default value.
    *
    * @return   string|ZDate|Zend_Date  Empty string
    */
   function defaultDateModifiedFeed()    {return '';}

   // Feed Last Build Date

   /**
    * Feed last build date.
    *
    * If a string is passed, it must be a UNIX timestamp. You can generate one with <tt>date()</tt>
    * PHP function, which without parameters returns current timestamp.
    *
    * @var      string|ZDate|Zend_Date
    */
   protected $_lastbuilddatefeed = '';

   /**
    * Getter method for {@link $_lastbuilddatefeed}.
    *
    * @return   string|ZDate|Zend_Date  {@link $_lastbuilddatefeed}
    */
   function getLastBuildDateFeed()    {return $this->_lastbuilddatefeed;}

   /**
    * Setter method for {@link $_lastbuilddatefeed}.
    *
    * @param    string|ZDate|Zend_Date  $value
    */
   function setLastBuildDateFeed($value)    {$this->_lastbuilddatefeed = $value;}

   /**
    * Getter for {@link $_lastbuilddatefeed}’s default value.
    *
    * @return   string|ZDate|Zend_Date  Empty string
    */
   function defaultLastBuildDateFeed()    {return '';}

   // Feed Language

   /**
    * Feed language {@link http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes ISO 639-1 code}.
    *
    * @var      string
    */
   protected $_languagefeed = '';

   /**
    * Getter method for {@link $_languagefeed}.
    *
    * @return   string  {@link $_languagefeed}
    */
   function getLanguageFeed()    {return $this->_languagefeed;}

   /**
    * Setter method for {@link $_languagefeed}.
    *
    * @param    string  $value
    */
   function setLanguageFeed($value)    {$this->_languagefeed = $value;}

   /**
    * Getter for {@link $_languagefeed}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultLanguageFeed()    {return '';}

   // Generator

   /**
    * Feed generator.
    *
    * @var      ZGeneratorOptions
    */
   protected $_generator = null;

   /**
    * Getter method for {@link $_generator}.
    *
    * @return   ZGeneratorOptions       {@link $_generator}
    */
   function getGenerator()    {return $this->_generator;}

   /**
    * Setter method for {@link $_generator}.
    *
    * @param    ZGeneratorOptions       $value
    */
   function setGenerator($value)    {if(is_object($value))        {$this->_generator = $value;}}

   /**
    * Getter for {@link $_generator}’s default value.
    *
    * @return   ZGeneratorOptions       Null
    */
   function defaultGenerator()    {return null;}

   // Feed Copyright

   /**
    * Feed copyright notice.
    *
    * @var      string
    */
   protected $_copyrightfeed = '';

   /**
    * Getter method for {@link $_copyrightfeed}.
    *
    * @return   string  {@link $_copyrightfeed}
    */
   function getCopyrightFeed()    {return $this->_copyrightfeed;}

   /**
    * Setter method for {@link $_copyrightfeed}.
    *
    * @param    string  $value
    */
   function setCopyrightFeed($value)    {$this->_copyrightfeed = $value;}

   /**
    * Getter for {@link $_copyrightfeed}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultCopyrightFeed()    {return '';}

   // Feed Hubs

   /**
    * Hub Server URI endpoints which are advertised by the feed for use with the Pubsubhubbub
    * Protocol, allowing subscriptions to the feed for real-time updates.
    *
    * @var      array
    */
   protected $_hubsfeed = array();

   /**
    * Getter method for {@link $_hubsfeed}.
    *
    * @return   array   {@link $_hubsfeed}
    */
   function getHubsFeed()    {return $this->_hubsfeed;}

   /**
    * Setter method for {@link $_hubsfeed}.
    *
    * @param    array   $value
    */
   function setHubsFeed($value)    {$this->_hubsfeed = $value;}

   /**
    * Getter for {@link $_hubsfeed}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultHubsFeed()    {return array();}

   // Feed Categories

   /**
    * Feed categories.
    *
    * @var      array
    */
   protected $_categoriesfeed = array();

   /**
    * Getter method for {@link $_categoriesfeed}.
    *
    * @return   array   {@link $_categoriesfeed}
    */
   function getCategoriesFeed()    {return $this->_categoriesfeed;}

   /**
    * Setter method for {@link $_categoriesfeed}.
    *
    * @param    array   $value
    */
   function setCategoriesFeed($value)    {$this->_categoriesfeed = $value;}

   /**
    * Getter for {@link $_categoriesfeed}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultCategoriesFeed()    {return array();}

   // Feed Images

   /**
    * Image metadata for RSS image or Atom logo.
    *
    * @var      array
    */
   protected $_imagesfeed = array();

   /**
    * Getter method for {@link $_imagesfeed}.
    *
    * @return   array   {@link $_imagesfeed}
    */
   function getImagesFeed()    {return $this->_imagesfeed;}

   /**
    * Setter method for {@link $_imagesfeed}.
    *
    * @param    array   $value
    */
   function setImagesFeed($value)    {$this->_imagesfeed = $value;}

   /**
    * Getter for {@link $_imagesfeed}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultImagesFeed()    {return array();}

   // Feed Type

   /**
    * Feed type.
    *
    * Possible values are: {@link tfAtom} or {@link tfRSS}.
    *
    * @var      string
    */
   protected $_typefeed = tfRSS;

   /**
    * Getter method for {@link $_typefeed}.
    *
    * @return   string  {@link $_typefeed}
    */
   function getTypeFeed()    {return $this->_typefeed;}

   /**
    * Setter method for {@link $_typefeed}.
    *
    * @param    string  $value
    */
   function setTypeFeed($value)    {$this->_typefeed = $value;}

   /**
    * Getter for {@link $_typefeed}’s default value.
    *
    * @return   string  {@link tfRSS}
    */
   function defaultTypeFeed()    {return tfRSS;}

   /**
    * Returns the content of the feed.
    *
    * @return   string
    */
   function Export()
   {
      $type = '';
      switch($this->_typefeed)
      {
         case tfRSS:
            $type = 'rss';
            break;
         case tfAtom:
            $type = 'atom';
            break;
      }
      return $this->_feed->export($type);
   }

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      $this->_createFeed();
   }

   /**
    * Generator for {@link $_feed}.
    *
    * Generates a {@link Zend_Feed_Writer_Feed Zend Framework Feed Writer} object from those
    * properties set for this {@link ZFeedWriter} instance (or defaults), and saves it to
    * {@link $_feed}.
    */
   function _createFeed()
   {
      $this->_feed = new Zend_Feed_Writer_Feed();

      if($this->_idfeed != '')
      {
         $this->_feed->setId($this->_idfeed);
      }

      if($this->_titlefeed != '')
      {
         $this->_feed->setTitle($this->_titlefeed);
      }

      if($this->_descriptionfeed != '')
      {
         $this->_feed->setDescription($this->_descriptionfeed);
      }

      if($this->_linkfeed != '')
      {
         $this->_feed->setLink($this->_linkfeed);
      }

      if($this->_feedlinksfeed != '')
      {
         foreach($this->_feedlinksfeed as $feed)
         {
            $this->_feed->setFeedLink($feed['Uri'], $feed['Type']);
         }
      }

      if($this->_datecreatedfeed != '')
      {
         $this->_feed->setDateCreated($this->_datecreatedfeed);
      }

      if($this->_datemodifiedfeed != '')
      {
         $this->_feed->setDateModified($this->_datemodifiedfeed);
      }

      if($this->_lastbuilddatefeed != '')
      {
         $this->_feed->setLastBuildDate($this->_lastbuilddatefeed);
      }

      if($this->_languagefeed != '')
      {
         $this->_feed->setLanguage($this->_languagefeed);
      }

      $aux = $this->_generator->findGenerator();

      if(count($aux) != 0)
      {
         $this->_feed->setGenerator($aux);
      }

      if($this->_copyrightfeed != '')
      {
         $this->_feed->setCopyright($this->_copyrightfeed);
      }

      if(count($this->_authorsfeed) != 0)
      {
         $authors = array();
         foreach($this->_authorsfeed as $feed)
         {
            $authors[] = array_change_key_case($feed);
         }

         $this->_feed->addAuthors($authors);
      }
      if(count($this->_hubsfeed) != 0)
      {
         $this->_feed->addHubs($this->_hubsfeed);
      }

      if(count($this->_categoriesfeed) != 0)
      {
         $categories = array();
         foreach($this->_categoriesfeed as $feed)
         {
            $categories[] = array_change_key_case($feed);
         }
         $this->_feed->addCategories($categories);
      }

      if(count($this->_imagesfeed) != 0)
      {
         $images = array();
         foreach($this->_imagesfeed as $feed)
         {
             $this->_feed->setImage(array_change_key_case($feed));
         }


      }
   }

   /**
    *  Create a new entry on the {@link $_feed feed}.
    *
    * @param    string                  $id                     {@link $_idfeed ID}.
    * @param    string                  $title                  {@link $_titlefeed Title}.
    * @param    string                  $description            {@link $_descriptionfeed Description}.
    * @param    string                  $content                Content.
    * @param    string                  $link                   {@link $_linkfeed Link}.
    * @param    array                   $feedlinks              {@link $_feedlinksfeed Feed links}.
    * @param    array                   $authors                {@link $_authorsfeed Authors}.
    * @param    string|ZDate|Zend_Date  $datecreated            {@link $_datecreatedfeed Creation date}.
    * @param    string|ZDate|Zend_Date  $datemodified           {@link $_datemodifiedfeed Last modification date}.
    * @param    string                  $copyright              {@link $_copyrightfeed Copyright notice}.
    * @param    array                   $categories             {@link $_categoriesfeed Categories}.
    * @param    integer                 $commentcount           Number of comments associated with this entry.
    * @param    string                  $commentlink            URI to a webpage with the comments associated to this entry.
    * @param    array                   $commentfeedlink        Links to XML feeds with the comments associated to this entry.
    * @param    string                  $encoding               Character encoding.
    */
   function AddNewEntry($id, $title, $description, $content, $link, $feedlinks, $authors, $datecreated, $datemodified, $copyright, $categories, $commentcount, $commentlink, $commentfeedlink, $encoding)
   {
      $newentry = $this->_feed->createEntry();

      if($id != '')
      {
         $newentry->setId($id);
      }

      if($title != '')
      {
         $newentry->setTitle($title);
      }

      if($description != '')
      {
         $newentry->setDescription($description);
      }

      if($content != '')
      {
         $newentry->setContent($content);
      }

      if($link != '')
      {
         $newentry->setLink($link);
      }

      if(is_array($feedlinks) && count($feedlinks) != 0)
      {
         $newentry->setFeedLinks($feedlinks);
      }

      if(is_array($authors) && count($authors) != 0)
      {
         $newentry->addAuthors($authors);
      }

      if($datecreated != '')
      {
         $newentry->setDateCreated($datecreated);
      }

      if($datemodified != '')
      {
         $newentry->setDateModified($datemodified);
      }

      if($copyright != '')
      {
         $newentry->setCopyright($copyright);
      }

      if(is_array($categories) && count($categories) != 0)
      {
         $newentry->addCategories($categories);
      }

      if($commentcount != '')
      {
         $newentry->setCommentCount($commentcount);
      }

      if($commentlink != '')
      {
         $newentry->setCommentLink($commentlink);
      }

      if(is_array($commentfeedlink) && count($commentfeedlink) != 0)
      {
         $newentry->setCommentFeedLinks($commentfeedlink);
      }

      if($encoding != '')
      {
         $newentry->setEncoding($encoding);
      }

      $this->_feed->addEntry($newentry);

   }
}

?>