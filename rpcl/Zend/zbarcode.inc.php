<?php

/**
 * Zend/zbarcode.inc.php
 * 
 * Defines Zend Framework Barcode component.
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
use_unit("controls.inc.php");
use_unit("Zend/framework/library/Zend/Barcode.php");
use_unit("Zend/framework/library/Zend/Config.php");

// Types

/**
 * Code 128 barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.code128 Zend Framework Documentation
 * 
 * @const       btCode128
 */
define('btCode128', 'btCode128');

/**
 * Code 25 barcode type, also known as Code 2 of 5 or Code 25 Industrial.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.code25 Zend Framework Documentation
 * 
 * @const       btCode25
 */
define('btCode25', 'btCode25');

/**
 * Code 2 of 5 Interleaved barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.code25interleaved Zend Framework Documentation
 * 
 * @const       btCode25i
 */
define('btCode25i', 'btCode25i');

/**
 * EAN-2 barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.ean2 Zend Framework Documentation
 * 
 * @const       btEAN2
 */
define('btEAN2', 'btEAN2');

/**
 * EAN-5 barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.ean5 Zend Framework Documentation
 * 
 * @const       btEAN5
 */
define('btEAN5', 'btEAN5');

/**
 * EAN-8 barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.ean8 Zend Framework Documentation
 * 
 * @const       btEAN8
 */
define('btEAN8', 'btEAN8');

/**
 * EAN-13 barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.ean13 Zend Framework Documentation
 * 
 * @const       btEAN13
 */
define('btEAN13', 'btEAN13');

/**
 * Code 39 barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.code39 Zend Framework Documentation
 * 
 * @const       btCode39
 */
define('btCode39', 'btCode39');

/**
 * Deutsche Post Identcode barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.identcode Zend Framework Documentation
 * 
 * @const       btIdentcode
 */
define('btIdentcode', 'btIdentcode');

/**
 * ITF-14 barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.itf14 Zend Framework Documentation
 * 
 * @const       btITF14
 */
define('btITF14', 'btITF14');

/**
 * Deutsche Post Leitcode barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.leitcode Zend Framework Documentation
 * 
 * @const       btLeitcode
 */
define('btLeitcode', 'btLeitcode');

/**
 * PostaL Alpha Numeric Encoding Technique (Planet) barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.planet Zend Framework Documentation
 * 
 * @const       btPlanet
 */
define('btPlanet', 'btPlanet');

/**
 * POSTal Numeric Encoding Technique (Postnet) barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.postnet Zend Framework Documentation
 * 
 * @const       btPostnet
 */
define('btPostnet', 'btPostnet');

/**
 * Royal Mail 4-State Customer Code (Royal Mail or RM4SCC) barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.royalmail Zend Framework Documentation
 * 
 * @const       btRoyalmail
 */
define('btRoyalmail', 'btRoyalmail');

/**
 * Universal Product Code (UPC-A) barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.upca Zend Framework Documentation
 * 
 * @const       btUPCA
 */
define('btUPCA', 'btUPCA');

/**
 * Universal Product Code (UPC-E) barcode type.
 *
 * @link        http://framework.zend.com/manual/en/zend.barcode.objects.html#zend.barcode.objects.details.upce Zend Framework Documentation
 * 
 * @const       btUPCE
 */
define('btUPCE', 'btUPCE');

// Horizontal Positions

/**
 * Left alignment.
 * 
 * @const       hpLeft
 */
define('hpLeft', 'hpLeft');

/**
 * Center alignment.
 * 
 * @const       hpCenter
 */
define('hpCenter', 'hpCenter');

/**
 * Right alignment.
 * 
 * @const       hpRight
 */
define('hpRight', 'hpRight');

// Vertical Positions

/**
 * Top alignment.
 * 
 * @const       vpTop
 */
define('vpTop', 'vpTop');

/**
 * Middle alignment.
 * 
 * @const       vpMiddle
 */
define('vpMiddle', 'vpMiddle');

/**
 * Bottom alignment.
 * 
 * @const       vpBottom
 */
