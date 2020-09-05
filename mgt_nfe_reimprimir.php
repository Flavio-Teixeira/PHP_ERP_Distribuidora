<?php
/*
+------------------------------------------------+
| Desenvolvido Por:                              |
| DATATEX INFORMATICA E SERVICOS LTDA            |
| System of the New Generation                   |
|                                                |
| http://www.datatex.com.br                      |
| sistemas@datatex.com.br                        |
| Fone: 55 11 2629-4605                          |
|                                                |
| PROTECAO AOS DIREITOS DE AUTOR E DO REGISTRO:  |
| Toda codificacao deste Sistema esta protegida  |
| pela Lei Nro.9609 onde se dispoe sobre a       |
| protecao da propriedade intelectual de         |
| programa de computador, sua comercializacao    |
| no Pais, e da outras providencias.             |
| ATENCAO: Nao e permitido efetuar alteracoes    |
| na codificacao do sistema, efetuar instalacoes | 
| em outros computadores, copias e utiliza-lo    |
| como base no desenvolvimento de outro sistema  |
| semelhante ou de igual funcionamento.          |
+------------------------------------------------+
*/
require_once("vcl/vcl.inc.php");
//Inclusoes
require_once("conexao_principal.php");
use_unit("styles.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Definicao de classe
class mgtnfereimprimir extends Page
{
   public $nfe_chave = null;
   public $Label1 = null;
   public $nfe_numero_nota = null;
   public $MSG_Erro = null;
   public $Estilo_Pagina = null;
   public $GroupBox3 = null;
   public $bt_fechar = null;
   public $bt_enviar = null;
   public $Label7 = null;
   public $GroupBox1 = null;
   public $area_sistema = null;
   function nfe_chaveJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfereimprimir.nfe_chave
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero ***

   <?php

   }

   function nfe_chaveJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfereimprimir.bt_enviar.focus();
     return false;
   }

   <?php

   }

   function bt_enviarClick($sender, $params)
   {
      if(trim($this->nfe_numero_nota->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Numero da Nota Fiscal Nao Informado';
      }
      elseif(trim($this->nfe_chave->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Chave de Acesso Nao Informada';
      }
      else
      {
         if(file_exists('nfe/entregar_cliente/NFe_' . Trim($this->nfe_numero_nota->Text) . '.xml'))
         {
            $this->MSG_Erro->Caption = '';

            //*** Abre a Janela do DANFE ***

            echo "<script language=\"JavaScript\">";
            echo "var pos_top = (parseInt((screen.height)/2) - 320);";
            echo "var pos_left = (parseInt((screen.width)/2) - 387);";
            echo "window.open('mgt_nfe_danfe.php?reimpressao=S&nfe=" . "NFe_" . trim($this->nfe_numero_nota->Text) . ".xml&ch=" . trim($this->nfe_chave->Text) . "','NFe_" . trim($this->nfe_numero_nota->Text) . "','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
            echo 'window.location="frame_corpo.php";';
            echo "</script>";
         }
         else
         {
            $this->MSG_Erro->Caption = 'Arquivo XML da Nota Fiscal nao foi encontrado';
         }
      }
   }


   function nfe_numero_notaJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfereimprimir.nfe_numero_nota
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero ***

<?php

   }

   function nfe_numero_notaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfereimprimir.nfe_chave.focus();
     return false;
   }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }


   function mgtnfereimprimirCreate($sender, $params)
   {
      require_once("includes/valida_sessao.inc.php");

      //*************************************
      //*** INICIO - Validacao de Leitura ***
      //*************************************

      $tag_permissao = trim($this->Name);
      $tag_permissao = str_replace('alt', '', $tag_permissao);
      $tag_permissao = str_replace('inc', '', $tag_permissao);
	  $tag_permissao = $_SESSION['login_permissao_' . trim($tag_permissao)];
	  
      if($tag_permissao == "2")
      {
        if( isset($this->bt_incluir) )
        {
           $this->bt_incluir->Visible = false;
        }
        if( isset($this->bt_alterar) )
        {
           $this->bt_alterar->Visible = false;
        }
        if( isset($this->bt_excluir) )
        {
           $this->bt_excluir->Visible = false;
        }
      }
      elseif($tag_permissao == "0")
      {
 	     redirect('frame_corpo.php');
	  }

      //************************************
      //*** FINAL - Validacao de Leitura ***
      //************************************

      //***************************************************
      //*** INICIO - Limpa todos os Dados do Formulario ***
      //***************************************************

      error_reporting(0);
      ini_set('display_errors', '1');

      //**************************************************
      //*** FINAL - Limpa todos os Dados do Formulario ***
      //**************************************************
   }

   function mgtnfereimprimirJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $mgtnfereimprimir;

//Cria o formulario
$mgtnfereimprimir = new mgtnfereimprimir($application);

//Ler do arquivo de recursos
$mgtnfereimprimir->loadResource(__FILE__);

//Mostrar o formulario
$mgtnfereimprimir->show();

?>