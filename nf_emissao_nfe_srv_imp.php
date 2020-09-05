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

/*
----------------------------
--- Codigos dos Clientes ---
----------------------------

Recitotal
Codigo      Serv.  Atividade                                                  Aliquota
383949903 - 709  - Servicos de trituracao, limpeza e classificacao de vidro - 5.00

AVS
Codigo      Serv.   Atividade                                                 Aliquota
3530300   - 14.01 - CONSERTO E MANUTENCAO DE EQUIPAMENTOS ELETRONICOS       - 2.00

ADVISER
Codigo      Serv.   Atividade                                                 Aliquota
3390220   - 14.02 - ASSISTENCIA TECNICA INSTAL E MANUT EM APAR ELETROE      - 5.00

STLAB
Codigo      Serv.   Atividade                                                 Aliquota
3530300   - 14.01 - CONSERTO E MANUTENCAO DE EQUIPAMENTOS ELETRONICOS       - 2.00

----------------------------
*/

//**** Funcao que exibe a imagem de carregando ***

echo '<div id="loading_pg" style="position:absolute; width:755px; text-align:left; left:369px; top:5px;"><img src="imagens/indicator_processo.gif" border=0></div>';

?>

<script language="JavaScript">
        var ld=(document.all);
        var ns4=document.layers;
        var ns6=document.getElementById&&!document.all;
        var ie4=document.all;
        if (ns4)
           ld=document.loading_pg;
        else if (ns6)
           ld=document.getElementById("loading_pg").style;
        else if (ie4)
          ld=document.all.loading_pg.style;

        function carregando_pagina()
        {
           if(ns4)
           {
              ld.visibility="hidden";
           }
           else if (ns6||ie4) ld.display="none";
        }
</script>

