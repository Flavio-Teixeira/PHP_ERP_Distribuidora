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
class cadivasinc extends Page
{
   public $mgt_iva_aliquota_interna = null;
   public $Label3 = null;
   public $mgt_iva_valor = null;
   public $mgt_iva_ncm = null;
   public $mgt_iva_estado = null;
   public $Label8 = null;
   public $Label19 = null;
   public $Panel2 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $Label1 = null;
   public $bt_incluir = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function mgt_iva_aliquota_internaJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadivasinc.mgt_iva_aliquota_interna;
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

   function mgt_iva_aliquota_internaJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadivasinc.bt_incluir.focus();
     return false;
   }

   <?php

   }

   function mgt_iva_ncmJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadivasinc.mgt_iva_ncm
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

   function mgt_iva_estadoJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadivasinc.mgt_iva_ncm.focus();
     return false;
   }

   <?php

   }


   function mgt_iva_valorJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Valor ***

   var campo = document.cadivasinc.mgt_iva_valor;
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

   function cadivasincCreate($sender, $params)
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

      //*** Inicio - Carrega os Estados ***

      $this->mgt_iva_estado->Clear();
      $this->mgt_iva_estado->AddItem("AC", null , "AC");
      $this->mgt_iva_estado->AddItem("AL", null , "AL");
      $this->mgt_iva_estado->AddItem("AP", null , "AP");
      $this->mgt_iva_estado->AddItem("AM", null , "AM");
      $this->mgt_iva_estado->AddItem("BA", null , "BA");
      $this->mgt_iva_estado->AddItem("CE", null , "CE");
      $this->mgt_iva_estado->AddItem("DF", null , "DF");
      $this->mgt_iva_estado->AddItem("ES", null , "ES");
      $this->mgt_iva_estado->AddItem("GO", null , "GO");
      $this->mgt_iva_estado->AddItem("MA", null , "MA");
      $this->mgt_iva_estado->AddItem("MT", null , "MT");
      $this->mgt_iva_estado->AddItem("MS", null , "MS");
      $this->mgt_iva_estado->AddItem("MG", null , "MG");
      $this->mgt_iva_estado->AddItem("PA", null , "PA");
      $this->mgt_iva_estado->AddItem("PB", null , "PB");
      $this->mgt_iva_estado->AddItem("PR", null , "PR");
      $this->mgt_iva_estado->AddItem("PE", null , "PE");
      $this->mgt_iva_estado->AddItem("PI", null , "PI");
      $this->mgt_iva_estado->AddItem("RN", null , "RN");
      $this->mgt_iva_estado->AddItem("RS", null , "RS");
      $this->mgt_iva_estado->AddItem("RJ", null , "RJ");
      $this->mgt_iva_estado->AddItem("RO", null , "RO");
      $this->mgt_iva_estado->AddItem("RR", null , "RR");
      $this->mgt_iva_estado->AddItem("SC", null , "SC");
      $this->mgt_iva_estado->AddItem("SP", null , "SP");
      $this->mgt_iva_estado->AddItem("SE", null , "SE");
      $this->mgt_iva_estado->AddItem("TO", null , "TO");
      $this->mgt_iva_estado->AddItem("--", null , "--");
      $this->mgt_iva_estado->ItemIndex = "SP";

      $this->mgt_iva_ncm->Text = "";
      $this->mgt_iva_valor->Text = "0.000";

      $this->MSG_Erro->Caption = "";
   }

   function mgt_iva_ncmJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadivasinc.mgt_iva_valor.focus();
     return false;
   }

   <?php

   }

   function mgt_iva_valorJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadivasinc.mgt_iva_aliquota_interna.focus();
     return false;
   }

   <?php

   }


   function bt_incluirJSClick($sender, $params)
   {

?>
   //Add your javascript code here

   <?php

   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_IVA->Close();
         GetConexaoPrincipal()->SQL_MGT_IVA->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_IVA->Open();

         redirect('cad_ivas.php');
   }

   function bt_incluirClick($sender, $params)
   {
      if(trim($this->mgt_iva_estado->ItemIndex) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Estado.";
      }
      elseif(trim($this->mgt_iva_ncm->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de NCM.";
      }
      elseif(trim($this->mgt_iva_valor->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Valor do IVA.";
      }
      elseif(trim($this->mgt_iva_aliquota_interna->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Aliquota Interna.";
      }
      else
      {
         $Comando_SQL = "select * from mgt_ivas where mgt_iva_estado = '" . $this->mgt_iva_estado->ItemIndex . "' and mgt_iva_ncm = '" . $this->mgt_iva_ncm->Text . "' order by mgt_iva_estado, mgt_iva_ncm";

         GetConexaoPrincipal()->SQL_MGT_IVA->Close();
         GetConexaoPrincipal()->SQL_MGT_IVA->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_IVA->Open();

         if((GetConexaoPrincipal()->SQL_MGT_IVA->EOF) == 1)
         {
            $Comando_SQL = "insert into mgt_ivas(";
            $Comando_SQL .= "mgt_iva_estado, ";
            $Comando_SQL .= "mgt_iva_ncm, ";
            $Comando_SQL .= "mgt_iva_valor, ";
            $Comando_SQL .= "mgt_iva_aliquota_interna) ";
            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . trim($this->mgt_iva_estado->ItemIndex) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_iva_ncm->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_iva_valor->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_iva_aliquota_interna->Text) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Restaura a Ultima Selecao Efetuada ***
            GetConexaoPrincipal()->SQL_MGT_IVA->Close();
            GetConexaoPrincipal()->SQL_MGT_IVA->SQL = $_SESSION['comando_sql_grid'];
            GetConexaoPrincipal()->SQL_MGT_IVA->Open();

            redirect('cad_ivas.php');
         }
         else
         {
            $this->MSG_Erro->Caption = "Este cadastro ja existe.";
         }
      }

   }

   function cadivasincJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

       <?php

   }

   function cadivasincJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadivasinc;

//Creates the form
$cadivasinc = new cadivasinc($application);

//Read from resource file
$cadivasinc->loadResource(__FILE__);

//Shows the form
$cadivasinc->show();

?>