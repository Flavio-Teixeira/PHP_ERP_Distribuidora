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
class relultimasvendas extends Page
{
   public $mgt_rel_dt_fim = null;
   public $mgt_rel_dt_ini = null;
   public $Label6 = null;
   public $Label5 = null;
   public $mgt_rel_ordem = null;
   public $Label3 = null;
   public $mgt_rel_tipo = null;
   public $mgt_rel_representante = null;
   public $Label2 = null;
   public $mgt_rel_bairro = null;
   public $Label1 = null;
   public $mgt_rel_cidade = null;
   public $Label4 = null;
   public $mgt_rel_estado = null;
   public $bt_imprimir = null;
   public $Label26 = null;
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
   function mgt_rel_dt_iniJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.relultimasvendas.mgt_rel_dt_ini
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

   function mgt_rel_ordemJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relultimasvendas.bt_imprimir.focus();
     return false;
   }

<?php

   }

   function mgt_rel_dt_iniJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relultimasvendas.mgt_rel_dt_fim.focus();
     return false;
   }

<?php

   }

   function mgt_rel_representanteJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relultimasvendas.mgt_rel_dt_ini.focus();
     return false;
   }

<?php

   }

   function mgt_rel_bairroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relultimasvendas.mgt_rel_representante.focus();
     return false;
   }

<?php

   }

   function mgt_rel_cidadeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relultimasvendas.mgt_rel_bairro.focus();
     return false;
   }

<?php

   }

   function mgt_rel_bairroChange($sender, $params)
   {
      //*** Carrega os Representantes dos Bairros das Cidades com Base nos Estados Escolhidos ***

      if(trim($this->mgt_rel_bairro->ItemIndex) != '')
      {
         $this->mgt_rel_representante->Clear();

         $Comando_SQL = "select Distinct(mgt_cliente_vendedor), mgt_representante_nome from mgt_clientes,mgt_representantes Where mgt_cliente_vendedor = mgt_representante_codigo ";

         if(trim($this->mgt_rel_estado->ItemIndex) != '*')
         {
            $Comando_SQL .= " And mgt_cliente_estado = '" . trim($this->mgt_rel_estado->ItemIndex) . "' ";
         }

         if(trim($this->mgt_rel_cidade->ItemIndex) != '*')
         {
            $Comando_SQL .= " And mgt_cliente_cidade = '" . trim($this->mgt_rel_cidade->ItemIndex) . "' ";
         }

         if(trim($this->mgt_rel_bairro->ItemIndex) != '*')
         {
            $Comando_SQL .= " And mgt_cliente_bairro = '" . trim($this->mgt_rel_bairro->ItemIndex) . "' ";
         }

         $Comando_SQL .= " order by mgt_representante_nome";

         GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
         GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

         $this->mgt_rel_representante->AddItem('', null , '');
         $this->mgt_rel_representante->AddItem('--- Todos ---', null , '*');

         if((GetConexaoPrincipal()->SQL_MGT_Clientes->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Clientes->EOF) != 1)
            {
               $this->mgt_rel_representante->AddItem(trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_vendedor']) . ' - ' . GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_representante_nome'], null , GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_vendedor']);
               GetConexaoPrincipal()->SQL_MGT_Clientes->Next();
            }
         }

         $this->mgt_rel_representante->ItemIndex = "";
      }
   }

   function mgt_rel_cidadeChange($sender, $params)
   {
      //*** Carrega os Bairros das Cidades com Base nos Estados Escolhidos ***

      if(trim($this->mgt_rel_cidade->ItemIndex) != '')
      {
         $this->mgt_rel_bairro->Clear();

         $Comando_SQL = "select Distinct(mgt_cliente_bairro) from mgt_clientes Where mgt_cliente_bairro <> '' ";

         if(trim($this->mgt_rel_estado->ItemIndex) != '*')
         {
            $Comando_SQL .= " And mgt_cliente_estado = '" . trim($this->mgt_rel_estado->ItemIndex) . "' ";
         }

         if(trim($this->mgt_rel_cidade->ItemIndex) != '*')
         {
            $Comando_SQL .= " And mgt_cliente_cidade = '" . trim($this->mgt_rel_cidade->ItemIndex) . "' ";
         }

         $Comando_SQL .= "order by mgt_cliente_bairro";

         GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
         GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

         $this->mgt_rel_bairro->AddItem('', null , '');
         $this->mgt_rel_bairro->AddItem('--- Todos ---', null , '*');

         if((GetConexaoPrincipal()->SQL_MGT_Clientes->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Clientes->EOF) != 1)
            {
               $this->mgt_rel_bairro->AddItem(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_bairro'], null , GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_bairro']);
               GetConexaoPrincipal()->SQL_MGT_Clientes->Next();
            }
         }

         $this->mgt_rel_bairro->ItemIndex = "";
      }
   }

   function mgt_rel_estadoChange($sender, $params)
   {
      //*** Carrega as Cidades com Base nos Estados Escolhidos ***

      if(trim($this->mgt_rel_estado->ItemIndex) != '')
      {
         $this->mgt_rel_cidade->Clear();
         $this->mgt_rel_bairro->Clear();

         if(trim($this->mgt_rel_estado->ItemIndex) == '*')
         {
            $Comando_SQL = "select Distinct(mgt_cliente_cidade) from mgt_clientes Where mgt_cliente_cidade <> '' order by mgt_cliente_cidade";
         }
         else
         {
            $Comando_SQL = "select Distinct(mgt_cliente_cidade) from mgt_clientes Where mgt_cliente_cidade <> '' And mgt_cliente_estado = '" . trim($this->mgt_rel_estado->ItemIndex) . "' order by mgt_cliente_cidade";
         }

         GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
         GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

         $this->mgt_rel_cidade->AddItem('', null , '');
         $this->mgt_rel_cidade->AddItem('--- Todas ---', null , '*');

         if((GetConexaoPrincipal()->SQL_MGT_Clientes->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Clientes->EOF) != 1)
            {
               $this->mgt_rel_cidade->AddItem(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cidade'], null , GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cidade']);
               GetConexaoPrincipal()->SQL_MGT_Clientes->Next();
            }
         }

         $this->mgt_rel_cidade->ItemIndex = "";
      }
   }

   function mgt_rel_dt_fimJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.relultimasvendas.mgt_rel_dt_fim
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

   function mgt_rel_dt_fimJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relultimasvendas.mgt_rel_ordem.focus();
     return false;
   }

