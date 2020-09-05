<?php
/**
*  Password Strength component
*
*  Copyright (c) 2004-2011 Embarcadero Technologies, Inc. 
*
*  An RPCL wrapper over Password Strength - jQuery Plugin
*
*  Examples and documentation at: http://plugins.jquery.com/project/password_strength
*
* Copyright (c) 2010 Sagie Maoz <n0nick@php.net>
* Licensed under the GPL license, see http://www.gnu.org/licenses/gpl-3.0.html
*
*/

require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("jquery/jquery.inc.php");
use_unit("controls.inc.php");

/**
* A component that verifies the security of a password, using Jquery
*
* This component verifies a password
*/
class PasswordStrength extends Component
{

     /**
    * Dumps all the code required at the document header
    */
    function dumpHeaderCode()
    {
      jQuery();
        if(!defined('PASSWORDSTRENGTH'))
        {
            define('PASSWORDSTRENGTH',1);
            ?>
	              <script type="text/javascript" src="<?php echo RPCL_HTTP_PATH; ?>/passwordstrength/jquery.password_strength.js"></script>
            <?php
        }
        if (($this->ControlState & csDesigning) != csDesigning){

          if($this->_inputpassword!=null && $this->_messagelabel!=null){
            //Setup properties of component
            $this->_messages=$this->_messages+$this->_messagesoriginal;
            ?>
            <script type="text/javascript">
                $(function(){
                $("input[id=<?php echo $this->_inputpassword->name;?>]").password_strength({
                  'container'      :<?php echo $this->_messagelabel->Name;?>,
                  'minLength'      :'<?php echo $this->_minlength;?>',
                  'texts': {1:"<?php echo $this->_messages['0']?>",
                         2:"<?php echo $this->_messages['1']?>",
                         3:"<?php echo $this->_messages['2']?>",
                         4:"<?php echo $this->_messages['3']?>",
                         5:"<?php echo $this->_messages['4']?>"
                         }
                  });
                });
                </script>

        <?php
              }
          //Code CSS
          ?>
          <style type="text/css">
          .password_strength_1
          {
              color:<?php echo $this->_colormessage1?>;
          }
          .password_strength_2
          {
              color:<?php echo $this->_colormessage2?>;
          }
          .password_strength_3
          {
              color:<?php echo $this->_colormessage3?>;
          }
          .password_strength_4
          {
              color:<?php echo $this->_colormessage4?>;
          }
          .password_strength_5
          {
              color:<?php echo $this->_colormessage5?>;
          }
          </style>
          <?php
           }
    }
    function __construct($aowner = null)
    {
        parent::__construct($aowner);

        /**
        *  Define the default messages
        */
        $this->_messagesoriginal=array(
        '0' => 'Too weak',
			  '1' => 'Weak password',
			  '2' => 'Normal strength',
			  '3' => 'Strong password',
			  '4' => 'Very strong password'
        );

    }

    function loaded()
    {
        parent::loaded();
        //Resolves references of Edit object and Label object
        $this->_inputpassword=$this->fixupProperty($this->_inputpassword);
        $this->_messagelabel=$this->fixupProperty($this->_messagelabel);
    }

    protected $_minlength=6;
    /**
    * Set the minimun length to password
    *
    * Use this properties for define the minimun length of password
    *
    * @return string
    */
    function getMinLength() { return $this->_minlength; }
    function setMinLength($value) { $this->_minlength=$value; }
    function defaultMinLength() { return 6; }

    private $_messagesoriginal=array();

    /**
    *
    *  Array of default messages
    *
    */
    protected $_messages=array();

    /**
    * Array of messages defines by user
    *
    * These messages are used to return the status of password. Must be 5 messsages
    *
    * @return array;
    */

    function getMessages() { return $this->_messages; }
    function setMessages($value) { $this->_messages=$value; }
    function defaultMessages() { return array(); }

    protected $_colormessage1='';

    /**
    * Color used for first message
    *
    * This color define the color of first message text.
    * You can use any HTML color
    *
    * @return string
    */
    function getColorMessage1() { return $this->_colormessage1; }
    function setColorMessage1($value) { $this->_colormessage1=$value; }
    function defaultColorMessage1() { return ''; }

    protected $_colormessage2='';

    /**
    * Color used for second message
    *
    * This color define the color of second message text.
    * You can use any HTML color
    *
    * @return string
    */
    function getColorMessage2() { return $this->_colormessage2; }
    function setColorMessage2($value) { $this->_colormessage2=$value; }
    function defaultColorMessage2() { return ''; }

    protected $_colormessage3='';
    /**
    * Color used for third message
    *
    * This color define the color of third message text.
    * You can use any HTML color
    *
    * @return string
    */
    function getColorMessage3() { return $this->_colormessage3; }
    function setColorMessage3($value) { $this->_colormessage3=$value; }
    function defaultColorMessage3() { return ''; }

    protected $_colormessage4='';
    /**
    * Color used for fourth message
    *
    * This color define the color of fourth message text.
    * You can use any HTML color
    *
    * @return string
    */
    function getColorMessage4() { return $this->_colormessage4; }
    function setColorMessage4($value) { $this->_colormessage4=$value; }
    function defaultColorMessage4() { return ''; }

    protected $_colormessage5='';
    /**
    * Color used for fifth message
    *
    * This color define the color of fifth message text.
    * You can use any HTML color
    *
    * @return string
    */
    function getColorMessage5() { return $this->_colormessage5; }
    function setColorMessage5($value) { $this->_colormessage5=$value; }
    function defaultColorMessage5() { return ''; }

    protected $_inputpassword=null;


    /**
    * Set the Edit used for password.
    *
    * Use this property to attach Edit object for check password.
    *
    * @return Edit
    */
    function getInputPassword() { return $this->_inputpassword; }
    function setInputPassword($value) { $this->_inputpassword=$this->fixupProperty($value); }
    function defaultInputPassword() { return null; }

    protected $_messagelabel=null;
    /**
    *
    * Set the Label used to show messages.
    *
    * Use this property to attach Label object used for show the messages status of password.
    *
    * @return Label
    */
    function getMessageLabel() { return $this->_messagelabel; }
    function setMessageLabel($value) { $this->_messagelabel=$this->fixupProperty($value); }
    function defaultMessageLabel() { return null; }


}

?>