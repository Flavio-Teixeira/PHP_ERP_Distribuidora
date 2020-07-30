<?php
<object class="cadprodutosinc" name="cadprodutosinc" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cadprodutosinc</property>
  <property name="Width">755</property>
  <property name="OnCreate">cadprodutosincCreate</property>
  <property name="jsOnLoad">cadprodutosincJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CADASTRO - Produtos - Inclusao]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">306</property>
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
    <object class="Button" name="bt_incluir" >
      <property name="Caption">Incluir</property>
      <property name="Height">25</property>
      <property name="Left">327</property>
      <property name="Name">bt_incluir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_incluirClick</property>
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
    <object class="Label" name="Label20" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label20</property>
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
    <object class="Label" name="Label26" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label26</property>
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
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Cadastro</property>
    <property name="Height">280</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">26</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label1</property>
      <property name="Top">17</property>
      <property name="Width">48</property>
    </object>
    <object class="Edit" name="mgt_produto_codigo" >
      <property name="CharCase">ecUpperCase</property>
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">14</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_produto_codigo</property>
      <property name="ParentColor">0</property>
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
      <property name="Top">17</property>
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
      <property name="Top">17</property>
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
      <property name="Top">17</property>
      <property name="Width">75</property>
    </object>
    <object class="ComboBox" name="mgt_produto_tipo" >
      <property name="Height">21</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">574</property>
      <property name="Name">mgt_produto_tipo</property>
      <property name="Top">33</property>
      <property name="Width">143</property>
      <property name="jsOnKeyPress">mgt_produto_tipoJSKeyPress</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Referencia]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label5</property>
      <property name="Top">56</property>
      <property name="Width">88</property>
    </object>
    <object class="Edit" name="mgt_produto_referencia" >
      <property name="Height">21</property>
      <property name="Left">14</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_produto_referencia</property>
      <property name="TabOrder">1</property>
      <property name="Top">71</property>
      <property name="Width">118</property>
      <property name="jsOnKeyPress">mgt_produto_referenciaJSKeyPress</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption"><![CDATA[Cod. Fornecedor]]></property>
      <property name="Height">13</property>
      <property name="Left">574</property>
      <property name="Name">Label6</property>
      <property name="Top">56</property>
      <property name="Width">96</property>
    </object>
    <object class="Edit" name="mgt_produto_fornecedor" >
      <property name="Height">21</property>
      <property name="Left">574</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_produto_fornecedor</property>
      <property name="TabOrder">1</property>
      <property name="Top">71</property>
      <property name="Width">143</property>
      <property name="jsOnKeyPress">mgt_produto_fornecedorJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_fornecedorJSKeyUp</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption">Lote</property>
      <property name="Height">13</property>
      <property name="Left">142</property>
      <property name="Name">Label7</property>
      <property name="Top">56</property>
      <property name="Width">72</property>
    </object>
    <object class="Edit" name="mgt_produto_lote" >
      <property name="Height">21</property>
      <property name="Left">142</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_produto_lote</property>
      <property name="TabOrder">1</property>
      <property name="Top">71</property>
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
      <property name="Top">71</property>
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
      <property name="Top">56</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption">Unidade</property>
      <property name="DataField">C</property>
      <property name="Height">13</property>
      <property name="Left">332</property>
      <property name="Name">Label9</property>
      <property name="Top">56</property>
      <property name="Width">52</property>
    </object>
    <object class="Edit" name="mgt_produto_unidade" >
      <property name="Height">21</property>
      <property name="Left">332</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_unidade</property>
      <property name="TabOrder">1</property>
      <property name="Top">71</property>
      <property name="Width">50</property>
      <property name="jsOnKeyPress">mgt_produto_unidadeJSKeyPress</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">Unid. Pesagem</property>
      <property name="Height">13</property>
      <property name="Left">388</property>
      <property name="Name">Label10</property>
      <property name="Top">56</property>
      <property name="Width">92</property>
    </object>
    <object class="Edit" name="mgt_produto_unidade_pesagem" >
      <property name="Height">21</property>
      <property name="Left">388</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_unidade_pesagem</property>
      <property name="TabOrder">1</property>
      <property name="Top">71</property>
      <property name="Width">90</property>
      <property name="jsOnKeyPress">mgt_produto_unidade_pesagemJSKeyPress</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Peso</property>
      <property name="Height">13</property>
      <property name="Left">484</property>
      <property name="Name">Label11</property>
      <property name="Top">56</property>
      <property name="Width">52</property>
    </object>
    <object class="Edit" name="mgt_produto_peso" >
      <property name="Height">21</property>
      <property name="Left">484</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_produto_peso</property>
      <property name="TabOrder">1</property>
      <property name="Top">71</property>
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
      <property name="Top">95</property>
      <property name="Width">84</property>
    </object>
    <object class="Edit" name="mgt_produto_estoque_inicial" >
      <property name="Height">21</property>
      <property name="Left">223</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_estoque_inicial</property>
      <property name="TabOrder">1</property>
      <property name="Top">110</property>
      <property name="Width">82</property>
      <property name="jsOnKeyPress">mgt_produto_estoque_inicialJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_estoque_inicialJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_produto_estoque_atual" >
      <property name="Height">21</property>
      <property name="Left">495</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_estoque_atual</property>
      <property name="TabOrder">1</property>
      <property name="Top">110</property>
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
      <property name="Top">95</property>
      <property name="Width">84</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption"><![CDATA[Ultima Alteracao]]></property>
      <property name="DataField">C</property>
      <property name="Height">13</property>
      <property name="Left">619</property>
      <property name="Name">Label14</property>
      <property name="Top">95</property>
      <property name="Width">97</property>
    </object>
    <object class="Edit" name="mgt_produto_data_alteracao" >
      <property name="Height">21</property>
      <property name="Left">609</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_produto_data_alteracao</property>
      <property name="TabOrder">1</property>
      <property name="Top">110</property>
      <property name="Width">98</property>
      <property name="jsOnKeyPress">mgt_produto_data_alteracaoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_data_alteracaoJSKeyUp</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Caption"><![CDATA[Classificacao Fiscal]]></property>
      <property name="Height">13</property>
      <property name="Left">39</property>
      <property name="Name">Label15</property>
      <property name="Top">138</property>
      <property name="Width">108</property>
    </object>
    <object class="Edit" name="mgt_produto_classif_fiscal" >
      <property name="Height">21</property>
      <property name="Left">150</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_produto_classif_fiscal</property>
      <property name="TabOrder">1</property>
      <property name="Top">134</property>
      <property name="Width">50</property>
      <property name="jsOnKeyPress">mgt_produto_classif_fiscalJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_produto_classif_tributaria" >
      <property name="Height">21</property>
      <property name="Left">150</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_produto_classif_tributaria</property>
      <property name="TabOrder">1</property>
      <property name="Top">160</property>
      <property name="Width">50</property>
      <property name="jsOnKeyPress">mgt_produto_classif_tributariaJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_classif_tributariaJSKeyUp</property>
    </object>
    <object class="Label" name="Label16" >
      <property name="Caption"><![CDATA[ClassificacaoTributaria]]></property>
      <property name="Height">13</property>
      <property name="Left">19</property>
      <property name="Name">Label16</property>
      <property name="Top">164</property>
      <property name="Width">128</property>
    </object>
    <object class="Label" name="Label17" >
      <property name="Caption">IPI (%)</property>
      <property name="Height">13</property>
      <property name="Left">104</property>
      <property name="Name">Label17</property>
      <property name="Top">189</property>
      <property name="Width">43</property>
    </object>
    <object class="Edit" name="mgt_produto_ipi" >
      <property name="Height">21</property>
      <property name="Left">150</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_produto_ipi</property>
      <property name="TabOrder">1</property>
      <property name="Top">185</property>
      <property name="Width">50</property>
      <property name="jsOnKeyPress">mgt_produto_ipiJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_ipiJSKeyUp</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Preco (R$)]]></property>
      <property name="Height">13</property>
      <property name="Left">543</property>
      <property name="Name">Label18</property>
      <property name="Top">189</property>
      <property name="Width">61</property>
    </object>
    <object class="Edit" name="mgt_produto_preco" >
      <property name="Height">21</property>
      <property name="Left">609</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_preco</property>
      <property name="TabOrder">1</property>
      <property name="Top">185</property>
      <property name="Width">98</property>
      <property name="jsOnKeyPress">mgt_produto_precoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_precoJSKeyUp</property>
    </object>
    <object class="Label" name="Label19" >
      <property name="Caption"><![CDATA[Descricao Detalhada:]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label19</property>
      <property name="Top">210</property>
      <property name="Width">124</property>
    </object>
    <object class="Memo" name="mgt_produto_descricao_detalhada" >
      <property name="Height">45</property>
      <property name="Left">14</property>
      <property name="Lines">a:0:{}</property>
      <property name="Name">mgt_produto_descricao_detalhada</property>
      <property name="Top">225</property>
      <property name="Width">702</property>
      <property name="jsOnKeyPress">mgt_produto_descricao_detalhadaJSKeyPress</property>
    </object>
    <object class="Label" name="Label22" >
      <property name="Caption"><![CDATA[Localizacao]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label22</property>
      <property name="Top">95</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="Label23" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Valor de Compra (R$)</property>
      <property name="Height">13</property>
      <property name="Left">478</property>
      <property name="Name">Label23</property>
      <property name="Top">138</property>
      <property name="Width">126</property>
    </object>
    <object class="Label" name="Label24" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Custo Medio (R$)]]></property>
      <property name="Height">13</property>
      <property name="Left">504</property>
      <property name="Name">Label24</property>
      <property name="Top">164</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="Label21" >
      <property name="Caption"><![CDATA[Estoque Minimo]]></property>
      <property name="DataField">C</property>
      <property name="Height">13</property>
      <property name="Left">311</property>
      <property name="Name">Label21</property>
      <property name="Top">95</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label25" >
      <property name="Caption">Estoque Ideal</property>
      <property name="DataField">C</property>
      <property name="Height">13</property>
      <property name="Left">407</property>
      <property name="Name">Label25</property>
      <property name="Top">95</property>
      <property name="Width">84</property>
    </object>
    <object class="Edit" name="mgt_produto_estoque_ideal" >
      <property name="Height">21</property>
      <property name="Left">407</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_estoque_ideal</property>
      <property name="TabOrder">1</property>
      <property name="Top">110</property>
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
      <property name="Top">110</property>
      <property name="Width">90</property>
      <property name="jsOnKeyPress">mgt_produto_estoque_minimoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_estoque_minimoJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_produto_custo_medio" >
      <property name="Height">21</property>
      <property name="Left">609</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_custo_medio</property>
      <property name="TabOrder">1</property>
      <property name="Top">160</property>
      <property name="Width">98</property>
      <property name="jsOnKeyPress">mgt_produto_custo_medioJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_custo_medioJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_produto_valor_compra" >
      <property name="Height">21</property>
      <property name="Left">609</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_valor_compra</property>
      <property name="TabOrder">1</property>
      <property name="Top">134</property>
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
      <property name="Top">110</property>
      <property name="Width">100</property>
      <property name="jsOnKeyPress">mgt_produto_localizacaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label28" >
      <property name="Caption">Nro. do N.C.M.</property>
      <property name="Height">13</property>
      <property name="Left">223</property>
      <property name="Name">Label28</property>
      <property name="Top">138</property>
      <property name="Width">84</property>
    </object>
    <object class="Edit" name="mgt_produto_ncm" >
      <property name="Height">21</property>
      <property name="Left">311</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_produto_ncm</property>
      <property name="TabOrder">1</property>
      <property name="Top">134</property>
      <property name="Width">90</property>
      <property name="jsOnKeyPress">mgt_produto_ncmJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_ncmJSKeyUp</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">699</property>
        <property name="Top">365</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
