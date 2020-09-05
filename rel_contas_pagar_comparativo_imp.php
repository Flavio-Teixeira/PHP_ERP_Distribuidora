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
require_once("includes/dia_semana.fnc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Definicao de classe
class relcontaspagarcomparativoimp extends Page
{
   public $logo_relatorio = null;
   public $conta_padrao = null;
   public $total_saldo = null;
   public $total_dc = null;
   public $total_credito = null;
   public $total_debito = null;
   public $Label10 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $mgt_swap_comparativo_saldo = null;
   public $mgt_swap_comparativo_tipo = null;
   public $mgt_swap_comparativo_credito = null;
   public $mgt_swap_comparativo_debito = null;
   public $mgt_swap_comparativo_historico = null;
   public $mgt_swap_comparativo_data = null;
   public $mgt_data_final = null;
   public $mgt_data_inicial = null;
   public $Label25 = null;
   public $Label1 = null;
   public $Label20 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Label16 = null;
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

   function relcontaspagarcomparativoimpCreate($sender, $params)
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
      $this->mgt_data_inicial->Caption = $_SESSION['imprime_data_inicial'];
      $this->mgt_data_final->Caption = $_SESSION['imprime_data_final'];

      $this->conta_padrao->Caption = $_SESSION['conta_padrao'];

      $conta_padrao = $_SESSION['conta_padrao'];
      $cfops = $_SESSION['imprime_busca_cfop'];

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      //*** Limpa a Tabela ***

      $Comando_SQL = "TRUNCATE TABLE mgt_swap_comparativo";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close(); 

      //**********************************
      //*** Obtem os Saldos das Contas ***
      //**********************************

      //*** Total dos Saldos ***

      $nro_conta = 0;
      $Valor_Saldo = 0;
      $ultima_data_saldo = inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption));

      if(trim($this->conta_padrao->Caption) <> '0')
      {
         $Comando_SQL = "Select * from mgt_saldos Where mgt_saldo_conta = " . trim($this->conta_padrao->Caption) . " Order By mgt_saldo_conta Asc, mgt_saldo_data Desc";
      }
      else
      {
         $Comando_SQL = "Select * from mgt_saldos Order By mgt_saldo_conta Asc, mgt_saldo_data Desc";
      }

      GetConexaoPrincipal()->SQL_MGT_Saldos->Close();
      GetConexaoPrincipal()->SQL_MGT_Saldos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Saldos->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Saldos->EOF) != 1)
      {
         $ultima_data_saldo = GetConexaoPrincipal()->SQL_MGT_Saldos->Fields['mgt_saldo_data'];

         while((GetConexaoPrincipal()->SQL_MGT_Saldos->EOF) != 1)
         {
            if($nro_conta <> GetConexaoPrincipal()->SQL_MGT_Saldos->Fields['mgt_saldo_conta'])
            {
               $nro_conta = GetConexaoPrincipal()->SQL_MGT_Saldos->Fields['mgt_saldo_conta'];
               $Valor_Saldo = $Valor_Saldo + GetConexaoPrincipal()->SQL_MGT_Saldos->Fields['mgt_saldo_valor'];
            }

            GetConexaoPrincipal()->SQL_MGT_Saldos->Next();
         }
      }

      if(strtotime(trim($ultima_data_saldo)) > strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
      {
         $Valor_Saldo = number_format(0, "2", ".", "");
      }
      else
      {
         //*** Limpa a Tabela de Cobrancas ***

         $Comando_SQL = "TRUNCATE TABLE mgt_swap_cobrancas";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close(); 

         //*** Seleciona as Notas Fiscais ***

         if(trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) == '')
         {
            $Comando_SQL = "Select * from mgt_notas_fiscais Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_1 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_1 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_2 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_2 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_3 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_3 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_4 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_4 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_5 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_5 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_6 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_6 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_7 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_7 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_8 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_8 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_9 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_9 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_10 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_10 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_11 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_11 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_12 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_12 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_nota_fiscal_tipo_nota ='1' ";
            $Comando_SQL .= " Order By mgt_nota_fiscal_numero";
         }
         else
         {
            $Comando_SQL = "Select * from mgt_notas_fiscais Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_1 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_1 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_2 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_2 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_3 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_3 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_4 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_4 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_5 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_5 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_6 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_6 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_7 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_7 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_8 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_8 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_9 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_9 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_10 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_10 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_11 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_11 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_12 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_12 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_nota_fiscal_cfop IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ") and ";
            $Comando_SQL .= "mgt_nota_fiscal_tipo_nota ='1' ";
            $Comando_SQL .= "Order By mgt_nota_fiscal_numero";
         }

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

         //*** Obtem as Cobrancas Vencidas ***

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->First();

         if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
            {
               $dt_vcto_1 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_1'];
               $dt_vcto_2 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_2'];
               $dt_vcto_3 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_3'];
               $dt_vcto_4 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_4'];
               $dt_vcto_5 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_5'];
               $dt_vcto_6 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_6'];
               $dt_vcto_7 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_7'];
               $dt_vcto_8 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_8'];
               $dt_vcto_9 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_9'];
               $dt_vcto_10 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_10'];
               $dt_vcto_11 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_11'];
               $dt_vcto_12 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_12'];

               $dt_pgto_1 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_1'];
               $dt_pgto_2 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_2'];
               $dt_pgto_3 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_3'];
               $dt_pgto_4 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_4'];
               $dt_pgto_5 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_5'];
               $dt_pgto_6 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_6'];
               $dt_pgto_7 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_7'];
               $dt_pgto_8 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_8'];
               $dt_pgto_9 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_9'];
               $dt_pgto_10 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_10'];
               $dt_pgto_11 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_11'];
               $dt_pgto_12 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_12'];

               if( trim($dt_vcto_1) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_1)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_1)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'1',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_2) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_2)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_2)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'2',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_3) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_3)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_3)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'3',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_4) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_4)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_4)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'4',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_5) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_5)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_5)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'5',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_6) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_6)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_6)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'6',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_7) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_7)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_7)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'7',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_8) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_8)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_8)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'8',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_9) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_9)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_9)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'9',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_10) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_10)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_10)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'10',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_11) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_11)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_11)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'11',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_12) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_12)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_12)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'12',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
            }
         }

         //*** Seleciona as Vendas Programadas ***

         if(trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) == '')
         {
            $Comando_SQL = "Select * from mgt_programadas Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_1 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_1 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_2 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_2 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_3 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_3 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_4 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_4 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_5 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_5 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_6 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_6 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_7 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_7 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_8 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_8 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_9 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_9 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_10 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_10 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_11 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_11 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_12 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_12 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_programada_tipo_nota ='1' ";
            $Comando_SQL .= "Order By mgt_programada_numero";
         }
         else
         {
            $Comando_SQL = "Select * from mgt_programadas Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_1 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_1 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_2 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_2 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_3 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_3 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_4 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_4 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_5 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_5 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_6 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_6 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_7 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_7 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_8 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_8 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_9 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_9 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_10 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_10 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_11 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_11 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_12 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_12 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_programada_cfop IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ") and ";
            $Comando_SQL .= "mgt_programada_tipo_nota ='1' ";
            $Comando_SQL .= "Order By mgt_programada_numero";
         }

         GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
         GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

         //*** Obtem as Cobrancas Vencidas ***

         GetConexaoPrincipal()->SQL_MGT_Programadas->First();

         if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
            {
               $dt_vcto_1 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_1'];
               $dt_vcto_2 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_2'];
               $dt_vcto_3 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_3'];
               $dt_vcto_4 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_4'];
               $dt_vcto_5 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_5'];
               $dt_vcto_6 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_6'];
               $dt_vcto_7 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_7'];
               $dt_vcto_8 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_8'];
               $dt_vcto_9 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_9'];
               $dt_vcto_10 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_10'];
               $dt_vcto_11 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_11'];
               $dt_vcto_12 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_12'];

               $dt_pgto_1 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_1'];
               $dt_pgto_2 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_2'];
               $dt_pgto_3 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_3'];
               $dt_pgto_4 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_4'];
               $dt_pgto_5 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_5'];
               $dt_pgto_6 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_6'];
               $dt_pgto_7 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_7'];
               $dt_pgto_8 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_8'];
               $dt_pgto_9 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_9'];
               $dt_pgto_10 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_10'];
               $dt_pgto_11 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_11'];
               $dt_pgto_12 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_12'];

               if( trim($dt_vcto_1) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_1)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_1)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'1',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_2) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_2)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_2)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'2',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_3) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_3)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_3)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'3',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_4) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_4)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_4)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'4',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_5) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_5)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_5)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'5',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_6) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_6)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_6)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'6',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_7) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_7)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_7)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'7',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_8) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_8)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_8)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'8',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_9) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_9)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_9)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'9',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_10) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_10)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_10)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'10',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_11) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_11)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_11)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'11',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if( trim($dt_vcto_12) != '' )
               {
                  if(
                  (strtotime(trim($dt_vcto_12)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_12)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'12',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               GetConexaoPrincipal()->SQL_MGT_Programadas->Next();
            }
         }

         if(trim($this->conta_padrao->Caption) <> '0')
         {
            $Comando_SQL = "Select SUM(mgt_swap_cobranca_dup_vlr) AS mgt_total_geral_cobrancas from mgt_swap_cobrancas Where (mgt_swap_cobranca_dup_cod_bco = " . trim($this->conta_padrao->Caption) . ") And (mgt_swap_cobranca_dup_dt_pgto <> '' And mgt_swap_cobranca_dup_dt_pgto <> '0000-00-00') Order By mgt_swap_cobranca_dup_dt_vcto, mgt_swap_cobranca_dup_nro";
         }
         else
         {
            $Comando_SQL = "Select SUM(mgt_swap_cobranca_dup_vlr) AS mgt_total_geral_cobrancas from mgt_swap_cobrancas Where (mgt_swap_cobranca_dup_dt_pgto <> '' And mgt_swap_cobranca_dup_dt_pgto <> '0000-00-00') Order By mgt_swap_cobranca_dup_dt_vcto, mgt_swap_cobranca_dup_nro";
         }

         GetConexaoPrincipal()->SQL_MGT_Cobrancas->Close();
         GetConexaoPrincipal()->SQL_MGT_Cobrancas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Cobrancas->Open();

         $Valor_Saldo = $Valor_Saldo + number_format(GetConexaoPrincipal()->SQL_MGT_Cobrancas->Fields['mgt_total_geral_cobrancas'], "2", ".", "");

         $Comando_SQL = "select SUM(mgt_conta_pagar_valor_ser_pago) AS mgt_total_ser_pago ";
         $Comando_SQL .= "from mgt_contas_pagar ";
         $Comando_SQL .= "where ";
         $Comando_SQL .= "((mgt_conta_pagar_data_pagto >= '" . $ultima_data_saldo . "') and ";
         $Comando_SQL .= "(mgt_conta_pagar_data_pagto < '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "')) ";
         $Comando_SQL .= " And mgt_conta_pagar_status = 'Pago' ";

         if(trim($this->conta_padrao->Caption) <> '0')
         {
            $Comando_SQL .= " And mgt_conta_pagar_conta = " . trim($this->conta_padrao->Caption) . " ";
         }

         GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Close();
         GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Open();

         $Valor_Saldo = number_format($Valor_Saldo - GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_total_ser_pago'], "2", ".", "");
      }

      //*** Registra a Informacao no Comparativo ***

      $STR_Historico = "--- SALDO INICIAL ---";
      $STR_Credito = "0.00";
      $STR_Debito = "0.00";

      if($Valor_Saldo >= 0)
      {
         $STR_D_C = "C";
         //$STR_Credito = $Valor_Saldo;
      }
      else
      {
         $STR_D_C = "D";
         //$STR_Debito = $Valor_Saldo;
      }

      $STR_Saldo = $Valor_Saldo;

      $Comando_SQL = "Insert into mgt_swap_comparativo(";
      $Comando_SQL .= "mgt_swap_comparativo_data, ";
      $Comando_SQL .= "mgt_swap_comparativo_historico, ";
      $Comando_SQL .= "mgt_swap_comparativo_debito, ";
      $Comando_SQL .= "mgt_swap_comparativo_credito, ";
      $Comando_SQL .= "mgt_swap_comparativo_tipo, ";
      $Comando_SQL .= "mgt_swap_comparativo_saldo) ";
      $Comando_SQL .= "values(";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd('01' . substr(trim($this->mgt_data_inicial->Caption),2,8)) . "', ";
      $Comando_SQL .= "'" . $STR_Historico . "', ";
      $Comando_SQL .= "'" . $STR_Debito . "', ";
      $Comando_SQL .= "'" . $STR_Credito . "', ";
      $Comando_SQL .= "'" . $STR_D_C . "', ";
      $Comando_SQL .= "'" . $STR_Saldo . "') ";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*******************************
      //*** Obtem as Contas a Pagar ***
      //*******************************

      $Comando_SQL = "Select * from mgt_contas_pagar Where ((mgt_conta_pagar_data >= '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') And (mgt_conta_pagar_data <= '" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')) Order By mgt_conta_pagar_data ASC, mgt_conta_pagar_descricao ASC";

      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->EOF) != 1)
      {

         while((GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->EOF) != 1)
         {

            //*** Registra a Informacao no Comparativo ***

            $STR_Data = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_data'];
            $dia_semana = dia_semana($STR_Data);

            If($dia_semana = 0)
            {
               //Domingo
               $STR_Data = date("Y-m-d", (strtotime(trim($STR_Data)) + 86400));
            }
            ElseIf($dia_semana = 6)
            {
               //Sabado
               $STR_Data = date("Y-m-d", (strtotime(trim($STR_Data)) + (86400 * 2)));
            }

            $STR_Historico = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_descricao'];
            $STR_Credito = "0.00";

            $STR_Debito = GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_conta_pagar_valor_ser_pago'];

            $STR_D_C = "D";
            $STR_Saldo = "0.00";

            $Comando_SQL = "Insert into mgt_swap_comparativo(";
            $Comando_SQL .= "mgt_swap_comparativo_data, ";
            $Comando_SQL .= "mgt_swap_comparativo_historico, ";
            $Comando_SQL .= "mgt_swap_comparativo_debito, ";
            $Comando_SQL .= "mgt_swap_comparativo_credito, ";
            $Comando_SQL .= "mgt_swap_comparativo_tipo, ";
            $Comando_SQL .= "mgt_swap_comparativo_saldo) ";
            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . trim($STR_Data) . "', ";
            $Comando_SQL .= "'" . $STR_Historico . "', ";
            $Comando_SQL .= "'" . $STR_Debito . "', ";
            $Comando_SQL .= "'" . $STR_Credito . "', ";
            $Comando_SQL .= "'" . $STR_D_C . "', ";
            $Comando_SQL .= "'" . $STR_Saldo . "') ";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Next();
         }
      }

      //*********************************
      //*** Obtem as Contas a Receber ***
      //*********************************

      //**********************************
      //*** Nota Fiscal - 12 Vencimentos ***
      //**********************************

      for($ind = 1; $ind <= 12; $ind++)
      {

         $Comando_SQL = "Select * from mgt_notas_fiscais Where (";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_" . $ind . " >= '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') And ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_" . $ind . " <= '" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')";

         if(trim($cfops) <> '')
         {
            $Comando_SQL .= " and (mgt_nota_fiscal_cfop IN (" . trim($cfops) . "))";
         }

         $Comando_SQL .= ") Order By mgt_nota_fiscal_dup_dt_vcto_" . $ind . " ASC, mgt_nota_fiscal_numero ASC";

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
         {

            while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
            {

               $mgt_nota_fiscal_dup_dt_vcto = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_' . $ind];
               $mgt_nota_fiscal_dup_nro = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_' . $ind];
               $mgt_nota_fiscal_dup_vlr_pgto = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_pgto_' . $ind];
               $mgt_nota_fiscal_dup_vlr = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_' . $ind];

               //*** Registra a Informacao no Comparativo ***

               $STR_Data = $mgt_nota_fiscal_dup_dt_vcto;
               $dia_semana = dia_semana($STR_Data);

               $dia = substr($STR_Data, 8, 2);
               $mes = substr($STR_Data, 5, 2);
               $ano = substr($STR_Data, 0, 4);

               If($dia_semana == 0)
               {
                  //Domingo
                  $STR_Data = date('Y-m-d', mktime(0, 0, 0, $mes, $dia + 1, $ano));
               }
               ElseIf($dia_semana == 6)
               {
                  //Sabado
                  $STR_Data = date('Y-m-d', mktime(0, 0, 0, $mes, $dia + 2, $ano));
               }

               $STR_Historico = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . " - " . $mgt_nota_fiscal_dup_nro . " - CNPJ: " . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . " - " . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'];
               $STR_Debito = "0.00";

               if($mgt_programada_dup_vlr_pgto > 0)
               {
                  $STR_Credito = $mgt_nota_fiscal_dup_vlr_pgto;
               }
               else
               {
                  $STR_Credito = $mgt_nota_fiscal_dup_vlr;
               }

               $STR_D_C = "C";
               $STR_Saldo = "0.00";

               $Comando_SQL = "Insert into mgt_swap_comparativo(";
               $Comando_SQL .= "mgt_swap_comparativo_data, ";
               $Comando_SQL .= "mgt_swap_comparativo_historico, ";
               $Comando_SQL .= "mgt_swap_comparativo_debito, ";
               $Comando_SQL .= "mgt_swap_comparativo_credito, ";
               $Comando_SQL .= "mgt_swap_comparativo_tipo, ";
               $Comando_SQL .= "mgt_swap_comparativo_saldo) ";
               $Comando_SQL .= "values(";
               $Comando_SQL .= "'" . $STR_Data . "', ";
               $Comando_SQL .= "'" . $STR_Historico . "', ";
               $Comando_SQL .= "'" . $STR_Debito . "', ";
               $Comando_SQL .= "'" . $STR_Credito . "', ";
               $Comando_SQL .= "'" . $STR_D_C . "', ";
               $Comando_SQL .= "'" . $STR_Saldo . "') ";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
            }
         }
      }

      //*******************************
      //*** Papeleta - 12 Vencimentos ***
      //*******************************

      for($ind = 1; $ind <= 12; $ind++)
      {
         $Comando_SQL = "Select * from mgt_programadas Where (";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_" . $ind . " >= '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') And ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_" . $ind . " <= '" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')";
         $Comando_SQL .= ") Order By mgt_programada_dup_dt_vcto_" . $ind . " ASC, mgt_programada_numero ASC";

         GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
         GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
         {

            while((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
            {

               $mgt_programada_dup_dt_vcto = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_' . $ind];
               $mgt_programada_dup_nro = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_' . $ind];
               $mgt_programada_dup_vlr_pgto = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_pgto_' . $ind];
               $mgt_programada_dup_vlr = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_' . $ind];

               //*** Registra a Informacao no Comparativo ***

               $STR_Data = $mgt_programada_dup_dt_vcto;
               $dia_semana = dia_semana($STR_Data);

               $dia = substr($STR_Data, 8, 2);
               $mes = substr($STR_Data, 5, 2);
               $ano = substr($STR_Data, 0, 4);

               If($dia_semana == 0)
               {
                  //Domingo
                  $STR_Data = date('Y-m-d', mktime(0, 0, 0, $mes, $dia + 1, $ano));
               }
               ElseIf($dia_semana == 6)
               {
                  //Sabado
                  $STR_Data = date('Y-m-d', mktime(0, 0, 0, $mes, $dia + 2, $ano));
               }

               $STR_Historico = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . " - " . $mgt_programada_dup_nro . " - CNPJ: " . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . " - " . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'];
               $STR_Debito = "0.00";

               if($mgt_programada_dup_vlr_pgto > 0)
               {
                  $STR_Credito = $mgt_programada_dup_vlr_pgto;
               }
               else
               {
                  $STR_Credito = $mgt_programada_dup_vlr;
               }

               $STR_D_C = "C";
               $STR_Saldo = "0.00";

               $Comando_SQL = "Insert into mgt_swap_comparativo(";
               $Comando_SQL .= "mgt_swap_comparativo_data, ";
               $Comando_SQL .= "mgt_swap_comparativo_historico, ";
               $Comando_SQL .= "mgt_swap_comparativo_debito, ";
               $Comando_SQL .= "mgt_swap_comparativo_credito, ";
               $Comando_SQL .= "mgt_swap_comparativo_tipo, ";
               $Comando_SQL .= "mgt_swap_comparativo_saldo) ";
               $Comando_SQL .= "values(";
               $Comando_SQL .= "'" . $STR_Data . "', ";
               $Comando_SQL .= "'" . $STR_Historico . "', ";
               $Comando_SQL .= "'" . $STR_Debito . "', ";
               $Comando_SQL .= "'" . $STR_Credito . "', ";
               $Comando_SQL .= "'" . $STR_D_C . "', ";
               $Comando_SQL .= "'" . $STR_Saldo . "') ";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               GetConexaoPrincipal()->SQL_MGT_Programadas->Next();
            }
         }
      }

      //************************
      //*** Gera o Relatorio ***
      //************************

      //*** Ordena o Relatorio ***

      $Comando_SQL = "Select * From mgt_swap_comparativo Order By mgt_swap_comparativo_data Asc, mgt_swap_comparativo_tipo Asc, mgt_swap_comparativo_historico Asc";

      GetConexaoPrincipal()->SQL_MGT_Comparativo->Close();
      GetConexaoPrincipal()->SQL_MGT_Comparativo->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Comparativo->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Comparativo->EOF) != 1)
      {

         while((GetConexaoPrincipal()->SQL_MGT_Comparativo->EOF) != 1)
         {
            $Ind = $Ind + 1;

            $Comando_SQL = "Update mgt_swap_comparativo Set mgt_swap_comparativo_ordem = '" . $Ind . "' Where mgt_swap_comparativo_numero = '" . GetConexaoPrincipal()->SQL_MGT_Comparativo->Fields['mgt_swap_comparativo_numero'] . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            GetConexaoPrincipal()->SQL_MGT_Comparativo->Next();
         }
      }

      //*** Calcula o Saldo ***

      $Comando_SQL = "Select * From mgt_swap_comparativo Order By mgt_swap_comparativo_ordem Asc";

      GetConexaoPrincipal()->SQL_MGT_Comparativo->Close();
      GetConexaoPrincipal()->SQL_MGT_Comparativo->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Comparativo->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Comparativo->EOF) != 1)
      {

         while((GetConexaoPrincipal()->SQL_MGT_Comparativo->EOF) != 1)
         {

            if(GetConexaoPrincipal()->SQL_MGT_Comparativo->Fields['mgt_swap_comparativo_debito'] > 0)
            {
               $Valor_Saldo = $Valor_Saldo - GetConexaoPrincipal()->SQL_MGT_Comparativo->Fields['mgt_swap_comparativo_debito'];
            }

            if(GetConexaoPrincipal()->SQL_MGT_Comparativo->Fields['mgt_swap_comparativo_credito'] > 0)
            {
               $Valor_Saldo = $Valor_Saldo + GetConexaoPrincipal()->SQL_MGT_Comparativo->Fields['mgt_swap_comparativo_credito'];
            }

            if($Valor_Saldo >= 0)
            {
               $STR_D_C = "C";
            }
            else
            {
               $STR_D_C = "D";
            }

            $STR_Saldo = $Valor_Saldo;

            $Comando_SQL = "Update mgt_swap_comparativo Set mgt_swap_comparativo_tipo = '" . $STR_D_C . "', mgt_swap_comparativo_saldo = '" . $STR_Saldo . "' Where mgt_swap_comparativo_numero = '" . GetConexaoPrincipal()->SQL_MGT_Comparativo->Fields['mgt_swap_comparativo_numero'] . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            GetConexaoPrincipal()->SQL_MGT_Comparativo->Next();
         }
      }

      //*** Prepara o Relatorio para Exibicao ***

      $Comando_SQL = "select ";
      $Comando_SQL .= "sum(mgt_swap_comparativo_debito) AS mgt_swap_comparativo_debito, ";
      $Comando_SQL .= "sum(mgt_swap_comparativo_credito) AS mgt_swap_comparativo_credito, ";
      $Comando_SQL .= "sum(mgt_swap_comparativo_saldo) AS mgt_swap_comparativo_saldo ";
      $Comando_SQL .= "From mgt_swap_comparativo Order By mgt_swap_comparativo_ordem Asc";

      GetConexaoPrincipal()->SQL_MGT_Comparativo->Close();
      GetConexaoPrincipal()->SQL_MGT_Comparativo->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Comparativo->Open();

      $this->total_debito->Caption = GetConexaoPrincipal()->SQL_MGT_Comparativo->Fields['mgt_swap_comparativo_debito'];
      $this->total_credito->Caption = GetConexaoPrincipal()->SQL_MGT_Comparativo->Fields['mgt_swap_comparativo_credito'];
      $this->total_saldo->Caption = ($this->total_credito->Caption - $this->total_debito->Caption);

      if(($this->total_credito->Caption - $this->total_debito->Caption) > 0)
      {
         $this->total_dc->Caption = "C";
      }
      else
      {
         $this->total_dc->Caption = "D";
      }

      $Comando_SQL = "Select *,date_format(mgt_swap_comparativo_data, '%d/%m/%Y') AS mgt_swap_comparativo_data From mgt_swap_comparativo Order By mgt_swap_comparativo_ordem Asc";

      GetConexaoPrincipal()->SQL_MGT_Comparativo->Close();
      GetConexaoPrincipal()->SQL_MGT_Comparativo->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Comparativo->Open();
   }
   function relcontaspagarcomparativoimpJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

      <?php

   }

}

global $application;

global $relcontaspagarcomparativoimp;

//Cria o formulario
$relcontaspagarcomparativoimp = new relcontaspagarcomparativoimp($application);

//Ler do arquivo de recursos
$relcontaspagarcomparativoimp->loadResource(__FILE__);

//Mostrar o formulario
$relcontaspagarcomparativoimp->show();

?>