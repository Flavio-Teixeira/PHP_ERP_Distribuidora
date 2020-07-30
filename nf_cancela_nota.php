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
class nfcancelanota extends Page
{
   public $mgt_nota_fiscal_finalidade = null;
   public $mgt_operacao_cadastro_motivo = null;
   public $Label16 = null;
   public $Label3 = null;
   public $mgt_nota_fiscal_tipo_faturamento = null;
   public $Label26 = null;
   public $mgt_nota_fiscal_tipo_nota = null;
   public $Label15 = null;
   public $mgt_nota_fiscal_numero = null;
   public $mgt_nota_fiscal_valor_total = null;
   public $Label14 = null;
   public $mgt_nota_fiscal_valor_produtos = null;
   public $Label114 = null;
   public $mgt_nota_fiscal_valor_ipi = null;
   public $Label13 = null;
   public $mgt_nota_fiscal_valor_icms_sub = null;
   public $Label113 = null;
   public $mgt_nota_fiscal_outras_despesas = null;
   public $Label12 = null;
   public $mgt_nota_fiscal_base_icms_sub = null;
   public $Label112 = null;
   public $Label111 = null;
   public $mgt_nota_fiscal_valor_icms = null;
   public $Label115 = null;
   public $mgt_nota_fiscal_valor_seguro = null;
   public $mgt_nota_fiscal_valor_frete = null;
   public $Label11 = null;
   public $mgt_nota_fiscal_base_icms = null;
   public $Label110 = null;
   public $mgt_nota_fiscal_natureza_operacao = null;
   public $mgt_nota_fiscal_cfop_2 = null;
   public $mgt_nota_fiscal_cfop = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $GroupBox4 = null;
   public $Label84 = null;
   public $mgt_nota_fiscal_inscricao_municipal = null;
   public $mgt_nota_fiscal_inscricao_estadual = null;
   public $Label83 = null;
   public $mgt_nota_fiscal_razao_social = null;
   public $Label69 = null;
   public $mgt_nota_fiscal_cliente_nome = null;
   public $Label7 = null;
   public $mgt_nota_fiscal_cliente_codigo = null;
   public $Label6 = null;
   public $mgt_nota_fiscal_cliente_numero = null;
   public $Label5 = null;
   public $mgt_nota_fiscal_pedido = null;
   public $Label4 = null;
   public $mgt_nota_fiscal_faturamento = null;
   public $Label2 = null;
   public $GroupBox2 = null;
   public $bt_procurar = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $confirmacao = null;
   public $bt_excluir = null;
   public $MSG_Erro = null;
   public $Label1 = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function mgt_nota_fiscal_tipo_faturamentoJSChange($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((document.nfcancelanota.mgt_nota_fiscal_tipo_faturamento.value == 'Nota Fiscal (Produtos)') || (document.nfcancelanota.mgt_nota_fiscal_tipo_faturamento.value == 'Venda Programada (Produtos)') )
      {
        document.nfcancelanota.mgt_nota_fiscal_finalidade.value = 'PRD';
      }
      else if( document.nfcancelanota.mgt_nota_fiscal_tipo_faturamento.value == 'Nao Vinculado a Nota Fiscal' )
      {
        document.nfcancelanota.mgt_nota_fiscal_finalidade.value = 'NVL';
      }
      else
      {
        document.nfcancelanota.mgt_nota_fiscal_finalidade.value = 'SRV';
      }

<?php

   }

   function mgt_nota_fiscal_finalidadeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_numero.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_tipo_notaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.bt_procurar.focus();
     return false;
   }

