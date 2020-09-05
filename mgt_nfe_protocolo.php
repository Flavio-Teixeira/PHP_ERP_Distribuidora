<?php
/*
+------------------------------------------------+
| Desenvolvido Por:                              |
| DATATEX INFORMATICA E SERVICOS LTDA            |
| System of the New Generation                   |
|                                                |
| http://www.datatex.com.br                      |
| sistemas@datatex.com.br                        |
| Fone: 55 11 2896-4707                          |
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
class mgtnfeprotocolo extends Page
{
   public $nfe_ano = null;
   public $Label4 = null;
   public $nfe_mes = null;
   public $Label3 = null;
   public $status_servico = null;
   public $cnpj_padrao = null;
   public $tipo_ambiente = null;
   public $Estilo_Pagina = null;
   public $nfe_nro_protocolo = null;
   public $Label2 = null;
   public $nfe_inicial = null;
   public $Label1 = null;
   public $GroupBox3 = null;
   public $bt_fechar = null;
   public $bt_enviar = null;
   public $GroupBox2 = null;
   public $listagem_erros = null;
   public $MSG_Erro_Superior = null;
   public $GroupBox1 = null;
   public $area_sistema = null;
   function nfe_anoJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfeprotocolo.nfe_ano
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Traco ***

   <?php

   }

   function nfe_mesJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfeprotocolo.nfe_mes
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Traco ***

   <?php

   }

   function nfe_anoJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfeprotocolo.bt_enviar.focus();
     return false;
   }

   <?php

   }

   function nfe_mesJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfeprotocolo.nfe_ano.focus();
     return false;
   }

   <?php

   }

   function bt_enviarClick($sender, $params)
   {
      libxml_use_internal_errors(true);

      require_once("includes/rotinas_gerais.inc.php");
      require_once("includes/tabelas_ibge.fnc.php");
      require_once("includes/assinadorTEX.inc.php");

      $this->listagem_erros->Clear();
      $this->nfe_nro_protocolo->Text = '';

      if($this->nfe_inicial->Text <= 0 or $this->nfe_mes->Text <= 0 or $this->nfe_ano->Text <= 0)
      {
         $this->MSG_Erro_Superior->Caption = 'Para continuar e necessario informar o Numero da Nota Fiscal, o Mes e o Ano.';
      }
      else
      {
         //Declaracao de Variaveis
         $tipo_ambiente = $_SESSION['login_nfe_ambiente'];// 1 - Producao || 2 - Homologacao
         $cnpj_padrao = completa_zeros_retira_caracter($_SESSION['login_cnpj'], 14);
         $senha_nfe = $_SESSION['login_nfe_senha'];
         $serie_nfe = $_SESSION['login_nfe_serie'];// Serie da Nota Fiscal
         $status_servico = false;

         $this->tipo_ambiente->Value = $tipo_ambiente;
         $this->cnpj_padrao->Value = $cnpj_padrao;

         //*******************************************************************
         //*** INICIO - Verifica o Status do Servico com a Receita Federal ***
         //*******************************************************************

         //*** Verifica o Status do Servico no Servidor de SOAP ***
         $status_servico_SOAP = status_servidor_SOAP($tipo_ambiente);
         $status_servico = $status_servico_SOAP["status"];

         if(!$status_servico)
         {
            $this->MSG_Erro_Superior->Caption = "ATENCAO: Erros encontrados.";
            $this->listagem_erros->Clear();
            $this->listagem_erros->AddLine('--- Erros Encontrados ---');
            $this->listagem_erros->AddLine(' ');
            $this->listagem_erros->AddLine($status_servico_SOAP["mensagem"]);
         }

         //******************************************************************
         //*** FINAL - Verifica o Status do Servico com a Receita Federal ***
         //******************************************************************
      }

      if($status_servico)
      {
         require_once("includes/inverte_data_amd_to_dma.fnc.php");
         require_once("includes/inverte_data_dma_to_amd.fnc.php");

         //*** versao do encoding xml ***
         $geraDom = new DOMDocument('1.0', 'UTF-8');

         //*** retirar os espacos em branco ***
         $geraDom->preserveWhiteSpace = false;
         //*** gerar o codigo ***
         $geraDom->formatOutput = false;// Se True Prevalece a Formatacao com Estrutura (Pulando Linha e Espacos).

         //*** criando o no principal (Raiz) ***
         //*** Cabeca do XML ***

         $ep01 = $geraDom->createElement('consSitNFe');
         //*** Adiciona Atributo ***
         $ep01->setAttribute('xmlns', 'http://www.portalfiscal.inf.br/nfe');
         $ep01->setAttribute('versao', '3.10');

         //*** Criando os Itens Secundarios (Nos) ***

         //*** INICIO - Chave de Acesso ***
         $chave_acesso_nro = chave_acesso_protocolo('35', $cnpj_padrao, trim($this->nfe_inicial->Text), trim($this->nfe_ano->Text), trim($this->nfe_mes->Text), $serie_nfe);
         $chave_acesso_nro = trim($chave_acesso_nro);

         $digito_chave_acesso_nro = substr($chave_acesso_nro, (strlen($chave_acesso_nro) - 1), 1);
         $digito_chave_acesso_nro = trim($digito_chave_acesso_nro);
         //*** FINAL - Chave de Acesso ***

         $ep03 = $geraDom->createElement('tpAmb', $tipo_ambiente);
         $ep04 = $geraDom->createElement('xServ', 'CONSULTAR');
         $ep05 = $geraDom->createElement('chNFe', $chave_acesso_nro);

         //*** Gera o XML ***

         $ep01->appendChild($ep03);
         $ep01->appendChild($ep04);
         $ep01->appendChild($ep05);
         $geraDom->appendChild($ep01);

         //*** Salvando o XML ***
         $geraDom->save('nfe/consSitNFe.xml');

         //*** Verifica a Validacao do Schema ***
         $validacao = validaXML('nfe/consSitNFe.xml', 'validadores/consSitNFe_v3.10.xsd');

         if($validacao["status"] == '1')
         {
            //*** INICIO - Se Conecta com o Servidor e Envia o XML ***

            //*** Inicia a Conexao com o Servidor WSDL ***

            if($tipo_ambiente == 1)
            {
               $servidor_wsdl = 'https://nfe.fazenda.sp.gov.br/ws/nfeconsulta2.asmx';
            }
            else
            {
               $servidor_wsdl = 'https://homologacao.nfe.fazenda.sp.gov.br/ws/nfeconsulta2.asmx';
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

            $envio_xml = simplexml_load_file('nfe/consSitNFe.xml');
            $cabecalho = '<nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/NfeConsulta2"><cUF>35</cUF><versaoDados>3.10</versaoDados></nfeCabecMsg>';
            $dados = '<nfeDadosMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/NfeConsulta2">' . trim(str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $envio_xml->asXML())) . '</nfeDadosMsg>';
            $metodo = 'nfeConsultaNF2';

            //*** Envia e Retorna a Conexao com o Servidor WSDL ***

            $retorno_xml_SOAP = enviaXML_SOAP($servidor_wsdl, $certificado, $cabecalho, $dados, $metodo);
            $retorno_xml = $retorno_xml_SOAP["mensagem"];

            //*** Prepara o Arquivo de Retorno ***
            //*** Retira a Sujeira do Cabecalho e Rodape ***
            $retorno_xml = str_replace('&lt;', '<', $retorno_xml);
            $retorno_xml = str_replace('&gt;', '>', $retorno_xml);
            $retorno_xml = str_replace('<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema"><soap:Header><nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/NfeConsulta2"><cUF>35</cUF><versaoDados>3.10</versaoDados></nfeCabecMsg></soap:Header><soap:Body>', '', $retorno_xml);
            $retorno_xml = str_replace('</soap:Body></soap:Envelope>', '', $retorno_xml);

            $retorno_xml = str_replace('<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">', '', $retorno_xml);
            $retorno_xml = str_replace('<soap:Header>', '', $retorno_xml);
            $retorno_xml = str_replace('</soap:Header>', '', $retorno_xml);
            $retorno_xml = str_replace('<soap:Body>', '', $retorno_xml);
            $retorno_xml = str_replace('</soap:Body>', '', $retorno_xml);
			$retorno_xml = str_replace('</soap:Envelope>', '', $retorno_xml);

			$retorno_xml = str_replace('<nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/NfeConsulta2">', '', $retorno_xml);
			$retorno_xml = str_replace('<cUF>35</cUF>', '', $retorno_xml);
			$retorno_xml = str_replace('<versaoDados>3.10</versaoDados>', '', $retorno_xml);
			$retorno_xml = str_replace('</nfeCabecMsg>', '', $retorno_xml);

            $retorno_xml = str_replace('utf-8', 'UTF-8', $retorno_xml);

            //*** Grava o XML de Retorno ***
            $grava_retorno_xml = fopen('nfe/retconsSitNFe.xml', "w");
            fwrite($grava_retorno_xml, $retorno_xml);
            fclose($grava_retorno_xml);

            //***********************************************
            //*** Le o Retorno do XML e Verifica o Status ***
            //***********************************************

            $ler_retorno_nfe_xml = simplexml_load_file('nfe/retconsSitNFe.xml');

            $MSG_Erro = utf8_decode($ler_retorno_nfe_xml->retConsSitNFe->xMotivo);

			$this->MSG_Erro_Superior->Caption = $MSG_Erro;
            $this->nfe_nro_protocolo->Text = utf8_decode($ler_retorno_nfe_xml->retConsSitNFe->protNFe->infProt->nProt);

            //*** Utilizar esta opcao para verificar erros do XML ***
            //print_r($ler_retorno_nfe_xml);

            $this->listagem_erros->Clear();

            if(trim($this->nfe_nro_protocolo->Text) <> '')
            {
               $this->listagem_erros->AddLine('--- Consulta de Protocolo Realizada Com Sucesso ---');
               $this->listagem_erros->AddLine(' ');

               $this->listagem_erros->AddLine('Protocolo: ' . $ler_retorno_nfe_xml->retConsSitNFe->protNFe->infProt->nProt);
               $this->listagem_erros->AddLine('Chave de Acesso: ' . $ler_retorno_nfe_xml->retConsSitNFe->protNFe->infProt->chNFe);
               $this->listagem_erros->AddLine('Data e Hora de Recebimento: ' . $ler_retorno_nfe_xml->retConsSitNFe->protNFe->infProt->dhRecbto);
               $this->listagem_erros->AddLine('Digest Value:  ' . $ler_retorno_nfe_xml->retConsSitNFe->protNFe->infProt->digVal);
               $this->listagem_erros->AddLine(' ');
			   $this->listagem_erros->AddLine('Status de Retorno: ' . $ler_retorno_nfe_xml->retConsSitNFe->protNFe->infProt->cStat);
               $this->listagem_erros->AddLine('Motivo: ' . utf8_decode($ler_retorno_nfe_xml->retConsSitNFe->xMotivo));

			   $this->listagem_erros->AddLine(' ');
			   $this->listagem_erros->AddLine(' ');
			   $this->listagem_erros->AddLine(' ');
			   $this->listagem_erros->AddLine('ATENCAO:');
			   $this->listagem_erros->AddLine('Voce tambem pode consultar os dados');
			   $this->listagem_erros->AddLine('da NF-e pelo link: http://www.nfe.fazenda.gov.br');
			   $this->listagem_erros->AddLine('Acessando a opcao SERVICOS e CONSULTAR NF-E COMPLETA');
            }
			else
            {
               $this->listagem_erros->AddLine('--- Consulta de Protocolo Realizada ---');
               $this->listagem_erros->AddLine(' ');

               $this->listagem_erros->AddLine('Chave de Acesso: ' . $ler_retorno_nfe_xml->retConsSitNFe->chNFe);
			   $this->listagem_erros->AddLine(' ');
               $this->listagem_erros->AddLine('Status de Retorno: ' . $ler_retorno_nfe_xml->retConsSitNFe->cStat);
               $this->listagem_erros->AddLine('Motivo: ' . utf8_decode($ler_retorno_nfe_xml->retConsSitNFe->xMotivo));

			   $this->listagem_erros->AddLine(' ');
			   $this->listagem_erros->AddLine(' ');
			   $this->listagem_erros->AddLine(' ');
			   $this->listagem_erros->AddLine('ATENCAO:');
			   $this->listagem_erros->AddLine('Voce tambem pode consultar os dados');
			   $this->listagem_erros->AddLine('da NF-e pelo link: http://www.nfe.fazenda.gov.br');
			   $this->listagem_erros->AddLine('Acessando a opcao SERVICOS e CONSULTAR NF-E COMPLETA');
            }

            if(file_exists('nfe/consSitNFe.xml'))
            {
              unlink('nfe/consSitNFe.xml');
            }

            if(file_exists('nfe/retconsSitNFe.xml'))
            {
              unlink('nfe/retconsSitNFe.xml');
            }
         }
         else
         {
            $exibe_erro = trim($validacao["error"]);
            $exibe_erro = str_replace("'", "", $exibe_erro);
            $exibe_erro = str_replace('"', '', $exibe_erro);

            $this->MSG_Erro_Superior->Caption = "XML de Verificacao de Status do Servidor Invalidado, verifique os erros abaixo.";

            $this->listagem_erros->Clear();
            $this->listagem_erros->AddLine('--- (Status do Servidor) Erros Encontrados ---');
            $this->listagem_erros->AddLine('');
            $this->listagem_erros->AddLine($exibe_erro);

            if(file_exists('nfe/consSitNFe.xml'))
            {
              unlink('nfe/consSitNFe.xml');
            }

            if(file_exists('nfe/retconsSitNFe.xml'))
            {
              unlink('nfe/retconsSitNFe.xml');
            }
         }
      }
   }

   function bt_fecharClick($sender, $params)
   {
         $this->nfe_inicial->Text = '';
         $this->nfe_ano->Text = '';
         $this->nfe_mes->Text = '';
         $this->MSG_Erro_Superior->Caption = '';
         $this->nfe_nro_protocolo->Text = '';
         $this->listagem_erros->Clear();

		 redirect('frame_corpo.php');
   }

   function mgtnfeprotocoloCreate($sender, $params)
   {
      //*************************************
      //*** INICIO - Validacao de Leitura ***
      //*************************************

      if($_SESSION['login_permissao_2'] == "2")
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

   function nfe_inicialJSKeyUp($sender, $params)
   {

?>
       //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfeprotocolo.nfe_inicial
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Traco ***

<?php

   }

   function nfe_inicialJSKeyPress($sender, $params)
   {

?>
       //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfeprotocolo.nfe_mes.focus();
     return false;
   }

<?php

   }

   function mgtnfeprotocoloJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $mgtnfeprotocolo;

//Cria o formulario
$mgtnfeprotocolo = new mgtnfeprotocolo($application);

//Ler do arquivo de recursos
$mgtnfeprotocolo->loadResource(__FILE__);

//Mostrar o formulario
$mgtnfeprotocolo->show();

?>