<?php

/**
 * facebook/socialplugins.inc.php
 * 
 * Defines Facebook Social Plugins components.
 *
 * This file is part of the RPCL project.
 *
 * Copyright (c) 2011 Embarcadero Technologies, Inc.
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
 * @package     Facebook
 * @copyright   2011 Embarcadero Technologies, Inc.
 * @license     http://www.gnu.org/licenses/lgpl-2.1.txt LGPL
 * 
 */

/**
 * Include RPCL common file and necessary units.
 */
require_once("rpcl/rpcl.inc.php");
use_unit("controls.inc.php");

// Color Schemes

/**
 * Light color scheme.
 *
 * @const       csLight
 */
define('csLight','csLigth');

/**
 * Dark color scheme.
 *
 * @const       csDark
 */
define('csDark','csDark');

// Fonts

/**
 * Arial.
 *
 * @const       ftArial
 */
define('ftArial','ftArial');

/**
 * Lucida Grande.
 *
 * @const       ftLucidaGrande
 */
define('ftLucidaGrande','ftLucidaGrande');

/**
 * Segoe UI.
 *
 * @const       ftSegoeUi
 */
define('ftSegoeUi','ftSegoeUi');

/**
 * Tahoma.
 *
 * @const       ftTahoma
 */
define('ftTahoma','ftTahoma');

/**
 * Trebuchet MS.
 *
 * @const       ftTrebuchetMs
 */
define('ftTrebuchetMs','ftTrebuchetMs');

/**
 * Verdana.
 *
 * @const       ftVerdana
 */
define('ftVerdana','ftVerdana');

// Layout

/**
 * Standard style.
 *
 * @const       lsStandard
 */
define('lsStandard','lsStandard');

/**
 * Count button.
 *
 * @const       lsButtonCount
 */
define('lsButtonCount','lsButtonCount');

// Action Verb

/**
 * Recommend.
 *
 * @const       vdRecommend
 */
define('vdRecommend','vdRecommend');

/**
 * Like.
 *
 * @const       vdLike
 */
define('vdLike','vdLike');

/**
 * Base class for Facebook Social Plugins visual components (also known as controls).
 * 
 * @package     Facebook
 */
class SocialPlugins extends Control
{

    // Expand to Fit

    /**
     * Whether image, on design time, should fit container size or not.
     *
     * @var      boolean
     */
    protected $_expandtofit=false;

    // URL

    /**
     * Site URL.
     *
     * The canonical URL of your object that will be used as its permanent ID in the graph.
     *
     * For example, in an instance of {@link LikeButton}, it would be the website to be liked.
     *
     * @var      string
     */
    protected $_url='http://www.embarcadero.com';

    /**
     * Getter method for {@link $_url}.
     *
     * @return   string  {@link $_url}
     */
    function readURL() { return $this->_url; }

    /**
     * Setter method for {@link $_url}.
     *
     * @param    string  $value
     */
    function writeURL($value) { $this->_url=$value; }

    /**
     * Getter for {@link $_url}’s default value.
     *
     * @return   string  'http://www.embarcadero.com'
     */
    function defaultURL() { return 'http://www.embarcadero.com'; }

    // Color Scheme

    /**
     * Color scheme.
     *
     * Possible values are: {@link csLight}, or {@link csDark}.
     * 
     * @var      string
     */
    protected $_colorscheme=csLight;

   /**
    * Getter method for {@link $_colorscheme}.
    *
    * @return   string  {@link $_colorscheme}
    */
    function readColorScheme() { return $this->_colorscheme; }

   /**
    * Setter method for {@link $_colorscheme}.
    *
    * @param    string  $value
    */
    function writeColorScheme($value) { $this->_colorscheme=$value; }

   /**
    * Getter for {@link $_colorscheme}’s default value.
    *
    * @return   string  {@link csLight}
    */
    function defaultColorScheme() { return csLight; }

    // Font

   /**
    * Font.
    *
    * Possible values are: {@link ftArial}, {@link ftLucidaGrande}, {@link ftSegoeUi},
    * {@link ftTahoma}, {@link ftTrebuchetMs}, or {@link ftVerdana}.
    *
    * @var      string
    */
    protected $_fontfacebook='';

   /**
    * Getter method for {@link $_fontfacebook}.
    *
    * @return   string  {@link $_fontfacebook}
    */
    function readFontFacebook() { return $this->_fontfacebook; }

