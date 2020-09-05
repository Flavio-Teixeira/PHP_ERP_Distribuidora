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
class venmapaproducaoalt extends Page
{
   public $bt_expedicao = null;
   public $bt_estoque = null;
   public $qtde_adiciona_problemas = null;
   public $qtde_adiciona_produzida = null;
   public $mgt_mapa_produto_quantidade_problemas = null;
   public $mgt_mapa_produto_quantidade_produzido = null;
   public $mgt_mapa_produto_quantidade_producao = null;
   public $mgt_mapa_produto_quantidade_solicitada = null;
   public $mgt_mapa_produto_descricao = null;
   public $mgt_mapa_produto_codigo = null;
   public $mgt_mapa_produto_status = null;
   public $mgt_mapa_cliente_nome = null;
   public $mgt_mapa_cliente_codigo = null;
   public $mgt_mapa_data_entrega = null;
   public $mgt_mapa_data = null;
   public $mgt_mapa_produto_numero_pedido = null;
   public $mgt_mapa_produto_numero = null;
   public $Label29 = null;
   public $Label28 = null;
   public $Label27 = null;
   public $Label25 = null;
   public $Label24 = null;
   public $Label23 = null;
   public $Label22 = null;
   public $Label21 = null;
   public $Label20 = null;
   public $Label17 = null;
   public $Label16 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $mgt_operacao_cadastro_motivo = null;
   public $Label11 = null;
   public $Label3 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $confirmacao = null;
   public $bt_excluir = null;
   public $bt_alterar = null;
   public $MSG_Erro = null;
   public $Label1 = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function bt_expedicaoClick($sender, $params)
   {
      if((trim($this->mgt_mapa_produto_status->Text) == 'Produzido')Or(trim($this->mgt_mapa_produto_status->Text) == 'Expedicao'))
      {
         //*** Seleciona a Solicitacao do Estoque ***

         $Comando_SQL = "Select ";
         $Comando_SQL .= "* ";
         $Comando_SQL .= "from ";
         $Comando_SQL .= "mgt_expedicao ";
         $Comando_SQL .= "where ";
         $Comando_SQL .= "mgt_expedicao_observacao Like '%" . "Mapa: " . trim($this->mgt_mapa_produto_numero->Text) . ", Pedido: " . trim($this->mgt_mapa_produto_numero_pedido->Text) . "%' ";
         $Comando_SQL .= "Order By mgt_expedicao_nro Desc";

         GetConexaoPrincipal()->SQL_MGT_Expedicao->Close();
         GetConexaoPrincipal()->SQL_MGT_Expedicao->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Expedicao->Open();

         //*** Abre a Tela de Solicitacao do Estoque ***

         if(trim(GetConexaoPrincipal()->SQL_MGT_Expedicao->Fields['mgt_expedicao_nro']) <> '')
         {
            //*** Restaura a Ultima Selecao Efetuada ***
            GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Close();
            GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->SQL = $_SESSION['comando_sql_grid'];
            GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Open();

            echo '<script language="JavaScript">';
            echo "window.open('exp_passagem_imp.php?mgt_expedicao_nro=" . trim(GetConexaoPrincipal()->SQL_MGT_Expedicao->Fields['mgt_expedicao_nro']) . "','exp_passagem_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
            echo 'window.location="ven_mapa_producao.php";';
            echo '</script>';
         }
         else
         {
            //*** Altera o Status do Pedido ***

            $Comando_SQL = "update ";
            $Comando_SQL .= "mgt_pedidos ";
            $Comando_SQL .= "set ";
            $Comando_SQL .= "mgt_pedido_status = 'Expedicao' ";
            $Comando_SQL .= " where ";
            $Comando_SQL .= "mgt_pedido_numero = " . trim($this->mgt_mapa_produto_numero_pedido->Text);

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Altera o Status do Mapa de Produtos ***

            $Comando_SQL = "update ";
            $Comando_SQL .= "mgt_mapas_produtos ";
            $Comando_SQL .= "set ";
            $Comando_SQL .= "mgt_mapa_produto_status = 'Expedicao' ";
            $Comando_SQL .= " where ";
            $Comando_SQL .= "mgt_mapa_produto_numero = " . trim($this->mgt_mapa_produto_numero->Text);
            $Comando_SQL .= " And mgt_mapa_produto_numero_pedido = " . trim($this->mgt_mapa_produto_numero_pedido->Text);

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Insere a Solicitacao no Estoque ***

            $Comando_SQL = "Insert into mgt_expedicao ";
            $Comando_SQL .= "(";
            $Comando_SQL .= "mgt_expedicao_data_solicitacao, ";
            $Comando_SQL .= "mgt_expedicao_solicitante, ";
            $Comando_SQL .= "mgt_expedicao_codigo, ";
            $Comando_SQL .= "mgt_expedicao_descricao, ";
            $Comando_SQL .= "mgt_expedicao_qtde_solicitada, ";
            $Comando_SQL .= "mgt_expedicao_qtde_entregue, ";
            $Comando_SQL .= "mgt_expedicao_data_entregua, ";
            $Comando_SQL .= "mgt_expedicao_status, ";
            $Comando_SQL .= "mgt_expedicao_observacao";
            $Comando_SQL .= ") ";
            $Comando_SQL .= "values";
            $Comando_SQL .= "(";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
            $Comando_SQL .= "'" . trim($_SESSION['login_usuario']) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_mapa_produto_codigo->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_mapa_produto_descricao->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_mapa_produto_quantidade_produzido->Text) . "',";
            $Comando_SQL .= "'0', ";
            $Comando_SQL .= "'0000-00-00', ";
            $Comando_SQL .= "'Aguardando', ";
            $Comando_SQL .= "'Mapa: " . trim($this->mgt_mapa_produto_numero->Text) . ", Pedido: " . trim($this->mgt_mapa_produto_numero_pedido->Text) . "'";
            $Comando_SQL .= ")";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Seleciona a Solicitacao do Estoque ***

            $Comando_SQL = "Select ";
            $Comando_SQL .= "* ";
            $Comando_SQL .= "from ";
            $Comando_SQL .= "mgt_expedicao ";
            $Comando_SQL .= "where ";
            $Comando_SQL .= "mgt_expedicao_observacao Like '%" . "Mapa: " . trim($this->mgt_mapa_produto_numero->Text) . ", Pedido: " . trim($this->mgt_mapa_produto_numero_pedido->Text) . "%' ";
            $Comando_SQL .= "Order By mgt_expedicao_nro Desc";

            GetConexaoPrincipal()->SQL_MGT_Expedicao->Close();
            GetConexaoPrincipal()->SQL_MGT_Expedicao->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Expedicao->Open();

            //*** Restaura a Ultima Selecao Efetuada ***
            GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Close();
            GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->SQL = $_SESSION['comando_sql_grid'];
            GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Open();

            echo '<script language="JavaScript">';
            echo "window.open('exp_passagem_imp.php?mgt_expedicao_nro=" . trim(GetConexaoPrincipal()->SQL_MGT_Expedicao->Fields['mgt_expedicao_nro']) . "','exp_passagem_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
            echo 'window.location="ven_mapa_producao.php";';
            echo '</script>';
         }
      }
      else
      {
         $this->MSG_Erro->Caption = '<B>So permitido emitir a passagem para a expedicao quando o status estiver PRODUZIDO</B>';
      }
   }

   function bt_estoqueClick($sender, $params)
   {
      if(($this->mgt_mapa_produto_quantidade_producao->Text <= 0)And(trim($this->mgt_mapa_produto_status->Text) <> 'Solicitado'))
      {
         //*** Altera o Status ***

         $Comando_SQL = "update ";
         $Comando_SQL .= "mgt_mapas_produtos ";
         $Comando_SQL .= "set ";
         $Comando_SQL .= "mgt_mapa_produto_status = 'Solicitado' ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_mapa_produto_numero = " . trim($this->mgt_mapa_produto_numero->Text);
         $Comando_SQL .= " And mgt_mapa_produto_numero_pedido = " . trim($this->mgt_mapa_produto_numero_pedido->Text);

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Insere a Solicitacao no Estoque ***

         $Comando_SQL = "Insert into mgt_solicitacoes_estoque ";
         $Comando_SQL .= "(";
         $Comando_SQL .= "mgt_solicitacao_estoque_data_solicitacao, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_solicitante, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_codigo, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_descricao, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_codigo_referencia, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_descricao_referencia, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_qtde_solicitada, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_qtde_entregue, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_data_entregua, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_status, ";
         $Comando_SQL .= "mgt_solicitacao_estoque_observacao";
         $Comando_SQL .= ") ";
         $Comando_SQL .= "values";
         $Comando_SQL .= "(";
         $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
         $Comando_SQL .= "'" . trim($_SESSION['login_usuario']) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_mapa_produto_codigo->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_mapa_produto_descricao->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_mapa_produto_codigo->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_mapa_produto_descricao->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_mapa_produto_quantidade_solicitada->Text) . "',";
         $Comando_SQL .= "'0', ";
         $Comando_SQL .= "'0000-00-00', ";
         $Comando_SQL .= "'Aguardando', ";
         $Comando_SQL .= "'Mapa: " . trim($this->mgt_mapa_produto_numero->Text) . ", Pedido: " . trim($this->mgt_mapa_produto_numero_pedido->Text) . "'";
         $Comando_SQL .= ")";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();
      }

      //*** Seleciona a Solicitacao do Estoque ***

      $Comando_SQL = "Select ";
      $Comando_SQL .= "* ";
      $Comando_SQL .= "from ";
      $Comando_SQL .= "mgt_solicitacoes_estoque ";
      $Comando_SQL .= "where ";
      $Comando_SQL .= "mgt_solicitacao_estoque_observacao Like '%" . "Mapa: " . trim($this->mgt_mapa_produto_numero->Text) . ", Pedido: " . trim($this->mgt_mapa_produto_numero_pedido->Text) . "%' ";
      $Comando_SQL .= "Order By mgt_solicitacao_estoque_nro Desc";

      GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Close();
      GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Open();

      //*** Abre a Tela de Solicitacao do Estoque ***

      if(trim(GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Fields['mgt_solicitacao_estoque_nro']) <> '')
      {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Open();

         echo '<script language="JavaScript">';
         echo "window.open('est_solicitacao_imp.php?mgt_solicitacao_estoque_nro=" . trim(GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Fields['mgt_solicitacao_estoque_nro']) . "','est_solicitacao_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo 'window.location="ven_mapa_producao.php";';
         echo '</script>';
      }
   }

   function qtde_adiciona_problemasJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.venmapaproducaoalt.qtde_adiciona_problemas;
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

   function qtde_adiciona_produzidaJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** INICIO - So Valor ***

      var campo = document.venmapaproducaoalt.qtde_adiciona_produzida;
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

   function qtde_adiciona_problemasJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.bt_alterar.focus();
     return false;
   }

