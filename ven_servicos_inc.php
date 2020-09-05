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
class venservicosinc extends Page
{
   public $opcao_busca_fornecedor = null;
   public $dados_busca_fornecedor = null;
   public $adiciona_fornecedor_nome = null;
   public $adiciona_fornecedor_codigo = null;
   public $adiciona_fornecedor_numero = null;
   public $bt_adiciona_fornecedor = null;
   public $bt_buscar_fornecedor = null;
   public $bt_fechar_fornecedor = null;
   public $registros_fornecedores = null;
   public $adiciona_fornecedor = null;
   public $Edit6 = null;
   public $Panel17 = null;
   public $Panel16 = null;
   public $Panel15 = null;
   public $Panel14 = null;
   public $Label71 = null;
   public $Label70 = null;
   public $Label69 = null;
   public $Label68 = null;
   public $GroupBox3 = null;
   public $Label66 = null;
   public $Label65 = null;
   public $hd_tipo_adicao = null;
   public $bt_procurar_fornecedor = null;
   public $Label64 = null;
   public $MSG_Alerta = null;
   public $adiciona_cliente_bloqueado = null;
   public $Label67 = null;
   public $hd_faturamento_cliente_condicao_pgto_4 = null;
   public $hd_faturamento_cliente_condicao_pgto_3 = null;
   public $hd_faturamento_cliente_condicao_pgto_2 = null;
   public $hd_faturamento_cliente_condicao_pgto_1 = null;
   public $hd_faturamento_cliente_observacao = null;
   public $hd_faturamento_cliente_transportadora = null;
   public $hd_faturamento_cliente_desconto = null;
   public $produto_remover_numero_faturamento = null;
   public $mgt_faturamento_cliente_condicao_pgto_12 = null;
   public $mgt_faturamento_cliente_condicao_pgto_11 = null;
   public $mgt_faturamento_cliente_condicao_pgto_10 = null;
   public $mgt_faturamento_cliente_condicao_pgto_9 = null;
   public $mgt_faturamento_cliente_condicao_pgto_8 = null;
   public $mgt_faturamento_cliente_condicao_pgto_7 = null;
   public $mgt_faturamento_cliente_condicao_pgto_6 = null;
   public $mgt_faturamento_cliente_condicao_pgto_5 = null;
   public $mgt_faturamento_cliente_condicao_pgto_4 = null;
   public $mgt_faturamento_cliente_condicao_pgto_3 = null;
   public $mgt_faturamento_cliente_condicao_pgto_2 = null;
   public $mgt_faturamento_cliente_condicao_pgto_1 = null;
   public $mgt_faturamento_valor_total = null;
   public $mgt_faturamento_valor_ipi = null;
   public $mgt_faturamento_valor_frete = null;
   public $mgt_faturamento_valor_desconto = null;
   public $mgt_faturamento_valor_pedido = null;
   public $mgt_faturamento_cliente_observacao = null;
   public $mgt_faturamento_ordem_compra = null;
   public $mgt_faturamento_cliente_transportadora = null;
   public $mgt_faturamento_cliente_tipo_faturamento = null;
   public $mgt_faturamento_data_entrega = null;
   public $mgt_faturamento_data = null;
   public $mgt_faturamento_cliente_desconto = null;
   public $mgt_faturamento_cliente_nome = null;
   public $mgt_faturamento_cliente_codigo = null;
   public $mgt_faturamento_cliente_numero = null;
   public $mgt_faturamento_numero = null;
   public $opcoes_faturamento = null;
   public $dados_faturamentos = null;
   public $dados_faturamento = null;
   public $Label63 = null;
   public $Panel13 = null;
   public $Label62 = null;
   public $Panel12 = null;
   public $alterar_produto = null;
   public $mgt_alterar_produto_valor_total = null;
   public $Label57 = null;
   public $mgt_alterar_produto_preco = null;
   public $Label56 = null;
   public $mgt_alterar_produto_qtde = null;
   public $Label55 = null;
   public $mgt_alterar_produto_descricao = null;
   public $Label54 = null;
   public $mgt_alterar_produto_codigo = null;
   public $Label52 = null;
   public $Label51 = null;
   public $Panel11 = null;
   public $Panel10 = null;
   public $Panel9 = null;
   public $Panel8 = null;
   public $bt_alterar_sim = null;
   public $bt_alterar_nao = null;
   public $Label50 = null;
   public $produto_remover_descricao = null;
   public $produto_remover_codigo = null;
   public $produto_remover_numero = null;
   public $hd_alterar_produto_valor_total = null;
   public $hd_alterar_produto_preco = null;
   public $hd_alterar_produto_qtde = null;
   public $hd_alterar_produto_descricao = null;
   public $hd_alterar_produto_codigo = null;
   public $hd_alterar_produto_numero = null;
   public $confirmacao = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $confirmacao_mensagem = null;
   public $bt_alterar = null;
   public $bt_fechar_produto = null;
   public $bt_fechar_cliente = null;
   public $mgt_produto_valor_total = null;
   public $mgt_produto_preco = null;
   public $mgt_produto_qtde = null;
   public $mgt_produto_descricao = null;
   public $mgt_produto_codigo = null;
   public $bt_adicionar_produto = null;
   public $Panel7 = null;
   public $Panel6 = null;
   public $Panel5 = null;
   public $Panel4 = null;
   public $Panel3 = null;
   public $Panel2 = null;
   public $Label43 = null;
   public $Label42 = null;
   public $Label41 = null;
   public $registros_produtos_busca = null;
   public $dados_busca_produto = null;
   public $opcao_busca_produto = null;
   public $bt_busca_produto = null;
   public $Panel1 = null;
   public $adiciona_produtos_borda = null;
   public $GroupBox1 = null;
   public $Label35 = null;
   public $Label34 = null;
   public $adiciona_produtos = null;
   public $Label39 = null;
   public $Label38 = null;
   public $Label37 = null;
   public $Label36 = null;
   public $registros_produtos = null;
   public $adiciona_clientes_borda = null;
   public $bt_adiciona_cliente = null;
   public $adiciona_cliente_nome = null;
   public $Label33 = null;
   public $adiciona_cliente_codigo = null;
   public $Label32 = null;
   public $adiciona_cliente_numero = null;
   public $Label31 = null;
   public $registros = null;
   public $Label30 = null;
   public $GroupBox6 = null;
   public $bt_buscar = null;
   public $opcao_busca = null;
   public $dados_busca = null;
   public $Label29 = null;
   public $Label28 = null;
   public $adiciona_clientes = null;
   public $bt_remover = null;
   public $bt_adicionar = null;
   public $bt_procurar = null;
   public $Label46 = null;
   public $Label27 = null;
   public $Label26 = null;
   public $Label48 = null;
   public $Label25 = null;
   public $Label24 = null;
   public $Label23 = null;
   public $Label22 = null;
   public $Label21 = null;
   public $Label20 = null;
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
   public $GroupBox5 = null;
   public $GroupBox4 = null;
   public $GroupBox2 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $Label1 = null;
   public $bt_incluir = null;
   public $bt_fechar = null;
   public $area_sistema = null;
   function registros_fornecedoresJSRowChanged($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.venservicosinc.adiciona_fornecedor_numero.value = registros_fornecedores.getTableModel().getValue(0, registros_fornecedores.getFocusedRow());
      document.venservicosinc.adiciona_fornecedor_codigo.value = registros_fornecedores.getTableModel().getValue(1, registros_fornecedores.getFocusedRow());
      document.venservicosinc.adiciona_fornecedor_nome.value = registros_fornecedores.getTableModel().getValue(2, registros_fornecedores.getFocusedRow());

      document.venservicosinc.hd_faturamento_cliente_desconto.value = '0';
      document.venservicosinc.hd_faturamento_cliente_condicao_pgto_1.value = '0';
      document.venservicosinc.hd_faturamento_cliente_condicao_pgto_2.value = '0';
      document.venservicosinc.hd_faturamento_cliente_condicao_pgto_3.value = '0';
      document.venservicosinc.hd_faturamento_cliente_condicao_pgto_4.value = '0';
      document.venservicosinc.hd_faturamento_cliente_transportadora.value = '0';
      document.venservicosinc.hd_faturamento_cliente_observacao.value = '';

   <?php

   }

