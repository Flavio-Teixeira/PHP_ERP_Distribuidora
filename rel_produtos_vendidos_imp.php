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

$dbname = "mgt_managertex";
$porta = "localhost";
$usuario = "root";
$senha = "liberar7777";

$nro_conexao = mysql_connect($porta, $usuario, $senha);
$res_conexao = mysql_select_db($dbname, $nro_conexao);

$sql_empresa = mysql_query("select * from mgt_empresas");

if(mysql_num_rows($sql_empresa) != 0)
{
   $mgt_empresa_apelido = mysql_result($sql_empresa, 0, "mgt_empresa_apelido");
}

function data_amd($data_exibicao)
{
   $data_exibicao = substr($data_exibicao, 6, 4) . "-" . substr($data_exibicao, 3, 2) . "-" . substr($data_exibicao, 0, 2);
   $data_exibicao = trim($data_exibicao);
   return $data_exibicao;
}
?>

<HTML>
<HEAD>
<TITLE> Relatorio de Produtos Vendidos </TITLE>
<HEAD>
</HEAD>

<STYLE TYPE="text/css">
	.LETRA10		{font-family:verdana,arial,helvetica,sans-serif; font-size:10px; color:#000000; text-decoration:none;}
	.LETRA15		{font-family:verdana,arial,helvetica,sans-serif; font-size:15px; color:#000000; text-decoration:none;}
</STYLE>

<BODY LEFTMARGIN="0" TOPMARGIN="0" BOTTOMMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0">

<CENTER>

<TABLE BORDER="0" WIDTH="755" CELLPADDING="0" CELLSPACING="0">

	<TR>
		<TD WIDTH="008"></TD>

		<TD WIDTH="717">
			<TABLE BORDER="0" WIDTH="717" CELLPADDING="0" CELLSPACING="0">

				<TR><TD WIDTH="717" HEIGHT="8"></TD></TR>

				<TR>
					<TD WIDTH="717">
						<TABLE BORDER="0" WIDTH="717" CELLPADDING="0" CELLSPACING="0">
							<TR>
								<TD WIDTH="091" HEIGHT="13"><SPAN CLASS="LETRA10"><B><?php echo $mgt_empresa_apelido;?></B></SPAN></TD>
								<TD WIDTH="379" HEIGHT="13"></TD>
								<TD WIDTH="042" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Data:</B></SPAN></TD>
								<TD WIDTH="075" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo date("d/m/Y", time());?></SPAN></TD>
								<TD WIDTH="030" HEIGHT="13"></TD>
								<TD WIDTH="041" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Hora:</B></SPAN></TD>
								<TD WIDTH="059" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo date("H:i:s", time());?></SPAN></TD>
							</TR>
						</TABLE>
					</TD>
				</TR>

				<TR><TD WIDTH="717" HEIGHT="4"></TD></TR>

				<TR>
					<TD WIDTH="717" HEIGHT="18" ALIGN="CENTER"><SPAN CLASS="LETRA15">Relatorio de Produtos Vendidos<?php if($tipo == "0"){ echo " por Cliente";}elseif($tipo == "1"){ echo " por Produto";}?></SPAN></TD>
				</TR>

				<TR><TD WIDTH="717" HEIGHT="11"></TD></TR>

				<TR>
					<TD WIDTH="717">
						<TABLE BORDER="0" WIDTH="717" CELLPADDING="0" CELLSPACING="0">
							<TR>
								<TD WIDTH="082" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Data Inicial:</B></SPAN></TD>
								<TD WIDTH="075" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo $data_inicial;?></SPAN></TD>
								<TD WIDTH="043" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><B>Ate</B></SPAN></TD>
								<TD WIDTH="082" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Data Final:</B></SPAN></TD>
								<TD WIDTH="075" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo $data_final;?></SPAN></TD>
								<TD WIDTH="360" HEIGHT="13"></TD>
							</TR>
						</TABLE>
					</TD>
				</TR>

				<TR><TD WIDTH="717" HEIGHT="11"></TD></TR>
				<TR><TD WIDTH="717" HEIGHT="01" BGCOLOR="#000000"></TD></TR>
				<TR><TD WIDTH="717" HEIGHT="11"></TD></TR>

				<?php
if($tipo == "0")
{
?>

					<?php
   if(trim($cfops) <> '')
   {
      $sql_clientes = mysql_query("
							select mgt_cliente_numero, mgt_cliente_razao_social
							from
								mgt_clientes, mgt_notas_fiscais
							where
								mgt_cliente_numero = mgt_nota_fiscal_cliente_numero and
								mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
								mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
                mgt_nota_fiscal_cfop IN (" . trim($cfops) . ")
							group by mgt_cliente_numero order by mgt_cliente_nome 
						");
   }
   else
   {
      $sql_clientes = mysql_query("
							select mgt_cliente_numero, mgt_cliente_razao_social
							from
								mgt_clientes, mgt_notas_fiscais
							where
								mgt_cliente_numero = mgt_nota_fiscal_cliente_numero and
								mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
								mgt_nota_fiscal_data <= '" . data_amd($data_final) . "'
							group by mgt_cliente_numero order by mgt_cliente_nome 
						");
   }

   for($ind1 = 0; $ind1 < mysql_num_rows($sql_clientes); $ind1++)
   {
      if(trim($cfops) <> '')
      {
         $sql_total_cliente = mysql_query("
								select sum(mgt_nota_fiscal_produto_quantidade) as qtd_total, sum(mgt_nota_fiscal_produto_valor_total) as valor_total
								from
									mgt_notas_fiscais, mgt_notas_fiscais_produtos
								where
									mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
									mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
                  mgt_nota_fiscal_cfop IN (" . trim($cfops) . ") and
									mgt_nota_fiscal_produto_numero_nota = mgt_nota_fiscal_numero and
									mgt_nota_fiscal_cliente_numero = '" . mysql_result($sql_clientes, $ind1, "mgt_cliente_numero") . "'
							");
      }
      else
      {
         $sql_total_cliente = mysql_query("
								select sum(mgt_nota_fiscal_produto_quantidade) as qtd_total, sum(mgt_nota_fiscal_produto_valor_total) as valor_total
								from
									mgt_notas_fiscais, mgt_notas_fiscais_produtos
								where
									mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
									mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
									mgt_nota_fiscal_produto_numero_nota = mgt_nota_fiscal_numero and
									mgt_nota_fiscal_cliente_numero = '" . mysql_result($sql_clientes, $ind1, "mgt_cliente_numero") . "'
							");
      }
?>
							<TR>
								<TD WIDTH="717">
									<TABLE BORDER="0" WIDTH="717" CELLPADDING="0" CELLSPACING="0">
										<TR>
											<TD WIDTH="050" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Codigo:</B></SPAN></TD>
											<TD WIDTH="060" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_clientes, $ind1, "mgt_cliente_numero");  ?></SPAN></TD>
											<TD WIDTH="080" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Razao Social:</B></SPAN></TD>
											<TD WIDTH="267" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_clientes, $ind1, "mgt_cliente_razao_social");  ?></SPAN></TD>
											<TD WIDTH="080" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Totais: Qtde:</B></SPAN></TD>
											<TD WIDTH="070" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_total_cliente, 0, "qtd_total");  ?></SPAN></TD>
											<TD WIDTH="040" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Valor:</B></SPAN></TD>
											<TD WIDTH="070" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_total_cliente, 0, "valor_total");  ?></SPAN></TD>
										</TR>
									</TABLE>
								</TD>
							</TR>

							<TR><TD WIDTH="717" HEIGHT="11"></TD></TR>

					<?php
      if(trim($cfops) <> '')
      {
         $sql_produtos = mysql_query("
								select mgt_nota_fiscal_produto_codigo, mgt_nota_fiscal_produto_descricao
								from
									mgt_clientes, mgt_notas_fiscais, mgt_notas_fiscais_produtos
								where
									mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
									mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
                  mgt_nota_fiscal_cfop IN (" . trim($cfops) . ") and
									mgt_nota_fiscal_numero = mgt_nota_fiscal_produto_numero_nota and
									mgt_cliente_numero = mgt_nota_fiscal_cliente_numero and
									mgt_nota_fiscal_cliente_numero = '" . mysql_result($sql_clientes, $ind1, "mgt_cliente_numero") . "'
								group by mgt_nota_fiscal_produto_codigo
							");
      }
      else
      {
         $sql_produtos = mysql_query("
								select mgt_nota_fiscal_produto_codigo, mgt_nota_fiscal_produto_descricao
								from
									mgt_clientes, mgt_notas_fiscais, mgt_notas_fiscais_produtos
								where
									mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
									mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
									mgt_nota_fiscal_numero = mgt_nota_fiscal_produto_numero_nota and
									mgt_cliente_numero = mgt_nota_fiscal_cliente_numero and
									mgt_nota_fiscal_cliente_numero = '" . mysql_result($sql_clientes, $ind1, "mgt_cliente_numero") . "'
								group by mgt_nota_fiscal_produto_codigo
							");
      }

      for($ind2 = 0; $ind2 < mysql_num_rows($sql_produtos); $ind2++)
      {
         if(trim($cfops) <> '')
         {
            $sql_total_produto = mysql_query("
									select sum(mgt_nota_fiscal_produto_quantidade) as qtd_total, sum(mgt_nota_fiscal_produto_valor_total) as valor_total
									from
										mgt_notas_fiscais, mgt_notas_fiscais_produtos
									where
										mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
										mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
                    mgt_nota_fiscal_cfop IN (" . trim($cfops) . ") and
										mgt_nota_fiscal_produto_numero_nota = mgt_nota_fiscal_numero and
										mgt_nota_fiscal_produto_codigo = '" . mysql_result($sql_produtos, $ind2, "mgt_nota_fiscal_produto_codigo") . "' and
										mgt_nota_fiscal_cliente_numero = '" . mysql_result($sql_clientes, $ind1, "mgt_cliente_numero") . "'
								");
         }
         else
         {
            $sql_total_produto = mysql_query("
									select sum(mgt_nota_fiscal_produto_quantidade) as qtd_total, sum(mgt_nota_fiscal_produto_valor_total) as valor_total
									from
										mgt_notas_fiscais, mgt_notas_fiscais_produtos
									where
										mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
										mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
										mgt_nota_fiscal_produto_numero_nota = mgt_nota_fiscal_numero and
										mgt_nota_fiscal_produto_codigo = '" . mysql_result($sql_produtos, $ind2, "mgt_nota_fiscal_produto_codigo") . "' and
										mgt_nota_fiscal_cliente_numero = '" . mysql_result($sql_clientes, $ind1, "mgt_cliente_numero") . "'
								");
         }
?>
								<TR>
									<TD WIDTH="717">
										<TABLE BORDER="0" WIDTH="717" CELLPADDING="0" CELLSPACING="0">
											<TR>
												<TD WIDTH="100" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Produto Codigo:</B></SPAN></TD>
												<TD WIDTH="060" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_produtos, $ind2, "mgt_nota_fiscal_produto_codigo");   ?></SPAN></TD>
												<TD WIDTH="070" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Descricao:</B></SPAN></TD>
												<TD WIDTH="227" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_produtos, $ind2, "mgt_nota_fiscal_produto_descricao");   ?></SPAN></TD>
												<TD WIDTH="050" HEIGHT="13" ALIGN="RIGHT"><SPAN CLASS="LETRA10"><B>Totais:&nbsp;</B></SPAN></TD>
												<TD WIDTH="100" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Qtde: </B><?php echo mysql_result($sql_total_produto, 0, "qtd_total");   ?></SPAN></TD>
												<TD WIDTH="110" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Valor: </B><?php echo mysql_result($sql_total_produto, 0, "valor_total");   ?></SPAN></TD>
											</TR>
										</TABLE>
									</TD>
								</TR>

								<TR>
									<TD WIDTH="717">
										<TABLE BORDER="0" WIDTH="717" CELLPADDING="0" CELLSPACING="0">
											<TR>
												<TD WIDTH="100" HEIGHT="13"></TD>
												<TD WIDTH="060" HEIGHT="13"></TD>
												<TD WIDTH="070" HEIGHT="13"></TD>
												<TD WIDTH="227" HEIGHT="13"></TD>
												<TD WIDTH="070" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><B>NF</B></SPAN></TD>
												<TD WIDTH="070" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><B>Qtde</B></SPAN></TD>
												<TD WIDTH="120" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><B>Preco Vendido (R$)</B></SPAN></TD>
											</TR>
										</TABLE>
									</TD>
								</TR>

					<?php
         if(trim($cfops) <> '')
         {
            $sql_notas = mysql_query("
									select mgt_nota_fiscal_numero, mgt_nota_fiscal_produto_quantidade, mgt_nota_fiscal_produto_valor_total
									from
										mgt_notas_fiscais, mgt_notas_fiscais_produtos
									where
										mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
										mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
                    mgt_nota_fiscal_cfop IN (" . trim($cfops) . ") and
										mgt_nota_fiscal_produto_codigo = '" . mysql_result($sql_produtos, $ind2, "mgt_nota_fiscal_produto_codigo") . "' and
										mgt_nota_fiscal_produto_numero_nota = mgt_nota_fiscal_numero and
										mgt_nota_fiscal_cliente_numero = '" . mysql_result($sql_clientes, $ind1, "mgt_cliente_numero") . "'
									order by mgt_nota_fiscal_produto_valor_total desc
								");
         }
         else
         {
            $sql_notas = mysql_query("
									select mgt_nota_fiscal_numero, mgt_nota_fiscal_produto_quantidade, mgt_nota_fiscal_produto_valor_total
									from
										mgt_notas_fiscais, mgt_notas_fiscais_produtos
									where
										mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
										mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
										mgt_nota_fiscal_produto_codigo = '" . mysql_result($sql_produtos, $ind2, "mgt_nota_fiscal_produto_codigo") . "' and
										mgt_nota_fiscal_produto_numero_nota = mgt_nota_fiscal_numero and
										mgt_nota_fiscal_cliente_numero = '" . mysql_result($sql_clientes, $ind1, "mgt_cliente_numero") . "'
									order by mgt_nota_fiscal_produto_valor_total desc
								");
         }

         for($ind3 = 0; $ind3 < mysql_num_rows($sql_notas); $ind3++)
         {
?>
									<TR>
										<TD WIDTH="717">
											<TABLE BORDER="0" WIDTH="717" CELLPADDING="0" CELLSPACING="0">
												<TR>
													<TD WIDTH="457" HEIGHT="13"></TD>
													<TD WIDTH="070" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_notas, $ind3, "mgt_nota_fiscal_numero");    ?></SPAN></TD>
													<TD WIDTH="070" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_notas, $ind3, "mgt_nota_fiscal_produto_quantidade");    ?></SPAN></TD>
													<TD WIDTH="120" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_notas, $ind3, "mgt_nota_fiscal_produto_valor_total");    ?></SPAN></TD>
												</TR>
											</TABLE>
										</TD>
									</TR>
					<?php
         }
?>
								<TR><TD WIDTH="717" HEIGHT="11"></TD></TR>
					<?php
      }
?>

							<TR><TD WIDTH="717" HEIGHT="11"></TD></TR>
							<TR><TD WIDTH="717" HEIGHT="01" BGCOLOR="#000000"></TD></TR>
							<TR><TD WIDTH="717" HEIGHT="11"></TD></TR>
					<?php
   }
?>

				<?php
}

elseif($tipo == "1")
{
?>

					<?php
   if(trim($cfops) <> '')
   {
      $sql_produtos = mysql_query("
							select mgt_nota_fiscal_produto_codigo, mgt_nota_fiscal_produto_descricao
							from
								mgt_notas_fiscais, mgt_notas_fiscais_produtos
							where
								mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
								mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
                mgt_nota_fiscal_cfop IN (" . trim($cfops) . ") and
								mgt_nota_fiscal_numero = mgt_nota_fiscal_produto_numero_nota
							group by mgt_nota_fiscal_produto_codigo
						");
   }
   else
   {
      $sql_produtos = mysql_query("
							select mgt_nota_fiscal_produto_codigo, mgt_nota_fiscal_produto_descricao
							from
								mgt_notas_fiscais, mgt_notas_fiscais_produtos
							where
								mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
								mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
								mgt_nota_fiscal_numero = mgt_nota_fiscal_produto_numero_nota
							group by mgt_nota_fiscal_produto_codigo
						");
   }

   for($ind1 = 0; $ind1 < mysql_num_rows($sql_produtos); $ind1++)
   {
      if(trim($cfops) <> '')
      {
         $sql_total_produto = mysql_query("
								select sum(mgt_nota_fiscal_produto_quantidade) as qtd_total, sum(mgt_nota_fiscal_produto_valor_total) as valor_total
								from
									mgt_notas_fiscais, mgt_notas_fiscais_produtos
								where
									mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
									mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
                  mgt_nota_fiscal_cfop IN (" . trim($cfops) . ") and
									mgt_nota_fiscal_produto_numero_nota = mgt_nota_fiscal_numero and
									mgt_nota_fiscal_produto_codigo = '" . mysql_result($sql_produtos, $ind1, "mgt_nota_fiscal_produto_codigo") . "'
							");
      }
      else
      {
         $sql_total_produto = mysql_query("
								select sum(mgt_nota_fiscal_produto_quantidade) as qtd_total, sum(mgt_nota_fiscal_produto_valor_total) as valor_total
								from
									mgt_notas_fiscais, mgt_notas_fiscais_produtos
								where
									mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
									mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
									mgt_nota_fiscal_produto_numero_nota = mgt_nota_fiscal_numero and
									mgt_nota_fiscal_produto_codigo = '" . mysql_result($sql_produtos, $ind1, "mgt_nota_fiscal_produto_codigo") . "'
							");
      }
?>
							<TR>
								<TD WIDTH="717">
									<TABLE BORDER="0" WIDTH="717" CELLPADDING="0" CELLSPACING="0">
										<TR>
											<TD WIDTH="100" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Produto Codigo:</B></SPAN></TD>
											<TD WIDTH="060" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_produtos, $ind1, "mgt_nota_fiscal_produto_codigo");  ?></SPAN></TD>
											<TD WIDTH="070" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Descricao:</B></SPAN></TD>
											<TD WIDTH="227" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_produtos, $ind1, "mgt_nota_fiscal_produto_descricao");  ?></SPAN></TD>
											<TD WIDTH="050" HEIGHT="13" ALIGN="RIGHT"><SPAN CLASS="LETRA10"><B>Totais:&nbsp;</B></SPAN></TD>
											<TD WIDTH="100" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Qtde: </B><?php echo mysql_result($sql_total_produto, 0, "qtd_total");  ?></SPAN></TD>
											<TD WIDTH="110" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Valor: </B><?php echo mysql_result($sql_total_produto, 0, "valor_total");  ?></SPAN></TD>
										</TR>
									</TABLE>
								</TD>
							</TR>

							<TR><TD WIDTH="717" HEIGHT="11"></TD></TR>

					<?php
      if(trim($cfops) <> '')
      {
         $sql_clientes = mysql_query("
								select mgt_cliente_numero, mgt_cliente_razao_social
								from
									mgt_clientes, mgt_notas_fiscais, mgt_notas_fiscais_produtos
								where
									mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
									mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
                  mgt_nota_fiscal_cfop IN (" . trim($cfops) . ") and
									mgt_cliente_numero = mgt_nota_fiscal_cliente_numero and
									mgt_nota_fiscal_numero = mgt_nota_fiscal_produto_numero_nota and
									mgt_nota_fiscal_produto_codigo = '" . mysql_result($sql_produtos, $ind1, "mgt_nota_fiscal_produto_codigo") . "'
								group by mgt_cliente_numero, mgt_cliente_razao_social
							");
      }
      else
      {
         $sql_clientes = mysql_query("
								select mgt_cliente_numero, mgt_cliente_razao_social
								from
									mgt_clientes, mgt_notas_fiscais, mgt_notas_fiscais_produtos
								where
									mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
									mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
									mgt_cliente_numero = mgt_nota_fiscal_cliente_numero and
									mgt_nota_fiscal_numero = mgt_nota_fiscal_produto_numero_nota and
									mgt_nota_fiscal_produto_codigo = '" . mysql_result($sql_produtos, $ind1, "mgt_nota_fiscal_produto_codigo") . "'
								group by mgt_cliente_numero, mgt_cliente_razao_social
							");
      }

      for($ind2 = 0; $ind2 < mysql_num_rows($sql_clientes); $ind2++)
      {
         if(trim($cfops) <> '')
         {
            $sql_total_cliente = mysql_query("
									select sum(mgt_nota_fiscal_produto_quantidade) as qtd_total, sum(mgt_nota_fiscal_produto_valor_total) as valor_total
									from
										mgt_clientes, mgt_notas_fiscais, mgt_notas_fiscais_produtos
									where
										mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
										mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
                    mgt_nota_fiscal_cfop IN (" . trim($cfops) . ") and
										mgt_cliente_numero = mgt_nota_fiscal_cliente_numero and
										mgt_nota_fiscal_produto_numero_nota = mgt_nota_fiscal_numero and
										mgt_nota_fiscal_produto_codigo = '" . mysql_result($sql_produtos, $ind1, "mgt_nota_fiscal_produto_codigo") . "' and
										mgt_cliente_numero = '" . mysql_result($sql_clientes, $ind2, "mgt_cliente_numero") . "'
								");
         }
         else
         {
            $sql_total_cliente = mysql_query("
									select sum(mgt_nota_fiscal_produto_quantidade) as qtd_total, sum(mgt_nota_fiscal_produto_valor_total) as valor_total
									from
										mgt_clientes, mgt_notas_fiscais, mgt_notas_fiscais_produtos
									where
										mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
										mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
										mgt_cliente_numero = mgt_nota_fiscal_cliente_numero and
										mgt_nota_fiscal_produto_numero_nota = mgt_nota_fiscal_numero and
										mgt_nota_fiscal_produto_codigo = '" . mysql_result($sql_produtos, $ind1, "mgt_nota_fiscal_produto_codigo") . "' and
										mgt_cliente_numero = '" . mysql_result($sql_clientes, $ind2, "mgt_cliente_numero") . "'
								");
         }
?>
								<TR>
									<TD WIDTH="717">
										<TABLE BORDER="0" WIDTH="717" CELLPADDING="0" CELLSPACING="0">
											<TR>
												<TD WIDTH="050" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Codigo:</B></SPAN></TD>
												<TD WIDTH="060" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_clientes, $ind2, "mgt_cliente_numero");   ?></SPAN></TD>
												<TD WIDTH="080" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Razao Social:</B></SPAN></TD>
												<TD WIDTH="267" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_clientes, $ind2, "mgt_cliente_razao_social");   ?></SPAN></TD>
												<TD WIDTH="080" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Totais: Qtde:</B></SPAN></TD>
												<TD WIDTH="070" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_total_cliente, 0, "qtd_total");   ?></SPAN></TD>
												<TD WIDTH="040" HEIGHT="13"><SPAN CLASS="LETRA10"><B>Valor:</B></SPAN></TD>
												<TD WIDTH="070" HEIGHT="13"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_total_cliente, 0, "valor_total");   ?></SPAN></TD>
											</TR>
										</TABLE>
									</TD>
								</TR>

								<TR>
									<TD WIDTH="717">
										<TABLE BORDER="0" WIDTH="717" CELLPADDING="0" CELLSPACING="0">
											<TR>
												<TD WIDTH="100" HEIGHT="13"></TD>
												<TD WIDTH="060" HEIGHT="13"></TD>
												<TD WIDTH="070" HEIGHT="13"></TD>
												<TD WIDTH="227" HEIGHT="13"></TD>
												<TD WIDTH="070" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><B>NF</B></SPAN></TD>
												<TD WIDTH="070" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><B>Qtde</B></SPAN></TD>
												<TD WIDTH="120" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><B>Preco Vendido (R$)</B></SPAN></TD>
											</TR>
										</TABLE>
									</TD>
								</TR>

					<?php
         if(trim($cfops) <> '')
         {
            $sql_notas = mysql_query("
									select mgt_nota_fiscal_numero, mgt_nota_fiscal_produto_quantidade, mgt_nota_fiscal_produto_valor_total
									from
										mgt_notas_fiscais, mgt_notas_fiscais_produtos
									where
										mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
										mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
                    mgt_nota_fiscal_cfop IN (" . trim($cfops) . ") and
										mgt_nota_fiscal_produto_codigo = '" . mysql_result($sql_produtos, $ind1, "mgt_nota_fiscal_produto_codigo") . "' and
										mgt_nota_fiscal_produto_numero_nota = mgt_nota_fiscal_numero and
										mgt_nota_fiscal_cliente_numero = '" . mysql_result($sql_clientes, $ind2, "mgt_cliente_numero") . "'
									order by mgt_nota_fiscal_produto_valor_total desc
								");
         }
         else
         {
            $sql_notas = mysql_query("
									select mgt_nota_fiscal_numero, mgt_nota_fiscal_produto_quantidade, mgt_nota_fiscal_produto_valor_total
									from
										mgt_notas_fiscais, mgt_notas_fiscais_produtos
									where
										mgt_nota_fiscal_data >= '" . data_amd($data_inicial) . "' and
										mgt_nota_fiscal_data <= '" . data_amd($data_final) . "' and
										mgt_nota_fiscal_produto_codigo = '" . mysql_result($sql_produtos, $ind1, "mgt_nota_fiscal_produto_codigo") . "' and
										mgt_nota_fiscal_produto_numero_nota = mgt_nota_fiscal_numero and
										mgt_nota_fiscal_cliente_numero = '" . mysql_result($sql_clientes, $ind2, "mgt_cliente_numero") . "'
									order by mgt_nota_fiscal_produto_valor_total desc
								");
         }

         for($ind3 = 0; $ind3 < mysql_num_rows($sql_notas); $ind3++)
         {
?>
									<TR>
										<TD WIDTH="717">
											<TABLE BORDER="0" WIDTH="717" CELLPADDING="0" CELLSPACING="0">
												<TR>
													<TD WIDTH="457" HEIGHT="13"></TD>
													<TD WIDTH="070" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_notas, $ind3, "mgt_nota_fiscal_numero");    ?></SPAN></TD>
													<TD WIDTH="070" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_notas, $ind3, "mgt_nota_fiscal_produto_quantidade");    ?></SPAN></TD>
													<TD WIDTH="120" HEIGHT="13" ALIGN="CENTER"><SPAN CLASS="LETRA10"><?php echo mysql_result($sql_notas, $ind3, "mgt_nota_fiscal_produto_valor_total");    ?></SPAN></TD>
												</TR>
											</TABLE>
										</TD>
									</TR>
					<?php
         }
?>
								<TR><TD WIDTH="717" HEIGHT="11"></TD></TR>
					<?php
      }
?>

							<TR><TD WIDTH="717" HEIGHT="11"></TD></TR>
							<TR><TD WIDTH="717" HEIGHT="01" BGCOLOR="#000000"></TD></TR>
							<TR><TD WIDTH="717" HEIGHT="11"></TD></TR>
					<?php
   }
?>

				<?php
}
?>

			</TABLE>
		</TD>

		<TD WIDTH="030"></TD>
	</TR>

</TABLE>

</BODY>
</HTML>