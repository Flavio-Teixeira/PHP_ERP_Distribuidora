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
class cadcfopsalt extends Page
{
    public $GroupBox5 = null;
    public $Label23 = null;
    public $Label24 = null;
    public $mgt_cfop_pis_cst = null;
    public $mgt_cfop_cofins_cst = null;
    public $Label25 = null;
    public $Label22 = null;
    public $mgt_cfop_pis_aliquota = null;
    public $mgt_cfop_cofins_aliquota = null;
   public $Label21 = null;
   public $mgt_cfop_reducao_icms = null;
   public $Label20 = null;
   public $GroupBox4 = null;
   public $mgt_cfop_simples_nacional_csosn = null;
   public $mgt_cfop_simples_nacional_aliquota = null;
   public $Label17 = null;
   public $mgt_cfop_simples_nacional = null;
   public $mgt_operacao_cadastro_motivo = null;
   public $Label16 = null;
   public $Label3 = null;
   public $mgt_cfop_cst_natureza = null;
   public $Label15 = null;
   public $Label14 = null;
   public $mgt_cfop_cst = null;
   public $Label13 = null;
   public $Label12 = null;
   public $Label11 = null;
   public $mgt_cfop_codigo_fora_2 = null;
   public $mgt_cfop_codigo_dentro_2 = null;
   public $mgt_cfop_st = null;
   public $GroupBox2 = null;
   public $mgt_cfop_informacoes_complementares = null;
   public $Label10 = null;
   public $GroupBox3 = null;
   public $mgt_cfop_tipo = null;
   public $mgt_cfop_aliquota_3 = null;
   public $Label8 = null;
   public $mgt_cfop_aliquota_2 = null;
   public $Label7 = null;
   public $mgt_cfop_aliquota_1 = null;
   public $Label6 = null;
   public $mgt_cfop_codigo_fora = null;
   public $Label5 = null;
   public $mgt_cfop_codigo_dentro = null;
   public $Label4 = null;
   public $Label9 = null;
   public $mgt_cfop_descricao = null;
   public $Label2 = null;
   public $mgt_cfop_numero = null;
   public $Label1 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $confirmacao = null;
   public $bt_excluir = null;
   public $bt_alterar = null;
   public $MSG_Erro = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $area_sistema = null;
    public $Label26 = null;
    public $mgt_cfop_ipi_cst = null;
   function mgt_cfop_simples_nacional_csosnJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cadcfopsalt.mgt_cfop_simples_nacional_csosn;
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

   function mgt_cfop_simples_nacional_aliquotaJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cadcfopsalt.mgt_cfop_simples_nacional_aliquota;
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

   function mgt_cfop_simples_nacional_csosnJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.mgt_cfop_pis_cst.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_simples_nacional_aliquotaJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.bt_alterar.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_simples_nacionalJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.bt_alterar.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_cstJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cadcfopsalt.mgt_cfop_cst
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

   function mgt_cfop_cstJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.bt_alterar.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_cst_naturezaJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cadcfopsalt.mgt_cfop_cst_natureza
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

