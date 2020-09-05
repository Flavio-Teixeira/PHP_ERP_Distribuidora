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
use_unit("comctrls.inc.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class cadprodutosalt extends Page
{
   public $mgt_estrutura_item_nivel = null;
   public $mgt_estrutura_item_custo_unitario = null;
   public $mgt_estrutura_item_medida = null;
   public $mgt_estrutura_item_qtde = null;
   public $mgt_estrutura_item_descricao = null;
   public $mgt_estrutura_item_codigo = null;
   public $bt_item_fechar = null;
   public $bt_item_excluir = null;
   public $bt_item_alterar = null;
   public $item_estrutura = null;
   public $Label60 = null;
   public $Label59 = null;
   public $Panel13 = null;
   public $Panel12 = null;
   public $Panel11 = null;
   public $Label58 = null;
   public $Label57 = null;
   public $Panel10 = null;
   public $Label54 = null;
   public $Label53 = null;
   public $hd_estrutura_custo_unitario = null;
   public $hd_estrutura_medida = null;
   public $hd_estrutura_qtde = null;
   public $hd_estrutura_nivel = null;
   public $hd_estrutura_tipo_estrutura = null;
   public $hd_estrutura_descricao = null;
   public $hd_estrutura_codigo_estrutura = null;
   public $hd_estrutura_sequencia = null;
   public $registros_servicos_busca = null;
   public $bt_busca_servico = null;
   public $opcao_busca_servico = null;
   public $dados_busca_servico = null;
   public $mgt_estrutura_srv_nivel = null;
   public $mgt_estrutura_srv_custo_unitario = null;
   public $mgt_estrutura_srv_medida = null;
   public $mgt_estrutura_srv_qtde = null;
   public $mgt_estrutura_srv_descricao = null;
   public $mgt_estrutura_srv_codigo = null;
   public $bt_fechar_servico = null;
   public $bt_adicionar_servico = null;
   public $adiciona_servicos = null;
   public $Label50 = null;
   public $Label48 = null;
   public $Panel9 = null;
   public $Panel8 = null;
   public $Panel7 = null;
   public $Label47 = null;
   public $Label46 = null;
   public $GroupBox3 = null;
   public $Label44 = null;
   public $Label43 = null;
   public $Panel6 = null;
   public $Label40 = null;
   public $Label33 = null;
   public $Label32 = null;
   public $Label31 = null;
   public $hd_cadprodutosalt_carregado = null;
   public $cadastro = null;
   public $Label30 = null;
   public $mgt_estrutura_custo_unitario = null;
   public $mgt_estrutura_nivel = null;
   public $mgt_estrutura_medida = null;
   public $mgt_estrutura_qtde = null;
   public $mgt_estrutura_descricao = null;
   public $mgt_estrutura_codigo = null;
   public $estrutura = null;
   public $adiciona_produtos = null;
   public $bt_fechar_produto = null;
   public $Label49 = null;
   public $Label45 = null;
   public $Panel4 = null;
   public $Panel3 = null;
   public $Panel5 = null;
   public $Label42 = null;
   public $Label41 = null;
   public $registros_produtos_busca = null;
   public $GroupBox4 = null;
   public $bt_busca_produto = null;
   public $opcao_busca_produto = null;
   public $dados_busca_produto = null;
   public $Label35 = null;
   public $Label34 = null;
   public $adiciona_produtos_borda = null;
   public $bt_adicionar_produto = null;
   public $Label39 = null;
   public $Label38 = null;
   public $Label37 = null;
   public $Label36 = null;
   public $bt_alterar_produto = null;
   public $bt_adc_servico = null;
   public $bt_adc_produto = null;
   public $GroupBox2 = null;
   public $mgt_operacao_cadastro_motivo = null;
   public $Label29 = null;
   public $Label20 = null;
   public $mgt_produto_ncm = null;
   public $Label28 = null;
   public $Label27 = null;
   public $Panel2 = null;
   public $Label26 = null;
   public $Panel1 = null;
   public $mgt_produto_localizacao = null;
   public $mgt_produto_valor_compra = null;
   public $mgt_produto_custo_medio = null;
   public $mgt_produto_estoque_minimo = null;
   public $mgt_produto_estoque_ideal = null;
   public $Label25 = null;
   public $Label21 = null;
   public $Label24 = null;
   public $Label23 = null;
   public $Label22 = null;
   public $confirmacao = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $bt_excluir = null;
   public $bt_alterar = null;
   public $mgt_produto_descricao_detalhada = null;
   public $mgt_produto_preco = null;
   public $mgt_produto_ipi = null;
   public $mgt_produto_classif_tributaria = null;
   public $mgt_produto_classif_fiscal = null;
   public $mgt_produto_data_alteracao = null;
   public $mgt_produto_estoque_atual = null;
   public $mgt_produto_estoque_inicial = null;
   public $mgt_produto_peso = null;
   public $mgt_produto_unidade_pesagem = null;
   public $mgt_produto_unidade = null;
   public $mgt_produto_codigo_barras = null;
   public $mgt_produto_lote = null;
   public $mgt_produto_fornecedor = null;
   public $mgt_produto_referencia = null;
   public $mgt_produto_tipo = null;
   public $mgt_produto_familia = null;
   public $mgt_produto_descricao = null;
   public $mgt_produto_codigo = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $Label1 = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $area_sistema = null;
    public $bt_imprime_estrutura = null;
   function bt_item_alterarClick($sender, $params)
   {
      require_once("includes/rotinas_gerais.inc.php");

      if(trim($this->mgt_estrutura_item_codigo->Text) <> '')
      {
         //*** Registra o motivo da exclusao do Item da Estrutura ***

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
         $Comando_SQL .= "'" . "CADASTRO - Produtos - (Estrutura)" . "',";
         $Comando_SQL .= "'" . 'Alteracao' . "',";
         $Comando_SQL .= "'" . trim($this->mgt_estrutura_item_codigo->Text) . "',";
         $Comando_SQL .= "'" . "Alteracao do Item da Estrutura do Produto - " . trim($this->mgt_produto_codigo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o Item da Estrutura do Produto Escolhido ***

         $Comando_SQL = "update mgt_estruturas set ";
         $Comando_SQL .= "mgt_estrutura_codigo_estrutura = '" . trim($this->mgt_estrutura_item_codigo->Text) . "', ";
         $Comando_SQL .= "mgt_estrutura_descricao = '" . completa_nivel(trim($this->mgt_estrutura_item_descricao->Text), trim($this->mgt_estrutura_item_nivel->Text)) . "',";
         $Comando_SQL .= "mgt_estrutura_qtde = '" . trim($this->mgt_estrutura_item_qtde->Text) . "', ";
         $Comando_SQL .= "mgt_estrutura_medida = '" . trim($this->mgt_estrutura_item_medida->Text) . "', ";
         $Comando_SQL .= "mgt_estrutura_custo_unitario = '" . trim($this->mgt_estrutura_item_custo_unitario->Text) . "', ";
         $Comando_SQL .= "mgt_estrutura_nivel = '" . trim($this->mgt_estrutura_item_nivel->Text) . "' ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_estrutura_tipo = 'PRD' And ";
         $Comando_SQL .= "mgt_estrutura_codigo = '" . trim($this->mgt_produto_codigo->Text) . "' And ";
         $Comando_SQL .= "mgt_estrutura_sequencia = '" . trim($this->hd_estrutura_sequencia->Value) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         /*** Carrega a Estrutura do Produto ***/

         $Comando_SQL = "SELECT * FROM mgt_estruturas WHERE mgt_estrutura_tipo = 'PRD' AND mgt_estrutura_codigo = '" . Trim($this->mgt_produto_codigo->Text) . "' ORDER BY mgt_estrutura_sequencia ASC";

         GetConexaoPrincipal()->SQL_MGT_Estruturas->Close();
         GetConexaoPrincipal()->SQL_MGT_Estruturas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Estruturas->Open();

         //*** Fecha o Item Selecionado da Estrutura ***

         $this->item_estrutura->Top = 1235;
         $this->item_estrutura->Visible = false;

         $this->cadastro->Top = 26;
         $this->cadastro->Visible = true;
         $this->bt_adc_produto->Enabled = true;
         $this->bt_adc_servico->Enabled = true;
         $this->bt_alterar_produto->Enabled = true;
         $this->bt_alterar->Enabled = true;
         $this->bt_excluir->Enabled = true;
         $this->bt_fechar->Enabled = true;

         $this->hd_estrutura_sequencia->Value = '';
         $this->hd_estrutura_codigo_estrutura->Value = '';
         $this->hd_estrutura_descricao->Value = '';
         $this->hd_estrutura_tipo_estrutura->Value = '';
         $this->hd_estrutura_nivel->Value = '';
         $this->hd_estrutura_qtde->Value = '';
         $this->hd_estrutura_medida->Value = '';
         $this->hd_estrutura_custo_unitario->Value = '';
      }
   }

   function bt_item_excluirClick($sender, $params)
   {
      if(trim($this->mgt_estrutura_item_codigo->Text) <> '')
      {
         //*** Registra o motivo da exclusao do Item da Estrutura ***

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
         $Comando_SQL .= "'" . "CADASTRO - Produtos - (Estrutura)" . "',";
         $Comando_SQL .= "'" . 'Exclusao' . "',";
         $Comando_SQL .= "'" . trim($this->mgt_estrutura_item_codigo->Text) . "',";
         $Comando_SQL .= "'" . "Exclusao do Item da Estrutura do Produto - " . trim($this->mgt_produto_codigo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o Item da Estrutura do Produto Escolhido ***

         $Comando_SQL = "delete from mgt_estruturas ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_estrutura_tipo = 'PRD' And ";
         $Comando_SQL .= "mgt_estrutura_codigo = '" . trim($this->mgt_produto_codigo->Text) . "' And ";
         $Comando_SQL .= "mgt_estrutura_sequencia = '" . trim($this->hd_estrutura_sequencia->Value) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         /*** Carrega a Estrutura do Produto ***/

         $Comando_SQL = "SELECT * FROM mgt_estruturas WHERE mgt_estrutura_tipo = 'PRD' AND mgt_estrutura_codigo = '" . Trim($this->mgt_produto_codigo->Text) . "' ORDER BY mgt_estrutura_sequencia ASC";

         GetConexaoPrincipal()->SQL_MGT_Estruturas->Close();
         GetConexaoPrincipal()->SQL_MGT_Estruturas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Estruturas->Open();

         //*** Fecha o Item Selecionado da Estrutura ***

         $this->item_estrutura->Top = 1235;
         $this->item_estrutura->Visible = false;

         $this->cadastro->Top = 26;
         $this->cadastro->Visible = true;
         $this->bt_adc_produto->Enabled = true;
         $this->bt_adc_servico->Enabled = true;
         $this->bt_alterar_produto->Enabled = true;
         $this->bt_alterar->Enabled = true;
         $this->bt_excluir->Enabled = true;
         $this->bt_fechar->Enabled = true;

         $this->hd_estrutura_sequencia->Value = '';
         $this->hd_estrutura_codigo_estrutura->Value = '';
         $this->hd_estrutura_descricao->Value = '';
         $this->hd_estrutura_tipo_estrutura->Value = '';
         $this->hd_estrutura_nivel->Value = '';
         $this->hd_estrutura_qtde->Value = '';
         $this->hd_estrutura_medida->Value = '';
         $this->hd_estrutura_custo_unitario->Value = '';
      }
   }

   function mgt_estrutura_item_nivelJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadprodutosalt.mgt_estrutura_item_nivel;
   var digits="0123456789";
   var campo_temp;
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1);
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }
   campo.value = campo.value.replace(',','.');

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_estrutura_item_nivelJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.bt_item_alterar.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_item_custo_unitarioJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_estrutura_item_custo_unitario;
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

   function mgt_estrutura_item_custo_unitarioJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_item_nivel.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_item_medidaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_item_custo_unitario.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_item_qtdeJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_estrutura_item_qtde;
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

   function mgt_estrutura_item_qtdeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_item_medida.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_item_descricaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_item_qtde.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_item_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_item_descricao.focus();
     return false;
   }

<?php

   }

   function bt_alterar_produtoClick($sender, $params)
   {
      $this->MSG_Erro->Caption = '';

      $this->item_estrutura->Top = 174;
      $this->item_estrutura->Visible = true;

      $this->mgt_estrutura_item_codigo->Text = '';
      $this->mgt_estrutura_item_descricao->Text = '';
      $this->mgt_estrutura_item_qtde->Text = '';
      $this->mgt_estrutura_item_medida->Text = '';
      $this->mgt_estrutura_item_custo_unitario->Text = '';
      $this->mgt_estrutura_item_nivel->Text = '';

      $this->mgt_estrutura_item_codigo->Text = $this->hd_estrutura_codigo_estrutura->Value;
      $this->mgt_estrutura_item_descricao->Text = $this->hd_estrutura_descricao->Value;
      $this->mgt_estrutura_item_qtde->Text = $this->hd_estrutura_qtde->Value;
      $this->mgt_estrutura_item_medida->Text = $this->hd_estrutura_medida->Value;
      $this->mgt_estrutura_item_custo_unitario->Text = $this->hd_estrutura_custo_unitario->Value;
      $this->mgt_estrutura_item_nivel->Text = $this->hd_estrutura_nivel->Value;

      $this->cadastro->Top = 744;
      $this->cadastro->Visible = false;
      $this->bt_adc_produto->Enabled = false;
      $this->bt_adc_servico->Enabled = false;
      $this->bt_alterar_produto->Enabled = false;
      $this->bt_alterar->Enabled = false;
      $this->bt_excluir->Enabled = false;
      $this->bt_fechar->Enabled = false;
   }

   function bt_item_fecharClick($sender, $params)
   {
      $this->item_estrutura->Top = 1235;
      $this->item_estrutura->Visible = false;

      $this->cadastro->Top = 26;
      $this->cadastro->Visible = true;
      $this->bt_adc_produto->Enabled = true;
      $this->bt_adc_servico->Enabled = true;
      $this->bt_alterar_produto->Enabled = true;
      $this->bt_alterar->Enabled = true;
      $this->bt_excluir->Enabled = true;
      $this->bt_fechar->Enabled = true;

      $this->hd_estrutura_sequencia->Value = '';
      $this->hd_estrutura_codigo_estrutura->Value = '';
      $this->hd_estrutura_descricao->Value = '';
      $this->hd_estrutura_tipo_estrutura->Value = '';
      $this->hd_estrutura_nivel->Value = '';
      $this->hd_estrutura_qtde->Value = '';
      $this->hd_estrutura_medida->Value = '';
      $this->hd_estrutura_custo_unitario->Value = '';
   }

   function estruturaJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.cadprodutosalt.hd_estrutura_sequencia.value        = estrutura.getTableModel().getValue(7, estrutura.getFocusedRow());
      document.cadprodutosalt.hd_estrutura_codigo_estrutura.value = estrutura.getTableModel().getValue(1, estrutura.getFocusedRow());
      document.cadprodutosalt.hd_estrutura_descricao.value        = estrutura.getTableModel().getValue(2, estrutura.getFocusedRow());
      document.cadprodutosalt.hd_estrutura_tipo_estrutura.value   = estrutura.getTableModel().getValue(3, estrutura.getFocusedRow());
      document.cadprodutosalt.hd_estrutura_nivel.value            = estrutura.getTableModel().getValue(0, estrutura.getFocusedRow());
      document.cadprodutosalt.hd_estrutura_qtde.value             = estrutura.getTableModel().getValue(4, estrutura.getFocusedRow());
      document.cadprodutosalt.hd_estrutura_medida.value           = estrutura.getTableModel().getValue(5, estrutura.getFocusedRow());
      document.cadprodutosalt.hd_estrutura_custo_unitario.value   = estrutura.getTableModel().getValue(6, estrutura.getFocusedRow());

