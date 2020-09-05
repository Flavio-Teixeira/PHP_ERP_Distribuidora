<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("controls.inc.php");

function qxapp_init()
{
  if (!defined('XQOOXDOO'))
  {
    echo '<script type="text/javascript" src="'.RPCL_HTTP_PATH.'/qooxdoo/script/qxapp.js" charset="UTF-8"></script>'."\n";
    echo '<script type="text/javascript" src="'.RPCL_HTTP_PATH.'/qooxdoo/script/qxhelp.js"></script>'."\n";
    define('XQOOXDOO',1);
  }
}

class QComponent extends Component
{
  //TODO: Check to include qxapp.js here
    function dumpJavascript()
    {
      parent::dumpJavascript();
      if (!defined('XQOOXDOO'))
      {
?>
-->
</script>
<?php
      qxapp_init();
?>
<script type="text/javascript">
<!--
<?php
      }
    }
}

//Class definition
class QControl extends FocusControl
{
    public $offsetx=0;
    public $offsety=0;

    public static $guicode='';
    public static $initfunctions=array();

    public $linkproperties=array();

    //If true, this component can be inserted into an html div
    protected $allowinline=true;

    function __construct($aowner = null)                                                                                                                                                {
        parent::__construct($aowner);
        $this->ControlStyle="csVerySlowRedraw=1";
        $this->ControlStyle="csTopOffset=5";
        $this->ControlStyle="csLeftOffset=5";
        $this->ControlStyle="csWebEngine=webkit";
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

    function dumpJsEvents()
    {
          $this->dumpJSEvent($this->_jsonclick);
          $this->dumpJSEvent($this->_jsoncontextpopup);
          $this->dumpJSEvent($this->_jsondblclick);
          $this->dumpJSEvent($this->_jsondragdrop);
          $this->dumpJSEvent($this->_jsondragover);
          $this->dumpJSEvent($this->_jsonenddrag);
          $this->dumpJSEvent($this->_jsonmouseactivate);
          $this->dumpJSEvent($this->_jsonmousedown);
          $this->dumpJSEvent($this->_jsonmouseenter);
          $this->dumpJSEvent($this->_jsonmouseleave);
          $this->dumpJSEvent($this->_jsonmousemove);
          $this->dumpJSEvent($this->_jsonmouseup);
          $this->dumpJSEvent($this->_jsonmousewheel);
          $this->dumpJSEvent($this->_jsonresize);
          $this->dumpJSEvent($this->_jsonstartdrag);
    }

    function loaded()
    {
      parent::loaded();
      $this->setPopupMenu($this->_popupmenu);
    }

    function mapJSEvent($jsevent, $qevent)
    {
      $result='';
      if ($jsevent!=null)  $result.=" $this->Name.addListener(\"$qevent\",$jsevent);\n";
      return($result);
    }

    function mapEventToJSHook($event, $qevent)
    {
      $result='';
      if ($event!=null)  $result.=" $this->Name.addListener(\"$qevent\",function (e) { qx_processevent(e,'$event'); });\n";
      return($result);
    }

    function mapJSEventToItem($item, $jsevent, $qevent)
    {
      $result='';
      if ($jsevent!=null)  $result.=" $item.addListener(\"$qevent\",$jsevent);\n";
      return($result);
    }

    function mapEventToItem($item, $event, $qevent,$params)
    {
      $result='';
      if ($event!=null)  $result.=" $item.addListener(\"$qevent\",function (e) { qx_processevent(e,'$event',$params); });\n";
      return($result);
    }



    function dumpFormItems()
    {
      foreach ($this->linkproperties as $linkproperty)
      {
        $phpproperty=$linkproperty[2];
        $fieldname=$this->Name.'_'.$phpproperty;
        $value=$this->$phpproperty;
        if (is_array($value))
        {
          $value=implode("\n",$value);
        }
        $value=htmlentities($value,ENT_QUOTES);
        echo "<input type=\"hidden\" id=\"$fieldname\" name=\"$fieldname\" value=\"$value\" />\n";
      }
    }

    function linkproperty($qooxdooevent, $qooxdooproperty, $phpproperty)
    {
      $fieldname=$this->Name.'_'.$phpproperty;
      $result=" $this->Name.addListener(\"$qooxdooevent\",function (e) { var h=findObj('$fieldname'); if (h) { h.value=$this->Name.$qooxdooproperty; } });\n";
      return($result);
    }

    function generateJSEventsCode()
    {
        $result='';

        foreach ($this->linkproperties as $linkproperty)
        {
          $result.=$this->linkproperty($linkproperty[0],$linkproperty[1],$linkproperty[2]);
        }

        $result.=$this->mapJSEvent($this->_jsonclick,'click');
        $result.=$this->mapJSEvent($this->_jsoncontextpopup,'contextmenu');
        $result.=$this->mapJSEvent($this->_jsondblclick,'dblclick');
        $result.=$this->mapJSEvent($this->_jsondragdrop,'droprequest');
        $result.=$this->mapJSEvent($this->_jsondragover,'dragover');
        $result.=$this->mapJSEvent($this->_jsonenddrag,'dragend');
        $result.=$this->mapJSEvent($this->_jsonmouseactivate,'activate');
        $result.=$this->mapJSEvent($this->_jsonmousedown,'mousedown');
        $result.=$this->mapJSEvent($this->_jsonmouseenter,'mouseover');
        $result.=$this->mapJSEvent($this->_jsonmouseleave,'mouseout');
        $result.=$this->mapJSEvent($this->_jsonmousemove,'mousemove');
        $result.=$this->mapJSEvent($this->_jsonmouseup,'mouseup');
        $result.=$this->mapJSEvent($this->_jsonmousewheel,'mousewheel');
        $result.=$this->mapJSEvent($this->_jsonresize,'resize');
        $result.=$this->mapJSEvent($this->_jsonstartdrag,'dragstart');

        //To perform submits
        $result.=$this->mapEventToJSHook($this->_onclick,'click');
        $result.=$this->mapEventToJSHook($this->_oncontextpopup,'contextmenu');
        $result.=$this->mapEventToJSHook($this->_ondblclick,'dblclick');
        $result.=$this->mapEventToJSHook($this->_ondragdrop,'droprequest');
        $result.=$this->mapEventToJSHook($this->_ondragover,'dragover');
        $result.=$this->mapEventToJSHook($this->_onenddrag,'dragend');
        $result.=$this->mapEventToJSHook($this->_onmouseactivate,'activate');
        $result.=$this->mapEventToJSHook($this->_onmousedown,'mousedown');
        $result.=$this->mapEventToJSHook($this->_onmouseenter,'mouseover');
        $result.=$this->mapEventToJSHook($this->_onmouseleave,'mouseout');
        $result.=$this->mapEventToJSHook($this->_onmousemove,'mousemove');
        $result.=$this->mapEventToJSHook($this->_onmouseup,'mouseup');
        $result.=$this->mapEventToJSHook($this->_onmousewheel,'mousewheel');
        $result.=$this->mapEventToJSHook($this->_onresize,'resize');
        $result.=$this->mapEventToJSHook($this->_onstartdrag,'dragstart');

        return($result);
    }

    function attachJSEvents()
    {
      $result=$this->generateJSEventsCode();
      echo $result;
    }

    function fireEvent($event, $phpevent, $serverevent,$params=array())
    {
      if ($phpevent!=null)
      {
        if ($serverevent==$phpevent)
        {
          $this->callEvent($event,$params);
        }
      }
    }

    function preinit()
    {
      parent::preinit();

      foreach ($this->linkproperties as $linkproperty)
      {
        $phpproperty=$linkproperty[2];
        $fieldname=$this->Name.'_'.$phpproperty;
        $value=$this->input->$fieldname;
        if (is_object($value))
        {
          $filter=$linkproperty[3];
          if ($filter) $value=$value->asString();
          else $value=$value->asUnsafeRaw();
          $oldvalue=$this->$phpproperty;
          if (is_array($oldvalue))
          {
            $value=explode("\n",$value);
            foreach ($value as $key=>$line)
            {
              $value[$key]=html_entity_decode(trim($line), ENT_QUOTES);
            }
          }
          else $value=html_entity_decode($value,ENT_QUOTES);

          $this->$phpproperty=$value;
        }
      }
    }

    function init()
    {
      parent::init();

      $serverevent= $this->input->serverevent;
      $serverparams= $this->input->serverparams;

      if (is_object($serverevent))
      {
        $params=array();
        if (is_object($serverparams))
        {
          $params=$serverparams->asString();
          $params=explode('=',$params);
          $params=array($params[0]=>$params[1]);
        }

        $this->fireEvent('onclick',$this->_onclick, $serverevent->asString(),$params);
        $this->fireEvent('onenter',$this->_onenter, $serverevent->asString());
        $this->fireEvent('oncontextpopup',$this->_oncontextpopup, $serverevent->asString());
        $this->fireEvent('ondblclick',$this->_ondblclick, $serverevent->asString());
        $this->fireEvent('ondragdrop',$this->_ondragdrop, $serverevent->asString());
        $this->fireEvent('ondragover',$this->_ondragover, $serverevent->asString());
        $this->fireEvent('onenddrag',$this->_onenddrag, $serverevent->asString());
        $this->fireEvent('onmouseactivate',$this->_onmouseactivate, $serverevent->asString());
        $this->fireEvent('onmousedown',$this->_onmousedown, $serverevent->asString());
        $this->fireEvent('onmouseenter',$this->_onmouseenter, $serverevent->asString());
        $this->fireEvent('onmouseleave',$this->_onmouseleave, $serverevent->asString());
        $this->fireEvent('onmousemove',$this->_onmousemove, $serverevent->asString());
        $this->fireEvent('onmouseup',$this->_onmouseup, $serverevent->asString());
        $this->fireEvent('onmousewheel',$this->_onmousewheel, $serverevent->asString());
        $this->fireEvent('onresize',$this->_onresize, $serverevent->asString());
        $this->fireEvent('onstartdrag',$this->_onstartdrag, $serverevent->asString());
      }
    }

    function dumpGUICode()
    {
      echo '//'.$this->Name."\n";
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
        if (($this->_parent==$this->owner) || (($this->parent!='') && (!$this->_parent->inheritsFrom('QControl'))))
        {
?>
var <?php echo $this->Name; ?>_outer = new qx.ui.root.Inline(document.getElementById("<?php echo $this->Name; ?>_outer"), true, true);
<?php echo $this->Name; ?>_outer.add(<?php echo $this->Name; ?>);
<?php
        }
        else
        {
          if ($this->_parent!='')
          {
            //Placed on another qcontrol
            if( $this->Parent->methodExists('getActiveLayer') )
            {
              $layername=str_replace(' ','_',$this->_layer);
              $layername=str_replace('"','_',$layername);
              echo $this->Parent->Name.'_layer_'.$layername.'.add('.$this->Name.',{top:'.($this->Top-$this->Parent->offsety).', left:'.($this->Left-$this->Parent->offsetx).'});'."\n";
            }
            else
            {
            echo $this->Parent->Name.'.add('.$this->Name.',{top:'.($this->Top-$this->Parent->offsety).', left:'.($this->Left-$this->Parent->offsetx).'});'."\n";
            }
          }
        }
     }

     if ($this->_cursor!=crDefault) echo $this->Name.'.setCursor("'.$this->translateCursor().'");'."\n";
     if (!$this->_enabled) echo $this->Name.'.setEnabled(false);'."\n";
     $font=$this->translateFont();
     if ($font!='') echo $this->Name.".setFont($font);\n";
     if (($this->ControlState & csDesigning) != csDesigning) $this->attachJSEvents();

     if ($this->_helpcontext!=0) echo "$this->Name.helpcontext=$this->_helpcontext;\n";
     if ($this->_helpkeyword!='') echo "$this->Name.helpkeyword=\"$this->_helpkeyword\";\n";
     if ($this->_hint!='') echo "$this->Name.setToolTipText(\"$this->_hint\");\n";
     if (!$this->_showhint) echo "$this->Name.blockToolTip=true;\n";
     if ($this->_hidden) echo "$this->Name.visibility=\"hidden\";\n";
     if ($this->_color!='') echo "$this->Name.setBackgroundColor(\"$this->_color\");\n";
     if (($this->ControlState & csDesigning) != csDesigning)
     {
      if ($this->_action!='') echo "$this->Name.setCommand($this->_action);\n";
      if ($this->_popupmenu!=null) echo "$this->Name.setContextMenu(".$this->_popupmenu->Name.");\n";

      //Dump all HTML controls
      $this->dumpChildrenControls($this->offsety,$this->offsetx,$this->Name,'');
     }

    }

