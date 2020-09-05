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

      //*** Titulo dos Campos do Relatorio ***

      $this->SetFont('Arial', 'BI', 8);
      $this->Cell(20, 5, 'Nro.Duplicata', $borda, 0, 'L');
      $this->Cell(90, 5, 'Cliente', $borda, 0, 'L');
      $this->Cell(15, 5, 'Dt.Vencto', $borda, 0, 'L');
      $this->Cell(20, 5, 'Vlr.Duplicata', $borda, 0, 'R');
      $this->Cell(15, 5, 'Status', $borda, 0, 'L');
      $this->Cell(15, 5, 'Dt.Pagto', $borda, 0, 'L');
      $this->Cell(15, 5, 'Vlr.Pago', $borda, 1, 'R');

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
   require_once("includes/inverte_data_amd_to_dma.fnc.php");
   require_once("includes/inverte_data_dma_to_amd.fnc.php");

   //*** Executa as Selecoes do SQL ***
   $pdf = new PDF('P');// relatorio em orientacao "paisagem"

   $pdf->SetName("Fluxo Receita/Pagos de " . trim($_SESSION['imprime_data_inicial']) . " ate " . trim($_SESSION['imprime_data_final']));

   $pdf->Open();
   $pdf->AddPage();
   $pdf->SetFont('Arial', '', 8);

   //*** Detalhe dos Itens ***

   //*** Receitas ***
   //*** Limpa a Tabela de Swap ***

   $Comando_SQL = "TRUNCATE TABLE mgt_swap_cobrancas";

   GetConexaoPrincipal()->SQL_Comunitario->Close();
   GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
   GetConexaoPrincipal()->SQL_Comunitario->Open();
   GetConexaoPrincipal()->SQL_Comunitario->Close();

   //*** Seleciona os CFOPs de Faturamento ***

   $Comando_SQL = "select * from mgt_cfops_faturamento";

   GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Close();
   GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->SQL = $Comando_SQL;
   GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Open();

   $cfops = GetConexaoPrincipal()->SQL_MGT_CFOP_Faturamento->Fields['mgt_cfop_faturamento_valido'];

   //**********************************
   //*** Nota Fiscal - 12 Vencimentos ***
   //**********************************

   for($ind = 1; $ind <= 12; $ind++)
   {

      $Comando_SQL = "Select * from mgt_notas_fiscais Where (";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_" . $ind . " >= '" . inverte_data_dma_to_amd(trim($_SESSION['imprime_data_inicial'])) . "') And ";
      $Comando_SQL .= "(mgt_nota_fiscal_dup_dt_vcto_" . $ind . " <= '" . inverte_data_dma_to_amd(trim($_SESSION['imprime_data_final'])) . "')";

      if(trim($cfops) <> '')
      {
         $Comando_SQL .= " and (mgt_nota_fiscal_cfop IN (" . trim($cfops) . "))";
      }

      $Comando_SQL .= ") Order By mgt_nota_fiscal_dup_dt_vcto_" . $ind . " ASC, mgt_nota_fiscal_numero ASC";

      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
      {

         while((GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->EOF) != 1)
         {
            //*** Registra a Informacao no Comparativo ***

            $Comando_SQL = "Insert into mgt_swap_cobrancas (";
            $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
            $Comando_SQL .= "mgt_swap_cobranca_nome, ";
            $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
            $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
            $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
            $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
            $Comando_SQL .= " Values(";

            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_nome'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_data_emissao'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_numero'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_nro_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_vcto_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_banco'] . "',";
            $Comando_SQL .= "'1',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_dt_pgto_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_vlr_juros_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_cod_bco_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_dup_obs_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_finalidade'] . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Next();
         }
      }
   }

   //*******************************
   //*** Papeleta - 12 Vencimentos ***
   //*******************************

   for($ind = 1; $ind <= 12; $ind++)
   {
      $Comando_SQL = "Select * from mgt_programadas Where (";
      $Comando_SQL .= "(mgt_programada_dup_dt_vcto_" . $ind . " >= '" . inverte_data_dma_to_amd(trim($_SESSION['imprime_data_inicial'])) . "') And ";
      $Comando_SQL .= "(mgt_programada_dup_dt_vcto_" . $ind . " <= '" . inverte_data_dma_to_amd(trim($_SESSION['imprime_data_final'])) . "')";
      $Comando_SQL .= ") Order By mgt_programada_dup_dt_vcto_" . $ind . " ASC, mgt_programada_numero ASC";

      GetConexaoPrincipal()->SQL_MGT_Programadas->Close();
      GetConexaoPrincipal()->SQL_MGT_Programadas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Programadas->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
      {

         while((GetConexaoPrincipal()->SQL_MGT_Programadas->EOF) != 1)
         {
            //*** Registra a Informacao no Comparativo ***

            $Comando_SQL = "Insert into mgt_swap_cobrancas (";
            $Comando_SQL .= "mgt_swap_cobranca_codigo, ";
            $Comando_SQL .= "mgt_swap_cobranca_nome, ";
            $Comando_SQL .= "mgt_swap_cobranca_data_emissao, ";
            $Comando_SQL .= "mgt_swap_cobranca_nota_fiscal, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_nro, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_vlr, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bco, ";
            $Comando_SQL .= "mgt_swap_cobranca_posicao, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_dt_pgto, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_pgto, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_vlr_juros, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_cod_bancario, ";
            $Comando_SQL .= "mgt_swap_cobranca_dup_observacao, ";
            $Comando_SQL .= "mgt_swap_cobranca_finalidade) ";
            $Comando_SQL .= " Values(";

            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_codigo'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_cliente_nome'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_data_emissao'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_numero'] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_nro_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_vcto_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_banco'] . "',";
            $Comando_SQL .= "'1',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_dt_pgto_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_vlr_juros_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_cod_bco_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_dup_obs_' . $ind] . "',";
            $Comando_SQL .= "'" . GetConexaoPrincipal()->SQL_MGT_Programadas->Fields['mgt_programada_finalidade'] . "')";

            GetConexaoPrincipal()->SQL_Comunitario->Close();
            GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_Comunitario->Open();
            GetConexaoPrincipal()->SQL_Comunitario->Close();

            GetConexaoPrincipal()->SQL_MGT_Programadas->Next();
         }
      }
   }

   //*** Gera o Relatorio ***
   $Comando_SQL = "Select * from mgt_swap_cobrancas ";
   $Comando_SQL .= "Where ";
   $Comando_SQL .= "(";
   $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto >= '" . inverte_data_dma_to_amd(trim($_SESSION['imprime_data_inicial'])) . "'";
   $Comando_SQL .= " And ";
   $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto <= '" . inverte_data_dma_to_amd(trim($_SESSION['imprime_data_final'])) . "'";
   $Comando_SQL .= ")";
   $Comando_SQL .= " Order By ";
   $Comando_SQL .= "mgt_swap_cobranca_dup_dt_vcto Asc, mgt_swap_cobranca_nome Asc";

   GetConexaoPrincipal()->SQL_Relatorio->Close();
   GetConexaoPrincipal()->SQL_Relatorio->SQL = $Comando_SQL;
   GetConexaoPrincipal()->SQL_Relatorio->Open();

   $receita_nao_valor_pago = number_format(GetConexaoPrincipal()->SQL_Relatorio->Fields['valor_nao_pago'], "2", ".", "");

   //*** Total das Receitas ***

   $receita_total = $receita_valor_pago + $receita_nao_valor_pago;

   //*** Gera o Relatorio ***

   $receita_valor_pago = 0;
   $receita_nao_valor_pago = 0;

   while((GetConexaoPrincipal()->SQL_Relatorio->EOF) <> 1)
   {
      $pdf->Cell(20, 5, GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_cobranca_dup_nro'], $borda, 0, 'L');
      $pdf->Cell(90, 5, substr(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_cobranca_nome'], 0, 52), $borda, 0, 'L');
      $pdf->Cell(15, 5, inverte_data_amd_to_dma(trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_cobranca_dup_dt_vcto'])), $borda, 0, 'L');
      $pdf->Cell(20, 5, number_format(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_cobranca_dup_vlr'], "2", ".", ""), $borda, 0, 'R');

      $receita_nao_valor_pago = $receita_nao_valor_pago + GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_cobranca_dup_vlr'];

      if(trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_cobranca_dup_dt_pgto']) == '0000-00-00')
      {
         $pdf->Cell(15, 5, 'Em Aberto', $borda, 0, 'L');
         $pdf->Cell(15, 5, '', $borda, 0, 'L');
         $pdf->Cell(15, 5, '', $borda, 1, 'R');
      }
      else
      {
         $pdf->Cell(15, 5, 'Pago', $borda, 0, 'L');
         $pdf->Cell(15, 5, inverte_data_amd_to_dma(trim(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_cobranca_dup_dt_pgto'])), $borda, 0, 'L');
         $pdf->Cell(15, 5, number_format(GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_cobranca_dup_vlr_pgto'], "2", ".", ""), $borda, 1, 'R');

         $receita_valor_pago = $receita_valor_pago + GetConexaoPrincipal()->SQL_Relatorio->Fields['mgt_swap_cobranca_dup_vlr_pgto'];
      }

      GetConexaoPrincipal()->SQL_Relatorio->next();
   }

   //*** Totais ***

   $pdf->line(10, $pdf->GetY(), 200, $pdf->GetY());// Desenha uma linha

   $pdf->SetFont('Arial', 'B', 8);
   $pdf->Cell(20, 5, '', $borda, 0, 'L');
   $pdf->Cell(90, 5, '', $borda, 0, 'L');
   $pdf->Cell(15, 5, 'Total', $borda, 0, 'L');
   $pdf->Cell(20, 5, number_format($receita_nao_valor_pago, "2", ".", ""), $borda, 0, 'R');
   $pdf->Cell(15, 5, '', $borda, 0, 'L');
   $pdf->Cell(15, 5, '', $borda, 0, 'L');
   $pdf->Cell(15, 5, number_format($receita_valor_pago, "2", ".", ""), $borda, 1, 'R');

   $pdf->line(10, $pdf->GetY(), 200, $pdf->GetY());// Desenha uma linha

   $pdf->Output();
}

PDF_Detalhe();

?>