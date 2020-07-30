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
class cadprodutosinc extends Page
{
   public $mgt_produto_ncm = null;
   public $Label28 = null;
   public $Label26 = null;
   public $Panel2 = null;
   public $Label20 = null;
   public $Panel1 = null;
   public $GroupBox3 = null;
   public $mgt_produto_localizacao = null;
   public $mgt_produto_valor_compra = null;
   public $mgt_produto_custo_medio = null;
   public $mgt_produto_estoque_minimo = null;
   public $mgt_produto_estoque_ideal = null;
   public $Label25 = null;
   public $Label21 = null;
   public $Label24 = null;
   public $Label23 = null;
   public $Label22 = null;
   public $mgt_produto_descricao_detalhada = null;
   public $Label19 = null;
   public $mgt_produto_preco = null;
   public $Label18 = null;
   public $mgt_produto_ipi = null;
   public $Label17 = null;
   public $Label16 = null;
   public $mgt_produto_classif_tributaria = null;
   public $mgt_produto_classif_fiscal = null;
   public $Label15 = null;
   public $mgt_produto_data_alteracao = null;
   public $Label14 = null;
   public $Label13 = null;
   public $mgt_produto_estoque_atual = null;
   public $mgt_produto_estoque_inicial = null;
   public $Label12 = null;
   public $mgt_produto_peso = null;
   public $Label11 = null;
   public $mgt_produto_unidade_pesagem = null;
   public $Label10 = null;
   public $mgt_produto_unidade = null;
   public $Label9 = null;
   public $Label8 = null;
   public $mgt_produto_codigo_barras = null;
   public $mgt_produto_lote = null;
   public $Label7 = null;
   public $mgt_produto_fornecedor = null;
   public $Label6 = null;
   public $mgt_produto_referencia = null;
   public $Label5 = null;
   public $mgt_produto_tipo = null;
   public $Label4 = null;
   public $mgt_produto_familia = null;
   public $Label3 = null;
   public $mgt_produto_descricao = null;
   public $Label2 = null;
   public $mgt_produto_codigo = null;
   public $Label1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $bt_incluir = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $area_sistema = null;
   function mgt_produto_ncmJSKeyUp($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadprodutosinc.mgt_produto_ncm
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

   function mgt_produto_ncmJSKeyPress($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_classif_tributaria.focus();
     return false;
   }

   <?php

   }

   function mgt_produto_precoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosinc.mgt_produto_preco;
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

   function mgt_produto_custo_medioJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosinc.mgt_produto_custo_medio;
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

   function mgt_produto_valor_compraJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosinc.mgt_produto_valor_compra;
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

   function mgt_produto_ipiJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosinc.mgt_produto_ipi;
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

   function mgt_produto_classif_tributariaJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numeros ***

   var campo = document.cadprodutosinc.mgt_produto_classif_tributaria
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numeros ***

<?php

   }

   function mgt_produto_data_alteracaoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numeros e Barra ***

   var campo = document.cadprodutosinc.mgt_produto_data_alteracao
   var digits="0123456789/"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numeros e Barras ***

<?php

   }

   function mgt_produto_estoque_atualJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosinc.mgt_produto_estoque_atual;
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

   function mgt_produto_estoque_idealJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosinc.mgt_produto_estoque_ideal;
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

   function mgt_produto_estoque_minimoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosinc.mgt_produto_estoque_minimo;
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

   function mgt_produto_estoque_inicialJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosinc.mgt_produto_estoque_inicial;
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

   function mgt_produto_fornecedorJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadprodutosinc.mgt_produto_fornecedor
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

   function mgt_produto_pesoJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Valor ***

   var campo = document.cadprodutosinc.mgt_produto_peso;
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

   function mgt_produto_codigo_barrasJSKeyUp($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   //*** INICIO - So Numero ***

   var campo = document.cadprodutosinc.mgt_produto_codigo_barras
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

   function mgt_produto_estoque_minimoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_estoque_ideal.focus();
     return false;
   }
