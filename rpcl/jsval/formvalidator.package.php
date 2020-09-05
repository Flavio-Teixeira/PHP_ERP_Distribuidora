<?php
  require_once("rpcl/rpcl.inc.php");
  use_unit("designide.inc.php");

    setPackageTitle("Form Validator RPCL components");
  //Change this setting to the path where the icons for the components reside
  setIconPath("./icons");

  //Change yourunit.inc.php to the php file which contains the component code
  registerComponents("Standard",array("FormValidator"),"jsval/formvalidator.inc.php");

  registerPropertyEditor("FormValidator","Rules","TFormValidatorRulesPropertyEditor","native");
  registerBooleanProperty("FormValidator",'ValidateCompleteForm');  
?>
