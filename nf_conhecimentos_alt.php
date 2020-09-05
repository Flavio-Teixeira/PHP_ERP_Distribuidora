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
class nfconhecimentosalt extends Page
{
   public $mgt_operacao_cadastro_motivo = null;
   public $Label99 = null;
   public $Label2 = null;
   public $GroupBox3 = null;
   public $mgt_conhecimento_observacao = null;
   public $confirmacao = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $bt_excluir = null;
   public $bt_alterar = null;
   public $mgt_conhecimento_numero = null;
   public $mgt_conhecimento_numero_cliente = null;
   public $Label1 = null;
   public $mgt_conhecimento_frete_vlr_icms = null;
   public $mgt_conhecimento_frete_aliquota_icms = null;
   public $mgt_conhecimento_frete_base = null;
   public $mgt_conhecimento_frete_total = null;
   public $mgt_conhecimento_frete_outros = null;
   public $mgt_conhecimento_frete_pedagio = null;
   public $mgt_conhecimento_frete_despacho = null;
   public $mgt_conhecimento_frete_sec_sat = null;
   public $mgt_conhecimento_frete_vlr = null;
   public $mgt_conhecimento_frete_peso = null;
   public $GroupBox11 = null;
   public $Label98 = null;
   public $Label97 = null;
   public $Label96 = null;
   public $Label95 = null;
   public $Label94 = null;
   public $Label93 = null;
   public $Label92 = null;
   public $Label91 = null;
   public $Label90 = null;
   public $Label89 = null;
   public $mgt_conhecimento_uf_4 = null;
   public $mgt_conhecimento_local_4 = null;
   public $mgt_conhecimento_placa_4 = null;
   public $mgt_conhecimento_marca_4 = null;
   public $mgt_conhecimento_vlr_4 = null;
   public $mgt_conhecimento_nota_4 = null;
   public $mgt_conhecimento_m_l_4 = null;
   public $mgt_conhecimento_peso_4 = null;
   public $mgt_conhecimento_especie_4 = null;
   public $mgt_conhecimento_qtde_4 = null;
   public $mgt_conhecimento_carga_4 = null;
   public $mgt_conhecimento_uf_3 = null;
   public $mgt_conhecimento_local_3 = null;
   public $mgt_conhecimento_placa_3 = null;
   public $mgt_conhecimento_marca_3 = null;
   public $mgt_conhecimento_vlr_3 = null;
   public $mgt_conhecimento_nota_3 = null;
   public $mgt_conhecimento_m_l_3 = null;
   public $mgt_conhecimento_peso_3 = null;
   public $mgt_conhecimento_especie_3 = null;
   public $mgt_conhecimento_qtde_3 = null;
   public $mgt_conhecimento_carga_3 = null;
   public $mgt_conhecimento_uf_2 = null;
   public $mgt_conhecimento_local_2 = null;
   public $mgt_conhecimento_placa_2 = null;
   public $mgt_conhecimento_marca_2 = null;
   public $mgt_conhecimento_vlr_2 = null;
   public $mgt_conhecimento_nota_2 = null;
   public $mgt_conhecimento_m_l_2 = null;
   public $mgt_conhecimento_peso_2 = null;
   public $mgt_conhecimento_especie_2 = null;
   public $mgt_conhecimento_qtde_2 = null;
   public $mgt_conhecimento_carga_2 = null;
   public $mgt_conhecimento_uf_1 = null;
   public $mgt_conhecimento_local_1 = null;
   public $mgt_conhecimento_placa_1 = null;
   public $mgt_conhecimento_marca_1 = null;
   public $mgt_conhecimento_vlr_1 = null;
   public $mgt_conhecimento_nota_1 = null;
   public $mgt_conhecimento_m_l_1 = null;
   public $mgt_conhecimento_peso_1 = null;
   public $mgt_conhecimento_especie_1 = null;
   public $mgt_conhecimento_qtde_1 = null;
   public $mgt_conhecimento_carga_1 = null;
   public $mgt_conhecimento_entrega = null;
   public $mgt_conhecimento_coleta = null;
   public $GroupBox10 = null;
   public $Label88 = null;
   public $Label87 = null;
   public $Label86 = null;
   public $Label85 = null;
   public $Label84 = null;
   public $Label83 = null;
   public $Label82 = null;
   public $Label81 = null;
   public $Label80 = null;
   public $Label79 = null;
   public $Label78 = null;
   public $GroupBox9 = null;
   public $Label77 = null;
   public $Label76 = null;
   public $Label75 = null;
   public $Label74 = null;
   public $Label73 = null;
   public $Label72 = null;
   public $Label71 = null;
   public $Label70 = null;
   public $Label69 = null;
   public $Label68 = null;
   public $Label67 = null;
   public $GroupBox8 = null;
   public $Label66 = null;
   public $Label65 = null;
   public $Label64 = null;
   public $Label63 = null;
   public $Label62 = null;
   public $Label61 = null;
   public $Label60 = null;
   public $Label59 = null;
   public $Label58 = null;
   public $Label57 = null;
   public $Label56 = null;
   public $Label55 = null;
   public $Label54 = null;
   public $Label53 = null;
   public $Local = null;
   public $Label52 = null;
   public $Label51 = null;
   public $Label50 = null;
   public $Label49 = null;
   public $Label48 = null;
   public $Label47 = null;
   public $Label46 = null;
   public $Label45 = null;
   public $Label44 = null;
   public $GroupBox7 = null;
   public $Panel3 = null;
   public $mgt_conhecimento_destinatario_cep = null;
   public $mgt_conhecimento_destinatario_estado = null;
   public $mgt_conhecimento_destinatario_cidade = null;
   public $mgt_conhecimento_destinatario_bairro = null;
   public $mgt_conhecimento_destinatario_complemento = null;
   public $mgt_conhecimento_destinatario_endereco = null;
   public $mgt_conhecimento_destinatario_inscricao_estadual = null;
   public $mgt_conhecimento_destinatario_nome = null;
   public $mgt_conhecimento_destinatario_codigo = null;
   public $mgt_conhecimento_destinatario_numero = null;
   public $mgt_conhecimento_remetente_cep = null;
   public $mgt_conhecimento_remetente_estado = null;
   public $mgt_conhecimento_remetente_cidade = null;
   public $mgt_conhecimento_remetente_bairro = null;
   public $mgt_conhecimento_remetente_complemento = null;
   public $mgt_conhecimento_remetente_endereco = null;
   public $mgt_conhecimento_remetente_inscricao_estadual = null;
   public $mgt_conhecimento_remetente_nome = null;
   public $mgt_conhecimento_remetente_codigo = null;
   public $mgt_conhecimento_remetente_numero = null;
   public $mgt_conhecimento_frete_pago_em = null;
   public $mgt_conhecimento_frete_pago = null;
   public $mgt_conhecimento_frete_pagar = null;
   public $mgt_conhecimento_cfop = null;
   public $mgt_conhecimento_natureza_operacao = null;
   public $mgt_conhecimento_data_emissao = null;
   public $GroupBox4 = null;
   public $Label43 = null;
   public $Label42 = null;
   public $Label41 = null;
   public $Label40 = null;
   public $Label39 = null;
   public $Label38 = null;
   public $Label37 = null;
   public $Label21 = null;
   public $Label20 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $GroupBox5 = null;
   public $Label36 = null;
   public $Label35 = null;
   public $Label34 = null;
   public $Label27 = null;
   public $Label26 = null;
   public $Label25 = null;
   public $Label24 = null;
   public $Label23 = null;
   public $Label22 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $Label11 = null;
   public $GroupBox2 = null;
   public $Label10 = null;
   public $mgt_conhecimento_destino = null;
   public $mgt_conhecimento_cep = null;
   public $mgt_conhecimento_estado = null;
   public $mgt_conhecimento_cidade = null;
   public $mgt_conhecimento_bairro = null;
   public $mgt_conhecimento_complemento = null;
   public $mgt_conhecimento_endereco = null;
   public $mgt_conhecimento_inscricao_estadual = null;
   public $mgt_conhecimento_nome = null;
   public $mgt_conhecimento_codigo = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $adiciona_clientes = null;
   public $bt_adiciona_cliente = null;
   public $Label33 = null;
   public $Label32 = null;
   public $Label31 = null;
   public $registros = null;
   public $Label30 = null;
   public $GroupBox6 = null;
   public $bt_buscar = null;
   public $opcao_busca = null;
   public $dados_busca = null;
   public $Label29 = null;
   public $Label28 = null;
   public $Label19 = null;
   public $Panel2 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $area_sistema = null;
   function mgt_conhecimento_observacaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.bt_alterar.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_data_emissao.focus();
        return false;
      }

