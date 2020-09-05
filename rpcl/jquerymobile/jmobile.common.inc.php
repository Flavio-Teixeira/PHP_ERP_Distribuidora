<?php
use_unit("graphics.inc.php");
/**
 * list of the different CSS files to apply
 */
define('THEME_BASIC', "/jquerymobile/css/jquery.mobile-1.0.css");
define('THEME_VALENCIA', "/jquerymobile/css/jquery.valencia-1.0.css");
define('GENERAL_CSS', "/jquerymobile/css/jquery.general.css");

/**
 * jquery files to include in header
 */
define('JQUERY_FILE', "/jquerymobile/js/jquery-1.6.4.min.js");
define('JQUERY_MOBILE_FILE', "/jquerymobile/js/jquery.mobile-1.0.js");
define('JQUERY_MOBILE_FUNCTIONS', "/jquerymobile/js/functions.js");


/**
*  phonegap files
*/
define('PHONEGAP_FILE', "/jquerymobile/js/phonegap-1.3.0.js");
define('PHONEGAP_FUNCTIONS',"/jquerymobile/js/phonegap.mobile.js");

/**
* Function to retrieve the Theme Object
*/
function RealTheme($object,$property="Theme")
{
  if(($object->ControlState & csDesigning) == csDesigning)
  {
    $theme_val = $object->$property;
    $Theme = $object->Owner->$theme_val;
  }
  else
    $Theme=$object->$property;

  return $Theme;
}

/**
* Helper function that returns the transition value
*/
function transitionValue($transition)
{
      switch($transition)
      {
         case "trSlide":
            $transitionValue = "slide";
            break;
         case "trSlideUp":
            $transitionValue = "slideup";
            break;
         case "trSlideDown":
            $transitionValue = "slidedown";
            break;
         case "trPop":
            $transitionValue = "pop";
            break;
         case "trFade":
            $transitionValue = "fade";
            break;
         case "trFlip":
            $transitionValue = "flip";
            break;
         case "trNone":
            $transitionValue = "none";
            break;
         default:
            $transitionValue = "";
            break;
      }

      return $transitionValue;
}

/**
 * Helper function that returns the icon string.
 * If there is a custom icon we use it, otherwise we check the system icon.
 *
 * @param object $object
 * @param boolean $asString
 *
 * @return string/array deppending on the value of asString
 */
function iconVal($object, $asString = 0)
{

   if($object->IconPos != "")
   {
      switch($object->IconPos)
      {
         case "ipTop":
            $iconPos = "top";
            break;
         case "ipBottom":
            $iconPos = "bottom";
            break;
         case "ipLeft":
            $iconPos = "left";
            break;
         case "ipRight":
            $iconPos = "right";
            break;
         case "ipNoText":
            $iconPos = "notext";
            break;
      }
   }
   else
   {
      $iconPos = "left";
   }

   if($object->Icon != "")
   {
      $icon = array("data-icon"=>$object->_name, "data-iconpos"=>$iconPos);
   }
   else
   {
      if($object->SystemIcon != "")
      {
        $systemIcon=systemIcon($object->SystemIcon);
        $icon = array("data-icon"=>$systemIcon, "data-iconpos"=>$iconPos);
      }
      else
      {
         $icon = array();
      }
   }

   if($asString)
   {
      $output = "";
      foreach($icon as $k=>$v)
      {
         $output .= "$k=\"$v\" ";
      }

      return $output;
   }
   else
      return $icon;
}


function systemIcon($icon)
{
  switch($icon)
  {
    case "siArrowL":
      $systemIcon = "arrow-l";
      break;
    case "siArrowR":
      $systemIcon = "arrow-r";
      break;
    case "siArrowU":
      $systemIcon = "arrow-u";
      break;
    case "siArrowD":
      $systemIcon = "arrow-d";
      break;
    case "siDelete":
      $systemIcon = "delete";
      break;
    case "siPlus":
      $systemIcon = "plus";
      break;
    case "siMinus":
      $systemIcon = "minus";
      break;
    case "siCheck":
      $systemIcon = "check";
      break;
    case "siGear":
      $systemIcon = "gear";
      break;
    case "siRefresh":
      $systemIcon = "refresh";
      break;
    case "siForward":
      $systemIcon = "forward";
      break;
    case "siBack":
      $systemIcon = "back";
      break;
    case "siGrid":
      $systemIcon = "grid";
      break;
    case "siStar":
      $systemIcon = "star";
      break;
    case "siAlert":
      $systemIcon = "alert";
      break;
    case "siInfo":
      $systemIcon = "info";
      break;
    case "siSearch":
      $systemIcon = "search";
      break;
    case "siHome":
      $systemIcon = "home";
      break;
    default:
      $systemIcon = "";
    }
    return $systemIcon;
}
/**
 * Helper function that loads the CSS headers
 *
 * This function evaluates if the object has assigned a MobileTheme object to load the appropiate CSS file
 * If the object doesn´t have a MobileTheme assigned we'll check all the page children for a valid Mobiltheme object.
 * If no MobileTheme is found on the page the default headers will be loaded
 *
 * @param object $object
 *
 */
function MHeader($object)
{
   // If MPage uses Ajax, and we are loading data from a database, we need to make the first load of data just in case the ajax call is made to an external domain
   if(($object->ControlState & csDesigning) != csDesigning &&  ! defined('MOBILE_AJAX_DB') && $object->Owner->UseAjax == 1)
   if(property_exists($object,'_datasource') && $object->datasource != null && $object->datasource->Dataset)
   {
    $owner = $object->Owner;
    define('MOBILE_AJAX_DB', 1);
    echo "<script>\n";
    echo "jQuery(document).ready(function(){\n";
    echo "\tAjaxCall('$owner->UseAjaxUri');\n";
    echo "});\n";
    echo "</script>\n";
   }

}

