<?php
<object class="relimpostosimp" name="relimpostosimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Relatorio de Impostos]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">190</property>
  <property name="IsMaster">0</property>
  <property name="Name">relimpostosimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">relimpostosimpCreate</property>
  <property name="jsOnLoad">relimpostosimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
    <property name="Height">48</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">134</property>
    <property name="Width">720</property>
    <object class="Label" name="mgt_nota_fiscal_cliente_codigo" >
      <property name="Caption">mgt_nota_fiscal_cliente_codigo</property>
      <property name="DataField">mgt_nota_fiscal_cliente_codigo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
      <property name="Height">38</property>
      <property name="Left">68</property>
      <property name="Name">mgt_nota_fiscal_cliente_codigo</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">150</property>
    </object>
    <object class="Label" name="mgt_nota_fiscal_data_emissao" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_nota_fiscal_data_emissao</property>
      <property name="DataField">mgt_nota_fiscal_data_emissao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
      <property name="Height">13</property>
      <property name="Left">454</property>
      <property name="Name">mgt_nota_fiscal_data_emissao</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="mgt_nota_fiscal_imposto" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_nota_fiscal_imposto</property>
      <property name="DataField">mgt_nota_fiscal_imposto</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
      <property name="Height">13</property>
      <property name="Left">633</property>
      <property name="Name">mgt_nota_fiscal_imposto</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_nota_fiscal_numero" >
      <property name="Caption">mgt_nota_fiscal_numero</property>
      <property name="DataField">mgt_nota_fiscal_numero</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
      <property name="Height">13</property>
      <property name="Left">5</property>
      <property name="Name">mgt_nota_fiscal_numero</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">40</property>
    </object>
    <object class="Label" name="mgt_nota_fiscal_valor_total" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_nota_fiscal_valor_total</property>
      <property name="DataField">mgt_nota_fiscal_valor_total</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
      <property name="Height">13</property>
      <property name="Left">541</property>
      <property name="Name">mgt_nota_fiscal_valor_total</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption">mgt_nota_fiscal_cliente_nome</property>
      <property name="DataField">mgt_nota_fiscal_cliente_nome</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
      <property name="Height">38</property>
      <property name="Left">236</property>
      <property name="Name">Label6</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">200</property>
    </object>
  </object>
  <object class="Label" name="apelido_empresa" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Empresa&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">56</property>
    <property name="Name">apelido_empresa</property>
    <property name="Top">8</property>
    <property name="Width">91</property>
  </object>
  <object class="Label" name="Label3" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">478</property>
    <property name="Name">Label3</property>
    <property name="Top">8</property>
    <property name="Width">36</property>
  </object>
  <object class="Label" name="Label4" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Hora:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">625</property>
    <property name="Name">Label4</property>
    <property name="Top">8</property>
    <property name="Width">35</property>
  </object>
  <object class="Label" name="rel_data" >
    <property name="Caption">99/99/9999</property>
    <property name="Height">13</property>
    <property name="Left">520</property>
    <property name="Name">rel_data</property>
    <property name="Top">8</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="rel_hora" >
    <property name="Caption">99:99:99</property>
    <property name="Height">13</property>
    <property name="Left">666</property>
    <property name="Name">rel_hora</property>
    <property name="Top">8</property>
    <property name="Width">59</property>
  </object>
  <object class="Label" name="relatorio_titulo" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[Relatorio de Impostos]]></property>
    <property name="Font">
        <property name="Align">taCenter</property>
        <property name="Size">15px</property>
    </property>
    <property name="Height">18</property>
    <property name="Left">56</property>
    <property name="Name">relatorio_titulo</property>
    <property name="ParentFont">0</property>
    <property name="Top">25</property>
    <property name="Width">669</property>
  </object>
  <object class="Label" name="mgt_data_inicial" >
    <property name="Caption">mgt_data_inicial</property>
    <property name="Height">13</property>
    <property name="Left">90</property>
    <property name="Name">mgt_data_inicial</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="mgt_data_final" >
    <property name="Caption">mgt_data_final</property>
    <property name="Height">13</property>
    <property name="Left">280</property>
    <property name="Name">mgt_data_final</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data Inicial:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label2</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label8" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data Final:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">208</property>
    <property name="Name">Label8</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label9" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Ate&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">176</property>
    <property name="Name">Label9</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">22</property>
  </object>
  <object class="Label" name="Label12" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cliente&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">244</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">116</property>
    <property name="Width">200</property>
  </object>
  <object class="Label" name="Label16" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data Emissao&lt;/STRONG&gt;]]></property>
    <property name="Height">26</property>
    <property name="Left">462</property>
    <property name="Name">Label16</property>
    <property name="ParentColor">0</property>
    <property name="Top">103</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="Label20" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Imposto&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">641</property>
    <property name="Name">Label20</property>
    <property name="ParentColor">0</property>
    <property name="Top">116</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor Total Nota&lt;/STRONG&gt;]]></property>
    <property name="Height">26</property>
    <property name="Left">549</property>
    <property name="Name">Label1</property>
    <property name="ParentColor">0</property>
    <property name="Top">103</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label22" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;NF.&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">13</property>
    <property name="Name">Label22</property>
    <property name="ParentColor">0</property>
    <property name="Top">116</property>
    <property name="Width">50</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Codigo do Cliente&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">76</property>
    <property name="Name">Label5</property>
    <property name="ParentColor">0</property>
    <property name="Top">116</property>
    <property name="Width">150</property>
  </object>
  <object class="Label" name="Label7" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Total Impostos:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">539</property>
    <property name="Name">Label7</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="Label10" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Total Geral:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">360</property>
    <property name="Name">Label10</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="mgt_nota_fiscal_total_imposto" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_nota_fiscal_total_imposto</property>
    <property name="Height">13</property>
    <property name="Left">641</property>
    <property name="Name">mgt_nota_fiscal_total_imposto</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="mgt_nota_fiscal_total_geral" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_nota_fiscal_total_geral</property>
    <property name="Height">13</property>
    <property name="Left">442</property>
    <property name="Name">mgt_nota_fiscal_total_geral</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">80</property>
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
