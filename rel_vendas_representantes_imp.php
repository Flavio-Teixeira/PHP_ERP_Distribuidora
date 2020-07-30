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
class relvendasrepresentantesimp extends Page
{
   public $logo_relatorio = null;
   public $mgt_swap_comissao_comissao_total = null;
   public $mgt_swap_comissao_vlr_icms_total = null;
   public $mgt_swap_comissao_vlr_total = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $representante_comisao = null;
   public $Label7 = null;
   public $mgt_swap_comissao_comissao = null;
   public $mgt_swap_comissao_vlr_icms = null;
   public $mgt_swap_comissao_vlr = null;
   public $mgt_swap_comissao_cliente = null;
   public $mgt_swap_comissao_data = null;
   public $mgt_swap_comissao_nro_duplicata = null;
   public $representante_nome = null;
   public $representante_codigo = null;
   public $data_final = null;
   public $data_inicial = null;
   public $Label19 = null;
   public $Label16 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label1 = null;
   public $Label22 = null;
   public $Label18 = null;
   public $Label12 = null;
   public $apelido_empresa = null;
   public $relatorio_titulo = null;
   public $rel_hora = null;
   public $rel_data = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Linha_Detalhe = null;

   function relvendasrepresentantesimpCreate($sender, $params)
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

      //*** Carrega o Nome da Empresa no Relatorio e os Dados de Busca ***

      $this->apelido_empresa->Caption = $_SESSION['login_empresa'];
      $this->data_inicial->Caption = $_SESSION['imprime_data_inicial'];
      $this->data_final->Caption = $_SESSION['imprime_data_final'];
      $this->representante_codigo->Caption = $_SESSION['imprime_representante_codigo'];
      $this->representante_nome->Caption = $_SESSION['imprime_representante_nome'];
      $cfops = $_SESSION['imprime_busca_cfop'];

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      $Comando_SQL = "select * from mgt_representantes where mgt_representante_codigo = '" . trim($this->representante_codigo->Caption) . "'";

