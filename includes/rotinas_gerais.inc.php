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

//*** Rotinas Gerais ***

function diferenca_entre_datas($d1, $d2, $type = '', $sep = '-')
{
   $d1 = explode($sep, $d1);
   $d2 = explode($sep, $d2);
   switch($type)
   {
      case 'A':
         $X = 31536000;
         break;
      case 'M':
         $X = 2592000;
         break;
      case 'D':
         $X = 86400;
         break;
      case 'H':
         $X = 3600;
         break;
      case 'MI':
         $X = 60;
         break;
      default:
         $X = 1;
   }
   return floor(((mktime(0, 0, 0, $d2[1], $d2[2], $d2[0]) - mktime(0, 0, 0, $d1[1], $d1[2], $d1[0])) / $X));
}

function completa_nivel($texto, $nivel)
{
   if($nivel <= 0)
   {
      $nivel = 1;
   }

   $complementa_nivel_str = ' ';

   for($ind = 1; $ind <= $nivel; $ind++)
   {
      $complementa_nivel_str .= '_';
   }

   $texto = str_replace('_', '', $texto);

   $resulta_codigo = trim($complementa_nivel_str) . trim($texto);
   $resulta_codigo = trim($resulta_codigo);

   return $resulta_codigo;
}

function prepara_cep($texto)
{
   $texto = trim($texto);
   $texto = str_replace('-', '', $texto);
   $texto = trim($texto);

   $tamanho_nro = strlen($texto);
   $falta_nro = 8 - $tamanho_nro;
   $complementa_zeros = ' ';
   $resulta_codigo = ' ';

   for($ind = 1; $ind <= $falta_nro; $ind++)
   {
      $complementa_zeros .= '0';
   }

   $resulta_codigo = trim($complementa_zeros) . trim($texto);
   $resulta_codigo = trim($resulta_codigo);

   return $resulta_codigo;
}

function retira_acentos($texto, $tamanho)
{
   $texto = strtoupper($texto);

   $texto = str_replace("'", ' ', $texto);
   $texto = str_replace("&", 'E', $texto);
   $texto = str_replace("°", ' ', $texto);
   $texto = str_replace("º", ' ', $texto);
   $texto = str_replace("ª", ' ', $texto);
   $texto = str_replace("§", ' ', $texto);

   $texto = str_replace('Ç', 'C', $texto);

   $texto = str_replace('Á', 'A', $texto);
   $texto = str_replace('À', 'A', $texto);
   $texto = str_replace('Ã', 'A', $texto);
   $texto = str_replace('Â', 'A', $texto);
   $texto = str_replace('Ä', 'A', $texto);

   $texto = str_replace('É', 'E', $texto);
   $texto = str_replace('È', 'E', $texto);
   $texto = str_replace('Ê', 'E', $texto);
   $texto = str_replace('Ë', 'E', $texto);

   $texto = str_replace('Í', 'I', $texto);
   $texto = str_replace('Ì', 'I', $texto);
   $texto = str_replace('Î', 'I', $texto);
   $texto = str_replace('Ï', 'I', $texto);

   $texto = str_replace('Ó', 'O', $texto);
   $texto = str_replace('Ò', 'O', $texto);
   $texto = str_replace('Ô', 'O', $texto);
   $texto = str_replace('Ö', 'O', $texto);
   $texto = str_replace('Õ', 'O', $texto);

   $texto = str_replace('Ú', 'U', $texto);
   $texto = str_replace('Ù', 'U', $texto);
   $texto = str_replace('Û', 'U', $texto);
   $texto = str_replace('Ü', 'U', $texto);

   $resulta_codigo = trim($texto);

   if($tamanho > 0)
   {
      $resulta_codigo = substr($resulta_codigo, 0, $tamanho);
   }

   return $resulta_codigo;
}

function retira_acentos_ponto_traco($texto, $tamanho)
{
   $texto = strtoupper($texto);

   $texto = str_replace("'", ' ', $texto);
   $texto = str_replace('.', '', $texto);
   $texto = str_replace(',', '', $texto);
   $texto = str_replace('-', '', $texto);
   $texto = str_replace('&', '', $texto);
   $texto = str_replace("°", ' ', $texto);
   $texto = str_replace("º", ' ', $texto);
   $texto = str_replace("ª", ' ', $texto);
   $texto = str_replace("§", ' ', $texto);

   $texto = str_replace('Ç', 'C', $texto);

   $texto = str_replace('Á', 'A', $texto);
   $texto = str_replace('À', 'A', $texto);
   $texto = str_replace('Ã', 'A', $texto);
   $texto = str_replace('Â', 'A', $texto);
   $texto = str_replace('Ä', 'A', $texto);

   $texto = str_replace('É', 'E', $texto);
   $texto = str_replace('È', 'E', $texto);
   $texto = str_replace('Ê', 'E', $texto);
   $texto = str_replace('Ë', 'E', $texto);

   $texto = str_replace('Í', 'I', $texto);
   $texto = str_replace('Ì', 'I', $texto);
   $texto = str_replace('Î', 'I', $texto);
   $texto = str_replace('Ï', 'I', $texto);

   $texto = str_replace('Ó', 'O', $texto);
   $texto = str_replace('Ò', 'O', $texto);
   $texto = str_replace('Ô', 'O', $texto);
   $texto = str_replace('Ö', 'O', $texto);
   $texto = str_replace('Õ', 'O', $texto);

   $texto = str_replace('Ú', 'U', $texto);
   $texto = str_replace('Ù', 'U', $texto);
   $texto = str_replace('Û', 'U', $texto);
   $texto = str_replace('Ü', 'U', $texto);

   $resulta_codigo = trim($texto);

   if($tamanho > 0)
   {
      $resulta_codigo = substr($resulta_codigo, 0, $tamanho);
   }

   return $resulta_codigo;
}

function retira_acentos_ponto_traco_barra($texto, $tamanho)
{
   $texto = strtoupper($texto);

   $texto = str_replace("'", ' ', $texto);
   $texto = str_replace('.', '', $texto);
   $texto = str_replace(',', '', $texto);
   $texto = str_replace('-', '', $texto);
   $texto = str_replace('/', '', $texto);
   $texto = str_replace('(', '', $texto);
   $texto = str_replace(')', '', $texto);
   $texto = str_replace('&', '', $texto);
   $texto = str_replace("°", ' ', $texto);
   $texto = str_replace("º", ' ', $texto);
   $texto = str_replace("ª", ' ', $texto);
   $texto = str_replace("§", ' ', $texto);

   $texto = str_replace('Ç', 'C', $texto);

   $texto = str_replace('Á', 'A', $texto);
   $texto = str_replace('À', 'A', $texto);
   $texto = str_replace('Ã', 'A', $texto);
   $texto = str_replace('Â', 'A', $texto);
   $texto = str_replace('Ä', 'A', $texto);

   $texto = str_replace('É', 'E', $texto);
   $texto = str_replace('È', 'E', $texto);
   $texto = str_replace('Ê', 'E', $texto);
   $texto = str_replace('Ë', 'E', $texto);

   $texto = str_replace('Í', 'I', $texto);
   $texto = str_replace('Ì', 'I', $texto);
   $texto = str_replace('Î', 'I', $texto);
   $texto = str_replace('Ï', 'I', $texto);

   $texto = str_replace('Ó', 'O', $texto);
   $texto = str_replace('Ò', 'O', $texto);
   $texto = str_replace('Ô', 'O', $texto);
   $texto = str_replace('Ö', 'O', $texto);
   $texto = str_replace('Õ', 'O', $texto);

   $texto = str_replace('Ú', 'U', $texto);
   $texto = str_replace('Ù', 'U', $texto);
   $texto = str_replace('Û', 'U', $texto);
   $texto = str_replace('Ü', 'U', $texto);

   $resulta_codigo = trim($texto);

   if($tamanho > 0)
   {
      $resulta_codigo = substr($resulta_codigo, 0, $tamanho);
   }

   return $resulta_codigo;
}

