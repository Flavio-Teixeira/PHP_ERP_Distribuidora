<?php
use_unit("forms.inc.php");
use_unit('jquerymobile/jmobile.common.inc.php');

/**
 * This class defines the class MPage that will create the appropiate headers for a jquerymobile page
 *
 *
 */
class CustomMPage extends CustomForm
{
   protected $_theme = "";
   protected $_loadingmessage = "Loading";
   protected $_showloadingmessage = 1;
   protected $_autoinitialize = 1;
   protected $_defaulttransition = "trSlide";
   protected $_isphonegapenabled = 0;
   protected $_pageloaderrormessage = "Error Loading Page";
   protected $_viewportscale=100;
   protected $_cssfile="ccsBasic";
   protected $_customcssfile="";
   protected $_subpageurlkey="ui-page";
   protected $_activepageclass="ui-page-active";
   protected $_activebtnclass="ui-btn-active";
   protected $_minscrollback=150;
   protected $_touchoverflowenabled=1;

   /**
   * Enable smoother page transitions and true fixed toolbars in devices that support both the overflow: and overflow-scrolling: touch; CSS properties.
   */
   function readTouchOverflowEnabled() { return $this->_touchoverflowenabled; }
   function writeTouchOverflowEnabled($value) { $this->_touchoverflowenabled=$value; }
   function defaultTouchOverflowEnabled() { return 1; }

   /**
   * Minimum scroll distance that will be remembered when returning to a page.
   */
   function readMinScrollBack() { return $this->_minscrollback; }
   function writeMinScrollBack($value) { $this->_minscrollback=$value; }
   function defaultMinScrollBack() { return 150; }

   /**
   * The class used for "active" button state, from CSS framework.
   */
   function readActiveBtnClass() { return $this->_activebtnclass; }
   function writeActiveBtnClass($value) { $this->_activebtnclass=$value; }
   function defaultActiveBtnClass() { return "ui-btn-active"; }

   /**
   * The class assigned to page currently in view, and during transitions
   */
   function readActivePageClass() { return $this->_activepageclass; }
   function writeActivePageClass($value) { $this->_activepageclass=$value; }
   function defaultActivePageClass() { return "ui-page-active"; }

   /**
   * The url parameter used for referencing widget-generated sub-pages
   */
   function readSubPageUrlKey() { return $this->_subpageurlkey; }
   function writeSubPageUrlKey($value) { $this->_subpageurlkey=$value; }
   function defaultSubPageUrlKey() { return "ui-page"; }

   /*
   * Select a custom css file
   */
   function readCustomCssFile() { return $this->_customcssfile; }
   function writeCustomCssFile($value) { $this->_customcssfile=$value; }
   function defaultCustomCssFile() { return ""; }

   /**
   * choose a jquerymobile css File to load
   */
   function readCssFile() { return $this->_cssfile; }
   function writeCssFile($value) { $this->_cssfile=$value; }
   function defaultCssFile() { return "ccsBasic"; }


   /**
   * Indicates the viewport's scale of the page for mobile device's browsers and apps
   * Ranges from 0 to 100
   */
   function readViewportScale() { return $this->_viewportscale; }
   function writeViewportScale($value) { $this->_viewportscale=$value; }
   function defaultViewportScale() { return 100; }

   /**
    * Displays the message displayed when a page fails to load
    */
   function readPageLoadErrorMessage()    {return $this->_pageloaderrormessage;}
   function writePageLoadErrorMessage($value)    {$this->_pageloaderrormessage = $value;}
   function defaultPageLoadErrorMessage()    {return "Error Loading Page";}

   /**
    * Indicates if the app is going to make Ajax calls from a PhoneGap Application
    */
   function readisPhoneGapEnabled()    {return $this->_isphonegapenabled;}
   function writeisPhoneGapEnabled($value)    {$this->_isphonegapenabled = $value;}
   function defaultisPhoneGapEnabled()    {return 0;}

   /**
    * Indicates the default transition to use when loading any page
    */
   function readDefaultTransition()    {return $this->_defaulttransition;}
   function writeDefaultTransition($value)    {$this->_defaulttransition = $value;}
   function defaultDefaultTransition()    {return "trSlide";}

   /**
    * Is set to true the page will not be initialized automatically and will wait for the
    * jQuery.mobile.initializePage();
    * function to get initialized
    */
   function readAutoInitialize()    {return $this->_autoinitialize;}
   function writeAutoInitialize($value)    {$this->_autoinitialize = $value;}
   function defaultAutoInitialize()    {return 1;}

   /**
    * Set it to FALSE if you don't want to dispaly the Loading message
    */
   function readShowLoadingMessage()    {return $this->_showloadingmessage;}
   function writeShowLoadingMessage($value)    {$this->_showloadingmessage = $value;}
   function defaultShowLoadingMessage()    {return 1;}

   /**
    * Change the message displayed when a new page is loading
    */
   function readLoadingMessage()    {return $this->_loadingmessage;}
   function writeLoadingMessage($value)    {$this->_loadingmessage = $value;}
   function defaultLoadingMessage()    {return "Loading";}

   protected $_onmobileinit = "";
   protected $_onpagebeforeshow = "";
   protected $_onpagebeforehide = "";
   protected $_onpageshow = "";
   protected $_onpagehide = "";
   protected $_onpagebeforecreate = "";
   protected $_onpagecreate = "";
   protected $_onpageprecreate="";

   protected $_jsonmobileinit = "";
   protected $_jsonpagebeforeshow = "";
   protected $_jsonpagebeforehide = "";
   protected $_jsonpageshow = "";
   protected $_jsonpagehide = "";
   protected $_jsonpagebeforecreate = "";
   protected $_jsonpagecreate = "";
   protected $_jsonready = "";
   protected $_jsonajaxcallerror="";
   protected $_jsonorientationchange="";
   protected $_jsonpageprecreate="";
   protected $_jsonpagebeforeload="";
   protected $_jsonpageload="";
   protected $_jsonpageloadfailed="";
   protected $_jsonpagebeforechange="";
   protected $_jsonpagechange="";
   protected $_jsonpagechangefailed="";
   protected $_jsonpageremove="";
   protected $_jsonscrollstart="";
   protected $_jsonscrollstop="";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";
   protected $_jsonvmousecancel = "";
   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";