<?php

   }

   function bt_fechar_servicoClick($sender, $params)
   {
      $this->adiciona_servicos->Top = 947;
      $this->adiciona_servicos->Visible = false;

      $this->cadastro->Top = 26;
      $this->cadastro->Visible = true;
      $this->bt_adc_produto->Enabled = true;
      $this->bt_adc_servico->Enabled = true;
      $this->bt_alterar_produto->Enabled = true;
      $this->bt_alterar->Enabled = true;
      $this->bt_excluir->Enabled = true;
      $this->bt_fechar->Enabled = true;

      GetConexaoPrincipal()->SQL_MGT_Servicos->Close();
   }

   function bt_adicionar_servicoClick($sender, $params)
   {
      require_once("includes/rotinas_gerais.inc.php");

      if((trim($this->mgt_estrutura_srv_codigo->Text) <> '')and(trim($this->mgt_estrutura_srv_qtde->Text) <> '')and(trim($this->mgt_estrutura_srv_qtde->Text) > 0))
      {
         //*** Insere o Produto na Estrutura ***

         $Comando_SQL = "insert into mgt_estruturas(";
         $Comando_SQL .= "mgt_estrutura_tipo, ";
         $Comando_SQL .= "mgt_estrutura_codigo, ";
         $Comando_SQL .= "mgt_estrutura_codigo_estrutura, ";
         $Comando_SQL .= "mgt_estrutura_descricao, ";
         $Comando_SQL .= "mgt_estrutura_tipo_estrutura, ";
         $Comando_SQL .= "mgt_estrutura_nivel, ";
         $Comando_SQL .= "mgt_estrutura_qtde, ";
         $Comando_SQL .= "mgt_estrutura_medida, ";
         $Comando_SQL .= "mgt_estrutura_custo_unitario) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . "PRD" . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_codigo->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_estrutura_srv_codigo->Text) . "',";
         $Comando_SQL .= "'" . completa_nivel(trim($this->mgt_estrutura_srv_descricao->Text), trim($this->mgt_estrutura_srv_nivel->Text)) . "',";
         $Comando_SQL .= "'" . "SRV" . "',";
         $Comando_SQL .= "'" . trim($this->mgt_estrutura_srv_nivel->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_estrutura_srv_qtde->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_estrutura_srv_medida->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_estrutura_srv_custo_unitario->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         /*** Verifica se o Produto inserido Possui Estrurua e a Adiciona na Relacao ***/

         $Comando_SQL = "SELECT * FROM mgt_estruturas WHERE mgt_estrutura_tipo = 'SRV' AND mgt_estrutura_codigo = '" . trim($this->mgt_estrutura_srv_codigo->Text) . "' ORDER BY mgt_estrutura_sequencia ASC";

         GetConexaoPrincipal()->SQL_MGT_Estruturas->Close();
         GetConexaoPrincipal()->SQL_MGT_Estruturas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Estruturas->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Estruturas->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Estruturas->EOF) != 1)
            {
               $Comando_SQL = "insert into mgt_estruturas(";
               $Comando_SQL .= "mgt_estrutura_tipo, ";
               $Comando_SQL .= "mgt_estrutura_codigo, ";
               $Comando_SQL .= "mgt_estrutura_codigo_estrutura, ";
               $Comando_SQL .= "mgt_estrutura_descricao, ";
               $Comando_SQL .= "mgt_estrutura_tipo_estrutura, ";
               $Comando_SQL .= "mgt_estrutura_nivel, ";
               $Comando_SQL .= "mgt_estrutura_qtde, ";
               $Comando_SQL .= "mgt_estrutura_medida, ";
               $Comando_SQL .= "mgt_estrutura_custo_unitario) ";
               $Comando_SQL .= "values(";
               $Comando_SQL .= "'" . "PRD" . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_codigo->Text) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_codigo_estrutura']) . "',";
               $Comando_SQL .= "'" . completa_nivel(retira_caracter(trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_descricao']), '_'), trim((GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_nivel'] + 1))) . "',";
               $Comando_SQL .= "'" . "SRV" . "',";
               $Comando_SQL .= "'" . trim((GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_nivel'] + 1)) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_qtde']) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_medida']) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_custo_unitario']) . "')";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               GetConexaoPrincipal()->SQL_MGT_Estruturas->Next();
            }
         }

         /*** Carrega a Estrutura do Produto ***/

         $Comando_SQL = "SELECT * FROM mgt_estruturas WHERE mgt_estrutura_tipo = 'PRD' AND mgt_estrutura_codigo = '" . Trim($this->mgt_produto_codigo->Text) . "' ORDER BY mgt_estrutura_sequencia ASC";

         GetConexaoPrincipal()->SQL_MGT_Estruturas->Close();
         GetConexaoPrincipal()->SQL_MGT_Estruturas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Estruturas->Open();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         //*** Limpa os Campos de Adicao de Estrutura ***

         $this->mgt_estrutura_srv_codigo->Text = '';
         $this->mgt_estrutura_srv_descricao->Text = '';
         $this->mgt_estrutura_srv_qtde->Text = '';
         $this->mgt_estrutura_srv_medida->Text = '';
         $this->mgt_estrutura_srv_custo_unitario->Text = '';
         $this->mgt_estrutura_srv_nivel->Text = '';
      }
   }

   function registros_servicos_buscaJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.cadprodutosalt.mgt_estrutura_srv_codigo.value         = registros_servicos_busca.getTableModel().getValue(0, registros_servicos_busca.getFocusedRow());
      document.cadprodutosalt.mgt_estrutura_srv_descricao.value      = registros_servicos_busca.getTableModel().getValue(1, registros_servicos_busca.getFocusedRow());
      document.cadprodutosalt.mgt_estrutura_srv_qtde.value           = '1';
      document.cadprodutosalt.mgt_estrutura_srv_medida.value         = 'SRV';
      document.cadprodutosalt.mgt_estrutura_srv_custo_unitario.value = registros_servicos_busca.getTableModel().getValue(2, registros_servicos_busca.getFocusedRow());
      document.cadprodutosalt.mgt_estrutura_srv_nivel.value          = '1';

