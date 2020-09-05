<?php
require_once("rpcl/rpcl.inc.php");
use_unit("designide.inc.php");

setPackageTitle("Jmobile Components");
//Change this setting to the path where the icons for the components reside
setIconPath("./icons");

registerNoVisibleComponents(array("MPage"),"jquerymobile/forms.inc.php");
registerPropertyValues("CustomMPage", "Theme", array("MobileTheme"));
registerPropertyValues("CustomMPage", "DefaultTransition", array('trSlide', 'trSlideUp', 'trSlideDown', 'trPop', 'trFade', 'trFlip'));
registerBooleanProperty("CustomMPage", "ShowLoadingMessage");
registerBooleanProperty("CustomMPage", "AutoInitialize");
registerBooleanProperty("CustomMPage", "TouchOverflowEnabled");
registerPropertyValues("CustomMPage", "CssFile", array('cssBasic', 'cssCustom'));
registerPropertyEditor("CustomMPage", "CustomCssFile", "TFilenamePropertyEditor", "native");


registerPropertyValues("MSlider","Theme",array("MobileTheme"));
registerPropertyValues("MSlider","TrackTheme",array("MobileTheme"));
registerPropertyValues("MSlider", "Enhancement",array('enFull','enStructure','enNone'));


registerPropertyValues("MPanel", "Theme", array("MobileTheme"));

registerPropertyValues("MEdit", "Theme", array("MobileTheme"));
registerBooleanProperty("MEdit", "IsSearch");
registerPropertyValues("MEdit", "Enhancement",array('enFull','enStructure','enNone'));

registerPropertyValues("MTextArea", "Theme", array("MobileTheme"));
registerPropertyValues("MTextArea", "Enhancement",array('enFull','enStructure','enNone'));

registerPropertyValues("MCollapsible", "Theme", array("MobileTheme"));
registerBooleanProperty("MCollapsible", "IsCollapsed");
registerPropertyValues("MCollapsible", "Enhancement",array('enFull','enStructure'));


registerPropertyValues("MButton", "Theme", array("MobileTheme"));
registerPropertyValues("MButton", "SystemIcon", array('siArrowL', 'siArrowR', 'siArrowU', 'siArrowD', 'siDelete', 'siPlus', 'siMinus', 'siCheck', 'siGear', 'siRefresh', 'siForward', 'siBack', 'siGrid', 'siStar', 'siAlert', 'siInfo', 'siSearch', 'siHome'));
registerPropertyValues("MButton", "IconPos", array('ipTop', 'ipBottom', 'ipLeft', 'ipRight'));
registerPropertyEditor("MButton", "Icon", "TImagePropertyEditor", "native");
registerPropertyValues("MButton", "Enhancement",array('enFull','enStructure','enNone'));
registerBooleanProperty("MButton", "RoundedCorners");
registerBooleanProperty("MButton", "IconShadow");
registerBooleanProperty("MButton", "Shadow");

registerPropertyEditor("MobileTheme", "CustomTheme", "TFilenamePropertyEditor", "native");
registerPropertyValues("MobileTheme", "Theme", array("thBasic", "thCustom"));
registerPropertyValues("MobileTheme", "ColorVariation", array("cvHigh", "cvMedium", "cvMedium2", "cvBasic", "cvAccent","cvCustom"));

registerPropertyValues("MLink", "Theme", array("MobileTheme"));
registerPropertyValues("MLink", "SystemIcon", array('siArrowL', 'siArrowR', 'siArrowU', 'siArrowD', 'siDelete', 'siPlus', 'siMinus', 'siCheck', 'siGear', 'siRefresh', 'siForward', 'siBack', 'siGrid', 'siStar', 'siAlert', 'siInfo', 'siSearch', 'siHome'));
registerPropertyValues("MLink", "IconPos", array('ipTop', 'ipBottom', 'ipLeft', 'ipRight','ipNoText'));
registerPropertyEditor("MLink", "Icon", "TImagePropertyEditor", "native");
registerPropertyValues("MLink", "Transition", array('trSlide', 'trSlideUp', 'trSlideDown', 'trPop', 'trFade', 'trFlip'));
registerBooleanProperty("MLink", "NoAjax");
registerBooleanProperty("MLink", "OpenDialog");
registerBooleanProperty("MLink", "IsBackButton");
registerPropertyValues("MLink", "Enhancement",array('enFull','enStructure'));

registerPropertyValues("MControl", "Theme", array("MobileTheme"));
registerPropertyValues("MControl", "Enhancement",array('enFull','enStructure'));

registerPropertyEditor("MToolBar", "Items", "TMToolBarPropertyEditor","native");

registerPropertyValues("MToggle", "Theme", array("MobileTheme"));
registerPropertyValues("MToggle", "TrackTheme", array("MobileTheme"));
registerPropertyValues("MToggle", "Enhancement",array('enFull','enStructure','enNone'));

registerPropertyValues("MRadioButton", "Theme", array("MobileTheme"));
registerPropertyValues("MRadioButton", "Enhancement",array('enFull','enStructure','enNone'));

registerPropertyValues("MCheckBox", "Theme", array("MobileTheme"));
registerPropertyValues("MCheckBox", "Enhancement",array('enFull','enStructure','enNone'));


