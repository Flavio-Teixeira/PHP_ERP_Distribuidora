<?php

/**
 * Zend/zcache.inc.php
 * 
 * Defines Zend Framework Cache component.
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

// TODO: Review and update the whole file.

/**
 * Include RPCL common file and necessary units.
 */
require_once("rpcl/rpcl.inc.php");
use_unit("Zend/zcommon/zcommon.inc.php");
use_unit("classes.inc.php");
use_unit("cache.inc.php");
use_unit("Zend/framework/library/Zend/Cache.php");

// Frontends

/**
 * Core frontend.
 *
 * @link        http://framework.zend.com/manual/en/zend.cache.frontends.html#zend.cache.frontends.core Zend Framework Documentation
 * 
 * @const       cfCore
 */
define('cfCore', 'cfCore');

/**
 * Output frontend.
 *
 * @link        http://framework.zend.com/manual/en/zend.cache.frontends.html#zend.cache.frontends.output Zend Framework Documentation
 * 
 * @const       cfOutput
 */
define('cfOutput', 'cfOutput');

/**
 * Function frontend.
 *
 * @link        http://framework.zend.com/manual/en/zend.cache.frontends.html#zend.cache.frontends.function Zend Framework Documentation
 * 
 * @const       cfFunction
 */
define('cfFunction', 'cfFunction');

/**
 * Class frontend.
 *
 * @link        http://framework.zend.com/manual/en/zend.cache.frontends.html#zend.cache.frontends.class Zend Framework Documentation
 * 
 * @const       cfClass
 */
define('cfClass', 'cfClass');

/**
 * File frontend.
 *
 * @link        http://framework.zend.com/manual/en/zend.cache.frontends.html#zend.cache.frontends.file Zend Framework Documentation
 * 
 * @const       cfFile
 */
define('cfFile', 'cfFile');

/**
 * Page frontend.
 *
 * @link        http://framework.zend.com/manual/en/zend.cache.frontends.html#zend.cache.frontends.page Zend Framework Documentation
 * 
 * @const       cfPage
 */
define('cfPage', 'cfPage');

// Backends

/**
 * File backend.
 *
 * @link        http://framework.zend.com/manual/en/zend.cache.backends.html#zend.cache.backends.file Zend Framework Documentation
 * 
 * @const       cbFile
 */
define('cbFile', 'cbFile');

/**
 * SQLite backend.
 *
 * @link        http://framework.zend.com/manual/en/zend.cache.backends.html#zend.cache.backends.sqlite Zend Framework Documentation
 * 
 * @const       cbSQLite
 */
define('cbSQLite', 'cbSQLite');

/**
 * Memcached backend.
 *
 * @link        http://framework.zend.com/manual/en/zend.cache.backends.html#zend.cache.backends.memcached Zend Framework Documentation
 * 
 * @const       cbMemcached
 */
define('cbMemcached', 'cbMemcached');

/**
 * APC backend.
 *
 * @link        http://framework.zend.com/manual/en/zend.cache.backends.html#zend.cache.backends.apc Zend Framework Documentation
 * 
 * @const       cbAPC
 */
define('cbAPC', 'cbAPC');

/**
 * Zend Platform backend.
 *
 * @link        http://framework.zend.com/manual/en/zend.cache.backends.html#zend.cache.backends.platform Zend Framework Documentation
 * 
 * @const       cbZendPlatform
 */
define('cbZendPlatform', 'cbPlatform');

// Read Control Type

/**
 * CRC32 read control type.
 *
 * @link        http://en.wikipedia.org/wiki/CRC32 Wikipedia
 * 
 * @const       rctCRC32
 */
define('rctCRC32', 'rctCRC32');

/**
 * MD5 read control type.
 *
 * @link        http://en.wikipedia.org/wiki/MD5 Wikipedia
 * 
 * @const       rctMD5
 */
define('rctMD5', 'rctMD5');

/**
 * Adler-32 read control type.
 *
 * @link        http://en.wikipedia.org/wiki/Adler-32 Wikipedia
 * 
 * @const       rctADLER32
 */
define('rctADLER32', 'rctADLER32');

/**
 * {@link strlen()} read control type.
 *
 * @link        http://php.net/manual/en/function.strlen.php Wikipedia
 * 
 * @const       rctSTRLEN
 */
define('rctSTRLEN', 'rctSTRLEN');

/**
 * Base class for frontend options.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.cache.html Zend Framework Documentation
 */
class ZCacheOptions extends Persistent
{

    // Owner

    /**
     * Owner.
     *
     * @var     ZCache
     */
    protected $ZCache=null;

    /**
     * {@inheritdoc}
     *
     * @return  ZCache
     */
    function readOwner()
    {
         return($this->ZCache);
    }

    // Constructor

    /**
     * Class constructor.
     *
     * @param   ZCache  $aowner {@link $ZCache Owner}.
     */
    function __construct($aowner)
    {
        parent::__construct();

        $this->ZCache=$aowner;
    }
}

/**
 * Options for {@link cfFunction Function frontend}.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.cache.frontends.html#zend.cache.frontends.function Zend Framework Documentation
 */
class ZCacheFrontendFunctionOptions extends ZCacheOptions
{

    // Cached by Default

    /**
     * Whether or not to cache function calls by default.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_cachebydefault = "1";

    /**
     * Getter method for {@link $_cachebydefault}.
     *
     * @return   string  {@link $_cachebydefault}
     */
    function getCacheByDefault() { return $this->_cachebydefault; }

    /**
     * Setter method for {@link $_cachebydefault}.
     *
     * @param    string  $value
     */
    function setCacheByDefault($value) { $this->_cachebydefault = $value; }

    /**
     * Getter for {@link $_cachebydefault}’s default value.
     *
     * @return   string  True ('1')
     */
    function defaultCacheByDefault() { return "1"; }

    // Cached Functions

    /**
     * Names of functions to be always cached.
     * 
     * @var      array
     */
    protected $_cachedfunctions = array();

    /**
     * Getter method for {@link $_cachedfunctions}.
     *
     * @return   array   {@link $_cachedfunctions}
     */
    function getCachedFunctions() { return $this->_cachedfunctions; }

    /**
     * Setter method for {@link $_cachedfunctions}.
     *
     * @param    array   $value
     */
    function setCachedFunctions($value) { $this->_cachedfunctions = $value; }

    /**
     * Getter for {@link $_cachedfunctions}’s default value.
     *
     * @return   array   Empty array
     */
    function defaultCachedFunctions() { return array(); }

    // Non-Cached Functions

    /**
     * Names of functions to never be cached.
     * 
     * @var      array
     */
    protected $_noncachedfunctions = array();

    /**
     * Getter method for {@link $_noncachedfunctions}.
     *
     * @return   array   {@link $_noncachedfunctions}
     */
    function getNonCachedFunctions() { return $this->_noncachedfunctions; }

    /**
     * Setter method for {@link $_noncachedfunctions}.
     *
     * @param    array   $value
     */
    function setNonCachedFunctions($value) { $this->_noncachedfunctions = $value; }

