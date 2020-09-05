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

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Definicao de classe
class relultimasvendasimp extends Page
{
   public $logo_relatorio = null;
   public $mgt_rel_qtde = null;
   public $Label5 = null;
   public $mgt_cliente_email = null;
   public $mgt_cliente_fone_comercial = null;
   public $mgt_cliente_ddd = null;
   public $mgt_cliente_cep = null;
   public $mgt_cliente_cidade = null;
   public $mgt_cliente_bairro = null;
   public $mgt_cliente_complemento = null;
   public $mgt_cliente_endereco = null;
   public $mgt_pedido_valor_pedido = null;
   public $mgt_pedido_data = null;
   public $mgt_cliente_estado = null;
   public $mgt_cliente_razao_social = null;
   public $mgt_cliente_numero = null;
   public $mgt_representante_nome = null;
   public $mgt_representante_codigo = null;
   public $Label33 = null;
   public $Label30 = null;
   public $Label18 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label6 = null;
   public $mgt_rel_ordem = null;
   public $mgt_rel_dt_fim = null;
   public $mgt_rel_dt_ini = null;
   public $mgt_rel_tipo = null;
   public $mgt_rel_representante = null;
   public $mgt_rel_bairro = null;
   public $mgt_rel_cidade = null;
   public $mgt_rel_estado = null;
   public $Label21 = null;
   public $Label19 = null;
   public $Label17 = null;
   public $Label15 = null;
   public $Label7 = null;
   public $Label1 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label2 = null;
   public $Label28 = null;
   public $apelido_empresa = null;
   public $relatorio_titulo = null;
   public $rel_hora = null;
   public $rel_data = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Linha_Detalhe = null;

   function relultimasvendasimpCreate($sender, $params)
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

      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      //*** Carrega o Nome da Empresa no Relatorio e os Dados de Busca ***

      $this->apelido_empresa->Caption = $_SESSION['login_empresa'];

      if(trim($_SESSION['imprime_rel_estado']) == '*')
      {
         $this->mgt_rel_estado->Caption = '--- Todos ---';
      }
      else
      {
         $this->mgt_rel_estado->Caption = $_SESSION['imprime_rel_estado'];
      }

      if(trim($_SESSION['imprime_rel_cidade']) == '*')
      {
         $this->mgt_rel_cidade->Caption = '--- Todas ---';
      }
      else
      {
         $this->mgt_rel_cidade->Caption = $_SESSION['imprime_rel_cidade'];
      }

      if(trim($_SESSION['imprime_rel_bairro']) == '*')
      {
         $this->mgt_rel_bairro->Caption = '--- Todos ---';
      }
      else
      {
         $this->mgt_rel_bairro->Caption = $_SESSION['imprime_rel_bairro'];
      }

      if(trim($_SESSION['imprime_rel_representante']) == '*')
      {
         $this->mgt_rel_representante->Caption = '--- Todos ---';
      }
      else
      {
         $this->mgt_rel_representante->Caption = $_SESSION['imprime_rel_representante'];
      }

      if(trim($_SESSION['imprime_rel_tipo']) == '0')
      {
         $this->mgt_rel_tipo->Caption = 'Pedido';
      }
      elseif(trim($_SESSION['imprime_rel_tipo']) == '1')
      {
         $this->mgt_rel_tipo->Caption = 'Faturamento';
      }
      else
      {
         $this->mgt_rel_tipo->Caption = 'Cliente';
      }

      $this->mgt_rel_dt_ini->Caption = $_SESSION['imprime_rel_dt_ini'];
      $this->mgt_rel_dt_fim->Caption = $_SESSION['imprime_rel_dt_fim'];
      $this->mgt_rel_ordem->Caption = $_SESSION['imprime_rel_ordem'];

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      //*** Seleciona as Notas ***

