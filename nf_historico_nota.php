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
class nfhistoriconota extends Page
{
   public $mgt_nota_fiscal_valor_total = null;
   public $Label12 = null;
   public $mgt_nota_fiscal_cfop = null;
   public $mgt_nota_fiscal_dup_dt_vcto_fim = null;
   public $mgt_nota_fiscal_dup_dt_vcto_ini = null;
   public $mgt_nota_fiscal_data_emissao_fim = null;
   public $mgt_nota_fiscal_data_emissao_ini = null;
   public $mgt_nota_fiscal_finalidade = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $Label7 = null;
   public $Label6 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label1 = null;
   public $abrir_cadastro = null;
   public $bt_cadastro = null;
   public $registros = null;
   public $bt_fechar = null;
   public $bt_buscar = null;
   public $opcao_busca = null;
   public $dados_busca = null;
   public $area_sistema = null;
   public $Label5 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label2 = null;
   public $GroupBox3 = null;
   public $GroupBox2 = null;
   public $GroupBox1 = null;
   function mgt_nota_fiscal_cfopJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So CFOP ***

   var campo = document.nfhistoriconota.mgt_nota_fiscal_cfop
   var digits="0123456789,"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So CFOP ***

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_fimJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfhistoriconota.mgt_nota_fiscal_dup_dt_vcto_fim
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

   function mgt_nota_fiscal_dup_dt_vcto_iniJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfhistoriconota.mgt_nota_fiscal_dup_dt_vcto_ini
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

   function mgt_nota_fiscal_data_emissao_fimJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfhistoriconota.mgt_nota_fiscal_data_emissao_fim
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

   function mgt_nota_fiscal_data_emissao_iniJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.nfhistoriconota.mgt_nota_fiscal_data_emissao_ini
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

   function mgt_nota_fiscal_finalidadeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfhistoriconota.bt_buscar.focus();
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
     document.nfhistoriconota.mgt_nota_fiscal_finalidade.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_fimJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfhistoriconota.mgt_nota_fiscal_cfop.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_dup_dt_vcto_iniJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfhistoriconota.mgt_nota_fiscal_dup_dt_vcto_fim.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_data_emissao_fimJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfhistoriconota.mgt_nota_fiscal_dup_dt_vcto_ini.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_data_emissao_iniJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfhistoriconota.mgt_nota_fiscal_data_emissao_fim.focus();
     return false;
   }

<?php

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
     document.nfhistoriconota.bt_cadastro.focus();
     return false;
   }

<?php

   }

   function opcao_buscaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfhistoriconota.mgt_nota_fiscal_data_emissao_ini.focus();
     return false;
   }

<?php

   }

   function dados_buscaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfhistoriconota.opcao_busca.focus();
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
         //*** Efetua o Carregamento da Nota Fiscal ***

         $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data, '%d/%m/%Y') AS mgt_nota_fiscal_data, date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao, date_format(mgt_nota_fiscal_data_entrega, '%d/%m/%Y') AS mgt_nota_fiscal_data_entrega from mgt_notas_fiscais where mgt_nota_fiscal_finalidade = '" . substr(trim($this->abrir_cadastro->Text), 0, 3) . "' And mgt_nota_fiscal_numero = '" . substr(trim($this->abrir_cadastro->Text), 3) . "' order by mgt_nota_fiscal_numero";

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) == 1)
         {
            $this->MSG_Erro->Caption = "O Cadastro Nao foi encontrado.";
         }
         else
         {
?>
         <!-- Abre a Tela de Inclusao -->
         <script language="JavaScript">
            <?php
            echo "window.open('nf_historico_nota_exb.php?mgt_nota_fiscal_numero=" . $this->abrir_cadastro->Text ."','nf_historico_nota_exb','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
            ?>
         </script>
<?php
         }
      }
   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Add your javascript code here

   //*** Obtem o Registro Clicado ***

   document.nfhistoriconota.abrir_cadastro.value = registros.getTableModel().getValue(0, registros.getFocusedRow()) + registros.getTableModel().getValue(1, registros.getFocusedRow());