   function opcao_busca_fornecedorJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.bt_buscar_fornecedor.focus();
     return false;
   }

   <?php

   }

   function dados_busca_fornecedorJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.opcao_busca_fornecedor.focus();
     return false;
   }

   <?php

   }

   function bt_buscar_fornecedorClick($sender, $params)
   {
      if(trim($this->dados_busca_fornecedor->Text) == "")
      {
         $Comando_SQL = "select * from mgt_fornecedores order by mgt_fornecedor_numero";
      }
      else
      {
         if(trim($this->opcao_busca_fornecedor->ItemIndex) == "Numero")
         {
            $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_numero = '" . trim($this->dados_busca_fornecedor->Text) . "' order by mgt_fornecedor_numero";
         }
         elseif(trim($this->opcao_busca_fornecedor->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_codigo like '%" . trim($this->dados_busca_fornecedor->Text) . "%' order by mgt_fornecedor_codigo";
         }
         elseif(trim($this->opcao_busca_fornecedor->ItemIndex) == "Nome")
         {
            $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_nome like '%" . trim($this->dados_busca_fornecedor->Text) . "%' order by mgt_fornecedor_nome";
         }
         elseif(trim($this->opcao_busca_fornecedor->ItemIndex) == "Razao Social")
         {
            $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_razao_social like '%" . trim($this->dados_busca_fornecedor->Text) . "%' order by mgt_fornecedor_razao_social";
         }

      }

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
      GetConexaoPrincipal()->SQL_MGT_Fornecedores->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Open();
   }

   function bt_adiciona_fornecedorClick($sender, $params)
   {
      if(trim($this->adiciona_fornecedor_numero->Text) <> '')
      {
            $this->mgt_faturamento_cliente_numero->Text = $this->adiciona_fornecedor_numero->Text;
            $this->mgt_faturamento_cliente_codigo->Text = $this->adiciona_fornecedor_codigo->Text;
            $this->mgt_faturamento_cliente_nome->Text = $this->adiciona_fornecedor_nome->Text;

            $this->mgt_faturamento_cliente_desconto->Text = '0';
            $this->mgt_faturamento_cliente_condicao_pgto_1->Text = '0';
            $this->mgt_faturamento_cliente_condicao_pgto_2->Text = '0';
            $this->mgt_faturamento_cliente_condicao_pgto_3->Text = '0';
            $this->mgt_faturamento_cliente_condicao_pgto_4->Text = '0';
            $this->mgt_faturamento_cliente_transportadora->ItemIndex = 0;
            $this->mgt_faturamento_cliente_observacao->Text = '';

            $this->MSG_Erro->Caption = '';

            $this->hd_tipo_adicao->Value = "F";
      }

      $this->adiciona_fornecedor->Visible = false;

      $this->adiciona_fornecedor->Top = 1436;
      $this->dados_faturamento->Top = (($this->dados_faturamento->Top) - ($this->adiciona_fornecedor->Height) - 5);
      $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) - ($this->adiciona_fornecedor->Height) - 5);

      $this->adiciona_fornecedor->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
   }

   function bt_procurar_fornecedorClick($sender, $params)
   {
      if($this->adiciona_fornecedor->Visible == false)
      {
         $this->adiciona_fornecedor->Top = 39;
         $this->dados_faturamento->Top = (($this->dados_faturamento->Top) + ($this->adiciona_fornecedor->Height) + 5);
         $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) + ($this->adiciona_fornecedor->Height) + 5);

         $this->adiciona_fornecedor_numero->Text = "";
         $this->adiciona_fornecedor_codigo->Text = "";
         $this->adiciona_fornecedor_nome->Text = "";

         $this->adiciona_fornecedor->Visible = true;
      }
   }

   function bt_fechar_fornecedorClick($sender, $params)
   {
      $this->adiciona_fornecedor->Visible = false;

      $this->adiciona_fornecedor->Top = 1436;
      $this->dados_faturamento->Top = (($this->dados_faturamento->Top) - ($this->adiciona_fornecedor->Height) - 5);
      $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) - ($this->adiciona_fornecedor->Height) - 5);

      $this->adiciona_fornecedor->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
   }


   function mgt_faturamento_cliente_descontoJSFocus($sender, $params)
   {
?>
   //Adicione seu codigo javascript aqui

<?php
   }

   public function totaliza_faturamento()
   {
      //*** Atualiza o Grid dos Produtos Incluidos e Totaliza o Faturamento ***

      $valor_desconto = 0;
      $valor_faturamento = 0;
      $valor_ipi = 0;
      $valor_total = 0;
      $desconto = $this->mgt_faturamento_cliente_desconto->Text;
      $frete = $this->mgt_faturamento_valor_frete->Text;

      if($desconto < 0)
      {
         $desconto = 0;
      }

      if($frete < 0)
      {
         $frete = 0;
      }

      $this->mgt_faturamento_valor_desconto->Text = '0.00';
      $this->mgt_faturamento_valor_pedido->Text = '0.00';
      $this->mgt_faturamento_valor_ipi->Text = '0.00';
      $this->mgt_faturamento_valor_total->Text = '0.00';

      $Comando_SQL = "select * from mgt_faturamentos_produtos_srv where mgt_faturamento_produto_srv_numero_pedido = " . trim($this->mgt_faturamento_numero->Text) . " order by mgt_faturamento_produto_srv_numero";

      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Close();
      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->EOF) != 1)
         {
            $valor_ipi = $valor_ipi + GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_ipi'];
            $valor_faturamento = $valor_faturamento + GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_total'];

            GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Next();
         }
      }

      if($desconto > 0)
      {
         $valor_desconto = (($valor_faturamento * $desconto) / 100);
      }
      else
      {
         $valor_desconto = 0;
      }

      $valor_total = ((($valor_faturamento + $valor_ipi) + $frete) - $valor_desconto);

      $this->mgt_faturamento_valor_desconto->Text = number_format($valor_desconto, "2", ".", "");
      $this->mgt_faturamento_valor_pedido->Text = number_format($valor_faturamento, "2", ".", "");
      $this->mgt_faturamento_valor_ipi->Text = number_format($valor_ipi, "2", ".", "");
      $this->mgt_faturamento_valor_total->Text = number_format($valor_total, "2", ".", "");
   }

   function mgt_alterar_produto_precoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.venservicosinc.mgt_alterar_produto_preco;
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

   //*** Totaliza o Produto ***

   document.venservicosinc.mgt_alterar_produto_valor_total.value = (document.venservicosinc.mgt_alterar_produto_qtde.value * document.venservicosinc.mgt_alterar_produto_preco.value).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_alterar_produto_precoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.bt_alterar_sim.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_qtdeJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.venservicosinc.mgt_alterar_produto_qtde;
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

   //*** Totaliza o Produto ***

   document.venservicosinc.mgt_alterar_produto_valor_total.value = (document.venservicosinc.mgt_alterar_produto_qtde.value * document.venservicosinc.mgt_alterar_produto_preco.value).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_alterar_produto_qtdeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_alterar_produto_preco.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_descricaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_alterar_produto_qtde.focus();
     return false;
   }