<?php

   }

   function bt_busca_servicoClick($sender, $params)
   {
      if(trim($this->dados_busca_servico->Text) == "")
      {
         $Comando_SQL = "select * from mgt_servicos order by mgt_servico_codigo";
      }
      else
      {
         if(trim($this->dados_busca_servico->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_servicos where mgt_servico_codigo like '%" . trim($this->dados_busca_servico->Text) . "%' order by mgt_servico_codigo";
         }
         elseif(trim($this->dados_busca_servico->ItemIndex) == "Descricao")
         {
            $Comando_SQL = "select * from mgt_servicos where mgt_servico_descricao like '%" . trim($this->dados_busca_servico->Text) . "%' order by mgt_servico_descricao";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Servicos->Close();
      GetConexaoPrincipal()->SQL_MGT_Servicos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Servicos->Open();
   }

   function mgt_estrutura_srv_nivelJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadprodutosalt.mgt_estrutura_srv_nivel;
   var digits="0123456789";
   var campo_temp;
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1);
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }
   campo.value = campo.value.replace(',','.');

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_estrutura_srv_custo_unitarioJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_estrutura_srv_custo_unitario;
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

   function mgt_estrutura_srv_qtdeJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_estrutura_srv_qtde;
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

   function mgt_estrutura_srv_nivelJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.bt_adicionar_servico.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_srv_custo_unitarioJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_srv_nivel.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_srv_medidaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_srv_custo_unitario.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_srv_qtdeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_srv_medida.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_srv_descricaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_srv_qtde.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_srv_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_srv_descricao.focus();
     return false;
   }

