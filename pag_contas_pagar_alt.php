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
class pagcontaspagaralt extends Page
{
   public $mgt_operacao_cadastro_motivo = null;
   public $Label24 = null;
   public $Label22 = null;
   public $mgt_conta_pagar_fixo = null;
   public $mgt_conta_pagar_posicao = null;
   public $mgt_conta_pagar_nro = null;
   public $Label23 = null;
   public $confirmacao = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $bt_alterar = null;
   public $bt_excluir = null;
   public $bt_fechar_fornecedor = null;
   public $mgt_conta_pagar_status = null;
   public $mgt_conta_pagar_observacao = null;
   public $mgt_conta_pagar_saldo = null;
   public $mgt_conta_pagar_valor_ser_pago = null;
   public $mgt_conta_pagar_valor_desconto = null;
   public $mgt_conta_pagar_valor_juros = null;
   public $mgt_conta_pagar_data_pagto = null;
   public $mgt_conta_pagar_data_emissao = null;
   public $mgt_conta_pagar_valor = null;
   public $mgt_conta_pagar_descricao = null;
   public $mgt_conta_pagar_data = null;
   public $mgt_conta_pagar_conta = null;
   public $mgt_conta_pagar_fornecedor_nome = null;
   public $mgt_conta_pagar_fornecedor_numero = null;
   public $Label21 = null;
   public $Label20 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label12 = null;
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
   function mgt_conta_pagar_valor_ser_pagoJSFocus($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Totaliza o Contas a Pagar ***

      var pgt_valor;
      var pgt_juros;
      var pgt_desc;
      var pgt_ser_pago;
      var pgt_saldo;

      pgt_valor = 0;
      pgt_juros = 0;
      pgt_desc = 0;
      pgt_ser_pago = 0;
      pgt_saldo = 0;

      pgt_valor = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_valor.value);
      pgt_juros = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_valor_juros.value);
      pgt_desc = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_valor_desconto.value);
      pgt_ser_pago = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_valor_ser_pago.value);
      pgt_saldo = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_saldo.value);

      pgt_ser_pago = pgt_valor + pgt_juros;
      pgt_ser_pago = pgt_ser_pago - pgt_desc;

      pgt_saldo = pgt_valor - pgt_ser_pago;

      if(pgt_saldo < 0)
      {
        pgt_saldo = parseFloat(0.00);
      }

      document.pagcontaspagaralt.mgt_conta_pagar_saldo.value = pgt_saldo.toFixed(2);

      //*** FINAL - Totaliza o Contas a Pagar ***

<?php

   }

   function mgt_conta_pagar_valor_descontoJSFocus($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Totaliza o Contas a Pagar ***

      var pgt_valor;
      var pgt_juros;
      var pgt_desc;
      var pgt_ser_pago;
      var pgt_saldo;

      pgt_valor = 0;
      pgt_juros = 0;
      pgt_desc = 0;
      pgt_ser_pago = 0;
      pgt_saldo = 0;

      pgt_valor = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_valor.value);
      pgt_juros = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_valor_juros.value);
      pgt_desc = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_valor_desconto.value);
      pgt_ser_pago = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_valor_ser_pago.value);
      pgt_saldo = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_saldo.value);

      pgt_ser_pago = pgt_valor + pgt_juros;
      pgt_ser_pago = pgt_ser_pago - pgt_desc;

      pgt_saldo = pgt_valor - pgt_ser_pago;

      if(pgt_saldo < 0)
      {
        pgt_saldo = parseFloat(0.00);
      }

      document.pagcontaspagaralt.mgt_conta_pagar_valor_ser_pago.value = pgt_ser_pago.toFixed(2);
      document.pagcontaspagaralt.mgt_conta_pagar_saldo.value = pgt_saldo.toFixed(2);

      //*** FINAL - Totaliza o Contas a Pagar ***

