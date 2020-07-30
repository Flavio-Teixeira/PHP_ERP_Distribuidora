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
class venpedidospendentes extends Page
{
   public $bt_imprimir = null;
   public $Button1 = null;
   public $Label14 = null;
   public $Label5 = null;
   public $opcao_escolhida_descricao = null;
   public $opcao_escolhida_codigo = null;
   public $opcao_escolhida_tipo = null;
   public $registros_produtos = null;
   public $Label13 = null;
   public $bt_buscar_produto = null;
   public $opcao_busca_produto = null;
   public $dados_busca_produto = null;
   public $Label12 = null;
   public $GroupBox5 = null;
   public $Label11 = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $mgt_rel_dt_fim = null;
   public $Label7 = null;
   public $mgt_rel_dt_ini = null;
   public $Label6 = null;
   public $GroupBox4 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label1 = null;
   public $registros = null;
   public $bt_fechar = null;
   public $bt_buscar = null;
   public $opcao_busca = null;
   public $dados_busca = null;
   public $area_sistema = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label2 = null;
   public $GroupBox3 = null;
   public $GroupBox2 = null;
   public $GroupBox1 = null;
   function mgt_rel_dt_fimJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venpedidospendentes.bt_imprimir.focus();
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
     document.venpedidospendentes.mgt_rel_dt_fim.focus();
     return false;
   }

   <?php

   }

   function mgt_rel_dt_iniJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.venpedidospendentes.mgt_rel_dt_ini
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

   function mgt_rel_dt_fimJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.venpedidospendentes.mgt_rel_dt_fim
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

   function Button1JSClick($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Limpa os Campos de Opcao Escolhida ***

      document.venpedidospendentes.opcao_escolhida_tipo.value = '';
      document.venpedidospendentes.opcao_escolhida_codigo.value = '';
      document.venpedidospendentes.opcao_escolhida_descricao.value = '';

<?php

   }

   function registros_produtosJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Obtem o Registro Clicado dos Produtos ***

      document.venpedidospendentes.opcao_escolhida_tipo.value = 'Produto';
      document.venpedidospendentes.opcao_escolhida_codigo.value = registros_produtos.getTableModel().getValue(0, registros_produtos.getFocusedRow());
      document.venpedidospendentes.opcao_escolhida_descricao.value = registros_produtos.getTableModel().getValue(2, registros_produtos.getFocusedRow());

<?php

   }


   function bt_buscar_produtoClick($sender, $params)
   {
      $this->busca_produtos();
   }

   function opcao_busca_produtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.venpedidospendentes.bt_buscar_produto.focus();
        return false;
      }

<?php

   }

   function dados_busca_produtoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.venpedidospendentes.opcao_busca_produto.focus();
        return false;
      }

<?php

   }

   function dados_busca_produtoJSKeyDown($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

<?php

   }

   public function busca_produtos()
   {
      if(trim($this->dados_busca_produto->Text) == "")
      {
         $Comando_SQL = "select * from mgt_produtos order by mgt_produto_codigo";
      }
      else
      {
         if(trim($this->opcao_busca_produto->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_codigo like '%" . trim($this->dados_busca_produto->Text) . "%' order by mgt_produto_codigo";
         }
         elseif(trim($this->opcao_busca_produto->ItemIndex) == "Referencia")
         {
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_referencia = '" . trim($this->dados_busca_produto->Text) . "' order by mgt_produto_codigo";
         }
         elseif(trim($this->opcao_busca_produto->ItemIndex) == "Descricao")
         {
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_descricao like '%" . trim($this->dados_busca_produto->Text) . "%' order by mgt_produto_codigo";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Produtos->Open();
   }

   public function busca_clientes()
   {
      if(trim($this->dados_busca->Text) == "")
      {
         $Comando_SQL = "select * from mgt_clientes order by mgt_cliente_numero";
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_numero = '" . trim($this->dados_busca->Text) . "' order by mgt_cliente_numero";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Tipo")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_codigo_tipo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_codigo_tipo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Codigo")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_codigo like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_codigo";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Nome")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_nome like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_nome";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Razao Social")
         {
            $Comando_SQL = "select * from mgt_clientes where mgt_cliente_razao_social like '%" . trim($this->dados_busca->Text) . "%' order by mgt_cliente_razao_social";
         }

      }

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
      GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Clientes->Open();
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function opcao_buscaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venpedidospendentes.bt_buscar.focus();
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
     document.venpedidospendentes.opcao_busca.focus();
     return false;
   }

<?php

   }

   function bt_imprimirClick($sender, $params)
   {
      //*** Abre a Tela do Relatorio ***

      echo "<script language=\"JavaScript\">";
      echo "window.open('ven_pedidos_pendentes_imp.php?mgt_rel_dt_ini=" . $this->mgt_rel_dt_ini->Text . "&mgt_rel_dt_fim=" . $this->mgt_rel_dt_fim->Text . "&opcao_escolhida_tipo=" . $this->opcao_escolhida_tipo->Text . "&opcao_escolhida_codigo=" . $this->opcao_escolhida_codigo->Text . "','ven_pedidos_pendentes_imp','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
      echo "</script>";
   }

   function registrosJSRowChanged($sender, $params)
   {

?>
   //Add your javascript code here

      //*** Obtem o Registro Clicado ***

      document.venpedidospendentes.opcao_escolhida_tipo.value = 'Cliente';
      document.venpedidospendentes.opcao_escolhida_codigo.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
      document.venpedidospendentes.opcao_escolhida_descricao.value = registros.getTableModel().getValue(4, registros.getFocusedRow());

<?php

   }

   function bt_buscarClick($sender, $params)
   {
      $this->busca_clientes();
   }

   function venpedidospendentesCreate($sender, $params)
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

      //*** Carrega as Datas do Periodo ***

      $this->mgt_rel_dt_ini->Text = '01/01/' . date("Y", time());
      $this->mgt_rel_dt_fim->Text = date("d/m/Y", time());

      //*** Carrega os Grids ***

      $this->busca_clientes();
      $this->busca_produtos();
   }

   function venpedidospendentesJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $venpedidospendentes;

//Creates the form
$venpedidospendentes = new venpedidospendentes($application);

//Read from resource file
$venpedidospendentes->loadResource(__FILE__);

//Shows the form
$venpedidospendentes->show();

?>