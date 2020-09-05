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
use_unit("styles.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Definicao de classe
class mgtnfestatus extends Page
{
   public $Estilo_Pagina = null;
   public $area_sistema = null;
   public $GroupBox3 = null;
   public $bt_fechar = null;
   public $bt_enviar = null;
   public $GroupBox2 = null;
   public $listagem_erros = null;
   public $MSG_Erro_Superior = null;

   function bt_enviarClick($sender, $params)
   {
      require_once("includes/rotinas_gerais.inc.php");
      require_once("includes/tabelas_ibge.fnc.php");
      require_once("includes/assinadorTEX.inc.php");

      //Declaracao de Variaveis
      $tipo_ambiente = $_SESSION['login_nfe_ambiente'];// 1 - Producao || 2 - Homologacao
      $cnpj_padrao = completa_zeros_retira_caracter($_SESSION['login_cnpj'], 14);
      $senha_nfe = $_SESSION['login_nfe_senha'];
      $status_servico = false;

      //*******************************************************************
      //*** INICIO - Verifica o Status do Servico com a Receita Federal ***
      //*******************************************************************

      //*** versao do encoding xml ***
      $statusDom = new DOMDocument('1.0', 'UTF-8');

      //*** retirar os espacos em branco ***
      $statusDom->preserveWhiteSpace = false;
      //*** gerar o codigo ***
      $statusDom->formatOutput = false; // Se True Prevalece a Formatacao com Estrutura (Pulando Linha e Espacos).

      //*** criando o no principal (Raiz) ***
      //*** Cabeca do XML ***

      $fp01 = $statusDom->createElement('consStatServ');

      //*** Adiciona Atributo ***
      $fp01->setAttribute('xmlns', 'http://www.portalfiscal.inf.br/nfe');
      $fp01->setAttribute('versao', '3.10');

      //*** Criando os Itens Secundarios (Nos) ***
      $fp03 = $statusDom->createElement('tpAmb', $tipo_ambiente);
      $fp04 = $statusDom->createElement('cUF', '35');
      $fp05 = $statusDom->createElement('xServ', 'STATUS');

      //*** Dados da Verificacao de Status para o XML ***
      //*** Gravando os Nos ***
      $fp01->appendChild($fp03);
      $fp01->appendChild($fp04);
      $fp01->appendChild($fp05);

      //*** Fecha a Raiz ***
      $statusDom->appendChild($fp01);

      //*** Salvando o XML ***
      $statusDom->save('nfe/consStatServ.xml');

      //*** Verifica a Validacao do Schema ***
      $validacao = validaXML('nfe/consStatServ.xml', 'validadores/consStatServ_v3.10.xsd');

      if($validacao["status"] == '1')
      {
         //*** INICIO - Se Conecta com o Servidor e Envia o XML ***

         //*** Inicia a Conexao com o Servidor WSDL ***

         if($tipo_ambiente == 1)
         {
            $servidor_wsdl = 'https://nfe.fazenda.sp.gov.br/ws/nfestatusservico2.asmx';
         }
         else
         {
            $servidor_wsdl = 'https://homologacao.nfe.fazenda.sp.gov.br/ws/nfestatusservico2.asmx';
         }

         if(substr(trim($_SERVER['SystemRoot']), 0, 1) == 'C')
         {
            $certificado = trim($_SESSION['login_caminho_base']) . "certificados\\nfe.pem";
         }
         else
         {
            $certificado = trim($_SESSION['login_caminho_base']) . "certificados/nfe.pem";
         }

         //*** Prepara o Arquivo XML para o Envio SOAP ***

         $envio_xml = simplexml_load_file('nfe/consStatServ.xml');
         $cabecalho = '<nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/NfeStatusServico2"><versaoDados>3.10</versaoDados><cUF>35</cUF></nfeCabecMsg>';
         $dados = '<nfeDadosMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/NfeStatusServico2">' . trim(str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $envio_xml->asXML())) . '</nfeDadosMsg>';
         $metodo = 'nfeStatusServicoNF2';

         //*** Envia e Retorna a Conexao com o Servidor WSDL ***

         $retorno_xml_SOAP = enviaXML_SOAP($servidor_wsdl, $certificado, $cabecalho, $dados, $metodo);
         $retorno_xml = $retorno_xml_SOAP["mensagem"];

         //*** Prepara o Arquivo de Retorno ***
         //*** Retira a Sujeira do Cabecalho e Rodape ***
         $retorno_xml = str_replace('&lt;', '<', $retorno_xml);
         $retorno_xml = str_replace('&gt;', '>', $retorno_xml);
         $retorno_xml = str_replace('<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema"><soap:Header><nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/NfeStatusServico2"><cUF>35</cUF><versaoDados>3.10</versaoDados></nfeCabecMsg></soap:Header><soap:Body><nfeStatusServicoNF2Result xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/NfeStatusServico2">', '', $retorno_xml);
         $retorno_xml = str_replace('</soap:Body></soap:Envelope>', '', $retorno_xml);
         $retorno_xml = str_replace('</nfeStatusServicoNF2Result>', '', $retorno_xml);
         $retorno_xml = str_replace('utf-8', 'UTF-8', $retorno_xml);

         //*** Grava o XML de Retorno ***
         $grava_retorno_xml = fopen('nfe/retConsStatServ.xml', "w");
         fwrite($grava_retorno_xml, $retorno_xml);
         fclose($grava_retorno_xml);

         //*** Le o Retorno do XML e Verifica o Status ***
         $ler_retorno_xml = simplexml_load_file('nfe/retConsStatServ.xml');
         $MSG_Erro = utf8_decode($ler_retorno_xml->xMotivo);

         $this->MSG_Erro_Superior->Caption = $MSG_Erro;

         if(trim($MSG_Erro) == 'Servico em Operacao')
         {
            $status_servico = true;

            $this->listagem_erros->Clear();
            $this->listagem_erros->AddLine('--- Retorno do Servidor ---');
            $this->listagem_erros->AddLine(' ');
            $this->listagem_erros->AddLine($retorno_xml_SOAP["status"]);
            $this->listagem_erros->AddLine(' ');
            $this->listagem_erros->AddLine(utf8_decode($ler_retorno_xml->xMotivo));
         }
         else
         {
            $status_servico = false;

            $this->listagem_erros->Clear();
            $this->listagem_erros->AddLine('--- Erros Encontrados ---');
            $this->listagem_erros->AddLine(' ');
            $this->listagem_erros->AddLine($retorno_xml_SOAP["status"]);
            $this->listagem_erros->AddLine(' ');
            $this->listagem_erros->AddLine(utf8_decode($ler_retorno_xml->xMotivo));

            $MSG_Erro = "ATENCAO: Erros Encontrados.";

            $this->MSG_Erro_Superior->Caption = $MSG_Erro;

            if(file_exists('nfe/retConsStatServ.xml'))
            {
               unlink('nfe/retConsStatServ.xml');
            }
         }

         //*** FINAL - Se Conecta com o Servidor e Envia o XML ***

      }
      else
      {
        $status_servico = false;

        $exibe_erro = trim($validacao["error"]);
        $exibe_erro = str_replace("'", "", $exibe_erro);
        $exibe_erro = str_replace('"', '', $exibe_erro);

        $this->MSG_Erro_Superior->Caption = "XML de Verificacao de Status do Servidor Invalidado, verifique os erros abaixo.";

        $this->listagem_erros->Clear();
        $this->listagem_erros->AddLine('--- (Status do Servidor) Erros Encontrados ---');
        $this->listagem_erros->AddLine('');
        $this->listagem_erros->AddLine($exibe_erro);

        if(file_exists('nfe/consStatServ.xml'))
        {
           unlink('nfe/consStatServ.xml');
        }
      }
   }

   function mgtnfestatusCreate($sender, $params)
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

      //***************************************************
      //*** INICIO - Limpa todos os Dados do Formulario ***
      //***************************************************

      error_reporting(0);
      ini_set('display_errors', '1');

      //**************************************************
      //*** FINAL - Limpa todos os Dados do Formulario ***
      //**************************************************
   }

   function bt_fecharClick($sender, $params)
   {
         $this->listagem_erros->Clear();
         $this->MSG_Erro_Superior->Caption = '';

         redirect('frame_corpo.php');
   }

   function mgtnfestatusJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $mgtnfestatus;

//Cria o formulario
$mgtnfestatus = new mgtnfestatus($application);

//Ler do arquivo de recursos
$mgtnfestatus->loadResource(__FILE__);

//Mostrar o formulario
$mgtnfestatus->show();

?>