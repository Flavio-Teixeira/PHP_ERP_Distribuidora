<?php
  require_once("rpcl/rpcl.inc.php");
  use_unit("designide.inc.php");

    setPackageTitle("jQuery Autocomplete");
  //Change this setting to the path where the icons for the components reside
  setIconPath("./icons");

  //Change yourunit.inc.php to the php file which contains the component code
  registerComponents("jQuery",array("AutoComplete"),"autocomplete/autocomplete.inc.php");

  registerPropertyEditor("AutoComplete","Items","TStringListPropertyEditor","native");

  registerBooleanProperty('AutoComplete','AutoFill');
  registerBooleanProperty('AutoComplete','Focus');
  registerBooleanProperty('AutoComplete','MatchCase');
  registerBooleanProperty('AutoComplete','MatchContains');
  registerBooleanProperty('AutoComplete','MatchSubset');
  registerBooleanProperty('AutoComplete','SelectFirst');
  registerBooleanProperty('AutoComplete','SelectOnly');
  registerPropertyEditor("AutoComplete","LoadingImage","TImagePropertyEditor","native");
  registerPropertyValues("AutoComplete","LookupSource",array('Datasource'));
?>