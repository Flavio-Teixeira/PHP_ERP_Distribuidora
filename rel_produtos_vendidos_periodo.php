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
class relprodutosvendidosperiodo extends Page
{
   public $mgt_produto_codigo = null;
   public $Label6 = null;
   public $Label5 = null;
   public $mgt_produto_tipo = null;
   public $Label4 = null;
   public $data_final = null;
   public $data_inicial = null;
   public $Label3 = null;
   public $Label2 = null;
   public $bt_imprimir = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label1 = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function relprodutosvendidosperiodoCreate($sender, $params)
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

      //*** Inicio - Carrega os Tipos ***

      $Comando_SQL = "select * from mgt_tipos_produtos order by mgt_tipo_produto_descricao";

      GetConexaoPrincipal()->SQL_MGT_Tipos->Close();
      GetConexaoPrincipal()->SQL_MGT_Tipos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Tipos->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Tipos->EOF) != 1)
      {

         $this->mgt_produto_tipo->Clear();
         $this->mgt_produto_tipo->AddItem('---Todos---', null , '---Todos---');

         while(GetConexaoPrincipal()->SQL_MGT_Tipos->EOF != 1)
         {
            $this->mgt_produto_tipo->AddItem(GetConexaoPrincipal()->SQL_MGT_Tipos->Fields['mgt_tipo_produto_descricao'], null , GetConexaoPrincipal()->SQL_MGT_Tipos->Fields['mgt_tipo_produto_codigo']);

            GetConexaoPrincipal()->SQL_MGT_Tipos->Next();
         }

      }

      //*** Final - Carrega os Tipos ***

      $this->data_inicial->Text = '01/' . date("m/Y", time());
      $this->data_final->Text = date("d/m/Y", time());

      $this->MSG_Erro->Caption = "";
   }

   function mgt_produto_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relprodutosvendidosperiodo.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_produto_tipoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relprodutosvendidosperiodo.mgt_produto_codigo.focus();
     return false;
   }

<?php

   }


   function data_finalJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.relprodutosvendidosperiodo.data_final
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function data_inicialJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.relprodutosvendidosperiodo.data_inicial
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function data_finalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relprodutosvendidosperiodo.mgt_produto_tipo.focus();
     return false;
   }

<?php

   }

   function data_inicialJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relprodutosvendidosperiodo.data_final.focus();
     return false;
   }