<?php

   }

   function mgt_produto_custo_medioJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_preco.focus();
     return false;
   }
<?php

   }

   function mgt_produto_valor_compraJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_custo_medio.focus();
     return false;
   }
<?php

   }


   function mgt_produto_localizacaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_estoque_inicial.focus();
     return false;
   }
<?php

   }

   function mgt_produto_estoque_idealJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_estoque_atual.focus();
     return false;
   }
<?php

   }

   function mgt_produto_descricao_detalhadaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.bt_incluir.focus();
     return false;
   }
<?php

   }

   function mgt_produto_precoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_descricao_detalhada.focus();
     return false;
   }
<?php

   }

   function mgt_produto_ipiJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_valor_compra.focus();
     return false;
   }
<?php

   }

   function mgt_produto_classif_tributariaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_ipi.focus();
     return false;
   }
<?php

   }

   function mgt_produto_classif_fiscalJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_ncm.focus();
     return false;
   }
<?php

   }

   function mgt_produto_data_alteracaoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_classif_fiscal.focus();
     return false;
   }
<?php

   }

   function mgt_produto_estoque_atualJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_data_alteracao.focus();
     return false;
   }
<?php

   }

   function mgt_produto_estoque_inicialJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_estoque_minimo.focus();
     return false;
   }
<?php

   }

   function mgt_produto_pesoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_fornecedor.focus();
     return false;
   }
<?php

   }

   function mgt_produto_unidade_pesagemJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_peso.focus();
     return false;
   }
<?php

   }

   function mgt_produto_unidadeJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_unidade_pesagem.focus();
     return false;
   }
<?php

   }

   function mgt_produto_codigo_barrasJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_unidade.focus();
     return false;
   }
<?php

   }

   function mgt_produto_loteJSKeyPress($sender, $params)
   {
?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_codigo_barras.focus();
     return false;
   }
<?php

   }


   function mgt_produto_fornecedorJSKeyPress($sender, $params)
   {
?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_localizacao.focus();
     return false;
   }
<?php

   }

   function mgt_produto_referenciaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_lote.focus();
     return false;
   }
<?php

   }


   function mgt_produto_tipoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_referencia.focus();
     return false;
   }
<?php

   }


   function mgt_produto_familiaJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here
   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_tipo.focus();
     return false;
   }
