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

	function inverte_data_amd_to_dma($data_exibicao){
	   //
	   //Ex.: 2008/10/01 -> 01/10/2008
	   //

	   $data_exibicao = substr($data_exibicao,8,2)."/".substr($data_exibicao,5,2)."/".substr($data_exibicao,0,4);
	   $data_exibicao = trim($data_exibicao);

	return $data_exibicao;    
	}
?>