   /**
    * Normalized event for handling touch or mouse mousecancel events
    */
   function readJsOnVMouseCancel()    {return $this->_jsonvmousecancel;}
   function writeJsOnVMouseCancel($value)    {$this->_jsonvmousecancel = $value;}
   function defaultJsOnVMouseCancel()    {return "";}

   /**
    * Normalized event for handling touchend or mouse click events. On touch devices, this event is dispatched *AFTER* vmouseup.
    */
   function readJsOnVClick()    {return $this->_jsonvclick;}
   function writeJsOnVClick($value)    {$this->_jsonvclick = $value;}
   function defaultJsOnVClick()    {return "";}

   /**
    * Normalized event for handling touchend or mouseup events
    */
   function readJsOnVMouseUp()    {return $this->_jsonvmouseup;}
   function writeJsOnVMouseUp($value)    {$this->_jsonvmouseup = $value;}
   function defaultJsOnVMouseUp()    {return "";}

   /**
    * Normalized event for handling touchmove or mousemove events
    */
   function readJsOnVMouseMove()    {return $this->_jsonvmousemove;}
   function writeJsOnVMouseMove($value)    {$this->_jsonvmousemove = $value;}
   function defaultJsOnVMouseMove()    {return "";}

   /**
    *  Normalized event for handling touchstart or mousedown events
    */
   function readJsOnVMouseDown()    {return $this->_jsonvmousedown;}
   function writeJsOnVMouseDown($value)    {$this->_jsonvmousedown = $value;}
   function defaultJsOnVMouseDown()    {return "";}

   /**
    * Normalized event for handling touch or mouseover events
    */
   function readJsOnVMouseOver()    {return $this->_jsonvmouseover;}
   function writeJsOnVMouseOver($value)    {$this->_jsonvmouseover = $value;}
   function defaultJsOnVMouseOver()    {return "";}

   /**
    * Triggers when a swipe event occurred moving in the right direction.
    */
   function readJsOnSwipeRight()    {return $this->_jsonswiperight;}
   function writeJsOnSwipeRight($value)    {$this->_jsonswiperight = $value;}
   function defaultJsOnSwipeRight()    {return "";}

   /**
    * Triggers when a swipe event occurred moving in the left direction.
    */
   function readJsOnSwipeLeft()    {return $this->_jsonswipeleft;}
   function writeJsOnSwipeLeft($value)    {$this->_jsonswipeleft = $value;}
   function defaultJsOnSwipeLeft()    {return "";}

   /**
    * Triggers when a horizontal drag of 30px or more
    */
   function readJsOnSwipe()    {return $this->_jsonswipe;}
   function writeJsOnSwipe($value)    {$this->_jsonswipe = $value;}
   function defaultJsOnSwipe()    {return "";}

   /**
    * Triggers after a held complete touch event (close to one second).
    */
   function readJsOnTapHold()    {return $this->_jsontaphold;}
   function writeJsOnTapHold($value)    {$this->_jsontaphold = $value;}
   function defaultJsOnTapHold()    {return "";}

   /**
    * Triggers after a quick, complete touch event.
    */
   function readjsOnTap()    {return $this->_jsontap;}
   function writejsOnTap($value)    {$this->_jsontap = $value;}
   function defaultjsOnTap()    {return "";}
   /**
   * Triggers when a scroll finishes.
   */
   function readJsOnScrollStop() { return $this->_jsonscrollstop; }
   function writeJsOnScrollStop($value) { $this->_jsonscrollstop=$value; }
   function defaultJsOnScrollStop() { return ""; }

   /**
   * Triggers when a scroll begins.
   */
   function readJsOnScrollStart() { return $this->_jsonscrollstart; }
   function writeJsOnScrollStart($value) { $this->_jsonscrollstart=$value; }
   function defaultJsOnScrollStart() { return ""; }

   /**
   * This event is triggered just before the framework attempts to remove an external page from the DOM.
   */
   function readJsOnPageRemove() { return $this->_jsonpageremove; }
   function writeJsOnPageRemove($value) { $this->_jsonpageremove=$value; }
   function defaultJsOnPageRemove() { return ""; }

   /**
   * This event is triggered when the changePage() request fails to load the page.
   */
   function readJsOnPageChangeFailed() { return $this->_jsonpagechangefailed; }
   function writeJsOnPageChangeFailed($value) { $this->_jsonpagechangefailed=$value; }
   function defaultJsOnPageChangeFailed() { return ""; }

   /**
   * This event is triggered after the changePage() request has finished
   * loading the page into the DOM and all page transition animations have completed.
   */
   function readJsOnPageChange() { return $this->_jsonpagechange; }
   function writeJsOnPageChange($value) { $this->_jsonpagechange=$value; }
   function defaultJsOnPageChange() { return ""; }

   /**
   * This event is triggered prior to any page loading or transition.
   */
   function readJsOnPageBeforeChange() { return $this->_jsonpagebeforechange; }
   function writeJsOnPageBeforeChange($value) { $this->_jsonpagebeforechange=$value; }
   function defaultJsOnPageBeforeChange() { return ""; }

   /**
   * Triggered if the page load request failed.
   */
   function readJsOnPageLoadFailed() { return $this->_jsonpageloadfailed; }
   function writeJsOnPageLoadFailed($value) { $this->_jsonpageloadfailed=$value; }
   function defaultJsOnPageLoadFailed() { return ""; }

   /**
   * Triggered after the page is successfully loaded and inserted into the DOM.
   */
   function readJsOnPageLoad() { return $this->_jsonpageload; }
   function writeJsOnPageLoad($value) { $this->_jsonpageload=$value; }
   function defaultJsOnPageLoad() { return ""; }

   /**
   * Triggered before any load request is made.
   */
   function readJsOnPageBeforeLoad() { return $this->_jsonpagebeforeload; }
   function writeJsOnPageBeforeLoad($value) { $this->_jsonpagebeforeload=$value; }
   function defaultJsOnPageBeforeLoad() { return ""; }

