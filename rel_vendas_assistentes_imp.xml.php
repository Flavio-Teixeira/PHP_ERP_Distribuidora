<?php
<object class="relvendasassistentesimp" name="relvendasassistentesimp" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">Vendas dos Assistentes</property>
  <property name="DocType">dtNone</property>
  <property name="Height">206</property>
  <property name="IsMaster">0</property>
  <property name="Name">relvendasassistentesimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">relvendasassistentesimpCreate</property>
  <property name="jsOnLoad">relvendasassistentesimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Comissoes</property>
    <property name="Height">17</property>
    <property name="Layout">
    <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">151</property>
    <property name="Width">724</property>
    <object class="Label" name="mgt_swap_comissao_cliente" >
      <property name="Caption">mgt_swap_comissao_cliente</property>
      <property name="DataField">mgt_swap_comissao_cliente</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Comissoes</property>
      <property name="Height">13</property>
      <property name="Left">151</property>
      <property name="Name">mgt_swap_comissao_cliente</property>
      <property name="ParentColor">0</property>
      <property name="Top">2</property>
      <property name="Width">383</property>
    </object>
    <object class="Label" name="mgt_swap_comissao_nro_duplicata" >
      <property name="Caption">mgt_swap_comissao_nro_duplicata</property>
      <property name="DataField">mgt_swap_comissao_nro_duplicata</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Comissoes</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_swap_comissao_nro_duplicata</property>
      <property name="ParentColor">0</property>
      <property name="Top">2</property>
      <property name="Width">55</property>
    </object>
    <object class="Label" name="mgt_swap_comissao_data" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_swap_comissao_data</property>
      <property name="DataField">mgt_swap_comissao_data</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Comissoes</property>
      <property name="Height">13</property>
      <property name="Left">68</property>
      <property name="Name">mgt_swap_comissao_data</property>
      <property name="ParentColor">0</property>
      <property name="Top">2</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="mgt_swap_comissao_vlr" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_comissao_vlr</property>
      <property name="DataField">mgt_swap_comissao_vlr</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Comissoes</property>
      <property name="Height">13</property>
      <property name="Left">550</property>
      <property name="Name">mgt_swap_comissao_vlr</property>
      <property name="ParentColor">0</property>
      <property name="Top">2</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="mgt_swap_comissao_comissao" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_comissao_comissao</property>
      <property name="DataField">mgt_swap_comissao_comissao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Comissoes</property>
      <property name="Height">13</property>
      <property name="Left">637</property>
      <property name="Name">mgt_swap_comissao_comissao</property>
      <property name="ParentColor">0</property>
      <property name="Top">2</property>
      <property name="Width">75</property>
    </object>
  </object>
  <object class="Label" name="apelido_empresa" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Empresa&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">64</property>
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
    <property name="Caption">Vendas dos Assistentes</property>
    <property name="Font">
    <property name="Align">taCenter</property>
    <property name="Size">15px</property>
    </property>
    <property name="Height">18</property>
    <property name="Left">64</property>
    <property name="Name">relatorio_titulo</property>
    <property name="ParentFont">0</property>
    <property name="Top">25</property>
    <property name="Width">661</property>
  </object>
  <object class="Label" name="Label12" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cliente&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">159</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">131</property>
    <property name="Width">305</property>
  </object>
  <object class="Label" name="Label18" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">558</property>
    <property name="Name">Label18</property>
    <property name="ParentColor">0</property>
    <property name="Top">131</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label22" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Nro. Pedido&lt;/STRONG&gt;]]></property>
    <property name="Height">23</property>
    <property name="Left">12</property>
    <property name="Name">Label22</property>
    <property name="ParentColor">0</property>
    <property name="Top">121</property>
    <property name="Width">55</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">76</property>
    <property name="Name">Label1</property>
    <property name="ParentColor">0</property>
    <property name="Top">131</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="Label6" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Comissao&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">645</property>
    <property name="Name">Label6</property>
    <property name="ParentColor">0</property>
    <property name="Top">131</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label13" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data Inicial:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label13</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="data_inicial" >
    <property name="Caption">data_inicial</property>
    <property name="Height">13</property>
    <property name="Left">90</property>
    <property name="Name">data_inicial</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label14" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data Final:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">208</property>
    <property name="Name">Label14</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label15" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Ate&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">176</property>
    <property name="Name">Label15</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">22</property>
  </object>
  <object class="Label" name="data_final" >
    <property name="Caption">data_final</property>
    <property name="Height">13</property>
    <property name="Left">280</property>
    <property name="Name">data_final</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label16" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Assistente:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label16</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">78</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="assistente_nome" >
    <property name="Caption">assistente_nome</property>
    <property name="Height">13</property>
    <property name="Left">115</property>
    <property name="Name">assistente_nome</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">78</property>
    <property name="Width">427</property>
  </object>
  <object class="Label" name="Label7" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Porcentagem de Comissao:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label7</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">97</property>
    <property name="Width">160</property>
  </object>
  <object class="Label" name="assistente_comisao" >
    <property name="Alignment">agCenter</property>
    <property name="Caption">assistente_comisao</property>
    <property name="Height">13</property>
    <property name="Left">171</property>
    <property name="Name">assistente_comisao</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">97</property>
    <property name="Width">50</property>
  </object>
  <object class="Label" name="Label8" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor Total&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">558</property>
    <property name="Name">Label8</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label10" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Total Comissoes&lt;/STRONG&gt;]]></property>
    <property name="Height">26</property>
    <property name="Left">645</property>
    <property name="Name">Label10</property>
    <property name="ParentColor">0</property>
    <property name="Top">65</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="mgt_swap_comissao_vlr_total" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_swap_comissao_vlr_total</property>
    <property name="Height">13</property>
    <property name="Left">558</property>
    <property name="Name">mgt_swap_comissao_vlr_total</property>
    <property name="ParentColor">0</property>
    <property name="Top">101</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="mgt_swap_comissao_comissao_total" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_swap_comissao_comissao_total</property>
    <property name="Height">13</property>
    <property name="Left">645</property>
    <property name="Name">mgt_swap_comissao_comissao_total</property>
    <property name="ParentColor">0</property>
    <property name="Top">101</property>
    <property name="Width">75</property>
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
