<?php
  require_once("rpcl/rpcl.inc.php");
  use_unit("designide.inc.php");

    setPackageTitle("Embarcadero Datasnap components");
  //Change this setting to the path where the icons for the components reside
  setIconPath("./icons");

  //Change yourunit.inc.php to the php file which contains the component code
  registerComponents("DataSnap",array("DSJavascriptClient","DSRestConnection"),"datasnap/datasnap.inc.php");
?>