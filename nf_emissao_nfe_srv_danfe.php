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

require_once("includes/rotinas_gerais.inc.php");
require_once("includes/inverte_data_amd_to_dma.fnc.php");
require_once("includes/tabelas_ibge_numeros.fnc.php");
require_once('FPDF/fpdf.php');

$arquivo_XML = 'nfe/entregar_cliente/' . $_GET['nfse'];
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

   //*** Carrega o Arquivo XML ***
   $ler_xml = simplexml_load_file($arquivo_XML);

   $xml_Numero = $ler_xml->CompNfse->Nfse->InfNfse->Numero;
   $xml_CodigoVerificacao = $ler_xml->CompNfse->Nfse->InfNfse->CodigoVerificacao;
   $xml_DataEmissao = $ler_xml->CompNfse->Nfse->InfNfse->DataEmissao;

   $xml_Cnpj = $ler_xml->CompNfse->Nfse->InfNfse->PrestadorServico->IdentificacaoPrestador->Cnpj;
   $xml_InscricaoMunicipal = $ler_xml->CompNfse->Nfse->InfNfse->PrestadorServico->IdentificacaoPrestador->InscricaoMunicipal;
   $xml_RazaoSocial = $ler_xml->CompNfse->Nfse->InfNfse->PrestadorServico->RazaoSocial;
   $xml_Endereco = $ler_xml->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->Endereco;
   $xml_Endereco .= ', ' . $ler_xml->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->Numero;
   $xml_Endereco .= ' - ' . $ler_xml->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->Bairro;
   $xml_Endereco .= ' - CEP: ' . $ler_xml->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->Cep;
   $xml_CodigoMunicipio = municipios_ibge_nro(trim($ler_xml->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->CodigoMunicipio));
   $xml_Uf = estados_ibge_nro(substr($ler_xml->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->CodigoMunicipio, 0, 2));
   $xml_Telefone = $ler_xml->CompNfse->Nfse->InfNfse->PrestadorServico->Contato->Telefone;
   $xml_Email = $ler_xml->CompNfse->Nfse->InfNfse->PrestadorServico->Contato->Email;

   $xml_T_Cnpj = $ler_xml->CompNfse->Nfse->InfNfse->TomadorServico->IdentificacaoTomador->CpfCnpj->Cnpj;
   $xml_T_RazaoSocial = $ler_xml->CompNfse->Nfse->InfNfse->TomadorServico->RazaoSocial;
   $xml_T_Endereco = $ler_xml->CompNfse->Nfse->InfNfse->TomadorServico->Endereco->Endereco;
   $xml_T_Endereco .= ', ' . $ler_xml->CompNfse->Nfse->InfNfse->TomadorServico->Endereco->Numero;
   $xml_T_Endereco .= ' - ' . $ler_xml->CompNfse->Nfse->InfNfse->TomadorServico->Endereco->Bairro;
   $xml_T_Endereco .= ' - CEP: ' . $ler_xml->CompNfse->Nfse->InfNfse->TomadorServico->Endereco->Cep;
   $xml_T_CodigoMunicipio = municipios_ibge_nro(trim($ler_xml->CompNfse->Nfse->InfNfse->TomadorServico->Endereco->CodigoMunicipio));
   $xml_T_Uf = estados_ibge_nro(substr($ler_xml->CompNfse->Nfse->InfNfse->TomadorServico->Endereco->CodigoMunicipio, 0, 2));
   $xml_T_Telefone = $ler_xml->CompNfse->Nfse->InfNfse->TomadorServico->Contato->Telefone;
   $xml_T_Email = $ler_xml->CompNfse->Nfse->InfNfse->TomadorServico->Contato->Email;

   $xml_CodigoTributacaoMunicipio = $ler_xml->CompNfse->Nfse->InfNfse->Servico->CodigoTributacaoMunicipio;
   $xml_Discriminacao = $ler_xml->CompNfse->Nfse->InfNfse->Servico->Discriminacao;
   $xml_CodigoMunicipioNro = $ler_xml->CompNfse->Nfse->InfNfse->Servico->CodigoMunicipio;

   $xml_ValorServicos = (float)$ler_xml->CompNfse->Nfse->InfNfse->Servico->Valores->ValorServicos;
   $xml_ValorIss = (float)$ler_xml->CompNfse->Nfse->InfNfse->Servico->Valores->ValorIss;
   $xml_BaseCalculo = (float)$ler_xml->CompNfse->Nfse->InfNfse->Servico->Valores->BaseCalculo;
   $xml_Aliquota = (float)$ler_xml->CompNfse->Nfse->InfNfse->Servico->Valores->Aliquota;
   $xml_ValorLiquidoNfse = (float)$ler_xml->CompNfse->Nfse->InfNfse->Servico->Valores->ValorLiquidoNfse;

   $xml_IssRetido = $ler_xml->CompNfse->Nfse->InfNfse->Servico->Valores->IssRetido;
   $xml_OptanteSimplesNacional = $ler_xml->CompNfse->Nfse->InfNfse->OptanteSimplesNacional;

   if($xml_IssRetido == '2')
   {
      $xml_IssRetido = '2-NAO';
   }
   else
   {
      $xml_IssRetido = '1-SIM';
   }

   if($xml_OptanteSimplesNacional == '2')
   {
      $xml_OptanteSimplesNacional = '2-NAO';
   }
   else
   {
      $xml_OptanteSimplesNacional = '1-SIM';
   }

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

      $nImgH = round($h / 2, 0);
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
   $pdf->Text(006, 052, 'I.M.:');
   $pdf->SetFont('Arial', '', 5);
   $pdf->Text(014, 047, $xml_Cnpj);
   $pdf->Text(014, 052, $xml_InscricaoMunicipal);

   //*** Cabecalho - Texto Central ***
   $pdf->RoundedRect(036, 005, 141, 046, 0.5, '');
   $pdf->SetFont('Arial', 'B', 16);
   $pdf->Text(32, 25, 'NOTA FISCAL ELETRONICA DE SERVICOS - NFS-e');

   //*** Cabecalho - Dados NFS-e ***
   $pdf->RoundedRect(172, 005, 040, 014, 0.5, '');
   $pdf->SetFont('Arial', 'B', 8);
   $pdf->Text(172.5, 8, 'Numero da Nota Fiscal');
   $pdf->SetFont('Arial', '', 15);
   $pdf->Text(177, 14, completa_zeros($xml_Numero, 7));

   $pdf->RoundedRect(172, 022, 040, 014, 0.5, '');
   $pdf->SetFont('Arial', 'B', 8);
   $pdf->Text(172.5, 21, 'Data de Emissao');
   $pdf->SetFont('Arial', '', 15);
   $pdf->Text(175, 27, inverte_data_amd_to_dma(substr($xml_DataEmissao, 0, 10)));

   $pdf->RoundedRect(172, 037, 040, 014, 0.5, '');
   $pdf->SetFont('Arial', 'B', 8);
   $pdf->Text(172.5, 34, 'Codigo de Verificacao');
   $pdf->SetFont('Arial', '', 15);
   $pdf->Text(174, 40, $xml_CodigoVerificacao);

   //*** Dados do Prestador de Servico ***
   $pdf->SetFont('Arial', 'B', 16);
   $pdf->Text(5, 50, 'DADOS DO PRESTADOR DE SERVICO');
   $pdf->RoundedRect(5, 51.5, 200, 51, 0.5, '');

   $pdf->SetFont('Arial', 'B', 12);
   $pdf->Text(7, 57, 'CNPJ/CPF:');
   $pdf->Text(130, 57, 'Inscricao Municipal:');
   $pdf->Text(7, 64, 'Razao Social/Nome:');
   $pdf->Text(7, 71, 'Endereco:');
   $pdf->Text(7, 78, 'Municipio:');
   $pdf->Text(7, 85, 'Estado:');
   $pdf->Text(7, 92, 'E-Mail:');
   $pdf->Text(7, 99, 'Telefone:');

   $pdf->SetFont('Arial', '', 12);
   $pdf->Text(50, 57, $xml_Cnpj);
   $pdf->Text(172, 57, $xml_InscricaoMunicipal);
   $pdf->Text(50, 64, utf8_decode($xml_RazaoSocial));
   $pdf->Text(50, 71, utf8_decode($xml_Endereco));
   $pdf->Text(50, 78, $xml_CodigoMunicipio);
   $pdf->Text(50, 85, $xml_Uf);
   $pdf->Text(50, 92, $xml_Email);
   $pdf->Text(50, 99, $xml_Telefone);

   //*** Dados do Tomador do Servico ***
   $pdf->SetFont('Arial', 'B', 16);
   $pdf->Text(5, 110, 'DADOS DO TOMADOR DO SERVICO');
   $pdf->RoundedRect(5, 111.5, 200, 51, 0.5, '');

   $pdf->SetFont('Arial', 'B', 12);
   $pdf->Text(7, 117, 'CNPJ/CPF:');
   $pdf->Text(7, 124, 'Razao Social/Nome:');
   $pdf->Text(7, 131, 'Endereco:');
   $pdf->Text(7, 138, 'Municipio:');
   $pdf->Text(7, 145, 'Estado:');
   $pdf->Text(7, 152, 'E-Mail:');
   $pdf->Text(7, 159, 'Telefone:');

   $pdf->SetFont('Arial', '', 12);
   $pdf->Text(50, 117, $xml_T_Cnpj);
   $pdf->Text(50, 124, utf8_decode($xml_T_RazaoSocial));
   $pdf->Text(50, 131, utf8_decode($xml_T_Endereco));
   $pdf->Text(50, 138, $xml_T_CodigoMunicipio);
   $pdf->Text(50, 145, $xml_T_Uf);
   $pdf->Text(50, 152, $xml_T_Email);
   $pdf->Text(50, 159, $xml_T_Telefone);

   //*** Discriminacao do Servico ***
   $pdf->SetFont('Arial', 'B', 16);
   $pdf->Text(5, 170, 'DISCRIMINACAO DO SERVICO PRESTADO');
   $pdf->RoundedRect(5, 171.5, 200, 70, 0.5, '');

   $pdf->SetFont('Arial', 'B', 12);
   $pdf->Text(7, 177, 'Codigo do Municipio:');
   $pdf->Text(7, 184, 'Codigo do Servico / Atividade:');
   $pdf->Text(7, 191, 'Valor Total do Servico (R$):');

   $pdf->RoundedRect(6.5, 194, 197, 45, 0.5, '');
   $pdf->Text(7, 198, 'Discriminacao do Servico:');

   $pdf->SetFont('Arial', '', 12);
   $pdf->Text(70, 177, $xml_CodigoMunicipioNro);
   $pdf->Text(70, 184, $xml_CodigoTributacaoMunicipio);
   $pdf->Text(70, 191, number_format($xml_ValorServicos, 2, ',', '.'));

   $pdf->SetXY(8, 200);
   $pdf->MultiCell(190, 5, utf8_decode($xml_Discriminacao), 0, 'L');

   //*** Valores da Nota Fiscal ***
   $pdf->SetFont('Arial', 'B', 16);
   $pdf->Text(5, 250, 'VALORES DA NOTA FISCAL');
   $pdf->RoundedRect(5, 251.5, 200, 36, 0.5, '');

   $pdf->SetFont('Arial', 'B', 12);
   $pdf->Text(7, 257, 'Valor Total da Nota Fiscal (R$):');
   $pdf->Text(120, 257, 'ISS Retido:');
   $pdf->Text(7, 264, 'Valor Liquido da Nota Fiscal (R$):');
   $pdf->Text(120, 264, 'Optante Simples Nacional:');
   $pdf->Text(7, 271, 'Base de Calculo (R$):');
   $pdf->Text(7, 278, 'Aliquota ISS (%):');
   $pdf->Text(7, 285, 'Valor do ISS (R$):');

   $pdf->SetFont('Arial', '', 12);
   $pdf->Text(76, 257, number_format($xml_BaseCalculo, 2, ',', '.'));
   $pdf->Text(145, 257, $xml_IssRetido);
   $pdf->Text(76, 264, number_format($xml_ValorLiquidoNfse, 2, ',', '.'));
   $pdf->Text(175, 264, $xml_OptanteSimplesNacional);
   $pdf->Text(76, 271, number_format($xml_BaseCalculo, 2, ',', '.'));
   $pdf->Text(76, 278, number_format($xml_Aliquota, 2, ',', '.'));
   $pdf->Text(76, 285, number_format($xml_ValorIss, 2, ',', '.'));

   $pdf->Output($arquivo_PDF, 'F');//*** Salva o Arqvuivo PDF ***
   $pdf->Output($arquivo_PDF, 'I');//*** Exibe o PDF no Browser ***
}

?>