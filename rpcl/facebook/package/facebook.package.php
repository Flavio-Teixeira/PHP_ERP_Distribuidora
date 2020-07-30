<?php
  require_once("rpcl/rpcl.inc.php");
  use_unit("designide.inc.php");

    setPackageTitle("Facebook Visual Development Components");
  //Change this setting to the path where the icons for the components reside
  setIconPath("./icons");

  registerAsset(array("FBApplication","FBPermission", "FBCaptcha","FBFriendSelector","FBBoard","FBBookmark","FBChatInvite","FBComments","FBFeed", "FBMultiFriendInput","FBSilverlight","FBSwf","FBMp3","FBIframe","FBFlv","FBShareButton","FBProfilePic","FBUserName"),array("facebook/sdk"));
  //Change yourunit.inc.php to the php file which contains the component code
  registerComponents("Facebook",
  array("FBApplication","FBPermission", "FBCaptcha","FBFriendSelector","FBBoard","FBBookmark","FBChatInvite","FBComments","FBFeed", "FBMultiFriendInput","FBSilverlight","FBSwf","FBMp3","FBIframe","FBFlv","FBShareButton","FBProfilePic","FBUserName"),"facebook/facebook.inc.php");

  registerPropertyValues('FBApplication','RenderMethod',array('rmIFrame','rmFBML'));
  registerBooleanProperty('FBApplication','UseCookies');
  registerPropertyEditor('FBApplication','Permissions','TStringListPropertyEditor','native');

  registerPropertyValues('FBControl','Permission',array('FBPermission'));

  registerBooleanProperty('FBCaptcha','ShowAlways');

  registerBooleanProperty('FBFriendSelector','IncludeMe');
  registerBooleanProperty('FBFriendSelector','IncludeLists');

  registerBooleanProperty('FBBoard','CanDelete');
  registerBooleanProperty('FBBoard','CanPost');
  registerBooleanProperty('FBBoard','CanMark');
  registerBooleanProperty('FBBoard','CanCreateTopic');

  registerPropertyValues('FBBookmark','StyleButton',array('sbOnFacebook','sbOffFacebook'));

  registerBooleanProperty('FBChatInvite','Condensed');

  registerBooleanProperty('FBProfilePic','Linked');
  registerBooleanProperty('FBProfilePic','AddLogo');
  registerBooleanProperty('FBProfilePic','UseWidth');
  registerBooleanProperty('FBProfilePic','UseHeight');
  registerPropertyValues('FBProfilePic','Size',array('psThumb','psSmall','psNormal','psSquare'));

  registerBooleanProperty('FBUserName','FirstNameOnly');
  registerBooleanProperty('FBUserName','Linked');
  registerBooleanProperty('FBUserName','LastNameOnly');
  registerBooleanProperty('FBUserName','Possesive');
  registerBooleanProperty('FBUserName','Reflexive');
  registerBooleanProperty('FBUserName','ShowNetwork');
  registerBooleanProperty('FBUserName','UseYou');
  registerBooleanProperty('FBUserName','Capitalize');


  registerBooleanProperty('FBComments','CanPost');
  registerBooleanProperty('FBComments','CanDelete');
  registerBooleanProperty('FBComments','ShowForm');
  registerBooleanProperty('FBComments','PublishFeed');
  registerBooleanProperty('FBComments','Simple');
  registerBooleanProperty('FBComments','Reverse');

  registerBooleanProperty('FBMultiFriendInput','IncludeMe');
  registerBooleanProperty('FBMultiFriendInput','PrefillLocked');
  registerBooleanProperty('FBMultiFriendInput','NameArrayUsers');
  registerPropertyEditor('FBMultiFriendInput','BorderColor','TSamplePropertyEditor','native');

  registerPropertyEditor('FBSilverlight','SwfBgColor','TSamplePropertyEditor','native');

  registerPropertyEditor('FBSwf','SwfBgColor','TSamplePropertyEditor','native');
  registerBooleanProperty('FBSwf','WaitForClick');
  registerBooleanProperty('FBSwf','Loop');
  registerPropertyValues('FBSwf','Salign',array('fbaTop','fbaBottom','fbaLeft','fbaRight','fbaTopLeft','fbaTopRight','fbaBottomLeft','fbaBottomRight'));
  registerPropertyValues('FBSwf','Scale',array('fbsShowAll','fbsNoBorder','fbsExactFit'));
  registerPropertyValues('FBSwf','Align',array('fbaLeft','fbaRight','fbaCenter'));
  registerPropertyValues('FBSwf','WMode',array('fbwTransparent','fbwOpaque','fbwWindows'));

  registerBooleanProperty('FBIframe','SmartSize');
  registerBooleanProperty('FBIframe','Resizable');
  registerBooleanProperty('FBIframe','IncludeFBSig');
  registerPropertyValues('FBIframe','Scrolling',array('fisYes','fisNo','fisAuto'));

  registerPropertyValues('FBFlv','Align',array('fbaLeft','fbaRight','fbaTop','fbaBottom'));
  registerPropertyValues('FBFlv','Salign',array('fbaLeft','fbaRight','fbaTop','fbaBottom'));
  registerPropertyValues('FBFlv','Scale',array('fbsShowAll','fbsNoBorder','fbsExactFit'));
  registerPropertyEditor('FBFlv','Color','TSamplePropertyEditor','native');

  registerPropertyValues('FBShareButton','Type',array('fsbBoxCount','fsbButtonCount','fsbButton','fsbIcon','fsbIconLink'));
  registerPropertyValues('FBShareButton','Class',array('sbcUrl','sbcMeta'));

?>