<?php

   }

   function opcao_busca_servicoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.bt_busca_servico.focus();
     return false;
   }

<?php

   }

   function dados_busca_servicoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.opcao_busca_servico.focus();
     return false;
   }

<?php

   }

   function bt_adc_servicoClick($sender, $params)
   {
      $this->MSG_Erro->Caption = '';

      $this->adiciona_servicos->Top = 26;
      $this->adiciona_servicos->Visible = true;

      $this->mgt_estrutura_srv_codigo->Text = '';
      $this->mgt_estrutura_srv_descricao->Text = '';
      $this->mgt_estrutura_srv_qtde->Text = '';
      $this->mgt_estrutura_srv_medida->Text = '';
      $this->mgt_estrutura_srv_custo_unitario->Text = '';
      $this->mgt_estrutura_srv_nivel->Text = '';

      $this->cadastro->Top = 744;
      $this->cadastro->Visible = false;
      $this->bt_adc_produto->Enabled = false;
      $this->bt_adc_servico->Enabled = false;
      $this->bt_alterar_produto->Enabled = false;
      $this->bt_alterar->Enabled = false;
      $this->bt_excluir->Enabled = false;
      $this->bt_fechar->Enabled = false;
   }

   function mgt_estrutura_nivelJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadprodutosalt.mgt_estrutura_nivel;
   var digits="0123456789";
   var campo_temp;
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1);
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }
   campo.value = campo.value.replace(',','.');

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_estrutura_custo_unitarioJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_estrutura_custo_unitario;
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

   function mgt_estrutura_qtdeJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_estrutura_qtde;
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

   function bt_adicionar_produtoClick($sender, $params)
   {
      require_once("includes/rotinas_gerais.inc.php");

      if((trim($this->mgt_estrutura_codigo->Text) <> '')and(trim($this->mgt_estrutura_qtde->Text) <> '')and(trim($this->mgt_estrutura_qtde->Text) > 0))
      {
         //*** Insere o Produto na Estrutura ***

         $Comando_SQL = "insert into mgt_estruturas(";
         $Comando_SQL .= "mgt_estrutura_tipo, ";
         $Comando_SQL .= "mgt_estrutura_codigo, ";
         $Comando_SQL .= "mgt_estrutura_codigo_estrutura, ";
         $Comando_SQL .= "mgt_estrutura_descricao, ";
         $Comando_SQL .= "mgt_estrutura_tipo_estrutura, ";
         $Comando_SQL .= "mgt_estrutura_nivel, ";
         $Comando_SQL .= "mgt_estrutura_qtde, ";
         $Comando_SQL .= "mgt_estrutura_medida, ";
         $Comando_SQL .= "mgt_estrutura_custo_unitario) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . "PRD" . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_codigo->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_estrutura_codigo->Text) . "',";
         $Comando_SQL .= "'" . completa_nivel(trim($this->mgt_estrutura_descricao->Text), trim($this->mgt_estrutura_nivel->Text)) . "',";
         $Comando_SQL .= "'" . "PRD" . "',";
         $Comando_SQL .= "'" . trim($this->mgt_estrutura_nivel->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_estrutura_qtde->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_estrutura_medida->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_estrutura_custo_unitario->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         /*** Verifica se o Produto inserido Possui Estrurua e a Adiciona na Relacao ***/

         $Comando_SQL = "SELECT * FROM mgt_estruturas WHERE mgt_estrutura_tipo = 'PRD' AND mgt_estrutura_codigo = '" . trim($this->mgt_estrutura_codigo->Text) . "' ORDER BY mgt_estrutura_sequencia ASC";

         GetConexaoPrincipal()->SQL_MGT_Estruturas->Close();
         GetConexaoPrincipal()->SQL_MGT_Estruturas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Estruturas->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Estruturas->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Estruturas->EOF) != 1)
            {
               $Comando_SQL = "insert into mgt_estruturas(";
               $Comando_SQL .= "mgt_estrutura_tipo, ";
               $Comando_SQL .= "mgt_estrutura_codigo, ";
               $Comando_SQL .= "mgt_estrutura_codigo_estrutura, ";
               $Comando_SQL .= "mgt_estrutura_descricao, ";
               $Comando_SQL .= "mgt_estrutura_tipo_estrutura, ";
               $Comando_SQL .= "mgt_estrutura_nivel, ";
               $Comando_SQL .= "mgt_estrutura_qtde, ";
               $Comando_SQL .= "mgt_estrutura_medida, ";
               $Comando_SQL .= "mgt_estrutura_custo_unitario) ";
               $Comando_SQL .= "values(";
               $Comando_SQL .= "'" . "PRD" . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_codigo->Text) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_codigo_estrutura']) . "',";
               $Comando_SQL .= "'" . completa_nivel(retira_caracter(trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_descricao']), '_'), trim((GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_nivel'] + 1))) . "',";
               $Comando_SQL .= "'" . "PRD" . "',";
               $Comando_SQL .= "'" . trim((GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_nivel'] + 1)) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_qtde']) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_medida']) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_custo_unitario']) . "')";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               GetConexaoPrincipal()->SQL_MGT_Estruturas->Next();
            }
         }

         /*** Carrega a Estrutura do Produto ***/

         $Comando_SQL = "SELECT * FROM mgt_estruturas WHERE mgt_estrutura_tipo = 'PRD' AND mgt_estrutura_codigo = '" . Trim($this->mgt_produto_codigo->Text) . "' ORDER BY mgt_estrutura_sequencia ASC";

         GetConexaoPrincipal()->SQL_MGT_Estruturas->Close();
         GetConexaoPrincipal()->SQL_MGT_Estruturas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Estruturas->Open();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         //*** Limpa os Campos de Adicao de Estrutura ***

         $this->mgt_estrutura_codigo->Text = '';
         $this->mgt_estrutura_descricao->Text = '';
         $this->mgt_estrutura_qtde->Text = '';
         $this->mgt_estrutura_medida->Text = '';
         $this->mgt_estrutura_custo_unitario->Text = '';
         $this->mgt_estrutura_nivel->Text = '';
      }
   }

   function mgt_estrutura_nivelJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.bt_adicionar_produto.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_custo_unitarioJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_nivel.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_medidaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_custo_unitario.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_qtdeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_medida.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_descricaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_qtde.focus();
     return false;
   }