<?php

   }

   function bt_alterar_simClick($sender, $params)
   {
      if((trim($this->mgt_alterar_produto_codigo->Text) <> '')and(trim($this->mgt_alterar_produto_qtde->Text) <> '')and(trim($this->mgt_alterar_produto_qtde->Text) > 0))
      {
         //*** Seleciona o Produto ***

         $Comando_SQL = "select * from mgt_servicos where mgt_servico_codigo = '" . trim($this->mgt_alterar_produto_codigo->Text) . "'";

         GetConexaoPrincipal()->SQL_MGT_Servicos->Close();
         GetConexaoPrincipal()->SQL_MGT_Servicos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Servicos->Open();

         //*** Altera o Produto do Faturamento ***

         $Comando_SQL = "update mgt_faturamentos_produtos_srv set ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_quantidade = '" . trim($this->mgt_alterar_produto_qtde->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_produto_srv_codigo = '" . trim($this->mgt_alterar_produto_codigo->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_produto_srv_descricao = '" . trim($this->mgt_alterar_produto_descricao->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_produto_srv_valor_unitario = '" . trim($this->mgt_alterar_produto_preco->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_produto_srv_valor_total = '" . trim($this->mgt_alterar_produto_valor_total->Text) . "' ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_numero = '" . trim($this->hd_alterar_produto_numero->Value) . "' ";
         $Comando_SQL .= "and mgt_faturamento_produto_srv_numero_pedido = '" . trim($this->mgt_faturamento_numero->Text) . "' ";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Limpa os Dados dos Produtos Selecionados e Fecha a Janela ***

         $this->hd_alterar_produto_numero->Value = '';
         $this->hd_alterar_produto_codigo->Value = '';
         $this->hd_alterar_produto_descricao->Value = '';
         $this->hd_alterar_produto_qtde->Value = '';
         $this->hd_alterar_produto_preco->Value = '';
         $this->hd_alterar_produto_valor_total->Value = '';

         $this->alterar_produto->Top = 1188;
         $this->alterar_produto->Visible = false;

         //*** Totaliza o Faturamento ***

         $this->totaliza_faturamento();
      }
   }

   function bt_alterar_naoClick($sender, $params)
   {
      //*** Limpa os Dados dos Produtos Selecionados e Fecha a Janela ***

      $this->hd_alterar_produto_numero->Value = '';
      $this->hd_alterar_produto_codigo->Value = '';
      $this->hd_alterar_produto_descricao->Value = '';
      $this->hd_alterar_produto_qtde->Value = '';
      $this->hd_alterar_produto_preco->Value = '';
      $this->hd_alterar_produto_valor_total->Value = '';

      $this->alterar_produto->Top = 1188;
      $this->alterar_produto->Visible = false;
   }


   function bt_alterarClick($sender, $params)
   {
      if(trim($this->produto_remover_numero->Value) != '')
      {
         $this->mgt_alterar_produto_codigo->Text = $this->hd_alterar_produto_codigo->Value;
         $this->mgt_alterar_produto_descricao->Text = $this->hd_alterar_produto_descricao->Value;
         $this->mgt_alterar_produto_qtde->Text = $this->hd_alterar_produto_qtde->Value;
         $this->mgt_alterar_produto_preco->Text = $this->hd_alterar_produto_preco->Value;
         $this->mgt_alterar_produto_valor_total->Text = $this->hd_alterar_produto_valor_total->Value;

         $this->alterar_produto->Top = 109;
         $this->alterar_produto->Visible = true;
      }
      else
      {
         $this->MSG_Erro->Caption = "Clique em um Produto para efetuar a Alteracao.";
      }
   }

   function bt_simClick($sender, $params)
   {
      //*** Remove o Produto Selecionado ***

      $Comando_SQL = "delete from mgt_faturamentos_produtos_srv ";
      $Comando_SQL .= " where ";
      $Comando_SQL .= "mgt_faturamento_produto_srv_numero = '" . trim($this->produto_remover_numero->Value) . "' ";
      $Comando_SQL .= "and mgt_faturamento_produto_srv_numero_pedido = '" . trim($this->produto_remover_numero_faturamento->Value) . "' ";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      $this->confirmacao->Top = 1087;
      $this->confirmacao->IsVisible = false;

      //*** Totaliza o Faturamento ***

      $this->totaliza_faturamento();
   }

   function bt_naoClick($sender, $params)
   {
      $this->produto_remover_codigo->Value = '';
      $this->produto_remover_descricao->Value = '';
      $this->produto_remover_numero_faturamento->Value = '';
      $this->produto_remover_numero->Value = '';

      $this->confirmacao->Top = 1087;
      $this->confirmacao->IsVisible = false;
   }


   function bt_removerClick($sender, $params)
   {
      if(trim($this->produto_remover_numero->Value) != '')
      {
         $this->confirmacao_mensagem->Caption = "Voce deseja realmente remover o Produto: " . trim($this->produto_remover_codigo->Value) . " - " . trim($this->produto_remover_descricao->Value) . " do Faturamento?";
         $this->confirmacao->Top = 134;
         $this->confirmacao->IsVisible = true;
      }
      else
      {
         $this->MSG_Erro->Caption = "Clique em um Produto para efetuar a Remocao.";
      }
   }

   function registros_produtosJSRowChanged($sender, $params)
   {

?>
      //Adicione seu codigo javascript aqui

      //*** Seleciona o Produto Clicado ***

      //*** Para Remocao ***

      document.venservicosinc.produto_remover_numero.value = registros_produtos.getTableModel().getValue(5, registros_produtos.getFocusedRow());
      document.venservicosinc.produto_remover_numero_faturamento.value = document.venservicosinc.mgt_faturamento_numero.value;
      document.venservicosinc.produto_remover_codigo.value = registros_produtos.getTableModel().getValue(1, registros_produtos.getFocusedRow());
      document.venservicosinc.produto_remover_descricao.value = registros_produtos.getTableModel().getValue(2, registros_produtos.getFocusedRow());

      //*** Para Alteracao ***

      document.venservicosinc.hd_alterar_produto_numero.value = registros_produtos.getTableModel().getValue(5, registros_produtos.getFocusedRow());
      document.venservicosinc.hd_alterar_produto_codigo.value = registros_produtos.getTableModel().getValue(1, registros_produtos.getFocusedRow());
      document.venservicosinc.hd_alterar_produto_descricao.value = registros_produtos.getTableModel().getValue(2, registros_produtos.getFocusedRow());
      document.venservicosinc.hd_alterar_produto_qtde.value = registros_produtos.getTableModel().getValue(0, registros_produtos.getFocusedRow());
      document.venservicosinc.hd_alterar_produto_preco.value = registros_produtos.getTableModel().getValue(3, registros_produtos.getFocusedRow());
      document.venservicosinc.hd_alterar_produto_valor_total.value = registros_produtos.getTableModel().getValue(4, registros_produtos.getFocusedRow());

<?php

   }


   function mgt_faturamento_dataJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_tipo_faturamento.focus();
     return false;
   }

<?php

   }

   function registros_produtos_buscaJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.venservicosinc.mgt_produto_descricao.value   = registros_produtos_busca.getTableModel().getValue(1, registros_produtos_busca.getFocusedRow());
      document.venservicosinc.mgt_produto_preco.value       = registros_produtos_busca.getTableModel().getValue(2, registros_produtos_busca.getFocusedRow());
      document.venservicosinc.mgt_produto_codigo.value      = registros_produtos_busca.getTableModel().getValue(0, registros_produtos_busca.getFocusedRow());
      document.venservicosinc.mgt_produto_qtde.value        = '0';