<?php

   }

   function bt_buscarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      //*** Totaliza o Historico ***

      $Comando_SQL = "select SUM(mgt_nota_fiscal_valor_total) As mgt_nota_fiscal_valor_total from mgt_notas_fiscais ";
      $Comando_SQL .= "where ";
      $Comando_SQL .= "mgt_nota_fiscal_tipo_nota <> '9' ";

      if( trim($this->mgt_nota_fiscal_data_emissao_ini->Text) <> '' )
      {
         $Comando_SQL .= "And (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao_fim->Text)) . "') ";
      }

      if( trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text) <> '' )
      {
         $Comando_SQL .= "And (";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_1 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_1 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_2 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_2 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_3 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_3 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_4 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_4 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_5 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_5 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_6 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_6 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_7 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_7 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_8 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_8 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_9 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_9 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_10 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_10 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_11 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_11 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_12 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_12 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= ") ";
      }

      if( trim($this->mgt_nota_fiscal_cfop->Text) <> '' )
      {
         $Comando_SQL .= "And (mgt_nota_fiscal_cfop IN(" . trim($this->mgt_nota_fiscal_cfop->Text) . ")) ";
      }

      if(trim($this->mgt_nota_fiscal_finalidade->ItemIndex) <> 'TOD')
      {
         $Comando_SQL .= "And (mgt_nota_fiscal_finalidade = '" . trim($this->mgt_nota_fiscal_finalidade->ItemIndex) . "') ";
      }

      if(trim($this->dados_busca->Text) <> "")
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL .= "And mgt_nota_fiscal_numero = '" . trim($this->dados_busca->Text) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Cliente")
         {
            $Comando_SQL .= "And mgt_nota_fiscal_cliente_nome like '%" . trim($this->dados_busca->Text) . "%' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Valor")
         {
            $Comando_SQL .= "And mgt_nota_fiscal_valor_total = '" . trim($this->dados_busca->Text) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Entrega")
         {
            $Comando_SQL .= "And mgt_nota_fiscal_data_entrega = '" . inverte_data_dma_to_amd(trim($this->dados_busca->Text)) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Observacao")
         {
            $Comando_SQL .= "And mgt_nota_fiscal_observacao_faturamento like '%" . trim($this->dados_busca->Text) . "%' ";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      $this->mgt_nota_fiscal_valor_total->Caption = @number_format(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_valor_total'], "2", ".", "");

      //*** Seleciona os Registros do Historicos ***

      $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data, '%d/%m/%Y') AS mgt_nota_fiscal_data, date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao, date_format(mgt_nota_fiscal_data_entrega, '%d/%m/%Y') AS mgt_nota_fiscal_data_entrega from mgt_notas_fiscais ";
      $Comando_SQL .= "where ";
      $Comando_SQL .= "mgt_nota_fiscal_tipo_nota <> '9' ";

      if( trim($this->mgt_nota_fiscal_data_emissao_ini->Text) <> '' )
      {
         $Comando_SQL .= "And (mgt_nota_fiscal_data_emissao >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_data_emissao <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_data_emissao_fim->Text)) . "') ";
      }

      if( trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text) <> '' )
      {
         $Comando_SQL .= "And (";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_1 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_1 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_2 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_2 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_3 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_3 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_4 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_4 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_5 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_5 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_6 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_6 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_7 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_7 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_8 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_8 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_9 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_9 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_10 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_10 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_11 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_11 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= "Or ";
         $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_12 >= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_ini->Text)) . "' And ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_12 <= '" . inverte_data_dma_to_amd(trim($this->mgt_nota_fiscal_dup_dt_vcto_fim->Text)) . "') ";
         $Comando_SQL .= ") ";
      }

      if( trim($this->mgt_nota_fiscal_cfop->Text) <> '' )
      {
         $Comando_SQL .= "And (mgt_nota_fiscal_cfop IN(" . trim($this->mgt_nota_fiscal_cfop->Text) . ")) ";
      }

      if(trim($this->mgt_nota_fiscal_finalidade->ItemIndex) <> 'TOD')
      {
         $Comando_SQL .= "And (mgt_nota_fiscal_finalidade = '" . trim($this->mgt_nota_fiscal_finalidade->ItemIndex) . "') ";
      }

      if(trim($this->dados_busca->Text) <> "")
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL .= "And mgt_nota_fiscal_numero = '" . trim($this->dados_busca->Text) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Cliente")
         {
            $Comando_SQL .= "And mgt_nota_fiscal_cliente_nome like '%" . trim($this->dados_busca->Text) . "%' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Valor")
         {
            $Comando_SQL .= "And mgt_nota_fiscal_valor_total = '" . trim($this->dados_busca->Text) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Entrega")
         {
            $Comando_SQL .= "And mgt_nota_fiscal_data_entrega = '" . inverte_data_dma_to_amd(trim($this->dados_busca->Text)) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Observacao")
         {
            $Comando_SQL .= "And mgt_nota_fiscal_observacao_faturamento like '%" . trim($this->dados_busca->Text) . "%' ";
         }
      }

      $Comando_SQL .= " order by mgt_nota_fiscal_numero";

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();
   }

   function nfhistoriconotaCreate($sender, $params)
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

      $Comando_SQL = "select *,date_format(mgt_nota_fiscal_data, '%d/%m/%Y') AS mgt_nota_fiscal_data, date_format(mgt_nota_fiscal_data_emissao, '%d/%m/%Y') AS mgt_nota_fiscal_data_emissao, date_format(mgt_nota_fiscal_data_entrega, '%d/%m/%Y') AS mgt_nota_fiscal_data_entrega from mgt_notas_fiscais order by mgt_nota_fiscal_numero";

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();
   }

   function nfhistoriconotaJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfhistoriconota;

//Creates the form
$nfhistoriconota = new nfhistoriconota($application);

//Read from resource file
$nfhistoriconota->loadResource(__FILE__);

//Shows the form
$nfhistoriconota->show();

?>