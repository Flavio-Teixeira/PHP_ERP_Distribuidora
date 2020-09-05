<?php
<object class="pagcontaspagarrel" name="pagcontaspagarrel" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Cobranca por Periodo]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">118</property>
  <property name="IsMaster">0</property>
  <property name="Name">pagcontaspagarrel</property>
  <property name="Width">784</property>
  <property name="OnCreate">pagcontaspagarrelCreate</property>
  <property name="jsOnLoad">pagcontaspagarrelJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
    <property name="Height">27</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">1</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">89</property>
    <property name="Width">759</property>
    <object class="Label" name="mgt_conta_pagar_descricao" >
      <property name="Caption">mgt_conta_pagar_descricao</property>
      <property name="DataField">mgt_conta_pagar_descricao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">24</property>
      <property name="Left">57</property>
      <property name="Name">mgt_conta_pagar_descricao</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">235</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_nro" >
      <property name="Caption">mgt_conta_pagar_nro</property>
      <property name="DataField">mgt_conta_pagar_nro</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_conta_pagar_nro</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">40</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_valor_ser_pago" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_conta_pagar_valor_ser_pago</property>
      <property name="DataField">mgt_conta_pagar_valor_ser_pago</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">534</property>
      <property name="Name">mgt_conta_pagar_valor_ser_pago</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_data" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_conta_pagar_data</property>
      <property name="DataField">mgt_conta_pagar_data</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">612</property>
      <property name="Name">mgt_conta_pagar_data</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_data_pagto" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_conta_pagar_data_pagto</property>
      <property name="DataField">mgt_conta_pagar_data_pagto</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">685</property>
      <property name="Name">mgt_conta_pagar_data_pagto</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption">mgt_conta_pagar_fornecedor_nome</property>
      <property name="DataField">mgt_conta_pagar_fornecedor_nome</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">24</property>
      <property name="Left">297</property>
      <property name="Name">Label1</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">235</property>
    </object>
  </object>
  <object class="Label" name="apelido_empresa" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Empresa&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">1</property>
    <property name="Name">apelido_empresa</property>
    <property name="Top">8</property>
    <property name="Width">91</property>
  </object>
  <object class="Label" name="Label3" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">471</property>
    <property name="Name">Label3</property>
    <property name="Top">8</property>
    <property name="Width">36</property>
  </object>
  <object class="Label" name="Label4" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Hora:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">592</property>
    <property name="Name">Label4</property>
    <property name="Top">8</property>
    <property name="Width">35</property>
  </object>
  <object class="Label" name="rel_data" >
    <property name="Caption">99/99/9999</property>
    <property name="Height">13</property>
    <property name="Left">513</property>
    <property name="Name">rel_data</property>
    <property name="Top">8</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="rel_hora" >
    <property name="Caption">99:99:99</property>
    <property name="Height">13</property>
    <property name="Left">632</property>
    <property name="Name">rel_hora</property>
    <property name="Top">8</property>
    <property name="Width">59</property>
  </object>
  <object class="Label" name="relatorio_titulo" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[Relatorio de Contas a Pagar]]></property>
    <property name="Font">
        <property name="Align">taCenter</property>
        <property name="Size">15px</property>
    </property>
    <property name="Height">18</property>
    <property name="Left">1</property>
    <property name="Name">relatorio_titulo</property>
    <property name="ParentFont">0</property>
    <property name="Top">25</property>
    <property name="Width">717</property>
  </object>
  <object class="Label" name="mgt_data_inicial" >
    <property name="Caption">mgt_data_inicial</property>
    <property name="Height">13</property>
    <property name="Left">83</property>
    <property name="Name">mgt_data_inicial</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="mgt_data_final" >
    <property name="Caption">mgt_data_final</property>
    <property name="Height">13</property>
    <property name="Left">274</property>
    <property name="Name">mgt_data_final</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data Inicial:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">1</property>
    <property name="Name">Label2</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label8" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data Final:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">201</property>
    <property name="Name">Label8</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label9" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Ate&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">169</property>
    <property name="Name">Label9</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">22</property>
  </object>
  <object class="Label" name="Label12" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Descricao&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">58</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">76</property>
    <property name="Width">235</property>
  </object>
  <object class="Label" name="Label21" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor Total:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">388</property>
    <property name="Name">Label21</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="mgt_cobranca_total" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_cobranca_total</property>
    <property name="Height">13</property>
    <property name="Left">461</property>
    <property name="Name">mgt_cobranca_total</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="Label22" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Lancto&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">5</property>
    <property name="Name">Label22</property>
    <property name="ParentColor">0</property>
    <property name="Top">76</property>
    <property name="Width">40</property>
  </object>
  <object class="Label" name="Label13" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr.a Pagar&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">535</property>
    <property name="Name">Label13</property>
    <property name="ParentColor">0</property>
    <property name="Top">76</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label15" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;DT Vencto&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">613</property>
    <property name="Name">Label15</property>
    <property name="ParentColor">0</property>
    <property name="Top">76</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label18" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;DT Pagto&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">686</property>
    <property name="Name">Label18</property>
    <property name="ParentColor">0</property>
    <property name="Top">76</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Fornecedor&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">298</property>
    <property name="Name">Label5</property>
    <property name="ParentColor">0</property>
    <property name="Top">76</property>
    <property name="Width">235</property>
  </object>
</object>
?>
