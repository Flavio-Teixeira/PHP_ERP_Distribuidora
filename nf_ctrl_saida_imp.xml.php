<?php
<object class="nfctrlsaidaimp" name="nfctrlsaidaimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">Pedido</property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Name">nfctrlsaidaimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">nfctrlsaidaimpCreate</property>
  <property name="jsOnLoad">nfctrlsaidaimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
    <property name="Height">196</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">75</property>
    <property name="Width">720</property>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;DT.Emissao:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">19</property>
      <property name="Name">Label1</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">95</property>
    </object>
    <object class="Label" name="mgt_nota_fiscal_data_emissao" >
      <property name="Caption">mgt_nota_fiscal_data_emissao</property>
      <property name="DataField">mgt_nota_fiscal_data_emissao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
      <property name="Height">13</property>
      <property name="Left">123</property>
      <property name="Name">mgt_nota_fiscal_data_emissao</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">576</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Nota Fiscal:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">19</property>
      <property name="Name">Label5</property>
      <property name="ParentColor">0</property>
      <property name="Top">29</property>
      <property name="Width">95</property>
    </object>
    <object class="Label" name="mgt_nota_fiscal_numero" >
      <property name="Caption">mgt_nota_fiscal_numero</property>
      <property name="DataField">mgt_nota_fiscal_numero</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
      <property name="Height">13</property>
      <property name="Left">123</property>
      <property name="Name">mgt_nota_fiscal_numero</property>
      <property name="ParentColor">0</property>
      <property name="Top">29</property>
      <property name="Width">576</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Cliente:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">19</property>
      <property name="Name">Label6</property>
      <property name="ParentColor">0</property>
      <property name="Top">53</property>
      <property name="Width">95</property>
    </object>
    <object class="Label" name="mgt_nota_fiscal_razao_social" >
      <property name="Caption">mgt_nota_fiscal_razao_social</property>
      <property name="DataField">mgt_nota_fiscal_razao_social</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
      <property name="Height">13</property>
      <property name="Left">123</property>
      <property name="Name">mgt_nota_fiscal_razao_social</property>
      <property name="ParentColor">0</property>
      <property name="Top">53</property>
      <property name="Width">576</property>
    </object>
    <object class="Label" name="Label45" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Transportadora:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">19</property>
      <property name="Name">Label45</property>
      <property name="ParentColor">0</property>
      <property name="Top">77</property>
      <property name="Width">95</property>
    </object>
    <object class="Label" name="mgt_nota_fiscal_transportadora_razao_social" >
      <property name="Caption">mgt_nota_fiscal_transportadora_razao_social</property>
      <property name="DataField">mgt_nota_fiscal_transportadora_razao_social</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
      <property name="Height">13</property>
      <property name="Left">123</property>
      <property name="Name">mgt_nota_fiscal_transportadora_razao_social</property>
      <property name="ParentColor">0</property>
      <property name="Top">77</property>
      <property name="Width">576</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Volume:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">19</property>
      <property name="Name">Label12</property>
      <property name="ParentColor">0</property>
      <property name="Top">101</property>
      <property name="Width">95</property>
    </object>
    <object class="Label" name="mgt_nota_fiscal_vol_numero" >
      <property name="Caption">mgt_nota_fiscal_vol_numero</property>
      <property name="DataField">mgt_nota_fiscal_vol_numero</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
      <property name="Height">13</property>
      <property name="Left">123</property>
      <property name="Name">mgt_nota_fiscal_vol_numero</property>
      <property name="ParentColor">0</property>
      <property name="Top">101</property>
      <property name="Width">576</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Nome:_______________________________________________&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">19</property>
      <property name="Name">Label10</property>
      <property name="ParentColor">0</property>
      <property name="Top">125</property>
      <property name="Width">400</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Data de Saida:______/______/______&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">19</property>
      <property name="Name">Label13</property>
      <property name="ParentColor">0</property>
      <property name="Top">149</property>
      <property name="Width">400</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Observacoes:_________________________________________&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">19</property>
      <property name="Name">Label14</property>
      <property name="ParentColor">0</property>
      <property name="Top">173</property>
      <property name="Width">400</property>
    </object>
  </object>
  <object class="Label" name="apelido_empresa" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Empresa&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
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
    <property name="Caption"><![CDATA[Controle de Saida de Mercadorias]]></property>
    <property name="Font">
        <property name="Align">taCenter</property>
        <property name="Size">15px</property>
    </property>
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">relatorio_titulo</property>
    <property name="ParentFont">0</property>
    <property name="Top">25</property>
    <property name="Width">717</property>
  </object>
  <object class="Label" name="Label28" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Solicitacao:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label28</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">67</property>
  </object>
  <object class="Label" name="mgt_nota_fiscal_numero_ini" >
    <property name="Caption">mgt_nota_fiscal_numero_ini</property>
    <property name="Height">13</property>
    <property name="Left">378</property>
    <property name="Name">mgt_nota_fiscal_numero_ini</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">65</property>
  </object>
  <object class="Label" name="mgt_nota_fiscal_numero_fim" >
    <property name="Caption">mgt_nota_fiscal_numero_fim</property>
    <property name="Height">13</property>
    <property name="Left">576</property>
    <property name="Name">mgt_nota_fiscal_numero_fim</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">65</property>
  </object>
  <object class="Label" name="mgt_nota_fiscal_tipo_faturamento" >
    <property name="Caption">mgt_nota_fiscal_tipo_faturamento</property>
    <property name="Height">13</property>
    <property name="Left">83</property>
    <property name="Name">mgt_nota_fiscal_tipo_faturamento</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">193</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Numero Inicial:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">280</property>
    <property name="Name">Label2</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">89</property>
  </object>
  <object class="Label" name="Label8" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Numero Final:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">488</property>
    <property name="Name">Label8</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label9" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Ate&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">456</property>
    <property name="Name">Label9</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">22</property>
  </object>
</object>
?>
