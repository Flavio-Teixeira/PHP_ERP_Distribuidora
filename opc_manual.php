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
use_unit("checklst.inc.php");
use_unit("actnlist.inc.php");
use_unit("comctrls.inc.php");
use_unit("styles.inc.php");
use_unit("dbgrids.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class opcmanual extends Page
{
   public $manual_opcoes = null;
   public $MSG_Erro = null;
   public $bt_visualizar = null;
   public $opcao_titulo = null;
   public $Label3 = null;
   public $opcao_numero = null;
   public $Label2 = null;
   public $Label19 = null;
   public $Panel2 = null;
   public $Panel1 = null;
   public $Label18 = null;
   public $Label1 = null;
   public $GroupBox3 = null;
   public $Estilo_Pagina = null;
   public $bt_fechar = null;
   public $area_sistema = null;
   public $GroupBox2 = null;
   public $GroupBox1 = null;
   function bt_visualizarClick($sender, $params)
   {
      if(trim($this->opcao_numero->Text) == '')
      {
         $this->MSG_Erro->Text = 'Por favor, escolha um treinamento.';
      }
      else
      {
         $this->MSG_Erro->Text = '';

         if(trim($this->opcao_numero->Text) == 0)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_0.php','tre_item_0','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** *Observacoes Gerais antes da utilizacao do Sistema

         elseif(trim($this->opcao_numero->Text) == 1)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_1.php','tre_item_1','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** Cadastros

         elseif(trim($this->opcao_numero->Text) == 2)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_2.php','tre_item_2','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Clientes

         elseif(trim($this->opcao_numero->Text) == 3)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_3.php','tre_item_3','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Fornecedores

         elseif(trim($this->opcao_numero->Text) == 4)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_4.php','tre_item_4','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Produtos

         elseif(trim($this->opcao_numero->Text) == 5)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_5.php','tre_item_5','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------Tipos

         elseif(trim($this->opcao_numero->Text) == 6)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_6.php','tre_item_6','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------Familias

         elseif(trim($this->opcao_numero->Text) == 7)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_7.php','tre_item_7','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------Produtos

         elseif(trim($this->opcao_numero->Text) == 8)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_8.php','tre_item_8','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Impostos/Taxas

         elseif(trim($this->opcao_numero->Text) == 9)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_9.php','tre_item_9','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------PIS

         elseif(trim($this->opcao_numero->Text) == 10)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_10.php','tre_item_10','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------COFINS

         elseif(trim($this->opcao_numero->Text) == 11)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_11.php','tre_item_11','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------ICMS

         elseif(trim($this->opcao_numero->Text) == 12)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_12.php','tre_item_12','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------CSLL

         elseif(trim($this->opcao_numero->Text) == 13)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_13.php','tre_item_13','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------IRPJ

         elseif(trim($this->opcao_numero->Text) == 14)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_14.php','tre_item_14','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------IPI

         elseif(trim($this->opcao_numero->Text) == 15)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_15.php','tre_item_15','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Transportadoras

         elseif(trim($this->opcao_numero->Text) == 16)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_16.php','tre_item_16','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Representantes

         elseif(trim($this->opcao_numero->Text) == 17)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_17.php','tre_item_17','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Bancos

         elseif(trim($this->opcao_numero->Text) == 18)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_18.php','tre_item_18','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Usuarios

         elseif(trim($this->opcao_numero->Text) == 19)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_19.php','tre_item_19','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------IVAs

         elseif(trim($this->opcao_numero->Text) == 20)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_20.php','tre_item_20','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------CFOPs

         elseif(trim($this->opcao_numero->Text) == 21)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_21.php','tre_item_21','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------CFOPs Natureza Operacao

         elseif(trim($this->opcao_numero->Text) == 22)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_22.php','tre_item_22','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------CFOPs Faturamento

         elseif(trim($this->opcao_numero->Text) == 23)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_23.php','tre_item_23','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------NCMs

         elseif(trim($this->opcao_numero->Text) == 24)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_24.php','tre_item_24','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------Utilizadas

         elseif(trim($this->opcao_numero->Text) == 25)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_25.php','tre_item_25','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------Tabela Geral

         elseif(trim($this->opcao_numero->Text) == 26)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_26.php','tre_item_26','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** Vendas

         elseif(trim($this->opcao_numero->Text) == 27)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_27.php','tre_item_27','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Orcamentos

         elseif(trim($this->opcao_numero->Text) == 28)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_28.php','tre_item_28','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Pedidos

         elseif(trim($this->opcao_numero->Text) == 29)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_29.php','tre_item_29','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Enviados para Faturamento

         elseif(trim($this->opcao_numero->Text) == 30)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_30.php','tre_item_30','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Historico de Vendas

         elseif(trim($this->opcao_numero->Text) == 31)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_31.php','tre_item_31','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Mapa de Producao

         elseif(trim($this->opcao_numero->Text) == 32)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_32.php','tre_item_32','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Pedidos Pendentes

         elseif(trim($this->opcao_numero->Text) == 33)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_33.php','tre_item_33','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** Notas Fiscais

         elseif(trim($this->opcao_numero->Text) == 34)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_34.php','tre_item_34','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Emissao de Notas Fiscais

         elseif(trim($this->opcao_numero->Text) == 35)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_35.php','tre_item_35','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Cancelamento de Notas Fiscais

         elseif(trim($this->opcao_numero->Text) == 36)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_36.php','tre_item_36','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Historicos

         elseif(trim($this->opcao_numero->Text) == 37)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_37.php','tre_item_37','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------Notas Fiscais

         elseif(trim($this->opcao_numero->Text) == 38)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_38.php','tre_item_38','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------Vendas Programadas

         elseif(trim($this->opcao_numero->Text) == 39)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_39.php','tre_item_39','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Numero da Nota Fiscal Anterior

         elseif(trim($this->opcao_numero->Text) == 40)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_40.php','tre_item_40','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Ordem de Despacho / Etiqueta

         elseif(trim($this->opcao_numero->Text) == 41)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_41.php','tre_item_41','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Controle de Saidas de Mercadoria

         elseif(trim($this->opcao_numero->Text) == 42)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_42.php','tre_item_42','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Conhecimentos

         elseif(trim($this->opcao_numero->Text) == 43)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_43.php','tre_item_43','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Operacoes na Receita Federal   NFe

         elseif(trim($this->opcao_numero->Text) == 44)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_44.php','tre_item_44','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** Contas a Receber (Cobranca)

         elseif(trim($this->opcao_numero->Text) == 45)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_45.php','tre_item_45','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Baixa de Cobranca

         elseif(trim($this->opcao_numero->Text) == 46)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_46.php','tre_item_46','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Desdobramento de Cobranca

         elseif(trim($this->opcao_numero->Text) == 47)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_47.php','tre_item_47','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------Nota Fiscal

         elseif(trim($this->opcao_numero->Text) == 48)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_48.php','tre_item_48','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------Venda Programada

         elseif(trim($this->opcao_numero->Text) == 49)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_49.php','tre_item_49','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Liberacao de Credito

         elseif(trim($this->opcao_numero->Text) == 50)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_50.php','tre_item_50','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Arquivos de Transmissao

         elseif(trim($this->opcao_numero->Text) == 51)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_51.php','tre_item_51','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------Remessa

         elseif(trim($this->opcao_numero->Text) == 52)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_52.php','tre_item_52','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------------Retorno

         elseif(trim($this->opcao_numero->Text) == 53)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_53.php','tre_item_53','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** ------Duplicatas

         elseif(trim($this->opcao_numero->Text) == 54)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_54.php','tre_item_54','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** Compras

         elseif(trim($this->opcao_numero->Text) == 55)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_55.php','tre_item_55','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Requisicoes

         elseif(trim($this->opcao_numero->Text) == 56)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_56.php','tre_item_56','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Cotacoes

         elseif(trim($this->opcao_numero->Text) == 57)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_57.php','tre_item_57','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Ordens de Compra

         elseif(trim($this->opcao_numero->Text) == 58)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_58.php','tre_item_58','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Registros de Notas de Entradas

         elseif(trim($this->opcao_numero->Text) == 59)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_59.php','tre_item_59','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Relacao de Produtos Comprados

         elseif(trim($this->opcao_numero->Text) == 60)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_60.php','tre_item_60','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** Contas a Pagar

         elseif(trim($this->opcao_numero->Text) == 61)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_61.php','tre_item_61','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Contas Bancarias

         elseif(trim($this->opcao_numero->Text) == 62)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_62.php','tre_item_62','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Saldos

         elseif(trim($this->opcao_numero->Text) == 63)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_63.php','tre_item_63','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Pagamentos Fixos

         elseif(trim($this->opcao_numero->Text) == 64)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_64.php','tre_item_64','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Contas a Pagar

         elseif(trim($this->opcao_numero->Text) == 65)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_65.php','tre_item_65','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** Estoque

         elseif(trim($this->opcao_numero->Text) == 66)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_66.php','tre_item_66','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Manutencao

         elseif(trim($this->opcao_numero->Text) == 67)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_67.php','tre_item_67','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** Relatorios

         elseif(trim($this->opcao_numero->Text) == 68)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_68.php','tre_item_68','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Vendas

         elseif(trim($this->opcao_numero->Text) == 69)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_69.php','tre_item_69','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Ultimas Vendas

         elseif(trim($this->opcao_numero->Text) == 70)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_70.php','tre_item_70','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Pedidos por Periodo

         elseif(trim($this->opcao_numero->Text) == 71)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_71.php','tre_item_71','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Faturamento por Periodo

         elseif(trim($this->opcao_numero->Text) == 72)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_72.php','tre_item_72','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Maiores Clientes por Valor Vendido

         elseif(trim($this->opcao_numero->Text) == 73)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_73.php','tre_item_73','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Vendas por Estados

         elseif(trim($this->opcao_numero->Text) == 74)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_74.php','tre_item_74','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Fichas de Visitas

         elseif(trim($this->opcao_numero->Text) == 75)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_75.php','tre_item_75','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Entradas Emitidas por Periodo

         elseif(trim($this->opcao_numero->Text) == 76)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_76.php','tre_item_76','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Relacao de Produtos Vendidos

         elseif(trim($this->opcao_numero->Text) == 77)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_77.php','tre_item_77','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Cobranca

         elseif(trim($this->opcao_numero->Text) == 78)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_78.php','tre_item_78','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Vencidos e nao pagos

         elseif(trim($this->opcao_numero->Text) == 79)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_79.php','tre_item_79','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------A Vencer

         elseif(trim($this->opcao_numero->Text) == 80)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_80.php','tre_item_80','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Duplicatas

         elseif(trim($this->opcao_numero->Text) == 81)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_81.php','tre_item_81','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Relacao de Cobrancas

         elseif(trim($this->opcao_numero->Text) == 82)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_82.php','tre_item_82','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Comissoes

         elseif(trim($this->opcao_numero->Text) == 83)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_83.php','tre_item_83','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Comissoes a Pagar

         elseif(trim($this->opcao_numero->Text) == 84)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_84.php','tre_item_84','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Vendas dos Representantes

         elseif(trim($this->opcao_numero->Text) == 85)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_85.php','tre_item_85','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Estoque

         elseif(trim($this->opcao_numero->Text) == 86)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_86.php','tre_item_86','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Movimento do Estoque

         elseif(trim($this->opcao_numero->Text) == 87)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_87.php','tre_item_87','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Estoque dos Produtos

         elseif(trim($this->opcao_numero->Text) == 88)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_88.php','tre_item_88','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -----------------Produto

         elseif(trim($this->opcao_numero->Text) == 89)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_89.php','tre_item_89','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -----------------Tipo

         elseif(trim($this->opcao_numero->Text) == 90)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_90.php','tre_item_90','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -----------------Familia

         elseif(trim($this->opcao_numero->Text) == 91)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_91.php','tre_item_91','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Inventario

         elseif(trim($this->opcao_numero->Text) == 92)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_92.php','tre_item_92','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Impostos

         elseif(trim($this->opcao_numero->Text) == 93)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_93.php','tre_item_93','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------PIS

         elseif(trim($this->opcao_numero->Text) == 94)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_94.php','tre_item_94','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------COFINS

         elseif(trim($this->opcao_numero->Text) == 95)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_95.php','tre_item_95','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------ICMS

         elseif(trim($this->opcao_numero->Text) == 96)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_96.php','tre_item_96','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------CSLL

         elseif(trim($this->opcao_numero->Text) == 97)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_97.php','tre_item_97','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------IRPJ

         elseif(trim($this->opcao_numero->Text) == 98)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_98.php','tre_item_98','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------IPI

         elseif(trim($this->opcao_numero->Text) == 99)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_99.php','tre_item_99','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Contas a Pagar

         elseif(trim($this->opcao_numero->Text) == 100)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_100.php','tre_item_100','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Contas a Pagar

         elseif(trim($this->opcao_numero->Text) == 101)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_101.php','tre_item_101','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Comparativo   a Pagar / a Receber

         elseif(trim($this->opcao_numero->Text) == 102)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_102.php','tre_item_102','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Comparativo (Efetivo)   a Pagar / a Receber

         elseif(trim($this->opcao_numero->Text) == 103)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_103.php','tre_item_103','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Etiquetas

         elseif(trim($this->opcao_numero->Text) == 104)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_104.php','tre_item_104','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Clientes

         elseif(trim($this->opcao_numero->Text) == 105)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_105.php','tre_item_105','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------------Fornecedores

         elseif(trim($this->opcao_numero->Text) == 106)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_106.php','tre_item_106','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** Opcoes

         elseif(trim($this->opcao_numero->Text) == 107)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_107.php','tre_item_107','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Permissoes do Usuario

         elseif(trim($this->opcao_numero->Text) == 108)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_108.php','tre_item_108','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Manual de Utilizacao

         elseif(trim($this->opcao_numero->Text) == 109)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_109.php','tre_item_109','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** Sair

         elseif(trim($this->opcao_numero->Text) == 110)
         {
         ?>
         <script language="JavaScript">
            var pos_top = (parseInt((screen.height)/2) - 320);
            var pos_left = (parseInt((screen.width)/2) - 387);
            window.open('tre_item_110.php','tre_item_110','dialog=no,minimizable=no,titlebar=no,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,maximized=no,fullscreen=no,width=775,innerWidth=775,offsetWidth=775,clientWidth=775,pageWidth=775,height=550,innerHeight=550,offsetHeight=550,clientHeight=550,pageHeight=550,height=550,top='+pos_top+',left='+pos_left);
         </script>
         <?php
         }

         //*** -------Encerrar a Execucao do Sistema e Sair
      }
   }

   function opcmanualJSLoad($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Redimenssiona o Tamanho da Coluna ***
      manual_opcoes.getTableColumnModel().setColumnWidth(0,35);
      manual_opcoes.getTableColumnModel().setColumnWidth(1,525);

      carregando_pagina();

<?php

   }

   function manual_opcoesJSSelectionChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      //*** Mostra os Registros Escolhidos ***
      document.opcmanual.opcao_numero.value = manual_opcoes.getTableModel().getValue(0, manual_opcoes.getFocusedRow());
      document.opcmanual.opcao_titulo.value = manual_opcoes.getTableModel().getValue(1, manual_opcoes.getFocusedRow());

<?php

   }

   function opcao_tituloJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.opcmanual.bt_visualizar.focus();
        return false;
      }

