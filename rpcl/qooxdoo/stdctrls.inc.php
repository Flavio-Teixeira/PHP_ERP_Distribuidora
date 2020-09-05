<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("stdctrls.inc.php");
use_unit("qooxdoo/controls.inc.php");

define('bsCommandLink','bsCommandLink');
define('bsPushButton','bsPushButton');
define('bsSplitButton','bsSplitButton');

define('tnLeftJustify', 'tnLeftJustify');
define('tnCenter', 'tnCenter');
define('tnRightJustify', 'tnRightJustify');

class QButtonControl extends QFocusControl
{
}

class QCustomButton extends QButtonControl
{
    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=75;
        $this->_height=25;
    }

    function dumpGUICode()
    {
      $buttonclass='form.Button';
      if ($this->_style==bsSplitButton) $buttonclass='form.SplitButton';
      else if ($this->_style==bsCommandLink) $buttonclass='basic.Atom';

      echo "$this->Name = new qx.ui.$buttonclass(\"$this->Caption\");\n";
      parent::dumpGUICode();
    }

    function getCaption() { return $this->readcaption(); }
    function setCaption($value) { $this->writecaption($value); }

    protected $_style=bsPushButton;

    function getStyle() { return $this->_style; }
    function setStyle($value) { $this->_style=$value; }
    function defaultStyle() { return bsPushButton; }


    function loaded()
    {
      parent::loaded();
      $this->_images=$this->fixupProperty($this->_images);
    }

    protected $_images=null;

    function getImages() { return $this->_images; }
    function setImages($value) { $this->_images=$this->fixupProperty($value); }
    function defaultImages() { return null; }

    protected $_jsondropdownclick=null;

    function readjsOnDropDownClick() { return $this->_jsondropdownclick; }
    function writejsOnDropDownClick($value) { $this->_jsondropdownclick=$value; }
    function defaultjsOnDropDownClick() { return null; }

}

class QButton extends QCustomButton
{
    function getPopupMenu() { return $this->readpopupmenu(); }
    function setPopupMenu($value) { $this->writepopupmenu($value); }

    function getAction() { return $this->readaction(); }
    function setAction($value) { $this->writeaction($value); }

    function getFont() { return $this->readfont(); }
    function setFont($value) { $this->writefont($value); }

    function getParentFont() { return $this->readparentfont(); }
    function setParentFont($value) { $this->writeparentfont($value); }

    function getTabOrder() { return $this->readtaborder(); }
    function setTabOrder($value) { $this->writetaborder($value); }

    function getTabStop() { return $this->readtabstop(); }
    function setTabStop($value) { $this->writetabstop($value); }

    function getVisible() { return $this->readvisible(); }
    function setVisible($value) { $this->writevisible($value); }

    function getHidden() { return $this->readhidden(); }
    function setHidden($value) { $this->writehidden($value); }

    function getjsOnClick() { return $this->readjsonclick(); }
    function setjsOnClick($value) { $this->writejsonclick($value); }

    function getjsOnContextPopup() { return $this->readjsoncontextpopup(); }
    function setjsOnContextPopup($value) { $this->writejsoncontextpopup($value); }

    function getjsOnDragDrop() { return $this->readjsondragdrop(); }
    function setjsOnDragDrop($value) { $this->writejsondragdrop($value); }

    function getjsOnDragOver() { return $this->readjsondragover(); }
    function setjsOnDragOver($value) { $this->writejsondragover($value); }

    function getjsOnDropDownClick() { return $this->readjsondropdownclick(); }
    function setjsOnDropDownClick($value) { $this->writejsondropdownclick($value); }

    function getjsOnEndDrag() { return $this->readjsonenddrag(); }
    function setjsOnEndDrag($value) { $this->writejsonenddrag($value); }

    function getjsOnMouseActivate() { return $this->readjsonmouseactivate(); }
    function setjsOnMouseActivate($value) { $this->writejsonmouseactivate($value); }

    function getjsOnMouseDown() { return $this->readjsonmousedown(); }
    function setjsOnMouseDown($value) { $this->writejsonmousedown($value); }

