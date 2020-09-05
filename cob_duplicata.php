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
class cobduplicata extends Page
{
   public $mgt_swap_cobranca_finalidade = null;
   public $Label20 = null;
   public $bt_baixar = null;
   public $mgt_swap_cobranca_dup_observacao = null;
   public $mgt_swap_cobranca_dup_cod_bancario = null;
   public $mgt_swap_cobranca_posicao = null;
   public $mgt_swap_cobranca_data_emissao = null;
   public $Label17 = null;
   public $mgt_swap_cobranca_dup_vlr_pgto = null;
   public $mgt_swap_cobranca_dup_vlr_juros = null;
   public $mgt_swap_cobranca_dup_dt_pgto = null;
   public $mgt_swap_cobranca_nome = null;
   public $mgt_swap_cobranca_codigo = null;
   public $mgt_swap_cobranca_dup_vlr = null;
   public $mgt_swap_cobranca_dup_dt_vcto = null;
   public $mgt_swap_cobranca_dup_cod_bco = null;
   public $mgt_swap_cobranca_nota_fiscal = null;
   public $mgt_swap_cobranca_dup_nro = null;
   public $Label16 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
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
     document.cobduplicata.mgt_swap_cobranca_dup_nro.focus();
     return false;
   }

   <?php

   }

   function bt_baixarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_swap_cobranca_dup_nro->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, selecione uma Cobranca';
      }
      else
      {
         $this->MSG_Erro->Caption = '';

         $Comando_SQL = "update mgt_notas_fiscais set ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_" . trim($this->mgt_swap_cobranca_posicao->Value) . "='" . trim(trim($this->mgt_swap_cobranca_dup_observacao->Text) . " DUPLICATA GERADA EM: " . date("d/m/Y", time())) . " || '";
         $Comando_SQL .= "where ";
         $Comando_SQL .= "mgt_nota_fiscal_finalidade = '" . trim($this->mgt_swap_cobranca_finalidade->Text) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_numero = '" . trim($this->mgt_swap_cobranca_nota_fiscal->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->mgt_swap_cobranca_dup_observacao->Text = trim(trim($this->mgt_swap_cobranca_dup_observacao->Text) . " DUPLICATA GERADA EM: " . date("d/m/Y", time())) . " || ";

         //*** Abre a Tela de Emissao da Duplicata ***

         echo "<script language=\"JavaScript\">";
         echo "window.open('cob_duplicata_imp.php?mgt_nota_fiscal_finalidade=" . trim($this->mgt_swap_cobranca_finalidade->Text) . "&mgt_nota_fiscal_numero=" . trim($this->mgt_swap_cobranca_nota_fiscal->Text) . "&posicao=" . trim($this->mgt_swap_cobranca_posicao->Value) . "','cob_duplicata_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo "</script>";
      }
   }

   function mgt_swap_cobranca_dup_vlr_pgtoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cobduplicata.mgt_swap_cobranca_dup_vlr_pgto;
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

   var campo = document.cobduplicata.mgt_swap_cobranca_dup_vlr_juros;
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

   var campo = document.cobduplicata.mgt_swap_cobranca_dup_cod_bco
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

   var campo = document.cobduplicata.mgt_swap_cobranca_dup_dt_pgto
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

   var campo = document.cobduplicata.mgt_swap_cobranca_dup_dt_vcto
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
     document.cobduplicata.bt_baixar.focus();
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
     document.cobduplicata.mgt_swap_cobranca_dup_observacao.focus();
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
     document.cobduplicata.mgt_swap_cobranca_dup_cod_bancario.focus();
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
     document.cobduplicata.mgt_swap_cobranca_dup_cod_bco.focus();
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
     document.cobduplicata.mgt_swap_cobranca_dup_vlr_pgto.focus();
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
     document.cobduplicata.mgt_swap_cobranca_dup_vlr_juros.focus();
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
     document.cobduplicata.mgt_swap_cobranca_dup_dt_pgto.focus();
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
     document.cobduplicata.mgt_swap_cobranca_nome.focus();
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
     document.cobduplicata.mgt_swap_cobranca_codigo.focus();
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
     document.cobduplicata.mgt_swap_cobranca_dup_vlr.focus();
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
     document.cobduplicata.mgt_swap_cobranca_dup_dt_vcto.focus();
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
     document.cobduplicata.mgt_swap_cobranca_data_emissao.focus();
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
     document.cobduplicata.mgt_swap_cobranca_nota_fiscal.focus();
     return false;
   }