   /**
    * Fired when the document is ready and all the DOM elements are loaded
    */

   function readJsOnReady()    {return $this->_jsonready;}
   function writeJsOnReady($value)    {$this->_jsonready = $value;}
   function defaultJsOnReady()    {return "";}

   /**
    * Select a MobileTheme component to indicate the color variation.
    *
    * MobileTheme components indicate the color variation of a control.
    * Different controls asigned to the same MobileTheme will use the same color variation when rendered.
    *
    * @see MobileTheme
    *
    * @return object returns the MobileTheme assigned
    */
   function readTheme()    {return $this->_theme;}
   function writeTheme($val)    {$this->_theme = $this->fixupProperty($val);}
   function defautlTheme()    {return "";}

   function handleUndefinedProperty($propname, $propvalue)
   {
      //Do nothing, so no error is raised
   }

   // PHP events

   /**
   * Event fired before pagecreate fires.
   */
   function readOnPagePreCreate() { return $this->_onpageprecreate; }
   function writeOnPagePreCreate($value) { $this->_onpageprecreate=$value; }
   function defaultOnPagePreCreate() { return ""; }

   /**
    * Fired before jqueryMoblie gets loaded
    */
   function readOnMobileInit()    {return $this->_onmobileinit;}
   function writeOnMobileInit($value)    {$this->_onmobileinit = $value;}
   function defaultOnMobileInit()    {return "";}

   /**
    * Fired on the page being shown, before its transition begins.
    */
   function readOnPageBeforeShow()    {return $this->_onpagebeforeshow;}
   function writeOnPageBeforeShow($value)    {$this->_onpagebeforeshow = $value;}
   function defaultOnPageBeforeShow()    {return "";}

   /**
    * Fired on the page being hidden, before its transition begins.
    */
   function readOnPageBeforeHide()    {return $this->_onpagebeforehide;}
   function writeOnPageBeforeHide($value)    {$this->_onpagebeforehide = $value;}
   function defaultOnPageBeforeHide()    {return "";}

   /**
    * Fired on the page being shown, after its transition completes.
    */
   function readOnPageShow()    {return $this->_onpageshow;}
   function writeOnPageShow($value)    {$this->_onpageshow = $value;}
   function defaultOnPageShow()    {return "";}

   /**
    * Fired on the page being hidden, after its transition completes.
    */
   function readOnPageHide()    {return $this->_onpagehide;}
   function writeOnPageHide($value)    {$this->_onpagehide = $value;}
   function defaultOnPageHide()    {return "";}

   /**
    * Fired on the page being initialized, before initialization occurs.
    */
   function readOnPageBeforeCreate()    {return $this->_onpagebeforecreate;}
   function writeOnPageBeforeCreate($value)    {$this->_onpagebeforecreate = $value;}
   function defaultOnPageBeforeCreate()    {return "";}

   /**
    * Fired on the page being initialized, after initialization occurs.
    */
   function readOnPageCreate()    {return $this->_onpagecreate;}
   function writeOnPageCreate($value)    {$this->_onpagecreate = $value;}
   function defaultOnPageCreate()    {return "";}

   //js events

   /**
   * Event fired before pagecreate fires, before elements get enhanced.
   */
   function readJsOnPagePreCreate() { return $this->_jsonpageprecreate; }
   function writeJsOnPagePreCreate($value) { $this->_jsonpageprecreate=$value; }
   function defaultJsOnPagePreCreate() { return ""; }

   /**
   * Fired when the device's orientation changes.
   */

   function readJsOnOrientationChange() { return $this->_jsonorientationchange; }
   function writeJsOnOrientationChange($value) { $this->_jsonorientationchange=$value; }
   function defaultJsOnOrientationChange() { return ""; }

  /**
  * Fired when an Ajax error occurs
  */
   function readJsOnAjaxCallError() { return $this->_jsonajaxcallerror; }
   function writeJsOnAjaxCallError($value) { $this->_jsonajaxcallerror=$value; }
   function defaultJsOnAjaxCallError() { return ""; }

   /**
    * Fired before jqueryMoblie gets loaded
    */
   function readJsOnMobileInit()    {return $this->_jsonmobileinit;}
   function writeJsOnMobileInit($value)    {$this->_jsonmobileinit = $value;}
   function defaultJsOnMobileInit()    {return "";}

   /**
    * Fired on the page being shown, before its transition begins.
    */
   function readJsOnPageBeforeShow()    {return $this->_jsonpagebeforeshow;}
   function writeJsOnPageBeforeShow($value)    {$this->_jsonpagebeforeshow = $value;}
   function defaultJsOnPageBeforeShow()    {return "";}

   /**
    * Fired on the page being hidden, before its transition begins.
    */
   function readJsOnPageBeforeHide()    {return $this->_jsonpagebeforehide;}
   function writeJsOnPageBeforeHide($value)    {$this->_jsonpagebeforehide = $value;}
   function defaultJsOnPageBeforeHide()    {return "";}

   /**
    * Fired on the page being shown, after its transition completes.
    */
   function readJsOnPageShow()    {return $this->_jsonpageshow;}
   function writeJsOnPageShow($value)    {$this->_jsonpageshow = $value;}
   function defaultJsOnPageShow()    {return "";}

   /**
    * Fired on the page being hidden, after its transition completes.
    */
   function readJsOnPageHide()    {return $this->_jsonpagehide;}
   function writeJsOnPageHide($value)    {$this->_jsonpagehide = $value;}
   function defaultJsOnPageHide()    {return "";}

   /**
    * Fired on the page being initialized, before initialization occurs.
    */
   function readJsOnPageBeforeCreate()    {return $this->_jsonpagebeforecreate;}
   function writeJsOnPageBeforeCreate($value)    {$this->_jsonpagebeforecreate = $value;}
   function defaultJsOnPageBeforeCreate()    {return "";}

   /**
    * Fired on the page being initialized, after initialization occurs,jquery scripts may be started here.
    */
   function readJsOnPageCreate()    {return $this->_jsonpagecreate;}
   function writeJsOnPageCreate($value)    {$this->_jsonpagecreate = $value;}
   function defaultJsOnPageCreate()    {return "";}

