<!doctype html>
<html>
  <head>
    <title>Vida Perfeita</title>

	<!-- **************************** -->
	<!-- *** Include de Cabecalho *** -->
	<!-- **************************** -->
	<?php
	    //*** Abre a conexao com o BD ***
  	    $nro_conexao = @mysql_connect("localhost","root","liberar7777");
		$res_conexao = @mysql_select_db("mgt_managertex",$nro_conexao);

		//*** Recuperacao dos dados da etiqueta ***
		$txtNotaFiscal = $_POST["txtNotaFiscal"]; 

		$Comando_SQL  = "SELECT ";
		$Comando_SQL .= "mgt_nota_fiscal_razao_social, ";
		$Comando_SQL .= "mgt_nota_fiscal_endereco_entrega, ";
		$Comando_SQL .= "mgt_nota_fiscal_complemento_entrega, ";
		$Comando_SQL .= "mgt_nota_fiscal_bairro_entrega, ";
		$Comando_SQL .= "mgt_nota_fiscal_cidade_entrega, ";
		$Comando_SQL .= "mgt_nota_fiscal_estado_entrega, ";
		$Comando_SQL .= "mgt_nota_fiscal_cep_entrega ";
		$Comando_SQL .= "FROM mgt_notas_fiscais ";
		$Comando_SQL .= "WHERE mgt_nota_fiscal_finalidade = 'PRD' ";
		$Comando_SQL .= "AND mgt_nota_fiscal_numero = " . trim($txtNotaFiscal);

		//*** Executa o Comando de Selecao ***
		$resultado = mysql_query($Comando_SQL) or die(mysql_error());
	?>
  </head>

  <?php flush(); ?>

  <body style="background-color: #FFFFFF; font-family: Arial; font-size: 16px; font-style: normal;" onload="window.print();">

	<?php 
		//*** Obtem os dados da etiqueta ***
	    if( mysql_num_rows($resultado) > 0 )
		{
			//*** Exibe os dados da etiqueta ***
			//*** Destinatario ***
			echo '<p>';
			echo '<table  style="text-align: center; width: 450px; border-width: 2px; border-style: solid; border-color: #000000;">';
			echo '<tr><td style="text-align: left;"><b>DESTINATARIO:</b></td></tr>';
			echo '<tr><td>&nbsp;</td></tr>';
			echo '<tr><td style="text-align: left;">' . mysql_result($resultado,0,"mgt_nota_fiscal_razao_social") . '</td></tr>';    
			echo '<tr><td>&nbsp;</td></tr>';
			echo '<tr><td style="text-align: left;">' . mysql_result($resultado,0,"mgt_nota_fiscal_endereco_entrega") . ' ' . mysql_result($resultado,0,"mgt_nota_fiscal_complemento_entrega") . '</td></tr>';    
			echo '<tr><td style="text-align: left;">' . mysql_result($resultado,0,"mgt_nota_fiscal_bairro_entrega") . '</td></tr>';    
			echo '<tr><td style="text-align: left;">' . mysql_result($resultado,0,"mgt_nota_fiscal_cidade_entrega") . ' - ' . mysql_result($resultado,0,"mgt_nota_fiscal_estado_entrega") . '</td></tr>';    
			echo '<tr><td style="text-align: left;">CEP: ' . mysql_result($resultado,0,"mgt_nota_fiscal_cep_entrega") . '</td></tr>';    
			echo '</table>';
			echo '</p>';

			//*** Remetente ***
			echo '<p>';
			echo '<table  style="text-align: center; width: 450px; border-width: 2px; border-style: solid; border-color: #000000;">';
			echo '<tr><td colspan="2" style="text-align: left;"><b>REMENTENTE:</b></td></tr>';
			echo '<tr><td colspan="2">&nbsp;</td></tr>';
			echo '<tr><td rowspan="2" style="text-align: center;"><img src="logo_vidaperfeita_pb.png" width="90" height="31" border="0" alt=""></td><td style="text-align: left;">Vida Perfeita</td></tr>';    
			echo '<tr><td style="text-align: left;">CNPJ: 51.017.952/0001-59</td></tr>';    
			echo '<tr><td colspan="2">&nbsp;</td></tr>';
			echo '<tr><td colspan="2" style="text-align: left;">Rua Nelly Pelegrino, 749</td></tr>';    
			echo '<tr><td colspan="2" style="text-align: left;">Nova Gerty</td></tr>';    
			echo '<tr><td colspan="2" style="text-align: left;">Sao Caetano do Sul – SP</td></tr>';    
			echo '<tr><td colspan="2" style="text-align: left;">CEP: 09580-140</td></tr>';    
			echo '</table>';
			echo '</p>';

		}
		else
		{
			echo 'Nenhuma nota localizada para o numero informado!';
		}

        //*** Fecha a Conexao com o Banco de Dados ***
   	    @mysql_free_result($resultado);
		@mysql_close($nro_conexao);
		$resultado = null;
		$nro_conexao = null;
	?>
  </body>
</html>