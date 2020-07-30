<?php

/**
 * Zend/zfile.inc.php
 * 
 * Defines Zend Framework File component.
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
use_unit("Zend/framework/library/Zend/File/Transfer/Adapter/Http.php");

/**
 * Base class for the different options classes for {@link ZFile}.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.html Zend Framework Documentation
 */
class ZFileOptions extends Persistent
{

    // Owner

   /**
    * Owner.
    *
    * @var      ZFile
    */
   protected $ZFile = null;

   /**
    * {@inheritdoc}
    *
    * @return   ZFile
    */
   function readOwner()
   {
      return ($this->ZFile);
   }

   // Constructor

   /**
    * Class constructor.
    *
    * @param    ZFile   $aowner {@link ZFile Owner}.
    */
   function __construct($aowner)
   {
      parent::__construct();

      $this->ZFile = $aowner;
   }

   // Enabled

   /**
    * Whether or not options are enabled.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_enabled = 'false';

   /**
    * Getter method for {@link $_enabled}.
    *
    * @return   string  {@link $_enabled}
    */
   function getEnabled()    {return $this->_enabled;}

   /**
    * Setter method for {@link $_enabled}.
    *
    * @param    string  $value
    */
   function setEnabled($value)    {$this->_enabled = $value;}

   /**
    * Getter for {@link $_enabled}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultEnabled()    {return 'false';}

}

/**
 * Count validator.
 *
 * This validator checks for the number of files. A minimum and maximum range can be specified. An
 * error will be thrown if either limit is crossed.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileCountValidator extends ZFileOptions
{

   // Minimum

   /**
    * Minimum amount of files.
    *
    * @var      integer
    */
   protected $_min = 1;

   /**
    * Getter method for {@link $_min}.
    *
    * @return   integer {@link $_min}
    */
   function getMin()    {return $this->_min;}

   /**
    * Setter method for {@link $_min}.
    *
    * @param    integer $value
    */
   function setMin($value)    {$this->_min = $value;}

   /**
    * Getter for {@link $_min}’s default value.
    *
    * @return   integer 1
    */
   function defaultMin()    {return 1;}

   // Maximum

   /**
    * Maximum amount of files.
    *
    * @var      integer
    */
   protected $_max = 1;

   /**
    * Getter method for {@link $_max}.
    *
    * @return   integer {@link $_max}
    */
   function getMax()    {return $this->_max;}

   /**
    * Setter method for {@link $_max}.
    *
    * @param    integer $value
    */
   function setMax($value)    {$this->_max = $value;}

   /**
    * Getter for {@link $_max}’s default value.
    *
    * @return   integer 1
    */
   function defaultMax()    {return 1;}

   // Getter

   /**
    * Returns validator options.
    *
    * The array will contain the following key-pair values:
    * <ul>
    *   <li><b>min</b>: {@link $_min}.</li>
    *   <li><b>max</b>: {@link $_max}.</li>
    * </ul>
    *
    * @return   array
    */
   function dumpValidator()
   {
      $data = array();

      $data['min'] = $this->_min;
      $data['max'] = $this->_max;

      return $data;
   }
}

/**
 * Crc32 validator.
 *
 * This validator checks for the CRC-32 hash value of the content from a file. It is based on the
 * {@link ZFileHashValidator Hash validator} and provides a convenient and simple validator that
 * only supports Crc32.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileCrc32Validator extends ZFileOptions
{

   // Hashes

   /**
    * Hashes to be validated.
    *
    * @var      array
    */
   protected $_hashes = array();

   /**
    * Getter method for {@link $_hashes}.
    *
    * @return   array   {@link $_hashes}
    */
   function getHashes()    {return $this->_hashes;}

   /**
    * Setter method for {@link $_hashes}.
    *
    * @param    array   $value
    */
   function setHashes($value)    {$this->_hashes = $value;}

   /**
    * Getter for {@link $_hashes}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultHashes()    {return array();}

   // Getter

   /**
    * Returns validator hashes.
    *
    * @return   array
    */
   function dumpValidator()
   {
      return $this->_hashes;
   }
}

/**
 * Exclude Extension validator.
 *
 * This validator checks the extension of files. It will throw an error when a given file has a
 * defined extension.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileExcludeExtensionValidator extends ZFileOptions
{

   // Extensions

   /**
    * Extensions to be excluded.
    *
    * @var      array
    */
   protected $_extensions = array();

   /**
    * Getter method for {@link $_extensions}.
    *
    * @return   array   {@link $_extensions}
    */
   function getExtensions()    {return $this->_extensions;}

   /**
    * Setter method for {@link $_extensions}.
    *
    * @param    array   $value
    */
   function setExtensions($value)    {$this->_extensions = $value;}

   /**
    * Getter for {@link $_extensions}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultExtensions()    {return array();}

   // Case

   /**
    * Whether or not extension checking should be case-sensitive.
    *
    * If set to true ('true'), for example, you could exclude 'jpg' extension, yet 'JPG', 'Jpg' or
    * other extensions with some letter uppercased would still be allowed.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_case = 'false';

   /**
    * Getter method for {@link $_case}.
    *
    * @return   string  {@link $_case}
    */
   function getCase()    {return $this->_case;}

   /**
    * Setter method for {@link $_case}.
    *
    * @param    string  $value
    */
   function setCase($value)    {$this->_case = $value;}

   /**
    * Getter for {@link $_case}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultCase()    {return 'false';}

   /**
    * Returns extensions to be excluded, plus whether or not they should be treated as
    * case-sensitive.
    *
    * @return   array
    */
   function dumpValidator()
   {
      if($this->_case == 'true' || $this->_case == 1)
      {
         $this->_extensions['case'] = true;
      }
      else
      {
         $this->_extensions['case'] = false;
      }

      return $this->_extensions;
   }
}

/**
 * Exclude MIME Type validator.
 *
 * This validator checks the MIME type of files and throws an error if the MIME type of specified
 * file matches.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileExcludeMimeTypeValidator extends ZFileOptions
{

   // Header Check

   /**
    * Whether or not the HTTP header should be used to determine file MIME type.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * This option is considered unsafe, you should probably leave it set to false ('false').
    *
    * @var      string
    */
   protected $_headercheck = 'false';

   /**
    * Getter method for {@link $_headercheck}.
    *
    * @return   string  {@link $_headercheck}
    */
   function getHeaderCheck()    {return $this->_headercheck;}

   /**
    * Setter method for {@link $_headercheck}.
    *
    * @param    string  $value
    */
   function setHeaderCheck($value)    {$this->_headercheck = $value;}

   /**
    * Getter for {@link $_headercheck}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultHeaderCheck()    {return 'false';}

   // MIME Types

   /**
    * MIME types to be excluded.
    *
    * @var      array
    */
   protected $_mimetypes = array();

   /**
    * Getter method for {@link $_mimetypes}.
    *
    * @return   array   {@link $_mimetypes}
    */
   function getMimeTypes()    {return $this->_mimetypes;}

   /**
    * Setter method for {@link $_mimetypes}.
    *
    * @param    array   $value
    */
   function setMimeTypes($value)    {$this->_mimetypes = $value;}

   /**
    * Getter for {@link $_mimetypes}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultMimeTypes()    {return array();}

   /**
    * Returns MIME types to be excluded, plus whether or not file MIME type should be detremined
    * from the HTTP header data.
    *
    * @return   array
    */
   function dumpValidator()
   {
      if($this->_headercheck == 'false' || $this->_headercheck == 0)
      {
         $this->_mimetypes['headerCheck'] = false;
      }
      else
      {
         $this->_mimetypes['headerCheck'] = true;
      }
      return $this->_mimetypes;
   }
}

/**
 * Exists validator.
 *
 * This validator checks for the existence of given files in defined directories. It will throw an
 * error if a specified file does not exist in defined directories.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileExistsValidator extends ZFileOptions
{

   // Directories

   /**
    * Paths of directories where files should be lokked for.
    *
    * @var      array
    */
   protected $_directories = array();

   /**
    * Getter method for {@link $_directories}.
    *
    * @return   array   {@link $_directories}
    */
   function getDirectories()    {return $this->_directories;}

   /**
    * Setter method for {@link $_directories}.
    *
    * @param    array   $value
    */
   function setDirectories($value)    {$this->_directories = $value;}

   /**
    * Getter for {@link $_directories}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultDirectories()    {return array();}

   /**
    * Returns directories’s paths.
    *
    * @return   array
    */
   function dumpValidator()
   {
      return $this->_directories;
   }
}

/**
 * Exclude Extension validator.
 *
 * This validator checks the extension of files. It will throw an error when a specified file has an
 * undefined extension.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileExtensionValidator extends ZFileOptions
{

   // Extensions

   /**
    * Extensions to be allowed.
    *
    * @var      array
    */
   protected $_extensions = array();

   /**
    * Getter method for {@link $_extensions}.
    *
    * @return   array   {@link $_extensions}
    */
   function getExtensions()    {return $this->_extensions;}

   /**
    * Setter method for {@link $_extensions}.
    *
    * @param    array   $value
    */
   function setExtensions($value)    {$this->_extensions = $value;}

   /**
    * Getter for {@link $_extensions}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultExtensions()    {return array();}

   // Case

   /**
    * Whether or not extension checking should be case-sensitive.
    *
    * If set to true ('true'), for example, you could include 'jpg' extension, yet 'JPG', 'Jpg' or
    * other extensions with some letter uppercased would still be denied.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_case = 'false';

   /**
    * Getter method for {@link $_case}.
    *
    * @return   string  {@link $_case}
    */
   function getCase()    {return $this->_case;}

   /**
    * Setter method for {@link $_case}.
    *
    * @param    string  $value
    */
   function setCase($value)    {$this->_case = $value;}

   /**
    * Getter for {@link $_case}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultCase()    {return 'false';}

   /**
    * Returns extensions to be allowed, plus whether or not they should be treated as
    * case-sensitive.
    *
    * @return   array
    */
   function dumpValidator()
   {
      if($this->_case == 'false' || $this->_case == 0)
      {
         $this->_extensions['case'] = false;
      }
      else
      {
         $this->_extensions['case'] = true;
      }
      return $this->_extensions;
   }
}

/**
 * Files Size validator.
 *
 * This validator checks the size of validated files. It remembers internally the size of all
 * checked files and throws an error when the sum of all specified files exceed the defined size.
 *
 * It provides both minimum and maximum values.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileFilesSizeValidator extends ZFileOptions
{

   // Minimum

   /**
    * Minimum total size for files.
    *
    * Value will be treated as an amount of bytes. If you set {@link $_bytestring} to true ('true'),
    * value can be a string, and when so its unit will be taken into account. For example, you would
    * be able to specify '1kB' instead of 1024.
    *
    * @var      integer|string
    */
   protected $_min = 0;

   /**
    * Getter method for {@link $_min}.
    *
    * @return   integer|string  {@link $_min}
    */
   function getMin()    {return $this->_min;}

   /**
    * Setter method for {@link $_min}.
    *
    * @param    integer|string  $value
    */
   function setMin($value)    {$this->_min = $value;}

   /**
    * Getter for {@link $_min}’s default value.
    *
    * @return   integer|string  0
    */
   function defaultMin()    {return 0;}

   // Maximum

   /**
    * Maximum total size for files.
    *
    * Value will be treated as an amount of bytes. If you set {@link $_bytestring} to true ('true'),
    * value can be a string, and when so its unit will be taken into account. For example, you would
    * be able to specify '1kB' instead of 1024.
    *
    * @var      integer|string
    */
   protected $_max = 0;

   /**
    * Getter method for {@link $_max}.
    *
    * @return   integer|string  {@link $_max}
    */
   function getMax()    {return $this->_max;}

   /**
    * Setter method for {@link $_max}.
    *
    * @param    integer|string  $value
    */
   function setMax($value)    {$this->_max = $value;}

   /**
    * Getter for {@link $_max}’s default value.
    *
    * @return   integer|string  1
    */
   function defaultMax()    {return 0;}


   // Byte String

   /**
    * Whether or not values for {@link $_min minimum} and {@link $_min maximum} total filesize
    * should be read as bytestrings, that is, with units.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * If set to true, for example, you would be able to specify '1kB' instead of 1024 for both
    * {@link $_min} and {@link $_max} properties.
    *
    * @var      string
    */
   protected $_bytestring = 'false';

   /**
    * Getter method for {@link $_bytestring}.
    *
    * @return   string  {@link $_bytestring}
    */
   function getByteString()    {return $this->_bytestring;}

   /**
    * Setter method for {@link $_bytestring}.
    *
    * @param    string  $value
    */
   function setByteString($value)    {$this->_bytestring = $value;}

   /**
    * Getter for {@link $_bytestring}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultByteString()    {return 'false';}

   // Getter

   /**
    * Returns validator options.
    *
    * The array will contain the following key-pair values:
    * <ul>
    *   <li><b>min</b>: {@link $_min}.</li>
    *   <li><b>max</b>: {@link $_max}.</li>
    *   <li><b>bytestring</b>: {@link $_bytestring}.</li>
    * </ul>
    *
    * @return   array
    */
   function dumpValidator()
   {
      $data = array();

      $data['min'] = $this->_min;
      $data['max'] = $this->_max;
      if($this->_bytestring == 'false' || $this->_bytestring == 0)
         $data['bytestring'] = false;
      else
         $data['bytestring'] = true;

      return $data;
   }
}

