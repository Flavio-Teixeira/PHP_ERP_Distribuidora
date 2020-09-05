<?php

/**
 * Zend/zlog.inc.php
 * 
 * Defines Zend Framework Logging component.
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
use_unit("Zend/framework/library/Zend/Log.php");
use_unit("Zend/framework/library/Zend/Log/Writer/Stream.php");
use_unit("Zend/framework/library/Zend/Log/Writer/Db.php");
use_unit("Zend/framework/library/Zend/Log/Writer/Mail.php");
use_unit("Zend/framework/library/Zend/Log/Writer/Firebug.php");
use_unit("Zend/framework/library/Zend/Log/Writer/Syslog.php");
use_unit("Zend/framework/library/Zend/Log/Writer/ZendMonitor.php");
use_unit("Zend/framework/library/Zend/Log/Writer/Null.php");
use_unit("Zend/framework/library/Zend/Log/Formatter/Xml.php");
use_unit("Zend/framework/library/Zend/Log/Formatter/Simple.php");
use_unit("Zend/framework/library/Zend/Controller/Request/Http.php");
use_unit("Zend/framework/library/Zend/Controller/Response/Http.php");
use_unit('Zend/framework/library/Zend/Db/Adapter/Pdo/Mysql.php');
use_unit('Zend/framework/library/Zend/Db/Adapter/Pdo/Mssql.php');
use_unit('Zend/framework/library/Zend/Db/Adapter/Pdo/Pgsql.php');

/**
 * Base class for the different log writing classes for {@link ZLog}.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.log.writers.html Zend Framework Documentation
 */
class ZWriterOptions extends Persistent
{

    // Owner

   /**
    * Owner.
    *
    * @var      ZLog
    */
   protected $ZWriter = null;

   /**
    * {@inheritdoc}
    *
    * @return   ZLog
    */
   function readOwner()
   {
      return ($this->ZWriter);
   }

   // Constructor

   /**
    * Class constructor.
    *
    * @param    ZLog    $aowner {@link ZLog Owner}.
    */
   function __construct($aowner)
   {
      parent::__construct();

      $this->ZWriter = $aowner;
   }

   // Active

   /**
    * Whether or not the writer is active.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_active = 'false';

   /**
    * Getter method for {@link $_active}.
    *
    * @return   string  {@link $_active}
    */
   function getActive()    {return $this->_active;}

   /**
    * Setter method for {@link $_active}.
    *
    * @param    string  $value
    */
   function setActive($value)    {$this->_active = $value;}

   /**
    * Getter for {@link $_active}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultActive()    {return 'false';}

   // CRIT Priority

   /**
    * Whether or not critical messages, with {@link Zend_Log::CRIT} priority, are enabled for this
    * writer.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_prioritycrit = 'true';

   /**
    * Getter method for {@link $_prioritycrit}.
    *
    * @return   string  {@link $_prioritycrit}
    */
   function getPriorityCrit()    {return $this->_prioritycrit;}

   /**
    * Setter method for {@link $_prioritycrit}.
    *
    * @param    string  $value
    */
   function setPriorityCrit($value)    {$this->_prioritycrit = $value;}

   /**
    * Getter for {@link $_prioritycrit}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultPriorityCrit()    {return 'true';}

   // EMERG Priority

   /**
    * Whether or not messages about emergencies (issues that render the system unusable), with
    * {@link Zend_Log::EMERG} priority, are enabled for this writer.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_priorityemerg = 'true';

   /**
    * Getter method for {@link $_priorityemerg}.
    *
    * @return   string  {@link $_priorityemerg}
    */
   function getPriorityEmerg()    {return $this->_priorityemerg;}

   /**
    * Setter method for {@link $_priorityemerg}.
    *
    * @param    string  $value
    */
   function setPriorityEmerg($value)    {$this->_priorityemerg = $value;}

   /**
    * Getter for {@link $_priorityemerg}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultPriorityEmerg()    {return 'true';}

   // ALERT Priority

   /**
    * Whether or not alerts (issues that require immediate action), with {@link Zend_Log::ALERT}
    * priority, are enabled for this writer.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_priorityalert = 'true';

   /**
    * Getter method for {@link $_priorityalert}.
    *
    * @return   string  {@link $_priorityalert}
    */
   function getPriorityAlert()    {return $this->_priorityalert;}

   /**
    * Setter method for {@link $_priorityalert}.
    *
    * @param    string  $value
    */
   function setPriorityAlert($value)    {$this->_priorityalert = $value;}

   /**
    * Getter for {@link $_priorityalert}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultPriorityAlert()    {return 'true';}

   // ERR Priority

   /**
    * Whether or not error messages, with {@link Zend_Log::ERR} priority, are enabled for this
    * writer.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_priorityerr = 'true';

   /**
    * Getter method for {@link $_priorityerr}.
    *
    * @return   string  {@link $_priorityerr}
    */
   function getPriorityErr()    {return $this->_priorityerr;}

   /**
    * Setter method for {@link $_priorityerr}.
    *
    * @param    string  $value
    */
   function setPriorityErr($value)    {$this->_priorityerr = $value;}

