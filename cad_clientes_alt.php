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
use_unit("comctrls.inc.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class cadclientesalt extends Page
{
    public $Label69 = null;
    public $mgt_cliente_assistente = null;
   public $mgt_cliente_nao_calcula_st = null;
   public $Label68 = null;
   public $mgt_operacao_cadastro_motivo = null;
   public $Label65 = null;
   public $Label67 = null;
   public $Panel2 = null;
   public $Label66 = null;
   public $Panel1 = null;
   public $bt_excluir = null;
   public $confirmacao = null;
   public $bt_sim = null;
   public $bt_nao = null;
   public $bt_alterar = null;
   public $mgt_transportadora_nao_cadastrada = null;
   public $mgt_cliente_pgto_frete = null;
   public $mgt_cliente_suframa = null;
   public $mgt_cliente_icms = null;
   public $mgt_cliente_emite_lote = null;
   public $mgt_cliente_tipo_transporte = null;
   public $mgt_cliente_consumo = null;
   public $mgt_cliente_condicao_pgto_4 = null;
   public $mgt_cliente_condicao_pgto_3 = null;
   public $mgt_cliente_condicao_pgto_2 = null;
   public $mgt_cliente_condicao_pgto_1 = null;
   public $mgt_cliente_desconto = null;
   public $mgt_cliente_valor_credito = null;
   public $mgt_cliente_status_credito = null;
   public $mgt_cliente_transportadora = null;
   public $mgt_cliente_vendedor = null;
   public $mgt_cliente_banco = null;
   public $mgt_cliente_observacoes_nota = null;
   public $mgt_cliente_observacoes = null;
   public $mgt_cliente_site = null;
   public $mgt_cliente_email = null;
   public $mgt_cliente_ddd = null;
   public $Label64 = null;
   public $mgt_cliente_fone_celular = null;
   public $mgt_cliente_fone_fax = null;
   public $mgt_cliente_fone_comercial = null;
   public $mgt_cliente_contato = null;
   public $mgt_cliente_fax_cobranca = null;
   public $mgt_cliente_fone_cobranca = null;
   public $mgt_cliente_pais_cobranca = null;
   public $mgt_cliente_cep_cobranca = null;
   public $mgt_cliente_estado_cobranca = null;
   public $mgt_cliente_cidade_cobranca = null;
   public $mgt_cliente_bairro_cobranca = null;
   public $mgt_cliente_complemento_cobranca = null;
   public $mgt_cliente_endereco_cobranca = null;
   public $mgt_cliente_fax_entrega = null;
   public $mgt_cliente_fone_entrega = null;
   public $mgt_cliente_pais_entrega = null;
   public $mgt_cliente_cep_entrega = null;
   public $mgt_cliente_estado_entrega = null;
   public $mgt_cliente_cidade_entrega = null;
   public $mgt_cliente_bairro_entrega = null;
   public $mgt_cliente_complemento_entrega = null;
   public $mgt_cliente_endereco_entrega = null;
   public $mgt_cliente_opcao_cobranca = null;
   public $mgt_cliente_opcao_entrega = null;
   public $mgt_cliente_fax = null;
   public $mgt_cliente_fone = null;
   public $mgt_cliente_pais = null;
   public $mgt_cliente_cep = null;
   public $mgt_cliente_estado = null;
   public $mgt_cliente_cidade = null;
   public $mgt_cliente_bairro = null;
   public $mgt_cliente_complemento = null;
   public $Label63 = null;
   public $Label62 = null;
   public $Label61 = null;
   public $mgt_cliente_endereco = null;
   public $mgt_cliente_inscricao_municipal = null;
   public $mgt_cliente_inscricao_estadual = null;
   public $mgt_cliente_razao_social = null;
   public $mgt_cliente_nome = null;
   public $mgt_cliente_data_visita = null;
   public $mgt_cliente_data_ultima_compra = null;
   public $mgt_cliente_data_alteracao = null;
   public $mgt_cliente_data_inclusao = null;
   public $mgt_cliente_tipo_pessoa = null;
   public $mgt_cliente_codigo_tipo = null;
   public $mgt_cliente_codigo = null;
   public $mgt_cliente_numero = null;
   public $Label60 = null;
   public $Label59 = null;
   public $Label58 = null;
   public $GroupBox9 = null;
   public $Label57 = null;
   public $Label56 = null;
   public $Label55 = null;
   public $Label54 = null;
   public $Label53 = null;
   public $Label52 = null;
   public $Label51 = null;
   public $Label50 = null;
   public $Label49 = null;
   public $GroupBox6 = null;
   public $Label48 = null;
   public $Label47 = null;
   public $Label12 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $area_sistema = null;

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
         $Comando_SQL .= "'" . trim($this->mgt_cliente_codigo->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_operacao_cadastro_motivo->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Exclui o registro escolhido ***

         $Comando_SQL = "delete from mgt_clientes ";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_cliente_numero = '" . trim($this->mgt_cliente_numero->Text) . "'";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         $this->confirmacao->Top = 809;
         $this->confirmacao->IsVisible = false;

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
         GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

         redirect('cad_clientes.php');
      }
   }

   function bt_excluirClick($sender, $params)
   {
      $this->confirmacao->Top = 217;
      $this->confirmacao->IsVisible = true;
   }

   function bt_naoClick($sender, $params)
   {
      $this->confirmacao->Top = 809;
      $this->confirmacao->IsVisible = false;
   }

   function mgt_cliente_numeroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_codigo.focus();
     return false;
   }