   function __construct($aowner = null)
   {
      parent::__construct($aowner);

      $this->_doctype = "dtXHTML_1_0_Strict";
   }

   /**
    * On init we check if any PHP event has been set and we fire it.
    * PHP events binded to MPage events will be executed using an Ajax call to self
    * so they don´t make a submit event nor refresh or update visilbe content
    * They are ideal to update databases or perform server side process
    */
   function preinit()
   {
      parent::preinit();

      $key = md5($this->owner->Name . $this->Name . $this->Left . $this->Top . $this->Width . $this->Height);
      $opt = $this->input->opt;
      $event = $this->input->event;

      //check for the id param to update the dataset if any
      if((is_object($opt)) && ($opt->asString() == $key))
      {
         if(is_object($event))
         {
            $this->callEvent($event->asString(), array());
            exit;
         }
      }

      /**
      * Check for the header_file param. Depending on its value we'll ouput the CSS file or the JS file of the MPage.
      * In the Javascript file we include ALL the JS of all controls included on MPage.
      * In the CSS file we include ALL the CSS of all the controls included on MPage
      */
      $header_file = $this->input->header_file;
      if(is_object($header_file))
      {
         switch($header_file->asString())
         {
            case "js":
               header("Content-type: application/javascript");
               $this->dumpJavascriptBlock();
               exit;
            case "css":
               header("Content-type: text/css");
               $this->dumpChildrenCSS();
               exit;
         }
      }

   }

   /**
    * If UseAjax is set to true and an Ajax call is made all conntrols included in the MPage
    * are rendered as a JSONP object and coded with Base64 so we don't include any illegal character on the JSONP Object
    */
   function processAjax()
   {
      $callback = $this->input->callback;

      if(is_object($callback))
      {

         reset($this->components->items);
         while(list($k, $v) = each($this->components->items))
         {
            if($v->inheritsFrom('Control'))
            {
               if($v->canShow())
               {
                  ob_start();
                  $v->dumpContents();
                  $output = ob_get_contents();
                  ob_end_clean();
                  if($this->_encoding!="Unicode (UTF-8)            |utf-8")
                    $output=utf8_encode($output);
                  $elements[]= "\"{$v->Name}_outer\":\"" . base64_encode($output) . "\"";
               }
            }
         }

         header('Access-Control-Allow-Origin: *');
         header("Content-type: application/json");
         echo "{";
         if(count($elements)>0)
          echo implode(",",$elements);
         echo "}";
         exit;
      }

   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);

      //we have to stablish the MOBILE_RPCL_PATH
      $rpclPath=RPCL_HTTP_PATH;
      if($this->_isphonegapenabled && $rpclPath{0}=="/")
         $rpclPath=substr($rpclPath,1);