<?php

   }

   function mgt_estrutura_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_estrutura_descricao.focus();
     return false;
   }

<?php

   }

   function opcao_busca_produtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.bt_busca_produto.focus();
     return false;
   }

<?php

   }

   function dados_busca_produtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.opcao_busca_produto.focus();
     return false;
   }

<?php

   }

   function registros_produtos_buscaJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.cadprodutosalt.mgt_estrutura_codigo.value         = registros_produtos_busca.getTableModel().getValue(0, registros_produtos_busca.getFocusedRow());
      document.cadprodutosalt.mgt_estrutura_descricao.value      = registros_produtos_busca.getTableModel().getValue(2, registros_produtos_busca.getFocusedRow());
      document.cadprodutosalt.mgt_estrutura_qtde.value           = '1';
      document.cadprodutosalt.mgt_estrutura_medida.value         = registros_produtos_busca.getTableModel().getValue(5, registros_produtos_busca.getFocusedRow());
      document.cadprodutosalt.mgt_estrutura_custo_unitario.value = registros_produtos_busca.getTableModel().getValue(3, registros_produtos_busca.getFocusedRow());
      document.cadprodutosalt.mgt_estrutura_nivel.value          = '1';

<?php

   }

   function bt_busca_produtoClick($sender, $params)
   {
      if(trim($this->dados_busca_produto->Text) == "")
      {
         $Comando_SQL = "select * from mgt_produtos order by mgt_produto_codigo";
      }
      else
      {
         if(trim($this->opcao_busca_produto->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_codigo like '%" . trim($this->dados_busca_produto->Text) . "%' order by mgt_produto_codigo";
         }
         elseif(trim($this->opcao_busca_produto->ItemIndex) == "Referencia")
         {
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_referencia = '" . trim($this->dados_busca_produto->Text) . "' order by mgt_produto_referencia";
         }
         elseif(trim($this->opcao_busca_produto->ItemIndex) == "Descricao")
         {
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_descricao like '%" . trim($this->dados_busca_produto->Text) . "%' order by mgt_produto_descricao";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Produtos->SQL;
   }

   function bt_fechar_produtoClick($sender, $params)
   {
      $this->adiciona_produtos->Top = 660;
      $this->adiciona_produtos->Visible = false;

      $this->cadastro->Top = 26;
      $this->cadastro->Visible = true;
      $this->bt_adc_produto->Enabled = true;
      $this->bt_adc_servico->Enabled = true;
      $this->bt_alterar_produto->Enabled = true;
      $this->bt_alterar->Enabled = true;
      $this->bt_excluir->Enabled = true;
      $this->bt_fechar->Enabled = true;

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
   }

   function bt_adc_produtoClick($sender, $params)
   {
      $this->MSG_Erro->Caption = '';

      $this->adiciona_produtos->Top = 26;
      $this->adiciona_produtos->Visible = true;

      $this->mgt_estrutura_codigo->Text = '';
      $this->mgt_estrutura_descricao->Text = '';
      $this->mgt_estrutura_qtde->Text = '';
      $this->mgt_estrutura_medida->Text = '';
      $this->mgt_estrutura_custo_unitario->Text = '';
      $this->mgt_estrutura_nivel->Text = '';

      $this->cadastro->Top = 744;
      $this->cadastro->Visible = false;
      $this->bt_adc_produto->Enabled = false;
      $this->bt_adc_servico->Enabled = false;
      $this->bt_alterar_produto->Enabled = false;
      $this->bt_alterar->Enabled = false;
      $this->bt_excluir->Enabled = false;
      $this->bt_fechar->Enabled = false;
   }

   function mgt_produto_ncmJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadprodutosalt.mgt_produto_ncm
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

   function mgt_produto_ncmJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_classif_tributaria.focus();
     return false;
   }

<?php

   }

   function mgt_produto_precoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_produto_preco;
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

   function mgt_produto_custo_medioJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_produto_custo_medio;
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

   function mgt_produto_valor_compraJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_produto_valor_compra;
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

   function mgt_produto_ipiJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_produto_ipi;
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

   function mgt_produto_classif_tributariaJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadprodutosalt.mgt_produto_classif_tributaria
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

   function mgt_produto_data_alteracaoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numeros e Barra ***

   var campo = document.cadprodutosalt.mgt_produto_data_alteracao
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numeros e Barra ***

<?php

   }

   function mgt_produto_estoque_atualJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_produto_estoque_atual;
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

   function mgt_produto_estoque_idealJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_produto_estoque_ideal;
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

   function mgt_produto_estoque_minimoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_produto_estoque_minimo;
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

   function mgt_produto_estoque_inicialJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_produto_estoque_inicial;
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

   function mgt_produto_fornecedorJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadprodutosalt.mgt_produto_fornecedor
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

   function mgt_produto_pesoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosalt.mgt_produto_peso;
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

   function mgt_produto_codigo_barrasJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadprodutosalt.mgt_produto_codigo_barras
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

   function mgt_produto_estoque_idealJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_estoque_atual.focus();
     return false;
   }
