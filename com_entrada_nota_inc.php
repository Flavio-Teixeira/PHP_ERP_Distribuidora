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
class comentradanotainc extends Page
{
   public $Label131 = null;
   public $Label130 = null;
   public $importa_xml = null;
   public $bt_importar_cancelar = null;
   public $bt_importar_importar = null;
   public $arquivo_xml_entrada = null;
   public $Label129 = null;
   public $MSG_Erro_Importar = null;
   public $Panel19 = null;
   public $Panel18 = null;
   public $Panel7 = null;
   public $Panel6 = null;
   public $bt_importar = null;
   public $bt_incluir = null;
   public $mgt_alterar_produto_ncm = null;
   public $mgt_alterar_produto_situacao_tributaria = null;
   public $mgt_alterar_produto_classificacao_fiscal = null;
   public $Label128 = null;
   public $Label127 = null;
   public $Label119 = null;
   public $hd_alterar_produto_ncm = null;
   public $hd_alterar_produto_situacao_tributaria = null;
   public $hd_alterar_produto_classificacao_fiscal = null;
   public $mgt_produto_ncm = null;
   public $mgt_produto_situacao_tributaria = null;
   public $mgt_produto_classificacao_fiscal = null;
   public $Label118 = null;
   public $Label96 = null;
   public $Label95 = null;
   public $alterar_produto = null;
   public $mgt_alterar_produto_valor_ipi = null;
   public $Label94 = null;
   public $mgt_alterar_produto_ipi = null;
   public $Label93 = null;
   public $mgt_alterar_produto_unidade = null;
   public $Label92 = null;
   public $mgt_alterar_produto_lote = null;
   public $Label91 = null;
   public $mgt_alterar_produto_valor_total = null;
   public $Label57 = null;
   public $mgt_alterar_produto_preco = null;
   public $Label56 = null;
   public $mgt_alterar_produto_qtde = null;
   public $Label55 = null;
   public $mgt_alterar_produto_descricao = null;
   public $Label90 = null;
   public $mgt_alterar_produto_referencia = null;
   public $Label89 = null;
   public $mgt_alterar_produto_codigo = null;
   public $Label88 = null;
   public $Label87 = null;
   public $Panel11 = null;
   public $Panel10 = null;
   public $Panel9 = null;
   public $Panel8 = null;
   public $bt_alterar_sim = null;
   public $bt_alterar_nao = null;
   public $Label86 = null;
   public $hd_pedido_cliente_condicao_pgto_4 = null;
   public $hd_pedido_cliente_condicao_pgto_3 = null;
   public $hd_pedido_cliente_condicao_pgto_2 = null;
   public $hd_pedido_cliente_condicao_pgto_1 = null;
   public $hd_pedido_cliente_observacao = null;
   public $hd_pedido_cliente_transportadora = null;
   public $hd_pedido_cliente_desconto = null;
   public $produto_remover_descricao = null;
   public $produto_remover_codigo = null;
   public $produto_remover_numero_pedido = null;
   public $produto_remover_numero = null;
   public $hd_alterar_produto_valor_ipi = null;
   public $hd_alterar_produto_ipi = null;
   public $hd_alterar_produto_unidade = null;
   public $hd_alterar_produto_lote = null;
   public $hd_alterar_produto_valor_total = null;
   public $hd_alterar_produto_preco = null;
   public $hd_alterar_produto_qtde = null;
   public $hd_alterar_produto_descricao = null;
   public $hd_alterar_produto_referencia = null;
   public $hd_alterar_produto_codigo = null;
   public $hd_alterar_produto_numero = null;
   public $confirmacao = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $confirmacao_mensagem = null;
   public $registros_produtos = null;
   public $adiciona_produtos = null;
   public $bt_fechar_produto = null;
   public $mgt_produto_ipi = null;
   public $Label49 = null;
   public $mgt_produto_lote = null;
   public $Label47 = null;
   public $mgt_produto_unidade = null;
   public $Label45 = null;
   public $mgt_produto_valor_ipi = null;
   public $Label44 = null;
   public $Panel4 = null;
   public $Panel3 = null;
   public $Panel5 = null;
   public $mgt_produto_valor_total = null;
   public $Label43 = null;
   public $Label42 = null;
   public $Label41 = null;
   public $mgt_produto_preco = null;
   public $mgt_produto_qtde = null;
   public $mgt_produto_referencia = null;
   public $Label54 = null;
   public $registros_produtos_busca = null;
   public $GroupBox1 = null;
   public $bt_busca_produto = null;
   public $opcao_busca_produto = null;
   public $dados_busca_produto = null;
   public $Label53 = null;
   public $Label52 = null;
   public $adiciona_produtos_borda = null;
   public $bt_adicionar_produto = null;
   public $mgt_produto_descricao = null;
   public $Label51 = null;
   public $mgt_produto_codigo = null;
   public $Label50 = null;
   public $Label48 = null;
   public $Label46 = null;
   public $bt_remover = null;
   public $bt_alterar = null;
   public $bt_adicionar = null;
   public $bt_procurar = null;
   public $adiciona_fornecedor = null;
   public $Edit6 = null;
   public $bt_fechar_fornecedor = null;
   public $Panel17 = null;
   public $Panel16 = null;
   public $Panel15 = null;
   public $Panel14 = null;
   public $bt_adiciona_fornecedor = null;
   public $adiciona_fornecedor_nome = null;
   public $Label40 = null;
   public $adiciona_fornecedor_codigo = null;
   public $Label39 = null;
   public $adiciona_fornecedor_numero = null;
   public $Label38 = null;
   public $registros_fornecedores = null;
   public $Label37 = null;
   public $GroupBox3 = null;
   public $bt_buscar_fornecedor = null;
   public $opcao_busca_fornecedor = null;
   public $dados_busca_fornecedor = null;
   public $Label36 = null;
   public $Label24 = null;
   public $mgt_nota_fiscal_tipo_transporte = null;
   public $mgt_nota_fiscal_pagamento_frete = null;
   public $mgt_nota_fiscal_tipo_nota = null;
   public $mgt_nota_fiscal_natureza_operacao = null;
   public $mgt_nota_fiscal_emite_lote = null;
   public $mgt_nota_fiscal_tipo_faturamento = null;
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
   public $Label123 = null;
   public $Label122 = null;
   public $Label121 = null;
   public $Label120 = null;
   public $mgt_nota_fiscal_valor_desconto = null;
   public $Label117 = null;
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
   public $Label70 = null;
   public $Label72 = null;
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
   public $mgt_nota_fiscal_observacao_nota = null;
   public $Label77 = null;
   public $mgt_nota_fiscal_ordem_compra = null;
   public $Label27 = null;
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
   function bt_importar_importarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->arquivo_xml_entrada->FileName) == '')
      {
         $this->MSG_Erro_Importar->Caption = "Por favor, informe o a Localizacao do arquivo XML.";
      }
      else
      {
         //*** Limpa os Campos para o Proximo Faturamento ***

         $this->limpa_campos();
         $this->mgt_nota_fiscal_data->Text = date("d/m/Y", time());

         //*** Importa os Dados do XML ***

         if(substr(trim($_SERVER['SystemRoot']), 0, 1) == 'C')
         {
            $file = trim($_SESSION['login_caminho_base']) . "nfe_entrada\\" . $this->arquivo_xml_entrada->FileName;
         }
         else
         {
            $file = trim($_SESSION['login_caminho_base']) . "nfe_entrada/" . $this->arquivo_xml_entrada->FileName;
         }

         $this->arquivo_xml_entrada->moveUploadedFile($file);
         $this->MSG_Erro_Importar->Caption = "";

         //*** Importa os Dados do XML para a Nota Fiscal Eletronica de Entrada ***

         $danfe = simplexml_load_file('nfe_entrada/' . $this->arquivo_xml_entrada->FileName);

         //*** Dados do Fornecedor ***

         $this->mgt_nota_fiscal_cliente_numero->Text = '0';
         $this->mgt_nota_fiscal_cliente_codigo->Text = trim($danfe->NFe->infNFe->emit->CNPJ);
         $this->mgt_nota_fiscal_cliente_nome->Text = trim($danfe->NFe->infNFe->emit->xNome);
         $this->mgt_nota_fiscal_razao_social->Text = trim($danfe->NFe->infNFe->emit->xNome);
         $this->mgt_nota_fiscal_inscricao_estadual->Text = trim($danfe->NFe->infNFe->emit->IE);
         $this->mgt_nota_fiscal_inscricao_municipal->Text = trim($danfe->NFe->infNFe->emit->IM);

         $this->mgt_nota_fiscal_endereco->Text = trim($danfe->NFe->infNFe->emit->enderEmit->xLgr) . ', ' . trim($danfe->NFe->infNFe->emit->enderEmit->nro);
         $this->mgt_nota_fiscal_complemento->Text = '';
         $this->mgt_nota_fiscal_bairro->Text = trim($danfe->NFe->infNFe->emit->enderEmit->xBairro);
         $this->mgt_nota_fiscal_cidade->Text = trim($danfe->NFe->infNFe->emit->enderEmit->xMun);
         $this->mgt_nota_fiscal_estado->Text = trim($danfe->NFe->infNFe->emit->enderEmit->UF);
         $this->mgt_nota_fiscal_cep->Text = trim($danfe->NFe->infNFe->emit->enderEmit->CEP);
         $this->mgt_nota_fiscal_pais->Text = trim($danfe->NFe->infNFe->emit->enderEmit->xPais);
         $this->mgt_nota_fiscal_fone->Text = trim($danfe->NFe->infNFe->emit->enderEmit->fone);
         $this->mgt_nota_fiscal_fax->Text = '';

         $this->mgt_nota_fiscal_contato->Text = '';
         $this->mgt_nota_fiscal_ddd->Text = '';
         $this->mgt_nota_fiscal_fone_comercial->Text = trim($danfe->NFe->infNFe->emit->enderEmit->fone);
         $this->mgt_nota_fiscal_fone_celular->Text = '';
         $this->mgt_nota_fiscal_fone_fax->Text = '';
         $this->mgt_nota_fiscal_email->Text = '';
         $this->mgt_nota_fiscal_site->Text = '';

         //*** Dados do Faturamento - Adicionais ***

         $this->mgt_nota_fiscal_data_emissao->Text = inverte_data_amd_to_dma(trim($danfe->NFe->infNFe->ide->dEmi));
         $this->mgt_nota_fiscal_numero->Text = trim($danfe->NFe->infNFe->ide->nNF);
         $this->mgt_nota_fiscal_cfop->Text = trim($danfe->NFe->infNFe->det[0]->prod->CFOP);
         $this->mgt_nota_fiscal_natureza_operacao->Text = trim($danfe->NFe->infNFe->det[0]->prod->CFOP);
         $this->mgt_nota_fiscal_natureza_operacao->Text = trim($danfe->NFe->infNFe->ide->natOp);
         $this->mgt_nota_fiscal_observacao_nota->Text = trim($danfe->NFe->infNFe->infAdic->infCpl);

         //*** Dados do Faturamento - Condicao de Pagamento ***

         $posicao_duplicata = 0;

         if(trim($danfe->NFe->infNFe->cobr->dup->nDup) <> "")
         {

            foreach($danfe->NFe->infNFe->cobr->dup  as $duplicata)
            {
               $posicao_duplicata = $posicao_duplicata + 1;

               if($posicao_duplicata == 1)
               {
                  $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text = '0';
                  $this->mgt_nota_fiscal_dup_nro_1->Text = trim($duplicata->nDup);
                  $this->mgt_nota_fiscal_dup_dt_vcto_1->Text = inverte_data_amd_to_dma(trim($duplicata->dVenc));
                  $this->mgt_nota_fiscal_dup_vlr_1->Text = trim($duplicata->vDup);
               }
               elseif($posicao_duplicata == 2)
               {
                  $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text = '0';
                  $this->mgt_nota_fiscal_dup_nro_2->Text = trim($duplicata->nDup);
                  $this->mgt_nota_fiscal_dup_dt_vcto_2->Text = inverte_data_amd_to_dma(trim($duplicata->dVenc));
                  $this->mgt_nota_fiscal_dup_vlr_2->Text = trim($duplicata->vDup);
               }
               elseif($posicao_duplicata == 3)
               {
                  $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text = '0';
                  $this->mgt_nota_fiscal_dup_nro_3->Text = trim($duplicata->nDup);
                  $this->mgt_nota_fiscal_dup_dt_vcto_3->Text = inverte_data_amd_to_dma(trim($duplicata->dVenc));
                  $this->mgt_nota_fiscal_dup_vlr_3->Text = trim($duplicata->vDup);
               }
               elseif($posicao_duplicata == 4)
               {
                  $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text = '0';
                  $this->mgt_nota_fiscal_dup_nro_4->Text = trim($duplicata->nDup);
                  $this->mgt_nota_fiscal_dup_dt_vcto_4->Text = inverte_data_amd_to_dma(trim($duplicata->dVenc));
                  $this->mgt_nota_fiscal_dup_vlr_4->Text = trim($duplicata->vDup);
               }
               elseif($posicao_duplicata == 5)
               {
                  $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text = '0';
                  $this->mgt_nota_fiscal_dup_nro_5->Text = trim($duplicata->nDup);
                  $this->mgt_nota_fiscal_dup_dt_vcto_5->Text = inverte_data_amd_to_dma(trim($duplicata->dVenc));
                  $this->mgt_nota_fiscal_dup_vlr_5->Text = trim($duplicata->vDup);
               }
               elseif($posicao_duplicata == 6)
               {
                  $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text = '0';
                  $this->mgt_nota_fiscal_dup_nro_6->Text = trim($duplicata->nDup);
                  $this->mgt_nota_fiscal_dup_dt_vcto_6->Text = inverte_data_amd_to_dma(trim($duplicata->dVenc));
                  $this->mgt_nota_fiscal_dup_vlr_6->Text = trim($duplicata->vDup);
               }
               elseif($posicao_duplicata == 7)
               {
                  $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text = '0';
                  $this->mgt_nota_fiscal_dup_nro_7->Text = trim($duplicata->nDup);
                  $this->mgt_nota_fiscal_dup_dt_vcto_7->Text = inverte_data_amd_to_dma(trim($duplicata->dVenc));
                  $this->mgt_nota_fiscal_dup_vlr_7->Text = trim($duplicata->vDup);
               }
               elseif($posicao_duplicata == 8)
               {
                  $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text = '0';
                  $this->mgt_nota_fiscal_dup_nro_8->Text = trim($duplicata->nDup);
                  $this->mgt_nota_fiscal_dup_dt_vcto_8->Text = inverte_data_amd_to_dma(trim($duplicata->dVenc));
                  $this->mgt_nota_fiscal_dup_vlr_8->Text = trim($duplicata->vDup);
               }
               elseif($posicao_duplicata == 9)
               {
                  $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text = '0';
                  $this->mgt_nota_fiscal_dup_nro_9->Text = trim($duplicata->nDup);
                  $this->mgt_nota_fiscal_dup_dt_vcto_9->Text = inverte_data_amd_to_dma(trim($duplicata->dVenc));
                  $this->mgt_nota_fiscal_dup_vlr_9->Text = trim($duplicata->vDup);
               }
               elseif($posicao_duplicata == 10)
               {
                  $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text = '0';
                  $this->mgt_nota_fiscal_dup_nro_10->Text = trim($duplicata->nDup);
                  $this->mgt_nota_fiscal_dup_dt_vcto_10->Text = inverte_data_amd_to_dma(trim($duplicata->dVenc));
                  $this->mgt_nota_fiscal_dup_vlr_10->Text = trim($duplicata->vDup);
               }
               elseif($posicao_duplicata == 11)
               {
                  $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text = '0';
                  $this->mgt_nota_fiscal_dup_nro_11->Text = trim($duplicata->nDup);
                  $this->mgt_nota_fiscal_dup_dt_vcto_11->Text = inverte_data_amd_to_dma(trim($duplicata->dVenc));
                  $this->mgt_nota_fiscal_dup_vlr_11->Text = trim($duplicata->vDup);
               }
               elseif($posicao_duplicata == 12)
               {
                  $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text = '0';
                  $this->mgt_nota_fiscal_dup_nro_12->Text = trim($duplicata->nDup);
                  $this->mgt_nota_fiscal_dup_dt_vcto_12->Text = inverte_data_amd_to_dma(trim($duplicata->dVenc));
                  $this->mgt_nota_fiscal_dup_vlr_12->Text = trim($duplicata->vDup);
               }
            }
         }
         else
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text = '0';
            $this->mgt_nota_fiscal_dup_nro_1->Text = trim($danfe->NFe->infNFe->ide->nNF);
            $this->mgt_nota_fiscal_dup_dt_vcto_1->Text = date("d/m/Y", time());
            $this->mgt_nota_fiscal_dup_vlr_1->Text = trim($danfe->NFe->infNFe->total->ICMSTot->vNF);
         }

         //*** Dados do Faturamento - Transportadora ***

         if(trim($danfe->NFe->infNFe->transp->modFrete) == '0')
         {
            $this->mgt_nota_fiscal_pagamento_frete->Text = 'EMITENTE';
         }
         else
         {
            $this->mgt_nota_fiscal_pagamento_frete->Text = 'DESTINATARIO';
         }

         $this->mgt_nota_fiscal_tipo_transporte->Text = '';
         $this->mgt_nota_fiscal_transportadora_razao_social->Text = trim($danfe->NFe->infNFe->transp->transporta->xNome);
         $this->mgt_nota_fiscal_transportadora_veiculo_placa->Text = trim($danfe->NFe->infNFe->transp->transporta->veicTransp->placa);
         $this->mgt_nota_fiscal_transportadora_veiculo_estado->Text = trim($danfe->NFe->infNFe->transp->transporta->veicTransp->UF);
         $this->mgt_nota_fiscal_transportadora_cnpj->Text = trim($danfe->NFe->infNFe->transp->transporta->CNPJ);
         $this->mgt_nota_fiscal_transportadora_insc_est->Text = trim($danfe->NFe->infNFe->transp->transporta->IE);
         $this->mgt_nota_fiscal_transportadora_insc_mun->Text = '';
         $this->mgt_nota_fiscal_transportadora_endereco->Text = trim($danfe->NFe->infNFe->transp->transporta->xEnder);
         $this->mgt_nota_fiscal_transportadora_complemento->Text = '';
         $this->mgt_nota_fiscal_transportadora_bairro->Text = '';
         $this->mgt_nota_fiscal_transportadora_cidade->Text = trim($danfe->NFe->infNFe->transp->transporta->xMun);
         $this->mgt_nota_fiscal_transportadora_estado->Text = trim($danfe->NFe->infNFe->transp->transporta->UF);
         $this->mgt_nota_fiscal_transportadora_cep->Text = '';
         $this->mgt_nota_fiscal_qtde->Text = trim($danfe->NFe->infNFe->transp->vol->qVol);
         $this->mgt_nota_fiscal_especie->Text = trim($danfe->NFe->infNFe->transp->vol->esp);
         $this->mgt_nota_fiscal_marca->Text = trim($danfe->NFe->infNFe->transp->vol->marca);
         $this->mgt_nota_fiscal_vol_numero->Text = '';
         $this->mgt_nota_fiscal_peso_bruto->Text = trim($danfe->NFe->infNFe->transp->vol->pesoB);
         $this->mgt_nota_fiscal_peso_liquido->Text = trim($danfe->NFe->infNFe->transp->vol->pesoL);

         //*** Dados do Faturamento - Calculo dos Impostos ***

         $this->mgt_nota_fiscal_base_aliquota_icms_reduzida->Text = '0';
         $this->mgt_nota_fiscal_valor_desconto->Text = trim($danfe->NFe->infNFe->total->ICMSTot->vDesc);

         $this->mgt_nota_fiscal_base_icms->Text = trim($danfe->NFe->infNFe->total->ICMSTot->vBC);
         $this->mgt_nota_fiscal_valor_icms->Text = trim($danfe->NFe->infNFe->total->ICMSTot->vICMS);
         $this->mgt_nota_fiscal_base_icms_sub->Text = trim($danfe->NFe->infNFe->total->ICMSTot->vBCST);
         $this->mgt_nota_fiscal_valor_icms_sub->Text = trim($danfe->NFe->infNFe->total->ICMSTot->vST);
         $this->mgt_nota_fiscal_valor_produtos->Text = trim($danfe->NFe->infNFe->total->ICMSTot->vProd);

         $this->mgt_nota_fiscal_valor_frete->Text = trim($danfe->NFe->infNFe->total->ICMSTot->vFrete);
         $this->mgt_nota_fiscal_valor_seguro->Text = trim($danfe->NFe->infNFe->total->ICMSTot->vSeg);
         $this->mgt_nota_fiscal_outras_despesas->Text = trim($danfe->NFe->infNFe->total->ICMSTot->vOutro);
         $this->mgt_nota_fiscal_valor_ipi->Text = trim($danfe->NFe->infNFe->total->ICMSTot->vIPI);
         $this->mgt_nota_fiscal_valor_total->Text = trim($danfe->NFe->infNFe->total->ICMSTot->vNF);

         //*** Produtos da Nota de Entrada ***

         //*** Descriminacao dos Produtos ***

         for($i = 0; $i < 39; $i++)
         {
            if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
            {
               if(trim($danfe->NFe->infNFe->det[$i]->prod->CFOP) <> trim($this->mgt_nota_fiscal_cfop->Text))
               {
                  $this->mgt_nota_fiscal_cfop_2->Text = trim($danfe->NFe->infNFe->det[$i]->prod->CFOP);
               }

               $this->mgt_produto_codigo->Text = '';
               $this->mgt_produto_referencia->Text = trim($danfe->NFe->infNFe->det[$i]->prod->cProd);
               $this->mgt_produto_descricao->Text = trim($danfe->NFe->infNFe->det[$i]->prod->xProd);
               $this->mgt_produto_qtde->Text = $danfe->NFe->infNFe->det[$i]->prod->qCom;
               $this->mgt_produto_preco->Text = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
               $this->mgt_produto_valor_total->Text = $danfe->NFe->infNFe->det[$i]->prod->vProd;
               $this->mgt_produto_lote->Text = '';
               $this->mgt_produto_unidade->Text = $danfe->NFe->infNFe->det[$i]->prod->uCom;
               $this->mgt_produto_ipi->Text = $danfe->NFe->infNFe->det[$i]->imposto->IPI->IPITrib->pIPI;
               $this->mgt_produto_valor_ipi->Text = $danfe->NFe->infNFe->det[$i]->imposto->IPI->IPITrib->vIPI;
               $this->mgt_produto_classificacao_fiscal->Text = '';
               $this->mgt_produto_ncm->Text = trim($danfe->NFe->infNFe->det[$i]->prod->NCM);

               if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
               {
                  $this->mgt_produto_situacao_tributaria->Text = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                  $this->mgt_nota_fiscal_aliquota_icms->Text = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS);
               }
               elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
               {
                  $this->mgt_produto_situacao_tributaria->Text = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                  $this->mgt_nota_fiscal_aliquota_icms->Text = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS);
               }
               else
               {
                  $this->mgt_produto_situacao_tributaria->Text = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                  $this->mgt_nota_fiscal_aliquota_icms->Text = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->pICMS);
               }

               //*** Insere o Produto do Pedido ***

               $Comando_SQL = "insert into mgt_notas_entradas_produtos(";
               $Comando_SQL .= "mgt_nota_entrada_produto_numero_nota, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_quantidade, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_codigo, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_descricao, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_valor_unitario, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_valor_total, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_valor_ipi, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_lote, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_referencia, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_posicao, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_descricao_detalhada, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_unidade, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_ipi, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_classificacao_fiscal, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_situacao_tributaria, ";
               $Comando_SQL .= "mgt_nota_entrada_produto_ncm) ";
               $Comando_SQL .= "values(";
               $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_faturamento->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_qtde->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_codigo->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_descricao->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_preco->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_valor_total->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_valor_ipi->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_lote->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_referencia->Text) . "',";
               $Comando_SQL .= "'" . "0" . "',";
               $Comando_SQL .= "'" . " " . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_unidade->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_ipi->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_classificacao_fiscal->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_situacao_tributaria->Text) . "',";
               $Comando_SQL .= "'" . trim($this->mgt_produto_ncm->Text) . "')";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();

               //*** Limpa os Campos de Adicao de Pedido ***

               $this->mgt_produto_descricao->Text = '';
               $this->mgt_produto_preco->Text = '';
               $this->mgt_produto_lote->Text = '';
               $this->mgt_produto_unidade->Text = '';
               $this->mgt_produto_ipi->Text = '';
               $this->mgt_produto_codigo->Text = '';
               $this->mgt_produto_referencia->Text = '';
               $this->mgt_produto_qtde->Text = '';
               $this->mgt_produto_valor_total->Text = '';
               $this->mgt_produto_valor_ipi->Text = '';

               $this->mgt_produto_classificacao_fiscal->Text = '';
               $this->mgt_produto_situacao_tributaria->Text = '';
               $this->mgt_produto_ncm->Text = '';
            }
         }

         //*** Atualiza o Grid de Produtos ***

         $Comando_SQL = "select * from mgt_notas_entradas_produtos where mgt_nota_entrada_produto_numero_nota = " . trim($this->mgt_nota_fiscal_faturamento->Text) . " order by mgt_nota_entrada_produto_numero";

         GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Open();

         //*** Fecha a Tela de Importacao ***

         $this->importa_xml->Top = 1810;
         $this->importa_xml->Visible = false;
      }
   }

   function arquivo_xml_entradaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

       if((event.keyCode == 9) || (event.keyCode == 13) )
       {
         document.comentradanotainc.bt_importar_importar.focus();
         return false;
       }