   /**
    * Getter for {@link $_priorityerr}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultPriorityErr()    {return 'true';}

   // WARN Priority

   /**
    * Whether or not warnings, with {@link Zend_Log::WARN} priority, are enabled for this writer.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_prioritywarn = 'true';

   /**
    * Getter method for {@link $_prioritywarn}.
    *
    * @return   string  {@link $_prioritywarn}
    */
   function getPriorityWarn()    {return $this->_prioritywarn;}

   /**
    * Setter method for {@link $_prioritywarn}.
    *
    * @param    string  $value
    */
   function setPriorityWarn($value)    {$this->_prioritywarn = $value;}

   /**
    * Getter for {@link $_prioritywarn}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultPriorityWarn()    {return 'true';}

   // NOTICE Priority

   /**
    * Whether or not messages about normal but significant conditions, with {@link Zend_Log::NOTICE}
    * priority, are enabled for this writer.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_prioritynotice = 'true';

   /**
    * Getter method for {@link $_prioritynotice}.
    *
    * @return   string  {@link $_prioritynotice}
    */
   function getPriorityNotice()    {return $this->_prioritynotice;}

   /**
    * Setter method for {@link $_prioritynotice}.
    *
    * @param    string  $value
    */
   function setPriorityNotice($value)    {$this->_prioritynotice = $value;}

   /**
    * Getter for {@link $_prioritynotice}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultPriorityNotice()    {return 'true';}

   // INFO Priority

   /**
    * Whether or not informational messages, with {@link Zend_Log::INFO} priority, are enabled for
    * this writer.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_priorityinfo = 'true';

   /**
    * Getter method for {@link $_priorityinfo}.
    *
    * @return   string  {@link $_priorityinfo}
    */
   function getPriorityInfo()    {return $this->_priorityinfo;}

   /**
    * Setter method for {@link $_priorityinfo}.
    *
    * @param    string  $value
    */
   function setPriorityInfo($value)    {$this->_priorityinfo = $value;}

   /**
    * Getter for {@link $_priorityinfo}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultPriorityInfo()    {return 'true';}

   // DEBUG Priority

   /**
    * Whether or not debug messages, with {@link Zend_Log::DEBUG} priority, are enabled for this
    * writer.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @var      string
    */
   protected $_prioritydebug = 'true';

   /**
    * Getter method for {@link $_prioritydebug}.
    *
    * @return   string  {@link $_prioritydebug}
    */
   function getPriorityDebug()    {return $this->_prioritydebug;}

   /**
    * Setter method for {@link $_prioritydebug}.
    *
    * @param    string  $value
    */
   function setPriorityDebug($value)    {$this->_prioritydebug = $value;}

   /**
    * Getter for {@link $_prioritydebug}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultPriorityDebug()    {return 'true';}

   /**
    * Returns the list of disabled priorities.
    *
    * @return   array
    */
   function generatePriority()
   {
      $data = array();

      if( ! $this->_priorityalert)
      {
         $data[] = new Zend_Log_Filter_Priority(Zend_Log::ALERT, "!=");
      }

      if( ! $this->_prioritycrit)
      {
         $data[] = new Zend_Log_Filter_Priority(Zend_Log::CRIT, "!=");
      }

      if( ! $this->_prioritydebug)
      {
         $data[] = new Zend_Log_Filter_Priority(Zend_Log::DEBUG, "!=");
      }

      if( ! $this->_priorityemerg)
      {
         $data[] = new Zend_Log_Filter_Priority(Zend_Log::EMERG, "!=");
      }

      if( ! $this->_priorityerr)
      {
         $data[] = new Zend_Log_Filter_Priority(Zend_Log::ERR, "!=");
      }

      if( ! $this->_priorityinfo)
      {
         $data[] = new Zend_Log_Filter_Priority(Zend_Log::INFO, "!=");
      }

      if( ! $this->_prioritynotice)
      {
         $data[] = new Zend_Log_Filter_Priority(Zend_Log::NOTICE, "!=");
      }

      if( ! $this->_prioritywarn)
      {
         $data[] = new Zend_Log_Filter_Priority(Zend_Log::WARN, "!=");
      }

      return $data;
   }

}

/**
 * Writer for {@link http://php.net/stream streams}.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.log.writers.html#zend.log.writers.stream Zend Framework Documentation
 */
class ZWriterStream extends ZWriterOptions
{

   // Stream or URL

   /**
    * Target stream.
    *
    * You can either specify a path to a local file, or a full stream address. Check
    * {@link http://php.net/manual/en/intro.stream.php PHP Documentation} for additional
    * information.
    *
    * @var      string
    */
   protected $_streamorurl = '';

   /**
    * Getter method for {@link $_streamorurl}.
    *
    * @return   string  {@link $_streamorurl}
    */
   function getStreamOrUrl()    {return $this->_streamorurl;}

   /**
    * Setter method for {@link $_streamorurl}.
    *
    * @param    string  $value
    */
   function setStreamOrUrl($value)    {$this->_streamorurl = $value;}

   /**
    * Getter for {@link $_streamorurl}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultStreamOrUrl()    {return '';}

   // Access Mode

   /**
    * Type of access to be required for the stream.
    *
    * Check {@link http://php.net/manual/en/function.fopen.php fopen()}’s second parameter
    * documentation for additional information. Make sure you use an access mode with write
    * permission, though.
    *
    * @var      string
    */
   protected $_modeopen = 'a';

