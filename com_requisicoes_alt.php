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
class comrequisicoesalt extends Page
{
   public $mgt_operacao_cadastro_motivo = null;
   public $Label31 = null;
   public $Label30 = null;
   public $bt_ordem = null;
   public $mgt_pedido_ordem = null;
   public $bt_gerar_sim = null;
   public $bt_gerar_nao = null;
   public $confirma_geracao = null;
   public $Label29 = null;
   public $confirma_exclusao = null;
   public $bt_sim_exclusao = null;
   public $bt_nao_exclusao = null;
   public $bt_imprimir = null;
   public $bt_excluir = null;
   public $bt_alterar_pedido = null;
   public $mgt_pedido_vendedor = null;
   public $hd_tipo_adicao = null;
   public $hd_faturamento_cliente_condicao_pgto_4 = null;
   public $hd_faturamento_cliente_condicao_pgto_3 = null;
   public $hd_faturamento_cliente_condicao_pgto_2 = null;
   public $hd_faturamento_cliente_condicao_pgto_1 = null;
   public $hd_faturamento_cliente_observacao = null;
   public $hd_faturamento_cliente_transportadora = null;
   public $hd_faturamento_cliente_desconto = null;
   public $adiciona_fornecedor = null;
   public $Edit6 = null;
   public $bt_fechar_fornecedor = null;
   public $Panel17 = null;
   public $Panel16 = null;
   public $Panel15 = null;
   public $Panel14 = null;
   public $bt_adiciona_fornecedor = null;
   public $adiciona_fornecedor_nome = null;
   public $Label71 = null;
   public $adiciona_fornecedor_codigo = null;
   public $Label70 = null;
   public $adiciona_fornecedor_numero = null;
   public $Label69 = null;
   public $registros_fornecedores = null;
   public $Label68 = null;
   public $GroupBox3 = null;
   public $bt_buscar_fornecedor = null;
   public $opcao_busca_fornecedor = null;
   public $dados_busca_fornecedor = null;
   public $Label66 = null;
   public $Label28 = null;
   public $mgt_pedido_funcionario = null;
   public $mgt_pedido_orcamento = null;
   public $mgt_pedido_status = null;
   public $Label65 = null;
   public $Label63 = null;
   public $Panel13 = null;
   public $Label62 = null;
   public $Panel12 = null;
   public $alterar_produto = null;
   public $mgt_alterar_produto_valor_ipi = null;
   public $Label61 = null;
   public $mgt_alterar_produto_ipi = null;
   public $Label60 = null;
   public $mgt_alterar_produto_unidade = null;
   public $Label59 = null;
   public $mgt_alterar_produto_lote = null;
   public $Label58 = null;
   public $mgt_alterar_produto_valor_total = null;
   public $Label57 = null;
   public $mgt_alterar_produto_preco = null;
   public $Label56 = null;
   public $mgt_alterar_produto_qtde = null;
   public $Label55 = null;
   public $mgt_alterar_produto_descricao = null;
   public $Label54 = null;
   public $mgt_alterar_produto_referencia = null;
   public $Label53 = null;
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
   public $hd_pedido_cliente_condicao_pgto_4 = null;
   public $hd_pedido_cliente_condicao_pgto_3 = null;
   public $hd_pedido_cliente_condicao_pgto_2 = null;
   public $hd_pedido_cliente_condicao_pgto_1 = null;
   public $hd_pedido_cliente_observacao = null;
   public $hd_pedido_cliente_transportadora = null;
   public $hd_pedido_cliente_desconto = null;
   public $produto_remover_descricao = null;
   public $produto_remover_codigo = null;
   public $produto_remover_numero_pedido = null;
   public $produto_remover_numero = null;
   public $hd_alterar_produto_valor_ipi = null;
   public $hd_alterar_produto_ipi = null;
   public $hd_alterar_produto_unidade = null;
   public $hd_alterar_produto_lote = null;
   public $hd_alterar_produto_valor_total = null;
   public $hd_alterar_produto_preco = null;
   public $hd_alterar_produto_qtde = null;
   public $hd_alterar_produto_descricao = null;
   public $hd_alterar_produto_referencia = null;
   public $hd_alterar_produto_codigo = null;
   public $hd_alterar_produto_numero = null;
   public $confirmacao = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $confirmacao_mensagem = null;
   public $bt_alterar = null;
   public $bt_fechar_produto = null;
   public $mgt_pedido_data_entrega = null;
   public $mgt_produto_ipi = null;
   public $mgt_produto_valor_ipi = null;
   public $mgt_produto_unidade = null;
   public $mgt_produto_lote = null;
   public $mgt_produto_valor_total = null;
   public $mgt_produto_preco = null;
   public $mgt_produto_qtde = null;
   public $mgt_produto_descricao = null;
   public $mgt_produto_referencia = null;
   public $mgt_produto_codigo = null;
   public $Label49 = null;
   public $Label47 = null;
   public $Label45 = null;
   public $Label44 = null;
   public $bt_adicionar_produto = null;
   public $Panel4 = null;
   public $Panel3 = null;
   public $Panel2 = null;
   public $Label43 = null;
   public $Label42 = null;
   public $Label41 = null;
   public $Label40 = null;
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
   public $opcoes_pedido = null;
   public $dados_pedido = null;
   public $bt_remover = null;
   public $bt_adicionar = null;
   public $bt_procurar = null;
   public $mgt_pedido_cliente_condicao_pgto_12 = null;
   public $mgt_pedido_cliente_condicao_pgto_11 = null;
   public $mgt_pedido_cliente_condicao_pgto_10 = null;
   public $mgt_pedido_cliente_condicao_pgto_9 = null;
   public $mgt_pedido_cliente_condicao_pgto_8 = null;
   public $mgt_pedido_cliente_condicao_pgto_7 = null;
   public $mgt_pedido_cliente_condicao_pgto_6 = null;
   public $mgt_pedido_cliente_condicao_pgto_5 = null;
   public $mgt_pedido_cliente_condicao_pgto_4 = null;
   public $mgt_pedido_cliente_condicao_pgto_3 = null;
   public $mgt_pedido_cliente_condicao_pgto_2 = null;
   public $mgt_pedido_cliente_condicao_pgto_1 = null;
   public $mgt_pedido_valor_pedido = null;
   public $mgt_pedido_valor_ipi = null;
   public $mgt_pedido_valor_total = null;
   public $mgt_pedido_valor_desconto = null;
   public $mgt_pedido_valor_frete = null;
   public $mgt_pedido_cliente_observacao = null;
   public $mgt_pedido_data = null;
   public $mgt_pedido_cliente_desconto = null;
   public $dados_pedidos = null;
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
   public $mgt_pedido_cliente_nome = null;
   public $mgt_pedido_cliente_codigo = null;
   public $mgt_pedido_cliente_numero = null;
   public $Label4 = null;
   public $Label3 = null;
   public $mgt_pedido_numero = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $Label1 = null;
   public $bt_fechar = null;
   public $area_sistema = null;