/**
 * Helper function that loads the beginning of the object's wrapper in design time
 *
 * @param object $object
 * @param int $dxoffset
 * @param int $dyoffset
 */

function JQMDesignStart($object,$top=0,$left=0)
{
   if(($object->ControlState & csDesigning) == csDesigning)
   {
      echo "<html><head><script src=\"" . RPCL_HTTP_PATH . JQUERY_FILE . "\"></script>\n";
      echo "<script src=\"" . RPCL_HTTP_PATH . JQUERY_MOBILE_FUNCTIONS . "\"></script>\n";
      echo "<link rel=\"stylesheet\" href=\"" . MOBILE_RPCL_PATH . THEME_BASIC . "\" />\n";
      if($object->Owner->CssFile=="cssCustom")
        echo "<link rel=\"stylesheet\" href=\"{$object->Owner->Customcssfile}\" />\n";
      echo "<script>\n";
                echo "jQuery(document).bind('mobileinit', function(){\n";
                echo "  jQuery.noConflict();\n";
                echo "  jQuery.mobile.page.prototype.options.degradeInputs.range='text'\n";
                echo "});";
      echo "</script>\n";
      echo "<script src=\"" . RPCL_HTTP_PATH . JQUERY_MOBILE_FILE . "\"></script>\n";
      echo "<link rel=\"stylesheet\" href=\"" . RPCL_HTTP_PATH . GENERAL_CSS . "\" />\n";
      //if we are using a MobileTheme in design time we have to insert it in the component in runtime
      if($object->Theme!="")
      {
        $theme_val=$object->Theme;
        $Theme=$object->Owner->$theme_val;
        if($Theme->Theme=="thCustom")
          echo "<link rel=\"stylesheet\" href=\"{$Theme->CustomTheme}\" />\n";
      }
      //dump object css for custom icons
      if(method_exists($object,'dumpCSS'))
      {
        echo "<style>\n";
        $object->dumpCSS();
        echo "</style>\n";
      }
      //dummy function to avoid javsascript error in MSlider
      echo "<script>function {$object->Name}_updatehidden(){}</script>";
      echo "</head><body>\n";
      echo "\t<div data-role=\"page\" style=\"position:relative;\" >\n";
      if ($object->Owner->Cssfile=="cssCustom" && $object->Owner->Customcssfile!="")
        echo("<link rel=\"stylesheet\" href=\"" . $object->Owner->Customcssfile . "\" type=\"text/css\" />\n");
      echo "\t<div id=\"{$object->Name}_outer\" style=\"width:" . ($object->Width) . "px;height:" . ($object->Height) . "px;position:absolute;top:".$top."px;left:".$left."px\">\n";

   }
}

/**
 * Helper function that loads the end of the object's wrapper in design time
 *
 * @param object @object
 */
function JQMDesignEnd($object)
{
   if(($object->ControlState & csDesigning) == csDesigning)
   {
      echo "\t</div>\n";
      echo "\t</div>\n";
      echo "</body>\n";
      echo "</html>";
   }
}

function bindEvents($element,$object,$event)
{
  $output="";

  $output.=bindJSEvent($element,$object,$event);
  $output.=bindPHPEvent($element,$object,$event);

  return $output;
}

/**
* Function to bind a js event using jQuery.
* Some events need to be translated to work on both mouse and touch devices.
*
* @param string $element
* @param object $object
* @param string $event
*/
function bindJSEvent($element,$object,$event)
{
  switch($event)
  {

    case 'dragstart':
      $jQevent='vmousedown';
      break;

    case 'cleartextclick':
    case 'dragend':
      $jQevent='vmouseup';
      break;

    default:
      $jQevent=$event;
      break;
  }

  $jsEvent="json$event";

  $output="";


  if($object->$jsEvent != "")
  {
      //$output .= "\t$element.unbind('$jQevent',{$object->$jsEvent});\n";
      $output .= "\t$element.bind('$jQevent',{$object->$jsEvent});\n";
  }

  return $output;
}

/**
* Function to wrap a PHP to a js event using jQuery.
* Some events need to be translated to work on both mouse and touch devices.
*
* @param string $element
* @param object $object
* @param string $event
*/
function bindPHPEvent($element,$object,$event)
{

  switch($event)
  {
    default:
      $jQevent=$event;
      break;
  }

  $phpEvent="on$event";
  $jsEvent="json$event";

  $output="";

  if($object->$phpEvent != "")
  {
    $submitEventValue = $object->readJSWrapperSubmitEventValue($object->$phpEvent);
    $hiddenfield = $object->readJSWrapperHiddenFieldName();
    $output .= "\t$element.bind('$jQevent',function(event){jsWrapper(event,'$hiddenfield','$submitEventValue')});\n";
  }

  return $output;
}

/**
* Creates a json object that indicates one external page to redirect when called from a mobile application
*
* @param string $file
*/
function mobileRedirect( $file )
{
    ob_end_clean();
    if(strpos(strtoupper($file),"HTTP://")===false && strpos(strtoupper($file),"HTTPS://")===false)
    {

    $host = $_SERVER[ 'HTTP_HOST' ];
    $uri = rtrim( dirname( $_SERVER[ 'PHP_SELF' ] ), '/\\' );
    $uri='http://' . $host . $uri . '/' . $file;
    }
    else
    {
      $uri=$file;
    }

    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json");
    echo "{";
    echo "\"redirect\":\"".$uri."\"";
    echo "}";
      exit;
}
?>