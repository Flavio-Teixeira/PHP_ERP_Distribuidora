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
class mgtnfeinutilizacao extends Page
{
   public $nfe_impressao_protocolo = null;
   public $status_servico = null;
   public $cnpj_padrao = null;
   public $tipo_ambiente = null;
   public $bt_imprimir = null;
   public $nfe_ano = null;
   public $Label4 = null;
   public $listagem_erros = null;
   public $MSG_Erro_Superior = null;
   public $GroupBox2 = null;
   public $Estilo_Pagina = null;
   public $bt_enviar = null;
   public $nfe_justificativa = null;
   public $nfe_final = null;
   public $nfe_inicial = null;
   public $GroupBox3 = null;
   public $bt_fechar = null;
   public $Label3 = null;
   public $Label2 = null;
   public $Label1 = null;
   public $GroupBox1 = null;
   public $area_sistema = null;

   function bt_imprimirClick($sender, $params)
   {
      if(trim($this->nfe_impressao_protocolo->Value) <> '')
      {
?>
         <!-- Abre a Tela de Protocolo -->
         <script language="JavaScript">
             var pos_top = (parseInt((screen.height)/2) - 320);
             var pos_left = (parseInt((screen.width)/2) - 387);
             window.open('nfe/enviado/nfeProtocolo.html','mgt_nfe_protocolo','toolbar=no,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=775,height=550,top='+pos_top+',left='+pos_left);
         </script>
<?php

      }
      else
      {
         $this->MSG_Erro_Superior->Caption = 'Antes de imprimir o protocolo e necessario enviar a solicitacao de inutilizacao';
      }
   }

   function nfe_anoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfeinutilizacao.nfe_ano
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
     document.mgtnfeinutilizacao.nfe_inicial.focus();
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