<?php

   }


   function mgt_cliente_opcao_cobrancaChange($sender, $params)
   {
      if(trim($this->mgt_cliente_opcao_cobranca->ItemIndex) == "O Mesmo")
      {
         $this->mgt_cliente_endereco_cobranca->Text = $this->mgt_cliente_endereco->Text;
         $this->mgt_cliente_complemento_cobranca->Text = $this->mgt_cliente_complemento->Text;
         $this->mgt_cliente_bairro_cobranca->Text = $this->mgt_cliente_bairro->Text;
         $this->mgt_cliente_cidade_cobranca->Text = $this->mgt_cliente_cidade->Text;
         $this->mgt_cliente_estado_cobranca->ItemIndex = $this->mgt_cliente_estado->ItemIndex;
         $this->mgt_cliente_cep_cobranca->Text = $this->mgt_cliente_cep->Text;
         $this->mgt_cliente_pais_cobranca->Text = $this->mgt_cliente_pais->Text;
         $this->mgt_cliente_fone_cobranca->Text = $this->mgt_cliente_fone->Text;
         $this->mgt_cliente_fax_cobranca->Text = $this->mgt_cliente_fax->Text;
      }
   }

   function mgt_cliente_opcao_entregaChange($sender, $params)
   {
      if(trim($this->mgt_cliente_opcao_entrega->ItemIndex) == "O Mesmo")
      {
         $this->mgt_cliente_endereco_entrega->Text = $this->mgt_cliente_endereco->Text;
         $this->mgt_cliente_complemento_entrega->Text = $this->mgt_cliente_complemento->Text;
         $this->mgt_cliente_bairro_entrega->Text = $this->mgt_cliente_bairro->Text;
         $this->mgt_cliente_cidade_entrega->Text = $this->mgt_cliente_cidade->Text;
         $this->mgt_cliente_estado_entrega->ItemIndex = $this->mgt_cliente_estado->ItemIndex;
         $this->mgt_cliente_cep_entrega->Text = $this->mgt_cliente_cep->Text;
         $this->mgt_cliente_pais_entrega->Text = $this->mgt_cliente_pais->Text;
         $this->mgt_cliente_fone_entrega->Text = $this->mgt_cliente_fone->Text;
         $this->mgt_cliente_fax_entrega->Text = $this->mgt_cliente_fax->Text;
      }
   }

   function mgt_cliente_suframaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.bt_alterar.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_pgto_freteJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_suframa.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_emite_loteJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_pgto_frete.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_icmsJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_emite_lote.focus();
     return false;
   }

<?php

   }

   function mgt_transportadora_nao_cadastradaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_icms.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_tipo_transporteJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_transportadora_nao_cadastrada.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_consumoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_tipo_transporte.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_condicao_pgto_4JSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_consumo.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_condicao_pgto_3JSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_condicao_pgto_4.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_condicao_pgto_2JSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_condicao_pgto_3.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_condicao_pgto_1JSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_condicao_pgto_2.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_descontoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_condicao_pgto_1.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_valor_creditoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_desconto.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_status_creditoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_valor_credito.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_transportadoraJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_status_credito.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_vendedorJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_assistente.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_bancoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_vendedor.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_observacoes_notaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_banco.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_fax_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_contato.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_fone_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_fax_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_pais_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_fone_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_cep_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_pais_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_estado_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_cep_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_cidade_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_estado_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_bairro_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_cidade_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_complemento_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_bairro_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_endereco_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_complemento_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_opcao_cobrancaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_endereco_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_fax_entregaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_opcao_cobranca.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_fone_entregaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_fax_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_pais_entregaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_fone_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_cep_entregaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_pais_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_estado_entregaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_cep_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_cidade_entregaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_estado_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_bairro_entregaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_cidade_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_complemento_entregaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_bairro_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_endereco_entregaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_complemento_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_opcao_entregaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_endereco_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_codigo_tipoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_codigo_tipo.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_icmsJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Valor ***

   var campo = document.cadclientesalt.mgt_cliente_icms;
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

   function mgt_cliente_condicao_pgto_4JSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadclientesalt.mgt_cliente_condicao_pgto_4
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

   function mgt_cliente_condicao_pgto_3JSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadclientesalt.mgt_cliente_condicao_pgto_3
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

   function mgt_cliente_condicao_pgto_2JSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadclientesalt.mgt_cliente_condicao_pgto_2
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

   function mgt_cliente_condicao_pgto_1JSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadclientesalt.mgt_cliente_condicao_pgto_1
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

   function mgt_cliente_descontoJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Valor ***

   var campo = document.cadclientesalt.mgt_cliente_desconto;
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

   function mgt_cliente_valor_creditoJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Valor ***

   var campo = document.cadclientesalt.mgt_cliente_valor_credito;
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

   function mgt_cliente_cep_cobrancaJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Traco ***

   var campo = document.cadclientesalt.mgt_cliente_cep_cobranca
   var digits="0123456789-"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Traco ***