/**
 * Image Size validator.
 *
 * This validator checks image size. It validates the width and height and enforces minimum and
 * maximum dimensions.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileImageSizeValidator extends ZFileOptions
{

   // Minimum Height

   /**
    * Minimum height (in pixels).
    *
    * @var      integer
    */
   protected $_minheight = 0;

   /**
    * Getter method for {@link $_minheight}.
    *
    * @return   integer {@link $_minheight}
    */
   function getMinHeight()    {return $this->_minheight;}

   /**
    * Setter method for {@link $_minheight}.
    *
    * @param    integer $value
    */
   function setMinHeight($value)    {$this->_minheight = $value;}

   /**
    * Getter for {@link $_minheight}’s default value.
    *
    * @return   integer 0
    */
   function defaultMinHeight()    {return 0;}

   // Maximum Height

   /**
    * Maximum height (in pixels).
    *
    * @var      integer
    */
   protected $_maxheight = 0;

   /**
    * Getter method for {@link $_maxheight}.
    *
    * @return   integer {@link $_maxheight}
    */
   function getMaxHeight()    {return $this->_maxheight;}

   /**
    * Setter method for {@link $_maxheight}.
    *
    * @param    integer $value
    */
   function setMaxHeight($value)    {$this->_maxheight = $value;}

   /**
    * Getter for {@link $_maxheight}’s default value.
    *
    * @return   integer 0
    */
   function defaultMaxHeight()    {return 0;}

   // Minimum Width

   /**
    * Minimum width (in pixels).
    *
    * @var      integer
    */
   protected $_minwidth = 0;

   /**
    * Getter method for {@link $_minwidth}.
    *
    * @return   integer {@link $_minwidth}
    */
   function getMinWidth()    {return $this->_minwidth;}

   /**
    * Setter method for {@link $_minwidth}.
    *
    * @param    integer $value
    */
   function setMinWidth($value)    {$this->_minwidth = $value;}

   /**
    * Getter for {@link $_minwidth}’s default value.
    *
    * @return   integer 0
    */
   function defaultMinWidth()    {return 0;}

   // Maximum Width

   /**
    * Maximum width (in pixels).
    *
    * @var      integer
    */
   protected $_maxwidth = 0;

   /**
    * Getter method for {@link $_maxwidth}.
    *
    * @return   integer {@link $_maxwidth}
    */
   function getMaxWidth()    {return $this->_maxwidth;}

   /**
    * Setter method for {@link $_maxwidth}.
    *
    * @param    integer $value
    */
   function setMaxWidth($value)    {$this->_maxwidth = $value;}

   /**
    * Getter for {@link $_maxwidth}’s default value.
    *
    * @return   integer 0
    */
   function defaultMaxWidth()    {return 0;}

   // Getter

   /**
    * Returns validator options.
    *
    * The array will contain the following key-pair values:
    * <ul>
    *   <li><b>minheight</b>: {@link $_minheight}.</li>
    *   <li><b>maxheight</b>: {@link $_maxheight}.</li>
    *   <li><b>minwidth</b>: {@link $_minwidth}.</li>
    *   <li><b>maxwidth</b>: {@link $_maxwidth}.</li>
    * </ul>
    *
    * @return   array
    */
   function dumpValidator()
   {
      $data = array();

      $data['minheight'] = $this->_minheight;
      $data['maxheight'] = $this->_maxheight;
      $data['minwidth'] = $this->_minwidth;
      $data['maxwidth'] = $this->_maxwidth;

      return $data;
   }
}

/**
 * Is Compressed validator.
 *
 * This validator checks whether the file is compressed. It is based on the
 * {@link ZFileMimeTypeValidator MimeType validator} and validates for compression archives like zip
 * or arc. You can also limit it to other archives.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileIsCompressedValidator extends ZFileOptions
{

   // Compressed Types

   /**
    * MIME types (of compressed archives) to be allowed.
    *
    * @var      array
    */
   protected $_compressedtypes = array();

   /**
    * Getter method for {@link $_compressedtypes}.
    *
    * @return   array   {@link $_compressedtypes}
    */
   function getCompressedTypes()    {return $this->_compressedtypes;}

   /**
    * Setter method for {@link $_compressedtypes}.
    *
    * @param    array   $value
    */
   function setCompressedTypes($value)    {$this->_compressedtypes = $value;}

   /**
    * Getter for {@link $_compressedtypes}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultCompressedTypes()    {return array();}

   // Header Check

   /**
    * Whether or not the HTTP header should be used to determine file MIME type.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * This option is considered unsafe, you should probably leave it set to false ('false').
    *
    * @var      string
    */
   protected $_headercheck = 'false';

   /**
    * Getter method for {@link $_headercheck}.
    *
    * @return   string  {@link $_headercheck}
    */
   function getHeaderCheck()    {return $this->_headercheck;}

   /**
    * Setter method for {@link $_headercheck}.
    *
    * @param    string  $value
    */
   function setHeaderCheck($value)    {$this->_headercheck = $value;}

   /**
    * Getter for {@link $_headercheck}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultHeaderCheck()    {return 'false';}

   /**
    * Returns specific MIME types to be excluded (if any, defaults to compressed archives MIME
    * types), plus whether or not file MIME type should be detremined from the HTTP header data.
    *
    * @return   array
    */
   function dumpValidator()
   {
      if($this->_headercheck == 0)
      {
         $this->_compressedtypes['headerCheck'] = false;
      }
      else
      {
         $this->_compressedtypes['headerCheck'] = true;
      }

      return $this->_compressedtypes;
   }
}

/**
 * Is Image validator.
 *
 * This validator checks whether the file is an image. It is based on the
 * {@link ZFileMimeTypeValidator MimeType validator} and validates for image files like JPEG or GIF.
 * You can also limit it to other image types.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileIsImageValidator extends ZFileOptions
{

   // Image Types

   /**
    * MIME types (of image files) to be allowed.
    *
    * @var      array
    */
   protected $_imagetypes = array();

   /**
    * Getter method for {@link $_imagetypes}.
    *
    * @return   array   {@link $_imagetypes}
    */
   function getImageTypes()    {return $this->_imagetypes;}

   /**
    * Setter method for {@link $_imagetypes}.
    *
    * @param    array   $value
    */
   function setImageTypes($value)    {$this->_imagetypes = $value;}

   /**
    * Getter for {@link $_imagetypes}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultImageTypes()    {return array();}

   // Header Check

   /**
    * Whether or not the HTTP header should be used to determine file MIME type.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * This option is considered unsafe, you should probably leave it set to false ('false').
    *
    * @var      string
    */
   protected $_headercheck = 'false';

   /**
    * Getter method for {@link $_headercheck}.
    *
    * @return   string  {@link $_headercheck}
    */
   function getHeaderCheck()    {return $this->_headercheck;}

   /**
    * Setter method for {@link $_headercheck}.
    *
    * @param    string  $value
    */
   function setHeaderCheck($value)    {$this->_headercheck = $value;}

   /**
    * Getter for {@link $_headercheck}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultHeaderCheck()    {return 'false';}

   /**
    * Returns specific MIME types to be excluded (if any, defaults to image files MIME types), plus
    * whether or not file MIME type should be detremined from the HTTP header data.
    *
    * @return   array
    */
   function dumpValidator()
   {
      if($this->_headercheck == 0)
      {
         $this->_imagetypes['headerCheck'] = false;
      }
      else
      {
         $this->_imagetypes['headerCheck'] = true;
      }
      return $this->_imagetypes;
   }
}

// Hash Algorithms

define('ahMd2', 'ahMd2');
define('ahMd4', 'ahMd4');
define('ahMd5', 'ahMd5');
define('ahSha1', 'ahSha1');
define('ahSha224', 'ahSha224');
define('ahSha256', 'ahSha256');
define('ahSha384', 'ahSha384');
define('ahSha512', 'ahSha512');
define('ahRipemd128', 'ahRipemd128');
define('ahRipemd160', 'ahRipemd160');
define('ahRipemd256', 'ahRipemd256');
define('ahRipemd320', 'ahRipemd320');
define('ahSalsa10', 'ahSalsa10');
define('ahSalsa20', 'ahSalsa20');
define('ahWhirlpool', 'ahWhirlpool');
define('ahTiger128_3', 'ahTiger128_3');
define('ahTiger160_3', 'ahTiger160_3');
define('ahTiger192_3', 'ahTiger192_3');
define('ahTiger128_4', 'ahTiger128_4');
define('ahTiger160_4', 'ahTiger160_4');
define('ahTiger192_4', 'ahTiger192_4');
define('ahSnefru', 'ahSnefru');
define('ahSnefru256', 'ahSnefru256');
define('ahGost', 'ahGost');
define('ahAdler32', 'ahAdler32');
define('ahCrc32', 'ahCrc32');
define('ahCrc32b', 'ahCrc32b');
define('ahHaval128_3', 'ahHaval128_3');
define('ahHaval160_3', 'ahHaval160_3');
define('ahHaval192_3', 'ahHaval192_3');
define('ahHaval224_3', 'ahHaval224_3');
define('ahHaval256_3', 'ahHaval256_3');
define('ahHaval128_4', 'ahHaval128_4');
define('ahHaval160_4', 'ahHaval160_4');
define('ahHaval192_4', 'ahHaval192_4');
define('ahHaval224_4', 'ahHaval224_4');
define('ahHaval256_4', 'ahHaval256_4');
define('ahHaval128_5', 'ahHaval128_5');
define('ahHaval160_5', 'ahHaval160_5');
define('ahHaval192_5', 'ahHaval192_5');
define('ahHaval224_5', 'ahHaval224_5');
define('ahHaval256_5', 'ahHaval256_5');

