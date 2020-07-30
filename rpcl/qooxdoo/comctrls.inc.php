<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("comctrls.inc.php");
use_unit("qooxdoo/stdctrls.inc.php");
use_unit("classes.inc.php");

class QCustomColorSelector extends QFocusControl
{
  protected $_value="";

  protected $_onchange=null;
  protected $_jsonchange=null;

  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.control.ColorSelector();\n";
    if ($this->_value != '')
      echo "$this->Name.setValue(\"$this->_value\");\n";
    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=563;
    $this->_height=314;
    $this->linkproperties[]=array('changeValue','getValue()','_value');
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonchange);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonchange, 'changeValue');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onchange,'changeValue');

    echo $result;
  }

  function init()
  {
    parent::init();
    $serverevent= $this->input->serverevent;

    if (is_object($serverevent))
    {
      $this->fireEvent('onchange',$this->_onchange, $serverevent->asString());
    }
  }

  function readValue()                { return $this->_value; }
  function writeValue($value)         { $this->_value = $value; }
  function defaultValue()             { return ''; }

  function readOnChange()             { return $this->_onchange; }
  function writeOnChange($value)      { $this->_onchange=$value; }
  function defaultOnChange()          { return null; }

  function readjsOnChange()           { return $this->_jsonchange; }
  function writejsOnChange($value)    { $this->_jsonchange=$value; }
  function defaultjsOnChange()        { return null; }
}

class QColorSelector extends QCustomColorSelector
{
  function getValue()           { return $this->readValue(); }
  function setValue($value)     { $this->writeValue($value); }

  function getOnChange()        { return $this->readOnChange(); }
  function setOnChange($value)  { $this->writeOnChange($value); }

  function getjsOnChange()      { return $this->readjsOnChange(); }
  function setjsOnChange($value){ $this->writejsOnChange($value); }
}

class QDateControl extends QFocusControl
{
  public $_date="";
  public $_dateformat="%m-%d-%Y";

  function make_date()
  {
    $a_date = strtotime($this->_date);
    if (!($a_date === false))
      return $a_date;
    else
    {
      $char = '';
      if (!(strpos($this->_dateformat, '-') === false)) $char = '-';
      else if (!(strpos($this->_dateformat, '/') === false)) $char = '/';
      else if (!(strpos($this->_dateformat, "\\") === false)) $char = "\\";

      if ($char != '')
      {
        $format = explode($char, $this->_dateformat);
        $date = explode($char, $this->_date);

        for ($counter = 0; $counter < count($format); $counter++)
        {
          if (strtolower($format[$counter]) == '%d') $day = $date[$counter];
          else if (strtolower($format[$counter]) == '%m') $month = $date[$counter];
          else if (strtolower($format[$counter]) == '%y') $year = $date[$counter];
        }
        $a_date = mktime(0, 0, 0, $month, $day, $year);
        return $a_date;
      }
      return '';
    }
  }

  function readDate()               { return $this->_date; }
  function writeDate($value)        { $this->_date=$value; }
  function defaultDate()            { return ''; }

  function readDateFormat()         { return $this->_dateformat; }
  function writeDateFormat($value)  { $this->_dateformat=$value; }
  function defaultDateFormat()      { return "%m-%d-%Y"; }
}

class QCustomMonthCalendar extends QDateControl
{
  protected $_month='';
  protected $_year='';
  protected $_invalidmessage="";

  protected $_onchange=null;
  protected $_jsonchange=null;

  function dumpGUICode()
  {
    date_default_timezone_set('Europe/Madrid');
    echo "$this->Name = new qx.ui.control.DateChooser();\n";
    if ($this->_invalidmessage != '') echo "$this->Name.setInvalidMessage(\"$this->_invalidmessage\");\n";
    if (strlen($this->_date) < 8)
    {
      if ($this->_month != '' || $this->_year != '')
      {
        if ($this->_month != '') $month = $this->month_to_integer($this->_month);
        else $month = date('m') - 1;
        if ($this->_year != '') $year = $this->_year;
        else $year = date('Y');
        echo "$this->Name.showMonth($month, $year);\n";
      }
      else echo "$this->Name.setValue(new Date());\n";
    }
    else
    {
      $a_date = $this->make_date();
      if ($a_date != '')
      {
        $year = date('Y', $a_date);
        $month = date('m', $a_date);
        $day = date('d', $a_date);
        echo "$this->Name.setValue(new Date($year, $month - 1, $day, 0, 0, 1));\n";
      }
    }

    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=225;
    $this->_height=175;
    $this->linkproperties[]=array('changeValue','getValue()','_date');
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonchange);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonchange, 'changeValue');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onchange,'changeValue');

    echo $result;
  }

  function init()
  {
    parent::init();
    $serverevent= $this->input->serverevent;

    if (is_object($serverevent))
    {
      $this->fireEvent('onchange',$this->_onchange, $serverevent->asString());
    }
  }

  private function month_to_integer($a_month)
  {
    switch($a_month)
    {
      case 'January': return 0;
      case 'February': return 1;
      case 'March': return 2;
      case 'April': return 3;
      case 'May': return 4;
      case 'June': return 5;
      case 'July': return 6;
      case 'August': return 7;
      case 'September': return 8;
      case 'October': return 9;
      case 'November': return 10;
      case 'December': return 11;
    }
  }

  function readMonth()          { return $this->_month; }
  function writeMonth($value)   { $this->_month=$value; }
  function defaultMonth()       { return ''; }

  function readYear()           { return $this->_year; }
  function writeYear($value)    { return $this->_year=$value; }
  function defaultYear()        { return ''; }

  function readInvalidMessage()         { return $this->_invalidmessage; }
  function writeInvalidMessage($value)  { $this->_invalidmessage=$value; }
  function defaultInvalidMessage()      { return ""; }

  function readOnChange()               { return $this->_onchange; }
  function writeOnChange($value)        { $this->_onchange=$value; }
  function defaultOnChange()            { return null; }

  function readjsOnChange()             { return $this->_jsonchange; }
  function writejsOnChange($value)      { $this->_jsonchange=$value; }
  function defaultjsOnChange()          { return null; }
}


class QMonthCalendar extends QCustomMonthCalendar
{
  function getMonth()               { return $this->readMonth(); }
  function setMonth($value)         { $this->writeMonth($value); }

  function getYear()                { return $this->readYear(); }
  function setYear($value)          { $this->writeYear($value); }

  function getInvalidMessage()      { return $this->readInvalidMessage(); }
  function setInvalidMessage($value){ $this->writeInvalidMessage($value); }

  function getDate()                { return $this->readDate(); }
  function setDate($value)          { $this->writeDate($value); }

  function getDateFormat()          { return $this->readDateFormat(); }
  function setDateFormat($value)    { $this->writeDateFormat($value); }

  function getOnChange()            { return $this->readOnChange(); }
  function setOnChange($value)      { $this->writeOnChange($value); }

  function getjsOnChange()          { return $this->readjsOnChange(); }
  function setjsOnChange($value)    { $this->writejsOnChange($value); }
}

class QCustomDateTimePicker extends QFocusControl
{
  protected $_onchange=null;
  protected $_jsonchange=null;
  protected $_ifformat="%Y-%M-%d";
  protected $_text="";

  function make_date()
  {
    $a_date = strtotime($this->_text);
    if (!($a_date === false))
      return $a_date;
    else
    {
      $char = '';
      if (!(strpos($this->_ifformat, '-') === false)) $char = '-';
      else if (!(strpos($this->_ifformat, '/') === false)) $char = '/';
      else if (!(strpos($this->_ifformat, "\\") === false)) $char = "\\";

      if ($char != '')
      {
        $format = explode($char, $this->_ifformat);
        $date = explode($char, $this->_text);

        for ($counter = 0; $counter < count($format); $counter++)
        {
          if (strtolower($format[$counter]) == '%d') $day = $date[$counter];
          else if (strtolower($format[$counter]) == '%m') $month = $date[$counter];
          else if (strtolower($format[$counter]) == '%y') $year = $date[$counter];
        }
        $a_date = mktime(0, 0, 0, $month, $day, $year);
        return $a_date;
      }
      return '';
    }
  }


  function dumpGUICode()
  {
    date_default_timezone_set('Europe/Madrid');
    echo "$this->Name = new qx.ui.form.DateField();\n";
    if ($this->_ifformat != '')
    {
      $to_format = str_replace('%', '', $this->_ifformat);
      echo "$this->Name.setDateFormat(new qx.util.format.DateFormat(\"$to_format\"));\n";
    }

    if (strlen($this->_text) >= 2)
    {
      $a_date = $this->make_date();
      if ($a_date != '')
      {
        $year = date('Y', $a_date);
        $month = date('m', $a_date);
        $day = date('d', $a_date);
        echo "$this->Name.setValue(new Date($year, $month - 1, $day, 0, 0, 1));\n";
      }
    }

    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=186;
    $this->_height=24;
    //$this->linkproperties[]=array('changeValue','getValue()','_text');
    $this->linkproperties[]=array('changeValue','getChildControl("list").getValue()','_text');
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonchange);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonchange, 'changeValue');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onchange,'changeValue');

    echo $result;
  }

  function init()
  {
    parent::init();
    $serverevent= $this->input->serverevent;

    if (is_object($serverevent))
    {
      $this->fireEvent('onchange',$this->_onchange, $serverevent->asString());
    }
  }

  function readIfFormat()           { return $this->_ifformat; }
  function writeIfFormat($value)    { $this->_ifformat=$value; }
  function defaultIfFormat()        { return "%Y-%M-%d"; }

  function readText()               { return $this->_text; }
  function writeText($value)        { $this->_text=$value; }
  function defaultText()            { return ""; }

  function readOnChange()           { return $this->_onchange; }
  function writeOnChange($value)    { $this->_onchange=$value; }
  function defaultOnChange()        { return null; }

  function readjsOnChange()         { return $this->_jsonchange; }
  function writejsOnChange($value)  { $this->_jsonchange=$value; }
  function defaultjsOnChange()      { return null; }
}

