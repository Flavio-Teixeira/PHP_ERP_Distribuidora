<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("controls.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("classes.inc.php");
use_unit('checklst.inc.php');
use_unit('jquerymobile/jmobile.common.inc.php');

/**
 * Base class that generates a basic Mobile container.
 *
 */

class CustomMPanel extends CustomPanel
{
   protected $_theme = "";
   protected $_role = "none";
   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
    * Indicates the Role of the control.
    * The role indicates the way that container is going to be rendered
    */
   function readRole()    {return $this->_role;}
   function writeRole($value)    {$this->_role = $value;}
   function defaultRole()    {return "none";}

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
   function defaultTheme()    {return "";}

   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->_width = 300;
      $this->_height = 300;
      $this->_divwrap = 1;

      $this->_layout->Type = "ABS_XY_LAYOUT";
   }

   /**
    * This function is called by MPage when outputs the pagecreate event
    * it is the moment to put all the javascript code that we want to be executed when the page is created
    * it is the right moment to bind events to the controls
    */
   function pagecreate()
   {
      $output = "";
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'tap');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousecancel');
      return $output;
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();

      MHeader($this);
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
   }

   /**
    * Helper function that returns the string data-role attribute.
    * The role is needed to indicate the way the component is going to be rendered.
    *
    * @return string
    */
   function roleVal()
   {
      switch($this->_role)
      {
         case "rNone":
            $role = "none";
            break;
         case "rPage":
            $role = "page";
            break;
         case "rContent":
            $role = "content";
            break;
         case "rHeader":
            $role = "header";
            break;
         case "rFooter":
            $role = "footer";
            break;
         case "rNavBar":
            $role = "navbar";
            break;
         case "rControlGroup":
            $role = "controlgroup";
            break;
         case "rCollapsible":
            $role = "collapsible";
            break;
         case "rCollapsibleSet":
            $role = "collapsible-set";
            break;
         case "rFieldcontain":
            $role = "fieldcontain";
            break;

         default:
            $role = "none";
            break;
      }

      return "data-role=\"$role\"";
   }

   /**
    * Helper function that renders a basic div structure with the assigned Role and Theme.
    *
    * @param string $attributes Extra attributes to be added at the main DIV tag.
    * @param string $headerContent text to be dumped before the container's contents and right after the opening DIV tag.
    * @param string $footerContent text to be dumped after the container's content and right before the closing DIV tag.
    *
    */
   function DumpFormatedContent($attributes = array(), $headerContent = "", $footerContent = "", $top = 0, $left = 0)
   {
      //Get the theme string
      $theme = "";
      if($this->_theme!="")
      {
        $RealTheme=RealTheme($this);
        $theme = $RealTheme->themeVal(1);
      }

      if($this->_color != "")
      {
         if(isset($attributes['style']))
            $attributes['style'] .= "background-color:$this->_color";
         else
            $attributes['style'] = "background-color:$this->_color";
      }

      JQMDesignStart($this, $top, $left);

      $attributesString = "";
      foreach($attributes as $i=>$v)
      {
         $attributesString .= " $i=\"$v\"";
      }

      echo "<div " . $this->roleVal() . " $theme $attributesString >";
      if($headerContent != "")
         echo $headerContent;

      parent::dumpContents();

      if($footerContent != "")
         echo $footerContent;
      echo "</div>\n";
      JQMDesignEnd($this);
   }
}

/**
 * Base class for MControl component
 */
class CustomMControl extends Control
{
   protected $_theme = "";
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   protected $_onclick = "";
   protected $_ondblclick = "";

   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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

   function readOnDblClick()    {return $this->_ondblclick;}
   function writeOnDblClick($value)    {$this->_ondblclick = $value;}
   function defaultOnDblClick()    {return "";}

   function readOnClick()    {return $this->_onclick;}
   function writeOnClick($value)    {$this->_onclick = $value;}
   function defaultOnClick()    {return "";}

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
   function defaultTheme()    {return "";}

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);

      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->_width = 300;
      $this->_height = 60;
   }

   function pagecreate()
   {
      $output = "";
      $output .= bindEvents("jQuery('#$this->_name li')", $this, 'click');
      $output .= bindEvents("jQuery('#$this->_name li')", $this, 'dblclick');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'mouseup');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'mousedown');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'tap');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('#$this->_name li')", $this, 'vmousecancel');

      return $output;
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   function init()
   {
      parent::init();

      $submitEventValue = $this->input->{$this->readJSWrapperHiddenFieldName()};

      if(is_object($submitEventValue))
      {
         // check if the a click event has been fired
         if($this->_onclick != null && $submitEventValue->asString() == $this->readJSWrapperSubmitEventValue($this->_onclick))
         {
            $this->callEvent('onclick', array());
         }
         // check if the a double-click event has been fired
         if($this->_ondblclick != null && $submitEventValue->asString() == $this->readJSWrapperSubmitEventValue($this->_ondblclick))
         {
            $this->callEvent('ondblclick', array());
         }
      }
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();
      MHeader($this);
   }

   function dumpFormItems()
   {
      // add a hidden field so we can determine which event for the label was fired
      if($this->_onclick != null || $this->_ondblclick != null)
      {
         $hiddenwrapperfield = $this->readJSWrapperHiddenFieldName();
         echo "<input type=\"hidden\" id=\"$hiddenwrapperfield\" name=\"$hiddenwrapperfield\" value=\"\" />";
      }
   }
}

/**
 * This class is a Mobile Control
 * Includes all the mobile specific events and also the Theme and Enhancement properties
 *
 */
class MControl extends CustomMControl
{
   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getTheme()    {return $this->readtheme();}
   function setTheme($value)    {$this->writetheme($value);}

   function getFont()    {return $this->readfont();}
   function setFont($value)    {$this->writefont($value);}

   function getParentFont()    {return $this->readparentfont();}
   function setParentFont($value)    {$this->writeparentfont($value);}

   function getColor()    {return $this->readcolor();}
   function setColor($value)    {$this->writecolor($value);}

   function getParentColor()    {return $this->readparentcolor();}
   function setParentColor($value)    {$this->writeparentcolor($value);}

   function getjsOnClick()    {return $this->readjsonclick();}
   function setjsOnClick($value)    {$this->writejsonclick($value);}

   function getOnClick()    {return $this->readonclick();}
   function setOnClick($value)    {$this->writeonclick($value);}

   function getOnDblClick()    {return $this->readondblclick();}
   function setOnDblClick($value)    {$this->writeondblclick($value);}

   function getjsOnDblClick()    {return $this->readjsondblclick();}
   function setjsOnDblClick($value)    {$this->writejsondblclick($value);}

   function getjsOnMouseUp()    {return $this->readjsonmouseup();}
   function setjsOnMouseUp($value)    {$this->writejsonmouseup($value);}

   function getjsOnMouseDown()    {return $this->readjsonmousedown();}
   function setjsOnMouseDown($value)    {$this->writejsonmousedown($value);}

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
}

/**
 * MPanel creates a container that can have asigned a MobileTheme.
 * It can be used as the Panel control, but you can also manage its appearance like
 * all the Mobile controls.
 *
 * @see Panel
 *
 * @example JQueryMobile/mpanel.php
 */
class MPanel extends CustomMPanel
{
   function getTheme()    {return $this->readtheme();}
   function setTheme($value)    {$this->writetheme($value);}

   function getFont()    {return $this->readfont();}
   function setFont($value)    {$this->writefont($value);}

   function getParentfont()    {return $this->readparentfont();}
   function setParentfont($value)    {$this->writeparentfont($value);}

   function getColor()    {return $this->readcolor();}
   function setColor($value)    {$this->writecolor($value);}

   function getParentColor()    {return $this->readparentcolor();}
   function setParentColor($value)    {$this->writeparentcolor($value);}

   function getHidden()    {return $this->readhidden();}
   function setHidden($value)    {$this->writehidden($value);}

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



   function __construct($aowner = null)
   {
      parent::__construct($aowner);

      $this->_role = "rContent";
   }

   function dumpContents()
   {
      $attributes["style"] = "padding:0px;margin:0px;";
      if($this->_hidden)
         $attributes["style"] .= "visibility:hidden;";
      $attributes['id'] = $this->Name;
      $this->DumpFormatedContent($attributes);
   }
}

/**
 * Base class for MButton controls.
 */
class CustomMButton extends Button
{
   protected $_theme = "";
   protected $_systemIcon = "";
   protected $_icon = "";
   protected $_iconPos = "ipLeft";
   protected $_roundedcorners = 1;
   protected $_iconshadow = 1;
   protected $_shadow = 1;
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * enNone: No style is taken from the CSS file or Theme attribute
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   /**
    * Indicates if the component drop a shadow
    */
   function readShadow()    {return $this->_shadow;}
   function writeShadow($value)    {$this->_shadow = $value;}
   function defaultShadow()    {return 1;}

   /**
    * Indicates if the component's icons drops a shadow
    */
   function readIconShadow()    {return $this->_iconshadow;}
   function writeIconShadow($value)    {$this->_iconshadow = $value;}
   function defaultIconShadow()    {return 1;}

   /**
    * Indicates if the component will display rounded corners
    */
   function readRoundedCorners()    {return $this->_roundedcorners;}
   function writeRoundedCorners($value)    {$this->_roundedcorners = $value;}
   function defaultRoundedCorners()    {return 1;}


   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
   function defaultTheme()    {return "";}

   /**
    * Indicate the system icon to apply to the control.
    *
    * Different system icons can be assigned to this control.
    * To use a custom icon use the Icon property instead.
    *
    * @see readIcon()
    *
    * @return string
    */
   function readSystemIcon()    {return $this->_systemIcon;}
   function writeSystemIcon($val)    {$this->_systemIcon = $val;}
   function defaultSystemIcon()    {return "";}

   /**
    * Select an image as a custom icon.
    *
    * When a image is selected as icon the SystemIcon property is not taked in consideration and the
    * custom icon indicated in this property will be rendered instead.
    *
    * @return string
    */
   function readIcon()    {return $this->_icon;}
   function writeIcon($val)    {$this->_icon = $val;}
   function defaultIcon()    {return "";}

   /**
    * Indicate the position of the icon.
    *
    * Choose the ipNoText to display just the icon with no text.
    *
    * @return string
    */
   function readIconPos()    {return $this->_iconPos;}
   function writeIconPos($val)    {$this->_iconPos = $val;}
   function defaultIconPos()    {return "ipLeft";}

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   /**
    * This function is called by MPage when outputs the pagecreate event
    * it is the moment to put all the javascript code that we want to be executed when the page is created
    * it is the right moment to bind events to the controls
    */
   function pagecreate()
   {
      $output = "";
      $output .= bindEvents("jQuery('#$this->_name')", $this, 'click');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'tap');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousecancel');
      return $output;
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->_width = 150;
      $this->_height = 43;
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();
      MHeader($this);
   }

   function dumpCSS()
   {
      //If there is a custom icon we have to create the CSS class to handle it an put it on the header
      if($this->_icon != "")
      {
         ?>
  .ui-icon-<?php echo $this->_name?> {
    background-image:url(<?php echo $this->_icon?>);
    background-size: 18px 18px;
  }
         <?php
      }

   }

   function dumpContents()
   {
      JQMDesignStart($this);
      if($this->_imagesource != "" || $this->_enhancement == "enNone")
      {
         $this->_attributes['data-role'] = "none";
      }
      else
      {
         //Use the style attribute to prevent adding the inline style attributes to the component
         if($this->_enhancement == "enFull" && $this->_style == "")
            $this->_style = ".";

         if( ! $this->_roundedcorners)
            $this->_attributes['data-corners'] = "false";

         if( ! $this->_iconshadow)
            $this->_attributes['data-iconshadow'] = "false";

         if( ! $this->_shadow)
            $this->_attributes['data-shadow'] = "false";

         //Get the theme string

         if($this->_theme != "")
         {
            $RealTheme=RealTheme($this);
            $this->_attributes = array_merge($this->_attributes, $RealTheme->themeVal());
         }

         // get the icon if any
         $this->_attributes = array_merge($this->_attributes, iconVal($this));


      }
      // dump to control with all other parameters
      parent::dumpContents();


      //reset style if needed
      if($this->_style == ".")
         $this->_style = "";
      JQMDesignEnd($this);
   }
}

/**
 * MButton is a mobile push button control.
 * Use it as a push button on a form. Its appearance can be modified.
 *
 * @see Button
 *
 * @example JQueryMobile/mbutton.php
 */
class MButton extends CustomMButton
{
   function getRoundedCorners()    {return $this->readroundedcorners();}
   function setRoundedCorners($value)    {$this->writeroundedcorners($value);}

   function getIconShadow()    {return $this->readiconshadow();}
   function setIconShadow($value)    {$this->writeiconshadow($value);}

   function getShadow()    {return $this->readshadow();}
   function setShadow($value)    {$this->writeshadow($value);}

   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getTheme()    {return $this->readTheme();}
   function setTheme($val)    {$this->writeTheme($val);}

   function getIcon()    {return $this->readIcon();}
   function setIcon($val)    {$this->writeIcon($val);}

   function getSystemIcon()    {return $this->readSystemIcon();}
   function setSystemIcon($val)    {$this->writeSystemIcon($val);}

   function getIconPos()    {return $this->readIconPos();}
   function setIconPos($val)    {return $this->writeIconPos($val);}

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

}

/**
 * Base class for MobileTheme component
 */
class CustomMobileTheme extends Component
{
   protected $_customTheme = "";
   protected $_theme = "thBasic";
   protected $_colorVariation = "cvBasic";
   protected $_customcolorvariation = "";

   /**
    * Indicate the name of the color variation included in your custom CSS file
    */
   function readcustomColorVariation()    {return $this->_customcolorvariation;}
   function writecustomColorVariation($value)    {$this->_customcolorvariation = $value;}
   function defaultcustomColorVariation()    {return "";}

