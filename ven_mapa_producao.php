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
class venmapaproducao extends Page
{
   public $registros = null;
   public $total_proximo = null;
   public $total_atraso = null;
   public $Panel2 = null;
   public $Panel1 = null;
   public $pedidos_proximos_atraso = null;
   public $pedidos_atrasados = null;
   public $Label7 = null;
   public $Label6 = null;
   public $GroupBox4 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label1 = null;
   public $abrir_cadastro = null;
   public $bt_cadastro = null;
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

   function verifica_atraso()
   {
      require_once("includes/rotinas_gerais.inc.php");

      //*** Limpa a lista de atraso ***

      $this->pedidos_atrasados->Clear();
      $this->pedidos_proximos_atraso->Clear();

      //*** Verifica se o Pedido esta em Atraso ***

      $data_atual = date("Y-m-d", time());

      $nro_pedido = 0;
      $qtde_atraso = 0;
      $qtde_proximo = 0;

      GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->First();

      while((GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->EOF) <> 1)
      {
         if(trim(GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_data_entrega']) <> '0000-00-00')
         {
            $d1 = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_data_entrega'];
            $d2 = $data_atual;
            $diferenca_dias = diferenca_entre_datas($d1, $d2, 'D');

            if($diferenca_dias >= 0)
            {
               if($nro_pedido <> GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_numero_pedido'])
               {
                  $this->pedidos_atrasados->AddLine('Nro.: ' . trim(GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_numero_pedido']) . '-' . trim($diferenca_dias) . 'dd');
                  $nro_pedido = trim(GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_numero_pedido']);
                  $qtde_atraso = $qtde_atraso + 1;
               }
            }
            elseif((($diferenca_dias == -1)Or($diferenca_dias == -2)))
            {
               if($nro_pedido <> GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_numero_pedido'])
               {
                  $this->pedidos_proximos_atraso->AddLine('Nro.: ' . trim(GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_numero_pedido']) . trim($diferenca_dias) . 'dd');
                  $nro_pedido = trim(GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_numero_pedido']);
                  $qtde_proximo = $qtde_proximo + 1;
               }
            }
         }

         GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Next();
      }

      $this->total_proximo->Caption = 'Total: <b>' . trim($qtde_proximo) . '</b>';
      $this->total_atraso->Caption = 'Total: <b>' . trim($qtde_atraso) . '</b>';
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
     document.venmapaproducao.bt_cadastro.focus();
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
     document.venmapaproducao.bt_buscar.focus();
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
     document.venmapaproducao.opcao_busca.focus();
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
         //*** Obtem as Variaveis Necessarias para Abrir o Cadastro ***

         $Numero_Produto = 0;
         $Numero_Pedido = 0;

         $Numero_Produto = substr($this->abrir_cadastro->Text, 0, strpos($this->abrir_cadastro->Text, '#'));
         $Numero_Pedido = substr($this->abrir_cadastro->Text, strpos($this->abrir_cadastro->Text, '#') + 1);

         $Comando_SQL = "select ";
         $Comando_SQL .= "mgt_mapa_produto_numero, ";
         $Comando_SQL .= "mgt_mapa_cliente_codigo, ";
         $Comando_SQL .= "mgt_mapa_cliente_nome, ";
         $Comando_SQL .= "mgt_mapa_produto_codigo, ";
         $Comando_SQL .= "mgt_mapa_produto_descricao, ";
         $Comando_SQL .= "mgt_mapa_produto_numero_pedido, ";
         $Comando_SQL .= "mgt_mapa_data, ";
         $Comando_SQL .= "mgt_mapa_data_entrega, ";
         $Comando_SQL .= "date_format(mgt_mapa_data, '%d/%m/%Y') AS mgt_mapa_data_inv, ";
         $Comando_SQL .= "date_format(mgt_mapa_data_entrega, '%d/%m/%Y') AS mgt_mapa_data_entrega_inv, ";
         $Comando_SQL .= "if((mgt_mapa_produto_quantidade_solicitada - truncate( mgt_mapa_produto_quantidade_solicitada, 0 ) ) >0, mgt_mapa_produto_quantidade_solicitada, substring( mgt_mapa_produto_quantidade_solicitada, 1, length( mgt_mapa_produto_quantidade_solicitada ) -4 )) As mgt_mapa_produto_quantidade_solicitada, ";
         $Comando_SQL .= "if((mgt_mapa_produto_quantidade_producao - truncate( mgt_mapa_produto_quantidade_producao, 0 ) ) >0, mgt_mapa_produto_quantidade_producao, substring( mgt_mapa_produto_quantidade_producao, 1, length( mgt_mapa_produto_quantidade_producao ) -4 )) As mgt_mapa_produto_quantidade_producao, ";
         $Comando_SQL .= "if((mgt_mapa_produto_quantidade_produzido - truncate( mgt_mapa_produto_quantidade_produzido, 0 ) ) >0, mgt_mapa_produto_quantidade_produzido, substring( mgt_mapa_produto_quantidade_produzido, 1, length( mgt_mapa_produto_quantidade_produzido ) -4 )) As mgt_mapa_produto_quantidade_produzido, ";
         $Comando_SQL .= "if((mgt_mapa_produto_quantidade_problemas - truncate( mgt_mapa_produto_quantidade_problemas, 0 ) ) >0, mgt_mapa_produto_quantidade_problemas, substring( mgt_mapa_produto_quantidade_problemas, 1, length( mgt_mapa_produto_quantidade_problemas ) -4 )) As mgt_mapa_produto_quantidade_problemas, ";
         $Comando_SQL .= "mgt_mapa_produto_status ";
         $Comando_SQL .= "from ";
         $Comando_SQL .= "mgt_mapas, ";
         $Comando_SQL .= "mgt_mapas_produtos ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_mapa_produto_numero = " . trim($Numero_Produto);
         $Comando_SQL .= " And mgt_mapa_produto_numero_pedido = " . trim($Numero_Pedido);
         $Comando_SQL .= " And mgt_mapa_numero = mgt_mapa_produto_numero_pedido ";
         $Comando_SQL .= "Group By ";
         $Comando_SQL .= "mgt_mapa_produto_numero, mgt_mapa_produto_numero_pedido ";
         $Comando_SQL .= "Order By ";
         $Comando_SQL .= "mgt_mapa_data_entrega Asc, mgt_mapa_produto_numero_pedido Asc";

         GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->EOF) == 1)
         {
            $this->MSG_Erro->Caption = "O Cadastro Nao foi encontrado.";
         }
         else
         {
            redirect('ven_mapa_producao_alt.php?mgt_mapa_produto_numero=' . $Numero_Produto . '&mgt_mapa_produto_numero_pedido=' . $Numero_Pedido);
         }
      }
   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Add your javascript code here

   //*** Obtem o Registro Clicado ***

   document.venmapaproducao.abrir_cadastro.value = registros.getTableModel().getValue(0, registros.getFocusedRow()) + '#' + registros.getTableModel().getValue(6, registros.getFocusedRow());

<?php

   }

   function bt_buscarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      $Comando_SQL = "select ";
      $Comando_SQL .= "mgt_mapa_produto_numero, ";
      $Comando_SQL .= "mgt_mapa_cliente_codigo, ";
      $Comando_SQL .= "mgt_mapa_cliente_nome, ";
      $Comando_SQL .= "mgt_mapa_produto_codigo, ";
      $Comando_SQL .= "mgt_mapa_produto_descricao, ";
      $Comando_SQL .= "mgt_mapa_produto_numero_pedido, ";
      $Comando_SQL .= "mgt_mapa_data, ";
      $Comando_SQL .= "mgt_mapa_data_entrega, ";
      $Comando_SQL .= "date_format(mgt_mapa_data, '%d/%m/%Y') AS mgt_mapa_data_inv, ";
      $Comando_SQL .= "date_format(mgt_mapa_data_entrega, '%d/%m/%Y') AS mgt_mapa_data_entrega_inv, ";
      $Comando_SQL .= "if((mgt_mapa_produto_quantidade_solicitada - truncate( mgt_mapa_produto_quantidade_solicitada, 0 ) ) >0, mgt_mapa_produto_quantidade_solicitada, substring( mgt_mapa_produto_quantidade_solicitada, 1, length( mgt_mapa_produto_quantidade_solicitada ) -4 )) As mgt_mapa_produto_quantidade_solicitada, ";
      $Comando_SQL .= "if((mgt_mapa_produto_quantidade_producao - truncate( mgt_mapa_produto_quantidade_producao, 0 ) ) >0, mgt_mapa_produto_quantidade_producao, substring( mgt_mapa_produto_quantidade_producao, 1, length( mgt_mapa_produto_quantidade_producao ) -4 )) As mgt_mapa_produto_quantidade_producao, ";
      $Comando_SQL .= "if((mgt_mapa_produto_quantidade_produzido - truncate( mgt_mapa_produto_quantidade_produzido, 0 ) ) >0, mgt_mapa_produto_quantidade_produzido, substring( mgt_mapa_produto_quantidade_produzido, 1, length( mgt_mapa_produto_quantidade_produzido ) -4 )) As mgt_mapa_produto_quantidade_produzido, ";
      $Comando_SQL .= "if((mgt_mapa_produto_quantidade_problemas - truncate( mgt_mapa_produto_quantidade_problemas, 0 ) ) >0, mgt_mapa_produto_quantidade_problemas, substring( mgt_mapa_produto_quantidade_problemas, 1, length( mgt_mapa_produto_quantidade_problemas ) -4 )) As mgt_mapa_produto_quantidade_problemas, ";
      $Comando_SQL .= "mgt_mapa_produto_status ";
      $Comando_SQL .= "from ";
      $Comando_SQL .= "mgt_mapas, ";
      $Comando_SQL .= "mgt_mapas_produtos ";
      $Comando_SQL .= " where ";
      $Comando_SQL .= "mgt_mapa_numero = mgt_mapa_produto_numero_pedido ";

      if(trim($this->dados_busca->Text) <> "")
      {
         if(trim($this->opcao_busca->ItemIndex) == "Cliente")
         {
            $Comando_SQL .= "And mgt_mapa_cliente_nome Like '%" . trim($this->dados_busca->Text) . "%' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Codigo Produto")
         {
            $Comando_SQL .= "And mgt_mapa_produto_codigo Like '%" . trim($this->dados_busca->Text) . "%' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Descricao Produto")
         {
            $Comando_SQL .= "And mgt_mapa_produto_descricao Like '%" . trim($this->dados_busca->Text) . "%' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Pedido")
         {
            $Comando_SQL .= "And mgt_mapa_produto_numero_pedido = '" . trim($this->dados_busca->Text) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Data")
         {
            $Comando_SQL .= "And mgt_mapa_data = '" . inverte_data_dma_to_amd(trim($this->dados_busca->Text)) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Data Entrega")
         {
            $Comando_SQL .= "And mgt_mapa_data_entrega = '" . inverte_data_dma_to_amd(trim($this->dados_busca->Text)) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Status")
         {
            $Comando_SQL .= "And mgt_mapa_produto_status = '" . trim($this->dados_busca->Text) . "' ";
         }
      }

      $Comando_SQL .= "Group By ";
      $Comando_SQL .= "mgt_mapa_produto_numero, mgt_mapa_produto_numero_pedido ";
      $Comando_SQL .= "Order By ";
      $Comando_SQL .= "mgt_mapa_data_entrega Asc, mgt_mapa_produto_numero_pedido Asc";

      GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->SQL;
   }

   function venmapaproducaoCreate($sender, $params)
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

      GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Open();

      $this->verifica_atraso();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->SQL;
   }

   function venmapaproducaoJSLoad($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

<?php

   }

}

global $application;

global $venmapaproducao;

//Creates the form
$venmapaproducao = new venmapaproducao($application);

//Read from resource file
$venmapaproducao->loadResource(__FILE__);

//Shows the form
$venmapaproducao->show();

?>