class QDateTimePicker extends QCustomDateTimePicker
{
  function getIfFormat()            { return $this->readIfFormat(); }
  function setIfFormat($value)      { $this->writeIfFormat($value); }

  function getText()                { return $this->readText(); }
  function setText($value)          { $this->writeText($value); }

  function getOnChange()            { return $this->readOnChange(); }
  function setOnChange($value)      { $this->writeOnChange($value); }

  function getjsOnChange()          { return $this->readjsOnChange(); }
  function setjsOnChange($value)    { $this->writejsOnChange($value); }
}

class QRichEdit extends QFocusControl
{
    function dumpGUICode()
    {
      echo 'var htmlDecorator = new qx.ui.decoration.Single(1, "solid", "border-main");'."\n";
//      echo 'htmlDecorator.setWidthTop(0);'."\n";
      //echo "var $this->Name = new qx.ui.embed.HtmlArea(\"\",null,\"blank.html\");\n";

            $text=$this->LinesAsHTML();
            $text=str_replace('"','\"',$text);
            $text=str_replace("\r\n",'\n',$text);
            $text=str_replace("\n",'\n',$text);

      echo "$this->Name = new qx.ui.embed.HtmlArea(\"$text\",null";
      if ((($this->ControlState & csDesigning)==csDesigning)) echo ",'about:blank');\n";
      else echo ");\n";
      echo "$this->Name.set({decorator:htmlDecorator});\n";
      $fontfamily=$this->Font->Family;
      if ($fontfamily!='') echo $this->Name.".setDefaultFontFamily('$fontfamily');\n";
      $fontsize=$this->Font->Size;
      if ($fontsize!='')
      {
        $fontsize=(int)$fontsize;
        echo $this->Name.".setDefaultFontSize('$fontsize');\n";
      }

      parent::dumpGUICode();
    }

    function getColor() { return $this->readcolor(); }
    function setColor($value) { $this->writecolor($value); }

    function getParentColor() { return $this->readparentcolor(); }
    function setParentColor($value) { $this->writeparentcolor($value); }



    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=185;
        $this->_height=89;
        $this->linkproperties[]=array('focusOut','getComputedValue()','Text',false);
        $this->Font->Size='2px';
        $this->ParentFont=false;
    }

    public $_lines = array();
    // The $_lineseparator variable should always be double quoted!!!
    protected $_lineseparator = "\n";
    protected $_asspecialchars = 0;

    function getParentFont() { return $this->readparentfont(); }
    function setParentFont($value) { $this->writeparentfont($value); }

    function getFont() { return $this->readfont(); }
    function setFont($value) { $this->writefont($value); }



    /**
    * If true, this property makes the memo to process text as special chars.
    *
    * @return boolean
    */
    function getAsSpecialChars() { return $this->_asspecialchars; }
    function setAsSpecialChars($value) { $this->_asspecialchars=$value; }
    function defaultAsSpecialChars() { return 0; }

    protected $_filterinput=1;

    /**
    * Determines if the control is going to filter input information sent
    * by the user
    *
    * Web applications take user input in the form of strings and then dump
    * that information out, that can lead to security problems like cross-site
    * scripting if you don't filter such information.
    *
    * This property, if true, will filter out unwanted values, set it to false
    * to prevent this behavior.
    *
    * @return boolean
    */
    function getFilterInput() { return $this->_filterinput; }
    function setFilterInput($value) { $this->_filterinput=$value; }
    function defaultFilterInput() { return 1; }

        /**
        * Add a new line to the Memo. Calls AddLine().
        * @param $line string The content of the new line.
        * @return integer Returns the number of lines defined.
        */
        function Add($line)
        {
                return $this->AddLine($line);
        }
        /**
        * Add a new line to the Memo
        * @param $line string The content of the new line.
        * @return integer Returns the number of lines defined.
        */
        function AddLine($line)
        {
                if ($this->CharCase==ecLowerCase) $line=strtolower($line);
                else if ($this->CharCase==ecUpperCase) $line=strtoupper($line);

                end($this->_lines);
                $this->_lines[] = $line;
                return count($this->_lines);
        }

        /**
        * Deletes all text (lines) from the memo control.
        */
        function Clear()
        {
                $this->Lines = array();
        }

        /**
        * Converts the text of the Lines property into way which can be used
        * in the HTML output.
        * Please have a look at the PHP function nl2br.
        * @return string Returns the Text property with '<br />'
        *                inserted before all newlines.
        */
        function LinesAsHTML()
        {
                return nl2br($this->Text);
        }

        /**
        * LineSeparator is used in the Text property to convert a string into
        * an array and back.
        * Note: Escaped character need to be in a double-quoted string.
        *       e.g. "\n"
        *       See <a href="http://www.php.net/manual/en/language.types.string.php">http://www.php.net/manual/en/language.types.string.php</a>
        * @link http://www.php.net/manual/en/language.types.string.php
        * @return string
        */
        function readLineSeparator() { return $this->_lineseparator; }
        function writeLineSeparator($value) { $this->_lineseparator = $value; }

        /**
        * Contains the individual lines of text in the memo control.
        * Lines is an array, so the PHP array manipulation functions may be used.
        *
        * Note: Do not manipulate the Lines property like this:
        *       $this->Memo1->Lines[] = "add new line";
        *       Various versions of PHP implement the behavior of this differently.
        *       Use following code:
        *       $lines = $this->Memo1->Lines;
        *       $lines[] = "new line";          // more lines may be added
        *       $this->Memo1->Lines = $lines;
        * @return array
        */
        function readLines()
        {
        return($this->_lines);
        }
        function writeLines($value)
        {
                if (is_array($value))
                {
                        $this->_lines = $value;
                }
                else
                {
                        $this->_lines = (empty($value)) ? array() : array($value);
                }
        }
        function defaultLines() { return array(); }

        /**
        * Text property allows read and write the contents of Lines in a string
        * separated by LineSeparator.
        * @return string
        */
        function readText()
        {
                return(implode($this->_lineseparator, $this->getLines()));
        }
        function writeText($value)
        {
                if (empty($value))
                {
                        $this->Clear();
                }
                else
                {
                        $lines = explode("$this->_lineseparator", $value);

                        if (is_array($lines))
                        {
                                $this->_lines=$lines;
                        }
                        else
                        {
                                $this->_lines=array($value);
                        }

                }
        }

        function getLines()
        {
                return $this->readLines();
        }
        function setLines($value)
        {
                $this->writeLines($value);
        }

}

class QCustomIFrame extends QFocusControl
{
  protected $_url="";

  protected $_onloadcomplete=null;
  protected $_jsonloadcomplete=null;

  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.embed.ThemedIframe();\n";
    if ($this->_url != '')
      echo "$this->Name.setSource(\"$this->_url\");\n";
    else echo "$this->Name.setSource(\"http://www.embarcadero.com\");\n";
    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=355;
    $this->_height=144;
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonloadcomplete);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonloadcomplete, 'load');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onloadcomplete,'load');

    echo $result;
  }

  function init()
  {
    parent::init();
    $serverevent= $this->input->serverevent;

    if (is_object($serverevent))
    {
      $this->fireEvent('onloadcomplete',$this->_onloadcomplete, $serverevent->asString());
    }
  }

  function readUrl()                    { return $this->_url; }
  function writeUrl($value)             { $this->_url=$value; }
  function defaultUrl()                 { return ''; }

  function readOnLoadComplete()         { return $this->_onloadcomplete; }
  function writeOnLoadComplete($value)  { $this->_onloadcomplete=$value; }
  function defaultOnLoadComplete()      { return null; }

  function readjsOnLoadComplete()       { return $this->_jsonloadcomplete; }
  function writejsOnLoadComplete($value){ $this->_jsonloadcomplete=$value; }
  function defaultjsOnLoadComplete()    { return null; }
}

class QIFrame extends QCustomIFrame
{
  function getUrl()                     { return $this->readUrl(); }
  function setUrl($value)               { $this->writeUrl($value); }

  function getOnLoadComplete()          { return $this->readOnLoadComplete(); }
  function writeOnLoadComplete($value)  { $this->writeOnLoadComplete($value); }

  function getjsOnLoadComplete()        { return $this->readjsOnLoadComplete(); }
  function setjsOnLoadComplete($value)  { $this->writejsOnLoadComplete($value); }
}

