<?php

/**
 * Zend/zpdf.inc.php
 * 
 * Defines Zend Framework PDF component.
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
use_unit('Zend/framework/library/Zend/Pdf.php');

// Fonts

/**
 * Courier.
 * 
 * @const       fnCourier
 */
define('fnCourier', 'fnCourier');

/**
 * Courier, bold.
 * 
 * @const       fnCourierBold
 */
define('fnCourierBold', 'fnCourierBold');

/**
 * Courier, italic.
 * 
 * @const       fnCourierItalic
 */
define('fnCourierItalic', 'fnCourierItalic');

/**
 * Courier, bold and italic.
 * 
 * @const       fnCourierBoldItalic
 */
define('fnCourierBoldItalic', 'fnCourierBoldItalic');

/**
 * Times New Roman.
 * 
 * @const       fnTimes
 */
define('fnTimes', 'fnTimes');

/**
 * Times New Roman, bold.
 * 
 * @const       fnTimesBold
 */
define('fnTimesBold', 'fnTimesBold');

/**
 * Times New Roman, italic.
 * 
 * @const       fnTimesItalic
 */
define('fnTimesItalic', 'fnTimesItalic');

/**
 * asdfTimes New Roman, bold and italic.
 * 
 * @const       fnTimesBoldItalic
 */
define('fnTimesBoldItalic', 'fnTimesBoldItalic');

/**
 * Helvetica.
 * 
 * @const       fnHelvetica
 */
define('fnHelvetica', 'fnHelvetica');

/**
 * Helvetica, bold.
 * 
 * @const       fnHelveticaBold
 */
define('fnHelveticaBold', 'fnHelveticaBold');

/**
 * Helvetica, italic.
 * 
 * @const       fnHelveticaItalic
 */
define('fnHelveticaItalic', 'fnHelveticaItalic');

/**
 * Helvetica, bold and italic.
 * 
 * @const       fnHelveticaBoldItalic
 */
define('fnHelveticaBoldItalic', 'fnHelveticaBoldItalic');

/**
 * Symbol.
 * 
 * @const       fnSymbol
 */
define('fnSymbol', 'fnSymbol');

/**
 * ZapfDingbats.
 * 
 * @const       fnZapfdingbats
 */
define('fnZapfdingbats', 'fnZapfdingbats');

// Page Dimensions And Orientation

/**
 * A4, portrait.
 * 
 * @const       psA4
 */
define('psA4', 'psA4');

/**
 * A4, landscape.
 * 
 * @const       psA4Landscape
 */
define('psA4Landscape', 'psA4Landscape');

/**
 * Letter, portrait.
 * 
 * @const       psLetter
 */
define('psLetter', 'psLetter');

/**
 * Letter, landscape.
 * 
 * @const       psLetterLandscape
 */
define('psLetterLandscape', 'psLetterLandscape');

/**
 * Component to generate PDF files.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.pdf.html Zend Framework Documentation
 */
class ZPdf extends Component
{

   /**
    * Zend Framework PDF instance.
    *
    * @internal
    *
    * @var      Zend_Pdf
    */
   private $_pdf = null;

   /**
    * Zend Framework PDF Style instance.
    *
    * @internal
    *
    * @var      Zend_Pdf_Style
    */
   private $_style = null;

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   // Title

   /**
    * PDF document title.
    *
    * @var      string
    */
   protected $_title = '';

   /**
    * Getter method for {@link $_title}.
    *
    * @return   string  {@link $_title}
    */
   function getTitle()    {return $this->_title;}

   /**
    * Setter method for {@link $_title}.
    *
    * @param    string  $value
    */
   function setTitle($value)    {$this->_title = $value;}

   /**
    * Getter for {@link $_title}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultTitle()    {return '';}

   // Author

   /**
    * PDF document author.
    *
    * @var      string
    */
   protected $_author = '';

   /**
    * Getter method for {@link $_author}.
    *
    * @return   string  {@link $_author}
    */
   function getAuthor()    {return $this->_author;}

   /**
    * Setter method for {@link $_author}.
    *
    * @param    string  $value
    */
   function setAuthor($value)    {$this->_author = $value;}

   /**
    * Getter for {@link $_author}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultAuthor()    {return '';}

   // Subject

   /**
    * PDF document subject.
    *
    * @var      string
    */
   protected $_subject = '';

   /**
    * Getter method for {@link $_subject}.
    *
    * @return   string  {@link $_subject}
    */
   function getSubject()    {return $this->_subject;}

   /**
    * Setter method for {@link $_subject}.
    *
    * @param    string  $value
    */
   function setSubject($value)    {$this->_subject = $value;}

   /**
    * Getter for {@link $_subject}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSubject()    {return '';}

   // Keywords

   /**
    * Keywords associated to the PDF document.
    *
    * You can think of them as “tags”.
    *
    * @var      string
    */
   protected $_keywords = '';

   /**
    * Getter method for {@link $_keywords}.
    *
    * @return   string  {@link $_keywords}
    */
   function getKeywords()    {return $this->_keywords;}

   /**
    * Setter method for {@link $_keywords}.
    *
    * @param    string  $value
    */
   function setKeywords($value)    {$this->_keywords = $value;}

