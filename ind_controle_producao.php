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
use_unit("mysql.inc.php");
use_unit("jquery/jquery.inc.php");
use_unit("comctrls.inc.php");
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
class indcontroleproducao extends Page
{
   public $registros = null;
   public $mgt_programa_producao_qtde_produzida = null;
   public $qtde_adicionar = null;
   public $total_produzido = null;
   public $mgt_programa_producao_qtde_produzir = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label2 = null;
   public $bt_registrar_qtde = null;
   public $mgt_programa_producao_produto_descricao = null;
   public $Label10 = null;
   public $Label9 = null;
   public $mgt_programa_producao_produto_codigo = null;
   public $mgt_programa_producao_nro = null;
   public $Label1 = null;
   public $busca_programa_producao = null;
   public $bt_buscar = null;
   public $Label15 = null;
   public $GroupBox2 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $area_sistema = null;
   public $Label12 = null;
   public $busca_programa_producao_data_inicio = null;
   public $Label14 = null;
   public $busca_programa_producao_data_fim = null;
   function bt_registrar_qtdeClick($sender, $params)
   {
      if($this->qtde_adicionar->Text > 0)
      {
         //*** Seleciona o Produto ***
         $Comando_SQL = "select * from mgt_produtos where mgt_produto_codigo = '" . trim($this->mgt_programa_producao_produto_codigo->Text) . "'";

         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         //*** Atualiza Movto de Estoque
         $Comando_SQL = "insert into mgt_movtos_estoque(";
         $Comando_SQL .= "mgt_movto_produto_codigo, ";
         $Comando_SQL .= "mgt_movto_produto_codigo_interno, ";
         $Comando_SQL .= "mgt_movto_produto_titulo, ";
         $Comando_SQL .= "mgt_movto_tipo, ";
         $Comando_SQL .= "mgt_movto_data, ";
         $Comando_SQL .= "mgt_movto_qtde_anterior, ";
         $Comando_SQL .= "mgt_movto_qtde_informada, ";
         $Comando_SQL .= "mgt_movto_qtde_atual, ";
         $Comando_SQL .= "mgt_movto_nota, ";
         $Comando_SQL .= "mgt_movto_nro_entrada_saida, ";
         $Comando_SQL .= "mgt_movto_observacao) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . trim($this->mgt_programa_producao_produto_codigo->Text) . "',";
         $Comando_SQL .= "'',";
         $Comando_SQL .= "'" . trim($this->mgt_programa_producao_produto_descricao->Text) . "',";
         $Comando_SQL .= "1,";
         $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
         $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'] . "',";
         $Comando_SQL .= "'" . trim($this->qtde_adicionar->Text) . "',";
         $Comando_SQL .= "'" . (GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'] + $this->qtde_adicionar->Text) . "',";
         $Comando_SQL .= "0,";
         $Comando_SQL .= "0,";
         $Comando_SQL .= "'Controle de Producao Nro.: " . trim($this->mgt_programa_producao_nro->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Atualiza Produto ***
         $Comando_SQL = "update mgt_produtos set ";
         $Comando_SQL .= "mgt_produto_estoque_atual = '" . (GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'] + $this->qtde_adicionar->Text) . "' ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_produto_codigo = '" . trim($this->mgt_programa_producao_produto_codigo->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Atualiza o Programa de Producao ***
         $Comando_SQL = "update mgt_programa_producao set ";
         $Comando_SQL .= "mgt_programa_producao_ordens = '" . trim($this->mgt_programa_producao_nro->Text) . "', ";
         $Comando_SQL .= "mgt_programa_producao_qtde_produzida = '" . trim($this->total_produzido->Text) . "' ";

         if( $this->total_produzido->Text >= $this->mgt_programa_producao_qtde_produzir->Text )
         {
           $Comando_SQL .= ", mgt_programa_producao_planejamento = 'Finalizado', ";
           $Comando_SQL .= "mgt_programa_producao_data_fim  = '" . date("Y-m-d", time()) . "' ";
         }

         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_programa_producao_nro  = '" . trim($this->mgt_programa_producao_nro->Text) . "' AND ";
         $Comando_SQL .= "mgt_programa_producao_produto_codigo = '" . trim($this->mgt_programa_producao_produto_codigo->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Limpa os Campos para o Proximo Controle ***
         $this->MSG_Erro->Caption = 'Controle de Producao Nro.: ' . trim($this->mgt_programa_producao_nro->Text) . ' para o Produto ' . trim($this->mgt_programa_producao_produto_codigo->Text) . ' - ' . trim($this->mgt_programa_producao_produto_descricao->Text) . ', foi Registrado !';

         $this->mgt_programa_producao_nro->Text = '';
         $this->mgt_programa_producao_produto_codigo->Text = '';
         $this->mgt_programa_producao_produto_descricao->Text = '';
         $this->mgt_programa_producao_qtde_produzir->Text = '0';
         $this->qtde_adicionar->Text = '0';
         $this->total_produzido->Text = '0';
         $this->mgt_programa_producao_qtde_produzida->Value = '0';

         //*** Atualiza a ultima busca do Controle ***

         $Comando_SQL = "select ";
         $Comando_SQL .= "mgt_programa_producao_nro, ";
         $Comando_SQL .= "mgt_programa_producao_tipo_codigo, ";
         $Comando_SQL .= "mgt_programa_producao_tipo, ";
         $Comando_SQL .= "mgt_programa_producao_produto_codigo, ";
         $Comando_SQL .= "mgt_programa_producao_produto_descricao, ";
         $Comando_SQL .= "mgt_programa_producao_produto_lote, ";
         $Comando_SQL .= "IF(((mgt_programa_producao_qtde_vendida - TRUNCATE(mgt_programa_producao_qtde_vendida,0)) > 0),mgt_programa_producao_qtde_vendida,SUBSTRING_INDEX(mgt_programa_producao_qtde_vendida, '.', 1)) AS mgt_programa_producao_qtde_vendida, ";
         $Comando_SQL .= "IF(((mgt_programa_producao_qtde_estoque - TRUNCATE(mgt_programa_producao_qtde_estoque,0)) > 0),mgt_programa_producao_qtde_estoque,SUBSTRING_INDEX(mgt_programa_producao_qtde_estoque, '.', 1)) AS mgt_programa_producao_qtde_estoque, ";
         $Comando_SQL .= "IF(((mgt_programa_producao_qtde_produzir - TRUNCATE(mgt_programa_producao_qtde_produzir,0)) > 0),mgt_programa_producao_qtde_produzir,SUBSTRING_INDEX(mgt_programa_producao_qtde_produzir, '.', 1)) AS mgt_programa_producao_qtde_produzir, ";
         $Comando_SQL .= "date_format(mgt_programa_producao_data_inicio, '%d/%m/%Y') AS mgt_programa_producao_data_inicio, ";
         $Comando_SQL .= "date_format(mgt_programa_producao_data_fim, '%d/%m/%Y') AS mgt_programa_producao_data_fim, ";
         $Comando_SQL .= "mgt_programa_producao_porcentagem_reserva, ";
         $Comando_SQL .= "mgt_programa_producao_planejamento, ";
         $Comando_SQL .= "mgt_programa_producao_ordens, ";
         $Comando_SQL .= "IF(((mgt_programa_producao_qtde_produzida - TRUNCATE(mgt_programa_producao_qtde_produzida,0)) > 0),mgt_programa_producao_qtde_produzida,SUBSTRING_INDEX(mgt_programa_producao_qtde_produzida, '.', 1)) AS mgt_programa_producao_qtde_produzida ";
         $Comando_SQL .= "from mgt_programa_producao ";

         if((trim($this->busca_programa_producao->Text) <> '') Or (trim($this->busca_programa_producao_data_inicio->Text) <> '') Or (trim($this->busca_programa_producao_data_fim->Text) <> ''))
         {
            $Comando_SQL .= "Where ";
         }

         if((trim($this->busca_programa_producao->Text) <> ''))
         {
            $Comando_SQL .= "mgt_programa_producao_nro = '" . trim($this->busca_programa_producao->Text) . "' ";

            if((trim($this->busca_programa_producao_data_inicio->Text) <> '') Or (trim($this->busca_programa_producao_data_fim->Text) <> ''))
            {
               $Comando_SQL .= "AND ";
            }
         }

         if((trim($this->busca_programa_producao_data_inicio->Text) <> '') Or (trim($this->busca_programa_producao_data_fim->Text) <> ''))
         {
            $Comando_SQL .= "(mgt_programa_producao_data_inicio >= '" . inverte_data_dma_to_amd(trim($this->busca_programa_producao_data_inicio->Text)) . "' AND ";
            $Comando_SQL .= "mgt_programa_producao_data_fim <= '" . inverte_data_dma_to_amd(trim($this->busca_programa_producao_data_fim->Text)) . "') ";
         }

         $Comando_SQL .= "Order By ";
         $Comando_SQL .= "mgt_programa_producao_nro Desc, ";
         $Comando_SQL .= "mgt_programa_producao_produto_codigo Asc";

         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Close();
         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Open();
      }
      else
      {
         $this->MSG_Erro->Caption = 'Nenhuma Quantidade a ser Adcionada foi informada !';
      }
   }

   function qtde_adicionarJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.indcontroleproducao.qtde_adicionar
   var digits="0123456789.,"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }
   campo.value = campo.value.replace(',','.');

   //*** FINAL - So Valor ***

   //*** Totaliza ***

   document.indcontroleproducao.total_produzido.value = (parseFloat(document.indcontroleproducao.mgt_programa_producao_qtde_produzida.value) + parseFloat(document.indcontroleproducao.qtde_adicionar.value)).toFixed(2);

      <?php

   }

   function total_produzidoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indcontroleproducao.bt_registrar_qtde.focus();
     return false;
   }

      <?php

   }

