<?php

/**
 * Zend/zgdataphotos.inc.php
 * 
 * Defines Zend Framework Picasa Web Albums component.
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
use_unit("Zend/framework/library/Zend/Gdata/Photos.php");
use_unit("Zend/framework/library/Zend/Gdata/Photos/AlbumQuery.php");
use_unit("Zend/framework/library/Zend/Gdata/Photos/PhotoQuery.php");
use_unit("Zend/framework/library/Zend/Gdata/Photos/UserQuery.php");

/**
 * Component to manage Picasa Web Albums service.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.gdata.photos.html Zend Framework Documentation
 */
class ZGDataPhotos extends Component
{

   // Zend Framework Picasa Web Albums

   /**
    * Zend Framework Picasa Web Albums instance.
    *
    * @var      Zend_Gdata_Photos
    */
   private $_photos = null;

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
    * Event triggered for user authentication against Picasa Web Albums service.
    * 
    * This event is triggered as soon as this component is {@link loaded() loaded}.
    *
    * This property should either contain the name of the function to be run when the event is
    * triggered (without brackets), or be set to null.
    *
    * If the name of a function is provided, such a function should expect the following key-value
    * pairs in the parameters array, passed to the function as its second parameter:
    * <ul>
    *   <li><b>service</b>: {@link Zend_Gdata_Photos::AUTH_SERVICE_NAME}.</li>
    *   <li><b>url</b>: {@link Zend_Gdata_Photos::PICASA_BASE_URI}.</li>
    *   <li><b>appname</b>: {@link $_applicationname}.</li>
    * </ul>
    *
    * It is also expected to return a boolean value. If true is returned, component will initialize
    * {@link $_photos} and set {@link $_visibility} to 'private'. If false is returned,
    * {@link $_photos} will also be initialized, but {@link $_visibility} will be set to 'public'
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

