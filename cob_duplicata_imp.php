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
class cobduplicataimp extends Page
{
   public $mgt_nota_fiscal_dup_vlr_extenso = null;
   public $mgt_cliente_endereco_cobranca_praca = null;
   public $mgt_nota_fiscal_dup_dt_vcto = null;
   public $mgt_nota_fiscal_dup_nro = null;
   public $mgt_nota_fiscal_dup_vlr = null;
   public $mgt_nota_fiscal_numero = null;
   public $mgt_nota_fiscal_data_emissao = null;
   public $mgt_cliente_inscricao_estadual = null;
   public $mgt_cliente_estado_cobranca = null;
   public $mgt_cliente_fone_cobranca = null;
   public $mgt_cliente_cidade_cobranca = null;
   public $mgt_cliente_cep_cobranca = null;
   public $mgt_cliente_bairro_cobranca = null;
   public $mgt_cliente_endereco_cobranca = null;
   public $mgt_cliente_codigo = null;
   public $mgt_cliente_razao_social = null;

   function cobduplicataimpCreate($sender, $params)
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

      require_once("includes/rotinas_gerais.inc.php");
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      //*** Obtem as Variaaveis ***

      $mgt_nota_fiscal_finalidade = $_REQUEST['mgt_nota_fiscal_finalidade'];
      $mgt_nota_fiscal_numero = $_REQUEST['mgt_nota_fiscal_numero'];
      $posicao = $_REQUEST['posicao'];

      //*** Efetua o Carregamento da Nota Fiscal ***

      $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data, '%d/%m/%Y') AS mgt_nota_fiscal_data, date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao, date_format(mgt_nota_fiscal_data_entrega, '%d/%m/%Y') AS mgt_nota_fiscal_data_entrega from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = '" . trim($mgt_nota_fiscal_finalidade) . "' And mgt_nota_fiscal_numero = '" . trim($mgt_nota_fiscal_numero) . "' order by mgt_nota_fiscal_numero";

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      //*** Efetua o Carregamento do Cliente ***

      $mgt_cliente_numero = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_numero'];

      $Comando_SQL = "select * from mgt_clientes where mgt_cliente_numero = '" . trim($mgt_cliente_numero) . "' order by mgt_cliente_numero";

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
      GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

      //*** Prepara os Campos para a Exibicao ***

      $resultado_extenso = valor_extenso(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_' . trim($posicao)]);
      $resultado_extenso = ereg_replace(" E ", " e ", ucwords($resultado_extenso));

      $this->mgt_cliente_razao_social->Caption = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_razao_social'];
      $this->mgt_cliente_codigo->Caption = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_codigo'];
      $this->mgt_cliente_endereco_cobranca->Caption = trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_endereco']) . ' ' . trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_complemento']);
      $this->mgt_cliente_bairro_cobranca->Caption = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_bairro'];
      $this->mgt_cliente_cep_cobranca->Caption = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cep'];
      $this->mgt_cliente_cidade_cobranca->Caption = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cidade'];
      $this->mgt_cliente_fone_cobranca->Caption = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone_comercial'];
      $this->mgt_cliente_estado_cobranca->Caption = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_estado'];
      $this->mgt_cliente_inscricao_estadual->Caption = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_inscricao_estadual'];
      $this->mgt_nota_fiscal_data_emissao->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'];
      $this->mgt_nota_fiscal_numero->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'];
      $this->mgt_nota_fiscal_dup_vlr->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_' . trim($posicao)];
      $this->mgt_nota_fiscal_dup_nro->Caption = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_' . trim($posicao)];
      $this->mgt_nota_fiscal_dup_dt_vcto->Caption = inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_' . trim($posicao)]);
      $this->mgt_cliente_endereco_cobranca_praca->Caption = trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_endereco_cobranca']) . ' ' . trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_complemento_cobranca']) . ' - ' . trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_bairro_cobranca']) . ' - ' . trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cidade_cobranca']) . ' - ' . trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_estado_cobranca']) . ' - CEP: ' . trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cep_cobranca']);
      $this->mgt_nota_fiscal_dup_vlr_extenso->Caption = strtoupper(trim($resultado_extenso));
   }
   function cobduplicataimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cobduplicataimp;

//Cria o formulario
$cobduplicataimp = new cobduplicataimp($application);

//Ler do arquivo de recursos
$cobduplicataimp->loadResource(__FILE__);

//Mostrar o formulario
$cobduplicataimp->show();

?>