   function qtde_adicionarJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indcontroleproducao.total_produzido.focus();
     return false;
   }

      <?php

   }

   function mgt_programa_producao_qtde_produzirJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indcontroleproducao.qtde_adicionar.focus();
     return false;
   }

      <?php

   }

   function registrosJSRowChanged($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** Obtem o Registro Clicado ***

   if ( registros.getTableModel().getValue(11, registros.getFocusedRow()) == 'Gerado' )
   {
     document.indcontroleproducao.mgt_programa_producao_nro.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
     document.indcontroleproducao.mgt_programa_producao_produto_codigo.value = registros.getTableModel().getValue(3, registros.getFocusedRow());
     document.indcontroleproducao.mgt_programa_producao_produto_descricao.value = registros.getTableModel().getValue(4, registros.getFocusedRow());
     document.indcontroleproducao.mgt_programa_producao_qtde_produzida.value = registros.getTableModel().getValue(13, registros.getFocusedRow());
     document.indcontroleproducao.mgt_programa_producao_qtde_produzir.value = registros.getTableModel().getValue(7, registros.getFocusedRow());
     document.indcontroleproducao.qtde_adicionar.value = 0;
     document.indcontroleproducao.total_produzido.value = (document.indcontroleproducao.mgt_programa_producao_qtde_produzida.value + document.indcontroleproducao.qtde_adicionar.value).toFixed(2);
   }
   else
   {
     if ( registros.getTableModel().getValue(11, registros.getFocusedRow()) == 'Finalizado' )
     {
       alert('ATENCAO: Este Programa de Producao ja esta Finalizado!');
     }
     else
     {
       alert('ATENCAO: Voce deve gerar o Planejamento de Necessidades primeiro!');
     }
   }

      <?php

   }

   function mgt_programa_producao_produto_descricaoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indcontroleproducao.mgt_programa_producao_qtde_produzir.focus();
     return false;
   }

      <?php

   }

   function mgt_programa_producao_produto_codigoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indcontroleproducao.mgt_programa_producao_produto_descricao.focus();
     return false;
   }

      <?php

   }

   function mgt_programa_producao_nroJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indcontroleproducao.mgt_programa_producao_produto_codigo.focus();
     return false;
   }

      <?php

   }


   function bt_buscarClick($sender, $params)
   {
      //*** Efetua a Busca da Programacao ***

      $Comando_SQL = "select ";
      $Comando_SQL .= "mgt_programa_producao_nro, ";
      $Comando_SQL .= "mgt_programa_producao_tipo_codigo, ";
      $Comando_SQL .= "mgt_programa_producao_tipo, ";
      $Comando_SQL .= "mgt_programa_producao_produto_codigo, ";
      $Comando_SQL .= "mgt_programa_producao_produto_descricao, ";
      $Comando_SQL .= "mgt_programa_producao_produto_lote, ";
      $Comando_SQL .= "IF(((mgt_programa_producao_qtde_vendida - TRUNCATE(mgt_programa_producao_qtde_vendida,0)) > 0),mgt_programa_producao_qtde_vendida,SUBSTRING_INDEX(mgt_programa_producao_qtde_vendida, '.', 1)) AS mgt_programa_producao_qtde_vendida, ";
      $Comando_SQL .= "IF(((mgt_programa_producao_qtde_estoque - TRUNCATE(mgt_programa_producao_qtde_estoque,0)) > 0),mgt_programa_producao_qtde_estoque,SUBSTRING_INDEX(mgt_programa_producao_qtde_estoque, '.', 1)) AS mgt_programa_producao_qtde_estoque, ";
      $Comando_SQL .= "IF(((mgt_programa_producao_qtde_produzir - TRUNCATE(mgt_programa_producao_qtde_produzir,0)) > 0),mgt_programa_producao_qtde_produzir,SUBSTRING_INDEX(mgt_programa_producao_qtde_produzir, '.', 1)) AS mgt_programa_producao_qtde_produzir, ";
      $Comando_SQL .= "date_format(mgt_programa_producao_data_inicio, '%d/%m/%Y') AS mgt_programa_producao_data_inicio, ";
      $Comando_SQL .= "date_format(mgt_programa_producao_data_fim, '%d/%m/%Y') AS mgt_programa_producao_data_fim, ";
      $Comando_SQL .= "mgt_programa_producao_porcentagem_reserva, ";
      $Comando_SQL .= "mgt_programa_producao_planejamento, ";
      $Comando_SQL .= "mgt_programa_producao_ordens, ";
      $Comando_SQL .= "IF(((mgt_programa_producao_qtde_produzida - TRUNCATE(mgt_programa_producao_qtde_produzida,0)) > 0),mgt_programa_producao_qtde_produzida,SUBSTRING_INDEX(mgt_programa_producao_qtde_produzida, '.', 1)) AS mgt_programa_producao_qtde_produzida ";
      $Comando_SQL .= "from mgt_programa_producao ";

      if((trim($this->busca_programa_producao->Text) <> '') Or (trim($this->busca_programa_producao_data_inicio->Text) <> '') Or (trim($this->busca_programa_producao_data_fim->Text) <> ''))
      {
         $Comando_SQL .= "Where ";
      }

      if((trim($this->busca_programa_producao->Text) <> ''))
      {
         $Comando_SQL .= "mgt_programa_producao_nro = '" . trim($this->busca_programa_producao->Text) . "' ";

         if((trim($this->busca_programa_producao_data_inicio->Text) <> '') Or (trim($this->busca_programa_producao_data_fim->Text) <> ''))
         {
            $Comando_SQL .= "AND ";
         }
      }

      if((trim($this->busca_programa_producao_data_inicio->Text) <> '') Or (trim($this->busca_programa_producao_data_fim->Text) <> ''))
      {
         $Comando_SQL .= "(mgt_programa_producao_data_inicio >= '" . inverte_data_dma_to_amd(trim($this->busca_programa_producao_data_inicio->Text)) . "' AND ";
         $Comando_SQL .= "mgt_programa_producao_data_fim <= '" . inverte_data_dma_to_amd(trim($this->busca_programa_producao_data_fim->Text)) . "') ";
      }

      $Comando_SQL .= "Order By ";
      $Comando_SQL .= "mgt_programa_producao_nro Desc, ";
      $Comando_SQL .= "mgt_programa_producao_produto_codigo Asc";

      GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Close();
      GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Programa_Producao->EOF) == 1)
      {
         $this->MSG_Erro->Caption = 'Nenhum Programa de Producao foi encontrado com o Numero Solicitado.';
      }
   }

   function busca_programa_producaoJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.indcontroleproducao.busca_planejamento_necessidades
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

   function busca_programa_producaoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indcontroleproducao.bt_buscar.focus();
     return false;
   }

      <?php

   }


   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function indcontroleproducaoCreate($sender, $params)
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

      $this->MSG_Erro->Caption = "";

      $this->busca_programa_producao->Text = '';
      $this->mgt_programa_producao_nro->Text = '';
      $this->mgt_programa_producao_produto_codigo->Text = '';
      $this->mgt_programa_producao_produto_descricao->Text = '';
      $this->mgt_programa_producao_qtde_produzir->Text = '0';
      $this->qtde_adicionar->Text = '0';
      $this->total_produzido->Text = '0';
      $this->mgt_programa_producao_qtde_produzida->Value = '0';

      //*** Carrega os Programas de Producao Ja Realizados ***

      $Comando_SQL = "select ";
      $Comando_SQL .= "* ";
      $Comando_SQL .= "from mgt_planejamento_necessidades ";
      $Comando_SQL .= "Order By ";
      $Comando_SQL .= "mgt_planejamento_necessidade_produto_codigo";

      GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Close();
      GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Open();
   }

   function indcontroleproducaoJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

      <?php

   }
   function busca_programa_producao_data_inicioJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Data ***

        var campo = document.indcontroleproducao.busca_programa_producao_data_inicio
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

        //end
      <?php
   }
   function busca_programa_producao_data_inicioJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indcontroleproducao.busca_programa_producao_data_fim.focus();
          return false;
        }

        //end
      <?php
   }
   function busca_programa_producao_data_fimJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indcontroleproducao.bt_busca_programa.focus();
          return false;
        }

        //end
      <?php
   }
   function busca_programa_producao_data_fimJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Data ***

        var campo = document.indcontroleproducao.busca_programa_producao_data_fim
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

        //end
      <?php
   }

}

global $application;

global $indcontroleproducao;

//Creates the form
$indcontroleproducao = new indcontroleproducao($application);

//Read from resource file
$indcontroleproducao->loadResource(__FILE__);

//Shows the form
$indcontroleproducao->show();

?>