/**
 * Hash validator.
 *
 * This validator checks the hash value of the content from a file. It supports multiple algorithms.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileHashValidator extends ZFileOptions
{

   // Hashes

   /**
    * Hashes to be validated.
    *
    * @var      array
    */
   protected $_hashes = array();

   /**
    * Getter method for {@link $_hashes}.
    *
    * @return   array   {@link $_hashes}
    */
   function getHashes()    {return $this->_hashes;}

   /**
    * Setter method for {@link $_hashes}.
    *
    * @param    array   $value
    */
   function setHashes($value)    {$this->_hashes = $value;}

   /**
    * Getter for {@link $_hashes}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultHashes()    {return array();}

   // Hash Algorithm

   /**
    * Hash algorithm.
    *
    * @var      string
    */
   protected $_algorithmhash = ahMd5;

   /**
    * Getter method for {@link $_algorithmhash}.
    *
    * @return   string  {@link $_algorithmhash}
    */
   function getAlgorithmHash()    {return $this->_algorithmhash;}

   /**
    * Setter method for {@link $_algorithmhash}.
    *
    * @param    string  $value
    */
   function setAlgorithmHash($value)    {$this->_algorithmhash = $value;}

   /**
    * Getter for {@link $_algorithmhash}’s default value.
    *
    * @return   string  ahMd5
    */
   function defaultAlgorithmHash()    {return ahMd5;}

   // Getter

   /**
    * Returns validator hashes and chosen algorithm.
    *
    * @return   array
    */
   function dumpValidator()
   {
      $algorithm = '';
      switch($this->_algorithmhash)
      {
         case ahMd2:
            $algorithm = 'md2';
            break;
         case ahMd4:
            $algorithm = 'md4';
            break;
         case ahMd5:
            $algorithm = 'md5';
            break;
         case ahSha1:
            $algorithm = 'sha1';
            break;
         case ahSha224:
            $algorithm = 'sha224';
            break;
         case ahSha256:
            $algorithm = 'sha256';
            break;
         case ahSha384:
            $algorithm = 'sha384';
            break;
         case ahSha512:
            $algorithm = 'sha512';
            break;
         case ahRipemd128:
            $algorithm = 'ripemd128';
            break;
         case ahRipemd160:
            $algorithm = 'ripemd160';
            break;
         case ahRipemd256:
            $algorithm = 'ripemd256';
            break;
         case ahRipemd320:
            $algorithm = 'ripemd320';
            break;
         case ahSalsa10:
            $algorithm = 'salsa10';
            break;
         case ahSalsa20:
            $algorithm = 'salsa20';
            break;
         case ahWhirlpool:
            $algorithm = 'whirlpool';
            break;
         case ahTiger128_3:
            $algorithm = 'tiger128,3';
            break;
         case ahTiger160_3:
            $algorithm = 'tiger160,3';
            break;
         case ahTiger192_3:
            $algorithm = 'tiger192,3';
            break;
         case ahTiger128_4:
            $algorithm = 'tiger128,4';
            break;
         case ahTiger160_4:
            $algorithm = 'tiger160,4';
            break;
         case ahTiger192_4:
            $algorithm = 'tiger192,4';
            break;
         case ahSnefru:
            $algorithm = 'snefru';
            break;
         case ahSnefru256:
            $algorithm = 'snefru256';
            break;
         case ahGost:
            $algorithm = 'gost';
            break;
         case ahAdler32:
            $algorithm = 'adler32';
            break;
         case ahCrc32:
            $algorithm = 'crc32';
            break;
         case ahCrc32b:
            $algorithm = 'crc32b';
            break;
         case ahHaval128_3:
            $algorithm = 'haval128,3';
            break;
         case ahHaval160_3:
            $algorithm = 'haval160,3';
            break;
         case ahHaval192_3:
            $algorithm = 'haval192,3';
            break;
         case ahHaval224_3:
            $algorithm = 'haval224,3';
            break;
         case ahHaval256_3:
            $algorithm = 'haval256,3';
            break;
         case ahHaval128_4:
            $algorithm = 'haval128,4';
            break;
         case ahHaval160_4:
            $algorithm = 'haval160,4';
            break;
         case ahHaval192_4:
            $algorithm = 'haval192,4';
            break;
         case ahHaval224_4:
            $algorithm = 'haval224,4';
            break;
         case ahHaval256_4:
            $algorithm = 'haval256,4';
            break;
         case ahHaval128_5:
            $algorithm = 'haval128,5';
            break;
         case ahHaval160_5:
            $algorithm = 'haval160,5';
            break;
         case ahHaval192_5:
            $algorithm = 'haval192,5';
            break;
         case ahHaval224_5:
            $algorithm = 'haval224,5';
            break;
         case ahHaval256_5:
            $algorithm = 'haval256,5';
            break;
      }
      $this->_hashes['algorithm'] = $algorithm;

      return $this->_hashes;
   }

}

/**
 * MD5 validator.
 *
 * This validator checks for the MD5 hash value of the content from a file. It is based on the
 * {@link ZFileHashValidator Hash validator} and provides a convenient and simple validator that
 * only supports MD5.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileMD5Validator extends ZFileOptions
{

   // Hashes

   /**
    * Hashes to be validated.
    *
    * @var      array
    */
   protected $_hashes = array();

   /**
    * Getter method for {@link $_hashes}.
    *
    * @return   array   {@link $_hashes}
    */
   function getHashes()    {return $this->_hashes;}

   /**
    * Setter method for {@link $_hashes}.
    *
    * @param    array   $value
    */
   function setHashes($value)    {$this->_hashes = $value;}

   /**
    * Getter for {@link $_hashes}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultHashes()    {return array();}

   // Getter

   /**
    * Returns validator hashes.
    *
    * @return   array
    */
   function dumpValidator()
   {
      return $this->_hashes;
   }
}

/**
 * MIME Type validator.
 *
 * This validator checks the MIME type of files and throws an error if the MIME type of specified
 * file does not match.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileMimeTypeValidator extends ZFileOptions
{

   // MIME Types

   /**
    * MIME types to be allowed.
    *
    * @var      array
    */
   protected $_mimetypes = array();

   /**
    * Getter method for {@link $_mimetypes}.
    *
    * @return   array   {@link $_mimetypes}
    */
   function getMimeTypes()    {return $this->_mimetypes;}

   /**
    * Setter method for {@link $_mimetypes}.
    *
    * @param    array   $value
    */
   function setMimeTypes($value)    {$this->_mimetypes = $value;}

   /**
    * Getter for {@link $_mimetypes}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultMimeTypes()    {return array();}

   // Header Check

   /**
    * Whether or not the HTTP header should be used to determine file MIME type.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * This option is considered unsafe, you should probably leave it set to false ('false').
    *
    * @var      string
    */
   protected $_headercheck = 'false';

   /**
    * Getter method for {@link $_headercheck}.
    *
    * @return   string  {@link $_headercheck}
    */
   function getHeaderCheck()    {return $this->_headercheck;}

   /**
    * Setter method for {@link $_headercheck}.
    *
    * @param    string  $value
    */
   function setHeaderCheck($value)    {$this->_headercheck = $value;}

   /**
    * Getter for {@link $_headercheck}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultHeaderCheck()    {return 'false';}

   // Magic File

   /**
    * Path to the MIME magic file (magic.mime).
    *
    * @var      string
    */
   protected $_magicfile = '';

   /**
    * Getter method for {@link $_magicfile}.
    *
    * @return   string  {@link $_magicfile}
    */
   function getMagicFile()    {return $this->_magicfile;}

   /**
    * Setter method for {@link $_magicfile}.
    *
    * @param    string  $value
    */
   function setMagicFile($value)    {$this->_magicfile = $value;}

   /**
    * Getter for {@link $_magicfile}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultMagicFile()    {return '';}

   /**
    * Returns MIME types to be allowed, plus whether or not file MIME type should be detremined
    * from the HTTP header data, and the path to the MIME magic file if specified.
    *
    * @return   array
    */
   function dumpValidator()
   {
      if($this->_headercheck == 'false' || $this->_headercheck == 0)
      {
         $this->_mimetypes['headerCheck'] = false;
      }
      else
      {
         $this->_mimetypes['headerCheck'] = true;
      }

      $this->_mimetypes['magicfile'] = $this->_magicfile;

      return $this->_mimetypes;
   }

}

/**
 * Not Exists validator.
 *
 * This validator checks for the existence of given files in defined directories. It will throw an
 * error if a specified file already exists in defined directories.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileNotExistsValidator extends ZFileOptions
{

   // Directories

   /**
    * Paths of directories where files should be lokked for.
    *
    * @var      array
    */
   protected $_directories = array();

   /**
    * Getter method for {@link $_directories}.
    *
    * @return   array   {@link $_directories}
    */
   function getDirectories()    {return $this->_directories;}

   /**
    * Setter method for {@link $_directories}.
    *
    * @param    array   $value
    */
   function setDirectories($value)    {$this->_directories = $value;}

   /**
    * Getter for {@link $_directories}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultDirectories()    {return array();}

   /**
    * Returns directories’s paths.
    *
    * @return   array
    */
   function dumpValidator()
   {
      return $this->_directories;
   }

}

/**
 * SHA-1 validator.
 *
 * This validator checks for the SHA-1 hash value of the content from a file. It is based on the
 * {@link ZFileHashValidator Hash validator} and provides a convenient and simple validator that
 * only supports SHA-1.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileSHA1Validator extends ZFileOptions
{

   // Hashes

   /**
    * Hashes to be validated.
    *
    * @var      array
    */
   protected $_hashes = array();

   /**
    * Getter method for {@link $_hashes}.
    *
    * @return   array   {@link $_hashes}
    */
   function getHashes()    {return $this->_hashes;}

   /**
    * Setter method for {@link $_hashes}.
    *
    * @param    array   $value
    */
   function setHashes($value)    {$this->_hashes = $value;}

   /**
    * Getter for {@link $_hashes}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultHashes()    {return array();}

   // Getter

   /**
    * Returns validator hashes.
    *
    * @return   array
    */
   function dumpValidator()
   {
      return $this->_hashes;
   }

}

/**
 * Size validator.
 *
 * This validator is able to check files for its file size. It provides a minimum and maximum size
 * range and will throw an error when either of these thresholds are crossed.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileSizeValidator extends ZFileOptions
{

   // Minimum

   /**
    * Minimum size.
    *
    * Value will be treated as an amount of bytes. If you set {@link $_bytestring} to true ('true'),
    * value can be a string, and when so its unit will be taken into account. For example, you would
    * be able to specify '1kB' instead of 1024.
    *
    * @var      integer|string
    */
   protected $_min = 0;

   /**
    * Getter method for {@link $_min}.
    *
    * @return   integer|string  {@link $_min}
    */
   function getMin()    {return $this->_min;}

   /**
    * Setter method for {@link $_min}.
    *
    * @param    integer|string  $value
    */
   function setMin($value)    {$this->_min = $value;}

   /**
    * Getter for {@link $_min}’s default value.
    *
    * @return   integer|string  0
    */
   function defaultMin()    {return 0;}

   // Maximum

   /**
    * Maximum size.
    *
    * Value will be treated as an amount of bytes. If you set {@link $_bytestring} to true ('true'),
    * value can be a string, and when so its unit will be taken into account. For example, you would
    * be able to specify '1kB' instead of 1024.
    *
    * @var      integer|string
    */
   protected $_max = 0;

   /**
    * Getter method for {@link $_max}.
    *
    * @return   integer|string  {@link $_max}
    */
   function getMax()    {return $this->_max;}

   /**
    * Setter method for {@link $_max}.
    *
    * @param    integer|string  $value
    */
   function setMax($value)    {$this->_max = $value;}

   /**
    * Getter for {@link $_max}’s default value.
    *
    * @return   integer|string  1
    */
   function defaultMax()    {return 0;}


   // Byte String

   /**
    * Whether or not values for {@link $_min minimum} and {@link $_min maximum} filesize should be
    * read as bytestrings, that is, with units.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * If set to true, for example, you would be able to specify '1kB' instead of 1024 for both
    * {@link $_min} and {@link $_max} properties.
    *
    * @var      string
    */
   protected $_bytestring = 'false';

   /**
    * Getter method for {@link $_bytestring}.
    *
    * @return   string  {@link $_bytestring}
    */
   function getByteString()    {return $this->_bytestring;}

   /**
    * Setter method for {@link $_bytestring}.
    *
    * @param    string  $value
    */
   function setByteString($value)    {$this->_bytestring = $value;}

   /**
    * Getter for {@link $_bytestring}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultByteString()    {return 'false';}

   // Getter

   /**
    * Returns validator options.
    *
    * The array will contain the following key-pair values:
    * <ul>
    *   <li><b>min</b>: {@link $_min}.</li>
    *   <li><b>max</b>: {@link $_max}.</li>
    *   <li><b>bytestring</b>: {@link $_bytestring}.</li>
    * </ul>
    *
    * @return   array
    */
   function dumpValidator()
   {
      $data = array();

      $data['min'] = $this->_min;
      $data['max'] = $this->_max;
      if($this->_bytestring == 'false' || $this->_bytestring == 0)
      {
         $data['bytestring'] = false;
      }
      else
      {
         $data['bytestring'] = true;
      }

      return $data;
   }
}

/**
 * Word Count validator.
 *
 * This validator is able to check the number of words within files. It provides a minimum and
 * maximum count and will throw an error when either of these thresholds are crossed. 
 *
 * It provides both minimum and maximum values.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.validators.html Zend Framework Documentation
 */
class ZFileWordCountValidator extends ZFileOptions
{

   // Minimum

   /**
    * Minimum amount of words.
    *
    * @var      integer
    */
   protected $_min = 0;

   /**
    * Getter method for {@link $_min}.
    *
    * @return   integer {@link $_min}
    */
   function getMin()    {return $this->_min;}

   /**
    * Setter method for {@link $_min}.
    *
    * @param    integer $value
    */
   function setMin($value)    {$this->_min = $value;}

