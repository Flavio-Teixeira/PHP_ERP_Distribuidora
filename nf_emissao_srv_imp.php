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
class nfemissaosrvimp extends Page
{
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
   public $hd_nota_fiscal_imprime_observacao_nota = null;
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
   public $mgt_nota_fiscal_valor_produtos = null;
   public $mgt_nota_fiscal_valor_icms = null;
   public $Label114 = null;
   public $Label111 = null;
   public $mgt_nota_fiscal_valor_total = null;
   public $Label9 = null;
   public $mgt_nota_fiscal_aliquota_icms = null;
   public $Label73 = null;
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

   function mgt_nota_fiscal_valor_produtosJSKeyUp($sender, $params)
   {

?>
      //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.nfemissaosrvimp.mgt_nota_fiscal_valor_produtos;
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

   function mgt_apenas_registraJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.nfemissaosrvimp.bt_imprimir.focus();
        return false;
      }

<?php

   }

   function mgt_apenas_registraJSClick($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if(document.nfemissaosrvimp.hd_apenas_registra.value == 0)
      {
         document.nfemissaosrvimp.hd_apenas_registra.value = 1;
         document.nfemissaosrvimp.hd_nota_fiscal_nao_imprimir.value = 1;
      }
      else
      {
         document.nfemissaosrvimp.hd_apenas_registra.value = 0;
         document.nfemissaosrvimp.hd_nota_fiscal_nao_imprimir.value = 0;
      }

<?php

   }

   public function imprime_nota_fiscal()
   {
      //*** Efetua a Gravacao do Arquivo Texto para a Impressao da Nota ***

      $caminho_arquivo = trim($_SESSION['login_impressora']) . "NF" . trim($this->mgt_nota_fiscal_numero->Text) . ".txt";
      $impressora = fopen($caminho_arquivo, "w");

      //*** Comeca a Impressao das Linhas ***

      //fwrite($impressora, "\n");
      fwrite($impressora, "\n");

      $linha = $this->gera_posicao(127, $this->mgt_nota_fiscal_numero->Text, 5);
      fwrite($impressora, $linha . "\n");

      //fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");

      $linha = $this->gera_posicao(3, strtoupper($this->mgt_nota_fiscal_natureza_operacao_imp->Text), 37);
      fwrite($impressora, $linha);

      if(trim($this->mgt_nota_fiscal_cfop_2->Text) <> '')
      {
         $linha = $this->gera_posicao(3, strtoupper(trim($this->mgt_nota_fiscal_cfop->Text) . ' / ' . trim($this->mgt_nota_fiscal_cfop_2->Text)), 10);
         ;
      }
      else
      {
         $linha = $this->gera_posicao(3, strtoupper(trim($this->mgt_nota_fiscal_cfop->Text)), 10);
      }

      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");
      fwrite($impressora, "\n");

      $linha = $this->gera_posicao(3, $this->mgt_nota_fiscal_razao_social->Text, 87);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(2, $this->mgt_nota_fiscal_cliente_codigo->Text, 30);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(5, $this->mgt_nota_fiscal_data_emissao->Text, 10);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");

      $linha = $this->gera_posicao(3, trim($this->mgt_nota_fiscal_endereco->Text) . " " . trim($this->mgt_nota_fiscal_complemento->Text), 73);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(2, $this->mgt_nota_fiscal_bairro->Text, 30);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(5, $this->mgt_nota_fiscal_cep->Text, 9);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");

      $linha = $this->gera_posicao(3, $this->mgt_nota_fiscal_cidade->Text, 49);
      fwrite($impressora, $linha);

      if(trim($this->mgt_nota_fiscal_fone_fax->Text) == '')
      {
         $linha = trim($this->mgt_nota_fiscal_fone_comercial->Text) . " / " . trim($this->mgt_nota_fiscal_fone_fax->Text);
      }
      else
      {
         $linha = trim($this->mgt_nota_fiscal_fone_comercial->Text);
      }

      $linha = $this->gera_posicao(1, $linha, 31);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(3, $this->mgt_nota_fiscal_estado->Text, 3);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao(4, $this->mgt_nota_fiscal_inscricao_estadual->Text, 32);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");
      fwrite($impressora, "\n");

      if(trim($this->mgt_nota_fiscal_dup_nro_1->Text) != '')
      {
         $linha = $this->gera_posicao(3, $this->mgt_nota_fiscal_dup_nro_1->Text, 23);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(3, $this->mgt_nota_fiscal_dup_vlr_1->Text, 25);
         fwrite($impressora, $linha);

         if(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '1')
         {
            $linha = $this->gera_posicao(6, '(A VISTA)', 0);
         }
         elseif(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '2')
         {
            $linha = $this->gera_posicao(6, '(SEM VALOR COMERCIAL)', 0);
         }
         elseif(trim($this->hd_nota_fiscal_descricao_condicao_pgto->Value) == '3')
         {
            $linha = $this->gera_posicao(6, '(ANTECIPADO)', 0);
         }
         else
         {
            $linha = $this->gera_posicao(6, $this->mgt_nota_fiscal_dup_dt_vcto_1->Text, 11);
         }
         fwrite($impressora, $linha);
      }

      if(trim($this->mgt_nota_fiscal_dup_nro_2->Text) != '')
      {
         $linha = $this->gera_posicao(6, $this->mgt_nota_fiscal_dup_nro_2->Text, 22);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(2, $this->mgt_nota_fiscal_dup_vlr_2->Text, 25);
         fwrite($impressora, $linha);

         $linha = $this->gera_posicao(2, $this->mgt_nota_fiscal_dup_dt_vcto_2->Text, 10);
         fwrite($impressora, $linha);
      }

      fwrite($impressora, "\n");
      fwrite($impressora, "\n");
      fwrite($impressora, "\n");

      //*** Lista os Produtos da Nota Fiscal ***

      $conta_produto_minimo = 1;
      $conta_produto_maximo = 15;

      GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->First();

      if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->EOF) != 1)
      {
         while((((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->EOF) != 1)and($conta_produto_minimo <= $conta_produto_maximo)))
         {
            $linha = $this->gera_posicao(3, GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo'], 14);
            fwrite($impressora, $linha);

            $linha = $this->gera_posicao(3, GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_descricao'], 70);
            fwrite($impressora, $linha);

            $linha = $this->gera_posicao_numerica(1, intval(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_quantidade']), 8);
            fwrite($impressora, $linha);

            $linha = $this->gera_posicao_numerica(1, number_format(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_unitario'], 2, '.', ''), 18);
            fwrite($impressora, $linha);

            $linha = $this->gera_posicao_numerica(1, number_format(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_total'], 2, '.', ''), 18);
            fwrite($impressora, $linha . "\n");

            GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Next();

            $conta_produto_minimo = $conta_produto_minimo + 1;
         }
      }

      for($ind = $conta_produto_minimo; $ind < $conta_produto_maximo; $ind++)
      {
         $linha = $this->gera_posicao(1, ' ', 132);
         fwrite($impressora, $linha . "\n");
      }

      fwrite($impressora, "\n");
      fwrite($impressora, "\n");

      $linha = $this->gera_posicao_numerica(60, $this->mgt_nota_fiscal_valor_icms->Text, 28);
      fwrite($impressora, $linha);

      $linha = $this->gera_posicao_numerica(21, $this->mgt_nota_fiscal_valor_total->Text, 21);
      fwrite($impressora, $linha . "\n");

      fwrite($impressora, "\n");

      $observacao = trim($this->mgt_nota_fiscal_observacao_nota->Text);

      if(trim($this->mgt_nota_fiscal_observacao_adicional_1->Text) != '')
      {
         $observacao .= ' || ' . trim($this->mgt_nota_fiscal_observacao_adicional_1->Text);
      }
      if(trim($this->mgt_nota_fiscal_observacao_adicional_2->Text) != '')
      {
         $observacao .= ' || ' . trim($this->mgt_nota_fiscal_observacao_adicional_2->Text);
      }
      if(trim($this->mgt_nota_fiscal_observacao_adicional_3->Text) != '')
      {
         $observacao .= ' || ' . trim($this->mgt_nota_fiscal_observacao_adicional_3->Text);
      }
      if(trim($this->mgt_nota_fiscal_observacao_adicional_4->Text) != '')
      {
         $observacao .= ' || ' . trim($this->mgt_nota_fiscal_observacao_adicional_4->Text);
      }
      if(trim($this->mgt_nota_fiscal_observacao_adicional_5->Text) != '')
      {
         $observacao .= ' || ' . trim($this->mgt_nota_fiscal_observacao_adicional_5->Text);
      }
      if(trim($this->mgt_nota_fiscal_observacao_adicional_6->Text) != '')
      {
         $observacao .= ' || ' . trim($this->mgt_nota_fiscal_observacao_adicional_6->Text);
      }
      if(trim($this->mgt_nota_fiscal_observacao_adicional_7->Text) != '')
      {
         $observacao .= ' || ' . trim($this->mgt_nota_fiscal_observacao_adicional_7->Text);
      }
      if(trim($this->mgt_nota_fiscal_observacao_adicional_8->Text) != '')
      {
         $observacao .= ' || ' . trim($this->mgt_nota_fiscal_observacao_adicional_8->Text);
      }
      if(trim($this->mgt_nota_fiscal_observacao_adicional_9->Text) != '')
      {
         $observacao .= ' || ' . trim($this->mgt_nota_fiscal_observacao_adicional_9->Text);
      }
      if(trim($this->mgt_nota_fiscal_observacao_adicional_10->Text) != '')
      {
         $observacao .= ' || ' . trim($this->mgt_nota_fiscal_observacao_adicional_10->Text);
      }

      if($this->hd_nota_fiscal_imprime_observacao_nota->Value == 1)
      {
         $linha = $this->gera_posicao(3, substr($observacao, 0, 129), 129);
         fwrite($impressora, $linha . "\n");

         $linha = $this->gera_posicao(3, substr($observacao, 129, 129), 129);
         fwrite($impressora, $linha . "\n");

         $linha = $this->gera_posicao(3, substr($observacao, 258, 129), 129);
         fwrite($impressora, $linha . "\n");

         $linha = $this->gera_posicao(3, substr($observacao, 387, 129), 129);
         fwrite($impressora, $linha . "\n");

         $linha = $this->gera_posicao(3, substr($observacao, 516, 129), 129);
         fwrite($impressora, $linha . "\n");

         $linha = $this->gera_posicao(3, substr($observacao, 645, 129), 129);
         fwrite($impressora, $linha . "\n");

         $linha = $this->gera_posicao(3, substr($observacao, 774, 129), 129);
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
      $Comando_SQL .= "mgt_nota_fiscal_descricao_condicao_pgto) ";
      $Comando_SQL .= "values(";
      $Comando_SQL .= "'" . "SRV" . "', ";
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
      $Comando_SQL .= "'" . "Rodoviario" . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_produtos->Text . "', ";
      $Comando_SQL .= "'" . "0" . "', ";
      $Comando_SQL .= "'" . "0" . "', ";
      $Comando_SQL .= "'" . "0" . "', ";
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

      $Comando_SQL .= "'" . "N" . "', ";
      $Comando_SQL .= "'" . "Cliente" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_aliquota_icms->Text . "', ";
      $Comando_SQL .= "'" . "0" . "', ";
      $Comando_SQL .= "'" . "0" . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . "" . "', ";
      $Comando_SQL .= "'" . "0" . "', ";
      $Comando_SQL .= "'" . "0" . "', ";
      $Comando_SQL .= "'N', ";
      $Comando_SQL .= "'N', ";
      $Comando_SQL .= "'N', ";

      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data->Text)) . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_entrega->Text)) . "', ";
      $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "', ";

      $Comando_SQL .= "'" . "0" . "', ";
      $Comando_SQL .= "'" . "0" . "', ";
      $Comando_SQL .= "'" . "" . "', ";
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
      $Comando_SQL .= "'" . "0" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_icms->Text . "', ";
      $Comando_SQL .= "'" . "0" . "', ";
      $Comando_SQL .= "'" . "0" . "', ";
      $Comando_SQL .= "'" . "0" . "', ";
      $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_produtos->Text . "', ";
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
      $Comando_SQL .= "'" . $this->hd_nota_fiscal_descricao_condicao_pgto->Value . "')";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Insere os Produtos da Nota Fiscal ***

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
            $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_numero->Text) . "', ";
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
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo']) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_referencia']) . "',";
               $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_descricao']) . "',";

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
               $Comando_SQL .= "mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo']) . "'";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();
            }
            GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Next();
         }
      }

      //*** Atualiza o Numero da Ultima Nota Fiscal ***

      $Comando_SQL = "update mgt_numero_nota_anterior set ";
      $Comando_SQL .= "mgt_numero_nota_anterior_data_srv = '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "',";
      $Comando_SQL .= "mgt_numero_nota_anterior_numero_srv = '" . trim($this->mgt_nota_fiscal_numero->Text) . "'";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Altera o Status do Pedido de Faturamento ***

      $Comando_SQL = "update mgt_faturamentos_srv set ";
      $Comando_SQL .= "mgt_faturamento_srv_status = 'Faturado' ";
      $Comando_SQL .= "Where mgt_faturamento_srv_numero = '" . trim($this->mgt_nota_fiscal_faturamento->Text) . "'";

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

      //*** Imprime a Nota Fiscal ***

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

      //*** Limpa os Campos para o Proximo Faturamento ***

      $this->limpa_campos();

      //*** Fecha a Janela ***

      redirect('nf_emissao_srv.php');
   }

   public function imprime_programada()
   {
      if($this->hd_nota_fiscal_imprime_observacao_nota->Value <> 1)
      {
         $this->mgt_nota_fiscal_observacao_nota->Text = '';
      }

      //*** Seleciona a Venda Programada ***
      $Comando_SQL = "select *,date_format(mgt_programada_data_emissao, '%d/%m/%Y') AS mgt_programada_data_emissao,date_format(mgt_programada_data, '%d/%m/%Y') AS mgt_programada_data,date_format(mgt_programada_data_entrega, '%d/%m/%Y') AS mgt_programada_data_entrega from mgt_programadas where mgt_programada_finalidade = 'SRV' And mgt_programada_numero = " . trim($this->mgt_nota_fiscal_numero->Text);

      GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
      GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
      {
         $this->MSG_Erro->Caption = 'Este Numero de Venda Programada ja existe! Por favor, informe o Numero correto.';

         $this->confirmacao->Top = 825;
         $this->confirmacao->IsVisible = false;
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
         $Comando_SQL .= "'" . "Rodoviario" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_produtos->Text . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
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

         $Comando_SQL .= "'" . "N" . "', ";
         $Comando_SQL .= "'" . "Cliente" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_aliquota_icms->Text . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'N', ";
         $Comando_SQL .= "'N', ";
         $Comando_SQL .= "'N', ";

         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data->Text)) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_entrega->Text)) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao->Text)) . "', ";
         $Comando_SQL .= "'" . "" . "', ";
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
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_icms->Text . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . $this->mgt_nota_fiscal_valor_produtos->Text . "', ";
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
         $Comando_SQL .= "'" . $this->hd_nota_fiscal_descricao_condicao_pgto->Value . "')";

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
               $Comando_SQL .= "'" . trim($this->mgt_nota_fiscal_numero->Text) . "', ";
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
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo']) . "',";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_referencia']) . "',";
                  $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_descricao']) . "',";

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
         $Comando_SQL = "select *,date_format(mgt_programada_data_emissao, '%d/%m/%Y') AS mgt_programada_data_emissao,date_format(mgt_programada_data, '%d/%m/%Y') AS mgt_programada_data,date_format(mgt_programada_data_entrega, '%d/%m/%Y') AS mgt_programada_data_entrega from mgt_programadas where mgt_programada_finalidade = 'SRV' And mgt_programada_numero = " . trim($this->mgt_nota_fiscal_numero->Text);

         GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
         GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

         //*** Seleciona os Produtos da Venda Programada ***
         $Comando_SQL = "select * from mgt_programadas_produtos where mgt_programada_produto_finalidade = 'SRV' And mgt_programada_produto_numero_nota = " . trim($this->mgt_nota_fiscal_numero->Text) . " Order By mgt_programada_produto_numero";

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

         $Comando_SQL = "update mgt_faturamentos_srv set ";
         $Comando_SQL .= "mgt_faturamento_srv_status = 'Faturado' ";
         $Comando_SQL .= "Where mgt_faturamento_srv_numero = '" . trim($this->mgt_nota_fiscal_faturamento->Text) . "'";

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

         //*** Limpa os Campos para o Proximo Faturamento ***

         $this->limpa_campos();

         //*** Fecha a Janela ***

         echo "<script language=\"JavaScript\">";
         echo "window.open('nf_emissao_srv_prg.php?mgt_programada_numero=" . trim(GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero']) . "','nf_emissao_nota_prg','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo 'window.location="nf_emissao_srv.php";';
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

      document.nfemissaosrvimp.hd_nota_fiscal_descricao_condicao_pgto.value = document.nfemissaosrvimp.mgt_nota_fiscal_descricao_condicao_pgto[document.nfemissaosrvimp.mgt_nota_fiscal_descricao_condicao_pgto.selectedIndex].value;

<?php

   }


   function mgt_nota_fiscal_descricao_condicao_pgtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_1.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cfop.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_vlr_12JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_12;
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_11;
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_10;
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_9;
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_8;
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_7;
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_6;
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_5;
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_4;
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_3;
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_2;
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_1;
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_12
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_11
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_10
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_9
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_8
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_7
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_6
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_5
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_4
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_3
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_2
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_1
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_12
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaosrvimp.mgt_nota_fiscal_dup_forma_12.value = '';
   document.nfemissaosrvimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_11JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_11
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaosrvimp.mgt_nota_fiscal_dup_forma_11.value = '';
   document.nfemissaosrvimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_10JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_10
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaosrvimp.mgt_nota_fiscal_dup_forma_10.value = '';
   document.nfemissaosrvimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_9JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_9
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaosrvimp.mgt_nota_fiscal_dup_forma_9.value = '';
   document.nfemissaosrvimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_8JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_8
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaosrvimp.mgt_nota_fiscal_dup_forma_8.value = '';
   document.nfemissaosrvimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_7JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_7
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaosrvimp.mgt_nota_fiscal_dup_forma_7.value = '';
   document.nfemissaosrvimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_6JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_6
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaosrvimp.mgt_nota_fiscal_dup_forma_6.value = '';
   document.nfemissaosrvimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_5JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_5
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaosrvimp.mgt_nota_fiscal_dup_forma_5.value = '';
   document.nfemissaosrvimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_4JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_4
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaosrvimp.mgt_nota_fiscal_dup_forma_4.value = '';
   document.nfemissaosrvimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_3JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_3
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaosrvimp.mgt_nota_fiscal_dup_forma_3.value = '';
   document.nfemissaosrvimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_2
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaosrvimp.mgt_nota_fiscal_dup_forma_2.value = '';
   document.nfemissaosrvimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_cliente_condicao_pgto_1JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_1
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   document.nfemissaosrvimp.mgt_nota_fiscal_dup_forma_1.value = '';
   document.nfemissaosrvimp.opcao_vista.value = '';

   //*** FINAL - So Numero ***