<?php

   }


   function mgt_rel_estadoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relultimasvendas.mgt_rel_cidade.focus();
     return false;
   }

<?php

   }

   function bt_imprimirClick($sender, $params)
   {
      if((trim($this->mgt_rel_dt_ini->Text) != '')And(trim($this->mgt_rel_dt_fim->Text) != ''))
      {
         $this->MSG_Erro->Caption = '';
      }

      if(trim($this->mgt_rel_dt_ini->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Inicial do periodo.';
      }

      if(trim($this->mgt_rel_dt_fim->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Final do Periodo.';
      }

      if(trim($this->mgt_rel_estado->ItemIndex) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe o Estado Desejado.';
      }

      if(trim($this->mgt_rel_cidade->ItemIndex) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Cidade Desejada.';
      }

      if(trim($this->mgt_rel_bairro->ItemIndex) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe o Bairro Desejado.';
      }

      if(trim($this->MSG_Erro->Caption) == '')
      {

         $_SESSION['imprime_rel_estado'] = $this->mgt_rel_estado->ItemIndex;
         $_SESSION['imprime_rel_cidade'] = $this->mgt_rel_cidade->ItemIndex;
         $_SESSION['imprime_rel_bairro'] = $this->mgt_rel_bairro->ItemIndex;
         $_SESSION['imprime_rel_representante'] = $this->mgt_rel_representante->ItemIndex;
         $_SESSION['imprime_rel_tipo'] = $this->mgt_rel_tipo->ItemIndex;
         $_SESSION['imprime_rel_dt_ini'] = $this->mgt_rel_dt_ini->Text;
         $_SESSION['imprime_rel_dt_fim'] = $this->mgt_rel_dt_fim->Text;
         $_SESSION['imprime_rel_ordem'] = $this->mgt_rel_ordem->ItemIndex;

         echo "<script language=\"JavaScript\">";
         echo "window.open('rel_ultimas_vendas_imp.php','rel_ultimas_vendas_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo "</script>";
      }
   }

   function relultimasvendasCreate($sender, $params)
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

      //*** Carrega as Datas do Periodo ***

      $this->mgt_rel_dt_ini->Text = '01/01/' . date("Y", time());
      $this->mgt_rel_dt_fim->Text = date("d/m/Y", time());

      //*** Carrega os Estados do Cadastro de Clientes ***

      $this->mgt_rel_estado->Clear();

      $Comando_SQL = "select Distinct(mgt_cliente_estado) from mgt_clientes Where mgt_cliente_estado <> '' order by mgt_cliente_estado";

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
      GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

      $this->mgt_rel_estado->AddItem('', null , '');
      $this->mgt_rel_estado->AddItem('--- Todos ---', null , '*');

      if((GetConexaoPrincipal()->SQL_MGT_Clientes->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Clientes->EOF) != 1)
         {
            $this->mgt_rel_estado->AddItem(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_estado'], null , GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_estado']);
            GetConexaoPrincipal()->SQL_MGT_Clientes->Next();
         }
      }

      $this->mgt_rel_estado->ItemIndex = "";
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }
   function relultimasvendasJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relultimasvendas;

//Creates the form
$relultimasvendas = new relultimasvendas($application);

//Read from resource file
$relultimasvendas->loadResource(__FILE__);

//Shows the form
$relultimasvendas->show();

?>