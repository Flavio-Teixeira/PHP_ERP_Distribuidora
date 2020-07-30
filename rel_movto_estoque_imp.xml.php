<?php
<object class="relmovtoestoqueimp" name="relmovtoestoqueimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Movimentacao de Estoque]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">198</property>
  <property name="IsMaster">0</property>
  <property name="Name">relmovtoestoqueimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">relmovtoestoqueimpCreate</property>
  <property name="jsOnLoad">relmovtoestoqueimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Movto_Estoque</property>
    <property name="Height">48</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">137</property>
    <property name="Width">724</property>
    <object class="Label" name="mgt_movto_observacao" >
      <property name="Caption">mgt_movto_observacao</property>
      <property name="DataField">mgt_movto_observacao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Movto_Estoque</property>
      <property name="Height">38</property>
      <property name="Left">597</property>
      <property name="Name">mgt_movto_observacao</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">120</property>
    </object>
    <object class="Label" name="mgt_movto_data" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_movto_data</property>
      <property name="DataField">mgt_movto_data</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Movto_Estoque</property>
      <property name="Height">13</property>
      <property name="Left">252</property>
      <property name="Name">mgt_movto_data</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="mgt_movto_tipo" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_movto_tipo</property>
      <property name="DataField">mgt_movto_tipo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Movto_Estoque</property>
      <property name="Height">13</property>
      <property name="Left">336</property>
      <property name="Name">mgt_movto_tipo</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="mgt_movto_qtde_informada" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_movto_qtde_informada</property>
      <property name="DataField">mgt_movto_qtde_informada</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Movto_Estoque</property>
      <property name="Height">13</property>
      <property name="Left">424</property>
      <property name="Name">mgt_movto_qtde_informada</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="mgt_movto_qtde_atual" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_movto_qtde_atual</property>
      <property name="DataField">mgt_movto_qtde_atual</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Movto_Estoque</property>
      <property name="Height">13</property>
      <property name="Left">512</property>
      <property name="Name">mgt_movto_qtde_atual</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="mgt_movto_estoque_numero" >
      <property name="Caption">mgt_movto_estoque_numero</property>
      <property name="DataField">mgt_movto_estoque_numero</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Movto_Estoque</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_movto_estoque_numero</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="mgt_movto_qtde_anterior" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_movto_qtde_anterior</property>
      <property name="DataField">mgt_movto_qtde_anterior</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Movto_Estoque</property>
      <property name="Height">13</property>
      <property name="Left">168</property>
      <property name="Name">mgt_movto_qtde_anterior</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="mgt_movto_nro_entrada_saida" >
      <property name="Caption">mgt_movto_nro_entrada_saida</property>
      <property name="DataField">mgt_movto_nro_entrada_saida</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Movto_Estoque</property>
      <property name="Height">13</property>
      <property name="Left">84</property>
      <property name="Name">mgt_movto_nro_entrada_saida</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">70</property>
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
    <property name="Caption"><![CDATA[Movimentacao de Estoque]]></property>
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
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Nro. Documento&lt;/STRONG&gt;]]></property>
    <property name="Height">26</property>
    <property name="Left">92</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">105</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label14" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Saldo Inicial&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">176</property>
    <property name="Name">Label14</property>
    <property name="ParentColor">0</property>
    <property name="Top">118</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label16" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">260</property>
    <property name="Name">Label16</property>
    <property name="ParentColor">0</property>
    <property name="Top">118</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="Label17" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Movimento&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">344</property>
    <property name="Name">Label17</property>
    <property name="ParentColor">0</property>
    <property name="Top">118</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label18" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Quantidade&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">432</property>
    <property name="Name">Label18</property>
    <property name="ParentColor">0</property>
    <property name="Top">118</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label19" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Saldo Atual&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">520</property>
    <property name="Name">Label19</property>
    <property name="ParentColor">0</property>
    <property name="Top">118</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label20" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Observacao&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">605</property>
    <property name="Name">Label20</property>
    <property name="ParentColor">0</property>
    <property name="Top">118</property>
    <property name="Width">120</property>
  </object>
  <object class="Label" name="produto_codigo" >
    <property name="Caption">produto_codigo</property>
    <property name="Height">13</property>
    <property name="Left">108</property>
    <property name="Name">produto_codigo</property>
    <property name="ParentColor">0</property>
    <property name="Top">75</property>
    <property name="Width">90</property>
  </object>
  <object class="Label" name="Label25" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Codigo Produto:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label25</property>
    <property name="ParentColor">0</property>
    <property name="Top">75</property>
    <property name="Width">91</property>
  </object>
  <object class="Label" name="Label22" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Nro. Transacao&lt;/STRONG&gt;]]></property>
    <property name="Height">26</property>
    <property name="Left">12</property>
    <property name="Name">Label22</property>
    <property name="ParentColor">0</property>
    <property name="Top">105</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label6" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Descricao:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">208</property>
    <property name="Name">Label6</property>
    <property name="ParentColor">0</property>
    <property name="Top">75</property>
    <property name="Width">65</property>
  </object>
  <object class="Label" name="produto_descricao" >
    <property name="Caption">produto_descricao</property>
    <property name="Height">13</property>
    <property name="Left">280</property>
    <property name="Name">produto_descricao</property>
    <property name="ParentColor">0</property>
    <property name="Top">75</property>
    <property name="Width">445</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Legenda:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">376</property>
    <property name="Name">Label1</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">55</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Caption"><![CDATA[1 - Entrada, 2 - Saida]]></property>
    <property name="Height">13</property>
    <property name="Left">439</property>
    <property name="Name">Label5</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">171</property>
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
