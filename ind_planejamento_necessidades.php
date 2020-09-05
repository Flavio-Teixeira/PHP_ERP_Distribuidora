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
class indplanejamentonecessidades extends Page
{
   public $mgt_programa_producao_planejamento = null;
   public $Label3 = null;
   public $busca_planejamento_necessidades = null;
   public $busca_produto_codigo = null;
   public $Label4 = null;
   public $Label5 = null;
   public $busca_produto_descricao = null;
   public $Label1 = null;
   public $busca_programa_producao_nro = null;
   public $Label12 = null;
   public $busca_programa_producao_data_inicio = null;
   public $Label14 = null;
   public $busca_programa_producao_data_fim = null;
   public $bt_busca_programa = null;
   public $Label2 = null;
   public $mgt_programa_producao_nro = null;
   public $mgt_programa_producao_produto_codigo = null;
   public $Label9 = null;
   public $Label10 = null;
   public $mgt_programa_producao_produto_descricao = null;
   public $registros_programa = null;
   public $bt_gerar_planejamento = null;
   public $mgt_planejamento_necessidade_nro = null;
   public $confirmacao = null;
   public $mgt_operacao_cadastro_motivo = null;
   public $Label17 = null;
   public $Label16 = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $bt_buscar = null;
   public $Label11 = null;
   public $bt_excluir = null;
   public $Label8 = null;
   public $registros = null;
   public $GroupBox2 = null;
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
   function registrosJSRowChanged($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** Obtem o Registro Clicado ***

   document.indplanejamentonecessidades.mgt_planejamento_necessidade_nro.value = registros.getTableModel().getValue(0, registros.getFocusedRow());

      <?php

   }

   function bt_buscarClick($sender, $params)
   {
      //*** Seleciona o Planejamento de Necessidades ***

      $Comando_SQL = "select ";
      $Comando_SQL .= "* ";
      $Comando_SQL .= "from mgt_planejamento_necessidades ";
      $Comando_SQL .= "Where ";
      $Comando_SQL .= "mgt_planejamento_necessidade_nro = '" . trim($this->busca_planejamento_necessidades->Text) . "' ";
      $Comando_SQL .= "ORDER BY mgt_planejamento_necessidade_sequencia ASC";

      GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Close();
      GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Open();
   }