   /**
    * Getter method for {@link $_modeopen}.
    *
    * @return   string  {@link $_modeopen}
    */
   function getModeOpen()    {return $this->_modeopen;}

   /**
    * Setter method for {@link $_modeopen}.
    *
    * @param    string  $value
    */
   function setModeOpen($value)    {$this->_modeopen = $value;}

   /**
    * Getter for {@link $_modeopen}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultModeOpen()    {return 'a';}

   // Simple Formatter Toggle

   /**
    * Whether or not to use simple formatter to define the way messages are logged in the stream.
    *
    * @see $_formattersimpleformat
    *
    * @var      string
    */
   protected $_formattersimpleactive = 'false';

   /**
    * Getter method for {@link $_formattersimpleactive}.
    *
    * @return   string  {@link $_formattersimpleactive}
    */
   function getFormatterSimpleActive()    {return $this->_formattersimpleactive;}

   /**
    * Setter method for {@link $_formattersimpleactive}.
    *
    * @param    string  $value
    */
   function setFormatterSimpleActive($value)    {$this->_formattersimpleactive = $value;}

   /**
    * Getter for {@link $_formattersimpleactive}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultFormatterSimpleActive()    {return 'false';}

   // Simple Formatter Format

   /**
    * Format definition for messages.
    *
    * This property only applies when {@link $_formattersimpleactive} is set to true ('true').
    *
    * The string should contain keys surrounded by percent signs which will be replaced with the
    * actual values. Some possible keys to be included are: message, timestamp, priorityName or
    * priority. Default format is: '%timestamp% %priorityName% (%priority%): %message%'.
    *
    * @link     http://framework.zend.com/manual/en/zend.log.formatters.html#zend.log.formatters.simple Zend Documentation
    *
    * @var      string
    */
   protected $_formattersimpleformat = '';

   /**
    * Getter method for {@link $_formattersimpleformat}.
    *
    * @return   string  {@link $_formattersimpleformat}
    */
   function getFormatterSimpleFormat()    {return $this->_formattersimpleformat;}

   /**
    * Setter method for {@link $_formattersimpleformat}.
    *
    * @param    string  $value
    */
   function setFormatterSimpleFormat($value)    {$this->_formattersimpleformat = $value;}

   /**
    * Getter for {@link $_formattersimpleformat}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultFormatterSimpleFormat()    {return '';}

   // XML Formatter Toggle

   /**
    * Whether or not to use XML formatter to define the way messages are logged in the stream.
    *
    * @var      string
    */
   protected $_formatterxmlactive = 'false';

   /**
    * Getter method for {@link $_formatterxmlactive}.
    *
    * @return   string  {@link $_formatterxmlactive}
    */
   function getFormatterXmlActive()    {return $this->_formatterxmlactive;}

   /**
    * Setter method for {@link $_formatterxmlactive}.
    *
    * @param    string  $value
    */
   function setFormatterXmlActive($value)    {$this->_formatterxmlactive = $value;}

   /**
    * Getter for {@link $_formatterxmlactive}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultFormatterXmlActive()    {return 'false';}

   // XML Root Element

   /**
    * Name of the root element for resulting XML code.
    *
    * @var      string
    */
   protected $_formatterxmlrootelement = '';

   /**
    * Getter method for {@link $_formatterxmlrootelement}.
    *
    * @return   string  {@link $_formatterxmlrootelement}
    */
   function getFormatterXmlRootElement()    {return $this->_formatterxmlrootelement;}

   /**
    * Setter method for {@link $_formatterxmlrootelement}.
    *
    * @param    string  $value
    */
   function setFormatterXmlRootElement($value)    {$this->_formatterxmlrootelement = $value;}

   /**
    * Getter for {@link $_formatterxmlrootelement}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultFormatterXmlRootElement()    {return '';}

   // XML Child Elements

   /**
    * Names of the child elements for resulting XML code.
    *
    * Only parameter is an array with key-value pairs, where each key is the name of a child element
    * to be used in the XML code, and its value is the real name of the element.
    *
    * @link     http://framework.zend.com/manual/en/zend.log.formatters.html#zend.log.formatters.xml    Zend Documentation
    *
    * @var      array
    */
   protected $_formatterxmlelements = array();

   /**
    * Getter method for {@link $_formatterxmlelements}.
    *
    * @return   array   {@link $_formatterxmlelements}
    */
   function getFormatterXmlElements()    {return $this->_formatterxmlelements;}

   /**
    * Setter method for {@link $_formatterxmlelements}.
    *
    * @param    array   $value
    */
   function setFormatterXmlElements($value)    {$this->_formatterxmlelements = $value;}

