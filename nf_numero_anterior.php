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
class nfnumeroanterior extends Page
{
   public $mgt_numero_nota_anterior_numero_srv = null;
   public $mgt_numero_nota_anterior_data_srv = null;
   public $GroupBox4 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $mgt_numero_nota_anterior_numero_prg = null;
   public $mgt_numero_nota_anterior_data_prg = null;
   public $mgt_numero_nota_anterior_numero = null;
   public $mgt_numero_nota_anterior_data = null;
   public $GroupBox2 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label1 = null;
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
   function mgt_numero_nota_anterior_numero_srvJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.nfnumeroanterior.mgt_numero_nota_anterior_numero_srv
      var digits = "0123456789"
      var campo_temp
      for(var i = 0; i < campo.value.length; i++)
      {
         campo_temp = campo.value.substring(i, i + 1)
         if(digits.indexOf(campo_temp) == - 1)
         {
            campo.value = campo.value.substring(0, i);
            break;
         }
      }

      //*** FINAL - So Numero ***

   <?php

   }

   function mgt_numero_nota_anterior_numero_srvJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfnumeroanterior.bt_incluir.focus();
     return false;
   }

   <?php

   }


   function mgt_numero_nota_anterior_numero_prgJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.nfnumeroanterior.mgt_numero_nota_anterior_numero_prg
      var digits = "0123456789"
      var campo_temp
      for(var i = 0; i < campo.value.length; i++)
      {
         campo_temp = campo.value.substring(i, i + 1)
         if(digits.indexOf(campo_temp) == - 1)
         {
            campo.value = campo.value.substring(0, i);
            break;
         }
      }

<?php

   }

   function mgt_numero_nota_anterior_numero_prgJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfnumeroanterior.bt_incluir.focus();
     return false;
   }

<?php

   }


   function mgt_numero_nota_anterior_numeroJSKeyUp($sender, $params)
   {
?>
   //Add your javascript code here

      //*** INICIO - So Numero ***

      var campo = document.nfnumeroanterior.mgt_numero_nota_anterior_numero
      var digits = "0123456789"
      var campo_temp
      for(var i = 0; i < campo.value.length; i++)
      {
         campo_temp = campo.value.substring(i, i + 1)
         if(digits.indexOf(campo_temp) == - 1)
         {
            campo.value = campo.value.substring(0, i);
            break;
         }
      }

      //*** FINAL - So Numero ***
<?php

   }

   function nfnumeroanteriorCreate($sender, $params)
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

      $Comando_SQL = "select * from mgt_numero_nota_anterior";

      GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Close();
      GetConexaoPrincipal()->SQL_MGT_Numero_Nota->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Numero_Nota->EOF) != 1)
      {
         $this->mgt_numero_nota_anterior_data->Text = inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Fields['mgt_numero_nota_anterior_data']);
         $this->mgt_numero_nota_anterior_numero->Text = GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Fields['mgt_numero_nota_anterior_numero'];

         $this->mgt_numero_nota_anterior_data_prg->Text = inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Fields['mgt_numero_nota_anterior_data_prg']);
         $this->mgt_numero_nota_anterior_numero_prg->Text = GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Fields['mgt_numero_nota_anterior_numero_prg'];

         $this->mgt_numero_nota_anterior_data_srv->Text = inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Fields['mgt_numero_nota_anterior_data_srv']);
         $this->mgt_numero_nota_anterior_numero_srv->Text = GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Fields['mgt_numero_nota_anterior_numero_srv'];
      }
      else
      {
         $this->mgt_numero_nota_anterior_data->Text = date("d/m/Y", time());
         $this->mgt_numero_nota_anterior_numero->Text = '0';

         $this->mgt_numero_nota_anterior_data_prg->Text = date("d/m/Y", time());
         $this->mgt_numero_nota_anterior_numero_prg->Text = '0';

         $this->mgt_numero_nota_anterior_data_srv->Text = date("d/m/Y", time());
         $this->mgt_numero_nota_anterior_numero_srv->Text = '0';
      }

      $this->MSG_Erro->Caption = "";
   }

   function mgt_numero_nota_anterior_numeroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfnumeroanterior.bt_incluir.focus();
     return false;
   }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
         redirect('frame_corpo.php');
   }

   function bt_incluirClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_numero_nota_anterior_data->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Data da Ultima Nota Fiscal.";
      }
      elseif(trim($this->mgt_numero_nota_anterior_data_prg->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Data da Ultima Venda Programada.";
      }
      elseif(trim($this->mgt_numero_nota_anterior_data_srv->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Data da Ultima Nota Fiscal de Servicos.";
      }
      elseif(trim($this->mgt_numero_nota_anterior_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Numero da Ultima Nota Fiscal.";
      }
      elseif(trim($this->mgt_numero_nota_anterior_numero_prg->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Numero da Ultima Venda Programada.";
      }
      elseif(trim($this->mgt_numero_nota_anterior_numero_srv->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Numero da Ultima Nota Fiscal de Servicos.";
      }
      else
      {
         $Comando_SQL = "select * from mgt_numero_nota_anterior";

         GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Close();
         GetConexaoPrincipal()->SQL_MGT_Numero_Nota->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Numero_Nota->EOF) == 1)
         {
            $Comando_SQL = "insert into mgt_numero_nota_anterior(";
            $Comando_SQL .= "mgt_numero_nota_anterior_data, ";
            $Comando_SQL .= "mgt_numero_nota_anterior_numero, ";
            $Comando_SQL .= "mgt_numero_nota_anterior_data_prg, ";
            $Comando_SQL .= "mgt_numero_nota_anterior_numero_prg, ";
            $Comando_SQL .= "mgt_numero_nota_anterior_data_srv, ";
            $Comando_SQL .= "mgt_numero_nota_anterior_numero_srv) ";
            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_numero_nota_anterior_data->Text)) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_numero_nota_anterior_numero->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_numero_nota_anterior_data_prg->Text)) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_numero_nota_anterior_numero_prg->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_numero_nota_anterior_data_srv->Text)) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_numero_nota_anterior_numero_srv->Text) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            redirect('frame_corpo.php');
         }
         else
         {
            $Comando_SQL = "update mgt_numero_nota_anterior set ";
            $Comando_SQL .= "mgt_numero_nota_anterior_data = '" . inverte_data_dma_to_amd(trim($this->mgt_numero_nota_anterior_data->Text)) . "',";
            $Comando_SQL .= "mgt_numero_nota_anterior_numero = '" . trim($this->mgt_numero_nota_anterior_numero->Text) . "',";
            $Comando_SQL .= "mgt_numero_nota_anterior_data_prg = '" . inverte_data_dma_to_amd(trim($this->mgt_numero_nota_anterior_data_prg->Text)) . "',";
            $Comando_SQL .= "mgt_numero_nota_anterior_numero_prg = '" . trim($this->mgt_numero_nota_anterior_numero_prg->Text) . "',";
            $Comando_SQL .= "mgt_numero_nota_anterior_data_srv = '" . inverte_data_dma_to_amd(trim($this->mgt_numero_nota_anterior_data_srv->Text)) . "',";
            $Comando_SQL .= "mgt_numero_nota_anterior_numero_srv = '" . trim($this->mgt_numero_nota_anterior_numero_srv->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            redirect('frame_corpo.php');
         }
      }

   }

   function nfnumeroanteriorJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfnumeroanterior;

//Creates the form
$nfnumeroanterior = new nfnumeroanterior($application);

//Read from resource file
$nfnumeroanterior->loadResource(__FILE__);

//Shows the form
$nfnumeroanterior->show();

?>