<?php

   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   document.cobduplicata.mgt_swap_cobranca_finalidade.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_nota_fiscal.value = registros.getTableModel().getValue(1, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_dup_nro.value = registros.getTableModel().getValue(2, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_data_emissao.value = registros.getTableModel().getValue(3, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_dup_cod_bco.value = registros.getTableModel().getValue(4, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_codigo.value = registros.getTableModel().getValue(5, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_nome.value = registros.getTableModel().getValue(6, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_dup_vlr.value = registros.getTableModel().getValue(7, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_dup_dt_vcto.value = registros.getTableModel().getValue(8, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_dup_dt_pgto.value = registros.getTableModel().getValue(9, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_dup_vlr_pgto.value = registros.getTableModel().getValue(10, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_dup_vlr_juros.value = registros.getTableModel().getValue(11, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_posicao.value = registros.getTableModel().getValue(12, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_dup_cod_bancario.value = registros.getTableModel().getValue(13, registros.getFocusedRow());
   document.cobduplicata.mgt_swap_cobranca_dup_observacao.value = registros.getTableModel().getValue(14, registros.getFocusedRow());

<?php

   }

   function mgt_nota_fiscal_numeroJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cobduplicata.mgt_nota_fiscal_numero
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
     document.cobduplicata.bt_procurar.focus();
     return false;
   }

<?php

   }


   public function carrega_cobranca()
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      //*** Limpa a Tabela de Cobrancas ***

      $Comando_SQL = "TRUNCATE TABLE mgt_swap_cobrancas";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      if(trim($this->mgt_nota_fiscal_numero->Text) != '')
      {
         $this->MSG_Erro->Caption = '';

         //*** Prepara o Select das Informacoes ***

         $Comando_SQL = "Select * from mgt_notas_fiscais Where ";
         $Comando_SQL .= "mgt_nota_fiscal_numero ='" . trim($this->mgt_nota_fiscal_numero->Text) . "' and ";
         $Comando_SQL .= "mgt_nota_fiscal_tipo_nota ='1'";
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
               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_1']) != '')
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

               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_2']) != '')
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

               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_3']) != '')
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

               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_4']) != '')
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

               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_5']) != '')
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

               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_6']) != '')
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

               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_7']) != '')
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

               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_8']) != '')
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

               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_9']) != '')
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

               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_10']) != '')
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

               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_11']) != '')
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

               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_12']) != '')
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

               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
            }
         }
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
            $this->MSG_Erro->Caption = '';

            //*** Prepara o Select das Informacoes ***

            $Comando_SQL = "Select * from mgt_notas_fiscais Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_1 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_1 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_2 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_2 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_3 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_3 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_4 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_4 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_5 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_5 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_6 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_6 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_7 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_7 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_8 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_8 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_9 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_9 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_10 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_10 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_11 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_11 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_12 >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_12 <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "(((mgt_nota_fiscal_dup_dt_pgto_1 ='') or (mgt_nota_fiscal_dup_dt_pgto_1 ='0000-00-00')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_pgto_2 ='') or (mgt_nota_fiscal_dup_dt_pgto_2 ='0000-00-00')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_pgto_3 ='') or (mgt_nota_fiscal_dup_dt_pgto_3 ='0000-00-00')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_pgto_4  ='') or (mgt_nota_fiscal_dup_dt_pgto_4  ='0000-00-00')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_pgto_5  ='') or (mgt_nota_fiscal_dup_dt_pgto_5  ='0000-00-00')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_pgto_6  ='') or (mgt_nota_fiscal_dup_dt_pgto_6  ='0000-00-00')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_pgto_7  ='') or (mgt_nota_fiscal_dup_dt_pgto_7  ='0000-00-00')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_pgto_8  ='') or (mgt_nota_fiscal_dup_dt_pgto_8  ='0000-00-00')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_pgto_9  ='') or (mgt_nota_fiscal_dup_dt_pgto_9  ='0000-00-00')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_pgto_10 ='') or (mgt_nota_fiscal_dup_dt_pgto_10 ='0000-00-00')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_pgto_11 ='') or (mgt_nota_fiscal_dup_dt_pgto_11 ='0000-00-00')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_pgto_12 ='') or (mgt_nota_fiscal_dup_dt_pgto_12 ='0000-00-00'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_nota_fiscal_tipo_nota ='1'";
            $Comando_SQL .= " Order By mgt_nota_fiscal_numero";

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
                     (strtotime(trim($dt_vcto_1)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))))and
                     (strtotime(trim($dt_vcto_1)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))and
                     ((trim($dt_pgto_1) == '')or(trim($dt_pgto_1) == '0000-00-00'))
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

                  if(trim($dt_vcto_2) != '')
                  {
                     if(
                     (strtotime(trim($dt_vcto_2)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))))and
                     (strtotime(trim($dt_vcto_2)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))and
                     ((trim($dt_pgto_2) == '')or(trim($dt_pgto_2) == '0000-00-00'))
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

                  if(trim($dt_vcto_3) != '')
                  {
                     if(
                     (strtotime(trim($dt_vcto_3)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))))and
                     (strtotime(trim($dt_vcto_3)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))and
                     ((trim($dt_pgto_3) == '')or(trim($dt_pgto_3) == '0000-00-00'))
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

                  if(trim($dt_vcto_4) != '')
                  {
                     if(
                     (strtotime(trim($dt_vcto_4)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))))and
                     (strtotime(trim($dt_vcto_4)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))and
                     ((trim($dt_pgto_4) == '')or(trim($dt_pgto_4) == '0000-00-00'))
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

                  if(trim($dt_vcto_5) != '')
                  {
                     if(
                     (strtotime(trim($dt_vcto_5)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))))and
                     (strtotime(trim($dt_vcto_5)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))and
                     ((trim($dt_pgto_5) == '')or(trim($dt_pgto_5) == '0000-00-00'))
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

                  if(trim($dt_vcto_6) != '')
                  {
                     if(
                     (strtotime(trim($dt_vcto_6)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))))and
                     (strtotime(trim($dt_vcto_6)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))and
                     ((trim($dt_pgto_6) == '')or(trim($dt_pgto_6) == '0000-00-00'))
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

                  if(trim($dt_vcto_7) != '')
                  {
                     if(
                     (strtotime(trim($dt_vcto_7)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))))and
                     (strtotime(trim($dt_vcto_7)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))and
                     ((trim($dt_pgto_7) == '')or(trim($dt_pgto_7) == '0000-00-00'))
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

                  if(trim($dt_vcto_8) != '')
                  {
                     if(
                     (strtotime(trim($dt_vcto_8)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))))and
                     (strtotime(trim($dt_vcto_8)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))and
                     ((trim($dt_pgto_8) == '')or(trim($dt_pgto_8) == '0000-00-00'))
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

                  if(trim($dt_vcto_9) != '')
                  {
                     if(
                     (strtotime(trim($dt_vcto_9)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))))and
                     (strtotime(trim($dt_vcto_9)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))and
                     ((trim($dt_pgto_9) == '')or(trim($dt_pgto_9) == '0000-00-00'))
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

                  if(trim($dt_vcto_10) != '')
                  {
                     if(
                     (strtotime(trim($dt_vcto_10)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))))and
                     (strtotime(trim($dt_vcto_10)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))and
                     ((trim($dt_pgto_10) == '')or(trim($dt_pgto_10) == '0000-00-00'))
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

                  if(trim($dt_vcto_11) != '')
                  {
                     if(
                     (strtotime(trim($dt_vcto_11)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))))and
                     (strtotime(trim($dt_vcto_11)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))and
                     ((trim($dt_pgto_11) == '')or(trim($dt_pgto_11) == '0000-00-00'))
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

                  if(trim($dt_vcto_12) != '')
                  {
                     if(
                     (strtotime(trim($dt_vcto_12)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))))and
                     (strtotime(trim($dt_vcto_12)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))and
                     ((trim($dt_pgto_12) == '')or(trim($dt_pgto_12) == '0000-00-00'))
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
         }
      }

      //*** Seleciona o Total Geral de Cobrancas ***

      $Comando_SQL = "Select SUM(mgt_swap_cobranca_dup_vlr) AS mgt_total_geral_cobrancas from mgt_swap_cobrancas Order By mgt_swap_cobranca_dup_dt_vcto, mgt_swap_cobranca_dup_nro";

      GetConexaoPrincipal()->SQL_MGT_Cobrancas->Close();
      GetConexaoPrincipal()->SQL_MGT_Cobrancas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Cobrancas->Open();

      $this->mgt_total_geral_cobrancas->Caption = GetConexaoPrincipal()->SQL_MGT_Cobrancas->Fields['mgt_total_geral_cobrancas'];

      //*** Atualiza o Status do Credito do Cliente ***

      $Comando_SQL = "Select *,date_format(mgt_swap_cobranca_data_emissao, '%d/%m/%Y') AS mgt_swap_cobranca_data_emissao,date_format(mgt_swap_cobranca_dup_dt_vcto, '%d/%m/%Y') AS mgt_swap_cobranca_dup_dt_vcto,date_format(mgt_swap_cobranca_dup_dt_pgto, '%d/%m/%Y') AS mgt_swap_cobranca_dup_dt_pgto from mgt_swap_cobrancas Order By mgt_swap_cobranca_dup_dt_vcto, mgt_swap_cobranca_dup_nro";

      GetConexaoPrincipal()->SQL_MGT_Cobrancas->Close();
      GetConexaoPrincipal()->SQL_MGT_Cobrancas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Cobrancas->Open();

      GetConexaoPrincipal()->SQL_MGT_Cobrancas->First();
   }

   function bt_procurarClick($sender, $params)
   {
      $this->carrega_cobranca();
   }

   function mgt_nota_fiscal_data_fimJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.cobduplicata.mgt_nota_fiscal_data_fim
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
     document.cobduplicata.mgt_nota_fiscal_numero.focus();
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
     document.cobduplicata.mgt_nota_fiscal_data_fim.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_data_iniJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Data ***

   var campo = document.cobduplicata.mgt_nota_fiscal_data_ini
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

   function cobduplicataCreate($sender, $params)
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

      //*** Limpa os Campos para a Proxima Baixa ***

      $this->mgt_swap_cobranca_finalidade->Text = '';
      $this->mgt_swap_cobranca_nota_fiscal->Text = '';
      $this->mgt_swap_cobranca_dup_nro->Text = '';
      $this->mgt_swap_cobranca_data_emissao->Text = '';
      $this->mgt_swap_cobranca_dup_cod_bco->Text = '';
      $this->mgt_swap_cobranca_codigo->Text = '';
      $this->mgt_swap_cobranca_nome->Text = '';
      $this->mgt_swap_cobranca_dup_vlr->Text = '';
      $this->mgt_swap_cobranca_dup_dt_vcto->Text = '';
      $this->mgt_swap_cobranca_dup_dt_pgto->Text = '';
      $this->mgt_swap_cobranca_dup_vlr_pgto->Text = '';
      $this->mgt_swap_cobranca_dup_vlr_juros->Text = '';
      $this->mgt_swap_cobranca_posicao->Value = '';
      $this->mgt_swap_cobranca_dup_cod_bancario->Text = '';
      $this->mgt_swap_cobranca_dup_observacao->Text = '';

      //*** Limpa a Tabela de Cobrancas ***

      $Comando_SQL = "TRUNCATE TABLE mgt_swap_cobrancas";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Fecha a Tela de Cobranca ***

      redirect('frame_corpo.php');
   }
   function cobduplicataJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cobduplicata;

//Creates the form
$cobduplicata = new cobduplicata($application);

//Read from resource file
$cobduplicata->loadResource(__FILE__);

//Shows the form
$cobduplicata->show();

?>