<?php

   }


   function bt_procurarClick($sender, $params)
   {
      $this->mgt_nota_fiscal_tipo_nota->Text = '';
      $this->mgt_nota_fiscal_faturamento->Text = '';
      $this->mgt_nota_fiscal_pedido->Text = '';
      $this->mgt_nota_fiscal_cliente_numero->Text = '';
      $this->mgt_nota_fiscal_cliente_codigo->Text = '';
      $this->mgt_nota_fiscal_cliente_nome->Text = '';
      $this->mgt_nota_fiscal_razao_social->Text = '';
      $this->mgt_nota_fiscal_inscricao_estadual->Text = '';
      $this->mgt_nota_fiscal_inscricao_municipal->Text = '';
      $this->mgt_nota_fiscal_cfop->Text = '';
      $this->mgt_nota_fiscal_cfop_2->Text = '';
      $this->mgt_nota_fiscal_natureza_operacao->Text = '';
      $this->mgt_nota_fiscal_base_icms->Text = '0.00';
      $this->mgt_nota_fiscal_valor_seguro->Text = '0.00';
      $this->mgt_nota_fiscal_base_icms_sub->Text = '0.00';
      $this->mgt_nota_fiscal_valor_icms_sub->Text = '0.00';
      $this->mgt_nota_fiscal_valor_produtos->Text = '0.00';
      $this->mgt_nota_fiscal_valor_frete->Text = '0.00';
      $this->mgt_nota_fiscal_valor_icms->Text = '0.00';
      $this->mgt_nota_fiscal_outras_despesas->Text = '0.00';
      $this->mgt_nota_fiscal_valor_ipi->Text = '0.00';
      $this->mgt_nota_fiscal_valor_total->Text = '0.00';

      if(trim($this->mgt_nota_fiscal_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Numero.";
      }
      else
      {
         if((trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Nota Fiscal (Produtos)")Or(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Nota Fiscal (Servicos)")Or(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Nao Vinculado a Nota Fiscal"))
         {
            $Comando_SQL = "select * from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = '" . trim($this->mgt_nota_fiscal_finalidade->Text) . "' And mgt_nota_fiscal_numero = '" . trim($this->mgt_nota_fiscal_numero->Text) . "' order by mgt_nota_fiscal_numero";

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) == 1)
            {
               $this->MSG_Erro->Caption = "Esta Nota Fiscal nao foi encontrada.";
            }
            else
            {
               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_tipo_nota']) == '0')
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Entrada';
               }
               else
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Saida';
               }

               $this->mgt_nota_fiscal_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_faturamento'];
               $this->mgt_nota_fiscal_pedido->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_pedido'];
               $this->mgt_nota_fiscal_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_numero'];
               $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'];
               $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'];
               $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'];
               $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_estadual'];
               $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_municipal'];
               $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop'];
               $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop_2'];
               $this->mgt_nota_fiscal_natureza_operacao->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_natureza_operacao'];
               $this->mgt_nota_fiscal_base_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms'];
               $this->mgt_nota_fiscal_valor_seguro->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_seguro'];
               $this->mgt_nota_fiscal_base_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms_sub'];
               $this->mgt_nota_fiscal_valor_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms_sub'];
               $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_produtos'];
               $this->mgt_nota_fiscal_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_frete'];
               $this->mgt_nota_fiscal_valor_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms'];
               $this->mgt_nota_fiscal_outras_despesas->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_outras_despesas'];
               $this->mgt_nota_fiscal_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_ipi'];
               $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'];

               $this->MSG_Erro->Caption = "";
            }
         }
         else
         {
            $Comando_SQL = "select * from mgt_programadas where mgt_programada_finalidade = '" . trim($this->mgt_nota_fiscal_finalidade->Text) . "' And mgt_programada_numero = '" . trim($this->mgt_nota_fiscal_numero->Text) . "' order by mgt_programada_numero";

            GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
            GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) == 1)
            {
               $this->MSG_Erro->Caption = "Esta Venda Programada nao foi encontrada.";
            }
            else
            {
               if(trim(GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_tipo_nota']) == '0')
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Entrada';
               }
               else
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Saida';
               }

               $this->mgt_nota_fiscal_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_faturamento'];
               $this->mgt_nota_fiscal_pedido->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_pedido'];
               $this->mgt_nota_fiscal_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_numero'];
               $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'];
               $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'];
               $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_razao_social'];
               $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_inscricao_estadual'];
               $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_inscricao_municipal'];
               $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cfop'];
               $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cfop_2'];
               $this->mgt_nota_fiscal_natureza_operacao->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_natureza_operacao'];
               $this->mgt_nota_fiscal_base_icms->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_base_icms'];
               $this->mgt_nota_fiscal_valor_seguro->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_seguro'];
               $this->mgt_nota_fiscal_base_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_base_icms_sub'];
               $this->mgt_nota_fiscal_valor_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_icms_sub'];
               $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_produtos'];
               $this->mgt_nota_fiscal_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_frete'];
               $this->mgt_nota_fiscal_valor_icms->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_icms'];
               $this->mgt_nota_fiscal_outras_despesas->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_outras_despesas'];
               $this->mgt_nota_fiscal_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_ipi'];
               $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_total'];

               $this->MSG_Erro->Caption = "";
            }
         }
      }
   }

   function mgt_nota_fiscal_valor_totalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.bt_fechar.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_ipiJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_valor_total.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_outras_despesasJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_valor_ipi.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_icmsJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_outras_despesas.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_freteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_valor_icms.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_produtosJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_valor_frete.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_icms_subJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_valor_produtos.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_base_icms_subJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_valor_icms_sub.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_seguroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_base_icms_sub.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_base_icmsJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_valor_seguro.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_natureza_operacaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_base_icms.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cfop_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_natureza_operacao.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cfopJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_cfop_2.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_pedidoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_cliente_numero.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_inscricao_municipalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_cfop.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_inscricao_estadualJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_inscricao_municipal.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_razao_socialJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_inscricao_estadual.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cliente_nomeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_razao_social.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cliente_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_cliente_nome.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cliente_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_cliente_codigo.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_faturamentoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_pedido.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_tipo_faturamentoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_numero.focus();
     return false;
   }