<?php

   }

   function bt_fechar_produtoClick($sender, $params)
   {
      $this->adiciona_produtos->Visible = false;

      $this->adiciona_clientes->Top = 792;
      $this->dados_faturamento->Top = (($this->dados_faturamento->Top) - ($this->adiciona_produtos->Height) - 5);
      $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) - ($this->adiciona_produtos->Height) - 5);

      $this->adiciona_produtos->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Servicos->Close();
   }

   function bt_fechar_clienteClick($sender, $params)
   {
      $this->adiciona_clientes->Visible = false;

      $this->adiciona_clientes->Top = 504;
      $this->dados_faturamento->Top = (($this->dados_faturamento->Top) - ($this->adiciona_clientes->Height) - 5);
      $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) - ($this->adiciona_clientes->Height) - 5);

      $this->adiciona_clientes->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
   }

   function bt_adicionar_produtoClick($sender, $params)
   {
      if((trim($this->mgt_produto_codigo->Text) <> '')and(trim($this->mgt_produto_qtde->Text) <> '')and(trim($this->mgt_produto_qtde->Text) > 0))
      {
         //*** Seleciona o Produto ***

         $Comando_SQL = "select * from mgt_servicos where mgt_servico_codigo = '" . trim($this->mgt_produto_codigo->Text) . "'";

         GetConexaoPrincipal()->SQL_MGT_Servicos->Close();
         GetConexaoPrincipal()->SQL_MGT_Servicos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Servicos->Open();

         //*** Insere o Produto do Faturamento ***

         $Comando_SQL = "insert into mgt_faturamentos_produtos_srv(";
         $Comando_SQL .= "mgt_faturamento_produto_srv_numero_pedido, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_quantidade, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_codigo, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_descricao, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_valor_unitario, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_valor_total) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . trim($this->mgt_faturamento_numero->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_qtde->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_codigo->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_descricao->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_preco->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_valor_total->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Limpa os Campos de Adicao de Faturamento ***

         $this->mgt_produto_descricao->Text = '';
         $this->mgt_produto_preco->Text = '';
         $this->mgt_produto_codigo->Text = '';
         $this->mgt_produto_qtde->Text = '';
         $this->mgt_produto_valor_total->Text = '';

         //*** Totaliza o Faturamento ***

         $this->totaliza_faturamento();

         //*** Fecha a Tela para Adicionar os Produtos ***

         $this->adiciona_produtos->Visible = false;

         $this->adiciona_clientes->Top = 792;
         $this->dados_faturamento->Top = (($this->dados_faturamento->Top) - ($this->adiciona_produtos->Height) - 5);
         $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) - ($this->adiciona_produtos->Height) - 5);

         $this->adiciona_produtos->Visible = false;

         GetConexaoPrincipal()->SQL_MGT_Servicos->Close();
      }
   }

   function mgt_produto_precoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.bt_adicionar_produto.focus();
     return false;
   }