        /**
        * Code to dump when the Widget accepts children controls.
        *
        * @param integer $topoffset Offset to add to generated components
        * @param integer $leftoffset Offset to add to generated components
        * @param string $ownername Name of the owner of the components
        * @param string $layer Name of the layer for the controls to be shown
        */
        function dumpChildrenControls($topoffset=0, $leftoffset=0, $ownername="", $layer="")
        {
                $aowner=$this->Name;
                if ($ownername!="") $aowner=$ownername;

                $js="";
                reset($this->controls->items);
                while (list($k,$v)=each($this->controls->items))
                {
                  if ($v->Visible)
                  {
                    if (!$v->inheritsFrom("QControl"))
                    {
                      echo "  var container = new qx.ui.embed.Html(\"";
                      ob_start();
                      echo "<div id=\"".$v->_name."_outer\">\n";
                      $v->show();
                      echo "</div>\n";
                      $c=ob_get_contents();
                      $c=extractjscript($c);
                      $js.=$c[0];
                      $html=$c[1];
                      ob_end_clean();
                      echo str_replace("\r",'\r',str_replace("\n",'\n',str_replace('"','\"', str_replace('\\','\\\\',$html))));
                      echo "\");\n";

                      //Placed on another qcontrol
                      if( $this->methodExists('getActiveLayer') )
                      {
                        $layername=str_replace(' ','_',$v->_layer);
                        $layername=str_replace('"','_',$layername);
                        echo $this->Name.'_layer_'.$layername.'.add(container,{top:'.($v->Top-$this->offsety).', left:'.($v->Left-$this->offsetx).', width:'.$v->Width.',height:'.$v->Height.'});'."\n";
                      }
                      else
                      {
                        echo $this->Name.'.add(container,{top:'.($v->Top-$this->offsety).', left:'.($v->Left-$this->offsetx).', width:'.$v->Width.',height:'.$v->Height.'});'."\n";
                      }
                      if (trim($js)!='')
                      {
                        echo "  container.addListener(\"appear\", function(e) { $js }, container); \n";
                      }
                    }
                  }
                }
                return($js);
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
      qxapp_init();
      if (!defined('buildGUI'))
      {
        echo '<script type="text/javascript">'."\n";
        echo 'function buildGUI(container)'."\n";
        echo '{'."\n";
        echo 'qx.$$libraries.qx.resourceUri="'.RPCL_HTTP_PATH.'/qooxdoo/resource";'."\n";
        reset(self::$initfunctions);
        while (list($k,$v)=each(self::$initfunctions))
        {
          echo "$v(container);\n";
        }
        $this->dumpHelpHook();
        if (($this->ControlState & csDesigning) == csDesigning) $this->dumpJavascript();
        echo self::$guicode."\n";
        echo '}'."\n";
        echo "function qx_processevent(event,phpevent,params)\n";
        echo "{\n";
        //TODO: Send event parameters to PHP
        echo "var serverevent=findObj('serverevent');\n";
        echo "if (serverevent) serverevent.value=phpevent;\n";
        echo "var serverparams=findObj('serverparams');\n";
        echo "if (serverparams) serverparams.value=params;\n";
        echo "document.forms[0].submit();\n";
        echo "}\n";
        echo '</script>';
        define('buildGUI',1);
      }
    }