    /**
     * Getter for {@link $_noncachedfunctions}’s default value.
     *
     * @return   array   Empty array
     */
    function defaultNonCachedFunctions() { return array(); }
}

/**
 * Options for {@link cfClass Class frontend}.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.cache.frontends.html#zend.cache.frontends.class Zend Framework Documentation
 */
class ZCacheFrontendClassOptions extends ZCacheOptions
{

    // Cached Entity

    /**
     * Entity to be cached
     *
     * If set to a class name, an abstract class will be cached, and only static calls will be used;
     * if set to an object, its methods will be cached instead.
     * 
     * @var      mixed
     */
    protected $_cachedentity="";

    /**
     * Getter method for {@link $_cachedentity}.
     *
     * @return   mixed   {@link $_cachedentity}
     */
    function getCachedEntity() { return $this->_cachedentity; }

    /**
     * Setter method for {@link $_cachedentity}.
     *
     * @param    mixed   $value
     */
    function setCachedEntity($value) { $this->_cachedentity=$value; }

    /**
     * Getter for {@link $_cachedentity}’s default value.
     *
     * @return  string  Empty string
     */
    function defaultCachedEntity() { return ""; }

    // Cached by Default

    /**
     * Whether or not to cache calls by default.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_cachebydefault="1";

    /**
     * Getter method for {@link $_cachebydefault}.
     *
     * @return   string {@link $_cachebydefault}
     */
    function getCacheByDefault() { return $this->_cachebydefault; }

    /**
     * Setter method for {@link $_cachebydefault}.
     *
     * @param    string $value
     */
    function setCacheByDefault($value) { $this->_cachebydefault=$value; }

    /**
     * Getter for {@link $_cachebydefault}’s default value.
     *
     * @return   string True ('1')
     */
    function defaultCacheByDefault() { return "1"; }

    // Cached Methods

    /**
     * Names of methods to be always cached.
     * 
     * @var      array
     */
    protected $_cachedmethods=array();

    /**
     * Getter method for {@link $_cachedmethods}.
     *
     * @return   array   {@link $_cachedmethods}
     */
    function getCachedMethods() { return $this->_cachedmethods; }

    /**
     * Setter method for {@link $_cachedmethods}.
     *
     * @param    array   $value
     */
    function setCachedMethods($value) { $this->_cachedmethods=$value; }

    /**
     * Getter for {@link $_cachedmethods}’s default value.
     *
     * @return   array   Empty array
     */
    function defaultCachedMethods() { return array(); }

    // Non-Cached Methods

    /**
     * Names of methods to never be cached.
     * 
     * @var      array
     */
    protected $_noncachedmethods=array();

    /**
     * Getter method for {@link $_noncachedmethods}.
     *
     * @return   array   {@link $_noncachedmethods}
     */
    function getNonCachedMethods() { return $this->_noncachedmethods; }

    /**
     * Setter method for {@link $_noncachedmethods}.
     *
     * @param    array   $value
     */
    function setNonCachedMethods($value) { $this->_noncachedmethods=$value; }

    /**
     * Getter for {@link $_noncachedmethods}’s default value.
     *
     * @return   array   Empty array
     */
    function defaultNonCachedMethods() { return array(); }
}

/**
 * Options for {@link cfFile File frontend}.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.cache.frontends.html#zend.cache.frontends.file Zend Framework Documentation
 */
class ZCacheFrontendFileOptions extends ZCacheOptions
{

    // Master File

    /**
     * Complete path to the master file.
     * 
     * @var              string
     * @deprecated       Deprecated since version 1.7 of the Zend Framework (see Zend Framework
     *                   documentation for this class).
     */
    protected $_masterfile="";

    /**
     * Getter method for {@link $_masterfile}.
     *
     * @return   string  {@link $_masterfile}
     * @deprecated       Deprecated since version 1.7 of the Zend Framework (see Zend Framework
     *                   documentation for this class).
     */
    function getMasterFile() { return $this->_masterfile; }

    /**
     * Setter method for {@link $_masterfile}.
     *
     * @param    string  $value
     * @deprecated       Deprecated since version 1.7 of the Zend Framework (see Zend Framework
     *                   documentation for this class).
     */
    function setMasterFile($value) { $this->_masterfile=$value; }

    /**
     * Getter for {@link $_masterfile}’s default value.
     *
     * @return   string  Empty string
     * @deprecated       Deprecated since version 1.7 of the Zend Framework (see Zend Framework
     *                   documentation for this class).
     */
    function defaultMasterFile() { return ""; }

}

/**
 * Options for {@link cfPage Page frontend}.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.cache.frontends.html#zend.cache.frontends.page Zend Framework Documentation 
 */
class ZCacheFrontendPageOptions extends ZCacheOptions
{

    // HTTP Conditional

    /**
     * Whether the HTTP Conditional system should be used or not.
     *
     * It can be set either to true ('1') or to false ('0').
     *
     * HTTP Conditional system is not yet implemented.
     * 
     * @var      string
     */
    protected $_httpconditional="0";

    /**
     * Getter method for {@link $_httpconditional}.
     *
     * @return   string  {@link $_httpconditional}
     */
    function getHTTPConditional() { return $this->_httpconditional; }

    /**
     * Setter method for {@link $_httpconditional}.
     *
     * @param    string  $value
     */
    function setHTTPConditional($value) { $this->_httpconditional=$value; }

    /**
     * Getter for {@link $_httpconditional}’s default value.
     *
     * @return   string  False ('0')
     */
    function defaultHTTPConditional() { return "0"; }

    // Debug Header

    /**
     * Whether or not to display a debug text before each cached page.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_debugheader="0";

    /**
     * Getter method for {@link $_debugheader}.
     *
     * @return   string  {@link $_debugheader}
     */
    function getDebugHeader() { return $this->_debugheader; }

    /**
     * Setter method for {@link $_debugheader}.
     *
     * @param    string  $value
     */
    function setDebugHeader($value) { $this->_debugheader=$value; }

    /**
     * Getter for {@link $_debugheader}’s default value.
     *
     * @return   string  False ('0')
     */
    function defaultDebugHeader() { return "0"; }

    // Enable

    /**
     * Enable or disable caching.
     *
     * It can be set either to true ('1') to enable caching, or to false ('0') to disable it.
     *
     * This property can be useful when debugging cached scripts.
     * 
     * @var      string
     */
    protected $_enabled="1";

    /**
     * Getter method for {@link $_enabled}.
     *
     * @return   string  {@link $_enabled}
     */
    function getEnabled() { return $this->_enabled; }

    /**
     * Setter method for {@link $_enabled}.
     *
     * @param    string  $value
     */
    function setEnabled($value) { $this->_enabled=$value; }

    /**
     * Getter for {@link $_enabled}’s default value.
     *
     * @return   string  True ('1')
     */
    function defaultEnabled() { return "1"; }

    // Cache With GET

