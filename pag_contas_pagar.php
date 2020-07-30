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
use_unit("comctrls.inc.php");
use_unit("styles.inc.php");
use_unit("dbgrids.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class pagcontaspagar extends Page
{
   public $Panel8 = null;
   public $saldos_contas = null;
   public $mgt_swap_valor_selecionadas = null;
   public $Label9 = null;
   public $mgt_swap_conta = null;
   public $Label25 = null;
   public $total_final = null;
   public $Panel7 = null;
   public $total_saldo = null;
   public $total_pago = null;
   public $total_pagar = null;
   public $total_recebido = null;
   public $Panel6 = null;
   public $Panel5 = null;
   public $Panel4 = null;
   public $Panel3 = null;
   public $Panel2 = null;
   public $Panel1 = null;
   public $GroupBox5 = null;
   public $bt_baixar_todas = null;
   public $Label24 = null;
   public $mgt_swap_selecionadas = null;
   public $fundo_baixa = null;
   public $bt_imprimir = null;
   public $mgt_fornecedor = null;
   public $Label7 = null;
   public $mgt_descricao = null;
   public $total_registros = null;
   public $Label8 = null;
   public $registros = null;
   public $fundo_grid = null;
   public $mgt_data_fim = null;
   public $mgt_data_ini = null;
   public $mgt_numero_docto = null;
   public $mgt_vlr_pagar = null;
   public $Label6 = null;
   public $Label23 = null;
   public $Label22 = null;
   public $mgt_status_procura = null;
   public $Label21 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label5 = null;
   public $Frame1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label1 = null;
   public $abrir_cadastro = null;
   public $bt_cadastro = null;
   public $bt_incluir = null;
   public $bt_fechar = null;
   public $bt_buscar = null;
   public $area_sistema = null;
   public $Label2 = null;
   public $GroupBox3 = null;
   public $GroupBox2 = null;
   public $GroupBox1 = null;
    public $Busca_Efetuada = null;
   function mgt_swap_valor_selecionadasJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontaspagar.mgt_swap_conta.focus();
     return false;
   }

      <?php

   }

   function mgt_swap_contaJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontaspagar.bt_baixar_todas.focus();
     return false;
   }

      <?php

   }

   function bt_imprimirClick($sender, $params)
   {
      echo "<script language=\"JavaScript\">";
      echo "window.open('pag_contas_pagar_rel.php','pag_contas_pagar_rel','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
      echo "</script>";
   }

   function bt_baixar_todasClick($sender, $params)
   {
      //*** Efetua as Baixas Selecionadas ***

      $Comando_SQL = "Update mgt_contas_pagar Set ";
      $Comando_SQL .= "mgt_conta_pagar_data_pagto = '" . date("Y-m-d", time()) . "', ";
      $Comando_SQL .= "mgt_conta_pagar_conta = '" . trim($this->mgt_swap_conta->ItemIndex) . "', ";
      $Comando_SQL .= "mgt_conta_pagar_status = 'Pago' ";
      $Comando_SQL .= "where mgt_conta_pagar_nro IN (" . substr(trim($this->mgt_swap_selecionadas->Text), 0, -1) . ") ";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Registra o motivo da alteracao do registro. ***

      $Comando_SQL = "insert into mgt_operacoes_cadastros(";
      $Comando_SQL .= "mgt_operacao_cadastro_data, ";
      $Comando_SQL .= "mgt_operacao_cadastro_hora, ";
      $Comando_SQL .= "mgt_operacao_cadastro_usuario, ";
      $Comando_SQL .= "mgt_operacao_cadastro_area, ";
      $Comando_SQL .= "mgt_operacao_cadastro_operacao, ";
      $Comando_SQL .= "mgt_operacao_cadastro_codigo_chave, ";
      $Comando_SQL .= "mgt_operacao_cadastro_motivo) ";
      $Comando_SQL .= "values(";
      $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
      $Comando_SQL .= "'" . date("H:i:s", time()) . "',";
      $Comando_SQL .= "'" . trim($_SESSION['login_usuario']) . "',";
      $Comando_SQL .= "'" . trim($this->area_sistema->Caption) . "',";
      $Comando_SQL .= "'" . 'Baixa Contas a Pagar' . "',";
      $Comando_SQL .= "'" . substr(trim($this->mgt_swap_selecionadas->Text), 0, -1) . "',";
      $Comando_SQL .= "'" . 'Baixa Efetuada pelo Usuario.' . "')";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Limpa os Campos para a Proxima Baixa ***

      $this->MSG_Erro->Caption = "As contas a pagar selecionadas foram baixadas com sucesso!!!";
      $this->mgt_swap_selecionadas->Text = "";

      $this->busca_contas_pagar();
   }

   function mgt_swap_selecionadasJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Intervalo ***

   var campo = document.pagcontaspagar.mgt_swap_selecionadas
   var digits="0123456789,"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Intervalo ***

      <?php

   }

   function mgt_swap_selecionadasJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontaspagar.mgt_swap_conta.focus();
     return false;
   }

      <?php

   }

   function mgt_fornecedorJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontaspagar.mgt_vlr_pagar.focus();
     return false;
   }

      <?php

   }

   function mgt_numero_doctoJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.pagcontaspagar.mgt_numero_docto
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

   function mgt_vlr_pagarJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.pagcontaspagar.mgt_vlr_pagar;
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

   function mgt_data_fimJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.pagcontaspagar.mgt_data_fim
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

   function mgt_data_iniJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.pagcontaspagar.mgt_data_ini
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

   function mgt_numero_doctoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontaspagar.bt_buscar.focus();
     return false;
   }

      <?php

   }

   function mgt_vlr_pagarJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontaspagar.mgt_numero_docto.focus();
     return false;
   }

      <?php

   }

   function mgt_descricaoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontaspagar.mgt_fornecedor.focus();
     return false;
   }

      <?php

   }

   function mgt_status_procuraJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontaspagar.mgt_descricao.focus();
     return false;
   }

      <?php

   }

   function mgt_data_fimJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontaspagar.mgt_status_procura.focus();
     return false;
   }

      <?php

   }

   function mgt_data_iniJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontaspagar.mgt_data_fim.focus();
     return false;
   }

      <?php

   }

   public function busca_contas_pagar()
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      //*** Total dos Valores ***

      //*** Prepara o Select das Informacoes ***

      $Comando_SQL = "select * from mgt_cfops_faturamento";

      GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Close();
      GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Open();

      //*** Seleciona o Total dos Saldos ***

      //*** Total dos Saldos ***

      $nro_conta = 0;
      $total_saldos_bancarios = 0;
      $ultima_data_saldo = inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text));

      $Comando_SQL = "Select * from mgt_saldos Order By mgt_saldo_conta Asc, mgt_saldo_data Desc";

      GetConexaoPrincipal()->SQL_MGT_Saldos->Close();
      GetConexaoPrincipal()->SQL_MGT_Saldos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Saldos->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Saldos->EOF) != 1)
      {
         $ultima_data_saldo = GetConexaoPrincipal()->SQL_MGT_Saldos->Fields['mgt_saldo_data'];

         while((GetConexaoPrincipal()->SQL_MGT_Saldos->EOF) != 1)
         {
            if($nro_conta <> GetConexaoPrincipal()->SQL_MGT_Saldos->Fields['mgt_saldo_conta'])
            {
               $nro_conta = GetConexaoPrincipal()->SQL_MGT_Saldos->Fields['mgt_saldo_conta'];
               $total_saldos_bancarios = $total_saldos_bancarios + GetConexaoPrincipal()->SQL_MGT_Saldos->Fields['mgt_saldo_valor'];
            }

            GetConexaoPrincipal()->SQL_MGT_Saldos->Next();
         }
      }

      $this->saldos_contas->Caption = number_format($total_saldos_bancarios, "2", ".", "");

      /*
      if(strtotime(trim($ultima_data_saldo)) > strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
      {
         $this->saldos_contas->Caption = number_format(0, "2", ".", "");
      }
      else
      {
         //*** Limpa a Tabela de Cobrancas ***

         $Comando_SQL = "TRUNCATE TABLE mgt_swap_cobrancas";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Seleciona as Notas Fiscais ***

         if(trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) == '')
         {
            $Comando_SQL = "Select * from mgt_notas_fiscais Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_1 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_1 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_2 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_2 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_3 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_3 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_4 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_4 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_5 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_5 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_6 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_6 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_7 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_7 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_8 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_8 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_9 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_9 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_10 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_10 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_11 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_11 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_12 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_12 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_nota_fiscal_tipo_nota ='1' ";
            $Comando_SQL .= " Order By mgt_nota_fiscal_numero";
         }
         else
         {
            $Comando_SQL = "Select * from mgt_notas_fiscais Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_1 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_1 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_2 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_2 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_3 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_3 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_4 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_4 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_5 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_5 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_6 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_6 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_7 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_7 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_8 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_8 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_9 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_9 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_10 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_10 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_11 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_11 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_12 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_12 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_nota_fiscal_cfop IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ") and ";
            $Comando_SQL .= "mgt_nota_fiscal_tipo_nota ='1' ";
            $Comando_SQL .= "Order By mgt_nota_fiscal_numero";
         }

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

         //*** Obtem as Cobrancas Vencidas ***

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->First();

         if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
            {
               $dt_vcto_1 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_1'];
               $dt_vcto_2 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_2'];
               $dt_vcto_3 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_3'];
               $dt_vcto_4 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_4'];
               $dt_vcto_5 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_5'];
               $dt_vcto_6 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_6'];
               $dt_vcto_7 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_7'];
               $dt_vcto_8 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_8'];
               $dt_vcto_9 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_9'];
               $dt_vcto_10 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_10'];
               $dt_vcto_11 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_11'];
               $dt_vcto_12 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_12'];

               $dt_pgto_1 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_1'];
               $dt_pgto_2 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_2'];
               $dt_pgto_3 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_3'];
               $dt_pgto_4 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_4'];
               $dt_pgto_5 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_5'];
               $dt_pgto_6 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_6'];
               $dt_pgto_7 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_7'];
               $dt_pgto_8 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_8'];
               $dt_pgto_9 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_9'];
               $dt_pgto_10 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_10'];
               $dt_pgto_11 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_11'];
               $dt_pgto_12 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_12'];

               if(trim($dt_vcto_1) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_1)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_1)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'1',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_2) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_2)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_2)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'2',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_3) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_3)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_3)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'3',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_4) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_4)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_4)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'4',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_5) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_5)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_5)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'5',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_6) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_6)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_6)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'6',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_7) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_7)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_7)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'7',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_8) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_8)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_8)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'8',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_9) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_9)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_9)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'9',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_10) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_10)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_10)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'10',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_11) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_11)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_11)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'11',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_12) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_12)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_12)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                     $Comando_SQL .= "'12',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
            }
         }

         //*** Seleciona as Vendas Programadas ***

         if(trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) == '')
         {
            $Comando_SQL = "Select * from mgt_programadas Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_1 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_1 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_2 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_2 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_3 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_3 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_4 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_4 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_5 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_5 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_6 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_6 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_7 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_7 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_8 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_8 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_9 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_9 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_10 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_10 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_11 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_11 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_12 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_12 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_programada_tipo_nota ='1' ";
            $Comando_SQL .= "Order By mgt_programada_numero";
         }
         else
         {
            $Comando_SQL = "Select * from mgt_programadas Where ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_1 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_1 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_2 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_2 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_3 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_3 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_4 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_4 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_5 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_5 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_6 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_6 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_7 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_7 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_8 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_8 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_9 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_9 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_10 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_10 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_11 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_11 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) or ";
            $Comando_SQL .= "((mgt_programada_dup_dt_vcto_12 >= '" . $ultima_data_saldo . "') and ";
            $Comando_SQL .= "(mgt_programada_dup_dt_vcto_12 < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "'))";
            $Comando_SQL .= ") and ";
            $Comando_SQL .= "mgt_programada_cfop IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ") and ";
            $Comando_SQL .= "mgt_programada_tipo_nota ='1' ";
            $Comando_SQL .= "Order By mgt_programada_numero";
         }

         GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
         GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

         //*** Obtem as Cobrancas Vencidas ***

         GetConexaoPrincipal()->SQL_MGT_Programadas->First();

         if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
            {
               $dt_vcto_1 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_1'];
               $dt_vcto_2 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_2'];
               $dt_vcto_3 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_3'];
               $dt_vcto_4 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_4'];
               $dt_vcto_5 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_5'];
               $dt_vcto_6 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_6'];
               $dt_vcto_7 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_7'];
               $dt_vcto_8 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_8'];
               $dt_vcto_9 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_9'];
               $dt_vcto_10 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_10'];
               $dt_vcto_11 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_11'];
               $dt_vcto_12 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_12'];

               $dt_pgto_1 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_1'];
               $dt_pgto_2 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_2'];
               $dt_pgto_3 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_3'];
               $dt_pgto_4 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_4'];
               $dt_pgto_5 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_5'];
               $dt_pgto_6 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_6'];
               $dt_pgto_7 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_7'];
               $dt_pgto_8 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_8'];
               $dt_pgto_9 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_9'];
               $dt_pgto_10 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_10'];
               $dt_pgto_11 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_11'];
               $dt_pgto_12 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_12'];

               if(trim($dt_vcto_1) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_1)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_1)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'1',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_1'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_2) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_2)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_2)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'2',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_2'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_3) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_3)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_3)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'3',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_3'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_4) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_4)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_4)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'4',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_4'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_5) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_5)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_5)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'5',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_5'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_6) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_6)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_6)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'6',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_6'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_7) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_7)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_7)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'7',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_7'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_8) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_8)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_8)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'8',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_8'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_9) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_9)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_9)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'9',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_9'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_10) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_10)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_10)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'10',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_10'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_11) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_11)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_11)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'11',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_11'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               if(trim($dt_vcto_12) != '')
               {
                  if(
                  (strtotime(trim($dt_vcto_12)) >= strtotime($ultima_data_saldo)) and
                  (strtotime(trim($dt_vcto_12)) < strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text))))
                  )
                  {

                     $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                     $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                     $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                     $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                     $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                     $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                     $Comando_SQL .= " Values(";

                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                     $Comando_SQL .= "'12',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_12'] . "',";
                     $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                     GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                     GetConexaoPrincipal()->SQL_Comunitario->Open();
                     GetConexaoPrincipal()->SQL_Comunitario->Close();
                  }
               }

               GetConexaoPrincipal()->SQL_MGT_Programadas->Next();
            }
         }

         $Comando_SQL = "Select SUM(mgt_swap_cobranca_dup_vlr) AS mgt_total_geral_cobrancas from mgt_swap_cobrancas Where (mgt_swap_cobranca_dup_dt_pgto <> '' And mgt_swap_cobranca_dup_dt_pgto <> '0000-00-00') Order By mgt_swap_cobranca_dup_dt_vcto, mgt_swap_cobranca_dup_nro";

         GetConexaoPrincipal()->SQL_MGT_Cobrancas->Close();
         GetConexaoPrincipal()->SQL_MGT_Cobrancas->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Cobrancas->Open();

         $total_saldos_bancarios = $total_saldos_bancarios + number_format(GetConexaoPrincipal()->SQL_MGT_Cobrancas->Fields['mgt_total_geral_cobrancas'], "2", ".", "");

         $Comando_SQL = "select SUM(mgt_conta_pagar_valor_ser_pago) AS mgt_total_ser_pago ";
         $Comando_SQL .= "from mgt_contas_pagar ";
         $Comando_SQL .= "where ";
         $Comando_SQL .= "((mgt_conta_pagar_data_pagto >= '" . $ultima_data_saldo . "') and ";
         $Comando_SQL .= "(mgt_conta_pagar_data_pagto < '" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "')) ";
         $Comando_SQL .= " And mgt_conta_pagar_status = 'Pago' ";

         GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Close();
         GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Open();

         $total_saldos_bancarios = number_format($total_saldos_bancarios - GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_total_ser_pago'], "2", ".", "");

         $this->saldos_contas->Caption = number_format($total_saldos_bancarios, "2", ".", "");
      }
	  */

      //*** Seleciona os Dados de Cobranca ***

      //*** Limpa a Tabela de Cobrancas ***

      $Comando_SQL = "TRUNCATE TABLE mgt_swap_cobrancas";

      GetConexaoPrincipal()->SQL_Comunitario->Close();
      GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_Comunitario->Open();
      GetConexaoPrincipal()->SQL_Comunitario->Close();

      //*** Seleciona as Notas Fiscais ***

      if(trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) == '')
      {
         $Comando_SQL = "Select * from mgt_notas_fiscais Where ";
         $Comando_SQL .= "(";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_1 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_1 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_2 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_2 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_3 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_3 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_4 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_4 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_5 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_5 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_6 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_6 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_7 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_7 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_8 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_8 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_9 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_9 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_10 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_10 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_11 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_11 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_12 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_12 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "'))";
         $Comando_SQL .= ") and ";
         $Comando_SQL .= "mgt_nota_fiscal_tipo_nota ='1' ";
         $Comando_SQL .= " Order By mgt_nota_fiscal_numero";
      }
      else
      {
         $Comando_SQL = "Select * from mgt_notas_fiscais Where ";
         $Comando_SQL .= "(";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_1 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_1 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_2 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_2 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_3 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_3 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_4 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_4 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_5 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_5 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_6 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_6 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_7 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_7 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_8 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_8 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_9 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_9 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_10 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_10 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_11 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_11 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_nota_fiscal_dup_dt_vcto_12 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_12 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "'))";
         $Comando_SQL .= ") and ";
         $Comando_SQL .= "mgt_nota_fiscal_cfop IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ") and ";
         $Comando_SQL .= "mgt_nota_fiscal_tipo_nota ='1' ";
         $Comando_SQL .= "Order By mgt_nota_fiscal_numero";
      }

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      //*** Obtem as Cobrancas Vencidas ***

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->First();

      if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
         {
            $dt_vcto_1 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_1'];
            $dt_vcto_2 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_2'];
            $dt_vcto_3 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_3'];
            $dt_vcto_4 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_4'];
            $dt_vcto_5 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_5'];
            $dt_vcto_6 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_6'];
            $dt_vcto_7 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_7'];
            $dt_vcto_8 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_8'];
            $dt_vcto_9 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_9'];
            $dt_vcto_10 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_10'];
            $dt_vcto_11 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_11'];
            $dt_vcto_12 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_12'];

            $dt_pgto_1 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_1'];
            $dt_pgto_2 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_2'];
            $dt_pgto_3 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_3'];
            $dt_pgto_4 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_4'];
            $dt_pgto_5 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_5'];
            $dt_pgto_6 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_6'];
            $dt_pgto_7 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_7'];
            $dt_pgto_8 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_8'];
            $dt_pgto_9 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_9'];
            $dt_pgto_10 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_10'];
            $dt_pgto_11 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_11'];
            $dt_pgto_12 = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_12'];

            if(trim($dt_vcto_1) != '')
            {
               if(
               (strtotime(trim($dt_vcto_1)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_1)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                  $Comando_SQL .= "'1',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_2) != '')
            {
               if(
               (strtotime(trim($dt_vcto_2)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_2)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                  $Comando_SQL .= "'2',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_3) != '')
            {
               if(
               (strtotime(trim($dt_vcto_3)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_3)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                  $Comando_SQL .= "'3',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_4) != '')
            {
               if(
               (strtotime(trim($dt_vcto_4)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_4)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                  $Comando_SQL .= "'4',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_5) != '')
            {
               if(
               (strtotime(trim($dt_vcto_5)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_5)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                  $Comando_SQL .= "'5',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_6) != '')
            {
               if(
               (strtotime(trim($dt_vcto_6)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_6)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                  $Comando_SQL .= "'6',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_7) != '')
            {
               if(
               (strtotime(trim($dt_vcto_7)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_7)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                  $Comando_SQL .= "'7',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_8) != '')
            {
               if(
               (strtotime(trim($dt_vcto_8)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_8)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                  $Comando_SQL .= "'8',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_9) != '')
            {
               if(
               (strtotime(trim($dt_vcto_9)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_9)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                  $Comando_SQL .= "'9',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_10) != '')
            {
               if(
               (strtotime(trim($dt_vcto_10)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_10)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                  $Comando_SQL .= "'10',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_11) != '')
            {
               if(
               (strtotime(trim($dt_vcto_11)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_11)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                  $Comando_SQL .= "'11',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_12) != '')
            {
               if(
               (strtotime(trim($dt_vcto_12)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_12)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
                  $Comando_SQL .= "'12',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
         }
      }

      //*** Seleciona as Vendas Programadas ***

      if(trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) == '')
      {
         $Comando_SQL = "Select * from mgt_programadas Where ";
         $Comando_SQL .= "(";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_1 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_1 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_2 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_2 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_3 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_3 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_4 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_4 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_5 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_5 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_6 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_6 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_7 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_7 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_8 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_8 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_9 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_9 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_10 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_10 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_11 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_11 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_12 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_12 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "'))";
         $Comando_SQL .= ") and ";
         $Comando_SQL .= "mgt_programada_tipo_nota ='1' ";
         $Comando_SQL .= "Order By mgt_programada_numero";
      }
      else
      {
         $Comando_SQL = "Select * from mgt_programadas Where ";
         $Comando_SQL .= "(";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_1 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_1 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_2 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_2 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_3 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_3 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_4 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_4 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_5 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_5 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_6 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_6 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_7 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_7 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_8 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_8 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_9 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_9 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_10 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_10 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_11 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_11 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) or ";
         $Comando_SQL .= "((mgt_programada_dup_dt_vcto_12 >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
         $Comando_SQL .= "(mgt_programada_dup_dt_vcto_12 <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "'))";
         $Comando_SQL .= ") and ";
         $Comando_SQL .= "mgt_programada_cfop IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ") and ";
         $Comando_SQL .= "mgt_programada_tipo_nota ='1' ";
         $Comando_SQL .= "Order By mgt_programada_numero";
      }

      GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
      GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

      //*** Obtem as Cobrancas Vencidas ***

      GetConexaoPrincipal()->SQL_MGT_Programadas->First();

      if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
         {
            $dt_vcto_1 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_1'];
            $dt_vcto_2 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_2'];
            $dt_vcto_3 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_3'];
            $dt_vcto_4 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_4'];
            $dt_vcto_5 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_5'];
            $dt_vcto_6 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_6'];
            $dt_vcto_7 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_7'];
            $dt_vcto_8 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_8'];
            $dt_vcto_9 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_9'];
            $dt_vcto_10 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_10'];
            $dt_vcto_11 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_11'];
            $dt_vcto_12 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_12'];

            $dt_pgto_1 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_1'];
            $dt_pgto_2 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_2'];
            $dt_pgto_3 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_3'];
            $dt_pgto_4 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_4'];
            $dt_pgto_5 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_5'];
            $dt_pgto_6 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_6'];
            $dt_pgto_7 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_7'];
            $dt_pgto_8 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_8'];
            $dt_pgto_9 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_9'];
            $dt_pgto_10 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_10'];
            $dt_pgto_11 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_11'];
            $dt_pgto_12 = GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_12'];

            if(trim($dt_vcto_1) != '')
            {
               if(
               (strtotime(trim($dt_vcto_1)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_1)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                  $Comando_SQL .= "'1',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_1'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_2) != '')
            {
               if(
               (strtotime(trim($dt_vcto_2)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_2)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                  $Comando_SQL .= "'2',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_2'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_3) != '')
            {
               if(
               (strtotime(trim($dt_vcto_3)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_3)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                  $Comando_SQL .= "'3',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_3'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_4) != '')
            {
               if(
               (strtotime(trim($dt_vcto_4)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_4)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                  $Comando_SQL .= "'4',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_4'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_5) != '')
            {
               if(
               (strtotime(trim($dt_vcto_5)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_5)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                  $Comando_SQL .= "'5',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_5'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_6) != '')
            {
               if(
               (strtotime(trim($dt_vcto_6)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_6)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                  $Comando_SQL .= "'6',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_6'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_7) != '')
            {
               if(
               (strtotime(trim($dt_vcto_7)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_7)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                  $Comando_SQL .= "'7',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_7'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_8) != '')
            {
               if(
               (strtotime(trim($dt_vcto_8)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_8)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                  $Comando_SQL .= "'8',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_8'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_9) != '')
            {
               if(
               (strtotime(trim($dt_vcto_9)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_9)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                  $Comando_SQL .= "'9',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_9'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_10) != '')
            {
               if(
               (strtotime(trim($dt_vcto_10)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_10)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                  $Comando_SQL .= "'10',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_10'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_11) != '')
            {
               if(
               (strtotime(trim($dt_vcto_11)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_11)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                  $Comando_SQL .= "'11',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_11'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            if(trim($dt_vcto_12) != '')
            {
               if(
               (strtotime(trim($dt_vcto_12)) >= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)))) and
               (strtotime(trim($dt_vcto_12)) <= strtotime(inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text))))
               )
               {

                  $Comando_SQL = "Insert into mgt_swap_cobrancas (";
                  $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nome, ";
                  $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
                  $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
                  $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
                  $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
                  $Comando_SQL .= " Values(";

                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
                  $Comando_SQL .= "'12',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_12'] . "',";
                  $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }
            }

            GetConexaoPrincipal()->SQL_MGT_Programadas->Next();
         }
      }

      //*** Seleciona o Total Geral de Cobrancas ***

      $Comando_SQL = "Select SUM(mgt_swap_cobranca_dup_vlr) AS mgt_total_geral_cobrancas from mgt_swap_cobrancas Where (mgt_swap_cobranca_dup_dt_pgto <> '' And mgt_swap_cobranca_dup_dt_pgto <> '0000-00-00') Order By mgt_swap_cobranca_dup_dt_vcto, mgt_swap_cobranca_dup_nro";

      GetConexaoPrincipal()->SQL_MGT_Cobrancas->Close();
      GetConexaoPrincipal()->SQL_MGT_Cobrancas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Cobrancas->Open();

      $this->total_recebido->Caption = number_format(GetConexaoPrincipal()->SQL_MGT_Cobrancas->Fields['mgt_total_geral_cobrancas'], "2", ".", "");

      //*** Totaliza o Contas a Pagar (Total Final)***

      $Comando_SQL = "select SUM(mgt_conta_pagar_valor_ser_pago) AS mgt_total_ser_pago ";
      $Comando_SQL .= "from mgt_contas_pagar ";
      $Comando_SQL .= "where ";
      $Comando_SQL .= "((mgt_conta_pagar_data >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
      $Comando_SQL .= "(mgt_conta_pagar_data <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) ";

      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Open();

      $this->total_pagar->Caption = number_format(GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_total_ser_pago'], "2", ".", "");

      //*** Totaliza o Contas a Pagar (Pagos) (Total Final)***

      $Comando_SQL = "select SUM(mgt_conta_pagar_valor_ser_pago) AS mgt_total_ser_pago ";
      $Comando_SQL .= "from mgt_contas_pagar ";
      $Comando_SQL .= "where ";
      $Comando_SQL .= "((mgt_conta_pagar_data_pagto >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
      $Comando_SQL .= "(mgt_conta_pagar_data_pagto <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) ";
      $Comando_SQL .= " And mgt_conta_pagar_status = 'Pago' ";

      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Open();

      $this->total_pago->Caption = number_format(GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_total_ser_pago'], "2", ".", "");

      //*** Totaliza o Saldo a Pagar ***

      $this->total_saldo->Caption = number_format(number_format(trim($this->total_pagar->Caption), "2", ".", "") - number_format(trim($this->total_pago->Caption), "2", ".", ""), "2", ".", "");

      //*** Totaliza o Recebidos - Pagos ***

      $this->total_final->Caption = @number_format((number_format(trim($this->saldos_contas->Caption), "2", ".", "") + number_format(trim($this->total_recebido->Caption), "2", ".", "")) - number_format(trim($this->total_pagar->Caption), "2", ".", ""), "2", ".", "");

      //*** Totaliza o Contas a Pagar ***

      $Comando_SQL = "select SUM(mgt_conta_pagar_valor_ser_pago) AS mgt_total_ser_pago ";
      $Comando_SQL .= "from mgt_contas_pagar ";
      $Comando_SQL .= "where ";

      if(($this->mgt_status_procura->ItemIndex == 'Pago') Or ($this->mgt_status_procura->ItemIndex == 'Pago Parcial'))
      {
        $Comando_SQL .= "((mgt_conta_pagar_data_pagto >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
        $Comando_SQL .= "(mgt_conta_pagar_data_pagto <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) ";
      }
      else
      {
        $Comando_SQL .= "((mgt_conta_pagar_data >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
        $Comando_SQL .= "(mgt_conta_pagar_data <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) ";
      }

      if(trim($this->mgt_descricao->Text) <> '')
      {
         $Comando_SQL .= "and mgt_conta_pagar_descricao Like '%" . trim($this->mgt_descricao->Text) . "%' ";
      }

      if(trim($this->mgt_fornecedor->Text) <> '')
      {
         $Comando_SQL .= "and mgt_conta_pagar_fornecedor_nome Like '%" . trim($this->mgt_fornecedor->Text) . "%' ";
      }

      if(trim($this->mgt_numero_docto->Text) <> '')
      {
         $Comando_SQL .= "and mgt_conta_pagar_nro = " . trim($this->mgt_numero_docto->Text) . " ";
      }

      if(trim($this->mgt_vlr_pagar->Text) <> '')
      {
         $Comando_SQL .= "and mgt_conta_pagar_valor_ser_pago  = " . trim($this->mgt_vlr_pagar->Text) . " ";
      }

      if($this->mgt_status_procura->ItemIndex != 'Todos')
      {
         $Comando_SQL .= " And mgt_conta_pagar_status = '" . $this->mgt_status_procura->ItemIndex . "' ";
      }

      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Open();

      $this->total_registros->Caption = number_format(GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Fields['mgt_total_ser_pago'], "2", ".", "");

      //*** Selecion as Contas a Pagar ***

      $Comando_SQL = "select *, mgt_conta_pagar_data AS mgt_conta_pagar_data_ord,date_format(mgt_conta_pagar_data, '%d/%m/%Y') AS mgt_conta_pagar_data, ";
      $Comando_SQL .= "date_format(mgt_conta_pagar_data_pagto, '%d/%m/%Y') AS mgt_conta_pagar_data_pagto, ";
      $Comando_SQL .= "date_format(mgt_conta_pagar_data_emissao, '%d/%m/%Y') AS mgt_conta_pagar_data_emissao, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Em Aberto','#','') AS mgt_conta_pagar_status_1, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Pago','#','') AS mgt_conta_pagar_status_2, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Pago Parcial','#','') AS mgt_conta_pagar_status_3, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Cancelado','#','') AS mgt_conta_pagar_status_4, ";
      $Comando_SQL .= "IF(mgt_conta_pagar_status = 'Devolucao','#','') AS mgt_conta_pagar_status_5 ";
      $Comando_SQL .= "from mgt_contas_pagar ";
      $Comando_SQL .= "where ";

      if(($this->mgt_status_procura->ItemIndex == 'Pago') Or ($this->mgt_status_procura->ItemIndex == 'Pago Parcial'))
      {
        $Comando_SQL .= "((mgt_conta_pagar_data_pagto >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
        $Comando_SQL .= "(mgt_conta_pagar_data_pagto <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) ";
      }
      else
      {
        $Comando_SQL .= "((mgt_conta_pagar_data >='" . inverte_data_dma_to_amd(trim($this->mgt_data_ini->Text)) . "') and ";
        $Comando_SQL .= "(mgt_conta_pagar_data <='" . inverte_data_dma_to_amd(trim($this->mgt_data_fim->Text)) . "')) ";
      }

      if(trim($this->mgt_descricao->Text) <> '')
      {
         $Comando_SQL .= "and mgt_conta_pagar_descricao Like '%" . trim($this->mgt_descricao->Text) . "%' ";
      }

      if(trim($this->mgt_fornecedor->Text) <> '')
      {
         $Comando_SQL .= "and mgt_conta_pagar_fornecedor_nome Like '%" . trim($this->mgt_fornecedor->Text) . "%' ";
      }

      if(trim($this->mgt_numero_docto->Text) <> '')
      {
         $Comando_SQL .= "and mgt_conta_pagar_nro = " . trim($this->mgt_numero_docto->Text) . " ";
      }

      if(trim($this->mgt_vlr_pagar->Text) <> '')
      {
         $Comando_SQL .= "and mgt_conta_pagar_valor_ser_pago  = " . trim($this->mgt_vlr_pagar->Text) . " ";
      }

      if($this->mgt_status_procura->ItemIndex != 'Todos')
      {
         $Comando_SQL .= " And mgt_conta_pagar_status = '" . $this->mgt_status_procura->ItemIndex . "' ";
      }

      $Comando_SQL .= "Order By mgt_conta_pagar_data_ord Desc, mgt_conta_pagar_nro";

      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas_Pagar->Open();

      $_SESSION['imprime_data_inicial'] = $this->mgt_data_ini->Text;
      $_SESSION['imprime_data_final'] = $this->mgt_data_fim->Text;
      $_SESSION['imprime_valor_total'] = $this->total_registros->Caption;

      $this->Busca_Efetuada->Value = 'SIM';
   }

   function bt_fecharClick($sender, $params)
   {
      $this->mgt_descricao->Text = "";
      $this->mgt_fornecedor->Text = "";
      $this->mgt_vlr_pagar->Text = "";
      $this->mgt_numero_docto->Text = "";
      $this->mgt_swap_selecionadas->Text = "";
      $this->abrir_cadastro->Text = "";

      redirect('frame_corpo.php');
   }

   function abrir_cadastroJSKeyPress($sender, $params)
   {

      ?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontaspagar.bt_cadastro.focus();
     return false;
   }

      <?php

   }

   function bt_cadastroClick($sender, $params)
   {
      if(trim($this->abrir_cadastro->Text) == "")
      {
         $this->MSG_Erro->Caption = "O Campo de Codigo deve ser preenchido.";
      }
      else
      {
         redirect('pag_contas_pagar_alt.php?mgt_conta_pagar_nro=' . $this->abrir_cadastro->Text);
      }
   }

   function registrosJSRowChanged($sender, $params)
   {

      ?>
   //Add your javascript code here

   //*** Obtem o Registro Clicado ***

   var vlrAnterior = 0.00;
   var vlrSelecionado = 0.00;

   if( document.pagcontaspagar.mgt_swap_selecionadas.value == '' )
   {
      document.pagcontaspagar.mgt_swap_valor_selecionadas.value = '0.00';
   }

   vlrAnterior = parseFloat(document.pagcontaspagar.mgt_swap_valor_selecionadas.value);
   vlrSelecionado = parseFloat(registros.getTableModel().getValue(4, registros.getFocusedRow()));
   vlrSelecionado = (vlrAnterior + vlrSelecionado);

   document.pagcontaspagar.mgt_swap_selecionadas.value = document.pagcontaspagar.mgt_swap_selecionadas.value + registros.getTableModel().getValue(0, registros.getFocusedRow()) + ',';
   document.pagcontaspagar.abrir_cadastro.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
   document.pagcontaspagar.mgt_swap_conta.value = registros.getTableModel().getValue(1, registros.getFocusedRow());

   //*** Totaliza o Valor Selecionado ***
   document.pagcontaspagar.mgt_swap_valor_selecionadas.value = (vlrSelecionado).toFixed(2);

      <?php

   }

   function bt_incluirClick($sender, $params)
   {
      redirect('pag_contas_pagar_inc.php');
   }

   function bt_buscarClick($sender, $params)
   {
      $this->busca_contas_pagar();

      $this->mgt_swap_selecionadas->Text = "";
   }

   function pagcontaspagarCreate($sender, $params)
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

      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      //*** Carrega os Valores dos Campos ***

      if( trim($this->Busca_Efetuada->Value) == 'NAO' )
      {
         $this->mgt_data_ini->Text = "01/01/" . date("Y", time());
         $this->mgt_data_fim->Text = date("d/m/Y", time());
      }

      //*** Carrega as Contas ***

      $this->mgt_swap_conta->Clear();

      $Comando_SQL = "select * from mgt_contas_bancarias order by mgt_conta_bancaria_nro";

      GetConexaoPrincipal()->SQL_MGT_Contas->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Contas->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Contas->EOF) != 1)
         {
            $this->mgt_swap_conta->AddItem(GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_nro'] . ' - Banco: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_banco'] . ' - Ag.: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_agencia'] . ' - CC.: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_conta'] . ' - Titular: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_titular'], null, GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_nro']);
            GetConexaoPrincipal()->SQL_MGT_Contas->Next();
         }
      }

      $this->busca_contas_pagar();
   }
   function pagcontaspagarJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

      <?php

   }

}

global $application;

global $pagcontaspagar;

//Creates the form
$pagcontaspagar = new pagcontaspagar($application);

//Read from resource file
$pagcontaspagar->loadResource(__FILE__);

//Shows the form
$pagcontaspagar->show();

?>