   /**
    * Getter for {@link $_formatterxmlelements}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultFormatterXmlElements()    {return array();}

   // Generator

   /**
    * Returns defined writer.
    *
    * If either {@link $_streamorurl} or {@link $_modeopen} properties are empty, this method will
    * return a boolean value, false.
    *
    * @return   boolean|Zend_Log_Writer_Stream
    */
   function createWriter()
   {
      if($this->_streamorurl != '' && $this->_modeopen != '')
      {
         $writer = new Zend_Log_Writer_Stream($this->_streamorurl, $this->_modeopen);

         if($this->_formattersimpleactive)
         {
            $formatter = new Zend_Log_Formatter_Simple($this->_formattersimpleformat . PHP_EOL);
            $writer->setFormatter($formatter);
         }

         if($this->_formatterxmlactive)
         {
            if($this->_formatterxmlrootelement == '')
            {
               $root = 'logEntry';
            }
            else
            {
               $root = $this->_formatterxmlrootelement;
            }

            if(count($this->_formatterxmlelements) != 0)
            {
               $elements = array_flip($this->_formatterxmlelements);
            }
            else
            {
               $elements = null;
            }

            $formatter = new Zend_Log_Formatter_Xml($root, $elements);
            $writer->setFormatter($formatter);
         }

         $filters = $this->generatePriority();

         foreach($filters as $filter)
         {
            $writer->addFilter($filter);
         }

         return $writer;
      }
      else
      {
         return false;
      }
   }
}

/**
 * Writer for databases.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.log.writers.html#zend.log.writers.database Zend Framework Documentation
 */
class ZWriterDB extends ZWriterOptions
{

   // Host

   /**
    * Database host address.
    *
    * @var      string
    */
   protected $_host = '';

   /**
    * Getter method for {@link $_host}.
    *
    * @return   string  {@link $_host}
    */
   function getHost()    {return $this->_host;}

   /**
    * Setter method for {@link $_host}.
    *
    * @param    string  $value
    */
   function setHost($value)    {$this->_host = $value;}

   /**
    * Getter for {@link $_host}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultHost()    {return '';}

   // Username

   /**
    * Username to access the database with.
    *
    * @var      string
    */
   protected $_username = '';

   /**
    * Getter method for {@link $_username}.
    *
    * @return   string  {@link $_username}
    */
   function getUsername()    {return $this->_username;}

   /**
    * Setter method for {@link $_username}.
    *
    * @param    string  $value
    */
   function setUsername($value)    {$this->_username = $value;}

   /**
    * Getter for {@link $_username}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultUsername()    {return '';}

   // Password

   /**
    * User password to access the database.
    *
    * @var      string
    */
   protected $_password = '';

   /**
    * Getter method for {@link $_password}.
    *
    * @return   string  {@link $_password}
    */
   function getPassword()    {return $this->_password;}

   /**
    * Setter method for {@link $_password}.
    *
    * @param    string  $value
    */
   function setPassword($value)    {$this->_password = $value;}

   /**
    * Getter for {@link $_password}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultPassword()    {return '';}

   // Database Name

   /**
    * Database name.
    *
    * @var      string
    */
   protected $_databasename = '';

   /**
    * Getter method for {@link $_databasename}.
    *
    * @return   string  {@link $_databasename}
    */
   function getDatabaseName()    {return $this->_databasename;}

   /**
    * Setter method for {@link $_databasename}.
    *
    * @param    string  $value
    */
   function setDatabaseName($value)    {$this->_databasename = $value;}

   /**
    * Getter for {@link $_databasename}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDatabaseName()    {return '';}

   // Table Name

   /**
    * Name of the table inside the database where log should be stored.
    *
    * @var      string
    */
   protected $_tablename = '';

   /**
    * Getter method for {@link $_tablename}.
    *
    * @return   string  {@link $_tablename}
    */
   function getTableName()    {return $this->_tablename;}

   /**
    * Setter method for {@link $_tablename}.
    *
    * @param    string  $value
    */
   function setTableName($value)    {$this->_tablename = $value;}

   /**
    * Getter for {@link $_tablename}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultTableName()    {return '';}

   // Priority Column

   /**
    * Column from {@link $_tablename} to store priority data.
    *
    * @var      string
    */
   protected $_columnpriority = '';

   /**
    * Getter method for {@link $_columnpriority}.
    *
    * @return   string  {@link $_columnpriority}
    */
   function getColumnPriority()    {return $this->_columnpriority;}

   /**
    * Setter method for {@link $_columnpriority}.
    *
    * @param    string  $value
    */
   function setColumnPriority($value)    {$this->_columnpriority = $value;}

   /**
    * Getter for {@link $_columnpriority}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultColumnPriority()    {return '';}

   // Message Column

   /**
    * Column from {@link $_tablename} to store message data.
    *
    * @var      string
    */
   protected $_columnmessage = '';

   /**
    * Getter method for {@link $_columnmessage}.
    *
    * @return   string  {@link $_columnmessage}
    */
   function getColumnMessage()    {return $this->_columnmessage;}

   /**
    * Setter method for {@link $_columnmessage}.
    *
    * @param    string  $value
    */
   function setColumnMessage($value)    {$this->_columnmessage = $value;}

   /**
    * Getter for {@link $_columnmessage}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultColumnMessage()    {return '';}

   // Timestamp Column

   /**
    * Column from {@link $_tablename} to store timestamp.
    *
    * @var      string
    */
   protected $_columntimestamp = '';

   /**
    * Getter method for {@link $_columntimestamp}.
    *
    * @return   string  {@link $_columntimestamp}
    */
   function getColumnTimestamp()    {return $this->_columntimestamp;}