    function getjsOnMouseEnter() { return $this->readjsonmouseenter(); }
    function setjsOnMouseEnter($value) { $this->writejsonmouseenter($value); }

    function getjsOnMouseLeave() { return $this->readjsonmouseleave(); }
    function setjsOnMouseLeave($value) { $this->writejsonmouseleave($value); }

    function getjsOnMouseMove() { return $this->readjsonmousemove(); }
    function setjsOnMouseMove($value) { $this->writejsonmousemove($value); }

    function getjsOnMouseUp() { return $this->readjsonmouseup(); }
    function setjsOnMouseUp($value) { $this->writejsonmouseup($value); }

    function getjsOnStartDrag() { return $this->readjsonstartdrag(); }
    function setjsOnStartDrag($value) { $this->writejsonstartdrag($value); }

    function getjsOnEnter() { return $this->readjsonenter(); }
    function setjsOnEnter($value) { $this->writejsonenter($value); }

    function getjsOnExit() { return $this->readjsonexit(); }
    function setjsOnExit($value) { $this->writejsonexit($value); }

    function getjsOnKeyDown() { return $this->readjsonkeydown(); }
    function setjsOnKeyDown($value) { $this->writejsonkeydown($value); }

    function getjsOnKeyPress() { return $this->readjsonkeypress(); }
    function setjsOnKeyPress($value) { $this->writejsonkeypress($value); }

    function getjsOnKeyUp() { return $this->readjsonkeyup(); }
    function setjsOnKeyUp($value) { $this->writejsonkeyup($value); }

    function getOnClick() { return $this->readonclick(); }
    function setOnClick($value) { $this->writeonclick($value); }

    function getOnMouseMove() { return $this->readonmousemove(); }
    function setOnMouseMove($value) { $this->writeonmousemove($value); }

}

class QCustomCheckBox extends QFocusControl
{
  protected $_checked=0;

  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.form.CheckBox(\"$this->Caption\");\n";
    if ($this->_checked === false || $this->_checked === 0 || $this->_checked === '0' || $this->_checked === 'false')
      echo "$this->Name.setValue(false);\n";
    else echo "$this->Name.setValue(true);\n";

    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=97;
    $this->_height=17;
    $this->linkproperties[]=array('changeValue','getValue()','_checked');
  }

  function readChecked()        { return $this->_checked; }
  function writeChecked($value) { $this->_checked=$value; }
  function defaultChecked()     { return 0; }
}

class QCheckbox extends QCustomCheckBox
{
  function getCaption()         { return $this->readcaption(); }
  function setCaption($value)   { $this->writecaption($value); }

  function getChecked()         { return $this->readChecked(); }
  function setChecked($value)   { $this->writeChecked($value); }

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
}


class QCustomListControl extends QFocusControl
{
  protected $_items=array();

  function readItems()            { return $this->_items; }
  function writeItems($value)     { $this->_items=$value; }
  function defaultItems()         { return ''; }

  function dumpItems()
  {
    if (is_array($this->_items))
    {
      echo 'var ' . $this->Name . "_it = null;\n";
      foreach($this->_items as $k => $v)
      {
        $text = str_replace('"','\"',$v);
        echo $this->Name . "_it = new qx.ui.form.ListItem(\"" . $text . "\");\n";
        echo "$this->Name.add($this->Name" . "_it);\n";
      }
    }
  }
}

class QCustomComboBox extends QCustomListControl
{
  protected $_itemindex=-1;

  protected $_onchange=null;
  protected $_jsonchange=null;

  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.form.ComboBox();\n";
    $this->dumpItems();
    if ($this->_itemindex >= 0)
      echo "$this->Name.setValue($this->Name.getChildrenContainer().getSelectables()[$this->_itemindex].getLabel());\n";

    if ($this->_text<>'')
    {
      $text=str_replace('"','\"',$this->_text);
      echo $this->Name.'.setValue("'.$text.'");'."\n";
    }

    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=145;
    $this->_height=24;
    $this->linkproperties[]=array('changeValue','getValue()','_text');
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