      if(!defined('MOBILE_RPCL_PATH'))
        define('MOBILE_RPCL_PATH',$rpclPath);

   }

   function dumpHeaderJavascript($return_contents = false)
   {

      ob_start();

      if($this->_showloadingmessage == 0)
         $this->_loadingmessage = '';

      $scale=round($this->_viewportscale/100,1);
      echo "<meta name=\"viewport\" content=\"width={$this->_width},user-scalable=yes,initial-scale=$scale, minimum-scale=$scale, maximum-scale=$scale\">\n";
      echo "<script src=\"" . MOBILE_RPCL_PATH . "/jquerymobile/js/base64.js\"></script>\n";
      echo "<script src=\"" . MOBILE_RPCL_PATH . JQUERY_FILE . "\"></script>\n";
      echo "<script src=\"" . MOBILE_RPCL_PATH . JQUERY_MOBILE_FUNCTIONS . "\"></script>\n";
      echo "<link rel=\"stylesheet\" href=\"".MOBILE_RPCL_PATH.THEME_BASIC."\" />\n";
      if ($this->_cssfile=="cssCustom" && $this->_customcssfile!="")
        echo "<link rel=\"stylesheet\" href=\"$this->_customcssfile\" />\n";
      echo "<link rel=\"stylesheet\" href=\"$css\" />\n";
      echo "<script>\n";
               //the mobileinit script, to configure jquerymobile
                $this->dumpJSEvent($this->_jsonmobileinit);
                echo "jQuery(document).bind('mobileinit', function(){\n";
                echo "  jQuery.noConflict();\n";
                echo "  jQuery.extend(jQuery.mobile , {\n";
                echo "    loadingMessage: '$this->_loadingmessage',\n";
                echo "    pageLoadErrorMessage: '$this->_pageloaderrormessage',\n";
                echo "    autoInitialize: " . ($this->_autoinitialize == 1? "true": "false") . ",\n";
                echo "    defaultPageTransition: '" . transitionValue($this->_defaulttransition) . "',\n";
                echo "    subPageUrlKey: '$this->_subpageurlkey',\n";
                echo "    activePageClass: '$this->_activepageclass',\n";
                echo "    activeBtnClass: '$this->_activebtnclass',\n";
                echo "    minScrollBack: $this->_minscrollback,\n";
                echo "    touchOverflowEnabled:" . ($this->_touchoverflowenabled == 1? "true": "false") . " \n";
                echo "  });\n";
                echo "  jQuery.mobile.page.prototype.options.degradeInputs.range='text';\n";
                if($this->_jsonorientationchange !="")
                {
                  echo $this->_jsonmobileinit != ""? $this->_jsonmobileinit . "()\n": "";
                  echo "  jQuery(window).bind('orientationchange',function(){\n";
                  echo $this->_jsonorientationchange."();\n";
                  echo "  });\n";
                }
                echo "});";
      echo "</script>\n";
      echo "<script src=\"" . MOBILE_RPCL_PATH . JQUERY_MOBILE_FILE . "\"></script>\n";

      if($this->_isphonegapenabled)
      {
        if(!defined('PHONEGAP_JS'))
        {
          echo "<script src=\"" . MOBILE_RPCL_PATH . PHONEGAP_FILE . "\"></script>\n";
          define('PHONEGAP_JS', 1);
        }
        echo "<script src=\"" . MOBILE_RPCL_PATH . PHONEGAP_FUNCTIONS . "\"></script>\n";
      }

      $output .= ob_get_contents();
      ob_end_clean();

      if($return_contents)
         return $output;
      else
         echo $output;

   }

   /**
   * Dumps all the javasccript of MPage including its controls
   */
   function dumpJavascriptBlock()
   {
      //get the pageinit and phonegap deviceready events and functions from all components
      $data=$this->pageInit();

      //output phonegap init functions
      if($data['deviceready']!="")
      {
        echo $data['deviceready'];
        $data['content'].="if(typeof PhoneGap !== 'undefined' && PhoneGap.available)\n";
        $data['content'].=" {$this->_name}DeviceReady();\n";
        $data['content'].="else\n";
        $data['content'].= " document.addEventListener(\"deviceready\", {$this->_name}DeviceReady, false);\n";
      }

      //bind the pageinit event including the jquery of all components that need to be binded on pageinit
      $this->jqueryEvent('jsonpagecreate',$data['content']);

      //bind the rest
      $this->jqueryEvent('jsonpagebeforeshow');
      $this->jqueryEvent('jsonpagebeforehide');
      $this->jqueryEvent('jsonpageshow');
      $this->jqueryEvent('jsonpagehide');
      $this->jqueryEvent('jsonpagebeforecreate');
      $this->jqueryEvent('jsonorientationchange');
      $this->jqueryEvent('jsonajaxcallerror');
      $this->jqueryEvent('jsonready');
      $this->jqueryEvent('jsonpageprecreate');
      $this->jqueryEvent('jsonpagebeforeload');
      $this->jqueryEvent('jsonpageload');
      $this->jqueryEvent('jsonpageloadfailed');
      $this->jqueryEvent('jsonpagebeforechange');
      $this->jqueryEvent('jsonpagechange');
      $this->jqueryEvent('jsonpagechangefailed');
      $this->jqueryEvent('jsonpageremove');
      $this->jqueryEvent('jsonscrollstart');
      $this->jqueryEvent('jsonscrollstop');

      $this->jqueryEvent('jsontap');
      $this->jqueryEvent('jsontaphold');
      $this->jqueryEvent('jsonswipe');
      $this->jqueryEvent('jsonswipeleft');
      $this->jqueryEvent('jsonswiperight');
      $this->jqueryEvent('jsonvmouseover');
      $this->jqueryEvent('jsonvmousedown');
      $this->jqueryEvent('jsonvmousemove');
      $this->jqueryEvent('jsonvmouseup');
      $this->jqueryEvent('jsonvclick');
      $this->jqueryEvent('jsonvmousecancel');

      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);

      $this->dumpJSEvent($this->_jsonpagebeforeshow);
      $this->dumpJSEvent($this->_jsonpagebeforehide);
      $this->dumpJSEvent($this->_jsonpageshow);
      $this->dumpJSEvent($this->_jsonpagehide);
      $this->dumpJSEvent($this->_jsonpagebeforecreate);
      $this->dumpJSEvent($this->_jsonpagecreate);
      $this->dumpJSEvent($this->_jsonorientationchange);
      $this->dumpJSEvent($this->_jsonajaxcallerror);
      $this->dumpJSEvent($this->_jsonready);
      $this->dumpJSEvent($this->_jsonpageprecreate);
      $this->dumpJSEvent($this->_jsonpagebeforeload);
      $this->dumpJSEvent($this->_jsonpageload);
      $this->dumpJSEvent($this->_jsonpageloadfailed);
      $this->dumpJSEvent($this->_jsonpagebeforechange);
      $this->dumpJSEvent($this->_jsonpagechange);
      $this->dumpJSEvent($this->_jsonpagechangefailed);
      $this->dumpJSEvent($this->_jsonpageremove);
      $this->dumpJSEvent($this->_jsonscrollstart);
      $this->dumpJSEvent($this->_jsonscrollstop);

      //we dump the ajax call errror function

      if($this->_jsonajaxcallerror=="" && $this->_useajax==1)
      {
        echo " var {$this->Name}JSAjaxCallError=function(){
          jQuery(\"<div class='ui-loader ui-overlay-shadow ui-body-e ui-corner-all'><h1>\"+ jQuery.mobile.pageLoadErrorMessage +\"</h1></div>\")
						.css({ \"display\": \"block\", \"opacity\": 0.96, \"top\": jQuery(window).scrollTop() + 100 })
						.appendTo( jQuery.mobile.pageContainer )
						.delay( 800 )
						.fadeOut( 400, function(){
							jQuery(this).remove();
						});
        };\n ";
      }
      $this->dumpChildrenJavascript();
   }

   /**
   * Dumps the CSS content of all the controls included in MPage
   */
   function dumpChildrenCSS()
   {
      reset($this->components->items);
      while(list($k, $v) = each($this->components->items))
      {
        if(method_exists($v, 'dumpCSS'))
          $v->dumpCSS();
      }
   }

   /**
    * This function creates the code to handle all javascript MPage events
    * If there is a PHP event with the same name we create the code to make the pertinent Ajax call to process it.
    */
   function jqueryEvent($event,$extra="")
   {
      $phpEvent = substr($event, 2);
      $jqEvent = substr($event, 4);

      //change pagecreate event for init event (jquerymobile rc1)

      if($jqEvent=='pagecreate')
        $jqEvent='pageinit';
      if($jqEvent=='pageprecreate')
        $jqEvent='pagecreate';

      if((method_exists($this,"get{$phpEvent}") && $this->$phpEvent!="") || $this->$event!="" || $extra!="")
      {
        echo "jQuery('#{$this->_name}_page').bind('$jqEvent',function(event){\n";
        //if there is a js event we call it;
        if($this->$event != "")
          echo $this->$event . "(event);\n";

        if($extra != "")
          echo " $extra\n";

        //if there is a php event we'll call ajax to ejecute it
        if(method_exists($this,"get{$phpEvent}") && $this->$phpEvent!="")
        {
          $key = md5($this->owner->Name . $this->Name . $this->Left . $this->Top . $this->Width . $this->Height);

          if($this->_useajax)
            $self = $this->_useajaxuri != ""? $this->_useajaxuri: $_SERVER['PHP_SELF'];
          else
            $self = $_SERVER['PHP_SELF'];

          $url = $self . "?opt=$key&event=" . $phpEvent . "&time=" . time();
          echo "  jQuery.ajax({\n";
          echo "    url:'$url'\n";
          echo "  });\n";
        }

        echo "});\n";
      }
   }

   /**
   * Retrieves the jquery events and deviceready events that need to be binded on pageinit
   */
   function pageInit()
   {
      $output=array("content"=>"","deviceready"=>"");
      $deviceready=array(0=>"",1=>"");
      //if any children has javascript binded to every event we dump the code here
      reset($this->components->items);
      while(list($k, $v) = each($this->components->items))
      {
          if(($v->inheritsFrom('Control') && $v->canShow()) || !$v->inheritsFrom('Control'))
          {
            //calling all javascript include in pagecreate
            if(method_exists($v, 'pagecreate'))
              $output['content'].= $v->pagecreate();

            if(method_exists($v, 'ondeviceready'))
            {
              if($v->inheritsFrom('CustomMPageEvents'))
                $deviceready[1].= $v->ondeviceready();
              else
                $deviceready[0].= $v->ondeviceready();
            }
          }
      }

      if($deviceready[0]!="" || $deviceready[1]!="")
      {
        $output['deviceready'].= "var {$this->_name}DeviceReady=function(){\n";
        $output['deviceready'].= $deviceready[0];
        $output['deviceready'].= $deviceready[1];
        $output['deviceready'].= "};\n";
      }

      return $output;
   }

   function dumpChildrenHeaderCode()
   {
      parent::dumpChildrenHeaderCode();
      echo "<link rel=\"stylesheet\" href=\"" . MOBILE_RPCL_PATH . GENERAL_CSS . "\" />\n";
   }

   function dumpStartBody($style, $attributes)
   {
      //Get the theme string
      if(($this->ControlState & csDesigning) == csDesigning || $this->_theme == "")
         $theme = "";
      else
         $theme = $this->_theme->themeVal(1);

      // target has to be set to prevent jquerymobile to process forms with ajax when the action relies on the MPage itself
      if($this->_action == "")
         $this->_target = "_self";

      $this->_useajaxuri = $this->_useajaxuri != ""? $this->_useajaxuri: $_SERVER['PHP_SELF'];
      if($this->_useajax)
         $ajax = "ajax-url=\"$this->_useajaxuri\"";
      else
         $ajax = "";

      echo "<body $style $attributes>\n";
      echo "<div data-role=\"page\" $theme id=\"{$this->_name}_page\" $ajax >\n";
      /**
      *  JS and CSS files has to be linked inside the <div data-role='page'> tag so they are processed by jquerymobile
      *  when the page is loaded using Ajax.
      *  If it is a phonegap app and we are not loading dinamic contents using ajax, we load the static css and js files instead of the dinamic ones
      */
      if($this->_isphonegapenabled)
      {
          $css=str_replace(".php",".css",substr($_SERVER['PHP_SELF'],1));
          $js=str_replace(".php",".js",substr($_SERVER['PHP_SELF'],1));
      }
      else
      {
        $css=$_SERVER['PHP_SELF'] . "?header_file=css";
        $js=$_SERVER['PHP_SELF'] . "?header_file=js";
      }
      echo "<link rel=\"stylesheet\" href=\"$css\" />\n";
      echo "<script src=\"$js\"></script>\n";
   }

   function dumpEndBody()
   {
      echo "</div>\n";
      echo "</body>\n";
   }

}

