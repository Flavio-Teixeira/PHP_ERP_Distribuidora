<?php
<object class="relestoquefamiliasimp" name="relestoquefamiliasimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">Estoque de Produtos</property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Name">relestoquefamiliasimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">relestoquefamiliasimpCreate</property>
  <property name="jsOnLoad">relestoquefamiliasimpJSLoad</property>
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
    <property name="Caption"><![CDATA[Estoque de Produtos - Familias]]></property>
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
  <object class="Label" name="Label5" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;b&gt;Familia Escolhida:&lt;/b&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">208</property>
    <property name="Name">Label5</property>
    <property name="Top">112</property>
    <property name="Width">115</property>
  </object>
  <object class="Label" name="familia_escolhida" >
    <property name="Caption">---</property>
    <property name="Height">13</property>
    <property name="Left">328</property>
    <property name="Name">familia_escolhida</property>
    <property name="Top">112</property>
    <property name="Width">370</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;b&gt;Quantidade Inicial:&lt;/b&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">208</property>
    <property name="Name">Label2</property>
    <property name="Top">144</property>
    <property name="Width">115</property>
  </object>
  <object class="Label" name="qtde_inicial" >
    <property name="Caption">0</property>
    <property name="Height">13</property>
    <property name="Left">328</property>
    <property name="Name">qtde_inicial</property>
    <property name="Top">144</property>
    <property name="Width">115</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;b&gt;Quantidade Atual:&lt;/b&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">208</property>
    <property name="Name">Label1</property>
    <property name="Top">176</property>
    <property name="Width">115</property>
  </object>
  <object class="Label" name="qtde_atual" >
    <property name="Caption">0</property>
    <property name="Height">13</property>
    <property name="Left">328</property>
    <property name="Name">qtde_atual</property>
    <property name="Top">176</property>
    <property name="Width">115</property>
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