class QPageScroller extends QFocusControl
{
    function dumpGUICode()
    {
      echo "$this->Name = new qx.ui.container.SlideBar();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=105;
        $this->_height=45;
    }
}

class QCustomSlider extends QFocusControl
{
  protected $_position=0;
  protected $_max=10;
  protected $_min=0;
  protected $_orientation=0;
  protected $_linesize=1;
  protected $_pagesize=2;

  protected $_onchange=null;
  protected $_jsonchange=null;

  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.form.Slider();\n";
    if ($this->_orientation == 1 || $this->_orientation == 'trVertical')
      echo "$this->Name.setOrientation(\"vertical\");\n";
    echo "$this->Name.setMinimum($this->_min);\n";
    echo "$this->Name.setMaximum($this->_max);\n";
    echo "$this->Name.setValue($this->_position);\n";
    echo "$this->Name.setSingleStep($this->_linesize);\n";
    echo "$this->Name.setPageStep($this->_pagesize);\n";

    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=150;
    $this->_height=25;
    $this->linkproperties[]=array('changeValue','getValue()','_position');
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonchange);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonchange, 'changeValue');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onchange,'changeValue');

    echo $result;
  }

  function init()
  {
    parent::init();
    $serverevent= $this->input->serverevent;

    if (is_object($serverevent))
    {
      $this->fireEvent('onchange',$this->_onchange, $serverevent->asString());
    }
  }

  function readPosition()           { return $this->_position; }
  function writePosition($value)    { $this->_position=$value; }
  function defaultPosition()        { return 0; }

  function readMax()                { return $this->_max; }
  function writeMax($value)         { $this->_max=$value; }
  function defaultMax()             { return 10; }

  function readMin()                { return $this->_min; }
  function writeMin($value)         { $this->_min=$value; }
  function defaultMin()             { return 0; }

  function readOrientation()        { return $this->_orientation; }
  function writeOrientation($value) { $this->_orientation=$value; }
  function defaultOrientation()     { return 'trHorizontal'; }

  function readLineSize()           { return $this->_linesize; }
  function writeLineSize($value)    { $this->_linesize=$value; }
  function defaultLineSize()        { return 1; }

  function readPageSize()           { return $this->_pagesize; }
  function writePageSize($value)    { $this->_pagesize=$value; }
  function defaultPageSize()        { return 2; }

  function readOnChange()           { return $this->_onchange; }
  function writeOnChange($value)    { $this->_onchange=$value; }
  function defaultOnChange()        { return null; }

  function readjsOnChange()         { return $this->_jsonchange; }
  function writejsOnChange($value)  { $this->_jsonchange=$value; }
  function defaultjsOnChange()      { return null; }
}

class QSlider extends QCustomSlider
{
  function getPosition()            { return $this->readPosition(); }
  function setPosition($value)      { $this->writePosition($value); }

  function getMax()                 { return $this->readMax(); }
  function setMax($value)           { $this->writeMax($value); }

  function getMin()                 { return $this->readMin(); }
  function setMin($value)           { $this->writeMin($value); }

  function getOrientation()         { return $this->readOrientation(); }
  function setOrientation($value)   { $this->writeOrientation($value); }

  function getLineSize()            { return $this->_linesize; }
  function setLineSize($value)      { $this->writeLineSize($value); }

  function getPageSize()            { return $this->readPageSize(); }
  function setPageSize($value)      { $this->writePageSize($value); }

  function getOnChange()            { return $this->readOnChange(); }
  function setOnChange($value)      { $this->writeOnChange($value); }

  function getjsOnChange()          { return $this->readjsOnChange(); }
  function setjsOnChange($value)    { $this->writejsOnChange($value); }
}

class QCustomSpinEdit extends QFocusControl
{
  protected $_minvalue=0;
  protected $_maxvalue=0;
  protected $_increment=1;
  protected $_maxlength=0;
  protected $_value=0;
  protected $_editorenabled=1;

  protected $_onchange=null;
  protected $_jsonchange=null;

  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.form.Spinner();\n";
    if ($this->_maxvalue != '')
      echo "$this->Name.setMaximum($this->_maxvalue);\n";
    if ($this->_minvalue != '')
      echo "$this->Name.setMinimum($this->_minvalue);\n";
    if ($this->_maxlength != 0)
    {
      echo "var $this->Name" . "_nf = new qx.util.format.NumberFormat();\n";
      echo $this->Name . "_nf.setMaximumFractionDigits($this->_maxlength);\n";
      echo "$this->Name.setNumberFormat($this->Name" . "_nf);\n";
    }
    if ($this->_value != 0)
      echo "$this->Name.setValue($this->_value);\n";
    echo "$this->Name.setSingleStep($this->_increment);\n";
    if ($this->_editorenabled == 0 || $this->_editorenabled == false) echo "$this->Name.setEditable(false);\n";

    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=121;
    $this->_height=24;
    $this->linkproperties[]=array('changeValue','getValue()','_value');
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonchange);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonchange, 'changeValue');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onchange,'changeValue');

    echo $result;
  }

  function init()
  {
    parent::init();
    $serverevent= $this->input->serverevent;

    if (is_object($serverevent))
    {
      $this->fireEvent('onchange',$this->_onchange, $serverevent->asString());
    }
  }

  function readMinValue()         { return $this->_minvalue; }
  function writeMinValue($value)  { $this->_minvalue=$value; }
  function defaultMinValue()      { return 0; }

  function readMaxValue()         { return $this->_maxvalue; }
  function writeMaxValue($value)  { $this->_maxvalue=$value; }
  function defaultMaxValue()      { return 0; }

  function readIncrement()        { return $this->_increment; }
  function writeIncrement($value) { $this->_increment=$value; }
  function defaultIncrement()     { return 1; }

  function readMaxLength()        { return $this->_maxlength; }
  function writeMaxLength($value) { $this->_maxlength=$value; }
  function defaultMaxLength()     { return 0; }

  function readValue()            { return $this->_value; }
  function writeValue($value)     { $this->_value=$value; }
  function defaultValue()         { return 0; }

  function readEditorEnabled()    { return $this->_editorenabled; }
  function writeEditorEnabled($value) { $this->_editorenabled=$value; }
  function defaultEditorEnabled() { return 1; }

  function readOnChange()         { return $this->_onchange; }
  function writeOnChange($value)  { $this->_onchange=$value; }
  function defaultOnChange()      { return null; }

  function readjsOnChange()       { return $this->_jsonchange; }
  function writejsOnChange($value){ $this->_jsonchange=$value; }
  function defaultjsOnChange()    { return null; }
}


class QSpinEdit extends QCustomSpinEdit
{
  function getMinValue()          { return $this->readMinValue(); }
  function setMinValue($value)    { $this->writeMinValue($value); }

  function getMaxValue()          { return $this->readMaxValue(); }
  function setMaxValue($value)    { $this->writeMaxValue($value); }

  function getIncrement()         { return $this->readIncrement(); }
  function setIncrement($value)   { $this->writeIncrement($value); }

  function getMaxLength()         { return $this->readMaxLength(); }
  function setMaxLength($value)   { $this->writeMaxLength($value); }

  function getValue()             { return $this->readValue(); }
  function setValue($value)       { $this->writeValue($value); }

  function getEditorEnabled()       { return $this->readEditorEnabled(); }
  function setEditorEnabled($value) { $this->writeEditorEnabled($value); }

  function getOnChange()            { return $this->readOnChange(); }
  function setOnChange($value)      { $this->writeOnChange($value); }

  function getjsOnChange()          { return $this->readjsOnChange(); }
  function setjsOnChange($value)    { $this->writejsOnChange($value); }
}

class QCustomPageControl extends QFocusControl
{
        protected $_tabs = array();
        protected $_tabindex = -1;
        protected $_tabposition = tpTop;

        /**
        * This getter is overriden to sync the layers with the tabs
        *
        * @see Control::getLayer()
        * @return string
        *
        */
        function getActiveLayer()
        {
            $result="";

            if (($this->_tabindex>=0) && ($this->_tabindex<=count($this->_tabs)))
            {
                $result=$this->_tabs[$this->_tabindex];
            }
            else
            {
                if (count($this->_tabs)>=1)
                {
                    $result=$this->_tabs[0];
                }
            }
            return($result);
        }

        function setActiveLayer($value)
        {
            $key = array_search($value, $this->_tabs);
            if ($key===false)
            {
            }
            else
            {
                $this->_tabindex=$key;
            }
        }

        function init()
        {
                parent::init();

                $state_field=$this->Name.'_state';

                $state = $this->input->{$state_field};

                if (is_object($state))
                {
                        $tab=$state->asInteger();
                        if ($tab!='')
                        {
                                $this->TabIndex=$tab-1;
                        }
                }
        }


    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.tabview.TabView();\n";

