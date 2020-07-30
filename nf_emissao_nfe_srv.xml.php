<?php
<object class="nfemissaonfesrv" name="nfemissaonfesrv" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">nfemissaonfesrv</property>
  <property name="Width">755</property>
  <property name="OnCreate">nfemissaonfesrvCreate</property>
  <property name="jsOnLoad">nfemissaonfesrvJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[NOTAS FISCAIS - Emissao de Notas Fiscais de Servico]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption">Busca</property>
    <property name="Height">80</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">24</property>
    <property name="Width">616</property>
    <object class="Label" name="Label3" >
      <property name="Caption">Dados Para Busca</property>
      <property name="Height">13</property>
      <property name="Left">24</property>
      <property name="Name">Label3</property>
      <property name="Top">28</property>
      <property name="Width">304</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Opcoes]]></property>
      <property name="Height">13</property>
      <property name="Left">344</property>
      <property name="Name">Label4</property>
      <property name="Top">28</property>
      <property name="Width">160</property>
    </object>
    <object class="Edit" name="dados_busca" >
      <property name="Height">21</property>
      <property name="Left">24</property>
      <property name="Name">dados_busca</property>
      <property name="Top">41</property>
      <property name="Width">304</property>
      <property name="jsOnKeyPress">dados_buscaJSKeyPress</property>
    </object>
    <object class="ComboBox" name="opcao_busca" >
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:6:{s:6:&quot;Numero&quot;;s:6:&quot;Numero&quot;;s:4:&quot;Data&quot;;s:4:&quot;Data&quot;;s:7:&quot;Cliente&quot;;s:7:&quot;Cliente&quot;;s:5:&quot;Valor&quot;;s:5:&quot;Valor&quot;;s:6:&quot;Status&quot;;s:6:&quot;Status&quot;;s:7:&quot;Entrega&quot;;s:7:&quot;Entrega&quot;;}]]></property>
      <property name="Left">344</property>
      <property name="Name">opcao_busca</property>
      <property name="Top">41</property>
      <property name="Width">160</property>
      <property name="jsOnKeyPress">opcao_buscaJSKeyPress</property>
    </object>
    <object class="Button" name="bt_buscar" >
      <property name="Caption">Buscar</property>
      <property name="Height">25</property>
      <property name="Left">519</property>
      <property name="Name">bt_buscar</property>
      <property name="Top">37</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_buscarClick</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">80</property>
    <property name="Left">634</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">24</property>
    <property name="Width">104</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">16</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">30</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
  </object>
  <object class="DBGrid" name="registros" >
    <property name="Columns"><![CDATA[a:11:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:15:&quot;Nro.Faturamento&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_faturamento_srv_numero&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;93&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Data&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_faturamento_srv_data&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;75&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Cliente&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:32:&quot;mgt_faturamento_srv_cliente_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:19:&quot;Vlr.Nota Fiscal(R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:31:&quot;mgt_faturamento_srv_valor_total&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;105&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Data Entrega&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:32:&quot;mgt_faturamento_srv_data_entrega&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;75&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Status&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_faturamento_srv_status&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:1:&quot;-&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_faturamento_srv_status_1&quot;;s:9:&quot;FontColor&quot;;s:7:&quot;#000000&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;10&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:1:&quot;-&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_faturamento_srv_status_2&quot;;s:9:&quot;FontColor&quot;;s:7:&quot;#00FF80&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;10&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:1:&quot;-&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_faturamento_srv_status_3&quot;;s:9:&quot;FontColor&quot;;s:7:&quot;#FF0000&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;10&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:15:&quot;Nro.Nota Fiscal&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:38:&quot;mgt_faturamento_srv_numero_faturamento&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;85&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Nro.Pedido&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:33:&quot;mgt_faturamento_srv_numero_pedido&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}}]]></property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Faturamentos_Srv</property>
    <property name="Height">288</property>
    <property name="Left">8</property>
    <property name="Name">registros</property>
    <property name="ReadOnly">1</property>
    <property name="Top">138</property>
    <property name="Width">730</property>
    <property name="jsOnRowChanged">registrosJSRowChanged</property>
    <property name="jsOnRowSaved"></property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Cadastro</property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">455</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_cadastro" >
      <property name="Caption">Emitir Nota</property>
      <property name="Height">25</property>
      <property name="Left">617</property>
      <property name="Name">bt_cadastro</property>
      <property name="Top">16</property>
      <property name="Width">100</property>
      <property name="OnClick">bt_cadastroClick</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Para emitir a Nota desejada, clique na linha desejada do grid acima e clique no botao &quot;Emitir Nota&quot; ou informe o Nro.Faturamento desejado no campo ao lado.]]></property>
      <property name="Height">25</property>
      <property name="Left">7</property>
      <property name="Name">Label5</property>
      <property name="Top">16</property>
      <property name="Width">450</property>
    </object>
    <object class="Edit" name="abrir_cadastro" >
      <property name="Height">21</property>
      <property name="Left">559</property>
      <property name="Name">abrir_cadastro</property>
      <property name="Top">18</property>
      <property name="Width">53</property>
      <property name="jsOnKeyPress">abrir_cadastroJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption">Nro.Faturamento</property>
      <property name="Height">13</property>
      <property name="Left">463</property>
      <property name="Name">Label1</property>
      <property name="Top">22</property>
      <property name="Width">93</property>
    </object>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption">Registros Obtidos:</property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label2</property>
    <property name="Top">120</property>
    <property name="Width">139</property>
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
    <property name="Top">434</property>
    <property name="Width">730</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">653</property>
        <property name="Top">101</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