   /**
    * Setter method for {@link $_columntimestamp}.
    *
    * @param    string  $value
    */
   function setColumnTimestamp($value)    {$this->_columntimestamp = $value;}

   /**
    * Getter for {@link $_columntimestamp}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultColumnTimestamp()    {return '';}

   // Priority Name Column

   /**
    * Column from {@link $_tablename} to store priority name.
    *
    * @var      string
    */
   protected $_columnpriorityname = '';

   /**
    * Getter method for {@link $_columnpriorityname}.
    *
    * @return   string  {@link $_columnpriorityname}
    */
   function getColumnPriorityName()    {return $this->_columnpriorityname;}

   /**
    * Setter method for {@link $_columnpriorityname}.
    *
    * @param    string  $value
    */
   function setColumnPriorityName($value)    {$this->_columnpriorityname = $value;}

   /**
    * Getter for {@link $_columnpriorityname}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultColumnPriorityName()    {return '';}

   // Database Driver

   /**
    * Database driver.
    *
    * @var      string
    */
   protected $_drivername = 'mysql';

   /**
    * Getter method for {@link $_drivername}.
    *
    * @return   string  {@link $_drivername}
    */
   function getDrivername()    {return $this->_drivername;}

   /**
    * Setter method for {@link $_drivername}.
    *
    * @param    string  $value
    */
   function setDrivername($value)    {$this->_drivername = $value;}

   /**
    * Getter for {@link $_drivername}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDrivername()    {return 'mysql';}

   // Port

   /**
    * Database port number.
    *
    * @var      string
    */
   protected $_port = '';

   /**
    * Getter method for {@link $_port}.
    *
    * @return   string  {@link $_port}
    */
   function getPort()    {return $this->_port;}

   /**
    * Setter method for {@link $_port}.
    *
    * @param    string  $value
    */
   function setPort($value)    {$this->_port = $value;}

   /**
    * Getter for {@link $_port}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultPort()    {return '';}

   // Generator

   /**
    * Returns defined writer.
    *
    * If {@link $_tablename} is empty, this method will return a boolean value, false.
    *
    * @return   boolean|Zend_Log_Writer_Db
    */
   function createWriter()
   {
      $options = array(
                       'host'=>$this->_host,
                       'username'=>$this->_username,
                       'password'=>$this->_password,
                       'dbname'=>$this->_databasename
                       );
      if($this->_port != '')
      {
         $options['port'] = $this->_port;
      }


      switch($this->_drivername)
      {
         case 'mysql':
            $db = new Zend_Db_Adapter_Pdo_Mysql($options);
            break;
         case 'postgre':
            $db = new Zend_Db_Adapter_Pdo_Mssql($options);
            break;
         case 'sqlserver':
            $db = new Zend_Db_Adapter_Pdo_Pgsql($options);
            break;
      }

      $columns = array();

      if($this->_columnpriority != '')
      {
         $columns[$this->_columnpriority] = 'priority';
      }

      if($this->_columnmessage != '')
      {
         $columns[$this->_columnmessage] = 'message';
      }

      if($this->_columntimestamp != '')
      {
         $columns[$this->_columntimestamp] = 'timestamp';
      }

      if($this->_columnpriorityname != '')
      {
         $columns[$this->_columnpriorityname] = 'priorityname';
      }

      if($this->_tablename != '')
      {
         $writer = new Zend_Log_Writer_Db($db, $this->_tablename, $columns);

         $filters = $this->generatePriority();

         foreach($filters as $filter)
         {
            $writer->addFilter($filter);
         }

         return $writer;
      }
      else
      {

         return false;
      }
   }
}

/**
 * Writer for {@link http://getfirebug.com/ Firebug} Firefox extension.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.log.writers.html#zend.log.writers.firebug Zend Framework Documentation
 */
class ZWriterFirebug extends ZWriterOptions
{

   // Default Priority Style

   /**
    * Default style for custom priorities.
    *
    * @var      string
    */
   protected $_defaultprioritystyle = '';

   /**
    * Getter method for {@link $_defaultprioritystyle}.
    *
    * @return   string  {@link $_defaultprioritystyle}
    */
   function getDefaultPriorityStyle()    {return $this->_defaultprioritystyle;}

   /**
    * Setter method for {@link $_defaultprioritystyle}.
    *
    * @param    string  $value
    */
   function setDefaultPriorityStyle($value)    {$this->_defaultprioritystyle = $value;}

   /**
    * Getter for {@link $_defaultprioritystyle}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultDefaultPriorityStyle()    {return '';}

   // Priority Styles

   /**
    * Priority styles.
    *
    * Array containing key-value pairs. Each key is a priority number (integer), and is value is a
    * string with the style code to be applied to that priority.
    *
    * Check {@link http://framework.zend.com/manual/en/zend.log.writers.html#zend.log.writers.firebug.priority-styles Zend Documentation}
    * for available Firebug logging styles.
    *
    * @var      array
    */
   protected $_addprioritystyle = array();

   /**
    * Getter method for {@link $_addprioritystyle}.
    *
    * @return   array   {@link $_addprioritystyle}
    */
   function getAddPriorityStyle()    {return $this->_addprioritystyle;}