<?php

   }

   function mgt_produto_estoque_minimoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_estoque_ideal.focus();
     return false;
   }
<?php

   }

   function mgt_produto_custo_medioJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_preco.focus();
     return false;
   }
<?php

   }

   function mgt_produto_valor_compraJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_custo_medio.focus();
     return false;
   }
<?php

   }

   function mgt_produto_localizacaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_estoque_inicial.focus();
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
         $Comando_SQL .= "'" . trim($this->mgt_produto_codigo->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_produtos ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_produto_codigo = '" . trim($this->mgt_produto_codigo->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->confirmacao->Top = 551;
         $this->confirmacao->IsVisible = false;

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         //*** Marca o Carregamento do Formulario ***
         $this->hd_cadprodutosalt_carregado->Value = 'N';

         redirect('cad_produtos.php');
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 551;
      $this->confirmacao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 189;
      $this->confirmacao->IsVisible = true;
   }

   function bt_alterarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_produto_codigo->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Codigo.";
      }
      elseif(trim($this->mgt_produto_descricao->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Descricao.";
      }
      else
      {
         if(trim($this->mgt_produto_peso->Text) == '')
         {
            $this->mgt_produto_peso->Text = '0';
         }

         if(trim($this->mgt_produto_estoque_inicial->Text) == '')
         {
            $this->mgt_produto_estoque_inicial->Text = '0';
         }

         if(trim($this->mgt_produto_estoque_ideal->Text) == '')
         {
            $this->mgt_produto_estoque_ideal->Text = '0';
         }

         if(trim($this->mgt_produto_estoque_minimo->Text) == '')
         {
            $this->mgt_produto_estoque_minimo->Text = '0';
         }

         if(trim($this->mgt_produto_estoque_atual->Text) == '')
         {
            $this->mgt_produto_estoque_atual->Text = '0';
         }

         if(trim($this->mgt_produto_classif_tributaria->Text) == '')
         {
            $this->mgt_produto_classif_tributaria->Text = '0';
         }

         if(trim($this->mgt_produto_preco->Text) == '')
         {
            $this->mgt_produto_preco->Text = '0';
         }

         if(trim($this->mgt_produto_valor_compra->Text) == '')
         {
            $this->mgt_produto_valor_compra->Text = '0';
         }

         if(trim($this->mgt_produto_codigo_barras->Text) == '')
         {
            $this->mgt_produto_codigo_barras->Text = '0';
         }

         if(trim($this->mgt_produto_lote->Text) == '')
         {
            $this->mgt_produto_lote->Text = '0';
         }

         if(trim($this->mgt_produto_ipi->Text) == '')
         {
            $this->mgt_produto_ipi->Text = '0';
         }

         if(trim($this->mgt_produto_fornecedor->Text) == '')
         {
            $this->mgt_produto_fornecedor->Text = '0';
         }

         if(trim($this->mgt_produto_custo_medio->Text) == '')
         {
            $this->mgt_produto_custo_medio->Text = '0';
         }

         $Comando_SQL = "update mgt_produtos set ";
         $Comando_SQL .= "mgt_produto_descricao          = '" . trim($this->mgt_produto_descricao->Text) . "',";
         $Comando_SQL .= "mgt_produto_familia          = '" . trim($this->mgt_produto_familia->ItemIndex) . "',";
         $Comando_SQL .= "mgt_produto_peso						= '" . trim($this->mgt_produto_peso->Text) . "',";
         $Comando_SQL .= "mgt_produto_unidade					= '" . trim($this->mgt_produto_unidade->Text) . "',";
         $Comando_SQL .= "mgt_produto_tipo						= '" . trim($this->mgt_produto_tipo->ItemIndex) . "',";
         $Comando_SQL .= "mgt_produto_estoque_inicial			= '" . trim($this->mgt_produto_estoque_inicial->Text) . "',";
         $Comando_SQL .= "mgt_produto_estoque_atual				= '" . trim($this->mgt_produto_estoque_atual->Text) . "',";
         $Comando_SQL .= "mgt_produto_unidade_pesagem			= '" . trim($this->mgt_produto_unidade_pesagem->Text) . "',";
         $Comando_SQL .= "mgt_produto_classif_tributaria		= '" . trim($this->mgt_produto_classif_tributaria->Text) . "',";
         $Comando_SQL .= "mgt_produto_classif_fiscal			= '" . trim($this->mgt_produto_classif_fiscal->Text) . "',";
         $Comando_SQL .= "mgt_produto_codigo_barras				= '" . trim($this->mgt_produto_codigo_barras->Text) . "',";
         $Comando_SQL .= "mgt_produto_lote						= '" . trim($this->mgt_produto_lote->Text) . "',";
         $Comando_SQL .= "mgt_produto_preco						= '" . trim($this->mgt_produto_preco->Text) . "',";
         $Comando_SQL .= "mgt_produto_data_alteracao			= '" . inverte_data_dma_to_amd(date("d/m/Y", time())) . "',";
         $Comando_SQL .= "mgt_produto_ipi						= '" . trim($this->mgt_produto_ipi->Text) . "',";
         $Comando_SQL .= "mgt_produto_referencia				= '" . trim($this->mgt_produto_referencia->Text) . "',";
         $Comando_SQL .= "mgt_produto_fornecedor				= '" . trim($this->mgt_produto_fornecedor->Text) . "',";
         $Comando_SQL .= "mgt_produto_descricao_detalhada		= '" . trim($this->mgt_produto_descricao_detalhada->Text) . "',";
         $Comando_SQL .= "mgt_produto_localizacao		= '" . trim($this->mgt_produto_localizacao->Text) . "',";
         $Comando_SQL .= "mgt_produto_estoque_minimo		= '" . trim($this->mgt_produto_estoque_minimo->Text) . "',";
         $Comando_SQL .= "mgt_produto_estoque_ideal		= '" . trim($this->mgt_produto_estoque_ideal->Text) . "',";
         $Comando_SQL .= "mgt_produto_valor_compra		= '" . trim($this->mgt_produto_valor_compra->Text) . "',";
         $Comando_SQL .= "mgt_produto_custo_medio		= '" . trim($this->mgt_produto_custo_medio->Text) . "',";
         $Comando_SQL .= "mgt_produto_ncm	= '" . trim($this->mgt_produto_ncm->Text) . "'";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_produto_codigo = '" . trim($this->mgt_produto_codigo->Text) . "'";

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
         $Comando_SQL .= "'" . trim($this->mgt_produto_codigo->Text) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         //*** Marca o Carregamento do Formulario ***
         $this->hd_cadprodutosalt_carregado->Value = 'N';

         redirect('cad_produtos.php');
      }
   }

   function mgt_produto_descricao_detalhadaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.bt_alterar.focus();
     return false;
   }