<?php

   }

   function opcao_numeroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.opcmanual.opcao_titulo.focus();
        return false;
      }

<?php

   }

   function MSG_ErroJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.opcmanual.opcao_numero.focus();
        return false;
      }

<?php

   }

   function opcmanualCreate($sender, $params)
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

      //*** Prepara as Opcoes Disponiveis para o Manual ***

      $this->manual_opcoes->Columns = null;
      $this->manual_opcoes->Items = null;

      $this->manual_opcoes->addColumn("Item");
      $this->manual_opcoes->addColumn("Titulo do Treinamento");

      $this->manual_opcoes->addItem(0, array('*Observacoes Gerais antes da utilizacao do Sistema      '), false);
      $this->manual_opcoes->addItem(1, array('Cadastros                                               '), false);
      $this->manual_opcoes->addItem(2, array('------Clientes                                          '), false);
      $this->manual_opcoes->addItem(3, array('------Fornecedores                                      '), false);
      $this->manual_opcoes->addItem(4, array('------Produtos                                          '), false);
      $this->manual_opcoes->addItem(5, array('------------Tipos                                       '), false);
      $this->manual_opcoes->addItem(6, array('------------Familias                                    '), false);
      $this->manual_opcoes->addItem(7, array('------------Produtos                                    '), false);
      $this->manual_opcoes->addItem(8, array('------Impostos/Taxas                                    '), false);
      $this->manual_opcoes->addItem(9, array('------------PIS                                         '), false);
      $this->manual_opcoes->addItem(10, array('------------COFINS                                      '), false);
      $this->manual_opcoes->addItem(11, array('------------ICMS                                        '), false);
      $this->manual_opcoes->addItem(12, array('------------CSLL                                        '), false);
      $this->manual_opcoes->addItem(13, array('------------IRPJ                                        '), false);
      $this->manual_opcoes->addItem(14, array('------------IPI                                         '), false);
      $this->manual_opcoes->addItem(15, array('------Transportadoras                                   '), false);
      $this->manual_opcoes->addItem(16, array('------Representantes                                    '), false);
      $this->manual_opcoes->addItem(17, array('------Bancos                                            '), false);
      $this->manual_opcoes->addItem(18, array('------Usuarios                                          '), false);
      $this->manual_opcoes->addItem(19, array('------IVAs                                              '), false);
      $this->manual_opcoes->addItem(20, array('------CFOPs                                             '), false);
      $this->manual_opcoes->addItem(21, array('------------CFOPs Natureza Operacao                     '), false);
      $this->manual_opcoes->addItem(22, array('------------CFOPs Faturamento                           '), false);
      $this->manual_opcoes->addItem(23, array('------NCMs                                              '), false);
      $this->manual_opcoes->addItem(24, array('------------Utilizadas                                  '), false);
      $this->manual_opcoes->addItem(25, array('------------Tabela Geral                                '), false);
      $this->manual_opcoes->addItem(26, array('Vendas                                                  '), false);
      $this->manual_opcoes->addItem(27, array('------Orcamentos                                        '), false);
      $this->manual_opcoes->addItem(28, array('------Pedidos                                           '), false);
      $this->manual_opcoes->addItem(29, array('------Enviados para Faturamento                         '), false);
      $this->manual_opcoes->addItem(30, array('------Historico de Vendas                               '), false);
      $this->manual_opcoes->addItem(31, array('------Mapa de Producao                                  '), false);
      $this->manual_opcoes->addItem(32, array('------Pedidos Pendentes                                 '), false);
      $this->manual_opcoes->addItem(33, array('Notas Fiscais                                           '), false);
      $this->manual_opcoes->addItem(34, array('------Emissao de Notas Fiscais                          '), false);
      $this->manual_opcoes->addItem(35, array('------Cancelamento de Notas Fiscais                     '), false);
      $this->manual_opcoes->addItem(36, array('------Historicos                                        '), false);
      $this->manual_opcoes->addItem(37, array('------------Notas Fiscais                               '), false);
      $this->manual_opcoes->addItem(38, array('------------Vendas Programadas                          '), false);
      $this->manual_opcoes->addItem(39, array('------Numero da Nota Fiscal Anterior                    '), false);
      $this->manual_opcoes->addItem(40, array('------Ordem de Despacho / Etiqueta                      '), false);
      $this->manual_opcoes->addItem(41, array('------Controle de Saidas de Mercadoria                  '), false);
      $this->manual_opcoes->addItem(42, array('------Conhecimentos                                     '), false);
      $this->manual_opcoes->addItem(43, array('------Operacoes na Receita Federal   NFe                '), false);
      $this->manual_opcoes->addItem(44, array('Conta a Receber                                         '), false);
      $this->manual_opcoes->addItem(45, array('------Baixa de Cobranca                                 '), false);
      $this->manual_opcoes->addItem(46, array('------Desdobramento de Cobranca                         '), false);
      $this->manual_opcoes->addItem(47, array('------------Nota Fiscal                                 '), false);
      $this->manual_opcoes->addItem(48, array('------------Venda Programada                            '), false);
      $this->manual_opcoes->addItem(49, array('------Liberacao de Credito                              '), false);
      $this->manual_opcoes->addItem(50, array('------Arquivos de Transmissao                           '), false);
      $this->manual_opcoes->addItem(51, array('------------Remessa                                     '), false);
      $this->manual_opcoes->addItem(52, array('------------Retorno                                     '), false);
      $this->manual_opcoes->addItem(53, array('------Duplicatas                                        '), false);
      $this->manual_opcoes->addItem(54, array('Compras                                                 '), false);
      $this->manual_opcoes->addItem(55, array('-------Requisicoes                                      '), false);
      $this->manual_opcoes->addItem(56, array('-------Cotacoes                                         '), false);
      $this->manual_opcoes->addItem(57, array('-------Ordens de Compra                                 '), false);
      $this->manual_opcoes->addItem(58, array('-------Registros de Notas de Entradas                   '), false);
      $this->manual_opcoes->addItem(59, array('-------Relacao de Produtos Comprados                    '), false);
      $this->manual_opcoes->addItem(60, array('Contas a Pagar                                          '), false);
      $this->manual_opcoes->addItem(61, array('-------Contas Bancarias                                 '), false);
      $this->manual_opcoes->addItem(62, array('-------Saldos                                           '), false);
      $this->manual_opcoes->addItem(63, array('-------Pagamentos Fixos                                 '), false);
      $this->manual_opcoes->addItem(64, array('-------Contas a Pagar                                   '), false);
      $this->manual_opcoes->addItem(65, array('Estoque                                                 '), false);
      $this->manual_opcoes->addItem(66, array('-------Manutencao                                       '), false);
      $this->manual_opcoes->addItem(67, array('Relatorios                                              '), false);
      $this->manual_opcoes->addItem(68, array('-------Vendas                                           '), false);
      $this->manual_opcoes->addItem(69, array('-------------Ultimas Vendas                             '), false);
      $this->manual_opcoes->addItem(70, array('-------------Pedidos por Periodo                        '), false);
      $this->manual_opcoes->addItem(71, array('-------------Faturamento por Periodo                    '), false);
      $this->manual_opcoes->addItem(72, array('-------------Maiores Clientes por Valor Vendido         '), false);
      $this->manual_opcoes->addItem(73, array('-------------Vendas por Estados                         '), false);
      $this->manual_opcoes->addItem(74, array('-------------Fichas de Visitas                          '), false);
      $this->manual_opcoes->addItem(75, array('-------------Entradas Emitidas por Periodo              '), false);
      $this->manual_opcoes->addItem(76, array('-------------Relacao de Produtos Vendidos               '), false);
      $this->manual_opcoes->addItem(77, array('-------Cobranca                                         '), false);
      $this->manual_opcoes->addItem(78, array('-------------Vencidos e nao pagos                       '), false);
      $this->manual_opcoes->addItem(79, array('-------------A Vencer                                   '), false);
      $this->manual_opcoes->addItem(80, array('-------------Duplicatas                                 '), false);
      $this->manual_opcoes->addItem(81, array('-------------Relacao de Cobrancas                       '), false);
      $this->manual_opcoes->addItem(82, array('-------Comissoes                                        '), false);
      $this->manual_opcoes->addItem(83, array('-------------Comissoes a Pagar                          '), false);
      $this->manual_opcoes->addItem(84, array('-------------Vendas dos Representantes                  '), false);
      $this->manual_opcoes->addItem(85, array('-------Estoque                                          '), false);
      $this->manual_opcoes->addItem(86, array('-------------Movimento do Estoque                       '), false);
      $this->manual_opcoes->addItem(87, array('-------------Estoque dos Produtos                       '), false);
      $this->manual_opcoes->addItem(88, array('-----------------Produto                                '), false);
      $this->manual_opcoes->addItem(89, array('-----------------Tipo                                   '), false);
      $this->manual_opcoes->addItem(90, array('-----------------Familia                                '), false);
      $this->manual_opcoes->addItem(91, array('-------------Inventario                                 '), false);
      $this->manual_opcoes->addItem(92, array('-------Impostos                                         '), false);
      $this->manual_opcoes->addItem(93, array('-------------PIS                                        '), false);
      $this->manual_opcoes->addItem(94, array('-------------COFINS                                     '), false);
      $this->manual_opcoes->addItem(95, array('-------------ICMS                                       '), false);
      $this->manual_opcoes->addItem(96, array('-------------CSLL                                       '), false);
      $this->manual_opcoes->addItem(97, array('-------------IRPJ                                       '), false);
      $this->manual_opcoes->addItem(98, array('-------------IPI                                        '), false);
      $this->manual_opcoes->addItem(99, array('-------Contas a Pagar                                   '), false);
      $this->manual_opcoes->addItem(100, array('-------------Contas a Pagar                             '), false);
      $this->manual_opcoes->addItem(101, array('-------------Comparativo   a Pagar / a Receber          '), false);
      $this->manual_opcoes->addItem(102, array('-------------Comparativo (Efetivo)   a Pagar / a Receber'), false);
      $this->manual_opcoes->addItem(103, array('-------Etiquetas                                        '), false);
      $this->manual_opcoes->addItem(104, array('-------------Clientes                                   '), false);
      $this->manual_opcoes->addItem(105, array('-------------Fornecedores                               '), false);
      $this->manual_opcoes->addItem(106, array('Opcoes                                                  '), false);
      $this->manual_opcoes->addItem(107, array('-------Permissoes do Usuario                            '), false);
      $this->manual_opcoes->addItem(108, array('-------Manual de Utilizacao                             '), false);
      $this->manual_opcoes->addItem(109, array('Sair                                                    '), false);
      $this->manual_opcoes->addItem(110, array('-------Encerrar a Execucao do Sistema e Sair            '), false);

      $this->opcao_numero->Text = '';
      $this->opcao_titulo->Text = '';
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }
}

global $application;

global $opcmanual;

//Creates the form
$opcmanual = new opcmanual($application);

//Read from resource file
$opcmanual->loadResource(__FILE__);

//Shows the form
$opcmanual->show();

?>