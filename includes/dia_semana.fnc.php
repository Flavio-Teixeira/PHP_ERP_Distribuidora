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

   function dia_semana($data)
   {
      $ano = substr("$data", 0, 4);
      $mes = substr("$data", 5, - 3);
      $dia = substr("$data", 8, 9);

      $dia_semana = date("w", mktime(0, 0, 0, $mes, $dia, $ano));

      /*switch($diasemana) {
      case"0": $diasemana = "Domingo";       break;
      case"1": $diasemana = "Segunda-Feira"; break;
      case"2": $diasemana = "Terça-Feira";   break;
      case"3": $diasemana = "Quarta-Feira";  break;
      case"4": $diasemana = "Quinta-Feira";  break;
      case"5": $diasemana = "Sexta-Feira";   break;
      case"6": $diasemana = "Sábado";        break;
      }*/

      return $dia_semana;
   }
?>