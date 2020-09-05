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
class nfcontabilidade extends Page
{
   public $mgt_nota_fiscal_ano = null;
   public $mgt_nota_fiscal_mes = null;
   public $Label5 = null;
   public $Label4 = null;
   public $bt_gerar = null;
   public $Label3 = null;
   public $Label2 = null;
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

   function mgt_nota_fiscal_anoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   var campo = document.nfcontabilidade.mgt_nota_fiscal_ano
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

   function mgt_nota_fiscal_anoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcontabilidade.bt_gerar.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_mesJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.nfcontabilidade.mgt_nota_fiscal_ano.focus();
     return false;
   }

<?php

   }

   function mgt_nota_fiscal_mesJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.nfcontabilidade.mgt_nota_fiscal_mes
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

   function bt_gerarClick($sender, $params)
   {
      if((trim($this->mgt_nota_fiscal_mes->Text) != '')And(trim($this->mgt_nota_fiscal_ano->Text) != ''))
      {
         $this->MSG_Erro->Caption = '';
      }

      if(trim($this->mgt_nota_fiscal_mes->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe o Mes';
      }

      if(trim($this->mgt_nota_fiscal_ano->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe o Ano';
      }

      if(trim($this->MSG_Erro->Caption) == '')
      {
         $_SESSION['gera_mes'] = $this->mgt_nota_fiscal_mes->Text;
         $_SESSION['gera_ano'] = $this->mgt_nota_fiscal_ano->Text;

         redirect('nf_contabilidade_gerar.php');
      }
   }

   function nfcontabilidadeCreate($sender, $params)
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

      $this->MSG_Erro->Caption = '';

      //*** Carrega o Mes e Ano do Dia Atual ***

      $this->mgt_nota_fiscal_mes->Text = date('m', time());
      $this->mgt_nota_fiscal_ano->Text = date('Y', time());
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }
   function nfcontabilidadeJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfcontabilidade;

//Creates the form
$nfcontabilidade = new nfcontabilidade($application);

//Read from resource file
$nfcontabilidade->loadResource(__FILE__);

//Shows the form
$nfcontabilidade->show();

?>