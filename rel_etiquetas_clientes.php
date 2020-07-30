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
class reletiquetasclientes extends Page
{
   public $bt_fechar = null;
   public $GroupBox3 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $bt_imprimir = null;
   public $Estilo_Pagina = null;
   public $registros = null;
   public $bt_buscar = null;
   public $opcao_busca = null;
   public $dados_busca = null;
   public $area_sistema = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label2 = null;
   public $GroupBox1 = null;

   function bt_imprimirClick($sender, $params)
   {
      echo "<script language=\"JavaScript\">";
      echo "window.open('rel_etiquetas_clientes_imp.php?dados_busca=" . $this->dados_busca->Text . "&opcao_busca=" . $this->opcao_busca->ItemIndex . "','rel_etiquetas_clientes_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
      echo "</script>";
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function abrir_cadastroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.reletiquetasclientes.bt_cadastro.focus();
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
     document.reletiquetasclientes.bt_buscar.focus();
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
     document.reletiquetasclientes.opcao_busca.focus();
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
         $Comando_SQL = "select * from mgt_clientes where mgt_cliente_numero = '" . $this->abrir_cadastro->Text . "' order by mgt_cliente_numero";

         GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
         GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Clientes->EOF) == 1)
         {
            $this->MSG_Erro->Caption = "O Cadastro Nao foi encontrado.";
         }
         else
         {
?>
         <!-- Abre a Tela de Inclusao -->
         <script language="JavaScript">
            <?php
            echo "window.open('cad_clientes_alt.php?mgt_cliente_numero=" . $this->abrir_cadastro->Text ."','cad_clientes_alt','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
            ?>
         </script>
<?php
         }
      }
   }

   function bt_buscarClick($sender, $params)
   {
      if(trim($this->dados_busca->Text) == "")
      {
         $Comando_SQL = "select * from mgt_clientes order by mgt_cliente_numero";
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_numero = '" . trim($this->dados_busca->Text) . "' order by mgt_cliente_numero";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Tipo")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_codigo_tipo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_codigo_tipo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_codigo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_codigo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Nome")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_nome like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_nome";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Razao Social")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_razao_social like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_razao_social";
         }

      }

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
      GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Clientes->Open();
   }

   function reletiquetasclientesCreate($sender, $params)
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

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
      GetConexaoPrincipal()->SQL_MGT_Clientes->Open();
   }

   function reletiquetasclientesJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $reletiquetasclientes;

//Creates the form
$reletiquetasclientes = new reletiquetasclientes($application);

//Read from resource file
$reletiquetasclientes->loadResource(__FILE__);

//Shows the form
$reletiquetasclientes->show();

?>