<?php
<object class="indprogramaproducao" name="indprogramaproducao" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">936</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">indprogramaproducao</property>
  <property name="Width">755</property>
  <property name="OnCreate">indprogramaproducaoCreate</property>
  <property name="jsOnLoad">indprogramaproducaoJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[INDUSTRIAL - Programa de Producao]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Opcoes para a Geracao do Programa de Producao]]></property>
    <property name="Height">124</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">36</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Alignment">agLeft</property>
      <property name="Caption">Data Inicial</property>
      <property name="Height">13</property>
      <property name="Left">6</property>
      <property name="Name">Label1</property>
      <property name="Top">51</property>
      <property name="Width">60</property>
    </object>
    <object class="Edit" name="data_inicial" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">68</property>
      <property name="MaxLength">10</property>
      <property name="Name">data_inicial</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">47</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">data_inicialJSKeyPress</property>
      <property name="jsOnKeyUp">data_inicialJSKeyUp</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption">Data Final</property>
      <property name="Height">13</property>
      <property name="Left">182</property>
      <property name="Name">Label2</property>
      <property name="Top">51</property>
      <property name="Width">50</property>
    </object>
    <object class="Edit" name="data_final" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">237</property>
      <property name="MaxLength">10</property>
      <property name="Name">data_final</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">47</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">data_finalJSKeyPress</property>
      <property name="jsOnKeyUp">data_finalJSKeyUp</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Ate]]></property>
      <property name="Height">13</property>
      <property name="Left">153</property>
      <property name="Name">Label3</property>
      <property name="Top">51</property>
      <property name="Width">20</property>
    </object>
    <object class="Edit" name="mgt_produto_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">50</property>
      <property name="Name">mgt_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">71</property>
      <property name="Width">150</property>
      <property name="jsOnKeyPress">mgt_produto_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Alignment">agLeft</property>
      <property name="Caption">Produto</property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label5</property>
      <property name="Top">75</property>
      <property name="Width">40</property>
    </object>
    <object class="Button" name="bt_gerar_programa" >
      <property name="Caption"><![CDATA[Gerar Programa de Producao]]></property>
      <property name="Enabled">0</property>
      <property name="Height">25</property>
      <property name="Left">530</property>
      <property name="Name">bt_gerar_programa</property>
      <property name="Top">94</property>
      <property name="Width">191</property>
      <property name="OnClick">bt_gerar_programaClick</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption">Reserva (%)</property>
      <property name="Height">13</property>
      <property name="Left">317</property>
      <property name="Name">Label7</property>
      <property name="Top">51</property>
      <property name="Width">65</property>
    </object>
    <object class="Edit" name="porcentagem_reserva" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">385</property>
      <property name="MaxLength">10</property>
      <property name="Name">porcentagem_reserva</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">47</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">porcentagem_reservaJSKeyPress</property>
      <property name="jsOnKeyUp">porcentagem_reservaJSKeyUp</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">202</property>
      <property name="Name">Label4</property>
      <property name="Top">75</property>
      <property name="Width">51</property>
    </object>
    <object class="Edit" name="mgt_produto_descricao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">261</property>
      <property name="Name">mgt_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">71</property>
      <property name="Width">363</property>
      <property name="jsOnKeyPress">mgt_produto_descricaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption"><![CDATA[O Programa de Producao considera a quantidade vendida no periodo para lhe informar a media. Informe o Periodo e se deseja que o programa calcule uma porcentagem de reserva. Selecione o Produto e clique em &lt;b&gt;&quot;Obter Quantidade&quot;&lt;/b&gt;. Depois clique em &lt;b&gt;&quot;Gerar Programa Producao&quot;&lt;/b&gt;.]]></property>
      <property name="Font">
      <property name="Color">#FF0000</property>
      </property>
      <property name="Height">26</property>
      <property name="Left">11</property>
      <property name="Name">Label6</property>
      <property name="ParentFont">0</property>
      <property name="Top">17</property>
      <property name="Width">707</property>
    </object>
    <object class="Label" name="Label20" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Quantidade a ser Produzida para este Produto</property>
      <property name="Height">13</property>
      <property name="Left">201</property>
      <property name="Name">Label20</property>
      <property name="Top">100</property>
      <property name="Width">244</property>
    </object>
    <object class="Edit" name="mgt_quantidade_produzir" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">453</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_quantidade_produzir</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">96</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_quantidade_produzirJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_quantidade_produzirJSKeyUp</property>
    </object>
    <object class="Button" name="bt_adiciona" >
      <property name="Caption"><![CDATA[Selecionar Produto para Gerar o Prog.de Producao]]></property>
      <property name="Height">25</property>
      <property name="Left">463</property>
      <property name="Name">bt_adiciona</property>
      <property name="Top">45</property>
      <property name="Width">260</property>
      <property name="OnClick">bt_adicionaClick</property>
    </object>
    <object class="Button" name="bt_qtde_produzida" >
      <property name="Caption">Obter Quantidade a Ser Produzida</property>
      <property name="Height">25</property>
      <property name="Left">8</property>
      <property name="Name">bt_qtde_produzida</property>
      <property name="Top">94</property>
      <property name="Width">180</property>
      <property name="OnClick">bt_qtde_produzidaClick</property>
    </object>
    <object class="Label" name="Label21" >
      <property name="Caption">Lote</property>
      <property name="Height">13</property>
      <property name="Left">630</property>
      <property name="Name">Label21</property>
      <property name="Top">75</property>
      <property name="Width">25</property>
    </object>
    <object class="Edit" name="mgt_produto_lote" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">659</property>
      <property name="Name">mgt_produto_lote</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">71</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_produto_loteJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="opcoes" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">opcoes</property>
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
      <property name="Width">120</property>
    </object>
    <object class="Label" name="Label19" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label19</property>
      <property name="Top">32</property>
      <property name="Width">120</property>
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
    <object class="Label" name="Label22" >
      <property name="Caption"><![CDATA[Para gerar a &lt;B&gt;&quot;Ordem de Producao&quot;&lt;/B&gt; e necessario, primeiramente, gerar o &lt;STRONG&gt;&quot;Planejamento de Necessidades&quot;&lt;/STRONG&gt; que se encontra na opcao: Industrial --&gt; Planejamento de Necessidades.]]></property>
      <property name="Font">
      <property name="Color">#FF0000</property>
      </property>
      <property name="Height">27</property>
      <property name="Left">153</property>
      <property name="Name">Label22</property>
      <property name="ParentFont">0</property>
      <property name="Top">15</property>
      <property name="Width">483</property>
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
  <object class="GroupBox" name="programas_gerados" >
    <property name="Caption"><![CDATA[Programas ja Gerados]]></property>
    <property name="Height">309</property>
    <property name="Left">8</property>
    <property name="Name">programas_gerados</property>
    <property name="Top">160</property>
    <property name="Width">730</property>
    <object class="DBGrid" name="registros" >
      <property name="Columns"><![CDATA[a:15:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:3:&quot;Nro&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_programa_producao_nro&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;30&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Cod.Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:33:&quot;mgt_programa_producao_tipo_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_programa_producao_tipo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;30&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Produto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:36:&quot;mgt_programa_producao_produto_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;45&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:39:&quot;mgt_programa_producao_produto_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;55&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Vendido&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_programa_producao_qtde_vendida&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Estoque&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_programa_producao_qtde_estoque&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Produzir&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:35:&quot;mgt_programa_producao_qtde_produzir&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:11:&quot;Data Inicio&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:33:&quot;mgt_programa_producao_data_inicio&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;60&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Data Final&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_programa_producao_data_fim&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;60&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:5:&quot;%Res.&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:41:&quot;mgt_programa_producao_porcentagem_reserva&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;40&quot;;}i:11;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Necessidades&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_programa_producao_planejamento&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;75&quot;;}i:12;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Producao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_programa_producao_ordens&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;55&quot;;}i:13;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Produzido&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:36:&quot;mgt_programa_producao_qtde_produzida&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;60&quot;;}i:14;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Lote&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_programa_producao_produto_lote&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;30&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Programa_Producao</property>
      <property name="Height">200</property>
      <property name="Left">9</property>
      <property name="Name">registros</property>
      <property name="ReadOnly">1</property>
      <property name="Top">54</property>
      <property name="Width">710</property>
      <property name="jsOnRowChanged">registrosJSRowChanged</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Alignment">agLeft</property>
      <property name="Caption">Nro.</property>
      <property name="Height">13</property>
      <property name="Left">11</property>
      <property name="Name">Label8</property>
      <property name="Top">260</property>
      <property name="Width">55</property>
    </object>
    <object class="Edit" name="mgt_programa_producao_nro" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">11</property>
      <property name="Name">mgt_programa_producao_nro</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">275</property>
      <property name="Width">55</property>
      <property name="jsOnKeyPress">mgt_programa_producao_nroJSKeyPress</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Alignment">agLeft</property>
      <property name="Caption"><![CDATA[Cod.Produto]]></property>
      <property name="Height">13</property>
      <property name="Left">69</property>
      <property name="Name">Label9</property>
      <property name="Top">260</property>
      <property name="Width">100</property>
    </object>
    <object class="Edit" name="mgt_programa_producao_produto_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">69</property>
      <property name="Name">mgt_programa_producao_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">275</property>
      <property name="Width">98</property>
      <property name="jsOnKeyPress">mgt_programa_producao_produto_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Alignment">agLeft</property>
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">170</property>
      <property name="Name">Label10</property>
      <property name="Top">260</property>
      <property name="Width">66</property>
    </object>
    <object class="Edit" name="mgt_programa_producao_produto_descricao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">170</property>
      <property name="Name">mgt_programa_producao_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">275</property>
      <property name="Width">474</property>
      <property name="jsOnKeyPress">mgt_programa_producao_produto_descricaoJSKeyPress</property>
    </object>
    <object class="Button" name="bt_excluir" >
      <property name="Caption">Excluir</property>
      <property name="Height">25</property>
      <property name="Left">646</property>
      <property name="Name">bt_excluir</property>
      <property name="Top">273</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_excluirClick</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">(Para apagar o Programa Selecionado, clique em Excluir)</property>
      <property name="Height">13</property>
      <property name="Left">402</property>
      <property name="Name">Label11</property>
      <property name="Top">260</property>
      <property name="Width">319</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Data Inicial</property>
      <property name="Height">13</property>
      <property name="Left">99</property>
      <property name="Name">Label12</property>
      <property name="Top">27</property>
      <property name="Width">70</property>
    </object>
    <object class="Edit" name="busca_programa_producao_data_inicio" >
      <property name="Height">21</property>
      <property name="Left">178</property>
      <property name="MaxLength">10</property>
      <property name="Name">busca_programa_producao_data_inicio</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">23</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">busca_programa_producao_data_inicioJSKeyPress</property>
      <property name="jsOnKeyUp">busca_programa_producao_data_inicioJSKeyUp</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption"><![CDATA[Ate]]></property>
      <property name="Height">13</property>
      <property name="Left">261</property>
      <property name="Name">Label13</property>
      <property name="Top">27</property>
      <property name="Width">20</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption">Data Final</property>
      <property name="Height">13</property>
      <property name="Left">287</property>
      <property name="Name">Label14</property>
      <property name="Top">27</property>
      <property name="Width">56</property>
    </object>
    <object class="Edit" name="busca_programa_producao_data_fim" >
      <property name="Height">21</property>
      <property name="Left">348</property>
      <property name="MaxLength">10</property>
      <property name="Name">busca_programa_producao_data_fim</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">23</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">busca_programa_producao_data_fimJSKeyPress</property>
      <property name="jsOnKeyUp">busca_programa_producao_data_fimJSKeyUp</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Alignment">agLeft</property>
      <property name="Caption">Nro.</property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label15</property>
      <property name="Top">27</property>
      <property name="Width">25</property>
    </object>
    <object class="Edit" name="busca_programa_producao_nro" >
      <property name="Height">21</property>
      <property name="Left">39</property>
      <property name="MaxLength">10</property>
      <property name="Name">busca_programa_producao_nro</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">23</property>
      <property name="Width">55</property>
      <property name="jsOnKeyPress">busca_programa_producao_nroJSKeyPress</property>
      <property name="jsOnKeyUp">busca_programa_producao_nroJSKeyUp</property>
    </object>
    <object class="Button" name="bt_buscar" >
      <property name="Caption">Buscar</property>
      <property name="Height">25</property>
      <property name="Left">425</property>
      <property name="Name">bt_buscar</property>
      <property name="Top">21</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_buscarClick</property>
    </object>
  </object>
  <object class="Window" name="confirmacao" >
    <property name="Caption"><![CDATA[Confirmacao]]></property>
    <property name="Height">105</property>
    <property name="IsVisible">0</property>
    <property name="Left">189</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">527</property>
    <property name="Width">369</property>
    <object class="Button" name="bt_nao" >
      <property name="Caption"><![CDATA[Nao]]></property>
      <property name="Height">25</property>
      <property name="Left">107</property>
      <property name="Name">bt_nao</property>
      <property name="Top">76</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_naoClick</property>
    </object>
    <object class="Button" name="bt_sim" >
      <property name="Caption">Sim</property>
      <property name="Height">25</property>
      <property name="Left">189</property>
      <property name="Name">bt_sim</property>
      <property name="Top">76</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_simClick</property>
    </object>
    <object class="Label" name="Label16" >
      <property name="Caption"><![CDATA[Voce deseja realmente excluir este registro do cadastro? O preenchimento do motivo e obrigatorio.]]></property>
      <property name="Height">28</property>
      <property name="Left">8</property>
      <property name="Name">Label16</property>
      <property name="Top">24</property>
      <property name="Width">323</property>
    </object>
    <object class="Label" name="Label17" >
      <property name="Caption">Motivo:</property>
      <property name="Height">13</property>
      <property name="Left">5</property>
      <property name="Name">Label17</property>
      <property name="Top">57</property>
      <property name="Width">40</property>
    </object>
    <object class="Edit" name="mgt_operacao_cadastro_motivo" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">47</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_operacao_cadastro_motivo</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">53</property>
      <property name="Width">315</property>
    </object>
  </object>
  <object class="HiddenField" name="mgt_programa_producao_qtde_produzida" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">mgt_programa_producao_qtde_produzida</property>
    <property name="Top">527</property>
    <property name="Width">169</property>
  </object>
  <object class="GroupBox" name="adiciona_produtos" >
    <property name="Caption">Adiciona Produtos</property>
    <property name="Height">283</property>
    <property name="Left">8</property>
    <property name="Name">adiciona_produtos</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">638</property>
    <property name="Visible">0</property>
    <property name="Width">730</property>
    <object class="Label" name="Label36" >
      <property name="Caption">Registros Obtidos:</property>
      <property name="Height">13</property>
      <property name="Left">17</property>
      <property name="Name">Label36</property>
      <property name="Top">99</property>
      <property name="Width">139</property>
    </object>
    <object class="Label" name="Label37" >
      <property name="Caption">Produto</property>
      <property name="Height">13</property>
      <property name="Left">17</property>
      <property name="Name">Label37</property>
      <property name="Top">211</property>
      <property name="Width">44</property>
    </object>
    <object class="Label" name="Label38" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">63</property>
      <property name="Name">Label38</property>
      <property name="Top">207</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_adiciona_produto_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_adiciona_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">221</property>
      <property name="Width">80</property>
      <property name="jsOnKeyPress">mgt_adiciona_produto_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label39" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">227</property>
      <property name="Name">Label39</property>
      <property name="Top">207</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_adiciona_produto_descricao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">227</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_adiciona_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">221</property>
      <property name="Width">489</property>
      <property name="jsOnKeyPress">mgt_adiciona_produto_descricaoJSKeyPress</property>
    </object>
    <object class="Button" name="bt_adicionar_produto" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption">Adicionar Produto</property>
      <property name="Height">25</property>
      <property name="Left">311</property>
      <property name="Name">bt_adicionar_produto</property>
      <property name="Top">244</property>
      <property name="Width">116</property>
      <property name="OnClick">bt_adicionar_produtoClick</property>
    </object>
    <object class="Panel" name="adiciona_produtos_borda" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Selecione o Produto&lt;/b&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FF0000</property>
      <property name="Height">14</property>
      <property name="Left">6</property>
      <property name="Name">adiciona_produtos_borda</property>
      <property name="ParentColor">0</property>
      <property name="Top">18</property>
      <property name="Width">717</property>
    </object>
    <object class="GroupBox" name="GroupBox4" >
      <property name="Caption">Busca</property>
      <property name="Height">58</property>
      <property name="Left">13</property>
      <property name="Name">GroupBox4</property>
      <property name="Top">37</property>
      <property name="Width">705</property>
      <object class="Label" name="Label34" >
        <property name="Caption">Dados Para Busca</property>
        <property name="Height">13</property>
        <property name="Left">8</property>
        <property name="Name">Label34</property>
        <property name="Top">14</property>
        <property name="Width">304</property>
      </object>
      <object class="Label" name="Label35" >
        <property name="Caption"><![CDATA[Opcoes]]></property>
        <property name="Height">13</property>
        <property name="Left">459</property>
        <property name="Name">Label35</property>
        <property name="Top">14</property>
        <property name="Width">160</property>
      </object>
      <object class="Edit" name="dados_busca_produto" >
        <property name="Height">21</property>
        <property name="Left">8</property>
        <property name="Name">dados_busca_produto</property>
        <property name="Top">28</property>
        <property name="Width">446</property>
        <property name="jsOnKeyPress">dados_busca_produtoJSKeyPress</property>
      </object>
      <object class="ComboBox" name="opcao_busca_produto" >
        <property name="Height">21</property>
        <property name="ItemIndex">0</property>
        <property name="Items"><![CDATA[a:3:{s:6:&quot;Codigo&quot;;s:6:&quot;Codigo&quot;;s:10:&quot;Referencia&quot;;s:10:&quot;Referencia&quot;;s:9:&quot;Descricao&quot;;s:9:&quot;Descricao&quot;;}]]></property>
        <property name="Left">459</property>
        <property name="Name">opcao_busca_produto</property>
        <property name="Top">30</property>
        <property name="Width">160</property>
        <property name="jsOnKeyPress">opcao_busca_produtoJSKeyPress</property>
      </object>
      <object class="Button" name="bt_busca_produto" >
        <property name="Caption">Buscar</property>
        <property name="Height">25</property>
        <property name="Left">623</property>
        <property name="Name">bt_busca_produto</property>
        <property name="Top">26</property>
        <property name="Width">75</property>
        <property name="OnClick">bt_busca_produtoClick</property>
      </object>
    </object>
    <object class="DBGrid" name="registros_produtos_busca" >
      <property name="Columns"><![CDATA[a:7:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_produto_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Referencia&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:22:&quot;mgt_produto_referencia&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_produto_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;300&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:13:&quot;Vlr. Unitario&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:17:&quot;mgt_produto_preco&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Lote&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:16:&quot;mgt_produto_lote&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Unidade&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:19:&quot;mgt_produto_unidade&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:3:&quot;IPI&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:15:&quot;mgt_produto_ipi&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;40&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Produtos</property>
      <property name="Height">89</property>
      <property name="Left">15</property>
      <property name="Name">registros_produtos_busca</property>
      <property name="ReadOnly">1</property>
      <property name="Top">115</property>
      <property name="Width">701</property>
      <property name="jsOnRowChanged">registros_produtos_buscaJSRowChanged</property>
    </object>
    <object class="Label" name="Label40" >
      <property name="Caption"><![CDATA[Referencia]]></property>
      <property name="Height">13</property>
      <property name="Left">145</property>
      <property name="Name">Label40</property>
      <property name="Top">207</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_adiciona_produto_referencia" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">145</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_adiciona_produto_referencia</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">221</property>
      <property name="Width">80</property>
      <property name="jsOnKeyPress">mgt_adiciona_produto_referenciaJSKeyPress</property>
    </object>
    <object class="Panel" name="Panel5" >
      <property name="Color">#FF0000</property>
      <property name="Height">242</property>
      <property name="Left">720</property>
      <property name="Name">Panel5</property>
      <property name="ParentColor">0</property>
      <property name="Top">32</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel3" >
      <property name="Color">#FF0000</property>
      <property name="Height">242</property>
      <property name="Left">6</property>
      <property name="Name">Panel3</property>
      <property name="ParentColor">0</property>
      <property name="Top">32</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel4" >
      <property name="Color">#FF0000</property>
      <property name="Height">3</property>
      <property name="Left">9</property>
      <property name="Name">Panel4</property>
      <property name="ParentColor">0</property>
      <property name="Top">271</property>
      <property name="Width">711</property>
    </object>
    <object class="Button" name="bt_fechar_produto" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">655</property>
      <property name="Name">bt_fechar_produto</property>
      <property name="Top">244</property>
      <property name="Width">52</property>
      <property name="OnClick">bt_fechar_produtoClick</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">699</property>
        <property name="Top">5</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
  <object class="HiddenField" name="hd_quantidade_estoque" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_quantidade_estoque</property>
    <property name="Top">551</property>
    <property name="Width">169</property>
  </object>
  <object class="HiddenField" name="hd_quantidade_vendida_registro" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_quantidade_vendida_registro</property>
    <property name="Top">575</property>
    <property name="Width">169</property>
  </object>
</object>
?>
