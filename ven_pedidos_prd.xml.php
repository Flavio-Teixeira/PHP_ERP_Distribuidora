<?php
<object class="venpedidosprd" name="venpedidosprd" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">Pedido</property>
  <property name="DocType">dtNone</property>
  <property name="Height">233</property>
  <property name="IsMaster">0</property>
  <property name="Name">venpedidosprd</property>
  <property name="Width">755</property>
  <property name="OnCreate">venpedidosprdCreate</property>
  <property name="jsOnLoad">venpedidosprdJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos_Produtos</property>
    <property name="Height">32</property>
    <property name="Layout">
    <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">198</property>
    <property name="Width">720</property>
    <object class="Label" name="mgt_pedido_produto_codigo" >
      <property name="Caption">mgt_pedido_produto_codigo</property>
      <property name="DataField">mgt_pedido_produto_codigo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">3</property>
      <property name="Name">mgt_pedido_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_referencia" >
      <property name="Caption">mgt_pedido_produto_referencia</property>
      <property name="DataField">mgt_pedido_produto_referencia</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">84</property>
      <property name="Name">mgt_pedido_produto_referencia</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_descricao" >
      <property name="Caption">mgt_pedido_produto_descricao</property>
      <property name="DataField">mgt_pedido_produto_descricao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos_Produtos</property>
      <property name="Height">26</property>
      <property name="Left">167</property>
      <property name="Name">mgt_pedido_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">419</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_unidade" >
      <property name="Caption">mgt_pedido_produto_unidade</property>
      <property name="DataField">mgt_pedido_produto_unidade</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">592</property>
      <property name="Name">mgt_pedido_produto_unidade</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">58</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_quantidade" >
      <property name="Caption">mgt_pedido_produto_quantidade</property>
      <property name="DataField">mgt_pedido_produto_quantidade</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">658</property>
      <property name="Name">mgt_pedido_produto_quantidade</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">58</property>
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
    <property name="Caption"><![CDATA[Ordem de Producao - Nro.:]]></property>
    <property name="Font">
    <property name="Align">taCenter</property>
    <property name="Size">15px</property>
    </property>
    <property name="Height">15</property>
    <property name="Left">56</property>
    <property name="Name">relatorio_titulo</property>
    <property name="ParentFont">0</property>
    <property name="Top">21</property>
    <property name="Width">669</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_numero" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_numero</property>
    <property name="DataField">mgt_pedido_cliente_numero</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
    <property name="Font">
    <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">61</property>
    <property name="Name">mgt_pedido_cliente_numero</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">77</property>
    <property name="Width">53</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cliente:&lt;/STRONG&gt;]]></property>
    <property name="Font">
    <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label2</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">77</property>
    <property name="Width">46</property>
  </object>
  <object class="Label" name="Label28" >
    <property name="Alignment">agLeft</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cliente Codigo&lt;/STRONG&gt;]]></property>
    <property name="Font">
    <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">126</property>
    <property name="Name">Label28</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">56</property>
    <property name="Width">85</property>
  </object>
  <object class="Label" name="Label29" >
    <property name="Alignment">agLeft</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cliente Nome&lt;/STRONG&gt;]]></property>
    <property name="Font">
    <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">262</property>
    <property name="Name">Label29</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">56</property>
    <property name="Width">463</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_codigo" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_codigo</property>
    <property name="DataField">mgt_pedido_cliente_codigo</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
    <property name="Font">
    <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">126</property>
    <property name="Name">mgt_pedido_cliente_codigo</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">77</property>
    <property name="Width">124</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_nome" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_nome</property>
    <property name="DataField">mgt_pedido_cliente_nome</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
    <property name="Font">
    <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">262</property>
    <property name="Name">mgt_pedido_cliente_nome</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">77</property>
    <property name="Width">463</property>
  </object>
  <object class="Label" name="Label30" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;--- Adicionais: ------------------------------------------------------------------------------------------------------------------------------&lt;/STRONG&gt;]]></property>
    <property name="Font">
    <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label30</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">106</property>
    <property name="Width">717</property>
  </object>
  <object class="Label" name="Label32" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;DT.Inclusao:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">8</property>
    <property name="Name">Label32</property>
    <property name="Top">125</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="Label33" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Previsao Entrega:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">184</property>
    <property name="Name">Label33</property>
    <property name="Top">125</property>
    <property name="Width">103</property>
  </object>
  <object class="Label" name="Label46" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Observacoes:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">449</property>
    <property name="Name">Label46</property>
    <property name="Top">125</property>
    <property name="Width">79</property>
  </object>
  <object class="Label" name="mgt_pedido_data" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_data</property>
    <property name="DataField">mgt_pedido_data</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
    <property name="Font">
    <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">92</property>
    <property name="Name">mgt_pedido_data</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">125</property>
    <property name="Width">86</property>
  </object>
  <object class="Label" name="mgt_pedido_data_entrega" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_data_entrega</property>
    <property name="DataField">mgt_pedido_data_entrega</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
    <property name="Font">
    <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">292</property>
    <property name="Name">mgt_pedido_data_entrega</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">125</property>
    <property name="Width">149</property>
  </object>
  <object class="Label" name="mgt_pedido_observacao" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_observacao</property>
    <property name="DataField">mgt_pedido_observacao</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Pedidos</property>
    <property name="Font">
    <property name="Align">taLeft</property>
    </property>
    <property name="Height">39</property>
    <property name="Left">533</property>
    <property name="Name">mgt_pedido_observacao</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">125</property>
    <property name="Width">192</property>
  </object>
  <object class="Label" name="Label14" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;--- Produtos: ------------------------------------------------------------------------------------------------------------------------------&lt;/STRONG&gt;]]></property>
    <property name="Font">
    <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label14</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">170</property>
    <property name="Width">717</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Codigo &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">11</property>
    <property name="Name">Label1</property>
    <property name="Top">185</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Referencia &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">92</property>
    <property name="Name">Label5</property>
    <property name="Top">185</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label6" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Descricao &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">175</property>
    <property name="Name">Label6</property>
    <property name="Top">185</property>
    <property name="Width">59</property>
  </object>
  <object class="Label" name="Label7" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtde &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">666</property>
    <property name="Name">Label7</property>
    <property name="Top">185</property>
    <property name="Width">58</property>
  </object>
  <object class="Label" name="Label45" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Unidade &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">600</property>
    <property name="Name">Label45</property>
    <property name="Top">185</property>
    <property name="Width">58</property>
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
