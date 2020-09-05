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
class venpedidospendentesimp extends Page
{
   public $logo_relatorio = null;
   public $Label21 = null;
   public $Label18 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $opcao_escolhida_descricao = null;
   public $mgt_pedido_produto_total_quantidade = null;
   public $Label13 = null;
   public $Label11 = null;
   public $Label6 = null;
   public $opcao_escolhida_codigo = null;
   public $opcao_escolhida_tipo = null;
   public $Label10 = null;
   public $Label5 = null;
   public $mgt_rel_dt_fim = null;
   public $mgt_rel_dt_ini = null;
   public $Label7 = null;
   public $Label1 = null;
   public $Label20 = null;
   public $Label19 = null;
   public $Label12 = null;
   public $mgt_pedido_cliente_numero = null;
   public $mgt_pedido_valor_total = null;
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

   function venpedidospendentesimpCreate($sender, $params)
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

      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      //*** Carrega o Nome da Empresa no Relatorio e os Dados de Busca ***

      $this->apelido_empresa->Caption = $_SESSION['login_empresa'];

      $this->mgt_rel_dt_ini->Caption = $_REQUEST['mgt_rel_dt_ini'];
      $this->mgt_rel_dt_fim->Caption = $_REQUEST['mgt_rel_dt_fim'];
      $this->opcao_escolhida_tipo->Caption = $_REQUEST['opcao_escolhida_tipo'];
      $this->opcao_escolhida_codigo->Caption = $_REQUEST['opcao_escolhida_codigo'];

      if(trim($this->opcao_escolhida_tipo->Caption) == 'Cliente')
      {
         $Comando_SQL = "Select * from mgt_clientes where mgt_cliente_numero = '" . trim($this->opcao_escolhida_codigo->Caption) . "'";

         GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
         GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

         $this->opcao_escolhida_descricao->Caption = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_razao_social'];
      }
      else if(trim($this->opcao_escolhida_tipo->Caption) == "Produto")
      {
         $Comando_SQL = "Select * from mgt_produtos where mgt_produto_codigo = '" . trim($this->opcao_escolhida_codigo->Caption) . "'";

         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         $this->opcao_escolhida_descricao->Caption = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_descricao'];
      }
      else
      {
         $this->opcao_escolhida_descricao->Caption = '';
      }

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      //*** Efetua a Totalizacao ***