    protected $_text='';

    function readText() { return $this->_text; }
    function writeText($value) { $this->_text=$value; }
    function defaultText() { return ''; }

  function readItemIndex()        { return $this->_itemindex; }
  function writeItemIndex($value) { $this->_itemindex=$value; }
  function defaultItemIndex()     { return -1; }

  function readOnChange()         { return $this->_onchange; }
  function writeOnChange($value)  { $this->_onchange=$value; }
  function defaultOnChange()      { return null; }

  function readjsOnChange()       { return $this->_jsonchange; }
  function writejsOnChange($value){ $this->_jsonchange=$value; }
  function defaultjsOnChange()    { return null; }
}

class QComboBox extends QCustomComboBox
{
  function getItems()             { return $this->readItems(); }
  function setItems($value)       { $this->writeItems($value); }

  function getItemIndex()         { return $this->readItemIndex(); }
  function setItemIndex($value)   { $this->writeItemIndex($value); }

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

  function getOnChange()          { return $this->readOnChange(); }
  function setOnChange($value)    { $this->writeOnChange($value); }

  function getjsOnChange()        { return $this->readjsOnChange(); }
  function setjsOnChange($value)  { $this->writejsOnChange($value); }
}

class QGroupBox extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.groupbox.GroupBox(\"$this->Caption\");\n";
      echo "$this->Name.setLayout(new qx.ui.layout.Canvas());\n";
      parent::dumpGUICode();
    }

    function getCaption() { return $this->readcaption(); }
    function setCaption($value) { $this->writecaption($value); }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->ControlStyle='csAcceptsControls=1';
        $this->_width=185;
        $this->_height=105;
        $this->offsetx=12;
        $this->offsety=30;
    }

}

class QCustomLabel extends QFocusControl
{
  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.basic.Label(\"$this->Caption\");\n";
    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=75;
    $this->_height=15;
  }
}

class QLabel extends QCustomLabel
{
  function getCaption()           { return $this->readcaption(); }
  function setCaption($value)     { $this->writecaption($value); }

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
}

class QCustomListBox extends QCustomListControl
{
  protected $_multiselect=0;

  protected $_onchangeselected=null;
  protected $_jsonchangeselected=null;

  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.form.List();\n";
    if ($this->_multiselect == 1)
      echo "$this->Name.setSelectionMode(\"multi\");\n";
    $this->dumpItems();
    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=121;
    $this->_height=97;
    //$this->linkproperties[]=array('changeSelection','getValue()','_checked');
    //$this->linkproperties[]=array(
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonchangeselected);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonchangeselected, 'changeSelection');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onchangeselected,'changeSelection');

    echo $result;
  }

  function init()
  {
    parent::init();
    $serverevent= $this->input->serverevent;

    if (is_object($serverevent))
    {
      $this->fireEvent('onchangeselected',$this->_onchangeselected, $serverevent->asString());
    }
  }

  function readMultiSelect()              { return $this->_multiselect; }
  function writeMultiSelect($value)       { $this->_multiselect=$value; }
  function defaultMultiSelect()           { return 0; }

  function readOnChangeSelected()         { return $this->_onchangeselected; }
  function writeOnChangeSelected($value)  { $this->_onchangeselected=$value; }
  function defaultOnChangeSelected()      { return null; }

  function readjsOnChangeSelected()       { return $this->_jsonchangeselected; }
  function writejsOnChangeSelected($value){ $this->_jsonchangeselected=$value; }
  function defaultjsOnChangeSelected()    { return null; }
}

class QListBox extends QCustomListBox
{
  function getItems()             { return $this->readItems(); }
  function setItems($value)       { $this->writeItems($value); }

  function getMultiSelect()       { return $this->readMultiSelect(); }
  function setMultiSelect($value) { $this->writeMultiSelect($value); }

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

  function getOnChangeSelected()        { return $this->readOnChangeSelected(); }
  function setOnChangeSelected($value)  { $this->writeOnChangeSelected($value); }

