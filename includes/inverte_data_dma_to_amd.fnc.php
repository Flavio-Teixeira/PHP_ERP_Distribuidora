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

	function inverte_data_dma_to_amd($data_exibicao){
	   //
	   //Ex.: 01/10/2008 -> 2008/10/01
	   //

	   $data_exibicao = substr($data_exibicao,6,4)."-".substr($data_exibicao,3,2)."-".substr($data_exibicao,0,2);
	   $data_exibicao = trim($data_exibicao);

    if(trim($data_exibicao) == '--')
    {
      $data_exibicao = '0000-00-00';
    }

	return $data_exibicao;
	}
?>