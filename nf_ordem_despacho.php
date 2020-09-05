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
class nfordemdespacho extends Page
{
   public $linha_volume = null;
   public $Label25 = null;
   public $mgt_nota_fiscal_transportadora = null;
   public $Label3 = null;
   public $bt_imprimir = null;
   public $linha_impressao = null;
   public $linha_docto = null;
   public $linha_5 = null;
   public $linha_4 = null;
   public $linha_3 = null;
   public $linha_2 = null;
   public $linha_1 = null;
   public $Label24 = null;
   public $Label23 = null;
   public $Label22 = null;
   public $Label21 = null;
   public $Label20 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $GroupBox5 = null;
   public $mgt_nota_fiscal_tipo_faturamento = null;
   public $Label26 = null;
   public $mgt_nota_fiscal_tipo_nota = null;
   public $Label15 = null;
   public $mgt_nota_fiscal_numero = null;
   public $mgt_nota_fiscal_valor_total = null;
   public $Label14 = null;
   public $mgt_nota_fiscal_valor_produtos = null;
   public $Label114 = null;
   public $mgt_nota_fiscal_valor_ipi = null;
   public $Label13 = null;
   public $mgt_nota_fiscal_valor_icms_sub = null;
   public $Label113 = null;
   public $mgt_nota_fiscal_outras_despesas = null;
   public $Label12 = null;
   public $mgt_nota_fiscal_base_icms_sub = null;
   public $Label112 = null;
   public $Label111 = null;
   public $mgt_nota_fiscal_valor_icms = null;
   public $Label115 = null;
   public $mgt_nota_fiscal_valor_seguro = null;
   public $mgt_nota_fiscal_valor_frete = null;
   public $Label11 = null;
   public $mgt_nota_fiscal_base_icms = null;
   public $Label110 = null;
   public $mgt_nota_fiscal_natureza_operacao = null;
   public $mgt_nota_fiscal_cfop_2 = null;
   public $mgt_nota_fiscal_cfop = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $GroupBox4 = null;
   public $Label84 = null;
   public $mgt_nota_fiscal_inscricao_municipal = null;
   public $mgt_nota_fiscal_inscricao_estadual = null;
   public $Label83 = null;
   public $mgt_nota_fiscal_razao_social = null;
   public $Label69 = null;
   public $mgt_nota_fiscal_cliente_nome = null;
   public $Label7 = null;
   public $mgt_nota_fiscal_cliente_codigo = null;
   public $Label6 = null;
   public $mgt_nota_fiscal_cliente_numero = null;
   public $Label5 = null;
   public $mgt_nota_fiscal_pedido = null;
   public $Label4 = null;
   public $mgt_nota_fiscal_faturamento = null;
   public $Label2 = null;
   public $GroupBox2 = null;
   public $bt_procurar = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label1 = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function linha_volumeJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.bt_imprimir.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_base_icms.focus();
     return false;
   }

   <?php

   }

   function bt_imprimirClick($sender, $params)
   {
      $_SESSION['imprime_linha_1'] = $this->linha_1->Text;
      $_SESSION['imprime_linha_2'] = $this->linha_2->Text;
      $_SESSION['imprime_linha_3'] = $this->linha_3->Text;
      $_SESSION['imprime_linha_4'] = $this->linha_4->Text;
      $_SESSION['imprime_linha_5'] = $this->linha_5->Text;
      $_SESSION['imprime_linha_docto'] = $this->linha_docto->Text;
      $_SESSION['imprime_linha_volume'] = $this->linha_volume->Text;
      $_SESSION['imprime_linha_impressao'] = $this->linha_impressao->ItemIndex;
      $_SESSION['imprime_linha_transportadora'] = $this->mgt_nota_fiscal_transportadora->Text;

      //*** Limpa os Campos para a Proxima Etiqueta ***

      $this->mgt_nota_fiscal_tipo_nota->Text = '';
      $this->mgt_nota_fiscal_faturamento->Text = '';
      $this->mgt_nota_fiscal_pedido->Text = '';
      $this->mgt_nota_fiscal_cliente_numero->Text = '';
      $this->mgt_nota_fiscal_cliente_codigo->Text = '';
      $this->mgt_nota_fiscal_cliente_nome->Text = '';
      $this->mgt_nota_fiscal_razao_social->Text = '';
      $this->mgt_nota_fiscal_inscricao_estadual->Text = '';
      $this->mgt_nota_fiscal_inscricao_municipal->Text = '';
      $this->mgt_nota_fiscal_cfop->Text = '';
      $this->mgt_nota_fiscal_cfop_2->Text = '';
      $this->mgt_nota_fiscal_natureza_operacao->Text = '';
      $this->mgt_nota_fiscal_base_icms->Text = '0.00';
      $this->mgt_nota_fiscal_valor_seguro->Text = '0.00';
      $this->mgt_nota_fiscal_base_icms_sub->Text = '0.00';
      $this->mgt_nota_fiscal_valor_icms_sub->Text = '0.00';
      $this->mgt_nota_fiscal_valor_produtos->Text = '0.00';
      $this->mgt_nota_fiscal_valor_frete->Text = '0.00';
      $this->mgt_nota_fiscal_valor_icms->Text = '0.00';
      $this->mgt_nota_fiscal_outras_despesas->Text = '0.00';
      $this->mgt_nota_fiscal_valor_ipi->Text = '0.00';
      $this->mgt_nota_fiscal_valor_total->Text = '0.00';
      $this->mgt_nota_fiscal_transportadora->Text = '';

      $this->linha_1->Text = '';
      $this->linha_2->Text = '';
      $this->linha_3->Text = '';
      $this->linha_4->Text = '';
      $this->linha_5->Text = '';
      $this->linha_docto->Text = '';
      $this->linha_volume->Text = '';
      $this->linha_impressao->ItemIndex = '0';

      echo "<script language=\"JavaScript\">";
      echo "window.open('nf_ordem_despacho_imp.php','nf_ordem_despacho_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
      echo "</script>";
   }

   function linha_impressaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function linha_doctoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function linha_5JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.linha_docto.focus();
     return false;
   }

