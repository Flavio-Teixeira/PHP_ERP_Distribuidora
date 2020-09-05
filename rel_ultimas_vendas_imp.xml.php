<?php
<object class="relultimasvendasimp" name="relultimasvendasimp" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">Pedido</property>
  <property name="DocType">dtNone</property>
  <property name="Height">246</property>
  <property name="IsMaster">0</property>
  <property name="Name">relultimasvendasimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">relultimasvendasimpCreate</property>
  <property name="jsOnLoad">relultimasvendasimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
    <property name="Height">74</property>
    <property name="Layout">
    <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">163</property>
    <property name="Width">720</property>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Representante:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">1</property>
      <property name="Name">Label1</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="mgt_representante_nome" >
      <property name="Caption">mgt_representante_nome</property>
      <property name="DataField">mgt_representante_nome</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">165</property>
      <property name="Name">mgt_representante_nome</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">552</property>
    </object>
    <object class="Label" name="mgt_representante_codigo" >
      <property name="Caption">mgt_representante_codigo</property>
      <property name="DataField">mgt_representante_codigo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">97</property>
      <property name="Name">mgt_representante_codigo</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">32</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">-</property>
      <property name="Height">13</property>
      <property name="Left">145</property>
      <property name="Name">Label6</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">12</property>
    </object>
    <object class="Label" name="mgt_cliente_razao_social" >
      <property name="Caption">mgt_cliente_razao_social</property>
      <property name="DataField">mgt_cliente_razao_social</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">81</property>
      <property name="Name">mgt_cliente_razao_social</property>
      <property name="ParentColor">0</property>
      <property name="Top">21</property>
      <property name="Width">388</property>
    </object>
    <object class="Label" name="mgt_cliente_numero" >
      <property name="Caption">mgt_cliente_numero</property>
      <property name="DataField">mgt_cliente_numero</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_cliente_numero</property>
      <property name="ParentColor">0</property>
      <property name="Top">21</property>
      <property name="Width">44</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">-</property>
      <property name="Height">13</property>
      <property name="Left">59</property>
      <property name="Name">Label18</property>
      <property name="ParentColor">0</property>
      <property name="Top">21</property>
      <property name="Width">12</property>
    </object>
    <object class="Label" name="mgt_cliente_estado" >
      <property name="Caption">mgt_cliente_estado</property>
      <property name="DataField">mgt_cliente_estado</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">477</property>
      <property name="Name">mgt_cliente_estado</property>
      <property name="ParentColor">0</property>
      <property name="Top">21</property>
      <property name="Width">18</property>
    </object>
    <object class="Label" name="mgt_pedido_data" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_pedido_data</property>
      <property name="DataField">mgt_pedido_data_ord</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">506</property>
      <property name="Name">mgt_pedido_data</property>
      <property name="ParentColor">0</property>
      <property name="Top">21</property>
      <property name="Width">98</property>
    </object>
    <object class="Label" name="mgt_pedido_valor_pedido" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_pedido_valor_pedido</property>
      <property name="DataField">mgt_pedido_valor_total</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">617</property>
      <property name="Name">mgt_pedido_valor_pedido</property>
      <property name="ParentColor">0</property>
      <property name="Top">21</property>
      <property name="Width">98</property>
    </object>
    <object class="Label" name="mgt_cliente_endereco" >
      <property name="Caption">mgt_cliente_endereco</property>
      <property name="DataField">mgt_cliente_endereco</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_cliente_endereco</property>
      <property name="ParentColor">0</property>
      <property name="Top">38</property>
      <property name="Width">270</property>
    </object>
    <object class="Label" name="mgt_cliente_complemento" >
      <property name="Caption">mgt_cliente_complemento</property>
      <property name="DataField">mgt_cliente_complemento</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">279</property>
      <property name="Name">mgt_cliente_complemento</property>
      <property name="ParentColor">0</property>
      <property name="Top">38</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_cliente_bairro" >
      <property name="Caption">mgt_cliente_bairro</property>
      <property name="DataField">mgt_cliente_bairro</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">371</property>
      <property name="Name">mgt_cliente_bairro</property>
      <property name="ParentColor">0</property>
      <property name="Top">38</property>
      <property name="Width">164</property>
    </object>
    <object class="Label" name="mgt_cliente_cidade" >
      <property name="Caption">mgt_cliente_cidade</property>
      <property name="DataField">mgt_cliente_cidade</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">543</property>
      <property name="Name">mgt_cliente_cidade</property>
      <property name="ParentColor">0</property>
      <property name="Top">38</property>
      <property name="Width">172</property>
    </object>
    <object class="Label" name="mgt_cliente_cep" >
      <property name="Caption">mgt_cliente_cep</property>
      <property name="DataField">mgt_cliente_cep</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_cliente_cep</property>
      <property name="ParentColor">0</property>
      <property name="Top">56</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label30" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Fone:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">145</property>
      <property name="Name">Label30</property>
      <property name="ParentColor">0</property>
      <property name="Top">56</property>
      <property name="Width">36</property>
    </object>
    <object class="Label" name="mgt_cliente_ddd" >
      <property name="Caption">mgt_cliente_ddd</property>
      <property name="DataField">mgt_cliente_ddd</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">182</property>
      <property name="Name">mgt_cliente_ddd</property>
      <property name="ParentColor">0</property>
      <property name="Top">56</property>
      <property name="Width">20</property>
    </object>
    <object class="Label" name="mgt_cliente_fone_comercial" >
      <property name="Caption">mgt_cliente_fone_comercial</property>
      <property name="DataField">mgt_cliente_fone_comercial</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">214</property>
      <property name="Name">mgt_cliente_fone_comercial</property>
      <property name="ParentColor">0</property>
      <property name="Top">56</property>
      <property name="Width">244</property>
    </object>
    <object class="Label" name="Label33" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;E-Mail:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">465</property>
      <property name="Name">Label33</property>
      <property name="ParentColor">0</property>
      <property name="Top">56</property>
      <property name="Width">41</property>
    </object>
    <object class="Label" name="mgt_cliente_email" >
      <property name="Caption">mgt_cliente_email</property>
      <property name="DataField">mgt_cliente_email</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
      <property name="Height">13</property>
      <property name="Left">511</property>
      <property name="Name">mgt_cliente_email</property>
      <property name="ParentColor">0</property>
      <property name="Top">56</property>
      <property name="Width">204</property>
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
    <property name="Caption"><![CDATA[Ultimas Vendas]]></property>
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
  <object class="Label" name="Label28" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Estado:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label28</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">93</property>
  </object>
  <object class="Label" name="mgt_rel_dt_ini" >
    <property name="Caption">mgt_rel_dt_ini</property>
    <property name="Height">13</property>
    <property name="Left">459</property>
    <property name="Name">mgt_rel_dt_ini</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="mgt_rel_dt_fim" >
    <property name="Caption">mgt_rel_dt_fim</property>
    <property name="Height">13</property>
    <property name="Left">650</property>
    <property name="Name">mgt_rel_dt_fim</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="mgt_rel_estado" >
    <property name="Caption">mgt_rel_estado</property>
    <property name="Height">13</property>
    <property name="Left">105</property>
    <property name="Name">mgt_rel_estado</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">270</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data Inicial:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">380</property>
    <property name="Name">Label2</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">76</property>
  </object>
  <object class="Label" name="Label8" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data Final:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">577</property>
    <property name="Name">Label8</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">64</property>
  </object>
  <object class="Label" name="Label9" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Ate&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">547</property>
    <property name="Name">Label9</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">22</property>
  </object>
  <object class="Label" name="Label7" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cidade:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label7</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">73</property>
    <property name="Width">93</property>
  </object>
  <object class="Label" name="mgt_rel_cidade" >
    <property name="Caption">mgt_rel_cidade</property>
    <property name="Height">13</property>
    <property name="Left">105</property>
    <property name="Name">mgt_rel_cidade</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">73</property>
    <property name="Width">270</property>
  </object>
  <object class="Label" name="Label15" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Bairro:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label15</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">94</property>
    <property name="Width">93</property>
  </object>
  <object class="Label" name="mgt_rel_bairro" >
    <property name="Caption">mgt_rel_bairro</property>
    <property name="Height">13</property>
    <property name="Left">105</property>
    <property name="Name">mgt_rel_bairro</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">94</property>
    <property name="Width">270</property>
  </object>
  <object class="Label" name="Label17" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Representante:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label17</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">116</property>
    <property name="Width">93</property>
  </object>
  <object class="Label" name="mgt_rel_representante" >
    <property name="Caption">mgt_rel_representante</property>
    <property name="Height">13</property>
    <property name="Left">105</property>
    <property name="Name">mgt_rel_representante</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">116</property>
    <property name="Width">270</property>
  </object>
  <object class="Label" name="Label19" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Tipo:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">380</property>
    <property name="Name">Label19</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">73</property>
    <property name="Width">76</property>
  </object>
  <object class="Label" name="mgt_rel_tipo" >
    <property name="Caption">mgt_rel_tipo</property>
    <property name="Height">13</property>
    <property name="Left">459</property>
    <property name="Name">mgt_rel_tipo</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">73</property>
    <property name="Width">266</property>
  </object>
  <object class="Label" name="Label21" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Ordenado:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">380</property>
    <property name="Name">Label21</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">94</property>
    <property name="Width">76</property>
  </object>
  <object class="Label" name="mgt_rel_ordem" >
    <property name="Caption">mgt_rel_ordem</property>
    <property name="Height">13</property>
    <property name="Left">459</property>
    <property name="Name">mgt_rel_ordem</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">94</property>
    <property name="Width">266</property>
  </object>
  <object class="Label" name="Label10" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cliente&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">9</property>
    <property name="Name">Label10</property>
    <property name="ParentColor">0</property>
    <property name="Top">148</property>
    <property name="Width">468</property>
  </object>
  <object class="Label" name="Label11" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;UF&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">485</property>
    <property name="Name">Label11</property>
    <property name="ParentColor">0</property>
    <property name="Top">148</property>
    <property name="Width">18</property>
  </object>
  <object class="Label" name="Label12" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;DT.Ultima Venda&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">514</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">148</property>
    <property name="Width">98</property>
  </object>
  <object class="Label" name="Label13" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr.Ultima Venda&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">625</property>
    <property name="Name">Label13</property>
    <property name="ParentColor">0</property>
    <property name="Top">148</property>
    <property name="Width">98</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtd.Clientes:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">380</property>
    <property name="Name">Label5</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">116</property>
    <property name="Width">76</property>
  </object>
  <object class="Label" name="mgt_rel_qtde" >
    <property name="Caption">mgt_rel_qtde</property>
    <property name="Height">13</property>
    <property name="Left">459</property>
    <property name="Name">mgt_rel_qtde</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">116</property>
    <property name="Width">266</property>
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
