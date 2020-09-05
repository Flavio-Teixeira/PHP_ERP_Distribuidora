<?php
/**
*  NotifyBar component
*
*  Copyright (c) 2004-2011 Embarcadero Technologies, Inc. 
*
*  An RPCL wrapper over JBar - Jquery plugin
*  Displays a notification bar with text above or below the page
*  Can be used with object association or call the function notifybar_execute
*
*  Important for use in IE: You have added a doctype valid.
*
*  Examples and documentation at: http://www.tympanus.net/jbar/
*
*  Version 1.1:
*  - Fixed problem with IE when message take width of the associated button
*  Component Icon
*  http://pixel-mixer.com
*/

require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("jquery/jquery.inc.php");
use_unit("controls.inc.php");
//Class definition
define('ptTop', 'ptTop');
define('ptBottom', 'ptBottom');

define ('pbLeft','pbLeft');
define ('pbRight','pbRight');

class NotifyBar extends Component
{
    function __construct($aowner = null)
    {
        parent::__construct($aowner);

    }

     function loaded()
    {
        parent::loaded();
        //Resolves references of Button object
        $this->_control=$this->fixupProperty($this->_control);

    }

     /**
    * Dumps all the code required at the document header
    */
    function dumpHeaderCode()
    {
        jQuery();
        if(!defined('NOTIFYBAR'))
        {
            define('NOTIFYBAR',1);
            ?>
                <script type="text/javascript" src="<?php echo RPCL_HTTP_PATH; ?>/notifybar/jquery.bar.js"></script>
                <link rel="stylesheet" type="text/css" href="<?php echo RPCL_HTTP_PATH;?>/notifybar/css/style.css" media="screen"/>
             <?php

            }

        if (($this->ControlState & csDesigning) != csDesigning){
          if($this->_control!=null){
            ?>
            <script type="text/javascript">
            $(function(){
            $("#<?php echo $this->_control->name;?>").bar({
			          color 			 : '<?php echo $this->_textcolor;?>',
			          background_color : '<?php echo $this->_backgroundcolor;?>',
			          removebutton     : <?php echo $this->_closebutton;?>,
			          message			 : '<?php echo $this->_message;?>',
			          time			 : <?php echo $this->_duration?>,
                position: '<?php  switch ($this->_position)
                                       {
                                          case ptBottom: echo 'bottom';break;
                                          case ptTop: echo 'top';break;
                                       }
                                       ?>'
        		});
            });
         </script>
         <?php }?>
          <style>
          a.jbar-cross{
              <?php if($this->_closebuttonimage!=''){?>
	            background:transparent url(<?php echo $this->_closebuttonimage?>) no-repeat top left;
              <?php }?>
	            <?php switch($this->_closebuttonposition){
                        case pbLeft: echo "left";break;
                        case pbRight: echo "right:";break;
                        }?>:10px;
          }
          <?php if($this->_closebuttonhoverimage!=''){?>
          a.jbar-cross:hover{
	            background-image: url(<?php echo $this->_closebuttonhoverimage?>);
          }
          <?php }?>
          </style>
     <script type="text/javascript">
     /*
       Function to use notify bar without button associated.
     */
      function <?php echo $this->Name?>_execute(message,position,closebutton,duration,backgroundcolor,color){
          if(position==undefined || position=='')
          {
             <?php if($this->_position==ptTop){?>
              position='top';
             <?php }else{?>
              position='bottom';
              <?php }?>
          }
          if(closebutton==undefined || closebutton=='')
          {
              closebutton=<?php echo $this->_closebutton;?>;
          }
          if(duration==undefined ||duration=='')
          {
              duration= '<?php echo $this->_duration;?>';
          }
          if(backgroundcolor==undefined || backgroundcolor=='')
          {
              backgroundcolor= '<?php echo $this->_backgroundcolor;?>';
          }
          if(color==undefined || color=='')
          {
              color= '<?php echo $this->_textcolor;?>';
          }
          if(message==undefined || message=='')
          {
              message= '<?php echo $this->_message; ?>';
          }
          var opts={
              message:message,
              removebutton:closebutton,
              time:duration,
              position:position,
              background_color:backgroundcolor,
              color:color
            };
            var element=$('body');
          $().bar.bar_execute(element,opts);
            }
          </script>

            <?php
        }
    }

    protected $_control=null;
    /**
    * Set the object button to display the notification window
    *
    * Used to define the associated button, when is clicked, show the message
    *
    * @return Button
    */
    function getControl() { return $this->_control; }
    function setControl($value) { $this->_control=$this->fixupProperty($value); }
    function defaultControl() { return null; }

    protected $_closebutton="false";

    /**
    * Toggle close button
    *
    * Use this property to show or hide the close button at the top right of the message,
    * if disabled, the user will have to click on the content.
    *
    * @return Boolean
    */
    function getCloseButton() { return $this->_closebutton; }
    function setCloseButton($value) { $this->_closebutton=$value; }
    function defaultCloseButton() { return "false"; }

    protected $_position=ptTop;

    /**
    * Set position of message about page
    *
    * Set the position of message. The options are "bottom" or "top"
    *
    * return String
    */
    function getPosition() { return $this->_position; }
    function setPosition($value) { $this->_position=$value; }
    function defaultPosition() { return ptTop; }

    protected $_duration=4000;

    /**
    *  Set time delay to disappear notify
    *
    * Used to define the time it takes away the message
    *
    * @return Integer
    */
    function getDuration() { return $this->_duration; }
    function setDuration($value) { $this->_duration=$value; }
    function defaultDuration() { return 4000; }

    protected $_backgroundcolor='#FFFFFF';

    /**
    *  Set background color of notify bar
    *
    * Used to define the background color to notify.
    *
    * @return String
    */

    function getBackgroundColor() { return $this->_backgroundcolor; }
    function setBackgroundColor($value) { $this->_backgroundcolor=$value; }
    function defaultBackgroundColor() { return '#FFFFFF'; }

    protected $_textcolor='#000000';

    /**
    * Set value to text color
    *
    * Used to define color used to text message.
    *
    * @return String
    */
    function getTextColor() { return $this->_textcolor; }
    function setTextColor($value) { $this->_textcolor=$value; }
    function defaultTextColor() { return '#000000'; }

    protected $_message='';

    /**
    *  Set message
    *
    * Used to define message of notify bar.
    *
    * @return String
    */

    function getMessage() { return $this->_message; }
    function setMessage($value) { $this->_message=$value; }
    function defaultMessage() { return ''; }

    protected $_closebuttonimage='';
    /**
    * Set image to use for close button
    *
    * Used to define the image of closebutton
    *
    * @return String
    */
    function getCloseButtonImage() { return $this->_closebuttonimage; }
    function setCloseButtonImage($value) { $this->_closebuttonimage=$value; }
    function defaultCloseButtonImage() { return ''; }

    protected $_closebuttonhoverimage='';

    /**
    * Set image to use for close button hover
    *
    * Used to define the imagen of event hover of closebutton
    *
    * @return String
    */
    function getCloseButtonHoverImage() { return $this->_closebuttonhoverimage; }
    function setCloseButtonHoverImage($value) { $this->_closebuttonhoverimage=$value; }
    function defaultCloseButtonHoverImage() { return ''; }

    protected $_closebuttonposition=pbRight;

    /**
    * Set position of close button
    *
    * Used to define the position of close button image. The values are Left or Right
    *
    * @return String
    */
    function getCloseButtonPosition() { return $this->_closebuttonposition; }
    function setCloseButtonPosition($value) { $this->_closebuttonposition=$value; }
    function defaultCloseButtonPosition() { return pbRight; }


}

?>