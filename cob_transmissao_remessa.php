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
use_unit("dbgrids.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class cobtransmissaoremessa extends Page
{
   public $mgt_nota_fiscal_numero_escolhido = null;
   public $registros_notas = null;
   public $GroupBox2 = null;
   public $GroupBox1 = null;
   public $mgt_nota_fiscal_numero = null;
   public $Label13 = null;
   public $bt_procurar = null;
   public $Label12 = null;
   public $mgt_nota_fiscal_data_fim = null;
   public $mgt_nota_fiscal_data_ini = null;
   public $Label11 = null;
   public $mgt_banco_conta_dv = null;
   public $Label10 = null;
   public $mgt_banco_conta = null;
   public $Label9 = null;
   public $mgt_banco_agencia_dv = null;
   public $Label4 = null;
   public $mgt_banco_agencia = null;
   public $Label5 = null;
   public $mgt_banco_cnab = null;
   public $bt_gerar_remessa = null;
   public $mgt_banco_convenio = null;
   public $Label3 = null;
   public $mgt_banco_codigo = null;
   public $mgt_banco_descricao = null;
   public $MSG_Erro = null;
   public $Label1 = null;
   public $GroupBox3 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Button1 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $GroupBox4 = null;
   public $Estilo_Pagina = null;
   public $registros = null;
   public $area_sistema = null;
   public $Label2 = null;
   function registros_notasJSRowChanged($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado ***

      if( document.cobtransmissaoremessa.mgt_nota_fiscal_numero_escolhido.value == "" )
      {
         document.cobtransmissaoremessa.mgt_nota_fiscal_numero_escolhido.value = registros_notas.getTableModel().getValue(0, registros_notas.getFocusedRow());
      }
      else
      {
         document.cobtransmissaoremessa.mgt_nota_fiscal_numero_escolhido.value = document.cobtransmissaoremessa.mgt_nota_fiscal_numero_escolhido.value + "," + registros_notas.getTableModel().getValue(0, registros_notas.getFocusedRow());
      }

   <?php

   }




   public function carrega_transmissao()
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      $this->MSG_Erro->Caption = '';

      if(trim($this->mgt_nota_fiscal_numero->Text) != '')
      {
         //*** Prepara o Select das Informacoes ***

         $Comando_SQL = "Select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao from mgt_notas_fiscais Where ";
         $Comando_SQL .= "mgt_nota_fiscal_numero ='" . trim($this->mgt_nota_fiscal_numero->Text) . "' and ";
         $Comando_SQL .= "mgt_nota_fiscal_tipo_nota ='1'";
         $Comando_SQL .= "Order By mgt_nota_fiscal_numero";

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();
      }
      else
      {
         if(trim($this->mgt_nota_fiscal_data_ini->Text) == '')
         {
            $this->MSG_Erro->Caption = 'Antes de prosseguir favor preencher o campo Data inicial...';
         }
         elseif(trim($this->mgt_nota_fiscal_data_fim->Text) == '')
         {
            $this->MSG_Erro->Caption = 'Antes de prosseguir favor preencher o campo Data final...';
         }
         elseif(strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text))) > strtotime(inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text))))
         {
            $this->MSG_Erro->Caption = 'Antes de prosseguir favor Verificar as datas Data Final menor que Data Inicial...';
         }
         else
         {
            //*** Prepara o Select das Informacoes ***

            $Comando_SQL = "select * from mgt_cfops_faturamento";

            GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Close();
            GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Open();

            if(trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) == '')
            {
               $Comando_SQL = "Select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao from mgt_notas_fiscais Where ";
               $Comando_SQL .= "(mgt_nota_fiscal_data_emissao >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "' and ";
               $Comando_SQL .= "mgt_nota_fiscal_data_emissao <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "') and ";
               $Comando_SQL .= "mgt_nota_fiscal_tipo_nota ='1'";
               $Comando_SQL .= "Order By mgt_nota_fiscal_numero";
            }
            else
            {
               $Comando_SQL = "Select *,date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao from mgt_notas_fiscais Where ";
               $Comando_SQL .= "(mgt_nota_fiscal_data_emissao >='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_ini->Text)) . "' and ";
               $Comando_SQL .= "mgt_nota_fiscal_data_emissao <='" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_fim->Text)) . "') and ";
               $Comando_SQL .= "mgt_nota_fiscal_cfop IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ") and ";
               $Comando_SQL .= "mgt_nota_fiscal_tipo_nota ='1'";
               $Comando_SQL .= "Order By mgt_nota_fiscal_numero";
            }

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();
         }
      }
   }

   function bt_procurarClick($sender, $params)
   {
      $this->carrega_transmissao();
   }

   function mgt_nota_fiscal_numeroJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero ***

      var campo = document.cobtransmissaoremessa.mgt_nota_fiscal_numero
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

   function mgt_nota_fiscal_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobtransmissaoremessa.bt_procurar.focus();
        return false;
      }

