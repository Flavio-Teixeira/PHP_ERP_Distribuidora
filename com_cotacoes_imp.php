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

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Definicao de classe
class comcotacoesimp extends Page
{
   public $logo_relatorio = null;
   public $mgt_pedido_status = null;
   public $Label8 = null;
   public $mgt_pedido_produto_valor_total = null;
   public $mgt_pedido_produto_valor_unitario = null;
   public $mgt_pedido_produto_quantidade = null;
   public $mgt_pedido_produto_valor_ipi = null;
   public $mgt_pedido_produto_ipi = null;
   public $mgt_pedido_produto_unidade = null;
   public $mgt_pedido_produto_lote = null;
   public $mgt_pedido_produto_descricao = null;
   public $mgt_pedido_produto_referencia = null;
   public $mgt_pedido_produto_codigo = null;
   public $Label44 = null;
   public $Label49 = null;
   public $Label45 = null;
   public $Label47 = null;
   public $Label43 = null;
   public $Label11 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label1 = null;
   public $mgt_pedido_valor_total = null;
   public $mgt_pedido_valor_ipi = null;
   public $mgt_pedido_valor_frete = null;
   public $mgt_pedido_valor_desconto = null;
   public $mgt_pedido_valor_pedido = null;
   public $Label14 = null;
   public $Label42 = null;
   public $Label41 = null;
   public $Label40 = null;
   public $Label39 = null;
   public $Label38 = null;
   public $Label37 = null;
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
   public $Label36 = null;
   public $mgt_pedido_cliente_transportadora = null;
   public $mgt_pedido_observacao = null;
   public $mgt_pedido_ordem_compra = null;
   public $mgt_pedido_cliente_tipo_faturamento = null;
   public $mgt_pedido_data_entrega = null;
   public $mgt_pedido_data = null;
   public $mgt_pedido_cliente_desconto = null;
   public $Label46 = null;
   public $Label48 = null;
   public $Label35 = null;
   public $Label34 = null;
   public $Label33 = null;
   public $Label32 = null;
   public $Label31 = null;
   public $Label30 = null;
   public $mgt_pedido_cliente_nome = null;
   public $mgt_pedido_cliente_codigo = null;
   public $mgt_pedido_cliente_numero = null;
   public $Label29 = null;
   public $Label28 = null;
   public $Label2 = null;
   public $apelido_empresa = null;
   public $relatorio_titulo = null;
   public $rel_hora = null;
   public $rel_data = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Linha_Detalhe = null;

   function comcotacoesimpCreate($sender, $params)
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

      //*** Carrega o Nome da Empresa no Relatorio ***

      $this->apelido_empresa->Caption = $_SESSION['login_empresa'];

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      //*** Titulo do Relatorio ***

      $mgt_pedido_numero = $_REQUEST['mgt_pedido_numero'];
      $this->relatorio_titulo->Caption = 'Cotacao - Nro.: ' . trim($mgt_pedido_numero);
      $this->Caption = 'Cotacao_' . trim($mgt_pedido_numero);
   }
   function comcotacoesimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $comcotacoesimp;

//Cria o formulario
$comcotacoesimp = new comcotacoesimp($application);

//Ler do arquivo de recursos
$comcotacoesimp->loadResource(__FILE__);

//Mostrar o formulario
$comcotacoesimp->show();

?>