function obtem_numero_antes($texto)
{
   $texto = retira_acentos($texto, 0);
   $resulta_codigo = substr($texto, 0, (strpos($texto, ',')));
   $resulta_codigo = trim($resulta_codigo);
   $resulta_codigo = substr($resulta_codigo, 0, 60);

   return strtoupper($resulta_codigo);
}

function obtem_numero_depois($texto)
{
   $texto = retira_acentos($texto, 0);
   $resulta_codigo = substr($texto, (strpos($texto, ',') + 1), (strlen($texto) - (strpos($texto, ',') + 1)));
   $resulta_codigo = trim($resulta_codigo);
   $resulta_codigo = substr($resulta_codigo, 0, 60);

   return strtoupper($resulta_codigo);
}

function obtem_antes_caracter($texto,$caracter)
{
   $texto = retira_acentos($texto, 0);
   $resulta_codigo = substr($texto, 0, (strpos($texto, $caracter)));
   $resulta_codigo = trim($resulta_codigo);
   $resulta_codigo = substr($resulta_codigo, 0, 60);

   return strtoupper($resulta_codigo);
}

function obtem_depois_caracter($texto,$caracter)
{
   $texto = retira_acentos($texto, 0);
   $resulta_codigo = substr($texto, (strpos($texto, $caracter) + 1), (strlen($texto) - (strpos($texto, $caracter) + 1)));
   $resulta_codigo = trim($resulta_codigo);
   $resulta_codigo = substr($resulta_codigo, 0, 60);

   return strtoupper($resulta_codigo);
}

function completa_zeros($texto, $tamanho)
{
   $complementa_zeros_str = ' ';

   for($ind = 1; $ind <= ($tamanho - strlen(trim($texto))); $ind++)
   {
      $complementa_zeros_str .= '0';
   }

   $resulta_codigo = trim($complementa_zeros_str) . trim($texto);
   $resulta_codigo = trim($resulta_codigo);
   $resulta_codigo = substr($resulta_codigo, (strlen($resulta_codigo) - $tamanho), $tamanho);

   return $resulta_codigo;
}

function completa_zeros_retira_caracter($texto, $tamanho)
{
   $complementa_zeros_str = ' ';
   $texto = str_replace('.', '', $texto);
   $texto = str_replace('/', '', $texto);
   $texto = str_replace('-', '', $texto);
   $texto = str_replace(',', '', $texto);
   $texto = str_replace('&', '', $texto);
   $texto = str_replace('(', '', $texto);
   $texto = str_replace(')', '', $texto);
   $texto = str_replace('<', '', $texto);
   $texto = str_replace('>', '', $texto);
   $texto = str_replace('[', '', $texto);
   $texto = str_replace(']', '', $texto);
   $texto = str_replace("'", '', $texto);
   $texto = str_replace('"', '', $texto);

   for($ind = 1; $ind <= ($tamanho - strlen(trim($texto))); $ind++)
   {
      $complementa_zeros_str .= '0';
   }

   $resulta_codigo = trim($complementa_zeros_str) . trim($texto);
   $resulta_codigo = trim($resulta_codigo);
   $resulta_codigo = substr($resulta_codigo, (strlen($resulta_codigo) - $tamanho), $tamanho);

   return $resulta_codigo;
}

function codigo_numerico($nro_nota)
{
   $ano_nro = trim(date("y", time()));
   $mes_nro = trim(date("m", time()));

   $tamanho_nro = strlen(trim($nro_nota));
   $falta_nro = 6 - $tamanho_nro;
   $complementa_zeros = ' ';
   $resulta_codigo = ' ';

   for($ind = 1; $ind <= $falta_nro; $ind++)
   {
      $complementa_zeros .= '0';
   }

   $resulta_codigo = trim($ano_nro) . trim($complementa_zeros) . trim($nro_nota);
   $resulta_codigo = trim($resulta_codigo);

   return $resulta_codigo;
}

function codigo_numerico_protocolo($nro_nota, $ano_nro, $mes_nro)
{
   $ano_nro = completa_zeros($ano_nro, 2);
   $mes_nro = completa_zeros($mes_nro, 2);

   $tamanho_nro = strlen(trim($nro_nota));
   $falta_nro = 6 - $tamanho_nro;
   $complementa_zeros = ' ';
   $resulta_codigo = ' ';

   for($ind = 1; $ind <= $falta_nro; $ind++)
   {
      $complementa_zeros .= '0';
   }

   $resulta_codigo = trim($ano_nro) . trim($complementa_zeros) . trim($nro_nota);
   $resulta_codigo = trim($resulta_codigo);

   return $resulta_codigo;
}

