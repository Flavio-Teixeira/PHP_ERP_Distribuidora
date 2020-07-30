<?php
<object class="cadprodutosalt" name="cadprodutosalt" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">1360</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cadprodutosalt</property>
  <property name="Width">755</property>
  <property name="OnCreate">cadprodutosaltCreate</property>
  <property name="jsOnLoad">cadprodutosaltJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CADASTRO - Produtos - Alteracao / Consulta]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="cadastro" >
    <property name="Caption">Cadastro</property>
    <property name="Height">271</property>
    <property name="Left">8</property>
    <property name="Name">cadastro</property>
    <property name="Top">26</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label1</property>
      <property name="Top">19</property>
      <property name="Width">48</property>
    </object>
    <object class="Edit" name="mgt_produto_codigo" >
      <property name="CharCase">ecUpperCase</property>
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">14</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">32</property>
      <property name="Width">118</property>
      <property name="jsOnKeyPress">mgt_produto_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">142</property>
      <property name="Name">Label2</property>
      <property name="Top">19</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_produto_descricao" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">142</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">32</property>
      <property name="Width">266</property>
      <property name="jsOnKeyPress">mgt_produto_descricaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Familia]]></property>
      <property name="Height">13</property>
      <property name="Left">422</property>
      <property name="Name">Label3</property>
      <property name="Top">19</property>
      <property name="Width">75</property>
    </object>
    <object class="ComboBox" name="mgt_produto_familia" >
      <property name="Height">21</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">422</property>
      <property name="Name">mgt_produto_familia</property>
      <property name="Top">33</property>
      <property name="Width">143</property>
      <property name="jsOnKeyPress">mgt_produto_familiaJSKeyPress</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">Tipo</property>
      <property name="Height">13</property>
      <property name="Left">574</property>
      <property name="Name">Label4</property>
      <property name="Top">19</property>
      <property name="Width">75</property>
    </object>
    <object class="ComboBox" name="mgt_produto_tipo" >
      <property name="Height">21</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">574</property>
      <property name="Name">mgt_produto_tipo</property>
      <property name="Top">32</property>
      <property name="Width">143</property>
      <property name="jsOnKeyPress">mgt_produto_tipoJSKeyPress</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Referencia]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label5</property>
      <property name="Top">55</property>
      <property name="Width">88</property>
    </object>
    <object class="Edit" name="mgt_produto_referencia" >
      <property name="Height">21</property>
      <property name="Left">14</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_produto_referencia</property>
      <property name="TabOrder">1</property>
      <property name="Top">70</property>
      <property name="Width">118</property>
      <property name="jsOnKeyPress">mgt_produto_referenciaJSKeyPress</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption"><![CDATA[Cod. Fornecedor]]></property>
      <property name="Height">13</property>
      <property name="Left">574</property>
      <property name="Name">Label6</property>
      <property name="Top">55</property>
      <property name="Width">96</property>
    </object>
    <object class="Edit" name="mgt_produto_fornecedor" >
      <property name="Height">21</property>
      <property name="Left">574</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_produto_fornecedor</property>
      <property name="TabOrder">1</property>
      <property name="Top">70</property>
      <property name="Width">143</property>
      <property name="jsOnKeyPress">mgt_produto_fornecedorJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_fornecedorJSKeyUp</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption">Lote</property>
      <property name="Height">13</property>
      <property name="Left">142</property>
      <property name="Name">Label7</property>
      <property name="Top">55</property>
      <property name="Width">72</property>
    </object>
    <object class="Edit" name="mgt_produto_lote" >
      <property name="Height">21</property>
      <property name="Left">142</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_produto_lote</property>
      <property name="TabOrder">1</property>
      <property name="Top">70</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_produto_loteJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_produto_codigo_barras" >
      <property name="Font">
      <property name="Color">#FF0000</property>
      </property>
      <property name="Height">21</property>
      <property name="Left">223</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_codigo_barras</property>
      <property name="ParentFont">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">70</property>
      <property name="Width">100</property>
      <property name="jsOnKeyPress">mgt_produto_codigo_barrasJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_codigo_barrasJSKeyUp</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption"><![CDATA[Codigo de Barras]]></property>
      <property name="Font">
      <property name="Color">#FF0000</property>
      <property name="Weight">bold</property>
      </property>
      <property name="Height">13</property>
      <property name="Left">223</property>
      <property name="Name">Label8</property>
      <property name="ParentFont">0</property>
      <property name="Top">55</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption">Unidade</property>
      <property name="DataField">C</property>
      <property name="Height">13</property>
      <property name="Left">332</property>
      <property name="Name">Label9</property>
      <property name="Top">55</property>
      <property name="Width">52</property>
    </object>
    <object class="Edit" name="mgt_produto_unidade" >
      <property name="Height">21</property>
      <property name="Left">332</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_unidade</property>
      <property name="TabOrder">1</property>
      <property name="Top">70</property>
      <property name="Width">50</property>
      <property name="jsOnKeyPress">mgt_produto_unidadeJSKeyPress</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">Unid. Pesagem</property>
      <property name="Height">13</property>
      <property name="Left">388</property>
      <property name="Name">Label10</property>
      <property name="Top">55</property>
      <property name="Width">92</property>
    </object>
    <object class="Edit" name="mgt_produto_unidade_pesagem" >
      <property name="Height">21</property>
      <property name="Left">388</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_unidade_pesagem</property>
      <property name="TabOrder">1</property>
      <property name="Top">70</property>
      <property name="Width">90</property>
      <property name="jsOnKeyPress">mgt_produto_unidade_pesagemJSKeyPress</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Peso</property>
      <property name="Height">13</property>
      <property name="Left">484</property>
      <property name="Name">Label11</property>
      <property name="Top">55</property>
      <property name="Width">52</property>
    </object>
    <object class="Edit" name="mgt_produto_peso" >
      <property name="Height">21</property>
      <property name="Left">484</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_peso</property>
      <property name="TabOrder">1</property>
      <property name="Top">70</property>
      <property name="Width">50</property>
      <property name="jsOnKeyPress">mgt_produto_pesoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_pesoJSKeyUp</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Caption">Estoque Inicial</property>
      <property name="DataField">C</property>
      <property name="Height">13</property>
      <property name="Left">223</property>
      <property name="Name">Label12</property>
      <property name="Top">92</property>
      <property name="Width">84</property>
    </object>
    <object class="Edit" name="mgt_produto_estoque_inicial" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">223</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_estoque_inicial</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">107</property>
      <property name="Width">82</property>
      <property name="jsOnKeyPress">mgt_produto_estoque_inicialJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_estoque_inicialJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_produto_estoque_atual" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">495</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_estoque_atual</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">107</property>
      <property name="Width">82</property>
      <property name="jsOnKeyPress">mgt_produto_estoque_atualJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_estoque_atualJSKeyUp</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption">Estoque Atual</property>
      <property name="DataField">C</property>
      <property name="Height">13</property>
      <property name="Left">495</property>
      <property name="Name">Label13</property>
      <property name="Top">92</property>
      <property name="Width">84</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption"><![CDATA[Ultima Alteracao]]></property>
      <property name="DataField">C</property>
      <property name="Height">13</property>
      <property name="Left">619</property>
      <property name="Name">Label14</property>
      <property name="Top">92</property>
      <property name="Width">97</property>
    </object>
    <object class="Edit" name="mgt_produto_data_alteracao" >
      <property name="BorderStyle">00</property>
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">609</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_produto_data_alteracao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">107</property>
      <property name="Width">98</property>
      <property name="jsOnKeyPress">mgt_produto_data_alteracaoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_data_alteracaoJSKeyUp</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Caption"><![CDATA[Classificacao Fiscal]]></property>
      <property name="Height">13</property>
      <property name="Left">39</property>
      <property name="Name">Label15</property>
      <property name="Top">135</property>
      <property name="Width">108</property>
    </object>
    <object class="Edit" name="mgt_produto_classif_fiscal" >
      <property name="Height">21</property>
      <property name="Left">150</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_produto_classif_fiscal</property>
      <property name="TabOrder">1</property>
      <property name="Top">131</property>
      <property name="Width">50</property>
      <property name="jsOnKeyPress">mgt_produto_classif_fiscalJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_produto_classif_tributaria" >
      <property name="Height">21</property>
      <property name="Left">150</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_produto_classif_tributaria</property>
      <property name="TabOrder">1</property>
      <property name="Top">157</property>
      <property name="Width">50</property>
      <property name="jsOnKeyPress">mgt_produto_classif_tributariaJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_classif_tributariaJSKeyUp</property>
    </object>
    <object class="Label" name="Label16" >
      <property name="Caption"><![CDATA[ClassificacaoTributaria]]></property>
      <property name="Height">13</property>
      <property name="Left">19</property>
      <property name="Name">Label16</property>
      <property name="Top">161</property>
      <property name="Width">128</property>
    </object>
    <object class="Label" name="Label17" >
      <property name="Caption">IPI (%)</property>
      <property name="Height">13</property>
      <property name="Left">104</property>
      <property name="Name">Label17</property>
      <property name="Top">186</property>
      <property name="Width">43</property>
    </object>
    <object class="Edit" name="mgt_produto_ipi" >
      <property name="Height">21</property>
      <property name="Left">150</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_produto_ipi</property>
      <property name="TabOrder">1</property>
      <property name="Top">182</property>
      <property name="Width">50</property>
      <property name="jsOnKeyPress">mgt_produto_ipiJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_ipiJSKeyUp</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Preco (R$)]]></property>
      <property name="Height">13</property>
      <property name="Left">546</property>
      <property name="Name">Label18</property>
      <property name="Top">186</property>
      <property name="Width">61</property>
    </object>
    <object class="Edit" name="mgt_produto_preco" >
      <property name="BorderStyle">00</property>
      <property name="Height">21</property>
      <property name="Left">609</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_preco</property>
      <property name="TabOrder">1</property>
      <property name="Top">182</property>
      <property name="Width">98</property>
      <property name="jsOnKeyPress">mgt_produto_precoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_precoJSKeyUp</property>
    </object>
    <object class="Label" name="Label19" >
      <property name="Caption"><![CDATA[Descricao Detalhada:]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label19</property>
      <property name="Top">202</property>
      <property name="Width">124</property>
    </object>
    <object class="Memo" name="mgt_produto_descricao_detalhada" >
      <property name="Height">45</property>
      <property name="Left">14</property>
      <property name="Lines">a:0:{}</property>
      <property name="Name">mgt_produto_descricao_detalhada</property>
      <property name="Top">217</property>
      <property name="Width">702</property>
      <property name="jsOnKeyPress">mgt_produto_descricao_detalhadaJSKeyPress</property>
    </object>
    <object class="Label" name="Label22" >
      <property name="Caption"><![CDATA[Localizacao]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label22</property>
      <property name="Top">92</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="Label23" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Valor de Compra (R$)</property>
      <property name="Height">13</property>
      <property name="Left">481</property>
      <property name="Name">Label23</property>
      <property name="Top">135</property>
      <property name="Width">126</property>
    </object>
    <object class="Label" name="Label24" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Custo Medio (R$)]]></property>
      <property name="Height">13</property>
      <property name="Left">507</property>
      <property name="Name">Label24</property>
      <property name="Top">161</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="Label21" >
      <property name="Caption"><![CDATA[Estoque Minimo]]></property>
      <property name="DataField">C</property>
      <property name="Height">13</property>
      <property name="Left">311</property>
      <property name="Name">Label21</property>
      <property name="Top">92</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label25" >
      <property name="Caption">Estoque Ideal</property>
      <property name="DataField">C</property>
      <property name="Height">13</property>
      <property name="Left">407</property>
      <property name="Name">Label25</property>
      <property name="Top">92</property>
      <property name="Width">84</property>
    </object>
    <object class="Edit" name="mgt_produto_estoque_ideal" >
      <property name="Height">21</property>
      <property name="Left">407</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_estoque_ideal</property>
      <property name="TabOrder">1</property>
      <property name="Top">107</property>
      <property name="Width">82</property>
      <property name="jsOnKeyPress">mgt_produto_estoque_idealJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_estoque_idealJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_produto_estoque_minimo" >
      <property name="Height">21</property>
      <property name="Left">311</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_estoque_minimo</property>
      <property name="TabOrder">1</property>
      <property name="Top">107</property>
      <property name="Width">90</property>
      <property name="jsOnKeyPress">mgt_produto_estoque_minimoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_estoque_minimoJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_produto_custo_medio" >
      <property name="BorderStyle">00</property>
      <property name="Height">21</property>
      <property name="Left">609</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_custo_medio</property>
      <property name="TabOrder">1</property>
      <property name="Top">157</property>
      <property name="Width">98</property>
      <property name="jsOnKeyPress">mgt_produto_custo_medioJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_custo_medioJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_produto_valor_compra" >
      <property name="BorderStyle">00</property>
      <property name="Height">21</property>
      <property name="Left">609</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_valor_compra</property>
      <property name="TabOrder">1</property>
      <property name="Top">131</property>
      <property name="Width">98</property>
      <property name="jsOnKeyPress">mgt_produto_valor_compraJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_valor_compraJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_produto_localizacao" >
      <property name="Height">21</property>
      <property name="Left">14</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_produto_localizacao</property>
      <property name="TabOrder">1</property>
      <property name="Top">107</property>
      <property name="Width">100</property>
      <property name="jsOnKeyPress">mgt_produto_localizacaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label28" >
      <property name="Caption">Nro. do N.C.M.</property>
      <property name="Height">13</property>
      <property name="Left">223</property>
      <property name="Name">Label28</property>
      <property name="Top">135</property>
      <property name="Width">84</property>
    </object>
    <object class="Edit" name="mgt_produto_ncm" >
      <property name="Height">21</property>
      <property name="Left">311</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_produto_ncm</property>
      <property name="TabOrder">1</property>
      <property name="Top">131</property>
      <property name="Width">90</property>
      <property name="jsOnKeyPress">mgt_produto_ncmJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_ncmJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">495</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">647</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_alterar" >
      <property name="Caption">Alterar</property>
      <property name="Height">25</property>
      <property name="Left">291</property>
      <property name="Name">bt_alterar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_alterarClick</property>
    </object>
    <object class="Button" name="bt_excluir" >
      <property name="Caption">Excluir</property>
      <property name="Height">25</property>
      <property name="Left">371</property>
      <property name="Name">bt_excluir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_excluirClick</property>
    </object>
    <object class="Panel" name="Panel1" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#F4F1AA</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel1</property>
      <property name="ParentColor">0</property>
      <property name="Top">17</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label26" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label26</property>
      <property name="Top">16</property>
      <property name="Width">131</property>
    </object>
    <object class="Panel" name="Panel2" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#EBE9ED</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel2</property>
      <property name="ParentColor">0</property>
      <property name="Top">33</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label27" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label27</property>
      <property name="Top">32</property>
      <property name="Width">148</property>
    </object>
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
    <property name="Top">13</property>
    <property name="Width">730</property>
  </object>
  <object class="Window" name="confirmacao" >
    <property name="Caption"><![CDATA[Confirmacao]]></property>
    <property name="Height">105</property>
    <property name="IsVisible">0</property>
    <property name="Left">188</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">551</property>
    <property name="Width">369</property>
    <object class="Button" name="bt_nao" >
      <property name="Caption"><![CDATA[Nao]]></property>
      <property name="Height">25</property>
      <property name="Left">106</property>
      <property name="Name">bt_nao</property>
      <property name="Top">76</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_naoClick</property>
    </object>
    <object class="Button" name="bt_sim" >
      <property name="Caption">Sim</property>
      <property name="Height">25</property>
      <property name="Left">188</property>
      <property name="Name">bt_sim</property>
      <property name="Top">76</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_simClick</property>
    </object>
    <object class="Label" name="Label20" >
      <property name="Caption"><![CDATA[Voce deseja realmente excluir este registro do cadastro? O preenchimento do motivo e obrigatorio.]]></property>
      <property name="Height">28</property>
      <property name="Left">7</property>
      <property name="Name">Label20</property>
      <property name="Top">24</property>
      <property name="Width">323</property>
    </object>
    <object class="Label" name="Label29" >
      <property name="Caption">Motivo:</property>
      <property name="Height">13</property>
      <property name="Left">7</property>
      <property name="Name">Label29</property>
      <property name="Top">57</property>
      <property name="Width">38</property>
    </object>
    <object class="Edit" name="mgt_operacao_cadastro_motivo" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">47</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_operacao_cadastro_motivo</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">53</property>
      <property name="Width">315</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption"><![CDATA[Estrutura do Produto (Modulo Industrial)]]></property>
    <property name="Height">198</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">297</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_adc_produto" >
      <property name="Caption">Adicionar Produto</property>
      <property name="Height">25</property>
      <property name="Left">8</property>
      <property name="Name">bt_adc_produto</property>
      <property name="Top">16</property>
      <property name="Width">120</property>
      <property name="OnClick">bt_adc_produtoClick</property>
    </object>
    <object class="Button" name="bt_adc_servico" >
      <property name="Caption"><![CDATA[Adicionar Servico]]></property>
      <property name="Height">25</property>
      <property name="Left">133</property>
      <property name="Name">bt_adc_servico</property>
      <property name="Top">16</property>
      <property name="Width">120</property>
      <property name="OnClick">bt_adc_servicoClick</property>
    </object>
    <object class="Button" name="bt_alterar_produto" >
      <property name="Caption">Alterar Item Selecionado da Estrutura</property>
      <property name="Height">25</property>
      <property name="Left">472</property>
      <property name="Name">bt_alterar_produto</property>
      <property name="Top">16</property>
      <property name="Width">250</property>
      <property name="OnClick">bt_alterar_produtoClick</property>
    </object>
    <object class="DBGrid" name="estrutura" >
      <property name="Columns"><![CDATA[a:8:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:5:&quot;Nivel&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:19:&quot;mgt_estrutura_nivel&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;35&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_estrutura_codigo_estrutura&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_estrutura_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;319&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_estrutura_tipo_estrutura&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;35&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Qtde&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_estrutura_qtde&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Medida&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:20:&quot;mgt_estrutura_medida&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:19:&quot;Custo Unitario (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_estrutura_custo_unitario&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;105&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Sequencia&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_estrutura_sequencia&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Estruturas</property>
      <property name="Height">107</property>
      <property name="Left">8</property>
      <property name="Name">estrutura</property>
      <property name="ReadOnly">1</property>
      <property name="Top">57</property>
      <property name="Width">714</property>
      <property name="jsOnRowChanged">estruturaJSRowChanged</property>
    </object>
    <object class="Label" name="Label30" >
      <property name="Caption">Estrutura do Produto:</property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label30</property>
      <property name="Top">42</property>
      <property name="Width">121</property>
    </object>
    <object class="Button" name="bt_imprime_estrutura" >
      <property name="Caption">Imprimir Estrutura</property>
      <property name="Height">25</property>
      <property name="Left">617</property>
      <property name="Name">bt_imprime_estrutura</property>
      <property name="Top">167</property>
      <property name="Width">105</property>
      <property name="OnClick">bt_imprime_estruturaClick</property>
    </object>
  </object>
  <object class="GroupBox" name="adiciona_produtos" >
    <property name="Caption">Adiciona Produtos</property>
    <property name="Height">284</property>
    <property name="Left">8</property>
    <property name="Name">adiciona_produtos</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">660</property>
    <property name="Visible">0</property>
    <property name="Width">730</property>
    <object class="Label" name="Label36" >
      <property name="Caption">Registros Obtidos:</property>
      <property name="Height">13</property>
      <property name="Left">17</property>
      <property name="Name">Label36</property>
      <property name="Top">89</property>
      <property name="Width">139</property>
    </object>
    <object class="Label" name="Label37" >
      <property name="Caption">Produto</property>
      <property name="Height">13</property>
      <property name="Left">17</property>
      <property name="Name">Label37</property>
      <property name="Top">211</property>
      <property name="Width">44</property>
    </object>
    <object class="Label" name="Label38" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">63</property>
      <property name="Name">Label38</property>
      <property name="Top">194</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_estrutura_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_estrutura_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">207</property>
      <property name="Width">80</property>
      <property name="jsOnKeyPress">mgt_estrutura_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label39" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">144</property>
      <property name="Name">Label39</property>
      <property name="Top">194</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_estrutura_descricao" >
      <property name="Height">21</property>
      <property name="Left">144</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_estrutura_descricao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">207</property>
      <property name="Width">309</property>
      <property name="jsOnKeyPress">mgt_estrutura_descricaoJSKeyPress</property>
    </object>
    <object class="Button" name="bt_adicionar_produto" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption">Adicionar Produto</property>
      <property name="Height">25</property>
      <property name="Left">327</property>
      <property name="Name">bt_adicionar_produto</property>
      <property name="Top">238</property>
      <property name="Width">116</property>
      <property name="OnClick">bt_adicionar_produtoClick</property>
    </object>
    <object class="Panel" name="adiciona_produtos_borda" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Selecione o Produto&lt;/b&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FF0000</property>
      <property name="Height">14</property>
      <property name="Left">6</property>
      <property name="Name">adiciona_produtos_borda</property>
      <property name="ParentColor">0</property>
      <property name="Top">17</property>
      <property name="Width">717</property>
    </object>
    <object class="GroupBox" name="GroupBox4" >
      <property name="Caption">Busca</property>
      <property name="Height">58</property>
      <property name="Left">13</property>
      <property name="Name">GroupBox4</property>
      <property name="Top">31</property>
      <property name="Width">705</property>
      <object class="Label" name="Label34" >
        <property name="Caption">Dados Para Busca</property>
        <property name="Height">13</property>
        <property name="Left">8</property>
        <property name="Name">Label34</property>
        <property name="Top">15</property>
        <property name="Width">304</property>
      </object>
      <object class="Label" name="Label35" >
        <property name="Caption"><![CDATA[Opcoes]]></property>
        <property name="Height">13</property>
        <property name="Left">459</property>
        <property name="Name">Label35</property>
        <property name="Top">15</property>
        <property name="Width">160</property>
      </object>
      <object class="Edit" name="dados_busca_produto" >
        <property name="Height">21</property>
        <property name="Left">8</property>
        <property name="Name">dados_busca_produto</property>
        <property name="Top">28</property>
        <property name="Width">446</property>
        <property name="jsOnKeyPress">dados_busca_produtoJSKeyPress</property>
      </object>
      <object class="ComboBox" name="opcao_busca_produto" >
        <property name="Height">21</property>
        <property name="ItemIndex">0</property>
        <property name="Items"><![CDATA[a:3:{s:6:&quot;Codigo&quot;;s:6:&quot;Codigo&quot;;s:10:&quot;Referencia&quot;;s:10:&quot;Referencia&quot;;s:9:&quot;Descricao&quot;;s:9:&quot;Descricao&quot;;}]]></property>
        <property name="Left">459</property>
        <property name="Name">opcao_busca_produto</property>
        <property name="Top">28</property>
        <property name="Width">160</property>
        <property name="jsOnKeyPress">opcao_busca_produtoJSKeyPress</property>
      </object>
      <object class="Button" name="bt_busca_produto" >
        <property name="Caption">Buscar</property>
        <property name="Height">25</property>
        <property name="Left">623</property>
        <property name="Name">bt_busca_produto</property>
        <property name="Top">24</property>
        <property name="Width">75</property>
        <property name="OnClick">bt_busca_produtoClick</property>
      </object>
    </object>
    <object class="DBGrid" name="registros_produtos_busca" >
      <property name="Columns"><![CDATA[a:7:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_produto_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Referencia&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:22:&quot;mgt_produto_referencia&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_produto_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;300&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Vlr. Custo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_produto_custo_medio&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Lote&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:16:&quot;mgt_produto_lote&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Unidade&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:19:&quot;mgt_produto_unidade&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:3:&quot;IPI&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:15:&quot;mgt_produto_ipi&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;40&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Produtos</property>
      <property name="Height">89</property>
      <property name="Left">15</property>
      <property name="Name">registros_produtos_busca</property>
      <property name="ReadOnly">1</property>
      <property name="Top">103</property>
      <property name="Width">701</property>
      <property name="jsOnRowChanged">registros_produtos_buscaJSRowChanged</property>
    </object>
    <object class="Edit" name="mgt_estrutura_qtde" >
      <property name="Height">21</property>
      <property name="Left">455</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_estrutura_qtde</property>
      <property name="Top">207</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_estrutura_qtdeJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_estrutura_qtdeJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_estrutura_custo_unitario" >
      <property name="Height">21</property>
      <property name="Left">575</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_estrutura_custo_unitario</property>
      <property name="Top">207</property>
      <property name="Width">105</property>
      <property name="jsOnKeyPress">mgt_estrutura_custo_unitarioJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_estrutura_custo_unitarioJSKeyUp</property>
    </object>
    <object class="Label" name="Label41" >
      <property name="Caption">Qtde</property>
      <property name="Height">13</property>
      <property name="Left">455</property>
      <property name="Name">Label41</property>
      <property name="Top">194</property>
      <property name="Width">58</property>
    </object>
    <object class="Label" name="Label42" >
      <property name="Caption"><![CDATA[Custo Unitario(R$)]]></property>
      <property name="Height">13</property>
      <property name="Left">575</property>
      <property name="Name">Label42</property>
      <property name="Top">194</property>
      <property name="Width">105</property>
    </object>
    <object class="Panel" name="Panel5" >
      <property name="Color">#FF0000</property>
      <property name="Height">242</property>
      <property name="Left">720</property>
      <property name="Name">Panel5</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel3" >
      <property name="Color">#FF0000</property>
      <property name="Height">242</property>
      <property name="Left">6</property>
      <property name="Name">Panel3</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel4" >
      <property name="Color">#FF0000</property>
      <property name="Height">3</property>
      <property name="Left">9</property>
      <property name="Name">Panel4</property>
      <property name="ParentColor">0</property>
      <property name="Top">270</property>
      <property name="Width">711</property>
    </object>
    <object class="Label" name="Label45" >
      <property name="Caption">Medida</property>
      <property name="Height">13</property>
      <property name="Left">515</property>
      <property name="Name">Label45</property>
      <property name="Top">194</property>
      <property name="Width">58</property>
    </object>
    <object class="Edit" name="mgt_estrutura_medida" >
      <property name="Height">21</property>
      <property name="Left">515</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_estrutura_medida</property>
      <property name="Top">207</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_estrutura_medidaJSKeyPress</property>
    </object>
    <object class="Label" name="Label49" >
      <property name="Caption"><![CDATA[Nivel]]></property>
      <property name="Height">13</property>
      <property name="Left">682</property>
      <property name="Name">Label49</property>
      <property name="Top">194</property>
      <property name="Width">35</property>
    </object>
    <object class="Edit" name="mgt_estrutura_nivel" >
      <property name="Height">21</property>
      <property name="Left">682</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_estrutura_nivel</property>
      <property name="Top">207</property>
      <property name="Width">35</property>
      <property name="jsOnKeyPress">mgt_estrutura_nivelJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_estrutura_nivelJSKeyUp</property>
    </object>
    <object class="Button" name="bt_fechar_produto" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">655</property>
      <property name="Name">bt_fechar_produto</property>
      <property name="Top">238</property>
      <property name="Width">52</property>
      <property name="OnClick">bt_fechar_produtoClick</property>
    </object>
  </object>
  <object class="HiddenField" name="hd_cadprodutosalt_carregado" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_cadprodutosalt_carregado</property>
    <property name="Top">551</property>
    <property name="Value">N</property>
    <property name="Width">170</property>
  </object>
  <object class="GroupBox" name="adiciona_servicos" >
    <property name="Caption"><![CDATA[Adiciona Servicos]]></property>
    <property name="Height">284</property>
    <property name="Left">8</property>
    <property name="Name">adiciona_servicos</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">947</property>
    <property name="Visible">0</property>
    <property name="Width">730</property>
    <object class="Label" name="Label31" >
      <property name="Caption">Registros Obtidos:</property>
      <property name="Height">13</property>
      <property name="Left">17</property>
      <property name="Name">Label31</property>
      <property name="Top">89</property>
      <property name="Width">139</property>
    </object>
    <object class="Label" name="Label32" >
      <property name="Caption"><![CDATA[Servico]]></property>
      <property name="Height">13</property>
      <property name="Left">17</property>
      <property name="Name">Label32</property>
      <property name="Top">211</property>
      <property name="Width">44</property>
    </object>
    <object class="Label" name="Label33" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">63</property>
      <property name="Name">Label33</property>
      <property name="Top">194</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_estrutura_srv_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_estrutura_srv_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">207</property>
      <property name="Width">80</property>
      <property name="jsOnKeyPress">mgt_estrutura_srv_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label40" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">144</property>
      <property name="Name">Label40</property>
      <property name="Top">194</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_estrutura_srv_descricao" >
      <property name="Height">21</property>
      <property name="Left">144</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_estrutura_srv_descricao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">207</property>
      <property name="Width">309</property>
      <property name="jsOnKeyPress">mgt_estrutura_srv_descricaoJSKeyPress</property>
    </object>
    <object class="Button" name="bt_adicionar_servico" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption"><![CDATA[Adicionar Servico]]></property>
      <property name="Height">25</property>
      <property name="Left">327</property>
      <property name="Name">bt_adicionar_servico</property>
      <property name="Top">238</property>
      <property name="Width">116</property>
      <property name="OnClick">bt_adicionar_servicoClick</property>
    </object>
    <object class="Panel" name="Panel6" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Selecione o Servico&lt;/b&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FF0000</property>
      <property name="Height">14</property>
      <property name="Left">6</property>
      <property name="Name">Panel6</property>
      <property name="ParentColor">0</property>
      <property name="Top">17</property>
      <property name="Width">717</property>
    </object>
    <object class="GroupBox" name="GroupBox3" >
      <property name="Caption">Busca</property>
      <property name="Height">58</property>
      <property name="Left">13</property>
      <property name="Name">GroupBox3</property>
      <property name="Top">31</property>
      <property name="Width">705</property>
      <object class="Label" name="Label43" >
        <property name="Caption">Dados Para Busca</property>
        <property name="Height">13</property>
        <property name="Left">8</property>
        <property name="Name">Label43</property>
        <property name="Top">15</property>
        <property name="Width">304</property>
      </object>
      <object class="Label" name="Label44" >
        <property name="Caption"><![CDATA[Opcoes]]></property>
        <property name="Height">13</property>
        <property name="Left">459</property>
        <property name="Name">Label44</property>
        <property name="Top">15</property>
        <property name="Width">160</property>
      </object>
      <object class="Edit" name="dados_busca_servico" >
        <property name="Height">21</property>
        <property name="Left">8</property>
        <property name="Name">dados_busca_servico</property>
        <property name="Top">28</property>
        <property name="Width">446</property>
        <property name="jsOnKeyPress">dados_busca_servicoJSKeyPress</property>
      </object>
      <object class="ComboBox" name="opcao_busca_servico" >
        <property name="Height">21</property>
        <property name="ItemIndex">0</property>
        <property name="Items"><![CDATA[a:2:{s:6:&quot;Codigo&quot;;s:6:&quot;Codigo&quot;;s:9:&quot;Descricao&quot;;s:9:&quot;Descricao&quot;;}]]></property>
        <property name="Left">459</property>
        <property name="Name">opcao_busca_servico</property>
        <property name="Top">28</property>
        <property name="Width">160</property>
        <property name="jsOnKeyPress">opcao_busca_servicoJSKeyPress</property>
      </object>
      <object class="Button" name="bt_busca_servico" >
        <property name="Caption">Buscar</property>
        <property name="Height">25</property>
        <property name="Left">623</property>
        <property name="Name">bt_busca_servico</property>
        <property name="Top">24</property>
        <property name="Width">75</property>
        <property name="OnClick">bt_busca_servicoClick</property>
      </object>
    </object>
    <object class="DBGrid" name="registros_servicos_busca" >
      <property name="Columns"><![CDATA[a:3:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_servico_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_servico_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;510&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Vlr. Custo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:17:&quot;mgt_servico_valor&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Servicos</property>
      <property name="Height">89</property>
      <property name="Left">15</property>
      <property name="Name">registros_servicos_busca</property>
      <property name="ReadOnly">1</property>
      <property name="Top">103</property>
      <property name="Width">701</property>
      <property name="jsOnRowChanged">registros_servicos_buscaJSRowChanged</property>
    </object>
    <object class="Edit" name="mgt_estrutura_srv_qtde" >
      <property name="Height">21</property>
      <property name="Left">455</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_estrutura_srv_qtde</property>
      <property name="Top">207</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_estrutura_srv_qtdeJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_estrutura_srv_qtdeJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_estrutura_srv_custo_unitario" >
      <property name="Height">21</property>
      <property name="Left">575</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_estrutura_srv_custo_unitario</property>
      <property name="Top">207</property>
      <property name="Width">105</property>
      <property name="jsOnKeyPress">mgt_estrutura_srv_custo_unitarioJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_estrutura_srv_custo_unitarioJSKeyUp</property>
    </object>
    <object class="Label" name="Label46" >
      <property name="Caption">Qtde</property>
      <property name="Height">13</property>
      <property name="Left">455</property>
      <property name="Name">Label46</property>
      <property name="Top">194</property>
      <property name="Width">58</property>
    </object>
    <object class="Label" name="Label47" >
      <property name="Caption"><![CDATA[Custo Unitario(R$)]]></property>
      <property name="Height">13</property>
      <property name="Left">575</property>
      <property name="Name">Label47</property>
      <property name="Top">194</property>
      <property name="Width">105</property>
    </object>
    <object class="Panel" name="Panel7" >
      <property name="Color">#FF0000</property>
      <property name="Height">242</property>
      <property name="Left">720</property>
      <property name="Name">Panel7</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel8" >
      <property name="Color">#FF0000</property>
      <property name="Height">242</property>
      <property name="Left">6</property>
      <property name="Name">Panel8</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel9" >
      <property name="Color">#FF0000</property>
      <property name="Height">3</property>
      <property name="Left">9</property>
      <property name="Name">Panel9</property>
      <property name="ParentColor">0</property>
      <property name="Top">273</property>
      <property name="Width">711</property>
    </object>
    <object class="Label" name="Label48" >
      <property name="Caption">Medida</property>
      <property name="Height">13</property>
      <property name="Left">515</property>
      <property name="Name">Label48</property>
      <property name="Top">194</property>
      <property name="Width">58</property>
    </object>
    <object class="Edit" name="mgt_estrutura_srv_medida" >
      <property name="Height">21</property>
      <property name="Left">515</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_estrutura_srv_medida</property>
      <property name="Top">207</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_estrutura_srv_medidaJSKeyPress</property>
    </object>
    <object class="Label" name="Label50" >
      <property name="Caption"><![CDATA[Nivel]]></property>
      <property name="Height">13</property>
      <property name="Left">682</property>
      <property name="Name">Label50</property>
      <property name="Top">194</property>
      <property name="Width">35</property>
    </object>
    <object class="Edit" name="mgt_estrutura_srv_nivel" >
      <property name="Height">21</property>
      <property name="Left">682</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_estrutura_srv_nivel</property>
      <property name="Top">207</property>
      <property name="Width">35</property>
      <property name="jsOnKeyPress">mgt_estrutura_srv_nivelJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_estrutura_srv_nivelJSKeyUp</property>
    </object>
    <object class="Button" name="bt_fechar_servico" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">655</property>
      <property name="Name">bt_fechar_servico</property>
      <property name="Top">238</property>
      <property name="Width">52</property>
      <property name="OnClick">bt_fechar_servicoClick</property>
    </object>
  </object>
  <object class="HiddenField" name="hd_estrutura_sequencia" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_estrutura_sequencia</property>
    <property name="Top">572</property>
    <property name="Width">80</property>
  </object>
  <object class="HiddenField" name="hd_estrutura_codigo_estrutura" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_estrutura_codigo_estrutura</property>
    <property name="Top">594</property>
    <property name="Width">80</property>
  </object>
  <object class="HiddenField" name="hd_estrutura_descricao" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_estrutura_descricao</property>
    <property name="Top">615</property>
    <property name="Width">80</property>
  </object>
  <object class="HiddenField" name="hd_estrutura_tipo_estrutura" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_estrutura_tipo_estrutura</property>
    <property name="Top">638</property>
    <property name="Width">80</property>
  </object>
  <object class="HiddenField" name="hd_estrutura_nivel" >
    <property name="Height">18</property>
    <property name="Left">98</property>
    <property name="Name">hd_estrutura_nivel</property>
    <property name="Top">572</property>
    <property name="Width">80</property>
  </object>
  <object class="HiddenField" name="hd_estrutura_qtde" >
    <property name="Height">18</property>
    <property name="Left">98</property>
    <property name="Name">hd_estrutura_qtde</property>
    <property name="Top">594</property>
    <property name="Width">80</property>
  </object>
  <object class="HiddenField" name="hd_estrutura_medida" >
    <property name="Height">18</property>
    <property name="Left">98</property>
    <property name="Name">hd_estrutura_medida</property>
    <property name="Top">615</property>
    <property name="Width">80</property>
  </object>
  <object class="HiddenField" name="hd_estrutura_custo_unitario" >
    <property name="Height">18</property>
    <property name="Left">98</property>
    <property name="Name">hd_estrutura_custo_unitario</property>
    <property name="Top">638</property>
    <property name="Width">80</property>
  </object>
  <object class="GroupBox" name="item_estrutura" >
    <property name="Caption">Item Selecionado da Estrutura</property>
    <property name="Height">120</property>
    <property name="Left">7</property>
    <property name="Name">item_estrutura</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">1235</property>
    <property name="Visible">0</property>
    <property name="Width">730</property>
    <object class="Label" name="Label53" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">12</property>
      <property name="Name">Label53</property>
      <property name="Top">34</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_estrutura_item_codigo" >
      <property name="Height">21</property>
      <property name="Left">12</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_estrutura_item_codigo</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">47</property>
      <property name="Width">80</property>
      <property name="jsOnKeyPress">mgt_estrutura_item_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label54" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">93</property>
      <property name="Name">Label54</property>
      <property name="Top">34</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_estrutura_item_descricao" >
      <property name="Height">21</property>
      <property name="Left">93</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_estrutura_item_descricao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">47</property>
      <property name="Width">360</property>
      <property name="jsOnKeyPress">mgt_estrutura_item_descricaoJSKeyPress</property>
    </object>
    <object class="Button" name="bt_item_alterar" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption">Alterar Item</property>
      <property name="Height">25</property>
      <property name="Left">303</property>
      <property name="Name">bt_item_alterar</property>
      <property name="Top">71</property>
      <property name="Width">80</property>
      <property name="OnClick">bt_item_alterarClick</property>
    </object>
    <object class="Panel" name="Panel10" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Alterar / Excluir - Item Selecionado da Estrutura&lt;/b&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FF0000</property>
      <property name="Height">14</property>
      <property name="Left">6</property>
      <property name="Name">Panel10</property>
      <property name="ParentColor">0</property>
      <property name="Top">17</property>
      <property name="Width">717</property>
    </object>
    <object class="Edit" name="mgt_estrutura_item_qtde" >
      <property name="Height">21</property>
      <property name="Left">455</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_estrutura_item_qtde</property>
      <property name="Top">47</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_estrutura_item_qtdeJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_estrutura_item_qtdeJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_estrutura_item_custo_unitario" >
      <property name="Height">21</property>
      <property name="Left">575</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_estrutura_item_custo_unitario</property>
      <property name="Top">47</property>
      <property name="Width">105</property>
      <property name="jsOnKeyPress">mgt_estrutura_item_custo_unitarioJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_estrutura_item_custo_unitarioJSKeyUp</property>
    </object>
    <object class="Label" name="Label57" >
      <property name="Caption">Qtde</property>
      <property name="Height">13</property>
      <property name="Left">455</property>
      <property name="Name">Label57</property>
      <property name="Top">34</property>
      <property name="Width">58</property>
    </object>
    <object class="Label" name="Label58" >
      <property name="Caption"><![CDATA[Custo Unitario(R$)]]></property>
      <property name="Height">13</property>
      <property name="Left">575</property>
      <property name="Name">Label58</property>
      <property name="Top">34</property>
      <property name="Width">105</property>
    </object>
    <object class="Panel" name="Panel11" >
      <property name="Color">#FF0000</property>
      <property name="Height">77</property>
      <property name="Left">721</property>
      <property name="Name">Panel11</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel12" >
      <property name="Color">#FF0000</property>
      <property name="Height">77</property>
      <property name="Left">6</property>
      <property name="Name">Panel12</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel13" >
      <property name="Color">#FF0000</property>
      <property name="Height">3</property>
      <property name="Left">9</property>
      <property name="Name">Panel13</property>
      <property name="ParentColor">0</property>
      <property name="Top">105</property>
      <property name="Width">711</property>
    </object>
    <object class="Label" name="Label59" >
      <property name="Caption">Medida</property>
      <property name="Height">13</property>
      <property name="Left">515</property>
      <property name="Name">Label59</property>
      <property name="Top">34</property>
      <property name="Width">58</property>
    </object>
    <object class="Edit" name="mgt_estrutura_item_medida" >
      <property name="Height">21</property>
      <property name="Left">515</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_estrutura_item_medida</property>
      <property name="Top">47</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_estrutura_item_medidaJSKeyPress</property>
    </object>
    <object class="Label" name="Label60" >
      <property name="Caption"><![CDATA[Nivel]]></property>
      <property name="Height">13</property>
      <property name="Left">683</property>
      <property name="Name">Label60</property>
      <property name="Top">34</property>
      <property name="Width">35</property>
    </object>
    <object class="Edit" name="mgt_estrutura_item_nivel" >
      <property name="Height">21</property>
      <property name="Left">683</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_estrutura_item_nivel</property>
      <property name="Top">47</property>
      <property name="Width">35</property>
      <property name="jsOnKeyPress">mgt_estrutura_item_nivelJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_estrutura_item_nivelJSKeyUp</property>
    </object>
    <object class="Button" name="bt_item_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">655</property>
      <property name="Name">bt_item_fechar</property>
      <property name="Top">71</property>
      <property name="Width">52</property>
      <property name="OnClick">bt_item_fecharClick</property>
    </object>
    <object class="Button" name="bt_item_excluir" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption">Excluir Item</property>
      <property name="Height">25</property>
      <property name="Left">394</property>
      <property name="Name">bt_item_excluir</property>
      <property name="Top">71</property>
      <property name="Width">80</property>
      <property name="OnClick">bt_item_excluirClick</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">674</property>
        <property name="Top">586</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
