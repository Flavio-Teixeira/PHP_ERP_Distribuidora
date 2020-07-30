<?php
<object class="relcontaspagarimp" name="relcontaspagarimp" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Relatorio de Contas a Pagar]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">150</property>
  <property name="IsMaster">0</property>
  <property name="Name">relcontaspagarimp</property>
  <property name="Width">1625</property>
  <property name="OnCreate">relcontaspagarimpCreate</property>
  <property name="jsOnLoad">relcontaspagarimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
    <property name="Height">48</property>
    <property name="Layout">
    <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">8</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">96</property>
    <property name="Width">1601</property>
    <object class="Label" name="mgt_conta_pagar_descricao" >
      <property name="Caption">mgt_conta_pagar_descricao</property>
      <property name="DataField">mgt_conta_pagar_descricao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">38</property>
      <property name="Left">204</property>
      <property name="Name">mgt_conta_pagar_descricao</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">200</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_data" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_conta_pagar_data</property>
      <property name="DataField">mgt_conta_pagar_data</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">116</property>
      <property name="Name">mgt_conta_pagar_data</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_nro" >
      <property name="Caption">mgt_conta_pagar_nro</property>
      <property name="DataField">mgt_conta_pagar_nro</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_conta_pagar_nro</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">40</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_conta" >
      <property name="Caption">mgt_conta_pagar_conta</property>
      <property name="DataField">mgt_conta_pagar_conta</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">51</property>
      <property name="Name">mgt_conta_pagar_conta</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">60</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_valor" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_conta_pagar_valor</property>
      <property name="DataField">mgt_conta_pagar_valor</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">416</property>
      <property name="Name">mgt_conta_pagar_valor</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_observacao" >
      <property name="Caption">mgt_conta_pagar_observacao</property>
      <property name="DataField">mgt_conta_pagar_observacao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">38</property>
      <property name="Left">956</property>
      <property name="Name">mgt_conta_pagar_observacao</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">315</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_fornecedor_nome" >
      <property name="Caption">mgt_conta_pagar_fornecedor_nome</property>
      <property name="DataField">mgt_conta_pagar_fornecedor_nome</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">38</property>
      <property name="Left">1358</property>
      <property name="Name">mgt_conta_pagar_fornecedor_nome</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">150</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_data_pagto" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_conta_pagar_data_pagto</property>
      <property name="DataField">mgt_conta_pagar_data_pagto</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">1276</property>
      <property name="Name">mgt_conta_pagar_data_pagto</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_data_emissao" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_conta_pagar_data_emissao</property>
      <property name="DataField">mgt_conta_pagar_data_emissao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">1516</property>
      <property name="Name">mgt_conta_pagar_data_emissao</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_valor_juros" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_conta_pagar_valor_juros</property>
      <property name="DataField">mgt_conta_pagar_valor_juros</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">499</property>
      <property name="Name">mgt_conta_pagar_valor_juros</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_valor_desconto" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_conta_pagar_valor_desconto</property>
      <property name="DataField">mgt_conta_pagar_valor_desconto</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">588</property>
      <property name="Name">mgt_conta_pagar_valor_desconto</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_valor_ser_pago" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_conta_pagar_valor_ser_pago</property>
      <property name="DataField">mgt_conta_pagar_valor_ser_pago</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">676</property>
      <property name="Name">mgt_conta_pagar_valor_ser_pago</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_saldo" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_conta_pagar_saldo</property>
      <property name="DataField">mgt_conta_pagar_saldo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">764</property>
      <property name="Name">mgt_conta_pagar_saldo</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_conta_pagar_status" >
      <property name="Caption">mgt_conta_pagar_status</property>
      <property name="DataField">mgt_conta_pagar_status</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">13</property>
      <property name="Left">856</property>
      <property name="Name">mgt_conta_pagar_status</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">80</property>
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
    <property name="Caption"><![CDATA[Relatorio de Contas a Pagar]]></property>
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
    <property name="Left">51</property>
    <property name="Name">mgt_data_inicial</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label8" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label8</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">40</property>
  </object>
  <object class="Label" name="Label12" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Descricao&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">212</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">200</property>
  </object>
  <object class="Label" name="Label16" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">124</property>
    <property name="Name">Label16</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="Label21" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor Total:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">286</property>
    <property name="Name">Label21</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="mgt_contas_pagar_total" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_contas_pagar_total</property>
    <property name="Height">13</property>
    <property name="Left">358</property>
    <property name="Name">mgt_contas_pagar_total</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label22" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Lacto&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">12</property>
    <property name="Name">Label22</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">40</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Conta&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">59</property>
    <property name="Name">Label5</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">60</property>
  </object>
  <object class="Label" name="Label13" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Titulo (R$)&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">424</property>
    <property name="Name">Label13</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label24" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Status&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">864</property>
    <property name="Name">Label24</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Juros (R$)&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">507</property>
    <property name="Name">Label1</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Desc. (R$)&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">596</property>
    <property name="Name">Label2</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label6" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Pagar (R$)&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">684</property>
    <property name="Name">Label6</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label7" >
    <property name="Alignment">agRight</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Saldo (R$)&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">772</property>
    <property name="Name">Label7</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label9" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Observacao&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">964</property>
    <property name="Name">Label9</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">315</property>
  </object>
  <object class="Label" name="Label10" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;DT Pagto&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">1284</property>
    <property name="Name">Label10</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="Label11" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;DT Emissao&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">1524</property>
    <property name="Name">Label11</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="Label14" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Fornecedor&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">1366</property>
    <property name="Name">Label14</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">150</property>
  </object>
  <object class="Label" name="Label17" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;ate&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">141</property>
    <property name="Name">Label17</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">27</property>
  </object>
  <object class="Label" name="mgt_data_final" >
    <property name="Caption">mgt_data_final</property>
    <property name="Height">13</property>
    <property name="Left">176</property>
    <property name="Name">mgt_data_final</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label15" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor Pago:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">472</property>
    <property name="Name">Label15</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="mgt_contas_pagar_pago" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_contas_pagar_pago</property>
    <property name="Height">13</property>
    <property name="Left">545</property>
    <property name="Name">mgt_contas_pagar_pago</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label19" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor a Pagar:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">653</property>
    <property name="Name">Label19</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">85</property>
  </object>
  <object class="Label" name="mgt_contas_pagar_pagar" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_contas_pagar_pagar</property>
    <property name="Height">13</property>
    <property name="Left">747</property>
    <property name="Name">mgt_contas_pagar_pagar</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
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
