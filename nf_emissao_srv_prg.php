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
class nfemissaosrvprg extends Page
{
   public $logo_relatorio = null;
   public $mgt_cliente_fone_entrega = null;
   public $mgt_cliente_cep_entrega = null;
   public $mgt_cliente_estado_entrega = null;
   public $mgt_cliente_cidade_entrega = null;
   public $mgt_cliente_bairro_entrega = null;
   public $mgt_cliente_complemento_entrega = null;
   public $mgt_cliente_endereco_entrega = null;
   public $Label12 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $mgt_programada_produto_valor_total = null;
   public $mgt_programada_produto_valor_unitario = null;
   public $mgt_programada_produto_quantidade = null;
   public $mgt_programada_produto_unidade = null;
   public $mgt_programada_produto_lote = null;
   public $mgt_programada_produto_descricao = null;
   public $mgt_programada_produto_referencia = null;
   public $mgt_programada_produto_codigo = null;
   public $mgt_programada_dup_vlr_12 = null;
   public $mgt_programada_dup_vlr_11 = null;
   public $mgt_programada_dup_vlr_10 = null;
   public $mgt_programada_dup_vlr_9 = null;
   public $mgt_programada_dup_vlr_8 = null;
   public $mgt_programada_dup_vlr_7 = null;
   public $mgt_programada_dup_vlr_6 = null;
   public $mgt_programada_dup_vlr_5 = null;
   public $mgt_programada_dup_vlr_4 = null;
   public $mgt_programada_dup_vlr_3 = null;
   public $mgt_programada_dup_vlr_2 = null;
   public $mgt_programada_dup_vlr_1 = null;
   public $mgt_programada_dup_dt_vcto_12 = null;
   public $mgt_programada_dup_dt_vcto_11 = null;
   public $mgt_programada_dup_dt_vcto_10 = null;
   public $mgt_programada_dup_dt_vcto_9 = null;
   public $mgt_programada_dup_dt_vcto_8 = null;
   public $mgt_programada_dup_dt_vcto_7 = null;
   public $mgt_programada_dup_dt_vcto_6 = null;
   public $mgt_programada_dup_dt_vcto_5 = null;
   public $mgt_programada_dup_dt_vcto_4 = null;
   public $mgt_programada_dup_dt_vcto_3 = null;
   public $mgt_programada_dup_dt_vcto_2 = null;
   public $mgt_programada_dup_dt_vcto_1 = null;
   public $mgt_programada_dup_nro_12 = null;
   public $mgt_programada_dup_nro_11 = null;
   public $mgt_programada_dup_nro_10 = null;
   public $mgt_programada_dup_nro_9 = null;
   public $mgt_programada_dup_nro_8 = null;
   public $mgt_programada_dup_nro_7 = null;
   public $mgt_programada_dup_nro_6 = null;
   public $mgt_programada_dup_nro_5 = null;
   public $mgt_programada_dup_nro_4 = null;
   public $mgt_programada_dup_nro_3 = null;
   public $mgt_programada_dup_nro_2 = null;
   public $mgt_programada_dup_nro_1 = null;
   public $mgt_programada_valor_total = null;
   public $mgt_programada_valor_ipi = null;
   public $mgt_programada_valor_frete = null;
   public $mgt_programada_valor_desconto = null;
   public $mgt_programada_valor_pedido = null;
   public $mgt_programada_observacao_nota = null;
   public $mgt_programada_ordem_compra = null;
   public $mgt_programada_data_emissao = null;
   public $mgt_programada_data_entrega = null;
   public $mgt_programada_data = null;
   public $mgt_programada_cliente_desconto = null;
   public $mgt_programada_razao_social = null;
   public $mgt_programada_cliente_numero = null;
   public $mgt_programada_cliente_codigo = null;
   public $Label8 = null;
   public $Label45 = null;
   public $Label47 = null;
   public $Label43 = null;
   public $Label11 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label1 = null;
   public $Label14 = null;
   public $Label42 = null;
   public $Label41 = null;
   public $Label40 = null;
   public $Label39 = null;
   public $Label38 = null;
   public $Label37 = null;
   public $Label36 = null;
   public $Label46 = null;
   public $Label35 = null;
   public $Label33 = null;
   public $Label32 = null;
   public $Label31 = null;
   public $Label30 = null;
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

   function nfemissaosrvprgCreate($sender, $params)
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

      $mgt_programada_numero = $_REQUEST['mgt_programada_numero'];
      $this->relatorio_titulo->Caption = 'Venda Programada (Servicos) - Nro.: ' . trim($mgt_programada_numero);
      $this->Caption = 'Venda_Programada_'.trim($mgt_programada_numero);

