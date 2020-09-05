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
class relfichavisita extends Page
{
   public $mgt_rel_representante = null;
   public $bt_imprimir = null;
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
   function mgt_rel_representanteJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relfichavisita.bt_imprimir.focus();
     return false;
   }

   <?php

   }


   function bt_imprimirClick($sender, $params)
   {
      if(trim($this->MSG_Erro->Caption) == '')
      {
         $_SESSION['imprime_rel_representante'] = $this->mgt_rel_representante->ItemIndex;

         echo "<script language=\"JavaScript\">";
         echo "window.open('rel_ficha_visita_imp.php','rel_ficha_visita_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo "</script>";
      }
   }

   function relfichavisitaCreate($sender, $params)
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

      //*** Carrega Representantes
      $this->mgt_rel_representante->Clear();

      $Comando_SQL = "select Distinct(mgt_cliente_vendedor), mgt_representante_nome from mgt_clientes,mgt_representantes Where mgt_cliente_vendedor = mgt_representante_codigo order by mgt_cliente_cep";

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
      GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

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

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }
   function relfichavisitaJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relfichavisita;

//Creates the form
$relfichavisita = new relfichavisita($application);

//Read from resource file
$relfichavisita->loadResource(__FILE__);

//Shows the form
$relfichavisita->show();

?>