      if ($this->_tabs != null)
      {
        $i = 0;
        $tablist = "";
        $pagelist = "";
        $pageblock = "";
        $selectedtab= '';
        $pages=array();
        $names=array();

        reset($this->_tabs);
        while (list(, $name) = each($this->_tabs))
        {
          if ($name == "") continue;

          $i++;

          $avalue=str_replace('"','\"',$name);

          //TODO: improve this
          $layername=str_replace(' ','_',$avalue);
          $layername=str_replace('"','_',$layername);
          $tabname = "tab" . $this->Name . "_" . $i;
          $pagename = $this->Name . "_layer_" . $layername;
          if ($selectedtab=='') $selectedtab=$pagename;



          /*
          echo "  var $tabname = new qx.ui.pageview.tabview.Button(\"$avalue\");\n";

          if ((($this->ControlState & csDesigning)!=csDesigning))
          {
            echo " $tabname.addEventListener('click', function(e) { var state=findObj('".$this->Name."_state'); state.value=$i; ";
            if ($this->jsOnChange != null) echo "  $this->jsOnChange(e); ";
            echo "  });\n";
          }
          */

          $pageblock .= "  var $pagename = new qx.ui.tabview.Page(\"$avalue\");\n";
          $pageblock .= "  $pagename.setLayout(new qx.ui.layout.Canvas());\n";
          $pageblock .=  "  $this->Name.add($pagename);\n";
          $pages[]=$pagename;
          $names[]=$name;

          if ($tablist != "") { $tablist .= ","; };
          $tablist .= $tabname;

          if ($pagelist != "") { $pagelist .= ","; };
          $pagelist .= $pagename;

          if (($i - 1) == $this->_tabindex) { $selectedtab = $pagename; };
        }

        echo $pageblock;

        if ($i >= 1)
        {
          echo "  $this->Name.setSelection([$selectedtab]);\n";
        }
      }
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=289;
        $this->_height=193;
        $this->offsetx=20;
        $this->offsety=46;
        $this->ControlStyle='csAcceptsControls=1';
    }

        /**
         * Contains the list of text strings that label the tabs of the tab control.
         * This property is an array in which every item is the caption for each tab.
         * Use it to add/delete/modify tabs, and to put controls on an specific tab
         * the Layer property of the control must match the caption of the tab you want
         * to put the control into.
         *
         * <code>
         * <?php
         *     function PageControl1BeforeShow($sender, $params)
         *     {
         *              $tabs=array();
         *
         *              $tabs[]='Tab 1';
         *              $tabs[]='Tab 2';
         *              $tabs[]='Tab 3';
         *
         *              $this->PageControl1->Tabs=$tabs;
         *
         *              $b1=new Button($this);
         *              $b1->Parent=$this->PageControl1;
         *              $b1->Layer="Tab 1";
         *              $b1->Left=100;
         *              $b1->Top=100;
         *
         *              $b2=new Button($this);
         *              $b2->Parent=$this->PageControl1;
         *              $b2->Layer="Tab 2";
         *              $b2->Left=50;
         *              $b2->Top=50;
         *     }
         * ?>
         * </code>
         *
         * @see getActiveLayer(), readTabIndex()
         *
         * @return string
         */
        protected function readTabs()                   { return $this->_tabs; }
        protected function writeTabs($value)            { $this->_tabs=$value; }
        function defaultTabs()   { return null; }

        /**
         * Identifies the selected tab on a tab control, use it to set the active
         * tab you want to set the PageControl, the index must be the in sync with
         * the Tabs property
         *
         * @see getActiveLayer(), readTabs()
         *
         * @return integer
         */
        protected function readTabIndex()               { return $this->_tabindex; }
        protected function writeTabIndex($value)        { $this->_tabindex=$value; }
        function defaultTabIndex()   { return -1;               }

        /**
         * Determines whether tabs appear at the top or bottom, you can set the tabs
         * at the top of the control or at the bottom
         *
         * Valid values for this property are:
         *
         * tpTop - Tabs are placed at the top of the control
         *
         * tpBottom - Tabs are placed at the bottom of the control
         *
         * @see readTabs()
         *
         * @return enum
         */
        protected function readTabPosition()            { return $this->_tabposition; }
        protected function writeTabPosition($value)     { $this->_tabposition=$value; }
        function defaultTabPosition()   { return tpTop;               }
}

/**
 * A set of pages used to make a multiple page dialog box.
 *
 * Use PageControl to create a multiple page dialog or tabbed notebook. PageControl
 * displays multiple overlapping pages called Tabs. The user selects a page by clicking
 * the page’s tab that appears at the top of the control. To add a new page to a PageControl
 * object at design time, edit the Pages property.
 *
 * @example PageControl/pagecontrolsample.php How to use PageControl
 * @example PageControl/pagecontrolsample.xml.php How to use PageControl (form)
 */
class QPageControl extends QCustomPageControl
{
        //Publish Standard Properties
        function getEnabled()                   { return $this->readEnabled(); }
        function setEnabled($value)             { $this->writeEnabled($value); }

        function getPopupMenu()                 { return $this->readPopupMenu(); }
        function setPopupMenu($value)           { $this->writePopupMenu($value); }

        function getVisible()           { return $this->readVisible(); }
        function setVisible($value)     { $this->writeVisible($value); }

        // Common events
        function getjsOnActivate()              { return $this->readjsOnActivate(); }
        function setjsOnActivate($value)        { $this->writejsOnActivate($value); }

        function getjsOnDeActivate()            { return $this->readjsOnDeActivate(); }
        function setjsOnDeActivate($value)      { $this->writejsOnDeActivate($value); }

        function getjsOnBlur()                  { return $this->readjsOnBlur(); }
        function setjsOnBlur($value)            { $this->writejsOnBlur($value); }

        function getjsOnChange()                { return $this->readjsOnChange(); }
        function setjsOnChange($value)          { $this->writejsOnChange($value); }

        function getjsOnClick()                 { return $this->readjsOnClick(); }
        function setjsOnClick($value)           { $this->writejsOnClick($value); }

        function getjsOnContextMenu()           { return $this->readjsOnContextMenu(); }
        function setjsOnContextMenu($value)     { $this->writejsOnContextMenu($value); }

        function getjsOnDblClick()              { return $this->readjsOnDblClick(); }
        function setjsOnDblClick($value)        { $this->writejsOnDblClick($value); }

        function getjsOnFocus()                 { return $this->readjsOnFocus(); }
        function setjsOnFocus($value)           { $this->writejsOnFocus($value); }

        function getjsOnKeyDown()               { return $this->readjsOnKeyDown(); }
        function setjsOnKeyDown($value)         { $this->writejsOnKeyDown($value); }

        function getjsOnKeyPress()              { return $this->readjsOnKeyPress(); }
        function setjsOnKeyPress($value)        { $this->writejsOnKeyPress($value); }

        function getjsOnKeyUp()                 { return $this->readjsOnKeyUp(); }
        function setjsOnKeyUp($value)           { $this->writejsOnKeyUp($value); }

        function getjsOnMouseDown()             { return $this->readjsOnMouseDown(); }
        function setjsOnMouseDown($value)       { $this->writejsOnMouseDown($value); }

        function getjsOnMouseUp()               { return $this->readjsOnMouseUp(); }
        function setjsOnMouseUp($value)         { $this->writejsOnMouseUp($value); }

        function getjsOnMouseMove()             { return $this->readjsOnMouseMove(); }
        function setjsOnMouseMove($value)       { $this->writejsOnMouseMove($value); }

        function getjsOnMouseOut()              { return $this->readjsOnMouseOut(); }
        function setjsOnMouseOut($value)        { $this->writejsOnMouseOut($value); }

        function getjsOnMouseOver()             { return $this->readjsOnMouseOver(); }
        function setjsOnMouseOver($value)       { $this->writejsOnMouseOver($value); }

        //Publish Properties
        function getTabs()                      { return $this->readTabs(); }
        function setTabs($value)                { $this->writeTabs($value); }

        function getTabIndex()                  { return $this->readTabIndex(); }
        function setTabIndex($value)            { $this->writeTabIndex($value); }

        function getTabPosition()               { return $this->readTabPosition(); }
        function setTabPosition($value)         { $this->writeTabPosition($value); }
}

class QCustomTreeView extends QFocusControl
{
  protected $_items = array();
  protected $_images = null;
  protected $_showroot = 1;
  protected $_autoexpand = 0;
  protected $_indent = 19;
  protected $_multiselect = 0;

  protected $_onchangeselected=null;
  protected $_jsonchangeselected=null;
  protected $_onaddition=null;
  protected $_jsonaddition=null;
  protected $_ondeletion=null;
  protected $_jsondeletion=null;

  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.tree.Tree();\n";

