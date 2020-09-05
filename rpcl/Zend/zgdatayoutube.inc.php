<?php

/**
 * Zend/zgdatayoutube.inc.php
 * 
 * Defines Zend Framework Youtube component.
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
use_unit("Zend/framework/library/Zend/Gdata/YouTube.php");

/**
 * Component to manage Youtube service.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.gdata.youtube.html Zend Framework Documentation
 */
class ZGDataYoutube extends Component
{
   // Subscription URL

   /**
    * URL for current user subscription.
    *
    * @var      string
    */
   protected $_subscription_url = "http://gdata.youtube.com/feeds/api/users/default/subscriptions";

   // Zend Framework Youtube

   /**
    * Zend Framework Youtube instance.
    *
    * @var      Zend_Gdata_YouTube
    */
   protected $_youtube = null;

   // Constructor

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);

   }

   // Developer Key

   /**
    * Developer key for Youtube API.
    *
    * @var      string
    */
   protected $_developerkey = '';

   /**
    * Getter method for {@link $_developerkey}.
    *
    * @return   string  {@link $_developerkey}
    */
   function getDeveloperKey()    {return $this->_developerkey;}

   /**
    * Setter method for {@link $_developerkey}.
    *
    * @param    string  $value
    */
   function setDeveloperKey($value)    {$this->_developerkey = $value;}

   /**
    * Getter for {@link $_developerkey}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDeveloperKey()    {return '';}

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

   // On Authentication

   /**
    * Event triggered for user authentication against Youtube service.
    * 
    * This event is triggered as soon as this component is {@link loaded() loaded}.
    *
    * This property should either contain the name of the function to be run when the event is
    * triggered (without brackets), or be set to null.
    *
    * If the name of a function is provided, such a function should expect the following key-value
    * pairs in the parameters array, passed to the function as its second parameter:
    * <ul>
    *   <li><b>service</b>: {@link Zend_Gdata_YouTube::AUTH_SERVICE_NAME}.</li>
    *   <li><b>url</b>: 'http://gdata.youtube.com'.</li>
    *   <li><b>appname</b>: {@link $_applicationname}.</li>
    * </ul>
    *
    * It is also expected to return a boolean value. If true is returned, component will initialize
    * {@link $_youtube} using provided {@link $_developerkey}. If false is returned, 
    * {@link $_youtube} will also be initialized, but without the {@link $_developerkey}, which
    * might restrict some functionality.
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

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      if($this->_onauthentication != null)
      {

         $aux = $this->callEvent('onauthentication', array('service'=>Zend_Gdata_YouTube::AUTH_SERVICE_NAME, 'url'=>'http://gdata.youtube.com','appname'=>$this->_applicationname));

         if($aux)
         {
            $this->_youtube = new Zend_Gdata_YouTube($aux, $this->_applicationname, null, $this->_developerkey);

         }
         else
         {
            $this->_youtube = new Zend_Gdata_YouTube(null, $this->_applicationname);

         }
      }
      else
      {
         $this->_youtube = new Zend_Gdata_YouTube(null, $this->_applicationname);

      }
      $this->_youtube->setMajorProtocolVersion(2);
   }

   /**
    * Retrieves videos.
    *
    * Only parameter is a key-value array with the following optional pairs defining the search
    * criteria:
    * <ul>
    *   <li><b>author</b>: Video uploader (string).</li>
    *   <li><b>format</b>: Video format (integer). Check {@link http://code.google.com/apis/youtube/2.0/reference.html#Query_parameter_definitions Google Documentation}
    *   for additional information.</li>
    *   <li><b>location</b>: Video location (string). Check {@link http://code.google.com/apis/youtube/2.0/reference.html#Query_parameter_definitions Google Documentation}
    *   for additional information.</li>
    *   <li><b>location_radius</b>: Valid radius around given location (string). Check {@link http://code.google.com/apis/youtube/2.0/reference.html#Query_parameter_definitions Google Documentation}
    *   for additional information.</li>
    *   <li><b>max_results</b>: Maximum amount of results to be retrieved (integer).</li>
    *   <li><b>order_by</b>: How results should be ordered (string). Possible values are:
    *   'relevance', 'published', 'viewCount', or 'rating'.</li>
    *   <li><b>safe_search</b>: Content restriction level (string). Possible values are: 'none',
    *   'moderate', or 'strict'.</li>
    *   <li><b>start_index</b>: Index of the first result to be retrieved (integer). In combination
    *   with <b>max_results</b>, it can be used to paginate retrieved results.</li>
    *   <li><b>time</b>: Time on which videos were uploaded (string). Possible values are: 'today',
    *   'this_week', 'this_month', or 'all_time'.</li>
    *   <li><b>query</b>: Text to search for (string).</li>
    *   <li><b>category</b>: Category and keywords to search for (string). It follows this syntax:
    *   'Category/keyword/keyword'.</li>
    * </ul>
    *
    * Check {@link http://code.google.com/apis/youtube/2.0/reference.html#Query_parameter_definitions Google Documentation}
    * for additional information.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}
    * for matching videos.
    *
    * @param    array   $params Parameters.
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveVideos($params)
   {
      if($this->_youtube != null)
      {
         $query = $this->_youtube->newVideoQuery();
         if(isset($params['author']))
         {
            $query->setAuthor($params['author']);
         }

         if(isset($params['format']))
         {
            $query->setFormat($params['format']);
         }

         if(isset($params['location']))
         {
            $query->setLocation($params['location']);
         }

         if(isset($params['location_radius']))
         {
            $query->setLocationRadius($params['location_radius']);
         }

         if(isset($params['max_results']))
         {
            $query->setMaxResults($params['max_results']);
         }

         if(isset($params['order_by']))
         {
            $query->setOrderBy($params['order_by']);
         }

         if(isset($params['safe_search']))
         {
            $query->setSafeSearch($params['safe_search']);
         }

         if(isset($params['start_index']))
         {
            $query->setStartIndex($params['start_index']);
         }

         if(isset($params['time']))
         {
            switch($params['time'])
            {
               case 'today':
                  $query->setTime('today');
                  break;
               case 'this_week':
                  $query->setTime('this_week');
                  break;
               case 'this_month':
                  $query->setTime('this_month');
                  break;
               case 'all_time':
                  $query->setTime('all_time');
                  break;
            }
         }

         if(isset($params['query']))
         {
            $query->setVideoQuery($params['query']);
         }

         if(isset($params['category']))
         {
            $query->setCategory($params['category']);
         }

         return $this->_youtube->getVideoFeed($query > getQueryUrl(2));
      }
      else
      {
         return false;
      }

   }

   /**
    * Retrieves a feed with top rated videos.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}.
    *
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveTopRatedVideos()
   {
      if($this->_youtube != null)
      {
         return $this->_youtube->getTopRatedVideoFeed();
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed of recently featured videos for mobile devices.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}.
    *
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveWatchOnMobileVideos()
   {
      if($this->_youtube != null)
      {
         return $this->_youtube->getWatchOnMobileVideoFeed();
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed of the top favorite videos.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}.
    *
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveTopFavoritesVideos()
   {
      if($this->_youtube != null)
      {
         $feed_favorites = 'http://gdata.youtube.com/feeds/api/standardfeeds/top_favorites';
         return $this->_youtube->getFeed($feed_favorites, 'Zend_Gdata_YouTube_VideoFeed');
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed of most viewed videos.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}.
    *
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveMostViewedVideos()
   {
      if($this->_youtube != null)
      {
         return $this->_youtube->getMostViewedVideoFeed();
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed of most popular videos.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}.
    *
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveMostPopularVideos()
   {
      if($this->_youtube != null)
      {
         $feed_favorites = 'http://gdata.youtube.com/feeds/api/standardfeeds/most_popular';
         return $this->_youtube->getFeed($feed_favorites, 'Zend_Gdata_YouTube_VideoFeed');
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed of most recent videos.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}.
    *
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveMostRecentVideos()
   {
      if($this->_youtube != null)
      {
         $feed_favorites = 'http://gdata.youtube.com/feeds/api/standardfeeds/most_recent';
         return $this->_youtube->getFeed($feed_favorites, 'Zend_Gdata_YouTube_VideoFeed');
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed of most responded videos.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}.
    *
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveMostRespondedVideos()
   {
      if($this->_youtube != null)
      {
         $feed_favorites = 'http://gdata.youtube.com/feeds/api/standardfeeds/most_responded';
         return $this->_youtube->getFeed($feed_favorites, 'Zend_Gdata_YouTube_VideoFeed');
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed of recently featured videos.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}.
    *
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveRecentlyFeaturedVideos()
   {
      if($this->_youtube != null)
      {
         return $this->_youtube->getRecentlyFeaturedVideoFeed();
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed with videos uploaded by given user.
    *
    * If no username is provided, current user will be used.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}.
    *
    * @param    string  $username       Username.
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveUploadVideosByUser($username = 'default')
   {

      if($this->_youtube != null)
      {
         return $this->_youtube->getUserUploads($username);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed of user favorite videos.
    *
    * If no username is provided, current user will be used.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}.
    *
    * @param    string  $username       Username.
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveFavoritesVideosByUser($username = 'default')
   {
      if($this->_youtube != null)
      {
         return $this->_youtube->getUserFavorites($username);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed of responses to a video.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}.
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_video       Video identifier or object.
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveResponsesToVideo($id_video)
   {
      if($this->_youtube != null)
      {
         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $id = $id_video->getVideoId();
         }
         else
         {
            if(strpos($id_video, '/'))
            {
               $id = end(explode('/', $id_video));
            }
            else
            {
               $id = $id_video;
            }
         }
         return $this->_youtube->getVideoResponseFeed($id);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed with comments on a video.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoFeed}.
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_video       Video identifier or object.
    * @return   boolean|Zend_Gdata_YouTube_VideoFeed
    */
   function retrieveVideosComments($id_video)
   {
      if($this->_youtube != null)
      {
         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $id = $id_video->getVideoId();
         }
         else
         {
            if(strpos($id_video, '/'))
            {
               $id = end(explode('/', $id_video));
            }
            else
            {
               $id = $id_video;
            }
         }
         return $this->_youtube->getVideoCommentFeed($id);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed of user playlists.
    *
    * If no username is provided, current user will be used.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_PlaylistListFeed}.
    *
    * @param    string  $username       Username.
    * @return   boolean|Zend_Gdata_YouTube_PlaylistListFeed
    */
   function retrievePlaylistsOfUser($username = 'default')
   {
      if($this->_youtube != null)
      {
         return $this->_youtube->getPlaylistListFeed($username);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed of videos in a particular playlist.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_PlaylistListEntry}.
    *
    * @param    string|Zend_Gdata_YouTube_PlaylistListEntry     $id_playlist    Playlist identifier or object.
    * @return   boolean|Zend_Gdata_YouTube_PlaylistVideoFeed
    */
   function retrieveVideosFromPlaylist($id_playlist)
   {
      if($this->_youtube != null)
      {
         if($id_playlist instanceof Zend_Gdata_YouTube_PlaylistListEntry)
         {
            $playlist = $id_playlist;
         }
         else
         {
            $playlist = $this->retrievePlaylist($id_playlist);
         }
         return $this->_youtube->getPlaylistVideoFeed($playlist > getPlaylistVideoFeedUrl());
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a playlist.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_PlaylistListEntry}.
    *
    * @param    string  $id_playlist    Playlist identifier.
    * @return   boolean|Zend_Gdata_YouTube_PlaylistListEntry
    */
   function retrievePlaylist($id_playlist)
   {
      if($this->_youtube != null)
      {
         $urlPlaylist = 'http://gdata.youtube.com/feeds/api/users/default/playlists/' . $id_playlist;
         $playlist = $this->_youtube->getEntry($urlPlaylist, 'Zend_Gdata_YouTube_PlaylistListEntry');

         return $playlist;
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves a feed of user subscriptions.
    *
    * If no username is provided, current user will be used.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_SubscriptionListFeed}.
    *
    * @param    string  $username       Username.
    * @return   boolean|Zend_Gdata_YouTube_SubscriptionListFeed
    */
   function retrieveSubscriptions($username = 'default')
   {
      if($this->_youtube != null)
      {
         return $this->_youtube->getSubscriptionFeed($username);
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves user’s profile.
    *
    * If no username is provided, current user will be used.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_UserProfileEntry}.
    *
    * @param    string  $username       Username.
    * @return   boolean|Zend_Gdata_YouTube_UserProfileEntry
    */
   function retrieveUserProfile($username = 'default')
   {
      if($this->_youtube != null)
      {
         return $this->_youtube->getUserProfile($username);
      }
      else
      {
         return false;
      }
   }

   /**
    * Check video upload status.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Youtube_Extension_State}.
    *
    * @param    Zend_Gdata_YouTube_VideoEntry   $videoEntry     Video object.
    * @return   boolean|Zend_Gdata_Youtube_Extension_State
    */
   function checkUploadStatus($videoEntry)
   {
      try
      {
         $control = $videoEntry->getControl();
      }
      catch(Zend_Gdata_App_Exception$e)
      {
         echo $e->getMessage();
         return false;
      }

      if($control instanceof Zend_Gdata_App_Extension_Control)
      {
         if($control->getDraft() != null && $control->getDraft()->getText() == "yes")
         {
            $state = $videoEntry->getVideoState();

            if($state instanceof Zend_Gdata_Youtube_Extension_State)
            {
               return $state;
            }
            else
            {
               return false;
            }
         }
      }
   }

   /**
    * Retrieves a specific video entry.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoEntry}.
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_video       Video identifier or object.
    * @return   boolean|Zend_Gdata_YouTube_VideoEntry
    */
   function retrieveVideo($id_video)
   {
      if($this->_youtube != null)
      {
         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $id = $id_video->getVideoId();
         }
         else
         {
            $id = $id_video;
         }
         try
         {
            $video = $this->_youtube->getFullVideoEntry($id);
         }
         catch(Zend_Gdata_App_HttpException$e)
         {
            $video = $this->_youtube->getVideoEntry($id);
         }
         return $video;
      }
      else
      {
         return false;
      }
   }

   /**
    * Modifies video information.
    *
    * Second parameter is a key-value array with the following optional pairs:
    * <ul>
    *   <li><b>title</b>: Video title (string).</li>
    *   <li><b>description</b>: Video description (string).</li>
    *   <li><b>category</b>: Video category (string). Check {@link http://code.google.com/apis/youtube/2.0/reference.html#YouTube_Category_List Google Documentation}
    *   for a list of supported categories.</li>
    *   <li><b>tags</b>: Comma-separated list of video tags (string).</li>
    *   <li><b>date_recorded</b>: Date when video was recorded (string). Use the following date
    *   format: YYYYMMDD. For example, if a video was recorded in May 18th, 1991, value would be
    *   '19910518'.</li>
    *   <li><b>visibility</b>: Video visibility (string). Possible values are 'public' or 'private'.</li>
    *   <li><b>position</b>: Location where video was recorded (string). Check {@link http://code.google.com/apis/youtube/2.0/reference.html#Query_parameter_definitions Google Documentation}
    *   for additional information.</li>
    * </ul>
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoEntry}.
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_video       Video identifier or object.
    * @param    array   $params Parameters.
    * @return   boolean|Zend_Gdata_YouTube_VideoEntry
    */
   function modifyVideo($id_video, $params)
   {
      if($this->_youtube != null)
      {
         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $videoEntry = $id_video;
         }
         else
         {
            $videoEntry = $this->retrieveVideo($id_video);
         }

         if(isset($params['title']))
         {
            $videoEntry->setVideoTitle($params['title']);
         }

         if(isset($params['description']))
         {
            $videoEntry->setVideoDescription($params['description']);
         }

         if(isset($params['category']))
         {
            $videoEntry->setVideoCategory($params['category']);
         }

         if(isset($params['tags']))
         {
            $videoEntry->setVideoTags($params['tags']);
         }

         if(isset($params['date_recorded']))
         {
            $videoEntry->setVideoRecorded($params['date_recorded']);
         }

         if(isset($params['visibility']))
         {
            if($params['visibility'] == 'public')
            {
               $videoEntry->setVideoPublic();
            }
            else
            {
               $videoEntry->setVideoPrivate();
            }
         }

         if(isset($params['position']))
         {
            $this->_youtube->registerPackage('Zend_Gdata_Geo');
            $this->_youtube->registerPackage('Zend_Gdata_Geo_Extension');

            $where = $this->_youtube->newGeoRssWhere();
            $position = $this->_youtube->newGmlPos(str_replace(',', ' ', $params['position']));
            $where->point = $this->_youtube->newGmlPoint($position);
            $videoEntry->setWhere($where);
         }

         return $this->_youtube->updateEntry($videoEntry, $videoEntry->getLink('self')->href);
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes a video.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_video       Video identifier or object.
    * @return   boolean|void
    */
   function deleteVideo($id_video)
   {
      if($this->_youtube != null)
      {
         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $video = $id_video;
         }
         else
         {
            $video = $this->retrieveVideo($id_video);
         }
         return $video->delete();
      }
      else
      {
         return false;
      }
   }

   /**
    * Rates a video.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_VideoEntry}.
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_video       Video identifier or object.
    * @param    integer                                 $rating         Rating, between 1 and 5.
    * @return   boolean|Zend_Gdata_YouTube_VideoEntry
    */
   function addRating($id_video, $rating)
   {
      if($this->_youtube != null)
      {
         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $entry = $id_video;
         }
         else
         {
            $entry = $this->retrieveVideo($id_video);
         }

         $entry->setVideoRating($rating);
         $ratingUrl = $entry->getVideoRatingsLink()->getHref();

         try
         {
            $rated = $this->_youtube->insertEntry($entry, $ratingUrl, 'Zend_Gdata_YouTube_VideoEntry');
            return $rated;
         }catch(Zend_Gdata_App_HttpException$httpException)
         {
            echo $httpException->getRawResponseBody();
            return false;
         }
      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves the comments on a video.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_CommentFeed}.
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry|Zend_Gdata_YouTube_PlaylistVideoEntry      $video  Video identifier or object.
    * @return   boolean|Zend_Gdata_YouTube_CommentFeed
    */
   function retrieveComment($video)
   {
      if($this->_youtube != null)
      {
         $this->_youtube->setMajorProtocolVersion(2);

         if($video instanceof Zend_Gdata_YouTube_PlaylistVideoEntry)
         {
            $aux = $video->getLink('related')->getHref();
            $id_video = end(explode('/', $aux));
         }
         else
         {
            if($video instanceof Zend_Gdata_YouTube_VideoEntry)
            {
               $id_video = $video->getVideoId();
            }
            else
            {
               if(strpos($video, '/'))
               {
                  $id_video = end(explode('/', $video));
               }
               else
               {
                  $id_video = $video;
               }
            }
         }
         $commentFeed = $this->_youtube->getVideoCommentFeed($id_video);
         return $commentFeed;
      }
      else
      {
         return false;
      }
   }

   /**
    * Adds a new comment on a video.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry} for new comment.
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry|Zend_Gdata_YouTube_PlaylistVideoEntry      $id_video       Video identifier or object.
    * @param    string                                                                          $comment        Comment.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function addComment($id_video, $comment)
   {
      if($this->_youtube != null)
      {
         $this->_youtube->setMajorProtocolVersion(2);

         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $videoEntry = $id_video;
         }
         else
         {
            if($id_video instanceof Zend_Gdata_YouTube_PlaylistVideoEntry)
            {
               $aux = $id_video->getLink('related')->getHref();
               $id = end(explode('/', $aux));

            }
            else
            {
               if(strpos($id_video, '/'))
               {
                  $id = end(explode('/', $id_video));
               }
               else
               {
                  $id = $id_video;
               }
            }
            $videoEntry = $this->retrieveVideo($id);
         }

         $newComment = $this->_youtube->newCommentEntry();
         $newComment->content = $this->_youtube->newContent()->setText($comment);

         $commentFeed = $videoEntry->getVideoCommentFeedUrl();
         $updateEntry = $this->_youtube->insertEntry($newComment, $commentFeed);
         return $updateEntry;
      }
      else
      {
         return false;
      }
   }

   /**
    * Adds a video in response to another video.
    *
    * First parameter is for the video that will be responded. Second parameter is for the response
    * video.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry}.
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_video               Video identifier or object.
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_video_response      Video identifier or object.                                                 $comment        Comment.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function addResponseVideo($id_video, $id_video_response)
   {
      if($this->_youtube != null)
      {
         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $entry = $id_video;
         }
         else
         {
            $entry = $this->retrieveVideo($id_video);
         }

         if($id_video_response instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $entryResponse = $id_video_response;
         }
         else
         {
            $entryResponse = $this->retrieveVideo($id_video_response);
         }
         $responseUrl = $entry->getVideoResponsesLink()->href;

         return $this->_youtube->insertEntry($entryResponse, $responseUrl);
      }
      else
      {
         return false;
      }
   }

   /**
    * Unmarks a video as a response to another video.
    *
    * First parameter is for the video that will be responded. Second parameter is for the response
    * video.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_video               Video identifier or object.
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_response_video      Video identifier or object.  
    * @return   boolean|void
    */
   function deleteResponseVideo($id_video, $id_response_video)
   {
      if($this->_youtube != null)
      {
         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $entry = $id_video;
         }
         else
         {
            $entry = $this->retrieveVideo($id_video);
         }

         if($id_response_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {

            $idresponse = $id_response_video->getVideoId();
         }
         else
         {
            $idresponse = $id_response_video;
         }

         $responseUrl = $entry->getVideoResponsesLink()->getHref();
         return $this->_youtube->delete($responseUrl . '/' . $idresponse);

      }
      else
      {
         return false;
      }
   }

   /**
    * Flags a video.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry}.
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_video       Video identifier or object.
    * @param    string                                  $text           Flag text.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function flagVideo($id_video, $text)
   {
      if($this->_youtube != null)
      {
         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $entry = $id_video;
         }
         else
         {
            $entry = $this->retrieveVideo($id_video);
         }

         $newComplaint = $this->_youtube > newEntry();
         $newComplaint->content = $this->_youtube->newContent()->setText($text);
         $complaintUrl = $entry->getVideoComplaintsLink()->href;

         try
         {
            return $this->_youtube->insertEntry($newComplaint, $complaintUrl);
         }
         catch(Zend_App_Exception$e)
         {
            echo $e->getMessage();
            return false;
         }
      }
      else
      {
         return false;
      }
   }

   /**
    * Adds a video to user’s favorites.
    *
    * If no username is provided, current user will be used.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry}.
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_video       Video identifier or object.
    * @param    string                                  $username       Username.
    * @return boolean|Zend_Gdata_App_Entry
    */
   function addFavouriteVideo($id_video, $username = 'default')
   {
      if($this->_youtube != null)
      {
         $favoritesFeed = $this->_youtube->getUserFavorites($username);

         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $entry = $id_video;
         }
         else
         {
            $entry = $this->retrieveVideo($id_video);
         }
         return $this->_youtube->insertEntry($entry, $favoritesFeed->getSelfLink()->href);
      }
      else
      {
         return false;
      }
   }

   /**
    * Unmarks a video as favorite.
    *
    * Given video must be obtained from a call to {@link retrieveFavoritesVideosByUser()}, which
    * will return an instance of {@link Zend_Gdata_YouTube_VideoFeed} from which you can get an
    * instance of {@link Zend_Gdata_YouTube_VideoEntry}.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    Zend_Gdata_YouTube_VideoEntry   $id_video       Video object.
    * @return   boolean|void
    */
   function deleteFavoriteVideo($id_video)
   {
      if($this->_youtube != null)
      {
         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $entry = $id_video;
            return $entry->delete();
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
    * Creates a new playlist.
    *
    * If no username is provided, current user will be used.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry}.
    *
    * @param    string  $title          Playlist title.
    * @param    string  $description    Playlist description.
    * @param    string  $username       Username.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function createPlaylist($title, $description, $username = 'default')
   {
      if($this->_youtube != null)
      {
         $newPlaylist = $this->_youtube->newPlaylistListEntry();

         $newPlaylist->description = $this->_youtube->newDescription()->setText($description);
         $newPlaylist->title = $this->_youtube->newTitle()->setText($title);

         $postLocation = "http://gdata.youtube.com/feeds/api/users/" . $username . "/playlists";

         try
         {
            return $this->_youtube->insertEntry($newPlaylist, $postLocation);
         }
         catch(Zend_Gdata_App_Exception$e)
         {
            echo $e->getMessage();
         }
      }
      else
      {
         return false;
      }
   }

   /**
    * Modifies playlist information.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_PlaylistListEntry}.
    *
    * @param    string|Zend_Gdata_YouTube_PlaylistListEntry     $id_playlist    Playlist identifier or object.
    * @param    string                                          $title          Playlist title.
    * @param    string                                          $description    Playlist description.
    * @return   boolean|Zend_Gdata_YouTube_PlaylistListEntry
    */
   function modifyPlaylist($id_playlist, $title = '', $description = '')
   {
      if($this->_youtube != null)
      {
         if($id_playlist instanceof Zend_Gdata_YouTube_PlaylistListEntry)
         {
            $playlist = $id_playlist;
         }
         else
         {
            $playlist = $this->retrievePlaylist($id_playlist);
         }

         if($title != '')
            $playlist->title->setText($title);
         if($description != '')
            $playlist->description->setText($description);

         $playlist->save();
         return $playlist;
      }
      else
      {
         return false;
      }
   }

   /**
    * Adds a video to a playlist.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry}.
    *
    * @param    string|Zend_Gdata_YouTube_PlaylistListEntry     $id_playlist    Playlist identifier or object.
    * @param    string|Zend_Gdata_YouTube_VideoEntry            $id_video       Video identifier or object.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function addVideoToPlaylist($id_playlist, $id_video)
   {
      if($this->_youtube != null)
      {
         if($id_playlist instanceof Zend_Gdata_YouTube_PlaylistListEntry)
         {
            $playlist = $id_playlist;
         }
         else
         {
            $playlist = $this->retrievePlaylist($id_playlist);
         }

         if($id_video instanceof Zend_Gdata_YouTube_VideoEntry)
         {
            $video = $id_video;
         }
         else
         {
            $video = $this->retrieveVideo($id_video);
         }

         $postUrl = $playlist->getPlaylistVideoFeedUrl();
         $newPlaylistEntry = $this->_youtube->newPlaylistListEntry($video->getDOM());

         try
         {
            return $this->_youtube->insertEntry($newPlaylistEntry, $postUrl);
         }
         catch(Zend_App_Exception$e)
         {
            echo $e->getMessage();
         }

      }
      else
      {
         return false;
      }
   }

   /**
    * Modifies video position in a playlist.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry}.
    *
    * @param    Zend_Gdata_YouTube_PlaylistVideoEntry   $id_playlistvideo       Object for video in playlist.
    * @param    integer                                 $position               Position.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function modifyVideoToPlaylist($id_playlistvideo, $position)
   {
      if($this->_youtube != null)
      {

         $video = $id_playlistvideo;

         if(is_int($position))
            $video->setPosition($this->_youtube->newPosition($position));

         try
         {

            return $this->_youtube->updateEntry($video, $video->getLink('edit')->href);
         }
         catch(Zend_App_Exception$e)
         {
            echo $e->getMessage();
            return false;
         }

      }
      else
      {
         return false;
      }
   }

   /**
    * Removes a video from a playlist.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    Zend_Gdata_YouTube_PlaylistVideoEntry   $id_playlistvideo       Object for video in playlist.
    * @return   boolean|void
    */
   function removeVideoFromPlaylist($id_playlistvideo)
   {
      if($this->_youtube != null)
      {
         if($id_playlistvideo instanceof Zend_Gdata_YouTube_PlaylistVideoEntry)
         {
            $video = $id_playlistvideo;
         }
         return $video->delete();
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes a playlist.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    string|Zend_Gdata_YouTube_PlaylistListEntry     $id_playlist    Playlist identifier or object.
    * @return   boolean|void
    */
   function deletePlaylist($id_playlist)
   {
      if($this->_youtube != null)
      {
         if($id_playlist instanceof Zend_Gdata_YouTube_PlaylistListEntry)
         {
            $playlist = $id_playlist;
         }
         else
         {
            $playlist = $this->retrievePlaylist($id_playlist);
         }
         return $playlist->delete();
      }
      else
      {
         return false;
      }

   }

   /**
    * Subscribes current user to a channel.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry}.
    *
    * @param    string  $name_channel   Channel name.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function addSubscriptionChannel($name_channel)
   {
      if($this->_youtube != null)
      {

         $newSubscription = $this->_youtube->newSubscriptionEntry();

         $newSubscription->setUsername(new Zend_Gdata_Youtube_Extension_Username($name_channel));

         return $this->_youtube->insertEntry($newSubscription, $this->_subscription_url);
      }
      else
      {
         return false;
      }

   }

   /**
    * Subscribes current user to a channel’s favorite videos.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry}.
    *
    * @param    string  $name_channel   Channel name.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function addSubcriptionFavoritesVideos($name_channel)
   {
      if($this->_youtube != null)
      {
         $newSubscription = $this->_youtube->newSubscriptionEntry();
         $newSubscription->setUsername(new Zend_Gdata_Youtube_Extension_Username($name_channel));
         $newSubscription->category = array($this->_youtube->newCategory('favorites', 'http://gdata.youtube.com/schemas/2007/subscriptiontypes.cat'));
         return $this->_youtube->insertEntry($newSubscription, $this->_subscription_url);
      }
      else
      {
         return false;
      }
   }

   /**
    * Subscribes current user to a playlist on a channel.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry}.
    *
    * @param    string  $name_channel   Channel name.
    * @param    string  $id_playlist    Playlist identifier.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function addSubscriptionPlaylist($name_channel, $id_playlist)
   {
      if($this->_youtube != null)
      {
         $newSubscription = $this->_youtube > newSubscriptionEntry();
         $newSubscription->setUsername(new Zend_Gdata_Youtube_Extension_Username($name_channel));
         $newSubscription->category = array($this->_youtube->newCategory('playlist', 'http://gdata.youtube.com/schemas/2007/subscriptiontypes.cat'));
         $newSubscription->setPlaylistId(new Zend_Gdata_YouTube_Extension_PlaylistId($id_playlist));
         return $this->_youtube->insertEntry($newSubscription, $this->_subscription_url);
      }
      else
      {
         return false;
      }
   }

   /**
    * Subscribes current user to the results of a query.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry}.
    *
    * @param    string  $query  Text to search for.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function addSubscriptionQuery($query)
   {
      if($this->_youtube != null)
      {
         $newSubscription = $this->_youtube->newSubscriptionEntry();
         $newSubscription->setQueryString(new Zend_Gdata_YouTube_Extension_QueryString($query));
         return $this->_youtube->insertEntry($newSubscription, $this->_subscription_url);
      }
      else
      {
         return false;
      }
   }

   /**
    * Removes subscription.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    string|Zend_Gdata_YouTube_SubscriptionEntry     $subscription   Subscription identifier.
    * @return   boolean|void
    */
   function deleteSubscription($subscription)
   {
      if($this->_youtube != null)
      {
         if($subscription instanceof Zend_Gdata_YouTube_SubscriptionEntry)
         {
            return $subscription->delete();
         }
         else
         {
            $subs = $this->_youtube->getEntry($subscription, 'Zend_Gdata_YouTube_SubscriptionEntry');
            return $subs->delete();
         }
      }
      else
      {
         return false;
      }

   }

   /**
    * Retrieves user contacts.
    *
    * If no username is provided, current user will be used.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_ContactFeed}.
    *
    * @param    string  $username       Username.
    * @return   boolean|Zend_Gdata_YouTube_ContactFeed
    */
   function retrieveContacts($username = 'default')
   {
      if($this->_youtube != null)
      {
         $contacts = $this->_youtube->getContactFeed($username);
         return $contacts;
      }
      else
      {
         return false;
      }
   }

   /**
    * Adds a new contact for current user.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_App_Entry}.
    *
    * @param    string          $username       New contact username.
    * @param    array|string    $category       New contact category or categories. Check {@link http://code.google.com/apis/youtube/2.0/reference.html#YouTube_Category_List Google Documentation}
    *                                           for a list of supported categories.
    * @return   boolean|Zend_Gdata_App_Entry
    */
   function addContact($username, $category)
   {
      if($this->_youtube != null)
      {
         $newContact = new Zend_Gdata_YouTube_ContactEntry();

         $newContact->username = $this->_youtube->newUsername($username);

         if(is_array($category))
         {
            $data = array();
            foreach($category as $cat)
            {
               $data[] = $this->_youtube->newCategory($cat, 'http://gdata.youtube.com/schemas/2007/contact.cat');
            }
         }
         else
         {
            $data = array();

            $data[] = $this->_youtube->newCategory($category, 'http://gdata.youtube.com/schemas/2007/contact.cat');
         }
         $newContact->category = $data;

         return $this->_youtube->insertEntry($newContact, 'http://gdata.youtube.com/feeds/api/users/default/contacts');
      }
      else
      {
         return false;
      }
   }

   /**
    * Deletes a contact from current user.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    string  $id_contact     Contact identifier.
    * @return   boolean|void
    */
   function deleteContact($id_contact)
   {
      if($this->_youtube != null)
      {
         if($id_contact instanceof Zend_Gdata_YouTube_ContactEntry)
         {
            $contact = $id_contact;
         }
         else
         {
            $contact = $this->_youtube->getEntry($id_contact, 'Zend_Gdata_YouTube_ContactEntry');

         }

         return $contact->delete();
      }
      else
      {
         return false;
      }
   }

   /**
    * Modified the data (category and status) of a contact of current user.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_ContactEntry}.
    *
    * @param    string|Zend_Gdata_YouTube_ContactEntry  $id_contact     Contact identifier or object.
    * @param    string|array                            $category       Contact category or
    *                                                                   categories.  Check {@link http://code.google.com/apis/youtube/2.0/reference.html#YouTube_Category_List Google Documentation}
    *                                                                   for a list of supported categories.
    * @param    string                                  $status         Contact status, either 'rejected' or 'accepted'.
    * @return   boolean|Zend_Gdata_YouTube_ContactEntry
    */
   function updateContact($id_contact, $category, $status)
   {

      if($this->_youtube != null)
      {
         if($id_contact instanceof Zend_Gdata_YouTube_ContactEntry)
         {
            $contact = $id_contact;
         }
         else
         {
            $contact = $this->_youtube->getEntry($id_contact, 'Zend_Gdata_YouTube_ContactEntry');
         }

         if(is_array($category))
         {
            $data = array();
            foreach($category as $cat)
            {
               $data[] = $this->_youtube->newCategory($cat, 'http://gdata.youtube.com/schemas/2007/contact.cat');
            }
         }
         else
         {
            $data = array();
            $data[] = $this->_youtube->newCategory($category, 'http://gdata.youtube.com/schemas/2007/contact.cat');
         }
         $contact->category = $data;

         if($status == 'accepted' || $status == 'rejected')
         {
            $contact->setStatus($this->_youtube->newStatus($status));
         }

         $contact->save();
         return $contact;

      }
      else
      {
         return false;
      }
   }

   /**
    * Retrieves the list of inbox messages for current user.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_InboxFeed}.
    *
    * @return   boolean|Zend_Gdata_YouTube_InboxFeed
    */
   function retrieveMessages()
   {
      if($this->_youtube != null)
      {
         return $this->_youtube->getInboxFeedForCurrentUser();
      }
      else
      {
         return false;
      }

   }

   /**
    * Send a message associated to a video to a user (from current user).
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    string|Zend_Gdata_YouTube_VideoEntry    $id_video       Video identifier or object.
    * @param    string                                  $text           Message.
    * @param    string                                  $user           Recipient username.
    * @return   boolean|void
    */
   function sendMessage($id_video, $text, $user)
   {
      if($this->_youtube != null)
      {
         try
         {
            $sentMessage = $this->_youtube->sendVideoMessage($text, null, $id_video, $user);
         }
         catch(Zend_Gdata_App_HttpException$e)
         {
            echo $e->getMessage();
            return false;
         }
      }
      else
      {
         return false;
      }

   }

   /**
    * Deletes a message from current user’s inbox.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false. If
    * it is set, it will return nothing (void).
    *
    * @param    string|Zend_Gdata_YouTube_MediaEntry    $id_message     Message identifier or object.
    * @return   boolean|void
    */
   function deleteMessage($id_message)
   {
      if($this->_youtube != null)
      {
         if($id_message instanceof Zend_Gdata_YouTube_MediaEntry)
         {
            $message = $id_message;
         }
         else
         {
            $message = $this->_youtube->getEntry($id_message);
         }
         return $message->delete();
      }
      else
      {
         return false;
      }

   }

   /**
    * Retrieves users activity feed.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_ActivityFeed}.
    *
    * @param    array|string    $users  Username or usernames.
    *
    * @return   boolean|Zend_Gdata_YouTube_ActivityFeed
    */
   function retrieveUserActivity($users)
   {
      if($this->_youtube != null)
      {
         if(is_array($users))
         {
            $users_data = implode(',', $users);
         }
         else
         {
            $users_data = $users;
         }
         return $this->_youtube->getActivityForUser($users_data);
      }
      else
      {
         return false;
      }

   }
   /**
    * Retrieves friends activity for current user.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_YouTube_ActivityFeed}.
    *
    * @return   boolean|Zend_Gdata_YouTube_ActivityFeed
    *
    */
   function retrieveFriendActivity()
   {
      if($this->_youtube != null)
      {
         return $this->_youtube->getFriendActivityForCurrentUser();
      }
      else
      {
         return false;
      }

   }

   /**
    * Uploads a video.
    *
    * Only parameter is a key-value array with the following optional pairs defining the search
    * criteria:
    * <ul>
    *   <li><b>filepath</b>: File path (string).</li>
    *   <li><b>filetype</b>: File MIME type (string).</li>
    *   <li><b>title</b>: Video title (string).</li>
    *   <li><b>description</b>: Video description (string).</li>
    *   <li><b>category</b>: Video category (string). Check {@link http://code.google.com/apis/youtube/2.0/reference.html#YouTube_Category_List Google Documentation}
    *   for a list of supported categories.</li>
    *   <li><b>tags</b>: Comma-separated list of video tags (string).</li>
    *   <li><b>date_recorded</b>: Date when video was recorded (string). Use the following date
    *   format: YYYYMMDD. For example, if a video was recorded in May 18th, 1991, value would be
    *   '19910518'.</li>
    *   <li><b>visibility</b>: Video visibility (string). Possible values are 'public' or 'private'.</li>
    *   <li><b>position</b>: Location where video was recorded (string). Check {@link http://code.google.com/apis/youtube/2.0/reference.html#Query_parameter_definitions Google Documentation}
    *   for additional information.</li>
    * </ul>
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an instance of {@link Zend_Gdata_Youtube_Extension_State}
    * for your uploaded video.
    *
    * @see uploadBrowserVideo()
    *
    * @param    array   $params Parameters.
    * @return   boolean|Zend_Gdata_YouTube_VideoEntry
    */
   function uploadVideo($params)
   {

      if($this->_youtube != null)
      {
         $videoEntry = new Zend_Gdata_YouTube_VideoEntry();

         //Specifies path and name of video
         if(isset($params['filepath']) && isset($params['filetype']))
         {
            $filesource = $this->_youtube->newMediaFileSource($params['filepath']);
            $filesource->setContentType($params['filetype']);
            $filesource->setSlug($params['filepath']);

            $videoEntry->setMediaSource($filesource);

            if(isset($params['title']))
            {
               $videoEntry->setVideoTitle($params['title']);
            }

            if(isset($params['description']))
            {
               $videoEntry->setVideoDescription($params['description']);
            }

            if(isset($params['category']))
            {
               $videoEntry->setVideoCategory($params['category']);
            }

            if(isset($params['tags']))
            {
               $videoEntry->setVideoTags($params['tags']);
            }

            if(isset($params['date_recorded']))
            {
               $videoEntry->setVideoRecorded($params['date_recorded']);
            }

            if(isset($params['visibility']))
            {
               if($params['visibility'] == 'public')
               {
                  $videoEntry->setVideoPublic();
               }
               else
               {
                  $videoEntry->setVideoPrivate();
               }
            }

            if(isset($params['position']))
            {
               $this->_youtube->registerPackage('Zend_Gdata_Geo');
               $this->_youtube->registerPackage('Zend_Gdata_Geo_Extension');

               $where = $this->_youtube->newGeoRssWhere();
               $position = $this->_youtube->newGmlPos($position);
               $where->point = $this->newGmlPoint($position);
               $videoEntry->setWhere($where);
            }

            $uploadUrl = "http://uploads.gdata.youtube.com/feeds/users/default/uploads";
            try
            {
               $newEntry = $this->_youtube->insertEntry($videoEntry, $uploadUrl, 'Zend_Gdata_YouTube_VideoEntry');
               return $newEntry;
            }catch(Zend_Gdata_App_HttpException$httpException)
            {
               echo $httpException->getRawResponseBody();
               return false;
            }catch(Zend_Gdata_App_Exception$e)
            {
               echo $e->getMessage();
               return false;
            }
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
    * Browser-based upload.
    *
    * Uploads a video directly from client’s web browser.
    * 
    * If {@link $_youtube} is not set (is null), this method will return a boolean value, false.
    *
    * If everything works, you will get an array with two key-value pairs:
    * <ul>
    *   <li><b>token</b>: Token (string).</li>
    *   <li><b>url</b>: URL (string).</li>
    * </ul>
    *
    * @see uploadVideo()
    *
    * @param    string  $title          Video title.
    * @param    string  $description    Video description.
    * @param    string  $category       Video category.
    * @param    string  $keywords       Comma-separated list of video keywords.
    * @param    string  $next_url       URL to redirect user to once video is uploaded.
    * @return   array
    */
   function uploadBrowserVideo($title, $description, $category, $keywords, $next_url)
   {
      if($this->_youtube != null)
      {
         $videoEntry = new Zend_Gdata_YouTube_VideoEntry();
         $videoEntry->setVideoTitle($title);

         $videoEntry->setVideoDescription($description);

         $videoEntry->setVideoCategory($category);

         $videoEntry->setVideoTags($keywords);

         $token = $this->_youtube->getFormUploadToken($videoEntry);
         $token['url'] .= '?nexturl=' . $next_url;

         return $token;
      }
      else
      {
         return false;
      }
   }

}

?>