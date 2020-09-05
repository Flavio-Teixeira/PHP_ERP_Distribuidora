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
class comrequisicoes extends Page
{
    public $registros = null;
   public $fornecedor_busca = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Frame1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label1 = null;
   public $abrir_cadastro = null;
   public $bt_cadastro = null;
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
   function fornecedor_buscaJSChange($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Fornecedor Selecionado ***

      document.comrequisicoes.dados_busca.value = document.comrequisicoes.fornecedor_busca.value;

   <?php

   }

   function fornecedor_buscaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comrequisicoes.bt_buscar.focus();
     return false;
   }

<?php

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
     document.comrequisicoes.bt_cadastro.focus();
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
     document.comrequisicoes.fornecedor_busca.focus();
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
     document.comrequisicoes.opcao_busca.focus();
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
         $Comando_SQL = "select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data,date_format(mgt_requisicao_data_entrega, '%d/%m/%Y') AS mgt_requisicao_data_entrega, IF(mgt_requisicao_status = 'Preparando','#','') AS mgt_requisicao_status_1, IF(mgt_requisicao_status = 'Faturado','#','') AS mgt_requisicao_status_2, IF(mgt_requisicao_status = 'Semi-Faturado','#','') AS mgt_requisicao_status_3, IF(mgt_requisicao_status = 'Aguardando','#','') AS mgt_requisicao_status_4, IF(mgt_requisicao_status = 'Producao','#','') AS mgt_requisicao_status_5 from mgt_requisicoes where mgt_requisicao_numero = '" . $this->abrir_cadastro->Text . "' and mgt_requisicao_status <> 'Faturado' order by mgt_requisicao_numero";

         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Requisicoes->EOF) == 1)
         {
            $this->MSG_Erro->Caption = "O Cadastro Nao foi encontrado.";
         }
         else
         {
            redirect('com_requisicoes_alt.php?mgt_pedido_numero=' . $this->abrir_cadastro->Text );
         }
      }
   }

   function bt_incluirClick($sender, $params)
   {

      //*** Inclusao da Requisicao ***

      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      $Comando_SQL = "insert into mgt_requisicoes(";
      $Comando_SQL .= "mgt_requisicao_cliente_nome,";
      $Comando_SQL .= "mgt_requisicao_data,";
      $Comando_SQL .= "mgt_requisicao_status) ";
      $Comando_SQL .= "values(";
      $Comando_SQL .= "'--- REQUISICAO EM PROCESSO DE INCLUSAO ---',";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim(date("d/m/Y", time()))) . "',";
      $Comando_SQL .= "'Preparando')";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Obtencao do Numero do Pedido ***

      $Comando_SQL = "select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data,date_format(mgt_requisicao_data_entrega, '%d/%m/%Y') AS mgt_requisicao_data_entrega, IF(mgt_requisicao_status = 'Preparando','#','') AS mgt_requisicao_status_1, IF(mgt_requisicao_status = 'Faturado','#','') AS mgt_requisicao_status_2, IF(mgt_requisicao_status = 'Semi-Faturado','#','') AS mgt_requisicao_status_3, IF(mgt_requisicao_status = 'Aguardando','#','') AS mgt_requisicao_status_4, IF(mgt_requisicao_status = 'Producao','#','') AS mgt_requisicao_status_5 from mgt_requisicoes where mgt_requisicao_status <> 'Faturado' order by mgt_requisicao_numero Desc";

      GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();

      $mgt_pedido_numero = GetConexaoPrincipal()->SQL_MGT_Requisicoes->Fields['mgt_requisicao_numero'];

      redirect('com_requisicoes_inc.php?mgt_pedido_numero='.$mgt_pedido_numero);
   }

   function bt_buscarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->dados_busca->Text) != "")
      {
         if(trim($this->opcao_busca->ItemIndex) == "Fornecedor")
         {
            $Comando_SQL = "Select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data from mgt_requisicoes Where mgt_requisicao_cliente_nome Like '%" . trim($this->dados_busca->Text) . "%' Order By mgt_requisicao_data Desc, mgt_requisicao_cliente_nome";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL = "Select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data from mgt_requisicoes Where mgt_requisicao_numero = '" . $this->dados_busca->Text . "' Order By mgt_requisicao_data Desc, mgt_requisicao_numero";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Data Requisicao")
         {
            $Comando_SQL = "Select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data from mgt_requisicoes Where mgt_requisicao_data = '" . inverte_data_dma_to_amd(trim($this->dados_busca->Text)) . "' Order By mgt_requisicao_data Desc";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Cotacao")
         {
            $Comando_SQL = "Select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data from mgt_requisicoes Where mgt_requisicao_cotacao Like '%" . $this->dados_busca->Text . "%' Order By mgt_requisicao_cotacao";
         }
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Fornecedor")
         {
            $Comando_SQL = "Select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data from mgt_requisicoes Order By mgt_requisicao_data Desc, mgt_requisicao_cliente_nome";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL = "Select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data from mgt_requisicoes Order By mgt_requisicao_data Desc, mgt_requisicao_numero";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Data Requisicao")
         {
            $Comando_SQL = "Select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data from mgt_requisicoes Order By mgt_requisicao_data Desc";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Cotacao")
         {
            $Comando_SQL = "Select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data from mgt_requisicoes Order By mgt_requisicao_cotacao";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL;
   }

   function comrequisicoesCreate($sender, $params)
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

      GetConexaoPrincipal()->SQL_MGT_Requisicoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Requisicoes->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Requisicoes->SQL;

      //*** Carrega o Fornecedor ***

      $this->fornecedor_busca->Clear();

      $Comando_SQL = "select * from mgt_fornecedores order by mgt_fornecedor_nome";

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
      GetConexaoPrincipal()->SQL_MGT_Fornecedores->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Fornecedores->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Fornecedores->EOF) != 1)
         {
            $this->fornecedor_busca->AddItem(GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_nome'], null , GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_nome']);
            GetConexaoPrincipal()->SQL_MGT_Fornecedores->Next();
         }
      }
   }
   function comrequisicoesJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }
    function registrosJSRowChanged($sender, $params)
    {
        ?>
        //begin js

        document.comrequisicoes.abrir_cadastro.value = registros.getTableModel().getValue(0, registros.getFocusedRow());

        //end
        <?php
    }

}

global $application;

global $comrequisicoes;

//Creates the form
$comrequisicoes = new comrequisicoes($application);

//Read from resource file
$comrequisicoes->loadResource(__FILE__);

//Shows the form
$comrequisicoes->show();

?>