   function bt_imprimirClick($sender, $params)
   {
      if(trim($this->mgt_pedido_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "O Numero da Requisicao deve ser informado.";
      }
      else
      {
         $Comando_SQL = "select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data,date_format(mgt_requisicao_data_entrega, '%d/%m/%Y') AS mgt_requisicao_data_entrega, IF(mgt_requisicao_status = 'Preparando','#','') AS mgt_requisicao_status_1, IF(mgt_requisicao_status = 'Faturado','#','') AS mgt_requisicao_status_2, IF(mgt_requisicao_status = 'Semi-Faturado','#','') AS mgt_requisicao_status_3, IF(mgt_requisicao_status = 'Aguardando','#','') AS mgt_requisicao_status_4, IF(mgt_requisicao_status = 'Producao','#','') AS mgt_requisicao_status_5 from mgt_requisicoes where mgt_requisicao_numero = '" . trim($this->mgt_pedido_numero->Text) . "' and mgt_requisicao_status <> 'Faturado' order by mgt_requisicao_numero";

         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Requisicoes->EOF) == 1)
         {
            $this->MSG_Erro->Caption = "A Requisicao Nao foi encontrada.";
         }
         else
         {
            $Comando_SQL = "select * from mgt_requisicoes_produtos where mgt_requisicao_produto_numero_requisicao = " . trim($this->mgt_pedido_numero->Text) . " order by mgt_requisicao_produto_numero";

            GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Close();
            GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Open();
?>
            <!-- Abre a Tela de Inclusao -->
            <script language="JavaScript">
               <?php
               echo "window.open('com_requisicoes_imp.php?mgt_pedido_numero=" . trim($this->mgt_pedido_numero->Text) ."','com_requisicoes_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
               ?>
            </script>
<?php
         }
      }


   }


   function bt_ordemClick($sender, $params)
   {
      $this->confirma_geracao->Top = 242;
      $this->confirma_geracao->IsVisible = true;
   }


   function bt_gerar_simClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      //*** Insere a Cabeca da Requisicao ***

      $Comando_SQL = "insert into mgt_cotacoes(";
      $Comando_SQL .= "mgt_cotacao_cliente_numero, ";
      $Comando_SQL .= "mgt_cotacao_cliente_codigo, ";
      $Comando_SQL .= "mgt_cotacao_cliente_nome, ";
      $Comando_SQL .= "mgt_cotacao_cliente_desconto, ";
      $Comando_SQL .= "mgt_cotacao_data, ";
      $Comando_SQL .= "mgt_cotacao_data_entrega, ";
      $Comando_SQL .= "mgt_cotacao_orcamento, ";
      $Comando_SQL .= "mgt_cotacao_observacao, ";
      $Comando_SQL .= "mgt_cotacao_valor_desconto, ";
      $Comando_SQL .= "mgt_cotacao_valor_cotacao, ";
      $Comando_SQL .= "mgt_cotacao_valor_frete, ";
      $Comando_SQL .= "mgt_cotacao_valor_ipi, ";
      $Comando_SQL .= "mgt_cotacao_valor_total, ";
      $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_1, ";
      $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_2, ";
      $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_3, ";
      $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_4, ";
      $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_5, ";
      $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_6, ";
      $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_7, ";
      $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_8, ";
      $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_9, ";
      $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_10, ";
      $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_11, ";
      $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_12, ";
      $Comando_SQL .= "mgt_cotacao_status, ";
      $Comando_SQL .= "mgt_cotacao_funcionario, ";
      $Comando_SQL .= "mgt_cotacao_vendedor) ";
      $Comando_SQL .= "values(";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_numero->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_codigo->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_nome->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_desconto->Text) . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data->Text)) . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data_entrega->Text)) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_orcamento->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_observacao->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_valor_desconto->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_valor_pedido->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_valor_frete->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_valor_ipi->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_valor_total->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_condicao_pgto_1->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_condicao_pgto_2->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_condicao_pgto_3->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_condicao_pgto_4->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_condicao_pgto_5->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_condicao_pgto_6->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_condicao_pgto_7->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_condicao_pgto_8->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_condicao_pgto_9->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_condicao_pgto_10->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_condicao_pgto_11->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_cliente_condicao_pgto_12->Text) . "', ";
      $Comando_SQL .= "'Aguardando', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_funcionario->Text) . "', ";
      $Comando_SQL .= "'" . trim($this->mgt_pedido_vendedor->Text) . "') ";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Seleciona o numero da Ordem Incluida

      $Comando_SQL = "select * from mgt_cotacoes order by mgt_cotacao_numero desc";

      GetConexaoPrincipal()->SQL_MGT_Cotacoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Cotacoes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Cotacoes->Open();

      $nro_cotacao = GetConexaoPrincipal()->SQL_MGT_Cotacoes->Fields['mgt_cotacao_numero'];

      //*** Incluir os produtos na Ordem

      $Comando_SQL = "select * from mgt_requisicoes_produtos where mgt_requisicao_produto_numero_requisicao = '" . trim($this->mgt_pedido_numero->Text) . "'";

      GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->EOF) != 1)
         {
            $Comando_SQL = "insert into mgt_cotacoes_produtos(";
            $Comando_SQL .= "mgt_cotacao_produto_numero_cotacao, ";
            $Comando_SQL .= "mgt_cotacao_produto_quantidade, ";
            $Comando_SQL .= "mgt_cotacao_produto_codigo, ";
            $Comando_SQL .= "mgt_cotacao_produto_descricao, ";
            $Comando_SQL .= "mgt_cotacao_produto_valor_unitario, ";
            $Comando_SQL .= "mgt_cotacao_produto_valor_total, ";
            $Comando_SQL .= "mgt_cotacao_produto_valor_ipi, ";
            $Comando_SQL .= "mgt_cotacao_produto_lote, ";
            $Comando_SQL .= "mgt_cotacao_produto_referencia, ";
            $Comando_SQL .= "mgt_cotacao_produto_posicao, ";
            $Comando_SQL .= "mgt_cotacao_produto_descricao_detalhada, ";
            $Comando_SQL .= "mgt_cotacao_produto_unidade, ";
            $Comando_SQL .= "mgt_cotacao_produto_ipi) ";
            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . $nro_cotacao . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Fields['mgt_requisicao_produto_quantidade'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Fields['mgt_requisicao_produto_codigo'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Fields['mgt_requisicao_produto_descricao'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Fields['mgt_requisicao_produto_valor_unitario'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Fields['mgt_requisicao_produto_valor_total'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Fields['mgt_requisicao_produto_valor_ipi'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Fields['mgt_requisicao_produto_lote'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Fields['mgt_requisicao_produto_referencia'] . "',";
            $Comando_SQL .= "'" . "0" . "',";
            $Comando_SQL .= "'" . " " . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Fields['mgt_requisicao_produto_unidade'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Fields['mgt_requisicao_produto_ipi'] . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Next();
         }
      }

      //*** Atualiza a Cotacao com o numero da Ordem Gerada

      $Comando_SQL = "update mgt_requisicoes set ";
      $Comando_SQL .= "mgt_requisicao_status  = 'Cotada', ";
      $Comando_SQL .= "mgt_requisicao_cotacao = '" . $this->mgt_pedido_ordem->Text . $nro_cotacao . " | " . "' ";
      $Comando_SQL .= "where mgt_requisicao_numero = '" . trim($this->mgt_pedido_numero->Text) . "'";

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
      $Comando_SQL .= "'" . trim($this->mgt_pedido_numero->Text) . "',";
      $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Atualiza o Grid da Cotacao ***

      $Comando_SQL = "select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data,date_format(mgt_requisicao_data_entrega, '%d/%m/%Y') AS mgt_requisicao_data_entrega, IF(mgt_requisicao_status = 'Preparando','#','') AS mgt_requisicao_status_1, IF(mgt_requisicao_status = 'Faturado','#','') AS mgt_requisicao_status_2, IF(mgt_requisicao_status = 'Semi-Faturado','#','') AS mgt_requisicao_status_3, IF(mgt_requisicao_status = 'Aguardando','#','') AS mgt_requisicao_status_4, IF(mgt_requisicao_status = 'Producao','#','') AS mgt_requisicao_status_5 from mgt_requisicoes where mgt_requisicao_status <> 'Faturado'";

      GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();

      //*** Fecha a Tela de Geracao de Faturamento ***
      $this->confirma_geracao->Top = 1493;
      $this->confirma_geracao->IsVisible = false;

      //*** Restaura a Ultima Selecao Efetuada ***
      GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL = $_SESSION['comando_sql_grid'];
      GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();

      redirect('com_requisicoes.php');
   }


   function bt_alterar_pedidoClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_pedido_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Numero da Cotacao.";
      }
      elseif(trim($this->mgt_pedido_cliente_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, escolha um Fornecedor para esta Cotacao.";
      }
      else
      {
         //*** Insere a Cabeca da Requisicao ***

         $Comando_SQL = "update mgt_requisicoes set ";
         $Comando_SQL .= "mgt_requisicao_cliente_numero = '" . trim($this->mgt_pedido_cliente_numero->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_codigo = '" . trim($this->mgt_pedido_cliente_codigo->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_nome = '" . trim($this->mgt_pedido_cliente_nome->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_desconto = '" . trim($this->mgt_pedido_cliente_desconto->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_data = '" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data->Text)) . "',";
         $Comando_SQL .= "mgt_requisicao_data_entrega = '" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data_entrega->Text)) . "',";
         $Comando_SQL .= "mgt_requisicao_orcamento = '" . trim($this->mgt_pedido_orcamento->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_observacao = '" . trim($this->mgt_pedido_cliente_observacao->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_valor_desconto = '" . trim($this->mgt_pedido_valor_desconto->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_valor_requisicao = '" . trim($this->mgt_pedido_valor_pedido->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_valor_frete = '" . trim($this->mgt_pedido_valor_frete->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_valor_ipi = '" . trim($this->mgt_pedido_valor_ipi->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_valor_total = '" . trim($this->mgt_pedido_valor_total->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_condicao_pgto_1 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_1->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_condicao_pgto_2 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_2->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_condicao_pgto_3 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_3->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_condicao_pgto_4 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_4->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_condicao_pgto_5 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_5->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_condicao_pgto_6 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_6->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_condicao_pgto_7 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_7->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_condicao_pgto_8 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_8->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_condicao_pgto_9 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_9->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_condicao_pgto_10 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_10->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_condicao_pgto_11 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_11->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_cliente_condicao_pgto_12 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_12->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_status = '" . trim($this->mgt_pedido_status->ItemIndex) . "', ";
         $Comando_SQL .= "mgt_requisicao_funcionario = '" . trim($this->mgt_pedido_funcionario->Text) . "', ";
         $Comando_SQL .= "mgt_requisicao_vendedor = '" . trim($this->mgt_pedido_vendedor->Text) . "' ";
         $Comando_SQL .= "where mgt_requisicao_numero = '" . trim($this->mgt_pedido_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Atualiza o Grid de Pedido ***

         $Comando_SQL = "select *,date_format(mgt_cotacao_data, '%d/%m/%Y') AS mgt_cotacao_data,date_format(mgt_cotacao_data_entrega, '%d/%m/%Y') AS mgt_cotacao_data_entrega, IF(mgt_cotacao_status = 'Preparando','#','') AS mgt_cotacao_status_1, IF(mgt_cotacao_status = 'Faturado','#','') AS mgt_cotacao_status_2, IF(mgt_cotacao_status = 'Semi-Faturado','#','') AS mgt_cotacao_status_3, IF(mgt_cotacao_status = 'Aguardando','#','') AS mgt_cotacao_status_4, IF(mgt_cotacao_status = 'Producao','#','') AS mgt_cotacao_status_5 from mgt_cotacoes where mgt_cotacao_status <> 'Faturado'";

         GetConexaoPrincipal()->SQL_MGT_Cotacoes->Close();
         GetConexaoPrincipal()->SQL_MGT_Cotacoes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Cotacoes->Open();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();

         redirect('com_requisicoes.php');
      }

   }

   function bt_gerar_naoClick($sender, $params)
   {
      $this->confirma_geracao->Top = 1493;
      $this->confirma_geracao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirma_exclusao->Top = 242;
      $this->confirma_exclusao->IsVisible = true;
   }

   function bt_sim_exclusaoClick($sender, $params)
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
         $Comando_SQL .= "'" . trim($this->mgt_pedido_numero->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_requisicoes ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_requisicao_numero='" . trim($this->mgt_pedido_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Deleta os Produtos dos Pedidos ***

         $Comando_SQL = "delete from mgt_requisicoes_produtos ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_requisicao_produto_numero_requisicao='" . trim($this->mgt_pedido_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Atualiza o Grid dos Pedidos ***
         /*
         $Comando_SQL = "select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data,date_format(mgt_requisicao_data_entrega, '%d/%m/%Y') AS mgt_requisicao_data_entrega, IF(mgt_requisicao_status = 'Preparando','#','') AS mgt_requisicao_status_1, IF(mgt_requisicao_status = 'Faturado','#','') AS mgt_requisicao_status_2, IF(mgt_requisicao_status = 'Semi-Faturado','#','') AS mgt_requisicao_status_3, IF(mgt_requisicao_status = 'Aguardando','#','') AS mgt_requisicao_status_4, IF(mgt_requisicao_status = 'Producao','#','') AS mgt_requisicao_status_5 from mgt_requisicoes where mgt_requisicao_status <> 'Faturado'";

         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();
         */
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();

         //*** Fecha a Tela de Exclusao ***

         $this->confirma_exclusao->Top = 1373;
         $this->confirma_exclusao->IsVisible = false;

         redirect('com_requisicoes.php');
      }
   }

   function bt_nao_exclusaoClick($sender, $params)
   {
      $this->confirma_exclusao->Top = 1373;
      $this->confirma_exclusao->IsVisible = false;
   }

   function bt_adiciona_fornecedorClick($sender, $params)
   {
      if(trim($this->adiciona_fornecedor_numero->Text) <> '')
      {
         $this->mgt_pedido_cliente_numero->Text = $this->adiciona_fornecedor_numero->Text;
         $this->mgt_pedido_cliente_codigo->Text = $this->adiciona_fornecedor_codigo->Text;
         $this->mgt_pedido_cliente_nome->Text = $this->adiciona_fornecedor_nome->Text;

         $this->mgt_pedido_cliente_desconto->Text = '0';
         $this->mgt_pedido_cliente_condicao_pgto_1->Text = '0';
         $this->mgt_pedido_cliente_condicao_pgto_2->Text = '0';
         $this->mgt_pedido_cliente_condicao_pgto_3->Text = '0';
         $this->mgt_pedido_cliente_condicao_pgto_4->Text = '0';
         $this->mgt_pedido_cliente_observacao->Text = '';
         $this->mgt_pedido_status->ItemIndex = 'Aguardando';
         $this->mgt_pedido_funcionario->Text = '';
         $this->mgt_pedido_vendedor->Text = '';

         $this->MSG_Erro->Caption = '';

         $this->hd_tipo_adicao->Value = "F";
      }

      $this->adiciona_fornecedor->Visible = false;

      $this->adiciona_fornecedor->Top = 1436;
      $this->dados_pedido->Top = (($this->dados_pedido->Top) - ($this->adiciona_fornecedor->Height) - 5);
      $this->opcoes_pedido->Top = (($this->opcoes_pedido->Top) - ($this->adiciona_fornecedor->Height) - 5);

      $this->adiciona_fornecedor->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();


   }

   function bt_fechar_fornecedorClick($sender, $params)
   {
      $this->adiciona_fornecedor->Visible = false;

      $this->adiciona_fornecedor->Top = 1436;
      $this->dados_pedido->Top = (($this->dados_pedido->Top) - ($this->adiciona_fornecedor->Height) - 5);
      $this->opcoes_pedido->Top = (($this->opcoes_pedido->Top) - ($this->adiciona_fornecedor->Height) - 5);

      $this->adiciona_fornecedor->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
   }

   function registros_fornecedoresJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** Obtem o Registro Clicado ***

      document.comrequisicoesalt.adiciona_fornecedor_numero.value = registros_fornecedores.getTableModel().getValue(0, registros_fornecedores.getFocusedRow());
      document.comrequisicoesalt.adiciona_fornecedor_codigo.value = registros_fornecedores.getTableModel().getValue(1, registros_fornecedores.getFocusedRow());
      document.comrequisicoesalt.adiciona_fornecedor_nome.value = registros_fornecedores.getTableModel().getValue(2, registros_fornecedores.getFocusedRow());

      document.comrequisicoesalt.hd_faturamento_cliente_desconto.value = '0';
      document.comrequisicoesalt.hd_faturamento_cliente_condicao_pgto_1.value = '0';
      document.comrequisicoesalt.hd_faturamento_cliente_condicao_pgto_2.value = '0';
      document.comrequisicoesalt.hd_faturamento_cliente_condicao_pgto_3.value = '0';
      document.comrequisicoesalt.hd_faturamento_cliente_condicao_pgto_4.value = '0';
      document.comrequisicoesalt.hd_faturamento_cliente_transportadora.value = '0';
      document.comrequisicoesalt.hd_faturamento_cliente_observacao.value = '';
<?php

   }

   function opcao_busca_fornecedorJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.bt_buscar_fornecedor.focus();
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
     document.comrequisicoesalt.opcao_busca_fornecedor.focus();
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

   function mgt_pedido_vendedorJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_orcamento.focus();
     return false;
   }
<?php

   }

   function mgt_pedido_funcionarioJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_vendedor.focus();
     return false;
   }

<?php

   }

   function mgt_cotacao_orcamentoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

<?php

   }


   function mgt_pedido_cliente_descontoJSFocus($sender, $params)
   {
?>
   //Adicione seu codigo javascript aqui

<?php
   }

   public function totaliza_pedido()
   {
      //*** Atualiza o Grid dos Produtos Incluidos e Totaliza o Pedido ***

      $valor_desconto = 0;
      $valor_pedido = 0;
      $valor_ipi = 0;
      $valor_total = 0;
      $desconto = $this->mgt_pedido_cliente_desconto->Text;
      $frete = $this->mgt_pedido_valor_frete->Text;

      if($desconto < 0)
      {
         $desconto = 0;
      }

      if($frete < 0)
      {
         $frete = 0;
      }

      $this->mgt_pedido_valor_desconto->Text = '0.00';
      $this->mgt_pedido_valor_pedido->Text = '0.00';
      $this->mgt_pedido_valor_ipi->Text = '0.00';
      $this->mgt_pedido_valor_total->Text = '0.00';

      $Comando_SQL = "select * from mgt_requisicoes_produtos where mgt_requisicao_produto_numero_requisicao = '" . trim($this->mgt_pedido_numero->Text) . "' order by mgt_requisicao_produto_numero";

      GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->EOF) != 1)
         {
            $valor_ipi = $valor_ipi + GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Fields['mgt_requisicao_produto_valor_ipi'];
            $valor_pedido = $valor_pedido + GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Fields['mgt_requisicao_produto_valor_total'];

            GetConexaoPrincipal()->SQL_MGT_Requisicoes_Produtos->Next();
         }
      }

      if($desconto > 0)
      {
         $valor_desconto = (($valor_pedido * $desconto) / 100);
      }
      else
      {
         $valor_desconto = 0;
      }

      $valor_total = ((($valor_pedido + $valor_ipi) + $frete) - $valor_desconto);

      $this->mgt_pedido_valor_desconto->Text = number_format($valor_desconto, "2", ".", "");
      $this->mgt_pedido_valor_pedido->Text = number_format($valor_pedido, "2", ".", "");
      $this->mgt_pedido_valor_ipi->Text = number_format($valor_ipi, "2", ".", "");
      $this->mgt_pedido_valor_total->Text = number_format($valor_total, "2", ".", "");
   }

   function mgt_alterar_produto_ipiJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comrequisicoesalt.mgt_alterar_produto_ipi;
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

   document.comrequisicoesalt.mgt_alterar_produto_valor_total.value = (document.comrequisicoesalt.mgt_alterar_produto_qtde.value * document.comrequisicoesalt.mgt_alterar_produto_preco.value).toFixed(2);
   document.comrequisicoesalt.mgt_alterar_produto_valor_ipi.value   = ((document.comrequisicoesalt.mgt_alterar_produto_valor_total.value * document.comrequisicoesalt.mgt_alterar_produto_ipi.value) / 100).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_alterar_produto_ipiJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.bt_alterar_sim.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_unidadeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_alterar_produto_ipi.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_loteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_alterar_produto_unidade.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_precoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comrequisicoesalt.mgt_alterar_produto_preco;
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

   document.comrequisicoesalt.mgt_alterar_produto_valor_total.value = (document.comrequisicoesalt.mgt_alterar_produto_qtde.value * document.comrequisicoesalt.mgt_alterar_produto_preco.value).toFixed(2);
   document.comrequisicoesalt.mgt_alterar_produto_valor_ipi.value   = ((document.comrequisicoesalt.mgt_alterar_produto_valor_total.value * document.comrequisicoesalt.mgt_alterar_produto_ipi.value) / 100).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_alterar_produto_precoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_alterar_produto_lote.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_qtdeJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comrequisicoesalt.mgt_alterar_produto_qtde;
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

   document.comrequisicoesalt.mgt_alterar_produto_valor_total.value = (document.comrequisicoesalt.mgt_alterar_produto_qtde.value * document.comrequisicoesalt.mgt_alterar_produto_preco.value).toFixed(2);
   document.comrequisicoesalt.mgt_alterar_produto_valor_ipi.value   = ((document.comrequisicoesalt.mgt_alterar_produto_valor_total.value * document.comrequisicoesalt.mgt_alterar_produto_ipi.value) / 100).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_alterar_produto_qtdeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_alterar_produto_preco.focus();
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
     document.comrequisicoesalt.mgt_alterar_produto_qtde.focus();
     return false;
   }