      //*** Seleciona a Venda Programada ***
      $Comando_SQL = "select *,IF(mgt_programada_dup_dt_vcto_1 <> '0000-00-00',date_format(mgt_programada_dup_dt_vcto_1, '%d/%m/%Y'),'') AS mgt_programada_dup_dt_vcto_1, IF(mgt_programada_dup_dt_vcto_2 <> '0000-00-00',date_format(mgt_programada_dup_dt_vcto_2, '%d/%m/%Y'),'') AS mgt_programada_dup_dt_vcto_2, IF(mgt_programada_dup_dt_vcto_3 <> '0000-00-00',date_format(mgt_programada_dup_dt_vcto_3, '%d/%m/%Y'),'') AS mgt_programada_dup_dt_vcto_3, IF(mgt_programada_dup_dt_vcto_4 <> '0000-00-00',date_format(mgt_programada_dup_dt_vcto_4, '%d/%m/%Y'),'') AS mgt_programada_dup_dt_vcto_4, IF(mgt_programada_dup_dt_vcto_5 <> '0000-00-00',date_format(mgt_programada_dup_dt_vcto_5, '%d/%m/%Y'),'') AS mgt_programada_dup_dt_vcto_5, IF(mgt_programada_dup_dt_vcto_6 <> '0000-00-00',date_format(mgt_programada_dup_dt_vcto_6, '%d/%m/%Y'),'') AS mgt_programada_dup_dt_vcto_6, IF(mgt_programada_dup_dt_vcto_7 <> '0000-00-00',date_format(mgt_programada_dup_dt_vcto_7, '%d/%m/%Y'),'') AS mgt_programada_dup_dt_vcto_7, IF(mgt_programada_dup_dt_vcto_8 <> '0000-00-00',date_format(mgt_programada_dup_dt_vcto_8, '%d/%m/%Y'),'') AS mgt_programada_dup_dt_vcto_8, IF(mgt_programada_dup_dt_vcto_9 <> '0000-00-00',date_format(mgt_programada_dup_dt_vcto_9, '%d/%m/%Y'),'') AS mgt_programada_dup_dt_vcto_9, IF(mgt_programada_dup_dt_vcto_10 <> '0000-00-00',date_format(mgt_programada_dup_dt_vcto_10, '%d/%m/%Y'),'') AS mgt_programada_dup_dt_vcto_10, IF(mgt_programada_dup_dt_vcto_11 <> '0000-00-00',date_format(mgt_programada_dup_dt_vcto_11, '%d/%m/%Y'),'') AS mgt_programada_dup_dt_vcto_11, IF(mgt_programada_dup_dt_vcto_12 <> '0000-00-00',date_format(mgt_programada_dup_dt_vcto_12, '%d/%m/%Y'),'') AS mgt_programada_dup_dt_vcto_12, IF(mgt_programada_dup_vlr_1 > 0,mgt_programada_dup_vlr_1,'') AS mgt_programada_dup_vlr_1, IF(mgt_programada_dup_vlr_2 > 0,mgt_programada_dup_vlr_2,'') AS mgt_programada_dup_vlr_2, IF(mgt_programada_dup_vlr_3 > 0,mgt_programada_dup_vlr_3,'') AS mgt_programada_dup_vlr_3, IF(mgt_programada_dup_vlr_4 > 0,mgt_programada_dup_vlr_4,'') AS mgt_programada_dup_vlr_4, IF(mgt_programada_dup_vlr_5 > 0,mgt_programada_dup_vlr_5,'') AS mgt_programada_dup_vlr_5, IF(mgt_programada_dup_vlr_6 > 0,mgt_programada_dup_vlr_6,'') AS mgt_programada_dup_vlr_6, IF(mgt_programada_dup_vlr_7 > 0,mgt_programada_dup_vlr_7,'') AS mgt_programada_dup_vlr_7, IF(mgt_programada_dup_vlr_8 > 0,mgt_programada_dup_vlr_8,'') AS mgt_programada_dup_vlr_8, IF(mgt_programada_dup_vlr_9 > 0,mgt_programada_dup_vlr_9,'') AS mgt_programada_dup_vlr_9, IF(mgt_programada_dup_vlr_10 > 0,mgt_programada_dup_vlr_10,'') AS mgt_programada_dup_vlr_10, IF(mgt_programada_dup_vlr_11 > 0,mgt_programada_dup_vlr_11,'') AS mgt_programada_dup_vlr_11, IF(mgt_programada_dup_vlr_12 > 0,mgt_programada_dup_vlr_12,'') AS mgt_programada_dup_vlr_12, date_format(mgt_programada_data_emissao, '%d/%m/%Y') AS mgt_programada_data_emissao,date_format(mgt_programada_data, '%d/%m/%Y') AS mgt_programada_data,date_format(mgt_programada_data_entrega, '%d/%m/%Y') AS mgt_programada_data_entrega from mgt_programadas, mgt_clientes where mgt_programada_numero = " . trim($mgt_programada_numero) . " and mgt_programada_cliente_numero = mgt_cliente_numero";

      GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
      GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

      //*** Seleciona os Produtos da Venda Programada ***
      $Comando_SQL = "select * from mgt_programadas_produtos where mgt_programada_produto_numero_nota = " . trim($mgt_programada_numero) . " Order By mgt_programada_produto_numero";

      GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Open();
   }
   function nfemissaosrvprgJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfemissaosrvprg;

//Cria o formulario
$nfemissaosrvprg = new nfemissaosrvprg($application);

//Ler do arquivo de recursos
$nfemissaosrvprg->loadResource(__FILE__);

//Mostrar o formulario
$nfemissaosrvprg->show();

?>