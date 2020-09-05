<?php
/**
*  SlideShow component
*
*  Copyright (c) 2004-2011 Embarcadero Technologies, Inc. 
*
*  An RPCL wrapper over FancyBox - jQuery Plugin
*  Simple and fancy lightbox alternative
*
*  Examples and documentation at: http://fancybox.net
*
*  Copyright (c) 2008 - 2010 Janis Skarnelis
*  http://fancybox.net/
*
*  Icon for the component
*  http://www.pinvoke.com
*  Copyright (C) 2010 Yusuke Kamiyamane. All rights reserved.
*  The icons are licensed under a Creative Commons Attribution
*  3.0 license. <http://creativecommons.org/licenses/by/3.0/>
*
*/
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("jquery/jquery.inc.php");
use_unit("controls.inc.php");

define('tpOutside', 'tpOutside');
define('tpInside', 'tpInside');
define('tpOver', 'tpOver');

define('trElastic', 'trElastic');
define('trFade', 'trFade');
define('trNone', 'trNone');

define('eaSwing', 'eaSwing');
define('eaLinear', 'eaLinear');

/**
* A simple slideshow component, based on jQuery.
*
* Use this control to show a list of images on a website with a fancy
* interface.
*
* Images will be shown in thumbnails on the page, and when the user clicks
* any of them, a larger version will popup, allowing to iterate through all
* of them. You can even add captions to the images.
*
*/
class SlideShow extends Control
{
    /**
    * Dumps all the code required at the document header
    */
    function dumpHeaderCode()
    {
      jQuery();
      //Simple switch to include this code just once
      if (!defined('FANCYBOX'))
      {
        define('FANCYBOX',1);
    ?>
	<script type="text/javascript" src="<?php echo RPCL_HTTP_PATH; ?>/slideshow/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="<?php echo RPCL_HTTP_PATH; ?>/slideshow/fancybox/jquery.fancybox-1.3.4.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo RPCL_HTTP_PATH; ?>/slideshow/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <?php
      }
      //Setup some properties and dump some css code
?>
<script type="text/javascript">
    $(function() {
			$("a[rel=<?php echo $this->name; ?>_group]").fancybox({
        'padding'         : <?php echo $this->_padding; ?>,
        'margin'          : <?php echo $this->_margin; ?>,
        'opacity'         : <?php echo $this->_opacity; ?>,
        'cyclic'         : <?php echo $this->_cyclic; ?>,
        'hideOnOverlayClick'         : <?php echo $this->_hideonoverlayclick; ?>,
        'hideOnContentClick'         : <?php echo $this->_hideoncontentclick; ?>,
        'overlayShow'         : <?php echo $this->_overlayshow; ?>,
        'overlayOpacity'         : <?php echo $this->_overlayopacity; ?>,
        'overlayColor'         : '<?php echo $this->_overlaybackgroundcolor; ?>',
        'titleShow'         : <?php echo $this->_titleshow; ?>,
        'titlePosition'         : '<?php
                                       switch ($this->_titleposition)
                                       {
                                          case tpOutside: echo 'outside';break;
                                          case tpInside: echo 'inside';break;
                                          case tpOver: echo 'over';break;
                                       }
                                   ?>',
        'transitionIn'         : '<?php
                                       switch ($this->_transitionin)
                                       {
                                          case trElastic: echo 'elastic';break;
                                          case trFade: echo 'fade';break;
                                          case trNone: echo 'none';break;
                                       }
                                   ?>',
        'transitionOut'         : '<?php
                                       switch ($this->_transitionout)
                                       {
                                          case trElastic: echo 'elastic';break;
                                          case trFade: echo 'fade';break;
                                          case trNone: echo 'none';break;
                                       }
                                   ?>',
        'speedIn'         : <?php echo $this->_speedin; ?>,
        'speedOut'         : <?php echo $this->_speedout; ?>,
        'changeSpeed'         : <?php echo $this->_changespeed; ?>,
        'changeFade'         : <?php echo $this->_changefade; ?>,
        'easingIn'         : '<?php
                                       switch ($this->_easingin)
                                       {
                                          case eaSwing: echo 'swing';break;
                                          case eaLinear: echo 'linear';break;
                                       }
                                   ?>',
        'easingOut'         : '<?php
                                       switch ($this->_easingout)
                                       {
                                          case eaSwing: echo 'swing';break;
                                          case eaLinear: echo 'linear';break;
                                       }
                                   ?>',
        'showCloseButton'         : <?php echo $this->_showclosebutton; ?>,
        'showNavArrows'         : <?php echo $this->_shownavigationarrows; ?>,
        'enableEscapeButton'         : <?php echo $this->_enableescapebutton; ?>,
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over"><?php echo $this->_textimage; ?> ' + (currentIndex + 1) + ' <?php echo $this->_textof; ?> ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
    });
</script>
<style type="text/css">
	#<?php echo $this->name; ?>_gallery {
		background-color: <?php echo $this->_backgroundcolor; ?>;
		padding: 10px;
		width: 520px;
	}
	#<?php echo $this->name; ?>_gallery ul { list-style: none; }
	#<?php echo $this->name; ?>_gallery ul li { display: inline; }
	#<?php echo $this->name; ?>_gallery ul img {
		border: 5px solid <?php echo $this->_bordercolor; ?>;
		border-width: <?php echo $this->_bordertopwidth; ?> <?php echo $this->_borderrightwidth; ?> <?php echo $this->_borderbottomwidth; ?> <?php echo $this->_borderleftwidth; ?>;
	}
	#<?php echo $this->name; ?>_gallery ul a:hover img {
		border: 5px solid <?php echo $this->_borderhovercolor; ?>;
		border-width: <?php echo $this->_bordertopwidth; ?> <?php echo $this->_borderrightwidth; ?> <?php echo $this->_borderbottomwidth; ?> <?php echo $this->_borderleftwidth; ?>;
		color: <?php echo $this->_borderhovercolor; ?>;
	}
	#<?php echo $this->name; ?>_gallery ul a:hover { color: <?php echo $this->_borderhovercolor; ?>; }
	</style>
<?php
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
    }

    function loaded()
    {
      parent::loaded();
      //Resolves the references to the imagelist objects
      $this->_imagelist=$this->fixupProperty($this->_imagelist);
      $this->_thumbimagelist=$this->fixupProperty($this->_thumbimagelist);
    }

    protected $_borderleftwidth='5px';

    /**
    * Set the width of the left border of the thumbnails.
    *
    * Use this property to change the width of the left border of each thumbnail
    * on the thumbnail list. You can use any valid CSS size specifier.
    *
    * @return string
    */
    function getBorderLeftWidth() { return $this->_borderleftwidth; }
    function setBorderLeftWidth($value) { $this->_borderleftwidth=$value; }
    function defaultBorderLeftWidth() { return '5px'; }

    protected $_borderrightwidth='5px';

    /**
    * Set the width of the right border of the thumbnails.
    *
    * Use this property to change the width of the right border of each thumbnail
    * on the thumbnail list. You can use any valid CSS size specifier.
    *
    * @return string
    */
    function getBorderRightWidth() { return $this->_borderrightwidth; }
    function setBorderRightWidth($value) { $this->_borderrightwidth=$value; }
    function defaultBorderRightWidth() { return '5px'; }

    protected $_borderbottomwidth='20px';

    /**
    * Set the width of the bottom border of the thumbnails.
    *
    * Use this property to change the width of the bottom border of each thumbnail
    * on the thumbnail list. You can use any valid CSS size specifier.
    *
    * @return string
    */
    function getBorderBottomWidth() { return $this->_borderbottomwidth; }
    function setBorderBottomWidth($value) { $this->_borderbottomwidth=$value; }
    function defaultBorderBottomWidth() { return '20px'; }

    protected $_bordertopwidth='5px';

    /**
    * Set the width of the top border of the thumbnails.
    *
    * Use this property to change the width of the top border of each thumbnail
    * on the thumbnail list. You can use any valid CSS size specifier.
    *
    * @return string
    */
    function getBorderTopWidth() { return $this->_bordertopwidth; }
    function setBorderTopWidth($value) { $this->_bordertopwidth=$value; }
    function defaultBorderTopWidth() { return '5px'; }


    protected $_bordercolor="#3e3e3e";

    /**
    * Set the color of the border of the thumbnails.
    *
    * Use this property to change the color used to draw the border around
    * each photo on the thumbnail list. The color can be any valid color specifier.
    * At design-time, you can use the attached property editor to change the value
    * of this property.
    *
    * @return string
    */
    function getBorderColor() { return $this->_bordercolor; }
    function setBorderColor($value) { $this->_bordercolor=$value; }
    function defaultBorderColor() { return "#3e3e3e"; }

    protected $_borderhovercolor='#FFFFFF';

    /**
    * Set the color of the border of the thumbnails when the mouse is over it.
    *
    * Use this property to change the color used to draw the border around
    * each photo on the thumbnail list, when the mouse is over it.
    * The color can be any valid color specifier.
    * At design-time, you can use the attached property editor to change the value
    * of this property.
    *
    * @return string
    */
    function getBorderHoverColor() { return $this->_borderhovercolor; }
    function setBorderHoverColor($value) { $this->_borderhovercolor=$value; }
    function defaultBorderHoverColor() { return '#FFFFFF'; }



    protected $_padding=10;

    /**
    * Space between image wrapper and content.
    *
    * Use this property, along with Margin, to specify how the image is shown
    * when the user clicks on it. These properties allows you to control the size
    * of the border and the location of the content.
    *
    * @return integer
    */
    function getPadding() { return $this->_padding; }
    function setPadding($value) { $this->_padding=$value; }
    function defaultPadding() { return 10; }

    protected $_margin=20;

    /**
    * Space between viewport and image wrapper.
    *
    * Use this property, along with Padding, to specify how the image is shown
    * when the user clicks on it. These properties allows you to control the size
    * of the border and the location of the content.
    *
    * @return integer
    */
    function getMargin() { return $this->_margin; }
    function setMargin($value) { $this->_margin=$value; }
    function defaultMargin() { return 20; }

    protected $_enableescapebutton="true";

    /**
    * Toggle if pressing Esc button closes the image box.
    *
    * Use this property to switch on/off the ability for the user to close the image
    * by pressing the escape key
    *
    * @return boolean
    */
    function getEnableEscapeButton() { return $this->_enableescapebutton; }
    function setEnableEscapeButton($value) { $this->_enableescapebutton=$value; }
    function defaultEnableEscapeButton() { return "true"; }

    protected $_shownavigationarrows="true";

    /**
    * Toggle navigation arrows.
    *
    * Use this property to enable or disable the arrows for navigation
    *
    * @return boolean
    */
    function getShowNavigationArrows() { return $this->_shownavigationarrows; }
    function setShowNavigationArrows($value) { $this->_shownavigationarrows=$value; }
    function defaultShowNavigationArrows() { return "true"; }

    protected $_showclosebutton="true";

    /**
    * Toggle close button.
    *
    * Use this property to show or hide the close button at the top right of the images,
    * if disabled, the user will have to click on the content, the overlay or press ESC to
    * close the image. Of course, if those options are enabled.
    *
    * @return boolean
    */
    function getShowCloseButton() { return $this->_showclosebutton; }
    function setShowCloseButton($value) { $this->_showclosebutton=$value; }
    function defaultShowCloseButton() { return "true"; }

    protected $_hideonoverlayclick="true";

    /**
    * Toggle if clicking the overlay should close the image box.
    *
    * If enabled, the user will be able to close the image box by clicking on the
    * overlay zone. That is, the zone that surrounds the image.
    *
    * @return boolean
    */
    function getHideOnOverlayClick() { return $this->_hideonoverlayclick; }
    function setHideOnOverlayClick($value) { $this->_hideonoverlayclick=$value; }
    function defaultHideOnOverlayClick() { return "true"; }

    protected $_hideoncontentclick="false";

    /**
    * Toggle if clicking the content should close the image box.
    *
    * If true, the image will be closed if the user clicks on the image
    *
    * @return boolean
    */
    function getHideOnContentClick() { return $this->_hideoncontentclick; }
    function setHideOnContentClick($value) { $this->_hideoncontentclick=$value; }
    function defaultHideOnContentClick() { return "false"; }


    protected $_imagecaptions=array();

    /**
    * Captions for the images on the imagelist object.
    *
    * Use this property to set the captions for each of the images found on the
    * imagelist object.
    *
    * Each line of the array matches an image, use the attached property editor
    * at design-time, or fill it with an array at run-time
    *
    * @return array
    */
    function getImageCaptions() { return $this->_imagecaptions; }
    function setImageCaptions($value) { $this->_imagecaptions=$value; }
    function defaultImageCaptions() { return array(); }

    protected $_sampleimages=5;

    /**
    * Number of sample images at design-time.
    *
    * At design-time, this property allows you to set how many images are shown
    * on the control, so you can adjust other properties to see how will look
    * like
    *
    * @return integer
    */
    function getSampleImages() { return $this->_sampleimages; }
    function setSampleImages($value) { $this->_sampleimages=$value; }
    function defaultSampleImages() { return 5; }

    protected $_textof="of";

    /**
    * Text to be used on the counter for the images, just below the caption.
    *
    * When the user clicks an image, will see "Image # of #", this property allows
    * you to change the "of" part of that string
    *
    * @return string
    */
    function getTextOf() { return $this->_textof; }
    function setTextOf($value) { $this->_textof=$value; }
    function defaultTextOf() { return "of"; }



    protected $_textimage="Image";

    /**
    * Text to be used on the counter for the images, just below the caption.
    *
    * When the user clicks an image, will see "Image # of #", this property allows
    * you to change the "Image" part of that string
    *
    * @return string
    */
    function getTextImage() { return $this->_textimage; }
    function setTextImage($value) { $this->_textimage=$value; }
    function defaultTextImage() { return "Image"; }

    protected $_opacity="false";

    /**
    * When true, transparency of content is changed for elastic transitions.
    *
    * @return boolean
    */
    function getOpacity() { return $this->_opacity; }
    function setOpacity($value) { $this->_opacity=$value; }
    function defaultOpacity() { return "false"; }

    protected $_cyclic="false";

    /**
    * When true, galleries will be cyclic, allowing you to keep pressing next/back.
    *
    * So if it's enabled, and the user moves to the last image of the gallery, pressing
    * next, will move the user to the first one and viceversa.
    *
    * @return boolean
    */
    function getCyclic() { return $this->_cyclic; }
    function setCyclic($value) { $this->_cyclic=$value; }
    function defaultCyclic() { return "false"; }

    protected $_overlaybackgroundcolor="#000000";

    /**
    * Set the color of the overlay.
    *
    * Use this property to set the color that will be used to obscure the content
    * of the webpage when the images are shown
    *
    * @return string
    */
    function getOverlayBackgroundColor() { return $this->_overlaybackgroundcolor; }
    function setOverlayBackgroundColor($value) { $this->_overlaybackgroundcolor=$value; }
    function defaultOverlayBackgroundColor() { return "#000000"; }

    protected $_overlayopacity=0.8;

    /**
    * Set the opacity of the overlay.
    *
    * Use this property to specify the opacity used when drawing the overlay. This property,
    * in combination with OverlayBackgroundColor, allows you to configure how the overlay looks.
    * The opacity must be a float number between 0 and 1, being 1 a 100% of opacity.
    *
    * @return float
    */
    function getOverlayOpacity() { return $this->_overlayopacity; }
    function setOverlayOpacity($value) { $this->_overlayopacity=$value; }
    function defaultOverlayOpacity() { return 0.8; }

    protected $_overlayshow="true";

    /**
    * When true, the overlay is shown, obscuring the content.
    *
    * Use this property to enable or disable the overlay
    *
    * @return boolean
    */
    function getOverlayShow() { return $this->_overlayshow; }
    function setOverlayShow($value) { $this->_overlayshow=$value; }
    function defaultOverlayShow() { return "true"; }

    protected $_titleshow="true";

    /**
    * When true, the title for each image is shown.
    *
    * Use this property, along with ImageCaptions to set if the captions for each
    * image are going to be shown. Also, you can specify the position of the captions
    * with the TitlePosition property.
    *
    * @return boolean
    */
    function getTitleShow() { return $this->_titleshow; }
    function setTitleShow($value) { $this->_titleshow=$value; }
    function defaultTitleShow() { return "true"; }

    protected $_titleposition=tpOutside;

    /**
    * Set the position where the title is going to be shown.
    *
    * This property allows you to specify where the title for the images is shown.
    * Valid values for this property are:
    *
    * tpOutside - The title is shown outside the image box
    * tpInside  - The title is shown inside the image box
    * tpOver    - The title is shown over the images
    *
    * @return string
    */
    function getTitlePosition() { return $this->_titleposition; }
    function setTitlePosition($value) { $this->_titleposition=$value; }
    function defaultTitlePosition() { return tpOutside; }

    protected $_transitionin=trFade;

    /**
    * Set the effect to be used when showing the photos.
    *
    * This property allows you to specify the effect when showing the photos.
    * Valid values for this property are:
    *
    * trElastic - A zoom effect
    * trFade    - Dissolve effect
    * trNone    - No effect is used
    *
    * @return string
    */
    function getTransitionIn() { return $this->_transitionin; }
    function setTransitionIn($value) { $this->_transitionin=$value; }
    function defaultTransitionIn() { return trFade; }

    protected $_transitionout=trFade;

    /**
    * Set the effect to be used when closing the image box.
    *
    * This property allows you to specify the effect when closing the photos.
    * Valid values for this property are:
    *
    * trElastic - A zoom effect
    * trFade    - Dissolve effect
    * trNone    - No effect is used
    *
    * @return string
    */
    function getTransitionOut() { return $this->_transitionout; }
    function setTransitionOut($value) { $this->_transitionout=$value; }
    function defaultTransitionOut() { return trFade; }


    protected $_speedin=300;

    /**
    * The speed of the transition effect showing the images.
    *
    * This property allows you to specify the speed of the effect (fade, elastic)
    * when showing the photos. The value must be specified in milliseconds
    *
    * @return integer
    */
    function getSpeedIn() { return $this->_speedin; }
    function setSpeedIn($value) { $this->_speedin=$value; }
    function defaultSpeedIn() { return 300; }

    protected $_speedout=300;

    /**
    * The speed of the transition effect closing the images.
    *
    * This property allows you to specify the speed of the effect (fade, elastic)
    * when closing the photos. The value must be specified in milliseconds
    *
    * @return integer
    */
    function getSpeedOut() { return $this->_speedout; }
    function setSpeedOut($value) { $this->_speedout=$value; }
    function defaultSpeedOut() { return 300; }

    protected $_changespeed=300;

    /**
    * Speed of resizing when changing gallery items, in milliseconds.
    *
    * @return integer
    */
    function getChangeSpeed() { return $this->_changespeed; }
    function setChangeSpeed($value) { $this->_changespeed=$value; }
    function defaultChangeSpeed() { return 300; }

    protected $_changefade=200;

    /**
    * Speed of the content fading while changing gallery items, in milliseconds.
    *
    * @return integer
    */
    function getChangeFade() { return $this->_changefade; }
    function setChangeFade($value) { $this->_changefade=$value; }
    function defaultChangeFade() { return 200; }

    protected $_easingin='eaSwing';

    /**
    * Set the function to use for the effect on showing the images.
    *
    * Valid values for this property are:
    *
    * eaSwing  - An accelerating function
    * eaLinear - A constant function
    *
    * @return string
    */
    function getEasingIn() { return $this->_easingin; }
    function setEasingIn($value) { $this->_easingin=$value; }
    function defaultEasingIn() { return 'eaSwing'; }

    protected $_easingout='eaSwing';

    /**
    * Set the function to use for the effect on closing the images.
    *
    * Valid values for this property are:
    *
    * eaSwing  - An accelerating function
    * eaLinear - A constant function
    *
    * @return string
    */
    function getEasingOut() { return $this->_easingout; }
    function setEasingOut($value) { $this->_easingout=$value; }
    function defaultEasingOut() { return 'eaSwing'; }

    protected $_backgroundcolor="#404040";

    /**
    * Set the color for the thumbnail list.
    *
    * Use this property to change the color used to draw the background of the
    * thumbnail list The color can be any valid color specifier.
    * At design-time, you can use the attached property editor to change the value
    * of this property.
    *
    * @return string
    */
    function getBackgroundColor() { return $this->_backgroundcolor; }
    function setBackgroundColor($value) { $this->_backgroundcolor=$value; }
    function defaultBackgroundColor() { return "#444"; }

    private $_imagelist=null;

    /**
    * Set the ImageList containing the photos to be used.
    *
    * Use this property to attach an ImageList object with all the images you want
    * to show. This property is meant to be used for the big size photos, check the
    * ThumbImageList property to specify a lower size photos. If no ThumbImageList
    * property is set, then, these images are used.
    *
    * @return ImageList
    */
    function getImageList()       { return $this->_imagelist; }
    function setImageList($value) { $this->_imagelist=$this->fixupProperty($value); }
    function defaultImageList()   { return null; }

    private $_thumbimagelist=null;

    /**
    * Set the ImageList containing the photos to be used for the thumbnails.
    *
    * Use this property to specify a lower size version of the photos specified on ImageList.
    * If this property is not set, the big size photos pointed by ImageList will be used instead.
    *
    * @return ImageList
    */
    function getThumbImageList()       { return $this->_thumbimagelist; }
    function setThumbImageList($value) { $this->_thumbimagelist=$this->fixupProperty($value); }
    function defaultThumbImageList()   { return null; }

    protected $_thumbimagewidth=72;

    /**
    * Set the width for the thumbnails.
    *
    * Use this property to tweak the size of the thumbnails in the thumbnail list
    *
    * @return integer
    */
    function getThumbImageWidth() { return $this->_thumbimagewidth; }
    function setThumbImageWidth($value) { $this->_thumbimagewidth=$value; }
    function defaultThumbImageWidth() { return 72; }

    protected $_thumbimageheight=72;

    /**
    * Set the height for the thumbnails.
    *
    * Use this property to tweak the size of the thumbnails in the thumbnail list
    *
    * @return integer
    */
    function getThumbImageHeight() { return $this->_thumbimageheight; }
    function setThumbImageHeight($value) { $this->_thumbimageheight=$value; }
    function defaultThumbImageHeight() { return 72; }

    function dumpContents()
    {
?>
<div id="<?php echo $this->name; ?>_gallery" style="width:<?php echo $this->Width; ?>px;height:<?php echo $this->Height; ?>px;">
    <ul>
    <?php
      $images=array();
      $thumbimages=array();
      $captions=array();

      //At design time, use static information
      if (($this->ControlState & csDesigning) == csDesigning)
      {
        $k=1;
        for($i=1;$i<=$this->_sampleimages;$i++)
        {
          $images[]=RPCL_HTTP_PATH.'/slideshow/example/'.$k.'_b.jpg';
          $thumbimages[]=RPCL_HTTP_PATH.'/slideshow/example/'.$k.'_s.jpg';
          $k++;
          if ($k>9) $k=1;
        }
      }
      else
      {
        //At runtime, if images are specified, then, use them
        if (is_object($this->_imagelist))
        {
          $images=$this->_imagelist->Images;
          $thumbimages=$this->_imagelist->Images;
          $captions=$this->_imagecaptions;
          if (is_object($this->_thumbimagelist)) $thumbimages=$this->_thumbimagelist->Images;
        }
      }

      //Dump the gallery images
      while (list($key,$image)=each($images))
      {
        list($key,$thumbimage)=each($thumbimages);
        $caption='';
        if (is_array($captions)) list($key,$caption)=each($captions);
    ?>
        <li>
            <a rel="<?php echo $this->Name; ?>_group" href="<?php echo $image; ?>" title="<?php echo $caption; ?>"><img alt="" src="<?php echo $thumbimage; ?>" width="<?php echo $this->_thumbimagewidth; ?>" height="<?php echo $this->_thumbimageheight; ?>" /></a>
        </li>
    <?php
      }
    ?>
    </ul>
</div>
<?php
    }
}

?>