   /**
    * Setter method for {@link $_fontfacebook}.
    *
    * @param    string  $value
    */
    function writeFontFacebook($value) { $this->_fontfacebook=$value; }

   /**
    * Getter for {@link $_fontfacebook}’s default value.
    *
    * @return   string  Default font (empty string)
    */
    function defaultFontFacebook() { return ''; }

    // Iframe

   /**
    * URL to the page to be displayed inside the iframe.
    * 
    * @var      string
    */
    protected $_iframe;

    // Image

   /**
    * Image Name
    *
    * This value is only used at design time.
    * 
    * @var      string
    */
    protected $_image;

    // Header

   /**
    * Whether the header of the components should be displayed or not.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
    protected $_header='0';

   /**
    * Getter method for {@link $_header}.
    *
    * @return   string  {@link $_header}
    */
    function readHeader() { return $this->_header; }

   /**
    * Setter method for {@link $_header}.
    *
    * @param    string  $value
    */
    function writeHeader($value) { $this->_header=$value; }

   /**
    * Getter for {@link $_header}’s default value.
    *
    * @return   string  False ('0')
    */
    function defaultHeader() { return '0'; }

    // Constructor

   /**
    * {@inheritdoc}
    */
    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_colorscheme=csLight;
        $this->ControlStyle="csVerySlowRedraw=1";
    }

   /**
    * {@inheritdoc}
    */
    function dumpContents()
    {
        if (($this->ControlState & csDesigning)==csDesigning)
        {
          if ($this->_expandtofit)
          {
            echo "<table cellpadding=\"0\" cellspacing=\"0\" width=\"$this->Width\" height=\"$this->Height\"><tr><td align=\"left\" valign=\"top\"><img src=\"$this->_image\" width=\"$this->Width\" height=\"$this->Height\" /></td></tr></table>";
          }
          else
          {
            echo "<table cellpadding=\"0\" cellspacing=\"0\" width=\"$this->Width\" height=\"$this->Height\"><tr><td align=\"left\" valign=\"top\"><img src=\"$this->_image\" /></td></tr></table>";
          }
        }
        else
        {
            if($this->_iframe!='')
            {
                echo "<iframe src='$this->_iframe' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:".$this->Width."px; height:".$this->Height."px;' allowTransparency='true'></iframe>";
            }
        }
    }

    /**
    * Get the final value for control’s color scheme.
    *
    * This method returns the actual value for the color scheme, the one that will be used during
    * the rendering of the control.
    *
    * @return   string
    *
    * @internal
    */
    function textColorScheme()
    {
        switch($this->_colorscheme)
        {
            case csDark:
                return 'dark';
                break;
            case csLight:
                return 'light';
                break;
        }
    }

    /**
    * Get the final value for control’s font.
    *
    * This method returns the actual value for the font, the one that will be used during the
    * rendering of the control.
    *
    * @return   string
    *
    * @internal
    */
    function textFontFacebook(){

        switch($this->_fontfacebook)
        {
            case ftArial:
                return 'arial';
                break;
            case ftLucidaGrande:
                return 'lucida+grande';
                break;
            case ftSegoeUi:
                return 'segoe+ui';
                break;
            case ftTahoma:
                return 'tahoma';
                break;
            case ftTrebuchetMs:
                return 'trebuchet+ms';
                break;
            case ftVerdana:
                return 'verdana';
                break;
        }
    }
}


/**
 * Displays a Facebook Like Button.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/plugins/like Facebook Documentation
 */
class LikeButton extends SocialPlugins
{

    // Constructor

