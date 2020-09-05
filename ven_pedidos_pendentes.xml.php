<?php
<object class="venpedidospendentes" name="venpedidospendentes" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">venpedidospendentes</property>
  <property name="Width">755</property>
  <property name="OnCreate">venpedidospendentesCreate</property>
  <property name="jsOnLoad">venpedidospendentesJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption">VENDAS - Pedidos Pendentes</property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption">Busca por Cliente</property>
    <property name="Height">56</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">109</property>
    <property name="Width">730</property>
    <object class="Label" name="Label3" >
      <property name="Caption">Dados Para Busca</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label3</property>
      <property name="Top">24</property>
      <property name="Width">104</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Opcoes]]></property>
      <property name="Height">13</property>
      <property name="Left">422</property>
      <property name="Name">Label4</property>
      <property name="Top">24</property>
      <property name="Width">46</property>
    </object>
    <object class="Edit" name="dados_busca" >
      <property name="Height">21</property>
      <property name="Left">120</property>
      <property name="Name">dados_busca</property>
      <property name="Top">20</property>
      <property name="Width">296</property>
      <property name="jsOnKeyPress">dados_buscaJSKeyPress</property>
    </object>
    <object class="ComboBox" name="opcao_busca" >
      <property name="Height">18</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:5:{s:6:&quot;Numero&quot;;s:6:&quot;Numero&quot;;s:4:&quot;Tipo&quot;;s:4:&quot;Tipo&quot;;s:6:&quot;Codigo&quot;;s:6:&quot;Codigo&quot;;s:4:&quot;Nome&quot;;s:4:&quot;Nome&quot;;s:12:&quot;Razao Social&quot;;s:12:&quot;Razao Social&quot;;}]]></property>
      <property name="Left">472</property>
      <property name="Name">opcao_busca</property>
      <property name="Top">21</property>
      <property name="Width">160</property>
      <property name="jsOnKeyPress">opcao_buscaJSKeyPress</property>
    </object>
    <object class="Button" name="bt_buscar" >
      <property name="Caption">Buscar</property>
      <property name="Height">25</property>
      <property name="Left">642</property>
      <property name="Name">bt_buscar</property>
      <property name="Top">18</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_buscarClick</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">47</property>
    <property name="Left">634</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">34</property>
    <property name="Width">104</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">16</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">15</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
  </object>
  <object class="DBGrid" name="registros" >
    <property name="Columns"><![CDATA[a:5:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Numero&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_numero&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_cliente_codigo_tipo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;110&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Nome&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:16:&quot;mgt_cliente_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;248&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Razao Social&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_cliente_razao_social&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;248&quot;;}}]]></property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
    <property name="Height">79</property>
    <property name="Left">8</property>
    <property name="Name">registros</property>
    <property name="ReadOnly">1</property>
    <property name="Top">180</property>
    <property name="Width">730</property>
    <property name="jsOnRowChanged">registrosJSRowChanged</property>
    <property name="jsOnRowSaved"></property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Opcao Escolhida]]></property>
    <property name="Height">66</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">438</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_imprimir" >
      <property name="Caption">Imprimir</property>
      <property name="Height">25</property>
      <property name="Left">642</property>
      <property name="Name">bt_imprimir</property>
      <property name="Top">28</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_imprimirClick</property>
    </object>
    <object class="Edit" name="opcao_escolhida_tipo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">13</property>
      <property name="Name">opcao_escolhida_tipo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">30</property>
      <property name="Width">48</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption">Tipo</property>
      <property name="Height">13</property>
      <property name="Left">13</property>
      <property name="Name">Label1</property>
      <property name="Top">17</property>
      <property name="Width">46</property>
    </object>
    <object class="Edit" name="opcao_escolhida_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">64</property>
      <property name="Name">opcao_escolhida_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">30</property>
      <property name="Width">121</property>
    </object>
    <object class="Edit" name="opcao_escolhida_descricao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">188</property>
      <property name="Name">opcao_escolhida_descricao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">30</property>
      <property name="Width">370</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">64</property>
      <property name="Name">Label5</property>
      <property name="Top">17</property>
      <property name="Width">121</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">188</property>
      <property name="Name">Label14</property>
      <property name="Top">17</property>
      <property name="Width">370</property>
    </object>
    <object class="Button" name="Button1" >
      <property name="Caption">Limpar</property>
      <property name="Height">25</property>
      <property name="Left">563</property>
      <property name="Name">Button1</property>
      <property name="Top">28</property>
      <property name="Width">75</property>
      <property name="jsOnClick">Button1JSClick</property>
    </object>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption">Registros de Clientes Obtidos:</property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label2</property>
    <property name="Top">166</property>
    <property name="Width">179</property>
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
  <object class="GroupBox" name="GroupBox4" >
    <property name="Caption"><![CDATA[Periodo]]></property>
    <property name="Height">47</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox4</property>
    <property name="Top">34</property>
    <property name="Width">624</property>
    <object class="Label" name="Label6" >
      <property name="Caption"><![CDATA[Periodo de]]></property>
      <property name="Height">13</property>
      <property name="Left">68</property>
      <property name="Name">Label6</property>
      <property name="Top">19</property>
      <property name="Width">63</property>
    </object>
    <object class="Edit" name="mgt_rel_dt_ini" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">136</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_rel_dt_ini</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">15</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_rel_dt_iniJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_rel_dt_iniJSKeyUp</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption"><![CDATA[Ate]]></property>
      <property name="Height">13</property>
      <property name="Left">220</property>
      <property name="Name">Label7</property>
      <property name="Top">19</property>
      <property name="Width">20</property>
    </object>
    <object class="Edit" name="mgt_rel_dt_fim" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">249</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_rel_dt_fim</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">15</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_rel_dt_fimJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_rel_dt_fimJSKeyUp</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption"><![CDATA[(Datas referentes a criacao do pedido)]]></property>
      <property name="Height">13</property>
      <property name="Left">350</property>
      <property name="Name">Label8</property>
      <property name="Top">19</property>
      <property name="Width">216</property>
    </object>
  </object>
  <object class="Label" name="Label9" >
    <property name="Caption"><![CDATA[Esolha uma das opcoes abaixo, ou por Cliente ou por Produto. Para uma Impressao Geral, nao escolha nenhuma das opcoes abaixo.]]></property>
    <property name="Height">26</property>
    <property name="Left">8</property>
    <property name="Name">Label9</property>
    <property name="Top">82</property>
    <property name="Width">730</property>
  </object>
  <object class="GroupBox" name="GroupBox5" >
    <property name="Caption">Busca por Produto</property>
    <property name="Height">56</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox5</property>
    <property name="Top">280</property>
    <property name="Width">730</property>
    <object class="Label" name="Label10" >
      <property name="Caption">Dados Para Busca</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label10</property>
      <property name="Top">24</property>
      <property name="Width">103</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption"><![CDATA[Opcoes]]></property>
      <property name="Height">13</property>
      <property name="Left">420</property>
      <property name="Name">Label11</property>
      <property name="Top">24</property>
      <property name="Width">48</property>
    </object>
    <object class="Edit" name="dados_busca_produto" >
      <property name="Height">21</property>
      <property name="Left">120</property>
      <property name="Name">dados_busca_produto</property>
      <property name="Top">20</property>
      <property name="Width">296</property>
      <property name="jsOnKeyPress">dados_busca_produtoJSKeyPress</property>
    </object>
    <object class="ComboBox" name="opcao_busca_produto" >
      <property name="Height">18</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:3:{s:6:&quot;Codigo&quot;;s:6:&quot;Codigo&quot;;s:10:&quot;Referencia&quot;;s:10:&quot;Referencia&quot;;s:9:&quot;Descricao&quot;;s:9:&quot;Descricao&quot;;}]]></property>
      <property name="Left">472</property>
      <property name="Name">opcao_busca_produto</property>
      <property name="Top">20</property>
      <property name="Width">160</property>
      <property name="jsOnKeyPress">opcao_busca_produtoJSKeyPress</property>
    </object>
    <object class="Button" name="bt_buscar_produto" >
      <property name="Caption">Buscar</property>
      <property name="Height">25</property>
      <property name="Left">642</property>
      <property name="Name">bt_buscar_produto</property>
      <property name="Top">18</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_buscar_produtoClick</property>
    </object>
  </object>
  <object class="Label" name="Label12" >
    <property name="Caption">Ou</property>
    <property name="Height">13</property>
    <property name="Left">363</property>
    <property name="Name">Label12</property>
    <property name="Top">264</property>
    <property name="Width">20</property>
  </object>
  <object class="DBGrid" name="registros_produtos" >
    <property name="Columns"><![CDATA[a:3:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_produto_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Referencia&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:22:&quot;mgt_produto_referencia&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_produto_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;510&quot;;}}]]></property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Produtos</property>
    <property name="Height">79</property>
    <property name="Left">8</property>
    <property name="Name">registros_produtos</property>
    <property name="ReadOnly">1</property>
    <property name="Top">353</property>
    <property name="Width">730</property>
    <property name="jsOnRowChanged">registros_produtosJSRowChanged</property>
    <property name="jsOnRowSaved"></property>
  </object>
  <object class="Label" name="Label13" >
    <property name="Caption">Registros de Produtos Obtidos:</property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label13</property>
    <property name="Top">337</property>
    <property name="Width">179</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">701</property>
        <property name="Top">21</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