<?php

   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 84;
      $this->confirmacao->IsVisible = true;
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
         $Comando_SQL .= "'" . trim($this->mgt_conhecimento_numero->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_conhecimentos ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_conhecimento_numero='" . trim($this->mgt_conhecimento_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->confirmacao->Top = 1196;
         $this->confirmacao->IsVisible = false;

         redirect('nf_conhecimentos.php');
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 1196;
      $this->confirmacao->IsVisible = false;
   }

   function mgt_conhecimento_frete_vlr_icmsJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_frete_vlr_icms;
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

      //*** INICIO - Totaliza o Conhecimento ***

      document.nfconhecimentosalt.mgt_conhecimento_frete_vlr_icms.value = ((parseFloat(document.nfconhecimentosalt.mgt_conhecimento_frete_base.value) * parseFloat(document.nfconhecimentosalt.mgt_conhecimento_frete_aliquota_icms.value)) / 100);
      document.nfconhecimentosalt.mgt_conhecimento_frete_vlr_icms.value = parseFloat(document.nfconhecimentosalt.mgt_conhecimento_frete_vlr_icms.value);

      //*** FINAL - Totaliza o Conhecimento ***

<?php

   }

   function mgt_conhecimento_frete_aliquota_icmsJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_frete_aliquota_icms;
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

      //*** INICIO - Totaliza o Conhecimento ***

      document.nfconhecimentosalt.mgt_conhecimento_frete_vlr_icms.value = ((parseFloat(document.nfconhecimentosalt.mgt_conhecimento_frete_base.value) * parseFloat(document.nfconhecimentosalt.mgt_conhecimento_frete_aliquota_icms.value)) / 100);
      document.nfconhecimentosalt.mgt_conhecimento_frete_vlr_icms.value = parseFloat(document.nfconhecimentosalt.mgt_conhecimento_frete_vlr_icms.value);

      //*** FINAL - Totaliza o Conhecimento ***