   /**
    * {@inheritdoc}
    */
    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_image=RPCL_HTTP_PATH.'/facebook/images/likebutton.gif';
        $this->Height=32;
        $this->Width=212;
    }

   /**
    * {@inheritdoc}
    */
    function dumpContents()
    {
      if (($this->ControlState & csDesigning)==csDesigning)
      {
        $leftimage='likebutton';
        if ($this->_verb==vdRecommend) $leftimage='recommendbutton';

        $scheme='_light';
        if ($this->_colorscheme==csDark) $scheme='_dark';

        $rightimage='like_text';
        if ($this->_layout==lsButtonCount) $rightimage='like_number';


        $leftimage=RPCL_HTTP_PATH.'/facebook/images/'.$leftimage.$scheme.'.png';
        $rightimage=RPCL_HTTP_PATH.'/facebook/images/'.$rightimage.$scheme.'.png';

        echo "<table cellpadding=\"0\" cellspacing=\"0\" width=\"$this->Width\" height=\"$this->Height\"><tr><td width=\"53\" align=\"left\" valign=\"top\"><img src=\"$leftimage\" /><td width=\"100%\" align=\"left\" valign=\"top\"><img src=\"$rightimage\" /></td></td></tr></table>";
      }
      else
      {
        if($this->_url!='')
        {
          $text="http://www.facebook.com/plugins/like.php?href=".$this->_url;
          switch($this->_layout)
          {
            case 'lsStandard': $text.="&layout=standard"; break;
            case 'lsButtonCount': $text.="&layout=button_count"; break;
          }

          $text.=(!$this->_showfaces)?'&show_faces=false':'&show_faces=true';

          if($this->Width<=450) $text.="&width=450";
          else $text.="&width=".$this->Width;

          switch($this->_verb)
          {
            case 'vdLike': $text.="&action=like";break;
            case 'vdRecommend': $text.="&action=recommend";break;
          }

          if($this->_fontfacebook!='')
          {
            $text.="&font=".$this->textFontFacebook();
          }
          $text.="&colorscheme=".$this->textColorScheme();
          $text.="&height=".$this->Height;
          $this->_iframe=$text;
          parent::dumpContents();
        }
      }
    }

   /**
    * {@inheritdoc}
    */
    function dumpHeaderCode()
    {
        if(!defined('LIKEBUTTON'))
        {
            define('LIKEBUTTON',1);
            if($this->_title!=''){
                echo '<meta property="og:title" content="'.$this->_title.'"/>';
            }
            if($this->_siteName!='')
            {
                echo '<meta property="og:site_name" content="'.$this->_siteName.'"/>';
            }
            if($this->_imageSite!='')
            {
                echo '<meta property="og:image" content="'.$this->_imageSite.'"/>';
            }
        }
    }

    // Layout

   /**
    * Layout to be used for the control.
    *
    * Possible values are: {@link lsButtonCount}, or {@link lsStandard}.
    * 
    * @var      string
    */
    protected $_layout=lsStandard;

   /**
    * Getter method for {@link $_layout}.
    *
    * @return   string  {@link $_layout}
    */
    function getLayout(){return $this->_layout;}

   /**
    * Setter method for {@link $_layout}.
    *
    * @param    string  $layout
    */
    function setLayout($layout){$this->_layout=$layout;}

   /**
    * Getter for {@link $_layout}’s default value.
    *
    * @return   string  {@link lsStandard}
    */
    function defaultLayout(){return lsStandard;}

    // Action Verb

   /**
    * Action verb to be used as text in the control.
    *
    * Possible values are: {@link vdLike}, or {@link vdRecommend}.
    * 
    * @var      string
    */
    protected $_verb=vdLike;

   /**
    * Getter method for {@link $_verb}.
    *
    * @return   string  {@link $_verb}
    */
    function getVerb(){return $this->_verb;}

   /**
    * Setter method for {@link $_verb}.
    *
    * @param    string  $verb
    */
    function setVerb($verb){$this->_verb=$verb;}

   /**
    * Getter for {@link $_verb}’s default value.
    *
    * @return   string  {@link vdLike}
    */
    function defaultVerb(){return vdLike;}

    // Faces

   /**
    * Whether or not user pictures should be displayed.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
    protected $_showfaces='0';

   /**
    * Getter method for {@link $_showfaces}.
    *
    * @return   string  {@link $_showfaces}
    */
    function getShowFaces(){return $this->_showfaces;}

   /**
    * Setter method for {@link $_showfaces}.
    *
    * @param    string  $faces
    */
    function setShowFaces($faces){ $this->_showfaces=$faces; }

   /**
    * Getter for {@link $_showfaces}’s default value.
    *
    * @return   string  False ('0')
    */
    function defaultShowFaces(){return '0';}

    // Title

   /**
    * Page title.
    *
    * This property is optional. If not specfied, <tt>title</tt> element value will be used instead.
    * 
    * @var      string
    */
    protected $_title='';

   /**
    * Getter method for {@link $_title}.
    *
    * @return   string  {@link $_title}
    */
    function getTitle(){return $this->_title;}

   /**
    * Setter method for {@link $_title}.
    *
    * @param    string  $title
    */
    function setTitle($title){$this->_title=$title;}

   /**
    * Getter for {@link $_title}’s default value.
    *
    * @return   string  Empty string (use <tt>title</tt> element instead)
    */
    function defaultTitle(){return '';}

    // Site Name

   /**
    * Title of your website.
    *
    * For example, it could be 'CNN' or 'IMDb'.
    * 
    * @var      string
    */
    protected $_siteName='';

   /**
    * Getter method for {@link $_siteName}.
    *
    * @return   string  {@link $_siteName}
    */
    function getSiteName(){return $this->_siteName;}

   /**
    * Setter method for {@link $_siteName}.
    *
    * @param    string  $site
    */
    function setSiteName($site){$this->_siteName=$site;}

   /**
    * Getter for {@link $_siteName}’s default value.
    *
    * @return   string  Empty string
    */
    function defaultSiteName(){return '';}

   // Site Image

   /**
    * URL to a picture of the webpage.
    *
    * The image must be at least 50px by 50px, and have a maximum aspect ratio of 3:1.
    * 
    * @var      string
    */
    protected $_imageSite='';

   /**
    * Getter method for {@link $_imageSite}.
    *
    * @return   string  {@link $_imageSite}
    */
    function getImageSite(){return $this->_imageSite;}

   /**
    * Setter method for {@link $_imageSite}.
    *
    * @param    string  $image
    */
    function setImageSite($image){$this->_imageSite=$image;}

   /**
    * Getter for {@link $_imageSite}’s default value.
    *
    * @return   string  Empty string
    */
    function defaultImageSite(){return '';}

   // Parent Getters and Setters

      // URL

   /**
    * Getter method for {@link $_url}.
    *
    * @return   string  {@link $_url}
    */
    function getURL() { return $this->readurl(); }

   /**
    * Setter method for {@link $_url}.
    *
    * @param    string  $value
    */
    function setURL($value) { $this->writeurl($value); }

      // Font

   /**
    * Getter method for {@link $_fontfacebook}.
    *
    * @return   string  {@link $_fontfacebook}
    */
    function getFontFacebook() { return $this->readfontfacebook(); }

   /**
    * Setter method for {@link $_fontfacebook}.
    *
    * @param    string  $value
    */
    function setFontFacebook($value) { $this->writefontfacebook($value); }

      // Color Scheme

   /**
    * Getter method for {@link $_colorscheme}.
    *
    * @return   string  {@link $_colorscheme}
    */
    function getColorScheme() { return $this->readcolorscheme(); }

   /**
    * Setter method for {@link $_colorscheme}.
    *
    * @param    string  $value
    */
    function setColorScheme($value) { $this->writecolorscheme($value); }
}


