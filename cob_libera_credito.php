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
class cobliberacredito extends Page
{
   public $bt_alterar = null;
   public $libera_cliente_status = null;
   public $libera_cliente_vlr_ultima_compra = null;
   public $libera_cliente_dt_ultima_compra = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $libera_cliente_bloqueado = null;
   public $libera_cliente_nome = null;
   public $libera_cliente_codigo = null;
   public $libera_cliente_numero = null;
   public $Label64 = null;
   public $Label33 = null;
   public $Label32 = null;
   public $Label31 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $registros = null;
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

   public function procurar_cliente()
   {
      if(trim($this->dados_busca->Text) == "")
      {
         $Comando_SQL = "select *,date_format(mgt_cliente_data_ultima_compra, '%d/%m/%Y') AS mgt_cliente_data_ultima_compra from mgt_clientes order by mgt_cliente_numero";
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL = "select *,date_format(mgt_cliente_data_ultima_compra, '%d/%m/%Y') AS mgt_cliente_data_ultima_compra from mgt_clientes where mgt_cliente_numero = '" . trim($this->dados_busca->Text) . "' order by mgt_cliente_numero";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Tipo")
         {
            $Comando_SQL = "select *,date_format(mgt_cliente_data_ultima_compra, '%d/%m/%Y') AS mgt_cliente_data_ultima_compra from mgt_clientes where mgt_cliente_codigo_tipo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_codigo_tipo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select *,date_format(mgt_cliente_data_ultima_compra, '%d/%m/%Y') AS mgt_cliente_data_ultima_compra from mgt_clientes where mgt_cliente_codigo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_codigo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Nome")
         {
            $Comando_SQL = "select *,date_format(mgt_cliente_data_ultima_compra, '%d/%m/%Y') AS mgt_cliente_data_ultima_compra from mgt_clientes where mgt_cliente_nome like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_nome";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Razao Social")
         {
            $Comando_SQL = "select *,date_format(mgt_cliente_data_ultima_compra, '%d/%m/%Y') AS mgt_cliente_data_ultima_compra from mgt_clientes where mgt_cliente_razao_social like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_razao_social";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
      GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Clientes->Open();
   }

   function libera_cliente_statusJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobliberacredito.bt_alterar.focus();
     return false;
   }

<?php

   }


   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function opcao_buscaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobliberacredito.bt_buscar.focus();
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
     document.cobliberacredito.opcao_busca.focus();
     return false;
   }

<?php

   }

   function bt_alterarClick($sender, $params)
   {
      if(trim($this->libera_cliente_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "O Cliente deve ser selecionado";
      }
      else
      {
         $this->MSG_Erro->Caption = 'Status do Credito do Cliente: ' . trim($this->libera_cliente_nome->Text) . ', foi alterado para: ' . trim($this->libera_cliente_status->ItemIndex);

         //*** Altera o Credito do Cliente para o Status Escolhido ***

         $Comando_SQL = "Update mgt_clientes set mgt_cliente_status_credito = '" . trim($this->libera_cliente_status->ItemIndex) . "' where ";
         $Comando_SQL .= "mgt_cliente_numero = '" . trim($this->libera_cliente_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Limpa os Campos para a Proxima Consulta ***

         $this->libera_cliente_numero->Text = '';
         $this->libera_cliente_codigo->Text = '';
         $this->libera_cliente_nome->Text = '';
         $this->libera_cliente_bloqueado->Text = '';
         $this->libera_cliente_dt_ultima_compra->Text = '';
         $this->libera_cliente_vlr_ultima_compra->Text = '';
         $this->libera_cliente_status->ItemIndex = 'N';

         $this->procurar_cliente();
      }
   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Add your javascript code here

      //*** Obtem o Registro Clicado ***

      document.cobliberacredito.libera_cliente_numero.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
      document.cobliberacredito.libera_cliente_codigo.value = registros.getTableModel().getValue(2, registros.getFocusedRow());
      document.cobliberacredito.libera_cliente_nome.value = registros.getTableModel().getValue(4, registros.getFocusedRow());
      document.cobliberacredito.libera_cliente_bloqueado.value = registros.getTableModel().getValue(7, registros.getFocusedRow());
      document.cobliberacredito.libera_cliente_dt_ultima_compra.value = registros.getTableModel().getValue(5, registros.getFocusedRow());
      document.cobliberacredito.libera_cliente_vlr_ultima_compra.value = registros.getTableModel().getValue(6, registros.getFocusedRow());
      document.cobliberacredito.libera_cliente_status.value = registros.getTableModel().getValue(7, registros.getFocusedRow());

<?php
   }

   function bt_buscarClick($sender, $params)
   {
      $this->procurar_cliente();
   }

   function cobliberacreditoCreate($sender, $params)
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

      $this->procurar_cliente();
   }

   function cobliberacreditoJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cobliberacredito;

//Creates the form
$cobliberacredito = new cobliberacredito($application);

//Read from resource file
$cobliberacredito->loadResource(__FILE__);

//Shows the form
$cobliberacredito->show();

?>