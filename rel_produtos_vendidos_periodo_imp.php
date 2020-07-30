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
class relprodutosvendidosperiodoimp extends Page
{
   public $logo_relatorio = null;
   public $Label25 = null;
   public $Label24 = null;
   public $Label23 = null;
   public $Label20 = null;
   public $Label19 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $Label14 = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label1 = null;
   public $mgt_cobranca_tipo_produto = null;
   public $mgt_conta_pagar_data_pagto = null;
   public $mgt_conta_pagar_data = null;
   public $mgt_conta_pagar_valor_ser_pago = null;
   public $mgt_conta_pagar_descricao = null;
   public $mgt_conta_pagar_nro = null;
   public $Label18 = null;
   public $Label15 = null;
   public $Label13 = null;
   public $Label22 = null;
   public $Label21 = null;
   public $Label12 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label2 = null;
   public $mgt_data_final = null;
   public $mgt_data_inicial = null;
   public $relatorio_titulo = null;
   public $rel_hora = null;
   public $rel_data = null;
   public $Label4 = null;
   public $Label3 = null;
   public $apelido_empresa = null;
   public $Linha_Detalhe = null;

   function relprodutosvendidosperiodoimpCreate($sender, $params)
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
      $this->mgt_cobranca_tipo_produto->Caption = $_SESSION['imprime_produto_tipo'];

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());
   }
   function relprodutosvendidosperiodoimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relprodutosvendidosperiodoimp;

//Cria o formulario
$relprodutosvendidosperiodoimp = new relprodutosvendidosperiodoimp($application);

//Ler do arquivo de recursos
$relprodutosvendidosperiodoimp->loadResource(__FILE__);

//Mostrar o formulario
$relprodutosvendidosperiodoimp->show();

?>