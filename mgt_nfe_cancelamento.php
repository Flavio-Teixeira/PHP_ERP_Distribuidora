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
class mgtnfecancelamento extends Page
{
   public $nfe_nro_chave_acesso = null;
   public $Label6 = null;
   public $nfe_impressao_protocolo = null;
   public $status_servico = null;
   public $cnpj_padrao = null;
   public $tipo_ambiente = null;
   public $Estilo_Pagina = null;
   public $GroupBox3 = null;
   public $bt_imprimir = null;
   public $bt_fechar = null;
   public $bt_enviar = null;
   public $GroupBox2 = null;
   public $listagem_erros = null;
   public $MSG_Erro_Superior = null;
   public $nfe_nro_protocolo = null;
   public $nfe_ano = null;
   public $Label4 = null;
   public $Label5 = null;
   public $nfe_mes = null;
   public $Label2 = null;
   public $GroupBox1 = null;
   public $Label3 = null;
   public $Label1 = null;
   public $nfe_justificativa = null;
   public $nfe_inicial = null;
   public $area_sistema = null;
   public $Label7 = null;
   public $mgt_nota_fiscal_data_emissao = null;
   public $Label10 = null;
   public $mgt_hora_entrega = null;
   public $Label8 = null;
   public $mgt_sequencia_evento = null;