<?php

   }

   function mgt_cliente_cep_entregaJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Traco ***

   var campo = document.cadclientesalt.mgt_cliente_cep_entrega
   var digits="0123456789-"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Traco ***

<?php

   }


   function mgt_cliente_data_visitaJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Barra ***

   var campo = document.cadclientesalt.mgt_cliente_data_visita
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Barra ***

<?php

   }

   function mgt_cliente_data_visitaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_nome.focus();
     return false;
   }

<?php

   }

   function mgt_fornecedor_data_ultima_compraJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

<?php

   }


   function mgt_cliente_data_ultima_compraJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_data_visita.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_data_alteracaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_data_ultima_compra.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_data_inclusaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_data_alteracao.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_siteJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_observacoes.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_fone_faxJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_email.focus();
     return false;
   }

<?php

   }


   function mgt_cliente_fone_celularJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_fone_fax.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_faxJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_opcao_entrega.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_foneJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_fax.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_tipo_pessoaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_data_inclusao.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_data_ultima_compraJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Barra ***

   var campo = document.cadclientesalt.mgt_cliente_data_ultima_compra
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Barra ***

<?php

   }

   function mgt_cliente_data_alteracaoJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Barra ***

   var campo = document.cadclientesalt.mgt_cliente_data_alteracao
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Barra ***

<?php

   }

   function mgt_cliente_data_inclusaoJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Barra ***

   var campo = document.cadclientesalt.mgt_cliente_data_inclusao
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Barra ***

<?php

   }

   function mgt_cliente_codigoJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero, Ponto, Barra e Traco ***

   var campo = document.cadclientesalt.mgt_cliente_codigo
   var digits="0123456789./-"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero, Ponto, Barra e Traco ***

<?php

   }

   function mgt_cliente_ramalJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadclientesalt.mgt_cliente_ramal
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

   function mgt_cliente_dddJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.cadclientesalt.mgt_cliente_ddd
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

   function mgt_cliente_cepJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero e Traco ***

   var campo = document.cadclientesalt.mgt_cliente_cep
   var digits="0123456789-"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero e Traco ***

<?php

   }

   function mgt_cliente_observacoesJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_observacoes_nota.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_emailJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_site.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_contatoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_ddd.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_fone_comercialJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_fone_celular.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_ramalJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_fone.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_dddJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_fone_comercial.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_paisJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_fone.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_cepJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_pais.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_estadoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_cep.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_cidadeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_estado.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_bairroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_cidade.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_complementoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_bairro.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_enderecoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_complemento.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_inscricao_municipalJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_endereco.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_razao_socialJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_inscricao_estadual.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_inscricao_estadualJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_inscricao_municipal.focus();
     return false;
   }

<?php

   }

   function mgt_cliente_codigoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_tipo_pessoa.focus();
     return false;
   }

