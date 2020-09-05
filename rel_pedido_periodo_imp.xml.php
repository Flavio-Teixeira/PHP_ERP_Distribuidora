<?php
<object class="relpedidoperiodoimp" name="relpedidoperiodoimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Pedidos por Periodo]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">182</property>
  <property name="IsMaster">0</property>
  <property name="Name">relpedidoperiodoimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">relpedidoperiodoimpCreate</property>
  <property name="jsOnLoad">relpedidoperiodoimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
    <property name="Height">36</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">139</property>
    <property name="Width">720</property>
    <object class="Label" name="mgt_pedido_cliente_nome" >
      <property name="Caption">mgt_pedido_cliente_nome</property>
      <property name="DataField">mgt_pedido_cliente_nome</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">26</property>
      <property name="Left">40</property>
      <property name="Name">mgt_pedido_cliente_nome</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">278</property>
    </object>
    <object class="Label" name="mgt_pedido_data" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_pedido_data</property>
      <property name="DataField">mgt_pedido_data</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">348</property>
      <property name="Name">mgt_pedido_data</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="mgt_pedido_cliente_desconto" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_pedido_cliente_desconto</property>
      <property name="DataField">mgt_pedido_cliente_desconto</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">428</property>
      <property name="Name">mgt_pedido_cliente_desconto</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">55</property>
    </object>
    <object class="Label" name="mgt_pedido_valor_pedido" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_pedido_valor_pedido</property>
      <property name="DataField">mgt_pedido_valor_pedido</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">492</property>
      <property name="Name">mgt_pedido_valor_pedido</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">72</property>
    </object>
    <object class="Label" name="mgt_pedido_valor_ipi" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_pedido_valor_ipi</property>
      <property name="DataField">mgt_pedido_valor_ipi</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">580</property>
      <property name="Name">mgt_pedido_valor_ipi</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">56</property>
    </object>
    <object class="Label" name="mgt_pedido_valor_total" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_pedido_valor_total</property>
      <property name="DataField">mgt_pedido_valor_total</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">651</property>
      <property name="Name">mgt_pedido_valor_total</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">66</property>
    </object>
    <object class="Label" name="mgt_pedido_numero" >
      <property name="Caption">mgt_pedido_numero</property>
      <property name="DataField">mgt_pedido_numero</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_pedido_numero</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">30</property>
    </object>
    <object class="Label" name="mgt_cliente_estado" >
      <property name="Caption">mgt_cliente_estado</property>
      <property name="DataField">mgt_cliente_estado</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">324</property>
      <property name="Name">mgt_cliente_estado</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">20</property>
    </object>
  </object>
  <object class="Label" name="apelido_empresa" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Empresa&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">58</property>
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
    <property name="Caption"><![CDATA[Relatorio de Pedidos por Periodo]]></property>
    <property name="Font">
        <property name="Align">taCenter</property>
        <property name="Size">15px</property>
    </property>
    <property name="Height">18</property>
    <property name="Left">58</property>
    <property name="Name">relatorio_titulo</property>
    <property name="ParentFont">0</property>
    <property name="Top">25</property>
    <property name="Width">667</property>
  </object>
  <object class="Label" name="mgt_pedido_data_inicial" >
    <property name="Caption">mgt_pedido_data_inicial</property>
    <property name="Height">13</property>
    <property name="Left">90</property>
    <property name="Name">mgt_pedido_data_inicial</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="mgt_pedido_data_final" >
    <property name="Caption">mgt_pedido_data_final</property>
    <property name="Height">13</property>
    <property name="Left">280</property>
    <property name="Name">mgt_pedido_data_final</property>
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
    <property name="Left">48</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">278</property>
  </object>
  <object class="Label" name="Label15" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;UF&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">332</property>
    <property name="Name">Label15</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">20</property>
  </object>
  <object class="Label" name="Label16" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">356</property>
    <property name="Name">Label16</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="Label17" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Desconto&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">436</property>
    <property name="Name">Label17</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">55</property>
  </object>
  <object class="Label" name="Label18" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor Pedido&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">500</property>
    <property name="Name">Label18</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">72</property>
  </object>
  <object class="Label" name="Label19" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor IPI&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">588</property>
    <property name="Name">Label19</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">56</property>
  </object>
  <object class="Label" name="Label20" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor Total&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">659</property>
    <property name="Name">Label20</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor Pedido&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">500</property>
    <property name="Name">Label1</property>
    <property name="ParentColor">0</property>
    <property name="Top">75</property>
    <property name="Width">72</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor IPI&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">588</property>
    <property name="Name">Label5</property>
    <property name="ParentColor">0</property>
    <property name="Top">75</property>
    <property name="Width">56</property>
  </object>
  <object class="Label" name="Label6" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor Total&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">659</property>
    <property name="Name">Label6</property>
    <property name="ParentColor">0</property>
    <property name="Top">75</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="Label7" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Totais&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">451</property>
    <property name="Name">Label7</property>
    <property name="ParentColor">0</property>
    <property name="Top">91</property>
    <property name="Width">40</property>
  </object>
  <object class="Label" name="mgt_pedido_total_pedido" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_pedido_total_pedido</property>
    <property name="Height">13</property>
    <property name="Left">500</property>
    <property name="Name">mgt_pedido_total_pedido</property>
    <property name="ParentColor">0</property>
    <property name="Top">91</property>
    <property name="Width">72</property>
  </object>
  <object class="Label" name="mgt_pedido_total_ipi" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_pedido_total_ipi</property>
    <property name="Height">13</property>
    <property name="Left">588</property>
    <property name="Name">mgt_pedido_total_ipi</property>
    <property name="ParentColor">0</property>
    <property name="Top">91</property>
    <property name="Width">56</property>
  </object>
  <object class="Label" name="mgt_pedido_total" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_pedido_total</property>
    <property name="Height">13</property>
    <property name="Left">659</property>
    <property name="Name">mgt_pedido_total</property>
    <property name="ParentColor">0</property>
    <property name="Top">91</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="Label10" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Ped.&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label10</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">30</property>
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
