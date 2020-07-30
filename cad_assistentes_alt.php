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
class cadassistentesalt extends Page
{
   public $mgt_operacao_cadastro_motivo = null;
   public $Label22 = null;
   public $Label3 = null;
   public $Label21 = null;
   public $Panel2 = null;
   public $Label20 = null;
   public $Panel1 = null;
   public $mgt_assistente_relatorio = null;
   public $mgt_assistente_icms = null;
   public $Estilo_Pagina = null;
   public $mgt_assistente_observacao = null;
   public $mgt_assistente_1_porcentagem = null;
   public $mgt_assistente_email = null;
   public $mgt_assistente_fone_cel = null;
   public $mgt_assistente_fone_res = null;
   public $mgt_assistente_fone_com = null;
   public $mgt_assistente_fone_ramal = null;
   public $mgt_assistente_ddd = null;
   public $mgt_assistente_pais = null;
   public $mgt_assistente_cep = null;
   public $mgt_assistente_estado = null;
   public $mgt_assistente_cidade = null;
   public $mgt_assistente_bairro = null;
   public $mgt_assistente_complemento = null;
   public $mgt_assistente_endereco = null;
   public $mgt_assistente_contato = null;
   public $Label19 = null;
   public $GroupBox7 = null;
   public $GroupBox6 = null;
   public $Label18 = null;
   public $GroupBox5 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $GroupBox4 = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label4 = null;
   public $GroupBox2 = null;
   public $mgt_assistente_nome = null;
   public $mgt_assistente_codigo = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $confirmacao = null;
   public $bt_excluir = null;
   public $bt_alterar = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $Label1 = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function mgt_assistente_observacaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.bt_alterar.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_relatorioJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_observacao.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_icmsJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_relatorio.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_1_porcentagemJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Valores ***

   var campo = document.cadassistentesalt.mgt_assistente_1_porcentagem;
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

   function mgt_assistente_fone_ramalJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numeros ***

   var campo = document.cadassistentesalt.mgt_assistente_fone_ramal
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numeros ***

<?php

   }

   function mgt_assistente_dddJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numeros ***

   var campo = document.cadassistentesalt.mgt_assistente_ddd
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numeros ***