   /**
    * Getter for {@link $_min}’s default value.
    *
    * @return   integer 0
    */
   function defaultMin()    {return 0;}

   // Maximum

   /**
    * Maximum amount of words.
    *
    * @var      integer
    */
   protected $_max = 0;

   /**
    * Getter method for {@link $_max}.
    *
    * @return   integer {@link $_max}
    */
   function getMax()    {return $this->_max;}

   /**
    * Setter method for {@link $_max}.
    *
    * @param    integer $value
    */
   function setMax($value)    {$this->_max = $value;}

   /**
    * Getter for {@link $_max}’s default value.
    *
    * @return   integer 0
    */
   function defaultMax()    {return 0;}

   // Getter

   /**
    * Returns validator options.
    *
    * The array will contain the following key-pair values:
    * <ul>
    *   <li><b>min</b>: {@link $_min}.</li>
    *   <li><b>max</b>: {@link $_max}.</li>
    * </ul>
    *
    * @return   array
    */
   function dumpValidator()
   {
      $data = array();

      $data['min'] = $this->_min;
      $data['max'] = $this->_max;

      return $data;
   }
}

// Decrypt Adapters

define('daOpenssl', 'daOpenssl');
define('daMcrypt', 'daMcrypt');

// Mcrypt Algorithms

define('ma3DES', 'ma3DES');
define('maArcFour_IV', 'maArcFour_IV');
define('maArcFour', 'maArcFour');
define('maBlowfish', 'maBlowfish');
define('maCast128', 'maCast128');
define('maCast256', 'maCast256');
define('maCrypt', 'maCrypt');
define('maDes', 'maDes');
define('maDesCompat', 'maDesCompat');
define('maEnigma', 'maEnigma');
define('maGost', 'maGost');
define('maIdea', 'maIdea');
define('maLoki97', 'maLoki97');
define('maMars', 'maMars');
define('maPanama', 'maPanama');
define('maRijndael128', 'maRijndael128');
define('maRijndael192', 'maRijndael192');
define('maRijndael256', 'maRijndael256');
define('maRC2', 'maRC2');
define('maRC4', 'maRC4');
define('maRC6', 'maRC6');
define('maRC6_128', 'maRC6_128');
define('maRC6_192', 'maRC6_192');
define('maRC6_256', 'maRC6_256');
define('maSafer64', 'maSafer64');
define('maSafer128', 'maSafer128');
define('maSaferPlus', 'maSaferPlus');
define('maSerpent', 'maSerpent');
define('maSerpent_128', 'maSerpent_128');
define('maSerpent_192', 'maSerpent_192');
define('maSerpent_256', 'maSerpent_256');
define('maSkipjack', 'maSkipjack');
define('maTean', 'maTean');
define('maThreeway', 'maThreeway');
define('maTripleDes', 'maTripleDes');
define('maTwoFish', 'maTwoFish');
define('maTwoFish128', 'maTwoFish128');
define('maTwoFish192', 'maTwoFish192');
define('maTwoFish256', 'maTwoFish256');
define('maWake', 'maWake');
define('maXtea', 'maXtea');

// Mcrypt Modes

define('mmECB', 'mmECB');
define('mmCBC', 'mmCBC');
define('mmCFB', 'mmCFB');
define('mmOFB', 'mmOFB');
define('mmNOFB', 'mmNOFB');
define('mmSTREAM', 'mmSTREAM');

/**
 * Decrypt filter.
 *
 * This filter can decrypt a encrypted file.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.filters.html Zend Framework Documentation
 */
class ZFileDecryptFilter extends ZFileOptions
{

   // Decrypt Adapter

   /**
    * Decrypt adapter.
    *
    * @var      string
    */
   protected $_decryptadapter = daMcrypt;

   /**
    * Getter method for {@link $_decryptadapter}.
    *
    * @return   string  {@link $_decryptadapter}
    */
   function getDecryptAdapter()    {return $this->_decryptadapter;}

   /**
    * Setter method for {@link $_decryptadapter}.
    *
    * @param    string  $value
    */
   function setDecryptAdapter($value)    {$this->_decryptadapter = $value;}

   /**
    * Getter for {@link $_decryptadapter}’s default value.
    *
    * @return   string  {@link daMcrypt}
    */
   function defaultDecryptAdapter()    {return daMcrypt;}

   // Mcrypt Key

   /**
    * Mcrypt key.
    *
    * @var      string
    */
   protected $_mcryptkey = '';

   /**
    * Getter method for {@link $_mcryptkey}.
    *
    * @return   string  {@link $_mcryptkey}
    */
   function getMcryptKey()    {return $this->_mcryptkey;}

   /**
    * Setter method for {@link $_mcryptkey}.
    *
    * @param    string  $value
    */
   function setMcryptKey($value)    {$this->_mcryptkey = $value;}

   /**
    * Getter for {@link $_mcryptkey}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultMcryptKey()    {return '';}

   // Mcrypt Algorithm

   /**
    * Mcrypt algorithm.
    *
    * @var      string
    */
   protected $_mcryptalgorithm = ma3DES;

   /**
    * Getter method for {@link $_mcryptalgorithm}.
    *
    * @return   string  {@link $_mcryptalgorithm}
    */
   function getMcryptAlgorithm()    {return $this->_mcryptalgorithm;}

   /**
    * Setter method for {@link $_mcryptalgorithm}.
    *
    * @param    string  $value
    */
   function setMcryptAlgorithm($value)    {$this->_mcryptalgorithm = $value;}

   /**
    * Getter for {@link $_mcryptalgorithm}’s default value.
    *
    * @return   string  {@link ma3DES}
    */
   function defaultMcryptAlgorithm()    {return ma3DES;}

   // Mcrypt Mode

   /**
    * Mcrypt mode.
    *
    * @var      string
    */
   protected $_mcryptmode = mmECB;

   /**
    * Getter method for {@link $_mcryptmode}.
    *
    * @return   string  {@link $_mcryptmode}
    */
   function getMcryptMode()    {return $this->_mcryptmode;}

   /**
    * Setter method for {@link $_mcryptmode}.
    *
    * @param    string  $value
    */
   function setMcryptMode($value)    {$this->_mcryptmode = $value;}

   /**
    * Getter for {@link $_mcryptmode}’s default value.
    *
    * @return   string  {@link mmECB}
    */
   function defaultMcryptMode()    {return mmECB;}

   // Mcrypt Vector

   /**
    * Mcrypt vector.
    *
    * @var      string
    */
   protected $_mcryptvector = '';

   /**
    * Getter method for {@link $_mcryptvector}.
    *
    * @return   string  {@link $_mcryptvector}
    */
   function getMcryptVector()    {return $this->_mcryptvector;}

   /**
    * Setter method for {@link $_mcryptvector}.
    *
    * @param    string  $value
    */
   function setMcryptVector($value)    {$this->_mcryptvector = $value;}

   /**
    * Getter for {@link $_mcryptvector}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultMcryptVector()    {return '';}

   // Mcrypt Salt

   /**
    * Whether or not a salt value is needed.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_mcryptsalt = 'false';

   /**
    * Getter method for {@link $_mcryptsalt}.
    *
    * @return   string  {@link $_mcryptsalt}
    */
   function getMcryptSalt()    {return $this->_mcryptsalt;}

   /**
    * Setter method for {@link $_mcryptsalt}.
    *
    * @param    string  $value
    */
   function setMcryptSalt($value)    {$this->_mcryptsalt = $value;}

   /**
    * Getter for {@link $_mcryptsalt}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultMcryptSalt()    {return 'false';}

   // OpenSSL Public Key

   /**
    * OpenSSL public key.
    *
    * @var      string
    */
   protected $_opensslpublickey = '';

   /**
    * Getter method for {@link $_opensslpublickey}.
    *
    * @return   string  {@link $_opensslpublickey}
    */
   function getOpensslPublicKey()    {return $this->_opensslpublickey;}

   /**
    * Setter method for {@link $_opensslpublickey}.
    *
    * @param    string  $value
    */
   function setOpensslPublicKey($value)    {$this->_opensslpublickey = $value;}

   /**
    * Getter for {@link $_opensslpublickey}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultOpensslPublicKey()    {return '';}

   // OpenSSL Private Key

   /**
    * OpenSSL private key.
    *
    * @var      string
    */
   protected $_opensslprivatekey = '';

   /**
    * Getter method for {@link $_opensslprivatekey}.
    *
    * @return   string  {@link $_opensslprivatekey}
    */
   function getOpensslPrivateKey()    {return $this->_opensslprivatekey;}

   /**
    * Setter method for {@link $_opensslprivatekey}.
    *
    * @param    string  $value
    */
   function setOpensslPrivateKey($value)    {$this->_opensslprivatekey = $value;}

   /**
    * Getter for {@link $_opensslprivatekey}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultOpensslPrivateKey()    {return '';}

   // OpenSSL Envelop

   /**
    * OpenSSL envelop.
    *
    * @var      string
    */
   protected $_opensslenvelope = '';

   /**
    * Getter method for {@link $_opensslenvelope}.
    *
    * @return   string  {@link $_opensslenvelope}
    */
   function getOpensslEnvelope()    {return $this->_opensslenvelope;}

   /**
    * Setter method for {@link $_opensslenvelope}.
    *
    * @param    string  $value
    */
   function setOpensslEnvelope($value)    {$this->_opensslenvelope = $value;}

   /**
    * Getter for {@link $_opensslenvelope}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultOpensslEnvelope()    {return '';}

   // OpenSSL Passphrase

   /**
    * OpenSSL passphrase.
    *
    * @var      string
    */
   protected $_opensslpassphrase = '';

   /**
    * Getter method for {@link $_opensslpassphrase}.
    *
    * @return   string  {@link $_opensslpassphrase}
    */
   function getOpensslPassphrase()    {return $this->_opensslpassphrase;}

   /**
    * Setter method for {@link $_opensslpassphrase}.
    *
    * @param    string  $value
    */
   function setOpensslPassphrase($value)    {$this->_opensslpassphrase = $value;}