   /**
    * Getter for {@link $_keywords}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultKeywords()    {return '';}

   // Creator

   /**
    * Name of the application which generated the original document.
    *
    * This property only applies in case the file was converted to PDF from a different format.
    *
    * @var      string
    */
   protected $_creator = '';

   /**
    * Getter method for {@link $_creator}.
    *
    * @return   string  {@link $_creator}
    */
   function getCreator()    {return $this->_creator;}

   /**
    * Setter method for {@link $_creator}.
    *
    * @param    string  $value
    */
   function setCreator($value)    {$this->_creator = $value;}

   /**
    * Getter for {@link $_creator}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultCreator()    {return '';}

   // Producer

   /**
    * Name of the application which converted the original document into PDF format.
    *
    * This property only applies in case the file was converted to PDF from a different format.
    *
    * @var      string
    */
   protected $_producer = '';

   /**
    * Getter method for {@link $_producer}.
    *
    * @return   string  {@link $_producer}
    */
   function getProducer()    {return $this->_producer;}

   /**
    * Setter method for {@link $_producer}.
    *
    * @param    string  $value
    */
   function setProducer($value)    {$this->_producer = $value;}

   /**
    * Getter for {@link $_producer}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultProducer()    {return '';}

   // Trapped

   /**
    * Whether or not the document has been modified to include trapping information.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_trapped = 'false';

   /**
    * Getter method for {@link $_trapped}.
    *
    * @return   string  {@link $_trapped}
    */
   function getTrapped()    {return $this->_trapped;}

   /**
    * Setter method for {@link $_trapped}.
    *
    * @param    string  $value
    */
   function setTrapped($value)    {$this->_trapped = $value;}

   /**
    * Getter for {@link $_trapped}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultTrapped()    {return 'false';}

   // Fill Color

   /**
    * PDF document fill color.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    *
    * @var      string
    */
   protected $_stylefillcolor = '#000000';

   /**
    * Getter method for {@link $_stylefillcolor}.
    *
    * @return   string  {@link $_stylefillcolor}
    */
   function getStyleFillColor()    {return $this->_stylefillcolor;}

   /**
    * Setter method for {@link $_stylefillcolor}.
    *
    * @param    string  $value
    */
   function setStyleFillColor($value)    {$this->_stylefillcolor = $value;}

   /**
    * Getter for {@link $_stylefillcolor}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultStyleFillColor()    {return '';}

   // Line Color

   /**
    * PDF document line color.
    *
    * Its value must be a {@link en.wikipedia.org/wiki/Web_colors web color}.
    *
    * @var      string
    */
   protected $_stylelinecolor = '#000000';

   /**
    * Getter method for {@link $_stylelinecolor}.
    *
    * @return   string  {@link $_stylelinecolor}
    */
   function getStyleLineColor()    {return $this->_stylelinecolor;}

   /**
    * Setter method for {@link $_stylelinecolor}.
    *
    * @param    string  $value
    */
   function setStyleLineColor($value)    {$this->_stylelinecolor = $value;}

   /**
    * Getter for {@link $_stylelinecolor}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultStyleLineColor()    {return '';}

   // Line Width

   /**
    * PDF document line width.
    *
    * @var      integer
    */
   protected $_stylelinewidth = 2;

   /**
    * Getter method for {@link $_stylelinewidth}.
    *
    * @return   integer {@link $_stylelinewidth}
    */
   function getStyleLineWidth()    {return $this->_stylelinewidth;}

   /**
    * Setter method for {@link $_stylelinewidth}.
    *
    * @param    integer $value
    */
   function setStyleLineWidth($value)    {$this->_stylelinewidth = $value;}

   /**
    * Getter for {@link $_stylelinewidth}’s default value.
    *
    * @return   integer 2
    */
   function defaultStyleLineWidth()    {return 2;}

   // Line Dashing

   /**
    * PDF document line dashing pattern.
    *
    * It’s an array of numeric values. You can generate it with an {@link array()} call following
    * this syntax: <code>array($on_length, $off_length, $on_length, $off_length, ...)</code>.
    *
    * @var      array
    */
   protected $_stylelinedhasing = array();

   /**
    * Getter method for {@link $_stylelinedhasing}.
    *
    * @return   array   {@link $_stylelinedhasing}
    */
   function getStyleLineDhasing()    {return $this->_stylelinedhasing;}

   /**
    * Setter method for {@link $_stylelinedhasing}.
    *
    * @param    array   $value
    */
   function setStyleLineDhasing($value)    {$this->_stylelinedhasing = $value;}

   /**
    * Getter for {@link $_stylelinedhasing}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultStyleLineDhasing()    {return array();}

   // Font

   /**
    * PDF document font.
    *
    * Possible values are: {@link fnCourier}, {@link fnCourierBold}, {@link fnCourierBoldItalic},
    * {@link fnCourierItalic}, {@link fnHelvetica}, {@link fnHelveticaBold},
    * {@link fnHelveticaBoldItalic}, {@link fnHelveticaItalic}, {@link fnSymbol}, {@link fnTimes},
    * {@link fnTimesBold}, {@link fnTimesBoldItalic}, {@link fnTimesItalic}, or
    * {@link fnZapfdingbats}.
    *
    * @var      string
    */
   protected $_stylefontname = fnCourier;

