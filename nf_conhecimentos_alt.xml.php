<?php
<object class="nfconhecimentosalt" name="nfconhecimentosalt" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">1310</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">nfconhecimentosalt</property>
  <property name="Width">755</property>
  <property name="OnCreate">nfconhecimentosaltCreate</property>
  <property name="jsOnLoad">nfconhecimentosaltJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[NOTAS FISCAIS - Conhecimentos - Alteracao/Exclusao]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">1141</property>
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
    <object class="Button" name="bt_alterar" >
      <property name="Caption">Alterar/Imprimir</property>
      <property name="Height">25</property>
      <property name="Left">263</property>
      <property name="Name">bt_alterar</property>
      <property name="Top">17</property>
      <property name="Width">115</property>
      <property name="OnClick">bt_alterarClick</property>
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
    <object class="Button" name="bt_excluir" >
      <property name="Caption">Excluir</property>
      <property name="Height">25</property>
      <property name="Left">384</property>
      <property name="Name">bt_excluir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_excluirClick</property>
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
  <object class="GroupBox" name="adiciona_clientes" >
    <property name="Caption"><![CDATA[Adiciona Remetente/Destinatario]]></property>
    <property name="Height">332</property>
    <property name="Left">8</property>
    <property name="Name">adiciona_clientes</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">38</property>
    <property name="Width">730</property>
    <object class="GroupBox" name="GroupBox6" >
      <property name="Caption">Busca</property>
      <property name="Height">59</property>
      <property name="Left">11</property>
      <property name="Name">GroupBox6</property>
      <property name="ParentColor">0</property>
      <property name="Top">14</property>
      <property name="Width">706</property>
      <object class="Label" name="Label28" >
        <property name="Caption">Dados Para Busca</property>
        <property name="Height">13</property>
        <property name="Left">8</property>
        <property name="Name">Label28</property>
        <property name="Top">15</property>
        <property name="Width">304</property>
      </object>
      <object class="Label" name="Label29" >
        <property name="Caption"><![CDATA[Opcoes]]></property>
        <property name="Height">13</property>
        <property name="Left">458</property>
        <property name="Name">Label29</property>
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
        <property name="Left">458</property>
        <property name="Name">opcao_busca</property>
        <property name="Top">28</property>
        <property name="Width">160</property>
        <property name="jsOnKeyPress">opcao_buscaJSKeyPress</property>
      </object>
      <object class="Button" name="bt_buscar" >
        <property name="ButtonType">btNormal</property>
        <property name="Caption">Buscar</property>
        <property name="Height">25</property>
        <property name="Left">622</property>
        <property name="Name">bt_buscar</property>
        <property name="Top">26</property>
        <property name="Width">75</property>
        <property name="OnClick">bt_buscarClick</property>
      </object>
    </object>
    <object class="Label" name="Label30" >
      <property name="Caption">Registros Obtidos:</property>
      <property name="Height">13</property>
      <property name="Left">15</property>
      <property name="Name">Label30</property>
      <property name="Top">74</property>
      <property name="Width">139</property>
    </object>
    <object class="DBGrid" name="registros" >
      <property name="Columns"><![CDATA[a:12:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Numero&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_numero&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_cliente_codigo_tipo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;110&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Nome&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:16:&quot;mgt_cliente_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;56&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Razao Social&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_cliente_razao_social&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;56&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:18:&quot;Inscricao Estadual&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_cliente_inscricao_estadual&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;56&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Endereco&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:20:&quot;mgt_cliente_endereco&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;56&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:11:&quot;Complemento&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_cliente_complemento&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;56&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Bairro&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_bairro&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;56&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Cidade&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_cidade&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;56&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:2:&quot;UF&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_estado&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;20&quot;;}i:11;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:3:&quot;CEP&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:15:&quot;mgt_cliente_cep&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;56&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">97</property>
      <property name="Left">13</property>
      <property name="Name">registros</property>
      <property name="ReadOnly">1</property>
      <property name="Top">88</property>
      <property name="Width">701</property>
      <property name="jsOnRowChanged">registrosJSRowChanged</property>
    </object>
    <object class="Label" name="Label31" >
      <property name="Caption">Cliente</property>
      <property name="Height">13</property>
      <property name="Left">15</property>
      <property name="Name">Label31</property>
      <property name="Top">205</property>
      <property name="Width">44</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_numero_cliente" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">64</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_conhecimento_numero_cliente</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">201</property>
      <property name="Width">41</property>
    </object>
    <object class="Label" name="Label32" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">106</property>
      <property name="Name">Label32</property>
      <property name="Top">188</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">201</property>
      <property name="Width">126</property>
    </object>
    <object class="Label" name="Label33" >
      <property name="Caption"><![CDATA[Razao Social]]></property>
      <property name="Height">13</property>
      <property name="Left">236</property>
      <property name="Name">Label33</property>
      <property name="Top">188</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">236</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_conhecimento_nome</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">201</property>
      <property name="Width">369</property>
    </object>
    <object class="Button" name="bt_adiciona_cliente" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption">Adicionar</property>
      <property name="Height">25</property>
      <property name="Left">327</property>
      <property name="Name">bt_adiciona_cliente</property>
      <property name="Top">298</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_adiciona_clienteClick</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Endereco]]></property>
      <property name="Height">13</property>
      <property name="Left">64</property>
      <property name="Name">Label3</property>
      <property name="Top">224</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_endereco" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">64</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_endereco</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">237</property>
      <property name="Width">521</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">Complemento</property>
      <property name="Height">13</property>
      <property name="Left">588</property>
      <property name="Name">Label4</property>
      <property name="Top">224</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_complemento" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">588</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_complemento</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">237</property>
      <property name="Width">126</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption">Bairro</property>
      <property name="Height">13</property>
      <property name="Left">64</property>
      <property name="Name">Label5</property>
      <property name="Top">259</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_bairro" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">64</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_bairro</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">272</property>
      <property name="Width">293</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption">Cidade</property>
      <property name="Height">13</property>
      <property name="Left">360</property>
      <property name="Name">Label6</property>
      <property name="Top">259</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_cidade" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">360</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_cidade</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">272</property>
      <property name="Width">250</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption">UF</property>
      <property name="Height">13</property>
      <property name="Left">614</property>
      <property name="Name">Label7</property>
      <property name="Top">259</property>
      <property name="Width">25</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_estado" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">614</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_estado</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">272</property>
      <property name="Width">25</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption">CEP</property>
      <property name="Height">13</property>
      <property name="Left">643</property>
      <property name="Name">Label8</property>
      <property name="Top">259</property>
      <property name="Width">70</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_cep" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">643</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_cep</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">272</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption"><![CDATA[Inscricao Estadual]]></property>
      <property name="Height">13</property>
      <property name="Left">610</property>
      <property name="Name">Label9</property>
      <property name="Top">187</property>
      <property name="Width">103</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_inscricao_estadual" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">609</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_inscricao_estadual</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">201</property>
      <property name="Width">104</property>
    </object>
    <object class="RadioGroup" name="mgt_conhecimento_destino" >
      <property name="Columns">2</property>
      <property name="Height">26</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:2:{i:0;s:9:&quot;Remetente&quot;;i:1;s:12:&quot;Destinatario&quot;;}]]></property>
      <property name="Left">465</property>
      <property name="Name">mgt_conhecimento_destino</property>
      <property name="Top">298</property>
      <property name="Width">185</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">Em:</property>
      <property name="Height">13</property>
      <property name="Left">432</property>
      <property name="Name">Label10</property>
      <property name="Top">304</property>
      <property name="Width">27</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption">Adicionais</property>
    <property name="Height">88</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">391</property>
    <property name="Width">730</property>
    <object class="Label" name="Label11" >
      <property name="Caption"><![CDATA[Data Emissao]]></property>
      <property name="Height">13</property>
      <property name="Left">105</property>
      <property name="Name">Label11</property>
      <property name="Top">25</property>
      <property name="Width">77</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_data_emissao" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">188</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_data_emissao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">21</property>
      <property name="Width">73</property>
      <property name="jsOnKeyPress">mgt_conhecimento_data_emissaoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_data_emissaoJSKeyUp</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Caption"><![CDATA[Natureza de Operacao]]></property>
      <property name="Height">13</property>
      <property name="Left">263</property>
      <property name="Name">Label12</property>
      <property name="Top">25</property>
      <property name="Width">128</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_natureza_operacao" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">391</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_conhecimento_natureza_operacao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">21</property>
      <property name="Width">251</property>
      <property name="jsOnKeyPress">mgt_conhecimento_natureza_operacaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption">CFOP</property>
      <property name="Height">13</property>
      <property name="Left">646</property>
      <property name="Name">Label13</property>
      <property name="Top">25</property>
      <property name="Width">33</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_cfop" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">682</property>
      <property name="MaxLength">4</property>
      <property name="Name">mgt_conhecimento_cfop</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">21</property>
      <property name="Width">35</property>
      <property name="jsOnKeyPress">mgt_conhecimento_cfopJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_cfopJSKeyUp</property>
    </object>
    <object class="CheckBox" name="mgt_conhecimento_frete_pagar" >
      <property name="Caption">Pagar</property>
      <property name="Height">21</property>
      <property name="Left">64</property>
      <property name="Name">mgt_conhecimento_frete_pagar</property>
      <property name="Top">55</property>
      <property name="Width">56</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_pagarJSKeyPress</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption">Frete</property>
      <property name="Height">13</property>
      <property name="Left">15</property>
      <property name="Name">Label14</property>
      <property name="Top">59</property>
      <property name="Width">35</property>
    </object>
    <object class="CheckBox" name="mgt_conhecimento_frete_pago" >
      <property name="Caption">Pago</property>
      <property name="Height">21</property>
      <property name="Left">133</property>
      <property name="Name">mgt_conhecimento_frete_pago</property>
      <property name="Top">55</property>
      <property name="Width">53</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_pagoJSKeyPress</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Caption">em</property>
      <property name="Height">13</property>
      <property name="Left">203</property>
      <property name="Name">Label15</property>
      <property name="Top">59</property>
      <property name="Width">20</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_frete_pago_em" >
      <property name="Height">21</property>
      <property name="Left">229</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_frete_pago_em</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">55</property>
      <property name="Width">73</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_pago_emJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_frete_pago_emJSKeyUp</property>
    </object>
    <object class="Label" name="Label54" >
      <property name="Caption">Coleta</property>
      <property name="Height">13</property>
      <property name="Left">316</property>
      <property name="Name">Label54</property>
      <property name="Top">59</property>
      <property name="Width">38</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_coleta" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">354</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_conhecimento_coleta</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">55</property>
      <property name="Width">150</property>
      <property name="jsOnKeyPress">mgt_conhecimento_coletaJSKeyPress</property>
    </object>
    <object class="Label" name="Label55" >
      <property name="Caption">Entrega</property>
      <property name="Height">13</property>
      <property name="Left">521</property>
      <property name="Name">Label55</property>
      <property name="Top">59</property>
      <property name="Width">43</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_entrega" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">567</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_conhecimento_entrega</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">55</property>
      <property name="Width">150</property>
      <property name="jsOnKeyPress">mgt_conhecimento_entregaJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">47</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">21</property>
      <property name="Width">53</property>
      <property name="jsOnKeyPress">mgt_conhecimento_numeroJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[&lt;b&gt;Nro.&lt;/b&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">15</property>
      <property name="Name">Label1</property>
      <property name="Top">25</property>
      <property name="Width">29</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox5" >
    <property name="Caption">Remetente</property>
    <property name="Height">132</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox5</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">482</property>
    <property name="Width">730</property>
    <object class="Edit" name="mgt_conhecimento_remetente_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_conhecimento_remetente_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">27</property>
      <property name="Width">41</property>
    </object>
    <object class="Label" name="Label22" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">105</property>
      <property name="Name">Label22</property>
      <property name="Top">14</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_remetente_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">105</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_remetente_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">27</property>
      <property name="Width">126</property>
    </object>
    <object class="Label" name="Label23" >
      <property name="Caption"><![CDATA[Razao Social]]></property>
      <property name="Height">13</property>
      <property name="Left">235</property>
      <property name="Name">Label23</property>
      <property name="Top">14</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_remetente_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">235</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_conhecimento_remetente_nome</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">27</property>
      <property name="Width">369</property>
    </object>
    <object class="Label" name="Label24" >
      <property name="Caption"><![CDATA[Endereco]]></property>
      <property name="Height">13</property>
      <property name="Left">63</property>
      <property name="Name">Label24</property>
      <property name="Top">50</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_remetente_endereco" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_conhecimento_remetente_endereco</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">63</property>
      <property name="Width">521</property>
    </object>
    <object class="Label" name="Label25" >
      <property name="Caption">Complemento</property>
      <property name="Height">13</property>
      <property name="Left">587</property>
      <property name="Name">Label25</property>
      <property name="Top">50</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_remetente_complemento" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">587</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_remetente_complemento</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">63</property>
      <property name="Width">126</property>
    </object>
    <object class="Label" name="Label26" >
      <property name="Caption">Bairro</property>
      <property name="Height">13</property>
      <property name="Left">63</property>
      <property name="Name">Label26</property>
      <property name="Top">85</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_remetente_bairro" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_remetente_bairro</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">98</property>
      <property name="Width">293</property>
    </object>
    <object class="Label" name="Label27" >
      <property name="Caption">Cidade</property>
      <property name="Height">13</property>
      <property name="Left">359</property>
      <property name="Name">Label27</property>
      <property name="Top">85</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_remetente_cidade" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">359</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_remetente_cidade</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">98</property>
      <property name="Width">250</property>
    </object>
    <object class="Label" name="Label34" >
      <property name="Caption">UF</property>
      <property name="Height">13</property>
      <property name="Left">613</property>
      <property name="Name">Label34</property>
      <property name="Top">85</property>
      <property name="Width">25</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_remetente_estado" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">613</property>
      <property name="MaxLength">2</property>
      <property name="Name">mgt_conhecimento_remetente_estado</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">98</property>
      <property name="Width">25</property>
    </object>
    <object class="Label" name="Label35" >
      <property name="Caption">CEP</property>
      <property name="Height">13</property>
      <property name="Left">642</property>
      <property name="Name">Label35</property>
      <property name="Top">85</property>
      <property name="Width">70</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_remetente_cep" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">642</property>
      <property name="MaxLength">9</property>
      <property name="Name">mgt_conhecimento_remetente_cep</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">98</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label36" >
      <property name="Caption"><![CDATA[Inscricao Estadual]]></property>
      <property name="Height">13</property>
      <property name="Left">609</property>
      <property name="Name">Label36</property>
      <property name="Top">13</property>
      <property name="Width">103</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_remetente_inscricao_estadual" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">609</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_conhecimento_remetente_inscricao_estadual</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">27</property>
      <property name="Width">104</property>
    </object>
    <object class="Label" name="Label16" >
      <property name="Caption">Cliente</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label16</property>
      <property name="Top">31</property>
      <property name="Width">44</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox4" >
    <property name="Caption"><![CDATA[Destinatario]]></property>
    <property name="Height">132</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox4</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">617</property>
    <property name="Width">730</property>
    <object class="Edit" name="mgt_conhecimento_destinatario_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_conhecimento_destinatario_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">27</property>
      <property name="Width">41</property>
    </object>
    <object class="Label" name="Label17" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">105</property>
      <property name="Name">Label17</property>
      <property name="Top">14</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_destinatario_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">105</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_destinatario_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">27</property>
      <property name="Width">126</property>
    </object>
    <object class="Label" name="Label20" >
      <property name="Caption"><![CDATA[Razao Social]]></property>
      <property name="Height">13</property>
      <property name="Left">235</property>
      <property name="Name">Label20</property>
      <property name="Top">14</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_destinatario_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">235</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_conhecimento_destinatario_nome</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">27</property>
      <property name="Width">369</property>
    </object>
    <object class="Label" name="Label21" >
      <property name="Caption"><![CDATA[Endereco]]></property>
      <property name="Height">13</property>
      <property name="Left">63</property>
      <property name="Name">Label21</property>
      <property name="Top">50</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_destinatario_endereco" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_conhecimento_destinatario_endereco</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">63</property>
      <property name="Width">521</property>
    </object>
    <object class="Label" name="Label37" >
      <property name="Caption">Complemento</property>
      <property name="Height">13</property>
      <property name="Left">587</property>
      <property name="Name">Label37</property>
      <property name="Top">50</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_destinatario_complemento" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">587</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_destinatario_complemento</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">63</property>
      <property name="Width">126</property>
    </object>
    <object class="Label" name="Label38" >
      <property name="Caption">Bairro</property>
      <property name="Height">13</property>
      <property name="Left">63</property>
      <property name="Name">Label38</property>
      <property name="Top">85</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_destinatario_bairro" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_destinatario_bairro</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">98</property>
      <property name="Width">293</property>
    </object>
    <object class="Label" name="Label39" >
      <property name="Caption">Cidade</property>
      <property name="Height">13</property>
      <property name="Left">359</property>
      <property name="Name">Label39</property>
      <property name="Top">85</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_destinatario_cidade" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">359</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_conhecimento_destinatario_cidade</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">98</property>
      <property name="Width">250</property>
    </object>
    <object class="Label" name="Label40" >
      <property name="Caption">UF</property>
      <property name="Height">13</property>
      <property name="Left">613</property>
      <property name="Name">Label40</property>
      <property name="Top">85</property>
      <property name="Width">25</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_destinatario_estado" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">613</property>
      <property name="MaxLength">2</property>
      <property name="Name">mgt_conhecimento_destinatario_estado</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">98</property>
      <property name="Width">25</property>
    </object>
    <object class="Label" name="Label41" >
      <property name="Caption">CEP</property>
      <property name="Height">13</property>
      <property name="Left">642</property>
      <property name="Name">Label41</property>
      <property name="Top">85</property>
      <property name="Width">70</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_destinatario_cep" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">642</property>
      <property name="MaxLength">9</property>
      <property name="Name">mgt_conhecimento_destinatario_cep</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">98</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label42" >
      <property name="Caption"><![CDATA[Inscricao Estadual]]></property>
      <property name="Height">13</property>
      <property name="Left">609</property>
      <property name="Name">Label42</property>
      <property name="Top">13</property>
      <property name="Width">103</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_destinatario_inscricao_estadual" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">609</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_conhecimento_destinatario_inscricao_estadual</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">27</property>
      <property name="Width">104</property>
    </object>
    <object class="Label" name="Label43" >
      <property name="Caption">Cliente</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label43</property>
      <property name="Top">31</property>
      <property name="Width">44</property>
    </object>
  </object>
  <object class="Panel" name="Panel3" >
    <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Dados do Conhecimento&lt;/b&gt;&lt;/center&gt;]]></property>
    <property name="Color">#FFFF80</property>
    <property name="Height">14</property>
    <property name="Left">8</property>
    <property name="Name">Panel3</property>
    <property name="ParentColor">0</property>
    <property name="Top">373</property>
    <property name="Width">730</property>
  </object>
  <object class="GroupBox" name="GroupBox7" >
    <property name="Caption">Mercadoria Transportada - Carga 1</property>
    <property name="Height">64</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox7</property>
    <property name="Top">752</property>
    <property name="Width">730</property>
    <object class="Edit" name="mgt_conhecimento_carga_1" >
      <property name="Height">21</property>
      <property name="Left">9</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_conhecimento_carga_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">129</property>
      <property name="jsOnKeyPress">mgt_conhecimento_carga_1JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_qtde_1" >
      <property name="Height">21</property>
      <property name="Left">142</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_conhecimento_qtde_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">70</property>
      <property name="jsOnKeyPress">mgt_conhecimento_qtde_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_qtde_1JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_especie_1" >
      <property name="Height">21</property>
      <property name="Left">217</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_conhecimento_especie_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_conhecimento_especie_1JSKeyPress</property>
    </object>
    <object class="Label" name="Label44" >
      <property name="Caption">Mat. da Carga</property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label44</property>
      <property name="Top">18</property>
      <property name="Width">85</property>
    </object>
    <object class="Label" name="Label45" >
      <property name="Caption">Quantidade</property>
      <property name="Height">13</property>
      <property name="Left">142</property>
      <property name="Name">Label45</property>
      <property name="Top">18</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label46" >
      <property name="Caption"><![CDATA[Especie]]></property>
      <property name="Height">13</property>
      <property name="Left">217</property>
      <property name="Name">Label46</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Label" name="Label47" >
      <property name="Caption">Peso</property>
      <property name="Height">13</property>
      <property name="Left">267</property>
      <property name="Name">Label47</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_peso_1" >
      <property name="Height">21</property>
      <property name="Left">267</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_conhecimento_peso_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_conhecimento_peso_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_peso_1JSKeyUp</property>
    </object>
    <object class="Label" name="Label48" >
      <property name="Caption">M ou L</property>
      <property name="Height">13</property>
      <property name="Left">316</property>
      <property name="Name">Label48</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_m_l_1" >
      <property name="Height">21</property>
      <property name="Left">316</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_m_l_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_conhecimento_m_l_1JSKeyPress</property>
    </object>
    <object class="Label" name="Label49" >
      <property name="Caption">Nota Fiscal</property>
      <property name="Height">13</property>
      <property name="Left">364</property>
      <property name="Name">Label49</property>
      <property name="Top">18</property>
      <property name="Width">60</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_nota_1" >
      <property name="Height">21</property>
      <property name="Left">364</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_nota_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_conhecimento_nota_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_nota_1JSKeyUp</property>
    </object>
    <object class="Label" name="Label50" >
      <property name="Caption">Valor</property>
      <property name="Height">13</property>
      <property name="Left">427</property>
      <property name="Name">Label50</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_vlr_1" >
      <property name="Height">21</property>
      <property name="Left">427</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_conhecimento_vlr_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_conhecimento_vlr_1JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_vlr_1JSKeyUp</property>
    </object>
    <object class="Label" name="Label51" >
      <property name="Caption">Marca</property>
      <property name="Height">13</property>
      <property name="Left">490</property>
      <property name="Name">Label51</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_marca_1" >
      <property name="Height">21</property>
      <property name="Left">490</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_marca_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_marca_1JSKeyPress</property>
    </object>
    <object class="Label" name="Label52" >
      <property name="Caption">Placa</property>
      <property name="Height">13</property>
      <property name="Left">558</property>
      <property name="Name">Label52</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_placa_1" >
      <property name="Height">21</property>
      <property name="Left">558</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_placa_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_placa_1JSKeyPress</property>
    </object>
    <object class="Label" name="Local" >
      <property name="Caption">Local</property>
      <property name="Height">13</property>
      <property name="Left">655</property>
      <property name="Name">Local</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_local_1" >
      <property name="Height">21</property>
      <property name="Left">655</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_local_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_local_1JSKeyPress</property>
    </object>
    <object class="Label" name="Label53" >
      <property name="Caption">UF</property>
      <property name="Height">13</property>
      <property name="Left">627</property>
      <property name="Name">Label53</property>
      <property name="Top">18</property>
      <property name="Width">25</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_uf_1" >
      <property name="Height">21</property>
      <property name="Left">627</property>
      <property name="MaxLength">2</property>
      <property name="Name">mgt_conhecimento_uf_1</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">25</property>
      <property name="jsOnKeyPress">mgt_conhecimento_uf_1JSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox8" >
    <property name="Caption">Mercadoria Transportada - Carga 2</property>
    <property name="Height">64</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox8</property>
    <property name="Top">819</property>
    <property name="Width">730</property>
    <object class="Edit" name="mgt_conhecimento_carga_2" >
      <property name="Height">21</property>
      <property name="Left">9</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_conhecimento_carga_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">129</property>
      <property name="jsOnKeyPress">mgt_conhecimento_carga_2JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_qtde_2" >
      <property name="Height">21</property>
      <property name="Left">142</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_conhecimento_qtde_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">70</property>
      <property name="jsOnKeyPress">mgt_conhecimento_qtde_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_qtde_2JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_especie_2" >
      <property name="Height">21</property>
      <property name="Left">217</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_conhecimento_especie_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_conhecimento_especie_2JSKeyPress</property>
    </object>
    <object class="Label" name="Label56" >
      <property name="Caption">Mat. da Carga</property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label56</property>
      <property name="Top">18</property>
      <property name="Width">85</property>
    </object>
    <object class="Label" name="Label57" >
      <property name="Caption">Quantidade</property>
      <property name="Height">13</property>
      <property name="Left">142</property>
      <property name="Name">Label57</property>
      <property name="Top">18</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label58" >
      <property name="Caption"><![CDATA[Especie]]></property>
      <property name="Height">13</property>
      <property name="Left">217</property>
      <property name="Name">Label58</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Label" name="Label59" >
      <property name="Caption">Peso</property>
      <property name="Height">13</property>
      <property name="Left">267</property>
      <property name="Name">Label59</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_peso_2" >
      <property name="Height">21</property>
      <property name="Left">267</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_conhecimento_peso_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_conhecimento_peso_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_peso_2JSKeyUp</property>
    </object>
    <object class="Label" name="Label60" >
      <property name="Caption">M ou L</property>
      <property name="Height">13</property>
      <property name="Left">316</property>
      <property name="Name">Label60</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_m_l_2" >
      <property name="Height">21</property>
      <property name="Left">316</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_m_l_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_conhecimento_m_l_2JSKeyPress</property>
    </object>
    <object class="Label" name="Label61" >
      <property name="Caption">Nota Fiscal</property>
      <property name="Height">13</property>
      <property name="Left">364</property>
      <property name="Name">Label61</property>
      <property name="Top">18</property>
      <property name="Width">60</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_nota_2" >
      <property name="Height">21</property>
      <property name="Left">364</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_nota_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_conhecimento_nota_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_nota_2JSKeyUp</property>
    </object>
    <object class="Label" name="Label62" >
      <property name="Caption">Valor</property>
      <property name="Height">13</property>
      <property name="Left">427</property>
      <property name="Name">Label62</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_vlr_2" >
      <property name="Height">21</property>
      <property name="Left">427</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_conhecimento_vlr_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_conhecimento_vlr_2JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_vlr_2JSKeyUp</property>
    </object>
    <object class="Label" name="Label63" >
      <property name="Caption">Marca</property>
      <property name="Height">13</property>
      <property name="Left">490</property>
      <property name="Name">Label63</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_marca_2" >
      <property name="Height">21</property>
      <property name="Left">490</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_marca_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_marca_2JSKeyPress</property>
    </object>
    <object class="Label" name="Label64" >
      <property name="Caption">Placa</property>
      <property name="Height">13</property>
      <property name="Left">558</property>
      <property name="Name">Label64</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_placa_2" >
      <property name="Height">21</property>
      <property name="Left">558</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_placa_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_placa_2JSKeyPress</property>
    </object>
    <object class="Label" name="Label65" >
      <property name="Caption">Local</property>
      <property name="Height">13</property>
      <property name="Left">655</property>
      <property name="Name">Label65</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_local_2" >
      <property name="Height">21</property>
      <property name="Left">655</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_local_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_local_2JSKeyPress</property>
    </object>
    <object class="Label" name="Label66" >
      <property name="Caption">UF</property>
      <property name="Height">13</property>
      <property name="Left">627</property>
      <property name="Name">Label66</property>
      <property name="Top">18</property>
      <property name="Width">25</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_uf_2" >
      <property name="Height">21</property>
      <property name="Left">627</property>
      <property name="MaxLength">2</property>
      <property name="Name">mgt_conhecimento_uf_2</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">25</property>
      <property name="jsOnKeyPress">mgt_conhecimento_uf_2JSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox9" >
    <property name="Caption">Mercadoria Transportada - Carga 3</property>
    <property name="Height">64</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox9</property>
    <property name="Top">887</property>
    <property name="Width">730</property>
    <object class="Edit" name="mgt_conhecimento_carga_3" >
      <property name="Height">21</property>
      <property name="Left">9</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_conhecimento_carga_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">129</property>
      <property name="jsOnKeyPress">mgt_conhecimento_carga_3JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_qtde_3" >
      <property name="Height">21</property>
      <property name="Left">142</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_conhecimento_qtde_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">70</property>
      <property name="jsOnKeyPress">mgt_conhecimento_qtde_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_qtde_3JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_especie_3" >
      <property name="Height">21</property>
      <property name="Left">217</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_conhecimento_especie_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_conhecimento_especie_3JSKeyPress</property>
    </object>
    <object class="Label" name="Label67" >
      <property name="Caption">Mat. da Carga</property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label67</property>
      <property name="Top">18</property>
      <property name="Width">85</property>
    </object>
    <object class="Label" name="Label68" >
      <property name="Caption">Quantidade</property>
      <property name="Height">13</property>
      <property name="Left">142</property>
      <property name="Name">Label68</property>
      <property name="Top">18</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label69" >
      <property name="Caption"><![CDATA[Especie]]></property>
      <property name="Height">13</property>
      <property name="Left">217</property>
      <property name="Name">Label69</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Label" name="Label70" >
      <property name="Caption">Peso</property>
      <property name="Height">13</property>
      <property name="Left">267</property>
      <property name="Name">Label70</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_peso_3" >
      <property name="Height">21</property>
      <property name="Left">267</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_conhecimento_peso_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_conhecimento_peso_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_peso_3JSKeyUp</property>
    </object>
    <object class="Label" name="Label71" >
      <property name="Caption">M ou L</property>
      <property name="Height">13</property>
      <property name="Left">316</property>
      <property name="Name">Label71</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_m_l_3" >
      <property name="Height">21</property>
      <property name="Left">316</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_m_l_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_conhecimento_m_l_3JSKeyPress</property>
    </object>
    <object class="Label" name="Label72" >
      <property name="Caption">Nota Fiscal</property>
      <property name="Height">13</property>
      <property name="Left">364</property>
      <property name="Name">Label72</property>
      <property name="Top">18</property>
      <property name="Width">60</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_nota_3" >
      <property name="Height">21</property>
      <property name="Left">364</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_nota_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_conhecimento_nota_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_nota_3JSKeyUp</property>
    </object>
    <object class="Label" name="Label73" >
      <property name="Caption">Valor</property>
      <property name="Height">13</property>
      <property name="Left">427</property>
      <property name="Name">Label73</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_vlr_3" >
      <property name="Height">21</property>
      <property name="Left">427</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_conhecimento_vlr_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_conhecimento_vlr_3JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_vlr_3JSKeyUp</property>
    </object>
    <object class="Label" name="Label74" >
      <property name="Caption">Marca</property>
      <property name="Height">13</property>
      <property name="Left">490</property>
      <property name="Name">Label74</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_marca_3" >
      <property name="Height">21</property>
      <property name="Left">490</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_marca_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_marca_3JSKeyPress</property>
    </object>
    <object class="Label" name="Label75" >
      <property name="Caption">Placa</property>
      <property name="Height">13</property>
      <property name="Left">558</property>
      <property name="Name">Label75</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_placa_3" >
      <property name="Height">21</property>
      <property name="Left">558</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_placa_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_placa_3JSKeyPress</property>
    </object>
    <object class="Label" name="Label76" >
      <property name="Caption">Local</property>
      <property name="Height">13</property>
      <property name="Left">655</property>
      <property name="Name">Label76</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_local_3" >
      <property name="Height">21</property>
      <property name="Left">655</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_local_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_local_3JSKeyPress</property>
    </object>
    <object class="Label" name="Label77" >
      <property name="Caption">UF</property>
      <property name="Height">13</property>
      <property name="Left">627</property>
      <property name="Name">Label77</property>
      <property name="Top">18</property>
      <property name="Width">25</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_uf_3" >
      <property name="Height">21</property>
      <property name="Left">627</property>
      <property name="MaxLength">2</property>
      <property name="Name">mgt_conhecimento_uf_3</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">25</property>
      <property name="jsOnKeyPress">mgt_conhecimento_uf_3JSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox10" >
    <property name="Caption">Mercadoria Transportada - Carga 4</property>
    <property name="Height">64</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox10</property>
    <property name="Top">954</property>
    <property name="Width">730</property>
    <object class="Edit" name="mgt_conhecimento_carga_4" >
      <property name="Height">21</property>
      <property name="Left">9</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_conhecimento_carga_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">129</property>
      <property name="jsOnKeyPress">mgt_conhecimento_carga_4JSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_qtde_4" >
      <property name="Height">21</property>
      <property name="Left">142</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_conhecimento_qtde_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">70</property>
      <property name="jsOnKeyPress">mgt_conhecimento_qtde_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_qtde_4JSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_especie_4" >
      <property name="Height">21</property>
      <property name="Left">217</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_conhecimento_especie_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_conhecimento_especie_4JSKeyPress</property>
    </object>
    <object class="Label" name="Label78" >
      <property name="Caption">Mat. da Carga</property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label78</property>
      <property name="Top">18</property>
      <property name="Width">85</property>
    </object>
    <object class="Label" name="Label79" >
      <property name="Caption">Quantidade</property>
      <property name="Height">13</property>
      <property name="Left">142</property>
      <property name="Name">Label79</property>
      <property name="Top">18</property>
      <property name="Width">70</property>
    </object>
    <object class="Label" name="Label80" >
      <property name="Caption"><![CDATA[Especie]]></property>
      <property name="Height">13</property>
      <property name="Left">217</property>
      <property name="Name">Label80</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Label" name="Label81" >
      <property name="Caption">Peso</property>
      <property name="Height">13</property>
      <property name="Left">267</property>
      <property name="Name">Label81</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_peso_4" >
      <property name="Height">21</property>
      <property name="Left">267</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_conhecimento_peso_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_conhecimento_peso_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_peso_4JSKeyUp</property>
    </object>
    <object class="Label" name="Label82" >
      <property name="Caption">M ou L</property>
      <property name="Height">13</property>
      <property name="Left">316</property>
      <property name="Name">Label82</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_m_l_4" >
      <property name="Height">21</property>
      <property name="Left">316</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_m_l_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_conhecimento_m_l_4JSKeyPress</property>
    </object>
    <object class="Label" name="Label83" >
      <property name="Caption">Nota Fiscal</property>
      <property name="Height">13</property>
      <property name="Left">364</property>
      <property name="Name">Label83</property>
      <property name="Top">18</property>
      <property name="Width">60</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_nota_4" >
      <property name="Height">21</property>
      <property name="Left">364</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_nota_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_conhecimento_nota_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_nota_4JSKeyUp</property>
    </object>
    <object class="Label" name="Label84" >
      <property name="Caption">Valor</property>
      <property name="Height">13</property>
      <property name="Left">427</property>
      <property name="Name">Label84</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_vlr_4" >
      <property name="Height">21</property>
      <property name="Left">427</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_conhecimento_vlr_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_conhecimento_vlr_4JSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_vlr_4JSKeyUp</property>
    </object>
    <object class="Label" name="Label85" >
      <property name="Caption">Marca</property>
      <property name="Height">13</property>
      <property name="Left">490</property>
      <property name="Name">Label85</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_marca_4" >
      <property name="Height">21</property>
      <property name="Left">490</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_marca_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_marca_4JSKeyPress</property>
    </object>
    <object class="Label" name="Label86" >
      <property name="Caption">Placa</property>
      <property name="Height">13</property>
      <property name="Left">558</property>
      <property name="Name">Label86</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_placa_4" >
      <property name="Height">21</property>
      <property name="Left">558</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_placa_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_placa_4JSKeyPress</property>
    </object>
    <object class="Label" name="Label87" >
      <property name="Caption">Local</property>
      <property name="Height">13</property>
      <property name="Left">655</property>
      <property name="Name">Label87</property>
      <property name="Top">18</property>
      <property name="Width">45</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_local_4" >
      <property name="Height">21</property>
      <property name="Left">655</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_local_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_local_4JSKeyPress</property>
    </object>
    <object class="Label" name="Label88" >
      <property name="Caption">UF</property>
      <property name="Height">13</property>
      <property name="Left">627</property>
      <property name="Name">Label88</property>
      <property name="Top">18</property>
      <property name="Width">25</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_uf_4" >
      <property name="Height">21</property>
      <property name="Left">627</property>
      <property name="MaxLength">2</property>
      <property name="Name">mgt_conhecimento_uf_4</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">31</property>
      <property name="Width">25</property>
      <property name="jsOnKeyPress">mgt_conhecimento_uf_4JSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox11" >
    <property name="Caption"><![CDATA[Composicao do Frete]]></property>
    <property name="Height">64</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox11</property>
    <property name="Top">1022</property>
    <property name="Width">730</property>
    <object class="Edit" name="mgt_conhecimento_frete_peso" >
      <property name="Height">21</property>
      <property name="Left">9</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_conhecimento_frete_peso</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Text">0.00</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_pesoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_frete_pesoJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_frete_vlr" >
      <property name="Height">21</property>
      <property name="Left">78</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_conhecimento_frete_vlr</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Text">0.00</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_vlrJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_frete_vlrJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_frete_sec_sat" >
      <property name="Height">21</property>
      <property name="Left">147</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_conhecimento_frete_sec_sat</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Text">0.00</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_sec_satJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_frete_sec_satJSKeyUp</property>
    </object>
    <object class="Label" name="Label89" >
      <property name="Caption">Peso/Vol.</property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label89</property>
      <property name="Top">18</property>
      <property name="Width">65</property>
    </object>
    <object class="Label" name="Label90" >
      <property name="Caption">Frete Valor</property>
      <property name="Height">13</property>
      <property name="Left">78</property>
      <property name="Name">Label90</property>
      <property name="Top">18</property>
      <property name="Width">65</property>
    </object>
    <object class="Label" name="Label91" >
      <property name="Caption">SEC/SAC</property>
      <property name="Height">13</property>
      <property name="Left">147</property>
      <property name="Name">Label91</property>
      <property name="Top">18</property>
      <property name="Width">65</property>
    </object>
    <object class="Label" name="Label92" >
      <property name="Caption">Despacho</property>
      <property name="Height">13</property>
      <property name="Left">216</property>
      <property name="Name">Label92</property>
      <property name="Top">18</property>
      <property name="Width">65</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_frete_despacho" >
      <property name="Height">21</property>
      <property name="Left">216</property>
      <property name="MaxLength">7</property>
      <property name="Name">mgt_conhecimento_frete_despacho</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Text">0.00</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_despachoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_frete_despachoJSKeyUp</property>
    </object>
    <object class="Label" name="Label93" >
      <property name="Caption"><![CDATA[Pedagio]]></property>
      <property name="Height">13</property>
      <property name="Left">285</property>
      <property name="Name">Label93</property>
      <property name="Top">18</property>
      <property name="Width">65</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_frete_pedagio" >
      <property name="Height">21</property>
      <property name="Left">285</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_frete_pedagio</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Text">0.00</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_pedagioJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_frete_pedagioJSKeyUp</property>
    </object>
    <object class="Label" name="Label94" >
      <property name="Caption">Outros</property>
      <property name="Height">13</property>
      <property name="Left">354</property>
      <property name="Name">Label94</property>
      <property name="Top">18</property>
      <property name="Width">65</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_frete_outros" >
      <property name="Height">21</property>
      <property name="Left">354</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_frete_outros</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Text">0.00</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_outrosJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_frete_outrosJSKeyUp</property>
    </object>
    <object class="Label" name="Label95" >
      <property name="Caption">Total Vlr.</property>
      <property name="Height">13</property>
      <property name="Left">423</property>
      <property name="Name">Label95</property>
      <property name="Top">18</property>
      <property name="Width">65</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_frete_total" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">423</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_conhecimento_frete_total</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Text">0.00</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_totalJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_frete_totalJSKeyUp</property>
    </object>
    <object class="Label" name="Label96" >
      <property name="Caption">Base ICMS</property>
      <property name="Height">13</property>
      <property name="Left">519</property>
      <property name="Name">Label96</property>
      <property name="Top">18</property>
      <property name="Width">65</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_frete_base" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">519</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_frete_base</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Text">0.00</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_baseJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_frete_baseJSKeyUp</property>
    </object>
    <object class="Label" name="Label97" >
      <property name="Caption">Aliq.ICMS</property>
      <property name="Height">13</property>
      <property name="Left">587</property>
      <property name="Name">Label97</property>
      <property name="Top">18</property>
      <property name="Width">65</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_frete_aliquota_icms" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">587</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_frete_aliquota_icms</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Text">0.00</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_aliquota_icmsJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_frete_aliquota_icmsJSKeyUp</property>
    </object>
    <object class="Label" name="Label98" >
      <property name="Caption">ICMS</property>
      <property name="Height">13</property>
      <property name="Left">655</property>
      <property name="Name">Label98</property>
      <property name="Top">18</property>
      <property name="Width">65</property>
    </object>
    <object class="Edit" name="mgt_conhecimento_frete_vlr_icms" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">655</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_conhecimento_frete_vlr_icms</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Text">0.00</property>
      <property name="Top">31</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_conhecimento_frete_vlr_icmsJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_conhecimento_frete_vlr_icmsJSKeyUp</property>
    </object>
  </object>
  <object class="Window" name="confirmacao" >
    <property name="Caption"><![CDATA[Confirmacao]]></property>
    <property name="Height">105</property>
    <property name="IsVisible">0</property>
    <property name="Left">180</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">1196</property>
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
      <property name="Left">188</property>
      <property name="Name">bt_sim</property>
      <property name="Top">76</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_simClick</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption"><![CDATA[Voce deseja realmente excluir este registro do cadastro? O preenchimento do motivo e obrigatorio.]]></property>
      <property name="Height">28</property>
      <property name="Left">7</property>
      <property name="Name">Label2</property>
      <property name="Top">24</property>
      <property name="Width">323</property>
    </object>
    <object class="Label" name="Label99" >
      <property name="Caption">Motivo:</property>
      <property name="Height">13</property>
      <property name="Left">7</property>
      <property name="Name">Label99</property>
      <property name="Top">57</property>
      <property name="Width">38</property>
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
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Observacao]]></property>
    <property name="Height">48</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">1089</property>
    <property name="Width">730</property>
    <object class="Edit" name="mgt_conhecimento_observacao" >
      <property name="Height">21</property>
      <property name="Left">8</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_conhecimento_observacao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">16</property>
      <property name="Width">712</property>
      <property name="jsOnKeyPress">mgt_conhecimento_observacaoJSKeyPress</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">700</property>
        <property name="Top">5</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
