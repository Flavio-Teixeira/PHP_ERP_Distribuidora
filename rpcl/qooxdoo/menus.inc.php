<?php
  use_unit("qooxdoo/controls.inc.php");

class QMenu extends QControl
{
    protected $_items=array();

    function getItems() { return $this->_items; }
    function setItems($value) { $this->_items=$value; }
    function defaultItems() { return array(); }
}

class QPopupMenu extends QComponent
{
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

    protected $_jsonclick=null;

    function getjsOnClick() { return $this->_jsonclick; }
    function setjsOnClick($value) { $this->_jsonclick=$value; }
    function defaultjsOnClick() { return null; }

    protected $_onclick=null;

    function getOnClick() { return $this->_onclick; }
    function setOnClick($value) { $this->_onclick=$value; }
    function defaultOnClick() { return null; }


    protected $_images=null;

    function getImages() { return $this->_images; }
    function setImages($value) { $this->_images=$this->fixupProperty($value); }
    function defaultImages() { return null; }

    function loaded()
    {
      parent::loaded();
      $this->setImages($this->_images);
    }


    protected $_items=array();

    function getItems() { return $this->_items; }
    function setItems($value) { $this->_items=$value; }
    function defaultItems() { return array(); }

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
      }
    }




    function dumpJavascript()
    {
      parent::dumpJavascript();


      echo "function $this->Name".'_init(container)'."\n";
      echo "{\n";
      $this->dumpMenuItems($this->Name, $this->_items, 0);
      echo "}\n";
      QControl::$initfunctions[]=$this->Name.'_init';

      $this->dumpJSEvent($this->_jsonclick);
    }

    private function dumpMenuItems($name, $items, $level)
    {
      if (isset($elements)) unset($elements);

      reset($items);                     // $this->_items -> $k
      while(list($index, $item) = each($items))
      {
        $caption=$item['Caption'];
        $imageindex=$item['ImageIndex'];

        if (($this->_images != null) && (is_object($this->_images)))
        {
          $image = $this->_images->readImageByID($imageindex, 1);
        }
        else
        {
          $image = "null";
        }

        $tag = $item['Tag'];
        if ($tag == '') $tag=0;

        $itemname = $name . "_it" . $level . "_" . $index;

        if ($caption=='-')
        {
          echo "    var $itemname = new qx.ui.menu.Separator();\n";
        }
        else
        {
          $submenu = "null";
          $subitems = $item['Items'];

          // check if has subitems
          if ((isset($subitems)) && (count($subitems)))
          {
            $submenu = $name . "_sm" . $level . "_" . $index;
            $this->dumpMenuItems($submenu, $subitems, ($level + 1));

            $avalue=str_replace('"','\"',$caption);
            echo "    var $itemname = new qx.ui.menu.Button(\"$avalue\", $image, null, $submenu);\n";
          }
          else
          {
            $avalue=str_replace('"','\"',$caption);
            //echo "    var " . $itemname . "Cmd = new qx.client.Command();\n"
            //. "    " . $itemname . "Cmd.addEventListener(\"execute\", function (e) {  SubmitMenuEvent(e, $tag); });\n\n"
            //. "    var $itemname = new qx.ui.menu.Button(\"$avalue\", $image, " . $itemname . "Cmd);\n";

            echo "    var $itemname = new qx.ui.menu.Button(\"$avalue\", $image, null);\n";
            echo "    $itemname.tag=$tag;\n";
            if ($this->_jsonclick!='')
            {
              echo $this->mapJSEventToItem($itemname,$this->_jsonclick,'click');
            }
            else echo $this->mapEventToItem($itemname,$this->_onclick,'click','"tag="+e.getTarget().tag');

          }
        }
        $elements[] = $itemname;
      }

      if (isset($elements))
      {
        echo "      ";
        if ($level != 0) echo "var ";
        echo "$name = new qx.ui.menu.Menu();\n";

        foreach($elements as $element)
        {
          echo "    $name.add(" . $element . ");\n";
        }
        unset($elements);
      }
      else echo "$name = null;\n";
    }

}

class QMainMenu extends QMenu
{
    protected $_images=null;