function chave_acesso($uf_nfe, $cnpj_padrao, $nro_nota, $tipo_emissao, $serie)
{
   $ano_nro = trim(date("y", time()));
   $mes_nro = trim(date("m", time()));

   $tamanho_nro = strlen(trim($nro_nota));
   $falta_nro = 9 - $tamanho_nro;
   $complementa_zeros = ' ';
   $resulta_codigo = ' ';

   for($ind = 1; $ind <= $falta_nro; $ind++)
   {
      $complementa_zeros .= '0';
   }

   $resulta_codigo = trim($complementa_zeros) . trim($nro_nota);
   $resulta_codigo = trim($resulta_codigo);

   $chave_nro = trim($uf_nfe) . trim($ano_nro) . trim($mes_nro) . trim($cnpj_padrao) . '55' . completa_zeros($serie, 3) . trim($resulta_codigo) . trim($tipo_emissao) . trim(codigo_numerico($nro_nota));

   //*** Calcula o Dígito Verificador ***
   //*** Separa Campo a Campo para o Cálculo do DV ***

   $chave_nro_pos[1] = substr($chave_nro, 0, 1);
   $chave_nro_pos[2] = substr($chave_nro, 1, 1);
   $chave_nro_pos[3] = substr($chave_nro, 2, 1);
   $chave_nro_pos[4] = substr($chave_nro, 3, 1);
   $chave_nro_pos[5] = substr($chave_nro, 4, 1);
   $chave_nro_pos[6] = substr($chave_nro, 5, 1);
   $chave_nro_pos[7] = substr($chave_nro, 6, 1);
   $chave_nro_pos[8] = substr($chave_nro, 7, 1);
   $chave_nro_pos[9] = substr($chave_nro, 8, 1);
   $chave_nro_pos[10] = substr($chave_nro, 9, 1);
   $chave_nro_pos[11] = substr($chave_nro, 10, 1);
   $chave_nro_pos[12] = substr($chave_nro, 11, 1);
   $chave_nro_pos[13] = substr($chave_nro, 12, 1);
   $chave_nro_pos[14] = substr($chave_nro, 13, 1);
   $chave_nro_pos[15] = substr($chave_nro, 14, 1);
   $chave_nro_pos[16] = substr($chave_nro, 15, 1);
   $chave_nro_pos[17] = substr($chave_nro, 16, 1);
   $chave_nro_pos[18] = substr($chave_nro, 17, 1);
   $chave_nro_pos[19] = substr($chave_nro, 18, 1);
   $chave_nro_pos[20] = substr($chave_nro, 19, 1);
   $chave_nro_pos[21] = substr($chave_nro, 20, 1);
   $chave_nro_pos[22] = substr($chave_nro, 21, 1);
   $chave_nro_pos[23] = substr($chave_nro, 22, 1);
   $chave_nro_pos[24] = substr($chave_nro, 23, 1);
   $chave_nro_pos[25] = substr($chave_nro, 24, 1);
   $chave_nro_pos[26] = substr($chave_nro, 25, 1);
   $chave_nro_pos[27] = substr($chave_nro, 26, 1);
   $chave_nro_pos[28] = substr($chave_nro, 27, 1);
   $chave_nro_pos[29] = substr($chave_nro, 28, 1);
   $chave_nro_pos[30] = substr($chave_nro, 29, 1);
   $chave_nro_pos[31] = substr($chave_nro, 30, 1);
   $chave_nro_pos[32] = substr($chave_nro, 31, 1);
   $chave_nro_pos[33] = substr($chave_nro, 32, 1);
   $chave_nro_pos[34] = substr($chave_nro, 33, 1);
   $chave_nro_pos[35] = substr($chave_nro, 34, 1);
   $chave_nro_pos[36] = substr($chave_nro, 35, 1);
   $chave_nro_pos[37] = substr($chave_nro, 36, 1);
   $chave_nro_pos[38] = substr($chave_nro, 37, 1);
   $chave_nro_pos[39] = substr($chave_nro, 38, 1);
   $chave_nro_pos[40] = substr($chave_nro, 39, 1);
   $chave_nro_pos[41] = substr($chave_nro, 40, 1);
   $chave_nro_pos[42] = substr($chave_nro, 41, 1);
   $chave_nro_pos[43] = substr($chave_nro, 42, 1);

   //*** Calcula o Campo com a Sequencia ***

   $chave_nro_calc[1] = $chave_nro_pos[1] * 4;
   $chave_nro_calc[2] = $chave_nro_pos[2] * 3;
   $chave_nro_calc[3] = $chave_nro_pos[3] * 2;
   $chave_nro_calc[4] = $chave_nro_pos[4] * 9;
   $chave_nro_calc[5] = $chave_nro_pos[5] * 8;
   $chave_nro_calc[6] = $chave_nro_pos[6] * 7;
   $chave_nro_calc[7] = $chave_nro_pos[7] * 6;
   $chave_nro_calc[8] = $chave_nro_pos[8] * 5;
   $chave_nro_calc[9] = $chave_nro_pos[9] * 4;
   $chave_nro_calc[10] = $chave_nro_pos[10] * 3;
   $chave_nro_calc[11] = $chave_nro_pos[11] * 2;
   $chave_nro_calc[12] = $chave_nro_pos[12] * 9;
   $chave_nro_calc[13] = $chave_nro_pos[13] * 8;
   $chave_nro_calc[14] = $chave_nro_pos[14] * 7;
   $chave_nro_calc[15] = $chave_nro_pos[15] * 6;
   $chave_nro_calc[16] = $chave_nro_pos[16] * 5;
   $chave_nro_calc[17] = $chave_nro_pos[17] * 4;
   $chave_nro_calc[18] = $chave_nro_pos[18] * 3;
   $chave_nro_calc[19] = $chave_nro_pos[19] * 2;
   $chave_nro_calc[20] = $chave_nro_pos[20] * 9;
   $chave_nro_calc[21] = $chave_nro_pos[21] * 8;
   $chave_nro_calc[22] = $chave_nro_pos[22] * 7;
   $chave_nro_calc[23] = $chave_nro_pos[23] * 6;
   $chave_nro_calc[24] = $chave_nro_pos[24] * 5;
   $chave_nro_calc[25] = $chave_nro_pos[25] * 4;
   $chave_nro_calc[26] = $chave_nro_pos[26] * 3;
   $chave_nro_calc[27] = $chave_nro_pos[27] * 2;
   $chave_nro_calc[28] = $chave_nro_pos[28] * 9;
   $chave_nro_calc[29] = $chave_nro_pos[29] * 8;
   $chave_nro_calc[30] = $chave_nro_pos[30] * 7;
   $chave_nro_calc[31] = $chave_nro_pos[31] * 6;
   $chave_nro_calc[32] = $chave_nro_pos[32] * 5;
   $chave_nro_calc[33] = $chave_nro_pos[33] * 4;
   $chave_nro_calc[34] = $chave_nro_pos[34] * 3;
   $chave_nro_calc[35] = $chave_nro_pos[35] * 2;
   $chave_nro_calc[36] = $chave_nro_pos[36] * 9;
   $chave_nro_calc[37] = $chave_nro_pos[37] * 8;
   $chave_nro_calc[38] = $chave_nro_pos[38] * 7;
   $chave_nro_calc[39] = $chave_nro_pos[39] * 6;
   $chave_nro_calc[40] = $chave_nro_pos[40] * 5;
   $chave_nro_calc[41] = $chave_nro_pos[41] * 4;
   $chave_nro_calc[42] = $chave_nro_pos[42] * 3;
   $chave_nro_calc[43] = $chave_nro_pos[43] * 2;

   //*** Soma o Total das Multiplicações e Calcula o Dígito ***

   $total_ponderacoes = $chave_nro_calc[1] + $chave_nro_calc[2] + $chave_nro_calc[3] + $chave_nro_calc[4] + $chave_nro_calc[5] + $chave_nro_calc[6] + $chave_nro_calc[7] + $chave_nro_calc[8] + $chave_nro_calc[9] + $chave_nro_calc[10] + $chave_nro_calc[11] + $chave_nro_calc[12] + $chave_nro_calc[13] + $chave_nro_calc[14] + $chave_nro_calc[15] + $chave_nro_calc[16] + $chave_nro_calc[17] + $chave_nro_calc[18] + $chave_nro_calc[19] + $chave_nro_calc[20] + $chave_nro_calc[21] + $chave_nro_calc[22] + $chave_nro_calc[23] + $chave_nro_calc[24] + $chave_nro_calc[25] + $chave_nro_calc[26] + $chave_nro_calc[27] + $chave_nro_calc[28] + $chave_nro_calc[29] + $chave_nro_calc[30] + $chave_nro_calc[31] + $chave_nro_calc[32] + $chave_nro_calc[33] + $chave_nro_calc[34] + $chave_nro_calc[35] + $chave_nro_calc[36] + $chave_nro_calc[37] + $chave_nro_calc[38] + $chave_nro_calc[39] + $chave_nro_calc[40] + $chave_nro_calc[41] + $chave_nro_calc[42] + $chave_nro_calc[43];
   $digito = $total_ponderacoes % 11;

   if(($digito == 0)or($digito == 1))
   {
      $digito = 0;
   }
   else
   {
      $digito = 11 - $digito;
   }

   //*** Retorna a Chave e o Dígito ***

   return trim($chave_nro) . trim($digito);

}

