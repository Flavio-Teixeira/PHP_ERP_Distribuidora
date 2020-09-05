<?php
// +----------------------------------------------------------------------+
// | BoletoPhp - Versao Beta                                              |
// +----------------------------------------------------------------------+
// | Este arquivo esta disponivel sob a Licenca GPL disponivel pela Web   |
// | em http://pt.wikipedia.org/wiki/GNU_General_Public_License           |
// | Voce deve ter recebido uma copia da GNU Public License junto com     |
// | esse pacote; se nao, escreva para:                                   |
// |                                                                      |
// | Free Software Foundation, Inc.                                       |
// | 59 Temple Place - Suite 330                                          |
// | Boston, MA 02111-1307, USA.                                          |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Originado do Projeto BBBoletoFree que tiveram colaboracoes de Daniel |
// | William Schultz e Leandro Maniezo que por sua vez foi derivado do	  |
// | PHPBoleto de Joao Prado Maia e Pablo Martins F. Costa                |
// |                                                                      |
// | Se vc quer colaborar, nos ajude a desenvolver p/ os demais bancos :-)|
// | Acesse o site do Projeto BoletoPhp: www.boletophp.com.br             |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------------+
// | Equipe Coordenacao Projeto BoletoPhp: <boletophp@boletophp.com.br>         |
// | Desenvolvimento Boleto Santander-Banespa : Fabio R. Lenharo                |
// +----------------------------------------------------------------------------+

// ------------------------- DADOS DINAMICOS DO SEU CLIENTE PARA A GERACAO DO BOLETO (FIXO OU VIA GET) -------------------- //
// Os valores abaixo podem ser colocados manualmente ou ajustados p/ formulario c/ POST, GET ou de BD (MySql,Postgre,etc)	//

require_once("vcl/vcl.inc.php");
//Includes
require_once("conexao_principal.php");
//*** Valida a Sessao ***
require_once("includes/valida_sessao.inc.php");
require_once("includes/inverte_data_amd_to_dma.fnc.php");
require_once("includes/inverte_data_dma_to_amd.fnc.php");

//*** Obtem as Variaveis ***
$boleto_tipo = $_REQUEST['boleto_tipo'];
$boleto_cobranca = $_REQUEST['boleto_cobranca'];
$boleto_nfe = $_REQUEST['boleto_nfe'];
$boleto_programada = $_REQUEST['boleto_programada'];
$boleto_status = $_REQUEST['boleto_status'];

//*** INCIO - Busca as Informacoes da Nota Fiscal para a Emissao do Boleto ***

$nro_conexao = mysql_connect("localhost", "root", "liberar7777");
$res_conexao = mysql_select_db("mgt_managertex", $nro_conexao);

