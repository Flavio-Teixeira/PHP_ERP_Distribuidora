<?php
<object class="comcotacoesimp" name="comcotacoesimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Cotacao]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">398</property>
  <property name="IsMaster">0</property>
  <property name="Name">comcotacoesimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">comcotacoesimpCreate</property>
  <property name="jsOnLoad">comcotacoesimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes_Produtos</property>
    <property name="Height">28</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">358</property>
    <property name="Width">720</property>
    <object class="Label" name="mgt_pedido_produto_codigo" >
      <property name="Caption">mgt_pedido_produto_codigo</property>
      <property name="DataField">mgt_cotacao_produto_codigo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">3</property>
      <property name="Name">mgt_pedido_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_referencia" >
      <property name="Caption">mgt_pedido_produto_referencia</property>
      <property name="DataField">mgt_cotacao_produto_referencia</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">84</property>
      <property name="Name">mgt_pedido_produto_referencia</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_descricao" >
      <property name="Caption">mgt_pedido_produto_descricao</property>
      <property name="DataField">mgt_cotacao_produto_descricao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">167</property>
      <property name="Name">mgt_pedido_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="Top">1</property>
      <property name="Width">550</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_unidade" >
      <property name="Caption">mgt_pedido_produto_unidade</property>
      <property name="DataField">mgt_cotacao_produto_unidade</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">326</property>
      <property name="Name">mgt_pedido_produto_unidade</property>
      <property name="ParentColor">0</property>
      <property name="Top">14</property>
      <property name="Width">58</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_ipi" >
      <property name="Caption">mgt_pedido_produto_ipi</property>
      <property name="DataField">mgt_cotacao_produto_ipi</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">385</property>
      <property name="Name">mgt_pedido_produto_ipi</property>
      <property name="ParentColor">0</property>
      <property name="Top">14</property>
      <property name="Width">58</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_valor_ipi" >
      <property name="Caption">mgt_pedido_produto_valor_ipi</property>
      <property name="DataField">mgt_cotacao_produto_valor_ipi</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">446</property>
      <property name="Name">mgt_pedido_produto_valor_ipi</property>
      <property name="ParentColor">0</property>
      <property name="Top">14</property>
      <property name="Width">68</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_quantidade" >
      <property name="Caption">mgt_pedido_produto_quantidade</property>
      <property name="DataField">mgt_cotacao_produto_quantidade</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">516</property>
      <property name="Name">mgt_pedido_produto_quantidade</property>
      <property name="ParentColor">0</property>
      <property name="Top">14</property>
      <property name="Width">58</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_valor_unitario" >
      <property name="Caption">mgt_pedido_produto_valor_unitario</property>
      <property name="DataField">mgt_cotacao_produto_valor_unitario</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">578</property>
      <property name="Name">mgt_pedido_produto_valor_unitario</property>
      <property name="ParentColor">0</property>
      <property name="Top">14</property>
      <property name="Width">68</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_valor_total" >
      <property name="Caption">mgt_pedido_produto_valor_total</property>
      <property name="DataField">mgt_cotacao_produto_valor_total</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">649</property>
      <property name="Name">mgt_pedido_produto_valor_total</property>
      <property name="ParentColor">0</property>
      <property name="Top">14</property>
      <property name="Width">68</property>
    </object>
    <object class="Label" name="mgt_pedido_produto_lote" >
      <property name="Caption">mgt_pedido_produto_lote</property>
      <property name="DataField">mgt_cotacao_produto_lote</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">233</property>
      <property name="Name">mgt_pedido_produto_lote</property>
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
    <property name="Caption"><![CDATA[Cotacao - Nro.:]]></property>
    <property name="Font">
        <property name="Align">taCenter</property>
        <property name="Size">15px</property>
    </property>
    <property name="Height">15</property>
    <property name="Left">58</property>
    <property name="Name">relatorio_titulo</property>
    <property name="ParentFont">0</property>
    <property name="Top">25</property>
    <property name="Width">667</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_numero" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_numero</property>
    <property name="DataField">mgt_cotacao_cliente_numero</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">86</property>
    <property name="Name">mgt_pedido_cliente_numero</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">77</property>
    <property name="Width">53</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Fornecedor:&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label2</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">77</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label28" >
    <property name="Alignment">agLeft</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Fornecedor Codigo&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">151</property>
    <property name="Name">Label28</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">58</property>
    <property name="Width">124</property>
  </object>
  <object class="Label" name="Label29" >
    <property name="Alignment">agLeft</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Fornecedor Nome&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">287</property>
    <property name="Name">Label29</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">58</property>
    <property name="Width">438</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_codigo" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_codigo</property>
    <property name="DataField">mgt_cotacao_cliente_codigo</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">151</property>
    <property name="Name">mgt_pedido_cliente_codigo</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">77</property>
    <property name="Width">124</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_nome" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_nome</property>
    <property name="DataField">mgt_cotacao_cliente_nome</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">287</property>
    <property name="Name">mgt_pedido_cliente_nome</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">77</property>
    <property name="Width">438</property>
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
  <object class="Label" name="Label31" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Desconto (%):&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">61</property>
    <property name="Name">Label31</property>
    <property name="Top">125</property>
    <property name="Width">85</property>
  </object>
  <object class="Label" name="Label32" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;DT.Inclusao:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">251</property>
    <property name="Name">Label32</property>
    <property name="Top">125</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="Label33" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Previsao Entrega:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">425</property>
    <property name="Name">Label33</property>
    <property name="Top">125</property>
    <property name="Width">103</property>
  </object>
  <object class="Label" name="Label34" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Funcionario:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">234</property>
    <property name="Name">Label34</property>
    <property name="Top">148</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label35" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Nro. Orcamento:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">11</property>
    <property name="Name">Label35</property>
    <property name="Top">173</property>
    <property name="Width">135</property>
  </object>
  <object class="Label" name="Label48" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vendedor:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">488</property>
    <property name="Name">Label48</property>
    <property name="Top">148</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label46" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Observacoes:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">449</property>
    <property name="Name">Label46</property>
    <property name="Top">173</property>
    <property name="Width">79</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_desconto" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_desconto</property>
    <property name="DataField">mgt_cotacao_cliente_desconto</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">149</property>
    <property name="Name">mgt_pedido_cliente_desconto</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">125</property>
    <property name="Width">93</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_tipo_faturamento" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_funcionario</property>
    <property name="DataField">mgt_cotacao_funcionario</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">317</property>
    <property name="Name">mgt_pedido_cliente_tipo_faturamento</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">148</property>
    <property name="Width">150</property>
  </object>
  <object class="Label" name="mgt_pedido_ordem_compra" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_ordem_compra</property>
    <property name="DataField">mgt_cotacao_orcamento</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">149</property>
    <property name="Name">mgt_pedido_ordem_compra</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">173</property>
    <property name="Width">278</property>
  </object>
  <object class="Label" name="mgt_pedido_data" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_data</property>
    <property name="DataField">mgt_cotacao_data</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">334</property>
    <property name="Name">mgt_pedido_data</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">125</property>
    <property name="Width">86</property>
  </object>
  <object class="Label" name="mgt_pedido_data_entrega" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_data_entrega</property>
    <property name="DataField">mgt_cotacao_data_entrega</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">533</property>
    <property name="Name">mgt_pedido_data_entrega</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">125</property>
    <property name="Width">192</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_transportadora" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_vendedor</property>
    <property name="DataField">mgt_cotacao_vendedor</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">575</property>
    <property name="Name">mgt_pedido_cliente_transportadora</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">148</property>
    <property name="Width">150</property>
  </object>
  <object class="Label" name="mgt_pedido_observacao" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_observacao</property>
    <property name="DataField">mgt_cotacao_observacao</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">39</property>
    <property name="Left">533</property>
    <property name="Name">mgt_pedido_observacao</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">173</property>
    <property name="Width">192</property>
  </object>
  <object class="Label" name="Label36" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Condicao de Pagamento:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">11</property>
    <property name="Name">Label36</property>
    <property name="Top">199</property>
    <property name="Width">144</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_condicao_pgto_1" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_condicao_pgto_1</property>
    <property name="DataField">mgt_cotacao_cliente_condicao_pgto_1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">165</property>
    <property name="Name">mgt_pedido_cliente_condicao_pgto_1</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">199</property>
    <property name="Width">23</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_condicao_pgto_12" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_condicao_pgto_12</property>
    <property name="DataField">mgt_cotacao_cliente_condicao_pgto_12</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">465</property>
    <property name="Name">mgt_pedido_cliente_condicao_pgto_12</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">199</property>
    <property name="Width">23</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_condicao_pgto_10" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_condicao_pgto_10</property>
    <property name="DataField">mgt_cotacao_cliente_condicao_pgto_10</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">408</property>
    <property name="Name">mgt_pedido_cliente_condicao_pgto_10</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">199</property>
    <property name="Width">23</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_condicao_pgto_9" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_condicao_pgto_9</property>
    <property name="DataField">mgt_cotacao_cliente_condicao_pgto_9</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">381</property>
    <property name="Name">mgt_pedido_cliente_condicao_pgto_9</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">199</property>
    <property name="Width">23</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_condicao_pgto_8" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_condicao_pgto_8</property>
    <property name="DataField">mgt_cotacao_cliente_condicao_pgto_8</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">355</property>
    <property name="Name">mgt_pedido_cliente_condicao_pgto_8</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">199</property>
    <property name="Width">23</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_condicao_pgto_7" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_condicao_pgto_7</property>
    <property name="DataField">mgt_cotacao_cliente_condicao_pgto_7</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">327</property>
    <property name="Name">mgt_pedido_cliente_condicao_pgto_7</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">199</property>
    <property name="Width">23</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_condicao_pgto_6" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_condicao_pgto_6</property>
    <property name="DataField">mgt_cotacao_cliente_condicao_pgto_6</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">302</property>
    <property name="Name">mgt_pedido_cliente_condicao_pgto_6</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">199</property>
    <property name="Width">23</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_condicao_pgto_5" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_condicao_pgto_5</property>
    <property name="DataField">mgt_cotacao_cliente_condicao_pgto_5</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">273</property>
    <property name="Name">mgt_pedido_cliente_condicao_pgto_5</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">199</property>
    <property name="Width">23</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_condicao_pgto_4" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_condicao_pgto_4</property>
    <property name="DataField">mgt_cotacao_cliente_condicao_pgto_4</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">246</property>
    <property name="Name">mgt_pedido_cliente_condicao_pgto_4</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">199</property>
    <property name="Width">23</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_condicao_pgto_3" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_condicao_pgto_3</property>
    <property name="DataField">mgt_cotacao_cliente_condicao_pgto_3</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">219</property>
    <property name="Name">mgt_pedido_cliente_condicao_pgto_3</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">199</property>
    <property name="Width">23</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_condicao_pgto_2" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_condicao_pgto_2</property>
    <property name="DataField">mgt_cotacao_cliente_condicao_pgto_2</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">193</property>
    <property name="Name">mgt_pedido_cliente_condicao_pgto_2</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">199</property>
    <property name="Width">23</property>
  </object>
  <object class="Label" name="mgt_pedido_cliente_condicao_pgto_11" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_cliente_condicao_pgto_11</property>
    <property name="DataField">mgt_cotacao_cliente_condicao_pgto_11</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">438</property>
    <property name="Name">mgt_pedido_cliente_condicao_pgto_11</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">199</property>
    <property name="Width">23</property>
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
    <property name="Top">226</property>
    <property name="Width">717</property>
  </object>
  <object class="Label" name="Label38" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. Cotacao (R$):&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">255</property>
    <property name="Name">Label38</property>
    <property name="ParentFont">0</property>
    <property name="Top">245</property>
    <property name="Width">118</property>
  </object>
  <object class="Label" name="Label39" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. Desconto (R$):&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">264</property>
    <property name="Name">Label39</property>
    <property name="ParentFont">0</property>
    <property name="Top">262</property>
    <property name="Width">109</property>
  </object>
  <object class="Label" name="Label40" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. Frete (R$):&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">287</property>
    <property name="Name">Label40</property>
    <property name="ParentFont">0</property>
    <property name="Top">277</property>
    <property name="Width">86</property>
  </object>
  <object class="Label" name="Label41" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. IPI (R$):&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">298</property>
    <property name="Name">Label41</property>
    <property name="ParentFont">0</property>
    <property name="Top">293</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label42" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. Total (R$):&lt;/STRONG&gt;]]></property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">287</property>
    <property name="Name">Label42</property>
    <property name="ParentFont">0</property>
    <property name="Top">309</property>
    <property name="Width">86</property>
  </object>
  <object class="Label" name="mgt_pedido_valor_pedido" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_pedido_valor_pedido</property>
    <property name="DataField">mgt_cotacao_valor_cotacao</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">378</property>
    <property name="Name">mgt_pedido_valor_pedido</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">245</property>
    <property name="Width">65</property>
  </object>
  <object class="Label" name="mgt_pedido_valor_desconto" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_pedido_valor_desconto</property>
    <property name="DataField">mgt_cotacao_valor_desconto</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">378</property>
    <property name="Name">mgt_pedido_valor_desconto</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">262</property>
    <property name="Width">65</property>
  </object>
  <object class="Label" name="mgt_pedido_valor_frete" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_pedido_valor_frete</property>
    <property name="DataField">mgt_cotacao_valor_frete</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">378</property>
    <property name="Name">mgt_pedido_valor_frete</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">277</property>
    <property name="Width">65</property>
  </object>
  <object class="Label" name="mgt_pedido_valor_ipi" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_pedido_valor_ipi</property>
    <property name="DataField">mgt_cotacao_valor_ipi</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">378</property>
    <property name="Name">mgt_pedido_valor_ipi</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">293</property>
    <property name="Width">65</property>
  </object>
  <object class="Label" name="mgt_pedido_valor_total" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_pedido_valor_total</property>
    <property name="DataField">mgt_cotacao_valor_total</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taRight</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">378</property>
    <property name="Name">mgt_pedido_valor_total</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">309</property>
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
    <property name="Top">330</property>
    <property name="Width">717</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Codigo &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">11</property>
    <property name="Name">Label1</property>
    <property name="Top">345</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Referencia &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">92</property>
    <property name="Name">Label5</property>
    <property name="Top">345</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label6" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Descricao &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">175</property>
    <property name="Name">Label6</property>
    <property name="Top">345</property>
    <property name="Width">59</property>
  </object>
  <object class="Label" name="Label7" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtde &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">524</property>
    <property name="Name">Label7</property>
    <property name="Top">345</property>
    <property name="Width">58</property>
  </object>
  <object class="Label" name="Label11" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr.Unitario&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">586</property>
    <property name="Name">Label11</property>
    <property name="Top">345</property>
    <property name="Width">68</property>
  </object>
  <object class="Label" name="Label43" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr.Total&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">657</property>
    <property name="Name">Label43</property>
    <property name="Top">345</property>
    <property name="Width">68</property>
  </object>
  <object class="Label" name="Label47" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Lote &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">241</property>
    <property name="Name">Label47</property>
    <property name="Top">345</property>
    <property name="Width">89</property>
  </object>
  <object class="Label" name="Label45" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Unidade &lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">334</property>
    <property name="Name">Label45</property>
    <property name="Top">345</property>
    <property name="Width">58</property>
  </object>
  <object class="Label" name="Label49" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;IPI (%)&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">393</property>
    <property name="Name">Label49</property>
    <property name="Top">345</property>
    <property name="Width">58</property>
  </object>
  <object class="Label" name="Label44" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr.IPI&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">454</property>
    <property name="Name">Label44</property>
    <property name="Top">345</property>
    <property name="Width">68</property>
  </object>
  <object class="Label" name="Label8" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Status:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Layer">Adicionais</property>
    <property name="Left">61</property>
    <property name="Name">Label8</property>
    <property name="Top">148</property>
    <property name="Width">45</property>
  </object>
  <object class="Label" name="mgt_pedido_status" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_pedido_status</property>
    <property name="DataField">mgt_cotacao_status</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cotacoes</property>
    <property name="Font">
        <property name="Align">taLeft</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">110</property>
    <property name="Name">mgt_pedido_status</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">148</property>
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
