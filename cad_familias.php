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
use_unit("dbgrids.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class cadfamilias extends Page
{
   public $Label5 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label1 = null;
   public $abrir_cadastro = null;
   public $bt_cadastro = null;
   public $registros = null;
   public $bt_incluir = null;
   public $bt_fechar = null;
   public $bt_buscar = null;
   public $opcao_busca = null;
   public $dados_busca = null;
   public $area_sistema = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label2 = null;
   public $GroupBox3 = null;
   public $GroupBox2 = null;
   public $GroupBox1 = null;
   function abrir_cadastroJSKeyPress($sender, $params)
   {

   ?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfamilias.bt_cadastro.focus();
     return false;
   }

   <?php

   }

   function opcao_buscaJSKeyPress($sender, $params)
   {

   ?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfamilias.bt_buscar.focus();
     return false;
   }

   <?php

   }

   function dados_buscaJSKeyPress($sender, $params)
   {

   ?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadfamilias.opcao_busca.focus();
     return false;
   }

   <?php

   }

   function bt_cadastroClick($sender, $params)
   {
      if(trim($this->abrir_cadastro->Text) == "")
      {
         $this->MSG_Erro->Caption = "O Campo de Codigo deve ser preenchido.";
      }
      else
      {
         $Comando_SQL = "select * from mgt_familias_produtos where mgt_familia_produto_codigo = '" . $this->abrir_cadastro->Text . "' order by mgt_familia_produto_codigo";

         GetConexaoPrincipal()->SQL_MGT_Familias->Close();
         GetConexaoPrincipal()->SQL_MGT_Familias->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Familias->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Familias->EOF) == 1)
         {
            $this->MSG_Erro->Caption = "O Cadastro Nao foi encontrado.";
         }
         else
         {
            redirect('cad_familias_alt.php?mgt_familia_produto_codigo=' . $this->abrir_cadastro->Text );
         }
      }
   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Add your javascript code here

   //*** Obtem o Registro Clicado ***

   document.cadfamilias.abrir_cadastro.value = registros.getTableModel().getValue(0, registros.getFocusedRow());

   <?php

   }

   function bt_incluirClick($sender, $params)
   {
         redirect('cad_familias_inc.php');
   }

   function bt_buscarClick($sender, $params)
   {
      if(trim($this->dados_busca->Text) == "")
      {
         $Comando_SQL = "select * from mgt_familias_produtos order by mgt_familia_produto_codigo";
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL = "select * from mgt_familias_produtos where mgt_familia_produto_codigo = '" . trim($this->dados_busca->Text) . "' order by mgt_familia_produto_codigo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Descricao")
         {
            $Comando_SQL = "select * from mgt_familias_produtos where mgt_familia_produto_descricao like '%" . trim($this->dados_busca->Text) . "%' order by mgt_familia_produto_codigo";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Familias->Close();
      GetConexaoPrincipal()->SQL_MGT_Familias->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Familias->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Familias->SQL;
   }

   function cadfamiliasCreate($sender, $params)
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

      GetConexaoPrincipal()->SQL_MGT_Familias->Close();
      GetConexaoPrincipal()->SQL_MGT_Familias->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Familias->SQL;
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function cadfamiliasJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadfamilias;

//Creates the form
$cadfamilias = new cadfamilias($application);

//Read from resource file
$cadfamilias->loadResource(__FILE__);

//Shows the form
$cadfamilias->show();

?>