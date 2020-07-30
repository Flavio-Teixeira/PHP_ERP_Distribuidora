<?php
<object class="venpedidosimp" name="venpedidosimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">Pedido</property>
  <property name="DocType">dtNone</property>
  <property name="Height">486</property>
  <property name="IsMaster">0</property>
  <property name="Name">venpedidosimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">venpedidosimpCreate</property>
  <property name="jsOnLoad">venpedidosimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas_Produtos</property>
    <property name="Height">28</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">453</property>
    <property name="Width">720</property>
    <object class="Label" name="mgt_programada_produto_codigo" >
      <property name="Caption">mgt_programada_produto_codigo</property>
      <property name="DataField">mgt_programada_produto_codigo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Programadas_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">3</property>
      <property name="Name">mgt_programada_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_programada_produto_referencia" >
      <property name="Caption">mgt_programada_produto_referencia</property>
      <property name="DataField">mgt_programada_produto_referencia</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Programadas_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">84</property>
      <property name="Name">mgt_programada_produto_referencia</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_programada_produto_descricao" >
      <property name="Caption">mgt_programada_produto_descricao</property>
      <property name="DataField">mgt_programada_produto_descricao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Programadas_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">167</property>
      <property name="Name">mgt_programada_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">550</property>
    </object>
    <object class="Label" name="mgt_programada_produto_unidade" >
      <property name="Caption">mgt_programada_produto_unidade</property>
      <property name="DataField">mgt_programada_produto_unidade</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Programadas_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">326</property>
      <property name="Name">mgt_programada_produto_unidade</property>
      <property name="ParentColor">0</property>
      <property name="Top">14</property>
      <property name="Width">58</property>
    </object>
    <object class="Label" name="mgt_programada_produto_quantidade" >
      <property name="Caption">mgt_programada_produto_quantidade</property>
      <property name="DataField">mgt_programada_produto_quantidade</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Programadas_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">516</property>
      <property name="Name">mgt_programada_produto_quantidade</property>
      <property name="ParentColor">0</property>
      <property name="Top">14</property>
      <property name="Width">58</property>
    </object>
    <object class="Label" name="mgt_programada_produto_valor_unitario" >
      <property name="Caption">mgt_programada_produto_valor_unitario</property>
      <property name="DataField">mgt_programada_produto_valor_unitario</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Programadas_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">578</property>
      <property name="Name">mgt_programada_produto_valor_unitario</property>
      <property name="ParentColor">0</property>
      <property name="Top">14</property>
      <property name="Width">68</property>
    </object>
    <object class="Label" name="mgt_programada_produto_valor_total" >
      <property name="Caption">mgt_programada_produto_valor_total</property>
      <property name="DataField">mgt_programada_produto_valor_total</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Programadas_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">649</property>
      <property name="Name">mgt_programada_produto_valor_total</property>
      <property name="ParentColor">0</property>
      <property name="Top">14</property>
      <property name="Width">68</property>
    </object>
    <object class="Label" name="mgt_programada_produto_lote" >
      <property name="Caption">mgt_programada_produto_lote</property>
      <property name="DataField">mgt_programada_produto_lote</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Programadas_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">233</property>
      <property name="Name">mgt_programada_produto_lote</property>
      <property name="ParentColor">0</property>
      <property name="Top">14</property>
      <property name="Width">89</property>
    </object>
  </object>
  <object class="Label" name="apelido_empresa" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Empresa&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">61</property>
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
    <property name="Caption">Venda Programada - Nro.:</property>
    <property name="Font">
        <property name="Align">taCenter</property>
        <property name="Size">15px</property>
    </property>
    <property name="Height">18</property>
    <property name="Left">61</property>
    <property name="Name">relatorio_titulo</property>
    <property name="ParentFont">0</property>
    <property name="Top">25</property>
    <property name="Width">664</property>
  </object>
  <object class="Label" name="mgt_programada_cliente_numero" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_programada_cliente_numero</property>
    <property name="DataField">mgt_programada_cliente_numero</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">61</property>
    <property name="Name">mgt_programada_cliente_numero</property>
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
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cliente Razao Social&lt;/STRONG&gt;]]></property>
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
  <object class="Label" name="mgt_programada_cliente_codigo" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_programada_cliente_codigo</property>
    <property name="DataField">mgt_programada_cliente_codigo</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">126</property>
    <property name="Name">mgt_programada_cliente_codigo</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">77</property>
    <property name="Width">124</property>
  </object>
  <object class="Label" name="mgt_programada_razao_social" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_programada_razao_social</property>
    <property name="DataField">mgt_programada_razao_social</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">262</property>
    <property name="Name">mgt_programada_razao_social</property>
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
    <property name="Top">138</property>
    <property name="Width">717</property>
  </object>
  <object class="Label" name="Label31" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Desconto (%):&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">11</property>
    <property name="Name">Label31</property>
    <property name="Top">157</property>
    <property name="Width">85</property>
  </object>
  <object class="Label" name="Label32" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;DT.Inclusao:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">146</property>
    <property name="Name">Label32</property>
    <property name="Top">157</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="Label33" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Previsao Entrega:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">322</property>
    <property name="Name">Label33</property>
    <property name="Top">157</property>
    <property name="Width">103</property>
  </object>
  <object class="Label" name="Label35" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Nro. Ordem de Compra:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">11</property>
    <property name="Name">Label35</property>
    <property name="Top">177</property>
    <property name="Width">135</property>
  </object>
  <object class="Label" name="Label46" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Observacoes:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">273</property>
    <property name="Name">Label46</property>
    <property name="Top">177</property>
    <property name="Width">79</property>
  </object>
  <object class="Label" name="mgt_programada_cliente_desconto" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_programada_cliente_desconto</property>
    <property name="DataField">mgt_programada_cliente_desconto</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">98</property>
    <property name="Name">mgt_programada_cliente_desconto</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">157</property>
    <property name="Width">41</property>
  </object>
  <object class="Label" name="mgt_programada_ordem_compra" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_programada_ordem_compra</property>
    <property name="DataField">mgt_programada_ordem_compra</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">149</property>
    <property name="Name">mgt_programada_ordem_compra</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">177</property>
    <property name="Width">110</property>
  </object>
  <object class="Label" name="mgt_programada_data" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_programada_data</property>
    <property name="DataField">mgt_programada_data</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">223</property>
    <property name="Name">mgt_programada_data</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">157</property>
    <property name="Width">86</property>
  </object>
  <object class="Label" name="mgt_programada_data_entrega" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_programada_data_entrega</property>
    <property name="DataField">mgt_programada_data_entrega</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">428</property>
    <property name="Name">mgt_programada_data_entrega</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">157</property>
    <property name="Width">86</property>
  </object>
  <object class="Label" name="mgt_programada_observacao_nota" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_programada_observacao_nota</property>
    <property name="DataField">mgt_programada_observacao_nota</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">357</property>
    <property name="Name">mgt_programada_observacao_nota</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">177</property>
    <property name="Width">368</property>
  </object>
  <object class="Label" name="Label36" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Condicao de Pagamento:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">302</property>
    <property name="Name">Label36</property>
    <property name="Top">231</property>
    <property name="Width">144</property>
  </object>
  <object class="Label" name="Label37" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;--- Totais: ----------------------------------------------------------------------------------------------------------------------------------&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label37</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">197</property>
    <property name="Width">717</property>
  </object>
  <object class="Label" name="Label38" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. Pedido (R$):&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">109</property>
    <property name="Name">Label38</property>
    <property name="ParentFont">0</property>
    <property name="Top">231</property>
    <property name="Width">95</property>
  </object>
  <object class="Label" name="Label40" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. Frete (R$):&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">118</property>
    <property name="Name">Label40</property>
    <property name="ParentFont">0</property>
    <property name="Top">247</property>
    <property name="Width">86</property>
  </object>
  <object class="Label" name="Label41" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. IPI (R$):&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">129</property>
    <property name="Name">Label41</property>
    <property name="ParentFont">0</property>
    <property name="Top">263</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label42" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. Total (R$):&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">118</property>
    <property name="Name">Label42</property>
    <property name="ParentFont">0</property>
    <property name="Top">279</property>
    <property name="Width">86</property>
  </object>
  <object class="Label" name="mgt_programada_valor_pedido" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_valor_pedido</property>
    <property name="DataField">mgt_programada_valor_pedido</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">209</property>
    <property name="Name">mgt_programada_valor_pedido</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">231</property>
    <property name="Width">65</property>
  </object>
  <object class="Label" name="mgt_programada_valor_frete" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_valor_frete</property>
    <property name="DataField">mgt_programada_valor_frete</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">209</property>
    <property name="Name">mgt_programada_valor_frete</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">247</property>
    <property name="Width">65</property>
  </object>
  <object class="Label" name="mgt_programada_valor_ipi" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_valor_ipi</property>
    <property name="DataField">mgt_programada_valor_ipi</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">209</property>
    <property name="Name">mgt_programada_valor_ipi</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">263</property>
    <property name="Width">65</property>
  </object>
  <object class="Label" name="mgt_programada_valor_total" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_valor_total</property>
    <property name="DataField">mgt_programada_valor_total</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">209</property>
    <property name="Name">mgt_programada_valor_total</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">279</property>
    <property name="Width">65</property>
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
    <property name="Top">425</property>
    <property name="Width">717</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Codigo &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">11</property>
    <property name="Name">Label1</property>
    <property name="Top">440</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Referencia &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">92</property>
    <property name="Name">Label5</property>
    <property name="Top">440</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label6" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Descricao &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">175</property>
    <property name="Name">Label6</property>
    <property name="Top">440</property>
    <property name="Width">59</property>
  </object>
  <object class="Label" name="Label7" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtde &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">524</property>
    <property name="Name">Label7</property>
    <property name="Top">440</property>
    <property name="Width">58</property>
  </object>
  <object class="Label" name="Label11" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr.Unitario&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">586</property>
    <property name="Name">Label11</property>
    <property name="Top">440</property>
    <property name="Width">68</property>
  </object>
  <object class="Label" name="Label43" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr.Total&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">657</property>
    <property name="Name">Label43</property>
    <property name="Top">440</property>
    <property name="Width">68</property>
  </object>
  <object class="Label" name="Label47" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Lote &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">241</property>
    <property name="Name">Label47</property>
    <property name="Top">440</property>
    <property name="Width">89</property>
  </object>
  <object class="Label" name="Label45" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Unidade &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">334</property>
    <property name="Name">Label45</property>
    <property name="Top">440</property>
    <property name="Width">58</property>
  </object>
  <object class="Label" name="Label8" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;DT.Emissao:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">538</property>
    <property name="Name">Label8</property>
    <property name="Top">157</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="mgt_programada_data_emissao" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_programada_data_emissao</property>
    <property name="DataField">mgt_programada_data_emissao</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">625</property>
    <property name="Name">mgt_programada_data_emissao</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">157</property>
    <property name="Width">86</property>
  </object>
  <object class="Label" name="mgt_programada_dup_nro_1" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_nro_1</property>
    <property name="DataField">mgt_programada_dup_nro_1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">mgt_programada_dup_nro_1</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">231</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_dt_vcto_1" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_dt_vcto_1</property>
    <property name="DataField">mgt_programada_dup_dt_vcto_1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">534</property>
    <property name="Name">mgt_programada_dup_dt_vcto_1</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">231</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_nro_2" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_nro_2</property>
    <property name="DataField">mgt_programada_dup_nro_2</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">mgt_programada_dup_nro_2</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">248</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_nro_3" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_nro_3</property>
    <property name="DataField">mgt_programada_dup_nro_3</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">mgt_programada_dup_nro_3</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">263</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_nro_4" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_nro_4</property>
    <property name="DataField">mgt_programada_dup_nro_4</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">mgt_programada_dup_nro_4</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">279</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_nro_5" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_nro_5</property>
    <property name="DataField">mgt_programada_dup_nro_5</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">mgt_programada_dup_nro_5</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">295</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_nro_6" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_nro_6</property>
    <property name="DataField">mgt_programada_dup_nro_6</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">mgt_programada_dup_nro_6</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">311</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_nro_7" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_nro_7</property>
    <property name="DataField">mgt_programada_dup_nro_7</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">mgt_programada_dup_nro_7</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">327</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_nro_8" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_nro_8</property>
    <property name="DataField">mgt_programada_dup_nro_8</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">mgt_programada_dup_nro_8</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">343</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_nro_9" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_nro_9</property>
    <property name="DataField">mgt_programada_dup_nro_9</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">mgt_programada_dup_nro_9</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">359</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_nro_10" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_nro_10</property>
    <property name="DataField">mgt_programada_dup_nro_10</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">mgt_programada_dup_nro_10</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">375</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_nro_11" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_nro_11</property>
    <property name="DataField">mgt_programada_dup_nro_11</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">mgt_programada_dup_nro_11</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">391</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_nro_12" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_nro_12</property>
    <property name="DataField">mgt_programada_dup_nro_12</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">mgt_programada_dup_nro_12</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">407</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_dt_vcto_2" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_dt_vcto_2</property>
    <property name="DataField">mgt_programada_dup_dt_vcto_2</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">534</property>
    <property name="Name">mgt_programada_dup_dt_vcto_2</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">248</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_dt_vcto_3" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_dt_vcto_3</property>
    <property name="DataField">mgt_programada_dup_dt_vcto_3</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">534</property>
    <property name="Name">mgt_programada_dup_dt_vcto_3</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">263</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_dt_vcto_4" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_dt_vcto_4</property>
    <property name="DataField">mgt_programada_dup_dt_vcto_4</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">534</property>
    <property name="Name">mgt_programada_dup_dt_vcto_4</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">279</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_dt_vcto_5" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_dt_vcto_5</property>
    <property name="DataField">mgt_programada_dup_dt_vcto_5</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">534</property>
    <property name="Name">mgt_programada_dup_dt_vcto_5</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">295</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_dt_vcto_6" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_dt_vcto_6</property>
    <property name="DataField">mgt_programada_dup_dt_vcto_6</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">534</property>
    <property name="Name">mgt_programada_dup_dt_vcto_6</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">311</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_dt_vcto_7" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_dt_vcto_7</property>
    <property name="DataField">mgt_programada_dup_dt_vcto_7</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">534</property>
    <property name="Name">mgt_programada_dup_dt_vcto_7</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">327</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_dt_vcto_8" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_dt_vcto_8</property>
    <property name="DataField">mgt_programada_dup_dt_vcto_8</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">534</property>
    <property name="Name">mgt_programada_dup_dt_vcto_8</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">343</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_dt_vcto_9" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_dt_vcto_9</property>
    <property name="DataField">mgt_programada_dup_dt_vcto_9</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">534</property>
    <property name="Name">mgt_programada_dup_dt_vcto_9</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">359</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_dt_vcto_10" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_dt_vcto_10</property>
    <property name="DataField">mgt_programada_dup_dt_vcto_10</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">534</property>
    <property name="Name">mgt_programada_dup_dt_vcto_10</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">375</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_dt_vcto_11" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_dt_vcto_11</property>
    <property name="DataField">mgt_programada_dup_dt_vcto_11</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">534</property>
    <property name="Name">mgt_programada_dup_dt_vcto_11</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">391</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_dt_vcto_12" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_dt_vcto_12</property>
    <property name="DataField">mgt_programada_dup_dt_vcto_12</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">534</property>
    <property name="Name">mgt_programada_dup_dt_vcto_12</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">407</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_vlr_1" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_vlr_1</property>
    <property name="DataField">mgt_programada_dup_vlr_1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">614</property>
    <property name="Name">mgt_programada_dup_vlr_1</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">231</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_vlr_2" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_vlr_2</property>
    <property name="DataField">mgt_programada_dup_vlr_2</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">614</property>
    <property name="Name">mgt_programada_dup_vlr_2</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">248</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_vlr_3" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_vlr_3</property>
    <property name="DataField">mgt_programada_dup_vlr_3</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">614</property>
    <property name="Name">mgt_programada_dup_vlr_3</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">263</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_vlr_4" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_vlr_4</property>
    <property name="DataField">mgt_programada_dup_vlr_4</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">614</property>
    <property name="Name">mgt_programada_dup_vlr_4</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">279</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_vlr_5" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_vlr_5</property>
    <property name="DataField">mgt_programada_dup_vlr_5</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">614</property>
    <property name="Name">mgt_programada_dup_vlr_5</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">295</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_vlr_6" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_vlr_6</property>
    <property name="DataField">mgt_programada_dup_vlr_6</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">614</property>
    <property name="Name">mgt_programada_dup_vlr_6</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">311</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_vlr_7" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_vlr_7</property>
    <property name="DataField">mgt_programada_dup_vlr_7</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">614</property>
    <property name="Name">mgt_programada_dup_vlr_7</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">327</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_vlr_8" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_vlr_8</property>
    <property name="DataField">mgt_programada_dup_vlr_8</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">614</property>
    <property name="Name">mgt_programada_dup_vlr_8</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">343</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_vlr_9" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_vlr_9</property>
    <property name="DataField">mgt_programada_dup_vlr_9</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">614</property>
    <property name="Name">mgt_programada_dup_vlr_9</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">359</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_vlr_10" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_vlr_10</property>
    <property name="DataField">mgt_programada_dup_vlr_10</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">614</property>
    <property name="Name">mgt_programada_dup_vlr_10</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">375</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_vlr_11" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_vlr_11</property>
    <property name="DataField">mgt_programada_dup_vlr_11</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">614</property>
    <property name="Name">mgt_programada_dup_vlr_11</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">391</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_programada_dup_vlr_12" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_programada_dup_vlr_12</property>
    <property name="DataField">mgt_programada_dup_vlr_12</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">614</property>
    <property name="Name">mgt_programada_dup_vlr_12</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">407</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="Label9" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Nro.&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">449</property>
    <property name="Name">Label9</property>
    <property name="Top">215</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="Label10" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vencto&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">534</property>
    <property name="Name">Label10</property>
    <property name="Top">215</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="Label12" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor (R$)&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">614</property>
    <property name="Name">Label12</property>
    <property name="Top">215</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="mgt_cliente_endereco_entrega" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_endereco_entrega</property>
    <property name="DataField">mgt_cliente_endereco_entrega</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">262</property>
    <property name="Name">mgt_cliente_endereco_entrega</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">96</property>
    <property name="Width">319</property>
  </object>
  <object class="Label" name="mgt_cliente_complemento_entrega" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_complemento_entrega</property>
    <property name="DataField">mgt_cliente_complemento_entrega</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">586</property>
    <property name="Name">mgt_cliente_complemento_entrega</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">96</property>
    <property name="Width">139</property>
  </object>
  <object class="Label" name="mgt_cliente_bairro_entrega" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_bairro_entrega</property>
    <property name="DataField">mgt_cliente_bairro_entrega</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">262</property>
    <property name="Name">mgt_cliente_bairro_entrega</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">111</property>
    <property name="Width">220</property>
  </object>
  <object class="Label" name="mgt_cliente_cidade_entrega" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_cidade_entrega</property>
    <property name="DataField">mgt_cliente_cidade_entrega</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">491</property>
    <property name="Name">mgt_cliente_cidade_entrega</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">111</property>
    <property name="Width">190</property>
  </object>
  <object class="Label" name="mgt_cliente_estado_entrega" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_estado_entrega</property>
    <property name="DataField">mgt_cliente_estado_entrega</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">694</property>
    <property name="Name">mgt_cliente_estado_entrega</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">111</property>
    <property name="Width">31</property>
  </object>
  <object class="Label" name="mgt_cliente_cep_entrega" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_cep_entrega</property>
    <property name="DataField">mgt_cliente_cep_entrega</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">262</property>
    <property name="Name">mgt_cliente_cep_entrega</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">125</property>
    <property name="Width">220</property>
  </object>
  <object class="Label" name="mgt_cliente_fone_entrega" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_fone_entrega</property>
    <property name="DataField">mgt_cliente_fone_entrega</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">491</property>
    <property name="Name">mgt_cliente_fone_entrega</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">125</property>
    <property name="Width">234</property>
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
