<?php
<object class="nfemissaonfesrvimp" name="nfemissaonfesrvimp" baseclass="Page">
  <property name="Background"></property>
  <property name="Caption"><![CDATA[MGT - NFS-e - Emissao Nota Fiscal de Servico]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">572</property>
  <property name="IsMaster">0</property>
  <property name="Name">nfemissaonfesrvimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">nfemissaonfesrvimpCreate</property>
  <property name="jsOnLoad">nfemissaonfesrvimpJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[NOTAS FISCAIS - Emissao de Nota Fiscal de Servico Eletronica]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">area_sistema</property>
    <property name="Width">723</property>
  </object>
  <object class="Label" name="MSG_Erro" >
    <property name="Alignment">agCenter</property>
    <property name="Font">
    <property name="Color">#FF0000</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">MSG_Erro</property>
    <property name="ParentFont">0</property>
    <property name="Top">19</property>
    <property name="Width">730</property>
  </object>
  <object class="GroupBox" name="opcoes_faturamento" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">49</property>
    <property name="Left">8</property>
    <property name="Name">opcoes_faturamento</property>
    <property name="Top">495</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">648</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Panel" name="Panel12" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#F4F1AA</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel12</property>
      <property name="ParentColor">0</property>
      <property name="Top">17</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label62" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label62</property>
      <property name="Top">16</property>
      <property name="Width">131</property>
    </object>
    <object class="Panel" name="Panel13" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#EBE9ED</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel13</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label63" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label63</property>
      <property name="Top">30</property>
      <property name="Width">148</property>
    </object>
    <object class="Button" name="bt_transmitir" >
      <property name="Caption">Transmitir</property>
      <property name="Height">25</property>
      <property name="Left">324</property>
      <property name="Name">bt_transmitir</property>
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_transmitirClick</property>
      <property name="jsOnMouseUp">bt_transmitirJSMouseUp</property>
    </object>
    <object class="Label" name="Label37" >
      <property name="Caption"><![CDATA[Clique apenas uma vez no botao transmitir.]]></property>
      <property name="Font">
      <property name="Color">Red</property>
      </property>
      <property name="Height">13</property>
      <property name="Left">413</property>
      <property name="Name">Label37</property>
      <property name="ParentFont">0</property>
      <property name="Top">21</property>
      <property name="Width">220</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Informacoes da Nota Fiscal de Servico]]></property>
    <property name="Height">454</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">40</property>
    <property name="Width">730</property>
    <object class="GroupBox" name="GroupBox2" >
      <property name="Caption">Prestador</property>
      <property name="Height">46</property>
      <property name="Left">9</property>
      <property name="Name">GroupBox2</property>
      <property name="Top">16</property>
      <property name="Width">712</property>
      <object class="Label" name="Label2" >
        <property name="Caption">CNPJ</property>
        <property name="Height">13</property>
        <property name="Left">9</property>
        <property name="Name">Label2</property>
        <property name="Top">19</property>
        <property name="Width">30</property>
      </object>
      <object class="Edit" name="PrestadorCnpj" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">42</property>
        <property name="MaxLength">15</property>
        <property name="Name">PrestadorCnpj</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Top">15</property>
        <property name="Width">105</property>
        <property name="jsOnKeyPress">PrestadorCnpjJSKeyPress</property>
        <property name="jsOnKeyUp">PrestadorCnpjJSKeyUp</property>
      </object>
      <object class="Label" name="Label3" >
        <property name="Caption"><![CDATA[Inscricao Municipal]]></property>
        <property name="Height">13</property>
        <property name="Left">521</property>
        <property name="Name">Label3</property>
        <property name="Top">19</property>
        <property name="Width">107</property>
      </object>
      <object class="Edit" name="PrestadorInscricaoMunicipal" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">632</property>
        <property name="MaxLength">15</property>
        <property name="Name">PrestadorInscricaoMunicipal</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Top">15</property>
        <property name="Width">70</property>
        <property name="jsOnKeyPress">PrestadorInscricaoMunicipalJSKeyPress</property>
        <property name="jsOnKeyUp">PrestadorInscricaoMunicipalJSKeyUp</property>
      </object>
      <object class="Label" name="Label4" >
        <property name="Caption"><![CDATA[Razao Social]]></property>
        <property name="Height">13</property>
        <property name="Left">153</property>
        <property name="Name">Label4</property>
        <property name="Top">19</property>
        <property name="Width">73</property>
      </object>
      <object class="Edit" name="PrestadorRazaoSocial" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">230</property>
        <property name="MaxLength">115</property>
        <property name="Name">PrestadorRazaoSocial</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Top">15</property>
        <property name="Width">290</property>
        <property name="jsOnKeyPress">PrestadorRazaoSocialJSKeyPress</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox3" >
      <property name="Caption">Detalhes da NFS-e</property>
      <property name="Height">86</property>
      <property name="Left">9</property>
      <property name="Name">GroupBox3</property>
      <property name="Top">228</property>
      <property name="Width">712</property>
      <object class="Label" name="Label1" >
        <property name="Caption"><![CDATA[&lt;STRONG&gt;Nro. RPS&lt;/STRONG&gt;]]></property>
        <property name="Height">13</property>
        <property name="Left">19</property>
        <property name="Name">Label1</property>
        <property name="Top">20</property>
        <property name="Width">52</property>
      </object>
      <object class="Edit" name="NumeroLote" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Left">75</property>
        <property name="MaxLength">15</property>
        <property name="Name">NumeroLote</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">16</property>
        <property name="Width">61</property>
        <property name="jsOnKeyPress">NumeroLoteJSKeyPress</property>
        <property name="jsOnKeyUp">NumeroLoteJSKeyUp</property>
      </object>
      <object class="Label" name="Label6" >
        <property name="Caption"><![CDATA[Data de Emissao]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">147</property>
        <property name="Name">Label6</property>
        <property name="Top">20</property>
        <property name="Width">97</property>
      </object>
      <object class="Edit" name="DataEmissao" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">247</property>
        <property name="MaxLength">10</property>
        <property name="Name">DataEmissao</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">16</property>
        <property name="Width">73</property>
        <property name="jsOnKeyPress">DataEmissaoJSKeyPress</property>
        <property name="jsOnKeyUp">DataEmissaoJSKeyUp</property>
      </object>
      <object class="Label" name="Label25" >
        <property name="Caption"><![CDATA[Serie]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">331</property>
        <property name="Name">Label25</property>
        <property name="Top">20</property>
        <property name="Width">31</property>
      </object>
      <object class="Edit" name="Serie" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">365</property>
        <property name="MaxLength">5</property>
        <property name="Name">Serie</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Text">1</property>
        <property name="Top">16</property>
        <property name="Width">73</property>
        <property name="jsOnKeyPress">SerieJSKeyPress</property>
        <property name="jsOnKeyUp">SerieJSKeyUp</property>
      </object>
      <object class="Label" name="Label5" >
        <property name="Caption">Tipo</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">451</property>
        <property name="Name">Label5</property>
        <property name="Top">20</property>
        <property name="Width">31</property>
      </object>
      <object class="ComboBox" name="Tipo" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">18</property>
        <property name="ItemIndex">1</property>
        <property name="Items"><![CDATA[a:3:{i:1;s:7:&quot;1 - RPS&quot;;i:2;s:33:&quot;2 - Nota Fiscal Conjugada (Mista)&quot;;i:3;s:9:&quot;3 - Cupom&quot;;}]]></property>
        <property name="Layer"></property>
        <property name="Left">485</property>
        <property name="Name">Tipo</property>
        <property name="ParentColor">0</property>
        <property name="Top">17</property>
        <property name="Width">220</property>
        <property name="jsOnKeyPress">TipoJSKeyPress</property>
      </object>
      <object class="Label" name="Label7" >
        <property name="Caption"><![CDATA[Natureza de Operacao]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">23</property>
        <property name="Name">Label7</property>
        <property name="Top">42</property>
        <property name="Width">127</property>
      </object>
      <object class="ComboBox" name="NaturezaOperacao" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">18</property>
        <property name="ItemIndex">1</property>
        <property name="Items"><![CDATA[a:6:{i:1;s:27:&quot;1 - Tributacao no municipio&quot;;i:2;s:32:&quot;2 - Tributacao fora do municipio&quot;;i:3;s:11:&quot;3 - Isencao&quot;;i:4;s:9:&quot;4 - Imune&quot;;i:5;s:47:&quot;5 - Exigibilidade suspensa por decisao judicial&quot;;i:6;s:58:&quot;6 - Exigibilidade suspensa por procedimento administrativo&quot;;}]]></property>
        <property name="Left">154</property>
        <property name="Name">NaturezaOperacao</property>
        <property name="ParentColor">0</property>
        <property name="Top">40</property>
        <property name="Width">551</property>
        <property name="jsOnKeyPress">NaturezaOperacaoJSKeyPress</property>
      </object>
      <object class="Label" name="Label8" >
        <property name="Caption">Optante Simples Nacional</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">7</property>
        <property name="Name">Label8</property>
        <property name="Top">63</property>
        <property name="Width">143</property>
      </object>
      <object class="ComboBox" name="OptanteSimplesNacional" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">18</property>
        <property name="ItemIndex">1</property>
        <property name="Items"><![CDATA[a:2:{i:1;s:7:&quot;1 - SIM&quot;;i:2;s:7:&quot;2 - NAO&quot;;}]]></property>
        <property name="Layer"></property>
        <property name="Left">154</property>
        <property name="Name">OptanteSimplesNacional</property>
        <property name="ParentColor">0</property>
        <property name="Top">60</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">OptanteSimplesNacionalJSKeyPress</property>
      </object>
      <object class="Label" name="Label9" >
        <property name="Caption">Icentivador Cultural</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">247</property>
        <property name="Name">Label9</property>
        <property name="Top">63</property>
        <property name="Width">111</property>
      </object>
      <object class="ComboBox" name="IncentivadorCultural" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">18</property>
        <property name="ItemIndex">2</property>
        <property name="Items"><![CDATA[a:2:{i:1;s:7:&quot;1 - SIM&quot;;i:2;s:7:&quot;2 - NAO&quot;;}]]></property>
        <property name="Layer"></property>
        <property name="Left">361</property>
        <property name="Name">IncentivadorCultural</property>
        <property name="ParentColor">0</property>
        <property name="Top">60</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">IncentivadorCulturalJSKeyPress</property>
      </object>
      <object class="Label" name="Label10" >
        <property name="Caption">Status da NFS-e</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">459</property>
        <property name="Name">Label10</property>
        <property name="Top">63</property>
        <property name="Width">92</property>
      </object>
      <object class="ComboBox" name="Status" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">18</property>
        <property name="ItemIndex">1</property>
        <property name="Items"><![CDATA[a:2:{i:1;s:10:&quot;1 - Normal&quot;;i:2;s:13:&quot;2 - Cancelada&quot;;}]]></property>
        <property name="Layer"></property>
        <property name="Left">553</property>
        <property name="Name">Status</property>
        <property name="ParentColor">0</property>
        <property name="Top">61</property>
        <property name="Width">150</property>
        <property name="jsOnKeyPress">StatusJSKeyPress</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox4" >
      <property name="Caption"><![CDATA[Servico Prestado]]></property>
      <property name="Height">130</property>
      <property name="Left">9</property>
      <property name="Name">GroupBox4</property>
      <property name="Top">314</property>
      <property name="Width">712</property>
      <object class="Label" name="Label11" >
        <property name="Caption"><![CDATA[Cod.Item Lista Servico]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">9</property>
        <property name="Name">Label11</property>
        <property name="Top">16</property>
        <property name="Width">130</property>
      </object>
      <object class="Edit" name="ItemListaServico" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">9</property>
        <property name="MaxLength">5</property>
        <property name="Name">ItemListaServico</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">30</property>
        <property name="Width">130</property>
        <property name="jsOnKeyPress">ItemListaServicoJSKeyPress</property>
        <property name="jsOnKeyUp">ItemListaServicoJSKeyUp</property>
      </object>
      <object class="Label" name="Label12" >
        <property name="Caption"><![CDATA[Cod.CNAE]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">142</property>
        <property name="Name">Label12</property>
        <property name="Top">16</property>
        <property name="Width">60</property>
      </object>
      <object class="Edit" name="CodigoCnae" >
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">142</property>
        <property name="MaxLength">7</property>
        <property name="Name">CodigoCnae</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">30</property>
        <property name="Width">60</property>
        <property name="jsOnKeyPress">CodigoCnaeJSKeyPress</property>
        <property name="jsOnKeyUp">CodigoCnaeJSKeyUp</property>
      </object>
      <object class="Label" name="Label13" >
        <property name="Caption"><![CDATA[Cod.Tributacao Municipio]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">205</property>
        <property name="Name">Label13</property>
        <property name="Top">16</property>
        <property name="Width">90</property>
      </object>
      <object class="Edit" name="CodigoTributacaoMunicipio" >
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">205</property>
        <property name="MaxLength">20</property>
        <property name="Name">CodigoTributacaoMunicipio</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">30</property>
        <property name="Width">91</property>
        <property name="jsOnKeyPress">CodigoTributacaoMunicipioJSKeyPress</property>
        <property name="jsOnKeyUp">CodigoTributacaoMunicipioJSKeyUp</property>
      </object>
      <object class="Label" name="Label14" >
        <property name="Caption"><![CDATA[Discriminacao Servico]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">299</property>
        <property name="Name">Label14</property>
        <property name="Top">16</property>
        <property name="Width">125</property>
      </object>
      <object class="Label" name="Label15" >
        <property name="Caption"><![CDATA[Cod.Municipio]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">625</property>
        <property name="Name">Label15</property>
        <property name="Top">16</property>
        <property name="Width">80</property>
      </object>
      <object class="Edit" name="CodigoMunicipio" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">625</property>
        <property name="MaxLength">7</property>
        <property name="Name">CodigoMunicipio</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">1</property>
        <property name="Top">30</property>
        <property name="Width">80</property>
        <property name="jsOnKeyPress">CodigoMunicipioJSKeyPress</property>
        <property name="jsOnKeyUp">CodigoMunicipioJSKeyUp</property>
      </object>
      <object class="Label" name="Label16" >
        <property name="Caption">ISS Retido</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">7</property>
        <property name="Name">Label16</property>
        <property name="Top">53</property>
        <property name="Width">62</property>
      </object>
      <object class="ComboBox" name="IssRetido" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">18</property>
        <property name="ItemIndex">2</property>
        <property name="Items"><![CDATA[a:2:{i:1;s:7:&quot;1 - SIM&quot;;i:2;s:7:&quot;2 - NAO&quot;;}]]></property>
        <property name="Layer"></property>
        <property name="Left">7</property>
        <property name="Name">IssRetido</property>
        <property name="ParentColor">0</property>
        <property name="Top">67</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">IssRetidoJSKeyPress</property>
      </object>
      <object class="Label" name="Label17" >
        <property name="Caption"><![CDATA[Vlr.Total Servicos (R$)]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">82</property>
        <property name="Name">Label17</property>
        <property name="Top">53</property>
        <property name="Width">125</property>
      </object>
      <object class="Edit" name="ValorServicos" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">82</property>
        <property name="MaxLength">15</property>
        <property name="Name">ValorServicos</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">67</property>
        <property name="Width">125</property>
        <property name="jsOnKeyPress">ValorServicosJSKeyPress</property>
        <property name="jsOnKeyUp">ValorServicosJSKeyUp</property>
      </object>
      <object class="Label" name="Label18" >
        <property name="Caption">Vlr.B.C.ISS(R$)</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">209</property>
        <property name="Name">Label18</property>
        <property name="Top">53</property>
        <property name="Width">85</property>
      </object>
      <object class="Edit" name="BaseCalculo" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">209</property>
        <property name="MaxLength">15</property>
        <property name="Name">BaseCalculo</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">67</property>
        <property name="Width">85</property>
        <property name="jsOnKeyPress">BaseCalculoJSKeyPress</property>
        <property name="jsOnKeyUp">BaseCalculoJSKeyUp</property>
      </object>
      <object class="Label" name="Label19" >
        <property name="Caption">Aliquota ISS (%)</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">6</property>
        <property name="Name">Label19</property>
        <property name="Top">91</property>
        <property name="Width">95</property>
      </object>
      <object class="Edit" name="Aliquota" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">6</property>
        <property name="MaxLength">15</property>
        <property name="Name">Aliquota</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">104</property>
        <property name="Width">95</property>
        <property name="jsOnKeyPress">AliquotaJSKeyPress</property>
        <property name="jsOnKeyUp">AliquotaJSKeyUp</property>
      </object>
      <object class="Label" name="Label20" >
        <property name="Caption">Vlr. ISS (R$)</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">132</property>
        <property name="Name">Label20</property>
        <property name="Top">91</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="ValorIss" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">132</property>
        <property name="MaxLength">15</property>
        <property name="Name">ValorIss</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">104</property>
        <property name="Width">75</property>
        <property name="jsOnKeyPress">ValorIssJSKeyPress</property>
        <property name="jsOnKeyUp">ValorIssJSKeyUp</property>
      </object>
      <object class="Label" name="Label33" >
        <property name="Caption"><![CDATA[Qtde. de Pecas]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">431</property>
        <property name="Name">Label33</property>
        <property name="Top">91</property>
        <property name="Width">85</property>
      </object>
      <object class="Edit" name="QtdePecas" >
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">431</property>
        <property name="MaxLength">7</property>
        <property name="Name">QtdePecas</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">104</property>
        <property name="Width">85</property>
        <property name="jsOnKeyPress">QtdePecasJSKeyPress</property>
        <property name="jsOnKeyUp">QtdePecasJSKeyUp</property>
      </object>
      <object class="Label" name="Label34" >
        <property name="Caption">Nro. do Pedido</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">526</property>
        <property name="Name">Label34</property>
        <property name="Top">91</property>
        <property name="Width">85</property>
      </object>
      <object class="Edit" name="NroPedido" >
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">526</property>
        <property name="MaxLength">20</property>
        <property name="Name">NroPedido</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">104</property>
        <property name="Width">85</property>
        <property name="jsOnKeyPress">NroPedidoJSKeyPress</property>
      </object>
      <object class="Label" name="Label35" >
        <property name="Caption">DT.Vencimento</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">620</property>
        <property name="Name">Label35</property>
        <property name="Top">91</property>
        <property name="Width">85</property>
      </object>
      <object class="Edit" name="DTVencimento" >
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">620</property>
        <property name="MaxLength">10</property>
        <property name="Name">DTVencimento</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">104</property>
        <property name="Width">85</property>
        <property name="jsOnKeyPress">DTVencimentoJSKeyPress</property>
        <property name="jsOnKeyUp">DTVencimentoJSKeyUp</property>
      </object>
      <object class="Label" name="Label36" >
        <property name="Caption"><![CDATA[Outras Informacoes do Servico:]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">249</property>
        <property name="Name">Label36</property>
        <property name="Top">108</property>
        <property name="Width">177</property>
      </object>
      <object class="Memo" name="Discriminacao" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">58</property>
        <property name="Left">299</property>
        <property name="Lines">a:0:{}</property>
        <property name="MaxLength">2000</property>
        <property name="Name">Discriminacao</property>
        <property name="ParentColor">0</property>
        <property name="Top">30</property>
        <property name="Width">320</property>
        <property name="jsOnKeyPress">DiscriminacaoJSKeyPress</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox5" >
      <property name="Caption">Tomador</property>
      <property name="Height">166</property>
      <property name="Left">9</property>
      <property name="Name">GroupBox5</property>
      <property name="Top">62</property>
      <property name="Width">712</property>
      <object class="Label" name="Label21" >
        <property name="Caption"><![CDATA[Razao Social]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">119</property>
        <property name="Name">Label21</property>
        <property name="Top">16</property>
        <property name="Width">74</property>
      </object>
      <object class="Edit" name="TomadorRazaoSocial" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">119</property>
        <property name="MaxLength">115</property>
        <property name="Name">TomadorRazaoSocial</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">30</property>
        <property name="Width">584</property>
        <property name="jsOnKeyPress">TomadorRazaoSocialJSKeyPress</property>
      </object>
      <object class="Label" name="Label22" >
        <property name="Caption">CNPJ/CPF</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">11</property>
        <property name="Name">Label22</property>
        <property name="Top">16</property>
        <property name="Width">105</property>
      </object>
      <object class="Edit" name="TomadorCnpj" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">11</property>
        <property name="MaxLength">15</property>
        <property name="Name">TomadorCnpj</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">30</property>
        <property name="Width">105</property>
        <property name="jsOnKeyPress">TomadorCnpjJSKeyPress</property>
        <property name="jsOnKeyUp">TomadorCnpjJSKeyUp</property>
      </object>
      <object class="Label" name="Label23" >
        <property name="Caption"><![CDATA[Endereco]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">11</property>
        <property name="Name">Label23</property>
        <property name="Top">52</property>
        <property name="Width">74</property>
      </object>
      <object class="Edit" name="Endereco" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">11</property>
        <property name="MaxLength">125</property>
        <property name="Name">Endereco</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">66</property>
        <property name="Width">537</property>
        <property name="jsOnKeyPress">EnderecoJSKeyPress</property>
      </object>
      <object class="Label" name="Label24" >
        <property name="Caption"><![CDATA[Numero]]></property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">553</property>
        <property name="Name">Label24</property>
        <property name="Top">52</property>
        <property name="Width">45</property>
      </object>
      <object class="Edit" name="Numero" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">553</property>
        <property name="MaxLength">10</property>
        <property name="Name">Numero</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">66</property>
        <property name="Width">45</property>
        <property name="jsOnKeyPress">NumeroJSKeyPress</property>
        <property name="jsOnKeyUp">NumeroJSKeyUp</property>
      </object>
      <object class="Label" name="Label26" >
        <property name="Caption">Complemento</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">602</property>
        <property name="Name">Label26</property>
        <property name="Top">52</property>
        <property name="Width">100</property>
      </object>
      <object class="Edit" name="Complemento" >
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">602</property>
        <property name="MaxLength">60</property>
        <property name="Name">Complemento</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">66</property>
        <property name="Width">100</property>
        <property name="jsOnKeyPress">ComplementoJSKeyPress</property>
      </object>
      <object class="Label" name="Label27" >
        <property name="Caption">Bairro</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">11</property>
        <property name="Name">Label27</property>
        <property name="Top">88</property>
        <property name="Width">80</property>
      </object>
      <object class="Edit" name="Bairro" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">11</property>
        <property name="MaxLength">60</property>
        <property name="Name">Bairro</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">102</property>
        <property name="Width">300</property>
        <property name="jsOnKeyPress">BairroJSKeyPress</property>
      </object>
      <object class="Label" name="Label28" >
        <property name="Caption">Cidade</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">315</property>
        <property name="Name">Label28</property>
        <property name="Top">88</property>
        <property name="Width">80</property>
      </object>
      <object class="Edit" name="Cidade" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">315</property>
        <property name="MaxLength">60</property>
        <property name="Name">Cidade</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">102</property>
        <property name="Width">272</property>
        <property name="jsOnKeyPress">CidadeJSKeyPress</property>
      </object>
      <object class="Label" name="Label29" >
        <property name="Caption">Estado</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">591</property>
        <property name="Name">Label29</property>
        <property name="Top">88</property>
        <property name="Width">40</property>
      </object>
      <object class="Edit" name="Uf" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">591</property>
        <property name="MaxLength">2</property>
        <property name="Name">Uf</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">102</property>
        <property name="Width">40</property>
        <property name="jsOnKeyPress">UfJSKeyPress</property>
      </object>
      <object class="Label" name="Label30" >
        <property name="Caption">CEP</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">635</property>
        <property name="Name">Label30</property>
        <property name="Top">88</property>
        <property name="Width">65</property>
      </object>
      <object class="Edit" name="Cep" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">635</property>
        <property name="MaxLength">8</property>
        <property name="Name">Cep</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">102</property>
        <property name="Width">65</property>
        <property name="jsOnKeyPress">CepJSKeyPress</property>
        <property name="jsOnKeyUp">CepJSKeyUp</property>
      </object>
      <object class="Label" name="Label31" >
        <property name="Caption">Telefone</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">9</property>
        <property name="Name">Label31</property>
        <property name="Top">124</property>
        <property name="Width">80</property>
      </object>
      <object class="Edit" name="Telefone" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">9</property>
        <property name="MaxLength">11</property>
        <property name="Name">Telefone</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">138</property>
        <property name="Width">80</property>
        <property name="jsOnKeyPress">TelefoneJSKeyPress</property>
        <property name="jsOnKeyUp">TelefoneJSKeyUp</property>
      </object>
      <object class="Label" name="Label32" >
        <property name="Caption">E-Mail</property>
        <property name="Height">13</property>
        <property name="Layer"></property>
        <property name="Left">94</property>
        <property name="Name">Label32</property>
        <property name="Top">124</property>
        <property name="Width">80</property>
      </object>
      <object class="Edit" name="Email" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Layer"></property>
        <property name="Left">94</property>
        <property name="MaxLength">80</property>
        <property name="Name">Email</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">138</property>
        <property name="Width">606</property>
        <property name="jsOnKeyPress">EmailJSKeyPress</property>
      </object>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">494</property>
        <property name="Top">1</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
  <object class="HiddenField" name="hd_numero_faturamento" >
    <property name="Height">18</property>
    <property name="Left">415</property>
    <property name="Name">hd_numero_faturamento</property>
    <property name="Top">547</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="hd_formulario_carregado" >
    <property name="Height">18</property>
    <property name="Left">212</property>
    <property name="Name">hd_formulario_carregado</property>
    <property name="Top">547</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="mgt_nota_fiscal_tipo_faturamento" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">mgt_nota_fiscal_tipo_faturamento</property>
    <property name="Top">547</property>
    <property name="Width">200</property>
  </object>
</object>
?>
