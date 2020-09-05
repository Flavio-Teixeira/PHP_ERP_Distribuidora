<?php
<object class="pagcontaspagar" name="pagcontaspagar" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">528</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">pagcontaspagar</property>
  <property name="Width">755</property>
  <property name="OnCreate">pagcontaspagarCreate</property>
  <property name="jsOnLoad">pagcontaspagarJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CONTAS A PAGAR - Contas a Pagar]]></property>
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
    <object class="Button" name="bt_buscar" >
      <property name="Caption">Procurar</property>
      <property name="Height">25</property>
      <property name="Left">531</property>
      <property name="Name">bt_buscar</property>
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_buscarClick</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Periodo de Vencimento]]></property>
      <property name="Height">13</property>
      <property name="Left">7</property>
      <property name="Name">Label3</property>
      <property name="Top">21</property>
      <property name="Width">132</property>
    </object>
    <object class="Edit" name="mgt_data_ini" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">142</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_data_ini</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">18</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_data_iniJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_data_iniJSKeyUp</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Ate]]></property>
      <property name="Height">13</property>
      <property name="Left">222</property>
      <property name="Name">Label4</property>
      <property name="Top">21</property>
      <property name="Width">20</property>
    </object>
    <object class="Edit" name="mgt_data_fim" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">246</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_data_fim</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_data_fimJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_data_fimJSKeyUp</property>
    </object>
    <object class="Label" name="Label21" >
      <property name="Caption">Status de Procura</property>
      <property name="Height">13</property>
      <property name="Left">327</property>
      <property name="Name">Label21</property>
      <property name="Top">21</property>
      <property name="Width">103</property>
    </object>
    <object class="ComboBox" name="mgt_status_procura" >
      <property name="Height">18</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:6:{s:9:&quot;Em Aberto&quot;;s:9:&quot;Em Aberto&quot;;s:4:&quot;Pago&quot;;s:4:&quot;Pago&quot;;s:12:&quot;Pago Parcial&quot;;s:12:&quot;Pago Parcial&quot;;s:9:&quot;Cancelado&quot;;s:9:&quot;Cancelado&quot;;s:9:&quot;Devolucao&quot;;s:9:&quot;Devolucao&quot;;s:5:&quot;Todos&quot;;s:5:&quot;Todos&quot;;}]]></property>
      <property name="Left">433</property>
      <property name="Name">mgt_status_procura</property>
      <property name="Top">18</property>
      <property name="Width">84</property>
      <property name="jsOnKeyPress">mgt_status_procuraJSKeyPress</property>
    </object>
    <object class="Label" name="Label22" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">7</property>
      <property name="Name">Label22</property>
      <property name="Top">53</property>
      <property name="Width">54</property>
    </object>
    <object class="Edit" name="mgt_descricao" >
      <property name="Height">21</property>
      <property name="Left">66</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_descricao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">49</property>
      <property name="Width">100</property>
      <property name="jsOnKeyPress">mgt_descricaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label23" >
      <property name="Caption"><![CDATA[Vlr. a Pagar]]></property>
      <property name="Height">13</property>
      <property name="Left">343</property>
      <property name="Name">Label23</property>
      <property name="Top">53</property>
      <property name="Width">67</property>
    </object>
    <object class="Edit" name="mgt_vlr_pagar" >
      <property name="Height">21</property>
      <property name="Left">413</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_vlr_pagar</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">49</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_vlr_pagarJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_vlr_pagarJSKeyUp</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption"><![CDATA[Nro.Lacto]]></property>
      <property name="Height">13</property>
      <property name="Left">491</property>
      <property name="Name">Label6</property>
      <property name="Top">53</property>
      <property name="Width">54</property>
    </object>
    <object class="Edit" name="mgt_numero_docto" >
      <property name="Height">21</property>
      <property name="Left">548</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_numero_docto</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">49</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_numero_doctoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_numero_doctoJSKeyUp</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Fornecedor</property>
      <property name="Height">13</property>
      <property name="Left">170</property>
      <property name="Name">Label7</property>
      <property name="Top">53</property>
      <property name="Width">65</property>
    </object>
    <object class="Edit" name="mgt_fornecedor" >
      <property name="Height">21</property>
      <property name="Left">237</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_fornecedor</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">49</property>
      <property name="Width">100</property>
      <property name="jsOnKeyPress">mgt_fornecedorJSKeyPress</property>
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
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_incluir" >
      <property name="Caption">Incluir</property>
      <property name="Height">25</property>
      <property name="Left">16</property>
      <property name="Name">bt_incluir</property>
      <property name="Top">47</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_incluirClick</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Cadastro</property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">472</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_cadastro" >
      <property name="Caption">Abrir Cadastro</property>
      <property name="Height">25</property>
      <property name="Left">617</property>
      <property name="Name">bt_cadastro</property>
      <property name="Top">16</property>
      <property name="Width">100</property>
      <property name="OnClick">bt_cadastroClick</property>
    </object>
    <object class="Edit" name="abrir_cadastro" >
      <property name="Height">21</property>
      <property name="Left">538</property>
      <property name="Name">abrir_cadastro</property>
      <property name="Top">18</property>
      <property name="Width">72</property>
      <property name="jsOnKeyPress">abrir_cadastroJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Codigo:]]></property>
      <property name="Height">13</property>
      <property name="Left">488</property>
      <property name="Name">Label1</property>
      <property name="Top">22</property>
      <property name="Width">46</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Para abrir o cadastro desejado, clique na linha desejada do grid acima e clique no botao &quot;Abrir Cadastro&quot; ou informe o Codigo/Numero desejado no campo ao lado.]]></property>
      <property name="Height">25</property>
      <property name="Left">6</property>
      <property name="Name">Label5</property>
      <property name="Top">16</property>
      <property name="Width">477</property>
    </object>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption">Registros Obtidos:</property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label2</property>
    <property name="Top">108</property>
    <property name="Width">107</property>
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
    <property name="Top">457</property>
    <property name="Width">730</property>
  </object>
  <object class="Panel" name="fundo_grid" >
    <property name="Color">#F4F1AA</property>
    <property name="Height">193</property>
    <property name="Left">8</property>
    <property name="Name">fundo_grid</property>
    <property name="ParentColor">0</property>
    <property name="Top">123</property>
    <property name="Width">731</property>
    <object class="DBGrid" name="registros" >
      <property name="Columns"><![CDATA[a:19:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Lancto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:19:&quot;mgt_conta_pagar_nro&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;40&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:5:&quot;Conta&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_conta_pagar_conta&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;40&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Data&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:20:&quot;mgt_conta_pagar_data&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_conta_pagar_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;103&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:11:&quot;Titulo (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_conta_pagar_valor&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;60&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Juros (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_conta_pagar_valor_juros&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;60&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Desc. (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_conta_pagar_valor_desconto&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;60&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Pagar (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_conta_pagar_valor_ser_pago&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;60&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Saldo (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_conta_pagar_saldo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;60&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Status&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:22:&quot;mgt_conta_pagar_status&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;110&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:1:&quot;-&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_conta_pagar_status_1&quot;;s:9:&quot;FontColor&quot;;s:7:&quot;#FF0000&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;10&quot;;}i:11;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:1:&quot;-&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_conta_pagar_status_2&quot;;s:9:&quot;FontColor&quot;;s:7:&quot;#00FF00&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;10&quot;;}i:12;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:1:&quot;-&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_conta_pagar_status_3&quot;;s:9:&quot;FontColor&quot;;s:7:&quot;#FF8000&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;10&quot;;}i:13;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:1:&quot;-&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_conta_pagar_status_4&quot;;s:9:&quot;FontColor&quot;;s:7:&quot;#0000FF&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;10&quot;;}i:14;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:1:&quot;-&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_conta_pagar_status_5&quot;;s:9:&quot;FontColor&quot;;s:7:&quot;#FFFF00&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;10&quot;;}i:15;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Observacao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_conta_pagar_observacao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;300&quot;;}i:16;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;DT.Pagto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_conta_pagar_data_pagto&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}i:17;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Fornecedor&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:31:&quot;mgt_conta_pagar_fornecedor_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;300&quot;;}i:18;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;DT.Emissao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_conta_pagar_data_emissao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Contas_Pagar</property>
      <property name="Height">162</property>
      <property name="Left">3</property>
      <property name="Name">registros</property>
      <property name="ReadOnly">1</property>
      <property name="Top">3</property>
      <property name="Width">725</property>
      <property name="jsOnRowChanged">registrosJSRowChanged</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Total: R$&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">219</property>
      <property name="Name">Label8</property>
      <property name="Top">172</property>
      <property name="Width">52</property>
    </object>
    <object class="Label" name="total_registros" >
      <property name="Caption">0.00</property>
      <property name="Height">13</property>
      <property name="Left">279</property>
      <property name="Name">total_registros</property>
      <property name="Top">172</property>
      <property name="Width">100</property>
    </object>
    <object class="Button" name="bt_imprimir" >
      <property name="Caption"><![CDATA[Imprimir Relacao de Pagamento]]></property>
      <property name="Height">21</property>
      <property name="Left">3</property>
      <property name="Name">bt_imprimir</property>
      <property name="ParentColor">0</property>
      <property name="Top">168</property>
      <property name="Width">200</property>
      <property name="OnClick">bt_imprimirClick</property>
    </object>
  </object>
  <object class="Panel" name="fundo_baixa" >
    <property name="Color">#FF8040</property>
    <property name="Height">75</property>
    <property name="Left">8</property>
    <property name="Name">fundo_baixa</property>
    <property name="ParentColor">0</property>
    <property name="Top">320</property>
    <property name="Width">731</property>
    <object class="GroupBox" name="GroupBox5" >
      <property name="Caption"><![CDATA[Efetuar a Baixa de todas as contas a pagar selecionadas]]></property>
      <property name="Height">69</property>
      <property name="Left">3</property>
      <property name="Name">GroupBox5</property>
      <property name="ParentColor">0</property>
      <property name="Top">3</property>
      <property name="Width">724</property>
      <object class="Edit" name="mgt_swap_selecionadas" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Left">86</property>
        <property name="MaxLength">255</property>
        <property name="Name">mgt_swap_selecionadas</property>
        <property name="ParentColor">0</property>
        <property name="TabOrder">1</property>
        <property name="Top">16</property>
        <property name="Width">337</property>
        <property name="jsOnKeyPress">mgt_swap_selecionadasJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_swap_selecionadasJSKeyUp</property>
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
        <property name="Left">616</property>
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
      <object class="Label" name="Label9" >
        <property name="Caption">Total Valor Selecionado</property>
        <property name="Height">13</property>
        <property name="Left">430</property>
        <property name="Name">Label9</property>
        <property name="Top">20</property>
        <property name="Width">132</property>
      </object>
      <object class="Edit" name="mgt_swap_valor_selecionadas" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">566</property>
        <property name="MaxLength">255</property>
        <property name="Name">mgt_swap_valor_selecionadas</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="TabOrder">1</property>
        <property name="Text">0.00</property>
        <property name="Top">16</property>
        <property name="Width">148</property>
        <property name="jsOnKeyPress">mgt_swap_valor_selecionadasJSKeyPress</property>
      </object>
    </object>
  </object>
  <object class="Panel" name="Panel1" >
    <property name="Color">#F4F1AA</property>
    <property name="Height">55</property>
    <property name="Left">8</property>
    <property name="Name">Panel1</property>
    <property name="ParentColor">0</property>
    <property name="Top">399</property>
    <property name="Width">730</property>
    <object class="Panel" name="Panel2" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;B&gt;Saldos Bancarios / Valores Recebidos / Valores a Pagar&lt;/B&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FF8040</property>
      <property name="Height">15</property>
      <property name="Left">3</property>
      <property name="Name">Panel2</property>
      <property name="ParentColor">0</property>
      <property name="Top">3</property>
      <property name="Width">724</property>
    </object>
    <object class="Panel" name="Panel3" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;B&gt;Vlr.Recebidos (R$)&lt;/B&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FF8040</property>
      <property name="Height">15</property>
      <property name="Left">134</property>
      <property name="Name">Panel3</property>
      <property name="ParentColor">0</property>
      <property name="Top">20</property>
      <property name="Width">107</property>
    </object>
    <object class="Panel" name="Panel4" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;B&gt;Valores a Pagar (R$)&lt;/B&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FF8040</property>
      <property name="Height">15</property>
      <property name="Left">243</property>
      <property name="Name">Panel4</property>
      <property name="ParentColor">0</property>
      <property name="Top">20</property>
      <property name="Width">122</property>
    </object>
    <object class="Panel" name="Panel5" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;B&gt;Valores Pagos (R$)&lt;/B&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FFCC66</property>
      <property name="Height">15</property>
      <property name="Left">505</property>
      <property name="Name">Panel5</property>
      <property name="ParentColor">0</property>
      <property name="Top">20</property>
      <property name="Width">111</property>
    </object>
    <object class="Panel" name="Panel6" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;B&gt;Saldo a Pagar (R$)&lt;/B&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FFCC66</property>
      <property name="Height">15</property>
      <property name="Left">618</property>
      <property name="Name">Panel6</property>
      <property name="ParentColor">0</property>
      <property name="Top">20</property>
      <property name="Width">109</property>
    </object>
    <object class="Panel" name="total_recebido" >
      <property name="Caption">0.00</property>
      <property name="Color">#FFFFFF</property>
      <property name="Font">
      <property name="Align">taRight</property>
      </property>
      <property name="Height">15</property>
      <property name="Left">134</property>
      <property name="Name">total_recebido</property>
      <property name="ParentColor">0</property>
      <property name="ParentFont">0</property>
      <property name="Top">37</property>
      <property name="Width">107</property>
    </object>
    <object class="Panel" name="total_pagar" >
      <property name="Caption">0.00</property>
      <property name="Color">#FFFFFF</property>
      <property name="Font">
      <property name="Align">taRight</property>
      </property>
      <property name="Height">15</property>
      <property name="Left">243</property>
      <property name="Name">total_pagar</property>
      <property name="ParentColor">0</property>
      <property name="ParentFont">0</property>
      <property name="Top">37</property>
      <property name="Width">122</property>
    </object>
    <object class="Panel" name="total_pago" >
      <property name="Caption">0.00</property>
      <property name="Color">#FFFFFF</property>
      <property name="Font">
      <property name="Align">taRight</property>
      </property>
      <property name="Height">15</property>
      <property name="Left">505</property>
      <property name="Name">total_pago</property>
      <property name="ParentColor">0</property>
      <property name="ParentFont">0</property>
      <property name="Top">37</property>
      <property name="Width">111</property>
    </object>
    <object class="Panel" name="total_saldo" >
      <property name="Caption">0.00</property>
      <property name="Color">#FFFFFF</property>
      <property name="Font">
      <property name="Align">taRight</property>
      </property>
      <property name="Height">15</property>
      <property name="Left">618</property>
      <property name="Name">total_saldo</property>
      <property name="ParentColor">0</property>
      <property name="ParentFont">0</property>
      <property name="Top">37</property>
      <property name="Width">109</property>
    </object>
    <object class="Panel" name="Panel7" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;B&gt;Recebidos - Pagar (R$)&lt;/B&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FF8040</property>
      <property name="Height">15</property>
      <property name="Left">367</property>
      <property name="Name">Panel7</property>
      <property name="ParentColor">0</property>
      <property name="Top">20</property>
      <property name="Width">136</property>
    </object>
    <object class="Panel" name="total_final" >
      <property name="Caption">0.00</property>
      <property name="Color">#FFFFFF</property>
      <property name="Font">
      <property name="Align">taRight</property>
      </property>
      <property name="Height">15</property>
      <property name="Left">367</property>
      <property name="Name">total_final</property>
      <property name="ParentColor">0</property>
      <property name="ParentFont">0</property>
      <property name="Top">37</property>
      <property name="Width">136</property>
    </object>
    <object class="Panel" name="Panel8" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;B&gt;Saldos Bancarios (R$)&lt;/B&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FF8040</property>
      <property name="Height">15</property>
      <property name="Left">3</property>
      <property name="Name">Panel8</property>
      <property name="ParentColor">0</property>
      <property name="Top">20</property>
      <property name="Width">129</property>
    </object>
    <object class="Panel" name="saldos_contas" >
      <property name="Caption">0.00</property>
      <property name="Color">#FFFFFF</property>
      <property name="Font">
      <property name="Align">taRight</property>
      </property>
      <property name="Height">15</property>
      <property name="Left">3</property>
      <property name="Name">saldos_contas</property>
      <property name="ParentColor">0</property>
      <property name="ParentFont">0</property>
      <property name="Top">37</property>
      <property name="Width">129</property>
    </object>
  </object>
  <object class="HiddenField" name="Busca_Efetuada" >
    <property name="Height">18</property>
    <property name="Left">123</property>
    <property name="Name">Busca_Efetuada</property>
    <property name="Top">105</property>
    <property name="Value">NAO</property>
    <property name="Width">145</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">653</property>
        <property name="Top">101</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