define('vpBottom', 'vpBottom');

// Image Types

/**
 * Portable Network Graphics (PNG).
 *
 * @link http://en.wikipedia.org/wiki/Portable_Network_Graphics Wikipedia
 * 
 * @const       itPNG
 */
define('itPNG', 'itPNG');

/**
 * JPEG.
 *
 * @link http://en.wikipedia.org/wiki/JPEG Wikipedia
 * 
 * @const       itJPEG
 */
define('itJPEG', 'itJPEG');

/**
 * JPEG.
 *
 * @link http://en.wikipedia.org/wiki/JPEG Wikipedia
 * 
 * @const       itJPG
 */
define('itJPG', 'itJPG');

/**
 * Graphics Interchange Format (GIF).
 *
 * @link http://en.wikipedia.org/wiki/Graphics_Interchange_Format Wikipedia
 * 
 * @const       itGIF
 */
define('itGIF', 'itGIF');

// Types of Rendering

/**
 * Rendering as a raster image.
 *
 * @link http://en.wikipedia.org/wiki/Raster_graphics Wikipedia
 * 
 * @const       rtImage
 */
define('rtImage', 'rtImage');

/**
 * Rendering as an SVG.
 *
 * @link        http://en.wikipedia.org/wiki/SVG Wikipedia
 * 
 * @const       rtSVG
 */
define('rtSVG', 'rtSVG'); // TODO: implement this feature.

/**
 * Rendering as a Portable Document Format (PDF) document.
 *
 * @link        http://en.wikipedia.org/wiki/Portable_Document_Format Wikipedia
 * 
 * @const       rtPDF
 */
define('rtPDF', 'rtPDF'); // TODO: implement this feature.

/**
 * Component to create barcodes.
 *
 * It supports several barcode formats.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.barcode.html Zend Framework Documentation
 */
class ZBarcode extends Control
{

   // Properties

   /**
    * Zend Framework Barcode instance.
    *
    * @var Zend_Barcode
    */
   protected $_barcode = null;

   /**
    * Namespace.
    *
    * This has currently no effect at all in the behavior of the component.
    *
    * @var string
    */
   protected $_namespace = "ZBarcode";

   /**
    * Height of a bar.
    *
    * @var integer
    */
   protected $_barheight = 50;

   /**
    * Width of a thick bar.
    *
    * @var integer
    */
   protected $_thickwidth = 3;

   /**
    * Width of a thin bar.
    *
    * @var integer
    */
   protected $_thinwidth = 1;

   /**
    * Factor to multiply bar and font sizes.
    *
    * @var integer
    */
   protected $_factor = 1;

   /**
    * Whether background and foreground color should be reversed or not.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var string
    */
   protected $_reversecolor = "false";

   /**
    * Orientation.
    *
    * It is measured in degrees (0 equals to 360).
    *
    * @var integer
    */
   protected $_orientation = 0;

   /**
    * Whether the bar should have a border or not.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var string
    */
   protected $_border = "false";

   /**
    * Whether the bar should have a quiet zones or not.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * A quiet zone is, in barcode technology, the blank margin on either side of a barcode. This
    * margins are used to tell the barcode reader where a barcode’s symbology starts and stops. It
    * is used to prevent the reader from picking up information that does not pertain to the barcode
    * that is being scanned.
    *
    * @var string
    */
   protected $_quietzones = "true";

   /**
    * Whether or not the text should be displayed below the barcode.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var string
    */
   protected $_drawtext = "true";

   /**
    * Whether or not the text should be stretched all along the barcode.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var string
    */
   protected $_stretchtext = "false";

   /**
    * Whether or not the checksum should be automatically added to the barcode.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var string
    */
   protected $_checksum = "false";

   /**
    * Whether or not the checksum should be displayed in the textual representation.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var string
    */
   protected $_checksumintext = "false";

   /**
    * Text to be represented as a barcode.
    *
    * @var string
    */
   protected $_text = '0123456789';

   /**
    * Offset of the barcode from the left of the rendering resource.
    *
    * If used, {@link $_horizontalposition} will be overridden.
    *
    * @var integer
    */
   protected $_leftoffset = 0;