   /**
    * Select a CSS file containing a valid mobile theme.
    *
    * When selecting a custom CSS file, this will prevail over the system Theme.
    *
    * @return string
    */
   function readCustomTheme()    {return $this->_customTheme;}
   function writeCustomTheme($val)    {$this->_customTheme = $val;}
   function defaultCustomTheme()    {return "";}

   /**
    * Select a System theme file
    *
    * @return string
    */
   function readTheme()    {return $this->_theme;}
   function writeTheme($val)    {$this->_theme = $val;}
   function defaultTheme()    {return "thBasic";}



   /**
    * Select the color variation to use
    *
    * @return string
    */
   function readColorVariation()    {return $this->_colorVariation;}
   function writeColorVariation($val)    {$this->_colorVariation = $val;}
   function defaultColorVariation()    {return "cvBasic";}

   function dumpCSS()
   {
      //render and dump all custom css
      if($this->_theme == "thCustom")
      {
         if( ! defined($this->_customTheme) && $this->_customTheme != "")
         {
            if(file_exists($this->_customTheme))
            {
               $content = file_get_contents($this->_customTheme);

               $class = $this->customClassName();

               //remove comments
               $pos = 0;
               $search = "/*";
               $final = "";
               while(strlen($content) > 0 && $pos !== false)
               {
                  $pos = strpos($content, $search);

                  if($search == "/*")
                  {
                     $final .= substr($content, 0, $pos);
                     $content = substr($content, $pos);
                     $search = "*/";
                  }
                  else
                  {
                     $search = "/*";
                     $content = substr($content, $pos + 2);
                  }
               }

               $content = $final . $content;
               $search = "{";
               $pos = 0;

               while(strlen($content) > 0 && $pos !== false)
               {
                  $pos = strpos($content, $search);

                  if($search == "{")
                  {
                     $substr = substr($content, 0, $pos - 1);
                     $content = substr($content, $pos - 1);

                     $substr = trim($substr);
                     if($substr != "")
                     {
                        echo "\n.$class ";
                        echo str_replace(',', ", .$class ", $substr);
                     }

                     $search = "}";
                  }
                  else
                  {
                     $substr = substr($content, 0, $pos + 1);
                     $content = substr($content, $pos + 1);

                     echo $substr;
                     $search = "{";
                  }
               }

               define($this->_customTheme, 1);
            }
         }

      }

   }

   function customClassName()
   {
      $output = "";
      if($this->_theme == "thCustom")
         $output = strtr($this->_customTheme, "./", "-_");

      return $output;
   }
   /**
    * function that returns the theming string
    *
    * @param boolean $asString
    *
    * @return string/array deppending on the value of asString
    */
   function themeVal($asString = 0)
   {

      switch($this->_colorVariation)
      {
         case "cvHigh":
            $color = "a";
            break;
         case "cvMedium";
            $color = "b";
            break;
         case "cvBasic":
            $color = "c";
            break;
         case "cvMedium2";
            $color = "d";
            break;
         case "cvAccent";
            $color = "e";
            break;
         case "cvCustom";
            $color = $this->_customcolorvariation;
            break;
         default:
            $color = "c";
            break;
      }

      $upper_class = $this->customClassName();

      if($asString)
      {
         $output = "data-theme=\"$color\"";
         if($upper_class != "")
            $output .= " upper_class=\"$upper_class\"";
      }
      else
      {
         $output = array("data-theme"=>$color);
         if($upper_class != "")
            $output['upper_class'] = $upper_class;
      }

      return $output;
   }
}

/**
 * This class handles the color variatios of the Mobile controls
 *
 * In JQuery mobile a Theme is handeled by a CSS stylesheet. Every stylesheet comes with five color variations
 * In this class we can specify a system CSS file to use or include a custom CSS file from the user.
 * With a CSS file selected we'll be able to assign a color variation to the control.
 * Controls linked to this component will use the CSS stylesheet and the color variation indicated.
 *
 * Note: if to different controls in the same form use MobileTheme components with different CSS files,
 * only one of the CSS files will be loaded
 */
class MobileTheme extends CustomMobileTheme
{

   function getCustomTheme()    {return $this->readCustomTheme();}
   function setCustomTheme($val)    {$this->writeCustomTheme($val);}

   function getTheme()    {return $this->readTheme();}
   function setTheme($val)    {$this->writeTheme($val);}

   function getColorVariation()    {return $this->readColorVariation();}
   function setColorVariation($val)    {$this->writeColorVariation($val);}

   function getCustomColorVariation()    {return $this->readcustomcolorvariation();}
   function setCustomColorVariation($value)    {$this->writecustomcolorvariation($value);}
}

/**
 * Base class for MEdit control
 */
class CustomMEdit extends Edit
{
   protected $_theme = "";
   protected $_isSearch = 0;
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * enNone: No style is taken from the CSS file or Theme attribute
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   protected $_jsoncleartextclick = "";
   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
    *  Javascript event fired when the user clicks the cleartext button on a Search Box
    */
   function readjsOnClearTextClick()    {return $this->_jsoncleartextclick;}
   function writejsOnClearTextClick($value)    {$this->_jsoncleartextclick = $value;}
   function defaultjsOnClearTextClick()    {return "";}

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
   function defaultTheme()    {return "";}

   /**
    * Makes MEdit act like a search box
    *
    * This property will prevail over isPassword.
    *
    * @return string
    */
   function readIsSearch()    {return $this->_isSearch;}
   function writeIsSearch($val)    {$this->_isSearch = $val;}
   function defaultIsSearch()    {return 0;}

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   /**
    * This function is called by MPage when outputs the pagecreate event
    * it is the moment to put all the javascript code that we want to be executed when the page is created
    * it is the right moment to bind events to the controls
    */
   function pagecreate()
   {
      $output = "";

      $output .= bindJSEvent("jQuery('#$this->_name').next('.ui-input-clear')", $this, 'cleartextclick');
      $output .= bindEvents("jQuery('#$this->_name')", $this, 'click');
      $output .= bindEvents("jQuery('#$this->_name')", $this, 'dblclick');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'tap');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousecancel');

      return $output;
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->_width = 150;
      $this->_height = 43;
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();

      MHeader($this);
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsoncleartextclick);
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   function dumpContents()
   {
      JQMDesignStart($this);

      if($this->_enhancement == "enNone")
      {
         $this->_attributes['data-role'] = "none";
      }
      else
      {
        //Use the style attribute to prevent adding the inline style attributes to the component
        if($this->_enhancement=="enFull" && $this->_style=="")
          $this->_style=".";

        // set type depending on $_isSearch
        if($this->_isSearch)
         $this->_type = "search";

        //Get the theme string
        if($this->_theme != "")
        {
          $RealTheme=RealTheme($this);
          $this->_attributes = array_merge($this->_attributes, $RealTheme->themeVal());
        }
      }
      parent::dumpContents();


      //reset style if needed
      if($this->_style == ".")
         $this->_style = "";

      JQMDesignEnd($this);
   }
}

/**
 * Standard form text input, it inherits from Edit but have specific design enhancements provided by jquery mobile.
 * Also a new type of text input is added: Search, that renders in the browser a search box
 *
 * @see Edit
 *
 * @example JQueryMobile/medit.php
 */
class MEdit extends CustomMEdit
{
   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getTheme()    {return $this->readTheme();}
   function setTheme($val)    {$this->writeTheme($val);}

   function getIsSearch()    {return $this->readIsSearch();}
   function setIsSearch($val)    {$this->writeIsSearch($val);}

   function getjsOnClearTextClick()    {return $this->readjsoncleartextclick();}
   function setjsOnClearTextClick($value)    {$this->writejsoncleartextclick($value);}

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
}

/**
 * Base class for MTextArea control
 */
class CustomMTextArea extends Memo
{
   protected $_theme = "";
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * enNone: No style is taken from the CSS file or Theme attribute
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
   function defaultTheme()    {return "";}

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->_width = 150;
      $this->_height = 100;
   }

   /**
    * This function is called by MPage when outputs the pagecreate event
    * it is the moment to put all the javascript code that we want to be executed when the page is created
    * it is the right moment to bind events to the controls
    */
   function pagecreate()
   {
      $output = "";
      $output .= bindEvents("jQuery('#$this->_name')", $this, 'click');
      $output .= bindEvents("jQuery('#$this->_name')", $this, 'dblclick');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'tap');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousecancel');

      return $output;
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();

      MHeader($this);
   }

   function dumpContents()
   {
      JQMDesignStart($this, 0, 0);

      if($this->_enhancement == "enNone")
         $this->_attributes['data-role'] = "none";
      else
      {
        //Use the style attribute to prevent adding the inline style attributes to the component
        if($this->_enhancement=="enFull" && $this->_style=="")
          $this->_style=".";
        //Get the theme string
        if($this->_theme != "")
        {
          $RealTheme=RealTheme($this);
          $this->_attributes = array_merge($this->_attributes, $RealTheme->themeVal());
        }
      }
      parent::dumpContents();

      //reset style if needed
      if($this->_style == ".")
         $this->_style = "";

      JQMDesignEnd($this);
   }
}

/**
 * Standard form textareqa, it inherits from Memo but have specific design enhancements provided by jquery mobile.
 *
 * @see Memo
 *
 * @example JQueryMobile/mtextarea.php
 */
class MTextArea extends CustomMTextArea
{
   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getTheme()    {return $this->readTheme();}
   function setTheme($val)    {$this->writeTheme($val);}

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
}

/**
 * Base class for MSlider
 */
class CustomMSlider extends CustomEdit
{
   protected $_theme = "";
   protected $_maxValue = 10;
   protected $_minValue = 0;
   protected $_tracktheme = "";
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * enNone: No style is taken from the CSS file or Theme attribute
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   protected $_jsondragend = "";
   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
    * Fired when the slider knob is released after draggin it
    */
   function readjsOnDragEnd()    {return $this->_jsondragend;}
   function writejsOnDragEnd($value)    {$this->_jsondragend = $value;}
   function defaultjsOnDragEnd()    {return "";}

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

   /**
    * Select a MobileTheme component to indicate the track's color variation.
    *
    * MobileTheme components indicate the color variation of a control.
    * Different controls asigned to the same MobileTheme will use the same color variation when rendered.
    *
    * @see MobileTheme
    *
    * @return object returns the MobileTheme assigned
    */
   function readTrackTheme()    {return $this->_tracktheme;}
   function writeTrackTheme($val)    {$this->_tracktheme = $this->fixupProperty($val);}
   function defautlTrackTheme()    {return "";}

   /**
    * Assign the maximun value to the slider
    *
    * @return int
    */
   function readMaxValue()    {return $this->_maxValue;}
   function writeMaxValue($val)    {$this->_maxValue = $val;}
   function defaultmaxValue()    {return 10;}

   /**
    * Assign the minimun value to the slider
    *
    * @return int
    */
   function readMinValue()    {return $this->_minValue;}
   function writeMinValue($val)    {$this->_minValue = $val;}
   function defaultMinValue()    {return 0;}

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->_text = 5;
      $this->_type = "range";
      //in this control the width is fixed
      $this->_fixedwidth = 1;

      $this->_height = 43;
      $this->_width = 200;
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
      $this->writeTrackTheme($this->_tracktheme);
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();

      MHeader($this);
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();

      $this->dumpJSEvent($this->_jsondragend);
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   /**
    * This function is called by MPage when outputs the pagecreate event
    * it is the moment to put all the javascript code that we want to be executed when the page is created
    * it is the right moment to bind events to the controls
    */
   function pagecreate()
   {
      $output = "";
      $output .= bindEvents("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'click');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'tap');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'vmousecancel');

      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'dragstart');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'dragend');

      return $output;
   }

   function dumpContents()
   {
      JQMDesignStart($this, 0, 0);

      if($this->_enhancement == "enNone")
         $this->_attributes['data-role'] = "none";
      else
      {

         //Use the style attribute to prevent adding the inline style attributes to the component
         if($this->_enhancement == "enFull" && $this->_style == "")
            $this->_style = ".";

        //Get the theme string
        if($this->_theme != "")
        {
          $RealTheme=RealTheme($this);
          $this->_attributes = array_merge($this->_attributes, $RealTheme->themeVal());
        }

        //Get the track's theme string
        if($this->_tracktheme != "")
        {
          $RealTheme=RealTheme($this,"TrackTheme");
          $arraytracktheme = $RealTheme->themeVal();
          $this->_attributes["data-track-theme"]= $arraytracktheme['data-theme'];
        }
      }
      // Let stablish max and min values
      $this->_attributes["max"] = $this->_maxValue;
      $this->_attributes["min"] = $this->_minValue;

      //adjust the control's size
      $size = strlen($this->maxValue);
      $this->_attributes["size"] = $size;

      parent::dumpContents();

      //reset style if needed
      if($this->_style == ".")
         $this->_style = "";

      JQMDesignEnd($this);
   }
}

/**
 * Contol that implements an input text that will take values from a slide Bar.
 * It uses a Maximun and minimun values to create a range.
 * A default value can be also specified
 *
 * @example JQueryMobile/mslider.php
 */

class MSlider extends CustomMSlider
{
   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getTrackTheme()    {return $this->readtracktheme();}
   function setTrackTheme($value)    {$this->writetracktheme($value);}

   function getTheme()    {return $this->readTheme();}
   function setTheme($val)    {$this->writeTheme($val);}

   /**
    * Assigns the default value to the slider
    *
    * @return int
    */
   function getValue()    {return ($this->readText());}
   function setValue($value)    {$this->writeText($value);}
   function defaultValue()    {return 5;}

   function getMaxValue()    {return $this->readMaxValue();}
   function setMaxValue($val)    {$this->writeMaxValue($val);}

   function getMinValue()    {return $this->readMinValue();}
   function setMinValue($val)    {$this->writeMinValue($val);}

   function getOnClick()    {return $this->readOnClick();}
   function setOnClick($value)    {$this->writeOnClick($value);}

   function getOnDblClick()    {return $this->readOnDblClick();}
   function setOnDblClick($value)    {$this->writeOnDblClick($value);}

