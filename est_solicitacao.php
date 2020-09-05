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
use_unit("dbgrids.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class estsolicitacao extends Page
{
   public $DBGrid1 = null;
   public $Label5 = null;
   public $Frame1 = null;
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
     document.estsolicitacao.bt_cadastro.focus();
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
     document.estsolicitacao.bt_buscar.focus();
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
     document.estsolicitacao.opcao_busca.focus();
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
         $Comando_SQL = "Select ";
         $Comando_SQL .= "mgt_solicitacao_estoque_nro, ";
         $Comando_SQL .= "date_format(mgt_solicitacao_estoque_data_solicitacao, '%d/%m/%Y') AS mgt_solicitacao_estoque_data_solicitacao_inv, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_solicitante, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_codigo, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_descricao, ";
         $Comando_SQL .= "if((mgt_solicitacao_estoque_qtde_solicitada - truncate( mgt_solicitacao_estoque_qtde_solicitada, 0 ) ) >0, mgt_solicitacao_estoque_qtde_solicitada, substring( mgt_solicitacao_estoque_qtde_solicitada, 1, length( mgt_solicitacao_estoque_qtde_solicitada ) -4 )) As mgt_solicitacao_estoque_qtde_solicitada, ";
         $Comando_SQL .= "if((mgt_solicitacao_estoque_qtde_entregue - truncate( mgt_solicitacao_estoque_qtde_entregue, 0 ) ) >0, mgt_solicitacao_estoque_qtde_entregue, substring( mgt_solicitacao_estoque_qtde_entregue, 1, length( mgt_solicitacao_estoque_qtde_entregue ) -4 )) As mgt_solicitacao_estoque_qtde_entregue, ";
         $Comando_SQL .= "date_format(mgt_solicitacao_estoque_data_entregua, '%d/%m/%Y') AS mgt_solicitacao_estoque_data_entregua_inv, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_status, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_observacao ";
         $Comando_SQL .= "from ";
         $Comando_SQL .= "mgt_solicitacoes_estoque ";
         $Comando_SQL .= "Where ";
         $Comando_SQL .= "mgt_solicitacao_estoque_nro = '" . trim($this->abrir_cadastro->Text) . "' ";
         $Comando_SQL .= "Order By ";
         $Comando_SQL .= "mgt_solicitacao_estoque_nro Desc ";

         GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Close();
         GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->EOF) == 1)
         {
            $this->MSG_Erro->Caption = "O Cadastro Nao foi encontrado.";
         }
         else
         {
            redirect('est_solicitacao_alt.php?mgt_solicitacao_estoque_nro=' . $this->abrir_cadastro->Text);
         }
      }
   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Add your javascript code here

   //*** Obtem o Registro Clicado ***

   document.estsolicitacao.abrir_cadastro.value = registros.getTableModel().getValue(0, registros.getFocusedRow());

<?php

   }

   function bt_incluirClick($sender, $params)
   {
      redirect('est_solicitacao_inc.php');
   }

   function bt_buscarClick($sender, $params)
   {
      $Comando_SQL = "Select ";
      $Comando_SQL .= "mgt_solicitacao_estoque_nro, ";
      $Comando_SQL .= "date_format(mgt_solicitacao_estoque_data_solicitacao, '%d/%m/%Y') AS mgt_solicitacao_estoque_data_solicitacao_inv, ";
      $Comando_SQL .= "mgt_solicitacao_estoque_solicitante, ";
      $Comando_SQL .= "mgt_solicitacao_estoque_codigo, ";
      $Comando_SQL .= "mgt_solicitacao_estoque_descricao, ";
      $Comando_SQL .= "if((mgt_solicitacao_estoque_qtde_solicitada - truncate( mgt_solicitacao_estoque_qtde_solicitada, 0 ) ) >0, mgt_solicitacao_estoque_qtde_solicitada, substring( mgt_solicitacao_estoque_qtde_solicitada, 1, length( mgt_solicitacao_estoque_qtde_solicitada ) -4 )) As mgt_solicitacao_estoque_qtde_solicitada, ";
      $Comando_SQL .= "if((mgt_solicitacao_estoque_qtde_entregue - truncate( mgt_solicitacao_estoque_qtde_entregue, 0 ) ) >0, mgt_solicitacao_estoque_qtde_entregue, substring( mgt_solicitacao_estoque_qtde_entregue, 1, length( mgt_solicitacao_estoque_qtde_entregue ) -4 )) As mgt_solicitacao_estoque_qtde_entregue, ";
      $Comando_SQL .= "date_format(mgt_solicitacao_estoque_data_entregua, '%d/%m/%Y') AS mgt_solicitacao_estoque_data_entregua_inv, ";
      $Comando_SQL .= "mgt_solicitacao_estoque_status, ";
      $Comando_SQL .= "mgt_solicitacao_estoque_observacao ";
      $Comando_SQL .= "from ";
      $Comando_SQL .= "mgt_solicitacoes_estoque ";

      if(trim($this->dados_busca->Text) <> "")
      {
         $Comando_SQL .= "Where ";

         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL .= "mgt_solicitacao_estoque_nro = '" . trim($this->dados_busca->Text) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Solicitante")
         {
            $Comando_SQL .= "mgt_solicitacao_estoque_solicitante Like '%" . trim($this->dados_busca->Text) . "%' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Codigo")
         {
            $Comando_SQL .= "mgt_solicitacao_estoque_codigo Like '%" . trim($this->dados_busca->Text) . "%' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Descricao")
         {
            $Comando_SQL .= "mgt_solicitacao_estoque_descricao Like '%" . trim($this->dados_busca->Text) . "%' ";
         }
      }

      $Comando_SQL .= "Order By ";
      $Comando_SQL .= "mgt_solicitacao_estoque_nro Desc ";

      GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Close();
      GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->SQL;
   }

   function estsolicitacaoCreate($sender, $params)
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
         if(isset($this->bt_incluir))
         {
            $this->bt_incluir->Visible = false;
         }
         if(isset($this->bt_alterar))
         {
            $this->bt_alterar->Visible = false;
         }
         if(isset($this->bt_excluir))
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

      GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Close();
      GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->SQL;
   }


   function estsolicitacaoJSLoad($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

<?php

   }

}

global $application;

global $estsolicitacao;

//Creates the form
$estsolicitacao = new estsolicitacao($application);

//Read from resource file
$estsolicitacao->loadResource(__FILE__);

//Shows the form
$estsolicitacao->show();

?>