   /**
    * Getter for {@link $_opensslpassphrase}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultOpensslPassphrase()    {return '';}

   // Getter

   /**
    * Returns filter options.
    *
    * The array will contain the following key-pair values when {@link $_decryptadapter} is set to
    * {@link daOpenssl}:
    * <ul>
    *   <li><b>adapter</b>: <tt>'openssl'</tt>.</li>
    *   <li><b>public</b>: {@link $_opensslpublickey}.</li>
    *   <li><b>private</b>: {@link $_opensslprivatekey}.</li>
    *   <li><b>envelope</b>: {@link $_opensslenvelope}.</li>
    *   <li><b>passphrase</b>: {@link $_opensslpassphrase}.</li>
    * </ul>
    *
    * When {@link $_decryptadapter} is set to {@link daMcrypt}, the array will contain the following
    * key-pair values instead:
    * <ul>
    *   <li><b>adapter</b>: <tt>'mcrypt'</tt>.</li>
    *   <li><b>key</b>: {@link $_mcryptkey}.</li>
    *   <li><b>algorithm</b>: {@link $_mcryptalgorithm}.</li>
    *   <li><b>mode</b>: {@link $_mcryptmode}.</li>
    *   <li><b>vector</b>: {@link $_mcryptvector}.</li>
    *   <li><b>salt</b>: {@link $_mcryptsalt}.</li>
    * </ul>
    *
    * @return   array
    */
   function dumpFilter()
   {
      $data = array();

      switch($this->_decryptadapter)
      {
         case daOpenssl:
            $data['public'] = $this->_opensslpublickey;
            $data['private'] = $this->_opensslprivatekey;
            $data['envelope'] = $this->_opensslenvelope;
            $data['passphrase'] = $this->_opensslpassphrase;
            $data['adapter'] = 'openssl';
            break;
         case daMcrypt:
            $data['adapter'] = 'mcrypt';
            $data['key'] = $this->_mcryptkey;
            $algorithm = '';
            switch($this->_mcryptalgorithm)
            {
               case ma3DES:
                  $algorithm = MCRYPT_3DES;
                  break;
               case maArcFour_IV:
                  $algorithm = MCRYPT_ARCFOUR_IV;
                  break;
               case maArcFour:
                  $algorithm = MCRYPT_ARCFOUR;
                  break;
               case maBlowfish:
                  $algorithm = MCRYPT_BLOWFISH;
                  break;
               case maCast128:
                  $algorithm = MCRYPT_CAST_128;
                  break;
               case maCast256:
                  $algorithm = MCRYPT_CAST_256;
                  break;
               case maCrypt:
                  $algorithm = MCRYPT_CRYPT;
                  break;
               case maDes:
                  $algorithm = MCRYPT_DES;
                  break;
               case maDesCompat:
                  $algorithm = MCRYPT_DES_COMPAT;
                  break;
               case maEnigma:
                  $algorithm = MCRYPT_ENIGMA;
                  break;
               case maGost:
                  $algorithm = MCRYPT_GOST;
                  break;
               case maIdea:
                  $algorithm = MCRYPT_IDEA;
                  break;
               case maLoki97:
                  $algorithm = MCRYPT_LOKI97;
                  break;
               case maMars:
                  $algorithm = MCRYPT_MARS;
                  break;
               case maPanama:
                  $algorithm = MCRYPT_PANAMA;
                  break;
               case maRijndael128:
                  $algorithm = MCRYPT_RIJNDAEL_128;
                  break;
               case maRijndael192:
                  $algorithm = MCRYPT_RIJNDAEL_192;
                  break;
               case maRijndael256:
                  $algorithm = MCRYPT_RIJNDAEL_256;
                  break;
               case maRC2:
                  $algorithm = MCRYPT_RC2;
                  break;
               case maRC4:
                  $algorithm = MCRYPT_RC4;
                  break;
               case maRC6:
                  $algorithm = MCRYPT_RC6;
                  break;
               case maRC6_128:
                  $algorithm = MCRYPT_RC6_128;
                  break;
               case maRC6_192:
                  $algorithm = MCRYPT_RC6_192;
                  break;
               case maRC6_256:
                  $algorithm = MCRYPT_RC6_256;
                  break;
               case maSafer64:
                  $algorithm = MCRYPT_SAFER_64;
                  break;
               case maSafer128:
                  $algorithm = MCRYPT_SAFER_128;
                  break;
               case maSaferPlus:
                  $algorithm = MCRYPT_SAFER_PLUS;
                  break;
               case maSerpent:
                  $algorithm = MCRYPT_SERPENT;
                  break;
               case maSerpent_128:
                  $algorithm = MCRYPT_SERPENT_128;
                  break;
               case maSerpent_192:
                  $algorithm = MCRYPT_SERPENT_192;
                  break;
               case maSerpent_256:
                  $algorithm = MCRYPT_SERPENT_256;
                  break;
               case maSkipjack:
                  $algorithm = MCRYPT_SKIPJACK;
                  break;
               case maTean:
                  $algorithm = MCRYPT_TEAN;
                  break;
               case maThreeway:
                  $algorithm = MCRYPT_THREEWAY;
                  break;
               case maTripleDes:
                  $algorithm = MCRYPT_TRIPLEDES;
                  break;
               case maTwoFish:
                  $algorithm = MCRYPT_TWOFISH;
                  break;
               case maTwoFish128:
                  $algorithm = MCRYPT_TWOFISH_128;
                  break;
               case maTwoFish192:
                  $algorithm = MCRYPT_TWOFISH_192;
                  break;
               case maTwoFish256:
                  $algorithm = MCRYPT_TWOFISH_256;
                  break;
               case maWake:
                  $algorithm = MCRYPT_WAKE;
                  break;
               case maXtea:
                  $algorithm = MCRYPT_XTEA;
                  break;
            }
            $data['algorithm'] = $algorithm;

            $mode = '';
            switch($this->_mcryptmode)
            {
               case mmECB:
                  $mode = MCRYPT_MODE_ECB;
                  break;
               case mmCBC:
                  $mode = MCRYPT_MODE_CBC;
                  break;
               case mmCFB:
                  $mode = MCRYPT_MODE_CFB;
                  break;
               case mmOFB:
                  $mode = MCRYPT_MODE_OFB;
                  break;
               case mmNOFB:
                  $mode = MCRYPT_MODE_NOFB;
                  break;
               case mmSTREAM:
                  $mode = MCRYPT_MODE_STREAM;
                  break;
            }
            $data['mode'] = $mode;
            $data['vector'] = $this->_mcryptvector;
            if($this->_mcryptsalt == 'false' || $this->_mcryptsalt == 0)
            {
               $data['salt'] = false;
            }
            else
            {
               $data['salt'] = true;
            }
            break;
      }

      return $data;
   }



}

// Encrypt Adapters

define('eaOpenssl', 'eaOpenssl');
define('eaMcrypt', 'eaMcrypt');

/**
 * Encrypt filter.
 *
 * This filter can encrypt a file.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.filters.html Zend Framework Documentation
 */
class ZFileEncryptFilter extends ZFileOptions
{

   // Encrypt Adapter

   /**
    * Encrypt adapter.
    *
    * @var      string
    */
   protected $_encryptadapter = eaMcrypt;

   /**
    * Getter method for {@link $_encryptadapter}.
    *
    * @return   string  {@link $_encryptadapter}
    */
   function getEncryptAdapter()    {return $this->_encryptadapter;}

   /**
    * Setter method for {@link $_encryptadapter}.
    *
    * @param    string  $value
    */
   function setEncryptAdapter($value)    {$this->_encryptadapter = $value;}

   /**
    * Getter for {@link $_encryptadapter}’s default value.
    *
    * @return   string  {@link eaMcrypt}
    */
   function defaultEncryptAdapter()    {return eaMcrypt;}

   // Mcrypt Key

   /**
    * Mcrypt key.
    *
    * @var      string
    */
   protected $_mcryptkey = '';

   /**
    * Getter method for {@link $_mcryptkey}.
    *
    * @return   string  {@link $_mcryptkey}
    */
   function getMcryptKey()    {return $this->_mcryptkey;}

   /**
    * Setter method for {@link $_mcryptkey}.
    *
    * @param    string  $value
    */
   function setMcryptKey($value)    {$this->_mcryptkey = $value;}

   /**
    * Getter for {@link $_mcryptkey}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultMcryptKey()    {return '';}

   // Mcrypt Algorithm

   /**
    * Mcrypt algorithm.
    *
    * @var      string
    */
   protected $_mcryptalgorithm = ma3DES;

   /**
    * Getter method for {@link $_mcryptalgorithm}.
    *
    * @return   string  {@link $_mcryptalgorithm}
    */
   function getMcryptAlgorithm()    {return $this->_mcryptalgorithm;}

   /**
    * Setter method for {@link $_mcryptalgorithm}.
    *
    * @param    string  $value
    */
   function setMcryptAlgorithm($value)    {$this->_mcryptalgorithm = $value;}

   /**
    * Getter for {@link $_mcryptalgorithm}’s default value.
    *
    * @return   string  {@link ma3DES}
    */
   function defaultMcryptAlgorithm()    {return ma3DES;}

   // Mcrypt Mode

   /**
    * Mcrypt mode.
    *
    * @var      string
    */
   protected $_mcryptmode = mmECB;

   /**
    * Getter method for {@link $_mcryptmode}.
    *
    * @return   string  {@link $_mcryptmode}
    */
   function getMcryptMode()    {return $this->_mcryptmode;}

   /**
    * Setter method for {@link $_mcryptmode}.
    *
    * @param    string  $value
    */
   function setMcryptMode($value)    {$this->_mcryptmode = $value;}

   /**
    * Getter for {@link $_mcryptmode}’s default value.
    *
    * @return   string  {@link mmECB}
    */
   function defaultMcryptMode()    {return mmECB;}

   // Mcrypt Vector

   /**
    * Mcrypt vector.
    *
    * @var      string
    */
   protected $_mcryptvector = '';

   /**
    * Getter method for {@link $_mcryptvector}.
    *
    * @return   string  {@link $_mcryptvector}
    */
   function getMcryptVector()    {return $this->_mcryptvector;}

   /**
    * Setter method for {@link $_mcryptvector}.
    *
    * @param    string  $value
    */
   function setMcryptVector($value)    {$this->_mcryptvector = $value;}

   /**
    * Getter for {@link $_mcryptvector}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultMcryptVector()    {return '';}

   // Mcrypt Salt

   /**
    * Whether or not a salt value is needed.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_mcryptsalt = 'false';

   /**
    * Getter method for {@link $_mcryptsalt}.
    *
    * @return   string  {@link $_mcryptsalt}
    */
   function getMcryptSalt()    {return $this->_mcryptsalt;}

   /**
    * Setter method for {@link $_mcryptsalt}.
    *
    * @param    string  $value
    */
   function setMcryptSalt($value)    {$this->_mcryptsalt = $value;}

   /**
    * Getter for {@link $_mcryptsalt}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultMcryptSalt()    {return 'false';}

   // OpenSSL Public Key

   /**
    * OpenSSL public key.
    *
    * @var      string
    */
   protected $_opensslpublickey = '';

   /**
    * Getter method for {@link $_opensslpublickey}.
    *
    * @return   string  {@link $_opensslpublickey}
    */
   function getOpensslPublicKey()    {return $this->_opensslpublickey;}

   /**
    * Setter method for {@link $_opensslpublickey}.
    *
    * @param    string  $value
    */
   function setOpensslPublicKey($value)    {$this->_opensslpublickey = $value;}

   /**
    * Getter for {@link $_opensslpublickey}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultOpensslPublicKey()    {return '';}

   // OpenSSL Private Key

   /**
    * OpenSSL private key.
    *
    * @var      string
    */
   protected $_opensslprivatekey = '';

   /**
    * Getter method for {@link $_opensslprivatekey}.
    *
    * @return   string  {@link $_opensslprivatekey}
    */
   function getOpensslPrivateKey()    {return $this->_opensslprivatekey;}

   /**
    * Setter method for {@link $_opensslprivatekey}.
    *
    * @param    string  $value
    */
   function setOpensslPrivateKey($value)    {$this->_opensslprivatekey = $value;}

   /**
    * Getter for {@link $_opensslprivatekey}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultOpensslPrivateKey()    {return '';}

   // OpenSSL Envelop

   /**
    * OpenSSL envelop.
    *
    * @var      string
    */
   protected $_opensslenvelope = '';

   /**
    * Getter method for {@link $_opensslenvelope}.
    *
    * @return   string  {@link $_opensslenvelope}
    */
   function getOpensslEnvelope()    {return $this->_opensslenvelope;}

   /**
    * Setter method for {@link $_opensslenvelope}.
    *
    * @param    string  $value
    */
   function setOpensslEnvelope($value)    {$this->_opensslenvelope = $value;}

   /**
    * Getter for {@link $_opensslenvelope}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultOpensslEnvelope()    {return '';}

   // OpenSSL Passphrase

   /**
    * OpenSSL passphrase.
    *
    * @var      string
    */
   protected $_opensslpassphrase = '';

   /**
    * Getter method for {@link $_opensslpassphrase}.
    *
    * @return   string  {@link $_opensslpassphrase}
    */
   function getOpensslPassphrase()    {return $this->_opensslpassphrase;}

   /**
    * Setter method for {@link $_opensslpassphrase}.
    *
    * @param    string  $value
    */
   function setOpensslPassphrase($value)    {$this->_opensslpassphrase = $value;}