function chave_acesso_cte($uf_nfe, $cnpj_padrao, $nro_nota, $tipo_emissao, $serie)
{
   $ano_nro = trim(date("y", time()));
   $mes_nro = trim(date("m", time()));

   $tamanho_nro = strlen(trim($nro_nota));
   $falta_nro = 9 - $tamanho_nro;
   $complementa_zeros = ' ';
   $resulta_codigo = ' ';

   for($ind = 1; $ind <= $falta_nro; $ind++)
   {
      $complementa_zeros .= '0';
   }

   $resulta_codigo = trim($complementa_zeros) . trim($nro_nota);
   $resulta_codigo = trim($resulta_codigo);

   $chave_nro = trim($uf_nfe) . trim($ano_nro) . trim($mes_nro) . trim($cnpj_padrao) . '57' . completa_zeros($serie, 3) . trim($resulta_codigo) . trim($tipo_emissao) . trim(codigo_numerico($nro_nota));

   //*** Calcula o Dígito Verificador ***
   //*** Separa Campo a Campo para o Cálculo do DV ***

   $chave_nro_pos[1] = substr($chave_nro, 0, 1);
   $chave_nro_pos[2] = substr($chave_nro, 1, 1);
   $chave_nro_pos[3] = substr($chave_nro, 2, 1);
   $chave_nro_pos[4] = substr($chave_nro, 3, 1);
   $chave_nro_pos[5] = substr($chave_nro, 4, 1);
   $chave_nro_pos[6] = substr($chave_nro, 5, 1);
   $chave_nro_pos[7] = substr($chave_nro, 6, 1);
   $chave_nro_pos[8] = substr($chave_nro, 7, 1);
   $chave_nro_pos[9] = substr($chave_nro, 8, 1);
   $chave_nro_pos[10] = substr($chave_nro, 9, 1);
   $chave_nro_pos[11] = substr($chave_nro, 10, 1);
   $chave_nro_pos[12] = substr($chave_nro, 11, 1);
   $chave_nro_pos[13] = substr($chave_nro, 12, 1);
   $chave_nro_pos[14] = substr($chave_nro, 13, 1);
   $chave_nro_pos[15] = substr($chave_nro, 14, 1);
   $chave_nro_pos[16] = substr($chave_nro, 15, 1);
   $chave_nro_pos[17] = substr($chave_nro, 16, 1);
   $chave_nro_pos[18] = substr($chave_nro, 17, 1);
   $chave_nro_pos[19] = substr($chave_nro, 18, 1);
   $chave_nro_pos[20] = substr($chave_nro, 19, 1);
   $chave_nro_pos[21] = substr($chave_nro, 20, 1);
   $chave_nro_pos[22] = substr($chave_nro, 21, 1);
   $chave_nro_pos[23] = substr($chave_nro, 22, 1);
   $chave_nro_pos[24] = substr($chave_nro, 23, 1);
   $chave_nro_pos[25] = substr($chave_nro, 24, 1);
   $chave_nro_pos[26] = substr($chave_nro, 25, 1);
   $chave_nro_pos[27] = substr($chave_nro, 26, 1);
   $chave_nro_pos[28] = substr($chave_nro, 27, 1);
   $chave_nro_pos[29] = substr($chave_nro, 28, 1);
   $chave_nro_pos[30] = substr($chave_nro, 29, 1);
   $chave_nro_pos[31] = substr($chave_nro, 30, 1);
   $chave_nro_pos[32] = substr($chave_nro, 31, 1);
   $chave_nro_pos[33] = substr($chave_nro, 32, 1);
   $chave_nro_pos[34] = substr($chave_nro, 33, 1);
   $chave_nro_pos[35] = substr($chave_nro, 34, 1);
   $chave_nro_pos[36] = substr($chave_nro, 35, 1);
   $chave_nro_pos[37] = substr($chave_nro, 36, 1);
   $chave_nro_pos[38] = substr($chave_nro, 37, 1);
   $chave_nro_pos[39] = substr($chave_nro, 38, 1);
   $chave_nro_pos[40] = substr($chave_nro, 39, 1);
   $chave_nro_pos[41] = substr($chave_nro, 40, 1);
   $chave_nro_pos[42] = substr($chave_nro, 41, 1);
   $chave_nro_pos[43] = substr($chave_nro, 42, 1);

   //*** Calcula o Campo com a Sequencia ***

   $chave_nro_calc[1] = $chave_nro_pos[1] * 4;
   $chave_nro_calc[2] = $chave_nro_pos[2] * 3;
   $chave_nro_calc[3] = $chave_nro_pos[3] * 2;
   $chave_nro_calc[4] = $chave_nro_pos[4] * 9;
   $chave_nro_calc[5] = $chave_nro_pos[5] * 8;
   $chave_nro_calc[6] = $chave_nro_pos[6] * 7;
   $chave_nro_calc[7] = $chave_nro_pos[7] * 6;
   $chave_nro_calc[8] = $chave_nro_pos[8] * 5;
   $chave_nro_calc[9] = $chave_nro_pos[9] * 4;
   $chave_nro_calc[10] = $chave_nro_pos[10] * 3;
   $chave_nro_calc[11] = $chave_nro_pos[11] * 2;
   $chave_nro_calc[12] = $chave_nro_pos[12] * 9;
   $chave_nro_calc[13] = $chave_nro_pos[13] * 8;
   $chave_nro_calc[14] = $chave_nro_pos[14] * 7;
   $chave_nro_calc[15] = $chave_nro_pos[15] * 6;
   $chave_nro_calc[16] = $chave_nro_pos[16] * 5;
   $chave_nro_calc[17] = $chave_nro_pos[17] * 4;
   $chave_nro_calc[18] = $chave_nro_pos[18] * 3;
   $chave_nro_calc[19] = $chave_nro_pos[19] * 2;
   $chave_nro_calc[20] = $chave_nro_pos[20] * 9;
   $chave_nro_calc[21] = $chave_nro_pos[21] * 8;
   $chave_nro_calc[22] = $chave_nro_pos[22] * 7;
   $chave_nro_calc[23] = $chave_nro_pos[23] * 6;
   $chave_nro_calc[24] = $chave_nro_pos[24] * 5;
   $chave_nro_calc[25] = $chave_nro_pos[25] * 4;
   $chave_nro_calc[26] = $chave_nro_pos[26] * 3;
   $chave_nro_calc[27] = $chave_nro_pos[27] * 2;
   $chave_nro_calc[28] = $chave_nro_pos[28] * 9;
   $chave_nro_calc[29] = $chave_nro_pos[29] * 8;
   $chave_nro_calc[30] = $chave_nro_pos[30] * 7;
   $chave_nro_calc[31] = $chave_nro_pos[31] * 6;
   $chave_nro_calc[32] = $chave_nro_pos[32] * 5;
   $chave_nro_calc[33] = $chave_nro_pos[33] * 4;
   $chave_nro_calc[34] = $chave_nro_pos[34] * 3;
   $chave_nro_calc[35] = $chave_nro_pos[35] * 2;
   $chave_nro_calc[36] = $chave_nro_pos[36] * 9;
   $chave_nro_calc[37] = $chave_nro_pos[37] * 8;
   $chave_nro_calc[38] = $chave_nro_pos[38] * 7;
   $chave_nro_calc[39] = $chave_nro_pos[39] * 6;
   $chave_nro_calc[40] = $chave_nro_pos[40] * 5;
   $chave_nro_calc[41] = $chave_nro_pos[41] * 4;
   $chave_nro_calc[42] = $chave_nro_pos[42] * 3;
   $chave_nro_calc[43] = $chave_nro_pos[43] * 2;

   //*** Soma o Total das Multiplicações e Calcula o Dígito ***

   $total_ponderacoes = $chave_nro_calc[1] + $chave_nro_calc[2] + $chave_nro_calc[3] + $chave_nro_calc[4] + $chave_nro_calc[5] + $chave_nro_calc[6] + $chave_nro_calc[7] + $chave_nro_calc[8] + $chave_nro_calc[9] + $chave_nro_calc[10] + $chave_nro_calc[11] + $chave_nro_calc[12] + $chave_nro_calc[13] + $chave_nro_calc[14] + $chave_nro_calc[15] + $chave_nro_calc[16] + $chave_nro_calc[17] + $chave_nro_calc[18] + $chave_nro_calc[19] + $chave_nro_calc[20] + $chave_nro_calc[21] + $chave_nro_calc[22] + $chave_nro_calc[23] + $chave_nro_calc[24] + $chave_nro_calc[25] + $chave_nro_calc[26] + $chave_nro_calc[27] + $chave_nro_calc[28] + $chave_nro_calc[29] + $chave_nro_calc[30] + $chave_nro_calc[31] + $chave_nro_calc[32] + $chave_nro_calc[33] + $chave_nro_calc[34] + $chave_nro_calc[35] + $chave_nro_calc[36] + $chave_nro_calc[37] + $chave_nro_calc[38] + $chave_nro_calc[39] + $chave_nro_calc[40] + $chave_nro_calc[41] + $chave_nro_calc[42] + $chave_nro_calc[43];
   $digito = $total_ponderacoes % 11;

   if(($digito == 0)or($digito == 1))
   {
      $digito = 0;
   }
   else
   {
      $digito = 11 - $digito;
   }

   //*** Retorna a Chave e o Dígito ***

   return trim($chave_nro) . trim($digito);

}