   /**
    * Offset of the barcode from the top of the rendering resource.
    *
    * If used, {@link $_verticalposition} will be overridden.
    *
    * @var integer
    */
   protected $_topoffset = 0;

   /**
    * Whether or not to automatically render errors.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var string
    */
   protected $_automaticrendererror = "true";

   /**
    * Type of barcode.
    *
    * Possible values are: {@link btCode128}, {@link btCode25}, {@link btCode25i}, {@link btEAN2},
    * {@link btEAN5}, {@link btEAN8}, {@link btEAN13}, {@link btCode39}, {@link btIdentcode},
    * {@link btITF14}, {@link btLeitcode}, {@link btPlanet}, {@link btPostnet}, {@link btRoyalmail},
    * {@link btUPCA}, or {@link btUPCE}.
    *
    * @var string
    */
   protected $_type = btCode39;

   /**
    * Image format.
    *
    * This only applies when {@link $_rendertype} is set to {@link rtImage}.
    *
    * Possible values are: {@link itPNG}, {@link itJPEG}, {@link itJPG}, or {@link itGIF}.
    *
    * @var string
    */
   protected $_imagetype = itPNG;

   /**
    * Rendering method.
    *
    * Currently only {@link rtImage} is supported.
    *
    * @var string
    */
   protected $_rendertype = rtImage;

   /**
    * Horizontal position.
    *
    * Can be useful when {@link $_rendertype} is set to {@link rtImage} (or {@link rtPDF} when it is
    * available).
    *
    * Possible values are: {@link hpLeft}, {@link hpCenter}, or {@link hpRight}.
    *
    * @var string
    */
   protected $_horizontalposition = hpCenter;

   /**
    * Vertical position.
    *
    * Can be useful when {@link $_rendertype} is set to {@link rtImage} (or {@link rtPDF} when it is
    * available).
    *
    * Possible values are: {@link vpTop}, {@link vpMiddle}, or {@link vpBottom}.
    *
    * @var string
    */
   protected $_verticalposition = vpTop;

   /**
    * Factor to multiply final barcode dimensions.
    *
    * @var float
    */
   protected $_modulesize = 1;

   /**
    * Text Color.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    * 
    * @var      string
    */
   protected $_textcolor = "#FFFFFF";

   /**
    * Background Color.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    * 
    * @var      string
    */
   protected $_backgroundcolor = "#000000";

   /**
    * Font Path.
    *
    * Path to a custom font file in TTF format.
    * 
    * @var      string
    */
   protected $_fontpath = '';

   /**
    * Font size in pixels.
    *
    * @var integer
    */
   protected $_fontsize = 10;

   /**
    * Interface to a dataset containing rows of data to be used for this control.
    *
    * To make it work, you must also set {@link $_datafield} property with a proper value.
    *
    * @var Datasource
    */
   protected $_datasource = null;

   /**
    * Name of the field of the data from {@link $_datasource} to be used for the control.
    *
    * @var string
    */
   protected $_datafield = "";

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->Width = 250;
      $this->Height = 120;

