<?php
  require_once("rpcl/rpcl.inc.php");
  use_unit("designide.inc.php");

    setPackageTitle("jQuery RPCL Components");
  //Change this setting to the path where the icons for the components reside
  setIconPath("./icons");

  //Change yourunit.inc.php to the php file which contains the component code
  registerComponents("jQuery",array("JQSlider"),"jquery/jqslider.inc.php");

  registerPropertyEditor("JQSlider","Lines","TStringListPropertyEditor","native");
?>
