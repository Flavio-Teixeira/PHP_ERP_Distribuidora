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
class cadbancosalt extends Page
{
   public $mgt_operacao_cadastro_motivo = null;
   public $Label11 = null;
   public $Label3 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $mgt_banco_conta_dv = null;
   public $mgt_banco_agencia_dv = null;
   public $Label7 = null;
   public $mgt_banco_agencia = null;
   public $mgt_banco_conta = null;
   public $Label6 = null;
   public $Label5 = null;
   public $mgt_banco_cnab = null;
   public $mgt_banco_convenio = null;
   public $Label4 = null;
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
   public $mgt_banco_descricao = null;
   public $mgt_banco_codigo = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $Label1 = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function mgt_banco_conta_dvJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadbancosalt.mgt_banco_conta_dv
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

   function mgt_banco_contaJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadbancosalt.mgt_banco_conta
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

   function mgt_banco_agencia_dvJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadbancosalt.mgt_banco_agencia_dv
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

   function mgt_banco_agenciaJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadbancosalt.mgt_banco_agencia
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

   function mgt_banco_conta_dvJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadbancosalt.bt_alterar.focus();
     return false;
   }

<?php

   }

   function mgt_banco_contaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadbancosalt.mgt_banco_conta_dv.focus();
     return false;
   }

<?php

   }

   function mgt_banco_agencia_dvJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadbancosalt.mgt_banco_conta.focus();
     return false;
   }

<?php

   }

   function mgt_banco_agenciaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadbancosalt.mgt_banco_agencia_dv.focus();
     return false;
   }

<?php

   }

   function mgt_banco_cnabJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadbancosalt.mgt_banco_descricao.focus();
     return false;
   }

<?php

   }

   function mgt_banco_convenioJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadbancosalt.mgt_banco_descricao.focus();
     return false;
   }

<?php

   }

   function mgt_banco_codigoJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadbancosalt.mgt_banco_codigo
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Traco ***

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
         $Comando_SQL .= "'" . trim($this->mgt_banco_codigo->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_bancos ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_banco_codigo='" . trim($this->mgt_banco_codigo->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->confirmacao->Top = 226;
         $this->confirmacao->IsVisible = false;

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Bancos->Close();
         GetConexaoPrincipal()->SQL_MGT_Bancos->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Bancos->Open();

         redirect('cad_bancos.php');
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 226;
      $this->confirmacao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 84;
      $this->confirmacao->IsVisible = true;
   }

   function cadbancosaltCreate($sender, $params)
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

      $mgt_banco_codigo = $_REQUEST['mgt_banco_codigo'];

      $Comando_SQL = "select * from mgt_bancos where mgt_banco_codigo = '" . trim($mgt_banco_codigo) . "' order by mgt_banco_codigo";

      GetConexaoPrincipal()->SQL_MGT_Bancos->Close();
      GetConexaoPrincipal()->SQL_MGT_Bancos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Bancos->Open();

      $this->mgt_banco_codigo->Text = $mgt_banco_codigo;
      $this->mgt_banco_descricao->Text = GetConexaoPrincipal()->SQL_MGT_Bancos->Fields['mgt_banco_descricao'];
      $this->mgt_banco_convenio->Text = GetConexaoPrincipal()->SQL_MGT_Bancos->Fields['mgt_banco_convenio'];
      $this->mgt_banco_cnab->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Bancos->Fields['mgt_banco_cnab'];
      $this->mgt_banco_agencia->Text = GetConexaoPrincipal()->SQL_MGT_Bancos->Fields['mgt_banco_agencia'];
      $this->mgt_banco_agencia_dv->Text = GetConexaoPrincipal()->SQL_MGT_Bancos->Fields['mgt_banco_agencia_dv'];
      $this->mgt_banco_conta->Text = GetConexaoPrincipal()->SQL_MGT_Bancos->Fields['mgt_banco_conta'];
      $this->mgt_banco_conta_dv->Text = GetConexaoPrincipal()->SQL_MGT_Bancos->Fields['mgt_banco_conta_dv'];

      $this->MSG_Erro->Caption = "";
   }

   function mgt_banco_descricaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadbancosalt.bt_alterar.focus();
     return false;
   }

<?php

   }

   function mgt_banco_codigoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadbancosalt.mgt_banco_convenio.focus();
     return false;
   }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Bancos->Close();
         GetConexaoPrincipal()->SQL_MGT_Bancos->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Bancos->Open();

         redirect('cad_bancos.php');
   }

   function bt_alterarClick($sender, $params)
   {
      if(trim($this->mgt_banco_codigo->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Numero.";
      }
      elseif(trim($this->mgt_banco_descricao->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Descricao.";
      }
      else
      {
         if(trim($this->mgt_banco_agencia->Text) == '')
         {
            $this->mgt_banco_agencia->Text = '0';
         }

         if(trim($this->mgt_banco_agencia_dv->Text) == '')
         {
            $this->mgt_banco_agencia_dv->Text = '0';
         }

         if(trim($this->mgt_banco_conta->Text) == '')
         {
            $this->mgt_banco_conta->Text = '0';
         }

         if(trim($this->mgt_banco_conta_dv->Text) == '')
         {
            $this->mgt_banco_conta_dv->Text = '0';
         }

         $Comando_SQL = "update mgt_bancos set ";
         $Comando_SQL .= "mgt_banco_descricao='" . trim($this->mgt_banco_descricao->Text) . "', ";
         $Comando_SQL .= "mgt_banco_convenio='" . trim($this->mgt_banco_convenio->Text) . "', ";
         $Comando_SQL .= "mgt_banco_cnab='" . trim($this->mgt_banco_cnab->ItemIndex) . "', ";
         $Comando_SQL .= "mgt_banco_agencia='" . trim($this->mgt_banco_agencia->Text) . "', ";
         $Comando_SQL .= "mgt_banco_agencia_dv='" . trim($this->mgt_banco_agencia_dv->Text) . "', ";
         $Comando_SQL .= "mgt_banco_conta='" . trim($this->mgt_banco_conta->Text) . "', ";
         $Comando_SQL .= "mgt_banco_conta_dv='" . trim($this->mgt_banco_conta_dv->Text) . "' where ";
         $Comando_SQL .= "mgt_banco_codigo='" . trim($this->mgt_banco_codigo->Text) . "'";

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
         $Comando_SQL .= "'" . trim($this->mgt_banco_codigo->Text) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Bancos->Close();
         GetConexaoPrincipal()->SQL_MGT_Bancos->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Bancos->Open();

         redirect('cad_bancos.php');
      }

   }

   function cadbancosaltJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

<?php

   }

   function cadbancosaltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadbancosalt;

//Creates the form
$cadbancosalt = new cadbancosalt($application);

//Read from resource file
$cadbancosalt->loadResource(__FILE__);

//Shows the form
$cadbancosalt->show();

?>