    /**
     * Whether or not to cache when there are variables in {@link $_GET}.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_cachewithget="0";

    /**
     * Getter method for {@link $_cachewithget}.
     *
     * @return   string  {@link $_cachewithget}
     */
    function getCacheWithGET() { return $this->_cachewithget; }

    /**
     * Setter method for {@link $_cachewithget}.
     *
     * @param    string  $value
     */
    function setCacheWithGET($value) { $this->_cachewithget=$value; }

    /**
     * Getter for {@link $_cachewithget}’s default value.
     *
     * @return   string  False ('0')
     */
    function defaultCacheWithGET() { return "0"; }

    // Cache With POST

    /**
     * Whether or not to cache when there are variables in {@link $_POST}.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_cachewithpost="0";

    /**
     * Getter method for {@link $_cachewithpost}.
     *
     * @return   string  {@link $_cachewithpost}
     */
    function getCacheWithPOST() { return $this->_cachewithpost; }

    /**
     * Setter method for {@link $_cachewithpost}.
     *
     * @param    string  $value
     */
    function setCacheWithPOST($value) { $this->_cachewithpost=$value; }

    /**
     * Getter for {@link $_cachewithpost}’s default value.
     *
     * @return   string  False ('0')
     */
    function defaultCacheWithPOST() { return "0"; }

    // Cache With Session

    /**
     * Whether or not to cache when there are variables in {@link $_SESSION}.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_cachewithsession="0";

    /**
     * Getter method for {@link $_cachewithsession}.
     *
     * @return   string  {@link $_cachewithsession}
     */
    function getCacheWithSESSION() { return $this->_cachewithsession; }

    /**
     * Setter method for {@link $_cachewithsession}.
     *
     * @param    string  $value
     */
    function setCacheWithSESSION($value) { $this->_cachewithsession=$value; }

    /**
     * Getter for {@link $_cachewithsession}’s default value.
     *
     * @return   string  False ('0')
     */
    function defaultCacheWithSESSION() { return "0"; }

    // Cache With Cookie

    /**
     * Whether or not to cache when there are variables in {@link $_COOKIE}.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_cachewithcookie="0";

    /**
     * Getter method for {@link $_cachewithcookie}.
     *
     * @return   string  {@link $_cachewithcookie}
     */
    function getCacheWithCOOKIE() { return $this->_cachewithcookie; }

    /**
     * Setter method for {@link $_cachewithcookie}.
     *
     * @param    string  $value
     */
    function setCacheWithCOOKIE($value) { $this->_cachewithcookie=$value; }

    /**
     * Getter for {@link $_cachewithcookie}’s default value.
     *
     * @return   string  False ('0')
     */
    function defaultCacheWithCOOKIE() { return "0"; }

    // ID With GET

    /**
     * Whether or not should the cache id depend on the content of {@link $_GET}.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_idwithget="1";

    /**
     * Getter method for {@link $_idwithget}.
     *
     * @return   string  {@link $_idwithget}
     */
    function getIDWithGET() { return $this->_idwithget; }

    /**
     * Setter method for {@link $_idwithget}.
     *
     * @param    string  $value
     */
    function setIDWithGET($value) { $this->_idwithget=$value; }

    /**
     * Getter for {@link $_idwithget}’s default value.
     *
     * @return   string  True ('1')
     */
    function defaultIDWithGET() { return "1"; }

    // ID With POST

    /**
     * Whether or not should the cache id depend on the content of {@link $_POST}.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_idwithpost="1";

    /**
     * Getter method for {@link $_idwithpost}.
     *
     * @return   string  {@link $_idwithpost}
     */
    function getIDWithPOST() { return $this->_idwithpost; }

    /**
     * Setter method for {@link $_idwithpost}.
     *
     * @param    string  $value
     */
    function setIDWithPOST($value) { $this->_idwithpost=$value; }

    /**
     * Getter for {@link $_idwithpost}’s default value.
     *
     * @return   string  True ('1')
     */
    function defaultIDWithPOST() { return "1"; }

    // ID With Session

    /**
     * Whether or not should the cache id depend on the content of {@link $_SESSION}.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_idwithsession="1";

    /**
     * Getter method for {@link $_idwithsession}.
     *
     * @return   string  {@link $_idwithsession}
     */
    function getIDWithSESSION() { return $this->_idwithsession; }

    /**
     * Setter method for {@link $_idwithsession}.
     *
     * @param    string  $value
     */
    function setIDWithSESSION($value) { $this->_idwithsession=$value; }

    /**
     * Getter for {@link $_idwithsession}’s default value.
     *
     * @return   string  True ('1')
     */
    function defaultIDWithSESSION() { return "1"; }

    // ID With Files

    /**
     * Whether or not should the cache id depend on the content of {@link $_FILES}.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_idwithfiles="1";

    /**
     * Getter method for {@link $_idwithfiles}.
     *
     * @return   string  {@link $_idwithfiles}
     */
    function getIDWithFiles() { return $this->_idwithfiles; }

    /**
     * Setter method for {@link $_idwithfiles}.
     *
     * @param    string  $value
     */
    function setIDWithFiles($value) { $this->_idwithfiles=$value; }

    /**
     * Getter for {@link $_idwithfiles}’s default value.
     *
     * @return   string  True ('1')
     */
    function defaultIDWithFiles() { return "1"; }

    // ID With Cookie

    /**
     * Whether or not should the cache id depend on the content of {@link $_COOKIE}.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_idwithcookie="1";

    /**
     * Getter method for {@link $_idwithcookie}.
     *
     * @return   string  {@link $_idwithcookie}
     */
    function getIDWithCOOKIE() { return $this->_idwithcookie; }

    /**
     * Setter method for {@link $_idwithcookie}.
     *
     * @param    string  $value
     */
    function setIDWithCOOKIE($value) { $this->_idwithcookie=$value; }

    /**
     * Getter for {@link $_idwithcookie}’s default value.
     *
     * @return   string  True ('1')
     */
    function defaultIDWithCOOKIE() { return "1"; }

    // Regular Expressions

    /**
     * Associative array to set options only for some {@link $_SERVER $_SERVER['REQUEST_URI']}
     * values.
     *
     * Keys are (PCRE) regular expressions, while values are associative arrays with options to be
     * set in case the regular expressions matches {@link $_SERVER $_SERVER['REQUEST_URI']}.
     *
     * If several regular expressions match {@link $_SERVER $_SERVER['REQUEST_URI']}, only the last
     * one will be used.
     * 
     * @var      array
     */
    protected $_regexps=array();

    /**
     * Getter method for {@link $_regexps}.
     *
     * @return   array  {@link $_regexps}
     */
    function getRegExps() { return $this->_regexps; }

    /**
     * Setter method for {@link $_regexps}.
     *
     * @param    array  $value
     */
    function setRegExps($value) { $this->_regexps=$value; }

    /**
     * Getter for {@link $_regexps}’s default value.
     *
     * @return   array  Empty array
     */
    function defaultRegExps() { return array(); }
}

/**
 * Options for {@link cbSQLite Page backend}.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.cache.backends.html#zend.cache.backends.sqlite Zend Framework Documentation 
 */
