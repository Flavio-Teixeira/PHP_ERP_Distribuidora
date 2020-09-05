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
use_unit("dbgrids.inc.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class cobdesdobramentoprg extends Page
{
   public $mgt_swap_cobranca_finalidade = null;
   public $Label29 = null;
   public $bt_desdobrar = null;
   public $mgt_nota_fiscal_dup_obs_12 = null;
   public $mgt_nota_fiscal_dup_obs_11 = null;
   public $mgt_nota_fiscal_dup_obs_10 = null;
   public $mgt_nota_fiscal_dup_obs_9 = null;
   public $mgt_nota_fiscal_dup_obs_8 = null;
   public $mgt_nota_fiscal_dup_obs_7 = null;
   public $mgt_nota_fiscal_dup_obs_6 = null;
   public $mgt_nota_fiscal_dup_obs_5 = null;
   public $mgt_nota_fiscal_dup_obs_4 = null;
   public $mgt_nota_fiscal_dup_obs_3 = null;
   public $mgt_nota_fiscal_dup_obs_2 = null;
   public $mgt_nota_fiscal_dup_obs_1 = null;
   public $mgt_nota_fiscal_dup_vlr_pgto_12 = null;
   public $mgt_nota_fiscal_dup_vlr_pgto_11 = null;
   public $mgt_nota_fiscal_dup_vlr_pgto_10 = null;
   public $mgt_nota_fiscal_dup_vlr_pgto_9 = null;
   public $mgt_nota_fiscal_dup_vlr_pgto_8 = null;
   public $mgt_nota_fiscal_dup_vlr_pgto_7 = null;
   public $mgt_nota_fiscal_dup_vlr_pgto_6 = null;
   public $mgt_nota_fiscal_dup_vlr_pgto_5 = null;
   public $mgt_nota_fiscal_dup_vlr_pgto_4 = null;
   public $mgt_nota_fiscal_dup_vlr_pgto_3 = null;
   public $mgt_nota_fiscal_dup_vlr_pgto_2 = null;
   public $mgt_nota_fiscal_dup_vlr_pgto_1 = null;
   public $mgt_nota_fiscal_dup_vlr_juros_12 = null;
   public $mgt_nota_fiscal_dup_vlr_juros_11 = null;
   public $mgt_nota_fiscal_dup_vlr_juros_10 = null;
   public $mgt_nota_fiscal_dup_vlr_juros_9 = null;
   public $mgt_nota_fiscal_dup_vlr_juros_8 = null;
   public $mgt_nota_fiscal_dup_vlr_juros_7 = null;
   public $mgt_nota_fiscal_dup_vlr_juros_6 = null;
   public $mgt_nota_fiscal_dup_vlr_juros_5 = null;
   public $mgt_nota_fiscal_dup_vlr_juros_4 = null;
   public $mgt_nota_fiscal_dup_vlr_juros_3 = null;
   public $mgt_nota_fiscal_dup_vlr_juros_2 = null;
   public $mgt_nota_fiscal_dup_vlr_juros_1 = null;
   public $mgt_nota_fiscal_dup_dt_pgto_12 = null;
   public $mgt_nota_fiscal_dup_dt_pgto_11 = null;
   public $mgt_nota_fiscal_dup_dt_pgto_10 = null;
   public $mgt_nota_fiscal_dup_dt_pgto_9 = null;
   public $mgt_nota_fiscal_dup_dt_pgto_8 = null;
   public $mgt_nota_fiscal_dup_dt_pgto_7 = null;
   public $mgt_nota_fiscal_dup_dt_pgto_6 = null;
   public $mgt_nota_fiscal_dup_dt_pgto_5 = null;
   public $mgt_nota_fiscal_dup_dt_pgto_4 = null;
   public $mgt_nota_fiscal_dup_dt_pgto_3 = null;
   public $mgt_nota_fiscal_dup_dt_pgto_2 = null;
   public $mgt_nota_fiscal_dup_dt_pgto_1 = null;
   public $Label28 = null;
   public $Label27 = null;
   public $Label26 = null;
   public $Label25 = null;
   public $mgt_nota_fiscal_dup_forma_1 = null;
   public $mgt_nota_fiscal_dup_forma_2 = null;
   public $mgt_nota_fiscal_dup_forma_3 = null;
   public $mgt_nota_fiscal_dup_forma_4 = null;
   public $mgt_nota_fiscal_dup_forma_5 = null;
   public $mgt_nota_fiscal_dup_forma_6 = null;
   public $mgt_nota_fiscal_dup_forma_7 = null;
   public $mgt_nota_fiscal_dup_forma_8 = null;
   public $mgt_nota_fiscal_dup_forma_9 = null;
   public $mgt_nota_fiscal_dup_forma_10 = null;
   public $mgt_nota_fiscal_dup_forma_11 = null;
   public $mgt_nota_fiscal_dup_forma_12 = null;
   public $mgt_nota_fiscal_dup_vlr_12 = null;
   public $mgt_nota_fiscal_dup_vlr_11 = null;
   public $mgt_nota_fiscal_dup_vlr_10 = null;
   public $mgt_nota_fiscal_dup_vlr_9 = null;
   public $mgt_nota_fiscal_dup_vlr_8 = null;
   public $mgt_nota_fiscal_dup_vlr_7 = null;
   public $mgt_nota_fiscal_dup_vlr_6 = null;
   public $mgt_nota_fiscal_dup_vlr_5 = null;
   public $mgt_nota_fiscal_dup_vlr_4 = null;
   public $mgt_nota_fiscal_dup_vlr_3 = null;
   public $mgt_nota_fiscal_dup_vlr_2 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_2 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_3 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_4 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_5 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_6 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_7 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_8 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_9 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_10 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_11 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_12 = null;
   public $mgt_nota_fiscal_dup_nro_12 = null;
   public $mgt_nota_fiscal_dup_nro_11 = null;
   public $mgt_nota_fiscal_dup_nro_10 = null;
   public $mgt_nota_fiscal_dup_nro_9 = null;
   public $mgt_nota_fiscal_dup_nro_8 = null;
   public $mgt_nota_fiscal_dup_nro_7 = null;
   public $mgt_nota_fiscal_dup_nro_6 = null;
   public $mgt_nota_fiscal_dup_nro_5 = null;
   public $mgt_nota_fiscal_dup_nro_4 = null;
   public $mgt_nota_fiscal_dup_nro_3 = null;
   public $mgt_nota_fiscal_dup_nro_2 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_2 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_3 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_4 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_5 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_6 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_7 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_8 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_9 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_10 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_11 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_12 = null;
   public $Label24 = null;
   public $Label23 = null;
   public $Label22 = null;
   public $Label21 = null;
   public $Label20 = null;
   public $Label10 = null;
   public $Label16 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $Label120 = null;
   public $Label121 = null;
   public $Label122 = null;
   public $Label123 = null;
   public $mgt_nota_fiscal_dup_vlr_1 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_1 = null;
   public $mgt_nota_fiscal_dup_nro_1 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_1 = null;
   public $Label5 = null;
   public $mgt_swap_cobranca_data_emissao = null;
   public $Label17 = null;
   public $mgt_swap_cobranca_nome = null;
   public $mgt_swap_cobranca_codigo = null;
   public $mgt_swap_cobranca_dup_vlr = null;
   public $mgt_swap_cobranca_dup_cod_bco = null;
   public $mgt_swap_cobranca_nota_fiscal = null;
   public $Label11 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $mgt_nota_fiscal_numero = null;
   public $Label4 = null;
   public $mgt_total_geral_cobrancas = null;
   public $Label2 = null;
   public $registros = null;
   public $mgt_nota_fiscal_data_fim = null;
   public $mgt_nota_fiscal_data_ini = null;
   public $GroupBox4 = null;
   public $GroupBox2 = null;
   public $bt_procurar = null;
   public $Label3 = null;
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
   function mgt_swap_cobranca_finalidadeJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_swap_cobranca_nota_fiscal.focus();
     return false;
   }

   <?php

   }


   //****************
   //*** Linha  1 ***
   //****************

   function mgt_nota_fiscal_cliente_condicao_pgto_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_1.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_nro_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_1.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_1.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_1.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_1.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_1.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_1.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_obs_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_2.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   //****************
   //*** Linha  2 ***
   //****************

   function mgt_nota_fiscal_cliente_condicao_pgto_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_2.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_nro_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_2.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_2.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_2.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_2.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_2.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_2.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_obs_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_3.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   //****************
   //*** Linha  3 ***
   //****************

   function mgt_nota_fiscal_cliente_condicao_pgto_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_3.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_nro_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_3.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_3.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_3.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_3.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_3.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_3.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_obs_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_4.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   //****************
   //*** Linha  4 ***
   //****************

   function mgt_nota_fiscal_cliente_condicao_pgto_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_4.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_nro_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_4.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_4.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_4.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_4.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_4.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_4.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_obs_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_5.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   //****************
   //*** Linha  5 ***
   //****************

   function mgt_nota_fiscal_cliente_condicao_pgto_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_5.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_nro_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_5.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_5.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_5.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_5.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_5.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_5.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_obs_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_6.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   //****************
   //*** Linha  6 ***
   //****************

   function mgt_nota_fiscal_cliente_condicao_pgto_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_6.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_nro_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_6.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_6.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_6.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_6.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_6.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_6.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_obs_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_7.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   //****************
   //*** Linha  7 ***
   //****************

   function mgt_nota_fiscal_cliente_condicao_pgto_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_7.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_nro_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_7.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_7.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_7.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_7.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_7.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_7.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_obs_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_8.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   //****************
   //*** Linha  8 ***
   //****************

   function mgt_nota_fiscal_cliente_condicao_pgto_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_8.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_nro_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_8.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_8.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_8.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_8.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_8.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_8.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_obs_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_9.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   //****************
   //*** Linha  9 ***
   //****************

   function mgt_nota_fiscal_cliente_condicao_pgto_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_9.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_nro_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_9.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_9.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_9.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_9.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_9.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_9.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_obs_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_10.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   //****************
   //*** Linha 10 ***
   //****************

   function mgt_nota_fiscal_cliente_condicao_pgto_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_10.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_nro_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_10.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_10.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_10.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_10.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_10.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_10.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_obs_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_11.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   //****************
   //*** Linha 11 ***
   //****************

   function mgt_nota_fiscal_cliente_condicao_pgto_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_11.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_nro_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_11.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_11.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_11.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_11.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_11.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_11.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_obs_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_12.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   //****************
   //*** Linha 12 ***
   //****************

   function mgt_nota_fiscal_cliente_condicao_pgto_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_12.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_nro_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_12.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_12.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_12.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_12.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_12.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_12.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_obs_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - Pula para o Proximo Campo ***

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobdesdobramentoprg.bt_desdobrar.focus();
        return false;
      }

      //*** FINAL - Pula para o Proximo Campo ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_12;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_11;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_10;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_9;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_8;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_7;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_6;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_5;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_4;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_3;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_2;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_pgto_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_1;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_12;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_11;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_10;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_9;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_8;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_7;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_6;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_5;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_4;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_3;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_2;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_juros_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_1;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_pgto_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_12
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

   function mgt_nota_fiscal_dup_dt_pgto_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_11
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

   function mgt_nota_fiscal_dup_dt_pgto_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_10
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

   function mgt_nota_fiscal_dup_dt_pgto_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_9
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

   function mgt_nota_fiscal_dup_dt_pgto_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_8
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

   function mgt_nota_fiscal_dup_dt_pgto_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_7
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

   function mgt_nota_fiscal_dup_dt_pgto_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_6
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

   function mgt_nota_fiscal_dup_dt_pgto_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_5
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

   function mgt_nota_fiscal_dup_dt_pgto_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_4
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

   function mgt_nota_fiscal_dup_dt_pgto_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_3
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

   function mgt_nota_fiscal_dup_dt_pgto_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_2
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

   function mgt_nota_fiscal_dup_dt_pgto_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_1
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

   function mgt_nota_fiscal_dup_vlr_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_12;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_11;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_10;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_9;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_8;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_7;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_6;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_5;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_4;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_3;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_2;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_1;
      var digits="0123456789.,";
      var campo_temp;
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }
      campo.value = campo.value.replace(',','.');

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_12
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

   function mgt_nota_fiscal_dup_dt_vcto_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_11
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

   function mgt_nota_fiscal_dup_dt_vcto_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_10
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

   function mgt_nota_fiscal_dup_dt_vcto_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui


      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_9
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

   function mgt_nota_fiscal_dup_dt_vcto_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_8
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

   function mgt_nota_fiscal_dup_dt_vcto_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_7
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

   function mgt_nota_fiscal_dup_dt_vcto_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_6
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

   function mgt_nota_fiscal_dup_dt_vcto_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_5
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

   function mgt_nota_fiscal_dup_dt_vcto_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_4
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

   function mgt_nota_fiscal_dup_dt_vcto_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_3
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

   function mgt_nota_fiscal_dup_dt_vcto_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_2
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

   function mgt_nota_fiscal_dup_dt_vcto_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_1
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

   function mgt_nota_fiscal_cliente_condicao_pgto_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_12
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_11
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_10
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_9
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_8
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_7
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_6
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_5
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_4
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_3
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_2
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_1
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function bt_desdobrarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_swap_cobranca_nota_fiscal->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, selecione uma Nota Fiscal';
      }
      else
      {
            $Comando_SQL = "update mgt_programadas set ";
            $Comando_SQL .= "mgt_programada_banco = '" . trim($this->mgt_swap_cobranca_dup_cod_bco->Text) . "',";

            $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_1 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_nro_1 = '" . trim($this->mgt_nota_fiscal_dup_nro_1->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_vcto_1 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_1->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_1 = '" . trim($this->mgt_nota_fiscal_dup_vlr_1->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_pgto_1 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_1->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_juros_1 = '" . trim($this->mgt_nota_fiscal_dup_vlr_juros_1->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_pgto_1 = '" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_1->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_forma_1 = '" . trim($this->mgt_nota_fiscal_dup_forma_1->Value) . "',";
            $Comando_SQL .= "mgt_programada_dup_obs_1 = '" . trim($this->mgt_nota_fiscal_dup_obs_1->Text) . "',";

            $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_2 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_nro_2 = '" . trim($this->mgt_nota_fiscal_dup_nro_2->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_vcto_2 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_2->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_2 = '" . trim($this->mgt_nota_fiscal_dup_vlr_2->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_pgto_2 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_2->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_juros_2 = '" . trim($this->mgt_nota_fiscal_dup_vlr_juros_2->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_pgto_2 = '" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_2->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_forma_2 = '" . trim($this->mgt_nota_fiscal_dup_forma_2->Value) . "',";
            $Comando_SQL .= "mgt_programada_dup_obs_2 = '" . trim($this->mgt_nota_fiscal_dup_obs_2->Text) . "',";

            $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_3 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_nro_3 = '" . trim($this->mgt_nota_fiscal_dup_nro_3->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_vcto_3 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_3->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_3 = '" . trim($this->mgt_nota_fiscal_dup_vlr_3->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_pgto_3 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_3->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_juros_3 = '" . trim($this->mgt_nota_fiscal_dup_vlr_juros_3->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_pgto_3 = '" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_3->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_forma_3 = '" . trim($this->mgt_nota_fiscal_dup_forma_3->Value) . "',";
            $Comando_SQL .= "mgt_programada_dup_obs_3 = '" . trim($this->mgt_nota_fiscal_dup_obs_3->Text) . "',";

            $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_4 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_nro_4 = '" . trim($this->mgt_nota_fiscal_dup_nro_4->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_vcto_4 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_4->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_4 = '" . trim($this->mgt_nota_fiscal_dup_vlr_4->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_pgto_4 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_4->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_juros_4 = '" . trim($this->mgt_nota_fiscal_dup_vlr_juros_4->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_pgto_4 = '" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_4->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_forma_4 = '" . trim($this->mgt_nota_fiscal_dup_forma_4->Value) . "',";
            $Comando_SQL .= "mgt_programada_dup_obs_4 = '" . trim($this->mgt_nota_fiscal_dup_obs_4->Text) . "',";

            $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_5 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_nro_5 = '" . trim($this->mgt_nota_fiscal_dup_nro_5->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_vcto_5 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_5->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_5 = '" . trim($this->mgt_nota_fiscal_dup_vlr_5->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_pgto_5 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_5->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_juros_5 = '" . trim($this->mgt_nota_fiscal_dup_vlr_juros_5->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_pgto_5 = '" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_5->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_forma_5 = '" . trim($this->mgt_nota_fiscal_dup_forma_5->Value) . "',";
            $Comando_SQL .= "mgt_programada_dup_obs_5 = '" . trim($this->mgt_nota_fiscal_dup_obs_5->Text) . "',";

            $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_6 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_nro_6 = '" . trim($this->mgt_nota_fiscal_dup_nro_6->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_vcto_6 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_6->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_6 = '" . trim($this->mgt_nota_fiscal_dup_vlr_6->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_pgto_6 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_6->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_juros_6 = '" . trim($this->mgt_nota_fiscal_dup_vlr_juros_6->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_pgto_6 = '" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_6->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_forma_6 = '" . trim($this->mgt_nota_fiscal_dup_forma_6->Value) . "',";
            $Comando_SQL .= "mgt_programada_dup_obs_6 = '" . trim($this->mgt_nota_fiscal_dup_obs_6->Text) . "',";

            $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_7 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_nro_7 = '" . trim($this->mgt_nota_fiscal_dup_nro_7->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_vcto_7 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_7->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_7 = '" . trim($this->mgt_nota_fiscal_dup_vlr_7->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_pgto_7 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_7->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_juros_7 = '" . trim($this->mgt_nota_fiscal_dup_vlr_juros_7->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_pgto_7 = '" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_7->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_forma_7 = '" . trim($this->mgt_nota_fiscal_dup_forma_7->Value) . "',";
            $Comando_SQL .= "mgt_programada_dup_obs_7 = '" . trim($this->mgt_nota_fiscal_dup_obs_7->Text) . "',";

            $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_8 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_nro_8 = '" . trim($this->mgt_nota_fiscal_dup_nro_8->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_vcto_8 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_8->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_8 = '" . trim($this->mgt_nota_fiscal_dup_vlr_8->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_pgto_8 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_8->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_juros_8 = '" . trim($this->mgt_nota_fiscal_dup_vlr_juros_8->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_pgto_8 = '" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_8->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_forma_8 = '" . trim($this->mgt_nota_fiscal_dup_forma_8->Value) . "',";
            $Comando_SQL .= "mgt_programada_dup_obs_8 = '" . trim($this->mgt_nota_fiscal_dup_obs_8->Text) . "',";

            $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_9 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_nro_9 = '" . trim($this->mgt_nota_fiscal_dup_nro_9->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_vcto_9 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_9->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_9 = '" . trim($this->mgt_nota_fiscal_dup_vlr_9->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_pgto_9 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_9->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_juros_9 = '" . trim($this->mgt_nota_fiscal_dup_vlr_juros_9->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_pgto_9 = '" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_9->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_forma_9 = '" . trim($this->mgt_nota_fiscal_dup_forma_9->Value) . "',";
            $Comando_SQL .= "mgt_programada_dup_obs_9 = '" . trim($this->mgt_nota_fiscal_dup_obs_9->Text) . "',";

            $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_10 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_nro_10 = '" . trim($this->mgt_nota_fiscal_dup_nro_10->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_vcto_10 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_10->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_10 = '" . trim($this->mgt_nota_fiscal_dup_vlr_10->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_pgto_10 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_10->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_juros_10 = '" . trim($this->mgt_nota_fiscal_dup_vlr_juros_10->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_pgto_10 = '" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_10->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_forma_10 = '" . trim($this->mgt_nota_fiscal_dup_forma_10->Value) . "',";
            $Comando_SQL .= "mgt_programada_dup_obs_10 = '" . trim($this->mgt_nota_fiscal_dup_obs_10->Text) . "',";

            $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_11 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_nro_11 = '" . trim($this->mgt_nota_fiscal_dup_nro_11->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_vcto_11 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_11->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_11 = '" . trim($this->mgt_nota_fiscal_dup_vlr_11->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_pgto_11 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_11->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_juros_11 = '" . trim($this->mgt_nota_fiscal_dup_vlr_juros_11->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_pgto_11 = '" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_11->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_forma_11 = '" . trim($this->mgt_nota_fiscal_dup_forma_11->Value) . "',";
            $Comando_SQL .= "mgt_programada_dup_obs_11 = '" . trim($this->mgt_nota_fiscal_dup_obs_11->Text) . "',";

            $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_12 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_nro_12 = '" . trim($this->mgt_nota_fiscal_dup_nro_12->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_vcto_12 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_12->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_12 = '" . trim($this->mgt_nota_fiscal_dup_vlr_12->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_dt_pgto_12 = '" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_12->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_juros_12 = '" . trim($this->mgt_nota_fiscal_dup_vlr_juros_12->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_vlr_pgto_12 = '" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_12->Text) . "',";
            $Comando_SQL .= "mgt_programada_dup_forma_12 = '" . trim($this->mgt_nota_fiscal_dup_forma_12->Value) . "',";
            $Comando_SQL .= "mgt_programada_dup_obs_12 = '" . trim($this->mgt_nota_fiscal_dup_obs_12->Text) . "' ";

            $Comando_SQL .= "where ";
            $Comando_SQL .= "mgt_programada_finalidade = '" . trim($this->mgt_swap_cobranca_finalidade->Text) . "' And ";
            $Comando_SQL .= "mgt_programada_numero = '" . trim($this->mgt_swap_cobranca_nota_fiscal->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Limpa os Campos para o Proximo Desdobramento ***

            $this->mgt_swap_cobranca_finalidade->Text = '';
            $this->mgt_swap_cobranca_codigo->Text = '';
            $this->mgt_swap_cobranca_nome->Text = '';
            $this->mgt_swap_cobranca_nota_fiscal->Text = '';
            $this->mgt_swap_cobranca_data_emissao->Text = '';
            $this->mgt_swap_cobranca_dup_cod_bco->Text = '';
            $this->mgt_swap_cobranca_dup_vlr->Text = '';

            $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text = '';
            $this->mgt_nota_fiscal_dup_nro_1->Text = '';
            $this->mgt_nota_fiscal_dup_dt_vcto_1->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_1->Text = '';
            $this->mgt_nota_fiscal_dup_dt_pgto_1->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_juros_1->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_pgto_1->Text = '';
            $this->mgt_nota_fiscal_dup_forma_1->Value = '';
            $this->mgt_nota_fiscal_dup_obs_1->Text = '';

            $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text = '';
            $this->mgt_nota_fiscal_dup_nro_2->Text = '';
            $this->mgt_nota_fiscal_dup_dt_vcto_2->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_2->Text = '';
            $this->mgt_nota_fiscal_dup_dt_pgto_2->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_juros_2->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_pgto_2->Text = '';
            $this->mgt_nota_fiscal_dup_forma_2->Value = '';
            $this->mgt_nota_fiscal_dup_obs_2->Text = '';

            $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text = '';
            $this->mgt_nota_fiscal_dup_nro_3->Text = '';
            $this->mgt_nota_fiscal_dup_dt_vcto_3->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_3->Text = '';
            $this->mgt_nota_fiscal_dup_dt_pgto_3->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_juros_3->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_pgto_3->Text = '';
            $this->mgt_nota_fiscal_dup_forma_3->Value = '';
            $this->mgt_nota_fiscal_dup_obs_3->Text = '';

            $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text = '';
            $this->mgt_nota_fiscal_dup_nro_4->Text = '';
            $this->mgt_nota_fiscal_dup_dt_vcto_4->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_4->Text = '';
            $this->mgt_nota_fiscal_dup_dt_pgto_4->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_juros_4->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_pgto_4->Text = '';
            $this->mgt_nota_fiscal_dup_forma_4->Value = '';
            $this->mgt_nota_fiscal_dup_obs_4->Text = '';

            $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text = '';
            $this->mgt_nota_fiscal_dup_nro_5->Text = '';
            $this->mgt_nota_fiscal_dup_dt_vcto_5->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_5->Text = '';
            $this->mgt_nota_fiscal_dup_dt_pgto_5->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_juros_5->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_pgto_5->Text = '';
            $this->mgt_nota_fiscal_dup_forma_5->Value = '';
            $this->mgt_nota_fiscal_dup_obs_5->Text = '';

            $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text = '';
            $this->mgt_nota_fiscal_dup_nro_6->Text = '';
            $this->mgt_nota_fiscal_dup_dt_vcto_6->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_6->Text = '';
            $this->mgt_nota_fiscal_dup_dt_pgto_6->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_juros_6->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_pgto_6->Text = '';
            $this->mgt_nota_fiscal_dup_forma_6->Value = '';
            $this->mgt_nota_fiscal_dup_obs_6->Text = '';

            $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text = '';
            $this->mgt_nota_fiscal_dup_nro_7->Text = '';
            $this->mgt_nota_fiscal_dup_dt_vcto_7->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_7->Text = '';
            $this->mgt_nota_fiscal_dup_dt_pgto_7->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_juros_7->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_pgto_7->Text = '';
            $this->mgt_nota_fiscal_dup_forma_7->Value = '';
            $this->mgt_nota_fiscal_dup_obs_7->Text = '';

            $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text = '';
            $this->mgt_nota_fiscal_dup_nro_8->Text = '';
            $this->mgt_nota_fiscal_dup_dt_vcto_8->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_8->Text = '';
            $this->mgt_nota_fiscal_dup_dt_pgto_8->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_juros_8->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_pgto_8->Text = '';
            $this->mgt_nota_fiscal_dup_forma_8->Value = '';
            $this->mgt_nota_fiscal_dup_obs_8->Text = '';

            $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text = '';
            $this->mgt_nota_fiscal_dup_nro_9->Text = '';
            $this->mgt_nota_fiscal_dup_dt_vcto_9->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_9->Text = '';
            $this->mgt_nota_fiscal_dup_dt_pgto_9->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_juros_9->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_pgto_9->Text = '';
            $this->mgt_nota_fiscal_dup_forma_9->Value = '';
            $this->mgt_nota_fiscal_dup_obs_9->Text = '';

            $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text = '';
            $this->mgt_nota_fiscal_dup_nro_10->Text = '';
            $this->mgt_nota_fiscal_dup_dt_vcto_10->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_10->Text = '';
            $this->mgt_nota_fiscal_dup_dt_pgto_10->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_juros_10->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_pgto_10->Text = '';
            $this->mgt_nota_fiscal_dup_forma_10->Value = '';
            $this->mgt_nota_fiscal_dup_obs_10->Text = '';

            $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text = '';
            $this->mgt_nota_fiscal_dup_nro_11->Text = '';
            $this->mgt_nota_fiscal_dup_dt_vcto_11->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_11->Text = '';
            $this->mgt_nota_fiscal_dup_dt_pgto_11->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_juros_11->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_pgto_11->Text = '';
            $this->mgt_nota_fiscal_dup_forma_11->Value = '';
            $this->mgt_nota_fiscal_dup_obs_11->Text = '';

            $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text = '';
            $this->mgt_nota_fiscal_dup_nro_12->Text = '';
            $this->mgt_nota_fiscal_dup_dt_vcto_12->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_12->Text = '';
            $this->mgt_nota_fiscal_dup_dt_pgto_12->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_juros_12->Text = '';
            $this->mgt_nota_fiscal_dup_vlr_pgto_12->Text = '';
            $this->mgt_nota_fiscal_dup_forma_12->Value = '';
            $this->mgt_nota_fiscal_dup_obs_12->Text = '';

            $this->MSG_Erro->Caption = 'Desdobramento efetuado com sucesso';

            $this->carrega_notas();
      }
   }

   function mgt_swap_cobranca_dup_vlr_pgtoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cobdesdobramentoprg.mgt_swap_cobranca_dup_vlr_pgto;
   var digits="0123456789.,";
   var campo_temp;
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1);
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }
   campo.value = campo.value.replace(',','.');

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_swap_cobranca_dup_vlr_jurosJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cobdesdobramentoprg.mgt_swap_cobranca_dup_vlr_juros;
   var digits="0123456789.,";
   var campo_temp;
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1);
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }
   campo.value = campo.value.replace(',','.');

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_swap_cobranca_dup_cod_bcoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cobdesdobramentoprg.mgt_swap_cobranca_dup_cod_bco
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_swap_cobranca_dup_dt_pgtoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.cobdesdobramentoprg.mgt_swap_cobranca_dup_dt_pgto
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

   function mgt_swap_cobranca_dup_dt_vctoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.cobdesdobramentoprg.mgt_swap_cobranca_dup_dt_vcto
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

   function mgt_swap_cobranca_dup_observacaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.bt_baixar.focus();
     return false;
   }

<?php

   }

   function mgt_swap_cobranca_dup_cod_bancarioJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_swap_cobranca_dup_observacao.focus();
     return false;
   }

<?php

   }

   function mgt_swap_cobranca_dup_cod_bcoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_swap_cobranca_dup_vlr.focus();
     return false;
   }

<?php

   }

   function mgt_swap_cobranca_dup_vlr_pgtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_swap_cobranca_dup_cod_bco.focus();
     return false;
   }