   /**
    * Setter method for {@link $_addprioritystyle}.
    *
    * @param    array   $value
    */
   function setAddPriorityStyle($value)    {$this->_addprioritystyle = $value;}

   /**
    * Getter for {@link $_addprioritystyle}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultAddPriorityStyle()    {return array();}

   // Generator

   /**
    * Returns defined writer.
    *
    * @return   Zend_Log_Writer_Firebug
    */
   function createWriter()
   {
      $writer = new Zend_Log_Writer_Firebug();

      if($this->_defaultprioritystyle != '')
      {
         $writer->setDefaultPriorityStyle($this->_defaultprioritystyle);
      }

      foreach($this->_addprioritystyle as $num=>$style)
      {
         $writer->setPriorityStyle($num, $style);
      }

      $filters = $this->generatePriority();

      foreach($filters as $filter)
      {
         $writer->addFilter($filter);
      }

      return $writer;
   }
}

/**
 * Writer for email.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.log.writers.html#zend.log.writers.mail Zend Framework Documentation
 */
class ZWriterMail extends ZWriterOptions
{

   // ZMail

   /**
    * Instance of {@link ZMail} to send the logs with.
    *
    * @var      ZMail
    */
   public $_zmail = null;

   /**
    * Getter method for {@link $_zmail}.
    *
    * @return   ZMail   {@link $_zmail}
    */
   function getZMail()    {return $this->_zmail;}

   /**
    * Setter method for {@link $_zmail}.
    *
    * @param    ZMail   $value
    */
   function setZMail($value)    {$this->_zmail = $value;}

   /**
    * Getter for {@link $_zmail}’s default value.
    *
    * @return   ZMail   Null
    */
   function defaultZMail()    {return null;}

   // Generator

   /**
    * Returns defined writer.
    *
    * If {@link $_zmail} is null, this method will return a boolean value, false.
    *
    * @return   boolean|Zend_Log_Writer_Mail
    */
   function createWriter()
   {
      if(is_object($this->_zmail))
      {
         $mail = $this->_zmail->createMail();

         $writer = new Zend_Log_Writer_Mail($mail);

         $filters = $this->generatePriority();

         foreach($filters as $filter)
         {
            $writer->addFilter($filter);
         }
         return $writer;
      }
      else
      {
         return false;
      }
   }
}

/**
 * Writer for the system log.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.log.writers.html#zend.log.writers.syslog Zend Framework Documentation
 */
class ZWriterSyslog extends ZWriterOptions
{

   // Application

   /**
    * Application name as it will be written to the log.
    *
    * @var      string
    */
   protected $_application = '';

   /**
    * Getter method for {@link $_application}.
    *
    * @return   string  {@link $_application}
    */
   function getApplication()    {return $this->_application;}

   /**
    * Setter method for {@link $_application}.
    *
    * @param    string  $value
    */
   function setApplication($value)    {$this->_application = $value;}

   /**
    * Getter for {@link $_application}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultApplication()    {return '';}

   // Facility

   /**
    * Application type as it will be written to the log.
    *
    * @var      string
    */
   protected $_facility = '';

   /**
    * Getter method for {@link $_facility}.
    *
    * @return   string  {@link $_facility}
    */
   function getFacility()    {return $this->_facility;}

   /**
    * Setter method for {@link $_facility}.
    *
    * @param    string  $value
    */
   function setFacility($value)    {$this->_facility = $value;}

   /**
    * Getter for {@link $_facility}’s default value.
    *
    * @return   string  Empty string
    */
   function defaultFacility()    {return '';}

   // Generator

   /**
    * Returns defined writer.
    *
    * @return   Zend_Log_Writer_Syslog
    */
   function createWriter()
   {

      $data = array();
      if($this->_facility != '')
      {

         $data['facility'] = $this->_facility;
      }

      if($this->_application != '')
      {

         $data['application'] = $this->_application;
      }

      $writer = new Zend_Log_Writer_Syslog($data);

      $filters = $this->generatePriority();

      foreach($filters as $filter)
      {
         $writer->addFilter($filter);
      }
      return $writer;
   }

}

/**
 * Writer for Zend Server Monitor.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.log.writers.html#zend.log.writers.zendmonitor Zend Framework Documentation
 */
class ZWriterZendMonitor extends ZWriterOptions
{

   // Generator

   /**
    * Returns the writer.
    *
    * @return   Zend_Log_Writer_ZendMonitor
    */
   function createWriter()
   {
      $writer = new Zend_Log_Writer_ZendMonitor();

      $filters = $this->generatePriority();

      foreach($filters as $filter)
      {
         $writer->addFilter($filter);
      }
      return $writer;
   }
}

/**
 * Null writer, to silence log.
 *
 * Can render useful during testing.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.log.writers.html#zend.log.writers.null Zend Framework Documentation
 */
class ZWriterNull extends ZWriterOptions
{

   // Generator

   /**
    * Returns the writer.
    *
    * @return   Zend_Log_Writer_Null
    */
   function createWriter()
   {

      $writer = new Zend_Log_Writer_Null();

      $filters = $this->generatePriority();

      foreach($filters as $filter)
      {
         $writer->addFilter($filter);
      }
      return $writer;
   }
}

