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
class cadncmstabelasinc extends Page
{
   public $mgt_classificacao_fiscal_numero_descricao = null;
   public $mgt_classificacao_fiscal_numero_cnae = null;
   public $mgt_classificacao_fiscal_numero_ncm = null;
   public $Label3 = null;
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
   function mgt_classificacao_fiscal_numero_descricaoJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadncmstabelasinc.bt_incluir.focus();
     return false;
   }
   <?php

   }


   function cadncmstabelasincCreate($sender, $params)
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

      $this->mgt_classificacao_fiscal_numero_ncm->Text = "";
      $this->mgt_classificacao_fiscal_numero_cnae->Text = "";
      $this->mgt_classificacao_fiscal_numero_descricao->Text = "";

      $this->MSG_Erro->Caption = "";
   }

   function mgt_classificacao_fiscal_numero_cnaeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadncmstabelasinc.mgt_classificacao_fiscal_numero_descricao.focus();
     return false;
   }

   <?php

   }

   function mgt_classificacao_fiscal_numero_ncmJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadncmstabelasinc.mgt_classificacao_fiscal_numero_cnae.focus();
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
         GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Numeros->Close();
         GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Numeros->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Numeros->Open();

         redirect('cad_ncms_tabelas.php');
   }

   function bt_incluirClick($sender, $params)
   {
      if(trim($this->mgt_classificacao_fiscal_numero_ncm->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de NCM.";
      }
      elseif(trim($this->mgt_classificacao_fiscal_numero_cnae->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de CNAE.";
      }
      elseif(trim($this->mgt_classificacao_fiscal_numero_descricao->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Descricao.";
      }
      else
      {
         $Comando_SQL = "select * from mgt_classificacoes_fiscais_numeros where mgt_classificacao_fiscal_numero_ncm = '" . $this->mgt_classificacao_fiscal_numero_ncm->Text . "' order by mgt_classificacao_fiscal_numero_ncm";

         GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Numeros->Close();
         GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Numeros->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Numeros->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Numeros->EOF) == 1)
         {
            $Comando_SQL = "insert into mgt_classificacoes_fiscais_numeros(";
            $Comando_SQL .= "mgt_classificacao_fiscal_numero_ncm, ";
            $Comando_SQL .= "mgt_classificacao_fiscal_numero_cnae, ";
            $Comando_SQL .= "mgt_classificacao_fiscal_numero_descricao) ";
            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . trim($this->mgt_classificacao_fiscal_numero_ncm->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_classificacao_fiscal_numero_cnae->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_classificacao_fiscal_numero_descricao->Text) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Restaura a Ultima Selecao Efetuada ***
            GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Numeros->Close();
            GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Numeros->SQL = $_SESSION['comando_sql_grid'];
            GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Numeros->Open();

            redirect('cad_ncms_tabelas.php');
         }
         else
         {
            $this->MSG_Erro->Caption = "Este cadastro ja existe.";
         }
      }

   }

   function cadncmstabelasincJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

       <?php

   }

   function cadncmstabelasincJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadncmstabelasinc;

//Creates the form
$cadncmstabelasinc = new cadncmstabelasinc($application);

//Read from resource file
$cadncmstabelasinc->loadResource(__FILE__);

//Shows the form
$cadncmstabelasinc->show();

?>