<?php

   }

   function mgt_swap_cobranca_dup_vlr_jurosJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_swap_cobranca_dup_vlr_pgto.focus();
     return false;
   }

<?php

   }

   function mgt_swap_cobranca_dup_dt_pgtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_swap_cobranca_dup_vlr_juros.focus();
     return false;
   }

<?php

   }

   function mgt_swap_cobranca_nomeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_swap_cobranca_nota_fiscal.focus();
     return false;
   }

<?php

   }

   function mgt_swap_cobranca_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_swap_cobranca_nome.focus();
     return false;
   }

<?php

   }

   function mgt_swap_cobranca_dup_vlrJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_1.focus();
     return false;
   }

<?php

   }

   function mgt_swap_cobranca_dup_dt_vctoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_swap_cobranca_dup_vlr.focus();
     return false;
   }

<?php

   }

   function mgt_swap_cobranca_data_emissaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_swap_cobranca_dup_cod_bco.focus();
     return false;
   }

<?php

   }

   function mgt_swap_cobranca_nota_fiscalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_swap_cobranca_data_emissao.focus();
     return false;
   }

<?php

   }

   function mgt_swap_cobranca_dup_nroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_swap_cobranca_nota_fiscal.focus();
     return false;
   }

<?php

   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Carrega os Dados da Linha Clicada ***

      document.cobdesdobramentoprg.mgt_swap_cobranca_finalidade.value = registros.getTableModel().getValue(0, registros.getFocusedRow());

      document.cobdesdobramentoprg.mgt_swap_cobranca_codigo.value = registros.getTableModel().getValue(4, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_swap_cobranca_nome.value = registros.getTableModel().getValue(5, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_swap_cobranca_nota_fiscal.value = registros.getTableModel().getValue(1, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_swap_cobranca_data_emissao.value = registros.getTableModel().getValue(2, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_swap_cobranca_dup_cod_bco.value = registros.getTableModel().getValue(3, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_swap_cobranca_dup_vlr.value = registros.getTableModel().getValue(6, registros.getFocusedRow());

      document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_1.value = registros.getTableModel().getValue(7, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_2.value = registros.getTableModel().getValue(8, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_3.value = registros.getTableModel().getValue(9, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_4.value = registros.getTableModel().getValue(10, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_5.value = registros.getTableModel().getValue(11, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_6.value = registros.getTableModel().getValue(12, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_7.value = registros.getTableModel().getValue(13, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_8.value = registros.getTableModel().getValue(14, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_9.value = registros.getTableModel().getValue(15, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_10.value = registros.getTableModel().getValue(16, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_11.value = registros.getTableModel().getValue(17, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_cliente_condicao_pgto_12.value = registros.getTableModel().getValue(18, registros.getFocusedRow());

      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_1.value = registros.getTableModel().getValue(19, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_2.value = registros.getTableModel().getValue(20, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_3.value = registros.getTableModel().getValue(21, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_4.value = registros.getTableModel().getValue(22, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_5.value = registros.getTableModel().getValue(23, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_6.value = registros.getTableModel().getValue(24, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_7.value = registros.getTableModel().getValue(25, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_8.value = registros.getTableModel().getValue(26, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_9.value = registros.getTableModel().getValue(27, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_10.value = registros.getTableModel().getValue(28, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_11.value = registros.getTableModel().getValue(29, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_nro_12.value = registros.getTableModel().getValue(30, registros.getFocusedRow());

      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_1.value = registros.getTableModel().getValue(31, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_2.value = registros.getTableModel().getValue(32, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_3.value = registros.getTableModel().getValue(33, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_4.value = registros.getTableModel().getValue(34, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_5.value = registros.getTableModel().getValue(35, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_6.value = registros.getTableModel().getValue(36, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_7.value = registros.getTableModel().getValue(37, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_8.value = registros.getTableModel().getValue(38, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_9.value = registros.getTableModel().getValue(39, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_10.value = registros.getTableModel().getValue(40, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_11.value = registros.getTableModel().getValue(41, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_vcto_12.value = registros.getTableModel().getValue(42, registros.getFocusedRow());

      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_1.value = registros.getTableModel().getValue(43, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_2.value = registros.getTableModel().getValue(44, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_3.value = registros.getTableModel().getValue(45, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_4.value = registros.getTableModel().getValue(46, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_5.value = registros.getTableModel().getValue(47, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_6.value = registros.getTableModel().getValue(48, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_7.value = registros.getTableModel().getValue(49, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_8.value = registros.getTableModel().getValue(50, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_9.value = registros.getTableModel().getValue(51, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_10.value = registros.getTableModel().getValue(52, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_11.value = registros.getTableModel().getValue(53, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_12.value = registros.getTableModel().getValue(54, registros.getFocusedRow());

      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_1.value = registros.getTableModel().getValue(55, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_2.value = registros.getTableModel().getValue(56, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_3.value = registros.getTableModel().getValue(57, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_4.value = registros.getTableModel().getValue(58, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_5.value = registros.getTableModel().getValue(59, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_6.value = registros.getTableModel().getValue(60, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_7.value = registros.getTableModel().getValue(61, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_8.value = registros.getTableModel().getValue(62, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_9.value = registros.getTableModel().getValue(63, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_10.value = registros.getTableModel().getValue(64, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_11.value = registros.getTableModel().getValue(65, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_dt_pgto_12.value = registros.getTableModel().getValue(66, registros.getFocusedRow());

      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_1.value = registros.getTableModel().getValue(67, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_2.value = registros.getTableModel().getValue(68, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_3.value = registros.getTableModel().getValue(69, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_4.value = registros.getTableModel().getValue(70, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_5.value = registros.getTableModel().getValue(71, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_6.value = registros.getTableModel().getValue(72, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_7.value = registros.getTableModel().getValue(73, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_8.value = registros.getTableModel().getValue(74, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_9.value = registros.getTableModel().getValue(75, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_10.value = registros.getTableModel().getValue(76, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_11.value = registros.getTableModel().getValue(77, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_juros_12.value = registros.getTableModel().getValue(78, registros.getFocusedRow());

      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_1.value = registros.getTableModel().getValue(79, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_2.value = registros.getTableModel().getValue(80, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_3.value = registros.getTableModel().getValue(81, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_4.value = registros.getTableModel().getValue(82, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_5.value = registros.getTableModel().getValue(83, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_6.value = registros.getTableModel().getValue(84, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_7.value = registros.getTableModel().getValue(85, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_8.value = registros.getTableModel().getValue(86, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_9.value = registros.getTableModel().getValue(87, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_10.value = registros.getTableModel().getValue(88, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_11.value = registros.getTableModel().getValue(89, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_vlr_pgto_12.value = registros.getTableModel().getValue(90, registros.getFocusedRow());

      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_forma_1.value = registros.getTableModel().getValue(91, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_forma_2.value = registros.getTableModel().getValue(92, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_forma_3.value = registros.getTableModel().getValue(93, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_forma_4.value = registros.getTableModel().getValue(94, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_forma_5.value = registros.getTableModel().getValue(95, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_forma_6.value = registros.getTableModel().getValue(96, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_forma_7.value = registros.getTableModel().getValue(97, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_forma_8.value = registros.getTableModel().getValue(98, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_forma_9.value = registros.getTableModel().getValue(99, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_forma_10.value = registros.getTableModel().getValue(100, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_forma_11.value = registros.getTableModel().getValue(101, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_forma_12.value = registros.getTableModel().getValue(102, registros.getFocusedRow());

      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_1.value = registros.getTableModel().getValue(103, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_2.value = registros.getTableModel().getValue(104, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_3.value = registros.getTableModel().getValue(105, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_4.value = registros.getTableModel().getValue(106, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_5.value = registros.getTableModel().getValue(107, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_6.value = registros.getTableModel().getValue(108, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_7.value = registros.getTableModel().getValue(109, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_8.value = registros.getTableModel().getValue(110, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_9.value = registros.getTableModel().getValue(111, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_10.value = registros.getTableModel().getValue(112, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_11.value = registros.getTableModel().getValue(113, registros.getFocusedRow());
      document.cobdesdobramentoprg.mgt_nota_fiscal_dup_obs_12.value = registros.getTableModel().getValue(114, registros.getFocusedRow());
<?php

   }

   function mgt_nota_fiscal_numeroJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_numero
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.bt_procurar.focus();
     return false;
   }

<?php

   }


   public function carrega_notas()
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_nota_fiscal_numero->Text) != '')
      {
         //*** Seleciona o Total Geral de Cobrancas ***

         $Comando_SQL = "Select SUM(mgt_programada_valor_total) AS mgt_programada_valor_total from mgt_programadas Where ";
         $Comando_SQL .= "mgt_programada_numero ='" . trim($this->mgt_nota_fiscal_numero->Text) . "' and ";
         $Comando_SQL .= "mgt_programada_tipo_nota ='1'";
         $Comando_SQL .= "Order By mgt_programada_numero";

         GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
         GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

         $this->mgt_total_geral_cobrancas->Caption = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_total'];

         //*** Prepara o Select das Informacoes ***

         $Comando_SQL = "Select *,date_format(mgt_programada_data_emissao, '%d/%m/%Y') AS mgt_programada_data_emissao ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_1, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_1 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_1, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_1 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_2, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_2 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_2, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_2 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_3, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_3 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_3, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_3 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_4, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_4 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_4, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_4 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_5, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_5 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_5, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_5 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_6, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_6 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_6, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_6 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_7, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_7 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_7, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_7 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_8, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_8 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_8, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_8 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_9, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_9 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_9, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_9 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_10, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_10 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_10, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_10 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_11, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_11 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_11, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_11 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_12, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_12 ";
         $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_12, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_12 ";
         $Comando_SQL .= "from mgt_programadas Where ";
         $Comando_SQL .= "mgt_programada_numero ='" . trim($this->mgt_nota_fiscal_numero->Text) . "' and ";
         $Comando_SQL .= "mgt_programada_tipo_nota ='1'";
         $Comando_SQL .= "Order By mgt_programada_numero";

         GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
         GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programadas->Open();
      }
      else
      {
         if(trim($this->mgt_nota_fiscal_data_ini->Text) == '')
         {
            $this->MSG_Erro->Caption = 'Antes de prosseguir favor preencher o campo Data inicial...';
         }
         elseif(trim($this->mgt_nota_fiscal_data_fim->Text) == '')
         {
            $this->MSG_Erro->Caption = 'Antes de prosseguir favor preencher o campo Data final...';
         }
         elseif(strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))) > strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))
         {
            $this->MSG_Erro->Caption = 'Antes de prosseguir favor Verificar as datas Data Final menor que Data Inicial...';
         }
         else
         {
            //*** Seleciona o Total Geral de Cobrancas ***

         $Comando_SQL = "select * from mgt_cfops_faturamento";

         GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Close();
         GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Open();

         if( trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) <> '')
         {
            $Comando_SQL = "Select SUM(mgt_programada_valor_total) AS mgt_programada_valor_total from mgt_programadas Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_1 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_1 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_2 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_2 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_3 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_3 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_4 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_4 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_5 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_5 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_6 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_6 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_7 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_7 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_8 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_8 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_9 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_9 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_10 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_10 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_11 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_11 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_12 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_12 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_programada_cfop IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ") and ";
            $Comando_SQL .= "mgt_programada_tipo_nota ='1'";
            $Comando_SQL .= "Order By mgt_programada_numero";

            GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
            GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

            $this->mgt_total_geral_cobrancas->Caption = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_total'];

            //*** Prepara o Select das Informacoes ***

            $Comando_SQL = "Select *,date_format(mgt_programada_data_emissao, '%d/%m/%Y') AS mgt_programada_data_emissao ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_1, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_1 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_1, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_1 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_2, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_2 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_2, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_2 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_3, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_3 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_3, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_3 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_4, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_4 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_4, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_4 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_5, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_5 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_5, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_5 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_6, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_6 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_6, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_6 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_7, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_7 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_7, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_7 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_8, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_8 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_8, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_8 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_9, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_9 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_9, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_9 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_10, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_10 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_10, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_10 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_11, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_11 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_11, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_11 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_12, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_12 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_12, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_12 ";
            $Comando_SQL .= "from mgt_programadas Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_1 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_1 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_2 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_2 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_3 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_3 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_4 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_4 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_5 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_5 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_6 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_6 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_7 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_7 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_8 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_8 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_9 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_9 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_10 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_10 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_11 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_11 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_12 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_12 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_programada_cfop IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ") and ";
            $Comando_SQL .= "mgt_programada_tipo_nota ='1'";
            $Comando_SQL .= "Order By mgt_programada_numero";

            GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
            GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Programadas->Open();
         }
         else
         {
            $Comando_SQL = "Select SUM(mgt_programada_valor_total) AS mgt_programada_valor_total from mgt_programadas Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_1 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_1 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_2 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_2 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_3 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_3 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_4 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_4 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_5 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_5 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_6 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_6 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_7 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_7 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_8 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_8 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_9 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_9 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_10 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_10 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_11 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_11 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_12 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_12 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_programada_tipo_nota ='1'";
            $Comando_SQL .= "Order By mgt_programada_numero";

            GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
            GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

            $this->mgt_total_geral_cobrancas->Caption = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_total'];

            //*** Prepara o Select das Informacoes ***

            $Comando_SQL = "Select *,date_format(mgt_programada_data_emissao, '%d/%m/%Y') AS mgt_programada_data_emissao ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_1, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_1 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_1, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_1 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_2, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_2 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_2, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_2 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_3, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_3 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_3, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_3 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_4, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_4 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_4, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_4 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_5, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_5 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_5, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_5 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_6, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_6 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_6, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_6 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_7, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_7 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_7, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_7 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_8, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_8 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_8, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_8 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_9, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_9 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_9, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_9 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_10, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_10 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_10, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_10 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_11, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_11 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_11, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_11 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_vcto_12, '%d/%m/%Y') AS mgt_programada_dup_dt_vcto_12 ";
            $Comando_SQL .= ",date_format(mgt_programada_dup_dt_pgto_12, '%d/%m/%Y') AS mgt_programada_dup_dt_pgto_12 ";
            $Comando_SQL .= "from mgt_programadas Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_1 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_1 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_2 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_2 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_3 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_3 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_4 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_4 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_5 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_5 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_6 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_6 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_7 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_7 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_8 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_8 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_9 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_9 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_10 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_10 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_11 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_11 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_12 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_12 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_programada_tipo_nota ='1'";
            $Comando_SQL .= "Order By mgt_programada_numero";

            GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
            GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Programadas->Open();
         }

         }
      }
   }

   function bt_procurarClick($sender, $params)
   {
      $this->carrega_notas();
   }

   function mgt_nota_fiscal_data_fimJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_data_fim
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

   function mgt_nota_fiscal_data_fimJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_nota_fiscal_numero.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_data_iniJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobdesdobramentoprg.mgt_nota_fiscal_data_fim.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_data_iniJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Data ***

   var campo = document.cobdesdobramentoprg.mgt_nota_fiscal_data_ini
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

   function cobdesdobramentoprgCreate($sender, $params)
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

      //*** Carrega as Datas do Periodo ***

      $this->mgt_nota_fiscal_data_ini->Text = '01/01/' . date("Y", time());
      $this->mgt_nota_fiscal_data_fim->Text = date("d/m/Y", time());

      //*** Limpa as Mensagens de Erro ***

      $this->MSG_Erro->Caption = '';
   }

   function bt_fecharClick($sender, $params)
   {
      //*** Limpa os Campos de Procura ***

      $this->mgt_nota_fiscal_data_ini->Text = '';
      $this->mgt_nota_fiscal_data_fim->Text = '';
      $this->mgt_nota_fiscal_numero->Text = '';

      //*** Limpa a Tabela de Cobrancas ***

      $Comando_SQL = "TRUNCATE TABLE mgt_swap_cobrancas";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Fecha a Tela de Cobranca ***

      redirect('frame_corpo.php');
   }
   function cobdesdobramentoprgJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cobdesdobramentoprg;

//Creates the form
$cobdesdobramentoprg = new cobdesdobramentoprg($application);

//Read from resource file
$cobdesdobramentoprg->loadResource(__FILE__);

//Shows the form
$cobdesdobramentoprg->show();

?>