    if ($this->_showroot == 0) echo "$this->Name.setHideRoot(true);\n";
    if ($this->_multiselect == 1) echo "$this->Name.setSelectionMode(\"multi\");\n";
    $this->generateNodes();
    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=121;
    $this->_height=97;
  }

  function loaded()
  {
    parent::loaded();
    $this->setImageList($this->_images);
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonchangeselected);
    $this->dumpJSEvent($this->_jsonaddition);
    $this->dumpJsEvent($this->_jsondeletion);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonchangeselected, 'changeSelection');
    $result.=$this->mapJSEvent($this->_jsonaddition, 'addItem');
    $result.=$this->mapJSEvent($this->_jsondeletion, 'removeItem');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onchangeselected,'changeSelection');
    $result.=$this->mapEventToJSHook($this->_onaddition, 'addItem');
    $result.=$this->mapEventToJSHook($this->_ondeletion, 'removeItem');

    echo $result;
  }

  function init()
  {
    parent::init();
    $serverevent= $this->input->serverevent;

    if (is_object($serverevent))
    {
      $this->fireEvent('onchangeselected',$this->_onchangeselected, $serverevent->asString());
      $this->fireEvent('onaddition', $this->_onaddition, $serverevent->asString());
      $this->fireEvent('ondeletion', $this->_ondeletion, $serverevent->asString());
    }
  }

  /**
  * Writes recursively all nodes code.
  */
  private function generateItem($node, $parent_node)
  {
    if (array_key_exists('Caption', $node))
    {
      $caption = $node['Caption'];
      if ((array_key_exists('Items', $node)) && count($node['Items']) > 0)
      {
        echo "var " . $parent_node . "_1 = new qx.ui.tree.TreeFolder(\"$caption\");\n";
        foreach($node['Items'] as $v)
          $this->generateItem($v, $parent_node . "_1");
      }
      else
        echo "var " . $parent_node . "_1 = new qx.ui.tree.TreeFile(\"$caption\");\n";
      if ($this->_autoexpand == 1) echo $parent_node . "_1.setOpen(true);\n";
      if ($this->_indent != $this->defaultIndent()) echo $parent_node . "_1.setIndent($this->_indent);\n";
      $image = 'null';
      if ((($this->ControlState & csDesigning) != csDesigning) && ($this->_images != null))
      {
        if (array_key_exists('ImageIndex', $node))
        {
          $image_index = $node['ImageIndex'];
          if ($image_index > 0)
            $image = $this->_images->readImageByID($image_index, 1);
        }
      }
      echo $parent_node . "_1.setIcon($image);\n";
      echo "$parent_node.add(" . $parent_node . "_1);\n";
    }
  }

  /**
  * Generates all tree nodes
  **/
  private function generateNodes()
  {
    $root_node = $this->Name . '_root';
    echo "var $root_node = new qx.ui.tree.TreeFolder(\"$this->RootNodeCaption\");\n";
    echo "$root_node.setIcon(null);\n";
    if ($this->_indent != $this->defaultIndent()) echo "$root_node.setIndent($this->_indent);\n";
    //echo "$root_node.setOpenSymbolMode(\"always\");\n";
    echo "$root_node.setOpen(true);\n";
    echo $this->Name . ".setRoot($root_node);\n";

    if (is_array($this->_items))
    {
      foreach($this->_items as $k => $v)
      {
        if (is_array($v))
          $this->generateItem($v, $root_node);
      }
    }
  }

  protected $_rootnodecaption = "Items";

  /**
  * Specifies the text to be used for the root node
  *
  * All trees have a root node, from which all child nodes are created, by default,
  * the caption for this node is "Items". Use this property to change that value.
  *
  * @return string
  */
  function readRootNodeCaption() { return $this->_rootnodecaption; }
  function writeRootNodeCaption($value) { $this->_rootnodecaption=$value; }
  function defaultRootNodeCaption() { return "Items"; }

  /**
   * Specifies whether the top-level (root) node is displayed. Currently
   * this node can not be modified (it is static).
   * @return boolean
   */
  function readShowRoot()       { return $this->_showroot; }
  function writeShowRoot($value){ $this->_showroot=$value; }
  function defaultShowRoot()    { return 1; }

  /**
  * Image list used to customize the tree node icons. Be sure the correct
  * ImageIndex or SelectedIndex is used in the TreeNode.
  *
  * @see ImageList
  *
  * @return ImageList
  */
  function readImageList()        { return $this->_images; }
  function writeImageList($value) { $this->_images=$this->fixupProperty($value); }
  function defaultImageList()     { return null; }

  /**
  * Lists the individual nodes that appear in the tree view control.
  * At design time the items in the Items array is build out of pure array
  * rather than TreeNode objects. Once the TreeView is unserialized at run time
  * the array contains TreeNode objects.
  *
  * @return array
  */
  function readItems()          { return $this->_items; }
  function writeItems($value)   { $this->_items=$value; }

  function readAutoExpand()         { return $this->_autoexpand; }
  function writeAutoExpand($value)  { $this->_autoexpand=$value; }
  function defaultAutoExpand()      { return 0; }

  function readIndent()         { return $this->_indent; }
  function writeIndent($value)  { $this->_indent=$value; }
  function defaultIndent()      { return 19; }

  function readMultiSelect()          { return $this->_multiselect; }
  function writeMultiSelect($value)   { $this->_multiselect=$value; }
  function defaultMultiSelect()       { return 0; }

  function readOnChangeSelected()         { return $this->_onchangeselected; }
  function writeOnChangeSelected($value)  { $this->_onchangeselected=$value; }
  function defaultOnChangeSelected()      { return null; }

  function readjsOnChangeSelected()       { return $this->_jsonchangeselected; }
  function writejsOnChangeSelected($value){ $this->_jsonchangeselected=$value; }
  function defaultjsOnChangeSelected()    { return null; }

  function readOnAddition()               { return $this->_onaddition; }
  function writeOnAddition($value)        { $this->_onaddition=$value; }
  function defaultOnAddition()            { return null; }

  function readjsOnAddition()             { return $this->_jsonaddition; }
  function writejsOnAddition($value)      { $this->_jsonaddition=$value; }
  function defaultjsOnAddittion()         { return null; }

  function readOnDeletion()               { return $this->_jsondeletion; }
  function writeOnDeletion($value)        { $this->_ondeletion=$value; }
  function defaultOnDeletion()            { return null; }

  function readjsOnDeletion()             { return $this->_jsondeletion; }
  function writejsOnDeletion($value)      { $this->_jsondeletion=$value; }
  function defaultjsOnDeletion()          { return null; }
}

class QTreeView extends QCustomTreeView
{
  function getFont()              { return $this->readFont(); }
  function setFont($value)        { $this->writeFont($value); }

  function getParentFont()        { return $this->readparentfont(); }
  function setParentFont($value)  { $this->writeparentfont($value); }

  function getParentColor()        { return $this->readparentcolor(); }
  function setParentColor($value)  { $this->writeparentcolor($value); }

  function getTabOrder()          { return $this->readtaborder(); }
  function setTabOrder($value)    { $this->writetaborder($value); }

  function getTabStop()           { return $this->readtabstop(); }
  function setTabStop($value)     { $this->writetabstop($value); }

  function getVisible()           { return $this->readvisible(); }
  function setVisible($value)     { $this->writevisible($value); }

  function getHidden()            { return $this->readhidden(); }
  function setHidden($value)      { $this->writehidden($value); }

  function getColor()             { return $this->readColor(); }
  function setColor($value)       { $this->writeColor($value); }

  function getShowRoot()          { return $this->readShowRoot(); }
  function setShowRoot($value)    { $this->writeShowRoot($value); }

  function getRootNodeCaption()         { return $this->readRootNodeCaption(); }
  function setRootNodeCaption($value)   { $this->writeRootNodeCaption($value); }

  function getImageList()         { return $this->readImageList(); }
  function setImageList($value)   { $this->writeImageList($value); }

  function getItems()             { return $this->readItems(); }
  function setItems($value)       { $this->writeItems($value); }

  function getAutoExpand()        { return $this->readAutoExpand(); }
  function setAutoExpand($value)  { $this->writeAutoExpand($value); }

  function getIndent()            { return $this->readIndent(); }
  function setIndent($value)      { $this->writeIndent($value); }

  function getMultiSelect()       { return $this->readMultiSelect(); }
  function setMultiSelect($value) { $this->writeMultiSelect($value); }

  function getOnChangeSelected()       { return $this->readOnChangeSelected(); }
  function setOnChangeSelected($value) { $this->writeOnChangeSelected($value); }

  function getjsOnChangeSelected()        { return $this->readjsOnChangeSelected(); }
  function setjsOnChangeSelected($value)  { $this->writejsOnChangeSelected($value); }

  function getOnAddition()                { return $this->readOnAddition(); }
  function setOnAddition($value)          { $this->writeOnAddition($value); }

  function getjsOnAddition()              { return $this->readjsOnAddition(); }
  function setjsOnAddition($value)        { $this->writejsOnAddition($value); }

  function getOnDeletion()                { return $this->readOnDeletion(); }
  function setOnDeletion($value)          { $this->writeOnDeletion($value); }

  function getjsOnDeletion()              { return $this->readjsOnDeletion(); }
  function setjsOnDeletion($value)        { $this->writejsOnDeletion($value); }
}

class BorderIcons extends Persistent
{
  protected $_biminimize=1;
  protected $_bimaximize=1;
  protected $_biclose=1;
  public $_control=null;

  function readOwner()              { return $this->_control; }

  function readbiMinimize()         { return $this->_biminimize; }
  function writebiMinimize($value)  { $this->_biminimize=$value; }
  function defaultbiMinimize()      { return 1; }

  function readbiMaximize()         { return $this->_bimaximize; }
  function writebiMaximize($value)  { $this->_bimaximize=$value; }
  function defaultbiMaximize()      { return 1; }

  function readbiClose()            { return $this->_biclose; }
  function writebiClose($value)     { $this->_biclose=$value; }
  function defaultbiClose()         { return 1; }