function chave_acesso_protocolo($uf_nfe, $cnpj_padrao, $nro_nota, $ano_nro, $mes_nro, $serie)
{
   $ano_nro = completa_zeros($ano_nro, 2);
   $mes_nro = completa_zeros($mes_nro, 2);

   $tamanho_nro = strlen(trim($nro_nota));
   $falta_nro = 9 - $tamanho_nro;
   $complementa_zeros = ' ';
   $resulta_codigo = ' ';

   for($ind = 1; $ind <= $falta_nro; $ind++)
   {
      $complementa_zeros .= '0';
   }

   $resulta_codigo = trim($complementa_zeros) . trim($nro_nota);
   $resulta_codigo = trim($resulta_codigo);

   $chave_nro = trim($uf_nfe) . trim($ano_nro) . trim($mes_nro) . trim($cnpj_padrao) . '55' . completa_zeros($serie, 3) . trim($resulta_codigo) . '1' . trim(codigo_numerico_protocolo($nro_nota, trim($ano_nro), trim($mes_nro)));

   //*** Calcula o Dígito Verificador ***
   //*** Separa Campo a Campo para o Cálculo do DV ***

   $chave_nro_pos[1] = substr($chave_nro, 0, 1);
   $chave_nro_pos[2] = substr($chave_nro, 1, 1);
   $chave_nro_pos[3] = substr($chave_nro, 2, 1);
   $chave_nro_pos[4] = substr($chave_nro, 3, 1);
   $chave_nro_pos[5] = substr($chave_nro, 4, 1);
   $chave_nro_pos[6] = substr($chave_nro, 5, 1);
   $chave_nro_pos[7] = substr($chave_nro, 6, 1);
   $chave_nro_pos[8] = substr($chave_nro, 7, 1);
   $chave_nro_pos[9] = substr($chave_nro, 8, 1);
   $chave_nro_pos[10] = substr($chave_nro, 9, 1);
   $chave_nro_pos[11] = substr($chave_nro, 10, 1);
   $chave_nro_pos[12] = substr($chave_nro, 11, 1);
   $chave_nro_pos[13] = substr($chave_nro, 12, 1);
   $chave_nro_pos[14] = substr($chave_nro, 13, 1);
   $chave_nro_pos[15] = substr($chave_nro, 14, 1);
   $chave_nro_pos[16] = substr($chave_nro, 15, 1);
   $chave_nro_pos[17] = substr($chave_nro, 16, 1);
   $chave_nro_pos[18] = substr($chave_nro, 17, 1);
   $chave_nro_pos[19] = substr($chave_nro, 18, 1);
   $chave_nro_pos[20] = substr($chave_nro, 19, 1);
   $chave_nro_pos[21] = substr($chave_nro, 20, 1);
   $chave_nro_pos[22] = substr($chave_nro, 21, 1);
   $chave_nro_pos[23] = substr($chave_nro, 22, 1);
   $chave_nro_pos[24] = substr($chave_nro, 23, 1);
   $chave_nro_pos[25] = substr($chave_nro, 24, 1);
   $chave_nro_pos[26] = substr($chave_nro, 25, 1);
   $chave_nro_pos[27] = substr($chave_nro, 26, 1);
   $chave_nro_pos[28] = substr($chave_nro, 27, 1);
   $chave_nro_pos[29] = substr($chave_nro, 28, 1);
   $chave_nro_pos[30] = substr($chave_nro, 29, 1);
   $chave_nro_pos[31] = substr($chave_nro, 30, 1);
   $chave_nro_pos[32] = substr($chave_nro, 31, 1);
   $chave_nro_pos[33] = substr($chave_nro, 32, 1);
   $chave_nro_pos[34] = substr($chave_nro, 33, 1);
   $chave_nro_pos[35] = substr($chave_nro, 34, 1);
   $chave_nro_pos[36] = substr($chave_nro, 35, 1);
   $chave_nro_pos[37] = substr($chave_nro, 36, 1);
   $chave_nro_pos[38] = substr($chave_nro, 37, 1);
   $chave_nro_pos[39] = substr($chave_nro, 38, 1);
   $chave_nro_pos[40] = substr($chave_nro, 39, 1);
   $chave_nro_pos[41] = substr($chave_nro, 40, 1);
   $chave_nro_pos[42] = substr($chave_nro, 41, 1);
   $chave_nro_pos[43] = substr($chave_nro, 42, 1);

   //*** Calcula o Campo com a Sequencia ***

   $chave_nro_calc[1] = $chave_nro_pos[1] * 4;
   $chave_nro_calc[2] = $chave_nro_pos[2] * 3;
   $chave_nro_calc[3] = $chave_nro_pos[3] * 2;
   $chave_nro_calc[4] = $chave_nro_pos[4] * 9;
   $chave_nro_calc[5] = $chave_nro_pos[5] * 8;
   $chave_nro_calc[6] = $chave_nro_pos[6] * 7;
   $chave_nro_calc[7] = $chave_nro_pos[7] * 6;
   $chave_nro_calc[8] = $chave_nro_pos[8] * 5;
   $chave_nro_calc[9] = $chave_nro_pos[9] * 4;
   $chave_nro_calc[10] = $chave_nro_pos[10] * 3;
   $chave_nro_calc[11] = $chave_nro_pos[11] * 2;
   $chave_nro_calc[12] = $chave_nro_pos[12] * 9;
   $chave_nro_calc[13] = $chave_nro_pos[13] * 8;
   $chave_nro_calc[14] = $chave_nro_pos[14] * 7;
   $chave_nro_calc[15] = $chave_nro_pos[15] * 6;
   $chave_nro_calc[16] = $chave_nro_pos[16] * 5;
   $chave_nro_calc[17] = $chave_nro_pos[17] * 4;
   $chave_nro_calc[18] = $chave_nro_pos[18] * 3;
   $chave_nro_calc[19] = $chave_nro_pos[19] * 2;
   $chave_nro_calc[20] = $chave_nro_pos[20] * 9;
   $chave_nro_calc[21] = $chave_nro_pos[21] * 8;
   $chave_nro_calc[22] = $chave_nro_pos[22] * 7;
   $chave_nro_calc[23] = $chave_nro_pos[23] * 6;
   $chave_nro_calc[24] = $chave_nro_pos[24] * 5;
   $chave_nro_calc[25] = $chave_nro_pos[25] * 4;
   $chave_nro_calc[26] = $chave_nro_pos[26] * 3;
   $chave_nro_calc[27] = $chave_nro_pos[27] * 2;
   $chave_nro_calc[28] = $chave_nro_pos[28] * 9;
   $chave_nro_calc[29] = $chave_nro_pos[29] * 8;
   $chave_nro_calc[30] = $chave_nro_pos[30] * 7;
   $chave_nro_calc[31] = $chave_nro_pos[31] * 6;
   $chave_nro_calc[32] = $chave_nro_pos[32] * 5;
   $chave_nro_calc[33] = $chave_nro_pos[33] * 4;
   $chave_nro_calc[34] = $chave_nro_pos[34] * 3;
   $chave_nro_calc[35] = $chave_nro_pos[35] * 2;
   $chave_nro_calc[36] = $chave_nro_pos[36] * 9;
   $chave_nro_calc[37] = $chave_nro_pos[37] * 8;
   $chave_nro_calc[38] = $chave_nro_pos[38] * 7;
   $chave_nro_calc[39] = $chave_nro_pos[39] * 6;
   $chave_nro_calc[40] = $chave_nro_pos[40] * 5;
   $chave_nro_calc[41] = $chave_nro_pos[41] * 4;
   $chave_nro_calc[42] = $chave_nro_pos[42] * 3;
   $chave_nro_calc[43] = $chave_nro_pos[43] * 2;

   //*** Soma o Total das Multiplicações e Calcula o Dígito ***

   $total_ponderacoes = $chave_nro_calc[1] + $chave_nro_calc[2] + $chave_nro_calc[3] + $chave_nro_calc[4] + $chave_nro_calc[5] + $chave_nro_calc[6] + $chave_nro_calc[7] + $chave_nro_calc[8] + $chave_nro_calc[9] + $chave_nro_calc[10] + $chave_nro_calc[11] + $chave_nro_calc[12] + $chave_nro_calc[13] + $chave_nro_calc[14] + $chave_nro_calc[15] + $chave_nro_calc[16] + $chave_nro_calc[17] + $chave_nro_calc[18] + $chave_nro_calc[19] + $chave_nro_calc[20] + $chave_nro_calc[21] + $chave_nro_calc[22] + $chave_nro_calc[23] + $chave_nro_calc[24] + $chave_nro_calc[25] + $chave_nro_calc[26] + $chave_nro_calc[27] + $chave_nro_calc[28] + $chave_nro_calc[29] + $chave_nro_calc[30] + $chave_nro_calc[31] + $chave_nro_calc[32] + $chave_nro_calc[33] + $chave_nro_calc[34] + $chave_nro_calc[35] + $chave_nro_calc[36] + $chave_nro_calc[37] + $chave_nro_calc[38] + $chave_nro_calc[39] + $chave_nro_calc[40] + $chave_nro_calc[41] + $chave_nro_calc[42] + $chave_nro_calc[43];
   $digito = $total_ponderacoes % 11;

   if(($digito == 0)or($digito == 1))
   {
      $digito = 0;
   }
   else
   {
      $digito = 11 - $digito;
   }

   //*** Retorna a Chave e o Dígito ***

   return trim($chave_nro) . trim($digito);

}