    function dumpContents()
    {
        parent::dumpContents();
    }

    function getEnabled() { return $this->readenabled(); }
    function setEnabled($value) { $this->writeenabled($value); }

    protected $_helpcontext=0;

    function getHelpContext() { return $this->_helpcontext; }
    function setHelpContext($value) { $this->_helpcontext=$value; }
    function defaultHelpContext() { return 0; }

    protected $_helpkeyword='';

    function getHelpKeyword() { return $this->_helpkeyword; }
    function setHelpKeyword($value) { $this->_helpkeyword=$value; }
    function defaultHelpKeyword() { return ''; }

    protected $_jsonclick=null;

    function readjsOnClick() { return $this->_jsonclick; }
    function writejsOnClick($value) { $this->_jsonclick=$value; }
    function defaultjsOnClick() { return null; }

    protected $_jsoncontextpopup=null;

    function readjsOnContextPopup() { return $this->_jsoncontextpopup; }
    function writejsOnContextPopup($value) { $this->_jsoncontextpopup=$value; }
    function defaultjsOnContextPopup() { return null; }

    protected $_jsondblclick=null;

    function readjsOnDblClick() { return $this->_jsondblclick; }
    function writejsOnDblClick($value) { $this->_jsondblclick=$value; }
    function defaultjsOnDblClick() { return null; }