<?php
require_once("vcl/vcl.inc.php");
//Inclusoes
require_once("conexao_principal.php");
use_unit("styles.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//Definicao de classe
class nfemissaonfesrvimp extends Page
{
   public $hd_numero_faturamento = null;
   public $hd_formulario_carregado = null;
   public $mgt_nota_fiscal_tipo_faturamento = null;
   public $Discriminacao = null;
   public $Label36 = null;
   public $DTVencimento = null;
   public $NroPedido = null;
   public $QtdePecas = null;
   public $Label35 = null;
   public $Label34 = null;
   public $Label33 = null;
   public $Estilo_Pagina = null;
   public $Email = null;
   public $Telefone = null;
   public $Cep = null;
   public $Uf = null;
   public $Cidade = null;
   public $Bairro = null;
   public $Complemento = null;
   public $Numero = null;
   public $Endereco = null;
   public $TomadorRazaoSocial = null;
   public $TomadorCnpj = null;
   public $PrestadorInscricaoMunicipal = null;
   public $PrestadorRazaoSocial = null;
   public $PrestadorCnpj = null;
   public $ValorIss = null;
   public $Aliquota = null;
   public $BaseCalculo = null;
   public $ValorServicos = null;
   public $IssRetido = null;
   public $CodigoMunicipio = null;
   public $CodigoTributacaoMunicipio = null;
   public $CodigoCnae = null;
   public $ItemListaServico = null;
   public $Status = null;
   public $IncentivadorCultural = null;
   public $OptanteSimplesNacional = null;
   public $NaturezaOperacao = null;
   public $Tipo = null;
   public $Serie = null;
   public $DataEmissao = null;
   public $NumeroLote = null;
   public $Label32 = null;
   public $Label31 = null;
   public $Label30 = null;
   public $Label29 = null;
   public $Label28 = null;
   public $Label27 = null;
   public $Label26 = null;
   public $Label24 = null;
   public $Label23 = null;
   public $Label22 = null;
   public $Label21 = null;
   public $GroupBox5 = null;
   public $Label20 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $Label11 = null;
   public $GroupBox4 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label5 = null;
   public $Label25 = null;
   public $Label6 = null;
   public $Label1 = null;
   public $GroupBox3 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label2 = null;
   public $GroupBox2 = null;
   public $GroupBox1 = null;
   public $opcoes_faturamento = null;
   public $bt_transmitir = null;
   public $Label63 = null;
   public $Panel13 = null;
   public $Label62 = null;
   public $Panel12 = null;
   public $bt_fechar = null;
   public $MSG_Erro = null;
   public $area_sistema = null;
    public $Label37 = null;

   public function imprime_nota_fiscal()
   {
      //*** Seleciona a Venda Programada ***
      $Comando_SQL = "select *,date_format(mgt_programada_data_emissao, '%d/%m/%Y') AS mgt_programada_data_emissao,date_format(mgt_programada_data, '%d/%m/%Y') AS mgt_programada_data,date_format(mgt_programada_data_entrega, '%d/%m/%Y') AS mgt_programada_data_entrega from mgt_programadas where mgt_programada_finalidade = 'SRV' And mgt_programada_numero = " . trim($this->NumeroLote->Text);

      GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
      GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
      {
         $this->MSG_Erro->Caption = 'Este Numero de Venda Programada ja existe! Por favor, informe o Numero correto.';
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
         $Comando_SQL .= "'" . "SRV" . "', ";
         $Comando_SQL .= "'" . $this->NumeroLote->Text . "', ";
         $Comando_SQL .= "'" . $this->hd_numero_faturamento->Value . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . $this->ItemListaServico->Text . "', ";
         $Comando_SQL .= "'" . $this->ItemListaServico->Text . "', ";
         $Comando_SQL .= "'" . "1" . "', ";
         $Comando_SQL .= "'" . "PRESTACAO DE SERVICOS" . "', ";
         $Comando_SQL .= "'" . "PRESTACAO DE SERVICOS" . "', ";
         $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_numero'] . "', ";
         $Comando_SQL .= "'" . $this->TomadorCnpj->Text . "', ";
         $Comando_SQL .= "'" . $this->TomadorRazaoSocial->Text . "', ";
         $Comando_SQL .= "'" . $this->TomadorRazaoSocial->Text . "', ";
         $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_inscricao_municipal'] . "', ";
         $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_inscricao_estadual'] . "', ";
         $Comando_SQL .= "'" . $this->Endereco->Text . ", " . $this->Numero->Text . "', ";
         $Comando_SQL .= "'" . $this->Complemento->Text . "', ";
         $Comando_SQL .= "'" . $this->Bairro->Text . "', ";
         $Comando_SQL .= "'" . $this->Cidade->Text . "', ";
         $Comando_SQL .= "'" . $this->Uf->Text . "', ";
         $Comando_SQL .= "'" . $this->Cep->Text . "', ";
         $Comando_SQL .= "'" . "Brasil" . "', ";
         $Comando_SQL .= "'" . $this->Telefone->Text . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->Email->Text . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->Endereco->Text . ", " . $this->Numero->Text . "', ";
         $Comando_SQL .= "'" . $this->Complemento->Text . "', ";
         $Comando_SQL .= "'" . $this->Bairro->Text . "', ";
         $Comando_SQL .= "'" . $this->Cidade->Text . "', ";
         $Comando_SQL .= "'" . $this->Uf->Text . "', ";
         $Comando_SQL .= "'" . $this->Cep->Text . "', ";
         $Comando_SQL .= "'" . "Brasil" . "', ";
         $Comando_SQL .= "'" . "O Mesmo" . "', ";
         $Comando_SQL .= "'" . $this->Telefone->Text . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->Endereco->Text . ", " . $this->Numero->Text . "', ";
         $Comando_SQL .= "'" . $this->Complemento->Text . "', ";
         $Comando_SQL .= "'" . $this->Bairro->Text . "', ";
         $Comando_SQL .= "'" . $this->Cidade->Text . "', ";
         $Comando_SQL .= "'" . $this->Uf->Text . "', ";
         $Comando_SQL .= "'" . $this->Cep->Text . "', ";
         $Comando_SQL .= "'" . "Brasil" . "', ";
         $Comando_SQL .= "'" . "O Mesmo" . "', ";
         $Comando_SQL .= "'" . $this->Telefone->Text . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_tipo_faturamento->Value . "', ";
         $Comando_SQL .= "'" . "Rodoviario" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->ValorServicos->Text . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . $this->ValorServicos->Text . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'N', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "Cliente" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'N', ";
         $Comando_SQL .= "'N', ";
         $Comando_SQL .= "'N', ";

         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->DataEmissao->Text)) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->DataEmissao->Text)) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->DataEmissao->Text)) . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";

         //*** 1 - Parcela ***
         $Comando_SQL .= "'" . $this->NumeroLote->Text . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->DTVencimento->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->ValorServicos->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->NumeroLote->Text . "', ";
         $Comando_SQL .= "'" . $this->ValorServicos->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 2 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 3 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 4 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 5 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 6 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 7 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 8 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 9 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 10 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 11 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 12 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . $this->ValorServicos->Text . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Insere os Produtos da Venda Programada ***

         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->First();

         if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->EOF) != 1)
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
               $Comando_SQL .= "'" . "SRV" . "', ";
               $Comando_SQL .= "'" . trim($this->NumeroLote->Text) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_quantidade']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_descricao']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_unitario']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_total']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_ipi']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_lote']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_referencia']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_posicao']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_descricao_detalhada']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_unidade']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_ipi']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_classificacao_fiscal']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_situacao_tributaria']) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_ncm']) . "')";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               //*** Seleciona o Produto para Obter o Estoque ***

               $Comando_SQL = "select * from mgt_produtos";
               $Comando_SQL .= " where ";
               $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo']) . "'";

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
                  $qtde_informada = trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_quantidade']);
                  $qtde_atual = $qtde_anterior - $qtde_informada;

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
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo']) . "',";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_referencia']) . "',";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_descricao']) . "',";
                  $Comando_SQL .= "'" . "2" . "',";
                  $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
                  $Comando_SQL .= "'" . $qtde_anterior . "',";
                  $Comando_SQL .= "'" . $qtde_informada . "',";
                  $Comando_SQL .= "'" . $qtde_atual . "',";
                  $Comando_SQL .= "'" . trim($this->NumeroLote->Text) . "',";
                  $Comando_SQL .= "'" . '2' . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();

                  //*** Atualiza o Estoque no Cadastro do Produto ***

                  $Comando_SQL = "update mgt_produtos set ";
                  $Comando_SQL .= "mgt_produto_estoque_atual = '" . $qtde_atual . "' ";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo']) . "'";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
               GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Next();
            }
         }

         //*** Seleciona a Venda Programada ***
         $Comando_SQL = "select *,date_format(mgt_programada_data_emissao, '%d/%m/%Y') AS mgt_programada_data_emissao,date_format(mgt_programada_data, '%d/%m/%Y') AS mgt_programada_data,date_format(mgt_programada_data_entrega, '%d/%m/%Y') AS mgt_programada_data_entrega from mgt_programadas where mgt_programada_finalidade = 'SRV' And mgt_programada_numero = " . trim($this->NumeroLote->Text);

         GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
         GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

         //*** Seleciona os Produtos da Venda Programada ***
         $Comando_SQL = "select * from mgt_programadas_produtos where mgt_programada_produto_finalidade = 'SRV' And mgt_programada_produto_numero_nota = " . trim($this->NumeroLote->Text) . " Order By mgt_programada_produto_numero";

         GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programadas_Produtos->Open();

         //*** Atualiza o Numero da Ultima Venda Programada ***
         $Comando_SQL = "update mgt_numero_nota_anterior set ";
         $Comando_SQL .= "mgt_numero_nota_anterior_data_prg = '" . inverte_data_dma_to_amd(trim($this->DataEmissao->Text)) . "',";
         $Comando_SQL .= "mgt_numero_nota_anterior_numero_prg = '" . trim($this->NumeroLote->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Altera o Status do Pedido de Faturamento ***

         $Comando_SQL = "update mgt_faturamentos_srv set ";
         $Comando_SQL .= "mgt_faturamento_srv_status = 'Faturado', ";
         $Comando_SQL .= "mgt_faturamento_srv_numero_nota_fiscal = '" . $this->NumeroLote->Text . "' ";
         $Comando_SQL .= "Where mgt_faturamento_srv_numero = '" . trim($this->hd_numero_faturamento->Value) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Altera os Dados de Compras do Cliente ***

         $Comando_SQL = "update mgt_clientes set ";
         $Comando_SQL .= "mgt_cliente_data_ultima_compra = '" . inverte_data_dma_to_amd(trim($this->DataEmissao->Text)) . "', ";
         $Comando_SQL .= "mgt_cliente_ultimo_valor = '" . $this->ValorServicos->Text . "' ";
         $Comando_SQL .= "Where mgt_cliente_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_numero']) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Limpa os Campos para o Proximo Faturamento ***

         $this->limpa_campos();

         //*** Fecha a Janela ***

         echo "<script language=\"JavaScript\">";
         echo "window.open('nf_emissao_srv_prg.php?mgt_programada_numero=" . trim(GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero']) . "','nf_emissao_nota_prg','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo 'window.location="nf_emissao_srv.php";';
         echo "</script>";
      }
   }

   public function registra_nfse()
   {
      //*** Seleciona a Venda Programada ***
      $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao,date_format(mgt_nota_fiscal_data, '%d/%m/%Y') AS mgt_nota_fiscal_data,date_format(mgt_nota_fiscal_data_entrega, '%d/%m/%Y') AS mgt_nota_fiscal_data_entrega from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = 'SRV' And mgt_nota_fiscal_numero = " . trim($this->NumeroLote->Text);

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
      {
         $this->MSG_Erro->Caption = 'Este Numero de Nota Fiscal de Servico ja existe! Por favor, informe o Numero correto.';
      }
      else
      {
         //*** Insere a Nota Fiscal de Servico ***

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
         $Comando_SQL .= "mgt_nota_fiscal_descricao_condicao_pgto) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . "SRV" . "', ";
         $Comando_SQL .= "'" . $this->NumeroLote->Text . "', ";
         $Comando_SQL .= "'" . $this->hd_numero_faturamento->Value . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . $this->ItemListaServico->Text . "', ";
         $Comando_SQL .= "'" . $this->ItemListaServico->Text . "', ";
         $Comando_SQL .= "'" . "1" . "', ";
         $Comando_SQL .= "'" . "PRESTACAO DE SERVICOS" . "', ";
         $Comando_SQL .= "'" . "PRESTACAO DE SERVICOS" . "', ";
         $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_numero'] . "', ";
         $Comando_SQL .= "'" . $this->TomadorCnpj->Text . "', ";
         $Comando_SQL .= "'" . $this->TomadorRazaoSocial->Text . "', ";
         $Comando_SQL .= "'" . $this->TomadorRazaoSocial->Text . "', ";
         $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_inscricao_municipal'] . "', ";
         $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_inscricao_estadual'] . "', ";
         $Comando_SQL .= "'" . $this->Endereco->Text . ", " . $this->Numero->Text . "', ";
         $Comando_SQL .= "'" . $this->Complemento->Text . "', ";
         $Comando_SQL .= "'" . $this->Bairro->Text . "', ";
         $Comando_SQL .= "'" . $this->Cidade->Text . "', ";
         $Comando_SQL .= "'" . $this->Uf->Text . "', ";
         $Comando_SQL .= "'" . $this->Cep->Text . "', ";
         $Comando_SQL .= "'" . "Brasil" . "', ";
         $Comando_SQL .= "'" . $this->Telefone->Text . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->Email->Text . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->Endereco->Text . ", " . $this->Numero->Text . "', ";
         $Comando_SQL .= "'" . $this->Complemento->Text . "', ";
         $Comando_SQL .= "'" . $this->Bairro->Text . "', ";
         $Comando_SQL .= "'" . $this->Cidade->Text . "', ";
         $Comando_SQL .= "'" . $this->Uf->Text . "', ";
         $Comando_SQL .= "'" . $this->Cep->Text . "', ";
         $Comando_SQL .= "'" . "Brasil" . "', ";
         $Comando_SQL .= "'" . "O Mesmo" . "', ";
         $Comando_SQL .= "'" . $this->Telefone->Text . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->Endereco->Text . ", " . $this->Numero->Text . "', ";
         $Comando_SQL .= "'" . $this->Complemento->Text . "', ";
         $Comando_SQL .= "'" . $this->Bairro->Text . "', ";
         $Comando_SQL .= "'" . $this->Cidade->Text . "', ";
         $Comando_SQL .= "'" . $this->Uf->Text . "', ";
         $Comando_SQL .= "'" . $this->Cep->Text . "', ";
         $Comando_SQL .= "'" . "Brasil" . "', ";
         $Comando_SQL .= "'" . "O Mesmo" . "', ";
         $Comando_SQL .= "'" . $this->Telefone->Text . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_tipo_faturamento->Value . "', ";
         $Comando_SQL .= "'" . "Rodoviario" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->ValorServicos->Text . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . $this->ValorServicos->Text . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'N', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "Cliente" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'N', ";
         $Comando_SQL .= "'N', ";
         $Comando_SQL .= "'N', ";

         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->DataEmissao->Text)) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->DataEmissao->Text)) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->DataEmissao->Text)) . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";

         //*** 1 - Parcela ***
         $Comando_SQL .= "'" . $this->NumeroLote->Text . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->DTVencimento->Text)) . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . $this->ValorServicos->Text . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->NumeroLote->Text . "', ";
         $Comando_SQL .= "'" . $this->ValorServicos->Text . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 2 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 3 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 4 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 5 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 6 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 7 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 8 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 9 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 10 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 11 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         //*** 12 - Parcela ***
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0000-00-00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "N" . "', ";

         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . $this->ValorServicos->Text . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Insere os Produtos da Venda Programada ***

         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->First();

         if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->EOF) != 1)
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
               $Comando_SQL .= "'" . "SRV" . "', ";
               $Comando_SQL .= "'" . trim($this->NumeroLote->Text) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_quantidade']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_descricao']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_unitario']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_total']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_ipi']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_lote']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_referencia']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_posicao']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_descricao_detalhada']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_unidade']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_ipi']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_classificacao_fiscal']) . "', ";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_situacao_tributaria']) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_ncm']) . "')";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               //*** Seleciona o Produto para Obter o Estoque ***

               $Comando_SQL = "select * from mgt_produtos";
               $Comando_SQL .= " where ";
               $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo']) . "'";

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
                  $qtde_informada = trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_quantidade']);
                  $qtde_atual = $qtde_anterior - $qtde_informada;

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
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo']) . "',";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_referencia']) . "',";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_descricao']) . "',";
                  $Comando_SQL .= "'" . "2" . "',";
                  $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
                  $Comando_SQL .= "'" . $qtde_anterior . "',";
                  $Comando_SQL .= "'" . $qtde_informada . "',";
                  $Comando_SQL .= "'" . $qtde_atual . "',";
                  $Comando_SQL .= "'" . trim($this->NumeroLote->Text) . "',";
                  $Comando_SQL .= "'" . '2' . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();

                  //*** Atualiza o Estoque no Cadastro do Produto ***

                  $Comando_SQL = "update mgt_produtos set ";
                  $Comando_SQL .= "mgt_produto_estoque_atual = '" . $qtde_atual . "' ";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo']) . "'";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
               GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Next();
            }
         }

         //*** Seleciona a Venda Programada ***
         $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao,date_format(mgt_nota_fiscal_data, '%d/%m/%Y') AS mgt_nota_fiscal_data,date_format(mgt_nota_fiscal_data_entrega, '%d/%m/%Y') AS mgt_nota_fiscal_data_entrega from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = 'SRV' And mgt_nota_fiscal_numero = " . trim($this->NumeroLote->Text);

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

         //*** Seleciona os Produtos da Venda Programada ***
         $Comando_SQL = "select * from mgt_notas_fiscais_produtos where mgt_nota_fiscal_produto_finalidade = 'SRV' And mgt_nota_fiscal_produto_numero_nota = " . trim($this->NumeroLote->Text) . " Order By mgt_nota_fiscal_produto_numero";

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais_Produtos->Open();

         //*** Atualiza o Numero da Ultima Venda Programada ***
         $Comando_SQL = "update mgt_numero_nota_anterior set ";
         $Comando_SQL .= "mgt_numero_nota_anterior_data_srv = '" . inverte_data_dma_to_amd(trim($this->DataEmissao->Text)) . "',";
         $Comando_SQL .= "mgt_numero_nota_anterior_numero_srv = '" . trim($this->NumeroLote->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Altera o Status do Pedido de Faturamento ***

         $Comando_SQL = "update mgt_faturamentos_srv set ";
         $Comando_SQL .= "mgt_faturamento_srv_status = 'Faturado', ";
         $Comando_SQL .= "mgt_faturamento_srv_numero_nota_fiscal = '" . $this->NumeroLote->Text . "' ";
         $Comando_SQL .= "Where mgt_faturamento_srv_numero = '" . trim($this->hd_numero_faturamento->Value) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Altera os Dados de Compras do Cliente ***

         $Comando_SQL = "update mgt_clientes set ";
         $Comando_SQL .= "mgt_cliente_data_ultima_compra = '" . inverte_data_dma_to_amd(trim($this->DataEmissao->Text)) . "', ";
         $Comando_SQL .= "mgt_cliente_ultimo_valor = '" . $this->ValorServicos->Text . "' ";
         $Comando_SQL .= "Where mgt_cliente_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_numero']) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();
      }
   }

   function DiscriminacaoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.CodigoMunicipio.focus();
     return false;
   }

      <?php

   }

   function DTVencimentoJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonfesrvimp.DTVencimento;
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

      <?php

   }

   function QtdePecasJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonfesrvimp.QtdePecas;
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

      <?php

   }

   function DTVencimentoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.bt_transmitir.focus();
     return false;
   }

      <?php

   }

   function NroPedidoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.DTVencimento.focus();
     return false;
   }

      <?php

   }

   function QtdePecasJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.NroPedido.focus();
     return false;
   }

      <?php

   }


   function nfemissaonfesrvimpJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui
      carregando_pagina();
      <?php

   }

   function bt_transmitirJSMouseUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

           if(ns4)
           {
              ld.visibility="visible";
           }
           else if (ns6||ie4) ld.display="";

      <?php

   }

   function limpa_campos()
   {
      //*** Limpa os Campos para a Proxima NFS-e ***
      $this->TomadorCnpj->Text = '';
      $this->TomadorRazaoSocial->Text = '';
      $this->Endereco->Text = '';
      $this->Numero->Text = '';
      $this->Complemento->Text = '';
      $this->Bairro->Text = '';
      $this->Cidade->Text = '';
      $this->Uf->Text = '';
      $this->Cep->Text = '';
      $this->Telefone->Text = '';
      $this->Email->Text = '';
      $this->NumeroLote->Text = '';
      $this->DataEmissao->Text = '';
      $this->Serie->Text = '1';
      $this->Tipo->ItemIndex = 1;
      $this->NaturezaOperacao->ItemIndex = 1;
      $this->OptanteSimplesNacional->ItemIndex = 1;
      $this->IncentivadorCultural->ItemIndex = 2;
      $this->Status->ItemIndex = 1;
      $this->ItemListaServico->Text = '';
      $this->CodigoCnae->Text = '';
      $this->CodigoTributacaoMunicipio->Text = '';
      $this->Discriminacao->Clear();
      $this->IssRetido->ItemIndex = 2;
      $this->ValorServicos->Text = '';
      $this->BaseCalculo->Text = '';
      $this->Aliquota->Text = '';
      $this->ValorIss->Text = '';

      $this->QtdePecas->Text = '';
      $this->NroPedido->Text = '';
      $this->DTVencimento->Text = '';

      $this->MSG_Erro->Caption = '';

      $this->mgt_nota_fiscal_tipo_faturamento->Value = '';
      $this->hd_numero_faturamento->Value = '';

      $this->hd_formulario_carregado->Value = '';
   }

   function nfemissaonfesrvimpCreate($sender, $params)
   {
      require_once("includes/valida_sessao.inc.php");
      require_once("includes/rotinas_gerais.inc.php");

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

      $mgt_nota_fiscal_faturamento = $_REQUEST['mgt_nota_fiscal_faturamento'];

      if(trim($this->hd_formulario_carregado->Value) == '')
      {
         $this->hd_formulario_carregado->Value = 'true';

         //*** Carrega os Campos Principais ***

         $this->CodigoMunicipio->Text = retira_acentos_ponto_traco_barra(GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_codigo_cidade'], 0);
         $this->PrestadorCnpj->Text = retira_acentos_ponto_traco_barra(GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_cnpj'], 0);
         $this->PrestadorRazaoSocial->Text = retira_acentos_ponto_traco_barra(GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_razao_social'], 0);
         //$this->PrestadorInscricaoMunicipal->Text = retira_acentos_ponto_traco_barra($_SESSION['login_im'], 0);
         $this->PrestadorInscricaoMunicipal->Text = retira_acentos_ponto_traco_barra(GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_insc_municipal'], 0);

         //*** Obtem os Dados para a Emissao da NFS-e ***

         if(trim(strtoupper(GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_apelido'])) == 'RECITOTAL')
         {
            $this->CodigoTributacaoMunicipio->Text = '383949903';
            $this->ItemListaServico->Text = '709';
            $this->Aliquota->Text = '5.00';
         }
         elseif(trim(strtoupper(GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_apelido'])) == 'AVS')
         {
            $this->CodigoTributacaoMunicipio->Text = '3530300';
            $this->ItemListaServico->Text = '14.01';
            $this->Aliquota->Text = '2.00';
         }
         elseif(trim(strtoupper(GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_apelido'])) == 'ADVISER')
         {
            $this->CodigoTributacaoMunicipio->Text = '3530300';
            $this->ItemListaServico->Text = '14.01';
            $this->Aliquota->Text = '2.00';
         }
         else
         {
            $this->CodigoTributacaoMunicipio->Text = '0';
            $this->ItemListaServico->Text = '0';
            $this->Aliquota->Text = '0';
         }

         //*** Efetua o Carregamento do Faturamento ***

         $Comando_SQL = "select *,date_format(mgt_faturamento_srv_data, '%d/%m/%Y') AS mgt_faturamento_srv_data,date_format(mgt_faturamento_srv_data_entrega, '%d/%m/%Y') AS mgt_faturamento_srv_data_entrega, IF(mgt_faturamento_srv_status = 'Preparando','#','') AS mgt_faturamento_srv_status_1, IF(mgt_faturamento_srv_status = 'Faturado','#','') AS mgt_faturamento_srv_status_2, IF(((mgt_faturamento_srv_status = 'Aguardando') Or (mgt_faturamento_srv_status = 'Contingencia')),'#','') AS mgt_faturamento_srv_status_3 from mgt_faturamentos_srv where mgt_faturamento_srv_numero = '" . trim($mgt_nota_fiscal_faturamento) . "' and mgt_faturamento_srv_status <> 'Faturado' order by mgt_faturamento_srv_numero";

         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Close();
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Open();

         //*** Efetua o Carregamento dos Produtos do Faturamento ***

         $aliquota_desconto = 0;
         $aliquota_desconto = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_desconto'];

         $Comando_SQL = "select ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_numero, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_numero_pedido, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_quantidade, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_codigo, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_descricao, ";
         $Comando_SQL .= "(mgt_faturamento_produto_srv_valor_unitario - ((mgt_faturamento_produto_srv_valor_unitario * " . $aliquota_desconto . ") / 100)) As mgt_faturamento_produto_srv_valor_unitario, ";
         $Comando_SQL .= "(mgt_faturamento_produto_srv_valor_total - ((mgt_faturamento_produto_srv_valor_total * " . $aliquota_desconto . ") / 100)) As mgt_faturamento_produto_srv_valor_total, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_valor_ipi, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_lote, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_referencia, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_posicao, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_descricao_detalhada, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_unidade, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_ipi, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_classificacao_fiscal, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_situacao_tributaria, ";
         $Comando_SQL .= "mgt_faturamento_produto_srv_ncm ";
         $Comando_SQL .= "from mgt_faturamentos_produtos_srv ";
         $Comando_SQL .= "where mgt_faturamento_produto_srv_numero_pedido = " . trim($mgt_nota_fiscal_faturamento) . " order by mgt_faturamento_produto_srv_numero";

         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Close();
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Open();

         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->First();

         $conteudo_Discriminacao = '';

         if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->EOF) != 1)
         {
            $mais_servico = '';

            while((((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->EOF) != 1) and ($conta_produto_minimo <= $conta_produto_maximo)))
            {
               //$conteudo_Discriminacao .= 'COD: ' . GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo'];
			   if( trim($mais_servico) <> '' )
		   	   {
                 $conteudo_Discriminacao .= ', ' . GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_descricao'];
			   }
			   else
			   {
                 $conteudo_Discriminacao .= GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_descricao'];
				 $mais_servico = 'SIM';
		 	   }
               //$conteudo_Discriminacao .= 'QTDE: ' . GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_quantidade'];
               //$conteudo_Discriminacao .= 'VLR.UNIT: ' . GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_unitario'];
               //$conteudo_Discriminacao .= 'VLR.TOTAL: ' . GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_total'] . ' // ';

               GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Next();
            }
         }

         $conteudo_Discriminacao .= ' // ' . GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_observacao'];

         $this->Discriminacao->Text = $conteudo_Discriminacao;

         //*** Seleciona o Cliente ***

         $Comando_SQL = "select * from mgt_clientes where mgt_cliente_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_numero']) . "'";

         GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
         GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

         //*** Carrega as Informacoes ***

         $this->hd_numero_faturamento->Value = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_numero'];
         $this->NroPedido->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_numero'];

         $this->TomadorCnpj->Text = retira_acentos_ponto_traco_barra(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_codigo'], 0);
         $this->TomadorRazaoSocial->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_razao_social'];
         $this->Endereco->Text = obtem_numero_antes(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_endereco']);
         $this->Numero->Text = obtem_numero_depois(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_endereco']);
         $this->Complemento->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_complemento'];
         $this->Bairro->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_bairro'];
         $this->Cidade->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cidade'];
         $this->Uf->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_estado'];
         $this->Cep->Text = retira_acentos_ponto_traco_barra(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cep'], 0);
         $this->Telefone->Text = trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_ddd']) . trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone_comercial']);
         $this->Email->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_email'];

         $this->ValorServicos->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_valor_total'];
         $this->BaseCalculo->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_valor_total'];

         $this->ValorIss->Text = (($this->BaseCalculo->Text * $this->Aliquota->Text) / 100);

         $this->DataEmissao->Text = date("d/m/Y", time());
         $this->DTVencimento->Text = date("d/m/Y", time() + 3600 * 24 * GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_1']);

         $this->mgt_nota_fiscal_tipo_faturamento->Value = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_tipo_faturamento'];

         //*** Obtem o Numero da Ultima Nota Fiscal Emitida ***

         $Comando_SQL = "select * from mgt_numero_nota_anterior";

         GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Close();
         GetConexaoPrincipal()->SQL_MGT_Numero_Nota->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Open();

         if(trim($this->mgt_nota_fiscal_tipo_faturamento->Value) == 'Venda Programada')
         {
            if((GetConexaoPrincipal()->SQL_MGT_Numero_Nota->EOF) != 1)
            {
               $this->NumeroLote->Text = (GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Fields['mgt_numero_nota_anterior_numero_prg'] + 1);
            }
            else
            {
               $this->NumeroLote->Text = '1';
            }
         }
         else
         {
            if((GetConexaoPrincipal()->SQL_MGT_Numero_Nota->EOF) != 1)
            {
               $this->NumeroLote->Text = (GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Fields['mgt_numero_nota_anterior_numero_srv'] + 1);
            }
            else
            {
               $this->NumeroLote->Text = '1';
            }
         }

      }
   }

   function DataEmissaoJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaonfesrvimp.DataEmissao;
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

      <?php

   }

   function ValorIssJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonfesrvimp.ValorIss;
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

   function AliquotaJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonfesrvimp.Aliquota;
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

   function BaseCalculoJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonfesrvimp.BaseCalculo;
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

   function ValorServicosJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaonfesrvimp.ValorServicos;
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

   function CodigoMunicipioJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonfesrvimp.CodigoMunicipio;
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

      <?php

   }

   function CodigoTributacaoMunicipioJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Codigo ***

   var campo = document.nfemissaonfesrvimp.CodigoTributacaoMunicipio
   var digits="0123456789./-"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Codigo ***

      <?php

   }

   function CodigoCnaeJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonfesrvimp.CodigoCnae
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

   function ItemListaServicoJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Codigo ***

   var campo = document.nfemissaonfesrvimp.ItemListaServico
   var digits="0123456789./-"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Codigo ***

      <?php

   }

   function SerieJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonfesrvimp.Serie
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

   function NumeroLoteJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonfesrvimp.NumeroLote
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

   function TelefoneJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonfesrvimp.Telefone
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

   function CepJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonfesrvimp.Cep
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

   function NumeroJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonfesrvimp.Numero
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

   function TomadorCnpjJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonfesrvimp.TomadorCnpj
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

   function PrestadorInscricaoMunicipalJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonfesrvimp.PrestadorInscricaoMunicipal
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

   function PrestadorCnpjJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaonfesrvimp.PrestadorCnpj
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

   function ValorIssJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.QtdePecas.focus();
     return false;
   }

      <?php

   }

   function AliquotaJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.ValorIss.focus();
     return false;
   }

      <?php

   }

   function BaseCalculoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Aliquota.focus();
     return false;
   }

      <?php

   }

   function ValorServicosJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.BaseCalculo.focus();
     return false;
   }

      <?php

   }

   function IssRetidoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.ValorServicos.focus();
     return false;
   }

      <?php

   }

   function CodigoMunicipioJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.IssRetido.focus();
     return false;
   }

      <?php

   }

   function CodigoTributacaoMunicipioJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Discriminacao.focus();
     return false;
   }

      <?php

   }

   function CodigoCnaeJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.CodigoTributacaoMunicipio.focus();
     return false;
   }

      <?php

   }

   function ItemListaServicoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.CodigoCnae.focus();
     return false;
   }

      <?php

   }

   function StatusJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.ItemListaServico.focus();
     return false;
   }

      <?php

   }

   function IncentivadorCulturalJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Status.focus();
     return false;
   }

      <?php

   }

   function OptanteSimplesNacionalJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.IncentivadorCultural.focus();
     return false;
   }

      <?php

   }

   function NaturezaOperacaoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.OptanteSimplesNacional.focus();
     return false;
   }

      <?php

   }

   function TipoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.NaturezaOperacao.focus();
     return false;
   }

      <?php

   }

   function SerieJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Tipo.focus();
     return false;
   }

      <?php

   }

   function DataEmissaoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Serie.focus();
     return false;
   }

      <?php

   }

   function NumeroLoteJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.DataEmissao.focus();
     return false;
   }

      <?php

   }

   function EmailJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.NumeroLote.focus();
     return false;
   }

      <?php

   }

   function TelefoneJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Email.focus();
     return false;
   }

      <?php

   }

   function CepJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Telefone.focus();
     return false;
   }

      <?php

   }

   function UfJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Cep.focus();
     return false;
   }

      <?php

   }

   function CidadeJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Uf.focus();
     return false;
   }

      <?php

   }

   function BairroJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Cidade.focus();
     return false;
   }

      <?php

   }

   function ComplementoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Bairro.focus();
     return false;
   }

      <?php

   }

   function NumeroJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Complemento.focus();
     return false;
   }

      <?php

   }

   function EnderecoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Numero.focus();
     return false;
   }

      <?php

   }

   function TomadorRazaoSocialJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.Endereco.focus();
     return false;
   }

      <?php

   }

   function TomadorCnpjJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.TomadorRazaoSocial.focus();
     return false;
   }

      <?php

   }

   function PrestadorInscricaoMunicipalJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.TomadorCnpj.focus();
     return false;
   }

      <?php

   }

   function PrestadorRazaoSocialJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.PrestadorInscricaoMunicipal.focus();
     return false;
   }

      <?php

   }

   function PrestadorCnpjJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaonfesrvimp.PrestadorRazaoSocial.focus();
     return false;
   }

      <?php

   }

   function bt_transmitirClick($sender, $params)
   {
      require_once("includes/rotinas_gerais.inc.php");
      require_once("includes/tabelas_ibge.fnc.php");
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_nota_fiscal_tipo_faturamento->Value) == 'Venda Programada')
      {
         $this->imprime_nota_fiscal();
      }
      else
      {
         require_once("includes/assinadorTEX.inc.php");
         require_once('nusoap/lib/nusoap.php');

         $tipo_ambiente = $_SESSION['login_nfe_ambiente'];// 1 - Producao || 2 - Homologacao
         $certificado_acesso = $_SESSION['login_nfe_senha'];

         if($tipo_ambiente == 1)
         {
            $servidor_wsdl = 'https://producao.ginfes.com.br/ServiceGinfesImpl?wsdl';
         }
         else
         {
            $servidor_wsdl = 'https://homologacao.ginfes.com.br/ServiceGinfesImpl?wsdl';
         }

         if(substr(trim($_SERVER['SystemRoot']), 0, 1) == 'C')
         {
            $certificado = trim($_SESSION['login_caminho_base']) . "certificados\\nfe.pem";
         }
         else
         {
            $certificado = trim($_SESSION['login_caminho_base']) . "certificados/nfe.pem";
         }

         //*** Gera o XML da Nota Fiscal de Servico ***

         //*** Apaga os Arquivos ja gerados ***

         if(file_exists('nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '.xml'))
         {
            unlink('nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '.xml');
         }

         if(file_exists('nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '_a.xml'))
         {
            unlink('nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '_a.xml');
         }

         if(file_exists('nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '_b.xml'))
         {
            unlink('nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '_b.xml');
         }

         if(file_exists('nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '_c.xml'))
         {
            unlink('nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '_c.xml');
         }

         if(file_exists('nfe/saida/rps_' . trim($this->NumeroLote->Text) . '_sign.xml'))
         {
            unlink('nfe/saida/rps_' . trim($this->NumeroLote->Text) . '_sign.xml');
         }

         //*** versao do encoding xml ***
         $geraDom = new DOMDocument('1.0', 'UTF-8');

         //*** retirar os espacos em branco ***
         $geraDom->preserveWhiteSpace = false;

         //*** gerar o codigo ***
         $geraDom->formatOutput = false;// Se True Prevalece a Formatacao com Estrutura (Pulando Linha e Espacos).

         //*** criando o no principal (Raiz) ***
         //*** Cabeca do XML ***

         $nfse01 = $geraDom->createElement('EnviarLoteRpsEnvio');
         $nfse01->setAttribute('xmlns', 'http://www.ginfes.com.br/servico_enviar_lote_rps_envio_v03.xsd');
         $nfse01->setAttribute('xmlns:tipos', 'http://www.ginfes.com.br/tipos_v03.xsd');

         //*** Lote RPS ***

         $nfse02 = $geraDom->createElement('LoteRps');
         $nfse02->setAttribute('Id', 'Lote_' . trim($this->NumeroLote->Text));

         //*** Dados do Lote ***

         $nfse03 = $geraDom->createElement('tipos:NumeroLote', trim($this->NumeroLote->Text));
         $nfse04 = $geraDom->createElement('tipos:Cnpj', trim($this->PrestadorCnpj->Text));
         $nfse05 = $geraDom->createElement('tipos:InscricaoMunicipal', trim($this->PrestadorInscricaoMunicipal->Text));
         $nfse06 = $geraDom->createElement('tipos:QuantidadeRps', '1');
         $nfse07 = $geraDom->createElement('tipos:ListaRps');
         $nfse08 = $geraDom->createElement('tipos:Rps');

         $nfse09 = $geraDom->createElement('tipos:InfRps');
         $nfse09->setAttribute('Id', 'NFSe_' . trim($this->NumeroLote->Text));

         $nfse10 = $geraDom->createElement('tipos:IdentificacaoRps');
         $nfse11 = $geraDom->createElement('tipos:Numero', trim($this->NumeroLote->Text));
         $nfse12 = $geraDom->createElement('tipos:Serie', trim($this->Serie->Text));
         $nfse13 = $geraDom->createElement('tipos:Tipo', trim($this->Tipo->ItemIndex));
         $nfse10->appendChild($nfse11);
         $nfse10->appendChild($nfse12);
         $nfse10->appendChild($nfse13);
         $nfse09->appendChild($nfse10);

         $nfse14 = $geraDom->createElement('tipos:DataEmissao', inverte_data_dma_to_amd(trim($this->DataEmissao->Text)) . 'T' . trim(date("H:i:s", time() - 3600)));
         $nfse15 = $geraDom->createElement('tipos:NaturezaOperacao', trim($this->NaturezaOperacao->ItemIndex));

         if(trim($this->OptanteSimplesNacional->ItemIndex) == 1)
         {
            $nfse15a = $geraDom->createElement('tipos:RegimeEspecialTributacao', '6');
         }

         $nfse16 = $geraDom->createElement('tipos:OptanteSimplesNacional', trim($this->OptanteSimplesNacional->ItemIndex));
         $nfse17 = $geraDom->createElement('tipos:IncentivadorCultural', trim($this->IncentivadorCultural->ItemIndex));
         $nfse18 = $geraDom->createElement('tipos:Status', trim($this->Status->ItemIndex));
         $nfse09->appendChild($nfse14);
         $nfse09->appendChild($nfse15);

         if(trim($this->OptanteSimplesNacional->ItemIndex) == 1)
         {
            $nfse09->appendChild($nfse15a);
         }

         $nfse09->appendChild($nfse16);
         $nfse09->appendChild($nfse17);
         $nfse09->appendChild($nfse18);

         $nfse19 = $geraDom->createElement('tipos:Servico');
         $nfse20 = $geraDom->createElement('tipos:Valores');
         $nfse21 = $geraDom->createElement('tipos:ValorServicos', number_format($this->ValorServicos->Text, 2, '.', ''));
         $nfse22 = $geraDom->createElement('tipos:IssRetido', trim($this->IssRetido->ItemIndex));
         $nfse23 = $geraDom->createElement('tipos:ValorIss', number_format($this->ValorIss->Text, 2, '.', ''));
         $nfse24 = $geraDom->createElement('tipos:BaseCalculo', number_format($this->BaseCalculo->Text, 2, '.', ''));
         $nfse25 = $geraDom->createElement('tipos:Aliquota', number_format((($this->Aliquota->Text) / 100), 4, '.', ''));
         $nfse26 = $geraDom->createElement('tipos:ValorLiquidoNfse', number_format($this->ValorServicos->Text, 2, '.', ''));
         $nfse20->appendChild($nfse21);
         $nfse20->appendChild($nfse22);
         $nfse20->appendChild($nfse23);
         $nfse20->appendChild($nfse24);
         $nfse20->appendChild($nfse25);
         $nfse20->appendChild($nfse26);
         $nfse19->appendChild($nfse20);

         $nfse27 = $geraDom->createElement('tipos:ItemListaServico', trim($this->ItemListaServico->Text));
         if(trim($this->CodigoCnae->Text) <> '')
         {
            $nfse28 = $geraDom->createElement('tipos:CodigoCnae', trim($this->CodigoCnae->Text));
         }
         if(trim($this->CodigoTributacaoMunicipio->Text) <> '')
         {
            $nfse29 = $geraDom->createElement('tipos:CodigoTributacaoMunicipio', trim($this->CodigoTributacaoMunicipio->Text));
         }

         $TextoDiscriminacao = '';
         $TextoDiscriminacao = trim($this->Discriminacao->Text);

         if(trim($this->QtdePecas->Text) <> '')
         {
            $TextoDiscriminacao .= ' /// QTDE.DE PECAS: ' . trim($this->QtdePecas->Text);
         }

         if(trim($this->NroPedido->Text) <> '')
         {
            $TextoDiscriminacao .= ' /// NRO.DO PEDIDO: ' . trim($this->NroPedido->Text);
         }

         if(trim($this->DTVencimento->Text) <> '')
         {
            $TextoDiscriminacao .= ' /// DATA DE VENCIMENTO: ' . trim($this->DTVencimento->Text);
         }

         $nfse30 = $geraDom->createElement('tipos:Discriminacao', trim($TextoDiscriminacao));
         $nfse31 = $geraDom->createElement('tipos:CodigoMunicipio', trim($this->CodigoMunicipio->Text));
         $nfse19->appendChild($nfse27);
         if(trim($this->CodigoCnae->Text) <> '')
         {
            $nfse19->appendChild($nfse28);
         }
         if(trim($this->CodigoTributacaoMunicipio->Text) <> '')
         {
            $nfse19->appendChild($nfse29);
         }
         $nfse19->appendChild($nfse30);
         $nfse19->appendChild($nfse31);
         $nfse09->appendChild($nfse19);

         $nfse32 = $geraDom->createElement('tipos:Prestador');
         $nfse33 = $geraDom->createElement('tipos:Cnpj', trim($this->PrestadorCnpj->Text));
         $nfse34 = $geraDom->createElement('tipos:InscricaoMunicipal', trim($this->PrestadorInscricaoMunicipal->Text));
         $nfse32->appendChild($nfse33);
         $nfse32->appendChild($nfse34);
         $nfse09->appendChild($nfse32);

         $nfse35 = $geraDom->createElement('tipos:Tomador');
         $nfse36 = $geraDom->createElement('tipos:IdentificacaoTomador');
         $nfse37 = $geraDom->createElement('tipos:CpfCnpj');
         $nfse38 = $geraDom->createElement('tipos:Cnpj', trim($this->TomadorCnpj->Text));
         $nfse37->appendChild($nfse38);
         $nfse36->appendChild($nfse37);
         $nfse35->appendChild($nfse36);

         $nfse39 = $geraDom->createElement('tipos:RazaoSocial', trim($this->TomadorRazaoSocial->Text));
         $nfse35->appendChild($nfse39);

         $nfse40 = $geraDom->createElement('tipos:Endereco');
         $nfse41 = $geraDom->createElement('tipos:Endereco', trim($this->Endereco->Text));
         $nfse42 = $geraDom->createElement('tipos:Numero', trim($this->Numero->Text));
         if(trim($this->Complemento->Text) <> '')
         {
            $nfse43 = $geraDom->createElement('tipos:Complemento', trim($this->Complemento->Text));
         }
         $nfse44 = $geraDom->createElement('tipos:Bairro', trim($this->Bairro->Text));
         $nfse45 = $geraDom->createElement('tipos:CodigoMunicipio', municipios_ibge($this->Uf->Text, $this->Cidade->Text));
         $nfse46 = $geraDom->createElement('tipos:Uf', trim($this->Uf->Text));
         $nfse47 = $geraDom->createElement('tipos:Cep', trim($this->Cep->Text));
         $nfse40->appendChild($nfse41);
         $nfse40->appendChild($nfse42);
         if(trim($this->Complemento->Text) <> '')
         {
            $nfse40->appendChild($nfse43);
         }
         $nfse40->appendChild($nfse44);
         $nfse40->appendChild($nfse45);
         $nfse40->appendChild($nfse46);
         $nfse40->appendChild($nfse47);
         $nfse35->appendChild($nfse40);

         $nfse48 = $geraDom->createElement('tipos:Contato');
         $nfse49 = $geraDom->createElement('tipos:Telefone', trim($this->Telefone->Text));
         $nfse50 = $geraDom->createElement('tipos:Email', trim($this->Email->Text));
         $nfse48->appendChild($nfse49);
         $nfse48->appendChild($nfse50);
         $nfse35->appendChild($nfse48);

         $nfse09->appendChild($nfse35);

         $nfse08->appendChild($nfse09);

         $nfse07->appendChild($nfse08);

         $nfse02->appendChild($nfse03);
         $nfse02->appendChild($nfse04);
         $nfse02->appendChild($nfse05);
         $nfse02->appendChild($nfse06);
         $nfse02->appendChild($nfse07);

         $nfse01->appendChild($nfse02);

         $geraDom->appendChild($nfse01);

         //*** Salvando o XML ***
         $geraDom->save('nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '.xml');

         //*** Prepara a Transmissao da NFSe ***

         //*** Assina e Valida o XML ***
         //*** Assina a Tag: LoteRps ***
         assinaXML('nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '.xml', 'nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '_a.xml', 'LoteRps', $certificado);

         //*** Coloca a Assinatura do LoteRps no Local Certo ***
         $nome_arquivo_rps = 'nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '_a.xml';
         $arquivo_rps = fopen($nome_arquivo_rps, 'r');
         $conteudo_nf_rps = fread($arquivo_rps, filesize($nome_arquivo_rps));
         fclose($arquivo_rps);

         //*** Obtem a Assinatura do LoteRps ***
         $posicao_inicial = strpos($conteudo_nf_rps, '<Signature');
         $posicao_final = strpos($conteudo_nf_rps, '</Signature>');
         $tamanho_total = strlen($conteudo_nf_rps);

         $conteudo_gravar_assinatura_lote = trim(substr($conteudo_nf_rps, $posicao_inicial, (($posicao_final - $posicao_inicial) + 12)));

         //*** Obtem a Estrutura do XML para LoteRps ***
         $posicao_inicial = strpos($conteudo_nf_rps, '<EnviarLoteRpsEnvio');
         $posicao_final = strpos($conteudo_nf_rps, '</tipos:InfRps>');
         $tamanho_total = strlen($conteudo_nf_rps);

         $conteudo_gravar_infrps = trim(substr($conteudo_nf_rps, $posicao_inicial, (($posicao_final - $posicao_inicial) + 15)));

         //*** Grava o Arquivo com a Estrutura do LoteRps no Local Certo ***
         $nome_arquivo_rps = 'nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '_b.xml';
         $arquivo_rps = fopen($nome_arquivo_rps, 'w');
         fwrite($arquivo_rps, trim($conteudo_gravar_infrps) . trim('</tipos:Rps></tipos:ListaRps></LoteRps></EnviarLoteRpsEnvio>'));
         fclose($arquivo_rps);

         //*** Assina a Tag: InfRps ***
         assinaXML('nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '_b.xml', 'nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '_c.xml', 'InfRps', $certificado);

         $nome_arquivo_rps = 'nfe/entrada/rps_' . trim($this->NumeroLote->Text) . '_c.xml';
         $arquivo_rps = fopen($nome_arquivo_rps, 'r');
         $conteudo_nf_rps = fread($arquivo_rps, filesize($nome_arquivo_rps));
         fclose($arquivo_rps);

         //*** Obtem a Assinatura do InfRps ***
         $posicao_inicial = strpos($conteudo_nf_rps, '<Signature');
         $posicao_final = strpos($conteudo_nf_rps, '</Signature>');
         $tamanho_total = strlen($conteudo_nf_rps);

         $conteudo_gravar_assinatura_rps = trim(substr($conteudo_nf_rps, $posicao_inicial, (($posicao_final - $posicao_inicial) + 12)));

         //*** Obtem a Estrutura do XML para InfRps ***
         $posicao_inicial = strpos($conteudo_nf_rps, '<EnviarLoteRpsEnvio');
         $posicao_final = strpos($conteudo_nf_rps, '</tipos:InfRps>');
         $tamanho_total = strlen($conteudo_nf_rps);

         $conteudo_gravar_infrps = trim(substr($conteudo_nf_rps, $posicao_inicial, (($posicao_final - $posicao_inicial) + 15)));

         //*** Grava o Arquivo com a Estrutura do InfRps no Local Certo ***
         $nome_arquivo_rps = 'nfe/saida/rps_' . trim($this->NumeroLote->Text) . '_sign.xml';
         $arquivo_rps = fopen($nome_arquivo_rps, 'w');
         fwrite($arquivo_rps, trim($conteudo_gravar_infrps) . trim($conteudo_gravar_assinatura_rps) . trim('</tipos:Rps></tipos:ListaRps></LoteRps>') . trim($conteudo_gravar_assinatura_lote) . trim('</EnviarLoteRpsEnvio>'));
         fclose($arquivo_rps);

         $validacao = validaXML('nfe/saida/rps_' . trim($this->NumeroLote->Text) . '_sign.xml', 'validadores_srv/servico_enviar_lote_rps_envio_v03.xsd');

         if($validacao["status"] == '1')
         {
            //*** Prepara o Envio do XML para o WebService ***
            $client = new nusoap_client($servidor_wsdl, 'WSDL');

            $client->authtype = 'certificate';
            $client->soap_defencoding = 'UTF-8';

            $client->certRequest['sslcertfile'] = $certificado;
            $client->certRequest['passphrase'] = $certificado_acesso;
            $client->certRequest['verifypeer'] = false;
            $client->certRequest['verifyhost'] = false;
            $client->certRequest['trace'] = 1;

            $envio_xml = simplexml_load_file('nfe/saida/rps_' . trim($this->NumeroLote->Text) . '_sign.xml');
            $servidor_dados = array("arg0"=>'<?xml version="1.0" encoding="UTF-8"?><ns2:cabecalho versao="3" xmlns:ns2="http://www.ginfes.com.br/cabecalho_v03.xsd"><versaoDados>3</versaoDados></ns2:cabecalho>',
                                    "arg1"=>trim(str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $envio_xml->asXML())));

            //*** Envia e Retorna a Conexao com o Servidor WSDL ***
            $result = $client->call("RecepcionarLoteRpsV3", $servidor_dados);
            $retorno_xml = $client->response;

            $retorno_xml = htmlspecialchars_decode($retorno_xml);
            $retorno_xml = substr($retorno_xml, (strpos($retorno_xml, '<?')));
            $retorno_xml = str_replace(' standalone="yes"', '', $retorno_xml);
            $retorno_xml = str_replace('<return>', '', $retorno_xml);
            $retorno_xml = str_replace('<tns:RecepcionarLoteRpsV3Response>', '', $retorno_xml);
            $retorno_xml = str_replace('<env:Body>', '', $retorno_xml);
            $retorno_xml = str_replace('<env:Envelope>', '', $retorno_xml);
            $retorno_xml = str_replace('</return>', '', $retorno_xml);
            $retorno_xml = str_replace('</tns:RecepcionarLoteRpsV3Response>', '', $retorno_xml);
            $retorno_xml = str_replace('</env:Body>', '', $retorno_xml);
            $retorno_xml = str_replace('</env:Envelope>', '', $retorno_xml);
            $retorno_xml = str_replace(' xmlns:ns2="http://www.ginfes.com.br/tipos_v03.xsd"', '', $retorno_xml);
            $retorno_xml = str_replace(' xmlns:ns3="http://www.ginfes.com.br/servico_enviar_lote_rps_resposta_v03.xsd"', '', $retorno_xml);
            $retorno_xml = str_replace('ns2:', '', $retorno_xml);
            $retorno_xml = str_replace('ns3:', '', $retorno_xml);
            $retorno_xml = trim($retorno_xml);

            //*** Grava o XML de Retorno ***
            $grava_retorno_xml = fopen('nfe/retRPS.xml', "w");
            fwrite($grava_retorno_xml, $retorno_xml);
            fclose($grava_retorno_xml);

            //*** Le o Arquivo de Retorno para Exibicao ***
            $ler_retorno_xml = simplexml_load_file('nfe/retRPS.xml');

            $xml_Codigo = utf8_decode($ler_retorno_xml->ListaMensagemRetorno->MensagemRetorno->Codigo);
            $xml_Mensagem = utf8_decode($ler_retorno_xml->ListaMensagemRetorno->MensagemRetorno->Mensagem);
            $xml_Correcao = utf8_decode($ler_retorno_xml->ListaMensagemRetorno->MensagemRetorno->Correcao);

            if(trim($xml_Codigo) <> '')
            {
               $listagem_erros = 'ATENCAO!!!\n\n\n\n';
               $listagem_erros .= ' || Codigo: ' . $xml_Codigo . '\n\n';
               $listagem_erros .= ' || Mensagem: ' . $xml_Mensagem . '\n\n';
               $listagem_erros .= ' || Correcao: ' . $xml_Correcao . '\n\n';
               echo "<script language=\"JavaScript\">alert('#1: " . $listagem_erros . "');</script>";
            }
            else
            {
               $xml_NumeroLote = utf8_decode($ler_retorno_xml->NumeroLote);
               $xml_DataRecebimento = utf8_decode($ler_retorno_xml->DataRecebimento);
               $xml_Protocolo = utf8_decode($ler_retorno_xml->Protocolo);

               $listagem_erros = 'NOTA FISCAL DE SERVICOS TRANSMITIDA!!!\n\n\n\n';
               $listagem_erros .= ' || Nro.NFS-e: ' . $xml_NumeroLote . '\n\n';
               $listagem_erros .= ' || Recebimento: ' . $xml_DataRecebimento . '\n\n';
               $listagem_erros .= ' || Protocolo: ' . $xml_Protocolo . '\n\n';
               echo "<script language=\"JavaScript\">alert('#2: " . $listagem_erros . "');</script>";

               //*** Verifica a Situacao do Lote ***

               if(file_exists('nfe/consSitRPS.xml'))
               {
                  unlink('nfe/consSitRPS.xml');
               }

               if(file_exists('nfe/consSitRPS_sign.xml'))
               {
                  unlink('nfe/consSitRPS_sign.xml');
               }

               //*** versao do encoding xml ***
               $geraDom = new DOMDocument('1.0', 'UTF-8');

               //*** retirar os espacos em branco ***
               $geraDom->preserveWhiteSpace = false;

               //*** gerar o codigo ***
               $geraDom->formatOutput = false;// Se True Prevalece a Formatacao com Estrutura (Pulando Linha e Espacos).

               //*** criando o no principal (Raiz) ***
               //*** Cabeca do XML ***

               $rps01 = $geraDom->createElement('ConsultarSituacaoLoteRpsEnvio');
               $rps01->setAttribute('xmlns', 'http://www.ginfes.com.br/servico_consultar_situacao_lote_rps_envio_v03.xsd');
               $rps01->setAttribute('xmlns:tipos', 'http://www.ginfes.com.br/tipos_v03.xsd');

               $rps02 = $geraDom->createElement('Prestador');
               $rps03 = $geraDom->createElement('tipos:Cnpj', trim($this->PrestadorCnpj->Text));
               $rps04 = $geraDom->createElement('tipos:InscricaoMunicipal', trim($this->PrestadorInscricaoMunicipal->Text));
               $rps02->appendChild($rps03);
               $rps02->appendChild($rps04);
               $rps01->appendChild($rps02);

               $rps05 = $geraDom->createElement('Protocolo', trim($xml_Protocolo));
               $rps01->appendChild($rps05);

               $geraDom->appendChild($rps01);

               //*** Salvando o XML ***
               $geraDom->save('nfe/consSitRPS.xml');

               //*** Valida o XML ***

               assinaXML('nfe/consSitRPS.xml', 'nfe/consSitRPS_sign.xml', 'ConsultarSituacaoLoteRpsEnvio', $certificado);

               $validacao = validaXML('nfe/consSitRPS_sign.xml', 'validadores_srv/servico_consultar_situacao_lote_rps_envio_v03.xsd');

               if($validacao["status"] == '1')
               {
                  $verifica_novamente = true;

                  while($verifica_novamente == true)
                  {
                     //*** Aguarda alguns segundos para o Retorno do Web Service ***
                     sleep(3);

                     $verifica_novamente = false;

                     //*** Prepara o Envio do XML para o WebService ***
                     $client = new nusoap_client($servidor_wsdl, 'WSDL');

                     $client->authtype = 'certificate';
                     $client->soap_defencoding = 'UTF-8';

                     $client->certRequest['sslcertfile'] = $certificado;
                     $client->certRequest['passphrase'] = $certificado_acesso;
                     $client->certRequest['verifypeer'] = false;
                     $client->certRequest['verifyhost'] = false;
                     $client->certRequest['trace'] = 1;

                     $envio_xml = simplexml_load_file('nfe/consSitRPS_sign.xml');
                     $servidor_dados = array("arg0"=>'<?xml version="1.0" encoding="UTF-8"?><ns2:cabecalho versao="3" xmlns:ns2="http://www.ginfes.com.br/cabecalho_v03.xsd"><versaoDados>3</versaoDados></ns2:cabecalho>',
                                             "arg1"=>trim(str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $envio_xml->asXML())));

                     //*** Envia e Retorna a Conexao com o Servidor WSDL ***
                     $result = $client->call("ConsultarSituacaoLoteRpsV3", $servidor_dados);
                     $retorno_xml = $client->response;

                     $retorno_xml = htmlspecialchars_decode($retorno_xml);
                     $retorno_xml = substr($retorno_xml, (strpos($retorno_xml, '<?')));
                     $retorno_xml = str_replace(' standalone="yes"', '', $retorno_xml);
                     $retorno_xml = str_replace('<return>', '', $retorno_xml);
                     $retorno_xml = str_replace('<tns:ConsultarSituacaoLoteRpsV3>', '', $retorno_xml);
                     $retorno_xml = str_replace('<tns:ConsultarSituacaoLoteRpsV3Response>', '', $retorno_xml);
                     $retorno_xml = str_replace('<env:Body>', '', $retorno_xml);
                     $retorno_xml = str_replace('<env:Envelope>', '', $retorno_xml);
                     $retorno_xml = str_replace('</return>', '', $retorno_xml);
                     $retorno_xml = str_replace('</tns:ConsultarSituacaoLoteRpsV3>', '', $retorno_xml);
                     $retorno_xml = str_replace('</tns:ConsultarSituacaoLoteRpsV3Response>', '', $retorno_xml);
                     $retorno_xml = str_replace('</env:Body>', '', $retorno_xml);
                     $retorno_xml = str_replace('</env:Envelope>', '', $retorno_xml);
                     $retorno_xml = str_replace(' xmlns:ns2="http://www.ginfes.com.br/tipos_v03.xsd"', '', $retorno_xml);
                     $retorno_xml = str_replace(' xmlns:ns3="http://www.ginfes.com.br/servico_consultar_situacao_lote_rps_resposta_v03.xsd"', '', $retorno_xml);
                     $retorno_xml = str_replace('ns2:', '', $retorno_xml);
                     $retorno_xml = str_replace('ns3:', '', $retorno_xml);
                     $retorno_xml = trim($retorno_xml);

                     //*** Grava o XML de Retorno ***
                     $grava_retorno_xml = fopen('nfe/retconsSitRPS.xml', "w");
                     fwrite($grava_retorno_xml, $retorno_xml);
                     fclose($grava_retorno_xml);

                     //*** Le o Arquivo de Retorno para Exibicao ***
                     $ler_retorno_xml = simplexml_load_file('nfe/retconsSitRPS.xml');

                     $xml_Codigo = utf8_decode($ler_retorno_xml->ListaMensagemRetorno->MensagemRetorno->Codigo);
                     $xml_Mensagem = utf8_decode($ler_retorno_xml->ListaMensagemRetorno->MensagemRetorno->Mensagem);
                     $xml_Correcao = utf8_decode($ler_retorno_xml->ListaMensagemRetorno->MensagemRetorno->Correcao);

                     if(trim($xml_Codigo) <> '')
                     {
                        $listagem_erros = 'ATENCAO!!!\n\n\n\n';
                        $listagem_erros .= ' || Codigo: ' . $xml_Codigo . '\n\n';
                        $listagem_erros .= ' || Mensagem: ' . $xml_Mensagem . '\n\n';
                        $listagem_erros .= ' || Correcao: ' . $xml_Correcao . '\n\n';
                        echo "<script language=\"JavaScript\">alert('#3: " . $listagem_erros . "');</script>";
                     }
                     else
                     {
                        $xml_NumeroLote = utf8_decode($ler_retorno_xml->NumeroLote);
                        $xml_Situacao = utf8_decode($ler_retorno_xml->Situacao);

                        if($xml_Situacao == '1')
                        {
                           $xml_Mensagem = 'Arquivo Nao Recebido';
                        }
                        elseif($xml_Situacao == '2')
                        {
                           $xml_Mensagem = 'Arquivo Nao Processado';
                        }
                        elseif($xml_Situacao == '3')
                        {
                           $xml_Mensagem = 'Arquivo Processado com Erro';
                        }
                        elseif($xml_Situacao == '4')
                        {
                           $xml_Mensagem = 'Arquivo Processado com Sucesso';
                        }

                        if(($xml_Situacao == '2') Or ($xml_Situacao == '3') Or ($xml_Situacao == '4'))
                        {
                           $verifica_novamente = true;

                           //*** Aguarda alguns segundos para o Retorno do Web Service ***
                           sleep(3);
                        }

                        $listagem_erros = 'ATENCAO!!!\n\n\n\n';
                        $listagem_erros .= ' || Nro.Lote: ' . $xml_NumeroLote . '\n\n';
                        $listagem_erros .= ' || Situacao: ' . $xml_Situacao . '\n\n';
                        $listagem_erros .= ' || Mensagem: ' . $xml_Mensagem . '\n\n';
                        echo "<script language=\"JavaScript\">alert('#4: " . $listagem_erros . "');</script>";

                        if(($xml_Situacao == '3') Or ($xml_Situacao == '4'))
                        {
                           //*** Verifica a Situacao do Lote ***

                           $verifica_novamente = false;

                           if(file_exists('nfe/consNFSeRPS.xml'))
                           {
                              unlink('nfe/consNFSeRPS.xml');
                           }

                           if(file_exists('nfe/consNFSeRPS_sign.xml'))
                           {
                              unlink('nfe/consNFSeRPS_sign.xml');
                           }

                           //*** versao do encoding xml ***
                           $geraDom = new DOMDocument('1.0', 'UTF-8');

                           //*** retirar os espacos em branco ***
                           $geraDom->preserveWhiteSpace = false;

                           //*** gerar o codigo ***
                           $geraDom->formatOutput = false;// Se True Prevalece a Formatacao com Estrutura (Pulando Linha e Espacos).

                           //*** criando o no principal (Raiz) ***
                           //*** Cabeca do XML ***

                           $rps01 = $geraDom->createElement('ConsultarNfseRpsEnvio');
                           $rps01->setAttribute('xmlns', 'http://www.ginfes.com.br/servico_consultar_nfse_rps_envio_v03.xsd');
                           $rps01->setAttribute('xmlns:tipos', 'http://www.ginfes.com.br/tipos_v03.xsd');

                           $rps02 = $geraDom->createElement('IdentificacaoRps');
                           $rps03 = $geraDom->createElement('tipos:Numero', trim($this->NumeroLote->Text));
                           $rps04 = $geraDom->createElement('tipos:Serie', trim($this->Serie->Text));
                           $rps05 = $geraDom->createElement('tipos:Tipo', trim($this->Tipo->ItemIndex));
                           $rps02->appendChild($rps03);
                           $rps02->appendChild($rps04);
                           $rps02->appendChild($rps05);
                           $rps01->appendChild($rps02);

                           $rps06 = $geraDom->createElement('Prestador');
                           $rps07 = $geraDom->createElement('tipos:Cnpj', trim($this->PrestadorCnpj->Text));
                           $rps08 = $geraDom->createElement('tipos:InscricaoMunicipal', trim($this->PrestadorInscricaoMunicipal->Text));
                           $rps06->appendChild($rps07);
                           $rps06->appendChild($rps08);
                           $rps01->appendChild($rps06);

                           $geraDom->appendChild($rps01);

                           //*** Salvando o XML ***
                           $geraDom->save('nfe/consNFSeRPS.xml');

                           //*** Valida o XML ***

                           assinaXML('nfe/consNFSeRPS.xml', 'nfe/consNFSeRPS_sign.xml', 'ConsultarNfseRpsEnvio', $certificado);

                           $validacao = validaXML('nfe/consNFSeRPS_sign.xml', 'validadores_srv/servico_consultar_nfse_rps_envio_v03.xsd');

                           if($validacao["status"] == '1')
                           {
                              //*** Prepara o Envio do XML para o WebService ***
                              $client = new nusoap_client($servidor_wsdl, 'WSDL');

                              $client->authtype = 'certificate';
                              $client->soap_defencoding = 'UTF-8';

                              $client->certRequest['sslcertfile'] = $certificado;
                              $client->certRequest['passphrase'] = $certificado_acesso;
                              $client->certRequest['verifypeer'] = false;
                              $client->certRequest['verifyhost'] = false;
                              $client->certRequest['trace'] = 1;

                              $envio_xml = simplexml_load_file('nfe/consNFSeRPS_sign.xml');
                              $servidor_dados = array("arg0"=>'<?xml version="1.0" encoding="UTF-8"?><ns2:cabecalho versao="3" xmlns:ns2="http://www.ginfes.com.br/cabecalho_v03.xsd"><versaoDados>3</versaoDados></ns2:cabecalho>',
                                                      "arg1"=>trim(str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $envio_xml->asXML())));

                              //*** Envia e Retorna a Conexao com o Servidor WSDL ***
                              $result = $client->call("ConsultarNfsePorRpsV3", $servidor_dados);
                              $retorno_xml = $client->response;

                              $retorno_xml = htmlspecialchars_decode($retorno_xml);
                              $retorno_xml = substr($retorno_xml, (strpos($retorno_xml, '<?')));
                              $retorno_xml = str_replace(' standalone="yes"', '', $retorno_xml);
                              $retorno_xml = str_replace('<return>', '', $retorno_xml);
                              $retorno_xml = str_replace('<tns:ConsultarNfsePorRpsV3>', '', $retorno_xml);
                              $retorno_xml = str_replace('<tns:ConsultarNfsePorRpsV3Response>', '', $retorno_xml);
                              $retorno_xml = str_replace('<env:Body>', '', $retorno_xml);
                              $retorno_xml = str_replace('<env:Envelope>', '', $retorno_xml);
                              $retorno_xml = str_replace('</return>', '', $retorno_xml);
                              $retorno_xml = str_replace('</tns:ConsultarNfsePorRpsV3>', '', $retorno_xml);
                              $retorno_xml = str_replace('</tns:ConsultarNfsePorRpsV3Response>', '', $retorno_xml);
                              $retorno_xml = str_replace('</env:Body>', '', $retorno_xml);
                              $retorno_xml = str_replace('</env:Envelope>', '', $retorno_xml);
                              $retorno_xml = str_replace(' xmlns:ns2="http://www.ginfes.com.br/tipos_v03.xsd"', '', $retorno_xml);
                              $retorno_xml = str_replace(' xmlns:ns3="http://www.ginfes.com.br/servico_consultar_nfse_rps_envio_v03.xsd"', '', $retorno_xml);
                              $retorno_xml = str_replace(' xmlns:ns2="http://www.w3.org/2000/09/xmldsig#"', '', $retorno_xml);
                              $retorno_xml = str_replace(' xmlns:ns4="http://www.ginfes.com.br/tipos_v03.xsd"', '', $retorno_xml);
                              $retorno_xml = str_replace(' xmlns:ns3="http://www.ginfes.com.br/servico_consultar_nfse_resposta_v03.xsd"', '', $retorno_xml);
                              $retorno_xml = str_replace(' xmlns:ns3="http://www.ginfes.com.br/servico_consultar_nfse_rps_resposta_v03.xsd"', '', $retorno_xml);
                              $retorno_xml = str_replace('ns1:', '', $retorno_xml);
                              $retorno_xml = str_replace('ns2:', '', $retorno_xml);
                              $retorno_xml = str_replace('ns3:', '', $retorno_xml);
                              $retorno_xml = str_replace('ns4:', '', $retorno_xml);
                              $retorno_xml = str_replace('ns5:', '', $retorno_xml);
                              $retorno_xml = trim($retorno_xml);

                              //*** Grava o XML de Retorno ***
                              $grava_retorno_xml = fopen('nfe/retconsNFSeRPS.xml', "w");
                              fwrite($grava_retorno_xml, $retorno_xml);
                              fclose($grava_retorno_xml);

                              //*** Le o Arquivo de Retorno para Exibicao ***
                              $ler_retorno_xml = simplexml_load_file('nfe/retconsNFSeRPS.xml');

                              $xml_Codigo = utf8_decode($ler_retorno_xml->ListaMensagemRetorno->MensagemRetorno->Codigo);
                              $xml_Mensagem = utf8_decode($ler_retorno_xml->ListaMensagemRetorno->MensagemRetorno->Mensagem);
                              $xml_Correcao = utf8_decode($ler_retorno_xml->ListaMensagemRetorno->MensagemRetorno->Correcao);

                              if(trim($xml_Codigo) <> '')
                              {
                                 $listagem_erros = 'ATENCAO!!!\n\n\n\n';
                                 $listagem_erros .= ' || Codigo: ' . $xml_Codigo . '\n\n';
                                 $listagem_erros .= ' || Mensagem: ' . $xml_Mensagem . '\n\n';
                                 $listagem_erros .= ' || Correcao: ' . $xml_Correcao . '\n\n';
                                 echo "<script language=\"JavaScript\">alert('#5: " . $listagem_erros . "');</script>";
                              }
                              else
                              {
                                 $xml_Numero = utf8_decode($ler_retorno_xml->CompNfse->Nfse->InfNfse->Numero);
                                 $xml_CodigoVerificacao = utf8_decode($ler_retorno_xml->CompNfse->Nfse->InfNfse->CodigoVerificacao);
                                 $xml_DataEmissao = utf8_decode($ler_retorno_xml->CompNfse->Nfse->InfNfse->DataEmissao);

                                 $listagem_erros = 'NOTA FISCAL DE SERVICOS (NFS-e) GERADA!!!\n\n\n\n';
                                 $listagem_erros .= ' || Nro.NFS-e: ' . $xml_Numero . '\n\n';
                                 $listagem_erros .= ' || Cod.Verificacao: ' . $xml_CodigoVerificacao . '\n\n';
                                 $listagem_erros .= ' || Data Emissao: ' . $xml_DataEmissao . '\n\n';

                                 echo "<script language=\"JavaScript\">alert('#6: " . $listagem_erros . "');</script>";

                                 //*** Copia o Retorno da NFS-e para o Local Correto ***
                                 copy('nfe/retconsNFSeRPS.xml', 'nfe/entregar_cliente/NFSe_' . trim($xml_Numero) . '.xml');

                                 $this->registra_nfse();
                                 $this->limpa_campos();

                                 //*** Restaura a Ultima Selecao Efetuada ***
                                 GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Close();
                                 GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->SQL = $_SESSION['comando_sql_grid'];
                                 GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Open();

                                 //*** Abre a Janela do DANFE ***
                                 echo "<script language=\"JavaScript\">";
                                 echo "var pos_top = (parseInt((screen.height)/2) - 320);";
                                 echo "var pos_left = (parseInt((screen.width)/2) - 387);";
                                 echo "window.open('nf_emissao_nfe_srv_danfe.php?nfse=" . "NFSe_" . trim($xml_Numero) . ".xml','NFSe_" . trim($xml_Numero) . "','toolbar=yes,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
  							                 echo 'window.location="nf_emissao_nfe_srv.php";';
                                 echo "</script>";
                              }
                           }
                           else
                           {
                              $exibe_erro = trim($validacao["error"]);
                              $exibe_erro = str_replace("'", "", $exibe_erro);
                              $exibe_erro = str_replace('"', '', $exibe_erro);
                              $exibe_erro = str_replace("\n", "\\n", $exibe_erro);

                              echo "<script language=\"JavaScript\">alert('#7: Atencao erros encontrados:\\n\\n\\n" . trim($exibe_erro) . "');</script>";
                           }
                        }
                     }
                  }
               }
               else
               {
                  $exibe_erro = trim($validacao["error"]);
                  $exibe_erro = str_replace("'", "", $exibe_erro);
                  $exibe_erro = str_replace('"', '', $exibe_erro);
                  $exibe_erro = str_replace("\n", "\\n", $exibe_erro);

                  echo "<script language=\"JavaScript\">alert('#8: Atencao erros encontrados:\\n\\n\\n" . trim($exibe_erro) . "');</script>";
               }
            }
         }
         else
         {
            $exibe_erro = trim($validacao["error"]);
            $exibe_erro = str_replace("'", "", $exibe_erro);
            $exibe_erro = str_replace('"', '', $exibe_erro);
            $exibe_erro = str_replace("\n", "\\n", $exibe_erro);

            echo "<script language=\"JavaScript\">alert('#9: Atencao erros encontrados:\\n\\n\\n" . trim($exibe_erro) . "');</script>";
         }
      }
   }

   function bt_fecharClick($sender, $params)
   {
      $this->limpa_campos();

      //*** Restaura a Ultima Selecao Efetuada ***
      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Close();
      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->SQL = $_SESSION['comando_sql_grid'];
      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Open();

      redirect('nf_emissao_nfe_srv.php');
   }

}

global $application;

global $nfemissaonfesrvimp;

//Cria o formulario
$nfemissaonfesrvimp = new nfemissaonfesrvimp($application);

//Ler do arquivo de recursos
$nfemissaonfesrvimp->loadResource(__FILE__);

//Mostrar o formulario
$nfemissaonfesrvimp->show();

?>