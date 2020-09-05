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
class relduplicataimp extends Page
{
   public $logo_relatorio = null;
   public $mgt_swap_cobranca_finalidade = null;
   public $Label26 = null;
   public $Label24 = null;
   public $Label20 = null;
   public $Label18 = null;
   public $Label15 = null;
   public $Label13 = null;
   public $mgt_swap_cobranca_email = null;
   public $mgt_swap_cobranca_telefone = null;
   public $mgt_swap_cobranca_contato = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label6 = null;
   public $mgt_data_final = null;
   public $mgt_data_inicial = null;
   public $mgt_cobranca_total = null;
   public $mgt_swap_cobranca_dup_observacao = null;
   public $mgt_swap_cobranca_dup_cod_bancario = null;
   public $mgt_swap_cobranca_dup_vlr_juros = null;
   public $mgt_swap_cobranca_dup_dt_pgto = null;
   public $mgt_swap_cobranca_dup_vlr = null;
   public $mgt_swap_cobranca_dup_dt_vcto = null;
   public $mgt_swap_cobranca_nome = null;
   public $mgt_swap_cobranca_codigo = null;
   public $mgt_swap_cobranca_dup_cod_bco = null;
   public $mgt_swap_cobranca_data_emissao = null;
   public $mgt_swap_cobranca_dup_nro = null;
   public $mgt_swap_cobranca_nota_fiscal = null;
   public $Label1 = null;
   public $Label7 = null;
   public $Label5 = null;
   public $Label22 = null;
   public $Label21 = null;
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

   function relduplicataimpCreate($sender, $params)
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
      $this->mgt_data_inicial->Caption = $_SESSION['imprime_data_inicial'];
      $this->mgt_data_final->Caption = $_SESSION['imprime_data_final'];

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      //*** Limpa a Tabela de Cobrancas ***

      $Comando_SQL = "TRUNCATE TABLE mgt_swap_cobrancas";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Prepara o Select das Informacoes ***

