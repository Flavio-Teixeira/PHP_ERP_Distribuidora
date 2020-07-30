<?php
  require_once("rpcl/rpcl.inc.php");
  use_unit("designide.inc.php");

    setPackageTitle("jQuery SlideShow component");
  //Change this setting to the path where the icons for the components reside
  setIconPath("./icons");

  //Change yourunit.inc.php to the php file which contains the component code
  registerComponents("jQuery",array("SlideShow"),"slideshow/slideshow.inc.php");

  registerPropertyValues("SlideShow","ImageList",array('ImageList'));
  registerPropertyValues("SlideShow","ThumbImageList",array('ImageList'));
  registerPropertyEditor("SlideShow","OverlayBackgroundColor","TSamplePropertyEditor","native");
  registerPropertyEditor("SlideShow","BackgroundColor","TSamplePropertyEditor","native");
  registerPropertyEditor("SlideShow","BorderColor","TSamplePropertyEditor","native");
  registerPropertyEditor("SlideShow","BorderHoverColor","TSamplePropertyEditor","native");
  registerBooleanProperty("SlideShow","EnableEscapeButton");
  registerBooleanProperty("SlideShow","ShowNavigationArrows");
  registerBooleanProperty("SlideShow","ShowCloseButton");
  registerBooleanProperty("SlideShow","HideOnOverlayClick");
  registerBooleanProperty("SlideShow","HideOnContentClick");

  registerBooleanProperty("SlideShow","Opacity");
  registerBooleanProperty("SlideShow","Cyclic");
  registerBooleanProperty("SlideShow","OverlayShow");
  registerBooleanProperty("SlideShow","TitleShow");

  registerPropertyValues("SlideShow","TitlePosition",array('tpOutside','tpInside','tpOver'));
  registerPropertyValues("SlideShow","TransitionIn",array('trElastic','trFade','trNone'));
  registerPropertyValues("SlideShow","TransitionOut",array('trElastic','trFade','trNone'));
  registerPropertyValues("SlideShow","EasingIn",array('eaSwing','eaLinear'));
  registerPropertyValues("SlideShow","EasingOut",array('eaSwing','eaLinear'));

  registerPropertyEditor("SlideShow","ImageCaptions","TStringListPropertyEditor","native");
?>