<?php

   }

   function mgt_nota_fiscal_data_fimJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobtransmissaoremessa.mgt_nota_fiscal_data_fim
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

   function mgt_nota_fiscal_data_fimJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
         document.cobtransmissaoremessa.mgt_nota_fiscal_numero.focus();
         return false;
      }

<?php

   }

   function mgt_nota_fiscal_data_iniJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Data ***

      var campo = document.cobtransmissaoremessa.mgt_nota_fiscal_data_ini
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

   function mgt_nota_fiscal_data_iniJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
         document.cobtransmissaoremessa.mgt_nota_fiscal_data_fim.focus();
         return false;
      }

<?php

   }

   function mgt_banco_conta_dvJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobtransmissaoremessa.bt_gerar_remessa.focus();
     return false;
   }

<?php

   }

   function mgt_banco_contaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobtransmissaoremessa.mgt_banco_conta_dv.focus();
     return false;
   }

<?php

   }

   function mgt_banco_agencia_dvJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobtransmissaoremessa.mgt_banco_conta.focus();
     return false;
   }

<?php

   }

   function mgt_banco_agenciaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cobtransmissaoremessa.mgt_banco_agencia_dv.focus();
     return false;
   }

<?php

   }

   function mgt_banco_cnabJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobtransmissaoremessa.mgt_nota_fiscal_numero_escolhido.focus();
        return false;
      }

<?php

   }

   function mgt_nota_fiscal_numero_escolhidoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Numero e Virgula ***

      var campo = document.cobtransmissaoremessa.mgt_nota_fiscal_numero_escolhido
      var digits="0123456789,"
      var campo_temp
      for (var i=0;i<campo.value.length;i++){
          campo_temp=campo.value.substring(i,i+1)
          if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
             break;
          }
      }

      //*** FINAL - So Numero e Virgula ***

<?php

   }

   function mgt_banco_convenioJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobtransmissaoremessa.mgt_nota_fiscal_numero_escolhido.focus();
        return false;
      }

<?php

   }

   function mgt_banco_descricaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobtransmissaoremessa.mgt_banco_convenio.focus();
        return false;
      }

<?php

   }

   function mgt_banco_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobtransmissaoremessa.mgt_banco_descricao.focus();
        return false;
      }

<?php

   }

   function mgt_nota_fiscal_numero_escolhidoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.cobtransmissaoremessa.bt_gerar_remessa.focus();
        return false;
      }

