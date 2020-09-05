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
| PROTEÇÃO AOS DIREITOS DE AUTOR E DO REGISTRO:  |
| Toda codificação deste Sistema está protegida  |
| pela Lei Nro.9609 onde se dispõe sobre a       |
| proteção da propriedade intelectual de         |
| programa de computador, sua comercialização    |
| no País, e dá outras providências.             |
| ATENÇÃO: Não é permitido efetuar alterações    |
| na codificação do sistema, efetuar instalações |
| em outros computadores, cópias e utilizá-lo    |
| como base no desenvolvimento de outro sistema  |
| semelhante ou de igual funcionamento.          |
+------------------------------------------------+
*/

/*
******************************************
*** RELAÇÃO DE WEBSERVICES DISPONÍVEIS ***
******************************************

A versão 1.10 estará válida até 31/12/2010 às 23h59m.

Estado  Serviço               Versão  Endereço
SP      NfeRecepcao           1.10    https://nfe.fazenda.sp.gov.br/nfeweb/services/nferecepcao.asmx
SP      NfeRetRecepcao        1.10    https://nfe.fazenda.sp.gov.br/nfeweb/services/nferetrecepcao.asmx
SP      NfeCancelamento       1.10    https://nfe.fazenda.sp.gov.br/nfeweb/services/nfecancelamento.asmx
SP      NfeInutilizacao       1.10    https://nfe.fazenda.sp.gov.br/nfeweb/services/nfeinutilizacao.asmx
SP      NfeConsultaProtocolo  1.10    https://nfe.fazenda.sp.gov.br/nfeweb/services/nfeconsulta.asmx
SP      NfeStatusServico      1.10    https://nfe.fazenda.sp.gov.br/nfeweb/services/nfestatusservico.asmx
SP      NfeConsultaCadastro   1.10    https://nfe.fazenda.sp.gov.br/nfeweb/services/cadconsultacadastro.asmx

Versão Atual 2.00 em vigor.

SP      NfeRecepcao           2.00    https://nfe.fazenda.sp.gov.br/nfeweb/services/nferecepcao2.asmx
SP      NfeRetRecepcao        2.00    https://nfe.fazenda.sp.gov.br/nfeweb/services/nferetrecepcao2.asmx
SP      NfeCancelamento       2.00    https://nfe.fazenda.sp.gov.br/nfeweb/services/nfecancelamento2.asmx
SP      NfeInutilizacao       2.00    https://nfe.fazenda.sp.gov.br/nfeweb/services/nfeinutilizacao2.asmx
SP      NfeConsultaProtocolo  2.00    https://nfe.fazenda.sp.gov.br/nfeweb/services/nfeconsulta2.asmx
SP      NfeStatusServico      2.00    https://nfe.fazenda.sp.gov.br/nfeweb/services/nfestatusservico2.asmx
SP      NfeConsultaCadastro   2.00    https://nfe.fazenda.sp.gov.br/nfeweb/services/cadconsultacadastro2.asmx
SP      RecepcaoEvento        2.00    https://nfe.fazenda.sp.gov.br/eventosWEB/services/RecepcaoEvento.asmx

Versão Atual 3.10 em vigor.

SP	NfeInutilizacao		 3.10	https://nfe.fazenda.sp.gov.br/ws/nfeinutilizacao2.asmx
SP	NfeConsultaProtocolo 3.10	https://nfe.fazenda.sp.gov.br/ws/nfeconsulta2.asmx
SP	NfeStatusServico	 3.10	https://nfe.fazenda.sp.gov.br/ws/nfestatusservico2.asmx
SP	NfeConsultaCadastro	 3.10	https://nfe.fazenda.sp.gov.br/ws/cadconsultacadastro2.asmx
SP	RecepcaoEvento		 3.10	https://nfe.fazenda.sp.gov.br/ws/recepcaoevento.asmx
SP	NFeAutorizacao		 3.10	https://nfe.fazenda.sp.gov.br/ws/nfeautorizacao.asmx
SP	NFeRetAutorizacao	 3.10	https://nfe.fazenda.sp.gov.br/ws/nferetautorizacao.asmx

*/

