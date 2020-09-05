<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("controls.inc.php");

global $qooxdoo_cursors;



//Class definition
class QControl extends Control
{
    public static $guicode='';

    //If true, this component can be inserted into an html div
    protected $allowinline=true;

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->ControlStyle="csVerySlowRedraw=1";
        $this->ControlStyle="csTopOffset=5";
        $this->ControlStyle="csLeftOffset=5";

    }

    function translateFont()
    {
      return('qx.bom.Font.fromString("'.trim($this->_font->readCSSString()).'")');
    }

    function translateCursor()
    {
      switch($this->_cursor)
      {
        case 'crPointer': return('pointer');
        case 'crCrossHair': return('crosshair');
        case 'crText': return('text');
        case 'crWait': return('wait');
        case 'crDefault': return('default');
        case 'crHelp': return('help');
        case 'crEResize': return('e-resize');
        case 'crNEResize': return('ne-resize');
        case 'crNResize': return('n-resize');
        case 'crNWResize': return('nw-resize');
        case 'crWResize': return('w-resize');
        case 'crSWResize': return('sw-resize');
        case 'crSResize': return('s-resize');
        case 'crSEResize': return('se-resize');
        case 'crAuto': return('move');
      }
    }

    function attachJSEvents()
    {
      if (($this->ControlState & csDesigning) != csDesigning)
      {
        $result='';
        if ($this->_jsonclick!=null)  { $event=$this->_jsonclick;  $result.=" $this->Name.addListener(\"execute\",$event);\n"; }
        echo $result;
      }
    }

    function dumpGUICode()
    {
      echo "$this->Name.setWidth($this->Width);\n";
      echo "$this->Name.setHeight($this->Height);\n";
      if ((($this->ControlState & csDesigning) == csDesigning) || (!$this->allowinline))
      {
        echo "container.add($this->Name);\n";

        if (($this->ControlState & csDesigning) != csDesigning)
        {
          echo "$this->Name.moveTo($this->Left, $this->Top);\n";
        }
      }
      else
      {
?>
var <?php echo $this->Name; ?>_outer = new qx.ui.root.Inline(document.getElementById("<?php echo $this->Name; ?>_outer"), true, true);
<?php echo $this->Name; ?>_outer.add(<?php echo $this->Name; ?>);
<?php
     }

     if ($this->_cursor!=crDefault) echo $this->Name.'.setCursor("'.$this->translateCursor().'");'."\n";
     if (!$this->_enabled) echo $this->Name.'.setEnabled(false);'."\n";
     $font=$this->translateFont();
     if ($font!='') echo $this->Name.".setFont($font);\n";
     $this->attachJSEvents();

     if ($this->_helpcontext!=0) echo "$this->Name.helpcontext=$this->_helpcontext;\n";
     if ($this->_helpkeyword!='') echo "$this->Name.helpkeyword=\"$this->_helpkeyword\";\n";
     if ($this->_hint!='') echo "$this->Name.setToolTipText(\"$this->_hint\");\n";
     if (!$this->_showhint) echo "$this->Name.blockToolTip=true;\n";
    }

    function dumpJavascript()
    {
        parent::dumpJavascript();
        ob_start();
        $this->dumpGUICode();
        self::$guicode.=ob_get_clean();
    }

    function dumpHelpHook()
    {
?>
var events = ["keydown", "keypress", "keyup"];
for (var i=0; i<events.length; i++)
{
  qx.bom.Event.addNativeListener(document.documentElement,events[i],qx.lang.Function.bind(helpHook, this))
}
<?php
    }

    function dumpHeaderCode()
    {
      parent::dumpHeaderCode();
      if (!defined('XQOOXDOO'))
      {
        echo '<script type="text/javascript" src="'.RPCL_HTTP_PATH.'/qooxdoo/script/qxapp.js" charset="UTF-8"></script>'."\n";
        echo '<script type="text/javascript" src="'.RPCL_HTTP_PATH.'/qooxdoo/script/qxhelp.js"></script>'."\n";
        echo '<script type="text/javascript">'."\n";
        echo 'function buildGUI(container)'."\n";
        echo '{'."\n";
        echo 'qx.$$libraries.qx.resourceUri="'.RPCL_HTTP_PATH.'/qooxdoo/resource";'."\n";
        $this->dumpHelpHook();
        if (($this->ControlState & csDesigning) == csDesigning) $this->dumpJavascript();
        echo self::$guicode."\n";
        echo '}'."\n";
        echo '</script>';
        define('XQOOXDOO',1);
      }
    }

    function dumpContents()
    {
        parent::dumpContents();
    }

    function getEnabled() { return $this->readenabled(); }
    function setEnabled($value) { $this->writeenabled($value); }

    function getFont() { return $this->readfont(); }
    function setFont($value) { $this->writefont($value); }

    protected $_helpcontext=0;

    function getHelpContext() { return $this->_helpcontext; }
    function setHelpContext($value) { $this->_helpcontext=$value; }
    function defaultHelpContext() { return 0; }

    protected $_helpkeyword='';

    function getHelpKeyword() { return $this->_helpkeyword; }
    function setHelpKeyword($value) { $this->_helpkeyword=$value; }
    function defaultHelpKeyword() { return ''; }


}

class QFocusControl extends QControl
{
    function getShowHint() { return $this->readshowhint(); }
    function setShowHint($value) { $this->writeshowhint($value); }

    function getParentShowHint() { return $this->readparentshowhint(); }
    function setParentShowHint($value) { $this->writeparentshowhint($value); }