<?php

   }

   function bt_alterar_simClick($sender, $params)
   {
      if((trim($this->mgt_alterar_produto_codigo->Text) <> '')and(trim($this->mgt_alterar_produto_qtde->Text) <> '')and(trim($this->mgt_alterar_produto_qtde->Text) > 0))
      {
         //*** Altera o Produto do Pedido ***

         $Comando_SQL = "update mgt_requisicoes_produtos set ";
         $Comando_SQL .= "mgt_requisicao_produto_quantidade = '" . trim($this->mgt_alterar_produto_qtde->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_produto_codigo = '" . trim($this->mgt_alterar_produto_codigo->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_produto_descricao = '" . trim($this->mgt_alterar_produto_descricao->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_produto_valor_unitario = '" . trim($this->mgt_alterar_produto_preco->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_produto_valor_total = '" . trim($this->mgt_alterar_produto_valor_total->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_produto_valor_ipi = '" . trim($this->mgt_alterar_produto_valor_ipi->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_produto_lote = '" . trim($this->mgt_alterar_produto_lote->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_produto_referencia = '" . trim($this->mgt_alterar_produto_referencia->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_produto_posicao = '" . "0" . "',";
         $Comando_SQL .= "mgt_requisicao_produto_descricao_detalhada = '" . " " . "',";
         $Comando_SQL .= "mgt_requisicao_produto_unidade = '" . trim($this->mgt_alterar_produto_unidade->Text) . "',";
         $Comando_SQL .= "mgt_requisicao_produto_ipi = '" . trim($this->mgt_alterar_produto_ipi->Text) . "' ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_requisicao_produto_numero = '" . trim($this->hd_alterar_produto_numero->Value) . "' ";
         $Comando_SQL .= "and mgt_requisicao_produto_numero_requisicao = '" . trim($this->mgt_pedido_numero->Text) . "' ";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Limpa os Dados dos Produtos Selecionados e Fecha a Janela ***

         $this->hd_alterar_produto_numero->Value = '';
         $this->hd_alterar_produto_codigo->Value = '';
         $this->hd_alterar_produto_referencia->Value = '';
         $this->hd_alterar_produto_descricao->Value = '';
         $this->hd_alterar_produto_qtde->Value = '';
         $this->hd_alterar_produto_preco->Value = '';
         $this->hd_alterar_produto_valor_total->Value = '';
         $this->hd_alterar_produto_lote->Value = '';
         $this->hd_alterar_produto_unidade->Value = '';
         $this->hd_alterar_produto_ipi->Value = '';
         $this->hd_alterar_produto_valor_ipi->Value = '';

         $this->alterar_produto->Top = 1188;
         $this->alterar_produto->Visible = false;

         //*** Totaliza o Pedido ***

         $this->totaliza_pedido();
      }
   }

   function bt_alterar_naoClick($sender, $params)
   {
      //*** Limpa os Dados dos Produtos Selecionados e Fecha a Janela ***

      $this->hd_alterar_produto_numero->Value = '';
      $this->hd_alterar_produto_codigo->Value = '';
      $this->hd_alterar_produto_referencia->Value = '';
      $this->hd_alterar_produto_descricao->Value = '';
      $this->hd_alterar_produto_qtde->Value = '';
      $this->hd_alterar_produto_preco->Value = '';
      $this->hd_alterar_produto_valor_total->Value = '';
      $this->hd_alterar_produto_lote->Value = '';
      $this->hd_alterar_produto_unidade->Value = '';
      $this->hd_alterar_produto_ipi->Value = '';
      $this->hd_alterar_produto_valor_ipi->Value = '';

      $this->alterar_produto->Top = 1188;
      $this->alterar_produto->Visible = false;
   }


   function bt_alterarClick($sender, $params)
   {
      if(trim($this->produto_remover_numero->Value) != '')
      {
         $this->mgt_alterar_produto_codigo->Text = $this->hd_alterar_produto_codigo->Value;
         $this->mgt_alterar_produto_referencia->Text = $this->hd_alterar_produto_referencia->Value;
         $this->mgt_alterar_produto_descricao->Text = $this->hd_alterar_produto_descricao->Value;
         $this->mgt_alterar_produto_qtde->Text = $this->hd_alterar_produto_qtde->Value;
         $this->mgt_alterar_produto_preco->Text = $this->hd_alterar_produto_preco->Value;
         $this->mgt_alterar_produto_valor_total->Text = $this->hd_alterar_produto_valor_total->Value;
         $this->mgt_alterar_produto_lote->Text = $this->hd_alterar_produto_lote->Value;
         $this->mgt_alterar_produto_unidade->Text = $this->hd_alterar_produto_unidade->Value;
         $this->mgt_alterar_produto_ipi->Text = $this->hd_alterar_produto_ipi->Value;
         $this->mgt_alterar_produto_valor_ipi->Text = $this->hd_alterar_produto_valor_ipi->Value;

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

      $Comando_SQL = "delete from mgt_requisicoes_produtos ";
      $Comando_SQL .= " where ";
      $Comando_SQL .= "mgt_requisicao_produto_numero = '" . trim($this->produto_remover_numero->Value) . "' ";
      $Comando_SQL .= "and mgt_requisicao_produto_numero_requisicao = '" . trim($this->produto_remover_numero_pedido->Value) . "' ";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      $this->confirmacao->Top = 1087;
      $this->confirmacao->IsVisible = false;

      //*** Totaliza o Pedido ***

      $this->totaliza_pedido();
   }

   function bt_naoClick($sender, $params)
   {
      $this->produto_remover_codigo->Value = '';
      $this->produto_remover_descricao->Value = '';
      $this->produto_remover_numero_pedido->Value = '';
      $this->produto_remover_numero->Value = '';

      $this->confirmacao->Top = 1087;
      $this->confirmacao->IsVisible = false;
   }


   function bt_removerClick($sender, $params)
   {
      if(trim($this->produto_remover_numero->Value) != '')
      {
         $this->confirmacao_mensagem->Caption = "Voce deseja realmente remover o Produto: " . trim($this->produto_remover_codigo->Value) . " - " . trim($this->produto_remover_descricao->Value) . " da Requisicao?";
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

      document.comrequisicoesalt.produto_remover_numero.value = registros_produtos.getTableModel().getValue(6, registros_produtos.getFocusedRow());
      document.comrequisicoesalt.produto_remover_numero_pedido.value = document.comrequisicoesalt.mgt_pedido_numero.value;
      document.comrequisicoesalt.produto_remover_codigo.value = registros_produtos.getTableModel().getValue(1, registros_produtos.getFocusedRow());
      document.comrequisicoesalt.produto_remover_descricao.value = registros_produtos.getTableModel().getValue(3, registros_produtos.getFocusedRow());

      //*** Para Alteracao ***

      document.comrequisicoesalt.hd_alterar_produto_numero.value = registros_produtos.getTableModel().getValue(6, registros_produtos.getFocusedRow());
      document.comrequisicoesalt.hd_alterar_produto_codigo.value = registros_produtos.getTableModel().getValue(1, registros_produtos.getFocusedRow());
      document.comrequisicoesalt.hd_alterar_produto_referencia.value = registros_produtos.getTableModel().getValue(2, registros_produtos.getFocusedRow());
      document.comrequisicoesalt.hd_alterar_produto_descricao.value = registros_produtos.getTableModel().getValue(3, registros_produtos.getFocusedRow());
      document.comrequisicoesalt.hd_alterar_produto_qtde.value = registros_produtos.getTableModel().getValue(0, registros_produtos.getFocusedRow());
      document.comrequisicoesalt.hd_alterar_produto_preco.value = registros_produtos.getTableModel().getValue(4, registros_produtos.getFocusedRow());
      document.comrequisicoesalt.hd_alterar_produto_valor_total.value = registros_produtos.getTableModel().getValue(5, registros_produtos.getFocusedRow());
      document.comrequisicoesalt.hd_alterar_produto_lote.value = registros_produtos.getTableModel().getValue(7, registros_produtos.getFocusedRow());
      document.comrequisicoesalt.hd_alterar_produto_unidade.value = registros_produtos.getTableModel().getValue(8, registros_produtos.getFocusedRow());
      document.comrequisicoesalt.hd_alterar_produto_ipi.value = registros_produtos.getTableModel().getValue(9, registros_produtos.getFocusedRow());
      document.comrequisicoesalt.hd_alterar_produto_valor_ipi.value = registros_produtos.getTableModel().getValue(10, registros_produtos.getFocusedRow());

<?php

   }


   function mgt_pedido_dataJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_status.focus();
     return false;
   }

<?php

   }

   function registros_produtos_buscaJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.comrequisicoesalt.mgt_produto_descricao.value   = registros_produtos_busca.getTableModel().getValue(2, registros_produtos_busca.getFocusedRow());
      document.comrequisicoesalt.mgt_produto_preco.value       = registros_produtos_busca.getTableModel().getValue(3, registros_produtos_busca.getFocusedRow());
      document.comrequisicoesalt.mgt_produto_lote.value        = registros_produtos_busca.getTableModel().getValue(4, registros_produtos_busca.getFocusedRow());
      document.comrequisicoesalt.mgt_produto_unidade.value     = registros_produtos_busca.getTableModel().getValue(5, registros_produtos_busca.getFocusedRow());
      document.comrequisicoesalt.mgt_produto_ipi.value         = registros_produtos_busca.getTableModel().getValue(6, registros_produtos_busca.getFocusedRow());
      document.comrequisicoesalt.mgt_produto_codigo.value      = registros_produtos_busca.getTableModel().getValue(0, registros_produtos_busca.getFocusedRow());
      document.comrequisicoesalt.mgt_produto_referencia.value  = registros_produtos_busca.getTableModel().getValue(1, registros_produtos_busca.getFocusedRow());
      document.comrequisicoesalt.mgt_produto_qtde.value        = '0';
      document.comrequisicoesalt.mgt_produto_valor_total.value = '0.00';
      document.comrequisicoesalt.mgt_produto_valor_ipi.value   = '0.00';

<?php

   }

   function bt_fechar_produtoClick($sender, $params)
   {
      $this->adiciona_produtos->Visible = false;

      $this->adiciona_fornecedor->Top = 792;
      $this->dados_pedido->Top = (($this->dados_pedido->Top) - ($this->adiciona_produtos->Height) - 5);
      $this->opcoes_pedido->Top = (($this->opcoes_pedido->Top) - ($this->adiciona_produtos->Height) - 5);

      $this->adiciona_produtos->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
   }

   function bt_fechar_clienteClick($sender, $params)
   {
      $this->adiciona_clientes->Visible = false;

      $this->adiciona_clientes->Top = 504;
      $this->dados_pedido->Top = (($this->dados_pedido->Top) - ($this->adiciona_clientes->Height) - 5);
      $this->opcoes_pedido->Top = (($this->opcoes_pedido->Top) - ($this->adiciona_clientes->Height) - 5);

      $this->adiciona_clientes->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
   }

   function bt_adicionar_produtoClick($sender, $params)
   {
      if((trim($this->mgt_produto_codigo->Text) <> '')and(trim($this->mgt_produto_qtde->Text) <> '')and(trim($this->mgt_produto_qtde->Text) > 0))
      {
         //*** Insere o Produto do Pedido ***

         $Comando_SQL = "insert into mgt_requisicoes_produtos(";
         $Comando_SQL .= "mgt_requisicao_produto_numero_requisicao, ";
         $Comando_SQL .= "mgt_requisicao_produto_quantidade, ";
         $Comando_SQL .= "mgt_requisicao_produto_codigo, ";
         $Comando_SQL .= "mgt_requisicao_produto_descricao, ";
         $Comando_SQL .= "mgt_requisicao_produto_valor_unitario, ";
         $Comando_SQL .= "mgt_requisicao_produto_valor_total, ";
         $Comando_SQL .= "mgt_requisicao_produto_valor_ipi, ";
         $Comando_SQL .= "mgt_requisicao_produto_lote, ";
         $Comando_SQL .= "mgt_requisicao_produto_referencia, ";
         $Comando_SQL .= "mgt_requisicao_produto_posicao, ";
         $Comando_SQL .= "mgt_requisicao_produto_descricao_detalhada, ";
         $Comando_SQL .= "mgt_requisicao_produto_unidade, ";
         $Comando_SQL .= "mgt_requisicao_produto_ipi) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . trim($this->mgt_pedido_numero->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_qtde->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_codigo->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_descricao->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_preco->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_valor_total->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_valor_ipi->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_lote->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_referencia->Text) . "',";
         $Comando_SQL .= "'" . "0" . "',";
         $Comando_SQL .= "'" . " " . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_unidade->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_ipi->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Limpa os Campos de Adicao de Pedido ***

         $this->mgt_produto_descricao->Text = '';
         $this->mgt_produto_preco->Text = '';
         $this->mgt_produto_lote->Text = '';
         $this->mgt_produto_unidade->Text = '';
         $this->mgt_produto_ipi->Text = '';
         $this->mgt_produto_codigo->Text = '';
         $this->mgt_produto_referencia->Text = '';
         $this->mgt_produto_qtde->Text = '';
         $this->mgt_produto_valor_total->Text = '';
         $this->mgt_produto_valor_ipi->Text = '';

         //*** Totaliza o Pedido ***

         $this->totaliza_pedido();
      }
   }

   function mgt_produto_ipiJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.bt_adicionar_produto.focus();
     return false;
   }

<?php

   }

   function mgt_produto_unidadeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_produto_ipi.focus();
     return false;
   }