  function getbiMinimize()          { return $this->readbiMinimize(); }
  function setbiMinimize($value)    { $this->writebiMinimize($value); }

  function getbiMaximize()          { return $this->readbiMaximize(); }
  function setbiMaximize($value)    { $this->writebiMaximize($value); }

  function getbiClose()             { return $this->readbiClose(); }
  function setbiClose($value)       { $this->writebiClose($value); }
}

class QCustomWindow extends QFocusControl
{
  protected $_statustext='';
  protected $_showstatusbar=0;
  protected $_modal=0;
  protected $_bordericons=null;
  protected $_icon='';
  protected $_movable=1;
  protected $_resizable=1;

  protected $_onbeforeclose=null;
  protected $_onclose=null;
  protected $_onbeforemaximize=null;
  protected $_onmaximize=null;
  protected $_onbeforeminimize=null;
  protected $_onminimize=null;
  protected $_onchangeactive=null;
  protected $_onbeforerestore=null;
  protected $_onrestore=null;

  protected $_jsonbeforeclose=null;
  protected $_jsonclose=null;
  protected $_jsonbeforemaximize=null;
  protected $_jsonmaximize=null;
  protected $_jsonbeforeminimize=null;
  protected $_jsonminimize=null;
  protected $_jsonchangeactive=null;
  protected $_jsonbeforerestore=null;
  protected $_jsonrestore=null;


  function dumpGUICode()
  {
    if ($this->_icon == '')
      $icon = "icon/16/apps/office-calendar.png";
    else $icon = $this->_icon;
    echo "$this->Name = new qx.ui.window.Window(\"$this->_caption\", \"$icon\");\n";
    echo "$this->Name.setLayout(new qx.ui.layout.Canvas());\n";
    if ($this->_statustext != '')
      echo "$this->Name.setStatus(\"$this->_statustext\");\n";
    if ($this->_showstatusbar != 0)
      echo "$this->Name.setShowStatusbar(true);\n";
    if ($this->_modal != 0)
      echo "$this->Name.setModal(true);\n";
    if ($this->_movable != 1)
      echo "$this->Name.setMovable(false);\n";
    if ($this->_resizable != 1)
      echo "$this->Name.setResizable(false);\n";
    if ($this->_bordericons->biMinimize == 0)
      echo "$this->Name.setShowMinimize(false);\n";
    if ($this->_bordericons->biMaximize == 0)
      echo "$this->Name.setShowMaximize(false);\n";
    if ($this->_bordericons->biClose == 0)
      echo "$this->Name.setShowClose(false);\n";

    parent::dumpGUICode();

    //RAID #280807
    if (($this->ControlState & csDesigning) != csDesigning)
    {
      if ($this->IsVisible)
      {
        if (!$this->Modal)
        {
          echo "  $this->Name.open();\n";
        }
      }
    }
    else
    {
      echo "  $this->Name.open();\n";
    }
  }

    protected $_isvisible='1';

    function readIsVisible() { return $this->_isvisible; }
    function writeIsVisible($value) { $this->_isvisible=$value; }
    function defaultIsVisible() { return '1'; }


  function __construct($aowner=null)
  {
    parent::__construct($aowner);
    $this->allowinline=false;
    $this->_width=352;
    $this->_height=360;

    $this->offsetx=12;
    $this->offsety=35;

    $this->ControlStyle='csAcceptsControls=1';
    $this->_bordericons = new BorderIcons();
    $this->_bordericons->_control = $this;
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonbeforeclose);
    $this->dumpJSEvent($this->_jsonclose);
    $this->dumpJSEvent($this->_jsonbeforemaximize);
    $this->dumpJSEvent($this->_jsonmaximize);
    $this->dumpJSEvent($this->_jsonbeforeminimize);
    $this->dumpJSEvent($this->_jsonminimize);
    $this->dumpJSEvent($this->_jsonchangeactive);
    $this->dumpJSEvent($this->_jsonbeforerestore);
    $this->dumpJSEvent($this->_jsonrestore);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonbeforeclose, 'beforeClose');
    $result.=$this->mapJSEvent($this->_jsonclose, 'close');
    $result.=$this->mapJSEvent($this->_jsonbeforemaximize, 'beforeMaximize');
    $result.=$this->mapJSEvent($this->_jsonmaximize, 'maximize');
    $result.=$this->mapJSEvent($this->_jsonbeforeminimize, 'beforeMaximize');
    $result.=$this->mapJSEvent($this->_jsonminimize, 'maximize');
    $result.=$this->mapJSEvent($this->_jsonchangeactive, 'changeActive');
    $result.=$this->mapJSEvent($this->_jsonbeforerestore, 'beforeRestore');
    $result.=$this->mapJSEvent($this->_jsonrestore, 'restore');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onbeforeclose,'beforeClose');
    $result.=$this->mapEventToJSHook($this->_onclose,'close');
    $result.=$this->mapEventToJSHook($this->_onbeforemaximize,'beforeMaximize');
    $result.=$this->mapEventToJSHook($this->_onmaximize,'maximize');
    $result.=$this->mapEventToJSHook($this->_onbeforeminimize,'beforeMinimize');
    $result.=$this->mapEventToJSHook($this->_onminimize,'minimize');
    $result.=$this->mapEventToJSHook($this->_onchangeactive,'changeActive');
    $result.=$this->mapEventToJSHook($this->_onbeforerestore,'beforeRestore');
    $result.=$this->mapEventToJSHook($this->_onrestore,'restore');

    echo $result;
  }

  function init()
  {
    parent::init();
    $serverevent= $this->input->serverevent;

    if (is_object($serverevent))
    {
      $this->fireEvent('onbeforeclose',$this->_onbeforeclose, $serverevent->asString());
      $this->fireEvent('onclose',$this->_onclose, $serverevent->asString());
      $this->fireEvent('onbeforemaximize',$this->_onbeforemaximize, $serverevent->asString());
      $this->fireEvent('onmaximize',$this->_onmaximize, $serverevent->asString());
      $this->fireEvent('onbeforeminimize',$this->_onbeforeminimize, $serverevent->asString());
      $this->fireEvent('onminimize',$this->_onminimize, $serverevent->asString());
      $this->fireEvent('onchageactive',$this->_onchangeactive, $serverevent->asString());
      $this->fireEvent('onbeforerestore',$this->_onbeforerestore, $serverevent->asString());
      $this->fireEvent('onrestore',$this->_onrestore, $serverevent->asString());
    }
  }

  function readCaption()            { return $this->_caption; }
  function writeCaption($value)     { $this->_caption=$value; }
  function defaultCaption()         { return ''; }

  function readStatusText()         { return $this->_statustext; }
  function writeStatusText($value)  { $this->_statustext=$value; }
  function defaultStatusText()      { return ''; }

  function readShowStatusBar()      { return $this->_showstatusbar; }
  function writeShowStatusBar($value) { $this->_showstatusbar=$value; }
  function defaultShowStatusBar()   { return 0; }

  function readModal()              { return $this->_modal; }
  function writeModal($value)       { $this->_modal=$value; }
  function defaultModal()           { return 0; }

  function readBorderIcons()        { return $this->_bordericons; }
  function writeBorderIcons($value)
  {
    if (is_object($value))
    {
      $this->_bordericons=$value;
    }
  }

  function readIcon()               { return $this->_icon; }
  function writeIcon($value)        { $this->_icon=$value; }
  function defaultIcon()            { return ''; }

  function readMovable()            { return $this->_movable; }
  function writeMovable($value)     { $this->_movable=$value; }
  function defaultMovable()         { return 1; }

  function readResizable()          { return $this->_resizable; }
  function writeResizable($value)   { $this->_resizable=$value; }
  function defaultResizable()       { return 1; }

  function readOnBeforeClose()            { return $this->_onbeforeclose; }
  function writeOnBeforeClose($value)     { $this->_onbeforeclose=$value; }
  function defaultOnBeforeClose()         { return null; }

  function readjsOnBeforeClose()          { return $this->_jsonbeforeclose; }
  function writejsOnBeforeClose($value)   { $this->_jsonbeforeclose=$value; }
  function defaultjsOnBeforeClose()       { return null; }

  function readOnClose()                  { return $this->_onclose; }
  function writeOnClose($value)           { $this->_onclose=$value; }
  function defaultOnClose()               { return null; }

  function readjsOnClose()                { return $this->_jsonclose; }
  function writejsOnClose($value)         { $this->_jsonclose=$value; }
  function defaultjsOnClose()             { return null; }

  function readOnBeforeMaximize()         { return $this->_onbeforemaximize; }
  function writeOnBeforeMaximize($value)  { $this->_onbeforemaximize=$value; }
  function defaultOnBeforeMaximize()      { return null; }

  function readjsOnBeforeMaximize()       { return $this->_jsonbeforemaximize; }
  function writejsOnBeforeMaximize($value){ $this->_jsonbeforemaximize=$value; }
  function defaultjsOnBeforeMaximize()    { return null; }

  function readOnMaximize()               { return $this->_onmaximize; }
  function writeOnMaximize($value)        { $this->_onmaximize=$value; }
  function defaultOnMaximize()            { return null; }

  function readjsOnMaximize()             { return $this->_jsonmaximize; }
  function writejsOnMaximize($value)      { $this->_jsonmaximize=$value; }
  function defaultjsOnMaximize()          { return null; }

  function readOnBeforeMinimize()         { return $this->_onbeforeminimize; }
  function writeOnBeforeMinimize($value)  { $this->_onbeforeminimize=$value; }
  function defaultOnBeforeMinimize()      { return null; }

  function readjsOnBeforeMinimize()       { return $this->_jsonbeforeminimize; }
  function writejsOnBeforeMinimize($value){ $this->_jsonbeforeminimize=$value; }
  function defaultjsOnBeforeMinimize()    { return null; }

  function readOnMinimize()               { return $this->_onminimize; }
  function writeOnMinimize($value)        { $this->_onminimize=$value; }
  function defaultOnMinimize()            { return null; }

  function readjsOnMinimize()             { return $this->_jsonminimize; }
  function writejsOnMinimize($value)      { $this->_jsonminimize=$value; }
  function defaultjsOnMinimize()          { return null; }

  function readOnChageActive()            { return $this->_onchangeactive; }
  function writeOnChangeActive($value)    { $this->_onchangeactive=$value; }
  function defaultOnChangeActive()        { return null; }

  function readjsOnChageActive()          { return $this->_jsonchangeactive; }
  function writejsOnChangeActive($value)  { $this->_jsonchangeactive=$value; }
  function defaultjsOnChangeActive()      { return null; }

  function readOnBeforeRestore()          { return $this->_onbeforerestore; }
  function writeOnBeforeRestore($value)   { $this->_onbeforerestore=$value; }
  function defaultOnBeforeRestore()       { return null; }

  function readjsOnBeforeRestore()        { return $this->_jsonbeforerestore; }
  function writejsOnBeforeRestore($value) { $this->_jsonbeforerestore=$value; }
  function defaultjsOnBeforeRestore()     { return null; }

  function readOnRestore()                { return $this->_onrestore; }
  function writeOnRestore($value)         { $this->_onrestore=$value; }
  function defaultOnRestore()             { return null; }

  function readjsOnRestore()              { return $this->_jsonrestore; }
  function writejsOnRestore($value)       { $this->_jsonrestore=$value; }
  function defaultjsOnRestore()           { return null; }
}

