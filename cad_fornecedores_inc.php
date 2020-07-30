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
use_unit("comctrls.inc.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class cadfornecedoresinc extends Page
{
   public $Label19 = null;
   public $Panel2 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $mgt_fornecedor_ultimo_valor = null;
   public $Label12 = null;
   public $GroupBox6 = null;
   public $mgt_fornecedor_site = null;
   public $mgt_fornecedor_email = null;
   public $mgt_fornecedor_fone_fax = null;
   public $mgt_fornecedor_fone_celular = null;
   public $mgt_fornecedor_fone_comercial = null;
   public $mgt_fornecedor_contato = null;
   public $mgt_fornecedor_observacoes = null;
   public $mgt_fornecedor_fax = null;
   public $mgt_fornecedor_fone = null;
   public $mgt_fornecedor_pais = null;
   public $mgt_fornecedor_cep = null;
   public $mgt_fornecedor_estado = null;
   public $mgt_fornecedor_cidade = null;
   public $mgt_fornecedor_bairro = null;
   public $mgt_fornecedor_endereco = null;
   public $mgt_fornecedor_inscricao_municipal = null;
   public $mgt_fornecedor_inscricao_estadual = null;
   public $mgt_fornecedor_razao_social = null;
   public $mgt_fornecedor_nome = null;
   public $mgt_fornecedor_data_ultima_compra = null;
   public $mgt_fornecedor_data_alteracao = null;
   public $mgt_fornecedor_data_inclusao = null;
   public $mgt_fornecedor_area = null;
   public $mgt_fornecedor_codigo = null;
   public $Label27 = null;
   public $Label26 = null;
   public $Label25 = null;
   public $GroupBox5 = null;
   public $Label24 = null;
   public $Label23 = null;
   public $Label22 = null;
   public $Label21 = null;
   public $Label15 = null;
   public $Label1 = null;
   public $Label20 = null;
   public $GroupBox4 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $Label14 = null;
   public $GroupBox2 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label13 = null;
   public $Label11 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $bt_incluir = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;

   function mgt_fornecedor_data_ultima_compraJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_endereco.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_data_alteracaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_data_ultima_compra.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_data_inclusaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_data_alteracao.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_ultimo_valorJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.bt_incluir.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_siteJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_observacoes.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_fone_faxJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_email.focus();
     return false;
   }

<?php

   }


   function mgt_fornecedor_fone_celularJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_fone_fax.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_faxJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_contato.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_foneJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_fax.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_areaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_nome.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_ultimo_valorJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Valores ***

   var campo = document.cadfornecedoresinc.mgt_fornecedor_ultimo_valor;
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

   //*** FINAL - So Valores ***

<?php

   }

   function mgt_fornecedor_data_ultima_compraJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Barra ***

   var campo = document.cadfornecedoresinc.mgt_fornecedor_data_ultima_compra
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Barra ***

<?php

   }

   function mgt_fornecedor_data_alteracaoJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Barra ***

   var campo = document.cadfornecedoresinc.mgt_fornecedor_data_alteracao
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Barra ***

<?php

   }

   function mgt_fornecedor_data_inclusaoJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Barra ***

   var campo = document.cadfornecedoresinc.mgt_fornecedor_data_inclusao
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Barra ***

<?php

   }

   function mgt_fornecedor_codigoJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero, Ponto, Barra e Traco ***

   var campo = document.cadfornecedoresinc.mgt_fornecedor_cnpj
   var digits="0123456789./-"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero, Ponto, Barra e Traco ***

<?php

   }

   function mgt_fornecedor_ramalJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadfornecedoresinc.mgt_fornecedor_ramal
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

   function mgt_fornecedor_dddJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadfornecedoresinc.mgt_fornecedor_ddd
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

   function mgt_fornecedor_cepJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Traco ***

   var campo = document.cadfornecedoresinc.mgt_fornecedor_cep
   var digits="0123456789-"
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

   function mgt_fornecedor_observacoesJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_ultimo_valor.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_emailJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_site.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_contatoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_fone_comercial.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_fone_comercialJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_fone_celular.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_ramalJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_fone.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_dddJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_ramal.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_paisJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_fone.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_cepJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_pais.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_estadoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_cep.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_cidadeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_estado.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_bairroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_cidade.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_complementoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_bairro.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_enderecoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_bairro.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_inscricao_municipalJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_data_inclusao.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_razao_socialJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_inscricao_estadual.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_inscricao_estadualJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_inscricao_municipal.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_codigoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_area.focus();
     return false;
   }