   function nfe_nro_chave_acessoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfecancelamento.mgt_nota_fiscal_data_emissao.focus();
     return false;
   }

      <?php

   }

   function nfe_nro_chave_acessoJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfecancelamento.nfe_nro_chave_acesso
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


   function mgtnfecancelamentoCreate($sender, $params)
   {
      //*************************************
      //*** INICIO - Validacao de Leitura ***
      //*************************************

      if($_SESSION['login_permissao_2'] == "2")
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

   function bt_enviarClick($sender, $params)
   {
      libxml_use_internal_errors(true);

      require_once("includes/rotinas_gerais.inc.php");
      require_once("includes/tabelas_ibge.fnc.php");
      require_once("includes/assinadorTEX.inc.php");

      $this->MSG_Erro_Superior->Caption = '';
      $this->listagem_erros->Clear();

      if(($this->nfe_inicial->Text == '') or ($this->nfe_mes->Text == '') or ($this->nfe_ano->Text == '') or (trim($this->nfe_justificativa->Text) == '') or (trim($this->nfe_nro_chave_acesso->Text) == ''))
      {
         $this->MSG_Erro_Superior->Caption = 'Para continuar e necessario informar o Numero da Nota, Mes, Ano, Numero do Protocolo, Chave de Acesso e a Justificativa.';
      }
      elseif(strlen(trim($this->nfe_justificativa->Text)) < 15)
      {
         $this->MSG_Erro_Superior->Caption = 'A Justificativa deve ter no minimo 15 letras.';
      }
      elseif((substr(trim($this->nfe_nro_chave_acesso->Text), (strlen(trim($this->nfe_nro_chave_acesso->Text)) - 6), 5) <> completa_zeros_retira_caracter(trim($this->nfe_inicial->Text), 5)))
      {
         $this->MSG_Erro_Superior->Caption = 'Numero da NFe a ser Cancelada Difere da Chave de Acesso.';
      }
      else
      {
         //Declaracao de Variaveis
         $tipo_ambiente = $_SESSION['login_nfe_ambiente'];// 1 - Producao || 2 - Homologacao
         $cnpj_padrao = completa_zeros_retira_caracter($_SESSION['login_cnpj'], 14);
         $senha_nfe = $_SESSION['login_nfe_senha'];
         $status_servico = false;

         $this->tipo_ambiente->Value = $tipo_ambiente;
         $this->cnpj_padrao->Value = $cnpj_padrao;

         //*******************************************************************
         //*** INICIO - Verifica o Status do Servico com a Receita Federal ***
         //*******************************************************************

         //*** Verifica o Status do Servico no Servidor de SOAP ***
         $status_servico_SOAP = status_servidor_SOAP($tipo_ambiente);
         $status_servico = $status_servico_SOAP["status"];

         if( ! $status_servico)
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

         $hp01 = $geraDom->createElement('envEvento');
         //*** Adiciona Atributo ***
         $hp01->setAttribute('xmlns', 'http://www.portalfiscal.inf.br/nfe');
         $hp01->setAttribute('versao', '1.00');

         //*** Criando os Itens Secundarios (Nos) ***
         //*** Cabeca do Cancelamento ***
         $hp03 = $geraDom->createElement('idLote', $this->nfe_inicial->Text);

         $hp04 = $geraDom->createElement('evento');
         //*** Adiciona Atributo ***
         $hp04->setAttribute('xmlns', 'http://www.portalfiscal.inf.br/nfe');
         $hp04->setAttribute('versao', '1.00');

         //*** INICIO - Chave de Acesso ***
         $chave_acesso_nro = trim($this->nfe_nro_chave_acesso->Text);
         //*** FINAL - Chave de Acesso ***

         $hp06 = $geraDom->createElement('infEvento');
         //*** Adiciona Atributo ***
         $hp06->setAttribute('Id', 'ID110111' . $chave_acesso_nro . '0' . trim($this->mgt_sequencia_evento->Text));

         $hp08 = $geraDom->createElement('cOrgao', '35');
         $hp09 = $geraDom->createElement('tpAmb', $tipo_ambiente);
         $hp10 = $geraDom->createElement('CNPJ', $cnpj_padrao);
         $hp12 = $geraDom->createElement('chNFe', $chave_acesso_nro);
         $hp13 = $geraDom->createElement('dhEvento', trim(inverte_data_dma_to_amd($this->mgt_nota_fiscal_data_emissao->Text)) . 'T' . trim($this->mgt_hora_entrega->Text) . trim(date("P", time())));
         $hp14 = $geraDom->createElement('tpEvento', '110111');
         $hp15 = $geraDom->createElement('nSeqEvento', trim($this->mgt_sequencia_evento->Text));
         $hp16 = $geraDom->createElement('verEvento', '1.00');

         $hp17 = $geraDom->createElement('detEvento');
         //*** Adiciona Atributo ***
         $hp17->setAttribute('versao', '1.00');

         $hp19 = $geraDom->createElement('descEvento', 'Cancelamento');
         $hp20 = $geraDom->createElement('nProt', trim($this->nfe_nro_protocolo->Text));
         $hp21 = $geraDom->createElement('xJust', retira_acentos($this->nfe_justificativa->Text, 0));

         //*** Monta os Grupos XML ***

         $hp17->appendChild($hp19);
         $hp17->appendChild($hp20);
         $hp17->appendChild($hp21);

         $hp06->appendChild($hp08);
         $hp06->appendChild($hp09);
         $hp06->appendChild($hp10);
         $hp06->appendChild($hp12);
         $hp06->appendChild($hp13);
         $hp06->appendChild($hp14);
         $hp06->appendChild($hp15);
         $hp06->appendChild($hp16);
         $hp06->appendChild($hp17);

         $hp04->appendChild($hp06);

         $hp01->appendChild($hp03);
         $hp01->appendChild($hp04);

         //*** Gera o XML ***

         $geraDom->appendChild($hp01);

         //*** Salvando o XML ***
         $geraDom->save('nfe/entrada/evtCancNFe_' . trim($this->nfe_inicial->Text) . '.xml');

         //**********************************
         //*** INICIO - Assinatura do XML ***
         //**********************************

         if(substr(trim($_SERVER['SystemRoot']), 0, 1) == 'C')
         {
           $certificado = trim($_SESSION['login_caminho_base']) . "certificados\\nfe.pem";
         }
         else
         {
           $certificado = trim($_SESSION['login_caminho_base']) . "certificados/nfe.pem";
         }

         assinaXML('nfe/entrada/evtCancNFe_' . trim($this->nfe_inicial->Text) . '.xml', 'nfe/saida/evtCancNFe_' . trim($this->nfe_inicial->Text) . '_sign.xml', 'infEvento', $certificado);

         //*** Coloca a Assinatura no Local Certo ***
         $nome_arquivo_cancelamento = 'nfe/saida/evtCancNFe_' . trim($this->nfe_inicial->Text) . '_sign.xml';
         $arquivo_cancelamento = fopen($nome_arquivo_cancelamento, 'r');
         $conteudo_arquivo_cancelamento = fread($arquivo_cancelamento, filesize($nome_arquivo_cancelamento));
         fclose($arquivo_cancelamento);

         $conteudo_arquivo_cancelamento = str_replace('</evento>', '', $conteudo_arquivo_cancelamento);
         $conteudo_arquivo_cancelamento = str_replace('</Signature>', '</Signature></evento>', $conteudo_arquivo_cancelamento);

         //*** Grava o Arquivo com a Estrutura no Local Certo ***
         $nome_arquivo_cancelamento = 'nfe/saida/evtCancNFe_' . trim($this->nfe_inicial->Text) . '_sign.xml';
         $arquivo_cancelamento = fopen($nome_arquivo_cancelamento, 'w');
         fwrite($arquivo_cancelamento, trim($conteudo_arquivo_cancelamento));
         fclose($arquivo_cancelamento);

         $validacao = validaXML('nfe/saida/evtCancNFe_' . trim($this->nfe_inicial->Text) . '_sign.xml', 'validadores/cancelamento/envEventoCancNFe_v1.00.xsd');

         if($validacao["status"] == '1')
         {
            //*** INICIO - Se Conecta com o Servidor e Envia o XML ***

            //*** Inicia a Conexao com o Servidor WSDL ***

            if($tipo_ambiente == 1)
            {
               $servidor_wsdl = 'https://nfe.fazenda.sp.gov.br/ws/recepcaoevento.asmx';
            }
            else
            {
               $servidor_wsdl = 'https://homologacao.nfe.fazenda.sp.gov.br/ws/recepcaoevento.asmx';
            }

            //*** Prepara o Arquivo XML para o Envio SOAP ***

            $envio_xml = simplexml_load_file('nfe/saida/evtCancNFe_' . trim($this->nfe_inicial->Text) . '_sign.xml');
            $cabecalho = '<nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/RecepcaoEvento"><cUF>35</cUF><versaoDados>1.00</versaoDados></nfeCabecMsg>';
            $dados = '<nfeDadosMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/RecepcaoEvento">' . trim(str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $envio_xml->asXML())) . '</nfeDadosMsg>';
            $metodo = 'nfeRecepcaoEvento';

            //*** Envia e Retorna a Conexao com o Servidor WSDL ***

            $retorno_xml_SOAP = enviaXML_SOAP($servidor_wsdl, $certificado, $cabecalho, $dados, $metodo);
            $retorno_xml = $retorno_xml_SOAP["mensagem"];

            //*** Prepara o Arquivo de Retorno ***
            //*** Retira a Sujeira do Cabecalho e Rodape ***

            $retorno_xml = str_replace('&lt;', '<', $retorno_xml);
            $retorno_xml = str_replace('&gt;', '>', $retorno_xml);
            $retorno_xml = str_replace('<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema"><soap:Header><nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/RecepcaoEvento"><cUF>35</cUF><versaoDados>1.00</versaoDados></nfeCabecMsg></soap:Header><soap:Body>', '', $retorno_xml);
            $retorno_xml = str_replace('</soap:Body></soap:Envelope>', '', $retorno_xml);
            $retorno_xml = str_replace('utf-8', 'UTF-8', $retorno_xml);

            //*** Grava o XML de Retorno ***
            $grava_retorno_xml = fopen('nfe/retEvtCancNFe.xml', "w");
            fwrite($grava_retorno_xml, $retorno_xml);
            fclose($grava_retorno_xml);

            //*** Le o Retorno do XML e Verifica o Status ***
            $ler_retorno_nfe_xml = simplexml_load_file('nfe/retEvtCancNFe.xml');

            $MSG_Erro = utf8_decode($ler_retorno_nfe_xml->retEnvEvento->xMotivo);

            if(strtoupper(trim($MSG_Erro)) == 'LOTE DE EVENTO PROCESSADO')
            {
               $MSG_Erro = utf8_decode($ler_retorno_nfe_xml->retEnvEvento->retEvento->infEvento->xMotivo);
            }

            $nfe_nro_protocolo = utf8_decode($ler_retorno_nfe_xml->retEnvEvento->retEvento->infEvento->nProt);
            $nfe_status = utf8_decode($ler_retorno_nfe_xml->retEnvEvento->retEvento->infEvento->xEvento);
            $nfe_estado = utf8_decode($ler_retorno_nfe_xml->retEnvEvento->retEvento->infEvento->cOrgao);
            $nfe_recebimento = utf8_decode($ler_retorno_nfe_xml->retEnvEvento->retEvento->infEvento->dhRegEvento);
            $nfe_chave = utf8_decode($ler_retorno_nfe_xml->retEnvEvento->retEvento->infEvento->chNFe);
            $nfe_CNPJDest = utf8_decode($ler_retorno_nfe_xml->retEnvEvento->retEvento->infEvento->CNPJDest);
            $nfe_emailDest = utf8_decode($ler_retorno_nfe_xml->retEnvEvento->retEvento->infEvento->emailDest);
            $nfe_nSeqEvento = utf8_decode($ler_retorno_nfe_xml->retEnvEvento->retEvento->infEvento->nSeqEvento);

            $this->MSG_Erro_Superior->Caption = $MSG_Erro;

            //*** Utilizar esta opcao para verificar erros do XML ***
            //print_r($ler_retorno_nfe_xml);

            $this->listagem_erros->Clear();
            $this->nfe_impressao_protocolo->Value = '';

            if(trim($nfe_nro_protocolo) <> '')
            {
               $this->listagem_erros->AddLine('--- Cancelamento de Nota Fiscal Realizado Com Sucesso ---');
               $this->listagem_erros->AddLine(' ');

               $this->listagem_erros->AddLine('Nro.NFe: ' . trim($this->nfe_inicial->Text));
               $this->listagem_erros->AddLine('Protocolo: ' . $nfe_nro_protocolo);
               $this->listagem_erros->AddLine('Sequencia do Evento: ' . $nfe_nSeqEvento);
               $this->listagem_erros->AddLine('Status de Retorno: ' . $nfe_status);
               $this->listagem_erros->AddLine('Nro. da UF: ' . $nfe_estado);
               $this->listagem_erros->AddLine('Data e Hora de Processamento/Recebimento: ' . $nfe_recebimento);
               $this->listagem_erros->AddLine('Chave de Acesso: ' . $nfe_chave);
               $this->listagem_erros->AddLine('CNPJ/CPF do Destinatario: ' . $nfe_CNPJDest);
               $this->listagem_erros->AddLine('E-Mail do Destinatario: ' . $nfe_emailDest);

               $retorno_protocolo = '<HTML><HEAD><TITLE>Protocolo de Cancelamento de Nota Fiscal</TITLE></HEAD><BODY>';
               $retorno_protocolo .= '--- Protocolo de Cancelamento de Nota Fiscal ---<br><br>';
               $retorno_protocolo .= '<B>Nro.NFe:</B> ' . trim($this->nfe_inicial->Text) . '<br>';
               $retorno_protocolo .= '<B>Protocolo:</B> ' . $nfe_nro_protocolo . '<br>';
               $retorno_protocolo .= '<B>Status de Retorno:</B> ' . $nfe_status . '<br>';
               $retorno_protocolo .= '<B>Nro. da UF:</B> ' . $nfe_estado . '<br>';
               $retorno_protocolo .= '<B>Data e Hora de Processamento/Recebimento:</B> ' . $nfe_recebimento . '<br><br>';
               $retorno_protocolo .= '<B>Chave de Acesso:</B> ' . $nfe_chave . '<br><br>';
               $retorno_protocolo .= '<B>CNPJ/CPF do Destinatario:</B> ' . $nfe_CNPJDest . '<br><br>';
               $retorno_protocolo .= '<B>E-Mail do Destinatario:</B> ' . $nfe_emailDest . '<br><br>';
               $retorno_protocolo .= '--- Transacao efetuada com Sucesso !!! ---';
               $retorno_protocolo .= '</BODY></HTML>';

               $this->nfe_impressao_protocolo->Value = $retorno_protocolo;

               //*** Grava o XML de Retorno do Protocolo ***
               copy('nfe/retEvtCancNFe.xml', 'nfe/enviado/retEvtCancNFe_' . trim($this->nfe_inicial->Text) . '.xml');
               copy('nfe/retEvtCancNFe.xml', 'nfe/entregar_cliente/cancNFe_' . trim($this->nfe_inicial->Text) . '.xml');

               $grava_protocolo_xml = fopen('nfe/enviado/nfeCancelamento.html', "w");
               fwrite($grava_protocolo_xml, $retorno_protocolo);
               fclose($grava_protocolo_xml);

               $this->bt_enviar->Enabled = false;
               $this->bt_imprimir->Enabled = true;
            }

            if(file_exists('nfe/entrada/evtCancNFe_' . trim($this->nfe_inicial->Text) . '.xml'))
            {
               unlink('nfe/entrada/evtCancNFe_' . trim($this->nfe_inicial->Text) . '.xml');
            }

            if(file_exists('nfe/saida/evtCancNFe_' . trim($this->nfe_inicial->Text) . '_sign.xml'))
            {
               unlink('nfe/saida/evtCancNFe_' . trim($this->nfe_inicial->Text) . '_sign.xml');
            }

            if(file_exists('nfe/retEvtCancNFe.xml'))
            {
               unlink('nfe/retEvtCancNFe.xml');
            }
         }
         else
         {
            $this->MSG_Erro_Superior->Caption = 'Atencao, foram encontrados erros no XML';

            $this->listagem_erros->Clear();
            $this->listagem_erros->AddLine($validacao["error"]);
         }

         //*********************************
         //*** FINAL - Assinatura do XML ***
         //*********************************
      }
   }

   function bt_imprimirClick($sender, $params)
   {
      if(trim($this->nfe_impressao_protocolo->Value) <> '')
      {
         ?>
         <!-- Abre a Tela de Protocolo de Cancelamento -->
         <script language="JavaScript">
             var pos_top = (parseInt((screen.height)/2) - 320);
             var pos_left = (parseInt((screen.width)/2) - 387);
             window.open('nfe/enviado/nfeCancelamento.html','mgt_nfe_cancelamento_nro','toolbar=no,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,resizable=yes,width=775,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php

      }
      else
      {
         $this->MSG_Erro_Superior->Caption = 'Antes de imprimir o Cancelamento e necessario enviar a solicitacao de Cancelamento';
      }
   }

   function nfe_nro_protocoloJSKeyUp($sender, $params)
   {

      ?>
       //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfecancelamento.nfe_nro_protocolo
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

   function nfe_anoJSKeyUp($sender, $params)
   {

      ?>
       //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfecancelamento.nfe_ano
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

   var campo = document.mgtnfecancelamento.nfe_mes
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

   function nfe_nro_protocoloJSKeyPress($sender, $params)
   {

      ?>
       //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfecancelamento.nfe_nro_chave_acesso.focus();
     return false;
   }

      <?php

   }

   function nfe_anoJSKeyPress($sender, $params)
   {

      ?>
       //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfecancelamento.nfe_nro_protocolo.focus();
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
     document.mgtnfecancelamento.nfe_ano.focus();
     return false;
   }

      <?php

   }

   function nfe_inicialJSKeyPress($sender, $params)
   {

      ?>
       //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfecancelamento.nfe_mes.focus();
     return false;
   }

      <?php

   }

   function nfe_justificativaJSKeyPress($sender, $params)
   {

      ?>
       //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfecancelamento.bt_enviar.focus();
     return false;
   }

      <?php

   }

   function nfe_inicialJSKeyUp($sender, $params)
   {

      ?>
       //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfecancelamento.nfe_inicial
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

   function bt_fecharClick($sender, $params)
   {
      //*** Limpa os Campos para a Proxima Consulta ***
      $this->listagem_erros->Clear();
      $this->nfe_inicial->Text = '';
      $this->nfe_mes->Text = '';
      $this->nfe_ano->Text = '';
      $this->nfe_nro_protocolo->Text = '';
      $this->nfe_nro_chave_acesso->Text = '';
      $this->nfe_justificativa->Text = '';
      $this->MSG_Erro_Superior->Caption = '';
      $this->mgt_nota_fiscal_data_emissao->Text = '';
      $this->mgt_hora_entrega->Text = '';
      $this->mgt_sequencia_evento->Text = '1';

      $this->bt_enviar->Enabled = true;
      $this->bt_imprimir->Enabled = false;

      redirect('frame_corpo.php');
   }
   function mgt_nota_fiscal_data_emissaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.mgtnfecancelamento.mgt_hora_entrega.focus();
           return false;
        }

        //end
      <?php
   }
   function mgt_hora_entregaJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.mgtnfecancelamento.nfe_justificativa.focus();
           return false;
        }

        //end
      <?php
   }
   function mgt_nota_fiscal_data_emissaoJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.mgtnfecancelamento.mgt_nota_fiscal_data_emissao
        var digits="0123456789/-"
        var campo_temp
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1)
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_hora_entregaJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Hora ***

        var campo = document.mgtnfecancelamento.mgt_hora_entrega
        var digits="0123456789:"
        var campo_temp
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1)
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Hora ***

        //end
      <?php
   }
   function mgt_sequencia_eventoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.mgtnfecancelamento.nfe_justificativa.focus();
           return false;
        }

        //end
      <?php
   }
   function mgt_sequencia_eventoJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.mgtnfecancelamento.mgt_sequencia_evento
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

        //end
      <?php
   }

   function mgtnfecancelamentoJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $mgtnfecancelamento;

//Cria o formulario
$mgtnfecancelamento = new mgtnfecancelamento($application);

//Ler do arquivo de recursos
$mgtnfecancelamento->loadResource(__FILE__);

//Mostrar o formulario
$mgtnfecancelamento->show();

?>