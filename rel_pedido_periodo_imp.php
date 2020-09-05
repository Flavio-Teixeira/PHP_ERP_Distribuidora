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
class relpedidoperiodoimp extends Page
{
   public $logo_relatorio = null;
   public $mgt_pedido_numero = null;
   public $Label10 = null;
   public $mgt_pedido_total = null;
   public $mgt_pedido_total_ipi = null;
   public $mgt_pedido_total_pedido = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label1 = null;
   public $Label20 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $Label15 = null;
   public $Label12 = null;
   public $mgt_cliente_estado = null;
   public $mgt_pedido_valor_total = null;
   public $mgt_pedido_valor_ipi = null;
   public $mgt_pedido_valor_pedido = null;
   public $mgt_pedido_cliente_desconto = null;
   public $mgt_pedido_data = null;
   public $mgt_pedido_cliente_nome = null;
   public $mgt_pedido_data_inicial = null;
   public $mgt_pedido_data_final = null;
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

   function relpedidoperiodoimpCreate($sender, $params)
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
      $this->mgt_pedido_data_inicial->Caption = $_SESSION['imprime_data_inicial'];
      $this->mgt_pedido_data_final->Caption = $_SESSION['imprime_data_final'];

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      //*** Seleciona as Notas ***

      $this->Linha_Detalhe->setDataSource('conexaoprincipal.DS_MGT_Pedidos');
      $this->mgt_pedido_numero->setDataSource('conexaoprincipal.DS_MGT_Pedidos');
      $this->mgt_pedido_cliente_nome->setDataSource('conexaoprincipal.DS_MGT_Pedidos');
      $this->mgt_cliente_estado->setDataSource('conexaoprincipal.DS_MGT_Pedidos');
      $this->mgt_pedido_data->setDataSource('conexaoprincipal.DS_MGT_Pedidos');
      $this->mgt_pedido_cliente_desconto->setDataSource('conexaoprincipal.DS_MGT_Pedidos');
      $this->mgt_pedido_valor_pedido->setDataSource('conexaoprincipal.DS_MGT_Pedidos');
      $this->mgt_pedido_valor_ipi->setDataSource('conexaoprincipal.DS_MGT_Pedidos');
      $this->mgt_pedido_valor_total->setDataSource('conexaoprincipal.DS_MGT_Pedidos');

      $this->mgt_pedido_numero->setDataField('mgt_pedido_numero');
      $this->mgt_pedido_cliente_nome->setDataField('mgt_pedido_cliente_nome');
      $this->mgt_cliente_estado->setDataField('mgt_cliente_estado');
      $this->mgt_pedido_data->setDataField('mgt_pedido_data');
      $this->mgt_pedido_cliente_desconto->setDataField('mgt_pedido_cliente_desconto');
      $this->mgt_pedido_valor_pedido->setDataField('mgt_pedido_valor_pedido');
      $this->mgt_pedido_valor_ipi->setDataField('mgt_pedido_valor_ipi');
      $this->mgt_pedido_valor_total->setDataField('mgt_pedido_valor_total');

      //*** Gera o Total do Pedido ***

      $Comando_SQL = "select sum(mgt_pedido_valor_pedido) AS mgt_pedido_total_pedido from mgt_pedidos, mgt_clientes where mgt_pedido_data >= '" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data_inicial->Caption)) . "' and mgt_pedido_data <= '" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data_final->Caption)) . "' and mgt_cliente_numero = mgt_pedido_cliente_numero order by mgt_pedido_numero";

      GetConexaoPrincipal()->SQL_MGT_Pedidos->Close();
      GetConexaoPrincipal()->SQL_MGT_Pedidos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Pedidos->Open();

      $this->mgt_pedido_total_pedido->Caption = GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_total_pedido'];

      //*** Gera o Total do IPI ***

      $Comando_SQL = "select sum(mgt_pedido_valor_ipi) AS mgt_pedido_total_ipi from mgt_pedidos, mgt_clientes where mgt_pedido_data >= '" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data_inicial->Caption)) . "' and mgt_pedido_data <= '" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data_final->Caption)) . "' and mgt_cliente_numero = mgt_pedido_cliente_numero order by mgt_pedido_numero";

      GetConexaoPrincipal()->SQL_MGT_Pedidos->Close();
      GetConexaoPrincipal()->SQL_MGT_Pedidos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Pedidos->Open();

      $this->mgt_pedido_total_ipi->Caption = GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_total_ipi'];

      //*** Gera o Total ***

      $Comando_SQL = "select sum(mgt_pedido_valor_total) AS mgt_pedido_total from mgt_pedidos, mgt_clientes where mgt_pedido_data >= '" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data_inicial->Caption)) . "' and mgt_pedido_data <= '" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data_final->Caption)) . "' and mgt_cliente_numero = mgt_pedido_cliente_numero order by mgt_pedido_numero";

      GetConexaoPrincipal()->SQL_MGT_Pedidos->Close();
      GetConexaoPrincipal()->SQL_MGT_Pedidos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Pedidos->Open();

      $this->mgt_pedido_total->Caption = GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_total'];

      //*** Gera o Relatorio ***

      $Comando_SQL = "select *,date_format(mgt_pedido_data, '%d/%m/%Y') AS mgt_pedido_data from mgt_pedidos, mgt_clientes where mgt_pedido_data >= '" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data_inicial->Caption)) . "' and mgt_pedido_data <= '" . inverte_data_dma_to_amd(trim($this->mgt_pedido_data_final->Caption)) . "' and mgt_cliente_numero = mgt_pedido_cliente_numero order by mgt_pedido_numero";

      GetConexaoPrincipal()->SQL_MGT_Pedidos->Close();
      GetConexaoPrincipal()->SQL_MGT_Pedidos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Pedidos->Open();
   }
   function relpedidoperiodoimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relpedidoperiodoimp;

//Cria o formulario
$relpedidoperiodoimp = new relpedidoperiodoimp($application);

//Ler do arquivo de recursos
$relpedidoperiodoimp->loadResource(__FILE__);

//Mostrar o formulario
$relpedidoperiodoimp->show();

?>