<?php

   }

   function linha_4JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.linha_5.focus();
     return false;
   }

<?php

   }

   function linha_3JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.linha_4.focus();
     return false;
   }

<?php

   }

   function linha_2JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.linha_3.focus();
     return false;
   }

<?php

   }

   function linha_1JSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.linha_2.focus();
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
     document.nfordemdespacho.bt_procurar.focus();
     return false;
   }

<?php

   }


   function bt_procurarClick($sender, $params)
   {
      $this->mgt_nota_fiscal_tipo_nota->Text = '';
      $this->mgt_nota_fiscal_faturamento->Text = '';
      $this->mgt_nota_fiscal_pedido->Text = '';
      $this->mgt_nota_fiscal_cliente_numero->Text = '';
      $this->mgt_nota_fiscal_cliente_codigo->Text = '';
      $this->mgt_nota_fiscal_cliente_nome->Text = '';
      $this->mgt_nota_fiscal_razao_social->Text = '';
      $this->mgt_nota_fiscal_inscricao_estadual->Text = '';
      $this->mgt_nota_fiscal_inscricao_municipal->Text = '';
      $this->mgt_nota_fiscal_cfop->Text = '';
      $this->mgt_nota_fiscal_cfop_2->Text = '';
      $this->mgt_nota_fiscal_natureza_operacao->Text = '';
      $this->mgt_nota_fiscal_base_icms->Text = '0.00';
      $this->mgt_nota_fiscal_valor_seguro->Text = '0.00';
      $this->mgt_nota_fiscal_base_icms_sub->Text = '0.00';
      $this->mgt_nota_fiscal_valor_icms_sub->Text = '0.00';
      $this->mgt_nota_fiscal_valor_produtos->Text = '0.00';
      $this->mgt_nota_fiscal_valor_frete->Text = '0.00';
      $this->mgt_nota_fiscal_valor_icms->Text = '0.00';
      $this->mgt_nota_fiscal_outras_despesas->Text = '0.00';
      $this->mgt_nota_fiscal_valor_ipi->Text = '0.00';
      $this->mgt_nota_fiscal_valor_total->Text = '0.00';
      $this->mgt_nota_fiscal_transportadora->Text = '';

      $this->linha_1->Text = '';
      $this->linha_2->Text = '';
      $this->linha_3->Text = '';
      $this->linha_4->Text = '';
      $this->linha_5->Text = '';
      $this->linha_docto->Text = '';
      $this->linha_volume->Text = '';
      $this->linha_impressao->ItemIndex = '0';

      if(trim($this->mgt_nota_fiscal_numero->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Numero.";
      }
      else
      {
         if(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Nota Fiscal (Produtos)")
         {
            $Comando_SQL = "select * from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = 'PRD' And mgt_nota_fiscal_numero = '" . trim($this->mgt_nota_fiscal_numero->Text) . "' order by mgt_nota_fiscal_numero";

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) == 1)
            {
               $this->MSG_Erro->Caption = "Esta Nota Fiscal nao foi encontrada.";
            }
            else
            {
               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_tipo_nota']) == '0')
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Entrada';
               }
               else
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Saida';
               }

               $this->mgt_nota_fiscal_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_faturamento'];
               $this->mgt_nota_fiscal_pedido->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_pedido'];
               $this->mgt_nota_fiscal_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_numero'];
               $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'];
               $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'];
               $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'];
               $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_estadual'];
               $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_municipal'];
               $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop'];
               $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop_2'];
               $this->mgt_nota_fiscal_natureza_operacao->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_natureza_operacao'];
               $this->mgt_nota_fiscal_base_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms'];
               $this->mgt_nota_fiscal_valor_seguro->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_seguro'];
               $this->mgt_nota_fiscal_base_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms_sub'];
               $this->mgt_nota_fiscal_valor_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms_sub'];
               $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_produtos'];
               $this->mgt_nota_fiscal_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_frete'];
               $this->mgt_nota_fiscal_valor_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms'];
               $this->mgt_nota_fiscal_outras_despesas->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_outras_despesas'];
               $this->mgt_nota_fiscal_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_ipi'];
               $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'];

               //*** Dados da Transportadora ***

               $Comando_SQL = "select * from mgt_transportadoras where mgt_transportadora_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora']) . "' order by mgt_transportadora_nome";

               GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
               GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

               if((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) != 1)
               {
                  $this->mgt_nota_fiscal_transportadora->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora'] . ' - ' . GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_razao_social'];
               }

               //*** Linhas de Impressao ***

               $this->linha_1->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'];
               $this->linha_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_endereco_entrega'] . ' ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_complemento_entrega'];
               $this->linha_3->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_bairro_entrega'];
               $this->linha_4->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cidade_entrega'] . ' - ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_estado_entrega'];
               $this->linha_5->Text = 'CEP: ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cep_entrega'];
               $this->linha_docto->Text = $this->mgt_nota_fiscal_numero->Text;
               $this->linha_volume->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_vol_numero'];
               $this->linha_impressao->ItemIndex = '0';

               $this->MSG_Erro->Caption = "";
            }
         }
         elseif(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Nota Fiscal (Servicos)")
         {
            $Comando_SQL = "select * from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = 'SRV' And mgt_nota_fiscal_numero = '" . trim($this->mgt_nota_fiscal_numero->Text) . "' order by mgt_nota_fiscal_numero";

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) == 1)
            {
               $this->MSG_Erro->Caption = "Esta Nota Fiscal nao foi encontrada.";
            }
            else
            {
               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_tipo_nota']) == '0')
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Entrada';
               }
               else
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Saida';
               }

               $this->mgt_nota_fiscal_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_faturamento'];
               $this->mgt_nota_fiscal_pedido->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_pedido'];
               $this->mgt_nota_fiscal_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_numero'];
               $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'];
               $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'];
               $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'];
               $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_estadual'];
               $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_municipal'];
               $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop'];
               $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop_2'];
               $this->mgt_nota_fiscal_natureza_operacao->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_natureza_operacao'];
               $this->mgt_nota_fiscal_base_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms'];
               $this->mgt_nota_fiscal_valor_seguro->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_seguro'];
               $this->mgt_nota_fiscal_base_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms_sub'];
               $this->mgt_nota_fiscal_valor_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms_sub'];
               $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_produtos'];
               $this->mgt_nota_fiscal_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_frete'];
               $this->mgt_nota_fiscal_valor_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms'];
               $this->mgt_nota_fiscal_outras_despesas->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_outras_despesas'];
               $this->mgt_nota_fiscal_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_ipi'];
               $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'];

               //*** Dados da Transportadora ***

               $Comando_SQL = "select * from mgt_transportadoras where mgt_transportadora_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora']) . "' order by mgt_transportadora_nome";

               GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
               GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

               if((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) != 1)
               {
                  $this->mgt_nota_fiscal_transportadora->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora'] . ' - ' . GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_razao_social'];
               }

               //*** Linhas de Impressao ***

               $this->linha_1->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'];
               $this->linha_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_endereco_entrega'] . ' ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_complemento_entrega'];
               $this->linha_3->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_bairro_entrega'];
               $this->linha_4->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cidade_entrega'] . ' - ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_estado_entrega'];
               $this->linha_5->Text = 'CEP: ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cep_entrega'];
               $this->linha_docto->Text = $this->mgt_nota_fiscal_numero->Text;
               $this->linha_volume->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_vol_numero'];
               $this->linha_impressao->ItemIndex = '0';

               $this->MSG_Erro->Caption = "";
            }
         }
         elseif(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Nao Vinculado a Nota Fiscal")
         {
            $Comando_SQL = "select * from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = 'NVL' And mgt_nota_fiscal_numero = '" . trim($this->mgt_nota_fiscal_numero->Text) . "' order by mgt_nota_fiscal_numero";

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) == 1)
            {
               $this->MSG_Erro->Caption = "Esta Nota Fiscal nao foi encontrada.";
            }
            else
            {
               if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_tipo_nota']) == '0')
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Entrada';
               }
               else
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Saida';
               }

               $this->mgt_nota_fiscal_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_faturamento'];
               $this->mgt_nota_fiscal_pedido->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_pedido'];
               $this->mgt_nota_fiscal_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_numero'];
               $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'];
               $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'];
               $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'];
               $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_estadual'];
               $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_inscricao_municipal'];
               $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop'];
               $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cfop_2'];
               $this->mgt_nota_fiscal_natureza_operacao->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_natureza_operacao'];
               $this->mgt_nota_fiscal_base_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms'];
               $this->mgt_nota_fiscal_valor_seguro->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_seguro'];
               $this->mgt_nota_fiscal_base_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_base_icms_sub'];
               $this->mgt_nota_fiscal_valor_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms_sub'];
               $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_produtos'];
               $this->mgt_nota_fiscal_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_frete'];
               $this->mgt_nota_fiscal_valor_icms->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_icms'];
               $this->mgt_nota_fiscal_outras_despesas->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_outras_despesas'];
               $this->mgt_nota_fiscal_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_ipi'];
               $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'];

               //*** Dados da Transportadora ***

               $Comando_SQL = "select * from mgt_transportadoras where mgt_transportadora_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora']) . "' order by mgt_transportadora_nome";

               GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
               GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

               if((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) != 1)
               {
                  $this->mgt_nota_fiscal_transportadora->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_transportadora'] . ' - ' . GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_razao_social'];
               }

               //*** Linhas de Impressao ***

               $this->linha_1->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'];
               $this->linha_2->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_endereco_entrega'] . ' ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_complemento_entrega'];
               $this->linha_3->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_bairro_entrega'];
               $this->linha_4->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cidade_entrega'] . ' - ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_estado_entrega'];
               $this->linha_5->Text = 'CEP: ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cep_entrega'];
               $this->linha_docto->Text = $this->mgt_nota_fiscal_numero->Text;
               $this->linha_volume->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_vol_numero'];
               $this->linha_impressao->ItemIndex = '0';

               $this->MSG_Erro->Caption = "";
            }
         }
         elseif(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Venda Programada (Produtos)")
         {
            $Comando_SQL = "select * from mgt_programadas where mgt_programada_finalidade = 'PRD' And mgt_programada_numero = '" . trim($this->mgt_nota_fiscal_numero->Text) . "' order by mgt_programada_numero";

            GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
            GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) == 1)
            {
               $this->MSG_Erro->Caption = "Esta Venda Programada nao foi encontrada.";
            }
            else
            {
               if(trim(GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_tipo_nota']) == '0')
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Entrada';
               }
               else
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Saida';
               }

               $this->mgt_nota_fiscal_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_faturamento'];
               $this->mgt_nota_fiscal_pedido->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_pedido'];
               $this->mgt_nota_fiscal_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_numero'];
               $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'];
               $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'];
               $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_razao_social'];
               $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_inscricao_estadual'];
               $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_inscricao_municipal'];
               $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cfop'];
               $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cfop_2'];
               $this->mgt_nota_fiscal_natureza_operacao->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_natureza_operacao'];
               $this->mgt_nota_fiscal_base_icms->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_base_icms'];
               $this->mgt_nota_fiscal_valor_seguro->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_seguro'];
               $this->mgt_nota_fiscal_base_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_base_icms_sub'];
               $this->mgt_nota_fiscal_valor_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_icms_sub'];
               $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_produtos'];
               $this->mgt_nota_fiscal_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_frete'];
               $this->mgt_nota_fiscal_valor_icms->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_icms'];
               $this->mgt_nota_fiscal_outras_despesas->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_outras_despesas'];
               $this->mgt_nota_fiscal_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_ipi'];
               $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_total'];

               //*** Dados da Transportadora ***

               $Comando_SQL = "select * from mgt_transportadoras where mgt_transportadora_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_transportadora']) . "' order by mgt_transportadora_nome";

               GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
               GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

               if((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) != 1)
               {
                  $this->mgt_nota_fiscal_transportadora->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_transportadora'] . ' - ' . GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_razao_social'];
               }

               //*** Linhas de Impressao ***

               $this->linha_1->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_razao_social'];
               $this->linha_2->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_endereco_entrega'] . ' ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_programada_complemento_entrega'];
               $this->linha_3->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_bairro_entrega'];
               $this->linha_4->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cidade_entrega'] . ' - ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_programada_estado_entrega'];
               $this->linha_5->Text = 'CEP: ' . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cep_entrega'];
               $this->linha_docto->Text = $this->mgt_programada_numero->Text;
               $this->linha_volume->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_programada_vol_numero'];
               $this->linha_impressao->ItemIndex = '0';

               $this->MSG_Erro->Caption = "";
            }
         }
         elseif(trim($this->mgt_nota_fiscal_tipo_faturamento->ItemIndex) == "Venda Programada (Servicos)")
         {
            $Comando_SQL = "select * from mgt_programadas where mgt_programada_finalidade = 'SRV' And mgt_programada_numero = '" . trim($this->mgt_nota_fiscal_numero->Text) . "' order by mgt_programada_numero";

            GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
            GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) == 1)
            {
               $this->MSG_Erro->Caption = "Esta Venda Programada nao foi encontrada.";
            }
            else
            {
               if(trim(GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_tipo_nota']) == '0')
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Entrada';
               }
               else
               {
                  $this->mgt_nota_fiscal_tipo_nota->Text = 'Saida';
               }

               $this->mgt_nota_fiscal_faturamento->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_faturamento'];
               $this->mgt_nota_fiscal_pedido->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_pedido'];
               $this->mgt_nota_fiscal_cliente_numero->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_numero'];
               $this->mgt_nota_fiscal_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'];
               $this->mgt_nota_fiscal_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'];
               $this->mgt_nota_fiscal_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_razao_social'];
               $this->mgt_nota_fiscal_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_inscricao_estadual'];
               $this->mgt_nota_fiscal_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_inscricao_municipal'];
               $this->mgt_nota_fiscal_cfop->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cfop'];
               $this->mgt_nota_fiscal_cfop_2->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cfop_2'];
               $this->mgt_nota_fiscal_natureza_operacao->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_natureza_operacao'];
               $this->mgt_nota_fiscal_base_icms->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_base_icms'];
               $this->mgt_nota_fiscal_valor_seguro->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_seguro'];
               $this->mgt_nota_fiscal_base_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_base_icms_sub'];
               $this->mgt_nota_fiscal_valor_icms_sub->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_icms_sub'];
               $this->mgt_nota_fiscal_valor_produtos->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_produtos'];
               $this->mgt_nota_fiscal_valor_frete->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_frete'];
               $this->mgt_nota_fiscal_valor_icms->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_icms'];
               $this->mgt_nota_fiscal_outras_despesas->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_outras_despesas'];
               $this->mgt_nota_fiscal_valor_ipi->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_ipi'];
               $this->mgt_nota_fiscal_valor_total->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_valor_total'];

               //*** Dados da Transportadora ***

               $Comando_SQL = "select * from mgt_transportadoras where mgt_transportadora_numero = '" . trim(GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_transportadora']) . "' order by mgt_transportadora_nome";

               GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
               GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

               if((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) != 1)
               {
                  $this->mgt_nota_fiscal_transportadora->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_transportadora'] . ' - ' . GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_razao_social'];
               }

               //*** Linhas de Impressao ***

               $this->linha_1->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_razao_social'];
               $this->linha_2->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_endereco_entrega'] . ' ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_programada_complemento_entrega'];
               $this->linha_3->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_bairro_entrega'];
               $this->linha_4->Text = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cidade_entrega'] . ' - ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_programada_estado_entrega'];
               $this->linha_5->Text = 'CEP: ' . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cep_entrega'];
               $this->linha_docto->Text = $this->mgt_programada_numero->Text;
               $this->linha_volume->Text = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_programada_vol_numero'];
               $this->linha_impressao->ItemIndex = '0';

               $this->MSG_Erro->Caption = "";
            }
         }
      }
   }

   function mgt_nota_fiscal_valor_totalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.bt_fechar.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_valor_total.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_valor_ipi.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_outras_despesas.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_valor_icms.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_valor_frete.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_valor_produtos.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_valor_icms_sub.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_base_icms_sub.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_valor_seguro.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_transportadora.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_natureza_operacao.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_cfop_2.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_pedidoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.mgt_nota_fiscal_cliente_numero.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_cfop.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_inscricao_municipal.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_inscricao_estadual.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_razao_social.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_cliente_nome.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_cliente_codigo.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_faturamentoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.mgt_nota_fiscal_pedido.focus();
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
     document.nfordemdespacho.mgt_nota_fiscal_numero.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_numeroJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.nfordemdespacho.mgt_nota_fiscal_numero
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


   function nfordemdespachoCreate($sender, $params)
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

      $this->MSG_Erro->Caption = "";
   }

   function mgt_banco_descricaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.bt_alterar.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_numeroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfordemdespacho.mgt_nota_fiscal_tipo_nota.focus();
     return false;
   }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
         redirect('frame_corpo.php');
   }


   function nfordemdespachoJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

<?php

   }

   function nfordemdespachoJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfordemdespacho;

//Creates the form
$nfordemdespacho = new nfordemdespacho($application);

//Read from resource file
$nfordemdespacho->loadResource(__FILE__);

//Shows the form
$nfordemdespacho->show();

?>