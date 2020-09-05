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

$mgt_produto_codigo = $_REQUEST['mgt_produto_codigo'];

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
      $this->Cell(19, 5, '', $borda, 0, 'L');
      $this->Cell(30, 5, 'Codigo', $borda, 0, 'L');
      $this->Cell(135, 5, 'Descricao', $borda, 1, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(19, 5, 'Produto:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(30, 5, GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_codigo'], $borda, 0, 'L');

      $this->SetFont('Arial', '', 8);
      $this->Cell(135, 5, GetConexaoPrincipal()->SQL_MGT_Produtos->Fields['mgt_produto_descricao'], $borda, 0, 'L');

      $this->Cell(135, 5, '', $borda, 1, 'L');
      $this->SetFont('Arial', 'B', 8);
      $this->Cell(10, 5, 'Estrutura:', $borda, 1, 'L');
      $this->line(10, $this->GetY() - 1, 200, $this->GetY() - 1);// Desenha uma linha

      //*** Titulo dos Campos do Relatorio ***
      $this->SetFont('Arial', 'BI', 8);
      $this->Cell(25, 5, 'Codigo', $borda, 0, 'L');
      $this->Cell(102,5, 'Descricao', $borda, 0, 'L');
      $this->Cell(15, 5, 'Qtde', $borda, 0, 'R');
	  $this->Cell(8,  5, 'Tipo', $borda, 0, 'L');
      $this->Cell(12, 5, 'Medida', $borda, 0, 'L');
      $this->Cell(18, 5, 'Vlr.Unitario', $borda, 0, 'R');
      $this->Cell(10, 5, 'Nivel', $borda, 1, 'R');

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

   $mgt_produto_codigo = $_REQUEST['mgt_produto_codigo'];

   $pdf = new PDF('P');// relatorio em orientacao "paisagem"

   $pdf->SetName("Estrutura do Produto - Codigo: " . trim($mgt_produto_codigo));

   $pdf->Open();
   $pdf->AddPage();
   $pdf->SetFont('Arial', '', 8);

   //*** Detalhe dos Itens ***

   while((GetConexaoPrincipal()->SQL_MGT_Estruturas->EOF) <> 1)
   {
      //*** Lista o Detalhe ***

      $eixo_y = $pdf->GetY();
      $pdf->Cell(25, 5, GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_codigo_estrutura'], $borda, 0, 'L');
      $eixo_x = $pdf->GetX();
      $eixo_y = $pdf->GetY();
      $pdf->MultiCell(102, 5, GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_descricao'], $borda, 'L');
      $eixo_y_2 = $pdf->GetY();
      $pdf->SetXY($eixo_x + 102, $eixo_y);

	  if( (GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_qtde'] - intval(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_qtde'])) > 0 )
	  {
        $pdf->Cell(15, 5, GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_qtde'], $borda, 0, 'R');
      }
	  else
	  {
        $pdf->Cell(15, 5, intval(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_qtde']), $borda, 0, 'R');
      }

	  $pdf->Cell(8,  5, GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_tipo_estrutura'], $borda, 0, 'L');
      $pdf->Cell(12, 5, GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_medida'], $borda, 0, 'L');
      $pdf->Cell(18, 5, number_format(GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_custo_unitario'], "2", ".", ""), $borda, 0, 'R');
      $pdf->Cell(10, 5, GetConexaoPrincipal()->SQL_MGT_Estruturas->Fields['mgt_estrutura_nivel'], $borda, 1, 'R');
      $pdf->SetY($eixo_y_2);

      GetConexaoPrincipal()->SQL_MGT_Estruturas->next();
   }

   $pdf->line(10, $pdf->GetY(), 200, $pdf->GetY());// Desenha uma linha

   $pdf->Output();
}

PDF_Detalhe();

?>