<?php

   }

   function mgt_conhecimento_frete_baseJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_frete_base;
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

      //*** INICIO - Totaliza o Conhecimento ***

      document.nfconhecimentosalt.mgt_conhecimento_frete_vlr_icms.value = ((parseFloat(document.nfconhecimentosalt.mgt_conhecimento_frete_base.value) * parseFloat(document.nfconhecimentosalt.mgt_conhecimento_frete_aliquota_icms.value)) / 100);
      document.nfconhecimentosalt.mgt_conhecimento_frete_vlr_icms.value = parseFloat(document.nfconhecimentosalt.mgt_conhecimento_frete_vlr_icms.value);

      //*** FINAL - Totaliza o Conhecimento ***

<?php

   }

   function mgt_conhecimento_frete_totalJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_frete_total;
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

   function mgt_conhecimento_frete_outrosJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_frete_outros;
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

   function mgt_conhecimento_frete_pedagioJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_frete_pedagio;
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

   function mgt_conhecimento_frete_despachoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_frete_despacho;
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

   function mgt_conhecimento_frete_sec_satJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_frete_sec_sat;
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

   function mgt_conhecimento_frete_vlrJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_frete_vlr;
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

   function mgt_conhecimento_frete_pesoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_frete_peso;
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

   function mgt_conhecimento_carga_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

<?php

   }

   function mgt_conhecimento_frete_vlr_icmsJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.bt_alterar.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_aliquota_icmsJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_vlr_icms.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_baseJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_aliquota_icms.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_totalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_base.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_outrosJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_total.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_pedagioJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_outros.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_despachoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_pedagio.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_sec_satJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_despacho.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_vlrJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_sec_sat.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_pesoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_vlr.focus();
        return false;
      }

<?php

   }


   function mgt_conhecimento_nota_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_nota_4;
      var digits="0123456789";
      var campo_temp;

      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_conhecimento_vlr_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_vlr_4;
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

   function mgt_conhecimento_peso_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_peso_4;
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

   function mgt_conhecimento_qtde_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_qtde_4;
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

   function mgt_conhecimento_nota_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_nota_3;
      var digits="0123456789";
      var campo_temp;

      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_conhecimento_vlr_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_vlr_3;
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

   function mgt_conhecimento_peso_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_peso_3;
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

   function mgt_conhecimento_qtde_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_qtde_3;
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

   function mgt_conhecimento_nota_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_nota_2;
      var digits="0123456789";
      var campo_temp;

      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_conhecimento_vlr_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_vlr_2;
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

   function mgt_conhecimento_peso_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_peso_2;
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

   function mgt_conhecimento_qtde_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_qtde_2;
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

   function mgt_conhecimento_nota_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_nota_1;
      var digits="0123456789";
      var campo_temp;

      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_conhecimento_vlr_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_vlr_1;
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

   function mgt_conhecimento_peso_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_peso_1;
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

   function mgt_conhecimento_qtde_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_qtde_1;
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

   function mgt_conhecimento_cfopJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_pagar.focus();
        return false;
      }

<?php

   }


   function mgt_conhecimento_uf_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_peso.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_local_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_uf_4.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_placa_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_local_4.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_marca_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_placa_4.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_vlr_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_marca_4.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_nota_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_vlr_4.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_m_l_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_nota_4.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_peso_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_m_l_4.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_especie_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_peso_4.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_qtde_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_especie_4.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_carga_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_qtde_4.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_uf_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_carga_4.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_local_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_uf_3.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_placa_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_local_3.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_marca_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_placa_3.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_vlr_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_marca_3.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_nota_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_vlr_3.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_m_l_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_nota_3.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_peso_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_m_l_3.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_especie_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_peso_3.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_qtde_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_especie_3.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_carga_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_qtde_3.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_uf_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_carga_3.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_local_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_uf_2.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_placa_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_local_2.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_marca_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_placa_2.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_vlr_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_marca_2.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_nota_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_vlr_2.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_m_l_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_nota_2.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_peso_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_m_l_2.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_especie_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_peso_2.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_qtde_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_especie_2.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_carga_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_qtde_2.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_uf_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_carga_2.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_local_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_uf_1.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_placa_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_local_1.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_marca_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_placa_1.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_vlr_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_marca_1.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_nota_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_vlr_1.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_m_l_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_nota_1.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_peso_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_m_l_1.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_especie_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_peso_1.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_qtde_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_especie_1.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_carga_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_qtde_1.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_carga_1.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_pago_emJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_frete_pago_em;
      var digits="0123456789/";
      var campo_temp;

      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Data ***