class ZCacheBackendSQLiteOptions extends ZCacheOptions
{

    // Database Path

    /**
     * Complete path to the SQLite file.
     * 
     * @var      string
     */
    protected $_databasepath="";

    /**
     * Getter method for {@link $_databasepath}.
     *
     * @return   string  {@link $_databasepath}
     */
    function getDatabasePath() { return $this->_databasepath; }

    /**
     * Setter method for {@link $_databasepath}.
     *
     * @param    string  $value
     */
    function setDatabasePath($value) { $this->_databasepath=$value; }

    /**
     * Getter for {@link $_databasepath}’s default value.
     *
     * @return   string  Empty string
     */
    function defaultDatabasePath() { return ""; }

    // Vacuum Factor

    /**
     * Automatic-vacuum factor.
     *
     * This property lets you disable or tune the automatic vacuum process for the SQLite database.
     * This process defragments the database file, and makes it smaller.
     *
     * This process is performed randomly 1 time after X calls to <tt>delete()</tt> or
     * <tt>clean()</tt>, where X is the value of this properly. You can disable it with 0.
     * 
     * @var      integer
     */
    protected $_vacuumfactor=10;

    /**
     * Getter method for {@link $_vacuumfactor}.
     *
     * @return   integer        {@link $_vacuumfactor}
     */
    function getVacuumFactor() { return $this->_vacuumfactor; }

    /**
     * Setter method for {@link $_vacuumfactor}.
     *
     * @param    integer        $value
     */
    function setVacuumFactor($value) { $this->_vacuumfactor=$value; }

    /**
     * Getter for {@link $_vacuumfactor}’s default value.
     *
     * @return   integer        10
     */
    function defaultVacuumFactor() { return 10; }
}

/**
 * Options for {@link cbMemcached Memcached frontend}.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.cache.backends.html#zend.cache.backends.memcached Zend Framework Documentation
 */
class ZCacheBackendMemcachedOptions extends ZCacheOptions
{

    // Servers

    /**
     * Array of memcached servers.
     *
     * Check {@link 
     * http://framework.zend.com/manual/en/zend.cache.backends.html#zend.cache.backends.memcached
     * upstream documentation} for additional information.
     * 
     * @var      array
     */
    protected $_servers=array();

    /**
     * Getter method for {@link $_servers}.
     *
     * @return   array   {@link $_servers}
     */
    function getServers() { return $this->_servers; }

    /**
     * Setter method for {@link $_servers}.
     *
     * @param    array   $value
     */
    function setServers($value) { $this->_servers=$value; }

    /**
     * Getter for {@link $_servers}’s default value.
     *
     * @return   array   Empty array
     */
    function defaultServers() { return array(); }

    // Compression

    /**
     * Whether to use on-the-fly compression or not.
     *
     * It can be set either to true ('1') or to false ('0').
     * 
     * @var      string
     */
    protected $_compression="0";

    /**
     * Getter method for {@link $_compression}.
     *
     * @return   string  {@link $_compression}
     */
    function getCompression() { return $this->_compression; }

    /**
     * Setter method for {@link $_compression}.
     *
     * @param    string  $value
     */
    function setCompression($value) { $this->_compression=$value; }

    /**
     * Getter for {@link $_compression}’s default value.
     *
     * @return   string  False ('0')
     */
    function defaultCompression() { return "0"; }
}

/**
 * Component to cache data.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.cache.html Zend Framework Documentation
 */
class ZCache extends Cache
{

    // Zend Cache

    /**
     * Zend Framework Cache instance.
     *
     * @var     Zend_Cache
     */
    public $zend_cache=null;

    /**
     * Start caching from current position.
     *
     * This cache will have an identifier generated from component’s path and given cache type.
     *
     * If data for given identifier had been already cached, such data will be used (for example, if
     * a function was cached it will run), and this method will return true. Else, this method will
     * return false and do nothing else.
     *
     * @see     endCache(), start()
     *
     * @param   Component       $control        Control to be cached. Is only used to generate a
     *                                          unique identifier for cached data.
     * @param   string          $cachetype      Type of cached data. Descriptive identifier for the
     *                                          data to be cached.
     * @return  boolean
     */
    function startCache($control, $cachetype)
    {
        $id=$control->readNamePath().'_'.$cachetype;
        $id=str_replace('.','_',$id);
        return($this->start($id));
    }

    /**
     * Stop caching.
     *
     * @see     startCache(), end()
     */
    function endCache()
    {
        $this->end();
    }

    /**
     * Return data cached with given ID.
     *
     * If data for given identifier has been already cached, such data will be returned. Else, your
     * next call to {@link save()} method will automatically save whatever data you pass it with
     * the ID you passed to this method (as long as you do not manually specify it in the call).
     *
     * Returns true if everything goes OK, false otherwise.
     *
     * @see     save()
     *
     * @param   string  $id                     ID for cached data.
     * @param   boolean $doNotTestCacheValidity Set to true to skip cache validity check.
     * @param   boolean $doNotUnserialize       Set to true to skip unserialization.
     * @return  boolean
     */
    function load($id, $doNotTestCacheValidity = false, $doNotUnserialize = false)
    {
        return($this->zend_cache->load($id, $doNotTestCacheValidity, $doNotUnserialize));
    }

    /**
     * Caches passed data.
     *
     * You do not need to pass an ID for the cached data if you have just called {@link load()}, its
     * ID will be used by default.
     *
     * Returns true if everything goes OK, false otherwise.
     *
     * @see load()
     *
     * @param   mixed           $data                   Data to be cached.
     * @param   string          $id                     ID for cached data.
     * @param   array           $tags                   Tags for cache record.
     * @param   boolean|integer $specificLifetime       False to disable, or an amount of seconds.
     *
     * @return  boolean
     */
    function save($data, $id = null, $tags = array(), $specificLifetime = false)
    {
        return($this->zend_cache->save($data, $id, $tags, $specificLifetime));
    }

    /**
     * Start caching from current position.
     *
     * This cache will have an identifier you must pass in the call.
     *
     * If data for given identifier had been already cached, such data will be used (for example, if
     * a function was cached it will run), and this method will return true. Else, this method will
     * return false and do nothing else.
     *
     * @see     startCache(), end()
     *
     * @param   string  $id                     Cache identifier.
     * @param   boolean $doNotTestCacheValidity Set to true to skip cache validity check.
     * @return  boolean
     */
    function start($id, $doNotTestCacheValidity = false)
    {
        return($this->zend_cache->start($id, $doNotTestCacheValidity));
    }

    /**
     * Stop caching.
     *
     * Returns true if everything goes OK, false otherwise.
     *
     * @see     endCache(), start()
     *
     * @param   array           $tags                   Optional tags for cache record.
     * @param   boolean|integer $specificLifetime       False to disable (default), or an amount of
     *                                                  seconds.
     * @return  boolean
     */
    function end($tags = array(), $specificLifetime = false)
    {
        return($this->zend_cache->end($tags, $specificLifetime));
    }