function enviaXML_SOAP($servidor_wsdl, $certificado, $cabecalho, $dados, $metodo)
{
   //****************************
   //*** Envia o XML via SOAP ***
   //****************************

   $data = '';
   $data .= '<?xml version="1.0" encoding="utf-8"?>';
   $data .= '<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">';
   $data .= '<soap:Header>';
   $data .= $cabecalho;
   $data .= '</soap:Header>';
   $data .= '<soap:Body>';
   $data .= $dados;
   $data .= '</soap:Body>';
   $data .= '</soap:Envelope>';

   $metodo = '#' . $metodo;

   //***********************************
   //*** Relação de Retornos de Erro ***
   //***********************************

   //[Informational 1xx]
   $cCode['100']="Continue";
   $cCode['101']="Switching Protocols";
   //[Successful 2xx]
   $cCode['200']="OK";
   $cCode['201']="Created";
   $cCode['202']="Accepted";
   $cCode['203']="Non-Authoritative Information";
   $cCode['204']="No Content";
   $cCode['205']="Reset Content";
   $cCode['206']="Partial Content";
   //[Redirection 3xx]
   $cCode['300']="Multiple Choices";
   $cCode['301']="Moved Permanently";
   $cCode['302']="Found";
   $cCode['303']="See Other";
   $cCode['304']="Not Modified";
   $cCode['305']="Use Proxy";
   $cCode['306']="(Unused)";
   $cCode['307']="Temporary Redirect";
   //[Client Error 4xx]
   $cCode['400']="Bad Request";
   $cCode['401']="Unauthorized";
   $cCode['402']="Payment Required";
   $cCode['403']="Forbidden";
   $cCode['404']="Not Found";
   $cCode['405']="Method Not Allowed";
   $cCode['406']="Not Acceptable";
   $cCode['407']="Proxy Authentication Required";
   $cCode['408']="Request Timeout";
   $cCode['409']="Conflict";
   $cCode['410']="Gone";
   $cCode['411']="Length Required";
   $cCode['412']="Precondition Failed";
   $cCode['413']="Request Entity Too Large";
   $cCode['414']="Request-URI Too Long";
   $cCode['415']="Unsupported Media Type";
   $cCode['416']="Requested Range Not Satisfiable";
   $cCode['417']="Expectation Failed";
   //[Server Error 5xx]
   $cCode['500']="Internal Server Error";
   $cCode['501']="Not Implemented";
   $cCode['502']="Bad Gateway";
   $cCode['503']="Service Unavailable";
   $cCode['504']="Gateway Timeout";
   $cCode['505']="HTTP Version Not Supported";

   $tamanho = strlen($data);
   $parametros = Array('Content-Type: application/soap+xml;charset=utf-8','SOAPAction: "'.$metodo.'"',"Content-length: $tamanho");

   $oCurl = curl_init();

   //***************************
   //*** Parâmetros de Envio ***
   //***************************

   curl_setopt($oCurl, CURLOPT_URL, $servidor_wsdl.'');
   //curl_setopt($oCurl, CURLOPT_PORT , 443);
   curl_setopt($oCurl, CURLOPT_VERBOSE, 1);
   //curl_setopt($oCurl, CURLOPT_HEADER, 1); //*** retorna o cabeçalho de resposta ***
   curl_setopt($oCurl, CURLOPT_SSLVERSION, 3);
   curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, 0);
   curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, 0);
   curl_setopt($oCurl, CURLOPT_SSLCERT, $certificado);
   //curl_setopt($oCurl, CURLOPT_SSLKEY, $certificado);
   curl_setopt($oCurl, CURLOPT_POST, 1);
   curl_setopt($oCurl, CURLOPT_POSTFIELDS, $data);
   curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($oCurl, CURLOPT_HTTPHEADER,$parametros);

   curl_setopt($oCurl, CURLOPT_FAILONERROR,1);
   curl_setopt($oCurl, CURLOPT_FOLLOWLOCATION,1);

   $__xml = curl_exec($oCurl);
   $info = curl_getinfo($oCurl); //*** informações da conexão ***

   if ($__xml === false)
   {
       $__status = curl_error($oCurl) . $info['http_code'] . '-' . $cCode[$info['http_code']];
       $__xml = curl_error($oCurl);  
   }
   else
   {
       $__status = $info['http_code'] . '-' . $cCode[$info['http_code']];
   }

   curl_close($oCurl);

   return array('status'=>$__status, 'mensagem'=>$__xml);
}

