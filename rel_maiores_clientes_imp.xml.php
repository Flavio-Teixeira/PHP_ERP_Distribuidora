<?php
<object class="relmaioresclientesimp" name="relmaioresclientesimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">Maiores Clientes</property>
  <property name="DocType">dtNone</property>
  <property name="Height">142</property>
  <property name="IsMaster">0</property>
  <property name="Name">relmaioresclientesimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">relmaioresclientesimpCreate</property>
  <property name="jsOnLoad">relmaioresclientesimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
    <property name="Height">40</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">91</property>
    <property name="Width">720</property>
    <object class="Label" name="numero_cliente" >
      <property name="Caption">numero_cliente</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">67</property>
      <property name="Name">numero_cliente</property>
      <property name="ParentColor">0</property>
      <property name="Top">4</property>
      <property name="Width">90</property>
    </object>
    <object class="Label" name="qtde_notas" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">qtde_notas</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">411</property>
      <property name="Name">qtde_notas</property>
      <property name="ParentColor">0</property>
      <property name="Top">4</property>
      <property name="Width">85</property>
    </object>
    <object class="Label" name="qtde_produtos" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">qtde_produtos</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">512</property>
      <property name="Name">qtde_produtos</property>
      <property name="ParentColor">0</property>
      <property name="Top">4</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="valor_total" >
      <property name="Alignment">agRight</property>
      <property name="Caption">valor_total</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">625</property>
      <property name="Name">valor_total</property>
      <property name="ParentColor">0</property>
      <property name="Top">4</property>
      <property name="Width">90</property>
    </object>
    <object class="Label" name="posicao" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">posicao</property>
      <property name="DataField">mgt_swap_autonumeracao</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">13</property>
      <property name="Left">3</property>
      <property name="Name">posicao</property>
      <property name="ParentColor">0</property>
      <property name="Top">4</property>
      <property name="Width">50</property>
    </object>
    <object class="Label" name="nome_cliente" >
      <property name="Caption">nome_cliente</property>
      <property name="DataSource">conexaoprincipal.DS_Relatorio</property>
      <property name="Height">30</property>
      <property name="Left">171</property>
      <property name="Name">nome_cliente</property>
      <property name="ParentColor">0</property>
      <property name="Top">4</property>
      <property name="Width">228</property>
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
    <property name="Caption"><![CDATA[Relatorio de Maiores Clientes]]></property>
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
  <object class="Label" name="data_inicial" >
    <property name="Caption">data_inicial</property>
    <property name="Height">13</property>
    <property name="Left">90</property>
    <property name="Name">data_inicial</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="data_final" >
    <property name="Caption">data_final</property>
    <property name="Height">13</property>
    <property name="Left">280</property>
    <property name="Name">data_final</property>
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
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Tipo:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">368</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">30</property>
  </object>
  <object class="Label" name="opcao" >
    <property name="Caption">opcao</property>
    <property name="Height">13</property>
    <property name="Left">408</property>
    <property name="Name">opcao</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">83</property>
  </object>
  <object class="Label" name="Label15" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtde de clientes para o ranking:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">504</property>
    <property name="Name">Label15</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">182</property>
  </object>
  <object class="Label" name="qtde_ranking" >
    <property name="Caption">qtde_ranking</property>
    <property name="Height">13</property>
    <property name="Left">690</property>
    <property name="Name">qtde_ranking</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">30</property>
  </object>
  <object class="Label" name="Label10" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Posicao&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">11</property>
    <property name="Name">Label10</property>
    <property name="ParentColor">0</property>
    <property name="Top">77</property>
    <property name="Width">50</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Numero Cliente&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">75</property>
    <property name="Name">Label1</property>
    <property name="ParentColor">0</property>
    <property name="Top">77</property>
    <property name="Width">90</property>
  </object>
  <object class="Label" name="Label13" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Nome Cliente&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">179</property>
    <property name="Name">Label13</property>
    <property name="ParentColor">0</property>
    <property name="Top">77</property>
    <property name="Width">228</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtde de Notas&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">419</property>
    <property name="Name">Label5</property>
    <property name="ParentColor">0</property>
    <property name="Top">77</property>
    <property name="Width">85</property>
  </object>
  <object class="Label" name="Label6" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Qtde de Produtos&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">520</property>
    <property name="Name">Label6</property>
    <property name="ParentColor">0</property>
    <property name="Top">77</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="Label11" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor Total&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">633</property>
    <property name="Name">Label11</property>
    <property name="ParentColor">0</property>
    <property name="Top">77</property>
    <property name="Width">90</property>
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
