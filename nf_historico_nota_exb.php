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
class nfhistoriconotaexb extends Page
{
   public $mgt_nota_fiscal_zerar_base_icms = null;
   public $mgt_nota_fiscal_consumo = null;
   public $mgt_nota_fiscal_revenda = null;
   public $Label131 = null;
   public $Label130 = null;
   public $Label129 = null;
   public $mgt_nota_fiscal_transportadora = null;
   public $mgt_nota_fiscal_tipo_transporte = null;
   public $mgt_nota_fiscal_pagamento_frete = null;
   public $mgt_nota_fiscal_descricao_condicao_pgto = null;
   public $mgt_nota_fiscal_representante = null;
   public $mgt_nota_fiscal_banco = null;
   public $mgt_nota_fiscal_imprime_observacao_nota = null;
   public $mgt_nota_fiscal_tipo_nota = null;
   public $mgt_nota_fiscal_natureza_operacao = null;
   public $mgt_nota_fiscal_emite_lote = null;
   public $mgt_nota_fiscal_tipo_faturamento = null;
   public $hd_nota_fiscal_descricao_condicao_pgto = null;
   public $Label128 = null;
   public $mgt_nota_fiscal_natureza_operacao_imp = null;
   public $Label127 = null;
   public $hd_nota_fiscal_imprime_observacao_nota = null;
   public $Label126 = null;
   public $mgt_nota_fiscal_suframa = null;
   public $Label85 = null;
   public $mgt_nota_fiscal_suframa_desconto_pis_cofins = null;
   public $Label125 = null;
   public $mgt_nota_fiscal_suframa_desconto_icms = null;
   public $Label124 = null;
   public $Panel2 = null;
   public $Label71 = null;
   public $mgt_nota_fiscal_cfop_2 = null;
   public $Label97 = null;
   public $mgt_nota_fiscal_cfop = null;
   public $Label76 = null;
   public $Label65 = null;
   public $mgt_nota_fiscal_observacao_adicional_8 = null;
   public $mgt_nota_fiscal_observacao_adicional_9 = null;
   public $Label123 = null;
   public $Label122 = null;
   public $Label121 = null;
   public $Label120 = null;
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
   public $Label48 = null;
   public $Label70 = null;
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
   public $Label75 = null;
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

   function mgt_nota_fiscal_descricao_condicao_pgtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_1.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cfop.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_12;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_11;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_10;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_9;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_8;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_7;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_6;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_5;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_4;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_3;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_2;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_1;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_12
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_11
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_10
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_9
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_8
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_7
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_6
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_5
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_4
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_3
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_2
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_1
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_12
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfhistoriconotaexb.mgt_nota_fiscal_dup_forma_12.value = '';
   document.nfhistoriconotaexb.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_11
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfhistoriconotaexb.mgt_nota_fiscal_dup_forma_11.value = '';
   document.nfhistoriconotaexb.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_10
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfhistoriconotaexb.mgt_nota_fiscal_dup_forma_10.value = '';
   document.nfhistoriconotaexb.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_9
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfhistoriconotaexb.mgt_nota_fiscal_dup_forma_9.value = '';
   document.nfhistoriconotaexb.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_8
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfhistoriconotaexb.mgt_nota_fiscal_dup_forma_8.value = '';
   document.nfhistoriconotaexb.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_7
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfhistoriconotaexb.mgt_nota_fiscal_dup_forma_7.value = '';
   document.nfhistoriconotaexb.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_6
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfhistoriconotaexb.mgt_nota_fiscal_dup_forma_6.value = '';
   document.nfhistoriconotaexb.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_5
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfhistoriconotaexb.mgt_nota_fiscal_dup_forma_5.value = '';
   document.nfhistoriconotaexb.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_4
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfhistoriconotaexb.mgt_nota_fiscal_dup_forma_4.value = '';
   document.nfhistoriconotaexb.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_3
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfhistoriconotaexb.mgt_nota_fiscal_dup_forma_3.value = '';
   document.nfhistoriconotaexb.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_2
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfhistoriconotaexb.mgt_nota_fiscal_dup_forma_2.value = '';
   document.nfhistoriconotaexb.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_1
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfhistoriconotaexb.mgt_nota_fiscal_dup_forma_1.value = '';
   document.nfhistoriconotaexb.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_data_emissaoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_data_emissao
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