registerPropertyValues("MComboBox", "Theme", array("MobileTheme"));
registerPropertyValues("MComboBox", "SystemIcon", array('siArrowL', 'siArrowR', 'siArrowU', 'siArrowD', 'siDelete', 'siPlus', 'siMinus', 'siCheck', 'siGear', 'siRefresh', 'siForward', 'siBack', 'siGrid', 'siStar', 'siAlert', 'siInfo', 'siSearch', 'siHome'));
registerPropertyValues("MComboBox", "IconPos", array('ipTop', 'ipBottom', 'ipLeft', 'ipRight'));
registerPropertyEditor("MComboBox", "Icon", "TImagePropertyEditor", "native");
registerPropertyEditor("MComboBox", "Items", "TMComboBoxPropertyEditor", "native");
registerBooleanProperty("MComboBox", "IsNative");
registerPropertyValues("MComboBox", "Enhancement",array('enFull','enStructure','enNone'));
registerBooleanProperty("MComboBox", "RoundedCorners");
registerBooleanProperty("MComboBox", "IconShadow");
registerBooleanProperty("MComboBox", "Shadow");

registerPropertyValues("MCollapsibleSet", "Theme", array("MobileTheme"));
registerPropertyEditor("MCollapsibleSet", "Panels", "TStringListPropertyEditor", "native");
registerPropertyValues("MCollapsibleSet", "Enhancement",array('enFull','enStructure'));

registerPropertyValues("MList", "DividerTheme", array("MobileTheme"));
registerPropertyValues("MList", "ExtraButtonTheme", array("MobileTheme"));
registerPropertyValues("MList", "CounterTheme", array("MobileTheme"));
registerPropertyValues("MList", "SystemIcon", array('siArrowL', 'siArrowR', 'siArrowU', 'siArrowD', 'siDelete', 'siPlus', 'siMinus', 'siCheck', 'siGear', 'siRefresh', 'siForward', 'siBack', 'siGrid', 'siStar', 'siAlert', 'siInfo', 'siSearch', 'siHome'));
registerPropertyEditor("MList", "Icon", "TImagePropertyEditor", "native");
registerPropertyValues("MList", "Type", array('tUnordered', 'tOrdered'));
registerBooleanProperty("MList", "IsFiltered");
registerBooleanProperty("MList", "IsWrapped");
registerPropertyEditor("MList", "Items", "TMListPropertyEditor", "native");


registerPropertyValues("CustomMInputGroup", "Theme", array("MobileTheme"));
registerPropertyValues("CustomMInputGroup", "Orientation", array('orVertical', 'orHorizontal'));
registerPropertyValues("CustomMInputGroup", "Enhancement",array('enFull','enStructure','enNone'));

registerPropertyValues("MCheckBoxGroup", "Theme", array("MobileTheme"));
registerPropertyValues("MCheckBoxGroup", "Orientation", array('orVertical', 'orHorizontal'));
registerPropertyValues("MCheckBoxGroup", "Enhancement",array('enFull','enStructure','enNone'));

registerPropertyValues("MIFrame", "Scrolling", array('fsAuto', 'fsYes','fsNo'));
registerBooleanProperty("MIFrame", "Borders");


registerBooleanProperty("MAccelerometer", "Active");

registerBooleanProperty("MCompass", "Active");

registerBooleanProperty("MGeolocation", "Active");
registerBooleanProperty("MGeolocation", "HighAccuracy");

registerBooleanProperty("MCamera", "AllowEdit");
registerPropertyValues("MCamera", "DestinationType", array('dtDataUrl', 'dtFileUri'));
registerPropertyValues("MCamera", "SourceType", array('stPhotoLibrary', 'stCamera','stSavedPhotoAlbum'));

registerBooleanProperty("MContacts", "Multiple");
registerPropertyEditor("MContacts", "Fields", "TStringListPropertyEditor", "native");

registerPropertyValues("MDBTransaction", "DB", array("MDB"));

registerPropertyValues("MFileSystem", "Type", array('fsPersistent', 'fsTemporary'));

registerPropertyEditor("MFileTransfer", "ExtraParameters", "TValueListPropertyEditor", "native");

registerPropertyValues("MCapture", "Type", array('mcAudio', 'mcVideo','mcImage'));

registerPropertyValues("MNotification", "Type", array('ntAlert','ntConfirm'));
registerPropertyEditor("MNotification", "ButtonLabels", "TStringListPropertyEditor", "native");

registerPropertyEditor("MConnection", "ConnectionTypes", "TValueListPropertyEditor", "native");

registerPropertyValues("MDevice", "Display", array('dsName','dsPhonegap','dsPlatform','dsUuid','dsVersion'));

//Change yourunit.inc.php to the php file which contains the component code
registerComponents("Mobile", array("MIFrame","MButton", "MPanel", "MCheckBoxGroup", "MRadioGroup", "MobileTheme", "MEdit", "MTextArea", "MSlider", "MLink", "MCollapsible", "MToolBar", "MToggle", "MRadioButton", "MCheckBox", "MComboBox", "MCollapsibleSet", "MList"), "jquerymobile/jmobile.inc.php");
registerComponents("Mobile Hardware", array("MAccelerometer","MCamera","MCompass","MGeolocation","MContacts","MPageEvents","MPageExtraEvents","MDB","MDBTransaction","MFileReader","MFileWriter","MFileEntry","MDirectoryEntry","MDirectoryReader","MFileSystem","MFileTransfer","MCapture","MNotification","MConnection","MDevice"), "jquerymobile/phonegap.inc.php");
registerAsset(array("MButton", "MPanel", "MCheckBoxGroup", "MRadioGroup", "MobileTheme", "MEdit", "MTextArea", "MSlider", "MLink", "MCollapsible", "MToolBar", "MToggle", "MRadioButton", "MCheckBox", "MComboBox", "MCollapsibleSet", "MList"), array("jquerymobile"));
?>