<?php

   }

   function bt_importarClick($sender, $params)
   {
      $this->importa_xml->Top = 71;
      $this->importa_xml->Visible = true;
   }

   function bt_importar_cancelarClick($sender, $params)
   {
      $this->importa_xml->Top = 1810;
      $this->importa_xml->Visible = false;
   }

   function bt_incluirClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_nota_fiscal_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Numero da Nota de Entrada.";
      }
      elseif(trim($this->mgt_nota_fiscal_cliente_nome->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, escolha um Fornecedor para esta Nota.";
      }
      else
      {
         //*** Parcela_1 ***

         if(trim($this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text) == "")
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_dup_dt_vcto_1->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_dt_vcto_1->Text = '00/00/0000';
         }

         if(trim($this->mgt_nota_fiscal_dup_vlr_1->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_vlr_1->Text = '0.00';
         }

         //*** Parcela_2 ***

         if(trim($this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text) == "")
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_dup_dt_vcto_2->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_dt_vcto_2->Text = '00/00/0000';
         }

         if(trim($this->mgt_nota_fiscal_dup_vlr_2->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_vlr_2->Text = '0.00';
         }

         //*** Parcela_3 ***

         if(trim($this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text) == "")
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_dup_dt_vcto_3->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_dt_vcto_3->Text = '00/00/0000';
         }

         if(trim($this->mgt_nota_fiscal_dup_vlr_3->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_vlr_3->Text = '0.00';
         }

         //*** Parcela_4 ***

         if(trim($this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text) == "")
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_dup_dt_vcto_4->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_dt_vcto_4->Text = '00/00/0000';
         }

         if(trim($this->mgt_nota_fiscal_dup_vlr_4->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_vlr_4->Text = '0.00';
         }

         //*** Parcela_5 ***

         if(trim($this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text) == "")
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_dup_dt_vcto_5->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_dt_vcto_5->Text = '00/00/0000';
         }

         if(trim($this->mgt_nota_fiscal_dup_vlr_5->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_vlr_5->Text = '0.00';
         }

         //*** Parcela_6 ***

         if(trim($this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text) == "")
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_dup_dt_vcto_6->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_dt_vcto_6->Text = '00/00/0000';
         }

         if(trim($this->mgt_nota_fiscal_dup_vlr_6->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_vlr_6->Text = '0.00';
         }

         //*** Parcela_7 ***

         if(trim($this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text) == "")
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_dup_dt_vcto_7->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_dt_vcto_7->Text = '00/00/0000';
         }

         if(trim($this->mgt_nota_fiscal_dup_vlr_7->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_vlr_7->Text = '0.00';
         }

         //*** Parcela_8 ***

         if(trim($this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text) == "")
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_dup_dt_vcto_8->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_dt_vcto_8->Text = '00/00/0000';
         }

         if(trim($this->mgt_nota_fiscal_dup_vlr_8->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_vlr_8->Text = '0.00';
         }

         //*** Parcela_9 ***

         if(trim($this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text) == "")
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_dup_dt_vcto_9->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_dt_vcto_9->Text = '00/00/0000';
         }

         if(trim($this->mgt_nota_fiscal_dup_vlr_9->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_vlr_9->Text = '0.00';
         }

         //*** Parcela_10 ***

         if(trim($this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text) == "")
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_dup_dt_vcto_10->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_dt_vcto_10->Text = '00/00/0000';
         }

         if(trim($this->mgt_nota_fiscal_dup_vlr_10->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_vlr_10->Text = '0.00';
         }

         //*** Parcela_11 ***

         if(trim($this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text) == "")
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_dup_dt_vcto_11->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_dt_vcto_11->Text = '00/00/0000';
         }

         if(trim($this->mgt_nota_fiscal_dup_vlr_11->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_vlr_11->Text = '0.00';
         }

         //*** Parcela_12 ***

         if(trim($this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text) == "")
         {
            $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text = '0';
         }

         if(trim($this->mgt_nota_fiscal_dup_dt_vcto_12->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_dt_vcto_12->Text = '00/00/0000';
         }

         if(trim($this->mgt_nota_fiscal_dup_vlr_12->Text) == "")
         {
            $this->mgt_nota_fiscal_dup_vlr_12->Text = '0.00';
         }

         //*** Insere a Cabeca do Pedido ***

         $Comando_SQL = "update mgt_notas_entradas set ";
         $Comando_SQL .= "mgt_nota_entrada_numero_nota = " . trim($this->mgt_nota_fiscal_numero->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_faturamento = 0,";
         $Comando_SQL .= "mgt_nota_entrada_pedido = 0,";
         $Comando_SQL .= "mgt_nota_entrada_cfop = '" . trim($this->mgt_nota_fiscal_cfop->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_cfop_2 = '" . trim($this->mgt_nota_fiscal_cfop_2->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_tipo_nota = '" . trim($this->mgt_nota_fiscal_tipo_nota->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_natureza_operacao = '" . trim($this->mgt_nota_fiscal_natureza_operacao->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_natureza_operacao_imp = '" . trim($this->mgt_nota_fiscal_natureza_operacao->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_cliente_numero = " . trim($this->mgt_nota_fiscal_cliente_numero->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_codigo = '" . trim($this->mgt_nota_fiscal_cliente_codigo->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_cliente_nome = '" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_razao_social = '" . trim($this->mgt_nota_fiscal_razao_social->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_inscricao_municipal = '" . trim($this->mgt_nota_fiscal_inscricao_estadual->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_inscricao_estadual = '" . trim($this->mgt_nota_fiscal_inscricao_municipal->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_endereco = '" . trim($this->mgt_nota_fiscal_endereco->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_complemento = '" . trim($this->mgt_nota_fiscal_complemento->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_bairro = '" . trim($this->mgt_nota_fiscal_bairro->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_cidade = '" . trim($this->mgt_nota_fiscal_cidade->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_estado = '" . trim($this->mgt_nota_fiscal_estado->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_cep = '" . trim($this->mgt_nota_fiscal_cep->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_pais = '" . trim($this->mgt_nota_fiscal_pais->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_fone = '" . trim($this->mgt_nota_fiscal_fone->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_fax = '" . trim($this->mgt_nota_fiscal_fax->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_contato = '" . trim($this->mgt_nota_fiscal_contato->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_ddd = '" . trim($this->mgt_nota_fiscal_ddd->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_fone_comercial = '" . trim($this->mgt_nota_fiscal_fone_comercial->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_fone_celular = '" . trim($this->mgt_nota_fiscal_fone_celular->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_fone_fax = '" . trim($this->mgt_nota_fiscal_fone_fax->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_email = '" . trim($this->mgt_nota_fiscal_email->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_site = '" . trim($this->mgt_nota_fiscal_site->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_endereco_cobranca = '',";
         $Comando_SQL .= "mgt_nota_entrada_complemento_cobranca = '',";
         $Comando_SQL .= "mgt_nota_entrada_bairro_cobranca = '',";
         $Comando_SQL .= "mgt_nota_entrada_cidade_cobranca = '',";
         $Comando_SQL .= "mgt_nota_entrada_estado_cobranca = '',";
         $Comando_SQL .= "mgt_nota_entrada_cep_cobranca = '',";
         $Comando_SQL .= "mgt_nota_entrada_pais_cobranca = '',";
         $Comando_SQL .= "mgt_nota_entrada_opcao_cobranca = '',";
         $Comando_SQL .= "mgt_nota_entrada_fone_cobranca = '',";
         $Comando_SQL .= "mgt_nota_entrada_fax_cobranca = '',";
         $Comando_SQL .= "mgt_nota_entrada_endereco_entrega = '',";
         $Comando_SQL .= "mgt_nota_entrada_complemento_entrega = '',";
         $Comando_SQL .= "mgt_nota_entrada_bairro_entrega = '',";
         $Comando_SQL .= "mgt_nota_entrada_cidade_entrega = '',";
         $Comando_SQL .= "mgt_nota_entrada_estado_entrega = '',";
         $Comando_SQL .= "mgt_nota_entrada_cep_entrega = '',";
         $Comando_SQL .= "mgt_nota_entrada_pais_entrega = '',";
         $Comando_SQL .= "mgt_nota_entrada_opcao_entrega = '',";
         $Comando_SQL .= "mgt_nota_entrada_fone_entrega = '',";
         $Comando_SQL .= "mgt_nota_entrada_fax_entrega = '',";
         $Comando_SQL .= "mgt_nota_entrada_cliente_desconto = " . trim($this->mgt_nota_fiscal_cliente_desconto->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_condicao_pgto_1 = " . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_condicao_pgto_2 = " . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_condicao_pgto_3 = " . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_condicao_pgto_4 = " . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_condicao_pgto_5 = " . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_condicao_pgto_6 = " . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_condicao_pgto_7 = " . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_condicao_pgto_8 = " . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_condicao_pgto_9 = " . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_condicao_pgto_10 = " . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_condicao_pgto_11 = " . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_cliente_condicao_pgto_12 = " . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_tipo_faturamento = 'Nota Fiscal',";
         $Comando_SQL .= "mgt_nota_entrada_tipo_transporte = '" . trim($this->mgt_nota_fiscal_tipo_transporte->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_transportadora = '" . trim($this->mgt_nota_fiscal_pagamento_frete->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_valor_pedido = " . trim($this->mgt_nota_fiscal_valor_produtos->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_valor_desconto = " . trim($this->mgt_nota_fiscal_valor_desconto->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_valor_frete = " . trim($this->mgt_nota_fiscal_valor_frete->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_valor_ipi = " . trim($this->mgt_nota_fiscal_valor_ipi->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_valor_total = " . trim($this->mgt_nota_fiscal_valor_total->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_observacao_nota = '" . trim($this->mgt_nota_fiscal_observacao_nota->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_observacao_faturamento = '',";
         $Comando_SQL .= "mgt_nota_entrada_imprime_observacao_nota = 'S',";
         $Comando_SQL .= "mgt_nota_entrada_emite_lote = 'S',";
         $Comando_SQL .= "mgt_nota_entrada_pagamento_frete = '" . trim($this->mgt_nota_fiscal_pagamento_frete->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_aliquota_icms = '" . trim($this->mgt_nota_fiscal_aliquota_icms->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_base_aliquota_icms_reduzida = '" . trim($this->mgt_nota_fiscal_base_aliquota_icms_reduzida->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_qtde = '" . trim($this->mgt_nota_fiscal_qtde->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_especie = '" . trim($this->mgt_nota_fiscal_especie->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_marca = '" . trim($this->mgt_nota_fiscal_marca->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_vol_numero = '" . trim($this->mgt_nota_fiscal_vol_numero->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_peso_bruto = " . trim($this->mgt_nota_fiscal_peso_bruto->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_peso_liquido = " . trim($this->mgt_nota_fiscal_peso_liquido->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_revenda = 'N',";
         $Comando_SQL .= "mgt_nota_entrada_consumo = 'N',";
         $Comando_SQL .= "mgt_nota_entrada_zerar_base_icms = 'N',";
         $Comando_SQL .= "mgt_nota_entrada_data = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_data_entrega = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_data_emissao = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_suframa_desconto_icms = " . trim($this->mgt_nota_fiscal_suframa_desconto_icms->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_suframa_desconto_pis_cofins = " . trim($this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_suframa = '" . trim($this->mgt_nota_fiscal_suframa->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_ordem_compra = '" . trim($this->mgt_nota_fiscal_ordem_compra->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_representante = 0,";
         $Comando_SQL .= "mgt_nota_entrada_banco = 0,";
         $Comando_SQL .= "mgt_nota_entrada_dup_nro_1 = '" . trim($this->mgt_nota_fiscal_dup_nro_1->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_forma_1 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_vcto_1 = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_1->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_pgto_1 = '0000-00-00',";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_1 = " . trim($this->mgt_nota_fiscal_dup_vlr_1->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_pgto_1 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_juros_1 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_cod_bco_1 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_obs_1 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_docto_1 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_vlr_1 = " . trim($this->mgt_nota_fiscal_dup_vlr_1->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_imp_1 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_cart_1 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_nro_2 = '" . trim($this->mgt_nota_fiscal_dup_nro_2->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_forma_2 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_vcto_2 = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_2->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_pgto_2 = '0000-00-00',";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_2 = " . trim($this->mgt_nota_fiscal_dup_vlr_2->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_pgto_2 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_juros_2 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_cod_bco_2 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_obs_2 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_docto_2 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_vlr_2 = " . trim($this->mgt_nota_fiscal_dup_vlr_2->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_imp_2 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_cart_2 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_nro_3 = '" . trim($this->mgt_nota_fiscal_dup_nro_3->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_forma_3 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_vcto_3 = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_3->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_pgto_3 = '0000-00-00',";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_3 = " . trim($this->mgt_nota_fiscal_dup_vlr_3->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_pgto_3 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_juros_3 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_cod_bco_3 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_obs_3 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_docto_3 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_vlr_3 = " . trim($this->mgt_nota_fiscal_dup_vlr_3->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_imp_3 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_cart_3 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_nro_4 = '" . trim($this->mgt_nota_fiscal_dup_nro_4->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_forma_4 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_vcto_4 = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_4->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_pgto_4 = '0000-00-00',";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_4 = " . trim($this->mgt_nota_fiscal_dup_vlr_4->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_pgto_4 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_juros_4 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_cod_bco_4 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_obs_4 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_docto_4 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_vlr_4 = " . trim($this->mgt_nota_fiscal_dup_vlr_4->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_imp_4 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_cart_4 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_nro_5 = '" . trim($this->mgt_nota_fiscal_dup_nro_5->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_forma_5 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_vcto_5 = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_5->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_pgto_5 = '0000-00-00',";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_5 = " . trim($this->mgt_nota_fiscal_dup_vlr_5->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_pgto_5 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_juros_5 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_cod_bco_5 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_obs_5 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_docto_5 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_vlr_5 = " . trim($this->mgt_nota_fiscal_dup_vlr_5->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_imp_5 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_cart_5 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_nro_6 = '" . trim($this->mgt_nota_fiscal_dup_nro_6->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_forma_6 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_vcto_6 = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_6->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_pgto_6 = '0000-00-00',";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_6 = " . trim($this->mgt_nota_fiscal_dup_vlr_6->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_pgto_6 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_juros_6 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_cod_bco_6 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_obs_6 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_docto_6 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_vlr_6 = " . trim($this->mgt_nota_fiscal_dup_vlr_6->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_imp_6 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_cart_6 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_nro_7 = '" . trim($this->mgt_nota_fiscal_dup_nro_7->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_forma_7 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_vcto_7 = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_7->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_pgto_7 = '0000-00-00',";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_7 = " . trim($this->mgt_nota_fiscal_dup_vlr_7->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_pgto_7 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_juros_7 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_cod_bco_7 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_obs_7 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_docto_7 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_vlr_7 = " . trim($this->mgt_nota_fiscal_dup_vlr_7->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_imp_7 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_cart_7 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_nro_8 = '" . trim($this->mgt_nota_fiscal_dup_nro_8->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_forma_8 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_vcto_8 = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_8->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_pgto_8 = '0000-00-00',";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_8 = " . trim($this->mgt_nota_fiscal_dup_vlr_8->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_pgto_8 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_juros_8 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_cod_bco_8 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_obs_8 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_docto_8 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_vlr_8 = " . trim($this->mgt_nota_fiscal_dup_vlr_8->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_imp_8 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_cart_8 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_nro_9 = '" . trim($this->mgt_nota_fiscal_dup_nro_9->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_forma_9 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_vcto_9 = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_9->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_pgto_9 = '0000-00-00',";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_9 = " . trim($this->mgt_nota_fiscal_dup_vlr_9->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_pgto_9 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_juros_9 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_cod_bco_9 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_obs_9 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_docto_9 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_vlr_9 = " . trim($this->mgt_nota_fiscal_dup_vlr_9->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_imp_9 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_cart_9 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_nro_10 = '" . trim($this->mgt_nota_fiscal_dup_nro_10->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_forma_10 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_vcto_10 = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_10->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_pgto_10 = '0000-00-00',";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_10 = " . trim($this->mgt_nota_fiscal_dup_vlr_10->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_pgto_10 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_juros_10 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_cod_bco_10 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_obs_10 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_docto_10 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_vlr_10 = " . trim($this->mgt_nota_fiscal_dup_vlr_10->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_imp_10 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_cart_10 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_nro_11 = '" . trim($this->mgt_nota_fiscal_dup_nro_11->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_forma_11 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_vcto_11 = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_11->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_pgto_11 = '0000-00-00',";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_11 = " . trim($this->mgt_nota_fiscal_dup_vlr_11->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_pgto_11 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_juros_11 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_cod_bco_11 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_obs_11 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_docto_11 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_vlr_11 = " . trim($this->mgt_nota_fiscal_dup_vlr_11->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_imp_11 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_cart_11 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_nro_12 = '" . trim($this->mgt_nota_fiscal_dup_nro_12->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_forma_12 = '" . trim($this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_vcto_12 = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_12->Text)) . "',";
         $Comando_SQL .= "mgt_nota_entrada_dup_dt_pgto_12 = '0000-00-00',";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_12 = " . trim($this->mgt_nota_fiscal_dup_vlr_12->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_pgto_12 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_vlr_juros_12 = 0.00,";
         $Comando_SQL .= "mgt_nota_entrada_dup_cod_bco_12 = '',";
         $Comando_SQL .= "mgt_nota_entrada_dup_obs_12 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_docto_12 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_vlr_12 = " . trim($this->mgt_nota_fiscal_dup_vlr_12->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_imp_12 = '',";
         $Comando_SQL .= "mgt_nota_entrada_bol_avul_cart_12 = '',";
         $Comando_SQL .= "mgt_nota_entrada_observacao_adicional_1 = '',";
         $Comando_SQL .= "mgt_nota_entrada_observacao_adicional_2 = '',";
         $Comando_SQL .= "mgt_nota_entrada_observacao_adicional_3 = '',";
         $Comando_SQL .= "mgt_nota_entrada_observacao_adicional_4 = '',";
         $Comando_SQL .= "mgt_nota_entrada_observacao_adicional_5 = '',";
         $Comando_SQL .= "mgt_nota_entrada_observacao_adicional_6 = '',";
         $Comando_SQL .= "mgt_nota_entrada_observacao_adicional_7 = '',";
         $Comando_SQL .= "mgt_nota_entrada_observacao_adicional_8 = '',";
         $Comando_SQL .= "mgt_nota_entrada_observacao_adicional_9 = '',";
         $Comando_SQL .= "mgt_nota_entrada_observacao_adicional_10 = '',";
         $Comando_SQL .= "mgt_nota_entrada_base_icms = " . trim($this->mgt_nota_fiscal_base_icms->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_valor_icms = " . trim($this->mgt_nota_fiscal_valor_icms->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_valor_seguro = " . trim($this->mgt_nota_fiscal_valor_seguro->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_base_icms_sub = " . trim($this->mgt_nota_fiscal_base_icms_sub->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_valor_icms_sub = " . trim($this->mgt_nota_fiscal_valor_icms_sub->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_valor_produtos = " . trim($this->mgt_nota_fiscal_valor_produtos->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_outras_despesas = " . trim($this->mgt_nota_fiscal_outras_despesas->Text) . ",";
         $Comando_SQL .= "mgt_nota_entrada_transportadora_cnpj = '" . trim($this->mgt_nota_fiscal_transportadora_cnpj->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_transportadora_razao_social = '" . trim($this->mgt_nota_fiscal_transportadora_razao_social->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_transportadora_endereco = '" . trim($this->mgt_nota_fiscal_transportadora_endereco->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_transportadora_complemento = '" . trim($this->mgt_nota_fiscal_transportadora_complemento->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_transportadora_bairro = '" . trim($this->mgt_nota_fiscal_transportadora_bairro->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_transportadora_cidade = '" . trim($this->mgt_nota_fiscal_transportadora_cidade->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_transportadora_estado = '" . trim($this->mgt_nota_fiscal_transportadora_estado->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_transportadora_cep = '" . trim($this->mgt_nota_fiscal_transportadora_cep->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_transportadora_insc_est = '" . trim($this->mgt_nota_fiscal_transportadora_insc_est->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_transportadora_insc_mun = '" . trim($this->mgt_nota_fiscal_transportadora_insc_mun->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_transportadora_veiculo_estado = '" . trim($this->mgt_nota_fiscal_transportadora_veiculo_estado->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_transportadora_veiculo_placa = '" . trim($this->mgt_nota_fiscal_transportadora_veiculo_placa->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_descricao_condicao_pgto = '' ";
         $Comando_SQL .= "where mgt_nota_entrada_numero = '" . trim($this->mgt_nota_fiscal_faturamento->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Inclui no Contas a Pagar ***

         if(trim($this->mgt_nota_fiscal_dup_nro_1->Text) <> "")
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
            $Comando_SQL .= "mgt_conta_pagar_observacao, ";
            $Comando_SQL .= "mgt_conta_pagar_saldo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
            $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_1->Text)) . "', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'NF.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_razao_social->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_1->Text) . "', ";
            $Comando_SQL .= "'1', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'N', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_1->Text) . "', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0.00', ";

            if(trim($this->mgt_nota_fiscal_dup_nro_2->Text) <> "")
            {
				$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . " - PARCELA: " . trim($this->mgt_nota_fiscal_numero->Text) . "A', ";
			}
			else
			{
				$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . "', ";
			}

            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "', ";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         if(trim($this->mgt_nota_fiscal_dup_nro_2->Text) <> "")
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
            $Comando_SQL .= "mgt_conta_pagar_observacao, ";
            $Comando_SQL .= "mgt_conta_pagar_saldo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
            $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_2->Text)) . "', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'NF.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_razao_social->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_2->Text) . "', ";
            $Comando_SQL .= "'1', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'N', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_2->Text) . "', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0.00', ";
			$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . " - PARCELA: " . trim($this->mgt_nota_fiscal_numero->Text) . "B', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "', ";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         if(trim($this->mgt_nota_fiscal_dup_nro_3->Text) <> "")
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
            $Comando_SQL .= "mgt_conta_pagar_observacao, ";
            $Comando_SQL .= "mgt_conta_pagar_saldo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
            $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_3->Text)) . "', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'NF.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_razao_social->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_3->Text) . "', ";
            $Comando_SQL .= "'1', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'N', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_3->Text) . "', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0.00', ";
			$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . " - PARCELA: " . trim($this->mgt_nota_fiscal_numero->Text) . "C', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "', ";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         if(trim($this->mgt_nota_fiscal_dup_nro_4->Text) <> "")
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
            $Comando_SQL .= "mgt_conta_pagar_observacao, ";
            $Comando_SQL .= "mgt_conta_pagar_saldo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
            $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_4->Text)) . "', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'NF.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_razao_social->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_4->Text) . "', ";
            $Comando_SQL .= "'1', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'N', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_4->Text) . "', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0.00', ";
			$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . " - PARCELA: " . trim($this->mgt_nota_fiscal_numero->Text) . "D', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "', ";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         if(trim($this->mgt_nota_fiscal_dup_nro_5->Text) <> "")
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
            $Comando_SQL .= "mgt_conta_pagar_observacao, ";
            $Comando_SQL .= "mgt_conta_pagar_saldo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
            $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_5->Text)) . "', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'NF.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_razao_social->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_5->Text) . "', ";
            $Comando_SQL .= "'1', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'N', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_5->Text) . "', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0.00', ";
			$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . " - PARCELA: " . trim($this->mgt_nota_fiscal_numero->Text) . "E', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "', ";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         if(trim($this->mgt_nota_fiscal_dup_nro_6->Text) <> "")
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
            $Comando_SQL .= "mgt_conta_pagar_observacao, ";
            $Comando_SQL .= "mgt_conta_pagar_saldo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
            $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_6->Text)) . "', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'NF.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_razao_social->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_6->Text) . "', ";
            $Comando_SQL .= "'1', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'N', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_6->Text) . "', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0.00', ";
			$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . " - PARCELA: " . trim($this->mgt_nota_fiscal_numero->Text) . "F', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "', ";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         if(trim($this->mgt_nota_fiscal_dup_nro_7->Text) <> "")
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
            $Comando_SQL .= "mgt_conta_pagar_observacao, ";
            $Comando_SQL .= "mgt_conta_pagar_saldo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
            $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_7->Text)) . "', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'NF.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_razao_social->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_7->Text) . "', ";
            $Comando_SQL .= "'1', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'N', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_7->Text) . "', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0.00', ";
			$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . " - PARCELA: " . trim($this->mgt_nota_fiscal_numero->Text) . "G', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "', ";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         if(trim($this->mgt_nota_fiscal_dup_nro_8->Text) <> "")
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
            $Comando_SQL .= "mgt_conta_pagar_observacao, ";
            $Comando_SQL .= "mgt_conta_pagar_saldo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
            $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_8->Text)) . "', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'NF.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_razao_social->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_8->Text) . "', ";
            $Comando_SQL .= "'1', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'N', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_8->Text) . "', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0.00', ";
			$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . " - PARCELA: " . trim($this->mgt_nota_fiscal_numero->Text) . "H', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "', ";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         if(trim($this->mgt_nota_fiscal_dup_nro_9->Text) <> "")
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
            $Comando_SQL .= "mgt_conta_pagar_observacao, ";
            $Comando_SQL .= "mgt_conta_pagar_saldo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
            $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_9->Text)) . "', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'NF.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_razao_social->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_9->Text) . "', ";
            $Comando_SQL .= "'1', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'N', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_9->Text) . "', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0.00', ";
			$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . " - PARCELA: " . trim($this->mgt_nota_fiscal_numero->Text) . "I', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "', ";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         if(trim($this->mgt_nota_fiscal_dup_nro_10->Text) <> "")
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
            $Comando_SQL .= "mgt_conta_pagar_observacao, ";
            $Comando_SQL .= "mgt_conta_pagar_saldo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
            $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_10->Text)) . "', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'NF.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_razao_social->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_10->Text) . "', ";
            $Comando_SQL .= "'1', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'N', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_10->Text) . "', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0.00', ";
			$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . " - PARCELA: " . trim($this->mgt_nota_fiscal_numero->Text) . "J', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "', ";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         if(trim($this->mgt_nota_fiscal_dup_nro_11->Text) <> "")
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
            $Comando_SQL .= "mgt_conta_pagar_observacao, ";
            $Comando_SQL .= "mgt_conta_pagar_saldo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
            $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_11->Text)) . "', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'NF.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_razao_social->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_11->Text) . "', ";
            $Comando_SQL .= "'1', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'N', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_11->Text) . "', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0.00', ";
			$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . " - PARCELA: " . trim($this->mgt_nota_fiscal_numero->Text) . "K', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "', ";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         if(trim($this->mgt_nota_fiscal_dup_nro_12->Text) <> "")
         {
            $Comando_SQL = "Insert into mgt_contas_pagar(";
            $Comando_SQL .= "mgt_conta_pagar_data, ";
            $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
            $Comando_SQL .= "mgt_conta_pagar_descricao, ";
            $Comando_SQL .= "mgt_conta_pagar_valor, ";
            $Comando_SQL .= "mgt_conta_pagar_conta, ";
            $Comando_SQL .= "mgt_conta_pagar_status, ";
            $Comando_SQL .= "mgt_conta_pagar_posicao, ";
            $Comando_SQL .= "mgt_conta_pagar_fixo, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
            $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
            $Comando_SQL .= "mgt_conta_pagar_observacao, ";
            $Comando_SQL .= "mgt_conta_pagar_saldo, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
            $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
            $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
            $Comando_SQL .= "Values(";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_12->Text)) . "', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'NF.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_razao_social->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_12->Text) . "', ";
            $Comando_SQL .= "'1', ";
            $Comando_SQL .= "'Em Aberto', ";
            $Comando_SQL .= "'2', ";
            $Comando_SQL .= "'N', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_dup_vlr_12->Text) . "', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0.00', ";
			$Comando_SQL .= "'GERADA PELA NOTA DE ENTRADA NRO.: " . trim($this->mgt_nota_fiscal_numero->Text) . " - " . trim($this->mgt_nota_fiscal_cliente_nome->Text) . " - EMISSAO: " . trim($this->mgt_nota_fiscal_data_emissao->Text) . " - PARCELA: " . trim($this->mgt_nota_fiscal_numero->Text) . "L', ";
            $Comando_SQL .= "'0.00', ";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_cliente_nome->Text) . "', ";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         //*** Atualiza o Estoque dos Produtos ***

         $Comando_SQL = "select * from mgt_notas_entradas_produtos where mgt_nota_entrada_produto_numero_nota = " . trim($this->mgt_nota_fiscal_faturamento->Text) . " order by mgt_nota_entrada_produto_numero";

         GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->EOF) != 1)
            {
               $codigo_produto = GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Fields['mgt_nota_entrada_produto_codigo'];
               $qtde_produto = GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Fields['mgt_nota_entrada_produto_quantidade'];
               $compra_produto = GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Fields['mgt_nota_entrada_produto_valor_unitario'];
               $referencia_produto = GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Fields['mgt_nota_entrada_produto_referencia'];
               $descricao_produto = GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Fields['mgt_nota_entrada_produto_descricao'];

               //*** INICIO - Atualizacao do Estoque ***

               if(trim($codigo_produto) <> "")
               {
                  if($qtde_produto <= 0)
                  {
                     $qtde_produto = 0;
                  }
                  //*** Seleciona o Produto para Obter o Estoque ***

                  $Comando_SQL = "select * from mgt_produtos";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_produto_codigo = '" . trim($codigo_produto) . "'";

                  GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
                  GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

                  //*** Registra o Movimento de Estoque ***

                  $qtde_atual = 0;
                  $qtde_anterior = 0;
                  $qtde_informada = 0;

                  $qtde_anterior = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'];
                  $qtde_informada = $qtde_produto;
                  $qtde_atual = $qtde_anterior + $qtde_informada;

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
                  $Comando_SQL .= "'" . trim($codigo_produto) . "',";
                  $Comando_SQL .= "'" . trim($referencia_produto) . "',";
                  $Comando_SQL .= "'" . trim($descricao_produto) . "',";
                  $Comando_SQL .= "'" . "1" . "',";
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
                  $Comando_SQL .= "mgt_produto_estoque_atual = '" . $qtde_atual . "', ";
                  $Comando_SQL .= "mgt_produto_valor_compra = '" . $compra_produto . "' ";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_produto_codigo = '" . trim($codigo_produto) . "'";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }

               //*** FINAL - Atualizacao do Estoque ***

               GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Next();
            }
         }

         //*** Atualiza o Grid de Pedido ***
         /*
         $Comando_SQL = "select *,date_format(mgt_nota_entrada_data, '%d/%m/%Y') AS mgt_nota_entrada_data, date_format(mgt_nota_entrada_data_emissao, '%d/%m/%Y') AS mgt_nota_entrada_data_emissao, date_format(mgt_nota_entrada_data_entrega, '%d/%m/%Y') AS mgt_nota_entrada_data_entrega from mgt_notas_entradas order by mgt_nota_entrada_numero";

         GetConexaoPrincipal()->SQL_MGT_Notas_Entradas->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Entradas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Entradas->Open();
         */
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Notas_Entradas->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Entradas->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Notas_Entradas->Open();

         redirect('com_entrada_nota.php');
      }
   }

   function mgt_nota_fiscal_valor_totalJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_valor_total;
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

   function mgt_nota_fiscal_valor_ipiJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_valor_ipi;
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

   function mgt_nota_fiscal_outras_despesasJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_outras_despesas;
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

   function mgt_nota_fiscal_valor_seguroJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_valor_seguro;
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

   function mgt_nota_fiscal_valor_freteJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_valor_frete;
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

   function mgt_nota_fiscal_valor_produtosJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_valor_produtos;
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

   function mgt_nota_fiscal_valor_icms_subJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_valor_icms_sub;
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

   function mgt_nota_fiscal_base_icms_subJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_base_icms_sub;
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

   function mgt_nota_fiscal_valor_icmsJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_valor_icms;
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

   function mgt_nota_fiscal_base_icmsJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_base_icms;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_valor_desconto;
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

   function mgt_nota_fiscal_base_aliquota_icms_reduzidaJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_base_aliquota_icms_reduzida;
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

   function mgt_nota_fiscal_aliquota_icmsJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_aliquota_icms;
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


   function mgt_alterar_produto_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_alterar_produto_descricao.focus();
     return false;
   }

<?php

   }

   function mgt_produto_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.comentradanotainc.mgt_produto_descricao.focus();
        return false;
      }

<?php

   }


   function mgt_alterar_produto_ncmJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_alterar_produto_ncm
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

   function mgt_alterar_produto_situacao_tributariaJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_alterar_produto_situacao_tributaria
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

   function mgt_alterar_produto_ncmJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.bt_alterar_sim.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_situacao_tributariaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_alterar_produto_ncm.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_classificacao_fiscalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_alterar_produto_situacao_tributaria.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_ipiJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_alterar_produto_ipi;
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

   //*** Totaliza o Produto ***

   document.comentradanotainc.mgt_alterar_produto_valor_total.value = (document.comentradanotainc.mgt_alterar_produto_qtde.value * document.comentradanotainc.mgt_alterar_produto_preco.value).toFixed(2);
   document.comentradanotainc.mgt_alterar_produto_valor_ipi.value   = ((document.comentradanotainc.mgt_alterar_produto_valor_total.value * document.comentradanotainc.mgt_alterar_produto_ipi.value) / 100).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_alterar_produto_precoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_alterar_produto_preco;
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

   //*** Totaliza o Produto ***

   document.comentradanotainc.mgt_alterar_produto_valor_total.value = (document.comentradanotainc.mgt_alterar_produto_qtde.value * document.comentradanotainc.mgt_alterar_produto_preco.value).toFixed(2);
   document.comentradanotainc.mgt_alterar_produto_valor_ipi.value   = ((document.comentradanotainc.mgt_alterar_produto_valor_total.value * document.comentradanotainc.mgt_alterar_produto_ipi.value) / 100).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_alterar_produto_qtdeJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_alterar_produto_qtde;
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

   //*** Totaliza o Produto ***

   document.comentradanotainc.mgt_alterar_produto_valor_total.value = (document.comentradanotainc.mgt_alterar_produto_qtde.value * document.comentradanotainc.mgt_alterar_produto_preco.value).toFixed(2);
   document.comentradanotainc.mgt_alterar_produto_valor_ipi.value   = ((document.comentradanotainc.mgt_alterar_produto_valor_total.value * document.comentradanotainc.mgt_alterar_produto_ipi.value) / 100).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_alterar_produto_loteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_alterar_produto_unidade.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_precoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_alterar_produto_lote.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_qtdeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_alterar_produto_preco.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_descricaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_alterar_produto_qtde.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_unidadeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_alterar_produto_ipi.focus();
     return false;
   }

<?php

   }

   function mgt_alterar_produto_ipiJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_alterar_produto_classificacao_fiscal.focus();
     return false;
   }

<?php

   }

   function registros_produtosJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Seleciona o Produto Clicado ***

      //*** Para Remocao ***

      document.comentradanotainc.produto_remover_numero.value = registros_produtos.getTableModel().getValue(15, registros_produtos.getFocusedRow());
      document.comentradanotainc.produto_remover_numero_pedido.value = document.comentradanotainc.mgt_nota_fiscal_faturamento.value;
      document.comentradanotainc.produto_remover_codigo.value = registros_produtos.getTableModel().getValue(0, registros_produtos.getFocusedRow());
      document.comentradanotainc.produto_remover_descricao.value = registros_produtos.getTableModel().getValue(1, registros_produtos.getFocusedRow());

      //*** Para Alteracao ***

      document.comentradanotainc.hd_alterar_produto_numero.value = registros_produtos.getTableModel().getValue(15, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_codigo.value = registros_produtos.getTableModel().getValue(0, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_referencia.value = registros_produtos.getTableModel().getValue(11, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_descricao.value = registros_produtos.getTableModel().getValue(1, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_qtde.value = registros_produtos.getTableModel().getValue(6, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_preco.value = registros_produtos.getTableModel().getValue(7, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_valor_total.value = registros_produtos.getTableModel().getValue(8, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_lote.value = registros_produtos.getTableModel().getValue(2, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_unidade.value = registros_produtos.getTableModel().getValue(5, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_ipi.value = registros_produtos.getTableModel().getValue(9, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_valor_ipi.value = registros_produtos.getTableModel().getValue(10, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_classificacao_fiscal.value = registros_produtos.getTableModel().getValue(3, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_situacao_tributaria.value = registros_produtos.getTableModel().getValue(4, registros_produtos.getFocusedRow());
      document.comentradanotainc.hd_alterar_produto_ncm.value = registros_produtos.getTableModel().getValue(14, registros_produtos.getFocusedRow());
<?php

   }

   public function totaliza_pedido()
   {
      //*** Atualiza o Grid dos Produtos Incluidos e Totaliza o Pedido ***

      $this->mgt_nota_fiscal_valor_produtos->Text = '0.00';
      $this->mgt_nota_fiscal_valor_ipi->Text = '0.00';
      $this->mgt_nota_fiscal_valor_produtos->Text = '0.00';

      $valor_desconto = 0;
      $valor_pedido = 0;
      $valor_ipi = 0;
      $valor_total = 0;
      $desconto = $this->mgt_nota_fiscal_cliente_desconto->Text;
      $frete = $this->mgt_nota_fiscal_valor_frete->Text;

      if($desconto < 0)
      {
         $desconto = 0;
      }

      if($frete < 0)
      {
         $frete = 0;
      }

      $Comando_SQL = "select * from mgt_notas_entradas_produtos where mgt_nota_entrada_produto_numero_nota = " . trim($this->mgt_nota_fiscal_faturamento->Text) . " order by mgt_nota_entrada_produto_numero";

      GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->EOF) != 1)
         {
            $valor_ipi = $valor_ipi + GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Fields['mgt_nota_entrada_produto_valor_ipi'];
            $valor_pedido = $valor_pedido + GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Fields['mgt_nota_entrada_produto_valor_total'];

            GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Next();
         }
      }

      if($desconto > 0)
      {
         $valor_desconto = (($valor_pedido * $desconto) / 100);
      }
      else
      {
         $valor_desconto = 0;
      }

      $valor_total = ((($valor_pedido + $valor_ipi) + $frete) - $valor_desconto);

      $this->mgt_nota_fiscal_valor_produtos->Text = number_format($valor_pedido, "2", ".", "");
      $this->mgt_nota_fiscal_valor_ipi->Text = number_format($valor_ipi, "2", ".", "");
      $this->mgt_nota_fiscal_valor_produtos->Text = number_format($valor_total, "2", ".", "");
   }

   function mgt_produto_ncmJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.comentradanotainc.mgt_produto_ncm
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_produto_situacao_tributariaJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.comentradanotainc.mgt_produto_situacao_tributaria
      var digits="0123456789"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Valor ***

<?php

   }

   function mgt_produto_ncmJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.comentradanotainc.bt_adicionar_produto.focus();
        return false;
      }

<?php

   }

   function mgt_produto_situacao_tributariaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.comentradanotainc.mgt_produto_ncm.focus();
        return false;
      }

<?php

   }

   function mgt_produto_classificacao_fiscalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.comentradanotainc.mgt_produto_situacao_tributaria.focus();
        return false;
      }

<?php

   }

   function bt_alterar_simClick($sender, $params)
   {
      if((trim($this->mgt_alterar_produto_descricao->Text) <> '')and(trim($this->mgt_alterar_produto_qtde->Text) <> '')and(trim($this->mgt_alterar_produto_qtde->Text) > 0))
      {
         //*** Altera o Produto do Pedido ***

         $Comando_SQL = "update mgt_notas_entradas_produtos set ";
         $Comando_SQL .= "mgt_nota_entrada_produto_quantidade = '" . trim($this->mgt_alterar_produto_qtde->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_codigo = '" . trim($this->mgt_alterar_produto_codigo->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_descricao = '" . trim($this->mgt_alterar_produto_descricao->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_valor_unitario = '" . trim($this->mgt_alterar_produto_preco->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_valor_total = '" . trim($this->mgt_alterar_produto_valor_total->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_valor_ipi = '" . trim($this->mgt_alterar_produto_valor_ipi->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_lote = '" . trim($this->mgt_alterar_produto_lote->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_referencia = '" . trim($this->mgt_alterar_produto_referencia->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_posicao = '" . "0" . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_descricao_detalhada = '" . " " . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_unidade = '" . trim($this->mgt_alterar_produto_unidade->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_ipi = '" . trim($this->mgt_alterar_produto_ipi->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_classificacao_fiscal = '" . trim($this->mgt_alterar_produto_classificacao_fiscal->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_situacao_tributaria = '" . trim($this->mgt_alterar_produto_situacao_tributaria->Text) . "',";
         $Comando_SQL .= "mgt_nota_entrada_produto_ncm = '" . trim($this->mgt_alterar_produto_ncm->Text) . "' ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_nota_entrada_produto_numero = '" . trim($this->hd_alterar_produto_numero->Value) . "' ";
         $Comando_SQL .= "and mgt_nota_entrada_produto_numero_nota = '" . trim($this->mgt_nota_fiscal_faturamento->Text) . "' ";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Limpa os Dados dos Produtos Selecionados e Fecha a Janela ***

         $this->hd_alterar_produto_numero->Value = '';
         $this->hd_alterar_produto_codigo->Value = '';
         $this->hd_alterar_produto_referencia->Value = '';
         $this->hd_alterar_produto_descricao->Value = '';
         $this->hd_alterar_produto_qtde->Value = '';
         $this->hd_alterar_produto_preco->Value = '';
         $this->hd_alterar_produto_valor_total->Value = '';
         $this->hd_alterar_produto_lote->Value = '';
         $this->hd_alterar_produto_unidade->Value = '';
         $this->hd_alterar_produto_ipi->Value = '';
         $this->hd_alterar_produto_valor_ipi->Value = '';
         $this->hd_alterar_produto_classificacao_fiscal->Value = '';
         $this->hd_alterar_produto_situacao_tributaria->Value = '';
         $this->hd_alterar_produto_ncm->Value = '';

         $this->alterar_produto->Top = 1495;
         $this->alterar_produto->Visible = false;

         //*** Totaliza o Pedido ***

         $this->totaliza_pedido();
      }
   }

   function bt_alterar_naoClick($sender, $params)
   {
      //*** Limpa os Dados dos Produtos Selecionados e Fecha a Janela ***

      $this->hd_alterar_produto_numero->Value = '';
      $this->hd_alterar_produto_codigo->Value = '';
      $this->hd_alterar_produto_referencia->Value = '';
      $this->hd_alterar_produto_descricao->Value = '';
      $this->hd_alterar_produto_qtde->Value = '';
      $this->hd_alterar_produto_preco->Value = '';
      $this->hd_alterar_produto_valor_total->Value = '';
      $this->hd_alterar_produto_lote->Value = '';
      $this->hd_alterar_produto_unidade->Value = '';
      $this->hd_alterar_produto_ipi->Value = '';
      $this->hd_alterar_produto_valor_ipi->Value = '';
      $this->hd_alterar_produto_classificacao_fiscal->Value = '';
      $this->hd_alterar_produto_situacao_tributaria->Value = '';
      $this->hd_alterar_produto_ncm->Value = '';

      $this->alterar_produto->Top = 1495;
      $this->alterar_produto->Visible = false;
   }

   function bt_simClick($sender, $params)
   {
      //*** Remove o Produto Selecionado ***

      $Comando_SQL = "delete from mgt_notas_entradas_produtos ";
      $Comando_SQL .= " where ";
      $Comando_SQL .= "mgt_nota_entrada_produto_numero = '" . trim($this->produto_remover_numero->Value) . "' ";
      $Comando_SQL .= "and mgt_nota_entrada_produto_numero_nota = '" . trim($this->produto_remover_numero_pedido->Value) . "' ";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      $this->confirmacao->Top = 1394;
      $this->confirmacao->IsVisible = false;

      //*** Totaliza o Pedido ***

      $this->totaliza_pedido();
   }

   function bt_naoClick($sender, $params)
   {
      $this->produto_remover_codigo->Value = '';
      $this->produto_remover_descricao->Value = '';
      $this->produto_remover_numero_pedido->Value = '';
      $this->produto_remover_numero->Value = '';

      $this->confirmacao->Top = 1394;
      $this->confirmacao->IsVisible = false;
   }

   function bt_adicionar_produtoClick($sender, $params)
   {
      if((trim($this->mgt_produto_descricao->Text) <> '')and(trim($this->mgt_produto_qtde->Text) <> '')and(trim($this->mgt_produto_qtde->Text) > 0))
      {
         //*** Insere o Produto do Pedido ***

         $Comando_SQL = "insert into mgt_notas_entradas_produtos(";
         $Comando_SQL .= "mgt_nota_entrada_produto_numero_nota, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_quantidade, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_codigo, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_descricao, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_valor_unitario, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_valor_total, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_valor_ipi, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_lote, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_referencia, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_posicao, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_descricao_detalhada, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_unidade, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_ipi, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_classificacao_fiscal, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_situacao_tributaria, ";
         $Comando_SQL .= "mgt_nota_entrada_produto_ncm) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_faturamento->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_qtde->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_codigo->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_descricao->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_preco->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_valor_total->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_valor_ipi->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_lote->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_referencia->Text) . "',";
         $Comando_SQL .= "'" . "0" . "',";
         $Comando_SQL .= "'" . " " . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_unidade->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_ipi->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_classificacao_fiscal->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_situacao_tributaria->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_produto_ncm->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Limpa os Campos de Adicao de Pedido ***

         $this->mgt_produto_descricao->Text = '';
         $this->mgt_produto_preco->Text = '';
         $this->mgt_produto_lote->Text = '';
         $this->mgt_produto_unidade->Text = '';
         $this->mgt_produto_ipi->Text = '';
         $this->mgt_produto_codigo->Text = '';
         $this->mgt_produto_referencia->Text = '';
         $this->mgt_produto_qtde->Text = '';
         $this->mgt_produto_valor_total->Text = '';
         $this->mgt_produto_valor_ipi->Text = '';

         $this->mgt_produto_classificacao_fiscal->Text = '';
         $this->mgt_produto_situacao_tributaria->Text = '';
         $this->mgt_produto_ncm->Text = '';

         //*** Totaliza o Pedido ***

         $this->totaliza_pedido();
      }
   }


   function bt_fechar_produtoClick($sender, $params)
   {
      $this->adiciona_produtos->Visible = false;

      $this->adiciona_produtos->Top = 1105;
      $this->dados_faturamento->Top = (($this->dados_faturamento->Top) - ($this->adiciona_produtos->Height) - 5);
      $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) - ($this->adiciona_produtos->Height) - 5);

      $this->adiciona_produtos->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
   }

   function mgt_produto_ipiJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_produto_ipi;
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

   //*** Totaliza o Produto ***

   document.comentradanotainc.mgt_produto_valor_total.value = (document.comentradanotainc.mgt_produto_qtde.value * document.comentradanotainc.mgt_produto_preco.value).toFixed(2);
   document.comentradanotainc.mgt_produto_valor_ipi.value   = ((document.comentradanotainc.mgt_produto_valor_total.value * document.comentradanotainc.mgt_produto_ipi.value) / 100).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_produto_precoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_produto_preco;
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

   //*** Totaliza o Produto ***

   document.comentradanotainc.mgt_produto_valor_total.value = (document.comentradanotainc.mgt_produto_qtde.value * document.comentradanotainc.mgt_produto_preco.value).toFixed(2);
   document.comentradanotainc.mgt_produto_valor_ipi.value   = ((document.comentradanotainc.mgt_produto_valor_total.value * document.comentradanotainc.mgt_produto_ipi.value) / 100).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function mgt_produto_ipiJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_produto_classificacao_fiscal.focus();
     return false;
   }

<?php

   }

   function mgt_produto_unidadeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_produto_ipi.focus();
     return false;
   }

<?php

   }

   function mgt_produto_qtdeJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_produto_qtde;
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

   //*** Totaliza o Produto ***

   document.comentradanotainc.mgt_produto_valor_total.value = (document.comentradanotainc.mgt_produto_qtde.value * document.comentradanotainc.mgt_produto_preco.value).toFixed(2);
   document.comentradanotainc.mgt_produto_valor_ipi.value   = ((document.comentradanotainc.mgt_produto_valor_total.value * document.comentradanotainc.mgt_produto_ipi.value) / 100).toFixed(2);

   //*** FINAL - So Valor ***

<?php

   }

   function registros_produtos_buscaJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.comentradanotainc.mgt_produto_descricao.value   = registros_produtos_busca.getTableModel().getValue(2, registros_produtos_busca.getFocusedRow());
      document.comentradanotainc.mgt_produto_preco.value       = registros_produtos_busca.getTableModel().getValue(3, registros_produtos_busca.getFocusedRow());
      document.comentradanotainc.mgt_produto_lote.value        = registros_produtos_busca.getTableModel().getValue(4, registros_produtos_busca.getFocusedRow());
      document.comentradanotainc.mgt_produto_unidade.value     = registros_produtos_busca.getTableModel().getValue(5, registros_produtos_busca.getFocusedRow());
      document.comentradanotainc.mgt_produto_ipi.value         = registros_produtos_busca.getTableModel().getValue(6, registros_produtos_busca.getFocusedRow());
      document.comentradanotainc.mgt_produto_codigo.value      = registros_produtos_busca.getTableModel().getValue(0, registros_produtos_busca.getFocusedRow());
      document.comentradanotainc.mgt_produto_referencia.value  = registros_produtos_busca.getTableModel().getValue(1, registros_produtos_busca.getFocusedRow());
      document.comentradanotainc.mgt_produto_qtde.value        = '0';
      document.comentradanotainc.mgt_produto_valor_total.value = '0.00';
      document.comentradanotainc.mgt_produto_valor_ipi.value   = '0.00';

      document.comentradanotainc.mgt_produto_classificacao_fiscal.value  = registros_produtos_busca.getTableModel().getValue(7, registros_produtos_busca.getFocusedRow());
      document.comentradanotainc.mgt_produto_situacao_tributaria.value  = registros_produtos_busca.getTableModel().getValue(8, registros_produtos_busca.getFocusedRow());
      document.comentradanotainc.mgt_produto_ncm.value  = registros_produtos_busca.getTableModel().getValue(9, registros_produtos_busca.getFocusedRow());

<?php

   }

   function bt_alterarClick($sender, $params)
   {
      if(trim($this->produto_remover_numero->Value) != '')
      {
         $this->mgt_alterar_produto_codigo->Text = $this->hd_alterar_produto_codigo->Value;
         $this->mgt_alterar_produto_referencia->Text = $this->hd_alterar_produto_referencia->Value;
         $this->mgt_alterar_produto_descricao->Text = $this->hd_alterar_produto_descricao->Value;
         $this->mgt_alterar_produto_qtde->Text = $this->hd_alterar_produto_qtde->Value;
         $this->mgt_alterar_produto_preco->Text = $this->hd_alterar_produto_preco->Value;
         $this->mgt_alterar_produto_valor_total->Text = $this->hd_alterar_produto_valor_total->Value;
         $this->mgt_alterar_produto_lote->Text = $this->hd_alterar_produto_lote->Value;
         $this->mgt_alterar_produto_unidade->Text = $this->hd_alterar_produto_unidade->Value;
         $this->mgt_alterar_produto_ipi->Text = $this->hd_alterar_produto_ipi->Value;
         $this->mgt_alterar_produto_valor_ipi->Text = $this->hd_alterar_produto_valor_ipi->Value;
         $this->mgt_alterar_produto_classificacao_fiscal->Text = $this->hd_alterar_produto_classificacao_fiscal->Value;
         $this->mgt_alterar_produto_situacao_tributaria->Text = $this->hd_alterar_produto_situacao_tributaria->Value;
         $this->mgt_alterar_produto_ncm->Text = $this->hd_alterar_produto_ncm->Value;

         $this->alterar_produto->Top = 145;
         $this->alterar_produto->Visible = true;
      }
      else
      {
         $this->MSG_Erro->Caption = "Clique em um Produto para efetuar a Alteracao.";
      }
   }

   function bt_removerClick($sender, $params)
   {
      if(trim($this->produto_remover_numero->Value) != '')
      {
         $this->confirmacao_mensagem->Caption = "Voce deseja realmente remover o Produto: " . trim($this->produto_remover_codigo->Value) . " - " . trim($this->produto_remover_descricao->Value) . " do Pedido?";
         $this->confirmacao->Top = 134;
         $this->confirmacao->IsVisible = true;
      }
      else
      {
         $this->MSG_Erro->Caption = "Clique em um Produto para efetuar a Remocao.";
      }
   }

   function bt_adicionarClick($sender, $params)
   {
      if(trim($this->mgt_nota_fiscal_cliente_numero->Text) <> '')
      {
         if($this->adiciona_produtos->Visible == false)
         {
            $this->MSG_Erro->Caption = '';

            $this->adiciona_produtos->Top = 39;
            $this->dados_faturamento->Top = (($this->dados_faturamento->Top) + ($this->adiciona_produtos->Height) + 5);
            $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) + ($this->adiciona_produtos->Height) + 5);

            $this->mgt_produto_codigo->Text = '';
            $this->mgt_produto_referencia->Text = '';
            $this->mgt_produto_descricao->Text = '';
            $this->mgt_produto_qtde->Text = '';
            $this->mgt_produto_preco->Text = '';
            $this->mgt_produto_valor_total->Text = '';
            $this->mgt_produto_lote->Text = '';
            $this->mgt_produto_unidade->Text = '';
            $this->mgt_produto_ipi->Text = '';
            $this->mgt_produto_valor_ipi->Text = '';

            $this->mgt_produto_classificacao_fiscal->Text = '';
            $this->mgt_produto_situacao_tributaria->Text = '';
            $this->mgt_produto_ncm->Text = '';

            $this->adiciona_produtos->Visible = true;
         }
      }
      else
      {
         $this->MSG_Erro->Caption = 'Escolha primeiro um Fornecedor...';
      }
   }

   function mgt_produto_loteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_produto_unidade.focus();
     return false;
   }

<?php

   }

   function mgt_produto_precoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_produto_lote.focus();
     return false;
   }

<?php

   }

   function mgt_produto_qtdeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_produto_preco.focus();
     return false;
   }

<?php

   }

   function mgt_produto_descricaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_produto_qtde.focus();
     return false;
   }

<?php

   }

   function opcao_busca_produtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.bt_busca_produto.focus();
     return false;
   }

<?php

   }

   function dados_busca_produtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.opcao_busca_produto.focus();
     return false;
   }