    /**
     * Removes a particular cache.
     *
     * Returns true if everything goes OK, false otherwise.
     *
     * @param   string  $id     ID of the cache to be removed.
     * @return  boolean
     */
    function remove($id)
    {
        return($this->zend_cache->remove($id));
    }

    /**
     * Removes all caches.
     *
     * Returns true if everything goes OK, false otherwise.
     *
     * @return  boolean
     */
    function cleanAll()
    {
        return($this->zend_cache->clean(Zend_Cache::CLEANING_MODE_ALL));
    }

    /**
     * Removes outdated caches.
     *
     * Returns true if everything goes OK, false otherwise.
     *
     * @return  boolean
     */
    function cleanOld()
    {
        return($this->zend_cache->clean(Zend_Cache::CLEANING_MODE_OLD));
    }

    /**
     * Removes caches matching <b>all</b> given tags.
     *
     * Returns true if everything goes OK, false otherwise.
     *
     * @param   array   $tags   Tags caches to be deleted must have.
     * @return  boolean
     */
    function cleanMatching($tags)
    {
        return($this->zend_cache->clean(Zend_Cache::CLEANING_MODE_MATCHING_TAG, $tags));
    }

    /**
     * Removes caches matching <b>none</b> of given tags.
     *
     * For example, if given tags are "tagA" and "tagB", and a cache has "tagB" but not "tagA", such
     * cache will <i>not</i> be removed.
     *
     * Returns true if everything goes OK, false otherwise.
     *
     * @param   array   $tags   Tags caches to be deleted must have.
     * @return  boolean
     */
    function cleanNotMatching($tags)
    {
        return($this->zend_cache->clean(Zend_Cache::CLEANING_MODE_NOT_MATCHING_TAG, $tags));
    }

    // TODO: Include a method for removing caches matching any given tag. Check
    // http://framework.zend.com/manual/en/zend.cache.theory.html#zend.cache.clean for additional
    // information.

    /**
     * Cache calls to given function.
     *
     * For example, if you want to cache a call like thisFunction("parameter1", 2, false), you would
     * use this methid like this: call("thisFunction", array("parameter1", 2, false)).
     *
     * Returns true if everything goes OK, false otherwise.
     *
     * @param   string          $name                   Function name.
     * @param   array           $parameters             Array of parameters to be passed to the
     *                                                  cached function.
     * @param   array           $tags                   Optional tags for cache record.
     * @param   boolean|integer $specificLifetime       False to disable (default), or an amount of
     *                                                  seconds.
     * @return  boolean
     */
    function call($name, $parameters = array(), $tags = array(), $specificLifetime = false)
    {
        return($this->zend_cache->call($name, $parameters, $tags, $specificLifetime));
    }

    /**
     * {@inheritdoc}
     */
    function preinit()
    {
                    $frontend='Output';
        $backend='File';

                    $frontendOptions=array();
        $backendOptions=array();

        //Frontend common properties
        $frontendOptions['caching']=$this->_enabled;
        $frontendOptions['cache_id_prefix']=$this->_prefix;
        $frontendOptions['lifetime']=$this->_lifetime;
        $frontendOptions['logging']=$this->_logging;
        $frontendOptions['write_control']=$this->_checkwrite;
        $frontendOptions['automatic_serialization']=$this->_serialization;
        $frontendOptions['automatic_cleaning_factor']=$this->_cleaningfactor;
        $frontendOptions['ignore_user_abort']=$this->_ignoreuserabort;

        //Backend common properties
        $backendOptions['cache_dir']=$this->_cachedir;
        $backendOptions['file_locking']=$this->_filelocking;
        $backendOptions['read_control']=$this->_checkread;

        //Convert read control type
        $rct='crc32';
        switch ($this->_readcontroltype) {
            case rctCRC32:  $rct='crc32'; break;
            case rctADLER32:  $rct='adler32'; break;
            case rctMD5:  $rct='md5'; break;
            case rctSTRLEN:  $rct='strlen'; break;
        }
        $backendOptions['read_control_type']=$rct;
        $backendOptions['hashed_directory_level']=$this->_hasheddirectorylevel;
        $backendOptions['hashed_directory_umask']=$this->_hasheddirectoryumask;
        $backendOptions['file_name_prefix']=$this->_filenameprefix;
        $backendOptions['cache_file_umask']=$this->_cachefileumask;
        $backendOptions['metadatas_array_max_size']=$this->_metadatasize;

        switch ($this->_frontend)
        {
            case cfCore:
                            $frontend='Core';
            break;

            case cfOutput:
                            $frontend='Output';
            break;

            case cfFunction:
                            $frontend='Function';
            break;

            case cfClass:
            $frontend='Class';
            break;

            case cfFile:
            $frontend='File';
            break;

            case cfPage:
            $frontend='Page';
            break;
        }

        switch ($this->_backend)
        {
            case cbFile:
                            $backend='File';
            break;

            case cbSQLite:
                            $backend='Sqlite';
            break;

            case cbMemcached:
            $backend='Memcached';
            break;

            case cbAPC:
            $backend='Apc';
            break;

            case cbZendPlatform:
            $backend='Zend Platform';
            break;
        }

        $this->zend_cache=Zend_Cache::factory($frontend, $backend, $frontendOptions, $backendOptions);

        //Clean all cache when session is restored
        if (isset($_GET['restore_session']))
        {
            if (!isset($_POST['xajax']))
            {
                    $this->cleanAll();
            }
        }
    }

    /**
     * Set {@link $_cachedir} to a guessed temporal-folder path.
     */
    function guessTempFolder()
    {
    if ( preg_match( "/^WIN/i", PHP_OS ) )
    {
        if ( isset( $_ENV['TMP'] ) )
        {
        $this->_cachedir= $_ENV['TMP'];
        }
        elseif( isset( $_ENV['TEMP'] ) )
        {
        $this->_cachedir = $_ENV['TEMP'];
        }
        else
        {
        $tmpfolder=getenv('TMP');
        if (($tmpfolder===false) || ($tmpfolder==''))
        {
            $tmpfolder=getenv('TEMP');
            if (($tmpfolder===false) || ($tmpfolder==''))
            {
            $tmpfolder='/tmp/';
            }
        }
        $this->_cachedir= $tmpfolder;
        }
    }
    else
    {
        $this->_cachedir= '/tmp/';
    }
    }

    // Constructor

    /**
     * {@inheritdoc}
     */
    function __construct($aowner = null)
    {
        // Call inherited constructor.
        parent::__construct($aowner);

        // Frontend properties.
        $this->_frontendfunctionoptions= new ZCacheFrontendFunctionOptions($this);
        $this->_frontendclassoptions= new ZCacheFrontendClassOptions($this);
        $this->_frontendfileoptions= new ZCacheFrontendFileOptions($this);
        $this->_frontendpageoptions= new ZCacheFrontendPageOptions($this);

        // Backend properties.
        $this->_backendsqliteoptions=new ZCacheBackendSQLiteOptions($this);
        $this->_backendmemcachedoptions=new ZCacheBackendMemcachedOptions($this);

        // Temporal folder.
        $this->guessTempFolder();
    }