<?php

   }

   function mgt_produto_qtdeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_produto_preco.focus();
     return false;
   }

<?php

   }

   function mgt_produto_descricaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_produto_qtde.focus();
     return false;
   }

<?php

   }

   function mgt_produto_precoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.venservicosinc.mgt_produto_preco;
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

   //*** Totaliza o Produto ***

   document.venservicosinc.mgt_produto_valor_total.value = (document.venservicosinc.mgt_produto_qtde.value * document.venservicosinc.mgt_produto_preco.value).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_produto_qtdeJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.venservicosinc.mgt_produto_qtde;
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

   //*** Totaliza o Produto ***

   document.venservicosinc.mgt_produto_valor_total.value = (document.venservicosinc.mgt_produto_qtde.value * document.venservicosinc.mgt_produto_preco.value).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function opcao_busca_produtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.bt_busca_produto.focus();
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
     document.venservicosinc.opcao_busca_produto.focus();
     return false;
   }

<?php

   }


   function bt_busca_produtoClick($sender, $params)
   {
      if(trim($this->dados_busca_produto->Text) == "")
      {
         $Comando_SQL = "select * from mgt_servicos order by mgt_servico_codigo";
      }
      else
      {
         if(trim($this->opcao_busca_produto->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_servicos where mgt_servico_codigo like '%" . trim($this->dados_busca_produto->Text) . "%' order by mgt_servico_codigo";
         }
         elseif(trim($this->opcao_busca_produto->ItemIndex) == "Descricao")
         {
            $Comando_SQL = "select * from mgt_servicos where mgt_servico_descricao like '%" . trim($this->dados_busca_produto->Text) . "%' order by mgt_servico_descricao";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Servicos->Close();
      GetConexaoPrincipal()->SQL_MGT_Servicos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Servicos->Open();
   }

   function bt_adicionarClick($sender, $params)
   {
      if(trim($this->mgt_faturamento_cliente_numero->Text) <> '')
      {
         if($this->adiciona_produtos->Visible == false)
         {
            $this->MSG_Erro->Caption = '';

            $this->adiciona_produtos->Top = 39;
            $this->dados_faturamento->Top = (($this->dados_faturamento->Top) + ($this->adiciona_produtos->Height) + 5);
            $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) + ($this->adiciona_produtos->Height) + 5);

            $this->mgt_produto_codigo->Text = '';
            $this->mgt_produto_descricao->Text = '';
            $this->mgt_produto_qtde->Text = '';
            $this->mgt_produto_preco->Text = '';
            $this->mgt_produto_valor_total->Text = '';

            $this->adiciona_produtos->Visible = true;
         }
      }
      else
      {
         $this->MSG_Erro->Caption = 'Escolha primeiro um Cliente...';
      }
   }


   function bt_adiciona_clienteClick($sender, $params)
   {
      if(trim($this->adiciona_cliente_numero->Text) <> '')
      {
         if(trim($this->adiciona_cliente_bloqueado->Text) <> 'N')
         {
            $this->MSG_Erro->Caption = 'O faturamento nao pode ser efetuado, pois o credito esta bloqueado';
         }
         else
         {
            $this->mgt_faturamento_cliente_numero->Text = $this->adiciona_cliente_numero->Text;
            $this->mgt_faturamento_cliente_codigo->Text = $this->adiciona_cliente_codigo->Text;
            $this->mgt_faturamento_cliente_nome->Text = $this->adiciona_cliente_nome->Text;

            $this->mgt_faturamento_cliente_desconto->Text = $this->hd_faturamento_cliente_desconto->Value;
            $this->mgt_faturamento_cliente_condicao_pgto_1->Text = $this->hd_faturamento_cliente_condicao_pgto_1->Value;
            $this->mgt_faturamento_cliente_condicao_pgto_2->Text = $this->hd_faturamento_cliente_condicao_pgto_2->Value;
            $this->mgt_faturamento_cliente_condicao_pgto_3->Text = $this->hd_faturamento_cliente_condicao_pgto_3->Value;
            $this->mgt_faturamento_cliente_condicao_pgto_4->Text = $this->hd_faturamento_cliente_condicao_pgto_4->Value;
            $this->mgt_faturamento_cliente_transportadora->ItemIndex = $this->hd_faturamento_cliente_transportadora->Value;
            $this->mgt_faturamento_cliente_observacao->Text = $this->hd_faturamento_cliente_observacao->Value;

            $this->MSG_Erro->Caption = '';

            $this->hd_tipo_adicao->Value = "";
         }
      }

      $this->adiciona_clientes->Visible = false;

      $this->adiciona_clientes->Top = 504;
      $this->dados_faturamento->Top = (($this->dados_faturamento->Top) - ($this->adiciona_clientes->Height) - 5);
      $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) - ($this->adiciona_clientes->Height) - 5);

      $this->adiciona_clientes->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.venservicosinc.adiciona_cliente_numero.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
      document.venservicosinc.adiciona_cliente_codigo.value = registros.getTableModel().getValue(2, registros.getFocusedRow());
      document.venservicosinc.adiciona_cliente_nome.value = registros.getTableModel().getValue(3, registros.getFocusedRow());
      document.venservicosinc.adiciona_cliente_bloqueado.value = registros.getTableModel().getValue(12, registros.getFocusedRow());

      if(registros.getTableModel().getValue(12, registros.getFocusedRow()) == 'S')
      {
        document.venservicosinc.MSG_Alerta.value = '(Credito Bloqueado)';
      }
      else
      {
        document.venservicosinc.MSG_Alerta.value = '';
      }

      document.venservicosinc.hd_faturamento_cliente_desconto.value = registros.getTableModel().getValue(5, registros.getFocusedRow());
      document.venservicosinc.hd_faturamento_cliente_condicao_pgto_1.value = registros.getTableModel().getValue(6, registros.getFocusedRow());
      document.venservicosinc.hd_faturamento_cliente_condicao_pgto_2.value = registros.getTableModel().getValue(7, registros.getFocusedRow());
      document.venservicosinc.hd_faturamento_cliente_condicao_pgto_3.value = registros.getTableModel().getValue(8, registros.getFocusedRow());
      document.venservicosinc.hd_faturamento_cliente_condicao_pgto_4.value = registros.getTableModel().getValue(9, registros.getFocusedRow());
      document.venservicosinc.hd_faturamento_cliente_transportadora.value = registros.getTableModel().getValue(10, registros.getFocusedRow());
      document.venservicosinc.hd_faturamento_cliente_observacao.value = registros.getTableModel().getValue(11, registros.getFocusedRow());