   function getOnSubmit()    {return $this->readOnSubmit();}
   function setOnSubmit($value)    {$this->writeOnSubmit($value);}

   /*
   * Publish the JS events for the Edit component
   */

   function getjsOnDragStart()    {return $this->readjsondragstart();}
   function setjsOnDragStart($value)    {$this->writejsondragstart($value);}

   function getjsOnDragEnd()    {return $this->readjsondragend();}
   function setjsOnDragEnd($value)    {$this->writejsondragend($value);}

   function getjsOnBlur()    {return $this->readjsOnBlur();}
   function setjsOnBlur($value)    {$this->writejsOnBlur($value);}

   function getjsOnChange()    {return $this->readjsOnChange();}
   function setjsOnChange($value)    {$this->writejsOnChange($value);}

   function getjsOnClick()    {return $this->readjsOnClick();}
   function setjsOnClick($value)    {$this->writejsOnClick($value);}

   function getjsOnDblClick()    {return $this->readjsOnDblClick();}
   function setjsOnDblClick($value)    {$this->writejsOnDblClick($value);}

   function getjsOnFocus()    {return $this->readjsOnFocus();}
   function setjsOnFocus($value)    {$this->writejsOnFocus($value);}

   function getjsOnMouseDown()    {return $this->readjsOnMouseDown();}
   function setjsOnMouseDown($value)    {$this->writejsOnMouseDown($value);}

   function getjsOnMouseUp()    {return $this->readjsOnMouseUp();}
   function setjsOnMouseUp($value)    {$this->writejsOnMouseUp($value);}

   function getjsOnMouseOver()    {return $this->readjsOnMouseOver();}
   function setjsOnMouseOver($value)    {$this->writejsOnMouseOver($value);}

   function getjsOnMouseMove()    {return $this->readjsOnMouseMove();}
   function setjsOnMouseMove($value)    {$this->writejsOnMouseMove($value);}

   function getjsOnMouseOut()    {return $this->readjsOnMouseOut();}
   function setjsOnMouseOut($value)    {$this->writejsOnMouseOut($value);}

   function getjsOnKeyPress()    {return $this->readjsOnKeyPress();}
   function setjsOnKeyPress($value)    {$this->writejsOnKeyPress($value);}

   function getjsOnKeyDown()    {return $this->readjsOnKeyDown();}
   function setjsOnKeyDown($value)    {$this->writejsOnKeyDown($value);}

   function getjsOnKeyUp()    {return $this->readjsOnKeyUp();}
   function setjsOnKeyUp($value)    {$this->writejsOnKeyUp($value);}

   function getjsOnSelect()    {return $this->readjsOnSelect();}
   function setjsOnSelect($value)    {$this->writejsOnSelect($value);}



   /*
   * Publish the properties for the component
   */

   function getDataField()
   {
      return $this->readDataField();
   }
   function setDataField($value)
   {
      $this->writeDataField($value);
   }

   function getDataSource()
   {
      return $this->readDataSource();
   }
   function setDataSource($value)
   {
      $this->writeDataSource($value);
   }

   function getColor()
   {
      return $this->readColor();
   }
   function setColor($value)
   {
      $this->writeColor($value);
   }

   function getEnabled()
   {
      return $this->readEnabled();
   }
   function setEnabled($value)
   {
      $this->writeEnabled($value);
   }

   function getFont()
   {
      return $this->readFont();
   }
   function setFont($value)
   {
      $this->writeFont($value);
   }

   function getParentColor()
   {
      return $this->readParentColor();
   }
   function setParentColor($value)
   {
      $this->writeParentColor($value);
   }

   function getParentFont()
   {
      return $this->readParentFont();
   }
   function setParentFont($value)
   {
      $this->writeParentFont($value);
   }

   function getParentShowHint()
   {
      return $this->readParentShowHint();
   }
   function setParentShowHint($value)
   {
      $this->writeParentShowHint($value);
   }

   function getPopupMenu()
   {
      return $this->readPopupMenu();
   }
   function setPopupMenu($value)
   {
      $this->writePopupMenu($value);
   }

   function getReadOnly()
   {
      return $this->readReadOnly();
   }
   function setReadOnly($value)
   {
      $this->writeReadOnly($value);
   }

   function getShowHint()
   {
      return $this->readShowHint();
   }
   function setShowHint($value)
   {
      $this->writeShowHint($value);
   }

   function getStyle()    {return $this->readstyle();}
   function setStyle($value)    {$this->writestyle($value);}

   function getTabOrder()
   {
      return $this->readTabOrder();
   }
   function setTabOrder($value)
   {
      $this->writeTabOrder($value);
   }

   function getTabStop()
   {
      return $this->readTabStop();
   }
   function setTabStop($value)
   {
      $this->writeTabStop($value);
   }

   function getVisible()
   {
      return $this->readVisible();
   }
   function setVisible($value)
   {
      $this->writeVisible($value);
   }

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
}

/**
 * Base class for MLink control
 */
class CustomMLink extends Label
{
   protected $_theme = "";
   protected $_systemIcon = "";
   protected $_icon = "";
   protected $_iconPos = "ipLeft";
   protected $_noajax = 0;
   protected $_transition = "";
   protected $_isbackbutton = 0;
   protected $_opendialog = 0;
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
   function defaultTheme()    {return "";}

   /**
    * Indicate the system icon to apply to the control.
    *
    * Different system icons can be assigned to this control.
    * To use a custom icon use the Icon property instead.
    *
    * @see readIcon()
    *
    * @return string
    */
   function readSystemIcon()    {return $this->_systemIcon;}
   function writeSystemIcon($val)    {$this->_systemIcon = $val;}
   function defaultSystemIcon()    {return "";}

   /**
    * Select an image as a custom icon.
    *
    * When a image is selected as icon the SystemIcon property is not taked in consideration and the
    * custom icon indicated in this property will be rendered instead.
    *
    * @return string
    */
   function readIcon()    {return $this->_icon;}
   function writeIcon($val)    {$this->_icon = $val;}
   function defaultIcon()    {return "";}

   /**
    * Indicate the position of the icon.
    * Choose the ipNoText to display just the icon with no text.
    *
    * @return string
    */
   function readIconPos()    {return $this->_iconPos;}
   function writeIconPos($val)    {$this->_iconPos = $val;}
   function defaultIconPos()    {return "ipLeft";}

   /**
    * Prevents the linked page to be loaded using Ajax
    *
    * If this property is set to true, no Transition will apply
    *
    * @see readTransition()
    *
    * @return boolean
    */
   function readNoAjax()    {return $this->_noajax;}
   function writeNoAjax($value)    {$this->_noajax = $value;}
   function defaultNoAjax()    {return 0;}

   /**
    * Indicate the transition that is going to be used
    *
    * Transitions are executed when pages are loaded with Ajax, no efect on non local pages or when NoAjax is set to true
    *
    * @see readNoAjax()
    *
    * @return string
    */
   function readTransition()    {return $this->_transition;}
   function writeTransition($value)    {$this->_transition = $value;}
   function defaultTransition()    {return "";}

   /**
    * The linked page will load like a dialog
    *
    * @return boolean
    */
   function readOpenDialog()    {return $this->_opendialog;}
   function writeOpenDialog($value)    {$this->_opendialog = $value;}
   function defaultOpenDialog()    {return 0;}

   /**
    * Indicates if the Link will behave like a "Back" button, so when clicked will go to the previous page
    */
   function readIsBackButton()    {return $this->_isbackbutton;}
   function writeIsBackButton($value)    {$this->_isbackbutton = $value;}
   function defaultIsBackButton()    {return 0;}

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   function openingLink($style, $alignment, $hint, $target, $events, $class)
   {
      if($this->_link != "")
      {
         if( ! $this->_divwrap)
            $id = " id=\"$this->_name\" ";
         else
            $id = "";
         $attributes = $this->strAttributes();
         echo "<A HREF=\"$this->_link\"$id$style $alignment $class $hint $target $events $attributes >";
      }
   }

   function openingWrap($style, $alignment, $hint, $events, $class)
   {
      if($this->_divwrap)
      {
         echo "<div id=\"$this->_name\" $style $alignment $hint $class ";

         if($this->_link == "")
            echo "$events";

         echo ">";
      }
   }

   function closingWrap()
   {
      if(($this->_divwrap))
      {
         echo "</div>";
      }
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->_link = "#";
      $this->_divwrap = 0;

      $this->_width = 150;
      $this->_height = 43;
   }

   function pagecreate()
   {
      $output = "";
      $output .= bindEvents("jQuery('#$this->_name')", $this, 'click');
      $output .= bindEvents("jQuery('#$this->_name')", $this, 'dblclick');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'tap');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmousecancel');
      return $output;
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();
      MHeader($this);
   }

   function dumpCSS()
   {
      //If there is a custom icon we have to create the CSS class to handle it an put it on the header
      if($this->_icon != "")
      {
         ?>
  .ui-icon-<?php echo $this->_name?> {
    background-image:url(<?php echo $this->_icon?>);
    background-size: 18px 18px;
  }
         <?php
      }
   }

   function dumpContents()
   {
      JQMDesignStart($this);

      //Use the style attribute to prevent adding the inline style attributes to the component
      if($this->_enhancement == "enFull" && $this->_style == "")
         $this->_style = ".";

      if($this->_link == "")
         $this->_link = "#";

      //Get the theme string
      if($this->_theme != "")
      {
        $RealTheme=RealTheme($this);
        $this->_attributes = array_merge($this->_attributes, $RealTheme->themeVal());
      }
      // get the icon if any
      $this->_attributes = array_merge($this->_attributes, iconVal($this));

      if($this->_noajax)
         $this->_attributes["rel"] = "external";

      if($this->_isbackbutton)
         $this->_attributes["data-rel"] = "back";

      if($this->_transition != "")
         $this->_attributes["data-transition"] = transitionValue($this->_transition);

      if($this->_opendialog)
         $this->_attributes["data-rel"] = "dialog";

      $this->_attributes["data-role"] = "button";

      // dump to control with all other parameters
      parent::dumpContents();

      //reset style if needed
      if($this->_style == ".")
         $this->_style = "";

      JQMDesignEnd($this);
   }
}

/**
 * Links are rendered as buttons but they don´t submit forms.
 *
 * All local pages referenced in links are loaded via Ajax.
 * A transition can be stablished when clicking the Link and will be shown when the page is loaded via Ajax.
 * Ajax can also be disabled.
 *
 * @see Label
 *
 * @example JQueryMobile/mlink.php
 */

class MLink extends CustomMLink
{
   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getTheme()    {return $this->readTheme();}
   function setTheme($val)    {$this->writeTheme($val);}

   function getIcon()    {return $this->readIcon();}
   function setIcon($val)    {$this->writeIcon($val);}

   function getSystemIcon()    {return $this->readSystemIcon();}
   function setSystemIcon($val)    {$this->writeSystemIcon($val);}

   function getIconPos()    {return $this->readIconPos();}
   function setIconPos($val)    {return $this->writeIconPos($val);}

   function getNoAjax()    {return $this->readnoajax();}
   function setNoAjax($value)    {$this->writenoajax($value);}

   function getTransition()    {return $this->readtransition();}
   function setTransition($value)    {$this->writetransition($value);}

   function getOpenDialog()    {return $this->readopendialog();}
   function setOpenDialog($value)    {$this->writeopendialog($value);}

   function getIsBackButton()    {return $this->readisbackbutton();}
   function setIsBackButton($value)    {$this->writeisbackbutton($value);}

   function defaultLink()    {return "#";}

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
}

/**
 * Base class for MCollapsible control
 */
class CustomMCollapsible extends CustomMPanel
{
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   protected $_iscollapsed = 0;
   protected $_jsoncollapse = "";
   protected $_jsonexpand = "";

   /**
    * Event fired when one panel is expanded.
    *
    * Once one panel is expanded, all the others fire the OnCollapse() event
    *
    * @see readjsOnCollapse()
    */
   function readjsOnExpand()    {return $this->_jsonexpand;}
   function writejsOnExpand($value)    {$this->_jsonexpand = $value;}
   function defaultjsOnExpand()    {return "";}

   /**
    * Event fired when one panel is collapsed
    */
   function readjsOnCollapse()    {return $this->_jsoncollapse;}
   function writejsOnCollapse($value)    {$this->_jsoncollapse = $value;}
   function defaultjsOnCollapse()    {return "";}

   /**
    * Change the text on the collapsible control header
    *
    * @return string
    */
   function readCaption()    {return $this->_caption;}
   function writeCaption($value)    {$this->_caption = $value;}
   function defaultCaption()    {return "header";}

   /**
    * Indicate if the element's content is displayed collapsed
    *
    * @return boolean
    */
   function readIsCollapsed()    {return $this->_iscollapsed;}
   function writeIsCollapsed($value)    {$this->_iscollapsed = $value;}
   function defaultIsCollapsed()    {return 0;}

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);

      $this->_role = "rCollapsible";
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsoncollapse);
      $this->dumpJSEvent($this->_jsonexpand);
   }

   /**
    * This function is called by MPage when outputs the pagecreate event
    * it is the moment to put all the javascript code that we want to be executed when the page is created
    * it is the right moment to bind events to the controls
    */
   function pagecreate()
   {
      $output = parent::pagecreate();
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'expand');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'collapse');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'click');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'dblclick');
      return $output;
   }

   function dumpContents()
   {

      $attributes["id"] = $this->_name;

      if( ! $this->_iscollapsed)
         $attributes["data-collapsed"] = "false";

      if($this->_showhint)
         $hint = " title=\"$this->_hint\"";
      else
         $hint = "";

      //Use the style attribute to prevent adding the inline style attributes to the component
      if($this->_enhancement == "enFull")
         $style = "";
      else
      {
         $style = $this->Font->FontString;
         $style = trim($style) != ""? " style=\"$style\"": "";
      }

      $headerContent = "\t<h1$hint$style>$this->_caption</h1>\n";

      $this->DumpFormatedContent($attributes, $headerContent, "", -10);
   }
}