<?php

   }

   function mgt_nota_fiscal_data_emissaoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_data_emissao
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

   function mgt_nota_fiscal_imprime_observacao_notaJSClick($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if(document.nfemissaosrvimp.hd_nota_fiscal_imprime_observacao_nota.value == 0)
   {
      document.nfemissaosrvimp.hd_nota_fiscal_imprime_observacao_nota.value = 1;
   }
   else
   {
      document.nfemissaosrvimp.hd_nota_fiscal_imprime_observacao_nota.value = 0;
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
            $this->mgt_nota_fiscal_aliquota_icms->Text = '0';
            $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_dentro'];
            $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_dentro_2'];
            $this->hd_cfop_st->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_st'];
            $this->hd_cfop_cst->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cst'];
            $this->hd_cfop_cst_natureza->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cst_natureza'];
            $this->mgt_nota_fiscal_observacao_adicional_3->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_informacoes_complementares'];
         }
         elseif((trim($this->mgt_nota_fiscal_estado->Text) == 'RS')or(trim($this->mgt_nota_fiscal_estado->Text) == 'PR')or(trim($this->mgt_nota_fiscal_estado->Text) == 'SC')or(trim($this->mgt_nota_fiscal_estado->Text) == 'RJ')or(trim($this->mgt_nota_fiscal_estado->Text) == 'MG'))
         {
            $this->mgt_nota_fiscal_aliquota_icms->Text = '0';
            $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_fora'];
            $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_codigo_fora_2'];
            $this->hd_cfop_st->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_st'];
            $this->hd_cfop_cst->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cst'];
            $this->hd_cfop_cst_natureza->Value = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_cst_natureza'];
            $this->mgt_nota_fiscal_observacao_adicional_3->Text = GetConexaoPrincipal()->SQL_MGT_CFOP->Fields['mgt_cfop_informacoes_complementares'];
         }
         else
         {
            $this->mgt_nota_fiscal_aliquota_icms->Text = '0';
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
   }

   function mgt_nota_fiscal_faturamentoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_numero.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_codigo.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_nome.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_razao_social.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_inscricao_estadual.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_inscricao_municipal.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_complemento.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_bairro.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cidade.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_estado.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cep.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_pais.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_fone.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_fax.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_endereco_entrega.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_complemento_entrega.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_bairro_entrega.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cidade_entrega.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_estado_entrega.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cep_entrega.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_pais_entrega.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_fone_entrega.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_fax_entrega.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_endereco_cobranca.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_complemento_cobranca.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_bairro_cobranca.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cidade_cobranca.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_estado_cobranca.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cep_cobranca.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_pais_cobranca.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_fone_cobranca.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_fax_cobranca.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_ddd.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_fone_comercial.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_fone_celular.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_fone_fax.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_email.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_site.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_natureza_operacao_imp.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_data_emissao.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_numero.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_desconto.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cfop_2.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_observacao_nota.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_desconto.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_data.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_data_entrega.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_ordem_compra.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_natureza_operacao.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_observacao_faturamento.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_representante.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_1.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_nro_1.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_1.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_1.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_2.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_nro_2.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_2.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_2.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_3.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_nro_3.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_3.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_3.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_4.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_nro_4.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_4.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_4.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_5.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_nro_5.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_5.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_5.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_6.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_nro_6.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_6.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_6.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_7.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_nro_7.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_7.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_7.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_8.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_nro_8.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_8.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_8.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_9.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_nro_9.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_9.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_9.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_10.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_nro_10.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_10.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_10.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_11.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_nro_11.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_11.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_11.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_cliente_condicao_pgto_12.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_nro_12.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_dt_vcto_12.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_dup_vlr_12.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_observacao_adicional_2.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_observacao_adicional_3.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_observacao_adicional_4.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_observacao_adicional_5.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_observacao_adicional_6.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_observacao_adicional_7.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_observacao_adicional_8.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_observacao_adicional_9.focus();
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
     document.nfemissaosrvimp.mgt_nota_fiscal_observacao_adicional_10.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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
     document.nfemissaosrvimp.bt_imprimir.focus();
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

      $this->mgt_nota_fiscal_ordem_compra->Text = '';
      $this->mgt_nota_fiscal_observacao_nota->Text = '';
      $this->mgt_nota_fiscal_observacao_faturamento->Text = '';
      $this->mgt_nota_fiscal_imprime_observacao_nota->Checked = true;
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

      //*** Calculo dos Impostos ***

      $this->mgt_nota_fiscal_aliquota_icms->Text = '0';
      $this->mgt_nota_fiscal_valor_icms->Text = '0.00';
      $this->mgt_nota_fiscal_valor_produtos->Text = '0.00';
      $this->mgt_nota_fiscal_valor_total->Text = '0.00';

      //*** Fecha a Tela de Confirmacao ***
      $this->confirmacao->Top = 825;
      $this->confirmacao->IsVisible = false;
   }

   function mgt_nota_fiscal_cfop_2JSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cfop_2
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_cfop
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

   var campo = document.nfemissaosrvimp.mgt_nota_fiscal_numero
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
      require_once("includes/rotinas_gerais.inc.php");
      require_once("includes/tabelas_ibge.fnc.php");
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      $this->confirmacao->Top = 825;
      $this->confirmacao->IsVisible = false;

      if(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == 'Venda Programada')
      {
         $this->imprime_programada();
      }
      else
      {
         if($this->hd_nota_fiscal_nao_imprimir->Value == 0)
         {
            //*** Seleciona a Nota Fiscal ***
            $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao,date_format(mgt_nota_fiscal_data, '%d/%m/%Y') AS mgt_nota_fiscal_data,date_format(mgt_nota_fiscal_data_entrega, '%d/%m/%Y') AS mgt_nota_fiscal_data_entrega from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = 'SRV' And mgt_nota_fiscal_numero = " . trim($this->mgt_nota_fiscal_numero->Text);

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
            {
               $this->MSG_Erro->Caption = 'Este Numero de Nota Fiscal ja existe! Por favor, informe o Numero correto.';

               $this->confirmacao->Top = 825;
               $this->confirmacao->IsVisible = false;
            }
            else
            {
               //*** Gera a Nota Fiscal Eletronica ***
               $this->confirmacao->Top = 825;
               $this->confirmacao->IsVisible = false;

               if($this->hd_apenas_registra->Value == 0)
               {
                  //*** Impressao Comum da Nota Fiscal em Matricial ***
                  $this->imprime_nota_fiscal();
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
            //*** Gera a Nota Fiscal Eletronica ***
            $this->confirmacao->Top = 825;
            $this->confirmacao->IsVisible = false;

            //*** Impressao Comum da Nota Fiscal em Matricial ***
            $this->imprime_nota_fiscal();
         }
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 825;
      $this->confirmacao->IsVisible = false;
   }

   public function carrega_condicao_pagamento()
   {
      $mgt_numero_nfe = $this->mgt_nota_fiscal_numero->Text;
      $valor_total = $this->mgt_nota_fiscal_valor_total->Text;
      $valor_ipi_parcela = 0;
      $valor_icms_substituicao_parcela = 0;

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

      if((trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == 'Nota Fiscal')Or(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == ''))
      {
         if((GetConexaoPrincipal()->SQL_MGT_Numero_Nota->EOF) != 1)
         {
            $this->mgt_nota_fiscal_numero->Text = (GetConexaoPrincipal()->SQL_MGT_Numero_Nota->Fields['mgt_numero_nota_anterior_numero_srv'] + 1);
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

         //*** INICIO - Carrega os Calculos dos Impostos ***

         $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_valor_pedido'];
         $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_valor_total'];

         //*** FINAL - Carrega os Calculos dos Impostos ***

         $cfop_1 = '';
         $cfop_2 = '';
         $situacao_tributaria = '';
         $base_icms_substituicao = 0;
         $base_icms_substituicao_sem_ipi = 0;
         $vlr_total_produto_substituicao = 0;

         $this->obtem_cfop();

         if($this->mgt_nota_fiscal_cfop->Text > 5000)
         {
            if($consumidor_final == 'S')
            {
               $this->mgt_nota_fiscal_aliquota_icms->Text = "0";
            }
         }

         $this->mgt_nota_fiscal_valor_icms->Text = number_format((($this->mgt_nota_fiscal_valor_produtos->Text * $this->mgt_nota_fiscal_aliquota_icms->Text) / 100), "2", ".", "");

         //*** Verifica a Situacao Tributaria ***

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

         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->First();

         if((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->EOF) != 1)
            {
               $posicao_legenda = array_search(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_classificacao_fiscal']) . '-' . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_ncm']), $legenda_classificacao);

               if(trim($posicao_legenda) == '')
               {
                  array_push($legenda_classificacao, trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_classificacao_fiscal']) . '-' . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_ncm']));
               }

               $vlr_produto_substituicao = 0;
               $iva = 0;
               $situacao_tributaria = trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_situacao_tributaria']);

               //*** Seleciona o IVA para verificar se o Produto se Enquadra ***

               $Comando_SQL = "select * from mgt_ivas";
               $Comando_SQL .= " where ";
               $Comando_SQL .= "mgt_iva_estado = '" . trim($this->mgt_nota_fiscal_estado->Text) . "' and ";
               $Comando_SQL .= "mgt_iva_ncm = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_ncm']) . "'";

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
                  $vlr_produto_substituicao = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_total'] + GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_ipi'];
                  $vlr_produto_substituicao = (($vlr_produto_substituicao * $iva) / 100);

                  $vlr_total_produto_substituicao = $vlr_total_produto_substituicao + $vlr_produto_substituicao;
                  $base_icms_substituicao = $base_icms_substituicao + (GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_total'] + GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_ipi']);
                  $base_icms_substituicao_sem_ipi = $base_icms_substituicao_sem_ipi + GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_valor_total'];

                  //*** Atualiza a Situacao Tributaria do Produto ***

                  $Comando_SQL = "update mgt_faturamentos_produtos_srv set ";
                  $Comando_SQL .= "mgt_faturamento_produto_srv_situacao_tributaria = '" . $situacao_tributaria . "' ";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_faturamento_produto_srv_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_numero']) . "' and ";
                  $Comando_SQL .= "mgt_faturamento_produto_srv_numero_pedido = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_numero_pedido']) . "' and ";
                  $Comando_SQL .= "mgt_faturamento_produto_srv_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Fields['mgt_faturamento_produto_srv_codigo']) . "'";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }

               GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Next();
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
            }
            else
            {
               $aliquota_interna = trim($this->mgt_nota_fiscal_aliquota_icms->Text);
            }

            $this->mgt_nota_fiscal_valor_icms->Text = number_format((($this->mgt_nota_fiscal_valor_produtos->Text * $this->mgt_nota_fiscal_aliquota_icms->Text) / 100), "2", ".", "");

            $base_icms_substituicao = $base_icms_substituicao + $vlr_total_produto_substituicao;

            $this->mgt_nota_fiscal_valor_total->Text = number_format(($this->mgt_nota_fiscal_valor_produtos->Text), "2", ".", "");
         }

         //*** Efetua o Carregamento dos Produtos do Faturamento ***
         $aliquota_desconto = 0;
         $aliquota_desconto = trim($this->mgt_nota_fiscal_cliente_desconto->Text);

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
         $Comando_SQL .= "where mgt_faturamento_produto_srv_numero_pedido = " . trim($this->mgt_nota_fiscal_faturamento->Text) . " order by mgt_faturamento_produto_srv_numero";

         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Close();
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Faturamentos_Produtos_Srv->Open();

         $this->carrega_condicao_pagamento();
      }
   }

   function nfemissaosrvimpCreate($sender, $params)
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

      //*** Efetua o Carregamento Restante ***

      $mgt_nota_fiscal_faturamento = $_REQUEST['mgt_nota_fiscal_faturamento'];

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

      //*** Continua o Carregamento Restante ***

      $this->mgt_nota_fiscal_faturamento->Text = $mgt_nota_fiscal_faturamento;
      $this->mgt_nota_fiscal_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_numero'];
      $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_codigo'];
      $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_nome'];
      $this->hd_numero_pedido->Value = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_numero_pedido'];

      if(trim($this->hd_numero_pedido->Value) == '')
      {
         $this->hd_numero_pedido->Value = '0';
      }

      //*** Efetua o Carregamento do Cliente ou Fornecedor ***

      if(trim(GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_tipo']) == "F")
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
      }

      //*** Demais Informacoes ***
      $this->mgt_nota_fiscal_cliente_desconto->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_desconto'];
      $this->mgt_nota_fiscal_data->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_data'];
      $this->mgt_nota_fiscal_data_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_data_entrega'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_1->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_1'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_2->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_2'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_3->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_3'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_4->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_4'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_5->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_5'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_6->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_6'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_7->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_7'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_8->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_8'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_9->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_9'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_10->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_10'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_11->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_11'];
      $this->mgt_nota_fiscal_cliente_condicao_pgto_12->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_condicao_pgto_12'];
      $this->mgt_nota_fiscal_observacao_nota->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_observacao'];
      $this->mgt_nota_fiscal_ordem_compra->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_ordem_compra'];
      $this->mgt_nota_fiscal_tipo_faturamento->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_cliente_tipo_faturamento'];

      $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_valor_pedido'];
      $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Faturamentos_Srv->Fields['mgt_faturamento_srv_valor_total'];

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

      $this->carrega_natureza_operacao();
      $this->carrega_tipo_faturamento();

      $this->MSG_Erro->Caption = "";
   }

   function bt_fecharClick($sender, $params)
   {
      //*** Limpa os Campos para o Proximo Faturamento ***

      $this->limpa_campos();

      redirect('nf_emissao_srv.php');
   }

   function bt_imprimirClick($sender, $params)
   {
      if(trim($this->mgt_nota_fiscal_natureza_operacao->ItemIndex) != '--- SELECIONE A NATUREZA DE OPERACAO ---')
      {
         $this->msg_confirmacao->Caption = '<center><b>Nota Fiscal de Servicos</b></center>Voce deseja realmente imprimir a Nota Fiscal de Servicos? Caso afirmativo, posicione a impressora e clique em SIM<br><font color=#FF0000><b>Obs.: Clique somente uma vez no botao escolhido e aguarde a proxima tela.</b></font>';

         $this->confirmacao->Top = 200;
         $this->confirmacao->IsVisible = true;
      }
      else
      {
         $this->MSG_Erro->Caption = 'Por favor, selecione a Natureza de Operacao.';
      }
   }

   function nfemissaosrvimpJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfemissaosrvimp;

//Creates the form
$nfemissaosrvimp = new nfemissaosrvimp($application);

//Read from resource file
$nfemissaosrvimp->loadResource(__FILE__);

//Shows the form
$nfemissaosrvimp->show();

?>