/**
 * Component to generate logs.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.log.html Zend Framework Documentation
 */
class ZLog extends Component
{

   /**
    * Zend Framework Log instance.
    *
    * @var      Zend_Log
    */
   private $_log = null;

   // Stream Writer

   /**
    * Stream writer instance.
    *
    * @var      ZWriterStream
    */
   protected $_writerstream = null;

   /**
    * Getter method for {@link $_writerstream}.
    *
    * @return   ZWriterStream   {@link $_writerstream}
    */
   function getWriterStream()    {return $this->_writerstream;}

   /**
    * Setter method for {@link $_writerstream}.
    *
    * @param    ZWriterStream   $value
    */
   function setWriterStream($value)    {if(is_object($value))        {$this->_writerstream = $value;}}

   /**
    * Getter for {@link $_writerstream}’s default value.
    *
    * @return   ZWriterStream   Null
    */
   function defaultWriterStream()    {return null;}

   // Database Writer

   /**
    * Database writer instance.
    *
    * @var      ZWriterDB
    */
   protected $_writerdatabase = null;

   /**
    * Getter method for {@link $_writerdatabase}.
    *
    * @return   ZWriterDB       {@link $_writerdatabase}
    */
   function getWriterDatabase()    {return $this->_writerdatabase;}

   /**
    * Setter method for {@link $_writerdatabase}.
    *
    * @param    ZWriterDB       $value
    */
   function setWriterDatabase($value)    {if(is_object($value))        {$this->_writerdatabase = $value;}}

   /**
    * Getter for {@link $_writerdatabase}’s default value.
    *
    * @return   ZWriterDB       Null
    */
   function defaultWriterDatabase()    {return null;}

   // Firebug Writer

   /**
    * Firebug writer instance.
    *
    * @var      ZWriterFirebug
    */
   protected $_writerfirebug = null;

   /**
    * Getter method for {@link $_writerfirebug}.
    *
    * @return   ZWriterFirebug  {@link $_writerfirebug}
    */
   function getWriterFirebug()    {return $this->_writerfirebug;}

   /**
    * Setter method for {@link $_writerfirebug}.
    *
    * @param    ZWriterFirebug  $value
    */
   function setWriterFirebug($value)    {if(is_object($value))        {$this->_writerfirebug = $value;}}

   /**
    * Getter for {@link $_writerfirebug}’s default value.
    *
    * @return   ZWriterFirebug  Null
    */
   function defaultWriterFirebug()    {return null;}

   // Email Writer

   /**
    * Email writer instance.
    *
    * @var      ZWriterMail
    */
   protected $_writeremail = null;

   /**
    * Getter method for {@link $_writeremail}.
    *
    * @return   ZWriterMail     {@link $_writeremail}
    */
   function getWriterEmail()    {return $this->_writeremail;}

   /**
    * Setter method for {@link $_writeremail}.
    *
    * @param    ZWriterMail     $value
    */
   function setWriterEmail($value)    {if(is_object($value))        {$this->_writeremail = $value;}}

   /**
    * Getter for {@link $_writeremail}’s default value.
    *
    * @return   ZWriterMail     Null
    */
   function defaultWriterEmail()    {return null;}

   // System Log Writer

   /**
    * System log writer instance.
    *
    * @var      ZWriterSyslog
    */
   protected $_writersyslog = null;

   /**
    * Getter method for {@link $_writersyslog}.
    *
    * @return   ZWriterSyslog   {@link $_writersyslog}
    */
   function getWriterSyslog()    {return $this->_writersyslog;}

   /**
    * Setter method for {@link $_writersyslog}.
    *
    * @param    ZWriterSyslog   $value
    */
   function setWriterSyslog($value)    {if(is_object($value))        {$this->_writersyslog = $value;}}

   /**
    * Getter for {@link $_writersyslog}’s default value.
    *
    * @return   ZWriterSyslog   Null
    */
   function defaultWriterSyslog()    {return null;}

   // Zend Server Monitor Writer

   /**
    * Zend server monitor writer instance.
    *
    * @var      ZWriterZendMonitor
    */
   protected $_writerzendmonitor = null;

   /**
    * Getter method for {@link $_writerzendmonitor}.
    *
    * @return   ZWriterZendMonitor      {@link $_writerzendmonitor}
    */
   function getWriterZendMonitor()    {return $this->_writerzendmonitor;}

   /**
    * Setter method for {@link $_writerzendmonitor}.
    *
    * @param    ZWriterZendMonitor      $value
    */
   function setWriterZendMonitor($value)    {if(is_object($value))        {$this->_writerzendmonitor = $value;}}

   /**
    * Getter for {@link $_writerzendmonitor}’s default value.
    *
    * @return   ZWriterZendMonitor      Null
    */
   function defaultWriterZendMonitor()    {return null;}

   // Null Writer

   /**
    * Null writer instance.
    *
    * @var      ZWriterNull
    */
   protected $_writernull = null;

   /**
    * Getter method for {@link $_writernull}.
    *
    * @return   ZWriterNull     {@link $_writernull}
    */
   function getWriterNull()    {return $this->_writernull;}

   /**
    * Setter method for {@link $_writernull}.
    *
    * @param    ZWriterNull     $value
    */
   function setWriterNull($value)    {if(is_object($value))        {$this->_writernull = $value;}}