      if(trim($this->opcao_escolhida_tipo->Caption) == 'Cliente')
      {
         $Comando_SQL = "Select ";
         $Comando_SQL .= "SUM(mgt_pedido_produto_quantidade) AS mgt_pedido_produto_quantidade ";
         $Comando_SQL .= "From mgt_pedidos, mgt_pedidos_produtos Where ";
         $Comando_SQL .= "mgt_pedido_cliente_numero = '" . trim($this->opcao_escolhida_codigo->Caption) . "' And ";
         $Comando_SQL .= "(mgt_pedido_data >= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_ini->Caption) . "' And mgt_pedido_data <= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_fim->Caption) . "') And ";
         $Comando_SQL .= "mgt_pedido_status <> 'Faturado' And mgt_pedido_produto_numero_pedido = mgt_pedido_numero ";
         $Comando_SQL .= " Order By mgt_pedido_produto_codigo Asc";
      }
      else if(trim($this->opcao_escolhida_tipo->Caption) == "Produto")
      {
         $Comando_SQL = "Select ";
         $Comando_SQL .= "SUM(mgt_pedido_produto_quantidade) AS mgt_pedido_produto_quantidade ";
         $Comando_SQL .= "From mgt_pedidos, mgt_pedidos_produtos Where ";
         $Comando_SQL .= "mgt_pedido_status <> 'Faturado' And mgt_pedido_produto_numero_pedido = mgt_pedido_numero And ";
         $Comando_SQL .= "mgt_pedido_produto_codigo = '" . trim($this->opcao_escolhida_codigo->Caption) . "' And ";
         $Comando_SQL .= "(mgt_pedido_data >= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_ini->Caption) . "' And mgt_pedido_data <= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_fim->Caption) . "') ";
         $Comando_SQL .= " Order By mgt_pedido_produto_codigo Asc";
      }
      else
      {
         $Comando_SQL = "Select ";
         $Comando_SQL .= "SUM(mgt_pedido_produto_quantidade) AS mgt_pedido_produto_quantidade ";
         $Comando_SQL .= "From mgt_pedidos, mgt_pedidos_produtos Where ";
         $Comando_SQL .= "mgt_pedido_status <> 'Faturado' And mgt_pedido_produto_numero_pedido = mgt_pedido_numero And ";
         $Comando_SQL .= "(mgt_pedido_data >= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_ini->Caption) . "' And mgt_pedido_data <= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_fim->Caption) . "') ";
         $Comando_SQL .= " Order By mgt_pedido_produto_codigo Asc";
      }

      GetConexaoPrincipal()->SQL_MGT_Pedidos->Close();
      GetConexaoPrincipal()->SQL_MGT_Pedidos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Pedidos->Open();

      $this->mgt_pedido_produto_total_quantidade->Caption = GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_produto_quantidade'];

      //*** Gera o Relatorio ***

      if(trim($this->opcao_escolhida_tipo->Caption) == 'Cliente')
      {
         $Comando_SQL = "Select ";
         $Comando_SQL .= "mgt_pedido_numero, ";
         $Comando_SQL .= "mgt_pedido_cliente_codigo, ";
         $Comando_SQL .= "mgt_pedido_cliente_nome, ";
         $Comando_SQL .= "mgt_pedido_status, ";
         $Comando_SQL .= "date_format(mgt_pedido_data, '%d/%m/%Y') AS mgt_pedido_data, ";
         $Comando_SQL .= "mgt_pedido_produto_numero_pedido, ";
         $Comando_SQL .= "mgt_pedido_produto_codigo, ";
         $Comando_SQL .= "mgt_pedido_produto_referencia, ";
         $Comando_SQL .= "mgt_pedido_produto_descricao, ";
         $Comando_SQL .= "SUM(mgt_pedido_produto_quantidade) AS mgt_pedido_produto_quantidade ";
         $Comando_SQL .= "From mgt_pedidos, mgt_pedidos_produtos Where ";
         $Comando_SQL .= "mgt_pedido_cliente_numero = '" . trim($this->opcao_escolhida_codigo->Caption) . "' And ";
         $Comando_SQL .= "(mgt_pedido_data >= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_ini->Caption) . "' And mgt_pedido_data <= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_fim->Caption) . "') And ";
         $Comando_SQL .= "mgt_pedido_status <> 'Faturado' And mgt_pedido_produto_numero_pedido = mgt_pedido_numero ";
         $Comando_SQL .= "Group By mgt_pedido_data, mgt_pedido_cliente_codigo, mgt_pedido_numero, mgt_pedido_produto_codigo Order By mgt_pedido_produto_codigo Asc";
      }
      else if(trim($this->opcao_escolhida_tipo->Caption) == "Produto")
      {
         $Comando_SQL = "Select ";
         $Comando_SQL .= "mgt_pedido_numero, ";
         $Comando_SQL .= "mgt_pedido_cliente_codigo, ";
         $Comando_SQL .= "mgt_pedido_cliente_nome, ";
         $Comando_SQL .= "mgt_pedido_status, ";
         $Comando_SQL .= "date_format(mgt_pedido_data, '%d/%m/%Y') AS mgt_pedido_data, ";
         $Comando_SQL .= "mgt_pedido_produto_numero_pedido, ";
         $Comando_SQL .= "mgt_pedido_produto_codigo, ";
         $Comando_SQL .= "mgt_pedido_produto_referencia, ";
         $Comando_SQL .= "mgt_pedido_produto_descricao, ";
         $Comando_SQL .= "SUM(mgt_pedido_produto_quantidade) AS mgt_pedido_produto_quantidade ";
         $Comando_SQL .= "From mgt_pedidos, mgt_pedidos_produtos Where ";
         $Comando_SQL .= "mgt_pedido_status <> 'Faturado' And mgt_pedido_produto_numero_pedido = mgt_pedido_numero And ";
         $Comando_SQL .= "mgt_pedido_produto_codigo = '" . trim($this->opcao_escolhida_codigo->Caption) . "' And ";
         $Comando_SQL .= "(mgt_pedido_data >= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_ini->Caption) . "' And mgt_pedido_data <= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_fim->Caption) . "') ";
         $Comando_SQL .= "Group By mgt_pedido_data, mgt_pedido_cliente_codigo, mgt_pedido_numero, mgt_pedido_produto_codigo Order By mgt_pedido_produto_codigo Asc";
      }
      else
      {
         $this->opcao_escolhida_tipo->Caption = 'Todos';
         $this->opcao_escolhida_codigo->Caption = 'Todos';

         $Comando_SQL = "Select ";
         $Comando_SQL .= "mgt_pedido_numero, ";
         $Comando_SQL .= "mgt_pedido_cliente_codigo, ";
         $Comando_SQL .= "mgt_pedido_cliente_nome, ";
         $Comando_SQL .= "mgt_pedido_status, ";
         $Comando_SQL .= "date_format(mgt_pedido_data, '%d/%m/%Y') AS mgt_pedido_data, ";
         $Comando_SQL .= "mgt_pedido_produto_numero_pedido, ";
         $Comando_SQL .= "mgt_pedido_produto_codigo, ";
         $Comando_SQL .= "mgt_pedido_produto_referencia, ";
         $Comando_SQL .= "mgt_pedido_produto_descricao, ";
         $Comando_SQL .= "SUM(mgt_pedido_produto_quantidade) AS mgt_pedido_produto_quantidade ";
         $Comando_SQL .= "From mgt_pedidos, mgt_pedidos_produtos Where ";
         $Comando_SQL .= "mgt_pedido_status <> 'Faturado' And mgt_pedido_produto_numero_pedido = mgt_pedido_numero And ";
         $Comando_SQL .= "(mgt_pedido_data >= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_ini->Caption) . "' And mgt_pedido_data <= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_fim->Caption) . "') ";
         $Comando_SQL .= "Group By mgt_pedido_data, mgt_pedido_cliente_codigo, mgt_pedido_numero, mgt_pedido_produto_codigo Order By mgt_pedido_produto_codigo Asc";
      }

      GetConexaoPrincipal()->SQL_MGT_Pedidos->Close();
      GetConexaoPrincipal()->SQL_MGT_Pedidos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Pedidos->Open();
   }
   function venpedidospendentesimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $venpedidospendentesimp;

//Cria o formulario
$venpedidospendentesimp = new venpedidospendentesimp($application);

//Ler do arquivo de recursos
$venpedidospendentesimp->loadResource(__FILE__);

//Mostrar o formulario
$venpedidospendentesimp->show();

?>