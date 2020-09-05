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

      <style type="text/css">
         body {
           background: #EBE9ED;
           overflow: auto;
           overflow-x:auto;
           overflow-y:auto;
         }
         font {font-size: 12px; font-family: verdana, arial, helvetica, sans-serif;}
      </style>
   </head>

   <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
      <center>
         <table width="100%" height="20%" align="center" valign="middle">
            <tr>
               <td height="2" bgcolor="#000000"></td>
            </tr>
            <tr>
               <td><center><font>ManagerTEX - V.2K77 &raquo;&raquo;&raquo; Acesso efetuado em: Data: <?php echo date('d/m/Y', time()); ?> - Hora: <?php echo date('H:i:s', time()); ?> &laquo;&laquo;&laquo;&nbsp;&nbsp;<img src="imagens/triskle.gif" width="10" height="9" border="0" alt=""></font></center></td>
            </tr>
         </table>
      </center>
   </body>
</html>