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
class nfctrlsaidaimp extends Page
{
   public $mgt_nota_fiscal_vol_numero = null;
   public $mgt_nota_fiscal_transportadora_razao_social = null;
   public $mgt_nota_fiscal_razao_social = null;
   public $mgt_nota_fiscal_numero = null;
   public $mgt_nota_fiscal_data_emissao = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label10 = null;
   public $Label12 = null;
   public $Label45 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label1 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label2 = null;
   public $mgt_nota_fiscal_tipo_faturamento = null;
   public $mgt_nota_fiscal_numero_fim = null;
   public $mgt_nota_fiscal_numero_ini = null;
   public $Label28 = null;
   public $apelido_empresa = null;
   public $relatorio_titulo = null;
   public $rel_hora = null;
   public $rel_data = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Linha_Detalhe = null;

   function nfctrlsaidaimpCreate($sender, $params)
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
      $this->mgt_nota_fiscal_tipo_faturamento->Caption = $_SESSION['imprime_tipo_faturamento'];
      $this->mgt_nota_fiscal_numero_ini->Caption = $_SESSION['imprime_numero_ini'];
      $this->mgt_nota_fiscal_numero_fim->Caption = $_SESSION['imprime_numero_fim'];

      //*** Carrega a Data e Hora do Relatorio ***

      $this->rel_data->Caption = date("d/m/Y", time());
      $this->rel_hora->Caption = date("H:i:s", time());

      //*** Seleciona as Notas ***