    protected $_jsondragdrop=null;

    function readjsOnDragDrop() { return $this->_jsondragdrop; }
    function writejsOnDragDrop($value) { $this->_jsondragdrop=$value; }
    function defaultjsOnDragDrop() { return null; }

    protected $_jsondragover=null;

    function readjsOnDragOver() { return $this->_jsondragover; }
    function writejsOnDragOver($value) { $this->_jsondragover=$value; }
    function defaultjsOnDragOver() { return null; }

    protected $_jsonenddrag=null;

    function readjsOnEndDrag() { return $this->_jsonenddrag; }
    function writejsOnEndDrag($value) { $this->_jsonenddrag=$value; }
    function defaultjsOnEndDrag() { return null; }

    protected $_jsonmouseactivate=null;

    function readjsOnMouseActivate() { return $this->_jsonmouseactivate; }
    function writejsOnMouseActivate($value) { $this->_jsonmouseactivate=$value; }
    function defaultjsOnMouseActivate() { return null; }

    protected $_jsonmousedown=null;

    function readjsOnMouseDown() { return $this->_jsonmousedown; }
    function writejsOnMouseDown($value) { $this->_jsonmousedown=$value; }
    function defaultjsOnMouseDown() { return null; }

    protected $_jsonmouseenter=null;