class QWindow extends QCustomWindow
{
  function getIsVisible() { return $this->readisvisible(); }
  function setIsVisible($value) { $this->writeisvisible($value); }

  function getCaption()             { return $this->readCaption(); }
  function setCaption($value)       { $this->writeCaption($value); }

  function getStatusText()          { return $this->readStatusText(); }
  function setStatusText($value)    { $this->writeStatusText($value); }

  function getShowStatusBar()       { return $this->readShowStatusBar(); }
  function setShowStatusBar($value) { $this->writeShowStatusBar($value); }

  function getModal()               { return $this->readModal(); }
  function setModal($value)         { $this->writeModal($value); }

  function getBorderIcons()         { return $this->readBorderIcons(); }
  function setBorderIcons($value)   { $this->writeBorderIcons($value); }

  function getIcon()                { return $this->readIcon(); }
  function setIcon($value)          { $this->writeIcon($value); }

  function getMovable()             { return $this->readMovable(); }
  function setMovable($value)       { $this->writeMovable($value); }

  function getResizable()           { return $this->readResizable(); }
  function setResizable($value)     { $this->writeResizable($value); }

  function getOnBeforeClose()       { return $this->readOnBeforeClose(); }
  function setOnBeforeClose($value) { $this->writeOnBeforeClose($value); }

  function getOnClose()             { return $this->readOnClose(); }
  function setOnClose($value)       { $this->writeOnClose($value); }

  function getOnBeforeMaximize()    { return $this->readOnBeforeMaximize(); }
  function setOnBeforeMaximize($value) { $this->writeOnBeforeMaximize($value); }

  function getOnMaximize()          { return $this->readOnMaximize(); }
  function setOnMaximize($value)    { $this->writeOnMaximize($value); }

  function getOnBeforeMinimize()    { return $this->readOnBeforeMinimize(); }
  function setOnBeforeMinimize($value) { $this->writeOnBeforeMinimize($value); }

  function getOnMinimize()          { return $this->readOnMinimize(); }
  function setOnMinimize($value)    { $this->writeOnMinimize($value); }

  function getOnChangeActive()      { return $this->readOnChageActive(); }
  function setOnChangeActive($value){ $this->writeOnChangeActive($value); }

  function getjsOnBeforeClose()       { return $this->readjsOnBeforeClose(); }
  function setjsOnBeforeClose($value) { $this->writejsOnBeforeClose($value); }

  function getjsOnClose()             { return $this->readjsOnClose(); }
  function setjsOnClose($value)       { $this->writejsOnClose($value); }

  function getjsOnBeforeMaximize()    { return $this->readjsOnBeforeMaximize(); }
  function setjsOnBeforeMaximize($value) { $this->writejsOnBeforeMaximize($value); }

  function getjsOnMaximize()          { return $this->readjsOnMaximize(); }
  function setjsOnMaximize($value)    { $this->writejsOnMaximize($value); }

  function getjsOnBeforeMinimize()    { return $this->readjsOnBeforeMinimize(); }
  function setjsOnBeforeMinimize($value) { $this->writejsOnBeforeMinimize($value); }

  function getjsOnMinimize()          { return $this->readjsOnMinimize(); }
  function setjsOnMinimize($value)    { $this->writejsOnMinimize($value); }

  function getjsOnChangeActive()      { return $this->readjsOnChageActive(); }
  function setjsOnChangeActive($value){ $this->writejsOnChangeActive($value); }

  function getOnBeforeRestore()       { return $this->readOnBeforeRestore(); }
  function setOnBeforeRestore($value) { $this->writeOnBeforeRestore($value); }

  function getOnRestore()             { return $this->readOnRestore(); }
  function setOnRestore($value)       { $this->writeOnRestore($value); }

  function getjsOnBeforeRestore()       { return $this->readjsOnBeforeRestore(); }
  function setjsOnBeforeRestore($value) { $this->writejsOnBeforeRestore($value); }

  function getjsOnRestore()             { return $this->readjsOnRestore(); }
  function setjsOnRestore($value)       { $this->writejsOnRestore($value); }
}

class QCustomListView extends QFocusControl
{
  protected $_columns=array();
  protected $_items=array();
  protected $_selectiontype=selSingle;
  protected $_sortcolumnindex=-1;
  protected $_sortascending=true;
  protected $_images=null;

  protected $_onedited;
  protected $_jsonedited;
  protected $_oncellclick;
  protected $_jsoncellclick;
  protected $_oncelldblclick;
  protected $_jsoncelldblclick;

  function dumpGUICode()
  {
    echo $this->Name . "_tableModel = new qx.ui.table.model.Simple();\n";
    //echo $this->Name . "_col_resizeModel = qx.ui.table.columnmodel.resizebehavior.Default();\n";
    $this->dumpColumns();
    $this->dumpRows();
    echo "$this->Name = new qx.ui.table.Table(" . $this->Name . "_tableModel);\n";
    echo "$this->Name.setStatusBarVisible(false);\n";
    $sel_mode = 'NO_SELECTION';
    switch($this->_selectiontype)
    {
      case selSingle:
        $sel_mode = 'SINGLE_SELECTION';
        break;

      case selOneInterval:
        $sel_mode = 'SINGLE_INTERVAL_SELECTION';
        break;

      case selMultiInterval:
        $sel_mode = 'MULTIPLE_INTERVAL_SELECTION';
        break;
    }
    echo "$this->Name.getSelectionModel().setSelectionMode(qx.ui.table.selection.Model.$sel_mode);\n";
    if ($this->_sortcolumnindex > -1)
      echo $this->Name . "_tableModel.sortByColumn($this->_sortcolumnindex, $this->SortAscending);\n";
    parent::dumpGUICode();
  }

  function __construct($aowner=null)
  {
    //Calls inherited constructor
    parent::__construct($aowner);

    $this->Width=400;
    $this->Height=200;
  }

  function loaded()
  {
    parent::loaded();
    $this->setImageList($this->_images);
  }

  function dumpColumns()
  {
    if (is_array($this->Columns))
    {
      $all_columns = '';
      foreach($this->Columns as $k => $v)
      {
        if ($all_columns == '') $all_columns = "\"" . $v . "\"";
        else $all_columns .= ", \"" . $v . "\"";
      }

      echo $this->Name . "_tableModel.setColumns([ $all_columns ]);\n";

      /*echo "var " . $this->Name . "_custom  = \n";
      echo "{\n";
      echo " tableColumnModel : function(obj) {\n";
      echo "    return new qx.ui.table.columnmodel.Resize(obj);\n";
      echo "  }\n";
      echo "};\n";*/

      //echo "$this->Name = new qx.ui.table.Table(" . $this->Name . "_tableModel);\n";
      /*echo $this->Name . "_tcm = $this->Name.getTableColumnModel();\n";
      echo $this->Name . "_resize = " . $this->Name . "_tcm.getBehavior();\n";

      $counter = 0;
      foreach($this->Columns as $k => $v)
      {
        if (is_array($v))
          $this->renderColumn($v, $counter);
        $counter++;
      }*/
    }
  }