   /**
    * Getter for {@link $_opensslpassphrase}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultOpensslPassphrase()    {return '';}

   // Getter

   /**
    * Returns filter options.
    *
    * The array will contain the following key-pair values when {@link $_decryptadapter} is set to
    * {@link daOpenssl}:
    * <ul>
    *   <li><b>adapter</b>: <tt>'openssl'</tt>.</li>
    *   <li><b>public</b>: {@link $_opensslpublickey}.</li>
    *   <li><b>private</b>: {@link $_opensslprivatekey}.</li>
    *   <li><b>envelope</b>: {@link $_opensslenvelope}.</li>
    *   <li><b>passphrase</b>: {@link $_opensslpassphrase}.</li>
    * </ul>
    *
    * When {@link $_decryptadapter} is set to {@link daMcrypt}, the array will contain the following
    * key-pair values instead:
    * <ul>
    *   <li><b>adapter</b>: <tt>'mcrypt'</tt>.</li>
    *   <li><b>key</b>: {@link $_mcryptkey}.</li>
    *   <li><b>algorithm</b>: {@link $_mcryptalgorithm}.</li>
    *   <li><b>mode</b>: {@link $_mcryptmode}.</li>
    *   <li><b>vector</b>: {@link $_mcryptvector}.</li>
    *   <li><b>salt</b>: {@link $_mcryptsalt}.</li>
    * </ul>
    *
    * @return   array
    */
   function dumpFilter()
   {
      $data = array();

      switch($this->_encryptadapter)
      {
         case eaOpenssl:
            $data['public'] = $this->_opensslpublickey;
            $data['private'] = $this->_opensslprivatekey;
            $data['envelope'] = $this->_opensslenvelope;
            $data['passphrase'] = $this->_opensslpassphrase;
            $data['adapter'] = 'openssl';
            break;
         case eaMcrypt:
            $data['adapter'] = 'mcrypt';
            $data['key'] = $this->_mcryptkey;
            $algorithm = '';
            switch($this->_mcryptalgorithm)
            {
               case ma3DES:
                  $algorithm = MCRYPT_3DES;
                  break;
               case maArcFour_IV:
                  $algorithm = MCRYPT_ARCFOUR_IV;
                  break;
               case maArcFour:
                  $algorithm = MCRYPT_ARCFOUR;
                  break;
               case maBlowfish:
                  $algorithm = MCRYPT_BLOWFISH;
                  break;
               case maCast128:
                  $algorithm = MCRYPT_CAST_128;
                  break;
               case maCast256:
                  $algorithm = MCRYPT_CAST_256;
                  break;
               case maCrypt:
                  $algorithm = MCRYPT_CRYPT;
                  break;
               case maDes:
                  $algorithm = MCRYPT_DES;
                  break;
               case maDesCompat:
                  $algorithm = MCRYPT_DES_COMPAT;
                  break;
               case maEnigma:
                  $algorithm = MCRYPT_ENIGMA;
                  break;
               case maGost:
                  $algorithm = MCRYPT_GOST;
                  break;
               case maIdea:
                  $algorithm = MCRYPT_IDEA;
                  break;
               case maLoki97:
                  $algorithm = MCRYPT_LOKI97;
                  break;
               case maMars:
                  $algorithm = MCRYPT_MARS;
                  break;
               case maPanama:
                  $algorithm = MCRYPT_PANAMA;
                  break;
               case maRijndael128:
                  $algorithm = MCRYPT_RIJNDAEL_128;
                  break;
               case maRijndael192:
                  $algorithm = MCRYPT_RIJNDAEL_192;
                  break;
               case maRijndael256:
                  $algorithm = MCRYPT_RIJNDAEL_256;
                  break;
               case maRC2:
                  $algorithm = MCRYPT_RC2;
                  break;
               case maRC4:
                  $algorithm = MCRYPT_RC4;
                  break;
               case maRC6:
                  $algorithm = MCRYPT_RC6;
                  break;
               case maRC6_128:
                  $algorithm = MCRYPT_RC6_128;
                  break;
               case maRC6_192:
                  $algorithm = MCRYPT_RC6_192;
                  break;
               case maRC6_256:
                  $algorithm = MCRYPT_RC6_256;
                  break;
               case maSafer64:
                  $algorithm = MCRYPT_SAFER_64;
                  break;
               case maSafer128:
                  $algorithm = MCRYPT_SAFER_128;
                  break;
               case maSaferPlus:
                  $algorithm = MCRYPT_SAFER_PLUS;
                  break;
               case maSerpent:
                  $algorithm = MCRYPT_SERPENT;
                  break;
               case maSerpent_128:
                  $algorithm = MCRYPT_SERPENT_128;
                  break;
               case maSerpent_192:
                  $algorithm = MCRYPT_SERPENT_192;
                  break;
               case maSerpent_256:
                  $algorithm = MCRYPT_SERPENT_256;
                  break;
               case maSkipjack:
                  $algorithm = MCRYPT_SKIPJACK;
                  break;
               case maTean:
                  $algorithm = MCRYPT_TEAN;
                  break;
               case maThreeway:
                  $algorithm = MCRYPT_THREEWAY;
                  break;
               case maTripleDes:
                  $algorithm = MCRYPT_TRIPLEDES;
                  break;
               case maTwoFish:
                  $algorithm = MCRYPT_TWOFISH;
                  break;
               case maTwoFish128:
                  $algorithm = MCRYPT_TWOFISH_128;
                  break;
               case maTwoFish192:
                  $algorithm = MCRYPT_TWOFISH_192;
                  break;
               case maTwoFish256:
                  $algorithm = MCRYPT_TWOFISH_256;
                  break;
               case maWake:
                  $algorithm = MCRYPT_WAKE;
                  break;
               case maXtea:
                  $algorithm = MCRYPT_XTEA;
                  break;
            }
            $data['algorithm'] = $algorithm;

            $mode = '';
            switch($this->_mcryptmode)
            {
               case mmECB:
                  $mode = MCRYPT_MODE_ECB;
                  break;
               case mmCBC:
                  $mode = MCRYPT_MODE_CBC;
                  break;
               case mmCFB:
                  $mode = MCRYPT_MODE_CFB;
                  break;
               case mmOFB:
                  $mode = MCRYPT_MODE_OFB;
                  break;
               case mmNOFB:
                  $mode = MCRYPT_MODE_NOFB;
                  break;
               case mmSTREAM:
                  $mode = MCRYPT_MODE_STREAM;
                  break;
            }
            $data['mode'] = $mode;
            $data['vector'] = $this->_mcryptvector;
            if($this->_mcryptsalt == 'false' || $this->_mcryptsalt == 0)
            {
               $data['salt'] = false;
            }
            else
            {
               $data['salt'] = true;
            }
            break;
      }

      return $data;
   }
}

/**
 * Lowercase filter.
 *
 * This filter can lowercase the content of a text file.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.filters.html Zend Framework Documentation
 */
class ZFileLowerCaseFilter extends ZFileOptions
{

   // Encoding

   /**
    * Character encoding.
    *
    * @var      string
    */
   protected $_encoding = '';

   /**
    * Getter method for {@link $_encoding}.
    *
    * @return   string  {@link $_encoding}
    */
   function getEncoding()    {return $this->_encoding;}

   /**
    * Setter method for {@link $_encoding}.
    *
    * @param    string  $value
    */
   function setEncoding($value)    {$this->_encoding = $value;}

   /**
    * Getter for {@link $_encoding}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultEncoding()    {return '';}

   // Getter

   /**
    * Returns file encoding.
    *
    * @return   string
    */
   function dumpFilter()
   {
      return $this->_encoding;
   }

}

/**
 * Uppercase filter.
 *
 * This filter can uppercase the content of a text file.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.filters.html Zend Framework Documentation
 */
class ZFileUpperCaseFilter extends ZFileOptions
{

   // Encoding

   /**
    * Character encoding.
    *
    * @var      string
    */
   protected $_encoding = '';

   /**
    * Getter method for {@link $_encoding}.
    *
    * @return   string  {@link $_encoding}
    */
   function getEncoding()    {return $this->_encoding;}

   /**
    * Setter method for {@link $_encoding}.
    *
    * @param    string  $value
    */
   function setEncoding($value)    {$this->_encoding = $value;}

   /**
    * Getter for {@link $_encoding}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultEncoding()    {return '';}

   // Getter

   /**
    * Returns file encoding.
    *
    * @return   string
    */
   function dumpFilter()
   {
      return $this->_encoding;
   }
}

/**
 * Rename filter.
 *
 * This filter can rename files, change the location and even force overwriting of existing files.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.file.transfer.filters.html Zend Framework Documentation
 */
class ZFileRenameFilter extends ZFileOptions
{

   // Target

   /**
    * Target filepath.
    *
    * @var      string
    */
   protected $_target = '';

   /**
    * Getter method for {@link $_target}.
    *
    * @return   string  {@link $_target}
    */
   function getTarget()    {return $this->_target;}

   /**
    * Setter method for {@link $_target}.
    *
    * @param    string  $value
    */
   function setTarget($value)    {$this->_target = $value;}

   /**
    * Getter for {@link $_target}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultTarget()    {return '';}

   // Source

   /**
    * Source filepath.
    *
    * @var      string
    */
   protected $_source = '';

   /**
    * Getter method for {@link $_source}.
    *
    * @return   string  {@link $_source}
    */
   function getSource()    {return $this->_source;}

   /**
    * Setter method for {@link $_source}.
    *
    * @param    string  $value
    */
   function setSource($value)    {$this->_source = $value;}

   /**
    * Getter for {@link $_source}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultSource()    {return '';}

   // Overwrite

   /**
    * Whether or not to allow overwriting a previous file located at the
    * {@link $_target target path}.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_overwrite = 'false';

   /**
    * Getter method for {@link $_overwrite}.
    *
    * @return   string  {@link $_overwrite}
    */
   function getOverwrite()    {return $this->_overwrite;}

   /**
    * Setter method for {@link $_overwrite}.
    *
    * @param    string  $value
    */
   function setOverwrite($value)    {$this->_overwrite = $value;}

   /**
    * Getter for {@link $_overwrite}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultOverwrite()    {return 'false';}

   // Getter

   /**
    * Returns filter options.
    *
    * The array will contain the following key-pair values:
    * <ul>
    *   <li><b>target</b>: {@link $_target}.</li>
    *   <li><b>source</b>: {@link $_source}.</li>
    *   <li><b>overwrite</b>: {@link $_overwrite}.</li>
    * </ul>
    *
    * @return   array
    */
   function dumpFilter()
   {
      $data = array();

      $data['target'] = $this->_target;
      $data['source'] = $this->_source;
      if($this->_overwrite == 'false' || $this->_overwrite == 0)
      {
         $data['overwrite'] = false;
      }
      else
      {
         $data['overwrite'] = true;
      }

      return $data;
   }

}

/**
 * Component to work with uploaded files.
 *
 * It lets you apply some validation rules and filters to an uploaded file.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.feed.writer.html Zend Framework Documentation
 */
