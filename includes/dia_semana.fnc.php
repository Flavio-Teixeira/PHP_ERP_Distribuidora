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

   function dia_semana($data)
   {
      $ano = substr("$data", 0, 4);
      $mes = substr("$data", 5, - 3);
      $dia = substr("$data", 8, 9);

      $dia_semana = date("w", mktime(0, 0, 0, $mes, $dia, $ano));

      /*switch($diasemana) {
      case"0": $diasemana = "Domingo";       break;
      case"1": $diasemana = "Segunda-Feira"; break;
      case"2": $diasemana = "Ter�a-Feira";   break;
      case"3": $diasemana = "Quarta-Feira";  break;
      case"4": $diasemana = "Quinta-Feira";  break;
      case"5": $diasemana = "Sexta-Feira";   break;
      case"6": $diasemana = "S�bado";        break;
      }*/

      return $dia_semana;
   }
?>