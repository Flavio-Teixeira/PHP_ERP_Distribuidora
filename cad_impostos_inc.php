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
class cadimpostosinc extends Page
{
   public $Label19 = null;
   public $Panel2 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $mgt_imposto_taxa_porcentagem = null;
   public $mgt_imposto_taxa_tipo = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $Label1 = null;
   public $bt_incluir = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;

   function mgt_imposto_taxa_porcentagemJSKeyUp($sender, $params)
   {
?>
   //Add your javascript code here
      //*** INICIO - So Valores ***

      var campo = document . cadimpostosinc . mgt_imposto_taxa_porcentagem
      var digits = "0123456789."
      var campo_temp
      for(var i = 0; i < campo . value . length; i++)
      {
         campo_temp = campo . value . substring(i, i + 1)
         if(digits . indexOf(campo_temp) == - 1)
         {
            campo . value = campo . value . substring(0, i);
            break;
         }
      }

      //*** FINAL - So Valores ***
   <?php

   }


   function mgt_imposto_taxa_tipoJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadimpostosinc.mgt_banco_codigo
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

   function cadimpostosincCreate($sender, $params)
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

      $mgt_imposto_taxa_tipo = $_REQUEST['mgt_imposto_taxa_tipo'];

      $Comando_SQL = "select * from mgt_impostos_taxas where mgt_imposto_taxa_tipo = '" . trim($mgt_imposto_taxa_tipo) . "'";

      GetConexaoPrincipal()->SQL_MGT_Impostos->Close();
      GetConexaoPrincipal()->SQL_MGT_Impostos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Impostos->Open();

      $this->mgt_imposto_taxa_tipo->Text = $mgt_imposto_taxa_tipo;
      $this->mgt_imposto_taxa_porcentagem->Text = GetConexaoPrincipal()->SQL_MGT_Impostos->Fields['mgt_imposto_taxa_porcentagem'];

      $this->MSG_Erro->Caption = "";
   }

   function mgt_imposto_taxa_porcentagemJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadimpostosinc.bt_incluir.focus();
     return false;
   }

   <?php

   }

   function mgt_imposto_taxa_tipoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadimpostosinc.mgt_imposto_taxa_porcentagem.focus();
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
         redirect('frame_corpo.php');
   }

   function bt_incluirClick($sender, $params)
   {
      if(trim($this->mgt_imposto_taxa_tipo->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Imposto.";
      }
      elseif(trim($this->mgt_imposto_taxa_porcentagem->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Porcentagem.";
      }
      else
      {
         $Comando_SQL = "select * from mgt_impostos_taxas where mgt_imposto_taxa_tipo = '" . $this->mgt_imposto_taxa_tipo->Text . "'";

         GetConexaoPrincipal()->SQL_MGT_Impostos->Close();
         GetConexaoPrincipal()->SQL_MGT_Impostos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Impostos->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Impostos->EOF) == 1)
         {
            $Comando_SQL = "insert into mgt_impostos_taxas(";
            $Comando_SQL .= "mgt_imposto_taxa_tipo, ";
            $Comando_SQL .= "mgt_imposto_taxa_porcentagem) ";
            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . trim($this->mgt_imposto_taxa_tipo->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_imposto_taxa_porcentagem->Text) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            redirect('frame_corpo.php');
         }
         else
         {
            $Comando_SQL = "update mgt_impostos_taxas set ";
            $Comando_SQL .= "mgt_imposto_taxa_porcentagem='" . trim($this->mgt_imposto_taxa_porcentagem->Text) . "' where ";
            $Comando_SQL .= "mgt_imposto_taxa_tipo='" . trim($this->mgt_imposto_taxa_tipo->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            redirect('frame_corpo.php');
         }
      }

   }

   function cadimpostosincJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

       <?php

   }

   function cadimpostosincJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadimpostosinc;

//Creates the form
$cadimpostosinc = new cadimpostosinc($application);

//Read from resource file
$cadimpostosinc->loadResource(__FILE__);

//Shows the form
$cadimpostosinc->show();

?>