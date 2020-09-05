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
class venfaturamentos extends Page
{
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
     document.venfaturamentos.bt_cadastro.focus();
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
     document.venfaturamentos.bt_buscar.focus();
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
     document.venfaturamentos.opcao_busca.focus();
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
         $Comando_SQL = "select *,date_format(mgt_faturamento_data, '%d/%m/%Y') AS mgt_faturamento_data,date_format(mgt_faturamento_data_entrega, '%d/%m/%Y') AS mgt_faturamento_data_entrega, IF(mgt_faturamento_status = 'Preparando','#','') AS mgt_faturamento_status_1, IF(mgt_faturamento_status = 'Faturado','#','') AS mgt_faturamento_status_2, IF(mgt_faturamento_status = 'Aguardando','#','') AS mgt_faturamento_status_3 from mgt_faturamentos where mgt_faturamento_status <> 'Faturado' and mgt_faturamento_numero = '" . $this->abrir_cadastro->Text . "' order by mgt_faturamento_numero";

         GetConexaoPrincipal()->SQL_MGT_Faturamentos->Close();
         GetConexaoPrincipal()->SQL_MGT_Faturamentos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Faturamentos->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Faturamentos->EOF) == 1)
         {
            $this->MSG_Erro->Caption = "O Cadastro Nao foi encontrado.";
         }
         else
         {
            redirect('ven_faturamentos_alt.php?mgt_faturamento_numero=' . $this->abrir_cadastro->Text );
         }
      }
   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Add your javascript code here

   //*** Obtem o Registro Clicado ***

   document.venfaturamentos.abrir_cadastro.value = registros.getTableModel().getValue(0, registros.getFocusedRow());

   <?php

   }

   function bt_incluirClick($sender, $params)
   {
      //*** Inclusao do Faturamento ***

      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      $Comando_SQL = "insert into mgt_faturamentos(";
      $Comando_SQL .= "mgt_faturamento_cliente_nome,";
      $Comando_SQL .= "mgt_faturamento_data,";
      $Comando_SQL .= "mgt_faturamento_status) ";
      $Comando_SQL .= "values(";
      $Comando_SQL .= "'--- FATURAMENTO EM PROCESSO DE INCLUSAO ---',";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim(date("d/m/Y", time()))) . "',";
      $Comando_SQL .= "'Preparando')";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Obtencao do Numero do Faturamento ***

      $Comando_SQL = "select *,date_format(mgt_faturamento_data, '%d/%m/%Y') AS mgt_faturamento_data,date_format(mgt_faturamento_data_entrega, '%d/%m/%Y') AS mgt_faturamento_data_entrega, IF(mgt_faturamento_status = 'Preparando','#','') AS mgt_faturamento_status_1, IF(mgt_faturamento_status = 'Faturado','#','') AS mgt_faturamento_status_2, IF(mgt_faturamento_status = 'Aguardando','#','') AS mgt_faturamento_status_3 from mgt_faturamentos where mgt_faturamento_status <> 'Faturado' order by mgt_faturamento_numero Desc";

      GetConexaoPrincipal()->SQL_MGT_Faturamentos->Close();
      GetConexaoPrincipal()->SQL_MGT_Faturamentos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Faturamentos->Open();

      $mgt_faturamento_numero = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_numero'];

      redirect('ven_faturamentos_inc.php?mgt_faturamento_numero='.$mgt_faturamento_numero );
   }

   function bt_buscarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->dados_busca->Text) == "")
      {
         $Comando_SQL = "select *,date_format(mgt_faturamento_data, '%d/%m/%Y') AS mgt_faturamento_data,date_format(mgt_faturamento_data_entrega, '%d/%m/%Y') AS mgt_faturamento_data_entrega, IF(mgt_faturamento_status = 'Preparando','#','') AS mgt_faturamento_status_1, IF(mgt_faturamento_status = 'Faturado','#','') AS mgt_faturamento_status_2, IF(mgt_faturamento_status = 'Aguardando','#','') AS mgt_faturamento_status_3 from mgt_faturamentos where mgt_faturamento_status <> 'Faturado' order by mgt_faturamento_numero";
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL = "select *,date_format(mgt_faturamento_data, '%d/%m/%Y') AS mgt_faturamento_data,date_format(mgt_faturamento_data_entrega, '%d/%m/%Y') AS mgt_faturamento_data_entrega, IF(mgt_faturamento_status = 'Preparando','#','') AS mgt_faturamento_status_1, IF(mgt_faturamento_status = 'Faturado','#','') AS mgt_faturamento_status_2, IF(mgt_faturamento_status = 'Aguardando','#','') AS mgt_faturamento_status_3 from mgt_faturamentos where mgt_faturamento_status <> 'Faturado' and mgt_faturamento_numero = '" . trim($this->dados_busca->Text) . "' order by mgt_faturamento_numero";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Data")
         {
            $Comando_SQL = "select *,date_format(mgt_faturamento_data, '%d/%m/%Y') AS mgt_faturamento_data,date_format(mgt_faturamento_data_entrega, '%d/%m/%Y') AS mgt_faturamento_data_entrega, IF(mgt_faturamento_status = 'Preparando','#','') AS mgt_faturamento_status_1, IF(mgt_faturamento_status = 'Faturado','#','') AS mgt_faturamento_status_2, IF(mgt_faturamento_status = 'Aguardando','#','') AS mgt_faturamento_status_3 from mgt_faturamentos where mgt_faturamento_status <> 'Faturado' and mgt_faturamento_data = '" . inverte_data_dma_to_amd(trim($this->dados_busca->Text)) . "' order by mgt_faturamento_data";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Cliente")
         {
            $Comando_SQL = "select *,date_format(mgt_faturamento_data, '%d/%m/%Y') AS mgt_faturamento_data,date_format(mgt_faturamento_data_entrega, '%d/%m/%Y') AS mgt_faturamento_data_entrega, IF(mgt_faturamento_status = 'Preparando','#','') AS mgt_faturamento_status_1, IF(mgt_faturamento_status = 'Faturado','#','') AS mgt_faturamento_status_2, IF(mgt_faturamento_status = 'Aguardando','#','') AS mgt_faturamento_status_3 from mgt_faturamentos where mgt_faturamento_status <> 'Faturado' and mgt_faturamento_cliente_nome like '%" . trim($this->dados_busca->Text) . "%' order by mgt_faturamento_cliente_nome";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Valor")
         {
            $Comando_SQL = "select *,date_format(mgt_faturamento_data, '%d/%m/%Y') AS mgt_faturamento_data,date_format(mgt_faturamento_data_entrega, '%d/%m/%Y') AS mgt_faturamento_data_entrega, IF(mgt_faturamento_status = 'Preparando','#','') AS mgt_faturamento_status_1, IF(mgt_faturamento_status = 'Faturado','#','') AS mgt_faturamento_status_2, IF(mgt_faturamento_status = 'Aguardando','#','') AS mgt_faturamento_status_3 from mgt_faturamentos where mgt_faturamento_status <> 'Faturado' and mgt_faturamento_valor_total = '" . trim($this->dados_busca->Text) . "' order by mgt_faturamento_valor_total";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Entrega")
         {
            $Comando_SQL = "select *,date_format(mgt_faturamento_data, '%d/%m/%Y') AS mgt_faturamento_data,date_format(mgt_faturamento_data_entrega, '%d/%m/%Y') AS mgt_faturamento_data_entrega, IF(mgt_faturamento_status = 'Preparando','#','') AS mgt_faturamento_status_1, IF(mgt_faturamento_status = 'Faturado','#','') AS mgt_faturamento_status_2, IF(mgt_faturamento_status = 'Aguardando','#','') AS mgt_faturamento_status_3 from mgt_faturamentos where mgt_faturamento_status <> 'Faturado' and mgt_faturamento_data_entrega = '" . inverte_data_dma_to_amd(trim($this->dados_busca->Text)) . "' order by mgt_faturamento_data_entrega";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Status")
         {
            $Comando_SQL = "select *,date_format(mgt_faturamento_data, '%d/%m/%Y') AS mgt_faturamento_data,date_format(mgt_faturamento_data_entrega, '%d/%m/%Y') AS mgt_faturamento_data_entrega, IF(mgt_faturamento_status = 'Preparando','#','') AS mgt_faturamento_status_1, IF(mgt_faturamento_status = 'Faturado','#','') AS mgt_faturamento_status_2, IF(mgt_faturamento_status = 'Aguardando','#','') AS mgt_faturamento_status_3 from mgt_faturamentos where mgt_faturamento_status <> 'Faturado' and mgt_faturamento_status = '" . trim($this->dados_busca->Text) . "' order by mgt_faturamento_status";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Faturamentos->Close();
      GetConexaoPrincipal()->SQL_MGT_Faturamentos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Faturamentos->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Faturamentos->SQL;
   }

   function venfaturamentosCreate($sender, $params)
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

      GetConexaoPrincipal()->SQL_MGT_Faturamentos->Close();
      GetConexaoPrincipal()->SQL_MGT_Faturamentos->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Faturamentos->SQL;
   }


   function venfaturamentosJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $venfaturamentos;

//Creates the form
$venfaturamentos = new venfaturamentos($application);

//Read from resource file
$venfaturamentos->loadResource(__FILE__);

//Shows the form
$venfaturamentos->show();

?>