<!doctype html>
<html>
  <head>
    <title>Vida Perfeita</title>

	<!-- **************************** -->
	<!-- *** Include de Cabecalho *** -->
	<!-- **************************** -->
	<?php
        require_once("includes/inverte_data_amd_to_dma.fnc.php");
        require_once("includes/inverte_data_dma_to_amd.fnc.php");

	    //*** Abre a conexao com o BD ***
  	    $nro_conexao = @mysql_connect("localhost","root","liberar7777");
		$res_conexao = @mysql_select_db("mgt_managertex",$nro_conexao);

		//*** Recuperacao dos dados da etiqueta ***
		$txtDataInicial = inverte_data_dma_to_amd(trim($_POST["txtDataInicial"])); 
		$txtDataFinal   = inverte_data_dma_to_amd(trim($_POST["txtDataFinal"])); 
		$txtTipoCompra  = $_POST["txtTipoCompra"]; 
		$txtFormaPagto  = $_POST["txtFormaPagto"]; 

	    $Comando_SQL = "SELECT ";
        $Comando_SQL .= "mgt_conta_pagar_nro, ";
        $Comando_SQL .= "mgt_conta_pagar_data_emissao, ";
        $Comando_SQL .= "date_format(mgt_conta_pagar_data, '%d/%m/%Y') AS mgt_conta_pagar_data, "; 
        $Comando_SQL .= "date_format(mgt_conta_pagar_data_pagto, '%d/%m/%Y') AS mgt_conta_pagar_data_pagto, "; 
        $Comando_SQL .= "date_format(mgt_conta_pagar_data_emissao, '%d/%m/%Y') AS mgt_conta_pagar_data_compra, "; 
        $Comando_SQL .= "mgt_conta_pagar_descricao, ";
        $Comando_SQL .= "mgt_conta_pagar_valor, ";
        $Comando_SQL .= "mgt_conta_pagar_status ";
        $Comando_SQL .= "FROM mgt_contas_pagar ";
        $Comando_SQL .= "WHERE (mgt_conta_pagar_data_emissao >= '" . trim($txtDataInicial) . "' AND mgt_conta_pagar_data_emissao <= '" . trim($txtDataFinal) . "') ";

		if( trim($txtTipoCompra) != 'Todas' )
		{
			$Comando_SQL .= "AND mgt_conta_pagar_descricao LIKE '%" . trim($txtTipoCompra) . "%' ";
		}
		else
		{
			$Comando_SQL .= "AND (mgt_conta_pagar_descricao LIKE '%(FORN - NF)%' OR mgt_conta_pagar_descricao LIKE '%(FORN - DOC)%' OR mgt_conta_pagar_descricao LIKE '%CHEQUE%') ";
		}

		if( trim($txtFormaPagto) != 'Todos' )
		{
			$Comando_SQL .= "AND mgt_conta_pagar_status = '" . trim($txtFormaPagto) . "' ";
		}

        $Comando_SQL .= "ORDER BY mgt_conta_pagar_data_compra ASC, mgt_conta_pagar_descricao ASC ";


		//*** Executa o Comando de Selecao ***
		$resultado = mysql_query($Comando_SQL) or die(mysql_error());
	?>
  </head>

  <?php flush(); ?>

  <body style="background-color: #FFFFFF; font-family: Arial; font-size: 12px; font-style: normal;">

	<?php 
		//*** Obtem os dados da etiqueta ***
	    if( mysql_num_rows($resultado) > 0 )
		{
			//*** Lista os Registros Encontrados ***
			//*** Monta o Cabeçalho do Relatório ***

			echo '<table  style="text-align: center; width: 800px; border-width: 1px; border-style: solid; border-color: #000000;">';
			echo '<tr><th colspan="7" style="text-align: center;"><b>RELATÓRIO DE COMPRAS NO PERÍODO DE: ' . inverte_data_amd_to_dma(trim($txtDataInicial)) . ' ATÉ ' . inverte_data_amd_to_dma(trim($txtDataFinal)) . '</b></th></tr>';

			echo '<tr>';
			echo '<th style="background-color: #EEEEEE; text-align: center; border-width: 1px; border-style: solid; border-color: #000000;">Nro.Lançto</th>';
			echo '<th style="background-color: #EEEEEE; text-align: center; border-width: 1px; border-style: solid; border-color: #000000;">DT.Compra</th>';
			echo '<th style="background-color: #EEEEEE; text-align: center; border-width: 1px; border-style: solid; border-color: #000000;">Descrição</th>';
			echo '<th style="background-color: #EEEEEE; text-align: center; border-width: 1px; border-style: solid; border-color: #000000;">Valor R$</th>';
			echo '<th style="background-color: #EEEEEE; text-align: center; border-width: 1px; border-style: solid; border-color: #000000;">DT.Vencto</th>';
			echo '<th style="background-color: #EEEEEE; text-align: center; border-width: 1px; border-style: solid; border-color: #000000;">DT.Pgto</th>';
			echo '<th style="background-color: #EEEEEE; text-align: center; border-width: 1px; border-style: solid; border-color: #000000;">Status</th>';
			echo '</tr>';

			$cor_celula = '#FFFFFF'; 
			$valor_total = 0;

			for($i = 0; $i < mysql_num_rows($resultado); $i++)
			{
				echo '<tr>';
				echo '<td style="background-color: ' . trim($cor_celula) . '; border-width: 1px; border-style: solid; border-color: #000000; text-align: right;">' . mysql_result($resultado,$i,"mgt_conta_pagar_nro") . '</td>';
				echo '<td style="background-color: ' . trim($cor_celula) . '; border-width: 1px; border-style: solid; border-color: #000000; text-align: center;">' . mysql_result($resultado,$i,"mgt_conta_pagar_data_compra") . '</td>';
				echo '<td style="background-color: ' . trim($cor_celula) . '; border-width: 1px; border-style: solid; border-color: #000000; text-align: left;">' . mysql_result($resultado,$i,"mgt_conta_pagar_descricao") . '</td>';
				echo '<td style="background-color: ' . trim($cor_celula) . '; border-width: 1px; border-style: solid; border-color: #000000; text-align: right;">' . number_format(mysql_result($resultado,$i,"mgt_conta_pagar_valor"),2,',','.') . '</td>';
				echo '<td style="background-color: ' . trim($cor_celula) . '; border-width: 1px; border-style: solid; border-color: #000000; text-align: center;">' . mysql_result($resultado,$i,"mgt_conta_pagar_data") . '</td>';
				echo '<td style="background-color: ' . trim($cor_celula) . '; border-width: 1px; border-style: solid; border-color: #000000; text-align: center;">' . mysql_result($resultado,$i,"mgt_conta_pagar_data_pagto") . '</td>';
				echo '<td style="background-color: ' . trim($cor_celula) . '; border-width: 1px; border-style: solid; border-color: #000000; text-align: left;">' . mysql_result($resultado,$i,"mgt_conta_pagar_status") . '</td>';
				echo '</tr>';

				if( trim($cor_celula) == '#FFFFFF' )
				{
					$cor_celula = '#EEEEEE';
				}
				else
				{
					$cor_celula = '#FFFFFF'; 
				}

				$valor_total = $valor_total + mysql_result($resultado,$i,"mgt_conta_pagar_valor");
			}

			echo '<tr>';
			echo '<td colspan="3" style="background-color: ' . trim($cor_celula) . '; border-width: 1px; border-style: solid; border-color: #000000; text-align: right;"><b>Total</b></td>';
			echo '<td style="background-color: ' . trim($cor_celula) . '; border-width: 1px; border-style: solid; border-color: #000000; text-align: right;"><b>' . number_format($valor_total, 2, ',', '.') . '</b></td>';
			echo '<td colspan="3" style="background-color: ' . trim($cor_celula) . '; border-width: 1px; border-style: solid; border-color: #000000; text-align: left;"></td>';
			echo '</tr>';

			echo '</table>';
		}
		else
		{
            echo $Comando_SQL;

			echo 'Nenhuma compra localizada para o período informado!';
		}

        //*** Fecha a Conexao com o Banco de Dados ***
   	    @mysql_free_result($resultado);
		@mysql_close($nro_conexao);
		$resultado = null;
		$nro_conexao = null;
	?>
  </body>
</html>