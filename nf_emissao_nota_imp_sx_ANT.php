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
use_unit("buttons.inc.php");
use_unit("dbgrids.inc.php");
use_unit("comctrls.inc.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class nfemissaonotaimp extends Page
{
   public $mgt_nota_fiscal_exportacao_local_emb = null;
   public $mgt_nota_fiscal_exportacao_uf_emb = null;
   public $Label130 = null;
   public $Label129 = null;
   public $GroupBox1 = null;
   public $hd_bt_sim_clicado = null;
   public $hd_apenas_registra = null;
   public $mgt_apenas_registra = null;
   public $hd_cfop_cst_natureza = null;
   public $hd_cfop_cst = null;
   public $hd_cfop_st = null;
   public $hd_nota_fiscal_descricao_condicao_pgto = null;
   public $mgt_nota_fiscal_descricao_condicao_pgto = null;
   public $Label128 = null;
   public $mgt_nota_fiscal_natureza_operacao_imp = null;
   public $Label127 = null;
   public $hd_nota_fiscal_nao_imprimir = null;
   public $mgt_nota_fiscal_nao_imprimir = null;
   public $hd_nota_fiscal_zerar_base_icms = null;
   public $hd_nota_fiscal_consumo = null;
   public $hd_nota_fiscal_revenda = null;
   public $hd_nota_fiscal_imprime_observacao_nota = null;
   public $Label126 = null;
   public $mgt_nota_fiscal_suframa = null;
   public $Label85 = null;
   public $mgt_nota_fiscal_suframa_desconto_pis_cofins = null;
   public $Label125 = null;
   public $mgt_nota_fiscal_suframa_desconto_icms = null;
   public $Label124 = null;
   public $Panel2 = null;
   public $mgt_nota_fiscal_tipo_nota = null;
   public $Label71 = null;
   public $mgt_nota_fiscal_cfop_2 = null;
   public $Label97 = null;
   public $mgt_nota_fiscal_cfop = null;
   public $Label76 = null;
   public $mgt_nota_fiscal_natureza_operacao = null;
   public $Label65 = null;
   public $hd_tipo_codigo = null;
   public $hd_numero_pedido = null;
   public $mgt_nota_fiscal_observacao_adicional_8 = null;
   public $mgt_nota_fiscal_observacao_adicional_9 = null;
   public $Label123 = null;
   public $Label122 = null;
   public $Label121 = null;
   public $Label120 = null;
   public $msg_confirmacao = null;
   public $confirmacao = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $mgt_nota_fiscal_representante = null;
   public $mgt_nota_fiscal_banco = null;
   public $Label119 = null;
   public $Label118 = null;
   public $mgt_nota_fiscal_valor_desconto = null;
   public $Label117 = null;
   public $registros_produtos = null;
   public $mgt_nota_fiscal_dup_forma_12 = null;
   public $mgt_nota_fiscal_dup_forma_11 = null;
   public $mgt_nota_fiscal_dup_forma_10 = null;
   public $mgt_nota_fiscal_dup_forma_9 = null;
   public $mgt_nota_fiscal_dup_forma_8 = null;
   public $mgt_nota_fiscal_dup_forma_7 = null;
   public $mgt_nota_fiscal_dup_forma_6 = null;
   public $mgt_nota_fiscal_dup_forma_5 = null;
   public $mgt_nota_fiscal_dup_forma_4 = null;
   public $mgt_nota_fiscal_dup_forma_3 = null;
   public $mgt_nota_fiscal_dup_forma_2 = null;
   public $mgt_nota_fiscal_dup_forma_1 = null;
   public $mgt_nota_fiscal_dup_nro_12 = null;
   public $mgt_nota_fiscal_dup_nro_11 = null;
   public $mgt_nota_fiscal_dup_nro_10 = null;
   public $mgt_nota_fiscal_dup_nro_9 = null;
   public $mgt_nota_fiscal_dup_nro_8 = null;
   public $mgt_nota_fiscal_dup_nro_7 = null;
   public $mgt_nota_fiscal_dup_nro_6 = null;
   public $mgt_nota_fiscal_dup_nro_5 = null;
   public $mgt_nota_fiscal_dup_nro_4 = null;
   public $mgt_nota_fiscal_dup_nro_3 = null;
   public $mgt_nota_fiscal_dup_nro_2 = null;
   public $mgt_nota_fiscal_dup_nro_1 = null;
   public $opcao_vista = null;
   public $mgt_nota_fiscal_numero = null;
   public $Label116 = null;
   public $mgt_nota_fiscal_data_emissao = null;
   public $Label6 = null;
   public $mgt_nota_fiscal_dup_vlr_12 = null;
   public $mgt_nota_fiscal_dup_vlr_11 = null;
   public $mgt_nota_fiscal_dup_vlr_10 = null;
   public $mgt_nota_fiscal_dup_vlr_9 = null;
   public $mgt_nota_fiscal_dup_vlr_8 = null;
   public $mgt_nota_fiscal_dup_vlr_7 = null;
   public $mgt_nota_fiscal_dup_vlr_6 = null;
   public $mgt_nota_fiscal_dup_vlr_5 = null;
   public $mgt_nota_fiscal_dup_vlr_4 = null;
   public $mgt_nota_fiscal_dup_vlr_3 = null;
   public $mgt_nota_fiscal_dup_vlr_2 = null;
   public $mgt_nota_fiscal_dup_vlr_1 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_12 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_11 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_10 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_9 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_8 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_7 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_6 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_5 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_4 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_3 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_2 = null;
   public $mgt_nota_fiscal_dup_dt_vcto_1 = null;
   public $mgt_nota_fiscal_site = null;
   public $Label68 = null;
   public $Label60 = null;
   public $mgt_nota_fiscal_email = null;
   public $mgt_nota_fiscal_fone_fax = null;
   public $Label67 = null;
   public $Label66 = null;
   public $mgt_nota_fiscal_fone_celular = null;
   public $mgt_nota_fiscal_fone_comercial = null;
   public $Label58 = null;
   public $Label64 = null;
   public $mgt_nota_fiscal_ddd = null;
   public $mgt_nota_fiscal_contato = null;
   public $Label59 = null;
   public $mgt_nota_fiscal_fax_cobranca = null;
   public $Label55 = null;
   public $mgt_nota_fiscal_fone_cobranca = null;
   public $Label54 = null;
   public $mgt_nota_fiscal_pais_cobranca = null;
   public $Label53 = null;
   public $mgt_nota_fiscal_cep_cobranca = null;
   public $Label52 = null;
   public $mgt_nota_fiscal_estado_cobranca = null;
   public $Label51 = null;
   public $mgt_nota_fiscal_cidade_cobranca = null;
   public $Label50 = null;
   public $mgt_nota_fiscal_bairro_cobranca = null;
   public $Label49 = null;
   public $mgt_nota_fiscal_complemento_cobranca = null;
   public $Label57 = null;
   public $mgt_nota_fiscal_endereco_cobranca = null;
   public $Label47 = null;
   public $mgt_nota_fiscal_opcao_cobranca = null;
   public $Label56 = null;
   public $mgt_nota_fiscal_fax_entrega = null;
   public $Label44 = null;
   public $mgt_nota_fiscal_fone_entrega = null;
   public $Label43 = null;
   public $mgt_nota_fiscal_pais_entrega = null;
   public $Label42 = null;
   public $mgt_nota_fiscal_cep_entrega = null;
   public $Label41 = null;
   public $mgt_nota_fiscal_estado_entrega = null;
   public $Label40 = null;
   public $mgt_nota_fiscal_cidade_entrega = null;
   public $Label39 = null;
   public $mgt_nota_fiscal_bairro_entrega = null;
   public $Label38 = null;
   public $mgt_nota_fiscal_complemento_entrega = null;
   public $Label45 = null;
   public $mgt_nota_fiscal_endereco_entrega = null;
   public $Label37 = null;
   public $mgt_nota_fiscal_opcao_entrega = null;
   public $Label36 = null;
   public $mgt_nota_fiscal_fax = null;
   public $Label35 = null;
   public $mgt_nota_fiscal_fone = null;
   public $Label34 = null;
   public $mgt_nota_fiscal_pais = null;
   public $Label33 = null;
   public $mgt_nota_fiscal_cep = null;
   public $Label32 = null;
   public $mgt_nota_fiscal_estado = null;
   public $Label31 = null;
   public $mgt_nota_fiscal_cidade = null;
   public $Label30 = null;
   public $mgt_nota_fiscal_bairro = null;
   public $Label29 = null;
   public $Label61 = null;
   public $mgt_nota_fiscal_complemento = null;
   public $mgt_nota_fiscal_endereco = null;
   public $Label28 = null;
   public $dados_cliente = null;
   public $mgt_nota_fiscal_outras_despesas = null;
   public $mgt_nota_fiscal_valor_seguro = null;
   public $mgt_nota_fiscal_valor_produtos = null;
   public $mgt_nota_fiscal_valor_icms_sub = null;
   public $mgt_nota_fiscal_base_icms_sub = null;
   public $mgt_nota_fiscal_valor_icms = null;
   public $mgt_nota_fiscal_base_icms = null;
   public $Label5 = null;
   public $Label115 = null;
   public $Label114 = null;
   public $Label113 = null;
   public $Label112 = null;
   public $Label111 = null;
   public $Label110 = null;
   public $mgt_nota_fiscal_vol_numero = null;
   public $mgt_nota_fiscal_transportadora_insc_mun = null;
   public $mgt_nota_fiscal_transportadora_insc_est = null;
   public $Label109 = null;
   public $Label108 = null;
   public $mgt_nota_fiscal_transportadora_cep = null;
   public $mgt_nota_fiscal_transportadora_estado = null;
   public $mgt_nota_fiscal_transportadora_cidade = null;
   public $mgt_nota_fiscal_transportadora_bairro = null;
   public $mgt_nota_fiscal_transportadora_complemento = null;
   public $mgt_nota_fiscal_transportadora_endereco = null;
   public $mgt_nota_fiscal_transportadora_cnpj = null;
   public $mgt_nota_fiscal_transportadora_veiculo_estado = null;
   public $mgt_nota_fiscal_transportadora_veiculo_placa = null;
   public $mgt_nota_fiscal_transportadora_razao_social = null;
   public $Label107 = null;
   public $Label106 = null;
   public $Label105 = null;
   public $Label104 = null;
   public $Label103 = null;
   public $Label102 = null;
   public $Label101 = null;
   public $Label100 = null;
   public $Label99 = null;
   public $Label98 = null;
   public $Label10 = null;
   public $mgt_nota_fiscal_peso_liquido = null;
   public $Label82 = null;
   public $mgt_nota_fiscal_peso_bruto = null;
   public $Label81 = null;
   public $mgt_nota_fiscal_marca = null;
   public $Label80 = null;
   public $mgt_nota_fiscal_especie = null;
   public $Label79 = null;
   public $mgt_nota_fiscal_qtde = null;
   public $Label78 = null;
   public $mgt_nota_fiscal_revenda = null;
   public $mgt_nota_fiscal_consumo = null;
   public $mgt_nota_fiscal_zerar_base_icms = null;
   public $mgt_nota_fiscal_valor_total = null;
   public $Label9 = null;
   public $mgt_nota_fiscal_valor_ipi = null;
   public $Label8 = null;
   public $mgt_nota_fiscal_valor_frete = null;
   public $Label7 = null;
   public $mgt_nota_fiscal_base_aliquota_icms_reduzida = null;
   public $Label74 = null;
   public $mgt_nota_fiscal_aliquota_icms = null;
   public $Label73 = null;
   public $mgt_nota_fiscal_transportadora = null;
   public $Label48 = null;
   public $mgt_nota_fiscal_tipo_transporte = null;
   public $Label70 = null;
   public $mgt_nota_fiscal_pagamento_frete = null;
   public $Label72 = null;
   public $mgt_nota_fiscal_observacao_adicional_1 = null;
   public $mgt_nota_fiscal_observacao_adicional_2 = null;
   public $mgt_nota_fiscal_observacao_adicional_3 = null;
   public $mgt_nota_fiscal_observacao_adicional_4 = null;
   public $mgt_nota_fiscal_observacao_adicional_5 = null;
   public $mgt_nota_fiscal_observacao_adicional_6 = null;
   public $mgt_nota_fiscal_observacao_adicional_7 = null;
   public $mgt_nota_fiscal_observacao_adicional_10 = null;
   public $Label96 = null;
   public $Label95 = null;
   public $Label94 = null;
   public $Label93 = null;
   public $Label92 = null;
   public $Label91 = null;
   public $Label90 = null;
   public $Label89 = null;
   public $Label88 = null;
   public $Label87 = null;
   public $Label86 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_7 = null;
   public $Label17 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_8 = null;
   public $Label18 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_9 = null;
   public $Label19 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_10 = null;
   public $Label20 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_11 = null;
   public $Label21 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_12 = null;
   public $Label22 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_6 = null;
   public $Label16 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_5 = null;
   public $Label15 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_4 = null;
   public $Label14 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_3 = null;
   public $Label13 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_2 = null;
   public $Label12 = null;
   public $mgt_nota_fiscal_cliente_condicao_pgto_1 = null;
   public $Label11 = null;
   public $mgt_nota_fiscal_imprime_observacao_nota = null;
   public $Label46 = null;
   public $mgt_nota_fiscal_observacao_faturamento = null;
   public $mgt_nota_fiscal_observacao_nota = null;
   public $Label77 = null;
   public $mgt_nota_fiscal_ordem_compra = null;
   public $Label27 = null;
   public $mgt_nota_fiscal_data_entrega = null;
   public $Label24 = null;
   public $mgt_nota_fiscal_data = null;
   public $Label23 = null;
   public $mgt_nota_fiscal_cliente_desconto = null;
   public $Label25 = null;
   public $mgt_nota_fiscal_emite_lote = null;
   public $Label75 = null;
   public $mgt_nota_fiscal_tipo_faturamento = null;
   public $Label26 = null;
   public $itens_faturamento = null;
   public $mgt_nota_fiscal_inscricao_estadual = null;
   public $mgt_nota_fiscal_inscricao_municipal = null;
   public $mgt_nota_fiscal_razao_social = null;
   public $mgt_nota_fiscal_cliente_nome = null;
   public $mgt_nota_fiscal_cliente_codigo = null;
   public $mgt_nota_fiscal_cliente_numero = null;
   public $mgt_nota_fiscal_faturamento = null;
   public $Label84 = null;
   public $Label83 = null;
   public $Label69 = null;
   public $bt_imprimir = null;
   public $opcoes_faturamento = null;
   public $dados_faturamento = null;
   public $Label63 = null;
   public $Panel13 = null;
   public $Label62 = null;
   public $Panel12 = null;
   public $Panel1 = null;
   public $GroupBox4 = null;
   public $GroupBox2 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $Label1 = null;
   public $bt_fechar = null;
   public $area_sistema = null;
    public $Label131 = null;
   function mgt_nota_fiscal_exportacao_local_embJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_exportacao_uf_embJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_exportacao_local_emb.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_valor_produtosJSKeyUp($sender, $params)
   {

?>
      //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfemissaonotaimp.mgt_nota_fiscal_valor_produtos;
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

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_valor_descontoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfemissaonotaimp.mgt_nota_fiscal_valor_desconto;
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

      //*** FINAL - So Valor ***

      //*** INICIO - Totaliza a Nota Fiscal ***
      document.nfemissaonotaimp.mgt_nota_fiscal_valor_total.value = (((parseFloat(document.nfemissaonotaimp.mgt_nota_fiscal_valor_produtos.value) + parseFloat(document.nfemissaonotaimp.mgt_nota_fiscal_valor_frete.value) + parseFloat(document.nfemissaonotaimp.mgt_nota_fiscal_valor_seguro.value) + parseFloat(document.nfemissaonotaimp.mgt_nota_fiscal_outras_despesas.value) + parseFloat(document.nfemissaonotaimp.mgt_nota_fiscal_valor_ipi.value)) - parseFloat(document.nfemissaonotaimp.mgt_nota_fiscal_valor_desconto.value))).toFixed(2);
      //*** FINAL - Totaliza a Nota Fiscal ***

<?php

   }

   function mgt_nota_fiscal_outras_despesasJSKeyUp($sender, $params)
   {

?>
      //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfemissaonotaimp.mgt_nota_fiscal_outras_despesas;
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

      //*** FINAL - So Valor ***

      //*** INICIO - Totaliza a Nota Fiscal ***
      document.nfemissaonotaimp.mgt_nota_fiscal_valor_total.value = (((parseFloat(document.nfemissaonotaimp.mgt_nota_fiscal_valor_produtos.value) + parseFloat(document.nfemissaonotaimp.mgt_nota_fiscal_valor_frete.value) + parseFloat(document.nfemissaonotaimp.mgt_nota_fiscal_valor_seguro.value) + parseFloat(document.nfemissaonotaimp.mgt_nota_fiscal_outras_despesas.value) + parseFloat(document.nfemissaonotaimp.mgt_nota_fiscal_valor_ipi.value)) - parseFloat(document.nfemissaonotaimp.mgt_nota_fiscal_valor_desconto.value))).toFixed(2);
      //*** FINAL - Totaliza a Nota Fiscal ***

<?php

   }

   function mgt_apenas_registraJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfemissaonotaimp.bt_imprimir.focus();
        return false;
      }

<?php

   }

   function mgt_apenas_registraJSClick($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if(document.nfemissaonotaimp.hd_apenas_registra.value == 0)
      {
         document.nfemissaonotaimp.hd_apenas_registra.value = 1;
      }
      else
      {
         document.nfemissaonotaimp.hd_apenas_registra.value = 0;
      }

<?php

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

      if($this->hd_nota_fiscal_nao_imprimir->Value <> 0)
      {
         $tipo_emissao = '2';
      }
      else
      {
         $tipo_emissao = '1';
      }

      //*** Obtem o Numero da Nota Fiscal Eletronica ***
      $mgt_numero_nfe = $this->mgt_nota_fiscal_numero->Text;

      //******************************************************************
      //*** INICIO - Gerando o Envio de Lote da Nota Fiscal Eletronica ***
      //******************************************************************

      //***********************************************************
      //*** INICIO - Validando o XML (Schema enviNFe_v2.00.xsd) ***
      //***********************************************************

      //*** Fecha a Tela de Confirmacao ***
      $this->confirmacao->Top = 825;
      $this->confirmacao->IsVisible = false;
      $this->hd_bt_sim_clicado->Value = 0;

      //*** Verifica a Validacao do Schema ***
      $validacao = validaXML('nfe/saida/enviNFe_' . trim($mgt_numero_nfe) . '_sign.xml', 'validadores/enviNFe_v2.00.xsd');

      if($validacao["status"] == '1')
      {
         //*** INICIO - Se Conecta com o Servidor e Envia o XML ***

         //*** Inicia a Conexao com o Servidor WSDL ***

         if($tipo_ambiente == 1)
         {
            $servidor_wsdl = 'https://nfe.fazenda.sp.gov.br/nfeweb/services/nferecepcao2.asmx';
         }
         else
         {
            $servidor_wsdl = 'https://homologacao.nfe.fazenda.sp.gov.br/nfeweb/services/nferecepcao2.asmx';
         }

         if(substr(trim($_SERVER['SystemRoot']), 0, 1) == 'C')
         {
            $certificado = trim($_SESSION['login_caminho_base']) . "certificados\\nfe.pem";
         }
         else
         {
            $certificado = trim($_SESSION['login_caminho_base']) . "certificados/nfe.pem";
         }

         //***********************************
         //*** INICIO - Arquivo de Retorno ***
         //***********************************

         //*** INICIO - Se Conecta com o Servidor e Envia o XML ***

         //*** Inicia a Conexao com o Servidor WSDL ***

         if($tipo_ambiente == 1)
         {
            $servidor_wsdl = 'https://nfe.fazenda.sp.gov.br/nfeweb/services/nferetrecepcao2.asmx';
         }
         else
         {
            $servidor_wsdl = 'https://homologacao.nfe.fazenda.sp.gov.br/nfeweb/services/nferetrecepcao2.asmx';
         }

         if(substr(trim($_SERVER['SystemRoot']), 0, 1) == 'C')
         {
            $certificado = trim($_SESSION['login_caminho_base']) . "certificados\\nfe.pem";
         }
         else
         {
            $certificado = trim($_SESSION['login_caminho_base']) . "certificados/nfe.pem";
         }

         //*** Caso haja erros utilizar rotina abaixo ***
         //print_r($ler_retorno_nferet_xml);

         $listagem_erros = 'XML GERADO PARA IMPORTACAO!!!\n\n\n\n';
         $listagem_erros .= "Referente a NF-e: " . trim($mgt_numero_nfe) . '\n\n';
         $listagem_erros .= 'Acesse o emissor de NF-e, importe o XML e efetue a transmissao.\n\n';
         echo "<script language=\"JavaScript\">alert('#2: " . $listagem_erros . "');</script>";
         $this->confirmacao->Top = 825;
         $this->confirmacao->IsVisible = false;
         $this->hd_bt_sim_clicado->Value = 0;

         //*** INICIO - Prepara a Geracao do Arquivo de Envio para o Cliente ***

         copy('nfe/saida/enviNFe_' . trim($mgt_numero_nfe) . '_sign.xml', 'swap/swap_NFe_' . trim($mgt_numero_nfe) . '.xml');

         //*** Retira as itens desnecessarios para a geracao ***

         //*** Le a Nota Fiscal Eletronica ***
         $nome_arquivo_cliente = 'swap/swap_NFe_' . trim($mgt_numero_nfe) . '.xml';
         $arquivo_cliente = fopen($nome_arquivo_cliente, 'r');
         $conteudo_nf_cliente = fread($arquivo_cliente, filesize($nome_arquivo_cliente));
         fclose($arquivo_cliente);

         $posicao_inicial = strpos($conteudo_nf_cliente, '<NFe');
         $posicao_final = strpos($conteudo_nf_cliente, '</NFe>');
         $tamanho_total = strlen($conteudo_nf_cliente);

         $conteudo_nf_gravar = trim(substr($conteudo_nf_cliente, $posicao_inicial, (($posicao_final - $posicao_inicial) + 6)));

         //*** Gera a Linha de Retorno para Importacao ***

         $chave_acesso_nro = chave_acesso('35', $cnpj_padrao, $mgt_numero_nfe, $tipo_emissao, $serie_nfe);
         $chave_acesso_nro = trim($chave_acesso_nro);

         $conteudo_ret_gravar = '<protNFe versao="2.00" xmlns="http://www.portalfiscal.inf.br/nfe">';
         $conteudo_ret_gravar = $conteudo_ret_gravar . '<infProt><tpAmb>' . trim($tipo_ambiente) . '</tpAmb>';
         $conteudo_ret_gravar = $conteudo_ret_gravar . '<verAplic>SP_NFE_PL_006h</verAplic>';
         $conteudo_ret_gravar = $conteudo_ret_gravar . '<chNFe>' . trim($chave_acesso_nro) . '</chNFe>';
         $conteudo_ret_gravar = $conteudo_ret_gravar . '<dhRecbto>' . trim(date("Y-m-d", time())) . 'T' . trim(date("H:i:s", time())) . '</dhRecbto>';
         $conteudo_ret_gravar = $conteudo_ret_gravar . '<nProt>000000000000000</nProt>';
         $conteudo_ret_gravar = $conteudo_ret_gravar . '<digVal>xxxxxxxxxxxxxxxxxxxxxxxxxxxx</digVal>';
         $conteudo_ret_gravar = $conteudo_ret_gravar . '<cStat>999</cStat>';
         $conteudo_ret_gravar = $conteudo_ret_gravar . '<xMotivo>Em Digitacao</xMotivo>';
         $conteudo_ret_gravar = $conteudo_ret_gravar . '</infProt></protNFe>';

         //*** Grava o Arquivo de Envio para o Cliente ***
         $nome_arquivo_cliente = 'nfe/entregar_cliente/NFe_' . trim($mgt_numero_nfe) . '.xml';
         $arquivo_cliente = fopen($nome_arquivo_cliente, 'w');
         fwrite($arquivo_cliente, '<?xml version="1.0" encoding="UTF-8"?><nfeProc xmlns="http://www.portalfiscal.inf.br/nfe" versao="2.00">' . trim($conteudo_nf_gravar) . trim($conteudo_ret_gravar) . '</nfeProc>');
         fclose($arquivo_cliente);

         //*** FINAL - Prepara a Geracao do Arquivo de Envio para o Cliente ***

         //*********************************************
         //*** INICIO - Grava Nota no Banco de Dados ***
         //*********************************************

         //*** Insere a Nota Fiscal ***

         $Comando_SQL = "insert into mgt_notas_fiscais(";
         $Comando_SQL .= "mgt_nota_fiscal_finalidade, ";
         $Comando_SQL .= "mgt_nota_fiscal_numero, ";
         $Comando_SQL .= "mgt_nota_fiscal_faturamento, ";
         $Comando_SQL .= "mgt_nota_fiscal_pedido, ";
         $Comando_SQL .= "mgt_nota_fiscal_cfop, ";
         $Comando_SQL .= "mgt_nota_fiscal_cfop_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_tipo_nota, ";
         $Comando_SQL .= "mgt_nota_fiscal_natureza_operacao, ";
         $Comando_SQL .= "mgt_nota_fiscal_natureza_operacao_imp, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_numero, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_codigo, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_nome, ";
         $Comando_SQL .= "mgt_nota_fiscal_razao_social, ";
         $Comando_SQL .= "mgt_nota_fiscal_inscricao_municipal, ";
         $Comando_SQL .= "mgt_nota_fiscal_inscricao_estadual, ";
         $Comando_SQL .= "mgt_nota_fiscal_endereco, ";
         $Comando_SQL .= "mgt_nota_fiscal_complemento, ";
         $Comando_SQL .= "mgt_nota_fiscal_bairro, ";
         $Comando_SQL .= "mgt_nota_fiscal_cidade, ";
         $Comando_SQL .= "mgt_nota_fiscal_estado, ";
         $Comando_SQL .= "mgt_nota_fiscal_cep, ";
         $Comando_SQL .= "mgt_nota_fiscal_pais, ";
         $Comando_SQL .= "mgt_nota_fiscal_fone, ";
         $Comando_SQL .= "mgt_nota_fiscal_fax, ";
         $Comando_SQL .= "mgt_nota_fiscal_contato, ";
         $Comando_SQL .= "mgt_nota_fiscal_ddd, ";
         $Comando_SQL .= "mgt_nota_fiscal_fone_comercial, ";
         $Comando_SQL .= "mgt_nota_fiscal_fone_celular, ";
         $Comando_SQL .= "mgt_nota_fiscal_fone_fax, ";
         $Comando_SQL .= "mgt_nota_fiscal_email, ";
         $Comando_SQL .= "mgt_nota_fiscal_site, ";
         $Comando_SQL .= "mgt_nota_fiscal_endereco_cobranca, ";
         $Comando_SQL .= "mgt_nota_fiscal_complemento_cobranca, ";
         $Comando_SQL .= "mgt_nota_fiscal_bairro_cobranca, ";
         $Comando_SQL .= "mgt_nota_fiscal_cidade_cobranca, ";
         $Comando_SQL .= "mgt_nota_fiscal_estado_cobranca, ";
         $Comando_SQL .= "mgt_nota_fiscal_cep_cobranca, ";
         $Comando_SQL .= "mgt_nota_fiscal_pais_cobranca, ";
         $Comando_SQL .= "mgt_nota_fiscal_opcao_cobranca, ";
         $Comando_SQL .= "mgt_nota_fiscal_fone_cobranca, ";
         $Comando_SQL .= "mgt_nota_fiscal_fax_cobranca, ";
         $Comando_SQL .= "mgt_nota_fiscal_endereco_entrega, ";
         $Comando_SQL .= "mgt_nota_fiscal_complemento_entrega, ";
         $Comando_SQL .= "mgt_nota_fiscal_bairro_entrega, ";
         $Comando_SQL .= "mgt_nota_fiscal_cidade_entrega, ";
         $Comando_SQL .= "mgt_nota_fiscal_estado_entrega, ";
         $Comando_SQL .= "mgt_nota_fiscal_cep_entrega, ";
         $Comando_SQL .= "mgt_nota_fiscal_pais_entrega, ";
         $Comando_SQL .= "mgt_nota_fiscal_opcao_entrega, ";
         $Comando_SQL .= "mgt_nota_fiscal_fone_entrega, ";
         $Comando_SQL .= "mgt_nota_fiscal_fax_entrega, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_desconto, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_tipo_faturamento, ";
         $Comando_SQL .= "mgt_nota_fiscal_tipo_transporte, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora, ";
         $Comando_SQL .= "mgt_nota_fiscal_valor_pedido, ";
         $Comando_SQL .= "mgt_nota_fiscal_valor_desconto, ";
         $Comando_SQL .= "mgt_nota_fiscal_valor_frete, ";
         $Comando_SQL .= "mgt_nota_fiscal_valor_ipi, ";
         $Comando_SQL .= "mgt_nota_fiscal_valor_total, ";
         $Comando_SQL .= "mgt_nota_fiscal_observacao_nota, ";
         $Comando_SQL .= "mgt_nota_fiscal_observacao_faturamento, ";
         $Comando_SQL .= "mgt_nota_fiscal_imprime_observacao_nota, ";
         $Comando_SQL .= "mgt_nota_fiscal_emite_lote, ";
         $Comando_SQL .= "mgt_nota_fiscal_pagamento_frete, ";
         $Comando_SQL .= "mgt_nota_fiscal_aliquota_icms, ";
         $Comando_SQL .= "mgt_nota_fiscal_base_aliquota_icms_reduzida, ";
         $Comando_SQL .= "mgt_nota_fiscal_qtde, ";
         $Comando_SQL .= "mgt_nota_fiscal_especie, ";
         $Comando_SQL .= "mgt_nota_fiscal_marca, ";
         $Comando_SQL .= "mgt_nota_fiscal_peso_bruto, ";
         $Comando_SQL .= "mgt_nota_fiscal_peso_liquido, ";
         $Comando_SQL .= "mgt_nota_fiscal_revenda, ";
         $Comando_SQL .= "mgt_nota_fiscal_consumo, ";
         $Comando_SQL .= "mgt_nota_fiscal_zerar_base_icms, ";
         $Comando_SQL .= "mgt_nota_fiscal_data, ";
         $Comando_SQL .= "mgt_nota_fiscal_data_entrega, ";
         $Comando_SQL .= "mgt_nota_fiscal_data_emissao, ";
         $Comando_SQL .= "mgt_nota_fiscal_suframa_desconto_icms, ";
         $Comando_SQL .= "mgt_nota_fiscal_suframa_desconto_pis_cofins, ";
         $Comando_SQL .= "mgt_nota_fiscal_suframa, ";
         $Comando_SQL .= "mgt_nota_fiscal_ordem_compra, ";
         $Comando_SQL .= "mgt_nota_fiscal_representante, ";
         $Comando_SQL .= "mgt_nota_fiscal_banco, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_docto_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_docto_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_docto_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_docto_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_docto_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_docto_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_docto_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_docto_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_docto_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_docto_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_docto_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_11, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_docto_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_12, ";
         $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_3, ";
         $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_4, ";
         $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_5, ";
         $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_6, ";
         $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_7, ";
         $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_8, ";
         $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_9, ";
         $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_10, ";
         $Comando_SQL .= "mgt_nota_fiscal_base_icms, ";
         $Comando_SQL .= "mgt_nota_fiscal_valor_icms, ";
         $Comando_SQL .= "mgt_nota_fiscal_valor_seguro, ";
         $Comando_SQL .= "mgt_nota_fiscal_base_icms_sub, ";
         $Comando_SQL .= "mgt_nota_fiscal_valor_icms_sub, ";
         $Comando_SQL .= "mgt_nota_fiscal_valor_produtos, ";
         $Comando_SQL .= "mgt_nota_fiscal_outras_despesas, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora_cnpj, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora_razao_social, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora_endereco, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora_complemento, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora_bairro, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora_cidade, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora_estado, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora_cep, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora_insc_est, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora_insc_mun, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora_veiculo_estado, ";
         $Comando_SQL .= "mgt_nota_fiscal_transportadora_veiculo_placa, ";
         $Comando_SQL .= "mgt_nota_fiscal_descricao_condicao_pgto, ";
         $Comando_SQL .= "mgt_nota_fiscal_exportacao_uf_emb, ";
         $Comando_SQL .= "mgt_nota_fiscal_exportacao_local_emb) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . "PRD" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_numero->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_faturamento->Text . "', ";
         $Comando_SQL .= "'" . $this->hd_numero_pedido->Value . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cfop->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cfop_2->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_tipo_nota->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_natureza_operacao->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_natureza_operacao_imp->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_numero->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_codigo->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_nome->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_razao_social->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_inscricao_municipal->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_inscricao_estadual->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_endereco->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_complemento->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_bairro->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cidade->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_estado->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cep->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_pais->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fax->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_contato->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_ddd->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_comercial->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_celular->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_fax->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_email->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_site->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_endereco_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_complemento_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_bairro_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cidade_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_estado_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cep_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_pais_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_opcao_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fax_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_endereco_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_complemento_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_bairro_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cidade_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_estado_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cep_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_pais_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_opcao_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fax_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_desconto->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_tipo_faturamento->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_tipo_transporte->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_produtos->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_desconto->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_frete->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_ipi->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_total->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_nota->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_faturamento->Text . "', ";

         if($this->hd_nota_fiscal_imprime_observacao_nota->Value == 1)
         {
            $Comando_SQL .= "'S', ";
         }
         else
         {
            $Comando_SQL .= "'N', ";
         }

         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_emite_lote->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_pagamento_frete->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_aliquota_icms->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_base_aliquota_icms_reduzida->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_qtde->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_especie->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_marca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_peso_bruto->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_peso_liquido->Text . "', ";

         if($this->hd_nota_fiscal_revenda->Value == 1)
         {
            $Comando_SQL .= "'S', ";
         }
         else
         {
            $Comando_SQL .= "'N', ";
         }

         if($this->hd_nota_fiscal_consumo->Value == 1)
         {
            $Comando_SQL .= "'S', ";
         }
         else
         {
            $Comando_SQL .= "'N', ";
         }

         if($this->hd_nota_fiscal_zerar_base_icms->Value == 1)
         {
            $Comando_SQL .= "'S', ";
         }
         else
         {
            $Comando_SQL .= "'N', ";
         }

         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data->Text)) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_entrega->Text)) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "', ";

         if(trim($this->mgt_nota_fiscal_suframa->Text) == '')
         {
            $this->mgt_nota_fiscal_suframa_desconto_icms->Text = '0';
            $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text = '0';
         }
         else
         {
            if(trim($this->mgt_nota_fiscal_suframa_desconto_icms->Text) == '')
            {
               $this->mgt_nota_fiscal_suframa_desconto_icms->Text = '0';
            }

            if(trim($this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text) == '')
            {
               $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text = '0';
            }
         }

         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_suframa_desconto_icms->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_suframa->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_ordem_compra->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_representante->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";

         //*** 1 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_1->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_1->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_1->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_1->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_1->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_1->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 2 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_2->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_2->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_2->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_2->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_2->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_2->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 3 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_3->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_3->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_3->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_3->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_3->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_3->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 4 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_4->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_4->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_4->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_4->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_4->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_4->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 5 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_5->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_5->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_5->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_5->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_5->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_5->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 6 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_6->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_6->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_6->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_6->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_6->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_6->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 7 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_7->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_7->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_7->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_7->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_7->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_7->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 8 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_8->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_8->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_8->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_8->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_8->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_8->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 9 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_9->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_9->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_9->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_9->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_9->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_9->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 10 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_10->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_10->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_10->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_10->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_10->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_10->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 11 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_11->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_11->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_11->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_11->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_11->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_11->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 12 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_12->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_12->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_12->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_12->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_12->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_12->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_1->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_2->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_3->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_4->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_5->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_6->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_7->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_8->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_9->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_10->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_base_icms->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_icms->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_seguro->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_base_icms_sub->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_icms_sub->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_produtos->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_outras_despesas->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_cnpj->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_razao_social->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_endereco->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_complemento->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_bairro->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_cidade->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_estado->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_cep->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_insc_est->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_insc_mun->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_veiculo_estado->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_veiculo_placa->Text . "', ";
         $Comando_SQL .= "'" . $this->hd_nota_fiscal_descricao_condicao_pgto->Value . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_exportacao_uf_emb->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_exportacao_local_emb->Text . "') ";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Insere os Produtos da Venda Programada ***

         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->First();

         if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
            {
               $Comando_SQL = "insert into mgt_notas_fiscais_produtos(";
               $Comando_SQL .= "mgt_nota_fiscal_produto_finalidade, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_numero_nota, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_quantidade, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_codigo, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_descricao, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_valor_unitario, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_valor_total, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_valor_ipi, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_lote, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_referencia, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_posicao, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_descricao_detalhada, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_unidade, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_ipi, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_classificacao_fiscal, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_situacao_tributaria, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_ncm) ";
               $Comando_SQL .= "values(";
               $Comando_SQL .= "'" . "PRD" . "', ";
               $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_numero->Text) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_unitario']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_ipi']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_lote']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_referencia']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_posicao']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao_detalhada']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_unidade']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ipi']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_situacao_tributaria']) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']) . "')";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               //*** Seleciona o Produto para Obter o Estoque ***

               $Comando_SQL = "select * from mgt_produtos";
               $Comando_SQL .= " where ";
               $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "'";

               GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
               GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

               //*** Registra o Movimento de Estoque ***

               if($_SESSION['login_estoque'] == "S")
               {
                  $qtde_atual = 0;
                  $qtde_anterior = 0;
                  $qtde_informada = 0;

                  $qtde_anterior = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'];
                  $qtde_informada = trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade']);

                  if(trim($this->mgt_nota_fiscal_tipo_nota->ItemIndex) == '0')
                  {
                     $qtde_atual = $qtde_anterior + $qtde_informada;
                  }
                  else
                  {
                     $qtde_atual = $qtde_anterior - $qtde_informada;
                  }

                  $Comando_SQL = "insert into mgt_movtos_estoque(";
                  $Comando_SQL .= "mgt_movto_produto_codigo, ";
                  $Comando_SQL .= "mgt_movto_produto_codigo_interno, ";
                  $Comando_SQL .= "mgt_movto_produto_titulo, ";
                  $Comando_SQL .= "mgt_movto_tipo, ";
                  $Comando_SQL .= "mgt_movto_data, ";
                  $Comando_SQL .= "mgt_movto_qtde_anterior, ";
                  $Comando_SQL .= "mgt_movto_qtde_informada, ";
                  $Comando_SQL .= "mgt_movto_qtde_atual, ";
                  $Comando_SQL .= "mgt_movto_nota, ";
                  $Comando_SQL .= "mgt_movto_nro_entrada_saida) ";
                  $Comando_SQL .= "values(";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "',";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_referencia']) . "',";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao']) . "',";

                  if(trim($this->mgt_nota_fiscal_tipo_nota->ItemIndex) == '0')
                  {
                     $Comando_SQL .= "'" . "1" . "',";
                  }
                  else
                  {
                     $Comando_SQL .= "'" . "2" . "',";
                  }

                  $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
                  $Comando_SQL .= "'" . $qtde_anterior . "',";
                  $Comando_SQL .= "'" . $qtde_informada . "',";
                  $Comando_SQL .= "'" . $qtde_atual . "',";
                  $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_numero->Text) . "',";
                  $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_faturamento->Text) . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();

                  //*** Atualiza o Estoque no Cadastro do Produto ***

                  $Comando_SQL = "update mgt_produtos set ";
                  $Comando_SQL .= "mgt_produto_estoque_atual = '" . $qtde_atual . "' ";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "'";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
               GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Next();
            }
         }

         //*** Atualiza o Numero da Ultima Nota Fiscal ***

         $Comando_SQL = "update mgt_numero_nota_anterior set ";
         $Comando_SQL .= "mgt_numero_nota_anterior_data = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "',";
         $Comando_SQL .= "mgt_numero_nota_anterior_numero = '" . trim($this->mgt_nota_fiscal_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Altera o Status do Pedido de Faturamento ***

         $Comando_SQL = "update mgt_faturamentos set ";
         $Comando_SQL .= "mgt_faturamento_status = 'Faturado' ";
         $Comando_SQL .= "Where mgt_faturamento_numero = '" . trim($this->mgt_nota_fiscal_faturamento->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Altera os Dados de Compras do Cliente ***

         $Comando_SQL = "update mgt_clientes set ";
         $Comando_SQL .= "mgt_cliente_data_ultima_compra = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "', ";
         $Comando_SQL .= "mgt_cliente_ultimo_valor = '" . $this->mgt_nota_fiscal_valor_produtos->Text . "' ";
         $Comando_SQL .= "Where mgt_cliente_numero = '" . trim($this->mgt_nota_fiscal_cliente_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Limpa os Campos para o Proximo Faturamento ***

         $this->limpa_campos();

         $this->confirmacao->Top = 825;
         $this->confirmacao->IsVisible = false;
         $this->hd_bt_sim_clicado->Value = 0;

         //********************************************
         //*** FINAL - Grava Nota no Banco de Dados ***
         //********************************************

         //*** INICIO - Apaga os Arquivos Enviados ***

         copy('nfe/saida/enviNFe_' . trim($mgt_numero_nfe) . '_sign.xml', 'nfe/enviado/NFe_' . trim($chNFe) . '_R' . $nro_recebimento . '_P' . $nProt . '.xml');

         if(file_exists('swap/swap_NFe_' . trim($mgt_numero_nfe) . '.xml'))
         {
            unlink('swap/swap_NFe_' . trim($mgt_numero_nfe) . '.xml');
         }

         if(file_exists('nfe/entrada/enviNFe_' . trim($mgt_numero_nfe) . '.xml'))
         {
            unlink('nfe/entrada/enviNFe_' . trim($mgt_numero_nfe) . '.xml');
         }

         if(file_exists('nfe/saida/enviNFe_' . trim($mgt_numero_nfe) . '_sign.xml'))
         {
            unlink('nfe/saida/enviNFe_' . trim($mgt_numero_nfe) . '_sign.xml');
         }

         //*** FINAL - Apaga os Arquivos Enviados ***

         //*** Fecha a Janela ***

         redirect('nf_emissao_nota.php');

         //********************************
         //*** FINAL - Validacao da NFe ***
         //********************************

         //**********************************
         //*** FINAL - Arquivo de Retorno ***
         //**********************************

         //*** FINAL - Se Conecta com o Servidor e Envia o XML ***
      }
      else
      {
         $listagem_erros = trim($validacao["error"]);
         $exibe_erro = str_replace("'", "", $exibe_erro);
         $exibe_erro = str_replace('"', '', $exibe_erro);

         $this->confirmacao->Top = 825;
         $this->confirmacao->IsVisible = false;
         $this->hd_bt_sim_clicado->Value = 0;

         if(file_exists('swap/swap_NFe_' . trim($mgt_numero_nfe) . '.xml'))
         {
            unlink('swap/swap_NFe_' . trim($mgt_numero_nfe) . '.xml');
         }

         if(file_exists('nfe/entrada/enviNFe_' . trim($mgt_numero_nfe) . '.xml'))
         {
            unlink('nfe/entrada/enviNFe_' . trim($mgt_numero_nfe) . '.xml');
         }

         if(file_exists('nfe/saida/enviNFe_' . trim($mgt_numero_nfe) . '_sign.xml'))
         {
            unlink('nfe/saida/enviNFe_' . trim($mgt_numero_nfe) . '_sign.xml');
         }

         echo "<script language=\"JavaScript\">alert('#8: " . $listagem_erros . "');</script>";
      }

      //*****************************************************************
      //*** FINAL - Gerando o Envio de Lote da Nota Fiscal Eletronica ***
      //*****************************************************************
   }
   
   public function gerar_xml()
   {
      //****************************************
      //*** INICIO - Gera o XML para o Envio ***
      //****************************************

      //*** INICIO - Obtem o Numero da Nota Fiscal Eletronica ***

      $mgt_numero_nfe = $this->mgt_nota_fiscal_numero->Text;

      //*** Apaga os Arquivos ja gerados ***

      if(file_exists('nfe/entrada/enviNFe_' . trim($mgt_numero_nfe) . '.xml'))
      {
         unlink('nfe/entrada/enviNFe_' . trim($mgt_numero_nfe) . '.xml');
      }

      if(file_exists('nfe/saida/enviNFe_' . trim($mgt_numero_nfe) . '_sign.xml'))
      {
         unlink('nfe/saida/enviNFe_' . trim($mgt_numero_nfe) . '_sign.xml');
      }

      //*** FINAL - Obtem o Numero da Nota Fiscal Eletronica ***

      //Declaracao de Variaveis
      $tipo_ambiente = $_SESSION['login_nfe_ambiente'];// 1 - Producao || 2 - Homologacao
      $cnpj_padrao = completa_zeros_retira_caracter($_SESSION['login_cnpj'], 14);
      $serie_nfe = $_SESSION['login_nfe_serie'];// Serie da Nota Fiscal

      //*** versao do encoding xml ***
      $geraDom = new DOMDocument('1.0', 'UTF-8');

      //*** retirar os espacos em branco ***
      $geraDom->preserveWhiteSpace = false;
      //*** gerar o codigo ***
      $geraDom->formatOutput = false;// Se True Prevalece a Formatacao com Estrutura (Pulando Linha e Espacos).

      //*** criando o no principal (Raiz) ***
      //*** Cabeca do XML ***

      $ap01 = $geraDom->createElement('enviNFe');
      //*** Adiciona Atributo AP02 ***
      $ap01->setAttribute('xmlns', 'http://www.portalfiscal.inf.br/nfe');
      $ap01->setAttribute('versao', '2.00');

      //*** Criando os Itens Secundarios (Nos) ***
      //*** Cabeca da Nota ***
      $ap03 = $geraDom->createElement('idLote', trim($mgt_numero_nfe));
      $ap04 = $geraDom->createElement('NFe');

      //*** Dados da Nota-Fiscal para o XML ***

      //*** Corpo da Nota ***

      if($this->hd_nota_fiscal_nao_imprimir->Value <> 0)
      {
         $tipo_emissao = '2';
      }
      else
      {
         $tipo_emissao = '1';
      }

      $chave_acesso_nro = chave_acesso('35', $cnpj_padrao, $mgt_numero_nfe, $tipo_emissao, $serie_nfe);
      $chave_acesso_nro = trim($chave_acesso_nro);

      $digito_chave_acesso_nro = substr($chave_acesso_nro, (strlen($chave_acesso_nro) - 1), 1);
      $digito_chave_acesso_nro = trim($digito_chave_acesso_nro);

      $a01 = $geraDom->createElement('infNFe');
      $a01->setAttribute('versao', '2.00');//*** A02 ***
      $a01->setAttribute('Id', 'NFe' . $chave_acesso_nro);//*** A03 ***

      $b01 = $geraDom->createElement('ide');
      $b02 = $geraDom->createElement('cUF', '35');
      $b03 = $geraDom->createElement('cNF', codigo_numerico($mgt_numero_nfe));
      $b04 = $geraDom->createElement('natOp', retira_acentos(strtoupper($this->mgt_nota_fiscal_natureza_operacao_imp->Text), 0));

      if(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '1')
      {
         $b05 = $geraDom->createElement('indPag', '0');
      }
      elseif(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '0')
      {
         $b05 = $geraDom->createElement('indPag', '1');
      }
      else
      {
         $b05 = $geraDom->createElement('indPag', '2');
      }

      $b06 = $geraDom->createElement('mod', '55');
      $b07 = $geraDom->createElement('serie', $serie_nfe);
      $b08 = $geraDom->createElement('nNF', $mgt_numero_nfe);
      $b09 = $geraDom->createElement('dEmi', trim(date("Y-m-d", time())));

      if((trim($this->mgt_nota_fiscal_data_entrega->Text) <> '')and(trim($this->mgt_nota_fiscal_data_entrega->Text) <> '00/00/0000'))
      {
         $b10 = $geraDom->createElement('dSaiEnt', inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_entrega->Text)));
         $b10a = $geraDom->createElement('hSaiEnt', trim(date("H:i:s", time())));
      }
      else
      {
         $this->mgt_nota_fiscal_data_entrega->Text = '00/00/0000';
      }

      $b11 = $geraDom->createElement('tpNF', trim($this->mgt_nota_fiscal_tipo_nota->ItemIndex));//*** 1 - Nota de Saida || 0 - Nota de Entrada ***

      $b12 = $geraDom->createElement('cMunFG', trim($_SESSION['login_cod_cidade']));
      $b21 = $geraDom->createElement('tpImp', '1');
      $b22 = $geraDom->createElement('tpEmis', trim($tipo_emissao));
      $b23 = $geraDom->createElement('cDV', $digito_chave_acesso_nro);
      $b24 = $geraDom->createElement('tpAmb', $tipo_ambiente);
      $b25 = $geraDom->createElement('finNFe', '1');
      $b26 = $geraDom->createElement('procEmi', '0');
      $b27 = $geraDom->createElement('verProc', 'MGTEXV2K77');

      if($this->hd_nota_fiscal_nao_imprimir->Value <> 0)
      {
         $b28 = $geraDom->createElement('dhCont', trim(date("Y-m-d", time())) . 'T' . trim(date("H:i:s", time())));
         $b29 = $geraDom->createElement('xJust', 'NAO FOI POSSIVEL ESTABELECER CONEXAO A SEFAZ');
      }

      //*** Emissor da Nota Fiscal ***
      $c01 = $geraDom->createElement('emit');
      $c02 = $geraDom->createElement('CNPJ', $cnpj_padrao);
      $c03 = $geraDom->createElement('xNome', retira_acentos(strtoupper($_SESSION['login_razao']), 0));
      $c04 = $geraDom->createElement('xFant', retira_acentos(strtoupper($_SESSION['login_empresa']), 0));

      //*** Endereco do Emissor da Nota Fiscal ***
      $c05 = $geraDom->createElement('enderEmit');
      $c06 = $geraDom->createElement('xLgr', retira_acentos(strtoupper($_SESSION['login_endereco']), 0));
      $c07 = $geraDom->createElement('nro', retira_acentos(strtoupper($_SESSION['login_nro']), 0));
      //$c08 = $geraDom->createElement('xCpl', ' ');
      $c09 = $geraDom->createElement('xBairro', retira_acentos(strtoupper($_SESSION['login_bairro']), 0));
      $c10 = $geraDom->createElement('cMun', retira_acentos(strtoupper($_SESSION['login_cod_cidade']), 0));
      $c11 = $geraDom->createElement('xMun', retira_acentos(strtoupper($_SESSION['login_cidade']), 0));
      $c12 = $geraDom->createElement('UF', retira_acentos(strtoupper($_SESSION['login_estado']), 0));
      $c13 = $geraDom->createElement('CEP', retira_acentos_ponto_traco_barra(strtoupper($_SESSION['login_cep']), 0));
      $c14 = $geraDom->createElement('cPais', retira_acentos(strtoupper($_SESSION['login_cod_pais']), 0));
      $c15 = $geraDom->createElement('xPais', retira_acentos(strtoupper($_SESSION['login_pais']), 0));
      $c16 = $geraDom->createElement('fone', retira_acentos_ponto_traco_barra(strtoupper($_SESSION['login_fone']), 0));
      $c17 = $geraDom->createElement('IE', retira_acentos_ponto_traco_barra(strtoupper($_SESSION['login_ie']), 0));
      $c19a = $geraDom->createElement('CRT', retira_acentos_ponto_traco_barra(strtoupper($_SESSION['login_nfe_regime']), 0));// 1–Simples Nacional; 2–Simples Nacional – excesso de sublimite de receita bruta; 3–Regime Normal. (v2.0).

      //*** Destinatario da Nota Fiscal ***
      $e01 = $geraDom->createElement('dest');

      $cliente_codigo = $this->mgt_nota_fiscal_cliente_codigo->Text;

      if(municipios_ibge($this->mgt_nota_fiscal_estado->Text, $this->mgt_nota_fiscal_cidade->Text) <> '9999999')
      {
         if(trim(strtoupper($this->hd_tipo_codigo->Value)) == 'CPF')
         {
            $e02 = $geraDom->createElement('CPF', completa_zeros_retira_caracter($cliente_codigo, 11));
            $cnpj_cliente = completa_zeros_retira_caracter($cliente_codigo, 11);
         }
         else
         {
            $e02 = $geraDom->createElement('CNPJ', completa_zeros_retira_caracter($cliente_codigo, 14));
            $cnpj_cliente = completa_zeros_retira_caracter($cliente_codigo, 14);
         }
      }
      else
      {
         $e02 = $geraDom->createElement('CNPJ', '');
         $cnpj_cliente = completa_zeros_retira_caracter($cliente_codigo, 14);
      }

      $e04 = $geraDom->createElement('xNome', retira_acentos($this->mgt_nota_fiscal_razao_social->Text, 60));

      //*** Endereco do Destinatario da Nota Fiscal ***
      $email_cliente = strtolower($this->mgt_nota_fiscal_email->Text);
      $email_cliente = trim($email_cliente);

      $e05 = $geraDom->createElement('enderDest');
      $e06 = $geraDom->createElement('xLgr', obtem_numero_antes($this->mgt_nota_fiscal_endereco->Text));
      $e07 = $geraDom->createElement('nro', obtem_numero_depois($this->mgt_nota_fiscal_endereco->Text));

      if(trim(retira_acentos($this->mgt_nota_fiscal_complemento->Text, 60)) <> '')
      {
         $e08 = $geraDom->createElement('xCpl', retira_acentos($this->mgt_nota_fiscal_complemento->Text, 60));
      }

      $e09 = $geraDom->createElement('xBairro', retira_acentos($this->mgt_nota_fiscal_bairro->Text, 60));
      $e10 = $geraDom->createElement('cMun', municipios_ibge($this->mgt_nota_fiscal_estado->Text, $this->mgt_nota_fiscal_cidade->Text));

      if(municipios_ibge($this->mgt_nota_fiscal_estado->Text, $this->mgt_nota_fiscal_cidade->Text) <> '9999999')
      {
         $e11 = $geraDom->createElement('xMun', retira_acentos($this->mgt_nota_fiscal_cidade->Text, 60));
      }
      else
      {
         $e11 = $geraDom->createElement('xMun', 'Exterior');
      }

      if(trim($this->mgt_nota_fiscal_estado->Text) == '--')
      {
         $e12 = $geraDom->createElement('UF', 'EX');
      }
      else
      {
         $e12 = $geraDom->createElement('UF', retira_acentos($this->mgt_nota_fiscal_estado->Text, 0));
      }

      if(municipios_ibge($this->mgt_nota_fiscal_estado->Text, $this->mgt_nota_fiscal_cidade->Text) <> '9999999')
      {
         $e13 = $geraDom->createElement('CEP', prepara_cep($this->mgt_nota_fiscal_cep->Text));
      }
      else
      {
         $e13 = $geraDom->createElement('CEP', '99999999');
      }

      $e14 = $geraDom->createElement('cPais', paises_ibge($this->mgt_nota_fiscal_pais->Text));
      $e15 = $geraDom->createElement('xPais', retira_acentos($this->mgt_nota_fiscal_pais->Text, 60));
      $e16 = $geraDom->createElement('fone', completa_zeros_retira_caracter(trim($this->mgt_nota_fiscal_ddd->Text) . trim($this->mgt_nota_fiscal_fone_comercial->Text), 10));

      //*** Inscricao Estadual do Destinatario ***

      $uf_ie = trim($this->mgt_nota_fiscal_estado->Text);

      if(trim($uf_ie) == 'AC')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'AL')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'AP')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'AM')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'BA')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'CE')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'DF')
      {
         $tam_ie = 13;
      }
      elseif(trim($uf_ie) == 'ES')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'GO')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'MA')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'MT')
      {
         $tam_ie = 11;
      }
      elseif(trim($uf_ie) == 'MS')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'MG')
      {
         $tam_ie = 13;
      }
      elseif(trim($uf_ie) == 'PA')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'PB')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'PR')
      {
         $tam_ie = 10;
      }
      elseif(trim($uf_ie) == 'PE')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'PI')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'RJ')
      {
         $tam_ie = 8;
      }
      elseif(trim($uf_ie) == 'RN')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'RS')
      {
         $tam_ie = 10;
      }
      elseif(trim($uf_ie) == 'RO')
      {
         $tam_ie = 14;
      }
      elseif(trim($uf_ie) == 'RR')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'SC')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'SP')
      {
         $tam_ie = 12;
      }
      elseif(trim($uf_ie) == 'SE')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'TO')
      {
         $tam_ie = 11;
      }
      else
      {
         $tam_ie = 12;
      }

      $ie_cliente = trim($this->mgt_nota_fiscal_inscricao_estadual->Text);

      if($ie_cliente <> 'ISENTO')
      {
         $ie_cliente = completa_zeros_retira_caracter($this->mgt_nota_fiscal_inscricao_estadual->Text, $tam_ie);
      }

      if(municipios_ibge($this->mgt_nota_fiscal_estado->Text, $this->mgt_nota_fiscal_cidade->Text) <> '9999999')
      {
         $e17 = $geraDom->createElement('IE', $ie_cliente);
      }
      else
      {
         $e17 = $geraDom->createElement('IE', 'ISENTO');
      }

      if(trim($this->mgt_nota_fiscal_email->Text) <> '')
      {
         $e19 = $geraDom->createElement('email', retira_acentos($this->mgt_nota_fiscal_email->Text, 60));
      }

      //*** Gera a Primeira Parte do XML, para poder gerar os Itens dos Produtos ***
      //*** Gravando os Nos ***

      $b01->appendChild($b02);
      $b01->appendChild($b03);
      $b01->appendChild($b04);
      $b01->appendChild($b04);
      $b01->appendChild($b05);
      $b01->appendChild($b06);
      $b01->appendChild($b07);
      $b01->appendChild($b08);
      $b01->appendChild($b09);

      if((trim($this->mgt_nota_fiscal_data_entrega->Text) <> '')and(trim($this->mgt_nota_fiscal_data_entrega->Text) <> '00/00/0000'))
      {
         $b01->appendChild($b10);
         $b01->appendChild($b10a);
      }

      $b01->appendChild($b11);
      $b01->appendChild($b12);
      $b01->appendChild($b21);
      $b01->appendChild($b22);
      $b01->appendChild($b23);
      $b01->appendChild($b24);
      $b01->appendChild($b25);
      $b01->appendChild($b26);
      $b01->appendChild($b27);

      if($this->hd_nota_fiscal_nao_imprimir->Value <> 0)
      {
         $b01->appendChild($b28);
         $b01->appendChild($b29);
      }

      $a01->appendChild($b01);

      $c01->appendChild($c02);
      $c01->appendChild($c03);
      $c01->appendChild($c04);

      $c05->appendChild($c06);
      $c05->appendChild($c07);
      //$c05->appendChild($c08);
      $c05->appendChild($c09);
      $c05->appendChild($c10);
      $c05->appendChild($c11);
      $c05->appendChild($c12);
      $c05->appendChild($c13);
      $c05->appendChild($c14);
      $c05->appendChild($c15);
      $c05->appendChild($c16);
      $c01->appendChild($c05);
      $c01->appendChild($c17);
      $c01->appendChild($c19a);
      $a01->appendChild($c01);

      $e01->appendChild($e02);
      $e01->appendChild($e04);
      $e05->appendChild($e06);
      $e05->appendChild($e07);

      if(trim(retira_acentos($this->mgt_nota_fiscal_complemento->Text, 60)) <> '')
      {
         $e05->appendChild($e08);
      }

      $e05->appendChild($e09);
      $e05->appendChild($e10);
      $e05->appendChild($e11);
      $e05->appendChild($e12);
      $e05->appendChild($e13);
      $e05->appendChild($e14);
      $e05->appendChild($e15);
      $e05->appendChild($e16);
      $e01->appendChild($e05);

      if(strlen($ie_cliente) > 0)
      {
         $e01->appendChild($e17);
      }

      if(trim($this->mgt_nota_fiscal_email->Text) <> '')
      {
         $e01->appendChild($e19);
      }

      $a01->appendChild($e01);

      //*** Zera os Valores Totais ***

      $T_base_ipi = 0;
      $T_valor_ipi = 0;
      $T_base_icms_reduzida = 0;
      $T_base_icms_normal = 0;
      $T_valor_icms_normal = 0;
      $T_valor_icms_reduzida = 0;
      $T_base_icms = 0;
      $T_valor_icms = 0;
      $T_base_icms_st = 0;
      $T_valor_icms_st = 0;
      $T_valor_produtos = 0;
      $T_valor_frete = 0;
      $T_valor_seguro = 0;
      $T_valor_desconto = 0;
      $T_valor_ii = 0;
      $T_valor_ipi = 0;
      $T_valor_pis = 0;
      $T_valor_cofins = 0;
      $T_valor_outros = 0;
      $T_valor_nota = 0;
      $T_produto_volume = 0;
      $T_peso = 0;
	  $T_nota_valor_tributos = 0;

      //*** Obtem os Itens dos Produtos ***

      $nro_item = 0;
      $qtde_item = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->RecordCount;

      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->first();

      while((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) <> 1)
      {
         //*** Soma o Valor Total do Tributos ***
		 $T_nota_valor_tributos = $T_nota_valor_tributos + GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_tributo'];

         //*** Seleciona o Produtos ***
         $Comando_SQL = "select * from mgt_produtos where mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "' order by mgt_produto_codigo";

         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         //*** Seleciona o NCM ***

         if(strlen(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal'])) >= 8)
         {
            $codigo_ncm = trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal']);
         }
         else
         {
            $Comando_SQL = "select * from mgt_classificacoes_fiscais_letras where mgt_classificacao_fiscal_letra_letra = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal']) . "' order by mgt_classificacao_fiscal_letra_ncm";

            GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Letras->Close();
            GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Letras->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Letras->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Letras->EOF) != 1)
            {
               $codigo_ncm = trim(GetConexaoPrincipal()->SQL_MGT_Classificacoes_Fiscais_Letras->Fields['mgt_classificacao_fiscal_letra_ncm']);
            }
            else
            {
               $codigo_ncm = trim(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_ncm']);
            }
         }

         //*** Insere os Itens do Produto ***
         $nro_item = $nro_item + 1;

         $h01 = $geraDom->createElement('det');
         //*** Adiciona Atributo H02 ***
         $h01->setAttribute('nItem', $nro_item);

         //*** Dados do Produto ***
         $i01 = $geraDom->createElement('prod');
         $i02 = $geraDom->createElement('cProd', trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']));

         if(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_codigo_barras'] > 0)
         {
            $i03 = $geraDom->createElement('cEAN', trim(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_codigo_barras']));
         }
         else
         {
            $i03 = $geraDom->createElement('cEAN', '');
         }

         if($this->mgt_nota_fiscal_emite_lote->ItemIndex == 'S')
         {
            $i04 = $geraDom->createElement('xProd', retira_acentos(substr(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao']), 0, 100) . ' - LT:' . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_lote']), 0));
         }
         else
         {
            $i04 = $geraDom->createElement('xProd', retira_acentos(substr(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao']), 0, 119), 0));
         }

         $i05 = $geraDom->createElement('NCM', trim($codigo_ncm));

         if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_situacao_tributaria'] == 10) Or (GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_situacao_tributaria'] == 500) Or (GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_situacao_tributaria'] == 201) Or (GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_situacao_tributaria'] == 202))
         {
            $i08 = $geraDom->createElement('CFOP', Trim($this->mgt_nota_fiscal_cfop_2->Text));
         }
         else
         {
            $i08 = $geraDom->createElement('CFOP', Trim($this->mgt_nota_fiscal_cfop->Text));
         }

         $i09 = $geraDom->createElement('uCom', retira_acentos_ponto_traco(Trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_unidade']), 0));
         $i10 = $geraDom->createElement('qCom', number_format(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade']), 4, '.', ''));
         $i10a = $geraDom->createElement('vUnCom', number_format(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_unitario']), 5, '.', ''));
         $i11 = $geraDom->createElement('vProd', number_format(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total']), 2, '.', ''));

         if(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_codigo_barras'] > 0)
         {
            $i12 = $geraDom->createElement('cEANTrib', trim(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_codigo_barras']));
         }
         else
         {
            $i12 = $geraDom->createElement('cEANTrib', '');
         }

         $i13 = $geraDom->createElement('uTrib', retira_acentos_ponto_traco(Trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_unidade']), 0));
         $i14 = $geraDom->createElement('qTrib', number_format(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade']), 4, '.', ''));
         $i14a = $geraDom->createElement('vUnTrib', number_format(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_unitario']), 5, '.', ''));

         //if(number_format(($this->mgt_nota_fiscal_valor_desconto->Text / $qtde_item), 2, '.', '') > 0)
         //{
         //   $i15 = $geraDom->createElement('vDesc', number_format(($this->mgt_nota_fiscal_valor_desconto->Text / $qtde_item), 2, '.', ''));
         //}

         if(number_format(($this->mgt_nota_fiscal_valor_frete->Text / $qtde_item), 2, '.', '') > 0)
         {
            $i16 = $geraDom->createElement('vFrete', number_format(($this->mgt_nota_fiscal_valor_frete->Text / $qtde_item), 2, '.', ''));
         }

         if(number_format(($this->mgt_nota_fiscal_valor_desconto->Text / $qtde_item), 2, '.', '') > 0)
         {
            $i17 = $geraDom->createElement('vDesc', number_format(($this->mgt_nota_fiscal_valor_desconto->Text / $qtde_item), 2, '.', ''));
         }

         if(number_format(($this->mgt_nota_fiscal_outras_despesas->Text / $qtde_item), 2, '.', '') > 0)
         {
            $i17a = $geraDom->createElement('vOutro', number_format(($this->mgt_nota_fiscal_outras_despesas->Text / $qtde_item), 2, '.', ''));
         }

         $i17b = $geraDom->createElement('indTot', '1');

         $T_valor_produtos = $T_valor_produtos + number_format(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total']), 2, '.', '');

         //$T_valor_produtos = $T_valor_produtos + number_format(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total']), 2, '.', '');
         //$T_valor_desconto = $T_valor_desconto + number_format(($this->mgt_nota_fiscal_valor_desconto->Text / $qtde_item), 4, '.', '');
         $T_valor_frete = $T_valor_frete + number_format(($this->mgt_nota_fiscal_valor_frete->Text / $qtde_item), 4, '.', '');

         $i01->appendChild($i02);
         $i01->appendChild($i03);
         $i01->appendChild($i04);
         $i01->appendChild($i05);
         $i01->appendChild($i08);
         $i01->appendChild($i09);
         $i01->appendChild($i10);
         $i01->appendChild($i10a);
         $i01->appendChild($i11);
         $i01->appendChild($i12);
         $i01->appendChild($i13);
         $i01->appendChild($i14);
         $i01->appendChild($i14a);

         //if(number_format(($this->mgt_nota_fiscal_valor_desconto->Text / $qtde_item), 2, '.', '') > 0)
         //{
         //   $i01->appendChild($i15);
         //}

         if(number_format(($this->mgt_nota_fiscal_valor_frete->Text / $qtde_item), 2, '.', '') > 0)
         {
            $i01->appendChild($i16);
         }

         if(number_format(($this->mgt_nota_fiscal_valor_desconto->Text / $qtde_item), 2, '.', '') > 0)
         {
            $i01->appendChild($i17);
         }

         if(number_format(($this->mgt_nota_fiscal_outras_despesas->Text / $qtde_item), 2, '.', '') > 0)
         {
            $i01->appendChild($i17a);
         }

         $i01->appendChild($i17b);
         $h01->appendChild($i01);

         //*** Dados do Imposto ***

         //*** INICIO - ICMS ***

         $natureza = retira_acentos($this->mgt_nota_fiscal_natureza_operacao_imp->Text, 0);

         if(trim($this->mgt_nota_fiscal_estado->Text) == '--')
         {
            $estado = 'EX';
         }
         else
         {
            $estado = $this->mgt_nota_fiscal_estado->Text;
         }

         if(strtoupper($this->hd_tipo_codigo->Value) == 'CNPJ')
         {
            $pessoa = 'PJ';
         }
         else
         {
            $pessoa = 'PF';
         }

         $situacao_tributaria = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_situacao_tributaria'];
         $classificacao_fiscal = trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal']);

         $valor_total_produto = number_format(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total']), 2, '.', '');

         //$valor_total_produto = number_format(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total'], 2, '.', '');
         $valor_frete = number_format(($this->mgt_nota_fiscal_valor_frete->Text / $qtde_item), 4, '.', '');
         //$valor_desconto = number_format(($this->mgt_nota_fiscal_valor_desconto->Text / $qtde_item), 4, '.', '');
         $produto_volume = 0;
         $peso = number_format((GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_peso'] * GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade']), 3, '.', '');

         $T_produto_volume = $T_produto_volume + $produto_volume;
         $T_peso = $T_peso + $peso;

         $aliquota_icms = $this->mgt_nota_fiscal_aliquota_icms->Text;
         $base_icms_reduzida = 0;
         $base_icms_normal = 0;
         $valor_icms_normal = 0;
         $valor_icms_reduzida = 0;
         $base_icms = 0;
         $valor_icms = 0;
         $base_icms_st = 0;
         $valor_icms_st = 0;

         $base_ipi = number_format(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total']), 2, '.', '');
         $aliquota_ipi = number_format(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ipi']), 2, '.', '');
         $valor_ipi = number_format(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_ipi']), 2, '.', '');

         if((trim($estado) == 'SP')Or(trim($estado) == 'RJ'))
         {
            if(strlen(trim($classificacao_fiscal)) >= 8)
            {
               if($situacao_tributaria == 20)
               {
                  $icms_reducao = true;
               }
               else
               {
                  $icms_reducao = false;
               }
            }
            else
            {
               if($situacao_tributaria == 20)
               {
                  $icms_reducao = true;
               }
               else
               {
                  $icms_reducao = false;
               }
            }
         }
         else
         {
            $icms_reducao = false;
         }

         if((!strpos($natureza, 'REMESSA'))and(!strpos($natureza, 'IMPORTACAO')))
         {
            if((trim($estado) == 'SP')Or(trim($estado) == 'RJ'))
            {
               if(strlen(trim($classificacao_fiscal)) >= 8)
               {
                  if($situacao_tributaria == 20)
                  {
                     $base_icms_reduzida = $base_icms_reduzida + (($valor_total_produto + $valor_frete) - $valor_desconto);
                  }
                  else
                  {
                     if(($this->hd_tipo_codigo->Value == 'CPF')or($this->hd_tipo_codigo->Value == 'RG')or($this->hd_tipo_codigo->Value == 'Outro Docto')or(strtoupper(trim($this->mgt_nota_fiscal_inscricao_estadual->Text)) == 'ISENTO'))
                     {
                        $base_icms_normal = ($base_icms_normal + $valor_ipi) + (($valor_total_produto + $valor_frete) - $valor_desconto);
                     }
                     else
                     {
                        $base_icms_normal = $base_icms_normal + (($valor_total_produto + $valor_frete) - $valor_desconto);
                     }
                  }
               }
               else
               {
                  if($situacao_tributaria == 20)
                  {
                     $base_icms_reduzida = $base_icms_reduzida + (($valor_total_produto + $valor_frete) - $valor_desconto);
                  }
                  else
                  {
                     if(($this->hd_tipo_codigo->Value == 'CPF')or($this->hd_tipo_codigo->Value == 'RG')or($this->hd_tipo_codigo->Value == 'Outro Docto')or(strtoupper(trim($this->mgt_nota_fiscal_inscricao_estadual->Text)) == 'ISENTO'))
                     {
                        $base_icms_normal = ($base_icms_normal + $valor_ipi) + (($valor_total_produto + $valor_frete) - $valor_desconto);
                     }
                     else
                     {
                        $base_icms_normal = $base_icms_normal + (($valor_total_produto + $valor_frete) - $valor_desconto);
                     }
                  }
               }
            }
            else
            {
               if(($this->hd_tipo_codigo->Value == 'CPF')or($this->hd_tipo_codigo->Value == 'RG')or($this->hd_tipo_codigo->Value == 'Outro Docto')or(strtoupper(trim($this->mgt_nota_fiscal_inscricao_estadual->Text)) == 'ISENTO'))
               {
                  $base_icms_normal = ($base_icms_normal + $valor_ipi) + (($valor_total_produto + $valor_frete) - $valor_desconto);

               }
               else
               {
                  $base_icms_normal = $base_icms_normal + (($valor_total_produto + $valor_frete) - $valor_desconto);
               }
            }
         }
         else
         {
            if(($this->hd_tipo_codigo->Value == 'CPF')or($this->hd_tipo_codigo->Value == 'RG')or($this->hd_tipo_codigo->Value == 'Outro Docto')or(strtoupper(trim($this->mgt_nota_fiscal_inscricao_estadual->Text)) == 'ISENTO'))
            {
               $base_icms_normal = ($base_icms_normal + $valor_ipi) + (($valor_total_produto + $valor_frete) - $valor_desconto);
            }
            else
            {
               $base_icms_normal = $base_icms_normal + (($valor_total_produto + $valor_frete) - $valor_desconto);
            }
         }

         if((!strpos($natureza, 'REMESSA'))and(!strpos($natureza, 'IMPORTACAO')))
         {
            if($base_icms_normal > 0)
            {
               if(trim($estado) == 'SP')
               {
                  $valor_icms_normal = (($base_icms_normal * $aliquota_icms) / 100);
               }
               else
               {
                  $valor_icms_normal = (($base_icms_normal * $aliquota_icms) / 100);
               }
            }
         }
         else
         {
            if($base_icms_normal > 0)
            {
               $valor_icms_normal = (($base_icms_normal * $aliquota_icms) / 100);
            }
         }

         if((!strpos($natureza, 'REMESSA'))and(!strpos($natureza, 'IMPORTACAO')))
         {
            if($base_icms_reduzida > 0)
            {
               $valor_icms_reduzida = ((($base_icms_reduzida - (($base_icms_reduzida * number_format(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_reducao_icms'], 2, '.', '')) / 100)) * $aliquota_icms) / 100);
            }
         }
         else
         {
            if($base_icms_reduzida > 0)
            {
               $valor_icms_reduzida = ((($base_icms_reduzida - (($base_icms_reduzida * number_format(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_reducao_icms'], 2, '.', '')) / 100)) * $aliquota_icms) / 100);
            }
         }

         if(strpos($natureza, 'REMESSA'))
         {
            $aliquota_icms = 0;
            $base_icms_reduzida = 0;
            $base_icms_normal = 0;
            $base_icms = 0;
            $valor_icms = 0;
            $valor_icms_normal = 0;
            $valor_icms_reduzida = 0;
         }

         if($aliquota_icms > 0)
         {
            $base_icms_reduzida = ($base_icms_reduzida - (($base_icms_reduzida * number_format(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_reducao_icms'], 2, '.', '')) / 100));
            $base_icms = ($base_icms_normal + $base_icms_reduzida);
            $valor_icms = ($valor_icms_normal + $valor_icms_reduzida);
         }
         else
         {
            $base_icms_reduzida = 0;
            $base_icms = 0;
            $valor_icms = 0;
         }

         $T_base_icms_reduzida = $T_base_icms_reduzida + $base_icms_reduzida;
         $T_base_icms_normal = $T_base_icms_normal + $base_icms_normal;
         $T_valor_icms_normal = $T_valor_icms_normal + $valor_icms_reduzida;
         $T_valor_icms_reduzida = $T_valor_icms_reduzida + $valor_icms_reduzida;

         $m01 = $geraDom->createElement('imposto');
         $n01 = $geraDom->createElement('ICMS');

         $iva = 0;
         $aliquota_interna = 0;
         $base_icms_st = 0;
         $base_icms_st_sem_ipi = 0;
         $valor_icms_st = 0;
         $aliquota_icms_st = 0;

         if(!strpos($natureza, 'REMESSA'))
         {

            if(!$icms_reducao)
            {
               if(($situacao_tributaria == 10) Or ($situacao_tributaria == 110) Or ($situacao_tributaria == 500) Or ($situacao_tributaria == 201) Or ($situacao_tributaria == 202))
               {
                  $Comando_SQL = "select * from mgt_ivas";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_iva_estado = '" . trim($this->mgt_nota_fiscal_estado->Text) . "' and ";
                  $Comando_SQL .= "mgt_iva_ncm = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']) . "'";

                  GetConexaoPrincipal()->SQL_MGT_IVA->Close();
                  GetConexaoPrincipal()->SQL_MGT_IVA->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_MGT_IVA->Open();

                  $iva = 0;
                  $aliquota_interna = $aliquota_icms;
                  $base_icms_st = 0;
                  $base_icms_st_sem_ipi = 0;
                  $valor_icms_st = 0;
                  $aliquota_icms_st = 0;

                  if((GetConexaoPrincipal()->SQL_MGT_IVA->EOF) != 1)
                  {
                     $iva = GetConexaoPrincipal()->SQL_MGT_IVA->Fields['mgt_iva_valor'];
                     $aliquota_interna = trim(GetConexaoPrincipal()->SQL_MGT_IVA->Fields['mgt_iva_aliquota_interna']);
                     $aliquota_icms_st = trim($this->mgt_nota_fiscal_aliquota_icms->Text);
                  }
				  else
                  {
                     $aliquota_interna = trim($this->mgt_nota_fiscal_aliquota_icms->Text);
                     $aliquota_icms_st = trim($this->mgt_nota_fiscal_aliquota_icms->Text);
                  }

                  $vlr_produto_substituicao = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total'] + GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_ipi'];
                  $vlr_produto_substituicao = number_format((($vlr_produto_substituicao * $iva) / 100), 2, '.', '');

                  $base_icms_st = $vlr_produto_substituicao + (GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total'] + GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_ipi']);
                  $base_icms_st_sem_ipi = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total'];

                  $valor_icms_st = number_format(((($base_icms_st * $aliquota_interna) / 100) - (($base_icms_st_sem_ipi * $aliquota_icms_st) / 100)), "2", ".", "");

                  if((trim($_SESSION['login_nfe_regime']) <> '1'))
                  {
                     $n02 = $geraDom->createElement('ICMS10');

					 if($situacao_tributaria == 110)
					 {
                       $n11 = $geraDom->createElement('orig', '1');
					 }
					 else
					 {
                       $n11 = $geraDom->createElement('orig', '0');
				     }

                     $n12 = $geraDom->createElement('CST', '10');
                     $n13 = $geraDom->createElement('modBC', '3');
                     $n15 = $geraDom->createElement('vBC', number_format($base_icms, 2, '.', ''));
                     $n16 = $geraDom->createElement('pICMS', number_format($aliquota_icms, 2, '.', ''));
                     $n17 = $geraDom->createElement('vICMS', number_format($valor_icms, 2, '.', ''));
                     $n18 = $geraDom->createElement('modBCST', '4');
                     $n19 = $geraDom->createElement('pMVAST', number_format($aliquota_interna, 2, '.', ''));
                     $n20 = $geraDom->createElement('pRedBCST', number_format($iva, 2, '.', ''));
                     $n21 = $geraDom->createElement('vBCST', number_format($base_icms_st, 2, '.', ''));
                     $n22 = $geraDom->createElement('pICMSST', number_format($aliquota_interna, 2, '.', ''));
                     $n23 = $geraDom->createElement('vICMSST', number_format($valor_icms_st, 2, '.', ''));

                     $n02->appendChild($n11);
                     $n02->appendChild($n12);
                     $n02->appendChild($n13);
                     $n02->appendChild($n15);
                     $n02->appendChild($n16);
                     $n02->appendChild($n17);
                     $n02->appendChild($n18);
                     $n02->appendChild($n19);
                     $n02->appendChild($n20);
                     $n02->appendChild($n21);
                     $n02->appendChild($n22);
                     $n02->appendChild($n23);
                  }
               }
               elseif($situacao_tributaria == 90)
               {
                  if((trim($_SESSION['login_nfe_regime']) <> '1'))
                  {
                     $n02 = $geraDom->createElement('ICMS40');
                     $n11 = $geraDom->createElement('orig', '0');
                     $n12 = $geraDom->createElement('CST', '50');

                     $n02->appendChild($n11);
                     $n02->appendChild($n12);
                  }
               }
               elseif($situacao_tributaria == 40)
               {
                  if((trim($_SESSION['login_nfe_regime']) <> '1'))
                  {
                     $n02 = $geraDom->createElement('ICMS40');
                     $n11 = $geraDom->createElement('orig', '0');
                     $n12 = $geraDom->createElement('CST', '40');

                     $n02->appendChild($n11);
                     $n02->appendChild($n12);
                  }
               }
               elseif($situacao_tributaria == 41)
               {
                  if((trim($_SESSION['login_nfe_regime']) <> '1'))
                  {
                     $n02 = $geraDom->createElement('ICMS40');
                     $n11 = $geraDom->createElement('orig', '0');
                     $n12 = $geraDom->createElement('CST', '41');

                     $n02->appendChild($n11);
                     $n02->appendChild($n12);
                  }
               }
               elseif($situacao_tributaria == 141)
               {
                  if((trim($_SESSION['login_nfe_regime']) <> '1'))
                  {
                     $n02 = $geraDom->createElement('ICMS40');
                     $n11 = $geraDom->createElement('orig', '1');
                     $n12 = $geraDom->createElement('CST', '41');

                     $n02->appendChild($n11);
                     $n02->appendChild($n12);
                  }
               }
               elseif($situacao_tributaria == 50)
               {
                  if((trim($_SESSION['login_nfe_regime']) <> '1'))
                  {
                     $n02 = $geraDom->createElement('ICMS40');
                     $n11 = $geraDom->createElement('orig', '0');
                     $n12 = $geraDom->createElement('CST', '50');

                     $n02->appendChild($n11);
                     $n02->appendChild($n12);
                  }
               }
               elseif($situacao_tributaria == 51)
               {
                  if((trim($_SESSION['login_nfe_regime']) <> '1'))
                  {
                     $n02 = $geraDom->createElement('ICMS51');
                     $n11 = $geraDom->createElement('orig', '0');
                     $n12 = $geraDom->createElement('CST', '51');
                     $n13 = $geraDom->createElement('modBC', '3');
                     $n14 = $geraDom->createElement('pRedBC', '0.00');
                     $n15 = $geraDom->createElement('vBC', number_format($base_icms, 2, '.', ''));
                     $n16 = $geraDom->createElement('pICMS', number_format($aliquota_icms, 2, '.', ''));
                     $n17 = $geraDom->createElement('vICMS', number_format($valor_icms, 2, '.', ''));

                     $n02->appendChild($n11);
                     $n02->appendChild($n12);
                     $n02->appendChild($n13);
                     $n02->appendChild($n14);
                     $n02->appendChild($n15);
                     $n02->appendChild($n16);
                     $n02->appendChild($n17);
                  }
               }
               elseif($situacao_tributaria == 60)
               {
                  if((trim($_SESSION['login_nfe_regime']) <> '1'))
                  {
                     $n02 = $geraDom->createElement('ICMS60');
                     $n11 = $geraDom->createElement('orig', '0');
                     $n12 = $geraDom->createElement('CST', '60');
                     $n21 = $geraDom->createElement('vBCSTRet', '0');
                     $n23 = $geraDom->createElement('vICMSSTRet', '0');

                     $n02->appendChild($n11);
                     $n02->appendChild($n12);
                     $n02->appendChild($n21);
                     $n02->appendChild($n23);
                  }
               }
               elseif($situacao_tributaria == 100)
               {
                  if((trim($_SESSION['login_nfe_regime']) <> '1'))
                  {
                     $n02 = $geraDom->createElement('ICMS00');
                     $n11 = $geraDom->createElement('orig', '1');
                     $n12 = $geraDom->createElement('CST', '00');
                     $n13 = $geraDom->createElement('modBC', '3');
                     $n15 = $geraDom->createElement('vBC', number_format($base_icms, 2, '.', ''));
                     $n16 = $geraDom->createElement('pICMS', number_format($aliquota_icms, 2, '.', ''));
                     $n17 = $geraDom->createElement('vICMS', number_format($valor_icms, 2, '.', ''));

                     $n02->appendChild($n11);
                     $n02->appendChild($n12);
                     $n02->appendChild($n13);
                     $n02->appendChild($n15);
                     $n02->appendChild($n16);
                     $n02->appendChild($n17);
                  }
               }
               else
               {
                  if((trim($_SESSION['login_nfe_regime']) <> '1'))
                  {
                     $n02 = $geraDom->createElement('ICMS00');
                     $n11 = $geraDom->createElement('orig', '0');
                     $n12 = $geraDom->createElement('CST', '00');
                     $n13 = $geraDom->createElement('modBC', '3');
                     $n15 = $geraDom->createElement('vBC', number_format($base_icms, 2, '.', ''));
                     $n16 = $geraDom->createElement('pICMS', number_format($aliquota_icms, 2, '.', ''));
                     $n17 = $geraDom->createElement('vICMS', number_format($valor_icms, 2, '.', ''));

                     $n02->appendChild($n11);
                     $n02->appendChild($n12);
                     $n02->appendChild($n13);
                     $n02->appendChild($n15);
                     $n02->appendChild($n16);
                     $n02->appendChild($n17);
                  }
               }
            }
            else
            {
               if((trim($_SESSION['login_nfe_regime']) <> '1'))
               {
                  $n02 = $geraDom->createElement('ICMS20');
                  $n11 = $geraDom->createElement('orig', '0');
                  $n12 = $geraDom->createElement('CST', '20');
                  $n13 = $geraDom->createElement('modBC', '3');
                  $n14 = $geraDom->createElement('pRedBC', number_format(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_reducao_icms'], 2, '.', ''));
                  $n15 = $geraDom->createElement('vBC', number_format($base_icms, 2, '.', ''));
                  $n16 = $geraDom->createElement('pICMS', number_format($aliquota_icms, 2, '.', ''));
                  $n17 = $geraDom->createElement('vICMS', number_format($valor_icms, 2, '.', ''));

                  $n02->appendChild($n11);
                  $n02->appendChild($n12);
                  $n02->appendChild($n13);
                  $n02->appendChild($n14);
                  $n02->appendChild($n15);
                  $n02->appendChild($n16);
                  $n02->appendChild($n17);
               }
            }
         }
         else
         {
            if((trim($_SESSION['login_nfe_regime']) <> '1'))
            {
               $n02 = $geraDom->createElement('ICMS40');
               $n11 = $geraDom->createElement('orig', '0');
               $n12 = $geraDom->createElement('CST', '50');

               $n02->appendChild($n11);
               $n02->appendChild($n12);
            }
         }

         if((trim($_SESSION['login_nfe_regime']) <> '1'))
         {
            $n01->appendChild($n02);
         }

         //*** FINAL - ICMS ***

         //*** INICIO - Simples Nacional ***

         if((trim($_SESSION['login_nfe_regime']) == '1')And(trim($situacao_tributaria) == '101'))
         {
            $sn10c = $geraDom->createElement('ICMSSN101');
            $sn11 = $geraDom->createElement('orig', '0');
            $sn12a = $geraDom->createElement('CSOSN', trim($situacao_tributaria));
            $sn29 = $geraDom->createElement('pCredSN', number_format(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_aliquota'], 2, '.', ''));
            $sn30 = $geraDom->createElement('vCredICMSSN', number_format((((($valor_total_produto + $valor_frete) - $valor_desconto) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_aliquota']) / 100), 2, '.', ''));

            $sn10c->appendChild($sn11);
            $sn10c->appendChild($sn12a);
            $sn10c->appendChild($sn29);
            $sn10c->appendChild($sn30);

            $n01->appendChild($sn10c);
         }
         elseif((trim($_SESSION['login_nfe_regime']) == '1')And((trim($situacao_tributaria) == '102')Or(trim($situacao_tributaria) == '103')Or(trim($situacao_tributaria) == '300')Or(trim($situacao_tributaria) == '400')))
         {
            $sn10c = $geraDom->createElement('ICMSSN102');
            $sn11 = $geraDom->createElement('orig', '0');
            $sn12a = $geraDom->createElement('CSOSN', trim($situacao_tributaria));

            $sn10c->appendChild($sn11);
            $sn10c->appendChild($sn12a);

            $n01->appendChild($sn10c);
         }
         elseif((trim($_SESSION['login_nfe_regime']) == '1')And((trim($situacao_tributaria) == '201')))
         {
            $sn10e = $geraDom->createElement('ICMSSN201');
            $sn11 = $geraDom->createElement('orig', '0');
            $sn12a = $geraDom->createElement('CSOSN', trim($situacao_tributaria));
            $sn18 = $geraDom->createElement('modBCST', '4');

            if($aliquota_interna > 0)
            {
               $sn19 = $geraDom->createElement('pMVAST', number_format($aliquota_interna, 2, '.', ''));
            }

            if($iva > 0)
            {
               $sn20 = $geraDom->createElement('pRedBCST', number_format($iva, 2, '.', ''));
            }

            $sn21 = $geraDom->createElement('vBCST', number_format($base_icms_st, 2, '.', ''));
            $sn22 = $geraDom->createElement('pICMSST', number_format($aliquota_interna, 2, '.', ''));
            $sn23 = $geraDom->createElement('vICMSST', number_format($valor_icms_st, 2, '.', ''));
            $sn29 = $geraDom->createElement('pCredSN', number_format(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_aliquota'], 2, '.', ''));
            $sn30 = $geraDom->createElement('vCredICMSSN', number_format((((($valor_total_produto + $valor_frete) - $valor_desconto) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_aliquota']) / 100), 2, '.', ''));

            $sn10e->appendChild($sn11);
            $sn10e->appendChild($sn12a);
            $sn10e->appendChild($sn18);

            if($aliquota_interna > 0)
            {
               $sn10e->appendChild($sn19);
            }

            if($iva > 0)
            {
               $sn10e->appendChild($sn20);
            }

            $sn10e->appendChild($sn21);
            $sn10e->appendChild($sn22);
            $sn10e->appendChild($sn23);
            $sn10e->appendChild($sn29);
            $sn10e->appendChild($sn30);

            $n01->appendChild($sn10e);
         }
         elseif((trim($_SESSION['login_nfe_regime']) == '1')And((trim($situacao_tributaria) == '202')Or(trim($situacao_tributaria) == '203')))
         {
            $sn10f = $geraDom->createElement('ICMSSN202');
            $sn11 = $geraDom->createElement('orig', '0');
            $sn12a = $geraDom->createElement('CSOSN', trim($situacao_tributaria));
            $sn18 = $geraDom->createElement('modBCST', '4');

            if($aliquota_interna > 0)
            {
               $sn19 = $geraDom->createElement('pMVAST', number_format($aliquota_interna, 2, '.', ''));
            }

            if($iva > 0)
            {
               $sn20 = $geraDom->createElement('pRedBCST', number_format($iva, 2, '.', ''));
            }

            $sn21 = $geraDom->createElement('vBCST', number_format($base_icms_st, 2, '.', ''));
            $sn22 = $geraDom->createElement('pICMSST', number_format($aliquota_interna, 2, '.', ''));
            $sn23 = $geraDom->createElement('vICMSST', number_format($valor_icms_st, 2, '.', ''));

            $sn10f->appendChild($sn11);
            $sn10f->appendChild($sn12a);
            $sn10f->appendChild($sn18);

            if($aliquota_interna > 0)
            {
               $sn10f->appendChild($sn19);
            }

            if($iva > 0)
            {
               $sn10f->appendChild($sn20);
            }

            $sn10f->appendChild($sn21);
            $sn10f->appendChild($sn22);
            $sn10f->appendChild($sn23);

            $n01->appendChild($sn10f);
         }
         elseif((trim($_SESSION['login_nfe_regime']) == '1')And((trim($situacao_tributaria) == '500')))
         {
            $sn10g = $geraDom->createElement('ICMSSN500');
            $sn11 = $geraDom->createElement('orig', '0');
            $sn12a = $geraDom->createElement('CSOSN', trim($situacao_tributaria));
            $sn26 = $geraDom->createElement('vBCSTRet', number_format($base_icms_st, 2, '.', ''));
            $sn27 = $geraDom->createElement('vICMSSTRet', number_format($valor_icms_st, 2, '.', ''));

            $sn10g->appendChild($sn11);
            $sn10g->appendChild($sn12a);
            $sn10g->appendChild($sn26);
            $sn10g->appendChild($sn27);

            $n01->appendChild($sn10g);
         }
         elseif((trim($_SESSION['login_nfe_regime']) == '1')And((trim($situacao_tributaria) == '900')))
         {
            $sn10h = $geraDom->createElement('ICMSSN900');
            $sn11 = $geraDom->createElement('orig', '0');
            $sn12a = $geraDom->createElement('CSOSN', trim($situacao_tributaria));
            $sn13 = $geraDom->createElement('modBC', '3');
            $sn14 = $geraDom->createElement('vBC', number_format($base_icms, 2, '.', ''));

            if($aliquota_icms > 0)
            {
               $sn15 = $geraDom->createElement('pRedBC', number_format($aliquota_icms, 2, '.', ''));
            }

            $sn16 = $geraDom->createElement('pICMS', number_format($aliquota_icms, 2, '.', ''));
            $sn17 = $geraDom->createElement('vICMS', number_format($valor_icms, 2, '.', ''));
            $sn18 = $geraDom->createElement('modBCST', '4');

            if($aliquota_interna > 0)
            {
               $sn19 = $geraDom->createElement('pMVAST', number_format($aliquota_interna, 2, '.', ''));
            }

            if($iva > 0)
            {
               $sn20 = $geraDom->createElement('pRedBCST', number_format($iva, 2, '.', ''));
            }

            $sn21 = $geraDom->createElement('vBCST', number_format($base_icms_st, 2, '.', ''));
            $sn22 = $geraDom->createElement('pICMSST', number_format($aliquota_interna, 2, '.', ''));
            $sn23 = $geraDom->createElement('vICMSST', number_format($valor_icms_st, 2, '.', ''));
            $sn29 = $geraDom->createElement('pCredSN', number_format(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_aliquota'], 2, '.', ''));
            $sn30 = $geraDom->createElement('vCredICMSSN', number_format((((($valor_total_produto + $valor_frete) - $valor_desconto) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_aliquota']) / 100), 2, '.', ''));

            $sn10h->appendChild($sn11);
            $sn10h->appendChild($sn12a);
            $sn10h->appendChild($sn13);
            $sn10h->appendChild($sn14);

            if($aliquota_icms > 0)
            {
               $sn10h->appendChild($sn15);
            }
            $sn10h->appendChild($sn16);
            $sn10h->appendChild($sn17);
            $sn10h->appendChild($sn18);

            if($aliquota_interna > 0)
            {
               $sn10h->appendChild($sn19);
            }

            if($iva > 0)
            {
               $sn10h->appendChild($sn20);
            }

            $sn10h->appendChild($sn21);
            $sn10h->appendChild($sn22);
            $sn10h->appendChild($sn23);
            $sn10h->appendChild($sn29);
            $sn10h->appendChild($sn30);

            $n01->appendChild($sn10h);
         }

         $m01->appendChild($n01);

         //*** FINAL - Simples Nacional ***

         //*** INICIO - IPI ***

         $T_base_ipi = $T_base_ipi + $base_ipi;
         $T_valor_ipi = $T_valor_ipi + $valor_ipi;

         if($aliquota_ipi > 0)
         {
            if((trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_ipi_cst']) == '00') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_ipi_cst']) == '49') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_ipi_cst']) == '50') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_ipi_cst']) == '99'))
            {
               $o01 = $geraDom->createElement('IPI');
               $o02 = $geraDom->createElement('cEnq', '999');
               $o03 = $geraDom->createElement('IPITrib');
               $o04 = $geraDom->createElement('CST', trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_ipi_cst']));
               $o05 = $geraDom->createElement('vBC', number_format($base_ipi, 2, '.', ''));
               $o06 = $geraDom->createElement('pIPI', number_format($aliquota_ipi, 2, '.', ''));
               $o07 = $geraDom->createElement('vIPI', number_format($valor_ipi, 2, '.', ''));

               $o03->appendChild($o04);
               $o03->appendChild($o05);
               $o03->appendChild($o06);
               $o03->appendChild($o07);
               $o01->appendChild($o02);
               $o01->appendChild($o03);
            }
            else
            {
               $o01 = $geraDom->createElement('IPI');
               $o02 = $geraDom->createElement('cEnq', '999');
               $o03 = $geraDom->createElement('IPINT');
               $o04 = $geraDom->createElement('CST', trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_ipi_cst']));

               $o03->appendChild($o04);
               $o01->appendChild($o02);
               $o01->appendChild($o03);
            }

		    $m01->appendChild($o01);
         }

         //*** FINAL - IPI ***

         //*** INICIO - PIS ***

         if((trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']) == '01') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']) == '02'))
         {
            $q01 = $geraDom->createElement('PIS');
            $q02 = $geraDom->createElement('PISAliq');
            $q06 = $geraDom->createElement('CST', trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']));
            $q07 = $geraDom->createElement('vBC', number_format(($valor_total_produto + $valor_frete), 2, '.', ''));
            $q08 = $geraDom->createElement('pPIS', number_format(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_aliquota'], 2, '.', ''));
            $q09 = $geraDom->createElement('vPIS', number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_aliquota']) / 100), 2, '.', ''));

            $T_valor_pis = $T_valor_pis + number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_aliquota']) / 100), 2, '.', '');

            $q02->appendChild($q06);
            $q02->appendChild($q07);
            $q02->appendChild($q08);
            $q02->appendChild($q09);
            $q01->appendChild($q02);
         }
         elseif((trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']) == '03'))
         {
            $q01 = $geraDom->createElement('PIS');
            $q02 = $geraDom->createElement('PISQtde');
            $q06 = $geraDom->createElement('CST', trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']));
            $q07 = $geraDom->createElement('qBCProd', number_format(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade'], 4, '.', ''));
            $q08 = $geraDom->createElement('vAliqProd', number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_aliquota']) / 100) / GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade'], 4, '.', ''));
            $q09 = $geraDom->createElement('vPIS', number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_aliquota']) / 100), 2, '.', ''));

            $T_valor_pis = $T_valor_pis + number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_aliquota']) / 100), 2, '.', '');

            $q02->appendChild($q06);
            $q02->appendChild($q07);
            $q02->appendChild($q08);
            $q02->appendChild($q09);
            $q01->appendChild($q02);
         }
         elseif( (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']) == '04') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']) == '06') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']) == '07') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']) == '08') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']) == '09') )
         {
            $q01 = $geraDom->createElement('PIS');
            $q02 = $geraDom->createElement('PISNT');
            $q06 = $geraDom->createElement('CST', trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']));

            $q02->appendChild($q06);
            $q01->appendChild($q02);
         }
         elseif((trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']) == '99'))
         {
            $q01 = $geraDom->createElement('PIS');
            $q02 = $geraDom->createElement('PISOutr');
            $q06 = $geraDom->createElement('CST', trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']));
            $q07 = $geraDom->createElement('vBC', number_format(($valor_total_produto + $valor_frete), 2, '.', ''));
            $q08 = $geraDom->createElement('pPIS', number_format(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_aliquota'], 2, '.', ''));
            $q09 = $geraDom->createElement('qBCProd', number_format(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade'], 4, '.', ''));
            $q10 = $geraDom->createElement('vAliqProd', number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_aliquota']) / 100) / GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade'], 4, '.', ''));
            $q11 = $geraDom->createElement('vPIS', number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_aliquota']) / 100), 2, '.', ''));

            $T_valor_pis = $T_valor_pis + number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_aliquota']) / 100), 2, '.', '');

            $q02->appendChild($q06);
            $q02->appendChild($q07);
            $q02->appendChild($q08);
            $q02->appendChild($q09);
            $q02->appendChild($q10);
            $q02->appendChild($q11);
            $q01->appendChild($q02);
         }
         else
         {
            $q01 = $geraDom->createElement('PIS');
            $q02 = $geraDom->createElement('PISNT');
            $q06 = $geraDom->createElement('CST', trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_pis_cst']));

            $q02->appendChild($q06);
            $q01->appendChild($q02);
         }

         $m01->appendChild($q01);

         //*** FINAL - PIS ***

         //*** INICIO - COFINS ***

         if((trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']) == '01') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']) == '02'))
         {
            $s01 = $geraDom->createElement('COFINS');
            $s02 = $geraDom->createElement('COFINSAliq');
            $s06 = $geraDom->createElement('CST', trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']));
            $s07 = $geraDom->createElement('vBC', number_format(($valor_total_produto + $valor_frete), 2, '.', ''));
            $s08 = $geraDom->createElement('pCOFINS', number_format(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_aliquota'], 2, '.', ''));
            $s09 = $geraDom->createElement('vCOFINS', number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_aliquota']) / 100), 2, '.', ''));

            $T_valor_cofins = $T_valor_cofins + number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_aliquota']) / 100), 2, '.', '');

            $s02->appendChild($s06);
            $s02->appendChild($s07);
            $s02->appendChild($s08);
            $s02->appendChild($s09);
            $s01->appendChild($s02);
         }
         elseif((trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']) == '03'))
         {
            $s01 = $geraDom->createElement('COFINS');
            $s02 = $geraDom->createElement('COFINSQtde');
            $s06 = $geraDom->createElement('CST', trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']));
            $s07 = $geraDom->createElement('qBCProd', number_format(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade'], 4, '.', ''));
            $s08 = $geraDom->createElement('vAliqProd', number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_aliquota']) / 100) / GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade'], 4, '.', ''));
            $s09 = $geraDom->createElement('vCOFINS', number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_aliquota']) / 100), 2, '.', ''));

            $T_valor_cofins = $T_valor_cofins + number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_aliquota']) / 100), 2, '.', '');

            $s02->appendChild($s06);
            $s02->appendChild($s07);
            $s02->appendChild($s08);
            $s02->appendChild($s09);
            $s01->appendChild($s02);
         }
         elseif( (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']) == '04') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']) == '06') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']) == '07') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']) == '08') Or (trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']) == '09') )
         {
            $s01 = $geraDom->createElement('COFINS');
            $s02 = $geraDom->createElement('COFINSNT');
            $s06 = $geraDom->createElement('CST', trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']));

            $s02->appendChild($s06);
            $s01->appendChild($s02);
         }
         elseif((trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']) == '99'))
         {
            $s01 = $geraDom->createElement('COFINS');
            $s02 = $geraDom->createElement('COFINSOutr');
            $s06 = $geraDom->createElement('CST', trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']));
            $s07 = $geraDom->createElement('vBC', number_format(($valor_total_produto + $valor_frete), 2, '.', ''));
            $s08 = $geraDom->createElement('pCOFINS', number_format(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_aliquota'], 2, '.', ''));
            $s09 = $geraDom->createElement('qBCProd', number_format(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade'], 4, '.', ''));
            $s10 = $geraDom->createElement('vAliqProd', number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_aliquota']) / 100) / GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade'], 4, '.', ''));
            $s11 = $geraDom->createElement('vCOFINS', number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_aliquota']) / 100), 2, '.', ''));

            $T_valor_cofins = $T_valor_cofins + number_format(((($valor_total_produto + $valor_frete) * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_aliquota']) / 100), 2, '.', '');

            $s02->appendChild($s06);
            $s02->appendChild($s07);
            $s02->appendChild($s08);
            $s02->appendChild($s09);
            $s02->appendChild($s10);
            $s02->appendChild($s11);
            $s01->appendChild($s02);
         }
         else
         {
            $s01 = $geraDom->createElement('COFINS');
            $s02 = $geraDom->createElement('COFINSNT');
            $s06 = $geraDom->createElement('CST', trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cofins_cst']));

            $s02->appendChild($s06);
            $s01->appendChild($s02);
         }

         $m01->appendChild($s01);

         //*** FINAL - COFINS ***

         $h01->appendChild($m01);
         $a01->appendChild($h01);

         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->next();
      }

      //*** Valores Totais da Nota Fiscal *** 
      $T_base_icms = number_format($this->mgt_nota_fiscal_base_icms->Text, 2, '.', '');
      $T_valor_icms = number_format($this->mgt_nota_fiscal_valor_icms->Text, 2, '.', '');
      $T_valor_nota = number_format($this->mgt_nota_fiscal_valor_total->Text, 2, '.', '');
      $T_base_icms_st = number_format($this->mgt_nota_fiscal_base_icms_sub->Text, 2, '.', '');
      $T_valor_icms_st = number_format($this->mgt_nota_fiscal_valor_icms_sub->Text, 2, '.', '');
      $T_valor_outros = number_format($this->mgt_nota_fiscal_outras_despesas->Text, 2, '.', '');
      $T_valor_desconto = number_format($this->mgt_nota_fiscal_valor_desconto->Text, 2, '.', '');

      //*** Valores Totais dos Tributos ***
	  $T_porcentagem_tributos = number_format(($T_nota_valor_tributos / $T_valor_nota) * 100, 2, '.', '');
	  
	  if($this->mgt_nota_fiscal_cliente_desconto->Text <= 0)
      {
         $T_valor_produtos = number_format($this->mgt_nota_fiscal_valor_produtos->Text, 2, '.', '');
      }

      $w01 = $geraDom->createElement('total');
      $w02 = $geraDom->createElement('ICMSTot');
      $w03 = $geraDom->createElement('vBC', number_format($T_base_icms, 2, '.', ''));
      $w04 = $geraDom->createElement('vICMS', number_format($T_valor_icms, 2, '.', ''));
      $w05 = $geraDom->createElement('vBCST', number_format($T_base_icms_st, 2, '.', ''));
      $w06 = $geraDom->createElement('vST', number_format($T_valor_icms_st, 2, '.', ''));
      $w07 = $geraDom->createElement('vProd', number_format($T_valor_produtos, 2, '.', ''));
      $w08 = $geraDom->createElement('vFrete', number_format($T_valor_frete, 2, '.', ''));
      $w09 = $geraDom->createElement('vSeg', number_format($T_valor_seguro, 2, '.', ''));
      $w10 = $geraDom->createElement('vDesc', number_format($T_valor_desconto, 2, '.', ''));
      $w11 = $geraDom->createElement('vII', number_format($T_valor_ii, 2, '.', ''));
      $w12 = $geraDom->createElement('vIPI', number_format($T_valor_ipi, 2, '.', ''));
      $w13 = $geraDom->createElement('vPIS', number_format($T_valor_pis, 2, '.', ''));
      $w14 = $geraDom->createElement('vCOFINS', number_format($T_valor_cofins, 2, '.', ''));
      $w15 = $geraDom->createElement('vOutro', number_format($T_valor_outros, 2, '.', ''));
      $w16 = $geraDom->createElement('vNF', number_format($T_valor_nota, 2, '.', ''));

      $w02->appendChild($w03);
      $w02->appendChild($w04);
      $w02->appendChild($w05);
      $w02->appendChild($w06);
      $w02->appendChild($w07);
      $w02->appendChild($w08);
      $w02->appendChild($w09);
      $w02->appendChild($w10);
      $w02->appendChild($w11);
      $w02->appendChild($w12);
      $w02->appendChild($w13);
      $w02->appendChild($w14);
      $w02->appendChild($w15);
      $w02->appendChild($w16);
      $w01->appendChild($w02);
      $a01->appendChild($w01);

      //*** Informacoes da Transportadora ***

      $x01 = $geraDom->createElement('transp');

      if(strtoupper(trim($this->mgt_nota_fiscal_pagamento_frete->ItemIndex)) == 'EMPRESA')
      {
         $x02 = $geraDom->createElement('modFrete', '0');
      }
      else
      {
         $x02 = $geraDom->createElement('modFrete', '1');
      }

      $x03 = $geraDom->createElement('transporta');

      if(strlen(retira_acentos_ponto_traco_barra(trim($this->mgt_nota_fiscal_transportadora_cnpj->Text), 0)) < 14)
      {
         $x04 = $geraDom->createElement('CPF', completa_zeros_retira_caracter($this->mgt_nota_fiscal_transportadora_cnpj->Text, 11));
      }
      else
      {
         $x04 = $geraDom->createElement('CNPJ', completa_zeros_retira_caracter($this->mgt_nota_fiscal_transportadora_cnpj->Text, 14));
      }

      $x06 = $geraDom->createElement('xNome', retira_acentos($this->mgt_nota_fiscal_transportadora_razao_social->Text, 60));

      $uf_ie = trim($this->mgt_nota_fiscal_transportadora_estado->Text);

      if(trim($uf_ie) == 'AC')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'AL')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'AP')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'AM')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'BA')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'CE')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'DF')
      {
         $tam_ie = 13;
      }
      elseif(trim($uf_ie) == 'ES')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'GO')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'MA')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'MT')
      {
         $tam_ie = 11;
      }
      elseif(trim($uf_ie) == 'MS')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'MG')
      {
         $tam_ie = 13;
      }
      elseif(trim($uf_ie) == 'PA')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'PB')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'PR')
      {
         $tam_ie = 10;
      }
      elseif(trim($uf_ie) == 'PE')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'PI')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'RJ')
      {
         $tam_ie = 8;
      }
      elseif(trim($uf_ie) == 'RN')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'RS')
      {
         $tam_ie = 10;
      }
      elseif(trim($uf_ie) == 'RO')
      {
         $tam_ie = 14;
      }
      elseif(trim($uf_ie) == 'RR')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'SC')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'SP')
      {
         $tam_ie = 12;
      }
      elseif(trim($uf_ie) == 'SE')
      {
         $tam_ie = 9;
      }
      elseif(trim($uf_ie) == 'TO')
      {
         $tam_ie = 11;
      }
      else
      {
         $tam_ie = 12;
      }

      $ie_transportadora = trim($this->mgt_nota_fiscal_transportadora_insc_est->Text);

      if($ie_transportadora <> 'ISENTO')
      {
         $ie_transportadora = completa_zeros_retira_caracter($this->mgt_nota_fiscal_transportadora_insc_est->Text, $tam_ie);
      }

      $x07 = $geraDom->createElement('IE', $ie_transportadora);
      $x08 = $geraDom->createElement('xEnder', retira_acentos(trim($this->mgt_nota_fiscal_transportadora_endereco->Text) . ' ' . trim($this->mgt_nota_fiscal_transportadora_complemento->Text) . ' ' . trim($this->mgt_nota_fiscal_transportadora_bairro->Text) . ' CEP: ' . trim($this->mgt_nota_fiscal_transportadora_cep->Text), 60));
      $x09 = $geraDom->createElement('xMun', retira_acentos($this->mgt_nota_fiscal_transportadora_cidade->Text, 60));
      $x10 = $geraDom->createElement('UF', retira_acentos($this->mgt_nota_fiscal_transportadora_estado->Text, 2));

      if(trim($this->mgt_nota_fiscal_transportadora_veiculo_placa->Text) <> '')
      {
         $x18 = $geraDom->createElement('veicTransp');
         $x19 = $geraDom->createElement('placa', retira_acentos_ponto_traco_barra($this->mgt_nota_fiscal_transportadora_veiculo_placa->Text, 0));

         if(trim($this->mgt_nota_fiscal_transportadora_veiculo_estado->Text) <> '')
         {
            $x20 = $geraDom->createElement('UF', retira_acentos($this->mgt_nota_fiscal_transportadora_veiculo_estado->Text, 0));
         }
      }

      $x26 = $geraDom->createElement('vol');
      $x27 = $geraDom->createElement('qVol', $this->mgt_nota_fiscal_qtde->Text);
      $x28 = $geraDom->createElement('esp', retira_acentos($this->mgt_nota_fiscal_especie->Text, 0));

      if(trim($this->mgt_nota_fiscal_marca->Text) <> '')
      {
         $x28a = $geraDom->createElement('marca', $this->mgt_nota_fiscal_marca->Text);
      }

      if(trim($this->mgt_nota_fiscal_vol_numero->Text) <> '')
      {
         $x30 = $geraDom->createElement('nVol', $this->mgt_nota_fiscal_vol_numero->Text);
      }
      else
      {
         $x30 = $geraDom->createElement('nVol', '0');
      }

      $x31 = $geraDom->createElement('pesoL', number_format($this->mgt_nota_fiscal_peso_liquido->Text, 3, '.', ''));
      $x32 = $geraDom->createElement('pesoB', number_format($this->mgt_nota_fiscal_peso_bruto->Text, 3, '.', ''));

      $x03->appendChild($x04);
      $x03->appendChild($x06);
      $x03->appendChild($x07);
      $x03->appendChild($x08);
      $x03->appendChild($x09);
      $x03->appendChild($x10);

      if(trim($this->mgt_nota_fiscal_transportadora_veiculo_placa->Text) <> '')
      {
         $x18->appendChild($x19);

         if(trim($this->mgt_nota_fiscal_transportadora_veiculo_estado->Text) <> '')
         {
            $x18->appendChild($x20);
         }
      }

      $x26->appendChild($x27);
      $x26->appendChild($x28);

      if(trim($this->mgt_nota_fiscal_marca->Text) <> '')
      {
         $x26->appendChild($x28a);
      }

      $x26->appendChild($x30);
      $x26->appendChild($x31);
      $x26->appendChild($x32);

      $x01->appendChild($x02);
      $x01->appendChild($x03);

      if(trim($this->mgt_nota_fiscal_transportadora_veiculo_placa->Text) <> '')
      {
         $x01->appendChild($x18);
      }

      $x01->appendChild($x26);
      $a01->appendChild($x01);

      //*** Informacoes para Cobranca ***

      $nro_nota_desd_1 = $this->mgt_nota_fiscal_dup_nro_1->Text;
      $nro_nota_desd_2 = $this->mgt_nota_fiscal_dup_nro_2->Text;
      $nro_nota_desd_3 = $this->mgt_nota_fiscal_dup_nro_3->Text;
      $nro_nota_desd_4 = $this->mgt_nota_fiscal_dup_nro_4->Text;
      $nro_nota_desd_5 = $this->mgt_nota_fiscal_dup_nro_5->Text;
      $nro_nota_desd_6 = $this->mgt_nota_fiscal_dup_nro_6->Text;
      $nro_nota_desd_7 = $this->mgt_nota_fiscal_dup_nro_7->Text;
      $nro_nota_desd_8 = $this->mgt_nota_fiscal_dup_nro_8->Text;
      $nro_nota_desd_9 = $this->mgt_nota_fiscal_dup_nro_9->Text;
      $nro_nota_desd_10 = $this->mgt_nota_fiscal_dup_nro_10->Text;
      $nro_nota_desd_11 = $this->mgt_nota_fiscal_dup_nro_11->Text;
      $nro_nota_desd_12 = $this->mgt_nota_fiscal_dup_nro_12->Text;

      $dt_vcto_desd_1 = inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_1->Text));
      $dt_vcto_desd_2 = inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_2->Text));
      $dt_vcto_desd_3 = inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_3->Text));
      $dt_vcto_desd_4 = inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_4->Text));
      $dt_vcto_desd_5 = inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_5->Text));
      $dt_vcto_desd_6 = inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_6->Text));
      $dt_vcto_desd_7 = inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_7->Text));
      $dt_vcto_desd_8 = inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_8->Text));
      $dt_vcto_desd_9 = inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_9->Text));
      $dt_vcto_desd_10 = inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_10->Text));
      $dt_vcto_desd_11 = inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_11->Text));
      $dt_vcto_desd_12 = inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_12->Text));

      $vlr_desd_1 = $this->mgt_nota_fiscal_dup_vlr_1->Text;
      $vlr_desd_2 = $this->mgt_nota_fiscal_dup_vlr_2->Text;
      $vlr_desd_3 = $this->mgt_nota_fiscal_dup_vlr_3->Text;
      $vlr_desd_4 = $this->mgt_nota_fiscal_dup_vlr_4->Text;
      $vlr_desd_5 = $this->mgt_nota_fiscal_dup_vlr_5->Text;
      $vlr_desd_6 = $this->mgt_nota_fiscal_dup_vlr_6->Text;
      $vlr_desd_7 = $this->mgt_nota_fiscal_dup_vlr_7->Text;
      $vlr_desd_8 = $this->mgt_nota_fiscal_dup_vlr_8->Text;
      $vlr_desd_9 = $this->mgt_nota_fiscal_dup_vlr_9->Text;
      $vlr_desd_10 = $this->mgt_nota_fiscal_dup_vlr_10->Text;
      $vlr_desd_11 = $this->mgt_nota_fiscal_dup_vlr_11->Text;
      $vlr_desd_12 = $this->mgt_nota_fiscal_dup_vlr_12->Text;

      $forma_desd_1 = $this->mgt_nota_fiscal_dup_forma_1->Value;
      $forma_desd_2 = $this->mgt_nota_fiscal_dup_forma_2->Value;
      $forma_desd_3 = $this->mgt_nota_fiscal_dup_forma_3->Value;
      $forma_desd_4 = $this->mgt_nota_fiscal_dup_forma_4->Value;
      $forma_desd_5 = $this->mgt_nota_fiscal_dup_forma_5->Value;
      $forma_desd_6 = $this->mgt_nota_fiscal_dup_forma_6->Value;
      $forma_desd_7 = $this->mgt_nota_fiscal_dup_forma_7->Value;
      $forma_desd_8 = $this->mgt_nota_fiscal_dup_forma_8->Value;
      $forma_desd_9 = $this->mgt_nota_fiscal_dup_forma_9->Value;
      $forma_desd_10 = $this->mgt_nota_fiscal_dup_forma_10->Value;
      $forma_desd_11 = $this->mgt_nota_fiscal_dup_forma_11->Value;
      $forma_desd_12 = $this->mgt_nota_fiscal_dup_forma_12->Value;

      $y01 = $geraDom->createElement('cobr');

      if(trim($nro_nota_desd_1) <> '')
      {
         $y07a = $geraDom->createElement('dup');
         $y08a = $geraDom->createElement('nDup', $nro_nota_desd_1);
         $y09a = $geraDom->createElement('dVenc', $dt_vcto_desd_1);
         $y10a = $geraDom->createElement('vDup', number_format($vlr_desd_1, 2, '.', ''));

         $y07a->appendChild($y08a);
         $y07a->appendChild($y09a);
         $y07a->appendChild($y10a);

         $y01->appendChild($y07a);
      }

      if(trim($nro_nota_desd_2) <> '')
      {
         $y07b = $geraDom->createElement('dup');
         $y08b = $geraDom->createElement('nDup', $nro_nota_desd_2);
         $y09b = $geraDom->createElement('dVenc', $dt_vcto_desd_2);
         $y10b = $geraDom->createElement('vDup', number_format($vlr_desd_2, 2, '.', ''));

         $y07b->appendChild($y08b);
         $y07b->appendChild($y09b);
         $y07b->appendChild($y10b);

         $y01->appendChild($y07b);
      }

      if(trim($nro_nota_desd_3) <> '')
      {
         $y07c = $geraDom->createElement('dup');
         $y08c = $geraDom->createElement('nDup', $nro_nota_desd_3);
         $y09c = $geraDom->createElement('dVenc', $dt_vcto_desd_3);
         $y10c = $geraDom->createElement('vDup', number_format($vlr_desd_3, 2, '.', ''));

         $y07c->appendChild($y08c);
         $y07c->appendChild($y09c);
         $y07c->appendChild($y10c);

         $y01->appendChild($y07c);
      }

      if(trim($nro_nota_desd_4) <> '')
      {
         $y07d = $geraDom->createElement('dup');
         $y08d = $geraDom->createElement('nDup', $nro_nota_desd_4);
         $y09d = $geraDom->createElement('dVenc', $dt_vcto_desd_4);
         $y10d = $geraDom->createElement('vDup', number_format($vlr_desd_4, 2, '.', ''));

         $y07d->appendChild($y08d);
         $y07d->appendChild($y09d);
         $y07d->appendChild($y10d);

         $y01->appendChild($y07d);
      }

      if(trim($nro_nota_desd_5) <> '')
      {
         $y07e = $geraDom->createElement('dup');
         $y08e = $geraDom->createElement('nDup', $nro_nota_desd_5);
         $y09e = $geraDom->createElement('dVenc', $dt_vcto_desd_5);
         $y10e = $geraDom->createElement('vDup', number_format($vlr_desd_5, 2, '.', ''));

         $y07e->appendChild($y08e);
         $y07e->appendChild($y09e);
         $y07e->appendChild($y10e);

         $y01->appendChild($y07e);
      }

      if(trim($nro_nota_desd_6) <> '')
      {
         $y07f = $geraDom->createElement('dup');
         $y08f = $geraDom->createElement('nDup', $nro_nota_desd_6);
         $y09f = $geraDom->createElement('dVenc', $dt_vcto_desd_6);
         $y10f = $geraDom->createElement('vDup', number_format($vlr_desd_6, 2, '.', ''));

         $y07f->appendChild($y08f);
         $y07f->appendChild($y09f);
         $y07f->appendChild($y10f);

         $y01->appendChild($y07f);
      }

      if(trim($nro_nota_desd_7) <> '')
      {
         $y07g = $geraDom->createElement('dup');
         $y08g = $geraDom->createElement('nDup', $nro_nota_desd_7);
         $y09g = $geraDom->createElement('dVenc', $dt_vcto_desd_7);
         $y10g = $geraDom->createElement('vDup', number_format($vlr_desd_7, 2, '.', ''));

         $y07g->appendChild($y08g);
         $y07g->appendChild($y09g);
         $y07g->appendChild($y10g);

         $y01->appendChild($y07g);
      }

      if(trim($nro_nota_desd_8) <> '')
      {
         $y07h = $geraDom->createElement('dup');
         $y08h = $geraDom->createElement('nDup', $nro_nota_desd_8);
         $y09h = $geraDom->createElement('dVenc', $dt_vcto_desd_8);
         $y10h = $geraDom->createElement('vDup', number_format($vlr_desd_8, 2, '.', ''));

         $y07h->appendChild($y08h);
         $y07h->appendChild($y09h);
         $y07h->appendChild($y10h);

         $y01->appendChild($y07h);
      }

      if(trim($nro_nota_desd_9) <> '')
      {
         $y07i = $geraDom->createElement('dup');
         $y08i = $geraDom->createElement('nDup', $nro_nota_desd_9);
         $y09i = $geraDom->createElement('dVenc', $dt_vcto_desd_9);
         $y10i = $geraDom->createElement('vDup', number_format($vlr_desd_9, 2, '.', ''));

         $y07i->appendChild($y08i);
         $y07i->appendChild($y09i);
         $y07i->appendChild($y10i);

         $y01->appendChild($y07i);
      }

      if(trim($nro_nota_desd_10) <> '')
      {
         $y07j = $geraDom->createElement('dup');
         $y08j = $geraDom->createElement('nDup', $nro_nota_desd_10);
         $y09j = $geraDom->createElement('dVenc', $dt_vcto_desd_10);
         $y10j = $geraDom->createElement('vDup', number_format($vlr_desd_10, 2, '.', ''));

         $y07j->appendChild($y08j);
         $y07j->appendChild($y09j);
         $y07j->appendChild($y10j);

         $y01->appendChild($y07j);
      }

      if(trim($nro_nota_desd_11) <> '')
      {
         $y07k = $geraDom->createElement('dup');
         $y08k = $geraDom->createElement('nDup', $nro_nota_desd_11);
         $y09k = $geraDom->createElement('dVenc', $dt_vcto_desd_11);
         $y10k = $geraDom->createElement('vDup', number_format($vlr_desd_11, 2, '.', ''));

         $y07k->appendChild($y08k);
         $y07k->appendChild($y09k);
         $y07k->appendChild($y10k);

         $y01->appendChild($y07k);
      }

      if(trim($nro_nota_desd_12) <> '')
      {
         $y07l = $geraDom->createElement('dup');
         $y08l = $geraDom->createElement('nDup', $nro_nota_desd_12);
         $y09l = $geraDom->createElement('dVenc', $dt_vcto_desd_12);
         $y10l = $geraDom->createElement('vDup', number_format($vlr_desd_12, 2, '.', ''));

         $y07l->appendChild($y08l);
         $y07l->appendChild($y09l);
         $y07l->appendChild($y10l);

         $y01->appendChild($y07l);
      }

      $a01->appendChild($y01);

      //*** Informacoes Adicionais ***

      //*** Registra a Informacao da Fatura ***

      if(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '1')
      {
         $informacoes_adicionais = 'CONDICAO DE PAGTO: (A VISTA) || ';
      }
      elseif(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '2')
      {
         $informacoes_adicionais = 'CONDICAO DE PAGTO: (SEM VALOR COMERCIAL) || ';
      }
      elseif(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '3')
      {
         $informacoes_adicionais = 'CONDICAO DE PAGTO: (ANTECIPADO) || ';
      }
      else
      {
         $informacoes_adicionais = '';
      }

      //*** Registra as Informacoes Adicionais ***

      if($this->hd_nota_fiscal_imprime_observacao_nota->Value == 1)
      {
         $informacoes_adicionais .= trim($this->mgt_nota_fiscal_observacao_nota->Text) . ' || ';
         $informacoes_adicionais .= trim($this->mgt_nota_fiscal_observacao_faturamento->Text) . ' || ';
      }
      else
      {
         $informacoes_adicionais .= '';
      }

      if(trim($this->mgt_nota_fiscal_observacao_adicional_1->Text) <> '')
      {
         $informacoes_adicionais .= trim($this->mgt_nota_fiscal_observacao_adicional_1->Text) . ' || ';
      }

      if(trim($this->mgt_nota_fiscal_observacao_adicional_2->Text) <> '')
      {
         $informacoes_adicionais .= trim($this->mgt_nota_fiscal_observacao_adicional_2->Text) . ' || ';
      }

      if(trim($this->mgt_nota_fiscal_observacao_adicional_3->Text) <> '')
      {
         $informacoes_adicionais .= trim($this->mgt_nota_fiscal_observacao_adicional_3->Text) . ' || ';
      }

      if(trim($this->mgt_nota_fiscal_observacao_adicional_4->Text) <> '')
      {
         $informacoes_adicionais .= trim($this->mgt_nota_fiscal_observacao_adicional_4->Text) . ' || ';
      }

      if(trim($this->mgt_nota_fiscal_observacao_adicional_5->Text) <> '')
      {
         $informacoes_adicionais .= trim($this->mgt_nota_fiscal_observacao_adicional_5->Text) . ' || ';
      }

      if(trim($this->mgt_nota_fiscal_observacao_adicional_6->Text) <> '')
      {
         $informacoes_adicionais .= trim($this->mgt_nota_fiscal_observacao_adicional_6->Text) . ' || ';
      }

      if(trim($this->mgt_nota_fiscal_observacao_adicional_7->Text) <> '')
      {
         $informacoes_adicionais .= trim($this->mgt_nota_fiscal_observacao_adicional_7->Text) . ' || ';
      }

      if(trim($this->mgt_nota_fiscal_observacao_adicional_8->Text) <> '')
      {
         $informacoes_adicionais .= trim($this->mgt_nota_fiscal_observacao_adicional_8->Text) . ' || ';
      }

      if(trim($this->mgt_nota_fiscal_observacao_adicional_9->Text) <> '')
      {
         $informacoes_adicionais .= trim($this->mgt_nota_fiscal_observacao_adicional_9->Text) . ' || ';
      }

      if(trim($this->mgt_nota_fiscal_observacao_adicional_10->Text) <> '')
      {
         $informacoes_adicionais .= trim($this->mgt_nota_fiscal_observacao_adicional_10->Text) . ' || ';
      }

	  //*** Insere a Mensagem de Valor Aproximado dos Tributos ***
      $informacoes_adicionais = "VAL APROX DOS TRIBUTOS R$ " . str_replace('.', ',', trim($T_nota_valor_tributos)) . " (" . str_replace(',', '.', trim($T_porcentagem_tributos)) . "%) FONTE: IBPT" . ' || ' . trim($informacoes_adicionais); 

      //*** Prepara a Exibicao das Informacoes Adicionais ***
      if(trim($informacoes_adicionais) <> '')
      {
         $z01 = $geraDom->createElement('infAdic');
         //$z02 = $geraDom->createElement('infAdFisco', '-');
         $z03 = $geraDom->createElement('infCpl', retira_acentos($informacoes_adicionais, 0));

         //$z01->appendChild($z02);
         $z01->appendChild($z03);
         $a01->appendChild($z01);
      }

      //*** Dados para Exportacao ***

      if(trim($this->mgt_nota_fiscal_exportacao_uf_emb->Text) <> '')
      {
         $za01 = $geraDom->createElement('exporta');
         $za02 = $geraDom->createElement('UFEmbarq', retira_acentos($this->mgt_nota_fiscal_exportacao_uf_emb->Text, 0));
         $za03 = $geraDom->createElement('xLocEmbarq', retira_acentos($this->mgt_nota_fiscal_exportacao_local_emb->Text, 0));

         $za01->appendChild($za02);
         $za01->appendChild($za03);
         $a01->appendChild($za01);
      }

      //*** Fecha a Raiz ***

      $ap04->appendChild($a01);

      $ap01->appendChild($ap03);
      $ap01->appendChild($ap04);

      $geraDom->appendChild($ap01);

      //*** Salvando o XML ***
      $geraDom->save('nfe/entrada/enviNFe_' . trim($mgt_numero_nfe) . '.xml');

      //*** Abre o XML para Colocar o Atributo XMLNS no Elemento NFe ***
      $arquivo_atributo_xml = fopen('nfe/entrada/enviNFe_' . trim($mgt_numero_nfe) . '.xml', "r");
      $seta_atributo_xml = fread($arquivo_atributo_xml, filesize('nfe/entrada/enviNFe_' . trim($mgt_numero_nfe) . '.xml'));
      fclose($arquivo_atributo_xml);

      $seta_atributo_xml = str_replace('<NFe>', '<NFe xmlns="http://www.portalfiscal.inf.br/nfe">', $seta_atributo_xml);
      $arquivo_atributo_xml = fopen('nfe/entrada/enviNFe_' . trim($mgt_numero_nfe) . '.xml', "w");
      fwrite($arquivo_atributo_xml, $seta_atributo_xml);
      fclose($arquivo_atributo_xml);

      //***************************************
      //*** FINAL - Gera o XML para o Envio ***
      //***************************************
   }

   public function imprime_nota_fiscal()
   {
      //*** Efetua a Gravacao do Arquivo Texto para a Impressao da Nota ***

      $caminho_arquivo = trim($_SESSION['login_impressora']) . "NF" . trim($this->mgt_nota_fiscal_numero->Text) . ".txt";
      $impressora = fopen($caminho_arquivo, "w");

      if(trim($this->mgt_nota_fiscal_tipo_nota->ItemIndex) == '1')
      {
         $linha = $this->gera_posicao(90, "X", 0);
      }
      else
      {
         $linha = $this->gera_posicao(103, "X", 0);
      }
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");

      $linha = $this->gera_posicao(1, strtoupper($this->mgt_nota_fiscal_natureza_operacao_imp->Text), 37);
      fwrite($impressora, $linha);

      if(trim($this->mgt_nota_fiscal_cfop_2->Text) <> '')
      {
         $linha = trim($this->mgt_nota_fiscal_cfop->Text) . ' / ' . trim($this->mgt_nota_fiscal_cfop_2->Text);
      }
      else
      {
         $linha = trim($this->mgt_nota_fiscal_cfop->Text);
      }

      $linha = $this->gera_posicao(2, $linha . "\n", 20);
      fwrite($impressora, $linha);

      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");

      $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_razao_social->Text, 87);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(2, $this->mgt_nota_fiscal_cliente_codigo->Text, 30);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(2, $this->mgt_nota_fiscal_data_emissao->Text, 10);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");

      $linha = $this->gera_posicao(1, trim($this->mgt_nota_fiscal_endereco->Text) . " " . trim($this->mgt_nota_fiscal_complemento->Text), 78);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(2, $this->mgt_nota_fiscal_bairro->Text, 38);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");

      $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_cidade->Text, 45);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(5, $this->mgt_nota_fiscal_cep->Text, 29);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(3, $this->mgt_nota_fiscal_estado->Text, 7);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(2, $this->mgt_nota_fiscal_inscricao_estadual->Text, 20);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");

      if(trim($this->mgt_nota_fiscal_fone_fax->Text) == '')
      {
         $linha = trim($this->mgt_nota_fiscal_fone_comercial->Text) . " / " . trim($this->mgt_nota_fiscal_fone_fax->Text);
      }
      else
      {
         $linha = trim($this->mgt_nota_fiscal_fone_comercial->Text);
      }

      $linha = $this->gera_posicao(1, $linha, 45);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(3, $this->mgt_nota_fiscal_email->Text, 52);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(2, $this->mgt_nota_fiscal_faturamento->Text, 15);
      fwrite($impressora, $linha);

      $posicao = $this->mgt_nota_fiscal_representante->ItemIndex;
      $posicao_resultado = $this->mgt_nota_fiscal_representante->Items[$posicao];

      $linha = $this->gera_posicao(4, trim($posicao) . "-" . trim($posicao_resultado), 12);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");

      if(trim($this->mgt_nota_fiscal_dup_nro_1->Text) != '')
      {
         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_nro_1->Text, 15);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_vlr_1->Text, 15);
         fwrite($impressora, $linha);

         if(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '1')
         {
            $linha = $this->gera_posicao(1, '(A VISTA)', 0);
         }
         elseif(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '2')
         {
            $linha = $this->gera_posicao(1, '(SEM VALOR COMERCIAL)', 0);
         }
         elseif(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '3')
         {
            $linha = $this->gera_posicao(1, '(ANTECIPADO)', 0);
         }
         else
         {
            $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_dt_vcto_1->Text, 15);
         }
         fwrite($impressora, $linha);
      }

      if(trim($this->mgt_nota_fiscal_dup_nro_2->Text) != '')
      {
         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_nro_2->Text, 15);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_vlr_2->Text, 15);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_dt_vcto_2->Text, 15);
         fwrite($impressora, $linha);
      }

      if(trim($this->mgt_nota_fiscal_dup_nro_3->Text) != '')
      {
         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_nro_3->Text, 15);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_vlr_3->Text, 15);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_dt_vcto_3->Text, 15);
         fwrite($impressora, $linha);
      }

      fwrite($impressora, "\n");

      if(trim($this->mgt_nota_fiscal_dup_nro_4->Text) != '')
      {
         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_nro_4->Text, 15);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_vlr_4->Text, 15);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_dt_vcto_4->Text, 15);
         fwrite($impressora, $linha);
      }

      if(trim($this->mgt_nota_fiscal_dup_nro_5->Text) != '')
      {
         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_nro_5->Text, 15);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_vlr_5->Text, 15);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_dt_vcto_5->Text, 15);
         fwrite($impressora, $linha);
      }

      if(trim($this->mgt_nota_fiscal_dup_nro_6->Text) != '')
      {
         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_nro_6->Text, 15);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_vlr_6->Text, 15);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_dup_dt_vcto_6->Text, 15);
         fwrite($impressora, $linha);
      }

      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");

      //*** Lista os Produtos da Nota Fiscal ***

      $conta_produto_minimo = 1;
      $conta_produto_maximo = 22;

      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->First();

      if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
      {
         while((((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)and($conta_produto_minimo <= $conta_produto_maximo)))
         {
            $linha = $this->gera_posicao(1, GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo'], 6);
            fwrite($impressora, $linha);

            if(trim($this->mgt_nota_fiscal_emite_lote->ItemIndex) == 'S')
            {
               $linha = $this->gera_posicao(2, GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao'], 34);
               fwrite($impressora, $linha);

               $linha = $this->gera_posicao(1, " LT: " . GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_lote'], 16);
               fwrite($impressora, $linha);
            }
            else
            {
               $linha = $this->gera_posicao(2, GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao'], 50);
               fwrite($impressora, $linha);
            }

            $linha = $this->gera_posicao(2, GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal'], 4);
            fwrite($impressora, $linha);

            $situacao_tributaria = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_situacao_tributaria'];

            if(strlen(trim($situacao_tributaria)) == 1)
            {
               $situacao_tributaria = '00' . trim($situacao_tributaria);
            }
            elseif(strlen(trim($situacao_tributaria)) == 2)
            {
               $situacao_tributaria = '0' . trim($situacao_tributaria);
            }

            $linha = $this->gera_posicao(1, $situacao_tributaria, 6);
            fwrite($impressora, $linha);

            $linha = $this->gera_posicao(1, GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_unidade'], 4);
            fwrite($impressora, $linha);

            if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade'] - intval(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade'])) > 0)
            {
               $linha = $this->gera_posicao_numerica(1, GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade'], 10);
               fwrite($impressora, $linha);
            }
            else
            {
               $linha = $this->gera_posicao_numerica(1, intval(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade']), 10);
               fwrite($impressora, $linha);
            }

            $linha = $this->gera_posicao_numerica(2, GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_unitario'], 13);
            fwrite($impressora, $linha);

            $linha = $this->gera_posicao_numerica(2, GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total'], 15);
            fwrite($impressora, $linha);

            if(($this->mgt_nota_fiscal_aliquota_icms->Text - intval($this->mgt_nota_fiscal_aliquota_icms->Text)) > 0)
            {
               $linha = $this->gera_posicao(4, $this->mgt_nota_fiscal_aliquota_icms->Text, 5);
               fwrite($impressora, $linha);
            }
            else
            {
               $linha = $this->gera_posicao(4, intval($this->mgt_nota_fiscal_aliquota_icms->Text), 5);
               fwrite($impressora, $linha);
            }

            if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ipi'] - intval(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ipi'])) > 0)
            {
               $linha = $this->gera_posicao(1, GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ipi'], 5);
               fwrite($impressora, $linha);
            }
            else
            {
               $linha = $this->gera_posicao(1, intval(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ipi']), 5);
               fwrite($impressora, $linha);
            }

            $linha = $this->gera_posicao_numerica(1, GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_ipi'], 6);
            fwrite($impressora, $linha . "\n");

            GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Next();

            $conta_produto_minimo = $conta_produto_minimo + 1;
         }
      }

      $posicao_observacao = 1;

      for($ind = $conta_produto_minimo; $ind < $conta_produto_maximo; $ind++)
      {
         $linha = '';

         if($posicao_observacao == 1)
         {
            if(trim($this->mgt_nota_fiscal_observacao_adicional_1->Text) != '')
            {
               $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_observacao_adicional_1->Text, 132);
            }
            else
            {
               $linha = $this->gera_posicao(1, ' ', 132);
            }
         }

         if($posicao_observacao == 2)
         {
            if(trim($this->mgt_nota_fiscal_observacao_adicional_2->Text) != '')
            {
               $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_observacao_adicional_2->Text, 132);
            }
            else
            {
               $linha = $this->gera_posicao(1, ' ', 132);
            }
         }

         if($posicao_observacao == 3)
         {
            if(trim($this->mgt_nota_fiscal_observacao_adicional_3->Text) != '')
            {
               $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_observacao_adicional_3->Text, 132);
            }
            else
            {
               $linha = $this->gera_posicao(1, ' ', 132);
            }
         }

         if($posicao_observacao == 4)
         {
            if(trim($this->mgt_nota_fiscal_observacao_adicional_4->Text) != '')
            {
               $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_observacao_adicional_4->Text, 132);
            }
            else
            {
               $linha = $this->gera_posicao(1, ' ', 132);
            }
         }

         if($posicao_observacao == 5)
         {
            if(trim($this->mgt_nota_fiscal_observacao_adicional_5->Text) != '')
            {
               $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_observacao_adicional_5->Text, 132);
            }
            else
            {
               $linha = $this->gera_posicao(1, ' ', 132);
            }
         }

         if($posicao_observacao == 6)
         {
            if(trim($this->mgt_nota_fiscal_observacao_adicional_6->Text) != '')
            {
               $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_observacao_adicional_6->Text, 132);
            }
            else
            {
               $linha = $this->gera_posicao(1, ' ', 132);
            }
         }

         if($posicao_observacao == 7)
         {
            if(trim($this->mgt_nota_fiscal_observacao_adicional_7->Text) != '')
            {
               $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_observacao_adicional_7->Text, 132);
            }
            else
            {
               $linha = $this->gera_posicao(1, ' ', 132);
            }
         }

         if($posicao_observacao == 8)
         {
            if(trim($this->mgt_nota_fiscal_observacao_adicional_8->Text) != '')
            {
               $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_observacao_adicional_8->Text, 132);
            }
            else
            {
               $linha = $this->gera_posicao(1, ' ', 132);
            }
         }

         if($posicao_observacao == 9)
         {
            if(trim($this->mgt_nota_fiscal_observacao_adicional_9->Text) != '')
            {
               $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_observacao_adicional_9->Text, 132);
            }
            else
            {
               $linha = $this->gera_posicao(1, ' ', 132);
            }
         }

         if($posicao_observacao == 10)
         {
            if(trim($this->mgt_nota_fiscal_observacao_adicional_10->Text) != '')
            {
               $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_observacao_adicional_10->Text, 132);
            }
            else
            {
               $linha = $this->gera_posicao(1, ' ', 132);
            }
         }

         fwrite($impressora, $linha . "\n");

         $posicao_observacao = $posicao_observacao + 1;
      }

      //*** Calculo dos Impostos ***

      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");

      $linha = $this->gera_posicao_numerica(1, $this->mgt_nota_fiscal_base_icms->Text, 18);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao_numerica(4, $this->mgt_nota_fiscal_valor_icms->Text, 22);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao_numerica(6, $this->mgt_nota_fiscal_base_icms_sub->Text, 25);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao_numerica(6, $this->mgt_nota_fiscal_valor_icms_sub->Text, 21);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao_numerica(11, $this->mgt_nota_fiscal_valor_produtos->Text, 22);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");

      $linha = $this->gera_posicao_numerica(1, $this->mgt_nota_fiscal_valor_frete->Text, 18);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao_numerica(4, $this->mgt_nota_fiscal_valor_seguro->Text, 22);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao_numerica(6, $this->mgt_nota_fiscal_outras_despesas->Text, 25);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao_numerica(6, $this->mgt_nota_fiscal_valor_ipi->Text, 21);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao_numerica(11, $this->mgt_nota_fiscal_valor_total->Text, 22);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      //fwrite($impressora, "\n");

      $linha = $this->gera_posicao(1, $this->mgt_nota_fiscal_transportadora_razao_social->Text, 62);
      fwrite($impressora, $linha);

      if(strtoupper(trim($this->mgt_nota_fiscal_pagamento_frete->ItemIndex)) == 'EMPRESA')
      {
         $linha = $this->gera_posicao(17, '1', 1);
         fwrite($impressora, $linha);
      }
      else
      {
         $linha = $this->gera_posicao(17, '2', 1);
         fwrite($impressora, $linha);
      }

      $linha = $this->gera_posicao(6, $this->mgt_nota_fiscal_transportadora_veiculo_placa->Text, 15);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(4, $this->mgt_nota_fiscal_transportadora_veiculo_estado->Text, 2);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(4, $this->mgt_nota_fiscal_transportadora_cnpj->Text, 25);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");

      $linha = $this->gera_posicao(1, trim($this->mgt_nota_fiscal_transportadora_endereco->Text) . ' ' . trim($this->mgt_nota_fiscal_transportadora_complemento->Text) . ' ' . trim($this->mgt_nota_fiscal_transportadora_bairro->Text), 62);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(3, $this->mgt_nota_fiscal_transportadora_cidade->Text, 35);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(4, $this->mgt_nota_fiscal_transportadora_estado->Text, 2);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(5, $this->mgt_nota_fiscal_transportadora_insc_est->Text, 20);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");

      $linha = $this->gera_posicao(3, $this->mgt_nota_fiscal_qtde->Text, 13);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(2, $this->mgt_nota_fiscal_especie->Text, 24);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(2, $this->mgt_nota_fiscal_marca->Text, 20);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(2, $this->mgt_nota_fiscal_vol_numero->Text, 23);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao_numerica(2, $this->mgt_nota_fiscal_peso_bruto->Text, 20);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao_numerica(2, $this->mgt_nota_fiscal_peso_liquido->Text, 20);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");
      fwrite($impressora, "\n");

      if($this->hd_nota_fiscal_imprime_observacao_nota->Value == 1)
      {
         $linha = $this->gera_posicao(1, substr($this->mgt_nota_fiscal_observacao_nota->Text, 0, 80), 80);
         fwrite($impressora, $linha . "\n");

         $linha = $this->gera_posicao(1, substr($this->mgt_nota_fiscal_observacao_nota->Text, 80, 80), 80);
         fwrite($impressora, $linha . "\n");

         $linha = $this->gera_posicao(1, substr($this->mgt_nota_fiscal_observacao_nota->Text, 160, 80), 80);
         fwrite($impressora, $linha . "\n");

         $linha = $this->gera_posicao(1, substr($this->mgt_nota_fiscal_observacao_nota->Text, 240, 80), 80);
         fwrite($impressora, $linha . "\n");

         $linha = $this->gera_posicao(1, substr($this->mgt_nota_fiscal_observacao_nota->Text, 320, 80), 80);
         fwrite($impressora, $linha . "\n");

         $linha = $this->gera_posicao(1, substr($this->mgt_nota_fiscal_observacao_nota->Text, 400, 80), 80);
         fwrite($impressora, $linha . "\n");

         $linha = $this->gera_posicao(1, substr($this->mgt_nota_fiscal_observacao_nota->Text, 480, 80), 80);
         fwrite($impressora, $linha . "\n");
      }
      else
      {
         fwrite($impressora, "\n");
         fwrite($impressora, "\n");
         fwrite($impressora, "\n");
         fwrite($impressora, "\n");
         fwrite($impressora, "\n");
         fwrite($impressora, "\n");
         fwrite($impressora, "\n");
      }

      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");

      fclose($impressora);

      //*** Insere a Nota Fiscal ***

      $Comando_SQL = "insert into mgt_notas_fiscais(";
      $Comando_SQL .= "mgt_nota_fiscal_finalidade, ";
      $Comando_SQL .= "mgt_nota_fiscal_numero, ";
      $Comando_SQL .= "mgt_nota_fiscal_faturamento, ";
      $Comando_SQL .= "mgt_nota_fiscal_pedido, ";
      $Comando_SQL .= "mgt_nota_fiscal_cfop, ";
      $Comando_SQL .= "mgt_nota_fiscal_cfop_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_tipo_nota, ";
      $Comando_SQL .= "mgt_nota_fiscal_natureza_operacao, ";
      $Comando_SQL .= "mgt_nota_fiscal_natureza_operacao_imp, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_numero, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_codigo, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_nome, ";
      $Comando_SQL .= "mgt_nota_fiscal_razao_social, ";
      $Comando_SQL .= "mgt_nota_fiscal_inscricao_municipal, ";
      $Comando_SQL .= "mgt_nota_fiscal_inscricao_estadual, ";
      $Comando_SQL .= "mgt_nota_fiscal_endereco, ";
      $Comando_SQL .= "mgt_nota_fiscal_complemento, ";
      $Comando_SQL .= "mgt_nota_fiscal_bairro, ";
      $Comando_SQL .= "mgt_nota_fiscal_cidade, ";
      $Comando_SQL .= "mgt_nota_fiscal_estado, ";
      $Comando_SQL .= "mgt_nota_fiscal_cep, ";
      $Comando_SQL .= "mgt_nota_fiscal_pais, ";
      $Comando_SQL .= "mgt_nota_fiscal_fone, ";
      $Comando_SQL .= "mgt_nota_fiscal_fax, ";
      $Comando_SQL .= "mgt_nota_fiscal_contato, ";
      $Comando_SQL .= "mgt_nota_fiscal_ddd, ";
      $Comando_SQL .= "mgt_nota_fiscal_fone_comercial, ";
      $Comando_SQL .= "mgt_nota_fiscal_fone_celular, ";
      $Comando_SQL .= "mgt_nota_fiscal_fone_fax, ";
      $Comando_SQL .= "mgt_nota_fiscal_email, ";
      $Comando_SQL .= "mgt_nota_fiscal_site, ";
      $Comando_SQL .= "mgt_nota_fiscal_endereco_cobranca, ";
      $Comando_SQL .= "mgt_nota_fiscal_complemento_cobranca, ";
      $Comando_SQL .= "mgt_nota_fiscal_bairro_cobranca, ";
      $Comando_SQL .= "mgt_nota_fiscal_cidade_cobranca, ";
      $Comando_SQL .= "mgt_nota_fiscal_estado_cobranca, ";
      $Comando_SQL .= "mgt_nota_fiscal_cep_cobranca, ";
      $Comando_SQL .= "mgt_nota_fiscal_pais_cobranca, ";
      $Comando_SQL .= "mgt_nota_fiscal_opcao_cobranca, ";
      $Comando_SQL .= "mgt_nota_fiscal_fone_cobranca, ";
      $Comando_SQL .= "mgt_nota_fiscal_fax_cobranca, ";
      $Comando_SQL .= "mgt_nota_fiscal_endereco_entrega, ";
      $Comando_SQL .= "mgt_nota_fiscal_complemento_entrega, ";
      $Comando_SQL .= "mgt_nota_fiscal_bairro_entrega, ";
      $Comando_SQL .= "mgt_nota_fiscal_cidade_entrega, ";
      $Comando_SQL .= "mgt_nota_fiscal_estado_entrega, ";
      $Comando_SQL .= "mgt_nota_fiscal_cep_entrega, ";
      $Comando_SQL .= "mgt_nota_fiscal_pais_entrega, ";
      $Comando_SQL .= "mgt_nota_fiscal_opcao_entrega, ";
      $Comando_SQL .= "mgt_nota_fiscal_fone_entrega, ";
      $Comando_SQL .= "mgt_nota_fiscal_fax_entrega, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_desconto, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_tipo_faturamento, ";
      $Comando_SQL .= "mgt_nota_fiscal_tipo_transporte, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora, ";
      $Comando_SQL .= "mgt_nota_fiscal_valor_pedido, ";
      $Comando_SQL .= "mgt_nota_fiscal_valor_desconto, ";
      $Comando_SQL .= "mgt_nota_fiscal_valor_frete, ";
      $Comando_SQL .= "mgt_nota_fiscal_valor_ipi, ";
      $Comando_SQL .= "mgt_nota_fiscal_valor_total, ";
      $Comando_SQL .= "mgt_nota_fiscal_observacao_nota, ";
      $Comando_SQL .= "mgt_nota_fiscal_observacao_faturamento, ";
      $Comando_SQL .= "mgt_nota_fiscal_imprime_observacao_nota, ";
      $Comando_SQL .= "mgt_nota_fiscal_emite_lote, ";
      $Comando_SQL .= "mgt_nota_fiscal_pagamento_frete, ";
      $Comando_SQL .= "mgt_nota_fiscal_aliquota_icms, ";
      $Comando_SQL .= "mgt_nota_fiscal_base_aliquota_icms_reduzida, ";
      $Comando_SQL .= "mgt_nota_fiscal_qtde, ";
      $Comando_SQL .= "mgt_nota_fiscal_especie, ";
      $Comando_SQL .= "mgt_nota_fiscal_marca, ";
      $Comando_SQL .= "mgt_nota_fiscal_peso_bruto, ";
      $Comando_SQL .= "mgt_nota_fiscal_peso_liquido, ";
      $Comando_SQL .= "mgt_nota_fiscal_revenda, ";
      $Comando_SQL .= "mgt_nota_fiscal_consumo, ";
      $Comando_SQL .= "mgt_nota_fiscal_zerar_base_icms, ";
      $Comando_SQL .= "mgt_nota_fiscal_data, ";
      $Comando_SQL .= "mgt_nota_fiscal_data_entrega, ";
      $Comando_SQL .= "mgt_nota_fiscal_data_emissao, ";
      $Comando_SQL .= "mgt_nota_fiscal_suframa_desconto_icms, ";
      $Comando_SQL .= "mgt_nota_fiscal_suframa_desconto_pis_cofins, ";
      $Comando_SQL .= "mgt_nota_fiscal_suframa, ";
      $Comando_SQL .= "mgt_nota_fiscal_ordem_compra, ";
      $Comando_SQL .= "mgt_nota_fiscal_representante, ";
      $Comando_SQL .= "mgt_nota_fiscal_banco, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_nro_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_forma_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_obs_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_docto_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_nro_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_forma_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_obs_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_docto_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_nro_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_forma_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_obs_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_docto_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_nro_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_forma_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_obs_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_docto_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_nro_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_forma_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_obs_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_docto_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_nro_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_forma_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_obs_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_docto_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_nro_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_forma_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_obs_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_docto_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_nro_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_forma_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_obs_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_docto_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_nro_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_forma_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_obs_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_docto_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_nro_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_forma_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_obs_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_docto_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_nro_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_forma_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_obs_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_docto_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_11, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_nro_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_forma_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_cod_bco_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_dup_obs_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_docto_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_vlr_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_imp_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_bol_avul_cart_12, ";
      $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_1, ";
      $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_2, ";
      $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_3, ";
      $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_4, ";
      $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_5, ";
      $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_6, ";
      $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_7, ";
      $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_8, ";
      $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_9, ";
      $Comando_SQL .= "mgt_nota_fiscal_observacao_adicional_10, ";
      $Comando_SQL .= "mgt_nota_fiscal_base_icms, ";
      $Comando_SQL .= "mgt_nota_fiscal_valor_icms, ";
      $Comando_SQL .= "mgt_nota_fiscal_valor_seguro, ";
      $Comando_SQL .= "mgt_nota_fiscal_base_icms_sub, ";
      $Comando_SQL .= "mgt_nota_fiscal_valor_icms_sub, ";
      $Comando_SQL .= "mgt_nota_fiscal_valor_produtos, ";
      $Comando_SQL .= "mgt_nota_fiscal_outras_despesas, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora_cnpj, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora_razao_social, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora_endereco, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora_complemento, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora_bairro, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora_cidade, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora_estado, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora_cep, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora_insc_est, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora_insc_mun, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora_veiculo_estado, ";
      $Comando_SQL .= "mgt_nota_fiscal_transportadora_veiculo_placa, ";
      $Comando_SQL .= "mgt_nota_fiscal_descricao_condicao_pgto, ";
      $Comando_SQL .= "mgt_nota_fiscal_exportacao_uf_emb, ";
      $Comando_SQL .= "mgt_nota_fiscal_exportacao_local_emb) ";
      $Comando_SQL .= "values(";
      $Comando_SQL .= "'" . "PRD" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_numero->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_faturamento->Text . "', ";
      $Comando_SQL .= "'" . $this->hd_numero_pedido->Value . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cfop->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cfop_2->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_tipo_nota->ItemIndex . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_natureza_operacao->ItemIndex . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_natureza_operacao_imp->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_numero->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_codigo->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_nome->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_razao_social->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_inscricao_municipal->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_inscricao_estadual->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_endereco->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_complemento->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_bairro->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cidade->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_estado->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cep->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_pais->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fax->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_contato->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_ddd->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_comercial->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_celular->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_fax->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_email->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_site->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_endereco_cobranca->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_complemento_cobranca->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_bairro_cobranca->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cidade_cobranca->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_estado_cobranca->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cep_cobranca->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_pais_cobranca->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_opcao_cobranca->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_cobranca->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fax_cobranca->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_endereco_entrega->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_complemento_entrega->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_bairro_entrega->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cidade_entrega->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_estado_entrega->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cep_entrega->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_pais_entrega->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_opcao_entrega->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_entrega->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fax_entrega->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_desconto->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_tipo_faturamento->ItemIndex . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_tipo_transporte->ItemIndex . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora->ItemIndex . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_produtos->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_desconto->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_frete->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_ipi->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_total->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_nota->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_faturamento->Text . "', ";

      if($this->hd_nota_fiscal_imprime_observacao_nota->Value == 1)
      {
         $Comando_SQL .= "'S', ";
      }
      else
      {
         $Comando_SQL .= "'N', ";
      }

      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_emite_lote->ItemIndex . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_pagamento_frete->ItemIndex . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_aliquota_icms->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_base_aliquota_icms_reduzida->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_qtde->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_especie->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_marca->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_peso_bruto->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_peso_liquido->Text . "', ";

      if($this->hd_nota_fiscal_revenda->Value == 1)
      {
         $Comando_SQL .= "'S', ";
      }
      else
      {
         $Comando_SQL .= "'N', ";
      }

      if($this->hd_nota_fiscal_consumo->Value == 1)
      {
         $Comando_SQL .= "'S', ";
      }
      else
      {
         $Comando_SQL .= "'N', ";
      }

      if($this->hd_nota_fiscal_zerar_base_icms->Value == 1)
      {
         $Comando_SQL .= "'S', ";
      }
      else
      {
         $Comando_SQL .= "'N', ";
      }

      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data->Text)) . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_entrega->Text)) . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "', ";

      if(trim($this->mgt_nota_fiscal_suframa->Text) == '')
      {
         $this->mgt_nota_fiscal_suframa_desconto_icms->Text = '0';
         $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text = '0';
      }
      else
      {
         if(trim($this->mgt_nota_fiscal_suframa_desconto_icms->Text) == '')
         {
            $this->mgt_nota_fiscal_suframa_desconto_icms->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text) == '')
         {
            $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text = '0';
         }
      }

      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_suframa_desconto_icms->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_suframa->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_ordem_compra->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_representante->ItemIndex . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";

      //*** 1 - Parcela ***
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_1->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_1->Value . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_1->Text)) . "', ";
      $Comando_SQL .= "'" . "0000-00-00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_1->Text . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_1->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_1->Text . "', ";
      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "N" . "', ";

      //*** 2 - Parcela ***
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_2->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_2->Value . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_2->Text)) . "', ";
      $Comando_SQL .= "'" . "0000-00-00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_2->Text . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_2->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_2->Text . "', ";
      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "N" . "', ";

      //*** 3 - Parcela ***
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_3->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_3->Value . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_3->Text)) . "', ";
      $Comando_SQL .= "'" . "0000-00-00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_3->Text . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_3->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_3->Text . "', ";
      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "N" . "', ";

      //*** 4 - Parcela ***
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_4->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_4->Value . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_4->Text)) . "', ";
      $Comando_SQL .= "'" . "0000-00-00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_4->Text . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_4->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_4->Text . "', ";
      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "N" . "', ";

      //*** 5 - Parcela ***
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_5->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_5->Value . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_5->Text)) . "', ";
      $Comando_SQL .= "'" . "0000-00-00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_5->Text . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_5->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_5->Text . "', ";
      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "N" . "', ";

      //*** 6 - Parcela ***
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_6->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_6->Value . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_6->Text)) . "', ";
      $Comando_SQL .= "'" . "0000-00-00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_6->Text . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_6->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_6->Text . "', ";
      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "N" . "', ";

      //*** 7 - Parcela ***
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_7->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_7->Value . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_7->Text)) . "', ";
      $Comando_SQL .= "'" . "0000-00-00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_7->Text . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_7->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_7->Text . "', ";
      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "N" . "', ";

      //*** 8 - Parcela ***
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_8->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_8->Value . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_8->Text)) . "', ";
      $Comando_SQL .= "'" . "0000-00-00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_8->Text . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_8->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_8->Text . "', ";
      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "N" . "', ";

      //*** 9 - Parcela ***
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_9->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_9->Value . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_9->Text)) . "', ";
      $Comando_SQL .= "'" . "0000-00-00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_9->Text . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_9->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_9->Text . "', ";
      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "N" . "', ";

      //*** 10 - Parcela ***
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_10->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_10->Value . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_10->Text)) . "', ";
      $Comando_SQL .= "'" . "0000-00-00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_10->Text . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_10->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_10->Text . "', ";
      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "N" . "', ";

      //*** 11 - Parcela ***
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_11->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_11->Value . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_11->Text)) . "', ";
      $Comando_SQL .= "'" . "0000-00-00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_11->Text . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_11->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_11->Text . "', ";
      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "N" . "', ";

      //*** 12 - Parcela ***
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_12->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_12->Value . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_12->Text)) . "', ";
      $Comando_SQL .= "'" . "0000-00-00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_12->Text . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . "0.00" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_12->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_12->Text . "', ";
      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "N" . "', ";

      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_1->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_2->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_3->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_4->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_5->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_6->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_7->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_8->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_9->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_10->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_base_icms->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_icms->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_seguro->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_base_icms_sub->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_icms_sub->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_produtos->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_outras_despesas->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_cnpj->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_razao_social->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_endereco->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_complemento->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_bairro->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_cidade->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_estado->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_cep->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_insc_est->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_insc_mun->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_veiculo_estado->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_veiculo_placa->Text . "', ";
      $Comando_SQL .= "'" . $this->hd_nota_fiscal_descricao_condicao_pgto->Value . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_exportacao_uf_emb->Text . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_exportacao_local_emb->Text . "') ";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Insere os Produtos da Nota Fiscal ***

      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->First();

      if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
         {
            $Comando_SQL = "insert into mgt_notas_fiscais_produtos(";
            $Comando_SQL .= "mgt_nota_fiscal_produto_finalidade, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_numero_nota, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_quantidade, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_codigo, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_descricao, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_valor_unitario, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_valor_total, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_valor_ipi, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_lote, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_referencia, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_posicao, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_descricao_detalhada, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_unidade, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_ipi, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_classificacao_fiscal, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_situacao_tributaria, ";
            $Comando_SQL .= "mgt_nota_fiscal_produto_ncm) ";
            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . "PRD" . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_numero->Text) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_unitario']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_ipi']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_lote']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_referencia']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_posicao']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao_detalhada']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_unidade']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ipi']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal']) . "', ";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_situacao_tributaria']) . "',";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Seleciona o Produto para Obter o Estoque ***

            $Comando_SQL = "select * from mgt_produtos";
            $Comando_SQL .= " where ";
            $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "'";

            GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
            GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

            //*** Registra o Movimento de Estoque ***

            if($_SESSION['login_estoque'] == "S")
            {
               $qtde_atual = 0;
               $qtde_anterior = 0;
               $qtde_informada = 0;

               $qtde_anterior = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'];
               $qtde_informada = trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade']);

               if(trim($this->mgt_nota_fiscal_tipo_nota->ItemIndex) == '0')
               {
                  $qtde_atual = $qtde_anterior + $qtde_informada;
               }
               else
               {
                  $qtde_atual = $qtde_anterior - $qtde_informada;
               }

               $Comando_SQL = "insert into mgt_movtos_estoque(";
               $Comando_SQL .= "mgt_movto_produto_codigo, ";
               $Comando_SQL .= "mgt_movto_produto_codigo_interno, ";
               $Comando_SQL .= "mgt_movto_produto_titulo, ";
               $Comando_SQL .= "mgt_movto_tipo, ";
               $Comando_SQL .= "mgt_movto_data, ";
               $Comando_SQL .= "mgt_movto_qtde_anterior, ";
               $Comando_SQL .= "mgt_movto_qtde_informada, ";
               $Comando_SQL .= "mgt_movto_qtde_atual, ";
               $Comando_SQL .= "mgt_movto_nota, ";
               $Comando_SQL .= "mgt_movto_nro_entrada_saida) ";
               $Comando_SQL .= "values(";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_referencia']) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao']) . "',";

               if(trim($this->mgt_nota_fiscal_tipo_nota->ItemIndex) == '0')
               {
                  $Comando_SQL .= "'" . "1" . "',";
               }
               else
               {
                  $Comando_SQL .= "'" . "2" . "',";
               }

               $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
               $Comando_SQL .= "'" . $qtde_anterior . "',";
               $Comando_SQL .= "'" . $qtde_informada . "',";
               $Comando_SQL .= "'" . $qtde_atual . "',";
               $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_numero->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_faturamento->Text) . "')";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               //*** Atualiza o Estoque no Cadastro do Produto ***

               $Comando_SQL = "update mgt_produtos set ";
               $Comando_SQL .= "mgt_produto_estoque_atual = '" . $qtde_atual . "' ";
               $Comando_SQL .= " where ";
               $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "'";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();
            }
            GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Next();
         }
      }

      //*** Atualiza o Numero da Ultima Nota Fiscal ***

      /*
      $Comando_SQL = "update mgt_numero_nota_anterior set ";
      $Comando_SQL .= "mgt_numero_nota_anterior_data = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "',";
      $Comando_SQL .= "mgt_numero_nota_anterior_numero = '" . trim($this->mgt_nota_fiscal_numero->Text) . "'";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();
      */

      //*** Altera o Status do Pedido de Faturamento ***

      $Comando_SQL = "update mgt_faturamentos set ";
      $Comando_SQL .= "mgt_faturamento_status = 'Faturado' ";
      $Comando_SQL .= "Where mgt_faturamento_numero = '" . trim($this->mgt_nota_fiscal_faturamento->Text) . "'";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Altera os Dados de Compras do Cliente ***

      /*
      $Comando_SQL = "update mgt_clientes set ";
      $Comando_SQL .= "mgt_cliente_data_ultima_compra = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "', ";
      $Comando_SQL .= "mgt_cliente_ultimo_valor = '" . $this->mgt_nota_fiscal_valor_produtos->Text . "' ";
      $Comando_SQL .= "Where mgt_cliente_numero = '" . trim($this->mgt_nota_fiscal_cliente_numero->Text) . "'";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      $this->confirmacao->Top = 825;
      $this->confirmacao->IsVisible = false;
      $this->hd_bt_sim_clicado->Value = 0;
      */

      //*** Imprime a Nota Fiscal ***
      /*
      if($this->hd_nota_fiscal_nao_imprimir->Value == 0)
      {

      if(strtoupper(substr(trim($caminho_arquivo), 0, 2)) != 'C:')
      {
      exec('lpr ' . trim($caminho_arquivo));
      }
      else
      {
      exec('type ' . trim($caminho_arquivo) . ' > lpt1');
      }

      }
      */

      //*** Limpa os Campos para o Proximo Faturamento ***

      $this->limpa_campos();

      //*** Fecha a Janela ***

      redirect('nf_emissao_nota.php');
   }

   public function imprime_programada()
   {
      if($this->hd_nota_fiscal_imprime_observacao_nota->Value <> 1)
      {
         $this->mgt_nota_fiscal_observacao_nota->Text = '';
      }

      //*** Seleciona a Venda Programada ***
      $Comando_SQL = "select *,date_format(mgt_programada_data_emissao, '%d/%m/%Y') AS mgt_programada_data_emissao,date_format(mgt_programada_data, '%d/%m/%Y') AS mgt_programada_data,date_format(mgt_programada_data_entrega, '%d/%m/%Y') AS mgt_programada_data_entrega from mgt_programadas where mgt_programada_finalidade = 'PRD' And mgt_programada_numero = " . trim($this->mgt_nota_fiscal_numero->Text);

      GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
      GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
      {
         $this->MSG_Erro->Caption = 'Este Numero de Venda Programada ja existe! Por favor, informe o Numero correto.';

         $this->confirmacao->Top = 825;
         $this->confirmacao->IsVisible = false;
         $this->hd_bt_sim_clicado->Value = 0;
      }
      else
      {
         //*** Insere a Venda Programada ***

         $Comando_SQL = "insert into mgt_programadas(";
         $Comando_SQL .= "mgt_programada_finalidade, ";
         $Comando_SQL .= "mgt_programada_numero, ";
         $Comando_SQL .= "mgt_programada_faturamento, ";
         $Comando_SQL .= "mgt_programada_pedido, ";
         $Comando_SQL .= "mgt_programada_cfop, ";
         $Comando_SQL .= "mgt_programada_cfop_2, ";
         $Comando_SQL .= "mgt_programada_tipo_nota, ";
         $Comando_SQL .= "mgt_programada_natureza_operacao, ";
         $Comando_SQL .= "mgt_programada_natureza_operacao_imp, ";
         $Comando_SQL .= "mgt_programada_cliente_numero, ";
         $Comando_SQL .= "mgt_programada_cliente_codigo, ";
         $Comando_SQL .= "mgt_programada_cliente_nome, ";
         $Comando_SQL .= "mgt_programada_razao_social, ";
         $Comando_SQL .= "mgt_programada_inscricao_municipal, ";
         $Comando_SQL .= "mgt_programada_inscricao_estadual, ";
         $Comando_SQL .= "mgt_programada_endereco, ";
         $Comando_SQL .= "mgt_programada_complemento, ";
         $Comando_SQL .= "mgt_programada_bairro, ";
         $Comando_SQL .= "mgt_programada_cidade, ";
         $Comando_SQL .= "mgt_programada_estado, ";
         $Comando_SQL .= "mgt_programada_cep, ";
         $Comando_SQL .= "mgt_programada_pais, ";
         $Comando_SQL .= "mgt_programada_fone, ";
         $Comando_SQL .= "mgt_programada_fax, ";
         $Comando_SQL .= "mgt_programada_contato, ";
         $Comando_SQL .= "mgt_programada_ddd, ";
         $Comando_SQL .= "mgt_programada_fone_comercial, ";
         $Comando_SQL .= "mgt_programada_fone_celular, ";
         $Comando_SQL .= "mgt_programada_fone_fax, ";
         $Comando_SQL .= "mgt_programada_email, ";
         $Comando_SQL .= "mgt_programada_site, ";
         $Comando_SQL .= "mgt_programada_endereco_cobranca, ";
         $Comando_SQL .= "mgt_programada_complemento_cobranca, ";
         $Comando_SQL .= "mgt_programada_bairro_cobranca, ";
         $Comando_SQL .= "mgt_programada_cidade_cobranca, ";
         $Comando_SQL .= "mgt_programada_estado_cobranca, ";
         $Comando_SQL .= "mgt_programada_cep_cobranca, ";
         $Comando_SQL .= "mgt_programada_pais_cobranca, ";
         $Comando_SQL .= "mgt_programada_opcao_cobranca, ";
         $Comando_SQL .= "mgt_programada_fone_cobranca, ";
         $Comando_SQL .= "mgt_programada_fax_cobranca, ";
         $Comando_SQL .= "mgt_programada_endereco_entrega, ";
         $Comando_SQL .= "mgt_programada_complemento_entrega, ";
         $Comando_SQL .= "mgt_programada_bairro_entrega, ";
         $Comando_SQL .= "mgt_programada_cidade_entrega, ";
         $Comando_SQL .= "mgt_programada_estado_entrega, ";
         $Comando_SQL .= "mgt_programada_cep_entrega, ";
         $Comando_SQL .= "mgt_programada_pais_entrega, ";
         $Comando_SQL .= "mgt_programada_opcao_entrega, ";
         $Comando_SQL .= "mgt_programada_fone_entrega, ";
         $Comando_SQL .= "mgt_programada_fax_entrega, ";
         $Comando_SQL .= "mgt_programada_cliente_desconto, ";
         $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_1, ";
         $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_2, ";
         $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_3, ";
         $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_4, ";
         $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_5, ";
         $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_6, ";
         $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_7, ";
         $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_8, ";
         $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_9, ";
         $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_10, ";
         $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_11, ";
         $Comando_SQL .= "mgt_programada_cliente_condicao_pgto_12, ";
         $Comando_SQL .= "mgt_programada_tipo_faturamento, ";
         $Comando_SQL .= "mgt_programada_tipo_transporte, ";
         $Comando_SQL .= "mgt_programada_transportadora, ";
         $Comando_SQL .= "mgt_programada_valor_pedido, ";
         $Comando_SQL .= "mgt_programada_valor_desconto, ";
         $Comando_SQL .= "mgt_programada_valor_frete, ";
         $Comando_SQL .= "mgt_programada_valor_ipi, ";
         $Comando_SQL .= "mgt_programada_valor_total, ";
         $Comando_SQL .= "mgt_programada_observacao_nota, ";
         $Comando_SQL .= "mgt_programada_observacao_faturamento, ";
         $Comando_SQL .= "mgt_programada_imprime_observacao_nota, ";
         $Comando_SQL .= "mgt_programada_emite_lote, ";
         $Comando_SQL .= "mgt_programada_pagamento_frete, ";
         $Comando_SQL .= "mgt_programada_aliquota_icms, ";
         $Comando_SQL .= "mgt_programada_base_aliquota_icms_reduzida, ";
         $Comando_SQL .= "mgt_programada_qtde, ";
         $Comando_SQL .= "mgt_programada_especie, ";
         $Comando_SQL .= "mgt_programada_marca, ";
         $Comando_SQL .= "mgt_programada_peso_bruto, ";
         $Comando_SQL .= "mgt_programada_peso_liquido, ";
         $Comando_SQL .= "mgt_programada_revenda, ";
         $Comando_SQL .= "mgt_programada_consumo, ";
         $Comando_SQL .= "mgt_programada_zerar_base_icms, ";
         $Comando_SQL .= "mgt_programada_data, ";
         $Comando_SQL .= "mgt_programada_data_entrega, ";
         $Comando_SQL .= "mgt_programada_data_emissao, ";
         $Comando_SQL .= "mgt_programada_suframa, ";
         $Comando_SQL .= "mgt_programada_ordem_compra, ";
         $Comando_SQL .= "mgt_programada_representante, ";
         $Comando_SQL .= "mgt_programada_banco, ";
         $Comando_SQL .= "mgt_programada_dup_nro_1, ";
         $Comando_SQL .= "mgt_programada_dup_forma_1, ";
         $Comando_SQL .= "mgt_programada_dup_dt_vcto_1, ";
         $Comando_SQL .= "mgt_programada_dup_dt_pgto_1, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_1, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_pgto_1, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_juros_1, ";
         $Comando_SQL .= "mgt_programada_dup_cod_bco_1, ";
         $Comando_SQL .= "mgt_programada_dup_obs_1, ";
         $Comando_SQL .= "mgt_programada_bol_docto_1, ";
         $Comando_SQL .= "mgt_programada_bol_vlr_1, ";
         $Comando_SQL .= "mgt_programada_bol_avul_imp_1, ";
         $Comando_SQL .= "mgt_programada_bol_avul_cart_1, ";
         $Comando_SQL .= "mgt_programada_dup_nro_2, ";
         $Comando_SQL .= "mgt_programada_dup_forma_2, ";
         $Comando_SQL .= "mgt_programada_dup_dt_vcto_2, ";
         $Comando_SQL .= "mgt_programada_dup_dt_pgto_2, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_2, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_pgto_2, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_juros_2, ";
         $Comando_SQL .= "mgt_programada_dup_cod_bco_2, ";
         $Comando_SQL .= "mgt_programada_dup_obs_2, ";
         $Comando_SQL .= "mgt_programada_bol_docto_2, ";
         $Comando_SQL .= "mgt_programada_bol_vlr_2, ";
         $Comando_SQL .= "mgt_programada_bol_avul_imp_2, ";
         $Comando_SQL .= "mgt_programada_bol_avul_cart_2, ";
         $Comando_SQL .= "mgt_programada_dup_nro_3, ";
         $Comando_SQL .= "mgt_programada_dup_forma_3, ";
         $Comando_SQL .= "mgt_programada_dup_dt_vcto_3, ";
         $Comando_SQL .= "mgt_programada_dup_dt_pgto_3, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_3, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_pgto_3, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_juros_3, ";
         $Comando_SQL .= "mgt_programada_dup_cod_bco_3, ";
         $Comando_SQL .= "mgt_programada_dup_obs_3, ";
         $Comando_SQL .= "mgt_programada_bol_docto_3, ";
         $Comando_SQL .= "mgt_programada_bol_vlr_3, ";
         $Comando_SQL .= "mgt_programada_bol_avul_imp_3, ";
         $Comando_SQL .= "mgt_programada_bol_avul_cart_3, ";
         $Comando_SQL .= "mgt_programada_dup_nro_4, ";
         $Comando_SQL .= "mgt_programada_dup_forma_4, ";
         $Comando_SQL .= "mgt_programada_dup_dt_vcto_4, ";
         $Comando_SQL .= "mgt_programada_dup_dt_pgto_4, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_4, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_pgto_4, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_juros_4, ";
         $Comando_SQL .= "mgt_programada_dup_cod_bco_4, ";
         $Comando_SQL .= "mgt_programada_dup_obs_4, ";
         $Comando_SQL .= "mgt_programada_bol_docto_4, ";
         $Comando_SQL .= "mgt_programada_bol_vlr_4, ";
         $Comando_SQL .= "mgt_programada_bol_avul_imp_4, ";
         $Comando_SQL .= "mgt_programada_bol_avul_cart_4, ";
         $Comando_SQL .= "mgt_programada_dup_nro_5, ";
         $Comando_SQL .= "mgt_programada_dup_forma_5, ";
         $Comando_SQL .= "mgt_programada_dup_dt_vcto_5, ";
         $Comando_SQL .= "mgt_programada_dup_dt_pgto_5, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_5, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_pgto_5, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_juros_5, ";
         $Comando_SQL .= "mgt_programada_dup_cod_bco_5, ";
         $Comando_SQL .= "mgt_programada_dup_obs_5, ";
         $Comando_SQL .= "mgt_programada_bol_docto_5, ";
         $Comando_SQL .= "mgt_programada_bol_vlr_5, ";
         $Comando_SQL .= "mgt_programada_bol_avul_imp_5, ";
         $Comando_SQL .= "mgt_programada_bol_avul_cart_5, ";
         $Comando_SQL .= "mgt_programada_dup_nro_6, ";
         $Comando_SQL .= "mgt_programada_dup_forma_6, ";
         $Comando_SQL .= "mgt_programada_dup_dt_vcto_6, ";
         $Comando_SQL .= "mgt_programada_dup_dt_pgto_6, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_6, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_pgto_6, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_juros_6, ";
         $Comando_SQL .= "mgt_programada_dup_cod_bco_6, ";
         $Comando_SQL .= "mgt_programada_dup_obs_6, ";
         $Comando_SQL .= "mgt_programada_bol_docto_6, ";
         $Comando_SQL .= "mgt_programada_bol_vlr_6, ";
         $Comando_SQL .= "mgt_programada_bol_avul_imp_6, ";
         $Comando_SQL .= "mgt_programada_bol_avul_cart_6, ";
         $Comando_SQL .= "mgt_programada_dup_nro_7, ";
         $Comando_SQL .= "mgt_programada_dup_forma_7, ";
         $Comando_SQL .= "mgt_programada_dup_dt_vcto_7, ";
         $Comando_SQL .= "mgt_programada_dup_dt_pgto_7, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_7, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_pgto_7, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_juros_7, ";
         $Comando_SQL .= "mgt_programada_dup_cod_bco_7, ";
         $Comando_SQL .= "mgt_programada_dup_obs_7, ";
         $Comando_SQL .= "mgt_programada_bol_docto_7, ";
         $Comando_SQL .= "mgt_programada_bol_vlr_7, ";
         $Comando_SQL .= "mgt_programada_bol_avul_imp_7, ";
         $Comando_SQL .= "mgt_programada_bol_avul_cart_7, ";
         $Comando_SQL .= "mgt_programada_dup_nro_8, ";
         $Comando_SQL .= "mgt_programada_dup_forma_8, ";
         $Comando_SQL .= "mgt_programada_dup_dt_vcto_8, ";
         $Comando_SQL .= "mgt_programada_dup_dt_pgto_8, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_8, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_pgto_8, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_juros_8, ";
         $Comando_SQL .= "mgt_programada_dup_cod_bco_8, ";
         $Comando_SQL .= "mgt_programada_dup_obs_8, ";
         $Comando_SQL .= "mgt_programada_bol_docto_8, ";
         $Comando_SQL .= "mgt_programada_bol_vlr_8, ";
         $Comando_SQL .= "mgt_programada_bol_avul_imp_8, ";
         $Comando_SQL .= "mgt_programada_bol_avul_cart_8, ";
         $Comando_SQL .= "mgt_programada_dup_nro_9, ";
         $Comando_SQL .= "mgt_programada_dup_forma_9, ";
         $Comando_SQL .= "mgt_programada_dup_dt_vcto_9, ";
         $Comando_SQL .= "mgt_programada_dup_dt_pgto_9, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_9, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_pgto_9, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_juros_9, ";
         $Comando_SQL .= "mgt_programada_dup_cod_bco_9, ";
         $Comando_SQL .= "mgt_programada_dup_obs_9, ";
         $Comando_SQL .= "mgt_programada_bol_docto_9, ";
         $Comando_SQL .= "mgt_programada_bol_vlr_9, ";
         $Comando_SQL .= "mgt_programada_bol_avul_imp_9, ";
         $Comando_SQL .= "mgt_programada_bol_avul_cart_9, ";
         $Comando_SQL .= "mgt_programada_dup_nro_10, ";
         $Comando_SQL .= "mgt_programada_dup_forma_10, ";
         $Comando_SQL .= "mgt_programada_dup_dt_vcto_10, ";
         $Comando_SQL .= "mgt_programada_dup_dt_pgto_10, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_10, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_pgto_10, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_juros_10, ";
         $Comando_SQL .= "mgt_programada_dup_cod_bco_10, ";
         $Comando_SQL .= "mgt_programada_dup_obs_10, ";
         $Comando_SQL .= "mgt_programada_bol_docto_10, ";
         $Comando_SQL .= "mgt_programada_bol_vlr_10, ";
         $Comando_SQL .= "mgt_programada_bol_avul_imp_10, ";
         $Comando_SQL .= "mgt_programada_bol_avul_cart_10, ";
         $Comando_SQL .= "mgt_programada_dup_nro_11, ";
         $Comando_SQL .= "mgt_programada_dup_forma_11, ";
         $Comando_SQL .= "mgt_programada_dup_dt_vcto_11, ";
         $Comando_SQL .= "mgt_programada_dup_dt_pgto_11, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_11, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_pgto_11, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_juros_11, ";
         $Comando_SQL .= "mgt_programada_dup_cod_bco_11, ";
         $Comando_SQL .= "mgt_programada_dup_obs_11, ";
         $Comando_SQL .= "mgt_programada_bol_docto_11, ";
         $Comando_SQL .= "mgt_programada_bol_vlr_11, ";
         $Comando_SQL .= "mgt_programada_bol_avul_imp_11, ";
         $Comando_SQL .= "mgt_programada_bol_avul_cart_11, ";
         $Comando_SQL .= "mgt_programada_dup_nro_12, ";
         $Comando_SQL .= "mgt_programada_dup_forma_12, ";
         $Comando_SQL .= "mgt_programada_dup_dt_vcto_12, ";
         $Comando_SQL .= "mgt_programada_dup_dt_pgto_12, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_12, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_pgto_12, ";
         $Comando_SQL .= "mgt_programada_dup_vlr_juros_12, ";
         $Comando_SQL .= "mgt_programada_dup_cod_bco_12, ";
         $Comando_SQL .= "mgt_programada_dup_obs_12, ";
         $Comando_SQL .= "mgt_programada_bol_docto_12, ";
         $Comando_SQL .= "mgt_programada_bol_vlr_12, ";
         $Comando_SQL .= "mgt_programada_bol_avul_imp_12, ";
         $Comando_SQL .= "mgt_programada_bol_avul_cart_12, ";
         $Comando_SQL .= "mgt_programada_observacao_adicional_1, ";
         $Comando_SQL .= "mgt_programada_observacao_adicional_2, ";
         $Comando_SQL .= "mgt_programada_observacao_adicional_3, ";
         $Comando_SQL .= "mgt_programada_observacao_adicional_4, ";
         $Comando_SQL .= "mgt_programada_observacao_adicional_5, ";
         $Comando_SQL .= "mgt_programada_observacao_adicional_6, ";
         $Comando_SQL .= "mgt_programada_observacao_adicional_7, ";
         $Comando_SQL .= "mgt_programada_observacao_adicional_8, ";
         $Comando_SQL .= "mgt_programada_observacao_adicional_9, ";
         $Comando_SQL .= "mgt_programada_observacao_adicional_10, ";
         $Comando_SQL .= "mgt_programada_base_icms, ";
         $Comando_SQL .= "mgt_programada_valor_icms, ";
         $Comando_SQL .= "mgt_programada_valor_seguro, ";
         $Comando_SQL .= "mgt_programada_base_icms_sub, ";
         $Comando_SQL .= "mgt_programada_valor_icms_sub, ";
         $Comando_SQL .= "mgt_programada_valor_produtos, ";
         $Comando_SQL .= "mgt_programada_outras_despesas, ";
         $Comando_SQL .= "mgt_programada_transportadora_cnpj, ";
         $Comando_SQL .= "mgt_programada_transportadora_razao_social, ";
         $Comando_SQL .= "mgt_programada_transportadora_endereco, ";
         $Comando_SQL .= "mgt_programada_transportadora_complemento, ";
         $Comando_SQL .= "mgt_programada_transportadora_bairro, ";
         $Comando_SQL .= "mgt_programada_transportadora_cidade, ";
         $Comando_SQL .= "mgt_programada_transportadora_estado, ";
         $Comando_SQL .= "mgt_programada_transportadora_cep, ";
         $Comando_SQL .= "mgt_programada_transportadora_insc_est, ";
         $Comando_SQL .= "mgt_programada_transportadora_insc_mun, ";
         $Comando_SQL .= "mgt_programada_transportadora_veiculo_estado, ";
         $Comando_SQL .= "mgt_programada_transportadora_veiculo_placa, ";
         $Comando_SQL .= "mgt_programada_descricao_condicao_pgto) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . "PRD" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_numero->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_faturamento->Text . "', ";
         $Comando_SQL .= "'" . $this->hd_numero_pedido->Value . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cfop->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cfop_2->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_tipo_nota->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_natureza_operacao->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_natureza_operacao_imp->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_numero->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_codigo->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_nome->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_razao_social->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_inscricao_municipal->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_inscricao_estadual->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_endereco->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_complemento->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_bairro->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cidade->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_estado->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cep->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_pais->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fax->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_contato->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_ddd->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_comercial->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_celular->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_fax->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_email->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_site->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_endereco_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_complemento_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_bairro_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cidade_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_estado_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cep_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_pais_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_opcao_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fax_cobranca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_endereco_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_complemento_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_bairro_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cidade_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_estado_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cep_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_pais_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_opcao_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fone_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_fax_entrega->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_desconto->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_tipo_faturamento->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_tipo_transporte->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_produtos->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_desconto->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_frete->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_ipi->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_total->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_nota->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_faturamento->Text . "', ";

         if($this->hd_nota_fiscal_imprime_observacao_nota->Value == 1)
         {
            $Comando_SQL .= "'S', ";
         }
         else
         {
            $Comando_SQL .= "'N', ";
         }

         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_emite_lote->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_pagamento_frete->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_aliquota_icms->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_base_aliquota_icms_reduzida->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_qtde->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_especie->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_marca->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_peso_bruto->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_peso_liquido->Text . "', ";

         if($this->hd_nota_fiscal_revenda->Value == 1)
         {
            $Comando_SQL .= "'S', ";
         }
         else
         {
            $Comando_SQL .= "'N', ";
         }

         if($this->hd_nota_fiscal_consumo->Value == 1)
         {
            $Comando_SQL .= "'S', ";
         }
         else
         {
            $Comando_SQL .= "'N', ";
         }

         if($this->hd_nota_fiscal_zerar_base_icms->Value == 1)
         {
            $Comando_SQL .= "'S', ";
         }
         else
         {
            $Comando_SQL .= "'N', ";
         }

         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data->Text)) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_entrega->Text)) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_suframa->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_ordem_compra->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_representante->ItemIndex . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";

         //*** 1 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_1->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_1->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_1->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_1->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_1->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_1->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 2 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_2->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_2->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_2->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_2->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_2->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_2->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 3 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_3->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_3->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_3->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_3->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_3->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_3->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 4 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_4->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_4->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_4->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_4->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_4->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_4->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 5 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_5->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_5->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_5->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_5->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_5->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_5->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 6 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_6->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_6->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_6->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_6->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_6->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_6->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 7 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_7->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_7->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_7->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_7->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_7->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_7->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 8 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_8->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_8->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_8->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_8->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_8->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_8->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 9 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_9->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_9->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_9->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_9->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_9->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_9->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 10 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_10->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_10->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_10->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_10->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_10->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_10->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 11 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_11->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_11->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_11->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_11->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_11->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_11->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 12 - Parcela ***
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_12->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_forma_12->Value . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_12->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_12->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_banco->ItemIndex . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_nro_12->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_dup_vlr_12->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_1->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_2->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_3->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_4->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_5->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_6->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_7->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_8->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_9->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_observacao_adicional_10->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_base_icms->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_icms->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_seguro->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_base_icms_sub->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_icms_sub->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_produtos->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_outras_despesas->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_cnpj->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_razao_social->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_endereco->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_complemento->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_bairro->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_cidade->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_estado->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_cep->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_insc_est->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_insc_mun->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_veiculo_estado->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_transportadora_veiculo_placa->Text . "', ";
         $Comando_SQL .= "'" . $this->hd_nota_fiscal_descricao_condicao_pgto->Value . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Insere os Produtos da Venda Programada ***

         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->First();

         if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
            {
               $Comando_SQL = "insert into mgt_programadas_produtos(";
               $Comando_SQL .= "mgt_programada_produto_finalidade, ";
               $Comando_SQL .= "mgt_programada_produto_numero_nota, ";
               $Comando_SQL .= "mgt_programada_produto_quantidade, ";
               $Comando_SQL .= "mgt_programada_produto_codigo, ";
               $Comando_SQL .= "mgt_programada_produto_descricao, ";
               $Comando_SQL .= "mgt_programada_produto_valor_unitario, ";
               $Comando_SQL .= "mgt_programada_produto_valor_total, ";
               $Comando_SQL .= "mgt_programada_produto_valor_ipi, ";
               $Comando_SQL .= "mgt_programada_produto_lote, ";
               $Comando_SQL .= "mgt_programada_produto_referencia, ";
               $Comando_SQL .= "mgt_programada_produto_posicao, ";
               $Comando_SQL .= "mgt_programada_produto_descricao_detalhada, ";
               $Comando_SQL .= "mgt_programada_produto_unidade, ";
               $Comando_SQL .= "mgt_programada_produto_ipi, ";
               $Comando_SQL .= "mgt_programada_produto_classificacao_fiscal, ";
               $Comando_SQL .= "mgt_programada_produto_situacao_tributaria, ";
               $Comando_SQL .= "mgt_programada_produto_ncm) ";
               $Comando_SQL .= "values(";
               $Comando_SQL .= "'" . "PRD" . "', ";
               $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_numero->Text) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_unitario']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_ipi']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_lote']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_referencia']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_posicao']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao_detalhada']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_unidade']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ipi']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_situacao_tributaria']) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']) . "')";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               //*** Seleciona o Produto para Obter o Estoque ***

               $Comando_SQL = "select * from mgt_produtos";
               $Comando_SQL .= " where ";
               $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "'";

               GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
               GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

               //*** Registra o Movimento de Estoque ***

               if($_SESSION['login_estoque'] == "S")
               {
                  $qtde_atual = 0;
                  $qtde_anterior = 0;
                  $qtde_informada = 0;

                  $qtde_anterior = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'];
                  $qtde_informada = trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_quantidade']);

                  if(trim($this->mgt_nota_fiscal_tipo_nota->ItemIndex) == '0')
                  {
                     $qtde_atual = $qtde_anterior + $qtde_informada;
                  }
                  else
                  {
                     $qtde_atual = $qtde_anterior - $qtde_informada;
                  }

                  $Comando_SQL = "insert into mgt_movtos_estoque(";
                  $Comando_SQL .= "mgt_movto_produto_codigo, ";
                  $Comando_SQL .= "mgt_movto_produto_codigo_interno, ";
                  $Comando_SQL .= "mgt_movto_produto_titulo, ";
                  $Comando_SQL .= "mgt_movto_tipo, ";
                  $Comando_SQL .= "mgt_movto_data, ";
                  $Comando_SQL .= "mgt_movto_qtde_anterior, ";
                  $Comando_SQL .= "mgt_movto_qtde_informada, ";
                  $Comando_SQL .= "mgt_movto_qtde_atual, ";
                  $Comando_SQL .= "mgt_movto_nota, ";
                  $Comando_SQL .= "mgt_movto_nro_entrada_saida) ";
                  $Comando_SQL .= "values(";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "',";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_referencia']) . "',";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_descricao']) . "',";

                  if(trim($this->mgt_nota_fiscal_tipo_nota->ItemIndex) == '0')
                  {
                     $Comando_SQL .= "'" . "1" . "',";
                  }
                  else
                  {
                     $Comando_SQL .= "'" . "2" . "',";
                  }

                  $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
                  $Comando_SQL .= "'" . $qtde_anterior . "',";
                  $Comando_SQL .= "'" . $qtde_informada . "',";
                  $Comando_SQL .= "'" . $qtde_atual . "',";
                  $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_numero->Text) . "',";
                  $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_faturamento->Text) . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();

                  //*** Atualiza o Estoque no Cadastro do Produto ***

                  $Comando_SQL = "update mgt_produtos set ";
                  $Comando_SQL .= "mgt_produto_estoque_atual = '" . $qtde_atual . "' ";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "'";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
               GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Next();
            }
         }

         //*** Seleciona a Venda Programada ***
         $Comando_SQL = "select *,date_format(mgt_programada_data_emissao, '%d/%m/%Y') AS mgt_programada_data_emissao,date_format(mgt_programada_data, '%d/%m/%Y') AS mgt_programada_data,date_format(mgt_programada_data_entrega, '%d/%m/%Y') AS mgt_programada_data_entrega from mgt_programadas where mgt_programada_finalidade = 'PRD' And mgt_programada_numero = " . trim($this->mgt_nota_fiscal_numero->Text);

         GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
         GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

         //*** Seleciona os Produtos da Venda Programada ***
         $Comando_SQL = "select * from mgt_programadas_produtos where mgt_programada_produto_finalidade = 'PRD' And mgt_programada_produto_numero_nota = " . trim($this->mgt_nota_fiscal_numero->Text) . " Order By mgt_programada_produto_numero";

         GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Open();

         //*** Atualiza o Numero da Ultima Venda Programada ***

         $Comando_SQL = "update mgt_numero_nota_anterior set ";
         $Comando_SQL .= "mgt_numero_nota_anterior_data_prg = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "',";
         $Comando_SQL .= "mgt_numero_nota_anterior_numero_prg = '" . trim($this->mgt_nota_fiscal_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Altera o Status do Pedido de Faturamento ***

         $Comando_SQL = "update mgt_faturamentos set ";
         $Comando_SQL .= "mgt_faturamento_status = 'Faturado' ";
         $Comando_SQL .= "Where mgt_faturamento_numero = '" . trim($this->mgt_nota_fiscal_faturamento->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Altera os Dados de Compras do Cliente ***

         $Comando_SQL = "update mgt_clientes set ";
         $Comando_SQL .= "mgt_cliente_data_ultima_compra = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "', ";
         $Comando_SQL .= "mgt_cliente_ultimo_valor = '" . $this->mgt_nota_fiscal_valor_produtos->Text . "' ";
         $Comando_SQL .= "Where mgt_cliente_numero = '" . trim($this->mgt_nota_fiscal_cliente_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->confirmacao->Top = 825;
         $this->confirmacao->IsVisible = false;
         $this->hd_bt_sim_clicado->Value = 0;

         //*** Limpa os Campos para o Proximo Faturamento ***

         $this->limpa_campos();

         //*** Fecha a Janela ***

         echo "<script language=\"JavaScript\">";
         echo "window.open('nf_emissao_nota_prg.php?mgt_programada_numero=" . trim(GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero']) . "','nf_emissao_nota_prg','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo 'window.location="nf_emissao_nota.php";';
         echo "</script>";
      }
   }

   function mgt_nota_fiscal_tipo_faturamentoChange($sender, $params)
   {
      $this->carrega_tipo_faturamento();
   }

   function mgt_nota_fiscal_descricao_condicao_pgtoJSChange($sender, $params)
   {

?>
      //Adicione seu codigo javascript aqui

      document.nfemissaonotaimp.hd_nota_fiscal_descricao_condicao_pgto.value = document.nfemissaonotaimp.mgt_nota_fiscal_descricao_condicao_pgto[document.nfemissaonotaimp.mgt_nota_fiscal_descricao_condicao_pgto.selectedIndex].value;

<?php

   }


   function mgt_nota_fiscal_descricao_condicao_pgtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_1.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_natureza_operacao_impJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cfop.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_12;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_11;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_10;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_9;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_8;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_7;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_6;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_5;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_4;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_3;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_2;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_vlr_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_1;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_12
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_11
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_10
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_9
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_8
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_7
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_6
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_5
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_4
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_3
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_2
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_1
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_12
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_dup_forma_12.value = '';
   document.nfemissaonotaimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_11
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_dup_forma_11.value = '';
   document.nfemissaonotaimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_10
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_dup_forma_10.value = '';
   document.nfemissaonotaimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_9
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_dup_forma_9.value = '';
   document.nfemissaonotaimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_8
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_dup_forma_8.value = '';
   document.nfemissaonotaimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_7
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_dup_forma_7.value = '';
   document.nfemissaonotaimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_6
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_dup_forma_6.value = '';
   document.nfemissaonotaimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_5
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_dup_forma_5.value = '';
   document.nfemissaonotaimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_4
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_dup_forma_4.value = '';
   document.nfemissaonotaimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_3
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_dup_forma_3.value = '';
   document.nfemissaonotaimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_2
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_dup_forma_2.value = '';
   document.nfemissaonotaimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_1
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_dup_forma_1.value = '';
   document.nfemissaonotaimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_nao_imprimirJSClick($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if(document.nfemissaonotaimp.hd_nota_fiscal_nao_imprimir.value == 0)
   {
      document.nfemissaonotaimp.hd_nota_fiscal_nao_imprimir.value = 1;
   }
   else
   {
      document.nfemissaonotaimp.hd_nota_fiscal_nao_imprimir.value = 0;
   }

<?php

   }

   function mgt_nota_fiscal_nao_imprimirJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_data_emissaoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_data_emissao
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

<?php

   }


   function mgt_nota_fiscal_zerar_base_icmsJSClick($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if(document.nfemissaonotaimp.hd_nota_fiscal_zerar_base_icms.value == 0)
   {
      document.nfemissaonotaimp.hd_nota_fiscal_zerar_base_icms.value = 1;
   }
   else
   {
      document.nfemissaonotaimp.hd_nota_fiscal_zerar_base_icms.value = 0;
   }

   document.nfemissaonotaimp.mgt_nota_fiscal_aliquota_icms.value = '0';
   document.nfemissaonotaimp.mgt_nota_fiscal_base_icms.value = '0.00';
   document.nfemissaonotaimp.mgt_nota_fiscal_valor_icms.value = '0.00';

<?php

   }

   function mgt_nota_fiscal_consumoJSClick($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if(document.nfemissaonotaimp.hd_nota_fiscal_consumo.value == 0)
   {
      document.nfemissaonotaimp.hd_nota_fiscal_consumo.value = 1;
   }
   else
   {
      document.nfemissaonotaimp.hd_nota_fiscal_consumo.value = 0;
   }

<?php

   }

   function mgt_nota_fiscal_revendaJSClick($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if(document.nfemissaonotaimp.hd_nota_fiscal_revenda.value == 0)
   {
      document.nfemissaonotaimp.hd_nota_fiscal_revenda.value = 1;
   }
   else
   {
      document.nfemissaonotaimp.hd_nota_fiscal_revenda.value = 0;
   }

<?php

   }

   function mgt_nota_fiscal_imprime_observacao_notaJSClick($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if(document.nfemissaonotaimp.hd_nota_fiscal_imprime_observacao_nota.value == 0)
   {
      document.nfemissaonotaimp.hd_nota_fiscal_imprime_observacao_nota.value = 1;
   }
   else
   {
      document.nfemissaonotaimp.hd_nota_fiscal_imprime_observacao_nota.value = 0;
   }

<?php

   }

   public function obtem_cfop()
   {
      $this->hd_cfop_st->value = 'N';
      $this->hd_cfop_cst->Value = '';
      $this->hd_cfop_cst_natureza->Value = '';

      $posicao = $this->mgt_nota_fiscal_natureza_operacao->ItemIndex;
      $posicao_resultado = $this->mgt_nota_fiscal_natureza_operacao->Items[$posicao];

      $codigo_cfop = substr($posicao_resultado, 0, 4);

      if(trim($this->mgt_nota_fiscal_estado->Text) == 'SP')
      {
         $Comando_SQL = "select * from mgt_cfops where mgt_cfop_descricao = '" . trim($this->mgt_nota_fiscal_natureza_operacao->ItemIndex) . "' and mgt_cfop_codigo_dentro = '" . $codigo_cfop . "'";
      }
      else
      {
         $Comando_SQL = "select * from mgt_cfops where mgt_cfop_descricao = '" . trim($this->mgt_nota_fiscal_natureza_operacao->ItemIndex) . "' and mgt_cfop_codigo_fora = '" . $codigo_cfop . "'";
      }

      GetConexaoPrincipal()->SQL_MGT_CFOP->Close();
      GetConexaoPrincipal()->SQL_MGT_CFOP->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_CFOP->Open();

      if((GetConexaoPrincipal()->SQL_MGT_CFOP->EOF) != 1)
      {
         if(trim($this->mgt_nota_fiscal_estado->Text) == 'SP')
         {
            $this->mgt_nota_fiscal_aliquota_icms->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_aliquota_1'];
            $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_dentro'];
            $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_dentro_2'];
            $this->hd_cfop_st->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_st'];
            $this->hd_cfop_cst->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cst'];
            $this->hd_cfop_cst_natureza->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cst_natureza'];
            $this->mgt_nota_fiscal_observacao_adicional_3->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_informacoes_complementares'];
         }
         elseif((trim($this->mgt_nota_fiscal_estado->Text) == 'RS')or(trim($this->mgt_nota_fiscal_estado->Text) == 'PR')or(trim($this->mgt_nota_fiscal_estado->Text) == 'SC')or(trim($this->mgt_nota_fiscal_estado->Text) == 'RJ')or(trim($this->mgt_nota_fiscal_estado->Text) == 'MG'))
         {
            $this->mgt_nota_fiscal_aliquota_icms->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_aliquota_2'];
            $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_fora'];
            $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_fora_2'];
            $this->hd_cfop_st->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_st'];
            $this->hd_cfop_cst->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cst'];
            $this->hd_cfop_cst_natureza->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cst_natureza'];
            $this->mgt_nota_fiscal_observacao_adicional_3->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_informacoes_complementares'];
         }
         else
         {
            $this->mgt_nota_fiscal_aliquota_icms->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_aliquota_3'];
            $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_fora'];
            $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_fora_2'];
            $this->hd_cfop_st->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_st'];
            $this->hd_cfop_cst->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cst'];
            $this->hd_cfop_cst_natureza->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cst_natureza'];
            $this->mgt_nota_fiscal_observacao_adicional_3->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_informacoes_complementares'];
         }
      }
      else
      {
         $this->mgt_nota_fiscal_aliquota_icms->Text = '0';
         $this->mgt_nota_fiscal_cfop->Text = '';
         $this->mgt_nota_fiscal_cfop_2->Text = '';
         $this->hd_cfop_st->Value = 'N';
         $this->hd_cfop_cst->Value = '';
         $this->hd_cfop_cst_natureza->Value = '';
         $this->mgt_nota_fiscal_observacao_adicional_3->Text = '';
      }

      if($codigo_cfop < 5101)
      {
         $this->mgt_nota_fiscal_tipo_nota->ItemIndex = '0';
      }
      else
      {
         $this->mgt_nota_fiscal_tipo_nota->ItemIndex = '1';
      }

      //*********************************************************
      //*** Gera a Frase de Aproveitamento de Credito de ICMS ***
      //*********************************************************

      if((trim($_SESSION['login_nfe_regime']) == '1')And((trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_csosn']) == '101')Or(trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_csosn']) == '201')Or(trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_csosn']) == '900')))
      {
         $this->mgt_nota_fiscal_observacao_adicional_3->Text = trim($this->mgt_nota_fiscal_observacao_adicional_3->Text) . ' PERMITE O APROVEITAMENTO DO CREDITO DE ICMS NO VALOR DE R$ ' . trim(number_format((($this->mgt_nota_fiscal_valor_total->Text * GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_aliquota']) / 100), 2, '.', '')) . ' CORRESPONDENTE A ALIQUOTA DE ' . trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_simples_nacional_aliquota']) . '% NOS TERMOS DO ART.23 DA LC 123.';
      }
   }

   function mgt_nota_fiscal_suframa_desconto_pis_cofinsJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_suframa.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_suframa_desconto_icmsJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_suframa_desconto_pis_cofins.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_suframa_desconto_pis_cofinsJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_suframa_desconto_pis_cofins;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_suframa_desconto_icmsJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_suframa_desconto_icms;
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

   //*** FINAL - So Valor ***

<?php

   }


   function mgt_nota_fiscal_faturamentoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_numero.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cliente_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_codigo.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cliente_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_nome.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cliente_nomeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_razao_social.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_razao_socialJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_inscricao_estadual.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_inscricao_estadualJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_inscricao_municipal.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_inscricao_municipalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_enderecoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_complemento.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_complementoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_bairro.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_bairroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cidade.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cidadeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_estado.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_estadoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cep.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cepJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_pais.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_paisJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_fone.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_foneJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_fax.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_faxJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_opcao_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_endereco_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_endereco_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_complemento_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_complemento_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_bairro_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_bairro_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cidade_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cidade_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_estado_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_estado_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cep_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cep_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_pais_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_pais_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_fone_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_fone_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_fax_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_fax_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_opcao_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_endereco_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_endereco_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_complemento_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_complemento_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_bairro_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_bairro_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cidade_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cidade_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_estado_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_estado_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cep_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cep_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_pais_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_pais_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_fone_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_fone_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_fax_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_fax_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_contatoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_ddd.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dddJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_fone_comercial.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_fone_comercialJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_fone_celular.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_fone_celularJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_fone_fax.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_fone_faxJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_email.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_emailJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_site.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_siteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_natureza_operacaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_natureza_operacao_imp.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_tipo_faturamentoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_data_emissao.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_data_emissaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_numero.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_suframa_desconto_icms.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cfopJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cfop_2.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cfop_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_observacao_nota.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_tipo_notaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_desconto.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cliente_descontoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_data.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dataJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_data_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_data_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_emite_lote.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_emite_loteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_ordem_compra.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_suframaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_desconto.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_ordem_compraJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_natureza_operacao.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_observacao_notaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_observacao_faturamento.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_observacao_faturamentoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_imprime_observacao_notaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_bancoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_representante.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_representanteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_1.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_nro_1.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_nro_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_1.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_1.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_2.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_cliente_condicao_pgto_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_nro_2.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_nro_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_2.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_2.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_3.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_cliente_condicao_pgto_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_nro_3.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_nro_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_3.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_3.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_4.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_cliente_condicao_pgto_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_nro_4.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_nro_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_4.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_4.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_5.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_cliente_condicao_pgto_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_nro_5.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_nro_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_5.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_5.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_6.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_cliente_condicao_pgto_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_nro_6.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_nro_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_6.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_6.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_7.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_cliente_condicao_pgto_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_nro_7.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_nro_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_7.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_7.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_8.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_cliente_condicao_pgto_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_nro_8.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_nro_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_8.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_8.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_9.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_cliente_condicao_pgto_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_nro_9.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_nro_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_9.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_9.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_10.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_cliente_condicao_pgto_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_nro_10.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_nro_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_10.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_10.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_11.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_cliente_condicao_pgto_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_nro_11.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_nro_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_11.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_11.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_11JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_cliente_condicao_pgto_12.focus();
     return false;
   }

<?php

   }


   function mgt_nota_fiscal_cliente_condicao_pgto_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_nro_12.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_nro_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_dt_vcto_12.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_dup_vlr_12.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_12JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_observacao_adicional_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_observacao_adicional_2.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_observacao_adicional_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_observacao_adicional_3.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_observacao_adicional_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_observacao_adicional_4.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_observacao_adicional_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_observacao_adicional_5.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_observacao_adicional_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_observacao_adicional_6.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_observacao_adicional_6JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_observacao_adicional_7.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_observacao_adicional_7JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_observacao_adicional_8.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_observacao_adicional_8JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_observacao_adicional_9.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_observacao_adicional_9JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_observacao_adicional_10.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_observacao_adicional_10JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_exportacao_uf_emb.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_pagamento_freteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_tipo_transporte.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_tipo_transporteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadoraJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora_razao_social.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadora_razao_socialJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora_veiculo_placa.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadora_veiculo_placaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora_veiculo_estado.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadora_veiculo_estadoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora_cnpj.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadora_cnpjJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora_insc_est.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadora_insc_estJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora_insc_mun.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadora_insc_munJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora_endereco.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadora_enderecoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora_complemento.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadora_complementoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora_bairro.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadora_bairroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora_cidade.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadora_cidadeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora_estado.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadora_estadoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_transportadora_cep.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_transportadora_cepJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_qtde.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_qtdeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_especie.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_especieJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_marca.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_marcaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_vol_numero.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_vol_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_peso_bruto.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_peso_brutoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_peso_liquido.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_peso_liquidoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_aliquota_icmsJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_base_aliquota_icms_reduzida.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_base_aliquota_icms_reduzidaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_valor_desconto.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_descontoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_base_icms.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_revendaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_consumo.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_consumoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_zerar_base_icms.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_zerar_base_icmsJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_base_icms.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_base_icmsJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_valor_icms.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_icmsJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_base_icms_sub.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_base_icms_subJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_valor_icms_sub.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_icms_subJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_valor_produtos.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_produtosJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_valor_frete.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_freteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_valor_seguro.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_seguroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_outras_despesas.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_outras_despesasJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_valor_ipi.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_ipiJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.mgt_nota_fiscal_valor_total.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_valor_totalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonotaimp.bt_imprimir.focus();
     return false;
   }

<?php

   }

   public function limpa_campos()
   {
      $this->itens_faturamento->TabIndex = 0;
      $this->dados_cliente->TabIndex = 0;

      $this->hd_numero_pedido->Value = '';
      $this->hd_tipo_codigo->Value = '';
      $this->hd_nota_fiscal_imprime_observacao_nota->Value = '1';
      $this->hd_nota_fiscal_nao_imprimir->Value = '0';
      $this->hd_apenas_registra->Value = '0';
      $this->hd_nota_fiscal_descricao_condicao_pgto->Value = '0';
      $this->hd_nota_fiscal_revenda->Value = '0';
      $this->hd_nota_fiscal_consumo->Value = '0';
      $this->hd_nota_fiscal_zerar_base_icms->Value = '0';
      $this->hd_cfop_st->Value = 'N';
      $this->hd_cfop_cst->Value = '';
      $this->hd_cfop_cst_natureza->Value = '';

      $this->MSG_Erro->Caption = '';

      $this->mgt_nota_fiscal_faturamento->Text = '';
      $this->mgt_nota_fiscal_cliente_numero->Text = '';
      $this->mgt_nota_fiscal_cliente_codigo->Text = '';
      $this->mgt_nota_fiscal_cliente_nome->Text = '';
      $this->mgt_nota_fiscal_razao_social->Text = '';
      $this->mgt_nota_fiscal_inscricao_estadual->Text = '';
      $this->mgt_nota_fiscal_inscricao_municipal->Text = '';

      //*** Faturamento ***

      $this->mgt_nota_fiscal_endereco->Text = '';
      $this->mgt_nota_fiscal_complemento->Text = '';
      $this->mgt_nota_fiscal_bairro->Text = '';
      $this->mgt_nota_fiscal_cidade->Text = '';
      $this->mgt_nota_fiscal_estado->Text = '';
      $this->mgt_nota_fiscal_cep->Text = '';
      $this->mgt_nota_fiscal_pais->Text = '';
      $this->mgt_nota_fiscal_fone->Text = '';
      $this->mgt_nota_fiscal_fax->Text = '';

      //*** Entrega ***

      $this->mgt_nota_fiscal_opcao_entrega->Text = '';
      $this->mgt_nota_fiscal_endereco_entrega->Text = '';
      $this->mgt_nota_fiscal_complemento_entrega->Text = '';
      $this->mgt_nota_fiscal_bairro_entrega->Text = '';
      $this->mgt_nota_fiscal_cidade_entrega->Text = '';
      $this->mgt_nota_fiscal_estado_entrega->Text = '';
      $this->mgt_nota_fiscal_cep_entrega->Text = '';
      $this->mgt_nota_fiscal_pais_entrega->Text = '';
      $this->mgt_nota_fiscal_fone_entrega->Text = '';
      $this->mgt_nota_fiscal_fax_entrega->Text = '';

      //*** Cobranca ***

      $this->mgt_nota_fiscal_opcao_cobranca->Text = '';
      $this->mgt_nota_fiscal_endereco_cobranca->Text = '';
      $this->mgt_nota_fiscal_complemento_cobranca->Text = '';
      $this->mgt_nota_fiscal_bairro_cobranca->Text = '';
      $this->mgt_nota_fiscal_cidade_cobranca->Text = '';
      $this->mgt_nota_fiscal_estado_cobranca->Text = '';
      $this->mgt_nota_fiscal_cep_cobranca->Text = '';
      $this->mgt_nota_fiscal_pais_cobranca->Text = '';
      $this->mgt_nota_fiscal_fone_cobranca->Text = '';
      $this->mgt_nota_fiscal_fax_cobranca->Text = '';

      //*** Dados de Contato ***

      $this->mgt_nota_fiscal_contato->Text = '';
      $this->mgt_nota_fiscal_ddd->Text = '';
      $this->mgt_nota_fiscal_fone_comercial->Text = '';
      $this->mgt_nota_fiscal_fone_celular->Text = '';
      $this->mgt_nota_fiscal_fone_fax->Text = '';
      $this->mgt_nota_fiscal_email->Text = '';
      $this->mgt_nota_fiscal_site->Text = '';

      //***Adicionais ***

      $this->mgt_nota_fiscal_natureza_operacao->ItemIndex = '--- SELECIONE A NATUREZA DE OPERACAO ---';
      $this->mgt_nota_fiscal_natureza_operacao_imp->Text = '';
      $this->mgt_nota_fiscal_tipo_faturamento->ItemIndex = 'Nota Fiscal';
      $this->mgt_nota_fiscal_data_emissao->Text = '';
      $this->mgt_nota_fiscal_numero->Text = '';
      $this->mgt_nota_fiscal_cfop->Text = '';
      $this->mgt_nota_fiscal_cfop_2->Text = '';
      $this->mgt_nota_fiscal_tipo_nota->ItemIndex = '1';
      $this->mgt_nota_fiscal_cliente_desconto->Text = '0';
      $this->mgt_nota_fiscal_data->Text = '';
      $this->mgt_nota_fiscal_data_entrega->Text = '';
      $this->mgt_nota_fiscal_emite_lote->ItemIndex = 'N';

      $this->mgt_nota_fiscal_suframa_desconto_icms->Text = '7';
      $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text = '9.25';
      $this->mgt_nota_fiscal_suframa->Text = '';

      $this->mgt_nota_fiscal_ordem_compra->Text = '';
      $this->mgt_nota_fiscal_observacao_nota->Text = '';
      $this->mgt_nota_fiscal_observacao_faturamento->Text = '';
      $this->mgt_nota_fiscal_imprime_observacao_nota->Checked = true;
      $this->mgt_nota_fiscal_nao_imprimir->Checked = false;
      $this->mgt_apenas_registra->Checked = false;

      //*** Condicoes de Pagamento ***

      $this->mgt_nota_fiscal_descricao_condicao_pgto->ItemIndex = '0';
      $this->mgt_nota_fiscal_banco->ItemIndex = '0';
      $this->mgt_nota_fiscal_representante->ItemIndex = '0';
      $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text = '';
      $this->mgt_nota_fiscal_dup_nro_1->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_1->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_1->Text = '';
      $this->mgt_nota_fiscal_dup_forma_1->Value = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text = '';
      $this->mgt_nota_fiscal_dup_nro_2->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_2->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_2->Text = '';
      $this->mgt_nota_fiscal_dup_forma_2->Value = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text = '';
      $this->mgt_nota_fiscal_dup_nro_3->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_3->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_3->Text = '';
      $this->mgt_nota_fiscal_dup_forma_3->Value = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text = '';
      $this->mgt_nota_fiscal_dup_nro_4->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_4->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_4->Text = '';
      $this->mgt_nota_fiscal_dup_forma_4->Value = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text = '';
      $this->mgt_nota_fiscal_dup_nro_5->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_5->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_5->Text = '';
      $this->mgt_nota_fiscal_dup_forma_5->Value = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text = '';
      $this->mgt_nota_fiscal_dup_nro_6->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_6->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_6->Text = '';
      $this->mgt_nota_fiscal_dup_forma_6->Value = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text = '';
      $this->mgt_nota_fiscal_dup_nro_7->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_7->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_7->Text = '';
      $this->mgt_nota_fiscal_dup_forma_7->Value = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text = '';
      $this->mgt_nota_fiscal_dup_nro_8->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_8->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_8->Text = '';
      $this->mgt_nota_fiscal_dup_forma_8->Value = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text = '';
      $this->mgt_nota_fiscal_dup_nro_9->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_9->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_9->Text = '';
      $this->mgt_nota_fiscal_dup_forma_9->Value = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text = '';
      $this->mgt_nota_fiscal_dup_nro_10->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_10->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_10->Text = '';
      $this->mgt_nota_fiscal_dup_forma_10->Value = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text = '';
      $this->mgt_nota_fiscal_dup_nro_11->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_11->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_11->Text = '';
      $this->mgt_nota_fiscal_dup_forma_11->Value = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text = '';
      $this->mgt_nota_fiscal_dup_nro_12->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_12->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_12->Text = '';
      $this->mgt_nota_fiscal_dup_forma_12->Value = '';

      //*** Observacoes Adicionais ***

      $this->mgt_nota_fiscal_observacao_adicional_1->Text = '';
      $this->mgt_nota_fiscal_observacao_adicional_2->Text = '';
      $this->mgt_nota_fiscal_observacao_adicional_3->Text = '';
      $this->mgt_nota_fiscal_observacao_adicional_4->Text = '';
      $this->mgt_nota_fiscal_observacao_adicional_5->Text = '';
      $this->mgt_nota_fiscal_observacao_adicional_6->Text = '';
      $this->mgt_nota_fiscal_observacao_adicional_7->Text = '';
      $this->mgt_nota_fiscal_observacao_adicional_8->Text = '';
      $this->mgt_nota_fiscal_observacao_adicional_9->Text = '';
      $this->mgt_nota_fiscal_observacao_adicional_10->Text = '';
      $this->mgt_nota_fiscal_exportacao_uf_emb->Text = '';
      $this->mgt_nota_fiscal_exportacao_local_emb->Text = '';

      //*** Transportador ***

      $this->mgt_nota_fiscal_pagamento_frete->ItemIndex = 'Empresa';
      $this->mgt_nota_fiscal_tipo_transporte->ItemIndex = 'Rodoviario';
      $this->mgt_nota_fiscal_transportadora->ItemIndex = '0';
      $this->mgt_nota_fiscal_transportadora_razao_social->Text = '';
      $this->mgt_nota_fiscal_transportadora_veiculo_placa->Text = '';
      $this->mgt_nota_fiscal_transportadora_veiculo_estado->Text = '';
      $this->mgt_nota_fiscal_transportadora_cnpj->Text = '';
      $this->mgt_nota_fiscal_transportadora_insc_est->Text = '';
      $this->mgt_nota_fiscal_transportadora_insc_mun->Text = '';
      $this->mgt_nota_fiscal_transportadora_endereco->Text = '';
      $this->mgt_nota_fiscal_transportadora_complemento->Text = '';
      $this->mgt_nota_fiscal_transportadora_bairro->Text = '';
      $this->mgt_nota_fiscal_transportadora_cidade->Text = '';
      $this->mgt_nota_fiscal_transportadora_estado->Text = '';
      $this->mgt_nota_fiscal_transportadora_cep->Text = '';
      $this->mgt_nota_fiscal_qtde->Text = '0';
      $this->mgt_nota_fiscal_especie->Text = '';
      $this->mgt_nota_fiscal_marca->Text = '';
      $this->mgt_nota_fiscal_vol_numero->Text = '';
      $this->mgt_nota_fiscal_peso_bruto->Text = '0';
      $this->mgt_nota_fiscal_peso_liquido->Text = '0';

      //*** Calculo dos Impostos ***

      $this->mgt_nota_fiscal_aliquota_icms->Text = '0';
      $this->mgt_nota_fiscal_base_aliquota_icms_reduzida->Text = '0';
      $this->mgt_nota_fiscal_valor_desconto->Text = '0.00';
      $this->mgt_nota_fiscal_revenda->Checked = false;
      $this->mgt_nota_fiscal_consumo->Checked = false;
      $this->mgt_nota_fiscal_zerar_base_icms->Checked = false;
      $this->mgt_nota_fiscal_base_icms->Text = '0.00';
      $this->mgt_nota_fiscal_valor_icms->Text = '0.00';
      $this->mgt_nota_fiscal_base_icms_sub->Text = '0.00';
      $this->mgt_nota_fiscal_valor_icms_sub->Text = '0.00';
      $this->mgt_nota_fiscal_valor_produtos->Text = '0.00';
      $this->mgt_nota_fiscal_valor_frete->Text = '0.00';
      $this->mgt_nota_fiscal_valor_seguro->Text = '0.00';
      $this->mgt_nota_fiscal_outras_despesas->Text = '0.00';
      $this->mgt_nota_fiscal_valor_ipi->Text = '0.00';
      $this->mgt_nota_fiscal_valor_total->Text = '0.00';

      //*** Fecha a Tela de Confirmacao ***
      $this->confirmacao->Top = 825;
      $this->confirmacao->IsVisible = false;
      $this->hd_bt_sim_clicado->Value = 0;
   }

   function mgt_nota_fiscal_peso_liquidoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_peso_liquido;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_peso_brutoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_peso_bruto;
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

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_nota_fiscal_qtdeJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_qtde
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

<?php

   }

   function mgt_nota_fiscal_cfop_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cfop_2
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

<?php

   }

   function mgt_nota_fiscal_cfopJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_cfop
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

<?php

   }

   function mgt_nota_fiscal_numeroJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonotaimp.mgt_nota_fiscal_numero
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

<?php

   }


   public function gera_posicao($posicao, $texto, $tamanho)
   {
      $espacos = '';
      $espacos_tamanho = '';

      for($ind = 1; $ind < $posicao; $ind++)
      {
         $espacos = $espacos . ' ';
      }

      for($ind = 1; $ind <= $tamanho; $ind++)
      {
         $espacos_tamanho = $espacos_tamanho . ' ';
      }

      $texto = trim($texto) . $espacos_tamanho;

      if($tamanho > 0)
      {
         $texto = substr($texto, 0, $tamanho);
      }

      $texto = $espacos . $texto;

      //*** Retira os Acentos ***

      $texto = strtoupper($texto);

      $texto = str_replace("'", ' ', $texto);
      $texto = str_replace("&", 'E', $texto);

      $texto = str_replace('C', 'C', $texto);

      $texto = str_replace('A', 'A', $texto);
      $texto = str_replace('A', 'A', $texto);
      $texto = str_replace('A', 'A', $texto);
      $texto = str_replace('A', 'A', $texto);
      $texto = str_replace('Ä', 'A', $texto);

      $texto = str_replace('E', 'E', $texto);
      $texto = str_replace('È', 'E', $texto);
      $texto = str_replace('E', 'E', $texto);
      $texto = str_replace('Ë', 'E', $texto);

      $texto = str_replace('I', 'I', $texto);
      $texto = str_replace('Ì', 'I', $texto);
      $texto = str_replace('Î', 'I', $texto);
      $texto = str_replace('Ï', 'I', $texto);

      $texto = str_replace('O', 'O', $texto);
      $texto = str_replace('Ò', 'O', $texto);
      $texto = str_replace('O', 'O', $texto);
      $texto = str_replace('Ö', 'O', $texto);
      $texto = str_replace('O', 'O', $texto);

      $texto = str_replace('U', 'U', $texto);
      $texto = str_replace('Ù', 'U', $texto);
      $texto = str_replace('Û', 'U', $texto);
      $texto = str_replace('Ü', 'U', $texto);

      return $texto;
   }

   public function gera_posicao_numerica($posicao, $texto, $tamanho)
   {
      $espacos = '';
      $espacos_tamanho = '';

      for($ind = 1; $ind < $posicao; $ind++)
      {
         $espacos = $espacos . ' ';
      }

      for($ind = 1; $ind <= $tamanho; $ind++)
      {
         $espacos_tamanho = $espacos_tamanho . ' ';
      }

      $espacos_tamanho = substr($espacos_tamanho, 0, ($tamanho - strlen(trim($texto))));

      $texto = $espacos_tamanho . trim($texto);
      $texto = $espacos . $texto;

      //*** Retira os Acentos ***

      $texto = strtoupper($texto);

      $texto = str_replace("'", ' ', $texto);
      $texto = str_replace("&", 'E', $texto);

      $texto = str_replace('C', 'C', $texto);

      $texto = str_replace('A', 'A', $texto);
      $texto = str_replace('A', 'A', $texto);
      $texto = str_replace('A', 'A', $texto);
      $texto = str_replace('A', 'A', $texto);
      $texto = str_replace('Ä', 'A', $texto);

      $texto = str_replace('E', 'E', $texto);
      $texto = str_replace('È', 'E', $texto);
      $texto = str_replace('E', 'E', $texto);
      $texto = str_replace('Ë', 'E', $texto);

      $texto = str_replace('I', 'I', $texto);
      $texto = str_replace('Ì', 'I', $texto);
      $texto = str_replace('Î', 'I', $texto);
      $texto = str_replace('Ï', 'I', $texto);

      $texto = str_replace('O', 'O', $texto);
      $texto = str_replace('Ò', 'O', $texto);
      $texto = str_replace('O', 'O', $texto);
      $texto = str_replace('Ö', 'O', $texto);
      $texto = str_replace('O', 'O', $texto);

      $texto = str_replace('U', 'U', $texto);
      $texto = str_replace('Ù', 'U', $texto);
      $texto = str_replace('Û', 'U', $texto);
      $texto = str_replace('Ü', 'U', $texto);

      return $texto;
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

         $this->confirmacao->Top = 825;
         $this->confirmacao->IsVisible = false;
         $this->hd_bt_sim_clicado->Value = 0;

         if(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == 'Venda Programada')
         {
            $this->imprime_programada();
         }
         else
         {
            if($this->hd_nota_fiscal_nao_imprimir->Value == 0)
            {
               //*** Seleciona a Nota Fiscal ***
               $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao,date_format(mgt_nota_fiscal_data, '%d/%m/%Y') AS mgt_nota_fiscal_data,date_format(mgt_nota_fiscal_data_entrega, '%d/%m/%Y') AS mgt_nota_fiscal_data_entrega from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = 'PRD' And mgt_nota_fiscal_numero = " . trim($this->mgt_nota_fiscal_numero->Text);

               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

               if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
               {
                  $this->MSG_Erro->Caption = 'Este Numero de Nota Fiscal ja existe! Por favor, informe o Numero correto.';

                  $this->confirmacao->Top = 825;
                  $this->confirmacao->IsVisible = false;
                  $this->hd_bt_sim_clicado->Value = 0;
               }
               else
               {
                  if($this->hd_apenas_registra->Value == 0)
                  {
                     //*** Impressao Comum da Nota Fiscal em Matricial ***
                     //$this->imprime_nota_fiscal();

                     //*** Gera a Nota Fiscal Eletronica ***
                     $this->confirmacao->Top = 825;
                     $this->confirmacao->IsVisible = false;
                     $this->hd_bt_sim_clicado->Value = 0;

                     //********************************************************
                     //*** Funcoes Utilizadas pela Rotina da Geracao da XML ***
                     //********************************************************

                     $this->gerar_xml();

                     //*****************************************
                     //*** INICIO - Assina e Transmite o XML ***
                     //*****************************************

                     //*** Fecha a Janela para Gerar o XML ***
                     $this->confirmacao->Top = 825;
                     $this->confirmacao->IsVisible = false;
                     $this->hd_bt_sim_clicado->Value = 0;

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
                     assinaXML('nfe/entrada/enviNFe_' . trim($this->mgt_nota_fiscal_numero->Text) . '.xml', 'nfe/saida/enviNFe_' . trim($this->mgt_nota_fiscal_numero->Text) . '_sign.xml', 'infNFe', $certificado);

                     $validacao = validaXML('nfe/saida/enviNFe_' . trim($this->mgt_nota_fiscal_numero->Text) . '_sign.xml', 'validadores/enviNFe_v2.00.xsd');

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

                        echo "<script language=\"JavaScript\">alert('#Atencao erros encontrados:\\n\\n\\n" . trim($exibe_erro) . "');</script>";
                     }

                     //****************************************
                     //*** FINAL - Assina e Transmite o XML ***
                     //****************************************
                  }
                  else
                  {
                     //*** Registra a Nota Fiscal ***
                     $this->imprime_nota_fiscal();
                  }
               }
            }
            else
            {
               //*** Impressao Comum da Nota Fiscal em Matricial ***
               //$this->imprime_nota_fiscal();

               //*** Gera a Nota Fiscal Eletronica ***
               $this->confirmacao->Top = 825;
               $this->confirmacao->IsVisible = false;
               $this->hd_bt_sim_clicado->Value = 0;

               //********************************************************
               //*** Funcoes Utilizadas pela Rotina da Geracao da XML ***
               //********************************************************

               $this->gerar_xml();

               //*****************************************
               //*** INICIO - Assina e Transmite o XML ***
               //*****************************************

               //*** Fecha a Janela para Gerar o XML ***
               $this->confirmacao->Top = 825;
               $this->confirmacao->IsVisible = false;
               $this->hd_bt_sim_clicado->Value = 0;

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
               assinaXML('nfe/entrada/enviNFe_' . trim($this->mgt_nota_fiscal_numero->Text) . '.xml', 'nfe/saida/enviNFe_' . trim($this->mgt_nota_fiscal_numero->Text) . '_sign.xml', 'infNFe', $certificado);

               $validacao = validaXML('nfe/saida/enviNFe_' . trim($this->mgt_nota_fiscal_numero->Text) . '_sign.xml', 'validadores/enviNFe_v2.00.xsd');

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

                  echo "<script language=\"JavaScript\">alert('#Atencao erros encontrados:\\n\\n\\n" . trim($exibe_erro) . "');</script>";
               }

               //****************************************
               //*** FINAL - Assina e Transmite o XML ***
               //****************************************
            }
         }
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 825;
      $this->confirmacao->IsVisible = false;
      $this->hd_bt_sim_clicado->Value = 0;
   }

   public function carrega_condicao_pagamento()
   {
      $mgt_numero_nfe = $this->mgt_nota_fiscal_numero->Text;
      $valor_total = $this->mgt_nota_fiscal_valor_total->Text - $this->mgt_nota_fiscal_valor_ipi->Text - $this->mgt_nota_fiscal_valor_icms_sub->Text;
      $valor_ipi_parcela = $this->mgt_nota_fiscal_valor_ipi->Text;
      $valor_icms_substituicao_parcela = $this->mgt_nota_fiscal_valor_icms_sub->Text;

      $condicao_pgto_1 = $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text;
      $condicao_pgto_2 = $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text;
      $condicao_pgto_3 = $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text;
      $condicao_pgto_4 = $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text;
      $condicao_pgto_5 = $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text;
      $condicao_pgto_6 = $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text;
      $condicao_pgto_7 = $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text;
      $condicao_pgto_8 = $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text;
      $condicao_pgto_9 = $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text;
      $condicao_pgto_10 = $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text;
      $condicao_pgto_11 = $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text;
      $condicao_pgto_12 = $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text;

      $nro_nota_desd_1 = '';
      $nro_nota_desd_2 = '';
      $nro_nota_desd_3 = '';
      $nro_nota_desd_4 = '';
      $nro_nota_desd_5 = '';
      $nro_nota_desd_6 = '';
      $nro_nota_desd_7 = '';
      $nro_nota_desd_8 = '';
      $nro_nota_desd_9 = '';
      $nro_nota_desd_10 = '';
      $nro_nota_desd_11 = '';
      $nro_nota_desd_12 = '';

      $dt_vcto_desd_1 = '';
      $dt_vcto_desd_2 = '';
      $dt_vcto_desd_3 = '';
      $dt_vcto_desd_4 = '';
      $dt_vcto_desd_5 = '';
      $dt_vcto_desd_6 = '';
      $dt_vcto_desd_7 = '';
      $dt_vcto_desd_8 = '';
      $dt_vcto_desd_9 = '';
      $dt_vcto_desd_10 = '';
      $dt_vcto_desd_11 = '';
      $dt_vcto_desd_12 = '';

      $vlr_desd_1 = 0;
      $vlr_desd_2 = 0;
      $vlr_desd_3 = 0;
      $vlr_desd_4 = 0;
      $vlr_desd_5 = 0;
      $vlr_desd_6 = 0;
      $vlr_desd_7 = 0;
      $vlr_desd_8 = 0;
      $vlr_desd_9 = 0;
      $vlr_desd_10 = 0;
      $vlr_desd_11 = 0;
      $vlr_desd_12 = 0;

      $forma_desd_1 = '';
      $forma_desd_2 = '';
      $forma_desd_3 = '';
      $forma_desd_4 = '';
      $forma_desd_5 = '';
      $forma_desd_6 = '';
      $forma_desd_7 = '';
      $forma_desd_8 = '';
      $forma_desd_9 = '';
      $forma_desd_10 = '';
      $forma_desd_11 = '';
      $forma_desd_12 = '';

      $this->opcao_vista->Caption = '';

      //********************
      //*** 12 - Parcela ***
      //********************

      if(
      ((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and
      ((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0'))and
      ((trim($condicao_pgto_3) <> '')and(trim($condicao_pgto_3) <> '0'))and
      ((trim($condicao_pgto_4) <> '')and(trim($condicao_pgto_4) <> '0'))and
      ((trim($condicao_pgto_5) <> '')and(trim($condicao_pgto_5) <> '0'))and
      ((trim($condicao_pgto_6) <> '')and(trim($condicao_pgto_6) <> '0'))and
      ((trim($condicao_pgto_7) <> '')and(trim($condicao_pgto_7) <> '0'))and
      ((trim($condicao_pgto_8) <> '')and(trim($condicao_pgto_8) <> '0'))and
      ((trim($condicao_pgto_9) <> '')and(trim($condicao_pgto_9) <> '0'))and
      ((trim($condicao_pgto_10) <> '')and(trim($condicao_pgto_10) <> '0'))and
      ((trim($condicao_pgto_11) <> '')and(trim($condicao_pgto_11) <> '0'))and
      ((trim($condicao_pgto_12) <> '')and(trim($condicao_pgto_12) <> '0'))
      )
      {
         $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
         $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
         $nro_nota_desd_3 = trim($mgt_numero_nfe) . 'C';
         $nro_nota_desd_4 = trim($mgt_numero_nfe) . 'D';
         $nro_nota_desd_5 = trim($mgt_numero_nfe) . 'E';
         $nro_nota_desd_6 = trim($mgt_numero_nfe) . 'F';
         $nro_nota_desd_7 = trim($mgt_numero_nfe) . 'G';
         $nro_nota_desd_8 = trim($mgt_numero_nfe) . 'H';
         $nro_nota_desd_9 = trim($mgt_numero_nfe) . 'I';
         $nro_nota_desd_10 = trim($mgt_numero_nfe) . 'J';
         $nro_nota_desd_11 = trim($mgt_numero_nfe) . 'K';
         $nro_nota_desd_12 = trim($mgt_numero_nfe) . 'L';

         $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
         $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
         $dt_vcto_desd_3 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_3);
         $dt_vcto_desd_4 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_4);
         $dt_vcto_desd_5 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_5);
         $dt_vcto_desd_6 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_6);
         $dt_vcto_desd_7 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_7);
         $dt_vcto_desd_8 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_8);
         $dt_vcto_desd_9 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_9);
         $dt_vcto_desd_10 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_10);
         $dt_vcto_desd_11 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_11);
         $dt_vcto_desd_12 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_12);

         $calcula_condicao = $valor_total;
         $vlr_desd_1 = number_format(($calcula_condicao / 12), "2", ".", "");
         $vlr_desd_2 = $vlr_desd_1;
         $vlr_desd_3 = $vlr_desd_1;
         $vlr_desd_4 = $vlr_desd_1;
         $vlr_desd_5 = $vlr_desd_1;
         $vlr_desd_6 = $vlr_desd_1;
         $vlr_desd_7 = $vlr_desd_1;
         $vlr_desd_8 = $vlr_desd_1;
         $vlr_desd_9 = $vlr_desd_1;
         $vlr_desd_10 = $vlr_desd_1;
         $vlr_desd_11 = $vlr_desd_1;
         $vlr_desd_12 = number_format(
         (
         $calcula_condicao -
         $vlr_desd_1 -
         $vlr_desd_2 -
         $vlr_desd_3 -
         $vlr_desd_4 -
         $vlr_desd_5 -
         $vlr_desd_6 -
         $vlr_desd_7 -
         $vlr_desd_8 -
         $vlr_desd_9 -
         $vlr_desd_10 -
         $vlr_desd_11
         ), "2", ".", "");

         $vlr_desd_1 = number_format(($vlr_desd_1 + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");

         $forma_desd_1 = trim($condicao_pgto_1);
         $forma_desd_2 = trim($condicao_pgto_2);
         $forma_desd_3 = trim($condicao_pgto_3);
         $forma_desd_4 = trim($condicao_pgto_4);
         $forma_desd_5 = trim($condicao_pgto_5);
         $forma_desd_6 = trim($condicao_pgto_6);
         $forma_desd_7 = trim($condicao_pgto_7);
         $forma_desd_8 = trim($condicao_pgto_8);
         $forma_desd_9 = trim($condicao_pgto_9);
         $forma_desd_10 = trim($condicao_pgto_10);
         $forma_desd_11 = trim($condicao_pgto_11);
         $forma_desd_12 = trim($condicao_pgto_12);
      }

      //********************
      //*** 11 - Parcela ***
      //********************

      elseif(
      ((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and
      ((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0'))and
      ((trim($condicao_pgto_3) <> '')and(trim($condicao_pgto_3) <> '0'))and
      ((trim($condicao_pgto_4) <> '')and(trim($condicao_pgto_4) <> '0'))and
      ((trim($condicao_pgto_5) <> '')and(trim($condicao_pgto_5) <> '0'))and
      ((trim($condicao_pgto_6) <> '')and(trim($condicao_pgto_6) <> '0'))and
      ((trim($condicao_pgto_7) <> '')and(trim($condicao_pgto_7) <> '0'))and
      ((trim($condicao_pgto_8) <> '')and(trim($condicao_pgto_8) <> '0'))and
      ((trim($condicao_pgto_9) <> '')and(trim($condicao_pgto_9) <> '0'))and
      ((trim($condicao_pgto_10) <> '')and(trim($condicao_pgto_10) <> '0'))and
      ((trim($condicao_pgto_11) <> '')and(trim($condicao_pgto_11) <> '0'))
      )
      {
         $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
         $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
         $nro_nota_desd_3 = trim($mgt_numero_nfe) . 'C';
         $nro_nota_desd_4 = trim($mgt_numero_nfe) . 'D';
         $nro_nota_desd_5 = trim($mgt_numero_nfe) . 'E';
         $nro_nota_desd_6 = trim($mgt_numero_nfe) . 'F';
         $nro_nota_desd_7 = trim($mgt_numero_nfe) . 'G';
         $nro_nota_desd_8 = trim($mgt_numero_nfe) . 'H';
         $nro_nota_desd_9 = trim($mgt_numero_nfe) . 'I';
         $nro_nota_desd_10 = trim($mgt_numero_nfe) . 'J';
         $nro_nota_desd_11 = trim($mgt_numero_nfe) . 'K';
         $nro_nota_desd_12 = '';

         $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
         $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
         $dt_vcto_desd_3 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_3);
         $dt_vcto_desd_4 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_4);
         $dt_vcto_desd_5 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_5);
         $dt_vcto_desd_6 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_6);
         $dt_vcto_desd_7 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_7);
         $dt_vcto_desd_8 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_8);
         $dt_vcto_desd_9 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_9);
         $dt_vcto_desd_10 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_10);
         $dt_vcto_desd_11 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_11);
         $dt_vcto_desd_12 = '';

         $calcula_condicao = $valor_total;
         $vlr_desd_1 = number_format(($calcula_condicao / 11), "2", ".", "");
         $vlr_desd_2 = $vlr_desd_1;
         $vlr_desd_3 = $vlr_desd_1;
         $vlr_desd_4 = $vlr_desd_1;
         $vlr_desd_5 = $vlr_desd_1;
         $vlr_desd_6 = $vlr_desd_1;
         $vlr_desd_7 = $vlr_desd_1;
         $vlr_desd_8 = $vlr_desd_1;
         $vlr_desd_9 = $vlr_desd_1;
         $vlr_desd_10 = $vlr_desd_1;
         $vlr_desd_11 = number_format(
         (
         $calcula_condicao -
         $vlr_desd_1 -
         $vlr_desd_2 -
         $vlr_desd_3 -
         $vlr_desd_4 -
         $vlr_desd_5 -
         $vlr_desd_6 -
         $vlr_desd_7 -
         $vlr_desd_8 -
         $vlr_desd_9 -
         $vlr_desd_10
         ), "2", ".", "");
         $vlr_desd_12 = 0;

         $vlr_desd_1 = number_format(($vlr_desd_1 + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");

         $forma_desd_1 = trim($condicao_pgto_1);
         $forma_desd_2 = trim($condicao_pgto_2);
         $forma_desd_3 = trim($condicao_pgto_3);
         $forma_desd_4 = trim($condicao_pgto_4);
         $forma_desd_5 = trim($condicao_pgto_5);
         $forma_desd_6 = trim($condicao_pgto_6);
         $forma_desd_7 = trim($condicao_pgto_7);
         $forma_desd_8 = trim($condicao_pgto_8);
         $forma_desd_9 = trim($condicao_pgto_9);
         $forma_desd_10 = trim($condicao_pgto_10);
         $forma_desd_11 = trim($condicao_pgto_11);
         $forma_desd_12 = '';
      }

      //********************
      //*** 10 - Parcela ***
      //********************

      elseif(
      ((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and
      ((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0'))and
      ((trim($condicao_pgto_3) <> '')and(trim($condicao_pgto_3) <> '0'))and
      ((trim($condicao_pgto_4) <> '')and(trim($condicao_pgto_4) <> '0'))and
      ((trim($condicao_pgto_5) <> '')and(trim($condicao_pgto_5) <> '0'))and
      ((trim($condicao_pgto_6) <> '')and(trim($condicao_pgto_6) <> '0'))and
      ((trim($condicao_pgto_7) <> '')and(trim($condicao_pgto_7) <> '0'))and
      ((trim($condicao_pgto_8) <> '')and(trim($condicao_pgto_8) <> '0'))and
      ((trim($condicao_pgto_9) <> '')and(trim($condicao_pgto_9) <> '0'))and
      ((trim($condicao_pgto_10) <> '')and(trim($condicao_pgto_10) <> '0'))
      )
      {
         $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
         $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
         $nro_nota_desd_3 = trim($mgt_numero_nfe) . 'C';
         $nro_nota_desd_4 = trim($mgt_numero_nfe) . 'D';
         $nro_nota_desd_5 = trim($mgt_numero_nfe) . 'E';
         $nro_nota_desd_6 = trim($mgt_numero_nfe) . 'F';
         $nro_nota_desd_7 = trim($mgt_numero_nfe) . 'G';
         $nro_nota_desd_8 = trim($mgt_numero_nfe) . 'H';
         $nro_nota_desd_9 = trim($mgt_numero_nfe) . 'I';
         $nro_nota_desd_10 = trim($mgt_numero_nfe) . 'J';
         $nro_nota_desd_11 = '';
         $nro_nota_desd_12 = '';

         $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
         $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
         $dt_vcto_desd_3 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_3);
         $dt_vcto_desd_4 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_4);
         $dt_vcto_desd_5 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_5);
         $dt_vcto_desd_6 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_6);
         $dt_vcto_desd_7 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_7);
         $dt_vcto_desd_8 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_8);
         $dt_vcto_desd_9 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_9);
         $dt_vcto_desd_10 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_10);
         $dt_vcto_desd_11 = '';
         $dt_vcto_desd_12 = '';

         $calcula_condicao = $valor_total;
         $vlr_desd_1 = number_format(($calcula_condicao / 10), "2", ".", "");
         $vlr_desd_2 = $vlr_desd_1;
         $vlr_desd_3 = $vlr_desd_1;
         $vlr_desd_4 = $vlr_desd_1;
         $vlr_desd_5 = $vlr_desd_1;
         $vlr_desd_6 = $vlr_desd_1;
         $vlr_desd_7 = $vlr_desd_1;
         $vlr_desd_8 = $vlr_desd_1;
         $vlr_desd_9 = $vlr_desd_1;
         $vlr_desd_10 = number_format(
         (
         $calcula_condicao -
         $vlr_desd_1 -
         $vlr_desd_2 -
         $vlr_desd_3 -
         $vlr_desd_4 -
         $vlr_desd_5 -
         $vlr_desd_6 -
         $vlr_desd_7 -
         $vlr_desd_8 -
         $vlr_desd_9
         ), "2", ".", "");
         $vlr_desd_11 = 0;
         $vlr_desd_12 = 0;

         $vlr_desd_1 = number_format(($vlr_desd_1 + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");

         $forma_desd_1 = trim($condicao_pgto_1);
         $forma_desd_2 = trim($condicao_pgto_2);
         $forma_desd_3 = trim($condicao_pgto_3);
         $forma_desd_4 = trim($condicao_pgto_4);
         $forma_desd_5 = trim($condicao_pgto_5);
         $forma_desd_6 = trim($condicao_pgto_6);
         $forma_desd_7 = trim($condicao_pgto_7);
         $forma_desd_8 = trim($condicao_pgto_8);
         $forma_desd_9 = trim($condicao_pgto_9);
         $forma_desd_10 = trim($condicao_pgto_10);
         $forma_desd_11 = '';
         $forma_desd_12 = '';
      }

      //*******************
      //*** 9 - Parcela ***
      //*******************

      elseif(
      ((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and
      ((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0'))and
      ((trim($condicao_pgto_3) <> '')and(trim($condicao_pgto_3) <> '0'))and
      ((trim($condicao_pgto_4) <> '')and(trim($condicao_pgto_4) <> '0'))and
      ((trim($condicao_pgto_5) <> '')and(trim($condicao_pgto_5) <> '0'))and
      ((trim($condicao_pgto_6) <> '')and(trim($condicao_pgto_6) <> '0'))and
      ((trim($condicao_pgto_7) <> '')and(trim($condicao_pgto_7) <> '0'))and
      ((trim($condicao_pgto_8) <> '')and(trim($condicao_pgto_8) <> '0'))and
      ((trim($condicao_pgto_9) <> '')and(trim($condicao_pgto_9) <> '0'))
      )
      {
         $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
         $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
         $nro_nota_desd_3 = trim($mgt_numero_nfe) . 'C';
         $nro_nota_desd_4 = trim($mgt_numero_nfe) . 'D';
         $nro_nota_desd_5 = trim($mgt_numero_nfe) . 'E';
         $nro_nota_desd_6 = trim($mgt_numero_nfe) . 'F';
         $nro_nota_desd_7 = trim($mgt_numero_nfe) . 'G';
         $nro_nota_desd_8 = trim($mgt_numero_nfe) . 'H';
         $nro_nota_desd_9 = trim($mgt_numero_nfe) . 'I';
         $nro_nota_desd_10 = '';
         $nro_nota_desd_11 = '';
         $nro_nota_desd_12 = '';

         $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
         $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
         $dt_vcto_desd_3 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_3);
         $dt_vcto_desd_4 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_4);
         $dt_vcto_desd_5 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_5);
         $dt_vcto_desd_6 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_6);
         $dt_vcto_desd_7 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_7);
         $dt_vcto_desd_8 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_8);
         $dt_vcto_desd_9 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_9);
         $dt_vcto_desd_10 = '';
         $dt_vcto_desd_11 = '';
         $dt_vcto_desd_12 = '';

         $calcula_condicao = $valor_total;
         $vlr_desd_1 = number_format(($calcula_condicao / 9), "2", ".", "");
         $vlr_desd_2 = $vlr_desd_1;
         $vlr_desd_3 = $vlr_desd_1;
         $vlr_desd_4 = $vlr_desd_1;
         $vlr_desd_5 = $vlr_desd_1;
         $vlr_desd_6 = $vlr_desd_1;
         $vlr_desd_7 = $vlr_desd_1;
         $vlr_desd_8 = $vlr_desd_1;
         $vlr_desd_9 = number_format(
         (
         $calcula_condicao -
         $vlr_desd_1 -
         $vlr_desd_2 -
         $vlr_desd_3 -
         $vlr_desd_4 -
         $vlr_desd_5 -
         $vlr_desd_6 -
         $vlr_desd_7 -
         $vlr_desd_8
         ), "2", ".", "");
         $vlr_desd_10 = 0;
         $vlr_desd_11 = 0;
         $vlr_desd_12 = 0;

         $vlr_desd_1 = number_format(($vlr_desd_1 + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");

         $forma_desd_1 = trim($condicao_pgto_1);
         $forma_desd_2 = trim($condicao_pgto_2);
         $forma_desd_3 = trim($condicao_pgto_3);
         $forma_desd_4 = trim($condicao_pgto_4);
         $forma_desd_5 = trim($condicao_pgto_5);
         $forma_desd_6 = trim($condicao_pgto_6);
         $forma_desd_7 = trim($condicao_pgto_7);
         $forma_desd_8 = trim($condicao_pgto_8);
         $forma_desd_9 = trim($condicao_pgto_9);
         $forma_desd_10 = '';
         $forma_desd_11 = '';
         $forma_desd_12 = '';
      }

      //*******************
      //*** 8 - Parcela ***
      //*******************

      elseif(
      ((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and
      ((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0'))and
      ((trim($condicao_pgto_3) <> '')and(trim($condicao_pgto_3) <> '0'))and
      ((trim($condicao_pgto_4) <> '')and(trim($condicao_pgto_4) <> '0'))and
      ((trim($condicao_pgto_5) <> '')and(trim($condicao_pgto_5) <> '0'))and
      ((trim($condicao_pgto_6) <> '')and(trim($condicao_pgto_6) <> '0'))and
      ((trim($condicao_pgto_7) <> '')and(trim($condicao_pgto_7) <> '0'))and
      ((trim($condicao_pgto_8) <> '')and(trim($condicao_pgto_8) <> '0'))
      )
      {
         $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
         $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
         $nro_nota_desd_3 = trim($mgt_numero_nfe) . 'C';
         $nro_nota_desd_4 = trim($mgt_numero_nfe) . 'D';
         $nro_nota_desd_5 = trim($mgt_numero_nfe) . 'E';
         $nro_nota_desd_6 = trim($mgt_numero_nfe) . 'F';
         $nro_nota_desd_7 = trim($mgt_numero_nfe) . 'G';
         $nro_nota_desd_8 = trim($mgt_numero_nfe) . 'H';
         $nro_nota_desd_9 = '';
         $nro_nota_desd_10 = '';
         $nro_nota_desd_11 = '';
         $nro_nota_desd_12 = '';

         $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
         $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
         $dt_vcto_desd_3 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_3);
         $dt_vcto_desd_4 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_4);
         $dt_vcto_desd_5 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_5);
         $dt_vcto_desd_6 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_6);
         $dt_vcto_desd_7 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_7);
         $dt_vcto_desd_8 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_8);
         $dt_vcto_desd_9 = '';
         $dt_vcto_desd_10 = '';
         $dt_vcto_desd_11 = '';
         $dt_vcto_desd_12 = '';

         $calcula_condicao = $valor_total;
         $vlr_desd_1 = number_format(($calcula_condicao / 8), "2", ".", "");
         $vlr_desd_2 = $vlr_desd_1;
         $vlr_desd_3 = $vlr_desd_1;
         $vlr_desd_4 = $vlr_desd_1;
         $vlr_desd_5 = $vlr_desd_1;
         $vlr_desd_6 = $vlr_desd_1;
         $vlr_desd_7 = $vlr_desd_1;
         $vlr_desd_8 = number_format(
         (
         $calcula_condicao -
         $vlr_desd_1 -
         $vlr_desd_2 -
         $vlr_desd_3 -
         $vlr_desd_4 -
         $vlr_desd_5 -
         $vlr_desd_6 -
         $vlr_desd_7
         ), "2", ".", "");
         $vlr_desd_9 = 0;
         $vlr_desd_10 = 0;
         $vlr_desd_11 = 0;
         $vlr_desd_12 = 0;

         $vlr_desd_1 = number_format(($vlr_desd_1 + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");

         $forma_desd_1 = trim($condicao_pgto_1);
         $forma_desd_2 = trim($condicao_pgto_2);
         $forma_desd_3 = trim($condicao_pgto_3);
         $forma_desd_4 = trim($condicao_pgto_4);
         $forma_desd_5 = trim($condicao_pgto_5);
         $forma_desd_6 = trim($condicao_pgto_6);
         $forma_desd_7 = trim($condicao_pgto_7);
         $forma_desd_8 = trim($condicao_pgto_8);
         $forma_desd_9 = '';
         $forma_desd_10 = '';
         $forma_desd_11 = '';
         $forma_desd_12 = '';
      }

      //*******************
      //*** 7 - Parcela ***
      //*******************

      elseif(
      ((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and
      ((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0'))and
      ((trim($condicao_pgto_3) <> '')and(trim($condicao_pgto_3) <> '0'))and
      ((trim($condicao_pgto_4) <> '')and(trim($condicao_pgto_4) <> '0'))and
      ((trim($condicao_pgto_5) <> '')and(trim($condicao_pgto_5) <> '0'))and
      ((trim($condicao_pgto_6) <> '')and(trim($condicao_pgto_6) <> '0'))and
      ((trim($condicao_pgto_7) <> '')and(trim($condicao_pgto_7) <> '0'))
      )
      {
         $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
         $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
         $nro_nota_desd_3 = trim($mgt_numero_nfe) . 'C';
         $nro_nota_desd_4 = trim($mgt_numero_nfe) . 'D';
         $nro_nota_desd_5 = trim($mgt_numero_nfe) . 'E';
         $nro_nota_desd_6 = trim($mgt_numero_nfe) . 'F';
         $nro_nota_desd_7 = trim($mgt_numero_nfe) . 'G';
         $nro_nota_desd_8 = '';
         $nro_nota_desd_9 = '';
         $nro_nota_desd_10 = '';
         $nro_nota_desd_11 = '';
         $nro_nota_desd_12 = '';

         $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
         $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
         $dt_vcto_desd_3 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_3);
         $dt_vcto_desd_4 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_4);
         $dt_vcto_desd_5 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_5);
         $dt_vcto_desd_6 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_6);
         $dt_vcto_desd_7 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_7);
         $dt_vcto_desd_8 = '';
         $dt_vcto_desd_9 = '';
         $dt_vcto_desd_10 = '';
         $dt_vcto_desd_11 = '';
         $dt_vcto_desd_12 = '';

         $calcula_condicao = $valor_total;
         $vlr_desd_1 = number_format(($calcula_condicao / 7), "2", ".", "");
         $vlr_desd_2 = $vlr_desd_1;
         $vlr_desd_3 = $vlr_desd_1;
         $vlr_desd_4 = $vlr_desd_1;
         $vlr_desd_5 = $vlr_desd_1;
         $vlr_desd_6 = $vlr_desd_1;
         $vlr_desd_7 = number_format(
         (
         $calcula_condicao -
         $vlr_desd_1 -
         $vlr_desd_2 -
         $vlr_desd_3 -
         $vlr_desd_4 -
         $vlr_desd_5 -
         $vlr_desd_6
         ), "2", ".", "");
         $vlr_desd_8 = 0;
         $vlr_desd_9 = 0;
         $vlr_desd_10 = 0;
         $vlr_desd_11 = 0;
         $vlr_desd_12 = 0;

         $vlr_desd_1 = number_format(($vlr_desd_1 + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");

         $forma_desd_1 = trim($condicao_pgto_1);
         $forma_desd_2 = trim($condicao_pgto_2);
         $forma_desd_3 = trim($condicao_pgto_3);
         $forma_desd_4 = trim($condicao_pgto_4);
         $forma_desd_5 = trim($condicao_pgto_5);
         $forma_desd_6 = trim($condicao_pgto_6);
         $forma_desd_7 = trim($condicao_pgto_7);
         $forma_desd_8 = '';
         $forma_desd_9 = '';
         $forma_desd_10 = '';
         $forma_desd_11 = '';
         $forma_desd_12 = '';
      }

      //*******************
      //*** 6 - Parcela ***
      //*******************

      elseif(
      ((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and
      ((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0'))and
      ((trim($condicao_pgto_3) <> '')and(trim($condicao_pgto_3) <> '0'))and
      ((trim($condicao_pgto_4) <> '')and(trim($condicao_pgto_4) <> '0'))and
      ((trim($condicao_pgto_5) <> '')and(trim($condicao_pgto_5) <> '0'))and
      ((trim($condicao_pgto_6) <> '')and(trim($condicao_pgto_6) <> '0'))
      )
      {
         $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
         $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
         $nro_nota_desd_3 = trim($mgt_numero_nfe) . 'C';
         $nro_nota_desd_4 = trim($mgt_numero_nfe) . 'D';
         $nro_nota_desd_5 = trim($mgt_numero_nfe) . 'E';
         $nro_nota_desd_6 = trim($mgt_numero_nfe) . 'F';
         $nro_nota_desd_7 = '';
         $nro_nota_desd_8 = '';
         $nro_nota_desd_9 = '';
         $nro_nota_desd_10 = '';
         $nro_nota_desd_11 = '';
         $nro_nota_desd_12 = '';

         $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
         $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
         $dt_vcto_desd_3 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_3);
         $dt_vcto_desd_4 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_4);
         $dt_vcto_desd_5 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_5);
         $dt_vcto_desd_6 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_6);
         $dt_vcto_desd_7 = '';
         $dt_vcto_desd_8 = '';
         $dt_vcto_desd_9 = '';
         $dt_vcto_desd_10 = '';
         $dt_vcto_desd_11 = '';
         $dt_vcto_desd_12 = '';

         $calcula_condicao = $valor_total;
         $vlr_desd_1 = number_format(($calcula_condicao / 6), "2", ".", "");
         $vlr_desd_2 = $vlr_desd_1;
         $vlr_desd_3 = $vlr_desd_1;
         $vlr_desd_4 = $vlr_desd_1;
         $vlr_desd_5 = $vlr_desd_1;
         $vlr_desd_6 = number_format(
         (
         $calcula_condicao -
         $vlr_desd_1 -
         $vlr_desd_2 -
         $vlr_desd_3 -
         $vlr_desd_4 -
         $vlr_desd_5
         ), "2", ".", "");
         $vlr_desd_7 = 0;
         $vlr_desd_8 = 0;
         $vlr_desd_9 = 0;
         $vlr_desd_10 = 0;
         $vlr_desd_11 = 0;
         $vlr_desd_12 = 0;

         $vlr_desd_1 = number_format(($vlr_desd_1 + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");

         $forma_desd_1 = trim($condicao_pgto_1);
         $forma_desd_2 = trim($condicao_pgto_2);
         $forma_desd_3 = trim($condicao_pgto_3);
         $forma_desd_4 = trim($condicao_pgto_4);
         $forma_desd_5 = trim($condicao_pgto_5);
         $forma_desd_6 = trim($condicao_pgto_6);
         $forma_desd_7 = '';
         $forma_desd_8 = '';
         $forma_desd_9 = '';
         $forma_desd_10 = '';
         $forma_desd_11 = '';
         $forma_desd_12 = '';
      }

      //*******************
      //*** 5 - Parcela ***
      //*******************

      elseif(
      ((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and
      ((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0'))and
      ((trim($condicao_pgto_3) <> '')and(trim($condicao_pgto_3) <> '0'))and
      ((trim($condicao_pgto_4) <> '')and(trim($condicao_pgto_4) <> '0'))and
      ((trim($condicao_pgto_5) <> '')and(trim($condicao_pgto_5) <> '0'))
      )
      {
         $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
         $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
         $nro_nota_desd_3 = trim($mgt_numero_nfe) . 'C';
         $nro_nota_desd_4 = trim($mgt_numero_nfe) . 'D';
         $nro_nota_desd_5 = trim($mgt_numero_nfe) . 'E';
         $nro_nota_desd_6 = '';
         $nro_nota_desd_7 = '';
         $nro_nota_desd_8 = '';
         $nro_nota_desd_9 = '';
         $nro_nota_desd_10 = '';
         $nro_nota_desd_11 = '';
         $nro_nota_desd_12 = '';

         $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
         $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
         $dt_vcto_desd_3 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_3);
         $dt_vcto_desd_4 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_4);
         $dt_vcto_desd_5 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_5);
         $dt_vcto_desd_6 = '';
         $dt_vcto_desd_7 = '';
         $dt_vcto_desd_8 = '';
         $dt_vcto_desd_9 = '';
         $dt_vcto_desd_10 = '';
         $dt_vcto_desd_11 = '';
         $dt_vcto_desd_12 = '';

         $calcula_condicao = $valor_total;
         $vlr_desd_1 = number_format(($calcula_condicao / 5), "2", ".", "");
         $vlr_desd_2 = $vlr_desd_1;
         $vlr_desd_3 = $vlr_desd_1;
         $vlr_desd_4 = $vlr_desd_1;
         $vlr_desd_5 = number_format(
         (
         $calcula_condicao -
         $vlr_desd_1 -
         $vlr_desd_2 -
         $vlr_desd_3 -
         $vlr_desd_4
         ), "2", ".", "");
         $vlr_desd_6 = 0;
         $vlr_desd_7 = 0;
         $vlr_desd_8 = 0;
         $vlr_desd_9 = 0;
         $vlr_desd_10 = 0;
         $vlr_desd_11 = 0;
         $vlr_desd_12 = 0;

         $vlr_desd_1 = number_format(($vlr_desd_1 + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");

         $forma_desd_1 = trim($condicao_pgto_1);
         $forma_desd_2 = trim($condicao_pgto_2);
         $forma_desd_3 = trim($condicao_pgto_3);
         $forma_desd_4 = trim($condicao_pgto_4);
         $forma_desd_5 = trim($condicao_pgto_5);
         $forma_desd_6 = '';
         $forma_desd_7 = '';
         $forma_desd_8 = '';
         $forma_desd_9 = '';
         $forma_desd_10 = '';
         $forma_desd_11 = '';
         $forma_desd_12 = '';
      }

      //*******************
      //*** 4 - Parcela ***
      //*******************

      elseif(
      ((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and
      ((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0'))and
      ((trim($condicao_pgto_3) <> '')and(trim($condicao_pgto_3) <> '0'))and
      ((trim($condicao_pgto_4) <> '')and(trim($condicao_pgto_4) <> '0'))
      )
      {
         $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
         $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
         $nro_nota_desd_3 = trim($mgt_numero_nfe) . 'C';
         $nro_nota_desd_4 = trim($mgt_numero_nfe) . 'D';
         $nro_nota_desd_5 = '';
         $nro_nota_desd_6 = '';
         $nro_nota_desd_7 = '';
         $nro_nota_desd_8 = '';
         $nro_nota_desd_9 = '';
         $nro_nota_desd_10 = '';
         $nro_nota_desd_11 = '';
         $nro_nota_desd_12 = '';

         $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
         $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
         $dt_vcto_desd_3 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_3);
         $dt_vcto_desd_4 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_4);
         $dt_vcto_desd_5 = '';
         $dt_vcto_desd_6 = '';
         $dt_vcto_desd_7 = '';
         $dt_vcto_desd_8 = '';
         $dt_vcto_desd_9 = '';
         $dt_vcto_desd_10 = '';
         $dt_vcto_desd_11 = '';
         $dt_vcto_desd_12 = '';

         $calcula_condicao = $valor_total;
         $vlr_desd_1 = number_format(($calcula_condicao / 4), "2", ".", "");
         $vlr_desd_2 = $vlr_desd_1;
         $vlr_desd_3 = $vlr_desd_1;
         $vlr_desd_4 = number_format(
         (
         $calcula_condicao -
         $vlr_desd_1 -
         $vlr_desd_2 -
         $vlr_desd_3
         ), "2", ".", "");
         $vlr_desd_5 = 0;
         $vlr_desd_6 = 0;
         $vlr_desd_7 = 0;
         $vlr_desd_8 = 0;
         $vlr_desd_9 = 0;
         $vlr_desd_10 = 0;
         $vlr_desd_11 = 0;
         $vlr_desd_12 = 0;

         $vlr_desd_1 = number_format(($vlr_desd_1 + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");

         $forma_desd_1 = trim($condicao_pgto_1);
         $forma_desd_2 = trim($condicao_pgto_2);
         $forma_desd_3 = trim($condicao_pgto_3);
         $forma_desd_4 = trim($condicao_pgto_4);
         $forma_desd_5 = '';
         $forma_desd_6 = '';
         $forma_desd_7 = '';
         $forma_desd_8 = '';
         $forma_desd_9 = '';
         $forma_desd_10 = '';
         $forma_desd_11 = '';
         $forma_desd_12 = '';
      }

      //*******************
      //*** 3 - Parcela ***
      //*******************

      elseif(
      ((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and
      ((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0'))and
      ((trim($condicao_pgto_3) <> '')and(trim($condicao_pgto_3) <> '0'))
      )
      {
         $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
         $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
         $nro_nota_desd_3 = trim($mgt_numero_nfe) . 'C';
         $nro_nota_desd_4 = '';
         $nro_nota_desd_5 = '';
         $nro_nota_desd_6 = '';
         $nro_nota_desd_7 = '';
         $nro_nota_desd_8 = '';
         $nro_nota_desd_9 = '';
         $nro_nota_desd_10 = '';
         $nro_nota_desd_11 = '';
         $nro_nota_desd_12 = '';

         $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
         $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
         $dt_vcto_desd_3 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_3);
         $dt_vcto_desd_4 = '';
         $dt_vcto_desd_5 = '';
         $dt_vcto_desd_6 = '';
         $dt_vcto_desd_7 = '';
         $dt_vcto_desd_8 = '';
         $dt_vcto_desd_9 = '';
         $dt_vcto_desd_10 = '';
         $dt_vcto_desd_11 = '';
         $dt_vcto_desd_12 = '';

         $calcula_condicao = $valor_total;
         $vlr_desd_1 = number_format(($calcula_condicao / 3), "2", ".", "");
         $vlr_desd_2 = $vlr_desd_1;
         $vlr_desd_3 = number_format(
         (
         $calcula_condicao -
         $vlr_desd_1 -
         $vlr_desd_2
         ), "2", ".", "");
         $vlr_desd_4 = 0;
         $vlr_desd_5 = 0;
         $vlr_desd_6 = 0;
         $vlr_desd_7 = 0;
         $vlr_desd_8 = 0;
         $vlr_desd_9 = 0;
         $vlr_desd_10 = 0;
         $vlr_desd_11 = 0;
         $vlr_desd_12 = 0;

         $vlr_desd_1 = number_format(($vlr_desd_1 + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");

         $forma_desd_1 = trim($condicao_pgto_1);
         $forma_desd_2 = trim($condicao_pgto_2);
         $forma_desd_3 = trim($condicao_pgto_3);
         $forma_desd_4 = '';
         $forma_desd_5 = '';
         $forma_desd_6 = '';
         $forma_desd_7 = '';
         $forma_desd_8 = '';
         $forma_desd_9 = '';
         $forma_desd_10 = '';
         $forma_desd_11 = '';
         $forma_desd_12 = '';
      }

      //*******************
      //*** 2 - Parcela ***
      //*******************

      elseif(
      ((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and
      ((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0'))
      )
      {
         $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
         $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
         $nro_nota_desd_3 = '';
         $nro_nota_desd_4 = '';
         $nro_nota_desd_5 = '';
         $nro_nota_desd_6 = '';
         $nro_nota_desd_7 = '';
         $nro_nota_desd_8 = '';
         $nro_nota_desd_9 = '';
         $nro_nota_desd_10 = '';
         $nro_nota_desd_11 = '';
         $nro_nota_desd_12 = '';

         $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
         $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
         $dt_vcto_desd_3 = '';
         $dt_vcto_desd_4 = '';
         $dt_vcto_desd_5 = '';
         $dt_vcto_desd_6 = '';
         $dt_vcto_desd_7 = '';
         $dt_vcto_desd_8 = '';
         $dt_vcto_desd_9 = '';
         $dt_vcto_desd_10 = '';
         $dt_vcto_desd_11 = '';
         $dt_vcto_desd_12 = '';

         $calcula_condicao = $valor_total;
         $vlr_desd_1 = number_format(($calcula_condicao / 2), "2", ".", "");
         $vlr_desd_2 = number_format(
         (
         $calcula_condicao -
         $vlr_desd_1
         ), "2", ".", "");
         $vlr_desd_3 = 0;
         $vlr_desd_4 = 0;
         $vlr_desd_5 = 0;
         $vlr_desd_6 = 0;
         $vlr_desd_7 = 0;
         $vlr_desd_8 = 0;
         $vlr_desd_9 = 0;
         $vlr_desd_10 = 0;
         $vlr_desd_11 = 0;
         $vlr_desd_12 = 0;

         $vlr_desd_1 = number_format(($vlr_desd_1 + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");

         $forma_desd_1 = trim($condicao_pgto_1);
         $forma_desd_2 = trim($condicao_pgto_2);
         $forma_desd_3 = '';
         $forma_desd_4 = '';
         $forma_desd_5 = '';
         $forma_desd_6 = '';
         $forma_desd_7 = '';
         $forma_desd_8 = '';
         $forma_desd_9 = '';
         $forma_desd_10 = '';
         $forma_desd_11 = '';
         $forma_desd_12 = '';
      }

      //*******************
      //*** 1 - Parcela ***
      //*******************

      elseif(
      ((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))
      )
      {
         $nro_nota_desd_1 = trim($mgt_numero_nfe);
         $nro_nota_desd_2 = '';
         $nro_nota_desd_3 = '';
         $nro_nota_desd_4 = '';
         $nro_nota_desd_5 = '';
         $nro_nota_desd_6 = '';
         $nro_nota_desd_7 = '';
         $nro_nota_desd_8 = '';
         $nro_nota_desd_9 = '';
         $nro_nota_desd_10 = '';
         $nro_nota_desd_11 = '';
         $nro_nota_desd_12 = '';

         $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
         $dt_vcto_desd_2 = '';
         $dt_vcto_desd_3 = '';
         $dt_vcto_desd_4 = '';
         $dt_vcto_desd_5 = '';
         $dt_vcto_desd_6 = '';
         $dt_vcto_desd_7 = '';
         $dt_vcto_desd_8 = '';
         $dt_vcto_desd_9 = '';
         $dt_vcto_desd_10 = '';
         $dt_vcto_desd_11 = '';
         $dt_vcto_desd_12 = '';

         $calcula_condicao = $valor_total;
         $vlr_desd_1 = number_format(($calcula_condicao + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");
         $vlr_desd_2 = 0;
         $vlr_desd_3 = 0;
         $vlr_desd_4 = 0;
         $vlr_desd_5 = 0;
         $vlr_desd_6 = 0;
         $vlr_desd_7 = 0;
         $vlr_desd_8 = 0;
         $vlr_desd_9 = 0;
         $vlr_desd_10 = 0;
         $vlr_desd_11 = 0;
         $vlr_desd_12 = 0;

         $forma_desd_1 = trim($condicao_pgto_1);
         $forma_desd_2 = '';
         $forma_desd_3 = '';
         $forma_desd_4 = '';
         $forma_desd_5 = '';
         $forma_desd_6 = '';
         $forma_desd_7 = '';
         $forma_desd_8 = '';
         $forma_desd_9 = '';
         $forma_desd_10 = '';
         $forma_desd_11 = '';
         $forma_desd_12 = '';
      }
      /*
      elseif((trim($condicao_pgto_1) == '')or(trim($condicao_pgto_1) == '0'))
      {
      $nro_nota_desd_1 = trim($mgt_numero_nfe);
      $nro_nota_desd_2 = '';
      $nro_nota_desd_3 = '';
      $nro_nota_desd_4 = '';
      $nro_nota_desd_5 = '';
      $nro_nota_desd_6 = '';
      $nro_nota_desd_7 = '';
      $nro_nota_desd_8 = '';
      $nro_nota_desd_9 = '';
      $nro_nota_desd_10 = '';
      $nro_nota_desd_11 = '';
      $nro_nota_desd_12 = '';

      $dt_vcto_desd_1 = date("d/m/Y", time());
      $dt_vcto_desd_2 = '';
      $dt_vcto_desd_3 = '';
      $dt_vcto_desd_4 = '';
      $dt_vcto_desd_5 = '';
      $dt_vcto_desd_6 = '';
      $dt_vcto_desd_7 = '';
      $dt_vcto_desd_8 = '';
      $dt_vcto_desd_9 = '';
      $dt_vcto_desd_10 = '';
      $dt_vcto_desd_11 = '';
      $dt_vcto_desd_12 = '';

      $calcula_condicao = $valor_total;
      $vlr_desd_1 = number_format(($calcula_condicao + $valor_ipi_parcela + $valor_icms_substituicao_parcela), "2", ".", "");
      $vlr_desd_2 = 0;
      $vlr_desd_3 = 0;
      $vlr_desd_4 = 0;
      $vlr_desd_5 = 0;
      $vlr_desd_6 = 0;
      $vlr_desd_7 = 0;
      $vlr_desd_8 = 0;
      $vlr_desd_9 = 0;
      $vlr_desd_10 = 0;
      $vlr_desd_11 = 0;
      $vlr_desd_12 = 0;

      $forma_desd_1 = 'A VISTA';
      $forma_desd_2 = '';
      $forma_desd_3 = '';
      $forma_desd_4 = '';
      $forma_desd_5 = '';
      $forma_desd_6 = '';
      $forma_desd_7 = '';
      $forma_desd_8 = '';
      $forma_desd_9 = '';
      $forma_desd_10 = '';
      $forma_desd_11 = '';
      $forma_desd_12 = '';

      $this->opcao_vista->Caption = '';
      $this->mgt_nota_fiscal_descricao_condicao_pgto->ItemIndex = '1';
      $this->hd_nota_fiscal_descricao_condicao_pgto->Value = '1';
      }
      */

      $this->mgt_nota_fiscal_dup_nro_1->Text = $nro_nota_desd_1;
      $this->mgt_nota_fiscal_dup_nro_2->Text = $nro_nota_desd_2;
      $this->mgt_nota_fiscal_dup_nro_3->Text = $nro_nota_desd_3;
      $this->mgt_nota_fiscal_dup_nro_4->Text = $nro_nota_desd_4;
      $this->mgt_nota_fiscal_dup_nro_5->Text = $nro_nota_desd_5;
      $this->mgt_nota_fiscal_dup_nro_6->Text = $nro_nota_desd_6;
      $this->mgt_nota_fiscal_dup_nro_7->Text = $nro_nota_desd_7;
      $this->mgt_nota_fiscal_dup_nro_8->Text = $nro_nota_desd_8;
      $this->mgt_nota_fiscal_dup_nro_9->Text = $nro_nota_desd_9;
      $this->mgt_nota_fiscal_dup_nro_10->Text = $nro_nota_desd_10;
      $this->mgt_nota_fiscal_dup_nro_11->Text = $nro_nota_desd_11;
      $this->mgt_nota_fiscal_dup_nro_12->Text = $nro_nota_desd_12;

      $this->mgt_nota_fiscal_dup_dt_vcto_1->Text = $dt_vcto_desd_1;
      $this->mgt_nota_fiscal_dup_dt_vcto_2->Text = $dt_vcto_desd_2;
      $this->mgt_nota_fiscal_dup_dt_vcto_3->Text = $dt_vcto_desd_3;
      $this->mgt_nota_fiscal_dup_dt_vcto_4->Text = $dt_vcto_desd_4;
      $this->mgt_nota_fiscal_dup_dt_vcto_5->Text = $dt_vcto_desd_5;
      $this->mgt_nota_fiscal_dup_dt_vcto_6->Text = $dt_vcto_desd_6;
      $this->mgt_nota_fiscal_dup_dt_vcto_7->Text = $dt_vcto_desd_7;
      $this->mgt_nota_fiscal_dup_dt_vcto_8->Text = $dt_vcto_desd_8;
      $this->mgt_nota_fiscal_dup_dt_vcto_9->Text = $dt_vcto_desd_9;
      $this->mgt_nota_fiscal_dup_dt_vcto_10->Text = $dt_vcto_desd_10;
      $this->mgt_nota_fiscal_dup_dt_vcto_11->Text = $dt_vcto_desd_11;
      $this->mgt_nota_fiscal_dup_dt_vcto_12->Text = $dt_vcto_desd_12;

      $this->mgt_nota_fiscal_dup_vlr_1->Text = $vlr_desd_1;
      $this->mgt_nota_fiscal_dup_vlr_2->Text = $vlr_desd_2;
      $this->mgt_nota_fiscal_dup_vlr_3->Text = $vlr_desd_3;
      $this->mgt_nota_fiscal_dup_vlr_4->Text = $vlr_desd_4;
      $this->mgt_nota_fiscal_dup_vlr_5->Text = $vlr_desd_5;
      $this->mgt_nota_fiscal_dup_vlr_6->Text = $vlr_desd_6;
      $this->mgt_nota_fiscal_dup_vlr_7->Text = $vlr_desd_7;
      $this->mgt_nota_fiscal_dup_vlr_8->Text = $vlr_desd_8;
      $this->mgt_nota_fiscal_dup_vlr_9->Text = $vlr_desd_9;
      $this->mgt_nota_fiscal_dup_vlr_10->Text = $vlr_desd_10;
      $this->mgt_nota_fiscal_dup_vlr_11->Text = $vlr_desd_11;
      $this->mgt_nota_fiscal_dup_vlr_12->Text = $vlr_desd_12;

      if(trim($this->mgt_nota_fiscal_dup_vlr_1->Text) == '')
      {
         $this->mgt_nota_fiscal_dup_vlr_1->Text = '0.00';
      }

      if(trim($this->mgt_nota_fiscal_dup_vlr_2->Text) == '')
      {
         $this->mgt_nota_fiscal_dup_vlr_2->Text = '0.00';
      }

      if(trim($this->mgt_nota_fiscal_dup_vlr_3->Text) == '')
      {
         $this->mgt_nota_fiscal_dup_vlr_3->Text = '0.00';
      }

      if(trim($this->mgt_nota_fiscal_dup_vlr_4->Text) == '')
      {
         $this->mgt_nota_fiscal_dup_vlr_4->Text = '0.00';
      }

      if(trim($this->mgt_nota_fiscal_dup_vlr_5->Text) == '')
      {
         $this->mgt_nota_fiscal_dup_vlr_5->Text = '0.00';
      }

      if(trim($this->mgt_nota_fiscal_dup_vlr_6->Text) == '')
      {
         $this->mgt_nota_fiscal_dup_vlr_6->Text = '0.00';
      }

      if(trim($this->mgt_nota_fiscal_dup_vlr_7->Text) == '')
      {
         $this->mgt_nota_fiscal_dup_vlr_7->Text = '0.00';
      }

      if(trim($this->mgt_nota_fiscal_dup_vlr_8->Text) == '')
      {
         $this->mgt_nota_fiscal_dup_vlr_8->Text = '0.00';
      }

      if(trim($this->mgt_nota_fiscal_dup_vlr_9->Text) == '')
      {
         $this->mgt_nota_fiscal_dup_vlr_9->Text = '0.00';
      }

      if(trim($this->mgt_nota_fiscal_dup_vlr_10->Text) == '')
      {
         $this->mgt_nota_fiscal_dup_vlr_10->Text = '0.00';
      }

      if(trim($this->mgt_nota_fiscal_dup_vlr_11->Text) == '')
      {
         $this->mgt_nota_fiscal_dup_vlr_11->Text = '0.00';
      }

      if(trim($this->mgt_nota_fiscal_dup_vlr_12->Text) == '')
      {
         $this->mgt_nota_fiscal_dup_vlr_12->Text = '0.00';
      }

      $this->mgt_nota_fiscal_dup_forma_1->Value = $forma_desd_1;
      $this->mgt_nota_fiscal_dup_forma_2->Value = $forma_desd_2;
      $this->mgt_nota_fiscal_dup_forma_3->Value = $forma_desd_3;
      $this->mgt_nota_fiscal_dup_forma_4->Value = $forma_desd_4;
      $this->mgt_nota_fiscal_dup_forma_5->Value = $forma_desd_5;
      $this->mgt_nota_fiscal_dup_forma_6->Value = $forma_desd_6;
      $this->mgt_nota_fiscal_dup_forma_7->Value = $forma_desd_7;
      $this->mgt_nota_fiscal_dup_forma_8->Value = $forma_desd_8;
      $this->mgt_nota_fiscal_dup_forma_9->Value = $forma_desd_9;
      $this->mgt_nota_fiscal_dup_forma_10->Value = $forma_desd_10;
      $this->mgt_nota_fiscal_dup_forma_11->Value = $forma_desd_11;
      $this->mgt_nota_fiscal_dup_forma_12->Value = $forma_desd_12;
   }

   function mgt_nota_fiscal_natureza_operacaoChange($sender, $params)
   {
      $this->carrega_natureza_operacao();
   }

   public function carrega_tipo_faturamento()
   {
      $Comando_SQL = "select * from mgt_numero_nota_anterior";

      GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Close();
      GetConexaoPrincipal()->SQL_MGT_Numero_Nota->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Open();

      if(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == 'Nota Fiscal')
      {
         if((GetConexaoPrincipal()->SQL_MGT_Numero_Nota->EOF) != 1)
         {
            $this->mgt_nota_fiscal_numero->Text = (GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Fields['mgt_numero_nota_anterior_numero'] + 1);
         }
         else
         {
            $this->mgt_nota_fiscal_numero->Text = '1';
         }
      }
      else
      {
         if((GetConexaoPrincipal()->SQL_MGT_Numero_Nota->EOF) != 1)
         {
            $this->mgt_nota_fiscal_numero->Text = (GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Fields['mgt_numero_nota_anterior_numero_prg'] + 1);
         }
         else
         {
            $this->mgt_nota_fiscal_numero->Text = '1';
         }
      }

      $this->mgt_nota_fiscal_data_emissao->Text = date('d/m/Y', time());
   }

   public function carrega_natureza_operacao()
   {
      if(trim($this->mgt_nota_fiscal_natureza_operacao->ItemIndex) != '--- SELECIONE A NATUREZA DE OPERACAO ---')
      {
         //*** Verifica os Enderecos de Cobranca e Entrega ***

         if((trim($this->mgt_nota_fiscal_opcao_entrega->Text) == 'Outro')And(trim($this->mgt_nota_fiscal_endereco->Text) <> trim($this->mgt_nota_fiscal_endereco_entrega->Text)))
         {
            $this->mgt_nota_fiscal_observacao_adicional_1->Text = 'ENTREGA: ' . trim($this->mgt_nota_fiscal_endereco_entrega->Text) . ' - ' . trim($this->mgt_nota_fiscal_complemento_entrega->Text) . ' - ' . trim($this->mgt_nota_fiscal_bairro_entrega->Text) . ' - ' . trim($this->mgt_nota_fiscal_cidade_entrega->Text) . ' - ' . trim($this->mgt_nota_fiscal_estado_entrega->Text) . ' - ' . trim($this->mgt_nota_fiscal_pais_entrega->Text) . ' - CEP: ' . trim($this->mgt_nota_fiscal_cep_entrega->Text);
         }

         if((trim($this->mgt_nota_fiscal_opcao_cobranca->Text) == 'Outro')And(trim($this->mgt_nota_fiscal_endereco->Text) <> trim($this->mgt_nota_fiscal_endereco_cobranca->Text)))
         {
            $this->mgt_nota_fiscal_observacao_adicional_2->Text = 'COBRANCA: ' . trim($this->mgt_nota_fiscal_endereco_cobranca->Text) . ' - ' . trim($this->mgt_nota_fiscal_complemento_cobranca->Text) . ' - ' . trim($this->mgt_nota_fiscal_bairro_cobranca->Text) . ' - ' . trim($this->mgt_nota_fiscal_cidade_cobranca->Text) . ' - ' . trim($this->mgt_nota_fiscal_estado_cobranca->Text) . ' - ' . trim($this->mgt_nota_fiscal_pais_cobranca->Text) . ' - CEP: ' . trim($this->mgt_nota_fiscal_cep_cobranca->Text);
         }

         $this->mgt_nota_fiscal_natureza_operacao_imp->Text = trim($this->mgt_nota_fiscal_natureza_operacao->ItemIndex);

         $legenda_classificacao = array();

         //*** Verifica se e Consumidor Final ***

         $consumidor_final = 'N';

         if(($this->hd_tipo_codigo->Value == 'CPF')or($this->hd_tipo_codigo->Value == 'RG')or($this->hd_tipo_codigo->Value == 'Outro Docto'))
         {
            $consumidor_final = 'S';
         }

         if((trim($this->mgt_nota_fiscal_inscricao_estadual->Text) == '')or(trim($this->mgt_nota_fiscal_inscricao_estadual->Text) == '-')or(strtoupper(trim($this->mgt_nota_fiscal_inscricao_estadual->Text)) == 'ISENTO')or(strtoupper(trim($this->mgt_nota_fiscal_inscricao_estadual->Text)) == 'ISENTA'))
         {
            $consumidor_final = 'S';
         }

         //$this->mgt_nota_fiscal_observacao_nota->Text = 'FAVOR CONFERIR A MERCADORIA NO RECEBIMENTO, NAO SERA ACEITO RECLAMACAO DE FALTA POSTERIOR';
         $this->mgt_nota_fiscal_observacao_nota->Text = '';

         //*** INICIO - Carrega os Calculos dos Impostos ***

         $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_valor_pedido'];
         $this->mgt_nota_fiscal_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_valor_frete'];
         $this->mgt_nota_fiscal_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_valor_ipi'];
         $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_valor_total'];
         //$this->mgt_nota_fiscal_valor_desconto->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_valor_desconto'];

         if(trim($this->mgt_nota_fiscal_valor_desconto->Text) == '')
         {
            $this->mgt_nota_fiscal_valor_desconto->Text = '0.00';
         }

         //*** FINAL - Carrega os Calculos dos Impostos ***

         if(trim($this->mgt_nota_fiscal_suframa->Text) == '')
         {
            $cfop_1 = '';
            $cfop_2 = '';
            $situacao_tributaria = '';
            $base_icms_substituicao = 0;
            $base_icms_substituicao_sem_ipi = 0;
            $vlr_total_produto_substituicao = 0;
            $aliquota_icms_st = 0;

            $this->obtem_cfop();

            if($this->mgt_nota_fiscal_cfop->Text > 5000)
            {
               if($consumidor_final == 'S')
               {
                  $this->mgt_nota_fiscal_aliquota_icms->Text = "18";
               }
            }

            if($this->mgt_nota_fiscal_aliquota_icms->Text > 0)
            {
               if($consumidor_final == 'N')
               {
                  $this->mgt_nota_fiscal_base_icms->Text = $this->mgt_nota_fiscal_valor_produtos->Text;
               }
               else
               {
                  $this->mgt_nota_fiscal_base_icms->Text = $this->mgt_nota_fiscal_valor_total->Text;
               }
            }
            else
            {
               $this->mgt_nota_fiscal_base_icms->Text = '0.00';
            }

            $this->mgt_nota_fiscal_valor_icms->Text = number_format((($this->mgt_nota_fiscal_base_icms->Text * $this->mgt_nota_fiscal_aliquota_icms->Text) / 100), "2", ".", "");
            $this->mgt_nota_fiscal_base_icms_sub->Text = '0.00';
            $this->mgt_nota_fiscal_valor_icms_sub->Text = '0.00';

            $this->mgt_nota_fiscal_valor_seguro->Text = '0.00';
            $this->mgt_nota_fiscal_outras_despesas->Text = '0.00';

            //*** Verifica a Situacao Tributaria ***

            if(trim($this->hd_cfop_st->Value) == 'S')
            {
               $cfop_1 = $this->mgt_nota_fiscal_cfop->Text;

               if(trim($this->mgt_nota_fiscal_cfop_2->Text) == '')
               {
                  $cfop_2 = $this->mgt_nota_fiscal_cfop->Text;
               }
               else
               {
                  $cfop_2 = $this->mgt_nota_fiscal_cfop_2->Text;
               }

               //*** Verifica os Produtos ***

               GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->First();

               if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
               {
                  while((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
                  {
                     $posicao_legenda = array_search(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal']) . '-' . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']), $legenda_classificacao);

                     if(trim($posicao_legenda) == '')
                     {
                        array_push($legenda_classificacao, trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal']) . '-' . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']));
                     }

                     $vlr_produto_substituicao = 0;
                     $iva = 0;
                     $situacao_tributaria = trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_situacao_tributaria']);

					 //*** INICIO - Seleciona os Tributos do NCM ***
					 $Comando_SQL = "SELECT * FROM mgt_tributos WHERE mgt_tributo_ncm = " . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']) . " ORDER BY mgt_tributo_sequencial";

					 GetConexaoPrincipal()->SQL_MGT_Tributos->Close();
					 GetConexaoPrincipal()->SQL_MGT_Tributos->SQL = $Comando_SQL;
					 GetConexaoPrincipal()->SQL_MGT_Tributos->Open();

					 if((GetConexaoPrincipal()->SQL_MGT_Tributos->EOF) != 1)
					 {
					   $produto_tributo_aliquota = GetConexaoPrincipal()->SQL_MGT_Tributos->Fields['mgt_tributo_aliquota_nacional'];
                       $produto_tributo_valor = ((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total'] * $produto_tributo_aliquota) / 100);
					 }
					 else
					 {
					   $produto_tributo_aliquota = 0;
                       $produto_tributo_valor = 0;
					 }

                     //*** Seleciona o IVA para verificar se o Produto se Enquadra ***

                     $Comando_SQL = "select * from mgt_ivas";
                     $Comando_SQL .= " where ";
                     $Comando_SQL .= "mgt_iva_estado = '" . trim($this->mgt_nota_fiscal_estado->Text) . "' and ";
                     $Comando_SQL .= "mgt_iva_ncm = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']) . "'";

                     GetConexaoPrincipal()->SQL_MGT_IVA->Close();
                     GetConexaoPrincipal()->SQL_MGT_IVA->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_MGT_IVA->Open();

                     if((GetConexaoPrincipal()->SQL_MGT_IVA->EOF) != 1)
                     {
                        if(trim($this->hd_cfop_cst->Value) <> "")
                        {
                           $situacao_tributaria = trim($this->hd_cfop_cst->Value);
                        }
                        else
                        {
                           $situacao_tributaria = '010';
                        }

                        $iva = GetConexaoPrincipal()->SQL_MGT_IVA->Fields['mgt_iva_valor'];
                        $vlr_produto_substituicao = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total'] + GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_ipi'];
                        $vlr_produto_substituicao = number_format((($vlr_produto_substituicao * $iva) / 100), 2, '.', '');

                        $vlr_total_produto_substituicao = $vlr_total_produto_substituicao + $vlr_produto_substituicao;
                        $base_icms_substituicao = $base_icms_substituicao + (GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total'] + GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_ipi']);
                        $base_icms_substituicao_sem_ipi = $base_icms_substituicao_sem_ipi + GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total'];

                        //*** Atualiza a Situacao Tributaria do Produto ***

                        $Comando_SQL = "update mgt_faturamentos_produtos set ";
                        $Comando_SQL .= "mgt_faturamento_produto_situacao_tributaria = '" . $situacao_tributaria . "', ";
                        $Comando_SQL .= "mgt_faturamento_produto_aliquota_tributo = '" . str_replace(',', '.', trim($produto_tributo_aliquota)) . "', ";
                        $Comando_SQL .= "mgt_faturamento_produto_valor_tributo = '" . str_replace(',', '.', trim($produto_tributo_valor)) . "' ";
                        $Comando_SQL .= " where ";
                        $Comando_SQL .= "mgt_faturamento_produto_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_numero']) . "' and ";
                        $Comando_SQL .= "mgt_faturamento_produto_numero_pedido = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_numero_pedido']) . "' and ";
                        $Comando_SQL .= "mgt_faturamento_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "'";

                        GetConexaoPrincipal()->SQL_Comunitario->Close();
                        GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                        GetConexaoPrincipal()->SQL_Comunitario->Open();
                        GetConexaoPrincipal()->SQL_Comunitario->Close();
                     }
					 else
					 {
                        $Comando_SQL = "update mgt_faturamentos_produtos set ";
                        $Comando_SQL .= "mgt_faturamento_produto_situacao_tributaria = '" . $this->hd_cfop_cst_natureza->Value . "', ";
                        $Comando_SQL .= "mgt_faturamento_produto_aliquota_tributo = '" . str_replace(',', '.', trim($produto_tributo_aliquota)) . "', ";
                        $Comando_SQL .= "mgt_faturamento_produto_valor_tributo = '" . str_replace(',', '.', trim($produto_tributo_valor)) . "' ";
                        $Comando_SQL .= " where ";
                        $Comando_SQL .= "mgt_faturamento_produto_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_numero']) . "' and ";
                        $Comando_SQL .= "mgt_faturamento_produto_numero_pedido = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_numero_pedido']) . "' and ";
                        $Comando_SQL .= "mgt_faturamento_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "'";

                        GetConexaoPrincipal()->SQL_Comunitario->Close();
                        GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                        GetConexaoPrincipal()->SQL_Comunitario->Open();
                        GetConexaoPrincipal()->SQL_Comunitario->Close();
					 }

                     GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Next();
                  }
               }

               if($vlr_total_produto_substituicao > 0)
               {
                  //*** Seleciona o IVA para verificar a Aliquota Interna do Produto ***

                  $Comando_SQL = "select * from mgt_ivas";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_iva_estado = '" . trim($this->mgt_nota_fiscal_estado->Text) . "'";

                  GetConexaoPrincipal()->SQL_MGT_IVA->Close();
                  GetConexaoPrincipal()->SQL_MGT_IVA->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_MGT_IVA->Open();

                  if((GetConexaoPrincipal()->SQL_MGT_IVA->EOF) != 1)
                  {
                     $aliquota_interna = trim(GetConexaoPrincipal()->SQL_MGT_IVA->Fields['mgt_iva_aliquota_interna']);
                     $aliquota_icms_st = trim($this->mgt_nota_fiscal_aliquota_icms->Text);
                  }
                  else
                  {
                     $aliquota_interna = trim($this->mgt_nota_fiscal_aliquota_icms->Text);
                     $aliquota_icms_st = trim($this->mgt_nota_fiscal_aliquota_icms->Text);
                  }

                  $this->mgt_nota_fiscal_base_icms->Text = $this->mgt_nota_fiscal_valor_produtos->Text;
                  $this->mgt_nota_fiscal_valor_icms->Text = number_format((($this->mgt_nota_fiscal_base_icms->Text * $aliquota_icms_st) / 100), "2", ".", "");

                  $base_icms_substituicao = $base_icms_substituicao + $vlr_total_produto_substituicao;
                  $this->mgt_nota_fiscal_base_icms_sub->Text = number_format($base_icms_substituicao, "2", ".", "");

                  $this->mgt_nota_fiscal_valor_icms_sub->Text = number_format(((($base_icms_substituicao * $aliquota_interna) / 100) - (($base_icms_substituicao_sem_ipi * $aliquota_icms_st) / 100)), "2", ".", "");

                  $this->mgt_nota_fiscal_valor_total->Text = number_format(($this->mgt_nota_fiscal_valor_produtos->Text + $this->mgt_nota_fiscal_valor_ipi->Text + $this->mgt_nota_fiscal_valor_icms_sub->Text + $this->mgt_nota_fiscal_valor_frete->Text), "2", ".", "");

                  if($this->mgt_nota_fiscal_aliquota_icms->Text <= 0)
                  {
                    $this->mgt_nota_fiscal_base_icms->Text = '0.00';
                    $this->mgt_nota_fiscal_valor_icms->Text = '0.00';
                  }

				  if( $this->hd_cfop_cst->Value == 500 )
  			      {
                     $this->mgt_nota_fiscal_base_icms_sub->Text = '0.00';
                     $this->mgt_nota_fiscal_valor_icms_sub->Text = '0.00';
					 $this->mgt_nota_fiscal_valor_total->Text = number_format(($this->mgt_nota_fiscal_valor_produtos->Text + $this->mgt_nota_fiscal_valor_ipi->Text + $this->mgt_nota_fiscal_valor_frete->Text), "2", ".", "");
				  }
               }
            }
            else
            {
               //*** Verifica os Produtos ***

               GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->First();

               if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
               {
                  while((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
                  {
                     $posicao_legenda = array_search(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal']) . '-' . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']), $legenda_classificacao);

                     if(trim($posicao_legenda) == '')
                     {
                        array_push($legenda_classificacao, trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal']) . '-' . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']));
                     }

					 //*** INICIO - Seleciona os Tributos do NCM ***
					 $Comando_SQL = "SELECT * FROM mgt_tributos WHERE mgt_tributo_ncm = " . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']) . " ORDER BY mgt_tributo_sequencial";

					 GetConexaoPrincipal()->SQL_MGT_Tributos->Close();
					 GetConexaoPrincipal()->SQL_MGT_Tributos->SQL = $Comando_SQL;
					 GetConexaoPrincipal()->SQL_MGT_Tributos->Open();

					 if((GetConexaoPrincipal()->SQL_MGT_Tributos->EOF) != 1)
					 {
					   $produto_tributo_aliquota = GetConexaoPrincipal()->SQL_MGT_Tributos->Fields['mgt_tributo_aliquota_nacional'];
                       $produto_tributo_valor = ((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total'] * $produto_tributo_aliquota) / 100);
					 }
					 else
					 {
					   $produto_tributo_aliquota = 0;
                       $produto_tributo_valor = 0;
					 }

                     //*** Seleciona o Produto para Atualizar a Situacao Tributaria ***

                     $Comando_SQL = "select * from mgt_produtos";
                     $Comando_SQL .= " where ";
                     $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "'";

                     GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
                     GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

                     if((GetConexaoPrincipal()->SQL_MGT_Produtos->EOF) != 1)
                     {
                        if(trim($this->hd_cfop_cst_natureza->Value) <> "")
                        {
                           $situacao_tributaria = trim($this->hd_cfop_cst_natureza->Value);
                        }
                        else
                        {
                           $situacao_tributaria = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_classif_tributaria'];
                        }

                        //*** Atualiza a Situacao Tributaria do Produto ***

                        $Comando_SQL = "update mgt_faturamentos_produtos set ";
                        $Comando_SQL .= "mgt_faturamento_produto_situacao_tributaria = '" . $situacao_tributaria . "',";
                        $Comando_SQL .= "mgt_faturamento_produto_classificacao_fiscal = '" . GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_classif_fiscal'] . "', ";
                        $Comando_SQL .= "mgt_faturamento_produto_aliquota_tributo = '" . str_replace(',', '.', trim($produto_tributo_aliquota)) . "', ";
                        $Comando_SQL .= "mgt_faturamento_produto_valor_tributo = '" . str_replace(',', '.', trim($produto_tributo_valor)) . "' ";
                        $Comando_SQL .= " where ";
                        $Comando_SQL .= "mgt_faturamento_produto_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_numero']) . "' and ";
                        $Comando_SQL .= "mgt_faturamento_produto_numero_pedido = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_numero_pedido']) . "' and ";
                        $Comando_SQL .= "mgt_faturamento_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "'";

                        GetConexaoPrincipal()->SQL_Comunitario->Close();
                        GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                        GetConexaoPrincipal()->SQL_Comunitario->Open();
                        GetConexaoPrincipal()->SQL_Comunitario->Close();
                     }

                     GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Next();
                  }

                  if($situacao_tributaria == 20)
                  {
                     $this->mgt_nota_fiscal_base_icms->Text = number_format((($this->mgt_nota_fiscal_valor_produtos->Text) - (($this->mgt_nota_fiscal_valor_produtos->Text * number_format(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_reducao_icms'], 2, '.', '')) / 100)), 2, '.', '');
                     $this->mgt_nota_fiscal_valor_icms->Text = number_format((($this->mgt_nota_fiscal_base_icms->Text * $this->mgt_nota_fiscal_aliquota_icms->Text) / 100), "2", ".", "");
                  }
               }
            }
         }
         else
         {
            $this->obtem_cfop();

            //*** Atualiza o ICMS, IPI e Valor do IPI dos Produtos ***

            if(trim($this->mgt_nota_fiscal_suframa_desconto_icms->Text) == '')
            {
               $this->mgt_nota_fiscal_suframa_desconto_icms->Text = '0';
            }

            if(trim($this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text) == '')
            {
               $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text = '0';
            }

            $valor_total_suframa = 0;
            $valor_base_desconto = 0;
            $valor_total_desconto = 0;
            $valor_desconto_7 = 0;
            $valor_desconto_pis_cofins = 0;

            GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->First();

            if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
            {
               while((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->EOF) != 1)
               {
                  $posicao_legenda = array_search(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal']) . '-' . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']), $legenda_classificacao);

                  if(trim($posicao_legenda) == '')
                  {
                     array_push($legenda_classificacao, trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_classificacao_fiscal']) . '-' . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']));
                  }

				  //*** INICIO - Seleciona os Tributos do NCM ***
				  $Comando_SQL = "SELECT * FROM mgt_tributos WHERE mgt_tributo_ncm = " . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_ncm']) . " ORDER BY mgt_tributo_sequencial";

				  GetConexaoPrincipal()->SQL_MGT_Tributos->Close();
				  GetConexaoPrincipal()->SQL_MGT_Tributos->SQL = $Comando_SQL;
				  GetConexaoPrincipal()->SQL_MGT_Tributos->Open();

				  if((GetConexaoPrincipal()->SQL_MGT_Tributos->EOF) != 1)
				  {
				    $produto_tributo_aliquota = GetConexaoPrincipal()->SQL_MGT_Tributos->Fields['mgt_tributo_aliquota_nacional'];
                    $produto_tributo_valor = ((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total'] * $produto_tributo_aliquota) / 100);
				  }
				  else
				  {
				     $produto_tributo_aliquota = 0;
                     $produto_tributo_valor = 0;
				  }

                  //*** Seleciona o Produto para Atualizar a Situacao Tributaria ***

                  $Comando_SQL = "select * from mgt_produtos";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "'";

                  GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
                  GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

                  if((GetConexaoPrincipal()->SQL_MGT_Produtos->EOF) != 1)
                  {
                     if(trim($this->hd_cfop_cst_natureza->Value) <> "")
                     {
                        $situacao_tributaria = trim($this->hd_cfop_cst_natureza->Value);
                     }
                     else
                     {
                        $situacao_tributaria = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_classif_tributaria'];
                     }

                     //*** Atualiza a Situacao Tributaria do Produto ***

                     $Comando_SQL = "update mgt_faturamentos_produtos set ";
                     $Comando_SQL .= "mgt_faturamento_produto_situacao_tributaria = '" . $situacao_tributaria . "',";
                     $Comando_SQL .= "mgt_faturamento_produto_classificacao_fiscal = '" . GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_classif_fiscal'] . "', ";
                     $Comando_SQL .= "mgt_faturamento_produto_valor_ipi = '0.00', ";
                     $Comando_SQL .= "mgt_faturamento_produto_ipi = '0.000', ";
                     $Comando_SQL .= "mgt_faturamento_produto_aliquota_tributo = '" . str_replace(',', '.', trim($produto_tributo_aliquota)) . "', ";
                     $Comando_SQL .= "mgt_faturamento_produto_valor_tributo = '" . str_replace(',', '.', trim($produto_tributo_valor)) . "' ";
                     $Comando_SQL .= " where ";
                     $Comando_SQL .= "mgt_faturamento_produto_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_numero']) . "' and ";
                     $Comando_SQL .= "mgt_faturamento_produto_numero_pedido = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_numero_pedido']) . "' and ";
                     $Comando_SQL .= "mgt_faturamento_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_codigo']) . "'";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }

                  $valor_total_suframa = $valor_total_suframa + GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Fields['mgt_faturamento_produto_valor_total'];

                  GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Next();
               }
            }

            //*** Atualiza os Calculos do Imposto ***

            $this->mgt_nota_fiscal_aliquota_icms->Text = '0';

            $this->mgt_nota_fiscal_base_icms->Text = '0.00';
            $this->mgt_nota_fiscal_valor_icms->Text = '0.00';
            $this->mgt_nota_fiscal_base_icms_sub->Text = '0.00';
            $this->mgt_nota_fiscal_valor_icms_sub->Text = '0.00';

            $this->mgt_nota_fiscal_valor_seguro->Text = '0.00';
            $this->mgt_nota_fiscal_outras_despesas->Text = '0.00';
            $this->mgt_nota_fiscal_valor_ipi->Text = '0.00';

            $valor_base_desconto = $valor_total_suframa;
            $valor_desconto_7 = (($valor_base_desconto * $this->mgt_nota_fiscal_suframa_desconto_icms->Text) / 100);
            $valor_base_desconto = $valor_base_desconto - $valor_desconto_7;

            $valor_desconto_pis_cofins = (($valor_base_desconto * $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text) / 100);
            $valor_base_desconto = $valor_base_desconto - $valor_desconto_pis_cofins;

            $valor_total_desconto = $valor_desconto_7 + $valor_desconto_pis_cofins;
            $valor_total_suframa = $valor_total_suframa - $valor_total_desconto;

            $this->mgt_nota_fiscal_observacao_adicional_4->Text = '';
            $this->mgt_nota_fiscal_observacao_adicional_5->Text = '';
            $this->mgt_nota_fiscal_observacao_adicional_6->Text = '';
            $this->mgt_nota_fiscal_observacao_adicional_8->Text = '';
            $this->mgt_nota_fiscal_observacao_adicional_9->Text = '';
            $this->mgt_nota_fiscal_observacao_adicional_10->Text = '';

            if($valor_desconto_7 > 0)
            {
               $this->mgt_nota_fiscal_observacao_adicional_4->Text = 'DESCONTO DE ' . trim($this->mgt_nota_fiscal_suframa_desconto_icms->Text) . '%: R$ ' . trim(number_format($valor_desconto_7, "2", ".", ""));
            }

            if($valor_desconto_pis_cofins > 0)
            {
               $this->mgt_nota_fiscal_observacao_adicional_5->Text = 'DESCONTO REFERENTE A PIS E COFINS DE ' . trim($this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text) . '%: R$ ' . trim(number_format($valor_desconto_pis_cofins, "2", ".", ""));
            }

            if($valor_total_desconto > 0)
            {
               $this->mgt_nota_fiscal_observacao_adicional_6->Text = 'TOTAL DE DESCONTOS: R$ ' . trim(number_format($valor_total_desconto, "2", ".", ""));
            }

            $this->mgt_nota_fiscal_observacao_adicional_8->Text = 'COD.SUFRAMA: ' . trim($this->mgt_nota_fiscal_suframa->Text);
            $this->mgt_nota_fiscal_observacao_adicional_9->Text = 'ICMS ISENTO CONFORME ART.84, ANEXO I DO LIVRO VI DO RICMS-SP';
            $this->mgt_nota_fiscal_observacao_adicional_10->Text = 'IPI ISENTO CONFORME ART.89, ITEM III E ART.71 DO RIPI/2002';

            $this->mgt_nota_fiscal_valor_produtos->Text = number_format($valor_total_suframa, "2", ".", "");
            $this->mgt_nota_fiscal_valor_total->Text = number_format($valor_total_suframa, "2", ".", "");
         }

         //*** Efetua o Carregamento dos Produtos do Faturamento ***

         $Comando_SQL = "select ";
         $Comando_SQL .= "mgt_faturamento_produto_numero, ";
         $Comando_SQL .= "mgt_faturamento_produto_numero_pedido, ";
         $Comando_SQL .= "mgt_faturamento_produto_quantidade, ";
         $Comando_SQL .= "mgt_faturamento_produto_codigo, ";
         $Comando_SQL .= "mgt_faturamento_produto_descricao, ";
         $Comando_SQL .= "mgt_faturamento_produto_valor_unitario, ";
         $Comando_SQL .= "mgt_faturamento_produto_valor_total, ";
         $Comando_SQL .= "mgt_faturamento_produto_valor_ipi, ";
         $Comando_SQL .= "mgt_faturamento_produto_lote, ";
         $Comando_SQL .= "mgt_faturamento_produto_referencia, ";
         $Comando_SQL .= "mgt_faturamento_produto_posicao, ";
         $Comando_SQL .= "mgt_faturamento_produto_descricao_detalhada, ";
         $Comando_SQL .= "mgt_faturamento_produto_unidade, ";
         $Comando_SQL .= "mgt_faturamento_produto_ipi, ";
         $Comando_SQL .= "mgt_faturamento_produto_classificacao_fiscal, ";
         $Comando_SQL .= "mgt_faturamento_produto_situacao_tributaria, ";
         $Comando_SQL .= "mgt_faturamento_produto_ncm, ";
         $Comando_SQL .= "mgt_faturamento_produto_aliquota_tributo, ";
         $Comando_SQL .= "mgt_faturamento_produto_valor_tributo ";
         $Comando_SQL .= "from mgt_faturamentos_produtos ";
         $Comando_SQL .= "where mgt_faturamento_produto_numero_pedido = " . trim($this->mgt_nota_fiscal_faturamento->Text) . " order by mgt_faturamento_produto_numero";

         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Open();

         //*** INICIO - Incluir a Legenda na Classificacao Fiscal ***
         /*
         if(trim($this->mgt_nota_fiscal_observacao_nota->Text) == '')
         {
         $this->mgt_nota_fiscal_observacao_nota->Text = 'CLASSIFICACAO FISCAL: ';
         }
         else
         {
         $this->mgt_nota_fiscal_observacao_nota->Text = trim($this->mgt_nota_fiscal_observacao_nota->Text) . ' || CLASSIFICACAO FISCAL: ';
         }

         $posicao_inicial = 'S';

         foreach($legenda_classificacao as $letra => $ncm)
         {
         if($posicao_inicial == 'S')
         {
         $this->mgt_nota_fiscal_observacao_nota->Text = trim($this->mgt_nota_fiscal_observacao_nota->Text) . ' ' . $ncm;
         }
         else
         {
         $this->mgt_nota_fiscal_observacao_nota->Text = trim($this->mgt_nota_fiscal_observacao_nota->Text) . ', ' . $ncm;
         }

         $posicao_inicial = 'N';
         }
         */
         //*** FINAL - Incluir a Legenda na Classificacao Fiscal ***

         $this->carrega_condicao_pagamento();
      }
   }

   public function carrega_transportadora()
   {
      //*** Dados da Transportadora ***

      $Comando_SQL = "select * from mgt_transportadoras where mgt_transportadora_numero = '" . trim($this->mgt_nota_fiscal_transportadora->ItemIndex) . "' order by mgt_transportadora_nome";

      GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
      GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) != 1)
      {
         $this->mgt_nota_fiscal_transportadora_cnpj->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_cnpj'];
         $this->mgt_nota_fiscal_transportadora_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_razao_social'];
         $this->mgt_nota_fiscal_transportadora_endereco->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_endereco'];
         $this->mgt_nota_fiscal_transportadora_complemento->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_complemento'];
         $this->mgt_nota_fiscal_transportadora_bairro->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_bairro'];
         $this->mgt_nota_fiscal_transportadora_cidade->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_cidade'];
         $this->mgt_nota_fiscal_transportadora_estado->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_estado'];
         $this->mgt_nota_fiscal_transportadora_cep->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_cep'];
         $this->mgt_nota_fiscal_transportadora_insc_est->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_insc_est'];
         $this->mgt_nota_fiscal_transportadora_insc_mun->Text = GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_insc_mun'];
      }
      else
      {
         $this->mgt_nota_fiscal_transportadora_cnpj->Text = '';
         $this->mgt_nota_fiscal_transportadora_razao_social->Text = '';
         $this->mgt_nota_fiscal_transportadora_endereco->Text = '';
         $this->mgt_nota_fiscal_transportadora_complemento->Text = '';
         $this->mgt_nota_fiscal_transportadora_bairro->Text = '';
         $this->mgt_nota_fiscal_transportadora_cidade->Text = '';
         $this->mgt_nota_fiscal_transportadora_estado->Text = '';
         $this->mgt_nota_fiscal_transportadora_cep->Text = '';
         $this->mgt_nota_fiscal_transportadora_insc_est->Text = '';
         $this->mgt_nota_fiscal_transportadora_insc_mun->Text = '';
      }
   }

   function mgt_nota_fiscal_transportadoraChange($sender, $params)
   {
      $this->carrega_transportadora();
   }

   function nfemissaonotaimpCreate($sender, $params)
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

      //*** Carrega o Banco ***

      $this->mgt_nota_fiscal_banco->Clear();

      $Comando_SQL = "select * from mgt_bancos order by mgt_banco_descricao";

      GetConexaoPrincipal()->SQL_MGT_Bancos->Close();
      GetConexaoPrincipal()->SQL_MGT_Bancos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Bancos->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Bancos->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Bancos->EOF) != 1)
         {
            $this->mgt_nota_fiscal_banco->AddItem(GetConexaoPrincipal()->SQL_MGT_Bancos->Fields['mgt_banco_descricao'], null , GetConexaoPrincipal()->SQL_MGT_Bancos->Fields['mgt_banco_codigo']);
            GetConexaoPrincipal()->SQL_MGT_Bancos->Next();
         }
      }

      //*** Carrega o Representante/Vendedor ***

      $this->mgt_nota_fiscal_representante->Clear();

      $Comando_SQL = "select * from mgt_representantes order by mgt_representante_nome";

      GetConexaoPrincipal()->SQL_MGT_Representantes->Close();
      GetConexaoPrincipal()->SQL_MGT_Representantes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Representantes->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Representantes->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Representantes->EOF) != 1)
         {
            $this->mgt_nota_fiscal_representante->AddItem(GetConexaoPrincipal()->SQL_MGT_Representantes->Fields['mgt_representante_nome'], null , GetConexaoPrincipal()->SQL_MGT_Representantes->Fields['mgt_representante_codigo']);
            GetConexaoPrincipal()->SQL_MGT_Representantes->Next();
         }
      }

      //*** Carrega as Transportadoras ***

      $this->mgt_nota_fiscal_transportadora->Clear();

      $Comando_SQL = "select * from mgt_transportadoras order by mgt_transportadora_nome";

      GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
      GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) != 1)
         {
            $this->mgt_nota_fiscal_transportadora->AddItem(GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_nome'], null , GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_numero']);
            GetConexaoPrincipal()->SQL_MGT_Transportadoras->Next();
         }
      }

      //*** Efetua o Carregamento Restante ***

      $mgt_nota_fiscal_faturamento = $_REQUEST['mgt_nota_fiscal_faturamento'];

      //*** Efetua o Carregamento do Faturamento ***

      $Comando_SQL = "select *,date_format(mgt_faturamento_data, '%d/%m/%Y') AS mgt_faturamento_data,date_format(mgt_faturamento_data_entrega, '%d/%m/%Y') AS mgt_faturamento_data_entrega, IF(mgt_faturamento_status = 'Preparando','#','') AS mgt_faturamento_status_1, IF(mgt_faturamento_status = 'Faturado','#','') AS mgt_faturamento_status_2, IF(((mgt_faturamento_status = 'Aguardando') Or (mgt_faturamento_status = 'Contingencia')),'#','') AS mgt_faturamento_status_3 from mgt_faturamentos where mgt_faturamento_numero = '" . trim($mgt_nota_fiscal_faturamento) . "' and mgt_faturamento_status <> 'Faturado' order by mgt_faturamento_numero";

      GetConexaoPrincipal()->SQL_MGT_Faturamentos->Close();
      GetConexaoPrincipal()->SQL_MGT_Faturamentos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Faturamentos->Open();

      //*** Efetua o Carregamento dos Produtos do Faturamento ***

      $Comando_SQL = "select ";
      $Comando_SQL .= "mgt_faturamento_produto_numero, ";
      $Comando_SQL .= "mgt_faturamento_produto_numero_pedido, ";
      $Comando_SQL .= "mgt_faturamento_produto_quantidade, ";
      $Comando_SQL .= "mgt_faturamento_produto_codigo, ";
      $Comando_SQL .= "mgt_faturamento_produto_descricao, ";
      $Comando_SQL .= "mgt_faturamento_produto_valor_unitario, ";
      $Comando_SQL .= "mgt_faturamento_produto_valor_total, ";
      $Comando_SQL .= "mgt_faturamento_produto_valor_ipi, ";
      $Comando_SQL .= "mgt_faturamento_produto_lote, ";
      $Comando_SQL .= "mgt_faturamento_produto_referencia, ";
      $Comando_SQL .= "mgt_faturamento_produto_posicao, ";
      $Comando_SQL .= "mgt_faturamento_produto_descricao_detalhada, ";
      $Comando_SQL .= "mgt_faturamento_produto_unidade, ";
      $Comando_SQL .= "mgt_faturamento_produto_ipi, ";
      $Comando_SQL .= "mgt_faturamento_produto_classificacao_fiscal, ";
      $Comando_SQL .= "mgt_faturamento_produto_situacao_tributaria, ";
      $Comando_SQL .= "mgt_faturamento_produto_ncm, ";
      $Comando_SQL .= "mgt_faturamento_produto_aliquota_tributo, ";
      $Comando_SQL .= "mgt_faturamento_produto_valor_tributo ";
      $Comando_SQL .= "from mgt_faturamentos_produtos ";
      $Comando_SQL .= "where mgt_faturamento_produto_numero_pedido = " . trim($mgt_nota_fiscal_faturamento) . " order by mgt_faturamento_produto_numero";

      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos->Open();

      //*** Continua o Carregamento Restante ***

      $this->mgt_nota_fiscal_faturamento->Text = $mgt_nota_fiscal_faturamento;
      $this->mgt_nota_fiscal_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_numero'];
      $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_codigo'];
      $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_nome'];
      $this->hd_numero_pedido->Value = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_numero_pedido'];

      if(trim($this->hd_numero_pedido->Value) == '')
      {
         $this->hd_numero_pedido->Value = '0';
      }

      //*** Efetua o Carregamento do Cliente ou Fornecedor ***

      if(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_tipo']) == "F")
      {
         $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_numero = '" . trim($this->mgt_nota_fiscal_cliente_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
         GetConexaoPrincipal()->SQL_MGT_Fornecedores->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Fornecedores->Open();

         //*** Carrega o Banco e o Representante ***
         if(strlen(trim(GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_codigo'])) < 18)
         {
            $this->hd_tipo_codigo->Value = 'CPF';
         }
         else
         {
            $this->hd_tipo_codigo->Value = 'CNPJ';
         }

         $this->mgt_nota_fiscal_banco->ItemIndex = '999';
         $this->mgt_nota_fiscal_representante->ItemIndex = '1';

         //*** Razao Social e Inscricoes ***
         $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_razao_social'];
         $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_inscricao_municipal'];
         $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_inscricao_estadual'];

         //*** Endereco de Faturamento ***
         $this->mgt_nota_fiscal_endereco->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_endereco'];
         $this->mgt_nota_fiscal_complemento->Text = '';
         $this->mgt_nota_fiscal_bairro->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_bairro'];
         $this->mgt_nota_fiscal_cidade->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_cidade'];
         $this->mgt_nota_fiscal_estado->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_estado'];
         $this->mgt_nota_fiscal_cep->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_cep'];
         $this->mgt_nota_fiscal_pais->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_pais'];
         $this->mgt_nota_fiscal_fone->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_comercial'];
         $this->mgt_nota_fiscal_fax->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_fax'];

         //*** Endereco de Entrega ***
         $this->mgt_nota_fiscal_endereco_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_endereco'];
         $this->mgt_nota_fiscal_complemento_entrega->Text = '';
         $this->mgt_nota_fiscal_bairro_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_bairro'];
         $this->mgt_nota_fiscal_cidade_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_cidade'];
         $this->mgt_nota_fiscal_estado_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_estado'];
         $this->mgt_nota_fiscal_cep_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_cep'];
         $this->mgt_nota_fiscal_pais_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_pais'];
         $this->mgt_nota_fiscal_opcao_entrega->Text = 'O Mesmo';
         $this->mgt_nota_fiscal_fone_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_comercial'];
         $this->mgt_nota_fiscal_fax_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_fax'];

         //*** Endereco de Cobranca ***
         $this->mgt_nota_fiscal_endereco_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_endereco'];
         $this->mgt_nota_fiscal_complemento_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_complemento'];
         $this->mgt_nota_fiscal_bairro_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_bairro'];
         $this->mgt_nota_fiscal_cidade_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_cidade'];
         $this->mgt_nota_fiscal_estado_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_estado'];
         $this->mgt_nota_fiscal_cep_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_cep'];
         $this->mgt_nota_fiscal_pais_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_pais'];
         $this->mgt_nota_fiscal_opcao_cobranca->Text = 'O Mesmo';
         $this->mgt_nota_fiscal_fone_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_comercial'];
         $this->mgt_nota_fiscal_fax_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_fax'];

         //*** Dados de Contato ***
         $this->mgt_nota_fiscal_contato->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_contato'];
         $this->mgt_nota_fiscal_ddd->Text = '';
         $this->mgt_nota_fiscal_fone_comercial->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_comercial'];
         $this->mgt_nota_fiscal_fone_celular->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_celular'];
         $this->mgt_nota_fiscal_fone_fax->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_fax'];
         $this->mgt_nota_fiscal_email->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_email'];
         $this->mgt_nota_fiscal_site->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_site'];

         //*** Lote ***
         $this->mgt_nota_fiscal_emite_lote->ItemIndex = 'N';

         //*** Suframa ***
         $this->mgt_nota_fiscal_suframa->Text = '';
      }
      else
      {
         $Comando_SQL = "select * from mgt_clientes where mgt_cliente_numero = '" . trim($this->mgt_nota_fiscal_cliente_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
         GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

         //*** Carrega o Banco e o Representante ***
         $this->hd_tipo_codigo->Value = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_codigo_tipo'];
         $this->mgt_nota_fiscal_banco->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_banco'];
         $this->mgt_nota_fiscal_representante->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_vendedor'];

         //*** Razao Social e Inscricoes ***
         $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_razao_social'];
         $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_inscricao_municipal'];
         $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_inscricao_estadual'];

         //*** Endereco de Faturamento ***
         $this->mgt_nota_fiscal_endereco->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_endereco'];
         $this->mgt_nota_fiscal_complemento->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_complemento'];
         $this->mgt_nota_fiscal_bairro->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_bairro'];
         $this->mgt_nota_fiscal_cidade->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cidade'];
         $this->mgt_nota_fiscal_estado->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_estado'];
         $this->mgt_nota_fiscal_cep->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cep'];
         $this->mgt_nota_fiscal_pais->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_pais'];
         $this->mgt_nota_fiscal_fone->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone'];
         $this->mgt_nota_fiscal_fax->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fax'];

         //*** Endereco de Entrega ***
         $this->mgt_nota_fiscal_endereco_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_endereco_entrega'];
         $this->mgt_nota_fiscal_complemento_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_complemento_entrega'];
         $this->mgt_nota_fiscal_bairro_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_bairro_entrega'];
         $this->mgt_nota_fiscal_cidade_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cidade_entrega'];
         $this->mgt_nota_fiscal_estado_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_estado_entrega'];
         $this->mgt_nota_fiscal_cep_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cep_entrega'];
         $this->mgt_nota_fiscal_pais_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_pais_entrega'];
         $this->mgt_nota_fiscal_opcao_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_opcao_entrega'];
         $this->mgt_nota_fiscal_fone_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone_entrega'];
         $this->mgt_nota_fiscal_fax_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fax_entrega'];

         //*** Endereco de Cobranca ***
         $this->mgt_nota_fiscal_endereco_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_endereco_cobranca'];
         $this->mgt_nota_fiscal_complemento_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_complemento_cobranca'];
         $this->mgt_nota_fiscal_bairro_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_bairro_cobranca'];
         $this->mgt_nota_fiscal_cidade_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cidade_cobranca'];
         $this->mgt_nota_fiscal_estado_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_estado_cobranca'];
         $this->mgt_nota_fiscal_cep_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cep_cobranca'];
         $this->mgt_nota_fiscal_pais_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_pais_cobranca'];
         $this->mgt_nota_fiscal_opcao_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_opcao_cobranca'];
         $this->mgt_nota_fiscal_fone_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone_cobranca'];
         $this->mgt_nota_fiscal_fax_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fax_cobranca'];

         //*** Dados de Contato ***
         $this->mgt_nota_fiscal_contato->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_contato'];
         $this->mgt_nota_fiscal_ddd->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_ddd'];
         $this->mgt_nota_fiscal_fone_comercial->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone_comercial'];
         $this->mgt_nota_fiscal_fone_celular->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone_celular'];
         $this->mgt_nota_fiscal_fone_fax->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone_fax'];
         $this->mgt_nota_fiscal_email->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_email'];
         $this->mgt_nota_fiscal_site->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_site'];

         //*** Lote ***
         $this->mgt_nota_fiscal_emite_lote->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_emite_lote'];

         //*** Suframa ***
         $this->mgt_nota_fiscal_suframa->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_suframa'];

		 //*** Pagamento do Frete ***
		 $this->mgt_nota_fiscal_pagamento_frete->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_pgto_frete'];
      }

      //*** Demais Informacoes ***
      $this->mgt_nota_fiscal_cliente_desconto->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_desconto'];
      $this->mgt_nota_fiscal_data->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_data'];
      $this->mgt_nota_fiscal_data_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_data_entrega'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_condicao_pgto_1'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_condicao_pgto_2'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_condicao_pgto_3'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_condicao_pgto_4'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_condicao_pgto_5'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_condicao_pgto_6'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_condicao_pgto_7'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_condicao_pgto_8'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_condicao_pgto_9'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_condicao_pgto_10'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_condicao_pgto_11'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_condicao_pgto_12'];
      $this->mgt_nota_fiscal_observacao_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_observacao'];
      $this->mgt_nota_fiscal_ordem_compra->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_ordem_compra'];
      $this->mgt_nota_fiscal_tipo_faturamento->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_tipo_faturamento'];
      $this->mgt_nota_fiscal_transportadora->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_cliente_transportadora'];

      //$this->mgt_nota_fiscal_observacao_nota->Text = 'FAVOR CONFERIR A MERCADORIA NO RECEBIMENTO, NAO SERA ACEITO RECLAMACAO DE FALTA POSTERIOR';
      $this->mgt_nota_fiscal_observacao_nota->Text = '';

      $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_valor_pedido'];
      $this->mgt_nota_fiscal_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_valor_frete'];
      $this->mgt_nota_fiscal_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_valor_ipi'];
      $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_valor_total'];
      //$this->mgt_nota_fiscal_valor_desconto->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos->Fields['mgt_faturamento_valor_desconto'];

      if(trim($this->mgt_nota_fiscal_valor_desconto->Text) == '')
      {
         $this->mgt_nota_fiscal_valor_desconto->Text = '0.00';
      }

      //*** INICIO - Carrega a Natureza de Operacao ***

      $this->mgt_nota_fiscal_natureza_operacao->Clear();

      $Comando_SQL = "select * from mgt_cfops order by mgt_cfop_tipo Desc, mgt_cfop_descricao Asc";

      GetConexaoPrincipal()->SQL_MGT_CFOP->Close();
      GetConexaoPrincipal()->SQL_MGT_CFOP->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_CFOP->Open();

      if((GetConexaoPrincipal()->SQL_MGT_CFOP->EOF) != 1)
      {
         $this->mgt_nota_fiscal_natureza_operacao->AddItem('--- SELECIONE A NATUREZA DE OPERACAO ---', null , '--- SELECIONE A NATUREZA DE OPERACAO ---');

         while((GetConexaoPrincipal()->SQL_MGT_CFOP->EOF) != 1)
         {
            if(trim($this->mgt_nota_fiscal_estado->Text) == 'SP')
            {
               $this->mgt_nota_fiscal_natureza_operacao->AddItem(trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_dentro']) . '-' . trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_descricao']), null , GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_descricao']);
            }
            else
            {
               $this->mgt_nota_fiscal_natureza_operacao->AddItem(trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_fora']) . '-' . trim(GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_descricao']), null , GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_descricao']);
            }
            GetConexaoPrincipal()->SQL_MGT_CFOP->Next();
         }
      }

      //*** FINAL - Carrega a Natureza de Operacao ***

      $this->carrega_transportadora();
      $this->carrega_natureza_operacao();
      $this->carrega_tipo_faturamento();

      $this->MSG_Erro->Caption = "";
   }

   function bt_fecharClick($sender, $params)
   {
      //*** Limpa os Campos para o Proximo Faturamento ***

      $this->limpa_campos();

      redirect('nf_emissao_nota.php');
   }

   function bt_imprimirClick($sender, $params)
   {
      if(trim($this->mgt_nota_fiscal_natureza_operacao->ItemIndex) != '--- SELECIONE A NATUREZA DE OPERACAO ---')
      {
         if(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == 'Venda Programada')
         {
            $this->msg_confirmacao->Caption = '<center>A Impressora esta posicionada corretamente?</center>';
         }
         else
         {
            if($this->hd_apenas_registra->Value == 0)
            {
               $this->msg_confirmacao->Caption = '<center><b>Gerar o XML da NFe</b></center>Voce deseja realmente gerar o XML da NFe e Transmitir?<br><font color=#FF0000><b>Obs.: Clique somente uma vez no botao escolhido e aguarde a proxima tela.</b></font>';
            }
            else
            {
               $this->msg_confirmacao->Caption = '<center>Esta opcao apenas ira registrar a Nota Fiscal no Banco de Dados do Sistema, deseja continuar?</center>';
            }
         }

         $this->confirmacao->Top = 200;
         $this->confirmacao->IsVisible = true;
      }
      else
      {
         $this->MSG_Erro->Caption = 'Por favor, selecione a Natureza de Operacao.';
      }
   }

   function nfemissaonotaimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfemissaonotaimp;

//Creates the form
$nfemissaonotaimp = new nfemissaonotaimp($application);

//Read from resource file
$nfemissaonotaimp->loadResource(__FILE__);

//Shows the form
$nfemissaonotaimp->show();

?>