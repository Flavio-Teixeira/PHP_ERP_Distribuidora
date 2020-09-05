<?php
<object class="cobnaovinculado" name="cobnaovinculado" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">694</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cobnaovinculado</property>
  <property name="Width">755</property>
  <property name="OnCreate">cobnaovinculadoCreate</property>
  <property name="jsOnLoad">cobnaovinculadoJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[COBRANCA - Valores Nao Vinculados a Nota Fiscal]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">634</property>
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
    <object class="Button" name="bt_desdobrar" >
      <property name="Caption"><![CDATA[Registrar Lancamento]]></property>
      <property name="Height">25</property>
      <property name="Left">290</property>
      <property name="Name">bt_desdobrar</property>
      <property name="Top">17</property>
      <property name="Width">158</property>
      <property name="OnClick">bt_desdobrarClick</property>
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
    <property name="Top">17</property>
    <property name="Width">730</property>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption"><![CDATA[Selecao de Cliente para Lancamento]]></property>
    <property name="Height">170</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">33</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Caption">Dados Para Busca</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label1</property>
      <property name="Top">15</property>
      <property name="Width">304</property>
    </object>
    <object class="Edit" name="dados_busca" >
      <property name="Height">21</property>
      <property name="Left">14</property>
      <property name="Name">dados_busca</property>
      <property name="ParentColor">0</property>
      <property name="Top">28</property>
      <property name="Width">445</property>
      <property name="jsOnKeyPress">dados_buscaJSKeyPress</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption"><![CDATA[Opcoes]]></property>
      <property name="Height">13</property>
      <property name="Left">464</property>
      <property name="Name">Label2</property>
      <property name="Top">15</property>
      <property name="Width">160</property>
    </object>
    <object class="ComboBox" name="opcao_busca" >
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:5:{s:6:&quot;Numero&quot;;s:6:&quot;Numero&quot;;s:4:&quot;Tipo&quot;;s:4:&quot;Tipo&quot;;s:6:&quot;Codigo&quot;;s:6:&quot;Codigo&quot;;s:4:&quot;Nome&quot;;s:4:&quot;Nome&quot;;s:12:&quot;Razao Social&quot;;s:12:&quot;Razao Social&quot;;}]]></property>
      <property name="Left">464</property>
      <property name="Name">opcao_busca</property>
      <property name="Top">28</property>
      <property name="Width">160</property>
      <property name="jsOnKeyPress">opcao_buscaJSKeyPress</property>
    </object>
    <object class="Button" name="bt_buscar" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption">Buscar</property>
      <property name="Height">25</property>
      <property name="Left">640</property>
      <property name="Name">bt_buscar</property>
      <property name="Top">26</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_buscarClick</property>
    </object>
    <object class="Label" name="Label30" >
      <property name="Caption">Registros Obtidos:</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label30</property>
      <property name="Top">53</property>
      <property name="Width">139</property>
    </object>
    <object class="DBGrid" name="registros" >
      <property name="Columns"><![CDATA[a:13:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Numero&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_numero&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_cliente_codigo_tipo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;110&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Nome&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:16:&quot;mgt_cliente_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;200&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Razao Social&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_cliente_razao_social&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;200&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Desconto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:20:&quot;mgt_cliente_desconto&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Pgto. 1&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_cliente_condicao_pgto_1&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Pgto. 2&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_cliente_condicao_pgto_2&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Pgto. 3&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_cliente_condicao_pgto_3&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Pgto. 4&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_cliente_condicao_pgto_4&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:14:&quot;Transportadora&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_cliente_transportadora&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:11;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Observacao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_cliente_observacoes&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:12;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Bloqueado&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_cliente_status_credito&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;62&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">93</property>
      <property name="Left">14</property>
      <property name="Name">registros</property>
      <property name="ReadOnly">1</property>
      <property name="Top">67</property>
      <property name="Width">701</property>
      <property name="jsOnRowChanged">registrosJSRowChanged</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox4" >
    <property name="Caption"><![CDATA[Informacoes para o Contas a Receber (Nao Vinculado da Nota Fiscal)]]></property>
    <property name="Height">426</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox4</property>
    <property name="Top">206</property>
    <property name="Width">730</property>
    <object class="Label" name="Label6" >
      <property name="Caption"><![CDATA[Nro.Lancamento]]></property>
      <property name="Height">13</property>
      <property name="Left">68</property>
      <property name="Name">Label6</property>
      <property name="Top">67</property>
      <property name="Width">90</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_nota_fiscal" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">160</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_swap_cobranca_nota_fiscal</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">63</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_nota_fiscalJSKeyPress</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">52</property>
      <property name="Name">Label7</property>
      <property name="Top">17</property>
      <property name="Width">123</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">52</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_swap_cobranca_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">30</property>
      <property name="Width">123</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption">Cliente</property>
      <property name="Height">13</property>
      <property name="Left">180</property>
      <property name="Name">Label8</property>
      <property name="Top">17</property>
      <property name="Width">248</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_nome" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">180</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_swap_cobranca_nome</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">30</property>
      <property name="Width">537</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_nomeJSKeyPress</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption">Banco</property>
      <property name="Height">13</property>
      <property name="Left">383</property>
      <property name="Name">Label9</property>
      <property name="Top">67</property>
      <property name="Width">40</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_cod_bco" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">427</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_swap_cobranca_dup_cod_bco</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">63</property>
      <property name="Width">40</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_cod_bcoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_swap_cobranca_dup_cod_bcoJSKeyUp</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Valor Total (R$)</property>
      <property name="Height">13</property>
      <property name="Left">500</property>
      <property name="Name">Label11</property>
      <property name="Top">67</property>
      <property name="Width">90</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_dup_vlr" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">593</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_swap_cobranca_dup_vlr</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">63</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_dup_vlrJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_swap_cobranca_dup_vlrJSKeyUp</property>
    </object>
    <object class="Label" name="Label17" >
      <property name="Caption"><![CDATA[Emissao]]></property>
      <property name="Height">13</property>
      <property name="Left">239</property>
      <property name="Name">Label17</property>
      <property name="Top">67</property>
      <property name="Width">49</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_data_emissao" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">290</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_swap_cobranca_data_emissao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">63</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_data_emissaoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_swap_cobranca_data_emissaoJSKeyUp</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Condicao de Pagto-01]]></property>
      <property name="Height">13</property>
      <property name="Layer"></property>
      <property name="Left">10</property>
      <property name="Name">Label5</property>
      <property name="Top">119</property>
      <property name="Width">125</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_1" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">115</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_1JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_nro_1" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_dup_nro_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">115</property>
      <property name="Width">78</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_1JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_1" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">115</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_1JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_1" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">115</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_1JSKeyUp</property>
    </object>
    <object class="Label" name="Label123" >
      <property name="Caption">Valor (R$)</property>
      <property name="Height">15</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="Name">Label123</property>
      <property name="Top">100</property>
      <property name="Width">63</property>
    </object>
    <object class="Label" name="Label122" >
      <property name="Caption">Dt. Vencto</property>
      <property name="Height">15</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="Name">Label122</property>
      <property name="Top">100</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label121" >
      <property name="Caption">Nro. Duplicata</property>
      <property name="Height">15</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="Name">Label121</property>
      <property name="Top">100</property>
      <property name="Width">78</property>
    </object>
    <object class="Label" name="Label120" >
      <property name="Caption">DD</property>
      <property name="Height">15</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="Name">Label120</property>
      <property name="Top">100</property>
      <property name="Width">30</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Caption"><![CDATA[Condicao de Pagto-02]]></property>
      <property name="Height">13</property>
      <property name="Layer"></property>
      <property name="Left">10</property>
      <property name="Name">Label12</property>
      <property name="Top">142</property>
      <property name="Width">125</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption"><![CDATA[Condicao de Pagto-03]]></property>
      <property name="Height">13</property>
      <property name="Layer"></property>
      <property name="Left">10</property>
      <property name="Name">Label13</property>
      <property name="Top">165</property>
      <property name="Width">125</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption"><![CDATA[Condicao de Pagto-04]]></property>
      <property name="Height">13</property>
      <property name="Layer"></property>
      <property name="Left">10</property>
      <property name="Name">Label14</property>
      <property name="Top">188</property>
      <property name="Width">125</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Caption"><![CDATA[Condicao de Pagto-05]]></property>
      <property name="Height">13</property>
      <property name="Layer"></property>
      <property name="Left">10</property>
      <property name="Name">Label15</property>
      <property name="Top">211</property>
      <property name="Width">125</property>
    </object>
    <object class="Label" name="Label16" >
      <property name="Caption"><![CDATA[Condicao de Pagto-06]]></property>
      <property name="Height">13</property>
      <property name="Layer"></property>
      <property name="Left">10</property>
      <property name="Name">Label16</property>
      <property name="Top">234</property>
      <property name="Width">125</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption"><![CDATA[Condicao de Pagto-07]]></property>
      <property name="Height">13</property>
      <property name="Layer"></property>
      <property name="Left">10</property>
      <property name="Name">Label10</property>
      <property name="Top">257</property>
      <property name="Width">125</property>
    </object>
    <object class="Label" name="Label20" >
      <property name="Caption"><![CDATA[Condicao de Pagto-08]]></property>
      <property name="Height">13</property>
      <property name="Layer"></property>
      <property name="Left">10</property>
      <property name="Name">Label20</property>
      <property name="Top">280</property>
      <property name="Width">125</property>
    </object>
    <object class="Label" name="Label21" >
      <property name="Caption"><![CDATA[Condicao de Pagto-09]]></property>
      <property name="Height">13</property>
      <property name="Layer"></property>
      <property name="Left">10</property>
      <property name="Name">Label21</property>
      <property name="Top">303</property>
      <property name="Width">125</property>
    </object>
    <object class="Label" name="Label22" >
      <property name="Caption"><![CDATA[Condicao de Pagto-10]]></property>
      <property name="Height">13</property>
      <property name="Layer"></property>
      <property name="Left">10</property>
      <property name="Name">Label22</property>
      <property name="Top">326</property>
      <property name="Width">125</property>
    </object>
    <object class="Label" name="Label23" >
      <property name="Caption"><![CDATA[Condicao de Pagto-11]]></property>
      <property name="Height">13</property>
      <property name="Layer"></property>
      <property name="Left">10</property>
      <property name="Name">Label23</property>
      <property name="Top">349</property>
      <property name="Width">125</property>
    </object>
    <object class="Label" name="Label24" >
      <property name="Caption"><![CDATA[Condicao de Pagto-12]]></property>
      <property name="Height">13</property>
      <property name="Layer"></property>
      <property name="Left">10</property>
      <property name="Name">Label24</property>
      <property name="Top">372</property>
      <property name="Width">125</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_12" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_12</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">368</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_12JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_12JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_11" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_11</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">345</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_11JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_11JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_10" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_10</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">322</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_10JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_10JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_9" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_9</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">299</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_9JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_9JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_8" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_8</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">276</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_8JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_8JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_7" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_7</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">253</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_7JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_7JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_6" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_6</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">230</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_6JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_6JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_5" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_5</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">207</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_5JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_5JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_4" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">184</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_4JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_3" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">161</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_3JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_2" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">138</property>
      <property name="Width">30</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_2JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_nro_2" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_dup_nro_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">138</property>
      <property name="Width">78</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_2JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_nro_3" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_dup_nro_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">161</property>
      <property name="Width">78</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_3JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_nro_4" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_dup_nro_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">184</property>
      <property name="Width">78</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_4JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_nro_5" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_dup_nro_5</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">207</property>
      <property name="Width">78</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_5JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_nro_6" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_dup_nro_6</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">230</property>
      <property name="Width">78</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_6JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_nro_7" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_dup_nro_7</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">253</property>
      <property name="Width">78</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_7JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_nro_8" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_dup_nro_8</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">276</property>
      <property name="Width">78</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_8JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_nro_9" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_dup_nro_9</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">299</property>
      <property name="Width">78</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_9JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_nro_10" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_dup_nro_10</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">322</property>
      <property name="Width">78</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_10JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_nro_11" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_dup_nro_11</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">345</property>
      <property name="Width">78</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_11JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_nro_12" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_dup_nro_12</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">368</property>
      <property name="Width">78</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_12JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_12" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_12</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">368</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_12JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_12JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_11" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_11</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">345</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_11JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_11JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_10" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_10</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">322</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_10JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_10JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_9" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_9</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">299</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_9JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_9JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_8" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_8</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">276</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_8JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_8JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_7" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_7</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">253</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_7JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_7JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_6" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_6</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">230</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_6JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_6JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_5" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_5</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">207</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_5JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_5JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_4" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">184</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_4JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_3" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">161</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_3JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_2" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">138</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_2JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_2" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">138</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_2JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_3" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">161</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_3JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_4" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">184</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_4JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_5" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_5</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">207</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_5JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_5JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_6" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_6</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">230</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_6JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_6JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_7" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_7</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">253</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_7JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_7JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_8" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_8</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">276</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_8JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_8JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_9" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_9</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">299</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_9JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_9JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_10" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_10</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">322</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_10JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_10JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_11" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_11</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">345</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_11JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_11JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_12" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">326</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_12</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">368</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_12JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_12JSKeyUp</property>
    </object>
    <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_12" >
      <property name="Height">18</property>
      <property name="Layer"></property>
      <property name="Left">314</property>
      <property name="Name">mgt_nota_fiscal_dup_forma_12</property>
      <property name="Top">396</property>
      <property name="Width">10</property>
    </object>
    <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_11" >
      <property name="Height">18</property>
      <property name="Layer"></property>
      <property name="Left">297</property>
      <property name="Name">mgt_nota_fiscal_dup_forma_11</property>
      <property name="Top">396</property>
      <property name="Width">10</property>
    </object>
    <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_10" >
      <property name="Height">18</property>
      <property name="Layer"></property>
      <property name="Left">282</property>
      <property name="Name">mgt_nota_fiscal_dup_forma_10</property>
      <property name="Top">396</property>
      <property name="Width">10</property>
    </object>
    <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_9" >
      <property name="Height">18</property>
      <property name="Layer"></property>
      <property name="Left">265</property>
      <property name="Name">mgt_nota_fiscal_dup_forma_9</property>
      <property name="Top">396</property>
      <property name="Width">10</property>
    </object>
    <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_8" >
      <property name="Height">18</property>
      <property name="Layer"></property>
      <property name="Left">249</property>
      <property name="Name">mgt_nota_fiscal_dup_forma_8</property>
      <property name="Top">396</property>
      <property name="Width">10</property>
    </object>
    <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_7" >
      <property name="Height">18</property>
      <property name="Layer"></property>
      <property name="Left">230</property>
      <property name="Name">mgt_nota_fiscal_dup_forma_7</property>
      <property name="Top">396</property>
      <property name="Width">10</property>
    </object>
    <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_6" >
      <property name="Height">18</property>
      <property name="Layer"></property>
      <property name="Left">214</property>
      <property name="Name">mgt_nota_fiscal_dup_forma_6</property>
      <property name="Top">396</property>
      <property name="Width">10</property>
    </object>
    <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_5" >
      <property name="Height">18</property>
      <property name="Layer"></property>
      <property name="Left">198</property>
      <property name="Name">mgt_nota_fiscal_dup_forma_5</property>
      <property name="Top">396</property>
      <property name="Width">10</property>
    </object>
    <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_4" >
      <property name="Height">18</property>
      <property name="Layer"></property>
      <property name="Left">183</property>
      <property name="Name">mgt_nota_fiscal_dup_forma_4</property>
      <property name="Top">396</property>
      <property name="Width">10</property>
    </object>
    <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_3" >
      <property name="Height">18</property>
      <property name="Layer"></property>
      <property name="Left">169</property>
      <property name="Name">mgt_nota_fiscal_dup_forma_3</property>
      <property name="Top">396</property>
      <property name="Width">10</property>
    </object>
    <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_2" >
      <property name="Height">18</property>
      <property name="Layer"></property>
      <property name="Left">154</property>
      <property name="Name">mgt_nota_fiscal_dup_forma_2</property>
      <property name="Top">396</property>
      <property name="Width">10</property>
    </object>
    <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_1" >
      <property name="Height">18</property>
      <property name="Layer"></property>
      <property name="Left">137</property>
      <property name="Name">mgt_nota_fiscal_dup_forma_1</property>
      <property name="Top">396</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label25" >
      <property name="Caption">Dt. Pagto</property>
      <property name="Height">15</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="Name">Label25</property>
      <property name="Top">100</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_pgto_1" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_pgto_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">115</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_pgto_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_pgto_1JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_pgto_2" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_pgto_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">138</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_pgto_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_pgto_2JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_pgto_3" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_pgto_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">161</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_pgto_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_pgto_3JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_pgto_4" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_pgto_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">184</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_pgto_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_pgto_4JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_pgto_5" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_pgto_5</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">207</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_pgto_5JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_pgto_5JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_pgto_6" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_pgto_6</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">230</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_pgto_6JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_pgto_6JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_pgto_7" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_pgto_7</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">253</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_pgto_7JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_pgto_7JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_pgto_8" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_pgto_8</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">276</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_pgto_8JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_pgto_8JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_pgto_9" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_pgto_9</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">299</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_pgto_9JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_pgto_9JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_pgto_10" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_pgto_10</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">322</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_pgto_10JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_pgto_10JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_pgto_11" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_pgto_11</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">345</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_pgto_11JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_pgto_11JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_pgto_12" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">392</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_pgto_12</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">368</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_pgto_12JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_pgto_12JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_juros_5" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_juros_5</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">207</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_juros_5JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_juros_5JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_juros_6" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_juros_6</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">230</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_juros_6JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_juros_6JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_juros_7" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_juros_7</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">253</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_juros_7JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_juros_7JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_juros_8" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_juros_8</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">276</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_juros_8JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_juros_8JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_juros_9" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_juros_9</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">299</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_juros_9JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_juros_9JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_juros_10" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_juros_10</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">322</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_juros_10JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_juros_10JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_juros_11" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_juros_11</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">345</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_juros_11JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_juros_11JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_juros_12" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_juros_12</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">368</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_juros_12JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_juros_12JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_juros_4" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_juros_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">184</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_juros_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_juros_4JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_juros_3" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_juros_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">161</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_juros_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_juros_3JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_juros_2" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_juros_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">138</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_juros_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_juros_2JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_juros_1" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_juros_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">115</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_juros_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_juros_1JSKeyUp</property>
    </object>
    <object class="Label" name="Label26" >
      <property name="Caption">Juros (R$)</property>
      <property name="Height">15</property>
      <property name="Layer"></property>
      <property name="Left">469</property>
      <property name="Name">Label26</property>
      <property name="Top">100</property>
      <property name="Width">63</property>
    </object>
    <object class="Label" name="Label27" >
      <property name="Caption">Pago (R$)</property>
      <property name="Height">15</property>
      <property name="Layer"></property>
      <property name="Left">535</property>
      <property name="Name">Label27</property>
      <property name="Top">100</property>
      <property name="Width">63</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_pgto_1" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">535</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_pgto_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">115</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_pgto_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_pgto_1JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_pgto_2" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">535</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_pgto_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">138</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_pgto_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_pgto_2JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_pgto_3" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">535</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_pgto_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">161</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_pgto_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_pgto_3JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_pgto_4" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">535</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_pgto_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">184</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_pgto_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_pgto_4JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_pgto_5" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">534</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_pgto_5</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">207</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_pgto_5JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_pgto_5JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_pgto_6" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">535</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_pgto_6</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">230</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_pgto_6JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_pgto_6JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_pgto_7" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">535</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_pgto_7</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">253</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_pgto_7JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_pgto_7JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_pgto_8" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">535</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_pgto_8</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">276</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_pgto_8JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_pgto_8JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_pgto_9" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">535</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_pgto_9</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">299</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_pgto_9JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_pgto_9JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_pgto_10" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">535</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_pgto_10</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">322</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_pgto_10JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_pgto_10JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_pgto_11" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">535</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_pgto_11</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">345</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_pgto_11JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_pgto_11JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_vlr_pgto_12" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">535</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_nota_fiscal_dup_vlr_pgto_12</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">368</property>
      <property name="Width">64</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_pgto_12JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_pgto_12JSKeyUp</property>
    </object>
    <object class="Label" name="Label28" >
      <property name="Caption"><![CDATA[Observacao]]></property>
      <property name="Height">15</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="Name">Label28</property>
      <property name="Top">100</property>
      <property name="Width">116</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_obs_1" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nota_fiscal_dup_obs_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">115</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_obs_1JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_obs_2" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nota_fiscal_dup_obs_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">138</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_obs_2JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_obs_3" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nota_fiscal_dup_obs_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">161</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_obs_3JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_obs_4" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nota_fiscal_dup_obs_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">184</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_obs_4JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_obs_5" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nota_fiscal_dup_obs_5</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">207</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_obs_5JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_obs_6" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nota_fiscal_dup_obs_6</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">230</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_obs_6JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_obs_7" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nota_fiscal_dup_obs_7</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">253</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_obs_7JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_obs_8" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nota_fiscal_dup_obs_8</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">276</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_obs_8JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_obs_12" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nota_fiscal_dup_obs_12</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">368</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_obs_12JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_obs_11" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nota_fiscal_dup_obs_11</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">345</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_obs_11JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_obs_10" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nota_fiscal_dup_obs_10</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">322</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_obs_10JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_obs_9" >
      <property name="Height">21</property>
      <property name="Layer"></property>
      <property name="Left">601</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_nota_fiscal_dup_obs_9</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">299</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_obs_9JSKeyPress</property>
    </object>
    <object class="Label" name="Label29" >
      <property name="Caption">Tipo</property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label29</property>
      <property name="Top">67</property>
      <property name="Width">26</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_finalidade" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">37</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_swap_cobranca_finalidade</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Text">NVL</property>
      <property name="Top">63</property>
      <property name="Width">28</property>
      <property name="jsOnKeyPress">mgt_swap_cobranca_finalidadeJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_swap_cobranca_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">9</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_swap_cobranca_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">30</property>
      <property name="Width">41</property>
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