   function bt_gerar_planejamentoClick($sender, $params)
   {
      $this->MSG_Erro->Caption = '';

      if(trim($this->mgt_programa_producao_nro->Text) <> '')
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
         $Comando_SQL .= "mgt_programa_producao_nro = '" . trim($this->mgt_programa_producao_nro->Text) . "' ";
         $Comando_SQL .= "Order By ";
         $Comando_SQL .= "mgt_programa_producao_nro Desc, ";
         $Comando_SQL .= "mgt_programa_producao_produto_codigo Asc";

         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Close();
         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Programa_Producao->EOF) != 1)
         {
            //*** Verifica se o Planejamento de Necessidades nao existe ***

            $Comando_SQL = "select ";
            $Comando_SQL .= "* ";
            $Comando_SQL .= "from mgt_planejamento_necessidades ";
            $Comando_SQL .= "Where ";
            $Comando_SQL .= "mgt_planejamento_necessidade_nro = '" . trim($this->mgt_programa_producao_nro->Text) . "' ";
            $Comando_SQL .= "ORDER BY mgt_planejamento_necessidade_sequencia ASC";

            GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Close();
            GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->EOF) != 1)
            {
               $this->MSG_Erro->Caption = 'O Planejamento de Necessidades para o Programa de Producao selecionado Ja Existe.';
            }
            else
            {
               if(trim($this->mgt_programa_producao_planejamento->Value) <> 'Finalizado')
               {
                  //*** Atualiza o Programa de Producao ***
                  $Comando_SQL = "update mgt_programa_producao set ";
                  $Comando_SQL .= "mgt_programa_producao_planejamento = 'Gerado', ";
                  $Comando_SQL .= "mgt_programa_producao_data_inicio = '" . date("Y-m-d", time()) . "' ";
                  $Comando_SQL .= " where ";
                  $Comando_SQL .= "mgt_programa_producao_nro  = '" . trim($this->mgt_programa_producao_nro->Text) . "'";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }

               //*** Registra o Planejamento de Necessidades ***

               while(GetConexaoPrincipal()->SQL_MGT_Programa_Producao->EOF != 1)
               {
                  $qtde_produzir = 0;
                  $qtde_produzir = GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Fields['mgt_programa_producao_qtde_produzir'];

                  /*** Carrega a Estrutura do Produto ***/

                  $Comando_SQL = "SELECT * FROM mgt_estruturas WHERE mgt_estrutura_codigo = '" . Trim(GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Fields['mgt_programa_producao_produto_codigo']) . "' ORDER BY mgt_estrutura_sequencia ASC";

                  GetConexaoPrincipal()->SQL_MGT_Estruturas->Close();
                  GetConexaoPrincipal()->SQL_MGT_Estruturas->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_MGT_Estruturas->Open();

                  if((GetConexaoPrincipal()->SQL_MGT_Estruturas->EOF) != 1)
                  {
                     while((GetConexaoPrincipal()->SQL_MGT_Estruturas->EOF) != 1)
                     {
                        //*** Obtem a Quantidade das Necessidades ***

                        $qtde_necessaria = 0;
                        $qtde_necessaria = $qtde_produzir * GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_qtde'];

                        //*** Obtem a Falta de Produtos ***

                        $qtde_falta = 0;

                        $Comando_SQL = "select * from mgt_produtos where mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_codigo_estrutura']) . "' order by mgt_produto_codigo";

                        GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
                        GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
                        GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

                        if((GetConexaoPrincipal()->SQL_MGT_Produtos->EOF) != 1)
                        {
                           $qtde_falta = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'] - $qtde_necessaria;

                           if($qtde_falta < 0)
                           {
                              $qtde_falta = abs($qtde_falta);
                           }
                           else
                           {
                              $qtde_falta = 0;
                           }
                        }

                        //*** Insere o Planejamento de Necessidades ***

                        $Comando_SQL = "Insert into mgt_planejamento_necessidades(";
                        $Comando_SQL .= "mgt_planejamento_necessidade_nro, ";
                        $Comando_SQL .= "mgt_planejamento_necessidade_produto_codigo, ";
                        $Comando_SQL .= "mgt_planejamento_necessidade_produto_descricao, ";
                        $Comando_SQL .= "mgt_planejamento_necessidade_nivel, ";
                        $Comando_SQL .= "mgt_planejamento_necessidade_qtde_um_produto, ";
                        $Comando_SQL .= "mgt_planejamento_necessidade_medida, ";
                        $Comando_SQL .= "mgt_planejamento_necessidade_qtde_produzir, ";
                        $Comando_SQL .= "mgt_planejamento_necessidade_qtde_falta, ";
                        $Comando_SQL .= "mgt_planejamento_necessidade_sequencia) ";
                        $Comando_SQL .= " Values(";
                        $Comando_SQL .= "'" . trim($this->mgt_programa_producao_nro->Text) . "', ";
                        $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_codigo_estrutura']) . "', ";
                        $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_descricao']) . "', ";
                        $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_nivel']) . "', ";
                        $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_qtde']) . "', ";
                        $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_medida']) . "', ";
                        $Comando_SQL .= "'" . trim($qtde_necessaria) . "', ";
                        $Comando_SQL .= "'" . trim($qtde_falta) . "', ";
                        $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_sequencia']) . "') ";

                        GetConexaoPrincipal()->SQL_Comunitario->Close();
                        GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                        GetConexaoPrincipal()->SQL_Comunitario->Open();
                        GetConexaoPrincipal()->SQL_Comunitario->Close();

                        GetConexaoPrincipal()->SQL_MGT_Estruturas->Next();
                     }
                  }

                  GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Next();
               }

               //*** Seleciona o Planejamento de Necessidades ***

               $Comando_SQL = "select ";
               $Comando_SQL .= "* ";
               $Comando_SQL .= "from mgt_planejamento_necessidades ";
               $Comando_SQL .= "Where ";
               $Comando_SQL .= "mgt_planejamento_necessidade_nro = '" . trim($this->mgt_programa_producao_nro->Text) . "' ";
               $Comando_SQL .= "ORDER BY mgt_planejamento_necessidade_sequencia ASC";

               GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Close();
               GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Open();
            }
         }
         else
         {
            $this->MSG_Erro->Caption = 'Nenhum Programa de Producao foi encontrado com o Numero Solicitado.';
         }
      }
      else
      {
         $this->MSG_Erro->Caption = 'Por favor, informe o Numero do Programa de Producao.';
      }
   }

   function mgt_planejamento_necessidade_nroJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.indplanejamentonecessidades.mgt_planejamento_necessidade_nro
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

   function busca_programa_producao_nroJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.indplanejamentonecessidades.busca_programa_producao_nro
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

   function busca_planejamento_necessidadesJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indplanejamentonecessidades.bt_buscar.focus();
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
     document.indplanejamentonecessidades.busca_programa_producao_data_inicio.focus();
     return false;
   }

      <?php

   }

   function mgt_planejamento_necessidade_nroJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.indplanejamentonecessidades.bt_excluir.focus();
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
         $Comando_SQL .= "'" . trim($this->mgt_planejamento_necessidade_nro->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_planejamento_necessidades ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_planejamento_necessidade_nro ='" . trim($this->mgt_planejamento_necessidade_nro->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->confirmacao->Top = 527;
         $this->confirmacao->IsVisible = false;

         $this->MSG_Erro->Caption = "";

         $this->mgt_programa_producao_nro->Text = '';
         $this->busca_planejamento_necessidades->Text = '';
         $this->mgt_planejamento_necessidade_nro->Text = '';

         //*** Seleciona o Planejamento de Necessidades ***

         $Comando_SQL = "select ";
         $Comando_SQL .= "* ";
         $Comando_SQL .= "from mgt_planejamento_necessidades ";
         $Comando_SQL .= "Where ";
         $Comando_SQL .= "mgt_planejamento_necessidade_nro = '0'";

         GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Close();
         GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Open();
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

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function indplanejamentonecessidadesCreate($sender, $params)
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

      $this->busca_programa_producao_nro->Text = '';
      $this->busca_planejamento_necessidades->Text = '';
      $this->mgt_planejamento_necessidade_nro->Text = '';

      //*** Carrega os Programas de Producao Ja Realizados ***

      GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Close();
      GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Open();
   }

   function indplanejamentonecessidadesJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

      <?php

   }
   function busca_programa_producao_data_inicioJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indplanejamentonecessidades.busca_programa_producao_data_fim.focus();
          return false;
        }

        //end
      <?php
   }
   function busca_programa_producao_data_inicioJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Data ***

        var campo = document.indplanejamentonecessidades.busca_programa_producao_data_inicio
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
   function busca_programa_producao_data_fimJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indplanejamentonecessidades.bt_busca_programa.focus();
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

        var campo = document.indplanejamentonecessidades.busca_programa_producao_data_fim
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
   function bt_busca_programaClick($sender, $params)
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
   }
   function registros_programaJSRowChanged($sender, $params)
   {
      ?>
        //begin js

        //*** Obtem o Registro Clicado ***

        document.indplanejamentonecessidades.mgt_programa_producao_nro.value = registros_programa.getTableModel().getValue(0, registros_programa.getFocusedRow());
        document.indplanejamentonecessidades.mgt_programa_producao_produto_codigo.value = registros_programa.getTableModel().getValue(3, registros_programa.getFocusedRow());
        document.indplanejamentonecessidades.mgt_programa_producao_produto_descricao.value = registros_programa.getTableModel().getValue(4, registros_programa.getFocusedRow());

        document.indplanejamentonecessidades.busca_planejamento_necessidades.value = registros_programa.getTableModel().getValue(0, registros_programa.getFocusedRow());
        document.indplanejamentonecessidades.busca_produto_codigo.value = registros_programa.getTableModel().getValue(3, registros_programa.getFocusedRow());
        document.indplanejamentonecessidades.busca_produto_descricao.value = registros_programa.getTableModel().getValue(4, registros_programa.getFocusedRow());

        document.indplanejamentonecessidades.mgt_programa_producao_planejamento.value = registros_programa.getTableModel().getValue(13, registros_programa.getFocusedRow());

        //end
      <?php
   }
   function mgt_programa_producao_nroJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indplanejamentonecessidades.busca_produto_codigo.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_programa_producao_produto_codigoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indplanejamentonecessidades.mgt_programa_producao_produto_descricao.focus();
          return false;
        }

        //end
      <?php
   }
   function mgt_programa_producao_produto_descricaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indplanejamentonecessidades.bt_gerar_planejamento.focus();
          return false;
        }

        //end
      <?php
   }
   function busca_produto_codigoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indplanejamentonecessidades.busca_produto_descricao.focus();
          return false;
        }

        //end
      <?php
   }
   function busca_produto_descricaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.indplanejamentonecessidades.bt_buscar.focus();
          return false;
        }

        //end
      <?php
   }
   function bt_imprimirClick($sender, $params)
   {
      if(trim($this->mgt_planejamento_necessidade_nro->Text) <> '')
      {
         echo "<script language=\"JavaScript\">";
         echo "window.open('ind_planejamento_necessidades_imp.php?mgt_planejamento_necessidade_nro=" . trim($this->mgt_planejamento_necessidade_nro->Text) . "','ind_planejamento_necessidades_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo "</script>";
      }
      else
      {
         $this->MSG_Erro->Caption = "Para Imprimir a Ordem de Producao voce deve escolher um Planejamento de Necessidades.";
      }
   }

}

global $application;

global $indplanejamentonecessidades;

//Creates the form
$indplanejamentonecessidades = new indplanejamentonecessidades($application);

//Read from resource file
$indplanejamentonecessidades->loadResource(__FILE__);

//Shows the form
$indplanejamentonecessidades->show();

?>