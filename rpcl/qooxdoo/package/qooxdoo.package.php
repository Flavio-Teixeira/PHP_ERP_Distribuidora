<?php
require_once("rpcl/rpcl.inc.php");
use_unit("designide.inc.php");

setPackageTitle("qooxdoo components");
//Change this setting to the path where the icons for the components reside
setIconPath("./icons");

//Change yourunit.inc.php to the php file which contains the component code
registerComponents("Standard - qooxdoo", array("QMainMenu", "QPopupMenu"), 'qooxdoo/menus.inc.php');

registerComponents("Standard - qooxdoo", array("QLabel", "QEdit", "QMemo", "QButton", "QCheckBox",
                                               "QRadioButton", "QListBox", "QComboBox", "QScrollBar",
                                               "QGroupBox"), "qooxdoo/stdctrls.inc.php");

registerComponents("Standard - qooxdoo", array("QRadioGroup"), "qooxdoo/extctrls.inc.php");
registerComponents("Standard - qooxdoo", array("QActionList"), "qooxdoo/actnlist.inc.php");

//registerComponents("Additional - qooxdoo", array("QBitBtn", "QSpeedButton"), "qooxdoo/buttons.inc.php");

registerComponents("Additional - qooxdoo", array("QImage"), "qooxdoo/extctrls.inc.php");

registerComponents("Advanced - qooxdoo", array("QPageControl", "QRichEdit",
                                               "QDateTimePicker", "QMonthCalendar",
                                               "QTreeView",
                                               // "QPageScroller",
                                               "QSlider", "QSpinEdit",
                                               "QIFrame", "QColorSelector", "QWindow", "QListView"
                                               //, "QToolBar"
                                               ), "qooxdoo/comctrls.inc.php");

registerComponents("Advanced - qooxdoo", array("QDBGrid"), "qooxdoo/dbgrids.inc.php");


registerPropertyValues("QPageControl","TabPosition",array('tpTop','tpBottom'));
registerPropertyEditor("QPageControl","Tabs","TStringListPropertyEditor","native");


registerPropertyValues("QButton", "Style", array('bsCommandLink', 'bsPushButton', 'bsSplitButton'));
registerPropertyValues("QButton", "Images", array('ImageList'));
registerPropertyValues("QActionList", "Images", array('ImageList'));
registerBooleanProperty("QFocusControl", "TabStop");
registerPropertyValues("QControl", "Action", array('QActionList::Actions'));
registerPropertyValues("QControl", "PopupMenu", array('QPopupMenu'));

registerPropertyValues("QMainMenu","Images",array('ImageList'));
registerPropertyValues("QPopupMenu","Images",array('ImageList'));

registerPropertyValues("QCustomTreeView", "ImageList", array('ImageList'));
registerBooleanProperty("QCustomTreeView", "ShowRoot");
registerBooleanProperty("QCustomTreeView", "ShowLines");
registerBooleanProperty("QCustomTreeView", "MultiSelect");
registerBooleanProperty("QCustomTreeView", "AutoExpand");

registerPropertyEditor("QCustomColorSelector", "Value", "TSamplePropertyEditor", "native");
registerPropertyValues("QCustomMonthCalendar", "Month", array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"));

registerPropertyValues("QCustomSlider", "Orientation", array("trHorizontal", "trVertical"));
registerBooleanProperty("QCustomSpinEdit", "EditorEnabled");

registerBooleanProperty("QCustomWindow", "Modal");
registerBooleanProperty("QCustomWindow", "IsVisible");
registerBooleanProperty("QCustomWindow", "ShowStatusBar");

registerBooleanProperty("QCustomWindow", "BorderIcons.biMaximize");
registerBooleanProperty("QCustomWindow", "BorderIcons.biMinimize");
registerBooleanProperty("QCustomWindow", "BorderIcons.biClose");

registerBooleanProperty("QCustomWindow", "Movable");
registerBooleanProperty("QCustomWindow", "Resizable");

registerBooleanProperty("QCustomImage", "Stretch");
registerPropertyEditor("QCustomImage", "ImageSource", "TImagePropertyEditor", "native");

registerBooleanProperty("QCustomEdit", "ReadOnly");
registerPropertyValues("QCustomEdit", "TextAlign", array("tnCenter", "tnLeftJustify", "tnRightJustify"));
registerBooleanProperty("QCustomEdit", "LiveUpdate");

registerBooleanProperty("QCustomMemo", "ReadOnly");
registerPropertyValues("QCustomMemo", "TextAlign", array("tnCenter", "tnLeftJustify", "tnRightJustify"));
registerBooleanProperty("QCustomMemo", "LiveUpdate");
registerBooleanProperty("QCustomMemo", "WordWrap");
registerPropertyEditor("QCustomMemo", "Lines","TStringListPropertyEditor","native");

registerBooleanProperty("QCustomCheckbox", "Checked");

registerBooleanProperty("QCustomRadioButton", "Checked");

registerPropertyEditor("QCustomListControl","Items","TValueListPropertyEditor","native");

registerBooleanProperty("QCustomListBox", "MultiSelect");

registerPropertyValues("QCustomScrollBar", "Kind", array("sbHorizontal", "sbVertical"));

registerPropertyEditor("QCustomRadioGroup", "Items", "TStringListPropertyEditor", "native");

registerPropertyEditor("QCustomListView","Columns","TStringListPropertyEditor","native");
registerPropertyEditor("QCustomListView","Items","TItemsPropertyEditor","native");
registerBooleanProperty("QCustomListView", "SortAscending");
registerPropertyValues("QCustomListView", "SelectionType", array("selNone", "selSingle", "selOneInterval", "selMultiInterval"));
registerPropertyValues("QCustomListView", "ImageList", array('ImageList'));

registerPropertyValues("QCustomToolBar", "ImageList", array('ImageList'));
registerBooleanProperty("QCustomToolBar", "ShowCaptions");

registerBooleanProperty("QCustomDBGrid", "ShowStatusBar");
registerBooleanProperty("QCustomDBGrid", "ReadOnly");

registerBooleanProperty("QCustomEdit", "IsPassword");

registerPropertyEditor("QRichEdit","Lines","TStringListPropertyEditor","native");
registerBooleanProperty("QRichEdit","AsSpecialChars");
registerBooleanProperty("QRichEdit","FilterInput");
registerBooleanProperty("CustomMemo","FilterInput");

registerDropDatasource(array("QDBGrid"));


?>