<?php
   }

   function opcao_buscaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.bt_buscar.focus();
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
     document.venservicosinc.opcao_busca.focus();
     return false;
   }

<?php

   }



   function bt_buscarClick($sender, $params)
   {
      if(trim($this->dados_busca->Text) == "")
      {
         $Comando_SQL = "select * from mgt_clientes order by mgt_cliente_numero";
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_numero = '" . trim($this->dados_busca->Text) . "' order by mgt_cliente_numero";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Tipo")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_codigo_tipo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_codigo_tipo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_codigo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_codigo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Nome")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_nome like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_nome";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Razao Social")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_razao_social like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_razao_social";
         }

      }

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
      GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Clientes->Open();
   }

   function bt_procurarClick($sender, $params)
   {
      if($this->adiciona_clientes->Visible == false)
      {
         $this->adiciona_clientes->Top = 39;
         $this->dados_faturamento->Top = (($this->dados_faturamento->Top) + ($this->adiciona_clientes->Height) + 5);
         $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) + ($this->adiciona_clientes->Height) + 5);

         $this->adiciona_cliente_numero->Text = "";
         $this->adiciona_cliente_codigo->Text = "";
         $this->adiciona_cliente_nome->Text = "";

         $this->adiciona_clientes->Visible = true;
      }
   }

   function mgt_faturamento_data_entregaJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero e Barras ***

   var campo = document.venservicosinc.mgt_faturamento_srv_data_entrega
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Barras ***

<?php

   }

   function mgt_faturamento_cliente_descontoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.venservicosinc.mgt_faturamento_srv_cliente_desconto;
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

      //*** Totaliza o Faturamento ***
      if(document.venservicosinc.mgt_faturamento_srv_cliente_desconto.value == '')
      {
         document.venservicosinc.mgt_faturamento_srv_cliente_desconto.value = 0;
      }
      document.venservicosinc.mgt_faturamento_srv_valor_desconto.value = ((parseFloat(document.venservicosinc.mgt_faturamento_srv_valor_pedido.value) * parseFloat(document.venservicosinc.mgt_faturamento_srv_cliente_desconto.value)) / 100).toFixed(2);
      document.venservicosinc.mgt_faturamento_srv_valor_total.value = (parseFloat(document.venservicosinc.mgt_faturamento_srv_valor_pedido.value) - parseFloat(document.venservicosinc.mgt_faturamento_srv_valor_desconto.value) + parseFloat(document.venservicosinc.mgt_faturamento_srv_valor_frete.value) + parseFloat(document.venservicosinc.mgt_faturamento_srv_valor_ipi.value)).toFixed(2);

<?php

   }

   function mgt_faturamento_valor_freteJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.venservicosinc.mgt_faturamento_srv_valor_frete;
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

      //*** Totaliza o Faturamento ***
      if(document.venservicosinc.mgt_faturamento_srv_cliente_desconto.value == '')
      {
         document.venservicosinc.mgt_faturamento_srv_cliente_desconto.value = 0;
      }
      document.venservicosinc.mgt_faturamento_srv_valor_desconto.value = ((parseFloat(document.venservicosinc.mgt_faturamento_srv_valor_pedido.value) * parseFloat(document.venservicosinc.mgt_faturamento_srv_cliente_desconto.value)) / 100).toFixed(2);
      document.venservicosinc.mgt_faturamento_srv_valor_total.value = (parseFloat(document.venservicosinc.mgt_faturamento_srv_valor_pedido.value) - parseFloat(document.venservicosinc.mgt_faturamento_srv_valor_desconto.value) + parseFloat(document.venservicosinc.mgt_faturamento_srv_valor_frete.value) + parseFloat(document.venservicosinc.mgt_faturamento_srv_valor_ipi.value)).toFixed(2);

