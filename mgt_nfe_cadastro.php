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
class mgtnfecadastro extends Page
{
   public $Label1 = null;
   public $nfe_estado = null;
   public $nfe_cpf = null;
   public $nfe_cnpj = null;
   public $nfe_inscricao_estadual = null;
   public $Estilo_Pagina = null;
   public $GroupBox3 = null;
   public $bt_fechar = null;
   public $bt_enviar = null;
   public $GroupBox2 = null;
   public $listagem_erros = null;
   public $MSG_Erro_Superior = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $GroupBox1 = null;
   public $area_sistema = null;
   function bt_enviarClick($sender, $params)
   {
      libxml_use_internal_errors(true);

      require_once("includes/rotinas_gerais.inc.php");
      require_once("includes/tabelas_ibge.fnc.php");
      require_once("includes/assinadorTEX.inc.php");

      if((($this->nfe_inscricao_estadual->Text == '') and ($this->nfe_cnpj->Text == '') and ($this->nfe_cpf->Text == '')))
      {
         $this->MSG_Erro_Superior->Caption = 'Para continuar e necessario informar a Sigla, Inscricao Estadual ou CNPJ ou CPF.';
      }
      else
      {
         //Declaracao de Variaveis
         $tipo_ambiente = $_SESSION['login_nfe_ambiente'];// 1 - Producao || 2 - Homologacao
         $cnpj_padrao = completa_zeros_retira_caracter($_SESSION['login_cnpj'], 14);
         $senha_nfe = $_SESSION['login_nfe_senha'];

         //*******************************************************************
         //*** INICIO - Verifica o Status do Servico com a Receita Federal ***
         //*******************************************************************

         //*** Verifica o Status do Servico no Servidor de SOAP ***
         $status_servico_SOAP = status_servidor_SOAP($tipo_ambiente);
         $status_servico = $status_servico_SOAP["status"];

         if(!$status_servico)
         {
            $this->MSG_Erro_Superior->Caption = "ATENCAO: Erros Encontrados.";
            $this->listagem_erros->Clear();
            $this->listagem_erros->AddLine('--- Erros Encontrados ---');
            $this->listagem_erros->AddLine(' ');
            $this->listagem_erros->AddLine('Nao foi possivel estabelecer conexao com o Servidor da Receita Federal.');
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

         $gp01 = $geraDom->createElement('ConsCad');
         //*** Adiciona Atributo ***
         $gp01->setAttribute('xmlns', 'http://www.portalfiscal.inf.br/nfe');
         $gp01->setAttribute('versao', '3.10');

         //*** Criando os Itens Secundarios (Nos) ***
         //*** Cabeca da Nota ***
         $gp03 = $geraDom->createElement('infCons');
         $gp04 = $geraDom->createElement('xServ', 'CONS-CAD');
         $gp05 = $geraDom->createElement('UF', trim($this->nfe_estado->ItemIndex));

         if(trim($this->nfe_inscricao_estadual->Text) <> '')
         {
            $gp06 = $geraDom->createElement('IE', trim($this->nfe_inscricao_estadual->Text));
         }

         if(trim($this->nfe_cnpj->Text) <> '')
         {
            $gp07 = $geraDom->createElement('CNPJ', trim($this->nfe_cnpj->Text));
         }

         if(trim($this->nfe_cpf->Text) <> '')
         {
            $gp08 = $geraDom->createElement('CPF', trim($this->nfe_cpf->Text));
         }

         //*** Gera o XML ***

         $gp03->appendChild($gp04);
         $gp03->appendChild($gp05);

         if(trim($this->nfe_inscricao_estadual->Text) <> '')
         {
            $gp03->appendChild($gp06);
         }

         if(trim($this->nfe_cnpj->Text) <> '')
         {
            $gp03->appendChild($gp07);
         }

         if(trim($this->nfe_cpf->Text) <> '')
         {
            $gp03->appendChild($gp08);
         }

         $gp01->appendChild($gp03);
         $geraDom->appendChild($gp01);

         //*** Salvando o XML ***
         $geraDom->save('nfe/consCad.xml');

         if(!file_exists('nfe/consCad.xml'))
         {
            $this->MSG_Erro_Superior->Caption = "XML de Saida nao foi encontrado.";

            $arrayAllErrors = libxml_get_errors();

            $this->listagem_erros->Clear();
            $this->listagem_erros->AddLine('--- Erros Encontrados ---');
            $this->listagem_erros->AddLine(' ');
            $this->listagem_erros->AddLine(' ');
            $this->listagem_erros->AddLine('XML de Saida nao foi encontrado.');

            if(file_exists('nfe/consCad.xml'))
            {
               unlink('nfe/consCad.xml');
            }
         }
         else
         {
            //*** INICIO - Se Conecta com o Servidor e Envia o XML ***

            //*** Inicia a Conexao com o Servidor WSDL ***

            //*** Verifica a Validacao do Schema ***
            $validacao = validaXML('nfe/consCad.xml', 'validadores/consCad_v3.10.xsd');

            if($validacao["status"] == '1')
            {
               //*** INICIO - Se Conecta com o Servidor e Envia o XML ***

               //*** Inicia a Conexao com o Servidor WSDL ***

               if($tipo_ambiente == 1)
               {
                  $servidor_wsdl = 'https://nfe.fazenda.sp.gov.br/ws/cadconsultacadastro2.asmx';
               }
               else
               {
                  $servidor_wsdl = 'https://homologacao.nfe.fazenda.sp.gov.br/ws/cadconsultacadastro2.asmx';
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

               $envio_xml = simplexml_load_file('nfe/consCad.xml');
               $cabecalho = '<nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/CadConsultaCadastro2"><cUF>35</cUF><versaoDados>3.10</versaoDados></nfeCabecMsg>';
               $dados = '<consultaCadastro2 xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/CadConsultaCadastro2"><nfeDadosMsg>' . trim(str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $envio_xml->asXML())) . '</nfeDadosMsg></consultaCadastro2>';
               $metodo = 'consultaCadastro2';

               //*** Envia e Retorna a Conexao com o Servidor WSDL ***

               $retorno_xml_SOAP = enviaXML_SOAP($servidor_wsdl, $certificado, $cabecalho, $dados, $metodo);
               $retorno_xml = $retorno_xml_SOAP["mensagem"];

               //*** Prepara o Arquivo de Retorno ***
               //*** Retira a Sujeira do Cabecalho e Rodape ***
               $retorno_xml = str_replace('&lt;', '<', $retorno_xml);
               $retorno_xml = str_replace('&gt;', '>', $retorno_xml);
               $retorno_xml = str_replace('<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema"><soap:Header><nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/CadConsultaCadastro2"><cUF>35</cUF><versaoDados>3.10</versaoDados></nfeCabecMsg></soap:Header><soap:Body><consultaCadastro2Response xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/CadConsultaCadastro2">', '', $retorno_xml);
               $retorno_xml = str_replace('</soap:Body></soap:Envelope>', '', $retorno_xml);
               $retorno_xml = str_replace('</consultaCadastro2Response>', '', $retorno_xml);
               $retorno_xml = str_replace('utf-8', 'UTF-8', $retorno_xml);

               //*** Grava o XML de Retorno ***
               $grava_retorno_xml = fopen('nfe/retconsCad.xml', "w");
               fwrite($grava_retorno_xml, $retorno_xml);
               fclose($grava_retorno_xml);

               //*** Le o Retorno do XML e Verifica o Status ***
               $ler_retorno_nfe_xml = simplexml_load_file('nfe/retconsCad.xml');
               $MSG_Erro = utf8_decode($ler_retorno_nfe_xml->retConsCad->infCons->xMotivo);

               $this->MSG_Erro_Superior->Caption = $MSG_Erro;

               //*** Utilizar esta opcao para verificar erros do XML ***
               //print_r($ler_retorno_nfe_xml);

               $this->listagem_erros->Clear();
               $this->listagem_erros->AddLine('--- Resultado Obtido ---');
               $this->listagem_erros->AddLine(' ');

               //*** Lista as Informacoes de Consulta ***

               $arrayAllErrors = $ler_retorno_nfe_xml->retConsCad->infCons;

               $item = 0;

               for($item = 0; $item <= (count($arrayAllErrors) - 1); $item++)
               {
                  $this->listagem_erros->AddLine('Ocorrencia Nro.: ' . ($item + 1) . ', informacoes abaixo: ');

                  foreach($arrayAllErrors[0] as $key => $value)
                  {
                     $this->listagem_erros->AddLine(utf8_decode($key) . ' = ' . utf8_decode($value));
                  }
               }

               //*** Lista as Informacoes de Cadastro ***

               $arrayAllErrors = $ler_retorno_nfe_xml->retConsCad->infCons->infCad;

               $item = 0;

               for($item = 0; $item <= (count($arrayAllErrors) - 1); $item++)
               {
                  foreach($arrayAllErrors[0] as $key => $value)
                  {
                     $this->listagem_erros->AddLine('---' . utf8_decode($key) . ' = ' . utf8_decode($value));
                  }
               }

               //*** Lista as Informacoes de Endereco ***

               $arrayAllErrors = $ler_retorno_nfe_xml->retConsCad->infCons->infCad->ender;

               $item = 0;

               for($item = 0; $item <= (count($arrayAllErrors) - 1); $item++)
               {
                  foreach($arrayAllErrors[0] as $key => $value)
                  {
                     $this->listagem_erros->AddLine('------' . utf8_decode($key) . ' = ' . utf8_decode($value));
                  }
               }

               if(file_exists('nfe/consCad.xml'))
               {
                  unlink('nfe/consCad.xml');
               }

               if(file_exists('nfe/retconsCad.xml'))
               {
                  unlink('nfe/retconsCad.xml');
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

               if(file_exists('nfe/consCad.xml'))
               {
                  unlink('nfe/consCad.xml');
               }
            }
         }
      }
   }

   function nfe_cpfJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfecadastro.nfe_cpf
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

   function nfe_cnpjJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfecadastro.nfe_cnpj
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

   function nfe_inscricao_estadualJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.mgtnfecadastro.nfe_inscricao_estadual
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

   function nfe_cpfJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfecadastro.bt_enviar.focus();
     return false;
   }

<?php

   }

