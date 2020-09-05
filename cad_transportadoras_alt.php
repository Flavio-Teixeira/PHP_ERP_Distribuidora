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
class cadtransportadorasalt extends Page
{
   public $mgt_operacao_cadastro_motivo = null;
   public $Label23 = null;
   public $Label1 = null;
   public $Label22 = null;
   public $Panel2 = null;
   public $Label21 = null;
   public $Panel1 = null;
   public $Label15 = null;
   public $bt_excluir = null;
   public $bt_alterar = null;
   public $confirmacao = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $mgt_transportadora_insc_est = null;
   public $mgt_transportadora_insc_mun = null;
   public $mgt_transportadora_observacao = null;
   public $mgt_transportadora_email = null;
   public $mgt_transportadora_contato = null;
   public $mgt_transportadora_ramal = null;
   public $mgt_transportadora_fone = null;
   public $mgt_transportadora_ddd = null;
   public $mgt_transportadora_pais = null;
   public $mgt_transportadora_cep = null;
   public $mgt_transportadora_estado = null;
   public $mgt_transportadora_cidade = null;
   public $mgt_transportadora_bairro = null;
   public $mgt_transportadora_complemento = null;
   public $mgt_transportadora_endereco = null;
   public $mgt_transportadora_razao_social = null;
   public $mgt_transportadora_cnpj = null;
   public $Label20 = null;
   public $GroupBox4 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $Label14 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $GroupBox2 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $Label11 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $mgt_transportadora_numero = null;
   public $mgt_transportadora_nome = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;

   function cadtransportadorasaltCreate($sender, $params)
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

      $mgt_transportadora_numero = $_REQUEST['mgt_transportadora_numero'];

      $Comando_SQL = "select * from mgt_transportadoras where mgt_transportadora_numero = '" . trim($mgt_transportadora_numero) . "' order by mgt_transportadora_numero";

      GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
      GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

      $this->MSG_Erro->Caption = "";

      //*** Inicio - Carrega os Estados ***

      $this->mgt_transportadora_estado->Clear();
      $this->mgt_transportadora_estado->AddItem("AC", null , "AC");
      $this->mgt_transportadora_estado->AddItem("AL", null , "AL");
      $this->mgt_transportadora_estado->AddItem("AP", null , "AP");
      $this->mgt_transportadora_estado->AddItem("AM", null , "AM");
      $this->mgt_transportadora_estado->AddItem("BA", null , "BA");
      $this->mgt_transportadora_estado->AddItem("CE", null , "CE");
      $this->mgt_transportadora_estado->AddItem("DF", null , "DF");
      $this->mgt_transportadora_estado->AddItem("ES", null , "ES");
      $this->mgt_transportadora_estado->AddItem("GO", null , "GO");
      $this->mgt_transportadora_estado->AddItem("MA", null , "MA");
      $this->mgt_transportadora_estado->AddItem("MT", null , "MT");
      $this->mgt_transportadora_estado->AddItem("MS", null , "MS");
      $this->mgt_transportadora_estado->AddItem("MG", null , "MG");
      $this->mgt_transportadora_estado->AddItem("PA", null , "PA");
      $this->mgt_transportadora_estado->AddItem("PB", null , "PB");
      $this->mgt_transportadora_estado->AddItem("PR", null , "PR");
      $this->mgt_transportadora_estado->AddItem("PE", null , "PE");
      $this->mgt_transportadora_estado->AddItem("PI", null , "PI");
      $this->mgt_transportadora_estado->AddItem("RN", null , "RN");
      $this->mgt_transportadora_estado->AddItem("RS", null , "RS");
      $this->mgt_transportadora_estado->AddItem("RJ", null , "RJ");
      $this->mgt_transportadora_estado->AddItem("RO", null , "RO");
      $this->mgt_transportadora_estado->AddItem("RR", null , "RR");
      $this->mgt_transportadora_estado->AddItem("SC", null , "SC");
      $this->mgt_transportadora_estado->AddItem("SP", null , "SP");
      $this->mgt_transportadora_estado->AddItem("SE", null , "SE");
      $this->mgt_transportadora_estado->AddItem("TO", null , "TO");
      $this->mgt_transportadora_estado->AddItem("--", null , "--");

      //*** Final - Carrega os Estados ***

      $this->mgt_transportadora_cnpj->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_cnpj'];
      $this->mgt_transportadora_nome->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_nome'];
      $this->mgt_transportadora_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_razao_social'];
      $this->mgt_transportadora_endereco->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_endereco'];
      $this->mgt_transportadora_complemento->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_complemento'];
      $this->mgt_transportadora_bairro->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_bairro'];
      $this->mgt_transportadora_cidade->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_cidade'];
      $this->mgt_transportadora_estado->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_estado'];
      $this->mgt_transportadora_cep->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_cep'];
      $this->mgt_transportadora_ddd->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_ddd'];
      $this->mgt_transportadora_fone->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_fone'];
      $this->mgt_transportadora_ramal->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_ramal'];
      $this->mgt_transportadora_contato->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_contato'];
      $this->mgt_transportadora_email->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_email'];
      $this->mgt_transportadora_insc_est->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_insc_est'];
      $this->mgt_transportadora_insc_mun->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_insc_mun'];
      $this->mgt_transportadora_pais->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_pais'];
      $this->mgt_transportadora_observacao->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_observacao'];
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 505;
      $this->confirmacao->IsVisible = false;
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
         $Comando_SQL .= "'" . trim($this->mgt_transportadora_numero->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_transportadoras ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_transportadora_numero = '" . trim($this->mgt_transportadora_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->confirmacao->Top = 505;
         $this->confirmacao->IsVisible = false;

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
         GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

         redirect('cad_transportadoras.php');
      }
   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
         GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

