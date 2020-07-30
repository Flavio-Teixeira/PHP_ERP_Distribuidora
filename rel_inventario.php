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
class relinventario extends Page
{
   public $total_geral = null;
   public $Label5 = null;
   public $mgt_produto_familia = null;
   public $Label1 = null;
   public $bt_adicionar = null;
   public $GroupBox3 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Button1 = null;
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
   function mgt_produto_familiaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relinventario.bt_buscar.focus();
     return false;
   }

<?php

   }


   function bt_adicionarClick($sender, $params)
   {
      echo "<script language=\"JavaScript\">";
      echo "window.open('rel_inventario_imp.php','rel_inventario_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
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
     document.relinventario.mgt_produto_familia.focus();
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
     document.relinventario.opcao_busca.focus();
     return false;
   }

<?php

   }

   function bt_buscarClick($sender, $params)
   {
      if(trim($this->mgt_produto_familia->ItemIndex) == '0')
      {
         if(trim($this->dados_busca->Text) == "")
         {
            $Comando_SQL = "select *,(mgt_produto_estoque_atual * mgt_produto_preco) as mgt_produto_preco_total from mgt_produtos order by CAST(mgt_produto_codigo AS SIGNED)";
            $Comando_SQL_2 = "select SUM((mgt_produto_estoque_atual * mgt_produto_preco)) as mgt_produto_total from mgt_produtos order by CAST(mgt_produto_codigo AS SIGNED)";
         }
         else
         {
            if(trim($this->opcao_busca->ItemIndex) == "Codigo")
            {
               $Comando_SQL = "select *,(mgt_produto_estoque_atual * mgt_produto_preco) as mgt_produto_preco_total from mgt_produtos where mgt_produto_codigo like '%" . trim($this->dados_busca->Text) . "%' order by CAST(mgt_produto_codigo AS SIGNED)";
               $Comando_SQL_2 = "select SUM((mgt_produto_estoque_atual * mgt_produto_preco)) as mgt_produto_total from mgt_produtos where mgt_produto_codigo like '%" . trim($this->dados_busca->Text) . "%' order by CAST(mgt_produto_codigo AS SIGNED)";
            }
            elseif(trim($this->opcao_busca->ItemIndex) == "Descricao")
            {
               $Comando_SQL = "select *,(mgt_produto_estoque_atual * mgt_produto_preco) as mgt_produto_preco_total from mgt_produtos where mgt_produto_descricao like '%" . trim($this->dados_busca->Text) . "%' order by CAST(mgt_produto_codigo AS SIGNED)";
               $Comando_SQL_2 = "select SUM((mgt_produto_estoque_atual * mgt_produto_preco)) as mgt_produto_total from mgt_produtos where mgt_produto_descricao like '%" . trim($this->dados_busca->Text) . "%' order by CAST(mgt_produto_codigo AS SIGNED)";
            }
         }
      }
      else
      {
         if(trim($this->dados_busca->Text) == "")
         {
            $Comando_SQL = "select *,(mgt_produto_estoque_atual * mgt_produto_preco) as mgt_produto_preco_total from mgt_produtos Where mgt_produto_familia = " . trim($this->mgt_produto_familia->ItemIndex) . " order by CAST(mgt_produto_codigo AS SIGNED)";
            $Comando_SQL_2 = "select SUM((mgt_produto_estoque_atual * mgt_produto_preco)) as mgt_produto_total from mgt_produtos Where mgt_produto_familia = " . trim($this->mgt_produto_familia->ItemIndex) . " order by CAST(mgt_produto_codigo AS SIGNED)";
         }
         else
         {
            if(trim($this->opcao_busca->ItemIndex) == "Codigo")
            {
               $Comando_SQL = "select *,(mgt_produto_estoque_atual * mgt_produto_preco) as mgt_produto_preco_total from mgt_produtos where mgt_produto_codigo like '%" . trim($this->dados_busca->Text) . "%' and mgt_produto_familia = " . trim($this->mgt_produto_familia->ItemIndex) . " order by CAST(mgt_produto_codigo AS SIGNED)";
               $Comando_SQL_2 = "select SUM((mgt_produto_estoque_atual * mgt_produto_preco)) as mgt_produto_total from mgt_produtos where mgt_produto_codigo like '%" . trim($this->dados_busca->Text) . "%' and mgt_produto_familia = " . trim($this->mgt_produto_familia->ItemIndex) . " order by CAST(mgt_produto_codigo AS SIGNED)";
            }
            elseif(trim($this->opcao_busca->ItemIndex) == "Descricao")
            {
               $Comando_SQL = "select *,(mgt_produto_estoque_atual * mgt_produto_preco) as mgt_produto_preco_total from mgt_produtos where mgt_produto_descricao like '%" . trim($this->dados_busca->Text) . "%' and mgt_produto_familia = " . trim($this->mgt_produto_familia->ItemIndex) . " order by CAST(mgt_produto_codigo AS SIGNED)";
               $Comando_SQL_2 = "select SUM((mgt_produto_estoque_atual * mgt_produto_preco)) as mgt_produto_total from mgt_produtos where mgt_produto_descricao like '%" . trim($this->dados_busca->Text) . "%' and mgt_produto_familia = " . trim($this->mgt_produto_familia->ItemIndex) . " order by CAST(mgt_produto_codigo AS SIGNED)";
            }
         }
      }

      //*** Obtem o Total do Inventario ***

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL_2;
      GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

      $this->total_geral->Caption = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_total'];

      //*** Obtem os Produtos do Inventario ***

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

      //*** Sessoes do Relatorio ***

      $_SESSION['imprime_sql'] = $Comando_SQL;
      $_SESSION['imprime_sql_total'] = $Comando_SQL_2;
      $_SESSION['imprime_familia'] = trim($this->mgt_produto_familia->ItemIndex);
   }

   function relinventarioCreate($sender, $params)
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

      /*** Inicio - Carrega as Familias ***/

      $Comando_SQL = "select * from mgt_familias_produtos order by mgt_familia_produto_descricao";

      GetConexaoPrincipal()->SQL_MGT_Familias->Close();
      GetConexaoPrincipal()->SQL_MGT_Familias->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Familias->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Familias->EOF) != 1)
      {

         $this->mgt_produto_familia->Clear();

         $this->mgt_produto_familia->AddItem('--- Todas ---', null , '0');

         while(GetConexaoPrincipal()->SQL_MGT_Familias->EOF != 1)
         {
            $this->mgt_produto_familia->AddItem(GetConexaoPrincipal()->SQL_MGT_Familias->Fields['mgt_familia_produto_descricao'], null , GetConexaoPrincipal()->SQL_MGT_Familias->Fields['mgt_familia_produto_codigo']);

            GetConexaoPrincipal()->SQL_MGT_Familias->Next();
         }

      }

      /*** Final - Carrega as Familias ***/

      //*** Efetua a Busca dos Produtos ***

      $this->bt_buscarClick($sender,$params);
   }
   function relinventarioJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relinventario;

//Creates the form
$relinventario = new relinventario($application);

//Read from resource file
$relinventario->loadResource(__FILE__);

//Shows the form
$relinventario->show();

?>