<?php

   }

   function bt_imprimirClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if((trim($this->data_inicial->Text) != '')And(trim($this->data_final->Text) != ''))
      {
         $this->MSG_Erro->Caption = '';
      }

      if(trim($this->data_inicial->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Inicial';
      }

      else if(trim($this->data_final->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Final';
      }

      if(trim($this->MSG_Erro->Caption) == '')
      {
         //*** Abre o Relatorio de Produtos Vendidos ***

         //*** Limpa a Tabela de Cobrancas ***

         $Comando_SQL = "TRUNCATE TABLE mgt_swap_vendidos_periodo";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Prepara o Select das Informacoes ***

         $Comando_SQL = "select * from mgt_cfops_faturamento";

         GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Close();
         GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Open();

         //*** Seleciona as Notas Fiscais de Faturamento ***

         $Comando_SQL = "SELECT ";
         $Comando_SQL .= "mgt_nota_fiscal_produto_codigo, ";
         $Comando_SQL .= "mgt_nota_fiscal_produto_descricao, ";
         $Comando_SQL .= "SUM(mgt_nota_fiscal_produto_quantidade) AS mgt_nota_fiscal_produto_quantidade, ";
         $Comando_SQL .= "SUM(mgt_nota_fiscal_produto_valor_total) AS mgt_nota_fiscal_produto_valor_total, ";
         $Comando_SQL .= "mgt_produto_estoque_atual ";
         $Comando_SQL .= "FROM ";
         $Comando_SQL .= "mgt_notas_fiscais, ";
         $Comando_SQL .= "mgt_notas_fiscais_produtos, ";
         $Comando_SQL .= "mgt_produtos ";
         $Comando_SQL .= "WHERE ";
         $Comando_SQL .= "(mgt_nota_fiscal_tipo_nota ='1') AND ";
         $Comando_SQL .= "(mgt_nota_fiscal_cfop IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ")) AND ";

         if(trim($this->mgt_produto_codigo->Text) <> '')
         {
            $Comando_SQL .= "(mgt_nota_fiscal_produto_codigo like '" . trim($this->mgt_produto_codigo->Text) . "%') AND ";
         }

         $Comando_SQL .= "((mgt_nota_fiscal_data_emissao >='" . inverte_data_dma_to_amd(trim($this->data_inicial->Text)) . "') AND (mgt_nota_fiscal_data_emissao <='" . inverte_data_dma_to_amd(trim($this->data_final->Text)) . "')) AND ";
         $Comando_SQL .= "(mgt_nota_fiscal_numero = mgt_nota_fiscal_produto_numero_nota) AND ";
         $Comando_SQL .= "(mgt_nota_fiscal_produto_codigo = mgt_produto_codigo) ";

         if(trim($this->mgt_produto_tipo->ItemIndex) <> '---Todos---')
         {
            $Comando_SQL .= " AND (mgt_produto_tipo = '" . trim($this->mgt_produto_tipo->ItemIndex) . "') ";
         }

         $Comando_SQL .= "GROUP BY mgt_nota_fiscal_produto_codigo ";
         $Comando_SQL .= "ORDER BY mgt_nota_fiscal_produto_codigo ";

         GetConexaoPrincipal()->SQL_Relatorio->Close();
         GetConexaoPrincipal()->SQL_Relatorio->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Relatorio->Open();

         GetConexaoPrincipal()->SQL_Relatorio->First();

         if((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
            {
               $Comando_SQL = "SELECT * FROM mgt_swap_vendidos_periodo WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_codigo']) . "'";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();

               if((GetConexaoPrincipal()->SQL_Comunitario->EOF) != 1)
               {
                  $Comando_SQL = "UPDATE mgt_swap_vendidos_periodo SET ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_descricao']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_nf = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_quantidade']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_nf = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_valor_total']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "' ";
                  $Comando_SQL .= "WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_codigo']) . "'";
               }
               else
               {
                  $Comando_SQL = "INSERT INTO mgt_swap_vendidos_periodo(";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_cod, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sai, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_ent, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_pro, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld) ";
                  $Comando_SQL .= "VALUES(";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_codigo']) . "', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_descricao']) . "', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_quantidade']) . "', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_valor_total']) . "', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "') ";
               }

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               GetConexaoPrincipal()->SQL_Relatorio->Next();
            }
         }

         //*** Seleciona as Vendas Programadas de Faturamento ***

         $Comando_SQL = "SELECT ";
         $Comando_SQL .= "mgt_programada_produto_codigo, ";
         $Comando_SQL .= "mgt_programada_produto_descricao, ";
         $Comando_SQL .= "SUM(mgt_programada_produto_quantidade) AS mgt_programada_produto_quantidade, ";
         $Comando_SQL .= "SUM(mgt_programada_produto_valor_total) AS mgt_programada_produto_valor_total, ";
         $Comando_SQL .= "mgt_produto_estoque_atual ";
         $Comando_SQL .= "FROM ";
         $Comando_SQL .= "mgt_programadas, ";
         $Comando_SQL .= "mgt_programadas_produtos, ";
         $Comando_SQL .= "mgt_produtos ";
         $Comando_SQL .= "WHERE ";
         $Comando_SQL .= "(mgt_programada_tipo_nota ='1') AND ";

         if(trim($this->mgt_produto_codigo->Text) <> '')
         {
            $Comando_SQL .= "(mgt_programada_produto_codigo like '" . trim($this->mgt_produto_codigo->Text) . "%') AND ";
         }

         $Comando_SQL .= "((mgt_programada_data_emissao >='" . inverte_data_dma_to_amd(trim($this->data_inicial->Text)) . "') AND (mgt_programada_data_emissao <='" . inverte_data_dma_to_amd(trim($this->data_final->Text)) . "')) AND ";
         $Comando_SQL .= "(mgt_programada_numero = mgt_programada_produto_numero_nota) AND ";
         $Comando_SQL .= "(mgt_programada_produto_codigo = mgt_produto_codigo) ";

         if(trim($this->mgt_produto_tipo->ItemIndex) <> '---Todos---')
         {
            $Comando_SQL .= " AND (mgt_produto_tipo = '" . trim($this->mgt_produto_tipo->ItemIndex) . "') ";
         }

         $Comando_SQL .= "GROUP BY mgt_programada_produto_codigo ";
         $Comando_SQL .= "ORDER BY mgt_programada_produto_codigo ";

         GetConexaoPrincipal()->SQL_Relatorio->Close();
         GetConexaoPrincipal()->SQL_Relatorio->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Relatorio->Open();

         GetConexaoPrincipal()->SQL_Relatorio->First();

         if((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
            {
               $Comando_SQL = "SELECT * FROM mgt_swap_vendidos_periodo WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_programada_produto_codigo']) . "'";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();

               if((GetConexaoPrincipal()->SQL_Comunitario->EOF) != 1)
               {
                  $Comando_SQL = "UPDATE mgt_swap_vendidos_periodo SET ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_programada_produto_descricao']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_prg = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_programada_produto_quantidade']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_prg = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_programada_produto_valor_total']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "' ";
                  $Comando_SQL .= "WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_programada_produto_codigo']) . "'";
               }
               else
               {
                  $Comando_SQL = "INSERT INTO mgt_swap_vendidos_periodo(";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_cod, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sai, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_ent, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_pro, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld) ";
                  $Comando_SQL .= "VALUES(";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_programada_produto_codigo']) . "', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_programada_produto_descricao']) . "', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_programada_produto_quantidade']) . "', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_programada_produto_valor_total']) . "', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "') ";
               }

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               GetConexaoPrincipal()->SQL_Relatorio->Next();
            }
         }

         //*** Seleciona as Notas Fiscais de Outras Saidas ***

         $Comando_SQL = "SELECT ";
         $Comando_SQL .= "mgt_nota_fiscal_produto_codigo, ";
         $Comando_SQL .= "mgt_nota_fiscal_produto_descricao, ";
         $Comando_SQL .= "SUM(mgt_nota_fiscal_produto_quantidade) AS mgt_nota_fiscal_produto_quantidade, ";
         $Comando_SQL .= "SUM(mgt_nota_fiscal_produto_valor_total) AS mgt_nota_fiscal_produto_valor_total, ";
         $Comando_SQL .= "mgt_produto_estoque_atual ";
         $Comando_SQL .= "FROM ";
         $Comando_SQL .= "mgt_notas_fiscais, ";
         $Comando_SQL .= "mgt_notas_fiscais_produtos, ";
         $Comando_SQL .= "mgt_produtos ";
         $Comando_SQL .= "WHERE ";
         $Comando_SQL .= "(mgt_nota_fiscal_tipo_nota ='1') AND ";
         $Comando_SQL .= "(mgt_nota_fiscal_cfop NOT IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ")) AND ";

         if(trim($this->mgt_produto_codigo->Text) <> '')
         {
            $Comando_SQL .= "(mgt_nota_fiscal_produto_codigo like '" . trim($this->mgt_produto_codigo->Text) . "%') AND ";
         }

         $Comando_SQL .= "((mgt_nota_fiscal_data_emissao >='" . inverte_data_dma_to_amd(trim($this->data_inicial->Text)) . "') AND (mgt_nota_fiscal_data_emissao <='" . inverte_data_dma_to_amd(trim($this->data_final->Text)) . "')) AND ";
         $Comando_SQL .= "(mgt_nota_fiscal_numero = mgt_nota_fiscal_produto_numero_nota) AND ";
         $Comando_SQL .= "(mgt_nota_fiscal_produto_codigo = mgt_produto_codigo) ";

         if(trim($this->mgt_produto_tipo->ItemIndex) <> '---Todos---')
         {
            $Comando_SQL .= " AND (mgt_produto_tipo = '" . trim($this->mgt_produto_tipo->ItemIndex) . "') ";
         }

         $Comando_SQL .= "GROUP BY mgt_nota_fiscal_produto_codigo ";
         $Comando_SQL .= "ORDER BY mgt_nota_fiscal_produto_codigo ";

         GetConexaoPrincipal()->SQL_Relatorio->Close();
         GetConexaoPrincipal()->SQL_Relatorio->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Relatorio->Open();

         GetConexaoPrincipal()->SQL_Relatorio->First();

         if((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
            {
               $Comando_SQL = "SELECT * FROM mgt_swap_vendidos_periodo WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_codigo']) . "'";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();

               if((GetConexaoPrincipal()->SQL_Comunitario->EOF) != 1)
               {
                  $Comando_SQL = "UPDATE mgt_swap_vendidos_periodo SET ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_descricao']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_out = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_quantidade']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_out = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_valor_total']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "' ";
                  $Comando_SQL .= "WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_codigo']) . "'";
               }
               else
               {
                  $Comando_SQL = "INSERT INTO mgt_swap_vendidos_periodo(";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_cod, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sai, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_ent, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_pro, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld) ";
                  $Comando_SQL .= "VALUES(";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_codigo']) . "', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_descricao']) . "', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_quantidade']) . "', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_nota_fiscal_produto_valor_total']) . "', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "') ";
               }

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               GetConexaoPrincipal()->SQL_Relatorio->Next();
            }
         }

         //*** Seleciona o Movimento de Estoque Referente as Entradas ***

         $Comando_SQL = "SELECT ";
         $Comando_SQL .= "mgt_movto_produto_codigo, ";
         $Comando_SQL .= "mgt_movto_produto_titulo, ";
         $Comando_SQL .= "SUM(mgt_movto_qtde_informada) AS mgt_movto_qtde_informada, ";
         $Comando_SQL .= "mgt_produto_estoque_atual ";
         $Comando_SQL .= "FROM ";
         $Comando_SQL .= "mgt_movtos_estoque, ";
         $Comando_SQL .= "mgt_produtos ";
         $Comando_SQL .= "WHERE ";
         $Comando_SQL .= "(mgt_movto_tipo = '1') AND ";
         $Comando_SQL .= "(mgt_movto_nota <> '0') AND ";

         if(trim($this->mgt_produto_codigo->Text) <> '')
         {
            $Comando_SQL .= "(mgt_movto_produto_codigo like '" . trim($this->mgt_produto_codigo->Text) . "%') AND ";
         }

         $Comando_SQL .= "((mgt_movto_data >='" . inverte_data_dma_to_amd(trim($this->data_inicial->Text)) . "') AND (mgt_movto_data <='" . inverte_data_dma_to_amd(trim($this->data_final->Text)) . "')) AND ";
         $Comando_SQL .= "(mgt_movto_produto_codigo = mgt_produto_codigo) ";

         if(trim($this->mgt_produto_tipo->ItemIndex) <> '---Todos---')
         {
            $Comando_SQL .= " AND (mgt_produto_tipo = '" . trim($this->mgt_produto_tipo->ItemIndex) . "') ";
         }

         $Comando_SQL .= "GROUP BY mgt_movto_produto_codigo ";
         $Comando_SQL .= "ORDER BY mgt_movto_produto_codigo ";

         GetConexaoPrincipal()->SQL_Relatorio->Close();
         GetConexaoPrincipal()->SQL_Relatorio->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Relatorio->Open();

         GetConexaoPrincipal()->SQL_Relatorio->First();

         if((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
            {
               $Comando_SQL = "SELECT * FROM mgt_swap_vendidos_periodo WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_codigo']) . "'";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();

               if((GetConexaoPrincipal()->SQL_Comunitario->EOF) != 1)
               {
                  $Comando_SQL = "UPDATE mgt_swap_vendidos_periodo SET ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_titulo']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_ent = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_qtde_informada']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "' ";
                  $Comando_SQL .= "WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_codigo']) . "'";
               }
               else
               {
                  $Comando_SQL = "INSERT INTO mgt_swap_vendidos_periodo(";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_cod, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sai, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_ent, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_pro, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld) ";
                  $Comando_SQL .= "VALUES(";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_codigo']) . "', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_titulo']) . "', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_qtde_informada']) . "', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "') ";
               }

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               GetConexaoPrincipal()->SQL_Relatorio->Next();
            }
         }

         //*** Seleciona o Movimento de Estoque Referente as Saidas ***

         $Comando_SQL = "SELECT ";
         $Comando_SQL .= "mgt_movto_produto_codigo, ";
         $Comando_SQL .= "mgt_movto_produto_titulo, ";
         $Comando_SQL .= "SUM(mgt_movto_qtde_informada) AS mgt_movto_qtde_informada, ";
         $Comando_SQL .= "mgt_produto_estoque_atual ";
         $Comando_SQL .= "FROM ";
         $Comando_SQL .= "mgt_movtos_estoque, ";
         $Comando_SQL .= "mgt_produtos ";
         $Comando_SQL .= "WHERE ";
         $Comando_SQL .= "(mgt_movto_tipo = '2') AND ";
         $Comando_SQL .= "(mgt_movto_nota = '0') AND ";

         if(trim($this->mgt_produto_codigo->Text) <> '')
         {
            $Comando_SQL .= "(mgt_movto_produto_codigo like '" . trim($this->mgt_produto_codigo->Text) . "%') AND ";
         }

         $Comando_SQL .= "((mgt_movto_data >='" . inverte_data_dma_to_amd(trim($this->data_inicial->Text)) . "') AND (mgt_movto_data <='" . inverte_data_dma_to_amd(trim($this->data_final->Text)) . "')) AND ";
         $Comando_SQL .= "(mgt_movto_produto_codigo = mgt_produto_codigo) ";

         if(trim($this->mgt_produto_tipo->ItemIndex) <> '---Todos---')
         {
            $Comando_SQL .= " AND (mgt_produto_tipo = '" . trim($this->mgt_produto_tipo->ItemIndex) . "') ";
         }

         $Comando_SQL .= "GROUP BY mgt_movto_produto_codigo ";
         $Comando_SQL .= "ORDER BY mgt_movto_produto_codigo ";

         GetConexaoPrincipal()->SQL_Relatorio->Close();
         GetConexaoPrincipal()->SQL_Relatorio->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Relatorio->Open();

         GetConexaoPrincipal()->SQL_Relatorio->First();

         if((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
            {
               $Comando_SQL = "SELECT * FROM mgt_swap_vendidos_periodo WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_codigo']) . "'";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();

               if((GetConexaoPrincipal()->SQL_Comunitario->EOF) != 1)
               {
                  $Comando_SQL = "UPDATE mgt_swap_vendidos_periodo SET ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_titulo']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sai = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_qtde_informada']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "' ";
                  $Comando_SQL .= "WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_codigo']) . "'";
               }
               else
               {
                  $Comando_SQL = "INSERT INTO mgt_swap_vendidos_periodo(";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_cod, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sai, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_ent, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_pro, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld) ";
                  $Comando_SQL .= "VALUES(";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_codigo']) . "', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_titulo']) . "', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_qtde_informada']) . "', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "') ";
               }

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               GetConexaoPrincipal()->SQL_Relatorio->Next();
            }
         }

         //*** Seleciona o Movimento de Estoque Referente a Producao ***

         $Comando_SQL = "SELECT ";
         $Comando_SQL .= "mgt_movto_produto_codigo, ";
         $Comando_SQL .= "mgt_movto_produto_titulo, ";
         $Comando_SQL .= "SUM(mgt_movto_qtde_informada) AS mgt_movto_qtde_informada, ";
         $Comando_SQL .= "mgt_produto_estoque_atual ";
         $Comando_SQL .= "FROM ";
         $Comando_SQL .= "mgt_movtos_estoque, ";
         $Comando_SQL .= "mgt_produtos ";
         $Comando_SQL .= "WHERE ";
         $Comando_SQL .= "(mgt_movto_tipo = '1') AND ";
         $Comando_SQL .= "(mgt_movto_nota = '0') AND ";

         if(trim($this->mgt_produto_codigo->Text) <> '')
         {
            $Comando_SQL .= "(mgt_movto_produto_codigo like '" . trim($this->mgt_produto_codigo->Text) . "%') AND ";
         }

         $Comando_SQL .= "((mgt_movto_data >='" . inverte_data_dma_to_amd(trim($this->data_inicial->Text)) . "') AND (mgt_movto_data <='" . inverte_data_dma_to_amd(trim($this->data_final->Text)) . "')) AND ";
         $Comando_SQL .= "(mgt_movto_produto_codigo = mgt_produto_codigo) ";

         if(trim($this->mgt_produto_tipo->ItemIndex) <> '---Todos---')
         {
            $Comando_SQL .= "AND (mgt_produto_tipo = '" . trim($this->mgt_produto_tipo->ItemIndex) . "') ";
         }

         $Comando_SQL .= "GROUP BY mgt_movto_produto_codigo ";
         $Comando_SQL .= "ORDER BY mgt_movto_produto_codigo ";

         GetConexaoPrincipal()->SQL_Relatorio->Close();
         GetConexaoPrincipal()->SQL_Relatorio->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Relatorio->Open();

         GetConexaoPrincipal()->SQL_Relatorio->First();

         if((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
            {
               $Comando_SQL = "SELECT * FROM mgt_swap_vendidos_periodo WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_codigo']) . "'";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();

               if((GetConexaoPrincipal()->SQL_Comunitario->EOF) != 1)
               {
                  $Comando_SQL = "UPDATE mgt_swap_vendidos_periodo SET ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_titulo']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_pro = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_qtde_informada']) . "', ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "' ";
                  $Comando_SQL .= "WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_codigo']) . "'";
               }
               else
               {
                  $Comando_SQL = "INSERT INTO mgt_swap_vendidos_periodo(";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_cod, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sai, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_ent, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_pro, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld) ";
                  $Comando_SQL .= "VALUES(";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_codigo']) . "', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_produto_titulo']) . "', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_movto_qtde_informada']) . "', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "') ";
               }

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               GetConexaoPrincipal()->SQL_Relatorio->Next();
            }
         }

         //*** Seleciona os Produtos nao Movimentados ***

         $Comando_SQL = "SELECT ";
         $Comando_SQL .= "mgt_produto_codigo, ";
         $Comando_SQL .= "mgt_produto_descricao, ";
         $Comando_SQL .= "mgt_produto_estoque_atual ";
         $Comando_SQL .= "FROM ";
         $Comando_SQL .= "mgt_produtos ";

         if(trim($this->mgt_produto_tipo->ItemIndex) <> '---Todos---')
         {
            $Comando_SQL .= "WHERE (mgt_produto_tipo = '" . trim($this->mgt_produto_tipo->ItemIndex) . "') ";

            if(trim($this->mgt_produto_codigo->Text) <> '')
            {
               $Comando_SQL .= "AND (mgt_produto_codigo like '" . trim($this->mgt_produto_codigo->Text) . "%') ";
            }
         }
         else
         {
            if(trim($this->mgt_produto_codigo->Text) <> '')
            {
               $Comando_SQL .= "WHERE (mgt_produto_codigo like '" . trim($this->mgt_produto_codigo->Text) . "%') ";
            }
         }

         $Comando_SQL .= "GROUP BY mgt_produto_codigo ";
         $Comando_SQL .= "ORDER BY mgt_produto_codigo ";

         GetConexaoPrincipal()->SQL_Relatorio->Close();
         GetConexaoPrincipal()->SQL_Relatorio->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Relatorio->Open();

         GetConexaoPrincipal()->SQL_Relatorio->First();

         if((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_Relatorio->EOF) != 1)
            {
               $Comando_SQL = "SELECT * FROM mgt_swap_vendidos_periodo WHERE mgt_swap_vendido_periodo_prod_cod = '" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_codigo']) . "'";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();

               if((GetConexaoPrincipal()->SQL_Comunitario->EOF) == 1)
               {
                  $Comando_SQL = "INSERT INTO mgt_swap_vendidos_periodo(";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_cod, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_prod_desc, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_nf, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_prg, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_vlr_out, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sai, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_ent, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_pro, ";
                  $Comando_SQL .= "mgt_swap_vendido_periodo_qtde_sld) ";
                  $Comando_SQL .= "VALUES(";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_codigo']) . "', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_descricao']) . "', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'0', ";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_produto_estoque_atual']) . "') ";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }

               GetConexaoPrincipal()->SQL_Relatorio->Next();
            }
         }

         //*** Efetua a Selecao para Gerar o Relatorio ***

         $Comando_SQL = "SELECT * FROM mgt_swap_vendidos_periodo ORDER BY mgt_swap_vendido_periodo_prod_desc";

         GetConexaoPrincipal()->SQL_Relatorio->Close();
         GetConexaoPrincipal()->SQL_Relatorio->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Relatorio->Open();

         //*** Sessoes para a Impressao ***
         $_SESSION['imprime_data_inicial'] = $this->data_inicial->Text;
         $_SESSION['imprime_data_final'] = $this->data_final->Text;
         $_SESSION['imprime_produto_tipo'] = $this->mgt_produto_tipo->Items[$this->mgt_produto_tipo->ItemIndex];
         $_SESSION['imprime_produto_codigo'] = $this->mgt_produto_codigo->Text;

         echo "<script language=\"JavaScript\">";
         echo "window.open('rel_produtos_vendidos_periodo_imp.php','rel_produtos_vendidos_periodo_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo "</script>";
      }
   }
   function relprodutosvendidosperiodoJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relprodutosvendidosperiodo;

//Creates the form
$relprodutosvendidosperiodo = new relprodutosvendidosperiodo($application);

//Read from resource file
$relprodutosvendidosperiodo->loadResource(__FILE__);

//Shows the form
$relprodutosvendidosperiodo->show();

?>