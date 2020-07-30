<?php
<object class="relcobrancarelacaoimp" name="relcobrancarelacaoimp" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Cobranca por Periodo]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">210</property>
  <property name="IsMaster">0</property>
  <property name="Name">relcobrancarelacaoimp</property>
  <property name="Width">784</property>
  <property name="OnCreate">relcobrancarelacaoimpCreate</property>
  <property name="jsOnLoad">relcobrancarelacaoimpJSLoad</property>
  <object class="DBRepeater" name="Linha_Detalhe" >
    <property name="BorderColor">#000000</property>
    <property name="BorderWidth">1</property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
    <property name="Height">111</property>
    <property name="Layout">
    <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Left">1</property>
    <property name="Name">Linha_Detalhe</property>
    <property name="Top">96</property>
    <property name="Width">759</property>
    <object class="Label" name="mgt_swap_cobranca_nome" >
      <property name="Caption">mgt_swap_cobranca_nome</property>
      <property name="DataField">mgt_swap_cobranca_nome</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">38</property>
      <property name="Left">344</property>
      <property name="Name">mgt_swap_cobranca_nome</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">140</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_data_emissao" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_swap_cobranca_data_emissao</property>
      <property name="DataField">mgt_swap_cobranca_data_emissao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">13</property>
      <property name="Left">108</property>
      <property name="Name">mgt_swap_cobranca_data_emissao</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_nota_fiscal" >
      <property name="Caption">mgt_swap_cobranca_nota_fiscal</property>
      <property name="DataField">mgt_swap_cobranca_nota_fiscal</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_swap_cobranca_nota_fiscal</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">40</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_dup_nro" >
      <property name="Caption">mgt_swap_cobranca_dup_nro</property>
      <property name="DataField">mgt_swap_cobranca_dup_nro</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">13</property>
      <property name="Left">46</property>
      <property name="Name">mgt_swap_cobranca_dup_nro</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">60</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_dup_cod_bco" >
      <property name="Caption">mgt_swap_cobranca_dup_cod_bco</property>
      <property name="DataField">mgt_swap_cobranca_dup_cod_bco</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">13</property>
      <property name="Left">184</property>
      <property name="Name">mgt_swap_cobranca_dup_cod_bco</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">38</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_codigo" >
      <property name="Caption">mgt_swap_cobranca_codigo</property>
      <property name="DataField">mgt_swap_cobranca_codigo</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">13</property>
      <property name="Left">224</property>
      <property name="Name">mgt_swap_cobranca_codigo</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">118</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_dup_vlr" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_cobranca_dup_vlr</property>
      <property name="DataField">mgt_swap_cobranca_dup_vlr</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">13</property>
      <property name="Left">102</property>
      <property name="Name">mgt_swap_cobranca_dup_vlr</property>
      <property name="ParentColor">0</property>
      <property name="Top">67</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_dup_dt_vcto" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_swap_cobranca_dup_dt_vcto</property>
      <property name="DataField">mgt_swap_cobranca_dup_dt_vcto</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">13</property>
      <property name="Left">192</property>
      <property name="Name">mgt_swap_cobranca_dup_dt_vcto</property>
      <property name="ParentColor">0</property>
      <property name="Top">67</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_dup_dt_pgto" >
      <property name="Alignment">agCenter</property>
      <property name="Caption">mgt_swap_cobranca_dup_dt_pgto</property>
      <property name="DataField">mgt_swap_cobranca_dup_dt_pgto</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">13</property>
      <property name="Left">276</property>
      <property name="Name">mgt_swap_cobranca_dup_dt_pgto</property>
      <property name="ParentColor">0</property>
      <property name="Top">67</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_dup_vlr_juros" >
      <property name="Alignment">agRight</property>
      <property name="Caption">mgt_swap_cobranca_dup_vlr_juros</property>
      <property name="DataField">mgt_swap_cobranca_dup_vlr_juros</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">13</property>
      <property name="Left">360</property>
      <property name="Name">mgt_swap_cobranca_dup_vlr_juros</property>
      <property name="ParentColor">0</property>
      <property name="Top">67</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_dup_cod_bancario" >
      <property name="Caption">mgt_swap_cobranca_dup_cod_bancario</property>
      <property name="DataField">mgt_swap_cobranca_dup_cod_bancario</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">13</property>
      <property name="Left">450</property>
      <property name="Name">mgt_swap_cobranca_dup_cod_bancario</property>
      <property name="ParentColor">0</property>
      <property name="Top">67</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_dup_observacao" >
      <property name="Caption">mgt_swap_cobranca_dup_observacao</property>
      <property name="DataField">mgt_swap_cobranca_dup_observacao</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">38</property>
      <property name="Left">540</property>
      <property name="Name">mgt_swap_cobranca_dup_observacao</property>
      <property name="ParentColor">0</property>
      <property name="Top">67</property>
      <property name="Width">215</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_contato" >
      <property name="Caption">mgt_swap_cobranca_contato</property>
      <property name="DataField">mgt_swap_cobranca_contato</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">38</property>
      <property name="Left">486</property>
      <property name="Name">mgt_swap_cobranca_contato</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_telefone" >
      <property name="Caption">mgt_swap_cobranca_telefone</property>
      <property name="DataField">mgt_swap_cobranca_telefone</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">38</property>
      <property name="Left">568</property>
      <property name="Name">mgt_swap_cobranca_telefone</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">85</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_email" >
      <property name="Caption">mgt_swap_cobranca_email</property>
      <property name="DataField">mgt_swap_cobranca_email</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">38</property>
      <property name="Left">655</property>
      <property name="Name">mgt_swap_cobranca_email</property>
      <property name="ParentColor">0</property>
      <property name="Top">5</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. Cobranca&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label13</property>
      <property name="ParentColor">0</property>
      <property name="Top">67</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Alignment">agCenter</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;DT Vencto&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">192</property>
      <property name="Name">Label15</property>
      <property name="ParentColor">0</property>
      <property name="Top">51</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Alignment">agCenter</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;DT Pagto&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">276</property>
      <property name="Name">Label18</property>
      <property name="ParentColor">0</property>
      <property name="Top">51</property>
      <property name="Width">74</property>
    </object>
    <object class="Label" name="Label20" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Vlr. Juros&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">360</property>
      <property name="Name">Label20</property>
      <property name="ParentColor">0</property>
      <property name="Top">51</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="Label24" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Cod. Bancario&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">450</property>
      <property name="Name">Label24</property>
      <property name="ParentColor">0</property>
      <property name="Top">51</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="Label26" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Observacao&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">540</property>
      <property name="Name">Label26</property>
      <property name="ParentColor">0</property>
      <property name="Top">51</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="mgt_swap_cobranca_finalidade" >
      <property name="Caption">mgt_swap_cobranca_finalidade</property>
      <property name="DataField">mgt_swap_cobranca_finalidade</property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">13</property>
      <property name="Left">4</property>
      <property name="Name">mgt_swap_cobranca_finalidade</property>
      <property name="ParentColor">0</property>
      <property name="Top">18</property>
      <property name="Width">40</property>
    </object>
  </object>
  <object class="Label" name="apelido_empresa" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Empresa&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">67</property>
    <property name="Name">apelido_empresa</property>
    <property name="Top">8</property>
    <property name="Width">379</property>
  </object>
  <object class="Label" name="Label3" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">471</property>
    <property name="Name">Label3</property>
    <property name="Top">8</property>
    <property name="Width">36</property>
  </object>
  <object class="Label" name="Label4" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Hora:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">592</property>
    <property name="Name">Label4</property>
    <property name="Top">8</property>
    <property name="Width">35</property>
  </object>
  <object class="Label" name="rel_data" >
    <property name="Caption">99/99/9999</property>
    <property name="Height">13</property>
    <property name="Left">513</property>
    <property name="Name">rel_data</property>
    <property name="Top">8</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="rel_hora" >
    <property name="Caption">99:99:99</property>
    <property name="Height">13</property>
    <property name="Left">632</property>
    <property name="Name">rel_hora</property>
    <property name="Top">8</property>
    <property name="Width">59</property>
  </object>
  <object class="Label" name="relatorio_titulo" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[Relatorio de Cobranca por Periodo - Relacao de Cobrancas]]></property>
    <property name="Font">
    <property name="Align">taCenter</property>
    <property name="Size">15px</property>
    </property>
    <property name="Height">18</property>
    <property name="Left">68</property>
    <property name="Name">relatorio_titulo</property>
    <property name="ParentFont">0</property>
    <property name="Top">25</property>
    <property name="Width">692</property>
  </object>
  <object class="Label" name="mgt_data_inicial" >
    <property name="Caption">mgt_data_inicial</property>
    <property name="Height">13</property>
    <property name="Left">75</property>
    <property name="Name">mgt_data_inicial</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="mgt_data_final" >
    <property name="Caption">mgt_data_final</property>
    <property name="Height">13</property>
    <property name="Left">251</property>
    <property name="Name">mgt_data_final</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data Inicial:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">1</property>
    <property name="Name">Label2</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">70</property>
  </object>
  <object class="Label" name="Label8" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Data Final:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">185</property>
    <property name="Name">Label8</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">65</property>
  </object>
  <object class="Label" name="Label9" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Ate&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">158</property>
    <property name="Name">Label9</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">54</property>
    <property name="Width">22</property>
  </object>
  <object class="Label" name="Label12" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cliente&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">345</property>
    <property name="Name">Label12</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">140</property>
  </object>
  <object class="Label" name="Label16" >
    <property name="Alignment">agCenter</property>
    <property name="Caption"><![CDATA[&lt;STRONG&gt;DT Emissao&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">109</property>
    <property name="Name">Label16</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">74</property>
  </object>
  <object class="Label" name="Label21" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Valor Total:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">337</property>
    <property name="Name">Label21</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="mgt_cobranca_total" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_cobranca_total</property>
    <property name="Height">13</property>
    <property name="Left">409</property>
    <property name="Name">mgt_cobranca_total</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="Label22" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;NF.&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">5</property>
    <property name="Name">Label22</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">40</property>
  </object>
  <object class="Label" name="Label5" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Cobranca&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">47</property>
    <property name="Name">Label5</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">60</property>
  </object>
  <object class="Label" name="Label7" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Banco&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">185</property>
    <property name="Name">Label7</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">38</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Codigo&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">225</property>
    <property name="Name">Label1</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">118</property>
  </object>
  <object class="Label" name="Label6" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Contato&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">487</property>
    <property name="Name">Label6</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">80</property>
  </object>
  <object class="Label" name="Label10" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Telefone&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">569</property>
    <property name="Name">Label10</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">85</property>
  </object>
  <object class="Label" name="Label11" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;E-mail&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">656</property>
    <property name="Name">Label11</property>
    <property name="ParentColor">0</property>
    <property name="Top">78</property>
    <property name="Width">100</property>
  </object>
  <object class="Label" name="Label14" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;Recebido:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">485</property>
    <property name="Name">Label14</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">58</property>
  </object>
  <object class="Label" name="mgt_cobranca_recebido" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_cobranca_recebido</property>
    <property name="Height">13</property>
    <property name="Left">547</property>
    <property name="Name">mgt_cobranca_recebido</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="Label17" >
    <property name="Caption"><![CDATA[&lt;STRONG&gt;A Receber:&lt;/STRONG&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">625</property>
    <property name="Name">Label17</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">66</property>
  </object>
  <object class="Label" name="mgt_cobranca_receber" >
    <property name="Alignment">agRight</property>
    <property name="Caption">mgt_cobranca_receber</property>
    <property name="Height">13</property>
    <property name="Left">694</property>
    <property name="Name">mgt_cobranca_receber</property>
    <property name="ParentColor">0</property>
    <property name="Top">54</property>
    <property name="Width">66</property>
  </object>
  <object class="Image" name="logo_relatorio" >
    <property name="Border">0</property>
    <property name="Height">40</property>
    <property name="ImageSource">imagens/logo_danfe.jpg</property>
    <property name="Left">5</property>
    <property name="Link"></property>
    <property name="LinkTarget"></property>
    <property name="Name">logo_relatorio</property>
    <property name="Proportional">1</property>
    <property name="Top">8</property>
    <property name="Width">40</property>
  </object>
</object>
?>
