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
class cadusuariosinc extends Page
{
   public $Label19 = null;
   public $Panel2 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $mgt_usuario_departamento = null;
   public $mgt_usuario_nome_completo = null;
   public $mgt_usuario_senha = null;
   public $mgt_usuario_login = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $Label1 = null;
   public $bt_incluir = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function mgt_usuario_departamentoJSKeyPress($sender, $params)
   {

   ?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadusuariosinc.bt_incluir.focus();
     return false;
   }
   <?php

   }

   function mgt_banco_descricaoJSKeyPress($sender, $params)
   {

   ?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadusuariosinc.bt_incluir.focus();
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
     document.cadusuariosinc.mgt_usuario_nome_completo.focus();
     return false;
   }

   <?php

   }

   function mgt_banco_codigoJSKeyPress($sender, $params)
   {

   ?>
   //Add your javascript code here

   <?php

   }

   function mgt_banco_codigoJSKeyUp($sender, $params)
   {

   ?>
   //Add your javascript code here

   <?php

   }


   function mgt_usuario_loginJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadusuariosinc.mgt_banco_codigo
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

   function cadusuariosincCreate($sender, $params)
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

      //*** Efetua a Limpeza dos Campos ***

      $this->mgt_usuario_login->Text = '';
      $this->mgt_usuario_senha->Text = '';
      $this->mgt_usuario_nome_completo->Text = '';
      $this->mgt_usuario_departamento->Text = '';

      $this->MSG_Erro->Caption = "";
   }

   function mgt_usuario_nome_completoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadusuariosinc.mgt_usuario_departamento.focus();
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
     document.cadusuariosinc.mgt_usuario_senha.focus();
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
         GetConexaoPrincipal()->SQL_MGT_Usuarios->Close();
         GetConexaoPrincipal()->SQL_MGT_Usuarios->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Usuarios->Open();

         redirect('cad_usuarios.php');
   }

   function bt_incluirClick($sender, $params)
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
         $Comando_SQL = "select * from mgt_usuarios where mgt_usuario_login = '" . $this->mgt_usuario_login->Text . "' order by mgt_usuario_login";

         GetConexaoPrincipal()->SQL_MGT_Usuarios->Close();
         GetConexaoPrincipal()->SQL_MGT_Usuarios->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Usuarios->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Usuarios->EOF) == 1)
         {
            $Comando_SQL = "insert into mgt_usuarios(";
            $Comando_SQL .= "mgt_usuario_login, ";
            $Comando_SQL .= "mgt_usuario_senha, ";
            $Comando_SQL .= "mgt_usuario_nome_completo, ";
            $Comando_SQL .= "mgt_usuario_departamento) ";
            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . trim($this->mgt_usuario_login->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_usuario_senha->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_usuario_nome_completo->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_usuario_departamento->Text) . "')";

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
         else
         {
            $this->MSG_Erro->Caption = "Este cadastro ja existe.";
         }
      }

   }

   function cadusuariosincJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

       <?php

   }

   function cadusuariosincJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadusuariosinc;

//Creates the form
$cadusuariosinc = new cadusuariosinc($application);

//Read from resource file
$cadusuariosinc->loadResource(__FILE__);

//Shows the form
$cadusuariosinc->show();

?>