/**
 * Displays a Facebook Like Box.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/plugins/like-box Facebook Documentation
 */
class LikeBox extends SocialPlugins
{
    // TODO: Update the components. Facebook has changed the interface (as in the fields to be
    // passed): {@link http://developers.facebook.com/docs/reference/plugins/like-box/}.

    // Constructor

   /**
    * {@inheritdoc}
    */
    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->Height=255;
        $this->Width=297;
        //$this->ControlStyle='csFixedHeight=1';
        $this->_image=RPCL_HTTP_PATH.'/facebook/images/likebox.png';
        $this->_connections=10;
    }

   /**
    * {@inheritdoc}
    */
    function dumpContents()
    {
      if($this->_idPage!='')
      {
        $text="http://www.facebook.com/plugins/likebox.php?id=".$this->_idPage;

        $text.="&width=".$this->Width;
        $text.="&connections=".$this->_connections;
        $text.=(!$this->_stream)?'&stream=false':'&stream=true';
        $text.=(!$this->_header)?'&header=false':'&header=true';
        $text.="&height=".$this->Height;
        $this->_iframe=$text;
        echo "<iframe src='$this->_iframe' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:".$this->Width."px; height:".$this->Height."px;' allowTransparency='true'></iframe>";
      }
      else
      {
        $this->_expandtofit=true;
        parent::dumpContents();
      }
    }

    // Page ID

   /**
    * Page ID.
    *
    * ID of the facebook page to be liked.
    * 
    * @var      string
    */
    protected $_idPage='';

   /**
    * Getter method for {@link $_idPage}.
    *
    * @return   string  {@link $_idPage}
    */
    function getIdPage(){return $this->_idPage;}

   /**
    * Setter method for {@link $_idPage}.
    *
    * @param    string  $idpage
    */
    function setIdPage($idpage){$this->_idPage=$idpage;}

   /**
    * Getter for {@link $_title}’s default value.
    *
    * @return   string  Empty string
    */
    function defaultIdPage(){return '';}

    // Connections

   /**
    * Amount of "likers" to be displayed in the box.
    *
    * The is the number of poeple who likes your page that should be listed at the end of the Like      
    * Box, with a picture of each.
    * 
    * @var      int
    */
    protected $_connections=10;

   /**
    * Getter method for {@link $_connections}.
    *
    * @return   int     {@link $_connections}
    */
    function getConnections(){return $this->_connections;}

   /**
    * Setter method for {@link $_connections}.
    *
    * @param    int     $connections
    */
    function setConnections($connections){$this->_connections=$connections;}

   /**
    * Getter for {@link $_numtopics}’s default value.
    *
    * @return   int     10
    */
    function defaultConnections(){return 10;}

    // Stream

   /**
    * Whether or not to display posts from given page’s wall.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
    protected $_stream='0';

   /**
    * Getter method for {@link $_stream}.
    *
    * @return   string  {@link $_stream}
    */
    function getStream(){return $this->_stream;}

   /**
    * Setter method for {@link $_stream}.
    *
    * @param    string  $stream
    */
    function setStream($stream)
    {
        $this->_stream=$stream;
        if($stream)
        {
            if($this->Height==255 || $this->Height==287)
                $this->Height+=300;
        }
        else
        {
            if($this->Height==555 || $this->Height==587)
                $this->Height-=300;
        }
    }

   /**
    * Getter for {@link $_stream}’s default value.
    *
    * @return   string  False ('0')
    */
    function defaultStream(){return '0';}

   // Parent Getters and Setters

      // Header

   /**
    * Getter method for {@link $_header}.
    *
    * @return   string  {@link $_header}
    */
    function getHeader() { return $this->readheader(); }

   /**
    * Setter method for {@link $_header}.
    *
    * @param    string  $value
    */
    function setHeader($value)
    {
      $this->writeheader($value);
        if($this->_header)
        {
            if($this->Height==555 || $this->Height==255)
            $this->Height+=32;
        }
        else
        {
            if($this->Height==287 || $this->Height==587)
              $this->Height-=32;
        }
    }
}


