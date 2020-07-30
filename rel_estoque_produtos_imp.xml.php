<?php
<object class="relestoqueprodutosimp" name="relestoqueprodutosimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">Estoque de Produtos</property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Name">relestoqueprodutosimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">relestoqueprodutosimpCreate</property>
  <property name="jsOnLoad">relestoqueprodutosimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Produtos</property>
    <property name="Height">25</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">81</property>
    <property name="Width">724</property>
    <object class="Label" name="mgt_produto_descricao" >
      <property name="Caption">mgt_produto_descricao</property>
      <property name="DataField">mgt_produto_descricao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">116</property>
      <property name="Name">mgt_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">470</property>
    </object>
    <object class="Label" name="mgt_produto_estoque_atual" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_produto_estoque_atual</property>
      <property name="DataField">mgt_produto_estoque_atual</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">597</property>
      <property name="Name">mgt_produto_estoque_atual</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">110</property>
    </object>
    <object class="Label" name="mgt_produto_codigo" >
      <property name="Caption">mgt_produto_codigo</property>
      <property name="DataField">mgt_produto_codigo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Produtos</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">100</property>
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
    <property name="Caption">Estoque de Produtos</property>
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
  <object class="Label" name="Label12" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Descricao&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">124</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">62</property>
    <property name="Width">470</property>
  </object>
  <object class="Label" name="Label18" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Quantidade&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">605</property>
    <property name="Name">Label18</property>
    <property name="ParentColor">0</property>
    <property name="Top">62</property>
    <property name="Width">110</property>
  </object>
  <object class="Label" name="Label22" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Codigo&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">12</property>
    <property name="Name">Label22</property>
    <property name="ParentColor">0</property>
    <property name="Top">62</property>
    <property name="Width">100</property>
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