  function getjsOnChangeSelected()      { return $this->readjsOnChangeSelected(); }
  function setjsOnChangeSelected($value){ $this->writejsOnChangeSelected($value); }
}

class QCustomRadioButton extends QFocusControl
{
  protected $_checked=0;

  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.form.RadioButton(\"$this->Caption\");\n";
    if ($this->_checked === false || $this->_checked === 0 || $this->_checked === '0' || $this->_checked === 'false')
      echo "$this->Name.setValue(false);\n";
    else echo "$this->Name.setValue(true);\n";

    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=113;
    $this->_height=17;
    $this->linkproperties[]=array('changeValue','getValue()','_checked');
  }

  function readChecked()        { return $this->_checked; }
  function writeChecked($value) { $this->_checked=$value; }
  function defaultChecked()     { return 0; }
}

class QRadioButton extends QCustomRadioButton
{
  function getCaption()         { return $this->readcaption(); }
  function setCaption($value)   { $this->writecaption($value); }

  function getChecked()         { return $this->readChecked(); }
  function setChecked($value)   { $this->writeChecked($value); }

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
}

class QCustomScrollBar extends QFocusControl
{
  protected $_kind=sbHorizontal;
  protected $_max=100;
  protected $_smallchange=1;
  protected $_pagesize=0;
  protected $_position=0;

  protected $_onchange=null;
  protected $_jsonchange=null;

  function dumpGUICode()
  {
    if ($this->_kind == sbVertical)
      $orientation = "vertical";
    else $orientation = "horizontal";

    echo "$this->Name = new qx.ui.core.scroll.ScrollBar(\"$orientation\");\n";
    echo "$this->Name.setMaximum($this->_max);\n";
    echo "$this->Name.setPosition($this->_position);\n";
    echo "$this->Name.setSingleStep($this->_smallchange);\n";
    echo "$this->Name.setPageStep($this->_pagesize);\n";

    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=185;
    $this->_height=17;
    $this->linkproperties[]=array('scroll','getPosition()','_position');
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonchange);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonchange, 'scroll');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onchange,'scroll');

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

  function readKind()           { return $this->_kind; }
  function writeKind($value)    { $this->_kind=$value; }
  function defaultKind()        { return sbHorizontal; }

  function readMax()            { return $this->_max; }
  function writeMax($value)     { $this->_max=$value; }
  function defaultMax()         { return 100; }

  function readSmallChange()        { return $this->_smallchange; }
  function writeSmallChange($value) { $this->_smallchange=$value; }
  function defaultSmallChange()     { return 1; }

  function readPageSize()           { return $this->_pagesize; }
  function writePageSize($value)    { $this->_pagesize=$value; }
  function defaultPageSize()        { return 0; }

  function readPosition()           { return $this->_position; }
  function writePosition($value)    { $this->_position=$value; }
  function defaultPosition()        { return 0; }

  function readOnChange()           { return $this->_onchange; }
  function writeOnChange($value)    { $this->_onchange=$value; }
  function defaultOnChange()        { return null; }

  function readjsOnChange()         { return $this->_jsonchange; }
  function writejsOnChange($value)  { $this->_jsonchange=$value; }
  function defaultjsOnChange()      { return null; }
}

class QScrollBar extends QCustomScrollBar
{
  function getKind()                { return $this->readKind(); }
  function setKind($value)          { $this->writeKind($value); }

  function getMax()                 { return $this->readMax(); }
  function setMax($value)           { $this->writeMax($value); }

  function getSmallChange()         { return $this->readSmallChange(); }
  function setSmallChange($value)   { $this->writeSmallChange($value); }

  function getPageSize()            { return $this->readPageSize(); }
  function setPageSize($value)      { $this->writePageSize($value); }

  function getPosition()            { return $this->readPosition(); }
  function setPosition($value)      { $this->writePosition($value); }

  function getOnChange()            { return $this->readOnChange(); }
  function setOnChange($value)      { $this->writeOnChange($value); }

