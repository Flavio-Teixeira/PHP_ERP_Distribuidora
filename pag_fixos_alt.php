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
use_unit("dbgrids.inc.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class pagfixosalt extends Page
{
   public $mgt_operacao_cadastro_motivo = null;
   public $Label13 = null;
   public $Label12 = null;
   public $mgt_titulo_fixo_descricao_ant = null;
   public $mgt_titulo_fixo_nro = null;
   public $confirmacao = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $bt_alterar = null;
   public $bt_excluir = null;
   public $registros = null;
   public $bt_remove = null;
   public $bt_adiciona_fornecedor = null;
   public $adiciona_fornecedor_nome = null;
   public $adiciona_fornecedor_codigo = null;
   public $adiciona_fornecedor_numero = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $bt_buscar = null;
   public $opcao_busca = null;
   public $Label8 = null;
   public $dados_busca = null;
   public $Label7 = null;
   public $opcoes_titulo = null;
   public $dados_titulo = null;
   public $adiciona_fornecedores = null;
   public $mgt_titulo_fixo_fornecedor_nome = null;
   public $mgt_titulo_fixo_fornecedor_numero = null;
   public $mgt_titulo_fixo_tipo = null;
   public $mgt_titulo_fixo_data = null;
   public $mgt_titulo_fixo_descricao = null;
   public $mgt_titulo_fixo_valor = null;
   public $mgt_titulo_fixo_conta = null;
   public $mgt_titulo_fixo_dia = null;
   public $bt_fechar_cliente = null;
   public $Panel7 = null;
   public $Panel6 = null;
   public $Panel5 = null;
   public $adiciona_clientes_borda = null;
   public $Label30 = null;
   public $bt_procurar = null;
   public $Label6 = null;
   public $Label5 = null;
   public $GroupBox2 = null;
   public $Label1 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label19 = null;
   public $Panel2 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $bt_fechar = null;
   public $area_sistema = null;

   function bt_simClick($sender, $params)
   {
      if(trim($this->mgt_operacao_cadastro_motivo->text) <> '')
      {

         require_once("includes/inverte_data_amd_to_dma.fnc.php");
         require_once("includes/inverte_data_dma_to_amd.fnc.php");

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
         $Comando_SQL .= "'" . trim($this->mgt_titulo_fixo_nro->Value) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "Delete from mgt_titulos_fixos Where mgt_titulo_fixo_nro = " . trim($this->mgt_titulo_fixo_nro->Value);

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Apaga os Registros de Contas a Pagar ***

         $Comando_SQL = "Delete from mgt_contas_pagar Where mgt_conta_pagar_data >= '" . date("Y-m-d", time()) . "' And mgt_conta_pagar_descricao = '" . trim($this->mgt_titulo_fixo_descricao_ant->Value) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Fecha a Tela de Exclusao ***

         $this->confirmacao->Top = 619;
         $this->confirmacao->IsVisible = false;

         redirect('pag_fixos.php');
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 619;
      $this->confirmacao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 84;
      $this->confirmacao->IsVisible = true;
   }

   function bt_fechar_clienteClick($sender, $params)
   {
      $this->adiciona_fornecedores->Visible = false;

      $this->adiciona_fornecedores->Top = 326;
      $this->dados_titulo->Top = (($this->dados_titulo->Top) - ($this->adiciona_fornecedores->Height) - 5);
      $this->opcoes_titulo->Top = (($this->opcoes_titulo->Top) - ($this->adiciona_fornecedores->Height) - 5);

      $this->adiciona_fornecedores->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
   }

   function bt_adiciona_fornecedorClick($sender, $params)
   {
      if(trim($this->adiciona_fornecedor_numero->Text) <> '')
      {
         $this->mgt_titulo_fixo_fornecedor_numero->Text = $this->adiciona_fornecedor_numero->Text;
         $this->mgt_titulo_fixo_fornecedor_nome->Text = $this->adiciona_fornecedor_nome->Text;

         $this->MSG_Erro->Caption = '';
      }

      $this->adiciona_fornecedores->Visible = false;

      $this->adiciona_fornecedores->Top = 326;
      $this->dados_titulo->Top = (($this->dados_titulo->Top) - ($this->adiciona_fornecedores->Height) - 5);
      $this->opcoes_titulo->Top = (($this->opcoes_titulo->Top) - ($this->adiciona_fornecedores->Height) - 5);

      $this->adiciona_fornecedores->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.pagfixosalt.adiciona_fornecedor_numero.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
      document.pagfixosalt.adiciona_fornecedor_codigo.value = registros.getTableModel().getValue(1, registros.getFocusedRow());
      document.pagfixosalt.adiciona_fornecedor_nome.value = registros.getTableModel().getValue(2, registros.getFocusedRow());

<?php

   }

   function bt_buscarClick($sender, $params)
   {
      if(trim($this->dados_busca->Text) == "")
      {
         $Comando_SQL = "select * from mgt_fornecedores order by mgt_fornecedor_numero";
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_numero = '" . trim($this->dados_busca->Text) . "' order by mgt_fornecedor_numero";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "CNPJ")
         {
            $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_codigo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_fornecedor_codigo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Nome")
         {
            $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_nome like '%" . trim($this->dados_busca->Text) . "%' order by mgt_fornecedor_nome";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Razao Social")
         {
            $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_razao_social like '%" . trim($this->dados_busca->Text) . "%' order by mgt_fornecedor_razao_social";
         }

      }

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
      GetConexaoPrincipal()->SQL_MGT_Fornecedores->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Open();
   }

   function opcao_buscaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.bt_buscar.focus();
        return false;
      }

<?php

   }

   function dados_buscaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.opcao_busca.focus();
        return false;
      }

<?php

   }

   function adiciona_fornecedor_nomeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.bt_adiciona_fornecedor.focus();
        return false;
      }