<?php

   }

   function bt_busca_produtoClick($sender, $params)
   {
      if(trim($this->dados_busca_produto->Text) == "")
      {
         $Comando_SQL = "select * from mgt_produtos order by mgt_produto_codigo";
      }
      else
      {
         if(trim($this->opcao_busca_produto->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_codigo like '%" . trim($this->dados_busca_produto->Text) . "%' order by mgt_produto_codigo";
         }
         elseif(trim($this->opcao_busca_produto->ItemIndex) == "Referencia")
         {
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_referencia = '" . trim($this->dados_busca_produto->Text) . "' order by mgt_produto_referencia";
         }
         elseif(trim($this->opcao_busca_produto->ItemIndex) == "Descricao")
         {
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_descricao like '%" . trim($this->dados_busca_produto->Text) . "%' order by mgt_produto_descricao";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Produtos->Open();
   }

   function opcao_busca_fornecedorJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.bt_buscar_fornecedor.focus();
     return false;
   }

<?php

   }

   function dados_busca_fornecedorJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.opcao_busca_fornecedor.focus();
     return false;
   }

<?php

   }

   function registros_fornecedoresJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      document.comentradanotainc.adiciona_fornecedor_numero.value = registros_fornecedores.getTableModel().getValue(0, registros_fornecedores.getFocusedRow());
      document.comentradanotainc.adiciona_fornecedor_codigo.value = registros_fornecedores.getTableModel().getValue(1, registros_fornecedores.getFocusedRow());
      document.comentradanotainc.adiciona_fornecedor_nome.value = registros_fornecedores.getTableModel().getValue(2, registros_fornecedores.getFocusedRow());

