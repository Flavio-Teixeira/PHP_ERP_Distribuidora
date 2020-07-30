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
//Includes
require_once("conexao_principal.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class nfcontabilidadegerar extends Page
{
   public $arquivo_saida = null;
   public $Label3 = null;
   public $gera_ano_escolhido = null;
   public $gera_mes_escolhido = null;
   public $Label5 = null;
   public $Label2 = null;
   public $Label1 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;

   function nfcontabilidadegerarCreate($sender, $params)
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

      require_once("includes/rotinas_gerais.inc.php");

      $this->MSG_Erro->Caption = '';

      //*** Carrega as Informacoes para a Geracao ***

      $this->gera_mes_escolhido->Caption = $_SESSION['gera_mes'];
      $this->gera_ano_escolhido->Caption = $_SESSION['gera_ano'];

      $comparacao_inicial = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '01';

      if($_SESSION['gera_mes'] == '01')
      {
         $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '31';
      }
      elseif($_SESSION['gera_mes'] == '02')
      {
         if(($_SESSION['gera_ano'] % 4) == 0)
         {
            $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '29';
         }
         else
         {
            $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '28';
         }
      }
      elseif($_SESSION['gera_mes'] == '03')
      {
         $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '31';
      }
      elseif($_SESSION['gera_mes'] == '04')
      {
         $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '30';
      }
      elseif($_SESSION['gera_mes'] == '05')
      {
         $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '31';
      }
      elseif($_SESSION['gera_mes'] == '06')
      {
         $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '30';
      }
      elseif($_SESSION['gera_mes'] == '07')
      {
         $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '31';
      }
      elseif($_SESSION['gera_mes'] == '08')
      {
         $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '31';
      }
      elseif($_SESSION['gera_mes'] == '09')
      {
         $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '30';
      }
      elseif($_SESSION['gera_mes'] == '10')
      {
         $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '31';
      }
      elseif($_SESSION['gera_mes'] == '11')
      {
         $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '30';
      }
      elseif($_SESSION['gera_mes'] == '12')
      {
         $comparacao_final = $_SESSION['gera_ano'] . '-' . $_SESSION['gera_mes'] . '-' . '31';
      }

      $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data, '%d%m%Y') AS mgt_nota_fiscal_data, date_format(mgt_nota_fiscal_data_entrega, '%d%m%Y') AS mgt_nota_fiscal_data_entrega, date_format(mgt_nota_fiscal_data_emissao, '%d%m%Y') AS mgt_nota_fiscal_data_emissao from mgt_notas_fiscais where mgt_nota_fiscal_data_emissao >= '" . trim($comparacao_inicial) . "' and mgt_nota_fiscal_data_emissao <= '" . trim($comparacao_final) . "' order by mgt_nota_fiscal_numero";

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) == 1)
      {
         $this->MSG_Erro->Caption = 'Nenhuma Nota Fiscal foi encontrada no Mes informado.';
      }
      else
      {
         //*********************************************************
         //*** INICIO - Notas Fiscais - CONTMATIC                ***
         //*** Prepara a Geracao do Arquivo para a Contabilidade ***
         //*********************************************************

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->First();

         //*** Grava o Arquivo para a Contabilidade ***
         $this->arquivo_saida->Caption = 'ManagerTEX_' . $_SESSION['gera_mes'] . '.zip';
         $this->arquivo_saida->Link = 'contabilidade/ManagerTEX_' . $_SESSION['gera_mes'] . '.zip';

         $grava_arquivo_ctbl = fopen('contabilidade/ManagerTEX.S' . $_SESSION['gera_mes'], 'w');
         $primeiro_registro = true;

         while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
         {
            //*** INICIO - Registro R1 ***
            //*** Primeira Linha . Valores de ICMS 1 ***

            $grava_linha = 'R1' . trim(substr(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'], 0, 2)) . trim(substr(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'], 2, 2)) . trim(substr(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'], 0, 2)) . trim(substr(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'], 2, 2)) . '00NF    ' . completa_zeros(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'], 6) . completa_zeros('0', 6) . completa_espacos(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop']), 5);
            $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'], '.'), 12);
            $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms'], '.'), 12);
            $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_aliquota_icms'], '.'), 2) . '0000';
            $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms'], '.'), 12);

            if(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms'] > 0)
            {
               $grava_linha = $grava_linha . completa_zeros(retira_caracter('0', '.'), 12);
            }
            else
            {
               $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'], '.'), 12);
            }
            $grava_linha = $grava_linha . '000000000000';

            //*** Valores de ICMS 2 ***

            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';

            //*** Valores de ICMS 3 ***

            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';

            //*** Valores de ICMS 4 ***

            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';

            //*** Valores de ICMS 5 ***

            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';

            //*** Valores de IPI ***

            $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'], '.'), 12);
            $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_ipi'], '.'), 12);

            if(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_ipi'] > 0)
            {
               $grava_linha = $grava_linha . completa_zeros(retira_caracter('0', '.'), 12);
            }
            else
            {
               $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'], '.'), 12);
            }

            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . '000000000000';
            $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_suframa_desconto_pis_cofins'], '.'), 12);
            $grava_linha = $grava_linha . '0';
            $grava_linha = $grava_linha . '00';//Tipo da Nota
            $grava_linha = $grava_linha . '00';
            $grava_linha = $grava_linha . completa_espacos('', 14);
            $grava_linha = $grava_linha . completa_espacos_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'], 14);
            $grava_linha = $grava_linha . completa_espacos_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_estadual'], 16);
            $grava_linha = $grava_linha . completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'], 35);
            $grava_linha = $grava_linha . completa_espacos('', 18);
            $grava_linha = $grava_linha . completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_estado'], 2);
            $grava_linha = $grava_linha . '0000';
            $grava_linha = $grava_linha . completa_espacos('', 50);

            //*** FINAL - Registro R1 ***

            if($primeiro_registro == true)
            {
               fwrite($grava_arquivo_ctbl, $grava_linha);
            }
            else
            {
               fwrite($grava_arquivo_ctbl, "\n" . $grava_linha);
            }

            $primeiro_registro = false;

            //*** INICIO - Registro R2 ***

            $Comando_SQL = "select * from mgt_notas_fiscais_produtos where mgt_nota_fiscal_produto_numero_nota = " . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero']) . " order by mgt_nota_fiscal_produto_numero";

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Close();
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->EOF) != 1)
            {
               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->First();

               while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->EOF) != 1)
               {
                  $grava_linha = 'R2';
                  $grava_linha = $grava_linha . completa_espacos('', 8);
                  $grava_linha = $grava_linha . completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_codigo'], 10);
                  $grava_linha = $grava_linha . completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_descricao'], 25);
                  $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_valor_total'], '.'), 12);
                  $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_valor_ipi'], '.'), 12);
                  $grava_linha = $grava_linha . completa_zeros(retira_caracter('0', '.'), 12);
                  $grava_linha = $grava_linha . completa_espacos('', 50);

                  fwrite($grava_arquivo_ctbl, "\n" . $grava_linha);

                  GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Next();
               }
            }

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
         }

         fclose($grava_arquivo_ctbl);

         //*********************************************************
         //*** FINAL - Notas Fiscais - CONTMATIC                 ***
         //*** Prepara a Geracao do Arquivo para a Contabilidade ***
         //*********************************************************

         //*********************************************************
         //*** INICIO - Notas Fiscais - 54                       ***
         //*** Prepara a Geracao do Arquivo para a Contabilidade ***
         //*********************************************************

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->First();

         $grava_arquivo_ctbl = fopen('contabilidade/ManagerTEX_' . $_SESSION['gera_mes'] . '.S54', 'w');
         $primeiro_registro = true;

         while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
         {
            $Comando_SQL = "select * from mgt_notas_fiscais_produtos where mgt_nota_fiscal_produto_numero_nota = " . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero']) . " order by mgt_nota_fiscal_produto_numero";

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Close();
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->EOF) != 1)
            {
               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->First();

               $posicao_produto = 0;

               while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->EOF) != 1)
               {
                  $grava_linha = '54';
                  $grava_linha = $grava_linha . completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'], 14);
                  $grava_linha = $grava_linha . '01   ' . completa_zeros(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'], 6);
                  $grava_linha = $grava_linha . completa_zeros(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'], 4);
                  $grava_linha = $grava_linha . completa_zeros(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_situacao_tributaria'], 3);

                  $posicao_produto = $posicao_produto + 1;
                  $grava_linha = $grava_linha . completa_zeros($posicao_produto, 3);
                  $grava_linha = $grava_linha . completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_codigo'], 14);
                  $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_quantidade'], '.'), 11);

                  $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_valor_total'], '.'), 12);
                  $grava_linha = $grava_linha . completa_zeros('0', 12);

                  $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_valor_total'], '.'), 12);
                  $grava_linha = $grava_linha . completa_zeros('0', 12);

                  $grava_linha = $grava_linha . completa_zeros(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_valor_ipi'], '.'), 12);
                  $grava_linha = $grava_linha . completa_zeros_str(trim(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_aliquota_icms'], '.')), 2) . '00';

                  if($primeiro_registro == true)
                  {
                     fwrite($grava_arquivo_ctbl, $grava_linha);
                  }
                  else
                  {
                     fwrite($grava_arquivo_ctbl, "\n" . $grava_linha);
                  }

                  $primeiro_registro = false;

                  GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Next();
               }
            }

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
         }

         fclose($grava_arquivo_ctbl);

         //*********************************************************
         //*** FINAL - Notas Fiscais - 54                        ***
         //*** Prepara a Geracao do Arquivo para a Contabilidade ***
         //*********************************************************

         //*********************************************************
         //*** INICIO - Notas Fiscais - 75                       ***
         //*** Prepara a Geracao do Arquivo para a Contabilidade ***
         //*********************************************************

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->First();

         $grava_arquivo_ctbl = fopen('contabilidade/ManagerTEX_' . $_SESSION['gera_mes'] . '.S75', 'w');
         $primeiro_registro = true;

         while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
         {
            $Comando_SQL = "select * from mgt_notas_fiscais_produtos where mgt_nota_fiscal_produto_numero_nota = " . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero']) . " order by mgt_nota_fiscal_produto_numero";

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Close();
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->EOF) != 1)
            {
               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->First();

               $posicao_produto = 0;

               while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->EOF) != 1)
               {
                  $grava_linha = '75';
                  $grava_linha = $grava_linha . completa_zeros(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'], 8);
                  $grava_linha = $grava_linha . completa_zeros(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'], 8);
                  $grava_linha = $grava_linha . completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_codigo'], 14);

                  $grava_linha = $grava_linha . completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_ncm'], 8);

                  $Comando_SQL = "select * from mgt_classificacoes_fiscais_numeros where mgt_classificacao_fiscal_numero_ncm = " . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_ncm']) . " order by mgt_classificacao_fiscal_numero_ncm";

                  GetConexaoPrincipal()->SQL_MGT_NCM->Close();
                  GetConexaoPrincipal()->SQL_MGT_NCM->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_MGT_NCM->Open();

                  $grava_linha = $grava_linha . completa_espacos(GetConexaoPrincipal()->SQL_MGT_NCM->Fields['mgt_classificacao_fiscal_numero_descricao'], 53);
                  $grava_linha = $grava_linha . completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_unidade'], 6);
                  $grava_linha = $grava_linha . completa_zeros(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_situacao_tributaria'], 3);
                  $grava_linha = $grava_linha . '00' . completa_zeros_str(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_ipi'], '.'), 2);
                  $grava_linha = $grava_linha . '00' . completa_zeros_str(trim(retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_aliquota_icms'], '.')), 2);
                  $grava_linha = $grava_linha . '0000';

                  if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_situacao_tributaria']) == '010')
                  {
                     $grava_linha = $grava_linha . completa_zeros(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_valor_unitario'], 12);
                  }
                  else
                  {
                     $grava_linha = $grava_linha . completa_zeros('0', 12);
                  }


                  if($primeiro_registro == true)
                  {
                     fwrite($grava_arquivo_ctbl, $grava_linha);
                  }
                  else
                  {
                     fwrite($grava_arquivo_ctbl, "\n" . $grava_linha);
                  }

                  $primeiro_registro = false;

                  GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Next();
               }
            }

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
         }

         fclose($grava_arquivo_ctbl);

         //*********************************************************
         //*** FINAL - Notas Fiscais - 75                        ***
         //*** Prepara a Geracao do Arquivo para a Contabilidade ***
         //*********************************************************

         //*** Zip os Arquivos para o Envio ***

         if(substr(trim($_SERVER['SystemRoot']), 0, 1) == 'C')
         {
            exec('C:\\PROGRA~1\\WINZIP\\WZZIP C:\\SISTEMAS\\PEPLASTIC\\CONTABILIDADE\\ManagerTEX_' . $_SESSION['gera_mes'] . '.zip C:\\SISTEMAS\\PEPLASTIC\\CONTABILIDADE\\ManagerTEX.S' . $_SESSION['gera_mes'] . ' C:\\SISTEMAS\\PEPLASTIC\\CONTABILIDADE\\ManagerTEX_' . $_SESSION['gera_mes'] . '.S54 C:\\SISTEMAS\\PEPLASTIC\\CONTABILIDADE\\ManagerTEX_' . $_SESSION['gera_mes'] . '.S75');
         }
         else
         {
            exec('zip /home/sistemas/managertex/contabilidade/ManagerTEX_' . $_SESSION['gera_mes'] . '.zip /home/sistemas/managertex/contabilidade/ManagerTEX.S' . $_SESSION['gera_mes'] . ' /home/sistemas/managertex/contabilidade/ManagerTEX_' . $_SESSION['gera_mes'] . '.S54 contabilidade/ManagerTEX_' . $_SESSION['gera_mes'] . '.S75');
         }
      }
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('nf_contabilidade.php');
   }
   function nfcontabilidadegerarJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfcontabilidadegerar;

//Creates the form
$nfcontabilidadegerar = new nfcontabilidadegerar($application);

//Read from resource file
$nfcontabilidadegerar->loadResource(__FILE__);

//Shows the form
$nfcontabilidadegerar->show();

?>