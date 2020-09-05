<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("qooxdoo/stdctrls.inc.php");
use_unit("controls.inc.php");


class QCustomRadioGroup extends QFocusControl
{
  protected $_items=array();
  protected $_itemindex=-1;

  private function dumpItems()
  {
    if (is_array($this->_items))
    {
      foreach($this->_items as $v)
      {
        $text = str_replace('"','\"',$v);
        echo "$this->Name.add(new qx.ui.form.RadioButton(\"$text\"));\n";
      }
    }
  }

  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.form.RadioButtonGroup();\n";
    echo "$this->Name.setLayout(new qx.ui.layout.VBox(5));\n";
    $this->dumpItems();
    /*if ($this->_itemindex >= 0)
      echo "$this->Name.setValue($this->Name.getChildrenContainer().getSelectables()[$this->_itemindex].getLabel());\n";
    */
    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=185;
    $this->_height=105;
    //$this->linkproperties[]=array('changeValue','getValue()','_checked');
  }

  function readItems()            { return $this->_items; }
  function writeItems($value)     { $this->_items=$value; }
  function defaultItems()         { return ''; }

  function readItemIndex()        { return $this->_itemindex; }
  function writeItemIndex($value) { $this->_itemindex=$value; }
  function defaultItemIndex()     { return -1; }
}

class QRadioGroup extends QCustomRadioGroup
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
}

class QCustomImage extends QFocusControl
{
  protected $_imagesource='';
  protected $_stretch=0;

  function dumpGUICode()
  {
    echo "$this->Name = new qx.ui.basic.Image(\"$this->_imagesource\");\n";
    if ($this->_stretch == 1)
      echo "$this->Name.setScale(true);\n";
    parent::dumpGUICode();
  }

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->_width=105;
    $this->_height=105;
  }

  function readImageSource()        { return $this->_imagesource; }
  function writeImageSource($value) { $this->_imagesource=$value; }
  function defaultImageSource()     { return ''; }

  function readStretch()            { return $this->_stretch; }
  function writeStretch($value)     { $this->_stretch=$value; }
  function defaultStretch()         { return 0; }
}

class QImage extends QCustomImage
{
  function getImageSource()         { return $this->readImageSource(); }
  function setImageSource($value)   { $this->writeImageSource($value); }

  function getStretch()             { return $this->readStretch(); }
  function setStretch($value)       { $this->writeStretch($value); }
}


?>