         $aux = $this->callEvent('onauthentication', array('service'=>Zend_Gdata_Photos::AUTH_SERVICE_NAME, 'url'=>Zend_Gdata_Photos::PICASA_BASE_URI, 'appname'=>$this->_applicationname));
         if($aux)
         {
            $this->_photos = new Zend_Gdata_Photos($aux, $this->_applicationname);
            $this->_visibility = 'private';

         }
         else
         {
            $this->_photos = new Zend_Gdata_Photos(null, $this->_applicationname);
            $this->_visibility = 'public';
         }
      }
      else
      {
         $this->_photos = new Zend_Gdata_Photos(null, $this->_applicationname);
         $this->_visibility = 'public';
      }

   }

   /**
    * Retrieves all albums for given user.
    *
    * If no username is provided, current user albums will be retrieved.
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Photos_UserFeed}.
    *
    * @param    string  $user   Picasa username. Optional.
    * @return   boolean|Zend_Gdata_Photos_UserFeed
    */
   function retrieveAlbumList($user = 'default')
   {
      if($this->_photos != null)
      {
         return $this->_photos->getUserFeed($user);
      }
      else
      {
         return false;
      }
   }

   /**
    * Creates a new album.
    *
    * Only parameter is a key-value array with the following optional pairs:
    * <ul>
    *   <li><b>title</b>: Album title (string).</li>
    *   <li><b>summary</b>: Album description (string).</li>
    *   <li><b>location</b>: Location where album photos were taken (string).</li>
    *   <li><b>access</b>: Album visibility. Possible values are: 'all', 'public', or 'private'.</li>
    * </ul>
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Photos_AlbumEntry} for your
    * new album.
    *
    * @param    array   $params Parameters.
    * @return   boolean|Zend_Gdata_Photos_AlbumEntry
    */
   function createAlbum($params)
   {
      if($this->_photos != null)
      {
         $newAlbum = new Zend_Gdata_Photos_AlbumEntry();

         if(isset($params['title']))
         {
            $newAlbum->setTitle($this->_photos->newTitle($params['title']));
         }

         if(isset($params['summary']))
         {
            $newAlbum->setSummary($this->_photos->newSummary($params['summary']));
         }

         if(isset($params['location']))
         {
            $aux_location = new Zend_Gdata_Photos_Extension_Location($params['location']);
            $newAlbum->setGphotoLocation($aux_location);
         }

         if(isset($params['access']))
         {
            $aux_visibility = new Zend_Gdata_Photos_Extension_Access($params['access']);
            $newAlbum->setGphotoAccess($aux_visibility);
         }

         return $this->_photos->insertAlbumEntry($newAlbum);
      }
      else
      {
         return false;
      }
   }

   /**
    * Modifies an album.
    *
    * Second parameter is a key-value array with the following optional pairs:
    * <ul>
    *   <li><b>title</b>: Album title (string).</li>
    *   <li><b>summary</b>: Album description (string).</li>
    *   <li><b>location</b>: Location where album photos were taken (string).</li>
    *   <li><b>access</b>: Album visibility. Possible values are: 'all', 'public', or 'private'.</li>
    * </ul>
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Photos_AlbumEntry} for your
    * modified album.
    *
    * @param    string|Zend_Gdata_Photos_AlbumEntry     $id_album       Album identifier or object.
    * @param    array                                   $params         New values for album properties.
    * @return   boolean|Zend_Gdata_Photos_AlbumEntry
    */
   function modifyAlbum($id_album, $params)
   {
      if($this->_photos != null)
      {
         $editAlbum = '';
         if($id_album instanceof Zend_Gdata_Photos_AlbumEntry)
         {
            $editAlbum = $id_album;
         }
         else
         {
            $editAlbum = new Zend_Gdata_Photos_AlbumEntry($id_album);
         }

         if(isset($params['title']))
         {
            $editAlbum->setTitle($this->_photos->newTitle($params['title']));
         }

         if(isset($params['summary']))
         {
            $editAlbum->setSummary($this->_photos->newSummary($params['summary']));
         }

         if(isset($params['location']))
         {
            $aux_location = new Zend_Gdata_Photos_Extension_Location($params['location']);
            $editAlbum->setGphotoLocation($aux_location);
         }

         if(isset($params['access']))
         {
            $aux_visibility = new Zend_Gdata_Photos_Extension_Access($params['access']);
            $editAlbum->setGphotoAccess($aux_visibility);
         }

         return $editAlbum->save();
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes an album.
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    string|Zend_Gdata_Photos_AlbumEntry     $id_album       Album identifier or object.
    * @return   boolean|void
    */
   function deleteAlbum($id_album)
   {
      if($this->_photos != null)
      {
         if($id_album instanceof Zend_Gdata_Photos_AlbumEntry)
         {
            return $this->_photos->deleteAlbumEntry($id_album, true);

         }
         else
         {
            if(strpos($id_album, '/'))
            {
               $id_parts = explode('/', $id_album);
               $id = end($id_parts);

               $query = new Zend_Gdata_Photos_AlbumQuery();
               $query->setAlbumId($id);

               $album = $this->_photos->getAlbumEntry($query);
               return $album->delete();
            }
            else
            {
               $query = new Zend_Gdata_Photos_AlbumQuery();
               $query->setAlbumId($id_album);

               $album = $this->_photos->getAlbumEntry($query);
               return $album->delete();
            }

         }
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a list of photos.
    *
    * Only parameter is a key-value array with the following optional pairs retrieved photos must
    * have in common:
    * <ul>
    *   <li><b>album</b>: Album name (string).</li>
    *   <li><b>id_album</b>: Album identifier (string).</li>
    *   <li><b>user</b>: Username for the user who uploaded the photos (string).</li>
    *   <li><b>access</b>: Album visibility. Possible values are: 'all', 'public', or 'private'.</li>
    *   <li><b>imgMax</b>: Image size (string). For a list of valid values, check {@link http://code.google.com/apis/picasaweb/docs/1.0/reference.html#Parameters Google Documentation}.</li>
    *   <li><b>thumbsize</b>: Thumbnail size (string). For a list of valid values, check {@link http://code.google.com/apis/picasaweb/docs/1.0/reference.html#Parameters Google Documentation}.</li>
    *   <li><b>query</b>: Full-text query string.</li>
    * </ul>
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Photos_Feed} for matching
    * photos.
    *
    * @param    array   $params Parameters.
    * @return   boolean|Zend_Gdata_Photos_Feed
    */
   function retrievePhotosList($params)
   {
      if($this->_photos != null)
      {

         if((isset($params['album'])) || (isset($params['id_album'])))
         {
            $query = new Zend_Gdata_Photos_AlbumQuery();

            if(isset($params['album']))
            {
               $query->setAlbumName($params['album']);
            }

            if(isset($params['id_album']))
            {
               $query->setAlbumId($params['id_album']);
            }

         }
         else
         {
            $query = new Zend_Gdata_Photos_UserQuery();
            $query->setKind('photo');
         }

         if(isset($params['user']))
         {
            $query->setUser($params['user']);
         }

         if(isset($params['access']))
         {
            $query->setAccess($params['access']);
         }

         if(isset($params['imgMax']))
         {
            $query->setImgMax($params['imgMax']);
         }

         if(isset($params['thumbsize']))
         {
            $query->setThumbsize($params['thumbsize']);
         }

         if(isset($params['query']))
         {
            $query->setQuery($params['query']);
         }

         $list = $this->_photos->getFeed($query);
         return $list;
      }
      else
      {
         return false;
      }
   }

   /**
    * Uploads a photo.
    *
    * Only parameter is a key-value array with the following pairs:
    * <ul>
    *   <li><b>filename</b>: File path (string).</li>
    *   <li><b>filetype</b>: File MIME type (string).</li>
    *   <li><b>title</b>: Photo title (string).</li>
    *   <li><b>summary</b>: Photo description (string).</li>
    *   <li><b>tags</b>: Photo tags (string).</li>
    *   <li><b>position</b>: Photo position (string).</li>
    *   <li><b>user</b>: User who uploads the photo (string).</li>
    *   <li><b>id_album</b>: Identifier of the album photo will be uploaded to (string).</li>
    *   <li><b>commentingEnabled</b>: Whether or not comments will be allowed for the photo (boolean).</li>
    * </ul>
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Photos_PhotoEntry} for your
    * new photo.
    *
    * @param    array   $params Parameters.
    * @return   boolean|Zend_Gdata_Photos_PhotoEntry
    */
   function uploadPhoto($params)
   {
      if($this->_photos != null)
      {
         $photoEntry = $this->_photos->newPhotoEntry();
         if(isset($params['filename']) && isset($params['filetype']))
         {
            $filesource = $this->_photos->newMediaFileSource($params['filename']);
            $filesource->setContentType($params['filetype']);
            $photoEntry->setMediaSource($filesource);
         }

         if(isset($params['title']))
         {
            $photoEntry->setTitle($this->_photos->newTitle($params['title']));
         }

         if(isset($params['summary']))
         {
            $photoEntry->setSummary($this->_photos->newSummary($params['summary']));
         }

         if(isset($params['tags']))
         {
            $keywords = new Zend_Gdata_Media_Extension_MediaKeywords();
            $keywords->setText($params['tags']);

            $photoEntry->mediaGroup = new Zend_Gdata_Media_Extension_MediaGroup();
            $photoEntry->mediaGroup->keywords = $keywords;
         }

         if(isset($params['position']))
         {
            $where = new Zend_Gdata_Geo_Extension_GeoRssWhere();
            $position = new Zend_Gdata_Geo_Extension_GmlPos($params['position']);
            $where->point = new Zend_Gdata_Geo_Extension_GmlPoint($position);
            $photoEntry->setGeoRssWhere($where);
         }

         $albumQuery = $this->_photos->newAlbumQuery();

         if(isset($params['user']))
         {
            $albumQuery->setUser($params['user']);
         }

         if(isset($params['commentingEnabled']))
         {
            $aux_commenting = new Zend_Gdata_Photos_Extension_CommentingEnabled($params['commentingEnabled']);
            $photoEntry->setGphotoCommentingEnabled($aux_commenting);
         }

         if(isset($params['id_album']) || isset($params['album_name']))
         {
            if(isset($params['id_album']))
               $albumQuery->setAlbumId($params['id_album']);
            else
               $albumQuery->setAlbumName($params['album_name']);
         }
         else
         {
            $albumQuery->setAlbumId('default');
         }

         $insertedEntry = $this->_photos->insertPhotoEntry($photoEntry, $albumQuery->getQueryUrl());
         return $insertedEntry;
      }
      else
      {
         return false;
      }
   }

   /**
    * Modifies a photo.
    *
    * Second parameter is a key-value array with the following optional pairs:
    * <ul>
    *   <li><b>title</b>: Photo title (string).</li>
    *   <li><b>summary</b>: Photo description (string).</li>
    *   <li><b>tags</b>: Photo tags (string).</li>
    *   <li><b>position</b>: Photo position (string).</li>
    *   <li><b>user</b>: User who uploads the photo (string).</li>
    *   <li><b>id_album</b>: Identifier of the album photo will be uploaded to (string).</li>
    *   <li><b>commentingEnabled</b>: Whether or not comments will be allowed for the photo (boolean).</li>
    * </ul>
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Photos_PhotoEntry} for your
    * modified photo.
    *
    * @param    string|Zend_Gdata_Photos_PhotoEntry     $id_photo       Photo identifier or object.
    * @param    array   $params Parameters.
    * @return   boolean|Zend_Gdata_Photos_PhotoEntry
    */
   function modifyPhoto($id_photo, $params)
   {
      if($this->_photos != null)
      {

         if($id_photo instanceof Zend_Gdata_Photos_PhotoEntry)
         {
            $photoEntry = $id_photo;
         }
         else
         {
            if(strpos($id_photo, '/'))
            {
               $id_parts = explode('/', $id_photo);
               $id = end($id_parts);
               $photoQuery = new Zend_Gdata_Photos_PhotoQuery($id_photo);
               $photoQuery->setPhotoId($id);
               if(isset($params['album_name']) || isset($params['id_album']))
               {
                  if(isset($params['album_name']))
                  {
                     $photoQuery->setAlbumName($params['album_name']);
                  }
                  else
                  {
                     $photoQuery->setAlbumId($params['id_album']);
                  }
               }

               $photoEntry = $this->_photos->getPhotoEntry($photoQuery);

            }
            else
            {
               $photoEntry = $this->_photos->newPhotoEntry($id_photo);
            }
         }

         if(isset($params['title']))
         {
            $photoEntry->setTitle($this->_photos->newTitle($params['title']));
         }

         if(isset($params['summary']))
         {
            $photoEntry->setSummary($this->_photos->newSummary($params['summary']));
         }

         if(isset($params['tags']))
         {
            $keywords = new Zend_Gdata_Media_Extension_MediaKeywords();
            $keywords->setText($params['tags']);

            $photoEntry->mediaGroup = new Zend_Gdata_Media_Extension_MediaGroup();
            $photoEntry->mediaGroup->keywords = $keywords;
         }

         if(isset($params['position']))
         {
            $where = new Zend_Gdata_Geo_Extension_GeoRssWhere();
            $position = new Zend_Gdata_Geo_Extension_GmlPos($params['position']);
            $where->point = new Zend_Gdata_Geo_Extension_GmlPoint($position);
            $photoEntry->setGeoRssWhere($where);
         }

         if(isset($params['commentingEnabled']))
         {
            $aux_commenting = new Zend_Gdata_Photos_Extension_CommentingEnabled($params['commentingEnabled']);
            $photoEntry->setGphotoCommentingEnabled($aux_commenting);
         }

         $photoEntry->save();
         return $photoEntry;
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes a photo.
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    string|Zend_Gdata_Photos_PhotoEntry     $id_photo       Photo identifier or object.
    * @param    string|Zend_Gdata_Photos_AlbumEntry     $id_album       Album identifier or object. Optional.
    * @return   boolean|void
    */
   function deletePhoto($id_photo, $id_album = 'default')
   {
      if($this->_photos != null)
      {
         if($id_photo instanceof Zend_Gdata_Photos_PhotoEntry)
         {
            return $this->_photos->deletePhotoEntry($id_photo, true);
         }
         else
         {
            if($id_album instanceof Zend_Gdata_Photos_AlbumEntry)
            {
               $id_album_aux = $id_album->id->text;
            }
            else
            {
               if(strpos($id_album, '/'))
               {
                  $id_parts = explode('/', $id_album);
                  $id_album_aux = end($id_parts);

               }
               else
               {
                  $id_album_aux = $id_album;
               }
            }
            if(strpos($id_photo, '/'))
            {
               $id_parts = explode('/', $id_photo);
               $id = end($id_parts);
               $entry = new Zend_Gdata_Photos_PhotoQuery();
               $entry->setPhotoId($id);
               $entry->setAlbumId($id_album_aux);
               $aux_entry = $this->_photos->getPhotoEntry($entry);
               return $aux_entry->delete();
            }
            else
            {
               $query = new Zend_Gdata_Photos_PhotoQuery();

               $query->setPhotoId($id_photo);
               $query->setAlbumId($id_album_aux);
               $entry = $this->_photos->getPhotoEntry($query);

               return $entry->delete();
            }
         }
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves the tags on given photos.
    *
    * Only parameter is a key-value array with the following optional pairs photos must have in
    * common:
    * <ul>
    *   <li><b>id_photo</b>: Photo identifier (string).</li>
    *   <li><b>album_name</b>: Album name (string).</li>
    *   <li><b>id_album</b>: Album identifier (string).</li>
    *   <li><b>user</b>: Username for the user who uploaded the photos (string).</li>
    * </ul>
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Photos_UserFeed} for tags
    * on matching photos.
    *
    * @param    array   $params Parameters.
    * @return   boolean|Zend_Gdata_Photos_UserFeed
    */
   function retrieveTagsList($params)
   {
      if($this->_photos != null)
      {
         if(isset($params['id_photo']) && (isset($params['album_name']) || isset($params['id_album'])))
         {
            $query = new Zend_Gdata_Photos_PhotoQuery();

            $query->setPhotoId($params['id_photo']);
            if(isset($params['user']))
            {
               $query->setUser($params['user']);
            }
            if(isset($params['album_name']))
            {
               $query->setAlbumName($params['album_name']);
            }
            else
            {
               $query->setAlbumId($params['id_album']);
            }

            $query->setKind('tag');
         }
         else
         {
            if((isset($params['album_name']) || isset($params['id_album'])))
            {
               $query = new Zend_Gdata_Photos_AlbumQuery();

               if(isset($params['user']))
               {
                  $query->setUser($params['user']);
               }
               if(isset($params['album_name']))
               {
                  $query->setAlbumName($params['album_name']);
               }
               else
               {
                  $query->setAlbumId($params['id_album']);
               }

               $query->setKind('tag');
            }
            else
            {

               $query = new Zend_Gdata_Photos_UserQuery();

               if(isset($params['user']))
                  $query->setUser($params['user']);

               $query->setKind('tag');

            }
         }
         return $this->_photos->getUserFeed(null, $query);
      }
      else
      {
         return false;
      }

   }

   /**
    * Searches photos by tags.
    *
    * You can also limit the search to a given user.
    *
    * Only parameter is a key-value array with the following optional pairs retrieved photos must
    * have in common:
    * <ul>
    *   <li><b>tags</b>: Tags (string).</li>
    *   <li><b>user</b>: Username for the user who uploaded the photos (string).</li>
    * </ul>
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Photos_UserFeed} for
    * matching photos.
    *
    * @param    array   $params Parameters.
    * @return   boolean|Zend_Gdata_Photos_UserFeed
    */
   function searchPhotosByTags($params)
   {
      if($this->_photos != null)
      {
         $query = $this->_photos->newUserQuery();

         if(isset($params['user']))
         {
            $query->setUser($params['user']);
         }
         else
         {
            $query->setUser('default');
         }

         if(isset($params['tags']))
         {
            $query->setTag($params['tags']);
         }

         $query->setKind('photo');

         return $this->_photos->getUserFeed(null, $query);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a list of comments on given photos.
    *
    * Only parameter is a key-value array with the following optional pairs photos must have in
    * common:
    * <ul>
    *   <li><b>id_photo</b>: Photo identifier (string).</li>
    *   <li><b>album_name</b>: Album name (string).</li>
    *   <li><b>id_album</b>: Album identifier (string).</li>
    *   <li><b>user</b>: Username for the user who uploaded the photos (string).</li>
    * </ul>
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Photos_UserFeed} for tags
    * on matching photos.
    *
    * @param    array   $params Parameters.
    * @return   boolean|Zend_Gdata_Photos_UserFeed
    */
   function retrieveCommentsList($params)
   {
      if($this->_photos != null)
      {
         if(isset($params['id_photo']) && (isset($params['album_name']) || isset($params['id_album'])))
         {
            $query = $this->_photos->newPhotoQuery();

            if(isset($params['user']))
            {
               $query->setUser($params['user']);
            }

            if(isset($params['id_album']))
            {
               $query->setAlbumId($params['id_album']);
            }
            else
            {
               $query->setAlbumName($params['album_name']);
            }

            $query->setPhotoId($params['id_photo']);

            $query->setKind('comment');
         }
         else
         {
            $query = $this->_photos->newUserQuery();

            if(isset($params['user']))
            {
               $query->setUser($params['user']);
            }

            $query->setKind('comment');
         }

         return $this->_photos->getUserFeed(null, $query);
      }
      else
      {
         return false;
      }
   }

   /**
    * Adds comments to a photo (and other modifications).
    *
    * Second parameter is a key-value array with the following optional pairs:
    * <ul>
    *   <li><b>album_name</b>: Album name (string).</li>
    *   <li><b>id_album</b>: Album identifier (string).</li>
    *   <li><b>user</b>: Username for the user who uploaded the photos (string).</li>
    *   <li><b>comments</b>: Comments (array of strings).</li>
    * </ul>
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Photos_PhotoEntry} for your
    * modified photo.
    *
    * @param    string|Zend_Gdata_Photos_PhotoEntry     $id_photo       Photo identifier or object.
    * @param    array   $params Parameters.
    * @return   boolean|Zend_Gdata_Photos_PhotoEntry
    */
   function addCommentsToPhoto($id_photo, $params)
   {
      if($this->_photos != null)
      {

         if($id_photo instanceof Zend_Gdata_Photos_PhotoEntry)
         {
            $photoEntry = $id_photo;
         }
         else
         {
            if(strpos($id_photo, '/'))
            {

               $id_parts = explode('/', $id_photo);
               $id = end($id_parts);
               $query = $this->_photos->newPhotoQuery();

               if(isset($params['user']))
               {
                  $query->setUser($params['user']);
               }

               if(isset($params['id_album']) || isset($params['album_name']))
               {
                  if(isset($params['id_album']))
                  {
                     $query->setAlbumId($params['id_album']);
                  }
                  else
                  {
                     $query->setAlbumName($params['album_name']);
                  }

               }

               $query->setPhotoId($id);

               $photoEntry = $this->_photos->getPhotoEntry($query);

            }
            else
            {
               $query = $this->_photos->newPhotoQuery();

               if(isset($params['user']))
               {
                  $query->setUser($params['user']);
               }

               if(isset($params['id_album']) || isset($params['album_name']))
               {
                  if(isset($params['id_album']))
                  {
                     $query->setAlbumId($params['id_album']);
                  }
                  else
                  {
                     $query->setAlbumName($params['album_name']);
                  }

               }

               $query->setPhotoId($id);

               $photoEntry = $this->_photos->getPhotoEntry($query);
            }
         }

         if(isset($params['comments']))
         {

            foreach($params['comments'] as $comment)
            {
               $newComment = $this->_photos->newCommentEntry();
               $newComment->setContent($this->_photos->newContent($comment));
               $this->_photos->insertCommentEntry($newComment, $photoEntry);
            }

            return $photoEntry;
         }
         else
         {
            return false;
         }
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes a comment from a photo.
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    string|Zend_Gdata_Photos_CommentEntry   $id_comment     Comment identifier or object.
    * @param    string|Zend_Gdata_Photos_PhotoEntry     $id_photo       Photo identifier or object.
    * @param    string|Zend_Gdata_Photos_AlbumEntry     $id_album       Album identifier or object. Optional.
    * @return   boolean|void
    */
   function deleteComment($id_comment, $id_photo, $id_album = 'default')
   {

      if($this->_photos != null)
      {
         if($id_comment instanceof Zend_Gdata_Photos_CommentEntry)
         {
            return $this->_photos->deleteCommentEntry($id_comment, true);
         }
         else
         {
            if(strpos($id_comment, '/'))
            {
               return $this->_photos->delete($id_comment);

            }
            else
            {

               $id_comment_aux = $id_comment;

               if($id_photo instanceof Zend_Gdata_Photos_PhotoEntry)
               {
                  $aux_parts = explode('?', $id_photo->getLink('self')->href);
                  $uri = $aux_parts[0];
                  $uri .= '/commentid/' . $id_comment;
                  $this->_photos->delete($uri);
               }
               else
               {
                  if($id_album instanceof Zend_Gdata_Photos_AlbumEntry)
                  {
                     $id_album_aux = $id_album->id->text;
                  }
                  else
                  {
                     if(strpos($id_album, '/'))
                     {
                        $id_parts = explode('/', $id_album);
                        $id_album_aux = end($id_parts);

                     }
                     else
                     {
                        $id_album_aux = $id_album;
                     }
                  }
                  if(strpos($id_photo, '/'))
                  {
                     $id_parts = explode('/', $id_photo);
                     $id = end($id_parts);
                     $entry = new Zend_Gdata_Photos_PhotoQuery();
                     $entry->setPhotoId($id);
                     $entry->setAlbumId($id_album_aux);
                     $aux_entry = $this->_photos->getPhotoEntry($entry);
                     $aux_self = explode('?', $aux_entry->getLink('self')->href);
                     $uri = $aux_self[0];
                     $uri .= '/commentid/' . $id_comment_aux;

                     return $this->_photos->delete($uri);
                  }
                  else
                  {
                     $entry = new Zend_Gdata_Photos_PhotoQuery();
                     $entry->setPhotoId($id_photo);
                     $entry->setAlbumId($id_album_aux);

                     $aux_entry = $this->_photos->getPhotoEntry($entry);
                     $aux_self = explode('?', $aux_entry->getLink('self')->href);
                     $uri = $aux_self[0];
                     $uri .= '/commentid/' . $id_comment_aux;

                     return $this->_photos->delete($uri);
                  }
               }
            }
         }
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes a tag from a photo.
    * 
    * If {@link $_photos} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    string                                  $tag            Tag name.
    * @param    string|Zend_Gdata_Photos_PhotoEntry     $id_photo       Photo identifier or object.
    * @param    string|Zend_Gdata_Photos_AlbumEntry     $id_album       Album identifier or object. Optional.
    * @return   boolean|void
    */
   function deleteTagOfPhoto($tag, $id_photo, $id_album = 'default')
   {
      if($this->_photos != null)
      {

         if($id_photo instanceof Zend_Gdata_Photos_PhotoEntry)
         {
            $photo = $id_photo;
            $aux_self = explode('?', $photo->getLink('self')->href);
            $uri = $aux_self[0];
            $uri .= '/tag/' . $tag;

            return $this->_photos->delete($uri);
         }
         else
         {
            if($id_album instanceof Zend_Gdata_Photos_AlbumEntry)
            {
               $id_album_aux = $id_album->id->text;
            }
            else
            {
               if(strpos($id_album, '/'))
               {
                  $id_parts = explode('/', $id_album);
                  $id_album_aux = end($id_parts);

               }
               else
               {
                  $id_album_aux = $id_album;
               }
            }
            if(strpos($id_photo, '/'))
            {
               $id_parts = explode('/', $id_photo);
               $id = end($id_parts);
               $entry = new Zend_Gdata_Photos_PhotoQuery();
               $entry->setPhotoId($id);
               $entry->setAlbumId($id_album_aux);
               $aux_entry = $this->_photos->getPhotoEntry($entry);
               $aux_self = explode('?', $aux_entry->getLink('self')->href);
               $uri = $aux_self[0];
               $uri .= '/tag/' . $tag;
               return $this->_photos->delete($uri);

            }
            else
            {
               $entry = new Zend_Gdata_Photos_PhotoQuery();
               $entry->setPhotoId($id_photo);
               $entry->setAlbumId($id_album_aux);
               $aux_entry = $this->_photos->getPhotoEntry($entry);
               $aux_self = explode('?', $aux_entry->getLink('self')->href);
               $uri = $aux_self[0];
               $uri .= '/tag/' . $tag;
               return $this->_photos->delete($uri);
            }
         }

      }
      else
      {
         return false;
      }
   }

}
?>