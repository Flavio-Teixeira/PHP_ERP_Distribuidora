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
//Inclusoes
require_once("conexao_principal.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Definicao de classe
class nfimportaxmlgerar extends Page
{
   public $Label6 = null;
   public $pIPI39 = null;
   public $pIPI38 = null;
   public $pIPI37 = null;
   public $pIPI36 = null;
   public $pIPI35 = null;
   public $pIPI34 = null;
   public $pIPI33 = null;
   public $pIPI32 = null;
   public $pIPI31 = null;
   public $pIPI30 = null;
   public $pIPI29 = null;
   public $pIPI28 = null;
   public $pIPI27 = null;
   public $pIPI26 = null;
   public $pIPI25 = null;
   public $pIPI24 = null;
   public $pIPI23 = null;
   public $pIPI22 = null;
   public $pIPI21 = null;
   public $pIPI20 = null;
   public $pIPI19 = null;
   public $pIPI18 = null;
   public $pIPI17 = null;
   public $pIPI16 = null;
   public $pIPI15 = null;
   public $pIPI14 = null;
   public $pIPI13 = null;
   public $pIPI12 = null;
   public $pIPI11 = null;
   public $pIPI10 = null;
   public $pIPI9 = null;
   public $pIPI8 = null;
   public $pIPI7 = null;
   public $pIPI6 = null;
   public $pIPI5 = null;
   public $pIPI4 = null;
   public $pIPI3 = null;
   public $pIPI2 = null;
   public $pIPI1 = null;
   public $pICMS39 = null;
   public $pICMS38 = null;
   public $pICMS37 = null;
   public $pICMS36 = null;
   public $pICMS35 = null;
   public $pICMS34 = null;
   public $pICMS33 = null;
   public $pICMS32 = null;
   public $pICMS31 = null;
   public $pICMS30 = null;
   public $pICMS29 = null;
   public $pICMS28 = null;
   public $pICMS27 = null;
   public $pICMS26 = null;
   public $pICMS25 = null;
   public $pICMS24 = null;
   public $pICMS23 = null;
   public $pICMS22 = null;
   public $pICMS21 = null;
   public $pICMS20 = null;
   public $pICMS19 = null;
   public $pICMS18 = null;
   public $pICMS17 = null;
   public $pICMS16 = null;
   public $pICMS15 = null;
   public $pICMS14 = null;
   public $pICMS13 = null;
   public $pICMS12 = null;
   public $pICMS11 = null;
   public $pICMS10 = null;
   public $pICMS9 = null;
   public $pICMS8 = null;
   public $pICMS7 = null;
   public $pICMS6 = null;
   public $pICMS5 = null;
   public $pICMS4 = null;
   public $pICMS3 = null;
   public $pICMS2 = null;
   public $pICMS1 = null;
   public $vIPI39 = null;
   public $vIPI38 = null;
   public $vIPI37 = null;
   public $vIPI36 = null;
   public $vIPI35 = null;
   public $vIPI34 = null;
   public $vIPI33 = null;
   public $vIPI32 = null;
   public $vIPI31 = null;
   public $vIPI30 = null;
   public $vIPI29 = null;
   public $vIPI28 = null;
   public $vIPI27 = null;
   public $vIPI26 = null;
   public $vIPI25 = null;
   public $vIPI24 = null;
   public $vIPI23 = null;
   public $vIPI22 = null;
   public $vIPI21 = null;
   public $vIPI20 = null;
   public $vIPI19 = null;
   public $vIPI18 = null;
   public $vIPI17 = null;
   public $vIPI16 = null;
   public $vIPI15 = null;
   public $vIPI14 = null;
   public $vIPI13 = null;
   public $vIPI12 = null;
   public $vIPI11 = null;
   public $vIPI10 = null;
   public $vIPI9 = null;
   public $vIPI8 = null;
   public $vIPI7 = null;
   public $vIPI6 = null;
   public $vIPI5 = null;
   public $vIPI4 = null;
   public $vIPI3 = null;
   public $vIPI2 = null;
   public $vIPI1 = null;
   public $vICMS39 = null;
   public $vICMS38 = null;
   public $vICMS37 = null;
   public $vICMS36 = null;
   public $vICMS35 = null;
   public $vICMS34 = null;
   public $vICMS33 = null;
   public $vICMS32 = null;
   public $vICMS31 = null;
   public $vICMS30 = null;
   public $vICMS29 = null;
   public $vICMS28 = null;
   public $vICMS27 = null;
   public $vICMS26 = null;
   public $vICMS25 = null;
   public $vICMS24 = null;
   public $vICMS23 = null;
   public $vICMS22 = null;
   public $vICMS21 = null;
   public $vICMS20 = null;
   public $vICMS19 = null;
   public $vICMS18 = null;
   public $vICMS17 = null;
   public $vICMS16 = null;
   public $vICMS15 = null;
   public $vICMS14 = null;
   public $vICMS13 = null;
   public $vICMS12 = null;
   public $vICMS11 = null;
   public $vICMS10 = null;
   public $vICMS9 = null;
   public $vICMS8 = null;
   public $vICMS7 = null;
   public $vICMS6 = null;
   public $vICMS5 = null;
   public $vICMS4 = null;
   public $vICMS3 = null;
   public $vICMS2 = null;
   public $vICMS1 = null;
   public $vBC39 = null;
   public $vBC38 = null;
   public $vBC37 = null;
   public $vBC36 = null;
   public $vBC35 = null;
   public $vBC34 = null;
   public $vBC33 = null;
   public $vBC32 = null;
   public $vBC31 = null;
   public $vBC30 = null;
   public $vBC29 = null;
   public $vBC28 = null;
   public $vBC27 = null;
   public $vBC26 = null;
   public $vBC25 = null;
   public $vBC24 = null;
   public $vBC23 = null;
   public $vBC22 = null;
   public $vBC21 = null;
   public $vBC20 = null;
   public $vBC19 = null;
   public $vBC18 = null;
   public $vBC17 = null;
   public $vBC16 = null;
   public $vBC15 = null;
   public $vBC14 = null;
   public $vBC13 = null;
   public $vBC12 = null;
   public $vBC11 = null;
   public $vBC10 = null;
   public $vBC9 = null;
   public $vBC8 = null;
   public $vBC7 = null;
   public $vBC6 = null;
   public $vBC5 = null;
   public $vBC4 = null;
   public $vBC3 = null;
   public $vBC2 = null;
   public $vBC1 = null;
   public $vProd39 = null;
   public $vProd38 = null;
   public $vProd37 = null;
   public $vProd36 = null;
   public $vProd35 = null;
   public $vProd34 = null;
   public $vProd33 = null;
   public $vProd32 = null;
   public $vProd31 = null;
   public $vProd30 = null;
   public $vProd29 = null;
   public $vProd28 = null;
   public $vProd27 = null;
   public $vProd26 = null;
   public $vProd25 = null;
   public $vProd24 = null;
   public $vProd23 = null;
   public $vProd22 = null;
   public $vProd21 = null;
   public $vProd20 = null;
   public $vProd19 = null;
   public $vProd18 = null;
   public $vProd17 = null;
   public $vProd16 = null;
   public $vProd15 = null;
   public $vProd14 = null;
   public $vProd13 = null;
   public $vProd12 = null;
   public $vProd11 = null;
   public $vProd10 = null;
   public $vProd9 = null;
   public $vProd8 = null;
   public $vProd7 = null;
   public $vProd6 = null;
   public $vProd5 = null;
   public $vProd4 = null;
   public $vProd3 = null;
   public $vProd2 = null;
   public $vProd1 = null;
   public $vUnCom39 = null;
   public $vUnCom38 = null;
   public $vUnCom37 = null;
   public $vUnCom36 = null;
   public $vUnCom35 = null;
   public $vUnCom34 = null;
   public $vUnCom33 = null;
   public $vUnCom32 = null;
   public $vUnCom31 = null;
   public $vUnCom30 = null;
   public $vUnCom29 = null;
   public $vUnCom28 = null;
   public $vUnCom27 = null;
   public $vUnCom26 = null;
   public $vUnCom25 = null;
   public $vUnCom24 = null;
   public $vUnCom23 = null;
   public $vUnCom22 = null;
   public $vUnCom21 = null;
   public $vUnCom20 = null;
   public $vUnCom19 = null;
   public $vUnCom18 = null;
   public $vUnCom17 = null;
   public $vUnCom16 = null;
   public $vUnCom15 = null;
   public $vUnCom14 = null;
   public $vUnCom13 = null;
   public $vUnCom12 = null;
   public $vUnCom11 = null;
   public $vUnCom10 = null;
   public $vUnCom9 = null;
   public $vUnCom8 = null;
   public $vUnCom7 = null;
   public $vUnCom6 = null;
   public $vUnCom5 = null;
   public $vUnCom4 = null;
   public $vUnCom3 = null;
   public $vUnCom2 = null;
   public $vUnCom1 = null;
   public $qCom39 = null;
   public $qCom38 = null;
   public $qCom37 = null;
   public $qCom36 = null;
   public $qCom35 = null;
   public $qCom34 = null;
   public $qCom33 = null;
   public $qCom32 = null;
   public $qCom31 = null;
   public $qCom30 = null;
   public $qCom29 = null;
   public $qCom28 = null;
   public $qCom27 = null;
   public $qCom26 = null;
   public $qCom25 = null;
   public $qCom24 = null;
   public $qCom23 = null;
   public $qCom22 = null;
   public $qCom21 = null;
   public $qCom20 = null;
   public $qCom19 = null;
   public $qCom18 = null;
   public $qCom17 = null;
   public $qCom16 = null;
   public $qCom15 = null;
   public $qCom14 = null;
   public $qCom13 = null;
   public $qCom12 = null;
   public $qCom11 = null;
   public $qCom10 = null;
   public $qCom9 = null;
   public $qCom8 = null;
   public $qCom7 = null;
   public $qCom6 = null;
   public $qCom5 = null;
   public $qCom4 = null;
   public $qCom3 = null;
   public $qCom2 = null;
   public $qCom1 = null;
   public $uCom39 = null;
   public $uCom38 = null;
   public $uCom37 = null;
   public $uCom36 = null;
   public $uCom35 = null;
   public $uCom34 = null;
   public $uCom33 = null;
   public $uCom32 = null;
   public $uCom31 = null;
   public $uCom30 = null;
   public $uCom29 = null;
   public $uCom28 = null;
   public $uCom27 = null;
   public $uCom26 = null;
   public $uCom25 = null;
   public $uCom24 = null;
   public $uCom23 = null;
   public $uCom22 = null;
   public $uCom21 = null;
   public $uCom20 = null;
   public $uCom19 = null;
   public $uCom18 = null;
   public $uCom17 = null;
   public $uCom16 = null;
   public $uCom15 = null;
   public $uCom14 = null;
   public $uCom13 = null;
   public $uCom12 = null;
   public $uCom11 = null;
   public $uCom10 = null;
   public $uCom9 = null;
   public $uCom8 = null;
   public $uCom7 = null;
   public $uCom6 = null;
   public $uCom5 = null;
   public $uCom4 = null;
   public $uCom3 = null;
   public $uCom2 = null;
   public $uCom1 = null;
   public $CFOP39 = null;
   public $CFOP38 = null;
   public $CFOP37 = null;
   public $CFOP36 = null;
   public $CFOP35 = null;
   public $CFOP34 = null;
   public $CFOP33 = null;
   public $CFOP32 = null;
   public $CFOP31 = null;
   public $CFOP30 = null;
   public $CFOP29 = null;
   public $CFOP28 = null;
   public $CFOP27 = null;
   public $CFOP26 = null;
   public $CFOP25 = null;
   public $CFOP24 = null;
   public $CFOP23 = null;
   public $CFOP22 = null;
   public $CFOP21 = null;
   public $CFOP20 = null;
   public $CFOP19 = null;
   public $CFOP18 = null;
   public $CFOP17 = null;
   public $CFOP16 = null;
   public $CFOP15 = null;
   public $CFOP14 = null;
   public $CFOP13 = null;
   public $CFOP12 = null;
   public $CFOP11 = null;
   public $CFOP10 = null;
   public $CFOP9 = null;
   public $CFOP8 = null;
   public $CFOP7 = null;
   public $CFOP6 = null;
   public $CFOP5 = null;
   public $CFOP4 = null;
   public $CFOP3 = null;
   public $CFOP2 = null;
   public $CFOP1 = null;
   public $CST39 = null;
   public $CST38 = null;
   public $CST37 = null;
   public $CST36 = null;
   public $CST35 = null;
   public $CST34 = null;
   public $CST33 = null;
   public $CST32 = null;
   public $CST31 = null;
   public $CST30 = null;
   public $CST29 = null;
   public $CST28 = null;
   public $CST27 = null;
   public $CST26 = null;
   public $CST25 = null;
   public $CST24 = null;
   public $CST23 = null;
   public $CST22 = null;
   public $CST21 = null;
   public $CST20 = null;
   public $CST19 = null;
   public $CST18 = null;
   public $CST17 = null;
   public $CST16 = null;
   public $CST15 = null;
   public $CST14 = null;
   public $CST13 = null;
   public $CST12 = null;
   public $CST11 = null;
   public $CST10 = null;
   public $CST9 = null;
   public $CST8 = null;
   public $CST7 = null;
   public $CST6 = null;
   public $CST5 = null;
   public $CST4 = null;
   public $CST3 = null;
   public $CST2 = null;
   public $CST1 = null;
   public $NCM39 = null;
   public $NCM38 = null;
   public $NCM37 = null;
   public $NCM36 = null;
   public $NCM35 = null;
   public $NCM34 = null;
   public $NCM33 = null;
   public $NCM32 = null;
   public $NCM31 = null;
   public $NCM30 = null;
   public $NCM29 = null;
   public $NCM28 = null;
   public $NCM27 = null;
   public $NCM26 = null;
   public $NCM25 = null;
   public $NCM24 = null;
   public $NCM23 = null;
   public $NCM22 = null;
   public $NCM21 = null;
   public $NCM20 = null;
   public $NCM19 = null;
   public $NCM18 = null;
   public $NCM17 = null;
   public $NCM16 = null;
   public $NCM15 = null;
   public $NCM14 = null;
   public $NCM13 = null;
   public $NCM12 = null;
   public $NCM11 = null;
   public $NCM10 = null;
   public $NCM9 = null;
   public $NCM8 = null;
   public $NCM7 = null;
   public $NCM6 = null;
   public $NCM5 = null;
   public $NCM4 = null;
   public $NCM3 = null;
   public $NCM2 = null;
   public $NCM1 = null;
   public $xProd39 = null;
   public $xProd38 = null;
   public $xProd37 = null;
   public $xProd36 = null;
   public $xProd35 = null;
   public $xProd34 = null;
   public $xProd33 = null;
   public $xProd32 = null;
   public $xProd31 = null;
   public $xProd30 = null;
   public $xProd29 = null;
   public $xProd28 = null;
   public $xProd27 = null;
   public $xProd26 = null;
   public $xProd25 = null;
   public $xProd24 = null;
   public $xProd23 = null;
   public $xProd22 = null;
   public $xProd21 = null;
   public $xProd20 = null;
   public $xProd19 = null;
   public $xProd18 = null;
   public $xProd17 = null;
   public $xProd16 = null;
   public $xProd15 = null;
   public $xProd14 = null;
   public $xProd13 = null;
   public $xProd12 = null;
   public $xProd11 = null;
   public $xProd10 = null;
   public $xProd9 = null;
   public $xProd8 = null;
   public $xProd7 = null;
   public $xProd6 = null;
   public $xProd5 = null;
   public $xProd4 = null;
   public $xProd3 = null;
   public $informacoes_complementares_2 = null;
   public $informacoes_complementares_1 = null;
   public $issqn_valor = null;
   public $issqn_base_calculo = null;
   public $issqn_valor_total_servicos = null;
   public $issqn_inscricao_municipal = null;
   public $peso_liquido = null;
   public $peso_bruto = null;
   public $numeracao = null;
   public $marca = null;
   public $especie = null;
   public $quantidade = null;
   public $transportadora_inscricao_estadual = null;
   public $transportadora_endereco_uf = null;
   public $transportadora_fone = null;
   public $transportadora_municipio = null;
   public $transportadora_cep = null;
   public $transportadora_bairro = null;
   public $transportadora_endereco = null;
   public $transportadora_cnpj = null;
   public $transportadora_uf = null;
   public $transportadora_placa = null;
   public $transportadora_antt = null;
   public $transportadora_frete = null;
   public $transportadora_razao_social = null;
   public $cProd1 = null;
   public $cProd2 = null;
   public $cProd3 = null;
   public $cProd4 = null;
   public $cProd5 = null;
   public $cProd6 = null;
   public $cProd7 = null;
   public $cProd8 = null;
   public $cProd9 = null;
   public $data_entrada = null;
   public $valor_total_nota = null;
   public $valor_ipi = null;
   public $outras_despesas = null;
   public $desconto = null;
   public $valor_seguro = null;
   public $valor_frete = null;
   public $valor_total_produtos = null;
   public $valor_icms_substituicao = null;
   public $base_calculo_icms_substituicao = null;
   public $valor_icms = null;
   public $base_calculo_icms = null;
   public $fatura = null;
   public $remetente_incricao_estadual = null;
   public $remetente_uf = null;
   public $remetente_fone = null;
   public $remetente_municipio = null;
   public $remetente_cep = null;
   public $remetente_bairro = null;
   public $remetente_endereco = null;
   public $hora_saida = null;
   public $data_emissao = null;
   public $remetente_cnpj = null;
   public $remetente_razao_social = null;
   public $Panel64 = null;
   public $Label137 = null;
   public $Panel65 = null;
   public $Label139 = null;
   public $Panel66 = null;
   public $Label141 = null;
   public $Panel67 = null;
   public $Label143 = null;
   public $Panel68 = null;
   public $Label145 = null;
   public $Panel69 = null;
   public $Label147 = null;
   public $Panel70 = null;
   public $Label149 = null;
   public $Panel71 = null;
   public $Label151 = null;
   public $Panel72 = null;
   public $Label153 = null;
   public $Panel73 = null;
   public $Label155 = null;
   public $Panel74 = null;
   public $Label157 = null;
   public $Panel75 = null;
   public $Label159 = null;
   public $Panel63 = null;
   public $xProd2 = null;
   public $xProd1 = null;
   public $Label135 = null;
   public $Panel61 = null;
   public $cProd39 = null;
   public $cProd38 = null;
   public $cProd37 = null;
   public $cProd36 = null;
   public $cProd35 = null;
   public $cProd34 = null;
   public $cProd33 = null;
   public $cProd32 = null;
   public $cProd31 = null;
   public $cProd30 = null;
   public $cProd29 = null;
   public $cProd28 = null;
   public $cProd27 = null;
   public $cProd26 = null;
   public $cProd25 = null;
   public $cProd24 = null;
   public $cProd23 = null;
   public $cProd22 = null;
   public $cProd21 = null;
   public $cProd20 = null;
   public $cProd19 = null;
   public $cProd18 = null;
   public $cProd17 = null;
   public $cProd16 = null;
   public $cProd15 = null;
   public $cProd14 = null;
   public $cProd13 = null;
   public $cProd12 = null;
   public $cProd11 = null;
   public $cProd10 = null;
   public $Label131 = null;
   public $Label130 = null;
   public $Panel55 = null;
   public $Label117 = null;
   public $Panel54 = null;
   public $Label115 = null;
   public $Panel53 = null;
   public $Label113 = null;
   public $Panel49 = null;
   public $Label111 = null;
   public $Panel41 = null;
   public $Label89 = null;
   public $Panel40 = null;
   public $Label87 = null;
   public $Panel48 = null;
   public $Label103 = null;
   public $Panel47 = null;
   public $Label101 = null;
   public $Panel46 = null;
   public $Label99 = null;
   public $Panel45 = null;
   public $Label97 = null;
   public $Panel52 = null;
   public $Label105 = null;
   public $Panel51 = null;
   public $Label109 = null;
   public $Panel50 = null;
   public $Label107 = null;
   public $Panel44 = null;
   public $Label95 = null;
   public $Panel43 = null;
   public $Label93 = null;
   public $Panel42 = null;
   public $Label91 = null;
   public $Panel39 = null;
   public $Label85 = null;
   public $Panel38 = null;
   public $Label83 = null;
   public $Panel37 = null;
   public $Label81 = null;
   public $Label80 = null;
   public $Panel36 = null;
   public $Label78 = null;
   public $Panel35 = null;
   public $Label76 = null;
   public $Panel34 = null;
   public $Label74 = null;
   public $Panel33 = null;
   public $Label72 = null;
   public $Panel32 = null;
   public $Label70 = null;
   public $Panel31 = null;
   public $Label68 = null;
   public $Panel30 = null;
   public $Label66 = null;
   public $Panel29 = null;
   public $Label64 = null;
   public $Panel28 = null;
   public $Label62 = null;
   public $Panel27 = null;
   public $Label60 = null;
   public $Label59 = null;
   public $Panel26 = null;
   public $Label55 = null;
   public $Label57 = null;
   public $Panel25 = null;
   public $Panel24 = null;
   public $Label53 = null;
   public $Panel23 = null;
   public $Label51 = null;
   public $Panel22 = null;
   public $Label49 = null;
   public $Panel21 = null;
   public $Label47 = null;
   public $Panel20 = null;
   public $Label45 = null;
   public $Panel19 = null;
   public $Label43 = null;
   public $Panel18 = null;
   public $Label41 = null;
   public $Panel17 = null;
   public $Label39 = null;
   public $Panel16 = null;
   public $Label37 = null;
   public $Panel15 = null;
   public $Label35 = null;
   public $Panel14 = null;
   public $Label33 = null;
   public $Panel13 = null;
   public $Label31 = null;
   public $Label30 = null;
   public $Panel12 = null;
   public $chave_acesso = null;
   public $Label28 = null;
   public $Panel11 = null;
   public $cnpj_emitente = null;
   public $Label26 = null;
   public $Panel10 = null;
   public $inscricao_estadual_tributario = null;
   public $Label24 = null;
   public $Panel9 = null;
   public $inscricao_estadual = null;
   public $Label22 = null;
   public $Panel8 = null;
   public $natureza_operacao = null;
   public $Label12 = null;
   public $Label20 = null;
   public $tipo_nota = null;
   public $Label19 = null;
   public $Label18 = null;
   public $Label17 = null;
   public $nro_nota_2 = null;
   public $Label15 = null;
   public $Label14 = null;
   public $Panel6 = null;
   public $Label13 = null;
   public $Panel5 = null;
   public $emitente = null;
   public $Label10 = null;
   public $Label9 = null;
   public $Panel4 = null;
   public $recebemos = null;
   public $Panel3 = null;
   public $Label8 = null;
   public $nro_nota_1 = null;
   public $Label5 = null;
   public $Panel1 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Panel2 = null;
   public $Label2 = null;
   public $Label1 = null;
   public $Panel60 = null;
   public $Label128 = null;
   public $Panel59 = null;
   public $Label126 = null;
   public $Panel62 = null;
   public $Label132 = null;
   public $Panel58 = null;
   public $Label124 = null;
   public $Label122 = null;
   public $Panel57 = null;
   public $Panel56 = null;
   public $Label120 = null;
   public $Label119 = null;

   function nfimportaxmlgerarCreate($sender, $params)
   {
      error_reporting(0);
      ini_set('display_errors', '1');

      require_once("includes/valida_sessao.inc.php");

      //*************************************
      //*** INICIO - Validacao de Leitura ***
      //*************************************

      $tag_permissao = trim($this->Name);
      $tag_permissao = str_replace('alt', '', $tag_permissao);
      $tag_permissao = str_replace('inc', '', $tag_permissao);
	  $tag_permissao = $_SESSION['login_permissao_' . trim($tag_permissao)];
	  
      if($tag_permissao == "2")
      {
        if( isset($this->bt_incluir) )
        {
           $this->bt_incluir->Visible = false;
        }
        if( isset($this->bt_alterar) )
        {
           $this->bt_alterar->Visible = false;
        }
        if( isset($this->bt_excluir) )
        {
           $this->bt_excluir->Visible = false;
        }
      }
      elseif($tag_permissao == "0")
      {
 	     redirect('frame_corpo.php');
	  }

      //************************************
      //*** FINAL - Validacao de Leitura ***
      //************************************

      require_once("includes/rotinas_gerais.inc.php");
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      //*** Ler o XML enviado para o Governo ***
      $danfe = simplexml_load_file('nfe_entrada/' . $_SESSION['xml_entrada']);

      //*** Emitente ***
      $msg_xml = trim($danfe->NFe->infNFe->emit->xNome) . '<BR><BR>';
      $msg_xml .= trim($danfe->NFe->infNFe->emit->enderEmit->xLgr) . ', ' . trim($danfe->NFe->infNFe->emit->enderEmit->nro) . '<BR>';
      $msg_xml .= trim($danfe->NFe->infNFe->emit->enderEmit->xBairro) . ' - ' . trim($danfe->NFe->infNFe->emit->enderEmit->xMun);
      $msg_xml .= ' - ' . trim($danfe->NFe->infNFe->emit->enderEmit->UF) . '<BR>';
      $msg_xml .= ' Fone: ' . trim($danfe->NFe->infNFe->emit->enderEmit->fone) . '<BR>';
      $msg_xml .= ' CEP: ' . trim($danfe->NFe->infNFe->emit->enderEmit->CEP) . '<BR>';
      $this->emitente->Caption = $msg_xml;

      //*** Recebemos ***
      $msg_xml = 'RECEBEMOS DE (' . trim($danfe->NFe->infNFe->emit->xNome) . ') OS PRODUTOS CONSTANTES DA NOTA FISCAL INDICADA AO LADO';
      $this->recebemos->Caption = $msg_xml;

      //*** Tipo de Nota ***
      if(trim($danfe->NFe->infNFe->ide->tpNF) == '0')
      {
         $msg_xml = '<CENTER><B>2</B></CENTER>';
      }
      else
      {
         $msg_xml = '<CENTER><B>' . trim($danfe->NFe->infNFe->ide->tpNF) . '</B></CENTER>';
      }
      $this->tipo_nota->Caption = $msg_xml;

      //*** Nro de Nota Fiscal ***
      $msg_xml = completa_zeros(trim($danfe->NFe->infNFe->ide->nNF), 9);
      $msg_xml = substr($msg_xml, 0, 3) . '.' . substr($msg_xml, 3, 3) . '.' . substr($msg_xml, 6, 3);
      $msg_xml = '<B>Nº ' . $msg_xml . '</B>';
      $this->nro_nota_1->Caption = $msg_xml;
      $this->nro_nota_2->Caption = $msg_xml;

      //*** Natureza de Operacao ***
      $msg_xml = trim($danfe->NFe->infNFe->ide->natOp);
      $this->natureza_operacao->Caption = $msg_xml;

      //*** Inscricao Estadual ***
      $msg_xml = trim($danfe->NFe->infNFe->emit->IE);
      $this->inscricao_estadual->Caption = $msg_xml;

      //*** Inscricao Estadual Tributario ***
      $msg_xml = '';
      $this->inscricao_estadual_tributario->Caption = $msg_xml;

      //*** CNPJ ***
      $msg_xml = trim($danfe->NFe->infNFe->emit->CNPJ);
      $this->cnpj_emitente->Caption = $msg_xml;

      //*** Chave de Acesso ***
      $this->chave_acesso->Caption = trim($danfe->protNFe->infProt->chNFe);

      //*** Formata a Chave de Acesso ***
      $chave_acesso_formatada = trim($this->chave_acesso->Caption);
      $chave_acesso_formatada = substr($chave_acesso_formatada, 0, 2) . '.' . substr($chave_acesso_formatada, 2, 4) . '.' . substr($chave_acesso_formatada, 6, 2) . '.' . substr($chave_acesso_formatada, 8, 3) . '.' . substr($chave_acesso_formatada, 11, 3) . '/' . substr($chave_acesso_formatada, 14, 4) . '-' . substr($chave_acesso_formatada, 18, 2) . '-' . substr($chave_acesso_formatada, 20, 2) . '-' . substr($chave_acesso_formatada, 22, 3) . '-' . substr($chave_acesso_formatada, 25, 3) . '.' . substr($chave_acesso_formatada, 28, 3) . '.' . substr($chave_acesso_formatada, 31, 3) . '-' . substr($chave_acesso_formatada, 34, 3) . '.' . substr($chave_acesso_formatada, 37, 3) . '.' . substr($chave_acesso_formatada, 40, 3) . '-' . substr($chave_acesso_formatada, 43, 1);
      $this->chave_acesso->Caption = $chave_acesso_formatada;

      //*** Remetente Razao Social ***
      $msg_xml = trim($danfe->NFe->infNFe->dest->xNome);
      $this->remetente_razao_social->Caption = $msg_xml;

      //*** Remetente Razao Social ***
      $msg_xml = trim($danfe->NFe->infNFe->dest->xNome);
      $this->remetente_razao_social->Caption = $msg_xml;

      //*** Remetente CNPJ ***
      $msg_xml = trim($danfe->NFe->infNFe->dest->CNPJ);
      $this->remetente_cnpj->Caption = $msg_xml;

      //*** Remetente Endereco ***
      $msg_xml = trim($danfe->NFe->infNFe->dest->enderDest->xLgr) . ', ' . trim($danfe->NFe->infNFe->dest->enderDest->nro);
      $this->remetente_endereco->Caption = $msg_xml;

      //*** Remetente Bairro ***
      $msg_xml = trim($danfe->NFe->infNFe->dest->enderDest->xBairro);
      $this->remetente_bairro->Caption = $msg_xml;

      //*** Remetente CEP ***
      $msg_xml = trim($danfe->NFe->infNFe->dest->enderDest->CEP);
      $this->remetente_cep->Caption = $msg_xml;

      //*** Remetente Municipio ***
      $msg_xml = trim($danfe->NFe->infNFe->dest->enderDest->xMun);
      $this->remetente_municipio->Caption = $msg_xml;

      //*** Remetente Fone ***
      $msg_xml = trim($danfe->NFe->infNFe->dest->enderDest->fone);
      $this->remetente_fone->Caption = $msg_xml;

      //*** Remetente UF ***
      $msg_xml = trim($danfe->NFe->infNFe->dest->enderDest->UF);
      $this->remetente_uf->Caption = $msg_xml;

      //*** Remetente Incricao Estadual ***
      $msg_xml = trim($danfe->NFe->infNFe->dest->IE);
      $this->remetente_incricao_estadual->Caption = $msg_xml;

      //*** Data de Emissao ***

      $msg_xml = inverte_data_amd_to_dma(trim($danfe->NFe->infNFe->ide->dEmi));
      $this->data_emissao->Caption = $msg_xml;
      $this->data_entrada->Caption = '';
      $this->hora_saida->Caption = '';

      //*** Fatura ***
      $msg_xml = '';
      foreach($danfe->NFe->infNFe->cobr->dup  as $duplicata)
      {
         $msg_xml .= 'Nro.: ' . trim($duplicata->nDup) . ' - Dt.Vencto: ' . inverte_data_amd_to_dma(trim($duplicata->dVenc)) . ' - R$ ' . trim($duplicata->vDup) . '  ||  ';
      }
      $this->fatura->Caption = $msg_xml;

      //*** Base de Calculo do ICMS ***
      $msg_xml = 'R$ ' . trim($danfe->NFe->infNFe->total->ICMSTot->vBC);
      $this->base_calculo_icms->Caption = $msg_xml;

      //*** Valor do ICMS ***
      $msg_xml = 'R$ ' . trim($danfe->NFe->infNFe->total->ICMSTot->vICMS);
      $this->valor_icms->Caption = $msg_xml;

      //*** Base de Calculo do ICMS Substituicao ***
      $msg_xml = 'R$ ' . trim($danfe->NFe->infNFe->total->ICMSTot->vBCST);
      $this->base_calculo_icms_substituicao->Caption = $msg_xml;

      //*** Valor do ICMS Substituicao ***
      $msg_xml = 'R$ ' . trim($danfe->NFe->infNFe->total->ICMSTot->vST);
      $this->valor_icms_substituicao->Caption = $msg_xml;

      //*** Valor Total dos Produtos ***
      $msg_xml = 'R$ ' . trim($danfe->NFe->infNFe->total->ICMSTot->vProd);
      $this->valor_total_produtos->Caption = $msg_xml;

      //*** Valor do Frete ***
      $msg_xml = 'R$ ' . trim($danfe->NFe->infNFe->total->ICMSTot->vFrete);
      $this->valor_frete->Caption = $msg_xml;

      //*** Valor do Seguro ***
      $msg_xml = 'R$ ' . trim($danfe->NFe->infNFe->total->ICMSTot->vSeg);
      $this->valor_seguro->Caption = $msg_xml;

      //*** Valor do Desconto ***
      $msg_xml = 'R$ ' . trim($danfe->NFe->infNFe->total->ICMSTot->vDesc);
      $this->desconto->Caption = $msg_xml;

      //*** Valor de Outras Despesas ***
      $msg_xml = 'R$ ' . trim($danfe->NFe->infNFe->total->ICMSTot->vOutro);
      $this->outras_despesas->Caption = $msg_xml;

      //*** Valor do IPI***
      $msg_xml = 'R$ ' . trim($danfe->NFe->infNFe->total->ICMSTot->vIPI);
      $this->valor_ipi->Caption = $msg_xml;

      //*** Valor Total da Nota ***
      $msg_xml = 'R$ ' . trim($danfe->NFe->infNFe->total->ICMSTot->vNF);
      $this->valor_total_nota->Caption = $msg_xml;

      //*** Transportadora Razao Social ***
      $msg_xml = trim($danfe->NFe->infNFe->transp->transporta->xNome);
      $this->transportadora_razao_social->Caption = $msg_xml;

      //*** Transportadora Frete ***
      if(trim($danfe->NFe->infNFe->transp->modFrete) == '0')
      {
         $msg_xml = 'EMITENTE';
      }
      else
      {
         $msg_xml = 'DESTINATARIO';
      }

      $this->transportadora_frete->Caption = $msg_xml;

      //*** Codigo ANTT ***
      $this->transportadora_antt->Caption = '';

      //*** Placa do Veiculo ***
      $this->transportadora_placa->Caption = '';

      //*** UF do Veiculo ***
      $this->transportadora_uf->Caption = '';

      //*** Transportadora CNPJ ***
      $msg_xml = trim($danfe->NFe->infNFe->transp->transporta->CNPJ);
      $this->transportadora_cnpj->Caption = $msg_xml;

      //*** Transportadora Endereco ***
      $msg_xml = trim($danfe->NFe->infNFe->transp->transporta->xEnder);
      $this->transportadora_endereco->Caption = $msg_xml;

      //*** Transportadora Bairro ***
      $this->transportadora_bairro->Caption = '';

      //*** Transportadora CEP ***
      $this->transportadora_cep->Caption = '';

      //*** Transportadora Municipio ***
      $msg_xml = trim($danfe->NFe->infNFe->transp->transporta->xMun);
      $this->transportadora_municipio->Caption = $msg_xml;

      //*** Transportadora Fone ***
      $this->transportadora_fone->Caption = '';

      //*** Transportadora UF ***
      $msg_xml = trim($danfe->NFe->infNFe->transp->transporta->UF);
      $this->transportadora_endereco_uf->Caption = $msg_xml;

      //*** Transportadora IE ***
      $msg_xml = trim($danfe->NFe->infNFe->transp->transporta->IE);
      $this->transportadora_inscricao_estadual->Caption = $msg_xml;

      //*** Quantidade ***
      $msg_xml = trim($danfe->NFe->infNFe->transp->vol->qVol);
      $this->quantidade->Caption = $msg_xml;

      //*** Especie ***
      $msg_xml = trim($danfe->NFe->infNFe->transp->vol->esp);
      $this->especie->Caption = $msg_xml;

      //*** Marca ***
      $msg_xml = trim($danfe->NFe->infNFe->transp->vol->marca);
      $this->marca->Caption = $msg_xml;

      //*** Numeracao ***
      $this->numeracao->Caption = '';

      //*** Peso Bruto ***
      $msg_xml = trim($danfe->NFe->infNFe->transp->vol->pesoB);
      $this->peso_bruto->Caption = $msg_xml;

      //*** Peso Liquido ***
      $msg_xml = trim($danfe->NFe->infNFe->transp->vol->pesoL);
      $this->peso_liquido->Caption = $msg_xml;

      //*** ISSQN ***
      $this->issqn_valor->Caption = '';
      $this->issqn_base_calculo->Caption = '';
      $this->issqn_valor_total_servicos->Caption = '';
      $this->issqn_inscricao_municipal->Caption = '';

      //*** Informacoes Complementares ***
      $msg_xml = trim($danfe->NFe->infNFe->infAdic->infAdFisco);
      $this->informacoes_complementares_1->Caption = $msg_xml;
      $this->informacoes_complementares_2->Caption = '';

      //*** Descriminacao dos Produtos ***
      for($i = 0; $i < 39; $i++)
      {

         switch($i)
         {
            case 0:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd1->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd1->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM1->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP1->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom1->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom1->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom1->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd1->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI1->Caption = '0.00';
                  $this->pIPI1->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST1->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC1->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS1->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS1->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST1->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC1->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS1->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS1->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST1->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC1->Caption = '0.00';
                     $this->vICMS1->Caption = '0.00';
                     $this->pICMS1->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd1->Caption = '';
                  $this->xProd1->Caption = '';
                  $this->NCM1->Caption = '';
                  $this->CFOP1->Caption = '';
                  $this->uCom1->Caption = '';
                  $this->qCom1->Caption = '';
                  $this->vUnCom1->Caption = '';
                  $this->vProd1->Caption = '';
                  $this->vIPI1->Caption = '';
                  $this->pIPI1->Caption = '';
                  $this->CST1->Caption = '';
                  $this->vBC1->Caption = '';
                  $this->vICMS1->Caption = '';
                  $this->pICMS1->Caption = '';
               }
               break;

            case 1:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd2->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd2->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM2->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP2->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom2->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom2->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom2->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd2->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI2->Caption = '0.00';
                  $this->pIPI2->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST2->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC2->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS2->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS2->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST2->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC2->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS2->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS2->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST2->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC2->Caption = '0.00';
                     $this->vICMS2->Caption = '0.00';
                     $this->pICMS2->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd2->Caption = '';
                  $this->xProd2->Caption = '';
                  $this->NCM2->Caption = '';
                  $this->CFOP2->Caption = '';
                  $this->uCom2->Caption = '';
                  $this->qCom2->Caption = '';
                  $this->vUnCom2->Caption = '';
                  $this->vProd2->Caption = '';
                  $this->vIPI2->Caption = '';
                  $this->pIPI2->Caption = '';
                  $this->CST2->Caption = '';
                  $this->vBC2->Caption = '';
                  $this->vICMS2->Caption = '';
                  $this->pICMS2->Caption = '';
               }
               break;

            case 2:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd3->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd3->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM3->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP3->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom3->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom3->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom3->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd3->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI3->Caption = '0.00';
                  $this->pIPI3->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST3->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC3->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS3->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS3->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST3->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC3->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS3->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS3->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST3->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC3->Caption = '0.00';
                     $this->vICMS3->Caption = '0.00';
                     $this->pICMS3->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd3->Caption = '';
                  $this->xProd3->Caption = '';
                  $this->NCM3->Caption = '';
                  $this->CFOP3->Caption = '';
                  $this->uCom3->Caption = '';
                  $this->qCom3->Caption = '';
                  $this->vUnCom3->Caption = '';
                  $this->vProd3->Caption = '';
                  $this->vIPI3->Caption = '';
                  $this->pIPI3->Caption = '';
                  $this->CST3->Caption = '';
                  $this->vBC3->Caption = '';
                  $this->vICMS3->Caption = '';
                  $this->pICMS3->Caption = '';
               }
               break;

            case 3:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd4->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd4->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM4->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP4->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom4->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom4->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom4->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd4->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI4->Caption = '0.00';
                  $this->pIPI4->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST4->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC4->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS4->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS4->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST4->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC4->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS4->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS4->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST4->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC4->Caption = '0.00';
                     $this->vICMS4->Caption = '0.00';
                     $this->pICMS4->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd4->Caption = '';
                  $this->xProd4->Caption = '';
                  $this->NCM4->Caption = '';
                  $this->CFOP4->Caption = '';
                  $this->uCom4->Caption = '';
                  $this->qCom4->Caption = '';
                  $this->vUnCom4->Caption = '';
                  $this->vProd4->Caption = '';
                  $this->vIPI4->Caption = '';
                  $this->pIPI4->Caption = '';
                  $this->CST4->Caption = '';
                  $this->vBC4->Caption = '';
                  $this->vICMS4->Caption = '';
                  $this->pICMS4->Caption = '';
               }
               break;

            case 4:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd5->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd5->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM5->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP5->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom5->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom5->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom5->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd5->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI5->Caption = '0.00';
                  $this->pIPI5->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST5->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC5->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS5->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS5->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST5->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC5->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS5->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS5->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST5->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC5->Caption = '0.00';
                     $this->vICMS5->Caption = '0.00';
                     $this->pICMS5->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd5->Caption = '';
                  $this->xProd5->Caption = '';
                  $this->NCM5->Caption = '';
                  $this->CFOP5->Caption = '';
                  $this->uCom5->Caption = '';
                  $this->qCom5->Caption = '';
                  $this->vUnCom5->Caption = '';
                  $this->vProd5->Caption = '';
                  $this->vIPI5->Caption = '';
                  $this->pIPI5->Caption = '';
                  $this->CST5->Caption = '';
                  $this->vBC5->Caption = '';
                  $this->vICMS5->Caption = '';
                  $this->pICMS5->Caption = '';
               }
               break;

            case 5:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd6->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd6->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM6->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP6->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom6->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom6->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom6->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd6->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI6->Caption = '0.00';
                  $this->pIPI6->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST6->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC6->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS6->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS6->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST6->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC6->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS6->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS6->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST6->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC6->Caption = '0.00';
                     $this->vICMS6->Caption = '0.00';
                     $this->pICMS6->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd6->Caption = '';
                  $this->xProd6->Caption = '';
                  $this->NCM6->Caption = '';
                  $this->CFOP6->Caption = '';
                  $this->uCom6->Caption = '';
                  $this->qCom6->Caption = '';
                  $this->vUnCom6->Caption = '';
                  $this->vProd6->Caption = '';
                  $this->vIPI6->Caption = '';
                  $this->pIPI6->Caption = '';
                  $this->CST6->Caption = '';
                  $this->vBC6->Caption = '';
                  $this->vICMS6->Caption = '';
                  $this->pICMS6->Caption = '';
               }
               break;

            case 6:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd7->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd7->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM7->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP7->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom7->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom7->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom7->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd7->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI7->Caption = '0.00';
                  $this->pIPI7->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST7->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC7->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS7->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS7->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST7->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC7->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS7->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS7->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST7->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC7->Caption = '0.00';
                     $this->vICMS7->Caption = '0.00';
                     $this->pICMS7->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd7->Caption = '';
                  $this->xProd7->Caption = '';
                  $this->NCM7->Caption = '';
                  $this->CFOP7->Caption = '';
                  $this->uCom7->Caption = '';
                  $this->qCom7->Caption = '';
                  $this->vUnCom7->Caption = '';
                  $this->vProd7->Caption = '';
                  $this->vIPI7->Caption = '';
                  $this->pIPI7->Caption = '';
                  $this->CST7->Caption = '';
                  $this->vBC7->Caption = '';
                  $this->vICMS7->Caption = '';
                  $this->pICMS7->Caption = '';
               }
               break;

            case 7:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd8->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd8->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM8->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP8->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom8->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom8->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom8->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd8->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI8->Caption = '0.00';
                  $this->pIPI8->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST8->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC8->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS8->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS8->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST8->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC8->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS8->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS8->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST8->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC8->Caption = '0.00';
                     $this->vICMS8->Caption = '0.00';
                     $this->pICMS8->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd8->Caption = '';
                  $this->xProd8->Caption = '';
                  $this->NCM8->Caption = '';
                  $this->CFOP8->Caption = '';
                  $this->uCom8->Caption = '';
                  $this->qCom8->Caption = '';
                  $this->vUnCom8->Caption = '';
                  $this->vProd8->Caption = '';
                  $this->vIPI8->Caption = '';
                  $this->pIPI8->Caption = '';
                  $this->CST8->Caption = '';
                  $this->vBC8->Caption = '';
                  $this->vICMS8->Caption = '';
                  $this->pICMS8->Caption = '';
               }
               break;

            case 8:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd9->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd9->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM9->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP9->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom9->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom9->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom9->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd9->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI9->Caption = '0.00';
                  $this->pIPI9->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST9->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC9->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS9->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS9->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST9->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC9->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS9->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS9->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST9->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC9->Caption = '0.00';
                     $this->vICMS9->Caption = '0.00';
                     $this->pICMS9->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd9->Caption = '';
                  $this->xProd9->Caption = '';
                  $this->NCM9->Caption = '';
                  $this->CFOP9->Caption = '';
                  $this->uCom9->Caption = '';
                  $this->qCom9->Caption = '';
                  $this->vUnCom9->Caption = '';
                  $this->vProd9->Caption = '';
                  $this->vIPI9->Caption = '';
                  $this->pIPI9->Caption = '';
                  $this->CST9->Caption = '';
                  $this->vBC9->Caption = '';
                  $this->vICMS9->Caption = '';
                  $this->pICMS9->Caption = '';
               }
               break;

            case 9:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd10->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd10->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM10->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP10->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom10->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom10->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom10->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd10->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI10->Caption = '0.00';
                  $this->pIPI10->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST10->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC10->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS10->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS10->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST10->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC10->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS10->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS10->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST10->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC10->Caption = '0.00';
                     $this->vICMS10->Caption = '0.00';
                     $this->pICMS10->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd10->Caption = '';
                  $this->xProd10->Caption = '';
                  $this->NCM10->Caption = '';
                  $this->CFOP10->Caption = '';
                  $this->uCom10->Caption = '';
                  $this->qCom10->Caption = '';
                  $this->vUnCom10->Caption = '';
                  $this->vProd10->Caption = '';
                  $this->vIPI10->Caption = '';
                  $this->pIPI10->Caption = '';
                  $this->CST10->Caption = '';
                  $this->vBC10->Caption = '';
                  $this->vICMS10->Caption = '';
                  $this->pICMS10->Caption = '';
               }
               break;

            case 10:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd11->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd11->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM11->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP11->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom11->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom11->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom11->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd11->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI11->Caption = '0.00';
                  $this->pIPI11->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST11->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC11->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS11->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS11->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST11->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC11->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS11->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS11->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST11->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC11->Caption = '0.00';
                     $this->vICMS11->Caption = '0.00';
                     $this->pICMS11->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd11->Caption = '';
                  $this->xProd11->Caption = '';
                  $this->NCM11->Caption = '';
                  $this->CFOP11->Caption = '';
                  $this->uCom11->Caption = '';
                  $this->qCom11->Caption = '';
                  $this->vUnCom11->Caption = '';
                  $this->vProd11->Caption = '';
                  $this->vIPI11->Caption = '';
                  $this->pIPI11->Caption = '';
                  $this->CST11->Caption = '';
                  $this->vBC11->Caption = '';
                  $this->vICMS11->Caption = '';
                  $this->pICMS11->Caption = '';
               }
               break;

            case 11:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd12->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd12->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM12->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP12->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom12->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom12->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom12->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd12->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI12->Caption = '0.00';
                  $this->pIPI12->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST12->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC12->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS12->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS12->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST12->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC12->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS12->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS12->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST12->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC12->Caption = '0.00';
                     $this->vICMS12->Caption = '0.00';
                     $this->pICMS12->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd12->Caption = '';
                  $this->xProd12->Caption = '';
                  $this->NCM12->Caption = '';
                  $this->CFOP12->Caption = '';
                  $this->uCom12->Caption = '';
                  $this->qCom12->Caption = '';
                  $this->vUnCom12->Caption = '';
                  $this->vProd12->Caption = '';
                  $this->vIPI12->Caption = '';
                  $this->pIPI12->Caption = '';
                  $this->CST12->Caption = '';
                  $this->vBC12->Caption = '';
                  $this->vICMS12->Caption = '';
                  $this->pICMS12->Caption = '';
               }
               break;

            case 12:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd13->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd13->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM13->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP13->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom13->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom13->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom13->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd13->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI13->Caption = '0.00';
                  $this->pIPI13->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST13->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC13->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS13->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS13->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST13->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC13->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS13->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS13->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST13->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC13->Caption = '0.00';
                     $this->vICMS13->Caption = '0.00';
                     $this->pICMS13->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd13->Caption = '';
                  $this->xProd13->Caption = '';
                  $this->NCM13->Caption = '';
                  $this->CFOP13->Caption = '';
                  $this->uCom13->Caption = '';
                  $this->qCom13->Caption = '';
                  $this->vUnCom13->Caption = '';
                  $this->vProd13->Caption = '';
                  $this->vIPI13->Caption = '';
                  $this->pIPI13->Caption = '';
                  $this->CST13->Caption = '';
                  $this->vBC13->Caption = '';
                  $this->vICMS13->Caption = '';
                  $this->pICMS13->Caption = '';
               }
               break;

            case 13:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd14->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd14->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM14->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP14->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom14->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom14->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom14->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd14->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI14->Caption = '0.00';
                  $this->pIPI14->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST14->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC14->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS14->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS14->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST14->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC14->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS14->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS14->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST14->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC14->Caption = '0.00';
                     $this->vICMS14->Caption = '0.00';
                     $this->pICMS14->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd14->Caption = '';
                  $this->xProd14->Caption = '';
                  $this->NCM14->Caption = '';
                  $this->CFOP14->Caption = '';
                  $this->uCom14->Caption = '';
                  $this->qCom14->Caption = '';
                  $this->vUnCom14->Caption = '';
                  $this->vProd14->Caption = '';
                  $this->vIPI14->Caption = '';
                  $this->pIPI14->Caption = '';
                  $this->CST14->Caption = '';
                  $this->vBC14->Caption = '';
                  $this->vICMS14->Caption = '';
                  $this->pICMS14->Caption = '';
               }
               break;

            case 14:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd15->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd15->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM15->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP15->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom15->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom15->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom15->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd15->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI15->Caption = '0.00';
                  $this->pIPI15->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST15->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC15->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS15->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS15->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST15->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC15->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS15->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS15->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST15->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC15->Caption = '0.00';
                     $this->vICMS15->Caption = '0.00';
                     $this->pICMS15->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd15->Caption = '';
                  $this->xProd15->Caption = '';
                  $this->NCM15->Caption = '';
                  $this->CFOP15->Caption = '';
                  $this->uCom15->Caption = '';
                  $this->qCom15->Caption = '';
                  $this->vUnCom15->Caption = '';
                  $this->vProd15->Caption = '';
                  $this->vIPI15->Caption = '';
                  $this->pIPI15->Caption = '';
                  $this->CST15->Caption = '';
                  $this->vBC15->Caption = '';
                  $this->vICMS15->Caption = '';
                  $this->pICMS15->Caption = '';
               }
               break;

            case 15:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd16->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd16->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM16->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP16->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom16->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom16->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom16->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd16->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI16->Caption = '0.00';
                  $this->pIPI16->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST16->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC16->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS16->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS16->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST16->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC16->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS16->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS16->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST16->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC16->Caption = '0.00';
                     $this->vICMS16->Caption = '0.00';
                     $this->pICMS16->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd16->Caption = '';
                  $this->xProd16->Caption = '';
                  $this->NCM16->Caption = '';
                  $this->CFOP16->Caption = '';
                  $this->uCom16->Caption = '';
                  $this->qCom16->Caption = '';
                  $this->vUnCom16->Caption = '';
                  $this->vProd16->Caption = '';
                  $this->vIPI16->Caption = '';
                  $this->pIPI16->Caption = '';
                  $this->CST16->Caption = '';
                  $this->vBC16->Caption = '';
                  $this->vICMS16->Caption = '';
                  $this->pICMS16->Caption = '';
               }
               break;

            case 16:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd17->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd17->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM17->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP17->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom17->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom17->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom17->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd17->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI17->Caption = '0.00';
                  $this->pIPI17->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST17->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC17->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS17->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS17->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST17->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC17->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS17->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS17->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST17->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC17->Caption = '0.00';
                     $this->vICMS17->Caption = '0.00';
                     $this->pICMS17->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd17->Caption = '';
                  $this->xProd17->Caption = '';
                  $this->NCM17->Caption = '';
                  $this->CFOP17->Caption = '';
                  $this->uCom17->Caption = '';
                  $this->qCom17->Caption = '';
                  $this->vUnCom17->Caption = '';
                  $this->vProd17->Caption = '';
                  $this->vIPI17->Caption = '';
                  $this->pIPI17->Caption = '';
                  $this->CST17->Caption = '';
                  $this->vBC17->Caption = '';
                  $this->vICMS17->Caption = '';
                  $this->pICMS17->Caption = '';
               }
               break;

            case 17:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd18->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd18->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM18->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP18->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom18->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom18->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom18->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd18->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI18->Caption = '0.00';
                  $this->pIPI18->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST18->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC18->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS18->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS18->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST18->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC18->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS18->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS18->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST18->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC18->Caption = '0.00';
                     $this->vICMS18->Caption = '0.00';
                     $this->pICMS18->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd18->Caption = '';
                  $this->xProd18->Caption = '';
                  $this->NCM18->Caption = '';
                  $this->CFOP18->Caption = '';
                  $this->uCom18->Caption = '';
                  $this->qCom18->Caption = '';
                  $this->vUnCom18->Caption = '';
                  $this->vProd18->Caption = '';
                  $this->vIPI18->Caption = '';
                  $this->pIPI18->Caption = '';
                  $this->CST18->Caption = '';
                  $this->vBC18->Caption = '';
                  $this->vICMS18->Caption = '';
                  $this->pICMS18->Caption = '';
               }
               break;

            case 18:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd19->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd19->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM19->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP19->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom19->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom19->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom19->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd19->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI19->Caption = '0.00';
                  $this->pIPI19->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST19->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC19->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS19->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS19->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST19->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC19->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS19->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS19->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST19->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC19->Caption = '0.00';
                     $this->vICMS19->Caption = '0.00';
                     $this->pICMS19->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd19->Caption = '';
                  $this->xProd19->Caption = '';
                  $this->NCM19->Caption = '';
                  $this->CFOP19->Caption = '';
                  $this->uCom19->Caption = '';
                  $this->qCom19->Caption = '';
                  $this->vUnCom19->Caption = '';
                  $this->vProd19->Caption = '';
                  $this->vIPI19->Caption = '';
                  $this->pIPI19->Caption = '';
                  $this->CST19->Caption = '';
                  $this->vBC19->Caption = '';
                  $this->vICMS19->Caption = '';
                  $this->pICMS19->Caption = '';
               }
               break;

            case 19:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd20->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd20->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM20->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP20->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom20->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom20->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom20->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd20->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI20->Caption = '0.00';
                  $this->pIPI20->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST20->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC20->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS20->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS20->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST20->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC20->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS20->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS20->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST20->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC20->Caption = '0.00';
                     $this->vICMS20->Caption = '0.00';
                     $this->pICMS20->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd20->Caption = '';
                  $this->xProd20->Caption = '';
                  $this->NCM20->Caption = '';
                  $this->CFOP20->Caption = '';
                  $this->uCom20->Caption = '';
                  $this->qCom20->Caption = '';
                  $this->vUnCom20->Caption = '';
                  $this->vProd20->Caption = '';
                  $this->vIPI20->Caption = '';
                  $this->pIPI20->Caption = '';
                  $this->CST20->Caption = '';
                  $this->vBC20->Caption = '';
                  $this->vICMS20->Caption = '';
                  $this->pICMS20->Caption = '';
               }
               break;

            case 20:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd21->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd21->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM21->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP21->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom21->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom21->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom21->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd21->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI21->Caption = '0.00';
                  $this->pIPI21->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST21->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC21->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS21->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS21->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST21->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC21->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS21->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS21->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST21->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC21->Caption = '0.00';
                     $this->vICMS21->Caption = '0.00';
                     $this->pICMS21->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd21->Caption = '';
                  $this->xProd21->Caption = '';
                  $this->NCM21->Caption = '';
                  $this->CFOP21->Caption = '';
                  $this->uCom21->Caption = '';
                  $this->qCom21->Caption = '';
                  $this->vUnCom21->Caption = '';
                  $this->vProd21->Caption = '';
                  $this->vIPI21->Caption = '';
                  $this->pIPI21->Caption = '';
                  $this->CST21->Caption = '';
                  $this->vBC21->Caption = '';
                  $this->vICMS21->Caption = '';
                  $this->pICMS21->Caption = '';
               }
               break;

            case 21:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd22->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd22->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM22->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP22->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom22->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom22->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom22->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd22->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI22->Caption = '0.00';
                  $this->pIPI22->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST22->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC22->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS22->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS22->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST22->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC22->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS22->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS22->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST22->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC22->Caption = '0.00';
                     $this->vICMS22->Caption = '0.00';
                     $this->pICMS22->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd22->Caption = '';
                  $this->xProd22->Caption = '';
                  $this->NCM22->Caption = '';
                  $this->CFOP22->Caption = '';
                  $this->uCom22->Caption = '';
                  $this->qCom22->Caption = '';
                  $this->vUnCom22->Caption = '';
                  $this->vProd22->Caption = '';
                  $this->vIPI22->Caption = '';
                  $this->pIPI22->Caption = '';
                  $this->CST22->Caption = '';
                  $this->vBC22->Caption = '';
                  $this->vICMS22->Caption = '';
                  $this->pICMS22->Caption = '';
               }
               break;

            case 22:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd23->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd23->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM23->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP23->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom23->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom23->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom23->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd23->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI23->Caption = '0.00';
                  $this->pIPI23->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST23->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC23->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS23->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS23->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST23->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC23->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS23->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS23->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST23->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC23->Caption = '0.00';
                     $this->vICMS23->Caption = '0.00';
                     $this->pICMS23->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd23->Caption = '';
                  $this->xProd23->Caption = '';
                  $this->NCM23->Caption = '';
                  $this->CFOP23->Caption = '';
                  $this->uCom23->Caption = '';
                  $this->qCom23->Caption = '';
                  $this->vUnCom23->Caption = '';
                  $this->vProd23->Caption = '';
                  $this->vIPI23->Caption = '';
                  $this->pIPI23->Caption = '';
                  $this->CST23->Caption = '';
                  $this->vBC23->Caption = '';
                  $this->vICMS23->Caption = '';
                  $this->pICMS23->Caption = '';
               }
               break;

            case 23:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd24->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd24->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM24->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP24->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom24->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom24->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom24->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd24->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI24->Caption = '0.00';
                  $this->pIPI24->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST24->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC24->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS24->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS24->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST24->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC24->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS24->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS24->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST24->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC24->Caption = '0.00';
                     $this->vICMS24->Caption = '0.00';
                     $this->pICMS24->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd24->Caption = '';
                  $this->xProd24->Caption = '';
                  $this->NCM24->Caption = '';
                  $this->CFOP24->Caption = '';
                  $this->uCom24->Caption = '';
                  $this->qCom24->Caption = '';
                  $this->vUnCom24->Caption = '';
                  $this->vProd24->Caption = '';
                  $this->vIPI24->Caption = '';
                  $this->pIPI24->Caption = '';
                  $this->CST24->Caption = '';
                  $this->vBC24->Caption = '';
                  $this->vICMS24->Caption = '';
                  $this->pICMS24->Caption = '';
               }
               break;

            case 24:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd25->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd25->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM25->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP25->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom25->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom25->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom25->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd25->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI25->Caption = '0.00';
                  $this->pIPI25->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST25->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC25->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS25->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS25->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST25->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC25->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS25->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS25->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST25->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC25->Caption = '0.00';
                     $this->vICMS25->Caption = '0.00';
                     $this->pICMS25->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd25->Caption = '';
                  $this->xProd25->Caption = '';
                  $this->NCM25->Caption = '';
                  $this->CFOP25->Caption = '';
                  $this->uCom25->Caption = '';
                  $this->qCom25->Caption = '';
                  $this->vUnCom25->Caption = '';
                  $this->vProd25->Caption = '';
                  $this->vIPI25->Caption = '';
                  $this->pIPI25->Caption = '';
                  $this->CST25->Caption = '';
                  $this->vBC25->Caption = '';
                  $this->vICMS25->Caption = '';
                  $this->pICMS25->Caption = '';
               }
               break;

            case 25:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd26->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd26->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM26->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP26->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom26->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom26->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom26->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd26->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI26->Caption = '0.00';
                  $this->pIPI26->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST26->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC26->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS26->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS26->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST26->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC26->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS26->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS26->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST26->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC26->Caption = '0.00';
                     $this->vICMS26->Caption = '0.00';
                     $this->pICMS26->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd26->Caption = '';
                  $this->xProd26->Caption = '';
                  $this->NCM26->Caption = '';
                  $this->CFOP26->Caption = '';
                  $this->uCom26->Caption = '';
                  $this->qCom26->Caption = '';
                  $this->vUnCom26->Caption = '';
                  $this->vProd26->Caption = '';
                  $this->vIPI26->Caption = '';
                  $this->pIPI26->Caption = '';
                  $this->CST26->Caption = '';
                  $this->vBC26->Caption = '';
                  $this->vICMS26->Caption = '';
                  $this->pICMS26->Caption = '';
               }
               break;

            case 26:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd27->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd27->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM27->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP27->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom27->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom27->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom27->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd27->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI27->Caption = '0.00';
                  $this->pIPI27->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST27->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC27->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS27->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS27->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST27->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC27->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS27->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS27->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST27->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC27->Caption = '0.00';
                     $this->vICMS27->Caption = '0.00';
                     $this->pICMS27->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd27->Caption = '';
                  $this->xProd27->Caption = '';
                  $this->NCM27->Caption = '';
                  $this->CFOP27->Caption = '';
                  $this->uCom27->Caption = '';
                  $this->qCom27->Caption = '';
                  $this->vUnCom27->Caption = '';
                  $this->vProd27->Caption = '';
                  $this->vIPI27->Caption = '';
                  $this->pIPI27->Caption = '';
                  $this->CST27->Caption = '';
                  $this->vBC27->Caption = '';
                  $this->vICMS27->Caption = '';
                  $this->pICMS27->Caption = '';
               }
               break;

            case 27:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd28->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd28->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM28->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP28->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom28->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom28->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom28->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd28->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI28->Caption = '0.00';
                  $this->pIPI28->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST28->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC28->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS28->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS28->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST28->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC28->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS28->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS28->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST28->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC28->Caption = '0.00';
                     $this->vICMS28->Caption = '0.00';
                     $this->pICMS28->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd28->Caption = '';
                  $this->xProd28->Caption = '';
                  $this->NCM28->Caption = '';
                  $this->CFOP28->Caption = '';
                  $this->uCom28->Caption = '';
                  $this->qCom28->Caption = '';
                  $this->vUnCom28->Caption = '';
                  $this->vProd28->Caption = '';
                  $this->vIPI28->Caption = '';
                  $this->pIPI28->Caption = '';
                  $this->CST28->Caption = '';
                  $this->vBC28->Caption = '';
                  $this->vICMS28->Caption = '';
                  $this->pICMS28->Caption = '';
               }
               break;

            case 28:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd29->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd29->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM29->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP29->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom29->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom29->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom29->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd29->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI29->Caption = '0.00';
                  $this->pIPI29->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST29->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC29->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS29->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS29->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST29->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC29->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS29->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS29->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST29->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC29->Caption = '0.00';
                     $this->vICMS29->Caption = '0.00';
                     $this->pICMS29->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd29->Caption = '';
                  $this->xProd29->Caption = '';
                  $this->NCM29->Caption = '';
                  $this->CFOP29->Caption = '';
                  $this->uCom29->Caption = '';
                  $this->qCom29->Caption = '';
                  $this->vUnCom29->Caption = '';
                  $this->vProd29->Caption = '';
                  $this->vIPI29->Caption = '';
                  $this->pIPI29->Caption = '';
                  $this->CST29->Caption = '';
                  $this->vBC29->Caption = '';
                  $this->vICMS29->Caption = '';
                  $this->pICMS29->Caption = '';
               }
               break;

            case 29:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd30->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd30->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM30->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP30->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom30->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom30->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom30->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd30->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI30->Caption = '0.00';
                  $this->pIPI30->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST30->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC30->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS30->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS30->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST30->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC30->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS30->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS30->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST30->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC30->Caption = '0.00';
                     $this->vICMS30->Caption = '0.00';
                     $this->pICMS30->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd30->Caption = '';
                  $this->xProd30->Caption = '';
                  $this->NCM30->Caption = '';
                  $this->CFOP30->Caption = '';
                  $this->uCom30->Caption = '';
                  $this->qCom30->Caption = '';
                  $this->vUnCom30->Caption = '';
                  $this->vProd30->Caption = '';
                  $this->vIPI30->Caption = '';
                  $this->pIPI30->Caption = '';
                  $this->CST30->Caption = '';
                  $this->vBC30->Caption = '';
                  $this->vICMS30->Caption = '';
                  $this->pICMS30->Caption = '';
               }
               break;

            case 30:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd31->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd31->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM31->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP31->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom31->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom31->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom31->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd31->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI31->Caption = '0.00';
                  $this->pIPI31->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST31->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC31->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS31->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS31->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST31->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC31->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS31->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS31->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST31->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC31->Caption = '0.00';
                     $this->vICMS31->Caption = '0.00';
                     $this->pICMS31->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd31->Caption = '';
                  $this->xProd31->Caption = '';
                  $this->NCM31->Caption = '';
                  $this->CFOP31->Caption = '';
                  $this->uCom31->Caption = '';
                  $this->qCom31->Caption = '';
                  $this->vUnCom31->Caption = '';
                  $this->vProd31->Caption = '';
                  $this->vIPI31->Caption = '';
                  $this->pIPI31->Caption = '';
                  $this->CST31->Caption = '';
                  $this->vBC31->Caption = '';
                  $this->vICMS31->Caption = '';
                  $this->pICMS31->Caption = '';
               }
               break;

            case 31:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd32->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd32->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM32->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP32->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom32->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom32->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom32->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd32->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI32->Caption = '0.00';
                  $this->pIPI32->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST32->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC32->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS32->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS32->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST32->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC32->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS32->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS32->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST32->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC32->Caption = '0.00';
                     $this->vICMS32->Caption = '0.00';
                     $this->pICMS32->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd32->Caption = '';
                  $this->xProd32->Caption = '';
                  $this->NCM32->Caption = '';
                  $this->CFOP32->Caption = '';
                  $this->uCom32->Caption = '';
                  $this->qCom32->Caption = '';
                  $this->vUnCom32->Caption = '';
                  $this->vProd32->Caption = '';
                  $this->vIPI32->Caption = '';
                  $this->pIPI32->Caption = '';
                  $this->CST32->Caption = '';
                  $this->vBC32->Caption = '';
                  $this->vICMS32->Caption = '';
                  $this->pICMS32->Caption = '';
               }
               break;

            case 32:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd33->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd33->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM33->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP33->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom33->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom33->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom33->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd33->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI33->Caption = '0.00';
                  $this->pIPI33->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST33->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC33->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS33->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS33->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST33->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC33->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS33->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS33->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST33->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC33->Caption = '0.00';
                     $this->vICMS33->Caption = '0.00';
                     $this->pICMS33->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd33->Caption = '';
                  $this->xProd33->Caption = '';
                  $this->NCM33->Caption = '';
                  $this->CFOP33->Caption = '';
                  $this->uCom33->Caption = '';
                  $this->qCom33->Caption = '';
                  $this->vUnCom33->Caption = '';
                  $this->vProd33->Caption = '';
                  $this->vIPI33->Caption = '';
                  $this->pIPI33->Caption = '';
                  $this->CST33->Caption = '';
                  $this->vBC33->Caption = '';
                  $this->vICMS33->Caption = '';
                  $this->pICMS33->Caption = '';
               }
               break;

            case 33:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd34->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd34->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM34->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP34->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom34->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom34->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom34->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd34->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI34->Caption = '0.00';
                  $this->pIPI34->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST34->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC34->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS34->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS34->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST34->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC34->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS34->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS34->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST34->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC34->Caption = '0.00';
                     $this->vICMS34->Caption = '0.00';
                     $this->pICMS34->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd34->Caption = '';
                  $this->xProd34->Caption = '';
                  $this->NCM34->Caption = '';
                  $this->CFOP34->Caption = '';
                  $this->uCom34->Caption = '';
                  $this->qCom34->Caption = '';
                  $this->vUnCom34->Caption = '';
                  $this->vProd34->Caption = '';
                  $this->vIPI34->Caption = '';
                  $this->pIPI34->Caption = '';
                  $this->CST34->Caption = '';
                  $this->vBC34->Caption = '';
                  $this->vICMS34->Caption = '';
                  $this->pICMS34->Caption = '';
               }
               break;

            case 34:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd35->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd35->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM35->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP35->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom35->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom35->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom35->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd35->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI35->Caption = '0.00';
                  $this->pIPI35->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST35->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC35->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS35->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS35->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST35->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC35->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS35->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS35->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST35->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC35->Caption = '0.00';
                     $this->vICMS35->Caption = '0.00';
                     $this->pICMS35->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd35->Caption = '';
                  $this->xProd35->Caption = '';
                  $this->NCM35->Caption = '';
                  $this->CFOP35->Caption = '';
                  $this->uCom35->Caption = '';
                  $this->qCom35->Caption = '';
                  $this->vUnCom35->Caption = '';
                  $this->vProd35->Caption = '';
                  $this->vIPI35->Caption = '';
                  $this->pIPI35->Caption = '';
                  $this->CST35->Caption = '';
                  $this->vBC35->Caption = '';
                  $this->vICMS35->Caption = '';
                  $this->pICMS35->Caption = '';
               }
               break;

            case 35:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd36->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd36->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM36->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP36->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom36->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom36->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom36->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd36->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI36->Caption = '0.00';
                  $this->pIPI36->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST36->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC36->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS36->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS36->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST36->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC36->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS36->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS36->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST36->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC36->Caption = '0.00';
                     $this->vICMS36->Caption = '0.00';
                     $this->pICMS36->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd36->Caption = '';
                  $this->xProd36->Caption = '';
                  $this->NCM36->Caption = '';
                  $this->CFOP36->Caption = '';
                  $this->uCom36->Caption = '';
                  $this->qCom36->Caption = '';
                  $this->vUnCom36->Caption = '';
                  $this->vProd36->Caption = '';
                  $this->vIPI36->Caption = '';
                  $this->pIPI36->Caption = '';
                  $this->CST36->Caption = '';
                  $this->vBC36->Caption = '';
                  $this->vICMS36->Caption = '';
                  $this->pICMS36->Caption = '';
               }
               break;

            case 36:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd37->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd37->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM37->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP37->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom37->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom37->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom37->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd37->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI37->Caption = '0.00';
                  $this->pIPI37->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST37->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC37->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS37->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS37->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST37->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC37->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS37->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS37->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST37->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC37->Caption = '0.00';
                     $this->vICMS37->Caption = '0.00';
                     $this->pICMS37->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd37->Caption = '';
                  $this->xProd37->Caption = '';
                  $this->NCM37->Caption = '';
                  $this->CFOP37->Caption = '';
                  $this->uCom37->Caption = '';
                  $this->qCom37->Caption = '';
                  $this->vUnCom37->Caption = '';
                  $this->vProd37->Caption = '';
                  $this->vIPI37->Caption = '';
                  $this->pIPI37->Caption = '';
                  $this->CST37->Caption = '';
                  $this->vBC37->Caption = '';
                  $this->vICMS37->Caption = '';
                  $this->pICMS37->Caption = '';
               }
               break;

            case 37:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd38->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd38->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM38->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP38->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom38->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom38->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom38->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd38->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI38->Caption = '0.00';
                  $this->pIPI38->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST38->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC38->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS38->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS38->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST38->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC38->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS38->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS38->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST38->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC38->Caption = '0.00';
                     $this->vICMS38->Caption = '0.00';
                     $this->pICMS38->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd38->Caption = '';
                  $this->xProd38->Caption = '';
                  $this->NCM38->Caption = '';
                  $this->CFOP38->Caption = '';
                  $this->uCom38->Caption = '';
                  $this->qCom38->Caption = '';
                  $this->vUnCom38->Caption = '';
                  $this->vProd38->Caption = '';
                  $this->vIPI38->Caption = '';
                  $this->pIPI38->Caption = '';
                  $this->CST38->Caption = '';
                  $this->vBC38->Caption = '';
                  $this->vICMS38->Caption = '';
                  $this->pICMS38->Caption = '';
               }
               break;

            case 38:
               if(trim($danfe->NFe->infNFe->det[$i]->prod->cProd) <> '')
               {
                  $this->cProd39->Caption = substr($danfe->NFe->infNFe->det[$i]->prod->cProd, 0, 9);
                  $this->xProd39->Caption = $danfe->NFe->infNFe->det[$i]->prod->xProd;
                  $this->NCM39->Caption = $danfe->NFe->infNFe->det[$i]->prod->NCM;
                  $this->CFOP39->Caption = $danfe->NFe->infNFe->det[$i]->prod->CFOP;
                  $this->uCom39->Caption = $danfe->NFe->infNFe->det[$i]->prod->uCom;
                  $this->qCom39->Caption = $danfe->NFe->infNFe->det[$i]->prod->qCom;
                  $this->vUnCom39->Caption = $danfe->NFe->infNFe->det[$i]->prod->vUnCom;
                  $this->vProd39->Caption = $danfe->NFe->infNFe->det[$i]->prod->vProd;
                  $this->vIPI39->Caption = '0.00';
                  $this->pIPI39->Caption = '0.00%';

                  if(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST) <> '')
                  {
                     $this->CST39->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->CST;
                     $this->vBC39->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vBC;
                     $this->vICMS39->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->vICMS;
                     $this->pICMS39->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS00->pICMS) . '%';
                  }
                  elseif(trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST) <> '')
                  {
                     $this->CST39->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->CST;
                     $this->vBC39->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vBC;
                     $this->vICMS39->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->vICMS;
                     $this->pICMS39->Caption = trim($danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS20->pICMS) . '%';
                  }
                  else
                  {
                     $this->CST39->Caption = $danfe->NFe->infNFe->det[$i]->imposto->ICMS->ICMS40->CST;
                     $this->vBC39->Caption = '0.00';
                     $this->vICMS39->Caption = '0.00';
                     $this->pICMS39->Caption = '0.00%';
                  }
               }
               else
               {
                  $this->cProd39->Caption = '';
                  $this->xProd39->Caption = '';
                  $this->NCM39->Caption = '';
                  $this->CFOP39->Caption = '';
                  $this->uCom39->Caption = '';
                  $this->qCom39->Caption = '';
                  $this->vUnCom39->Caption = '';
                  $this->vProd39->Caption = '';
                  $this->vIPI39->Caption = '';
                  $this->pIPI39->Caption = '';
                  $this->CST39->Caption = '';
                  $this->vBC39->Caption = '';
                  $this->vICMS39->Caption = '';
                  $this->pICMS39->Caption = '';
               }
               break;

         }

      }

   }

   function nfimportaxmlgerarJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $nfimportaxmlgerar;

//Cria o formulario
$nfimportaxmlgerar = new nfimportaxmlgerar($application);

//Ler do arquivo de recursos
$nfimportaxmlgerar->loadResource(__FILE__);

//Mostrar o formulario
$nfimportaxmlgerar->show();

?>