<?php

   }

   function mgt_produto_precoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_descricao_detalhada.focus();
     return false;
   }
<?php

   }

   function mgt_produto_ipiJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_valor_compra.focus();
     return false;
   }
<?php

   }

   function mgt_produto_classif_tributariaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_ipi.focus();
     return false;
   }
<?php

   }

   function mgt_produto_classif_fiscalJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_ncm.focus();
     return false;
   }
<?php

   }

   function mgt_produto_data_alteracaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_classif_fiscal.focus();
     return false;
   }
<?php

   }

   function mgt_produto_estoque_atualJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_data_alteracao.focus();
     return false;
   }
<?php

   }

   function mgt_produto_estoque_inicialJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_estoque_minimo.focus();
     return false;
   }
<?php

   }

   function mgt_produto_pesoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_fornecedor.focus();
     return false;
   }
<?php

   }

   function mgt_produto_unidade_pesagemJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_peso.focus();
     return false;
   }
<?php

   }

   function mgt_produto_unidadeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_unidade_pesagem.focus();
     return false;
   }
<?php

   }

   function mgt_produto_codigo_barrasJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_unidade.focus();
     return false;
   }
<?php

   }

   function mgt_produto_loteJSKeyPress($sender, $params)
   {
?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_codigo_barras.focus();
     return false;
   }
<?php

   }


   function mgt_produto_fornecedorJSKeyPress($sender, $params)
   {
?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_localizacao.focus();
     return false;
   }
<?php

   }

   function mgt_produto_referenciaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_lote.focus();
     return false;
   }
<?php

   }


   function mgt_produto_tipoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_referencia.focus();
     return false;
   }
<?php

   }

   function mgt_produto_familiaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_tipo.focus();
     return false;
   }