<?php

   }


   function mgt_conta_pagar_saldoJSFocus($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Totaliza o Contas a Pagar ***

      var pgt_valor;
      var pgt_juros;
      var pgt_desc;
      var pgt_ser_pago;
      var pgt_saldo;

      pgt_valor = 0;
      pgt_juros = 0;
      pgt_desc = 0;
      pgt_ser_pago = 0;
      pgt_saldo = 0;

      pgt_valor = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_valor.value);
      pgt_juros = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_valor_juros.value);
      pgt_desc = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_valor_desconto.value);
      pgt_ser_pago = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_valor_ser_pago.value);
      pgt_saldo = parseFloat(document.pagcontaspagaralt.mgt_conta_pagar_saldo.value);

      pgt_ser_pago = pgt_valor + pgt_juros;
      pgt_ser_pago = pgt_ser_pago - pgt_desc;

      pgt_saldo = pgt_valor - pgt_ser_pago;

      if(pgt_saldo < 0)
      {
        pgt_saldo = parseFloat(0.00);
      }

      document.pagcontaspagaralt.mgt_conta_pagar_saldo.value = pgt_saldo.toFixed(2);

      //*** FINAL - Totaliza o Contas a Pagar ***

<?php

   }

   function mgt_conta_pagar_nroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_conta.focus();
        return false;
      }

<?php

   }

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
         $Comando_SQL .= "'" . trim($this->mgt_conta_pagar_nro->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "Delete from mgt_contas_pagar Where mgt_conta_pagar_nro = '" . trim($this->mgt_conta_pagar_nro->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Fecha a Tela de Exclusao ***

         $this->confirmacao->Top = 715;
         $this->confirmacao->IsVisible = false;

         redirect('pag_contas_pagar.php');
      }
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 84;
      $this->confirmacao->IsVisible = true;
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 715;
      $this->confirmacao->IsVisible = false;
   }

   function mgt_conta_pagar_saldoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.pagcontaspagaralt.mgt_conta_pagar_saldo
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

   function mgt_conta_pagar_valor_ser_pagoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.pagcontaspagaralt.mgt_conta_pagar_valor_ser_pago
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

   function mgt_conta_pagar_valor_descontoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.pagcontaspagaralt.mgt_conta_pagar_valor_desconto
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

   function mgt_conta_pagar_valor_jurosJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.pagcontaspagaralt.mgt_conta_pagar_valor_juros
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

   function mgt_conta_pagar_data_pagtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_valor.focus();
        return false;
      }

<?php

   }

   function mgt_conta_pagar_data_emissaoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.pagcontaspagaralt.mgt_conta_pagar_data_emissao
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

   function mgt_conta_pagar_statusJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.bt_alterar.focus();
        return false;
      }

<?php

   }

   function mgt_conta_pagar_observacaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_status.focus();
        return false;
      }

<?php

   }


   function mgt_conta_pagar_saldoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_observacao.focus();
        return false;
      }

<?php

   }

   function mgt_conta_pagar_valor_ser_pagoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_saldo.focus();
        return false;
      }

<?php

   }

   function mgt_conta_pagar_valor_descontoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_valor_ser_pago.focus();
        return false;
      }

<?php

   }

   function mgt_conta_pagar_valor_jurosJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_valor_desconto.focus();
        return false;
      }

<?php

   }


   function mgt_conta_pagar_data_pagtoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.pagcontaspagaralt.mgt_conta_pagar_data_pagto
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

   function mgt_conta_pagar_data_emissaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_data.focus();
        return false;
      }

