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
class comordens extends Page
{
    public $registros = null;
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
   public $Label5 = null;
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
     document.comordens.bt_cadastro.focus();
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
     document.comordens.bt_buscar.focus();
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
     document.comordens.opcao_busca.focus();
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
         $Comando_SQL = "select *,date_format(mgt_ordem_data, '%d/%m/%Y') AS mgt_ordem_data,date_format(mgt_ordem_data_entrega, '%d/%m/%Y') AS mgt_ordem_data_entrega, IF(mgt_ordem_status = 'Preparando','#','') AS mgt_ordem_status_1, IF(mgt_ordem_status = 'Entregue','#','') AS mgt_ordem_status_2, IF(mgt_ordem_status = 'Entregue-Parcial','#','') AS mgt_ordem_status_3, IF(mgt_ordem_status = 'Aguardando','#','') AS mgt_ordem_status_4, IF(mgt_ordem_status = 'Producao','#','') AS mgt_ordem_status_5 from mgt_ordens where mgt_ordem_numero = '" . $this->abrir_cadastro->Text . "' and mgt_ordem_status <> 'Entregue' order by mgt_ordem_numero";

         GetConexaoPrincipal()->SQL_MGT_Ordens->Close();
         GetConexaoPrincipal()->SQL_MGT_Ordens->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Ordens->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Ordens->EOF) == 1)
         {
            $this->MSG_Erro->Caption = "O Cadastro Nao foi encontrado.";
         }
         else
         {
            redirect('com_ordens_alt.php?mgt_ordem_numero=' . $this->abrir_cadastro->Text );
         }
      }
   }

   function bt_incluirClick($sender, $params)
   {
      //*** Inclusao do Ordem de Compra ***

      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      $Comando_SQL = "insert into mgt_ordens(";
      $Comando_SQL .= "mgt_ordem_cliente_nome,";
      $Comando_SQL .= "mgt_ordem_data,";
      $Comando_SQL .= "mgt_ordem_status) ";
      $Comando_SQL .= "values(";
      $Comando_SQL .= "'--- PEDIDO EM PROCESSO DE INCLUSAO ---',";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim(date("d/m/Y", time()))) . "',";
      $Comando_SQL .= "'Preparando')";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Obtencao do Numero do Ordem de Compra ***

      $Comando_SQL = "select *,date_format(mgt_ordem_data, '%d/%m/%Y') AS mgt_ordem_data,date_format(mgt_ordem_data_entrega, '%d/%m/%Y') AS mgt_ordem_data_entrega, IF(mgt_ordem_status = 'Preparando','#','') AS mgt_ordem_status_1, IF(mgt_ordem_status = 'Entregue','#','') AS mgt_ordem_status_2, IF(mgt_ordem_status = 'Entregue-Parcial','#','') AS mgt_ordem_status_3, IF(mgt_ordem_status = 'Aguardando','#','') AS mgt_ordem_status_4, IF(mgt_ordem_status = 'Producao','#','') AS mgt_ordem_status_5 from mgt_ordens where mgt_ordem_status <> 'Entregue' order by mgt_ordem_numero Desc";

      GetConexaoPrincipal()->SQL_MGT_Ordens->Close();
      GetConexaoPrincipal()->SQL_MGT_Ordens->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Ordens->Open();

      $mgt_ordem_numero = GetConexaoPrincipal()->SQL_MGT_Ordens->Fields['mgt_ordem_numero'];

      redirect('com_ordens_inc.php?mgt_ordem_numero='.$mgt_ordem_numero);
   }

   function bt_buscarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->dados_busca->Text) == "")
      {
         $Comando_SQL = "select *,date_format(mgt_ordem_data, '%d/%m/%Y') AS mgt_ordem_data,date_format(mgt_ordem_data_entrega, '%d/%m/%Y') AS mgt_ordem_data_entrega, IF(mgt_ordem_status = 'Preparando','#','') AS mgt_ordem_status_1, IF(mgt_ordem_status = 'Entregue','#','') AS mgt_ordem_status_2, IF(mgt_ordem_status = 'Entregue-Parcial','#','') AS mgt_ordem_status_3, IF(mgt_ordem_status = 'Aguardando','#','') AS mgt_ordem_status_4, IF(mgt_ordem_status = 'Producao','#','') AS mgt_ordem_status_5 from mgt_ordens where mgt_ordem_status <> 'Entregue' order by mgt_ordem_numero";
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL = "select *,date_format(mgt_ordem_data, '%d/%m/%Y') AS mgt_ordem_data,date_format(mgt_ordem_data_entrega, '%d/%m/%Y') AS mgt_ordem_data_entrega, IF(mgt_ordem_status = 'Preparando','#','') AS mgt_ordem_status_1, IF(mgt_ordem_status = 'Entregue','#','') AS mgt_ordem_status_2, IF(mgt_ordem_status = 'Entregue-Parcial','#','') AS mgt_ordem_status_3, IF(mgt_ordem_status = 'Aguardando','#','') AS mgt_ordem_status_4, IF(mgt_ordem_status = 'Producao','#','') AS mgt_ordem_status_5 from mgt_ordens where mgt_ordem_numero = '" . trim($this->dados_busca->Text) . "' and mgt_ordem_status <> 'Faturado' order by mgt_ordem_numero";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Data")
         {
            $Comando_SQL = "select *,date_format(mgt_ordem_data, '%d/%m/%Y') AS mgt_ordem_data,date_format(mgt_ordem_data_entrega, '%d/%m/%Y') AS mgt_ordem_data_entrega, IF(mgt_ordem_status = 'Preparando','#','') AS mgt_ordem_status_1, IF(mgt_ordem_status = 'Entregue','#','') AS mgt_ordem_status_2, IF(mgt_ordem_status = 'Entregue-Parcial','#','') AS mgt_ordem_status_3, IF(mgt_ordem_status = 'Aguardando','#','') AS mgt_ordem_status_4, IF(mgt_ordem_status = 'Producao','#','') AS mgt_ordem_status_5 from mgt_ordens where mgt_ordem_data = '" . inverte_data_dma_to_amd(trim($this->dados_busca->Text)) . "' and mgt_ordem_status <> 'Faturado' order by mgt_ordem_data";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Fornecedor")
         {
            $Comando_SQL = "select *,date_format(mgt_ordem_data, '%d/%m/%Y') AS mgt_ordem_data,date_format(mgt_ordem_data_entrega, '%d/%m/%Y') AS mgt_ordem_data_entrega, IF(mgt_ordem_status = 'Preparando','#','') AS mgt_ordem_status_1, IF(mgt_ordem_status = 'Entregue','#','') AS mgt_ordem_status_2, IF(mgt_ordem_status = 'Entregue-Parcial','#','') AS mgt_ordem_status_3, IF(mgt_ordem_status = 'Aguardando','#','') AS mgt_ordem_status_4, IF(mgt_ordem_status = 'Producao','#','') AS mgt_ordem_status_5 from mgt_ordens where mgt_ordem_cliente_nome like '%" . trim($this->dados_busca->Text) . "%' and mgt_ordem_status <> 'Faturado' order by mgt_ordem_cliente_nome";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Valor")
         {
            $Comando_SQL = "select *,date_format(mgt_ordem_data, '%d/%m/%Y') AS mgt_ordem_data,date_format(mgt_ordem_data_entrega, '%d/%m/%Y') AS mgt_ordem_data_entrega, IF(mgt_ordem_status = 'Preparando','#','') AS mgt_ordem_status_1, IF(mgt_ordem_status = 'Entregue','#','') AS mgt_ordem_status_2, IF(mgt_ordem_status = 'Entregue-Parcial','#','') AS mgt_ordem_status_3, IF(mgt_ordem_status = 'Aguardando','#','') AS mgt_ordem_status_4, IF(mgt_ordem_status = 'Producao','#','') AS mgt_ordem_status_5 from mgt_ordens where mgt_ordem_valor_total = '" . trim($this->dados_busca->Text) . "' and mgt_ordem_status <> 'Faturado' order by mgt_ordem_valor_total";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Entrega")
         {
            $Comando_SQL = "select *,date_format(mgt_ordem_data, '%d/%m/%Y') AS mgt_ordem_data,date_format(mgt_ordem_data_entrega, '%d/%m/%Y') AS mgt_ordem_data_entrega, IF(mgt_ordem_status = 'Preparando','#','') AS mgt_ordem_status_1, IF(mgt_ordem_status = 'Entregue','#','') AS mgt_ordem_status_2, IF(mgt_ordem_status = 'Entregue-Parcial','#','') AS mgt_ordem_status_3, IF(mgt_ordem_status = 'Aguardando','#','') AS mgt_ordem_status_4, IF(mgt_ordem_status = 'Producao','#','') AS mgt_ordem_status_5 from mgt_ordens where mgt_ordem_data_entrega = '" . inverte_data_dma_to_amd(trim($this->dados_busca->Text)) . "' and mgt_ordem_status <> 'Faturado' order by mgt_ordem_data_entrega";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Status")
         {
            $Comando_SQL = "select *,date_format(mgt_ordem_data, '%d/%m/%Y') AS mgt_ordem_data,date_format(mgt_ordem_data_entrega, '%d/%m/%Y') AS mgt_ordem_data_entrega, IF(mgt_ordem_status = 'Preparando','#','') AS mgt_ordem_status_1, IF(mgt_ordem_status = 'Entregue','#','') AS mgt_ordem_status_2, IF(mgt_ordem_status = 'Entregue-Parcial','#','') AS mgt_ordem_status_3, IF(mgt_ordem_status = 'Aguardando','#','') AS mgt_ordem_status_4, IF(mgt_ordem_status = 'Producao','#','') AS mgt_ordem_status_5 from mgt_ordens where mgt_ordem_status = '" . trim($this->dados_busca->Text) . "' and mgt_ordem_status <> 'Faturado' order by mgt_ordem_status";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Ordens->Close();
      GetConexaoPrincipal()->SQL_MGT_Ordens->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Ordens->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Ordens->SQL;
   }

   function comordensCreate($sender, $params)
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

      GetConexaoPrincipal()->SQL_MGT_Ordens->Close();
      GetConexaoPrincipal()->SQL_MGT_Ordens->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Ordens->SQL;
   }

   function comordensJSLoad($sender, $params)
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

        document.comordens.abrir_cadastro.value = registros.getTableModel().getValue(0, registros.getFocusedRow());

        //end
        <?php
    }

}

global $application;

global $comordens;

//Creates the form
$comordens = new comordens($application);

//Read from resource file
$comordens->loadResource(__FILE__);

//Shows the form
$comordens->show();

?>