<?php

   }

   function cadprodutosaltCreate($sender, $params)
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

      if($this->hd_cadprodutosalt_carregado->Value == 'N')
      {
         require_once("includes/inverte_data_amd_to_dma.fnc.php");
         require_once("includes/inverte_data_dma_to_amd.fnc.php");

         $mgt_produto_codigo = $_REQUEST['mgt_produto_codigo'];

         $Comando_SQL = "select * from mgt_produtos where mgt_produto_codigo = '" . trim($mgt_produto_codigo) . "' order by mgt_produto_codigo";

         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         $this->mgt_produto_codigo->Text = $mgt_produto_codigo;
         $this->mgt_produto_descricao->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_descricao'];
         $this->mgt_produto_peso->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_peso'];
         $this->mgt_produto_unidade->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_unidade'];
         $this->mgt_produto_estoque_inicial->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_inicial'];
         $this->mgt_produto_estoque_atual->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'];
         $this->mgt_produto_unidade_pesagem->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_unidade_pesagem'];
         $this->mgt_produto_classif_tributaria->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_classif_tributaria'];
         $this->mgt_produto_classif_fiscal->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_classif_fiscal'];
         $this->mgt_produto_codigo_barras->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_codigo_barras'];
         $this->mgt_produto_lote->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_lote'];
         $this->mgt_produto_preco->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_preco'];
         $this->mgt_produto_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_ipi'];
         $this->mgt_produto_referencia->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_referencia'];
         $this->mgt_produto_fornecedor->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_fornecedor'];
         $this->mgt_produto_descricao_detalhada->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_descricao_detalhada'];

         $this->mgt_produto_localizacao->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_localizacao'];
         $this->mgt_produto_estoque_minimo->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_minimo'];
         $this->mgt_produto_estoque_ideal->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_ideal'];
         $this->mgt_produto_valor_compra->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_valor_compra'];
         $this->mgt_produto_custo_medio->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_custo_medio'];

         $this->mgt_produto_data_alteracao->Text = inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_data_alteracao']);

         $this->mgt_produto_familia->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_familia'];
         $this->mgt_produto_tipo->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_tipo'];

         $this->mgt_produto_ncm->Text = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_ncm'];

         /*** Inicio - Carrega as Familias ***/

         $Comando_SQL = "select * from mgt_familias_produtos order by mgt_familia_produto_descricao";

         GetConexaoPrincipal()->SQL_MGT_Familias->Close();
         GetConexaoPrincipal()->SQL_MGT_Familias->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Familias->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Familias->EOF) != 1)
         {

            while(GetConexaoPrincipal()->SQL_MGT_Familias->EOF != 1)
            {
               $this->mgt_produto_familia->AddItem(GetConexaoPrincipal()->SQL_MGT_Familias->Fields['mgt_familia_produto_descricao'], null , GetConexaoPrincipal()->SQL_MGT_Familias->Fields['mgt_familia_produto_codigo']);

               GetConexaoPrincipal()->SQL_MGT_Familias->Next();
            }

         }

         /*** Final - Carrega as Familias ***/

         /*** Inicio - Carrega os Tipos ***/

         $Comando_SQL = "select * from mgt_tipos_produtos order by mgt_tipo_produto_descricao";

         GetConexaoPrincipal()->SQL_MGT_Tipos->Close();
         GetConexaoPrincipal()->SQL_MGT_Tipos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Tipos->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Tipos->EOF) != 1)
         {

            while(GetConexaoPrincipal()->SQL_MGT_Tipos->EOF != 1)
            {
               $this->mgt_produto_tipo->AddItem(GetConexaoPrincipal()->SQL_MGT_Tipos->Fields['mgt_tipo_produto_descricao'], null , GetConexaoPrincipal()->SQL_MGT_Tipos->Fields['mgt_tipo_produto_codigo']);

               GetConexaoPrincipal()->SQL_MGT_Tipos->Next();
            }

         }

         /*** Carrega a Estrutura do Produto ***/

         $Comando_SQL = "SELECT * FROM mgt_estruturas WHERE mgt_estrutura_tipo = 'PRD' AND mgt_estrutura_codigo = '" . Trim($this->mgt_produto_codigo->Text) . "' ORDER BY mgt_estrutura_sequencia ASC";

         GetConexaoPrincipal()->SQL_MGT_Estruturas->Close();
         GetConexaoPrincipal()->SQL_MGT_Estruturas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Estruturas->Open();

         /*** Final - Carrega os Tipos ***/

         $this->MSG_Erro->Caption = "";

         /*** Marca o Carregamento do Formulario ***/

         $this->hd_cadprodutosalt_carregado->Value = 'S';
      }
   }

   function mgt_produto_descricaoJSKeyPress($sender, $params)
   {
?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_familia.focus();
     return false;
   }

<?php

   }

   function mgt_produto_codigoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosalt.mgt_produto_descricao.focus();
     return false;
   }

<?php

   }


   function bt_incluirJSClick($sender, $params)
   {

?>
   //Add your javascript code here

<?php

   }

   function bt_fecharClick($sender, $params)
   {
      //*** Restaura a Ultima Selecao Efetuada ***
      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $_SESSION['comando_sql_grid'];
      GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

      //*** Marca o Carregamento do Formulario ***
      $this->hd_cadprodutosalt_carregado->Value = 'N';

      redirect('cad_produtos.php');
   }

   function bt_incluirClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_produto_codigo->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Codigo.";
      }
      elseif(trim($this->mgt_produto_descricao->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Descricao.";
      }
      else
      {
         $Comando_SQL = "select * from mgt_produtos where mgt_produto_codigo = '" . $this->mgt_produto_codigo->Text . "' order by mgt_produto_codigo";

         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Produtos->EOF) == 1)
         {
            $Comando_SQL = "insert into mgt_produtos(";
            $Comando_SQL .= "mgt_produto_codigo, ";
            $Comando_SQL .= "mgt_produto_descricao, ";
            $Comando_SQL .= "mgt_produto_familia, ";
            $Comando_SQL .= "mgt_produto_peso, ";
            $Comando_SQL .= "mgt_produto_unidade, ";
            $Comando_SQL .= "mgt_produto_tipo, ";
            $Comando_SQL .= "mgt_produto_estoque_inicial, ";
            $Comando_SQL .= "mgt_produto_estoque_atual, ";
            $Comando_SQL .= "mgt_produto_unidade_pesagem, ";
            $Comando_SQL .= "mgt_produto_classif_tributaria, ";
            $Comando_SQL .= "mgt_produto_classif_fiscal, ";
            $Comando_SQL .= "mgt_produto_codigo_barras, ";
            $Comando_SQL .= "mgt_produto_lote, ";
            $Comando_SQL .= "mgt_produto_preco, ";
            $Comando_SQL .= "mgt_produto_data_alteracao, ";
            $Comando_SQL .= "mgt_produto_ipi, ";
            $Comando_SQL .= "mgt_produto_referencia, ";
            $Comando_SQL .= "mgt_produto_fornecedor, ";
            $Comando_SQL .= "mt_produto_descricao_detalhada) ";
            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . trim($this->mgt_produto_codigo->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_descricao->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_familia->ItemIndex) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_peso->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_unidade->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_tipo->ItemIndex) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_estoque_inicial->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_estoque_atual->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_unidade_pesagem->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_classif_tributaria->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_classif_fiscal->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_codigo_barras->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_lote->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_preco->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_produto_data_alteracao->Text)) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_ipi->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_referencia->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_fornecedor->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_descricao_detalhada->Text) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Restaura a Ultima Selecao Efetuada ***
            GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
            GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $_SESSION['comando_sql_grid'];
            GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

            //*** Marca o Carregamento do Formulario ***
            $this->hd_cadprodutosalt_carregado->Value = 'N';

            redirect('cad_produtos.php');
         }
         else
         {
            $this->MSG_Erro->Caption = "Este cadastro ja existe.";
         }
      }

   }

   function cadprodutosaltJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

<?php

   }

   function cadprodutosaltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }
    function bt_imprime_estruturaClick($sender, $params)
    {
      echo "<script language=\"JavaScript\">";
      echo "window.open('cad_produtos_estrutura_imp.php?mgt_produto_codigo=" . trim($this->mgt_produto_codigo->Text) . "','cad_produtos_estrutura_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
      echo "</script>";
    }

}

global $application;

global $cadprodutosalt;

//Creates the form
$cadprodutosalt = new cadprodutosalt($application);

//Read from resource file
$cadprodutosalt->loadResource(__FILE__);

//Shows the form
$cadprodutosalt->show();

?>