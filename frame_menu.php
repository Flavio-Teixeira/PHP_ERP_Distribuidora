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
use_unit("buttons.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

require_once("includes/valida_sessao.inc.php");
?>

<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
      <meta http-equiv="Content-Language" content="br">
      <title>ManagerTEX - Menu</title>
      <script type="text/javascript" src="includes/BarMenu.js"></script>
      <style type="text/css">
      body {
          background-color: #EBE9ED;
          vertical-align: top;
      }
      body {
          font-family: verdana, arial, helvetica, sans-serif; font-size: 11px;
      }
      h1 { font-size: 12px; }
      div.left {
          width: 192px;
          height: 99%;
          background: #fff;
      }
      td.top {
          background-color: #EBE9ED;
          line-height: 19px;
          text-indent: 11px;
          font-size: 11px;
          font-weight: bold;
          font-family: verdana, arial, helvetica, sans-serif;
          color: #6C6C6C;
      }
      td.section {
          padding: 2px 2px;
      }
      .bar-menu {
          -moz-user-select: none;
      }
      .bar-menu .box1 {
          background: url("imagens/tree-node.gif") no-repeat;
          padding-left: 19px;
          cursor: default;
      }
      .bar-menu .box1-open {
          background: url("imagens/tree-node-open.gif") no-repeat;
          padding-left: 19px;
          cursor: default;
      }
      .bar-menu .box1,
      .bar-menu .box1-open, {
          color: #000000;
          font-family: verdana, arial, helvetica, sans-serif;
          font-size: 10px;
      }
      /* mozilla fix */
      html>body .bar-menu .box1,
      html>body .bar-menu .box1-open {
          color: #000000;
          font-family: verdana, arial, helvetica, sans-serif;
          font-size: 10px;
          line-height: 16px;
          padding-bottom: 1px;
      }
      /* ie fix */
      * html .bar-menu .box1,
      * html .bar-menu .box1-open {
          color: #000000;
          font-family: verdana, arial, helvetica, sans-serif;
          font-size: 10px;
          height: 16px;
      }
      .bar-menu .section {
          font-family: verdana, arial, helvetica, sans-serif;
          font-size: 10px;
          line-height: 16px;
          display: none;
      }
      .bar-menu .section a {
          color: #000000;
          text-decoration: none;
          white-space: nowrap;
      }
      .bar-menu .section a:hover {
          color: #FF0000;
          text-decoration: none;
          white-space: nowrap;
      }
      .bar-menu .box2 {
          background: url("imagens/tree-leaf.gif") no-repeat;
          padding-left: 19px;
      }
      .bar-menu .box2-last {
          background: url("imagens/tree-leaf-last.gif") no-repeat;
          padding-left: 19px;
      }
      </style>
   </head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<script type="text/javascript">
img1 = new Image();
img1.src = "imagens/tree-node.gif";
img2 = new Image();
img2.src = "imagens/tree-node-open.gif";
img3 = new Image();
img3.src = "imagens/tree-leaf.gif";
img4 = new Image();
img4.src = "imagens/tree-leaf-last.gif";
</script>

<script type="text/javascript">
window.onload = function() {
    var barMenu3a = new BarMenu('bar-menu3a');
    barMenu3a.box1Hover = false;
    barMenu3a.box2Hover = false;
    barMenu3a.init();
}
</script>

<div class="left">
    <table cellspacing="0" cellpadding="0" width="100%" height="100%" bgcolor="#EBE9ED" valign="top">
    <tr>
        <td class="top" width="100%" height="19" align="left" valign="top">&raquo; Opcoes do Sistema &laquo;</td>
    </tr>
    <tr valign="top">
        <td class="section" valign="top">
            <div id="bar-menu3a" class="bar-menu">
                <table cellspacing="0" cellpadding="0" width="100%" height="10" bgcolor="#EBE9ED" valign="top">
<?php
//*** Seleciona os Dados do Menu ***
$Comando_SQL = "SELECT * FROM mgt_opcoes_menu ORDER BY mgt_opcao_menu_nro";

GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Close();
GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->SQL = $Comando_SQL;
GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Open();

if((GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->EOF) != 1)
{
   $primeira_posicao = 0;

   while((GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->EOF) != 1)
   {
      $primeira_posicao = $primeira_posicao + 1;

      $opcao_menu = trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_descricao']);
      $opcao_menu = str_replace('------', '<img src="imagens/tree-tracer.gif" width="10" height="16" border="0" alt="" align="top">', $opcao_menu);
      $opcao_menu = str_replace('---', '<img src="imagens/tree-tracer.gif" width="10" height="16" border="0" alt="" align="top">', $opcao_menu);

      if((trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_nivel']) == 'N')And(strpos(trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_descricao']), '------') === false))
      {
         if($primeira_posicao == 1)
         {
            echo '<tr><td>';
         }
         else
         {
            echo '</div></td></tr><tr><td height="1"></td></tr><tr><td>';
         }

         echo '<div><span class="box1"><b>' . $opcao_menu . '</b></span></div><div class="section">';
      }
      else
      {
         $ultima_posicao = strrpos($opcao_menu, '<img src="imagens/tree-tracer.gif" width="10" height="16" border="0" alt="" align="top">') + 88;

         if($_SESSION['login_permissao_' . trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_tag'])] == '0')
         {
            $opcao_menu = substr($opcao_menu, 0, $ultima_posicao - 88) . '<img src="imagens/travado.gif" width="9" height="10" border="0" alt="" valign="middle">' . substr($opcao_menu, $ultima_posicao);
            $tag_url = 'frame_corpo.php';
         }
         elseif($_SESSION['login_permissao_' . trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_tag'])] == '2')
         {
            $opcao_menu = substr($opcao_menu, 0, $ultima_posicao - 88) . '<img src="imagens/leitura.gif" width="9" height="10" border="0" alt="" valign="middle">' . substr($opcao_menu, $ultima_posicao);

            if(strpos(trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_url']), '?') > 0)
            {
               $tag_url = trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_url']);
            }
            else
            {
               $tag_url = trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_url']);
            }
         }
         else
         {
            if(strpos(trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_url']), '?') > 0)
            {
               $tag_url = trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_url']);
            }
            else
            {
               $tag_url = trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_url']);
            }
         }

         if((trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_nivel']) == 'N'))
         {
            echo '<div class="box2"><U>' . $opcao_menu . '</U></div>';
         }
         else
         {
            if((trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_ultima']) == 'S'))
            {
               if(trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_tag']) == 'sairsistema')
               {
                  echo '<div class="box2-last"><a href="' . $tag_url . '" target="_top">' . $opcao_menu . '</a></div>';
               }
               else
               {
                  echo '<div class="box2-last"><a href="' . $tag_url . '" target="FrameCorpo">' . $opcao_menu . '</a></div>';
               }
            }
            else
            {
               if(trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_tag']) == 'sairsistema')
               {
                  echo '<div class="box2"><a href="' . $tag_url . '" target="_top">' . $opcao_menu . '</a></div>';
               }
               else
               {
                  echo '<div class="box2"><a href="' . $tag_url . '" target="FrameCorpo">' . $opcao_menu . '</a></div>';
               }
            }
         }
      }

      GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Next();
   }

   echo '</td></tr>';
}
?>


                </table>
            </div>
        </td>
    </tr>
    </table>
</div>

</body>
</html>