/**
 * This class renders a container with a header. By clicking in the header the content is shown/hidden.
 *
 * @example JQueryMobile/mcollapsible.php
 */

class MCollapsible extends CustomMCollapsible
{
   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}


   function getTheme()    {return $this->readtheme();}
   function setTheme($value)    {$this->writetheme($value);}

   function getCaption()    {return $this->readcaption();}
   function setCaption($value)    {$this->writecaption($value);}

   function getIsCollapsed()    {return $this->readiscollapsed();}
   function setIsCollapsed($value)    {$this->writeiscollapsed($value);}

   function getShowHint()    {return $this->readshowhint();}
   function setShowHint($value)    {$this->writeshowhint($value);}

   function getjsOnExpand()    {return $this->readjsonexpand();}
   function setjsOnExpand($value)    {$this->writejsonexpand($value);}

   function getjsOnCollapse()    {return $this->readjsoncollapse();}
   function setjsOnCollapse($value)    {$this->writejsoncollapse($value);}

   function getjsOnClick()    {return $this->readjsonclick();}
   function setjsOnClick($value)    {$this->writejsonclick($value);}

   function getjsOnDblClick()    {return $this->readjsondblclick();}
   function setjsOnDblClick($value)    {$this->writejsondblclick($value);}

   function getjsOnMouseUp()    {return $this->readjsonmouseup();}
   function setjsOnMouseUp($value)    {$this->writejsonmouseup($value);}

   function getjsOnMouseDown()    {return $this->readjsonmousedown();}
   function setjsOnMouseDown($value)    {$this->writejsonmousedown($value);}

   function getFont()    {return $this->readfont();}
   function setFont($value)    {$this->writefont($value);}

   function getParentFont()    {return $this->readparentfont();}
   function setParentFont($value)    {$this->writeparentfont($value);}

   function getColor()    {return $this->readcolor();}
   function setColor($value)    {$this->writecolor($value);}

   function getParentColor()    {return $this->readparentcolor();}
   function setParentColor($value)    {$this->writeparentcolor($value);}

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
}

/**
 * Base class for MToolBar control
 */
class CustomMToolBar extends MControl
{
   protected $_selectedelement =  - 1;
   protected $_items = array();

   /**
    * Array of MLink elements
    *
    * @return array
    */
   function readItems()    {return $this->_items;}
   function writeItems($value)    {$this->_items = $value;}
   function defaultItems()    {return array();}

   /**
    * Select the element that is going to be marked as selected in the toolbar
    *
    * @return object
    */
   function readSelectedElement()    {return $this->_selectedelement;}
   function writeSelectedElement($value)    {$this->_selectedelement = $value;}
   function defaultSelectedElement()    {return "";}


   function dumpCSS()
   {
      if( ! is_array($this->_items))
         $this->_items = array();
      //If there is a custom icon we have to create the CSS class to handle it an put it on the header
      foreach($this->_items as $i=>$v)
      {
         if(isset($v['Icon']) && $v['Icon'] != "")
         {
            ?>
   .ui-icon-<?php echo $this->_name?>_<?php echo $i?> {
    background-image:url(<?php echo $v['Icon']?>);
    background-size: 18px 18px;
  }
            <?php
         }
      }
   }

   function dumpContents()
   {
      if( ! is_array($this->_items))
         $this->_items = array();

      if(count($this->_items) > 0)
      {
         //Get the theme string
         $theme = "";
         if($this->_theme != "")
         {
            $RealTheme=RealTheme($this);
            $theme = $RealTheme->themeVal(1);
         }

         JQMDesignStart($this, 0, 0);

         //Use the style attribute to prevent adding the inline style attributes to the component
         if($this->_enhancement == "enFull")
         {
            if($this->_style == "")
               $this->_style = ".";
            $style = "";
         }
         else
         {

            $style = $this->Font->FontString;
            if($this->_color != "")
               $style .= "background:$this->_color;";

            if($style != "")
               $style = "style=\"$style\"";
         }

         echo "<div data-role=\"navbar\" id=\"$this->_name\" >\n";
         echo "\t<ul>\n";



         foreach($this->_items as $i=>$v)
         {
            if( ! isset($v['Link']) || $v['Link'] == "")
               $v['Link'] = "#";

            if(isset($v['NoAjax']) && $v['NoAjax'] == "true")
               $rel = " rel=\"external\" ";
            else
               $rel = "";

            if(isset($v['Transition']))
               $transitionValue = transitionValue($v['Transition']);
            else
               $transitionValue = '';

            if($transitionValue == '')
            {
               $transition = "";
            }
            else
            {
               $transition = " data-transition=\"" . transitionValue($v['Transition']) . "\" ";
            }

            if(isset($v['OpenDialog']) && $v['OpenDialog'] == "true")
               $dialog = " data-rel=\"dialog\" ";
            else
               $dialog = "";

            if($this->_selectedelement == $i)
               $class = " class=\"ui-btn-active\" ";
            else
               $class = "";

            if(isset($v['Icon']) && $v['Icon'] != "")
               $icon = " data-icon=\"{$this->_name}_$i\" ";
            else
               if(isset($v['SystemIcon']) && $v['SystemIcon'] != "")
                  $icon = " data-icon=\"" . systemIcon($v['SystemIcon']) . "\" ";
               else
                  $icon = "";

            echo "\t\t<li><a href=\"{$v['Link']}\" id=\"{$this->_name}_$i\"$rel$transition$dialog$class$icon$style$theme>{$v['Caption']}</a></li>\n";
         }

         echo "\t</ul>\n";
         echo "</div>\n";

         if($this->_style == ".")
            $this->_style = "";

         JQMDesignEnd($this);
      }
   }

}

/**
 * This class is a container of MLink components
 * All components included in the container will render as toolbar buttons
 *
 * @see MLink
 *
 * @example JQueryMobile/mtoolbar.php
 */
class MToolBar extends CustomMToolBar
{

   function getSelectedElement()    {return $this->readselectedelement();}
   function setSelectedElement($value)    {$this->writeselectedelement($value);}

   function getItems()    {return $this->readitems();}
   function setItems($value)    {$this->writeitems($value);}

}

/**
 * Base class for MToggle control
 */
class CustomMToggle extends CustomListBox
{
   protected $_theme = "";
   protected $_tracktheme = "";
   protected $_textchecked = "on";
   protected $_valuechecked = "1";
   protected $_textunchecked = "off";
   protected $_valueunchecked = "0";
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * enNone: No style is taken from the CSS file or Theme attribute
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
    * Indicates the value for the unchecked option
    *
    * @return string
    */
   function readValueUnchecked()    {return $this->_valueunchecked;}
   function writeValueUnchecked($value)    {$this->_valueunchecked = $value;}
   function defaultValueUnchecked()    {return "0";}

   /**
    * Indicates the text for the unchecked option
    *
    * @return string
    */
   function readTextUnchecked()    {return $this->_textunchecked;}
   function writeTextUnchecked($value)    {$this->_textunchecked = $value;}
   function defaultTextUnchecked()    {return "off";}

   /**
    * Indicates the value for the checked option
    *
    * @return string
    */
   function readValueChecked()    {return $this->_valuechecked;}
   function writeValueChecked($value)    {$this->_valuechecked = $value;}
   function defaultValueChecked()    {return "1";}

   /**
    * Indicates the text for the checked option
    *
    * @return string
    */
   function readTextChecked()    {return $this->_textchecked;}
   function writeTextChecked($value)    {$this->_textchecked = $value;}
   function defaultTextChecked()    {return "on";}

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

   /**
    * Select a MobileTheme component to indicate the track's color variation.
    *
    * MobileTheme components indicate the color variation of a control.
    * Different controls asigned to the same MobileTheme will use the same color variation when rendered.
    *
    * @see MobileTheme
    *
    * @return object returns the MobileTheme assigned
    */
   function readTrackTheme()    {return $this->_tracktheme;}
   function writeTrackTheme($val)    {$this->_tracktheme = $this->fixupProperty($val);}
   function defautlTrackTheme()    {return "";}

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->_font->Align = "taCenter";
   }

   function pagecreate()
   {
      $output = "";
      $output .= bindEvents("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'click');
      $output .= bindEvents("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'dblclick');
      $output .= bindEvents("jQuery('#$this->_name')", $this, 'change');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'tap');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('#$this->_name').siblings('.ui-slider')", $this, 'vmousecancel');

      return $output;
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
      $this->writeTrackTheme($this->_tracktheme);

      $this->_items[$this->_valuechecked] = $this->_textchecked;
      $this->_items[$this->_valueunchecked] = $this->_textunchecked;
      $this->_itemindex = $this->_valuechecked;
   }

   function dumpHeaderCode()
   {

      parent::dumpHeaderCode();

      MHeader($this);

   }

   function dumpcontents()
   {
      if($this->_enhancement == "enNone")
      {
         $this->_attributes['data-role'] = "none";
         JQMDesignStart($this);
      }
      else
      {
         JQMDesignStart($this, -1, -1);

         //Use the style attribute to prevent adding the inline style attributes to the component
         if($this->_enhancement == "enFull" && $this->_style == "")
            $this->_style = ".";

        //Get the theme string
        if($this->_theme != "")
        {
          $RealTheme=RealTheme($this);
          $this->_attributes = array_merge($this->_attributes, $RealTheme->themeVal());
        }
        //Get the track's theme string
        if($this->_tracktheme != "")
        {
          $RealTheme=RealTheme($this,"TrackTheme");
          $arraytracktheme = $RealTheme->themeVal();
          $this->_attributes["data-track-theme"]= $arraytracktheme['data-theme'];
        }

         $this->_attributes["data-role"] = "slider";
      }
      // dump to control with all other parameters
      parent::dumpContents();

      //reset style if needed
      if($this->_style == ".")
         $this->_style = "";

      JQMDesignEnd($this);
   }

}

/**
 * This is a control with two values that render like an on/off switch.
 *
 * Internally is like a listBox but forced to use only two items
 *
 * @example JQueryMobile/mtoggle.php
 */
class MToggle extends CustomMToggle
{
   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getTrackTheme()    {return $this->readtracktheme();}
   function setTrackTheme($value)    {$this->writetracktheme($value);}

   function getTheme()    {return $this->readtheme();}
   function setTheme($value)    {$this->writetheme($value);}

   function getValueChecked()    {return $this->readvaluechecked();}
   function setValueChecked($value)    {$this->writevaluechecked($value);}

   function getTextChecked()    {return $this->readtextchecked();}
   function setTextChecked($value)    {$this->writetextchecked($value);}

   function getValueUnchecked()    {return $this->readvalueunchecked();}
   function setValueUnchecked($value)    {$this->writevalueunchecked($value);}

   function getTextUnchecked()    {return $this->readtextunchecked();}
   function setTextUnchecked($value)    {$this->writetextunchecked($value);}

   /*
   * Publish the events
   */
   function getOnClick()    {return $this->readOnClick();}
   function setOnClick($value)    {$this->writeOnClick($value);}

   function getOnDblClick()    {return $this->readOnDblClick();}
   function setOnDblClick($value)    {$this->writeOnDblClick($value);}

   function getOnSubmit()    {return $this->readOnSubmit();}
   function setOnSubmit($value)    {$this->writeOnSubmit($value);}

   function getOnChange()    {return $this->readonchange();}
   function setOnChange($value)    {$this->writeonchange($value);}

   /*
   * Publish the JS events
   */
   function getjsOnBlur()    {return $this->readjsOnBlur();}
   function setjsOnBlur($value)    {$this->writejsOnBlur($value);}

   function getjsOnChange()    {return $this->readjsOnChange();}
   function setjsOnChange($value)    {$this->writejsOnChange($value);}

   function getjsOnClick()    {return $this->readjsOnClick();}
   function setjsOnClick($value)    {$this->writejsOnClick($value);}

   function getjsOnDblClick()    {return $this->readjsOnDblClick();}
   function setjsOnDblClick($value)    {$this->writejsOnDblClick($value);}

   function getjsOnFocus()    {return $this->readjsOnFocus();}
   function setjsOnFocus($value)    {$this->writejsOnFocus($value);}

   function getjsOnMouseDown()    {return $this->readjsOnMouseDown();}
   function setjsOnMouseDown($value)    {$this->writejsOnMouseDown($value);}

   function getjsOnMouseUp()    {return $this->readjsOnMouseUp();}
   function setjsOnMouseUp($value)    {$this->writejsOnMouseUp($value);}

   function getjsOnMouseOver()    {return $this->readjsOnMouseOver();}
   function setjsOnMouseOver($value)    {$this->writejsOnMouseOver($value);}

   function getjsOnMouseMove()    {return $this->readjsOnMouseMove();}
   function setjsOnMouseMove($value)    {$this->writejsOnMouseMove($value);}

   function getjsOnMouseOut()    {return $this->readjsOnMouseOut();}
   function setjsOnMouseOut($value)    {$this->writejsOnMouseOut($value);}

   function getjsOnKeyPress()    {return $this->readjsOnKeyPress();}
   function setjsOnKeyPress($value)    {$this->writejsOnKeyPress($value);}

   function getjsOnKeyDown()    {return $this->readjsOnKeyDown();}
   function setjsOnKeyDown($value)    {$this->writejsOnKeyDown($value);}

   function getjsOnKeyUp()    {return $this->readjsOnKeyUp();}
   function setjsOnKeyUp($value)    {$this->writejsOnKeyUp($value);}

   /*
   * Publish the properties for the Label component
   */

   function getDataField()
   {
      return $this->readDataField();
   }
   function setDataField($value)
   {
      $this->writeDataField($value);
   }

   function getDataSource()
   {
      return $this->readDataSource();
   }
   function setDataSource($value)
   {
      $this->writeDataSource($value);
   }

   function getColor()
   {
      return $this->readColor();
   }
   function setColor($value)
   {
      $this->writeColor($value);
   }

