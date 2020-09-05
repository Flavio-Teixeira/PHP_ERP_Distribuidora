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
class reldatasaida extends Page
{
   public $mgt_numero_nfe = null;
   public $bt_registrar = null;
   public $Label2 = null;
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

   function mgt_nota_fiscal_tipo_faturamentoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfctrlsaidas.mgt_nota_fiscal_numero_ini.focus();
     return false;
   }

<?php

   }

   function mgt_numero_nfeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.reldatasaida.bt_registrar.focus();
     return false;
   }

<?php

   }

   function mgt_numero_nfeJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.reldatasaida.mgt_numero_nfe
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

   function bt_registrarClick($sender, $params)
   {
      if((trim($this->mgt_numero_nfe->Text) != ''))
      {
         $this->MSG_Erro->Caption = '';
      }

      if(trim($this->mgt_numero_nfe->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe o Numero da Nota Fiscal';
      }

      if(trim($this->MSG_Erro->Caption) == '')
      {
         $Comando_SQL = "Select mgt_nota_fiscal_data_entrega from mgt_notas_fiscais ";
         $Comando_SQL .= "Where ";
         $Comando_SQL .= "(mgt_nota_fiscal_data_entrega <= '0000-00-00' Or ";
         $Comando_SQL .= "isnull(mgt_nota_fiscal_data_entrega)) And ";
         $Comando_SQL .= "mgt_nota_fiscal_finalidade = 'PRD' And ";
         $Comando_SQL .= "mgt_nota_fiscal_numero = '" . trim($this->mgt_numero_nfe->Text) . "'";

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) == 1)
         {
            $this->MSG_Erro->Caption = "A Nota Fiscal de Nro.: " . trim($this->mgt_numero_nfe->Text) . " ja possui a Data de Saida registrada. Nao e possivel registrar novamente.";
         }
         else
         {
            $Comando_SQL = "Update mgt_notas_fiscais set ";
            $Comando_SQL .= "mgt_nota_fiscal_data_entrega='" . date("Y-m-d", time()) . "' ";
            $Comando_SQL .= "Where ";
            $Comando_SQL .= "mgt_nota_fiscal_finalidade = 'PRD' And ";
            $Comando_SQL .= "mgt_nota_fiscal_numero = '" . trim($this->mgt_numero_nfe->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            $this->MSG_Erro->Caption = "A Data de Saida foi registrada com Sucesso para a Nota Fiscal de Nro.: " . trim($this->mgt_numero_nfe->Text) . ".";
         }
      }

      $this->mgt_numero_nfe->Text = '';
   }

   function reldatasaidaCreate($sender, $params)
   {
      require_once("includes/valida_sessao.inc.php");

      echo "<script language=\"JavaScript\">";
      echo "document.reldatasaida.mgt_numero_nfe.focus();";
      echo "</script>";

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

      $this->MSG_Erro->Caption = "";
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }
   function reldatasaidaJSLoad($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();
   mgt_numero_nfe.focus();

<?php

   }

}

global $application;

global $reldatasaida;

//Creates the form
$reldatasaida = new reldatasaida($application);

//Read from resource file
$reldatasaida->loadResource(__FILE__);

//Shows the form
$reldatasaida->show();

?>