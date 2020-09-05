<?php
	$dbname		= "mgt_managertex";
	$porta		= "localhost";
	$usuario	= "root";
	$senha		= "liberar7777";

	$nro_conexao = mysql_connect($porta,$usuario,$senha);
	$res_conexao = mysql_select_db($dbname,$nro_conexao);

	require_once("includes/rotinas_gerais.inc.php");
	require_once("includes/inverte_data_amd_to_dma.fnc.php");
	require_once("includes/inverte_data_dma_to_amd.fnc.php");

	$mgt_conhecimento_numero = $_REQUEST['mgt_conhecimento_numero'];

	$Comando_SQL = "select * from mgt_conhecimentos where mgt_conhecimento_numero = '" . trim($mgt_conhecimento_numero) . "' order by mgt_conhecimento_numero";

	$sql = mysql_query($Comando_SQL);
?>

<html  DIR=ltr >
<head>
<title>Impressao do Conhecimento</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="vcl/js/common.js"></script>
<script type="text/javascript">var nfconhecimentosimp=new Object(Object);</script>
</head>

<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "  >
<form style="margin-bottom: 0" id="nfconhecimentosimp" name="nfconhecimentosimp" method="post"   action="/sistemas/managertex/nf_conhecimentos_imp.php">

<table  width="811"  border="0" cellpadding="0" cellspacing="0"><tr><td valign="top">
<div id="mgt_conhecimento_numero_outer" style="Z-INDEX: 0; LEFT: 670px; WIDTH: 160px; POSITION: absolute; TOP: 63px; HEIGHT: 13px">
<div id="mgt_conhecimento_numero" style=" font-family: Arial; font-size: 7px;  height:13px;width:160px;  letter-spacing:4px; padding-top:5px;"  align="Left"							>Nro.: <?php echo mysql_result($sql,0,"mgt_conhecimento_numero"); ?></div>
</div>
<div id="mgt_conhecimento_data_emissao_outer" style="Z-INDEX: 1; LEFT: 465px; WIDTH: 160px; POSITION: absolute; TOP: 86px; HEIGHT: 13px">
<div id="mgt_conhecimento_data_emissao" style=" font-family: Arial; font-size: 7px;  height:13px;width:160px;  letter-spacing:4px; padding-top:5px;"  align="Left"						><?php echo inverte_data_amd_to_dma(mysql_result($sql,0,"mgt_conhecimento_data_emissao")); ?></div>
</div>
<div id="mgt_conhecimento_cfop_outer" style="Z-INDEX: 2; LEFT: 578px; WIDTH: 160px; POSITION: absolute; TOP: 111px; HEIGHT: 13px">
<div id="mgt_conhecimento_cfop" style=" font-family: Arial; font-size: 7px;  height:13px;width:160px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_cfop"); ?></div>
</div>
<div id="mgt_conhecimento_natureza_operacao_outer" style="Z-INDEX: 3; LEFT: 385px; WIDTH: 160px; POSITION: absolute; TOP: 111px; HEIGHT: 13px">
<div id="mgt_conhecimento_natureza_operacao" style=" font-family: Arial; font-size: 7px;  height:13px;width:160px;  letter-spacing:4px; padding-top:5px;"  align="Left"					><?php echo mysql_result($sql,0,"mgt_conhecimento_natureza_operacao"); ?></div>
</div>
<div id="mgt_conhecimento_remetente_nome_outer" style="Z-INDEX: 4; LEFT: 54px; WIDTH: 354px; POSITION: absolute; TOP: 133px; HEIGHT: 13px">
<div id="mgt_conhecimento_remetente_nome" style=" font-family: Arial; font-size: 7px;  height:13px;width:354px;  letter-spacing:4px; padding-top:5px;"  align="Left"					><?php echo mysql_result($sql,0,"mgt_conhecimento_remetente_nome"); ?></div>
</div>
<div id="mgt_conhecimento_remetente_endereco_outer" style="Z-INDEX: 5; LEFT: 54px; WIDTH: 290px; POSITION: absolute; TOP: 164px; HEIGHT: 13px">
<div id="mgt_conhecimento_remetente_endereco" style=" font-family: Arial; font-size: 7px;  height:13px;width:290px;  letter-spacing:4px; padding-top:5px;"  align="Left"				><?php echo mysql_result($sql,0,"mgt_conhecimento_remetente_endereco")." ".mysql_result($sql,0,"mgt_conhecimento_remetente_complemento"); ?></div>
</div>
<div id="mgt_conhecimento_remetente_cidade_outer" style="Z-INDEX: 6; LEFT: 54px; WIDTH: 290px; POSITION: absolute; TOP: 182px; HEIGHT: 13px">
<div id="mgt_conhecimento_remetente_cidade" style=" font-family: Arial; font-size: 7px;  height:13px;width:290px;  letter-spacing:4px; padding-top:5px;"  align="Left"					><?php echo mysql_result($sql,0,"mgt_conhecimento_remetente_cidade"); ?></div>
</div>
<div id="mgt_conhecimento_remetente_estado_outer" style="Z-INDEX: 7; LEFT: 349px; WIDTH: 20px; POSITION: absolute; TOP: 182px; HEIGHT: 13px">
<div id="mgt_conhecimento_remetente_estado" style=" font-family: Arial; font-size: 7px;  height:13px;width:20px;  letter-spacing:4px; padding-top:5px;"  align="Left"					><?php echo mysql_result($sql,0,"mgt_conhecimento_remetente_estado"); ?></div>
</div>
<div id="mgt_conhecimento_remetente_codigo_outer" style="Z-INDEX: 8; LEFT: 54px; WIDTH: 145px; POSITION: absolute; TOP: 200px; HEIGHT: 13px">
<div id="mgt_conhecimento_remetente_codigo" style=" font-family: Arial; font-size: 7px;  height:13px;width:145px;  letter-spacing:4px; padding-top:5px;"  align="Left"					><?php echo mysql_result($sql,0,"mgt_conhecimento_remetente_codigo"); ?></div>
</div>
<div id="mgt_conhecimento_remetente_inscricao_estadual_outer" style="Z-INDEX: 9; LEFT: 224px; WIDTH: 145px; POSITION: absolute; TOP: 200px; HEIGHT: 13px">
<div id="mgt_conhecimento_remetente_inscricao_estadual" style=" font-family: Arial; font-size: 7px;  height:13px;width:145px;  letter-spacing:4px; padding-top:5px;"  align="Left"		><?php echo mysql_result($sql,0,"mgt_conhecimento_remetente_inscricao_estadual"); ?></div>
</div>
<div id="mgt_conhecimento_destinatario_nome_outer" style="Z-INDEX: 10; LEFT: 441px; WIDTH: 379px; POSITION: absolute; TOP: 133px; HEIGHT: 13px">
<div id="mgt_conhecimento_destinatario_nome" style=" font-family: Arial; font-size: 7px;  height:13px;width:379px;  letter-spacing:4px; padding-top:5px;"  align="Left"					><?php echo mysql_result($sql,0,"mgt_conhecimento_destinatario_nome"); ?></div>
</div>
<div id="mgt_conhecimento_destinatario_endereco_outer" style="Z-INDEX: 11; LEFT: 441px; WIDTH: 290px; POSITION: absolute; TOP: 164px; HEIGHT: 13px">
<div id="mgt_conhecimento_destinatario_endereco" style=" font-family: Arial; font-size: 7px;  height:13px;width:290px;  letter-spacing:4px; padding-top:5px;"  align="Left"				><?php echo mysql_result($sql,0,"mgt_conhecimento_destinatario_endereco")." ".mysql_result($sql,0,"mgt_conhecimento_destinatario_complemento"); ?></div>
</div>
<div id="mgt_conhecimento_destinatario_cidade_outer" style="Z-INDEX: 12; LEFT: 441px; WIDTH: 290px; POSITION: absolute; TOP: 182px; HEIGHT: 13px">
<div id="mgt_conhecimento_destinatario_cidade" style=" font-family: Arial; font-size: 7px;  height:13px;width:290px;  letter-spacing:4px; padding-top:5px;"  align="Left"				><?php echo mysql_result($sql,0,"mgt_conhecimento_destinatario_cidade"); ?></div>
</div>
<div id="mgt_conhecimento_destinatario_codigo_outer" style="Z-INDEX: 13; LEFT: 441px; WIDTH: 145px; POSITION: absolute; TOP: 200px; HEIGHT: 13px">
<div id="mgt_conhecimento_destinatario_codigo" style=" font-family: Arial; font-size: 7px;  height:13px;width:145px;  letter-spacing:4px; padding-top:5px;"  align="Left"				><?php echo mysql_result($sql,0,"mgt_conhecimento_destinatario_codigo"); ?></div>
</div>
<div id="mgt_conhecimento_destinatario_inscricao_estadual_outer" style="Z-INDEX: 14; LEFT: 655px; WIDTH: 145px; POSITION: absolute; TOP: 200px; HEIGHT: 13px">
<div id="mgt_conhecimento_destinatario_inscricao_estadual" style=" font-family: Arial; font-size: 7px;  height:13px;width:145px;  letter-spacing:4px; padding-top:5px;"  align="Left"	><?php echo mysql_result($sql,0,"mgt_conhecimento_destinatario_inscricao_estadual"); ?></div>
</div>
<div id="mgt_conhecimento_destinatario_estado_outer" style="Z-INDEX: 15; LEFT: 725px; WIDTH: 20px; POSITION: absolute; TOP: 182px; HEIGHT: 13px">
<div id="mgt_conhecimento_destinatario_estado" style=" font-family: Arial; font-size: 7px;  height:13px;width:20px;  letter-spacing:4px; padding-top:5px;"  align="Left"				><?php echo mysql_result($sql,0,"mgt_conhecimento_destinatario_estado"); ?></div>
</div>
<div id="mgt_conhecimento_frete_pagar_outer" style="Z-INDEX: 16; LEFT: 63px; WIDTH: 25px; POSITION: absolute; TOP: 287px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_pagar" style=" font-family: Arial; font-size: 7px;  height:13px;width:25px;  letter-spacing:4px; padding-top:5px;"  align="Left"						><?php if(mysql_result($sql,0,"mgt_conhecimento_frete_pagar") == "S"){ echo "X"; }else{ echo ""; }; ?></div>
</div>
<div id="mgt_conhecimento_frete_pago_outer" style="Z-INDEX: 17; LEFT: 126px; WIDTH: 25px; POSITION: absolute; TOP: 287px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_pago" style=" font-family: Arial; font-size: 7px;  height:13px;width:25px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php if(mysql_result($sql,0,"mgt_conhecimento_frete_pago") == "S"){ echo "X"; }else{ echo ""; }; ?></div>
</div>
<div id="mgt_conhecimento_frete_pago_em_outer" style="Z-INDEX: 18; LEFT: 174px; WIDTH: 145px; POSITION: absolute; TOP: 287px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_pago_em" style=" font-family: Arial; font-size: 7px;  height:13px;width:145px;  letter-spacing:4px; padding-top:5px;"  align="Left"						><?php if(mysql_result($sql,0,"mgt_conhecimento_frete_pago_em") <> "" and mysql_result($sql,0,"mgt_conhecimento_frete_pago_em") <> "0000-00-00"){ echo inverte_data_amd_to_dma(mysql_result($sql,0,"mgt_conhecimento_frete_pago_em")); }else{ echo ""; } ?></div>
</div>
<div id="mgt_conhecimento_carga_1_outer" style="Z-INDEX: 19; LEFT: 6px; WIDTH: 162px; POSITION: absolute; TOP: 361px; HEIGHT: 13px">
<div id="mgt_conhecimento_carga_1" style=" font-family: Arial; font-size: 7px;  height:13px;width:162px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_carga_1"); ?></div>
</div>
<div id="mgt_conhecimento_qtde_1_outer" style="Z-INDEX: 20; LEFT: 174px; WIDTH: 50px; POSITION: absolute; TOP: 361px; HEIGHT: 13px">
<div id="mgt_conhecimento_qtde_1" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_qtde_1"); ?></div>
</div>
<div id="mgt_conhecimento_especie_1_outer" style="Z-INDEX: 21; LEFT: 230px; WIDTH: 50px; POSITION: absolute; TOP: 361px; HEIGHT: 13px">
<div id="mgt_conhecimento_especie_1" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_especie_1"); ?></div>
</div>
<div id="mgt_conhecimento_peso_1_outer" style="Z-INDEX: 22; LEFT: 286px; WIDTH: 50px; POSITION: absolute; TOP: 361px; HEIGHT: 13px">
<div id="mgt_conhecimento_peso_1" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"		 						><?php echo mysql_result($sql,0,"mgt_conhecimento_peso_1"); ?></div>
</div>
<div id="mgt_conhecimento_m_l_1_outer" style="Z-INDEX: 23; LEFT: 342px; WIDTH: 50px; POSITION: absolute; TOP: 361px; HEIGHT: 13px">
<div id="mgt_conhecimento_m_l_1" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_m_l_1"); ?></div>
</div>
<div id="mgt_conhecimento_nota_1_outer" style="Z-INDEX: 24; LEFT: 398px; WIDTH: 98px; POSITION: absolute; TOP: 361px; HEIGHT: 13px">
<div id="mgt_conhecimento_nota_1" style=" font-family: Arial; font-size: 7px;  height:13px;width:98px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_nota_1"); ?></div>
</div>
<div id="mgt_conhecimento_vlr_1_outer" style="Z-INDEX: 25; LEFT: 502px; WIDTH: 87px; POSITION: absolute; TOP: 361px; HEIGHT: 13px">
<div id="mgt_conhecimento_vlr_1" style=" font-family: Arial; font-size: 7px;  height:13px;width:87px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_vlr_1"); ?></div>
</div>
<div id="mgt_conhecimento_marca_1_outer" style="Z-INDEX: 26; LEFT: 602px; WIDTH: 50px; POSITION: absolute; TOP: 361px; HEIGHT: 13px">
<div id="mgt_conhecimento_marca_1" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_marca_1"); ?></div>
</div>
<div id="mgt_conhecimento_placa_1_outer" style="Z-INDEX: 27; LEFT: 659px; WIDTH: 50px; POSITION: absolute; TOP: 361px; HEIGHT: 13px">
<div id="mgt_conhecimento_placa_1" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_placa_1"); ?></div>
</div>
<div id="mgt_conhecimento_local_1_outer" style="Z-INDEX: 28; LEFT: 712px; WIDTH: 45px; POSITION: absolute; TOP: 361px; HEIGHT: 13px">
<div id="mgt_conhecimento_local_1" style=" font-family: Arial; font-size: 7px;  height:13px;width:45px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_local_1"); ?></div>
</div>
<div id="mgt_conhecimento_uf_1_outer" style="Z-INDEX: 29; LEFT: 759px; WIDTH: 26px; POSITION: absolute; TOP: 361px; HEIGHT: 13px">
<div id="mgt_conhecimento_uf_1" style=" font-family: Arial; font-size: 7px;  height:13px;width:26px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_uf_1"); ?></div>
</div>
<div id="mgt_conhecimento_carga_2_outer" style="Z-INDEX: 30; LEFT: 6px; WIDTH: 162px; POSITION: absolute; TOP: 374px; HEIGHT: 13px">
<div id="mgt_conhecimento_carga_2" style=" font-family: Arial; font-size: 7px;  height:13px;width:162px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_carga_2"); ?></div>
</div>
<div id="mgt_conhecimento_qtde_2_outer" style="Z-INDEX: 31; LEFT: 174px; WIDTH: 50px; POSITION: absolute; TOP: 374px; HEIGHT: 13px">
<div id="mgt_conhecimento_qtde_2" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_qtde_2"); ?></div>
</div>
<div id="mgt_conhecimento_especie_2_outer" style="Z-INDEX: 32; LEFT: 230px; WIDTH: 50px; POSITION: absolute; TOP: 374px; HEIGHT: 13px">
<div id="mgt_conhecimento_especie_2" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_especie_2"); ?></div>
</div>
<div id="mgt_conhecimento_peso_2_outer" style="Z-INDEX: 33; LEFT: 286px; WIDTH: 50px; POSITION: absolute; TOP: 374px; HEIGHT: 13px">
<div id="mgt_conhecimento_peso_2" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_peso_2"); ?></div>
</div>
<div id="mgt_conhecimento_m_l_2_outer" style="Z-INDEX: 34; LEFT: 342px; WIDTH: 50px; POSITION: absolute; TOP: 374px; HEIGHT: 13px">
<div id="mgt_conhecimento_m_l_2" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_m_l_2"); ?></div>
</div>
<div id="mgt_conhecimento_nota_2_outer" style="Z-INDEX: 35; LEFT: 398px; WIDTH: 98px; POSITION: absolute; TOP: 374px; HEIGHT: 13px">
<div id="mgt_conhecimento_nota_2" style=" font-family: Arial; font-size: 7px;  height:13px;width:98px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_nota_2"); ?></div>
</div>
<div id="mgt_conhecimento_vlr_2_outer" style="Z-INDEX: 36; LEFT: 501px; WIDTH: 87px; POSITION: absolute; TOP: 374px; HEIGHT: 13px">
<div id="mgt_conhecimento_vlr_2" style=" font-family: Arial; font-size: 7px;  height:13px;width:87px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_vlr_2"); ?></div>
</div>
<div id="mgt_conhecimento_marca_2_outer" style="Z-INDEX: 37; LEFT: 602px; WIDTH: 50px; POSITION: absolute; TOP: 374px; HEIGHT: 13px">
<div id="mgt_conhecimento_marca_2" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_marca_2"); ?></div>
</div>
<div id="mgt_conhecimento_placa_2_outer" style="Z-INDEX: 38; LEFT: 659px; WIDTH: 50px; POSITION: absolute; TOP: 374px; HEIGHT: 13px">
<div id="mgt_conhecimento_placa_2" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_placa_2"); ?></div>
</div>
<div id="mgt_conhecimento_local_2_outer" style="Z-INDEX: 39; LEFT: 712px; WIDTH: 45px; POSITION: absolute; TOP: 374px; HEIGHT: 13px">
<div id="mgt_conhecimento_local_2" style=" font-family: Arial; font-size: 7px;  height:13px;width:45px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_local_2"); ?></div>
</div>
<div id="mgt_conhecimento_uf_2_outer" style="Z-INDEX: 40; LEFT: 759px; WIDTH: 26px; POSITION: absolute; TOP: 374px; HEIGHT: 13px">
<div id="mgt_conhecimento_uf_2" style=" font-family: Arial; font-size: 7px;  height:13px;width:26px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_uf_2"); ?></div>
</div>
<div id="mgt_conhecimento_carga_3_outer" style="Z-INDEX: 41; LEFT: 6px; WIDTH: 162px; POSITION: absolute; TOP: 387px; HEIGHT: 13px">
<div id="mgt_conhecimento_carga_3" style=" font-family: Arial; font-size: 7px;  height:13px;width:162px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_carga_3"); ?></div>
</div>
<div id="mgt_conhecimento_qtde_3_outer" style="Z-INDEX: 42; LEFT: 174px; WIDTH: 50px; POSITION: absolute; TOP: 387px; HEIGHT: 13px">
<div id="mgt_conhecimento_qtde_3" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_qtde_3"); ?></div>
</div>
<div id="mgt_conhecimento_especie_3_outer" style="Z-INDEX: 43; LEFT: 230px; WIDTH: 50px; POSITION: absolute; TOP: 387px; HEIGHT: 13px">
<div id="mgt_conhecimento_especie_3" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_especie_3"); ?></div>
</div>
<div id="mgt_conhecimento_peso_3_outer" style="Z-INDEX: 44; LEFT: 286px; WIDTH: 50px; POSITION: absolute; TOP: 387px; HEIGHT: 13px">
<div id="mgt_conhecimento_peso_3" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_peso_3"); ?></div>
</div>
<div id="mgt_conhecimento_m_l_3_outer" style="Z-INDEX: 45; LEFT: 342px; WIDTH: 50px; POSITION: absolute; TOP: 387px; HEIGHT: 13px">
<div id="mgt_conhecimento_m_l_3" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_m_l_3"); ?></div>
</div>
<div id="mgt_conhecimento_nota_3_outer" style="Z-INDEX: 46; LEFT: 398px; WIDTH: 98px; POSITION: absolute; TOP: 387px; HEIGHT: 13px">
<div id="mgt_conhecimento_nota_3" style=" font-family: Arial; font-size: 7px;  height:13px;width:98px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_nota_3"); ?></div>
</div>
<div id="mgt_conhecimento_vlr_3_outer" style="Z-INDEX: 47; LEFT: 501px; WIDTH: 87px; POSITION: absolute; TOP: 387px; HEIGHT: 13px">
<div id="mgt_conhecimento_vlr_3" style=" font-family: Arial; font-size: 7px;  height:13px;width:87px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_vlr_3"); ?></div>
</div>
<div id="mgt_conhecimento_marca_3_outer" style="Z-INDEX: 48; LEFT: 602px; WIDTH: 50px; POSITION: absolute; TOP: 387px; HEIGHT: 13px">
<div id="mgt_conhecimento_marca_3" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_marca_3"); ?></div>
</div>
<div id="mgt_conhecimento_placa_3_outer" style="Z-INDEX: 49; LEFT: 659px; WIDTH: 50px; POSITION: absolute; TOP: 387px; HEIGHT: 13px">
<div id="mgt_conhecimento_placa_3" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_placa_3"); ?></div>
</div>
<div id="mgt_conhecimento_local_3_outer" style="Z-INDEX: 50; LEFT: 712px; WIDTH: 45px; POSITION: absolute; TOP: 387px; HEIGHT: 13px">
<div id="mgt_conhecimento_local_3" style=" font-family: Arial; font-size: 7px;  height:13px;width:45px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_local_3"); ?></div>
</div>
<div id="mgt_conhecimento_uf_3_outer" style="Z-INDEX: 51; LEFT: 759px; WIDTH: 26px; POSITION: absolute; TOP: 387px; HEIGHT: 13px">
<div id="mgt_conhecimento_uf_3" style=" font-family: Arial; font-size: 7px;  height:13px;width:26px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_uf_3"); ?></div>
</div>
<div id="mgt_conhecimento_carga_4_outer" style="Z-INDEX: 52; LEFT: 6px; WIDTH: 162px; POSITION: absolute; TOP: 400px; HEIGHT: 13px">
<div id="mgt_conhecimento_carga_4" style=" font-family: Arial; font-size: 7px;  height:13px;width:162px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_carga_4"); ?></div>
</div>
<div id="mgt_conhecimento_qtde_4_outer" style="Z-INDEX: 53; LEFT: 174px; WIDTH: 50px; POSITION: absolute; TOP: 400px; HEIGHT: 13px">
<div id="mgt_conhecimento_qtde_4" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_qtde_4"); ?></div>
</div>
<div id="mgt_conhecimento_especie_4_outer" style="Z-INDEX: 54; LEFT: 230px; WIDTH: 50px; POSITION: absolute; TOP: 400px; HEIGHT: 13px">
<div id="mgt_conhecimento_especie_4" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_especie_4"); ?></div>
</div>
<div id="mgt_conhecimento_peso_4_outer" style="Z-INDEX: 55; LEFT: 286px; WIDTH: 50px; POSITION: absolute; TOP: 400px; HEIGHT: 13px">
<div id="mgt_conhecimento_peso_4" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_peso_4"); ?></div>
</div>
<div id="mgt_conhecimento_m_l_4_outer" style="Z-INDEX: 56; LEFT: 342px; WIDTH: 50px; POSITION: absolute; TOP: 400px; HEIGHT: 13px">
<div id="mgt_conhecimento_m_l_4" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_m_l_4"); ?></div>
</div>
<div id="mgt_conhecimento_nota_4_outer" style="Z-INDEX: 57; LEFT: 398px; WIDTH: 98px; POSITION: absolute; TOP: 400px; HEIGHT: 13px">
<div id="mgt_conhecimento_nota_4" style=" font-family: Arial; font-size: 7px;  height:13px;width:98px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_nota_4"); ?></div>
</div>
<div id="mgt_conhecimento_vlr_4_outer" style="Z-INDEX: 58; LEFT: 501px; WIDTH: 87px; POSITION: absolute; TOP: 400px; HEIGHT: 13px">
<div id="mgt_conhecimento_vlr_4" style=" font-family: Arial; font-size: 7px;  height:13px;width:87px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_vlr_4"); ?></div>
</div>
<div id="mgt_conhecimento_marca_4_outer" style="Z-INDEX: 59; LEFT: 602px; WIDTH: 50px; POSITION: absolute; TOP: 400px; HEIGHT: 13px">
<div id="mgt_conhecimento_marca_4" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_marca_4"); ?></div>
</div>
<div id="mgt_conhecimento_placa_4_outer" style="Z-INDEX: 60; LEFT: 659px; WIDTH: 50px; POSITION: absolute; TOP: 400px; HEIGHT: 13px">
<div id="mgt_conhecimento_placa_4" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_placa_4"); ?></div>
</div>
<div id="mgt_conhecimento_local_4_outer" style="Z-INDEX: 61; LEFT: 712px; WIDTH: 45px; POSITION: absolute; TOP: 400px; HEIGHT: 13px">
<div id="mgt_conhecimento_local_4" style=" font-family: Arial; font-size: 7px;  height:13px;width:45px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_local_4"); ?></div>
</div>
<div id="mgt_conhecimento_uf_4_outer" style="Z-INDEX: 62; LEFT: 759px; WIDTH: 26px; POSITION: absolute; TOP: 400px; HEIGHT: 13px">
<div id="mgt_conhecimento_uf_4" style=" font-family: Arial; font-size: 7px;  height:13px;width:26px;  letter-spacing:4px; padding-top:5px;"  align="Left"								><?php echo mysql_result($sql,0,"mgt_conhecimento_uf_4"); ?></div>
</div>
<div id="mgt_conhecimento_frete_despacho_outer" style="Z-INDEX: 63; LEFT: 196px; WIDTH: 50px; POSITION: absolute; TOP: 472px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_despacho" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"						><?php echo mysql_result($sql,0,"mgt_conhecimento_frete_despacho"); ?></div>
</div>
<div id="mgt_conhecimento_frete_peso_outer" style="Z-INDEX: 64; LEFT: 6px; WIDTH: 50px; POSITION: absolute; TOP: 472px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_peso" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_frete_peso"); ?></div>
</div>
<div id="mgt_conhecimento_frete_vlr_outer" style="Z-INDEX: 65; LEFT: 71px; WIDTH: 50px; POSITION: absolute; TOP: 472px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_vlr" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_frete_vlr"); ?></div>
</div>
<div id="mgt_conhecimento_frete_sec_sat_outer" style="Z-INDEX: 66; LEFT: 142px; WIDTH: 50px; POSITION: absolute; TOP: 472px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_sec_sat" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"						><?php echo mysql_result($sql,0,"mgt_conhecimento_frete_sec_sat"); ?></div>
</div>
<div id="mgt_conhecimento_frete_pedagio_outer" style="Z-INDEX: 67; LEFT: 251px; WIDTH: 50px; POSITION: absolute; TOP: 472px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_pedagio" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"						><?php echo mysql_result($sql,0,"mgt_conhecimento_frete_pedagio"); ?></div>
</div>
<div id="mgt_conhecimento_frete_outros_outer" style="Z-INDEX: 68; LEFT: 308px; WIDTH: 50px; POSITION: absolute; TOP: 472px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_outros" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"						><?php echo mysql_result($sql,0,"mgt_conhecimento_frete_outros"); ?></div>
</div>
<div id="mgt_conhecimento_frete_total_outer" style="Z-INDEX: 69; LEFT: 371px; WIDTH: 50px; POSITION: absolute; TOP: 472px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_total" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"						><?php echo mysql_result($sql,0,"mgt_conhecimento_frete_total"); ?></div>
</div>
<div id="mgt_conhecimento_frete_base_outer" style="Z-INDEX: 70; LEFT: 454px; WIDTH: 50px; POSITION: absolute; TOP: 472px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_base" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_frete_base"); ?></div>
</div>
<div id="mgt_conhecimento_frete_aliquota_icms_outer" style="Z-INDEX: 71; LEFT: 521px; WIDTH: 50px; POSITION: absolute; TOP: 472px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_aliquota_icms" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"				><?php echo mysql_result($sql,0,"mgt_conhecimento_frete_aliquota_icms"); ?></div>
</div>
<div id="mgt_conhecimento_frete_vlr_icms_outer" style="Z-INDEX: 72; LEFT: 590px; WIDTH: 50px; POSITION: absolute; TOP: 472px; HEIGHT: 13px">
<div id="mgt_conhecimento_frete_vlr_icms" style=" font-family: Arial; font-size: 7px;  height:13px;width:50px;  letter-spacing:4px; padding-top:5px;"  align="Left"						><?php echo mysql_result($sql,0,"mgt_conhecimento_frete_vlr_icms"); ?></div>
</div>
<div id="mgt_conhecimento_entrega_outer" style="Z-INDEX: 73; LEFT: 679px; WIDTH: 126px; POSITION: absolute; TOP: 472px; HEIGHT: 13px">
<div id="mgt_conhecimento_entrega" style=" font-family: Arial; font-size: 7px;  height:13px;width:126px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_entrega"); ?></div>
</div>
<div id="mgt_conhecimento_coleta_outer" style="Z-INDEX: 74; LEFT: 679px; WIDTH: 126px; POSITION: absolute; TOP: 442px; HEIGHT: 13px">
<div id="mgt_conhecimento_coleta" style=" font-family: Arial; font-size: 7px;  height:13px;width:126px;  letter-spacing:4px; padding-top:5px;"  align="Left"							><?php echo mysql_result($sql,0,"mgt_conhecimento_coleta"); ?></div>
</div>
<div id="mgt_conhecimento_observacao_outer" style="Z-INDEX: 72; LEFT: 590px; WIDTH: 126px; POSITION: absolute; TOP: 501px; HEIGHT: 78px">
<div id="mgt_conhecimento_observacao" style=" font-family: Arial; font-size: 7px;  height:78px;width:126px;  letter-spacing:4px; padding-top:5px;"  align="Left"						><?php echo mysql_result($sql,0,"mgt_conhecimento_observacao"); ?></div>
</div>
</td></tr></table>
</form></body>
</html>