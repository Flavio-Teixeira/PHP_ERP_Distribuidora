<?php
  require_once("rpcl/rpcl.inc.php");
  use_unit("designide.inc.php");

    setPackageTitle("jQuery Password Strength component");
  //Change this setting to the path where the icons for the components reside
  setIconPath("./icons");

  //Change yourunit.inc.php to the php file which contains the component code
  registerComponents("jQuery",array("PasswordStrength"),"passwordstrength/passwordstrength.inc.php");
  registerPropertyEditor("PasswordStrength","Messages","TStringListPropertyEditor","native");
  registerPropertyValues("PasswordStrength","InputPassword",array('Edit'));
  registerPropertyValues("PasswordStrength","MessageLabel",array('Label'));
  registerPropertyEditor("PasswordStrength","ColorMessage1","TSamplePropertyEditor","native");
  registerPropertyEditor("PasswordStrength","ColorMessage2","TSamplePropertyEditor","native");
  registerPropertyEditor("PasswordStrength","ColorMessage3","TSamplePropertyEditor","native");
  registerPropertyEditor("PasswordStrength","ColorMessage4","TSamplePropertyEditor","native");
  registerPropertyEditor("PasswordStrength","ColorMessage5","TSamplePropertyEditor","native");
?>