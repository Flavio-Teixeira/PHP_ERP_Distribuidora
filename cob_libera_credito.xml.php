<?php
<object class="cobliberacredito" name="cobliberacredito" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cobliberacredito</property>
  <property name="Width">755</property>
  <property name="OnCreate">cobliberacreditoCreate</property>
  <property name="jsOnLoad">cobliberacreditoJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[COBRANCA - Liberacao de Credito]]></property>
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
      <property name="Height">18</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:5:{s:6:&quot;Numero&quot;;s:6:&quot;Numero&quot;;s:4:&quot;Tipo&quot;;s:4:&quot;Tipo&quot;;s:6:&quot;Codigo&quot;;s:6:&quot;Codigo&quot;;s:4:&quot;Nome&quot;;s:4:&quot;Nome&quot;;s:12:&quot;Razao Social&quot;;s:12:&quot;Razao Social&quot;;}]]></property>
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
      <property name="Top">38</property>
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
      <property name="Top">31</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
  </object>
  <object class="DBGrid" name="registros" >
    <property name="Columns"><![CDATA[a:8:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Numero&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_numero&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_cliente_codigo_tipo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;110&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Nome&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:16:&quot;mgt_cliente_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;248&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Razao Social&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_cliente_razao_social&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;248&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:30:&quot;mgt_cliente_data_ultima_compra&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_cliente_data_ultima_compra&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:24:&quot;mgt_cliente_ultimo_valor&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_cliente_ultimo_valor&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:26:&quot;mgt_cliente_status_credito&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_cliente_status_credito&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}}]]></property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
    <property name="Height">230</property>
    <property name="Left">8</property>
    <property name="Name">registros</property>
    <property name="ReadOnly">1</property>
    <property name="Top">140</property>
    <property name="Width">730</property>
    <property name="jsOnRowChanged">registrosJSRowChanged</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Liberacao de Credito]]></property>
    <property name="Height">116</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">390</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_alterar" >
      <property name="Caption">Alterar</property>
      <property name="Height">25</property>
      <property name="Left">327</property>
      <property name="Name">bt_alterar</property>
      <property name="Top">81</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_alterarClick</property>
    </object>
    <object class="Label" name="Label31" >
      <property name="Caption">Cliente</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label31</property>
      <property name="Top">36</property>
      <property name="Width">44</property>
    </object>
    <object class="Edit" name="libera_cliente_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">62</property>
      <property name="MaxLength">11</property>
      <property name="Name">libera_cliente_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">32</property>
      <property name="Width">41</property>
    </object>
    <object class="Label" name="Label32" >
      <property name="Caption"><![CDATA[Cliente Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">106</property>
      <property name="Name">Label32</property>
      <property name="Top">17</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="libera_cliente_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">80</property>
      <property name="Name">libera_cliente_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">32</property>
      <property name="Width">126</property>
    </object>
    <object class="Edit" name="libera_cliente_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">237</property>
      <property name="MaxLength">100</property>
      <property name="Name">libera_cliente_nome</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">32</property>
      <property name="Width">413</property>
    </object>
    <object class="Label" name="Label33" >
      <property name="Caption">Cliente Nome</property>
      <property name="Height">13</property>
      <property name="Left">237</property>
      <property name="Name">Label33</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="libera_cliente_bloqueado" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">655</property>
      <property name="MaxLength">80</property>
      <property name="Name">libera_cliente_bloqueado</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">32</property>
      <property name="Width">62</property>
    </object>
    <object class="Label" name="Label64" >
      <property name="Caption">Bloqueado</property>
      <property name="Height">13</property>
      <property name="Left">655</property>
      <property name="Name">Label64</property>
      <property name="Top">17</property>
      <property name="Width">62</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Data da Ultima Compra]]></property>
      <property name="Height">13</property>
      <property name="Left">62</property>
      <property name="Name">Label5</property>
      <property name="Top">60</property>
      <property name="Width">133</property>
    </object>
    <object class="Edit" name="libera_cliente_dt_ultima_compra" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">198</property>
      <property name="MaxLength">80</property>
      <property name="Name">libera_cliente_dt_ultima_compra</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">56</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption"><![CDATA[Valor da Ultima Compra]]></property>
      <property name="Height">13</property>
      <property name="Left">307</property>
      <property name="Name">Label6</property>
      <property name="Top">60</property>
      <property name="Width">135</property>
    </object>
    <object class="Edit" name="libera_cliente_vlr_ultima_compra" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">445</property>
      <property name="MaxLength">80</property>
      <property name="Name">libera_cliente_vlr_ultima_compra</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">56</property>
      <property name="Width">75</property>
    </object>
    <object class="ComboBox" name="libera_cliente_status" >
      <property name="Height">18</property>
      <property name="Items"><![CDATA[a:2:{s:1:&quot;S&quot;;s:3:&quot;Sim&quot;;s:1:&quot;N&quot;;s:3:&quot;Nao&quot;;}]]></property>
      <property name="Left">660</property>
      <property name="Name">libera_cliente_status</property>
      <property name="Top">57</property>
      <property name="Width">57</property>
      <property name="jsOnKeyPress">libera_cliente_statusJSKeyPress</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption"><![CDATA[Bloqueia o Credito]]></property>
      <property name="Height">13</property>
      <property name="Left">549</property>
      <property name="Name">Label7</property>
      <property name="Top">60</property>
      <property name="Width">107</property>
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
    <property name="Top">374</property>
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