<?php

   }

   function adiciona_fornecedor_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.adiciona_fornecedor_nome.focus();
        return false;
      }

<?php

   }

   function adiciona_fornecedor_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.adiciona_fornecedor_codigo.focus();
        return false;
      }

<?php

   }

   function bt_procurarClick($sender, $params)
   {
      $this->adiciona_fornecedores->Top = 39;
      $this->dados_titulo->Top = (($this->dados_titulo->Top) + ($this->adiciona_fornecedores->Height) + 5);
      $this->opcoes_titulo->Top = (($this->opcoes_titulo->Top) + ($this->adiciona_fornecedores->Height) + 5);

      $this->adiciona_fornecedor_numero->Text = "";
      $this->adiciona_fornecedor_codigo->Text = "";
      $this->adiciona_fornecedor_nome->Text = "";

      $this->adiciona_fornecedores->Visible = true;
   }

   function bt_removeJSClick($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.pagfixosalt.mgt_titulo_fixo_fornecedor_numero.value = '0';
      document.pagfixosalt.mgt_titulo_fixo_fornecedor_nome.value = '--- Sem Fornecedor ---';

<?php

   }

   function mgt_titulo_fixo_fornecedor_nomeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.bt_alterar.focus();
        return false;
      }

<?php

   }

   function mgt_titulo_fixo_fornecedor_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.mgt_titulo_fixo_fornecedor_nome.focus();
        return false;
      }

<?php

   }

   function mgt_titulo_fixo_dataJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.mgt_titulo_fixo_fornecedor_numero.focus();
        return false;
      }

<?php

   }

   function mgt_titulo_fixo_tipoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.mgt_titulo_fixo_data.focus();
        return false;
      }

<?php

   }

   function mgt_titulo_fixo_dataJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.pagfixosalt.mgt_titulo_fixo_data
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

   function mgt_titulo_fixo_descricaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.mgt_titulo_fixo_valor.focus();
        return false;
      }

<?php

   }


   function mgt_titulo_fixo_valorJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.pagfixosalt.mgt_titulo_fixo_valor
   var digits="0123456789.-"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_titulo_fixo_diaJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.pagfixosalt.mgt_titulo_fixo_dia
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

   function mgt_titulo_fixo_valorJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.mgt_titulo_fixo_data.focus();
        return false;
      }

<?php

   }

   function mgt_titulo_fixo_diaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.mgt_titulo_fixo_descricao.focus();
        return false;
      }

<?php

   }

   function mgt_titulo_fixo_contaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagfixosalt.mgt_titulo_fixo_dia.focus();
        return false;
      }

