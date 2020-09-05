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
class pagsaldosalt extends Page
{
   public $mgt_operacao_cadastro_motivo = null;
   public $Label11 = null;
   public $Label3 = null;
   public $mgt_saldo_nro = null;
   public $mgt_saldo_valor = null;
   public $Label5 = null;
   public $mgt_saldo_data = null;
   public $Label4 = null;
   public $mgt_saldo_conta = null;
   public $Label2 = null;
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
   function mgt_saldo_valorJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.pagsaldosalt.mgt_saldo_valor
   var digits="0123456789.,-"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }
   campo.value = campo.value.replace(',','.');

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_saldo_dataJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagsaldosalt.mgt_saldo_valor.focus();
        return false;
      }

<?php

   }

   function mgt_saldo_dataJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.pagsaldosalt.mgt_saldo_data
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_saldo_valorJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagsaldosalt.bt_alterar.focus();
        return false;
      }

<?php

   }


   function mgt_saldo_contaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagsaldosalt.mgt_saldo_data.focus();
        return false;
      }

<?php

   }


   function mgt_saldo_nroJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.pagsaldosalt.mgt_saldo_nro
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
         $Comando_SQL .= "'" . trim($this->mgt_saldo_nro->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_saldos ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_saldo_nro='" . trim($this->mgt_saldo_nro->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $Comando_SQL = "select *,date_format(mgt_saldo_data, '%d/%m/%Y') AS mgt_saldo_data from mgt_saldos, mgt_contas_bancarias where mgt_saldo_conta = mgt_conta_bancaria_nro order by mgt_saldo_data Desc";

         GetConexaoPrincipal()->SQL_MGT_Saldos->Close();
         GetConexaoPrincipal()->SQL_MGT_Saldos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Saldos->Open();

         $this->confirmacao->Top = 157;
         $this->confirmacao->IsVisible = false;

         redirect('pag_saldos.php');
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 157;
      $this->confirmacao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 84;
      $this->confirmacao->IsVisible = true;
   }

   function pagsaldosaltCreate($sender, $params)
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

      $mgt_saldo_nro = $_REQUEST['mgt_saldo_nro'];

      $Comando_SQL = "select *,date_format(mgt_saldo_data, '%d/%m/%Y') AS mgt_saldo_data from mgt_saldos where mgt_saldo_nro = '" . trim($mgt_saldo_nro) . "' order by mgt_saldo_nro";

      GetConexaoPrincipal()->SQL_MGT_Saldos->Close();
      GetConexaoPrincipal()->SQL_MGT_Saldos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Saldos->Open();

      $this->mgt_saldo_nro->Text = $mgt_saldo_nro;
      $this->mgt_saldo_data->Text = GetConexaoPrincipal()->SQL_MGT_Saldos->Fields['mgt_saldo_data'];
      $this->mgt_saldo_valor->Text = GetConexaoPrincipal()->SQL_MGT_Saldos->Fields['mgt_saldo_valor'];

      $this->MSG_Erro->Caption = "";

      //*** Carrega as Contas ***

      $this->mgt_saldo_conta->Clear();

      $Comando_SQL = "select * from mgt_contas_bancarias order by mgt_conta_bancaria_nro";

      GetConexaoPrincipal()->SQL_MGT_Contas->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Contas->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Contas->EOF) != 1)
         {
            $this->mgt_saldo_conta->AddItem(GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_nro'] . ' - Banco: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_banco'] . ' - Ag.: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_agencia'] . ' - CC.: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_conta'] . ' - Titular: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_titular'], null , GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_nro']);
            GetConexaoPrincipal()->SQL_MGT_Contas->Next();
         }
      }

      $this->mgt_saldo_conta->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Saldos->Fields['mgt_saldo_conta'];
   }

   function mgt_saldo_nroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagsaldosalt.mgt_saldo_conta.focus();
        return false;
      }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
      redirect('pag_saldos.php');
   }

   function bt_alterarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_saldo_conta->ItemIndex) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Conta.";
      }
      elseif(trim($this->mgt_saldo_data->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Data.";
      }
      elseif(trim($this->mgt_saldo_valor->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Valor.";
      }
      else
      {
         $Comando_SQL = "update mgt_saldos set ";
         $Comando_SQL .= "mgt_saldo_conta = '" . trim($this->mgt_saldo_conta->ItemIndex) . "',";
         $Comando_SQL .= "mgt_saldo_data = '" . inverte_data_dma_to_amd(trim($this->mgt_saldo_data->Text)) . "',";
         $Comando_SQL .= "mgt_saldo_valor = '" . trim($this->mgt_saldo_valor->Text) . "' ";
         $Comando_SQL .= " Where ";
         $Comando_SQL .= "mgt_saldo_nro = '" . trim($this->mgt_saldo_nro->Text) . "'";

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
         $Comando_SQL .= "'" . trim($this->mgt_saldo_nro->Text) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Selecao do Grid ***

         $Comando_SQL = "select *,date_format(mgt_saldo_data, '%d/%m/%Y') AS mgt_saldo_data from mgt_saldos, mgt_contas_bancarias where mgt_saldo_conta = mgt_conta_bancaria_nro order by mgt_saldo_data Desc";

         GetConexaoPrincipal()->SQL_MGT_Saldos->Close();
         GetConexaoPrincipal()->SQL_MGT_Saldos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Saldos->Open();

         redirect('pag_saldos.php');
      }

   }
   function pagsaldosaltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $pagsaldosalt;

//Creates the form
$pagsaldosalt = new pagsaldosalt($application);

//Read from resource file
$pagsaldosalt->loadResource(__FILE__);

//Shows the form
$pagsaldosalt->show();

?>