<?php

   }

   function cadclientesaltCreate($sender, $params)
   {
      require_once("includes/valida_sessao.inc.php");
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

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

      $mgt_cliente_numero = $_REQUEST['mgt_cliente_numero'];

      $Comando_SQL = "select * from mgt_clientes where mgt_cliente_numero = '" . trim($mgt_cliente_numero) . "' order by mgt_cliente_numero";

      GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
      GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

      $this->MSG_Erro->Caption = "";

      //*** Carrega o Banco ***

      $this->mgt_cliente_banco->Clear();

      $Comando_SQL = "select * from mgt_bancos order by mgt_banco_descricao";

      GetConexaoPrincipal()->SQL_MGT_Bancos->Close();
      GetConexaoPrincipal()->SQL_MGT_Bancos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Bancos->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Bancos->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Bancos->EOF) != 1)
         {
            $this->mgt_cliente_banco->AddItem(GetConexaoPrincipal()->SQL_MGT_Bancos->Fields['mgt_banco_descricao'], null , GetConexaoPrincipal()->SQL_MGT_Bancos->Fields['mgt_banco_codigo']);
            GetConexaoPrincipal()->SQL_MGT_Bancos->Next();
         }
      }

      //*** Carrega o Representante/Vendedor ***

      $this->mgt_cliente_vendedor->Clear();

      $Comando_SQL = "select * from mgt_representantes order by mgt_representante_nome";

      GetConexaoPrincipal()->SQL_MGT_Representantes->Close();
      GetConexaoPrincipal()->SQL_MGT_Representantes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Representantes->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Representantes->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Representantes->EOF) != 1)
         {
            $this->mgt_cliente_vendedor->AddItem(GetConexaoPrincipal()->SQL_MGT_Representantes->Fields['mgt_representante_nome'], null , GetConexaoPrincipal()->SQL_MGT_Representantes->Fields['mgt_representante_codigo']);
            GetConexaoPrincipal()->SQL_MGT_Representantes->Next();
         }
      }

      //*** Carrega os Assistentes ***

      $this->mgt_cliente_assistente->Clear();

      $Comando_SQL = "select * from mgt_assistentes order by mgt_assistente_nome";

      GetConexaoPrincipal()->SQL_MGT_Assistentes->Close();
      GetConexaoPrincipal()->SQL_MGT_Assistentes->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Assistentes->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Assistentes->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Assistentes->EOF) != 1)
         {
            $this->mgt_cliente_assistente->AddItem(GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_nome'], null , GetConexaoPrincipal()->SQL_MGT_Assistentes->Fields['mgt_assistente_codigo']);
            GetConexaoPrincipal()->SQL_MGT_Assistentes->Next();
         }
      }

      //*** Carrega as Transportadoras ***

      $this->mgt_cliente_transportadora->Clear();

      $Comando_SQL = "select * from mgt_transportadoras order by mgt_transportadora_nome";

      GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
      GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Transportadoras->EOF) != 1)
         {
            $this->mgt_cliente_transportadora->AddItem(GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_nome'], null , GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_numero']);
            GetConexaoPrincipal()->SQL_MGT_Transportadoras->Next();
         }
      }

      //*** Inicio - Carrega os Estados ***

      $this->mgt_cliente_estado->Clear();
      $this->mgt_cliente_estado->AddItem("AC", null , "AC");
      $this->mgt_cliente_estado->AddItem("AL", null , "AL");
      $this->mgt_cliente_estado->AddItem("AP", null , "AP");
      $this->mgt_cliente_estado->AddItem("AM", null , "AM");
      $this->mgt_cliente_estado->AddItem("BA", null , "BA");
      $this->mgt_cliente_estado->AddItem("CE", null , "CE");
      $this->mgt_cliente_estado->AddItem("DF", null , "DF");
      $this->mgt_cliente_estado->AddItem("ES", null , "ES");
      $this->mgt_cliente_estado->AddItem("GO", null , "GO");
      $this->mgt_cliente_estado->AddItem("MA", null , "MA");
      $this->mgt_cliente_estado->AddItem("MT", null , "MT");
      $this->mgt_cliente_estado->AddItem("MS", null , "MS");
      $this->mgt_cliente_estado->AddItem("MG", null , "MG");
      $this->mgt_cliente_estado->AddItem("PA", null , "PA");
      $this->mgt_cliente_estado->AddItem("PB", null , "PB");
      $this->mgt_cliente_estado->AddItem("PR", null , "PR");
      $this->mgt_cliente_estado->AddItem("PE", null , "PE");
      $this->mgt_cliente_estado->AddItem("PI", null , "PI");
      $this->mgt_cliente_estado->AddItem("RN", null , "RN");
      $this->mgt_cliente_estado->AddItem("RS", null , "RS");
      $this->mgt_cliente_estado->AddItem("RJ", null , "RJ");
      $this->mgt_cliente_estado->AddItem("RO", null , "RO");
      $this->mgt_cliente_estado->AddItem("RR", null , "RR");
      $this->mgt_cliente_estado->AddItem("SC", null , "SC");
      $this->mgt_cliente_estado->AddItem("SP", null , "SP");
      $this->mgt_cliente_estado->AddItem("SE", null , "SE");
      $this->mgt_cliente_estado->AddItem("TO", null , "TO");
      $this->mgt_cliente_estado->AddItem("--", null , "--");
      $this->mgt_cliente_estado->ItemIndex = "SP";

      //*** Inicio - Carrega os Estados - Entrega ***

      $this->mgt_cliente_estado_entrega->Clear();
      $this->mgt_cliente_estado_entrega->AddItem("AC", null , "AC");
      $this->mgt_cliente_estado_entrega->AddItem("AL", null , "AL");
      $this->mgt_cliente_estado_entrega->AddItem("AP", null , "AP");
      $this->mgt_cliente_estado_entrega->AddItem("AM", null , "AM");
      $this->mgt_cliente_estado_entrega->AddItem("BA", null , "BA");
      $this->mgt_cliente_estado_entrega->AddItem("CE", null , "CE");
      $this->mgt_cliente_estado_entrega->AddItem("DF", null , "DF");
      $this->mgt_cliente_estado_entrega->AddItem("ES", null , "ES");
      $this->mgt_cliente_estado_entrega->AddItem("GO", null , "GO");
      $this->mgt_cliente_estado_entrega->AddItem("MA", null , "MA");
      $this->mgt_cliente_estado_entrega->AddItem("MT", null , "MT");
      $this->mgt_cliente_estado_entrega->AddItem("MS", null , "MS");
      $this->mgt_cliente_estado_entrega->AddItem("MG", null , "MG");
      $this->mgt_cliente_estado_entrega->AddItem("PA", null , "PA");
      $this->mgt_cliente_estado_entrega->AddItem("PB", null , "PB");
      $this->mgt_cliente_estado_entrega->AddItem("PR", null , "PR");
      $this->mgt_cliente_estado_entrega->AddItem("PE", null , "PE");
      $this->mgt_cliente_estado_entrega->AddItem("PI", null , "PI");
      $this->mgt_cliente_estado_entrega->AddItem("RN", null , "RN");
      $this->mgt_cliente_estado_entrega->AddItem("RS", null , "RS");
      $this->mgt_cliente_estado_entrega->AddItem("RJ", null , "RJ");
      $this->mgt_cliente_estado_entrega->AddItem("RO", null , "RO");
      $this->mgt_cliente_estado_entrega->AddItem("RR", null , "RR");
      $this->mgt_cliente_estado_entrega->AddItem("SC", null , "SC");
      $this->mgt_cliente_estado_entrega->AddItem("SP", null , "SP");
      $this->mgt_cliente_estado_entrega->AddItem("SE", null , "SE");
      $this->mgt_cliente_estado_entrega->AddItem("TO", null , "TO");
      $this->mgt_cliente_estado_entrega->AddItem("--", null , "--");
      $this->mgt_cliente_estado_entrega->ItemIndex = "SP";

      //*** Inicio - Carrega os Estados - Cobranca ***

      $this->mgt_cliente_estado_cobranca->Clear();
      $this->mgt_cliente_estado_cobranca->AddItem("AC", null , "AC");
      $this->mgt_cliente_estado_cobranca->AddItem("AL", null , "AL");
      $this->mgt_cliente_estado_cobranca->AddItem("AP", null , "AP");
      $this->mgt_cliente_estado_cobranca->AddItem("AM", null , "AM");
      $this->mgt_cliente_estado_cobranca->AddItem("BA", null , "BA");
      $this->mgt_cliente_estado_cobranca->AddItem("CE", null , "CE");
      $this->mgt_cliente_estado_cobranca->AddItem("DF", null , "DF");
      $this->mgt_cliente_estado_cobranca->AddItem("ES", null , "ES");
      $this->mgt_cliente_estado_cobranca->AddItem("GO", null , "GO");
      $this->mgt_cliente_estado_cobranca->AddItem("MA", null , "MA");
      $this->mgt_cliente_estado_cobranca->AddItem("MT", null , "MT");
      $this->mgt_cliente_estado_cobranca->AddItem("MS", null , "MS");
      $this->mgt_cliente_estado_cobranca->AddItem("MG", null , "MG");
      $this->mgt_cliente_estado_cobranca->AddItem("PA", null , "PA");
      $this->mgt_cliente_estado_cobranca->AddItem("PB", null , "PB");
      $this->mgt_cliente_estado_cobranca->AddItem("PR", null , "PR");
      $this->mgt_cliente_estado_cobranca->AddItem("PE", null , "PE");
      $this->mgt_cliente_estado_cobranca->AddItem("PI", null , "PI");
      $this->mgt_cliente_estado_cobranca->AddItem("RN", null , "RN");
      $this->mgt_cliente_estado_cobranca->AddItem("RS", null , "RS");
      $this->mgt_cliente_estado_cobranca->AddItem("RJ", null , "RJ");
      $this->mgt_cliente_estado_cobranca->AddItem("RO", null , "RO");
      $this->mgt_cliente_estado_cobranca->AddItem("RR", null , "RR");
      $this->mgt_cliente_estado_cobranca->AddItem("SC", null , "SC");
      $this->mgt_cliente_estado_cobranca->AddItem("SP", null , "SP");
      $this->mgt_cliente_estado_cobranca->AddItem("SE", null , "SE");
      $this->mgt_cliente_estado_cobranca->AddItem("TO", null , "TO");
      $this->mgt_cliente_estado_cobranca->AddItem("--", null , "--");
      $this->mgt_cliente_estado_cobranca->ItemIndex = "SP";

      //*** Carrega os Dados dos Clientes ***

      $this->mgt_cliente_numero->Text = $mgt_cliente_numero;
      $this->mgt_cliente_codigo->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_codigo'];
      $this->mgt_cliente_codigo_tipo->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_codigo_tipo'];
      $this->mgt_cliente_nome->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_nome'];
      $this->mgt_cliente_razao_social->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_razao_social'];
      $this->mgt_cliente_inscricao_municipal->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_inscricao_municipal'];
      $this->mgt_cliente_inscricao_estadual->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_inscricao_estadual'];
      $this->mgt_cliente_endereco->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_endereco'];
      $this->mgt_cliente_complemento->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_complemento'];
      $this->mgt_cliente_bairro->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_bairro'];
      $this->mgt_cliente_cidade->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cidade'];
      $this->mgt_cliente_estado->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_estado'];
      $this->mgt_cliente_cep->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cep'];
      $this->mgt_cliente_contato->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_contato'];
      $this->mgt_cliente_ddd->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_ddd'];
      $this->mgt_cliente_fone_comercial->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone_comercial'];
      $this->mgt_cliente_fone_celular->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone_celular'];
      $this->mgt_cliente_fone_fax->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone_fax'];
      $this->mgt_cliente_endereco_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_endereco_cobranca'];
      $this->mgt_cliente_complemento_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_complemento_cobranca'];
      $this->mgt_cliente_bairro_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_bairro_cobranca'];
      $this->mgt_cliente_cidade_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cidade_cobranca'];
      $this->mgt_cliente_estado_cobranca->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_estado_cobranca'];
      $this->mgt_cliente_cep_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cep_cobranca'];
      $this->mgt_cliente_pais_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_pais_cobranca'];
      $this->mgt_cliente_opcao_cobranca->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_opcao_cobranca'];
      $this->mgt_cliente_fone_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone_cobranca'];
      $this->mgt_cliente_fax_cobranca->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fax_cobranca'];
      $this->mgt_cliente_endereco_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_endereco_entrega'];
      $this->mgt_cliente_complemento_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_complemento_entrega'];
      $this->mgt_cliente_bairro_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_bairro_entrega'];
      $this->mgt_cliente_cidade_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cidade_entrega'];
      $this->mgt_cliente_estado_entrega->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_estado_entrega'];
      $this->mgt_cliente_cep_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_cep_entrega'];
      $this->mgt_cliente_pais_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_pais_entrega'];
      $this->mgt_cliente_opcao_entrega->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_opcao_entrega'];
      $this->mgt_cliente_fone_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone_entrega'];
      $this->mgt_cliente_fax_entrega->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fax_entrega'];
      //$this->mgt_cliente_valor_credito->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_valor_credito'];
      $this->mgt_cliente_valor_credito->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_ultimo_valor'];
      $this->mgt_cliente_status_credito->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_status_credito'];
      $this->mgt_cliente_banco->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_banco'];
      $this->mgt_cliente_vendedor->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_vendedor'];
      $this->mgt_cliente_tipo_pessoa->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_tipo_pessoa'];
      $this->mgt_cliente_data_inclusao->Text = inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_data_inclusao']);
      $this->mgt_cliente_data_visita->Text = inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_data_visita']);
      $this->mgt_cliente_data_alteracao->Text = inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_data_alteracao']);
      $this->mgt_cliente_data_ultima_compra->Text = inverte_data_amd_to_dma(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_data_ultima_compra']);
      $this->mgt_cliente_observacoes->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_observacoes'];
      $this->mgt_cliente_observacoes_nota->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_observacoes_nota'];
      $this->mgt_cliente_pais->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_pais'];
      $this->mgt_cliente_email->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_email'];
      $this->mgt_cliente_site->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_site'];
      $this->mgt_cliente_desconto->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_desconto'];
      $this->mgt_cliente_condicao_pgto_1->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_condicao_pgto_1'];
      $this->mgt_cliente_condicao_pgto_2->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_condicao_pgto_2'];
      $this->mgt_cliente_condicao_pgto_3->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_condicao_pgto_3'];
      $this->mgt_cliente_condicao_pgto_4->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_condicao_pgto_4'];
      $this->mgt_cliente_tipo_transporte->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_tipo_transporte'];
      $this->mgt_cliente_transportadora->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_transportadora'];
      $this->mgt_cliente_emite_lote->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_emite_lote'];
      $this->mgt_cliente_consumo->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_consumo'];
      $this->mgt_cliente_pgto_frete->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_pgto_frete'];
      $this->mgt_cliente_suframa->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_suframa'];
      $this->mgt_cliente_fone->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fone'];
      $this->mgt_cliente_fax->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_fax'];
      $this->mgt_cliente_icms->Text = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_icms'];
      $this->mgt_transportadora_nao_cadastrada->Text = '';
      $this->mgt_cliente_assistente->ItemIndex = GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_assistente'];

      if(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_nao_calcula_st'] == 'S')
      {
         $this->mgt_cliente_nao_calcula_st->Checked = true;
      }
      else
      {
         $this->mgt_cliente_nao_calcula_st->Checked = false;
      }
   }

   function mgt_cliente_nomeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadclientesalt.mgt_cliente_razao_social.focus();
     return false;
   }