<?php

   }

   function mgt_assistente_cepJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Traco ***

   var campo = document.cadassistentesalt.mgt_assistente_cep
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

   function mgt_assistente_1_porcentagemJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_observacao.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_emailJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_1_porcentagem.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_fone_celJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_email.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_fone_resJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_fone_cel.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_fone_comJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_fone_res.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_fone_ramalJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_fone_com.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_dddJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_fone_ramal.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_paisJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_ddd.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_cepJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_pais.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_estadoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_cep.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_cidadeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_estado.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_bairroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_cidade.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_complementoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_bairro.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_enderecoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_complemento.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_contatoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_endereco.focus();
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
         $Comando_SQL .= "'" . trim($this->mgt_assistente_codigo->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_assistentes ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_assistente_codigo='" . trim($this->mgt_assistente_codigo->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->confirmacao->Top = 520;
         $this->confirmacao->IsVisible = false;

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Assistentes->Close();
         GetConexaoPrincipal()->SQL_MGT_Assistentes->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Assistentes->Open();

         redirect('cad_assistentes.php');
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 520;
      $this->confirmacao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 216;
      $this->confirmacao->IsVisible = true;
   }

   function cadassistentesaltCreate($sender, $params)
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

      $mgt_assistente_codigo = $_REQUEST['mgt_assistente_codigo'];

      $Comando_SQL = "select * from mgt_assistentes where mgt_assistente_codigo = '" . trim($mgt_assistente_codigo) . "' order by mgt_assistente_codigo";

      GetConexaoPrincipal()->SQL_MGT_Assistentes->Close();
      GetConexaoPrincipal()->SQL_MGT_Assistentes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Assistentes->Open();

      $this->MSG_Erro->Caption = "";

      //*** Inicio - Carrega os Estados ***

      $this->mgt_assistente_estado->Clear();
      $this->mgt_assistente_estado->AddItem("AC", null , "AC");
      $this->mgt_assistente_estado->AddItem("AL", null , "AL");
      $this->mgt_assistente_estado->AddItem("AP", null , "AP");
      $this->mgt_assistente_estado->AddItem("AM", null , "AM");
      $this->mgt_assistente_estado->AddItem("BA", null , "BA");
      $this->mgt_assistente_estado->AddItem("CE", null , "CE");
      $this->mgt_assistente_estado->AddItem("DF", null , "DF");
      $this->mgt_assistente_estado->AddItem("ES", null , "ES");
      $this->mgt_assistente_estado->AddItem("GO", null , "GO");
      $this->mgt_assistente_estado->AddItem("MA", null , "MA");
      $this->mgt_assistente_estado->AddItem("MT", null , "MT");
      $this->mgt_assistente_estado->AddItem("MS", null , "MS");
      $this->mgt_assistente_estado->AddItem("MG", null , "MG");
      $this->mgt_assistente_estado->AddItem("PA", null , "PA");
      $this->mgt_assistente_estado->AddItem("PB", null , "PB");
      $this->mgt_assistente_estado->AddItem("PR", null , "PR");
      $this->mgt_assistente_estado->AddItem("PE", null , "PE");
      $this->mgt_assistente_estado->AddItem("PI", null , "PI");
      $this->mgt_assistente_estado->AddItem("RN", null , "RN");
      $this->mgt_assistente_estado->AddItem("RS", null , "RS");
      $this->mgt_assistente_estado->AddItem("RJ", null , "RJ");
      $this->mgt_assistente_estado->AddItem("RO", null , "RO");
      $this->mgt_assistente_estado->AddItem("RR", null , "RR");
      $this->mgt_assistente_estado->AddItem("SC", null , "SC");
      $this->mgt_assistente_estado->AddItem("SP", null , "SP");
      $this->mgt_assistente_estado->AddItem("SE", null , "SE");
      $this->mgt_assistente_estado->AddItem("TO", null , "TO");
      $this->mgt_assistente_estado->AddItem("--", null , "--");

      //*** Final - Carrega os Estados ***

      $this->mgt_assistente_estado->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_estado'];
      $this->mgt_assistente_icms->ItemIndex = ((GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_icms'] == "S") ? 0: 1);
      $this->mgt_assistente_relatorio->ItemIndex = ((GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_relatorio'] == "S") ? 0: 1);

      $this->mgt_assistente_codigo->Text = $mgt_assistente_codigo;
      $this->mgt_assistente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_nome'];
      $this->mgt_assistente_endereco->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_endereco'];
      $this->mgt_assistente_complemento->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_complemento'];
      $this->mgt_assistente_bairro->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_bairro'];
      $this->mgt_assistente_cidade->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_cidade'];
      $this->mgt_assistente_cep->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_cep'];
      $this->mgt_assistente_pais->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_pais'];
      $this->mgt_assistente_contato->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_contato'];
      $this->mgt_assistente_ddd->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_ddd'];
      $this->mgt_assistente_fone_ramal->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_fone_ramal'];
      $this->mgt_assistente_fone_com->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_fone_com'];
      $this->mgt_assistente_fone_res->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_fone_res'];
      $this->mgt_assistente_fone_cel->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_fone_cel'];
      $this->mgt_assistente_email->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_email'];
      $this->mgt_assistente_1_porcentagem->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_1_porcentagem'];
      $this->mgt_assistente_observacao->Text = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_observacao'];
   }

   function mgt_assistente_nomeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_contato.focus();
     return false;
   }

<?php

   }

   function mgt_assistente_codigoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadassistentesalt.mgt_assistente_nome.focus();
     return false;
   }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Assistentes->Close();
         GetConexaoPrincipal()->SQL_MGT_Assistentes->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Assistentes->Open();

         redirect('cad_assistentes.php');
   }

   function bt_alterarClick($sender, $params)
   {
      //*** Inicio - Validacao dos Campos ***

      if(trim($this->mgt_assistente_nome->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Nome.";
      }
      elseif(trim($this->mgt_assistente_endereco->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Logradouro.";
      }
      elseif(trim($this->mgt_assistente_bairro->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Bairro.";
      }
      elseif(trim($this->mgt_assistente_cidade->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Cidade.";
      }
      elseif(trim($this->mgt_assistente_cep->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de CEP.";
      }
      elseif(trim($this->mgt_assistente_1_porcentagem->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Porcentagem.";
      }

      //*** Final - Validacao dos Campos ***

      else
      {
         $Comando_SQL = "UPDATE mgt_assistentes SET ";
         $Comando_SQL .= "mgt_assistente_nome='" . trim($this->mgt_assistente_nome->Text) . "',";
         $Comando_SQL .= "mgt_assistente_endereco='" . trim($this->mgt_assistente_endereco->Text) . "',";
         $Comando_SQL .= "mgt_assistente_complemento='" . trim($this->mgt_assistente_complemento->Text) . "',";
         $Comando_SQL .= "mgt_assistente_bairro='" . trim($this->mgt_assistente_bairro->Text) . "',";
         $Comando_SQL .= "mgt_assistente_cidade='" . trim($this->mgt_assistente_cidade->Text) . "',";
         $Comando_SQL .= "mgt_assistente_estado='" . trim($this->mgt_assistente_estado->ItemIndex) . "',";
         $Comando_SQL .= "mgt_assistente_cep='" . trim($this->mgt_assistente_cep->Text) . "',";
         $Comando_SQL .= "mgt_assistente_pais='" . trim($this->mgt_assistente_pais->Text) . "',";
         $Comando_SQL .= "mgt_assistente_contato='" . trim($this->mgt_assistente_contato->Text) . "',";
         $Comando_SQL .= "mgt_assistente_ddd='" . trim($this->mgt_assistente_ddd->Text) . "',";
         $Comando_SQL .= "mgt_assistente_fone_ramal='" . trim($this->mgt_assistente_fone_ramal->Text) . "',";
         $Comando_SQL .= "mgt_assistente_fone_com='" . trim($this->mgt_assistente_fone_com->Text) . "',";
         $Comando_SQL .= "mgt_assistente_fone_res='" . trim($this->mgt_assistente_fone_res->Text) . "',";
         $Comando_SQL .= "mgt_assistente_fone_cel='" . trim($this->mgt_assistente_fone_cel->Text) . "',";
         $Comando_SQL .= "mgt_assistente_email='" . trim($this->mgt_assistente_email->Text) . "',";
         $Comando_SQL .= "mgt_assistente_1_porcentagem='" . trim($this->mgt_assistente_1_porcentagem->Text) . "',";
         $Comando_SQL .= "mgt_assistente_icms='" . (($this->mgt_assistente_icms->ItemIndex == 0) ? "S": "N") . "',";
         $Comando_SQL .= "mgt_assistente_relatorio='" . (($this->mgt_assistente_relatorio->ItemIndex == 0) ? "S": "N") . "',";
         $Comando_SQL .= "mgt_assistente_observacao='" . trim($this->mgt_assistente_observacao->Text) . "'";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_assistente_codigo='" . trim($this->mgt_assistente_codigo->Text) . "'";

         //echo $Comando_SQL;

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
         $Comando_SQL .= "'" . trim($this->mgt_assistente_codigo->Text) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Assistentes->Close();
         GetConexaoPrincipal()->SQL_MGT_Assistentes->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Assistentes->Open();

         redirect('cad_assistentes.php');
      }

   }

   function cadassistentesaltJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

<?php

   }

   function cadassistentesaltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadassistentesalt;

//Creates the form
$cadassistentesalt = new cadassistentesalt($application);

//Read from resource file
$cadassistentesalt->loadResource(__FILE__);

//Shows the form
$cadassistentesalt->show();

?>