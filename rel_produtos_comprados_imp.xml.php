<?php
<object class="relprodutoscompradosimp" name="relprodutoscompradosimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Inventario]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">120</property>
  <property name="IsMaster">0</property>
  <property name="Name">relprodutoscompradosimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">relprodutoscompradosimpCreate</property>
  <property name="jsOnLoad">relprodutoscompradosimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Ordens_Produtos</property>
    <property name="Height">48</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">68</property>
    <property name="Width">724</property>
    <object class="Label" name="mgt_produto_codigo" >
      <property name="Caption">mgt_ordem_produto_numero_ordem</property>
      <property name="DataField">mgt_ordem_produto_numero_ordem</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Ordens_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">44</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">mgt_ordem_data_dma</property>
      <property name="DataField">mgt_ordem_data_dma</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Ordens_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">51</property>
      <property name="Name">Label10</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">66</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">mgt_ordem_produto_codigo</property>
      <property name="DataField">mgt_ordem_produto_codigo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Ordens_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">119</property>
      <property name="Name">Label11</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">73</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption">mgt_ordem_produto_descricao</property>
      <property name="DataField">mgt_ordem_produto_descricao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Ordens_Produtos</property>
      <property name="Height">38</property>
      <property name="Left">195</property>
      <property name="Name">Label13</property>
      <property name="ParentColor">0</property>
      <property name="Top">6</property>
      <property name="Width">108</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_ordem_produto_quantidade</property>
      <property name="DataField">mgt_ordem_produto_quantidade</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Ordens_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">306</property>
      <property name="Name">Label14</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">34</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_ordem_produto_valor_unitario</property>
      <property name="DataField">mgt_ordem_produto_valor_unitario</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Ordens_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">343</property>
      <property name="Name">Label15</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">95</property>
    </object>
    <object class="Label" name="Label16" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_ordem_produto_valor_total</property>
      <property name="DataField">mgt_ordem_produto_valor_total</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Ordens_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">441</property>
      <property name="Name">Label16</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">78</property>
    </object>
    <object class="Label" name="Label17" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_ordem_produto_ipi</property>
      <property name="DataField">mgt_ordem_produto_ipi</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Ordens_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">522</property>
      <property name="Name">Label17</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">48</property>
    </object>
    <object class="Label" name="Label19" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_ordem_produto_valor_ipi</property>
      <property name="DataField">mgt_ordem_produto_valor_ipi</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Ordens_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">573</property>
      <property name="Name">Label19</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">69</property>
    </object>
    <object class="Label" name="Label20" >
      <property name="Caption">mgt_ordem_cliente_nome</property>
      <property name="DataField">mgt_ordem_cliente_nome</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Ordens_Produtos</property>
      <property name="Height">39</property>
      <property name="Left">645</property>
      <property name="Name">Label20</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">75</property>
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
    <property name="Caption"><![CDATA[Relatorio de Produtos Comprados -]]></property>
    <property name="Font">
        <property name="Align">taCenter</property>
        <property name="Size">13px</property>
    </property>
    <property name="Height">16</property>
    <property name="Left">56</property>
    <property name="Name">relatorio_titulo</property>
    <property name="ParentFont">0</property>
    <property name="Top">25</property>
    <property name="Width">669</property>
  </object>
  <object class="Label" name="Label12" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">59</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">53</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="Label18" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtde&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">314</property>
    <property name="Name">Label18</property>
    <property name="ParentColor">0</property>
    <property name="Top">53</property>
    <property name="Width">34</property>
  </object>
  <object class="Label" name="Label22" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Nro.OC&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">12</property>
    <property name="Name">Label22</property>
    <property name="ParentColor">0</property>
    <property name="Top">53</property>
    <property name="Width">44</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Alignment">agLeft</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cod.Produto&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">127</property>
    <property name="Name">Label1</property>
    <property name="ParentColor">0</property>
    <property name="Top">53</property>
    <property name="Width">73</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Alignment">agLeft</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Descricao Produto&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">203</property>
    <property name="Name">Label2</property>
    <property name="ParentColor">0</property>
    <property name="Top">53</property>
    <property name="Width">108</property>
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
  <object class="Label" name="Label5" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr.Unitario (R$)&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">351</property>
    <property name="Name">Label5</property>
    <property name="ParentColor">0</property>
    <property name="Top">53</property>
    <property name="Width">95</property>
  </object>
  <object class="Label" name="Label6" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr.Total (R$)&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">449</property>
    <property name="Name">Label6</property>
    <property name="ParentColor">0</property>
    <property name="Top">53</property>
    <property name="Width">78</property>
  </object>
  <object class="Label" name="Label7" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;IPI (%)&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">530</property>
    <property name="Name">Label7</property>
    <property name="ParentColor">0</property>
    <property name="Top">53</property>
    <property name="Width">48</property>
  </object>
  <object class="Label" name="Label8" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr.IPI (R$)&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">581</property>
    <property name="Name">Label8</property>
    <property name="ParentColor">0</property>
    <property name="Top">53</property>
    <property name="Width">69</property>
  </object>
  <object class="Label" name="Label9" >
    <property name="Alignment">agLeft</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Fornecedor&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">653</property>
    <property name="Name">Label9</property>
    <property name="ParentColor">0</property>
    <property name="Top">53</property>
    <property name="Width">75</property>
  </object>
</object>
?>
