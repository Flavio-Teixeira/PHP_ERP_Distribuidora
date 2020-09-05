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
class cobtransferencia extends Page
{
   public $observacao = null;
   public $Label4 = null;
   public $valor_transferencia = null;
   public $Label3 = null;
   public $data_transferencia = null;
   public $Label2 = null;
   public $Label1 = null;
   public $conta_destino = null;
   public $Label19 = null;
   public $Panel2 = null;
   public $Panel1 = null;
   public $Label18 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $bt_transferir = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   public $Label25 = null;
   public $conta_origem = null;
   function cobtransferenciaCreate($sender, $params)
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
         if(isset($this->bt_transferir))
         {
            $this->bt_transferir->Visible = false;
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

      //*** Efetua a Limpeza dos Campos ***

      $this->data_transferencia->Text = date("d/m/Y", time());
      $this->MSG_Erro->Caption = "";

      //*** Carrega as Contas ***

      $this->conta_origem->Clear();
      $this->conta_destino->Clear();

      $Comando_SQL = "select * from mgt_contas_bancarias order by mgt_conta_bancaria_nro";

      GetConexaoPrincipal()->SQL_MGT_Contas->Close();
      GetConexaoPrincipal()->SQL_MGT_Contas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Contas->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Contas->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Contas->EOF) != 1)
         {
            $this->conta_origem->AddItem(GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_nro'] . ' - Banco: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_banco'] . ' - Ag.: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_agencia'] . ' - CC.: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_conta'] . ' - Titular: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_titular'], null, GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_nro']);
            $this->conta_destino->AddItem(GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_nro'] . ' - Banco: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_banco'] . ' - Ag.: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_agencia'] . ' - CC.: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_conta'] . ' - Titular: ' . GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_titular'], null, GetConexaoPrincipal()->SQL_MGT_Contas->Fields['mgt_conta_bancaria_nro']);
            GetConexaoPrincipal()->SQL_MGT_Contas->Next();
         }
      }










   }

   function mgt_tipo_produto_codigoJSKeyPress($sender, $params)
   {

      ?>
   //Add your javascript code here

      <?php

   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function cobtransferenciaJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

      <?php

   }
   function conta_origemJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.cobtransferencia.conta_destino.focus();
           return false;
        }

        //end
      <?php
   }
   function conta_destinoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.cobtransferencia.data_transferencia.focus();
           return false;
        }

        //end
      <?php
   }
   function data_transferenciaJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.cobtransferencia.valor_transferencia.focus();
           return false;
        }

        //end
      <?php
   }
   function valor_transferenciaJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.cobtransferencia.observacao.focus();
           return false;
        }

        //end
      <?php
   }
   function observacaoJSKeyPress($sender, $params)
   {
      ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
           document.cobtransferencia.bt_transferir.focus();
           return false;
        }

        //end
      <?php
   }
   function data_transferenciaJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Data ***

        var campo = document.cobtransferencia.data_transferencia;
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

        //end
      <?php
   }
   function valor_transferenciaJSKeyUp($sender, $params)
   {
      ?>
        //begin js

        //*** INICIO - So Valor ***

        var campo = document.cobtransferencia.valor_transferencia;
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
   function bt_transferirClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->data_transferencia->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe a Data de Transferencia';
      }
      elseif(trim($this->valor_transferencia->Text) == '')
      {
         $this->MSG_Erro->Caption = 'Por favor, informe o Valor da Transferencia';
      }
      else
      {
         $this->MSG_Erro->Caption = 'Transferencia entre Contas Realizada com Sucesso';

         //*** Seleciona a Numeracao para o Lancamento Manual ***

         $Comando_SQL = "Select * from mgt_notas_fiscais Where mgt_nota_fiscal_finalidade = 'NVL' Order By mgt_nota_fiscal_numero Desc";

         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

         $numero_nao_vinculado = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'];
         $numero_nao_vinculado = intval($numero_nao_vinculado) + 1;

         //*** Insere um Registro no Contas a Receber (Pago) ***

         $Comando_SQL = "insert into mgt_notas_fiscais(";

         $Comando_SQL .= "mgt_nota_fiscal_finalidade, ";
         $Comando_SQL .= "mgt_nota_fiscal_numero, ";

         $Comando_SQL .= "mgt_nota_fiscal_faturamento, ";
         $Comando_SQL .= "mgt_nota_fiscal_pedido, ";
         $Comando_SQL .= "mgt_nota_fiscal_cfop, ";
         $Comando_SQL .= "mgt_nota_fiscal_cfop_2, ";
         $Comando_SQL .= "mgt_nota_fiscal_tipo_nota, ";

         $Comando_SQL .= "mgt_nota_fiscal_cliente_numero, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_codigo, ";
         $Comando_SQL .= "mgt_nota_fiscal_cliente_nome, ";
         $Comando_SQL .= "mgt_nota_fiscal_razao_social, ";

         $Comando_SQL .= "mgt_nota_fiscal_data_emissao, ";
         $Comando_SQL .= "mgt_nota_fiscal_banco, ";
         $Comando_SQL .= "mgt_nota_fiscal_valor_total, ";

         $Comando_SQL .= "mgt_nota_fiscal_cliente_condicao_pgto_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_nro_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_vcto_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_juros_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_forma_1, ";
         $Comando_SQL .= "mgt_nota_fiscal_dup_obs_1) ";

         $Comando_SQL .= "values(";

         $Comando_SQL .= "'NVL', ";
         $Comando_SQL .= "'" . trim($numero_nao_vinculado) . "', ";

         $Comando_SQL .= "'0', ";
         $Comando_SQL .= "'0', ";
         $Comando_SQL .= "'0000', ";
         $Comando_SQL .= "'0000', ";
         $Comando_SQL .= "'1', ";

         $Comando_SQL .= "'" . trim($numero_nao_vinculado) . "', ";
         $Comando_SQL .= "'" . trim($_SESSION['login_cnpj']) . "', ";
         $Comando_SQL .= "'" . "TRANSFERENCIA ENTRE CONTAS DE: " . trim($this->conta_origem->ItemIndex) . " PARA: " . trim($this->conta_destino->ItemIndex) . "', ";
         $Comando_SQL .= "'" . "TRANSFERENCIA ENTRE CONTAS DE: " . trim($this->conta_origem->ItemIndex) . " PARA: " . trim($this->conta_destino->ItemIndex) . "', ";

         $Comando_SQL .= "'" . date("Y-m-d", time()) . "',";
         $Comando_SQL .= "'" . "999" . "',";
         $Comando_SQL .= "'" . trim($this->valor_transferencia->Text) . "',";

         $Comando_SQL .= "'" . "0" . "',";
         $Comando_SQL .= "'" . trim($numero_nao_vinculado) . "',";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->data_transferencia->Text) . "',";
         $Comando_SQL .= "'" . trim($this->valor_transferencia->Text) . "',";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd($this->data_transferencia->Text) . "',";
         $Comando_SQL .= "'" . "0.00" . "',";
         $Comando_SQL .= "'" . trim($this->valor_transferencia->Text) . "',";
         $Comando_SQL .= "'" . "0" . "',";
         $Comando_SQL .= "'" . trim($this->observacao->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Insere o Regsitro no Contas a Pagar Pago ***

         $Comando_SQL = "Insert into mgt_contas_pagar(";
         $Comando_SQL .= "mgt_conta_pagar_data, ";
         $Comando_SQL .= "mgt_conta_pagar_data_pagto, ";
         $Comando_SQL .= "mgt_conta_pagar_descricao, ";
         $Comando_SQL .= "mgt_conta_pagar_valor, ";
         $Comando_SQL .= "mgt_conta_pagar_conta, ";
         $Comando_SQL .= "mgt_conta_pagar_status, ";
         $Comando_SQL .= "mgt_conta_pagar_posicao, ";
         $Comando_SQL .= "mgt_conta_pagar_fixo, ";
         $Comando_SQL .= "mgt_conta_pagar_valor_ser_pago, ";
         $Comando_SQL .= "mgt_conta_pagar_valor_juros, ";
         $Comando_SQL .= "mgt_conta_pagar_valor_desconto, ";
         $Comando_SQL .= "mgt_conta_pagar_observacao, ";
         $Comando_SQL .= "mgt_conta_pagar_saldo, ";
         $Comando_SQL .= "mgt_conta_pagar_fornecedor_numero, ";
         $Comando_SQL .= "mgt_conta_pagar_fornecedor_nome, ";
         $Comando_SQL .= "mgt_conta_pagar_data_emissao) ";
         $Comando_SQL .= "Values(";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->data_transferencia->Text)) . "', ";
         $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->data_transferencia->Text)) . "', ";
         $Comando_SQL .= "'" . "TRANSFERENCIA ENTRE CONTAS DE: " . trim($this->conta_origem->ItemIndex) . " PARA: " . trim($this->conta_destino->ItemIndex) . "', ";
         $Comando_SQL .= "'" . trim($this->valor_transferencia->Text) . "', ";
         $Comando_SQL .= "'" . trim($this->conta_origem->ItemIndex) . "', ";
         $Comando_SQL .= "'Pago', ";
         $Comando_SQL .= "'2', ";
         $Comando_SQL .= "'N', ";
         $Comando_SQL .= "'" . trim($this->valor_transferencia->Text) . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . trim($this->observacao->Text) . "', ";
         $Comando_SQL .= "'" . "0.00" . "', ";
         $Comando_SQL .= "'" . "0" . "', ";
         $Comando_SQL .= "'" . "" . "', ";
         $Comando_SQL .= "'" . date("Y-m-d", time()) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Registra o motivo da alteracao do registro. ***

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
         $Comando_SQL .= "'" . 'Transferencia entre Contas' . "',";
         $Comando_SQL .= "'DT:" . trim($this->data_transferencia->Text) . " VLR: " . trim($this->valor_transferencia->Text) . "',";
         $Comando_SQL .= "'" . 'Transferencia entre Contas Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Limpa os Campos para a Proxima Transferencia ***

         $this->valor_transferencia->Text = '';
         $this->observacao->Text = '';
      }
   }

}

global $application;

global $cobtransferencia;

//Creates the form
$cobtransferencia = new cobtransferencia($application);

//Read from resource file
$cobtransferencia->loadResource(__FILE__);

//Shows the form
$cobtransferencia->show();

?>