    function readjsOnMouseEnter() { return $this->_jsonmouseenter; }
    function writejsOnMouseEnter($value) { $this->_jsonmouseenter=$value; }
    function defaultjsOnMouseEnter() { return null; }

    protected $_jsonmouseleave=null;

    function readjsOnMouseLeave() { return $this->_jsonmouseleave; }
    function writejsOnMouseLeave($value) { $this->_jsonmouseleave=$value; }
    function defaultjsOnMouseLeave() { return null; }

    protected $_jsonmousemove=null;

    function readjsOnMouseMove() { return $this->_jsonmousemove; }
    function writejsOnMouseMove($value) { $this->_jsonmousemove=$value; }
    function defaultjsOnMouseMove() { return null; }

    protected $_jsonmouseup=null;

    function readjsOnMouseUp() { return $this->_jsonmouseup; }
    function writejsOnMouseUp($value) { $this->_jsonmouseup=$value; }
    function defaultjsOnMouseUp() { return null; }

    protected $_jsonmousewheel=null;

    function readjsOnMouseWheel() { return $this->_jsonmousewheel; }
    function writejsOnMouseWheel($value) { $this->_jsonmousewheel=$value; }
    function defaultjsOnMouseWheel() { return null; }

    protected $_jsonresize=null;

    function readjsOnResize() { return $this->_jsonresize; }
    function writejsOnResize($value) { $this->_jsonresize=$value; }
    function defaultjsOnResize() { return null; }

    protected $_jsonstartdrag=null;

    function readjsOnStartDrag() { return $this->_jsonstartdrag; }
    function writejsOnStartDrag($value) { $this->_jsonstartdrag=$value; }
    function defaultjsOnStartDrag() { return null; }

    protected $_action='';

    function readAction() { return $this->_action; }
    function writeAction($value) { $this->_action=$value; }
    function defaultAction() { return ''; }

    //PHPEvents

    protected $_onclick=null;

    function readOnClick() { return $this->_onclick; }
    function writeOnClick($value) { $this->_onclick=$value; }
    function defaultOnClick() { return null; }

    protected $_onenter=null;

    function readOnEnter() { return $this->_onenter; }
    function writeOnEnter($value) { $this->_onenter=$value; }
    function defaultOnEnter() { return null; }


    protected $_oncontextpopup=null;

    function readOnContextPopup() { return $this->_oncontextpopup; }
    function writeOnContextPopup($value) { $this->_oncontextpopup=$value; }
    function defaultOnContextPopup() { return null; }

    protected $_ondblclick=null;

    function readOnDblClick() { return $this->_ondblclick; }
    function writeOnDblClick($value) { $this->_ondblclick=$value; }
    function defaultOnDblClick() { return null; }

    protected $_ondragdrop=null;

    function readOnDragDrop() { return $this->_ondragdrop; }
    function writeOnDragDrop($value) { $this->_ondragdrop=$value; }
    function defaultOnDragDrop() { return null; }

    protected $_ondragover=null;

