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
class relmovtoestoque extends Page
{
   public $MSG_Erro = null;
   public $data_final = null;
   public $data_inicial = null;
   public $Label8 = null;
   public $Label1 = null;
   public $produto_descricao = null;
   public $produto_codigo = null;
   public $bt_adicionar = null;
   public $GroupBox3 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Button1 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $GroupBox4 = null;
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

   function bt_adicionarClick($sender, $params)
   {
      if((trim($this->produto_codigo->Text) != '')And(trim($this->data_inicial->Text) != '')And(trim($this->data_final->Text) != ''))
      {
         $this->MSG_Erro->Caption = '';
      }

      if(trim($this->produto_codigo->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, selecione o Produto';
      }

      if(trim($this->data_inicial->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Inicial';
      }

      else if(trim($this->data_final->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Final';
      }

      if(trim($this->MSG_Erro->Caption) == '')
      {
         $_SESSION['imprime_data_inicial'] = $this->data_inicial->Text;
         $_SESSION['imprime_data_final'] = $this->data_final->Text;
         $_SESSION['imprime_produto_codigo'] = $this->produto_codigo->Text;
         $_SESSION['imprime_produto_descricao'] = $this->produto_descricao->Text;

         echo "<script language=\"JavaScript\">";
         echo "window.open('rel_movto_estoque_imp.php','rel_movto_estoque_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo "</script>";
      }
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
     document.cadprodutos.bt_cadastro.focus();
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
     document.relmovtoestoque.bt_buscar.focus();
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
     document.relmovtoestoque.opcao_busca.focus();
     return false;
   }

<?php

   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Add your javascript code here

   //*** Obtem o Registro Clicado ***

   document.relmovtoestoque.produto_codigo.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
   document.relmovtoestoque.produto_descricao.value = registros.getTableModel().getValue(1, registros.getFocusedRow());

<?php

   }

   function bt_buscarClick($sender, $params)
   {
      if(trim($this->dados_busca->Text) == "")
      {
         $Comando_SQL = "select * from mgt_produtos order by mgt_produto_codigo";
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_codigo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_produto_codigo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Descricao")
         {
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_descricao like '%" . trim($this->dados_busca->Text) . "%' order by mgt_produto_codigo";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Produtos->Open();
   }

   function relmovtoestoqueCreate($sender, $params)
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

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

      $this->data_inicial->Text = '01/' . date("m/Y", time());
      $this->data_final->Text = date("d/m/Y", time());

   }


   function relmovtoestoqueJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relmovtoestoque;

//Creates the form
$relmovtoestoque = new relmovtoestoque($application);

//Read from resource file
$relmovtoestoque->loadResource(__FILE__);

//Shows the form
$relmovtoestoque->show();

?>