<?php

   }

   function bt_adiciona_fornecedorClick($sender, $params)
   {
      if(trim($this->adiciona_fornecedor_numero->Text) <> '')
      {
         $this->mgt_nota_fiscal_cliente_numero->Text = $this->adiciona_fornecedor_numero->Text;
         $this->mgt_nota_fiscal_cliente_codigo->Text = $this->adiciona_fornecedor_codigo->Text;
         $this->mgt_nota_fiscal_cliente_nome->Text = $this->adiciona_fornecedor_nome->Text;

		 //*** Seleciona o Fornecedor Escolhido ***
         $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_numero = '" . trim($this->adiciona_fornecedor_numero->Text) . "' order by mgt_fornecedor_numero";

         GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
         GetConexaoPrincipal()->SQL_MGT_Fornecedores->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Fornecedores->Open();

         $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_razao_social'];
         $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_inscricao_estadual'];
         $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_inscricao_municipal'];

         $this->mgt_nota_fiscal_endereco->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_endereco'];
         $this->mgt_nota_fiscal_complemento->Text = '';
         $this->mgt_nota_fiscal_bairro->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_bairro'];
         $this->mgt_nota_fiscal_cidade->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_cidade'];
         $this->mgt_nota_fiscal_estado->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_estado'];
         $this->mgt_nota_fiscal_cep->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_cep'];
         $this->mgt_nota_fiscal_pais->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_pais'];
         $this->mgt_nota_fiscal_fone->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_comercial'];
         $this->mgt_nota_fiscal_fax->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_fax'];

         $this->mgt_nota_fiscal_contato->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_contato'];
         $this->mgt_nota_fiscal_ddd->Text = '';
         $this->mgt_nota_fiscal_fone_comercial->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_comercial'];
         $this->mgt_nota_fiscal_fone_celular->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_celular'];
         $this->mgt_nota_fiscal_fone_fax->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_fone_fax'];
         $this->mgt_nota_fiscal_email->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_email'];
         $this->mgt_nota_fiscal_site->Text = GetConexaoPrincipal()->SQL_MGT_Fornecedores->Fields['mgt_fornecedor_site'];

         $this->MSG_Erro->Caption = '';
      }

      $this->adiciona_fornecedor->Visible = false;

      $this->adiciona_fornecedor->Top = 817;
      $this->dados_faturamento->Top = (($this->dados_faturamento->Top) - ($this->adiciona_fornecedor->Height) - 5);
      $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) - ($this->adiciona_fornecedor->Height) - 5);

      $this->adiciona_fornecedor->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
   }

   function bt_buscar_fornecedorClick($sender, $params)
   {
      if(trim($this->dados_busca_fornecedor->Text) == "")
      {
         $Comando_SQL = "select * from mgt_fornecedores order by mgt_fornecedor_numero";
      }
      else
      {
         if(trim($this->opcao_busca_fornecedor->ItemIndex) == "Numero")
         {
            $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_numero = '" . trim($this->dados_busca_fornecedor->Text) . "' order by mgt_fornecedor_numero";
         }
         elseif(trim($this->opcao_busca_fornecedor->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_codigo like '%" . trim($this->dados_busca_fornecedor->Text) . "%' order by mgt_fornecedor_codigo";
         }
         elseif(trim($this->opcao_busca_fornecedor->ItemIndex) == "Nome")
         {
            $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_nome like '%" . trim($this->dados_busca_fornecedor->Text) . "%' order by mgt_fornecedor_nome";
         }
         elseif(trim($this->opcao_busca_fornecedor->ItemIndex) == "Razao Social")
         {
            $Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_razao_social like '%" . trim($this->dados_busca_fornecedor->Text) . "%' order by mgt_fornecedor_razao_social";
         }

      }

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
      GetConexaoPrincipal()->SQL_MGT_Fornecedores->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Open();
   }

   function bt_fechar_fornecedorClick($sender, $params)
   {
      $this->adiciona_fornecedor->Visible = false;

      $this->adiciona_fornecedor->Top = 817;
      $this->dados_faturamento->Top = (($this->dados_faturamento->Top) - ($this->adiciona_fornecedor->Height) - 5);
      $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) - ($this->adiciona_fornecedor->Height) - 5);

      $this->adiciona_fornecedor->Visible = false;

      GetConexaoPrincipal()->SQL_MGT_Fornecedores->Close();
   }

   function bt_procurarClick($sender, $params)
   {
      if($this->adiciona_fornecedor->Visible == false)
      {
         $this->adiciona_fornecedor->Top = 39;
         $this->dados_faturamento->Top = (($this->dados_faturamento->Top) + ($this->adiciona_fornecedor->Height) + 5);
         $this->opcoes_faturamento->Top = (($this->opcoes_faturamento->Top) + ($this->adiciona_fornecedor->Height) + 5);

         $this->adiciona_fornecedor_numero->Text = "";
         $this->adiciona_fornecedor_codigo->Text = "";
         $this->adiciona_fornecedor_nome->Text = "";

         $this->adiciona_fornecedor->Visible = true;
      }
   }


   function mgt_nota_fiscal_dup_vlr_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_vlr_12;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_vlr_11;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_vlr_10;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_vlr_9;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_vlr_8;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_vlr_7;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_vlr_6;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_vlr_5;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_vlr_4;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_vlr_3;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_vlr_2;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_vlr_1;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_12
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_11
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_10
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_9
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_8
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_7
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_6
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_5
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_4
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_3
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_2
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_1
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_12
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_11
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_10
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_9
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_8
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_7
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_6
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_5
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_4
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_3
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_2
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_1
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

