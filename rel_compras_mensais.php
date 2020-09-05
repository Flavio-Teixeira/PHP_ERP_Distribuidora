<!doctype html>
<html>
  <head>
    <title>ManagerTEX</title>
  </head>

  <?php flush(); ?>

  <body style="background-color: #EBE9ED;">
	<fieldset style="text-align: center; width: auto; height: auto;">
		<legend>Informe o Período das Compras Mensais</legend>

		<form action="rel_compras_mensais_imprimir.php" method="post" enctype="multipart/form-data" target="_blank" id="frmCompras">
			<label for="txtDataInicial"><b>Data Inicial:</b></label>
			<input type="text" id="txtDataInicial" name="txtDataInicial" placeholder="DD/MM/AAAA" style="width: 70px;" value="<?php echo "01/" . date("m/Y", time()); ?>" maxlength="10" />

			<label for="txtDataFinal"><b>Data Final:</b></label>
			<input type="text" id="txtDataFinal" name="txtDataFinal" placeholder="DD/MM/AAAA" style="width: 70px;" value="<?php echo date("d/m/Y", time()); ?>" maxlength="10" />

			<br><br>
			<label for="txtTipoCompra"><b>Tipo da Compra: </b></label>
			<select name="txtTipoCompra" id="txtTipoCompra" style="width: 110px; height: 20px;">
			    <option value="Todas">Todas</option>
				<option value="(FORN - NF)">(FORN - NF)</option>
				<option value="(FORN - DOC)">(FORN - DOC)</option>				
			</select> 

			<br><br>
			<label for="txtFormaPagto"><b>Forma de Pagto: </b></label>
			<select name="txtFormaPagto" id="txtFormaPagto" style="width: 110px; height: 20px;">
			    <option value="Em Aberto">Em Aberto</option>
			    <option value="Pago">Pago</option>
			    <option value="Todos">Todos</option>
			</select> 

			<br><br>
			<input type="submit" id="btnImprimir" name="btnImprimir" value="Imprimir">		
		</form>
	</fieldset>
  </body>
</html>