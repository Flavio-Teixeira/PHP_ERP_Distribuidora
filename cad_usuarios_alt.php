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
class cadusuariosalt extends Page
{
   public $mgt_operacao_cadastro_motivo = null;
   public $Label11 = null;
   public $Label3 = null;
   public $Label19 = null;
   public $Panel2 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $confirmacao = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $GroupBox2 = null;
   public $mgt_usuario_senha = null;
   public $Label4 = null;
   public $mgt_usuario_departamento = null;
   public $Label7 = null;
   public $mgt_usuario_nome_completo = null;
   public $Label6 = null;
   public $mgt_usuario_login = null;
   public $Label5 = null;
   public $Estilo_Pagina = null;
   public $bt_excluir = null;
   public $bt_alterar = null;
   public $MSG_Erro = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $area_sistema = null;
   function mgt_usuario_departamentoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadusuariosalt.bt_alterar.focus();
     return false;
   }
<?php

   }

   function mgt_usuario_nome_completoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadusuariosalt.mgt_usuario_departamento.focus();
     return false;
   }
<?php

   }

   function mgt_usuario_senhaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadusuariosalt.mgt_usuario_nome_completo.focus();
     return false;
   }
<?php

   }

   function mgt_usuario_loginJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadusuariosalt.mgt_usuario_senha.focus();
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
         $Comando_SQL .= "'" . trim($this->mgt_usuario_login->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_usuarios ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_usuario_login='" . trim($this->mgt_usuario_login->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->confirmacao->Top = 236;
         $this->confirmacao->IsVisible = false;

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Usuarios->Close();
         GetConexaoPrincipal()->SQL_MGT_Usuarios->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Usuarios->Open();

         redirect('cad_usuarios.php');
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 236;
      $this->confirmacao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 148;
      $this->confirmacao->IsVisible = true;
   }

   function cadusuariosaltCreate($sender, $params)
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

      $mgt_usuario_login = $_REQUEST['mgt_usuario_login'];

      $Comando_SQL = "select * from mgt_usuarios where mgt_usuario_login = '" . trim($mgt_usuario_login) . "'";

      GetConexaoPrincipal()->SQL_MGT_Usuarios->Close();
      GetConexaoPrincipal()->SQL_MGT_Usuarios->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Usuarios->Open();

      $this->mgt_usuario_login->Text = $mgt_usuario_login;
      $this->mgt_usuario_senha->Text = GetConexaoPrincipal()->SQL_MGT_Usuarios->Fields['mgt_usuario_senha'];
      $this->mgt_usuario_nome_completo->Text = GetConexaoPrincipal()->SQL_MGT_Usuarios->Fields['mgt_usuario_nome_completo'];
      $this->mgt_usuario_departamento->Text = GetConexaoPrincipal()->SQL_MGT_Usuarios->Fields['mgt_usuario_departamento'];

      $this->MSG_Erro->Caption = "";
   }

   function mgt_banco_descricaoJSKeyPress($sender, $params)
   {
      if((event . keyCode == 9) || (event . keyCode == 13))
      {
         document . cadusuariosinc . bt_incluir . focus();
         return false;
      }
?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadusuariosalt.bt_alterar.focus();
     return false;
   }

<?php

   }

   function mgt_banco_codigoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadusuariosalt.mgt_banco_descricao.focus();
     return false;
   }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Usuarios->Close();
         GetConexaoPrincipal()->SQL_MGT_Usuarios->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Usuarios->Open();

         redirect('cad_usuarios.php');
   }

   function bt_alterarClick($sender, $params)
   {
      if(trim($this->mgt_usuario_login->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Login.";
      }
      elseif(trim($this->mgt_usuario_senha->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Senha.";
      }
      elseif(trim($this->mgt_usuario_nome_completo->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Nome Completo.";
      }
      elseif(trim($this->mgt_usuario_departamento->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Departamento.";
      }
      else
      {
         $Comando_SQL = "update mgt_usuarios set ";
         $Comando_SQL .= "mgt_usuario_senha='" . trim($this->mgt_usuario_senha->Text) . "' , ";
         $Comando_SQL .= "mgt_usuario_nome_completo='" . trim($this->mgt_usuario_nome_completo->Text) . "' , ";
         $Comando_SQL .= "mgt_usuario_departamento='" . trim($this->mgt_usuario_departamento->Text) . "' where ";
         $Comando_SQL .= "mgt_usuario_login='" . trim($this->mgt_usuario_login->Text) . "'";

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
         $Comando_SQL .= "'" . trim($this->mgt_usuario_login->Text) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Usuarios->Close();
         GetConexaoPrincipal()->SQL_MGT_Usuarios->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Usuarios->Open();

         redirect('cad_usuarios.php');
      }

   }

   function cadusuariosaltJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

<?php

   }

   function cadusuariosaltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadusuariosalt;

//Creates the form
$cadusuariosalt = new cadusuariosalt($application);

//Read from resource file
$cadusuariosalt->loadResource(__FILE__);

//Shows the form
$cadusuariosalt->show();

?>