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
           background-repeat: repeat-x;
         }
         font {font-size: 12px; font-family: verdana, arial, helvetica, sans-serif;}
      </style>
   </head>

   <body background="imagens/managertex_menu_traco.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
      <div style="position:relative;">
         <img src="imagens/managertex_menu_logo.jpg" width="193" height="60" border="0" alt="" style="position:absolute; top:0px; left:0px;">
         <div style="position:absolute;">
            <img src="imagens/logo.jpg" width="140" border="0" alt="" style="position:absolute; top:0px; left:0px;"><font style="position:absolute; top:38px; left:200px; width:500px; color:#FFFFFF"><b>&raquo; Usuario:&nbsp;</b><?php echo $_SESSION['login_nome_completo']; ?></font>
         </div>
      </div>
   </body>
</html>