<?php

   }

   function bt_fechar_fornecedorClick($sender, $params)
   {
      $this->adiciona_fornecedores->Visible = false;

      $this->adiciona_fornecedores->Top = 425;
      $this->dados_titulo->Top = (($this->dados_titulo->Top) - ($this->adiciona_fornecedores->Height) - 5);
      $this->opcoes_titulo->Top = (($this->opcoes_titulo->Top) - ($this->adiciona_fornecedores->Height) - 5);

      $this->adiciona_fornecedores->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
   }

   function bt_adiciona_fornecedorClick($sender, $params)
   {
      if(trim($this->adiciona_fornecedor_numero->Text) <> '')
      {
         $this->mgt_conta_pagar_fornecedor_numero->Text = $this->adiciona_fornecedor_numero->Text;
         $this->mgt_conta_pagar_fornecedor_nome->Text = $this->adiciona_fornecedor_nome->Text;

         $this->MSG_Erro->Caption = '';
      }

      $this->adiciona_fornecedores->Visible = false;

      $this->adiciona_fornecedores->Top = 425;
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

      document.pagcontaspagaralt.adiciona_fornecedor_numero.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
      document.pagcontaspagaralt.adiciona_fornecedor_codigo.value = registros.getTableModel().getValue(1, registros.getFocusedRow());
      document.pagcontaspagaralt.adiciona_fornecedor_nome.value = registros.getTableModel().getValue(2, registros.getFocusedRow());

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
        document.pagcontaspagaralt.bt_buscar.focus();
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
        document.pagcontaspagaralt.opcao_busca.focus();
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
        document.pagcontaspagaralt.bt_adiciona_fornecedor.focus();
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
        document.pagcontaspagaralt.adiciona_fornecedor_nome.focus();
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
        document.pagcontaspagaralt.adiciona_fornecedor_codigo.focus();
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

      document.pagcontaspagaralt.mgt_conta_pagar_fornecedor_numero.value = '0';
      document.pagcontaspagaralt.mgt_conta_pagar_fornecedor_nome.value = '--- Sem Fornecedor ---';

<?php

   }

   function mgt_conta_pagar_fornecedor_nomeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.bt_alterar.focus();
        return false;
      }

<?php

   }

   function mgt_conta_pagar_fornecedor_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_fornecedor_nome.focus();
        return false;
      }

<?php

   }

   function mgt_conta_pagar_dataJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_descricao.focus();
        return false;
      }

<?php

   }

   function mgt_conta_pagar_dataJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.pagcontaspagaralt.mgt_conta_pagar_data
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

   function mgt_conta_pagar_descricaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_data_pagto.focus();
        return false;
      }

<?php

   }


   function mgt_conta_pagar_valorJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.pagcontaspagaralt.mgt_conta_pagar_valor
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

   function mgt_conta_pagar_valorJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_valor_juros.focus();
        return false;
      }

<?php

   }

   function mgt_conta_pagar_contaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontaspagaralt.mgt_conta_pagar_data_emissao.focus();
        return false;
      }

