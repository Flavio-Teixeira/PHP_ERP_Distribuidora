<?php
require_once("rpcl/rpcl.inc.php");

use_unit('classes.inc.php');
use_unit('qooxdoo/controls.inc.php');

class QCustomActionList extends QComponent
{
    protected $_images=null;

    function readImages() { return $this->_images; }
    function writeImages($value) { $this->_images=$value; }
    function defaultImages() { return null; }

    protected $_actions=array();

    function readActions() { return $this->_actions; }
    function writeActions($value) { $this->_actions=$value; }
    function defaultActions() { return array(); }


    function dumpJavascript()
    {
      parent::dumpJavascript();

      reset($this->_actions);
      while (list($k,$action)=each($this->_actions))
      {
        if ($action['OnExecute']!='')
        {
          $this->dumpJSEvent($action['OnExecute']);
        }
      }

      echo "function $this->Name".'_init(container)'."\n";
      echo "{\n";
      reset($this->_actions);
      while (list($k,$action)=each($this->_actions))
      {
        echo $action['Name'].' = new qx.ui.core.Command("'.$action['ShortCut'].'");'."\n";
        echo $action['Name'].'.setLabel("'.$action['Caption'].'");'."\n";
        echo $action['Name'].'.setToolTipText("'.$action['Hint'].'");'."\n";
        //TODO: Image
        //TODO: Execute event
        if ($action['OnExecute']!='')
        {
          echo $action['Name'].'.addListener("execute",'.$action['OnExecute'].');'."\n";
        }
      }
      echo "}\n";
      QControl::$initfunctions[]=$this->Name.'_init';
    }

}

class QActionList extends QCustomActionList
{
    function getImages() { return $this->readimages(); }
    function setImages($value) { $this->writeimages($value); }

    function getActions() { return $this->readactions(); }
    function setActions($value) { $this->writeactions($value); }
}


?>