/**
 * Container for mobile applications pages.
 *
 * @link wiki://MPage
 */
class MPage extends CustomMPage
{
   function getTouchOverflowEnabled() { return $this->readtouchoverflowenabled(); }
   function setTouchOverflowEnabled($value) { $this->writetouchoverflowenabled($value); }

   function getCssFile() { return $this->readcssfile(); }
   function setCssFile($value) { $this->writecssfile($value); }

   function getCustomCssFile() { return $this->readcustomcssfile(); }
   function setCustomCssFile($value) { $this->writecustomcssfile($value); }

   function getIsPhoneGapEnabled() { return $this->readisphonegapenabled(); }
   function setIsPhoneGapEnabled($value) { $this->writeisphonegapenabled($value); }

   function getjsOnLoad()    {return $this->readjsonload();}
   function setjsOnLoad($value)    {$this->writejsonload($value);}

   function getjsOnUnload()    {return $this->readjsonunload();}
   function setjsOnUnload($value)    {$this->writejsonunload($value);}

   function getLayout()    {return $this->readLayout();}
   function setLayout($value)    {$this->writeLayout($value);}

   function getIcon()    {return $this->readicon();}
   function setIcon($value)    {$this->writeicon($value);}

   function getFrameSpacing()    {return $this->readframespacing();}
   function setFrameSpacing($value)    {$this->writeframespacing($value);}

   function getFrameBorder()    {return $this->readframeborder();}
   function setFrameBorder($value)    {$this->writeframeborder($value);}

   function getBorderWidth()    {return $this->readborderwidth();}
   function setBorderWidth($value)    {$this->writeborderwidth($value);}

   function getEncoding()    {return $this->readencoding();}
   function setEncoding($value)    {$this->writeencoding($value);}

   function getDocType()    {return $this->readdoctype();}
   function setDocType($value)    {$this->writedoctype($value);}

   function readFormEncoding()    {return $this->readformencoding();}
   function writeFormEncoding($value)    {$this->writeformencoding($value);}

   function getAlignment()    {return $this->readAlignment();}
   function setAlignment($value)    {$this->writeAlignment($value);}

   function getColor()    {return $this->readColor();}
   function setColor($value)    {$this->writeColor($value);}

   function getShowHint()    {return $this->readShowHint();}
   function setShowHint($value)    {$this->writeShowHint($value);}

   function getVisible()    {return $this->readVisible();}
   function setVisible($value)    {$this->writeVisible($value);}

