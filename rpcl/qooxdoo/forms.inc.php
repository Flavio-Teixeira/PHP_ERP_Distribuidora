<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("qooxdoo/controls.inc.php");

class QScrollBox extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.container.Scroll();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner=null)
    {
      parent::__construct($aowner);
      $this->_width=185;
      $this->_height=41;
    }
}



?>