      if(
          (trim($this->mgt_nota_fiscal_tipo_faturamento->Caption) == 'Nota Fiscal (Produtos)')
      )
      {
         $this->relatorio_titulo->Caption = "Controle de Saida de Mercadorias - " . trim($this->mgt_nota_fiscal_tipo_faturamento->Caption);
         $this->Linha_Detalhe->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_data_emissao->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_numero->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_razao_social->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_transportadora_razao_social->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_vol_numero->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');

         $this->mgt_nota_fiscal_data_emissao->setDataField('mgt_nota_fiscal_data_emissao');
         $this->mgt_nota_fiscal_numero->setDataField('mgt_nota_fiscal_numero');
         $this->mgt_nota_fiscal_razao_social->setDataField('mgt_nota_fiscal_razao_social');
         $this->mgt_nota_fiscal_transportadora_razao_social->setDataField('mgt_nota_fiscal_transportadora_razao_social');
         $this->mgt_nota_fiscal_vol_numero->setDataField('mgt_nota_fiscal_vol_numero');

         $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao from mgt_notas_fiscais where mgt_nota_fiscal_finalidade='PRD' And mgt_nota_fiscal_numero >= '" . trim($this->mgt_nota_fiscal_numero_ini->Caption) . "' and mgt_nota_fiscal_numero <= '" . trim($this->mgt_nota_fiscal_numero_fim->Caption) . "' order by mgt_nota_fiscal_numero";

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();
      }
      elseif(
          (trim($this->mgt_nota_fiscal_tipo_faturamento->Caption) == 'Nota Fiscal (Servicos)')
      )
      {
         $this->relatorio_titulo->Caption = "Controle de Saida de Mercadorias - " . trim($this->mgt_nota_fiscal_tipo_faturamento->Caption);
         $this->Linha_Detalhe->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_data_emissao->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_numero->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_razao_social->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_transportadora_razao_social->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_vol_numero->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');

         $this->mgt_nota_fiscal_data_emissao->setDataField('mgt_nota_fiscal_data_emissao');
         $this->mgt_nota_fiscal_numero->setDataField('mgt_nota_fiscal_numero');
         $this->mgt_nota_fiscal_razao_social->setDataField('mgt_nota_fiscal_razao_social');
         $this->mgt_nota_fiscal_transportadora_razao_social->setDataField('mgt_nota_fiscal_transportadora_razao_social');
         $this->mgt_nota_fiscal_vol_numero->setDataField('mgt_nota_fiscal_vol_numero');

         $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao from mgt_notas_fiscais where mgt_nota_fiscal_finalidade='SRV' And mgt_nota_fiscal_numero >= '" . trim($this->mgt_nota_fiscal_numero_ini->Caption) . "' and mgt_nota_fiscal_numero <= '" . trim($this->mgt_nota_fiscal_numero_fim->Caption) . "' order by mgt_nota_fiscal_numero";

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();
      }
      elseif(
          (trim($this->mgt_nota_fiscal_tipo_faturamento->Caption) == 'Nao Vinculado a Nota Fiscal')
      )
      {
         $this->relatorio_titulo->Caption = "Controle de Saida de Mercadorias - " . trim($this->mgt_nota_fiscal_tipo_faturamento->Caption);
         $this->Linha_Detalhe->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_data_emissao->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_numero->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_razao_social->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_transportadora_razao_social->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');
         $this->mgt_nota_fiscal_vol_numero->setDataSource('conexaoprincipal.DS_MGT_Notas_Fiscais');

         $this->mgt_nota_fiscal_data_emissao->setDataField('mgt_nota_fiscal_data_emissao');
         $this->mgt_nota_fiscal_numero->setDataField('mgt_nota_fiscal_numero');
         $this->mgt_nota_fiscal_razao_social->setDataField('mgt_nota_fiscal_razao_social');
         $this->mgt_nota_fiscal_transportadora_razao_social->setDataField('mgt_nota_fiscal_transportadora_razao_social');
         $this->mgt_nota_fiscal_vol_numero->setDataField('mgt_nota_fiscal_vol_numero');

         $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao from mgt_notas_fiscais where mgt_nota_fiscal_finalidade='NVL' And mgt_nota_fiscal_numero >= '" . trim($this->mgt_nota_fiscal_numero_ini->Caption) . "' and mgt_nota_fiscal_numero <= '" . trim($this->mgt_nota_fiscal_numero_fim->Caption) . "' order by mgt_nota_fiscal_numero";

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();
      }
      elseif(
              (trim($this->mgt_nota_fiscal_tipo_faturamento->Caption) == 'Venda Programada (Produtos)')
      )
      {
         $this->relatorio_titulo->Caption = "Controle de Saida de Mercadorias - " . trim($this->mgt_nota_fiscal_tipo_faturamento->Caption);
         $this->Linha_Detalhe->setDataSource('conexaoprincipal.DS_MGT_Programadas');
         $this->mgt_nota_fiscal_data_emissao->setDataSource('conexaoprincipal.DS_MGT_Programadas');
         $this->mgt_nota_fiscal_numero->setDataSource('conexaoprincipal.DS_MGT_Programadas');
         $this->mgt_nota_fiscal_razao_social->setDataSource('conexaoprincipal.DS_MGT_Programadas');
         $this->mgt_nota_fiscal_transportadora_razao_social->setDataSource('conexaoprincipal.DS_MGT_Programadas');
         $this->mgt_nota_fiscal_vol_numero->setDataSource('conexaoprincipal.DS_MGT_Programadas');

         $this->mgt_nota_fiscal_data_emissao->setDataField('mgt_programada_data_emissao');
         $this->mgt_nota_fiscal_numero->setDataField('mgt_programada_numero');
         $this->mgt_nota_fiscal_razao_social->setDataField('mgt_programada_razao_social');
         $this->mgt_nota_fiscal_transportadora_razao_social->setDataField('mgt_programada_transportadora_razao_social');
         $this->mgt_nota_fiscal_vol_numero->setDataField('mgt_programada_vol_numero');

         $Comando_SQL = "select *,date_format(mgt_programada_data_emissao, '%d/%m/%Y') AS mgt_programada_data_emissao from mgt_programadas where mgt_programada_finalidade='PRD' And mgt_programada_numero >= '" . trim($this->mgt_nota_fiscal_numero_ini->Caption) . "' and mgt_programada_numero <= '" . trim($this->mgt_nota_fiscal_numero_fim->Caption) . "' order by mgt_programada_numero";

         GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
         GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programadas->Open();
      }
      elseif(
              (trim($this->mgt_nota_fiscal_tipo_faturamento->Caption) == 'Venda Programada (Servicos)')
      )
      {
         $this->relatorio_titulo->Caption = "Controle de Saida de Mercadorias - " . trim($this->mgt_nota_fiscal_tipo_faturamento->Caption);
         $this->Linha_Detalhe->setDataSource('conexaoprincipal.DS_MGT_Programadas');
         $this->mgt_nota_fiscal_data_emissao->setDataSource('conexaoprincipal.DS_MGT_Programadas');
         $this->mgt_nota_fiscal_numero->setDataSource('conexaoprincipal.DS_MGT_Programadas');
         $this->mgt_nota_fiscal_razao_social->setDataSource('conexaoprincipal.DS_MGT_Programadas');
         $this->mgt_nota_fiscal_transportadora_razao_social->setDataSource('conexaoprincipal.DS_MGT_Programadas');
         $this->mgt_nota_fiscal_vol_numero->setDataSource('conexaoprincipal.DS_MGT_Programadas');

         $this->mgt_nota_fiscal_data_emissao->setDataField('mgt_programada_data_emissao');
         $this->mgt_nota_fiscal_numero->setDataField('mgt_programada_numero');
         $this->mgt_nota_fiscal_razao_social->setDataField('mgt_programada_razao_social');
         $this->mgt_nota_fiscal_transportadora_razao_social->setDataField('mgt_programada_transportadora_razao_social');
         $this->mgt_nota_fiscal_vol_numero->setDataField('mgt_programada_vol_numero');

         $Comando_SQL = "select *,date_format(mgt_programada_data_emissao, '%d/%m/%Y') AS mgt_programada_data_emissao from mgt_programadas where mgt_programada_finalidade='SRV' And mgt_programada_numero >= '" . trim($this->mgt_nota_fiscal_numero_ini->Caption) . "' and mgt_programada_numero <= '" . trim($this->mgt_nota_fiscal_numero_fim->Caption) . "' order by mgt_programada_numero";

         GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
         GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programadas->Open();
      }
   }
   function nfctrlsaidaimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfctrlsaidaimp;

//Cria o formulario
$nfctrlsaidaimp = new nfctrlsaidaimp($application);

//Ler do arquivo de recursos
$nfctrlsaidaimp->loadResource(__FILE__);

//Mostrar o formulario
$nfctrlsaidaimp->show();

?>