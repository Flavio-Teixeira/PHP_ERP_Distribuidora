<?php
<object class="conexaoprincipal" name="conexaoprincipal" baseclass="DataModule">
  <property name="Height">693</property>
  <property name="Name">conexaoprincipal</property>
  <property name="Width">814</property>
  <object class="Query" name="SQL_MGT_Usuarios" >
        <property name="Left">135</property>
        <property name="Top">75</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Usuarios</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:26:&quot;select * from mgt_usuarios&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Usuarios" >
        <property name="Left">137</property>
        <property name="Top">130</property>
    <property name="DataSet">SQL_MGT_Usuarios</property>
    <property name="Name">DS_MGT_Usuarios</property>
  </object>
  <object class="Query" name="SQL_MGT_Bancos" >
        <property name="Left">172</property>
        <property name="Top">75</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Bancos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:24:&quot;select * from mgt_bancos&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Bancos" >
        <property name="Left">173</property>
        <property name="Top">130</property>
    <property name="DataSet">SQL_MGT_Bancos</property>
    <property name="Name">DS_MGT_Bancos</property>
  </object>
  <object class="Query" name="SQL_Comunitario" >
        <property name="Left">51</property>
        <property name="Top">75</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="LimitStart">-1</property>
    <property name="Name">SQL_Comunitario</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:24:&quot;select * from mgt_bancos&quot;;}]]></property>
  </object>
  <object class="Query" name="SQL_MGT_Representantes" >
        <property name="Left">210</property>
        <property name="Top">75</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Representantes</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:32:&quot;select * from mgt_representantes&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Representantes" >
        <property name="Left">211</property>
        <property name="Top">130</property>
    <property name="DataSet">SQL_MGT_Representantes</property>
    <property name="Name">DS_MGT_Representantes</property>
  </object>
  <object class="Query" name="SQL_MGT_Tipos" >
        <property name="Left">247</property>
        <property name="Top">76</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Tipos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:32:&quot;select * from mgt_tipos_produtos&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Tipos" >
        <property name="Left">247</property>
        <property name="Top">130</property>
    <property name="DataSet">SQL_MGT_Tipos</property>
    <property name="Name">DS_MGT_Tipos</property>
  </object>
  <object class="Query" name="SQL_MGT_Familias" >
        <property name="Left">286</property>
        <property name="Top">76</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Familias</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:35:&quot;select * from mgt_familias_produtos&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Familias" >
        <property name="Left">284</property>
        <property name="Top">131</property>
    <property name="DataSet">SQL_MGT_Familias</property>
    <property name="Name">DS_MGT_Familias</property>
  </object>
  <object class="Database" name="Banco_Dados" >
        <property name="Left">53</property>
        <property name="Top">16</property>
    <property name="Connected"></property>
    <property name="DatabaseName">mgt_managertex</property>
    <property name="DriverName">mysql</property>
    <property name="Host">localhost</property>
    <property name="Name">Banco_Dados</property>
    <property name="UserName">root</property>
    <property name="UserPassword">liberar7777</property>
  </object>
  <object class="Query" name="SQL_MGT_Transportadoras" >
        <property name="Left">323</property>
        <property name="Top">78</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Transportadoras</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:33:&quot;select * from mgt_transportadoras&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Transportadoras" >
        <property name="Left">323</property>
        <property name="Top">131</property>
    <property name="DataSet">SQL_MGT_Transportadoras</property>
    <property name="Name">DS_MGT_Transportadoras</property>
  </object>
  <object class="Query" name="SQL_MGT_Empresas" >
        <property name="Left">363</property>
        <property name="Top">78</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Empresas</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:26:&quot;select * from mgt_empresas&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Empresas" >
        <property name="Left">363</property>
        <property name="Top">131</property>
    <property name="DataSet">SQL_MGT_Empresas</property>
    <property name="Name">DS_MGT_Empresas</property>
  </object>
  <object class="Query" name="SQL_MGT_Fornecedores" >
        <property name="Left">403</property>
        <property name="Top">78</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Fornecedores</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:30:&quot;select * from mgt_fornecedores&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Fornecedores" >
        <property name="Left">403</property>
        <property name="Top">131</property>
    <property name="DataSet">SQL_MGT_Fornecedores</property>
    <property name="Name">DS_MGT_Fornecedores</property>
  </object>
  <object class="Query" name="SQL_MGT_Impostos" >
        <property name="Left">443</property>
        <property name="Top">78</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Impostos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:32:&quot;select * from mgt_impostos_taxas&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Impostos" >
        <property name="Left">443</property>
        <property name="Top">131</property>
    <property name="DataSet">SQL_MGT_Impostos</property>
    <property name="Name">DS_MGT_Impostos</property>
  </object>
  <object class="Query" name="SQL_MGT_Clientes" >
        <property name="Left">483</property>
        <property name="Top">78</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Clientes</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:116:&quot;select *,date_format(mgt_cliente_data_ultima_compra, '%d/%m/%Y') AS mgt_cliente_data_ultima_compra from mgt_clientes&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Clientes" >
        <property name="Left">483</property>
        <property name="Top">131</property>
    <property name="DataSet">SQL_MGT_Clientes</property>
    <property name="Name">DS_MGT_Clientes</property>
  </object>
  <object class="Query" name="SQL_MGT_Produtos" >
        <property name="Left">523</property>
        <property name="Top">78</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Produtos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:26:&quot;select * from mgt_produtos&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Produtos" >
        <property name="Left">523</property>
        <property name="Top">131</property>
    <property name="DataSet">SQL_MGT_Produtos</property>
    <property name="Name">DS_MGT_Produtos</property>
  </object>
  <object class="Query" name="SQL_MGT_Pedidos" >
        <property name="Left">563</property>
        <property name="Top">78</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Pedidos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:538:&quot;select *,date_format(mgt_pedido_data, '%d/%m/%Y') AS mgt_pedido_data,date_format(mgt_pedido_data_entrega, '%d/%m/%Y') AS mgt_pedido_data_entrega, IF(mgt_pedido_status = 'Preparando','#','') AS mgt_pedido_status_1, IF(mgt_pedido_status = 'Faturado','#','') AS mgt_pedido_status_2, IF(mgt_pedido_status = 'Semi-Faturado','#','') AS mgt_pedido_status_3, IF(mgt_pedido_status = 'Aguardando','#','') AS mgt_pedido_status_4, IF(mgt_pedido_status = 'Producao','#','') AS mgt_pedido_status_5 from mgt_pedidos where mgt_pedido_status &lt;&gt; 'Faturado'&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Pedidos" >
        <property name="Left">563</property>
        <property name="Top">131</property>
    <property name="DataSet">SQL_MGT_Pedidos</property>
    <property name="Name">DS_MGT_Pedidos</property>
  </object>
  <object class="Query" name="SQL_MGT_Pedidos_Produtos" >
        <property name="Left">603</property>
        <property name="Top">78</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Pedidos_Produtos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:34:&quot;select * from mgt_pedidos_produtos&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Pedidos_Produtos" >
        <property name="Left">603</property>
        <property name="Top">131</property>
    <property name="DataSet">SQL_MGT_Pedidos_Produtos</property>
    <property name="Name">DS_MGT_Pedidos_Produtos</property>
  </object>
  <object class="Query" name="SQL_MGT_Orcamentos" >
        <property name="Left">643</property>
        <property name="Top">78</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Orcamentos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:468:&quot;select *,date_format(mgt_orcamento_data, '%d/%m/%Y') AS mgt_orcamento_data,date_format(mgt_orcamento_data_entrega, '%d/%m/%Y') AS mgt_orcamento_data_entrega, IF(mgt_orcamento_status = 'Preparando','#','') AS mgt_orcamento_status_1, IF(mgt_orcamento_status = 'Orcado','#','') AS mgt_orcamento_status_2, IF(mgt_orcamento_status = 'Aprovado','#','') AS mgt_orcamento_status_3 from mgt_orcamentos where mgt_orcamento_status &lt;&gt; 'Faturado' Order By mgt_orcamento_numero Desc&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Orcamentos" >
        <property name="Left">643</property>
        <property name="Top">131</property>
    <property name="DataSet">SQL_MGT_Orcamentos</property>
    <property name="Name">DS_MGT_Orcamentos</property>
  </object>
  <object class="Datasource" name="DS_MGT_Orcamentos_Produtos" >
        <property name="Left">683</property>
        <property name="Top">131</property>
    <property name="DataSet">SQL_MGT_Orcamentos_Produtos</property>
    <property name="Name">DS_MGT_Orcamentos_Produtos</property>
  </object>
  <object class="Query" name="SQL_MGT_Orcamentos_Produtos" >
        <property name="Left">683</property>
        <property name="Top">78</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Orcamentos_Produtos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:37:&quot;select * from mgt_orcamentos_produtos&quot;;}]]></property>
  </object>
  <object class="Query" name="SQL_MGT_Faturamentos" >
        <property name="Left">131</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Faturamentos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:461:&quot;select *,date_format(mgt_faturamento_data, '%d/%m/%Y') AS mgt_faturamento_data,date_format(mgt_faturamento_data_entrega, '%d/%m/%Y') AS mgt_faturamento_data_entrega, IF(mgt_faturamento_status = 'Preparando','#','') AS mgt_faturamento_status_1, IF(mgt_faturamento_status = 'Faturado','#','') AS mgt_faturamento_status_2, IF(mgt_faturamento_status = 'Aguardando','#','') AS mgt_faturamento_status_3 from mgt_faturamentos where mgt_faturamento_status &lt;&gt; 'Faturado'&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Faturamentos" >
        <property name="Left">131</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_Faturamentos</property>
    <property name="Name">DS_MGT_Faturamentos</property>
  </object>
  <object class="Datasource" name="DS_MGT_Faturamentos_Produtos" >
        <property name="Left">171</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_Faturamentos_Produtos</property>
    <property name="Name">DS_MGT_Faturamentos_Produtos</property>
  </object>
  <object class="Query" name="SQL_MGT_Faturamentos_Produtos" >
        <property name="Left">171</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Faturamentos_Produtos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:39:&quot;select * from mgt_faturamentos_produtos&quot;;}]]></property>
  </object>
  <object class="Query" name="SQL_MGT_Numero_Nota" >
        <property name="Left">211</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Numero_Nota</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:38:&quot;select * from mgt_numero_nota_anterior&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Numero_Nota" >
        <property name="Left">211</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_Numero_Nota</property>
    <property name="Name">DS_MGT_Numero_Nota</property>
  </object>
  <object class="Query" name="SQL_MGT_Programadas" >
        <property name="Left">251</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Programadas</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:29:&quot;select * from mgt_programadas&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Programadas" >
        <property name="Left">251</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_Programadas</property>
    <property name="Name">DS_MGT_Programadas</property>
  </object>
  <object class="Query" name="SQL_MGT_Programadas_Produtos" >
        <property name="Left">291</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Programadas_Produtos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:38:&quot;select * from mgt_programadas_produtos&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Programadas_Produtos" >
        <property name="Left">291</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_Programadas_Produtos</property>
    <property name="Name">DS_MGT_Programadas_Produtos</property>
  </object>
  <object class="Query" name="SQL_MGT_Notas_Fiscais" >
        <property name="Left">331</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Notas_Fiscais</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:31:&quot;select * from mgt_notas_fiscais&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Notas_Fiscais" >
        <property name="Left">331</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_Notas_Fiscais</property>
    <property name="Name">DS_MGT_Notas_Fiscais</property>
  </object>
  <object class="Datasource" name="DS_MGT_Notas_Fiscais_Produtos" >
        <property name="Left">371</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_Notas_Fiscais_Produtos</property>
    <property name="Name">DS_MGT_Notas_Fiscais_Produtos</property>
  </object>
  <object class="Query" name="SQL_MGT_Notas_Fiscais_Produtos" >
        <property name="Left">371</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Notas_Fiscais_Produtos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:40:&quot;select * from mgt_notas_fiscais_produtos&quot;;}]]></property>
  </object>
  <object class="Query" name="SQL_MGT_CFOP" >
        <property name="Left">411</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_CFOP</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:23:&quot;select * from mgt_cfops&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_CFOP" >
        <property name="Left">411</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_CFOP</property>
    <property name="Name">DS_MGT_CFOP</property>
  </object>
  <object class="Query" name="SQL_MGT_IVA" >
        <property name="Left">451</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_IVA</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:74:&quot;select * from mgt_ivas order by mgt_iva_estado, mgt_iva_ncm, mgt_iva_valor&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_IVA" >
        <property name="Left">451</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_IVA</property>
    <property name="Name">DS_MGT_IVA</property>
  </object>
  <object class="Query" name="SQL_MGT_Cobrancas" >
        <property name="Left">491</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Cobrancas</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:32:&quot;select * from mgt_swap_cobrancas&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Cobrancas" >
        <property name="Left">491</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_Cobrancas</property>
    <property name="Name">DS_MGT_Cobrancas</property>
  </object>
  <object class="Query" name="SQL_MGT_CF_Letra" >
        <property name="Left">531</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_CF_Letra</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:93:&quot;select * from mgt_classificacoes_fiscais_letras order by mgt_classificacao_fiscal_letra_letra&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_CF_Letra" >
        <property name="Left">531</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_CF_Letra</property>
    <property name="Name">DS_MGT_CF_Letra</property>
  </object>
  <object class="Query" name="SQL_MGT_NCM" >
        <property name="Left">571</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_NCM</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:93:&quot;select * from mgt_classificacoes_fiscais_numeros order by mgt_classificacao_fiscal_numero_ncm&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_NCM" >
        <property name="Left">571</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_NCM</property>
    <property name="Name">DS_MGT_NCM</property>
  </object>
  <object class="Query" name="SQL_Relatorio" >
        <property name="Left">611</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_Relatorio</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL">a:0:{}</property>
  </object>
  <object class="Datasource" name="DS_Relatorio" >
        <property name="Left">611</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_Relatorio</property>
    <property name="Name">DS_Relatorio</property>
  </object>
  <object class="Query" name="SQL_MGT_Contas" >
        <property name="Left">651</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Contas</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:34:&quot;select * from mgt_contas_bancarias&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Contas" >
        <property name="Left">651</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_Contas</property>
    <property name="Name">DS_MGT_Contas</property>
  </object>
  <object class="Query" name="SQL_MGT_Saldos" >
        <property name="Left">695</property>
        <property name="Top">190</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Saldos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:180:&quot;select *,date_format(mgt_saldo_data, '%d/%m/%Y') AS mgt_saldo_data from mgt_saldos, mgt_contas_bancarias where mgt_saldo_conta = mgt_conta_bancaria_nro Order By mgt_saldo_data Desc&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Saldos" >
        <property name="Left">695</property>
        <property name="Top">243</property>
    <property name="DataSet">SQL_MGT_Saldos</property>
    <property name="Name">DS_MGT_Saldos</property>
  </object>
  <object class="Query" name="SQL_MGT_Fixos" >
        <property name="Left">127</property>
        <property name="Top">302</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Fixos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:101:&quot;select *,date_format(mgt_titulo_fixo_data, '%d/%m/%Y') AS mgt_titulo_fixo_data from mgt_titulos_fixos&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Fixos" >
        <property name="Left">127</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Fixos</property>
    <property name="Name">DS_MGT_Fixos</property>
  </object>
  <object class="Query" name="SQL_MGT_Contas_Pagar" >
        <property name="Left">167</property>
        <property name="Top">302</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Contas_Pagar</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:653:&quot;select *,date_format(mgt_conta_pagar_data, '%d/%m/%Y') AS mgt_conta_pagar_data, date_format(mgt_conta_pagar_data_pagto, '%d/%m/%Y') AS mgt_conta_pagar_data_pagto, date_format(mgt_conta_pagar_data_emissao, '%d/%m/%Y') AS mgt_conta_pagar_data_emissao, IF(mgt_conta_pagar_status = 'Em Aberto','#','') AS mgt_conta_pagar_status_1, IF(mgt_conta_pagar_status = 'Pago','#','') AS mgt_conta_pagar_status_2, IF(mgt_conta_pagar_status = 'Pago Parcial','#','') AS mgt_conta_pagar_status_3, IF(mgt_conta_pagar_status = 'Cancelado','#','') AS mgt_conta_pagar_status_4, IF(mgt_conta_pagar_status = 'Devolucao','#','') AS mgt_conta_pagar_status_5 from mgt_contas_pagar&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Contas_Pagar" >
        <property name="Left">167</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Contas_Pagar</property>
    <property name="Name">DS_MGT_Contas_Pagar</property>
  </object>
  <object class="Query" name="SQL_MGT_Classificacoes_Fiscais_Letras" >
        <property name="Left">208</property>
        <property name="Top">303</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Classificacoes_Fiscais_Letras</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:47:&quot;select * from mgt_classificacoes_fiscais_letras&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Classificacoes_Fiscais_Letras" >
        <property name="Left">210</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Classificacoes_Fiscais_Letras</property>
    <property name="Name">DS_MGT_Classificacoes_Fiscais_Letras</property>
  </object>
  <object class="Datasource" name="DS_MGT_Classificacoes_Fiscais_Numeros" >
        <property name="Left">250</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Classificacoes_Fiscais_Numeros</property>
    <property name="Name">DS_MGT_Classificacoes_Fiscais_Numeros</property>
  </object>
  <object class="Query" name="SQL_MGT_Classificacoes_Fiscais_Numeros" >
        <property name="Left">248</property>
        <property name="Top">303</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Classificacoes_Fiscais_Numeros</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:93:&quot;select * from mgt_classificacoes_fiscais_numeros order by mgt_classificacao_fiscal_numero_ncm&quot;;}]]></property>
  </object>
  <object class="Query" name="SQL_MGT_Conhecimentos" >
        <property name="Left">288</property>
        <property name="Top">303</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Conhecimentos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:69:&quot;select * from mgt_conhecimentos order by mgt_conhecimento_numero Desc&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Conhecimentos" >
        <property name="Left">290</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Conhecimentos</property>
    <property name="Name">DS_MGT_Conhecimentos</property>
  </object>
  <object class="Query" name="SQL_MGT_Comparativo" >
        <property name="Left">328</property>
        <property name="Top">303</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Comparativo</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:75:&quot;select * from mgt_swap_comparativo order by mgt_swap_comparativo_numero Asc&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Comparativo" >
        <property name="Left">330</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Comparativo</property>
    <property name="Name">DS_MGT_Comparativo</property>
  </object>
  <object class="Query" name="SQL_MGT_Movto_Estoque" >
        <property name="Left">368</property>
        <property name="Top">303</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Movto_Estoque</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:69:&quot;select * from mgt_movto_estoque order by mgt_movto_estoque_numero Asc&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Movto_Estoque" >
        <property name="Left">370</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Movto_Estoque</property>
    <property name="Name">DS_MGT_Movto_Estoque</property>
  </object>
  <object class="Query" name="SQL_MGT_Comissoes" >
        <property name="Left">408</property>
        <property name="Top">303</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Comissoes</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:70:&quot;select * from mgt_swap_comissoes order by mgt_swap_comissao_numero Asc&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Comissoes" >
        <property name="Left">410</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Comissoes</property>
    <property name="Name">DS_MGT_Comissoes</property>
  </object>
  <object class="Query" name="SQL_MGT_Cotacoes" >
        <property name="Left">448</property>
        <property name="Top">303</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Cotacoes</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:139:&quot;Select *,date_format(mgt_cotacao_data, '%d/%m/%Y') AS mgt_cotacao_data from mgt_cotacoes Order By mgt_cotacao_data Desc, mgt_cotacao_numero&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Cotacoes" >
        <property name="Left">450</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Cotacoes</property>
    <property name="Name">DS_MGT_Cotacoes</property>
  </object>
  <object class="Query" name="SQL_MGT_Cotacoes_Produtos" >
        <property name="Left">488</property>
        <property name="Top">303</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Cotacoes_Produtos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:35:&quot;select * from mgt_cotacoes_produtos&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Cotacoes_Produtos" >
        <property name="Left">490</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Cotacoes_Produtos</property>
    <property name="Name">DS_MGT_Cotacoes_Produtos</property>
  </object>
  <object class="Query" name="SQL_MGT_Ordens" >
        <property name="Left">528</property>
        <property name="Top">303</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Ordens</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:552:&quot;select *,date_format(mgt_ordem_data, '%d/%m/%Y') AS mgt_ordem_data,date_format(mgt_ordem_data_entrega, '%d/%m/%Y') AS mgt_ordem_data_entrega, IF(mgt_ordem_status = 'Preparando','#','') AS mgt_ordem_status_1, IF(mgt_ordem_status = 'Entregue','#','') AS mgt_ordem_status_2, IF(mgt_ordem_status = 'Entregue-Parcial','#','') AS mgt_ordem_status_3, IF(mgt_ordem_status = 'Aguardando','#','') AS mgt_ordem_status_4, IF(mgt_ordem_status = 'Producao','#','') AS mgt_ordem_status_5 from mgt_ordens where mgt_ordem_status &lt;&gt; 'Entregue' order by mgt_ordem_numero&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Ordens" >
        <property name="Left">530</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Ordens</property>
    <property name="Name">DS_MGT_Ordens</property>
  </object>
  <object class="Query" name="SQL_MGT_Ordens_Produtos" >
        <property name="Left">568</property>
        <property name="Top">303</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Ordens_Produtos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:33:&quot;select * from mgt_ordens_produtos&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Ordens_Produtos" >
        <property name="Left">570</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Ordens_Produtos</property>
    <property name="Name">DS_MGT_Ordens_Produtos</property>
  </object>
  <object class="Query" name="SQL_MGT_Notas_Entradas" >
        <property name="Left">611</property>
        <property name="Top">302</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Notas_Entradas</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:32:&quot;select * from mgt_notas_entradas&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Notas_Entradas" >
        <property name="Left">611</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Notas_Entradas</property>
    <property name="Name">DS_MGT_Notas_Entradas</property>
  </object>
  <object class="Datasource" name="DS_MGT_Notas_Entradas_Produtos" >
        <property name="Left">651</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Notas_Entradas_Produtos</property>
    <property name="Name">DS_MGT_Notas_Entradas_Produtos</property>
  </object>
  <object class="Query" name="SQL_MGT_Notas_Entradas_Produtos" >
        <property name="Left">651</property>
        <property name="Top">302</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Notas_Entradas_Produtos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:41:&quot;select * from mgt_notas_entradas_produtos&quot;;}]]></property>
  </object>
  <object class="Query" name="SQL_MGT_Requisicoes" >
        <property name="Left">695</property>
        <property name="Top">302</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Requisicoes</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:154:&quot;Select *,date_format(mgt_requisicao_data, '%d/%m/%Y') AS mgt_requisicao_data from mgt_requisicoes Order By mgt_requisicao_data Desc, mgt_requisicao_numero&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Requisicoes" >
        <property name="Left">695</property>
        <property name="Top">355</property>
    <property name="DataSet">SQL_MGT_Requisicoes</property>
    <property name="Name">DS_MGT_Requisicoes</property>
  </object>
  <object class="Query" name="SQL_MGT_Requisicoes_Produtos" >
        <property name="Left">127</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Requisicoes_Produtos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:38:&quot;select * from mgt_requisicoes_produtos&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Requisicoes_Produtos" >
        <property name="Left">127</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Requisicoes_Produtos</property>
    <property name="Name">DS_MGT_Requisicoes_Produtos</property>
  </object>
  <object class="Query" name="SQL_MGT_CFOP_Faturamento" >
        <property name="Left">171</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_CFOP_Faturamento</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:35:&quot;select * from mgt_cfops_faturamento&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_CFOP_Faturamento" >
        <property name="Left">171</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_CFOP_Faturamento</property>
    <property name="Name">DS_MGT_CFOP_Faturamento</property>
  </object>
  <object class="Query" name="SQL_MGT_Permissoes" >
        <property name="Left">211</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Permissoes</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:28:&quot;select * from mgt_permissoes&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Permissoes" >
        <property name="Left">211</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Permissoes</property>
    <property name="Name">DS_MGT_Permissoes</property>
  </object>
  <object class="Query" name="SQL_MGT_Sequencia_Remessa" >
        <property name="Left">251</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Sequencia_Remessa</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:35:&quot;select * from mgt_sequencia_remessa&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Sequencia_Remessa" >
        <property name="Left">251</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Sequencia_Remessa</property>
    <property name="Name">DS_MGT_Sequencia_Remessa</property>
  </object>
  <object class="Query" name="SQL_MGT_Opcoes_Menu" >
        <property name="Left">291</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Opcoes_Menu</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:3:{i:0;s:215:&quot;select *, IF(mgt_permissao_opcao = '0','Nao Permitido',IF(mgt_permissao_opcao = '1','Permitido',IF(mgt_permissao_opcao = '2','Leitura','Nao Permitido'))) AS mgt_opcao_menu_opcao from mgt_opcoes_menu, mgt_permissoes &quot;;i:1;s:77:&quot;where mgt_opcao_menu_tag = mgt_permissao_tag And mgt_permissao_usuario = '0' &quot;;i:2;s:27:&quot;order by mgt_opcao_menu_nro&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Opcoes_Menu" >
        <property name="Left">291</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Opcoes_Menu</property>
    <property name="Name">DS_MGT_Opcoes_Menu</property>
  </object>
  <object class="Query" name="SQL_MGT_Servicos" >
        <property name="Left">331</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Servicos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:26:&quot;select * from mgt_servicos&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Servicos" >
        <property name="Left">331</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Servicos</property>
    <property name="Name">DS_MGT_Servicos</property>
  </object>
  <object class="Query" name="SQL_MGT_Faturamentos_Srv" >
        <property name="Left">371</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Faturamentos_Srv</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:545:&quot;select *,date_format(mgt_faturamento_srv_data, '%d/%m/%Y') AS mgt_faturamento_srv_data,date_format(mgt_faturamento_srv_data_entrega, '%d/%m/%Y') AS mgt_faturamento_srv_data_entrega, IF(mgt_faturamento_srv_status = 'Preparando','#','') AS mgt_faturamento_srv_status_1, IF(mgt_faturamento_srv_status = 'Faturado','#','') AS mgt_faturamento_srv_status_2, IF(mgt_faturamento_srv_status = 'Aguardando','#','') AS mgt_faturamento_srv_status_3 from mgt_faturamentos_srv where mgt_faturamento_srv_status &lt;&gt; 'Faturado' order by mgt_faturamento_srv_numero&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Faturamentos_Srv" >
        <property name="Left">371</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Faturamentos_Srv</property>
    <property name="Name">DS_MGT_Faturamentos_Srv</property>
  </object>
  <object class="Query" name="SQL_MGT_Faturamentos_Produtos_Srv" >
        <property name="Left">411</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Faturamentos_Produtos_Srv</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:43:&quot;select * from mgt_faturamentos_produtos_srv&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Faturamentos_Produtos_Srv" >
        <property name="Left">411</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Faturamentos_Produtos_Srv</property>
    <property name="Name">DS_MGT_Faturamentos_Produtos_Srv</property>
  </object>
  <object class="Query" name="SQL_MGT_Estruturas" >
        <property name="Left">451</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Estruturas</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:28:&quot;select * from mgt_estruturas&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Estruturas" >
        <property name="Left">451</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Estruturas</property>
    <property name="Name">DS_MGT_Estruturas</property>
  </object>
  <object class="Query" name="SQL_MGT_Programa_Producao" >
        <property name="Left">491</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Programa_Producao</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:22:{i:0;s:7:&quot;select &quot;;i:1;s:27:&quot;mgt_programa_producao_nro, &quot;;i:2;s:35:&quot;mgt_programa_producao_tipo_codigo, &quot;;i:3;s:28:&quot;mgt_programa_producao_tipo, &quot;;i:4;s:38:&quot;mgt_programa_producao_produto_codigo, &quot;;i:5;s:41:&quot;mgt_programa_producao_produto_descricao, &quot;;i:6;s:36:&quot;mgt_programa_producao_produto_lote, &quot;;i:7;s:230:&quot;IF(((mgt_programa_producao_qtde_vendida - TRUNCATE(mgt_programa_producao_qtde_vendida,0)) &gt; 0),mgt_programa_producao_qtde_vendida,SUBSTRING_INDEX(mgt_programa_producao_qtde_vendida, '.', 1)) AS mgt_programa_producao_qtde_vendida, &quot;;i:8;s:230:&quot;IF(((mgt_programa_producao_qtde_estoque - TRUNCATE(mgt_programa_producao_qtde_estoque,0)) &gt; 0),mgt_programa_producao_qtde_estoque,SUBSTRING_INDEX(mgt_programa_producao_qtde_estoque, '.', 1)) AS mgt_programa_producao_qtde_estoque, &quot;;i:9;s:235:&quot;IF(((mgt_programa_producao_qtde_produzir - TRUNCATE(mgt_programa_producao_qtde_produzir,0)) &gt; 0),mgt_programa_producao_qtde_produzir,SUBSTRING_INDEX(mgt_programa_producao_qtde_produzir, '.', 1)) AS mgt_programa_producao_qtde_produzir, &quot;;i:10;s:97:&quot;date_format(mgt_programa_producao_data_inicio, '%d/%m/%Y') AS mgt_programa_producao_data_inicio, &quot;;i:11;s:91:&quot;date_format(mgt_programa_producao_data_fim, '%d/%m/%Y') AS mgt_programa_producao_data_fim, &quot;;i:12;s:43:&quot;mgt_programa_producao_porcentagem_reserva, &quot;;i:13;s:36:&quot;mgt_programa_producao_planejamento, &quot;;i:14;s:30:&quot;mgt_programa_producao_ordens, &quot;;i:15;s:239:&quot;IF(((mgt_programa_producao_qtde_produzida - TRUNCATE(mgt_programa_producao_qtde_produzida,0)) &gt; 0),mgt_programa_producao_qtde_produzida,SUBSTRING_INDEX(mgt_programa_producao_qtde_produzida, '.', 1)) AS mgt_programa_producao_qtde_produzida &quot;;i:16;s:27:&quot;from mgt_programa_producao &quot;;i:17;s:8:&quot;Where &quot;;&quot;;i:18;s:75:&quot;mgt_programa_producao_qtde_produzida &lt; mgt_programa_producao_qtde_produzir &quot;;i:19;s:9:&quot;Order By &quot;;i:20;s:32:&quot;mgt_programa_producao_nro Desc, &quot;;i:21;s:40:&quot;mgt_programa_producao_produto_codigo Asc&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Programa_Producao" >
        <property name="Left">491</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Programa_Producao</property>
    <property name="Name">DS_MGT_Programa_Producao</property>
  </object>
  <object class="Query" name="SQL_MGT_Planejamento_Necessidades" >
        <property name="Left">531</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Planejamento_Necessidades</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:86:&quot;select * from mgt_planejamento_necessidades where mgt_planejamento_necessidade_nro = 0&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Planejamento_Necessidades" >
        <property name="Left">531</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Planejamento_Necessidades</property>
    <property name="Name">DS_MGT_Planejamento_Necessidades</property>
  </object>
  <object class="Query" name="SQL_MGT_Mapas" >
        <property name="Left">571</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Mapas</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:23:&quot;select * from mgt_mapas&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Mapas" >
        <property name="Left">571</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Mapas</property>
    <property name="Name">DS_MGT_Mapas</property>
  </object>
  <object class="Query" name="SQL_MGT_Mapas_Produtos" >
        <property name="Left">611</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Mapas_Produtos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:25:{i:0;s:7:&quot;select &quot;;i:1;s:25:&quot;mgt_mapa_produto_numero, &quot;;i:2;s:25:&quot;mgt_mapa_cliente_codigo, &quot;;i:3;s:23:&quot;mgt_mapa_cliente_nome, &quot;;i:4;s:25:&quot;mgt_mapa_produto_codigo, &quot;;i:5;s:28:&quot;mgt_mapa_produto_descricao, &quot;;i:6;s:32:&quot;mgt_mapa_produto_numero_pedido, &quot;;i:7;s:15:&quot;mgt_mapa_data, &quot;;i:8;s:23:&quot;mgt_mapa_data_entrega, &quot;;i:9;s:61:&quot;date_format(mgt_mapa_data, '%d/%m/%Y') AS mgt_mapa_data_inv, &quot;;i:10;s:77:&quot;date_format(mgt_mapa_data_entrega, '%d/%m/%Y') AS mgt_mapa_data_entrega_inv, &quot;;i:11;s:297:&quot;if((mgt_mapa_produto_quantidade_solicitada - truncate( mgt_mapa_produto_quantidade_solicitada, 0 ) ) &gt;0, mgt_mapa_produto_quantidade_solicitada, substring( mgt_mapa_produto_quantidade_solicitada, 1, length( mgt_mapa_produto_quantidade_solicitada ) -4 )) As mgt_mapa_produto_quantidade_solicitada, &quot;;i:12;s:285:&quot;if((mgt_mapa_produto_quantidade_producao - truncate( mgt_mapa_produto_quantidade_producao, 0 ) ) &gt;0, mgt_mapa_produto_quantidade_producao, substring( mgt_mapa_produto_quantidade_producao, 1, length( mgt_mapa_produto_quantidade_producao ) -4 )) As mgt_mapa_produto_quantidade_producao, &quot;;i:13;s:291:&quot;if((mgt_mapa_produto_quantidade_produzido - truncate( mgt_mapa_produto_quantidade_produzido, 0 ) ) &gt;0, mgt_mapa_produto_quantidade_produzido, substring( mgt_mapa_produto_quantidade_produzido, 1, length( mgt_mapa_produto_quantidade_produzido ) -4 )) As mgt_mapa_produto_quantidade_produzido, &quot;;i:14;s:291:&quot;if((mgt_mapa_produto_quantidade_problemas - truncate( mgt_mapa_produto_quantidade_problemas, 0 ) ) &gt;0, mgt_mapa_produto_quantidade_problemas, substring( mgt_mapa_produto_quantidade_problemas, 1, length( mgt_mapa_produto_quantidade_problemas ) -4 )) As mgt_mapa_produto_quantidade_problemas, &quot;;i:15;s:24:&quot;mgt_mapa_produto_status &quot;;i:16;s:5:&quot;from &quot;;i:17;s:11:&quot;mgt_mapas, &quot;;i:18;s:19:&quot;mgt_mapas_produtos &quot;;i:19;s:7:&quot; where &quot;;i:20;s:49:&quot;mgt_mapa_numero = mgt_mapa_produto_numero_pedido &quot;;i:21;s:9:&quot;Group By &quot;;i:22;s:56:&quot;mgt_mapa_produto_numero, mgt_mapa_produto_numero_pedido &quot;;i:23;s:9:&quot;Order By &quot;;i:24;s:61:&quot;mgt_mapa_data_entrega Asc, mgt_mapa_produto_numero_pedido Asc&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Mapas_Produtos" >
        <property name="Left">611</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Mapas_Produtos</property>
    <property name="Name">DS_MGT_Mapas_Produtos</property>
  </object>
  <object class="Query" name="SQL_MGT_Solicitacoes_Estoque" >
        <property name="Left">651</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Solicitacoes_Estoque</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:15:{i:0;s:7:&quot;Select &quot;;i:1;s:29:&quot;mgt_solicitacao_estoque_nro, &quot;;i:2;s:115:&quot;date_format(mgt_solicitacao_estoque_data_solicitacao, '%d/%m/%Y') AS mgt_solicitacao_estoque_data_solicitacao_inv, &quot;;i:3;s:37:&quot;mgt_solicitacao_estoque_solicitante, &quot;;i:4;s:32:&quot;mgt_solicitacao_estoque_codigo, &quot;;i:5;s:35:&quot;mgt_solicitacao_estoque_descricao, &quot;;i:6;s:303:&quot;if((mgt_solicitacao_estoque_qtde_solicitada - truncate( mgt_solicitacao_estoque_qtde_solicitada, 0 ) ) &gt;0, mgt_solicitacao_estoque_qtde_solicitada, substring( mgt_solicitacao_estoque_qtde_solicitada, 1, length( mgt_solicitacao_estoque_qtde_solicitada ) -4 )) As mgt_solicitacao_estoque_qtde_solicitada, &quot;;i:7;s:291:&quot;if((mgt_solicitacao_estoque_qtde_entregue - truncate( mgt_solicitacao_estoque_qtde_entregue, 0 ) ) &gt;0, mgt_solicitacao_estoque_qtde_entregue, substring( mgt_solicitacao_estoque_qtde_entregue, 1, length( mgt_solicitacao_estoque_qtde_entregue ) -4 )) As mgt_solicitacao_estoque_qtde_entregue, &quot;;i:8;s:109:&quot;date_format(mgt_solicitacao_estoque_data_entregua, '%d/%m/%Y') AS mgt_solicitacao_estoque_data_entregua_inv, &quot;;i:9;s:32:&quot;mgt_solicitacao_estoque_status, &quot;;i:10;s:35:&quot;mgt_solicitacao_estoque_observacao &quot;;i:11;s:5:&quot;from &quot;;i:12;s:25:&quot;mgt_solicitacoes_estoque &quot;;i:13;s:9:&quot;Order By &quot;;i:14;s:33:&quot;mgt_solicitacao_estoque_nro Desc &quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Solicitacoes_Estoque" >
        <property name="Left">651</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Solicitacoes_Estoque</property>
    <property name="Name">DS_MGT_Solicitacoes_Estoque</property>
  </object>
  <object class="Query" name="SQL_MGT_Expedicao" >
        <property name="Left">695</property>
        <property name="Top">414</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Expedicao</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:38:&quot;select * from mgt_solicitacoes_estoque&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Expedicao" >
        <property name="Left">695</property>
        <property name="Top">467</property>
    <property name="DataSet">SQL_MGT_Expedicao</property>
    <property name="Name">DS_MGT_Expedicao</property>
  </object>
  <object class="Query" name="SQL_MGT_Assistentes" >
        <property name="Left">127</property>
        <property name="Top">526</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Assistentes</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:29:&quot;select * from mgt_assistentes&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Assistentes" >
        <property name="Left">127</property>
        <property name="Top">579</property>
    <property name="DataSet">SQL_MGT_Assistentes</property>
    <property name="Name">DS_MGT_Assistentes</property>
  </object>
  <object class="Query" name="SQL_MGT_Pedidos_Itens" >
        <property name="Left">167</property>
        <property name="Top">526</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Pedidos_Itens</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:38:{i:0;s:7:&quot;Select &quot;;i:1;s:18:&quot;mgt_pedido_status,&quot;;i:2;s:18:&quot;mgt_pedido_numero,&quot;;i:3;s:26:&quot;mgt_pedido_cliente_codigo,&quot;;i:4;s:24:&quot;mgt_pedido_cliente_nome,&quot;;i:5;s:16:&quot;mgt_pedido_data,&quot;;i:6;s:64:&quot;date_format(mgt_pedido_data, '%d/%m/%Y') AS mgt_pedido_data_inv,&quot;;i:7;s:24:&quot;mgt_pedido_data_entrega,&quot;;i:8;s:80:&quot;date_format(mgt_pedido_data_entrega, '%d/%m/%Y') AS mgt_pedido_data_entrega_inv,&quot;;i:9;s:0:&quot;&quot;;i:10;s:26:&quot;mgt_pedido_produto_codigo,&quot;;i:11;s:29:&quot;mgt_pedido_produto_descricao,&quot;;i:12;s:30:&quot;mgt_pedido_produto_quantidade,&quot;;i:13;s:39:&quot;mgt_pedido_produto_quantidade_faturado,&quot;;i:14;s:38:&quot;mgt_pedido_produto_quantidade_faturar,&quot;;i:15;s:0:&quot;&quot;;i:16;s:31:&quot;mgt_mapa_produto_numero_pedido,&quot;;i:17;s:24:&quot;mgt_mapa_produto_codigo,&quot;;i:18;s:37:&quot;mgt_mapa_produto_quantidade_producao,&quot;;i:19;s:38:&quot;mgt_mapa_produto_quantidade_produzido,&quot;;i:20;s:37:&quot;mgt_mapa_produto_quantidade_problemas&quot;;i:21;s:0:&quot;&quot;;i:22;s:5:&quot;from &quot;;i:23;s:20:&quot;mgt_pedidos_produtos&quot;;i:24;s:0:&quot;&quot;;i:25;s:9:&quot;LEFT JOIN&quot;;i:26;s:21:&quot;mgt_mapas_produtos ON&quot;;i:27;s:110:&quot;(mgt_pedidos_produtos.mgt_pedido_produto_numero_pedido = mgt_mapas_produtos.mgt_mapa_produto_numero_pedido AND&quot;;i:28;s:92:&quot;mgt_pedidos_produtos.mgt_pedido_produto_codigo = mgt_mapas_produtos.mgt_mapa_produto_codigo)&quot;;i:29;s:0:&quot;&quot;;i:30;s:10:&quot;LEFT JOIN &quot;;i:31;s:14:&quot;mgt_pedidos ON&quot;;i:32;s:87:&quot;(mgt_pedidos_produtos.mgt_pedido_produto_numero_pedido = mgt_pedidos.mgt_pedido_numero)&quot;;i:33;s:0:&quot;&quot;;i:34;s:6:&quot;WHERE &quot;;i:35;s:43:&quot;mgt_pedidos.mgt_pedido_status &lt;&gt; 'Faturado'&quot;;i:36;s:0:&quot;&quot;;i:37;s:31:&quot;Order By mgt_pedido_numero Desc&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Pedidos_Itens" >
        <property name="Left">167</property>
        <property name="Top">579</property>
    <property name="DataSet">SQL_MGT_Pedidos_Itens</property>
    <property name="Name">DS_MGT_Pedidos_Itens</property>
  </object>
  <object class="Query" name="SQL_MGT_CTe" >
        <property name="Left">210</property>
        <property name="Top">526</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_CTe</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:121:&quot;select *,date_format(mgt_cte_data_receber, '%d/%m/%Y') AS mgt_cte_data_receber from mgt_ctes order by mgt_cte_numero Desc&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_CTe" >
        <property name="Left">210</property>
        <property name="Top">579</property>
    <property name="DataSet">SQL_MGT_CTe</property>
    <property name="Name">DS_MGT_CTe</property>
  </object>
  <object class="Query" name="SQL_MGT_Tributos" >
        <property name="Left">250</property>
        <property name="Top">526</property>
    <property name="Database">Banco_Dados</property>
    <property name="LimitCount">-1</property>
    <property name="Name">SQL_MGT_Tributos</property>
    <property name="Params">a:0:{}</property>
    <property name="SQL"><![CDATA[a:1:{i:0;s:84:&quot;SELECT * FROM mgt_tributos WHERE mgt_tributo_ncm = 0 ORDER BY mgt_tributo_sequencial&quot;;}]]></property>
  </object>
  <object class="Datasource" name="DS_MGT_Tributos" >
        <property name="Left">250</property>
        <property name="Top">579</property>
    <property name="DataSet">SQL_MGT_Tributos</property>
    <property name="Name">DS_MGT_Tributos</property>
  </object>
</object>
?>
