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
class relcobrancavencer extends Page
{
   public $mgt_opcao_programada = null;
   public $Label3 = null;
   public $mgt_data_final = null;
   public $Label2 = null;
   public $mgt_data_inicial = null;
   public $Label1 = null;
   public $bt_imprimir = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function mgt_data_finalJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.relcobrancavencer.mgt_data_final
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

   function mgt_data_inicialJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.relcobrancavencer.mgt_data_inicial
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

   function mgt_pedido_data_finalJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   var campo = document.relpedidoperiodo.mgt_pedido_data_final
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

   function mgt_data_finalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relcobrancavencer.bt_imprimir.focus();
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
     document.nfctrlsaidas.mgt_nota_fiscal_numero_ini.focus();
     return false;
   }

<?php

   }

   function mgt_data_inicialJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relcobrancavencer.mgt_data_final.focus();
     return false;
   }

<?php

   }

   function mgt_pedido_data_inicialJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.relpedidoperiodo.mgt_periodo_data_inicial
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

   function bt_imprimirClick($sender, $params)
   {
      if(trim($this->mgt_data_final->Text) != '')
      {
         $this->MSG_Erro->Caption = '';
      }

      if(trim($this->mgt_data_final->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data';
      }

      if(trim($this->MSG_Erro->Caption) == '')
      {
         $Comando_SQL = "select * from mgt_cfops_faturamento";

         GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Close();
         GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Open();

         $_SESSION['imprime_busca_cfop'] = GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido'];
         $_SESSION['imprime_data_inicial'] = $this->mgt_data_inicial->Text;
         $_SESSION['imprime_data_final'] = $this->mgt_data_final->Text;
         $_SESSION['imprime_opcao_programada'] = $this->mgt_opcao_programada->Checked;

         echo "<script language=\"JavaScript\">";
         echo "window.open('rel_cobranca_vencer_imp.php','rel_cobranca_vencer_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo "</script>";
      }
   }

   function relcobrancavencerCreate($sender, $params)
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

      $this->mgt_data_inicial->Text = '01/' . date("m/Y", time());
      $this->mgt_data_final->Text = date("d/m/Y", time());

      $this->MSG_Erro->Caption = "";
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }
   function relcobrancavencerJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relcobrancavencer;

//Creates the form
$relcobrancavencer = new relcobrancavencer($application);

//Read from resource file
$relcobrancavencer->loadResource(__FILE__);

//Shows the form
$relcobrancavencer->show();

?>