<?php

   }

   function mgt_produto_loteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_produto_unidade.focus();
     return false;
   }

<?php

   }

   function mgt_produto_precoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_produto_lote.focus();
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
     document.comrequisicoesalt.mgt_produto_preco.focus();
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
     document.comrequisicoesalt.mgt_produto_qtde.focus();
     return false;
   }

<?php

   }

   function mgt_produto_ipiJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comrequisicoesalt.mgt_produto_ipi;
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

   document.comrequisicoesalt.mgt_produto_valor_total.value = (document.comrequisicoesalt.mgt_produto_qtde.value * document.comrequisicoesalt.mgt_produto_preco.value).toFixed(2);
   document.comrequisicoesalt.mgt_produto_valor_ipi.value   = ((document.comrequisicoesalt.mgt_produto_valor_total.value * document.comrequisicoesalt.mgt_produto_ipi.value) / 100).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_produto_precoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comrequisicoesalt.mgt_produto_preco;
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

   document.comrequisicoesalt.mgt_produto_valor_total.value = (document.comrequisicoesalt.mgt_produto_qtde.value * document.comrequisicoesalt.mgt_produto_preco.value).toFixed(2);
   document.comrequisicoesalt.mgt_produto_valor_ipi.value   = ((document.comrequisicoesalt.mgt_produto_valor_total.value * document.comrequisicoesalt.mgt_produto_ipi.value) / 100).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_produto_qtdeJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comrequisicoesalt.mgt_produto_qtde;
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

   document.comrequisicoesalt.mgt_produto_valor_total.value = (document.comrequisicoesalt.mgt_produto_qtde.value * document.comrequisicoesalt.mgt_produto_preco.value).toFixed(2);
   document.comrequisicoesalt.mgt_produto_valor_ipi.value   = ((document.comrequisicoesalt.mgt_produto_valor_total.value * document.comrequisicoesalt.mgt_produto_ipi.value) / 100).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function opcao_busca_produtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.bt_busca_produto.focus();
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
     document.comrequisicoesalt.opcao_busca_produto.focus();
     return false;
   }

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
   }

   function bt_adicionarClick($sender, $params)
   {
      if(trim($this->mgt_pedido_cliente_numero->Text) <> '')
      {
         if($this->adiciona_produtos->Visible == false)
         {
            $this->MSG_Erro->Caption = '';

            $this->adiciona_produtos->Top = 39;
            $this->dados_pedido->Top = (($this->dados_pedido->Top) + ($this->adiciona_produtos->Height) + 5);
            $this->opcoes_pedido->Top = (($this->opcoes_pedido->Top) + ($this->adiciona_produtos->Height) + 5);

            $this->mgt_produto_codigo->Text = '';
            $this->mgt_produto_referencia->Text = '';
            $this->mgt_produto_descricao->Text = '';
            $this->mgt_produto_qtde->Text = '';
            $this->mgt_produto_preco->Text = '';
            $this->mgt_produto_valor_total->Text = '';
            $this->mgt_produto_lote->Text = '';
            $this->mgt_produto_unidade->Text = '';
            $this->mgt_produto_ipi->Text = '';
            $this->mgt_produto_valor_ipi->Text = '';

            $this->adiciona_produtos->Visible = true;
         }
      }
      else
      {
         $this->MSG_Erro->Caption = 'Escolha primeiro um Fornecedor...';
      }
   }


   function bt_adiciona_clienteClick($sender, $params)
   {
      if(trim($this->adiciona_cliente_numero->Text) <> '')
      {
         if(trim($this->adiciona_cliente_bloqueado->Text) <> 'N')
         {
            $this->MSG_Erro->Caption = 'O pedido nao pode ser efetuado, pois o credito esta bloqueado';
         }
         else
         {
            $this->mgt_pedido_cliente_numero->Text = $this->adiciona_cliente_numero->Text;
            $this->mgt_pedido_cliente_codigo->Text = $this->adiciona_cliente_codigo->Text;
            $this->mgt_pedido_cliente_nome->Text = $this->adiciona_cliente_nome->Text;

            $this->mgt_pedido_cliente_desconto->Text = $this->hd_pedido_cliente_desconto->Value;
            $this->mgt_pedido_cliente_condicao_pgto_1->Text = $this->hd_pedido_cliente_condicao_pgto_1->Value;
            $this->mgt_pedido_cliente_condicao_pgto_2->Text = $this->hd_pedido_cliente_condicao_pgto_2->Value;
            $this->mgt_pedido_cliente_condicao_pgto_3->Text = $this->hd_pedido_cliente_condicao_pgto_3->Value;
            $this->mgt_pedido_cliente_condicao_pgto_4->Text = $this->hd_pedido_cliente_condicao_pgto_4->Value;
            $this->mgt_pedido_cliente_transportadora->ItemIndex = $this->hd_pedido_cliente_transportadora->Value;
            $this->mgt_pedido_cliente_observacao->Text = $this->hd_pedido_cliente_observacao->Value;

            $this->MSG_Erro->Caption = '';
         }
      }

      $this->adiciona_clientes->Visible = false;

      $this->adiciona_clientes->Top = 504;
      $this->dados_pedido->Top = (($this->dados_pedido->Top) - ($this->adiciona_clientes->Height) - 5);
      $this->opcoes_pedido->Top = (($this->opcoes_pedido->Top) - ($this->adiciona_clientes->Height) - 5);

      $this->adiciona_clientes->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.comrequisicoesalt.adiciona_cliente_numero.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
      document.comrequisicoesalt.adiciona_cliente_codigo.value = registros.getTableModel().getValue(2, registros.getFocusedRow());
      document.comrequisicoesalt.adiciona_cliente_nome.value = registros.getTableModel().getValue(3, registros.getFocusedRow());
      document.comrequisicoesalt.adiciona_cliente_bloqueado.value = registros.getTableModel().getValue(12, registros.getFocusedRow());

      if(registros.getTableModel().getValue(12, registros.getFocusedRow()) == 'S')
      {
        document.comrequisicoesalt.MSG_Alerta.value = '(Credito Bloqueado)';
      }
      else
      {
        document.comrequisicoesalt.MSG_Alerta.value = '';
      }

      document.comrequisicoesalt.hd_pedido_cliente_desconto.value = registros.getTableModel().getValue(5, registros.getFocusedRow());
      document.comrequisicoesalt.hd_pedido_cliente_condicao_pgto_1.value = registros.getTableModel().getValue(6, registros.getFocusedRow());
      document.comrequisicoesalt.hd_pedido_cliente_condicao_pgto_2.value = registros.getTableModel().getValue(7, registros.getFocusedRow());
      document.comrequisicoesalt.hd_pedido_cliente_condicao_pgto_3.value = registros.getTableModel().getValue(8, registros.getFocusedRow());
      document.comrequisicoesalt.hd_pedido_cliente_condicao_pgto_4.value = registros.getTableModel().getValue(9, registros.getFocusedRow());
      document.comrequisicoesalt.hd_pedido_cliente_transportadora.value = registros.getTableModel().getValue(10, registros.getFocusedRow());
      document.comrequisicoesalt.hd_pedido_cliente_observacao.value = registros.getTableModel().getValue(11, registros.getFocusedRow());
<?php
   }

   function opcao_buscaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.bt_buscar.focus();
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
     document.comrequisicoesalt.opcao_busca.focus();
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
      if($this->adiciona_fornecedor->Visible == false)
      {
         $this->adiciona_fornecedor->Top = 39;
         $this->dados_pedido->Top = (($this->dados_pedido->Top) + ($this->adiciona_fornecedor->Height) + 5);
         $this->opcoes_pedido->Top = (($this->opcoes_pedido->Top) + ($this->adiciona_fornecedor->Height) + 5);

         $this->adiciona_fornecedor_numero->Text = "";
         $this->adiciona_fornecedor_codigo->Text = "";
         $this->adiciona_fornecedor_nome->Text = "";

         $this->adiciona_fornecedor->Visible = true;
      }
   }

   function mgt_pedido_data_entregaJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero e Barras ***

   var campo = document.comrequisicoesalt.mgt_pedido_data_entrega
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

   function mgt_pedido_cliente_descontoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.comrequisicoesalt.mgt_pedido_cliente_desconto;
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

      //*** Totaliza o Pedido ***
      if(document.comrequisicoesalt.mgt_pedido_cliente_desconto.value == '')
      {
         document.comrequisicoesalt.mgt_pedido_cliente_desconto.value = 0;
      }
      document.comrequisicoesalt.mgt_pedido_valor_desconto.value = ((parseFloat(document.comrequisicoesalt.mgt_pedido_valor_pedido.value) * parseFloat(document.comrequisicoesalt.mgt_pedido_cliente_desconto.value)) / 100).toFixed(2);
      document.comrequisicoesalt.mgt_pedido_valor_total.value = (parseFloat(document.comrequisicoesalt.mgt_pedido_valor_pedido.value) - parseFloat(document.comrequisicoesalt.mgt_pedido_valor_desconto.value) + parseFloat(document.comrequisicoesalt.mgt_pedido_valor_frete.value) + parseFloat(document.comrequisicoesalt.mgt_pedido_valor_ipi.value)).toFixed(2);