   function getEnabled()
   {
      return $this->readEnabled();
   }
   function setEnabled($value)
   {
      $this->writeEnabled($value);
   }

   function getFont()
   {
      return $this->readFont();
   }
   function setFont($value)
   {
      $this->writeFont($value);
   }

   function getParentColor()
   {
      return $this->readParentColor();
   }
   function setParentColor($value)
   {
      $this->writeParentColor($value);
   }

   function getParentFont()
   {
      return $this->readParentFont();
   }
   function setParentFont($value)
   {
      $this->writeParentFont($value);
   }

   function getParentShowHint()
   {
      return $this->readParentShowHint();
   }
   function setParentShowHint($value)
   {
      $this->writeParentShowHint($value);
   }

   function getPopupMenu()
   {
      return $this->readPopupMenu();
   }
   function setPopupMenu($value)
   {
      $this->writePopupMenu($value);
   }

   function getShowHint()
   {
      return $this->readShowHint();
   }
   function setShowHint($value)
   {
      $this->writeShowHint($value);
   }

   function getStyle()    {return $this->readstyle();}
   function setStyle($value)    {$this->writestyle($value);}

   function getTabOrder()
   {
      return $this->readTabOrder();
   }
   function setTabOrder($value)
   {
      $this->writeTabOrder($value);
   }

   function getTabStop()
   {
      return $this->readTabStop();
   }
   function setTabStop($value)
   {
      $this->writeTabStop($value);
   }

   function getVisible()
   {
      return $this->readVisible();
   }
   function setVisible($value)
   {
      $this->writeVisible($value);
   }

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
}

/**
 * Base class for MRadioButton control
 */
class CustomMRadioButton extends RadioButton
{
   protected $_theme = "";
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * enNone: No style is taken from the CSS file or Theme attribute
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
   function defaultTheme()    {return "";}

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   /*
   * Write the Javascript section to the header
   */
   function dumpJavascript()
   {
      if( ! defined('RadioButtonClick'))
      {
         define('RadioButtonClick', 1);
      }
      parent::dumpJavascript();
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->_width = 200;
      $this->_height = 43;
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();

      MHeader($this);
   }

   /**
    * This function is called by MPage when outputs the pagecreate event
    * it is the moment to put all the javascript code that we want to be executed when the page is created
    * it is the right moment to bind events to the controls
    */
   function pagecreate()
   {
      $output = "";
      $output .= bindEvents("jQuery('#{$this->_name}_caption')", $this, 'click');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'tap');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'vmousecancel');

      return $output;
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   function dumpContents()
   {
    JQMDesignStart($this);
    if($this->_enhancement=="enNone")
    {
      $this->_attributes['data-role']="none";

    }
    else
    {

      //Use the style attribute to prevent adding the inline style attributes to the component
      if($this->_enhancement=="enFull" && $this->_style=="")
        $this->_style=".";

      //Get the theme string
      if($this->_theme != "")
      {
        $RealTheme=RealTheme($this);
        $this->_attributes = array_merge($this->_attributes, $RealTheme->themeVal());
      }
      $this->_attributes['data-role'] = "radiobutton";
    }
      parent::dumpContents();

      //reset style if needed
      if($this->_style == ".")
         $this->_style = "";

      JQMDesignEnd($this);
   }
}

/**
 * Standard form radio button, it inherits from RadioButton but have specific design enhancements provided by jquery mobile.
 *
 * @see RadioButton
 *
 * @example JQueryMobile/mradiobutton.php
 */
class MRadioButton extends CustomMRadioButton
{
   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getTheme()    {return $this->readTheme();}
   function setTheme($val)    {$this->writeTheme($val);}

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
}

/**
 * Base class for MCheckBox control
 */
class CustomMCheckBox extends CheckBox
{
   protected $_theme = "";
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * enNone: No style is taken from the CSS file or Theme attribute
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
   function defaultTheme()    {return "";}

   /**
    * This function is overwritten to use a jqueryfied version of tha Wrapper function
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   function dumpJavascript()
   {
      if( ! defined('CheckBoxClick'))
      {
         define('CheckBoxClick', 1);
      }
      parent::dumpJavascript();
   }
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->_width = 200;
      $this->_height = 43;
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
   }

   /**
    * This function is called by MPage when outputs the pagecreate event
    * it is the moment to put all the javascript code that we want to be executed when the page is created
    * it is the right moment to bind events to the controls
    */
   function pagecreate()
   {
      $output = "";
      $output .= bindEvents("jQuery('#{$this->_name}_caption')", $this, 'click');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'tap');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('#{$this->_name}_caption')", $this, 'vmousecancel');
      return $output;
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();

      MHeader($this);
   }

   function dumpContents()
   {
      JQMDesignStart($this);
      if($this->_enhancement == "enNone")
      {
         $this->_attributes['data-role'] = "none";

      }
      else
      {

         //Use the style attribute to prevent adding the inline style attributes to the component
         if($this->_enhancement == "enFull" && $this->_style == "")
            $this->_style = ".";

      //Get the theme string
      if($this->_theme != "")
      {
        $RealTheme=RealTheme($this);
        $this->_attributes = array_merge($this->_attributes, $RealTheme->themeVal());
      }

         $this->_attributes['data-role'] = "checkbox";
      }
      parent::dumpContents();

      //reset style if needed
      if($this->_style == ".")
         $this->_style = "";

      JQMDesignEnd($this);
   }
}

/**
 * Standard form checkbox, it inherits from CheckBox but have specific design enhancements provided by jquery mobile.
 *
 * @see CheckBox
 *
 * @example JQueryMobile/mcheckbox.php
 */
class MCheckBox extends CustomMCheckBox
{
   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getTheme()    {return $this->readTheme();}
   function setTheme($val)    {$this->writeTheme($val);}

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
}

/**
 * Base class for MComboBox control
 */
class CustomMComboBox extends ListBox
{
   protected $_theme = "";
   protected $_isnative = 0;
   protected $_systemIcon = "";
   protected $_icon = "";
   protected $_iconPos = "ipRight";
   protected $_roundedcorners = 1;
   protected $_iconshadow = 1;
   protected $_shadow = 1;
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * enNone: No style is taken from the CSS file or Theme attribute
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   /**
    * Indicates if the component drop a shadow
    */
   function readShadow()    {return $this->_shadow;}
   function writeShadow($value)    {$this->_shadow = $value;}
   function defaultShadow()    {return 1;}

   /**
    * Indicates if the component's icons drops a shadow
    */
   function readIconShadow()    {return $this->_iconshadow;}
   function writeIconShadow($value)    {$this->_iconshadow = $value;}
   function defaultIconShadow()    {return 1;}

   /**
    * Indicates if the component will display rounded corners
    */
   function readRoundedCorners()    {return $this->_roundedcorners;}
   function writeRoundedCorners($value)    {$this->_roundedcorners = $value;}
   function defaultRoundedCorners()    {return 1;}


   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
   function defaultTheme()    {return "";}

   /**
    * Indicate the system icon to apply to the control.
    *
    * Different system icons can be assigned to this control.
    * To use a custom icon use the Icon property instead.
    *
    * @see readIcon()
    *
    * @return string
    */
   function readSystemIcon()    {return $this->_systemIcon;}
   function writeSystemIcon($val)    {$this->_systemIcon = $val;}
   function defaultSystemIcon()    {return "";}

   /**
    * Select an image as a custom icon.
    *
    * When a image is selected as icon the SystemIcon property is not taked in consideration and the
    * custom icon indicated in this property will be rendered instead.
    *
    * @return string
    */
   function readIcon()    {return $this->_icon;}
   function writeIcon($val)    {$this->_icon = $val;}
   function defaultIcon()    {return "";}

   /**
    * Indicate the position of the icon.
    *
    * Choose the ipNoText to display just the icon with no text.
    *
    * @return string
    */
   function readIconPos()    {return $this->_iconPos;}
   function writeIconPos($val)    {$this->_iconPos = $val;}
   function defaultIconPos()    {return "ipLeft";}

   /**
    * If set to true the component's drop down menu will render in the browser native mode
    *
    * In native mode list MultiSelect is not considered and defaults to false.
    *
    * @see readMultiSelect()
    *
    * @return boolean
    */
   function readIsNative()    {return $this->_isnative;}
   function writeIsNative($value)    {$this->_isnative = $value;}
   function defaultIsNative()    {return 0;}

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->size = 1;

      $this->_width = 200;
      $this->_height = 43;
   }

   /**
    * This function is called by MPage when outputs the pagecreate event
    * it is the moment to put all the javascript code that we want to be executed when the page is created
    * it is the right moment to bind events to the controls
    */
   function pagecreate()
   {
      $output = "";
      if($this->_isnative == 0)
         $target = "#{$this->_name}-menu";

      else
         $target = "#$this->_name";

      $output .= bindEvents("jQuery('$target')", $this, 'click');
      $output .= bindEvents("jQuery('$target')", $this, 'dblclick');
      $output .= bindEvents("jQuery('#$this->_name')", $this, 'change');
      $output .= bindJSEvent("jQuery('$target')", $this, 'tap');
      $output .= bindJSEvent("jQuery('$target')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('$target')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('$target')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('$target')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('$target')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('$target')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('$target')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('$target')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('$target')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('$target')", $this, 'vmousecancel');
      return $output;
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);

      $groups = array();

      if( ! is_array($this->_items))
         $this->_items = array();

      //Now we will populate the NestedAttributes array for every element
      foreach($this->_items as $key=>$item)
      {
         $groups[$key] = $item['Group'];

         $data = array();
         if($item['Disabled'] == "true")
            $data["disabled"] = "disabled";

         if($item['PlaceHolder'] == "true")
            $data["data-placeholder"] = "true";

         $this->_nestedattributes[$item['Value']] = $data;
      }

      //let's reorder the array based on groups so all the elements that belong to the same group are together
      array_multisort($groups, $this->_items);

   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();
      MHeader($this);
   }

   function dumpCSS()
   {
      //If there is a custom icon we have to create the CSS class to handle it an put it on the header
      if($this->_icon != "")
      {
         ?>
  .ui-icon-<?php echo $this->_name?> {
    background-image:url(<?php echo $this->_icon?>);
    background-size: 18px 18px;
  }
         <?php
      }
   }

   function dumpContents()
   {
      JQMDesignStart($this);

      if($this->_enhancement == "enNone")
      {
         $this->_attributes['data-role'] = "none";
      }
      else
      {
        //Use the style attribute to prevent adding the inline style attributes to the component
        if($this->_enhancement=="enFull" && $this->_style=="")
          $this->_style=".";
        //Get the theme string
        if($this->_theme != "")
        {
          $RealTheme=RealTheme($this);
          $this->_attributes = array_merge($this->_attributes, $RealTheme->themeVal());
        }

         // get the icon if any
         $this->_attributes = array_merge($this->_attributes, iconVal($this));

         //is native support
         if( ! $this->_isnative)
            $this->_attributes["data-native-menu"] = "false";


         if( ! $this->_roundedcorners)
            $this->_attributes['data-corners'] = "false";

         if( ! $this->_iconshadow)
            $this->_attributes['data-iconshadow'] = "false";

         if( ! $this->_shadow)
            $this->_attributes['data-shadow'] = "false";
      }
      parent::dumpContents();


      //reset style if needed
      if($this->_style == ".")
         $this->_style = "";

      JQMDesignEnd($this);
   }
}

/**
 * Standard form ListBox, it inherits from ListBox but have specific design enhancements provided by jquery mobile.
 * Control can be shown like the browser's native mode or using the jquery special enhancement
 *
 * @see ListBox
 *
 * @example JQueryMobile/mcombobox.php
 */
class MComboBox extends CustomMComboBox
{

   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getRoundedCorners()    {return $this->readroundedcorners();}
   function setRoundedCorners($value)    {$this->writeroundedcorners($value);}

   function getIconShadow()    {return $this->readiconshadow();}
   function setIconShadow($value)    {$this->writeiconshadow($value);}

   function getShadow()    {return $this->readshadow();}
   function setShadow($value)    {$this->writeshadow($value);}

   function getTheme()    {return $this->readTheme();}
   function setTheme($val)    {$this->writeTheme($val);}

   function getIcon()    {return $this->readIcon();}
   function setIcon($val)    {$this->writeIcon($val);}

   function getSystemIcon()    {return $this->readSystemIcon();}
   function setSystemIcon($val)    {$this->writeSystemIcon($val);}

   function getIconPos()    {return $this->readIconPos();}
   function setIconPos($val)    {return $this->writeIconPos($val);}

   function getIsNative()    {return $this->readIsnative();}
   function setIsNative($value)    {$this->writeisnative($value);}

   function getOnChange()    {return $this->readonchange();}
   function setOnChange($value)    {$this->writeonchange($value);}

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

}

/**
 * Base class for MCollapsibleSe
 */
class CustomMCollapsibleSet extends FocusControl
{
   protected $_theme = "";
   protected $_panels = array();
   protected $_panelindex =  - 1;
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   protected $_jsoncollapse = "";
   protected $_jsonexpand = "";

   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
   function defaultTheme()    {return "";}

   /**
    * Event fired when one panel is expanded.
    *
    * Once one panel is expanded, all the others fire the OnCollapse() event
    *
    * @see readjsOnCollapse()
    */
   function readjsOnExpand()    {return $this->_jsonexpand;}
   function writejsOnExpand($value)    {$this->_jsonexpand = $value;}
   function defaultjsOnExpand()    {return "";}

   /**
    * Event fired when one panel is collapsed
    */
   function readjsOnCollapse()    {return $this->_jsoncollapse;}
   function writejsOnCollapse($value)    {$this->_jsoncollapse = $value;}
   function defaultjsOnCollapse()    {return "";}

   /**
    *  List of the different panels included in the MAccordion
    *
    * @return array
    */
   function readPanels()    {return $this->_panels;}
   function writePanels($value)    {$this->_panels = $value;}
   function defaultPanels()    {return array();}

