<?php
<object class="nfcancelanota" name="nfcancelanota" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">574</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">nfcancelanota</property>
  <property name="Width">755</property>
  <property name="OnCreate">nfcancelanotaCreate</property>
  <property name="jsOnLoad">nfcancelanotaJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption">NOTAS FISCAIS - Cancela Nota Fiscal</property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Nota Fiscal</property>
    <property name="Height">299</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Numero]]></property>
      <property name="Height">13</property>
      <property name="Left">342</property>
      <property name="Name">Label1</property>
      <property name="Top">27</property>
      <property name="Width">49</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_numero" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">393</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_numero</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">23</property>
      <property name="Width">100</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_numeroJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_numeroJSKeyUp</property>
    </object>
    <object class="Button" name="bt_procurar" >
      <property name="Caption">Procurar</property>
      <property name="Height">25</property>
      <property name="Left">646</property>
      <property name="Name">bt_procurar</property>
      <property name="Top">21</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_procurarClick</property>
    </object>
    <object class="GroupBox" name="GroupBox2" >
      <property name="Caption">Cliente</property>
      <property name="Height">97</property>
      <property name="Left">8</property>
      <property name="Name">GroupBox2</property>
      <property name="Top">49</property>
      <property name="Width">713</property>
      <object class="Label" name="Label2" >
        <property name="Caption">Faturamento</property>
        <property name="Height">13</property>
        <property name="Left">10</property>
        <property name="Name">Label2</property>
        <property name="Top">30</property>
        <property name="Width">71</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_faturamento" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">84</property>
        <property name="MaxLength">11</property>
        <property name="Name">mgt_nota_fiscal_faturamento</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">1</property>
        <property name="Top">27</property>
        <property name="Width">61</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_faturamentoJSKeyPress</property>
      </object>
      <object class="Label" name="Label4" >
        <property name="Caption">Pedido</property>
        <property name="Height">13</property>
        <property name="Left">151</property>
        <property name="Name">Label4</property>
        <property name="Top">30</property>
        <property name="Width">39</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_pedido" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">191</property>
        <property name="MaxLength">11</property>
        <property name="Name">mgt_nota_fiscal_pedido</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">1</property>
        <property name="Top">27</property>
        <property name="Width">61</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_pedidoJSKeyPress</property>
      </object>
      <object class="Label" name="Label5" >
        <property name="Caption">Cliente</property>
        <property name="Height">13</property>
        <property name="Left">271</property>
        <property name="Name">Label5</property>
        <property name="Top">30</property>
        <property name="Width">44</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_cliente_numero" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">320</property>
        <property name="MaxLength">11</property>
        <property name="Name">mgt_nota_fiscal_cliente_numero</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Top">27</property>
        <property name="Width">41</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_numeroJSKeyPress</property>
      </object>
      <object class="Label" name="Label6" >
        <property name="Caption"><![CDATA[Cliente Codigo]]></property>
        <property name="Height">13</property>
        <property name="Left">364</property>
        <property name="Name">Label6</property>
        <property name="Top">13</property>
        <property name="Width">89</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_cliente_codigo" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">364</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_cliente_codigo</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Top">27</property>
        <property name="Width">126</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_codigoJSKeyPress</property>
      </object>
      <object class="Label" name="Label7" >
        <property name="Caption">Cliente Nome</property>
        <property name="Height">13</property>
        <property name="Left">493</property>
        <property name="Name">Label7</property>
        <property name="Top">13</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_cliente_nome" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">493</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_nota_fiscal_cliente_nome</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Top">26</property>
        <property name="Width">211</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_nomeJSKeyPress</property>
      </object>
      <object class="Label" name="Label69" >
        <property name="Caption"><![CDATA[Razao Social]]></property>
        <property name="Height">13</property>
        <property name="Left">8</property>
        <property name="Name">Label69</property>
        <property name="Top">53</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_razao_social" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">8</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_nota_fiscal_razao_social</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Top">66</property>
        <property name="Width">464</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_razao_socialJSKeyPress</property>
      </object>
      <object class="Label" name="Label83" >
        <property name="Caption"><![CDATA[Inscricao Estadual]]></property>
        <property name="Height">13</property>
        <property name="Left">475</property>
        <property name="Name">Label83</property>
        <property name="Top">53</property>
        <property name="Width">104</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_inscricao_estadual" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">475</property>
        <property name="MaxLength">20</property>
        <property name="Name">mgt_nota_fiscal_inscricao_estadual</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">2</property>
        <property name="Top">66</property>
        <property name="Width">113</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_inscricao_estadualJSKeyPress</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_inscricao_municipal" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">591</property>
        <property name="MaxLength">20</property>
        <property name="Name">mgt_nota_fiscal_inscricao_municipal</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">2</property>
        <property name="Top">66</property>
        <property name="Width">113</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_inscricao_municipalJSKeyPress</property>
      </object>
      <object class="Label" name="Label84" >
        <property name="Caption"><![CDATA[Inscricao Municipal]]></property>
        <property name="Height">13</property>
        <property name="Left">591</property>
        <property name="Name">Label84</property>
        <property name="Top">53</property>
        <property name="Width">104</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox4" >
      <property name="Caption">Nota Fiscal</property>
      <property name="Height">144</property>
      <property name="Left">8</property>
      <property name="Name">GroupBox4</property>
      <property name="Top">146</property>
      <property name="Width">713</property>
      <object class="Label" name="Label8" >
        <property name="Caption"><![CDATA[Natureza de Operacao]]></property>
        <property name="Height">13</property>
        <property name="Left">178</property>
        <property name="Name">Label8</property>
        <property name="Top">11</property>
        <property name="Width">126</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_natureza_operacao" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">178</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_nota_fiscal_natureza_operacao</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Top">24</property>
        <property name="Width">527</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_natureza_operacaoJSKeyPress</property>
      </object>
      <object class="Label" name="Label9" >
        <property name="Caption">CFOP</property>
        <property name="Height">13</property>
        <property name="Left">9</property>
        <property name="Name">Label9</property>
        <property name="Top">27</property>
        <property name="Width">34</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_cfop" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">43</property>
        <property name="MaxLength">11</property>
        <property name="Name">mgt_nota_fiscal_cfop</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">1</property>
        <property name="Top">24</property>
        <property name="Width">40</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_cfopJSKeyPress</property>
      </object>
      <object class="Label" name="Label10" >
        <property name="Caption">CFOP 2</property>
        <property name="Height">13</property>
        <property name="Left">89</property>
        <property name="Name">Label10</property>
        <property name="Top">27</property>
        <property name="Width">43</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_cfop_2" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">135</property>
        <property name="MaxLength">11</property>
        <property name="Name">mgt_nota_fiscal_cfop_2</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">1</property>
        <property name="Top">24</property>
        <property name="Width">40</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_cfop_2JSKeyPress</property>
      </object>
      <object class="Label" name="Label110" >
        <property name="Caption"><![CDATA[Base de Calculo do ICMS]]></property>
        <property name="Height">13</property>
        <property name="Left">8</property>
        <property name="Name">Label110</property>
        <property name="Top">62</property>
        <property name="Width">140</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_base_icms" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">9</property>
        <property name="MaxLength">13</property>
        <property name="Name">mgt_nota_fiscal_base_icms</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Text">0.00</property>
        <property name="Top">75</property>
        <property name="Width">140</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_base_icmsJSKeyPress</property>
      </object>
      <object class="Label" name="Label11" >
        <property name="Caption">Vlr. Frete</property>
        <property name="Height">13</property>
        <property name="Left">8</property>
        <property name="Name">Label11</property>
        <property name="Top">102</property>
        <property name="Width">140</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_valor_frete" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">8</property>
        <property name="MaxLength">13</property>
        <property name="Name">mgt_nota_fiscal_valor_frete</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Text">0.00</property>
        <property name="Top">115</property>
        <property name="Width">140</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_valor_freteJSKeyPress</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_valor_seguro" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">161</property>
        <property name="MaxLength">13</property>
        <property name="Name">mgt_nota_fiscal_valor_seguro</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Text">0.00</property>
        <property name="Top">75</property>
        <property name="Width">90</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_valor_seguroJSKeyPress</property>
      </object>
      <object class="Label" name="Label115" >
        <property name="Caption">Valor do Seguro</property>
        <property name="Height">13</property>
        <property name="Left">161</property>
        <property name="Name">Label115</property>
        <property name="Top">62</property>
        <property name="Width">90</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_valor_icms" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">162</property>
        <property name="MaxLength">13</property>
        <property name="Name">mgt_nota_fiscal_valor_icms</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Text">0.00</property>
        <property name="Top">115</property>
        <property name="Width">90</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_valor_icmsJSKeyPress</property>
      </object>
      <object class="Label" name="Label111" >
        <property name="Caption">Valor do ICMS</property>
        <property name="Height">13</property>
        <property name="Left">162</property>
        <property name="Name">Label111</property>
        <property name="Top">102</property>
        <property name="Width">90</property>
      </object>
      <object class="Label" name="Label112" >
        <property name="Caption"><![CDATA[B.Calc.ICMS Substituicao]]></property>
        <property name="Height">13</property>
        <property name="Left">263</property>
        <property name="Name">Label112</property>
        <property name="Top">62</property>
        <property name="Width">140</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_base_icms_sub" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">263</property>
        <property name="MaxLength">13</property>
        <property name="Name">mgt_nota_fiscal_base_icms_sub</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Text">0.00</property>
        <property name="Top">75</property>
        <property name="Width">140</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_base_icms_subJSKeyPress</property>
      </object>
      <object class="Label" name="Label12" >
        <property name="Caption"><![CDATA[Outras Desp. Acessorias]]></property>
        <property name="Height">13</property>
        <property name="Left">263</property>
        <property name="Name">Label12</property>
        <property name="Top">102</property>
        <property name="Width">140</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_outras_despesas" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">263</property>
        <property name="MaxLength">13</property>
        <property name="Name">mgt_nota_fiscal_outras_despesas</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Text">0.00</property>
        <property name="Top">115</property>
        <property name="Width">140</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_outras_despesasJSKeyPress</property>
      </object>
      <object class="Label" name="Label113" >
        <property name="Caption"><![CDATA[Vlr.ICMS Substituicao]]></property>
        <property name="Height">13</property>
        <property name="Left">416</property>
        <property name="Name">Label113</property>
        <property name="Top">62</property>
        <property name="Width">140</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_valor_icms_sub" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">416</property>
        <property name="MaxLength">13</property>
        <property name="Name">mgt_nota_fiscal_valor_icms_sub</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Text">0.00</property>
        <property name="Top">75</property>
        <property name="Width">140</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_valor_icms_subJSKeyPress</property>
      </object>
      <object class="Label" name="Label13" >
        <property name="Caption">Vlr. Total do IPI</property>
        <property name="Height">13</property>
        <property name="Left">416</property>
        <property name="Name">Label13</property>
        <property name="Top">102</property>
        <property name="Width">140</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_valor_ipi" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">416</property>
        <property name="MaxLength">13</property>
        <property name="Name">mgt_nota_fiscal_valor_ipi</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Text">0.00</property>
        <property name="Top">115</property>
        <property name="Width">140</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_valor_ipiJSKeyPress</property>
      </object>
      <object class="Label" name="Label114" >
        <property name="Caption">Vlr. Total dos Produtos</property>
        <property name="Height">13</property>
        <property name="Left">565</property>
        <property name="Name">Label114</property>
        <property name="Top">62</property>
        <property name="Width">140</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_valor_produtos" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">565</property>
        <property name="MaxLength">13</property>
        <property name="Name">mgt_nota_fiscal_valor_produtos</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Text">0.00</property>
        <property name="Top">75</property>
        <property name="Width">140</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_valor_produtosJSKeyPress</property>
      </object>
      <object class="Label" name="Label14" >
        <property name="Caption">Vlr. Total</property>
        <property name="Height">13</property>
        <property name="Left">565</property>
        <property name="Name">Label14</property>
        <property name="Top">102</property>
        <property name="Width">140</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_valor_total" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">565</property>
        <property name="MaxLength">13</property>
        <property name="Name">mgt_nota_fiscal_valor_total</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Text">0.00</property>
        <property name="Top">115</property>
        <property name="Width">140</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_valor_totalJSKeyPress</property>
      </object>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_tipo_nota" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">535</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_tipo_nota</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">23</property>
      <property name="Width">93</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_tipo_notaJSKeyPress</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Caption">Tipo</property>
      <property name="Height">13</property>
      <property name="Left">501</property>
      <property name="Name">Label15</property>
      <property name="Top">27</property>
      <property name="Width">31</property>
    </object>
    <object class="Label" name="Label26" >
      <property name="Caption"><![CDATA[Solicitacao]]></property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label26</property>
      <property name="Top">27</property>
      <property name="Width">61</property>
    </object>
    <object class="ComboBox" name="mgt_nota_fiscal_tipo_faturamento" >
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:5:{s:22:&quot;Nota Fiscal (Produtos)&quot;;s:22:&quot;Nota Fiscal (Produtos)&quot;;s:27:&quot;Venda Programada (Produtos)&quot;;s:27:&quot;Venda Programada (Produtos)&quot;;s:22:&quot;Nota Fiscal (Servicos)&quot;;s:22:&quot;Nota Fiscal (Servicos)&quot;;s:27:&quot;Venda Programada (Servicos)&quot;;s:27:&quot;Venda Programada (Servicos)&quot;;s:27:&quot;Nao Vinculado a Nota Fiscal&quot;;s:27:&quot;Nao Vinculado a Nota Fiscal&quot;;}]]></property>
      <property name="Left">79</property>
      <property name="Name">mgt_nota_fiscal_tipo_faturamento</property>
      <property name="Top">23</property>
      <property name="Width">205</property>
      <property name="jsOnChange">mgt_nota_fiscal_tipo_faturamentoJSChange</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_tipo_faturamentoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_finalidade" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">286</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_finalidade</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Text">PRD</property>
      <property name="Top">23</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_finalidadeJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">343</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">646</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_excluir" >
      <property name="Caption">Cancelar</property>
      <property name="Height">25</property>
      <property name="Left">328</property>
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
      <property name="Top">20</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label18</property>
      <property name="Top">18</property>
      <property name="Width">131</property>
    </object>
    <object class="Label" name="Label19" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label19</property>
      <property name="Top">32</property>
      <property name="Width">148</property>
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
    <property name="Top">18</property>
    <property name="Width">730</property>
  </object>
  <object class="Window" name="confirmacao" >
    <property name="Caption"><![CDATA[Confirmacao]]></property>
    <property name="Height">105</property>
    <property name="IsVisible">0</property>
    <property name="Left">189</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">432</property>
    <property name="Width">369</property>
    <property name="jsOnClose"></property>
    <property name="jsOnMaximize"></property>
    <property name="jsOnMinimize"></property>
    <property name="jsOnMove"></property>
    <property name="jsOnRestore"></property>
    <object class="Button" name="bt_nao" >
      <property name="Caption"><![CDATA[Nao]]></property>
      <property name="Height">25</property>
      <property name="Left">108</property>
      <property name="Name">bt_nao</property>
      <property name="Top">78</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_naoClick</property>
    </object>
    <object class="Button" name="bt_sim" >
      <property name="Caption">Sim</property>
      <property name="Height">25</property>
      <property name="Left">187</property>
      <property name="Name">bt_sim</property>
      <property name="Top">78</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_simClick</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Voce deseja realmente excluir este registro do cadastro? O preenchimento do motivo e obrigatorio.]]></property>
      <property name="Height">28</property>
      <property name="Left">8</property>
      <property name="Name">Label3</property>
      <property name="Top">24</property>
      <property name="Width">323</property>
    </object>
    <object class="Label" name="Label16" >
      <property name="Caption">Motivo:</property>
      <property name="Height">13</property>
      <property name="Left">5</property>
      <property name="Name">Label16</property>
      <property name="Top">57</property>
      <property name="Width">40</property>
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
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">683</property>
        <property name="Top">405</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