   function mgt_nota_fiscal_suframa_desconto_pis_cofinsJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfhistoriconotaexb.mgt_nota_fiscal_suframa.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_suframa_desconto_pis_cofins.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_suframa_desconto_pis_cofinsJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_suframa_desconto_pis_cofins;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_suframa_desconto_icms;
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_numero.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_codigo.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_nome.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_razao_social.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_inscricao_estadual.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_inscricao_municipal.focus();
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
     document.nfhistoriconotaexb.bt_fechar.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_complemento.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_bairro.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cidade.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_estado.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cep.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_pais.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_fone.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_fax.focus();
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
     document.nfhistoriconotaexb.bt_fechar.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_endereco_entrega.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_complemento_entrega.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_bairro_entrega.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cidade_entrega.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_estado_entrega.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cep_entrega.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_pais_entrega.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_fone_entrega.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_fax_entrega.focus();
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
     document.nfhistoriconotaexb.bt_fechar.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_endereco_cobranca.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_complemento_cobranca.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_bairro_cobranca.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cidade_cobranca.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_estado_cobranca.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cep_cobranca.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_pais_cobranca.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_fone_cobranca.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_fax_cobranca.focus();
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
     document.nfhistoriconotaexb.bt_fechar.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_ddd.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_fone_comercial.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_fone_celular.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_fone_fax.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_email.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_site.focus();
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
     document.nfhistoriconotaexb.bt_fechar.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_natureza_operacao_imp.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_data_emissao.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_numero.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_suframa_desconto_icms.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cfop_2.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_observacao_nota.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_desconto.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_data.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_data_entrega.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_emite_lote.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_ordem_compra.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_desconto.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_natureza_operacao.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_observacao_faturamento.focus();
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
     document.nfhistoriconotaexb.bt_fechar.focus();
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
     document.nfhistoriconotaexb.bt_fechar.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_representante.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_1.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_nro_1.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_1.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_1.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_2.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_nro_2.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_2.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_2.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_3.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_nro_3.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_3.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_3.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_4.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_nro_4.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_4.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_4.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_5.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_nro_5.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_5.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_5.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_6.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_nro_6.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_6.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_6.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_7.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_nro_7.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_7.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_7.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_8.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_nro_8.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_8.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_8.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_9.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_nro_9.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_9.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_9.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_10.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_nro_10.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_10.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_10.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_11.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_nro_11.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_11.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_11.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_cliente_condicao_pgto_12.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_nro_12.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_dt_vcto_12.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_dup_vlr_12.focus();
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
     document.nfhistoriconotaexb.bt_fechar.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_observacao_adicional_2.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_observacao_adicional_3.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_observacao_adicional_4.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_observacao_adicional_5.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_observacao_adicional_6.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_observacao_adicional_7.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_observacao_adicional_8.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_observacao_adicional_9.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_observacao_adicional_10.focus();
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
     document.nfhistoriconotaexb.bt_fechar.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_tipo_transporte.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora_razao_social.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora_veiculo_placa.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora_veiculo_estado.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora_cnpj.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora_insc_est.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora_insc_mun.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora_endereco.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora_complemento.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora_bairro.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora_cidade.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora_estado.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_transportadora_cep.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_qtde.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_especie.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_marca.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_vol_numero.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_peso_bruto.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_peso_liquido.focus();
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
     document.nfhistoriconotaexb.bt_fechar.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_base_aliquota_icms_reduzida.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_valor_desconto.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_base_icms.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_consumo.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_zerar_base_icms.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_base_icms.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_valor_icms.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_base_icms_sub.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_valor_icms_sub.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_valor_produtos.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_valor_frete.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_valor_seguro.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_outras_despesas.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_valor_ipi.focus();
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
     document.nfhistoriconotaexb.mgt_nota_fiscal_valor_total.focus();
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
     document.nfhistoriconotaexb.bt_fechar.focus();
     return false;
   }