      $Comando_SQL = "Select * from mgt_notas_fiscais Where ";
      $Comando_SQL .= "(";
      $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_1 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') and ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_1 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')) or ";
      $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_2 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') and ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_2 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')) or ";
      $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_3 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') and ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_3 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')) or ";
      $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_4 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') and ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_4 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')) or ";
      $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_5 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') and ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_5 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')) or ";
      $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_6 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') and ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_6 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')) or ";
      $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_7 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') and ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_7 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')) or ";
      $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_8 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') and ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_8 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')) or ";
      $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_9 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') and ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_9 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')) or ";
      $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_10 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') and ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_10 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')) or ";
      $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_11 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') and ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_11 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')) or ";
      $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_12 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "') and ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_12 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "'))";
      $Comando_SQL .= ") and ";
      $Comando_SQL .= "(mgt_nota_fiscal_tipo_nota ='1') and ";
      $Comando_SQL .= "(";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_obs_1 like '%duplicata%') or ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_obs_2 like '%duplicata%') or ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_obs_3 like '%duplicata%') or ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_obs_4 like '%duplicata%') or ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_obs_5 like '%duplicata%') or ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_obs_6 like '%duplicata%') or ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_obs_7 like '%duplicata%') or ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_obs_8 like '%duplicata%') or ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_obs_9 like '%duplicata%') or ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_obs_10 like '%duplicata%') or ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_obs_11 like '%duplicata%') or ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_obs_12 like '%duplicata%')";
      $Comando_SQL .= ")";
      $Comando_SQL .= "Order By mgt_nota_fiscal_numero";

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

            if(trim($dt_vcto_1) != '')
            {
               if(
               (strtotime(trim($dt_vcto_1)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))and
               (strtotime(trim($dt_vcto_1)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption))))and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_1']), "DUPLICATA")) >= 0)and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_1']), "DUPLICATA")) != "")
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
                  $Comando_SQL .= "mgt_swap_cobranca_contato, ";
                  $Comando_SQL .= "mgt_swap_cobranca_telefone, ";
                  $Comando_SQL .= "mgt_swap_cobranca_email, ";
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
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_2) != '')
            {
               if(
               (strtotime(trim($dt_vcto_2)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))and
               (strtotime(trim($dt_vcto_2)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption))))and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_2']), "DUPLICATA")) >= 0)and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_2']), "DUPLICATA")) != "")
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
                  $Comando_SQL .= "mgt_swap_cobranca_contato, ";
                  $Comando_SQL .= "mgt_swap_cobranca_telefone, ";
                  $Comando_SQL .= "mgt_swap_cobranca_email, ";
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
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_3) != '')
            {
               if(
               (strtotime(trim($dt_vcto_3)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))and
               (strtotime(trim($dt_vcto_3)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption))))and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_3']), "DUPLICATA")) >= 0)and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_3']), "DUPLICATA")) != "")
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
                  $Comando_SQL .= "mgt_swap_cobranca_contato, ";
                  $Comando_SQL .= "mgt_swap_cobranca_telefone, ";
                  $Comando_SQL .= "mgt_swap_cobranca_email, ";
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
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_4) != '')
            {
               if(
               (strtotime(trim($dt_vcto_4)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))and
               (strtotime(trim($dt_vcto_4)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption))))and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_4']), "DUPLICATA")) >= 0)and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_4']), "DUPLICATA")) != "")
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
                  $Comando_SQL .= "mgt_swap_cobranca_contato, ";
                  $Comando_SQL .= "mgt_swap_cobranca_telefone, ";
                  $Comando_SQL .= "mgt_swap_cobranca_email, ";
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
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_5) != '')
            {
               if(
               (strtotime(trim($dt_vcto_5)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))and
               (strtotime(trim($dt_vcto_5)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption))))and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_5']), "DUPLICATA")) >= 0)and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_5']), "DUPLICATA")) != "")
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
                  $Comando_SQL .= "mgt_swap_cobranca_contato, ";
                  $Comando_SQL .= "mgt_swap_cobranca_telefone, ";
                  $Comando_SQL .= "mgt_swap_cobranca_email, ";
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
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_6) != '')
            {
               if(
               (strtotime(trim($dt_vcto_6)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))and
               (strtotime(trim($dt_vcto_6)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption))))and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_6']), "DUPLICATA")) >= 0)and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_6']), "DUPLICATA")) != "")
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
                  $Comando_SQL .= "mgt_swap_cobranca_contato, ";
                  $Comando_SQL .= "mgt_swap_cobranca_telefone, ";
                  $Comando_SQL .= "mgt_swap_cobranca_email, ";
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
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_7) != '')
            {
               if(
               (strtotime(trim($dt_vcto_7)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))and
               (strtotime(trim($dt_vcto_7)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption))))and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_7']), "DUPLICATA")) >= 0)and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_7']), "DUPLICATA")) != "")
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
                  $Comando_SQL .= "mgt_swap_cobranca_contato, ";
                  $Comando_SQL .= "mgt_swap_cobranca_telefone, ";
                  $Comando_SQL .= "mgt_swap_cobranca_email, ";
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
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_8) != '')
            {
               if(
               (strtotime(trim($dt_vcto_8)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))and
               (strtotime(trim($dt_vcto_8)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption))))and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_8']), "DUPLICATA")) >= 0)and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_8']), "DUPLICATA")) != "")
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
                  $Comando_SQL .= "mgt_swap_cobranca_contato, ";
                  $Comando_SQL .= "mgt_swap_cobranca_telefone, ";
                  $Comando_SQL .= "mgt_swap_cobranca_email, ";
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
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_9) != '')
            {
               if(
               (strtotime(trim($dt_vcto_9)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))and
               (strtotime(trim($dt_vcto_9)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption))))and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_9']), "DUPLICATA")) >= 0)and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_9']), "DUPLICATA")) != "")
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
                  $Comando_SQL .= "mgt_swap_cobranca_contato, ";
                  $Comando_SQL .= "mgt_swap_cobranca_telefone, ";
                  $Comando_SQL .= "mgt_swap_cobranca_email, ";
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
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_10) != '')
            {
               if(
               (strtotime(trim($dt_vcto_10)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))and
               (strtotime(trim($dt_vcto_10)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption))))and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_10']), "DUPLICATA")) >= 0)and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_10']), "DUPLICATA")) != "")
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
                  $Comando_SQL .= "mgt_swap_cobranca_contato, ";
                  $Comando_SQL .= "mgt_swap_cobranca_telefone, ";
                  $Comando_SQL .= "mgt_swap_cobranca_email, ";
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
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_11) != '')
            {
               if(
               (strtotime(trim($dt_vcto_11)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))and
               (strtotime(trim($dt_vcto_11)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption))))and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_11']), "DUPLICATA")) >= 0)and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_11']), "DUPLICATA")) != "")
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
                  $Comando_SQL .= "mgt_swap_cobranca_contato, ";
                  $Comando_SQL .= "mgt_swap_cobranca_telefone, ";
                  $Comando_SQL .= "mgt_swap_cobranca_email, ";
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
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_12) != '')
            {
               if(
               (strtotime(trim($dt_vcto_12)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption))))and
               (strtotime(trim($dt_vcto_12)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption))))and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_12']), "DUPLICATA")) >= 0)and
               (trim(strpos(strtoupper(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_12']), "DUPLICATA")) != "")
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
                  $Comando_SQL .= "mgt_swap_cobranca_contato, ";
                  $Comando_SQL .= "mgt_swap_cobranca_telefone, ";
                  $Comando_SQL .= "mgt_swap_cobranca_email, ";
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
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'] . "',";
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

      //*** Seleciona o Total Geral de Cobrancas ***

      $Comando_SQL = "Select SUM(mgt_swap_cobranca_dup_vlr) AS mgt_total_geral_cobrancas from mgt_swap_cobrancas Order By mgt_swap_cobranca_dup_dt_vcto, mgt_swap_cobranca_dup_nro";

      GetConexaoPrincipal()->SQL_MGT_Cobrancas->Close();
      GetConexaoPrincipal()->SQL_MGT_Cobrancas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Cobrancas->Open();

      $this->mgt_cobranca_total->Caption = GetConexaoPrincipal()->SQL_MGT_Cobrancas->Fields['mgt_total_geral_cobrancas'];

      $Comando_SQL = "Select *,date_format(mgt_swap_cobranca_data_emissao, '%d/%m/%Y') AS mgt_swap_cobranca_data_emissao,date_format(mgt_swap_cobranca_dup_dt_vcto, '%d/%m/%Y') AS mgt_swap_cobranca_dup_dt_vcto,date_format(mgt_swap_cobranca_dup_dt_pgto, '%d/%m/%Y') AS mgt_swap_cobranca_dup_dt_pgto from mgt_swap_cobrancas Order By mgt_swap_cobranca_dup_dt_vcto, mgt_swap_cobranca_dup_nro";

      GetConexaoPrincipal()->SQL_MGT_Cobrancas->Close();
      GetConexaoPrincipal()->SQL_MGT_Cobrancas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Cobrancas->Open();

   }
   function relduplicataimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relduplicataimp;

//Cria o formulario
$relduplicataimp = new relduplicataimp($application);

//Ler do arquivo de recursos
$relduplicataimp->loadResource(__FILE__);

//Mostrar o formulario
$relduplicataimp->show();

?>