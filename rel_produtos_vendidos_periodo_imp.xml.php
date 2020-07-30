<?php
<object class="relprodutosvendidosperiodoimp" name="relprodutosvendidosperiodoimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Cobranca por Periodo]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">166</property>
  <property name="IsMaster">0</property>
  <property name="Name">relprodutosvendidosperiodoimp</property>
  <property name="Width">1016</property>
  <property name="OnCreate">relprodutosvendidosperiodoimpCreate</property>
  <property name="jsOnLoad">relprodutosvendidosperiodoimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
    <property name="Height">40</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">1</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">121</property>
    <property name="Width">995</property>
    <object class="Label" name="mgt_conta_pagar_descricao" >
      <property name="Caption">mgt_swap_vendido_periodo_prod_desc</property>
      <property name="DataField">mgt_swap_vendido_periodo_prod_desc</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">79</property>
      <property name="Name">mgt_conta_pagar_descricao</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">150</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_nro" >
      <property name="Caption">mgt_swap_vendido_periodo_prod_cod</property>
      <property name="DataField">mgt_swap_vendido_periodo_prod_cod</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_conta_pagar_nro</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_valor_ser_pago" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_vendido_periodo_qtde_nf</property>
      <property name="DataField">mgt_swap_vendido_periodo_qtde_nf</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">233</property>
      <property name="Name">mgt_conta_pagar_valor_ser_pago</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_data" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_vendido_periodo_vlr_nf</property>
      <property name="DataField">mgt_swap_vendido_periodo_vlr_nf</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">308</property>
      <property name="Name">mgt_conta_pagar_data</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_data_pagto" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_vendido_periodo_qtde_prg</property>
      <property name="DataField">mgt_swap_vendido_periodo_qtde_prg</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">385</property>
      <property name="Name">mgt_conta_pagar_data_pagto</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_vendido_periodo_vlr_prg</property>
      <property name="DataField">mgt_swap_vendido_periodo_vlr_prg</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">462</property>
      <property name="Name">Label1</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_vendido_periodo_qtde_out</property>
      <property name="DataField">mgt_swap_vendido_periodo_qtde_out</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">536</property>
      <property name="Name">Label5</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_vendido_periodo_vlr_out</property>
      <property name="DataField">mgt_swap_vendido_periodo_vlr_out</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">612</property>
      <property name="Name">Label6</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_vendido_periodo_qtde_ent</property>
      <property name="DataField">mgt_swap_vendido_periodo_qtde_ent</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">688</property>
      <property name="Name">Label7</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_vendido_periodo_qtde_sai</property>
      <property name="DataField">mgt_swap_vendido_periodo_qtde_sai</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">764</property>
      <property name="Name">Label10</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_vendido_periodo_qtde_pro</property>
      <property name="DataField">mgt_swap_vendido_periodo_qtde_pro</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">841</property>
      <property name="Name">Label11</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_vendido_periodo_qtde_sld</property>
      <property name="DataField">mgt_swap_vendido_periodo_qtde_sld</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">917</property>
      <property name="Name">Label14</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">70</property>
    </object>
  </object>
  <object class="Label" name="apelido_empresa" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Empresa&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">59</property>
    <property name="Name">apelido_empresa</property>
    <property name="Top">8</property>
    <property name="Width">91</property>
  </object>
  <object class="Label" name="Label3" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">735</property>
    <property name="Name">Label3</property>
    <property name="Top">8</property>
    <property name="Width">36</property>
  </object>
  <object class="Label" name="Label4" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Hora:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">856</property>
    <property name="Name">Label4</property>
    <property name="Top">8</property>
    <property name="Width">35</property>
  </object>
  <object class="Label" name="rel_data" >
    <property name="Caption">99/99/9999</property>
    <property name="Height">13</property>
    <property name="Left">777</property>
    <property name="Name">rel_data</property>
    <property name="Top">8</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="rel_hora" >
    <property name="Caption">99:99:99</property>
    <property name="Height">13</property>
    <property name="Left">896</property>
    <property name="Name">rel_hora</property>
    <property name="Top">8</property>
    <property name="Width">59</property>
  </object>
  <object class="Label" name="relatorio_titulo" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[Relatorio de Produtos por Periodo]]></property>
    <property name="Font">
        <property name="Align">taCenter</property>
        <property name="Size">15px</property>
    </property>
    <property name="Height">18</property>
    <property name="Left">59</property>
    <property name="Name">relatorio_titulo</property>
    <property name="ParentFont">0</property>
    <property name="Top">25</property>
    <property name="Width">896</property>
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
    <property name="Left">80</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">108</property>
    <property name="Width">150</property>
  </object>
  <object class="Label" name="Label21" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Tipo do Produto:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">372</property>
    <property name="Name">Label21</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">98</property>
  </object>
  <object class="Label" name="mgt_cobranca_tipo_produto" >
    <property name="Caption">mgt_cobranca_tipo_produto</property>
    <property name="Height">13</property>
    <property name="Left">475</property>
    <property name="Name">mgt_cobranca_tipo_produto</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">480</property>
  </object>
  <object class="Label" name="Label22" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cod.Produto&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">5</property>
    <property name="Name">Label22</property>
    <property name="ParentColor">0</property>
    <property name="Top">108</property>
    <property name="Width">72</property>
  </object>
  <object class="Label" name="Label13" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtde. Vendida(NF)&lt;/STRONG&gt;]]></property>
    <property name="Height">36</property>
    <property name="Left">234</property>
    <property name="Name">Label13</property>
    <property name="ParentColor">0</property>
    <property name="Top">84</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label15" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. Vendido(NF)&lt;/STRONG&gt;]]></property>
    <property name="Height">26</property>
    <property name="Left">309</property>
    <property name="Name">Label15</property>
    <property name="ParentColor">0</property>
    <property name="Top">94</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label18" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtde. Venda Programada&lt;/STRONG&gt;]]></property>
    <property name="Height">39</property>
    <property name="Left">386</property>
    <property name="Name">Label18</property>
    <property name="ParentColor">0</property>
    <property name="Top">81</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label16" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. Venda Programada&lt;/STRONG&gt;]]></property>
    <property name="Height">26</property>
    <property name="Left">463</property>
    <property name="Name">Label16</property>
    <property name="ParentColor">0</property>
    <property name="Top">94</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label17" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtde. Outras Saidas&lt;/STRONG&gt;]]></property>
    <property name="Height">34</property>
    <property name="Left">537</property>
    <property name="Name">Label17</property>
    <property name="ParentColor">0</property>
    <property name="Top">86</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label19" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. Outras Saidas&lt;/STRONG&gt;]]></property>
    <property name="Height">26</property>
    <property name="Left">613</property>
    <property name="Name">Label19</property>
    <property name="ParentColor">0</property>
    <property name="Top">94</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label20" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Entradas de Estoque&lt;/STRONG&gt;]]></property>
    <property name="Height">26</property>
    <property name="Left">689</property>
    <property name="Name">Label20</property>
    <property name="ParentColor">0</property>
    <property name="Top">94</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label23" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Saidas de Estoque&lt;/STRONG&gt;]]></property>
    <property name="Height">26</property>
    <property name="Left">765</property>
    <property name="Name">Label23</property>
    <property name="ParentColor">0</property>
    <property name="Top">94</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label24" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtde. Producao&lt;/STRONG&gt;]]></property>
    <property name="Height">26</property>
    <property name="Left">842</property>
    <property name="Name">Label24</property>
    <property name="ParentColor">0</property>
    <property name="Top">94</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label25" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtde. Estoque Atual&lt;/STRONG&gt;]]></property>
    <property name="Height">35</property>
    <property name="Left">918</property>
    <property name="Name">Label25</property>
    <property name="ParentColor">0</property>
    <property name="Top">85</property>
    <property name="Width">70</property>
  </object>
  <object class="Image" name="logo_relatorio" >
    <property name="Border">0</property>
    <property name="Height">40</property>
    <property name="ImageSource">imagens/logo_danfe.jpg</property>
    <property name="Left">4</property>
    <property name="Link"></property>
    <property name="LinkTarget"></property>
    <property name="Name">logo_relatorio</property>
    <property name="Proportional">1</property>
    <property name="Top">8</property>
    <property name="Width">40</property>
  </object>
</object>
?>