   function getCaption()    {return $this->readCaption();}
   function setCaption($value)    {$this->writeCaption($value);}

   function getFont()    {return $this->readFont();}
   function setFont($value)    {$this->writeFont($value);}

   function getBackground()    {return $this->readbackground();}
   function setBackground($value)    {$this->writebackground($value);}

   function getTemplateEngine()    {return $this->readtemplateengine();}
   function setTemplateEngine($value)    {$this->writetemplateengine($value);}

   function getAction()    {return $this->readaction();}
   function setAction($value)    {$this->writeaction($value);}

   function getTemplateFilename()    {return $this->readtemplatefilename();}
   function setTemplateFilename($value)    {$this->writetemplatefilename($value);}

   function getViewportScale() { return $this->readviewportscale(); }
   function setViewportScale($value) { $this->writeviewportscale($value); }

   function getUseAjax()    {return $this->readuseajax();}
   function setUseAjax($value)    {$this->writeuseajax($value);}

   function getUseAjaxUri()    {return $this->readuseajaxuri();}
   function setUseAjaxUri($value)    {$this->writeuseajaxuri($value);}

   function getLanguage()    {return $this->readlanguage();}
   function setLanguage($value)    {$this->getjsOnLoad($value);}

   function getCache()    {return $this->readcache();}
   function setCache($value)    {$this->writecache($value);}

   function getjsOnSubmit()    {return $this->readjsonsubmit();}
   function setjsOnSubmit($value)    {$this->writejsonsubmit($value);}

   function getjsOnReset()    {return $this->readjsonreset();}
   function setjsOnReset($value)    {$this->writejsonreset($value);}

   function getTarget()    {return $this->readtarget();}
   function setTarget($value)    {$this->writetarget($value);}

   function getOnTemplate()    {return $this->readontemplate();}
   function setOnTemplate($value)    {$this->writeontemplate($value);}

   function getOnBeforeAjaxProcess()    {return $this->readonbeforeajaxprocess();}
   function setOnBeforeAjaxProcess($value)    {$this->writeonbeforeajaxprocess($value);}

   function getOnAfterAjaxProcess()    {return $this->readonafterajaxprocess();}
   function setOnAfterAjaxProcess($value)    {$this->writeonafterajaxprocess($value);}

   function getDirectionality()    {return $this->readdirectionality();}
   function setDirectionality($value)    {$this->writedirectionality($value);}

   function getGenerateTable()    {return $this->readgeneratetable();}
   function setGenerateTable($value)    {$this->writegeneratetable($value);}

   function getTopMargin()    {return $this->readtopmargin();}
   function setTopMargin($value)    {$this->writetopmargin($value);}

   function getLeftMargin()    {return $this->readleftmargin();}
   function setLeftMargin($value)    {$this->writeleftmargin($value);}

   function getBottomMargin()    {return $this->readbottommargin();}
   function setBottomMargin($value)    {$this->writebottommargin($value);}

   function getRightMargin()    {return $this->readrightmargin();}
   function setRightMargin($value)    {$this->writerightmargin($value);}

   function getShowHeader()    {return $this->readshowheader();}
   function setShowHeader($value)    {$this->writeshowheader($value);}

   function getIsForm()    {return $this->readisform();}
   function setIsForm($value)    {$this->writeisform($value);}

   function getGenerateDocument()    {return $this->readgeneratedocument();}
   function setGenerateDocument($value)    {$this->writegeneratedocument($value);}

   function getIsMaster()    {return $this->readismaster();}
   function setIsMaster($value)    {$this->writeismaster($value);}

   function getShowFooter()    {return $this->readshowfooter();}
   function setShowFooter($value)    {$this->writeshowfooter($value);}

   function getOnBeforeShowHeader()    {return $this->readonbeforeshowheader();}
   function setOnBeforeShowHeader($value)    {$this->writeonbeforeshowheader($value);}

   function getOnAfterShowFooter()    {return $this->readonaftershowfooter();}
   function setOnAfterShowFooter($value)    {$this->writeonaftershowfooter($value);}

   function getOnShowHeader()    {return $this->readonshowheader();}
   function setOnShowHeader($value)    {$this->writeonshowheader($value);}

   function getOnStartBody()    {return $this->readonstartbody();}
   function setOnStartBody($value)    {$this->writeonstartbody($value);}

   function getOnCreate()    {return $this->readoncreate();}
   function setOnCreate($value)    {$this->writeoncreate($value);}

   function getTheme()    {return $this->readtheme();}
   function setTheme($value)    {$this->writetheme($value);}

   function getOnMobileInit()    {return $this->readonmobileinit();}
   function setOnMobileInit($value)    {$this->writeonmobileinit($value);}

   function getOnPageBeforeShow()    {return $this->readonpagebeforeshow();}
   function setOnPageBeforeShow($value)    {$this->writeonpagebeforeshow($value);}

   function getOnPageBeforeHide()    {return $this->readonpagebeforehide();}
   function setOnPageBeforeHide($value)    {$this->writeonpagebeforehide($value);}

   function getOnPageShow()    {return $this->readonpageshow();}
   function setOnPageShow($value)    {$this->writeonpageshow($value);}

   function getOnPageHide()    {return $this->readonpagehide();}
   function setOnPageHide($value)    {$this->writeonpagehide($value);}

   function getOnPageBeforeCreate()    {return $this->readonpagebeforecreate();}
   function setOnPageBeforeCreate($value)    {$this->writeonpagebeforecreate($value);}

   function getOnPagePreCreate() { return $this->readonpageprecreate(); }
   function setOnPagePreCreate($value) { $this->writeonpageprecreate($value); }

   function getOnPageCreate()    {return $this->readonpagecreate();}
   function setOnPageCreate($value)    {$this->writeonpagecreate($value);}

   function getjsOnMobileInit()    {return $this->readjsonmobileinit();}
   function setjsOnMobileInit($value)    {$this->writejsonmobileinit($value);}

   function getjsOnPageBeforeShow()    {return $this->readjsonpagebeforeshow();}
   function setjsOnPageBeforeShow($value)    {$this->writejsonpagebeforeshow($value);}

