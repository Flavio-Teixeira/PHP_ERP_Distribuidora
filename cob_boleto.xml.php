<?php
<object class="cobboleto" name="cobboleto" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">588</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cobboleto</property>
  <property name="Width">755</property>
  <property name="OnCreate">cobboletoCreate</property>
  <property name="jsOnLoad">cobboletoJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CONTAS A RECEBER - Emissao de Boletos]]></property>
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
      <property name="Left">645</property>
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
      <property name="Items"><![CDATA[a:3:{s:12:&quot;Nao Impresso&quot;;s:12:&quot;Nao Impresso&quot;;s:8:&quot;Impresso&quot;;s:8:&quot;Impresso&quot;;s:10:&quot;Reimpresso&quot;;s:10:&quot;Reimpresso&quot;;}]]></property>
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
      <property name="MaxLength">11</property>
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
    <property name="Top">394</property>
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
      <property name="Columns"><![CDATA[a:14:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_swap_cobranca_finalidade&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;30&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Nro.NF&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:29:&quot;mgt_swap_cobranca_nota_fiscal&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;45&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Cobranca&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_swap_cobranca_dup_nro&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;55&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;DT.Emissao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_swap_cobranca_data_emissao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_swap_cobranca_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Cliente&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:22:&quot;mgt_swap_cobranca_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Valor(R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_swap_cobranca_dup_vlr&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;55&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;DT.Vencto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:29:&quot;mgt_swap_cobranca_dup_dt_vcto&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;DT.Pagto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:29:&quot;mgt_swap_cobranca_dup_dt_pgto&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:8:&quot;taCenter&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Status&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_swap_cobranca_status&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;75&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:1:&quot;-&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_swap_cobranca_status_1&quot;;s:9:&quot;FontColor&quot;;s:7:&quot;#FF0000&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;10&quot;;}i:11;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:1:&quot;-&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_swap_cobranca_status_2&quot;;s:9:&quot;FontColor&quot;;s:7:&quot;#00FF00&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;10&quot;;}i:12;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:1:&quot;-&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_swap_cobranca_status_3&quot;;s:9:&quot;FontColor&quot;;s:7:&quot;#0000FF&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;10&quot;;}i:13;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:25:&quot;mgt_swap_cobranca_posicao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_swap_cobranca_posicao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Cobrancas</property>
      <property name="Height">152</property>
      <property name="Left">10</property>
      <property name="Name">registros</property>
      <property name="Top">17</property>
      <property name="Width">710</property>
      <property name="jsOnRowChanged">registrosJSRowChanged</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox4" >
    <property name="Height">83</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox4</property>
    <property name="Top">310</property>
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
      <property name="Width">400</property>
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
      <property name="Width">400</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_nomeJSKeyPress</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">Vencimento</property>
      <property name="Height">13</property>
      <property name="Left">442</property>
      <property name="Name">Label10</property>
      <property name="Top">20</property>
      <property name="Width">57</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_dt_vcto" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">505</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_swap_cobranca_dup_dt_vcto</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_dt_vctoJSKeyPress</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Valor (R$)</property>
      <property name="Height">13</property>
      <property name="Left">588</property>
      <property name="Name">Label11</property>
      <property name="Top">20</property>
      <property name="Width">50</property>
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
    <object class="Label" name="Label17" >
      <property name="Caption"><![CDATA[Emissao]]></property>
      <property name="Height">13</property>
      <property name="Left">311</property>
      <property name="Name">Label17</property>
      <property name="Top">20</property>
      <property name="Width">42</property>
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
    <object class="Button" name="bt_imprimir" >
      <property name="Caption">Imprimir Boleto</property>
      <property name="Height">25</property>
      <property name="Left">619</property>
      <property name="Name">bt_imprimir</property>
      <property name="Top">50</property>
      <property name="Width">98</property>
      <property name="OnClick">bt_imprimirClick</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption">Status</property>
      <property name="Height">13</property>
      <property name="Left">541</property>
      <property name="Name">Label2</property>
      <property name="Top">39</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_status" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">541</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_swap_cobranca_status</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">52</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_statusJSKeyPress</property>
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