<?php

   }

   function cadprodutosincCreate($sender, $params)
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

      $this->MSG_Erro->Caption = "";

      /*** Inicio - Carrega as Familias ***/

      $Comando_SQL = "select * from mgt_familias_produtos order by mgt_familia_produto_descricao";

      GetConexaoPrincipal()->SQL_MGT_Familias->Close();
      GetConexaoPrincipal()->SQL_MGT_Familias->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Familias->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Familias->EOF) != 1)
      {

         $this->mgt_produto_familia->Clear();

         while(GetConexaoPrincipal()->SQL_MGT_Familias->EOF != 1)
         {
            $this->mgt_produto_familia->AddItem(GetConexaoPrincipal()->SQL_MGT_Familias->Fields['mgt_familia_produto_descricao'], null , GetConexaoPrincipal()->SQL_MGT_Familias->Fields['mgt_familia_produto_codigo']);

            GetConexaoPrincipal()->SQL_MGT_Familias->Next();
         }

      }

      /*** Final - Carrega as Familias ***/

      /*** Inicio - Carrega os Tipos ***/

      $Comando_SQL = "select * from mgt_tipos_produtos order by mgt_tipo_produto_descricao";

      GetConexaoPrincipal()->SQL_MGT_Tipos->Close();
      GetConexaoPrincipal()->SQL_MGT_Tipos->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Tipos->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Tipos->EOF) != 1)
      {

         $this->mgt_produto_tipo->Clear();

         while(GetConexaoPrincipal()->SQL_MGT_Tipos->EOF != 1)
         {
            $this->mgt_produto_tipo->AddItem(GetConexaoPrincipal()->SQL_MGT_Tipos->Fields['mgt_tipo_produto_descricao'], null , GetConexaoPrincipal()->SQL_MGT_Tipos->Fields['mgt_tipo_produto_codigo']);

            GetConexaoPrincipal()->SQL_MGT_Tipos->Next();
         }

      }

      /*** Final - Carrega os Tipos ***/

      //*** Efetua a Limpeza dos Campos ***

      $this->mgt_produto_data_alteracao->Text = date("d/m/Y", time());

      $this->mgt_produto_familia->ItemIndex = 0;
      $this->mgt_produto_tipo->ItemIndex = 0;

      $this->mgt_produto_codigo->Text = '';
      $this->mgt_produto_descricao->Text = '';
      $this->mgt_produto_peso->Text = '';
      $this->mgt_produto_unidade->Text = '';
      $this->mgt_produto_estoque_inicial->Text = '';
      $this->mgt_produto_estoque_atual->Text = '';
      $this->mgt_produto_unidade_pesagem->Text = '';
      $this->mgt_produto_classif_tributaria->Text = '';
      $this->mgt_produto_classif_fiscal->Text = '';
      $this->mgt_produto_codigo_barras->Text = '';
      $this->mgt_produto_lote->Text = '';
      $this->mgt_produto_preco->Text = '';
      $this->mgt_produto_ipi->Text = '';
      $this->mgt_produto_referencia->Text = '';
      $this->mgt_produto_fornecedor->Text = '';
      $this->mgt_produto_descricao_detalhada->Text = '';

      $this->mgt_produto_localizacao->Text = '';
      $this->mgt_produto_estoque_minimo->Text = '';
      $this->mgt_produto_estoque_ideal->Text = '';
      $this->mgt_produto_valor_compra->Text = '';
      $this->mgt_produto_custo_medio->Text = '';
      $this->mgt_produto_ncm->Text = '';
   }

   function mgt_produto_descricaoJSKeyPress($sender, $params)
   {
?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_familia.focus();
     return false;
   }

<?php

   }

   function mgt_produto_codigoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutosinc.mgt_produto_descricao.focus();
     return false;
   }

