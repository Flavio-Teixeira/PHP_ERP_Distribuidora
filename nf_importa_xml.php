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
//Includes
require_once("conexao_principal.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class nfimportaxml extends Page
{
   public $Label1 = null;
   public $arquivo_xml_entrada = null;
   public $bt_gerar = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function bt_gerarClick($sender, $params)
   {
      if(trim($this->arquivo_xml_entrada->FileName) == '')
      {
         $this->MSG_Erro->Caption = "Por favor, informe o a Localizacao do arquivo XML.";
      }
      else
      {
         if(substr(trim($_SERVER['SystemRoot']), 0, 1) == 'C')
         {
            $file = trim($_SESSION['login_caminho_base']) . "nfe_entrada\\" . $this->arquivo_xml_entrada->FileName;
         }
         else
         {
            $file = trim($_SESSION['login_caminho_base']) . "nfe_entrada/" . $this->arquivo_xml_entrada->FileName;
         }

         $this->arquivo_xml_entrada->moveUploadedFile($file);

         $this->MSG_Erro->Caption = "Arquivo importado com Sucesso.";

         //*** Abre a Tela do DANFE e Importa as Informacoes para o Banco de Dados ***

         $_SESSION['xml_entrada'] = $this->arquivo_xml_entrada->FileName;

         echo "<script language=\"JavaScript\">";
         echo "window.open('nf_importa_xml_gerar.php','nf_importa_xml_gerar','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo 'window.location="frame_corpo.php";';
         echo "</script>";
      }
   }

   function arquivo_xml_entradaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

       if((event.keyCode == 9) || (event.keyCode == 13) )
       {
         document.nfimportaxml.bt_gerar.focus();
         return false;
       }
<?php

   }


   function nfimportaxmlCreate($sender, $params)
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

      $this->MSG_Erro->Caption = '';
   }

   function bt_fecharClick($sender, $params)
   {
         redirect('frame_corpo.php');
   }
   function nfimportaxmlJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfimportaxml;

//Creates the form
$nfimportaxml = new nfimportaxml($application);

//Read from resource file
$nfimportaxml->loadResource(__FILE__);

//Shows the form
$nfimportaxml->show();

?>