    function readOnDragOver() { return $this->_ondragover; }
    function writeOnDragOver($value) { $this->_ondragover=$value; }
    function defaultOnDragOver() { return null; }

    protected $_onenddrag=null;

    function readOnEndDrag() { return $this->_onenddrag; }
    function writeOnEndDrag($value) { $this->_onenddrag=$value; }
    function defaultOnEndDrag() { return null; }

    protected $_onmouseactivate=null;

    function readOnMouseActivate() { return $this->_onmouseactivate; }
    function writeOnMouseActivate($value) { $this->_onmouseactivate=$value; }
    function defaultOnMouseActivate() { return null; }

    protected $_onmousedown=null;

    function readOnMouseDown() { return $this->_onmousedown; }
    function writeOnMouseDown($value) { $this->_onmousedown=$value; }
    function defaultOnMouseDown() { return null; }

    protected $_onmouseenter=null;

    function readOnMouseEnter() { return $this->_onmouseenter; }
    function writeOnMouseEnter($value) { $this->_onmouseenter=$value; }
    function defaultOnMouseEnter() { return null; }

    protected $_onmouseleave=null;

    function readOnMouseLeave() { return $this->_onmouseleave; }
    function writeOnMouseLeave($value) { $this->_onmouseleave=$value; }
    function defaultOnMouseLeave() { return null; }

    protected $_onmousemove=null;

    function readOnMouseMove() { return $this->_onmousemove; }
    function writeOnMouseMove($value) { $this->_onmousemove=$value; }
    function defaultOnMouseMove() { return null; }

    protected $_onmouseup=null;

    function readOnMouseUp() { return $this->_onmouseup; }
    function writeOnMouseUp($value) { $this->_onmouseup=$value; }
    function defaultOnMouseUp() { return null; }

    protected $_onmousewheel=null;

    function readOnMouseWheel() { return $this->_onmousewheel; }
    function writeOnMouseWheel($value) { $this->_onmousewheel=$value; }
    function defaultOnMouseWheel() { return null; }

    protected $_onresize=null;

    function readOnResize() { return $this->_onresize; }
    function writeOnResize($value) { $this->_onresize=$value; }
    function defaultOnResize() { return null; }

    protected $_onstartdrag=null;

    function readOnStartDrag() { return $this->_onstartdrag; }
    function writeOnStartDrag($value) { $this->_onstartdrag=$value; }
    function defaultOnStartDrag() { return null; }

    //Publish all events
    function getOnClick() { return $this->readonclick(); }
    function setOnClick($value) { $this->writeonclick($value); }

    function getOnContextPopup() { return $this->readoncontextpopup(); }
    function setOnContextPopup($value) { $this->writeoncontextpopup($value); }

    function getOnDblClick() { return $this->readondblclick(); }
    function setOnDblClick($value) { $this->writeondblclick($value); }

    function getOnDragDrop() { return $this->readondragdrop(); }
    function setOnDragDrop($value) { $this->writeondragdrop($value); }

    function getOnDragOver() { return $this->readondragover(); }
    function setOnDragOver($value) { $this->writeondragover($value); }

    function getOnEndDrag() { return $this->readonenddrag(); }
    function setOnEndDrag($value) { $this->writeonenddrag($value); }

    function getOnMouseActivate() { return $this->readonmouseactivate(); }
    function setOnMouseActivate($value) { $this->writeonmouseactivate($value); }

    function getOnMouseDown() { return $this->readonmousedown(); }
    function setOnMouseDown($value) { $this->writeonmousedown($value); }

    function getOnMouseEnter() { return $this->readonmouseenter(); }
    function setOnMouseEnter($value) { $this->writeonmouseenter($value); }

    function getOnMouseLeave() { return $this->readonmouseleave(); }
    function setOnMouseLeave($value) { $this->writeonmouseleave($value); }

    function getOnMouseMove() { return $this->readonmousemove(); }
    function setOnMouseMove($value) { $this->writeonmousemove($value); }

    function getOnMouseUp() { return $this->readonmouseup(); }
    function setOnMouseUp($value) { $this->writeonmouseup($value); }

    function getOnMouseWheel() { return $this->readonmousewheel(); }
    function setOnMouseWheel($value) { $this->writeonmousewheel($value); }

    function getOnResize() { return $this->readonresize(); }
    function setOnResize($value) { $this->writeonresize($value); }

