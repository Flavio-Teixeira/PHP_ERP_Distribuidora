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
class pagcontasbancariasalt extends Page
{
   public $mgt_operacao_cadastro_motivo = null;
   public $Label11 = null;
   public $Label3 = null;
   public $mgt_conta_bancaria_nro = null;
   public $mgt_conta_bancaria_banco = null;
   public $Label7 = null;
   public $mgt_conta_bancaria_titular = null;
   public $Label6 = null;
   public $mgt_conta_bancaria_conta = null;
   public $Label5 = null;
   public $mgt_conta_bancaria_agencia = null;
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
   public $MSG_Erro = null;
   public $Label1 = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function mgt_conta_bancaria_titularJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontasbancariasalt.bt_alterar.focus();
        return false;
      }

<?php

   }

   function mgt_conta_bancaria_contaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontasbancariasalt.mgt_conta_bancaria_titular.focus();
        return false;
      }

<?php

   }

   function mgt_conta_bancaria_agenciaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontasbancariasalt.mgt_conta_bancaria_conta.focus();
        return false;
      }

<?php

   }

   function mgt_conta_bancaria_bancoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontasbancariasalt.mgt_conta_bancaria_agencia.focus();
        return false;
      }

<?php

   }

   function mgt_conta_bancaria_nroJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.pagcontasbancariasalt.mgt_conta_bancaria_nro
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
         $Comando_SQL .= "'" . trim($this->mgt_conta_bancaria_nro->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_contas_bancarias ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_conta_bancaria_nro='" . trim($this->mgt_conta_bancaria_nro->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->confirmacao->Top = 253;
         $this->confirmacao->IsVisible = false;

         redirect('pag_contas_bancarias.php');
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 253;
      $this->confirmacao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 84;
      $this->confirmacao->IsVisible = true;
   }

   function pagcontasbancariasaltCreate($sender, $params)
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

      $mgt_conta_bancaria_nro = $_REQUEST['mgt_conta_bancaria_nro'];

      $Comando_SQL = "select * from mgt_contas_bancarias where mgt_conta_bancaria_nro = '" . trim($mgt_conta_bancaria_nro) . "' order by mgt_conta_bancaria_nro";

      GetConexaoPrincipal()->SQL_MGT_Contas->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas->Open();

      $this->mgt_conta_bancaria_nro->Text = $mgt_conta_bancaria_nro;
      $this->mgt_conta_bancaria_banco->Text = GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_banco'];
      $this->mgt_conta_bancaria_agencia->Text = GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_agencia'];
      $this->mgt_conta_bancaria_conta->Text = GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_conta'];
      $this->mgt_conta_bancaria_titular->Text = GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_titular'];

      $this->MSG_Erro->Caption = "";
   }

   function mgt_conta_bancaria_nroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontasbancariasalt.mgt_conta_bancaria_banco.focus();
        return false;
      }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
      redirect('pag_contas_bancarias.php');
   }

   function bt_alterarClick($sender, $params)
   {
      if(trim($this->mgt_conta_bancaria_banco->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Banco.";
      }
      elseif(trim($this->mgt_conta_bancaria_agencia->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Agencia.";
      }
      elseif(trim($this->mgt_conta_bancaria_conta->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Conta.";
      }
      elseif(trim($this->mgt_conta_bancaria_titular->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Titular.";
      }
      else
      {
         $Comando_SQL = "update mgt_contas_bancarias set ";
         $Comando_SQL .= "mgt_conta_bancaria_banco = '" . trim($this->mgt_conta_bancaria_banco->Text) . "',";
         $Comando_SQL .= "mgt_conta_bancaria_agencia = '" . trim($this->mgt_conta_bancaria_agencia->Text) . "',";
         $Comando_SQL .= "mgt_conta_bancaria_conta = '" . trim($this->mgt_conta_bancaria_conta->Text) . "',";
         $Comando_SQL .= "mgt_conta_bancaria_titular = '" . trim($this->mgt_conta_bancaria_titular->Text) . "' ";
         $Comando_SQL .= " Where ";
         $Comando_SQL .= "mgt_conta_bancaria_nro = '" . trim($this->mgt_conta_bancaria_nro->Text) . "'";

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
         $Comando_SQL .= "'" . trim($this->mgt_conta_bancaria_nro->Text) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         redirect('pag_contas_bancarias.php');
      }

   }
   function pagcontasbancariasaltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $pagcontasbancariasalt;

//Creates the form
$pagcontasbancariasalt = new pagcontasbancariasalt($application);

//Read from resource file
$pagcontasbancariasalt->loadResource(__FILE__);

//Shows the form
$pagcontasbancariasalt->show();

?>