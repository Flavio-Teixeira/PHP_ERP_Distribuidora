<?php
<object class="venpedidospendentesimp" name="venpedidospendentesimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Pedidos por Periodo]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">174</property>
  <property name="IsMaster">0</property>
  <property name="Name">venpedidospendentesimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">venpedidospendentesimpCreate</property>
  <property name="jsOnLoad">venpedidospendentesimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
    <property name="Height">24</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">139</property>
    <property name="Width">720</property>
    <object class="Label" name="mgt_pedido_valor_total" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_pedido_produto_quantidade</property>
      <property name="DataField">mgt_pedido_produto_quantidade</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">651</property>
      <property name="Name">mgt_pedido_valor_total</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">66</property>
    </object>
    <object class="Label" name="mgt_pedido_cliente_numero" >
      <property name="Caption">mgt_pedido_produto_codigo</property>
      <property name="DataField">mgt_pedido_produto_codigo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_pedido_cliente_numero</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">mgt_pedido_produto_referencia</property>
      <property name="DataField">mgt_pedido_produto_referencia</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">84</property>
      <property name="Name">Label11</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption">mgt_pedido_produto_descricao</property>
      <property name="DataField">mgt_pedido_produto_descricao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">168</property>
      <property name="Name">Label13</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">160</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_pedido_numero</property>
      <property name="DataField">mgt_pedido_numero</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">594</property>
      <property name="Name">Label15</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">50</property>
    </object>
    <object class="Label" name="Label16" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_pedido_data</property>
      <property name="DataField">mgt_pedido_data</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">517</property>
      <property name="Name">Label16</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Caption">mgt_pedido_cliente_nome</property>
      <property name="DataField">mgt_pedido_cliente_nome</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">343</property>
      <property name="Name">Label18</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">160</property>
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
    <property name="Caption">Pedidos Pendentes</property>
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
  <object class="Label" name="mgt_rel_dt_ini" >
    <property name="Caption">mgt_rel_dt_ini</property>
    <property name="Height">13</property>
    <property name="Left">90</property>
    <property name="Name">mgt_rel_dt_ini</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="mgt_rel_dt_fim" >
    <property name="Caption">mgt_rel_dt_fim</property>
    <property name="Height">13</property>
    <property name="Left">280</property>
    <property name="Name">mgt_rel_dt_fim</property>
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
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Codigo&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">12</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label19" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Descricao&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">176</property>
    <property name="Name">Label19</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">160</property>
  </object>
  <object class="Label" name="Label20" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Quantidade&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">659</property>
    <property name="Name">Label20</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Quantidade&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">656</property>
    <property name="Name">Label1</property>
    <property name="ParentColor">0</property>
    <property name="Top">75</property>
    <property name="Width">72</property>
  </object>
  <object class="Label" name="Label7" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Total&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">607</property>
    <property name="Name">Label7</property>
    <property name="ParentColor">0</property>
    <property name="Top">91</property>
    <property name="Width">40</property>
  </object>
  <object class="Label" name="mgt_pedido_produto_total_quantidade" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_pedido_produto_total_quantidade</property>
    <property name="Height">13</property>
    <property name="Left">656</property>
    <property name="Name">mgt_pedido_produto_total_quantidade</property>
    <property name="ParentColor">0</property>
    <property name="Top">91</property>
    <property name="Width">72</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Tipo:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label5</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">78</property>
    <property name="Width">32</property>
  </object>
  <object class="Label" name="opcao_escolhida_tipo" >
    <property name="Caption">opcao_escolhida_tipo</property>
    <property name="Height">13</property>
    <property name="Left">42</property>
    <property name="Name">opcao_escolhida_tipo</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">78</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label10" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Codigo:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">128</property>
    <property name="Name">Label10</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">78</property>
    <property name="Width">46</property>
  </object>
  <object class="Label" name="opcao_escolhida_codigo" >
    <property name="Caption">opcao_escolhida_codigo</property>
    <property name="Height">13</property>
    <property name="Left">176</property>
    <property name="Name">opcao_escolhida_codigo</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">78</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="Label6" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Referencia&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">92</property>
    <property name="Name">Label6</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="opcao_escolhida_descricao" >
    <property name="Caption">opcao_escolhida_descricao</property>
    <property name="Height">13</property>
    <property name="Left">284</property>
    <property name="Name">opcao_escolhida_descricao</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">78</property>
    <property name="Width">360</property>
  </object>
  <object class="Label" name="Label14" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Pedido&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">602</property>
    <property name="Name">Label14</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">50</property>
  </object>
  <object class="Label" name="Label17" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Emissao&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">525</property>
    <property name="Name">Label17</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label21" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cliente&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">351</property>
    <property name="Name">Label21</property>
    <property name="ParentColor">0</property>
    <property name="Top">125</property>
    <property name="Width">160</property>
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
