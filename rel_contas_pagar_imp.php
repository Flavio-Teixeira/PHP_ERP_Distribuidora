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
class relcontaspagarimp extends Page
{
   public $logo_relatorio = null;
   public $mgt_contas_pagar_pagar = null;
   public $mgt_contas_pagar_pago = null;
   public $Label19 = null;
   public $Label15 = null;
   public $mgt_data_final = null;
   public $mgt_data_inicial = null;
   public $Label17 = null;
   public $mgt_contas_pagar_total = null;
   public $mgt_conta_pagar_data_emissao = null;
   public $mgt_conta_pagar_fornecedor_nome = null;
   public $mgt_conta_pagar_data_pagto = null;
   public $mgt_conta_pagar_observacao = null;
   public $mgt_conta_pagar_status = null;
   public $mgt_conta_pagar_saldo = null;
   public $mgt_conta_pagar_valor_ser_pago = null;
   public $mgt_conta_pagar_valor_desconto = null;
   public $mgt_conta_pagar_valor_juros = null;
   public $mgt_conta_pagar_valor = null;
   public $mgt_conta_pagar_descricao = null;
   public $mgt_conta_pagar_data = null;
   public $mgt_conta_pagar_conta = null;
   public $mgt_conta_pagar_nro = null;
   public $Label14 = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label2 = null;
   public $Label1 = null;
   public $Label24 = null;
   public $Label13 = null;
   public $Label5 = null;
   public $Label22 = null;
   public $Label21 = null;
   public $Label16 = null;
   public $Label12 = null;
   public $Label8 = null;
   public $apelido_empresa = null;
   public $relatorio_titulo = null;
   public $rel_hora = null;
   public $rel_data = null;
   public $Label4 = null;
   public $Label3 = null;

   function relcontaspagarimpCreate($sender, $params)
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

      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      //*** Carrega o Nome da Empresa no Relatorio e os Dados de Busca ***

      $this->apelido_empresa->Caption = $_SESSION['login_empresa'];
      $this->mgt_data_inicial->Caption = $_SESSION['imprime_data_inicial'];
      $this->mgt_data_final->Caption = $_SESSION['imprime_data_final'];

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      //*** Totaliza o Contas a Pagar ***

      $Comando_SQL = "select SUM(mgt_conta_pagar_valor_ser_pago) AS mgt_total_ser_pago ";
      $Comando_SQL .= "from mgt_contas_pagar ";
      $Comando_SQL .= "where (mgt_conta_pagar_data >= '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "' and mgt_conta_pagar_data <= '" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')";

      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Open();

      $this->mgt_contas_pagar_total->Caption = number_format(GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_total_ser_pago'], "2", ".", "");

      //*** Totaliza o Valor Pago ***

      $Comando_SQL = "select SUM(mgt_conta_pagar_valor_ser_pago) AS mgt_total_ser_pago ";
      $Comando_SQL .= "from mgt_contas_pagar ";
      $Comando_SQL .= "where ((mgt_conta_pagar_data >= '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "' and mgt_conta_pagar_data <= '" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')";
      $Comando_SQL .= " and (mgt_conta_pagar_data_pagto >  '0000-00-00'))";

      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Open();

      $this->mgt_contas_pagar_pago->Caption = number_format(GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_total_ser_pago'], "2", ".", "");

      //*** Totaliza o Valor a Pagar ***

      $this->mgt_contas_pagar_pagar->Caption = number_format(($this->mgt_contas_pagar_total->Caption - $this->mgt_contas_pagar_pago->Caption), "2", ".", "");

      //*** Seleciona as Contas a Pagar ***

      $Comando_SQL = "select *,mgt_conta_pagar_data AS mgt_conta_pagar_data_ord,date_format(mgt_conta_pagar_data, '%d/%m/%Y') AS mgt_conta_pagar_data, ";
      $Comando_SQL .= "date_format(mgt_conta_pagar_data_pagto, '%d/%m/%Y') AS mgt_conta_pagar_data_pagto, ";
      $Comando_SQL .= "date_format(mgt_conta_pagar_data_emissao, '%d/%m/%Y') AS mgt_conta_pagar_data_emissao, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Em Aberto','#','') AS mgt_conta_pagar_status_1, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Pago','#','') AS mgt_conta_pagar_status_2, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Pago Parcial','#','') AS mgt_conta_pagar_status_3, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Cancelado','#','') AS mgt_conta_pagar_status_4, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Devolucao','#','') AS mgt_conta_pagar_status_5 ";
      $Comando_SQL .= "from mgt_contas_pagar ";
      $Comando_SQL .= "where (mgt_conta_pagar_data >= '" . inverte_data_dma_to_amd(trim($this->mgt_data_inicial->Caption)) . "' and mgt_conta_pagar_data <= '" . inverte_data_dma_to_amd(trim($this->mgt_data_final->Caption)) . "')";
      $Comando_SQL .= "Order By mgt_conta_pagar_data_ord Asc, mgt_conta_pagar_nro";

      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Open();
   }
   function relcontaspagarimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relcontaspagarimp;

//Cria o formulario
$relcontaspagarimp = new relcontaspagarimp($application);

//Ler do arquivo de recursos
$relcontaspagarimp->loadResource(__FILE__);

//Mostrar o formulario
$relcontaspagarimp->show();

?>