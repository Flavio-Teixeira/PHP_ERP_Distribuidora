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
class relentradasperiodoimp extends Page
{
   public $logo_relatorio = null;
   public $busca_razao_social = null;
   public $busca_estado = null;
   public $mgt_nota_fiscal_geral = null;
   public $mgt_nota_fiscal_geral_icms = null;
   public $mgt_nota_fiscal_geral_ipi = null;
   public $mgt_nota_fiscal_geral_pedido = null;
   public $Label32 = null;
   public $Label31 = null;
   public $Label27 = null;
   public $Label24 = null;
   public $Label23 = null;
   public $mgt_nota_fiscal_numero = null;
   public $Label22 = null;
   public $mgt_nota_fiscal_total_sem = null;
   public $mgt_nota_fiscal_total_sem_icms = null;
   public $mgt_nota_fiscal_total_sem_ipi = null;
   public $mgt_nota_fiscal_total_sem_pedido = null;
   public $Label26 = null;
   public $Label25 = null;
   public $Label21 = null;
   public $Label15 = null;
   public $Label13 = null;
   public $mgt_nota_fiscal_total = null;
   public $mgt_nota_fiscal_total_icms = null;
   public $mgt_nota_fiscal_total_ipi = null;
   public $mgt_nota_fiscal_total_pedido = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label1 = null;
   public $Label20 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $Label14 = null;
   public $Label12 = null;
   public $mgt_nota_fiscal_cliente_desconto = null;
   public $mgt_cliente_estado = null;
   public $mgt_nota_fiscal_valor_icms = null;
   public $mgt_nota_fiscal_data_final = null;
   public $mgt_nota_fiscal_data_inicial = null;
   public $mgt_nota_fiscal_valor_total = null;
   public $mgt_nota_fiscal_valor_ipi = null;
   public $mgt_nota_fiscal_valor_pedido = null;
   public $mgt_nota_fiscal_data_emissao = null;
   public $mgt_nota_fiscal_cliente_nome = null;
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

   function relentradasperiodoimpCreate($sender, $params)
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
      $this->mgt_nota_fiscal_data_inicial->Caption = $_SESSION['imprime_data_inicial'];
      $this->mgt_nota_fiscal_data_final->Caption = $_SESSION['imprime_data_final'];
      $this->busca_estado->Value = $_SESSION['imprime_busca_estado'];
      $this->busca_razao_social->Value = $_SESSION['imprime_busca_razao_social'];

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      //*** Seleciona as Notas ***

      $this->Linha_Detalhe->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
      $this->mgt_nota_fiscal_numero->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
      $this->mgt_nota_fiscal_cliente_nome->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
      $this->mgt_cliente_estado->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
      $this->mgt_nota_fiscal_data_emissao->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
      $this->mgt_nota_fiscal_cliente_desconto->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
      $this->mgt_nota_fiscal_valor_pedido->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
      $this->mgt_nota_fiscal_valor_ipi->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
      $this->mgt_nota_fiscal_valor_icms->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
      $this->mgt_nota_fiscal_valor_total->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');

      $this->mgt_nota_fiscal_numero->setDataField('mgt_nota_fiscal_numero');
      $this->mgt_nota_fiscal_cliente_nome->setDataField('mgt_nota_fiscal_cliente_nome');
      $this->mgt_cliente_estado->setDataField('mgt_cliente_estado');
      $this->mgt_nota_fiscal_data_emissao->setDataField('mgt_nota_fiscal_data_emissao');
      $this->mgt_nota_fiscal_cliente_desconto->setDataField('mgt_nota_fiscal_cliente_desconto');
      $this->mgt_nota_fiscal_valor_pedido->setDataField('mgt_nota_fiscal_valor_pedido');
      $this->mgt_nota_fiscal_valor_ipi->setDataField('mgt_nota_fiscal_valor_ipi');
      $this->mgt_nota_fiscal_valor_icms->setDataField('mgt_nota_fiscal_valor_icms');
      $this->mgt_nota_fiscal_valor_total->setDataField('mgt_nota_fiscal_valor_total');