<?php

   }

   function qtde_adiciona_produzidaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.qtde_adiciona_problemas.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_produto_quantidade_problemasJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.qtde_adiciona_problemas.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_produto_quantidade_produzidoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.qtde_adiciona_produzida.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_produto_quantidade_producaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.mgt_mapa_produto_quantidade_produzido.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_produto_quantidade_solicitadaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.mgt_mapa_produto_quantidade_producao.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_produto_descricaoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.mgt_mapa_produto_quantidade_solicitada.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_produto_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.mgt_mapa_produto_descricao.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_produto_statusJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.mgt_mapa_produto_codigo.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_cliente_nomeJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.mgt_mapa_produto_status.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_cliente_codigoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.mgt_mapa_cliente_nome.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_data_entregaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.mgt_mapa_cliente_codigo.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_dataJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.mgt_mapa_data_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_produto_numero_pedidoJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.mgt_mapa_data.focus();
     return false;
   }

<?php

   }

   function mgt_mapa_produto_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venmapaproducaoalt.mgt_mapa_produto_numero_pedido.focus();
     return false;
   }

<?php

   }


   function bt_simClick($sender, $params)
   {
      if(trim($this->mgt_operacao_cadastro_motivo->text) <> '')
      {
         //*** Registra o motivo da exclusao do registro. ***

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
         $Comando_SQL .= "'" . 'Exclusao' . "',";
         $Comando_SQL .= "'" . trim($this->mgt_mapa_produto_numero->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_mapas_produtos ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_mapa_produto_numero = " . trim($this->mgt_mapa_produto_numero->Text);
         $Comando_SQL .= " And mgt_mapa_produto_numero_pedido = " . trim($this->mgt_mapa_produto_numero_pedido->Text);

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->confirmacao->Top = 284;
         $this->confirmacao->IsVisible = false;

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Open();

         redirect('ven_mapa_producao.php');
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 284;
      $this->confirmacao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 76;
      $this->confirmacao->IsVisible = true;
   }

   function venmapaproducaoaltCreate($sender, $params)
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

      $mgt_mapa_produto_numero = $_REQUEST['mgt_mapa_produto_numero'];
      $mgt_mapa_produto_numero_pedido = $_REQUEST['mgt_mapa_produto_numero_pedido'];

      $Comando_SQL = "select ";
      $Comando_SQL .= "mgt_mapa_produto_numero, ";
      $Comando_SQL .= "mgt_mapa_cliente_codigo, ";
      $Comando_SQL .= "mgt_mapa_cliente_nome, ";
      $Comando_SQL .= "mgt_mapa_produto_codigo, ";
      $Comando_SQL .= "mgt_mapa_produto_descricao, ";
      $Comando_SQL .= "mgt_mapa_produto_numero_pedido, ";
      $Comando_SQL .= "mgt_mapa_data, ";
      $Comando_SQL .= "mgt_mapa_data_entrega, ";
      $Comando_SQL .= "date_format(mgt_mapa_data, '%d/%m/%Y') AS mgt_mapa_data_inv, ";
      $Comando_SQL .= "date_format(mgt_mapa_data_entrega, '%d/%m/%Y') AS mgt_mapa_data_entrega_inv, ";
      $Comando_SQL .= "if((mgt_mapa_produto_quantidade_solicitada - truncate( mgt_mapa_produto_quantidade_solicitada, 0 ) ) >0, mgt_mapa_produto_quantidade_solicitada, substring( mgt_mapa_produto_quantidade_solicitada, 1, length( mgt_mapa_produto_quantidade_solicitada ) -4 )) As mgt_mapa_produto_quantidade_solicitada, ";
      $Comando_SQL .= "if((mgt_mapa_produto_quantidade_producao - truncate( mgt_mapa_produto_quantidade_producao, 0 ) ) >0, mgt_mapa_produto_quantidade_producao, substring( mgt_mapa_produto_quantidade_producao, 1, length( mgt_mapa_produto_quantidade_producao ) -4 )) As mgt_mapa_produto_quantidade_producao, ";
      $Comando_SQL .= "if((mgt_mapa_produto_quantidade_produzido - truncate( mgt_mapa_produto_quantidade_produzido, 0 ) ) >0, mgt_mapa_produto_quantidade_produzido, substring( mgt_mapa_produto_quantidade_produzido, 1, length( mgt_mapa_produto_quantidade_produzido ) -4 )) As mgt_mapa_produto_quantidade_produzido, ";
      $Comando_SQL .= "if((mgt_mapa_produto_quantidade_problemas - truncate( mgt_mapa_produto_quantidade_problemas, 0 ) ) >0, mgt_mapa_produto_quantidade_problemas, substring( mgt_mapa_produto_quantidade_problemas, 1, length( mgt_mapa_produto_quantidade_problemas ) -4 )) As mgt_mapa_produto_quantidade_problemas, ";
      $Comando_SQL .= "mgt_mapa_produto_status ";
      $Comando_SQL .= "from ";
      $Comando_SQL .= "mgt_mapas, ";
      $Comando_SQL .= "mgt_mapas_produtos ";
      $Comando_SQL .= " where ";
      $Comando_SQL .= "mgt_mapa_produto_numero = " . trim($mgt_mapa_produto_numero);
      $Comando_SQL .= " And mgt_mapa_produto_numero_pedido = " . trim($mgt_mapa_produto_numero_pedido);
      $Comando_SQL .= " And mgt_mapa_numero = mgt_mapa_produto_numero_pedido ";
      $Comando_SQL .= "Group By ";
      $Comando_SQL .= "mgt_mapa_produto_numero, mgt_mapa_produto_numero_pedido ";
      $Comando_SQL .= "Order By ";
      $Comando_SQL .= "mgt_mapa_data_entrega Asc, mgt_mapa_produto_numero_pedido Asc";

      GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Open();

      $this->mgt_mapa_produto_numero->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_numero'];
      $this->mgt_mapa_produto_numero_pedido->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_numero_pedido'];
      $this->mgt_mapa_data->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_data_inv'];
      $this->mgt_mapa_data_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_data_entrega_inv'];
      $this->mgt_mapa_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_cliente_codigo'];
      $this->mgt_mapa_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_cliente_nome'];
      $this->mgt_mapa_produto_status->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_status'];
      $this->mgt_mapa_produto_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_codigo'];
      $this->mgt_mapa_produto_descricao->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_descricao'];
      $this->mgt_mapa_produto_quantidade_solicitada->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_quantidade_solicitada'];
      $this->mgt_mapa_produto_quantidade_producao->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_quantidade_producao'];
      $this->mgt_mapa_produto_quantidade_produzido->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_quantidade_produzido'];
      $this->mgt_mapa_produto_quantidade_problemas->Text = GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Fields['mgt_mapa_produto_quantidade_problemas'];

      $this->MSG_Erro->Caption = "";
      $this->qtde_adiciona_produzida->Text = '';
      $this->qtde_adiciona_problemas->Text = '';
   }

   function bt_fecharClick($sender, $params)
   {
      //*** Restaura a Ultima Selecao Efetuada ***
      GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->SQL = $_SESSION['comando_sql_grid'];
      GetConexaoPrincipal()->SQL_MGT_Mapas_Produtos->Open();

      redirect('ven_mapa_producao.php');
   }

   function bt_alterarClick($sender, $params)
   {
      if($this->mgt_mapa_produto_quantidade_producao->Text > 0)
      {
         if(($this->mgt_mapa_produto_quantidade_produzido->Text + $this->mgt_mapa_produto_quantidade_problemas->Text + $this->qtde_adiciona_produzida->Text + $this->qtde_adiciona_problemas->Text) > ($this->mgt_mapa_produto_quantidade_solicitada->Text))
         {
            $this->MSG_Erro->Caption = '<B>A somatoria a ser informada e maior que a solicitada pelo cliente.</B>';
         }
         else
         {
            $Comando_SQL = "update ";
            $Comando_SQL .= "mgt_mapas_produtos ";
            $Comando_SQL .= "set ";
            $Comando_SQL .= "mgt_mapa_produto_quantidade_produzido = " . ($this->mgt_mapa_produto_quantidade_produzido->Text + $this->qtde_adiciona_produzida->Text) . ", ";
            $Comando_SQL .= "mgt_mapa_produto_quantidade_problemas = " . ($this->mgt_mapa_produto_quantidade_problemas->Text + $this->qtde_adiciona_problemas->Text) . ", ";

            if(($this->mgt_mapa_produto_quantidade_produzido->Text + $this->mgt_mapa_produto_quantidade_problemas->Text + $this->qtde_adiciona_produzida->Text + $this->qtde_adiciona_problemas->Text) == ($this->mgt_mapa_produto_quantidade_solicitada->Text))
            {
               $Comando_SQL .= "mgt_mapa_produto_status = 'Produzido' ";
            }
            else
            {
               $Comando_SQL .= "mgt_mapa_produto_status = 'Em Producao' ";
            }

            $Comando_SQL .= " where ";
            $Comando_SQL .= "mgt_mapa_produto_numero = " . trim($this->mgt_mapa_produto_numero->Text);
            $Comando_SQL .= " And mgt_mapa_produto_numero_pedido = " . trim($this->mgt_mapa_produto_numero_pedido->Text);

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Exibe Mensagem e Redireciona ***
            echo '<script language="JavaScript">';
            echo "alert('Quantidade Registrada !');";
            echo 'window.location="ven_mapa_producao.php";';
            echo '</script>';
         }
      }
      else
      {
         $this->MSG_Erro->Caption = '<B>Solicite ao Departamento de Estoque antes de comecar seu trabalho.</B>';
      }
   }

   function venmapaproducaoaltJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

<?php

   }

   function venmapaproducaoaltJSLoad($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

<?php

   }

}

global $application;

global $venmapaproducaoalt;

//Creates the form
$venmapaproducaoalt = new venmapaproducaoalt($application);

//Read from resource file
$venmapaproducaoalt->loadResource(__FILE__);

//Shows the form
$venmapaproducaoalt->show();

?>