  function getjsOnChange()          { return $this->_jsonchange; }
  function setjsOnChange($value)    { $this->writejsOnChange($value); }
}

class QCustomEdit extends QFocusControl
{
  protected $_text="";
  protected $_readonly=0;
  protected $_maxlength=0;
  protected $_liveupdate=0;
  protected $_textalign=tnLeftJustify;

  protected $_onchange=null;
  protected $_jsonchange=null;

    protected $_ispassword='0';

    function readIsPassword() { return $this->_ispassword; }
    function writeIsPassword($value) { $this->_ispassword=$value; }
    function defaultIsPassword() { return '0'; }



  function dumpGUICode()
  {
    $text=str_replace('"','\"',$this->_text);
    if ($this->_ispassword)
    {
      echo "$this->Name = new qx.ui.form.PasswordField(\"$text\");\n";
    }
    else echo "$this->Name = new qx.ui.form.TextField(\"$text\");\n";

    if ($this->_readonly == 1)
      echo "$this->Name.setReadOnly(true);\n";
    $just = "left";
    if ($this->_textalign == tnCenter)
      $just = "center";
    else if ($this->_textalign == tnRightJustify)
      $just = "right";
    echo "$this->Name.setTextAlign(\"$just\");\n";
    if ($this->_maxlength > 0)
      echo "$this->Name.setMaxLength($this->_maxlength);\n";
    if ($this->_liveupdate == 1)
      echo "$this->Name.setLiveUpdate(true);\n";

    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=121;
    $this->_height=21;
    $this->linkproperties[]=array('input','getValue()','_text');
  }


  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonchange);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonchange, 'input');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onchange,'input');

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

  function readText()             { return $this->_text; }
  function writeText($value)      { $this->_text=$value; }
  function defaultText()          { return ""; }

  function readReadOnly()         { return $this->_readonly; }
  function writeReadOnly($value)  { $this->_readonly=$value; }
  function defaultReadOnly()      { return 0; }

  function readMaxLength()        { return $this->_maxlength; }
  function writeMaxLength($value) { $this->_maxlength=$value; }
  function defaultMaxLength()     { return 0; }

  function readLiveUpdate()       { return $this->_liveupdate; }
  function writeLiveUpdate($value){ $this->_liveupdate=$value; }
  function defaultLiveUpdate()    { return 0; }

  function readTextAlign()        { return $this->_textalign; }
  function writeTextAlign($value) { $this->_textalign=$value; }
  function defaultTextAlign()     { return "tnLeftJustify"; }

  function readOnChange()         { return $this->_onchange; }
  function writeOnChange($value)  { $this->_onchange=$value; }
  function defaultOnChange()      { return null; }

  function readjsOnChange()       { return $this->_jsonchange; }
  function writejsOnChange($value){ $this->_jsonchange=$value; }
  function defaultjsOnChange()    { return null; }
}

class QEdit extends QCustomEdit
{
  function getIsPassword() { return $this->readispassword(); }
  function setIsPassword($value) { $this->writeispassword($value); }

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

  function getText()              { return $this->readText(); }
  function setText($value)        { $this->writeText($value); }

  function getReadOnly()          { return $this->readReadOnly(); }
  function setReadOnly($value)    { $this->writeReadOnly($value); }

  function getTextAlign()         { return $this->readTextAlign(); }
  function setTextAlign($value)   { $this->writeTextAlign($value); }

  function getLiveUpdate()        { return $this->readLiveUpdate(); }
  function setLiveUpdate($value)  { $this->writeLiveUpdate($value); }

  function getMaxLength()         { return $this->readMaxLength(); }
  function setMaxLength($value)   { $this->writeMaxLength($value); }

  function getOnChange()          { return $this->readOnChange(); }
  function setOnChange($value)    { $this->writeOnChange($value); }

  function getjsOnChange()        { return $this->readjsOnChange(); }
  function setjsOnChange($value)  { $this->writejsOnChange($value); }
}

