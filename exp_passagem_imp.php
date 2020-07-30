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

$mgt_expedicao_nro = $_REQUEST['mgt_expedicao_nro'];

$Comando_SQL = "Select ";
$Comando_SQL .= "mgt_expedicao_nro, ";
$Comando_SQL .= "date_format(mgt_expedicao_data_solicitacao, '%d/%m/%Y') AS mgt_expedicao_data_solicitacao, ";
$Comando_SQL .= "mgt_expedicao_solicitante, ";
$Comando_SQL .= "mgt_expedicao_codigo, ";
$Comando_SQL .= "mgt_expedicao_descricao, ";
$Comando_SQL .= "if((mgt_expedicao_qtde_solicitada - truncate( mgt_expedicao_qtde_solicitada, 0 ) ) >0, mgt_expedicao_qtde_solicitada, substring( mgt_expedicao_qtde_solicitada, 1, length( mgt_expedicao_qtde_solicitada ) -4 )) As mgt_expedicao_qtde_solicitada, ";
$Comando_SQL .= "if((mgt_expedicao_qtde_entregue - truncate( mgt_expedicao_qtde_entregue, 0 ) ) >0, mgt_expedicao_qtde_entregue, substring( mgt_expedicao_qtde_entregue, 1, length( mgt_expedicao_qtde_entregue ) -4 )) As mgt_expedicao_qtde_entregue, ";
$Comando_SQL .= "date_format(mgt_expedicao_data_entregua, '%d/%m/%Y') AS mgt_expedicao_data_entregua, ";
$Comando_SQL .= "mgt_expedicao_status, ";
$Comando_SQL .= "mgt_expedicao_observacao ";
$Comando_SQL .= "from ";
$Comando_SQL .= "mgt_expedicao ";
$Comando_SQL .= "where ";
$Comando_SQL .= "mgt_expedicao_nro = " . $mgt_expedicao_nro . " ";

GetConexaoPrincipal()->SQL_MGT_Expedicao->Close();
GetConexaoPrincipal()->SQL_MGT_Expedicao->SQL = $Comando_SQL;
GetConexaoPrincipal()->SQL_MGT_Expedicao->Open();

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
         $x = 10;
         $y = 5;
         $w = round($this->wPrint * 0 . 41, 0);// 80;
         $w1 = $w;
         $h = 32;

         $logoInfo = getimagesize('imagens/logo_danfe.jpg');
         //*** largura da imagem em mm ***
         $logoWmm = ($logoInfo[0] / 72) * 25.4;
         //*** altura da imagem em mm ***
         $logoHmm = ($logoInfo[1] / 72) * 25.4;

         $nImgH = round($h / 2, 0);
         $nImgW = round($logoWmm * ($nImgH / $logoHmm), 0);
         $xImg = round(($w - $nImgW) / 2 + $x, 0);
         $yImg = $y + 3;
         $x1 = $x;
         $y1 = round($yImg + $nImgH + 1, 0);
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

      $this->Cell(135, 5, '', $borda, 1, 'L');
      $this->SetFont('Arial', 'B', 8);
      $this->Cell(10, 5, 'Data da Producao: ' . GetConexaoPrincipal()->SQL_MGT_Expedicao->Fields['mgt_expedicao_data_solicitacao'], $borda, 1, 'L');
      $this->Cell(10, 5, 'Producao: ' . strtoupper(GetConexaoPrincipal()->SQL_MGT_Expedicao->Fields['mgt_expedicao_solicitante']), $borda, 1, 'L');
      $this->Cell(10, 5, ' ', $borda, 1, 'L');

      //$this->line(10, $this->GetY() - 1, 200, $this->GetY() - 1);// Desenha uma linha

      //*** Titulo dos Campos do Relatorio ***
      $borda = 1;
      $this->SetFont('Arial', 'BI', 8);
      $this->Cell(35, 5, 'Codigo', $borda, 0, 'L');
      $this->Cell(105, 5, 'Descricao', $borda, 0, 'L');
      $this->Cell(25, 5, 'Qtde Produzida', $borda, 0, 'R');
      $this->Cell(25, 5, 'Qtde Entregue', $borda, 1, 'R');
      $borda = 0;

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

   $mgt_expedicao_nro = $_REQUEST['mgt_expedicao_nro'];

   $pdf = new PDF('P');// relatorio em orientacao "paisagem"

   $pdf->SetName("PASSAGEM DA EXPEDICAO - Nro.: " . trim($mgt_expedicao_nro));

   $pdf->Open();
   $pdf->AddPage();
   $pdf->SetFont('Arial', '', 8);

   //*** Detalhe dos Itens ***

   //*** Lista o Detalhe ***

   $borda = 1;
   $eixo_y = $pdf->GetY();
   $pdf->Cell(35, 5, GetConexaoPrincipal()->SQL_MGT_Expedicao->Fields['mgt_expedicao_codigo'], $borda, 0, 'L');
   $eixo_x = $pdf->GetX();
   $eixo_y = $pdf->GetY();
   $pdf->MultiCell(105, 5, GetConexaoPrincipal()->SQL_MGT_Expedicao->Fields['mgt_expedicao_descricao'], $borda, 'L');
   $eixo_y_2 = $pdf->GetY();
   $pdf->SetXY($eixo_x + 105, $eixo_y);
   $pdf->Cell(25, 5, GetConexaoPrincipal()->SQL_MGT_Expedicao->Fields['mgt_expedicao_qtde_solicitada'], $borda, 0, 'R');

   if(GetConexaoPrincipal()->SQL_MGT_Expedicao->Fields['mgt_expedicao_qtde_entregue'] > 0)
   {
      $pdf->Cell(25, 5, GetConexaoPrincipal()->SQL_MGT_Expedicao->Fields['mgt_expedicao_qtde_entregue'], $borda, 1, 'R');
   }
   else
   {
      $pdf->Cell(25, 5, ' ', $borda, 1, 'R');
   }

   $pdf->SetY($eixo_y_2);

   //*** Totais ***

   $pdf->line(10, $pdf->GetY(), 200, $pdf->GetY());// Desenha uma linha

   $borda = 0;
   $pdf->SetFont('Arial', '', 8);
   $pdf->Cell(95, 5, ' ', $borda, 1, 'L');
   $pdf->Cell(95, 5, ' ', $borda, 0, 'L');
   $pdf->Cell(95, 5, 'Data de Entrega: ______ / ______ / __________ ', $borda, 1, 'C');

   $pdf->Cell(95, 5, ' ', $borda, 1, 'L');
   $pdf->Cell(95, 5, ' ', $borda, 1, 'L');
   $pdf->Cell(95, 5, ' ', $borda, 1, 'L');

   $pdf->Cell(95, 5, '______________________________', $borda, 0, 'C');
   $pdf->Cell(95, 5, '______________________________', $borda, 1, 'C');

   $pdf->Cell(95, 5, 'Assinatura do Producao', $borda, 0, 'C');
   $pdf->Cell(95, 5, 'Assinatura da Expedicao', $borda, 1, 'C');

   $pdf->Output();
}

PDF_Detalhe();

?>