<?php

   }

   function mgt_conhecimento_cfopJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_cfop;
      var digits="0123456789";
      var campo_temp;

      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero ***

<?php

   }

   function mgt_conhecimento_data_emissaoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.nfconhecimentosalt.mgt_conhecimento_data_emissao;
      var digits="0123456789/";
      var campo_temp;

      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1);
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Data ***

<?php

   }

   function mgt_conhecimento_coletaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_entrega.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_pagoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_pago_em.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_pago_emJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_coleta.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_frete_pagarJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_frete_pago.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_natureza_operacaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_cfop.focus();
        return false;
      }

<?php

   }

   function mgt_conhecimento_data_emissaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfconhecimentosalt.mgt_conhecimento_natureza_operacao.focus();
        return false;
      }

<?php

   }


   public function limpa_dados()
   {
      $this->mgt_conhecimento_data_emissao->Text = date("d/m/Y", time());
      $this->mgt_conhecimento_natureza_operacao->Text = 'TRANSPORTE';
      $this->mgt_conhecimento_cfop->Text = '5352';

      $this->mgt_conhecimento_remetente_numero->Text = '';
      $this->mgt_conhecimento_remetente_codigo->Text = '';
      $this->mgt_conhecimento_remetente_nome->Text = '';
      $this->mgt_conhecimento_remetente_inscricao_estadual->Text = '';
      $this->mgt_conhecimento_remetente_endereco->Text = '';
      $this->mgt_conhecimento_remetente_complemento->Text = '';
      $this->mgt_conhecimento_remetente_bairro->Text = '';
      $this->mgt_conhecimento_remetente_cidade->Text = '';
      $this->mgt_conhecimento_remetente_estado->Text = '';
      $this->mgt_conhecimento_remetente_cep->Text = '';

      $this->mgt_conhecimento_destinatario_numero->Text = '';
      $this->mgt_conhecimento_destinatario_codigo->Text = '';
      $this->mgt_conhecimento_destinatario_nome->Text = '';
      $this->mgt_conhecimento_destinatario_inscricao_estadual->Text = '';
      $this->mgt_conhecimento_destinatario_endereco->Text = '';
      $this->mgt_conhecimento_destinatario_complemento->Text = '';
      $this->mgt_conhecimento_destinatario_bairro->Text = '';
      $this->mgt_conhecimento_destinatario_cidade->Text = '';
      $this->mgt_conhecimento_destinatario_estado->Text = '';
      $this->mgt_conhecimento_destinatario_cep->Text = '';

      $this->mgt_conhecimento_numero_cliente->Text = '';
      $this->mgt_conhecimento_codigo->Text = '';
      $this->mgt_conhecimento_nome->Text = '';
      $this->mgt_conhecimento_inscricao_estadual->Text = '';
      $this->mgt_conhecimento_endereco->Text = '';
      $this->mgt_conhecimento_complemento->Text = '';
      $this->mgt_conhecimento_bairro->Text = '';
      $this->mgt_conhecimento_cidade->Text = '';
      $this->mgt_conhecimento_estado->Text = '';
      $this->mgt_conhecimento_cep->Text = '';

      $this->mgt_conhecimento_frete_peso->Text = '0.00';
      $this->mgt_conhecimento_frete_vlr->Text = '0.00';
      $this->mgt_conhecimento_frete_sec_sat->Text = '0.00';
      $this->mgt_conhecimento_frete_despacho->Text = '0.00';
      $this->mgt_conhecimento_frete_pedagio->Text = '0.00';
      $this->mgt_conhecimento_frete_outros->Text = '0.00';
      $this->mgt_conhecimento_frete_total->Text = '0.00';
      $this->mgt_conhecimento_frete_base->Text = '0.00';
      $this->mgt_conhecimento_frete_aliquota_icms->Text = '0.00';
      $this->mgt_conhecimento_frete_vlr_icms->Text = '0.00';

      $this->mgt_conhecimento_observacao->Text = '';

      $this->MSG_Erro->Caption = "";
   }

   function bt_adiciona_clienteClick($sender, $params)
   {
      if($this->mgt_conhecimento_destino->ItemIndex == 0)
      {
         $this->mgt_conhecimento_remetente_numero->Text = $this->mgt_conhecimento_numero_cliente->Text;
         $this->mgt_conhecimento_remetente_codigo->Text = $this->mgt_conhecimento_codigo->Text;
         $this->mgt_conhecimento_remetente_nome->Text = $this->mgt_conhecimento_nome->Text;
         $this->mgt_conhecimento_remetente_inscricao_estadual->Text = $this->mgt_conhecimento_inscricao_estadual->Text;
         $this->mgt_conhecimento_remetente_endereco->Text = $this->mgt_conhecimento_endereco->Text;
         $this->mgt_conhecimento_remetente_complemento->Text = $this->mgt_conhecimento_complemento->Text;
         $this->mgt_conhecimento_remetente_bairro->Text = $this->mgt_conhecimento_bairro->Text;
         $this->mgt_conhecimento_remetente_cidade->Text = $this->mgt_conhecimento_cidade->Text;
         $this->mgt_conhecimento_remetente_estado->Text = $this->mgt_conhecimento_estado->Text;
         $this->mgt_conhecimento_remetente_cep->Text = $this->mgt_conhecimento_cep->Text;
      }
      else
      {
         $this->mgt_conhecimento_destinatario_numero->Text = $this->mgt_conhecimento_numero_cliente->Text;
         $this->mgt_conhecimento_destinatario_codigo->Text = $this->mgt_conhecimento_codigo->Text;
         $this->mgt_conhecimento_destinatario_nome->Text = $this->mgt_conhecimento_nome->Text;
         $this->mgt_conhecimento_destinatario_inscricao_estadual->Text = $this->mgt_conhecimento_inscricao_estadual->Text;
         $this->mgt_conhecimento_destinatario_endereco->Text = $this->mgt_conhecimento_endereco->Text;
         $this->mgt_conhecimento_destinatario_complemento->Text = $this->mgt_conhecimento_complemento->Text;
         $this->mgt_conhecimento_destinatario_bairro->Text = $this->mgt_conhecimento_bairro->Text;
         $this->mgt_conhecimento_destinatario_cidade->Text = $this->mgt_conhecimento_cidade->Text;
         $this->mgt_conhecimento_destinatario_estado->Text = $this->mgt_conhecimento_estado->Text;
         $this->mgt_conhecimento_destinatario_cep->Text = $this->mgt_conhecimento_cep->Text;
      }
   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      document.nfconhecimentosalt.mgt_conhecimento_numero_cliente.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
      document.nfconhecimentosalt.mgt_conhecimento_codigo.value = registros.getTableModel().getValue(2, registros.getFocusedRow());
      document.nfconhecimentosalt.mgt_conhecimento_nome.value = registros.getTableModel().getValue(4, registros.getFocusedRow());
      document.nfconhecimentosalt.mgt_conhecimento_inscricao_estadual.value = registros.getTableModel().getValue(5, registros.getFocusedRow());
      document.nfconhecimentosalt.mgt_conhecimento_endereco.value = registros.getTableModel().getValue(6, registros.getFocusedRow());
      document.nfconhecimentosalt.mgt_conhecimento_complemento.value = registros.getTableModel().getValue(7, registros.getFocusedRow());
      document.nfconhecimentosalt.mgt_conhecimento_bairro.value = registros.getTableModel().getValue(8, registros.getFocusedRow());
      document.nfconhecimentosalt.mgt_conhecimento_cidade.value = registros.getTableModel().getValue(9, registros.getFocusedRow());
      document.nfconhecimentosalt.mgt_conhecimento_estado.value = registros.getTableModel().getValue(10, registros.getFocusedRow());
      document.nfconhecimentosalt.mgt_conhecimento_cep.value = registros.getTableModel().getValue(11, registros.getFocusedRow());

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
     document.nfconhecimentosalt.bt_buscar.focus();
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
     document.nfconhecimentosalt.opcao_busca.focus();
     return false;
   }