   /**
    * Getter method for {@link $_stylefontname}.
    *
    * @return   string  {@link $_stylefontname}
    */
   function getStyleFontName()    {return $this->_stylefontname;}

   /**
    * Setter method for {@link $_stylefontname}.
    *
    * @param    string  $value
    */
   function setStyleFontName($value)    {$this->_stylefontname = $value;}

   /**
    * Getter for {@link $_stylefontname}’s default value.
    *
    * @return   string  {@link fnCourier}
    */
   function defaultStyleFontName()    {return fnCourier;}

   // Font Size

   /**
    * PDF document font size.
    *
    * @var      string
    */
   protected $_stylefontsize = '10';

   /**
    * Getter method for {@link $_stylefontsize}.
    *
    * @return   string  {@link $_stylefontsize}
    */
   function getStyleFontSize()    {return $this->_stylefontsize;}

   /**
    * Setter method for {@link $_stylefontsize}.
    *
    * @param    string  $value
    */
   function setStyleFontSize($value)    {$this->_stylefontsize = $value;}

   /**
    * Getter for {@link $_stylefontsize}’s default value.
    *
    * @return   string  10px ('10')
    */
   function defaultStyleFontSize()    {return '10';}

   /**
    * Generates an style object with defined settings, and gives {@link $_style} that value.
    *
    * @internal
    */
   function _createStyle()
   {
      $this->_style = new Zend_Pdf_Style();

      if($this->_stylefillcolor != '')
      {
         $this->_style->setFillColor(new Zend_Pdf_Color_Html($this->_stylefillcolor));
      }

      if($this->_stylelinecolor != '')
      {
         $this->_style->setLineColor(new Zend_Pdf_Color_Html($this->_stylelinecolor));
      }

      if($this->_stylelinewidth != '')
      {
         $this->_style->setLineWidth($this->_stylelinewidth);
      }

      if($this->_stylelinedhasing != '')
      {
         $this->_style->setLineDashingPattern($this->_stylelinedhasing);
      }

      switch($this->_stylefontname)
      {
         case fnCourier:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_COURIER);
            break;
         case fnCourierBold:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_COURIER_BOLD);
            break;
         case fnCourierItalic:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_COURIER_ITALIC);
            break;
         case fnCourierBoldItalic:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_COURIER_BOLD_ITALIC);
            break;
         case fnTimes:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_TIMES);
            break;
         case fnTimesBold:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_TIMES_BOLD);
            break;
         case fnTimesItalic:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_TIMES_ITALIC);
            break;
         case fnTimesBoldItalic:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_TIMES_BOLD_ITALIC);
            break;
         case fnHelvetica:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA);
            break;
         case fnHelveticaBold:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA_BOLD);
            break;
         case fnHelveticaItalic:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA_ITALIC);
            break;
         case fnHelveticaBoldItalic:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA_BOLD_ITALIC);
            break;
         case fnSymbol:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_SYMBOL);
            break;
         case fnZapfdingbats:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_ZAPFDINGBATS);
            break;
      }

      $this->_style->setFont($font, $this->_stylefontsize);
   }

   /**
    * Initializes a PDF component.
    *
    * {@internal Generator for both {@link $_pdf} and {@link $_style}.}}
    */
   function createPdf()
   {
      $this->_pdf = new Zend_Pdf();
      $this->_createStyle();
   }

   /**
    * Loads a PDF document from a file.
    *
    * This method is equivalent to {@link createPdf()}, only that it lets you define the initial PDF
    * file to work with.
    *
    * @param    string  $filename       Path to a PDF file to be loaded.
    * @param    integer $revision       Optional PDF document revision to be loaded (PDF format
    *                                   supports incremental document update). Latest revision will
    *                                   be used by default.
    */
   function loadPdf($filename, $revision = null)
   {
      $this->_pdf = Zend_Pdf::load($filename, $revision);
      $this->_createStyle();
   }

   /**
    * Saves PDF document to given location.
    *
    * @param    string  $filename       Path where the file must be saved.
    * @param    boolean $updateOnly     Optional. Whether the document is supposed to be a new
    *                                   revision for an existing PDF document in provided location,
    *                                   or if it should just replace any existing document in that
    *                                   location instead. It default to false (existing file would
    *                                   be overwritten).
    */
   function savePdf($filename, $updateOnly = false)
   {
      if($this->_title != '')
      {
         $this->_pdf->properties['Title'] = $this->_title;
      }

      if($this->_author != '')
      {
         $this->_pdf->properties['Author'] = $this->_author;
      }

      if($this->_subject != '')
      {
         $this->_pdf->properties['Subject'] = $this->_subject;
      }

      if($this->_keywords != '')
      {
         $this->_pdf->properties['Keywords'] = $this->_keywords;
      }

      if($this->_creator != '')
      {
         $this->_pdf->properties['Creator'] = $this->_creator;
      }

      if($this->_producer != '')
      {
         $this->_pdf->properties['Producer'] = $this->_producer;
      }

      $this->_pdf->save($filename, $updateOnly);
   }

   /**
    * Returns PDF document as a string.
    *
    * @return   string
    */
   function renderPdf()
   {
      return $this->_pdf->render();
   }

   /**
    * Returns the number of pages in the PDF document.
    *
    * @return   integer
    */
   function numberPages()
   {
      return (count($this->_pdf->pages));
   }

   /**
    * Clones an existing page.
    *
    * It returns the position where the new page was inserted.
    *
    * @param    integer $indexClone     Number of the page to be cloned.
    * @return   integer
    */
   function clonePage($indexClone)
   {
      $template = $this->_pdf->pages[$indexClone];

      $page = new Zend_Pdf_Page($template);

      if( ! $page->getStyle())
      {
         $page->setStyle($this->_style);
      }

      $this->_pdf->pages[] = $page;
      return (count($this->_pdf->pages) - 1);
   }

   /**
    * Creates a new page in given position within the PDF document.
    *
    * It returns the position where the new page was inserted.
    *
    * @param    integer|string  $typeorwidth    Page width, either a predefined page type
    *                                           ({@link psA4}, {@link psA4Landscape},
    *                                           {@link psLetter}, or {@link psLetterLandscape}), or
    *                                           an integer value for a width.
    * @param    integer         $height         Page height.
    * @return   integer
    */
   function createPage($typeorwidth = psA4, $height = '')
   {
      if($height != '' && is_int($typeorwidth))
      {

         $page = new Zend_Pdf_Page($typeorwidth, $height);
         $page->setStyle($this->_style);
         $this->_pdf->pages[] = $page;
         return (count($this->_pdf->pages) - 1);
      }
      else
      {
         $option = '';
         switch($typeorwidth)
         {
            case psA4:
               $option = Zend_Pdf_Page::SIZE_A4;
               break;
            case psA4Landscape:
               $option = Zend_Pdf_Page::SIZE_A4_LANDSCAPE;
               break;
            case psLetter:
               $option = Zend_Pdf_Page::SIZE_LETTER;
               break;
            case psLetterLandscape:
               $option = Zend_Pdf_Page::SIZE_LETTER_LANDSCAPE;
               break;
         }

         if($option != '')
         {
            $page = new Zend_Pdf_Page($option);

            $page->setStyle($this->_style);
            $this->_pdf->pages[] = $page;
            return (count($this->_pdf->pages) - 1);
         }
         else
         {
            return -1;
         }
      }
   }

   /**
    * Retrieves the width in points of a page in given position.
    *
    * @param    integer $indexPage      Number of the page.
    * @return   float
    */
   function pageWidth($indexPage)
   {
      $page = $this->_pdf->pages[$indexPage];

      return $page->getWidth();
   }

   /**
    * Retrieves the height in points of a page in given position.
    *
    * @param    integer $indexPage      Number of the page.
    * @return   float
    */
   function pageHeight($indexPage)
   {
      $page = $this->_pdf->pages[$indexPage];

      return $page->getHeight();
   }

   /**
    * Creates a color using gray scale.
    *
    * @param    float   $grayLevel      Gray scale value between 0.0 and 1.0.
    * @return   Zend_Pdf_Color_GrayScale
    */
   function colorGrayscale($grayLevel)
   {
      $color = new Zend_Pdf_Color_GrayScale($grayLevel);
      return $color;
   }

   /**
    * Creates a color using RGB.
    *
    * @param    integer $r      Red value between 0.0 and 1.0.
    * @param    integer $g      Green value between 0.0 and 1.0.
    * @param    integer $b      Blue value between 0.0 and 1.0.
    *
    * @return   Zend_Pdf_Color_Rgb
    */
   function colorRGB($r, $g, $b)
   {
      $color = new Zend_Pdf_Color_Rgb($r, $g, $b);
      return $color;
   }

   /**
    * Creates a color using CYMK.
    *
    * @param    float   $c      Cyan value between 0.0 and 1.0.
    * @param    float   $m      Magenta value between 0.0 and 1.0.
    * @param    float   $y      Yellow value between 0.0 and 1.0.
    * @param    float   $k      Black value between 0.0 and 1.0.
    *
    * @return Zend_Pdf_Color_Cmyk
    */
   function colorCMYK($c, $m, $y, $k)
   {
      $color = new Zend_Pdf_Color_Cmyk($c, $m, $y, $k);
      return $color;
   }

   /**
    * Creates a color from a {@link en.wikipedia.org/wiki/Web_colors web color}.
    *
    * @param    string  $color  Color.
    * @return   Zend_Pdf_Color_Html
    */
   function colorHTML($color)
   {
      $color = new Zend_Pdf_Color_Html($color);
      return $color;
   }

   /**
    * Returns a page from the PDF document in given position.
    *
    * If there is no page in given position, boolean false value will be returned instead.
    *
    * @param    integer $indexPage      Number of the page.
    * @return   boolean|Zend_Pdf_Page
    */
   function returnPage($indexPage)
   {
      if(isset($this->_pdf->pages[$indexPage]))
      {
         return $this->_pdf->pages[$indexPage];
      }
      else
      {
         return false;
      }
   }

   /**
    * Saves given page in given position withing the PDF document.
    *
    * @param    Zend_Pdf_Page   $page   Page.
    * @param    Integer         $index  Future number of the page.
    */
   function _savePage($page, $index)
   {
      $this->_pdf->pages[$index] = $page;
   }

   /**
    * Draws a line in given page.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    float   $x1             X coordinate for the origin point of the line.
    * @param    float   $y1             Y coordinate for the origin point of the line.
    * @param    float   $x2             X coordinate for the end point of the line.
    * @param    float   $y2             Y coordinate for the end point of the line.
    *
    */
   function drawLine($indexPage, $x1, $y1, $x2, $y2)
   {
      $page = $this->returnPage($indexPage);

      $page->drawLine($x1, $y1, $x2, $y2);

      $this->_savePage($page, $indexPage);
   }

   /**
    * Draws a rectangle in given page.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    float   $x1             X coordinate for the top-left point of the rectangle.
    * @param    float   $y1             Y coordinate for the top-left point of the rectangle.
    * @param    float   $x2             X coordinate for the bottom-right point of the rectangle.
    * @param    float   $y2             Y coordinate for the bottom-right point of the rectangle.
    * @param    integer $filltype       Optional fill type. You can select any of the following fill
    *                                   types for the rectangle:
    *                                   <ul>
    *                                     <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL_AND_STROKE}: Affects both rectangle fill and stroke.</li>
    *                                     <li>{@link Zend_Pdf_Page::SHAPE_DRAW_STROKE}: Affects only rectangle stroke.</li>
    *                                     <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL }: Affects only rectangle fill.</li>
    *                                   </ul>
    */
   function drawRectangle($indexPage, $x1, $y1, $x2, $y2, $filltype = Zend_Pdf_Page::SHAPE_DRAW_FILL_AND_STROKE)
   {
      $page = $this->returnPage($indexPage);

      $page->drawRectangle($x1, $y1, $x2, $y2, $filltype);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Draws a rectangle with rounded corners.
    *
    * radius is an integer representing radius of the four corners, or an array
    * of four integers representing the radius starting at top left, going
    * clockwise
    *
    * @param    integer         $indexPage      Number of the page.
    * @param    float           $x1             X coordinate for the top-left point of the rectangle.
    * @param    float           $y1             Y coordinate for the top-left point of the rectangle.
    * @param    float           $x2             X coordinate for the bottom-right point of the rectangle.
    * @param    float           $y2             Y coordinate for the bottom-right point of the rectangle.
    * @param    array|integer   $radius         Either an integer representing a common radius for
    *                                           the four corners, or an array with integer values for
    *                                           the radius of each corner in the following order: top-left,
    *                                           top-right, bottom-right, bottom-left.
    * @param    integer         $filltype       Optional fill type. You can select any of the following fill
    *                                           types for the rectangle:
    *                                           <ul>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL_AND_STROKE}: Affects both rectangle fill and stroke.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_STROKE}: Affects only rectangle stroke.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL }: Affects only rectangle fill.</li>
    *                                           </ul>
    */
   function drawRoundedRectangle($indexPage, $x1, $y1, $x2, $y2, $radius, $filltype = Zend_Pdf_Page::SHAPE_DRAW_FILL_AND_STROKE)
   {
      $page = $this->returnPage($indexPage);

      $page->drawRoundedRectangle($x1, $y1, $x2, $y2, $radius, $filltype);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Draws a polygon.
    *
    * @param    integer         $indexPage      Number of the page.
    * @param    array           $x              Float X coordinates for polygon vertices.
    * @param    array           $y              Float Y coordinates for polygon vertices.
    * @param    integer         $fillType       Optional fill type. You can select any of the following fill types:
    *                                           <ul>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL_AND_STROKE}: Affects both polygon fill and stroke.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_STROKE}: Affects only polygon stroke.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL }: Affects only polygon fill.</li>
    *                                           </ul>
    *                                           Polygon will be automatically closed if you choose an option affecting polygon fill.
    * @param    integer         $fillMethod     Optional fill method. You can select any of the following fill methods:
    *                                           <ul>
    *                                             <li>{@link Zend_Pdf_Page::FILL_METHOD_NON_ZERO_WINDING}: Non-zero winding method.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_STROKE}: Even-odd method.</li>
    *                                           </ul>
    */
   function drawPolygon($indexPage, $x, $y, $fillType = Zend_Pdf_Page::SHAPE_DRAW_FILL_AND_STROKE, $fillMethod = Zend_Pdf_Page::FILL_METHOD_NON_ZERO_WINDING)
   {
      $page = $this->returnPage($indexPage);

      $page->drawPolygon($x, $y, $fillType, $fillMethod);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Draws a circle.
    *
    * Depending on the amount of arguments you pass to the method, expected position for each
    * parameter might vary. These are the possible ways you can call it:
    * <code>
    * drawCircle($x, $y, $radius);
    * drawCircle($x, $y, $radius, $fillType);
    * drawCircle($x, $y, $radius, $startAngle, $endAngle);
    * drawCircle($x, $y, $radius, $startAngle, $endAngle, $fillType);
    * </code>
    *
    * Note result will not be a real circle, since PDF format only supports cubic Bezier curves. It
    * will be a great approximation, though. It differs from a real circle on a maximum radius of
    * 0.00026 (at PI/8, 3*PI/8, 5*PI/8, 7*PI/8, 9*PI/8, 11*PI/8, 13*PI/8 and 15*PI/8 angles). At 0,
    * PI/4, PI/2, 3*PI/4, PI, 5*PI/4, 3*PI/2 and 7*PI/4, it will be a tangent to a circle.
    *
    * @param    integer         $indexPage      Number of the page.
    * @param    float           $x              Central point X coordinate.
    * @param    float           $y              Central point Y coordinate.
    * @param    float           $radius         Radius.
    * @param    integer         $param4         Optional. As <code>$fillType</code>, you can select
    *                                           any of the following fill types:
    *                                           <ul>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL_AND_STROKE}: Affects both polygon fill and stroke.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_STROKE}: Affects only polygon stroke.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL }: Affects only polygon fill.</li>
    *                                           </ul>
    *                                           As <code>$startAngle</code>, it should be start angle in radians.
    * @param    mixed           $param5         Optional. End angle in radians.
    * @param    mixed           $param6         Optional fill type. You can select any of the following fill types:
    *                                           <ul>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL_AND_STROKE}: Affects both polygon fill and stroke.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_STROKE}: Affects only polygon stroke.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL }: Affects only polygon fill.</li>
    *                                           </ul>
    */
   function drawCircle($indexPage, $x, $y, $radius, $param4 = null, $param5 = null, $param6 = null)
   {
      $page = $this->returnPage($indexPage);

      $page->drawCircle($x, $y, $radius, $param4, $param5, $param6);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Draws an ellipse.
    *
    * Ellipse is defined though the fictional rectangle that contains it.
    *
    * Depending on the amount of arguments you pass to the method, expected position for each
    * parameter might vary. These are the possible ways you can call it:
    * <code>
    * drawEllipse($x1, $y1, $x2, $y2);
    * drawEllipse($x1, $y1, $x2, $y2, $fillType);
    * drawEllipse($x1, $y1, $x2, $y2, $startAngle, $endAngle);
    * drawEllipse($x1, $y1, $x2, $y2, $startAngle, $endAngle, $fillType);
    * </code>
    *
    * @param    integer         $indexPage      Number of the page.
    * @param    float           $x1             X coordinate for the top-left point of the rectangle.
    * @param    float           $y1             Y coordinate for the top-left point of the rectangle.
    * @param    float           $x2             X coordinate for the bottom-right point of the rectangle.
    * @param    float           $y2             Y coordinate for the bottom-right point of the rectangle.
    * @param    integer         $param5         Optional. As <code>$fillType</code>, you can select
    *                                           any of the following fill types:
    *                                           <ul>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL_AND_STROKE}: Affects both polygon fill and stroke.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_STROKE}: Affects only polygon stroke.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL }: Affects only polygon fill.</li>
    *                                           </ul>
    *                                           As <code>$startAngle</code>, it should be start angle in radians.
    * @param    mixed           $param6         Optional. End angle in radians.
    * @param    mixed           $param7         Optional fill type. You can select any of the following fill types:
    *                                           <ul>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL_AND_STROKE}: Affects both polygon fill and stroke.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_STROKE}: Affects only polygon stroke.</li>
    *                                             <li>{@link Zend_Pdf_Page::SHAPE_DRAW_FILL }: Affects only polygon fill.</li>
    *                                           </ul>
    */
   function drawEllipse($indexPage, $x1, $y1, $x2, $y2, $param5 = null, $param6 = null, $param7 = null)
   {
      $page = $this->returnPage($indexPage);
      $page->drawEllipse($x1, $y1, $x2, $y2, $param5, $param6, $param7);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Draws a line of text at given position.
    *
    * @param    integer         $indexPage      Number of the page.
    * @param    string          $text           Text.
    * @param    float           $x              Text position X coordinate.
    * @param    float           $y              Text position Y coordinate.
    * @param    string          $charEncoding   Optional text character encoding. Value from current
    *                                           locale will be used by default.
    * @throw    Zend_Pdf_Exception
    */
   function drawText($indexPage, $text, $x, $y, $charEncoding = '')
   {
      $page = $this->returnPage($indexPage);
      $page->drawText($text, $x, $y, $charEncoding);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Draws an image at given position.
    *
    * @param    integer                         $indexPage      Number of the page.
    * @param    string|Zend_Pdf_Resource_Image  $image          Image or path to one.
    * @param    float                           $x1             X coordinate for the top-left corner of the image.
    * @param    float                           $y1             Y coordinate for the top-left corner of the image.
    * @param    float                           $x2             X coordinate for the bottom-right corner of the image.
    * @param    float                           $y2             Y coordinate for the bottom-right corner of the image.
    */
   function drawImage($indexPage, $image, $x1, $y1, $x2, $y2)
   {
      $page = $this->returnPage($indexPage);
      if($image instanceof Zend_Pdf_Resource_Image)
      {
         $page->drawImage($image, $x1, $y1, $x2, $y2);
      }
      else
      {
         $imageResource = Zend_Pdf_Image::imageWithPath($image);
         $page->drawImage($imageResource, $x1, $y1, $x2, $y2);
      }

      $this->_savePage($page, $indexPage);
   }

   /**
    * Defines page line color.
    *
    * @param    integer         $indexPage      Number of the page.
    * @param    Zend_Pdf_Color  $color          Color.
    */
   function defineLineColor($indexPage, $color)
   {
      $page = $this->returnPage($indexPage);
      if($color instanceof Zend_Pdf_Color)
      {
         $page->setLineColor($color);
         $this->_savePage($page, $indexPage);
      }
   }

   /**
    * Returns page line color.
    *
    * @param    integer         $indexPage      Number of the page.
    * @return   Zend_Pdf_Color
    */
   function returnLineColor($indexPage)
   {
      $page = $this->returnPage($indexPage);
      return $page->getLineColor();
   }

   /**
    * Defines page line width.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    float   $width          Line width.
    */
   function defineLineWidth($indexPage, $width)
   {
      $page = $this->returnPage($indexPage);

      $page->setLineWidth($width);

      $this->_savePage($page, $indexPage);
   }

   /**
    * Returns page line width.
    *
    * @param    integer $indexPage      Number of the page.
    * @return   float
    */
   function returnLineWidth($indexPage)
   {
      $page = $this->returnPage($indexPage);
      return $page->getLineWidth();
   }

   /**
    * Defines page line dashing pattern.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    array   $pattern        Dashing pattern.
    * @param    integer $phase          Optional dashing phase.
    */
   function defineLineDashingPattern($indexPage, $pattern, $phase = 0)
   {
      $page = $this->returnPage($indexPage);
      $page->setLineDashingPattern($pattern, $phase);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Returns page line dashing pattern.
    *
    * @param    integer $indexPage      Number of the page.
    * @return   array
    */
   function returnLineDashingPattern($indexPage)
   {
      $page = $this->returnPage($indexPage);
      return $page->getLineDashingPattern();
   }

   /**
    * Defines page fill color.
    *
    * @param    integer         $indexPage      Number of the page.
    * @param    Zend_Pdf_Color  $color          Color.
    */
   function defineFillColor($indexPage, $color)
   {
      $page = $this->returnPage($indexPage);

      $page->setFillColor($color);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Returns page fill color.
    *
    * @param    integer $indexPage      Number of the page.
    * @return   Zend_Pdf_Color
    */
   function returnFillColor($indexPage)
   {
      $page = $this->returnPage($indexPage);
      return $page->getFillColor();
   }

   /**
    * Defines page font.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    integer $fontsize       Font size.
    * @param    string  $fontname       Optional. Font. For a list of possible values, check
    *                                   {@link $_stylefontname}.
    */
   function defineFontPage($indexPage, $fontsize, $fontname = fnCourier)
   {
      $embeddedOptions = 0;
      switch($this->_stylefontname)
      {
         case fnCourier:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_COURIER, $embeddedOptions);
            break;
         case fnCourierBold:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_COURIER_BOLD, $embeddedOptions);
            break;
         case fnCourierItalic:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_COURIER_ITALIC, $embeddedOptions);
            break;
         case fnCourierBoldItalic:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_COURIER_BOLD_ITALIC, $embeddedOptions);
            break;
         case fnTimes:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_TIMES, $embeddedOptions);
            break;
         case fnTimesBold:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_TIMES_BOLD, $embeddedOptions);
            break;
         case fnTimesItalic:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_TIMES_ITALIC, $embeddedOptions);
            break;
         case fnTimesBoldItalic:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_TIMES_BOLD_ITALIC, $embeddedOptions);
            break;
         case fnHelvetica:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA, $embeddedOptions);
            break;
         case fnHelveticaBold:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA_BOLD, $embeddedOptions);
            break;
         case fnHelveticaItalic:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA_ITALIC, $embeddedOptions);
            break;
         case fnHelveticaBoldItalic:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA_BOLD_ITALIC, $embeddedOptions);
            break;
         case fnSymbol:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_SYMBOL, $embeddedOptions);
            break;
         case fnZapfdingbats:
            $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_ZAPFDINGBATS, $embeddedOptions);
            break;
      }

      $page = $this->returnPage($indexPage);
      $page->setFont($font, $fontsize);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Sets page font size.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    integer $size           Font size.
    */
   function defineFontSize($indexPage, $size)
   {
      $page = $this->returnPage($indexPage);
      $page->setSize($size);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Returns page font.
    *
    * @param    integer $indexPage      Number of the page.
    * @return   Zend_Pdf_Resource_Font
    */
   function returnFontPage($indexPage)
   {
      $page = $this->returnPage($indexPage);
      return $page->getFont();
   }

   /**
    * Returns page font size.
    *
    * @param    integer $indexPage      Number of the page.
    * @return   integer
    */
   function returnFontSize($indexPage)
   {
      $page = $this->returnPage($indexPage);
      return $page->getFontSize();
   }

   /**
    * Rotates the page.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    float   $x              Rotation center X coordinate.
    * @param    float   $y              Rotation center Y coordinate.
    * @param    float   $angle          Rotation angle in radians.
    */
   function rotate($indexPage, $x, $y, $angle)
   {
      $page = $this->returnPage($indexPage);
      $page->rotate($x, $y, $angle);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Scales the coordinate system.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    float   $xScale         Value to scale the X coordinate.
    * @param    float   $yScale         Value to scale the Y coordinate.
    */
   function scale($indexPage, $xScale, $yScale)
   {
      $page = $this->returnPage($indexPage);
      $page->scale($xScale, $yScale);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Translates coordinate system.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    float   $xShift         X coordinate shift.
    * @param    float   $yShift         Y coordinate shift.
    */
   function translate($indexPage, $xShift, $yShift)
   {
      $page = $this->returnPage($indexPage);
      $page->translate($xShift, $yShift);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Skews coordinate system.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    float   $x              X coordinate of axis skew point.
    * @param    float   $y              Y coordinate of axis skew point.
    * @param    float   $xAngle         X axis skew angle.
    * @param    float   $yAngle         Y axis skew angle.
    */
   function skew($indexPage, $x, $y, $xAngle, $yAngle)
   {
      $page = $this->returnPage($indexPage);
      $page->skew($x, $y, $xAngle, $yAngle);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Intersects current clipping area with a rectangle.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    float   $x1             X coordinate for the top-left point of the rectangle.
    * @param    float   $y1             Y coordinate for the top-left point of the rectangle.
    * @param    float   $x2             X coordinate for the bottom-right point of the rectangle.
    * @param    float   $y2             Y coordinate for the bottom-right point of the rectangle.
    */
   function clipRectangle($indexPage, $x1, $y1, $x2, $y2)
   {
      $page = $this->returnPage($indexPage);
      $page->clipRectangle($x1, $y1, $x2, $y2);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Intersects current clipping area with a polygon.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    array   $x              Float X coordinates for polygon vertices.
    * @param    array   $y              Float Y coordinates for polygon vertices.
    * @param    integer $fillMethod     Optional fill method. You can select any of the following fill methods:
    *                                   <ul>
    *                                     <li>{@link Zend_Pdf_Page::FILL_METHOD_NON_ZERO_WINDING}: Non-zero winding method.</li>
    *                                     <li>{@link Zend_Pdf_Page::SHAPE_DRAW_STROKE}: Even-odd method.</li>
    *                                   </ul>
    */

   function clipPolygon($indexPage, $x, $y, $fillMethod = Zend_Pdf_Page::FILL_METHOD_NON_ZERO_WINDING)
   {
      $page = $this->returnPage($indexPage);
      $page->clipPolygon($x, $y, $fillMethod);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Intersects current clipping area with a circle.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    float   $x              Central point X coordinate.
    * @param    float   $y              Central point Y coordinate.
    * @param    float   $radius         Radius.
    * @param    float   $startAngle     Optional. Start angle in radians.
    * @param    float   $endAngle       Optional. End angle in radians.
    */
   function clipCircle($indexPage, $x, $y, $radius, $startAngle = null, $endAngle = null)
   {
      $page = $this->returnPage($indexPage);
      $page->clipCircle($x, $y, $radius, $startAngle, $endAngle);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Intersects current clipping area with an ellipse.
    *
    * Ellipse is defined though the fictional rectangle that contains it.
    *
    * Depending on the amount of arguments you pass to the method, expected position for each
    * parameter might vary. These are the possible ways you can call it:
    * <code>
    * drawEllipse($x1, $y1, $x2, $y2);
    * drawEllipse($x1, $y1, $x2, $y2, $startAngle, $endAngle);
    * </code>
    *
    * @param    integer $indexPage      Number of the page.
    * @param    float   $x1             X coordinate for the top-left point of the rectangle.
    * @param    float   $y1             Y coordinate for the top-left point of the rectangle.
    * @param    float   $x2             X coordinate for the bottom-right point of the rectangle.
    * @param    float   $y2             Y coordinate for the bottom-right point of the rectangle.
    * @param    float   $startAngle     Optional. Start angle in radians.
    * @param    float   $endAngle       Optional. End angle in radians.
    */
   function clipEllipse($indexPage, $x1, $y1, $x2, $y2, $startAngle = null, $endAngle = null)
   {
      $page = $this->returnPage($indexPage);
      $page->clipEllipse($x1, $y1, $x2, $y2, $startAngle, $endAngle);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Sets the transparency level.
    *
    * @param    integer $indexPage      Number of the page.
    * @param    float   $alpha          Transparency level, where 0 is transparent and 1 opaque.
    * @param    string  $mode           Transparency mode. Possible values are: 'Normal',
    *                                   'Multiply', 'Screen', 'Overlay', 'Darken', 'Lighten',
    *                                   'ColorDodge', 'ColorBurn', 'HardLight', 'SoftLight',
    *                                   'Difference', 'Exclusion'.
    */
   function defineAlpha($indexPage, $alpha, $mode = 'Normal')
   {
      $page = $this->returnPage($indexPage);
      $page->setAlpha($alpha, $mode);
      $this->_savePage($page, $indexPage);
   }

   /**
    * Saves the graphics state of given page.
    *
    * This takes a snapshot of the currently applied style, position, clipping area and any
    * rotation/translation/scaling that has been applied.
    *
    * @param    integer $indexPage      Number of the page.
    */
   function saveGS($indexPage)
   {
      $page = $this->returnPage($indexPage);
      $page->saveGS();
      $this->_savePage($page, $indexPage);
   }

   /**
    * Restore the graphics state previously saved with the last call to {@link saveGS()}.
    *
    * @param    integer $indexPage      Number of the page.
    */
   function restoreGS($indexPage)
   {
      $page = $this->returnPage($indexPage);
      $page->restoreGS();
      $this->_savePage($page, $indexPage);
   }
}

?>