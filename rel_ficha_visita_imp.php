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
class relfichavisitaimp extends Page
{
   public $logo_relatorio = null;
   public $apelido_empresa = null;
   public $Label2 = null;
   public $Label16 = null;
   public $Label41 = null;
   public $mgt_representante_nome = null;
   public $mgt_cliente_fone_ramal = null;
   public $mgt_cliente_ddd = null;
   public $Label26 = null;
   public $Label25 = null;
   public $mgt_cliente_status_credito = null;
   public $mgt_cliente_ultimo_valor = null;
   public $mgt_cliente_data_ultima_compra = null;
   public $mgt_cliente_fone_fax = null;
   public $mgt_cliente_fone_residencial = null;
   public $mgt_cliente_fone_celular = null;
   public $mgt_cliente_fone_comercial = null;
   public $mgt_cliente_contato = null;
   public $mgt_cliente_cep = null;
   public $mgt_cliente_estado = null;
   public $mgt_cliente_cidade = null;
   public $mgt_cliente_complemento = null;
   public $mgt_cliente_inscricao_estadual = null;
   public $mgt_cliente_bairro = null;
   public $mgt_cliente_endereco = null;
   public $mgt_cliente_codigo = null;
   public $mgt_cliente_nome = null;
   public $Label34 = null;
   public $Label24 = null;
   public $Label23 = null;
   public $Label22 = null;
   public $Label21 = null;
   public $Label20 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Label17 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $Label11 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label1 = null;
   public $Label10 = null;
   public $Linha_Detalhe = null;

   function relfichavisitaimpCreate($sender, $params)
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

      //*** Carrega o Nome da Empresa no Relatorio e os Dados de Busca ***

      $this->apelido_empresa->Caption = $_SESSION['login_empresa'];

      if($_SESSION['imprime_rel_representante'] == "*"){
          $Comando_SQL = "select *, date_format(mgt_cliente_data_ultima_compra, '%d/%m/%Y') AS mgt_cliente_data_ultima_compra from mgt_clientes, mgt_representantes ";
          $Comando_SQL.= "where ";
          $Comando_SQL.= "mgt_cliente_vendedor = mgt_representante_codigo ";
          $Comando_SQL.= "order by mgt_cliente_cep, mgt_cliente_nome";

          GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
          GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
          GetConexaoPrincipal()->SQL_MGT_Clientes->Open();
      }else{
          $Comando_SQL = "select *, date_format(mgt_cliente_data_ultima_compra, '%d/%m/%Y') AS mgt_cliente_data_ultima_compra from mgt_clientes, mgt_representantes ";
          $Comando_SQL.= "where mgt_cliente_vendedor = '".$_SESSION['imprime_rel_representante']."' and ";
          $Comando_SQL.= "mgt_cliente_vendedor = mgt_representante_codigo ";
          $Comando_SQL.= "order by mgt_cliente_cep, mgt_cliente_nome";

          GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
          GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
          GetConexaoPrincipal()->SQL_MGT_Clientes->Open();
      }

   }
   function relfichavisitaimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relfichavisitaimp;

//Cria o formulario
$relfichavisitaimp = new relfichavisitaimp($application);

//Ler do arquivo de recursos
$relfichavisitaimp->loadResource(__FILE__);

//Mostrar o formulario
$relfichavisitaimp->show();

?>