function obtem_cfop($natureza, $estado)
{
   $resulta_cfop = '0000';
   $natureza = retira_acentos($natureza, 0);

   if(trim($natureza) == 'VENDAS')
   {
      if(trim($estado) == 'SP')
      {
         $resulta_cfop = '5101';
      }
      elseif((trim($estado) == 'RS')or(trim($estado) == 'PR')or(trim($estado) == 'SC')or(trim($estado) == 'RJ')or(trim($estado) == 'MG'))
      {
         $resulta_cfop = '6101';
      }
      else
      {
         $resulta_cfop = '6101';
      }
   }

   elseif(trim($natureza) == 'DEVOLUCAO')
   {
      if(trim($estado) == 'SP')
      {
         $resulta_cfop = '5201';
      }
      elseif((trim($estado) == 'RS')or(trim($estado) == 'PR')or(trim($estado) == 'SC')or(trim($estado) == 'RJ')or(trim($estado) == 'MG'))
      {
         $resulta_cfop = '6201';
      }
      else
      {
         $resulta_cfop = '6201';
      }
   }

   elseif(trim($natureza) == 'REMESSA')
   {
      if(trim($estado) == 'SP')
      {
         $resulta_cfop = '5901';
      }
      else
      {
         $resulta_cfop = '6901';
      }
   }

   elseif(trim($natureza) == 'IMPORTACAO')
   {
      $resulta_cfop = '3101';
   }

   elseif(trim($natureza) == 'OUTRAS SAIDAS')
   {
      if(trim($estado) == 'SP')
      {
         $resulta_cfop = '5949';
      }
      elseif((trim($estado) == 'RS')or(trim($estado) == 'PR')or(trim($estado) == 'SC')or(trim($estado) == 'RJ')or(trim($estado) == 'MG'))
      {
         $resulta_cfop = '6949';
      }
      else
      {
         $resulta_cfop = '6949';
      }
   }

   elseif(trim($natureza) == 'ENTRADA DE COMPRA')
   {
      if(trim($estado) == 'SP')
      {
         $resulta_cfop = '1101';
      }
      elseif((trim($estado) == 'RS')or(trim($estado) == 'PR')or(trim($estado) == 'SC')or(trim($estado) == 'RJ')or(trim($estado) == 'MG'))
      {
         $resulta_cfop = '2101';
      }
      else
      {
         $resulta_cfop = '2101';
      }
   }

   elseif(trim($natureza) == 'ENTRADA DE DEVOLUCAO')
   {

      if(trim($estado) == 'SP')
      {
         $resulta_cfop = '1201';
      }
      elseif((trim($estado) == 'RS')or(trim($estado) == 'PR')or(trim($estado) == 'SC')or(trim($estado) == 'RJ')or(trim($estado) == 'MG'))
      {
         $resulta_cfop = '2201';
      }
      else
      {
         $resulta_cfop = '2201';
      }
   }

   return $resulta_cfop;
}

function obtem_aliquota_icms($natureza, $estado, $pessoa, $ie_cliente)
{
   $resulta_cfop = '0000';
   $resulta_icms = 18;
   $natureza = retira_acentos($natureza, 0);

   if(trim($natureza) == 'VENDAS')
   {
      if(trim($estado) == 'SP')
      {
         $resulta_cfop = '5101';
         $resulta_icms = 18;
      }
      elseif((trim($estado) == 'RS')or(trim($estado) == 'PR')or(trim($estado) == 'SC')or(trim($estado) == 'RJ')or(trim($estado) == 'MG'))
      {
         $resulta_cfop = '6101';
         $resulta_icms = 12;
      }
      else
      {
         $resulta_cfop = '6101';
         $resulta_icms = 7;
      }
   }

   elseif(trim($natureza) == 'DEVOLUCAO')
   {
      if(trim($estado) == 'SP')
      {
         $resulta_cfop = '5201';
         $resulta_icms = 18;
      }
      elseif((trim($estado) == 'RS')or(trim($estado) == 'PR')or(trim($estado) == 'SC')or(trim($estado) == 'RJ')or(trim($estado) == 'MG'))
      {
         $resulta_cfop = '6201';
         $resulta_icms = 12;
      }
      else
      {
         $resulta_cfop = '6201';
         $resulta_icms = 7;
      }
   }

   elseif(trim($natureza) == 'REMESSA')
   {
      if(trim($estado) == 'SP')
      {
         $resulta_cfop = '5901';
         $resulta_icms = 0;
      }
      else
      {
         $resulta_cfop = '6901';
         $resulta_icms = 0;
      }
   }

   elseif(trim($natureza) == 'IMPORTACAO')
   {
      $resulta_cfop = '3101';
      $resulta_icms = 18;
   }

   elseif(trim($natureza) == 'OUTRAS SAIDAS')
   {
      if(trim($estado) == 'SP')
      {
         $resulta_cfop = '5949';
         $resulta_icms = 18;
      }
      elseif((trim($estado) == 'RS')or(trim($estado) == 'PR')or(trim($estado) == 'SC')or(trim($estado) == 'RJ')or(trim($estado) == 'MG'))
      {
         $resulta_cfop = '6949';
         $resulta_icms = 12;
      }
      else
      {
         $resulta_cfop = '6949';
         $resulta_icms = 7;
      }
   }

   elseif(trim($natureza) == 'ENTRADA DE COMPRA')
   {
      if(trim($estado) == 'SP')
      {
         $resulta_cfop = '1101';
         $resulta_icms = 18;
      }
      elseif((trim($estado) == 'RS')or(trim($estado) == 'PR')or(trim($estado) == 'SC')or(trim($estado) == 'RJ')or(trim($estado) == 'MG'))
      {
         $resulta_cfop = '2101';
         $resulta_icms = 12;
      }
      else
      {
         $resulta_cfop = '2101';
         $resulta_icms = 7;
      }
   }

   elseif(trim($natureza) == 'ENTRADA DE DEVOLUCAO')
   {

      if(trim($estado) == 'SP')
      {
         $resulta_cfop = '1201';
         $resulta_icms = 18;
      }
      elseif((trim($estado) == 'RS')or(trim($estado) == 'PR')or(trim($estado) == 'SC')or(trim($estado) == 'RJ')or(trim($estado) == 'MG'))
      {
         $resulta_cfop = '2201';
         $resulta_icms = 12;
      }
      else
      {
         $resulta_cfop = '2201';
         $resulta_icms = 7;
      }
   }

   if(($pessoa == 'PF')or(($pessoa == 'PJ')and($ie_cliente == 'ISENTO')))
   {
      $resulta_icms = 18;
   }

   return $resulta_icms;
}