   /**
    * Identifies the selected panel on a peneled control, use it to set the active
    * panel you want to set the MAccordion, the index must be the in sync with
    * the Panels property
    *
    * @see getActiveLayer()
    *
    * @return integer
    */
   protected function readPanelIndex()    {return $this->_panelindex;}
   protected function writePanelIndex($value)    {$this->_panelindex = $value;}
   function defaultPanelIndex()    {return -1;}

   /**
    * This getter is overriden to sync the layers with the Panels
    *
    * @see Control::getLayer()
    * @return string
    *
    */
   function getActiveLayer()
   {
      $result = "";

      if(($this->_panelindex >= 0) && ($this->_panelindex <= count($this->_panels)))
      {
         $result = $this->_panels[$this->_panelindex];
      }
      else
      {
         if(count($this->_panels) >= 1)
         {
            $result = $this->_panels[0];
         }
      }

      return ($result);
   }

   function setActiveLayer($value)
   {
      $key = array_search($value, $this->_panels);
      if($key !== false)
      {
         $this->_panelindex = $key;
      }
   }

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csAcceptsControls=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->Layout->Type = "BOXED_LAYOUT";

      $this->_width = 300;
      $this->_height = 300;
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();

      MHeader($this);
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsoncollapse);
      $this->dumpJSEvent($this->_jsonexpand);
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   /**
    * This function is called by MPage when outputs the pagecreate event
    * it is the moment to put all the javascript code that we want to be executed when the page is created
    * it is the right moment to bind events to the controls
    */
   function pagecreate()
   {
      $output = "";
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'expand');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'collapse');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'click');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'dblclick');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'mouseup');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'mousedown');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'tap');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('.{$this->_name}_class')", $this, 'vmousecancel');
      return $output;
   }

   function dumpContents()
   {

      JQMDesignStart($this, -10);

      //Get the theme string
      $theme = "";
      if($this->_theme != "")
      {
        $RealTheme=RealTheme($this);
        $theme = $RealTheme->themeVal(1);
      }

      echo "<div data-role=\"collapsible-set\" id=\"$this->_name\" >";

      $activelayer = $this->ActiveLayer;

      //a note about how to use the component
      if(count($this->_panels) == 0 && ($this->ControlState & csDesigning) == csDesigning)
      {
         echo "<p style=\"font-size:11px;color:black;padding:10px;\">";
         echo "This control renders a group of MCollapsible panels.<br>";
         echo "Use the property <b>Panels</b> to create them, one per line.<br>";
         echo "Use the property <b>ActiveLayer</b> to indicate the active panel where you want to add content.";
         echo "<p>";
      }

      if( ! is_array($this->_panels))
         $this->_panels = array();

      foreach($this->_panels as $k=>$layer)
      {
         if($activelayer == $layer)
            $collapsed = "data-collapsed=\"false\"";
         else
            $collapsed = "";

         //Use the style attribute to prevent adding the inline style attributes to the component
         if($this->_enhancement == "enFull")
         {
            $font = "";
            $color = "";
         }
         else
         {
            $font = $this->Font->FontString;

            if($this->_color != "")
               $color = "background-color:$this->_color;";
         }
         //we need to include as an attribute the top offset for the inner element

         echo "<div data-role=\"collapsible\" class=\"{$this->_name}_class\" id=\"" . $this->_name . $k . "\" $collapsed $theme >\n";
         echo "<h1 style=\"$font\">$layer</h1>\n";

         if(($this->ControlState & csDesigning) != csDesigning)
         {
            echo "<div style=\"$color$font\">";
            $this->ActiveLayer = $layer;
            $this->callEvent('onshow', array());
            $this->Layout->dumpLayoutContents();
            echo "</div>";
         }
         else
         {
            echo "<span style=\"font-size:11px;color:black\">";
            echo "Place the content for panel <b>$layer</b> anywhere in the box.<br>";
            echo "The elements placed on the Panel will be rendered one after the other ";
            echo "ordered by its top value";
            echo "<span>";
         }
         echo "</div>";
      }

      echo "</div>";
      JQMDesignEnd($this);
   }

}

/**
 * This class renders a collection of Collapsible containers like MCollapsible
 * By clicking one of them the rest get closed
 *
 * @example JQueryMobile/maccordion.php
 */
class MCollapsibleSet extends CustomMCollapsibleSet
{

   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getTheme()    {return $this->readtheme();}
   function setTheme($value)    {$this->writetheme($value);}

   function getPanels()    {return $this->readpanels();}
   function setPanels($value)    {$this->writepanels($value);}

   function getjsOnExpand()    {return $this->readjsonexpand();}
   function setjsOnExpand($value)    {$this->writejsonexpand($value);}

   function getjsOnCollapse()    {return $this->readjsoncollapse();}
   function setjsOnCollapse($value)    {$this->writejsoncollapse($value);}

   function getjsOnClick()    {return $this->readjsonclick();}
   function setjsOnClick($value)    {$this->writejsonclick($value);}

   function getjsOnDblClick()    {return $this->readjsondblclick();}
   function setjsOnDblClick($value)    {$this->writejsondblclick($value);}

   function getjsOnMouseUp()    {return $this->readjsonmouseup();}
   function setjsOnMouseUp($value)    {$this->writejsonmouseup($value);}

   function getjsOnMouseDown()    {return $this->readjsonmousedown();}
   function setjsOnMouseDown($value)    {$this->writejsonmousedown($value);}

   function getFont()    {return $this->readfont();}
   function setFont($value)    {$this->writefont($value);}

   function getParentFont()    {return $this->readparentfont();}
   function setParentFont($value)    {$this->writeparentfont($value);}

   function getParentColor()    {return $this->readparentcolor();}
   function setParentColor($value)    {$this->writeparentcolor($value);}

   function getColor()    {return $this->readcolor();}
   function setColor($value)    {$this->writecolor($value);}

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
}

class MMappingFields extends Persistent
{
   protected $_caption = "";
   protected $_mlist = "";
   protected $_isdivider = "";
   protected $_icon = "";
   protected $_thumbnail = "";
   protected $_isicon = "";
   protected $_extrabuttonlink = "";
   protected $_extrabuttonhint = "";
   protected $_countervalue = "";
   protected $_link = "";
   protected $_parentfield = "";
   protected $_idfield = "";
   protected $_baseparentfieldvalue = "";

   public $_control = null;

   function readOwner()
   {
      return ($this->_control);
   }

   /**
    * Parent value for the elements in the base level
    */
   function getBaseParentFieldValue()    {return $this->_baseparentfieldvalue;}
   function setBaseParentFieldValue($value)    {$this->_baseparentfieldvalue = $value;}
   function defaultBaseParentFieldValue()    {return "";}

   /**
    * Field that identifies the item
    */
   function getIdField()    {return $this->_idfield;}
   function setIdField($value)    {$this->_idfield = $value;}
   function defaultIdField()    {return "";}

   /**
    * Field that identifies the item's parent
    */
   function getParentField()    {return $this->_parentfield;}
   function setParentField($value)    {$this->_parentfield = $value;}
   function defaultParentField()    {return "";}

   /**
    * Link associated to the item
    */
   function getLink()    {return $this->_link;}
   function setLink($value)    {$this->_link = $value;}
   function defaultLink()    {return "";}

   /**
    * A numeric value that will be represented in a bubble on the right side of the item, like a counter
    */
   function getCounterValue()    {return $this->_countervalue;}
   function setCounterValue($value)    {$this->_countervalue = $value;}
   function defaultCounterValue()    {return "";}

   /**
    * Hint text for the extra button link
    */
   function getExtraButtonHint()    {return $this->_extrabuttonhint;}
   function setExtraButtonHint($value)    {$this->_extrabuttonhint = $value;}
   function defaultExtraButtonHint()    {return "";}

   /**
    * Secondary item's link that will render as a button
    */
   function getExtraButtonLink()    {return $this->_extrabuttonlink;}
   function setExtraButtonLink($value)    {$this->_extrabuttonlink = $value;}
   function defaultExtraButtonLink()    {return "";}

   /**
    * Indicate if the thumbnail is an icon
    */
   function getIsIcon()    {return $this->_isicon;}
   function setIsIcon($value)    {$this->_isicon = $value;}
   function defaultisIcon()    {return "";}

   /**
    * Thumbnail to be represented on the left side of the item
    */
   function getThumbnail()    {return $this->_thumbnail;}
   function setThumbnail($value)    {$this->_thumbnail = $value;}
   function defaultThumbnail()    {return "";}

   /**
    * A reference to another MList element that will be rendered as a nested list
    */
   function getMList()    {return $this->_mlist;}
   function setMList($value)    {$this->_mlist = $value;}
   function defaultMList()    {return "";}

   /**
    * Right side item's icon
    */
   function getIcon()    {return $this->_icon;}
   function setIcon($value)    {$this->_icon = $value;}
   function defaultIcon()    {return "";}

   /**
    * indicates if the items is going to be rendered as a list divider
    */
   function getIsDivider()    {return $this->_isdivider;}
   function setIsDivider($value)    {$this->_isdivider = $value;}
   function defaultIsDivider()    {return "";}

   /**
    * Item's Caption
    */
   function getCaption()    {return $this->_caption;}
   function setCaption($value)    {$this->_caption = $value;}
   function defaultCaption()    {return "";}
}
/**
 * Base class for MList control
 */
class CustomMList extends MControl
{
   protected $_dividertheme = "";
   protected $_type = "tUnordered";
   protected $_systemicon = "siGear";
   protected $_icon = "";
   protected $_extrabuttontheme = "";
   protected $_iswrapped = 0;
   protected $_isfiltered = 0;
   protected $_items = array();
   protected $_countertheme = "";
   protected $_datasource = null;

   protected $_datamapping = null;

   protected $_onemptylist = "";

   /**
    * Event Triggered when the list has no values after updating a DataSet
    */
   function readOnEmptyList()    {return $this->_onemptylist;}
   function writeOnEmptyList($value)    {$this->_onemptylist = $value;}
   function defaultOnEmptyList()    {return "";}

   /**
    * When using a DataSet to fillup the List,indicate the fields that can be mapped to the DataSet columns
    *
    */
   function readDataMapping()    {return $this->_datamapping;}
   function writeDataMapping($value)    {if(is_object($value))           $this->_datamapping = $value;}
   function defaultDataMapping()    {return null;}

   /**
    * DataSource property allows you to link this control to a dataset containing
    * rows of data.
    *
    * To make it work, you must also assign DataField property with
    * the name of the column you want to use
    *
    * @return Datasource
    */
   function readDataSource()    {return $this->_datasource;}
   function writeDataSource($value)    {$this->_datasource = $this->fixupProperty($value);}
   function defaultDataSource()    {return "";}

   /**
    * Select a MobileTheme component to handle the Counter Bubble's color theme
    *
    * MobileTheme components indicate the color variation of a control.
    * Different controls asigned to the same MobileTheme will use the same color variation when rendered.
    *
    * @see MobileTheme
    *
    * @return object returns the MobileTheme assigned
    */
   function readCounterTheme()    {return $this->_countertheme;}
   function writeCounterTheme($value)    {$this->_countertheme = $this->fixupProperty($value);}
   function defaultCounterTheme()    {return "";}

   /**
    * Items to include on the list. They can be other existing MList control
    *
    * if the item includes a link to another MList control, only the Caption attribute is considered
    *
    * @return array
    */
   function readItems()    {return $this->_items;}
   function writeItems($value)    {$this->_items = $value;}
   function defaultItems()    {return array();}

   /**
    * Add a Search Filter on the top of the list.
    *
    * By entering text on the Search Filter it will dinamically show anly tha elements taht contani nthe text
    *
    * @return boolean
    */
   function readisFiltered()    {return $this->_isfiltered;}
   function writeisFiltered($value)    {$this->_isfiltered = $value;}
   function defaultisFiltered()    {return 0;}

   /**
    * Indicate if the list is going to be Wrapped in a styled container
    *
    * @return boolean
    */
   function readisWrapped()    {return $this->_iswrapped;}
   function writeisWrapped($value)    {$this->_iswrapped = $value;}
   function defaultisWrapped()    {return 0;}

   /**
    * Select a MobileTheme component to handle the Extra Button's color theme
    *
    * MobileTheme components indicate the color variation of a control.
    * Different controls asigned to the same MobileTheme will use the same color variation when rendered.
    *
    * @see MobileTheme
    *
    * @return object returns the MobileTheme assigned
    */
   function readExtraButtonTheme()    {return $this->_extrabuttontheme;}
   function writeExtraButtonTheme($value)    {$this->_extrabuttontheme = $this->fixupProperty($value);}
   function defaultExtraButtonTheme()    {return "";}

   /**
    * Select an image as a custom icon to display on the Items with the Extra Button.
    *
    * When a image is selected as icon the SystemIcon property is not taked in consideration and the
    * custom icon indicated in this property will be rendered instead.
    *
    * @return string
    */
   function readIcon()    {return $this->_icon;}
   function writeIcon($value)    {$this->_icon = $value;}
   function defaultIcon()    {return "";}

   /**
    *  Indicate the System icon to display on the Items with the Extra Button
    *
    * Different system icons can be assigned to this control.
    * To use a custom icon use the Icon property instead.
    *
    * @see readIcon()
    *
    * @return string
    */
   function readSystemIcon()    {return $this->_systemicon;}
   function writeSystemIcon($value)    {$this->_systemicon = $value;}
   function defaultSystemIcon()    {return "siGear";}

   /**
    * Indicate the type of list to generate
    */
   function readType()    {return $this->_type;}
   function writeType($value)    {$this->_type = $value;}
   function defaultType()    {return "tUnordered";}

   /**
    * Select a MobileTheme component to handle the divider's color theme
    *
    * MobileTheme components indicate the color variation of a control.
    * Different controls asigned to the same MobileTheme will use the same color variation when rendered.
    *
    * @see MobileTheme
    *
    * @return object returns the MobileTheme assigned
    */
   function readDividerTheme()    {return $this->_dividertheme;}
   function writeDividerTheme($value)    {$this->_dividertheme = $this->fixupProperty($value);}
   function defaultDividerTheme()    {return "";}