class QCustomMemo extends QFocusControl
{
  protected $_wordwrap=1;
  protected $_lines=array();
  protected $_readonly=0;
  protected $_maxlength=0;
  protected $_textalign=tnLeftJustify;
  protected $_liveupdate=0;

  protected $_onchange=null;
  protected $_jsonchange=null;

  private function dumpText()
  {
    if (is_array($this->_lines))
    {
      $to_write = '';

      foreach($this->_lines as $k=>$v)
      {
        $to_write .= $v . "\\n";
      }
      return $to_write;
    }
    else return '';
  }

  function dumpGUICode()
  {
    $text=$this->dumpText();
    $text=str_replace('"','\"',$text);
    echo "$this->Name = new qx.ui.form.TextArea(\"" . $text. "\");\n";
    if ($this->_readonly == 1)
      echo "$this->Name.setReadOnly(true);\n";
    $just = "left";
    if ($this->_textalign == tnCenter)
      $just = "center";
    else if ($this->_textalign == tnRightJustify)
      $just = "right";
    echo "$this->Name.setTextAlign(\"$just\");\n";
    if ($this->_maxlength > 0)
      echo "$this->Name.setMaxLength($this->_maxlength);\n";
    if ($this->_liveupdate == 1)
      echo "$this->Name.setLiveUpdate(true);\n";

    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=185;
    $this->_height=89;
    $this->linkproperties[]=array('input','getValue()','_lines');
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsonchange);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    $result.=$this->mapJSEvent($this->_jsonchange, 'input');

    //To perform submits
    $result.=$this->mapEventToJSHook($this->_onchange,'input');

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

  function readLines()             { return $this->_lines; }
  function writeLines($value)      { $this->_lines=$value; }
  function defaultLines()          { return ""; }

  function readReadOnly()         { return $this->_readonly; }
  function writeReadOnly($value)  { $this->_readonly=$value; }
  function defaultReadOnly()      { return 0; }

  function readMaxLength()        { return $this->_maxlength; }
  function writeMaxLength($value) { $this->_maxlength=$value; }
  function defaultMaxLength()     { return 0; }

  function readLiveUpdate()       { return $this->_liveupdate; }
  function writeLiveUpdate($value){ $this->_liveupdate=$value; }
  function defaultLiveUpdate()    { return 0; }

  function readTextAlign()        { return $this->_textalign; }
  function writeTextAlign($value) { $this->_textalign=$value; }
  function defaultTextAlign()     { return "tnLeftJustify"; }

  function readWordWrap()         { return $this->_wordwrap; }
  function writeWordWrap($value)  { $this->_wordwrap=$value; }
  function defaultWordWrap()      { return 1; }

  function readOnChange()         { return $this->_onchange; }
  function writeOnChange($value)  { $this->_onchange=$value; }
  function defaultOnChange()      { return null; }

  function readjsOnChange()       { return $this->_jsonchange; }
  function writejsOnChange($value){ $this->_jsonchange=$value; }
  function defaultjsOnChange()    { return null; }
}

class QMemo extends QCustomMemo
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

  function getLines()              { return $this->readLines(); }
  function setLines($value)        { $this->writeLines($value); }

  function getReadOnly()          { return $this->readReadOnly(); }
  function setReadOnly($value)    { $this->writeReadOnly($value); }

  function getTextAlign()         { return $this->readTextAlign(); }
  function setTextAlign($value)   { $this->writeTextAlign($value); }

  function getLiveUpdate()        { return $this->readLiveUpdate(); }
  function setLiveUpdate($value)  { $this->writeLiveUpdate($value); }

  function getMaxLength()         { return $this->readMaxLength(); }
  function setMaxLength($value)   { $this->writeMaxLength($value); }

  function getWordWrap()          { return $this->readWordWrap(); }
  function setWordWrap($value)    { $this->writeWordWrap($value); }

  function getOnChange()          { return $this->readOnChange(); }
  function setOnChange($value)    { $this->writeOnChange($value); }

  function getjsOnChange()        { return $this->readjsOnChange(); }
  function setjsOnChange($value)  { $this->writejsOnChange($value); }
}

?>