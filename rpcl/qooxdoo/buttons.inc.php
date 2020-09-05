<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("qooxdoo/stdctrls.inc.php");


class QBitBtn extends QCustomButton
{

}

class QSpeedButton extends QCustomButton
{
    function __construct($aowner = null)
    {
        parent::__construct($aowner);
        $this->_width=25;
        $this->_height=25;
    }
}

?>