   function __construct($aowner = null)
   {
      parent::__construct($aowner);

      $this->_datamapping = new MMappingFields();
      $this->_datamapping->_control = $this;

      $this->_width = 300;
      $this->_height = 300;
   }

   function loaded()
   {
      parent::loaded();
      $this->writeDividerTheme($this->_dividertheme);
      $this->writeExtraButtonTheme($this->_extrabuttontheme);
      $this->writeCounterTheme($this->_countertheme);
      $this->writeDataSource($this->_datasource);

   }

   /**
    * Helper function that checks if a passed array has a value in the key passed
    * If so it returns its value otherwise it returns the $default value
    *
    * @param array $row The array of elements
    * @param string $field the DataMapping property to evaluate
    * @param string $default the default value to return
    *
    * @return string
    */
   function mappedFieldValue($row, $field, $default = "")
   {

      if(is_array($row) && $this->_datamapping->$field != "" && isset($row[$this->_datamapping->$field]))
      {
         return $row[$this->_datamapping->$field];
      }
      else
         return $default;
   }

   /**
    * Here we check if there is a parameter indicating that the dataset has to be refreshed
    *
    */
   function preinit()
   {
      parent::preinit();

      $key = md5($this->owner->Name . $this->Name . $this->Left . $this->Top . $this->Width . $this->Height);
      $list = $this->input->list;
      $urlid = $this->input->id;

      $mappedfields = $this->_datamapping;
      $parent_id = $mappedfields->BaseParentFieldValue;
      $filter_id = $mappedfields->ParentField;

      //check for the id param to update the dataset if any
      if((is_object($list)) && ($list->asString() == $key))
      {
         if(is_object($urlid))
            $parent_id = $urlid->asString();
      }

      if($this->_datasource != null && $this->_datasource->Dataset)
      {
         $query = $this->_datasource->Dataset;

         if($filter_id != "")
         {
            $this->_datasource->Dataset->filter = "$filter_id=" . $parent_id;
            $this->_datasource->Dataset->refresh();

         }

         $query->Open();
         //lets check if there aren't  results in the dataset and fire the OnEmptyList event
         if($query->EOF && $query->BOF && $this->_onemptylist != "")
         {
            $this->callEvent('onemptylist', array());
         }

         $query->Close();
      }
   }

   /**
    * If we have a dataset we have to populate the items array with the results according with the datamapping values
    */
   function init()
   {
      parent::init();

      $key = md5($this->owner->Name . $this->Name . $this->Left . $this->Top . $this->Width . $this->Height);

      if($this->_datasource != null && $this->_datasource->Dataset)
      {

         $this->_items = array();

         $query = $this->_datasource->Dataset;

         $query->Open();
         $query->First();

         $k = 0;

         while( ! $query->EOF)
         {
            $fields = $query->Fields;

            $this->_items[$k]['Caption'] = $this->mappedFieldValue($fields, "Caption");
            $this->_items[$k]['isDivider'] = $this->mappedFieldValue($fields, "IsDivider", "false");
            $this->_items[$k]['Icon'] = $this->mappedFieldValue($fields, "Icon");;
            $this->_items[$k]['MList'] = $this->mappedFieldValue($fields, "MList");;
            $this->_items[$k]['Thumbnail'] = $this->mappedFieldValue($fields, "Thumbnail");
            $this->_items[$k]['isIcon'] = $this->mappedFieldValue($fields, "IsIcon", "false");
            $this->_items[$k]['ExtraButtonLink'] = $this->mappedFieldValue($fields, "ExtraButtonLink");
            $this->_items[$k]['ExtraButtonHint'] = $this->mappedFieldValue($fields, "ExtraButtonHint");
            $this->_items[$k]['CounterValue'] = $this->mappedFieldValue($fields, "CounterValue");

            $itemid = $this->mappedFieldValue($fields, "IdField");
            $itemlink = $this->mappedFieldValue($fields, "Link");

            if($itemid != "")
            {
               $url = $_SERVER['PHP_SELF'] . "?list=$key&id=" . $itemid;
               // if the MPage has useAjax enabled then we have to mark the links as ajax enabled so the click will be handled by Ajax
               if($this->Owner->UseAjax == 1)
                  $this->_items[$k]['AjaxLink'] = "true";
            }
            else
               $url = "";

            $this->_items[$k]['Link'] = $itemlink != ""? $itemlink: $url;
            $query->next();
            $k++;
         }

      }
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();
      MHeader($this);
   }

   function dumpCSS()
   {
      //If there is a custom icon we have to create the CSS class to handle it an put it on the header
      if($this->_icon != "")
      {
         ?>
  .ui-icon-<?php echo $this->_name?> {
    background-image:url(<?php echo $this->_icon?>);
    background-size: 18px 18px;
  }
         <?php
      }
   }

   /**
    * Generates the content of the MList
    */
   function fillMList()
   {
      $output = "";
      if($this->_enhancement == "enFull")
         $style = "";
      else
      {
         $font = $this->Font->FontString;
         if($this->_color != "")
            $font .= "background:$this->_color;";

         if(trim($font) != "")
            $style = "style=\"$font\"";
         else
            $style = "";
      }

      if( ! is_array($this->_items))
         $this->_items = array();

      foreach($this->_items as $item)
      {
         // it is a divider?
         if(isset($item['IsDivider']) && $item['IsDivider'] == "true")
         {
            $divider = "data-role=\"list-divider\"";
         }
         else
         {
            $divider = "";
         }
         // custom icon
         if(isset($item['Icon']) && $item['Icon'] != "")
            $liicon = "data-icon=\"" . systemIcon($item['Icon']) . "\"";
         else
            $liicon = "";

         echo "\t<li $liicon $divider $style >";
         if( ! isset($item['MList']) || $item['MList'] == "")
         {

            if(isset($item['IsDivider']) && $item['IsDivider'] == "true")
            {
               echo $item['Caption'];
            }
            else
            {

               //the link
               if(isset($item['Link']) && $item['Link'] != "")
               {
                  $ajax = "";
                  if(isset($item['AjaxLink']) && $item['AjaxLink'] == 'true')
                  {
                     $ajax = " data-ajax=\"true\" rel=\"external\" ";

                  }
                  echo "<a $style href=\"" . $item['Link'] . "\"$ajax>";
               }

               //check for thumbnail
               if(isset($item['Thumbnail']) && $item['Thumbnail'] != "")
               {
                  //if the thumb is an icon
                  if(isset($item['IsIcon']) && $item['IsIcon'] == 'true')
                     $isicon = "class=\"ui-li-icon\"";
                  else
                     $isicon = "";
                  echo "<img $isicon src=\"" . $item['Thumbnail'] . "\">";
               }



               echo $item['Caption'];

               if(isset($item['Link']) && $item['Link'] != "")
                  echo "</a>";

               //the extra button
               if(isset($item['ExtraButtonLink']) && $item['ExtraButtonLink'] != "")
               {
                  echo "<a href=\"" . $item['ExtraButtonLink'] . "\">" . $item['ExtraButtonHint'] . "</a>";
               }

               //the numeric value on the right
               if(isset($item['CounterValue']) && $item['CounterValue'] != "")
                  echo "<span class=\"ui-li-count\">" . $item['CounterValue'] . "</span>";
            }
         }
         else
         {
            echo $item['Caption'];
            if(($this->ControlState & csDesigning) != csDesigning)
            {
               //Get the object und unrelate it to us so it can be dumped
               $item['MList'] = $this->fixupProperty($item['MList']);
               $visibleStatus = $item['MList']->_visible;
               $item['MList']->_visible = 1;
               $item['MList']->dumpContents();
               $item['MList']->_visible = $visibleStatus;
            }
            else
            {
               echo "<ul><li></li></ul>";
            }
         }
         echo "</li>\n";
      }

   }

   function dumpContents()
   {

      JQMDesignStart($this);
      //Get the theme strings
      $theme = "";
      $dividertheme = "";
      $extrabuttontheme = "";
      $countertheme = "";

      if($this->_theme != "")
      {
        $RealTheme=RealTheme($this);
        $theme = $RealTheme->themeVal(1);
      }

      if($this->_dividertheme != "")
      {
        $RealTheme=RealTheme($this,"DividerTheme");
        $arraydividertheme = $RealTheme->themeVal();
        $dividertheme = "data-divider-theme =\"" . $arraydividertheme['data-theme'] . "\"";
      }

      //Get the extra button's theme string
      if($this->_extrabuttontheme != "")
      {
        $RealTheme=RealTheme($this,"ExtraButtonTheme");
        $arrayextrabuttontheme = $RealTheme->themeVal();
        $extrabuttontheme = "data-split-theme =\"" . $arrayextrabuttontheme['data-theme'] . "\"";
      }

      //Get the counter bubble's theme string
      if($this->_countertheme != "")
      {
        $RealTheme=RealTheme($this,"CounterTheme");
        $arraycountertheme = $RealTheme->themeVal();
        $countertheme = "data-count-theme =\"" . $arraycountertheme['data-theme'] . "\"";
      }

      // get the icon for the extra button
      if($this->_icon != "")
         $icon = "data-split-icon=\"$this->_name\"";
      else
         if($this->_systemicon != "")
            $icon = "data-split-icon=\"" . systemIcon($this->_systemicon) . "\"";

         // the type of list
      if($this->_type == "tUnordered")
         $tag = "ul";
      else
         $tag = "ol";

      //wrapped
      if($this->_iswrapped)
         $wrapped = "data-inset=\"true\"";
      else
         $wrapped = "";

      // Filter search bar
      if($this->_isfiltered)
         $filtered = "data-filter=\"true\"";
      else
         $filtered = "";

      echo "<$tag data-role=\"listview\" id=\"$this->_name\" $theme $dividertheme $extrabuttontheme $countertheme $icon $wrapped $filtered >\n";

      $this->fillMList();

      echo "</$tag>";

      JQMDesignEnd($this);
   }

}

/**
 * This control renders an ordered or unordered list of items. Allow nested MList.
 * This items can have:
 * - One link
 * - Caption that allows HTML tags
 * - A Thumbnail image
 * - An Extra Button with a secondary Link
 * - Another MList control
 *
 * @example JQueryMoblie/mlist.php
 */
class MList extends CustomMList
{

   function getItems()    {return $this->readitems();}
   function setItems($value)    {$this->writeitems($value);}

   function getTheme()    {return $this->readtheme();}
   function setTheme($value)    {$this->writetheme($value);}

   function getExtraButtonTheme()    {return $this->readextrabuttontheme();}
   function setExtraButtonTheme($value)    {$this->writeextrabuttontheme($value);}

   function getisFiltered()    {return $this->readisfiltered();}
   function setisFiltered($value)    {$this->writeisfiltered($value);}

   function getisWrapped()    {return $this->readiswrapped();}
   function setisWrapped($value)    {$this->writeiswrapped($value);}

   function getIcon()    {return $this->readicon();}
   function setIcon($value)    {$this->writeicon($value);}

   function getSystemIcon()    {return $this->readsystemicon();}
   function setSystemIcon($value)    {$this->writesystemicon($value);}

   function getType()    {return $this->readtype();}
   function setType($value)    {$this->writetype($value);}

   function getDividerTheme()    {return $this->readdividertheme();}
   function setDividerTheme($value)    {$this->writedividertheme($value);}

   function getCounterTheme()    {return $this->readcountertheme();}
   function setCounterTheme($value)    {$this->writecountertheme($value);}

   function getVisible()    {return $this->readvisible();}
   function setVisible($value)    {$this->writevisible($value);}

   function getDataSource()    {return $this->readdatasource();}
   function setDataSource($value)    {$this->writedatasource($value);}

   function getDataMapping()    {return $this->readdatamapping();}
   function setDataMapping($value)    {$this->writedatamapping($value);}

   //events
   function getOnEmptyList()    {return $this->readonemptylist();}
   function setOnEmptyList($value)    {$this->writeonemptylist($value);}


   function getjsOnMouseUp()    {return $this->readjsonmouseup();}
   function setjsOnMouseUp($value)    {$this->writejsonmouseup($value);}

   function getjsOnMouseDown()    {return $this->readjsonmousedown();}
   function setjsOnMouseDown($value)    {$this->writejsonmousedown($value);}
}

/**
 * Base class for MInputGroup control
 */
class CustomMInputGroup extends RadioGroup
{
   protected $_theme = "";
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * enNone: No style is taken from the CSS file or Theme attribute
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
   function defaultTheme()    {return "";}

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   /*
   * Write the Javascript section to the header
   */
   function dumpJavascript()
   {
      if($this->_enabled == 1)
      {
         if( ! defined('RadioGroupClick'))
         {
            define('RadioGroupClick', 1);
         }
      }
      parent::dumpJavascript();
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->_width = 200;
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
   }

   /**
    * This function is called by MPage when outputs the pagecreate event
    * it is the moment to put all the javascript code that we want to be executed when the page is created
    * it is the right moment to bind events to the controls
    */
   function pagecreate()
   {
      $output = "";

      $output .= bindEvents("jQuery('input[name={$this->_name}]').next('label')", $this, 'click');
      $output .= bindJSEvent("jQuery('input[name={$this->_name}]').next('label')", $this, 'tap');
      $output .= bindJSEvent("jQuery('input[name={$this->_name}]').next('label')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('input[name={$this->_name}]').next('label')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('input[name={$this->_name}]').next('label')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('input[name={$this->_name}]').next('label')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('input[name={$this->_name}]').next('label')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('input[name={$this->_name}]').next('label')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('input[name={$this->_name}]').next('label')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('input[name={$this->_name}]').next('label')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('input[name={$this->_name}]').next('label')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('input[name={$this->_name}]').next('label')", $this, 'vmousecancel');
      return $output;
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();

      MHeader($this);
   }

