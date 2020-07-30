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
class indprogramaproducao extends Page
{
    public $hd_quantidade_vendida_registro = null;
    public $hd_quantidade_estoque = null;
   public $adiciona_produtos = null;
   public $Label36 = null;
   public $Label37 = null;
   public $Label38 = null;
   public $mgt_adiciona_produto_codigo = null;
   public $Label39 = null;
   public $mgt_adiciona_produto_descricao = null;
   public $bt_adicionar_produto = null;
   public $adiciona_produtos_borda = null;
   public $GroupBox4 = null;
   public $Label34 = null;
   public $Label35 = null;
   public $dados_busca_produto = null;
   public $opcao_busca_produto = null;
   public $bt_busca_produto = null;
   public $registros_produtos_busca = null;
   public $Label40 = null;
   public $mgt_adiciona_produto_referencia = null;
   public $Panel5 = null;
   public $Panel3 = null;
   public $Panel4 = null;
   public $bt_fechar_produto = null;
   public $bt_qtde_produzida = null;
   public $bt_adiciona = null;
   public $Label20 = null;
   public $mgt_quantidade_produzir = null;
   public $Label6 = null;
   public $mgt_programa_producao_qtde_produzida = null;
   public $confirmacao = null;
   public $mgt_operacao_cadastro_motivo = null;
   public $Label17 = null;
   public $Label16 = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $bt_buscar = null;
   public $busca_programa_producao_data_fim = null;
   public $busca_programa_producao_data_inicio = null;
   public $busca_programa_producao_nro = null;
   public $mgt_programa_producao_produto_descricao = null;
   public $mgt_programa_producao_produto_codigo = null;
   public $mgt_programa_producao_nro = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Label13 = null;
   public $Label12 = null;
   public $Label11 = null;
   public $bt_excluir = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Label8 = null;
   public $registros = null;
   public $bt_gerar_programa = null;
   public $porcentagem_reserva = null;
   public $Label7 = null;
   public $programas_gerados = null;
   public $mgt_produto_codigo = null;
   public $Label5 = null;
   public $data_final = null;
   public $data_inicial = null;
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
   public $opcoes = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   public $Label4 = null;
   public $mgt_produto_descricao = null;
   public $Label21 = null;
   public $mgt_produto_lote = null;
   public $Label22 = null;

   function bt_simClick($sender, $params)
   {
      if($this->mgt_programa_producao_qtde_produzida->Value <= 0)
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
            $Comando_SQL .= "'" . trim($this->mgt_programa_producao_nro->Text) . '-' . trim($this->mgt_programa_producao_produto_codigo->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Exclui o registro escolhido ***
            //*** Programa de Producao ***

            $Comando_SQL = "delete from mgt_programa_producao ";
            $Comando_SQL .= " where ";
            $Comando_SQL .= "mgt_programa_producao_nro='" . trim($this->mgt_programa_producao_nro->Text) . "' AND ";
            $Comando_SQL .= "mgt_programa_producao_produto_codigo='" . trim($this->mgt_programa_producao_produto_codigo->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Planejamento de Necessidades ***

            $Comando_SQL = "delete from mgt_planejamento_necessidades ";
            $Comando_SQL .= " where ";
            $Comando_SQL .= "mgt_planejamento_necessidade_nro ='" . trim($this->mgt_programa_producao_nro->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            $this->confirmacao->Top = 527;
            $this->confirmacao->IsVisible = false;

            $this->mgt_programa_producao_nro->Text = '';
            $this->mgt_programa_producao_produto_codigo->Text = '';
            $this->mgt_programa_producao_produto_descricao->Text = '';

            //*** Restaura a Ultima Selecao Efetuada ***
            GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Close();
            GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL = $_SESSION['comando_sql_grid'];
            GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Open();
         }
      }
      else
      {
         $this->MSG_Erro->Caption = 'Este Programa nao pode ser cancelado, pois ja possui porcentagem produzida.';
         $this->confirmacao->Top = 527;
         $this->confirmacao->IsVisible = false;
      }
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 527;
      $this->confirmacao->IsVisible = false;
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 261;
      $this->confirmacao->IsVisible = true;
   }

   function bt_buscarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

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

      if((trim($this->busca_programa_producao_nro->Text) <> '') Or (trim($this->busca_programa_producao_data_inicio->Text) <> '') Or (trim($this->busca_programa_producao_data_fim->Text) <> ''))
      {
         $Comando_SQL .= "Where ";
      }

      if((trim($this->busca_programa_producao_nro->Text) <> ''))
      {
         $Comando_SQL .= "mgt_programa_producao_nro = '" . trim($this->busca_programa_producao_nro->Text) . "' ";

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

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL;
   }

   function busca_programa_producao_data_fimJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.indprogramaproducao.busca_programa_producao_data_fim
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

   function busca_programa_producao_data_inicioJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.indprogramaproducao.busca_programa_producao_data_inicio
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

   function busca_programa_producao_nroJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.indprogramaproducao.busca_programa_producao_nro;
   var digits="0123456789";
   var campo_temp;
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1);
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero ***

