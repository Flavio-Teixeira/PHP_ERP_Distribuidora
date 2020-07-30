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
require_once('includes/danfeTEX.class.php');

$arquivo_XML = 'nfe/entregar_cliente/' . $_GET['nfe'];
$arquivo_PDF = str_replace('.xml', '.pdf', $arquivo_XML);
$arquivo_PDF = str_replace('nfe/entregar_cliente/', 'nfe/entregar_cliente/DANFE/', $arquivo_PDF);
$arquivo_PDF = str_replace('NFe_', '', $arquivo_PDF);

if ( is_file($arquivo_XML) ){
    $docxml = file_get_contents($arquivo_XML);
    $danfe = new danfeTEX($docxml, 'P', 'A4','imagens/logo_danfe.jpg','I','');
    $id = $danfe->montaDANFE();
    $danfe_final = $danfe->printDANFE($arquivo_PDF,'F'); //*** Salva o Arqvuivo PDF ***
    $danfe_final = $danfe->printDANFE($arquivo_PDF,'I'); //*** Exibe o PDF no Browser ***
}

?>