  function dumpRow($a_row)
  {
    $to_write = '';
    if (array_key_exists('Caption', $a_row))
    {
      $to_write = '"' . $a_row['Caption'] . '"';
      if (array_key_exists('Items', $a_row))
      {
        $childs = $a_row['Items'];
        if (is_array($childs))
        {
          foreach($childs as $k=>$v)
          {
            if (is_array($v))
            {
              if (array_key_exists('Caption', $v))
                $to_write .= ', " ' . $v['Caption'] . '"';
            }
          }
        }
      }
    }
    return $to_write;
  }

  function dumpRows()
  {
    if (is_array($this->_items))
    {
      echo "var " . $this->Name . "_data = [];\n";
      foreach($this->_items as $k=>$v)
      {
        if (is_array($v))
          echo $this->Name . "_data.push([" . $this->dumpRow($v) . "]);\n";
      }
      echo $this->Name . "_tableModel.setData(" . $this->Name . "_data);\n";
    }
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonedited);
    $this->dumpJSEvent($this->_jsoncellclick);
    $this->dumpJSEvent($this->_jsoncelldblclick);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonedited, 'dataEdited');
    $result.=$this->mapJSEvent($this->_jsoncellclick, 'cellClick');
    $result.=$this->mapJSEvent($this->_jsoncelldblclick, 'cellDblClick');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onedited,'dataEdited');
    $result.=$this->mapEventToJSHook($this->_oncellclick,'cellClick');
    $result.=$this->mapEventToJSHook($this->_oncelldblclick,'cellDblClick');
    echo $result;
  }

  function init()
  {
    parent::init();
    $serverevent= $this->input->serverevent;

    if (is_object($serverevent))
    {
      $this->fireEvent('onedited',$this->_onedited, $serverevent->asString());
      $this->fireEvent('oncellclick',$this->_oncellclick, $serverevent->asString());
      $this->fireEvent('oncelldblclick',$this->_oncelldblclick, $serverevent->asString());
    }
  }

  function readColumns()                { return $this->_columns; }
  function writeColumns($value)         { $this->_columns = $value; }
  function defaultColumns()             { return null; }

  function readItems()                  { return $this->_items; }
  function writeItems($value)           { $this->_items=$value; }
  function defaultItems()               { return null; }

  function readSelectionType()          { return $this->_selectiontype; }
  function writeSelectionType($value)   { $this->_selectiontype=$value; }
  function defaultSelectionType()       { return selSingle; }

  function readSortColumnIndex()        { return $this->_sortcolumnindex; }
  function writeSortColumnIndex($value) { $this->_sortcolumnindex=$value; }
  function defaultSortColumnIndex()     { return -1; }

  function readSortAscending()          { return $this->_sortascending; }
  function writeSortAscending($value)   { $this->_sortascending=$value; }
  function defaultSortAscending()       { return true; }

  function readImageList()                 { return $this->_images; }
  function writeImageList($value)          { $this->_images=$this->fixupProperty($value); }
  function defaultImageList()              { return null; }

  function readOnEdited()               { return $this->_onedited; }
  function writeOnEdited($value)        { $this->_onedited=$value; }
  function defaultOnEdited()            { return null; }

  function readjsOnEdited()             { return $this->_jsonedited; }
  function writejsOnEdited($value)      { $this->_jsonedited=$value; }
  function defaultjsOnEdited()          { return null; }

  function readOnCellClick()            { return $this->_oncellclick; }
  function writeOnCellClick($value)     { $this->_oncellclick=$value; }
  function defaultOnCellClick()         { return null; }

  function readjsOnCellClick()          { return $this->_jsoncellclick; }
  function writejsOnCellClick($value)   { $this->_jsoncellclick=$value; }
  function defaultjsOnCellClick()       { return null; }

  function readOnCellDblClick()         { return $this->_oncelldblclick; }
  function writeOnCellDblClick($value)  { $this->_oncelldblclick=$value; }
  function defaultOnCellDblClick()      { return null; }

  function readjsOnCellDblClick()       { return $this->_jsoncelldblclick; }
  function writejsOnCellDblClick($value){ $this->_jsoncelldblclick=$value; }
  function defaultjsOnCellDblClick()    { return null; }
}

class QListView extends QCustomListView
{
  function getFont()              { return $this->readFont(); }
  function setFont($value)        { $this->writeFont($value); }

  function getParentFont()        { return $this->readparentfont(); }
  function setParentFont($value)  { $this->writeparentfont($value); }

  function getParentColor()        { return $this->readparentcolor(); }
  function setParentColor($value)  { $this->writeparentcolor($value); }

  function getTabOrder()          { return $this->readtaborder(); }
  function setTabOrder($value)    { $this->writetaborder($value); }

  function getTabStop()           { return $this->readtabstop(); }
  function setTabStop($value)     { $this->writetabstop($value); }

  function getVisible()           { return $this->readvisible(); }
  function setVisible($value)     { $this->writevisible($value); }

  function getHidden()            { return $this->readhidden(); }
  function setHidden($value)      { $this->writehidden($value); }

  function getColor()             { return $this->readColor(); }
  function setColor($value)       { $this->writeColor($value); }

  function getItems()                   { return $this->readItems(); }
  function setItems($value)             { $this->writeItems($value); }

  function getColumns()                 { return $this->readColumns(); }
  function setColumns($value)           { $this->writeColumns($value); }

  function getSelectionType()           { return $this->readSelectionType(); }
  function setSelectionType($value)     { $this->writeSelectionType($value); }

  function getSortColumnIndex()         { return $this->readSortColumnIndex(); }
  function setSortColumnIndex($value)   { $this->writeSortColumnIndex($value); }

  function getSortAscending()           { return $this->readSortAscending(); }
  function setSortAscending($value)     { $this->writeSortAscending($value); }

  function getImageList()               { return $this->readImageList(); }
  function setImageList($value)         { $this->writeImageList($value); }

  function getOnEdited()                { return $this->readOnEdited(); }
  function setOnEdited($value)          { $this->writeOnEdited($value); }

  function getjsOnEdited()              { return $this->readjsOnEdited(); }
  function setjsOnEdited($value)        { $this->writejsOnEdited($value); }

  function getOnCellClick()             { return $this->readOnCellClick(); }
  function setOnCellClick($value)       { $this->writeOnCellClick($value); }

  function getjsOnCellClick()           { return $this->readjsOnCellClick(); }
  function setjsOnCellClick($value)     { $this->writejsOnCellClick($value); }

  function getOnCellDblClick()          { return $this->readOnCellDblClick(); }
  function setOnCellDblClick($value)    { $this->writeOnCellDblClick($value); }

  function getjsOnCellDblClick()        { return $this->readjsOnCellDblClick(); }
  function setjsOnCellDblClick($value)  { $this->writejsOnCellDblClick($value); }
}

class QCustomToolBar extends QControl
{
  protected $_images=null;
  protected $_items=array();
  protected $_showcaptions=true;    // true for compatibility with older component

  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.toolbar.ToolBar();\n";
    if ($this->_showcaptions == false)
      echo "$this->Name.setShow(\"icon\");\n";
    else echo "$this->Name.setShow(\"both\");\n";
    $this->dumpItems();
    parent::dumpGUICode();
  }

  function dumpItems()
  {
    if (is_array($this->_items))
    {
      echo "var " . $this->Name . "_part1 = new qx.ui.toolbar.Part();\n";
      echo "var " . $this->Name . "_buttton = null;\n";
      foreach($this->_items as $k=>$v)
      {
        if (is_array($v))
        {
          $image = '""';
          if ((($this->ControlState & csDesigning) != csDesigning) && ($this->_images != null))
          {
            if (array_key_exists('ImageIndex', $v))
            {
              $index = $v['ImageIndex'];
              if ($index > 0)
                $image = $this->_images->readImageByID($index, 1);
            }
          }
          $caption = '';
          if (array_key_exists('Caption', $v))
            $caption = $v['Caption'];
          if ($caption == '-') $class = 'Separator';
          else $class = 'Button';
          echo $this->Name . "_button = new qx.ui.toolbar.$class(\"$caption\", $image);\n";
          echo $this->Name . "_part1.add(" . $this->Name . "_button);\n";
        }
      }
      echo "$this->Name.add(" . $this->Name . "_part1);\n";
    }
  }

  function loaded()
  {
    parent::loaded();
    $this->setImageList($this->_images);
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=300;
    $this->_height=30;
  }

  function readItems()                { return $this->_items; }
  function writeItems($value)         { $this->_items=$value; }
  function defaultItems()             { return null; }

  function readImages()               { return $this->_images; }
  function writeImages($value)        { $this->_images=$this->fixupProperty($value); }
  function defaultImages()            { return null; }

  function readShowCaptions()         { return $this->_showcaptions; }
  function writeShowCaptions($value)  { $this->_showcaptions=$value; }
  function defaultShowCaptions()      { return true; }
}

class QToolBar extends QCustomToolBar
{
  function getImageList()          { return $this->readImages(); }
  function setImageList($value)    { $this->writeImages($value); }

  function getItems()           { return $this->readItems(); }
  function setItems($value)     { $this->writeItems($value); }
}

?>
