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
class cobtransmissaoretorno extends Page
{
   public $arquivo_xml_entrada = null;
   public $Label1 = null;
   public $bt_importar_retorno = null;
   public $MSG_Erro = null;
   public $GroupBox3 = null;
   public $Panel2 = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Button1 = null;
   public $GroupBox4 = null;
   public $Estilo_Pagina = null;
   public $area_sistema = null;

   function arquivo_xml_entradaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

       if((event.keyCode == 9) || (event.keyCode == 13) )
       {
         document.cobtransmissaoretorno.bt_importar_retorno.focus();
         return false;
       }

<?php

   }

   function bt_importar_retornoClick($sender, $params)
   {
      require_once("includes/rotinas_gerais.inc.php");
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      if(trim($this->arquivo_xml_entrada->FileName) == '')
      {
         $this->MSG_Erro->Caption = "Por favor, informe o a Localizacao do arquivo de Retorno.";
      }

      if(trim($this->MSG_Erro->Caption) == '')
      {
         if(substr(trim($_SERVER['SystemRoot']), 0, 1) == 'C')
         {
            $file = trim($_SESSION['login_caminho_base']) . "swap\\" . $this->arquivo_xml_entrada->FileName;
         }
         else
         {
            $file = trim($_SESSION['login_caminho_base']) . "swap/" . $this->arquivo_xml_entrada->FileName;
         }

         $this->arquivo_xml_entrada->moveUploadedFile($file);
         $this->MSG_Erro->Caption = "Arquivo importado com Sucesso.";

         //*** Le o Arquivo de Retorno ***

         $arquivo_leitura = fopen("swap/" . $this->arquivo_xml_entrada->FileName, "r");
         $conta_linha = 0;

         while(!feof($arquivo_leitura))
         {
            $conta_linha = $conta_linha + 1;

            $registro_leitura = fgets($arquivo_leitura, 4096);

            if(substr($registro_leitura, 0, 1) == "1")
            {
               if(substr($registro_leitura, 253, 13) > 0)
               {
                  $imp_nota = substr($registro_leitura, 116, 10);
                  $imp_nota = str_replace('A', '', $imp_nota);
                  $imp_nota = str_replace('B', '', $imp_nota);
                  $imp_nota = str_replace('C', '', $imp_nota);
                  $imp_nota = str_replace('D', '', $imp_nota);
                  $imp_nota = str_replace('E', '', $imp_nota);
                  $imp_nota = str_replace('F', '', $imp_nota);
                  $imp_nota = str_replace('G', '', $imp_nota);
                  $imp_nota = str_replace('H', '', $imp_nota);
                  $imp_nota = str_replace('I', '', $imp_nota);
                  $imp_nota = str_replace('J', '', $imp_nota);
                  $imp_nota = str_replace('K', '', $imp_nota);
                  $imp_nota = str_replace('L', '', $imp_nota);
                  $imp_nota = str_replace('M', '', $imp_nota);
                  $imp_nota = str_replace('N', '', $imp_nota);
                  $imp_nota = str_replace('O', '', $imp_nota);
                  $imp_nota = str_replace('P', '', $imp_nota);
                  $imp_nota = str_replace('Q', '', $imp_nota);
                  $imp_nota = str_replace('R', '', $imp_nota);
                  $imp_nota = str_replace('S', '', $imp_nota);
                  $imp_nota = str_replace('T', '', $imp_nota);
                  $imp_nota = str_replace('U', '', $imp_nota);
                  $imp_nota = str_replace('W', '', $imp_nota);
                  $imp_nota = str_replace('V', '', $imp_nota);
                  $imp_nota = str_replace('U', '', $imp_nota);
                  $imp_nota = str_replace('X', '', $imp_nota);
                  $imp_nota = str_replace('Y', '', $imp_nota);
                  $imp_nota = str_replace('Z', '', $imp_nota);

                  $imp_nota = str_replace('/01', '', $imp_nota);
                  $imp_nota = str_replace('/02', '', $imp_nota);
                  $imp_nota = str_replace('/03', '', $imp_nota);
                  $imp_nota = str_replace('/04', '', $imp_nota);
                  $imp_nota = str_replace('/05', '', $imp_nota);
                  $imp_nota = str_replace('/06', '', $imp_nota);
                  $imp_nota = str_replace('/07', '', $imp_nota);
                  $imp_nota = str_replace('/08', '', $imp_nota);
                  $imp_nota = str_replace('/09', '', $imp_nota);
                  $imp_nota = str_replace('/10', '', $imp_nota);
                  $imp_nota = str_replace('/11', '', $imp_nota);
                  $imp_nota = str_replace('/12', '', $imp_nota);
                  $imp_nota = str_replace('/13', '', $imp_nota);
                  $imp_nota = str_replace('/14', '', $imp_nota);
                  $imp_nota = str_replace('/15', '', $imp_nota);
                  $imp_nota = str_replace('/16', '', $imp_nota);
                  $imp_nota = str_replace('/17', '', $imp_nota);
                  $imp_nota = str_replace('/18', '', $imp_nota);
                  $imp_nota = str_replace('/19', '', $imp_nota);
                  $imp_nota = str_replace('/20', '', $imp_nota);
                  $imp_nota = str_replace('/21', '', $imp_nota);
                  $imp_nota = str_replace('/22', '', $imp_nota);
                  $imp_nota = str_replace('/23', '', $imp_nota);
                  $imp_nota = str_replace('/24', '', $imp_nota);
                  $imp_nota = str_replace('/25', '', $imp_nota);
                  $imp_nota = str_replace('/26', '', $imp_nota);
                  $imp_nota = str_replace('/27', '', $imp_nota);

                  $imp_nota = trim($imp_nota);
                  $imp_nota = ltrim($imp_nota,"\0");
                  $imp_nota = ltrim($imp_nota,"\00");
                  $imp_nota = ltrim($imp_nota,"\000");
                  $imp_nota = ltrim($imp_nota,"\0000");

                  $imp_duplicata = substr($registro_leitura, 116, 10);
                  $imp_duplicata = str_replace('/01', 'A', $imp_duplicata);
                  $imp_duplicata = str_replace('/02', 'B', $imp_duplicata);
                  $imp_duplicata = str_replace('/03', 'C', $imp_duplicata);
                  $imp_duplicata = str_replace('/04', 'D', $imp_duplicata);
                  $imp_duplicata = str_replace('/05', 'E', $imp_duplicata);
                  $imp_duplicata = str_replace('/06', 'F', $imp_duplicata);
                  $imp_duplicata = str_replace('/07', 'G', $imp_duplicata);
                  $imp_duplicata = str_replace('/08', 'H', $imp_duplicata);
                  $imp_duplicata = str_replace('/09', 'I', $imp_duplicata);
                  $imp_duplicata = str_replace('/10', 'J', $imp_duplicata);
                  $imp_duplicata = str_replace('/11', 'K', $imp_duplicata);
                  $imp_duplicata = str_replace('/12', 'L', $imp_duplicata);
                  $imp_duplicata = str_replace('/13', 'M', $imp_duplicata);
                  $imp_duplicata = str_replace('/14', 'N', $imp_duplicata);
                  $imp_duplicata = str_replace('/15', 'O', $imp_duplicata);
                  $imp_duplicata = str_replace('/16', 'P', $imp_duplicata);
                  $imp_duplicata = str_replace('/17', 'Q', $imp_duplicata);
                  $imp_duplicata = str_replace('/18', 'R', $imp_duplicata);
                  $imp_duplicata = str_replace('/19', 'S', $imp_duplicata);
                  $imp_duplicata = str_replace('/20', 'T', $imp_duplicata);
                  $imp_duplicata = str_replace('/21', 'U', $imp_duplicata);
                  $imp_duplicata = str_replace('/22', 'W', $imp_duplicata);
                  $imp_duplicata = str_replace('/23', 'V', $imp_duplicata);
                  $imp_duplicata = str_replace('/24', 'U', $imp_duplicata);
                  $imp_duplicata = str_replace('/25', 'X', $imp_duplicata);
                  $imp_duplicata = str_replace('/26', 'Y', $imp_duplicata);
                  $imp_duplicata = str_replace('/27', 'Z', $imp_duplicata);
                  $imp_duplicata = trim($imp_duplicata);
                  $imp_duplicata = ltrim($imp_duplicata,"\0");
                  $imp_duplicata = ltrim($imp_duplicata,"\00");
                  $imp_duplicata = ltrim($imp_duplicata,"\000");
                  $imp_duplicata = ltrim($imp_duplicata,"\0000");

                  $imp_cliente = substr($registro_leitura, 324, 30);
                  $imp_valor = substr($registro_leitura, 253, 11) . "." . substr($registro_leitura, 264, 2);
                  $imp_data = "20" . substr($registro_leitura, 299, 2) . "-" . substr($registro_leitura, 297, 2) . "-" . substr($registro_leitura, 295, 2);

                  //*** Prepara o Select das Informacoes ***

                  $Comando_SQL = "Select * from mgt_notas_fiscais Where ";
                  $Comando_SQL .= "mgt_nota_fiscal_numero ='" . trim($imp_nota) . "' and ";
                  $Comando_SQL .= "mgt_nota_fiscal_tipo_nota ='1'";
                  $Comando_SQL .= "Order By mgt_nota_fiscal_numero";

                  GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
                  GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

                  //*** Obtem as Cobrancas Vencidas ***

                  GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->First();

                  if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
                  {
                     for($ind = 1; $ind <= 12; $ind++)
                     {
                        if(trim(GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_' . trim($ind)]) == trim($imp_duplicata) )
                        {
                           $Comando_SQL = "update mgt_notas_fiscais set ";
                           $Comando_SQL .= "mgt_nota_fiscal_dup_dt_pgto_" . trim($ind) . "='" . $imp_data . "',";
                           $Comando_SQL .= "mgt_nota_fiscal_dup_vlr_pgto_" . trim($ind) . "='" . $imp_valor . "',";
                           $Comando_SQL .= "mgt_nota_fiscal_dup_obs_" . trim($ind) . "='BAIXADO PELO ARQUIVO DE RETORNO " . trim($this->arquivo_xml_entrada->FileName) . "'";
                           $Comando_SQL .= "where ";
                           $Comando_SQL .= "mgt_nota_fiscal_numero = '" . trim($imp_nota) . "'";

                           GetConexaoPrincipal()->SQL_Comunitario->Close();
                           GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                           GetConexaoPrincipal()->SQL_Comunitario->Open();
                           GetConexaoPrincipal()->SQL_Comunitario->Close();
                        }
                     }
                  }

                  $this->MSG_Erro->Caption = "Importacao do Arquivo Finalizada";
               }
            }

         }

         fclose($arquivo_leitura);

         $listagem_msg = 'ATENCAO: O Arquivo de Retorno foi importado com Sucesso';
         echo "<script language=\"JavaScript\">alert('#1: " . $listagem_msg . "');</script>";

      }
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function abrir_cadastroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.cadprodutos.bt_cadastro.focus();
     return false;
   }

<?php

   }

   function cobtransmissaoretornoCreate($sender, $params)
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

      //*** Limpa as Mensagens de Erro ***

      $this->MSG_Erro->Caption = '';
   }

   function cobtransmissaoretornoJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $cobtransmissaoretorno;

//Creates the form
$cobtransmissaoretorno = new cobtransmissaoretorno($application);

//Read from resource file
$cobtransmissaoretorno->loadResource(__FILE__);

//Shows the form
$cobtransmissaoretorno->show();

?>