if(trim($boleto_programada) == "0")
{
   //*** Busca a NF ***
   $Comando_SQL = "SELECT ";
   $Comando_SQL = $Comando_SQL . "* ";
   $Comando_SQL = $Comando_SQL . "FROM ";
   $Comando_SQL = $Comando_SQL . "mgt_notas_fiscais ";
   $Comando_SQL = $Comando_SQL . "WHERE ";
   $Comando_SQL = $Comando_SQL . "mgt_nota_fiscal_finalidade = '" . trim($boleto_tipo) . "' ";
   $Comando_SQL = $Comando_SQL . "AND ";
   $Comando_SQL = $Comando_SQL . "mgt_nota_fiscal_numero = '" . trim($boleto_nfe) . "' ";

   $SQL_Comunitario = mysql_query($Comando_SQL);

   if(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_nro_1")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_dt_vcto_1")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_vlr_1"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_nro_2")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_dt_vcto_2")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_vlr_2"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_nro_3")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_dt_vcto_3")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_vlr_3"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_nro_4")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_dt_vcto_4")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_vlr_4"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_nro_5")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_dt_vcto_5")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_vlr_5"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_nro_6")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_dt_vcto_6")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_vlr_6"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_nro_7")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_dt_vcto_7")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_vlr_7"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_nro_8")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_dt_vcto_8")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_vlr_8"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_nro_9")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_dt_vcto_9")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_vlr_9"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_nro_10")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_dt_vcto_10")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_vlr_10"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_nro_11")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_dt_vcto_11")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_vlr_11"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_nro_12")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_dt_vcto_12")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_dup_vlr_12"));
   }

   //*** Busca o Cliente ***
   $Comando_SQL = "SELECT ";
   $Comando_SQL = $Comando_SQL . "* ";
   $Comando_SQL = $Comando_SQL . "FROM ";
   $Comando_SQL = $Comando_SQL . "mgt_clientes ";
   $Comando_SQL = $Comando_SQL . "WHERE ";
   $Comando_SQL = $Comando_SQL . "mgt_cliente_codigo = '" . trim(mysql_result($SQL_Comunitario, 0, "mgt_nota_fiscal_cliente_codigo")) . "' ";
}
else
{
   //*** Busca a Programada ***
   $Comando_SQL = "SELECT ";
   $Comando_SQL = $Comando_SQL . "* ";
   $Comando_SQL = $Comando_SQL . "FROM ";
   $Comando_SQL = $Comando_SQL . "mgt_programadas ";
   $Comando_SQL = $Comando_SQL . "WHERE ";
   $Comando_SQL = $Comando_SQL . "mgt_programada_finalidade = '" . trim($boleto_tipo) . "' ";
   $Comando_SQL = $Comando_SQL . "AND ";
   $Comando_SQL = $Comando_SQL . "mgt_programada_numero = '" . trim($boleto_nfe) . "' ";

   $SQL_Comunitario = mysql_query($Comando_SQL);

   if(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_nro_1")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_dt_vcto_1")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_vlr_1"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_nro_2")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_dt_vcto_2")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_vlr_2"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_nro_3")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_dt_vcto_3")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_vlr_3"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_nro_4")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_dt_vcto_4")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_vlr_4"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_nro_5")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_dt_vcto_5")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_vlr_5"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_nro_6")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_dt_vcto_6")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_vlr_6"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_nro_7")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_dt_vcto_7")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_vlr_7"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_nro_8")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_dt_vcto_8")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_vlr_8"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_nro_9")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_dt_vcto_9")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_vlr_9"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_nro_10")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_dt_vcto_10")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_vlr_10"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_nro_11")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_dt_vcto_11")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_vlr_11"));
   }
   elseif(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_nro_12")) == trim($boleto_cobranca))
   {
      $data_venc = inverte_data_amd_to_dma(trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_dt_vcto_12")));
      $valor_cobrado = trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_dup_vlr_12"));
   }

   //*** Busca o Cliente ***
   $Comando_SQL = "SELECT ";
   $Comando_SQL = $Comando_SQL . "* ";
   $Comando_SQL = $Comando_SQL . "FROM ";
   $Comando_SQL = $Comando_SQL . "mgt_clientes ";
   $Comando_SQL = $Comando_SQL . "WHERE ";
   $Comando_SQL = $Comando_SQL . "mgt_cliente_codigo = '" . trim(mysql_result($SQL_Comunitario, 0, "mgt_programada_cliente_codigo")) . "' ";
}

$SQL_Clientes = mysql_query($Comando_SQL);

//*** FINAL - Busca as Informacoes da Nota Fiscal para a Emissao do Boleto ***

// DADOS DO BOLETO PARA O SEU CLIENTE
$dias_de_prazo_para_pagamento = 0;
$taxa_boleto = 0;
$valor_cobrado = str_replace(",", ".", $valor_cobrado);
$valor_boleto = number_format($valor_cobrado + $taxa_boleto, 2, ',', '');

$dadosboleto["nosso_numero"] = $sequencia_boleto;// Nosso numero sem o DV - REGRA: Maximo de 7 caracteres!
$dadosboleto["numero_documento"] = $boleto_cobranca;// Num do pedido ou nosso numero
$dadosboleto["data_vencimento"] = $data_venc;// Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
$dadosboleto["data_documento"] = date("d/m/Y");// Data de emissao do Boleto
$dadosboleto["data_processamento"] = date("d/m/Y");// Data de processamento do boleto (opcional)
$dadosboleto["valor_boleto"] = $valor_boleto;// Valor do Boleto - REGRA: Com virgula e sempre com duas casas depois da virgula

// DADOS DO SEU CLIENTE
$dadosboleto["sacado"] = trim(mysql_result($SQL_Clientes, 0, "mgt_cliente_razao_social"));
$dadosboleto["endereco1"] = trim(mysql_result($SQL_Clientes, 0, "mgt_cliente_endereco_cobranca")) . " " . trim(mysql_result($SQL_Clientes, 0, "mgt_cliente_complemento_cobranca")) . " - " . trim(mysql_result($SQL_Clientes, 0, "mgt_cliente_bairro_cobranca"));
$dadosboleto["endereco2"] = trim(mysql_result($SQL_Clientes, 0, "mgt_cliente_cidade_cobranca")) . " - " . trim(mysql_result($SQL_Clientes, 0, "mgt_cliente_estado_cobranca")) . " - CEP: " . trim(mysql_result($SQL_Clientes, 0, "mgt_cliente_cep_cobranca"));

// INFORMACOES PARA O CLIENTE
$dadosboleto["demonstrativo1"] = "Pagamento de Servicos Prestados";
$dadosboleto["demonstrativo2"] = "Referente ao Docto.: " . trim($boleto_nfe);
$dadosboleto["demonstrativo3"] = "";
$dadosboleto["instrucoes1"] = "Apos 1 dia Cobrar mora diaria de R$ " . number_format((($valor_cobrado * 0.30) / 100), 2, ',', '');
$dadosboleto["instrucoes2"] = "Apos 1 dia Cobrar R$ " . number_format((($valor_cobrado * 2) / 100), 2, ',', '') . " de multa";
$dadosboleto["instrucoes3"] = "";
$dadosboleto["instrucoes4"] = "PROTESTAR APOS 05 DIAS";

// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
$dadosboleto["quantidade"] = "";
$dadosboleto["valor_unitario"] = "";
$dadosboleto["aceite"] = "N";
$dadosboleto["especie"] = "REAL";
$dadosboleto["especie_doc"] = "DM";

// ---------------------- DADOS FIXOS DE CONFIGURACAO DO SEU BOLETO --------------- //

// DADOS PERSONALIZADOS - SANTANDER BANESPA
$dadosboleto["codigo_cliente"] = "0237108";// Codigo do Cliente (PSK) (Somente 7 digitos)
$dadosboleto["ponto_venda"] = "2226-8";// Ponto de Venda = Agencia
$dadosboleto["carteira"] = "102";// Cobranca Simples - SEM Registro
$dadosboleto["carteira_descricao"] = "102 - COBRANCA SIMPLES";// Descricao da Carteira

// SEUS DADOS
$dadosboleto["identificacao"] = $_SESSION['login_empresa'];
$dadosboleto["cpf_cnpj"] = trim($_SESSION['login_cnpj']);
$dadosboleto["endereco"] = trim($_SESSION['login_endereco']) . ", " . trim($_SESSION['login_nro']) . " " . trim($_SESSION['login_complemento']) . " - " . trim($_SESSION['login_bairro']);
$dadosboleto["cidade_uf"] = trim($_SESSION['login_cidade']) . " - " . trim($_SESSION['login_estado']);
$dadosboleto["cedente"] = trim($_SESSION['login_razao']);

// NAO ALTERAR!
include("includes/funcoes_santander_banespa.php");
include("includes/layout_santander_banespa.php");
?>