<?php

   }


   function bt_gerar_remessaClick($sender, $params)
   {
      require_once("includes/rotinas_gerais.inc.php");
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if((trim($this->mgt_banco_codigo->Text) != '')And(trim($this->mgt_nota_fiscal_numero_escolhido->Text) != '') )
      {
         $this->MSG_Erro->Caption = '';
      }

      if(trim($this->mgt_banco_codigo->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, selecione o Banco';
      }

      if(trim($this->mgt_nota_fiscal_numero_escolhido->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Nota Fiscal Inicial';
      }

      if(trim($this->MSG_Erro->Caption) == '')
      {
         $Comando_SQL = "select * from mgt_notas_fiscais where mgt_nota_fiscal_numero IN(" . trim($this->mgt_nota_fiscal_numero_escolhido->Text) . ")";

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) == 1)
         {
            $this->MSG_Erro->Caption = "O Intervalo de Notas Nao Foi Encontrado.";
         }
         else
         {
            //*** Gera a Sequencia da Remessa ***

            $Comando_SQL = "insert into mgt_sequencia_remessa(";
            $Comando_SQL .= "mgt_sequencia_remessa_data , ";
            $Comando_SQL .= "mgt_sequencia_remessa_hora) ";
            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . trim(date("Y-m-d", time())) . "',";
            $Comando_SQL .= "'" . trim(date("H:i:s", time())) . "') ";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Obtem a Sequencia de Remessa ***

            $Comando_SQL = "select * from mgt_sequencia_remessa Order By mgt_sequencia_remessa_nro Desc";

            GetConexaoPrincipal()->SQL_MGT_Sequencia_Remessa->Close();
            GetConexaoPrincipal()->SQL_MGT_Sequencia_Remessa->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Sequencia_Remessa->Open();

            if(trim($this->mgt_banco_cnab->Text) == 'CNAB:240')
            {
               $sequencia_arquivo = 0;
               $nro_detalhe = 0;
               $qtde_registros_lote = 0;

               $nome_arquivo_remessa = 'remessa/RM' . completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Sequencia_Remessa->Fields['mgt_sequencia_remessa_nro'], 6) . '.REM';
               $arquivo_remessa = fopen($nome_arquivo_remessa, 'w');

               //*** Registro Header ***

               $qtde_registros_lote = $qtde_registros_lote + 1;

               $gravar_linha = '';
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_codigo->Text, 3) . '00000';
               $gravar_linha .= completa_espacos(' ', 9);
               $gravar_linha .= '2';
               $gravar_linha .= completa_zeros_retira_caracter($_SESSION['login_cnpj'], 14);
               $gravar_linha .= completa_espacos($this->mgt_banco_convenio->Text, 20);
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_agencia->Text, 5);
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_agencia_dv->Text, 1);
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_conta->Text, 12);
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_conta_dv->Text, 1);
               $gravar_linha .= '0';
               $gravar_linha .= completa_espacos(strtoupper($_SESSION['login_razao']), 30);
               $gravar_linha .= completa_espacos(strtoupper($this->mgt_banco_descricao->Text), 30);
               $gravar_linha .= completa_espacos(' ', 10);
               $gravar_linha .= '1';
               $gravar_linha .= trim(date("dmY", time()));
               $gravar_linha .= trim(date("His", time()));
               $gravar_linha .= completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Sequencia_Remessa->Fields['mgt_sequencia_remessa_nro'], 6);
               $gravar_linha .= '030';
               $gravar_linha .= '00000';
               $gravar_linha .= completa_espacos(' ', 20);
               $gravar_linha .= completa_espacos(' ', 20);
               $gravar_linha .= completa_espacos(' ', 14);
               $gravar_linha .= '000';
               $gravar_linha .= completa_espacos(' ', 12);
               fwrite($arquivo_remessa, $gravar_linha . chr(13) . chr(10));

               //*** Registro Trailer de Arquivo ***

               $qtde_registros_lote = $qtde_registros_lote + 1;

               $gravar_linha = '';
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_codigo->Text, 3);
               $gravar_linha .= '0001';
               $gravar_linha .= '1';
               $gravar_linha .= 'R';
               $gravar_linha .= '0100020 20';
               $gravar_linha .= completa_zeros_retira_caracter($_SESSION['login_cnpj'], 14);
               $gravar_linha .= completa_espacos($this->mgt_banco_convenio->Text, 20);
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_agencia->Text, 5);
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_agencia_dv->Text, 1);
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_conta->Text, 12);
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_conta_dv->Text, 1);
               $gravar_linha .= ' ';
               $gravar_linha .= completa_espacos(strtoupper($_SESSION['login_razao']), 30);
               $gravar_linha .= completa_espacos(' ', 80);
               $gravar_linha .= completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Sequencia_Remessa->Fields['mgt_sequencia_remessa_nro'], 8);
               $gravar_linha .= trim(date("dmY", time()));
               $gravar_linha .= '00000000';
               $gravar_linha .= completa_espacos(' ', 33);
               fwrite($arquivo_remessa, $gravar_linha . chr(13) . chr(10));

               while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
               {
                  for($ind = 1; $ind <= 12; $ind++)
                  {
                     if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_' . trim($ind)]) <> '')
                     {
                        //*** Gera o Registro P ***

                        $qtde_registros_lote = $qtde_registros_lote + 1;
                        $nro_detalhe = $nro_detalhe + 1;

                        $gravar_linha = '';
                        $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_codigo->Text, 3);
                        $gravar_linha .= '00013';
                        $gravar_linha .= completa_zeros_retira_caracter($nro_detalhe, 5);
                        $gravar_linha .= 'P 01';
                        $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_agencia->Text, 5);
                        $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_agencia_dv->Text, 1);
                        $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_conta->Text, 12);
                        $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_conta_dv->Text, 1);
                        $gravar_linha .= ' ';
                        $gravar_linha .= completa_espacos(' ', 9);
                        $gravar_linha .= completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_' . trim($ind)], 11);
                        $gravar_linha .= '71222';
                        $gravar_linha .= completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_' . trim($ind)], 11);
                        $gravar_linha .= completa_espacos(' ', 4);
                        $gravar_linha .= completa_zeros_retira_caracter(inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_' . trim($ind)]), 8);
                        $gravar_linha .= completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_' . trim($ind)], 15);
                        $gravar_linha .= '00000002N';
                        $gravar_linha .= trim(date("dmY", time()));
                        $gravar_linha .= '0';// Codigo do Juros Mora
                        $gravar_linha .= '00000000';// Data do Juros Mora
                        $gravar_linha .= '000000000000000';// Juros Mora por Dia
                        $gravar_linha .= '0';// Codigo do Desconto
                        $gravar_linha .= '00000000';// Data do Desconto
                        $gravar_linha .= '000000000000000';// Porcentagem do Desconto
                        $gravar_linha .= completa_zeros_retira_caracter('0', 30);
                        $gravar_linha .= completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_' . trim($ind)], 25);
                        $gravar_linha .= '1';// Codigo para Protesto
                        $gravar_linha .= '05';// Prazo para Protesto
                        $gravar_linha .= '2';// Codigo para Baixa
                        $gravar_linha .= '000';// Dias para Baixa
                        $gravar_linha .= '090000000000 ';
                        fwrite($arquivo_remessa, $gravar_linha . chr(13) . chr(10));

                        //*** Gera o Registro Q ***

                        $qtde_registros_lote = $qtde_registros_lote + 1;
                        $nro_detalhe = $nro_detalhe + 1;

                        $gravar_linha = '';
                        $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_codigo->Text, 3);
                        $gravar_linha .= '00013';
                        $gravar_linha .= completa_zeros_retira_caracter($nro_detalhe, 5);
                        $gravar_linha .= 'Q 01';

                        if(strlen(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo']) < 18)
                        {
                           $gravar_linha .= '1';
                        }
                        else
                        {
                           $gravar_linha .= '2';
                        }

                        $gravar_linha .= completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'], 15);

                        $gravar_linha .= completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'], 40);
                        $gravar_linha .= completa_espacos(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_endereco_cobranca']) . ' ' . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_complemento_cobranca']), 40);
                        $gravar_linha .= completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_bairro_cobranca'], 15);
                        $gravar_linha .= completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cep_cobranca'], 8);
                        $gravar_linha .= completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cidade_cobranca'], 15);
                        $gravar_linha .= completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_estado_cobranca'], 2);
                        $gravar_linha .= '0000000000000000';
                        $gravar_linha .= completa_espacos(' ', 40);
                        $gravar_linha .= '000';
                        $gravar_linha .= completa_espacos(' ', 20);
                        $gravar_linha .= completa_espacos(' ', 8);
                        fwrite($arquivo_remessa, $gravar_linha . chr(13) . chr(10));
                     }
                  }

                  GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
               }

               //*** Gera o Trailer do Lote ***

               $gravar_linha = '';
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_codigo->Text, 3);
               $gravar_linha .= '00015';
               $gravar_linha .= completa_espacos(' ', 9);
               $gravar_linha .= completa_zeros_retira_caracter($qtde_registros_lote, 6);
               $gravar_linha .= completa_zeros_retira_caracter('0', 92);
               $gravar_linha .= completa_espacos(' ', 125);
               fwrite($arquivo_remessa, $gravar_linha . chr(13) . chr(10));

               //*** Gera o Trailer do Header ***

               $qtde_registros_lote = $qtde_registros_lote + 2;

               $gravar_linha = '';
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_codigo->Text, 3);
               $gravar_linha .= '99999';
               $gravar_linha .= completa_espacos(' ', 9);
               $gravar_linha .= '000001';
               $gravar_linha .= completa_zeros_retira_caracter($qtde_registros_lote, 6);
               $gravar_linha .= '000001';
               $gravar_linha .= completa_espacos(' ', 205);
               fwrite($arquivo_remessa, $gravar_linha);

               fclose($arquivo_remessa);
            }
            else
            {
               $sequencia_arquivo = 0;
               $nro_detalhe = 0;
               $qtde_registros_lote = 0;

               $nome_arquivo_remessa = 'remessa/RM' . completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Sequencia_Remessa->Fields['mgt_sequencia_remessa_nro'], 6) . '.REM';
               $arquivo_remessa = fopen($nome_arquivo_remessa, 'w');

               //*** Registro Tipo 0 - Cabecalho do Arquivo ***

               $qtde_registros_lote = $qtde_registros_lote + 1;

               $gravar_linha = '';
               $gravar_linha .= '01REMESSA01COBRANCA       ';
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_agencia->Text, 4);
               $gravar_linha .= '00';
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_conta->Text, 5);
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_conta_dv->Text, 1);
               $gravar_linha .= completa_espacos(' ', 8);
               $gravar_linha .= completa_espacos(strtoupper($_SESSION['login_razao']), 30);
               $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_codigo->Text, 3);
               $gravar_linha .= completa_espacos(retira_acentos(strtoupper($this->mgt_banco_descricao->Text), 0), 15);
               $gravar_linha .= trim(date("dmy", time()));
               $gravar_linha .= completa_espacos(' ', 294);
               $gravar_linha .= completa_zeros_retira_caracter($qtde_registros_lote, 6);
               fwrite($arquivo_remessa, $gravar_linha . chr(13) . chr(10));

               while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
               {
                  for($ind = 1; $ind <= 12; $ind++)
                  {
                     if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_' . trim($ind)]) <> '')
                     {
                        //*** Registro Tipo 1 - Registro de Cobranca de Titulos ***

                        $qtde_registros_lote = $qtde_registros_lote + 1;
                        $nro_detalhe = $nro_detalhe + 1;

                        $gravar_linha = '';
                        $gravar_linha .= '1';
                        $gravar_linha .= '02';
                        $gravar_linha .= completa_zeros_retira_caracter($_SESSION['login_cnpj'], 14);
                        $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_agencia->Text, 4);
                        $gravar_linha .= '00';
                        $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_conta->Text, 5);
                        $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_conta_dv->Text, 1);
                        $gravar_linha .= completa_espacos(' ', 4);
                        $gravar_linha .= completa_espacos(' ', 4);
                        $gravar_linha .= completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_' . trim($ind)], 25);
                        $gravar_linha .= completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'], 8);
                        $gravar_linha .= completa_zeros_retira_caracter('0', 8);
                        $gravar_linha .= completa_zeros_retira_caracter('0', 5);
                        $gravar_linha .= completa_espacos('112', 3);
                        $gravar_linha .= completa_espacos(' ', 21);
                        $gravar_linha .= 'I';
                        $gravar_linha .= '01';
                        $gravar_linha .= completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'], 10);
                        $gravar_linha .= substr(completa_zeros_retira_caracter(inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_' . trim($ind)]), 8), 0, 4);
                        $gravar_linha .= substr(completa_zeros_retira_caracter(inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_' . trim($ind)]), 8), 6, 2);
                        $gravar_linha .= completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_' . trim($ind)], 13);
                        $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_codigo->Text, 3);
                        $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_agencia->Text, 5);
                        $gravar_linha .= '01';
                        $gravar_linha .= 'N';
                        $gravar_linha .= trim(date("dmy", time()));
                        $gravar_linha .= '01';
                        $gravar_linha .= '09';
                        $gravar_linha .= completa_zeros_retira_caracter(round(((((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_' . trim($ind)]) * 8) / 100)/30), 2), 13);//*** Valor Mora por Dia de Atraso ***
                        $gravar_linha .= completa_zeros_retira_caracter('0', 6);
                        $gravar_linha .= completa_zeros_retira_caracter('0', 13);
                        $gravar_linha .= completa_zeros_retira_caracter('0', 13);
                        $gravar_linha .= completa_zeros_retira_caracter('0', 13);

                        if(strlen(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo']) < 18)
                        {
                           $gravar_linha .= '01';
                        }
                        else
                        {
                           $gravar_linha .= '02';
                        }

                        $gravar_linha .= completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'], 14);
                        $gravar_linha .= completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'], 40);
                        $gravar_linha .= completa_espacos(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_endereco_cobranca']) . ' ' . trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_complemento_cobranca']), 40);
                        $gravar_linha .= completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_bairro_cobranca'], 12);
                        $gravar_linha .= completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cep_cobranca'], 8);
                        $gravar_linha .= completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cidade_cobranca'], 15);
                        $gravar_linha .= completa_espacos(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_estado_cobranca'], 2);
                        $gravar_linha .= completa_espacos(' ', 30);
                        $gravar_linha .= completa_espacos(' ', 4);
                        $gravar_linha .= substr(completa_zeros_retira_caracter(inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_' . trim($ind)]), 8), 0, 4);
                        $gravar_linha .= substr(completa_zeros_retira_caracter(inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_' . trim($ind)]), 8), 6, 2);
                        $gravar_linha .= '05';
                        $gravar_linha .= ' ';
                        $gravar_linha .= completa_zeros_retira_caracter($qtde_registros_lote, 6);
                        fwrite($arquivo_remessa, $gravar_linha . chr(13) . chr(10));

                        //*** Registro Tipo 2 - Registro de Cobranca de Titulos ***
                        /*
                        $qtde_registros_lote = $qtde_registros_lote + 1;
                        $nro_detalhe = $nro_detalhe + 1;

                        $gravar_linha = '';
                        $gravar_linha .= '2';
                        $gravar_linha .= '02';
                        $gravar_linha .= completa_zeros_retira_caracter($_SESSION['login_cnpj'], 14);
                        $gravar_linha .= completa_espacos($this->mgt_banco_convenio->Text, 16);
                        $gravar_linha .= completa_espacos(' ', 29);
                        $gravar_linha .= completa_zeros_retira_caracter(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'], 11);
                        $gravar_linha .= completa_espacos(' ', 33);
                        $gravar_linha .= '00';
                        $gravar_linha .= '00';
                        $gravar_linha .= completa_espacos(' ', 29);
                        $gravar_linha .= completa_zeros_retira_caracter($this->mgt_banco_codigo->Text, 3);
                        $gravar_linha .= completa_espacos('PROTESTAR APOS 5 DIAS DO VENCIMENTO', 40);
                        $gravar_linha .= completa_espacos(' ', 40);
                        $gravar_linha .= completa_espacos(' ', 40);
                        $gravar_linha .= completa_espacos(' ', 40);
                        $gravar_linha .= completa_espacos(' ', 40);
                        $gravar_linha .= completa_espacos(' ', 40);
                        $gravar_linha .= completa_espacos(' ', 12);
                        $gravar_linha .= completa_zeros_retira_caracter($qtde_registros_lote, 6);
                        fwrite($arquivo_remessa, $gravar_linha . chr(13) . chr(10));
                        */
                     }
                  }

                  GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
               }

               //*** Registro Tipo 9 - Registro de Cobranca de Titulos ***

               $qtde_registros_lote = $qtde_registros_lote + 1;

               $gravar_linha = '';
               $gravar_linha .= '9';
               $gravar_linha .= completa_espacos(' ', 393);
               $gravar_linha .= completa_zeros_retira_caracter($qtde_registros_lote, 6);
               fwrite($arquivo_remessa, $gravar_linha . chr(13) . chr(10));

               fclose($arquivo_remessa);
            }

            $Comando_SQL = "update mgt_notas_fiscais set ";
            $Comando_SQL .= "mgt_nota_fiscal_remessa_gerada = 'SIM' ";
            $Comando_SQL .= "where ";
            $Comando_SQL .= "mgt_nota_fiscal_numero IN(" . trim($this->mgt_nota_fiscal_numero_escolhido->Text) . ")";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            $this->carrega_transmissao();
            $this->mgt_nota_fiscal_numero_escolhido->Text = "";

            $listagem_msg = 'ATENCAO: O Arquivo de Remessa foi Gerado no Servidor, em: ' . trim($_SESSION['login_caminho_base']) . $nome_arquivo_remessa;
            echo "<script language=\"JavaScript\">alert('#1: " . $listagem_msg . "');</script>";
         }
      }
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function abrir_cadastroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutos.bt_cadastro.focus();
     return false;
   }

<?php

   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Add your javascript code here

   //*** Obtem o Registro Clicado ***

   document.cobtransmissaoremessa.mgt_banco_codigo.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
   document.cobtransmissaoremessa.mgt_banco_descricao.value = registros.getTableModel().getValue(1, registros.getFocusedRow());
   document.cobtransmissaoremessa.mgt_banco_convenio.value = registros.getTableModel().getValue(2, registros.getFocusedRow());
   document.cobtransmissaoremessa.mgt_banco_cnab.value = registros.getTableModel().getValue(3, registros.getFocusedRow());

   if( document.cobtransmissaoremessa.mgt_banco_cnab.value == 0 )
   {
      document.cobtransmissaoremessa.mgt_banco_cnab.value = 'CNAB:240';
   }
   else
   {
      document.cobtransmissaoremessa.mgt_banco_cnab.value = 'CNAB:400';
   }

   document.cobtransmissaoremessa.mgt_banco_agencia.value = registros.getTableModel().getValue(4, registros.getFocusedRow());
   document.cobtransmissaoremessa.mgt_banco_agencia_dv.value = registros.getTableModel().getValue(5, registros.getFocusedRow());
   document.cobtransmissaoremessa.mgt_banco_conta.value = registros.getTableModel().getValue(6, registros.getFocusedRow());
   document.cobtransmissaoremessa.mgt_banco_conta_dv.value = registros.getTableModel().getValue(7, registros.getFocusedRow());

<?php

   }

   function cobtransmissaoremessaCreate($sender, $params)
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

      $Comando_SQL = "select * from mgt_bancos order by mgt_banco_codigo";

      GetConexaoPrincipal()->SQL_MGT_Bancos->Close();
      GetConexaoPrincipal()->SQL_MGT_Bancos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Bancos->Open();

      //*** Carrega as Datas do Periodo ***

      $this->mgt_nota_fiscal_data_ini->Text = date("d/m/Y", time());
      $this->mgt_nota_fiscal_data_fim->Text = date("d/m/Y", time());

      //*** Limpa as Mensagens de Erro ***

      $this->MSG_Erro->Caption = '';
   }

   function cobtransmissaoremessaJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cobtransmissaoremessa;

//Creates the form
$cobtransmissaoremessa = new cobtransmissaoremessa($application);

//Read from resource file
$cobtransmissaoremessa->loadResource(__FILE__);

//Shows the form
$cobtransmissaoremessa->show();

?>