<?php

   }


   function nfconhecimentosaltCreate($sender, $params)
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

      //*** Carrega os Dados do Conhecimento ***

      $this->limpa_dados();

      $mgt_conhecimento_numero = $_REQUEST['mgt_conhecimento_numero'];

      $Comando_SQL = "select * from mgt_conhecimentos where mgt_conhecimento_numero = '" . trim($mgt_conhecimento_numero) . "' order by mgt_conhecimento_numero";

      GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Close();
      GetConexaoPrincipal()->SQL_MGT_Conhecimentos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Open();

      $this->mgt_conhecimento_numero->Text = $mgt_conhecimento_numero;
      $this->mgt_conhecimento_data_emissao->Text = inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_data_emissao']);
      $this->mgt_conhecimento_natureza_operacao->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_natureza_operacao'];
      $this->mgt_conhecimento_cfop->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_cfop'];

      if(trim(GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_pagar']) == 'S')
      {
         $this->mgt_conhecimento_frete_pagar->Checked = true;
      }
      else
      {
         $this->mgt_conhecimento_frete_pagar->Checked = false;
      }

      if(trim(GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_pago']) == 'S')
      {
         $this->mgt_conhecimento_frete_pago->Checked = true;
      }
      else
      {
         $this->mgt_conhecimento_frete_pago->Checked = false;
      }

      $this->mgt_conhecimento_frete_pago_em->Text = inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_pago_em']);
      $this->mgt_conhecimento_remetente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_remetente_numero'];
      $this->mgt_conhecimento_remetente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_remetente_codigo'];
      $this->mgt_conhecimento_remetente_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_remetente_inscricao_estadual'];
      $this->mgt_conhecimento_remetente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_remetente_nome'];
      $this->mgt_conhecimento_remetente_endereco->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_remetente_endereco'];
      $this->mgt_conhecimento_remetente_complemento->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_remetente_complemento'];
      $this->mgt_conhecimento_remetente_bairro->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_remetente_bairro'];
      $this->mgt_conhecimento_remetente_cidade->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_remetente_cidade'];
      $this->mgt_conhecimento_remetente_estado->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_remetente_estado'];
      $this->mgt_conhecimento_remetente_cep->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_remetente_cep'];
      $this->mgt_conhecimento_destinatario_numero->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_destinatario_numero'];
      $this->mgt_conhecimento_destinatario_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_destinatario_codigo'];
      $this->mgt_conhecimento_destinatario_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_destinatario_inscricao_estadual'];
      $this->mgt_conhecimento_destinatario_nome->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_destinatario_nome'];
      $this->mgt_conhecimento_destinatario_endereco->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_destinatario_endereco'];
      $this->mgt_conhecimento_destinatario_complemento->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_destinatario_complemento'];
      $this->mgt_conhecimento_destinatario_bairro->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_destinatario_bairro'];
      $this->mgt_conhecimento_destinatario_cidade->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_destinatario_cidade'];
      $this->mgt_conhecimento_destinatario_estado->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_destinatario_estado'];
      $this->mgt_conhecimento_destinatario_cep->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_destinatario_cep'];
      $this->mgt_conhecimento_carga_1->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_carga_1'];
      $this->mgt_conhecimento_qtde_1->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_qtde_1'];
      $this->mgt_conhecimento_especie_1->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_especie_1'];
      $this->mgt_conhecimento_peso_1->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_peso_1'];
      $this->mgt_conhecimento_m_l_1->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_m_l_1'];
      $this->mgt_conhecimento_nota_1->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_nota_1'];
      $this->mgt_conhecimento_vlr_1->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_vlr_1'];
      $this->mgt_conhecimento_marca_1->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_marca_1'];
      $this->mgt_conhecimento_placa_1->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_placa_1'];
      $this->mgt_conhecimento_local_1->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_local_1'];
      $this->mgt_conhecimento_uf_1->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_uf_1'];
      $this->mgt_conhecimento_carga_2->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_carga_2'];
      $this->mgt_conhecimento_qtde_2->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_qtde_2'];
      $this->mgt_conhecimento_especie_2->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_especie_2'];
      $this->mgt_conhecimento_peso_2->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_peso_2'];
      $this->mgt_conhecimento_m_l_2->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_m_l_2'];
      $this->mgt_conhecimento_nota_2->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_nota_2'];
      $this->mgt_conhecimento_vlr_2->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_vlr_2'];
      $this->mgt_conhecimento_marca_2->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_marca_2'];
      $this->mgt_conhecimento_placa_2->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_placa_2'];
      $this->mgt_conhecimento_local_2->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_local_2'];
      $this->mgt_conhecimento_uf_2->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_uf_2'];
      $this->mgt_conhecimento_carga_3->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_carga_3'];
      $this->mgt_conhecimento_qtde_3->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_qtde_3'];
      $this->mgt_conhecimento_especie_3->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_especie_3'];
      $this->mgt_conhecimento_peso_3->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_peso_3'];
      $this->mgt_conhecimento_m_l_3->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_m_l_3'];
      $this->mgt_conhecimento_nota_3->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_nota_3'];
      $this->mgt_conhecimento_vlr_3->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_vlr_3'];
      $this->mgt_conhecimento_marca_3->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_marca_3'];
      $this->mgt_conhecimento_placa_3->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_placa_3'];
      $this->mgt_conhecimento_local_3->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_local_3'];
      $this->mgt_conhecimento_uf_3->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_uf_3'];
      $this->mgt_conhecimento_carga_4->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_carga_4'];
      $this->mgt_conhecimento_qtde_4->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_qtde_4'];
      $this->mgt_conhecimento_especie_4->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_especie_4'];
      $this->mgt_conhecimento_peso_4->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_peso_4'];
      $this->mgt_conhecimento_m_l_4->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_m_l_4'];
      $this->mgt_conhecimento_nota_4->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_nota_4'];
      $this->mgt_conhecimento_vlr_4->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_vlr_4'];
      $this->mgt_conhecimento_marca_4->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_marca_4'];
      $this->mgt_conhecimento_placa_4->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_placa_4'];
      $this->mgt_conhecimento_local_4->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_local_4'];
      $this->mgt_conhecimento_uf_4->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_uf_4'];
      $this->mgt_conhecimento_frete_peso->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_peso'];
      $this->mgt_conhecimento_frete_vlr->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_vlr'];
      $this->mgt_conhecimento_frete_sec_sat->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_sec_sat'];
      $this->mgt_conhecimento_frete_despacho->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_despacho'];
      $this->mgt_conhecimento_frete_pedagio->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_pedagio'];
      $this->mgt_conhecimento_frete_outros->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_outros'];
      $this->mgt_conhecimento_frete_total->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_total'];
      $this->mgt_conhecimento_frete_base->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_base'];
      $this->mgt_conhecimento_frete_aliquota_icms->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_aliquota_icms'];
      $this->mgt_conhecimento_frete_vlr_icms->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_frete_vlr_icms'];
      $this->mgt_conhecimento_coleta->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_coleta'];
      $this->mgt_conhecimento_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_entrega'];
      $this->mgt_conhecimento_observacao->Text = GetConexaoPrincipal()->SQL_MGT_Conhecimentos->Fields['mgt_conhecimento_observacao'];

      $this->MSG_Erro->Caption = "";
   }

   function bt_alterarJSClick($sender, $params)
   {

?>
   //Add your javascript code here

<?php

   }

   function bt_fecharClick($sender, $params)
   {
      $this->limpa_dados();

      //*** Fechar a Janela ***

      redirect('nf_conhecimentos.php');
   }

   function bt_alterarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_conhecimento_data_emissao->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha a Data de Emissao.";
      }
      elseif(trim($this->mgt_conhecimento_natureza_operacao->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha a Natureza de Operacao.";
      }
      elseif(trim($this->mgt_conhecimento_cfop->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o CFOP.";
      }
      elseif(trim($this->mgt_conhecimento_coleta->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha a Coleta.";
      }
      elseif(trim($this->mgt_conhecimento_entrega->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha a Entrega.";
      }
      elseif(trim($this->mgt_conhecimento_frete_total->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o Valor Total.";
      }
      elseif(trim($this->mgt_conhecimento_frete_base->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o Valor da Base.";
      }
      elseif(trim($this->mgt_conhecimento_frete_aliquota_icms->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha a Aliquota do ICMS.";
      }
      elseif(trim($this->mgt_conhecimento_frete_vlr_icms->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o Valor do ICMS.";
      }
      else
      {
         $Comando_SQL = "update mgt_conhecimentos set ";
         $Comando_SQL .= "mgt_conhecimento_data_emissao = '" . inverte_data_dma_to_amd(trim($this->mgt_conhecimento_data_emissao->Text)) . "', ";
         $Comando_SQL .= "mgt_conhecimento_natureza_operacao = '" . trim($this->mgt_conhecimento_natureza_operacao->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_cfop = '" . trim($this->mgt_conhecimento_cfop->Text) . "', ";

         if(trim($this->mgt_conhecimento_frete_pagar->Checked) == true)
         {
            $Comando_SQL .= "mgt_conhecimento_frete_pagar = 'S', ";
         }
         else
         {
            $Comando_SQL .= "mgt_conhecimento_frete_pagar = 'N', ";
         }

         if(trim($this->mgt_conhecimento_frete_pago->Checked) == true)
         {
            $Comando_SQL .= "mgt_conhecimento_frete_pago = 'S', ";
         }
         else
         {
            $Comando_SQL .= "mgt_conhecimento_frete_pago = 'N', ";
         }

         $Comando_SQL .= "mgt_conhecimento_frete_pago_em = '" . inverte_data_dma_to_amd(trim($this->mgt_conhecimento_frete_pago_em->Text)) . "', ";
         $Comando_SQL .= "mgt_conhecimento_remetente_numero = '" . trim($this->mgt_conhecimento_remetente_numero->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_remetente_codigo = '" . trim($this->mgt_conhecimento_remetente_codigo->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_remetente_inscricao_estadual = '" . trim($this->mgt_conhecimento_remetente_inscricao_estadual->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_remetente_nome = '" . trim($this->mgt_conhecimento_remetente_nome->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_remetente_endereco = '" . trim($this->mgt_conhecimento_remetente_endereco->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_remetente_complemento = '" . trim($this->mgt_conhecimento_remetente_complemento->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_remetente_bairro = '" . trim($this->mgt_conhecimento_remetente_bairro->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_remetente_cidade = '" . trim($this->mgt_conhecimento_remetente_cidade->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_remetente_estado = '" . trim($this->mgt_conhecimento_remetente_estado->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_remetente_cep = '" . trim($this->mgt_conhecimento_remetente_cep->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_destinatario_numero = '" . trim($this->mgt_conhecimento_destinatario_numero->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_destinatario_codigo = '" . trim($this->mgt_conhecimento_destinatario_codigo->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_destinatario_inscricao_estadual = '" . trim($this->mgt_conhecimento_destinatario_inscricao_estadual->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_destinatario_nome = '" . trim($this->mgt_conhecimento_destinatario_nome->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_destinatario_endereco = '" . trim($this->mgt_conhecimento_destinatario_endereco->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_destinatario_complemento = '" . trim($this->mgt_conhecimento_destinatario_complemento->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_destinatario_bairro = '" . trim($this->mgt_conhecimento_destinatario_bairro->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_destinatario_cidade = '" . trim($this->mgt_conhecimento_destinatario_cidade->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_destinatario_estado = '" . trim($this->mgt_conhecimento_destinatario_estado->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_destinatario_cep = '" . trim($this->mgt_conhecimento_destinatario_cep->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_carga_1 = '" . trim($this->mgt_conhecimento_carga_1->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_qtde_1 = '" . trim($this->mgt_conhecimento_qtde_1->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_especie_1 = '" . trim($this->mgt_conhecimento_especie_1->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_peso_1 = '" . trim($this->mgt_conhecimento_peso_1->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_m_l_1 = '" . trim($this->mgt_conhecimento_m_l_1->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_nota_1 = '" . trim($this->mgt_conhecimento_nota_1->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_vlr_1 = '" . trim($this->mgt_conhecimento_vlr_1->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_marca_1 = '" . trim($this->mgt_conhecimento_marca_1->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_placa_1 = '" . trim($this->mgt_conhecimento_placa_1->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_local_1 = '" . trim($this->mgt_conhecimento_local_1->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_uf_1 = '" . trim($this->mgt_conhecimento_uf_1->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_carga_2 = '" . trim($this->mgt_conhecimento_carga_2->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_qtde_2 = '" . trim($this->mgt_conhecimento_qtde_2->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_especie_2 = '" . trim($this->mgt_conhecimento_especie_2->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_peso_2 = '" . trim($this->mgt_conhecimento_peso_2->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_m_l_2 = '" . trim($this->mgt_conhecimento_m_l_2->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_nota_2 = '" . trim($this->mgt_conhecimento_nota_2->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_vlr_2 = '" . trim($this->mgt_conhecimento_vlr_2->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_marca_2 = '" . trim($this->mgt_conhecimento_marca_2->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_placa_2 = '" . trim($this->mgt_conhecimento_placa_2->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_local_2 = '" . trim($this->mgt_conhecimento_local_2->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_uf_2 = '" . trim($this->mgt_conhecimento_uf_2->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_carga_3 = '" . trim($this->mgt_conhecimento_carga_3->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_qtde_3 = '" . trim($this->mgt_conhecimento_qtde_3->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_especie_3 = '" . trim($this->mgt_conhecimento_especie_3->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_peso_3 = '" . trim($this->mgt_conhecimento_peso_3->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_m_l_3 = '" . trim($this->mgt_conhecimento_m_l_3->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_nota_3 = '" . trim($this->mgt_conhecimento_nota_3->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_vlr_3 = '" . trim($this->mgt_conhecimento_vlr_3->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_marca_3 = '" . trim($this->mgt_conhecimento_marca_3->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_placa_3 = '" . trim($this->mgt_conhecimento_placa_3->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_local_3 = '" . trim($this->mgt_conhecimento_local_3->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_uf_3 = '" . trim($this->mgt_conhecimento_uf_3->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_carga_4 = '" . trim($this->mgt_conhecimento_carga_4->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_qtde_4 = '" . trim($this->mgt_conhecimento_qtde_4->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_especie_4 = '" . trim($this->mgt_conhecimento_especie_4->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_peso_4 = '" . trim($this->mgt_conhecimento_peso_4->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_m_l_4 = '" . trim($this->mgt_conhecimento_m_l_4->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_nota_4 = '" . trim($this->mgt_conhecimento_nota_4->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_vlr_4 = '" . trim($this->mgt_conhecimento_vlr_4->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_marca_4 = '" . trim($this->mgt_conhecimento_marca_4->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_placa_4 = '" . trim($this->mgt_conhecimento_placa_4->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_local_4 = '" . trim($this->mgt_conhecimento_local_4->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_uf_4 = '" . trim($this->mgt_conhecimento_uf_4->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_frete_peso = '" . trim($this->mgt_conhecimento_frete_peso->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_frete_vlr = '" . trim($this->mgt_conhecimento_frete_vlr->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_frete_sec_sat = '" . trim($this->mgt_conhecimento_frete_sec_sat->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_frete_despacho = '" . trim($this->mgt_conhecimento_frete_despacho->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_frete_pedagio = '" . trim($this->mgt_conhecimento_frete_pedagio->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_frete_outros = '" . trim($this->mgt_conhecimento_frete_outros->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_frete_total = '" . trim($this->mgt_conhecimento_frete_total->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_frete_base = '" . trim($this->mgt_conhecimento_frete_base->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_frete_aliquota_icms = '" . trim($this->mgt_conhecimento_frete_aliquota_icms->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_frete_vlr_icms = '" . trim($this->mgt_conhecimento_frete_vlr_icms->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_coleta = '" . trim($this->mgt_conhecimento_coleta->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_entrega = '" . trim($this->mgt_conhecimento_entrega->Text) . "', ";
         $Comando_SQL .= "mgt_conhecimento_observacao = '" . trim($this->mgt_conhecimento_observacao->Text) . "' ";
         $Comando_SQL .= " Where mgt_conhecimento_numero = " . trim($this->mgt_conhecimento_numero->Text);

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Registra o motivo da alteracao do registro. ***

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
         $Comando_SQL .= "'" . 'Alteracao' . "',";
         $Comando_SQL .= "'" . trim($this->mgt_conhecimento_numero->Text) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Abre a Tela de Emissao do Conhecimento ***

         echo "<script language=\"JavaScript\">";
         echo "window.open('nf_conhecimentos_imp.php?mgt_conhecimento_numero=" . trim($this->mgt_conhecimento_numero->Text) . "','nf_conhecimentos_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo "</script>";
      }

   }

   function nfconhecimentosaltJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

<?php

   }

   function nfconhecimentosaltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfconhecimentosalt;

//Creates the form
$nfconhecimentosalt = new nfconhecimentosalt($application);

//Read from resource file
$nfconhecimentosalt->loadResource(__FILE__);

//Shows the form
$nfconhecimentosalt->show();

?>