function status_servidor_SOAP($tipo_ambiente)
{
   $status_servico = false;

   //*** versao do encoding xml ***
   $statusDom = new DOMDocument('1.0', 'UTF-8');

   //*** retirar os espacos em branco ***
   $statusDom->preserveWhiteSpace = false;
   //*** gerar o codigo ***
   $statusDom->formatOutput = false; // Se True Prevalece a Formatação com Estrutura (Pulando Linha e Espaços).

   //*** criando o nó principal (Raiz) ***
   //*** Cabeça do XML ***

   $fp01 = $statusDom->createElement('consStatServ');

   //*** Adiciona Atributo ***
   $fp01->setAttribute('xmlns', 'http://www.portalfiscal.inf.br/nfe');
   $fp01->setAttribute('versao', '3.10');

   //*** Criando os Itens Secundários (Nós) ***
   $fp03 = $statusDom->createElement('tpAmb', $tipo_ambiente);
   $fp04 = $statusDom->createElement('cUF', '35');
   $fp05 = $statusDom->createElement('xServ', 'STATUS');

   //*** Dados da Verificação de Status para o XML ***
   //*** Gravando os Nós ***
   $fp01->appendChild($fp03);
   $fp01->appendChild($fp04);
   $fp01->appendChild($fp05);

   //*** Fecha a Raiz ***
   $statusDom->appendChild($fp01);

   //*** Salvando o XML ***
   $statusDom->save('nfe/consStatServ.xml');

   //*** Verifica a Validação do Schema ***
   $validacao = validaXML('nfe/consStatServ.xml', 'validadores/consStatServ_v3.10.xsd');

   if($validacao["status"] == '1')
   {
      //*** INICIO - Se Conecta com o Servidor e Envia o XML ***

      //*** Inicia a Conexão com o Servidor WSDL ***

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

      //*** Envia e Retorna a Conexão com o Servidor WSDL ***

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

      //*** Lê o Retorno do XML e Verifica o Status ***
      $ler_retorno_xml = simplexml_load_file('nfe/retConsStatServ.xml');
      $MSG_Erro = utf8_decode($ler_retorno_xml->xMotivo);

      if(trim($MSG_Erro) == 'Serviço em Operação')
      {
         $status_servico = true;
      }
      else
      {
         $status_servico = false;

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
     $MSG_Erro = $validacao["error"];

     if(file_exists('nfe/consStatServ.xml'))
     {
        unlink('nfe/consStatServ.xml');
     }
   }

   return array('status'=>$status_servico, 'mensagem'=>$MSG_Erro);
}

function validaXML($docxml_entrada, $ArquivoXSD)
{
   //*************************************************
   //*** Habilita a manipulaçao de erros da libxml ***
   //*************************************************

   error_reporting(0);
   ini_set('display_errors', '1');
   libxml_use_internal_errors(true);

   //*********************************
   //*** Instancia novo objeto XML ***
   //*********************************

   $xmldoc = new DOMDocument('1.0', 'UTF-8');

   //*********************
   //*** Carrega o XML ***
   //*********************

   $xmldoc->load($docxml_entrada);
   $errorMsg='';

   //******************************
   //*** Valida o XML com o XSD ***
   //******************************

   if ( !$xmldoc->schemaValidate($ArquivoXSD) ) {

       //************************************
       //*** Carrega os erros em um array ***
       //************************************

       $aIntErrors = libxml_get_errors();

       $flagOK = false;
       foreach ($aIntErrors as $intError){
           switch ($intError->level) {
               case LIBXML_ERR_WARNING:
                   $errorMsg .= " Atençao $intError->code: ";
                   break;
               case LIBXML_ERR_ERROR:
                   $errorMsg .= " Erro $intError->code: ";
                   break;
               case LIBXML_ERR_FATAL:
                   $errorMsg .= " Erro Fatal $intError->code: ";
                   break;
           }
           $errorMsg .= $intError->message . ";\n\n\n";
       }
   } else {
       $flagOK = true;
       $errorMsg = '';
   }
   return array('status'=>$flagOK, 'error'=>$errorMsg);
}

function limpaCertificado($certFile)
{

   //***********************************************
   //*** carregar a chave publica do arquivo pem ***
   //***********************************************

   $pubKey = file_get_contents($certFile);

   //*******************************************************************************************
   //*** Incicializa a Variável e Obtem o conteúdo do do Primeiro BEGIN e END do Certificado ***
   //*******************************************************************************************

   $data = '';
   $data = substr($pubKey,strpos($pubKey,'-----BEGIN CERTIFICATE-----')+27);
   $data = substr($data,0,strpos($data,'-----END CERTIFICATE-----'));

   //************************************
   //*** Remove os CR e LF do Arquivo ***
   //************************************

   $order = array("\r\n", "\n", "\r");
   $replace = '';
   $data = str_replace($order, $replace, $data);

   //*************************************************
   //*** Reotorna o X509Certificate do Certificado ***
   //*************************************************

   return $data;
}

function assinaXML($docxml_entrada, $docxml_saida, $tagid, $ArqCertificado)
{

   //*****************************************
   //*** Obtem o Certificado de Assinatura ***
   //*****************************************

   $fp = fopen($ArqCertificado, "r");
   $priv_key = fread($fp, 8192);
   fclose($fp);
   $pkeyid = openssl_get_privatekey($priv_key);

   //************************************
   //*** Remove os CR e LF do Arquivo ***
   //************************************

   $order = array("\r\n", "\n", "\r");
   $replace = '';
   $docxml_entrada = str_replace($order, $replace, $docxml_entrada);

   //********************************
   //*** Carrega o XML de Entrada ***
   //********************************

   $xmldoc = new DOMDocument('1.0', 'UTF-8');
   $xmldoc->preservWhiteSpace = false;
   $xmldoc->formatOutput = false;
   $xmldoc->load($docxml_entrada,LIBXML_NOBLANKS | LIBXML_NOEMPTYTAG);
   $root = $xmldoc->documentElement;

   //****************************************************
   //*** Extrair a tag com os dados a serem assinados ***
   //****************************************************

   $node = $xmldoc->getElementsByTagName($tagid)->item(0);
   $id = trim($node->getAttribute("Id"));
   $idnome = preg_replace('/[^0-9]/','', $id);

   //**********************************************
   //*** Extrai os dados da tag para uma string ***
   //**********************************************

   $dados = $node->C14N(FALSE,FALSE,NULL,NULL);

   //*********************************
   //*** Calcular o hash dos dados ***
   //*********************************

   $hashValue = hash('sha1',$dados,TRUE);

   //****************************************************************
   //*** Converte o valor para base64 para serem colocados no xml ***
   //****************************************************************

   $digValue = base64_encode($hashValue);

   //*****************************************
   //*** Monta a tag da assinatura digital ***
   //*****************************************

   $Signature = $xmldoc->createElementNS('http://www.w3.org/2000/09/xmldsig#','Signature');
   $root->appendChild($Signature);
   $SignedInfo = $xmldoc->createElement('SignedInfo');
   $Signature->appendChild($SignedInfo);

   //***********************
   //*** Cannocalization ***
   //***********************

   $newNode = $xmldoc->createElement('CanonicalizationMethod');
   $SignedInfo->appendChild($newNode);
   $newNode->setAttribute('Algorithm', 'http://www.w3.org/TR/2001/REC-xml-c14n-20010315');

   //***********************
   //*** SignatureMethod ***
   //***********************

   $newNode = $xmldoc->createElement('SignatureMethod');
   $SignedInfo->appendChild($newNode);
   $newNode->setAttribute('Algorithm', 'http://www.w3.org/2000/09/xmldsig#rsa-sha1');

   //*****************
   //*** Reference ***
   //*****************

   $Reference = $xmldoc->createElement('Reference');
   $SignedInfo->appendChild($Reference);

   if(trim($id) <> '')
   {
      $Reference->setAttribute('URI', '#'.$id);
   }
   else
   {
      $Reference->setAttribute('URI', '');
   }

   //******************
   //*** Transforms ***
   //******************

   $Transforms = $xmldoc->createElement('Transforms');
   $Reference->appendChild($Transforms);

   //*****************
   //*** Transform ***
   //*****************

   $newNode = $xmldoc->createElement('Transform');
   $Transforms->appendChild($newNode);
   $newNode->setAttribute('Algorithm', 'http://www.w3.org/2000/09/xmldsig#enveloped-signature');

   //*****************
   //*** Transform ***
   //*****************

   $newNode = $xmldoc->createElement('Transform');
   $Transforms->appendChild($newNode);
   $newNode->setAttribute('Algorithm', 'http://www.w3.org/TR/2001/REC-xml-c14n-20010315');

   //********************
   //*** DigestMethod ***
   //********************

   $newNode = $xmldoc->createElement('DigestMethod');
   $Reference->appendChild($newNode);
   $newNode->setAttribute('Algorithm', 'http://www.w3.org/2000/09/xmldsig#sha1');

   //*******************
   //*** DigestValue ***
   //*******************

   $newNode = $xmldoc->createElement('DigestValue',$digValue);
   $Reference->appendChild($newNode);

   //*********************************************************
   //*** Extrai os dados a serem assinados para uma string ***
   //*********************************************************

   $dados = $SignedInfo->C14N(FALSE,FALSE,NULL,NULL);

   //**********************************************************
   //*** Inicializa a variavel que irá receber a assinatura ***
   //**********************************************************

   $signature = '';

   //***********************************************************************
   //*** Executa a assinatura digital usando o resource da chave privada ***
   //***********************************************************************

   $resp = openssl_sign($dados,$signature,$pkeyid);

   //************************************************
   //*** Codifica assinatura para o padrao base64 ***
   //************************************************

   $signatureValue = base64_encode($signature);

   //**********************
   //*** SignatureValue ***
   //**********************

   $newNode = $xmldoc->createElement('SignatureValue',$signatureValue);
   $Signature->appendChild($newNode);

   //***************
   //*** KeyInfo ***
   //***************

   $KeyInfo = $xmldoc->createElement('KeyInfo');
   $Signature->appendChild($KeyInfo);

   //****************
   //*** X509Data ***
   //****************

   $X509Data = $xmldoc->createElement('X509Data');
   $KeyInfo->appendChild($X509Data);

   //********************************************************
   //*** Carrega o certificado sem as tags de BEGIN e END ***
   //********************************************************

   $cert = limpaCertificado($ArqCertificado);

   //***********************
   //*** X509Certificate ***
   //***********************

   $newNode = $xmldoc->createElement('X509Certificate',$cert);
   $X509Data->appendChild($newNode);

   //*************************
   //*** Grava o XML Final ***
   //*************************

   $docxml_entrada = $xmldoc->saveXML();

   //************************
   //*** Libera a memoria ***
   //************************

   openssl_free_key($pkeyid);

   //*********************************************************
   //*** Estrutura a Tag NFe com base na Assinatura Gerada ***
   //*********************************************************

   $docxml_entrada = str_replace('</NFe>', '', $docxml_entrada);
   $docxml_entrada = str_replace('</Signature></enviNFe>', '</Signature></NFe></enviNFe>', $docxml_entrada);

   //*******************************************************
   //*** Grava o XML de Saída para ser enviado a Receita ***
   //*******************************************************

   file_put_contents($docxml_saida, $docxml_entrada);

   return true;
}

//*** Exemplo de Utilização da Função de Certificado ***
/*
assinaXML('enviNFe_56705.xml', 'enviNFe_56705_com.xml', 'infNFe', 'nfe.pem');

$validacao = validaXML('enviNFe_56705_com.xml', 'validadores2/enviNFe_v1.10.xsd');

echo "<BR>Status: ";
echo $validacao["status"];
echo "<BR>Erro: ";
echo str_replace("Erro", "<br><br>Erro", $validacao["error"]);
*/

?>