<?php

   }


   function mgt_conta_bancaria_nroJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.pagcontaspagaralt.mgt_conta_bancaria_nro
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

   function pagcontaspagaraltCreate($sender, $params)
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
         if(isset($this->bt_incluir))
         {
            $this->bt_incluir->Visible = false;
         }
         if(isset($this->bt_alterar))
         {
            $this->bt_alterar->Visible = false;
         }
         if(isset($this->bt_excluir))
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

      $this->mgt_conta_pagar_conta->Clear();

      $Comando_SQL = "select * from mgt_contas_bancarias order by mgt_conta_bancaria_nro";

      GetConexaoPrincipal()->SQL_MGT_Contas->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Contas->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Contas->EOF) != 1)
         {
            $this->mgt_conta_pagar_conta->AddItem(GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_nro'] . ' - Banco: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_banco'] . ' - Ag.: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_agencia'] . ' - CC.: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_conta'] . ' - Titular: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_titular'], null , GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_nro']);
            GetConexaoPrincipal()->SQL_MGT_Contas->Next();
         }
      }

      //*** Carrega os Valores dos Campos ***


      $this->mgt_conta_pagar_nro->Text = $_REQUEST['mgt_conta_pagar_nro'];

      $Comando_SQL = "select *,date_format(mgt_conta_pagar_data, '%d/%m/%Y') AS mgt_conta_pagar_data, ";
      $Comando_SQL .= "date_format(mgt_conta_pagar_data_pagto, '%d/%m/%Y') AS mgt_conta_pagar_data_pagto, ";
      $Comando_SQL .= "date_format(mgt_conta_pagar_data_emissao, '%d/%m/%Y') AS mgt_conta_pagar_data_emissao, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Em Aberto','#','') AS mgt_conta_pagar_status_1, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Pago','#','') AS mgt_conta_pagar_status_2, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Pago Parcial','#','') AS mgt_conta_pagar_status_3, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Cancelado','#','') AS mgt_conta_pagar_status_4, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Devolucao','#','') AS mgt_conta_pagar_status_5 ";
      $Comando_SQL .= "from mgt_contas_pagar ";
      $Comando_SQL .= "where mgt_conta_pagar_nro = '" . trim($this->mgt_conta_pagar_nro->Text) . "' ";
      $Comando_SQL .= "Order By mgt_conta_pagar_data Desc, mgt_conta_pagar_nro";

      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Open();

      $this->mgt_conta_pagar_posicao->Value = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_posicao'];
      $this->mgt_conta_pagar_fixo->Value = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_fixo'];

      $this->mgt_conta_pagar_conta->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_conta'];
      $this->mgt_conta_pagar_data_emissao->Text = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_data_emissao'];
      $this->mgt_conta_pagar_data->Text = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_data'];
      $this->mgt_conta_pagar_descricao->Text = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_descricao'];
      $this->mgt_conta_pagar_data_pagto->Text = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_data_pagto'];

      $this->mgt_conta_pagar_valor->Text = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_valor'];
      $this->mgt_conta_pagar_valor_juros->Text = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_valor_juros'];
      $this->mgt_conta_pagar_valor_desconto->Text = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_valor_desconto'];
      $this->mgt_conta_pagar_valor_ser_pago->Text = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_valor_ser_pago'];
      $this->mgt_conta_pagar_saldo->Text = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_saldo'];

      $this->mgt_conta_pagar_observacao->Text = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_observacao'];
      $this->mgt_conta_pagar_status->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_status'];

      $this->mgt_conta_pagar_fornecedor_numero->Text = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_fornecedor_numero'];
      $this->mgt_conta_pagar_fornecedor_nome->Text = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_fornecedor_nome'];
   }

   function mgt_conta_bancaria_nroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontaspagaralt.mgt_conta_bancaria_banco.focus();
     return false;
   }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
      redirect('pag_contas_pagar.php');
   }

   function bt_alterarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_conta_pagar_data->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Data de Vencimento.";
      }
      elseif(trim($this->mgt_conta_pagar_descricao->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Descricao.";
      }
      elseif(trim($this->mgt_conta_pagar_valor->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Valor Total do Titulo.";
      }
      elseif(trim($this->mgt_conta_pagar_valor_ser_pago->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Valor a ser Pago.";
      }
      else
      {
         $Comando_SQL = "Update mgt_contas_pagar Set ";
         $Comando_SQL .= "mgt_conta_pagar_data = '" . inverte_data_dma_to_amd(trim($this->mgt_conta_pagar_data->Text)) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_data_pagto = '" . inverte_data_dma_to_amd(trim($this->mgt_conta_pagar_data_pagto->Text)) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_descricao = '" . trim($this->mgt_conta_pagar_descricao->Text) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_valor = '" . trim($this->mgt_conta_pagar_valor->Text) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_conta = '" . trim($this->mgt_conta_pagar_conta->ItemIndex) . "', ";

         if((trim($this->mgt_conta_pagar_data_pagto->Text) <> '00/00/0000')And(trim($this->mgt_conta_pagar_data_pagto->Text) <> ''))
         {
            if($this->mgt_conta_pagar_saldo->Text > 0)
            {
               $Comando_SQL .= "mgt_conta_pagar_status = 'Pago Parcial', ";
            }
            else
            {
               $Comando_SQL .= "mgt_conta_pagar_status = 'Pago', ";
            }
         }
         else
         {
            $Comando_SQL .= "mgt_conta_pagar_status = '" . trim($this->mgt_conta_pagar_status->ItemIndex) . "', ";
         }

         $Comando_SQL .= "mgt_conta_pagar_posicao = '" . trim($this->mgt_conta_pagar_posicao->Value) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_fixo = '" . trim($this->mgt_conta_pagar_fixo->Value) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago = '" . trim($this->mgt_conta_pagar_valor_ser_pago->Text) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_valor_juros = '" . trim($this->mgt_conta_pagar_valor_juros->Text) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_valor_desconto = '" . trim($this->mgt_conta_pagar_valor_desconto->Text) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_observacao = '" . trim($this->mgt_conta_pagar_observacao->Text) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_saldo = '" . trim($this->mgt_conta_pagar_saldo->Text) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero = '" . trim($this->mgt_conta_pagar_fornecedor_numero->Text) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome = '" . trim($this->mgt_conta_pagar_fornecedor_nome->Text) . "', ";
         $Comando_SQL .= "mgt_conta_pagar_data_emissao = '" . inverte_data_dma_to_amd(trim($this->mgt_conta_pagar_data_emissao->Text)) . "' ";
         $Comando_SQL .= "where mgt_conta_pagar_nro = '" . trim($this->mgt_conta_pagar_nro->Text) . "' ";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Insere um Novo Registro com Saldo caso exista ***

         if((trim($this->mgt_conta_pagar_data_pagto->Text) <> '00/00/0000')And(trim($this->mgt_conta_pagar_data_pagto->Text) <> ''))
         {
            if($this->mgt_conta_pagar_saldo->Text > 0)
            {

               $Comando_SQL = "Insert into mgt_contas_pagar(";
               $Comando_SQL .= "mgt_conta_pagar_data, ";
               $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
               $Comando_SQL .= "mgt_conta_pagar_descricao, ";
               $Comando_SQL .= "mgt_conta_pagar_valor, ";
               $Comando_SQL .= "mgt_conta_pagar_conta, ";
               $Comando_SQL .= "mgt_conta_pagar_status, ";
               $Comando_SQL .= "mgt_conta_pagar_posicao, ";
               $Comando_SQL .= "mgt_conta_pagar_fixo, ";
               $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
               $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
               $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
               $Comando_SQL .= "mgt_conta_pagar_observacao, ";
               $Comando_SQL .= "mgt_conta_pagar_saldo, ";
               $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
               $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
               $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
               $Comando_SQL .= "Values(";
               $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_conta_pagar_data->Text)) . "', ";
               $Comando_SQL .= "'" . "0000-00-00" . "', ";
               $Comando_SQL .= "'(SALDO) " . trim($this->mgt_conta_pagar_descricao->Text) . "', ";
               $Comando_SQL .= "'" . trim($this->mgt_conta_pagar_saldo->Text) . "', ";
               $Comando_SQL .= "'" . trim($this->mgt_conta_pagar_conta->ItemIndex) . "', ";
               $Comando_SQL .= "'Em Aberto', ";
               $Comando_SQL .= "'2', ";
               $Comando_SQL .= "'N', ";
               $Comando_SQL .= "'" . trim($this->mgt_conta_pagar_saldo->Text) . "', ";
               $Comando_SQL .= "'" . "0" . "', ";
               $Comando_SQL .= "'" . "0" . "', ";
               $Comando_SQL .= "'" . trim($this->mgt_conta_pagar_observacao->Text) . "', ";
               $Comando_SQL .= "'" . "0" . "', ";
               $Comando_SQL .= "'" . trim($this->mgt_conta_pagar_fornecedor_numero->Text) . "', ";
               $Comando_SQL .= "'" . trim($this->mgt_conta_pagar_fornecedor_nome->Text) . "', ";
               $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_conta_pagar_data_emissao->Text)) . "')";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();
            }
         }

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
         $Comando_SQL .= "'" . trim($this->mgt_conta_pagar_nro->Text) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         redirect('pag_contas_pagar.php');
      }

   }
   function pagcontaspagaraltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $pagcontaspagaralt;

//Creates the form
$pagcontaspagaralt = new pagcontaspagaralt($application);

//Read from resource file
$pagcontaspagaralt->loadResource(__FILE__);

//Shows the form
$pagcontaspagaralt->show();

?>