<?php

   }




   function mgt_nota_fiscal_numeroJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.nfcancelanota.mgt_nota_fiscal_numero
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Traco ***

<?php

   }

   function bt_simClick($sender, $params)
   {
      if(trim($this->mgt_operacao_cadastro_motivo->text) <> '')
      {
         //*** Registra o motivo da exclusao do registro. ***

         $Comando_SQL = "insert into mgt_operacoes_cadastros(";
         $Comando_SQL .= "mgt_operacao_cadastro_data, ";
         $Comando_SQL .= "mgt_operacao_cadastro_hora, ";
         $Comando_SQL .= "mgt_operacao_cadastro_usuario, ";
         $Comando_SQL .= "mgt_operacao_cadastro_area, ";
         $Comando_SQL .= "mgt_operacao_cadastro_operacao, ";
         $Comando_SQL .= "mgt_operacao_cadastro_codigo_chave, ";
         $Comando_SQL .= "mgt_operacao_cadastro_motivo) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
         $Comando_SQL .= "'" . date("H:i:s", time()) . "',";
         $Comando_SQL .= "'" . trim($_SESSION['login_usuario']) . "',";
         $Comando_SQL .= "'" . trim($this->area_sistema->Caption) . "',";
         $Comando_SQL .= "'" . 'Exclusao' . "',";
         $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_numero->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Ajusta o Estoque do Produto ***

         if((trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Nota Fiscal (Produtos)")Or(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Nota Fiscal (Servicos)")Or(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Nao Vinculado a Nota Fiscal"))
         {
            $Comando_SQL = "select * from mgt_notas_fiscais_produtos where mgt_nota_fiscal_produto_finalidade = '" . trim($this->mgt_nota_fiscal_finalidade->Text) . "' And mgt_nota_fiscal_produto_numero_nota = '" . trim($this->mgt_nota_fiscal_numero->Text) . "' order by mgt_nota_fiscal_produto_numero";

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Close();
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->EOF) != 1)
            {
               while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->EOF) != 1)
               {
                  //*** Seleciona o Produto para Obter o Estoque ***

                  $Comando_SQL = "select * from mgt_produtos";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_codigo']) . "'";

                  GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
                  GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

                  //*** Registra o Movimento de Estoque ***

                  if($_SESSION['login_estoque'] == "S")
                  {
                     $qtde_atual = 0;
                     $qtde_anterior = 0;
                     $qtde_informada = 0;

                     $qtde_anterior = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'];
                     $qtde_informada = trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_quantidade']);

                     if(trim($this->mgt_nota_fiscal_tipo_nota->Text) == 'Entrada')
                     {
                        $qtde_atual = $qtde_anterior - $qtde_informada;
                     }
                     else
                     {
                        $qtde_atual = $qtde_anterior + $qtde_informada;
                     }

                     $Comando_SQL = "insert into mgt_movtos_estoque(";
                     $Comando_SQL .= "mgt_movto_produto_codigo, ";
                     $Comando_SQL .= "mgt_movto_produto_codigo_interno, ";
                     $Comando_SQL .= "mgt_movto_produto_titulo, ";
                     $Comando_SQL .= "mgt_movto_tipo, ";
                     $Comando_SQL .= "mgt_movto_data, ";
                     $Comando_SQL .= "mgt_movto_qtde_anterior, ";
                     $Comando_SQL .= "mgt_movto_qtde_informada, ";
                     $Comando_SQL .= "mgt_movto_qtde_atual, ";
                     $Comando_SQL .= "mgt_movto_nota, ";
                     $Comando_SQL .= "mgt_movto_nro_entrada_saida) ";
                     $Comando_SQL .= "values(";
                     $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_codigo']) . "',";
                     $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_referencia']) . "',";
                     $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_descricao']) . "',";

                     if(trim($this->mgt_nota_fiscal_tipo_nota->Text) == 'Entrada')
                     {
                        $Comando_SQL .= "'" . "3" . "',";
                     }
                     else
                     {
                        $Comando_SQL .= "'" . "4" . "',";
                     }

                     $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
                     $Comando_SQL .= "'" . $qtde_anterior . "',";
                     $Comando_SQL .= "'" . $qtde_informada . "',";
                     $Comando_SQL .= "'" . $qtde_atual . "',";
                     $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_numero->Text) . "',";
                     $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_faturamento->Text) . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();

                     //*** Atualiza o Estoque no Cadastro do Produto ***

                     $Comando_SQL = "update mgt_produtos set ";
                     $Comando_SQL .= "mgt_produto_estoque_atual = '" . $qtde_atual . "' ";
                     $Comando_SQL .= " where ";
                     $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_codigo']) . "'";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();

                     //*** Atualiza o Estoque no PDVTEX ***
					 //*** Inicio ***
                     $Comando_SQL = "UPDATE pdvtex.Produtos SET ";
                     $Comando_SQL .= "Produto_Estoque_Atual = Produto_Estoque_Atual + " . $qtde_informada . " ";
                     $Comando_SQL .= " WHERE ";
                     $Comando_SQL .= "Produto_Cod_Barra = '" . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Fields['mgt_nota_fiscal_produto_codigo_barras']) . "'";

					 $nro_conexao = @mysql_connect("localhost","root","liberar7777");
					 $res_conexao = @mysql_select_db("pdvtex",$nro_conexao);
					 $resultado   = @mysql_query($Comando_SQL) or die(mysql_error());
					 @mysql_free_result($resultado);
					 @mysql_close($nro_conexao);
					 $resultado = null;
					 $nro_conexao = null;
					 //*** Fim ***
                  }

                  GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Next();
               }
            }

            //*** Cancela a Nota Fiscal ***

            $Comando_SQL = "delete from mgt_notas_fiscais ";
            $Comando_SQL .= " where ";
            $Comando_SQL .= "mgt_nota_fiscal_finalidade = '" . trim($this->mgt_nota_fiscal_finalidade->Text) . "' And ";
            $Comando_SQL .= "mgt_nota_fiscal_numero='" . trim($this->mgt_nota_fiscal_numero->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Cancela os Produtos da Nota Fiscal ***

            $Comando_SQL = "delete from mgt_notas_fiscais_produtos ";
            $Comando_SQL .= " where ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_finalidade = '" . trim($this->mgt_nota_fiscal_finalidade->Text) . "' And ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_numero_nota='" . trim($this->mgt_nota_fiscal_numero->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }
         else
         {
            $Comando_SQL = "select * from mgt_programadas_produtos where mgt_programada_produto_finalidade = '" . trim($this->mgt_nota_fiscal_finalidade->Text) . "' And mgt_programada_produto_numero_nota = '" . trim($this->mgt_nota_fiscal_numero->Text) . "' order by mgt_programada_produto_numero";

            GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Close();
            GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->EOF) != 1)
            {
               while((GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->EOF) != 1)
               {
                  //*** Seleciona o Produto para Obter o Estoque ***

                  $Comando_SQL = "select * from mgt_produtos";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Fields['mgt_programada_produto_codigo']) . "'";

                  GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
                  GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

                  //*** Registra o Movimento de Estoque ***

                  if($_SESSION['login_estoque'] == "S")
                  {
                     $qtde_atual = 0;
                     $qtde_anterior = 0;
                     $qtde_informada = 0;

                     $qtde_anterior = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'];
                     $qtde_informada = trim(GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Fields['mgt_programada_produto_quantidade']);

                     if(trim($this->mgt_nota_fiscal_tipo_nota->Text) == 'Entrada')
                     {
                        $qtde_atual = $qtde_anterior - $qtde_informada;
                     }
                     else
                     {
                        $qtde_atual = $qtde_anterior + $qtde_informada;
                     }

                     $Comando_SQL = "insert into mgt_movtos_estoque(";
                     $Comando_SQL .= "mgt_movto_produto_codigo, ";
                     $Comando_SQL .= "mgt_movto_produto_codigo_interno, ";
                     $Comando_SQL .= "mgt_movto_produto_titulo, ";
                     $Comando_SQL .= "mgt_movto_tipo, ";
                     $Comando_SQL .= "mgt_movto_data, ";
                     $Comando_SQL .= "mgt_movto_qtde_anterior, ";
                     $Comando_SQL .= "mgt_movto_qtde_informada, ";
                     $Comando_SQL .= "mgt_movto_qtde_atual, ";
                     $Comando_SQL .= "mgt_movto_nota, ";
                     $Comando_SQL .= "mgt_movto_nro_entrada_saida) ";
                     $Comando_SQL .= "values(";
                     $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Fields['mgt_programada_produto_codigo']) . "',";
                     $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Fields['mgt_programada_produto_referencia']) . "',";
                     $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Fields['mgt_programada_produto_descricao']) . "',";

                     if(trim($this->mgt_nota_fiscal_tipo_nota->Text) == 'Entrada')
                     {
                        $Comando_SQL .= "'" . "3" . "',";
                     }
                     else
                     {
                        $Comando_SQL .= "'" . "4" . "',";
                     }

                     $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
                     $Comando_SQL .= "'" . $qtde_anterior . "',";
                     $Comando_SQL .= "'" . $qtde_informada . "',";
                     $Comando_SQL .= "'" . $qtde_atual . "',";
                     $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_numero->Text) . "',";
                     $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_faturamento->Text) . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();

                     //*** Atualiza o Estoque no Cadastro do Produto ***

                     $Comando_SQL = "update mgt_produtos set ";
                     $Comando_SQL .= "mgt_produto_estoque_atual = '" . $qtde_atual . "' ";
                     $Comando_SQL .= " where ";
                     $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Fields['mgt_programada_produto_codigo']) . "'";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();

                     //*** Atualiza o Estoque no PDVTEX ***
					 //*** Inicio ***
                     $Comando_SQL = "UPDATE pdvtex.Produtos SET ";
                     $Comando_SQL .= "Produto_Estoque_Atual = Produto_Estoque_Atual + " . $qtde_informada . " ";
                     $Comando_SQL .= " WHERE ";
                     $Comando_SQL .= "Produto_Cod_Barra = '" . trim(GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Fields['mgt_programada_produto_codigo_barras']) . "'";

					 $nro_conexao = @mysql_connect("localhost","root","liberar7777");
					 $res_conexao = @mysql_select_db("pdvtex",$nro_conexao);
					 $resultado   = @mysql_query($Comando_SQL) or die(mysql_error());
					 @mysql_free_result($resultado);
					 @mysql_close($nro_conexao);
					 $resultado = null;
					 $nro_conexao = null;
					 //*** Fim ***
                  }
                  GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Next();
               }
            }

            //*** Cancela a Venda Programada ***

            $Comando_SQL = "delete from mgt_programadas ";
            $Comando_SQL .= " where ";
            $Comando_SQL .= "mgt_programada_finalidade = '" . trim($this->mgt_nota_fiscal_finalidade->Text) . "' And ";
            $Comando_SQL .= "mgt_programada_numero='" . trim($this->mgt_nota_fiscal_numero->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Cancela os Produtos da Venda Programada ***

            $Comando_SQL = "delete from mgt_programadas_produtos ";
            $Comando_SQL .= " where ";
            $Comando_SQL .= "mgt_programada_produto_finalidade = '" . trim($this->mgt_nota_fiscal_finalidade->Text) . "' And ";
            $Comando_SQL .= "mgt_programada_produto_numero_nota='" . trim($this->mgt_nota_fiscal_numero->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         //*** Volta o Faturamento da Nota ***

         if(trim($this->mgt_nota_fiscal_finalidade->Text) == 'PRD')
         {
            $Comando_SQL = "update mgt_faturamentos set ";
            $Comando_SQL .= "mgt_faturamento_status='Aguardando' where ";
            $Comando_SQL .= "mgt_faturamento_numero='" . trim($this->mgt_nota_fiscal_faturamento->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }
         elseif(trim($this->mgt_nota_fiscal_finalidade->Text) == 'SRV')
         {
            $Comando_SQL = "update mgt_faturamentos_srv set ";
            $Comando_SQL .= "mgt_faturamento_srv_status='Aguardando' where ";
            $Comando_SQL .= "mgt_faturamento_srv_numero='" . trim($this->mgt_nota_fiscal_faturamento->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         //*** Limpa os Campos para um Novo Cancelamento ***

         $this->MSG_Erro->Caption = "A " . trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) . " de Numero: " . trim($this->mgt_nota_fiscal_numero->Text) . " foi Cancelada com Sucesso !!!";

         $this->mgt_nota_fiscal_tipo_nota->Text = '';
         $this->mgt_nota_fiscal_faturamento->Text = '';
         $this->mgt_nota_fiscal_pedido->Text = '';
         $this->mgt_nota_fiscal_cliente_numero->Text = '';
         $this->mgt_nota_fiscal_cliente_codigo->Text = '';
         $this->mgt_nota_fiscal_cliente_nome->Text = '';
         $this->mgt_nota_fiscal_razao_social->Text = '';
         $this->mgt_nota_fiscal_inscricao_estadual->Text = '';
         $this->mgt_nota_fiscal_inscricao_municipal->Text = '';
         $this->mgt_nota_fiscal_cfop->Text = '';
         $this->mgt_nota_fiscal_cfop_2->Text = '';
         $this->mgt_nota_fiscal_natureza_operacao->Text = '';
         $this->mgt_nota_fiscal_base_icms->Text = '0.00';
         $this->mgt_nota_fiscal_valor_seguro->Text = '0.00';
         $this->mgt_nota_fiscal_base_icms_sub->Text = '0.00';
         $this->mgt_nota_fiscal_valor_icms_sub->Text = '0.00';
         $this->mgt_nota_fiscal_valor_produtos->Text = '0.00';
         $this->mgt_nota_fiscal_valor_frete->Text = '0.00';
         $this->mgt_nota_fiscal_valor_icms->Text = '0.00';
         $this->mgt_nota_fiscal_outras_despesas->Text = '0.00';
         $this->mgt_nota_fiscal_valor_ipi->Text = '0.00';
         $this->mgt_nota_fiscal_valor_total->Text = '0.00';

         $this->confirmacao->Top = 432;
         $this->confirmacao->IsVisible = false;
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->mgt_nota_fiscal_tipo_nota->Text = '';
      $this->mgt_nota_fiscal_faturamento->Text = '';
      $this->mgt_nota_fiscal_pedido->Text = '';
      $this->mgt_nota_fiscal_cliente_numero->Text = '';
      $this->mgt_nota_fiscal_cliente_codigo->Text = '';
      $this->mgt_nota_fiscal_cliente_nome->Text = '';
      $this->mgt_nota_fiscal_razao_social->Text = '';
      $this->mgt_nota_fiscal_inscricao_estadual->Text = '';
      $this->mgt_nota_fiscal_inscricao_municipal->Text = '';
      $this->mgt_nota_fiscal_cfop->Text = '';
      $this->mgt_nota_fiscal_cfop_2->Text = '';
      $this->mgt_nota_fiscal_natureza_operacao->Text = '';
      $this->mgt_nota_fiscal_base_icms->Text = '0.00';
      $this->mgt_nota_fiscal_valor_seguro->Text = '0.00';
      $this->mgt_nota_fiscal_base_icms_sub->Text = '0.00';
      $this->mgt_nota_fiscal_valor_icms_sub->Text = '0.00';
      $this->mgt_nota_fiscal_valor_produtos->Text = '0.00';
      $this->mgt_nota_fiscal_valor_frete->Text = '0.00';
      $this->mgt_nota_fiscal_valor_icms->Text = '0.00';
      $this->mgt_nota_fiscal_outras_despesas->Text = '0.00';
      $this->mgt_nota_fiscal_valor_ipi->Text = '0.00';
      $this->mgt_nota_fiscal_valor_total->Text = '0.00';

      $this->confirmacao->Top = 432;
      $this->confirmacao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->mgt_nota_fiscal_tipo_nota->Text = '';
      $this->mgt_nota_fiscal_faturamento->Text = '';
      $this->mgt_nota_fiscal_pedido->Text = '';
      $this->mgt_nota_fiscal_cliente_numero->Text = '';
      $this->mgt_nota_fiscal_cliente_codigo->Text = '';
      $this->mgt_nota_fiscal_cliente_nome->Text = '';
      $this->mgt_nota_fiscal_razao_social->Text = '';
      $this->mgt_nota_fiscal_inscricao_estadual->Text = '';
      $this->mgt_nota_fiscal_inscricao_municipal->Text = '';
      $this->mgt_nota_fiscal_cfop->Text = '';
      $this->mgt_nota_fiscal_cfop_2->Text = '';
      $this->mgt_nota_fiscal_natureza_operacao->Text = '';
      $this->mgt_nota_fiscal_base_icms->Text = '0.00';
      $this->mgt_nota_fiscal_valor_seguro->Text = '0.00';
      $this->mgt_nota_fiscal_base_icms_sub->Text = '0.00';
      $this->mgt_nota_fiscal_valor_icms_sub->Text = '0.00';
      $this->mgt_nota_fiscal_valor_produtos->Text = '0.00';
      $this->mgt_nota_fiscal_valor_frete->Text = '0.00';
      $this->mgt_nota_fiscal_valor_icms->Text = '0.00';
      $this->mgt_nota_fiscal_outras_despesas->Text = '0.00';
      $this->mgt_nota_fiscal_valor_ipi->Text = '0.00';
      $this->mgt_nota_fiscal_valor_total->Text = '0.00';

      if(trim($this->mgt_nota_fiscal_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Numero.";
      }
      else
      {
         if((trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Nota Fiscal (Produtos)")Or(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Nota Fiscal (Servicos)")Or(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Nao Vinculado a Nota Fiscal"))
         {
            $Comando_SQL = "select * from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = '" . trim($this->mgt_nota_fiscal_finalidade->Text) . "' And mgt_nota_fiscal_numero = '" . trim($this->mgt_nota_fiscal_numero->Text) . "' order by mgt_nota_fiscal_numero";

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) == 1)
            {
               $this->MSG_Erro->Caption = "Esta Nota Fiscal nao foi encontrada.";
            }
            else
            {
               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_tipo_nota']) == '0')
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Entrada';
               }
               else
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Saida';
               }

               $this->mgt_nota_fiscal_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_faturamento'];
               $this->mgt_nota_fiscal_pedido->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_pedido'];
               $this->mgt_nota_fiscal_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_numero'];
               $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'];
               $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'];
               $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'];
               $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_estadual'];
               $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_municipal'];
               $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop'];
               $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop_2'];
               $this->mgt_nota_fiscal_natureza_operacao->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_natureza_operacao'];
               $this->mgt_nota_fiscal_base_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms'];
               $this->mgt_nota_fiscal_valor_seguro->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_seguro'];
               $this->mgt_nota_fiscal_base_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms_sub'];
               $this->mgt_nota_fiscal_valor_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms_sub'];
               $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_produtos'];
               $this->mgt_nota_fiscal_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_frete'];
               $this->mgt_nota_fiscal_valor_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms'];
               $this->mgt_nota_fiscal_outras_despesas->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_outras_despesas'];
               $this->mgt_nota_fiscal_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_ipi'];
               $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'];

               $this->MSG_Erro->Caption = "";

               $this->confirmacao->Top = 136;
               $this->confirmacao->IsVisible = true;
            }
         }
         else
         {
            $Comando_SQL = "select * from mgt_programadas where mgt_programada_finalidade = '" . trim($this->mgt_nota_fiscal_finalidade->Text) . "' And mgt_programada_numero = '" . trim($this->mgt_nota_fiscal_numero->Text) . "' order by mgt_programada_numero";

            GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
            GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) == 1)
            {
               $this->MSG_Erro->Caption = "Esta Venda Programada nao foi encontrada.";
            }
            else
            {
               if(trim(GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_tipo_nota']) == '0')
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Entrada';
               }
               else
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Saida';
               }

               $this->mgt_nota_fiscal_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_faturamento'];
               $this->mgt_nota_fiscal_pedido->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_pedido'];
               $this->mgt_nota_fiscal_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_numero'];
               $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'];
               $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'];
               $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_razao_social'];
               $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_inscricao_estadual'];
               $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_inscricao_municipal'];
               $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cfop'];
               $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cfop_2'];
               $this->mgt_nota_fiscal_natureza_operacao->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_natureza_operacao'];
               $this->mgt_nota_fiscal_base_icms->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_base_icms'];
               $this->mgt_nota_fiscal_valor_seguro->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_seguro'];
               $this->mgt_nota_fiscal_base_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_base_icms_sub'];
               $this->mgt_nota_fiscal_valor_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_icms_sub'];
               $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_produtos'];
               $this->mgt_nota_fiscal_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_frete'];
               $this->mgt_nota_fiscal_valor_icms->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_icms'];
               $this->mgt_nota_fiscal_outras_despesas->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_outras_despesas'];
               $this->mgt_nota_fiscal_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_ipi'];
               $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_total'];

               $this->MSG_Erro->Caption = "";

               $this->confirmacao->Top = 136;
               $this->confirmacao->IsVisible = true;
            }
         }
      }
   }

   function nfcancelanotaCreate($sender, $params)
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

      $this->MSG_Erro->Caption = "";
   }

   function mgt_banco_descricaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.bt_alterar.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_numeroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcancelanota.mgt_nota_fiscal_tipo_nota.focus();
     return false;
   }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }


   function nfcancelanotaJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

<?php

   }

   function nfcancelanotaJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfcancelanota;

//Creates the form
$nfcancelanota = new nfcancelanota($application);

//Read from resource file
$nfcancelanota->loadResource(__FILE__);

//Shows the form
$nfcancelanota->show();

?>