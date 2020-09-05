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
class cobnaovinculado extends Page
{
   public $mgt_swap_cobranca_numero = null;
   public $registros = null;
   public $Label30 = null;
   public $bt_buscar = null;
   public $opcao_busca = null;
   public $Label2 = null;
   public $dados_busca = null;
   public $Label1 = null;
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
   public $GroupBox4 = null;
   public $GroupBox2 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $area_sistema = null;
   function mgt_swap_cobranca_data_emissaoJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobnaovinculado.mgt_swap_cobranca_data_emissao
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

   function mgt_swap_cobranca_dup_vlrJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cobnaovinculado.mgt_swap_cobranca_dup_vlr;
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


   function registrosJSRowChanged($sender, $params)
   {

   ?>
      //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.cobnaovinculado.mgt_swap_cobranca_numero.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
      document.cobnaovinculado.mgt_swap_cobranca_codigo.value = registros.getTableModel().getValue(2, registros.getFocusedRow());
      document.cobnaovinculado.mgt_swap_cobranca_nome.value = registros.getTableModel().getValue(3, registros.getFocusedRow());

   <?php

   }

   function bt_buscarClick($sender, $params)
   {
      if(trim($this->dados_busca->Text) == "")
      {
         $Comando_SQL = "select * from mgt_clientes order by mgt_cliente_numero";
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_numero = '" . trim($this->dados_busca->Text) . "' order by mgt_cliente_numero";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Tipo")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_codigo_tipo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_codigo_tipo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_codigo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_codigo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Nome")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_nome like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_nome";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Razao Social")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_razao_social like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_razao_social";
         }

      }

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
      GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Clientes->Open();
   }

   function opcao_buscaJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobnaovinculado.bt_buscar.focus();
     return false;
   }

   <?php

   }

   function dados_buscaJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobnaovinculado.opcao_busca.focus();
     return false;
   }

   <?php

   }

   function mgt_swap_cobranca_finalidadeJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobnaovinculado.mgt_swap_cobranca_nota_fiscal.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_nro_1.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_1.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_1.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_1.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_1.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_1.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_obs_1.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_2.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_nro_2.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_2.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_2.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_2.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_2.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_2.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_obs_2.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_3.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_nro_3.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_3.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_3.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_3.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_3.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_3.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_obs_3.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_4.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_nro_4.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_4.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_4.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_4.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_4.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_4.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_obs_4.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_5.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_nro_5.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_5.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_5.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_5.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_5.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_5.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_obs_5.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_6.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_nro_6.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_6.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_6.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_6.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_6.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_6.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_obs_6.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_7.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_nro_7.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_7.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_7.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_7.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_7.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_7.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_obs_7.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_8.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_nro_8.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_8.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_8.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_8.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_8.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_8.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_obs_8.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_9.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_nro_9.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_9.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_9.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_9.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_9.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_9.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_obs_9.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_10.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_nro_10.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_10.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_10.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_10.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_10.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_10.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_obs_10.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_11.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_nro_11.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_11.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_11.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_11.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_11.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_11.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_obs_11.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_12.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_nro_12.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_12.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_12.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_12.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_12.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_12.focus();
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
        document.cobnaovinculado.mgt_nota_fiscal_dup_obs_12.focus();
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
        document.cobnaovinculado.bt_desdobrar.focus();
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_12;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_11;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_10;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_9;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_8;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_7;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_6;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_5;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_4;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_3;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_2;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_pgto_1;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_12;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_11;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_10;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_9;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_8;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_7;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_6;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_5;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_4;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_3;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_2;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_juros_1;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_12
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_11
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_10
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_9
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_8
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_7
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_6
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_5
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_4
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_3
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_2
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_pgto_1
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_12;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_11;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_10;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_9;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_8;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_7;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_6;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_5;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_4;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_3;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_2;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_vlr_1;
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_12
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_11
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_10
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_9
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_8
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_7
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_6
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_5
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_4
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_3
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_2
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_dup_dt_vcto_1
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_12
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_11
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_10
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_9
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_8
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_7
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_6
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_5
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_4
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_3
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_2
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

      var campo = document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_1
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

      if(trim($this->mgt_swap_cobranca_numero->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, selecione um Cliente.';
      }
      elseif(trim($this->mgt_swap_cobranca_nome->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe um nome de Cliente.';
      }
      elseif(trim($this->mgt_swap_cobranca_data_emissao->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a data de emissao Cliente.';
      }
      elseif(trim($this->mgt_swap_cobranca_dup_cod_bco->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a numero do Banco.';
      }
      elseif(trim($this->mgt_swap_cobranca_dup_vlr->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe o Valor Total.';
      }
      else
      {
            $Comando_SQL = "insert into mgt_notas_fiscais(";

            $Comando_SQL .= "mgt_nota_fiscal_finalidade, ";
            $Comando_SQL .= "mgt_nota_fiscal_numero, ";

            $Comando_SQL .= "mgt_nota_fiscal_faturamento, ";
            $Comando_SQL .= "mgt_nota_fiscal_pedido, ";
            $Comando_SQL .= "mgt_nota_fiscal_cfop, ";
            $Comando_SQL .= "mgt_nota_fiscal_cfop_2, ";
            $Comando_SQL .= "mgt_nota_fiscal_tipo_nota, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_numero, ";
            $Comando_SQL .= "mgt_nota_fiscal_cliente_codigo, ";
            $Comando_SQL .= "mgt_nota_fiscal_cliente_nome, ";
            $Comando_SQL .= "mgt_nota_fiscal_razao_social, ";

            $Comando_SQL .= "mgt_nota_fiscal_data_emissao, ";
            $Comando_SQL .= "mgt_nota_fiscal_banco, ";
            $Comando_SQL .= "mgt_nota_fiscal_valor_total, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_1, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_nro_1, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_1, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_1, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_1, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_1, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_1, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_forma_1, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_obs_1, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_2, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_nro_2, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_2, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_2, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_2, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_2, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_2, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_forma_2, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_obs_2, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_3, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_nro_3, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_3, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_3, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_3, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_3, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_3, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_forma_3, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_obs_3, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_4, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_nro_4, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_4, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_4, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_4, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_4, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_4, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_forma_4, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_obs_4, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_5, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_nro_5, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_5, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_5, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_5, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_5, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_5, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_forma_5, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_obs_5, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_6, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_nro_6, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_6, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_6, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_6, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_6, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_6, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_forma_6, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_obs_6, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_7, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_nro_7, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_7, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_7, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_7, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_7, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_7, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_forma_7, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_obs_7, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_8, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_nro_8, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_8, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_8, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_8, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_8, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_8, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_forma_8, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_obs_8, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_9, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_nro_9, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_9, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_9, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_9, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_9, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_9, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_forma_9, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_obs_9, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_10, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_nro_10, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_10, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_10, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_10, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_10, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_10, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_forma_10, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_obs_10, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_11, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_nro_11, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_11, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_11, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_11, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_11, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_11, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_forma_11, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_obs_11, ";

            $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_12, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_nro_12, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_12, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_12, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_12, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_12, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_12, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_forma_12, ";
            $Comando_SQL .= "mgt_nota_fiscal_dup_obs_12) ";

            $Comando_SQL .= "values(";

            $Comando_SQL .= "'" . trim($this->mgt_swap_cobranca_finalidade->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_swap_cobranca_nota_fiscal->Text) . "', ";

            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'0000', ";
            $Comando_SQL .= "'0000', ";
            $Comando_SQL .= "'1', ";

            $Comando_SQL .= "'" . trim($this->mgt_swap_cobranca_numero->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_swap_cobranca_codigo->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_swap_cobranca_nome->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_swap_cobranca_nome->Text) . "', ";

            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_swap_cobranca_data_emissao->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_swap_cobranca_dup_cod_bco->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_swap_cobranca_dup_vlr->Text) . "',";

            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_nro_1->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_1->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_1->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_1->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_juros_1->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_1->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_forma_1->Value) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_obs_1->Text) . "',";

            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_nro_2->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_2->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_2->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_2->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_juros_2->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_2->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_forma_2->Value) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_obs_2->Text) . "',";

            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_nro_3->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_3->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_3->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_3->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_juros_3->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_3->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_forma_3->Value) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_obs_3->Text) . "',";

            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_nro_4->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_4->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_4->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_4->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_juros_4->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_4->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_forma_4->Value) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_obs_4->Text) . "',";

            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_nro_5->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_5->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_5->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_5->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_juros_5->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_5->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_forma_5->Value) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_obs_5->Text) . "',";

            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_nro_6->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_6->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_6->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_6->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_juros_6->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_6->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_forma_6->Value) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_obs_6->Text) . "',";

            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_nro_7->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_7->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_7->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_7->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_juros_7->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_7->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_forma_7->Value) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_obs_7->Text) . "',";

            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_nro_8->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_8->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_8->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_8->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_juros_8->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_8->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_forma_8->Value) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_obs_8->Text) . "',";

            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_nro_9->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_9->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_9->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_9->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_juros_9->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_9->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_forma_9->Value) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_obs_9->Text) . "',";

            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_nro_10->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_10->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_10->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_10->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_juros_10->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_10->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_forma_10->Value) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_obs_10->Text) . "',";

            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_nro_11->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_11->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_11->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_11->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_juros_11->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_11->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_forma_11->Value) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_obs_11->Text) . "',";

            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_nro_12->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_vcto_12->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_12->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_nota_fiscal_dup_dt_pgto_12->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_juros_12->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_pgto_12->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_forma_12->Value) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_obs_12->Text) . "') ";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Limpa os Campos para o Proximo Lancamento ***

            $this->mgt_swap_cobranca_finalidade->Text = 'NVL';
            $this->mgt_swap_cobranca_numero->Text = '';
            $this->mgt_swap_cobranca_codigo->Text = '';
            $this->mgt_swap_cobranca_nome->Text = '';
            $this->mgt_swap_cobranca_nota_fiscal->Text = '0';
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

            $this->MSG_Erro->Caption = 'Lancamento efetuado com sucesso !!!';

            //*** Seleciona a Numeracao para o Lancamento Manual ***

            $Comando_SQL = "Select * from mgt_notas_fiscais Where mgt_nota_fiscal_finalidade = 'NVL' Order By mgt_nota_fiscal_numero Desc";

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

            $this->mgt_swap_cobranca_nota_fiscal->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'];
            $this->mgt_swap_cobranca_nota_fiscal->Text = intval($this->mgt_swap_cobranca_nota_fiscal->Text) + 1;
      }
   }

   function mgt_swap_cobranca_dup_vlr_pgtoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cobnaovinculado.mgt_swap_cobranca_dup_vlr_pgto;
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

   var campo = document.cobnaovinculado.mgt_swap_cobranca_dup_vlr_juros;
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

   var campo = document.cobnaovinculado.mgt_swap_cobranca_dup_cod_bco
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

   var campo = document.cobnaovinculado.mgt_swap_cobranca_dup_dt_pgto
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

   var campo = document.cobnaovinculado.mgt_swap_cobranca_dup_dt_vcto
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
     document.cobnaovinculado.bt_baixar.focus();
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
     document.cobnaovinculado.mgt_swap_cobranca_dup_observacao.focus();
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
     document.cobnaovinculado.mgt_swap_cobranca_dup_vlr.focus();
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
     document.cobnaovinculado.mgt_swap_cobranca_dup_cod_bco.focus();
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
     document.cobnaovinculado.mgt_swap_cobranca_dup_vlr_pgto.focus();
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
     document.cobnaovinculado.mgt_swap_cobranca_dup_vlr_juros.focus();
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
     document.cobnaovinculado.mgt_swap_cobranca_nota_fiscal.focus();
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
     document.cobnaovinculado.mgt_swap_cobranca_nome.focus();
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
     document.cobnaovinculado.mgt_nota_fiscal_cliente_condicao_pgto_1.focus();
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
     document.cobnaovinculado.mgt_swap_cobranca_dup_vlr.focus();
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
     document.cobnaovinculado.mgt_swap_cobranca_dup_cod_bco.focus();
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
     document.cobnaovinculado.mgt_swap_cobranca_data_emissao.focus();
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
     document.cobnaovinculado.mgt_swap_cobranca_nota_fiscal.focus();
     return false;
   }

<?php

   }

   function cobnaovinculadoCreate($sender, $params)
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

      //*** Limpa as Mensagens de Erro ***

      $this->MSG_Erro->Caption = '';

      //*** Seleciona a Numeracao para o Lancamento Manual ***

      $Comando_SQL = "Select * from mgt_notas_fiscais Where mgt_nota_fiscal_finalidade = 'NVL' Order By mgt_nota_fiscal_numero Desc";

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      $this->mgt_swap_cobranca_nota_fiscal->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'];
      $this->mgt_swap_cobranca_nota_fiscal->Text = intval($this->mgt_swap_cobranca_nota_fiscal->Text) + 1;
   }

   function bt_fecharClick($sender, $params)
   {
      //*** Fecha a Tela de Cobranca ***

      redirect('frame_corpo.php');
   }
   function cobnaovinculadoJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cobnaovinculado;

//Creates the form
$cobnaovinculado = new cobnaovinculado($application);

//Read from resource file
$cobnaovinculado->loadResource(__FILE__);

//Shows the form
$cobnaovinculado->show();

?>