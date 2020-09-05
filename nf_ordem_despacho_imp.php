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
class nfordemdespachoimp extends Page
{
   public $remetente_linha_6 = null;
   public $remetente_linha_5 = null;
   public $remetente_linha_4 = null;
   public $remetente_linha_3 = null;
   public $remetente_linha_2 = null;
   public $remetente_linha_1 = null;
   public $destinatario_linha_6 = null;
   public $destinatario_linha_5 = null;
   public $destinatario_linha_4 = null;
   public $destinatario_linha_3 = null;
   public $destinatario_linha_2 = null;
   public $destinatario_linha_1 = null;

   function nfordemdespachoimpCreate($sender, $params)
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

      //*** Prepara a Etiqueta ***

      $this->destinatario_linha_1->Caption = 'DESTINATARIO:';
      $this->destinatario_linha_2->Caption = $_SESSION['imprime_linha_1'];
      $this->destinatario_linha_3->Caption = $_SESSION['imprime_linha_2'];
      $this->destinatario_linha_4->Caption = $_SESSION['imprime_linha_3'];
      $this->destinatario_linha_5->Caption = $_SESSION['imprime_linha_4'];
      $this->destinatario_linha_6->Caption = $_SESSION['imprime_linha_5'];

      if(trim($_SESSION['imprime_linha_impressao']) == 1)
      {
         $this->remetente_linha_1->Caption = 'REMETENTE:';
         $this->remetente_linha_2->Caption = $_SESSION['login_razao'];
         $this->remetente_linha_3->Caption = $_SESSION['login_endereco'] . ' ' . $_SESSION['login_complemento'];
         $this->remetente_linha_4->Caption = $_SESSION['login_bairro'];
         $this->remetente_linha_5->Caption = $_SESSION['login_cidade'] . ' - ' . $_SESSION['login_estado'];
         $this->remetente_linha_6->Caption = 'CEP: ' . $_SESSION['login_cep'];
      }
      else
      {
         $this->remetente_linha_1->Caption = 'TRANSPORTADORA:';
         $this->remetente_linha_2->Caption = $_SESSION['imprime_linha_transportadora'];
         $this->remetente_linha_3->Caption = 'NRO.DOCTO: ' . $_SESSION['imprime_linha_docto'];
         $this->remetente_linha_4->Caption = 'VOLUME: ' . $_SESSION['imprime_linha_volume'];
         $this->remetente_linha_5->Caption = '';
         $this->remetente_linha_6->Caption = 'DATA/ASSINATURA: ___________________________';
      }

      $_SESSION['imprime_linha_1'] = '';
      $_SESSION['imprime_linha_2'] = '';
      $_SESSION['imprime_linha_3'] = '';
      $_SESSION['imprime_linha_4'] = '';
      $_SESSION['imprime_linha_5'] = '';
      $_SESSION['imprime_linha_docto'] = '';
      $_SESSION['imprime_linha_volume'] = '';
      $_SESSION['imprime_linha_impressao'] = '';
      $_SESSION['imprime_linha_transportadora'] = '';
   }
   function nfordemdespachoimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfordemdespachoimp;

//Cria o formulario
$nfordemdespachoimp = new nfordemdespachoimp($application);

//Ler do arquivo de recursos
$nfordemdespachoimp->loadResource(__FILE__);

//Mostrar o formulario
$nfordemdespachoimp->show();

?>