<?php

   }

   function mgt_faturamento_cliente_condicao_pgto_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_12
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

   function mgt_faturamento_cliente_condicao_pgto_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_11
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

   function mgt_faturamento_cliente_condicao_pgto_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_10
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

   function mgt_faturamento_cliente_condicao_pgto_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_9
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

   function mgt_faturamento_cliente_condicao_pgto_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_8
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

   function mgt_faturamento_cliente_condicao_pgto_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_7
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

   function mgt_faturamento_cliente_condicao_pgto_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_6
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

   function mgt_faturamento_cliente_condicao_pgto_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_5
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

   function mgt_faturamento_cliente_condicao_pgto_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_4
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

   function mgt_faturamento_cliente_condicao_pgto_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_3
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

   function mgt_faturamento_cliente_condicao_pgto_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_2
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

   function mgt_faturamento_cliente_condicao_pgto_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_1
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


   function mgt_faturamento_cliente_condicao_pgto_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_valor_frete.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_condicao_pgto_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_12.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_condicao_pgto_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_11.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_condicao_pgto_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_10.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_condicao_pgto_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_9.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_condicao_pgto_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_8.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_condicao_pgto_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_7.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_condicao_pgto_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_6.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_condicao_pgto_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_5.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_condicao_pgto_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_4.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_condicao_pgto_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_3.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_condicao_pgto_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_condicao_pgto_2.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_valor_freteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.bt_incluir.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_observacaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_valor_frete.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_ordem_compraJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_observacao.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_transportadoraJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_ordem_compra.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_tipo_faturamentoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_transportadora.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_data_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_tipo_faturamento.focus();
     return false;
   }

<?php

   }

   function mgt_faturamento_cliente_descontoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venservicosinc.mgt_faturamento_srv_cliente_tipo_faturamento.focus();
     return false;
   }