         redirect('cad_transportadoras.php');
   }


   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 217;
      $this->confirmacao->IsVisible = true;
   }

   function bt_alterarClick($sender, $params)
   {
      if(trim($this->mgt_transportadora_nome->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Nome.";
      }
      else
      {
         $Comando_SQL = "UPDATE mgt_transportadoras SET ";
         $Comando_SQL .= "mgt_transportadora_cnpj = '" . trim($this->mgt_transportadora_cnpj->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_nome = '" . trim($this->mgt_transportadora_nome->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_razao_social = '" . trim($this->mgt_transportadora_razao_social->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_endereco = '" . trim($this->mgt_transportadora_endereco->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_complemento = '" . trim($this->mgt_transportadora_complemento->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_bairro = '" . trim($this->mgt_transportadora_bairro->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_cidade = '" . trim($this->mgt_transportadora_cidade->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_estado = '" . trim($this->mgt_transportadora_estado->ItemIndex) . "',";
         $Comando_SQL .= "mgt_transportadora_cep = '" . trim($this->mgt_transportadora_cep->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_ddd = '" . trim($this->mgt_transportadora_ddd->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_fone = '" . trim($this->mgt_transportadora_fone->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_ramal = '" . trim($this->mgt_transportadora_ramal->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_contato = '" . trim($this->mgt_transportadora_contato->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_email = '" . trim($this->mgt_transportadora_email->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_insc_est = '" . trim($this->mgt_transportadora_insc_est->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_insc_mun = '" . trim($this->mgt_transportadora_insc_mun->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_pais ='" . trim($this->mgt_transportadora_pais->Text) . "',";
         $Comando_SQL .= "mgt_transportadora_observacao = '" . trim($this->mgt_transportadora_observacao->Text) . "'";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_transportadora_numero = '" . trim($this->mgt_transportadora_numero->Text) . "'";

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
         $Comando_SQL .= "'" . trim($this->mgt_transportadora_numero->Text) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
         GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

         redirect('cad_transportadoras.php');
      }
   }

   function mgt_transportadora_numeroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_cnpj.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_cnpjJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero, Ponto, Barra e Traco ***

   var campo = document.cadtransportadorasalt.mgt_transportadora_cnpj
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

   function mgt_transportadora_ramalJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadtransportadorasalt.mgt_transportadora_ramal
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

   function mgt_transportadora_dddJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadtransportadorasalt.mgt_transportadora_ddd
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

   function mgt_transportadora_cepJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Traco ***

   var campo = document.cadtransportadorasalt.mgt_transportadora_cep
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

   function mgt_transportadora_observacaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.bt_alterar.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_emailJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_observacao.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_contatoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_email.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_foneJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_contato.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_ramalJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_fone.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_dddJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_ramal.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_paisJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_ddd.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_cepJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_pais.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_estadoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_cep.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_cidadeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_estado.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_bairroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_cidade.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_complementoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_bairro.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_enderecoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_complemento.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_insc_munJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_endereco.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_razao_socialJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_insc_est.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_insc_estJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_insc_mun.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_cnpjJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_nome.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_nomeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadtransportadorasalt.mgt_transportadora_razao_social.focus();
     return false;
   }

<?php

   }

   function bt_incluirClick($sender, $params)
   {
      if(trim($this->mgt_transportadora_nome->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Nome.";
      }
      else
      {
         $Comando_SQL = "select * from mgt_transportadoras where mgt_transportadora_nome = '" . $this->mgt_transportadora_nome->Text . "' order by mgt_transportadora_nome";

         GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
         GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) == 1)
         {
            $Comando_SQL = "insert into mgt_transportadoras(";
            $Comando_SQL .= "mgt_transportadora_cnpj, ";
            $Comando_SQL .= "mgt_transportadora_nome, ";
            $Comando_SQL .= "mgt_transportadora_razao_social, ";
            $Comando_SQL .= "mgt_transportadora_endereco, ";
            $Comando_SQL .= "mgt_transportadora_complemento, ";
            $Comando_SQL .= "mgt_transportadora_bairro, ";
            $Comando_SQL .= "mgt_transportadora_cidade, ";
            $Comando_SQL .= "mgt_transportadora_estado, ";
            $Comando_SQL .= "mgt_transportadora_cep, ";
            $Comando_SQL .= "mgt_transportadora_ddd, ";
            $Comando_SQL .= "mgt_transportadora_fone, ";
            $Comando_SQL .= "mgt_transportadora_ramal, ";
            $Comando_SQL .= "mgt_transportadora_contato, ";
            $Comando_SQL .= "mgt_transportadora_email, ";
            $Comando_SQL .= "mgt_transportadora_insc_est, ";
            $Comando_SQL .= "mgt_transportadora_insc_mun, ";
            $Comando_SQL .= "mgt_transportadora_pais, ";
            $Comando_SQL .= "mgt_transportadora_observacao) ";

            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_cnpj->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_nome->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_razao_social->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_endereco->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_complemento->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_bairro->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_cidade->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_estado->ItemIndex) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_cep->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_ddd->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_fone->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_ramal->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_contato->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_email->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_insc_est->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_insc_mun->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_pais->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_transportadora_observacao->Text) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Restaura a Ultima Selecao Efetuada ***
            GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
            GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $_SESSION['comando_sql_grid'];
            GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

            redirect('cad_transportadoras.php');
         }
         else
         {
            $this->MSG_Erro->Caption = "Este cadastro ja existe.";
         }
      }

   }

   function cadtransportadorasaltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadtransportadorasalt;

//Creates the form
$cadtransportadorasalt = new cadtransportadorasalt($application);

//Read from resource file
$cadtransportadorasalt->loadResource(__FILE__);

//Shows the form
$cadtransportadorasalt->show();

?>