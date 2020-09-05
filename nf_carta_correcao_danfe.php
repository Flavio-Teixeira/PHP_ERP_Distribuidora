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

require_once("includes/rotinas_gerais.inc.php");
require_once("includes/inverte_data_amd_to_dma.fnc.php");
require_once("includes/tabelas_ibge_numeros.fnc.php");
require_once('FPDF/fpdf.php');

$nro_nfe = $_GET['nro_nfe'];
$nro_cce = $_GET['nro_cce'];

$arquivo_XML = 'nfe/entregar_cliente/' . $_GET['cce'];
$arquivo_PDF = str_replace('.xml', '.pdf', $arquivo_XML);
$arquivo_PDF = str_replace('nfe/entregar_cliente/', 'nfe/entregar_cliente/DANFE/', $arquivo_PDF);

if(is_file($arquivo_XML))
{
   //*** Definicao da Classe ***
   class PDF extends FPDF
   {
      function RoundedRect($x, $y, $w, $h, $r, $style = '')
      {
         $k = $this->k;
         $hp = $this->h;
         if($style == 'F')
            $op = 'f';
         elseif($style == 'FD' || $style == 'DF')
         $op = 'B';
         else
            $op = 'S';
         $MyArc = 4 / 3 * (sqrt(2) - 1);
         $this->_out(sprintf('%.2F %.2F m', ($x + $r) * $k, ($hp - $y) * $k));
         $xc = $x + $w - $r;
         $yc = $y + $r;
         $this->_out(sprintf('%.2F %.2F l', $xc * $k, ($hp - $y) * $k));

         $this->_Arc($xc + $r * $MyArc, $yc - $r, $xc + $r, $yc - $r * $MyArc, $xc + $r, $yc);
         $xc = $x + $w - $r;
         $yc = $y + $h - $r;
         $this->_out(sprintf('%.2F %.2F l', ($x + $w) * $k, ($hp - $yc) * $k));
         $this->_Arc($xc + $r, $yc + $r * $MyArc, $xc + $r * $MyArc, $yc + $r, $xc, $yc + $r);
         $xc = $x + $r;
         $yc = $y + $h - $r;
         $this->_out(sprintf('%.2F %.2F l', $xc * $k, ($hp - ($y + $h)) * $k));
         $this->_Arc($xc - $r * $MyArc, $yc + $r, $xc - $r, $yc + $r * $MyArc, $xc - $r, $yc);
         $xc = $x + $r;
         $yc = $y + $r;
         $this->_out(sprintf('%.2F %.2F l', ($x) * $k, ($hp - $yc) * $k));
         $this->_Arc($xc - $r, $yc - $r * $MyArc, $xc - $r * $MyArc, $yc - $r, $xc, $yc - $r);
         $this->_out($op);
      }

      function _Arc($x1, $y1, $x2, $y2, $x3, $y3)
      {
         $h = $this->h;
         $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c ', $x1 * $this->k, ($h - $y1) * $this->k,
         $x2 * $this->k, ($h - $y2) * $this->k, $x3 * $this->k, ($h - $y3) * $this->k));
      }
   }

   //*** Carrega as Informacoes da Carta de Correcao ***

   $Comando_SQL = "select * from mgt_notas_fiscais ";
   $Comando_SQL .= "where ";
   $Comando_SQL .= "mgt_nota_fiscal_finalidade = 'PRD' and ";
   $Comando_SQL .= "mgt_nota_fiscal_numero = '" . trim($nro_nfe) . "' ";

   GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Close();
   GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->SQL = $Comando_SQL;
   GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Open();

   $Comando_SQL = "select * from mgt_cartas_correcoes ";
   $Comando_SQL .= "where ";
   $Comando_SQL .= "mgt_carta_correcao_nfe = '" . trim($nro_nfe) . "' and ";
   $Comando_SQL .= "mgt_carta_correcao_numero = '" . trim($nro_cce) . "' ";

   GetConexaoPrincipal()->SQL_Comunitario->Close();
   GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
   GetConexaoPrincipal()->SQL_Comunitario->Open();

   // http://localhost:8080/sistemas/internet/managertex/nf_carta_correcao_danfe.php?cce=CCe_535.xml&nro_nfe=535&nro_cce=15

   //*** Dados Principais da Carta de Correcao ****
   $xml_Numero = $nro_nfe . " / " . $nro_cce;
   $xml_CodigoVerificacao = GetConexaoPrincipal()->SQL_Comunitario->Fields['mgt_carta_correcao_protocolo'];
   $xml_DataEmissao = GetConexaoPrincipal()->SQL_Comunitario->Fields['mgt_carta_correcao_data'];

   $xml_CondicaoUso = 'A Carta de Correcao e disciplinada pelo § 1º-A do art. 7º do Convenio S/N, de 15 de dezembro de 1970 e pode ser utilizada para regularizacao de erro ocorrido na emissao de documento fiscal, desde que o erro nao esteja relacionado com: I - as variaveis que determinam o valor do imposto tais como: base de calculo, aliquota, diferenca de preco, quantidade, valor da operacao ou da prestacao; II - a correcao de dados cadastrais que implique mudanca do remetente ou do destinatario; III - a data de emissao ou de saida.';

   //*** Dados do Emitente ***
   $xml_Cnpj = $_SESSION['login_cnpj'];
   $xml_InscricaoEstadual = $_SESSION['login_ie'];
   $xml_RazaoSocial = $_SESSION['login_razao'];
   $xml_Endereco = $_SESSION['login_endereco'];
   $xml_Endereco .= ', ' . $_SESSION['login_nro'];
   $xml_Endereco .= ' - ' . $_SESSION['login_bairro'];
   $xml_Endereco .= ' - CEP: ' . $_SESSION['login_cep'];
   $xml_CodigoMunicipio = $_SESSION['login_cidade'];
   $xml_Uf = $_SESSION['login_estado'];
   $xml_Telefone = $_SESSION['login_fone'];
   $xml_Pais = $_SESSION['login_pais'];

   //*** Dados do Destinatario ***
   $xml_T_Cnpj = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cliente_codigo'];
   $xml_T_RazaoSocial = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_razao_social'];
   $xml_T_Endereco = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_endereco'] . ' ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_complemento'];
   $xml_T_Endereco .= ' - ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_bairro'];
   $xml_T_Endereco .= ' - CEP: ' . GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cep'];
   $xml_T_CodigoMunicipio = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_cidade'];
   $xml_T_Uf = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_estado'];
   $xml_T_Telefone = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_fone'];
   $xml_T_Pais = GetConexaoPrincipal()->SQL_MGT_Notas_Fiscais->Fields['mgt_nota_fiscal_pais'];

   //*** Dados da Correcao a ser Considerada ***
   $xml_Chave_CCe = GetConexaoPrincipal()->SQL_Comunitario->Fields['mgt_carta_correcao_chave'];
   $xml_Discriminacao = GetConexaoPrincipal()->SQL_Comunitario->Fields['mgt_carta_correcao_descricao'];
   $xml_Protocolo_CCe = GetConexaoPrincipal()->SQL_Comunitario->Fields['mgt_carta_correcao_protocolo'];
   $xml_Sequencial_CCe = GetConexaoPrincipal()->SQL_Comunitario->Fields['mgt_carta_correcao_numero'];

   //*** Definicao da Folha ***
   $pdf = new PDF();
   $pdf->AddPage();
   $pdf->SetLineWidth(0.3);
   $pdf->SetFillColor(555);
   $pdf->SetFont('Arial', '', 9);
   //$pdf->RoundedRect(5, 5, 200, 46, 0.5, '');

   //*** Cabecalho - Logo ***
   $pdf->RoundedRect(005, 005, 030, 046, 0.5, '');

   if(is_file('imagens/logo_danfe.jpg'))
   {
      $h = 29;
      $x = 17;
      $y = 11;
      $logoInfo = getimagesize('imagens/logo_danfe.jpg');
      //*** largura da imagem em mm ***
      $logoWmm = ($logoInfo[0] / 72) * 25.4;
      //*** altura da imagem em mm ***
      $logoHmm = ($logoInfo[1] / 72) * 25.4;

      $nImgH = round($h / 3, 0);
      $nImgW = round($logoWmm * ($nImgH / $logoHmm), 0);
      $xImg = round(($w - $nImgW) / 2 + $x, 0);
      $yImg = $y + 3;
      $x1 = $x;
      $y1 = round($yImg + $nImgH + 1, 0);
      $tw = $w;

      $pdf->Image('imagens/logo_danfe.jpg', $xImg, $yImg, $nImgW, $nImgH, 'jpeg');
   }
   $pdf->SetFont('Arial', 'B', 5);
   $pdf->Text(006, 047, 'CNPJ:');
   $pdf->Text(006, 052, 'I.E.:');
   $pdf->SetFont('Arial', '', 5);
   $pdf->Text(014, 047, $xml_Cnpj);
   $pdf->Text(014, 052, $xml_InscricaoEstadual);

   //*** Cabecalho - Texto Central ***
   $pdf->RoundedRect(036, 005, 141, 046, 0.5, '');
   $pdf->SetFont('Arial', 'B', 16);
   $pdf->Text(40, 25, 'CARTA DE CORRECAO ELETRONICA - CC-e');

   //*** Cabecalho - Dados NFS-e ***
   $pdf->RoundedRect(172, 005, 040, 014, 0.5, '');
   $pdf->SetFont('Arial', 'B', 8);
   $pdf->Text(172.5, 8, 'Nro. da NF-e / CC-e');
   $pdf->SetFont('Arial', '', 15);
   $pdf->Text(177, 14, $xml_Numero);

   $pdf->RoundedRect(172, 022, 040, 014, 0.5, '');
   $pdf->SetFont('Arial', 'B', 8);
   $pdf->Text(172.5, 21, 'Data Emissao da CC-e');
   $pdf->SetFont('Arial', '', 15);
   $pdf->Text(175, 27, inverte_data_amd_to_dma(substr($xml_DataEmissao, 0, 10)));

   $pdf->RoundedRect(172, 037, 040, 014, 0.5, '');
   $pdf->SetFont('Arial', 'B', 8);
   $pdf->Text(172.5, 34, 'Numero do Protocolo');
   $pdf->SetFont('Arial', '', 9);
   $pdf->Text(174, 40, $xml_CodigoVerificacao);

   //*** Dados do Prestador de Servico ***
   $pdf->SetFont('Arial', 'B', 16);
   $pdf->Text(5, 50, 'DADOS DO EMITENTE');
   $pdf->RoundedRect(5, 51.5, 200, 51, 0.5, '');

   $pdf->SetFont('Arial', 'B', 12);
   $pdf->Text(7, 57, 'CNPJ/CPF:');
   $pdf->Text(130, 57, 'Inscricao Estadual:');
   $pdf->Text(7, 64, 'Razao Social:');
   $pdf->Text(7, 71, 'Endereco:');
   $pdf->Text(7, 78, 'Municipio:');
   $pdf->Text(7, 85, 'Estado:');
   $pdf->Text(7, 92, 'Pais:');
   $pdf->Text(7, 99, 'Telefone:');

   $pdf->SetFont('Arial', '', 12);
   $pdf->Text(35, 57, $xml_Cnpj);
   $pdf->Text(172, 57, $xml_InscricaoEstadual);
   $pdf->Text(35, 64, $xml_RazaoSocial);
   $pdf->Text(35, 71, $xml_Endereco);
   $pdf->Text(35, 78, $xml_CodigoMunicipio);
   $pdf->Text(35, 85, $xml_Uf);
   $pdf->Text(35, 92, $xml_Pais);
   $pdf->Text(35, 99, $xml_Telefone);

   //*** Dados do Tomador do Servico ***
   $pdf->SetFont('Arial', 'B', 16);
   $pdf->Text(5, 110, 'DADOS DO DESTINATARIO');
   $pdf->RoundedRect(5, 111.5, 200, 51, 0.5, '');

   $pdf->SetFont('Arial', 'B', 12);
   $pdf->Text(7, 117, 'CNPJ/CPF:');
   $pdf->Text(7, 124, 'Razao Social:');
   $pdf->Text(7, 131, 'Endereco:');
   $pdf->Text(7, 138, 'Municipio:');
   $pdf->Text(7, 145, 'Estado:');
   $pdf->Text(7, 152, 'Pais:');
   $pdf->Text(7, 159, 'Telefone:');

   $pdf->SetFont('Arial', '', 12);
   $pdf->Text(35, 117, $xml_T_Cnpj);
   $pdf->Text(35, 124, $xml_T_RazaoSocial);
   $pdf->Text(35, 131, $xml_T_Endereco);
   $pdf->Text(35, 138, $xml_T_CodigoMunicipio);
   $pdf->Text(35, 145, $xml_T_Uf);
   $pdf->Text(35, 152, $xml_T_Pais);
   $pdf->Text(35, 159, $xml_T_Telefone);

   //*** Discriminacao do Servico ***
   $pdf->SetFont('Arial', 'B', 16);
   $pdf->Text(5, 170, 'DADOS DA CARTA DE CORRECAO');
   $pdf->RoundedRect(5, 171.5, 200, 70, 0.5, '');

   $pdf->SetFont('Arial', 'B', 12);
   $pdf->Text(7, 177, 'Numero do Protocolo da CC-e:');
   $pdf->Text(7, 184, 'Chave da NF-e Vinculada a CC-e:');
   $pdf->Text(7, 191, 'Sequencial do Evento da CC-e:');

   $pdf->RoundedRect(6.5, 194, 197, 45, 0.5, '');
   $pdf->Text(7, 198, 'Correcao a ser considerada:');

   $pdf->SetFont('Arial', '', 12);
   $pdf->Text(75, 177, $xml_Protocolo_CCe);
   $pdf->Text(75, 184, $xml_Chave_CCe);
   $pdf->Text(75, 191, $xml_Sequencial_CCe);

   $pdf->SetXY(8, 200);
   $pdf->MultiCell(190, 5, $xml_Discriminacao, 0, 'L');

   //*** Valores da Nota Fiscal ***
   $pdf->SetFont('Arial', 'B', 16);
   $pdf->Text(5, 250, 'CONDICAO DE USO');
   $pdf->RoundedRect(5, 251.5, 200, 25, 0.5, '');

   $pdf->SetFont('Arial', '', 9);
   $pdf->SetXY(7, 254);
   $pdf->MultiCell(195, 5, $xml_CondicaoUso, 0, 'L');

   $pdf->Output($arquivo_PDF, 'F');//*** Salva o Arqvuivo PDF ***
   $pdf->Output($arquivo_PDF, 'I');//*** Exibe o PDF no Browser ***
}

?>