<?php

   }


   function mgt_conta_bancaria_nroJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.pagfixosalt.mgt_conta_bancaria_nro
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

   function pagfixosaltCreate($sender, $params)
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

      $this->MSG_Erro->Caption = "";

      //*** Carrega as Contas ***

      $this->mgt_titulo_fixo_conta->Clear();

      $Comando_SQL = "select * from mgt_contas_bancarias order by mgt_conta_bancaria_nro";

      GetConexaoPrincipal()->SQL_MGT_Contas->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Contas->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Contas->EOF) != 1)
         {
            $this->mgt_titulo_fixo_conta->AddItem(GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_nro'] . ' - Banco: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_banco'] . ' - Ag.: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_agencia'] . ' - CC.: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_conta'] . ' - Titular: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_titular'], null , GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_nro']);
            GetConexaoPrincipal()->SQL_MGT_Contas->Next();
         }
      }

      //*** Carrega os Valores dos Campos ***

      $this->mgt_titulo_fixo_nro->Value = $_REQUEST['mgt_titulo_fixo_nro'];

      $Comando_SQL = "select *,date_format(mgt_titulo_fixo_data, '%d/%m/%Y') AS mgt_titulo_fixo_data from mgt_titulos_fixos where mgt_titulo_fixo_nro = '" . trim($this->mgt_titulo_fixo_nro->Value) . "' order by mgt_titulo_fixo_nro";

      GetConexaoPrincipal()->SQL_MGT_Fixos->Close();
      GetConexaoPrincipal()->SQL_MGT_Fixos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Fixos->Open();

      if(GetConexaoPrincipal()->SQL_MGT_Fixos->Fields['mgt_titulo_fixo_tipo'] == "I")
      {
         $this->mgt_titulo_fixo_tipo->ItemIndex = '0';
      }
      else
      {
         $this->mgt_titulo_fixo_tipo->ItemIndex = '1';
      }

      $this->mgt_titulo_fixo_conta->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Fixos->Fields['mgt_titulo_fixo_conta'];
      $this->mgt_titulo_fixo_dia->Text = GetConexaoPrincipal()->SQL_MGT_Fixos->Fields['mgt_titulo_fixo_dia'];
      $this->mgt_titulo_fixo_descricao->Text = GetConexaoPrincipal()->SQL_MGT_Fixos->Fields['mgt_titulo_fixo_descricao'];
      $this->mgt_titulo_fixo_descricao_ant->Value = GetConexaoPrincipal()->SQL_MGT_Fixos->Fields['mgt_titulo_fixo_descricao'];
      $this->mgt_titulo_fixo_valor->Text = GetConexaoPrincipal()->SQL_MGT_Fixos->Fields['mgt_titulo_fixo_valor'];
      $this->mgt_titulo_fixo_data->Text = GetConexaoPrincipal()->SQL_MGT_Fixos->Fields['mgt_titulo_fixo_data'];
      $this->mgt_titulo_fixo_fornecedor_numero->Text = GetConexaoPrincipal()->SQL_MGT_Fixos->Fields['mgt_titulo_fixo_fornecedor_numero'];
      $this->mgt_titulo_fixo_fornecedor_nome->Text = GetConexaoPrincipal()->SQL_MGT_Fixos->Fields['mgt_titulo_fixo_fornecedor_nome'];
   }

   function mgt_conta_bancaria_nroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagfixosalt.mgt_conta_bancaria_banco.focus();
     return false;
   }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
      redirect('pag_fixos.php');
   }

   function bt_alterarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_titulo_fixo_conta->ItemIndex) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Conta.";
      }
      elseif(trim($this->mgt_titulo_fixo_dia->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Dia.";
      }
      elseif(trim($this->mgt_titulo_fixo_descricao->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Descricao.";
      }
      elseif(trim($this->mgt_titulo_fixo_valor->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Valor.";
      }
      elseif((trim($this->mgt_titulo_fixo_tipo->ItemIndex) == "1")And((trim($this->mgt_titulo_fixo_data->Text) == "00/00/0000")Or(trim($this->mgt_titulo_fixo_data->Text) == "")))
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Data de Termino.";
      }
      else
      {
         //*** Apaga os Registros de Contas a Pagar ***

         $Comando_SQL = "Delete from mgt_contas_pagar Where mgt_conta_pagar_data >= '" . date("Y-m-d", time()) . "' And mgt_conta_pagar_descricao = '" . trim($this->mgt_titulo_fixo_descricao_ant->Value) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Altera os Registros do Titulo Fixo ***

         $Comando_SQL = "Update mgt_titulos_fixos Set ";
         $Comando_SQL .= "mgt_titulo_fixo_dia = '" . trim($this->mgt_titulo_fixo_dia->Text) . "', ";
         $Comando_SQL .= "mgt_titulo_fixo_descricao = '" . trim($this->mgt_titulo_fixo_descricao->Text) . "', ";
         $Comando_SQL .= "mgt_titulo_fixo_valor = '" . trim($this->mgt_titulo_fixo_valor->Text) . "', ";
         $Comando_SQL .= "mgt_titulo_fixo_conta = '" . trim($this->mgt_titulo_fixo_conta->ItemIndex) . "', ";
         $Comando_SQL .= "mgt_titulo_fixo_conta_descricao = '" . trim($this->mgt_titulo_fixo_conta->Items[$this->mgt_titulo_fixo_conta->ItemIndex]) . "', ";

         if(trim($this->mgt_titulo_fixo_tipo->ItemIndex) == "0")
         {
            $Comando_SQL .= "mgt_titulo_fixo_tipo = 'I', ";
         }
         else
         {
            $Comando_SQL .= "mgt_titulo_fixo_tipo = 'D', ";
         }

         $Comando_SQL .= "mgt_titulo_fixo_data = '" . inverte_data_dma_to_amd(trim($this->mgt_titulo_fixo_data->Text)) . "',";
         $Comando_SQL .= "mgt_titulo_fixo_fornecedor_numero = '" . trim($this->mgt_titulo_fixo_fornecedor_numero->Text) . "', ";
         $Comando_SQL .= "mgt_titulo_fixo_fornecedor_nome = '" . trim($this->mgt_titulo_fixo_fornecedor_nome->Text) . "' ";
         $Comando_SQL .= " Where mgt_titulo_fixo_nro = '" . trim($this->mgt_titulo_fixo_nro->Value) . "'";

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
         $Comando_SQL .= "'" . trim($this->mgt_titulo_fixo_nro->Value) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();
 
         //*** Gera os Titulos Fixos ***

         $data_sistema = date(trim($this->mgt_titulo_fixo_dia->Text) . '/m/Y', time());
         $ano_inicio = date('Y', time());

         if(trim($this->mgt_titulo_fixo_tipo->ItemIndex) == "0")
         {
            $ano_final = $ano_inicio + 5;
         }
         Else
         {
            $ano_final = date('Y', strtotime(inverte_data_dma_to_amd(trim($this->mgt_titulo_fixo_data->Text))));
         }

         while(date('Y', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) <= $ano_final)
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($data_sistema)) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_titulo_fixo_descricao->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_titulo_fixo_valor->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_titulo_fixo_conta->ItemIndex) . "', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'S', ";
            $Comando_SQL .= "'" . trim($this->mgt_titulo_fixo_fornecedor_numero->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_titulo_fixo_fornecedor_nome->Text) . "') ";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            if((date('m', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) == 1)Or
            (date('m', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) == 3)Or
            (date('m', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) == 5)Or
            (date('m', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) == 7)Or
            (date('m', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) == 8)Or
            (date('m', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) == 10)Or
            (date('m', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) == 12)
            )
            {
               $proximo_mes = 86400 * 31;
            }
            elseif((date('m', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) == 4)Or
            (date('m', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) == 6)Or
            (date('m', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) == 9)Or
            (date('m', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) == 11)
            )
            {
               $proximo_mes = 86400 * 30;
            }
            else
            {
               $proximo_mes = 86400 * 28;
            }

            if(trim($this->mgt_titulo_fixo_tipo->ItemIndex) == "0")
            {
               $data_sistema = date('d/m/Y', strtotime(inverte_data_dma_to_amd(trim($data_sistema))) + $proximo_mes);
            }
            else
            {
               if(date('mY', strtotime(inverte_data_dma_to_amd(trim($data_sistema)))) == date('mY', strtotime(inverte_data_dma_to_amd(trim($this->mgt_titulo_fixo_data->Text)))))
               {
                  $data_sistema = date('d/m/Y', strtotime(inverte_data_dma_to_amd(trim('01/01/' . ($ano_final + 1)))));
               }
               else
               {
                  $data_sistema = date('d/m/Y', strtotime(inverte_data_dma_to_amd(trim($data_sistema))) + $proximo_mes);
               }
            }
         }

         redirect('pag_fixos.php');
      }

   }
   function pagfixosaltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $pagfixosalt;

//Creates the form
$pagfixosalt = new pagfixosalt($application);

//Read from resource file
$pagfixosalt->loadResource(__FILE__);

//Shows the form
$pagfixosalt->show();

?>