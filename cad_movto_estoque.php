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
class estmanutencao extends Page
{
   public $observacao = null;
   public $localizacao = null;
   public $valor_venda = null;
   public $qtde = null;
   public $qtde_ideal = null;
   public $qtde_inicial = null;
   public $qtde_minima = null;
   public $qtde_atual = null;
   public $produto_descricao = null;
   public $produto_codigo = null;
   public $bt_remover = null;
   public $bt_adicionar = null;
   public $GroupBox3 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Button1 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
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

   function bt_removerClick($sender, $params)
   {
      if(trim($this->qtde->Text) != "")
      {
         //*** Atualiza Movto de Estoque
         $Comando_SQL = "insert into mgt_movtos_estoque(";
         $Comando_SQL .= "mgt_movto_produto_codigo, ";
         $Comando_SQL .= "mgt_movto_produto_codigo_interno, ";
         $Comando_SQL .= "mgt_movto_produto_titulo, ";
         $Comando_SQL .= "mgt_movto_tipo, ";
         $Comando_SQL .= "mgt_movto_data, ";
         $Comando_SQL .= "mgt_movto_qtde_anterior, ";
         $Comando_SQL .= "mgt_movto_qtde_informada, ";
         $Comando_SQL .= "mgt_movto_qtde_atual, ";
         $Comando_SQL .= "mgt_movto_nota, ";
         $Comando_SQL .= "mgt_movto_nro_entrada_saida, ";
         $Comando_SQL .= "mgt_movto_observacao) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . trim($this->produto_codigo->Text) . "',";
         $Comando_SQL .= "'',";
         $Comando_SQL .= "'" . trim($this->produto_descricao->Text) . "',";
         $Comando_SQL .= "2,";
         $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
         $Comando_SQL .= "'" . trim($this->qtde_atual->Text) . "',";
         $Comando_SQL .= "'" . trim($this->qtde->Text) . "',";
         $Comando_SQL .= "'" . (trim($this->qtde_atual->Text) - trim($this->qtde->Text)) . "',";
         $Comando_SQL .= "0,";
         $Comando_SQL .= "0,";
         $Comando_SQL .= "'" . trim($this->observacao->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Atualiza Produto ***
         $Comando_SQL = "update mgt_produtos set ";

         if(trim($this->qtde_inicial->Text) != "")
         {
            $Comando_SQL .= "mgt_produto_estoque_inicial = '" . trim($this->qtde_inicial->Text) . "', ";
         }

         if(trim($this->qtde_ideal->Text) != "")
         {
            $Comando_SQL .= "mgt_produto_estoque_ideal = '" . trim($this->qtde_ideal->Text) . "', ";
         }

         if(trim($this->qtde_minima->Text) != "")
         {
            $Comando_SQL .= "mgt_produto_estoque_minimo = '" . trim($this->qtde_minima->Text) . "', ";
         }

         if(trim($this->valor_venda->Text) != "")
         {
            $Comando_SQL .= "mgt_produto_preco = '" . trim($this->valor_venda->Text) . "', ";
         }

         if(trim($this->localizacao->Text) != "")
         {
            $Comando_SQL .= "mgt_produto_localizacao = '" . trim($this->localizacao->Text) . "', ";
         }

         $Comando_SQL .= "mgt_produto_estoque_atual = '" . (trim($this->qtde_atual->Text) - trim($this->qtde->Text)) . "' ";

         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_produto_codigo = '" . trim($this->produto_codigo->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->produto_codigo->Text = "";
         $this->produto_descricao->Text = "";
         $this->qtde_inicial->Text = "";
         $this->qtde_atual->Text = "";
         $this->qtde_ideal->Text = "";
         $this->qtde_minima->Text = "";
         $this->qtde->Text = "";
         $this->valor_venda->Text = "";
         $this->localizacao->Text = "";
         $this->observacao->Text = "";

         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();
      }
   }


   function bt_adicionarClick($sender, $params)
   {
      if(trim($this->qtde->Text) != "")
      {
         //*** Atualiza Movto de Estoque
         $Comando_SQL = "insert into mgt_movtos_estoque(";
         $Comando_SQL .= "mgt_movto_produto_codigo, ";
         $Comando_SQL .= "mgt_movto_produto_codigo_interno, ";
         $Comando_SQL .= "mgt_movto_produto_titulo, ";
         $Comando_SQL .= "mgt_movto_tipo, ";
         $Comando_SQL .= "mgt_movto_data, ";
         $Comando_SQL .= "mgt_movto_qtde_anterior, ";
         $Comando_SQL .= "mgt_movto_qtde_informada, ";
         $Comando_SQL .= "mgt_movto_qtde_atual, ";
         $Comando_SQL .= "mgt_movto_nota, ";
         $Comando_SQL .= "mgt_movto_nro_entrada_saida, ";
         $Comando_SQL .= "mgt_movto_observacao) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . trim($this->produto_codigo->Text) . "',";
         $Comando_SQL .= "'',";
         $Comando_SQL .= "'" . trim($this->produto_descricao->Text) . "',";
         $Comando_SQL .= "1,";
         $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
         $Comando_SQL .= "'" . trim($this->qtde_atual->Text) . "',";
         $Comando_SQL .= "'" . trim($this->qtde->Text) . "',";
         $Comando_SQL .= "'" . (trim($this->qtde_atual->Text) + trim($this->qtde->Text)) . "',";
         $Comando_SQL .= "0,";
         $Comando_SQL .= "0,";
         $Comando_SQL .= "'" . trim($this->observacao->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Atualiza Produto ***
         $Comando_SQL = "update mgt_produtos set ";

         if(trim($this->qtde_inicial->Text) != "")
         {
            $Comando_SQL .= "mgt_produto_estoque_inicial = '" . trim($this->qtde_inicial->Text) . "', ";
         }

         if(trim($this->qtde_ideal->Text) != "")
         {
            $Comando_SQL .= "mgt_produto_estoque_ideal = '" . trim($this->qtde_ideal->Text) . "', ";
         }

         if(trim($this->qtde_minima->Text) != "")
         {
            $Comando_SQL .= "mgt_produto_estoque_minimo = '" . trim($this->qtde_minima->Text) . "', ";
         }

         if(trim($this->valor_venda->Text) != "")
         {
            $Comando_SQL .= "mgt_produto_preco = '" . trim($this->valor_venda->Text) . "', ";
         }

         if(trim($this->localizacao->Text) != "")
         {
            $Comando_SQL .= "mgt_produto_localizacao = '" . trim($this->localizacao->Text) . "', ";
         }

         $Comando_SQL .= "mgt_produto_estoque_atual = '" . (trim($this->qtde_atual->Text) + trim($this->qtde->Text)) . "' ";

         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_produto_codigo = '" . trim($this->produto_codigo->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->produto_codigo->Text = "";
         $this->produto_descricao->Text = "";
         $this->qtde_inicial->Text = "";
         $this->qtde_atual->Text = "";
         $this->qtde_ideal->Text = "";
         $this->qtde_minima->Text = "";
         $this->qtde->Text = "";
         $this->valor_venda->Text = "";
         $this->localizacao->Text = "";
         $this->observacao->Text = "";

         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();
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
     document.estmanutencao.bt_buscar.focus();
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
     document.estmanutencao.opcao_busca.focus();
     return false;
   }

<?php

   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Add your javascript code here

   //*** Obtem o Registro Clicado ***

   document.estmanutencao.produto_codigo.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
   document.estmanutencao.produto_descricao.value = registros.getTableModel().getValue(1, registros.getFocusedRow());
   document.estmanutencao.qtde_atual.value = registros.getTableModel().getValue(2, registros.getFocusedRow());
   document.estmanutencao.qtde_ideal.value = registros.getTableModel().getValue(3, registros.getFocusedRow());
   document.estmanutencao.qtde_minima.value = registros.getTableModel().getValue(4, registros.getFocusedRow());
   document.estmanutencao.qtde_inicial.value = registros.getTableModel().getValue(5, registros.getFocusedRow());
   document.estmanutencao.valor_venda.value = registros.getTableModel().getValue(6, registros.getFocusedRow());
   document.estmanutencao.localizacao.value = registros.getTableModel().getValue(7, registros.getFocusedRow());

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

   function estmanutencaoCreate($sender, $params)
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


   }


   function estmanutencaoJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $estmanutencao;

//Creates the form
$estmanutencao = new estmanutencao($application);

//Read from resource file
$estmanutencao->loadResource(__FILE__);

//Shows the form
$estmanutencao->show();

?>