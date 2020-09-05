<?php

/**
 * Zend/zopenidproviderstoragefile.inc.php
 * 
 * Defines Zend Framework OpenID Provider File Storage component.
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
use_unit("Zend/zcommon/zopenidproviderstorage.inc.php");
require_once("Zend/OpenId/Provider/Storage/File.php");

/**
 * Interface to generate an instance of {@link Zend_OpenId_Provider_Storage_File}.
 * 
 * @package     ZendFramework
 */
class ZOpenIdProviderStorageFile extends ZOpenIdProviderStorage
{

   // Class constructor.

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   /**
    * Guesses a temporal-folder path and setups {@link $_destinationpath} with it.
    */
   function guessTempFolder()
   {
      if(preg_match("/^WIN/i", PHP_OS))
      {
         if(isset($_ENV['TMP']))
         {
            $this->_destinationpath = $_ENV['TMP'];
         }
         elseif(isset($_ENV['TEMP']))
         {
            $this->_destinationpath = $_ENV['TEMP'];
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
            $this->_destinationpath = $tmpfolder;
         }
      }
      else
      {
         $this->_destinationpath = '/tmp/';
      }
   }

   // Destination Path

   /**
    * Path to the directory where files will be stored.
    *
    * If no value is provided for this property, a {@link guessTempFolder() temporal folder} will be
    * used instead.
    *
    * @var      string
    */
   protected $_destinationpath = '';

   /**
    * Getter method for {@link $_destinationpath}.
    *
    * @return   string  {@link $_destinationpath}
    */
   function getDestinationPath()    {return $this->_destinationpath;}

   /**
    * Setter method for {@link $_destinationpath}.
    *
    * @param    string  $value
    */
   function setDestinationPath($value)    {$this->_destinationpath = $value;}

   /**
    * Getter for {@link $_destinationpath}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDestinationPath()    {return '';}

   /**
    * Returns an instance of {@link Zend_OpenId_Provider_Storage_File} generated from provided settings.
    *
    * @return    Zend_OpenId_Provider_Storage_File
    */
   public function CreateStorage()
   {
      $dir = null;
      if($this->_destinationpath != '')
      {
         $dir = $this->_destinationpath;
      }
      else
      {
          $this->guessTempFolder();
          $dir = $this->_destinationpath;
      }
      $file = new Zend_OpenId_Provider_Storage_File($dir);

      return $file;
   }
}

?>