<?php

   }

   public function limpa_campos()
   {
      $this->itens_faturamento->TabIndex = 0;
      $this->dados_cliente->TabIndex = 0;

      $this->hd_nota_fiscal_imprime_observacao_nota->Value = 'S';
      $this->hd_nota_fiscal_descricao_condicao_pgto->Value = '0';

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

      $this->mgt_nota_fiscal_natureza_operacao->Text = '--- SELECIONE A NATUREZA DE OPERACAO ---';
      $this->mgt_nota_fiscal_natureza_operacao_imp->Text = '';
      $this->mgt_nota_fiscal_tipo_faturamento->Text = 'Nota Fiscal';
      $this->mgt_nota_fiscal_data_emissao->Text = '';
      $this->mgt_nota_fiscal_numero->Text = '';
      $this->mgt_nota_fiscal_cfop->Text = '';
      $this->mgt_nota_fiscal_cfop_2->Text = '';
      $this->mgt_nota_fiscal_tipo_nota->Text = '1';
      $this->mgt_nota_fiscal_cliente_desconto->Text = '0';
      $this->mgt_nota_fiscal_data->Text = '';
      $this->mgt_nota_fiscal_data_entrega->Text = '';
      $this->mgt_nota_fiscal_emite_lote->Text = 'N';

      $this->mgt_nota_fiscal_suframa_desconto_icms->Text = '7';
      $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text = '9.25';
      $this->mgt_nota_fiscal_suframa->Text = '';

      $this->mgt_nota_fiscal_ordem_compra->Text = '';
      $this->mgt_nota_fiscal_observacao_nota->Text = '';
      $this->mgt_nota_fiscal_observacao_faturamento->Text = '';
      $this->mgt_nota_fiscal_imprime_observacao_nota->Text = '';

      //*** Condicoes de Pagamento ***

      $this->mgt_nota_fiscal_descricao_condicao_pgto->Text = '0';
      $this->mgt_nota_fiscal_banco->Text = '0';
      $this->mgt_nota_fiscal_representante->Text = '0';
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

      //*** Transportador ***

      $this->mgt_nota_fiscal_pagamento_frete->Text = 'Cliente';
      $this->mgt_nota_fiscal_tipo_transporte->Text = 'Rodoviario';
      $this->mgt_nota_fiscal_transportadora->Text = '0';
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
      $this->mgt_nota_fiscal_revenda->Text = 'N';
      $this->mgt_nota_fiscal_consumo->Text = 'N';
      $this->mgt_nota_fiscal_zerar_base_icms->Text = 'N';
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
   }

   function mgt_nota_fiscal_peso_liquidoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_peso_liquido;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_peso_bruto;
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_qtde
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cfop_2
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_cfop
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

   var campo = document.nfhistoriconotaexb.mgt_nota_fiscal_numero
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

   function nfhistoriconotaexbCreate($sender, $params)
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

      $mgt_nota_fiscal_numero = $_REQUEST['mgt_nota_fiscal_numero'];
      $this->mgt_nota_fiscal_numero->Text = $mgt_nota_fiscal_numero;

      if(trim($mgt_nota_fiscal_numero) != '')
      {
         //*** Efetua o Carregamento da Nota Fiscal ***

         $Comando_SQL = "select *,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_vcto_1, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_vcto_1,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_vcto_2, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_vcto_2,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_vcto_3, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_vcto_3,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_vcto_4, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_vcto_4,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_vcto_5, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_vcto_5,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_vcto_6, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_vcto_6,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_vcto_7, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_vcto_7,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_vcto_8, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_vcto_8,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_vcto_9, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_vcto_9,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_vcto_10, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_vcto_10,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_vcto_11, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_vcto_11,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_vcto_12, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_vcto_12,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_pgto_1, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_pgto_1,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_pgto_2, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_pgto_2,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_pgto_3, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_pgto_3,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_pgto_4, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_pgto_4,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_pgto_5, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_pgto_5,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_pgto_6, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_pgto_6,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_pgto_7, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_pgto_7,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_pgto_8, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_pgto_8,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_pgto_9, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_pgto_9,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_pgto_10, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_pgto_10,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_pgto_11, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_pgto_11,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_dup_dt_pgto_12, '%d/%m/%Y') AS mgt_nota_fiscal_dup_dt_pgto_12,";
         $Comando_SQL .= "date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao,date_format(mgt_nota_fiscal_data, '%d/%m/%Y') AS mgt_nota_fiscal_data,date_format(mgt_nota_fiscal_data_entrega, '%d/%m/%Y') AS mgt_nota_fiscal_data_entrega from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = '" . substr(trim($this->mgt_nota_fiscal_numero->Text),0,3) . "' And mgt_nota_fiscal_numero = " . substr(trim($this->mgt_nota_fiscal_numero->Text),3);

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

         //*** Efetua o Carregamento dos Produtos da Nota Fiscal ***

         $Comando_SQL = "select * from mgt_notas_fiscais_produtos where mgt_nota_fiscal_produto_finalidade = '" . substr(trim($this->mgt_nota_fiscal_numero->Text),0,3) . "' And mgt_nota_fiscal_produto_numero_nota = " . substr(trim($this->mgt_nota_fiscal_numero->Text),3) . " order by mgt_nota_fiscal_produto_numero";

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Open();

         //*** Continua o Carregamento Restante ***
         $this->mgt_nota_fiscal_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_faturamento'];
         $this->mgt_nota_fiscal_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_numero'];
         $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'];
         $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'];

         //*** Razao Social e Inscricoes ***
         $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'];
         $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_municipal'];
         $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_estadual'];

         //*** Endereco de Faturamento ***
         $this->mgt_nota_fiscal_endereco->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_endereco'];
         $this->mgt_nota_fiscal_complemento->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_complemento'];
         $this->mgt_nota_fiscal_bairro->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_bairro'];
         $this->mgt_nota_fiscal_cidade->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cidade'];
         $this->mgt_nota_fiscal_estado->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_estado'];
         $this->mgt_nota_fiscal_cep->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cep'];
         $this->mgt_nota_fiscal_pais->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_pais'];
         $this->mgt_nota_fiscal_fone->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'];
         $this->mgt_nota_fiscal_fax->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fax'];

         //*** Endereco de Entrega ***
         $this->mgt_nota_fiscal_endereco_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_endereco_entrega'];
         $this->mgt_nota_fiscal_complemento_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_complemento_entrega'];
         $this->mgt_nota_fiscal_bairro_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_bairro_entrega'];
         $this->mgt_nota_fiscal_cidade_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cidade_entrega'];
         $this->mgt_nota_fiscal_estado_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_estado_entrega'];
         $this->mgt_nota_fiscal_cep_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cep_entrega'];
         $this->mgt_nota_fiscal_pais_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_pais_entrega'];
         $this->mgt_nota_fiscal_opcao_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_opcao_entrega'];
         $this->mgt_nota_fiscal_fone_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone_entrega'];
         $this->mgt_nota_fiscal_fax_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fax_entrega'];

         //*** Endereco de Cobranca ***
         $this->mgt_nota_fiscal_endereco_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_endereco_cobranca'];
         $this->mgt_nota_fiscal_complemento_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_complemento_cobranca'];
         $this->mgt_nota_fiscal_bairro_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_bairro_cobranca'];
         $this->mgt_nota_fiscal_cidade_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cidade_cobranca'];
         $this->mgt_nota_fiscal_estado_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_estado_cobranca'];
         $this->mgt_nota_fiscal_cep_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cep_cobranca'];
         $this->mgt_nota_fiscal_pais_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_pais_cobranca'];
         $this->mgt_nota_fiscal_opcao_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_opcao_cobranca'];
         $this->mgt_nota_fiscal_fone_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone_cobranca'];
         $this->mgt_nota_fiscal_fax_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fax_cobranca'];

         //*** Dados de Contato ***
         $this->mgt_nota_fiscal_contato->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_contato'];
         $this->mgt_nota_fiscal_ddd->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_ddd'];
         $this->mgt_nota_fiscal_fone_comercial->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone_comercial'];
         $this->mgt_nota_fiscal_fone_celular->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone_celular'];
         $this->mgt_nota_fiscal_fone_fax->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone_fax'];
         $this->mgt_nota_fiscal_email->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_email'];
         $this->mgt_nota_fiscal_site->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_site'];

         //*** Adicionais ***
         $this->mgt_nota_fiscal_tipo_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_tipo_faturamento'];
         $this->mgt_nota_fiscal_data_emissao->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'];
         $this->mgt_nota_fiscal_suframa_desconto_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_suframa_desconto_icms'];
         $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_suframa_desconto_pis_cofins'];
         $this->mgt_nota_fiscal_suframa->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_suframa'];
         $this->mgt_nota_fiscal_cliente_desconto->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_desconto'];
         $this->mgt_nota_fiscal_data->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data'];
         $this->mgt_nota_fiscal_data_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_entrega'];
         $this->mgt_nota_fiscal_emite_lote->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_emite_lote'];
         $this->mgt_nota_fiscal_ordem_compra->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_ordem_compra'];
         $this->mgt_nota_fiscal_natureza_operacao->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_natureza_operacao'];
         $this->mgt_nota_fiscal_natureza_operacao_imp->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_natureza_operacao_imp'];
         $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop'];
         $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop_2'];

         if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_tipo_nota']) == '1')
         {
            $this->mgt_nota_fiscal_tipo_nota->Text = 'Saida';
         }
         else
         {
            $this->mgt_nota_fiscal_tipo_nota->Text = 'Entrada';
         }

         $this->mgt_nota_fiscal_observacao_nota->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_observacao_nota'];
         $this->mgt_nota_fiscal_observacao_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_observacao_faturamento'];

         $this->hd_nota_fiscal_imprime_observacao_nota->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_imprime_observacao_nota'];

         if($this->hd_nota_fiscal_imprime_observacao_nota->Value == 'S')
         {
            $this->mgt_nota_fiscal_imprime_observacao_nota->Text = 'Imprime os Dados Adicionais na Nota Fiscal';
         }
         else
         {
            $this->mgt_nota_fiscal_imprime_observacao_nota->Text = 'Nao Imprime os Dados Adicionais na Nota Fiscal';
         }

         //*** Condicoes de Pagamento ***
         $this->mgt_nota_fiscal_banco->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'];
         $this->mgt_nota_fiscal_representante->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_representante'];

         $this->hd_nota_fiscal_descricao_condicao_pgto->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_descricao_condicao_pgto'];

         if(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '1')
         {
            $this->mgt_nota_fiscal_descricao_condicao_pgto->Text = 'A VISTA';
         }
         elseif(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '2')
         {
            $this->mgt_nota_fiscal_descricao_condicao_pgto->Text = 'SEM VALOR COMERCIAL';
         }
         elseif(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '3')
         {
            $this->mgt_nota_fiscal_descricao_condicao_pgto->Text = 'ANTECIPADO';
         }
         else
         {
            $this->mgt_nota_fiscal_descricao_condicao_pgto->Text = '';
         }

         $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_condicao_pgto_1'];
         $this->mgt_nota_fiscal_dup_nro_1->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_1'];
         $this->mgt_nota_fiscal_dup_dt_vcto_1->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_1'];
         $this->mgt_nota_fiscal_dup_vlr_1->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_1'];
         $this->mgt_nota_fiscal_dup_forma_1->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_forma_1'];

         $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_condicao_pgto_2'];
         $this->mgt_nota_fiscal_dup_nro_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_2'];
         $this->mgt_nota_fiscal_dup_dt_vcto_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_2'];
         $this->mgt_nota_fiscal_dup_vlr_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_2'];
         $this->mgt_nota_fiscal_dup_forma_2->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_forma_2'];

         $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_condicao_pgto_3'];
         $this->mgt_nota_fiscal_dup_nro_3->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_3'];
         $this->mgt_nota_fiscal_dup_dt_vcto_3->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_3'];
         $this->mgt_nota_fiscal_dup_vlr_3->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_3'];
         $this->mgt_nota_fiscal_dup_forma_3->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_forma_3'];

         $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_condicao_pgto_4'];
         $this->mgt_nota_fiscal_dup_nro_4->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_4'];
         $this->mgt_nota_fiscal_dup_dt_vcto_4->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_4'];
         $this->mgt_nota_fiscal_dup_vlr_4->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_4'];
         $this->mgt_nota_fiscal_dup_forma_4->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_forma_4'];

         $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_condicao_pgto_5'];
         $this->mgt_nota_fiscal_dup_nro_5->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_5'];
         $this->mgt_nota_fiscal_dup_dt_vcto_5->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_5'];
         $this->mgt_nota_fiscal_dup_vlr_5->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_5'];
         $this->mgt_nota_fiscal_dup_forma_5->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_forma_5'];

         $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_condicao_pgto_6'];
         $this->mgt_nota_fiscal_dup_nro_6->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_6'];
         $this->mgt_nota_fiscal_dup_dt_vcto_6->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_6'];
         $this->mgt_nota_fiscal_dup_vlr_6->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_6'];
         $this->mgt_nota_fiscal_dup_forma_6->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_forma_6'];

         $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_condicao_pgto_7'];
         $this->mgt_nota_fiscal_dup_nro_7->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_7'];
         $this->mgt_nota_fiscal_dup_dt_vcto_7->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_7'];
         $this->mgt_nota_fiscal_dup_vlr_7->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_7'];
         $this->mgt_nota_fiscal_dup_forma_7->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_forma_7'];

         $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_condicao_pgto_8'];
         $this->mgt_nota_fiscal_dup_nro_8->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_8'];
         $this->mgt_nota_fiscal_dup_dt_vcto_8->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_8'];
         $this->mgt_nota_fiscal_dup_vlr_8->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_8'];
         $this->mgt_nota_fiscal_dup_forma_8->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_forma_8'];

         $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_condicao_pgto_9'];
         $this->mgt_nota_fiscal_dup_nro_9->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_9'];
         $this->mgt_nota_fiscal_dup_dt_vcto_9->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_9'];
         $this->mgt_nota_fiscal_dup_vlr_9->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_9'];
         $this->mgt_nota_fiscal_dup_forma_9->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_forma_9'];

         $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_condicao_pgto_10'];
         $this->mgt_nota_fiscal_dup_nro_10->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_10'];
         $this->mgt_nota_fiscal_dup_dt_vcto_10->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_10'];
         $this->mgt_nota_fiscal_dup_vlr_10->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_10'];
         $this->mgt_nota_fiscal_dup_forma_10->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_forma_10'];

         $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_condicao_pgto_11'];
         $this->mgt_nota_fiscal_dup_nro_11->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_11'];
         $this->mgt_nota_fiscal_dup_dt_vcto_11->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_11'];
         $this->mgt_nota_fiscal_dup_vlr_11->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_11'];
         $this->mgt_nota_fiscal_dup_forma_11->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_forma_11'];

         $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_condicao_pgto_12'];
         $this->mgt_nota_fiscal_dup_nro_12->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_12'];
         $this->mgt_nota_fiscal_dup_dt_vcto_12->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_12'];
         $this->mgt_nota_fiscal_dup_vlr_12->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_12'];
         $this->mgt_nota_fiscal_dup_forma_12->Value = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_forma_12'];

         //*** Observacoes Adicionais ***
         $this->mgt_nota_fiscal_observacao_adicional_1->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_observacao_adicional_1'];
         $this->mgt_nota_fiscal_observacao_adicional_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_observacao_adicional_2'];
         $this->mgt_nota_fiscal_observacao_adicional_3->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_observacao_adicional_3'];
         $this->mgt_nota_fiscal_observacao_adicional_4->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_observacao_adicional_4'];
         $this->mgt_nota_fiscal_observacao_adicional_5->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_observacao_adicional_5'];
         $this->mgt_nota_fiscal_observacao_adicional_6->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_observacao_adicional_6'];
         $this->mgt_nota_fiscal_observacao_adicional_7->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_observacao_adicional_7'];
         $this->mgt_nota_fiscal_observacao_adicional_8->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_observacao_adicional_8'];
         $this->mgt_nota_fiscal_observacao_adicional_9->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_observacao_adicional_9'];
         $this->mgt_nota_fiscal_observacao_adicional_10->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_observacao_adicional_10'];

         //*** Transportador ***
         $this->mgt_nota_fiscal_pagamento_frete->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_pagamento_frete'];
         $this->mgt_nota_fiscal_tipo_transporte->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_tipo_transporte'];
         $this->mgt_nota_fiscal_transportadora->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora'];
         $this->mgt_nota_fiscal_transportadora_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora_razao_social'];
         $this->mgt_nota_fiscal_transportadora_veiculo_placa->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora_veiculo_placa'];
         $this->mgt_nota_fiscal_transportadora_veiculo_estado->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora_veiculo_estado'];
         $this->mgt_nota_fiscal_transportadora_cnpj->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora_cnpj'];
         $this->mgt_nota_fiscal_transportadora_insc_est->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora_insc_est'];
         $this->mgt_nota_fiscal_transportadora_insc_mun->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora_insc_mun'];
         $this->mgt_nota_fiscal_transportadora_endereco->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora_endereco'];
         $this->mgt_nota_fiscal_transportadora_complemento->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora_complemento'];
         $this->mgt_nota_fiscal_transportadora_bairro->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora_bairro'];
         $this->mgt_nota_fiscal_transportadora_cidade->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora_cidade'];
         $this->mgt_nota_fiscal_transportadora_estado->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora_estado'];
         $this->mgt_nota_fiscal_transportadora_cep->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora_cep'];
         $this->mgt_nota_fiscal_qtde->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_qtde'];
         $this->mgt_nota_fiscal_especie->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_especie'];
         $this->mgt_nota_fiscal_marca->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_marca'];
         $this->mgt_nota_fiscal_vol_numero->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_vol_numero'];
         $this->mgt_nota_fiscal_peso_bruto->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_peso_bruto'];
         $this->mgt_nota_fiscal_peso_liquido->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_peso_liquido'];

         //*** Calculo dos Impostos ***
         $this->mgt_nota_fiscal_aliquota_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_aliquota_icms'];
         $this->mgt_nota_fiscal_base_aliquota_icms_reduzida->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_aliquota_icms_reduzida'];
         $this->mgt_nota_fiscal_valor_desconto->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_desconto'];

         $this->mgt_nota_fiscal_revenda->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_revenda'];
         $this->mgt_nota_fiscal_consumo->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_consumo'];
         $this->mgt_nota_fiscal_zerar_base_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_zerar_base_icms'];

         $this->mgt_nota_fiscal_base_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms'];
         $this->mgt_nota_fiscal_valor_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms'];
         $this->mgt_nota_fiscal_base_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms_sub'];
         $this->mgt_nota_fiscal_valor_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms_sub'];
         $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_produtos'];
         $this->mgt_nota_fiscal_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_frete'];
         $this->mgt_nota_fiscal_valor_seguro->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_seguro'];
         $this->mgt_nota_fiscal_outras_despesas->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_outras_despesas'];
         $this->mgt_nota_fiscal_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_ipi'];
         $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'];

         $this->MSG_Erro->Caption = "";
      }
   }

   function bt_fecharClick($sender, $params)
   {
      //*** Limpa os Campos para o Proximo Faturamento ***

      $this->limpa_campos();

      redirect("nf_historico_nota.php");
   }

   function nfhistoriconotaexbJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfhistoriconotaexb;

//Creates the form
$nfhistoriconotaexb = new nfhistoriconotaexb($application);

//Read from resource file
$nfhistoriconotaexb->loadResource(__FILE__);

//Shows the form
$nfhistoriconotaexb->show();

?>