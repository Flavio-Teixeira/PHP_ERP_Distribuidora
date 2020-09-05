<?php
<object class="nfconhecimentoscteinc" name="nfconhecimentoscteinc" baseclass="Page">
  <property name="Background"></property>
  <property name="Caption">Page1</property>
  <property name="DocType">dtNone</property>
  <property name="Height">1641</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">nfconhecimentoscteinc</property>
  <property name="Width">755</property>
  <property name="OnCreate">nfconhecimentoscteincCreate</property>
  <property name="jsOnLoad">nfconhecimentoscteincJSLoad</property>
  <object class="Label" name="Label1" >
    <property name="Caption">NOTAS FISCAIS - Conhecimentos (CT-e)</property>
    <property name="Height">13</property>
    <property name="Name">Label1</property>
    <property name="Width">755</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_tipo" >
    <property name="Caption">Tipo do CT-e</property>
    <property name="Height">13</property>
    <property name="Left">129</property>
    <property name="Name">lbl_mgt_cte_tipo</property>
    <property name="Top">34</property>
    <property name="Width">65</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_tipo_servico" >
    <property name="Caption"><![CDATA[Tipo do Servico]]></property>
    <property name="Height">13</property>
    <property name="Left">200</property>
    <property name="Name">lbl_mgt_cte_tipo_servico</property>
    <property name="Top">34</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_tomador" >
    <property name="Caption"><![CDATA[Tomador do Servico]]></property>
    <property name="Height">13</property>
    <property name="Left">280</property>
    <property name="Name">lbl_mgt_cte_tomador</property>
    <property name="Top">34</property>
    <property name="Width">95</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_forma_pagto" >
    <property name="Caption">Forma de Pagamento</property>
    <property name="Height">13</property>
    <property name="Left">382</property>
    <property name="Name">lbl_mgt_cte_forma_pagto</property>
    <property name="Top">34</property>
    <property name="Width">105</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_modelo" >
    <property name="Caption">Modelo</property>
    <property name="Height">13</property>
    <property name="Left">6</property>
    <property name="Name">lbl_mgt_cte_modelo</property>
    <property name="Top">34</property>
    <property name="Width">35</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_serie" >
    <property name="Caption"><![CDATA[Serie]]></property>
    <property name="Height">13</property>
    <property name="Left">51</property>
    <property name="Name">lbl_mgt_cte_serie</property>
    <property name="Top">34</property>
    <property name="Width">25</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_numero" >
    <property name="Caption"><![CDATA[Numero]]></property>
    <property name="Height">13</property>
    <property name="Left">83</property>
    <property name="Name">lbl_mgt_cte_numero</property>
    <property name="Top">34</property>
    <property name="Width">40</property>
  </object>
  <object class="Edit" name="mgt_cte_tomador" >
    <property name="Color">#EBE9ED</property>
    <property name="Height">21</property>
    <property name="Left">280</property>
    <property name="Name">mgt_cte_tomador</property>
    <property name="ParentColor">0</property>
    <property name="ReadOnly">1</property>
    <property name="Text">Destinatario</property>
    <property name="Top">47</property>
    <property name="Width">95</property>
    <property name="jsOnKeyPress">mgt_cte_tomadorJSKeyPress</property>
  </object>
  <object class="Edit" name="mgt_cte_tipo" >
    <property name="Color">#EBE9ED</property>
    <property name="Height">21</property>
    <property name="Left">129</property>
    <property name="Name">mgt_cte_tipo</property>
    <property name="ParentColor">0</property>
    <property name="ReadOnly">1</property>
    <property name="Text">Normal</property>
    <property name="Top">47</property>
    <property name="Width">65</property>
    <property name="jsOnKeyPress">mgt_cte_tipoJSKeyPress</property>
  </object>
  <object class="Edit" name="mgt_cte_tipo_servico" >
    <property name="Color">#EBE9ED</property>
    <property name="Height">21</property>
    <property name="Left">200</property>
    <property name="Name">mgt_cte_tipo_servico</property>
    <property name="ParentColor">0</property>
    <property name="ReadOnly">1</property>
    <property name="Text">Normal</property>
    <property name="Top">47</property>
    <property name="Width">75</property>
    <property name="jsOnKeyPress">mgt_cte_tipo_servicoJSKeyPress</property>
  </object>
  <object class="Edit" name="mgt_cte_modelo" >
    <property name="Color">#EBE9ED</property>
    <property name="Height">21</property>
    <property name="Left">6</property>
    <property name="MaxLength">2</property>
    <property name="Name">mgt_cte_modelo</property>
    <property name="ParentColor">0</property>
    <property name="ReadOnly">1</property>
    <property name="Text">57</property>
    <property name="Top">47</property>
    <property name="Width">35</property>
    <property name="jsOnKeyPress">mgt_cte_modeloJSKeyPress</property>
  </object>
  <object class="Edit" name="mgt_cte_serie" >
    <property name="Color">#EBE9ED</property>
    <property name="Height">21</property>
    <property name="Left">51</property>
    <property name="MaxLength">3</property>
    <property name="Name">mgt_cte_serie</property>
    <property name="ParentColor">0</property>
    <property name="ReadOnly">1</property>
    <property name="Text">1</property>
    <property name="Top">47</property>
    <property name="Width">25</property>
    <property name="jsOnKeyPress">mgt_cte_serieJSKeyPress</property>
  </object>
  <object class="Edit" name="mgt_cte_numero" >
    <property name="Color">#F4F1AA</property>
    <property name="Height">21</property>
    <property name="Left">83</property>
    <property name="MaxLength">11</property>
    <property name="Name">mgt_cte_numero</property>
    <property name="ParentColor">0</property>
    <property name="Top">47</property>
    <property name="Width">40</property>
    <property name="jsOnKeyPress">mgt_cte_numeroJSKeyPress</property>
    <property name="jsOnKeyUp">mgt_cte_numeroJSKeyUp</property>
  </object>
  <object class="ComboBox" name="mgt_cte_forma_pagto" >
    <property name="Color">#F4F1AA</property>
    <property name="Height">21</property>
    <property name="ItemIndex">1</property>
    <property name="Items"><![CDATA[a:3:{i:1;s:7:&quot;A Pagar&quot;;i:0;s:4:&quot;Pago&quot;;i:2;s:6:&quot;Outros&quot;;}]]></property>
    <property name="Left">382</property>
    <property name="Name">mgt_cte_forma_pagto</property>
    <property name="ParentColor">0</property>
    <property name="Top">47</property>
    <property name="Width">105</property>
    <property name="jsOnKeyPress">mgt_cte_forma_pagtoJSKeyPress</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_cfop" >
    <property name="Caption">CFOP</property>
    <property name="Height">13</property>
    <property name="Left">493</property>
    <property name="Name">lbl_mgt_cte_cfop</property>
    <property name="Top">34</property>
    <property name="Width">35</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_natureza_operacao" >
    <property name="Caption"><![CDATA[Natureza da Prestacao]]></property>
    <property name="Height">13</property>
    <property name="Left">537</property>
    <property name="Name">lbl_mgt_cte_natureza_operacao</property>
    <property name="Top">34</property>
    <property name="Width">210</property>
  </object>
  <object class="Edit" name="mgt_cte_cfop" >
    <property name="Color">#F4F1AA</property>
    <property name="Height">21</property>
    <property name="Left">493</property>
    <property name="MaxLength">4</property>
    <property name="Name">mgt_cte_cfop</property>
    <property name="ParentColor">0</property>
    <property name="Text">5352</property>
    <property name="Top">47</property>
    <property name="Width">35</property>
    <property name="jsOnKeyPress">mgt_cte_cfopJSKeyPress</property>
    <property name="jsOnKeyUp">mgt_cte_cfopJSKeyUp</property>
  </object>
  <object class="Edit" name="mgt_cte_natureza_operacao" >
    <property name="Color">#F4F1AA</property>
    <property name="Height">21</property>
    <property name="Left">537</property>
    <property name="MaxLength">60</property>
    <property name="Name">mgt_cte_natureza_operacao</property>
    <property name="ParentColor">0</property>
    <property name="Text">TRANSPORTE</property>
    <property name="Top">47</property>
    <property name="Width">210</property>
    <property name="jsOnKeyPress">mgt_cte_natureza_operacaoJSKeyPress</property>
  </object>
  <object class="Label" name="lbl_origem" >
    <property name="Caption"><![CDATA[Origem da Prestacao:]]></property>
    <property name="Height">13</property>
    <property name="Left">6</property>
    <property name="Name">lbl_origem</property>
    <property name="Top">75</property>
    <property name="Width">110</property>
  </object>
  <object class="Label" name="lbl_destino" >
    <property name="Caption"><![CDATA[Destino da Prestacao:]]></property>
    <property name="Height">13</property>
    <property name="Left">382</property>
    <property name="Name">lbl_destino</property>
    <property name="Top">75</property>
    <property name="Width">110</property>
  </object>
  <object class="ComboBox" name="mgt_cte_origem_estado" >
    <property name="Color">#F4F1AA</property>
    <property name="Height">21</property>
    <property name="ItemIndex">SP</property>
    <property name="Items"><![CDATA[a:27:{s:2:&quot;AC&quot;;s:2:&quot;AC&quot;;s:2:&quot;AL&quot;;s:2:&quot;AL&quot;;s:2:&quot;AP&quot;;s:2:&quot;AP&quot;;s:2:&quot;AM&quot;;s:2:&quot;AM&quot;;s:2:&quot;BA&quot;;s:2:&quot;BA&quot;;s:2:&quot;CE&quot;;s:2:&quot;CE&quot;;s:2:&quot;DF&quot;;s:2:&quot;DF&quot;;s:2:&quot;ES&quot;;s:2:&quot;ES&quot;;s:2:&quot;GO&quot;;s:2:&quot;GO&quot;;s:2:&quot;MA&quot;;s:2:&quot;MA&quot;;s:2:&quot;MT&quot;;s:2:&quot;MT&quot;;s:2:&quot;MS&quot;;s:2:&quot;MS&quot;;s:2:&quot;MG&quot;;s:2:&quot;MG&quot;;s:2:&quot;PA&quot;;s:2:&quot;PA&quot;;s:2:&quot;PB&quot;;s:2:&quot;PB&quot;;s:2:&quot;PR&quot;;s:2:&quot;PR&quot;;s:2:&quot;PE&quot;;s:2:&quot;PE&quot;;s:2:&quot;PI&quot;;s:2:&quot;PI&quot;;s:2:&quot;RN&quot;;s:2:&quot;RN&quot;;s:2:&quot;RS&quot;;s:2:&quot;RS&quot;;s:2:&quot;RJ&quot;;s:2:&quot;RJ&quot;;s:2:&quot;RO&quot;;s:2:&quot;RO&quot;;s:2:&quot;RR&quot;;s:2:&quot;RR&quot;;s:2:&quot;SC&quot;;s:2:&quot;SC&quot;;s:2:&quot;SP&quot;;s:2:&quot;SP&quot;;s:2:&quot;SE&quot;;s:2:&quot;SE&quot;;s:2:&quot;TO&quot;;s:2:&quot;TO&quot;;}]]></property>
    <property name="Left">6</property>
    <property name="Name">mgt_cte_origem_estado</property>
    <property name="ParentColor">0</property>
    <property name="Top">104</property>
    <property name="Width">45</property>
    <property name="jsOnKeyPress">mgt_cte_origem_estadoJSKeyPress</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_origem_estado" >
    <property name="Caption">Estado</property>
    <property name="Height">13</property>
    <property name="Left">6</property>
    <property name="Name">lbl_mgt_cte_origem_estado</property>
    <property name="Top">91</property>
    <property name="Width">45</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_origem_cidade" >
    <property name="Caption">Cidade</property>
    <property name="Height">13</property>
    <property name="Left">60</property>
    <property name="Name">lbl_mgt_cte_origem_cidade</property>
    <property name="Top">91</property>
    <property name="Width">75</property>
  </object>
  <object class="Edit" name="mgt_cte_origem_cidade" >
    <property name="Color">#F4F1AA</property>
    <property name="Height">21</property>
    <property name="Left">60</property>
    <property name="MaxLength">60</property>
    <property name="Name">mgt_cte_origem_cidade</property>
    <property name="ParentColor">0</property>
    <property name="Top">104</property>
    <property name="Width">315</property>
    <property name="jsOnKeyPress">mgt_cte_origem_cidadeJSKeyPress</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_destino_estado" >
    <property name="Caption">Estado</property>
    <property name="Height">13</property>
    <property name="Left">382</property>
    <property name="Name">lbl_mgt_cte_destino_estado</property>
    <property name="Top">91</property>
    <property name="Width">45</property>
  </object>
  <object class="ComboBox" name="mgt_cte_destino_estado" >
    <property name="Color">#F4F1AA</property>
    <property name="Height">21</property>
    <property name="ItemIndex">SP</property>
    <property name="Items"><![CDATA[a:27:{s:2:&quot;AC&quot;;s:2:&quot;AC&quot;;s:2:&quot;AL&quot;;s:2:&quot;AL&quot;;s:2:&quot;AP&quot;;s:2:&quot;AP&quot;;s:2:&quot;AM&quot;;s:2:&quot;AM&quot;;s:2:&quot;BA&quot;;s:2:&quot;BA&quot;;s:2:&quot;CE&quot;;s:2:&quot;CE&quot;;s:2:&quot;DF&quot;;s:2:&quot;DF&quot;;s:2:&quot;ES&quot;;s:2:&quot;ES&quot;;s:2:&quot;GO&quot;;s:2:&quot;GO&quot;;s:2:&quot;MA&quot;;s:2:&quot;MA&quot;;s:2:&quot;MT&quot;;s:2:&quot;MT&quot;;s:2:&quot;MS&quot;;s:2:&quot;MS&quot;;s:2:&quot;MG&quot;;s:2:&quot;MG&quot;;s:2:&quot;PA&quot;;s:2:&quot;PA&quot;;s:2:&quot;PB&quot;;s:2:&quot;PB&quot;;s:2:&quot;PR&quot;;s:2:&quot;PR&quot;;s:2:&quot;PE&quot;;s:2:&quot;PE&quot;;s:2:&quot;PI&quot;;s:2:&quot;PI&quot;;s:2:&quot;RN&quot;;s:2:&quot;RN&quot;;s:2:&quot;RS&quot;;s:2:&quot;RS&quot;;s:2:&quot;RJ&quot;;s:2:&quot;RJ&quot;;s:2:&quot;RO&quot;;s:2:&quot;RO&quot;;s:2:&quot;RR&quot;;s:2:&quot;RR&quot;;s:2:&quot;SC&quot;;s:2:&quot;SC&quot;;s:2:&quot;SP&quot;;s:2:&quot;SP&quot;;s:2:&quot;SE&quot;;s:2:&quot;SE&quot;;s:2:&quot;TO&quot;;s:2:&quot;TO&quot;;}]]></property>
    <property name="Left">382</property>
    <property name="Name">mgt_cte_destino_estado</property>
    <property name="ParentColor">0</property>
    <property name="Top">104</property>
    <property name="Width">45</property>
    <property name="jsOnKeyPress">mgt_cte_destino_estadoJSKeyPress</property>
  </object>
  <object class="Edit" name="mgt_cte_destino_cidade" >
    <property name="Color">#F4F1AA</property>
    <property name="Height">21</property>
    <property name="Left">436</property>
    <property name="MaxLength">60</property>
    <property name="Name">mgt_cte_destino_cidade</property>
    <property name="ParentColor">0</property>
    <property name="Top">104</property>
    <property name="Width">311</property>
    <property name="jsOnKeyPress">mgt_cte_destino_cidadeJSKeyPress</property>
  </object>
  <object class="Label" name="lbl_mgt_cte_destino_cidade" >
    <property name="Caption">Cidade</property>
    <property name="Height">13</property>
    <property name="Left">436</property>
    <property name="Name">lbl_mgt_cte_destino_cidade</property>
    <property name="Top">91</property>
    <property name="Width">75</property>
  </object>
  <object class="GroupBox" name="grp_remetente" >
    <property name="Caption">Remetente</property>
    <property name="Height">192</property>
    <property name="Left">6</property>
    <property name="Name">grp_remetente</property>
    <property name="Top">125</property>
    <property name="Width">369</property>
    <object class="Label" name="Label17" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Razao Social]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label17</property>
      <property name="Top">45</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Endereco]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label18</property>
      <property name="Top">93</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label19" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Inscricao Estadual]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label19</property>
      <property name="Top">69</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label20" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Bairro</property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label20</property>
      <property name="Top">118</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label21" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Cidade</property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label21</property>
      <property name="Top">141</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label22" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Estado</property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label22</property>
      <property name="Top">166</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label23" >
      <property name="Caption">CEP</property>
      <property name="Height">13</property>
      <property name="Left">138</property>
      <property name="Name">Label23</property>
      <property name="Top">166</property>
      <property name="Width">25</property>
    </object>
    <object class="Label" name="Label24" >
      <property name="Caption"><![CDATA[Pais]]></property>
      <property name="Height">13</property>
      <property name="Left">234</property>
      <property name="Name">Label24</property>
      <property name="Top">166</property>
      <property name="Width">23</property>
    </object>
    <object class="Label" name="Label25" >
      <property name="Caption">Fone</property>
      <property name="Height">13</property>
      <property name="Left">230</property>
      <property name="Name">Label25</property>
      <property name="Top">69</property>
      <property name="Width">25</property>
    </object>
    <object class="Edit" name="mgt_cte_remetente_razao_social" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">60</property>
      <property name="Name">mgt_cte_remetente_razao_social</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">41</property>
      <property name="Width">255</property>
      <property name="jsOnKeyPress">mgt_cte_remetente_razao_socialJSKeyPress</property>
    </object>
    <object class="Button" name="Button1" >
      <property name="Caption">Adicionar</property>
      <property name="Height">25</property>
      <property name="Left">306</property>
      <property name="Name">Button1</property>
      <property name="Top">15</property>
      <property name="Width">55</property>
      <property name="OnClick">Button1Click</property>
    </object>
    <object class="Edit" name="mgt_cte_remetente_inscricao_estadual" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">14</property>
      <property name="Name">mgt_cte_remetente_inscricao_estadual</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">65</property>
      <property name="Width">121</property>
      <property name="jsOnKeyPress">mgt_cte_remetente_inscricao_estadualJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_remetente_endereco" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_cte_remetente_endereco</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">89</property>
      <property name="Width">255</property>
      <property name="jsOnKeyPress">mgt_cte_remetente_enderecoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_remetente_bairro" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">60</property>
      <property name="Name">mgt_cte_remetente_bairro</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">113</property>
      <property name="Width">255</property>
      <property name="jsOnKeyPress">mgt_cte_remetente_bairroJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_remetente_cidade" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">60</property>
      <property name="Name">mgt_cte_remetente_cidade</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">137</property>
      <property name="Width">255</property>
      <property name="jsOnKeyPress">mgt_cte_remetente_cidadeJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_remetente_estado" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">2</property>
      <property name="Name">mgt_cte_remetente_estado</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">162</property>
      <property name="Width">20</property>
      <property name="jsOnKeyPress">mgt_cte_remetente_estadoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_remetente_cep" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">167</property>
      <property name="MaxLength">9</property>
      <property name="Name">mgt_cte_remetente_cep</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">162</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_cte_remetente_cepJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_remetente_pais" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">262</property>
      <property name="MaxLength">60</property>
      <property name="Name">mgt_cte_remetente_pais</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">162</property>
      <property name="Width">99</property>
      <property name="jsOnKeyPress">mgt_cte_remetente_paisJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_remetente_fone" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">259</property>
      <property name="MaxLength">12</property>
      <property name="Name">mgt_cte_remetente_fone</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">65</property>
      <property name="Width">102</property>
      <property name="jsOnKeyPress">mgt_cte_remetente_foneJSKeyPress</property>
    </object>
    <object class="Label" name="Label64" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label64</property>
      <property name="Top">21</property>
      <property name="Width">92</property>
    </object>
    <object class="Edit" name="mgt_cte_remetente_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">60</property>
      <property name="Name">mgt_cte_remetente_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">17</property>
      <property name="Width">195</property>
      <property name="jsOnKeyPress">mgt_cte_remetente_codigoJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="grp_destinatario" >
    <property name="Caption"><![CDATA[Destinatario]]></property>
    <property name="Height">192</property>
    <property name="Left">378</property>
    <property name="Name">grp_destinatario</property>
    <property name="Top">125</property>
    <property name="Width">369</property>
    <object class="Label" name="Label26" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Razao Social]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label26</property>
      <property name="Top">45</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label27" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Endereco]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label27</property>
      <property name="Top">93</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label28" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Inscricao Estadual]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label28</property>
      <property name="Top">69</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label29" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Bairro</property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label29</property>
      <property name="Top">118</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label30" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Cidade</property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label30</property>
      <property name="Top">141</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label31" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Estado</property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label31</property>
      <property name="Top">166</property>
      <property name="Width">92</property>
    </object>
    <object class="Label" name="Label32" >
      <property name="Caption">CEP</property>
      <property name="Height">13</property>
      <property name="Left">138</property>
      <property name="Name">Label32</property>
      <property name="Top">166</property>
      <property name="Width">25</property>
    </object>
    <object class="Label" name="Label33" >
      <property name="Caption"><![CDATA[Pais]]></property>
      <property name="Height">13</property>
      <property name="Left">232</property>
      <property name="Name">Label33</property>
      <property name="Top">166</property>
      <property name="Width">23</property>
    </object>
    <object class="Label" name="Label34" >
      <property name="Caption">Fone</property>
      <property name="Height">13</property>
      <property name="Left">230</property>
      <property name="Name">Label34</property>
      <property name="Top">69</property>
      <property name="Width">25</property>
    </object>
    <object class="Edit" name="mgt_cte_destinatario_razao_social" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">60</property>
      <property name="Name">mgt_cte_destinatario_razao_social</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">41</property>
      <property name="Width">255</property>
      <property name="jsOnKeyPress">mgt_cte_destinatario_razao_socialJSKeyPress</property>
    </object>
    <object class="Button" name="Button2" >
      <property name="Caption">Adicionar</property>
      <property name="Height">25</property>
      <property name="Left">306</property>
      <property name="Name">Button2</property>
      <property name="Top">15</property>
      <property name="Width">55</property>
      <property name="OnClick">Button2Click</property>
    </object>
    <object class="Edit" name="mgt_cte_destinatario_inscricao_estadual" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">14</property>
      <property name="Name">mgt_cte_destinatario_inscricao_estadual</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">65</property>
      <property name="Width">121</property>
      <property name="jsOnKeyPress">mgt_cte_destinatario_inscricao_estadualJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_destinatario_endereco" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_cte_destinatario_endereco</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">89</property>
      <property name="Width">255</property>
      <property name="jsOnKeyPress">mgt_cte_destinatario_enderecoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_destinatario_bairro" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">60</property>
      <property name="Name">mgt_cte_destinatario_bairro</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">113</property>
      <property name="Width">255</property>
      <property name="jsOnKeyPress">mgt_cte_destinatario_bairroJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_destinatario_cidade" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">60</property>
      <property name="Name">mgt_cte_destinatario_cidade</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">137</property>
      <property name="Width">255</property>
      <property name="jsOnKeyPress">mgt_cte_destinatario_cidadeJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_destinatario_estado" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">2</property>
      <property name="Name">mgt_cte_destinatario_estado</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">162</property>
      <property name="Width">20</property>
      <property name="jsOnKeyPress">mgt_cte_destinatario_estadoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_destinatario_cep" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">167</property>
      <property name="MaxLength">9</property>
      <property name="Name">mgt_cte_destinatario_cep</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">162</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_cte_destinatario_cepJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_destinatario_pais" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">262</property>
      <property name="MaxLength">60</property>
      <property name="Name">mgt_cte_destinatario_pais</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">162</property>
      <property name="Width">99</property>
      <property name="jsOnKeyPress">mgt_cte_destinatario_paisJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_destinatario_fone" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">260</property>
      <property name="MaxLength">12</property>
      <property name="Name">mgt_cte_destinatario_fone</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">65</property>
      <property name="Width">101</property>
      <property name="jsOnKeyPress">mgt_cte_destinatario_foneJSKeyPress</property>
    </object>
    <object class="Label" name="Label71" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label71</property>
      <property name="Top">21</property>
      <property name="Width">92</property>
    </object>
    <object class="Edit" name="mgt_cte_destinatario_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">60</property>
      <property name="Name">mgt_cte_destinatario_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">17</property>
      <property name="Width">195</property>
      <property name="jsOnKeyPress">mgt_cte_destinatario_codigoJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption">Dados do Produto</property>
    <property name="Height">147</property>
    <property name="Left">6</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">317</property>
    <property name="Width">741</property>
    <object class="Label" name="Label35" >
      <property name="Caption">Produto Predominante</property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label35</property>
      <property name="Top">18</property>
      <property name="Width">110</property>
    </object>
    <object class="Label" name="Label36" >
      <property name="Caption">Valor Total da Mercadoria</property>
      <property name="Height">13</property>
      <property name="Left">608</property>
      <property name="Name">Label36</property>
      <property name="Top">104</property>
      <property name="Width">125</property>
    </object>
    <object class="Edit" name="mgt_cte_produto_predominante" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">60</property>
      <property name="Name">mgt_cte_produto_predominante</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">723</property>
      <property name="jsOnKeyPress">mgt_cte_produto_predominanteJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_produto_total_mercadoria" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">608</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_produto_total_mercadoria</property>
      <property name="ParentColor">0</property>
      <property name="Text">0</property>
      <property name="Top">117</property>
      <property name="Width">125</property>
      <property name="jsOnKeyPress">mgt_cte_produto_total_mercadoriaJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_produto_total_mercadoriaJSKeyUp</property>
    </object>
    <object class="Label" name="Label37" >
      <property name="Caption">Quantidade</property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label37</property>
      <property name="Top">56</property>
      <property name="Width">60</property>
    </object>
    <object class="Label" name="Label38" >
      <property name="Caption">Unidade de Medida</property>
      <property name="Height">13</property>
      <property name="Left">77</property>
      <property name="Name">Label38</property>
      <property name="Top">56</property>
      <property name="Width">95</property>
    </object>
    <object class="Edit" name="mgt_cte_produto_quantidade_1" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_produto_quantidade_1</property>
      <property name="ParentColor">0</property>
      <property name="Top">69</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_cte_produto_quantidade_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_produto_quantidade_1JSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_cte_produto_unidade_1" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="ItemIndex">02</property>
      <property name="Items"><![CDATA[a:6:{s:2:&quot;00&quot;;s:2:&quot;M3&quot;;s:2:&quot;01&quot;;s:2:&quot;KG&quot;;s:2:&quot;02&quot;;s:9:&quot;TONELADAS&quot;;s:2:&quot;03&quot;;s:7:&quot;UNIDADE&quot;;s:2:&quot;04&quot;;s:6:&quot;LITROS&quot;;s:2:&quot;05&quot;;s:5:&quot;MMBTU&quot;;}]]></property>
      <property name="Left">77</property>
      <property name="Name">mgt_cte_produto_unidade_1</property>
      <property name="ParentColor">0</property>
      <property name="Top">69</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_cte_produto_unidade_1JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_produto_quantidade_2" >
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_produto_quantidade_2</property>
      <property name="Top">93</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_cte_produto_quantidade_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_produto_quantidade_2JSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_cte_produto_unidade_2" >
      <property name="Height">21</property>
      <property name="ItemIndex">02</property>
      <property name="Items"><![CDATA[a:6:{s:2:&quot;00&quot;;s:2:&quot;M3&quot;;s:2:&quot;01&quot;;s:2:&quot;KG&quot;;s:2:&quot;02&quot;;s:9:&quot;TONELADAS&quot;;s:2:&quot;03&quot;;s:7:&quot;UNIDADE&quot;;s:2:&quot;04&quot;;s:6:&quot;LITROS&quot;;s:2:&quot;05&quot;;s:5:&quot;MMBTU&quot;;}]]></property>
      <property name="Left">77</property>
      <property name="Name">mgt_cte_produto_unidade_2</property>
      <property name="Top">93</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_cte_produto_unidade_2JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_produto_quantidade_3" >
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_produto_quantidade_3</property>
      <property name="Top">117</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_cte_produto_quantidade_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_produto_quantidade_3JSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_cte_produto_unidade_3" >
      <property name="Height">21</property>
      <property name="ItemIndex">02</property>
      <property name="Items"><![CDATA[a:6:{s:2:&quot;00&quot;;s:2:&quot;M3&quot;;s:2:&quot;01&quot;;s:2:&quot;KG&quot;;s:2:&quot;02&quot;;s:9:&quot;TONELADAS&quot;;s:2:&quot;03&quot;;s:7:&quot;UNIDADE&quot;;s:2:&quot;04&quot;;s:6:&quot;LITROS&quot;;s:2:&quot;05&quot;;s:5:&quot;MMBTU&quot;;}]]></property>
      <property name="Left">77</property>
      <property name="Name">mgt_cte_produto_unidade_3</property>
      <property name="Top">117</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_cte_produto_unidade_3JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_produto_quantidade_7" >
      <property name="Height">21</property>
      <property name="Left">386</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_produto_quantidade_7</property>
      <property name="Top">69</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_cte_produto_quantidade_7JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_produto_quantidade_7JSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_cte_produto_unidade_7" >
      <property name="Height">21</property>
      <property name="ItemIndex">02</property>
      <property name="Items"><![CDATA[a:6:{s:2:&quot;00&quot;;s:2:&quot;M3&quot;;s:2:&quot;01&quot;;s:2:&quot;KG&quot;;s:2:&quot;02&quot;;s:9:&quot;TONELADAS&quot;;s:2:&quot;03&quot;;s:7:&quot;UNIDADE&quot;;s:2:&quot;04&quot;;s:6:&quot;LITROS&quot;;s:2:&quot;05&quot;;s:5:&quot;MMBTU&quot;;}]]></property>
      <property name="Left">453</property>
      <property name="Name">mgt_cte_produto_unidade_7</property>
      <property name="Top">69</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_cte_produto_unidade_7JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_produto_quantidade_8" >
      <property name="Height">21</property>
      <property name="Left">386</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_produto_quantidade_8</property>
      <property name="Top">93</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_cte_produto_quantidade_8JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_produto_quantidade_8JSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_cte_produto_unidade_8" >
      <property name="Height">21</property>
      <property name="ItemIndex">02</property>
      <property name="Items"><![CDATA[a:6:{s:2:&quot;00&quot;;s:2:&quot;M3&quot;;s:2:&quot;01&quot;;s:2:&quot;KG&quot;;s:2:&quot;02&quot;;s:9:&quot;TONELADAS&quot;;s:2:&quot;03&quot;;s:7:&quot;UNIDADE&quot;;s:2:&quot;04&quot;;s:6:&quot;LITROS&quot;;s:2:&quot;05&quot;;s:5:&quot;MMBTU&quot;;}]]></property>
      <property name="Left">453</property>
      <property name="Name">mgt_cte_produto_unidade_8</property>
      <property name="Top">93</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_cte_produto_unidade_8JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_produto_quantidade_4" >
      <property name="Height">21</property>
      <property name="Left">198</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_produto_quantidade_4</property>
      <property name="Top">69</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_cte_produto_quantidade_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_produto_quantidade_4JSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_cte_produto_unidade_4" >
      <property name="Height">21</property>
      <property name="ItemIndex">02</property>
      <property name="Items"><![CDATA[a:6:{s:2:&quot;00&quot;;s:2:&quot;M3&quot;;s:2:&quot;01&quot;;s:2:&quot;KG&quot;;s:2:&quot;02&quot;;s:9:&quot;TONELADAS&quot;;s:2:&quot;03&quot;;s:7:&quot;UNIDADE&quot;;s:2:&quot;04&quot;;s:6:&quot;LITROS&quot;;s:2:&quot;05&quot;;s:5:&quot;MMBTU&quot;;}]]></property>
      <property name="Left">265</property>
      <property name="Name">mgt_cte_produto_unidade_4</property>
      <property name="Top">69</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_cte_produto_unidade_4JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_produto_quantidade_5" >
      <property name="Height">21</property>
      <property name="Left">198</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_produto_quantidade_5</property>
      <property name="Top">93</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_cte_produto_quantidade_5JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_produto_quantidade_5JSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_cte_produto_unidade_5" >
      <property name="Height">21</property>
      <property name="ItemIndex">02</property>
      <property name="Items"><![CDATA[a:6:{s:2:&quot;00&quot;;s:2:&quot;M3&quot;;s:2:&quot;01&quot;;s:2:&quot;KG&quot;;s:2:&quot;02&quot;;s:9:&quot;TONELADAS&quot;;s:2:&quot;03&quot;;s:7:&quot;UNIDADE&quot;;s:2:&quot;04&quot;;s:6:&quot;LITROS&quot;;s:2:&quot;05&quot;;s:5:&quot;MMBTU&quot;;}]]></property>
      <property name="Left">265</property>
      <property name="Name">mgt_cte_produto_unidade_5</property>
      <property name="Top">93</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_cte_produto_unidade_5JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_produto_quantidade_6" >
      <property name="Height">21</property>
      <property name="Left">198</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_produto_quantidade_6</property>
      <property name="Top">117</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_cte_produto_quantidade_6JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_produto_quantidade_6JSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_cte_produto_unidade_6" >
      <property name="Height">21</property>
      <property name="ItemIndex">02</property>
      <property name="Items"><![CDATA[a:6:{s:2:&quot;00&quot;;s:2:&quot;M3&quot;;s:2:&quot;01&quot;;s:2:&quot;KG&quot;;s:2:&quot;02&quot;;s:9:&quot;TONELADAS&quot;;s:2:&quot;03&quot;;s:7:&quot;UNIDADE&quot;;s:2:&quot;04&quot;;s:6:&quot;LITROS&quot;;s:2:&quot;05&quot;;s:5:&quot;MMBTU&quot;;}]]></property>
      <property name="Left">265</property>
      <property name="Name">mgt_cte_produto_unidade_6</property>
      <property name="Top">117</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_cte_produto_unidade_6JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_produto_quantidade_9" >
      <property name="Height">21</property>
      <property name="Left">386</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_produto_quantidade_9</property>
      <property name="Top">117</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_cte_produto_quantidade_9JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_produto_quantidade_9JSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_cte_produto_unidade_9" >
      <property name="Height">21</property>
      <property name="ItemIndex">02</property>
      <property name="Items"><![CDATA[a:6:{s:2:&quot;00&quot;;s:2:&quot;M3&quot;;s:2:&quot;01&quot;;s:2:&quot;KG&quot;;s:2:&quot;02&quot;;s:9:&quot;TONELADAS&quot;;s:2:&quot;03&quot;;s:7:&quot;UNIDADE&quot;;s:2:&quot;04&quot;;s:6:&quot;LITROS&quot;;s:2:&quot;05&quot;;s:5:&quot;MMBTU&quot;;}]]></property>
      <property name="Left">453</property>
      <property name="Name">mgt_cte_produto_unidade_9</property>
      <property name="Top">117</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_cte_produto_unidade_9JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_produto_quantidade_10" >
      <property name="Height">21</property>
      <property name="Left">571</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_produto_quantidade_10</property>
      <property name="Top">69</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_cte_produto_quantidade_10JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_produto_quantidade_10JSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_cte_produto_unidade_10" >
      <property name="Height">21</property>
      <property name="ItemIndex">02</property>
      <property name="Items"><![CDATA[a:6:{s:2:&quot;00&quot;;s:2:&quot;M3&quot;;s:2:&quot;01&quot;;s:2:&quot;KG&quot;;s:2:&quot;02&quot;;s:9:&quot;TONELADAS&quot;;s:2:&quot;03&quot;;s:7:&quot;UNIDADE&quot;;s:2:&quot;04&quot;;s:6:&quot;LITROS&quot;;s:2:&quot;05&quot;;s:5:&quot;MMBTU&quot;;}]]></property>
      <property name="Left">638</property>
      <property name="Name">mgt_cte_produto_unidade_10</property>
      <property name="Top">69</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_cte_produto_unidade_10JSKeyPress</property>
    </object>
    <object class="Label" name="Label39" >
      <property name="Caption">Quantidade</property>
      <property name="Height">13</property>
      <property name="Left">198</property>
      <property name="Name">Label39</property>
      <property name="Top">56</property>
      <property name="Width">60</property>
    </object>
    <object class="Label" name="Label40" >
      <property name="Caption">Unidade de Medida</property>
      <property name="Height">13</property>
      <property name="Left">265</property>
      <property name="Name">Label40</property>
      <property name="Top">56</property>
      <property name="Width">95</property>
    </object>
    <object class="Label" name="Label41" >
      <property name="Caption">Quantidade</property>
      <property name="Height">13</property>
      <property name="Left">386</property>
      <property name="Name">Label41</property>
      <property name="Top">56</property>
      <property name="Width">60</property>
    </object>
    <object class="Label" name="Label42" >
      <property name="Caption">Unidade de Medida</property>
      <property name="Height">13</property>
      <property name="Left">453</property>
      <property name="Name">Label42</property>
      <property name="Top">56</property>
      <property name="Width">95</property>
    </object>
    <object class="Label" name="Label43" >
      <property name="Caption">Quantidade</property>
      <property name="Height">13</property>
      <property name="Left">571</property>
      <property name="Name">Label43</property>
      <property name="Top">56</property>
      <property name="Width">60</property>
    </object>
    <object class="Label" name="Label44" >
      <property name="Caption">Unidade de Medida</property>
      <property name="Height">13</property>
      <property name="Left">638</property>
      <property name="Name">Label44</property>
      <property name="Top">56</property>
      <property name="Width">95</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Componentes do Valor da Prestacao do Servico]]></property>
    <property name="Height">163</property>
    <property name="Left">6</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">464</property>
    <property name="Width">741</property>
    <object class="Label" name="Label45" >
      <property name="Caption"><![CDATA[Descricao do Servico]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label45</property>
      <property name="Top">23</property>
      <property name="Width">110</property>
    </object>
    <object class="Label" name="Label46" >
      <property name="Caption"><![CDATA[Valor do Servico]]></property>
      <property name="Height">13</property>
      <property name="Left">213</property>
      <property name="Name">Label46</property>
      <property name="Top">23</property>
      <property name="Width">85</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_1" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_1</property>
      <property name="ParentColor">0</property>
      <property name="Top">36</property>
      <property name="Width">200</property>
      <property name="jsOnKeyPress">mgt_cte_servico_1JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_valor_1" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">213</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_valor_1</property>
      <property name="ParentColor">0</property>
      <property name="Text">0</property>
      <property name="Top">36</property>
      <property name="Width">85</property>
      <property name="jsOnKeyPress">mgt_cte_servico_valor_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_servico_valor_1JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_2" >
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_2</property>
      <property name="Top">60</property>
      <property name="Width">200</property>
      <property name="jsOnKeyPress">mgt_cte_servico_2JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_valor_2" >
      <property name="Height">21</property>
      <property name="Left">213</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_valor_2</property>
      <property name="Text">0</property>
      <property name="Top">60</property>
      <property name="Width">85</property>
      <property name="jsOnKeyPress">mgt_cte_servico_valor_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_servico_valor_2JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_3" >
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_3</property>
      <property name="Top">84</property>
      <property name="Width">200</property>
      <property name="jsOnKeyPress">mgt_cte_servico_3JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_valor_3" >
      <property name="Height">21</property>
      <property name="Left">213</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_valor_3</property>
      <property name="Text">0</property>
      <property name="Top">84</property>
      <property name="Width">85</property>
      <property name="jsOnKeyPress">mgt_cte_servico_valor_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_servico_valor_3JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_4" >
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_4</property>
      <property name="Top">108</property>
      <property name="Width">200</property>
      <property name="jsOnKeyPress">mgt_cte_servico_4JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_valor_4" >
      <property name="Height">21</property>
      <property name="Left">213</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_valor_4</property>
      <property name="Text">0</property>
      <property name="Top">108</property>
      <property name="Width">85</property>
      <property name="jsOnKeyPress">mgt_cte_servico_valor_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_servico_valor_4JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_5" >
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_5</property>
      <property name="Top">132</property>
      <property name="Width">200</property>
      <property name="jsOnKeyPress">mgt_cte_servico_5JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_valor_5" >
      <property name="Height">21</property>
      <property name="Left">213</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_valor_5</property>
      <property name="Text">0</property>
      <property name="Top">132</property>
      <property name="Width">85</property>
      <property name="jsOnKeyPress">mgt_cte_servico_valor_5JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_servico_valor_5JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_6" >
      <property name="Height">21</property>
      <property name="Left">309</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_6</property>
      <property name="Top">36</property>
      <property name="Width">200</property>
      <property name="jsOnKeyPress">mgt_cte_servico_6JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_valor_6" >
      <property name="Height">21</property>
      <property name="Left">513</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_valor_6</property>
      <property name="Text">0</property>
      <property name="Top">36</property>
      <property name="Width">85</property>
      <property name="jsOnKeyPress">mgt_cte_servico_valor_6JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_servico_valor_6JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_7" >
      <property name="Height">21</property>
      <property name="Left">309</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_7</property>
      <property name="Top">60</property>
      <property name="Width">200</property>
      <property name="jsOnKeyPress">mgt_cte_servico_7JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_valor_7" >
      <property name="Height">21</property>
      <property name="Left">513</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_valor_7</property>
      <property name="Text">0</property>
      <property name="Top">60</property>
      <property name="Width">85</property>
      <property name="jsOnKeyPress">mgt_cte_servico_valor_7JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_servico_valor_7JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_8" >
      <property name="Height">21</property>
      <property name="Left">309</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_8</property>
      <property name="Top">84</property>
      <property name="Width">200</property>
      <property name="jsOnKeyPress">mgt_cte_servico_8JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_valor_8" >
      <property name="Height">21</property>
      <property name="Left">513</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_valor_8</property>
      <property name="Text">0</property>
      <property name="Top">84</property>
      <property name="Width">85</property>
      <property name="jsOnKeyPress">mgt_cte_servico_valor_8JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_servico_valor_8JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_9" >
      <property name="Height">21</property>
      <property name="Left">309</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_9</property>
      <property name="Top">108</property>
      <property name="Width">200</property>
      <property name="jsOnKeyPress">mgt_cte_servico_9JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_valor_9" >
      <property name="Height">21</property>
      <property name="Left">513</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_valor_9</property>
      <property name="Text">0</property>
      <property name="Top">108</property>
      <property name="Width">85</property>
      <property name="jsOnKeyPress">mgt_cte_servico_valor_9JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_servico_valor_9JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_10" >
      <property name="Height">21</property>
      <property name="Left">309</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_10</property>
      <property name="Top">132</property>
      <property name="Width">200</property>
      <property name="jsOnKeyPress">mgt_cte_servico_10JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_valor_10" >
      <property name="Height">21</property>
      <property name="Left">513</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_valor_10</property>
      <property name="Text">0</property>
      <property name="Top">132</property>
      <property name="Width">85</property>
      <property name="jsOnKeyPress">mgt_cte_servico_valor_10JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_servico_valor_10JSKeyUp</property>
    </object>
    <object class="Label" name="Label47" >
      <property name="Caption"><![CDATA[Descricao do Servico]]></property>
      <property name="Height">13</property>
      <property name="Left">309</property>
      <property name="Name">Label47</property>
      <property name="Top">23</property>
      <property name="Width">110</property>
    </object>
    <object class="Label" name="Label48" >
      <property name="Caption"><![CDATA[Valor do Servico]]></property>
      <property name="Height">13</property>
      <property name="Left">513</property>
      <property name="Name">Label48</property>
      <property name="Top">23</property>
      <property name="Width">85</property>
    </object>
    <object class="Label" name="Label49" >
      <property name="Caption"><![CDATA[Valor Total do Servico]]></property>
      <property name="Height">13</property>
      <property name="Left">608</property>
      <property name="Name">Label49</property>
      <property name="Top">23</property>
      <property name="Width">125</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_valor_total" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">608</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_valor_total</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Text">0</property>
      <property name="Top">36</property>
      <property name="Width">125</property>
      <property name="jsOnKeyPress">mgt_cte_servico_valor_totalJSKeyPress</property>
    </object>
    <object class="Label" name="Label50" >
      <property name="Caption">Valor a Receber</property>
      <property name="Height">13</property>
      <property name="Left">608</property>
      <property name="Name">Label50</property>
      <property name="Top">69</property>
      <property name="Width">125</property>
    </object>
    <object class="Edit" name="mgt_cte_servico_valor_receber" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">608</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_servico_valor_receber</property>
      <property name="ParentColor">0</property>
      <property name="Text">0</property>
      <property name="Top">84</property>
      <property name="Width">125</property>
      <property name="jsOnKeyPress">mgt_cte_servico_valor_receberJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_servico_valor_receberJSKeyUp</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Data do Recebimento</property>
      <property name="Height">13</property>
      <property name="Left">608</property>
      <property name="Name">Label12</property>
      <property name="Top">117</property>
      <property name="Width">125</property>
    </object>
    <object class="Edit" name="mgt_cte_data_receber" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">668</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_cte_data_receber</property>
      <property name="ParentColor">0</property>
      <property name="Top">132</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_cte_data_receberJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_data_receberJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox4" >
    <property name="Caption"><![CDATA[Informacoes Relativas ao Imposto]]></property>
    <property name="Height">107</property>
    <property name="Left">6</property>
    <property name="Name">GroupBox4</property>
    <property name="Top">627</property>
    <property name="Width">741</property>
    <object class="Label" name="Label51" >
      <property name="Caption"><![CDATA[Codigo do Situacao Tributaria]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label51</property>
      <property name="Top">20</property>
      <property name="Width">145</property>
    </object>
    <object class="ComboBox" name="mgt_cte_situacao_tributaria" >
      <property name="Height">21</property>
      <property name="ItemIndex">00</property>
      <property name="Items"><![CDATA[a:8:{s:2:&quot;00&quot;;s:30:&quot;00 - Tributacao Normal do ICMS&quot;;i:20;s:41:&quot;20 - Tributacao com Reducao de BC do ICMS&quot;;i:40;s:17:&quot;40 - ICMS Isencao&quot;;i:41;s:23:&quot;41 - ICMS Nao Tributado&quot;;i:51;s:18:&quot;51 - ICMS Diferido&quot;;i:60;s:59:&quot;60 - ICMS cobrado anteriormente por Substituicao Tributaria&quot;;i:90;s:16:&quot;90 - ICMS Outros&quot;;s:2:&quot;--&quot;;s:16:&quot;Simples Nacional&quot;;}]]></property>
      <property name="Left">10</property>
      <property name="Name">mgt_cte_situacao_tributaria</property>
      <property name="Top">36</property>
      <property name="Width">323</property>
      <property name="jsOnKeyPress">mgt_cte_situacao_tributariaJSKeyPress</property>
    </object>
    <object class="Label" name="Label52" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Percentual de Reducao da BC]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label52</property>
      <property name="Top">62</property>
      <property name="Width">145</property>
    </object>
    <object class="Label" name="Label53" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Valor da BC do ICMS</property>
      <property name="Height">13</property>
      <property name="Left">181</property>
      <property name="Name">Label53</property>
      <property name="Top">62</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="Label54" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Aliquota do ICMS]]></property>
      <property name="Height">13</property>
      <property name="Left">322</property>
      <property name="Name">Label54</property>
      <property name="Top">62</property>
      <property name="Width">85</property>
    </object>
    <object class="Label" name="Label55" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Valor do ICMS</property>
      <property name="Height">13</property>
      <property name="Left">464</property>
      <property name="Name">Label55</property>
      <property name="Top">62</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label56" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Valor do Credito Outorgado/Presumido]]></property>
      <property name="Height">13</property>
      <property name="Left">543</property>
      <property name="Name">Label56</property>
      <property name="Top">62</property>
      <property name="Width">190</property>
    </object>
    <object class="Edit" name="mgt_cte_percentual_reducao_bc" >
      <property name="Height">21</property>
      <property name="Left">34</property>
      <property name="MaxLength">5</property>
      <property name="Name">mgt_cte_percentual_reducao_bc</property>
      <property name="Text">0</property>
      <property name="Top">76</property>
      <property name="Width">121</property>
      <property name="jsOnKeyPress">mgt_cte_percentual_reducao_bcJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_percentual_reducao_bcJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_valor_bc_icms" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">160</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_valor_bc_icms</property>
      <property name="ParentColor">0</property>
      <property name="Text">0</property>
      <property name="Top">76</property>
      <property name="Width">121</property>
      <property name="jsOnKeyPress">mgt_cte_valor_bc_icmsJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_valor_bc_icmsJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_aliquota_icms" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">286</property>
      <property name="MaxLength">5</property>
      <property name="Name">mgt_cte_aliquota_icms</property>
      <property name="ParentColor">0</property>
      <property name="Text">0</property>
      <property name="Top">76</property>
      <property name="Width">121</property>
      <property name="jsOnKeyPress">mgt_cte_aliquota_icmsJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_aliquota_icmsJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_valor_icms" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">413</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_valor_icms</property>
      <property name="ParentColor">0</property>
      <property name="Text">0</property>
      <property name="Top">76</property>
      <property name="Width">121</property>
      <property name="jsOnKeyPress">mgt_cte_valor_icmsJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_valor_icmsJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_valor_outorgado" >
      <property name="Height">21</property>
      <property name="Left">612</property>
      <property name="MaxLength">15</property>
      <property name="Name">mgt_cte_valor_outorgado</property>
      <property name="Text">0</property>
      <property name="Top">76</property>
      <property name="Width">121</property>
      <property name="jsOnKeyPress">mgt_cte_valor_outorgadoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_valor_outorgadoJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox5" >
    <property name="Caption"><![CDATA[Documentos Originarios]]></property>
    <property name="Height">160</property>
    <property name="Left">6</property>
    <property name="Name">GroupBox5</property>
    <property name="Top">734</property>
    <property name="Width">741</property>
    <object class="Label" name="Label57" >
      <property name="Caption"><![CDATA[Numero das Chave de Acesso das NF-e de Origem]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label57</property>
      <property name="Top">20</property>
      <property name="Width">359</property>
    </object>
    <object class="Edit" name="mgt_cte_chave_1" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">44</property>
      <property name="Name">mgt_cte_chave_1</property>
      <property name="ParentColor">0</property>
      <property name="Top">33</property>
      <property name="Width">359</property>
      <property name="jsOnKeyPress">mgt_cte_chave_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_chave_1JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_chave_6" >
      <property name="Height">21</property>
      <property name="Left">374</property>
      <property name="MaxLength">44</property>
      <property name="Name">mgt_cte_chave_6</property>
      <property name="Top">33</property>
      <property name="Width">359</property>
      <property name="jsOnKeyPress">mgt_cte_chave_6JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_chave_6JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_chave_2" >
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">44</property>
      <property name="Name">mgt_cte_chave_2</property>
      <property name="Top">57</property>
      <property name="Width">359</property>
      <property name="jsOnKeyPress">mgt_cte_chave_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_chave_2JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_chave_7" >
      <property name="Height">21</property>
      <property name="Left">374</property>
      <property name="MaxLength">44</property>
      <property name="Name">mgt_cte_chave_7</property>
      <property name="Top">57</property>
      <property name="Width">359</property>
      <property name="jsOnKeyPress">mgt_cte_chave_7JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_chave_7JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_chave_3" >
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">44</property>
      <property name="Name">mgt_cte_chave_3</property>
      <property name="Top">81</property>
      <property name="Width">359</property>
      <property name="jsOnKeyPress">mgt_cte_chave_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_chave_3JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_chave_8" >
      <property name="Height">21</property>
      <property name="Left">374</property>
      <property name="MaxLength">44</property>
      <property name="Name">mgt_cte_chave_8</property>
      <property name="Top">81</property>
      <property name="Width">359</property>
      <property name="jsOnKeyPress">mgt_cte_chave_8JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_chave_8JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_chave_4" >
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">44</property>
      <property name="Name">mgt_cte_chave_4</property>
      <property name="Top">105</property>
      <property name="Width">359</property>
      <property name="jsOnKeyPress">mgt_cte_chave_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_chave_4JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_chave_9" >
      <property name="Height">21</property>
      <property name="Left">374</property>
      <property name="MaxLength">44</property>
      <property name="Name">mgt_cte_chave_9</property>
      <property name="Top">105</property>
      <property name="Width">359</property>
      <property name="jsOnKeyPress">mgt_cte_chave_9JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_chave_9JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_chave_5" >
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">44</property>
      <property name="Name">mgt_cte_chave_5</property>
      <property name="Top">129</property>
      <property name="Width">359</property>
      <property name="jsOnKeyPress">mgt_cte_chave_5JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_chave_5JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_chave_10" >
      <property name="Height">21</property>
      <property name="Left">374</property>
      <property name="MaxLength">44</property>
      <property name="Name">mgt_cte_chave_10</property>
      <property name="Top">129</property>
      <property name="Width">359</property>
      <property name="jsOnKeyPress">mgt_cte_chave_10JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_chave_10JSKeyUp</property>
    </object>
    <object class="Label" name="Label58" >
      <property name="Caption"><![CDATA[Numero das Chave de Acesso das NF-e de Origem]]></property>
      <property name="Height">13</property>
      <property name="Left">374</property>
      <property name="Name">Label58</property>
      <property name="Top">20</property>
      <property name="Width">359</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox6" >
    <property name="Caption"><![CDATA[Observacoes]]></property>
    <property name="Height">65</property>
    <property name="Left">6</property>
    <property name="Name">GroupBox6</property>
    <property name="Top">894</property>
    <property name="Width">430</property>
    <object class="Memo" name="mgt_cte_observacao" >
      <property name="Height">35</property>
      <property name="Left">10</property>
      <property name="Lines">a:0:{}</property>
      <property name="MaxLength">2000</property>
      <property name="Name">mgt_cte_observacao</property>
      <property name="Top">21</property>
      <property name="Width">412</property>
      <property name="jsOnKeyPress">mgt_cte_observacaoJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox7" >
    <property name="Caption"><![CDATA[Dados Especificos do Modal Rodoviario]]></property>
    <property name="Height">65</property>
    <property name="Left">436</property>
    <property name="Name">GroupBox7</property>
    <property name="Top">894</property>
    <property name="Width">311</property>
    <object class="Label" name="Label59" >
      <property name="Caption">RNTRC da Empresa</property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label59</property>
      <property name="Top">22</property>
      <property name="Width">95</property>
    </object>
    <object class="Label" name="Label60" >
      <property name="Caption"><![CDATA[Lotacao]]></property>
      <property name="Height">13</property>
      <property name="Left">109</property>
      <property name="Name">Label60</property>
      <property name="Top">22</property>
      <property name="Width">45</property>
    </object>
    <object class="Label" name="Label61" >
      <property name="Alignment">agLeft</property>
      <property name="Caption">DT.Entrega</property>
      <property name="Height">13</property>
      <property name="Left">162</property>
      <property name="Name">Label61</property>
      <property name="Top">22</property>
      <property name="Width">65</property>
    </object>
    <object class="Edit" name="mgt_cte_rntrc" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">8</property>
      <property name="Name">mgt_cte_rntrc</property>
      <property name="ParentColor">0</property>
      <property name="Top">35</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_cte_rntrcJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_rntrcJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_data_entrega" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">162</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_cte_data_entrega</property>
      <property name="ParentColor">0</property>
      <property name="Top">35</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_cte_data_entregaJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_data_entregaJSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_cte_lotacao" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="ItemIndex">1</property>
      <property name="Items"><![CDATA[a:2:{i:1;s:3:&quot;SIM&quot;;i:0;s:3:&quot;NAO&quot;;}]]></property>
      <property name="Left">109</property>
      <property name="Name">mgt_cte_lotacao</property>
      <property name="ParentColor">0</property>
      <property name="Top">35</property>
      <property name="Width">50</property>
      <property name="jsOnKeyPress">mgt_cte_lotacaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption">Seguro pelo</property>
      <property name="Height">13</property>
      <property name="Left">231</property>
      <property name="Name">Label13</property>
      <property name="Top">22</property>
      <property name="Width">68</property>
    </object>
    <object class="ComboBox" name="mgt_cte_seguro" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="ItemIndex">1</property>
      <property name="Items"><![CDATA[a:2:{i:0;s:9:&quot;Remetente&quot;;i:3;s:12:&quot;Destinatario&quot;;}]]></property>
      <property name="Left">231</property>
      <property name="Name">mgt_cte_seguro</property>
      <property name="ParentColor">0</property>
      <property name="Top">35</property>
      <property name="Width">69</property>
      <property name="jsOnKeyPress">mgt_cte_seguroJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox8" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">55</property>
    <property name="Left">6</property>
    <property name="Name">GroupBox8</property>
    <property name="Top">1038</property>
    <property name="Width">741</property>
    <object class="Panel" name="Panel1" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#F4F1AA</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel1</property>
      <property name="ParentColor">0</property>
      <property name="Top">19</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label62" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label62</property>
      <property name="Top">17</property>
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
      <property name="Top">35</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label63" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label63</property>
      <property name="Top">33</property>
      <property name="Width">148</property>
    </object>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">656</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">19</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_transmitir" >
      <property name="Caption">Gerar XML</property>
      <property name="Height">25</property>
      <property name="Left">346</property>
      <property name="Name">bt_transmitir</property>
      <property name="Top">19</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_transmitirClick</property>
    </object>
  </object>
  <object class="Label" name="MSG_Erro" >
    <property name="Alignment">agCenter</property>
    <property name="Font">
    <property name="Color">#FF0000</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">6</property>
    <property name="Name">MSG_Erro</property>
    <property name="ParentFont">0</property>
    <property name="Top">17</property>
    <property name="Width">741</property>
  </object>
  <object class="HiddenField" name="hd_numero" >
    <property name="Height">18</property>
    <property name="Left">6</property>
    <property name="Name">hd_numero</property>
    <property name="Top">1519</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="hd_codigo" >
    <property name="Height">18</property>
    <property name="Left">6</property>
    <property name="Name">hd_codigo</property>
    <property name="Top">1539</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="hd_nome" >
    <property name="Height">18</property>
    <property name="Left">6</property>
    <property name="Name">hd_nome</property>
    <property name="Top">1559</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="hd_razao_social" >
    <property name="Height">18</property>
    <property name="Left">6</property>
    <property name="Name">hd_razao_social</property>
    <property name="Top">1579</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="hd_inscricao_estadual" >
    <property name="Height">18</property>
    <property name="Left">6</property>
    <property name="Name">hd_inscricao_estadual</property>
    <property name="Top">1599</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="hd_fone" >
    <property name="Height">18</property>
    <property name="Left">6</property>
    <property name="Name">hd_fone</property>
    <property name="Top">1619</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="hd_endereco" >
    <property name="Height">18</property>
    <property name="Left">213</property>
    <property name="Name">hd_endereco</property>
    <property name="Top">1519</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="hd_bairro" >
    <property name="Height">18</property>
    <property name="Left">213</property>
    <property name="Name">hd_bairro</property>
    <property name="Top">1539</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="hd_cidade" >
    <property name="Height">18</property>
    <property name="Left">213</property>
    <property name="Name">hd_cidade</property>
    <property name="Top">1559</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="hd_estado" >
    <property name="Height">18</property>
    <property name="Left">213</property>
    <property name="Name">hd_estado</property>
    <property name="Top">1579</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="hd_cep" >
    <property name="Height">18</property>
    <property name="Left">213</property>
    <property name="Name">hd_cep</property>
    <property name="Top">1599</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="hd_pais" >
    <property name="Height">18</property>
    <property name="Left">213</property>
    <property name="Name">hd_pais</property>
    <property name="Top">1619</property>
    <property name="Width">200</property>
  </object>
  <object class="HiddenField" name="opcao_adiciona_cliente" >
    <property name="Height">18</property>
    <property name="Left">6</property>
    <property name="Name">opcao_adiciona_cliente</property>
    <property name="Top">1498</property>
    <property name="Width">200</property>
  </object>
  <object class="GroupBox" name="adiciona_cliente" >
    <property name="Caption">Adicionar Cliente</property>
    <property name="Color">#FFC0CB</property>
    <property name="Height">282</property>
    <property name="Left">6</property>
    <property name="Name">adiciona_cliente</property>
    <property name="ParentColor">0</property>
    <property name="Top">1093</property>
    <property name="Visible">0</property>
    <property name="Width">741</property>
    <object class="GroupBox" name="busca_cliente" >
      <property name="Caption">Busca</property>
      <property name="Color">#FFC0CB</property>
      <property name="Height">59</property>
      <property name="Left">6</property>
      <property name="Name">busca_cliente</property>
      <property name="ParentColor">0</property>
      <property name="Top">22</property>
      <property name="Width">728</property>
      <object class="Label" name="Label65" >
        <property name="Caption">Dados Para Busca</property>
        <property name="Color">#FFC0CB</property>
        <property name="Height">13</property>
        <property name="Left">8</property>
        <property name="Name">Label65</property>
        <property name="ParentColor">0</property>
        <property name="Top">15</property>
        <property name="Width">304</property>
      </object>
      <object class="Label" name="Label66" >
        <property name="Caption"><![CDATA[Opcoes]]></property>
        <property name="Color">#FFC0CB</property>
        <property name="Height">13</property>
        <property name="Left">461</property>
        <property name="Name">Label66</property>
        <property name="ParentColor">0</property>
        <property name="Top">15</property>
        <property name="Width">160</property>
      </object>
      <object class="Edit" name="dados_busca" >
        <property name="Height">21</property>
        <property name="Left">8</property>
        <property name="Name">dados_busca</property>
        <property name="ParentColor">0</property>
        <property name="Top">28</property>
        <property name="Width">445</property>
        <property name="jsOnKeyPress">dados_buscaJSKeyPress</property>
      </object>
      <object class="ComboBox" name="opcao_busca" >
        <property name="Height">21</property>
        <property name="ItemIndex">0</property>
        <property name="Items"><![CDATA[a:5:{s:6:&quot;Numero&quot;;s:6:&quot;Numero&quot;;s:4:&quot;Tipo&quot;;s:4:&quot;Tipo&quot;;s:6:&quot;Codigo&quot;;s:6:&quot;Codigo&quot;;s:4:&quot;Nome&quot;;s:4:&quot;Nome&quot;;s:12:&quot;Razao Social&quot;;s:12:&quot;Razao Social&quot;;}]]></property>
        <property name="Left">461</property>
        <property name="Name">opcao_busca</property>
        <property name="Top">28</property>
        <property name="Width">160</property>
        <property name="jsOnKeyPress">opcao_buscaJSKeyPress</property>
      </object>
      <object class="Button" name="bt_buscar" >
        <property name="ButtonType">btNormal</property>
        <property name="Caption">Buscar</property>
        <property name="Color">#EBE9ED</property>
        <property name="Height">25</property>
        <property name="Left">640</property>
        <property name="Name">bt_buscar</property>
        <property name="ParentColor">0</property>
        <property name="Top">21</property>
        <property name="Width">75</property>
        <property name="OnClick">bt_buscarClick</property>
      </object>
    </object>
    <object class="Label" name="Label67" >
      <property name="Caption">Registros Obtidos:</property>
      <property name="Color">#FFC0CB</property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label67</property>
      <property name="ParentColor">0</property>
      <property name="Top">93</property>
      <property name="Width">139</property>
    </object>
    <object class="DBGrid" name="registros_clientes" >
      <property name="Columns"><![CDATA[a:13:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Numero&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_numero&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_cliente_codigo_tipo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;110&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Nome&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:16:&quot;mgt_cliente_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;200&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Razao Social&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_cliente_razao_social&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;200&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:18:&quot;Inscricao Estadual&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_cliente_inscricao_estadual&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;110&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Fone&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_cliente_fone_comercial&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Endereco&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:20:&quot;mgt_cliente_endereco&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;150&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Bairro&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_bairro&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Cidade&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_cidade&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Estado&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_estado&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:11;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:3:&quot;CEP&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:15:&quot;mgt_cliente_cep&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:12;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Pais&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:16:&quot;mgt_cliente_pais&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;110&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">97</property>
      <property name="Left">8</property>
      <property name="Name">registros_clientes</property>
      <property name="ReadOnly">1</property>
      <property name="Top">107</property>
      <property name="Width">722</property>
      <property name="jsOnRowChanged">registros_clientesJSRowChanged</property>
    </object>
    <object class="Label" name="Label68" >
      <property name="Caption">Cliente</property>
      <property name="Color">#FFC0CB</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label68</property>
      <property name="ParentColor">0</property>
      <property name="Top">224</property>
      <property name="Width">44</property>
    </object>
    <object class="Edit" name="adiciona_cliente_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">62</property>
      <property name="MaxLength">11</property>
      <property name="Name">adiciona_cliente_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">220</property>
      <property name="Width">41</property>
    </object>
    <object class="Label" name="Label69" >
      <property name="Caption"><![CDATA[Cliente Codigo]]></property>
      <property name="Color">#FFC0CB</property>
      <property name="Height">13</property>
      <property name="Left">106</property>
      <property name="Name">Label69</property>
      <property name="ParentColor">0</property>
      <property name="Top">207</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="adiciona_cliente_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">80</property>
      <property name="Name">adiciona_cliente_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">220</property>
      <property name="Width">126</property>
    </object>
    <object class="Edit" name="adiciona_cliente_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">236</property>
      <property name="MaxLength">100</property>
      <property name="Name">adiciona_cliente_nome</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">220</property>
      <property name="Width">494</property>
    </object>
    <object class="Label" name="Label70" >
      <property name="Caption">Cliente Nome</property>
      <property name="Color">#FFC0CB</property>
      <property name="Height">13</property>
      <property name="Left">236</property>
      <property name="Name">Label70</property>
      <property name="ParentColor">0</property>
      <property name="Top">207</property>
      <property name="Width">75</property>
    </object>
    <object class="Button" name="bt_adiciona_cliente" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption">Adicionar Cliente</property>
      <property name="Color">#EBE9ED</property>
      <property name="Height">25</property>
      <property name="Left">312</property>
      <property name="Name">bt_adiciona_cliente</property>
      <property name="ParentColor">0</property>
      <property name="Top">249</property>
      <property name="Width">116</property>
      <property name="OnClick">bt_adiciona_clienteClick</property>
    </object>
    <object class="Button" name="bt_fechar_cliente" >
      <property name="Caption">Fechar</property>
      <property name="Color">#EBE9ED</property>
      <property name="Height">25</property>
      <property name="Left">666</property>
      <property name="Name">bt_fechar_cliente</property>
      <property name="ParentColor">0</property>
      <property name="Top">249</property>
      <property name="Width">52</property>
      <property name="OnClick">bt_fechar_clienteClick</property>
    </object>
  </object>
  <object class="Window" name="confirmacao" >
    <property name="Caption"><![CDATA[Confirmacao]]></property>
    <property name="Height">111</property>
    <property name="IsVisible">0</property>
    <property name="Left">190</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">1378</property>
    <property name="Width">369</property>
    <object class="Label" name="msg_confirmacao" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Gerar o XML do CCe&lt;/b&gt;&lt;/center&gt;Voce deseja realmente gerar o XML do CTe?&lt;br&gt;&lt;font color=#FF0000&gt;&lt;b&gt;Obs.: Clique somente uma vez no botao escolhido e aguarde a proxima tela.&lt;/b&gt;&lt;/font&gt;]]></property>
      <property name="Height">48</property>
      <property name="Left">17</property>
      <property name="Name">msg_confirmacao</property>
      <property name="Top">21</property>
      <property name="Width">341</property>
    </object>
    <object class="Button" name="bt_nao" >
      <property name="Caption"><![CDATA[Nao]]></property>
      <property name="Height">25</property>
      <property name="Left">110</property>
      <property name="Name">bt_nao</property>
      <property name="Top">74</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_naoClick</property>
    </object>
    <object class="Button" name="bt_sim" >
      <property name="Caption">Sim</property>
      <property name="Height">25</property>
      <property name="Left">190</property>
      <property name="Name">bt_sim</property>
      <property name="Top">74</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_simClick</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Dados do Veiculo]]></property>
    <property name="Height">79</property>
    <property name="Left">6</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">959</property>
    <property name="Width">741</property>
    <object class="Edit" name="mgt_cte_renavam" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">68</property>
      <property name="MaxLength">9</property>
      <property name="Name">mgt_cte_renavam</property>
      <property name="ParentColor">0</property>
      <property name="Top">19</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_cte_renavamJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_placa" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">176</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_cte_placa</property>
      <property name="ParentColor">0</property>
      <property name="Top">19</property>
      <property name="Width">55</property>
      <property name="jsOnKeyPress">mgt_cte_placaJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_cte_tara" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">286</property>
      <property name="MaxLength">6</property>
      <property name="Name">mgt_cte_tara</property>
      <property name="ParentColor">0</property>
      <property name="Top">19</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_cte_taraJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_taraJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_capkg" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">425</property>
      <property name="MaxLength">6</property>
      <property name="Name">mgt_cte_capkg</property>
      <property name="ParentColor">0</property>
      <property name="Top">19</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_cte_capkgJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_capkgJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_cte_capm3" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">571</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_cte_capm3</property>
      <property name="ParentColor">0</property>
      <property name="Top">19</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_cte_capm3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cte_capm3JSKeyUp</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption">RENAVAM</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label2</property>
      <property name="Top">23</property>
      <property name="Width">50</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption">Placa</property>
      <property name="Height">13</property>
      <property name="Left">146</property>
      <property name="Name">Label3</property>
      <property name="Top">23</property>
      <property name="Width">25</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">Tara KG</property>
      <property name="Height">13</property>
      <property name="Left">242</property>
      <property name="Name">Label4</property>
      <property name="Top">23</property>
      <property name="Width">40</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption">Capacidade KG</property>
      <property name="Height">13</property>
      <property name="Left">346</property>
      <property name="Name">Label5</property>
      <property name="Top">23</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption">Capacidade M3</property>
      <property name="Height">13</property>
      <property name="Left">493</property>
      <property name="Name">Label6</property>
      <property name="Top">23</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption"><![CDATA[UF do Veiculo]]></property>
      <property name="Height">13</property>
      <property name="Left">618</property>
      <property name="Name">Label7</property>
      <property name="Top">23</property>
      <property name="Width">65</property>
    </object>
    <object class="ComboBox" name="mgt_cte_uf" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="ItemIndex">SP</property>
      <property name="Items"><![CDATA[a:27:{s:2:&quot;AC&quot;;s:2:&quot;AC&quot;;s:2:&quot;AL&quot;;s:2:&quot;AL&quot;;s:2:&quot;AP&quot;;s:2:&quot;AP&quot;;s:2:&quot;AM&quot;;s:2:&quot;AM&quot;;s:2:&quot;BA&quot;;s:2:&quot;BA&quot;;s:2:&quot;CE&quot;;s:2:&quot;CE&quot;;s:2:&quot;DF&quot;;s:2:&quot;DF&quot;;s:2:&quot;ES&quot;;s:2:&quot;ES&quot;;s:2:&quot;GO&quot;;s:2:&quot;GO&quot;;s:2:&quot;MA&quot;;s:2:&quot;MA&quot;;s:2:&quot;MT&quot;;s:2:&quot;MT&quot;;s:2:&quot;MS&quot;;s:2:&quot;MS&quot;;s:2:&quot;MG&quot;;s:2:&quot;MG&quot;;s:2:&quot;PA&quot;;s:2:&quot;PA&quot;;s:2:&quot;PB&quot;;s:2:&quot;PB&quot;;s:2:&quot;PR&quot;;s:2:&quot;PR&quot;;s:2:&quot;PE&quot;;s:2:&quot;PE&quot;;s:2:&quot;PI&quot;;s:2:&quot;PI&quot;;s:2:&quot;RN&quot;;s:2:&quot;RN&quot;;s:2:&quot;RS&quot;;s:2:&quot;RS&quot;;s:2:&quot;RJ&quot;;s:2:&quot;RJ&quot;;s:2:&quot;RO&quot;;s:2:&quot;RO&quot;;s:2:&quot;RR&quot;;s:2:&quot;RR&quot;;s:2:&quot;SC&quot;;s:2:&quot;SC&quot;;s:2:&quot;SP&quot;;s:2:&quot;SP&quot;;s:2:&quot;SE&quot;;s:2:&quot;SE&quot;;s:2:&quot;TO&quot;;s:2:&quot;TO&quot;;}]]></property>
      <property name="Left">686</property>
      <property name="Name">mgt_cte_uf</property>
      <property name="ParentColor">0</property>
      <property name="Top">19</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_cte_ufJSKeyPress</property>
    </object>
    <object class="ComboBox" name="mgt_cte_tpprop" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">18</property>
      <property name="ItemIndex">P</property>
      <property name="Items"><![CDATA[a:2:{s:1:&quot;P&quot;;s:7:&quot;Proprio&quot;;s:1:&quot;T&quot;;s:8:&quot;Terceiro&quot;;}]]></property>
      <property name="Left">132</property>
      <property name="Name">mgt_cte_tpprop</property>
      <property name="ParentColor">0</property>
      <property name="Top">49</property>
      <property name="Width">80</property>
      <property name="jsOnKeyPress">mgt_cte_tppropJSKeyPress</property>
    </object>
    <object class="ComboBox" name="mgt_cte_tpveic" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">18</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:2:{i:0;s:6:&quot;Tracao&quot;;i:1;s:7:&quot;Reboque&quot;;}]]></property>
      <property name="Left">309</property>
      <property name="Name">mgt_cte_tpveic</property>
      <property name="ParentColor">0</property>
      <property name="Top">49</property>
      <property name="Width">80</property>
      <property name="jsOnKeyPress">mgt_cte_tpveicJSKeyPress</property>
    </object>
    <object class="ComboBox" name="mgt_cte_tprod" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">18</property>
      <property name="ItemIndex">05</property>
      <property name="Items"><![CDATA[a:7:{s:2:&quot;00&quot;;s:13:&quot;Nao Aplicavel&quot;;s:2:&quot;01&quot;;s:5:&quot;Truck&quot;;s:2:&quot;02&quot;;s:4:&quot;Toco&quot;;s:2:&quot;03&quot;;s:15:&quot;Cavalo Mecanico&quot;;s:2:&quot;04&quot;;s:3:&quot;VAN&quot;;s:2:&quot;05&quot;;s:10:&quot;Utilitario&quot;;s:2:&quot;06&quot;;s:6:&quot;Outros&quot;;}]]></property>
      <property name="Left">449</property>
      <property name="Name">mgt_cte_tprod</property>
      <property name="ParentColor">0</property>
      <property name="Top">49</property>
      <property name="Width">110</property>
      <property name="jsOnKeyPress">mgt_cte_tprodJSKeyPress</property>
    </object>
    <object class="ComboBox" name="mgt_cte_tpcar" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">18</property>
      <property name="ItemIndex">04</property>
      <property name="Items"><![CDATA[a:6:{s:2:&quot;00&quot;;s:13:&quot;Nao Aplicavel&quot;;s:2:&quot;01&quot;;s:6:&quot;Aberta&quot;;s:2:&quot;02&quot;;s:11:&quot;Fechada/Bau&quot;;s:2:&quot;03&quot;;s:9:&quot;Granelera&quot;;s:2:&quot;04&quot;;s:15:&quot;Porta Container&quot;;s:2:&quot;05&quot;;s:5:&quot;Sider&quot;;}]]></property>
      <property name="Left">628</property>
      <property name="Name">mgt_cte_tpcar</property>
      <property name="ParentColor">0</property>
      <property name="Top">48</property>
      <property name="Width">105</property>
      <property name="jsOnKeyPress">mgt_cte_tpcarJSKeyPress</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption"><![CDATA[Propriedade do veiculo]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label8</property>
      <property name="Top">51</property>
      <property name="Width">110</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption"><![CDATA[Tipo de veiculo]]></property>
      <property name="Height">13</property>
      <property name="Left">232</property>
      <property name="Name">Label9</property>
      <property name="Top">51</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">Rodado</property>
      <property name="Height">13</property>
      <property name="Left">405</property>
      <property name="Name">Label10</property>
      <property name="Top">51</property>
      <property name="Width">40</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Carroceria</property>
      <property name="Height">13</property>
      <property name="Left">571</property>
      <property name="Name">Label11</property>
      <property name="Top">51</property>
      <property name="Width">55</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">701</property>
        <property name="Top">69</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
