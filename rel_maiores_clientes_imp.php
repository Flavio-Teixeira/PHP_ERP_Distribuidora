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
//Inclusoes
require_once("conexao_principal.php");
use_unit("dbctrls.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

require_once("includes/inverte_data_amd_to_dma.fnc.php");
require_once("includes/inverte_data_dma_to_amd.fnc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Definicao de classe
class relmaioresclientesimp extends Page
{
   public $logo_relatorio = null;
   public $valor_total = null;
   public $qtde_produtos = null;
   public $qtde_notas = null;
   public $nome_cliente = null;
   public $numero_cliente = null;
   public $posicao = null;
   public $Label11 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label13 = null;
   public $Label1 = null;
   public $Label10 = null;
   public $opcao = null;
   public $qtde_ranking = null;
   public $data_final = null;
   public $data_inicial = null;
   public $Label15 = null;
   public $Label12 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label2 = null;
   public $apelido_empresa = null;
   public $relatorio_titulo = null;
   public $rel_hora = null;
   public $rel_data = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Linha_Detalhe = null;

   function relmaioresclientesimpCreate($sender, $params)
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

      //*** Carrega o Nome da Empresa no Relatorio e os Dados de Busca ***

      $this->apelido_empresa->Caption = $_SESSION['login_empresa'];
      $this->data_inicial->Caption = $_SESSION['imprime_data_inicial'];
      $this->data_final->Caption = $_SESSION['imprime_data_final'];
      $this->opcao->Caption = $_SESSION['imprime_opcao'];
      $this->qtde_ranking->Caption = $_SESSION['imprime_qtde_ranking'];

      if($this->opcao->Caption == 0)
      {
         $this->opcao->Caption = "Pedidos";
      }
      else
      {
         $this->opcao->Caption = "Faturamento";
      }

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      //*** INICIO

      //*** Prepara a Criacao de Tabelas Temporarias ***
      $Nome_Tabela_Nota = "mgt_swap_valor_vendido";

      //*** Apaga a Tabela Temporaria de Notas Fiscais e Papeletas ***
      $Comando_SQL = "TRUNCATE TABLE " . $Nome_Tabela_Nota;

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();

      $Comando_SQL = "TRUNCATE TABLE " . $Nome_Tabela_Nota . "_aux";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();

      //*** Efetua o Carregamento das Tabelas Temporarias para a Geracao do Relatorio ***

      //*** Dados Sobre a Nota Fiscal ***

      if($this->opcao->Caption == "Faturamento")
      {

         $Comando_SQL = "Select * from mgt_notas_fiscais Where ";
         $Comando_SQL .= "mgt_nota_fiscal_natureza_operacao LIKE '%Venda%' And ";
         $Comando_SQL .= "mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->data_inicial->Caption)) . "'";
         $Comando_SQL .= " And mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->data_final->Caption)) . "'";
         $Comando_SQL .= " Order By mgt_nota_fiscal_numero";

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) == 0)
         {

            $Ranking_Posicao = 1;
            $C_Codigo = "";
            $C_Nome = "";
            $C_Qtde_Notas = 0;
            $C_Qtde_Produtos = 0;
            $Valor_Total = 0;
            $Primeira_Vez = true;

            while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
            {

               If(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] <> $C_Codigo)
               {

                  If(!($Primeira_Vez))
                  {
                     $Comando_SQL = "Insert into " . $Nome_Tabela_Nota . "(";
                     $Comando_SQL .= "mgt_swap_codigo,";
                     $Comando_SQL .= "mgt_swap_nome,";
                     $Comando_SQL .= "mgt_swap_nro_notas,";
                     $Comando_SQL .= "mgt_swap_nro_produtos,";
                     $Comando_SQL .= "mgt_swap_valor)";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . $C_Codigo . "',";
                     $Comando_SQL .= "'" . $C_Nome . "',";
                     $Comando_SQL .= "'" . $C_Qtde_Notas . "',";
                     $Comando_SQL .= "'" . $C_Qtde_Produtos . "',";
                     $Comando_SQL .= "'" . $Valor_Total . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                  }

                  $Primeira_Vez = false;

                  $C_Codigo = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'];
                  $C_Nome = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'];
                  $C_Qtde_Notas = 0;
                  $C_Qtde_Produtos = 0;
                  $Valor_Total = 0;
               }

               $C_Qtde_Notas = $C_Qtde_Notas + 1;
               $Valor_Total = $Valor_Total + GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'];

               //*** Seleciona os Produtos da Nota ***

               $Comando_SQL = "Select * from mgt_notas_fiscais_produtos Where ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_numero_nota = " . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'];

               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Close();
               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Open();

               if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->EOF) == 0)
               {
                  while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->EOF) != 1)
                  {
                     $C_Qtde_Produtos = $C_Qtde_Produtos + GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_quantidade'];

                     GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Next();
                  }
               }

               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
            }

            $Comando_SQL = "Insert into " . $Nome_Tabela_Nota . "(";
            $Comando_SQL .= "mgt_swap_codigo,";
            $Comando_SQL .= "mgt_swap_nome,";
            $Comando_SQL .= "mgt_swap_nro_notas,";
            $Comando_SQL .= "mgt_swap_nro_produtos,";
            $Comando_SQL .= "mgt_swap_valor)";
            $Comando_SQL .= " Values(";

            $Comando_SQL .= "'" . Trim($C_Codigo) . "',";
            $Comando_SQL .= "'" . Trim($C_Nome) . "',";
            $Comando_SQL .= "'" . $C_Qtde_Notas . "',";
            $Comando_SQL .= "'" . $C_Qtde_Produtos . "',";
            $Comando_SQL .= "'" . $Valor_Total . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
         }
      }
      else
      {
         $Comando_SQL = "Select * from mgt_pedidos Where ";
         $Comando_SQL .= "mgt_pedido_data >= '" . inverte_data_dma_to_amd(trim($this->data_inicial->Caption)) . "'";
         $Comando_SQL .= " And mgt_pedido_data <= '" . inverte_data_dma_to_amd(trim($this->data_final->Caption)) . "'";
         $Comando_SQL .= " Order By mgt_pedido_numero";

         GetConexaoPrincipal()->SQL_MGT_Pedidos->Close();
         GetConexaoPrincipal()->SQL_MGT_Pedidos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Pedidos->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Pedidos->EOF) == 0)
         {

            $Ranking_Posicao = 1;
            $C_Codigo = "";
            $C_Nome = "";
            $C_Qtde_Notas = 0;
            $C_Qtde_Produtos = 0;
            $Valor_Total = 0;
            $Primeira_Vez = true;

            while((GetConexaoPrincipal()->SQL_MGT_Pedidos->EOF) != 1)
            {

               If(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_numero'] <> $C_Codigo)
               {

                  If(!($Primeira_Vez))
                  {
                     $Comando_SQL = "Insert into " . $Nome_Tabela_Nota . "(";
                     $Comando_SQL .= "mgt_swap_codigo,";
                     $Comando_SQL .= "mgt_swap_nome,";
                     $Comando_SQL .= "mgt_swap_nro_notas,";
                     $Comando_SQL .= "mgt_swap_nro_produtos,";
                     $Comando_SQL .= "mgt_swap_valor)";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . $C_Codigo . "',";
                     $Comando_SQL .= "'" . $C_Nome . "',";
                     $Comando_SQL .= "'" . $C_Qtde_Notas . "',";
                     $Comando_SQL .= "'" . $C_Qtde_Produtos . "',";
                     $Comando_SQL .= "'" . $Valor_Total . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                  }

                  $Primeira_Vez = false;

                  $C_Codigo = GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_numero'];
                  $C_Nome = GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_nome'];
                  $C_Qtde_Notas = 0;
                  $C_Qtde_Produtos = 0;
                  $Valor_Total = 0;
               }

               $C_Qtde_Notas = $C_Qtde_Notas + 1;
               $Valor_Total = $Valor_Total + GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_valor_total'];

               //*** Seleciona os Produtos da Nota ***

               $Comando_SQL = "Select * from mgt_pedidos_produtos Where ";
               $Comando_SQL .= "mgt_pedido_produto_numero_pedido = " . GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_numero'];

               GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Close();
               GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Open();

               if((GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->EOF) == 0)
               {
                  while((GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->EOF) != 1)
                  {
                     $C_Qtde_Produtos = $C_Qtde_Produtos + GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_quantidade'];

                     GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Next();
                  }
               }

               GetConexaoPrincipal()->SQL_MGT_Pedidos->Next();
            }

            $Comando_SQL = "Insert into " . $Nome_Tabela_Nota . "(";
            $Comando_SQL .= "mgt_swap_codigo,";
            $Comando_SQL .= "mgt_swap_nome,";
            $Comando_SQL .= "mgt_swap_nro_notas,";
            $Comando_SQL .= "mgt_swap_nro_produtos,";
            $Comando_SQL .= "mgt_swap_valor)";
            $Comando_SQL .= " Values(";

            $Comando_SQL .= "'" . Trim($C_Codigo) . "',";
            $Comando_SQL .= "'" . Trim($C_Nome) . "',";
            $Comando_SQL .= "'" . $C_Qtde_Notas . "',";
            $Comando_SQL .= "'" . $C_Qtde_Produtos . "',";
            $Comando_SQL .= "'" . $Valor_Total . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
         }
      }

      //Transfere o conteudo para a Segunda Tabela
      GetConexaoPrincipal()->SQL_Relatorio->Close();
      GetConexaoPrincipal()->SQL_Relatorio->LimitCount = $this->qtde_ranking->Caption;
      GetConexaoPrincipal()->SQL_Relatorio->LimitStart = 0;
      GetConexaoPrincipal()->SQL_Relatorio->SQL = "Select * from " . $Nome_Tabela_Nota . " Order By mgt_swap_valor desc";
      GetConexaoPrincipal()->SQL_Relatorio->Open();

      if((GetConexaoPrincipal()->SQL_Relatorio->EOF) == 0)
      {
         while((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
         {
            $Comando_SQL = "Insert into " . $Nome_Tabela_Nota . "_aux(";
            $Comando_SQL .= "mgt_swap_codigo,";
            $Comando_SQL .= "mgt_swap_nome,";
            $Comando_SQL .= "mgt_swap_nro_notas,";
            $Comando_SQL .= "mgt_swap_nro_produtos,";
            $Comando_SQL .= "mgt_swap_valor)";
            $Comando_SQL .= " Values(";

            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_codigo'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_nome'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_nro_notas'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_nro_produtos'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_valor'] . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();

            GetConexaoPrincipal()->SQL_Relatorio->Next();
         }
      }

      $this->Linha_Detalhe->setDataSource('conexaoprincipal.DS_Relatorio');
      $this->numero_cliente->setDataSource('conexaoprincipal.DS_Relatorio');
      $this->nome_cliente->setDataSource('conexaoprincipal.DS_Relatorio');
      $this->qtde_notas->setDataSource('conexaoprincipal.DS_Relatorio');
      $this->qtde_produtos->setDataSource('conexaoprincipal.DS_Relatorio');
      $this->valor_total->setDataSource('conexaoprincipal.DS_Relatorio');

      $this->numero_cliente->setDataField('mgt_swap_codigo');
      $this->nome_cliente->setDataField('mgt_swap_nome');
      $this->qtde_notas->setDataField('mgt_swap_nro_notas');
      $this->qtde_produtos->setDataField('mgt_swap_nro_produtos');
      $this->valor_total->setDataField('mgt_swap_valor');

      GetConexaoPrincipal()->SQL_Relatorio->Close();
      GetConexaoPrincipal()->SQL_Relatorio->LimitCount = $this->qtde_ranking->Caption;
      GetConexaoPrincipal()->SQL_Relatorio->LimitStart = 0;
      GetConexaoPrincipal()->SQL_Relatorio->SQL = "Select * from " . $Nome_Tabela_Nota . "_aux Order By mgt_swap_autonumeracao";
      GetConexaoPrincipal()->SQL_Relatorio->Open();

      //*** Apaga a Tabela Temporaria de Notas Fiscais e Papeletas ***
      $Comando_SQL = "TRUNCATE TABLE " . $Nome_Tabela_Nota;

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();

      $Comando_SQL = "TRUNCATE TABLE " . $Nome_Tabela_Nota . "_aux";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();

      //*** FINAL
   }
   function relmaioresclientesimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relmaioresclientesimp;

//Cria o formulario
$relmaioresclientesimp = new relmaioresclientesimp($application);

//Ler do arquivo de recursos
$relmaioresclientesimp->loadResource(__FILE__);

//Mostrar o formulario
$relmaioresclientesimp->show();

?>