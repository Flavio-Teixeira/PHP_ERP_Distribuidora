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
use_unit("dbgrids.inc.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class relprodutoscomprados extends Page
{
   public $registros = null;
   public $Label5 = null;
   public $dados_procura = null;
   public $Label4 = null;
   public $bt_procurar = null;
   public $tipo = null;
   public $data_final = null;
   public $data_inicial = null;
   public $Label3 = null;
   public $Label2 = null;
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
   function bt_procurarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if((trim($this->data_inicial->Text) != '')And(trim($this->data_final->Text) != ''))
      {
         $this->MSG_Erro->Caption = '';
      }

      if(trim($this->data_inicial->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Inicial';
      }

      else if(trim($this->data_final->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Final';
      }

      if(trim($this->MSG_Erro->Caption) == '')
      {
         $Comando_SQL = "SELECT ";
         $Comando_SQL .= "mgt_ordem_produto_numero_ordem, ";
         $Comando_SQL .= "date_format(mgt_ordem_data, '%d/%m/%Y') AS mgt_ordem_data_dma, ";
         $Comando_SQL .= "mgt_ordem_produto_codigo, ";
         $Comando_SQL .= "mgt_ordem_produto_descricao, ";
         $Comando_SQL .= "mgt_ordem_produto_quantidade, ";
         $Comando_SQL .= "mgt_ordem_produto_valor_unitario, ";
         $Comando_SQL .= "mgt_ordem_produto_valor_total, ";
         $Comando_SQL .= "mgt_ordem_produto_ipi, ";
         $Comando_SQL .= "mgt_ordem_produto_valor_ipi, ";
         $Comando_SQL .= "mgt_ordem_cliente_nome ";
         $Comando_SQL .= "FROM ";
         $Comando_SQL .= "mgt_ordens, ";
         $Comando_SQL .= "mgt_ordens_produtos ";
         $Comando_SQL .= "WHERE ";
         $Comando_SQL .= "mgt_ordem_numero = mgt_ordem_produto_numero_ordem AND ";
         $Comando_SQL .= "(mgt_ordem_data >= '" . inverte_data_dma_to_amd(trim($this->data_inicial->Text)) . "') AND ";
         $Comando_SQL .= "(mgt_ordem_data <= '" . inverte_data_dma_to_amd(trim($this->data_final->Text)) . "') ";

         if($this->tipo->Items[$this->tipo->ItemIndex] == 'Fornecedor')
         {
            if(trim($this->dados_procura->Text) <> '')
            {
               $Comando_SQL .= "AND mgt_ordem_cliente_nome LIKE '%" . trim($this->dados_procura->Text) . "%' ";
            }
         }
         elseif($this->tipo->Items[$this->tipo->ItemIndex] == 'Desc.Produto')
         {
            if(trim($this->dados_procura->Text) <> '')
            {
               $Comando_SQL .= "AND mgt_ordem_produto_descricao LIKE '%" . trim($this->dados_procura->Text) . "%' ";
            }
         }
         elseif($this->tipo->Items[$this->tipo->ItemIndex] == 'Cod.Produto')
         {
            if(trim($this->dados_procura->Text) <> '')
            {
               $Comando_SQL .= "AND mgt_ordem_produto_codigo LIKE '%" . trim($this->dados_procura->Text) . "%' ";
            }
         }

         $Comando_SQL .= "ORDER BY mgt_ordem_data DESC, ";
         $Comando_SQL .= "mgt_ordem_produto_descricao, ";
         $Comando_SQL .= "mgt_ordem_produto_numero_ordem";

         GetConexaoPrincipal()->SQL_MGT_Ordens_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Ordens_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Ordens_Produtos->Open();
      }
   }

   function dados_procuraJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relprodutoscomprados.bt_procurar.focus();
     return false;
   }

<?php

   }


   function data_finalJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.relprodutoscomprados.data_final
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

   function data_inicialJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.relprodutoscomprados.data_inicial
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

   function data_finalJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relprodutoscomprados.bt_procurar.focus();
     return false;
   }

<?php

   }

   function data_inicialJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.relprodutoscomprados.data_final.focus();
     return false;
   }

<?php

   }

   function bt_imprimirClick($sender, $params)
   {
      echo "<script language=\"JavaScript\">";
      echo "window.open('rel_produtos_comprados_imp.php?tipo=" . $this->tipo->Items[$this->tipo->ItemIndex] . "&data_inicial=" . $this->data_inicial->Text . "&data_final=" . $this->data_final->Text . "','rel_produtos_comprados_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
      echo "</script>";
   }

   function relprodutoscompradosCreate($sender, $params)
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

      $this->data_inicial->Text = '01/' . date("m/Y", time());
      $this->data_final->Text = date("d/m/Y", time());

      $this->MSG_Erro->Caption = "";
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }
   function relprodutoscompradosJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $relprodutoscomprados;

//Creates the form
$relprodutoscomprados = new relprodutoscomprados($application);

//Read from resource file
$relprodutoscomprados->loadResource(__FILE__);

//Shows the form
$relprodutoscomprados->show();

?>