      if(trim($this->mgt_rel_tipo->Caption) == 'Pedido')
      {
         $this->mgt_pedido_data->DataField = 'mgt_pedido_data_ord';
         $this->mgt_pedido_valor_pedido->DataField = 'mgt_pedido_valor_total';

         $Comando_SQL = "select * from (";
         $Comando_SQL .= "select *,date_format(mgt_pedido_data, '%d/%m/%Y') AS mgt_pedido_data_ord ";
         $Comando_SQL .= "from mgt_pedidos, mgt_clientes, mgt_representantes ";
         $Comando_SQL .= "where ";
         $Comando_SQL .= "mgt_pedido_data >= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_ini->Caption) . "' and mgt_pedido_data <= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_fim->Caption) . "' ";
         $Comando_SQL .= "And mgt_pedido_cliente_numero =  mgt_cliente_numero ";
         $Comando_SQL .= "And mgt_cliente_vendedor = mgt_representante_codigo ";

         if(trim($_SESSION['imprime_rel_estado']) != '*')
         {
            $Comando_SQL .= "And mgt_cliente_estado = '" . $_SESSION['imprime_rel_estado'] . "' ";
         }

         if(trim($_SESSION['imprime_rel_cidade']) != '*')
         {
            $Comando_SQL .= "And mgt_cliente_cidade = '" . $_SESSION['imprime_rel_cidade'] . "' ";
         }

         if(trim($_SESSION['imprime_rel_bairro']) != '*')
         {
            $Comando_SQL .= "And mgt_cliente_bairro = '" . $_SESSION['imprime_rel_bairro'] . "' ";
         }

         if(trim($_SESSION['imprime_rel_representante']) != '*')
         {
            $Comando_SQL .= "And mgt_cliente_vendedor = '" . $_SESSION['imprime_rel_representante'] . "' ";
         }

         if(trim($_SESSION['imprime_rel_ordem']) == 'Ultima Compra do Cliente')
         {
            $Comando_SQL .= "order by mgt_clientes.mgt_cliente_vendedor, mgt_clientes.mgt_cliente_estado, mgt_pedidos.mgt_pedido_data Desc, mgt_pedidos.mgt_pedido_numero Desc";
         }
         elseif(trim($_SESSION['imprime_rel_ordem']) == 'CEP do Cliente')
         {
            $Comando_SQL .= "order by mgt_clientes.mgt_cliente_vendedor, mgt_clientes.mgt_cliente_estado, mgt_clientes.mgt_cliente_cep Asc, mgt_pedidos.mgt_pedido_data Desc, mgt_pedidos.mgt_pedido_numero Desc";
         }
         else
         {
            $Comando_SQL .= "order by mgt_clientes.mgt_cliente_vendedor, mgt_clientes.mgt_cliente_estado, mgt_clientes.mgt_cliente_razao_social Asc, mgt_pedidos.mgt_pedido_data Desc, mgt_pedidos.mgt_pedido_numero Desc";
         }

         $Comando_SQL .= ") Resultado ";
         $Comando_SQL .= "Group By Resultado.mgt_cliente_numero ";

         GetConexaoPrincipal()->SQL_MGT_Pedidos->Close();
         GetConexaoPrincipal()->SQL_MGT_Pedidos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Pedidos->Open();
      }
      elseif(trim($this->mgt_rel_tipo->Caption) == 'Faturamento')
      {
         $this->mgt_pedido_data->DataField = 'mgt_nota_fiscal_data_emissao_ord';
         $this->mgt_pedido_valor_pedido->DataField = 'mgt_nota_fiscal_valor_total';

         $Comando_SQL = "select * from (";
         $Comando_SQL .= "select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao_ord ";
         $Comando_SQL .= "from mgt_notas_fiscais, mgt_clientes, mgt_representantes ";
         $Comando_SQL .= "where ";
         $Comando_SQL .= "mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_ini->Caption) . "' and mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd($this->mgt_rel_dt_fim->Caption) . "' ";
         $Comando_SQL .= "And mgt_nota_fiscal_cliente_numero =  mgt_cliente_numero ";
         $Comando_SQL .= "And mgt_cliente_vendedor = mgt_representante_codigo ";

         if(trim($_SESSION['imprime_rel_estado']) != '*')
         {
            $Comando_SQL .= "And mgt_cliente_estado = '" . $_SESSION['imprime_rel_estado'] . "' ";
         }

         if(trim($_SESSION['imprime_rel_cidade']) != '*')
         {
            $Comando_SQL .= "And mgt_cliente_cidade = '" . $_SESSION['imprime_rel_cidade'] . "' ";
         }

         if(trim($_SESSION['imprime_rel_bairro']) != '*')
         {
            $Comando_SQL .= "And mgt_cliente_bairro = '" . $_SESSION['imprime_rel_bairro'] . "' ";
         }

         if(trim($_SESSION['imprime_rel_representante']) != '*')
         {
            $Comando_SQL .= "And mgt_cliente_vendedor = '" . $_SESSION['imprime_rel_representante'] . "' ";
         }

         if(trim($_SESSION['imprime_rel_ordem']) == 'Ultima Compra do Cliente')
         {
            $Comando_SQL .= "order by mgt_clientes.mgt_cliente_vendedor, mgt_clientes.mgt_cliente_estado, mgt_notas_fiscais.mgt_nota_fiscal_data_emissao Desc, mgt_notas_fiscais.mgt_nota_fiscal_numero Desc";
         }
         elseif(trim($_SESSION['imprime_rel_ordem']) == 'CEP do Cliente')
         {
            $Comando_SQL .= "order by mgt_clientes.mgt_cliente_vendedor, mgt_clientes.mgt_cliente_estado, mgt_clientes.mgt_cliente_cep Asc, mgt_notas_fiscais.mgt_nota_fiscal_data_emissao Desc, mgt_notas_fiscais.mgt_nota_fiscal_numero Desc";
         }
         else
         {
            $Comando_SQL .= "order by mgt_clientes.mgt_cliente_vendedor, mgt_clientes.mgt_cliente_estado, mgt_clientes.mgt_cliente_razao_social Asc, mgt_notas_fiscais.mgt_nota_fiscal_data_emissao Desc, mgt_notas_fiscais.mgt_nota_fiscal_numero Desc";
         }

         $Comando_SQL .= ") Resultado ";
         $Comando_SQL .= "Group By Resultado.mgt_cliente_numero ";

         GetConexaoPrincipal()->SQL_MGT_Pedidos->Close();
         GetConexaoPrincipal()->SQL_MGT_Pedidos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Pedidos->Open();
      }
      else
      {
         $this->mgt_pedido_data->DataField = 'mgt_cliente_data_ultima_compra_ord';
         $this->mgt_pedido_valor_pedido->DataField = 'mgt_cliente_ultimo_valor';

         $Comando_SQL = "select * from (";
         $Comando_SQL .= "select *,date_format(mgt_cliente_data_ultima_compra, '%d/%m/%Y') AS mgt_cliente_data_ultima_compra_ord ";
         $Comando_SQL .= "from mgt_clientes, mgt_representantes ";
         $Comando_SQL .= "where ";
         $Comando_SQL .= "mgt_cliente_vendedor = mgt_representante_codigo ";

         if(trim($_SESSION['imprime_rel_estado']) != '*')
         {
            $Comando_SQL .= "And mgt_cliente_estado = '" . $_SESSION['imprime_rel_estado'] . "' ";
         }

         if(trim($_SESSION['imprime_rel_cidade']) != '*')
         {
            $Comando_SQL .= "And mgt_cliente_cidade = '" . $_SESSION['imprime_rel_cidade'] . "' ";
         }

         if(trim($_SESSION['imprime_rel_bairro']) != '*')
         {
            $Comando_SQL .= "And mgt_cliente_bairro = '" . $_SESSION['imprime_rel_bairro'] . "' ";
         }

         if(trim($_SESSION['imprime_rel_representante']) != '*')
         {
            $Comando_SQL .= "And mgt_cliente_vendedor = '" . $_SESSION['imprime_rel_representante'] . "' ";
         }

         if(trim($_SESSION['imprime_rel_ordem']) == 'Ultima Compra do Cliente')
         {
            $Comando_SQL .= "order by mgt_clientes.mgt_cliente_vendedor, mgt_clientes.mgt_cliente_estado, mgt_clientes.mgt_cliente_data_ultima_compra Desc";
         }
         elseif(trim($_SESSION['imprime_rel_ordem']) == 'CEP do Cliente')
         {
            $Comando_SQL .= "order by mgt_clientes.mgt_cliente_vendedor, mgt_clientes.mgt_cliente_estado, mgt_clientes.mgt_cliente_cep Asc";
         }
         else
         {
            $Comando_SQL .= "order by mgt_clientes.mgt_cliente_vendedor, mgt_clientes.mgt_cliente_estado, mgt_clientes.mgt_cliente_razao_social Asc";
         }

         $Comando_SQL .= ") Resultado ";
         $Comando_SQL .= "Group By Resultado.mgt_cliente_numero ";

         GetConexaoPrincipal()->SQL_MGT_Pedidos->Close();
         GetConexaoPrincipal()->SQL_MGT_Pedidos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Pedidos->Open();
      }

      $this->mgt_rel_qtde->Caption = GetConexaoPrincipal()->SQL_MGT_Pedidos->RecordCount;
   }
   function relultimasvendasimpJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

      <?php

   }

}

global $application;

global $relultimasvendasimp;

//Cria o formulario
$relultimasvendasimp = new relultimasvendasimp($application);

//Ler do arquivo de recursos
$relultimasvendasimp->loadResource(__FILE__);

//Mostrar o formulario
$relultimasvendasimp->show();

?>