    function dumpGUICode()
    {
      parent::dumpGUICode();
      if ($this->_tabstop) echo "$this->Name.focusable=true;\n";
      else echo "$this->Name.focusable=false;\n";
    }

    protected $_tabstop='1';

    function getTabStop() { return $this->_tabstop; }
    function setTabStop($value) { $this->_tabstop=$value; }
    function defaultTabStop() { return '1'; }
}

define('bsCommandLink','bsCommandLink');
define('bsPushButton','bsPushButton');
define('bsSplitButton','bsSplitButton');

class QCustomButton extends QFocusControl
{
    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=75;
        $this->_height=25;
    }

    function dumpGUICode()
    {
      $buttonclass='form.Button';
      if ($this->_style==bsSplitButton) $buttonclass='form.SplitButton';
      else if ($this->_style==bsCommandLink) $buttonclass='basic.Atom';

      echo "$this->Name = new qx.ui.$buttonclass(\"$this->Caption\");\n";
      parent::dumpGUICode();
    }

    function getCaption() { return $this->readcaption(); }
    function setCaption($value) { $this->writecaption($value); }

    protected $_style=bsPushButton;

    function getStyle() { return $this->_style; }
    function setStyle($value) { $this->_style=$value; }
    function defaultStyle() { return bsPushButton; }


    function loaded()
    {
      parent::loaded();
      $this->_images=$this->fixupProperty($this->_images);
    }

    protected $_images=null;

    function getImages() { return $this->_images; }
    function setImages($value) { $this->_images=$this->fixupProperty($value); }
    function defaultImages() { return null; }
}

class QBitBtn extends QButton
{

}

class QButton extends QCustomButton
{

}

class QSpeedButton extends QButton
{
    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=25;
        $this->_height=25;
    }
}

class QCheckbox extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.form.CheckBox(\"$this->Caption\");\n";
      parent::dumpGUICode();
    }

    function getCaption() { return $this->readcaption(); }
    function setCaption($value) { $this->writecaption($value); }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=97;
        $this->_height=17;
    }
}

class QColorSelector extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.control.ColorSelector();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=563;
        $this->_height=314;
    }
}

class QComboBox extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.form.ComboBox();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=145;
        $this->_height=24;
    }
}

class QMonthCalendar extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.control.DateChooser();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=225;
        $this->_height=175;
    }
}

class QDateTimePicker extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.form.DateField();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=186;
        $this->_height=24;
    }
}

class QGroupBox extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.groupbox.GroupBox(\"$this->Caption\");\n";
      parent::dumpGUICode();
    }

    function getCaption() { return $this->readcaption(); }
    function setCaption($value) { $this->writecaption($value); }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=185;
        $this->_height=105;
    }

}

class QRichEdit extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.embed.HtmlArea(\"\",null,\"blank.html\");\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=185;
        $this->_height=89;
    }
}

class QIFrame extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.embed.ThemedIframe();\n";
      echo "$this->Name.setSource(\"http://www.google.com\");\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=355;
        $this->_height=144;
    }
}

class QImage extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.basic.Image(\"http://resources.qooxdoo.org/images/logo.gif\");\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=105;
        $this->_height=105;
    }
}

class QLabel extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.basic.Label(\"$this->Caption\");\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=75;
        $this->_height=15;
    }

    function getCaption() { return $this->readcaption(); }
    function setCaption($value) { $this->writecaption($value); }

}

class QListBox extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.form.List();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=121;
        $this->_height=97;
    }
}

class QRadioButton extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.form.RadioButton(\"$this->Caption\");\n";
      parent::dumpGUICode();
    }

    function getCaption() { return $this->readcaption(); }
    function setCaption($value) { $this->writecaption($value); }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=113;
        $this->_height=17;
    }
}

class QRadioGroup extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.form.RadioButtonGroup();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=185;
        $this->_height=105;
    }
}

class QScrollBar extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.core.scroll.ScrollBar(\"horizontal\");\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=185;
        $this->_height=17;
    }
}

class QPageScroller extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.container.SlideBar();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=105;
        $this->_height=45;
    }
}

class QSlider extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.form.Slider();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=150;
        $this->_height=25;
    }
}

class QSpinEdit extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.form.Spinner();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=121;
        $this->_height=24;
    }
}

class QPageControl extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.tabview.Page();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=289;
        $this->_height=193;
    }
}

class QEdit extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.form.TextField(\"$this->Text\");\n";
      parent::dumpGUICode();
    }

    protected $_text="";

    function getText() { return $this->_text; }
    function setText($value) { $this->_text=$value; }
    function defaultText() { return ""; }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=121;
        $this->_height=21;
    }

}

class QMemo extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.form.TextArea(\"\");\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=185;
        $this->_height=89;
    }
}


class QTreeView extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.tree.Tree();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=121;
        $this->_height=97;
    }
}

class QWindow extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.window.Window(\"$this->Caption\", \"icon/16/apps/office-calendar.png\");\n";
      parent::dumpGUICode();
      echo "$this->Name.open();\n";
    }

    function getCaption() { return $this->readcaption(); }
    function setCaption($value) { $this->writecaption($value); }

    function __construct($aowner=null)
    {
      parent::__construct($aowner);
      $this->allowinline=false;
      $this->_width=352;
      $this->_height=360;
    }
}

class QScrollBox extends QFocusControl
{
    function dumpGUICode()
    {
      echo "var $this->Name = new qx.ui.container.Scroll();\n";
      parent::dumpGUICode();
    }

    function __construct($aowner=null)
    {
      parent::__construct($aowner);
      $this->_width=185;
      $this->_height=41;
    }
}



?>