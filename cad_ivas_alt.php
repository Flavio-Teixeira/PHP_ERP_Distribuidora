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
class cadivasalt extends Page
{
   public $mgt_operacao_cadastro_motivo = null;
   public $Label11 = null;
   public $Label3 = null;
   public $mgt_iva_aliquota_interna = null;
   public $Label4 = null;
   public $mgt_iva_estado = null;
   public $mgt_iva_valor = null;
   public $Label1 = null;
   public $mgt_iva_ncm = null;
   public $Label2 = null;
   public $Label8 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $confirmacao = null;
   public $bt_excluir = null;
   public $bt_alterar = null;
   public $MSG_Erro = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function mgt_iva_aliquota_internaJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadivasalt.mgt_iva_aliquota_interna;
   var digits="0123456789.,";
   var campo_temp;
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1);
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }
   campo.value = campo.value.replace(',','.');

   //*** FINAL - So Valor ***

   <?php

   }

   function mgt_iva_aliquota_internaJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadivasalt.bt_alterar.focus();
     return false;
   }

   <?php

   }

   function mgt_iva_valorJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadivasalt.mgt_iva_valor;
   var digits="0123456789.,";
   var campo_temp;
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1);
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }
   campo.value = campo.value.replace(',','.');

   //*** FINAL - So Valor ***

   <?php

   }

   function mgt_iva_valorJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadivasalt.mgt_iva_aliquota_interna.focus();
     return false;
   }

   <?php

   }

   function mgt_iva_ncmJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadivasalt.mgt_iva_valor.focus();
     return false;
   }

   <?php

   }


   function bt_simClick($sender, $params)
   {
      if(trim($this->mgt_operacao_cadastro_motivo->text) <> '')
      {
         //*** Registra o motivo da exclusao do registro. ***

         $Comando_SQL = "insert into mgt_operacoes_cadastros(";
         $Comando_SQL .= "mgt_operacao_cadastro_data, ";
         $Comando_SQL .= "mgt_operacao_cadastro_hora, ";
         $Comando_SQL .= "mgt_operacao_cadastro_usuario, ";
         $Comando_SQL .= "mgt_operacao_cadastro_area, ";
         $Comando_SQL .= "mgt_operacao_cadastro_operacao, ";
         $Comando_SQL .= "mgt_operacao_cadastro_codigo_chave, ";
         $Comando_SQL .= "mgt_operacao_cadastro_motivo) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
         $Comando_SQL .= "'" . date("H:i:s", time()) . "',";
         $Comando_SQL .= "'" . trim($_SESSION['login_usuario']) . "',";
         $Comando_SQL .= "'" . trim($this->area_sistema->Caption) . "',";
         $Comando_SQL .= "'" . 'Exclusao' . "',";
         $Comando_SQL .= "'" . trim(trim($this->mgt_iva_estado->Text) . "/" . trim($this->mgt_iva_ncm->Text)) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

      $Comando_SQL = "delete from mgt_ivas ";
      $Comando_SQL .= " where ";
      $Comando_SQL .= "mgt_iva_estado='" . trim($this->mgt_iva_estado->Text) . "' and ";
      $Comando_SQL .= "mgt_iva_ncm='" . trim($this->mgt_iva_ncm->Text) . "'";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      $this->confirmacao->Top = 203;
      $this->confirmacao->IsVisible = false;

      //*** Restaura a Ultima Selecao Efetuada ***
      GetConexaoPrincipal()->SQL_MGT_IVA->Close();
      GetConexaoPrincipal()->SQL_MGT_IVA->SQL = $_SESSION['comando_sql_grid'];
      GetConexaoPrincipal()->SQL_MGT_IVA->Open();

      redirect('cad_ivas.php');
         }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 203;
      $this->confirmacao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 84;
      $this->confirmacao->IsVisible = true;
   }

   function cadivasaltCreate($sender, $params)
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

      $mgt_iva_estado = $_REQUEST['mgt_iva_estado'];
      $mgt_iva_ncm = $_REQUEST['mgt_iva_ncm'];

      $Comando_SQL = "select * from mgt_ivas where mgt_iva_estado = '" . trim($mgt_iva_estado) . "' and mgt_iva_ncm = '" . trim($mgt_iva_ncm) . "' order by mgt_iva_estado";

      GetConexaoPrincipal()->SQL_MGT_IVA->Close();
      GetConexaoPrincipal()->SQL_MGT_IVA->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_IVA->Open();

      $this->mgt_iva_estado->Text = $mgt_iva_estado;
      $this->mgt_iva_ncm->Text = $mgt_iva_ncm;
      $this->mgt_iva_valor->Text = GetConexaoPrincipal()->SQL_MGT_IVA->Fields['mgt_iva_valor'];
      $this->mgt_iva_aliquota_interna->Text = GetConexaoPrincipal()->SQL_MGT_IVA->Fields['mgt_iva_aliquota_interna'];

      $this->MSG_Erro->Caption = "";
   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_IVA->Close();
         GetConexaoPrincipal()->SQL_MGT_IVA->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_IVA->Open();

         redirect('cad_ivas.php');
   }

   function bt_alterarClick($sender, $params)
   {
      if(trim($this->mgt_iva_estado->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Estado.";
      }
      elseif(trim($this->mgt_iva_ncm->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de NCM.";
      }
      elseif(trim($this->mgt_iva_valor->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Valor do IVA.";
      }
      elseif(trim($this->mgt_iva_aliquota_interna->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Aliquota Interna.";
      }
      else
      {
         $Comando_SQL = "update mgt_ivas set ";
         $Comando_SQL .= "mgt_iva_valor ='" . trim($this->mgt_iva_valor->Text) . "', ";
         $Comando_SQL .= "mgt_iva_aliquota_interna ='" . trim($this->mgt_iva_aliquota_interna->Text) . "' where ";
         $Comando_SQL .= "mgt_iva_estado='" . trim($this->mgt_iva_estado->Text) . "' and ";
         $Comando_SQL .= "mgt_iva_ncm ='" . trim($this->mgt_iva_ncm ->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Registra o motivo da alteracao do registro. ***

         $Comando_SQL = "insert into mgt_operacoes_cadastros(";
         $Comando_SQL .= "mgt_operacao_cadastro_data, ";
         $Comando_SQL .= "mgt_operacao_cadastro_hora, ";
         $Comando_SQL .= "mgt_operacao_cadastro_usuario, ";
         $Comando_SQL .= "mgt_operacao_cadastro_area, ";
         $Comando_SQL .= "mgt_operacao_cadastro_operacao, ";
         $Comando_SQL .= "mgt_operacao_cadastro_codigo_chave, ";
         $Comando_SQL .= "mgt_operacao_cadastro_motivo) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
         $Comando_SQL .= "'" . date("H:i:s", time()) . "',";
         $Comando_SQL .= "'" . trim($_SESSION['login_usuario']) . "',";
         $Comando_SQL .= "'" . trim($this->area_sistema->Caption) . "',";
         $Comando_SQL .= "'" . 'Alteracao' . "',";
         $Comando_SQL .= "'" . trim(trim($this->mgt_iva_estado->Text) . "/" . trim($this->mgt_iva_ncm->Text)) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_IVA->Close();
         GetConexaoPrincipal()->SQL_MGT_IVA->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_IVA->Open();

         redirect('cad_ivas.php');
      }

   }

   function cadivasaltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadivasalt;

//Creates the form
$cadivasalt = new cadivasalt($application);

//Read from resource file
$cadivasalt->loadResource(__FILE__);

//Shows the form
$cadivasalt->show();

?>