    // Frontend

    /**
     * Frontend.
     *
     * Possible values are: {@link cfCore}, {@link cfOutput}, {@link cfFunction}, {@link cfClass},
     * {@link cfFile}, or {@link cfPage}.
     *
     * @var      string
     */
    protected $_frontend = cfOutput;

    /**
     * Getter method for {@link $_frontend}.
     *
     * @return   string  {@link $_frontend}
     */
    function getFrontend() { return $this->_frontend; }

    /**
     * Setter method for {@link $_frontend}.
     *
     * @param    string  $value
     */
    function setFrontend($value) { $this->_frontend = $value; }

    /**
     * Getter for {@link $_frontend}’s default value.
     *
     * @return   string  {@link cfOutput}
     */
    function defaultFrontend() { return cfOutput; }

    // Backend

    /**
     * Backend.
     *
     * Possible values are: {@link cbFile}, {@link cbSQLite}, {@link cbMemcached}, {@link cbAPC}, or
     * {@link cbZendPlatform}.
     *
     * @var      string
     */
    protected $_backend = cbFile;

    /**
     * Getter method for {@link $_backend}.
     *
     * @return   string  {@link $_backend}
     */
    function getBackend() { return $this->_backend; }

    /**
     * Setter method for {@link $_backend}.
     *
     * @param    string  $value
     */
    function setBackend($value) { $this->_backend = $value; }

    /**
     * Getter for {@link $_backend}’s default value.
     *
     * @return   string  {@link cbFile}
     */
    function defaultBackend() { return cbFile; }

    // FRONTEND PROPERTIES  //

    // Enable

    /**
     * Enable or disable caching.
     *
     * It can be set either to true ('1') to enable caching, or to false ('0') to disable it.
     *
     * This property can be useful when debugging cached scripts.
     * 
     * @var      string
     */
    protected $_enabled = "1";

    /**
     * Getter method for {@link $_enabled}.
     *
     * @return   string  {@link $_enabled}
     */
    function getEnabled() { return $this->_enabled; }

    /**
     * Setter method for {@link $_enabled}.
     *
     * @param    string  $value
     */
    function setEnabled($value) { $this->_enabled = $value; }

    /**
     * Getter for {@link $_enabled}’s default value.
     *
     * @return   string  True ('1')
     */
    function defaultEnabled() { return "1"; }

    // Prefix

    /**
     * Prefix.
     *
     * A prefix for all cache IDs.
     *
     * This prefix creates a namespace in the cache, so multiple applications or websites can use a
     * shared cache. Each one can use a different prefix, so the same ID can be used to cache
     * different data in the different applications or websites.
     *
     * @var      string
     */
    protected $_prefix = "";

    /**
     * Getter method for {@link $_prefix}.
     *
     * @return   string  {@link $_prefix}
     */
    function getPrefix() { return $this->_prefix; }

    /**
     * Setter method for {@link $_prefix}.
     *
     * @param    string  $value
     */
    function setPrefix($value) { $this->_prefix = $value; }

    /**
     * Getter for {@link $_prefix}’s default value.
     *
     * @return   string  Empty string
     */
    function defaultPrefix() { return ""; }

    // Lifetime

    /**
     * Cache lifetime (in seconds).
     *
     * Set it to null if you want caches to be valid forever.
     * 
     * @var      integer
     */
    protected $_lifetime = 3600;

    /**
     * Getter method for {@link $_lifetime}.
     *
     * @return   integer        {@link $_lifetime}
     */
    function getLifetime() { return $this->_lifetime; }

    /**
     * Setter method for {@link $_lifetime}.
     *
     * @param    integer        $value
     */
    function setLifetime($value) { $this->_lifetime = $value; }

    /**
     * Getter for {@link $_lifetime}’s default value.
     *
     * @return   integer        3600
     */
    function defaultLifetime() { return 3600; }

    // Logging

    /**
     * Whether or not to use logging through {@link ZLog}.
     *
     * It can be set either to true ('1') or to false ('0').
     *
     * Using logging will decrease performance.
     * 
     * @var      string
     */
    protected $_logging = "0";

    /**
     * Getter method for {@link $_logging}.
     *
     * @return   string  {@link $_logging}
     */
    function getLogging() { return $this->_logging; }

    /**
     * Setter method for {@link $_logging}.
     *
     * @param    string  $value
     */
    function setLogging($value) { $this->_logging = $value; }

    /**
     * Getter for {@link $_logging}’s default value.
     *
     * @return   string  False ('0')
     */
    function defaultLogging() { return "0"; }

    // Check Write

    /**
     * Whether or not to control data integrity after writting data to cache.
     *
     * It can be set either to true ('1') or to false ('0').
     *
     * If enabled, cache writting will be a bit slower, since right after writting it, data will be
     * read to make sure it is not corrupted.
     * 
     * @var      string
     */
    protected $_checkwrite = "1";

    /**
     * Getter method for {@link $_checkwrite}.
     *
     * @return   string  {@link $_checkwrite}
     */
    function getCheckWrite() { return $this->_checkwrite; }

    /**
     * Setter method for {@link $_checkwrite}.
     *
     * @param    string  $value
     */
    function setCheckWrite($value) { $this->_checkwrite = $value; }

    /**
     * Getter for {@link $_checkwrite}’s default value.
     *
     * @return   string  True ('1')
     */
    function defaultCheckWrite() { return "1"; }

    // Serialization

    /**
     * Whether or not to use automatic serialization.
     *
     * It can be set either to true ('1') or to false ('0').
     *
     * It can be used to directly save data other than strings. It decreases performance, though.
     * 
     * @var      string
     */
    protected $_serialization = "0";

    /**
     * Getter method for {@link $_serialization}.
     *
     * @return   string  {@link $_serialization}
     */
    function getSerialization() { return $this->_serialization; }

    /**
     * Setter method for {@link $_serialization}.
     *
     * @param    string  $value
     */
    function setSerialization($value) { $this->_serialization = $value; }

    /**
     * Getter for {@link $_serialization}’s default value.
     *
     * @return   string  False ('0')
     */
    function defaultSerialization() { return "0"; }

    // Cleaning Factor

    /**
     * Automatic-cleaning factor.
     *
     * This property lets you disable or tune the automatic cleaning process (garbage collector) for
     * the cached data.
     *
     * This process is performed randomly 1 time after X write operations, where X is the value of
     * this properly. You can disable it with 0.
     * 
     * @var      integer
     */
    protected $_cleaningfactor = 10;

    /**
     * Getter method for {@link $_cleaningfactor}.
     *
     * @return   integer        {@link $_cleaningfactor}
     */
    function getCleaningFactor() { return $this->_cleaningfactor; }

    /**
     * Setter method for {@link $_cleaningfactor}.
     *
     * @param    integer        $value
     */
    function setCleaningFactor($value) { $this->_cleaningfactor = $value; }

    /**
     * Getter for {@link $_cleaningfactor}’s default value.
     *
     * @return   integer        10
     */
    function defaultCleaningFactor() { return 10; }

