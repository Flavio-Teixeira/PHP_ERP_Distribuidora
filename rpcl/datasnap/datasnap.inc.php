<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("classes.inc.php");
use_unit("db.inc.php");

//Class definition
class DSJavascriptClient extends Component
{
    function __construct($aowner = null)
    {
        parent::__construct($aowner);
    }

    function dumpHeaderCode()
    {
      if (!defined('SERVERFUNCTIONEXECUTOR.JS'))
      {
        echo '<script type="text/javascript" src="'.RPCL_HTTP_PATH.'/js/ServerFunctionExecutor.js" ></script>';
        echo "\n";
        echo '<script type="text/javascript" src="'.RPCL_HTTP_PATH.'/js/json-min.js" ></script>';
        echo "\n";
        define('SERVERFUNCTIONEXECUTOR.JS',1);
      }

      if ($this->_clientclassunit!='')
      {
        $auth='null';
        if (($this->_username!='') || ($this->_password!=''))
        {
          $auth='"'.base64_encode($this->_username.':'.$this->_password).'"';
        }
?>
<script type="text/javascript" src="<?php echo $this->_clientclassunit; ?>" ></script>
<script type="text/javascript">
var connectionInfo = {"host":"<?php echo $this->_host; ?>","port":<?php echo $this->_port; ?>,"authentication":<?php echo $auth; ?>};

for(var dsclass in JSProxyClassList)
{
  if (dsclass=='toJSONString') continue;
  var evalString = "( "+dsclass+"_instance= new " + dsclass + "(connectionInfo))";
  eval(evalString);
}

</script>
<?php
      }
    }

    protected $_host='';

    function getHost() { return $this->_host; }
    function setHost($value) { $this->_host=$value; }
    function defaultHost() { return ''; }

    protected $_port='';

    function getPort() { return $this->_port; }
    function setPort($value) { $this->_port=$value; }
    function defaultPort() { return ''; }

    protected $_username='';

    function getUsername() { return $this->_username; }
    function setUsername($value) { $this->_username=$value; }
    function defaultUsername() { return ''; }

    protected $_password='';

    function getPassword() { return $this->_password; }
    function setPassword($value) { $this->_password=$value; }
    function defaultPassword() { return ''; }

    protected $_pathprefix='';

    function getPathPrefix() { return $this->_pathprefix; }
    function setPathPrefix($value) { $this->_pathprefix=$value; }
    function defaultPathPrefix() { return ''; }


    protected $_dscontext='datasnap';

    function getDSContext() { return $this->_dscontext; }
    function setDSContext($value) { $this->_dscontext=$value; }
    function defaultDSContext() { return ''; }

    protected $_restcontext='rest';

    function getRESTContext() { return $this->_restcontext; }
    function setRESTContext($value) { $this->_restcontext=$value; }
    function defaultRESTContext() { return ''; }

    protected $_clientclassunit='';

    function getClientClassUnit() { return $this->_clientclassunit; }
    function setClientClassUnit($value) { $this->_clientclassunit=$value; }
    function defaultClientClassUnit() { return ''; }

}

class DSRestConnection extends Component
{
    function __construct($aowner = null)
    {
        parent::__construct($aowner);
    }

    function readConnectionInfo()
    {
      $result=array();
      //TODO: Return the rest of relevant properties
      if ($this->_host!='') $result['host']=$this->_host;
      if ($this->_port!='') $result['port']=$this->_port;

      if (($this->_username!='') || ($this->_password!=''))
      {
        $result['authentication']=base64_encode($this->_username.':'.$this->_password);
      }
      return($result);
    }

    protected $_context='';

    function getContext() { return $this->_context; }
    function setContext($value) { $this->_context=$value; }
    function defaultContext() { return ''; }

    protected $_host='';

    function getHost() { return $this->_host; }
    function setHost($value) { $this->_host=$value; }
    function defaultHost() { return ''; }

    protected $_password='';

    function getPassword() { return $this->_password; }
    function setPassword($value) { $this->_password=$value; }
    function defaultPassword() { return ''; }

    protected $_port='';

    function getPort() { return $this->_port; }
    function setPort($value) { $this->_port=$value; }
    function defaultPort() { return ''; }

    protected $_protocol='';

    function getProtocol() { return $this->_protocol; }
    function setProtocol($value) { $this->_protocol=$value; }
    function defaultProtocol() { return ''; }

    protected $_urlpath='';

    function getUrlPath() { return $this->_urlpath; }
    function setUrlPath($value) { $this->_urlpath=$value; }
    function defaultUrlPath() { return ''; }

    protected $_username='';

    function getUserName() { return $this->_username; }
    function setUserName($value) { $this->_username=$value; }
    function defaultUserName() { return ''; }
}

class SQLClientRecordSet extends Object
{
  public $fields=array();
}

class SQLClientDataset extends DataSet
{
    public $clientdatasetobject=null;
    public $_rs=null;
    public $_internalrecordcount=0;

    function __construct($aowner = null, $clientdatasetobject=null)
    {
        parent::__construct($aowner);
        //echo "here<hr>";
        //var_dump($clientdatasetobject->table);
        $this->_rs=new SQLClientRecordSet();
        $this->clientdatasetobject=$clientdatasetobject;

    }

    function readFields()
    {
      $result=array();
      reset($this->clientdatasetobject->table);
      foreach ($this->clientdatasetobject->table as $value)
      {
        $fname=$value[0];
        $result[$fname]=$this->clientdatasetobject->{$fname}[$this->_recno];
        $this->_internalrecordcount=count($this->clientdatasetobject->{$fname});
      }
      $this->_rs->fields=$result;
      return $result;
    }

    function readFieldProperties($fieldname)
    {
      return(false);
    }

    function internalFirst()
    {
      $this->_recno=0;
    }

    function readEOF()
    {
      return($this->_recno>=$this->_internalrecordcount);
    }
}

?>