function prepara_volume($volume)
{

   //*****************************************
   //*  Rotina para o Cálculo do Volume      *
   //*                                       *
   //*  Caixa com 100 Cáps. - Volume: 427,50 *
   //*  Caixa com 40 Cáps.  - Volume: 213,75 *
   //*  Caixa Ecomer        - Volume: 260,00 *
   //*  Lata                - Volume: 593,75 *
   //*****************************************

   //********************************************************
   //*  Cálculo das Embalagens                              *
   //*  Modelo           Volume   Qtde   Qtde  Qtde  Ecomer *
   //*                            Cx100  Cx40  Latas        *
   //*  Caixa 1          1187,50  3      6     2     4      *
   //*  Caixa 2          3562,50  6      13    6     9      *
   //*  Caixa 3          7125,00  12     29    12    19     *
   //*  Caixa Pequena    14250,00 24     58    24    39     *
   //*  Caixa 48         28500,00 54     114   48    88     *
   //*  Caixa 100        42750,00 100    200   72    164    *
   //*  Caixa Exportação 57000,00 108    228   96    177    *
   //********************************************************

   $CX_1 = 0;
   $CX_2 = 0;
   $CX_3 = 0;
   $CX_Peq = 0;
   $CX_48 = 0;
   $CX_100 = 0;
   $CX_Exp = 0;

   while($volume > 0)
   {
      if(($volume > 0)and($volume <= 1187.50))
      {
         $CX_1 = $CX_1 + 1;
         $volume = 0;
      }

      elseif(($volume >= 1187.51)and($volume <= 3562.50))
      {
         $CX_2 = $CX_2 + 1;
         $volume = 0;
      }

      elseif(($volume >= 3562.51)and($volume <= 7125.00))
      {
         $CX_3 = $CX_3 + 1;
         $volume = 0;
      }

      elseif(($volume >= 7125.01)and($volume <= 14250.00))
      {
         $CX_Peq = $CX_Peq + 1;
         $volume = 0;
      }

      elseif(($volume >= 14250.01)and($volume <= 28500.00))
      {
         $CX_48 = $CX_48 + 1;
         $volume = 0;
      }

      elseif(($volume >= 28500.01))
      {
         $CX_100 = $CX_100 + 1;
         $volume = $volume - 42750;
      }
   }

   $resulta_volume = $CX_1 + $CX_2 + $CX_3 + $CX_Peq + $CX_48 + $CX_100 + $CX_Exp;

   return $resulta_volume;
}

