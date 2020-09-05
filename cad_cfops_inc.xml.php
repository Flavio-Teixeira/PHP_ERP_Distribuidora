<?php
<object class="cadcfopsinc" name="cadcfopsinc" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">478</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cadcfopsinc</property>
  <property name="Width">755</property>
  <property name="OnCreate">cadcfopsincCreate</property>
  <property name="jsOnLoad">cadcfopsincJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CADASTRO - CFOPs - Inclusao]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Cadastro</property>
    <property name="Height">313</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Label" name="Label2" >
      <property name="Caption"><![CDATA[Descricao da Natureza de Operacao]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label2</property>
      <property name="Top">25</property>
      <property name="Width">181</property>
    </object>
    <object class="Edit" name="mgt_cfop_descricao" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">199</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_cfop_descricao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">21</property>
      <property name="Width">400</property>
      <property name="jsOnKeyPress">mgt_cfop_descricaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption">Tipo</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label3</property>
      <property name="Top">57</property>
      <property name="Width">35</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Alignment">agRight</property>
      <property name="Caption">CFOP Dentro do Estado</property>
      <property name="Height">13</property>
      <property name="Left">199</property>
      <property name="Name">Label4</property>
      <property name="Top">57</property>
      <property name="Width">133</property>
    </object>
    <object class="Edit" name="mgt_cfop_codigo_dentro" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">337</property>
      <property name="MaxLength">4</property>
      <property name="Name">mgt_cfop_codigo_dentro</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">53</property>
      <property name="Width">35</property>
      <property name="jsOnKeyPress">mgt_cfop_codigo_dentroJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cfop_codigo_dentroJSKeyUp</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Alignment">agRight</property>
      <property name="Caption">CFOP Fora do Estado</property>
      <property name="Height">13</property>
      <property name="Left">379</property>
      <property name="Name">Label5</property>
      <property name="Top">57</property>
      <property name="Width">107</property>
    </object>
    <object class="Edit" name="mgt_cfop_codigo_fora" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">491</property>
      <property name="MaxLength">4</property>
      <property name="Name">mgt_cfop_codigo_fora</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">53</property>
      <property name="Width">35</property>
      <property name="jsOnKeyPress">mgt_cfop_codigo_foraJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cfop_codigo_foraJSKeyUp</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Aliquota ICMS dentro de SP</property>
      <property name="Height">13</property>
      <property name="Left">173</property>
      <property name="Name">Label6</property>
      <property name="Top">86</property>
      <property name="Width">159</property>
    </object>
    <object class="Edit" name="mgt_cfop_aliquota_1" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">337</property>
      <property name="MaxLength">6</property>
      <property name="Name">mgt_cfop_aliquota_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">82</property>
      <property name="Width">40</property>
      <property name="jsOnKeyPress">mgt_cfop_aliquota_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cfop_aliquota_1JSKeyUp</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Aliquota ICMS para os Estados RS, PR, SC, RJ e MG</property>
      <property name="Height">13</property>
      <property name="Left">41</property>
      <property name="Name">Label7</property>
      <property name="Top">109</property>
      <property name="Width">291</property>
    </object>
    <object class="Edit" name="mgt_cfop_aliquota_2" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">337</property>
      <property name="MaxLength">6</property>
      <property name="Name">mgt_cfop_aliquota_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">105</property>
      <property name="Width">40</property>
      <property name="jsOnKeyPress">mgt_cfop_aliquota_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cfop_aliquota_2JSKeyUp</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Aliquota ICMS outros estados</property>
      <property name="Height">13</property>
      <property name="Left">164</property>
      <property name="Name">Label8</property>
      <property name="Top">132</property>
      <property name="Width">168</property>
    </object>
    <object class="Edit" name="mgt_cfop_aliquota_3" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">337</property>
      <property name="MaxLength">6</property>
      <property name="Name">mgt_cfop_aliquota_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">128</property>
      <property name="Width">40</property>
      <property name="jsOnKeyPress">mgt_cfop_aliquota_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cfop_aliquota_3JSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_cfop_tipo" >
      <property name="Height">21</property>
      <property name="Items"><![CDATA[a:2:{s:5:&quot;SAIDA&quot;;s:5:&quot;Saida&quot;;s:7:&quot;ENTRADA&quot;;s:7:&quot;Entrada&quot;;}]]></property>
      <property name="Left">66</property>
      <property name="Name">mgt_cfop_tipo</property>
      <property name="Top">53</property>
      <property name="Width">73</property>
      <property name="jsOnKeyPress">mgt_cfop_tipoJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Informacoes Complementares]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label1</property>
      <property name="Top">268</property>
      <property name="Width">170</property>
    </object>
    <object class="Edit" name="mgt_cfop_informacoes_complementares" >
      <property name="Color">#FFFFFF</property>
      <property name="Height">21</property>
      <property name="Left">14</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_cfop_informacoes_complementares</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">281</property>
      <property name="Width">703</property>
      <property name="jsOnKeyPress">mgt_cfop_informacoes_complementaresJSKeyPress</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Alignment">agRight</property>
      <property name="Caption">ICMS - CST</property>
      <property name="Height">13</property>
      <property name="Left">618</property>
      <property name="Name">Label15</property>
      <property name="Top">25</property>
      <property name="Width">60</property>
    </object>
    <object class="Edit" name="mgt_cfop_cst_natureza" >
      <property name="Height">21</property>
      <property name="Left">682</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_cfop_cst_natureza</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">21</property>
      <property name="Width">35</property>
      <property name="jsOnKeyPress">mgt_cfop_cst_naturezaJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cfop_cst_naturezaJSKeyUp</property>
    </object>
    <object class="GroupBox" name="GroupBox2" >
      <property name="Caption"><![CDATA[Dados da Substituicao Tributaria]]></property>
      <property name="Height">89</property>
      <property name="Left">379</property>
      <property name="Name">GroupBox2</property>
      <property name="Top">76</property>
      <property name="Width">338</property>
      <object class="CheckBox" name="mgt_cfop_st" >
        <property name="Alignment">agLeft</property>
        <property name="Caption"><![CDATA[Substituicao Tributaria]]></property>
        <property name="Height">21</property>
        <property name="Left">9</property>
        <property name="Name">mgt_cfop_st</property>
        <property name="Top">14</property>
        <property name="Width">148</property>
        <property name="jsOnKeyPress">mgt_cfop_stJSKeyPress</property>
      </object>
      <object class="Edit" name="mgt_cfop_codigo_dentro_2" >
        <property name="Height">21</property>
        <property name="Left">130</property>
        <property name="MaxLength">4</property>
        <property name="Name">mgt_cfop_codigo_dentro_2</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">35</property>
        <property name="Width">35</property>
        <property name="jsOnKeyPress">mgt_cfop_codigo_dentro_2JSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cfop_codigo_dentro_2JSKeyUp</property>
      </object>
      <object class="Edit" name="mgt_cfop_codigo_fora_2" >
        <property name="Height">21</property>
        <property name="Left">130</property>
        <property name="MaxLength">4</property>
        <property name="Name">mgt_cfop_codigo_fora_2</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">59</property>
        <property name="Width">35</property>
        <property name="jsOnKeyPress">mgt_cfop_codigo_fora_2JSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cfop_codigo_fora_2JSKeyUp</property>
      </object>
      <object class="Label" name="Label13" >
        <property name="Caption">ICMS - CST</property>
        <property name="Height">13</property>
        <property name="Left">175</property>
        <property name="Name">Label13</property>
        <property name="Top">39</property>
        <property name="Width">58</property>
      </object>
      <object class="Edit" name="mgt_cfop_cst" >
        <property name="Height">21</property>
        <property name="Left">240</property>
        <property name="MaxLength">3</property>
        <property name="Name">mgt_cfop_cst</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">35</property>
        <property name="Width">35</property>
        <property name="jsOnKeyPress">mgt_cfop_cstJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cfop_cstJSKeyUp</property>
      </object>
      <object class="Label" name="Label11" >
        <property name="Caption">CFOP Dentro do Estado</property>
        <property name="Height">13</property>
        <property name="Left">9</property>
        <property name="Name">Label11</property>
        <property name="Top">39</property>
        <property name="Width">119</property>
      </object>
      <object class="Label" name="Label12" >
        <property name="Caption">CFOP Fora do Estado</property>
        <property name="Height">13</property>
        <property name="Left">9</property>
        <property name="Name">Label12</property>
        <property name="Top">63</property>
        <property name="Width">119</property>
      </object>
      <object class="Label" name="Label14" >
        <property name="Caption"><![CDATA[&lt;STRONG&gt;Ex.: 010&lt;/STRONG&gt;]]></property>
        <property name="Height">13</property>
        <property name="Left">279</property>
        <property name="Name">Label14</property>
        <property name="Top">39</property>
        <property name="Width">51</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox4" >
      <property name="Caption">Simples Nacional</property>
      <property name="Height">70</property>
      <property name="Left">14</property>
      <property name="Name">GroupBox4</property>
      <property name="Top">191</property>
      <property name="Width">508</property>
      <object class="CheckBox" name="mgt_cfop_simples_nacional" >
        <property name="Alignment">agLeft</property>
        <property name="Caption">Simples Nacional</property>
        <property name="Height">21</property>
        <property name="Left">395</property>
        <property name="Name">mgt_cfop_simples_nacional</property>
        <property name="Top">17</property>
        <property name="Width">105</property>
        <property name="jsOnKeyPress">mgt_cfop_simples_nacionalJSKeyPress</property>
      </object>
      <object class="Edit" name="mgt_cfop_simples_nacional_aliquota" >
        <property name="Height">21</property>
        <property name="Left">350</property>
        <property name="MaxLength">7</property>
        <property name="Name">mgt_cfop_simples_nacional_aliquota</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">17</property>
        <property name="Width">40</property>
        <property name="jsOnKeyPress">mgt_cfop_simples_nacional_aliquotaJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cfop_simples_nacional_aliquotaJSKeyUp</property>
      </object>
      <object class="Edit" name="mgt_cfop_simples_nacional_csosn" >
        <property name="Height">21</property>
        <property name="Left">350</property>
        <property name="MaxLength">3</property>
        <property name="Name">mgt_cfop_simples_nacional_csosn</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">40</property>
        <property name="Width">40</property>
        <property name="jsOnKeyPress">mgt_cfop_simples_nacional_csosnJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cfop_simples_nacional_csosnJSKeyUp</property>
      </object>
      <object class="Label" name="Label9" >
        <property name="Caption"><![CDATA[Aliquota de Credito do ICMS que pode ser aproveitado nos termos do art. 23 da LC 123 (Simples Nacional)]]></property>
        <property name="Height">25</property>
        <property name="Left">8</property>
        <property name="Name">Label9</property>
        <property name="Top">17</property>
        <property name="Width">340</property>
      </object>
      <object class="Label" name="Label10" >
        <property name="Caption"><![CDATA[Codigo de Situacao da Operacao do Simples Nacional (CSOSN)]]></property>
        <property name="Height">13</property>
        <property name="Left">8</property>
        <property name="Name">Label10</property>
        <property name="Top">48</property>
        <property name="Width">340</property>
      </object>
    </object>
    <object class="Label" name="Label16" >
      <property name="Caption"><![CDATA[Percentual da Reducao de Base de Calculo do ICMS (%)]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label16</property>
      <property name="Top">169</property>
      <property name="Width">270</property>
    </object>
    <object class="Edit" name="mgt_cfop_reducao_icms" >
      <property name="Height">21</property>
      <property name="Left">287</property>
      <property name="Name">mgt_cfop_reducao_icms</property>
      <property name="Top">165</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_cfop_reducao_icmsJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cfop_reducao_icmsJSKeyUp</property>
    </object>
    <object class="GroupBox" name="GroupBox5" >
      <property name="Caption">PIS/COFINS</property>
      <property name="Height">70</property>
      <property name="Left">522</property>
      <property name="Name">GroupBox5</property>
      <property name="Top">191</property>
      <property name="Width">195</property>
      <object class="Label" name="Label17" >
        <property name="Caption">PIS - CST</property>
        <property name="Height">13</property>
        <property name="Left">7</property>
        <property name="Name">Label17</property>
        <property name="Top">17</property>
        <property name="Width">70</property>
      </object>
      <object class="Label" name="Label20" >
        <property name="Caption">COFINS - CST</property>
        <property name="Height">13</property>
        <property name="Left">7</property>
        <property name="Name">Label20</property>
        <property name="Top">44</property>
        <property name="Width">70</property>
      </object>
      <object class="Edit" name="mgt_cfop_pis_cst" >
        <property name="Height">21</property>
        <property name="Left">80</property>
        <property name="MaxLength">2</property>
        <property name="Name">mgt_cfop_pis_cst</property>
        <property name="Top">13</property>
        <property name="Width">20</property>
        <property name="jsOnKeyPress">mgt_cfop_pis_cstJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cfop_pis_cstJSKeyUp</property>
      </object>
      <object class="Edit" name="mgt_cfop_cofins_cst" >
        <property name="Height">21</property>
        <property name="Left">80</property>
        <property name="MaxLength">2</property>
        <property name="Name">mgt_cfop_cofins_cst</property>
        <property name="Top">40</property>
        <property name="Width">20</property>
        <property name="jsOnKeyPress">mgt_cfop_cofins_cstJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cfop_cofins_cstJSKeyUp</property>
      </object>
      <object class="Label" name="Label21" >
        <property name="Caption">Aliquota</property>
        <property name="Height">13</property>
        <property name="Left">103</property>
        <property name="Name">Label21</property>
        <property name="Top">17</property>
        <property name="Width">40</property>
      </object>
      <object class="Label" name="Label22" >
        <property name="Caption">Aliquota</property>
        <property name="Height">13</property>
        <property name="Left">103</property>
        <property name="Name">Label22</property>
        <property name="Top">44</property>
        <property name="Width">40</property>
      </object>
      <object class="Edit" name="mgt_cfop_pis_aliquota" >
        <property name="Height">21</property>
        <property name="Left">148</property>
        <property name="Name">mgt_cfop_pis_aliquota</property>
        <property name="Top">13</property>
        <property name="Width">40</property>
        <property name="jsOnKeyPress">mgt_cfop_pis_aliquotaJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cfop_pis_aliquotaJSKeyUp</property>
      </object>
      <object class="Edit" name="mgt_cfop_cofins_aliquota" >
        <property name="Height">21</property>
        <property name="Left">148</property>
        <property name="Name">mgt_cfop_cofins_aliquota</property>
        <property name="Top">40</property>
        <property name="Width">40</property>
        <property name="jsOnKeyPress">mgt_cfop_cofins_aliquotaJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cfop_cofins_aliquotaJSKeyUp</property>
      </object>
    </object>
    <object class="Label" name="Label26" >
      <property name="Alignment">agRight</property>
      <property name="Caption">IPI - CST</property>
      <property name="Height">14</property>
      <property name="Left">618</property>
      <property name="Name">Label26</property>
      <property name="Top">49</property>
      <property name="Width">59</property>
    </object>
    <object class="Edit" name="mgt_cfop_ipi_cst" >
      <property name="Height">21</property>
      <property name="Left">682</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_cfop_ipi_cst</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">45</property>
      <property name="Width">35</property>
      <property name="jsOnKeyPress">mgt_cfop_ipi_cstJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cfop_ipi_cstJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">355</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">647</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_incluir" >
      <property name="Caption">Incluir</property>
      <property name="Height">25</property>
      <property name="Left">327</property>
      <property name="Name">bt_incluir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_incluirClick</property>
    </object>
    <object class="Panel" name="Panel1" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#F4F1AA</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel1</property>
      <property name="ParentColor">0</property>
      <property name="Top">20</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label18</property>
      <property name="Top">18</property>
      <property name="Width">131</property>
    </object>
    <object class="Panel" name="Panel2" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#EBE9ED</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel2</property>
      <property name="ParentColor">0</property>
      <property name="Top">33</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label19" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label19</property>
      <property name="Top">32</property>
      <property name="Width">148</property>
    </object>
  </object>
  <object class="Label" name="MSG_Erro" >
    <property name="Alignment">agCenter</property>
    <property name="Font">
    <property name="Color">#FF0000</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">MSG_Erro</property>
    <property name="ParentFont">0</property>
    <property name="Top">18</property>
    <property name="Width">730</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">693</property>
        <property name="Top">418</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