      GetConexaoPrincipal()->SQL_MGT_Representantes->Close();
      GetConexaoPrincipal()->SQL_MGT_Representantes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Representantes->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Representantes->EOF) != 1)
      {
         $this->representante_comisao->Caption = GetConexaoPrincipal()->SQL_MGT_Representantes->Fields['mgt_representante_1_porcentagem'];
      }

      //*** Limpa a Tabela de Cobrancas ***

      $Comando_SQL = "TRUNCATE TABLE mgt_swap_comissoes";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Seleciona as Notas Fiscais Vendidas ***

      if(trim($cfops) <> '')
      {
         $Comando_SQL = "Select * from mgt_notas_fiscais, mgt_representantes Where ";
         $Comando_SQL .= "(";
         $Comando_SQL .= "(mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->data_inicial->Caption)) . "') And ";
         $Comando_SQL .= "(mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->data_final->Caption)) . "')";
         $Comando_SQL .= ") and ";
         $Comando_SQL .= "(mgt_nota_fiscal_cfop IN (" . trim($cfops) . ")) and ";
         $Comando_SQL .= "(mgt_nota_fiscal_representante = '" . trim($this->representante_codigo->Caption) . "') and ";
         $Comando_SQL .= "(mgt_representante_codigo = '" . trim($this->representante_codigo->Caption) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_representante = mgt_representante_codigo) ";
         $Comando_SQL .= "Order By mgt_nota_fiscal_data_emissao ASC, mgt_nota_fiscal_numero ASC";
      }
      else
      {
         $Comando_SQL = "Select * from mgt_notas_fiscais, mgt_representantes Where ";
         $Comando_SQL .= "(";
         $Comando_SQL .= "(mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->data_inicial->Caption)) . "') And ";
         $Comando_SQL .= "(mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->data_final->Caption)) . "')";
         $Comando_SQL .= ") and ";
         $Comando_SQL .= "(mgt_nota_fiscal_representante = '" . trim($this->representante_codigo->Caption) . "') and ";
         $Comando_SQL .= "(mgt_representante_codigo = '" . trim($this->representante_codigo->Caption) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_representante = mgt_representante_codigo) ";
         $Comando_SQL .= "Order By mgt_nota_fiscal_data_emissao ASC, mgt_nota_fiscal_numero ASC";
      }

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
         {
            $Comando_SQL = "Insert into mgt_swap_comissoes(";
            $Comando_SQL .= "mgt_swap_comissao_nro_duplicata, ";
            $Comando_SQL .= "mgt_swap_comissao_data, ";
            $Comando_SQL .= "mgt_swap_comissao_vencimento, ";
            $Comando_SQL .= "mgt_swap_comissao_cliente, ";
            $Comando_SQL .= "mgt_swap_comissao_vlr, ";
            $Comando_SQL .= "mgt_swap_comissao_vlr_icms, ";
            $Comando_SQL .= "mgt_swap_comissao_comissao)";
            $Comando_SQL .= " Values(";

            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
            $Comando_SQL .= "'0000-00-00',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
            $Comando_SQL .= "'" . (GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'] - GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms_sub']) . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms'] . "',";
            $Comando_SQL .= "'" . (((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'] - GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms_sub']) * GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_representante_1_porcentagem']) / 100) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
         }
      }

      //*** Seleciona as Vendas Programadas ***

      if(trim($cfops) <> '')
      {
         $Comando_SQL = "Select * from mgt_programadas, mgt_representantes Where ";
         $Comando_SQL .= "(";
         $Comando_SQL .= "(mgt_programada_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->data_inicial->Caption)) . "') And ";
         $Comando_SQL .= "(mgt_programada_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->data_final->Caption)) . "')";
         $Comando_SQL .= ") and ";
         $Comando_SQL .= "(mgt_programada_cfop IN (" . trim($cfops) . ")) and ";
         $Comando_SQL .= "(mgt_programada_representante = '" . trim($this->representante_codigo->Caption) . "') and ";
         $Comando_SQL .= "(mgt_representante_codigo = '" . trim($this->representante_codigo->Caption) . "') and ";
         $Comando_SQL .= "(mgt_programada_representante = mgt_representante_codigo) ";
         $Comando_SQL .= "Order By mgt_programada_data_emissao ASC, mgt_programada_numero ASC";
      }
      else
      {
         $Comando_SQL = "Select * from mgt_programadas, mgt_representantes Where ";
         $Comando_SQL .= "(";
         $Comando_SQL .= "(mgt_programada_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->data_inicial->Caption)) . "') And ";
         $Comando_SQL .= "(mgt_programada_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->data_final->Caption)) . "')";
         $Comando_SQL .= ") and ";
         $Comando_SQL .= "(mgt_programada_representante = '" . trim($this->representante_codigo->Caption) . "') and ";
         $Comando_SQL .= "(mgt_representante_codigo = '" . trim($this->representante_codigo->Caption) . "') and ";
         $Comando_SQL .= "(mgt_programada_representante = mgt_representante_codigo) ";
         $Comando_SQL .= "Order By mgt_programada_data_emissao ASC, mgt_programada_numero ASC";
      }

      GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
      GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
         {
            $Comando_SQL = "Insert into mgt_swap_comissoes(";
            $Comando_SQL .= "mgt_swap_comissao_nro_duplicata, ";
            $Comando_SQL .= "mgt_swap_comissao_data, ";
            $Comando_SQL .= "mgt_swap_comissao_vencimento, ";
            $Comando_SQL .= "mgt_swap_comissao_cliente, ";
            $Comando_SQL .= "mgt_swap_comissao_vlr, ";
            $Comando_SQL .= "mgt_swap_comissao_vlr_icms, ";
            $Comando_SQL .= "mgt_swap_comissao_comissao)";
            $Comando_SQL .= " Values(";

            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
            $Comando_SQL .= "'0000-00-00',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_total'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_icms'] . "',";
            $Comando_SQL .= "'" . ((GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_total'] * GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_representante_1_porcentagem']) / 100) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            GetConexaoPrincipal()->SQL_MGT_Programadas->Next();
         }
      }

      //*** Gera o Total ***

      $Comando_SQL = "select sum(mgt_swap_comissao_vlr) as mgt_swap_comissao_vlr_total from mgt_swap_comissoes order by mgt_swap_comissao_numero";

      GetConexaoPrincipal()->SQL_MGT_Comissoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Comissoes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Comissoes->Open();

      $this->mgt_swap_comissao_vlr_total->Caption = GetConexaoPrincipal()->SQL_MGT_Comissoes->Fields['mgt_swap_comissao_vlr_total'];

      $Comando_SQL = "select sum(mgt_swap_comissao_vlr_icms) as mgt_swap_comissao_vlr_icms_total from mgt_swap_comissoes order by mgt_swap_comissao_numero";

      GetConexaoPrincipal()->SQL_MGT_Comissoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Comissoes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Comissoes->Open();

      $this->mgt_swap_comissao_vlr_icms_total->Caption = GetConexaoPrincipal()->SQL_MGT_Comissoes->Fields['mgt_swap_comissao_vlr_icms_total'];

      $Comando_SQL = "select sum(mgt_swap_comissao_comissao) as mgt_swap_comissao_comissao_total from mgt_swap_comissoes order by mgt_swap_comissao_numero";

      GetConexaoPrincipal()->SQL_MGT_Comissoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Comissoes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Comissoes->Open();

      $this->mgt_swap_comissao_comissao_total->Caption = GetConexaoPrincipal()->SQL_MGT_Comissoes->Fields['mgt_swap_comissao_comissao_total'];

      //*** Gera o Relatorio ***

      $Comando_SQL = "select *, date_format(mgt_swap_comissao_data, '%d/%m/%Y') AS mgt_swap_comissao_data, date_format(mgt_swap_comissao_vencimento, '%d/%m/%Y') AS mgt_swap_comissao_vencimento from mgt_swap_comissoes order by mgt_swap_comissao_numero";

      GetConexaoPrincipal()->SQL_MGT_Comissoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Comissoes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Comissoes->Open();
   }
   function relvendasrepresentantesimpJSLoad($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

<?php

   }

}

global $application;

global $relvendasrepresentantesimp;

//Cria o formulario
$relvendasrepresentantesimp = new relvendasrepresentantesimp($application);

//Ler do arquivo de recursos
$relvendasrepresentantesimp->loadResource(__FILE__);

//Mostrar o formulario
$relvendasrepresentantesimp->show();

?>