<?php

   }

   function mgt_pedido_valor_freteJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.comrequisicoesalt.mgt_pedido_valor_frete;
      var digits="0123456789.,";
      var campo_temp;

      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

      //*** Totaliza o Pedido ***
      if(document.comrequisicoesalt.mgt_pedido_cliente_desconto.value == '')
      {
         document.comrequisicoesalt.mgt_pedido_cliente_desconto.value = 0;
      }
      document.comrequisicoesalt.mgt_pedido_valor_desconto.value = ((parseFloat(document.comrequisicoesalt.mgt_pedido_valor_pedido.value) * parseFloat(document.comrequisicoesalt.mgt_pedido_cliente_desconto.value)) / 100).toFixed(2);
      document.comrequisicoesalt.mgt_pedido_valor_total.value = (parseFloat(document.comrequisicoesalt.mgt_pedido_valor_pedido.value) - parseFloat(document.comrequisicoesalt.mgt_pedido_valor_desconto.value) + parseFloat(document.comrequisicoesalt.mgt_pedido_valor_frete.value) + parseFloat(document.comrequisicoesalt.mgt_pedido_valor_ipi.value)).toFixed(2);

<?php

   }

   function mgt_pedido_cliente_condicao_pgto_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_12
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

   function mgt_pedido_cliente_condicao_pgto_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_11
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

   function mgt_pedido_cliente_condicao_pgto_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_10
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

   function mgt_pedido_cliente_condicao_pgto_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_9
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

   function mgt_pedido_cliente_condicao_pgto_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_8
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

   function mgt_pedido_cliente_condicao_pgto_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_7
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

   function mgt_pedido_cliente_condicao_pgto_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_6
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

   function mgt_pedido_cliente_condicao_pgto_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_5
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

   function mgt_pedido_cliente_condicao_pgto_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_4
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

   function mgt_pedido_cliente_condicao_pgto_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_3
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

   function mgt_pedido_cliente_condicao_pgto_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_2
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

   function mgt_pedido_cliente_condicao_pgto_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_1
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


   function mgt_pedido_cliente_condicao_pgto_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_valor_frete.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_condicao_pgto_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_12.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_condicao_pgto_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_11.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_condicao_pgto_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_10.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_condicao_pgto_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_9.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_condicao_pgto_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_8.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_condicao_pgto_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_7.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_condicao_pgto_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_6.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_condicao_pgto_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_5.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_condicao_pgto_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_4.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_condicao_pgto_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_3.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_condicao_pgto_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_condicao_pgto_2.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_valor_freteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.bt_incluir.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_observacaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_valor_frete.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_orcamentoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_observacao.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_transportadoraJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_ordem_compra.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_statusJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_funcionario.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_data_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_tipo_faturamento.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_cliente_descontoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoesalt.mgt_pedido_cliente_tipo_faturamento.focus();
     return false;
   }

