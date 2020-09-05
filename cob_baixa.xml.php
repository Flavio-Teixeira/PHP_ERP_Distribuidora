<?php
<object class="cobbaixa" name="cobbaixa" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">588</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cobbaixa</property>
  <property name="Width">755</property>
  <property name="OnCreate">cobbaixaCreate</property>
  <property name="jsOnLoad">cobbaixaJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[COBRANCA - Baixa de Cobranca]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Periodo]]></property>
    <property name="Height">90</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">36</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Periodo de Vencimento:]]></property>
      <property name="Height">13</property>
      <property name="Left">7</property>
      <property name="Name">Label1</property>
      <property name="Top">40</property>
      <property name="Width">135</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_data_ini" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">145</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_data_ini</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">36</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_data_iniJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_data_iniJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_data_fim" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">250</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_data_fim</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">35</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_data_fimJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_data_fimJSKeyUp</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Ate]]></property>
      <property name="Height">13</property>
      <property name="Left">225</property>
      <property name="Name">Label3</property>
      <property name="Top">40</property>
      <property name="Width">20</property>
    </object>
    <object class="Button" name="bt_procurar" >
      <property name="Caption">Procurar</property>
      <property name="Height">25</property>
      <property name="Left">647</property>
      <property name="Name">bt_procurar</property>
      <property name="Top">57</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_procurarClick</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">Nro.Nota Fiscal</property>
      <property name="Height">13</property>
      <property name="Left">496</property>
      <property name="Name">Label4</property>
      <property name="Top">63</property>
      <property name="Width">84</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_numero" >
      <property name="Height">21</property>
      <property name="Left">584</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_numero</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">59</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_numeroJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_numeroJSKeyUp</property>
    </object>
    <object class="CheckBox" name="mgt_opcao_programada" >
      <property name="Caption">Venda Programada</property>
      <property name="Height">21</property>
      <property name="Left">584</property>
      <property name="Name">mgt_opcao_programada</property>
      <property name="Top">25</property>
      <property name="Width">130</property>
    </object>
    <object class="ComboBox" name="mgt_status_procura" >
      <property name="Height">18</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:3:{s:9:&quot;Em Aberto&quot;;s:9:&quot;Em Aberto&quot;;s:5:&quot;Pagos&quot;;s:5:&quot;Pagos&quot;;s:5:&quot;Todos&quot;;s:5:&quot;Todos&quot;;}]]></property>
      <property name="Left">145</property>
      <property name="Name">mgt_status_procura</property>
      <property name="Top">14</property>
      <property name="Width">180</property>
    </object>
    <object class="Label" name="Label21" >
      <property name="Caption">Status de Procura:</property>
      <property name="Height">13</property>
      <property name="Left">39</property>
      <property name="Name">Label21</property>
      <property name="Top">17</property>
      <property name="Width">103</property>
    </object>
    <object class="Label" name="Label22" >
      <property name="Caption">Nome do Cliente:</property>
      <property name="Height">13</property>
      <property name="Left">42</property>
      <property name="Name">Label22</property>
      <property name="Top">63</property>
      <property name="Width">100</property>
    </object>
    <object class="Edit" name="mgt_nome_cliente" >
      <property name="Height">21</property>
      <property name="Left">145</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nome_cliente</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">59</property>
      <property name="Width">179</property>
      <property name="jsOnKeyPress">mgt_nome_clienteJSKeyPress</property>
    </object>
    <object class="Label" name="Label23" >
      <property name="Caption"><![CDATA[Vlr. Cobranca]]></property>
      <property name="Height">13</property>
      <property name="Left">330</property>
      <property name="Name">Label23</property>
      <property name="Top">63</property>
      <property name="Width">78</property>
    </object>
    <object class="Edit" name="mgt_vlr_cobranca" >
      <property name="Height">21</property>
      <property name="Left">411</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_vlr_cobranca</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">59</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_vlr_cobrancaJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_vlr_cobrancaJSKeyUp</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption">Tipo:</property>
      <property name="Height">13</property>
      <property name="Left">330</property>
      <property name="Name">Label9</property>
      <property name="Top">17</property>
      <property name="Width">31</property>
    </object>
    <object class="ComboBox" name="mgt_nota_fiscal_finalidade" >
      <property name="Height">18</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:4:{s:3:&quot;TOD&quot;;s:5:&quot;Todos&quot;;s:3:&quot;PRD&quot;;s:14:&quot;PRD - Produtos&quot;;s:3:&quot;SRV&quot;;s:14:&quot;SRV - Servicos&quot;;s:3:&quot;NVL&quot;;s:20:&quot;NVL - Nao Vinculados&quot;;}]]></property>
      <property name="Left">365</property>
      <property name="Name">mgt_nota_fiscal_finalidade</property>
      <property name="Top">14</property>
      <property name="Width">141</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">533</property>
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
    <property name="Height">179</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">129</property>
    <property name="Width">730</property>
    <object class="DBGrid" name="registros" >
      <property name="Columns"><![CDATA[a:15:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_swap_cobranca_finalidade&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;30&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:15:&quot;Nro.Nota Fiscal&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:29:&quot;mgt_swap_cobranca_nota_fiscal&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;85&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Cobranca&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_swap_cobranca_dup_nro&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;55&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;DT.Emissao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_swap_cobranca_data_emissao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:5:&quot;Banco&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:29:&quot;mgt_swap_cobranca_dup_cod_bco&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;40&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_swap_cobranca_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;110&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Cliente&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:22:&quot;mgt_swap_cobranca_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;144&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:17:&quot;Vlr.Cobranca (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_swap_cobranca_dup_vlr&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;95&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;DT.Vencto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:29:&quot;mgt_swap_cobranca_dup_dt_vcto&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;DT.Pagto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:29:&quot;mgt_swap_cobranca_dup_dt_pgto&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:13:&quot;Vlr.Pagto(R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_swap_cobranca_dup_vlr_pgto&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:11;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:14:&quot;Vlr.Juros (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:31:&quot;mgt_swap_cobranca_dup_vlr_juros&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:12;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:25:&quot;mgt_swap_cobranca_posicao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_swap_cobranca_posicao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:13;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Cod.Bancario&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_swap_cobranca_dup_cod_bancario&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:14;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Observacao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:32:&quot;mgt_swap_cobranca_dup_observacao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}}]]></property>
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
      <property name="Top">154</property>
      <property name="Width">96</property>
    </object>
    <object class="Label" name="mgt_total_geral_cobrancas" >
      <property name="Caption">0.00</property>
      <property name="Height">13</property>
      <property name="Left">552</property>
      <property name="Name">mgt_total_geral_cobrancas</property>
      <property name="Top">154</property>
      <property name="Width">82</property>
    </object>
    <object class="Button" name="bt_imprimir" >
      <property name="Caption"><![CDATA[Imprimir Relacao de Cobranca]]></property>
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="Name">bt_imprimir</property>
      <property name="Top">150</property>
      <property name="Width">200</property>
      <property name="OnClick">bt_imprimirClick</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox4" >
    <property name="Caption"><![CDATA[Efetuar a Baixa apenas da Cobranca selecionada]]></property>
    <property name="Height">142</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox4</property>
    <property name="Top">390</property>
    <property name="Width">730</property>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Cobranca]]></property>
      <property name="Height">13</property>
      <property name="Left">80</property>
      <property name="Name">Label5</property>
      <property name="Top">20</property>
      <property name="Width">53</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_nro" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">135</property>
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
      <property name="Left">214</property>
      <property name="Name">Label6</property>
      <property name="Top">20</property>
      <property name="Width">15</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_nota_fiscal" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">232</property>
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
      <property name="Top">39</property>
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
      <property name="Top">52</property>
      <property name="Width">123</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption">Cliente</property>
      <property name="Height">13</property>
      <property name="Left">138</property>
      <property name="Name">Label8</property>
      <property name="Top">39</property>
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
      <property name="Top">52</property>
      <property name="Width">579</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_nomeJSKeyPress</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">Vencimento</property>
      <property name="Height">13</property>
      <property name="Left">434</property>
      <property name="Name">Label10</property>
      <property name="Top">20</property>
      <property name="Width">67</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_dt_vcto" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">505</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_swap_cobranca_dup_dt_vcto</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_dt_vctoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_swap_cobranca_dup_dt_vctoJSKeyUp</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Valor (R$)</property>
      <property name="Height">13</property>
      <property name="Left">581</property>
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
      <property name="Caption">DT.Pagto</property>
      <property name="Height">13</property>
      <property name="Left">10</property>
      <property name="Name">Label12</property>
      <property name="Top">75</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_dt_pgto" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">10</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_swap_cobranca_dup_dt_pgto</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">88</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_dt_pgtoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_swap_cobranca_dup_dt_pgtoJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_vlr_juros" >
      <property name="Height">21</property>
      <property name="Left">90</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_swap_cobranca_dup_vlr_juros</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">88</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_vlr_jurosJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_swap_cobranca_dup_vlr_jurosJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_vlr_pgto" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">170</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_swap_cobranca_dup_vlr_pgto</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">88</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_vlr_pgtoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_swap_cobranca_dup_vlr_pgtoJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_observacao" >
      <property name="Height">21</property>
      <property name="Left">351</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_swap_cobranca_dup_observacao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">88</property>
      <property name="Width">262</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_observacaoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_cod_bancario" >
      <property name="Height">21</property>
      <property name="Left">250</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_swap_cobranca_dup_cod_bancario</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">88</property>
      <property name="Width">95</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_cod_bancarioJSKeyPress</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption">Vlr.Juros(R$)</property>
      <property name="Height">13</property>
      <property name="Left">90</property>
      <property name="Name">Label13</property>
      <property name="Top">75</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption">Vlr.Pagto(R$)</property>
      <property name="Height">13</property>
      <property name="Left">170</property>
      <property name="Name">Label14</property>
      <property name="Top">75</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Caption"><![CDATA[Observacoes]]></property>
      <property name="Height">13</property>
      <property name="Left">351</property>
      <property name="Name">Label15</property>
      <property name="Top">75</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label16" >
      <property name="Caption"><![CDATA[Codigo Bancario]]></property>
      <property name="Height">13</property>
      <property name="Left">250</property>
      <property name="Name">Label16</property>
      <property name="Top">75</property>
      <property name="Width">95</property>
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
      <property name="Left">356</property>
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
      <property name="Left">39</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_swap_cobranca_finalidade</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">16</property>
      <property name="Width">33</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_finalidadeJSKeyPress</property>
    </object>
    <object class="Button" name="bt_baixar" >
      <property name="Caption">Efetuar Baixa</property>
      <property name="Height">25</property>
      <property name="Left">619</property>
      <property name="Name">bt_baixar</property>
      <property name="Top">109</property>
      <property name="Width">98</property>
      <property name="OnClick">bt_baixarClick</property>
    </object>
    <object class="Label" name="Label26" >
      <property name="Caption">Conta</property>
      <property name="Height">13</property>
      <property name="Left">53</property>
      <property name="Name">Label26</property>
      <property name="Top">115</property>
      <property name="Width">35</property>
    </object>
    <object class="ComboBox" name="mgt_swap_cobranca_dup_cod_bco" >
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">90</property>
      <property name="Name">mgt_swap_cobranca_dup_cod_bco</property>
      <property name="ParentColor">0</property>
      <property name="Top">111</property>
      <property name="Width">523</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_cod_bcoJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox5" >
    <property name="Caption"><![CDATA[Efetuar a Baixa de todas as cobrancas selecionadas]]></property>
    <property name="Height">70</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox5</property>
    <property name="ParentColor">0</property>
    <property name="Top">311</property>
    <property name="Width">730</property>
    <object class="Edit" name="mgt_swap_selecionadas" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">86</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_swap_selecionadas</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">16</property>
      <property name="Width">527</property>
      <property name="jsOnKeyPress">mgt_swap_selecionadasJSKeyPress</property>
    </object>
    <object class="Label" name="Label24" >
      <property name="Caption">Selecionadas</property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label24</property>
      <property name="Top">20</property>
      <property name="Width">75</property>
    </object>
    <object class="Button" name="bt_baixar_todas" >
      <property name="Caption">Efetuar Baixa</property>
      <property name="Height">25</property>
      <property name="Left">619</property>
      <property name="Name">bt_baixar_todas</property>
      <property name="Top">37</property>
      <property name="Width">98</property>
      <property name="OnClick">bt_baixar_todasClick</property>
    </object>
    <object class="Label" name="Label25" >
      <property name="Caption">Conta</property>
      <property name="Height">13</property>
      <property name="Left">48</property>
      <property name="Name">Label25</property>
      <property name="Top">43</property>
      <property name="Width">35</property>
    </object>
    <object class="ComboBox" name="mgt_swap_conta" >
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">86</property>
      <property name="Name">mgt_swap_conta</property>
      <property name="ParentColor">0</property>
      <property name="Top">39</property>
      <property name="Width">527</property>
      <property name="jsOnKeyPress">mgt_swap_contaJSKeyPress</property>
    </object>
  </object>
  <object class="Label" name="Label27" >
    <property name="Color">#FF0000</property>
    <property name="Height">5</property>
    <property name="Left">8</property>
    <property name="Name">Label27</property>
    <property name="ParentColor">0</property>
    <property name="Top">383</property>
    <property name="Width">730</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">699</property>
        <property name="Top">5</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