<?php

   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
         GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

         redirect('cad_clientes.php');
   }

   function bt_alterarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_cliente_codigo->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Codigo.";
      }
      elseif(trim($this->mgt_cliente_nome->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Nome.";
      }
      else
      {
         if(trim($this->mgt_cliente_valor_credito->Text) == '')
         {
            $this->mgt_cliente_valor_credito->Text = '0';
         }

         if(trim($this->mgt_cliente_desconto->Text) == '')
         {
            $this->mgt_cliente_desconto->Text = '0';
         }

         if(trim($this->mgt_cliente_condicao_pgto_1->Text) == '')
         {
            $this->mgt_cliente_condicao_pgto_1->Text = '0';
         }

         if(trim($this->mgt_cliente_condicao_pgto_2->Text) == '')
         {
            $this->mgt_cliente_condicao_pgto_2->Text = '0';
         }

         if(trim($this->mgt_cliente_condicao_pgto_3->Text) == '')
         {
            $this->mgt_cliente_condicao_pgto_3->Text = '0';
         }

         if(trim($this->mgt_cliente_condicao_pgto_4->Text) == '')
         {
            $this->mgt_cliente_condicao_pgto_4->Text = '0';
         }

         if(trim($this->mgt_cliente_icms->Text) == '')
         {
            $this->mgt_cliente_icms->Text = '0';
         }

         $Comando_SQL = "update mgt_clientes set ";
         $Comando_SQL .= "mgt_cliente_codigo = '" . trim($this->mgt_cliente_codigo->Text) . "',";
         $Comando_SQL .= "mgt_cliente_codigo_tipo = '" . trim($this->mgt_cliente_codigo_tipo->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_nome = '" . trim($this->mgt_cliente_nome->Text) . "',";
         $Comando_SQL .= "mgt_cliente_razao_social = '" . trim($this->mgt_cliente_razao_social->Text) . "',";
         $Comando_SQL .= "mgt_cliente_inscricao_municipal = '" . trim($this->mgt_cliente_inscricao_municipal->Text) . "',";
         $Comando_SQL .= "mgt_cliente_inscricao_estadual = '" . trim($this->mgt_cliente_inscricao_estadual->Text) . "',";
         $Comando_SQL .= "mgt_cliente_endereco = '" . trim($this->mgt_cliente_endereco->Text) . "',";
         $Comando_SQL .= "mgt_cliente_complemento = '" . trim($this->mgt_cliente_complemento->Text) . "',";
         $Comando_SQL .= "mgt_cliente_bairro = '" . trim($this->mgt_cliente_bairro->Text) . "',";
         $Comando_SQL .= "mgt_cliente_cidade = '" . trim($this->mgt_cliente_cidade->Text) . "',";
         $Comando_SQL .= "mgt_cliente_estado = '" . trim($this->mgt_cliente_estado->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_cep = '" . trim($this->mgt_cliente_cep->Text) . "',";
         $Comando_SQL .= "mgt_cliente_contato = '" . trim($this->mgt_cliente_contato->Text) . "',";
         $Comando_SQL .= "mgt_cliente_ddd = '" . trim($this->mgt_cliente_ddd->Text) . "',";
         $Comando_SQL .= "mgt_cliente_fone_comercial = '" . trim($this->mgt_cliente_fone_comercial->Text) . "',";
         $Comando_SQL .= "mgt_cliente_fone_celular = '" . trim($this->mgt_cliente_fone_celular->Text) . "',";
         $Comando_SQL .= "mgt_cliente_fone_fax = '" . trim($this->mgt_cliente_fone_fax->Text) . "',";
         $Comando_SQL .= "mgt_cliente_endereco_cobranca = '" . trim($this->mgt_cliente_endereco_cobranca->Text) . "',";
         $Comando_SQL .= "mgt_cliente_complemento_cobranca = '" . trim($this->mgt_cliente_complemento_cobranca->Text) . "',";
         $Comando_SQL .= "mgt_cliente_bairro_cobranca = '" . trim($this->mgt_cliente_bairro_cobranca->Text) . "',";
         $Comando_SQL .= "mgt_cliente_cidade_cobranca = '" . trim($this->mgt_cliente_cidade_cobranca->Text) . "',";
         $Comando_SQL .= "mgt_cliente_estado_cobranca = '" . trim($this->mgt_cliente_estado_cobranca->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_cep_cobranca = '" . trim($this->mgt_cliente_cep_cobranca->Text) . "',";
         $Comando_SQL .= "mgt_cliente_pais_cobranca = '" . trim($this->mgt_cliente_pais_cobranca->Text) . "',";
         $Comando_SQL .= "mgt_cliente_opcao_cobranca = '" . trim($this->mgt_cliente_opcao_cobranca->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_fone_cobranca = '" . trim($this->mgt_cliente_fone_cobranca->Text) . "',";
         $Comando_SQL .= "mgt_cliente_fax_cobranca = '" . trim($this->mgt_cliente_fax_cobranca->Text) . "',";
         $Comando_SQL .= "mgt_cliente_endereco_entrega = '" . trim($this->mgt_cliente_endereco_entrega->Text) . "',";
         $Comando_SQL .= "mgt_cliente_complemento_entrega = '" . trim($this->mgt_cliente_complemento_entrega->Text) . "',";
         $Comando_SQL .= "mgt_cliente_bairro_entrega = '" . trim($this->mgt_cliente_bairro_entrega->Text) . "',";
         $Comando_SQL .= "mgt_cliente_cidade_entrega = '" . trim($this->mgt_cliente_cidade_entrega->Text) . "',";
         $Comando_SQL .= "mgt_cliente_estado_entrega = '" . trim($this->mgt_cliente_estado_entrega->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_cep_entrega = '" . trim($this->mgt_cliente_cep_entrega->Text) . "',";
         $Comando_SQL .= "mgt_cliente_pais_entrega = '" . trim($this->mgt_cliente_pais_entrega->Text) . "',";
         $Comando_SQL .= "mgt_cliente_opcao_entrega = '" . trim($this->mgt_cliente_opcao_entrega->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_fone_entrega = '" . trim($this->mgt_cliente_fone_entrega->Text) . "',";
         $Comando_SQL .= "mgt_cliente_fax_entrega = '" . trim($this->mgt_cliente_fax_entrega->Text) . "',";
         $Comando_SQL .= "mgt_cliente_valor_credito = '" . trim($this->mgt_cliente_valor_credito->Text) . "',";
         $Comando_SQL .= "mgt_cliente_status_credito = '" . trim($this->mgt_cliente_status_credito->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_banco = '" . trim($this->mgt_cliente_banco->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_vendedor = '" . trim($this->mgt_cliente_vendedor->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_assistente = '" . trim($this->mgt_cliente_assistente->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_tipo_pessoa = '" . trim($this->mgt_cliente_tipo_pessoa->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_data_inclusao = '" . inverte_data_dma_to_amd(trim($this->mgt_cliente_data_inclusao->Text)) . "',";
         $Comando_SQL .= "mgt_cliente_data_visita = '" . inverte_data_dma_to_amd(trim($this->mgt_cliente_data_visita->Text)) . "',";
         $Comando_SQL .= "mgt_cliente_data_alteracao = '" . inverte_data_dma_to_amd(trim($this->mgt_cliente_data_alteracao->Text)) . "',";
         $Comando_SQL .= "mgt_cliente_data_ultima_compra = '" . inverte_data_dma_to_amd(trim($this->mgt_cliente_data_ultima_compra->Text)) . "',";
         $Comando_SQL .= "mgt_cliente_observacoes = '" . trim($this->mgt_cliente_observacoes->Text) . "',";
         $Comando_SQL .= "mgt_cliente_observacoes_nota = '" . trim($this->mgt_cliente_observacoes_nota->Text) . "',";
         $Comando_SQL .= "mgt_cliente_pais = '" . trim($this->mgt_cliente_pais->Text) . "',";
         $Comando_SQL .= "mgt_cliente_email = '" . trim($this->mgt_cliente_email->Text) . "',";
         $Comando_SQL .= "mgt_cliente_site = '" . trim($this->mgt_cliente_site->Text) . "',";
         $Comando_SQL .= "mgt_cliente_desconto = '" . trim($this->mgt_cliente_desconto->Text) . "',";
         $Comando_SQL .= "mgt_cliente_condicao_pgto_1 = '" . trim($this->mgt_cliente_condicao_pgto_1->Text) . "',";
         $Comando_SQL .= "mgt_cliente_condicao_pgto_2 = '" . trim($this->mgt_cliente_condicao_pgto_2->Text) . "',";
         $Comando_SQL .= "mgt_cliente_condicao_pgto_3 = '" . trim($this->mgt_cliente_condicao_pgto_3->Text) . "',";
         $Comando_SQL .= "mgt_cliente_condicao_pgto_4 = '" . trim($this->mgt_cliente_condicao_pgto_4->Text) . "',";
         $Comando_SQL .= "mgt_cliente_tipo_transporte = '" . trim($this->mgt_cliente_tipo_transporte->ItemIndex) . "',";

         if(trim($this->mgt_transportadora_nao_cadastrada->Text) <> '')
         {
            //*** Insere a Transportadora Nova ***

            $Comando_SQL_Aux = "insert into mgt_transportadoras(";
            $Comando_SQL_Aux .= "mgt_transportadora_nome,";
            $Comando_SQL_Aux .= "mgt_transportadora_razao_social) ";
            $Comando_SQL_Aux .= "values(";
            $Comando_SQL_Aux .= "'" . trim($this->mgt_transportadora_nao_cadastrada->Text) . "',";
            $Comando_SQL_Aux .= "'" . trim($this->mgt_transportadora_nao_cadastrada->Text) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL_Aux;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Obtem o Nro da Transportadora Nova ***

            $Comando_SQL_Aux = "select * from mgt_transportadoras Where mgt_transportadora_nome = '" . trim($this->mgt_transportadora_nao_cadastrada->Text) . "'";

            GetConexaoPrincipal()->SQL_MGT_Transportadoras->Close();
            GetConexaoPrincipal()->SQL_MGT_Transportadoras->SQL = $Comando_SQL_Aux;
            GetConexaoPrincipal()->SQL_MGT_Transportadoras->Open();

            $Comando_SQL .= "mgt_cliente_transportadora = '" . trim(GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_numero']) . "',";
         }
         else
         {
            $Comando_SQL .= "mgt_cliente_transportadora = '" . trim($this->mgt_cliente_transportadora->ItemIndex) . "',";
         }

         $Comando_SQL .= "mgt_cliente_emite_lote = '" . trim($this->mgt_cliente_emite_lote->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_consumo = '" . trim($this->mgt_cliente_consumo->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_pgto_frete = '" . trim($this->mgt_cliente_pgto_frete->ItemIndex) . "',";
         $Comando_SQL .= "mgt_cliente_suframa = '" . trim($this->mgt_cliente_suframa->Text) . "',";
         $Comando_SQL .= "mgt_cliente_fone = '" . trim($this->mgt_cliente_fone->Text) . "',";
         $Comando_SQL .= "mgt_cliente_fax = '" . trim($this->mgt_cliente_fax->Text) . "',";
         $Comando_SQL .= "mgt_cliente_icms = '" . trim($this->mgt_cliente_icms->Text) . "', ";

         if($this->mgt_cliente_nao_calcula_st->Checked == true)
         {
            $Comando_SQL .= "mgt_cliente_nao_calcula_st = 'S' ";
         }
         else
         {
            $Comando_SQL .= "mgt_cliente_nao_calcula_st = 'N' ";
         }

         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_cliente_numero = '" . trim($this->mgt_cliente_numero->Text) . "'";

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
         $Comando_SQL .= "'" . 'Alteracao' . "',";
         $Comando_SQL .= "'" . trim($this->mgt_cliente_codigo->Text) . "',";
         $Comando_SQL .= "'" . 'Alteracao Efetuada pelo Usuario.' . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Clientes->Close();
         GetConexaoPrincipal()->SQL_MGT_Clientes->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Clientes->Open();

         redirect('cad_clientes.php');
      }

   }

   function cadclientesaltJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }
    function mgt_cliente_assistenteJSKeyPress($sender, $params)
    {
        ?>
        //begin js

        if((event.keyCode == 9) || (event.keyCode == 13) )
        {
          document.cadclientesalt.mgt_cliente_transportadora.focus();
          return false;
        }

        //end
        <?php
    }

}

global $application;

global $cadclientesalt;

//Creates the form
$cadclientesalt = new cadclientesalt($application);

//Read from resource file
$cadclientesalt->loadResource(__FILE__);

//Shows the form
$cadclientesalt->show();

?>