<?php

   }

   function cadfornecedoresincCreate($sender, $params)
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

      $this->MSG_Erro->Caption = "";

      //*** Inicio - Carrega os Estados ***

      $this->mgt_fornecedor_estado->Clear();
      $this->mgt_fornecedor_estado->AddItem("AC", null , "AC");
      $this->mgt_fornecedor_estado->AddItem("AL", null , "AL");
      $this->mgt_fornecedor_estado->AddItem("AP", null , "AP");
      $this->mgt_fornecedor_estado->AddItem("AM", null , "AM");
      $this->mgt_fornecedor_estado->AddItem("BA", null , "BA");
      $this->mgt_fornecedor_estado->AddItem("CE", null , "CE");
      $this->mgt_fornecedor_estado->AddItem("DF", null , "DF");
      $this->mgt_fornecedor_estado->AddItem("ES", null , "ES");
      $this->mgt_fornecedor_estado->AddItem("GO", null , "GO");
      $this->mgt_fornecedor_estado->AddItem("MA", null , "MA");
      $this->mgt_fornecedor_estado->AddItem("MT", null , "MT");
      $this->mgt_fornecedor_estado->AddItem("MS", null , "MS");
      $this->mgt_fornecedor_estado->AddItem("MG", null , "MG");
      $this->mgt_fornecedor_estado->AddItem("PA", null , "PA");
      $this->mgt_fornecedor_estado->AddItem("PB", null , "PB");
      $this->mgt_fornecedor_estado->AddItem("PR", null , "PR");
      $this->mgt_fornecedor_estado->AddItem("PE", null , "PE");
      $this->mgt_fornecedor_estado->AddItem("PI", null , "PI");
      $this->mgt_fornecedor_estado->AddItem("RN", null , "RN");
      $this->mgt_fornecedor_estado->AddItem("RS", null , "RS");
      $this->mgt_fornecedor_estado->AddItem("RJ", null , "RJ");
      $this->mgt_fornecedor_estado->AddItem("RO", null , "RO");
      $this->mgt_fornecedor_estado->AddItem("RR", null , "RR");
      $this->mgt_fornecedor_estado->AddItem("SC", null , "SC");
      $this->mgt_fornecedor_estado->AddItem("SP", null , "SP");
      $this->mgt_fornecedor_estado->AddItem("SE", null , "SE");
      $this->mgt_fornecedor_estado->AddItem("TO", null , "TO");
      $this->mgt_fornecedor_estado->AddItem("--", null , "--");
      $this->mgt_fornecedor_estado->ItemIndex = "SP";

      //*** Final - Carrega os Estados ***

      $this->mgt_fornecedor_data_alteracao->Text = date("d/m/Y", time());
      $this->mgt_fornecedor_data_inclusao->Text = date("d/m/Y", time());
      $this->mgt_fornecedor_data_ultima_compra->Text = date("d/m/Y", time());

      //*** Efetua a Limpeza dos Campos ***

      $this->mgt_fornecedor_codigo->Text = "";
      $this->mgt_fornecedor_nome->Text = "";
      $this->mgt_fornecedor_razao_social->Text = "";
      $this->mgt_fornecedor_inscricao_municipal->Text = "";
      $this->mgt_fornecedor_inscricao_estadual->Text = "";
      $this->mgt_fornecedor_endereco->Text = "";
      $this->mgt_fornecedor_bairro->Text = "";
      $this->mgt_fornecedor_cidade->Text = "";
      $this->mgt_fornecedor_cep->Text = "";
      $this->mgt_fornecedor_contato->Text = "";
      $this->mgt_fornecedor_fone_comercial->Text = "";
      $this->mgt_fornecedor_fone_celular->Text = "";
      $this->mgt_fornecedor_fone_fax->Text = "";
      $this->mgt_fornecedor_ultimo_valor->Text = "";
      $this->mgt_fornecedor_observacoes->Text = "";
      $this->mgt_fornecedor_pais->Text = "";
      $this->mgt_fornecedor_email->Text = "";
      $this->mgt_fornecedor_site->Text = "";
      $this->mgt_fornecedor_fone->Text = "";
      $this->mgt_fornecedor_fax->Text = "";
   }

   function mgt_fornecedor_nomeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfornecedoresinc.mgt_fornecedor_razao_social.focus();
     return false;
   }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
         GetConexaoPrincipal()->SQL_MGT_Fornecedores->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Fornecedores->Open();

         redirect('cad_fornecedores.php');
   }

   function bt_incluirClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_fornecedor_nome->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Nome.";
      }
      else
      {
         $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_nome = '" . $this->mgt_fornecedor_nome->Text . "' order by mgt_fornecedor_nome";

         GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
         GetConexaoPrincipal()->SQL_MGT_Fornecedores->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Fornecedores->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Fornecedores->EOF) == 1)
         {
            if(trim($this->mgt_fornecedor_ultimo_valor->Text) == '')
            {
               $this->mgt_fornecedor_ultimo_valor->Text = '0';
            }

            $Comando_SQL = "insert into mgt_fornecedores(";
            $Comando_SQL .= "mgt_fornecedor_codigo, ";
            $Comando_SQL .= "mgt_fornecedor_nome, ";
            $Comando_SQL .= "mgt_fornecedor_razao_social, ";
            $Comando_SQL .= "mgt_fornecedor_inscricao_municipal, ";
            $Comando_SQL .= "mgt_fornecedor_inscricao_estadual, ";
            $Comando_SQL .= "mgt_fornecedor_endereco, ";
            $Comando_SQL .= "mgt_fornecedor_bairro, ";
            $Comando_SQL .= "mgt_fornecedor_cidade, ";
            $Comando_SQL .= "mgt_fornecedor_estado, ";
            $Comando_SQL .= "mgt_fornecedor_cep, ";
            $Comando_SQL .= "mgt_fornecedor_contato, ";
            $Comando_SQL .= "mgt_fornecedor_fone_comercial, ";
            $Comando_SQL .= "mgt_fornecedor_fone_celular, ";
            $Comando_SQL .= "mgt_fornecedor_fone_fax, ";
            $Comando_SQL .= "mgt_fornecedor_data_inclusao, ";
            $Comando_SQL .= "mgt_fornecedor_data_alteracao, ";
            $Comando_SQL .= "mgt_fornecedor_data_ultima_compra, ";
            $Comando_SQL .= "mgt_fornecedor_ultimo_valor, ";
            $Comando_SQL .= "mgt_fornecedor_observacoes, ";
            $Comando_SQL .= "mgt_fornecedor_pais, ";
            $Comando_SQL .= "mgt_fornecedor_email, ";
            $Comando_SQL .= "mgt_fornecedor_site, ";
            $Comando_SQL .= "mgt_fornecedor_fone, ";
            $Comando_SQL .= "mgt_fornecedor_fax, ";
            $Comando_SQL .= "mgt_fornecedor_area) ";
            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_codigo->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_nome->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_razao_social->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_inscricao_municipal->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_inscricao_estadual->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_endereco->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_bairro->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_cidade->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_estado->ItemIndex) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_cep->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_contato->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_fone_comercial->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_fone_celular->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_fone_fax->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_fornecedor_data_inclusao->Text)) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_fornecedor_data_alteracao->Text)) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_fornecedor_data_ultima_compra->Text)) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_ultimo_valor->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_observacoes->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_pais->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_email->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_site->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_fone->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_fax->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_fornecedor_area->ItemIndex) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Restaura a Ultima Selecao Efetuada ***
            GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
            GetConexaoPrincipal()->SQL_MGT_Fornecedores->SQL = $_SESSION['comando_sql_grid'];
            GetConexaoPrincipal()->SQL_MGT_Fornecedores->Open();

            redirect('cad_fornecedores.php');
         }
         else
         {
            $this->MSG_Erro->Caption = "Este cadastro ja existe.";
         }
      }

   }

   function cadfornecedoresincJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadfornecedoresinc;

//Creates the form
$cadfornecedoresinc = new cadfornecedoresinc($application);

//Read from resource file
$cadfornecedoresinc->loadResource(__FILE__);

//Shows the form
$cadfornecedoresinc->show();

?>