/**
 * Displays a Facebook Activity Feed.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/plugins/activity Facebook Documentation
 */
class ActivityFeed extends SocialPlugins
{

    // Constructor

   /**
    * {@inheritdoc}
    */
    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->Height=300;
        $this->Width=300;
        $this->_image=RPCL_HTTP_PATH.'/facebook/images/activityfeed.png';
    }

   /**
    * {@inheritdoc}
    */
    function dumpContents()
    {
        if($this->_url!=''){
            $text="http://www.facebook.com/plugins/activity.php?site=".$this->_url;

            $text.="&width=".$this->Width;

            $text.="&colorscheme=".$this->textColorScheme();
            $text.="&recommendations=".$this->_recommendations;
            if($this->_fontfacebook!='')
                $text.="&font=".$this->textFontFacebook();
            $text.="&header=".$this->_header;
            $text.="&height=".$this->Height;
            if($this->_borderColor!='')
                $text.="&border_color=".$this->_borderColor;
            $this->_iframe=$text;
            echo "<iframe src='$this->_iframe' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:".$this->Width."px; height:".$this->Height."px;' allowTransparency='true'></iframe>";
        }
        else
        {
         $this->_expandtofit=true;
         parent::dumpContents();
        }
    }

    // Faces

   /**
    * Whether or not to display recommendations associated to the given page.
    *
    * It can be set either to true ('1') or to false ('0').
    * 
    * @var      string
    */
    protected $_recommendations='0';

   /**
    * Getter method for {@link $_recommendations}.
    *
    * @return   string  {@link $_recommendations}
    */
    function getRecommendations(){return $this->_recommendations;}

   /**
    * Setter method for {@link $_recommendations}.
    *
    * @param    string  $recommendations
    */
    function setRecommendations($recommendations){$this->_recommendations=$recommendations;}

   /**
    * Getter for {@link $_recommendations}’s default value.
    *
    * @return   string  False ('0')
    */
    function defaultRecommendations(){return '0';}

    // Border Color

   /**
    * Border color.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    * 
    * @var      string
    */
    protected $_borderColor='';

   /**
    * Getter method for {@link $_borderColor}.
    *
    * @return   string  {@link $_borderColor}
    */
    function getBorderColor(){return $this->_borderColor;}

   /**
    * Setter method for {@link $_borderColor}.
    *
    * @param    string  $bordercolor
    */
    function setBorderColor($bordercolor){$this->_borderColor=$bordercolor;}

   /**
    * Getter for {@link $_borderColor}’s default value.
    *
    * @return   string  Empty string
    */
    function defaultBorderColor(){return '';}

   // Parent Getters and Setters

      // Header

   /**
    * Getter method for {@link $_header}.
    *
    * @return   string  {@link $_header}
    */
    function getHeader() { return $this->readheader(); }

   /**
    * Setter method for {@link $_header}.
    *
    * @param    string  $value
    */
    function setHeader($value) { $this->writeheader($value); }

      // URL

   /**
    * Getter method for {@link $_url}.
    *
    * @return   string  {@link $_url}
    */
    function getUrl() { return $this->readurl(); }

   /**
    * Setter method for {@link $_url}.
    *
    * @param    string  $value
    */
    function setUrl($value) { $this->writeurl($value); }

      // Color Scheme

   /**
    * Getter method for {@link $_colorscheme}.
    *
    * @return   string  {@link $_colorscheme}
    */
    function getColorScheme() { return $this->readcolorscheme(); }

   /**
    * Setter method for {@link $_colorscheme}.
    *
    * @param    string  $value
    */
    function setColorScheme($value) { $this->writecolorscheme($value); }
}