function prepara_condicao($mgt_numero_nfe, $valor_total, $condicao_pgto_1, $condicao_pgto_2, $condicao_pgto_3)
{

   $nro_nota_desd_1 = '';
   $nro_nota_desd_2 = '';
   $nro_nota_desd_3 = '';

   $dt_vcto_desd_1 = '';
   $dt_vcto_desd_2 = '';
   $dt_vcto_desd_3 = '';

   $vlr_desd_1 = 0;
   $vlr_desd_2 = 0;
   $vlr_desd_3 = 0;

   $forma_desd_1 = '';
   $forma_desd_2 = '';
   $forma_desd_3 = '';

   if(((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0'))and((trim($condicao_pgto_3) <> '')and(trim($condicao_pgto_3) <> '0')))
   {
      $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
      $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
      $nro_nota_desd_3 = trim($mgt_numero_nfe) . 'C';

      $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
      $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
      $dt_vcto_desd_3 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_3);

      $calcula_condicao = $valor_total;
      $vlr_desd_1 = ($calcula_condicao / 3);
      $vlr_desd_2 = $vlr_desd_1;
      $vlr_desd_3 = ($calcula_condicao - $vlr_desd_1 - $vlr_desd_2);

      $forma_desd_1 = trim($condicao_pgto_1);
      $forma_desd_2 = trim($condicao_pgto_2);
      $forma_desd_3 = trim($condicao_pgto_3);
   }
   elseif(((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))and((trim($condicao_pgto_2) <> '')and(trim($condicao_pgto_2) <> '0')))
   {
      $nro_nota_desd_1 = trim($mgt_numero_nfe) . 'A';
      $nro_nota_desd_2 = trim($mgt_numero_nfe) . 'B';
      $nro_nota_desd_3 = '';

      $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
      $dt_vcto_desd_2 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_2);
      $dt_vcto_desd_3 = '';

      $calcula_condicao = $valor_total;
      $vlr_desd_1 = ($calcula_condicao / 2);
      $vlr_desd_2 = ($calcula_condicao - $vlr_desd_1);
      $vlr_desd_3 = 0;

      $forma_desd_1 = trim($condicao_pgto_1);
      $forma_desd_2 = trim($condicao_pgto_2);
      $forma_desd_3 = '';
   }
   elseif((trim($condicao_pgto_1) <> '')and(trim($condicao_pgto_1) <> '0'))
   {
      $nro_nota_desd_1 = trim($mgt_numero_nfe);
      $nro_nota_desd_2 = '';
      $nro_nota_desd_3 = '';

      $dt_vcto_desd_1 = date("d/m/Y", time() + 3600 * 24 * $condicao_pgto_1);
      $dt_vcto_desd_2 = '';
      $dt_vcto_desd_3 = '';

      $calcula_condicao = $valor_total;
      $vlr_desd_1 = $calcula_condicao;
      $vlr_desd_2 = 0;
      $vlr_desd_3 = 0;

      $forma_desd_1 = trim($condicao_pgto_1);
      $forma_desd_2 = '';
      $forma_desd_3 = '';
   }
   elseif((trim($condicao_pgto_1) == '')or(trim($condicao_pgto_1) == '0'))
   {
      $nro_nota_desd_1 = trim($mgt_numero_nfe);
      $nro_nota_desd_2 = '';
      $nro_nota_desd_3 = '';

      $dt_vcto_desd_1 = date("d/m/Y", time());
      $dt_vcto_desd_2 = '';
      $dt_vcto_desd_3 = '';

      $calcula_condicao = $valor_total;
      $vlr_desd_1 = $calcula_condicao;
      $vlr_desd_2 = 0;
      $vlr_desd_3 = 0;

      $forma_desd_1 = 'À VISTA';
      $forma_desd_2 = '';
      $forma_desd_3 = '';
   }

   return array('nro_nota_desd_1' => $nro_nota_desd_1,
                'nro_nota_desd_2' => $nro_nota_desd_2,
                'nro_nota_desd_3' => $nro_nota_desd_3,
                'dt_vcto_desd_1' => $dt_vcto_desd_1,
                'dt_vcto_desd_2' => $dt_vcto_desd_2,
                'dt_vcto_desd_3' => $dt_vcto_desd_3,
                'vlr_desd_1' => $vlr_desd_1,
                'vlr_desd_2' => $vlr_desd_2,
                'vlr_desd_3' => $vlr_desd_3,
                'forma_desd_1' => $forma_desd_1,
                'forma_desd_2' => $forma_desd_2,
                'forma_desd_3' => $forma_desd_3);
}

function obtem_observacao($natureza, $estado, $base_icms_reduzida, $base_icms_normal, $valor_icms_reduzida, $valor_icms_reduzida)
{
   $natureza = retira_acentos($natureza, 0);

   if(trim($natureza) == 'VENDAS')
   {
      $resulta_obs = 'ALIQUOTA DO IPI REDUZIDA A ZERO CONFORME DECRETO No.4542/2002';
   }

   elseif(trim($natureza) == 'DEVOLUCAO')
   {
      $resulta_obs = '';
   }

   elseif(trim($natureza) == 'REMESSA')
   {
      $resulta_obs = 'SUSPENSAO DO IPI CONF.ART.1o. INCISO I DO DECRETO No. 87981/82 || ICM DIFERIDO NOS TERMOS DO ART.382 DO DECRETO No.33118 DE 14/03/91';
   }

   elseif(trim($natureza) == 'IMPORTACAO')
   {
      $resulta_obs = '';
   }

   elseif(trim($natureza) == 'OUTRAS SAIDAS')
   {
      $resulta_obs = 'ALIQUOTA DO IPI REDUZIDA A ZERO CONFORME DECRETO No.4542/2002';
   }

   elseif(trim($natureza) == 'ENTRADA DE COMPRA')
   {
      $resulta_obs = '';
   }

   elseif(trim($natureza) == 'ENTRADA DE DEVOLUCAO')
   {
      $resulta_obs = '';
   }

   if((trim($natureza) <> 'REMESSA')and(trim($natureza) <> 'IMPORTACAO'))
   {
      if($base_icms_reduzida > 0)
      {
         if(trim($estado) == 'SP')
         {
            if(strlen(trim($resulta_obs)) > 0)
            {
               $resulta_obs .= '|| REDUC.DA B.CALC.EM 33,33% CONF.ART.39 DO ANEXO II DO RICMS/00,DADO PELO DECR.SP49113/04-(B.NORM.R$ ' . number_format($base_icms_normal, 2, '.', '') . ' / B.RED.R$ ' . number_format($base_icms_reduzida, 2, '.', '') . ')';
            }
            else
            {
               $resulta_obs = 'REDUC.DA B.CALC.EM 33,33% CONF.ART.39 DO ANEXO II DO RICMS/00,DADO PELO DECR.SP49113/04-(B.NORM.R$ ' . number_format($base_icms_normal, 2, '.', '') . ' / B.RED.R$ ' . number_format($base_icms_reduzida, 2, '.', '') . ')';
            }
         }
      }
   }

   return $resulta_obs;
}

function retira_caracter($texto, $caracter)
{
   for($ind = 0; $ind < strlen($texto); $ind++)
   {
      if(substr($texto, $ind, 1) <> $caracter)
      {
         $resultado = $resultado . substr($texto, $ind, 1);
      }
   }

   return $resultado;
}

function completa_espacos_retira_caracter($texto, $tamanho)
{
   $texto = str_replace('.', '', $texto);
   $texto = str_replace('/', '', $texto);
   $texto = str_replace('-', '', $texto);
   $texto = str_replace(',', '', $texto);
   $texto = str_replace('&', '', $texto);
   $texto = str_replace('(', '', $texto);
   $texto = str_replace(')', '', $texto);
   $texto = str_replace('<', '', $texto);
   $texto = str_replace('>', '', $texto);
   $texto = str_replace('[', '', $texto);
   $texto = str_replace(']', '', $texto);
   $texto = str_replace("'", '', $texto);
   $texto = str_replace('"', '', $texto);

   $complementa_espacos_str = '';

   for($ind = 1; $ind <= ($tamanho - strlen($texto)); $ind++)
   {
      $complementa_espacos_str .= ' ';
   }

   $resulta_codigo = $texto . $complementa_espacos_str;
   $resulta_codigo = substr($resulta_codigo, 0, $tamanho);

   return $resulta_codigo;
}

function completa_zeros_str($texto, $tamanho)
{
   $complementa_espacos_str = '';

   for($ind = 1; $ind <= ($tamanho - strlen($texto)); $ind++)
   {
      $complementa_espacos_str .= '0';
   }

   $resulta_codigo = $texto . $complementa_espacos_str;
   $resulta_codigo = substr($resulta_codigo, 0, $tamanho);

   return $resulta_codigo;
}

function completa_espacos($texto, $tamanho)
{
   $complementa_espacos_str = '';

   for($ind = 1; $ind <= ($tamanho - strlen($texto)); $ind++)
   {
      $complementa_espacos_str .= ' ';
   }

   $resulta_codigo = $texto . $complementa_espacos_str;
   $resulta_codigo = substr($resulta_codigo, 0, $tamanho);

   return $resulta_codigo;
}

function valor_extenso($valor = 0, $maiusculas = false)
{
   $singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
   $plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões", "quatrilhões");

   $c = array("", "cem", "duzentos", "trezentos", "quatrocentos", "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
   $d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa");
   $d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze", "dezesseis", "dezesete", "dezoito", "dezenove");
   $u = array("", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove");

   $z = 0;
   $rt = "";

   $valor = number_format($valor, 2, ".", ".");
   $inteiro = explode(".", $valor);

   for($i = 0; $i < count($inteiro); $i++)
      for($ii = strlen($inteiro[$i]); $ii < 3; $ii++)
         $inteiro[$i] = "0" . $inteiro[$i];

   $fim = count($inteiro) - ($inteiro[count($inteiro) - 1] > 0 ? 1 : 2);

   for($i = 0; $i < count($inteiro); $i++)
   {
      $valor = $inteiro[$i];
      $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
      $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
      $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

      $r = $rc . (($rc && ($rd || $ru)) ? " e " : "") . $rd . (($rd &&
      $ru) ? " e " : "") . $ru;
      $t = count($inteiro) - 1 - $i;
      $r .= $r ? " " . ($valor > 1 ? $plural[$t] : $singular[$t]) : "";
      if($valor == "000") $z++;
      elseif($z > 0)$z--;
      if(($t == 1) && ($z > 0) && ($inteiro[0] > 0)) $r .= (($z > 1) ? " de " : "") . $plural[$t];
      if($r) $rt = $rt . ((($i > 0) && ($i <= $fim) &&
         ($inteiro[0] > 0) && ($z < 1)) ? (($i < $fim) ? ", " : " e ") : " ") . $r;
   }

   if(!$maiusculas)
   {
      return($rt ? $rt : "zero");
   }
   else
   {
      if($rt) $rt = ereg_replace(" E ", " e ", ucwords($rt));
      return(($rt) ? ($rt) : "Zero");
   }
}

?>