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

	$dbname		= "mgt_managertex";
	$porta		= "localhost";
	$usuario	= "root";
	$senha		= "liberar7777";

	$nro_conexao = mysql_connect($porta,$usuario,$senha);
	$res_conexao = mysql_select_db($dbname,$nro_conexao);
?>

<HTML>
<HEAD>
<TITLE> Etiquetas - Fornecedores </TITLE>
<HEAD>
</HEAD>

<STYLE TYPE="text/css">
	.LETRA10		{font-family:verdana,arial,helvetica,sans-serif; font-size:10px; color:#000000; text-decoration:none;}
	.LETRA15		{font-family:verdana,arial,helvetica,sans-serif; font-size:15px; color:#000000; text-decoration:none;}
</STYLE>

<BODY LEFTMARGIN="0" TOPMARGIN="0" BOTTOMMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0">

<TABLE BORDER="0" WIDTH="828" CELLPADDING="0" CELLSPACING="0">

	<TR>
		<TD WIDTH="014"></TD>

		<TD WIDTH="814">
			<TABLE BORDER="0" WIDTH="814" CELLPADDING="0" CELLSPACING="0">

				<TR><TD WIDTH="814" HEIGHT="30"></TD></TR>

				<TR>
					<TD WIDTH="814">
						<TABLE BORDER="0" WIDTH="814" CELLPADDING="0" CELLSPACING="0">

							<?php
								$cont = 1;
								$pagina = 0;

								if($dados_busca == "")
								{
									$Comando_SQL = "select * from mgt_fornecedores order by mgt_fornecedor_numero";
								}else{
									if($opcao_busca == "Numero"){
										$Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_numero = '".$dados_busca."' order by mgt_fornecedor_numero";
									}
									elseif($opcao_busca == "CNPJ"){
										$Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_codigo like '%".$dados_busca."%' order by mgt_fornecedor_codigo";
									}
									elseif($opcao_busca == "Nome"){
										$Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_nome like '%".$dados_busca."%' order by mgt_fornecedor_nome";
									}
									elseif($opcao_busca == "Razao Social"){
										$Comando_SQL = "select * from mgt_fornecedores where mgt_fornecedor_razao_social like '%".$dados_busca."%' order by mgt_fornecedor_razao_social";
									}
								}

								$sql_fornecedor = mysql_query($Comando_SQL);

								for($ind=0; $ind < mysql_num_rows($sql_fornecedor); $ind++){

									if($cont == 1){
										ECHO "<TR>";
									}
							?>
									<TD WIDTH="262" HEIGHT="98" STYLE="padding-left:3px; padding-right:3px;">
										<SPAN CLASS="LETRA10">
											<?php
												echo mysql_result($sql_fornecedor,$ind,"mgt_fornecedor_razao_social")."<BR>";
												echo mysql_result($sql_fornecedor,$ind,"mgt_fornecedor_endereco")."<BR>";
												echo mysql_result($sql_fornecedor,$ind,"mgt_fornecedor_bairro")." - ".mysql_result($sql_fornecedor,$ind,"mgt_fornecedor_cidade")." - ".mysql_result($sql_fornecedor,$ind,"mgt_fornecedor_estado")."<BR>";
												echo "CEP: ".mysql_result($sql_fornecedor,$ind,"mgt_fornecedor_cep");
											?>
										</SPAN>
									</TD>
							<?php
									if($cont == 1 or $cont == 2){
										$cont++;
										echo "<TD WIDTH=\"014\" HEIGHT=\"98\"></TD>";
									}
									elseif($cont > 2){
										$cont = 1;
										echo "</TR>";
									}

									$pagina++;

									if($pagina >= 30){
										$pagina = 0;
										echo "<TR><TD COLSPAN=\"5\" WIDTH=\"814\" HEIGHT=\"60\"></TD></TR>";
									}

								}

								if($cont == 2){
							?>
										<TD WIDTH="262" HEIGHT="98" STYLE="padding-left:3px; padding-right:3px;"></TD>
										<TD WIDTH="014" HEIGHT="98"></TD>
										<TD WIDTH="262" HEIGHT="98" STYLE="padding-left:3px; padding-right:3px;"></TD>
									</TR>
							<?php
								}
								elseif($cont == 3){
							?>
										<TD WIDTH="262" HEIGHT="98" STYLE="padding-left:3px; padding-right:3px;"></TD>
									</TR>
							<?php
								}
							?>

						</TABLE>
					</TD>
				</TR>

			</TABLE>
		</TD>

	</TR>

</TABLE>

</BODY>
</HTML>