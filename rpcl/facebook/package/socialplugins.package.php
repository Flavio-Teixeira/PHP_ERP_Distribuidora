<?php
  require_once("rpcl/rpcl.inc.php");
  use_unit("designide.inc.php");

    setPackageTitle("Facebook - Social Plugins");
  //Change this setting to the path where the icons for the components reside
  setIconPath("./icons");

  registerAsset(array("LikeButton","LikeBox","ActivityFeed","LiveStream"),array("facebook/sdk"));
  //Change yourunit.inc.php to the php file which contains the component code
  registerComponents("Facebook - Social Plugins",array("LikeButton","LikeBox","ActivityFeed","LiveStream"),"facebook/socialplugins.inc.php");
  registerBooleanProperty("LikeButton","ShowFaces");
  registerPropertyValues("LikeButton","Layout",array("lsStandard","lsButtonCount"));
  registerPropertyValues("LikeButton","Verb",array("vdRecommend","vdLike"));
  registerPropertyValues("LikeButton","ColorScheme",array("csLight","csDark"));
  registerPropertyValues("LikeButton","FontFacebook",array("","ftArial","ftLucidaGrande","ftSegoeUi","ftTahoma","ftTrebuchetMs","ftVerdana"));
  registerPropertyEditor("LikeButton","ImageSite","TImagePropertyEditor","native");

  registerBooleanProperty("LikeBox","Header");
  registerBooleanProperty("LikeBox","Stream");

  registerBooleanProperty("ActivityFeed","Header");
  registerBooleanProperty("ActivityFeed","Recommendations");
  registerPropertyValues("ActivityFeed","ColorScheme",array("csLight","csDark"));
  registerPropertyValues("ActivityFeed","FontFacebook",array("","ftArial","ftLucidaGrande","ftSegoeUi","ftTahoma","ftTrebuchetMs","ftVerdana"));
  registerPropertyEditor("ActivityFeed","BorderColor","TSamplePropertyEditor","native");

?>