   function nfe_cnpjJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfecadastro.nfe_cpf.focus();
     return false;
   }

<?php

   }

   function nfe_inscricao_estadualJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfecadastro.nfe_cnpj.focus();
     return false;
   }

<?php

   }




   function nfe_estadoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.mgtnfecadastro.nfe_inscricao_estadual.focus();
     return false;
   }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
         //*** Limpa os Campos para a Proxima Consulta ***
         $this->MSG_Erro_Superior->Caption = '';
         $this->listagem_erros->Clear();
         $this->nfe_inscricao_estadual->Text = '';
         $this->nfe_cnpj->Text = '';
         $this->nfe_cpf->Text = '';

         redirect('frame_corpo.php');
   }


   function mgtnfecadastroCreate($sender, $params)
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

      //**************************************************
      //*** FINAL - Limpa todos os Dados do Formulario ***
      //**************************************************

      //*** Carregar os Estados ***

      $this->nfe_estado->Clear();
      $this->nfe_estado->AddItem("AC", null , "AC");
      $this->nfe_estado->AddItem("AL", null , "AL");
      $this->nfe_estado->AddItem("AP", null , "AP");
      $this->nfe_estado->AddItem("AM", null , "AM");
      $this->nfe_estado->AddItem("BA", null , "BA");
      $this->nfe_estado->AddItem("CE", null , "CE");
      $this->nfe_estado->AddItem("DF", null , "DF");
      $this->nfe_estado->AddItem("ES", null , "ES");
      $this->nfe_estado->AddItem("GO", null , "GO");
      $this->nfe_estado->AddItem("MA", null , "MA");
      $this->nfe_estado->AddItem("MT", null , "MT");
      $this->nfe_estado->AddItem("MS", null , "MS");
      $this->nfe_estado->AddItem("MG", null , "MG");
      $this->nfe_estado->AddItem("PA", null , "PA");
      $this->nfe_estado->AddItem("PB", null , "PB");
      $this->nfe_estado->AddItem("PR", null , "PR");
      $this->nfe_estado->AddItem("PE", null , "PE");
      $this->nfe_estado->AddItem("PI", null , "PI");
      $this->nfe_estado->AddItem("RN", null , "RN");
      $this->nfe_estado->AddItem("RS", null , "RS");
      $this->nfe_estado->AddItem("RJ", null , "RJ");
      $this->nfe_estado->AddItem("RO", null , "RO");
      $this->nfe_estado->AddItem("RR", null , "RR");
      $this->nfe_estado->AddItem("SC", null , "SC");
      $this->nfe_estado->AddItem("SP", null , "SP");
      $this->nfe_estado->AddItem("SE", null , "SE");
      $this->nfe_estado->AddItem("TO", null , "TO");
      $this->nfe_estado->AddItem("EX", null , "EX");
      $this->nfe_estado->AddItem("SU", null , "SU");
      $this->nfe_estado->ItemIndex = "SP";
   }

   function mgtnfecadastroJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $mgtnfecadastro;

//Cria o formulario
$mgtnfecadastro = new mgtnfecadastro($application);

//Ler do arquivo de recursos
$mgtnfecadastro->loadResource(__FILE__);

//Mostrar o formulario
$mgtnfecadastro->show();

?>