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

$mgt_planejamento_necessidade_nro = $_REQUEST['mgt_planejamento_necessidade_nro'];

//*** Seleciona o Programa de Producao ***

$Comando_SQL = "select ";
$Comando_SQL .= "mgt_programa_producao_nro, ";
$Comando_SQL .= "mgt_programa_producao_tipo_codigo, ";
$Comando_SQL .= "mgt_programa_producao_tipo, ";
$Comando_SQL .= "mgt_programa_producao_produto_codigo, ";
$Comando_SQL .= "mgt_programa_producao_produto_descricao, ";
$Comando_SQL .= "mgt_programa_producao_produto_lote, ";
$Comando_SQL .= "IF(((mgt_programa_producao_qtde_vendida - TRUNCATE(mgt_programa_producao_qtde_vendida,0)) > 0),mgt_programa_producao_qtde_vendida,SUBSTRING_INDEX(mgt_programa_producao_qtde_vendida, '.', 1)) AS mgt_programa_producao_qtde_vendida, ";
$Comando_SQL .= "IF(((mgt_programa_producao_qtde_estoque - TRUNCATE(mgt_programa_producao_qtde_estoque,0)) > 0),mgt_programa_producao_qtde_estoque,SUBSTRING_INDEX(mgt_programa_producao_qtde_estoque, '.', 1)) AS mgt_programa_producao_qtde_estoque, ";
$Comando_SQL .= "IF(((mgt_programa_producao_qtde_produzir - TRUNCATE(mgt_programa_producao_qtde_produzir,0)) > 0),mgt_programa_producao_qtde_produzir,SUBSTRING_INDEX(mgt_programa_producao_qtde_produzir, '.', 1)) AS mgt_programa_producao_qtde_produzir, ";
$Comando_SQL .= "date_format(mgt_programa_producao_data_inicio, '%d/%m/%Y') AS mgt_programa_producao_data_inicio, ";
$Comando_SQL .= "date_format(mgt_programa_producao_data_fim, '%d/%m/%Y') AS mgt_programa_producao_data_fim, ";
$Comando_SQL .= "mgt_programa_producao_porcentagem_reserva, ";
$Comando_SQL .= "mgt_programa_producao_planejamento, ";
$Comando_SQL .= "mgt_programa_producao_ordens, ";
$Comando_SQL .= "IF(((mgt_programa_producao_qtde_produzida - TRUNCATE(mgt_programa_producao_qtde_produzida,0)) > 0),mgt_programa_producao_qtde_produzida,SUBSTRING_INDEX(mgt_programa_producao_qtde_produzida, '.', 1)) AS mgt_programa_producao_qtde_produzida ";
$Comando_SQL .= "from mgt_programa_producao ";
$Comando_SQL .= "Where ";
$Comando_SQL .= "mgt_programa_producao_nro = '" . trim($mgt_planejamento_necessidade_nro) . "' ";
$Comando_SQL .= "Order By ";
$Comando_SQL .= "mgt_programa_producao_nro Desc, ";
$Comando_SQL .= "mgt_programa_producao_produto_codigo Asc";

GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Close();
GetConexaoPrincipal()->SQL_MGT_Programa_Producao->SQL = $Comando_SQL;
GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Open();

//*** Seleciona o Planejamento de Necessidades ***

$Comando_SQL = "select ";
$Comando_SQL .= "* ";
$Comando_SQL .= "from mgt_planejamento_necessidades ";
$Comando_SQL .= "Where ";
$Comando_SQL .= "mgt_planejamento_necessidade_nro = '" . trim($mgt_planejamento_necessidade_nro) . "' ";
$Comando_SQL .= "ORDER BY mgt_planejamento_necessidade_sequencia ASC";

GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Close();
GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->SQL = $Comando_SQL;
GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Open();

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
      $this->Cell(106, 5, 'Descricao', $borda, 0, 'L');
	  $this->Cell(35, 5, 'Numero do Lote', $borda, 1, 'R');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(19, 5, 'Produto:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(30, 5, GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Fields['mgt_programa_producao_produto_codigo'], $borda, 0, 'L');

      $this->SetFont('Arial', '', 8);
      $this->Cell(106, 5, GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Fields['mgt_programa_producao_produto_descricao'], $borda, 0, 'L');

      $this->SetFont('Arial', '', 8);
      $this->Cell(35, 5, GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Fields['mgt_programa_producao_produto_lote'], $borda, 1, 'R');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(28, 5, 'Qtde para Produzir:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(28, 5, GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Fields['mgt_programa_producao_qtde_produzir'], $borda, 0, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(114, 5, 'Situacao da Operacao:', $borda, 0, 'R');
      $this->SetFont('Arial', '', 8);

	  if(GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Fields['mgt_programa_producao_qtde_produzida'] >= GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Fields['mgt_programa_producao_qtde_produzir'])
      {
        $this->Cell(20, 5, 'FECHADA', $borda, 1, 'R');
	  }
      else
      {
        $this->Cell(20, 5, 'ABERTA', $borda, 1, 'R');
	  }

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(28, 5, 'Data de Inicio:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(28, 5, GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Fields['mgt_programa_producao_data_inicio'], $borda, 1, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(28, 5, 'Data de Termino:', $borda, 0, 'L');
      $this->SetFont('Arial', '', 8);
      $this->Cell(28, 5, GetConexaoPrincipal()->SQL_MGT_Programa_Producao->Fields['mgt_programa_producao_data_fim'], $borda, 1, 'L');

      $this->Cell(135, 5, '', $borda, 1, 'L');

      $this->SetFont('Arial', 'B', 8);
      $this->Cell(10, 5, 'Estrutura Necessaria:', $borda, 1, 'L');
      //$this->line(10, $this->GetY() - 1, 200, $this->GetY() - 1);// Desenha uma linha

      //*** Titulo dos Campos do Relatorio ***

      $borda = 1;

      $this->SetFont('Arial', 'BI', 8);
      $this->Cell(10, 5, 'Nivel', $borda, 0, 'R');
      $this->Cell(25, 5, 'Codigo', $borda, 0, 'L');
      $this->Cell(70, 5, 'Pecas', $borda, 0, 'L');
      $this->Cell(30, 5, 'Qtde p/ um Produto', $borda, 0, 'R');
      $this->Cell(13, 5, 'Unidade', $borda, 0, 'L');
	  $this->Cell(20, 5, 'Qtde Lote', $borda, 0, 'R');
      $this->Cell(22, 5, 'Falta', $borda, 1, 'R');

      //$this->line(10, $this->GetY(), 200, $this->GetY());// Desenha uma linha
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

   $mgt_planejamento_necessidade_nro = $_REQUEST['mgt_planejamento_necessidade_nro'];

   $pdf = new PDF('P');// relatorio em orientacao "paisagem"

   $pdf->SetName("Ordem de Producao - Nro.: " . trim($mgt_planejamento_necessidade_nro));

   $pdf->Open();
   $pdf->AddPage();
   $pdf->SetFont('Arial', '', 8);

   //*** Detalhe dos Itens ***

   $borda = 1;

   while((GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->EOF) <> 1)
   {
      //*** Lista o Detalhe ***

      $eixo_y = $pdf->GetY();

	  $pdf->Cell(10, 5, GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_nivel'], $borda, 0, 'R');
      $pdf->Cell(25, 5, GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_produto_codigo'], $borda, 0, 'L');
      $eixo_x = $pdf->GetX();
      $eixo_y = $pdf->GetY();
      $pdf->MultiCell(70, 5, GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_produto_descricao'], $borda, 'L');
      $eixo_y_2 = $pdf->GetY();
      $pdf->SetXY($eixo_x + 70, $eixo_y);

      if( (GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_qtde_um_produto'] - intval(GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_qtde_um_produto'])) > 0 )
      {
         $pdf->Cell(30, 5, GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_qtde_um_produto'], $borda, 0, 'R');
      }
	  else
      {
         $pdf->Cell(30, 5, intval(GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_qtde_um_produto']), $borda, 0, 'R');
      }

	  $pdf->Cell(13, 5, GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_medida'], $borda, 0, 'L');

	  if( (GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_qtde_produzir'] - intval(GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_qtde_produzir'])) > 0 )
      {
   	    $pdf->Cell(20, 5, GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_qtde_produzir'], $borda, 0, 'R');
      }
	  else
      {
   	    $pdf->Cell(20, 5, intval(GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_qtde_produzir']), $borda, 0, 'R');
      }

      if( (GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_qtde_falta'] - intval(GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_qtde_falta'])) > 0 )
      {
        $pdf->Cell(22, 5, GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_qtde_falta'], $borda, 1, 'R');
	  }
	  else
      {
        $pdf->Cell(22, 5, intval(GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->Fields['mgt_planejamento_necessidade_qtde_falta']), $borda, 1, 'R');
	  }

      $pdf->SetY($eixo_y_2);

      GetConexaoPrincipal()->SQL_MGT_Planejamento_Necessidades->next();
   }

   //$pdf->line(10, $pdf->GetY(), 200, $pdf->GetY());// Desenha uma linha

   $pdf->Output();
}

PDF_Detalhe();

?>