<?php

   }

   function venservicosincCreate($sender, $params)
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
        if( isset($this->bt_adicionar) )
        {
           $this->bt_adicionar->Visible = false;
        }
        if( isset($this->bt_alterar) )
        {
           $this->bt_alterar->Visible = false;
        }
        if( isset($this->bt_remover) )
        {
           $this->bt_remover->Visible = false;
        }
      }
      elseif($tag_permissao == "0")
      {
 	     redirect('frame_corpo.php');
	  }

      //************************************
      //*** FINAL - Validacao de Leitura ***
      //************************************

      //*** Fecha a Adicao de Produto ***

      $this->mgt_produto_codigo->Text = '';
      $this->mgt_produto_descricao->Text = '';
      $this->mgt_produto_qtde->Text = '';
      $this->mgt_produto_preco->Text = '';
      $this->mgt_produto_valor_total->Text = '';

      //*** Fecha a Adicao de Clientes ***

      $this->adiciona_cliente_numero->Text = '';
      $this->adiciona_cliente_codigo->Text = '';
      $this->adiciona_cliente_nome->Text = '';

      //*** Limpa os Demais Campos do Faturamento ***

      $this->mgt_faturamento_numero->Text = '';
      $this->mgt_faturamento_cliente_numero->Text = '';
      $this->mgt_faturamento_cliente_codigo->Text = '';
      $this->mgt_faturamento_cliente_nome->Text = '';

      $this->mgt_faturamento_cliente_desconto->Text = '0';
      $this->mgt_faturamento_data->Text = '';
      $this->mgt_faturamento_data_entrega->Text = '';
      $this->mgt_faturamento_cliente_condicao_pgto_1->Text = '0';
      $this->mgt_faturamento_cliente_condicao_pgto_2->Text = '0';
      $this->mgt_faturamento_cliente_condicao_pgto_3->Text = '0';
      $this->mgt_faturamento_cliente_condicao_pgto_4->Text = '0';
      $this->mgt_faturamento_cliente_condicao_pgto_5->Text = '0';
      $this->mgt_faturamento_cliente_condicao_pgto_6->Text = '0';
      $this->mgt_faturamento_cliente_condicao_pgto_7->Text = '0';
      $this->mgt_faturamento_cliente_condicao_pgto_8->Text = '0';
      $this->mgt_faturamento_cliente_condicao_pgto_9->Text = '0';
      $this->mgt_faturamento_cliente_condicao_pgto_10->Text = '0';
      $this->mgt_faturamento_cliente_condicao_pgto_11->Text = '0';
      $this->mgt_faturamento_cliente_condicao_pgto_12->Text = '0';
      $this->mgt_faturamento_cliente_observacao->Text = '';
      $this->mgt_faturamento_ordem_compra->Text = '';

      $this->mgt_faturamento_valor_pedido->Text = '0.00';
      $this->mgt_faturamento_valor_desconto->Text = '0.00';
      $this->mgt_faturamento_valor_frete->Text = '0.00';
      $this->mgt_faturamento_valor_ipi->Text = '0.00';
      $this->mgt_faturamento_valor_total->Text = '0.00';

      //*** Limpa os Campos Hidden ***

      $this->hd_alterar_produto_numero->Value = '';
      $this->hd_alterar_produto_codigo->Value = '';
      $this->hd_alterar_produto_descricao->Value = '';
      $this->hd_alterar_produto_qtde->Value = '';
      $this->hd_alterar_produto_preco->Value = '';
      $this->hd_alterar_produto_valor_total->Value = '';

      $this->produto_remover_numero->Value = '';
      $this->produto_remover_numero_faturamento->Value = '';
      $this->produto_remover_codigo->Value = '';
      $this->produto_remover_descricao->Value = '';

      $this->hd_faturamento_cliente_desconto->Value = '';
      $this->hd_faturamento_cliente_transportadora->Value = '';
      $this->hd_faturamento_cliente_observacao->Value = '';
      $this->hd_faturamento_cliente_condicao_pgto_1->Value = '';
      $this->hd_faturamento_cliente_condicao_pgto_2->Value = '';
      $this->hd_faturamento_cliente_condicao_pgto_3->Value = '';
      $this->hd_faturamento_cliente_condicao_pgto_4->Value = '';

      //*** Efetua o Carregamento Restante ***

      $mgt_faturamento_numero = $_REQUEST['mgt_faturamento_numero'];
      $this->mgt_faturamento_numero->Text = $mgt_faturamento_numero;

      $this->MSG_Erro->Caption = "";

      //*** Carrega as Transportadoras ***

      $this->mgt_faturamento_cliente_transportadora->Clear();

      $Comando_SQL = "select * from mgt_transportadoras order by mgt_transportadora_nome";

      GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
      GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) != 1)
         {
            $this->mgt_faturamento_cliente_transportadora->AddItem(GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_nome'], null , GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_numero']);
            GetConexaoPrincipal()->SQL_MGT_Transportadoras->Next();
         }
      }

      $this->mgt_faturamento_cliente_transportadora->ItemIndex = 0;

      //*** Carrega os Produtos do Faturamento ***

      $Comando_SQL = "select * from mgt_faturamentos_produtos_srv where mgt_faturamento_produto_srv_numero_pedido = " . trim($this->mgt_faturamento_numero->Text) . " order by mgt_faturamento_produto_srv_numero";

      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Close();
      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Open();

      //*** Carrega a Data do Dia ***

      $this->mgt_faturamento_data->Text = date("d/m/Y", time());
   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Close();
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Open();

         redirect('ven_servicos.php');
   }

   function bt_incluirClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_faturamento_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Numero do Faturamento.";
      }
      elseif(trim($this->mgt_faturamento_cliente_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, escolha um Cliente para este Faturamento.";
      }
      else
      {
         //*** Insere a Cabeca do Faturamento ***

         $Comando_SQL = "update mgt_faturamentos_srv set ";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_tipo = '" . trim($this->hd_tipo_adicao->Value) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_numero = '" . trim($this->mgt_faturamento_cliente_numero->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_codigo = '" . trim($this->mgt_faturamento_cliente_codigo->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_nome = '" . trim($this->mgt_faturamento_cliente_nome->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_desconto = '" . trim($this->mgt_faturamento_cliente_desconto->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_data = '" . inverte_data_dma_to_amd(trim($this->mgt_faturamento_data->Text)) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_data_entrega = '" . inverte_data_dma_to_amd(trim($this->mgt_faturamento_data_entrega->Text)) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_tipo_faturamento = '" . trim($this->mgt_faturamento_cliente_tipo_faturamento->ItemIndex) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_transportadora = '" . trim($this->mgt_faturamento_cliente_transportadora->ItemIndex) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_ordem_compra = '" . trim($this->mgt_faturamento_ordem_compra->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_observacao = '" . trim($this->mgt_faturamento_cliente_observacao->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_valor_desconto = '" . trim($this->mgt_faturamento_valor_desconto->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_valor_pedido = '" . trim($this->mgt_faturamento_valor_pedido->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_valor_frete = '" . trim($this->mgt_faturamento_valor_frete->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_valor_ipi = '" . trim($this->mgt_faturamento_valor_ipi->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_valor_total = '" . trim($this->mgt_faturamento_valor_total->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_condicao_pgto_1 = '" . trim($this->mgt_faturamento_cliente_condicao_pgto_1->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_condicao_pgto_2 = '" . trim($this->mgt_faturamento_cliente_condicao_pgto_2->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_condicao_pgto_3 = '" . trim($this->mgt_faturamento_cliente_condicao_pgto_3->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_condicao_pgto_4 = '" . trim($this->mgt_faturamento_cliente_condicao_pgto_4->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_condicao_pgto_5 = '" . trim($this->mgt_faturamento_cliente_condicao_pgto_5->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_condicao_pgto_6 = '" . trim($this->mgt_faturamento_cliente_condicao_pgto_6->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_condicao_pgto_7 = '" . trim($this->mgt_faturamento_cliente_condicao_pgto_7->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_condicao_pgto_8 = '" . trim($this->mgt_faturamento_cliente_condicao_pgto_8->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_condicao_pgto_9 = '" . trim($this->mgt_faturamento_cliente_condicao_pgto_9->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_condicao_pgto_10 = '" . trim($this->mgt_faturamento_cliente_condicao_pgto_10->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_condicao_pgto_11 = '" . trim($this->mgt_faturamento_cliente_condicao_pgto_11->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_cliente_condicao_pgto_12 = '" . trim($this->mgt_faturamento_cliente_condicao_pgto_12->Text) . "',";
         $Comando_SQL .= "mgt_faturamento_srv_status = 'Aguardando' ";
         $Comando_SQL .= "where mgt_faturamento_srv_numero = '" . trim($this->mgt_faturamento_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Atualiza o Grid de Faturamento ***
         /*
         $Comando_SQL = "select *,date_format(mgt_faturamento_srv_data, '%d/%m/%Y') AS mgt_faturamento_srv_data,date_format(mgt_faturamento_srv_data_entrega, '%d/%m/%Y') AS mgt_faturamento_srv_data_entrega, IF(mgt_faturamento_srv_status = 'Preparando','#','') AS mgt_faturamento_srv_status_1, IF(mgt_faturamento_srv_status = 'Faturado','#','') AS mgt_faturamento_srv_status_2, IF(mgt_faturamento_srv_status = 'Aguardando','#','') AS mgt_faturamento_srv_status_3 from mgt_faturamentos_srv where mgt_faturamento_srv_status <> 'Faturado'";

         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Close();
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Open();
         */
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Close();
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Open();

         redirect('ven_servicos.php');
      }

   }

   function venservicosincJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $venservicosinc;

//Creates the form
$venservicosinc = new venservicosinc($application);

//Read from resource file
$venservicosinc->loadResource(__FILE__);

//Shows the form
$venservicosinc->show();

?>