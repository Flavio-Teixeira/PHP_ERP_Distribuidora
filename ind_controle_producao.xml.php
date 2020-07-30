<?php
<object class="indcontroleproducao" name="indcontroleproducao" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">526</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">indcontroleproducao</property>
  <property name="Width">755</property>
  <property name="OnCreate">indcontroleproducaoCreate</property>
  <property name="jsOnLoad">indcontroleproducaoJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[INDUSTRIAL - Controle de Producao]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">469</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">646</property>
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
    <property name="Caption">Planejamento de Necessidades</property>
    <property name="Height">433</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">36</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_registrar_qtde" >
      <property name="Caption">Registrar Quantidade</property>
      <property name="Height">25</property>
      <property name="Left">300</property>
      <property name="Name">bt_registrar_qtde</property>
      <property name="Top">401</property>
      <property name="Width">130</property>
      <property name="OnClick">bt_registrar_qtdeClick</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Alignment">agLeft</property>
      <property name="Caption"><![CDATA[Nro. Programa de Producao]]></property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label15</property>
      <property name="Top">27</property>
      <property name="Width">135</property>
    </object>
    <object class="Edit" name="busca_programa_producao" >
      <property name="Height">21</property>
      <property name="Left">150</property>
      <property name="MaxLength">10</property>
      <property name="Name">busca_programa_producao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">23</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">busca_programa_producaoJSKeyPress</property>
      <property name="jsOnKeyUp">busca_programa_producaoJSKeyUp</property>
    </object>
    <object class="Button" name="bt_buscar" >
      <property name="Caption">Buscar</property>
      <property name="Height">25</property>
      <property name="Left">516</property>
      <property name="Name">bt_buscar</property>
      <property name="Top">21</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_buscarClick</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Alignment">agLeft</property>
      <property name="Caption">Nro.</property>
      <property name="Height">13</property>
      <property name="Left">11</property>
      <property name="Name">Label1</property>
      <property name="Top">290</property>
      <property name="Width">55</property>
    </object>
    <object class="Edit" name="mgt_programa_producao_nro" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">11</property>
      <property name="Name">mgt_programa_producao_nro</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">305</property>
      <property name="Width">55</property>
      <property name="jsOnKeyPress">mgt_programa_producao_nroJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_programa_producao_produto_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">69</property>
      <property name="Name">mgt_programa_producao_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">305</property>
      <property name="Width">98</property>
      <property name="jsOnKeyPress">mgt_programa_producao_produto_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Alignment">agLeft</property>
      <property name="Caption"><![CDATA[Cod.Produto]]></property>
      <property name="Height">13</property>
      <property name="Left">69</property>
      <property name="Name">Label9</property>
      <property name="Top">290</property>
      <property name="Width">100</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Alignment">agLeft</property>
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">170</property>
      <property name="Name">Label10</property>
      <property name="Top">290</property>
      <property name="Width">66</property>
    </object>
    <object class="Edit" name="mgt_programa_producao_produto_descricao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">170</property>
      <property name="Name">mgt_programa_producao_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">305</property>
      <property name="Width">549</property>
      <property name="jsOnKeyPress">mgt_programa_producao_produto_descricaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Qtde a ser Produzida]]></property>
      <property name="Height">13</property>
      <property name="Left">139</property>
      <property name="Name">Label2</property>
      <property name="Top">332</property>
      <property name="Width">175</property>
    </object>
    <object class="Edit" name="mgt_programa_producao_qtde_produzir" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">316</property>
      <property name="Name">mgt_programa_producao_qtde_produzir</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">328</property>
      <property name="Width">98</property>
      <property name="jsOnKeyPress">mgt_programa_producao_qtde_produzirJSKeyPress</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Qtde a ser adicionada]]></property>
      <property name="Height">13</property>
      <property name="Left">139</property>
      <property name="Name">Label3</property>
      <property name="Top">356</property>
      <property name="Width">175</property>
    </object>
    <object class="Edit" name="qtde_adicionar" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">316</property>
      <property name="Name">qtde_adicionar</property>
      <property name="ParentColor">0</property>
      <property name="Top">352</property>
      <property name="Width">98</property>
      <property name="jsOnKeyPress">qtde_adicionarJSKeyPress</property>
      <property name="jsOnKeyUp">qtde_adicionarJSKeyUp</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Qtde Produzida ate o Momento]]></property>
      <property name="Height">13</property>
      <property name="Left">139</property>
      <property name="Name">Label4</property>
      <property name="Top">380</property>
      <property name="Width">175</property>
    </object>
    <object class="Edit" name="total_produzido" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">316</property>
      <property name="Name">total_produzido</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">376</property>
      <property name="Width">98</property>
      <property name="jsOnKeyPress">total_produzidoJSKeyPress</property>
    </object>
    <object class="HiddenField" name="mgt_programa_producao_qtde_produzida" >
      <property name="Height">18</property>
      <property name="Left">471</property>
      <property name="Name">mgt_programa_producao_qtde_produzida</property>
      <property name="Top">405</property>
      <property name="Value">0</property>
      <property name="Width">250</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Alignment">agLeft</property>
      <property name="Caption">Data Inicial</property>
      <property name="Height">13</property>
      <property name="Left">235</property>
      <property name="Name">Label12</property>
      <property name="Top">27</property>
      <property name="Width">55</property>
    </object>
    <object class="Edit" name="busca_programa_producao_data_inicio" >
      <property name="Height">21</property>
      <property name="Left">297</property>
      <property name="MaxLength">10</property>
      <property name="Name">busca_programa_producao_data_inicio</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">23</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">busca_programa_producao_data_inicioJSKeyPress</property>
      <property name="jsOnKeyUp">busca_programa_producao_data_inicioJSKeyUp</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption">Data Final</property>
      <property name="Height">13</property>
      <property name="Left">379</property>
      <property name="Name">Label14</property>
      <property name="Top">27</property>
      <property name="Width">50</property>
    </object>
    <object class="Edit" name="busca_programa_producao_data_fim" >
      <property name="Height">21</property>
      <property name="Left">436</property>
      <property name="MaxLength">10</property>
      <property name="Name">busca_programa_producao_data_fim</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">23</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">busca_programa_producao_data_fimJSKeyPress</property>
      <property name="jsOnKeyUp">busca_programa_producao_data_fimJSKeyUp</property>
    </object>
    <object class="DBGrid" name="registros" >
      <property name="Columns"><![CDATA[a:15:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:3:&quot;Nro&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_programa_producao_nro&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;30&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Cod.Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:33:&quot;mgt_programa_producao_tipo_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_programa_producao_tipo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;30&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Produto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:36:&quot;mgt_programa_producao_produto_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;45&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:39:&quot;mgt_programa_producao_produto_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;55&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Vendido&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_programa_producao_qtde_vendida&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Estoque&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_programa_producao_qtde_estoque&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Produzir&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:35:&quot;mgt_programa_producao_qtde_produzir&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:11:&quot;Data Inicio&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:33:&quot;mgt_programa_producao_data_inicio&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;60&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Data Final&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_programa_producao_data_fim&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;60&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:5:&quot;%Res.&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:41:&quot;mgt_programa_producao_porcentagem_reserva&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;40&quot;;}i:11;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Necessidades&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_programa_producao_planejamento&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;75&quot;;}i:12;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Producao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_programa_producao_ordens&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;55&quot;;}i:13;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Produzido&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:36:&quot;mgt_programa_producao_qtde_produzida&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;60&quot;;}i:14;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Lote&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_programa_producao_produto_lote&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;30&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Programa_Producao</property>
      <property name="Height">227</property>
      <property name="Left">9</property>
      <property name="Name">registros</property>
      <property name="ReadOnly">1</property>
      <property name="Top">54</property>
      <property name="Width">710</property>
      <property name="jsOnRowChanged">registrosJSRowChanged</property>
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