      // Makes sure the framework knows that this component dumps binary image data.
      $this->ControlStyle = "csImageContent=1";
   }

   /**
    * {@inheritdoc}
    */
   function dumpContents()
   {
      if(($this->ControlState & csDesigning) == csDesigning)
      {

         $this->dumpBarcode();
      }
      else
      {
         if(($this->ControlState & csDesigning) != csDesigning)
         {
            if($this->hasValidDataField())
            {
               //The value to show on the field is the one from the table
               $text = $this->readDataFieldValue();
               $this->_text = $text;
               // dump no hidden fields since the label is read-only
            }
         }

         $key = md5($this->owner->Name . $this->Name . $this->Left . $this->Top . $this->Width . $this->Height);
         if(isset($text))
         {
            $key .= '&text_barcode=' . $text;
         }
         $url = $_SERVER['PHP_SELF'];
         $alt = $this->Name;
         echo "<img src=\"$url?bbarcode=$key\" width=\"$this->Width\" height=\"$this->Height\" id=\"$this->_name\" name=\"$this->_name\" alt=\"$alt\"  />";
      }
   }

   /**
    * Unserializes barcode from {@link input} and prints it.
    *
    * @see Persistent::unserialize()
    */
   function unserialize()
   {
      parent::unserialize();
      $key = md5($this->owner->Name . $this->Name . $this->Left . $this->Top . $this->Width . $this->Height);
      $bbarcode = $this->input->bbarcode;

      // Checks if the request is for this barcode.
      if((is_object($bbarcode)) && ($bbarcode->asString() == $key))
      {
         if(is_object($this->input->text_barcode))
         {
            $text = $this->input->text_barcode;
            $this->_text = $text->asString();
         }
         $this->dumpBarcode();
      }
   }

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
    * Generate a {@link Zend_Barcode} instance with current data and save it to {@link $_barcode}.
    */
   function createBarcode()
   {
      $barcodeOptions = array();
      $barcodeOptions['barHeight'] = $this->_barheight;
      $barcodeOptions['barThickWidth'] = $this->_thickwidth;
      $barcodeOptions['barThinWidth'] = $this->_thinwidth;
      $barcodeOptions['factor'] = $this->_factor;
      $barcodeOptions['foreColor'] = strtoupper($this->_backgroundcolor);
      $barcodeOptions['backgroundColor'] = strtoupper($this->_textcolor);

      $barcodeOptions['orientation'] = $this->_orientation;

      if($this->_reversecolor == 'true' || $this->_reversecolor == 1)
      {
         $barcodeOptions['reverseColor'] = 1;
      }
      else
      {
         $barcodeOptions['reverseColor'] = 0;
      }

      if($this->_border == 'true' || $this->_border == 1)
      {
         $barcodeOptions['withBorder'] = 1;
      }
      else
      {
         $barcodeOptions['withBorder'] = 0;
      }

      if($this->_quietzones == 'true' || $this->_quietzones == 1)
      {
         $barcodeOptions['withQuietZones'] = 1;
      }
      else
      {
         $barcodeOptions['withQuietZones'] = 0;
      }

      if($this->_drawtext == 'true' || $this->_drawtext == 1)
      {
         $barcodeOptions['drawText'] = 1;
      }
      else
      {
         $barcodeOptions['drawText'] = 0;
      }

      if($this->_stretchtext == 'true' || $this->_stretchtext == 1)
      {
         $barcodeOptions['stretchText'] = 1;
      }
      else
      {
         $barcodeOptions['stretchText'] = 0;
      }

      if($this->_checksum == 'true' || $this->_checksum == 1)
      {
         $barcodeOptions['withChecksum'] = 1;
      }
      else
      {
         $barcodeOptions['withChecksum'] = 0;
      }

      if($this->_checksumintext == 'true' || $this->_checksumintext == 1)
      {
         $barcodeOptions['withChecksumInText'] = 1;
      }
      else
      {
         $barcodeOptions['withChecksumInText'] = 0;
      }

      if($this->_fontpath == '')
      {
         $barcodeOptions['font'] = RPCL_FS_PATH . '/Zend/fonts/Vera.ttf';
      }
      else
      {
         $barcodeOptions['font'] = $this->_fontpath;
      }

      $barcodeOptions['fontSize'] = $this->_fontsize;

      $barcodeOptions['text'] = $this->_text;

      $barcode = "";
      switch($this->_type)
      {

         case btCode128:
            $barcode = 'code128';
            break;

         case btCode25:
            $barcode = 'code25';
            break;

         case btCode25i:
            $barcode = 'code25interleaved';
            break;

         case btEAN2:
            $barcode = 'ean2';
            break;

         case btEAN5:
            $barcode = 'ean5';
            break;

         case btEAN8:
            $barcode = 'ean8';
            break;

         case btEAN13:
            $barcode = 'ean13';
            break;

         case btCode39:
            $barcode = 'code39';
            break;

         case btIdentcode:
            $barcode = 'identcode';
            break;

         case btITF14:
            $barcode = 'itf14';
            break;

         case btLeitcode:
            $barcode = 'leitcode';
            break;

         case btPlanet:
            $barcode = 'planet';
            break;

         case btPostnet:
            $barcode = 'postnet';
            break;

         case btRoyalmail:
            $barcode = 'royalmail';
            break;

         case btUPCA:
            $barcode = 'upca';
            break;

         case btUPCE:
            $barcode = 'upce';
            break;
      }

      $renderOptions = array();
      switch($this->_rendertype)
      {
         case rtImage:
            $render = 'image';

            switch($this->_imagetype)
            {
               case itPNG:
                  $renderOptions['imageType'] = 'png';

                  break;
               case itJPEG:
                  $renderOptions['imageType'] = 'jpeg';

                  break;
               case itJPG:
                  $renderOptions['imageType'] = 'jpg';

                  break;
               case itGIF:
                  $renderOptions['imageType'] = 'gif';

                  break;
            }
            break;

         /*case rtSVG:
            $render = 'svg';
            break;
         case rtPDF:

            $render = 'pdf';
            break;           */
      }

      switch($this->_horizontalposition)
      {
         case hpLeft:
            $renderOptions['horizontalPosition'] = 'left';
            break;
         case hpCenter:
            $renderOptions['horizontalPosition'] = 'center';
            break;
         case hpRight:
            $renderOptions['horizontalPosition'] = 'right';
            break;
      }

      switch($this->_verticalposition)
      {
         case vpTop:
            $renderOptions['verticalPosition'] = 'top';
            break;
         case vpMiddle:
            $renderOptions['verticalPosition'] = 'middle';
            break;
         case vpBottom:
            $renderOptions['verticalPosition'] = 'bottom';
            break;
      }

      $renderOptions['leftOffset'] = $this->_leftoffset;
      $renderOptions['topOffset'] = $this->_topoffset;
      $renderOptions['moduleSize'] = $this->_modulesize;
      if($this->_automaticrendererror == 'true' || $this->_automaticrendererror == 1)
      {
         $renderOptions['automaticRenderError'] = 1;
      }
      else
      {
         $renderOptions['automaticRenderError'] = 0;
      }

      $renderOptions['width'] = $this->_width;
      $renderOptions['height'] = $this->_height;

      $this->_barcode = Zend_Barcode::factory($barcode, $render, $barcodeOptions, $renderOptions);
   }

   /**
    * Render barcode alone.
    *
    * This renders the barcode as a single file user can download or view.
    */
   function dumpBarcode()
   {
      header("Content-type: image/png");
      // Tries to prevent the browser from caching the image
      header("Pragma: no-cache");
      header("Cache-Control: no-cache, must-revalidate");// HTTP/1.1
      header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");// Date in the past

      $this->createBarcode();
      $this->_barcode->render();
      exit();
   }

   // Font Path

   /**
    * Getter method for {@link $_fontpath}.
    *
    * @return   string  {@link $_fontpath}
    */
   function getFontPath()    {return $this->_fontpath;}

   /**
    * Setter method for {@link $_fontpath}.
    *
    * @param    string  $value
    */
   function setFontPath($value)    {$this->_fontpath = $value;}

   /**
    * Getter for {@link $_fontpath}’s default value.
    *
    * @return   string  '/fonts/Vera.ttf'
    */
   function defaultFontPath()    {return '/fonts/Vera.ttf';}

   // Font Size

   /**
    * Getter method for {@link $_fontsize}.
    *
    * @return   integer {@link $_fontsize}
    */
   function getFontSize()    {return $this->_fontsize;}

   /**
    * Setter method for {@link $_fontsize}.
    *
    * @param    integer $value
    */
   function setFontSize($value)    {$this->_fontsize = $value;}

   /**
    * Getter for {@link $_fontsize}’s default value.
    *
    * @return   integer 10
    */
   function defaultFontSize()    {return 10;}

   // Namespace

   /**
    * Getter method for {@link $_namespace}.
    *
    * @return   string  {@link $_namespace}
    */
   function getNamespace()    {return $this->_namespace;}

   /**
    * Setter method for {@link $_namespace}.
    *
    * @param    string  $value
    */
   function setNamespace($value)    {$this->_namespace = $value;}

   /**
    * Getter for {@link $_namespace}’s default value.
    *
    * @return   string  "ZBarcode"
    */
   function defaultNamespace()    {return "ZBarcode";}

   // Bar Height

   /**
    * Getter method for {@link $_barheight}.
    *
    * @return   integer {@link $_barheight}
    */
   function getBarHeight()    {return $this->_barheight;}

   /**
    * Setter method for {@link $_barheight}.
    *
    * @param    integer $value
    */
   function setBarHeight($value)    {$this->_barheight = $value;}

   /**
    * Getter for {@link $_barheight}’s default value.
    *
    * @return   integer 50
    */
   function defaultBarHeight()    {return 50;}

   // Thick Width

   /**
    * Getter method for {@link $_thickwidth}.
    *
    * @return   integer {@link $_thickwidth}
    */
   function getThickWidth()    {return $this->_thickwidth;}

   /**
    * Setter method for {@link $_thickwidth}.
    *
    * @param    integer $value
    */
   function setThickWidth($value)    {$this->_thickwidth = $value;}

   /**
    * Getter for {@link $_thickwidth}’s default value.
    *
    * @return   integer 3
    */
   function defaulThickWidth()    {return 3;}

   // Thin Width

   /**
    * Getter method for {@link $_thinwidth}.
    *
    * @return   integer {@link $_thinwidth}
    */
   function getThinWidth()    {return $this->_thinwidth;}

   /**
    * Setter method for {@link $_thinwidth}.
    *
    * @param    integer $value
    */
   function setThinWidth($value)    {$this->_thinwidth = $value;}

   /**
    * Getter for {@link $_thinwidth}’s default value.
    *
    * @return   integer 1
    */
   function defaultThinWidth()    {return 1;}

   // Factor

   /**
    * Getter method for {@link $_factor}.
    *
    * @return   integer {@link $_factor}
    */
   function getFactor()    {return $this->_factor;}

   /**
    * Setter method for {@link $_factor}.
    *
    * @param    integer $value
    */
   function setFactor($value)    {$this->_factor = $value;}

   /**
    * Getter for {@link $_factor}’s default value.
    *
    * @return   integer 1
    */
   function defaultFactor()    {return 1;}

   // Reverse Color

   /**
    * Getter method for {@link $_reversecolor}.
    *
    * @return   string  {@link $_reversecolor}
    */
   function getReverseColor()    {return $this->_reversecolor;}

   /**
    * Setter method for {@link $_reversecolor}.
    *
    * @param    string  $value
    */
   function setReverseColor($value)    {$this->_reversecolor = $value;}

   /**
    * Getter for {@link $_reversecolor}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultReverseColor()    {return "false";}

   // Orientation

   /**
    * Getter method for {@link $_orientation}.
    *
    * @return   integer {@link $_orientation}
    */
   function getOrientation()    {return $this->_orientation;}

   /**
    * Setter method for {@link $_orientation}.
    *
    * @param    integer $value
    */
   function setOrientation($value)    {$this->_orientation = $value;}

   /**
    * Getter for {@link $_orientation}’s default value.
    *
    * @return   integer 0
    */
   function defaultOrientation()    {return 0;}

   // Border

   /**
    * Getter method for {@link $_border}.
    *
    * @return   string  {@link $_border}
    */
   function getBorder()    {return $this->_border;}

   /**
    * Setter method for {@link $_border}.
    *
    * @param    string  $value
    */
   function setBorder($value)    {$this->_border = $value;}

   /**
    * Getter for {@link $_border}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultBorder()    {return "false";}

   // Quiet Zones

   /**
    * Getter method for {@link $_quietzones}.
    *
    * @return   string  {@link $_quietzones}
    */
   function getQuietZones()    {return $this->_quietzones;}

   /**
    * Setter method for {@link $_quietzones}.
    *
    * @param    string  $value
    */
   function setQuietZones($value)    {$this->_quietzones = $value;}

   /**
    * Getter for {@link $_quietzones}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultQuietZones()    {return "true";}

   // Draw Text

   /**
    * Getter method for {@link $_drawtext}.
    *
    * @return   string  {@link $_drawtext}
    */
   function getDrawText()    {return $this->_drawtext;}

   /**
    * Setter method for {@link $_drawtext}.
    *
    * @param    string  $value
    */
   function setDrawText($value)    {$this->_drawtext = $value;}

   /**
    * Getter for {@link $_drawtext}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultDrawText()    {return "true";}

   // Stretch Text

   /**
    * Getter method for {@link $_stretchtext}.
    *
    * @return   string  {@link $_stretchtext}
    */
   function getStretchText()    {return $this->_stretchtext;}

   /**
    * Setter method for {@link $_stretchtext}.
    *
    * @param    string  $value
    */
   function setStretchText($value)    {$this->_stretchtext = $value;}

   /**
    * Getter for {@link $_stretchtext}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultStretchText()    {return "false";}

   // Checksum

   /**
    * Getter method for {@link $_checksum}.
    *
    * @return   string  {@link $_checksum}
    */
   function getChecksum()    {return $this->_checksum;}

   /**
    * Setter method for {@link $_checksum}.
    *
    * @param    string  $value
    */
   function setChecksum($value)    {$this->_checksum = $value;}

   /**
    * Getter for {@link $_checksum}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultChecksum()    {return "false";}

   // Checksum In Text

   /**
    * Getter method for {@link $_checksumintext}.
    *
    * @return   string  {@link $_checksumintext}
    */
   function getChecksumInText()    {return $this->_checksumintext;}

   /**
    * Setter method for {@link $_checksumintext}.
    *
    * @param    string  $value
    */
   function setChecksumInText($value)    {$this->_checksumintext = $value;}

   /**
    * Getter for {@link $_checksumintext}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultChecksumInText()    {return "false";}

   // Text

   /**
    * Getter method for {@link $_text}.
    *
    * @return   string  {@link $_text}
    */
   function getText()    {return $this->_text;}

   /**
    * Setter method for {@link $_text}.
    *
    * @param    string  $value
    */
   function setText($value)    {$this->_text = $value;}

   /**
    * Getter for {@link $_text}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultText()    {return "";}

   // Left Offset

   /**
    * Getter method for {@link $_leftoffset}.
    *
    * @return   integer {@link $_leftoffset}
    */
   function getLeftOffset()    {return $this->_leftoffset;}

   /**
    * Setter method for {@link $_leftoffset}.
    *
    * @param    integer $value
    */
   function setLeftOffset($value)    {$this->_leftoffset = $value;}

   /**
    * Getter for {@link $_leftoffset}’s default value.
    *
    * @return   integer 0
    */
   function defaultLeftOffset()    {return 0;}

   // Top Offset

   /**
    * Getter method for {@link $_topoffset}.
    *
    * @return   integer {@link $_topoffset}
    */
   function getTopOffset()    {return $this->_topoffset;}

   /**
    * Setter method for {@link $_topoffset}.
    *
    * @param    integer $value
    */
   function setTopOffset($value)    {$this->_topoffset = $value;}

   /**
    * Getter for {@link $_topoffset}’s default value.
    *
    * @return   integer 0
    */
   function defaultTopOffset()    {return 0;}

   // Automatic Render Error

   /**
    * Getter method for {@link $_automaticrendererror}.
    *
    * @return   string  {@link $_automaticrendererror}
    */
   function getAutomaticRenderError()    {return $this->_automaticrendererror;}

   /**
    * Setter method for {@link $_automaticrendererror}.
    *
    * @param    string  $value
    */
   function setAutomaticRenderError($value)    {$this->_automaticrendererror = $value;}

   /**
    * Getter for {@link $_automaticrendererror}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultAutomaticRenderError()    {return "true";}

   // Module Size

   /**
    * Getter method for {@link $_modulesize}.
    *
    * @return   float   {@link $_modulesize}
    */
   function getModuleSize()    {return $this->_modulesize;}

   /**
    * Setter method for {@link $_modulesize}.
    *
    * @param    float   $value
    */
   function setModuleSize($value)    {$this->_modulesize = $value;}

   /**
    * Getter for {@link $_modulesize}’s default value.
    *
    * @return   float   1
    */
   function defaultModuleSize()    {return 1;}

   // Type

   /**
    * Getter method for {@link $_type}.
    *
    * @return   string  {@link $_type}
    */
   function getType()    {return $this->_type;}

   /**
    * Setter method for {@link $_type}.
    *
    * @param    string  $value
    */
   function setType($value)    {$this->_type = $value;}

   /**
    * Getter for {@link $_type}’s default value.
    *
    * @return   string  btCode25
    */
   function defaultType()    {return btCode25;}

   // Image Type

   /**
    * Getter method for {@link $_imagetype}.
    *
    * @return   string  {@link $_imagetype}
    */
   function getImageType()    {return $this->_imagetype;}

   /**
    * Setter method for {@link $_imagetype}.
    *
    * @param    string  $value
    */
   function setImageType($value)    {$this->_imagetype = $value;}

   /**
    * Getter for {@link $_imagetype}’s default value.
    *
    * @return   string  itPNG
    */
   function defaultImageType()    {return itPNG;}

   // Render Type

   /**
    * Getter method for {@link $_rendertype}.
    *
    * @return   string  {@link $_rendertype}
    */
   function getRenderType()    {return $this->_rendertype;}

   /**
    * Setter method for {@link $_rendertype}.
    *
    * @param    string  $value
    */
   function setRenderType($value)    {$this->_rendertype = $value;}

   /**
    * Getter for {@link $_rendertype}’s default value.
    *
    * @return   string  rtImage
    */
   function defaultRenderType()    {return rtImage;}

   // Horizontal Position

   /**
    * Getter method for {@link $_horizontalposition}.
    *
    * @return   string  {@link $_horizontalposition}
    */
   function getHorizontalPosition()    {return $this->_horizontalposition;}

   /**
    * Setter method for {@link $_horizontalposition}.
    *
    * @param    string  $value
    */
   function setHorizontalPosition($value)    {$this->_horizontalposition = $value;}

   /**
    * Getter for {@link $_horizontalposition}’s default value.
    *
    * @return   string  hpLeft
    */
   function defaultHorizontalPosition()    {return hpCenter;}

   // Vertical Position

   /**
    * Getter method for {@link $_verticalposition}.
    *
    * @return   string  {@link $_verticalposition}
    */
   function getVerticalPosition()    {return $this->_verticalposition;}

   /**
    * Setter method for {@link $_verticalposition}.
    *
    * @param    string  $value
    */
   function setVerticalPosition($value)    {$this->_verticalposition = $value;}

   /**
    * Getter for {@link $_verticalposition}’s default value.
    *
    * @return   string   vpTop
    */
   function defaultVerticalPosition()    {return vpTop;}

   // Background Color

   /**
    * Getter method for {@link $_backgroundcolor}.
    *
    * @return   string  {@link $_backgroundcolor}
    */
   function getBackgroundColor()    {return $this->_backgroundcolor;}

   /**
    * Setter method for {@link $_backgroundcolor}.
    *
    * @param    string  $value
    */
   function setBackgroundColor($value)    {$this->_backgroundcolor = $value;}

   /**
    * Getter for {@link $_backgroundcolor}’s default value.
    *
    * @return   string  "#000000"
    */
   function defaultBackgroundColor()    {return "#000000";}

   // Text Color

   /**
    * Getter method for {@link $_textcolor}.
    *
    * @return   string  {@link $_textcolor}
    */
   function getTextColor()    {return $this->_textcolor;}

   /**
    * Setter method for {@link $_textcolor}.
    *
    * @param    string  $value
    */
   function setTextColor($value)    {$this->_textcolor = $value;}

   /**
    * Getter for {@link $_textcolor}’s default value.
    *
    * @return   string  "#FFFFFF"
    */
   function defaultTextColor()    {return "#FFFFFF";}
}

?>