    function getOnStartDrag() { return $this->readonstartdrag(); }
    function setOnStartDrag($value) { $this->writeonstartdrag($value); }

    //Publish js events
    function getjsOnClick() { return $this->readjsonclick(); }
    function setjsOnClick($value) { $this->writejsonclick($value); }

    function getjsOnContextPopup() { return $this->readjsoncontextpopup(); }
    function setjsOnContextPopup($value) { $this->writejsoncontextpopup($value); }

    function getjsOnDblClick() { return $this->readjsondblclick(); }
    function setjsOnDblClick($value) { $this->writejsondblclick($value); }

    function getjsOnDragDrop() { return $this->readjsondragdrop(); }
    function setjsOnDragDrop($value) { $this->writejsondragdrop($value); }

    function getjsOnDragOver() { return $this->readjsondragover(); }
    function setjsOnDragOver($value) { $this->writejsondragover($value); }

    function getjsOnEndDrag() { return $this->readjsonenddrag(); }
    function setjsOnEndDrag($value) { $this->writejsonenddrag($value); }

    function getjsOnMouseActivate() { return $this->readjsonmouseactivate(); }
    function setjsOnMouseActivate($value) { $this->writejsonmouseactivate($value); }

    function getjsOnMouseDown() { return $this->readjsonmousedown(); }
    function setjsOnMouseDown($value) { $this->writejsonmousedown($value); }

    function getjsOnMouseEnter() { return $this->readjsonmouseenter(); }
    function setjsOnMouseEnter($value) { $this->writejsonmouseenter($value); }

    function getjsOnMouseLeave() { return $this->readjsonmouseleave(); }
    function setjsOnMouseLeave($value) { $this->writejsonmouseleave($value); }

    function getjsOnMouseMove() { return $this->readjsonmousemove(); }
    function setjsOnMouseMove($value) { $this->writejsonmousemove($value); }

    function getjsOnMouseUp() { return $this->readjsonmouseup(); }
    function setjsOnMouseUp($value) { $this->writejsonmouseup($value); }

    function getjsOnMouseWheel() { return $this->readjsonmousewheel(); }
    function setjsOnMouseWheel($value) { $this->writejsonmousewheel($value); }

    function getjsOnResize() { return $this->readjsonresize(); }
    function setjsOnResize($value) { $this->writejsonresize($value); }

    function getjsOnStartDrag() { return $this->readjsonstartdrag(); }
    function setjsOnStartDrag($value) { $this->writejsonstartdrag($value); }

