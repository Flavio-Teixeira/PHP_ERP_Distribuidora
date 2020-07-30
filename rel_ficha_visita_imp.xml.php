<?php
<object class="relfichavisitaimp" name="relfichavisitaimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">Ficha de Visita</property>
  <property name="DocType">dtNone</property>
  <property name="Height">286</property>
  <property name="IsMaster">0</property>
  <property name="Name">relfichavisitaimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">relfichavisitaimpCreate</property>
  <property name="jsOnLoad">relfichavisitaimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
    <property name="Height">268</property>
    <property name="Layout">
        <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">8</property>
    <property name="Width">720</property>
    <object class="Label" name="Label10" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Empresa:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">60</property>
      <property name="Name">Label10</property>
      <property name="ParentColor">0</property>
      <property name="Top">37</property>
      <property name="Width">55</property>
    </object>
    <object class="Label" name="mgt_cliente_nome" >
      <property name="Caption">mgt_cliente_nome</property>
      <property name="DataField">mgt_cliente_nome</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">121</property>
      <property name="Name">mgt_cliente_nome</property>
      <property name="ParentColor">0</property>
      <property name="Top">37</property>
      <property name="Width">360</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Inscricao Estadual:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">2</property>
      <property name="Name">Label1</property>
      <property name="ParentColor">0</property>
      <property name="Top">53</property>
      <property name="Width">113</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;CNPJ:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">496</property>
      <property name="Name">Label3</property>
      <property name="ParentColor">0</property>
      <property name="Top">37</property>
      <property name="Width">42</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Status do Credito:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">425</property>
      <property name="Name">Label4</property>
      <property name="ParentColor">0</property>
      <property name="Top">53</property>
      <property name="Width">113</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Endereco:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label5</property>
      <property name="ParentColor">0</property>
      <property name="Top">77</property>
      <property name="Width">107</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Bairro:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label6</property>
      <property name="ParentColor">0</property>
      <property name="Top">93</property>
      <property name="Width">105</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;CEP:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label7</property>
      <property name="ParentColor">0</property>
      <property name="Top">109</property>
      <property name="Width">105</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Contato:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label8</property>
      <property name="ParentColor">0</property>
      <property name="Top">125</property>
      <property name="Width">107</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Visitado em:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label9</property>
      <property name="ParentColor">0</property>
      <property name="Top">157</property>
      <property name="Width">115</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Tipo do Cliente:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label11</property>
      <property name="ParentColor">0</property>
      <property name="Top">173</property>
      <property name="Width">115</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Data da Ultima Compra:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">Label12</property>
      <property name="ParentColor">0</property>
      <property name="Top">199</property>
      <property name="Width">140</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor da Ultima Compra:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">Label13</property>
      <property name="ParentColor">0</property>
      <property name="Top">216</property>
      <property name="Width">140</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;OBSERVAcOES GERAIS: (Anotar no verso da ficha)&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label14</property>
      <property name="ParentColor">0</property>
      <property name="Top">249</property>
      <property name="Width">292</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Representante Responsavel:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">303</property>
      <property name="Name">Label15</property>
      <property name="ParentColor">0</property>
      <property name="Top">157</property>
      <property name="Width">170</property>
    </object>
    <object class="Label" name="Label17" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Complemento:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">488</property>
      <property name="Name">Label17</property>
      <property name="ParentColor">0</property>
      <property name="Top">77</property>
      <property name="Width">90</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Cidade:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">328</property>
      <property name="Name">Label18</property>
      <property name="ParentColor">0</property>
      <property name="Top">93</property>
      <property name="Width">50</property>
    </object>
    <object class="Label" name="Label19" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Estado:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">600</property>
      <property name="Name">Label19</property>
      <property name="ParentColor">0</property>
      <property name="Top">93</property>
      <property name="Width">50</property>
    </object>
    <object class="Label" name="Label20" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Residencial:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">371</property>
      <property name="Name">Label20</property>
      <property name="ParentColor">0</property>
      <property name="Top">125</property>
      <property name="Width">72</property>
    </object>
    <object class="Label" name="Label21" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;FAX:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">566</property>
      <property name="Name">Label21</property>
      <property name="ParentColor">0</property>
      <property name="Top">125</property>
      <property name="Width">34</property>
    </object>
    <object class="Label" name="Label22" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Celular:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">558</property>
      <property name="Name">Label22</property>
      <property name="ParentColor">0</property>
      <property name="Top">109</property>
      <property name="Width">42</property>
    </object>
    <object class="Label" name="Label23" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Comercial:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">379</property>
      <property name="Name">Label23</property>
      <property name="ParentColor">0</property>
      <property name="Top">109</property>
      <property name="Width">64</property>
    </object>
    <object class="Label" name="Label24" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;________________________&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">129</property>
      <property name="Name">Label24</property>
      <property name="ParentColor">0</property>
      <property name="Top">173</property>
      <property name="Width">171</property>
    </object>
    <object class="Label" name="mgt_cliente_inscricao_estadual" >
      <property name="Caption">mgt_cliente_inscricao_estadual</property>
      <property name="DataField">mgt_cliente_inscricao_estadual</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">121</property>
      <property name="Name">mgt_cliente_inscricao_estadual</property>
      <property name="ParentColor">0</property>
      <property name="Top">53</property>
      <property name="Width">288</property>
    </object>
    <object class="Label" name="mgt_cliente_endereco" >
      <property name="Caption">mgt_cliente_endereco</property>
      <property name="DataField">mgt_cliente_endereco</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">121</property>
      <property name="Name">mgt_cliente_endereco</property>
      <property name="ParentColor">0</property>
      <property name="Top">77</property>
      <property name="Width">360</property>
    </object>
    <object class="Label" name="mgt_cliente_bairro" >
      <property name="Caption">mgt_cliente_bairro</property>
      <property name="DataField">mgt_cliente_bairro</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">121</property>
      <property name="Name">mgt_cliente_bairro</property>
      <property name="ParentColor">0</property>
      <property name="Top">93</property>
      <property name="Width">207</property>
    </object>
    <object class="Label" name="mgt_cliente_cidade" >
      <property name="Caption">mgt_cliente_cidade</property>
      <property name="DataField">mgt_cliente_cidade</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">385</property>
      <property name="Name">mgt_cliente_cidade</property>
      <property name="ParentColor">0</property>
      <property name="Top">93</property>
      <property name="Width">215</property>
    </object>
    <object class="Label" name="mgt_cliente_fone_comercial" >
      <property name="Caption">mgt_cliente_fone_comercial</property>
      <property name="DataField">mgt_cliente_fone_comercial</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">450</property>
      <property name="Name">mgt_cliente_fone_comercial</property>
      <property name="ParentColor">0</property>
      <property name="Top">109</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="mgt_cliente_fone_celular" >
      <property name="Caption">mgt_cliente_fone_celular</property>
      <property name="DataField">mgt_cliente_fone_celular</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">607</property>
      <property name="Name">mgt_cliente_fone_celular</property>
      <property name="ParentColor">0</property>
      <property name="Top">109</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="mgt_cliente_fone_fax" >
      <property name="Caption">mgt_cliente_fone_fax</property>
      <property name="DataField">mgt_cliente_fone_fax</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">607</property>
      <property name="Name">mgt_cliente_fone_fax</property>
      <property name="ParentColor">0</property>
      <property name="Top">125</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="mgt_cliente_fone_residencial" >
      <property name="Caption">mgt_cliente_fone_residencial</property>
      <property name="DataField">mgt_cliente_fone_residencial</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">450</property>
      <property name="Name">mgt_cliente_fone_residencial</property>
      <property name="ParentColor">0</property>
      <property name="Top">125</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="mgt_representante_nome" >
      <property name="Caption">mgt_representante_nome</property>
      <property name="DataField">mgt_representante_nome</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">475</property>
      <property name="Name">mgt_representante_nome</property>
      <property name="ParentColor">0</property>
      <property name="Top">157</property>
      <property name="Width">238</property>
    </object>
    <object class="Label" name="Label34" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;____/____/____&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">129</property>
      <property name="Name">Label34</property>
      <property name="ParentColor">0</property>
      <property name="Top">157</property>
      <property name="Width">171</property>
    </object>
    <object class="Label" name="mgt_cliente_codigo" >
      <property name="Caption">mgt_cliente_codigo</property>
      <property name="DataField">mgt_cliente_codigo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">543</property>
      <property name="Name">mgt_cliente_codigo</property>
      <property name="ParentColor">0</property>
      <property name="Top">37</property>
      <property name="Width">159</property>
    </object>
    <object class="Label" name="mgt_cliente_status_credito" >
      <property name="Caption">mgt_cliente_status_credito</property>
      <property name="DataField">mgt_cliente_status_credito</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">543</property>
      <property name="Name">mgt_cliente_status_credito</property>
      <property name="ParentColor">0</property>
      <property name="Top">53</property>
      <property name="Width">159</property>
    </object>
    <object class="Label" name="mgt_cliente_complemento" >
      <property name="Caption">mgt_cliente_complemento</property>
      <property name="DataField">mgt_cliente_complemento</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">583</property>
      <property name="Name">mgt_cliente_complemento</property>
      <property name="ParentColor">0</property>
      <property name="Top">77</property>
      <property name="Width">119</property>
    </object>
    <object class="Label" name="mgt_cliente_estado" >
      <property name="Caption">mgt_cliente_estado</property>
      <property name="DataField">mgt_cliente_estado</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">657</property>
      <property name="Name">mgt_cliente_estado</property>
      <property name="ParentColor">0</property>
      <property name="Top">93</property>
      <property name="Width">49</property>
    </object>
    <object class="Label" name="mgt_cliente_cep" >
      <property name="Caption">mgt_cliente_cep</property>
      <property name="DataField">mgt_cliente_cep</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">121</property>
      <property name="Name">mgt_cliente_cep</property>
      <property name="ParentColor">0</property>
      <property name="Top">109</property>
      <property name="Width">65</property>
    </object>
    <object class="Label" name="mgt_cliente_contato" >
      <property name="Caption">mgt_cliente_contato</property>
      <property name="DataField">mgt_cliente_contato</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">121</property>
      <property name="Name">mgt_cliente_contato</property>
      <property name="ParentColor">0</property>
      <property name="Top">125</property>
      <property name="Width">179</property>
    </object>
    <object class="Label" name="mgt_cliente_data_ultima_compra" >
      <property name="Caption">mgt_cliente_data_ultima_compra</property>
      <property name="DataField">mgt_cliente_data_ultima_compra</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">150</property>
      <property name="Name">mgt_cliente_data_ultima_compra</property>
      <property name="ParentColor">0</property>
      <property name="Top">199</property>
      <property name="Width">147</property>
    </object>
    <object class="Label" name="mgt_cliente_ultimo_valor" >
      <property name="Caption">mgt_cliente_ultimo_valor</property>
      <property name="DataField">mgt_cliente_ultimo_valor</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">150</property>
      <property name="Name">mgt_cliente_ultimo_valor</property>
      <property name="ParentColor">0</property>
      <property name="Top">216</property>
      <property name="Width">147</property>
    </object>
    <object class="Label" name="Label25" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Tel.: DDD:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">192</property>
      <property name="Name">Label25</property>
      <property name="ParentColor">0</property>
      <property name="Top">109</property>
      <property name="Width">63</property>
    </object>
    <object class="Label" name="Label26" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Ramal:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">289</property>
      <property name="Name">Label26</property>
      <property name="ParentColor">0</property>
      <property name="Top">109</property>
      <property name="Width">40</property>
    </object>
    <object class="Label" name="mgt_cliente_ddd" >
      <property name="Caption">mgt_cliente_ddd</property>
      <property name="DataField">mgt_cliente_ddd</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">255</property>
      <property name="Name">mgt_cliente_ddd</property>
      <property name="ParentColor">0</property>
      <property name="Top">109</property>
      <property name="Width">26</property>
    </object>
    <object class="Label" name="mgt_cliente_fone_ramal" >
      <property name="Caption">mgt_cliente_fone_ramal</property>
      <property name="DataField">mgt_cliente_fone_ramal</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">13</property>
      <property name="Left">330</property>
      <property name="Name">mgt_cliente_fone_ramal</property>
      <property name="ParentColor">0</property>
      <property name="Top">109</property>
      <property name="Width">48</property>
    </object>
    <object class="Label" name="Label41" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;___________________________________________&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">314</property>
      <property name="Name">Label41</property>
      <property name="ParentColor">0</property>
      <property name="Top">227</property>
      <property name="Width">397</property>
    </object>
    <object class="Label" name="Label16" >
      <property name="Alignment">agCenter</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Assinatura / Carimbo&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">427</property>
      <property name="Name">Label16</property>
      <property name="ParentColor">0</property>
      <property name="Top">249</property>
      <property name="Width">170</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Alignment">agCenter</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;FICHA DE VISITA&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">304</property>
      <property name="Name">Label2</property>
      <property name="ParentColor">0</property>
      <property name="Top">19</property>
      <property name="Width">103</property>
    </object>
    <object class="Label" name="apelido_empresa" >
      <property name="Alignment">agCenter</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Empresa &lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">62</property>
      <property name="Name">apelido_empresa</property>
      <property name="ParentColor"></property>
      <property name="Top">4</property>
      <property name="Width">643</property>
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
</object>
?>