      if( ($this->nfe_inicial->Text == '') or ($this->nfe_final->Text == '') or (trim($this->nfe_justificativa->Text) == '') or ($this->nfe_ano->Text == '') )
      {
         $this->MSG_Erro_Superior->Caption = 'Para continuar e necessario informar o ano, o intervalo de Notas e a Justificativa.';
      }
      elseif(strlen(trim($this->nfe_justificativa->Text)) < 15)
      {
         $this->MSG_Erro_Superior->Caption = 'A Justificativa deve ter no minimo 15 letras.';
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

         $dp01 = $geraDom->createElement('inutNFe');
         //*** Adiciona Atributo ***
         $dp01->setAttribute('xmlns', 'http://www.portalfiscal.inf.br/nfe');
         $dp01->setAttribute('versao', '3.10');

         //*** Criando os Itens Secundarios (Nos) ***
         //*** Cabeca da Nota ***
         $dp03 = $geraDom->createElement('infInut');

         //*** INICIO - Chave de Acesso *** 
         $chave_acesso_nro = '35' . completa_zeros(trim($this->nfe_ano->Text), 2) . trim($cnpj_padrao) . '55' . completa_zeros(trim($serie_nfe), 3) . completa_zeros(trim($this->nfe_inicial->Text), 9) . completa_zeros(trim($this->nfe_final->Text), 9);
         $chave_acesso_nro = trim($chave_acesso_nro);
         //*** FINAL - Chave de Acesso ***
         $dp03->setAttribute('Id', 'ID' . $chave_acesso_nro);

         $dp05 = $geraDom->createElement('tpAmb', $tipo_ambiente);
         $dp06 = $geraDom->createElement('xServ', 'INUTILIZAR');
         $dp07 = $geraDom->createElement('cUF', '35');
         $dp08 = $geraDom->createElement('ano', trim($this->nfe_ano->Text));
         $dp09 = $geraDom->createElement('CNPJ', $cnpj_padrao);
         $dp10 = $geraDom->createElement('mod', '55');
         $dp11 = $geraDom->createElement('serie', trim($serie_nfe));
         $dp12 = $geraDom->createElement('nNFIni', trim($this->nfe_inicial->Text));
         $dp13 = $geraDom->createElement('nNFFin', trim($this->nfe_final->Text));
         $dp14 = $geraDom->createElement('xJust', retira_acentos($this->nfe_justificativa->Text, 0));

         //*** Gera o XML ***

         $dp03->appendChild($dp05);
         $dp03->appendChild($dp06);
         $dp03->appendChild($dp07);
         $dp03->appendChild($dp08);
         $dp03->appendChild($dp09);
         $dp03->appendChild($dp10);
         $dp03->appendChild($dp11);
         $dp03->appendChild($dp12);
         $dp03->appendChild($dp13);
         $dp03->appendChild($dp14);

         $dp01->appendChild($dp03);
         $geraDom->appendChild($dp01);

         //*** Salvando o XML ***
         $geraDom->save('nfe/entrada/inutNFe.xml');

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

         assinaXML('nfe/entrada/inutNFe.xml', 'nfe/saida/inutNFe_sign.xml', 'infInut', $certificado);

         $validacao = validaXML('nfe/saida/inutNFe_sign.xml', 'validadores/inutNFe_v3.10.xsd');

         if($validacao["status"] == '1')
         {
            //*** INICIO - Se Conecta com o Servidor e Envia o XML ***

            //*** Inicia a Conexao com o Servidor WSDL ***

            if($tipo_ambiente == 1)
            {
               $servidor_wsdl = 'https://nfe.fazenda.sp.gov.br/ws/nfeinutilizacao2.asmx';
            }
            else
            {
               $servidor_wsdl = 'https://homologacao.nfe.fazenda.sp.gov.br/ws/nfeinutilizacao2.asmx';
            }

            //*** Prepara o Arquivo XML para o Envio SOAP ***

            $envio_xml = simplexml_load_file('nfe/saida/inutNFe_sign.xml');
            $cabecalho = '<nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/NfeInutilizacao2"><cUF>35</cUF><versaoDados>3.10</versaoDados></nfeCabecMsg>';
            $dados = '<nfeDadosMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/NfeInutilizacao2">' . trim(str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $envio_xml->asXML())) . '</nfeDadosMsg>';
            $metodo = 'nfeInutilizacaoNF2';

            //*** Envia e Retorna a Conexao com o Servidor WSDL ***

            $retorno_xml_SOAP = enviaXML_SOAP($servidor_wsdl, $certificado, $cabecalho, $dados, $metodo);
            $retorno_xml = $retorno_xml_SOAP["mensagem"];

            //*** Prepara o Arquivo de Retorno ***
            //*** Retira a Sujeira do Cabecalho e Rodape ***
            $retorno_xml = str_replace('&lt;', '<', $retorno_xml);
            $retorno_xml = str_replace('&gt;', '>', $retorno_xml);
            $retorno_xml = str_replace('<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema"><soap:Header><nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/NfeInutilizacao2"><cUF>35</cUF><versaoDados>3.10</versaoDados></nfeCabecMsg></soap:Header><soap:Body>', '', $retorno_xml);
            $retorno_xml = str_replace('</soap:Body></soap:Envelope>', '', $retorno_xml);
            $retorno_xml = str_replace('utf-8', 'UTF-8', $retorno_xml);

            //*** Grava o XML de Retorno ***
            $grava_retorno_xml = fopen('nfe/retinutNFe.xml', "w");
            fwrite($grava_retorno_xml, $retorno_xml);
            fclose($grava_retorno_xml);

            //*** Le o Retorno do XML e Verifica o Status ***
            $ler_retorno_nfe_xml = simplexml_load_file('nfe/retinutNFe.xml');
            $MSG_Erro = utf8_decode($ler_retorno_nfe_xml->retInutNFe->infInut->xMotivo);

            $nfe_nro_protocolo = utf8_decode($ler_retorno_nfe_xml->retInutNFe->infInut->nProt);
            $nfe_status = utf8_decode($ler_retorno_nfe_xml->retInutNFe->infInut->cStat);
            $nfe_estado = utf8_decode($ler_retorno_nfe_xml->retInutNFe->infInut->cUF);
            $nfe_ano = utf8_decode($ler_retorno_nfe_xml->retInutNFe->infInut->ano);
            $nfe_cnpj = utf8_decode($ler_retorno_nfe_xml->retInutNFe->infInut->CNPJ);
            $nfe_modelo = utf8_decode($ler_retorno_nfe_xml->retInutNFe->infInut->mod);
            $nfe_serie = utf8_decode($ler_retorno_nfe_xml->retInutNFe->infInut->serie);
            $nfe_inicial = utf8_decode($ler_retorno_nfe_xml->retInutNFe->infInut->nNFIni);
            $nfe_final = utf8_decode($ler_retorno_nfe_xml->retInutNFe->infInut->nNFFin);
            $nfe_recebimento = utf8_decode($ler_retorno_nfe_xml->retInutNFe->infInut->dhRecbto);

            $this->MSG_Erro_Superior->Caption = $MSG_Erro;

            //*** Utilizar esta opcao para verificar erros do XML ***
            //print_r($ler_retorno_nfe_xml);

            $this->listagem_erros->Clear();
            $this->nfe_impressao_protocolo->Value = '';

            if(trim($nfe_nro_protocolo) <> '')
            {
               $this->listagem_erros->AddLine('--- Inutilizacao de Numeros Realizada Com Sucesso ---');
               $this->listagem_erros->AddLine(' ');

               $this->listagem_erros->AddLine('Protocolo: ' . $nfe_nro_protocolo);
               $this->listagem_erros->AddLine('Status de Retorno: ' . $nfe_status);
               $this->listagem_erros->AddLine('Nro. da UF: ' . $nfe_estado);
               $this->listagem_erros->AddLine('Ano de Inutilizacao da Numeracao: ' . $nfe_ano);
               $this->listagem_erros->AddLine('CNPJ do Emitente: ' . $nfe_cnpj);
               $this->listagem_erros->AddLine('Modelo da NF-e: ' . $nfe_modelo);
               $this->listagem_erros->AddLine('Serie da NF-e: ' . $nfe_serie);
               $this->listagem_erros->AddLine('Numero da NF-e inicial inutilizada: ' . $nfe_inicial);
               $this->listagem_erros->AddLine('Numero da NF-e final inutilizada:  ' . $nfe_final);
               $this->listagem_erros->AddLine('Data e Hora de Processamento/Recebimento: ' . $nfe_recebimento);

               $retorno_protocolo = '<HTML><HEAD><TITLE>Protocolo de Inutilizacao de Numero</TITLE></HEAD><BODY>';
               $retorno_protocolo .= '--- Protocolo de Inutilizacao de Numero ---<br><br>';
               $retorno_protocolo .= '<B>Protocolo:</B> ' . $nfe_nro_protocolo . '<br>';
               $retorno_protocolo .= '<B>Status de Retorno:</B> ' . $nfe_status . '<br>';
               $retorno_protocolo .= '<B>Nro. da UF:</B> ' . $nfe_estado . '<br>';
               $retorno_protocolo .= '<B>Ano de Inutilizacao da Numeracao:</B> ' . $nfe_ano . '<br>';
               $retorno_protocolo .= '<B>CNPJ do Emitente:</B> ' . $nfe_cnpj . '<br>';
               $retorno_protocolo .= '<B>Modelo da NF-e:</B> ' . $nfe_modelo . '<br>';
               $retorno_protocolo .= '<B>Serie da NF-e:</B> ' . $nfe_serie . '<br>';
               $retorno_protocolo .= '<B>Numero da NF-e inicial inutilizada:</B> ' . $nfe_inicial . '<br>';
               $retorno_protocolo .= '<B>Numero da NF-e final inutilizada:</B>  ' . $nfe_final . '<br>';
               $retorno_protocolo .= '<B>Data e Hora de Processamento/Recebimento:</B> ' . $nfe_recebimento . '<br><br>';
               $retorno_protocolo .= '--- Transacao efetuada com Sucesso !!! ---';
               $retorno_protocolo .= '</BODY></HTML>';

               $this->nfe_impressao_protocolo->Value = $retorno_protocolo;

               //*** Grava o XML de Retorno do Protocolo ***
               copy('nfe/retinutNFe.xml', 'nfe/enviado/inutNFe_' . trim($this->nfe_inicial->Text) . '_ate_' . trim($this->nfe_final->Text) . '.xml');
               copy('nfe/retinutNFe.xml', 'nfe/entregar_cliente/inutNFe_' . trim($this->nfe_inicial->Text) . '_ate_' . trim($this->nfe_final->Text) . '.xml');

               $grava_protocolo_xml = fopen('nfe/enviado/nfeProtocolo.html', "w");
               fwrite($grava_protocolo_xml, $retorno_protocolo);
               fclose($grava_protocolo_xml);

               $this->bt_enviar->Enabled = false;
               $this->bt_imprimir->Enabled = true;
            }

            if(file_exists('nfe/entrada/inutNFe.xml'))
            {
               unlink('nfe/entrada/inutNFe.xml');
            }

            if(file_exists('nfe/saida/inutNFe_sign.xml'))
            {
               unlink('nfe/saida/inutNFe_sign.xml');
            }

            if(file_exists('nfe/retinutNFe.xml'))
            {
               unlink('nfe/retinutNFe.xml');
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

   function mgtnfeinutilizacaoCreate($sender, $params)
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

      $this->nfe_ano->Text = date('y', time());

      //**************************************************
      //*** FINAL - Limpa todos os Dados do Formulario ***
      //**************************************************
   }

   function nfe_finalJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfeinutilizacao.nfe_final
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

   function nfe_inicialJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfeinutilizacao.nfe_inicial
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

   function nfe_justificativaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfeinutilizacao.bt_enviar.focus();
     return false;
   }

<?php

   }

   function nfe_finalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfeinutilizacao.nfe_justificativa.focus();
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
     document.mgtnfeinutilizacao.nfe_final.focus();
     return false;
   }

<?php

   }


   function bt_fecharClick($sender, $params)
   {
      //*** Limpa os Campos para a Proxima Consulta ***
      $this->listagem_erros->Clear();
      $this->MSG_Erro_Superior->Caption = '';

      $this->nfe_ano->Text = '';
      $this->nfe_inicial->Text = '';
      $this->nfe_final->Text = '';
      $this->nfe_justificativa->Text = '';

      $this->bt_enviar->Enabled = true;
      $this->bt_imprimir->Enabled = false;

      redirect('frame_corpo.php');
   }

   function mgtnfeinutilizacaoJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $mgtnfeinutilizacao;

//Cria o formulario
$mgtnfeinutilizacao = new mgtnfeinutilizacao($application);

//Ler do arquivo de recursos
$mgtnfeinutilizacao->loadResource(__FILE__);

//Mostrar o formulario
$mgtnfeinutilizacao->show();

?>