    // Ignore User Abort

    /**
     * Whether or not to ignore user abort for {@link save()}.
     *
     * It can be set either to true ('1') or to false ('0').
     *
     * If enabled, <tt>ignore_user_abort</tt> PHP flag will be set inside {@link save()} to avoid
     * cache corruptions in some cases.
     * 
     * @var      string
     */
    protected $_ignoreuserabort = "0";

    /**
     * Getter method for {@link $_ignoreuserabort}.
     *
     * @return   string  {@link $_ignoreuserabort}
     */
    function getIgnoreUserAbort() { return $this->_ignoreuserabort; }

    /**
     * Setter method for {@link $_ignoreuserabort}.
     *
     * @param    string  $value
     */
    function setIgnoreUserAbort($value) { $this->_ignoreuserabort = $value; }

    /**
     * Getter for {@link $_ignoreuserabort}’s default value.
     *
     * @return   string  False ('0')
     */
    function defaultIgnoreUserAbort() { return "0"; }

    // BACKEND PROPERTIES  //

    // Cache Directory

    /**
     * System directory to store cache files.
     * 
     * @var      string
     */
    protected $_cachedir = '/tmp/';

    /**
     * Getter method for {@link $_cachedir}.
     *
     * @return   string  {@link $_cachedir}
     */
    function getCacheDir() { return $this->_cachedir; }

    /**
     * Setter method for {@link $_cachedir}.
     *
     * @param    string  $value
     */
    function setCacheDir($value) { $this->_cachedir = $value; }

    /**
     * Getter for {@link $_cachedir}’s default value.
     *
     * @return   string  '/tmp/'
     */
    function defaultCacheDir() { return '/tmp/'; }

    // File Locking

    /**
     * Whether or not to enable <tt>file_locking</tt>.
     *
     * It can be set either to true ('1') or to false ('0').
     *
     * If enabled, it can avoid cache corruption under some (bad) circumstances. It does not help on
     * multithread webservers or on NFS filesystems, though.
     * 
     * @var      string
     */
    protected $_filelocking = "1";

    /**
     * Getter method for {@link $_filelocking}.
     *
     * @return   string  {@link $_filelocking}
     */
    function getFileLocking() { return $this->_filelocking; }

    /**
     * Setter method for {@link $_filelocking}.
     *
     * @param    string  $value
     */
    function setFileLocking($value) { $this->_filelocking = $value; }

    /**
     * Getter for {@link $_filelocking}’s default value.
     *
     * @return   string  True ('1')
     */
    function defaultFileLocking() { return "1"; }

    // Check Read

    /**
     * Whether or not to control data integrity when reading.
     *
     * It can be set either to true ('1') or to false ('0').
     *
     * If enabled, a control key is embedded in the cache file and this key is compared with the one
     * calculated after reading the cached data.
     * 
     * @var      string
     */
    protected $_checkread = "1";

    /**
     * Getter method for {@link $_checkread}.
     *
     * @return   string  {@link $_checkread}
     */
    function getCheckRead() { return $this->_checkread; }

    /**
     * Setter method for {@link $_checkread}.
     *
     * @param    string  $value
     */
    function setCheckRead($value) { $this->_checkread = $value; }

    /**
     * Getter for {@link $_checkread}’s default value.
     *
     * @return   string  True ('1')
     */
    function defaultCheckRead() { return "1"; }

    // Read Control Type

    /**
     * Type of read control to be used.
     *
     * This property will only apply if {@link $_checkread} is set to true.
     *
     * Possible values are: {@link rctCRC32}, {@link rctMD5}, {@link rctADLER32}, or
     * {@link rctSTRLEN}.
     * 
     * @var      string
     */
    protected $_readcontroltype = rctCRC32;

    /**
     * Getter method for {@link $_readcontroltype}.
     *
     * @return   string  {@link $_readcontroltype}
     */
    function getReadControlType() { return $this->_readcontroltype; }

    /**
     * Setter method for {@link $_readcontroltype}.
     *
     * @param    string  $value
     */
    function setReadControlType($value) { $this->_readcontroltype = $value; }

    /**
     * Getter for {@link $_readcontroltype}’s default value.
     *
     * @return   string  {@link rctCRC32}
     */
    function defaultReadControlType() { return rctCRC32; }

    // Hashed Directory Level

    /**
     * Hashed directory structure level.
     *
     * 0 means no hashed directory structure, 1 means "one level of directory", 2 means "two levels
     * of directory", and so on.
     *
     * This option can speed up the cache process when you have thousands of cache files. Before you
     * set a value for this option, you should perform some benchmarks to decide which value fits
     * your application or website better.
     * 
     * @var      integer
     * @see     $_hasheddirectoryumask
     */
    protected $_hasheddirectorylevel = 0;

    /**
     * Getter method for {@link $_logging}.
     *
     * @return   integer        {@link $_logging}
     */
    function getHashedDirectoryLevel() { return $this->_hasheddirectorylevel; }

    /**
     * Setter method for {@link $_logging}.
     *
     * @param    integer        $value
     */
    function setHashedDirectoryLevel($value) { $this->_hasheddirectorylevel = $value; }

    /**
     * Getter for {@link $_logging}’s default value.
     *
     * @return   integer        0
     */
    function defaultHashedDirectoryLevel() { return 0; }

    // Hashed Directory Umask

    /**
     * Umask for the hashed directory structure.
     * 
     * @var     string
     * @link    http://en.wikipedia.org/wiki/Umask Wikipedia
     * @see     $_hasheddirectorylevel
     */
    protected $_hasheddirectoryumask = '700';

    /**
     * Getter method for {@link $_hasheddirectorylevel}.
     *
     * @return   string  {@link $_hasheddirectorylevel}
     */
    function getHashedDirectoryUmask() { return $this->_hasheddirectoryumask; }

    /**
     * Setter method for {@link $_hasheddirectorylevel}.
     *
     * @param    string  $value
     */
    function setHashedDirectoryUmask($value) { $this->_hasheddirectoryumask = $value; }

    /**
     * Getter for {@link $_hasheddirectorylevel}’s default value.
     *
     * @return   string  '700'
     */
    function defaultHashedDirectoryUmask() { return '700'; }

    // Filename Prefix

    /**
     * Prefix to be used in cache files name.
     *
     * Be careful with this option, since a too generic value in a system cache directory (like
     * /tmp) can cause disasters when cleaning the cache.
     * 
     * @var      string
     */
    protected $_filenameprefix = 'zend_cache';

    /**
     * Getter method for {@link $_filenameprefix}.
     *
     * @return   string  {@link $_filenameprefix}
     */
    function getFileNamePrefix() { return $this->_filenameprefix; }

    /**
     * Setter method for {@link $_filenameprefix}.
     *
     * @param    string  $value
     */
    function setFileNamePrefix($value) { $this->_filenameprefix = $value; }

    /**
     * Getter for {@link $_filenameprefix}’s default value.
     *
     * @return   string  'zend_cache'
     */
    function defaultFileNamePrefix() { return 'zend_cache'; }

