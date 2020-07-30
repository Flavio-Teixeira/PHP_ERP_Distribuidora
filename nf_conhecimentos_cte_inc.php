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
require_once("rpcl/rpcl.inc.php");
//Includes
require_once("conexao_principal.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("styles.inc.php");
use_unit("dbgrids.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class nfconhecimentoscteinc extends Page
{
   public $mgt_cte_tpcar = null;
   public $mgt_cte_tprod = null;
   public $mgt_cte_tpveic = null;
   public $mgt_cte_tpprop = null;
   public $mgt_cte_uf = null;
   public $mgt_cte_capm3 = null;
   public $mgt_cte_capkg = null;
   public $mgt_cte_tara = null;
   public $mgt_cte_placa = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Label5 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label2 = null;
   public $mgt_cte_renavam = null;
   public $busca_cliente = null;
   public $Label65 = null;
   public $Label66 = null;
   public $dados_busca = null;
   public $opcao_busca = null;
   public $bt_buscar = null;
   public $Label67 = null;
   public $registros_clientes = null;
   public $Label68 = null;
   public $adiciona_cliente_numero = null;
   public $Label69 = null;
   public $adiciona_cliente_codigo = null;
   public $adiciona_cliente_nome = null;
   public $Label70 = null;
   public $bt_adiciona_cliente = null;
   public $bt_fechar_cliente = null;
   public $opcao_adiciona_cliente = null;
   public $hd_pais = null;
   public $hd_cep = null;
   public $hd_estado = null;
   public $hd_cidade = null;
   public $hd_bairro = null;
   public $hd_endereco = null;
   public $hd_fone = null;
   public $hd_inscricao_estadual = null;
   public $hd_razao_social = null;
   public $hd_nome = null;
   public $hd_codigo = null;
   public $Label71 = null;
   public $mgt_cte_destinatario_codigo = null;
   public $Label64 = null;
   public $mgt_cte_remetente_codigo = null;
   public $hd_numero = null;
   public $Estilo_Pagina = null;
   public $Label1 = null;
   public $lbl_mgt_cte_tipo = null;
   public $lbl_mgt_cte_tipo_servico = null;
   public $lbl_mgt_cte_tomador = null;
   public $lbl_mgt_cte_forma_pagto = null;
   public $lbl_mgt_cte_modelo = null;
   public $lbl_mgt_cte_serie = null;
   public $lbl_mgt_cte_numero = null;
   public $mgt_cte_tomador = null;
   public $mgt_cte_tipo = null;
   public $mgt_cte_tipo_servico = null;
   public $mgt_cte_modelo = null;
   public $mgt_cte_serie = null;
   public $mgt_cte_numero = null;
   public $mgt_cte_forma_pagto = null;
   public $lbl_mgt_cte_cfop = null;
   public $lbl_mgt_cte_natureza_operacao = null;
   public $mgt_cte_cfop = null;
   public $mgt_cte_natureza_operacao = null;
   public $lbl_origem = null;
   public $lbl_destino = null;
   public $mgt_cte_origem_estado = null;
   public $lbl_mgt_cte_origem_estado = null;
   public $lbl_mgt_cte_origem_cidade = null;
   public $mgt_cte_origem_cidade = null;
   public $lbl_mgt_cte_destino_estado = null;
   public $mgt_cte_destino_estado = null;
   public $mgt_cte_destino_cidade = null;
   public $lbl_mgt_cte_destino_cidade = null;
   public $grp_remetente = null;
   public $Label17 = null;
   public $Label18 = null;
   public $Label19 = null;
   public $Label20 = null;
   public $Label21 = null;
   public $Label22 = null;
   public $Label23 = null;
   public $Label24 = null;
   public $Label25 = null;
   public $mgt_cte_remetente_razao_social = null;
   public $Button1 = null;
   public $mgt_cte_remetente_inscricao_estadual = null;
   public $mgt_cte_remetente_endereco = null;
   public $mgt_cte_remetente_bairro = null;
   public $mgt_cte_remetente_cidade = null;
   public $mgt_cte_remetente_estado = null;
   public $mgt_cte_remetente_cep = null;
   public $mgt_cte_remetente_pais = null;
   public $mgt_cte_remetente_fone = null;
   public $grp_destinatario = null;
   public $Label26 = null;
   public $Label27 = null;
   public $Label28 = null;
   public $Label29 = null;
   public $Label30 = null;
   public $Label31 = null;
   public $Label32 = null;
   public $Label33 = null;
   public $Label34 = null;
   public $mgt_cte_destinatario_razao_social = null;
   public $Button2 = null;
   public $mgt_cte_destinatario_inscricao_estadual = null;
   public $mgt_cte_destinatario_endereco = null;
   public $mgt_cte_destinatario_bairro = null;
   public $mgt_cte_destinatario_cidade = null;
   public $mgt_cte_destinatario_estado = null;
   public $mgt_cte_destinatario_cep = null;
   public $mgt_cte_destinatario_pais = null;
   public $mgt_cte_destinatario_fone = null;
   public $GroupBox2 = null;
   public $Label35 = null;
   public $Label36 = null;
   public $mgt_cte_produto_predominante = null;
   public $mgt_cte_produto_total_mercadoria = null;
   public $GroupBox3 = null;
   public $Label37 = null;
   public $Label38 = null;
   public $mgt_cte_produto_quantidade_1 = null;
   public $mgt_cte_produto_unidade_1 = null;
   public $mgt_cte_produto_quantidade_2 = null;
   public $mgt_cte_produto_unidade_2 = null;
   public $mgt_cte_produto_quantidade_3 = null;
   public $mgt_cte_produto_unidade_3 = null;
   public $mgt_cte_produto_quantidade_7 = null;
   public $mgt_cte_produto_unidade_7 = null;
   public $mgt_cte_produto_quantidade_8 = null;
   public $mgt_cte_produto_unidade_8 = null;
   public $mgt_cte_produto_quantidade_4 = null;
   public $mgt_cte_produto_unidade_4 = null;
   public $mgt_cte_produto_quantidade_5 = null;
   public $mgt_cte_produto_unidade_5 = null;
   public $mgt_cte_produto_quantidade_6 = null;
   public $mgt_cte_produto_unidade_6 = null;
   public $mgt_cte_produto_quantidade_9 = null;
   public $mgt_cte_produto_unidade_9 = null;
   public $mgt_cte_produto_quantidade_10 = null;
   public $mgt_cte_produto_unidade_10 = null;
   public $Label39 = null;
   public $Label40 = null;
   public $Label41 = null;
   public $Label42 = null;
   public $Label43 = null;
   public $Label44 = null;
   public $Label45 = null;
   public $Label46 = null;
   public $mgt_cte_servico_1 = null;
   public $mgt_cte_servico_valor_1 = null;
   public $mgt_cte_servico_2 = null;
   public $mgt_cte_servico_valor_2 = null;
   public $mgt_cte_servico_3 = null;
   public $mgt_cte_servico_valor_3 = null;
   public $mgt_cte_servico_4 = null;
   public $mgt_cte_servico_valor_4 = null;
   public $mgt_cte_servico_5 = null;
   public $mgt_cte_servico_valor_5 = null;
   public $mgt_cte_servico_6 = null;
   public $mgt_cte_servico_valor_6 = null;
   public $mgt_cte_servico_7 = null;
   public $mgt_cte_servico_valor_7 = null;
   public $mgt_cte_servico_8 = null;
   public $mgt_cte_servico_valor_8 = null;
   public $mgt_cte_servico_9 = null;
   public $mgt_cte_servico_valor_9 = null;
   public $mgt_cte_servico_10 = null;
   public $mgt_cte_servico_valor_10 = null;
   public $Label47 = null;
   public $Label48 = null;
   public $Label49 = null;
   public $mgt_cte_servico_valor_total = null;
   public $Label50 = null;
   public $mgt_cte_servico_valor_receber = null;
   public $GroupBox4 = null;
   public $Label51 = null;
   public $mgt_cte_situacao_tributaria = null;
   public $Label52 = null;
   public $Label53 = null;
   public $Label54 = null;
   public $Label55 = null;
   public $Label56 = null;
   public $mgt_cte_percentual_reducao_bc = null;
   public $mgt_cte_valor_bc_icms = null;
   public $mgt_cte_aliquota_icms = null;
   public $mgt_cte_valor_icms = null;
   public $mgt_cte_valor_outorgado = null;
   public $GroupBox5 = null;
   public $Label57 = null;
   public $mgt_cte_chave_1 = null;
   public $mgt_cte_chave_6 = null;
   public $mgt_cte_chave_2 = null;
   public $mgt_cte_chave_7 = null;
   public $mgt_cte_chave_3 = null;
   public $mgt_cte_chave_8 = null;
   public $mgt_cte_chave_4 = null;
   public $mgt_cte_chave_9 = null;
   public $mgt_cte_chave_5 = null;
   public $mgt_cte_chave_10 = null;
   public $Label58 = null;
   public $GroupBox6 = null;
   public $mgt_cte_observacao = null;
   public $GroupBox7 = null;
   public $Label59 = null;
   public $Label60 = null;
   public $Label61 = null;
   public $mgt_cte_rntrc = null;
   public $mgt_cte_data_entrega = null;
   public $mgt_cte_lotacao = null;
   public $GroupBox8 = null;
   public $Panel1 = null;
   public $Label62 = null;
   public $Panel2 = null;
   public $Label63 = null;
   public $bt_fechar = null;
   public $bt_transmitir = null;
   public $MSG_Erro = null;
   public $adiciona_cliente = null;
   public $confirmacao = null;
   public $msg_confirmacao = null;
   public $bt_nao = null;
   public $bt_sim = null;
   public $GroupBox1 = null;
   public $Label12 = null;
   public $mgt_cte_data_receber = null;
    public $Label13 = null;
    public $mgt_cte_seguro = null;

   public function limpa_campos()
   {
      $this->mgt_cte_numero->Text = '';
      $this->mgt_cte_modelo->Text = '57';
      $this->mgt_cte_serie->Text = $_SESSION['login_nfe_serie'];
      $this->mgt_cte_tipo->Text = 'Normal';
      $this->mgt_cte_tipo_servico->Text = 'Normal';
      $this->mgt_cte_tomador->Text = 'Destinatario';
      $this->mgt_cte_forma_pagto->ItemIndex = '1';
      $this->mgt_cte_cfop->Text = '5352';
      $this->mgt_cte_natureza_operacao->Text = 'TRANSPORTE';
      $this->mgt_cte_origem_estado->ItemIndex = 'SP';
      $this->mgt_cte_origem_cidade->Text = '';
      $this->mgt_cte_destino_estado->ItemIndex = 'SP';
      $this->mgt_cte_destino_cidade->Text = '';
      $this->mgt_cte_remetente_codigo->Text = '';
      $this->mgt_cte_remetente_razao_social->Text = '';
      $this->mgt_cte_remetente_inscricao_estadual->Text = '';
      $this->mgt_cte_remetente_fone->Text = '';
      $this->mgt_cte_remetente_endereco->Text = '';
      $this->mgt_cte_remetente_bairro->Text = '';
      $this->mgt_cte_remetente_cidade->Text = '';
      $this->mgt_cte_remetente_estado->Text = '';
      $this->mgt_cte_remetente_cep->Text = '';
      $this->mgt_cte_remetente_pais->Text = '';
      $this->mgt_cte_destinatario_codigo->Text = '';
      $this->mgt_cte_destinatario_razao_social->Text = '';
      $this->mgt_cte_destinatario_inscricao_estadual->Text = '';
      $this->mgt_cte_destinatario_fone->Text = '';
      $this->mgt_cte_destinatario_endereco->Text = '';
      $this->mgt_cte_destinatario_bairro->Text = '';
      $this->mgt_cte_destinatario_cidade->Text = '';
      $this->mgt_cte_destinatario_estado->Text = '';
      $this->mgt_cte_destinatario_cep->Text = '';
      $this->mgt_cte_destinatario_pais->Text = '';
      $this->mgt_cte_produto_predominante->Text = '';
      $this->mgt_cte_produto_quantidade_1->Text = '';
      $this->mgt_cte_produto_unidade_1->ItemIndex = '02';
      $this->mgt_cte_produto_quantidade_2->Text = '';
      $this->mgt_cte_produto_unidade_2->ItemIndex = '02';
      $this->mgt_cte_produto_quantidade_3->Text = '';
      $this->mgt_cte_produto_unidade_3->ItemIndex = '02';
      $this->mgt_cte_produto_quantidade_4->Text = '';
      $this->mgt_cte_produto_unidade_4->ItemIndex = '02';
      $this->mgt_cte_produto_quantidade_5->Text = '';
      $this->mgt_cte_produto_unidade_5->ItemIndex = '02';
      $this->mgt_cte_produto_quantidade_6->Text = '';
      $this->mgt_cte_produto_unidade_6->ItemIndex = '02';
      $this->mgt_cte_produto_quantidade_7->Text = '';
      $this->mgt_cte_produto_unidade_7->ItemIndex = '02';
      $this->mgt_cte_produto_quantidade_8->Text = '';
      $this->mgt_cte_produto_unidade_8->ItemIndex = '02';
      $this->mgt_cte_produto_quantidade_9->Text = '';
      $this->mgt_cte_produto_unidade_9->ItemIndex = '02';
      $this->mgt_cte_produto_quantidade_10->Text = '';
      $this->mgt_cte_produto_unidade_10->ItemIndex = '02';
      $this->mgt_cte_produto_total_mercadoria->Text = '0';
      $this->mgt_cte_servico_1->Text = '';
      $this->mgt_cte_servico_valor_1->Text = '0';
      $this->mgt_cte_servico_2->Text = '';
      $this->mgt_cte_servico_valor_2->Text = '0';
      $this->mgt_cte_servico_3->Text = '';
      $this->mgt_cte_servico_valor_3->Text = '0';
      $this->mgt_cte_servico_4->Text = '';
      $this->mgt_cte_servico_valor_4->Text = '0';
      $this->mgt_cte_servico_5->Text = '';
      $this->mgt_cte_servico_valor_5->Text = '0';
      $this->mgt_cte_servico_6->Text = '';
      $this->mgt_cte_servico_valor_6->Text = '0';
      $this->mgt_cte_servico_7->Text = '';
      $this->mgt_cte_servico_valor_7->Text = '0';
      $this->mgt_cte_servico_8->Text = '';
      $this->mgt_cte_servico_valor_8->Text = '0';
      $this->mgt_cte_servico_9->Text = '';
      $this->mgt_cte_servico_valor_9->Text = '0';
      $this->mgt_cte_servico_10->Text = '';
      $this->mgt_cte_servico_valor_10->Text = '0';
      $this->mgt_cte_servico_valor_total->Text = '0';
      $this->mgt_cte_servico_valor_receber->Text = '0';
      $this->mgt_cte_data_receber->Text = '';
      $this->mgt_cte_situacao_tributaria->ItemIndex = '00';
      $this->mgt_cte_percentual_reducao_bc->Text = '0';
      $this->mgt_cte_valor_bc_icms->Text = '0';
      $this->mgt_cte_aliquota_icms->Text = '0';
      $this->mgt_cte_valor_icms->Text = '0';
      $this->mgt_cte_valor_outorgado->Text = '0';
      $this->mgt_cte_chave_1->Text = '';
      $this->mgt_cte_chave_2->Text = '';
      $this->mgt_cte_chave_3->Text = '';
      $this->mgt_cte_chave_4->Text = '';
      $this->mgt_cte_chave_5->Text = '';
      $this->mgt_cte_chave_6->Text = '';
      $this->mgt_cte_chave_7->Text = '';
      $this->mgt_cte_chave_8->Text = '';
      $this->mgt_cte_chave_9->Text = '';
      $this->mgt_cte_chave_10->Text = '';
      $this->mgt_cte_observacao->Text = '';
      $this->mgt_cte_rntrc->Text = '';
      $this->mgt_cte_lotacao->ItemIndex = '1';
	  $this->mgt_cte_seguro->ItemIndex = '0';
      $this->mgt_cte_data_entrega->Text = '';
      $this->mgt_cte_renavam->Text = '';
      $this->mgt_cte_placa->Text = '';
      $this->mgt_cte_tara->Text = '';
      $this->mgt_cte_capkg->Text = '';
      $this->mgt_cte_capm3->Text = '';
      $this->mgt_cte_uf->ItemIndex = 'SP';
      $this->mgt_cte_tpprop->ItemIndex = 'P';
      $this->mgt_cte_tpveic->ItemIndex = '0';
      $this->mgt_cte_tprod->ItemIndex = '05';
      $this->mgt_cte_tpcar->ItemIndex = '04';

      $this->MSG_Erro->Caption = '';
   }

   public function gerar_xml()
   {
      //*** Includes Necessarias para a Geracao do XML ***

      require_once("includes/rotinas_gerais.inc.php");
      require_once("includes/tabelas_ibge.fnc.php");
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");
      require_once("includes/assinadorTEX.inc.php");

      //****************************************
      //*** INICIO - Gera o XML para o Envio ***
      //****************************************

      //*** INICIO - Obtem o Numero do Conhecimento Eletronico ***

      $mgt_numero_cte = $this->mgt_cte_numero->Text;

      //*** Apaga os Arquivos ja gerados ***

      if(file_exists('nfe/entrada/CTe_' . trim($mgt_numero_cte) . '.xml'))
      {
         unlink('nfe/entrada/CTe_' . trim($mgt_numero_cte) . '.xml');
      }

      if(file_exists('nfe/saida/CTe_' . trim($mgt_numero_cte) . '_sign.xml'))
      {
         unlink('nfe/saida/CTe_' . trim($mgt_numero_cte) . '_sign.xml');
      }

      if(file_exists('nfe/entregar_cliente/CTe_' . trim($mgt_numero_cte) . '.xml'))
      {
         unlink('nfe/entregar_cliente/CTe_' . trim($mgt_numero_cte) . '.xml');
      }

      if(file_exists('nfe/importa_conhecimento/CTe_' . trim($mgt_numero_cte) . '.xml'))
      {
         unlink('nfe/importa_conhecimento/CTe_' . trim($mgt_numero_cte) . '.xml');
      }

      //*** FINAL - Obtem o Numero do Conhecimento Eletronico ***

      //Declaracao de Variaveis
      $tipo_ambiente = $_SESSION['login_nfe_ambiente'];// 1 - Producao || 2 - Homologacao
      $cnpj_padrao = completa_zeros_retira_caracter($_SESSION['login_cnpj'], 14);
      $serie_cte = $_SESSION['login_nfe_serie'];// Serie da Nota Fiscal

      //*** versao do encoding xml ***
      $geraDom = new DOMDocument('1.0', 'UTF-8');

      //*** retirar os espacos em branco ***
      $geraDom->preserveWhiteSpace = false;

      //*** gerar o codigo ***
      $geraDom->formatOutput = false;// Se True Prevalece a Formatacao com Estrutura (Pulando Linha e Espacos).

      //*** criando o no principal (Raiz) ***
      //*** Cabeca do XML ***

      $ct000 = $geraDom->createElement('CTe');
      $ct000->setAttribute('xmlns', 'http://www.portalfiscal.inf.br/cte');

      //*** Dados do Conhecimento para o XML ***

      //*** INICIO - Geracao da Chave de Acesso ***

      $tipo_emissao = '1';
      $chave_acesso_nro = chave_acesso_cte('35', $cnpj_padrao, $mgt_numero_cte, $tipo_emissao, $serie_cte);
      $chave_acesso_nro = trim($chave_acesso_nro);

      $digito_chave_acesso_nro = substr($chave_acesso_nro, (strlen($chave_acesso_nro) - 1), 1);
      $digito_chave_acesso_nro = trim($digito_chave_acesso_nro);

      //*** FINAL - Geracao da Chave de Acesso ***

      //*** Continuacao do XML ***

      $ct001 = $geraDom->createElement('infCte');
      $ct001->setAttribute('versao', '2.00');
      $ct001->setAttribute('Id', 'CTe' . $chave_acesso_nro);

      $ct004 = $geraDom->createElement('ide');
      $ct005 = $geraDom->createElement('cUF', '35');
      $ct006 = $geraDom->createElement('cCT', codigo_numerico($mgt_numero_cte));
      $ct007 = $geraDom->createElement('CFOP', retira_acentos(strtoupper($this->mgt_cte_cfop->Text), 0));
      $ct008 = $geraDom->createElement('natOp', retira_acentos(strtoupper($this->mgt_cte_natureza_operacao->Text), 0));

      $ct009 = $geraDom->createElement('forPag', retira_acentos(strtoupper($this->mgt_cte_forma_pagto->ItemIndex), 0));
      $ct010 = $geraDom->createElement('mod', retira_acentos(strtoupper($this->mgt_cte_modelo->Text), 0));
      $ct011 = $geraDom->createElement('serie', retira_acentos(strtoupper($this->mgt_cte_serie->Text), 0));
      $ct012 = $geraDom->createElement('nCT', retira_acentos(strtoupper($this->mgt_cte_numero->Text), 0));
      $ct013 = $geraDom->createElement('dhEmi', trim(date("Y-m-d", time())) . 'T' . trim(date("H:i:s", time())));
      $ct014 = $geraDom->createElement('tpImp', '1');
      $ct015 = $geraDom->createElement('tpEmis', '1');
      $ct016 = $geraDom->createElement('cDV', $digito_chave_acesso_nro);
      $ct017 = $geraDom->createElement('tpAmb', $tipo_ambiente);
      $ct018 = $geraDom->createElement('tpCTe', '0');
      $ct019 = $geraDom->createElement('procEmi', '0');
      $ct020 = $geraDom->createElement('verProc', 'MGTEXV2K77');
      $ct022 = $geraDom->createElement('cMunEnv', retira_acentos(strtoupper($_SESSION['login_cod_cidade']), 0));
      $ct023 = $geraDom->createElement('xMunEnv', retira_acentos(strtoupper($_SESSION['login_cidade']), 0));
      $ct024 = $geraDom->createElement('UFEnv', retira_acentos(strtoupper($_SESSION['login_estado']), 0));
      $ct025 = $geraDom->createElement('modal', '01');
      $ct026 = $geraDom->createElement('tpServ', '0');
      $ct027 = $geraDom->createElement('cMunIni', municipios_ibge($this->mgt_cte_origem_estado->ItemIndex, $this->mgt_cte_origem_cidade->Text));
      $ct028 = $geraDom->createElement('xMunIni', retira_acentos(strtoupper($this->mgt_cte_origem_cidade->Text), 60));
      $ct029 = $geraDom->createElement('UFIni', retira_acentos(strtoupper($this->mgt_cte_origem_estado->ItemIndex), 0));
      $ct030 = $geraDom->createElement('cMunFim', municipios_ibge($this->mgt_cte_destino_estado->ItemIndex, $this->mgt_cte_destino_cidade->Text));
      $ct031 = $geraDom->createElement('xMunFim', retira_acentos(strtoupper($this->mgt_cte_destino_cidade->Text), 60));
      $ct032 = $geraDom->createElement('UFFim', retira_acentos(strtoupper($this->mgt_cte_destino_estado->ItemIndex), 0));
      $ct033 = $geraDom->createElement('retira', '1');

      $ct035 = $geraDom->createElement('toma03');
      $ct036 = $geraDom->createElement('toma', '3');

      //*** Gravando os Nos ***

      $ct035->appendChild($ct036);

      $ct004->appendChild($ct005);
      $ct004->appendChild($ct006);
      $ct004->appendChild($ct007);
      $ct004->appendChild($ct008);
      $ct004->appendChild($ct009);
      $ct004->appendChild($ct010);
      $ct004->appendChild($ct011);
      $ct004->appendChild($ct012);
      $ct004->appendChild($ct013);
      $ct004->appendChild($ct014);
      $ct004->appendChild($ct015);
      $ct004->appendChild($ct016);
      $ct004->appendChild($ct017);
      $ct004->appendChild($ct018);
      $ct004->appendChild($ct019);
      $ct004->appendChild($ct020);
      $ct004->appendChild($ct022);
      $ct004->appendChild($ct023);
      $ct004->appendChild($ct024);
      $ct004->appendChild($ct025);
      $ct004->appendChild($ct026);
      $ct004->appendChild($ct027);
      $ct004->appendChild($ct028);
      $ct004->appendChild($ct029);
      $ct004->appendChild($ct030);
      $ct004->appendChild($ct031);
      $ct004->appendChild($ct032);
      $ct004->appendChild($ct033);
      $ct004->appendChild($ct035);

      //*** Continuacao do XML ***

      $ct059 = $geraDom->createElement('compl');
      $ct063 = $geraDom->createElement('fluxo', '');

      if(trim($this->mgt_cte_forma_pagto->ItemIndex) == '1')
      {
         $this->mgt_cte_observacao->Text = trim($this->mgt_cte_observacao->Text) . " // DUPLICATA: " . trim($this->mgt_cte_numero->Text) . " - VENCIMENTO: " . trim($this->mgt_cte_data_receber->Text) . " - VALOR: R$ " . trim(number_format($this->mgt_cte_servico_valor_receber->Text, 2, '.', ''));
      }

      $this->mgt_cte_observacao->Text = trim($this->mgt_cte_observacao->Text);

      if(trim($this->mgt_cte_observacao->Text) <> '')
      {
         $ct090 = $geraDom->createElement('xObs', retira_acentos(strtoupper($this->mgt_cte_observacao->Text), 2000));
      }

      //*** Gravando os Nos ***

      $ct059->appendChild($ct063);

      if(trim($this->mgt_cte_observacao->Text) <> '')
      {
         $ct059->appendChild($ct090);
      }

      //*** Continuacao do XML ***

      $ct097 = $geraDom->createElement('emit');
      $ct098 = $geraDom->createElement('CNPJ', $cnpj_padrao);
      $ct099 = $geraDom->createElement('IE', retira_acentos_ponto_traco_barra(strtoupper($_SESSION['login_ie']), 0));
      $ct100 = $geraDom->createElement('xNome', retira_acentos(strtoupper($_SESSION['login_razao']), 0));
      $ct101 = $geraDom->createElement('xFant', retira_acentos(strtoupper($_SESSION['login_empresa']), 0));

      $ct102 = $geraDom->createElement('enderEmit');
      $ct103 = $geraDom->createElement('xLgr', retira_acentos(strtoupper($_SESSION['login_endereco']), 0));
      $ct104 = $geraDom->createElement('nro', retira_acentos(strtoupper($_SESSION['login_nro']), 0));

      if(trim($_SESSION['hd_login_complemento']) <> '')
      {
         $ct105 = $geraDom->createElement('xCpl', retira_acentos(strtoupper($_SESSION['hd_login_complemento']), 0));
      }

      $ct106 = $geraDom->createElement('xBairro', retira_acentos(strtoupper($_SESSION['login_bairro']), 0));
      $ct107 = $geraDom->createElement('cMun', retira_acentos(strtoupper($_SESSION['login_cod_cidade']), 0));
      $ct108 = $geraDom->createElement('xMun', retira_acentos(strtoupper($_SESSION['login_cidade']), 0));
      $ct109 = $geraDom->createElement('CEP', retira_acentos_ponto_traco_barra(strtoupper($_SESSION['login_cep']), 0));
      $ct110 = $geraDom->createElement('UF', retira_acentos(strtoupper($_SESSION['login_estado']), 0));
      $ct111 = $geraDom->createElement('fone', retira_acentos_ponto_traco_barra(strtoupper($_SESSION['login_fone']), 0));

      //*** Gravando os Nos ***

      $ct102->appendChild($ct103);
      $ct102->appendChild($ct104);

      if(trim($_SESSION['hd_login_complemento']) <> '')
      {
         $ct102->appendChild($ct105);
      }

      $ct102->appendChild($ct106);
      $ct102->appendChild($ct107);
      $ct102->appendChild($ct108);
      $ct102->appendChild($ct109);
      $ct102->appendChild($ct110);
      $ct102->appendChild($ct111);

      $ct097->appendChild($ct098);
      $ct097->appendChild($ct099);
      $ct097->appendChild($ct100);
      $ct097->appendChild($ct101);
      $ct097->appendChild($ct102);

      //*** Continuacao do XML ***

      $ct112 = $geraDom->createElement('rem');

      if(strlen(retira_acentos_ponto_traco_barra(trim($this->mgt_cte_remetente_codigo->Text), 0)) < 14)
      {
         $ct113 = $geraDom->createElement('CPF', completa_zeros_retira_caracter($this->mgt_cte_remetente_codigo->Text, 11));
      }
      else
      {
         $ct113 = $geraDom->createElement('CNPJ', completa_zeros_retira_caracter($this->mgt_cte_remetente_codigo->Text, 14));
      }

      $ct115 = $geraDom->createElement('IE', retira_acentos_ponto_traco_barra($this->mgt_cte_remetente_inscricao_estadual->Text, 0));
      $ct116 = $geraDom->createElement('xNome', retira_acentos(strtoupper($this->mgt_cte_remetente_razao_social->Text), 0));
      $ct118 = $geraDom->createElement('fone', retira_acentos_ponto_traco_barra(strtoupper($this->mgt_cte_remetente_fone->Text), 0));

      $ct119 = $geraDom->createElement('enderReme');
      $ct120 = $geraDom->createElement('xLgr', retira_acentos(strtoupper($this->mgt_cte_remetente_endereco->Text), 0));
      $ct121 = $geraDom->createElement('nro', retira_acentos(strtoupper($this->mgt_cte_remetente_endereco->Text), 0));
      $ct123 = $geraDom->createElement('xBairro', retira_acentos(strtoupper($this->mgt_cte_remetente_bairro->Text), 0));
      $ct124 = $geraDom->createElement('cMun', municipios_ibge($this->mgt_cte_remetente_estado->Text, $this->mgt_cte_remetente_cidade->Text));
      $ct125 = $geraDom->createElement('xMun', retira_acentos(strtoupper($this->mgt_cte_remetente_cidade->Text), 0));
      $ct126 = $geraDom->createElement('CEP', retira_acentos_ponto_traco_barra(strtoupper($this->mgt_cte_remetente_cep->Text), 0));
      $ct127 = $geraDom->createElement('UF', retira_acentos(strtoupper($this->mgt_cte_remetente_estado->Text), 0));
      $ct128 = $geraDom->createElement('cPais', paises_ibge($this->mgt_cte_remetente_pais->Text));
      $ct129 = $geraDom->createElement('xPais', retira_acentos(strtoupper($this->mgt_cte_remetente_pais->Text), 0));

      $ct119->appendChild($ct120);
      $ct119->appendChild($ct121);
      $ct119->appendChild($ct123);
      $ct119->appendChild($ct124);
      $ct119->appendChild($ct125);
      $ct119->appendChild($ct126);
      $ct119->appendChild($ct127);
      $ct119->appendChild($ct128);
      $ct119->appendChild($ct129);

      $ct112->appendChild($ct113);
      $ct112->appendChild($ct115);
      $ct112->appendChild($ct116);
      $ct112->appendChild($ct118);
      $ct112->appendChild($ct119);

      //*** Continuacao do XML ***

      $ct203 = $geraDom->createElement('dest');

      if(strlen(retira_acentos_ponto_traco_barra(trim($this->mgt_cte_destinatario_codigo->Text), 0)) < 14)
      {
         $ct204 = $geraDom->createElement('CPF', completa_zeros_retira_caracter($this->mgt_cte_destinatario_codigo->Text, 11));
      }
      else
      {
         $ct204 = $geraDom->createElement('CNPJ', completa_zeros_retira_caracter($this->mgt_cte_destinatario_codigo->Text, 14));
      }

      $ct206 = $geraDom->createElement('IE', retira_acentos_ponto_traco_barra($this->mgt_cte_destinatario_inscricao_estadual->Text, 0));
      $ct207 = $geraDom->createElement('xNome', retira_acentos(strtoupper($this->mgt_cte_destinatario_razao_social->Text), 0));
      $ct208 = $geraDom->createElement('fone', retira_acentos_ponto_traco_barra(strtoupper($this->mgt_cte_destinatario_fone->Text), 0));

      $ct210 = $geraDom->createElement('enderDest');
      $ct211 = $geraDom->createElement('xLgr', retira_acentos(strtoupper($this->mgt_cte_destinatario_endereco->Text), 0));
      $ct212 = $geraDom->createElement('nro', retira_acentos(strtoupper($this->mgt_cte_destinatario_endereco->Text), 0));
      $ct214 = $geraDom->createElement('xBairro', retira_acentos(strtoupper($this->mgt_cte_destinatario_bairro->Text), 0));
      $ct215 = $geraDom->createElement('cMun', municipios_ibge($this->mgt_cte_destinatario_estado->Text, $this->mgt_cte_destinatario_cidade->Text));
      $ct216 = $geraDom->createElement('xMun', retira_acentos(strtoupper($this->mgt_cte_destinatario_cidade->Text), 0));
      $ct217 = $geraDom->createElement('CEP', retira_acentos_ponto_traco_barra(strtoupper($this->mgt_cte_destinatario_cep->Text), 0));
      $ct218 = $geraDom->createElement('UF', retira_acentos(strtoupper($this->mgt_cte_destinatario_estado->Text), 0));
      $ct219 = $geraDom->createElement('cPais', paises_ibge($this->mgt_cte_destinatario_pais->Text));
      $ct220 = $geraDom->createElement('xPais', retira_acentos(strtoupper($this->mgt_cte_destinatario_pais->Text), 0));

      //*** Gravando os Nos ***

      $ct210->appendChild($ct211);
      $ct210->appendChild($ct212);
      $ct210->appendChild($ct214);
      $ct210->appendChild($ct215);
      $ct210->appendChild($ct216);
      $ct210->appendChild($ct217);
      $ct210->appendChild($ct218);
      $ct210->appendChild($ct219);
      $ct210->appendChild($ct220);

      $ct203->appendChild($ct204);
      $ct203->appendChild($ct206);
      $ct203->appendChild($ct207);
      $ct203->appendChild($ct208);
      $ct203->appendChild($ct210);

      //*** Continuacao do XML ***

      $ct233 = $geraDom->createElement('vPrest');
      $ct234 = $geraDom->createElement('vTPrest', number_format($this->mgt_cte_servico_valor_total->Text, 2, '.', ''));
      $ct235 = $geraDom->createElement('vRec', number_format($this->mgt_cte_servico_valor_receber->Text, 2, '.', ''));

      if(trim($this->mgt_cte_servico_1->Text) <> '')
      {
         $ct236a = $geraDom->createElement('Comp');
         $ct237a = $geraDom->createElement('xNome', retira_acentos(strtoupper($this->mgt_cte_servico_1->Text), 0));
         $ct238a = $geraDom->createElement('vComp', number_format($this->mgt_cte_servico_valor_1->Text, 2, '.', ''));

         $ct236a->appendChild($ct237a);
         $ct236a->appendChild($ct238a);
      }

      if(trim($this->mgt_cte_servico_2->Text) <> '')
      {
         $ct236b = $geraDom->createElement('Comp');
         $ct237b = $geraDom->createElement('xNome', retira_acentos(strtoupper($this->mgt_cte_servico_2->Text), 0));
         $ct238b = $geraDom->createElement('vComp', number_format($this->mgt_cte_servico_valor_2->Text, 2, '.', ''));

         $ct236b->appendChild($ct237b);
         $ct236b->appendChild($ct238b);
      }

      if(trim($this->mgt_cte_servico_3->Text) <> '')
      {
         $ct236c = $geraDom->createElement('Comp');
         $ct237c = $geraDom->createElement('xNome', retira_acentos(strtoupper($this->mgt_cte_servico_3->Text), 0));
         $ct238c = $geraDom->createElement('vComp', number_format($this->mgt_cte_servico_valor_3->Text, 2, '.', ''));

         $ct236c->appendChild($ct237c);
         $ct236c->appendChild($ct238c);
      }

      if(trim($this->mgt_cte_servico_4->Text) <> '')
      {
         $ct236d = $geraDom->createElement('Comp');
         $ct237d = $geraDom->createElement('xNome', retira_acentos(strtoupper($this->mgt_cte_servico_4->Text), 0));
         $ct238d = $geraDom->createElement('vComp', number_format($this->mgt_cte_servico_valor_4->Text, 2, '.', ''));

         $ct236d->appendChild($ct237d);
         $ct236d->appendChild($ct238d);
      }

      if(trim($this->mgt_cte_servico_5->Text) <> '')
      {
         $ct236e = $geraDom->createElement('Comp');
         $ct237e = $geraDom->createElement('xNome', retira_acentos(strtoupper($this->mgt_cte_servico_5->Text), 0));
         $ct238e = $geraDom->createElement('vComp', number_format($this->mgt_cte_servico_valor_5->Text, 2, '.', ''));

         $ct236e->appendChild($ct237e);
         $ct236e->appendChild($ct238e);
      }

      if(trim($this->mgt_cte_servico_6->Text) <> '')
      {
         $ct236f = $geraDom->createElement('Comp');
         $ct237f = $geraDom->createElement('xNome', retira_acentos(strtoupper($this->mgt_cte_servico_6->Text), 0));
         $ct238f = $geraDom->createElement('vComp', number_format($this->mgt_cte_servico_valor_6->Text, 2, '.', ''));

         $ct236f->appendChild($ct237f);
         $ct236f->appendChild($ct238f);
      }

      if(trim($this->mgt_cte_servico_7->Text) <> '')
      {
         $ct236g = $geraDom->createElement('Comp');
         $ct237g = $geraDom->createElement('xNome', retira_acentos(strtoupper($this->mgt_cte_servico_7->Text), 0));
         $ct238g = $geraDom->createElement('vComp', number_format($this->mgt_cte_servico_valor_7->Text, 2, '.', ''));

         $ct236g->appendChild($ct237g);
         $ct236g->appendChild($ct238g);
      }

      if(trim($this->mgt_cte_servico_8->Text) <> '')
      {
         $ct236h = $geraDom->createElement('Comp');
         $ct237h = $geraDom->createElement('xNome', retira_acentos(strtoupper($this->mgt_cte_servico_8->Text), 0));
         $ct238h = $geraDom->createElement('vComp', number_format($this->mgt_cte_servico_valor_8->Text, 2, '.', ''));

         $ct236h->appendChild($ct237h);
         $ct236h->appendChild($ct238h);
      }

      if(trim($this->mgt_cte_servico_9->Text) <> '')
      {
         $ct236i = $geraDom->createElement('Comp');
         $ct237i = $geraDom->createElement('xNome', retira_acentos(strtoupper($this->mgt_cte_servico_9->Text), 0));
         $ct238i = $geraDom->createElement('vComp', number_format($this->mgt_cte_servico_valor_9->Text, 2, '.', ''));

         $ct236i->appendChild($ct237i);
         $ct236i->appendChild($ct238i);
      }

      if(trim($this->mgt_cte_servico_10->Text) <> '')
      {
         $ct236j = $geraDom->createElement('Comp');
         $ct237j = $geraDom->createElement('xNome', retira_acentos(strtoupper($this->mgt_cte_servico_10->Text), 0));
         $ct238j = $geraDom->createElement('vComp', number_format($this->mgt_cte_servico_valor_10->Text, 2, '.', ''));

         $ct236j->appendChild($ct237j);
         $ct236j->appendChild($ct238j);
      }

      //*** Gravando os Nos ***

      $ct233->appendChild($ct234);
      $ct233->appendChild($ct235);

      if(trim($this->mgt_cte_servico_1->Text) <> '')
      {
         $ct233->appendChild($ct236a);
      }

      if(trim($this->mgt_cte_servico_2->Text) <> '')
      {
         $ct233->appendChild($ct236b);
      }

      if(trim($this->mgt_cte_servico_3->Text) <> '')
      {
         $ct233->appendChild($ct236c);
      }

      if(trim($this->mgt_cte_servico_4->Text) <> '')
      {
         $ct233->appendChild($ct236d);
      }

      if(trim($this->mgt_cte_servico_5->Text) <> '')
      {
         $ct233->appendChild($ct236e);
      }

      if(trim($this->mgt_cte_servico_6->Text) <> '')
      {
         $ct233->appendChild($ct236f);
      }

      if(trim($this->mgt_cte_servico_7->Text) <> '')
      {
         $ct233->appendChild($ct236g);
      }

      if(trim($this->mgt_cte_servico_8->Text) <> '')
      {
         $ct233->appendChild($ct236h);
      }

      if(trim($this->mgt_cte_servico_9->Text) <> '')
      {
         $ct233->appendChild($ct236i);
      }

      if(trim($this->mgt_cte_servico_10->Text) <> '')
      {
         $ct233->appendChild($ct236j);
      }

      //*** Continuacao do XML ***

      $ct239 = $geraDom->createElement('imp');
      $ct240 = $geraDom->createElement('ICMS');

      //*** Gravando os Nos ***

      if(trim($this->mgt_cte_situacao_tributaria->ItemIndex) == '00')
      {
         $ct241 = $geraDom->createElement('ICMS00');
         $ct242 = $geraDom->createElement('CST', trim($this->mgt_cte_situacao_tributaria->ItemIndex));
         $ct243 = $geraDom->createElement('vBC', number_format($this->mgt_cte_valor_bc_icms->Text, 2, '.', ''));
         $ct244 = $geraDom->createElement('pICMS', number_format($this->mgt_cte_aliquota_icms->Text, 2, '.', ''));
         $ct245 = $geraDom->createElement('vICMS', number_format($this->mgt_cte_valor_icms->Text, 2, '.', ''));

         $ct241->appendChild($ct242);
         $ct241->appendChild($ct243);
         $ct241->appendChild($ct244);
         $ct241->appendChild($ct245);

         $ct240->appendChild($ct241);
         $ct239->appendChild($ct240);
      }
      elseif(trim($this->mgt_cte_situacao_tributaria->ItemIndex) == '20')
      {
         $ct246 = $geraDom->createElement('ICMS20');
         $ct247 = $geraDom->createElement('CST', trim($this->mgt_cte_situacao_tributaria->ItemIndex));
         $ct248 = $geraDom->createElement('pRedBC', number_format($this->mgt_cte_percentual_reducao_bc->Text, 2, '.', ''));
         $ct249 = $geraDom->createElement('vBC', number_format($this->mgt_cte_valor_bc_icms->Text, 2, '.', ''));
         $ct250 = $geraDom->createElement('pICMS', number_format($this->mgt_cte_aliquota_icms->Text, 2, '.', ''));
         $ct251 = $geraDom->createElement('vICMS', number_format($this->mgt_cte_valor_icms->Text, 2, '.', ''));

         $ct246->appendChild($ct247);
         $ct246->appendChild($ct248);
         $ct246->appendChild($ct249);
         $ct246->appendChild($ct250);
         $ct246->appendChild($ct251);

         $ct240->appendChild($ct246);
         $ct239->appendChild($ct240);
      }
      elseif(((trim($this->mgt_cte_situacao_tributaria->ItemIndex) == '40') or (trim($this->mgt_cte_situacao_tributaria->ItemIndex) == '41') or (trim($this->mgt_cte_situacao_tributaria->ItemIndex) == '51')))
      {
         $ct252 = $geraDom->createElement('ICMS45');
         $ct253 = $geraDom->createElement('CST', trim($this->mgt_cte_situacao_tributaria->ItemIndex));

         $ct252->appendChild($ct253);

         $ct240->appendChild($ct252);
         $ct239->appendChild($ct240);
      }
      elseif(trim($this->mgt_cte_situacao_tributaria->ItemIndex) == '60')
      {
         $ct254 = $geraDom->createElement('ICMS60');
         $ct255 = $geraDom->createElement('CST', trim($this->mgt_cte_situacao_tributaria->ItemIndex));
         $ct256 = $geraDom->createElement('vBCSTRet', number_format($this->mgt_cte_valor_bc_icms->Text, 2, '.', ''));
         $ct257 = $geraDom->createElement('vICMSSTRet', number_format($this->mgt_cte_valor_icms->Text, 2, '.', ''));
         $ct258 = $geraDom->createElement('pICMSSTRet', number_format($this->mgt_cte_aliquota_icms->Text, 2, '.', ''));
         $ct259 = $geraDom->createElement('vCred', number_format($this->mgt_cte_valor_outorgado->Text, 2, '.', ''));

         $ct254->appendChild($ct255);
         $ct254->appendChild($ct256);
         $ct254->appendChild($ct257);
         $ct254->appendChild($ct258);
         $ct254->appendChild($ct259);

         $ct240->appendChild($ct254);
         $ct239->appendChild($ct240);
      }
      elseif(trim($this->mgt_cte_situacao_tributaria->ItemIndex) == '90')
      {
         $ct260 = $geraDom->createElement('ICMS90');
         $ct261 = $geraDom->createElement('CST', trim($this->mgt_cte_situacao_tributaria->ItemIndex));
         $ct262 = $geraDom->createElement('pRedBC', number_format($this->mgt_cte_percentual_reducao_bc->Text, 2, '.', ''));
         $ct263 = $geraDom->createElement('vBC', number_format($this->mgt_cte_valor_bc_icms->Text, 2, '.', ''));
         $ct264 = $geraDom->createElement('pICMS', number_format($this->mgt_cte_aliquota_icms->Text, 2, '.', ''));
         $ct265 = $geraDom->createElement('vICMS', number_format($this->mgt_cte_valor_icms->Text, 2, '.', ''));
         $ct266 = $geraDom->createElement('vCred', number_format($this->mgt_cte_valor_outorgado->Text, 2, '.', ''));

         $ct260->appendChild($ct261);
         $ct260->appendChild($ct262);
         $ct260->appendChild($ct263);
         $ct260->appendChild($ct264);
         $ct260->appendChild($ct265);
         $ct260->appendChild($ct266);

         $ct240->appendChild($ct260);
         $ct239->appendChild($ct240);
      }
      elseif(trim($this->mgt_cte_situacao_tributaria->ItemIndex) == '--')
      {
         $ct273 = $geraDom->createElement('ICMSSN');
         $ct274 = $geraDom->createElement('indSN', '1');
         $ct275 = $geraDom->createElement('infAdFisco', 'DOCUMENTO EMITIDO POR ME OU EPP OPTANTE PELO SIMPLES NACIONAL. NAO GERA DIREITO A CREDITO FISCAL DE ISS E IPI. PERMITE O APROVEITAMENTO DO CREDITO DE ICMS NOS TERMOS DO ART.23 DA LC 123.');

         $ct273->appendChild($ct274);
         $ct273->appendChild($ct275);

         $ct240->appendChild($ct273);
         $ct239->appendChild($ct240);
      }

	  $ct250a = $geraDom->createElement('vTotTrib', number_format($this->mgt_cte_valor_icms->Text, 2, '.', ''));
	  $ct239->appendChild($ct250a);

      //*** Continuacao do XML ***

      $ct276 = $geraDom->createElement('infCTeNorm');
      $ct277 = $geraDom->createElement('infCarga');
      $ct278 = $geraDom->createElement('vCarga', number_format($this->mgt_cte_produto_total_mercadoria->Text, 2, '.', ''));
      $ct279 = $geraDom->createElement('proPred', retira_acentos(strtoupper($this->mgt_cte_produto_predominante->Text), 0));

      if(trim($this->mgt_cte_produto_quantidade_1->Text) <> '')
      {
         $ct281a = $geraDom->createElement('infQ');
         $ct282a = $geraDom->createElement('cUnid', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_1->ItemIndex), 0));
         $ct283a = $geraDom->createElement('tpMed', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_1->Items[$this->mgt_cte_produto_unidade_1->ItemIndex]), 0));
         $ct284a = $geraDom->createElement('qCarga', number_format($this->mgt_cte_produto_quantidade_1->Text, 4, '.', ''));

         $ct281a->appendChild($ct282a);
         $ct281a->appendChild($ct283a);
         $ct281a->appendChild($ct284a);
      }

      if(trim($this->mgt_cte_produto_quantidade_2->Text) <> '')
      {
         $ct281b = $geraDom->createElement('infQ');
         $ct282b = $geraDom->createElement('cUnid', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_2->ItemIndex), 0));
         $ct283b = $geraDom->createElement('tpMed', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_2->Items[$this->mgt_cte_produto_unidade_2->ItemIndex]), 0));
         $ct284b = $geraDom->createElement('qCarga', number_format($this->mgt_cte_produto_quantidade_2->Text, 4, '.', ''));

         $ct281b->appendChild($ct282b);
         $ct281b->appendChild($ct283b);
         $ct281b->appendChild($ct284b);
      }

      if(trim($this->mgt_cte_produto_quantidade_3->Text) <> '')
      {
         $ct281c = $geraDom->createElement('infQ');
         $ct282c = $geraDom->createElement('cUnid', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_3->ItemIndex), 0));
         $ct283c = $geraDom->createElement('tpMed', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_3->Items[$this->mgt_cte_produto_unidade_3->ItemIndex]), 0));
         $ct284c = $geraDom->createElement('qCarga', number_format($this->mgt_cte_produto_quantidade_3->Text, 4, '.', ''));

         $ct281c->appendChild($ct282c);
         $ct281c->appendChild($ct283c);
         $ct281c->appendChild($ct284c);
      }

      if(trim($this->mgt_cte_produto_quantidade_4->Text) <> '')
      {
         $ct281d = $geraDom->createElement('infQ');
         $ct282d = $geraDom->createElement('cUnid', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_4->ItemIndex), 0));
         $ct283d = $geraDom->createElement('tpMed', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_4->Items[$this->mgt_cte_produto_unidade_4->ItemIndex]), 0));
         $ct284d = $geraDom->createElement('qCarga', number_format($this->mgt_cte_produto_quantidade_4->Text, 4, '.', ''));

         $ct281d->appendChild($ct282d);
         $ct281d->appendChild($ct283d);
         $ct281d->appendChild($ct284d);
      }

      if(trim($this->mgt_cte_produto_quantidade_5->Text) <> '')
      {
         $ct281e = $geraDom->createElement('infQ');
         $ct282e = $geraDom->createElement('cUnid', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_5->ItemIndex), 0));
         $ct283e = $geraDom->createElement('tpMed', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_5->Items[$this->mgt_cte_produto_unidade_5->ItemIndex]), 0));
         $ct284e = $geraDom->createElement('qCarga', number_format($this->mgt_cte_produto_quantidade_5->Text, 4, '.', ''));

         $ct281e->appendChild($ct282e);
         $ct281e->appendChild($ct283e);
         $ct281e->appendChild($ct284e);
      }

      if(trim($this->mgt_cte_produto_quantidade_6->Text) <> '')
      {
         $ct281f = $geraDom->createElement('infQ');
         $ct282f = $geraDom->createElement('cUnid', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_6->ItemIndex), 0));
         $ct283f = $geraDom->createElement('tpMed', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_6->Items[$this->mgt_cte_produto_unidade_6->ItemIndex]), 0));
         $ct284f = $geraDom->createElement('qCarga', number_format($this->mgt_cte_produto_quantidade_6->Text, 4, '.', ''));

         $ct281f->appendChild($ct282f);
         $ct281f->appendChild($ct283f);
         $ct281f->appendChild($ct284f);
      }

      if(trim($this->mgt_cte_produto_quantidade_7->Text) <> '')
      {
         $ct281g = $geraDom->createElement('infQ');
         $ct282g = $geraDom->createElement('cUnid', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_7->ItemIndex), 0));
         $ct283g = $geraDom->createElement('tpMed', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_7->Items[$this->mgt_cte_produto_unidade_7->ItemIndex]), 0));
         $ct284g = $geraDom->createElement('qCarga', number_format($this->mgt_cte_produto_quantidade_7->Text, 4, '.', ''));

         $ct281g->appendChild($ct282g);
         $ct281g->appendChild($ct283g);
         $ct281g->appendChild($ct284g);
      }

      if(trim($this->mgt_cte_produto_quantidade_8->Text) <> '')
      {
         $ct281h = $geraDom->createElement('infQ');
         $ct282h = $geraDom->createElement('cUnid', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_8->ItemIndex), 0));
         $ct283h = $geraDom->createElement('tpMed', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_8->Items[$this->mgt_cte_produto_unidade_8->ItemIndex]), 0));
         $ct284h = $geraDom->createElement('qCarga', number_format($this->mgt_cte_produto_quantidade_8->Text, 4, '.', ''));

         $ct281h->appendChild($ct282h);
         $ct281h->appendChild($ct283h);
         $ct281h->appendChild($ct284h);
      }

      if(trim($this->mgt_cte_produto_quantidade_9->Text) <> '')
      {
         $ct281i = $geraDom->createElement('infQ');
         $ct282i = $geraDom->createElement('cUnid', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_9->ItemIndex), 0));
         $ct283i = $geraDom->createElement('tpMed', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_9->Items[$this->mgt_cte_produto_unidade_9->ItemIndex]), 0));
         $ct284i = $geraDom->createElement('qCarga', number_format($this->mgt_cte_produto_quantidade_9->Text, 4, '.', ''));

         $ct281i->appendChild($ct282i);
         $ct281i->appendChild($ct283i);
         $ct281i->appendChild($ct284i);
      }

      if(trim($this->mgt_cte_produto_quantidade_10->Text) <> '')
      {
         $ct281j = $geraDom->createElement('infQ');
         $ct282j = $geraDom->createElement('cUnid', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_10->ItemIndex), 0));
         $ct283j = $geraDom->createElement('tpMed', retira_acentos(strtoupper($this->mgt_cte_produto_unidade_10->Items[$this->mgt_cte_produto_unidade_10->ItemIndex]), 0));
         $ct284j = $geraDom->createElement('qCarga', number_format($this->mgt_cte_produto_quantidade_10->Text, 4, '.', ''));

         $ct281j->appendChild($ct282j);
         $ct281j->appendChild($ct283j);
         $ct281j->appendChild($ct284j);
      }

      //*** Gravando os Nos ***

      $ct277->appendChild($ct278);
      $ct277->appendChild($ct279);

      if(trim($this->mgt_cte_produto_quantidade_1->Text) <> '')
      {
         $ct277->appendChild($ct281a);
      }

      if(trim($this->mgt_cte_produto_quantidade_2->Text) <> '')
      {
         $ct277->appendChild($ct281b);
      }

      if(trim($this->mgt_cte_produto_quantidade_3->Text) <> '')
      {
         $ct277->appendChild($ct281c);
      }

      if(trim($this->mgt_cte_produto_quantidade_4->Text) <> '')
      {
         $ct277->appendChild($ct281d);
      }

      if(trim($this->mgt_cte_produto_quantidade_5->Text) <> '')
      {
         $ct277->appendChild($ct281e);
      }

      if(trim($this->mgt_cte_produto_quantidade_6->Text) <> '')
      {
         $ct277->appendChild($ct281f);
      }

      if(trim($this->mgt_cte_produto_quantidade_7->Text) <> '')
      {
         $ct277->appendChild($ct281g);
      }

      if(trim($this->mgt_cte_produto_quantidade_8->Text) <> '')
      {
         $ct277->appendChild($ct281h);
      }

      if(trim($this->mgt_cte_produto_quantidade_9->Text) <> '')
      {
         $ct277->appendChild($ct281i);
      }

      if(trim($this->mgt_cte_produto_quantidade_10->Text) <> '')
      {
         $ct277->appendChild($ct281j);
      }

      $ct276->appendChild($ct277);

	  //*** Continuacao do XML ***

	  $ct157 = $geraDom->createElement('infDoc');

      if(trim($this->mgt_cte_chave_1->Text) <> '')
      {
         $ct158a = $geraDom->createElement('infNFe');
         $ct159a = $geraDom->createElement('chave', retira_acentos(strtoupper($this->mgt_cte_chave_1->Text), 0));

         $ct158a->appendChild($ct159a);
      }

      if(trim($this->mgt_cte_chave_2->Text) <> '')
      {
         $ct158b = $geraDom->createElement('infNFe');
         $ct159b = $geraDom->createElement('chave', retira_acentos(strtoupper($this->mgt_cte_chave_2->Text), 0));

         $ct158b->appendChild($ct159a);
      }

      if(trim($this->mgt_cte_chave_3->Text) <> '')
      {
         $ct158c = $geraDom->createElement('infNFe');
         $ct159c = $geraDom->createElement('chave', retira_acentos(strtoupper($this->mgt_cte_chave_3->Text), 0));

         $ct158c->appendChild($ct159a);
      }

      if(trim($this->mgt_cte_chave_4->Text) <> '')
      {
         $ct158d = $geraDom->createElement('infNFe');
         $ct159d = $geraDom->createElement('chave', retira_acentos(strtoupper($this->mgt_cte_chave_4->Text), 0));

         $ct158d->appendChild($ct159a);
      }

      if(trim($this->mgt_cte_chave_5->Text) <> '')
      {
         $ct158e = $geraDom->createElement('infNFe');
         $ct159e = $geraDom->createElement('chave', retira_acentos(strtoupper($this->mgt_cte_chave_5->Text), 0));

         $ct158e->appendChild($ct159a);
      }

      if(trim($this->mgt_cte_chave_6->Text) <> '')
      {
         $ct158f = $geraDom->createElement('infNFe');
         $ct159f = $geraDom->createElement('chave', retira_acentos(strtoupper($this->mgt_cte_chave_6->Text), 0));

         $ct158f->appendChild($ct159a);
      }

      if(trim($this->mgt_cte_chave_7->Text) <> '')
      {
         $ct158g = $geraDom->createElement('infNFe');
         $ct159g = $geraDom->createElement('chave', retira_acentos(strtoupper($this->mgt_cte_chave_7->Text), 0));

         $ct158g->appendChild($ct159a);
      }

      if(trim($this->mgt_cte_chave_8->Text) <> '')
      {
         $ct158h = $geraDom->createElement('infNFe');
         $ct159h = $geraDom->createElement('chave', retira_acentos(strtoupper($this->mgt_cte_chave_8->Text), 0));

         $ct158h->appendChild($ct159a);
      }

      if(trim($this->mgt_cte_chave_9->Text) <> '')
      {
         $ct158i = $geraDom->createElement('infNFe');
         $ct159i = $geraDom->createElement('chave', retira_acentos(strtoupper($this->mgt_cte_chave_9->Text), 0));

         $ct158i->appendChild($ct159a);
      }

      if(trim($this->mgt_cte_chave_10->Text) <> '')
      {
         $ct158j = $geraDom->createElement('infNFe');
         $ct159j = $geraDom->createElement('chave', retira_acentos(strtoupper($this->mgt_cte_chave_10->Text), 0));

         $ct158j->appendChild($ct159a);
      }

      if(trim($this->mgt_cte_chave_1->Text) <> '')
      {
         $ct157->appendChild($ct158a);
      }

      if(trim($this->mgt_cte_chave_2->Text) <> '')
      {
         $ct157->appendChild($ct158b);
      }

      if(trim($this->mgt_cte_chave_3->Text) <> '')
      {
         $ct157->appendChild($ct158c);
      }

      if(trim($this->mgt_cte_chave_4->Text) <> '')
      {
         $ct157->appendChild($ct158d);
      }

      if(trim($this->mgt_cte_chave_5->Text) <> '')
      {
         $ct157->appendChild($ct158e);
      }

      if(trim($this->mgt_cte_chave_6->Text) <> '')
      {
         $ct157->appendChild($ct158f);
      }

      if(trim($this->mgt_cte_chave_7->Text) <> '')
      {
         $ct157->appendChild($ct158g);
      }

      if(trim($this->mgt_cte_chave_8->Text) <> '')
      {
         $ct157->appendChild($ct158h);
      }

      if(trim($this->mgt_cte_chave_9->Text) <> '')
      {
         $ct157->appendChild($ct158i);
      }

      if(trim($this->mgt_cte_chave_10->Text) <> '')
      {
         $ct157->appendChild($ct158j);
      }

	  //*** Continuacao do XML ***

      $ct360 = $geraDom->createElement('seg');
      $ct361 = $geraDom->createElement('respSeg', retira_acentos(strtoupper($this->mgt_cte_seguro->ItemIndex), 0));

      //*** Gravando os Nos ***

      $ct360->appendChild($ct361);

      //*** Continuacao do XML ***

      $ct312 = $geraDom->createElement('infModal');
      $ct312->setAttribute('versaoModal', '2.00');

      $ct314 = $geraDom->createElement('rodo');
      $ct314a = $geraDom->createElement('RNTRC', retira_acentos(strtoupper($this->mgt_cte_rntrc->Text), 0));
      $ct314b = $geraDom->createElement('dPrev', inverte_data_dma_to_amd(trim($this->mgt_cte_data_entrega->Text)));
      $ct314c = $geraDom->createElement('lota', retira_acentos(strtoupper($this->mgt_cte_lotacao->ItemIndex), 0));
      $ct314d = $geraDom->createElement('veic');
      $ct314e = $geraDom->createElement('RENAVAM', retira_acentos(strtoupper($this->mgt_cte_renavam->Text), 0));
      $ct314f = $geraDom->createElement('placa', retira_acentos(strtoupper($this->mgt_cte_placa->Text), 0));
      $ct314g = $geraDom->createElement('tara', retira_acentos(strtoupper($this->mgt_cte_tara->Text), 0));
      $ct314h = $geraDom->createElement('capKG', retira_acentos(strtoupper($this->mgt_cte_capkg->Text), 0));
      $ct314i = $geraDom->createElement('capM3', retira_acentos(strtoupper($this->mgt_cte_capm3->Text), 0));
      $ct314j = $geraDom->createElement('tpProp', retira_acentos(strtoupper($this->mgt_cte_tpprop->ItemIndex), 0));
      $ct314k = $geraDom->createElement('tpVeic', retira_acentos(strtoupper($this->mgt_cte_tpveic->ItemIndex), 0));
      $ct314l = $geraDom->createElement('tpRod', retira_acentos(strtoupper($this->mgt_cte_tprod->ItemIndex), 0));
      $ct314m = $geraDom->createElement('tpCar', retira_acentos(strtoupper($this->mgt_cte_tpcar->ItemIndex), 0));
      $ct314n = $geraDom->createElement('UF', retira_acentos(strtoupper($this->mgt_cte_uf->ItemIndex), 0));

      //*** Gravando os Nos ***

      $ct314d->appendChild($ct314e);
      $ct314d->appendChild($ct314f);
      $ct314d->appendChild($ct314g);
      $ct314d->appendChild($ct314h);
      $ct314d->appendChild($ct314i);
      $ct314d->appendChild($ct314j);
      $ct314d->appendChild($ct314k);
      $ct314d->appendChild($ct314l);
      $ct314d->appendChild($ct314m);
      $ct314d->appendChild($ct314n);

      $ct314->appendChild($ct314a);
      $ct314->appendChild($ct314b);
      $ct314->appendChild($ct314c);
      $ct314->appendChild($ct314d);

      $ct312->appendChild($ct314);

      //*** Continuacao do XML ***

      $ct330 = $geraDom->createElement('cobr');
      $ct331 = $geraDom->createElement('fat');
      $ct332 = $geraDom->createElement('nFat', completa_zeros_retira_caracter(retira_acentos(strtoupper($this->mgt_cte_numero->Text), 0),7));
      $ct333 = $geraDom->createElement('vOrig', number_format($this->mgt_cte_servico_valor_receber->Text, 2, '.', ''));
      $ct335 = $geraDom->createElement('vLiq', number_format($this->mgt_cte_servico_valor_receber->Text, 2, '.', ''));

      $ct336 = $geraDom->createElement('dup');
      $ct337 = $geraDom->createElement('nDup', completa_zeros_retira_caracter(retira_acentos(strtoupper($this->mgt_cte_numero->Text), 0),7));
      $ct338 = $geraDom->createElement('dVenc', inverte_data_dma_to_amd(trim($this->mgt_cte_data_receber->Text)));
      $ct339 = $geraDom->createElement('vDup', number_format($this->mgt_cte_servico_valor_receber->Text, 2, '.', ''));

      //*** Gravando os Nos ***

      $ct331->appendChild($ct332);
      $ct331->appendChild($ct333);
      $ct331->appendChild($ct335);

      $ct336->appendChild($ct337);
      $ct336->appendChild($ct338);
      $ct336->appendChild($ct339);

      $ct330->appendChild($ct331);
      $ct330->appendChild($ct336);

      $ct276->appendChild($ct277);
	  $ct276->appendChild($ct157);
	  $ct276->appendChild($ct360);
      $ct276->appendChild($ct312);
      $ct276->appendChild($ct330);

      //*** Fecha a Raiz ***

      $ct001->appendChild($ct004);
      $ct001->appendChild($ct059);
      $ct001->appendChild($ct097);
      $ct001->appendChild($ct112);
      $ct001->appendChild($ct203);
      $ct001->appendChild($ct233);
      $ct001->appendChild($ct239);
      $ct001->appendChild($ct276);

      $ct000->appendChild($ct001);

      //*** Prepara o XML para a Transmissao ***

      $geraDom->appendChild($ct000);

      //*** Salvando o XML ***
      $geraDom->save('nfe/entrada/CTe_' . trim($this->mgt_cte_numero->Text) . '.xml');

      //***************************************
      //*** FINAL - Gera o XML para o Envio ***
      //***************************************
   }

   public function valida_campos()
   {
      $this->MSG_Erro->Caption = "";

      if(trim($this->mgt_cte_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe o Numero do CC-e.";
      }
      elseif(trim($this->mgt_cte_cfop->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe o CFOP.";
      }
      elseif(trim($this->mgt_cte_natureza_operacao->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Natureza de Operacao.";
      }
      elseif(trim($this->mgt_cte_origem_cidade->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Cidade de Origem.";
      }
      elseif(trim($this->mgt_cte_destino_cidade->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Cidade de Destino.";
      }
      elseif(trim($this->mgt_cte_remetente_codigo->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe um Remetente.";
      }
      elseif(trim($this->mgt_cte_destinatario_codigo->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe um Destinatario.";
      }
      elseif(trim($this->mgt_cte_produto_predominante->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe o Produto Predominante.";
      }
      elseif(trim($this->mgt_cte_produto_quantidade_1->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Quantidade do Produto.";
      }
      elseif(trim($this->mgt_cte_produto_total_mercadoria->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe o Total da Mercadoria.";
      }
      elseif(trim($this->mgt_cte_servico_1->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Descricao do Servico.";
      }
      elseif(trim($this->mgt_cte_servico_valor_1->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe o Valor do Servico.";
      }
      elseif(trim($this->mgt_cte_servico_valor_receber->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe o Valor a Receber.";
      }
      elseif(trim($this->mgt_cte_valor_bc_icms->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Base de Calculo do ICMS.";
      }
      elseif(trim($this->mgt_cte_aliquota_icms->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Aliquota do ICMS.";
      }
      elseif(trim($this->mgt_cte_valor_icms->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe o Valor do ICMS.";
      }
      elseif(trim($this->mgt_cte_chave_1->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Chave de Acesso da Nota Geradora.";
      }
      elseif(trim($this->mgt_cte_rntrc->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe o Numero do RNTRC.";
      }
      elseif(trim($this->mgt_cte_data_entrega->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Data de Entrega.";
      }
      elseif(trim($this->mgt_cte_renavam->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe o Renavam do Veiculo.";
      }
      elseif(trim($this->mgt_cte_placa->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Placa do Veiculo.";
      }
      elseif(trim($this->mgt_cte_tara->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Tara do Veiculo.";
      }
      elseif(trim($this->mgt_cte_capkg->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Capacidade do Veiculo.";
      }
      elseif(trim($this->mgt_cte_capm3->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, informe a Data de Entrega.";
      }

      if(trim($this->MSG_Erro->Caption) <> "")
      {
         $retorno_validacao = false;
      }
      else
      {
         $retorno_validacao = true;
      }

      return $retorno_validacao;
   }

   function bt_fecharClick($sender, $params)
   {
      $this->limpa_campos();

      //*** Restaura a Ultima Selecao Efetuada ***
      GetConexaoPrincipal()->SQL_MGT_CTe->Close();
      GetConexaoPrincipal()->SQL_MGT_CTe->SQL = $_SESSION['comando_sql_grid'];
      GetConexaoPrincipal()->SQL_MGT_CTe->Open();

      redirect('nf_conhecimentos_cte.php');
   }
   function nfconhecimentoscteincJSLoad($sender, $params)
   {
      ?>
        //begin js

        carregando_pagina();

        //end
      <?php
   }
   function mgt_cte_modeloJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_serie.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_serieJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_numero.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_numeroJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_tipo.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_tipoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_tipo_servico.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_tipo_servicoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_tomador.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_tomadorJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_forma_pagto.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_forma_pagtoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_cfop.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_cfopJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_natureza_operacao.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_natureza_operacaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_origem_estado.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_origem_estadoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_origem_cidade.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_origem_cidadeJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_destino_estado.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_destino_estadoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_destino_cidade.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_destino_cidadeJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_remetente_razao_social.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_remetente_razao_socialJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_remetente_inscricao_estadual.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_remetente_inscricao_estadualJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_remetente_fone.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_remetente_foneJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_remetente_endereco.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_remetente_enderecoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_remetente_bairro.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_remetente_bairroJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_remetente_cidade.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_remetente_cidadeJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_remetente_estado.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_remetente_estadoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_remetente_cep.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_remetente_cepJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_remetente_pais.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_remetente_paisJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_destinatario_razao_social.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_destinatario_razao_socialJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_destinatario_inscricao_estadual.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_destinatario_inscricao_estadualJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_destinatario_fone.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_destinatario_foneJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_destinatario_endereco.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_destinatario_enderecoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_destinatario_bairro.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_destinatario_bairroJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_destinatario_cidade.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_destinatario_cidadeJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_destinatario_estado.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_destinatario_estadoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_destinatario_cep.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_destinatario_cepJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_destinatario_pais.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_destinatario_paisJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_predominante.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_predominanteJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_1.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_1JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_unidade_1.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_unidade_1JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_2.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_2JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_unidade_2.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_unidade_2JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_3.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_3JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_unidade_3.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_unidade_3JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_4.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_4JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_unidade_4.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_unidade_4JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_5.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_5JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_unidade_5.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_unidade_5JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_6.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_6JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_unidade_6.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_unidade_6JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_7.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_7JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_unidade_7.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_unidade_7JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_8.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_8JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_unidade_8.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_unidade_8JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_9.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_9JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_unidade_9.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_unidade_9JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_10.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_10JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_unidade_10.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_unidade_10JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_produto_total_mercadoria.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_produto_total_mercadoriaJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_1.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_1JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_valor_1.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_valor_1JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_2.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_2JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_valor_2.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_valor_2JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_3.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_3JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_valor_3.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_valor_3JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_4.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_4JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_valor_4.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_valor_4JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_5.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_5JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_valor_5.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_valor_5JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_6.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_6JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_valor_6.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_valor_6JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_7.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_7JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_valor_7.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_valor_7JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_8.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_8JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_valor_8.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_valor_8JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_9.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_9JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_valor_9.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_valor_9JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_10.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_10JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_valor_10.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_valor_10JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_valor_total.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_valor_totalJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_servico_valor_receber.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_servico_valor_receberJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_data_receber.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_situacao_tributariaJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_percentual_reducao_bc.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_percentual_reducao_bcJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_valor_bc_icms.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_valor_bc_icmsJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_aliquota_icms.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_aliquota_icmsJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_valor_icms.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_valor_icmsJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_valor_outorgado.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_valor_outorgadoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_chave_1.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_chave_1JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_chave_2.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_chave_2JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_chave_3.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_chave_3JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_chave_4.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_chave_4JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_chave_5.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_chave_5JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_chave_6.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_chave_6JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_chave_7.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_chave_7JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_chave_8.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_chave_8JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_chave_9.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_chave_9JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_chave_10.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_chave_10JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_observacao.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_observacaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_rntrc.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_rntrcJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_lotacao.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_lotacaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_data_entrega.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_data_entregaJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_seguro.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_numeroJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_numero;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_1JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_1;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_cfopJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_cfop;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_2JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_2;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_3JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_3;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_4JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_4;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_5JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_5;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_6JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_6;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_7JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_7;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_8JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_8;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_9JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_9;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_produto_quantidade_10JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_produto_quantidade_10;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_produto_total_mercadoriaJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_produto_total_mercadoria;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_servico_valor_1JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_servico_valor_1;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

         //*** Totaliza os Valores Informados
         document.nfconhecimentoscteinc.mgt_cte_servico_valor_total.value = (parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_1.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_2.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_3.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_4.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_5.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_6.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_7.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_8.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_9.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_10.value)).toFixed(2);

        //end
      <?php
   }
   function mgt_cte_servico_valor_2JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_servico_valor_2;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

         //*** Totaliza os Valores Informados
         document.nfconhecimentoscteinc.mgt_cte_servico_valor_total.value = (parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_1.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_2.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_3.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_4.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_5.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_6.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_7.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_8.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_9.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_10.value)).toFixed(2);

        //end
      <?php
   }
   function mgt_cte_servico_valor_3JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_servico_valor_3;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

         //*** Totaliza os Valores Informados
         document.nfconhecimentoscteinc.mgt_cte_servico_valor_total.value = (parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_1.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_2.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_3.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_4.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_5.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_6.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_7.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_8.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_9.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_10.value)).toFixed(2);

        //end
      <?php
   }
   function mgt_cte_servico_valor_4JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_servico_valor_4;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

         //*** Totaliza os Valores Informados
         document.nfconhecimentoscteinc.mgt_cte_servico_valor_total.value = (parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_1.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_2.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_3.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_4.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_5.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_6.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_7.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_8.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_9.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_10.value)).toFixed(2);

        //end
      <?php
   }
   function mgt_cte_servico_valor_5JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_servico_valor_5;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

         //*** Totaliza os Valores Informados
         document.nfconhecimentoscteinc.mgt_cte_servico_valor_total.value = (parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_1.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_2.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_3.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_4.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_5.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_6.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_7.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_8.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_9.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_10.value)).toFixed(2);

        //end
      <?php
   }
   function mgt_cte_servico_valor_6JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_servico_valor_6;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

         //*** Totaliza os Valores Informados
         document.nfconhecimentoscteinc.mgt_cte_servico_valor_total.value = (parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_1.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_2.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_3.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_4.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_5.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_6.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_7.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_8.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_9.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_10.value)).toFixed(2);

        //end
      <?php
   }
   function mgt_cte_servico_valor_7JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_servico_valor_7;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

         //*** Totaliza os Valores Informados
         document.nfconhecimentoscteinc.mgt_cte_servico_valor_total.value = (parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_1.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_2.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_3.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_4.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_5.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_6.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_7.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_8.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_9.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_10.value)).toFixed(2);

        //end
      <?php
   }
   function mgt_cte_servico_valor_8JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_servico_valor_8;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

         //*** Totaliza os Valores Informados
         document.nfconhecimentoscteinc.mgt_cte_servico_valor_total.value = (parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_1.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_2.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_3.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_4.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_5.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_6.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_7.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_8.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_9.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_10.value)).toFixed(2);

        //end
      <?php
   }
   function mgt_cte_servico_valor_9JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_servico_valor_9;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

         //*** Totaliza os Valores Informados
         document.nfconhecimentoscteinc.mgt_cte_servico_valor_total.value = (parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_1.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_2.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_3.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_4.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_5.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_6.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_7.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_8.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_9.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_10.value)).toFixed(2);

        //end
      <?php
   }
   function mgt_cte_servico_valor_10JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_servico_valor_10;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

         //*** Totaliza os Valores Informados
         document.nfconhecimentoscteinc.mgt_cte_servico_valor_total.value = (parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_1.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_2.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_3.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_4.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_5.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_6.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_7.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_8.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_9.value) + parseFloat(document.nfconhecimentoscteinc.mgt_cte_servico_valor_10.value)).toFixed(2);

        //end
      <?php
   }
   function mgt_cte_servico_valor_receberJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_servico_valor_receber;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_percentual_reducao_bcJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_percentual_reducao_bc;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_valor_bc_icmsJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_valor_bc_icms;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_aliquota_icmsJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_aliquota_icms;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_valor_icmsJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_valor_icms;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_valor_outorgadoJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valores ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_valor_outorgado;
        var digits="0123456789.,";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }
         campo.value = campo.value.replace(',','.');

         //*** FINAL - So Valores ***

        //end
      <?php
   }
   function mgt_cte_chave_1JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_chave_1;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_chave_2JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_chave_2;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_chave_3JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_chave_3;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_chave_4JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_chave_4;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_chave_5JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_chave_5;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_chave_6JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_chave_6;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_chave_7JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_chave_7;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_chave_8JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_chave_8;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_chave_9JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_chave_9;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_chave_10JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_chave_10;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_rntrcJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_rntrc;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_data_entregaJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Data ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_data_entrega;
        var digits="0123456789/";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }

         //*** FINAL - So Data ***

        //end
      <?php
   }
   function dados_buscaJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.opcao_busca.focus();
          return false;
        }

        //end
      <?php
   }
   function opcao_buscaJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.bt_buscar.focus();
          return false;
        }

        //end
      <?php
   }
   function Button1Click($sender, $params)
   {
      //*** Inibe as Telas de Cabecalho ***

      $this->lbl_mgt_cte_modelo->Visible = false;
      $this->lbl_mgt_cte_serie->Visible = false;
      $this->lbl_mgt_cte_numero->Visible = false;
      $this->lbl_mgt_cte_tipo->Visible = false;
      $this->lbl_mgt_cte_tipo_servico->Visible = false;
      $this->lbl_mgt_cte_tomador->Visible = false;
      $this->lbl_mgt_cte_forma_pagto->Visible = false;
      $this->lbl_mgt_cte_cfop->Visible = false;
      $this->lbl_mgt_cte_natureza_operacao->Visible = false;

      $this->mgt_cte_modelo->Visible = false;
      $this->mgt_cte_serie->Visible = false;
      $this->mgt_cte_numero->Visible = false;
      $this->mgt_cte_tipo->Visible = false;
      $this->mgt_cte_tipo_servico->Visible = false;
      $this->mgt_cte_tomador->Visible = false;
      $this->mgt_cte_forma_pagto->Visible = false;
      $this->mgt_cte_cfop->Visible = false;
      $this->mgt_cte_natureza_operacao->Visible = false;

      $this->lbl_origem->Visible = false;
      $this->lbl_destino->Visible = false;

      $this->lbl_mgt_cte_origem_estado->Visible = false;
      $this->lbl_mgt_cte_origem_cidade->Visible = false;

      $this->mgt_cte_origem_estado->Visible = false;
      $this->mgt_cte_origem_cidade->Visible = false;

      $this->lbl_mgt_cte_destino_estado->Visible = false;
      $this->lbl_mgt_cte_destino_cidade->Visible = false;

      $this->mgt_cte_destino_estado->Visible = false;
      $this->mgt_cte_destino_cidade->Visible = false;

      $this->grp_remetente->Visible = false;
      $this->grp_destinatario->Visible = false;

      //*** Exibe a Tela para a Adicao do Cliente ***

      $this->opcao_adiciona_cliente->Value = "remetente";
      $this->adiciona_cliente->Top = 35;
      $this->adiciona_cliente->Visible = true;
   }
   function Button2Click($sender, $params)
   {
      //*** Inibe as Telas de Cabecalho ***

      $this->lbl_mgt_cte_modelo->Visible = false;
      $this->lbl_mgt_cte_serie->Visible = false;
      $this->lbl_mgt_cte_numero->Visible = false;
      $this->lbl_mgt_cte_tipo->Visible = false;
      $this->lbl_mgt_cte_tipo_servico->Visible = false;
      $this->lbl_mgt_cte_tomador->Visible = false;
      $this->lbl_mgt_cte_forma_pagto->Visible = false;
      $this->lbl_mgt_cte_cfop->Visible = false;
      $this->lbl_mgt_cte_natureza_operacao->Visible = false;

      $this->mgt_cte_modelo->Visible = false;
      $this->mgt_cte_serie->Visible = false;
      $this->mgt_cte_numero->Visible = false;
      $this->mgt_cte_tipo->Visible = false;
      $this->mgt_cte_tipo_servico->Visible = false;
      $this->mgt_cte_tomador->Visible = false;
      $this->mgt_cte_forma_pagto->Visible = false;
      $this->mgt_cte_cfop->Visible = false;
      $this->mgt_cte_natureza_operacao->Visible = false;

      $this->lbl_origem->Visible = false;
      $this->lbl_destino->Visible = false;

      $this->lbl_mgt_cte_origem_estado->Visible = false;
      $this->lbl_mgt_cte_origem_cidade->Visible = false;

      $this->mgt_cte_origem_estado->Visible = false;
      $this->mgt_cte_origem_cidade->Visible = false;

      $this->lbl_mgt_cte_destino_estado->Visible = false;
      $this->lbl_mgt_cte_destino_cidade->Visible = false;

      $this->mgt_cte_destino_estado->Visible = false;
      $this->mgt_cte_destino_cidade->Visible = false;

      $this->grp_remetente->Visible = false;
      $this->grp_destinatario->Visible = false;

      //*** Exibe a Tela para a Adicao do Cliente ***

      $this->opcao_adiciona_cliente->Value = "destinatario";
      $this->adiciona_cliente->Top = 35;
      $this->adiciona_cliente->Visible = true;
   }
   function bt_fechar_clienteClick($sender, $params)
   {
      //*** Exibe as Telas de Cabecalho ***

      $this->lbl_mgt_cte_modelo->Visible = true;
      $this->lbl_mgt_cte_serie->Visible = true;
      $this->lbl_mgt_cte_numero->Visible = true;
      $this->lbl_mgt_cte_tipo->Visible = true;
      $this->lbl_mgt_cte_tipo_servico->Visible = true;
      $this->lbl_mgt_cte_tomador->Visible = true;
      $this->lbl_mgt_cte_forma_pagto->Visible = true;
      $this->lbl_mgt_cte_cfop->Visible = true;
      $this->lbl_mgt_cte_natureza_operacao->Visible = true;

      $this->mgt_cte_modelo->Visible = true;
      $this->mgt_cte_serie->Visible = true;
      $this->mgt_cte_numero->Visible = true;
      $this->mgt_cte_tipo->Visible = true;
      $this->mgt_cte_tipo_servico->Visible = true;
      $this->mgt_cte_tomador->Visible = true;
      $this->mgt_cte_forma_pagto->Visible = true;
      $this->mgt_cte_cfop->Visible = true;
      $this->mgt_cte_natureza_operacao->Visible = true;

      $this->lbl_origem->Visible = true;
      $this->lbl_destino->Visible = true;

      $this->lbl_mgt_cte_origem_estado->Visible = true;
      $this->lbl_mgt_cte_origem_cidade->Visible = true;

      $this->mgt_cte_origem_estado->Visible = true;
      $this->mgt_cte_origem_cidade->Visible = true;

      $this->lbl_mgt_cte_destino_estado->Visible = true;
      $this->lbl_mgt_cte_destino_cidade->Visible = true;

      $this->mgt_cte_destino_estado->Visible = true;
      $this->mgt_cte_destino_cidade->Visible = true;

      $this->grp_remetente->Visible = true;
      $this->grp_destinatario->Visible = true;

      //*** Inibe a Tela para a Adicao do Cliente ***

      $this->adiciona_cliente->Visible = false;
      $this->adiciona_cliente->Top = 1093;
   }
   function bt_buscarClick($sender, $params)
   {
      if(trim($this->dados_busca->Text) == "")
      {
         $Comando_SQL = "select * from mgt_clientes order by mgt_cliente_numero";
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_numero = '" . trim($this->dados_busca->Text) . "' order by mgt_cliente_numero";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Tipo")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_codigo_tipo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_codigo_tipo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_codigo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_codigo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Nome")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_nome like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_nome";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Razao Social")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_razao_social like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_razao_social";
         }

      }

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
      GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Clientes->Open();
   }
   function mgt_cte_remetente_codigoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_remetente_razao_social.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_destinatario_codigoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_destinatario_razao_social.focus();
          return false;
        }

        //end
      <?php
   }
   function registros_clientesJSRowChanged($sender, $params)
   {
      ?>
        //begin js

        document.nfconhecimentoscteinc.adiciona_cliente_numero.value = registros_clientes.getTableModel().getValue(0, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.adiciona_cliente_codigo.value = registros_clientes.getTableModel().getValue(2, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.adiciona_cliente_nome.value = registros_clientes.getTableModel().getValue(3, registros_clientes.getFocusedRow());

        document.nfconhecimentoscteinc.hd_numero.value = registros_clientes.getTableModel().getValue(0, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.hd_codigo.value = registros_clientes.getTableModel().getValue(2, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.hd_nome.value = registros_clientes.getTableModel().getValue(3, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.hd_razao_social.value = registros_clientes.getTableModel().getValue(4, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.hd_inscricao_estadual.value = registros_clientes.getTableModel().getValue(5, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.hd_fone.value = registros_clientes.getTableModel().getValue(6, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.hd_endereco.value = registros_clientes.getTableModel().getValue(7, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.hd_bairro.value = registros_clientes.getTableModel().getValue(8, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.hd_cidade.value = registros_clientes.getTableModel().getValue(9, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.hd_estado.value = registros_clientes.getTableModel().getValue(10, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.hd_cep.value = registros_clientes.getTableModel().getValue(11, registros_clientes.getFocusedRow());
        document.nfconhecimentoscteinc.hd_pais.value = registros_clientes.getTableModel().getValue(12, registros_clientes.getFocusedRow());

        //end
      <?php
   }
   function bt_adiciona_clienteClick($sender, $params)
   {
      if(trim($this->opcao_adiciona_cliente->Value) == "remetente")
      {
         $this->mgt_cte_remetente_codigo->Text = $this->hd_codigo->Value;
         $this->mgt_cte_remetente_razao_social->Text = $this->hd_razao_social->Value;
         $this->mgt_cte_remetente_inscricao_estadual->Text = $this->hd_inscricao_estadual->Value;
         $this->mgt_cte_remetente_fone->Text = $this->hd_fone->Value;
         $this->mgt_cte_remetente_endereco->Text = $this->hd_endereco->Value;
         $this->mgt_cte_remetente_bairro->Text = $this->hd_bairro->Value;
         $this->mgt_cte_remetente_cidade->Text = $this->hd_cidade->Value;
         $this->mgt_cte_remetente_estado->Text = $this->hd_estado->Value;
         $this->mgt_cte_remetente_cep->Text = $this->hd_cep->Value;
         $this->mgt_cte_remetente_pais->Text = $this->hd_pais->Value;
      }
      else
      {
         $this->mgt_cte_destinatario_codigo->Text = $this->hd_codigo->Value;
         $this->mgt_cte_destinatario_razao_social->Text = $this->hd_razao_social->Value;
         $this->mgt_cte_destinatario_inscricao_estadual->Text = $this->hd_inscricao_estadual->Value;
         $this->mgt_cte_destinatario_fone->Text = $this->hd_fone->Value;
         $this->mgt_cte_destinatario_endereco->Text = $this->hd_endereco->Value;
         $this->mgt_cte_destinatario_bairro->Text = $this->hd_bairro->Value;
         $this->mgt_cte_destinatario_cidade->Text = $this->hd_cidade->Value;
         $this->mgt_cte_destinatario_estado->Text = $this->hd_estado->Value;
         $this->mgt_cte_destinatario_cep->Text = $this->hd_cep->Value;
         $this->mgt_cte_destinatario_pais->Text = $this->hd_pais->Value;
      }

      //*** Exibe as Telas de Cabecalho ***

      $this->lbl_mgt_cte_modelo->Visible = true;
      $this->lbl_mgt_cte_serie->Visible = true;
      $this->lbl_mgt_cte_numero->Visible = true;
      $this->lbl_mgt_cte_tipo->Visible = true;
      $this->lbl_mgt_cte_tipo_servico->Visible = true;
      $this->lbl_mgt_cte_tomador->Visible = true;
      $this->lbl_mgt_cte_forma_pagto->Visible = true;
      $this->lbl_mgt_cte_cfop->Visible = true;
      $this->lbl_mgt_cte_natureza_operacao->Visible = true;

      $this->mgt_cte_modelo->Visible = true;
      $this->mgt_cte_serie->Visible = true;
      $this->mgt_cte_numero->Visible = true;
      $this->mgt_cte_tipo->Visible = true;
      $this->mgt_cte_tipo_servico->Visible = true;
      $this->mgt_cte_tomador->Visible = true;
      $this->mgt_cte_forma_pagto->Visible = true;
      $this->mgt_cte_cfop->Visible = true;
      $this->mgt_cte_natureza_operacao->Visible = true;

      $this->lbl_origem->Visible = true;
      $this->lbl_destino->Visible = true;

      $this->lbl_mgt_cte_origem_estado->Visible = true;
      $this->lbl_mgt_cte_origem_cidade->Visible = true;

      $this->mgt_cte_origem_estado->Visible = true;
      $this->mgt_cte_origem_cidade->Visible = true;

      $this->lbl_mgt_cte_destino_estado->Visible = true;
      $this->lbl_mgt_cte_destino_cidade->Visible = true;

      $this->mgt_cte_destino_estado->Visible = true;
      $this->mgt_cte_destino_cidade->Visible = true;

      $this->grp_remetente->Visible = true;
      $this->grp_destinatario->Visible = true;

      //*** Inibe a Tela para a Adicao do Cliente ***

      $this->adiciona_cliente->Visible = false;
      $this->adiciona_cliente->Top = 1093;
   }
   function bt_transmitirClick($sender, $params)
   {
      if($this->valida_campos() == true)
      {
         $this->confirmacao->Top = 129;
         $this->confirmacao->IsVisible = true;
      }
   }
   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 1300;
      $this->confirmacao->IsVisible = false;
   }
   function bt_simClick($sender, $params)
   {
      $this->confirmacao->Top = 1300;
      $this->confirmacao->IsVisible = false;

      //*** Gera o XML ***
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
      assinaXML('nfe/entrada/CTe_' . trim($this->mgt_cte_numero->Text) . '.xml', 'nfe/saida/CTe_' . trim($this->mgt_cte_numero->Text) . '_sign.xml', 'infCte', $certificado);

      $validacao = validaXML('nfe/saida/CTe_' . trim($this->mgt_cte_numero->Text) . '_sign.xml', 'validadores_ct/cte_v2.00.xsd');

      if($validacao["status"] == '1')
      {
         //*** Gera uma Copia do Conhecimento para o Entregar Cliente ***
         copy('nfe/saida/CTe_' . trim($this->mgt_cte_numero->Text) . '_sign.xml', 'nfe/entregar_cliente/CTe_' . trim($this->mgt_cte_numero->Text) . '.xml');

         //*** Gera uma Copia do Conhecimento para o Importa Conhecimento ***
         copy('nfe/saida/CTe_' . trim($this->mgt_cte_numero->Text) . '_sign.xml', 'nfe/importa_conhecimento/CTe_' . trim($this->mgt_cte_numero->Text) . '.xml');

         //*** Apaga o Conhecimento se Existir ***
         $Comando_SQL = "DELETE FROM mgt_ctes WHERE mgt_cte_numero = " . trim($this->mgt_cte_numero->Text);

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Registra o Conhecimento no BD ***
         $Comando_SQL = "INSERT INTO mgt_ctes(";
         $Comando_SQL .= "mgt_cte_numero, ";
         $Comando_SQL .= "mgt_cte_modelo, ";
         $Comando_SQL .= "mgt_cte_serie, ";
         $Comando_SQL .= "mgt_cte_tipo, ";
         $Comando_SQL .= "mgt_cte_tipo_servico, ";
         $Comando_SQL .= "mgt_cte_tomador, ";
         $Comando_SQL .= "mgt_cte_forma_pagto, ";
         $Comando_SQL .= "mgt_cte_cfop, ";
         $Comando_SQL .= "mgt_cte_natureza_operacao, ";
         $Comando_SQL .= "mgt_cte_origem_estado, ";
         $Comando_SQL .= "mgt_cte_origem_cidade, ";
         $Comando_SQL .= "mgt_cte_destino_estado, ";
         $Comando_SQL .= "mgt_cte_destino_cidade, ";
         $Comando_SQL .= "mgt_cte_remetente_codigo, ";
         $Comando_SQL .= "mgt_cte_remetente_razao_social, ";
         $Comando_SQL .= "mgt_cte_remetente_inscricao_estadual, ";
         $Comando_SQL .= "mgt_cte_remetente_fone, ";
         $Comando_SQL .= "mgt_cte_remetente_endereco, ";
         $Comando_SQL .= "mgt_cte_remetente_bairro, ";
         $Comando_SQL .= "mgt_cte_remetente_cidade, ";
         $Comando_SQL .= "mgt_cte_remetente_estado, ";
         $Comando_SQL .= "mgt_cte_remetente_cep, ";
         $Comando_SQL .= "mgt_cte_remetente_pais, ";
         $Comando_SQL .= "mgt_cte_destinatario_codigo, ";
         $Comando_SQL .= "mgt_cte_destinatario_razao_social, ";
         $Comando_SQL .= "mgt_cte_destinatario_inscricao_estadual, ";
         $Comando_SQL .= "mgt_cte_destinatario_fone, ";
         $Comando_SQL .= "mgt_cte_destinatario_endereco, ";
         $Comando_SQL .= "mgt_cte_destinatario_bairro, ";
         $Comando_SQL .= "mgt_cte_destinatario_cidade, ";
         $Comando_SQL .= "mgt_cte_destinatario_estado, ";
         $Comando_SQL .= "mgt_cte_destinatario_cep, ";
         $Comando_SQL .= "mgt_cte_destinatario_pais, ";
         $Comando_SQL .= "mgt_cte_produto_predominante, ";
         $Comando_SQL .= "mgt_cte_produto_quantidade_1, ";
         $Comando_SQL .= "mgt_cte_produto_unidade_1, ";
         $Comando_SQL .= "mgt_cte_produto_quantidade_2, ";
         $Comando_SQL .= "mgt_cte_produto_unidade_2, ";
         $Comando_SQL .= "mgt_cte_produto_quantidade_3, ";
         $Comando_SQL .= "mgt_cte_produto_unidade_3, ";
         $Comando_SQL .= "mgt_cte_produto_quantidade_4, ";
         $Comando_SQL .= "mgt_cte_produto_unidade_4, ";
         $Comando_SQL .= "mgt_cte_produto_quantidade_5, ";
         $Comando_SQL .= "mgt_cte_produto_unidade_5, ";
         $Comando_SQL .= "mgt_cte_produto_quantidade_6, ";
         $Comando_SQL .= "mgt_cte_produto_unidade_6, ";
         $Comando_SQL .= "mgt_cte_produto_quantidade_7, ";
         $Comando_SQL .= "mgt_cte_produto_unidade_7, ";
         $Comando_SQL .= "mgt_cte_produto_quantidade_8, ";
         $Comando_SQL .= "mgt_cte_produto_unidade_8, ";
         $Comando_SQL .= "mgt_cte_produto_quantidade_9, ";
         $Comando_SQL .= "mgt_cte_produto_unidade_9, ";
         $Comando_SQL .= "mgt_cte_produto_quantidade_10, ";
         $Comando_SQL .= "mgt_cte_produto_unidade_10, ";
         $Comando_SQL .= "mgt_cte_produto_total_mercadoria, ";
         $Comando_SQL .= "mgt_cte_servico_1, ";
         $Comando_SQL .= "mgt_cte_servico_valor_1, ";
         $Comando_SQL .= "mgt_cte_servico_2, ";
         $Comando_SQL .= "mgt_cte_servico_valor_2, ";
         $Comando_SQL .= "mgt_cte_servico_3, ";
         $Comando_SQL .= "mgt_cte_servico_valor_3, ";
         $Comando_SQL .= "mgt_cte_servico_4, ";
         $Comando_SQL .= "mgt_cte_servico_valor_4, ";
         $Comando_SQL .= "mgt_cte_servico_5, ";
         $Comando_SQL .= "mgt_cte_servico_valor_5, ";
         $Comando_SQL .= "mgt_cte_servico_6, ";
         $Comando_SQL .= "mgt_cte_servico_valor_6, ";
         $Comando_SQL .= "mgt_cte_servico_7, ";
         $Comando_SQL .= "mgt_cte_servico_valor_7, ";
         $Comando_SQL .= "mgt_cte_servico_8, ";
         $Comando_SQL .= "mgt_cte_servico_valor_8, ";
         $Comando_SQL .= "mgt_cte_servico_9, ";
         $Comando_SQL .= "mgt_cte_servico_valor_9, ";
         $Comando_SQL .= "mgt_cte_servico_10, ";
         $Comando_SQL .= "mgt_cte_servico_valor_10, ";
         $Comando_SQL .= "mgt_cte_servico_valor_total, ";
         $Comando_SQL .= "mgt_cte_servico_valor_receber, ";
         $Comando_SQL .= "mgt_cte_data_receber, ";
         $Comando_SQL .= "mgt_cte_situacao_tributaria, ";
         $Comando_SQL .= "mgt_cte_percentual_reducao_bc, ";
         $Comando_SQL .= "mgt_cte_valor_bc_icms, ";
         $Comando_SQL .= "mgt_cte_aliquota_icms, ";
         $Comando_SQL .= "mgt_cte_valor_icms, ";
         $Comando_SQL .= "mgt_cte_valor_outorgado, ";
         $Comando_SQL .= "mgt_cte_chave_1, ";
         $Comando_SQL .= "mgt_cte_chave_2, ";
         $Comando_SQL .= "mgt_cte_chave_3, ";
         $Comando_SQL .= "mgt_cte_chave_4, ";
         $Comando_SQL .= "mgt_cte_chave_5, ";
         $Comando_SQL .= "mgt_cte_chave_6, ";
         $Comando_SQL .= "mgt_cte_chave_7, ";
         $Comando_SQL .= "mgt_cte_chave_8, ";
         $Comando_SQL .= "mgt_cte_chave_9, ";
         $Comando_SQL .= "mgt_cte_chave_10, ";
         $Comando_SQL .= "mgt_cte_observacao, ";
         $Comando_SQL .= "mgt_cte_rntrc, ";
         $Comando_SQL .= "mgt_cte_lotacao, ";
         $Comando_SQL .= "mgt_cte_data_entrega, ";
         $Comando_SQL .= "mgt_cte_renavam, ";
         $Comando_SQL .= "mgt_cte_placa, ";
         $Comando_SQL .= "mgt_cte_tara, ";
         $Comando_SQL .= "mgt_cte_capkg, ";
         $Comando_SQL .= "mgt_cte_capm3, ";
         $Comando_SQL .= "mgt_cte_uf, ";
         $Comando_SQL .= "mgt_cte_tpprop, ";
         $Comando_SQL .= "mgt_cte_tpveic, ";
         $Comando_SQL .= "mgt_cte_tprod, ";
         $Comando_SQL .= "mgt_cte_tpcar, ";
         $Comando_SQL .= "mgt_cte_seguro) ";
         $Comando_SQL .= "VALUES( ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_numero->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_modelo->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_serie->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_tipo->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_tipo_servico->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_tomador->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_forma_pagto->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_cfop->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_natureza_operacao->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_origem_estado->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_origem_cidade->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_destino_estado->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_destino_cidade->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_remetente_codigo->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_remetente_razao_social->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_remetente_inscricao_estadual->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_remetente_fone->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_remetente_endereco->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_remetente_bairro->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_remetente_cidade->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_remetente_estado->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_remetente_cep->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_remetente_pais->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_destinatario_codigo->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_destinatario_razao_social->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_destinatario_inscricao_estadual->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_destinatario_fone->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_destinatario_endereco->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_destinatario_bairro->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_destinatario_cidade->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_destinatario_estado->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_destinatario_cep->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_destinatario_pais->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_predominante->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_quantidade_1->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_unidade_1->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_quantidade_2->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_unidade_2->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_quantidade_3->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_unidade_3->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_quantidade_4->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_unidade_4->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_quantidade_5->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_unidade_5->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_quantidade_6->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_unidade_6->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_quantidade_7->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_unidade_7->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_quantidade_8->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_unidade_8->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_quantidade_9->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_unidade_9->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_quantidade_10->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_unidade_10->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_produto_total_mercadoria->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_1->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_valor_1->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_2->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_valor_2->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_3->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_valor_3->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_4->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_valor_4->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_5->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_valor_5->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_6->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_valor_6->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_7->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_valor_7->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_8->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_valor_8->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_9->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_valor_9->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_10->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_valor_10->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_valor_total->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_servico_valor_receber->Text) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_cte_data_receber->Text)) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_situacao_tributaria->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_percentual_reducao_bc->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_valor_bc_icms->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_aliquota_icms->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_valor_icms->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_valor_outorgado->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_chave_1->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_chave_2->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_chave_3->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_chave_4->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_chave_5->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_chave_6->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_chave_7->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_chave_8->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_chave_9->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_chave_10->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_observacao->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_rntrc->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_lotacao->ItemIndex) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_cte_data_entrega->Text)) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_renavam->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_placa->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_tara->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_capkg->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_capm3->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_uf->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_tpprop->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_tpveic->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_tprod->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->mgt_cte_tpcar->ItemIndex) . "', ";
		 $Comando_SQL .= "'" . trim($this->mgt_cte_seguro->ItemIndex) . "') ";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Registra o Numero do XML Gerado ***
         $nro_xml_cte_gerado = trim($this->mgt_cte_numero->Text);

         //*** Limpa os Campos para uma Nova Geracao do Conhecimento ***
         $this->limpa_campos();

         //*** Obtem novo numero de CTe ***
         if(trim($this->mgt_cte_numero->Text) == '')
         {
            $Comando_SQL = "select MAX(mgt_cte_numero) AS mgt_cte_numero from mgt_ctes";

            GetConexaoPrincipal()->SQL_MGT_CTe->Close();
            GetConexaoPrincipal()->SQL_MGT_CTe->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_CTe->Open();

            $this->mgt_cte_numero->Text = GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_numero'] + 1;
         }

         //*** Avisa o usuario para o Proximo Preenchimento ***
         $this->MSG_Erro->Caption = "<b>O CTe_" . trim($nro_xml_cte_gerado) . ".xml foi Gerado!, para gerar outro, informe novos dados abaixo.</b>";

         //*** Exibe o Alerta e volta para a Tela Inicial ***
         $listagem_erros = 'XML DO CONHECIMENTO ELETRONICO!!!\n\n';
         $listagem_erros .= 'O XML para a importacao do Conhecimento Eletronico foi Gerado com Sucesso\n\n';
         $listagem_erros .= ' ||\n';
         $listagem_erros .= ' || Por favor, abra o Emissor do CTe e importe da pasta IMPORTA_CONHECIMENTO\n';
         $listagem_erros .= ' || o arquivo XML informado abaixo:\n';
         $listagem_erros .= ' ||\n';
         $listagem_erros .= ' || CTe_' . trim($nro_xml_cte_gerado) . '.xml\n';
         $listagem_erros .= ' || \n';
         $listagem_erros .= ' || Apos a importacao, efetue as Etapas: VALIDAR, ASSINAR e TRANSMITIR\n';
         $listagem_erros .= ' || ';
         echo "<script language=\"JavaScript\">alert('" . $listagem_erros . "');</script>";
      }
      else
      {
         $exibe_erro = trim($validacao["error"]);
         $exibe_erro = str_replace("'", "", $exibe_erro);
         $exibe_erro = str_replace('"', '', $exibe_erro);
         $exibe_erro = str_replace("\n", "\\n", $exibe_erro);

         echo "<script language=\"JavaScript\">alert('#Atencao erros encontrados:\\n\\n\\n" . trim($exibe_erro) . "');</script>";
      }

      //****************************************
      //*** FINAL - Assina e Transmite o XML ***
      //****************************************
   }
   function mgt_cte_renavamJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_placa.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_placaJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_tara.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_taraJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_capkg.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_capkgJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_capm3.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_capm3JSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_uf.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_ufJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_tpprop.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_tppropJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_tpveic.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_tpveicJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_tprod.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_tprodJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_tpcar.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_tpcarJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.bt_transmitir.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_taraJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_tara;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_capkgJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_capkg;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_capm3JSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Numero ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_capm3;
        var digits="0123456789";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
        }

        //*** FINAL - So Numero ***

        //end
      <?php
   }
   function mgt_cte_data_receberJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_situacao_tributaria.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_cte_data_receberJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Data ***

        var campo = document.nfconhecimentoscteinc.mgt_cte_data_receber;
        var digits="0123456789/";
        var campo_temp;
        for (var i=0;i<campo.value.length;i++){
            campo_temp=campo.value.substring(i,i+1);
            if (digits.indexOf(campo_temp)==-1){
               campo.value = campo.value.substring(0,i);
               break;
            }
         }

         //*** FINAL - So Data ***

        //end
      <?php
   }
   function nfconhecimentoscteincCreate($sender, $params)
   {
      if(trim($this->mgt_cte_numero->Text) == '')
      {
         $this->mgt_cte_modelo->Text = '57';
         $this->mgt_cte_serie->Text = $_SESSION['login_nfe_serie'];

         //*** Obtencao do Conhecimento ***

         $mgt_cte_alteracao = $_REQUEST['mgt_cte_alteracao'];

         if(trim($mgt_cte_alteracao) == 'SIM')
         {
            $mgt_cte_numero = $_REQUEST['mgt_cte_numero'];

            $Comando_SQL = "select *,date_format(mgt_cte_data_receber, '%d/%m/%Y') AS mgt_cte_data_receber,date_format(mgt_cte_data_entrega, '%d/%m/%Y') AS mgt_cte_data_entrega from mgt_ctes where mgt_cte_numero = '" . trim($mgt_cte_numero) . "' order by mgt_cte_numero Desc";

            GetConexaoPrincipal()->SQL_MGT_CTe->Close();
            GetConexaoPrincipal()->SQL_MGT_CTe->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_CTe->Open();

            if((GetConexaoPrincipal()->SQL_MGT_CTe->EOF) == 1)
            {
               redirect('nf_conhecimentos_cte.php');
            }
            else
            {
               $this->mgt_cte_numero->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_numero']);
               $this->mgt_cte_modelo->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_modelo']);
               $this->mgt_cte_serie->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_serie']);
               $this->mgt_cte_tipo->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_tipo']);
               $this->mgt_cte_tipo_servico->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_tipo_servico']);
               $this->mgt_cte_tomador->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_tomador']);
               $this->mgt_cte_forma_pagto->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_forma_pagto']);
               $this->mgt_cte_cfop->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_cfop']);
               $this->mgt_cte_natureza_operacao->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_natureza_operacao']);
               $this->mgt_cte_origem_estado->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_origem_estado']);
               $this->mgt_cte_origem_cidade->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_origem_cidade']);
               $this->mgt_cte_destino_estado->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_destino_estado']);
               $this->mgt_cte_destino_cidade->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_destino_cidade']);
               $this->mgt_cte_remetente_codigo->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_remetente_codigo']);
               $this->mgt_cte_remetente_razao_social->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_remetente_razao_social']);
               $this->mgt_cte_remetente_inscricao_estadual->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_remetente_inscricao_estadual']);
               $this->mgt_cte_remetente_fone->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_remetente_fone']);
               $this->mgt_cte_remetente_endereco->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_remetente_endereco']);
               $this->mgt_cte_remetente_bairro->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_remetente_bairro']);
               $this->mgt_cte_remetente_cidade->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_remetente_cidade']);
               $this->mgt_cte_remetente_estado->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_remetente_estado']);
               $this->mgt_cte_remetente_cep->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_remetente_cep']);
               $this->mgt_cte_remetente_pais->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_remetente_pais']);
               $this->mgt_cte_destinatario_codigo->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_destinatario_codigo']);
               $this->mgt_cte_destinatario_razao_social->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_destinatario_razao_social']);
               $this->mgt_cte_destinatario_inscricao_estadual->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_destinatario_inscricao_estadual']);
               $this->mgt_cte_destinatario_fone->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_destinatario_fone']);
               $this->mgt_cte_destinatario_endereco->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_destinatario_endereco']);
               $this->mgt_cte_destinatario_bairro->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_destinatario_bairro']);
               $this->mgt_cte_destinatario_cidade->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_destinatario_cidade']);
               $this->mgt_cte_destinatario_estado->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_destinatario_estado']);
               $this->mgt_cte_destinatario_cep->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_destinatario_cep']);
               $this->mgt_cte_destinatario_pais->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_destinatario_pais']);
               $this->mgt_cte_produto_predominante->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_predominante']);
               $this->mgt_cte_produto_quantidade_1->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_quantidade_1']);
               $this->mgt_cte_produto_unidade_1->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_unidade_1']);
               $this->mgt_cte_produto_quantidade_2->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_quantidade_2']);
               $this->mgt_cte_produto_unidade_2->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_unidade_2']);
               $this->mgt_cte_produto_quantidade_3->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_quantidade_3']);
               $this->mgt_cte_produto_unidade_3->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_unidade_3']);
               $this->mgt_cte_produto_quantidade_4->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_quantidade_4']);
               $this->mgt_cte_produto_unidade_4->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_unidade_4']);
               $this->mgt_cte_produto_quantidade_5->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_quantidade_5']);
               $this->mgt_cte_produto_unidade_5->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_unidade_5']);
               $this->mgt_cte_produto_quantidade_6->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_quantidade_6']);
               $this->mgt_cte_produto_unidade_6->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_unidade_6']);
               $this->mgt_cte_produto_quantidade_7->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_quantidade_7']);
               $this->mgt_cte_produto_unidade_7->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_unidade_7']);
               $this->mgt_cte_produto_quantidade_8->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_quantidade_8']);
               $this->mgt_cte_produto_unidade_8->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_unidade_8']);
               $this->mgt_cte_produto_quantidade_9->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_quantidade_9']);
               $this->mgt_cte_produto_unidade_9->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_unidade_9']);
               $this->mgt_cte_produto_quantidade_10->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_quantidade_10']);
               $this->mgt_cte_produto_unidade_10->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_unidade_10']);
               $this->mgt_cte_produto_total_mercadoria->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_produto_total_mercadoria']);
               $this->mgt_cte_servico_1->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_1']);
               $this->mgt_cte_servico_valor_1->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_valor_1']);
               $this->mgt_cte_servico_2->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_2']);
               $this->mgt_cte_servico_valor_2->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_valor_2']);
               $this->mgt_cte_servico_3->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_3']);
               $this->mgt_cte_servico_valor_3->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_valor_3']);
               $this->mgt_cte_servico_4->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_4']);
               $this->mgt_cte_servico_valor_4->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_valor_4']);
               $this->mgt_cte_servico_5->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_5']);
               $this->mgt_cte_servico_valor_5->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_valor_5']);
               $this->mgt_cte_servico_6->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_6']);
               $this->mgt_cte_servico_valor_6->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_valor_6']);
               $this->mgt_cte_servico_7->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_7']);
               $this->mgt_cte_servico_valor_7->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_valor_7']);
               $this->mgt_cte_servico_8->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_8']);
               $this->mgt_cte_servico_valor_8->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_valor_8']);
               $this->mgt_cte_servico_9->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_9']);
               $this->mgt_cte_servico_valor_9->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_valor_9']);
               $this->mgt_cte_servico_10->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_10']);
               $this->mgt_cte_servico_valor_10->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_valor_10']);
               $this->mgt_cte_servico_valor_total->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_valor_total']);
               $this->mgt_cte_servico_valor_receber->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_servico_valor_receber']);
               $this->mgt_cte_data_receber->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_data_receber']);
               $this->mgt_cte_situacao_tributaria->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_situacao_tributaria']);
               $this->mgt_cte_percentual_reducao_bc->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_percentual_reducao_bc']);
               $this->mgt_cte_valor_bc_icms->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_valor_bc_icms']);
               $this->mgt_cte_aliquota_icms->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_aliquota_icms']);
               $this->mgt_cte_valor_icms->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_valor_icms']);
               $this->mgt_cte_valor_outorgado->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_valor_outorgado']);
               $this->mgt_cte_chave_1->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_chave_1']);
               $this->mgt_cte_chave_2->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_chave_2']);
               $this->mgt_cte_chave_3->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_chave_3']);
               $this->mgt_cte_chave_4->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_chave_4']);
               $this->mgt_cte_chave_5->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_chave_5']);
               $this->mgt_cte_chave_6->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_chave_6']);
               $this->mgt_cte_chave_7->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_chave_7']);
               $this->mgt_cte_chave_8->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_chave_8']);
               $this->mgt_cte_chave_9->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_chave_9']);
               $this->mgt_cte_chave_10->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_chave_10']);
               $this->mgt_cte_observacao->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_observacao']);
               $this->mgt_cte_rntrc->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_rntrc']);
               $this->mgt_cte_lotacao->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_lotacao']);
			   $this->mgt_cte_seguro->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_seguro']);
               $this->mgt_cte_data_entrega->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_data_entrega']);
               $this->mgt_cte_renavam->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_renavam']);
               $this->mgt_cte_placa->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_placa']);
               $this->mgt_cte_tara->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_tara']);
               $this->mgt_cte_capkg->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_capkg']);
               $this->mgt_cte_capm3->Text = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_capm3']);
               $this->mgt_cte_uf->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_uf']);
               $this->mgt_cte_tpprop->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_tpprop']);
               $this->mgt_cte_tpveic->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_tpveic']);
               $this->mgt_cte_tprod->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_tprod']);
               $this->mgt_cte_tpcar->ItemIndex = trim(GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_tpcar']);
            }
         }
         else
         {
            $Comando_SQL = "select MAX(mgt_cte_numero) AS mgt_cte_numero from mgt_ctes";

            GetConexaoPrincipal()->SQL_MGT_CTe->Close();
            GetConexaoPrincipal()->SQL_MGT_CTe->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_CTe->Open();

            $this->mgt_cte_numero->Text = GetConexaoPrincipal()->SQL_MGT_CTe->Fields['mgt_cte_numero'] + 1;
         }
      }
   }
    function mgt_cte_seguroJSKeyPress($sender, $params)
    {
        ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.nfconhecimentoscteinc.mgt_cte_renavam.focus();
          return false;
        }

        //end
        <?php
    }
}

global $application;

global $nfconhecimentoscteinc;

//Creates the form
$nfconhecimentoscteinc = new nfconhecimentoscteinc($application);

//Read from resource file
$nfconhecimentoscteinc->loadResource(__FILE__);

//Shows the form
$nfconhecimentoscteinc->show();

?>