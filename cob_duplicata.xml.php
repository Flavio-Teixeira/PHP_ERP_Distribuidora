<?php
<object class="cobduplicata" name="cobduplicata" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cobduplicata</property>
  <property name="Width">755</property>
  <property name="OnCreate">cobduplicataCreate</property>
  <property name="jsOnLoad">cobduplicataJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[COBRANCA - Emissao de Duplicatas]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Periodo]]></property>
    <property name="Height">66</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">36</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Periodo de Vencimento:]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label1</property>
      <property name="Top">27</property>
      <property name="Width">140</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_data_ini" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">153</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_data_ini</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">23</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_data_iniJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_data_iniJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_data_fim" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">265</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_data_fim</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">22</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_data_fimJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_data_fimJSKeyUp</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Ate]]></property>
      <property name="Height">13</property>
      <property name="Left">238</property>
      <property name="Name">Label3</property>
      <property name="Top">27</property>
      <property name="Width">20</property>
    </object>
    <object class="Button" name="bt_procurar" >
      <property name="Caption">Procurar</property>
      <property name="Height">25</property>
      <property name="Left">542</property>
      <property name="Name">bt_procurar</property>
      <property name="Top">21</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_procurarClick</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">OU Nro.Nota Fiscal</property>
      <property name="Height">13</property>
      <property name="Left">353</property>
      <property name="Name">Label4</property>
      <property name="Top">27</property>
      <property name="Width">102</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_numero" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">460</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_numero</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">23</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_numeroJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_numeroJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">449</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">644</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_baixar" >
      <property name="Caption">Gerar Duplicata</property>
      <property name="Height">25</property>
      <property name="Left">316</property>
      <property name="Name">bt_baixar</property>
      <property name="Top">17</property>
      <property name="Width">98</property>
      <property name="OnClick">bt_baixarClick</property>
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
    <object class="HiddenField" name="mgt_swap_cobranca_posicao" >
      <property name="Height">18</property>
      <property name="Left">431</property>
      <property name="Name">mgt_swap_cobranca_posicao</property>
      <property name="Top">20</property>
      <property name="Width">200</property>
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
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption"><![CDATA[Cobrancas nao pagas]]></property>
    <property name="Height">170</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">105</property>
    <property name="Width">730</property>
    <object class="DBGrid" name="registros" >
      <property name="Columns"><![CDATA[a:15:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_swap_cobranca_finalidade&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;30&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:15:&quot;Nro.Nota Fiscal&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:29:&quot;mgt_swap_cobranca_nota_fiscal&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;85&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Cobranca&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_swap_cobranca_dup_nro&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;55&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;DT.Emissao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_swap_cobranca_data_emissao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:5:&quot;Banco&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:29:&quot;mgt_swap_cobranca_dup_cod_bco&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;40&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_swap_cobranca_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;110&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Cliente&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:22:&quot;mgt_swap_cobranca_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;144&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:17:&quot;Vlr.Cobranca (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_swap_cobranca_dup_vlr&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;95&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;DT.Vencto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:29:&quot;mgt_swap_cobranca_dup_dt_vcto&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;DT.Pagto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:29:&quot;mgt_swap_cobranca_dup_dt_pgto&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:13:&quot;Vlr.Pagto(R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_swap_cobranca_dup_vlr_pgto&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:11;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:14:&quot;Vlr.Juros (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:31:&quot;mgt_swap_cobranca_dup_vlr_juros&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:12;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:25:&quot;mgt_swap_cobranca_posicao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_swap_cobranca_posicao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:13;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Cod.Bancario&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_swap_cobranca_dup_cod_bancario&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:14;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Observacao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:32:&quot;mgt_swap_cobranca_dup_observacao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">126</property>
      <property name="Left">10</property>
      <property name="Name">registros</property>
      <property name="Top">18</property>
      <property name="Width">709</property>
      <property name="jsOnRowChanged">registrosJSRowChanged</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Total Geral (R$):&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">454</property>
      <property name="Name">Label2</property>
      <property name="Top">149</property>
      <property name="Width">96</property>
    </object>
    <object class="Label" name="mgt_total_geral_cobrancas" >
      <property name="Caption">0.00</property>
      <property name="Height">13</property>
      <property name="Left">552</property>
      <property name="Name">mgt_total_geral_cobrancas</property>
      <property name="Top">149</property>
      <property name="Width">82</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox4" >
    <property name="Caption"><![CDATA[Cobranca selecionada]]></property>
    <property name="Height">170</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox4</property>
    <property name="Top">278</property>
    <property name="Width">730</property>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Cobranca]]></property>
      <property name="Height">13</property>
      <property name="Left">75</property>
      <property name="Name">Label5</property>
      <property name="Top">20</property>
      <property name="Width">53</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_nro" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">132</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_swap_cobranca_dup_nro</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_nroJSKeyPress</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption">NF</property>
      <property name="Height">13</property>
      <property name="Left">213</property>
      <property name="Name">Label6</property>
      <property name="Top">20</property>
      <property name="Width">15</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_nota_fiscal" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">230</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_swap_cobranca_nota_fiscal</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_nota_fiscalJSKeyPress</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label7</property>
      <property name="Top">41</property>
      <property name="Width">123</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_swap_cobranca_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">54</property>
      <property name="Width">123</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption">Cliente</property>
      <property name="Height">13</property>
      <property name="Left">138</property>
      <property name="Name">Label8</property>
      <property name="Top">41</property>
      <property name="Width">579</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">138</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_swap_cobranca_nome</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">54</property>
      <property name="Width">579</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_nomeJSKeyPress</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption">Banco</property>
      <property name="Height">13</property>
      <property name="Left">250</property>
      <property name="Name">Label9</property>
      <property name="Top">78</property>
      <property name="Width">40</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_cod_bco" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">250</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_swap_cobranca_dup_cod_bco</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">91</property>
      <property name="Width">40</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_cod_bcoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_swap_cobranca_dup_cod_bcoJSKeyUp</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">Vencimento</property>
      <property name="Height">13</property>
      <property name="Left">436</property>
      <property name="Name">Label10</property>
      <property name="Top">20</property>
      <property name="Width">67</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_dt_vcto" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">506</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_swap_cobranca_dup_dt_vcto</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_dt_vctoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_swap_cobranca_dup_dt_vctoJSKeyUp</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Valor (R$)</property>
      <property name="Height">13</property>
      <property name="Left">584</property>
      <property name="Name">Label11</property>
      <property name="Top">20</property>
      <property name="Width">58</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_vlr" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">642</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_swap_cobranca_dup_vlr</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_vlrJSKeyPress</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Alignment">agRight</property>
      <property name="Caption">DT.Pagamento</property>
      <property name="Height">13</property>
      <property name="Left">69</property>
      <property name="Name">Label12</property>
      <property name="Top">95</property>
      <property name="Width">87</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_dt_pgto" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">162</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_swap_cobranca_dup_dt_pgto</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">91</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_dt_pgtoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_swap_cobranca_dup_dt_pgtoJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_vlr_juros" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">162</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_swap_cobranca_dup_vlr_juros</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">115</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_vlr_jurosJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_swap_cobranca_dup_vlr_jurosJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_vlr_pgto" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">162</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_swap_cobranca_dup_vlr_pgto</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">139</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_vlr_pgtoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_swap_cobranca_dup_vlr_pgtoJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_observacao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">250</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_swap_cobranca_dup_observacao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">139</property>
      <property name="Width">467</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_observacaoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_cod_bancario" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">294</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_swap_cobranca_dup_cod_bancario</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">91</property>
      <property name="Width">423</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_cod_bancarioJSKeyPress</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Valor dos Juros (R$)</property>
      <property name="Height">13</property>
      <property name="Left">34</property>
      <property name="Name">Label13</property>
      <property name="Top">119</property>
      <property name="Width">122</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Valor do Pagamento (R$)</property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label14</property>
      <property name="Top">143</property>
      <property name="Width">147</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Caption"><![CDATA[Observacoes]]></property>
      <property name="Height">13</property>
      <property name="Left">250</property>
      <property name="Name">Label15</property>
      <property name="Top">123</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label16" >
      <property name="Caption"><![CDATA[Codigo Bancario]]></property>
      <property name="Height">13</property>
      <property name="Left">294</property>
      <property name="Name">Label16</property>
      <property name="Top">78</property>
      <property name="Width">93</property>
    </object>
    <object class="Label" name="Label17" >
      <property name="Caption"><![CDATA[Emissao]]></property>
      <property name="Height">13</property>
      <property name="Left">307</property>
      <property name="Name">Label17</property>
      <property name="Top">20</property>
      <property name="Width">49</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_data_emissao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">358</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_swap_cobranca_data_emissao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_data_emissaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label20" >
      <property name="Caption">Tipo</property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label20</property>
      <property name="Top">20</property>
      <property name="Width">26</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_finalidade" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">38</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_swap_cobranca_finalidade</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">16</property>
      <property name="Width">33</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_finalidadeJSKeyPress</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">699</property>
        <property name="Top">5</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
