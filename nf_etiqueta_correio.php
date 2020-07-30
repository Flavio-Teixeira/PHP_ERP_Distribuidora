<!doctype html>
<html>
  <head>
    <title>ManagerTEX</title>
  </head>

  <?php flush(); ?>

  <body style="background-color: #EBE9ED;">
	<fieldset style="text-align: center; width: auto; height: auto;">
		<legend>Informe o numero da Nota para a etiqueta</legend>

		<form action="nf_etiqueta_correio_imprimir.php" method="post" enctype="multipart/form-data" target="_blank" id="frmEtiqueta">
			<label for="txtNotaFiscal"><b>Numero da Nota Fiscal:</b></label>
			<input type="text" id="txtNotaFiscal" name="txtNotaFiscal" placeholder="Nota Fiscal..." style="width: 210px;" value="<?php echo $txtNotaFiscal; ?>" maxlength="7" />
			<input type="submit" id="btnImprimir" name="btnImprimir" value="Imprimir">		
		</form>
	</fieldset>
  </body>
</html>