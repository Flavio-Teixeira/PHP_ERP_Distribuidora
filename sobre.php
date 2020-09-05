<?php
require_once("vcl/vcl.inc.php");
//Inclusoes
use_unit("styles.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//Definicao de classe
class sobre extends Page
{
       public $Estilo_Pagina = null;
       public $contato_datatex = null;
       public $texto_datatex = null;
       public $logo_datatex = null;
       public $bt_ok = null;
       function bt_okClick($sender, $params)
       {
         redirect('frame_corpo.php');
       }
}

global $application;

global $sobre;

//Cria o formulario
$sobre=new sobre($application);

//Ler do arquivo de recursos
$sobre->loadResource(__FILE__);

//Mostrar o formulario
$sobre->show();

?>