      <?php

   }

   function registrosJSRowChanged($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** Obtem o Registro Clicado ***

   document.indprogramaproducao.mgt_programa_producao_nro.value = registros.getTableModel().getValue(0, registros.getFocusedRow());
   document.indprogramaproducao.mgt_programa_producao_produto_codigo.value = registros.getTableModel().getValue(3, registros.getFocusedRow());
   document.indprogramaproducao.mgt_programa_producao_produto_descricao.value = registros.getTableModel().getValue(4, registros.getFocusedRow());
   document.indprogramaproducao.mgt_programa_producao_qtde_produzida.value = registros.getTableModel().getValue(13, registros.getFocusedRow());

      <?php

   }

   function busca_programa_producao_data_fimJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indprogramaproducao.bt_buscar.focus();
     return false;
   }

      <?php

   }

   function busca_programa_producao_data_inicioJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indprogramaproducao.busca_programa_producao_data_fim.focus();
     return false;
   }

      <?php

   }

   function busca_programa_producao_nroJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indprogramaproducao.busca_programa_producao_data_inicio.focus();
     return false;
   }

      <?php

   }

   function mgt_programa_producao_produto_descricaoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indprogramaproducao.bt_excluir.focus();
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
     document.indprogramaproducao.mgt_programa_producao_produto_descricao.focus();
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
     document.indprogramaproducao.mgt_programa_producao_produto_codigo.focus();
     return false;
   }

      <?php

   }

   function bt_gerar_programaClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if((trim($this->data_inicial->Text) != '') And (trim($this->data_final->Text) != ''))
      {
         $this->MSG_Erro->Caption = '';
      }

      if(trim($this->data_inicial->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Inicial';
      }

      if(trim($this->data_final->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Final';
      }

      if(trim($this->porcentagem_reserva->Text) < 0)
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Porcentagem de Reserva';
      }

      if(trim($this->mgt_quantidade_produzir->Text) <= 0)
      {
         $this->MSG_Erro->Caption = 'Por favor, Informe a Quantidade a ser Produzida para este Produto.';
      }

      if(trim($this->mgt_produto_lote->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, Informe o Lote para este Produto.';
      }

      if(trim($this->mgt_produto_lote->Text) <> '')
      {
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
         $Comando_SQL .= "Where ";
         $Comando_SQL .= "mgt_programa_producao_produto_lote = '" . trim($this->mgt_produto_lote->Text) . "' ";
         $Comando_SQL .= "Order By ";
         $Comando_SQL .= "mgt_programa_producao_nro Desc, ";
         $Comando_SQL .= "mgt_programa_producao_produto_codigo Asc";

         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Close();
         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Open();

         if(GetConexaoPrincipal()->SQL_MGT_Programa_Producao->EOF != 1)
         {
            $this->MSG_Erro->Caption = 'O Lote Informado Ja Existe. Informe outro Lote.';
         }
      }

      if(trim($this->MSG_Erro->Caption) == '')
      {
         if(trim($this->mgt_quantidade_produzir->Text) > 0)
         {
            //*** Seleciona o Numero do Ultimo Programa ***

            $Comando_SQL = "Select * from mgt_programa_producao Order By mgt_programa_producao_nro Desc";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();

            $nro_programa = GetConexaoPrincipal()->SQL_Comunitario->Fields['mgt_programa_producao_nro'];

            GetConexaoPrincipal()->SQL_Comunitario->Close();

            if($nro_programa > 0)
            {
               $nro_programa = $nro_programa + 1;
            }
            else
            {
               $nro_programa = 1;
            }

            $quantidade_produzir = abs(trim($this->mgt_quantidade_produzir->Text));

            $Comando_SQL = "Insert into mgt_programa_producao(";
            $Comando_SQL .= "mgt_programa_producao_nro, ";
            $Comando_SQL .= "mgt_programa_producao_tipo_codigo, ";
            $Comando_SQL .= "mgt_programa_producao_tipo, ";
            $Comando_SQL .= "mgt_programa_producao_produto_codigo, ";
            $Comando_SQL .= "mgt_programa_producao_produto_descricao, ";
            $Comando_SQL .= "mgt_programa_producao_produto_lote, ";
            $Comando_SQL .= "mgt_programa_producao_qtde_produzir, ";
            $Comando_SQL .= "mgt_programa_producao_data_inicio, ";
            $Comando_SQL .= "mgt_programa_producao_data_fim, ";
            $Comando_SQL .= "mgt_programa_producao_planejamento, ";
            $Comando_SQL .= "mgt_programa_producao_porcentagem_reserva, ";
            $Comando_SQL .= "mgt_programa_producao_ordens, ";
            $Comando_SQL .= "mgt_programa_producao_qtde_produzida, ";
            $Comando_SQL .= "mgt_programa_producao_qtde_estoque, ";
            $Comando_SQL .= "mgt_programa_producao_qtde_vendida) ";
            $Comando_SQL .= " Values(";
            $Comando_SQL .= "'" . trim($nro_programa) . "', ";
            $Comando_SQL .= "'" . '0' . "', ";
            $Comando_SQL .= "'" . 'PRD' . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_produto_codigo->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_produto_descricao->Text) . "', ";
            $Comando_SQL .= "'" . trim($this->mgt_produto_lote->Text) . "', ";
            $Comando_SQL .= "'" . trim($quantidade_produzir) . "', ";
            $Comando_SQL .= "'" . trim($data_procura_ini) . "', ";
            $Comando_SQL .= "'" . trim($data_procura_fim) . "', ";
            $Comando_SQL .= "'" . "Nao Gerado" . "', ";
            $Comando_SQL .= "'" . trim($this->porcentagem_reserva->Text) . "', ";
            $Comando_SQL .= "'" . "" . "', ";
            $Comando_SQL .= "'" . "0" . "', ";
            $Comando_SQL .= "'" . trim($this->hd_quantidade_estoque->Value) . "', ";
            $Comando_SQL .= "'" . trim($this->hd_quantidade_vendida_registro->Value) . "') ";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         //*** Prepara o Select das Informacoes ***

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
         $Comando_SQL .= "Where ";
         $Comando_SQL .= "mgt_programa_producao_qtde_produzida < mgt_programa_producao_qtde_produzir ";
         $Comando_SQL .= "Order By ";
         $Comando_SQL .= "mgt_programa_producao_nro Desc, ";
         $Comando_SQL .= "mgt_programa_producao_produto_codigo Asc";

         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Close();
         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Open();

         $this->bt_gerar_programa->Enabled = false;

         //*** Registra o Ultimo Comando de Selecao ***
         $_SESSION['comando_sql_grid'] = '';
         $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL;
      }
   }

   function porcentagem_reservaJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.indprogramaproducao.porcentagem_reserva;
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

   function porcentagem_reservaJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indprogramaproducao.bt_adiciona.focus();
     return false;
   }

      <?php

   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function indprogramaproducaoCreate($sender, $params)
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

      $this->porcentagem_reserva->Text = '';
      $this->mgt_produto_codigo->Text = '';
      $this->busca_programa_producao_nro->Text = '';
      $this->busca_programa_producao_data_inicio->Text = '';
      $this->busca_programa_producao_data_fim->Text = '';

      $this->mgt_programa_producao_nro->Text = '';
      $this->mgt_programa_producao_produto_codigo->Text = '';
      $this->mgt_programa_producao_produto_descricao->Text = '';

      $this->mgt_programa_producao_qtde_produzida->Value = '';

      //*** Carrega os Programas de Producao Ja Realizados ***

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
      $Comando_SQL .= "Where ";
      $Comando_SQL .= "mgt_programa_producao_qtde_produzida < mgt_programa_producao_qtde_produzir ";
      $Comando_SQL .= "Order By ";
      $Comando_SQL .= "mgt_programa_producao_nro Desc, ";
      $Comando_SQL .= "mgt_programa_producao_produto_codigo Asc";

      GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Close();
      GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL;
   }

   function mgt_produto_codigoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indprogramaproducao.mgt_produto_descricao.focus();
     return false;
   }

      <?php

   }

   function data_finalJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.indprogramaproducao.data_final
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

   var campo = document.indprogramaproducao.data_inicial
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
     document.indprogramaproducao.porcentagem_reserva.focus();
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
     document.indprogramaproducao.data_final.focus();
     return false;
   }

      <?php

   }

   function indprogramaproducaoJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

      <?php

   }

   function mgt_produto_descricaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indprogramaproducao.mgt_produto_lote.focus();
          return false;
        }

        //end
      <?php
   }

   function bt_adicionaClick($sender, $params)
   {
      $this->MSG_Erro->Caption = '';

      $this->adiciona_produtos->Top = 36;
      $this->adiciona_produtos->Visible = true;

      $this->programas_gerados->Visible = false;
      $this->opcoes->Visible = false;
   }

   function bt_fechar_produtoClick($sender, $params)
   {
      $this->MSG_Erro->Caption = '';

      $this->adiciona_produtos->Top = 638;
      $this->adiciona_produtos->Visible = false;

      $this->programas_gerados->Visible = true;
      $this->opcoes->Visible = true;
   }

   function bt_busca_produtoClick($sender, $params)
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
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_referencia = '" . trim($this->dados_busca_produto->Text) . "' order by mgt_produto_referencia";
         }
         elseif(trim($this->opcao_busca_produto->ItemIndex) == "Descricao")
         {
            $Comando_SQL = "select * from mgt_produtos where mgt_produto_descricao like '%" . trim($this->dados_busca_produto->Text) . "%' order by mgt_produto_descricao";
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
      GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Produtos->Open();
   }

   function dados_busca_produtoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indprogramaproducao.opcao_busca_produto.focus();
          return false;
        }

        //end
      <?php
   }

   function opcao_busca_produtoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indprogramaproducao.bt_busca_produto.focus();
          return false;
        }

        //end
      <?php
   }

   function registros_produtos_buscaJSRowChanged($sender, $params)
   {
      ?>
        //begin js

        //*** Obtem o Registro Clicado ***

        document.indprogramaproducao.mgt_adiciona_produto_codigo.value      = registros_produtos_busca.getTableModel().getValue(0, registros_produtos_busca.getFocusedRow());
        document.indprogramaproducao.mgt_adiciona_produto_referencia.value  = registros_produtos_busca.getTableModel().getValue(1, registros_produtos_busca.getFocusedRow());
        document.indprogramaproducao.mgt_adiciona_produto_descricao.value   = registros_produtos_busca.getTableModel().getValue(2, registros_produtos_busca.getFocusedRow());

        //end
      <?php
   }

   function bt_adicionar_produtoClick($sender, $params)
   {
      $this->mgt_produto_codigo->Text = $this->mgt_adiciona_produto_codigo->Text;
      $this->mgt_produto_descricao->Text = $this->mgt_adiciona_produto_descricao->Text;

      $this->MSG_Erro->Caption = '';

      $this->adiciona_produtos->Top = 638;
      $this->adiciona_produtos->Visible = false;

      $this->programas_gerados->Visible = true;
      $this->opcoes->Visible = true;
   }

   function bt_qtde_produzidaClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      $quantidade_produzir = 0;
      $this->mgt_quantidade_produzir->Text = '0';
      $this->MSG_Erro->Caption = '';

      $this->hd_quantidade_vendida_registro->Value = 0;
      $this->hd_quantidade_estoque->Value = 0;

      if((trim($this->data_inicial->Text) != '') And (trim($this->data_final->Text) != ''))
      {
         $this->MSG_Erro->Caption = '';
      }

      if(trim($this->data_inicial->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Inicial';
      }

      if(trim($this->data_final->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data Final';
      }

      if(trim($this->porcentagem_reserva->Text) < 0)
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Porcentagem de Reserva';
      }

      if(trim($this->mgt_produto_codigo->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, Selecione um Produto.';
      }

      if(trim($this->mgt_produto_lote->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, Informe o Lote para este Produto.';
      }

      if(trim($this->mgt_produto_lote->Text) <> '')
      {
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
         $Comando_SQL .= "Where ";
         $Comando_SQL .= "mgt_programa_producao_produto_lote = '" . trim($this->mgt_produto_lote->Text) . "' ";
         $Comando_SQL .= "Order By ";
         $Comando_SQL .= "mgt_programa_producao_nro Desc, ";
         $Comando_SQL .= "mgt_programa_producao_produto_codigo Asc";

         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Close();
         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Open();

         if(GetConexaoPrincipal()->SQL_MGT_Programa_Producao->EOF != 1)
         {
            $this->MSG_Erro->Caption = 'O Lote Informado Ja Existe. Informe outro Lote.';
         }
      }

      if(trim($this->MSG_Erro->Caption) == '')
      {
         //*** Seleciona os Produtos Desejados ***

         $Comando_SQL = "select * from mgt_produtos ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= " mgt_produto_codigo = '" . trim($this->mgt_produto_codigo->Text) . "'";
         $Comando_SQL .= " Order By mgt_produto_codigo";

         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         //*** Prepara a Geracao do Programa de Producao ***

         $data_procura_ini = inverte_data_dma_to_amd(trim($this->data_inicial->Text));
         $data_procura_fim = inverte_data_dma_to_amd(trim($this->data_final->Text));

         if(GetConexaoPrincipal()->SQL_MGT_Produtos->EOF != 1)
         {
            //*** Verifica se o Produto Ja esta no Programa de Producao ***

            $Comando_SQL = "select * from mgt_programa_producao ";
            $Comando_SQL .= "where ";
            $Comando_SQL .= "mgt_programa_producao_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_codigo']) . "' AND ";
            $Comando_SQL .= "mgt_programa_producao_data_inicio = '" . $data_procura_ini . "' AND ";
            $Comando_SQL .= "mgt_programa_producao_data_fim = '" . $data_procura_fim . "'";

            GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Close();
            GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Programa_Producao->EOF) == 1)
            {
               //*** Localiza a Quantidade a Ser Produzida ***

               $quantidade_vendida = 0;

               //*** Seleciona os CFOPs de Faturamento ***

               $Comando_SQL = "select * from mgt_cfops_faturamento";

               GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Close();
               GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Open();

               //*** Seleciona as Notas Fiscais ***

               $Comando_SQL = "SELECT ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_codigo, ";
               $Comando_SQL .= "mgt_nota_fiscal_produto_descricao, ";
               $Comando_SQL .= "SUM(mgt_nota_fiscal_produto_quantidade) AS mgt_nota_fiscal_produto_quantidade ";
               $Comando_SQL .= "FROM ";
               $Comando_SQL .= "mgt_notas_fiscais, ";
               $Comando_SQL .= "mgt_notas_fiscais_produtos, ";
               $Comando_SQL .= "mgt_produtos ";
               $Comando_SQL .= "WHERE ";
               $Comando_SQL .= "(mgt_nota_fiscal_tipo_nota ='1') AND ";
               $Comando_SQL .= "(mgt_nota_fiscal_cfop IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ")) AND ";
               $Comando_SQL .= "(mgt_nota_fiscal_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_codigo']) . "') AND ";
               $Comando_SQL .= "((mgt_nota_fiscal_data_emissao >='" . $data_procura_ini . "') AND (mgt_nota_fiscal_data_emissao <='" . $data_procura_fim . "')) AND ";
               $Comando_SQL .= "(mgt_nota_fiscal_numero = mgt_nota_fiscal_produto_numero_nota) AND ";
               $Comando_SQL .= "(mgt_nota_fiscal_produto_codigo = mgt_produto_codigo) ";
               $Comando_SQL .= "GROUP BY mgt_nota_fiscal_produto_codigo ";
               $Comando_SQL .= "ORDER BY mgt_nota_fiscal_produto_codigo ";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();

               $quantidade_vendida = $quantidade_vendida + GetConexaoPrincipal()->SQL_Comunitario->Fields['mgt_nota_fiscal_produto_quantidade'];

               GetConexaoPrincipal()->SQL_Comunitario->Close();

               //*** Seleciona as Vendas Programadas ***

               $Comando_SQL = "SELECT ";
               $Comando_SQL .= "mgt_programada_produto_codigo, ";
               $Comando_SQL .= "mgt_programada_produto_descricao, ";
               $Comando_SQL .= "SUM(mgt_programada_produto_quantidade) AS mgt_programada_produto_quantidade ";
               $Comando_SQL .= "FROM ";
               $Comando_SQL .= "mgt_programadas, ";
               $Comando_SQL .= "mgt_programadas_produtos, ";
               $Comando_SQL .= "mgt_produtos ";
               $Comando_SQL .= "WHERE ";
               $Comando_SQL .= "(mgt_programada_tipo_nota ='1') AND ";
               $Comando_SQL .= "(mgt_programada_cfop IN (" . trim(GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido']) . ")) AND ";
               $Comando_SQL .= "(mgt_programada_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_codigo']) . "') AND ";
               $Comando_SQL .= "((mgt_programada_data_emissao >='" . $data_procura_ini . "') AND (mgt_programada_data_emissao <='" . $data_procura_fim . "')) AND ";
               $Comando_SQL .= "(mgt_programada_numero = mgt_programada_produto_numero_nota) AND ";
               $Comando_SQL .= "(mgt_programada_produto_codigo = mgt_produto_codigo) ";
               $Comando_SQL .= "GROUP BY mgt_programada_produto_codigo ";
               $Comando_SQL .= "ORDER BY mgt_programada_produto_codigo ";

               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_Comunitario->Open();

               $quantidade_vendida = $quantidade_vendida + GetConexaoPrincipal()->SQL_Comunitario->Fields['mgt_nota_fiscal_produto_quantidade'];

               GetConexaoPrincipal()->SQL_Comunitario->Close();

               //*** Efetua o Calculo de Produtos para a Producao ***

               $reserva = $this->porcentagem_reserva->Text;
               if(trim($reserva) == '')
               {
                  $reserva = 0;
               }

               $data1 = strtotime($data_procura_fim . " 00:00:00");
               $data2 = strtotime($data_procura_ini . " 00:00:00");
               $quantidade_dias = round(abs($data1 - $data2) / 60 / 60 / 24);
               $quantidade_dias = $quantidade_dias + 1;

               $quantidade_vendida_registro = $quantidade_vendida;
               $quantidade_estoque = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'];

               $this->hd_quantidade_vendida_registro->Value = $quantidade_vendida_registro;
               $this->hd_quantidade_estoque->Value = $quantidade_estoque;

               $quantidade_vendida = round((($quantidade_vendida / $quantidade_dias) * 30));

               $quantidade_vendida = round($quantidade_vendida + (($quantidade_vendida * $reserva) / 100));

               $quantidade_produzir = 0;
               $quantidade_produzir = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'] - $quantidade_vendida;
               $quantidade_produzir = abs($quantidade_produzir);

               $this->mgt_quantidade_produzir->Text = $quantidade_produzir;
            }

            $this->bt_gerar_programa->Enabled = true;
         }
      }
   }
   function mgt_adiciona_produto_codigoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indprogramaproducao.mgt_adiciona_produto_referencia.focus();
          return false;
        }

        //end
      <?php
   }

   function mgt_adiciona_produto_referenciaJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indprogramaproducao.mgt_adiciona_produto_descricao.focus();
          return false;
        }

        //end
      <?php
   }

   function mgt_adiciona_produto_descricaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indprogramaproducao.bt_adicionar_produto.focus();
          return false;
        }

        //end
      <?php
   }

   function mgt_quantidade_produzirJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.indprogramaproducao.bt_adiciona.focus();
           return false;
        }

        //end
      <?php
   }

   function mgt_quantidade_produzirJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valor ***

        var campo = document.indprogramaproducao.mgt_quantidade_produzir;
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

        //end
      <?php
   }
   function mgt_produto_loteJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indprogramaproducao.bt_gerar_programa.focus();
          return false;
        }

        //end
      <?php
   }
}

global $application;

global $indprogramaproducao;

//Creates the form
$indprogramaproducao = new indprogramaproducao($application);

//Read from resource file
$indprogramaproducao->loadResource(__FILE__);

//Shows the form
$indprogramaproducao->show();

?>