<?php

   }

   function comrequisicoesaltCreate($sender, $params)
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

      //*** Fecha a Adicao de Produto ***

      $this->mgt_produto_codigo->Text = '';
      $this->mgt_produto_referencia->Text = '';
      $this->mgt_produto_descricao->Text = '';
      $this->mgt_produto_qtde->Text = '';
      $this->mgt_produto_preco->Text = '';
      $this->mgt_produto_valor_total->Text = '';
      $this->mgt_produto_lote->Text = '';
      $this->mgt_produto_unidade->Text = '';
      $this->mgt_produto_ipi->Text = '';
      $this->mgt_produto_valor_ipi->Text = '';

      //*** Fecha a Adicao de Clientes ***

      $this->adiciona_fornecedor_numero->Text = '';
      $this->adiciona_fornecedor_codigo->Text = '';
      $this->adiciona_fornecedor_nome->Text = '';

      //*** Limpa os Demais Campos do Pedido ***

      $this->mgt_pedido_numero->Text = '';
      $this->mgt_pedido_cliente_numero->Text = '';
      $this->mgt_pedido_cliente_codigo->Text = '';
      $this->mgt_pedido_cliente_nome->Text = '';

      $this->mgt_pedido_cliente_desconto->Text = '0';
      $this->mgt_pedido_data->Text = '';
      $this->mgt_pedido_data_entrega->Text = '';
      $this->mgt_pedido_cliente_condicao_pgto_1->Text = '0';
      $this->mgt_pedido_cliente_condicao_pgto_2->Text = '0';
      $this->mgt_pedido_cliente_condicao_pgto_3->Text = '0';
      $this->mgt_pedido_cliente_condicao_pgto_4->Text = '0';
      $this->mgt_pedido_cliente_condicao_pgto_5->Text = '0';
      $this->mgt_pedido_cliente_condicao_pgto_6->Text = '0';
      $this->mgt_pedido_cliente_condicao_pgto_7->Text = '0';
      $this->mgt_pedido_cliente_condicao_pgto_8->Text = '0';
      $this->mgt_pedido_cliente_condicao_pgto_9->Text = '0';
      $this->mgt_pedido_cliente_condicao_pgto_10->Text = '0';
      $this->mgt_pedido_cliente_condicao_pgto_11->Text = '0';
      $this->mgt_pedido_cliente_condicao_pgto_12->Text = '0';
      $this->mgt_pedido_cliente_observacao->Text = '';
      $this->mgt_pedido_orcamento->Text = '';
      $this->mgt_pedido_funcionario->Text = '';
      $this->mgt_pedido_vendedor->Text = '';

      $this->mgt_pedido_valor_pedido->Text = '0.00';
      $this->mgt_pedido_valor_desconto->Text = '0.00';
      $this->mgt_pedido_valor_frete->Text = '0.00';
      $this->mgt_pedido_valor_ipi->Text = '0.00';
      $this->mgt_pedido_valor_total->Text = '0.00';

      //*** Limpa os Campos Hidden ***

      $this->hd_alterar_produto_numero->Value = '';
      $this->hd_alterar_produto_codigo->Value = '';
      $this->hd_alterar_produto_referencia->Value = '';
      $this->hd_alterar_produto_descricao->Value = '';
      $this->hd_alterar_produto_qtde->Value = '';
      $this->hd_alterar_produto_preco->Value = '';
      $this->hd_alterar_produto_valor_total->Value = '';
      $this->hd_alterar_produto_lote->Value = '';
      $this->hd_alterar_produto_unidade->Value = '';
      $this->hd_alterar_produto_ipi->Value = '';
      $this->hd_alterar_produto_valor_ipi->Value = '';

      $this->produto_remover_numero->Value = '';
      $this->produto_remover_numero_pedido->Value = '';
      $this->produto_remover_codigo->Value = '';
      $this->produto_remover_descricao->Value = '';

      $this->hd_pedido_cliente_desconto->Value = '';
      $this->hd_pedido_cliente_transportadora->Value = '';
      $this->hd_pedido_cliente_observacao->Value = '';
      $this->hd_pedido_cliente_condicao_pgto_1->Value = '';
      $this->hd_pedido_cliente_condicao_pgto_2->Value = '';
      $this->hd_pedido_cliente_condicao_pgto_3->Value = '';
      $this->hd_pedido_cliente_condicao_pgto_4->Value = '';

      //*** Efetua o Carregamento Restante ***

      $mgt_pedido_numero = $_REQUEST['mgt_pedido_numero'];

      $Comando_SQL = "select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data,date_format(mgt_requisicao_data_entrega, '%d/%m/%Y') AS mgt_requisicao_data_entrega, IF(mgt_requisicao_status = 'Preparando','#','') AS mgt_requisicao_status_1, IF(mgt_requisicao_status = 'Faturado','#','') AS mgt_requisicao_status_2, IF(mgt_requisicao_status = 'Semi-Faturado','#','') AS mgt_requisicao_status_3, IF(mgt_requisicao_status = 'Aguardando','#','') AS mgt_requisicao_status_4, IF(mgt_requisicao_status = 'Producao','#','') AS mgt_requisicao_status_5 from mgt_requisicoes where mgt_requisicao_numero = '" . trim($mgt_pedido_numero) . "' and mgt_requisicao_status <> 'Faturado' order by mgt_requisicao_numero";

      GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();

      $this->mgt_pedido_numero->Text = $mgt_pedido_numero;
      $this->mgt_pedido_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_numero'];
      $this->mgt_pedido_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_codigo'];
      $this->mgt_pedido_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_nome'];

      $this->mgt_pedido_cliente_desconto->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_desconto'];
      $this->mgt_pedido_data->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_data'];
      $this->mgt_pedido_data_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_data_entrega'];
      $this->mgt_pedido_cliente_condicao_pgto_1->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_condicao_pgto_1'];
      $this->mgt_pedido_cliente_condicao_pgto_2->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_condicao_pgto_2'];
      $this->mgt_pedido_cliente_condicao_pgto_3->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_condicao_pgto_3'];
      $this->mgt_pedido_cliente_condicao_pgto_4->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_condicao_pgto_4'];
      $this->mgt_pedido_cliente_condicao_pgto_5->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_condicao_pgto_5'];
      $this->mgt_pedido_cliente_condicao_pgto_6->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_condicao_pgto_6'];
      $this->mgt_pedido_cliente_condicao_pgto_7->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_condicao_pgto_7'];
      $this->mgt_pedido_cliente_condicao_pgto_8->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_condicao_pgto_8'];
      $this->mgt_pedido_cliente_condicao_pgto_9->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_condicao_pgto_9'];
      $this->mgt_pedido_cliente_condicao_pgto_10->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_condicao_pgto_10'];
      $this->mgt_pedido_cliente_condicao_pgto_11->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_condicao_pgto_11'];
      $this->mgt_pedido_cliente_condicao_pgto_12->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cliente_condicao_pgto_12'];
      $this->mgt_pedido_cliente_observacao->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_observacao'];
      $this->mgt_pedido_orcamento->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_orcamento'];

      $this->mgt_pedido_valor_pedido->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_valor_requisicao'];
      $this->mgt_pedido_valor_desconto->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_valor_desconto'];
      $this->mgt_pedido_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_valor_frete'];
      $this->mgt_pedido_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_valor_ipi'];
      $this->mgt_pedido_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_valor_total'];

      $this->mgt_pedido_status->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_status'];
      $this->mgt_pedido_funcionario->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_funcionario'];
      $this->mgt_pedido_vendedor->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_vendedor'];

      $this->mgt_pedido_ordem->Text = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_cotacao'];

      $this->MSG_Erro->Caption = "";

      //*** Carrega os Produtos do Pedido e Totaliza ***

      $this->totaliza_pedido();
   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();

         redirect('com_requisicoes.php');
   }

   function bt_incluirClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_pedido_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Numero do Cotacao.";
      }
      elseif(trim($this->mgt_pedido_cliente_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, escolha um Fornecedor para esta Cotacao.";
      }
      else
      {
         //*** Insere a Cabeca do Pedido ***

         $Comando_SQL = "update mgt_cotacoes set ";
         $Comando_SQL .= "mgt_cotacao_cliente_numero = '" . trim($this->mgt_pedido_cliente_numero->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_codigo = '" . trim($this->mgt_pedido_cliente_codigo->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_nome = '" . trim($this->mgt_pedido_cliente_nome->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_desconto = '" . trim($this->mgt_pedido_cliente_desconto->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_data = '" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data->Text)) . "',";
         $Comando_SQL .= "mgt_cotacao_data_entrega = '" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data_entrega->Text)) . "',";
         $Comando_SQL .= "mgt_cotacao_orcamento = '" . trim($this->mgt_pedido_orcamento->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_observacao = '" . trim($this->mgt_pedido_cliente_observacao->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_valor_desconto = '" . trim($this->mgt_pedido_valor_desconto->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_valor_cotacao = '" . trim($this->mgt_pedido_valor_pedido->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_valor_frete = '" . trim($this->mgt_pedido_valor_frete->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_valor_ipi = '" . trim($this->mgt_pedido_valor_ipi->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_valor_total = '" . trim($this->mgt_pedido_valor_total->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_1 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_1->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_2 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_2->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_3 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_3->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_4 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_4->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_5 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_5->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_6 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_6->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_7 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_7->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_8 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_8->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_9 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_9->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_10 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_10->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_11 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_11->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_cliente_condicao_pgto_12 = '" . trim($this->mgt_pedido_cliente_condicao_pgto_12->Text) . "',";
         $Comando_SQL .= "mgt_cotacao_status = '" . trim($this->mgt_pedido_status->ItemIndex) . "', ";
         $Comando_SQL .= "mgt_cotacao_funcionario = '" . trim($this->mgt_pedido_funcionario->Text) . "', ";
         $Comando_SQL .= "mgt_cotacao_vendedor = '" . trim($this->mgt_pedido_vendedor->Text) . "' ";
         $Comando_SQL .= "where mgt_cotacao_numero = '" . trim($this->mgt_pedido_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Atualiza o Grid de Pedido ***

         $Comando_SQL = "select *,date_format(mgt_cotacao_data, '%d/%m/%Y') AS mgt_cotacao_data,date_format(mgt_cotacao_data_entrega, '%d/%m/%Y') AS mgt_cotacao_data_entrega, IF(mgt_cotacao_status = 'Preparando','#','') AS mgt_cotacao_status_1, IF(mgt_cotacao_status = 'Faturado','#','') AS mgt_cotacao_status_2, IF(mgt_cotacao_status = 'Semi-Faturado','#','') AS mgt_cotacao_status_3, IF(mgt_cotacao_status = 'Aguardando','#','') AS mgt_cotacao_status_4, IF(mgt_cotacao_status = 'Producao','#','') AS mgt_cotacao_status_5 from mgt_cotacoes where mgt_cotacao_status <> 'Faturado'";

         GetConexaoPrincipal()->SQL_MGT_Cotacoes->Close();
         GetConexaoPrincipal()->SQL_MGT_Cotacoes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Cotacoes->Open();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();

         redirect('com_cotacoes.php');
      }

   }

   function comrequisicoesaltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $comrequisicoesalt;

//Creates the form
$comrequisicoesalt = new comrequisicoesalt($application);

//Read from resource file
$comrequisicoesalt->loadResource(__FILE__);

//Shows the form
$comrequisicoesalt->show();

?>