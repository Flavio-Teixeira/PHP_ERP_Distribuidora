<?php
<object class="relcontaspagarefetivoimp" name="relcontaspagarefetivoimp" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Faturamento por Periodo]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">190</property>
  <property name="IsMaster">0</property>
  <property name="Name">relcontaspagarefetivoimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">relcontaspagarefetivoimpCreate</property>
  <property name="jsOnLoad">relcontaspagarefetivoimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Comparativo</property>
    <property name="Height">48</property>
    <property name="Layout">
    <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">4</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">136</property>
    <property name="Width">720</property>
    <object class="Label" name="mgt_swap_comparativo_historico" >
      <property name="Caption">mgt_swap_comparativo_historico</property>
      <property name="DataField">mgt_swap_comparativo_historico</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Comparativo</property>
      <property name="Height">38</property>
      <property name="Left">90</property>
      <property name="Name">mgt_swap_comparativo_historico</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">228</property>
    </object>
    <object class="Label" name="mgt_swap_comparativo_data" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_swap_comparativo_data</property>
      <property name="DataField">mgt_swap_comparativo_data</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Comparativo</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_swap_comparativo_data</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="mgt_swap_comparativo_debito" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_comparativo_debito</property>
      <property name="DataField">mgt_swap_comparativo_debito</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Comparativo</property>
      <property name="Height">13</property>
      <property name="Left">332</property>
      <property name="Name">mgt_swap_comparativo_debito</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="mgt_swap_comparativo_credito" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_comparativo_credito</property>
      <property name="DataField">mgt_swap_comparativo_credito</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Comparativo</property>
      <property name="Height">13</property>
      <property name="Left">446</property>
      <property name="Name">mgt_swap_comparativo_credito</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="mgt_swap_comparativo_saldo" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_comparativo_saldo</property>
      <property name="DataField">mgt_swap_comparativo_saldo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Comparativo</property>
      <property name="Height">13</property>
      <property name="Left">615</property>
      <property name="Name">mgt_swap_comparativo_saldo</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="mgt_swap_comparativo_tipo" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_swap_comparativo_tipo</property>
      <property name="DataField">mgt_swap_comparativo_tipo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Comparativo</property>
      <property name="Height">13</property>
      <property name="Left">561</property>
      <property name="Name">mgt_swap_comparativo_tipo</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">40</property>
    </object>
  </object>
  <object class="Label" name="apelido_empresa" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Empresa&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">56</property>
    <property name="Name">apelido_empresa</property>
    <property name="Top">8</property>
    <property name="Width">187</property>
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
    <property name="Caption"><![CDATA[Relatorio de Comparativo (Efetivo)]]></property>
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
  <object class="Label" name="mgt_data_inicial" >
    <property name="Caption">mgt_data_inicial</property>
    <property name="Height">13</property>
    <property name="Left">90</property>
    <property name="Name">mgt_data_inicial</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="mgt_data_final" >
    <property name="Caption">mgt_data_final</property>
    <property name="Height">13</property>
    <property name="Left">280</property>
    <property name="Name">mgt_data_final</property>
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
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Historico&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">94</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">118</property>
    <property name="Width">228</property>
  </object>
  <object class="Label" name="Label16" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label16</property>
    <property name="ParentColor">0</property>
    <property name="Top">118</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="Label18" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Debito&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">336</property>
    <property name="Name">Label18</property>
    <property name="ParentColor">0</property>
    <property name="Top">118</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="Label19" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Credito&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">450</property>
    <property name="Name">Label19</property>
    <property name="ParentColor">0</property>
    <property name="Top">118</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="Label20" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Saldo&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">619</property>
    <property name="Name">Label20</property>
    <property name="ParentColor">0</property>
    <property name="Top">118</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;D / C&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">565</property>
    <property name="Name">Label1</property>
    <property name="ParentColor">0</property>
    <property name="Top">118</property>
    <property name="Width">40</property>
  </object>
  <object class="Label" name="total_saldo" >
    <property name="Alignment">agRight</property>
    <property name="Caption">total_saldo</property>
    <property name="Height">13</property>
    <property name="Left">619</property>
    <property name="Name">total_saldo</property>
    <property name="ParentColor">0</property>
    <property name="Top">91</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="total_credito" >
    <property name="Alignment">agRight</property>
    <property name="Caption">total_credito</property>
    <property name="Height">13</property>
    <property name="Left">458</property>
    <property name="Name">total_credito</property>
    <property name="ParentColor">0</property>
    <property name="Top">91</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="total_debito" >
    <property name="Alignment">agRight</property>
    <property name="Caption">total_debito</property>
    <property name="Height">13</property>
    <property name="Left">336</property>
    <property name="Name">total_debito</property>
    <property name="ParentColor">0</property>
    <property name="Top">91</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="Label25" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Total de Debitos / Creditos:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">94</property>
    <property name="Name">Label25</property>
    <property name="ParentColor">0</property>
    <property name="Top">91</property>
    <property name="Width">228</property>
  </object>
  <object class="Label" name="total_dc" >
    <property name="Alignment">agCenter</property>
    <property name="Caption">total_dc</property>
    <property name="Height">13</property>
    <property name="Left">565</property>
    <property name="Name">total_dc</property>
    <property name="ParentColor">0</property>
    <property name="Top">91</property>
    <property name="Width">40</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Debito&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">336</property>
    <property name="Name">Label5</property>
    <property name="ParentColor">0</property>
    <property name="Top">70</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="Label6" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Credito&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">458</property>
    <property name="Name">Label6</property>
    <property name="ParentColor">0</property>
    <property name="Top">70</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="Label7" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;D / C&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">565</property>
    <property name="Name">Label7</property>
    <property name="ParentColor">0</property>
    <property name="Top">70</property>
    <property name="Width">40</property>
  </object>
  <object class="Label" name="Label10" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Saldo&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">619</property>
    <property name="Name">Label10</property>
    <property name="ParentColor">0</property>
    <property name="Top">70</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="conta_padrao" >
    <property name="Caption">conta_padrao</property>
    <property name="Font">
    <property name="Color">#FFFFFF</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">251</property>
    <property name="Name">conta_padrao</property>
    <property name="ParentFont">0</property>
    <property name="Top">8</property>
    <property name="Visible">0</property>
    <property name="Width">50</property>
  </object>
  <object class="Label" name="opcao_soma_dia" >
    <property name="Caption">opcao_soma_dia</property>
    <property name="Font">
    <property name="Color">#FFFFFF</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">320</property>
    <property name="Name">opcao_soma_dia</property>
    <property name="ParentFont">0</property>
    <property name="Top">8</property>
    <property name="Visible">0</property>
    <property name="Width">50</property>
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
