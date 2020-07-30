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
use_unit("qooxdoo/comctrls.inc.php");
use_unit("qooxdoo/dbgrids.inc.php");
use_unit("notifybar/notifybar.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class cadcfopsinc extends Page
{
    public $Label26 = null;
    public $mgt_cfop_ipi_cst = null;
    public $mgt_cfop_cofins_aliquota = null;
    public $mgt_cfop_pis_aliquota = null;
    public $Label22 = null;
    public $Label21 = null;
    public $mgt_cfop_cofins_cst = null;
    public $mgt_cfop_pis_cst = null;
    public $Label20 = null;
    public $Label17 = null;
    public $GroupBox5 = null;
    public $mgt_cfop_reducao_icms = null;
    public $Label16 = null;
    public $Label10 = null;
    public $Label9 = null;
   public $mgt_cfop_simples_nacional_csosn = null;
   public $mgt_cfop_simples_nacional_aliquota = null;
   public $mgt_cfop_simples_nacional = null;
   public $GroupBox4 = null;
   public $Label14 = null;
   public $Label12 = null;
   public $Label11 = null;
   public $mgt_cfop_cst = null;
   public $Label13 = null;
   public $mgt_cfop_codigo_fora_2 = null;
   public $mgt_cfop_codigo_dentro_2 = null;
   public $mgt_cfop_st = null;
   public $GroupBox2 = null;
   public $mgt_cfop_cst_natureza = null;
   public $Label15 = null;
   public $mgt_cfop_informacoes_complementares = null;
   public $Label1 = null;
   public $mgt_cfop_aliquota_3 = null;
   public $mgt_cfop_aliquota_2 = null;
   public $mgt_cfop_aliquota_1 = null;
   public $mgt_cfop_descricao = null;
   public $mgt_cfop_codigo_fora = null;
   public $mgt_cfop_codigo_dentro = null;
   public $mgt_cfop_tipo = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label19 = null;
   public $Panel2 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $bt_incluir = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function mgt_cfop_simples_nacional_csosnJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cadcfopsinc.mgt_cfop_simples_nacional_csosn;
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

      var campo = document.cadcfopsinc.mgt_cfop_simples_nacional_aliquota;
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
        document.cadcfopsinc.mgt_cfop_pis_cst.focus();
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
        document.cadcfopsinc.bt_incluir.focus();
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
        document.cadcfopsinc.bt_incluir.focus();
        return false;
      }

   <?php

   }


   function mgt_cfop_cstJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cadcfopsinc.mgt_cfop_cst
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
        document.cadcfopsinc.bt_incluir.focus();
        return false;
      }

   <?php

   }

   function mgt_cfop_cst_naturezaJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cadcfopsinc.mgt_cfop_cst_natureza
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
        document.cadcfopsinc.mgt_cfop_ipi_cst.focus();
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
      document.cadcfopsinc.bt_incluir.focus();
      return false;
   }

   <?php

   }


   function mgt_cfop_aliquota_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.cadcfopsinc.mgt_cfop_aliquota_3;
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

      var campo = document.cadcfopsinc.mgt_cfop_aliquota_2;
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

      var campo = document.cadcfopsinc.mgt_cfop_aliquota_1;
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

      var campo = document.cadcfopsinc.mgt_cfop_codigo_fora_2
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

      var campo = document.cadcfopsinc.mgt_cfop_codigo_fora
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

      var campo = document.cadcfopsinc.mgt_cfop_codigo_dentro_2
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

      var campo = document.cadcfopsinc.mgt_cfop_codigo_dentro
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

   function mgt_cfop_aliquota_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsinc.mgt_cfop_informacoes_complementares.focus();
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
        document.cadcfopsinc.mgt_cfop_aliquota_3.focus();
        return false;
      }

<?php

   }

   function mgt_cfop_stJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsinc.bt_incluir.focus();
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
        document.cadcfopsinc.mgt_cfop_aliquota_2.focus();
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
        document.cadcfopsinc.bt_incluir.focus();
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
        document.cadcfopsinc.mgt_cfop_aliquota_1.focus();
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
        document.cadcfopsinc.bt_incluir.focus();
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
        document.cadcfopsinc.mgt_cfop_codigo_fora.focus();
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
        document.cadcfopsinc.mgt_cfop_codigo_dentro.focus();
        return false;
      }