<?php

   }

   function mgt_nota_fiscal_data_emissaoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_data_emissao
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
     document.comentradanotainc.mgt_nota_fiscal_suframa.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_suframa_desconto_pis_cofins.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_suframa_desconto_pis_cofinsJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.comentradanotainc.mgt_nota_fiscal_suframa_desconto_pis_cofins;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_suframa_desconto_icms;
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

   function mgt_nota_fiscal_cliente_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.comentradanotainc.mgt_nota_fiscal_cliente_codigo.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_nome.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_razao_social.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_inscricao_estadual.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_inscricao_municipal.focus();
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
     document.comentradanotainc.bt_fechar.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_complemento.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_bairro.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cidade.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_estado.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cep.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_pais.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_fone.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_fax.focus();
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
     document.comentradanotainc.bt_fechar.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_ddd.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_fone_comercial.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_fone_celular.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_fone_fax.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_email.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_site.focus();
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
     document.comentradanotainc.bt_fechar.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cfop.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_data_emissao.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_numero.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_suframa_desconto_icms.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cfop_2.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_observacao_nota.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_desconto.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_data.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_ordem_compra.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_ordem_compra.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_desconto.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_natureza_operacao.focus();
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
     document.comentradanotainc.bt_incluir.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_nro_1.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_1.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_vlr_1.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_2.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_nro_2.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_2.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_vlr_2.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_3.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_nro_3.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_3.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_vlr_3.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_4.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_nro_4.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_4.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_vlr_4.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_5.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_nro_5.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_5.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_vlr_5.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_6.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_nro_6.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_6.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_vlr_6.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_7.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_nro_7.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_7.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_vlr_7.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_8.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_nro_8.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_8.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_vlr_8.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_9.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_nro_9.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_9.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_vlr_9.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_10.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_nro_10.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_10.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_vlr_10.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_11.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_nro_11.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_11.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_vlr_11.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_cliente_condicao_pgto_12.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_nro_12.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_dt_vcto_12.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_dup_vlr_12.focus();
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
     document.comentradanotainc.bt_fechar.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_tipo_transporte.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_transportadora_razao_social.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_transportadora_veiculo_placa.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_transportadora_veiculo_estado.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_transportadora_cnpj.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_transportadora_insc_est.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_transportadora_insc_mun.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_transportadora_endereco.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_transportadora_complemento.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_transportadora_bairro.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_transportadora_cidade.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_transportadora_estado.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_transportadora_cep.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_qtde.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_especie.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_marca.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_vol_numero.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_peso_bruto.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_peso_liquido.focus();
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
     document.comentradanotainc.bt_fechar.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_base_aliquota_icms_reduzida.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_valor_desconto.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_base_icms.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_valor_icms.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_base_icms_sub.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_valor_icms_sub.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_valor_produtos.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_valor_frete.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_valor_seguro.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_outras_despesas.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_valor_ipi.focus();
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
     document.comentradanotainc.mgt_nota_fiscal_valor_total.focus();
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
     document.comentradanotainc.bt_fechar.focus();
     return false;
   }