<?php

   }


   function bt_incluirJSClick($sender, $params)
   {

?>
   //Add your javascript code here

<?php

   }

   function bt_fecharClick($sender, $params)
   {
         //*** Restaura a Ultima Selecao Efetuada ***
         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $_SESSION['comando_sql_grid'];
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         redirect('cad_produtos.php');
   }

   function bt_incluirClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->mgt_produto_codigo->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Codigo.";
      }
      elseif(trim($this->mgt_produto_descricao->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Descricao.";
      }
      else
      {
         $Comando_SQL = "select * from mgt_produtos where mgt_produto_codigo = '" . $this->mgt_produto_codigo->Text . "' order by mgt_produto_codigo";

         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Produtos->EOF) == 1)
         {
            if(trim($this->mgt_produto_peso->Text) == '')
            {
               $this->mgt_produto_peso->Text = '0';
            }

            if(trim($this->mgt_produto_estoque_inicial->Text) == '')
            {
               $this->mgt_produto_estoque_inicial->Text = '0';
            }

            if(trim($this->mgt_produto_estoque_ideal->Text) == '')
            {
               $this->mgt_produto_estoque_ideal->Text = '0';
            }

            if(trim($this->mgt_produto_estoque_minimo->Text) == '')
            {
               $this->mgt_produto_estoque_minimo->Text = '0';
            }

            if(trim($this->mgt_produto_estoque_atual->Text) == '')
            {
               $this->mgt_produto_estoque_atual->Text = '0';
            }

            if(trim($this->mgt_produto_classif_tributaria->Text) == '')
            {
               $this->mgt_produto_classif_tributaria->Text = '0';
            }

            if(trim($this->mgt_produto_preco->Text) == '')
            {
               $this->mgt_produto_preco->Text = '0';
            }

            if(trim($this->mgt_produto_valor_compra->Text) == '')
            {
               $this->mgt_produto_valor_compra->Text = '0';
            }

            if(trim($this->mgt_produto_codigo_barras->Text) == '')
            {
               $this->mgt_produto_codigo_barras->Text = '0';
            }

            if(trim($this->mgt_produto_lote->Text) == '')
            {
               $this->mgt_produto_lote->Text = '0';
            }

            if(trim($this->mgt_produto_ipi->Text) == '')
            {
               $this->mgt_produto_ipi->Text = '0';
            }

            if(trim($this->mgt_produto_fornecedor->Text) == '')
            {
               $this->mgt_produto_fornecedor->Text = '0';
            }

            if(trim($this->mgt_produto_custo_medio->Text) == '')
            {
               $this->mgt_produto_custo_medio->Text = '0';
            }

            $Comando_SQL = "insert into mgt_produtos(";
            $Comando_SQL .= "mgt_produto_codigo, ";
            $Comando_SQL .= "mgt_produto_descricao, ";
            $Comando_SQL .= "mgt_produto_familia, ";
            $Comando_SQL .= "mgt_produto_peso, ";
            $Comando_SQL .= "mgt_produto_unidade, ";
            $Comando_SQL .= "mgt_produto_tipo, ";
            $Comando_SQL .= "mgt_produto_estoque_inicial, ";
            $Comando_SQL .= "mgt_produto_estoque_atual, ";
            $Comando_SQL .= "mgt_produto_unidade_pesagem, ";
            $Comando_SQL .= "mgt_produto_classif_tributaria, ";
            $Comando_SQL .= "mgt_produto_classif_fiscal, ";
            $Comando_SQL .= "mgt_produto_codigo_barras, ";
            $Comando_SQL .= "mgt_produto_lote, ";
            $Comando_SQL .= "mgt_produto_preco, ";
            $Comando_SQL .= "mgt_produto_data_alteracao, ";
            $Comando_SQL .= "mgt_produto_ipi, ";
            $Comando_SQL .= "mgt_produto_referencia, ";
            $Comando_SQL .= "mgt_produto_fornecedor, ";
            $Comando_SQL .= "mgt_produto_descricao_detalhada, ";
            $Comando_SQL .= "mgt_produto_localizacao, ";
            $Comando_SQL .= "mgt_produto_estoque_minimo, ";
            $Comando_SQL .= "mgt_produto_estoque_ideal, ";
            $Comando_SQL .= "mgt_produto_valor_compra, ";
            $Comando_SQL .= "mgt_produto_custo_medio, ";
            $Comando_SQL .= "mgt_produto_ncm) ";

            $Comando_SQL .= "values(";
            $Comando_SQL .= "'" . strtoupper(trim($this->mgt_produto_codigo->Text)) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_descricao->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_familia->ItemIndex) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_peso->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_unidade->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_tipo->ItemIndex) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_estoque_inicial->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_estoque_atual->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_unidade_pesagem->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_classif_tributaria->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_classif_fiscal->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_codigo_barras->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_lote->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_preco->Text) . "',";
            $Comando_SQL .= "'" . inverte_data_dma_to_amd(trim($this->mgt_produto_data_alteracao->Text)) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_ipi->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_referencia->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_fornecedor->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_descricao_detalhada->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_localizacao->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_estoque_minimo->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_estoque_ideal->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_valor_compra->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_custo_medio->Text) . "',";
            $Comando_SQL .= "'" . trim($this->mgt_produto_ncm->Text) . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            //*** Restaura a Ultima Selecao Efetuada ***
            GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
            GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $_SESSION['comando_sql_grid'];
            GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

            redirect('cad_produtos.php');
         }
         else
         {
            $this->MSG_Erro->Caption = "Este cadastro ja existe.";
         }
      }

   }

   function cadprodutosincJSSubmit($sender, $params)
   {

?>
       //Add your javascript code here

<?php

   }

   function cadprodutosincJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cadprodutosinc;

//Creates the form
$cadprodutosinc = new cadprodutosinc($application);

//Read from resource file
$cadprodutosinc->loadResource(__FILE__);

//Shows the form
$cadprodutosinc->show();

?>