/**
 * Displays a Facebook Live Stream.
 * 
 * @package     Facebook
 * @link        http://developers.facebook.com/docs/reference/plugins/live-stream Facebook Documentation
 */
class LiveStream extends SocialPlugins
{

    // Constructor

   /**
    * {@inheritdoc}
    */
    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->Width=400;
        $this->Height=500;
        $this->_image=RPCL_HTTP_PATH.'/facebook/images/livestream.png';
    }

   /**
    * {@inheritdoc}
    */
    function dumpContents()
    {
        if($this->_appId!='')
        {
            $text="http://www.facebook.com/plugins/livefeed.php?app_id=".$this->_appId;

            $text.="&width=".$this->_width;

            $text.="&height=".$this->_height;

            if($this->_xid!='')
                $text.="&xid=".$this->_xid;

            $this->_iframe=$text;
            echo "<iframe src='$this->_iframe' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:".$this->Width."px; height:".$this->Height."px;' allowTransparency='true'></iframe>";
        }
        else
        {
         $this->_expandtofit=true;
         parent::dumpContents();
        }

    }

    // ID

   /**
    * Unique identifier for the stream.
    *
    * You must specify one for each of your Live Streams if you have more than one in a page.
    *
    * It can only contain alphanumeric characters (Aa-Zz, 0-9), hyphens (-) and underscores (_).
    * 
    * @var      string
    */
    protected $_xid='';

   /**
    * Getter method for {@link $_xid}.
    *
    * @return   string  {@link $_xid}
    */
    function getXid(){return $this->_xid;}

   /**
    * Setter method for {@link $_xid}.
    *
    * @param    string  $xid
    */
    function setXid($xid){$this->_xid=$xid;}

   /**
    * Getter for {@link $_xid}’s default value.
    *
    * @return   string  Empty string
    */
    function defaultXid(){return '';}

    // App ID

   /**
    * Your Facebook application ID or API key.
    * 
    * @var      string
    */
    protected $_appId='';

   /**
    * Getter method for {@link $_appId}.
    *
    * @return   string  {@link $_appId}
    */
    function getAppId(){return $this->_appId;}

   /**
    * Setter method for {@link $_appId}.
    *
    * @param    string  $appId
    */
    function setAppId($appId){$this->_appId=$appId;}

   /**
    * Getter for {@link $_appId}’s default value.
    *
    * @return   string  Empty string
    */
    function defaultAppId(){return '';}
}
?>