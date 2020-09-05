<?php
/**
*  Autocomplete component
*
*  Copyright (c) 2004-2011 Embarcadero Technologies, Inc. 
*
*  An RPCL wrapper over Autocomplete — jQuery Plugin
*  Ron Lussier, Glassdoor.com — coyote@glassdoor.com
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
use_unit("stdctrls.inc.php");

//Class definition
class AutoComplete extends Edit
{
    function dumpHeaderCode()
    {
      parent::dumpHeaderCode();
      jQuery();
      if (!defined('AUTOCOMPLETE'))
      {
        define('AUTOCOMPLETE',1);
?>
<script type='text/javascript' src='<?php echo RPCL_HTTP_PATH; ?>/autocomplete/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo RPCL_HTTP_PATH; ?>/autocomplete/jquery.autocomplete.css" />
<style type="text/css">
.<?php echo $this->Name; ?>_ac_loading {
<?php
  if ($this->_loadingimage=='')
  {
?>
	background : url('<?php echo RPCL_HTTP_PATH; ?>/autocomplete/indicator.gif') right center no-repeat;
<?php
  }
  else
  {
?>
	background : url('<?php echo $this->_loadingimage; ?>') right center no-repeat;
<?php
  }
?>
}
</style>
<?php
      }
      if (($this->ControlState & csDesigning) != csDesigning)
      {
          $options='';

          $options.="loadingClass:'".$this->Name."_ac_loading'";
          $options.=",autoFill:$this->_autofill";
          $options.=",cellSeparator:'$this->_cellseparator'";
          $options.=",cacheLength:$this->_cachelength";
          $options.=",delay:$this->_delay";
          $options.=",focus:$this->_focus";
          $options.=",lineSeparator:'$this->_lineseparator'";
          $options.=",matchCase:$this->_matchcase";
          $options.=",matchContains:$this->_matchcontains";
          $options.=",matchSubset:$this->_matchsubset";
          $options.=",maxItemsToShow:$this->_maxitemstoshow";
          $options.=",minChars:$this->_minchars";
          $options.=",selectFirst:$this->_selectfirst";
          $options.=",selectOnly:$this->_selectonly";
          $options.=",width:$this->_dropdownwidth";
          if ($this->_jsonfindvalue!=null) $options.=",onFindValue:$this->_jsonfindvalue";
          if ($this->_jsonitemselect!=null) $options.=",onItemSelect:$this->_jsonitemselect";
          if ($this->_jsondropdownshow!=null) $options.=",onResultsShow:$this->_jsondropdownshow";
          if ($this->_jsondropdownclose!=null) $options.=",onResultsHide:$this->_jsondropdownclose";

          $options='{'.$options.'}';
?>
<script type="text/javascript">
    $(document).ready(function()
    {
    <?php
      if (!empty($this->_items))
      {
        echo "$('#$this->Name').autocompleteArray([";
        reset($this->_items);
        while (list($k,$v)=each($this->_items))
        {
          if ($k>0) echo ',';
          echo "'$v'";
        }
        echo "],$options);";
      }
      else
      {
        $url = $GLOBALS['PHP_SELF'].'?cq='.$this->readUniqueID();
        echo "$('#$this->Name').autocomplete('$url',$options);";
      }
    ?>
    }
    );
</script>
<?php
      }
    }

    protected $_items=array();

    /**
    * An static list of options to offer to the user
    *
    * Use this property when you know in advance the options to offer to the user
    *
    * @return array
    */
    function getItems() { return $this->_items; }
    function setItems($value) { $this->_items=$value; }
    function defaultItems() { return array(); }

    function readUniqueID()
    {
      return(md5($this->owner->Name.$this->Name.$this->Left.$this->Top.$this->Width.$this->Height));
    }

    function init()
    {
      parent::init();

      if (($this->ControlState & csDesigning) != csDesigning)
      {
        $cq = $this->input->cq;

        // Checks if the request is for this control
        if ((is_object($cq)) && ($cq->asString() == $this->readUniqueID()))
        {
          $q = $this->input->q;
          if ($this->_ongetitems!=null)
          {
            $this->callEvent('ongetitems', array('query'=>$q->asString()));
          }
          else
          {
            if ($this->_lookupdisplay!="")
            {
              if ($this->_lookupsource!=null)
              {
                if ($this->_lookupsource->Dataset!=null)
                {
                   $dataset=$this->_lookupsource->Dataset;
                   if (is_object($q))
                   {
                     $ofilter=$dataset->Filter;
                     if ($ofilter!='') $dataset->Filter.=' and ';
                     $dataset->close();
                     $dataset->Filter.=$this->_lookupdisplay." like '".$q->asString()."%' ";
                   }
                   $dataset->open();
                   $dataset->first();
                   while (!$dataset->EOF)
                   {
                      echo $dataset->fieldget($this->_lookupdisplay);
                      if ($this->_lookupfield!='') echo $this->_cellseparator.$dataset->fieldget($this->_lookupfield);
                      echo "\n";
                      $dataset->next();
                   }
                   $dataset->Filter=$ofilter;
                }
              }
            }
          }
          exit;
        }
      }
    }

    protected $_lookupsource=null;

    /**
    * Use this property to attach a datasource to be used for the options to show
    *
    * @return Datasource
    */
    function getLookupSource() { return $this->_lookupsource; }
    function setLookupSource($value) { $this->_lookupsource=$this->fixupProperty($value); }
    function defaultLookupSource() { return null; }

    protected $_lookupfield='';

    function getLookupField() { return $this->_lookupfield; }
    function setLookupField($value) { $this->_lookupfield=$value; }
    function defaultLookupField() { return ''; }

    protected $_lookupdisplay='';

    /**
    * This property should point to the field name used for lookup
    *
    * @return String
    */
    function getLookupDisplay() { return $this->_lookupdisplay; }
    function setLookupDisplay($value) { $this->_lookupdisplay=$value; }
    function defaultLookupDisplay() { return ''; }

    function loaded()
    {
      parent::loaded();
      $this->_lookupsource=$this->fixupProperty($this->_lookupsource);
    }

    function dumpJsEvents()
    {
      $this->dumpJSEvent($this->_jsonfindvalue);
      $this->dumpJSEvent($this->_jsonitemselect);
      $this->dumpJSEvent($this->_jsondropdownclose);
      $this->dumpJSEvent($this->_jsondropdownshow);
    }

    protected $_ongetitems=null;

    /**
    * Event called to get the items to be shown on the drop down list
    *
    * Use this event to provide a dynamic result set for the items to be shown
    * on the drop down list. Each item must be in its own line. Use the
    * $params['query'] parameter to filter out your results.
    *
    * @return mixed
    */
    function getOnGetItems() { return $this->_ongetitems; }
    function setOnGetItems($value) { $this->_ongetitems=$value; }
    function defaultOnGetItems() { return null; }

    protected $_autofill='false';

    /**
    * Whether or not the first match should be used to autofill in the input element.
    *
    * As you type, the first match will be filled in the input element as a best
    * guess as to what you're looking for. Text you did not manually type will
    * be pre-selected so typing the next character will make the guess go away
    * and the next best match will be populated.
    *
    * @return boolean
    */
    function getAutoFill() { return $this->_autofill; }
    function setAutoFill($value) { $this->_autofill=$value; }
    function defaultAutoFill() { return 'false'; }

    protected $_cellseparator='|';

    /**
    * The character that separates cells in the results from the backend.
    *
    * @return string
    */
    function getCellSeparator() { return $this->_cellseparator; }
    function setCellSeparator($value) { $this->_cellseparator=$value; }
    function defaultCellSeparator() { return '|'; }


    protected $_cachelength=1;

    /**
    * The number of backend query results to store in cache.
    *
    * If set to 1 (the current result), no caching will happen. Do not set below 1.
    *
    * @return integer
    */
    function getCacheLength() { return $this->_cachelength; }
    function setCacheLength($value) { $this->_cachelength=$value; }
    function defaultCacheLength() { return 1; }


    protected $_delay=400;

    /**
    * The delay in milliseconds the autocompleter waits after a keystroke to activate itself.
    *
    * If you're using the data property to set a local array, you may wish to
    * increase the delay to a shorter time frame (such as 40ms.)
    *
    * @return integer
    */
    function getDelay() { return $this->_delay; }
    function setDelay($value) { $this->_delay=$value; }
    function defaultDelay() { return 400; }


    protected $_focus='false';

    /**
    * Set to true if the edit field should be given the focus when the autocomplete method is called.
    *
    * @return boolean
    */
    function getFocus() { return $this->_focus; }
    function setFocus($value) { $this->_focus=$value; }
    function defaultFocus() { return 'false'; }

    protected $_lineseparator='\n';

    /**
    * The character that separates lines in the results from the backend.
    *
    * @return string
    */
    function getLineSeparator() { return $this->_lineseparator; }
    function setLineSeparator($value) { $this->_lineseparator=$value; }
    function defaultLineSeparator() { return '\n'; }

    protected $_matchcase='false';

    /**
    * Whether or not the comparison is case sensitive. Only important only if you use caching.
    *
    * @return boolean
    */
    function getMatchCase() { return $this->_matchcase; }
    function setMatchCase($value) { $this->_matchcase=$value; }
    function defaultMatchCase() { return 'false'; }

    protected $_matchcontains='false';

    /**
    * Whether or not the comparison looks inside (i.e. does 'ba' match 'foo bar') the search results. Only important if you use caching.
    *
    * @return boolean
    */
    function getMatchContains() { return $this->_matchcontains; }
    function setMatchContains($value) { $this->_matchcontains=$value; }
    function defaultMatchContains() { return 'false'; }

    protected $_matchsubset='true';

    /**
    * Whether or not the autocompleter can use a cache for more specific queries.
    *
    * This means that all matches of 'foot' are a subset of all matches for 'foo'.
    * Usually this is true, and using this options decreases server load and
    * increases performance. Remember to set cacheLength to a bigger number, like 10.
    *
    * @return boolean
    */
    function getMatchSubset() { return $this->_matchsubset; }
    function setMatchSubset($value) { $this->_matchsubset=$value; }
    function defaultMatchSubset() { return 'true'; }

    protected $_loadingimage='';

    /**
    * The image used to indicate an ajax operation in progress
    *
    * @return string
    */
    function getLoadingImage() { return $this->_loadingimage; }
    function setLoadingImage($value) { $this->_loadingimage=$value; }
    function defaultLoadingImage() { return ''; }

    protected $_maxitemstoshow=-1;

    /**
    * Limits the number of results that will be showed in the drop down.
    *
    * This is useful if you have a large dataset and don't want to provide the
    * user with a list that could contain hundreds of items. To disable this
    * feature, set the value to -1.
    *
    * @return integer
    */
    function getMaxItemsToShow() { return $this->_maxitemstoshow; }
    function setMaxItemsToShow($value) { $this->_maxitemstoshow=$value; }
    function defaultMaxItemsToShow() { return -1; }

    protected $_minchars=1;

    /**
    * The minimum number of characters a user has to type before the autocompleter activates.
    *
    * @return integer
    */
    function getMinChars() { return $this->_minchars; }
    function setMinChars($value) { $this->_minchars=$value; }
    function defaultMinChars() { return 1; }

    protected $_selectfirst='false';

    /**
    * If this is set to true, the first autocomplete value will be automatically
    * selected on tab/return, even if it has not been handpicked by keyboard or
    * mouse action. If there is a handpicked (highlighted) result, that result
    * will take precedence. If the user has not hand-picked an item, then the
    * first item in the list will be hilighted.
    *
    * @return boolean
    */
    function getSelectFirst() { return $this->_selectfirst; }
    function setSelectFirst($value) { $this->_selectfirst=$value; }
    function defaultSelectFirst() { return 'false'; }

    protected $_selectonly='false';

    /**
    * If this is set to true, and there is only one autocomplete when the user
    * hits tab/return, it will be selected even if it has not been handpicked
    * by keyboard or mouse action.
    *
    * This overrides selectFirst.
    *
    * @return boolean
    */
    function getSelectOnly() { return $this->_selectonly; }
    function setSelectOnly($value) { $this->_selectonly=$value; }
    function defaultSelectOnly() { return 'false'; }

    protected $_dropdownwidth=0;

    /**
    * Sets the width of the drop down layer.
    *
    * If a non-positive integer is specified, then the width of the box will be
    * determined by the width of the input element. Generally speaking, you'll
    * want to leave this value alone. However, in some circumstances you may
    * have a small input element where the drop down layer needs to display a
    * lot of options. In that case, you can specify a larger size.
    *
    * @return integer
    */
    function getDropDownWidth() { return $this->_dropdownwidth; }
    function setDropDownWidth($value) { $this->_dropdownwidth=$value; }
    function defaultDropDownWidth() { return 0; }

    protected $_jsonfindvalue=null;

    /**
    * Event called when the findValue() method is called.
    *
    * The event will be passed the select LI element — just like the onItemSelect
    * eventis.
    *
    * @return mixed
    */
    function getjsOnFindValue() { return $this->_jsonfindvalue; }
    function setjsOnFindValue($value) { $this->_jsonfindvalue=$value; }
    function defaultjsOnFindValue() { return null; }

    protected $_jsonitemselect=null;

    /**
    * An event that will be called when an item is selected. The autocompleter
    * will specify a single argument, being the LI element selected.
    * This LI element will have an attribute 'extra' that contains an array of
    * all cells that the backend specified
    *
    * @return mixed
    */
    function getjsOnItemSelect() { return $this->_jsonitemselect; }
    function setjsOnItemSelect($value) { $this->_jsonitemselect=$value; }
    function defaultjsOnItemSelect() { return null; }

    protected $_jsondropdownshow=null;

    /**
    * An event that will be called just before the matching results popup is shown.
    *
    * The function will be passed the UL element representing the results.
    *
    * @return mixed
    */
    function getjsOnDropDownShow() { return $this->_jsondropdownshow; }
    function setjsOnDropDownShow($value) { $this->_jsondropdownshow=$value; }
    function defaultjsOnDropDownShow() { return null; }

    protected $_jsondropdownclose=null;

    /**
    * An event that will be called just after the matching results popup is hidden (closed).
    *
    * The function will be passed the UL element representing the results.
    *
    * @return mixed
    */
    function getjsOnDropDownClose() { return $this->_jsondropdownclose; }
    function setjsOnDropDownClose($value) { $this->_jsondropdownclose=$value; }
    function defaultjsOnDropDownClose() { return null; }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
    }

    function dumpContents()
    {
        parent::dumpContents();
    }
}

?>