   function mgt_cfop_cst_naturezaJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.mgt_cfop_ipi_cst.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_informacoes_complementaresJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui
      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.bt_alterar.focus();
        return false;
      }
      <?php

   }

   function mgt_cfop_aliquota_3JSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cadcfopsalt.mgt_cfop_aliquota_3;
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

   function mgt_cfop_aliquota_2JSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cadcfopsalt.mgt_cfop_aliquota_2;
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

   function mgt_cfop_aliquota_1JSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cadcfopsalt.mgt_cfop_aliquota_1;
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

   function mgt_cfop_codigo_fora_2JSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cadcfopsalt.mgt_cfop_codigo_fora_2
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

   function mgt_cfop_codigo_foraJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cadcfopsalt.mgt_cfop_codigo_fora
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

   function mgt_cfop_codigo_dentro_2JSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cadcfopsalt.mgt_cfop_codigo_dentro_2
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

   function mgt_cfop_codigo_dentroJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cadcfopsalt.mgt_cfop_codigo_dentro
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

   function mgt_cfop_stJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.bt_alterar.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_aliquota_3JSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.mgt_cfop_informacoes_complementares.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_aliquota_2JSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.mgt_cfop_aliquota_3.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_aliquota_1JSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.mgt_cfop_aliquota_2.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_codigo_fora_2JSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.bt_alterar.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_codigo_foraJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.mgt_cfop_aliquota_1.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_codigo_dentro_2JSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.bt_alterar.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_codigo_dentroJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.mgt_cfop_codigo_fora.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_tipoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.mgt_cfop_codigo_dentro.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_descricaoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.mgt_cfop_cst_natureza.focus();
        return false;
      }

      <?php

   }

   function mgt_cfop_numeroJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsalt.mgt_cfop_descricao.focus();
        return false;
      }

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
         $Comando_SQL .= "'" . trim($this->mgt_cfop_numero->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_cfops ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_cfop_numero='" . trim($this->mgt_cfop_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->confirmacao->Top = 411;
         $this->confirmacao->IsVisible = false;

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_CFOP->Close();
         GetConexaoPrincipal()->SQL_MGT_CFOP->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_CFOP->Open();

         redirect('cad_cfops.php');
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 411;
      $this->confirmacao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 84;
      $this->confirmacao->IsVisible = true;
   }

   function cadcfopsaltCreate($sender, $params)
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

      $mgt_cfop_numero = $_REQUEST['mgt_cfop_numero'];

      $Comando_SQL = "select * from mgt_cfops where mgt_cfop_numero = '" . trim($mgt_cfop_numero) . "' order by mgt_cfop_numero";

      GetConexaoPrincipal()->SQL_MGT_CFOP->Close();
      GetConexaoPrincipal()->SQL_MGT_CFOP->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_CFOP->Open();

      $this->mgt_cfop_numero->Text = $mgt_cfop_numero;
      $this->mgt_cfop_descricao->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_descricao'];
      $this->mgt_cfop_tipo->ItemIndex = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_tipo'];
      $this->mgt_cfop_codigo_dentro->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_dentro'];
      $this->mgt_cfop_codigo_dentro_2->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_dentro_2'];
      $this->mgt_cfop_codigo_fora->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_fora'];
      $this->mgt_cfop_codigo_fora_2->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_fora_2'];
      $this->mgt_cfop_aliquota_1->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_aliquota_1'];
      $this->mgt_cfop_aliquota_2->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_aliquota_2'];
      $this->mgt_cfop_aliquota_3->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_aliquota_3'];
      $this->mgt_cfop_informacoes_complementares->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_informacoes_complementares'];
      $this->mgt_cfop_cst->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cst'];
      $this->mgt_cfop_cst_natureza->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cst_natureza'];

      if(trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_st']) == 'S')
      {
         $this->mgt_cfop_st->Checked = true;
      }
      else
      {
         $this->mgt_cfop_st->Checked = false;
      }

      if(trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional']) == 'S')
      {
         $this->mgt_cfop_simples_nacional->Checked = true;
      }
      else
      {
         $this->mgt_cfop_simples_nacional->Checked = false;
      }

      $this->mgt_cfop_simples_nacional_aliquota->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_aliquota'];
      $this->mgt_cfop_simples_nacional_csosn->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_csosn'];
      $this->mgt_cfop_reducao_icms->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_reducao_icms'];

      $this->mgt_cfop_pis_cst->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst'];
      $this->mgt_cfop_pis_aliquota->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_aliquota'];
      $this->mgt_cfop_cofins_cst->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst'];
      $this->mgt_cfop_cofins_aliquota->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_aliquota'];

      $this->mgt_cfop_ipi_cst->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_ipi_cst'];

      $this->MSG_Erro->Caption = "";
   }

   function bt_fecharClick($sender, $params)
   {
      //*** Restaura a Ultima Selecao Efetuada ***
      GetConexaoPrincipal()->SQL_MGT_CFOP->Close();
      GetConexaoPrincipal()->SQL_MGT_CFOP->SQL = $_SESSION['comando_sql_grid'];
      GetConexaoPrincipal()->SQL_MGT_CFOP->Open();

      redirect('cad_cfops.php');
   }

   function bt_alterarClick($sender, $params)
   {
      if(trim($this->mgt_cfop_descricao->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Descricao de Natureza de Operacao.";
      }
      elseif(trim($this->mgt_cfop_codigo_dentro->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de CFOP dentro do Estado.";
      }
      elseif(trim($this->mgt_cfop_codigo_fora->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de CFOP fora do Estado.";
      }
      elseif(trim($this->mgt_cfop_aliquota_1->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Aliquota ICMS dentro de SP.";
      }
      elseif(trim($this->mgt_cfop_aliquota_2->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Aliquota ICMS para os Estados RS, PR, SC, RJ e MG.";
      }
      elseif(trim($this->mgt_cfop_aliquota_3->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Aliquota ICMS outros estados.";
      }
      else
      {
         $Comando_SQL = "update mgt_cfops set ";
         $Comando_SQL .= "mgt_cfop_tipo = '" . trim($this->mgt_cfop_tipo->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cfop_codigo_dentro = '" . trim($this->mgt_cfop_codigo_dentro->Text) . "',";
         $Comando_SQL .= "mgt_cfop_codigo_dentro_2 = '" . trim($this->mgt_cfop_codigo_dentro_2->Text) . "',";
         $Comando_SQL .= "mgt_cfop_codigo_fora = '" . trim($this->mgt_cfop_codigo_fora->Text) . "',";
         $Comando_SQL .= "mgt_cfop_codigo_fora_2 = '" . trim($this->mgt_cfop_codigo_fora_2->Text) . "',";
         $Comando_SQL .= "mgt_cfop_descricao = '" . trim($this->mgt_cfop_descricao->Text) . "',";
         $Comando_SQL .= "mgt_cfop_aliquota_1 = '" . trim($this->mgt_cfop_aliquota_1->Text) . "',";
         $Comando_SQL .= "mgt_cfop_aliquota_2 = '" . trim($this->mgt_cfop_aliquota_2->Text) . "',";
         $Comando_SQL .= "mgt_cfop_aliquota_3 = '" . trim($this->mgt_cfop_aliquota_3->Text) . "',";
         $Comando_SQL .= "mgt_cfop_cst = '" . trim($this->mgt_cfop_cst->Text) . "',";
         $Comando_SQL .= "mgt_cfop_cst_natureza = '" . trim($this->mgt_cfop_cst_natureza->Text) . "',";

         if($this->mgt_cfop_st->Checked == true)
         {
            $Comando_SQL .= "mgt_cfop_st = 'S',";
         }
         else
         {
            $Comando_SQL .= "mgt_cfop_st = 'N',";
         }

         $Comando_SQL .= "mgt_cfop_informacoes_complementares = '" . trim($this->mgt_cfop_informacoes_complementares->Text) . "',";

         if($this->mgt_cfop_simples_nacional->Checked == true)
         {
            $Comando_SQL .= "mgt_cfop_simples_nacional = 'S',";
         }
         else
         {
            $Comando_SQL .= "mgt_cfop_simples_nacional = 'N',";
         }

         $Comando_SQL .= "mgt_cfop_simples_nacional_aliquota = '" . trim($this->mgt_cfop_simples_nacional_aliquota->Text) . "',";
         $Comando_SQL .= "mgt_cfop_simples_nacional_csosn = '" . trim($this->mgt_cfop_simples_nacional_csosn->Text) . "',";
         $Comando_SQL .= "mgt_cfop_reducao_icms = '" . trim($this->mgt_cfop_reducao_icms->Text) . "', ";

         $Comando_SQL .= "mgt_cfop_pis_cst = '" . trim($this->mgt_cfop_pis_cst->Text) . "',";
         $Comando_SQL .= "mgt_cfop_pis_aliquota = '" . trim($this->mgt_cfop_pis_aliquota->Text) . "',";
         $Comando_SQL .= "mgt_cfop_cofins_cst = '" . trim($this->mgt_cfop_cofins_cst->Text) . "',";
         $Comando_SQL .= "mgt_cfop_cofins_aliquota = '" . trim($this->mgt_cfop_cofins_aliquota->Text) . "',";
         $Comando_SQL .= "mgt_cfop_ipi_cst = '" . trim($this->mgt_cfop_ipi_cst->Text) . "' ";

         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_cfop_numero = '" . trim($this->mgt_cfop_numero->Text) . "'";

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
         $Comando_SQL .= "'" . trim($this->mgt_cfop_numero->Text) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_CFOP->Close();
         GetConexaoPrincipal()->SQL_MGT_CFOP->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_CFOP->Open();

         redirect('cad_cfops.php');
      }

   }

   function cadcfopsaltJSSubmit($sender, $params)
   {

      ?>
       //Add your javascript code here

      <?php

   }

   function cadcfopsaltJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

      <?php

   }
   function mgt_cfop_reducao_icmsJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.cadcfopsalt.mgt_cfop_informacoes_complementares.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cfop_reducao_icmsJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valor ***

        var campo = document.cadcfopsalt.mgt_cfop_reducao_icms;
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

        //end
      <?php
   }
    function mgt_cfop_pis_cstJSKeyPress($sender, $params)
    {
        ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.cadcfopsalt.mgt_cfop_pis_aliquota.focus();
           return false;
        }

        //end
        <?php
    }
    function mgt_cfop_cofins_cstJSKeyPress($sender, $params)
    {
        ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.cadcfopsalt.mgt_cfop_cofins_aliquota.focus();
           return false;
        }

        //end
        <?php
    }
    function mgt_cfop_pis_aliquotaJSKeyPress($sender, $params)
    {
        ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.cadcfopsalt.mgt_cfop_cofins_cst.focus();
           return false;
        }

        //end
        <?php
    }
    function mgt_cfop_cofins_aliquotaJSKeyPress($sender, $params)
    {
        ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.cadcfopsalt.bt_alterar.focus();
           return false;
        }

        //end
        <?php
    }
    function mgt_cfop_pis_cstJSKeyUp($sender, $params)
    {
        ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.cadcfopsalt.mgt_cfop_pis_cst
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

        //end
        <?php
    }
    function mgt_cfop_cofins_cstJSKeyUp($sender, $params)
    {
        ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.cadcfopsalt.mgt_cfop_cofins_cst
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

        //end
        <?php
    }
    function mgt_cfop_pis_aliquotaJSKeyUp($sender, $params)
    {
        ?>
        //begin js

        //*** INICIO - So Valor ***

        var campo = document.cadcfopsalt.mgt_cfop_pis_aliquota;
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

        //end
        <?php
    }
    function mgt_cfop_cofins_aliquotaJSKeyUp($sender, $params)
    {
        ?>
        //begin js

        //*** INICIO - So Valor ***

        var campo = document.cadcfopsalt.mgt_cfop_cofins_aliquota;
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

        //end
        <?php
    }
    function mgt_cfop_ipi_cstJSKeyPress($sender, $params)
    {
        ?>
        //begin js

        //Adicione seu codigo javascript aqui

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.cadcfopsalt.mgt_cfop_codigo_dentro.focus();
           return false;
        }

        //end
        <?php
    }
    function mgt_cfop_ipi_cstJSKeyUp($sender, $params)
    {
        ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.cadcfopsalt.mgt_cfop_ipi_cst
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

        //end
        <?php
    }

}

global $application;

global $cadcfopsalt;

//Creates the form
$cadcfopsalt = new cadcfopsalt($application);

//Read from resource file
$cadcfopsalt->loadResource(__FILE__);

//Shows the form
$cadcfopsalt->show();

?>