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
      <title>ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605</title>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <style type="text/css">
         body {
           background: #EBE9ED;
           overflow: auto;
           overflow-x:auto;
           overflow-y:auto;
         }
      </style>
   </head>

   <frameset rows="60,*,25" cols="*" frameborder="fbNo" border="0" framespacing="0" >
      <frame src="frame_cabecalho.php" name="FrameCabecalho" id="FrameCabecalho" scrolling="auto"  marginwidth="0" marginheight="0" frameborder="0"    >
      <frameset cols="195,*" rows="*" frameborder="no" border="0" framespacing="0" >
         <frame src="frame_menu.php" name="FrameMenu" id="FrameMenu" scrolling="auto"  marginwidth="0" marginheight="0" frameborder="0"    >
         <frame src="frame_corpo.php" name="FrameCorpo" id="FrameCorpo" scrolling="auto"  marginwidth="0" marginheight="0" frameborder="0"    >
      </frameset>
      <frame src="frame_rodape.php" name="FrameRodape" id="FrameRodape" scrolling="auto"  marginwidth="0" marginheight="0" frameborder="0"    >
   </frameset>
   <noframes>
      <body>
          <form style="margin-bottom: 0" id="menuprincipal" name="menuprincipal" method="post" action="/sistemas/managertex/menu_principal.php">
             <table  width="777"   style="height:535px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"   align="Center" >
                <tr>
                   <td valign="top"></td>
                </tr>
             </table>
          </form>
      </body>
   </noframes>
</html>