    //Publish common properties, temporary
    function getPopupMenu() { return $this->readpopupmenu(); }
    function setPopupMenu($value) { $this->writepopupmenu($value); }

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
      if ($this->_tabstop) echo "$this->Name.setFocusable(true);\n";
      echo "$this->Name.tabIndex=$this->_taborder;\n";
    }


    protected $_tabstop='1';

    function readTabStop() { return $this->_tabstop; }
    function writeTabStop($value) { $this->_tabstop=$value; }
    function defaultTabStop() { return '1'; }

    protected $_taborder=0;

    function readTabOrder() { return $this->_taborder; }
    function writeTabOrder($value) { $this->_taborder=$value; }
    function defaultTabOrder() { return 0; }

    function dumpJsEvents()
    {
      parent::dumpJsEvents();
      $this->dumpJSEvent($this->_jsonenter);
      $this->dumpJSEvent($this->_jsonexit);
      $this->dumpJSEvent($this->_jsonkeydown);
      $this->dumpJSEvent($this->_jsonkeypress);
      $this->dumpJSEvent($this->_jsonkeyup);
    }

    function attachJSEvents()
    {
        $result=parent::attachJSEvents();
        $result.=$this->mapJSEvent($this->_jsonenter,'focus');
        $result.=$this->mapJSEvent($this->_jsonexit,'blur');
        $result.=$this->mapJSEvent($this->_jsonkeydown,'keydown');
        $result.=$this->mapJSEvent($this->_jsonkeypress,'keypress');
        $result.=$this->mapJSEvent($this->_jsonkeyup,'keyup');

        //To perform submits
        $result.=$this->mapEventToJSHook($this->_onenter,'focus');
        $result.=$this->mapEventToJSHook($this->_onexit,'blur');
        $result.=$this->mapEventToJSHook($this->_onkeydown,'keydown');
        $result.=$this->mapEventToJSHook($this->_onkeypress,'keypress');
        $result.=$this->mapEventToJSHook($this->_onkeyup,'keyup');

        echo $result;
    }

    function init()
    {
      parent::init();
      $serverevent= $this->input->serverevent;

      if (is_object($serverevent))
      {
        $this->fireEvent('onenter',$this->_onenter, $serverevent->asString());
        $this->fireEvent('onexit',$this->_onexit, $serverevent->asString());
        $this->fireEvent('onkeydown',$this->_onkeydown, $serverevent->asString());
        $this->fireEvent('onkeypress',$this->_onkeypress, $serverevent->asString());
        $this->fireEvent('onkeyup',$this->_onkeyup, $serverevent->asString());
      }
    }


    protected $_jsonenter=null;

    function readjsOnEnter() { return $this->_jsonenter; }
    function writejsOnEnter($value) { $this->_jsonenter=$value; }
    function defaultjsOnEnter() { return null; }

    protected $_jsonexit=null;

    function readjsOnExit() { return $this->_jsonexit; }
    function writejsOnExit($value) { $this->_jsonexit=$value; }
    function defaultjsOnExit() { return null; }

    protected $_jsonkeydown=null;

    function readjsOnKeyDown() { return $this->_jsonkeydown; }
    function writejsOnKeyDown($value) { $this->_jsonkeydown=$value; }
    function defaultjsOnKeyDown() { return null; }

    protected $_jsonkeypress=null;

    function readjsOnKeyPress() { return $this->_jsonkeypress; }
    function writejsOnKeyPress($value) { $this->_jsonkeypress=$value; }
    function defaultjsOnKeyPress() { return null; }

    protected $_jsonkeyup=null;

    function readjsOnKeyUp() { return $this->_jsonkeyup; }
    function writejsOnKeyUp($value) { $this->_jsonkeyup=$value; }
    function defaultjsOnKeyUp() { return null; }

    //Publish js events
    function getjsOnEnter() { return $this->readjsonenter(); }
    function setjsOnEnter($value) { $this->writejsonenter($value); }

    function getjsOnExit() { return $this->readjsonexit(); }
    function setjsOnExit($value) { $this->writejsonexit($value); }

    function getjsOnKeyDown() { return $this->readjsonkeydown(); }
    function setjsOnKeyDown($value) { $this->writejsonkeydown($value); }

    function getjsOnKeyPress() { return $this->readjsonkeypress(); }
    function setjsOnKeyPress($value) { $this->writejsonkeypress($value); }

    function getjsOnKeyUp() { return $this->readjsonkeyup(); }
    function setjsOnKeyUp($value) { $this->writejsonkeyup($value); }

    //PHP Events
    protected $_onenter=null;

    function readOnEnter() { return $this->_onenter; }
    function writeOnEnter($value) { $this->_onenter=$value; }
    function defaultOnEnter() { return null; }

    protected $_onexit=null;

    function readOnExit() { return $this->_onexit; }
    function writeOnExit($value) { $this->_onexit=$value; }
    function defaultOnExit() { return null; }

    protected $_onkeydown=null;

    function readOnKeyDown() { return $this->_onkeydown; }
    function writeOnKeyDown($value) { $this->_onkeydown=$value; }
    function defaultOnKeyDown() { return null; }

    protected $_onkeypress=null;

    function readOnKeyPress() { return $this->_onkeypress; }
    function writeOnKeyPress($value) { $this->_onkeypress=$value; }
    function defaultOnKeyPress() { return null; }

    protected $_onkeyup=null;

    function readOnKeyUp() { return $this->_onkeyup; }
    function writeOnKeyUp($value) { $this->_onkeyup=$value; }
    function defaultOnKeyUp() { return null; }

    function getOnEnter() { return $this->readonenter(); }
    function setOnEnter($value) { $this->writeonenter($value); }

    function getOnExit() { return $this->readonexit(); }
    function setOnExit($value) { $this->writeonexit($value); }

    function getOnKeyDown() { return $this->readonkeydown(); }
    function setOnKeyDown($value) { $this->writeonkeydown($value); }

    function getOnKeyPress() { return $this->readonkeypress(); }
    function setOnKeyPress($value) { $this->writeonkeypress($value); }

    function getOnKeyUp() { return $this->readonkeyup(); }
    function setOnKeyUp($value) { $this->writeonkeyup($value); }


}


?>