      /**
       * Dump all menu items
       *
       * @param array $items Array of items to dump
       * @param integer $level Level to use when dumping items
       * @param boolean $create Creates a top menu object or not
       *
       *
       * <code>
       * <?php
       *     function MainMenu1BeforeShow($sender, $params)
       *     {
       *       $items=array();
       *
       *       $subitems=array();
       *       $subitems[]=array(
       *              'Caption'=>'Sub Menu1',
       *              'ImageIndex'=>0,
       *              'SelectedIndex'=>0,
       *              'StateIndex'=>-1,
       *              'Tag'=>1
       *       );
       *
       *       $subitems[]=array(
       *              'Caption'=>'Sub Menu2',
       *              'ImageIndex'=>0,
       *              'SelectedIndex'=>0,
       *              'StateIndex'=>-1,
       *              'Tag'=>2
       *       );
       *
       *       $items[]=array(
       *              'Caption'=>'Top Menu',
       *              'ImageIndex'=>0,
       *              'SelectedIndex'=>0,
       *              'StateIndex'=>-1,
       *              'Tag'=>0,
       *              'Items'=>$subitems
       *       );
       *
       *       $this->MainMenu1->Items=$items;
       *     }
       * ?>
       * </code>
       *
       * @return string
       */
      function dumpMenuItems($items,$level,$create=true)
      {
        if ($create)
        {
          echo "  var m$level = new qx.ui.menu.Menu;\n";
        }

        reset($items);
        while(list($k,$v)=each($items))
        {
          $caption=$v['Caption'];
          $tag=$v['Tag'];
          if ($tag=='') $tag=0;

          if ($caption=='-')
          {
            echo "var mb$level"."_$k = new qx.ui.menu.Separator();\n";
          }
          else
          {
            $sub='null';

            if ((isset($v['Items'])) && (count($v['Items'])))
            {
              $sub="m".($level+1);
              echo "  var $sub = new qx.ui.menu.Menu;\n";
            }


            $img='null';

            if (($this->ControlState & csDesigning)!==csDesigning)
            {
              if (isset($v['ImageIndex']))
              {
                $img=$v['ImageIndex'];
                if ($img<>'')
                {
                  if ($this->Images!=null)
                  {
                    $path=$this->Images->readImage($img);
                    if ($path===false)
                    {
                      $img='null';
                    }
                    else
                    {
                      $img='"'.$path.'"';
                    }
                  }
                }
                else $img='null';
              }
            }

            $avalue=str_replace('"','\"',$caption);
            echo "  var mb$level" . "_$k = new qx.ui.menu.Button(\"$avalue\", $img, null, $sub);\n";
            if ($this->_jsonclick!='')
            {
              echo $this->mapJSEventToItem("mb$level"."_$k",$this->_jsonclick,'click');
            }
            else echo $this->mapEventToItem("mb$level"."_$k",$this->_onclick,'click','"tag="+e.getTarget().tag');
            echo "  mb$level" . "_$k.tag=$tag;\n";
          }

          echo "  m$level.add(mb$level" . "_$k);\n";

          if ((isset($v['Items'])) && (count($v['Items'])))
          {
            $this->dumpMenuItems($v['Items'],$level+1, false);
          }
        }
      return('m'.$level);
    }

    function generateJSEventsCode()
    {
      //Prevent the default behavior for OnClick to be generated
      $event=$this->_onclick;
      $this->_onclick='';

      $jsevent=$this->_jsonclick;
      $this->_jsonclick='';

      $result=parent::generateJSEventsCode();

      $this->_onclick=$event;
      $this->_jsonclick=$jsevent;
      return($result);
    }


        /**
         * Lists the images that can appear beside individual menu items.
         *
         * Use this property if you want to add images to your items. Set it to
         * an ImageList object containing the images you want to use and use the
         * ImageIndex of each item to set the image you want to show.
         *
         * @return ImageList
         */
        function getImages() { return $this->_images; }
        function setImages($value) { $this->_images=$this->fixupProperty($value); }
        function defaultImages() { return ""; }



    function dumpItems()
    {
      if (is_array($this->_items))
      {
        reset($this->_items);
        while(list($k,$subitems)=each($this->_items))
        {
          $caption=str_replace('"','\"',$subitems['Caption']);
          $menu='null';

          if ((isset($subitems['Items'])) && (count($subitems['Items']))) $menu=$this->dumpMenuItems($subitems['Items'],0);

          echo "  var mb = new qx.ui.menubar.Button(\"$caption\",null, $menu);\n";
          echo "  $this->Name.add(mb);\n";
        }
      }
    }

            function loaded()
            {
                parent::loaded();
                $this->setImages($this->_images);
            }


    function dumpGUICode()
    {
      echo "$this->Name = new qx.ui.menubar.MenuBar;\n";
      $this->dumpItems();
      parent::dumpGUICode();
    }

    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=400;
        $this->_height=24;
    }
}
?>