      //*** Sem Valor Comercial ***
      //*** Gera o Total do Pedido ***

      if(trim($this->busca_estado->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Estado: ' . trim($this->busca_estado->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_pedido) AS mgt_nota_fiscal_total_pedido from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_estado = '" . trim($this->busca_estado->Value) . "') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Not Like '%VENDA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MAO DE OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MO/%' And mgt_nota_fiscal_natureza_operacao Not Like '%OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      elseif(trim($this->busca_razao_social->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Cliente: ' . trim($this->busca_razao_social->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_pedido) AS mgt_nota_fiscal_total_pedido from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_razao_social Like '%" . trim($this->busca_razao_social->Value) . "%') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Not Like '%VENDA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MAO DE OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MO/%' And mgt_nota_fiscal_natureza_operacao Not Like '%OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      else
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo';
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_pedido) AS mgt_nota_fiscal_total_pedido from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Not Like '%VENDA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MAO DE OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MO/%' And mgt_nota_fiscal_natureza_operacao Not Like '%OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      $this->mgt_nota_fiscal_total_sem_pedido->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_total_pedido'];

      //*** Gera o Total do IPI ***

      if(trim($this->busca_estado->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Estado: ' . trim($this->busca_estado->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_ipi) AS mgt_nota_fiscal_total_ipi from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_estado = '" . trim($this->busca_estado->Value) . "') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Not Like '%VENDA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MAO DE OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MO/%' And mgt_nota_fiscal_natureza_operacao Not Like '%OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      elseif(trim($this->busca_razao_social->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Cliente: ' . trim($this->busca_razao_social->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_ipi) AS mgt_nota_fiscal_total_ipi from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_razao_social Like '%" . trim($this->busca_razao_social->Value) . "%') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Not Like '%VENDA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MAO DE OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MO/%' And mgt_nota_fiscal_natureza_operacao Not Like '%OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      else
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo';
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_ipi) AS mgt_nota_fiscal_total_ipi from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Not Like '%VENDA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MAO DE OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MO/%' And mgt_nota_fiscal_natureza_operacao Not Like '%OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      $this->mgt_nota_fiscal_total_sem_ipi->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_total_ipi'];

      //*** Gera o Total do ICMS ***

      if(trim($this->busca_estado->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Estado: ' . trim($this->busca_estado->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_icms) AS mgt_nota_fiscal_total_icms from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_estado = '" . trim($this->busca_estado->Value) . "') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Not Like '%VENDA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MAO DE OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MO/%' And mgt_nota_fiscal_natureza_operacao Not Like '%OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      elseif(trim($this->busca_razao_social->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Cliente: ' . trim($this->busca_razao_social->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_icms) AS mgt_nota_fiscal_total_icms from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_razao_social Like '%" . trim($this->busca_razao_social->Value) . "%') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Not Like '%VENDA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MAO DE OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MO/%' And mgt_nota_fiscal_natureza_operacao Not Like '%OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      else
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo';
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_icms) AS mgt_nota_fiscal_total_icms from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Not Like '%VENDA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MAO DE OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MO/%' And mgt_nota_fiscal_natureza_operacao Not Like '%OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      $this->mgt_nota_fiscal_total_sem_icms->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_total_icms'];

      //*** Gera o Total ***

      if(trim($this->busca_estado->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Estado: ' . trim($this->busca_estado->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_total) AS mgt_nota_fiscal_total from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_estado = '" . trim($this->busca_estado->Value) . "') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Not Like '%VENDA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MAO DE OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MO/%' And mgt_nota_fiscal_natureza_operacao Not Like '%OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      elseif(trim($this->busca_razao_social->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Cliente: ' . trim($this->busca_razao_social->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_total) AS mgt_nota_fiscal_total from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_razao_social Like '%" . trim($this->busca_razao_social->Value) . "%') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Not Like '%VENDA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MAO DE OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MO/%' And mgt_nota_fiscal_natureza_operacao Not Like '%OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      else
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo';
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_total) AS mgt_nota_fiscal_total from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Not Like '%VENDA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MAO DE OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%MO/%' And mgt_nota_fiscal_natureza_operacao Not Like '%OBRA%' And mgt_nota_fiscal_natureza_operacao Not Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      $this->mgt_nota_fiscal_total_sem->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_total'];

      //*** Com Valor Comercial ***
      //*** Gera o Total do Pedido ***

      if(trim($this->busca_estado->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Estado: ' . trim($this->busca_estado->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_pedido) AS mgt_nota_fiscal_total_pedido from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_estado = '" . trim($this->busca_estado->Value) . "') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Like '%VENDA%' Or mgt_nota_fiscal_natureza_operacao Like '%MAO DE OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%MO/%' Or mgt_nota_fiscal_natureza_operacao Like '%OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      elseif(trim($this->busca_razao_social->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Cliente: ' . trim($this->busca_razao_social->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_pedido) AS mgt_nota_fiscal_total_pedido from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_razao_social Like '%" . trim($this->busca_razao_social->Value) . "%') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Like '%VENDA%' Or mgt_nota_fiscal_natureza_operacao Like '%MAO DE OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%MO/%' Or mgt_nota_fiscal_natureza_operacao Like '%OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      else
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo';
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_pedido) AS mgt_nota_fiscal_total_pedido from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Like '%VENDA%' Or mgt_nota_fiscal_natureza_operacao Like '%MAO DE OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%MO/%' Or mgt_nota_fiscal_natureza_operacao Like '%OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      $this->mgt_nota_fiscal_total_pedido->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_total_pedido'];

      //*** Gera o Total do IPI ***

      if(trim($this->busca_estado->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Estado: ' . trim($this->busca_estado->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_ipi) AS mgt_nota_fiscal_total_ipi from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_estado = '" . trim($this->busca_estado->Value) . "') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Like '%VENDA%' Or mgt_nota_fiscal_natureza_operacao Like '%MAO DE OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%MO/%' Or mgt_nota_fiscal_natureza_operacao Like '%OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      elseif(trim($this->busca_razao_social->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Cliente: ' . trim($this->busca_razao_social->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_ipi) AS mgt_nota_fiscal_total_ipi from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_razao_social Like '%" . trim($this->busca_razao_social->Value) . "%') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Like '%VENDA%' Or mgt_nota_fiscal_natureza_operacao Like '%MAO DE OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%MO/%' Or mgt_nota_fiscal_natureza_operacao Like '%OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      else
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo';
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_ipi) AS mgt_nota_fiscal_total_ipi from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Like '%VENDA%' Or mgt_nota_fiscal_natureza_operacao Like '%MAO DE OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%MO/%' Or mgt_nota_fiscal_natureza_operacao Like '%OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      $this->mgt_nota_fiscal_total_ipi->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_total_ipi'];

      //*** Gera o Total do ICMS ***

      if(trim($this->busca_estado->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Estado: ' . trim($this->busca_estado->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_icms) AS mgt_nota_fiscal_total_icms from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_estado = '" . trim($this->busca_estado->Value) . "') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Like '%VENDA%' Or mgt_nota_fiscal_natureza_operacao Like '%MAO DE OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%MO/%' Or mgt_nota_fiscal_natureza_operacao Like '%OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      elseif(trim($this->busca_razao_social->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Cliente: ' . trim($this->busca_razao_social->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_icms) AS mgt_nota_fiscal_total_icms from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_razao_social Like '%" . trim($this->busca_razao_social->Value) . "%') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Like '%VENDA%' Or mgt_nota_fiscal_natureza_operacao Like '%MAO DE OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%MO/%' Or mgt_nota_fiscal_natureza_operacao Like '%OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      else
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo';
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_icms) AS mgt_nota_fiscal_total_icms from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Like '%VENDA%' Or mgt_nota_fiscal_natureza_operacao Like '%MAO DE OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%MO/%' Or mgt_nota_fiscal_natureza_operacao Like '%OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      $this->mgt_nota_fiscal_total_icms->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_total_icms'];

      //*** Gera o Total ***

      if(trim($this->busca_estado->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Estado: ' . trim($this->busca_estado->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_total) AS mgt_nota_fiscal_total from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_estado = '" . trim($this->busca_estado->Value) . "') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Like '%VENDA%' Or mgt_nota_fiscal_natureza_operacao Like '%MAO DE OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%MO/%' Or mgt_nota_fiscal_natureza_operacao Like '%OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      elseif(trim($this->busca_razao_social->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Cliente: ' . trim($this->busca_razao_social->Value);
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_total) AS mgt_nota_fiscal_total from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_razao_social Like '%" . trim($this->busca_razao_social->Value) . "%') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Like '%VENDA%' Or mgt_nota_fiscal_natureza_operacao Like '%MAO DE OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%MO/%' Or mgt_nota_fiscal_natureza_operacao Like '%OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      else
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo';
         $Comando_SQL = "select sum(mgt_nota_fiscal_valor_total) AS mgt_nota_fiscal_total from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and (mgt_nota_fiscal_natureza_operacao Like '%VENDA%' Or mgt_nota_fiscal_natureza_operacao Like '%MAO DE OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%MO/%' Or mgt_nota_fiscal_natureza_operacao Like '%OBRA%' Or mgt_nota_fiscal_natureza_operacao Like '%EXPORTA%') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      $this->mgt_nota_fiscal_total->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_total'];

      //*** Gera o Total Geral ***

      $this->mgt_nota_fiscal_geral_pedido->Caption = number_format(($this->mgt_nota_fiscal_total_sem_pedido->Caption + $this->mgt_nota_fiscal_total_pedido->Caption), "2", ".", "");

      $this->mgt_nota_fiscal_geral_ipi->Caption = number_format(($this->mgt_nota_fiscal_total_sem_ipi->Caption + $this->mgt_nota_fiscal_total_ipi->Caption), "2", ".", "");

      $this->mgt_nota_fiscal_geral_icms->Caption = number_format(($this->mgt_nota_fiscal_total_sem_icms->Caption + $this->mgt_nota_fiscal_total_icms->Caption), "2", ".", "");

      $this->mgt_nota_fiscal_geral->Caption = number_format(($this->mgt_nota_fiscal_total_sem->Caption + $this->mgt_nota_fiscal_total->Caption), "2", ".", "");

      //*** Gera o Relatorio ***

      if(trim($this->busca_estado->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Estado: ' . trim($this->busca_estado->Value);
         $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_estado = '" . trim($this->busca_estado->Value) . "') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      elseif(trim($this->busca_razao_social->Value) <> '')
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo - Cliente: ' . trim($this->busca_razao_social->Value);
         $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_razao_social Like '%" . trim($this->busca_razao_social->Value) . "%') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }
      else
      {
         $this->relatorio_titulo->Caption = 'Relatorio de Entradas Emitidas por Periodo';
         $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao from mgt_notas_fiscais, mgt_clientes where (mgt_nota_fiscal_tipo_nota = '0') and (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_inicial->Caption)) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_final->Caption)) . "') and mgt_cliente_numero = mgt_nota_fiscal_cliente_numero order by mgt_nota_fiscal_data_emissao";
      }

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();
   }
   function relentradasperiodoimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relentradasperiodoimp;

//Cria o formulario
$relentradasperiodoimp = new relentradasperiodoimp($application);

//Ler do arquivo de recursos
$relentradasperiodoimp->loadResource(__FILE__);

//Mostrar o formulario
$relentradasperiodoimp->show();

?>