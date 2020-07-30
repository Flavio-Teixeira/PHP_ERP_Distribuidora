<?php
use_unit("qooxdoo/stdctrls.inc.php");

class CustomTWTimeLine extends QCustomListBox
{
  protected $_user='';
  protected $_password='';
  public $service_url='';

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->Width = 400;
    $this->Height = 250;
  }

  function dumpGUICode()
  {
    parent::dumpGUICode();

    if ((($this->ControlState & csDesigning) != csDesigning) && ($this->User != '') && ($this->Password != '') )
    {
      $this->composeUrl();
      $this->dumpServiceClass();
      $this->dumpControllerAndStore();
    }
  }

  function composeUrl()
  {
    $this->service_url = "http://" . $this->user . ":" . $this->password . "@twitter.com/statuses/friends_timeline.json";
  }

  function dumpServiceClass()
  {
    echo "qx.Class.define(\"" . $this->Name . ".store.Twitter\",\n";
    echo "{\n";
    echo "extend : qx.data.store.Json,\n";
    echo "\n";
    echo "statics : {\n";
    echo "  saveResult: function(result) {\n";
    echo "  this.__result = result;\n";
    echo "  }\n";
    echo "},\n";
    echo "\n";
    echo "construct : function(user)\n";
    echo "{\n";
    echo "  var url = \"" . $this->service_url . "\";\n";
    echo "  this.base(arguments, url);\n";
    echo "},\n";
    echo "\n";
    echo "members :\n";
    echo "{\n";
    echo "  _createRequest: function(url) {\n";
    echo "  var loader = new qx.io.ScriptLoader();\n";
    echo "  url += \"?callback=" . $this->Name . ".store.Twitter.saveResult\";\n";
    echo "  loader.load(url, function(data) {\n";
    echo "    this.__loaded();\n";
    echo "  }, this);\n";
    echo "},\n";
    echo "\n";
    echo "\n";
    echo "__loaded: function() {\n";
    echo "  var data = " . $this->Name . ".store.Twitter.__result;\n";
    echo "\n";
    echo "  if (data == undefined) {\n";
    echo "    this.setState(\"failed\");\n";
    echo "    return;\n";
    echo "  }\n";
    echo "\n";
    echo "this._marshaler.toClass(data);\n";
    echo "this.setModel(this._marshaler.toModel(data));\n";
    echo "\n";
    echo "this.fireDataEvent(\"loaded\", this.getModel());\n";
    echo "}\n";
    echo "}\n";
    echo "});\n";
  }

  function dumpControllerAndStore()
  {
    echo $this->Name . "_controller = new qx.data.controller.List(null, $this->Name);\n";
    echo $this->Name . "_controller.setDelegate({\n";
    echo "  configureItem : function(item) {\n";
    echo "  item.getChildControl(\"icon\").setWidth(48);\n";
    echo "  item.getChildControl(\"icon\").setHeight(48);\n";
    echo "  item.getChildControl(\"icon\").setScale(true);\n";
    echo "  item.setRich(true);\n";
    echo "  }\n";
    echo "});\n";
    echo "\n";
    echo $this->Name . "_controller.setLabelPath(\"text\");\n";
    echo "if (!qx.core.Variant.isSet(\"qx.client\", \"mshtml\")) {\n";
    echo "  " . $this->Name . "_controller.setIconPath(\"user.profile_image_url\");\n";
    echo "}\n";
    echo $this->Name . "_store = new " . $this->Name . ".store.Twitter(\"qadram\");\n";
    echo $this->Name . "_store.bind(\"model\", " . $this->Name . "_controller, \"model\");\n";
  }

  function readUser()             { return $this->_user; }
  function writeUser($value)      { $this->_user=$value; }
  function defaultUser()          { return ''; }
  function readPassword()         { return $this->_password; }
  function writePassword($value)  { $this->_password=$value; }
  function defaultPassword()      { return ''; }
}

class TWFriendsTimeLine extends CustomTWTimeLine
{
  function getUser()              { return $this->readUser(); }
  function setUser($value)        { $this->writeUser($value); }

  function getPassword()          { return $this->readPassword(); }
  function setPassword($value)    { $this->writePassword($value); }
}

class TWUserTimeLine extends CustomTWTimeLine
{
  //echo "  var url = \"http://twitter.com/statuses/user_timeline/" + user + ".json";

  function __construct($aowner = null)
  {
    parent::__construct($aowner);
    $this->Password = 'nothing';
  }


  function composeUrl()
  {
    $this->service_url = "http://twitter.com/statuses/user_timeline/" . $this->user . ".json";
  }

  function dumpGUICode()
  {
    parent::dumpGUICode();
  }

  function getUser()            { return $this->readUser(); }
  function setUser($value)      { $this->writeUser($value); }
}

class TWUpdater
{

}

?>