   function dumpContents()
   {
      JQMDesignStart($this);
      if($this->_enhancement == "enNone")
      {
         $this->_nestedattributes['data-role'] = "none";
      }
      else
      {

        //Use the style attribute to prevent adding the inline style attributes to the component
        if($this->_enhancement=="enFull" && $this->_style=="")
          $this->_style=".";

      //Get the theme string
      if($this->_theme != "")
      {
        $RealTheme=RealTheme($this);
        $this->_nestedattributes = array_merge($this->_nestedattributes, $RealTheme->themeVal());
      }
         $this->_attributes['data-role'] = "controlgroup";
      }
      if($this->_orientation == "orHorizontal")
         $this->_attributes['data-type'] = "horizontal";
      else
         $this->_columns = 1;

      parent::dumpContents();

      //reset style if needed
      if($this->_style == ".")
         $this->_style = "";

      JQMDesignEnd($this);
   }
}

/**
 * Standard form radio button group, it inherits from RadioGroup but have specific design enhancements provided by jquery mobile.
 * Setting the Orientation in "orHorizontal" will render it as a group toggle buttons
 *
 * @example JQueryMobile/mradiogroup.php
 */

class MRadioGroup extends CustomMInputGroup
{
   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getTheme()    {return $this->readTheme();}
   function setTheme($val)    {$this->writeTheme($val);}

   /**
    * Indicate the orientation of the group
    * Setting the Orientation in "orHorizontal" will render it as a group toggle buttons
    */
   function getOrientation()    {return $this->readorientation();}
   function setOrientation($value)    {$this->writeorientation($value);}

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
}

/**
 * Base class for MCheckBoxGroup control
 */
class CustomMCheckBoxGroup extends CheckListBox
{
   protected $_theme = "";
   protected $_enhancement = "enFull";

   /**
    * Establish the enhancement degree of the component:
    * <pre>
    * enFull: All styles are defined by the CSS file or the Theme attribute
    * enStructure: Component's attributes like font or color are taken in consideration. CSS only applies to structure
    * enNone: No style is taken from the CSS file or Theme attribute
    * </pre>
    */
   function readEnhancement()    {return $this->_enhancement;}
   function writeEnhancement($value)    {$this->_enhancement = $value;}
   function defaultEnhancement()    {return "enFull";}

   protected $_jsonvmouseover = "";
   protected $_jsonvmousedown = "";
   protected $_jsonvmousemove = "";
   protected $_jsonvmouseup = "";
   protected $_jsonvclick = "";
   protected $_jsonvmousecancel = "";
   protected $_jsontap = "";
   protected $_jsontaphold = "";
   protected $_jsonswipe = "";
   protected $_jsonswipeleft = "";
   protected $_jsonswiperight = "";

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
   function defaultTheme()    {return "";}

   /**
    * This function is overwritten because we are going to handle the PHP events with jQuery
    */
   protected function getJSWrapperFunction($event)
   {
      $res = "";
      return $res;
   }

   /**
    * All the wrappers of PHP events get deleted so we can use jQuery instead
    */
   protected function addJSWrapperToEvents(&$events, $event, $jsEvent, $jsEventAttr)
   {
      if($jsEvent != null)
         $events = str_replace("$jsEventAttr=\"return $jsEvent(event)\"", "", $events);
   }

   /*
   * Write the Javascript section to the header
   */
   function dumpJavascript()
   {
      if($this->_enabled == 1)
      {
         if( ! defined('CheckListBoxClick'))
         {
            define('CheckListBoxClick', 1);
         }
      }
      parent::dumpJavascript();
   }

   function __construct($aowner = null)
   {
      parent::__construct($aowner);
      $this->ControlStyle = "csWebEngine=webkit";
      $this->ControlStyle = "csVerySlowRedraw=1";
      $this->ControlStyle = "csRenderAlso=MobileTheme";

      $this->_width = 200;
   }

   /**
    * This function is called by MPage when outputs the pagecreate event
    * it is the moment to put all the javascript code that we want to be executed when the page is created
    * it is the right moment to bind events to the controls
    */
   function pagecreate()
   {
      $output = "";

      $output .= bindEvents("jQuery('input[id^=\"{$this->_name}_\"]').next('label')", $this, 'click');
      $output .= bindJSEvent("jQuery('input[id^=\"{$this->_name}_\"]').next('label')", $this, 'tap');
      $output .= bindJSEvent("jQuery('input[id^=\"{$this->_name}_\"]').next('label')", $this, 'taphold');
      $output .= bindJSEvent("jQuery('input[id^=\"{$this->_name}_\"]').next('label')", $this, 'swipe');
      $output .= bindJSEvent("jQuery('input[id^=\"{$this->_name}_\"]').next('label')", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('input[id^=\"{$this->_name}_\"]').next('label')", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('input[id^=\"{$this->_name}_\"]').next('label')", $this, 'vmouseover');
      $output .= bindJSEvent("jQuery('input[id^=\"{$this->_name}_\"]').next('label')", $this, 'vmousedown');
      $output .= bindJSEvent("jQuery('input[id^=\"{$this->_name}_\"]').next('label')", $this, 'vmousemove');
      $output .= bindJSEvent("jQuery('input[id^=\"{$this->_name}_\"]').next('label')", $this, 'vmouseup');
      $output .= bindJSEvent("jQuery('input[id^=\"{$this->_name}_\"]').next('label')", $this, 'vclick');
      $output .= bindJSEvent("jQuery('input[id^=\"{$this->_name}_\"]').next('label')", $this, 'vmousecancel');
      return $output;
   }

   function dumpJsEvents()
   {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsontap);
      $this->dumpJSEvent($this->_jsontaphold);
      $this->dumpJSEvent($this->_jsonswipe);
      $this->dumpJSEvent($this->_jsonswipeleft);
      $this->dumpJSEvent($this->_jsonswiperight);
      $this->dumpJSEvent($this->_jsonvmouseover);
      $this->dumpJSEvent($this->_jsonvmousedown);
      $this->dumpJSEvent($this->_jsonvmousemove);
      $this->dumpJSEvent($this->_jsonvmouseup);
      $this->dumpJSEvent($this->_jsonvclick);
      $this->dumpJSEvent($this->_jsonvmousecancel);
   }

   function loaded()
   {
      parent::loaded();
      $this->writeTheme($this->_theme);
   }

   function dumpHeaderCode()
   {
      parent::dumpHeaderCode();

      MHeader($this);
   }

   function dumpContents()
   {
      JQMDesignStart($this);
      if($this->_enhancement == "enNone")
      {
         $this->_nestedattributes['data-role'] = "none";
      }
      else
      {
         //Use the style attribute to prevent adding the inline style attributes to the component
         if($this->_enhancement == "enFull" && $this->_style == "")
            $this->_style = ".";

        //Get the theme string
        if($this->_theme != "")
        {
          $RealTheme=RealTheme($this);
          $this->_nestedattributes = array_merge($this->_nestedattributes, $RealTheme->themeVal());
        }
         $this->_attributes['data-role'] = "controlgroup";
      }
      if($this->_orientation == "orHorizontal")
         $this->_attributes['data-type'] = "horizontal";
      else
         $this->_columns = 1;

      parent::dumpContents();

      //reset style if needed
      if($this->_style == ".")
         $this->_style = "";

      JQMDesignEnd($this);
   }
}

/**
 * Standard form checkbox group, it inherits from CheckListBox but have specific design enhancements provided by jquery mobile.
 * Setting the Orientation in "orHorizontal" will render it as a group toggle buttons
 *
 * @example JQueryMobile/mradiogroup.php
 */
class MCheckBoxGroup extends CustomMCheckBoxGroup
{
   function getEnhancement()    {return $this->readenhancement();}
   function setEnhancement($value)    {$this->writeenhancement($value);}

   function getTheme()    {return $this->readTheme();}
   function setTheme($val)    {$this->writeTheme($val);}

   /**
    * Indicate the orientation of the group
    * Setting the Orientation in "orHorizontal" will render it as a group toggle buttons
    */
   function getOrientation()    {return $this->readorientation();}
   function setOrientation($value)    {$this->writeorientation($value);}

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
}



class CustomMIFrame extends CustomMControl
{
   protected $_source = "";

   /**
    * Defines the URL of the file/document to show inside the frame.
    * The frame, when rendered, will load the contents specified by the URL
    * set on this property, it can be an URL to internet, intranet, a file
    * on your system, etc.
    *
    * <code>
    * <?php
    * //This line sets the Frame::Source property to an external document
    * $this->Frame1->Source="http://vcl4php.sourceforge.net";
    * ?>
    * </code>
    *
    * @return string
    */
   function readSource()    {return $this->_source;}
   function writeSource($value)    {$this->_source = $value;}
   function defaultSource()    {return "";}

   protected $_borders = 1;

   /**
    * Specifies whether or not to display a border around the frame
    *
    * Possible values for this property are:
    *
    * true  - This value specifies to the browser to draw a separator between
    *         this frame and every adjoining frame. This is the default value
    *
    * false - This value specifies to the browser not to draw a separator between
    *         this frame and every adjoining frame. Note that separators may be drawn
    *         next to this frame nonetheless if specified by other frames
    *
    * @return integer
    */
   function readBorders()    {return $this->_borders;}
   function writeBorders($value)    {$this->_borders = $value;}
   function defaultBorders()    {return 1;}


   protected $_scrolling = "fsAuto";

   /**
    * Determines if the frame is going to have scrollbars to allow the user
    * navigate through all the content.
    *
    * fsAuto will show scrollbars when needed, that is, when the content is
    * outside the viewport of the frame. fsYes will always show scrollbars
    * and fsNo won't show any.
    *
    * fsAuto - This value tells the browser to provide scrolling devices for the frame window when necessary. This is the default value.
    * fsYes  - This value tells the browser to always provide scrolling devices for the frame window.
    * fsNo   - This value tells the browser not to provide scrolling devices for the frame window.
    *
    * @return enum (fsAuto, fsYes, fsNo)
    */
   function readScrolling()    {return $this->_scrolling;}
   function writeScrolling($value)    {$this->_scrolling = $value;}
   function defaultScrolling()    {return "fsAuto";}


   function __construct($aowner = null)
   {
      parent::__construct($aowner);

      $this->_width = 300;
      $this->_height = 300;
   }

   function pagecreate()
   {
      $output = "";
      $output .= bindEvents("jQuery('#$this->_name').contents()", $this, 'click');
      $output .= bindEvents("jQuery('#$this->_name').contents()", $this, 'dblclick');
      $output .= bindJSEvent("jQuery('#$this->_name').contents()", $this, 'mouseup');
      $output .= bindJSEvent("jQuery('#$this->_name').contents()", $this, 'mousedown');
      $output .= bindJSEvent("jQuery('#$this->_name').contents()", $this, 'swipe');
      $output .= bindJSEvent("jQuery('#$this->_name').contents()", $this, 'swipeleft');
      $output .= bindJSEvent("jQuery('#$this->_name').contents()", $this, 'swiperight');
      $output .= bindJSEvent("jQuery('#$this->_name')", $this, 'vmouseover');

      return $output;
   }

   function dumpContents()
   {

      $scrolling = "overflow:auto;";//fsAuto
      switch($this->Scrolling)
      {
         case "fsYes":
            $scrolling = "overflow:scroll;";
            break;
         case "fsNo":
            $scrolling = "overflow:hidden;";
            break;
      }

      $style = "width:100%;height:100%;$scrolling";

      if($this->_borders)
         $style .= "border-width:{$this->_borders}px;border-style:solid;";

      $class = ($this->_style != "")? "class=\"$this->StyleClass\"": "";
      if( ! ($this->ControlState & csDesigning) == csDesigning)
         echo "<div id=\"{$this->_name}_wrapper\" style=\"$style\" $class>\n";
      echo "\t<iframe style=\"width:100%;height:100%;position:absolute;\" src=\"" . $this->Source . "\"  name=\"" . $this->name . "\" id=\"" . $this->name . "\"  marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" $class scrolling=\"nos\" ></iframe>\n";
      if( ! ($this->ControlState & csDesigning) == csDesigning)
         echo "</div>\n";
   }
}

class MIFrame extends CustomMIFrame
{
   function getScrolling()    {return $this->readscrolling();}
   function setScrolling($value)    {$this->writescrolling($value);}

   function getBorders()    {return $this->readborders();}
   function setBorders($value)    {$this->writeborders($value);}

   function getSource()    {return $this->readsource();}
   function setSource($value)    {$this->writesource($value);}

   function getjsOnClick()    {return $this->readjsonclick();}
   function setjsOnClick($value)    {$this->writejsonclick($value);}

   function getOnClick()    {return $this->readonclick();}
   function setOnClick($value)    {$this->writeonclick($value);}

   function getOnDblClick()    {return $this->readondblclick();}
   function setOnDblClick($value)    {$this->writeondblclick($value);}

   function getjsOnDblClick()    {return $this->readjsondblclick();}
   function setjsOnDblClick($value)    {$this->writejsondblclick($value);}

   function getjsOnMouseUp()    {return $this->readjsonmouseup();}
   function setjsOnMouseUp($value)    {$this->writejsonmouseup($value);}

   function getjsOnMouseDown()    {return $this->readjsonmousedown();}
   function setjsOnMouseDown($value)    {$this->writejsonmousedown($value);}

   function getjsOnVMouseOver()    {return $this->readjsonvmouseover();}
   function setjsOnVMouseOver($value)    {$this->writejsonvmouseover($value);}

   function getjsOnSwipeRight()    {return $this->readjsonswiperight();}
   function setjsOnSwipeRight($value)    {$this->writejsonswiperight($value);}

   function getjsOnSwipeLeft()    {return $this->readjsonswipeleft();}
   function setjsOnSwipeLeft($value)    {$this->writejsonswipeleft($value);}

   function getjsOnSwipe()    {return $this->readjsonswipe();}
   function setjsOnSwipe($value)    {$this->writejsonswipe($value);}
}
?>