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
| PROTEÇÃO AOS DIREITOS DE AUTOR E DO REGISTRO:  |
| Toda codificação deste Sistema está protegida  |
| pela Lei Nro.9609 onde se dispõe sobre a       |
| proteção da propriedade intelectual de         |
| programa de computador, sua comercialização    |
| no País, e dá outras providências.             |
| ATENÇÃO: Não é permitido efetuar alterações    |
| na codificação do sistema, efetuar instalações |
| em outros computadores, cópias e utilizá-lo    |
| como base no desenvolvimento de outro sistema  |
| semelhante ou de igual funcionamento.          |
+------------------------------------------------+
*/

//*** Exibição de Erros para Debug ***
//error_reporting(E_ALL);

//*** Tempo de Resposta, Font e Código de Barras ***
set_time_limit(1800);
define('FPDF_FONTPATH','font/');
require_once('FPDF/code128.php');

class danfeTEX
{
    private $pdf; // objeto fpdf()
    private $xml; // string XML NFe
    private $logomarca=''; // path para logomarca em jpg
    private $errMsg=''; // mesagens de erro
    private $errStatus=FALSE;// status de erro TRUE um erro ocorreu FALSE sem erros
    private $orientacao='P'; //orientação da DANFE P-Retrato ou L-Paisagem
    private $papel='A4'; //formato do papel
    private $destino = 'I'; //destivo do arquivo pdf I-borwser, S-retorna o arquivo, D-força download, F-salva em arquivo local
    private $pdfDir=''; //diretorio para salvar o pdf com a opção de destino = F
    private $fontePadrao='Times'; //Nome da Fonte para gerar o DANFE

    //*** objetos DOM da NFe ***
    private $dom;
    private $infNFe;
    private $ide;
    private $emit;
    private $dest;
    private $enderEmit;
    private $enderDest;
    private $det;
    private $cobr;
    private $dup;
    private $ICMSTot;
    private $ISSQNtot;
    private $transp;
    private $transporta;
    private $veicTransp;
    private $infAdic;
    private $wPrint; //largura imprimivel
    private $hPrint; //comprimento imprimivel

    //*** alinhamento do logo ***
    public $logoAlign='C';
    public $yDados=0;
    private $version = '';

    //****************************
    //*** Classe de Construção ***
    //****************************

    function __construct($docXML='', $sOrientacao="P",$sPapel='A4',$sPathLogo='', $sDestino='I',$sDirPDF='',$fonteDANFE='') {
        $this->orientacao  = $sOrientacao;
        $this->papel    = $sPapel;
        $this->pdf      = '';
        $this->xml      = $docXML;
        $this->logomarca= $sPathLogo;
        $this->destino  = $sDestino;
        $this->pdfDir   = $sDirPDF;

        if(empty($fonteDANFE))
        {
          $this->fontePadrao = 'Times';
        }
        else
        {
          $this->fontePadrao = $fonteDANFE;
        }

        if ( !empty($this->xml) ) {
            $this->dom = new DomDocument;
            $this->dom->loadXML($this->xml);
            $this->nfeProc    = $this->dom->getElementsByTagName("nfeProc")->item(0);
            $this->infNFe     = $this->dom->getElementsByTagName("infNFe")->item(0);
            $this->ide        = $this->dom->getElementsByTagName("ide")->item(0);
            $this->emit       = $this->dom->getElementsByTagName("emit")->item(0);
            $this->dest       = $this->dom->getElementsByTagName("dest")->item(0);
            $this->enderEmit  = $this->dom->getElementsByTagName("enderEmit")->item(0);
            $this->enderDest  = $this->dom->getElementsByTagName("enderDest")->item(0);
            $this->det        = $this->dom->getElementsByTagName("det");
            $this->cobr       = $this->dom->getElementsByTagName("cobr")->item(0);
            $this->dup        = $this->dom->getElementsByTagName('dup');
            $this->ICMSTot    = $this->dom->getElementsByTagName("ICMSTot")->item(0);
            $this->ISSQNtot   = $this->dom->getElementsByTagName("ISSQNtot")->item(0);
            $this->transp     = $this->dom->getElementsByTagName("transp")->item(0);
            $this->transporta = $this->dom->getElementsByTagName("transporta")->item(0);
            $this->veicTransp = $this->dom->getElementsByTagName("veicTransp")->item(0);
            $this->infAdic    = $this->dom->getElementsByTagName("infAdic")->item(0);

        }
    }

    //*************************
    //*** Montagem do DANFE ***
    //*************************

    public function montaDANFE($orientacao='P',$papel='A4',$logoAlign='C'){
        $this->orientacao = $orientacao;
        $this->papel = $papel;
        $this->logoAlign = $logoAlign;

        //*** Instancia a classe pdf ***

        $this->pdf = new PDF_Code128($this->orientacao, 'mm', $this->papel);

        //*** margens do PDF ***

        $margSup = 2;
        $margEsq = 2;
        $margDir = 2;

        //*** posição inicial do relatorio ***

        $xInic = 1;
        $yInic = 1;
        if($papel =='A4'){ //A4 210x297mm
            $maxW = 210;
            $maxH = 297;
        }

        //*** total inicial de paginas ***

        $totPag = 1;

        //*** largura imprimivel em mm ***

        $this->wPrint = $maxW-($margEsq+$xInic);

        //*** comprimento imprimivel em mm ***

        $this->hPrint = $maxH-($margSup+$yInic);

        //*** estabelece contagem de paginas ****

        $this->pdf->AliasNbPages();

        //*** fixa as margens ***

        $this->pdf->SetMargins($margEsq,$margSup,$margDir);
        $this->pdf->SetDrawColor(0,0,0);
        $this->pdf->SetFillColor(255,255,255);

        //*** inicia o documento ***

        $this->pdf->Open();

        //*** adiciona a primeira página ***

        $this->pdf->AddPage($this->orientacao, $this->papel);
        $this->pdf->SetLineWidth(0.1);
        $this->pdf->SetTextColor(0,0,0);

        //******************************************************
        //*** CALCULO DO NUMERO DE PAGINAS A SEREM IMPRESSAS ***
        //******************************************************

        //*** Verificando quantas linhas serão usadas para impressão das duplicatas ***
        $linhasDup = 0;
        if ( ($this->dup->length > 0) && ($this->dup->length <= 7) ) {
            $linhasDup = 1;
        } elseif ( ($this->dup->length > 7) && ($this->dup->length <= 14) ) {
            $linhasDup = 2;
        } elseif ( ($this->dup->length > 14) && ($this->dup->length <= 21) ) {
            $linhasDup = 3;
        } elseif ($this->dup->length > 21) {
            $linhasDup = 3;
        } else{
            $linhasDup = 0;
        }

        //*** verifica se será impresso a linha dos serviços ISSQN ***
        $linhaISSQN = 0;
        if ( isset($this->ISSQNtot) ){
            if ($this->ISSQNtot->getElementsByTagName("vServ")->item(0)->nodeValue > 0 ) {
                $linhaISSQN = 1;
            }
        }

        //*** calcular a altura necessária para os dados adicionais ***
        $w = round($this->wPrint*0.66,0);
        $fontProduto = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'');
        if (isset($this->infAdic)){
            $i = 0;
            $texto = '';
            $texto .= !empty($this->infAdic->getElementsByTagName("infCpl")->item(0)->nodeValue) ? ' ' . $this->infAdic->getElementsByTagName("infCpl")->item(0)->nodeValue : '';
            $texto .= !empty($this->infAdic->getElementsByTagName("infAdFisco")->item(0)->nodeValue) ? "\r\n " . $this->infAdic->getElementsByTagName("infAdFisco")->item(0)->nodeValue : '';
            $obsCont = $this->infAdic->getElementsByTagName("obsCont");
            if (isset($obsCont)){
                foreach ($obsCont as $obs){
                    $campo =  $obsCont->item($i)->getAttribute("xCampo");
                    $xTexto = !empty($obsCont->item($i)->getElementsByTagName("xTexto")->item(0)->nodeValue) ? $obsCont->item($i)->getElementsByTagName("xTexto")->item(0)->nodeValue : '';
                    $texto .= "\r\n" . $campo . ':  ' . $xTexto;
                    $i++;
                }
            }
        } else {
            $texto = '';
        }

        $alinhas = explode("\n",$texto);
        $linhasAdic = count($alinhas);
        $numlinhasdados = 0;
        foreach ($alinhas as $linha){
            $numlinhasdados += $this->__GetNumLines($linha,$w,$fontProduto);
        }
        $hdadosadic = ($numlinhasdados+3) * $this->pdf->FontSize;
        if ($hdadosadic < 10 ){
            $hdadosadic = 10;
        }

        //*** altura disponivel para os campos da DANFE ***
        $hcanhoto = 23;//para canhoto
        $hcabecalho = 47;//para cabeçalho
        $hdestinatario = 25;//para destinatario
        $hduplicatas = 12;//para cada grupo de 7 duplicatas
        $himposto = 18;// para imposto
        $htransporte = 25;// para transporte
        $hissqn = 11;// para issqn
        $hfooter = 5;// para rodape
        $hCabecItens = 4;