   /**
    * Getter for {@link $_writernull}’s default value.
    *
    * @return   ZWriterNull     Null
    */
   function defaultWriterNull()    {return null;}

   // Custom Priorities

   /**
    * Custom priorities.
    *
    * The array contains key-value pairs. Each key is the name of a custom priority, and its value
    * is the numeric (integer) value associated to it.
    *
    * Existing priorities can not be overwritten.
    *
    * @var      array
    */
   protected $_addpriority = array();

   /**
    * Getter method for {@link $_addpriority}.
    *
    * @return   array   {@link $_addpriority}
    */
   function getAddPriority()    {return $this->_addpriority;}

   /**
    * Setter method for {@link $_addpriority}.
    *
    * @param    array   $value
    */
   function setAddPriority($value)    {$this->_addpriority = $value;}

   /**
    * Getter for {@link $_addpriority}’s default value.
    *
    * @return   array   Empty array
    */
   function defaultAddPriority()    {return array();}

   // Class constructor.

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->_writerstream = new ZWriterStream($this);
      $this->_writerdatabase = new ZWriterDB($this);
      $this->_writerfirebug = new ZWriterFirebug($this);
      $this->_writeremail = new ZWriterMail($this);
      $this->_writersyslog = new ZWriterSyslog($this);
      $this->_writerzendmonitor = new ZWriterZendMonitor($this);
      $this->_writernull = new ZWriterNull($this);

   }

   // Loaded

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
      parent::loaded();

      $this->_writeremail->setZMail($this->fixupProperty($this->_writeremail->getZMail()));
      $this->_createLog();
   }

   /**
    * Generator for {@link $_log}.
    *
    * Generates a Zend Framework Log from defined properties or defaults, and saves it to
    * {@link $_log}.
    *
    * @throws   Zend_Log_Exception      Some {@link $_addpriority custom priorities} overwrite
    *                                   existing ones.
    */
   function _createLog()
   {
      $this->_log = new Zend_Log();

      foreach($this->_addpriority as $num=>$priority)
      {
         $this->_log->addPriority($priority, $num);
      }
      if($this->_writerstream->getActive() != 'false')
      {
         $this->_log->addWriter($this->_writerstream->createWriter());
      }

      if($this->_writerdatabase->getActive() != 'false')
      {
         $this->_log->addWriter($this->_writerdatabase->createWriter());
      }

      if($this->_writerfirebug->getActive() != 'false')
      {

         $this->_log->addWriter($this->_writerfirebug->createWriter());
      }

      if($this->_writeremail->getActive() != 'false')
      {
         $this->_log->addWriter($this->_writeremail->createWriter());
      }

      if($this->_writersyslog->getActive() != 'false')
      {
         $this->_log->addWriter($this->_writersyslog->createWriter());
      }

      if($this->_writerzendmonitor->getActive() != 'false')
      {
         $this->_log->addWriter($this->_writerzendmonitor->createWriter());
      }

      if($this->_writernull->getActive() != 'false')
      {
         $this->_log->addWriter($this->_writernull->createWriter());
      }
   }

   /**
    * Sends a log entry with EMERG priority.
    *
    * @param    string  $text   Log message.
    */
   function emerg($text)
   {
      $this->message($text, Zend_Log::EMERG);
   }

   /**
    * Sends a log entry with ALERT priority.
    *
    * @param    string  $text   Log message.
    */
   function alert($text)
   {
      $this->message($text, Zend_Log::ALERT);
   }

   /**
    * Sends a log entry with CRIT priority.
    *
    * @param    string  $text   Log message.
    */
   function crit($text)
   {
      $this->message($text, Zend_Log::CRIT);
   }

   /**
    * Sends a log entry with ERR priority.
    *
    * @param    string  $text   Log message.
    */
   function err($text)
   {
      $this->message($text, Zend_Log::ERR);
   }

   /**
    * Sends a log entry with WARN priority.
    *
    * @param    string  $text   Log message.
    */
   function warn($text)
   {
      $this->message($text, Zend_Log::WARN);
   }

   /**
    * Sends a log entry with NOTICE priority.
    *
    * @param    string  $text   Log message.
    */
   function notice($text)
   {
      $this->message($text, Zend_Log::NOTICE);
   }

   /**
    * Sends a log entry with INFO priority.
    *
    * @param    string  $text   Log message.
    */
   function info($text)
   {
      $this->message($text, Zend_Log::INFO);
   }

   /**
    * Sends a log entry with DEBUG priority.
    *
    * @param    string  $text   Log message.
    */
   function debug($text)
   {
      $this->message($text, Zend_Log::DEBUG);
   }

   /**
    * Sends a log entry.
    *
    * @param    string  $text           Log message.
    * @param    integer $priority       Log priority.
    */
   function message($text, $priority)
   {
      $request = new Zend_Controller_Request_Http();
      $response = new Zend_Controller_Response_Http();
      $channel = Zend_Wildfire_Channel_HttpHeaders::getInstance();
      $channel->setRequest($request);
      $channel->setResponse($response);
      ob_start();
      $this->_log->log($text, $priority);
      $channel->flush();
      $response->sendHeaders();
   }
}

?>