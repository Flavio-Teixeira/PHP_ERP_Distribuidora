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
//Inclusoes
require_once("conexao_principal.php");
use_unit("dbctrls.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

require_once("includes/inverte_data_amd_to_dma.fnc.php");
require_once("includes/inverte_data_dma_to_amd.fnc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Definicao de classe
class relvendasassistentesimp extends Page
{
   public $logo_relatorio = null;
   public $mgt_swap_comissao_comissao_total = null;
   public $mgt_swap_comissao_vlr_total = null;
   public $Label10 = null;
   public $Label8 = null;
   public $assistente_comisao = null;
   public $Label7 = null;
   public $mgt_swap_comissao_comissao = null;
   public $mgt_swap_comissao_vlr = null;
   public $mgt_swap_comissao_cliente = null;
   public $mgt_swap_comissao_data = null;
   public $mgt_swap_comissao_nro_duplicata = null;
   public $assistente_nome = null;
   public $data_final = null;
   public $data_inicial = null;
   public $Label16 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label6 = null;
   public $Label1 = null;
   public $Label22 = null;
   public $Label18 = null;
   public $Label12 = null;
   public $apelido_empresa = null;
   public $relatorio_titulo = null;
   public $rel_hora = null;
   public $rel_data = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Linha_Detalhe = null;

   function relvendasassistentesimpCreate($sender, $params)
   {
      require_once("includes/valida_sessao.inc.php");
      require_once("includes/rotinas_gerais.inc.php");

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

      //*** Carrega o Nome da Empresa no Relatorio e os Dados de Busca ***

      $this->apelido_empresa->Caption = $_SESSION['login_empresa'];
      $this->data_inicial->Caption = $_SESSION['imprime_data_inicial'];
      $this->data_final->Caption = $_SESSION['imprime_data_final'];
      $this->assistente_nome->Caption = $_SESSION['imprime_assistente_nome'];

      $assistente_codigo = obtem_antes_caracter($this->assistente_nome->Caption, '-');

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if((trim($assistente_codigo) <> '') And (trim($assistente_codigo) <> '0'))
      {
         $Comando_SQL = "select * from mgt_assistentes where mgt_assistente_codigo = '" . trim($assistente_codigo) . "'";

         GetConexaoPrincipal()->SQL_MGT_Assistentes->Close();
         GetConexaoPrincipal()->SQL_MGT_Assistentes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Assistentes->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Assistentes->EOF) != 1)
         {
            $this->assistente_comisao->Caption = GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_1_porcentagem'];
         }
      }
      else
      {
         $this->assistente_comisao->Caption = '0';
      }

      //*** Limpa a Tabela de Cobrancas ***

      $Comando_SQL = "TRUNCATE TABLE mgt_swap_comissoes";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Seleciona as Notas Fiscais Vendidas ***

      if((trim($assistente_codigo) <> '') And (trim($assistente_codigo) <> '0'))
      {
         $Comando_SQL = "Select * from mgt_pedidos, mgt_clientes, mgt_assistentes Where ";
         $Comando_SQL .= "(";
         $Comando_SQL .= "(mgt_pedido_data >= '" . inverte_data_dma_to_amd(trim($this->data_inicial->Caption)) . "') And ";
         $Comando_SQL .= "(mgt_pedido_data <= '" . inverte_data_dma_to_amd(trim($this->data_final->Caption)) . "')";
         $Comando_SQL .= ") and ";
         $Comando_SQL .= "(mgt_pedido_cliente_codigo = mgt_cliente_codigo) and ";
         $Comando_SQL .= "(mgt_cliente_assistente = mgt_assistente_codigo) and ";
         $Comando_SQL .= "(mgt_assistente_codigo = '" . trim($assistente_codigo) . "') ";
         $Comando_SQL .= "Order By mgt_pedido_data ASC, mgt_pedido_numero ASC";
      }
      else
      {
         $Comando_SQL = "Select * from mgt_pedidos, mgt_clientes Where ";
         $Comando_SQL .= "(";
         $Comando_SQL .= "(mgt_pedido_data >= '" . inverte_data_dma_to_amd(trim($this->data_inicial->Caption)) . "') And ";
         $Comando_SQL .= "(mgt_pedido_data <= '" . inverte_data_dma_to_amd(trim($this->data_final->Caption)) . "')";
         $Comando_SQL .= ") and ";
         $Comando_SQL .= "(mgt_pedido_cliente_codigo = mgt_cliente_codigo) ";
         $Comando_SQL .= "Order By mgt_pedido_data ASC, mgt_pedido_numero ASC";
      }

      GetConexaoPrincipal()->SQL_MGT_Pedidos->Close();
      GetConexaoPrincipal()->SQL_MGT_Pedidos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Pedidos->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Pedidos->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Pedidos->EOF) != 1)
         {
            $Comando_SQL = "Insert into mgt_swap_comissoes(";
            $Comando_SQL .= "mgt_swap_comissao_nro_duplicata, ";
            $Comando_SQL .= "mgt_swap_comissao_data, ";
            $Comando_SQL .= "mgt_swap_comissao_vencimento, ";
            $Comando_SQL .= "mgt_swap_comissao_cliente, ";
            $Comando_SQL .= "mgt_swap_comissao_vlr, ";
            $Comando_SQL .= "mgt_swap_comissao_vlr_icms, ";
            $Comando_SQL .= "mgt_swap_comissao_comissao)";
            $Comando_SQL .= " Values(";

            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_numero'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_data'] . "',";
            $Comando_SQL .= "'0000-00-00',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_nome'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_valor_total'] . "',";
            $Comando_SQL .= "'" . "0.00" . "',";

            if((trim($assistente_codigo) <> '') And (trim($assistente_codigo) <> '0'))
            {
               $Comando_SQL .= "'" . ((GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_valor_total'] * GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_assistente_1_porcentagem']) / 100) . "')";
            }
            else
            {
               $Comando_SQL .= "'" . "0.00" . "')";
            }

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            GetConexaoPrincipal()->SQL_MGT_Pedidos->Next();
         }
      }

      //*** Gera o Total ***

      $Comando_SQL = "select sum(mgt_swap_comissao_vlr) as mgt_swap_comissao_vlr_total from mgt_swap_comissoes order by mgt_swap_comissao_numero";

      GetConexaoPrincipal()->SQL_MGT_Comissoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Comissoes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Comissoes->Open();

      $this->mgt_swap_comissao_vlr_total->Caption = GetConexaoPrincipal()->SQL_MGT_Comissoes->Fields['mgt_swap_comissao_vlr_total'];

      $Comando_SQL = "select sum(mgt_swap_comissao_comissao) as mgt_swap_comissao_comissao_total from mgt_swap_comissoes order by mgt_swap_comissao_numero";

      GetConexaoPrincipal()->SQL_MGT_Comissoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Comissoes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Comissoes->Open();

      $this->mgt_swap_comissao_comissao_total->Caption = GetConexaoPrincipal()->SQL_MGT_Comissoes->Fields['mgt_swap_comissao_comissao_total'];

      //*** Gera o Relatorio ***

      $Comando_SQL = "select *, date_format(mgt_swap_comissao_data, '%d/%m/%Y') AS mgt_swap_comissao_data, date_format(mgt_swap_comissao_vencimento, '%d/%m/%Y') AS mgt_swap_comissao_vencimento from mgt_swap_comissoes order by mgt_swap_comissao_numero";

      GetConexaoPrincipal()->SQL_MGT_Comissoes->Close();
      GetConexaoPrincipal()->SQL_MGT_Comissoes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Comissoes->Open();
   }
   function relvendasassistentesimpJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

      <?php

   }

}

global $application;

global $relvendasassistentesimp;

//Cria o formulario
$relvendasassistentesimp = new relvendasassistentesimp($application);

//Ler do arquivo de recursos
$relvendasassistentesimp->loadResource(__FILE__);

//Mostrar o formulario
$relvendasassistentesimp->show();

?>