<?php

   }

   public function limpa_campos()
   {
      $this->itens_faturamento->TabIndex = 0;
      $this->dados_cliente->TabIndex = 0;

      $this->MSG_Erro->Caption = '';

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

      //*** Dados de Contato ***

      $this->mgt_nota_fiscal_contato->Text = '';
      $this->mgt_nota_fiscal_ddd->Text = '';
      $this->mgt_nota_fiscal_fone_comercial->Text = '';
      $this->mgt_nota_fiscal_fone_celular->Text = '';
      $this->mgt_nota_fiscal_fone_fax->Text = '';
      $this->mgt_nota_fiscal_email->Text = '';
      $this->mgt_nota_fiscal_site->Text = '';

      //***Adicionais ***

      $this->mgt_nota_fiscal_natureza_operacao->Text = '';
      $this->mgt_nota_fiscal_tipo_faturamento->Text = 'Nota Fiscal';
      $this->mgt_nota_fiscal_data_emissao->Text = '';
      $this->mgt_nota_fiscal_numero->Text = '';
      $this->mgt_nota_fiscal_cfop->Text = '';
      $this->mgt_nota_fiscal_cfop_2->Text = '';
      $this->mgt_nota_fiscal_tipo_nota->Text = 'Entrada';
      $this->mgt_nota_fiscal_cliente_desconto->Text = '0';
      $this->mgt_nota_fiscal_data->Text = '';
      $this->mgt_nota_fiscal_emite_lote->Text = 'N';

      $this->mgt_nota_fiscal_suframa_desconto_icms->Text = '0';
      $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text = '0';
      $this->mgt_nota_fiscal_suframa->Text = '';

      $this->mgt_nota_fiscal_ordem_compra->Text = '';
      $this->mgt_nota_fiscal_observacao_nota->Text = '';

      //*** Condicoes de Pagamento ***

      $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text = '';
      $this->mgt_nota_fiscal_dup_nro_1->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_1->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_1->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text = '';
      $this->mgt_nota_fiscal_dup_nro_2->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_2->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_2->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text = '';
      $this->mgt_nota_fiscal_dup_nro_3->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_3->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_3->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text = '';
      $this->mgt_nota_fiscal_dup_nro_4->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_4->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_4->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text = '';
      $this->mgt_nota_fiscal_dup_nro_5->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_5->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_5->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text = '';
      $this->mgt_nota_fiscal_dup_nro_6->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_6->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_6->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text = '';
      $this->mgt_nota_fiscal_dup_nro_7->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_7->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_7->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text = '';
      $this->mgt_nota_fiscal_dup_nro_8->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_8->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_8->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text = '';
      $this->mgt_nota_fiscal_dup_nro_9->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_9->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_9->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text = '';
      $this->mgt_nota_fiscal_dup_nro_10->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_10->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_10->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text = '';
      $this->mgt_nota_fiscal_dup_nro_11->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_11->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_11->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text = '';
      $this->mgt_nota_fiscal_dup_nro_12->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_12->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_12->Text = '';

      //*** Transportador ***

      $this->mgt_nota_fiscal_pagamento_frete->Text = 'Cliente';
      $this->mgt_nota_fiscal_tipo_transporte->Text = 'Rodoviario';
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_peso_liquido;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_peso_bruto;
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_qtde
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_cfop_2
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_cfop
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

   var campo = document.comentradanotainc.mgt_nota_fiscal_numero
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
      $texto = str_replace('Ê', 'E', $texto);
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
      $texto = str_replace('Ê', 'E', $texto);
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

   function comentradanotaincCreate($sender, $params)
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

      $mgt_nota_fiscal_faturamento = $_REQUEST['mgt_nota_fiscal_faturamento'];
      $this->mgt_nota_fiscal_faturamento->Text = $mgt_nota_fiscal_faturamento;

      //*** Limpa os Campos ***

      $this->itens_faturamento->TabIndex = 0;
      $this->dados_cliente->TabIndex = 0;

      $this->MSG_Erro->Caption = '';

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

      //*** Dados de Contato ***

      $this->mgt_nota_fiscal_contato->Text = '';
      $this->mgt_nota_fiscal_ddd->Text = '';
      $this->mgt_nota_fiscal_fone_comercial->Text = '';
      $this->mgt_nota_fiscal_fone_celular->Text = '';
      $this->mgt_nota_fiscal_fone_fax->Text = '';
      $this->mgt_nota_fiscal_email->Text = '';
      $this->mgt_nota_fiscal_site->Text = '';

      //***Adicionais ***

      $this->mgt_nota_fiscal_natureza_operacao->Text = '';
      $this->mgt_nota_fiscal_tipo_faturamento->Text = 'Nota Fiscal';
      $this->mgt_nota_fiscal_data_emissao->Text = '';
      $this->mgt_nota_fiscal_numero->Text = '';
      $this->mgt_nota_fiscal_cfop->Text = '';
      $this->mgt_nota_fiscal_cfop_2->Text = '';
      $this->mgt_nota_fiscal_tipo_nota->Text = 'Entrada';
      $this->mgt_nota_fiscal_cliente_desconto->Text = '0';
      $this->mgt_nota_fiscal_data->Text = '';
      $this->mgt_nota_fiscal_emite_lote->Text = 'N';

      $this->mgt_nota_fiscal_suframa_desconto_icms->Text = '0';
      $this->mgt_nota_fiscal_suframa_desconto_pis_cofins->Text = '0';
      $this->mgt_nota_fiscal_suframa->Text = '';

      $this->mgt_nota_fiscal_ordem_compra->Text = '';
      $this->mgt_nota_fiscal_observacao_nota->Text = '';

      //*** Condicoes de Pagamento ***

      $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text = '';
      $this->mgt_nota_fiscal_dup_nro_1->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_1->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_1->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text = '';
      $this->mgt_nota_fiscal_dup_nro_2->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_2->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_2->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text = '';
      $this->mgt_nota_fiscal_dup_nro_3->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_3->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_3->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text = '';
      $this->mgt_nota_fiscal_dup_nro_4->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_4->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_4->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text = '';
      $this->mgt_nota_fiscal_dup_nro_5->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_5->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_5->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text = '';
      $this->mgt_nota_fiscal_dup_nro_6->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_6->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_6->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text = '';
      $this->mgt_nota_fiscal_dup_nro_7->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_7->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_7->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text = '';
      $this->mgt_nota_fiscal_dup_nro_8->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_8->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_8->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text = '';
      $this->mgt_nota_fiscal_dup_nro_9->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_9->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_9->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text = '';
      $this->mgt_nota_fiscal_dup_nro_10->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_10->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_10->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text = '';
      $this->mgt_nota_fiscal_dup_nro_11->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_11->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_11->Text = '';

      $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text = '';
      $this->mgt_nota_fiscal_dup_nro_12->Text = '';
      $this->mgt_nota_fiscal_dup_dt_vcto_12->Text = '';
      $this->mgt_nota_fiscal_dup_vlr_12->Text = '';

      //*** Transportador ***

      $this->mgt_nota_fiscal_pagamento_frete->Text = 'Cliente';
      $this->mgt_nota_fiscal_tipo_transporte->Text = 'Rodoviario';
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

      //*** Obtem os Produtos da Nota de Entrada ***

      $Comando_SQL = "select * from mgt_notas_entradas_produtos where mgt_nota_entrada_produto_numero_nota = " . trim($this->mgt_nota_fiscal_faturamento->Text) . " order by mgt_nota_entrada_produto_numero";

      GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Entradas_Produtos->Open();

      //*** Informa a Data de Inclusao ***

      $this->mgt_nota_fiscal_data->Text = date("d/m/Y", time());
   }

   function bt_fecharClick($sender, $params)
   {
      //*** Limpa os Campos para o Proximo Faturamento ***

      $this->limpa_campos();

      //*** Restaura a Ultima Selecao Efetuada ***
      GetConexaoPrincipal()->SQL_MGT_Notas_Entradas->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Entradas->SQL = $_SESSION['comando_sql_grid'];
      GetConexaoPrincipal()->SQL_MGT_Notas_Entradas->Open();

      redirect('com_entrada_nota.php');
   }
   function comentradanotaincJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $comentradanotainc;

//Creates the form
$comentradanotainc = new comentradanotainc($application);

//Read from resource file
$comentradanotainc->loadResource(__FILE__);

//Shows the form
$comentradanotainc->show();

?>