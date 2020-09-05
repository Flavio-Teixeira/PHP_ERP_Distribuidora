<?php
require_once("rpcl/rpcl.inc.php");
use_unit("designide.inc.php");

setPackageTitle("jQuery NotifyBar component");
//Change this setting to the path where the icons for the components reside
setIconPath("./icons");

//Change yourunit.inc.php to the php file which contains the component code
registerComponents("jQuery", array("NotifyBar"), "notifybar/notifybar.inc.php");
registerPropertyValues("NotifyBar", "Control", array('Button'));
registerBooleanProperty("NotifyBar", "CloseButton");
registerPropertyValues("NotifyBar", "Position", array("ptTop", "ptBottom"));
registerPropertyEditor("NotifyBar", "BackgroundColor", "TSamplePropertyEditor", "native");
registerPropertyEditor("NotifyBar", "TextColor", "TSamplePropertyEditor", "native");
registerPropertyEditor("NotifyBar", "CloseButtonImage", "TImagePropertyEditor", "native");
registerPropertyEditor("NotifyBar", "CloseButtonHoverImage", "TImagePropertyEditor", "native");
registerPropertyValues("NotifyBar", "CloseButtonPosition",array("pbLeft","pbRight"));


?>