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
use_unit("dbgrids.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class estsolicitacaoinc extends Page
{
    public $Label7 = null;
    public $Label5 = null;
    public $Label3 = null;
    public $Label1 = null;
    public $mgt_solicitacao_estoque_descricao_referencia = null;
   public $registros_produtos = null;
   public $bt_seleciona_produto = null;
   public $area_sistema = null;
   public $opcoes = null;
   public $bt_fechar = null;
   public $bt_incluir = null;
   public $Panel1 = null;
   public $Label18 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $atualiza_estoque = null;
   public $MSG_Erro = null;
   public $solicitacao = null;
   public $Label2 = null;
   public $mgt_solicitacao_estoque_solicitante = null;
   public $Label4 = null;
   public $mgt_solicitacao_estoque_data_solicitacao = null;
   public $Label6 = null;
   public $mgt_solicitacao_estoque_qtde_solicitada = null;
   public $mgt_solicitacao_estoque_codigo = null;
   public $mgt_solicitacao_estoque_descricao = null;
   public $mgt_solicitacao_estoque_qtde_entregue = null;
   public $Label8 = null;
   public $Label9 = null;
   public $mgt_solicitacao_estoque_data_entregua = null;
   public $Label10 = null;
   public $mgt_solicitacao_estoque_status = null;
   public $mgt_solicitacao_estoque_observacao = null;
   public $Label12 = null;
   public $Estilo_Pagina = null;
   public $adiciona_produtos = null;
   public $Label36 = null;
   public $Label37 = null;
   public $Label38 = null;
   public $mgt_produto_codigo = null;
   public $Label39 = null;
   public $mgt_produto_descricao = null;
   public $bt_adicionar_produto = null;
   public $adiciona_produtos_borda = null;
   public $GroupBox2 = null;
   public $Label34 = null;
   public $Label35 = null;
   public $dados_busca_produto = null;
   public $opcao_busca_produto = null;
   public $bt_busca_produto = null;
   public $Label40 = null;
   public $mgt_produto_referencia = null;
   public $Panel5 = null;
   public $Panel3 = null;
   public $Panel4 = null;
   public $bt_fechar_produto = null;
    public $mgt_solicitacao_estoque_codigo_referencia = null;
   function mgt_solicitacao_estoque_data_solicitacaoJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.estsolicitacaoinc.mgt_solicitacao_estoque_data_solicitacao;
   var digits="0123456789/";
   var campo_temp;
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1);
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

      <?php

   }

   function mgt_solicitacao_estoque_data_entreguaJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Data ***

   var campo = document.estsolicitacaoinc.mgt_solicitacao_estoque_data_entregua;
   var digits="0123456789/";
   var campo_temp;
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1);
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Data ***

      <?php

   }

   function mgt_solicitacao_estoque_qtde_entregueJSKeyUp($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.estsolicitacaoinc.mgt_solicitacao_estoque_qtde_entregue;
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

   function mgt_solicitacao_estoque_observacaoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.estsolicitacaoinc.bt_alterar.focus();
     return false;
   }

      <?php

   }

   function mgt_solicitacao_estoque_statusJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.estsolicitacaoinc.mgt_solicitacao_estoque_observacao.focus();
     return false;
   }

      <?php

   }

   function mgt_solicitacao_estoque_data_entreguaJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.estsolicitacaoinc.mgt_solicitacao_estoque_status.focus();
     return false;
   }

      <?php

   }

   function mgt_solicitacao_estoque_qtde_entregueJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.estsolicitacaoinc.mgt_solicitacao_estoque_data_entregua.focus();
     return false;
   }

      <?php

   }

   function mgt_solicitacao_estoque_qtde_solicitadaJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.estsolicitacaoinc.mgt_solicitacao_estoque_qtde_entregue.focus();
     return false;
   }

      <?php

   }

   function mgt_solicitacao_estoque_descricaoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.estsolicitacaoinc.mgt_solicitacao_estoque_qtde_solicitada.focus();
     return false;
   }

      <?php

   }

   function mgt_solicitacao_estoque_codigoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.estsolicitacaoinc.mgt_solicitacao_estoque_descricao.focus();
     return false;
   }

      <?php

   }

   function mgt_solicitacao_estoque_solicitanteJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.estsolicitacaoinc.mgt_solicitacao_estoque_codigo.focus();
     return false;
   }

      <?php

   }

   function mgt_solicitacao_estoque_data_solicitacaoJSKeyPress($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.estsolicitacaoinc.mgt_solicitacao_estoque_solicitante.focus();
     return false;
   }

      <?php

   }

   function estsolicitacaoincCreate($sender, $params)
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

      $this->mgt_solicitacao_estoque_data_solicitacao->Text = date('d/m/Y', time());
      $this->mgt_solicitacao_estoque_solicitante->Text = '';
      $this->mgt_solicitacao_estoque_codigo->Text = '';
      $this->mgt_solicitacao_estoque_descricao->Text = '';
      $this->mgt_solicitacao_estoque_qtde_solicitada->Text = '';
      $this->mgt_solicitacao_estoque_qtde_entregue->Text = '';
      $this->mgt_solicitacao_estoque_data_entregua->Text = date('d/m/Y', time());
      $this->mgt_solicitacao_estoque_status->Text = 'Entregue';
      $this->mgt_solicitacao_estoque_observacao->Text = '';
      $this->atualiza_estoque->Checked = true;

      $this->MSG_Erro->Caption = "";
   }

   function bt_fecharClick($sender, $params)
   {
      //*** Restaura a Ultima Selecao Efetuada ***
      GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Close();
      GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->SQL = $_SESSION['comando_sql_grid'];
      GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Open();

      redirect('est_solicitacao.php');
   }

   function bt_incluirClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_solicitacao_estoque_qtde_entregue->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Quantidade Entregue.";
      }
      elseif(trim($this->mgt_solicitacao_estoque_data_entregua->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Data da Entrega.";
      }
      else
      {
         //*** Ajusta o Mapa de Producao ***

         $mapa = str_replace('Mapa:', '', substr($this->mgt_solicitacao_estoque_observacao->Text, 0, strpos($this->mgt_solicitacao_estoque_observacao->Text, ', Pedido:')));

         if(strpos($this->mgt_solicitacao_estoque_observacao->Text, '#') > 0)
         {
            $pedido = substr($this->mgt_solicitacao_estoque_observacao->Text, strpos($this->mgt_solicitacao_estoque_observacao->Text, ', Pedido:') + 9, strpos($this->mgt_solicitacao_estoque_observacao->Text, '#') - (strpos($this->mgt_solicitacao_estoque_observacao->Text, ', Pedido:') + 9));
         }
         else
         {
            $pedido = substr($this->mgt_solicitacao_estoque_observacao->Text, strpos($this->mgt_solicitacao_estoque_observacao->Text, ', Pedido:') + 9);
         }

         $Comando_SQL = "update mgt_mapas_produtos set ";
         $Comando_SQL .= "mgt_mapa_produto_quantidade_producao='" . trim($this->mgt_solicitacao_estoque_qtde_entregue->Text) . "', ";
         $Comando_SQL .= "mgt_mapa_produto_status='Em Producao' ";
         $Comando_SQL .= "Where ";
         $Comando_SQL .= "mgt_mapa_produto_numero='" . trim($mapa) . "' And ";
         $Comando_SQL .= "mgt_mapa_produto_numero_pedido='" . trim($pedido) . "' ";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Ajusta a Solicitacao de Estoque ***

         $Comando_SQL = "insert into mgt_solicitacoes_estoque";
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
         $Comando_SQL .= "mgt_solicitacao_estoque_observacao ";
         $Comando_SQL .= ") ";
         $Comando_SQL .= "values ";
         $Comando_SQL .= "(";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_solicitacao_estoque_data_solicitacao->Text) . "', ";
         $Comando_SQL .= "'" . $this->mgt_solicitacao_estoque_solicitante->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_solicitacao_estoque_codigo->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_solicitacao_estoque_descricao->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_solicitacao_estoque_codigo_referencia->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_solicitacao_estoque_descricao_referencia->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_solicitacao_estoque_qtde_solicitada->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_solicitacao_estoque_qtde_entregue->Text . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->mgt_solicitacao_estoque_data_entregua->Text) . "', ";
         $Comando_SQL .= "'" . $this->mgt_solicitacao_estoque_status->Text . "', ";
         $Comando_SQL .= "'" . $this->mgt_solicitacao_estoque_observacao->Text . "' ";
         $Comando_SQL .= ")";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Atualiza o Estoque ***

         if($this->atualiza_estoque->Checked == true)
         {
            //*** Seleciona o Produto para Obter o Estoque ***

            $Comando_SQL = "select * from mgt_produtos";
            $Comando_SQL .= " where ";
            $Comando_SQL .= "mgt_produto_codigo = '" . trim($this->mgt_solicitacao_estoque_codigo->Text) . "'";

            GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
            GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

            //*** Registra o Movimento de Estoque ***

            $qtde_atual = 0;
            $qtde_anterior = 0;
            $qtde_informada = 0;

            $qtde_anterior = GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_estoque_atual'];
            $qtde_informada = trim($this->mgt_solicitacao_estoque_qtde_entregue->Text);
            $qtde_atual = $qtde_anterior - $qtde_informada;

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
            $Comando_SQL .= "mgt_movto_nro_entrada_saida) ";
            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_codigo']) . "',";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_referencia']) . "',";
            $Comando_SQL .= "'" . trim(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_descricao']) . "',";
            $Comando_SQL .= "'" . "2" . "',";
            $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
            $Comando_SQL .= "'" . $qtde_anterior . "',";
            $Comando_SQL .= "'" . $qtde_informada . "',";
            $Comando_SQL .= "'" . $qtde_atual . "',";
            $Comando_SQL .= "'0',";
            $Comando_SQL .= "'0')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Atualiza o Estoque no Cadastro do Produto ***

            $Comando_SQL = "update mgt_produtos set ";
            $Comando_SQL .= "mgt_produto_estoque_atual = '" . $qtde_atual . "' ";
            $Comando_SQL .= " where ";
            $Comando_SQL .= "mgt_produto_codigo = '" . trim($this->mgt_solicitacao_estoque_codigo->Text) . "'";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();
         }

         //*** Imprime a Solicitacao do Estoque ***
         $Comando_SQL = "Select ";
         $Comando_SQL .= "* ";
         $Comando_SQL .= "from ";
         $Comando_SQL .= "mgt_solicitacoes_estoque ";
         $Comando_SQL .= "where ";
         $Comando_SQL .= "mgt_solicitacao_estoque_observacao = '" . trim($this->mgt_solicitacao_estoque_observacao->Text) . "' ";
         $Comando_SQL .= "Order By mgt_solicitacao_estoque_nro Desc";

         GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Close();
         GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Open();

         echo '<script language="JavaScript">';
         echo "window.open('est_solicitacao_imp.php?mgt_solicitacao_estoque_nro=" . trim(GetConexaoPrincipal()->SQL_MGT_Solicitacoes_Estoque->Fields['mgt_solicitacao_estoque_nro']) . "','est_solicitacao_imp','toolbar=yes,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550');";
         echo 'window.location="est_solicitacao.php";';
         echo '</script>';
      }
   }

   function estsolicitacaoincJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

      <?php

   }

   function bt_fechar_produtoClick($sender, $params)
   {
      $this->solicitacao->Visible = true;
      $this->solicitacao->Top = 39;

      $this->opcoes->Visible = true;
      $this->opcoes->Top = 163;

      $this->adiciona_produtos->Top = 217;
      $this->adiciona_produtos->Visible = false;

      $this->atualiza_estoque->Checked = true;

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
   }
   function bt_adicionar_produtoClick($sender, $params)
   {
      $this->mgt_solicitacao_estoque_codigo->Text = $this->mgt_produto_codigo->Text;
      $this->mgt_solicitacao_estoque_descricao->Text = $this->mgt_produto_descricao->Text;

      $this->mgt_solicitacao_estoque_codigo_referencia->Text = $this->mgt_produto_codigo->Text;
      $this->mgt_solicitacao_estoque_descricao_referencia->Text = $this->mgt_produto_descricao->Text;

      $this->solicitacao->Visible = true;
      $this->solicitacao->Top = 39;

      $this->opcoes->Visible = true;
      $this->opcoes->Top = 163;

      $this->adiciona_produtos->Top = 217;
      $this->adiciona_produtos->Visible = false;

      $this->atualiza_estoque->Checked = true;

      GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
   }
   function bt_seleciona_produtoClick($sender, $params)
   {
      $this->solicitacao->Visible = false;
      $this->solicitacao->Top = 217;

      $this->opcoes->Visible = false;
      $this->opcoes->Top = 459;

      $this->adiciona_produtos->Top = 39;
      $this->adiciona_produtos->Visible = true;

      $this->atualiza_estoque->Checked = true;
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
           document.estsolicitacaoinc.opcao_busca_produto.focus();
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
           document.estsolicitacaoinc.bt_busca_produto.focus();
           return false;
        }

        //end
      <?php
   }
   function mgt_produto_descricaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.estsolicitacaoinc.bt_adicionar_produto.focus();
           return false;
        }

        //end
      <?php
   }
   function registros_produtosJSRowChanged($sender, $params)
   {
      ?>
        //begin js

        document.estsolicitacaoinc.mgt_produto_codigo.value = registros_produtos.getTableModel().getValue(0, registros_produtos.getFocusedRow());
        document.estsolicitacaoinc.mgt_produto_referencia.value = registros_produtos.getTableModel().getValue(1, registros_produtos.getFocusedRow());
        document.estsolicitacaoinc.mgt_produto_descricao.value = registros_produtos.getTableModel().getValue(2, registros_produtos.getFocusedRow());

        //end
      <?php
   }
    function mgt_solicitacao_estoque_codigo_referenciaJSKeyPress($sender, $params)
    {
        ?>
        //begin js

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.estsolicitacaoinc.mgt_solicitacao_estoque_descricao_referencia.focus();
     return false;
   }

        //end
        <?php
    }
    function mgt_solicitacao_estoque_descricao_referenciaJSKeyPress($sender, $params)
    {
        ?>
        //begin js

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.estsolicitacaoinc.mgt_solicitacao_estoque_data_solicitacao.focus();
     return false;
   }

        //end
        <?php
    }
}

global $application;

global $estsolicitacaoinc;

//Creates the form
$estsolicitacaoinc = new estsolicitacaoinc($application);

//Read from resource file
$estsolicitacaoinc->loadResource(__FILE__);

//Shows the form
$estsolicitacaoinc->show();

?>