   function getjsOnPageBeforeHide()    {return $this->readjsonpagebeforehide();}
   function setjsOnPageBeforeHide($value)    {$this->writejsonpagebeforehide($value);}

   function getjsOnPageShow()    {return $this->readjsonpageshow();}
   function setjsOnPageShow($value)    {$this->writejsonpageshow($value);}

   function getjsOnPageHide()    {return $this->readjsonpagehide();}
   function setjsOnPageHide($value)    {$this->writejsonpagehide($value);}

   function getjsOnPageBeforeCreate()    {return $this->readjsonpagebeforecreate();}
   function setjsOnPageBeforeCreate($value)    {$this->writejsonpagebeforecreate($value);}

   function getjsOnPageCreate()    {return $this->readjsonpagecreate();}
   function setjsOnPageCreate($value)    {$this->writejsonpagecreate($value);}

   function getjsOnPagePreCreate() { return $this->readjsonpageprecreate(); }
   function setjsOnPagePreCreate($value) { $this->writejsonpageprecreate($value); }

   function getLoadingMessage()    {return $this->readloadingmessage();}
   function setLoadingMessage($value)    {$this->writeloadingmessage($value);}

   function getShowLoadingMessage()    {return $this->readshowloadingmessage();}
   function setShowLoadingMessage($value)    {$this->writeshowloadingmessage($value);}

   function getAutoInitialize()    {return $this->readautoinitialize();}
   function setAutoInitialize($value)    {$this->writeautoinitialize($value);}

   function getDefaultTransition()    {return $this->readdefaulttransition();}
   function setDefaultTransition($value)    {$this->writedefaulttransition($value);}

   function getPageLoadErrorMessage()    {return $this->readpageloaderrormessage();}
   function setPageLoadErrorMessage($value)    {$this->writepageloaderrormessage($value);}

   function getjsOnAjaxCallError() { return $this->readjsonajaxcallerror(); }
   function setjsOnAjaxCallError($value) { $this->writejsonajaxcallerror($value); }

   function getjsOnOrientationChange() { return $this->readjsonorientationchange(); }
   function setjsOnOrientationChange($value) { $this->writejsonorientationchange($value); }

   function getjsOnPageRemove() { return $this->readjsonpageremove(); }
   function setjsOnPageRemove($value) { $this->writejsonpageremove($value); }

   function getjsOnPageChangeFailed() { return $this->readjsonpagechangefailed(); }
   function setjsOnPageChangeFailed($value) { $this->writejsonpagechangefailed($value); }

   function getjsOnPageChange() { return $this->readjsonpagechange(); }
   function setjsOnPageChange($value) { $this->writejsonpagechange($value); }

   function getjsOnPageBeforeChange() { return $this->readjsonpagebeforechange(); }
   function setjsOnPageBeforeChange($value) { $this->writejsonpagebeforechange($value); }

   function getjsOnPageLoadFailed() { return $this->readjsonpageloadfailed(); }
   function setjsOnPageLoadFailed($value) { $this->writejsonpageloadfailed($value); }

   function getjsOnPageLoad() { return $this->readjsonpageload(); }
   function setjsOnPageLoad($value) { $this->writejsonpageload($value); }

   function getjsOnPageBeforeLoad() { return $this->readjsonpagebeforeload(); }
   function setjsOnPageBeforeLoad($value) { $this->writejsonpagebeforeload($value); }

   function getjsOnScrollStart() { return $this->readjsonscrollstart(); }
   function setjsOnScrollStart($value) { $this->writejsonscrollstart($value); }

   function getjsOnScrollStop() { return $this->readjsonscrollstop(); }
   function setjsOnScrollStop($value) { $this->writejsonscrollstop($value); }



   function getjsOnSwipeRight()    {return $this->readjsonswiperight();}
   function setjsOnSwipeRight($value)    {$this->writejsonswiperight($value);}

   function getjsOnSwipeLeft()    {return $this->readjsonswipeleft();}
   function setjsOnSwipeLeft($value)    {$this->writejsonswipeleft($value);}

   function getjsOnSwipe()    {return $this->readjsonswipe();}
   function setjsOnSwipe($value)    {$this->writejsonswipe($value);}

   function getjsOnTapHold()    {return $this->readjsontaphold();}
   function setjsOnTapHold($value)    {$this->writejsontaphold($value);}

   function getjsOnTap()    {return $this->readjsontap();}
   function setjsOnTap($value)    {$this->writejsontap($value);}
   function getjsOnVMouseOver()    {return $this->readjsonvmouseover();}
   function setjsOnVMouseOver($value)    {$this->writejsonvmouseover($value);}

   function getjsOnVMouseMove()    {return $this->readjsonvmousemove();}
   function setjsOnVMouseMove($value)    {$this->writejsonvmousemove($value);}

   function getjsOnVMouseDown()    {return $this->readjsonvmousedown();}
   function setjsOnVMouseDown($value)    {$this->writejsonvmousedown($value);}

   function getjsOnVClick()    {return $this->readjsonvclick();}
   function setjsOnVClick($value)    {$this->writejsonvclick($value);}

   function getjsOnVMouseCancel()    {return $this->readjsonvmousecancel();}
   function setjsOnVMouseCancel($value)    {$this->writejsonvmousecancel($value);}

   function getjsOnVMouseUp()    {return $this->readjsonvmouseup();}
   function setjsOnVMouseUp($value)    {$this->writejsonvmouseup($value);}

   function getSubPageUrlKey() { return $this->readsubpageurlkey(); }
   function setSubPageUrlKey($value) { $this->writesubpageurlkey($value); }

   function getActivePageClass() { return $this->readactivepageclass(); }
   function setActivePageClass($value) { $this->writeactivepageclass($value); }

   function getActiveBtnClass() { return $this->readactivebtnclass(); }
   function setActiveBtnClass($value) { $this->writeactivebtnclass($value); }

   function getMinScrollBack() { return $this->readminscrollback(); }
   function setMinScrollBack($value) { $this->writeminscrollback($value); }

}
?>