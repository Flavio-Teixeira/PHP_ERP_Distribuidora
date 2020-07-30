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
| PROTEÇÃO AOS DIREITOS DE AUTOR E DO REGISTRO:  |
| Toda codificação deste Sistema está protegida  |
| pela Lei Nro.9609 onde se dispõe sobre a       |
| proteção da propriedade intelectual de         |
| programa de computador, sua comercialização    |
| no País, e dá outras providências.             |
| ATENÇÃO: Não é permitido efetuar alterações    |
| na codificação do sistema, efetuar instalações |
| em outros computadores, cópias e utilizá-lo    |
| como base no desenvolvimento de outro sistema  |
| semelhante ou de igual funcionamento.          |
+------------------------------------------------+
*/

//**** Função que exibe a imagem de carregando ***

echo '<div id="loading_pg" style="position:absolute; width:100%; text-align:left; left:369px; top:20px;"><img src="imagens/indicator_processo.gif" border=0></div>';

?>

<script language="JavaScript">
        var ld=(document.all);
        var ns4=document.layers;
        var ns6=document.getElementById&&!document.all;
        var ie4=document.all;
        if (ns4)
           ld=document.loading_pg;
        else if (ns6)
           ld=document.getElementById("loading_pg").style;
        else if (ie4)
          ld=document.all.loading_pg.style;

        function carregando_pagina()
        {
           if(ns4)
           {
              ld.visibility="hidden";
           }
           else if (ns6||ie4) ld.display="none";
        }
</script>

<?php
