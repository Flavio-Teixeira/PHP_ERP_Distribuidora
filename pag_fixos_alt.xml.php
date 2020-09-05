<?php
<object class="pagfixosalt" name="pagfixosalt" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">734</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">pagfixosalt</property>
  <property name="Width">755</property>
  <property name="OnCreate">pagfixosaltCreate</property>
  <property name="jsOnLoad">pagfixosaltJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CONTAS A PAGAR - Titulos Fixos - Alteracao / Consulta]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="dados_titulo" >
    <property name="Caption"><![CDATA[Dados do Titulo]]></property>
    <property name="Height">231</property>
    <property name="Left">8</property>
    <property name="Name">dados_titulo</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Label" name="Label2" >
      <property name="Caption">Conta</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label2</property>
      <property name="Top">25</property>
      <property name="Width">35</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption">Dia</property>
      <property name="Height">13</property>
      <property name="Left">18</property>
      <property name="Name">Label3</property>
      <property name="Top">49</property>
      <property name="Width">27</property>
    </object>
    <object class="Edit" name="mgt_titulo_fixo_dia" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">50</property>
      <property name="MaxLength">2</property>
      <property name="Name">mgt_titulo_fixo_dia</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">45</property>
      <property name="Width">25</property>
      <property name="jsOnKeyPress">mgt_titulo_fixo_diaJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_titulo_fixo_diaJSKeyUp</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">Valor (R$)</property>
      <property name="Height">13</property>
      <property name="Left">564</property>
      <property name="Name">Label4</property>
      <property name="Top">49</property>
      <property name="Width">59</property>
    </object>
    <object class="Edit" name="mgt_titulo_fixo_valor" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">627</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_titulo_fixo_valor</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">45</property>
      <property name="Width">89</property>
      <property name="jsOnKeyPress">mgt_titulo_fixo_valorJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_titulo_fixo_valorJSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_titulo_fixo_conta" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">50</property>
      <property name="Name">mgt_titulo_fixo_conta</property>
      <property name="ParentColor">0</property>
      <property name="Top">21</property>
      <property name="Width">666</property>
      <property name="jsOnKeyPress">mgt_titulo_fixo_contaJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">86</property>
      <property name="Name">Label1</property>
      <property name="Top">49</property>
      <property name="Width">56</property>
    </object>
    <object class="Edit" name="mgt_titulo_fixo_descricao" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">146</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_titulo_fixo_descricao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">45</property>
      <property name="Width">409</property>
      <property name="jsOnKeyPress">mgt_titulo_fixo_descricaoJSKeyPress</property>
    </object>
    <object class="RadioGroup" name="mgt_titulo_fixo_tipo" >
      <property name="Height">52</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:2:{i:0;s:44:&quot;Indeterminado (Gera lancamentos para 5 anos)&quot;;i:1;s:53:&quot;Determinado (Gera lancamentos ate a data determinada)&quot;;}]]></property>
      <property name="Left">14</property>
      <property name="Name">mgt_titulo_fixo_tipo</property>
      <property name="Top">81</property>
      <property name="Width">353</property>
      <property name="jsOnKeyPress">mgt_titulo_fixo_tipoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_titulo_fixo_data" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">369</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_titulo_fixo_data</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">108</property>
      <property name="Width">73</property>
      <property name="jsOnKeyPress">mgt_titulo_fixo_dataJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_titulo_fixo_dataJSKeyUp</property>
    </object>
    <object class="GroupBox" name="GroupBox2" >
      <property name="Caption">Fornecedor</property>
      <property name="Height">87</property>
      <property name="Left">8</property>
      <property name="Name">GroupBox2</property>
      <property name="Top">135</property>
      <property name="Width">714</property>
      <object class="Label" name="Label5" >
        <property name="Caption">Fornecedor Nro.</property>
        <property name="Height">13</property>
        <property name="Left">10</property>
        <property name="Name">Label5</property>
        <property name="Top">33</property>
        <property name="Width">91</property>
      </object>
      <object class="Edit" name="mgt_titulo_fixo_fornecedor_numero" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">106</property>
        <property name="MaxLength">11</property>
        <property name="Name">mgt_titulo_fixo_fornecedor_numero</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Top">29</property>
        <property name="Width">40</property>
        <property name="jsOnKeyPress">mgt_titulo_fixo_fornecedor_numeroJSKeyPress</property>
      </object>
      <object class="Label" name="Label6" >
        <property name="Caption">Fornecedor Nome</property>
        <property name="Height">13</property>
        <property name="Left">152</property>
        <property name="Name">Label6</property>
        <property name="Top">16</property>
        <property name="Width">104</property>
      </object>
      <object class="Edit" name="mgt_titulo_fixo_fornecedor_nome" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">152</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_titulo_fixo_fornecedor_nome</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">2</property>
        <property name="Top">29</property>
        <property name="Width">484</property>
        <property name="jsOnKeyPress">mgt_titulo_fixo_fornecedor_nomeJSKeyPress</property>
      </object>
      <object class="Button" name="bt_procurar" >
        <property name="ButtonType">btNormal</property>
        <property name="Caption">Procurar</property>
        <property name="Height">25</property>
        <property name="Left">639</property>
        <property name="Name">bt_procurar</property>
        <property name="Top">27</property>
        <property name="Width">67</property>
        <property name="OnClick">bt_procurarClick</property>
      </object>
      <object class="Button" name="bt_remove" >
        <property name="ButtonType">btNormal</property>
        <property name="Caption"><![CDATA[Remover Vinculo com o Fornecedor]]></property>
        <property name="Height">25</property>
        <property name="Left">256</property>
        <property name="Name">bt_remove</property>
        <property name="Top">54</property>
        <property name="Width">219</property>
        <property name="jsOnClick">bt_removeJSClick</property>
      </object>
    </object>
    <object class="HiddenField" name="mgt_titulo_fixo_nro" >
      <property name="Height">18</property>
      <property name="Left">564</property>
      <property name="Name">mgt_titulo_fixo_nro</property>
      <property name="Top">73</property>
      <property name="Width">152</property>
    </object>
    <object class="HiddenField" name="mgt_titulo_fixo_descricao_ant" >
      <property name="Height">18</property>
      <property name="Left">564</property>
      <property name="Name">mgt_titulo_fixo_descricao_ant</property>
      <property name="Top">98</property>
      <property name="Width">152</property>
    </object>
  </object>
  <object class="GroupBox" name="opcoes_titulo" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">opcoes_titulo</property>
    <property name="Top">272</property>
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
    <object class="Button" name="bt_alterar" >
      <property name="Caption">Alterar</property>
      <property name="Height">25</property>
      <property name="Left">292</property>
      <property name="Name">bt_alterar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
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
      <property name="Left">373</property>
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
  <object class="GroupBox" name="adiciona_fornecedores" >
    <property name="Caption">Adiciona Fornecedores</property>
    <property name="Height">284</property>
    <property name="Left">8</property>
    <property name="Name">adiciona_fornecedores</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">326</property>
    <property name="Visible">0</property>
    <property name="Width">730</property>
    <object class="Label" name="Label30" >
      <property name="Caption">Registros Obtidos:</property>
      <property name="Height">13</property>
      <property name="Left">15</property>
      <property name="Name">Label30</property>
      <property name="Top">93</property>
      <property name="Width">139</property>
    </object>
    <object class="Button" name="bt_adiciona_fornecedor" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption">Adicionar Fornecedor</property>
      <property name="Height">25</property>
      <property name="Left">281</property>
      <property name="Name">bt_adiciona_fornecedor</property>
      <property name="Top">243</property>
      <property name="Width">139</property>
      <property name="OnClick">bt_adiciona_fornecedorClick</property>
    </object>
    <object class="Panel" name="adiciona_clientes_borda" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Selecione o Fornecedor&lt;/b&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FF0000</property>
      <property name="Height">14</property>
      <property name="Left">6</property>
      <property name="Name">adiciona_clientes_borda</property>
      <property name="ParentColor">0</property>
      <property name="Top">17</property>
      <property name="Width">717</property>
    </object>
    <object class="Panel" name="Panel5" >
      <property name="Color">#FF0000</property>
      <property name="Height">242</property>
      <property name="Left">720</property>
      <property name="Name">Panel5</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel6" >
      <property name="Color">#FF0000</property>
      <property name="Height">242</property>
      <property name="Left">6</property>
      <property name="Name">Panel6</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel7" >
      <property name="Color">#FF0000</property>
      <property name="Height">3</property>
      <property name="Left">9</property>
      <property name="Name">Panel7</property>
      <property name="ParentColor">0</property>
      <property name="Top">270</property>
      <property name="Width">711</property>
    </object>
    <object class="Button" name="bt_fechar_cliente" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">661</property>
      <property name="Name">bt_fechar_cliente</property>
      <property name="Top">243</property>
      <property name="Width">52</property>
      <property name="OnClick">bt_fechar_clienteClick</property>
    </object>
    <object class="DBGrid" name="registros" >
      <property name="Columns"><![CDATA[a:4:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Numero&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_fornecedor_numero&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;CNPJ&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_fornecedor_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;105&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Nome&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:19:&quot;mgt_fornecedor_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;275&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Razao Social&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_fornecedor_razao_social&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;260&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Fornecedores</property>
      <property name="Height">97</property>
      <property name="Left">12</property>
      <property name="Name">registros</property>
      <property name="ReadOnly">1</property>
      <property name="Top">108</property>
      <property name="Width">701</property>
      <property name="jsOnRowChanged">registrosJSRowChanged</property>
      <property name="jsOnRowSaved"></property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption">Dados Para Busca</property>
      <property name="Height">13</property>
      <property name="Left">12</property>
      <property name="Name">Label7</property>
      <property name="Top">42</property>
      <property name="Width">304</property>
    </object>
    <object class="Edit" name="dados_busca" >
      <property name="Height">21</property>
      <property name="Left">12</property>
      <property name="Name">dados_busca</property>
      <property name="Top">55</property>
      <property name="Width">457</property>
      <property name="jsOnKeyPress">dados_buscaJSKeyPress</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption"><![CDATA[Opcoes]]></property>
      <property name="Height">13</property>
      <property name="Left">474</property>
      <property name="Name">Label8</property>
      <property name="Top">42</property>
      <property name="Width">160</property>
    </object>
    <object class="ComboBox" name="opcao_busca" >
      <property name="Height">18</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:4:{s:6:&quot;Numero&quot;;s:6:&quot;Numero&quot;;s:4:&quot;CNPJ&quot;;s:4:&quot;CNPJ&quot;;s:4:&quot;Nome&quot;;s:4:&quot;Nome&quot;;s:12:&quot;Razao Social&quot;;s:12:&quot;Razao Social&quot;;}]]></property>
      <property name="Left">474</property>
      <property name="Name">opcao_busca</property>
      <property name="Top">55</property>
      <property name="Width">160</property>
      <property name="jsOnKeyPress">opcao_buscaJSKeyPress</property>
    </object>
    <object class="Button" name="bt_buscar" >
      <property name="Caption">Buscar</property>
      <property name="Height">25</property>
      <property name="Left">638</property>
      <property name="Name">bt_buscar</property>
      <property name="Top">52</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_buscarClick</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption"><![CDATA[Numero]]></property>
      <property name="Height">13</property>
      <property name="Left">12</property>
      <property name="Name">Label9</property>
      <property name="Top">216</property>
      <property name="Width">51</property>
    </object>
    <object class="Edit" name="adiciona_fornecedor_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">66</property>
      <property name="MaxLength">80</property>
      <property name="Name">adiciona_fornecedor_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">212</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">adiciona_fornecedor_numeroJSKeyPress</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">CNPJ</property>
      <property name="Height">13</property>
      <property name="Left">133</property>
      <property name="Name">Label10</property>
      <property name="Top">216</property>
      <property name="Width">29</property>
    </object>
    <object class="Edit" name="adiciona_fornecedor_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">167</property>
      <property name="MaxLength">80</property>
      <property name="Name">adiciona_fornecedor_codigo</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">212</property>
      <property name="Width">130</property>
      <property name="jsOnKeyPress">adiciona_fornecedor_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Nome</property>
      <property name="Height">13</property>
      <property name="Left">304</property>
      <property name="Name">Label11</property>
      <property name="Top">216</property>
      <property name="Width">35</property>
    </object>
    <object class="Edit" name="adiciona_fornecedor_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">339</property>
      <property name="MaxLength">100</property>
      <property name="Name">adiciona_fornecedor_nome</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">212</property>
      <property name="Width">374</property>
      <property name="jsOnKeyPress">adiciona_fornecedor_nomeJSKeyPress</property>
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
    <property name="Top">619</property>
    <property name="Width">369</property>
    <property name="jsOnClose"></property>
    <property name="jsOnMaximize"></property>
    <property name="jsOnMinimize"></property>
    <property name="jsOnMove"></property>
    <property name="jsOnRestore"></property>
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
    <object class="Label" name="Label12" >
      <property name="Caption"><![CDATA[Voce deseja realmente excluir este registro do cadastro? O preenchimento do motivo e obrigatorio.]]></property>
      <property name="Height">28</property>
      <property name="Left">7</property>
      <property name="Name">Label12</property>
      <property name="Top">24</property>
      <property name="Width">323</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption">Motivo:</property>
      <property name="Height">13</property>
      <property name="Left">7</property>
      <property name="Name">Label13</property>
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
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">701</property>
        <property name="Top">621</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
