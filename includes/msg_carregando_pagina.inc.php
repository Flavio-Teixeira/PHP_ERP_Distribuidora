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
| PROTE��O AOS DIREITOS DE AUTOR E DO REGISTRO:  |
| Toda codifica��o deste Sistema est� protegida  |
| pela Lei Nro.9609 onde se disp�e sobre a       |
| prote��o da propriedade intelectual de         |
| programa de computador, sua comercializa��o    |
| no Pa�s, e d� outras provid�ncias.             |
| ATEN��O: N�o � permitido efetuar altera��es    |
| na codifica��o do sistema, efetuar instala��es |
| em outros computadores, c�pias e utiliz�-lo    |
| como base no desenvolvimento de outro sistema  |
| semelhante ou de igual funcionamento.          |
+------------------------------------------------+
*/

//**** Fun��o que exibe a imagem de carregando ***

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