class ZFile extends Component
{
   /**
    * Zend Framework File Transfer Adapter HTTP instance.
    *
    * @var      Zend_File_Transfer_Adapter_Http
    */
   private $_adapter = null;

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);

      //Validator properties
      $this->_countvalidator = new ZFileCountValidator($this);
      $this->_crc32validator = new ZFileCrc32Validator($this);
      $this->_excludeextensionvalidator = new ZFileExcludeExtensionValidator($this);
      $this->_excludemimetypevalidator = new ZFileExcludeMimeTypeValidator($this);
      $this->_existsvalidator = new ZFileExistsValidator($this);
      $this->_extensionvalidator = new ZFileExtensionValidator($this);
      $this->_filessizevalidator = new ZFileSizeValidator($this);
      $this->_imagesizevalidator = new ZFileImageSizeValidator($this);
      $this->_iscompressedvalidator = new ZFileIsCompressedValidator($this);
      $this->_isimagevalidator = new ZFileIsImageValidator($this);
      $this->_hashvalidator = new ZFileHashValidator($this);
      $this->_md5validator = new ZFileMD5Validator($this);
      $this->_mimetypevalidator = new ZFileMimeTypeValidator($this);
      $this->_notexistsvalidator = new ZFileNotExistsValidator($this);
      $this->_sha1validator = new ZFileSHA1Validator($this);
      $this->_sizevalidator = new ZFileSizeValidator($this);
      $this->_wordcountvalidator = new ZFileWordCountValidator($this);

      //Filter properties
      $this->_decryptfilter = new ZFileDecryptFilter($this);
      $this->_encryptfilter = new ZFileEncryptFilter($this);
      $this->_lowercasefilter = new ZFileLowerCaseFilter($this);
      $this->_uppercasefilter = new ZFileUpperCaseFilter($this);
      $this->_renamefilter = new ZFileRenameFilter($this);

   }

   /**
    * Generator for {@link $_adapter}.
    *
    * Generates a {@link Zend_File_Transfer_Adapter_Http Zend Framework File Transfer Adapter HTTP}
    * object from those properties set for this {@link ZFile} instance (or defaults), and saves it
    * to {@link $_adapter}.
    */
   function CreateFile()
   {
      $this->_adapter = new Zend_File_Transfer_Adapter_Http();

      if(($this->ControlState & csDesigning) == csDesigning)

      {
         $this->_destination = $this->guessTempFolder();
         $this->_destination.="/";
      }
      else{
      
        $this->_adapter->setDestination($this->_destination);
      }

      $options = array();
      if($this->_ignorenofile == 0 || $this->_ignorenofile=='false')
      {
         $options['ignoreNoFile'] = 'false';
      }
      else
      {
         $options['ignoreNoFile'] = 'true';
      }
      
      $this->_adapter->setOptions($options);

      $validators = array();
      if($this->_countvalidator->getEnabled() == 1)
      {
         $validators['Count'] = $this->_countvalidator->dumpValidator();
      }
      if($this->_crc32validator->getEnabled() == 1)
      {
         $validators['Crc32'] = $this->_crc32validator->dumpValidator();
      }
      if($this->_excludeextensionvalidator->getEnabled() == 1)
      {
         $validators['ExcludeExtension'] = $this->_excludeextensionvalidator->dumpValidator();
      }

      if($this->_excludemimetypevalidator->getEnabled() == 1)
      {
         $validators['ExcludeMimeType'] = $this->_excludemimetypevalidator->dumpValidator();
      }

      if($this->_existsvalidator->getEnabled() == 1)
      {
         $validators['Exists'] = $this->_existsvalidator->dumpValidator();
      }

      if($this->_extensionvalidator->getEnabled() == 1)
      {
         $validators['Extension'] = $this->_extensionvalidator->dumpValidator();
      }

      if($this->_filessizevalidator->getEnabled() == 1)
      {
         $validators['FilesSize'] = $this->_filessizevalidator->dumpValidator();
      }

      if($this->_imagesizevalidator->getEnabled() == 1)
      {
         $validators['ImageSize'] = $this->_imagesizevalidator->dumpValidator();
      }

      if($this->_iscompressedvalidator->getEnabled() == 1)
      {
         $validators['IsCompressed'] = $this->_iscompressedvalidator->dumpValidator();
      }

      if($this->_isimagevalidator->getEnabled() == 1)
      {
         $validators['IsImage'] = $this->_isimagevalidator->dumpValidator();
      }

      if($this->_hashvalidator->getEnabled() == 1)
      {
         $validators['Hash'] = $this->_hashvalidator->dumpValidator();
      }

      if($this->_md5validator->getEnabled() == 1)
      {
         $validators['Md5'] = $this->_md5validator->dumpValidator();
      }

      if($this->_mimetypevalidator->getEnabled() == 1)
      {
         $validators['MimeType'] = $this->_mimetypevalidator->dumpValidator();
      }

      if($this->_notexistsvalidator->getEnabled() == 1)
      {
         $validators['NotExists'] = $this->_notexistsvalidator->dumpValidator();
      }

      if($this->_sha1validator->getEnabled() == 1)
      {
         $validators['Sha1'] = $this->_sha1validator->dumpValidator();
      }

      if($this->_sizevalidator->getEnabled() == 1)
      {
         $validators['Size'] = $this->_sizevalidator->dumpValidator();
      }

      if($this->_wordcountvalidator->getEnabled() == 1)
      {
         $validators['WordCount'] = $this->_wordcountvalidator->dumpValidator();
      }

      $filters = array();

      if($this->_decryptfilter->getEnabled() == 1)
      {
         $filters['Decrypt'] = $this->_decryptfilter->dumpFilter();
      }

      if($this->_encryptfilter->getEnabled() == 1)
      {
         $filters['Encrypt'] = $this->_encryptfilter->dumpFilter();
      }

      if($this->_lowercasefilter->getEnabled() == 1)
      {
         $filters['LowerCase'] = $this->_lowercasefilter->dumpFilter();
      }

      if($this->_uppercasefilter->getEnabled() == 1)
      {
         $filters['UpperCase'] = $this->_uppercasefilter->dumpFilter();
      }

      if($this->RenameFilter->getEnabled() == 1)
      {
         $filters['Rename'] = $this->_renamefilter->dumpFilter();
      }

      $this->_adapter->setValidators($validators);
      $this->_adapter->setFilters($filters);

   }

   /**
    * Checks if files pass validators’s rules.
    *
    * @return   boolean
    */
   function isValid()
   {
      return $this->_adapter->isValid();
   }

   /**
    * Checks if files have been uploaded (client-side).
    *
    * @return   boolean
    */
   function isUploaded()
   {
      return $this->_adapter->isUploaded();
   }

   /**
    * Checks if files have already been received (server-side).
    *
    * @return   boolean
    */
   function isReceived()
   {
      return $this->_adapter->isReceived();
   }

   /**
    * Returns the messages generated from filters and validators.
    *
    * @return   array
    */
   function findMessages()
   {
      return $this->_adapter->getMessages();
   }

   /**
    * Retrieves the filename of transferred files.
    *
    * @return   array
    */
   function findFileName()
   {
      return $this->_adapter->getFileName();
   }

   /**
    * Retrieve additional internal file information for files.
    *
    * @return   array
    */
   function findFileInfo()
   {
      return $this->_adapter->getFileInfo();
   }

   /**
    * Returns files sizes.
    *
    * @return   array
    */
   function findFileSize()
   {
      return $this->_adapter->getFileSize();
   }

   /**
    * Returns files hashes.
    *
    * @param    string  $algorithmhash  Hash algorithm.
    * @return   array
    */
   function findHash($algorithmhash)
   {
      return $this->_adapter->getHash($algorithmhash);
   }

   /**
    * Returns transferred files MIME types.
    *
    * @return   array
    */
   function findMimeType()
   {
      return $this->_adapter->getMimeType();

   }

   // Count

   /**
    * Count validator.
    *
    * @var      ZFileCountValidator
    */
   protected $_countvalidator = null;

   /**
    * Getter method for {@link $_countvalidator}.
    *
    * @return   ZFileCountValidator     {@link $_countvalidator}
    */
   function getCountValidator()    {return $this->_countvalidator;}

   /**
    * Setter method for {@link $_countvalidator}.
    *
    * @param    ZFileCountValidator     $value
    */
   function setCountValidator($value)    {if(is_object($value))        {$this->_countvalidator = $value;}}

   /**
    * Getter for {@link $_countvalidator}’s default value.
    *
    * @return   ZFileCountValidator     Null
    */
   function defaultCountValidator()    {return null;}

   // Crc32

   /**
    * CRC-32 validator.
    *
    * @var      ZFileCrc32Validator
    */
   protected $_crc32validator = null;

   /**
    * Getter method for {@link $_crc32validator}.
    *
    * @return   ZFileCrc32Validator     {@link $_crc32validator}
    */
   function getCrc32Validator()    {return $this->_crc32validator;}

   /**
    * Setter method for {@link $_crc32validator}.
    *
    * @param    ZFileCrc32Validator     $value
    */
   function setCrc32Validator($value)    {if(is_object($value))        {$this->_crc32validator = $value;}}

   /**
    * Getter for {@link $_crc32validator}’s default value.
    *
    * @return   ZFileCrc32Validator     Null
    */
   function defaultCrc32Validator()    {return null;}

   // Exclude Extension

   /**
    * Exclude Extension validator.
    *
    * @var      ZFileExcludeExtensionValidator
    */
   protected $_excludeextensionvalidator = null;

   /**
    * Getter method for {@link $_excludeextensionvalidator}.
    *
    * @return   ZFileExcludeExtensionValidator  {@link $_excludeextensionvalidator}
    */
   function getExcludeExtensionValidator()    {return $this->_excludeextensionvalidator;}

   /**
    * Setter method for {@link $_excludeextensionvalidator}.
    *
    * @param    ZFileExcludeExtensionValidator  $value
    */
   function setExcludeExtensionValidator($value)    {if(is_object($value))        {$this->_excludeextensionvalidator = $value;}}

   /**
    * Getter for {@link $_excludeextensionvalidator}’s default value.
    *
    * @return   ZFileExcludeExtensionValidator  Null
    */
   function defaultExcludeExtensionValidator()    {return null;}

   // Exclude MIME Type

   /**
    * Exclude MIME Type validator.
    *
    * @var      ZFileExcludeMimeTypeValidator
    */
   protected $_excludemimetypevalidator = null;

   /**
    * Getter method for {@link $_excludemimetypevalidator}.
    *
    * @return   ZFileExcludeMimeTypeValidator   {@link $_excludemimetypevalidator}
    */
   function getExcludeMimeTypeValidator()    {return $this->_excludemimetypevalidator;}

   /**
    * Setter method for {@link $_excludemimetypevalidator}.
    *
    * @param    ZFileExcludeMimeTypeValidator   $value
    */
   function setExcludeMimeTypeValidator($value)    {if(is_object($value))        {$this->_excludemimetypevalidator = $value;}}

   /**
    * Getter for {@link $_excludemimetypevalidator}’s default value.
    *
    * @return   ZFileExcludeMimeTypeValidator   Null
    */
   function defaultExcludeMimeTypeValidator()    {return null;}

   // Exists

   /**
    * Exists validator.
    *
    * @var      ZFileExistsValidator
    */
   protected $_existsvalidator = null;

   /**
    * Getter method for {@link $_existsvalidator}.
    *
    * @return   ZFileExistsValidator    {@link $_existsvalidator}
    */
   function getExistsValidator()    {return $this->_existsvalidator;}

   /**
    * Setter method for {@link $_existsvalidator}.
    *
    * @param    ZFileExistsValidator    $value
    */
   function setExistsValidator($value)    {if(is_object($value))        {$this->_existsvalidator = $value;}}

   /**
    * Getter for {@link $_existsvalidator}’s default value.
    *
    * @return   ZFileExistsValidator    Null
    */
   function defaultExistsValidator()    {return null;}

   // Extension

   /**
    * Extension validator.
    *
    * @var      ZFileExtensionValidator
    */
   protected $_extensionvalidator = null;

   /**
    * Getter method for {@link $_extensionvalidator}.
    *
    * @return   ZFileExtensionValidator {@link $_extensionvalidator}
    */
   function getExtensionValidator()    {return $this->_extensionvalidator;}

   /**
    * Setter method for {@link $_extensionvalidator}.
    *
    * @param    ZFileExtensionValidator $value
    */
   function setExtensionValidator($value)    {if(is_object($value))        {$this->_extensionvalidator = $value;}}

   /**
    * Getter for {@link $_extensionvalidator}’s default value.
    *
    * @return   ZFileExtensionValidator Null
    */
   function defaultExtensionValidator()    {return null;}

   // File Size

   /**
    * File Size validator.
    *
    * @var      ZFileFilesSizeValidator
    */
   protected $_filessizevalidator = null;

   /**
    * Getter method for {@link $_countvalidator}.
    *
    * @return   ZFileFilesSizeValidator {@link $_countvalidator}
    */
   function getFilesSizeValidator()    {return $this->_filessizevalidator;}

   /**
    * Setter method for {@link $_countvalidator}.
    *
    * @param    ZFileFilesSizeValidator $value
    */
   function setFilesSizeValidator($value)    {if(is_object($value))        {$this->_filessizevalidator = $value;}}

   /**
    * Getter for {@link $_countvalidator}’s default value.
    *
    * @return   ZFileFilesSizeValidator Null
    */
   function defaultFilesSizeValidator()    {return null;}

   // Image Size

   /**
    * Image Size validator.
    *
    * @var      ZFileImageSizeValidator
    */
   protected $_imagesizevalidator = null;

   /**
    * Getter method for {@link $_imagesizevalidator}.
    *
    * @return   ZFileImageSizeValidator {@link $_imagesizevalidator}
    */
   function getImageSizeValidator()    {return $this->_imagesizevalidator;}

   /**
    * Setter method for {@link $_imagesizevalidator}.
    *
    * @param    ZFileImageSizeValidator $value
    */
   function setImageSizeValidator($value)    {if(is_object($value))        {$this->_imagesizevalidator = $value;}}

   /**
    * Getter for {@link $_imagesizevalidator}’s default value.
    *
    * @return   ZFileImageSizeValidator Null
    */
   function defaultImageSizeValidator()    {return null;}

   // Is Compressed

   /**
    * Is Compressed validator.
    *
    * @var      ZFileIsCompressedValidator
    */
   protected $_iscompressedvalidator = null;

   /**
    * Getter method for {@link $_countvalidator}.
    *
    * @return   ZFileIsCompressedValidator      {@link $_countvalidator}
    */
   function getIsCompressedValidator()    {return $this->_iscompressedvalidator;}

   /**
    * Setter method for {@link $_countvalidator}.
    *
    * @param    ZFileIsCompressedValidator      $value
    */
   function setIsCompressedValidator($value)    {if(is_object($value))        {$this->_iscompressedvalidator = $value;}}

   /**
    * Getter for {@link $_countvalidator}’s default value.
    *
    * @return   ZFileIsCompressedValidator      Null
    */
   function defaultIsCompressedValidator()    {return null;}

   // Is Image

   /**
    * Is Image validator.
    *
    * @var      ZFileIsImageValidator
    */
   protected $_isimagevalidator = null;

   /**
    * Getter method for {@link $_isimagevalidator}.
    *
    * @return   ZFileIsImageValidator   {@link $_isimagevalidator}
    */
   function getIsImageValidator()    {return $this->_isimagevalidator;}

   /**
    * Setter method for {@link $_isimagevalidator}.
    *
    * @param    ZFileIsImageValidator   $value
    */
   function setIsImageValidator($value)    {if(is_object($value))        {$this->_isimagevalidator = $value;}}

   /**
    * Getter for {@link $_isimagevalidator}’s default value.
    *
    * @return   ZFileIsImageValidator   Null
    */
   function defaultIsImageValidator()    {return null;}

   // Hash

   /**
    * Hash validator.
    *
    * @var      ZFileHashValidator
    */
   protected $_hashvalidator = null;

   /**
    * Getter method for {@link $_hashvalidator}.
    *
    * @return   ZFileHashValidator      {@link $_hashvalidator}
    */
   function getHashValidator()    {return $this->_hashvalidator;}

   /**
    * Setter method for {@link $_hashvalidator}.
    *
    * @param    ZFileHashValidator      $value
    */
   function setHashValidator($value)    {if(is_object($value))        {$this->_hashvalidator = $value;}}

   /**
    * Getter for {@link $_hashvalidator}’s default value.
    *
    * @return   ZFileHashValidator      Null
    */
   function defaultHashValidator()    {return null;}

   // MD5

   /**
    * MD5 validator.
    *
    * @var      ZFileMD5Validator
    */
   protected $_md5validator = null;

   /**
    * Getter method for {@link $_countvalidator}.
    *
    * @return   ZFileMD5Validator       {@link $_countvalidator}
    */
   function getMD5Validator()    {return $this->_md5validator;}

   /**
    * Setter method for {@link $_countvalidator}.
    *
    * @param    ZFileMD5Validator       $value
    */
   function setMD5Validator($value)    {if(is_object($value))        {$this->_md5validator = $value;}}

   /**
    * Getter for {@link $_countvalidator}’s default value.
    *
    * @return   ZFileMD5Validator       Null
    */
   function defaultMD5Validator()    {return null;}

   // MIME Type

   /**
    * MIME Type validator.
    *
    * @var      ZFileMimeTypeValidator
    */
   protected $_mimetypevalidator = null;

   /**
    * Getter method for {@link $_mimetypevalidator}.
    *
    * @return   ZFileMimeTypeValidator  {@link $_mimetypevalidator}
    */
   function getMimeTypeValidator()    {return $this->_mimetypevalidator;}

   /**
    * Setter method for {@link $_mimetypevalidator}.
    *
    * @param    ZFileMimeTypeValidator  $value
    */
   function setMimeTypeValidator($value)    {if(is_object($value))        {$this->_mimetypevalidator = $value;}}

   /**
    * Getter for {@link $_mimetypevalidator}’s default value.
    *
    * @return   ZFileMimeTypeValidator  Null
    */
   function defaultMimeTypeValidator()    {return null;}

   // Not Exists

   /**
    * Not Exists validator.
    *
    * @var      ZFileNotExistsValidator
    */
   protected $_notexistsvalidator = null;

   /**
    * Getter method for {@link $_notexistsvalidator}.
    *
    * @return   ZFileNotExistsValidator {@link $_notexistsvalidator}
    */
   function getNotExistsValidator()    {return $this->_notexistsvalidator;}

   /**
    * Setter method for {@link $_notexistsvalidator}.
    *
    * @param    ZFileNotExistsValidator $value
    */
   function setNotExistsValidator($value)    {if(is_object($value))        {$this->_notexistsvalidator = $value;}}

   /**
    * Getter for {@link $_notexistsvalidator}’s default value.
    *
    * @return   ZFileNotExistsValidator Null
    */
   function defaultNotExistsValidator()    {return null;}

   // SHA-1

   /**
    * SHA-1 validator.
    *
    * @var      ZFileSHA1Validator
    */
   protected $_sha1validator = null;

   /**
    * Getter method for {@link $_countvalidator}.
    *
    * @return   ZFileSHA1Validator      {@link $_countvalidator}
    */
   function getSHA1Validator()    {return $this->_sha1validator;}

   /**
    * Setter method for {@link $_countvalidator}.
    *
    * @param    ZFileSHA1Validator      $value
    */
   function setSHA1Validator($value)    {if(is_object($value))        {$this->_sha1validator = $value;}}

   /**
    * Getter for {@link $_countvalidator}’s default value.
    *
    * @return   ZFileSHA1Validator      Null
    */
   function defaultSHA1Validator()    {return null;}

   // Size

   /**
    * Size validator.
    *
    * @var      ZFileSizeValidator
    */
   protected $_sizevalidator = null;

   /**
    * Getter method for {@link $_sizevalidator}.
    *
    * @return   ZFileSizeValidator      {@link $_sizevalidator}
    */
   function getSizeValidator()    {return $this->_sizevalidator;}

   /**
    * Setter method for {@link $_sizevalidator}.
    *
    * @param    ZFileSizeValidator      $value
    */
   function setSizeValidator($value)    {if(is_object($value))        {$this->_sizevalidator = $value;}}

   /**
    * Getter for {@link $_sizevalidator}’s default value.
    *
    * @return   ZFileSizeValidator      Null
    */
   function defaultSizeValidator()    {return null;}

   // Word Count

   /**
    * Word Count validator.
    *
    * @var      ZFileWordCountValidator
    */
   protected $_wordcountvalidator = null;

   /**
    * Getter method for {@link $_countvalidator}.
    *
    * @return   ZFileWordCountValidator {@link $_countvalidator}
    */
   function getWordCountValidator()    {return $this->_wordcountvalidator;}

   /**
    * Setter method for {@link $_countvalidator}.
    *
    * @param    ZFileWordCountValidator $value
    */
   function setWordCountValidator($value)    {if(is_object($value))        {$this->_wordcountvalidator = $value;}}

   /**
    * Getter for {@link $_countvalidator}’s default value.
    *
    * @return   ZFileWordCountValidator Null
    */
   function defaultWordCountValidator()    {return null;}

   // Decrypt

   /**
    * Decrypt filter.
    *
    * @var      ZFileDecryptFilter
    */
   protected $_decryptfilter = null;

   /**
    * Getter method for {@link $_decryptfilter}.
    *
    * @return   ZFileDecryptFilter      {@link $_decryptfilter}
    */
   function getDecryptFilter()    {return $this->_decryptfilter;}

   /**
    * Setter method for {@link $_decryptfilter}.
    *
    * @param    ZFileDecryptFilter      $value
    */
   function setDecryptFilter($value)    {if(is_object($value))        {$this->_decryptfilter = $value;}}

   /**
    * Getter for {@link $_decryptfilter}’s default value.
    *
    * @return   ZFileDecryptFilter      Null
    */
   function defaultDecryptFilter()    {return null;}

   // Encrypt

   /**
    * Encrypt filter.
    *
    * @var      ZFileEncryptFilter
    */
   protected $_encryptfilter = null;

   /**
    * Getter method for {@link $_encryptfilter}.
    *
    * @return   ZFileEncryptFilter      {@link $_encryptfilter}
    */
   function getEncryptFilter()    {return $this->_encryptfilter;}

   /**
    * Setter method for {@link $_encryptfilter}.
    *
    * @param    ZFileEncryptFilter      $value
    */
   function setEncryptFilter($value)    {if(is_object($value))        {$this->_encryptfilter = $value;}}

   /**
    * Getter for {@link $_encryptfilter}’s default value.
    *
    * @return   ZFileEncryptFilter      Null
    */
   function defaultEncryptFilter()    {return null;}

   // Lowercase

   /**
    * Lowercase filter.
    *
    * @var      ZFileLowerCaseFilter
    */
   protected $_lowercasefilter = null;

   /**
    * Getter method for {@link $_lowercasefilter}.
    *
    * @return   ZFileLowerCaseFilter    {@link $_lowercasefilter}
    */
   function getLowerCaseFilter()    {return $this->_lowercasefilter;}

   /**
    * Setter method for {@link $_lowercasefilter}.
    *
    * @param    ZFileLowerCaseFilter    $value
    */
   function setLowerCaseFilter($value)    {if(is_object($value))        {$this->_lowercasefilter = $value;}}

   /**
    * Getter for {@link $_lowercasefilter}’s default value.
    *
    * @return   ZFileLowerCaseFilter    Null
    */
   function defaultLowerCaseFilter()    {return null;}

   // Uppercase

   /**
    * Uppercase filter.
    *
    * @var      ZFileUpperCaseFilter
    */
   protected $_uppercasefilter = null;

   /**
    * Getter method for {@link $_uppercasefilter}.
    *
    * @return   ZFileUpperCaseFilter    {@link $_uppercasefilter}
    */
   function getUpperCaseFilter()    {return $this->_uppercasefilter;}

   /**
    * Setter method for {@link $_uppercasefilter}.
    *
    * @param    ZFileUpperCaseFilter    $value
    */
   function setUpperCaseFilter($value)    {if(is_object($value))        {$this->_uppercasefilter = $value;}}

   /**
    * Getter for {@link $_uppercasefilter}’s default value.
    *
    * @return   ZFileUpperCaseFilter    Null
    */
   function defaultUpperCaseFilter()    {return null;}

   // Rename

   /**
    * Rename filter.
    *
    * @var      ZFileRenameFilter
    */
   protected $_renamefilter = null;

   /**
    * Getter method for {@link $_renamefilter}.
    *
    * @return   ZFileRenameFilter       {@link $_renamefilter}
    */
   function getRenameFilter()    {return $this->_renamefilter;}

   /**
    * Setter method for {@link $_renamefilter}.
    *
    * @param    ZFileRenameFilter       $value
    */
   function setRenameFilter($value)    {if(is_object($value))        {$this->_renamefilter = $value;}}

   /**
    * Getter for {@link $_renamefilter}’s default value.
    *
    * @return   ZFileRenameFilter       Null
    */
   function defaultRenameFilter()    {return null;}

   // Destination

   /**
    * Path to uploads directory.
    *
    * @var      string
    */
   protected $_destination = '';

   /**
    * Getter method for {@link $_destination}.
    *
    * @return   string  {@link $_destination}
    */
   function getDestination()    {return $this->_destination;}

   /**
    * Setter method for {@link $_destination}.
    *
    * @param    string  $value
    */
   function setDestination($value)    {$this->_destination = $value;}

   /**
    * Getter for {@link $_destination}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDestination()    {return '';}

   // Ignore File

   /**
    * Whether or not validator will ignore files that have not been uploaded through the form.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_ignorenofile = 'false';

   /**
    * Getter method for {@link $_ignorenofile}.
    *
    * @return   string  {@link $_ignorenofile}
    */
   function getIgnoreNoFile()    {return $this->_ignorenofile;}

   /**
    * Setter method for {@link $_ignorenofile}.
    *
    * @param    string  $value
    */
   function setIgnoreNoFile($value)    {$this->_ignorenofile = $value;}

   /**
    * Getter for {@link $_ignorenofile}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultIgnoreNoFile()    {return 'false';}

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      $this->CreateFile();
   }

   /**
    * Receive the file from the client (perform the upload).
    *
    * Returns true is everything works normal, false otherwise.
    *
    * @return   boolean
    */
   function receive()
   {
      return $this->_adapter->receive();
   }

   /**
    * Guesses a temporal-folder path.
    *
    * @return   string
    */
   function guessTempFolder()
   {
      if(preg_match("/^WIN/i", PHP_OS))
      {
         if(isset($_ENV['TMP']))
         {
            $temp = $_ENV['TMP'];
         }
         elseif(isset($_ENV['TEMP']))
         {
            $temp = $_ENV['TEMP'];
         }
         else
         {
            $tmpfolder = getenv('TMP');
            if(($tmpfolder === false) || ($tmpfolder == ''))
            {
               $tmpfolder = getenv('TEMP');
               if(($tmpfolder === false) || ($tmpfolder == ''))
               {
                  $tmpfolder = '/tmp/';
               }
            }
            $temp = $tmpfolder;
         }
      }
      else
      {
         $temp = '/tmp/';
      }

      return $temp;
   }
}

?>