<?php

   }

   function cadcfopsincCreate($sender, $params)
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
   }

   function mgt_cfop_descricaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cadcfopsinc.mgt_cfop_tipo.focus();
        return false;
      }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_CFOP->Close();
         GetConexaoPrincipal()->SQL_MGT_CFOP->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_CFOP->Open();

         redirect('cad_cfops.php');
   }

   function bt_incluirClick($sender, $params)
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
         $Comando_SQL = "insert into mgt_cfops(";
         $Comando_SQL .= "mgt_cfop_tipo, ";
         $Comando_SQL .= "mgt_cfop_codigo_dentro, ";
         $Comando_SQL .= "mgt_cfop_codigo_dentro_2, ";
         $Comando_SQL .= "mgt_cfop_codigo_fora, ";
         $Comando_SQL .= "mgt_cfop_codigo_fora_2, ";
         $Comando_SQL .= "mgt_cfop_descricao, ";
         $Comando_SQL .= "mgt_cfop_aliquota_1, ";
         $Comando_SQL .= "mgt_cfop_aliquota_2, ";
         $Comando_SQL .= "mgt_cfop_aliquota_3, ";
         $Comando_SQL .= "mgt_cfop_st, ";
         $Comando_SQL .= "mgt_cfop_informacoes_complementares, ";
         $Comando_SQL .= "mgt_cfop_cst_natureza, ";
         $Comando_SQL .= "mgt_cfop_cst, ";
         $Comando_SQL .= "mgt_cfop_simples_nacional, ";
         $Comando_SQL .= "mgt_cfop_simples_nacional_aliquota, ";
         $Comando_SQL .= "mgt_cfop_simples_nacional_csosn, ";
         $Comando_SQL .= "mgt_cfop_reducao_icms, ";
         $Comando_SQL .= "mgt_cfop_pis_cst, ";
         $Comando_SQL .= "mgt_cfop_pis_aliquota, ";
         $Comando_SQL .= "mgt_cfop_cofins_cst, ";
         $Comando_SQL .= "mgt_cfop_cofins_aliquota, ";
         $Comando_SQL .= "mgt_cfop_ipi_cst) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_tipo->ItemIndex) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_codigo_dentro->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_codigo_dentro_2->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_codigo_fora->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_codigo_fora_2->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_descricao->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_aliquota_1->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_aliquota_2->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_aliquota_3->Text) . "',";

         if($this->mgt_cfop_st->Checked == true)
         {
            $Comando_SQL .= "'S',";
         }
         else
         {
            $Comando_SQL .= "'N',";
         }

         $Comando_SQL .= "'" . trim($this->mgt_cfop_informacoes_complementares->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_cst_natureza->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_cst->Text) . "',";

         if($this->mgt_cfop_simples_nacional->Checked == true)
         {
            $Comando_SQL .= "'S',";
         }
         else
         {
            $Comando_SQL .= "'N',";
         }

         $Comando_SQL .= "'" . trim($this->mgt_cfop_simples_nacional_aliquota->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_simples_nacional_csosn->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_reducao_icms->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_pis_cst->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_pis_aliquota->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_cofins_cst->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_cofins_aliquota->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cfop_ipi_cst->Text) . "')";

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

   function cadcfopsincJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

<?php

   }

   function cadcfopsincJSLoad($sender, $params)
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
           document.cadcfopsinc.mgt_cfop_informacoes_complementares.focus();
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

        var campo = document.cadcfopsinc.mgt_cfop_reducao_icms;
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
           document.cadcfopsinc.mgt_cfop_pis_aliquota.focus();
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
           document.cadcfopsinc.mgt_cfop_cofins_cst.focus();
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
           document.cadcfopsinc.mgt_cfop_cofins_aliquota.focus();
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
           document.cadcfopsinc.bt_incluir.focus();
           return false;
        }

        //end
        <?php
    }
    function mgt_cfop_pis_aliquotaJSKeyUp($sender, $params)
    {
        ?>
        //begin js

        //*** INICIO - So Valor ***

        var campo = document.cadcfopsinc.mgt_cfop_pis_aliquota;
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

        var campo = document.cadcfopsinc.mgt_cfop_cofins_aliquota;
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
    function mgt_cfop_pis_cstJSKeyUp($sender, $params)
    {
        ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.cadcfopsinc.mgt_cfop_pis_cst
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

        var campo = document.cadcfopsinc.mgt_cfop_cofins_cst
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
    function mgt_cfop_ipi_cstJSKeyPress($sender, $params)
    {
        ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.cadcfopsinc.mgt_cfop_codigo_dentro.focus();
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

        var campo = document.cadcfopsinc.mgt_cfop_ipi_cst
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

global $cadcfopsinc;

//Creates the form
$cadcfopsinc = new cadcfopsinc($application);

//Read from resource file
$cadcfopsinc->loadResource(__FILE__);

//Shows the form
$cadcfopsinc->show();

?>