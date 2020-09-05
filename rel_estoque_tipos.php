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
use_unit("checklst.inc.php");
use_unit("actnlist.inc.php");
use_unit("comctrls.inc.php");
use_unit("styles.inc.php");
use_unit("dbgrids.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class relestoquetipos extends Page
{
   public $tipo_escolhido = null;
   public $Label5 = null;
   public $bt_imprimir = null;
   public $qtde_atual = null;
   public $qtde_inicial = null;
   public $Label3 = null;
   public $Label2 = null;
   public $opcao_estoque = null;
   public $Label19 = null;
   public $Panel2 = null;
   public $Panel1 = null;
   public $Label18 = null;
   public $Label1 = null;
   public $GroupBox3 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $bt_fechar = null;
   public $area_sistema = null;
   public $Label4 = null;
   public $GroupBox2 = null;
   public $GroupBox1 = null;
   function bt_imprimirClick($sender, $params)
   {
      require_once("includes/rotinas_gerais.inc.php");

      echo "<script language=\"JavaScript\">";
      echo "window.open('rel_estoque_tipos_imp.php?tipo_escolhido=".retira_acentos($this->tipo_escolhido->Caption, 0)."&qtde_inicial=".$this->qtde_inicial->Caption."&qtde_atual=".$this->qtde_atual->Caption."','rel_estoque_tipos_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
      echo "</script>";
   }

   function opcao_estoqueChange($sender, $params)
   {
      //*** Obtem o Estoque a Partir da Opcao Escolhida ***

      $Comando_SQL = "Select * from mgt_movtos_estoque, mgt_produtos Where mgt_movto_produto_codigo = mgt_produto_codigo And mgt_produto_tipo = " . trim($this->opcao_estoque->ItemIndex) . " Order By mgt_movto_estoque_numero";

      GetConexaoPrincipal()->SQL_MGT_Movto_Estoque->Close();
      GetConexaoPrincipal()->SQL_MGT_Movto_Estoque->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Movto_Estoque->Open();

      $estoque_inicial = 0;
      $estoque_atual = 0;

      if((GetConexaoPrincipal()->SQL_MGT_Movto_Estoque->EOF) != 1)
      {
         $estoque_inicial = GetConexaoPrincipal()->SQL_MGT_Movto_Estoque->Fields['mgt_movto_qtde_anterior'];
         $estoque_atual = GetConexaoPrincipal()->SQL_MGT_Movto_Estoque->Fields['mgt_movto_qtde_anterior'];

         while((GetConexaoPrincipal()->SQL_MGT_Movto_Estoque->EOF) != 1)
         {
            if((trim(GetConexaoPrincipal()->SQL_MGT_Movto_Estoque->Fields['mgt_movto_tipo']) == '1')Or(trim(GetConexaoPrincipal()->SQL_MGT_Movto_Estoque->Fields['mgt_movto_tipo']) == '4'))
            {
               $estoque_atual = $estoque_atual + GetConexaoPrincipal()->SQL_MGT_Movto_Estoque->Fields['mgt_movto_qtde_informada'];
            }
            else
            {
               $estoque_atual = $estoque_atual - GetConexaoPrincipal()->SQL_MGT_Movto_Estoque->Fields['mgt_movto_qtde_informada'];
            }

            GetConexaoPrincipal()->SQL_MGT_Movto_Estoque->Next();
         }
      }

      $this->qtde_inicial->Caption = $estoque_inicial;
      $this->qtde_atual->Caption = $estoque_atual;

      //*** Obtem o Tipo de Produto Escolhido ***

      $this->tipo_escolhido->Caption = $this->opcao_estoque->Items[$this->opcao_estoque->ItemIndex];
   }

   function relestoquetiposCreate($sender, $params)
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

      //*** Carrega os Usuarios ***

      $this->opcao_estoque->Clear();

      $Comando_SQL = "select * from mgt_tipos_produtos order by mgt_tipo_produto_descricao";

      GetConexaoPrincipal()->SQL_MGT_Tipos->Close();
      GetConexaoPrincipal()->SQL_MGT_Tipos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Tipos->Open();

      $this->opcao_estoque->AddItem('--- Selecione um Item ---', null , '');

      if((GetConexaoPrincipal()->SQL_MGT_Tipos->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Tipos->EOF) != 1)
         {
            $this->opcao_estoque->AddItem(GetConexaoPrincipal()->SQL_MGT_Tipos->Fields['mgt_tipo_produto_descricao'], null , GetConexaoPrincipal()->SQL_MGT_Tipos->Fields['mgt_tipo_produto_codigo']);
            GetConexaoPrincipal()->SQL_MGT_Tipos->Next();
         }
      }
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function relestoquetiposJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relestoquetipos;

//Creates the form
$relestoquetipos = new relestoquetipos($application);

//Read from resource file
$relestoquetipos->loadResource(__FILE__);

//Shows the form
$relestoquetipos->show();

?>