    // Cache File Umaks

    /**
     * Umask for cache files.
     * 
     * @var     string
     * @link    http://en.wikipedia.org/wiki/Umask Wikipedia
     */
    protected $_cachefileumask = '700';

    /**
     * Getter method for {@link $_cachefileumask}.
     *
     * @return   string  {@link $_cachefileumask}
     */
    function getCacheFileUmask() { return $this->_cachefileumask; }

    /**
     * Setter method for {@link $_cachefileumask}.
     *
     * @param    string  $value
     */
    function setCacheFileUmask($value) { $this->_cachefileumask = $value; }

    /**
     * Getter for {@link $_logging}’s default value.
     *
     * @return   string  '700'
     */
    function defaultCacheFileUmask() { return '700'; }

    // Metadata Size

    /**
     * Internal maximum size for metadata arrays.
     *
     * Do not change this property unless you know what you are doing.
     * 
     * @var      integer
     */
    protected $_metadatasize = 100;

    /**
     * Getter method for {@link $_metadatasize}.
     *
     * @return   integer        {@link $_metadatasize}
     */
    function getMetadataSize() { return $this->_metadatasize; }

    /**
     * Setter method for {@link $_metadatasize}.
     *
     * @param    integer        $value
     */
    function setMetadataSize($value) { $this->_metadatasize = $value; }

    /**
     * Getter for {@link $_metadatasize}’s default value.
     *
     * @return   integer        100
     */
    function defaultMetadataSize() { return 100; }

    // PROPERTIES FOR SPECIFIC FRONTENDS //

    // Frontend Function Options

    /**
     * Options for {@link cfFunction Function frontend}.
     * 
     * @var      ZCacheFrontendFunctionOptions
     */
    protected $_frontendfunctionoptions = null;

    /**
     * Getter method for {@link $_frontendfunctionoptions}.
     *
     * @return   ZCacheFrontendFunctionOptions  {@link $_frontendfunctionoptions}
     */
    function getFrontendFunctionOptions() { return $this->_frontendfunctionoptions; }

    /**
     * Setter method for {@link $_frontendfunctionoptions}.
     *
     * @param    ZCacheFrontendFunctionOptions  $value
     */
    function setFrontendFunctionOptions($value) { $this->_frontendfunctionoptions = $value; }

    /**
     * Getter for {@link $_frontendfunctionoptions}’s default value.
     *
     * @return   ZCacheFrontendFunctionOptions  Null
     */
    function defaultFrontendFunctionOptions() { return null; }

    // Frontend Class Options

    /**
     * Options for {@link cfClass Class frontend}.
     * 
     * @var      ZCacheFrontendClassOptions
     */
    protected $_frontendclassoptions=null;

    /**
     * Getter method for {@link $_frontendclassoptions}.
     *
     * @return   ZCacheFrontendClassOptions     {@link $_frontendclassoptions}
     */
    function getFrontendClassOptions() { return $this->_frontendclassoptions; }

    /**
     * Setter method for {@link $_frontendclassoptions}.
     *
     * @param    ZCacheFrontendClassOptions     $value
     */
    function setFrontendClassOptions($value) { $this->_frontendclassoptions=$value; }

    /**
     * Getter for {@link $_frontendclassoptions}’s default value.
     *
     * @return   ZCacheFrontendClassOptions     Null
     */
    function defaultFrontendClassOptions() { return null; }

    // Frontend File Options

    /**
     * Options for {@link cfFile File frontend}.
     * 
     * @var      ZCacheFrontendFileOptions
     */
    protected $_frontendfileoptions=null;

    /**
     * Getter method for {@link $_frontendfileoptions}.
     *
     * @return   ZCacheFrontendFileOptions      {@link $_logging}
     */
    function getFrontendFileOptions() { return $this->_frontendfileoptions; }

    /**
     * Setter method for {@link $_frontendfileoptions}.
     *
     * @param    ZCacheFrontendFileOptions      $value
     */
    function setFrontendFileOptions($value) { $this->_frontendfileoptions=$value; }

    /**
     * Getter for {@link $_frontendfileoptions}’s default value.
     *
     * @return   ZCacheFrontendFileOptions      Null
     */
    function defaultFrontendFileOptions() { return null; }

    // Frontend Page Options

    /**
     * Options for {@link cfPage Page frontend}.
     * 
     * @var      ZCacheFrontendPageOptions
     */
    protected $_frontendpageoptions=null;

    /**
     * Getter method for {@link $_frontendpageoptions}.
     *
     * @return   ZCacheFrontendPageOptions      {@link $_frontendpageoptions}
     */
    function getFrontendPageOptions() { return $this->_frontendpageoptions; }

    /**
     * Setter method for {@link $_frontendpageoptions}.
     *
     * @param    ZCacheFrontendPageOptions      $value
     */
    function setFrontendPageOptions($value) { $this->_frontendpageoptions=$value; }

    /**
     * Getter for {@link $_frontendpageoptions}’s default value.
     *
     * @return   ZCacheFrontendPageOptions      Null
     */
    function defaultFrontendPageOptions() { return null; }

    // Backend SQLite Options

    /**
     * Options for {@link cbSQLite SQLite frontend}.
     * 
     * @var      ZCacheBackendSQLiteOptions
     */
    protected $_backendsqliteoptions=null;

    /**
     * Getter method for {@link $_backendsqliteoptions}.
     *
     * @return   ZCacheBackendSQLiteOptions     {@link $_backendsqliteoptions}
     */
    function getBackendSQLiteOptions() { return $this->_backendsqliteoptions; }

    /**
     * Setter method for {@link $_backendsqliteoptions}.
     *
     * @param    ZCacheBackendSQLiteOptions     $value
     */
    function setBackendSQLiteOptions($value) { $this->_backendsqliteoptions=$value; }

    /**
     * Getter for {@link $_backendsqliteoptions}’s default value.
     *
     * @return   ZCacheBackendSQLiteOptions     Null
     */
    function defaultBackendSQLiteOptions() { return null; }

    // Backend Memcached Options

    /**
     * Options for {@link cbMemcached Memcached frontend}.
     * 
     * @var      ZCacheBackendMemcachedOptions
     */
    protected $_backendmemcachedoptions=null;

    /**
     * Getter method for {@link $_backendmemcachedoptions}.
     *
     * @return   ZCacheBackendMemcachedOptions  {@link $_backendmemcachedoptions}
     */
    function getBackendMemcachedOptions() { return $this->_backendmemcachedoptions; }

    /**
     * Setter method for {@link $_backendmemcachedoptions}.
     *
     * @param    ZCacheBackendMemcachedOptions  $value
     */
    function setBackendMemcachedOptions($value) { $this->_backendmemcachedoptions=$value; }

    /**
     * Getter for {@link $_backendmemcachedoptions}’s default value.
     *
     * @return   ZCacheBackendMemcachedOptions  Null
     */
    function defaultBackendMemcachedOptions() { return null; }

}

?>