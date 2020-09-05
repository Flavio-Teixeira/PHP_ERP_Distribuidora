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
//Includes
require_once("conexao_principal.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class nfcartacorrecaoenvio extends Page
{
   public $hd_carta_correcao_nfe = null;
   public $hd_carta_correcao_numero = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label2 = null;
   public $Label1 = null;
   public $mgt_nota_fiscal_descricao = null;
   public $mgt_nota_fiscal_carta_correcao_geradas = null;
   public $mgt_nota_fiscal_chave = null;
   public $mgt_nota_fiscal_data_emissao = null;
   public $mgt_nota_fiscal_numero = null;
   public $mgt_nota_fiscal_cliente_codigo = null;
   public $mgt_nota_fiscal_cliente_nome = null;
   public $area_sistema = null;
   public $GroupBox1 = null;
   public $bt_fechar = null;
   public $bt_transmitir = null;
   public $Panel1 = null;
   public $Label18 = null;
   public $Label19 = null;
   public $Panel2 = null;
   public $MSG_Erro = null;
   public $Estilo_Pagina = null;
   public $GroupBox2 = null;
   public $confirmacao = null;
   public $msg_confirmacao = null;
   public $bt_nao = null;
   public $bt_sim = null;
   public $hd_bt_sim_clicado = null;
   public $Label9 = null;
    public $Label10 = null;
    public $mgt_hora_entrega = null;

   function nfcartacorrecaoenvioCreate($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

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

      $mgt_nota_fiscal_numero = $_REQUEST['mgt_nota_fiscal_numero'];

      $Comando_SQL = "select * from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = 'PRD' And mgt_nota_fiscal_numero = '" . trim($mgt_nota_fiscal_numero) . "' order by mgt_nota_fiscal_numero";

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      $this->mgt_nota_fiscal_numero->Text = $mgt_nota_fiscal_numero;
      $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'];
      $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'];
      $this->mgt_nota_fiscal_data_emissao->Text = inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao']);
      $this->mgt_nota_fiscal_carta_correcao_geradas->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_carta_correcao_geradas'];
      $this->mgt_nota_fiscal_chave->Text = '';
      $this->mgt_nota_fiscal_descricao->Text = '';

      $this->MSG_Erro->Caption = "";
   }

   function bt_fecharClick($sender, $params)
   {
      //*** Restaura a Ultima Selecao Efetuada ***
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $_SESSION['comando_sql_grid'];
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      redirect('nf_carta_correcao.php');
   }

   function nfcartacorrecaoenvioJSSubmit($sender, $params)
   {

      ?>
       //Add your javascript code here

      <?php

   }

   function nfcartacorrecaoenvioJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

      <?php

   }
   function mgt_nota_fiscal_cliente_codigoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.nfcartacorrecaoenvio.mgt_nota_fiscal_cliente_nome.focus();
           return false;
        }

        //end
      <?php
   }
   function mgt_nota_fiscal_cliente_nomeJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.nfcartacorrecaoenvio.mgt_nota_fiscal_numero.focus();
           return false;
        }

        //end
      <?php
   }
   function mgt_nota_fiscal_numeroJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.nfcartacorrecaoenvio.mgt_nota_fiscal_data_emissao.focus();
           return false;
        }

        //end
      <?php
   }
   function mgt_nota_fiscal_data_emissaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.nfcartacorrecaoenvio.mgt_nota_fiscal_carta_correcao_geradas.focus();
           return false;
        }

        //end
      <?php
   }
   function mgt_nota_fiscal_carta_correcao_geradasJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.nfcartacorrecaoenvio.mgt_nota_fiscal_chave.focus();
           return false;
        }

        //end
      <?php
   }
   function mgt_nota_fiscal_descricaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.nfcartacorrecaoenvio.bt_alterar.focus();
           return false;
        }

        //end
      <?php
   }
   function mgt_nota_fiscal_chaveJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.nfcartacorrecaoenvio.mgt_hora_entrega.focus();
           return false;
        }

        //end
      <?php
   }
   function mgt_nota_fiscal_chaveJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfcartacorrecaoenvio.mgt_nota_fiscal_chave
        var digits="0123456789"
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
   function bt_transmitirClick($sender, $params)
   {
      $this->confirmacao->Top = 334;
      $this->confirmacao->IsVisible = true;
      $this->hd_bt_sim_clicado->Value = 0;
   }
   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 454;
      $this->confirmacao->IsVisible = false;
      $this->hd_bt_sim_clicado->Value = 0;
   }
   function bt_simClick($sender, $params)
   {
      if(($this->hd_bt_sim_clicado->Value == 0))
      {
         $this->hd_bt_sim_clicado->Value = 1;

         require_once("includes/rotinas_gerais.inc.php");
         require_once("includes/tabelas_ibge.fnc.php");
         require_once("includes/inverte_data_amd_to_dma.fnc.php");
         require_once("includes/inverte_data_dma_to_amd.fnc.php");
         require_once("includes/assinadorTEX.inc.php");

         //*** Fecha a Janela para Gerar o XML ***
         $this->confirmacao->Top = 454;
         $this->confirmacao->IsVisible = false;
         $this->hd_bt_sim_clicado->Value = 0;

         //*** Insere o Registro de Carta de Correcao para Transmissao ***
         $Comando_SQL = "insert into mgt_cartas_correcoes(";
         $Comando_SQL .= "mgt_carta_correcao_nfe, ";
         $Comando_SQL .= "mgt_carta_correcao_chave, ";
         $Comando_SQL .= "mgt_carta_correcao_data, ";
         $Comando_SQL .= "mgt_carta_correcao_hora, ";
         $Comando_SQL .= "mgt_carta_correcao_cliente_codigo, ";
         $Comando_SQL .= "mgt_carta_correcao_cliente_razao_social, ";
         $Comando_SQL .= "mgt_carta_correcao_descricao) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_numero->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_chave->Text) . "',";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim(date("d/m/Y", time()))) . "',";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim(date("H:i:s", time()))) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_codigo->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_descricao->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Obtencao do Numero da Carta de Correcao ***

         $Comando_SQL = "select * from mgt_cartas_correcoes where mgt_carta_correcao_nfe = " . trim($this->mgt_nota_fiscal_numero->Text) . " order by mgt_carta_correcao_numero Desc";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();

         $this->hd_carta_correcao_numero->Value = GetConexaoPrincipal()->SQL_Comunitario->Fields['mgt_carta_correcao_numero'];
         $this->hd_carta_correcao_nfe->Value = trim($this->mgt_nota_fiscal_numero->Text);

         //********************************************************
         //*** Funcoes Utilizadas pela Rotina da Geracao da XML ***
         //********************************************************

         $this->gerar_xml();

         //*****************************************
         //*** INICIO - Assina e Transmite o XML ***
         //*****************************************

         //*** Localiza o Certificado para a Assinatura ***
         if(substr(trim($_SERVER['SystemRoot']), 0, 1) == 'C')
         {
            $certificado = trim($_SESSION['login_caminho_base']) . "certificados\\nfe.pem";
         }
         else
         {
            $certificado = trim($_SESSION['login_caminho_base']) . "certificados/nfe.pem";
         }

         //*** Assina e Valida o XML ***
         assinaXML('nfe/entrada/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml', 'nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml', 'infEvento', $certificado);

         //******************************************************
         //*** INICIO - Abre o XML para Corrigir a Assinatura ***
         //******************************************************

         $arquivo_atributo_xml = fopen('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml', "r");
         $seta_atributo_xml = fread($arquivo_atributo_xml, filesize('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml'));
         fclose($arquivo_atributo_xml);

         //*** Corrige o Atributo de Assinatura de Abertura da TAG ***
         $seta_atributo_xml = str_replace('</infEvento></evento><Signature', '</infEvento><Signature', $seta_atributo_xml);

         //*** Corrige o Atributo de Assinatura de Fechamento da TAG ***
         $seta_atributo_xml = str_replace('</Signature></envEvento>', '</Signature></evento></envEvento>', $seta_atributo_xml);

         $arquivo_atributo_xml = fopen('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml', "w");
         fwrite($arquivo_atributo_xml, $seta_atributo_xml);
         fclose($arquivo_atributo_xml);

         //*****************************************************
         //*** FINAL - Abre o XML para Corrigir a Assinatura ***
         //*****************************************************

         $validacao = validaXML('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml', 'validadores_cc/envCCe_v1.00.xsd');

         if($validacao["status"] == '1')
         {
            $this->transmitir_xml();
         }
         else
         {
            $exibe_erro = trim($validacao["error"]);
            $exibe_erro = str_replace("'", "", $exibe_erro);
            $exibe_erro = str_replace('"', '', $exibe_erro);
            $exibe_erro = str_replace("\n", "\\n", $exibe_erro);

            echo "<script language=\"JavaScript\">alert('#1: Atencao erros encontrados:\\n\\n\\n" . trim($exibe_erro) . "');</script>";
         }

         //****************************************
         //*** FINAL - Assina e Transmite o XML ***
         //****************************************
      }
   }

   public function gerar_xml()
   {
      //****************************************
      //*** INICIO - Gera o XML para o Envio ***
      //****************************************

      //*** Apaga os Arquivos ja gerados ***

      if(file_exists('nfe/entrada/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml'))
      {
         unlink('nfe/entrada/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml');
      }

      if(file_exists('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml'))
      {
         unlink('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml');
      }

      //Declaracao de Variaveis
      $tipo_ambiente = $_SESSION['login_nfe_ambiente'];// 1 - Producao || 2 - Homologacao
      $cnpj_padrao = completa_zeros_retira_caracter($_SESSION['login_cnpj'], 14);

      //*** versao do encoding xml ***
      $geraDom = new DOMDocument('1.0', 'UTF-8');

      //*** retirar os espacos em branco ***
      $geraDom->preserveWhiteSpace = false;
      //*** gerar o codigo ***
      $geraDom->formatOutput = false;// Se True Prevalece a Formatacao com Estrutura (Pulando Linha e Espacos).

      //*** criando o no principal (Raiz) ***
      //*** Cabeca do XML ***

      $hp01 = $geraDom->createElement('envEvento');
      $hp01->setAttribute('xmlns', 'http://www.portalfiscal.inf.br/nfe');
      $hp01->setAttribute('versao', '1.00');

      //*** Criando os Itens Secundarios (Nos) ***
      $hp03 = $geraDom->createElement('idLote', trim($this->hd_carta_correcao_nfe->Value));

      $hp04 = $geraDom->createElement('evento');
      $hp04->setAttribute('versao', '1.00');

      //$chave_acesso_nro = "ID" . "110110" . trim($this->mgt_nota_fiscal_chave->Text) . completa_zeros(trim($this->hd_carta_correcao_numero->Value), 2);
      //$chave_acesso_nro = trim($chave_acesso_nro);

     // $chave_acesso_nro = "ID" . "110110" . completa_zeros(trim($this->hd_carta_correcao_numero->Value), 1) . trim($this->mgt_nota_fiscal_chave->Text);

      $chave_acesso_nro = "ID" . "110110" . trim($this->mgt_nota_fiscal_chave->Text) . completa_zeros(trim($this->hd_carta_correcao_numero->Value), 2);
      $chave_acesso_nro = trim($chave_acesso_nro);

      $hp06 = $geraDom->createElement('infEvento');
      $hp06->setAttribute('Id', $chave_acesso_nro);
      $hp08 = $geraDom->createElement('cOrgao', substr(trim($_SESSION['login_cod_cidade']), 0, 2));
      $hp09 = $geraDom->createElement('tpAmb', $tipo_ambiente);
      $hp10 = $geraDom->createElement('CNPJ', $cnpj_padrao);
      $hp12 = $geraDom->createElement('chNFe', trim($this->mgt_nota_fiscal_chave->Text));
	  $hp13 = $geraDom->createElement('dhEvento', trim(inverte_data_dma_to_amd($this->mgt_nota_fiscal_data_emissao->Text)) . 'T' . trim($this->mgt_hora_entrega->Text) . trim(date("P", time())) );
      $hp14 = $geraDom->createElement('tpEvento', '110110');
      $hp15 = $geraDom->createElement('nSeqEvento', trim($this->hd_carta_correcao_numero->Value));
      $hp16 = $geraDom->createElement('verEvento', '1.00');

      $hp17 = $geraDom->createElement('detEvento');
      $hp17->setAttribute('versao', '1.00');
      $hp19 = $geraDom->createElement('descEvento', 'Carta de Correcao');
      $hp20 = $geraDom->createElement('xCorrecao', retira_acentos(strtoupper(trim($this->mgt_nota_fiscal_descricao->Text)), 0));
      $hp20a = $geraDom->createElement('xCondUso', 'A Carta de Correcao e disciplinada pelo paragrafo 1o-A do art. 7o do Convenio S/N, de 15 de dezembro de 1970 e pode ser utilizada para regularizacao de erro ocorrido na emissao de documento fiscal, desde que o erro nao esteja relacionado com: I - as variaveis que determinam o valor do imposto tais como: base de calculo, aliquota, diferenca de preco, quantidade, valor da operacao ou da prestacao; II - a correcao de dados cadastrais que implique mudanca do remetente ou do destinatario; III - a data de emissao ou de saida.');

      //*** Inicio - Preparacao para a Gravacao dos Nos do XML ***

      $hp17->appendChild($hp19);
      $hp17->appendChild($hp20);
      $hp17->appendChild($hp20a);

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

      //*** Final - Preparacao para a Gravacao dos Nos do XML ***

      $geraDom->appendChild($hp01);

      //*** Salvando o XML ***
      $geraDom->save('nfe/entrada/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml');

      //***************************************
      //*** FINAL - Gera o XML para o Envio ***
      //***************************************
   }

   public function transmitir_xml()
   {
      //********************************************************
      //*** Funcoes Utilizadas pela Rotina da Geracao da XML ***
      //********************************************************

      require_once("includes/rotinas_gerais.inc.php");
      require_once("includes/tabelas_ibge.fnc.php");
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");
      require_once("includes/assinadorTEX.inc.php");

      error_reporting(0);
      ini_set('display_errors', '1');
      libxml_use_internal_errors(true);

      //*******************************************************
      //*** Ao tentar validar um arquivo XML, se algum erro ***
      //*** for encontrado a libxml ira gerar Warnings,     ***
      //*** a opcao abaixo desativa este processo           ***
      //*******************************************************

      //*** Limpa a Listagem de Erros ***
      $listagem_erros = "";

      //Declaracao de Variaveis
      $tipo_ambiente = $_SESSION['login_nfe_ambiente'];// 1 - Producao || 2 - Homologacao
      $serie_nfe = $_SESSION['login_nfe_serie'];// Serie da Nota Fiscal
      $cnpj_padrao = completa_zeros_retira_caracter($_SESSION['login_cnpj'], 14);
      $senha_nfe = $_SESSION['login_nfe_senha'];
      $status_servico = false;

      //*** Verifica o Status do Servico no Servidor de SOAP ***
      $status_servico_SOAP = status_servidor_SOAP($tipo_ambiente);
      $status_servico = $status_servico_SOAP["status"];

      if( ! $status_servico)
      {
         $listagem_erros = 'ATENCAO: ' . trim($status_servico_SOAP["mensagem"]);
         echo "<script language=\"JavaScript\">alert('#2: " . $listagem_erros . "');</script>";
      }

      //*****************************************************
      //*** INICIO - Gerando o Envio da Carta de Correcao ***
      //*****************************************************

      if($status_servico)
      {
         //********************************
         //*** INICIO - Validando o XML ***
         //********************************

         //*** Verifica a Validacao do Schema ***
         $validacao = validaXML('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml', 'validadores_cc/envCCe_v1.00.xsd');

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

            if(substr(trim($_SERVER['SystemRoot']), 0, 1) == 'C')
            {
               $certificado = trim($_SESSION['login_caminho_base']) . "certificados\\nfe.pem";
            }
            else
            {
               $certificado = trim($_SESSION['login_caminho_base']) . "certificados/nfe.pem";
            }

            //*** Prepara o Arquivo XML para o Envio SOAP ***

            $envio_xml = simplexml_load_file('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml');

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
            $retorno_xml = str_replace('<?xml version="1.0" encoding="utf-8"?><soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema"><soap:Header><nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/nfe/wsdl/RecepcaoEvento"><cUF>35</cUF><versaoDados>1.00</versaoDados></nfeCabecMsg></soap:Header><soap:Body>', '', $retorno_xml);
            $retorno_xml = str_replace('</soap:Body></soap:Envelope>', '', $retorno_xml);
            $retorno_xml = str_replace('utf-8', 'UTF-8', $retorno_xml);

            //*** Grava o XML de Retorno ***
            $grava_retorno_xml = fopen('nfe/retEnvCCe.xml', "w");
            fwrite($grava_retorno_xml, $retorno_xml);
            fclose($grava_retorno_xml);

            //***********************************************
            //*** Le o Retorno do XML e Verifica o Status ***
            //***********************************************

            $ler_retorno_nfe_xml = simplexml_load_file('nfe/retEnvCCe.xml');
            $MSG_Erro = utf8_decode($ler_retorno_nfe_xml->retEnvEvento->retEvento->infEvento->xMotivo);
            $nro_recebimento = utf8_decode($ler_retorno_nfe_xml->retEnvEvento->retEvento->infEvento->nProt);

            if(trim($MSG_Erro) == 'Evento registrado e vinculado a NF-e')
            {
               $listagem_erros = 'CARTA DE CORRECAO GERADA!!!\n\n\n\n';
               $listagem_erros .= 'Carta de Correcao registrada e vinculada a NF-e\n\n';
               $listagem_erros .= ' || Nro.NFe: ' . $this->hd_carta_correcao_nfe->Value . '\n\n';
               $listagem_erros .= ' || Nro.Protocolo: ' . $nro_recebimento . '\n\n';
               $listagem_erros .= ' || Nro.Chave de Acesso: ' . $this->mgt_nota_fiscal_chave->Text . '\n\n';
               echo "<script language=\"JavaScript\">alert('#3: " . $listagem_erros . "');</script>";

               //*** INICIO - Prepara a Geracao do Arquivo de Envio para o Cliente ***

               copy('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml', 'nfe/entregar_cliente/CCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml');

               //*** FINAL - Prepara a Geracao do Arquivo de Envio para o Cliente ***

               //******************************************
               //*** INICIO - Grava a Carta de Correcao ***
               //******************************************

               $Comando_SQL = "update mgt_cartas_correcoes set ";
               $Comando_SQL .= "mgt_carta_correcao_protocolo = '" . $nro_recebimento . "' ";
               $Comando_SQL .= "where ";
               $Comando_SQL .= "mgt_carta_correcao_nfe = '" . trim($this->hd_carta_correcao_nfe->Value) . "' and ";
               $Comando_SQL .= "mgt_carta_correcao_numero = '" . trim($this->hd_carta_correcao_numero->Value) . "' ";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               //*** Registra o Status na Nota Fiscal ***

               $Comando_SQL = "update mgt_notas_fiscais set ";
               $Comando_SQL .= "mgt_nota_fiscal_carta_correcao_geradas = CONCAT(mgt_nota_fiscal_carta_correcao_geradas,'CC-e:" . trim($this->hd_carta_correcao_nfe->Value) . '#' . trim($this->hd_carta_correcao_numero->Value) . ",') ";
               $Comando_SQL .= "where ";
               $Comando_SQL .= "mgt_nota_fiscal_finalidade = 'PRD' and ";
               $Comando_SQL .= "mgt_nota_fiscal_numero = '" . trim($this->hd_carta_correcao_nfe->Value) . "' ";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               //*****************************************
               //*** FINAL - Grava a Carta de Correcao ***
               //*****************************************

               //*** INICIO - Apaga os Arquivos Enviados ***

               if(file_exists('swap/swap_CCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml'))
               {
                  unlink('swap/swap_CCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml');
               }

               if(file_exists('nfe/entrada/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml'))
               {
                  unlink('nfe/entrada/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml');
               }

               if(file_exists('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml'))
               {
                  unlink('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml');
               }

               //*** FINAL - Apaga os Arquivos Enviados ***

               //*** Restaura a Ultima Selecao Efetuada ***
               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $_SESSION['comando_sql_grid'];
               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

               //*** Abre a Janela da Carta de Correcao ***

               //*** Abre a Janela do DANFE ***
               echo "<script language=\"JavaScript\">";
               echo "var pos_top = (parseInt((screen.height)/2) - 320);";
               echo "var pos_left = (parseInt((screen.width)/2) - 387);";
               echo "window.open('nf_carta_correcao_danfe.php?cce=" . "CCe_" . trim($this->hd_carta_correcao_nfe->Value) . ".xml&nro_nfe=" . trim($this->hd_carta_correcao_nfe->Value) . "&nro_cce=" . trim($this->hd_carta_correcao_numero->Value) . "','CCe_" . trim($this->hd_carta_correcao_nfe->Value) . "','toolbar=yes,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
               echo 'window.location="nf_carta_correcao.php";';
               echo "</script>";
            }
            else
            {
               $listagem_erros = 'Problemas Encontrados: ' . $MSG_Erro;
               echo "<script language=\"JavaScript\">alert('#4: " . $listagem_erros . "');</script>";
            }

            //*** FINAL - Se Conecta com o Servidor e Envia o XML ***
         }
         else
         {
            $listagem_erros = trim($validacao["error"]);
            $exibe_erro = str_replace("'", "", $exibe_erro);
            $exibe_erro = str_replace('"', '', $exibe_erro);

            if(file_exists('swap/swap_CCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml'))
            {
               unlink('swap/swap_CCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml');
            }

            if(file_exists('nfe/entrada/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml'))
            {
               unlink('nfe/entrada/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '.xml');
            }

            if(file_exists('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml'))
            {
               unlink('nfe/saida/envCCe_' . trim($this->hd_carta_correcao_nfe->Value) . '_sign.xml');
            }

            echo "<script language=\"JavaScript\">alert('#5: " . $listagem_erros . "');</script>";
         }
      }

      //****************************************************
      //*** FINAL - Gerando o Envio da Carta de Correcao ***
      //****************************************************
   }
    function mgt_hora_entregaJSKeyPress($sender, $params)
    {
        ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.nfcartacorrecaoenvio.mgt_nota_fiscal_descricao.focus();
           return false;
        }

        //end
        <?php
    }
    function mgt_hora_entregaJSKeyUp($sender, $params)
    {
        ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfcartacorrecaoenvio.mgt_hora_entrega
        var digits="0123456789:"
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

}

global $application;

global $nfcartacorrecaoenvio;

//Creates the form
$nfcartacorrecaoenvio = new nfcartacorrecaoenvio($application);

//Read from resource file
$nfcartacorrecaoenvio->loadResource(__FILE__);

//Shows the form
$nfcartacorrecaoenvio->show();

?>