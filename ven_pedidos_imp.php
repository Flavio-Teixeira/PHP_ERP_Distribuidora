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
//*** Carrega as VCLs ***
require_once("vcl/vcl.inc.php");

//*** Includes ***
require_once("conexao_principal.php");
use_unit("dbgrids.inc.php");
use_unit("comctrls.inc.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Valida a Sessao ***
require_once("includes/valida_sessao.inc.php");

//*** FPDF ***
require_once("FPDF/fpdf.php");

//*** Executa as Selecoes do SQL ***

$mgt_pedido_numero = $_REQUEST['mgt_pedido_numero'];

class PDF extends FPDF
{
   //*************************************
   //*** Seta as Definicoes Principais ***
   //*************************************

   var $nome_relatorio;

   function PDF($or = 'P')
   {
      $this->FPDF($or);
   }

   function SetName($nomerel)
   {
      $this->nome_relatorio = $nomerel;
   }

   //***************************************
   //*** INICIO - Cabecalho do Relatorio ***
   //***************************************

   function Header()
   {

      $borda = 0;// 0-Celula Sem Borda | 1-Celula Com Borda
      $this->AliasNbPages();

      $this->SetFont('Arial', '', 6);

      if(file_exists('imagens/logo_danfe.jpg'))
      {
         $x=10;
         $y=5;
         $w=round($this->wPrint*0.41,0);// 80;
         $w1 = $w;
         $h=32;

         $logoInfo = getimagesize('imagens/logo_danfe.jpg');
         //*** largura da imagem em mm ***
         $logoWmm = ($logoInfo[0]/72)*25.4;
         //*** altura da imagem em mm ***
         $logoHmm = ($logoInfo[1]/72)*25.4;
            
         $nImgH = round($h/2,0);
         $nImgW = round($logoWmm * ($nImgH/$logoHmm),0);
         $xImg = round(($w-$nImgW)/2+$x,0);
         $yImg = $y+3;
         $x1 = $x;
         $y1 = round($yImg + $nImgH + 1,0);
         $tw = $w;

         $this->Image('imagens/logo_danfe.jpg', 10, 5, $nImgW, $nImgH, 'jpeg');
      }
      else
      {
         $this->Cell(25, 1, $_SESSION['login_empresa'], $borda, 0);
      }

      $this->SetX(135);
      $this->Cell(25, 1, "Data: " . date("d/m/Y", time()), $borda, 0);
      $this->Cell(25, 1, "Hora: " . date("H:i:s", time()), $borda, 0);
      $this->Cell(25, 1, "Pagina: " . $this->PageNo() . "/{nb}", $borda, 1);

      //*** Titulo do Relatorio ***
      $this->SetFont('Arial', 'B', 8);
      $this->Cell(200, 10, $this->nome_relatorio, $borda, 1, 'C');

      //*** Complemento do Cabecalho do Relatorio ***
      $this->SetFont('Arial', 'B', 8);
      $this->Cell(12, 5, '', $borda, 0, 'L');
      $this->Cell(15, 5, '', $borda, 0, 'L');
      $this->Cell(30, 5, 'Cliente Codigo', $borda, 0, 'L');
      $this->Cell(135, 5, 'Cliente Nome', $borda, 1, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(12, 5, 'Cliente:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(15, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_numero'], $borda, 0, 'L');

      $this->SetFont('Arial', '', 8);
      $this->Cell(30, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_codigo'], $borda, 0, 'L');

      $this->SetFont('Arial', '', 8);
      $this->Cell(135, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_nome'], $borda, 1, 'L');

      $this->Cell(135, 5, '', $borda, 1, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(10, 5, 'Adicionais:', $borda, 1, 'L');
      $this->line(10, $this->GetY() - 1, 200, $this->GetY() - 1);// Desenha uma linha

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(22, 5, 'Desconto (%):', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(22, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_desconto'], $borda, 0, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(20, 5, 'DT.Inclusao:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(20, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_data'], $borda, 0, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(30, 5, 'Previsao de Entrega:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(30, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_data_entrega'], $borda, 1, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(22, 5, 'Solicitacao:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(22, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_tipo_faturamento'], $borda, 0, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(25, 5, 'Transportadora:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(25, 5, trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_transportadora']) . ' - ' . trim(GetConexaoPrincipal()->SQL_MGT_Transportadoras->Fields['mgt_transportadora_nome']), $borda, 1, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(35, 5, 'Nro. Ordem de Compra:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(35, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_ordem_compra'], $borda, 0, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(20, 5, 'Observacao:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->MultiCell(100, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_observacao'], $borda, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(36, 5, 'Condicao de Pagamento:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);

      $condicao_pagto = GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_1'];
      $condicao_pagto .= ((trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_2']) > 0) ? ' | ' . trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_2']) : '');
      $condicao_pagto .= ((trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_3']) > 0) ? ' | ' . trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_3']) : '');
      $condicao_pagto .= ((trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_4']) > 0) ? ' | ' . trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_4']) : '');
      $condicao_pagto .= ((trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_5']) > 0) ? ' | ' . trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_5']) : '');
      $condicao_pagto .= ((trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_6']) > 0) ? ' | ' . trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_6']) : '');
      $condicao_pagto .= ((trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_7']) > 0) ? ' | ' . trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_7']) : '');
      $condicao_pagto .= ((trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_8']) > 0) ? ' | ' . trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_8']) : '');
      $condicao_pagto .= ((trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_9']) > 0) ? ' | ' . trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_9']) : '');
      $condicao_pagto .= ((trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_10']) > 0) ? ' | ' . trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_10']) : '');
      $condicao_pagto .= ((trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_11']) > 0) ? ' | ' . trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_11']) : '');
      $condicao_pagto .= ((trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_12']) > 0) ? ' | ' . trim(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_cliente_condicao_pgto_12']) : '');
      $this->MultiCell(50, 5, $condicao_pagto, $borda, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(23, 5, 'Representante:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(23, 5, trim(GetConexaoPrincipal()->SQL_MGT_Representantes->Fields['mgt_representante_codigo']) . ' - ' . trim(GetConexaoPrincipal()->SQL_MGT_Representantes->Fields['mgt_representante_nome']), $borda, 1, 'L');

      $this->Cell(135, 5, '', $borda, 1, 'L');
      $this->SetFont('Arial', 'B', 8);
      $this->Cell(10, 5, 'Produtos:', $borda, 1, 'L');
      $this->line(10, $this->GetY() - 1, 200, $this->GetY() - 1);// Desenha uma linha

      //*** Titulo dos Campos do Relatorio ***
      $this->SetFont('Arial', 'BI', 8);
      $this->Cell(15, 5, 'Codigo', $borda, 0, 'L');
      $this->Cell(17, 5, 'Referencia', $borda, 0, 'L');
      $this->Cell(45, 5, 'Descricao', $borda, 0, 'L');
      $this->Cell(13, 5, 'Lote', $borda, 0, 'L');
      $this->Cell(12, 5, 'Unidade', $borda, 0, 'L');
      $this->Cell(10, 5, 'IPI(%)', $borda, 0, 'R');
      $this->Cell(10, 5, 'Vlr.IPI', $borda, 0, 'R');
      $this->Cell(15, 5, 'Qtde', $borda, 0, 'R');
      $this->Cell(18, 5, 'Vlr.Unitario', $borda, 0, 'R');
      $this->Cell(17, 5, 'Vlr.ST', $borda, 0, 'R');
      $this->Cell(18, 5, 'Vlr.Total', $borda, 1, 'R');

      $this->line(10, $this->GetY(), 200, $this->GetY());// Desenha uma linha
   }

   //***************************************
   //*** FINAL - Cabecalho do Relatorio  ***
   //***************************************

   //************************************
   //*** INICIO - Rodape do Relatorio ***
   //************************************

   function Footer()
   {
      $this->SetXY( - 10, - 5);
      $this->line(10, $this->GetY() - 2, $this->GetX(), $this->GetY() - 2);
      $this->SetX(0);
      $this->SetFont('Arial', 'I', 6);
      $this->Cell(200, 1, "ManagerTEX (NFe 3.10) - www.datatex.com.br", $borda, 0, 'R');
   }

   //************************************
   //*** FINAL - Rodape do Relatorio  ***
   //************************************
}

function PDF_Detalhe()
{
   //*** Executa as Selecoes do SQL ***

   $mgt_pedido_numero = $_REQUEST['mgt_pedido_numero'];

   $pdf = new PDF('P');// relatorio em orientacao "paisagem"

   $pdf->SetName("Pedido - Nro.: " . trim($mgt_pedido_numero));

   $pdf->Open();
   $pdf->AddPage();
   $pdf->SetFont('Arial', '', 8);

   //*** Detalhe dos Itens ***

   $T_valor_ipi = 0;
   $T_valor_unitario = 0;
   $T_valor_st = 0;
   $T_valor_total = 0;

   while((GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->EOF) <> 1)
   {
      if(trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_nao_calcula_st']) <> 'S')
      {
         //*** Seleciona o Produtos ***
         $Comando_SQL = "select * from mgt_produtos where mgt_produto_codigo = '" . trim(GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_codigo']) . "' order by mgt_produto_codigo";

         GetConexaoPrincipal()->SQL_MGT_Produtos->Close();
         GetConexaoPrincipal()->SQL_MGT_Produtos->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Produtos->Open();

         //*** Seleciona o IVA ***
         $Comando_SQL = "select * from mgt_ivas";
         $Comando_SQL .= " where ";
         $Comando_SQL .= "mgt_iva_estado = '" . trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_estado']) . "' and ";
         $Comando_SQL .= "mgt_iva_ncm = '" . trim(GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_ncm']) . "'";

         GetConexaoPrincipal()->SQL_MGT_IVA->Close();
         GetConexaoPrincipal()->SQL_MGT_IVA->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_IVA->Open();

         $iva = 0;
         $aliquota_interna = trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_icms']);
         $base_icms_st = 0;
         $base_icms_st_sem_ipi = 0;
         $valor_icms_st = 0;

         if((GetConexaoPrincipal()->SQL_MGT_IVA->EOF) != 1)
         {
            $iva = GetConexaoPrincipal()->SQL_MGT_IVA->Fields['mgt_iva_valor'];
            $aliquota_interna = trim(GetConexaoPrincipal()->SQL_MGT_IVA->Fields['mgt_iva_aliquota_interna']);
         }

         $vlr_produto_substituicao = GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_valor_total'] + GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_valor_ipi'];
         $vlr_produto_substituicao = (($vlr_produto_substituicao * $iva) / 100);

         $base_icms_st = $vlr_produto_substituicao + (GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_valor_total'] + GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_valor_ipi']);
         $base_icms_st_sem_ipi = GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_valor_total'];

         $valor_icms_st = number_format(((($base_icms_st * $aliquota_interna) / 100) - (($base_icms_st_sem_ipi * trim(GetConexaoPrincipal()->SQL_MGT_Clientes->Fields['mgt_cliente_icms'])) / 100)), "2", ".", "");
      }

      //*** Lista o Detalhe ***

      $vlr_qtde_inteiro = (int)GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_quantidade'];
      $vlr_qtde_normal = GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_quantidade'];
      $vlr_qtde_resultado = $vlr_qtde_normal - $vlr_qtde_inteiro;

      $eixo_y = $pdf->GetY();
      $pdf->Cell(15, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_codigo'], $borda, 0, 'L');
      $pdf->Cell(17, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_referencia'], $borda, 0, 'L');
      $eixo_x = $pdf->GetX();
      $eixo_y = $pdf->GetY();
      $pdf->MultiCell(45, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_descricao'], $borda, 'L');
      $eixo_y_2 = $pdf->GetY();
      $pdf->SetXY($eixo_x + 45, $eixo_y);
      $pdf->Cell(13, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_lote'], $borda, 0, 'L');
      $pdf->Cell(12, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_unidade'], $borda, 0, 'L');
      $pdf->Cell(10, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_ipi'], $borda, 0, 'R');
      $pdf->Cell(10, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_valor_ipi'], $borda, 0, 'R');
      $pdf->Cell(15, 5, (($vlr_qtde_resultado > 0) ? GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_quantidade'] : (int)GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_quantidade']), $borda, 0, 'R');
      $pdf->Cell(18, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_valor_unitario'], $borda, 0, 'R');
      $pdf->Cell(17, 5, number_format($valor_icms_st, "2", ".", ""), $borda, 0, 'R');
      $pdf->Cell(18, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_valor_total'], $borda, 1, 'R');
      $pdf->SetY($eixo_y_2);

      $T_valor_ipi = $T_valor_ipi + GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_valor_ipi'];
      $T_valor_unitario = $T_valor_unitario + GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_valor_unitario'];
      $T_valor_st = $T_valor_st + $valor_icms_st;
      $T_valor_total = $T_valor_total + GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->Fields['mgt_pedido_produto_valor_total'];

      GetConexaoPrincipal()->SQL_MGT_Pedidos_Produtos->next();
   }

   //*** Totais ***

   $pdf->line(10, $pdf->GetY(), 200, $pdf->GetY());// Desenha uma linha

   $pdf->SetFont('Arial', 'B', 8);
   $pdf->Cell(15, 5, '', $borda, 0, 'L');
   $pdf->Cell(17, 5, '', $borda, 0, 'L');
   $pdf->Cell(45, 5, 'Totais:', $borda, 'L');
   $pdf->Cell(13, 5, '', $borda, 0, 'L');
   $pdf->Cell(12, 5, '', $borda, 0, 'L');
   $pdf->Cell(10, 5, '', $borda, 0, 'R');
   $pdf->Cell(10, 5, number_format($T_valor_ipi, "2", ".", ""), $borda, 0, 'R');
   $pdf->Cell(15, 5, '', $borda, 0, 'R');
   $pdf->Cell(18, 5, number_format($T_valor_unitario, "5", ".", ""), $borda, 0, 'R');
   $pdf->Cell(17, 5, number_format($T_valor_st, "2", ".", ""), $borda, 0, 'R');
   $pdf->Cell(18, 5, number_format($T_valor_total, "2", ".", ""), $borda, 1, 'R');

   $pdf->line(10, $pdf->GetY(), 200, $pdf->GetY());// Desenha uma linha

   $pdf->SetFont('Arial', 'B', 8);
   $pdf->Cell(43, 5, '', $borda, 0, 'L');
   $pdf->Cell(17, 5, 'Vlr.Pedido:', $borda, 0, 'L');
   $pdf->SetFont('Arial', '', 8);
   $pdf->Cell(20, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_valor_pedido'], $borda, 0, 'L');
   $pdf->SetFont('Arial', 'B', 8);
   $pdf->Cell(20, 5, 'Vlr.Desconto:', $borda, 0, 'L');
   $pdf->SetFont('Arial', '', 8);
   $pdf->Cell(20, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_valor_desconto'], $borda, 0, 'L');
   $pdf->SetFont('Arial', 'B', 8);
   $pdf->Cell(15, 5, 'Vlr.Frete:', $borda, 0, 'L');
   $pdf->SetFont('Arial', '', 8);
   $pdf->Cell(20, 5, GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_valor_frete'], $borda, 0, 'L');
   $pdf->SetFont('Arial', 'B', 8);
   $pdf->Cell(15, 5, 'Vlr.Total:', $borda, 0, 'L');
   $pdf->SetFont('Arial', '', 8);
   $pdf->Cell(20, 5, number_format(GetConexaoPrincipal()->SQL_MGT_Pedidos->Fields['mgt_pedido_valor_total'] + $T_valor_st, "2", ".", ""), $borda, 1, 'R');

   $pdf->line(10, $pdf->GetY(), 200, $pdf->GetY());// Desenha uma linha

   $pdf->Output();
}

PDF_Detalhe();

?>