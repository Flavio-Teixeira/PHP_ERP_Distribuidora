<?php
  require_once("rpcl/rpcl.inc.php");
  use_unit("designide.inc.php");

    setPackageTitle("PEAR components");
  //Change this setting to the path where the icons for the components reside
  setIconPath("./icons");

  //Change yourunit.inc.php to the php file which contains the component code
  registerComponents("PEAR",array("PearDataGrid"),"PEAR/peardatagrid.inc.php");
  registerBooleanProperty("PearDataGrid","ShowPaginator");

  registerPropertyEditor("PearDataGrid","SQL","TStringListPropertyEditor","native");
?>