        //*** alturas disponiveis para os dados ***
        $hDispo1 = $this->hPrint - ($hcanhoto + $hcabecalho + $hdestinatario + ($linhasDup * $hduplicatas) + $himposto + $htransporte + ($linhaISSQN * $hissqn) + $hdadosadic + $hfooter + $hCabecItens);
        $hDispo2 = $this->hPrint - ($hcabecalho + $hfooter + $hCabecItens);

        //*** Contagem da altura ocupada para impressão dos itens ***
        $fontProduto = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'');
        $i = 0;
        $numlinhas = 0;
        $hUsado = 0;
        $w2 = round($this->wPrint*0.31,0)-1;
        while ($i < $this->det->length){
            $prod = $this->det->item($i)->getElementsByTagName("prod")->item(0);
            $infAdProd = substr(!empty($this->det->item($i)->getElementsByTagName("infAdProd")->item(0)->nodeValue) ? $this->det->item($i)->getElementsByTagName("infAdProd")->item(0)->nodeValue : '',0,120);
            if (!empty($infAdProd)){
               $infAdProd .= ' ';
            }
            $texto = $prod->getElementsByTagName("xProd")->item(0)->nodeValue . ' ' . $infAdProd;
            $numlinhas = $this->__GetNumLines($texto,$w2,$fontProduto);

            //*** considerando 3mm para linhas com letras de 7px ***
            $hUsado += ($numlinhas * $this->pdf->FontSize)+1;
            $i += 1;
        }

        //*** calculo do numero de paginas necessarias ***
        if($hUsado > $hDispo1){
            //*** serão necessárias mais paginas ***
            $hOutras = $hUsado - $hDispo1;
            $totPag = 1 + ceil($hOutras / $hDispo2);
        } else {
            //*** sera necessaria apenas uma pagina ***
            $totPag = 1;
        }

        //*** montagem da primeira página ***
        $pag = 1;
        $x = $xInic;
        $y = $yInic;
        //*** coloca o canhoto da NFe ***
        $y = $this->__canhotoDANFE($x,$y);
        //*** coloca o cabeçalho ***
        $y = $this->__cabecalhoDANFE($x,$y,$pag,$totPag);
        //*** coloca os dados do destinatário ***
        $y = $this->__destinatarioDANFE($x,$y+1);
        //*** coloca os dados das faturas ***
        $y = $this->__faturaDANFE($x,$y+1);
        //*** coloca os dados dos impostos e totais da NFe ***
        $y = $this->__impostoDANFE($x,$y+1);
        //*** coloca os dados do trasnporte ***
        $y = $this->__transporteDANFE($x,$y+1);
        //*** itens da DANFE ***
        $nInicial = 0;
        //$y = $this->__itensDANFE($x,$y+1,&$nInicial,$hDispo1,$pag,$totPag);
		$y = $this->__itensDANFE($x,$y+1,$nInicial,$hDispo1,$pag,$totPag);
        //*** coloca os dados do ISSQN ***
        if ($linhaISSQN == 1) {
            $y = $this->__issqnDANFE($x,$y+4);
        } else {
            $y += 4;
        }
        //*** coloca os dados adicionais da NFe ***
        $y = $this->__dadosAdicionaisDANFE($x,$y,$pag,$hdadosadic);
        //*** coloca o rodapé da página ***
        $this->__rodapeDANFE();

        //*** loop para páginas seguintes ***
        for ( $n = 2; $n <= $totPag; $n++ ) {
            //*** fixa as margens ***
            $this->pdf->SetMargins($margEsq,$margSup,$margDir);
            //*** adiciona nova página ***
            $this->pdf->AddPage($this->orientacao, $this->papel);
            //*** ajusta espessura das linhas ***
            $this->pdf->SetLineWidth(0.1);
            //*** seta a cor do texto para petro ***
            $this->pdf->SetTextColor(0,0,0);
            //*** posição inicial do relatorio ***
            $x = $xInic;
            $y = $yInic;
            //*** coloca o cabeçalho na página adicional ***
            $y = $this->__cabecalhoDANFE($x,$y,$n,$totPag);
            //*** coloca os itens na página adicional ***
            //$y = $this->__itensDANFE($x,$y+1,&$nInicial,$hDispo2,$pag,$totPag);
			$y = $this->__itensDANFE($x,$y+1,$nInicial,$hDispo2,$pag,$totPag);
            //*** coloca o rodapé da página ***
            $this->__rodapeDANFE();
        }
        //*** retorna o ID na NFe ***
        return str_replace('NFe', '', $this->infNFe->getAttribute("Id"));
    }

    //**************************
    //*** Impressao do DANFE ***
    //**************************

    public function printDANFE($nome='',$destino='I',$printer=''){
        $arq = $this->pdf->Output($nome,$destino);
        return $arq;
    }

    //**************************
    //*** Cabecalho do DANFE ***
    //**************************

    private function __cabecalhoDANFE($x=0,$y=0,$pag='1',$totPag='1'){
        $oldX = $x;
        $oldY = $y;

        //*** coluna esquerda identificação do emitente ***
        $w=round($this->wPrint*0.41,0);// 80;
        $w1 = $w;
        $h=32;
        $oldY += $h;
        $this->__textBox($x,$y,$w,$h);
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'I');
        $texto = 'IDENTIFICACAO DO EMITENTE';
        $this->__textBox($x,$y,$w,5,$texto,$aFont,'T','C',0,'');

        if (is_file($this->logomarca)){
            $logoInfo=getimagesize($this->logomarca);
            //*** largura da imagem em mm ***
            $logoWmm = ($logoInfo[0]/72)*25.4;
            //*** altura da imagem em mm ***
            $logoHmm = ($logoInfo[1]/72)*25.4;
            if ($this->logoAlign=='L'){
                $nImgW = round($w/3,0);
                $nImgH = round($logoHmm * ($nImgW/$logoWmm),0);
                $xImg = $x+1;
                $yImg = round(($h-$nImgH)/2,0)+$y;
                //*** estabelecer posições do texto ***
                $x1 = round($xImg + $nImgW +1,0);
                $y1 = round($h/3+$y,0);
                $tw = round(2*$w/3,0);
            }
            if ($this->logoAlign=='C'){
                $nImgH = round($h/2,0);
                $nImgW = round($logoWmm * ($nImgH/$logoHmm),0);
                $xImg = round(($w-$nImgW)/2+$x,0);
                $yImg = $y+3;
                $x1 = $x;
                $y1 = round($yImg + $nImgH + 1,0);
                $tw = $w;
            }
            if($this->logoAlign=='R'){
                $nImgW = round($w/3,0);
                $nImgH = round($logoHmm * ($nImgW/$logoWmm),0);
                $xImg = round($x+($w-(1+$nImgW)),0);
                $yImg = round(($h-$nImgH)/2,0)+$y;
                $x1 = $x;
                $y1 = round($h/3+$y,0);
                $tw = round(2*$w/3,0);
            }
            $this->pdf->Image($this->logomarca, $xImg, $yImg, $nImgW, $nImgH, 'jpeg');
        } else {
            $x1 = $x;
            $y1 = round($h/3+$y,0);
            $tw = $w;
        }

        //*** Nome emitente ***
        $aFont = array('font'=>$this->fontePadrao,'size'=>8,'style'=>'B');
        $texto = $this->emit->getElementsByTagName("xNome")->item(0)->nodeValue;
        $this->__textBox($x1,$y1,$tw,8,$texto,$aFont,'T','C',0,'');

        //*** endereço ***
        $y1 = $y1+3;
        $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'');
        $fone = !empty($this->enderEmit->getElementsByTagName("fone")->item(0)->nodeValue) ? $this->enderEmit->getElementsByTagName("fone")->item(0)->nodeValue : '';
        $foneLen = strlen($fone);
        if ($foneLen > 0 ){
            $fone2 = substr($fone,0,$foneLen-4);
            $fone1 = substr($fone,0,$foneLen-8);
            $fone = '(' . $fone1 . ') ' . substr($fone2,-4) . '-' . substr($fone,-4);
        } else {
            $fone = '';
        }
        $lgr = !empty($this->enderEmit->getElementsByTagName("xLgr")->item(0)->nodeValue) ? $this->enderEmit->getElementsByTagName("xLgr")->item(0)->nodeValue : '';
        $nro = !empty($this->enderEmit->getElementsByTagName("nro")->item(0)->nodeValue) ? $this->enderEmit->getElementsByTagName("nro")->item(0)->nodeValue : '';
        $cpl = !empty($this->enderEmit->getElementsByTagName("xCpl")->item(0)->nodeValue) ? $this->enderEmit->getElementsByTagName("xCpl")->item(0)->nodeValue : '';
        $bairro = !empty($this->enderEmit->getElementsByTagName("xBairro")->item(0)->nodeValue) ? $this->enderEmit->getElementsByTagName("xBairro")->item(0)->nodeValue : '';
        $CEP = !empty($this->enderEmit->getElementsByTagName("CEP")->item(0)->nodeValue) ? $this->enderEmit->getElementsByTagName("CEP")->item(0)->nodeValue : ' ';
        $CEP = $this->__format($CEP,"#####-###");
        $mun = !empty($this->enderEmit->getElementsByTagName("xMun")->item(0)->nodeValue) ? $this->enderEmit->getElementsByTagName("xMun")->item(0)->nodeValue : '';
        $UF = !empty($this->enderEmit->getElementsByTagName("UF")->item(0)->nodeValue) ? $this->enderEmit->getElementsByTagName("UF")->item(0)->nodeValue : '';
        $texto = $lgr . "," . $nro . "  " . $cpl . "\n" . $bairro . " - " . $CEP . "\n" . $mun . " - " . $UF . " " . "Fone/Fax: " . $fone;
        $this->__textBox($x1,$y1,$tw,8,$texto,$aFont,'T','C',0,'');

        //*** coluna central Danfe ***
        $x += $w;
        $w=round($this->wPrint * 0.17,0);//35;
        $w2 = $w;
        $h = 32;
        $this->__textBox($x,$y,$w,$h);
        $texto = "DANFE";
        $aFont = array('font'=>$this->fontePadrao,'size'=>14,'style'=>'B');
        $this->__textBox($x,$y+1,$w,$h,$texto,$aFont,'T','C',0,'');
        $aFont = array('font'=>$this->fontePadrao,'size'=>8,'style'=>'');
        $texto = 'Documento Auxiliar da Nota Fiscal Eletronica';
        $h = 20;
        $this->__textBox($x,$y+6,$w,$h,$texto,$aFont,'T','C',0,'',FALSE);
        $aFont = array('font'=>$this->fontePadrao,'size'=>8,'style'=>'');
        $texto = '0 - ENTRADA';
        $y1 = $y + 14;
        $h = 8;
        $this->__textBox($x+2,$y1,$w,$h,$texto,$aFont,'T','L',0,'');
        $texto = '1 - SAIDA';
        $y1 = $y + 17;
        $this->__textBox($x+2,$y1,$w,$h,$texto,$aFont,'T','L',0,'');

        //*** tipo de nF ***
        $aFont = array('font'=>$this->fontePadrao,'size'=>12,'style'=>'B');
        $y1 = $y + 13;
        $h = 7;
        $texto = $this->ide->getElementsByTagName('tpNF')->item(0)->nodeValue;
        $this->__textBox($x+27,$y1,5,$h,$texto,$aFont,'C','C',1,'');

        //*** numero da NF ***
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'B');
        $y1 = $y + 20;
        $numNF = str_pad($this->ide->getElementsByTagName('nNF')->item(0)->nodeValue, 9, "0", STR_PAD_LEFT);
        $numNF = $this->__format($numNF,"###.###.###");
        $texto = "No. " . $numNF;
        $this->__textBox($x,$y1,$w,$h,$texto,$aFont,'C','C',0,'');

        //*** Série ***
        $y1 = $y + 23;
        $serie = str_pad($this->ide->getElementsByTagName('serie')->item(0)->nodeValue, 3, "0", STR_PAD_LEFT);
        $texto = "Serie " . $serie;
        $this->__textBox($x,$y1,$w,$h,$texto,$aFont,'C','C',0,'');

        //*** numero paginas ***
        $aFont = array('font'=>$this->fontePadrao,'size'=>8,'style'=>'I');
        $y1 = $y + 26;
        $texto = "Folha " . $pag . "/" . $totPag;
        $this->__textBox($x,$y1,$w,$h,$texto,$aFont,'C','C',0,'');

        //*** coluna codigo de barras ***
        $x += $w;
        $w = ($this->wPrint-$w1-$w2);//85;
        $w3 = $w;
        $h = 32;
        $this->__textBox($x,$y,$w,$h);
        $this->pdf->SetFillColor(0,0,0);
        $chave_acesso = str_replace('NFe', '', $this->infNFe->getAttribute("Id"));
        $bW = 75;
        $bH = 12;

        //*** codigo de barras ***
        $this->pdf->Code128($x+(($w-$bW)/2),$y+2,$chave_acesso,$bW,$bH);

        //*** linhas divisorias ***
        $this->pdf->Line($x,$y+4+$bH,$x+$w,$y+4+$bH);
        $this->pdf->Line($x,$y+12+$bH,$x+$w,$y+12+$bH);
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $y1 = $y+4+$bH;
        $h = 7;
        $texto = 'CHAVE DE ACESSO';
        $this->__textBox($x,$y1,$w,$h,$texto,$aFont,'T','L',0,'');
        $aFont = array('font'=>$this->fontePadrao,'size'=>8,'style'=>'');
        $y1 = $y+8+$bH;
        $texto = $this->__format( $chave_acesso,"####-####-####-####-####-####-####-####-####-####-####");
        //$texto = $chave_acesso;
        $this->__textBox($x+2,$y1,$w-2,$h,$texto,$aFont,'T','C',0,'');
        $texto = 'Consulta de autenticidade no portal nacional da NF-e';
        $aFont = array('font'=>$this->fontePadrao,'size'=>8,'style'=>'');
        $y1 = $y+12+$bH;
        $this->__textBox($x+2,$y1,$w-2,$h,$texto,$aFont,'T','C',0,'');
        $texto = 'www.nfe.fazenda.gov.br/portal ou no site da Sefaz Autorizadora';
        $aFont = array('font'=>$this->fontePadrao,'size'=>8,'style'=>'');
        $y1 = $y+16+$bH;
        $this->__textBox($x+2,$y1,$w-2,$h,$texto,$aFont,'T','C',0,'http://www.nfe.fazenda.gov.br/portal ou no site da Sefaz Autorizadora');

        //*** natureza da operação ***
        $texto = 'NATUREZA DA OPERACAO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $w = $w1+$w2;
        $y = $oldY;
        $oldY += $h;
        $x = $oldX;
        $h = 7;
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = $this->ide->getElementsByTagName("natOp")->item(0)->nodeValue;
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** PROTOCOLO DE AUTORIZAÇÃO DE USO ***
        $texto = 'PROTOCOLO DE AUTORIZACAO DE USO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $x += $w;
        $w = $w3;
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');

        if( isset( $this->nfeProc ) ) {
            $texto = !empty($this->nfeProc->getElementsByTagName("nProt")->item(0)->nodeValue) ? $this->nfeProc->getElementsByTagName("nProt")->item(0)->nodeValue : '';
            $tsHora = $this->__convertTime($this->nfeProc->getElementsByTagName("dhRecbto")->item(0)->nodeValue);
            if ($texto != ''){
                $texto .= "  -  " . date('d/m/Y   H:i:s',$tsHora);
            }
            $cStat = $this->nfeProc->getElementsByTagName("cStat")->item(0)->nodeValue;
        } else {
            $texto = 'ATENCAO: DANFE EM CONTINGENCIA';
            $cStat = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** INSCRIÇÃO ESTADUAL ***
        $w = round($this->wPrint * 0.333,0);
        $y += $h;
        $oldY += $h;
        $x = $oldX;
        $texto = 'INSCRICAO ESTADUAL';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = $this->emit->getElementsByTagName("IE")->item(0)->nodeValue;
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** INSCRIÇÃO ESTADUAL DO SUBST. TRIBUT. ***
        $x += $w;
        $texto = 'INSCRICAO ESTADUAL DO SUBST. TRIBUT.';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->emit->getElementsByTagName("IEST")->item(0)->nodeValue) ? $this->emit->getElementsByTagName("IEST")->item(0)->nodeValue : '';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** CNPJ ***
        $x += $w;
        $w = ($this->wPrint-(2*$w));
        $texto = 'CNPJ';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = $this->emit->getElementsByTagName("CNPJ")->item(0)->nodeValue;
        $texto = $this->__format($texto,"##.###.###/####-##");
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** Indicação de NF Homologação ***
        $tpAmb = $this->ide->getElementsByTagName('tpAmb')->item(0)->nodeValue;
        //*** indicar cancelamento ***
        if ( $cStat == '101') {
            //101 Cancelamento
            $x = 10;
            $y = $this->hPrint-90;
            $h = 25;
            $w = $this->wPrint-(2*$x);
            $this->pdf->SetTextColor(90,90,90);
            $texto = "NFe CANCELADA";
            $aFont = array('font'=>$this->fontePadrao,'size'=>42,'style'=>'B');
            $this->__textBox($x,$y,$w,$h,$texto,$aFont,'C','C',0,'');
            $this->pdf->SetTextColor(0,0,0);
        }
        //*** indicar sem valor ***
        if ( $tpAmb != 1 ) {
            $x = 10;
            $y = round($this->hPrint/2,0);
            $h = 5;
            $w = $this->wPrint-(2*$x);
            $this->pdf->SetTextColor(90,90,90);
            $texto = "SEM VALOR FISCAL";
            $aFont = array('font'=>$this->fontePadrao,'size'=>42,'style'=>'B');
            $this->__textBox($x,$y,$w,$h,$texto,$aFont,'C','C',0,'');
            $aFont = array('font'=>$this->fontePadrao,'size'=>30,'style'=>'B');
            $texto = "AMBIENTE DE HOMOLOGACAO";
            $this->__textBox($x,$y+20,$w,$h,$texto,$aFont,'C','C',0,'');
            $this->pdf->SetTextColor(0,0,0);
        }
        return $oldY;
    }

    //*****************************
    //*** Destinatario do DANFE ***
    //*****************************

    private function __destinatarioDANFE($x=0,$y=0){

        //*** DESTINATÁRIO / REMETENTE ***
        $oldX = $x;
        $oldY = $y;
        $w = $this->wPrint;
        $h = 7;
        $texto = 'DESTINATARIO / REMETENTE';
        $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'B');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',0,'');

        //*** NOME / RAZÃO SOCIAL ***
        $w = round($this->wPrint*0.61,0);
        $w1 = $w;
        $y += 3;
        $texto = 'NOME / RAZAO SOCIAL';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = $this->dest->getElementsByTagName("xNome")->item(0)->nodeValue;
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','L',0,'');

        //*** CNPJ / CPF ***
        $x += $w;
        $w = round($this->wPrint*0.23,0);
        $w2 = $w;
        $texto = 'CNPJ / CPF';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        if ( !empty($this->dest->getElementsByTagName("CNPJ")->item(0)->nodeValue) ) {
            $texto = $this->__format($this->dest->getElementsByTagName("CNPJ")->item(0)->nodeValue,"###.###.###/####-##");
        } else {
            $texto = !empty($this->dest->getElementsByTagName("CPF")->item(0)->nodeValue) ? $this->__format($this->dest->getElementsByTagName("CPF")->item(0)->nodeValue,"###.###.###-##") : '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** DATA DA EMISSÃO ***
        $x += $w;
        $w = $this->wPrint-($w1+$w2);
        $wx = $w;
        $texto = 'DATA DA EMISSAO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = $this->__ymd2dmy( substr($this->ide->getElementsByTagName("dhEmi")->item(0)->nodeValue,0,10) );
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** ENDEREÇO ***
        $w = round($this->wPrint*0.47,0);
        $w1 = $w;
        $y += $h;
        $x = $oldX;
        $texto = 'ENDERECO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = $this->dest->getElementsByTagName("xLgr")->item(0)->nodeValue;
        $texto .= ', ' . $this->dest->getElementsByTagName("nro")->item(0)->nodeValue;
        $texto .= ' ' . !empty($this->dest->getElementsByTagName("xCpl")->item(0)->nodeValue) ? $this->dest->getElementsByTagName("xCpl")->item(0)->nodeValue : '';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','L',0,'',TRUE);

        //*** BAIRRO / DISTRITO ***
        $x += $w;
        $w = round($this->wPrint*0.21,0);
        $w2 = $w;
        $texto = 'BAIRRO / DISTRITO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = $this->dest->getElementsByTagName("xBairro")->item(0)->nodeValue;
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** CEP ***
        $x += $w;
        $w = $this->wPrint-$w1-$w2-$wx;
        $w2 = $w;
        $texto = 'CEP';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->dest->getElementsByTagName("CEP")->item(0)->nodeValue) ? $this->dest->getElementsByTagName("CEP")->item(0)->nodeValue : '';
        $texto = $this->__format($texto,"#####-###");
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** DATA DA SAÍDA ***
        $x += $w;
        $w = $wx;
        $texto = 'DATA DA SAIDA';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->ide->getElementsByTagName("dhSaiEnt")->item(0)->nodeValue) ? substr($this->ide->getElementsByTagName("dhSaiEnt")->item(0)->nodeValue,0,10):"";
        $texto = $this->__ymd2dmy($texto);
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** MUNICÍPIO ***
        $w = $w1;
        $y += $h;
        $x = $oldX;
        $texto = 'MUNICIPIO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = $this->dest->getElementsByTagName("xMun")->item(0)->nodeValue;
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','L',0,'');

        //*** UF ***
        $x += $w;
        $w = 8;
        $texto = 'UF';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = $this->dest->getElementsByTagName("UF")->item(0)->nodeValue;
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** FONE / FAX ***
        $x += $w;
        $w = round(($this->wPrint -$w1-$wx-8)/2,0);
        $w3 = $w;
        $texto = 'FONE / FAX';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->dest->getElementsByTagName("fone")->item(0)->nodeValue) ? $this->__format($this->dest->getElementsByTagName("fone")->item(0)->nodeValue,'(##) ####-####') : '';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** INSCRIÇÃO ESTADUAL ***
        $x += $w;
        $w = $this->wPrint -$w1-$wx-8-$w3;
        $texto = 'INSCRICAO ESTADUAL';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = $this->dest->getElementsByTagName("IE")->item(0)->nodeValue;
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** HORA DA SAÍDA ***
        $x += $w;
        $w = $wx;
        $texto = 'HORA DA SAIDA';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->ide->getElementsByTagName("dhSaiEnt")->item(0)->nodeValue) ? substr($this->ide->getElementsByTagName("dhSaiEnt")->item(0)->nodeValue,11,8):"";
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        return ($y + $h);
    }

    //***********************
    //*** Fatura do DANFE ***
    //***********************

    private function __faturaDANFE($x,$y){

    $linha = 1;
    $h = 8+3;
    $oldx = $x;
        //*** verificar se existem duplicatas ***
        if ( $this->dup->length > 0 ) {
            //*** FATURA / DUPLICATA ***
            $texto = "FATURA / DUPLICATA";
            $texto = $texto;
            $w = $this->wPrint;
            $h = 8;
            $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'B');
            $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',0,'');
            $y += 3;
            $dups = "";
            $dupcont = 0;
            $nFat = $this->dup->length;
            $w = round($this->wPrint/7.018,0)-1;
            $increm = 1;
            foreach ($this->dup as $k => $d) {
                $nDup = $this->dup->item($k)->getElementsByTagName('nDup')->item(0)->nodeValue;
                $dDup = $this->__ymd2dmy($this->dup->item($k)->getElementsByTagName('dVenc')->item(0)->nodeValue);
                $vDup = 'R$ ' . number_format($this->dup->item($k)->getElementsByTagName('vDup')->item(0)->nodeValue, 2, ",", ".");
                $h = 8;
                $texto = '';
                $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
                $this->__textBox($x,$y,$w,$h,'Num.',$aFont,'T','L',1,'');
                $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'');
                $this->__textBox($x,$y,$w,$h,$nDup,$aFont,'T','R',0,'');
                $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
                $this->__textBox($x,$y,$w,$h,'Venc.',$aFont,'C','L',0,'');
                $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'');
                $this->__textBox($x,$y,$w,$h,$dDup,$aFont,'C','R',0,'');
                $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
                $this->__textBox($x,$y,$w,$h,'Valor',$aFont,'B','L',0,'');
                $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'');
                $this->__textBox($x,$y,$w,$h,$vDup,$aFont,'B','R',0,'');
                $x += $w+$increm;
                $dupcont += 1;
                if ($dupcont > 6) {
                    $y += 9;
                    $x = $oldx;
                    $dupcont = 0;
                    $linha += 1;
                }
                if ($linha == 4){
                    $linha = 3;
                    break;
                }
            }
            if ($dupcont == 0){
                $y = $y - 9;
                $linha = $linha -1;
            }
            return ($y+$h);
        } else {
            $linha = 0;
            return ($y-2);
    }
    }

    //************************
    //*** Imposto do DANFE ***
    //************************

    private function __impostoDANFE($x,$y){
        $oldX = $x;
        $texto = "CALCULO DO IMPOSTO";
        $w = $this->wPrint;
        $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'B');
        $this->__textBox($x,$y,$w,8,$texto,$aFont,'T','L',0,'');

        //*** BASE DE CÁLCULO DO ICMS ***
        $w = round($this->wPrint*0.21,0);
        $w1 = $w;
        $y += 3;
        $h = 7;
        $texto = 'BASE DE CALCULO DO ICMS';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = number_format($this->ICMSTot->getElementsByTagName("vBC")->item(0)->nodeValue, 2, ",", ".");
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        //*** VALOR DO ICMS ***
        $x += $w;
        $w = round($this->wPrint*0.18,0);
        $w2 = $w;
        $texto = 'VALOR DO ICMS';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = number_format($this->ICMSTot->getElementsByTagName("vICMS")->item(0)->nodeValue, 2, ",", ".");
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        //*** BASE DE CÁLCULO DO ICMS S.T. ***
        $x += $w;
        $w = $w2;
        $texto = 'BASE DE CALCULO DO ICMS S.T.';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->ICMSTot->getElementsByTagName("vBCST")->item(0)->nodeValue) ? number_format($this->ICMSTot->getElementsByTagName("vBCST")->item(0)->nodeValue, 2, ",", ".") : '0,00';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        //*** VALOR DO ICMS SUBSTITUIÇÃO ***
        $x += $w;
        $w = $w2;
        $texto = 'VALOR DO ICMS SUBSTITUICAO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->ICMSTot->getElementsByTagName("vST")->item(0)->nodeValue) ? number_format($this->ICMSTot->getElementsByTagName("vST")->item(0)->nodeValue, 2, ",", ".") : '0,00';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        //*** VALOR TOTAL DOS PRODUTOS ***
        $x += $w;
        $w = $this->wPrint-($w1+3*$w2);
        $wx = $w;
        $texto = 'VALOR TOTAL DOS PRODUTOS';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = number_format($this->ICMSTot->getElementsByTagName("vProd")->item(0)->nodeValue, 2, ",", ".");
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        //*** VALOR DO FRETE ***
        $w = round($this->wPrint*0.15,0);
        $w1 = $w;
        $y += $h;
        $x = $oldX;
        $h = 7;
        $texto = 'VALOR DO FRETE';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = number_format($this->ICMSTot->getElementsByTagName("vFrete")->item(0)->nodeValue, 2, ",", ".");
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        //*** VALOR DO SEGURO ***
        $x += $w;
        $w = $w1;//31;
        $texto = 'VALOR DO SEGURO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->ICMSTot->getElementsByTagName("vSeg")->item(0)->nodeValue) ? number_format($this->ICMSTot->getElementsByTagName("vSeg")->item(0)->nodeValue, 2, ",", ".") : '0,00';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        //*** DESCONTO ***
        $x += $w;
        $w = $w1;
        $texto = 'DESCONTO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->ICMSTot->getElementsByTagName("vDesc")->item(0)->nodeValue) ? number_format($this->ICMSTot->getElementsByTagName("vDesc")->item(0)->nodeValue, 2, ",", ".") : '0,00';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        //*** OUTRAS DESPESAS ***
        $x += $w;
        $w = $w1;
        $texto = 'OUTRAS DESPESAS';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->ICMSTot->getElementsByTagName("vOutro")->item(0)->nodeValue) ? number_format($this->ICMSTot->getElementsByTagName("vOutro")->item(0)->nodeValue, 2, ",", ".") : '0,00';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        //*** VALOR TOTAL DO IPI ***
        $x += $w;
        $w = $this->wPrint-($wx+4*$w1);
        $texto = 'VALOR TOTAL DO IPI';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->ICMSTot->getElementsByTagName("vIPI")->item(0)->nodeValue) ? number_format($this->ICMSTot->getElementsByTagName("vIPI")->item(0)->nodeValue, 2, ",", ".") : '0,00';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        //*** VALOR TOTAL DA NOTA ***
        $x += $w;
        $w = $wx;
        $texto = 'VALOR TOTAL DA NOTA';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = number_format($this->ICMSTot->getElementsByTagName("vNF")->item(0)->nodeValue, 2, ",", ".");
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        return ($y+$h);
    }

    //***************************
    //*** Transporte do DANFE ***
    //***************************

    private function __transporteDANFE($x,$y){
        $oldX = $x;

        //*** TRANSPORTADOR / VOLUMES TRANSPORTADOS ***
        $texto = "TRANSPORTADOR / VOLUMES TRANSPORTADOS";
        $w = $this->wPrint;
        $h = 7;
        $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'B');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',0,'');

        //*** NOME / RAZÃO SOCIAL ***
        $w1 = round($this->wPrint*0.29,0);
        $y += 3;
        $texto = 'NOME / RAZAO SOCIAL';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w1,$h,$texto,$aFont,'T','L',1,'');
        if ( isset($this->transporta) ) {
            $texto = !empty($this->transporta->getElementsByTagName("xNome")->item(0)->nodeValue) ? $this->transporta->getElementsByTagName("xNome")->item(0)->nodeValue : '';
        } else {
            $texto = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w1,$h,$texto,$aFont,'B','L',0,'');

        //*** FRETE POR CONTA ***
        $x += $w1;
        $w2 = round($this->wPrint*0.15,0);
        $texto = 'FRETE POR CONTA';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'T','L',1,'');
        $tipoFrete = !empty($this->transp->getElementsByTagName("modFrete")->item(0)->nodeValue) ? $this->transp->getElementsByTagName("modFrete")->item(0)->nodeValue : '0';
        switch( $tipoFrete ){
            case 0:
                default:
                $texto = "(0) Emitente";
                break;
            case 1:
                $texto = "(1) Destinatario";
                break;
            case 2:
                $texto = "(2) Terceiros";
                break;
            case 9:
                $texto = "(9) Sem Frete";
                break;
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'C','C',1,'');

        //*** CÓDIGO ANTT ***
        $x += $w2;
        $texto = 'CODIGO ANTT';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'T','L',1,'');
        if ( isset($this->veicTransp) ){
            $texto = !empty($this->veicTransp->getElementsByTagName("RNTC")->item(0)->nodeValue) ? $this->veicTransp->getElementsByTagName("RNTC")->item(0)->nodeValue : '';
        } else {
            $texto = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'B','C',0,'');

        //*** PLACA DO VEÍCULO ***
        $x += $w2;
        $texto = 'PLACA DO VEICULO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'T','L',1,'');
        if ( isset($this->veicTransp) ){
            $texto = !empty($this->veicTransp->getElementsByTagName("placa")->item(0)->nodeValue) ? $this->veicTransp->getElementsByTagName("placa")->item(0)->nodeValue : '';
        } else {
            $texto = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'B','C',0,'');

        //*** UF ***
        $x += $w2;
        $w3 = round($this->wPrint*0.04,0);
        $texto = 'UF';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w3,$h,$texto,$aFont,'T','L',1,'');
        if ( isset($this->veicTransp) ){
            $texto = !empty($this->veicTransp->getElementsByTagName("UF")->item(0)->nodeValue) ? $this->veicTransp->getElementsByTagName("UF")->item(0)->nodeValue : '';
        } else {
            $texto = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w3,$h,$texto,$aFont,'B','C',0,'');

        //*** CNPJ / CPF ***
        $x += $w3;
        $w = $this->wPrint-($w1+3*$w2+$w3);
        $texto = 'CNPJ / CPF';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        if ( isset($this->transporta) ){
            $texto = !empty($this->transporta->getElementsByTagName("CNPJ")->item(0)->nodeValue) ? $this->__format($this->transporta->getElementsByTagName("CNPJ")->item(0)->nodeValue,"##.###.###/####-##") : '';
            if ($texto == ''){
                $texto = !empty($this->transporta->getElementsByTagName("CPF")->item(0)->nodeValue) ? $this->__format($this->transporta->getElementsByTagName("CPF")->item(0)->nodeValue,"###.###.###-##") : '';
            }
        } else {
            $texto = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** ENDEREÇO ***
        $y += $h;
        $x = $oldX;
        $h = 7;
        $w1 = round($this->wPrint*0.44,0);
        $texto = 'ENDERECO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w1,$h,$texto,$aFont,'T','L',1,'');
        if ( isset($this->transporta) ){
            $texto = !empty($this->transporta->getElementsByTagName("xEnder")->item(0)->nodeValue) ? $this->transporta->getElementsByTagName("xEnder")->item(0)->nodeValue : '';
        } else {
            $texto = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w1,$h,$texto,$aFont,'B','L',0,'');

        //*** MUNICÍPIO ***
        $x += $w1;
        $w2 = round($this->wPrint*0.30,0);
        $texto = 'MUNICIPIO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'T','L',1,'');
        if ( isset($this->transporta) ){
            $texto = !empty($this->transporta->getElementsByTagName("xMun")->item(0)->nodeValue) ? $this->transporta->getElementsByTagName("xMun")->item(0)->nodeValue : '';
        } else {
            $texto = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'B','C',0,'');

        //*** UF ***
        $x += $w2;
        $w3 = round($this->wPrint*0.04,0);
        $texto = 'UF';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w3,$h,$texto,$aFont,'T','L',1,'');
        if ( isset($this->transporta) ){
            $texto = !empty($this->transporta->getElementsByTagName("UF")->item(0)->nodeValue) ? $this->transporta->getElementsByTagName("UF")->item(0)->nodeValue : '';
        } else {
            $texto = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w3,$h,$texto,$aFont,'B','C',0,'');

        //*** INSCRIÇÃO ESTADUAL ***
        $x += $w3;
        $w = $this->wPrint-($w1+$w2+$w3);
        $texto = 'INSCRICAO ESTADUAL';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        if ( isset($this->transporta) ){
            $texto = $this->transporta->getElementsByTagName("IE")->item(0)->nodeValue;
        } else {
            $texto = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','C',0,'');

        //*** QUANTIDADE ***
        $y += $h;
        $x = $oldX;
        $h = 7;
        $w1 = round($this->wPrint*0.10,0);
        $texto = 'QUANTIDADE';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w1,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->transp->getElementsByTagName("qVol")->item(0)->nodeValue) ? $this->transp->getElementsByTagName("qVol")->item(0)->nodeValue : '';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w1,$h,$texto,$aFont,'B','C',0,'');

        //*** ESPÉCIE ***
        $x += $w1;
        $w2 = round($this->wPrint*0.17,0);
        $texto = 'ESPECIE';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->transp->getElementsByTagName("esp")->item(0)->nodeValue) ? $this->transp->getElementsByTagName("esp")->item(0)->nodeValue : '';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'B','C',0,'');

        //*** MARCA ***
        $x += $w2;
        $texto = 'MARCA';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->transp->getElementsByTagName("marca")->item(0)->nodeValue) ? $this->transp->getElementsByTagName("marca")->item(0)->nodeValue : '';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'B','C',0,'');

        //*** NUMERO ***
        $x += $w2;
        $texto = 'NUMERO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->transp->getElementsByTagName("nVol")->item(0)->nodeValue) ? $this->transp->getElementsByTagName("nVol")->item(0)->nodeValue : '';
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'B','C',0,'');

        //*** PESO BRUTO ***
        $x += $w2;
        $w3 = round($this->wPrint*0.20,0);
        $texto = 'PESO BRUTO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w3,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->transp->getElementsByTagName("pesoB")->item(0)->nodeValue) ? $this->transp->getElementsByTagName("pesoB")->item(0)->nodeValue : '0.0';
        $texto = number_format($texto, 3, ",", ".");
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w3,$h,$texto,$aFont,'B','R',0,'');

        //*** PESO LÍQUIDO ***
        $x += $w3;
        $w = $this->wPrint -($w1+3*$w2+$w3);
        $texto = 'PESO LIQUIDO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $texto = !empty($this->transp->getElementsByTagName("pesoL")->item(0)->nodeValue) ? $this->transp->getElementsByTagName("pesoL")->item(0)->nodeValue : '0.0';
        $texto = number_format($texto, 3, ",", ".");
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        return ($y+$h);
    }

    //**********************
    //*** Itens do DANFE ***
    //**********************

    private function __itensDANFE($x,$y,$nInicio,$hmax,$pag=0,$totpag=0) {
        $oldX = $x;
        $oldY = $y;

        //*** DADOS DOS PRODUTOS / SERVIÇOS ***
        $texto = "DADOS DOS PRODUTOS / SERVICOS ";
        $w = $this->wPrint;
        $h = 4;
        $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'B');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',0,'');
        $y += 3;
        $w = $this->wPrint;

        //*** desenha a caixa dos dados dos itens da NF ***
        $texto = '';
        $this->__textBox($x,$y,$w,$hmax);

        //*** CÓDIGO PRODUTO ***
        $texto = "CODIGO PRODUTO";
        $w1 = round($this->wPrint*0.09,0);
        $h = 4;
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w1,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w1, $y, $x+$w1, $y+$hmax);

        //*** DESCRIÇÃO DO PRODUTO / SERVIÇO ***
        $x += $w1;
        $w2 = round($this->wPrint*0.31,0);
        $texto = 'DESCRICAO DO PRODUTO / SERVICO';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w2,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w2, $y, $x+$w2, $y+$hmax);

        //*** NCM/SH ***
        $x += $w2;
        $w3 = round($this->wPrint*0.06,0);
        $texto = 'NCM/SH';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w3,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w3, $y, $x+$w3, $y+$hmax);

        //*** ST/CSOSN ***
        $x += $w3;
        $w4 = round($this->wPrint*0.04,0);
        $texto = 'ST CSOSN';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w4,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w4, $y, $x+$w4, $y+$hmax);

        //*** CFOP ***
        $x += $w4;
        $w5 = round($this->wPrint*0.04,0);
        $texto = 'CFOP';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w5,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w5, $y, $x+$w5, $y+$hmax);

        //*** UN ***
        $x += $w5;
        $w6 = round($this->wPrint*0.06,0);
        $texto = 'UN';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w6,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w6, $y, $x+$w6, $y+$hmax);

        //*** QUANTIDADE ***
        $x += $w6;
        $w7 = round($this->wPrint*0.06,0);
        $texto = 'QUANT';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w7,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w7, $y, $x+$w7, $y+$hmax);

        //*** VALOR UNITARIO ***
        $x += $w7;
        $w8 = round($this->wPrint*0.06,0);
        $texto = 'VALOR UNIT';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w8,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w8, $y, $x+$w8, $y+$hmax);

        //*** VALOR TOTAL ***
        $x += $w8;
        $w9 = round($this->wPrint*0.06,0);
        $texto = 'VALOR TOTAL';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w9,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w9, $y, $x+$w9, $y+$hmax);

        //*** B.CÁLC ICMS ***
        $x += $w9;
        $w10 = round($this->wPrint*0.06,0);
        $texto = 'B.CALC ICMS';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w10,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w10, $y, $x+$w10, $y+$hmax);

        //*** VALOR ICMS ***
        $x += $w10;
        $w11 = round($this->wPrint*0.06,0);
        $texto = 'VALOR ICMS';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w11,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w11, $y, $x+$w11, $y+$hmax);

        //*** VALOR IPI ***
        $x += $w11;
        $w12 = round($this->wPrint*0.05,0);
        $texto = 'VALOR IPI';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w12,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w12, $y, $x+$w12, $y+$hmax);

        //*** ALÍQ. ICMS ***
        $x += $w12;
        $w13 = round($this->wPrint*0.035,0);
        $texto = 'ALIQ. ICMS';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w13,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($x+$w13, $y, $x+$w13, $y+$hmax);

        //*** ALÍQ. IPI ***
        $x += $w13;
        $w14 = $this->wPrint-($w1+$w2+$w3+$w4+$w5+$w6+$w7+$w8+$w9+$w10+$w11+$w12+$w13);
        $texto = 'ALIQ. IPI';
        $this->__textBox($x,$y,$w14,$h,$texto,$aFont,'C','C',0,'',FALSE);
        $this->pdf->Line($oldX, $y+$h+1, $oldX + $this->wPrint, $y+$h+1);
        $y += 5;

        //*** DADOS DOS PRODUTOS ***
        $i = 0;
        $hUsado = 0;
        $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'');
        foreach ($this->det as $d) {
            if ( $i >= $nInicio) {
                $prod = $this->det->item($i)->getElementsByTagName("prod")->item(0);
        $infAdProd = substr(!empty($this->det->item($i)->getElementsByTagName("infAdProd")->item(0)->nodeValue) ? $this->det->item($i)->getElementsByTagName("infAdProd")->item(0)->nodeValue : '',0,120);
        if (!empty($infAdProd)){
           $infAdProd .= ' ';
        }

        //*** Verificando se a impressão irá ultrapassar o limite do DANFe ***
        $textoProduto = $prod->getElementsByTagName("xProd")->item(0)->nodeValue;
        $texto = $textoProduto . ' ' . $infAdProd;
        $linhaDescr = $this->__GetNumLines($texto,$w2-1,$aFont);
                $h = ($linhaDescr * $this->pdf->FontSize)+1;
                $hUsado += $h;
                if ($hUsado > $hmax){
                    $nInicio = $i;
                    break;
                }

                //*** carrega as tags do item ***
                $imposto = $this->det->item($i)->getElementsByTagName("imposto")->item(0);
                $ICMS = $imposto->getElementsByTagName("ICMS")->item(0);
                $IPI  = $imposto->getElementsByTagName("IPI")->item(0);

                //*** corrige o x ***
                $x=$oldX;

                //*** codigo do produto ***
                $texto = $prod->getElementsByTagName("cProd")->item(0)->nodeValue;
                $this->__textBox($x,$y,$w1,$h,$texto ,$aFont,'T','C',0,'');
                $x += $w1;

                //*** DESCRIÇÃO ***
                $texto = $prod->getElementsByTagName("xProd")->item(0)->nodeValue . ' '. $infAdProd;
                $this->__textBox($x,$y,$w2-1,$h,$texto,$aFont,'T','L',0,'',FALSE);
                $x += $w2;

                //*** NCM ***
                $texto = !empty($prod->getElementsByTagName("NCM")->item(0)->nodeValue) ? $prod->getElementsByTagName("NCM")->item(0)->nodeValue : '';
                $this->__textBox($x,$y,$w3,$h,$texto,$aFont,'T','C',0,'');
                $x += $w3;
                if ( isset($ICMS) ){
                    if($ICMS->getElementsByTagName("CST")->item(0)->nodeValue > 0)
                    {
                      $texto = $ICMS->getElementsByTagName("orig")->item(0)->nodeValue . $ICMS->getElementsByTagName("CST")->item(0)->nodeValue;
                    }
                    else
                    {
                      if($ICMS->getElementsByTagName("CSOSN")->item(0)->nodeValue > 0)
                      {
                        $texto = $ICMS->getElementsByTagName("CSOSN")->item(0)->nodeValue;
                      }
                      else
                      {
                        $texto = $ICMS->getElementsByTagName("orig")->item(0)->nodeValue . '00';
                      }
                    }
                    $this->__textBox($x,$y,$w4,$h,$texto,$aFont,'T','C',0,'');
                }
                $x += $w4;
                $texto = $prod->getElementsByTagName("CFOP")->item(0)->nodeValue;
                $this->__textBox($x,$y,$w5,$h,$texto,$aFont,'T','C',0,'');
                $x += $w5;
                $texto = $prod->getElementsByTagName("uCom")->item(0)->nodeValue;
                $this->__textBox($x,$y,$w6,$h,$texto,$aFont,'T','C',0,'');
                $x += $w6;
                $texto = number_format($prod->getElementsByTagName("qCom")->item(0)->nodeValue, 4, ",", ".");
                $this->__textBox($x,$y,$w7,$h,$texto,$aFont,'T','R',0,'');
                $x += $w7;
                $texto = number_format($prod->getElementsByTagName("vUnCom")->item(0)->nodeValue, 4, ",", ".");
                $this->__textBox($x,$y,$w8,$h,$texto,$aFont,'T','R',0,'');
                $x += $w8;
                $texto = number_format($prod->getElementsByTagName("vProd")->item(0)->nodeValue, 2, ",", ".");
                $this->__textBox($x,$y,$w9,$h,$texto,$aFont,'T','R',0,'');
                $x += $w9;
                if ( isset($ICMS) ){
                    $texto = !empty($ICMS->getElementsByTagName("vBC")->item(0)->nodeValue) ? number_format($ICMS->getElementsByTagName("vBC")->item(0)->nodeValue, 2, ",", ".") : '0,00';
                    $this->__textBox($x,$y,$w10,$h,$texto,$aFont,'T','R',0,'');
                }
                $x += $w10;
                if (isset($ICMS)){
                   $texto = !empty($ICMS->getElementsByTagName("vICMS")->item(0)->nodeValue) ? number_format($ICMS->getElementsByTagName("vICMS")->item(0)->nodeValue, 2, ",", ".") : '0,00';
                   $this->__textBox($x,$y,$w11,$h,$texto,$aFont,'T','R',0,'');
                }
                $x += $w11;
                if ( isset($IPI) ){
                    $texto = !empty($IPI->getElementsByTagName("vIPI")->item(0)->nodeValue) ? number_format($IPI->getElementsByTagName("vIPI")->item(0)->nodeValue, 2, ",", ".") :'';
                } else {
                    $texto = '';
                }
                $this->__textBox($x,$y,$w12,$h,$texto,$aFont,'T','R',0,'');
                $x += $w12;
                if (isset($ICMS)){
                   $texto = !empty($ICMS->getElementsByTagName("pICMS")->item(0)->nodeValue) ? number_format($ICMS->getElementsByTagName("pICMS")->item(0)->nodeValue, 0, ",", ".") : '0,00';
                   $this->__textBox($x,$y,$w13,$h,$texto,$aFont,'T','C',0,'');
                }
                $x += $w13;
                if ( isset($IPI) ){
                    $texto = !empty($IPI->getElementsByTagName("pIPI")->item(0)->nodeValue) ? number_format($IPI->getElementsByTagName("pIPI")->item(0)->nodeValue, 0, ",", ".") : '';
                } else {
                    $texto = '';
                }
                $this->__textBox($x,$y,$w14,$h,$texto,$aFont,'T','C',0,'');
                $y += $h;
                $i++;
            } else{
                $i++;
            }
        }
        return $oldY+$hmax;
    }

    //************************
    //*** Cálculo do ISSQN ***
    //************************

    private function __issqnDANFE($x,$y){
        $oldX = $x;

        //*** CÁLCULO DO ISSQN ***
        $texto = "CALCULO DO ISSQN";
        $w = $this->wPrint;
        $h = 7;
        $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'B');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',0,'');

        //*** INSCRIÇÃO MUNICIPAL ***
        $y += 3;
        $w = round($this->wPrint*0.23,0);
        $texto = 'INSCRICAO MUNICIPAL';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');

        //*** inscrição municipal ***
        $texto = $this->emit->getElementsByTagName("im")->item(0)->nodeValue;
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'B');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','L',0,'');

        //*** VALOR TOTAL DOS SERVIÇOS ***
        $x += $w;
        $texto = 'VALOR TOTAL DOS SERVICOS';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        if ( isset($this->ISSQNtot) ){
            $texto = !empty($this->ISSQNtot->getElementsByTagName("vServ")->item(0)->nodeValue) ? $this->ISSQNtot->getElementsByTagName("vServ")->item(0)->nodeValue : '';
            $texto = number_format($texto, 2, ",", ".");
        } else {
            $texto = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'B');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        //*** BASE DE CÁLCULO DO ISSQN ***
        $x += $w;
        $texto = 'BASE DE CALCULO DO ISSQN';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        if ( isset($this->ISSQNtot) ){
            $texto = !empty($this->ISSQNtot->getElementsByTagName("vBC")->item(0)->nodeValue) ? $this->ISSQNtot->getElementsByTagName("vBC")->item(0)->nodeValue : '';
            $texto = number_format($texto, 2, ",", ".");
        } else {
            $texto = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'B');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        //*** VALOR TOTAL DO ISSQN ***
        $x += $w;
        $w = $this->wPrint - (3 * $w);
        $texto = 'VALOR TOTAL DO ISSQN';
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        if ( isset($this->ISSQNtot) ){
            $texto = !empty($this->ISSQNtot->getElementsByTagName("vISS")->item(0)->nodeValue) ? $this->ISSQNtot->getElementsByTagName("vISS")->item(0)->nodeValue : '';
            $texto = number_format($texto, 2, ",", ".");
        } else {
            $texto = '';
        }
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'B');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'B','R',0,'');

        return ($y+$h+1);
    }

    //*********************************
    //*** Dados Adicionais do DANFE ***
    //*********************************

    private function __dadosAdicionaisDANFE($x,$y,$pag,$h){
        $oldX = $x;

        //*** DADOS ADICIONAIS ***
        $texto = "DADOS ADICIONAIS";
        $w = $this->wPrint;
        $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'B');
        $this->__textBox($x,$y,$w,8,$texto,$aFont,'T','L',0,'');

        //*** INFORMAÇÕES COMPLEMENTARES ***
        $texto = "INFORMACOES COMPLEMENTARES";
        $y += 3;
        $w = round($this->wPrint*0.66,0);
        $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'B');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        if (isset($this->infAdic)){
            $i = 0;
            $texto = '';
            $texto .= !empty($this->infAdic->getElementsByTagName("infCpl")->item(0)->nodeValue) ? ' ' . $this->infAdic->getElementsByTagName("infCpl")->item(0)->nodeValue : '';
            $texto .= !empty($this->infAdic->getElementsByTagName("infAdFisco")->item(0)->nodeValue) ? "\r\n " . $this->infAdic->getElementsByTagName("infAdFisco")->item(0)->nodeValue : '';
            $obsCont = $this->infAdic->getElementsByTagName("obsCont");
            if (isset($obsCont)){
                foreach ($obsCont as $obs){
                    $campo =  $obsCont->item($i)->getAttribute("xCampo");
                    $xTexto = !empty($obsCont->item($i)->getElementsByTagName("xTexto")->item(0)->nodeValue) ?  $obsCont->item($i)->getElementsByTagName("xTexto")->item(0)->nodeValue : '';
                    $texto .= "\r\n" . $campo . ':  ' . $xTexto;
                    $i++;
                }
            }
        } else {
            $texto = '';
        }
        $y += 1;
        $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'');
        $this->__textBox($x,$y+2,$w-2,$h-3,$texto,$aFont,'T','L',0,'',FALSE);

        //*** RESERVADO AO FISCO ***
        $texto = "RESERVADO AO FISCO";
        $x += $w;
        $y -= 1;
        $w = $this->wPrint-$w;
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'B');
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'T','L',1,'');
        $tpEmis = $this->ide->getElementsByTagName("tpEmis")->item(0)->nodeValue;
        $texto = '';
        switch($tpEmis){
            case 2:
                $texto = 'CONTINGENCIA FS emissao em contingencia com impressao do DANFE em Formulario de Seguranca';
                break;
            case 3:
                $texto = 'CONTINGENCIA SCAN';
                break;
            case 4:
                $texto = 'CONTINGENCIA DPEC';
                break;
            case 5:
                $texto = 'CONTINGENCIA FSDA emissao em contingencia com impressao do DANFE em Formulario de Seguranca para Impressao de Documento Auxiliar de Documento Fiscal Eletronico (FS-DA)';
                break;
        }
        $y += 2;
        $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'');
        $this->__textBox($x,$y,$w-2,$h-3,$texto,$aFont,'T','L',0,'',FALSE);
        return $y+$h;
    }

    //***********************
    //*** Rodapé do DANFE ***
    //***********************

    private function __rodapeDANFE(){
        $x = 2;
        $y = $this->hPrint - 2;
        $texto = "Impresso em  ". date('d/m/Y   H:i:s');
        $w = $this->wPrint-4;
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'I');
        $this->__textBox($x,$y,$w,4,$texto,$aFont,'T','L',0,'');
        $texto = "ManagerTEX (NFe 3.10) - www.datatex.com.br";
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'I');
        //$this->__textBox($x, $y, $w, $h, $text, $aFont, $vAlign, $hAlign, $border, $link, $force, $hmax, $hini)
        $this->__textBox($x,$y,$w,4,$texto,$aFont,'T','R',0,'');
    }

    //************************
    //*** Canhoto do DANFE ***
    //************************

    private function __canhotoDANFE($x,$y) {
        $oldX = $x;
        $w = round($this->wPrint * 0.81,0); //168;
        $h = 10;

        //*** desenha caixa ***
        $texto = '';
        $this->__textBox($x,$y,$w,$h,$texto,$aFont,'C','L',1,'',FALSE);
        $numNF = str_pad($this->ide->getElementsByTagName('nNF')->item(0)->nodeValue, 9, "0", STR_PAD_LEFT);
        $serie = str_pad($this->ide->getElementsByTagName('serie')->item(0)->nodeValue, 3, "0", STR_PAD_LEFT);
        $texto = "RECEBEMOS DE ";
        $texto .= $this->emit->getElementsByTagName("xNome")->item(0)->nodeValue . " ";
        $texto .= "OS PRODUTOS E/OU SERVICOS CONSTANTES DA NOTA FISCAL ELETRONICA INDICADA AO LADO. EMISSAO: ";
        $texto .= $this->__ymd2dmy( substr($this->ide->getElementsByTagName("dhEmi")->item(0)->nodeValue,0,10) ) ." ";
        $texto .= "VALOR TOTAL: R$ ";
        $texto .= number_format($this->ICMSTot->getElementsByTagName("vNF")->item(0)->nodeValue, 2, ",", ".") . " ";
        $texto .= "DESTINATARIO: ";
        $texto .= $this->dest->getElementsByTagName("xNome")->item(0)->nodeValue . " - ";
        $texto .= $this->enderDest->getElementsByTagName("xLgr")->item(0)->nodeValue . ", ";
        $texto .= $this->enderDest->getElementsByTagName("nro")->item(0)->nodeValue . " - ";
        $texto .= !empty($this->enderDest->getElementsByTagName("xCpl")->item(0)->nodeValue) ? $this->enderDest->getElementsByTagName("xCpl")->item(0)->nodeValue . " " : '';
        $texto .= $this->enderDest->getElementsByTagName("xBairro")->item(0)->nodeValue . " ";
        $texto .= $this->enderDest->getElementsByTagName("xMun")->item(0)->nodeValue . "-";
        $texto .= $this->enderDest->getElementsByTagName("UF")->item(0)->nodeValue . "";
        $aFont = array('font'=>$this->fontePadrao,'size'=>7,'style'=>'');
        $this->__textBox($x,$y,$w-1,$h,$texto,$aFont,'C','L',0,'',FALSE);
        $x1 = $x + $w;
        $w1 = $this->wPrint - $w;
        $texto = "NF-e";
        $aFont = array('font'=>$this->fontePadrao,'size'=>14,'style'=>'B');
        $this->__textBox($x1,$y,$w1,18,$texto,$aFont,'T','C',0,'');
        $texto = "No. " . $this->__format($numNF,"###.###.###") . " \n";
        $texto .= "Serie $serie";
        $aFont = array('font'=>$this->fontePadrao,'size'=>10,'style'=>'B');
        $this->__textBox($x1,$y,$w1,18,$texto,$aFont,'C','C',1,'');

        //*** DATA DO RECEBIMENTO ***
        $texto = "DATA DO RECEBIMENTO";
        $y += $h;
        $w2 = round($this->wPrint*0.17,0); //35;
        $aFont = array('font'=>$this->fontePadrao,'size'=>6,'style'=>'');
        $this->__textBox($x,$y,$w2,8,$texto,$aFont,'T','L',1,'');

        //*** IDENTIFICAÇÃO E ASSINATURA DO RECEBEDOR ***
        $x += $w2;
        $w3 = $w-$w2;
        $texto = "IDENTIFICACAO E ASSINATURA DO RECEBEDOR";
        $this->__textBox($x,$y,$w3,8,$texto,$aFont,'T','L',1,'');
        //$x -= 35;
        $x = $oldX;
        $y += 9;
        $this->__HdashedLine($x,$y,$this->wPrint,0.1,80);
        $y += 2;
        return $y;
    }

    //******************************
    //*** Formatação das Strings ***
    //******************************

    private function __format($campo='',$mascara=''){
        $sLimpo = preg_replace("(/[' '-./ t]/)",'',$campo);
        $tCampo = strlen($sLimpo);
        $tMask = strlen($mascara);
        if ( $tCampo > $tMask ) {
            $tMaior = $tCampo;
        } else {
            $tMaior = $tMask;
        }

        $aMask = str_split($mascara);
        $z=0;
        $flag=FALSE;
        foreach ( $aMask as $letra ){
                if ($letra == '#'){
                   $z++;
                }
        }
        if ( $z > $tCampo ) {
            $flag=TRUE;
        }

        $sRetorno = '';
        $sRetorno = str_pad($sRetorno, $tCampo+$tMask, " ",STR_PAD_LEFT);
        $tRetorno = strlen($sRetorno);

        if( $sLimpo != '' && $mascara !='' ) {
            $x = $tMask;
            $y = $tCampo;
            $cI = 0;
            for ( $i = $tMaior-1; $i >= 0; $i-- ) {
                if ($cI < $z){
                    if ( $x > 0 ) {
                        $digMask = $mascara[--$x];
                    } else {
                        $digMask = '#';
                    }
                    if ( $digMask=='#' ) {
                        $cI++;
                        if ( $y > 0 ) {
                            $sRetorno[--$tRetorno] = $sLimpo[--$y];
                        } else {
                            //$sRetorno[--$tRetorno] = '';
                        }
                    } else {
                        if ( $y > 0 ) {
                            $sRetorno[--$tRetorno] = $mascara[$x];
                        } else {
                            if ($mascara[$x] =='('){
                                $sRetorno[--$tRetorno] = $mascara[$x];
                            }
                        }
                        $i++;
                    }
                }
            }
            if (!$flag){
                if ($mascara[0]!='#'){
                    $sRetorno = '(' . trim($sRetorno);
                }
            }
            return trim($sRetorno);
        } else {
            return '';
        }
    }

    //***********************************
    //*** Recupera o Numero de Linhas ***
    //***********************************

    private function __GetNumLines( $text , $width , $aFont=array('font'=>'Times','size'=>8,'style'=>'' ) ){
      $text=trim($text);
      $this->pdf->SetFont($aFont['font'],$aFont['style'],$aFont['size']);
      $n = $this->pdf->WordWrap($text,$width);
      return $n;
    }

    //********************************
    //*** Desenha a Caixa de Texto ***
    //********************************

    private function __textBox($x,$y,$w,$h,$text='',$aFont=array('font'=>'Times','size'=>8,'style'=>''),$vAlign='T',$hAlign='L',$border=1,$link='',$force=TRUE,$hmax=0,$hini=0){
        $oldY = $y;
        $temObs = FALSE;
        $resetou = FALSE;

        //$text = mb_convert_case($text, MB_CASE_UPPER, mb_detect_encoding($text, "auto"));
        $text = utf8_decode($text);

        if ( $border ) {
            $this->pdf->RoundedRect($x,$y,$w,$h,0.8,'D');
        }

        $this->pdf->SetFont($aFont['font'],$aFont['style'],$aFont['size']);
        $incY = $this->pdf->FontSize; //tamanho da fonte na unidade definida
        if ( !$force ) {
            $n = $this->pdf->WordWrap($text,$w);
        } else {
            $n = 1;
        }

        $altText = $incY * $n;
        $lines = explode("\n", $text);

        If ( $vAlign == 'T' ) {
            $y1 = $y+$incY;
        }
        If ( $vAlign == 'C' ) {
            $y1 = $y + $incY + (($h-$altText)/2);
        }
        If ( $vAlign == 'B' ) {
            $y1 = ($y + $h)-0.5; //- ($altText/2);
        }

        foreach( $lines as $line ) {
            $texto = trim($line);
            $comp = $this->pdf->GetStringWidth($texto);
            if ( $force ) {
                $newSize = $aFont['size'];
                while ( $comp > $w ) {
                    $this->pdf->SetFont($aFont['font'],$aFont['style'],--$newSize);
                    $comp = $this->pdf->GetStringWidth($texto);
                }
            }
            if ( $hAlign == 'L' ) {
                $x1 = $x+1;
            }
            if ( $hAlign == 'C' ) {
                $x1 = $x + (($w - $comp)/2);
            }
            if ( $hAlign == 'R' ) {
                $x1 = $x + $w - ($comp+0.5);
            }

            if ($hini >0){
                if ($y1 > ($oldY+$hini)){
                    if (!$resetou){
                        $y1 = oldY;
                        $resetou = TRUE;
                    }
                    $this->pdf->Text($x1, $y1, $texto);
                }
            } else {
                $this->pdf->Text($x1, $y1, $texto);
            }
            //incrementar para escrever o proximo
            $y1 += $incY;
            if (($hmax > 0) && ($y1 > ($y+($hmax-1)))){
                $temObs = TRUE;
                break;
            }
        }
        return ($y1-$y)-$incY;
    }

    //***********************
    //*** Linha Tracejada ***
    //***********************

    private function __HdashedLine($x,$y,$w,$h,$n) {
        $this->pdf->SetLineWidth($h);
        $wDash=($w/$n)/2; // comprimento dos traços
        for( $i=$x; $i<=$x+$w; $i += $wDash+$wDash ) {
            for( $j=$i; $j<= ($i+$wDash); $j++ ) {
                if( $j <= ($x+$w-1) ) {
                    $this->pdf->Line($j,$y,$j+1,$y);
                }
            }
        }
    }

    //*************************
    //*** Converte as Datas ***
    //*************************

    private function __ymd2dmy($data) {
        if (!empty($data)) {
            $needle = "/";
            if (strstr($data, "-")) {
                $needle = "-";
            }
            $dt = explode($needle, $data);
            return "$dt[2]/$dt[1]/$dt[0]";
        }
    }

    //***********************
    //*** Converte a Hora ***
    //***********************

    private function __convertTime($DH){
        if ($DH){
            $aDH = explode('T',$DH);
            $adDH = explode('-',$aDH[0]);
            $atDH = explode(':',$aDH[1]);
            $timestampDH = mktime($atDH[0],$atDH[1],$atDH[2],$adDH[1],$adDH[2],$adDH[0]);
            return $timestampDH;
        }
    }
}
?>