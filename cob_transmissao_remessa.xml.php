<?php
<object class="cobtransmissaoremessa" name="cobtransmissaoremessa" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cobtransmissaoremessa</property>
  <property name="Width">755</property>
  <property name="OnCreate">cobtransmissaoremessaCreate</property>
  <property name="jsOnLoad">cobtransmissaoremessaJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[COBRANCA - Arquivo de Transmissao de Remessa]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="DBGrid" name="registros" >
    <property name="Columns"><![CDATA[a:8:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Numero&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:16:&quot;mgt_banco_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:19:&quot;mgt_banco_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;460&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Nro.Convenio&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_banco_convenio&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;150&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;CNAB&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:14:&quot;mgt_banco_cnab&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Agencia&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:17:&quot;mgt_banco_agencia&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Agencia_DV&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:20:&quot;mgt_banco_agencia_dv&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:5:&quot;Conta&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:15:&quot;mgt_banco_conta&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Conta_DV&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_banco_conta_dv&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}}]]></property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Bancos</property>
    <property name="Height">94</property>
    <property name="Left">8</property>
    <property name="Name">registros</property>
    <property name="ReadOnly">1</property>
    <property name="Top">35</property>
    <property name="Width">730</property>
    <property name="jsOnRowChanged">registrosJSRowChanged</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption">Bancos Cadastrados:</property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label2</property>
    <property name="Top">18</property>
    <property name="Width">139</property>
  </object>
  <object class="GroupBox" name="GroupBox4" >
    <property name="Caption">Representante Selecionado</property>
    <property name="Height">101</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox4</property>
    <property name="Top">341</property>
    <property name="Width">730</property>
    <object class="Label" name="Label6" >
      <property name="Caption">Banco</property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label6</property>
      <property name="Top">24</property>
      <property name="Width">35</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">99</property>
      <property name="Name">Label7</property>
      <property name="Top">24</property>
      <property name="Width">57</property>
    </object>
    <object class="Edit" name="mgt_banco_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">58</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_banco_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">20</property>
      <property name="Width">33</property>
      <property name="jsOnKeyPress">mgt_banco_codigoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_banco_descricao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">160</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_banco_descricao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">20</property>
      <property name="Width">177</property>
      <property name="jsOnKeyPress">mgt_banco_descricaoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_numero_escolhido" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">142</property>
      <property name="Name">mgt_nota_fiscal_numero_escolhido</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">70</property>
      <property name="Width">581</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_numero_escolhidoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_numero_escolhidoJSKeyUp</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption">Notas Fiscais de Nro.:</property>
      <property name="Height">13</property>
      <property name="Left">15</property>
      <property name="Name">Label1</property>
      <property name="Top">74</property>
      <property name="Width">123</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Convenio]]></property>
      <property name="Height">13</property>
      <property name="Left">341</property>
      <property name="Name">Label3</property>
      <property name="Top">24</property>
      <property name="Width">57</property>
    </object>
    <object class="Edit" name="mgt_banco_convenio" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">402</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_banco_convenio</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">20</property>
      <property name="Width">249</property>
      <property name="jsOnKeyPress">mgt_banco_convenioJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_banco_cnab" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">652</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_banco_cnab</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">20</property>
      <property name="Width">70</property>
      <property name="jsOnKeyPress">mgt_banco_cnabJSKeyPress</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Agencia]]></property>
      <property name="Height">13</property>
      <property name="Left">113</property>
      <property name="Name">Label5</property>
      <property name="Top">49</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_banco_agencia" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">160</property>
      <property name="MaxLength">5</property>
      <property name="Name">mgt_banco_agencia</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">45</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_banco_agenciaJSKeyPress</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">DV</property>
      <property name="Height">13</property>
      <property name="Left">208</property>
      <property name="Name">Label4</property>
      <property name="Top">49</property>
      <property name="Width">20</property>
    </object>
    <object class="Edit" name="mgt_banco_agencia_dv" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">232</property>
      <property name="MaxLength">1</property>
      <property name="Name">mgt_banco_agencia_dv</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">45</property>
      <property name="Width">20</property>
      <property name="jsOnKeyPress">mgt_banco_agencia_dvJSKeyPress</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption">Conta</property>
      <property name="Height">13</property>
      <property name="Left">353</property>
      <property name="Name">Label9</property>
      <property name="Top">49</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_banco_conta" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">402</property>
      <property name="MaxLength">12</property>
      <property name="Name">mgt_banco_conta</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">45</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_banco_contaJSKeyPress</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">DV</property>
      <property name="Height">13</property>
      <property name="Left">501</property>
      <property name="Name">Label10</property>
      <property name="Top">49</property>
      <property name="Width">20</property>
    </object>
    <object class="Edit" name="mgt_banco_conta_dv" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">523</property>
      <property name="MaxLength">1</property>
      <property name="Name">mgt_banco_conta_dv</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">45</property>
      <property name="Width">20</property>
      <property name="jsOnKeyPress">mgt_banco_conta_dvJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">448</property>
    <property name="Width">730</property>
    <object class="Button" name="Button1" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">644</property>
      <property name="Name">Button1</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_gerar_remessa" >
      <property name="Caption">Gerar Remessa</property>
      <property name="Height">25</property>
      <property name="Left">315</property>
      <property name="Name">bt_gerar_remessa</property>
      <property name="Top">17</property>
      <property name="Width">100</property>
      <property name="OnClick">bt_gerar_remessaClick</property>
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
    <object class="Label" name="Label19" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label19</property>
      <property name="Top">32</property>
      <property name="Width">148</property>
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
    <property name="Top">325</property>
    <property name="Width">730</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Periodo]]></property>
    <property name="Height">47</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">138</property>
    <property name="Width">730</property>
    <object class="Label" name="Label11" >
      <property name="Caption"><![CDATA[Periodo de Vencimento:]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label11</property>
      <property name="Top">19</property>
      <property name="Width">136</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_data_ini" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">145</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_data_ini</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">15</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_data_iniJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_data_iniJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_data_fim" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">248</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_data_fim</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">15</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_data_fimJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_data_fimJSKeyUp</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Caption"><![CDATA[Ate]]></property>
      <property name="Height">13</property>
      <property name="Left">225</property>
      <property name="Name">Label12</property>
      <property name="Top">19</property>
      <property name="Width">20</property>
    </object>
    <object class="Button" name="bt_procurar" >
      <property name="Caption">Procurar</property>
      <property name="Height">25</property>
      <property name="Left">644</property>
      <property name="Name">bt_procurar</property>
      <property name="Top">13</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_procurarClick</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption">OU Nro.Nota Fiscal</property>
      <property name="Height">13</property>
      <property name="Left">341</property>
      <property name="Name">Label13</property>
      <property name="Top">19</property>
      <property name="Width">102</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_numero" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">446</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_numero</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">15</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_numeroJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_numeroJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption"><![CDATA[Notas Fiscais localizadas no periodo]]></property>
    <property name="Height">135</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">187</property>
    <property name="Width">730</property>
    <object class="DBGrid" name="registros_notas" >
      <property name="Columns"><![CDATA[a:7:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:15:&quot;Nro.Nota Fiscal&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:22:&quot;mgt_nota_fiscal_numero&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;85&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;CFOP&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:20:&quot;mgt_nota_fiscal_cfop&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:11:&quot;Cod.Cliente&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_nota_fiscal_cliente_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Razao Social&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_nota_fiscal_razao_social&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;184&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;DT.Emissao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_nota_fiscal_data_emissao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;85&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Valor (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_nota_fiscal_valor_total&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;85&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:14:&quot;Remessa Gerada&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_nota_fiscal_remessa_gerada&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;95&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Notas_Fiscais</property>
      <property name="Height">106</property>
      <property name="Hidden"></property>
      <property name="Left">10</property>
      <property name="Name">registros_notas</property>
      <property name="Top">18</property>
      <property name="Width">709</property>
      <property name="jsOnRowChanged">registros_notasJSRowChanged</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">701</property>
        <property name="Top">309</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
