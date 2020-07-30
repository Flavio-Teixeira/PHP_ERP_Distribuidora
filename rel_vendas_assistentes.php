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
class relvendasassistentes extends Page
{
   public $assistente_selecao = null;
   public $Label69 = null;
   public $assistente_nome = null;
   public $MSG_Erro = null;
   public $data_final = null;
   public $data_inicial = null;
   public $Label8 = null;
   public $Label1 = null;
   public $bt_adicionar = null;
   public $GroupBox3 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Button1 = null;
   public $Label7 = null;
   public $GroupBox4 = null;
   public $Estilo_Pagina = null;
   public $area_sistema = null;

   function bt_adicionarClick($sender, $params)
   {
      if((trim($this->data_inicial->Text) != '') And (trim($this->data_final->Text) != ''))
      {
         $this->MSG_Erro->Caption = '';
      }

      if(trim($this->assistente_nome->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, selecione o Assistente';
      }

      if(trim($this->data_inicial->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Inicial';
      }

      else
         if(trim($this->data_final->Text) == '')
         {
            $this->MSG_Erro->Caption = 'Por favor, informe a Data Final';
         }

      if(trim($this->MSG_Erro->Caption) == '')
      {
         $_SESSION['imprime_data_inicial'] = $this->data_inicial->Text;
         $_SESSION['imprime_data_final'] = $this->data_final->Text;
         $_SESSION['imprime_assistente_nome'] = $this->assistente_nome->Text;

         echo "<script language=\"JavaScript\">";
         echo "window.open('rel_vendas_assistentes_imp.php','rel_vendas_assistentes_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo "</script>";
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

   function relvendasassistentesCreate($sender, $params)
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

      //*** Carrega os Assistentes ***

      $this->assistente_selecao->Clear();
      $this->assistente_selecao->AddItem('--- TODOS ---', null, '--- TODOS ---');

      $Comando_SQL = "select * from mgt_assistentes order by mgt_assistente_nome";

      GetConexaoPrincipal()->SQL_MGT_Assistentes->Close();
      GetConexaoPrincipal()->SQL_MGT_Assistentes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Assistentes->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Assistentes->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Assistentes->EOF) != 1)
         {
            $this->assistente_selecao->AddItem(GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_nome'], null, GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_codigo'] . '-' . GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_nome']);
            GetConexaoPrincipal()->SQL_MGT_Assistentes->Next();
         }
      }

      //*** Seleciona as Datas para a Impressao ***

      $this->data_inicial->Text = '01/' . date("m/Y", time());
      $this->data_final->Text = date("d/m/Y", time());
   }

   function relvendasassistentesJSLoad($sender, $params)
   {

      ?>
      //Adicione seu codigo javascript aqui

      carregando_pagina();

      <?php

   }

   function data_inicialJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.relvendasassistentes.data_final.focus();
           return false;
        }

        //end
      <?php
   }
   function data_finalJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.relvendasassistentes.bt_adicionar.focus();
           return false;
        }

        //end
      <?php
   }
   function assistente_selecaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.relvendasassistentes.assistente_nome.focus();
           return false;
        }

        //end
      <?php
   }
   function assistente_nomeJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.relvendasassistentes.data_inicial.focus();
           return false;
        }

        //end
      <?php
   }
   function assistente_selecaoJSChange($sender, $params)
   {
      ?>
        //begin js

        document.relvendasassistentes.assistente_nome.value = document.relvendasassistentes.assistente_selecao.value;

        //end
      <?php
   }

}

global $application;

global $relvendasassistentes;

//Creates the form
$relvendasassistentes = new relvendasassistentes($application);

//Read from resource file
$relvendasassistentes->loadResource(__FILE__);

//Shows the form
$relvendasassistentes->show();

?>