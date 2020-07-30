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
class relimpostosimp extends Page
{
   public $logo_relatorio = null;
   public $mgt_nota_fiscal_total_imposto = null;
   public $mgt_nota_fiscal_total_geral = null;
   public $Label10 = null;
   public $Label7 = null;
   public $mgt_data_final = null;
   public $mgt_data_inicial = null;
   public $mgt_nota_fiscal_imposto = null;
   public $mgt_nota_fiscal_valor_total = null;
   public $mgt_nota_fiscal_cliente_codigo = null;
   public $Label6 = null;
   public $Label5 = null;
   public $mgt_nota_fiscal_numero = null;
   public $Label22 = null;
   public $Label1 = null;
   public $Label20 = null;
   public $Label16 = null;
   public $Label12 = null;
   public $mgt_nota_fiscal_data_emissao = null;
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

   function relimpostosimpCreate($sender, $params)
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
      $this->mgt_data_inicial->Caption = $_SESSION['imprime_data_inicial'];
      $this->mgt_data_final->Caption = $_SESSION['imprime_data_final'];
      $tipo = $_SESSION['imprime_tipo'];
      $cfops = $_SESSION['imprime_busca_cfop'];

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      //*** Gera o Total ***
      $Comando_SQL = "select *, ";
      $Comando_SQL .= "date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao, ";

      $Comando_SQL .= "sum(mgt_nota_fiscal_valor_total) AS mgt_nota_fiscal_total_geral, ";

      if($tipo == "IPI")
      {
         $Comando_SQL .= "sum(mgt_nota_fiscal_valor_ipi) AS mgt_nota_fiscal_total_imposto, ";
      }
      elseif($tipo == "ICMS")
      {
         $Comando_SQL .= "sum(mgt_nota_fiscal_valor_icms) AS mgt_nota_fiscal_total_imposto, ";
      }
      else
      {
         $Comando_SQL .= "format(((sum(mgt_nota_fiscal_valor_total) * mgt_imposto_taxa_porcentagem) / 100),2) AS mgt_nota_fiscal_total_imposto, ";
      }

      if($tipo == "PIS")
      {
         $this->relatorio_titulo->Caption = "Relatorio de Impostos - PIS";
         $Comando_SQL .= "format(((mgt_imposto_taxa_porcentagem * mgt_nota_fiscal_valor_total) / 100),2) as mgt_nota_fiscal_imposto ";
      }
      elseif($tipo == "COFINS")
      {
         $this->relatorio_titulo->Caption = "Relatorio de Impostos - COFINS";
         $Comando_SQL .= "format(((mgt_imposto_taxa_porcentagem * mgt_nota_fiscal_valor_total) / 100),2) as mgt_nota_fiscal_imposto ";
      }
      elseif($tipo == "ICMS")
      {
         $this->relatorio_titulo->Caption = "Relatorio de Impostos - ICMS";
         $Comando_SQL .= "mgt_nota_fiscal_valor_icms as mgt_nota_fiscal_imposto ";
      }
      elseif($tipo == "CSLL")
      {
         $this->relatorio_titulo->Caption = "Relatorio de Impostos - CSLL";
         $Comando_SQL .= "format(((mgt_imposto_taxa_porcentagem * mgt_nota_fiscal_valor_total) / 100),2) as mgt_nota_fiscal_imposto ";
      }
      elseif($tipo == "IRPJ")
      {
         $this->relatorio_titulo->Caption = "Relatorio de Impostos - IRPJ";
         $Comando_SQL .= "format(((mgt_imposto_taxa_porcentagem * mgt_nota_fiscal_valor_total) / 100),2) as mgt_nota_fiscal_imposto ";
      }
      elseif($tipo == "IPI")
      {
         $this->relatorio_titulo->Caption = "Relatorio de Impostos - IPI";
         $Comando_SQL .= "mgt_nota_fiscal_valor_ipi as mgt_nota_fiscal_imposto ";
      }

      $Comando_SQL .= "from mgt_notas_fiscais, mgt_impostos_taxas where ";
      $Comando_SQL .= "(";
      $Comando_SQL .= "mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "' and ";
      $Comando_SQL .= "mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "'";
      $Comando_SQL .= ") and ";

      if(trim($cfops) <> '')
      {
         $Comando_SQL .= "mgt_nota_fiscal_cfop IN (" . trim($cfops) . ") and ";
      }

      $Comando_SQL .= "mgt_imposto_taxa_tipo = '" . $tipo . "' ";
      $Comando_SQL .= "order by mgt_nota_fiscal_data_emissao";

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      $this->mgt_nota_fiscal_total_geral->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_total_geral'];
      $this->mgt_nota_fiscal_total_imposto->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_total_imposto'];

      //***Gera o Relatorio
      $Comando_SQL = "select *, ";
      $Comando_SQL .= "date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao, ";

      if($tipo == "PIS")
      {
         $this->relatorio_titulo->Caption = "Relatorio de Impostos - PIS";
         $Comando_SQL .= "format(((mgt_imposto_taxa_porcentagem * mgt_nota_fiscal_valor_total) / 100),2) as mgt_nota_fiscal_imposto ";
      }
      elseif($tipo == "COFINS")
      {
         $this->relatorio_titulo->Caption = "Relatorio de Impostos - COFINS";
         $Comando_SQL .= "format(((mgt_imposto_taxa_porcentagem * mgt_nota_fiscal_valor_total) / 100),2) as mgt_nota_fiscal_imposto ";
      }
      elseif($tipo == "ICMS")
      {
         $this->relatorio_titulo->Caption = "Relatorio de Impostos - ICMS";
         $Comando_SQL .= "mgt_nota_fiscal_valor_icms as mgt_nota_fiscal_imposto ";
      }
      elseif($tipo == "CSLL")
      {
         $this->relatorio_titulo->Caption = "Relatorio de Impostos - CSLL";
         $Comando_SQL .= "format(((mgt_imposto_taxa_porcentagem * mgt_nota_fiscal_valor_total) / 100),2) as mgt_nota_fiscal_imposto ";
      }
      elseif($tipo == "IRPJ")
      {
         $this->relatorio_titulo->Caption = "Relatorio de Impostos - IRPJ";
         $Comando_SQL .= "format(((mgt_imposto_taxa_porcentagem * mgt_nota_fiscal_valor_total) / 100),2) as mgt_nota_fiscal_imposto ";
      }
      elseif($tipo == "IPI")
      {
         $this->relatorio_titulo->Caption = "Relatorio de Impostos - IPI";
         $Comando_SQL .= "mgt_nota_fiscal_valor_ipi as mgt_nota_fiscal_imposto ";
      }

      $Comando_SQL .= "from mgt_notas_fiscais, mgt_impostos_taxas where ";
      $Comando_SQL .= "(";
      $Comando_SQL .= "mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "' and ";
      $Comando_SQL .= "mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "'";
      $Comando_SQL .= ") and ";

      if(trim($cfops) <> '')
      {
         $Comando_SQL .= "mgt_nota_fiscal_cfop IN (" . trim($cfops) . ") and ";
      }

      $Comando_SQL .= "mgt_imposto_taxa_tipo = '" . $tipo . "' ";
      $Comando_SQL .= "order by mgt_nota_fiscal_data_emissao";

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();
   }
   function relimpostosimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relimpostosimp;

//Cria o formulario
$relimpostosimp = new relimpostosimp($application);

//Ler do arquivo de recursos
$relimpostosimp->loadResource(__FILE__);

//Mostrar o formulario
$relimpostosimp->show();

?>